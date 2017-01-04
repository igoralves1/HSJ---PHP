INSERT INTO patientecurrentsatus_history 
    (fk_patient, disp_name_patient, paciente_session, fk_exam_status_type, 
    disp_exam_status_type, dt_sys_admission, fk_tournee_medicale_fait, 
    disp_tournee_medicale_fait, fk_tournee_med_nursing_available, 
    disp_tournee_nursing_available, fk_patron, disp_name_patron, 
    fk_type_med, disp_type_med, fk_fellow, disp_name_fellow, fk_nursing, 
    disp_name_nursing, fk_pharmacist, roomnumber, disp_name_pharmacist, 
    fk_resident, disp_name_resident, fk_type_nursing, disp_type_nursing, 
    fk_type_assistance_respiratoire, disp_type_assistance_respiratoire, 
    fk_isolement, disp_isolement, fk_codevacuation, fk_chargetravail, 
    fk_traitmentsparticuliers, disp_traitmentsparticuliers, fk_deplacementcritique, 
    disp_deplacementcritique, note, scheduled_departure, performed_departure, 
    nb_lit_hospitalier, mouvement_alert, codevacuation_hexacode, 
    traitmentsparticuliers_hexacode, mouvement_alert_path, 
    fk_type_conge, disp_type_conge, disp_type_conge_hexacode)
    SELECT 
    fk_patient, disp_name_patient, paciente_session, fk_exam_status_type, 
    disp_exam_status_type, dt_sys_admission, fk_tournee_medicale_fait, 
    disp_tournee_medicale_fait, fk_tournee_med_nursing_available, 
    disp_tournee_nursing_available, fk_patron, disp_name_patron, 
    fk_type_med, disp_type_med, fk_fellow, disp_name_fellow, fk_nursing, 
    disp_name_nursing, fk_pharmacist, roomnumber, disp_name_pharmacist, 
    fk_resident, disp_name_resident, fk_type_nursing, disp_type_nursing, 
    fk_type_assistance_respiratoire, disp_type_assistance_respiratoire, 
    fk_isolement, disp_isolement, fk_codevacuation, fk_chargetravail, 
    fk_traitmentsparticuliers, disp_traitmentsparticuliers, fk_deplacementcritique, 
    disp_deplacementcritique, note, scheduled_departure, performed_departure, 
    nb_lit_hospitalier, mouvement_alert, codevacuation_hexacode, 
    traitmentsparticuliers_hexacode, mouvement_alert_path, 
    fk_type_conge, disp_type_conge, disp_type_conge_hexacode
    FROM patientecurrentsatus PST
    WHERE PST.roomnumber='20'




INSERT INTO examcurrentsession_history 
(fk_exam, fk_session, dt_requested, dt_prevu, dt_finished, fk_status_type, note, dt_sys)
SELECT
fk_exam, fk_session, dt_requested, dt_prevu, dt_finished, fk_status_type, note, dt_sys
FROM examcurrentsession ECS
WHERE ECS.fk_session='abc_session_1'



INSERT INTO `hsjsi`.`` (`dt_current`, ``, ``, `fellow_name_concatenated`, `type_med_type`, `status_at_work`) VALUES ('gdf', 'df', 'dfg', 'dfg', 'dfg', 'dfg');





INSERT INTO fellow_type_med_availability (dt_current, fk_type_med, fk_fellow, fellow_name_concatenated, type_med_type, status_at_work) 
VALUES 

(NOW(),                 '1','1',  'BARTHÉLÉMY. S', 'Chir Cardiaque', '1'),
('2016-05-01 10:12:18', '1','1',  'BARTHÉLÉMY. S', 'Chir Cardiaque', '0'),
('2016-02-01 10:12:18', '1','1',  'BARTHÉLÉMY. S', 'Chir Cardiaque', '0'),
('2016-03-01 10:12:18', '1','1',  'BARTHÉLÉMY. S', 'Chir Cardiaque', '0'),

(NOW(),                 '2','2',  'CHOMTON. M ', 'Pediatrie A', '1'),
('2016-05-01 10:12:18', '2','2',  'CHOMTON. M', 'Pediatrie A', '0'),
('2016-02-01 10:12:18', '2','2',  'CHOMTON. M', 'Pediatrie A', '0'),
('2016-03-01 10:12:18', '2','2',  'CHOMTON. M', 'Pediatrie A', '0'),

(NOW(),                 '3','4',  'DE CLOEDT. L', 'Pediatrie B', '1'),
('2016-05-01 10:12:18', '3','4',  'DE CLOEDT. L', 'Pediatrie B', '0'),
('2016-02-01 10:12:18', '3','4',  'DE CLOEDT. L', 'Pediatrie B', '0'),
('2016-03-01 10:12:18', '3','4',  'DE CLOEDT. L', 'Pediatrie B', '0');

















