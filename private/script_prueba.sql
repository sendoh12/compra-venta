CREATE TABLE `cv_mensajes` (
	`MENSAJES_ID` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`MENSAJES_NOMBRE` VARCHAR(50) NULL DEFAULT '0',
	`MENSAJES_CORREO` VARCHAR(50) NULL DEFAULT '0',
	`MENSAJES_TEXTO` VARCHAR(50) NULL DEFAULT '0',
	PRIMARY KEY (`MENSAJES_ID`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=2
;
