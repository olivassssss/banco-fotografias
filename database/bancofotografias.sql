-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema bancofotografias
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bancofotografias
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `epiz_33570655_bancofotografias` DEFAULT CHARACTER SET utf8 ;
USE `epiz_33570655_bancofotografias` ;

-- -----------------------------------------------------
-- Table `epiz_33570655_bancofotografias`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_33570655_bancofotografias`.`categoria` (
  `idcategoria` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idcategoria`))
ENGINE = InnoDB
AUTO_INCREMENT = 120
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `epiz_33570655_bancofotografias`.`utilizador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_33570655_bancofotografias`.`utilizador` (
  `idutilizador` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `admin` TINYINT(4) NOT NULL DEFAULT 0,
  `email` VARCHAR(255) NOT NULL,
  `newsletter` TINYINT(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idutilizador`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `epiz_33570655_bancofotografias`.`fotografia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `epiz_33570655_bancofotografias`.`fotografia` (
  `idfotografia` INT(11) NOT NULL AUTO_INCREMENT,
  `legenda` VARCHAR(45) NULL DEFAULT NULL,
  `imagem_url` VARCHAR(300) NOT NULL,
  `idcategoria` VARCHAR(100) NOT NULL,
  `idutilizadorFK` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idfotografia`),
  UNIQUE INDEX `idfotografia_UNIQUE` (`idfotografia` ASC),
  INDEX `fk_fotografia_utilizador_idx` (`idutilizadorFK` ASC),
  CONSTRAINT `fk_fotografia_utilizador`
    FOREIGN KEY (`idutilizadorFK`)
    REFERENCES `epiz_33570655_bancofotografias`.`utilizador` (`idutilizador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 50
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
