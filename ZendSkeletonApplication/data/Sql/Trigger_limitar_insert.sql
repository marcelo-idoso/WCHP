DROP trigger trigger_limite_insert;

DELIMITER //
CREATE definer='root'@'localhost' TRIGGER trigger_limite_insert BEFORE INSERT
ON painel
FOR EACH ROW
BEGIN
	IF (SELECT count(ID) FROM PAINEL) > 0 THEN
		 CALL `'Não e Possivel Cadastrar Mais que Um registro'`;
	END IF;
end;