-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema hsjsi
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema hsjsi
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hsjsi` DEFAULT CHARACTER SET utf8 ;
USE `hsjsi` ;

-- -----------------------------------------------------
-- Table `hsjsi`.`userprivileges`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`userprivileges` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `privileges` VARCHAR(80) NOT NULL COMMENT '0-Admin\n1-Child(father)\n2-Others (see later)',
  `description` VARCHAR(80) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`userapp`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`userapp` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `active` VARCHAR(1) NOT NULL DEFAULT 0 COMMENT '0-no\n1-yes',
  `login` VARCHAR(80) NOT NULL COMMENT 'suggestion - profissional e-mail',
  `password` VARCHAR(80) NOT NULL,
  `fk_userprivileges` INT NOT NULL,
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC),
  INDEX `fkusrpriv_idx` (`fk_userprivileges` ASC),
  CONSTRAINT `fkusrpriv`
    FOREIGN KEY (`fk_userprivileges`)
    REFERENCES `hsjsi`.`userprivileges` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`patient`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`patient` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `nb_dossier` VARCHAR(50) NOT NULL,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `status` VARCHAR(1) NOT NULL COMMENT '0-inactive\n1-active',
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nb_dossier_UNIQUE` (`nb_dossier` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`nursing`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`nursing` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `pic` VARCHAR(80) NULL,
  `status` VARCHAR(1) NOT NULL DEFAULT 0,
  `dt_sys` DATETIME NOT NULL,
  `tel` VARCHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`typeresident`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`typeresident` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `description` VARCHAR(80) NOT NULL,
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`resident`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`resident` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `pic` VARCHAR(80) NULL,
  `fk_type` INT NOT NULL,
  `status` VARCHAR(1) NOT NULL DEFAULT 0 COMMENT '0-inactive\n1-active',
  `dt_sys` DATETIME NOT NULL,
  `tel` VARCHAR(15) NULL,
  PRIMARY KEY (`id`),
  INDEX `fkresidtyppe_idx` (`fk_type` ASC),
  CONSTRAINT `fkresidtyppe`
    FOREIGN KEY (`fk_type`)
    REFERENCES `hsjsi`.`typeresident` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`type_nursing`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`type_nursing` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(100) NOT NULL COMMENT '1-Soins intensif Pediatric \n2-Soins intensif Intermediaire',
  `description` MEDIUMTEXT NULL,
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`, `type`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`type_med`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`type_med` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(80) NOT NULL COMMENT '1-N/A\n2-Cardiac surgery\n3-Pediatric I\n4-Pediatric II\n',
  `description` MEDIUMTEXT NULL,
  `disp_type_med` VARCHAR(80) NOT NULL COMMENT 'A - Pedi A\nB - Pedi B\nC - Chir Cardiac\n',
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`type_assistance_respiratoire`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`type_assistance_respiratoire` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(80) NOT NULL COMMENT '1-N/A\n2-NV - Non ventile\n3-VNI - Ventile non invasiv\n4-VI - Ventile invasif ',
  `description` MEDIUMTEXT NULL,
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`isolement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`isolement` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `isolement` VARCHAR(80) NOT NULL COMMENT '1-Contact (vert)\n2-Goutellettes –contact (bleu)\n3-Contact + (violet)\n4-Goutellettes (bleu pâle)\n5-Préventif (orange)\n6-Aérien (rouge)',
  `description` MEDIUMTEXT NULL,
  `hexrgbcode` VARCHAR(7) NOT NULL DEFAULT '#',
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`evacuation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`evacuation` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `evacuation` VARCHAR(80) NOT NULL COMMENT '1-Vert\n2-Jaune\n3-Rouge',
  `description` MEDIUMTEXT NULL,
  `hexrgbcode` VARCHAR(7) NOT NULL DEFAULT '#',
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`chargetravail`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`chargetravail` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `chargetravail` VARCHAR(80) NOT NULL,
  `description` MEDIUMTEXT NULL,
  `hexrgbcode` VARCHAR(7) NOT NULL DEFAULT '#' COMMENT '1\n2\n3\n4',
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`, `chargetravail`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`fellow`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`fellow` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `pic` VARCHAR(80) NULL,
  `status` VARCHAR(1) NOT NULL DEFAULT 0 COMMENT '0-inactive\n1-active',
  `dt_sys` DATETIME NOT NULL,
  `tel` VARCHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`pharmacist`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`pharmacist` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `pic` VARCHAR(80) NULL,
  `status` VARCHAR(1) NOT NULL DEFAULT 0,
  `dt_sys` DATETIME NOT NULL,
  `tel` VARCHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`patron`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`patron` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `pic` VARCHAR(80) NULL,
  `status` VARCHAR(1) NOT NULL DEFAULT 0,
  `dt_sys` DATETIME NOT NULL,
  `tel` VARCHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`room`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`room` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `roomnumber` VARCHAR(5) NOT NULL,
  `pression` VARCHAR(20) NOT NULL DEFAULT 0 COMMENT '0-N/A\n1-Positive\n2-Negative\n',
  `hemodialysis` VARCHAR(20) NOT NULL DEFAULT 0 COMMENT '0-no\n1-yes',
  `soins_palliatif` VARCHAR(20) NULL,
  `tel` VARCHAR(20) NOT NULL DEFAULT 0,
  `virtualroom` VARCHAR(1) NULL COMMENT '0-no\n1-yes\n',
  `dt_sys` VARCHAR(80) NOT NULL,
  `mac_addrss` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `roomnumber_UNIQUE` (`roomnumber` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`traitements_particuliers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`traitements_particuliers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(80) NOT NULL COMMENT '1-N/A\n2-NV - Non ventile\n3-VNI - Ventile non invasiv\n4-VI - Ventile invasif ',
  `description` MEDIUMTEXT NULL,
  `hexrgbcode` VARCHAR(7) NOT NULL DEFAULT '#' COMMENT '1\n2\n3\n4',
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`deplacement_critique`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`deplacement_critique` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(80) NOT NULL,
  `description` MEDIUMTEXT NULL,
  `hexrgbcode` VARCHAR(7) NOT NULL DEFAULT '#' COMMENT '1\n2\n3\n4',
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`examstatus_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`examstatus_type` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(80) NOT NULL COMMENT '0-N/A (no exams was assigned)\n2-waiting (at laste one exam was not done)\n1-done (all exams in the list must be done)',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`tournee_medicale_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`tournee_medicale_type` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(80) NOT NULL COMMENT '0-Non\n1-Oui',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`tournee_med_nursing_available_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`tournee_med_nursing_available_type` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(80) NULL COMMENT '0-Non\n1-Oui\n',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`type_conge`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`type_conge` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(80) NOT NULL COMMENT 'NA\nCONGE ETAGE                    -     #032149\nCONGE MAISON                  -     #074daa\nCONGE TEMPORAIRE           -     #045b61',
  `description` MEDIUMTEXT NULL,
  `hexrgbcode` VARCHAR(7) NOT NULL DEFAULT '#',
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`patientecurrentsatus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`patientecurrentsatus` (
  `fk_patient` BIGINT NOT NULL COMMENT 'This table will store only the current status of the patient.\nEach change, makes to save the current staus in a history table and the aplly the changes in a history table.\nOnce the tratement has ended, this is the final status, grab the whole line, save inside the history and delete from current status. ',
  `disp_name_patient` VARCHAR(100) NOT NULL,
  `paciente_session` VARCHAR(50) NOT NULL COMMENT 'That will be a number like SESSION. Composed by \npatient.nb_dossier+datetime+milisseconds. (created by the system)\n\nthis number will be used to track a patinent session in te service.\nwill be used to link to exams',
  `fk_exam_status_type` INT NOT NULL DEFAULT 0 COMMENT '0-N/A (no exams was assigned)\n1-waiting (at laste one exam was not done)\n2-done (all exams in the list must be done)\n\n',
  `disp_exam_status_type` VARCHAR(100) NOT NULL,
  `dt_sys_admission` DATETIME NOT NULL,
  `fk_tournee_medicale_fait` INT NOT NULL DEFAULT 0 COMMENT 'tournoi medicale was done\n0-Non\n1-Oui',
  `disp_tournee_medicale_fait` VARCHAR(100) NOT NULL,
  `fk_tournee_med_nursing_available` INT NOT NULL COMMENT 'Nursing is avaliable pour le tournoi\n0-Non\n1-Oui\n',
  `disp_tournee_nursing_available` VARCHAR(100) NOT NULL,
  `fk_patron` INT NOT NULL,
  `disp_name_patron` VARCHAR(100) NOT NULL,
  `fk_type_med` INT NOT NULL,
  `disp_type_med` VARCHAR(100) NOT NULL,
  `fk_fellow` INT NOT NULL,
  `disp_name_fellow` VARCHAR(100) NOT NULL,
  `fk_nursing` INT NOT NULL,
  `disp_name_nursing` VARCHAR(100) NOT NULL,
  `fk_pharmacist` INT NOT NULL,
  `roomnumber` VARCHAR(5) NOT NULL COMMENT 'do not use id becaouse there is no room nb 13',
  `disp_name_pharmacist` VARCHAR(100) NOT NULL,
  `fk_resident` INT NOT NULL,
  `disp_name_resident` VARCHAR(100) NOT NULL,
  `fk_type_nursing` INT NOT NULL,
  `disp_type_nursing` VARCHAR(100) NOT NULL,
  `fk_type_assistance_respiratoire` INT NOT NULL,
  `disp_type_assistance_respiratoire` VARCHAR(100) NOT NULL,
  `fk_isolement` INT NOT NULL,
  `disp_isolement` VARCHAR(100) NOT NULL,
  `fk_codevacuation` INT NOT NULL,
  `fk_chargetravail` INT NOT NULL,
  `fk_traitmentsparticuliers` INT NOT NULL,
  `disp_traitmentsparticuliers` VARCHAR(100) NOT NULL,
  `fk_deplacementcritique` INT NOT NULL,
  `disp_deplacementcritique` VARCHAR(100) NOT NULL,
  `note` LONGTEXT NULL,
  `scheduled_departure` DATETIME NULL,
  `performed_departure` DATETIME NULL,
  `nb_lit_hospitalier` VARCHAR(50) NOT NULL,
  `mouvement_alert` VARCHAR(80) NOT NULL DEFAULT '1' COMMENT '0-Non\n1-Oui',
  `codevacuation_hexacode` VARCHAR(8) NULL,
  `traitmentsparticuliers_hexacode` VARCHAR(8) NULL,
  `mouvement_alert_path` VARCHAR(80) NULL DEFAULT '\"\"',
  `fk_type_conge` INT NOT NULL,
  `disp_type_conge` VARCHAR(80) NOT NULL,
  `disp_type_conge_hexacode` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`fk_patient`, `paciente_session`, `dt_sys_admission`, `roomnumber`),
  INDEX `fkkpatientt_idx` (`fk_patient` ASC),
  INDEX `fkkresidentt_idx` (`fk_resident` ASC),
  INDEX `fkknursing_idx` (`fk_nursing` ASC),
  INDEX `fkktypnurs_idx` (`fk_type_nursing` ASC),
  INDEX `fkktpmeed_idx` (`fk_type_med` ASC),
  INDEX `fkktypassresp_idx` (`fk_type_assistance_respiratoire` ASC),
  INDEX `fkkisolamnt_idx` (`fk_isolement` ASC),
  INDEX `fkkevacuation_idx` (`fk_codevacuation` ASC),
  INDEX `fkkchargetravail_idx` (`fk_chargetravail` ASC),
  UNIQUE INDEX `pacientesession_UNIQUE` (`paciente_session` ASC),
  INDEX `fkkpharmacistfg_idx` (`fk_pharmacist` ASC),
  INDEX `fkkpattronn_idx` (`fk_patron` ASC),
  INDEX `fkroomnnmbbr_idx` (`roomnumber` ASC),
  INDEX `fk_traitmmmnetpart_idx` (`fk_traitmentsparticuliers` ASC),
  INDEX `fk_deplaccritq_idx` (`fk_deplacementcritique` ASC),
  INDEX `fkkfellow_idx` (`fk_fellow` ASC),
  INDEX `fk_sttatus_eexams_ttype_idx` (`fk_exam_status_type` ASC),
  INDEX `fk_tour_med_idx` (`fk_tournee_medicale_fait` ASC),
  INDEX `fk_tour_nursg_idx` (`fk_tournee_med_nursing_available` ASC),
  INDEX `fk_fkcongetype_idx` (`fk_type_conge` ASC),
  UNIQUE INDEX `roomnumber_UNIQUE` (`roomnumber` ASC),
  CONSTRAINT `fkkpatientt`
    FOREIGN KEY (`fk_patient`)
    REFERENCES `hsjsi`.`patient` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkkresidentt`
    FOREIGN KEY (`fk_resident`)
    REFERENCES `hsjsi`.`resident` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkknursing`
    FOREIGN KEY (`fk_nursing`)
    REFERENCES `hsjsi`.`nursing` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkktypnurs`
    FOREIGN KEY (`fk_type_nursing`)
    REFERENCES `hsjsi`.`type_nursing` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkktpmeed`
    FOREIGN KEY (`fk_type_med`)
    REFERENCES `hsjsi`.`type_med` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkktypassresp`
    FOREIGN KEY (`fk_type_assistance_respiratoire`)
    REFERENCES `hsjsi`.`type_assistance_respiratoire` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkkisolamnt`
    FOREIGN KEY (`fk_isolement`)
    REFERENCES `hsjsi`.`isolement` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkkevacuation`
    FOREIGN KEY (`fk_codevacuation`)
    REFERENCES `hsjsi`.`evacuation` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkkchargetravail`
    FOREIGN KEY (`fk_chargetravail`)
    REFERENCES `hsjsi`.`chargetravail` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkkfellow`
    FOREIGN KEY (`fk_fellow`)
    REFERENCES `hsjsi`.`fellow` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkkpharmacistfg`
    FOREIGN KEY (`fk_pharmacist`)
    REFERENCES `hsjsi`.`pharmacist` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkkpattronn`
    FOREIGN KEY (`fk_patron`)
    REFERENCES `hsjsi`.`patron` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkroomnnmbbr`
    FOREIGN KEY (`roomnumber`)
    REFERENCES `hsjsi`.`room` (`roomnumber`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_traitmmmnetpart`
    FOREIGN KEY (`fk_traitmentsparticuliers`)
    REFERENCES `hsjsi`.`traitements_particuliers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_deplaccritq`
    FOREIGN KEY (`fk_deplacementcritique`)
    REFERENCES `hsjsi`.`deplacement_critique` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_sttatus_eexams_ttype`
    FOREIGN KEY (`fk_exam_status_type`)
    REFERENCES `hsjsi`.`examstatus_type` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tour_med`
    FOREIGN KEY (`fk_tournee_medicale_fait`)
    REFERENCES `hsjsi`.`tournee_medicale_type` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tour_nursg`
    FOREIGN KEY (`fk_tournee_med_nursing_available`)
    REFERENCES `hsjsi`.`tournee_med_nursing_available_type` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_fkcongetype`
    FOREIGN KEY (`fk_type_conge`)
    REFERENCES `hsjsi`.`type_conge` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`statusroom`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`statusroom` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `statusroom` VARCHAR(80) NOT NULL,
  `description` VARCHAR(50) NULL COMMENT '1-Disponible\n2-Occupé\n3-À désinfecter\n4-Indisponible',
  `hexrgbcode` VARCHAR(7) NOT NULL DEFAULT '#',
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`roomcurrentstatus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`roomcurrentstatus` (
  `fk_room` INT NOT NULL COMMENT 'Store the current status for each room.\nAs we have 32 rooms, we will have 32 status.\nThe status history will be stored in roomstatushistory',
  `fk_statusroom` INT NOT NULL,
  `dt_sys` DATETIME NOT NULL,
  INDEX `fkkstatusrrromfk_idx` (`fk_statusroom` ASC),
  INDEX `fkroomstatukfk_idx` (`fk_room` ASC),
  PRIMARY KEY (`fk_room`),
  CONSTRAINT `fkkstatusrrromfk`
    FOREIGN KEY (`fk_statusroom`)
    REFERENCES `hsjsi`.`statusroom` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkroomstatukfk`
    FOREIGN KEY (`fk_room`)
    REFERENCES `hsjsi`.`room` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`type_exams`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`type_exams` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(80) NULL COMMENT '1-bloc\n2-exam',
  `hexrgbcode` VARCHAR(7) NOT NULL DEFAULT '#' COMMENT '1\n2\n3\n4',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`exams`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`exams` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `exams` VARCHAR(80) NOT NULL,
  `place` VARCHAR(100) NULL,
  `descripion` MEDIUMTEXT NULL,
  `hexrgbcode` VARCHAR(7) NOT NULL DEFAULT '#' COMMENT '1\n2\n3\n4',
  `fk_type_exams` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_exams_type_idx` (`fk_type_exams` ASC),
  CONSTRAINT `fk_exams_type`
    FOREIGN KEY (`fk_type_exams`)
    REFERENCES `hsjsi`.`type_exams` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`examcurrentsession`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`examcurrentsession` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT 'Will store the current status of each exam for each current patient SESSTION.\n',
  `fk_exam` INT NOT NULL,
  `fk_session` VARCHAR(50) NOT NULL,
  `dt_requested` DATETIME NULL,
  `dt_prevu` DATETIME NULL,
  `dt_finished` VARCHAR(80) NULL,
  `fk_status_type` INT NOT NULL DEFAULT '1' COMMENT '1-waiting\n2-done\n\n0-N/A (no exams was assigned)\n1-waiting (at laste one exam was not done)\n2-done (all exams in the list must be done)',
  `note` MEDIUMTEXT NULL,
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fkexamm_idx` (`fk_exam` ASC),
  INDEX `fkksessionpatient_idx` (`fk_session` ASC),
  INDEX `fkexamsttta_idx` (`fk_status_type` ASC),
  CONSTRAINT `fkksessionpatient`
    FOREIGN KEY (`fk_session`)
    REFERENCES `hsjsi`.`patientecurrentsatus` (`paciente_session`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkexamm`
    FOREIGN KEY (`fk_exam`)
    REFERENCES `hsjsi`.`exams` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkexamsttta`
    FOREIGN KEY (`fk_status_type`)
    REFERENCES `hsjsi`.`examstatus_type` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'All the data related to each patient session will stay in this table untill patient will be relased from the service.\nOnce the patient is released, the data will be send to patientexamshistory and deleted fom examcurrentsession.\nSo the best approach to gram information will be \" select * \"  then create an array of exams for each fk_session';


-- -----------------------------------------------------
-- Table `hsjsi`.`examcurrentsession_history`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`examcurrentsession_history` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT 'Will store the current status of each exam for each current patient SESSTION.\n',
  `fk_exam` INT NOT NULL,
  `fk_session` VARCHAR(50) NOT NULL,
  `dt_requested` DATETIME NULL,
  `dt_prevu` DATETIME NULL,
  `dt_finished` VARCHAR(80) NULL,
  `statusdone` VARCHAR(1) NOT NULL DEFAULT '1' COMMENT '1-waiting\n2-done',
  `note` MEDIUMTEXT NULL,
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`parentspatient`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`parentspatient` (
  `fk_userapp` INT NOT NULL,
  `fk_patient` BIGINT NOT NULL,
  `statusactive` VARCHAR(1) NULL DEFAULT '1',
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`fk_userapp`, `fk_patient`),
  INDEX `fkkpattie_idx` (`fk_patient` ASC),
  CONSTRAINT `fkuserapppppat`
    FOREIGN KEY (`fk_userapp`)
    REFERENCES `hsjsi`.`userapp` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkkpattie`
    FOREIGN KEY (`fk_patient`)
    REFERENCES `hsjsi`.`patient` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`agentsalubrite`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`agentsalubrite` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `pic` VARCHAR(80) NULL,
  `status` VARCHAR(1) NOT NULL DEFAULT 0,
  `tel` VARCHAR(15) NULL,
  `dt_sys` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`roomcleaning`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`roomcleaning` (
  `fk_room` INT NOT NULL,
  `fk_agentsalublite` INT NOT NULL,
  `performed_cleaning` DATETIME NULL,
  `dt_sys` DATETIME NOT NULL,
  INDEX `fkagentsal_idx` (`fk_agentsalublite` ASC),
  INDEX `fkrrommsal_idx` (`fk_room` ASC),
  CONSTRAINT `fkagentsal`
    FOREIGN KEY (`fk_agentsalublite`)
    REFERENCES `hsjsi`.`agentsalubrite` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkrrommsal`
    FOREIGN KEY (`fk_room`)
    REFERENCES `hsjsi`.`room` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`chefeequipe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`chefeequipe` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `pic` VARCHAR(80) NULL,
  `status` VARCHAR(1) NOT NULL DEFAULT 0,
  `dt_sys` DATETIME NOT NULL,
  `tel` VARCHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`chefeunite`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`chefeunite` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `pic` VARCHAR(80) NULL,
  `status` VARCHAR(1) NOT NULL DEFAULT 0,
  `dt_sys` DATETIME NOT NULL,
  `tel` VARCHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`assistant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`assistant` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `pic` VARCHAR(80) NULL,
  `status` VARCHAR(1) NOT NULL DEFAULT 0,
  `dt_sys` DATETIME NOT NULL,
  `tel` VARCHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`prepose`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`prepose` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `pic` VARCHAR(80) NULL,
  `status` VARCHAR(1) NOT NULL DEFAULT 0,
  `dt_sys` DATETIME NOT NULL,
  `tel` VARCHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`agentadmin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`agentadmin` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `pic` VARCHAR(80) NULL,
  `status` VARCHAR(1) NOT NULL DEFAULT 0,
  `dt_sys` DATETIME NOT NULL,
  `tel` VARCHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`roomstatushistory`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`roomstatushistory` (
  `fk_room` INT NOT NULL COMMENT 'Sote the room status history',
  `fk_statusroom` INT NOT NULL,
  `dt_sys` DATETIME NOT NULL)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`inhalotherapeute`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`inhalotherapeute` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(80) NOT NULL,
  `last_name` VARCHAR(80) NOT NULL,
  `pic` VARCHAR(80) NULL,
  `status` VARCHAR(1) NOT NULL DEFAULT 0,
  `dt_sys` DATETIME NOT NULL,
  `tel` VARCHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`patron_type_med_availability`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`patron_type_med_availability` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `dt_current` DATETIME NOT NULL,
  `fk_patron` INT NOT NULL,
  `fk_type_med` INT NOT NULL COMMENT 'there will only have the numbrs of  type_med for the specific date.\nEx, for today there are 3 different types of type_med. Must assign \nwith patron will be related to the type_med.\nWhen change will be apllyied store the information in a table and clear the content of this table.\nThan store all relationship agaig.\nAt the end of the process we will only have the numbers of line thesam one of the numbers of type_med\n\nWhen',
  `patron_name_concatenated` VARCHAR(80) NULL,
  `type_med_type` VARCHAR(80) NULL,
  `status_at_work` VARCHAR(1) NOT NULL COMMENT 'For the current day.\nWho is working (active)?\n1-not active\n2-active\n\n',
  PRIMARY KEY (`id`),
  INDEX `fk_patrtymedavali_idx` (`fk_patron` ASC),
  INDEX `fk_typmedavalia_idx` (`fk_type_med` ASC),
  CONSTRAINT `fk_patrtymedavali`
    FOREIGN KEY (`fk_patron`)
    REFERENCES `hsjsi`.`patron` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_typmedavalia`
    FOREIGN KEY (`fk_type_med`)
    REFERENCES `hsjsi`.`type_med` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`fellow_type_med_availability`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`fellow_type_med_availability` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `dt_current` DATETIME NOT NULL,
  `fk_type_med` INT NOT NULL COMMENT 'there will only have the numbrs of  type_med for the specific date.\nEx, for today there are 3 different types of type_med. Must assign \nwith patron will be related to the type_med.\nWhen change will be apllyied store the information in a table and clear the content of this table.\nThan store all relationship agaig.\nAt the end of the process we will only have the numbers of line thesam one of the numbers of type_med\n\nWhen',
  `fk_fellow` INT NOT NULL,
  `fellow_name_concatenated` VARCHAR(80) NULL,
  `type_med_type` VARCHAR(80) NULL,
  `status_at_work` VARCHAR(1) NOT NULL COMMENT 'For the current day.\nWho is working (active)?\n1-not active\n2-active\n\n',
  PRIMARY KEY (`id`),
  INDEX `fk_type_med_fellowfk_idx` (`fk_type_med` ASC),
  INDEX `fk_fellow_fktp_idx` (`fk_fellow` ASC),
  CONSTRAINT `fk_type_med_fellowfk`
    FOREIGN KEY (`fk_type_med`)
    REFERENCES `hsjsi`.`type_med` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_fellow_fktp`
    FOREIGN KEY (`fk_fellow`)
    REFERENCES `hsjsi`.`fellow` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`chefeunite_current_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`chefeunite_current_status` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_chefeunite` INT NOT NULL,
  `disp_name` VARCHAR(80) NOT NULL,
  `dt_sys` DATETIME NOT NULL,
  `status_at_work` VARCHAR(1) NOT NULL COMMENT 'For the current day.\nWho is working (active)?\n1-not active\n2-active\n\n',
  PRIMARY KEY (`id`),
  INDEX `fk_chefunitfk_idx` (`fk_chefeunite` ASC),
  CONSTRAINT `fk_chefunitfk`
    FOREIGN KEY (`fk_chefeunite`)
    REFERENCES `hsjsi`.`chefeunite` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`inhalo_current_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`inhalo_current_status` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_inhalo` INT NOT NULL,
  `disp_name` VARCHAR(80) NOT NULL,
  `dt_sys` DATETIME NOT NULL,
  `status_at_work` VARCHAR(1) NOT NULL COMMENT 'For the current day.\nWho is working (active)?\n1-not active\n2-active\n\n',
  PRIMARY KEY (`id`),
  INDEX `fk_inhalocst_idx` (`fk_inhalo` ASC),
  CONSTRAINT `fk_inhalocst`
    FOREIGN KEY (`fk_inhalo`)
    REFERENCES `hsjsi`.`inhalotherapeute` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`prepose_current_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`prepose_current_status` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_prepose` INT NOT NULL,
  `disp_name` VARCHAR(80) NOT NULL,
  `dt_sys` DATETIME NOT NULL,
  `status_at_work` VARCHAR(1) NOT NULL COMMENT 'For the current day.\nWho is working (active)?\n1-not active\n2-active\n\n',
  PRIMARY KEY (`id`),
  INDEX `fk_prepfk_idx` (`fk_prepose` ASC),
  CONSTRAINT `fk_prepfk`
    FOREIGN KEY (`fk_prepose`)
    REFERENCES `hsjsi`.`prepose` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`assistant_current_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`assistant_current_status` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_assistant` INT NOT NULL,
  `disp_name` VARCHAR(80) NOT NULL,
  `dt_sys` DATETIME NOT NULL,
  `status_at_work` VARCHAR(1) NOT NULL COMMENT 'For the current day.\nWho is working (active)?\n1-not active\n2-active\n\n',
  PRIMARY KEY (`id`),
  INDEX `fk_assistant_fkk_idx` (`fk_assistant` ASC),
  CONSTRAINT `fk_assistant_fkk`
    FOREIGN KEY (`fk_assistant`)
    REFERENCES `hsjsi`.`assistant` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`chefeequipe_current_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`chefeequipe_current_status` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_chefeequipe` INT NOT NULL,
  `disp_name` VARCHAR(80) NOT NULL,
  `dt_sys` DATETIME NOT NULL,
  `status_at_work` VARCHAR(1) NOT NULL COMMENT 'For the current day.\nWho is working (active)?\n1-not active\n2-active\n\n',
  PRIMARY KEY (`id`),
  INDEX `fk_chefeequipe_fwk_idx` (`fk_chefeequipe` ASC),
  CONSTRAINT `fk_chefeequipe_fwk`
    FOREIGN KEY (`fk_chefeequipe`)
    REFERENCES `hsjsi`.`chefeequipe` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`agentadmin_current_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`agentadmin_current_status` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_agentadmin` INT NOT NULL,
  `disp_name` VARCHAR(80) NOT NULL,
  `dt_sys` DATETIME NOT NULL,
  `status_at_work` VARCHAR(1) NOT NULL COMMENT 'For the current day.\nWho is working (active)?\n1-not active\n2-active\n\n',
  PRIMARY KEY (`id`),
  INDEX `fk_agentadmin_fkwk_idx` (`fk_agentadmin` ASC),
  CONSTRAINT `fk_agentadmin_fkwk`
    FOREIGN KEY (`fk_agentadmin`)
    REFERENCES `hsjsi`.`agentadmin` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`agentsalubrite_current_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`agentsalubrite_current_status` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_agentsalubrite` INT NOT NULL,
  `disp_name` VARCHAR(80) NOT NULL,
  `dt_sys` DATETIME NOT NULL,
  `status_at_work` VARCHAR(1) NOT NULL COMMENT 'For the current day.\nWho is working (active)?\n1-not active\n2-active\n\n',
  PRIMARY KEY (`id`),
  INDEX `fk_kkagsabt_idx` (`fk_agentsalubrite` ASC),
  CONSTRAINT `fk_kkagsabt`
    FOREIGN KEY (`fk_agentsalubrite`)
    REFERENCES `hsjsi`.`agentsalubrite` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`pharmacist_current_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`pharmacist_current_status` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_pharmacist` INT NOT NULL,
  `disp_name` VARCHAR(80) NOT NULL,
  `dt_sys` DATETIME NOT NULL,
  `status_at_work` VARCHAR(1) NOT NULL COMMENT 'For the current day.\nWho is working (active)?\n1-not active\n2-active\n\n',
  PRIMARY KEY (`id`),
  INDEX `fk_pharmss_idx` (`fk_pharmacist` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `hsjsi`.`resident_current_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`resident_current_status` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_resident` INT NOT NULL,
  `disp_name` VARCHAR(80) NOT NULL,
  `dt_sys` DATETIME NOT NULL,
  `status_at_work` VARCHAR(1) NOT NULL COMMENT 'For the current day.\nWho is working (active)?\n1-not active\n2-active\n\n',
  PRIMARY KEY (`id`),
  INDEX `fk_resctst_idx` (`fk_resident` ASC),
  CONSTRAINT `fk_resctst`
    FOREIGN KEY (`fk_resident`)
    REFERENCES `hsjsi`.`resident` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`nursing_current_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hsjsi`.`nursing_current_status` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_nursing` INT NOT NULL,
  `disp_name` VARCHAR(80) NOT NULL,
  `dt_sys` DATETIME NOT NULL,
  `status_at_work` VARCHAR(1) NOT NULL COMMENT 'For the current day.\nWho is working (active)?\n1-not active\n2-active\n\n',
  PRIMARY KEY (`id`),
  INDEX `fk_nurscst_idx` (`fk_nursing` ASC),
  CONSTRAINT `fk_nurscst`
    FOREIGN KEY (`fk_nursing`)
    REFERENCES `hsjsi`.`nursing` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hsjsi`.`patientecurrentsatus_history`
-- -----------------------------------------------------
CREATE TABLE patientecurrentsatus_history (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fk_patient` BIGINT NOT NULL COMMENT 'This table will store only the current status of the patient.\nEach change, makes to save the current staus in a history table and the aplly the changes in a history table.\nOnce the tratement has ended, this is the final status, grab the whole line, save inside the history and delete from current status. ',
  `disp_name_patient` VARCHAR(100) NOT NULL,
  `paciente_session` VARCHAR(50) NOT NULL COMMENT 'That will be a number like SESSION. Composed by \npatient.nb_dossier+datetime+milisseconds. (created by the system)\n\nthis number will be used to track a patinent session in te service.\nwill be used to link to exams',
  `fk_exam_status_type` INT NOT NULL DEFAULT 0 COMMENT '0-N/A (no exams was assigned)\n1-waiting (at laste one exam was not done)\n2-done (all exams in the list must be done)\n\n',
  `disp_exam_status_type` VARCHAR(100) NOT NULL,
  `dt_sys_admission` DATETIME NOT NULL,
  `fk_tournee_medicale_fait` INT NOT NULL DEFAULT 0 COMMENT 'tournoi medicale was done\n0-Non\n1-Oui',
  `disp_tournee_medicale_fait` VARCHAR(100) NOT NULL,
  `fk_tournee_med_nursing_available` INT NOT NULL COMMENT 'Nursing is avaliable pour le tournoi\n0-Non\n1-Oui\n',
  `disp_tournee_nursing_available` VARCHAR(100) NOT NULL,
  `fk_patron` INT NOT NULL,
  `disp_name_patron` VARCHAR(100) NOT NULL,
  `fk_type_med` INT NOT NULL,
  `disp_type_med` VARCHAR(100) NOT NULL,
  `fk_fellow` INT NOT NULL,
  `disp_name_fellow` VARCHAR(100) NOT NULL,
  `fk_nursing` INT NOT NULL,
  `disp_name_nursing` VARCHAR(100) NOT NULL,
  `fk_pharmacist` INT NOT NULL,
  `roomnumber` VARCHAR(5) NOT NULL COMMENT 'do not use id becaouse there is no room nb 13',
  `disp_name_pharmacist` VARCHAR(100) NOT NULL,
  `fk_resident` INT NOT NULL,
  `disp_name_resident` VARCHAR(100) NOT NULL,
  `fk_type_nursing` INT NOT NULL,
  `disp_type_nursing` VARCHAR(100) NOT NULL,
  `fk_type_assistance_respiratoire` INT NOT NULL,
  `disp_type_assistance_respiratoire` VARCHAR(100) NOT NULL,
  `fk_isolement` INT NOT NULL,
  `disp_isolement` VARCHAR(100) NOT NULL,
  `fk_codevacuation` INT NOT NULL,
  `fk_chargetravail` INT NOT NULL,
  `fk_traitmentsparticuliers` INT NOT NULL,
  `disp_traitmentsparticuliers` VARCHAR(100) NOT NULL,
  `fk_deplacementcritique` INT NOT NULL,
  `disp_deplacementcritique` VARCHAR(100) NOT NULL,
  `note` LONGTEXT NULL,
  `scheduled_departure` DATETIME NULL,
  `performed_departure` DATETIME NULL,
  `nb_lit_hospitalier` VARCHAR(50) NOT NULL,
  `mouvement_alert` VARCHAR(80) NOT NULL DEFAULT '1' COMMENT '0-Non\n1-Oui',
  `codevacuation_hexacode` VARCHAR(8) NULL,
  `traitmentsparticuliers_hexacode` VARCHAR(8) NULL,
  `mouvement_alert_path` VARCHAR(80) NULL DEFAULT '\"\"',
  `fk_type_conge` INT NOT NULL,
  `disp_type_conge` VARCHAR(80) NOT NULL,
  `disp_type_conge_hexacode` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
