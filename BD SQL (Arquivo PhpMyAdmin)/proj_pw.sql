-- -----------------------------------------------------
-- Schema proj_pw
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `proj_pw` DEFAULT CHARACTER SET utf8 ;
USE `proj_pw` ;

-- -----------------------------------------------------
-- Table `proj_pw`.`pessoa`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `proj_pw`.`pessoa` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `altura` int(3) NOT NULL,
  `peso` int(3) NOT NULL,
  `d_n` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
);