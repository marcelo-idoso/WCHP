<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController ;
use Zend\Paginator\Adapter\ArrayAdapter;
use Zend\Paginator\Paginator;
use Zend\View\Model\ViewModel;
use Zend\Session\Container;

abstract class AbsctractCrudController extends AbstractActionController{
    
    protected $em;
    protected $service;
    protected $entity;
    protected $from;
    protected $filter; // Refente ao filtro do Form
    protected $filtro = array(); // Referente ao Filtro da URL
    protected $where = array();
    protected $order = array();

    protected $route;
    protected $modulo;
    protected $controller ;
    protected $action;
    
    public function indexAction() {
        // instanciando os services
        $serviceAuth = 1 ;
        
        //defimindo as variaveis
        $filtro = $this->params()->fromQuery();
        $this->setFiltro($filtro);
        
        $page - isset($filtro['pagina']) ? $filtro['pagina'] : 1;
        $where = $this->getWhere(array('pagina'));
        
        
        $list = $this->getEm($this->entity)->fildFilter($where , $this->order);
        
        $paginator = $this->paginator($list, $page);
        return new ViewModel(
                array(
                    'data'      => $paginator,
                    'pagina'    => $page,
                    'filtro'    => $filtro,
                    'controler' => $this->controller
                
                ));
    }
    public function cadastrarAction(){
        //pegando parametros da URL
        $request = $this->getRequest();
        
        // instaciando o formulario 
        $form = $this->getServiceLocator();
        
        // Tratando os dados filtros vindos do container
        $container = new Container(str_replace("'", "", $this->controller));
        
        $url = "";
        $url.= isset($container->filtro['params']['pagina']) ? "pagina=" . $container->filter['params']['pagina'] : "pagina=1";
        
        if ($request->isPost){
            if($this->filter != NULL){
                $form->setInputFilter($this->getServiceLocator()->get($this->filter));
            }
            $data = $request->getPost()->toArray();
            $form->setData($data);
            if ($form->isValid()){
                $service = $this->getServiceLocator()->get($this->service);
                if($service->insert($data)){
                    // sucesso
                }else{
                    //erro
                }
                if ($this->modulo === false){
                return $this->redirect()->toRoute($this->route, array('controller' => $this->controller));
                
                }else {
                    return $this->redirect()->toUrl("/" . $this->modulo . "/" .$this->controller);
                }
            }
        }
        
        return new ViewModel(
                array(
                    'form'          => $form,
                    'controller'    => $this->controller
        ));
    }

    public function getEm($entity = NULL) {

        if ($this->em === null) {
            $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }
        if ($entity !== NULL) {
            return $this->em->getRepository($entity);
        }
    }

    public function paginator($list, $page, $itensPorPagina = 10) {
        $paginator = new Paginator(new ArrayAdapter($list));
        $paginator->setCurrentPageNumber($page)
                  ->setDefaultItemCountPerPage($itensPorPagina);

        return $paginator;
    }
    
    public function getFiltro() {
        return $this->filtro;
    }
    
    public function setFiltro(array $filtro) {
        // Verificar se foi passado algum valor no filtro
        if (count($filtro)){
            $this->filtro['params'] = $filtro ;
            
        }
        //criar uma sessao com os filtros setados para usar no cadastro ou alteraçõpes para voltar a pagina anterior
        $container = new Container(str_replace("-", "", $this->controller));
        $container->filtro = $this->filtro ; 
    }
    
    public function getWhere(array $exceptionsFiltro) {
        $where = $this->where;
        $filtro = $this->filtro;
        
        if (isset($filtro['params']) && count($filtro['params'])) {
            foreach ($filtro['params'] as $urlNomeFiltro => $dbNomeFiltro){
                if ((!empty($dbNomeFiltro) || $dbNomeFiltro == '0') && !in_array($urlNomeFiltro, $exceptionsFiltro)){
                    $where[$urlNomeFiltro] = $dbNomeFiltro ;
                }
            }
        }
        
        return $where;
    }
    
    public function setWhere(array $where) {
        if (count($where)) {
            foreach ($where as $indice => $valor) {
                $this->where[$indice] = $valor ;
            }
        }
    }
}
