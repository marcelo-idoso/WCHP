DROP trigger if exists trigger_limite_insert;
DELIMITER //
CREATE definer='root'@'localhost' TRIGGER trigger_limite_insert BEFORE INSERT
ON cadempresa
FOR EACH ROW
BEGIN
	IF (SELECT count(ID) FROM CADEMPRESA) > 0 THEN
		 CALL `'Não e Possivel Cadastrar Mais que Um registro'`;
	END IF;
end;