-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema projeto_favor
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema projeto_favor
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `projeto_favor` DEFAULT CHARACTER SET utf8 ;
USE `projeto_favor` ;

-- -----------------------------------------------------
-- Table `projeto_favor`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto_favor`.`user` (
  `id_user` INT NOT NULL,
  `username` VARCHAR(50) NOT NULL,
  `nome` VARCHAR(50) NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `data_registo` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `ultimo_login` VARCHAR(45) NULL,
  `num_telemovel` VARCHAR(15) NULL,
  `localidade` VARCHAR(255) NULL,
  `pontuacao` INT NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) VISIBLE);


-- -----------------------------------------------------
-- Table `projeto_favor`.`area`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto_favor`.`area` (
  `id_area` INT NOT NULL AUTO_INCREMENT,
  `nome_area` VARCHAR(100) NULL,
  PRIMARY KEY (`id_area`));


-- -----------------------------------------------------
-- Table `projeto_favor`.`favor_pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto_favor`.`favor_pedido` (
  `id_favor_pedido` INT NOT NULL,
  `titulo` VARCHAR(255) GENERATED ALWAYS AS () VIRTUAL,
  `descricao` VARCHAR(225) NULL,
  `data` DATE NULL,
  `hora` DATE NULL,
  `finalizado` TINYINT NULL,
  `area_id_area` INT NOT NULL,
  `user_id_user_pediu` INT NOT NULL,
  PRIMARY KEY (`id_favor_pedido`, `area_id_area`, `user_id_user_pediu`),
  INDEX `fk_favor_pedido_area_idx` (`area_id_area` ASC) VISIBLE,
  INDEX `fk_favor_pedido_user1_idx` (`user_id_user_pediu` ASC) VISIBLE,
  CONSTRAINT `fk_favor_pedido_area`
    FOREIGN KEY (`area_id_area`)
    REFERENCES `projeto_favor`.`area` (`id_area`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_favor_pedido_user1`
    FOREIGN KEY (`user_id_user_pediu`)
    REFERENCES `projeto_favor`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `projeto_favor`.`favor_concedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projeto_favor`.`favor_concedido` (
  `id_favor_concedido` INT NOT NULL,
  `favor_pedido_id_favor_pedido` INT NOT NULL,
  `user_id_user_concedeu` INT NOT NULL,
  PRIMARY KEY (`id_favor_concedido`, `favor_pedido_id_favor_pedido`, `user_id_user_concedeu`),
  INDEX `fk_favor_concedido_favor_pedido1_idx` (`favor_pedido_id_favor_pedido` ASC) VISIBLE,
  INDEX `fk_favor_concedido_user1_idx` (`user_id_user_concedeu` ASC) VISIBLE,
  CONSTRAINT `fk_favor_concedido_favor_pedido1`
    FOREIGN KEY (`favor_pedido_id_favor_pedido`)
    REFERENCES `projeto_favor`.`favor_pedido` (`id_favor_pedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_favor_concedido_user1`
    FOREIGN KEY (`user_id_user_concedeu`)
    REFERENCES `projeto_favor`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
