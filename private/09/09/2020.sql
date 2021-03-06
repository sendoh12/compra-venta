ALTER TABLE `cv_propiedades`
	ADD COLUMN `PROPIEDADES_MONEDA` VARCHAR(50) NOT NULL DEFAULT '' AFTER `PROPIEDADES_PRECIO`;

ALTER TABLE `cv_propiedades`
	ADD COLUMN `PROPIEDADES_TERRENO_TAMAÑO` VARCHAR(50) NULL DEFAULT NULL AFTER `PROPIEDADES_TERRENOS`,
	ADD COLUMN `PROPIEDADES_CONSTRUCCION_TAMAÑO` VARCHAR(50) NULL DEFAULT NULL AFTER `PROPIEDADES_CONSTRUCCION`,
	ADD COLUMN `PROPIEDADES_CUOTA_MONEDA` VARCHAR(50) NULL DEFAULT NULL AFTER `PROPIEDADES_CUOTA`;

ALTER TABLE `cv_propiedades`
	CHANGE COLUMN `PROPIEDADES_PRECIO` `PROPIEDADES_PRECIO` FLOAT NULL DEFAULT NULL AFTER `PROPIEDADES_OPERACION`;
ALTER TABLE `cv_propiedades`
	CHANGE COLUMN `PROPIEDADES_TERRENOS` `PROPIEDADES_TERRENOS` FLOAT NULL DEFAULT NULL AFTER `PROPIEDADES_MEDIO_BAÑO`;

ALTER TABLE `cv_propiedades`
	CHANGE COLUMN `PROPIEDADES_CONSTRUCCION` `PROPIEDADES_CONSTRUCCION` FLOAT NULL DEFAULT NULL AFTER `PROPIEDADES_TERRENO_TAMAÑO`;
ALTER TABLE `cv_propiedades`
	CHANGE COLUMN `PROPIEDADES_CUOTA` `PROPIEDADES_CUOTA` FLOAT NULL DEFAULT NULL AFTER `PROPIEDADES_ESTACIONAMIENTO`;
