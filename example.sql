CREATE TABLE IF NOT EXISTS `test`.`test_table` (
  `nombre` varchar(45) NOT NULL,
  `primer_apellido` varchar(45) NOT NULL,
  `segundo_apellido` varchar(45) NOT NULL,
  `nombre_empresa` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `codigo_postal` int(8) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `telefono_fijo` int(45) NOT NULL,
  `telefono_movil` int(45) NOT NULL,
  `id` int(8) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
