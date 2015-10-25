-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema guestbook
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema guestbook
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `guestbook` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `guestbook` ;

-- -----------------------------------------------------
-- Table `guestbook`.`guests`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `guestbook`.`guests` (
  `fname` VARCHAR(45) NOT NULL COMMENT '',
  `lname` VARCHAR(45) NULL COMMENT '',
  `email` VARCHAR(45) NOT NULL COMMENT '',
  `comment` TEXT NULL COMMENT '',
  PRIMARY KEY (`fname`, `email`)  COMMENT '')
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
