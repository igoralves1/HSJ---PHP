INSERT INTO examstatus_type (type) VALUES 
('N/A'),
('Attendre'),
('Fait');

INSERT INTO type_exams (type, hexrgbcode) VALUES 
('bloc', '#'),
('exam', '#');

INSERT INTO exams (exams,hexrgbcode, fk_type_exams) VALUES 
('CT-SCAN (TOMODENSITOMÉTRIE)','#402e22', '1');
('IRM (IMAGERIE PAR RÉSONNANCE MAGNÉTIQUE)','#402e22', '1'),
('MÉDECINE NUCLÉAIRE','#402e22', '1'),
('RADIOLOGIE','#402e22', '1'),
('SALLE D\'ANGIOGRAPHIE','#402e22', '1'),
('SALLE D\'OPÉRATION','#3d7252', '1'),
('SALLE DE CATHÉTÉRISME CARDIAQUE','#192f22', '1');




INSERT INTO typeresident(description, dt_sys) VALUES 
('Externe 1',NOW()),
('Externe 2',NOW()),
('R1',NOW()),
('R2',NOW()),
('R3',NOW());

/* Fake - Only to create  */
INSERT INTO resident (first_name, last_name, fk_type, status, dt_sys, tel) VALUES 
('JHON', 'B', '1', '1', NOW(), '223'),
('PAUL', 'C', '2', '2', NOW(), '223'),
('ALAN', 'D', '3', '1', NOW(), '223');




/* USERS */


INSERT INTO chefeunite(first_name, last_name, status, dt_sys) VALUES 
('BRYAN','PROVOST','1',NOW());


INSERT INTO inhalotherapeute (first_name, last_name, status, dt_sys) VALUES 
('VINCENT','A','1',NOW()),
('MÉLANIE','A','1',NOW()),
('SHANNA','A','1',NOW()),
('KRISTINE','A','1',NOW()),
('ANDRÉE-ANNE','B','1',NOW()),
('PHILLIP','B','1',NOW()),
('AMEL','B-S','1',NOW()),
('SAMUEL','B','1',NOW()),
('GABRIELLE','B','1',NOW()),
('CATHERINE','B','1',NOW()),
('JULIE','B','1',NOW()),
('MARIE','B','1',NOW()),
('WOODNY','C','1',NOW()),
('CATHY','C','1',NOW()),
('LAURIE','C','1',NOW()),
('YEZMINE','C-C','1',NOW()),
('GARRY','C','1',NOW()),
('CYNTHIA','C','1',NOW()),
('JULIE','D','1',NOW()),
('JONATHAN','D','1',NOW()),
('SOPHIE','D','1',NOW()),
('PATRICIA','D','1',NOW()),
('MARIE-ÈVE','D','1',NOW()),
('JOANIE','D','1',NOW()),
('MARIE-NOEL','D','1',NOW()),
('VICKIE','F','1',NOW()),
('ALEXANDRE ','G','1',NOW()),
('RACHELLE','G','1',NOW()),
('MARIYOU','L','1',NOW()),
('ANNE','T-L','1',NOW()),
('KIM','L','1',NOW()),
('ANNE-MARIE','L','1',NOW()),
('CAROLINE','L','1',NOW()),
('CRISTINE','L','1',NOW()),
('JOHANIE','L','1',NOW()),
('KATHY','L','1',NOW()),
('JENNY-LEE','L','1',NOW()),
('KARINE','M','1',NOW()),
('KARINE','M','1',NOW()),
('SYLVAIN','M','1',NOW()),
('CAROLYNE','N','1',NOW()),
('MARIE-LINE','N','1',NOW()),
('FRÉDÉRIC','O-C','1',NOW()),
('STÉPHANIE','O','1',NOW()),
('MARILYN','P','1',NOW()),
('SAMUEL','P-V','1',NOW()),
('STÉPHANIE','P','1',NOW()),
('JACINTHE','P','1',NOW()),
('FRANCIS','P','1',NOW()),
('MARIANNE','P','1',NOW()),
('CHANTAL ','S','1',NOW()),
('MARIE-ÈVE','S','1',NOW()),
('JEANNE','S','1',NOW()),
('FRANKY','T','1',NOW()),
('MARIE-PIER','T','1',NOW()),
('MARIE-PIER','T','1',NOW()),
('AUDRÉE','T','1',NOW()),
('MARIE-PIER','V','1',NOW()),
('JULIE','V','1',NOW()),
('ANNIE','V','1',NOW());


INSERT INTO prepose (first_name,last_name, status, dt_sys) VALUES 
('KARINE','A','1',NOW()),
(' LINE','B','1',NOW()),
('CHANTAL','B','1',NOW()),
('DAVE','B','1',NOW()),
(' GILLES','C','1',NOW()),
(' MANON','D','1',NOW()),
(' ALEXANDRA','F','1',NOW()),
('ANGELO','F','1',NOW()),
('JULIE','G','1',NOW()),
('SUZANNE','G','1',NOW()),
('MARTIN','H','1',NOW()),
('DANIEL','M','1',NOW()),
('DANIEL','S','1',NOW());


INSERT INTO assistant (first_name, last_name, status, dt_sys) VALUES 
('CHANTAL','V','1',NOW()),
('CLAUDINE','T','1',NOW()),
('BRYAN','P','1',NOW()),
('JOELLE','L','1',NOW()),
('CLAUDINE','A','1',NOW()),
('SONIA','B','1',NOW()),
('VIRGINIE','B','1',NOW()),
('MARC','B','1',NOW()),
('LUC','C','1',NOW()),
('SYLVIE','C','1',NOW()),
('MÉLANIE','D','1',NOW()),
('JULIE','G','1',NOW()),
('RENÉE','G','1',NOW()),
('PATRICE','G','1',NOW()),
('JESSIE','G','1',NOW()),
('MÉLISSA','L','1',NOW()),
('KATHRYN','L','1',NOW()),
('BUU ','HL','1',NOW()),
('CATHERINE','M','1',NOW()),
('MÉLISSA','M','1',NOW()),
('GENEVIÈVE','O','1',NOW()),
('CAROLINE','R','1',NOW()),
('VINCENT','T','1',NOW());


INSERT INTO chefeequipe (first_name, last_name, status, dt_sys) VALUES 
('VICTORIA','F','1',NOW()),
('JULIE','F','1',NOW()),
('JULIE','G','1',NOW()),
('SOFIE','G','1',NOW()),
('RENÉE ','G','1',NOW()),
('JENNIFER','G','1',NOW()),
('MARIE-CLAUDE ','G','1',NOW()),
('PATRICE','G','1',NOW()),
('MARIE-ÈVE','G','1',NOW()),
('CATHERINE','G','1',NOW()),
('JESSIE ','G','1',NOW()),
('DELPHINE ','G','1',NOW()),
('LYSANNE','G','1',NOW()),
('ABDENNOUR ','H','1',NOW()),
('SAMIRA ','H','1',NOW()),
('CRISTINA','H-M','1',NOW()),
('KIM-LIEN  ','H','1',NOW()),
('STÉPHANIE ','H','1',NOW()),
('CHRISTINE','J','1',NOW()),
('MYRIAM','J','1',NOW()),
('IMENE','K','1',NOW()),
('KARL','K-D','1',NOW()),
('MADELINE ','A-L','1',NOW()),
('KEVEN ','L','1',NOW()),
('ANDRÉE  ','L','1',NOW()),
('NADINE ','L','1',NOW()),
('JOËLLE ','L','1',NOW()),
('MARIE-CHRISTINE ','L','1',NOW()),
(' VANESSA ','L','1',NOW()),
('CHRISTINE ','L','1',NOW()),
('MARIE ','L','1',NOW()),
('MÉLISSA ','L','1',NOW()),
(' JUSTIN ','L','1',NOW()),
('KATHRYN ','L','1',NOW()),
(' BUU HUONG ','L','1',NOW()),
(' JADE','L','1',NOW()),
('PATRICIA ','L','1',NOW()),
('FRÉDÉRIC ','M','1',NOW()),
('VÉRONIQUE','M','1',NOW()),
(' MATTHIEU ','M','1',NOW()),
('CATHERINE ','M','1',NOW()),
('SYLVIE ','M','1',NOW()),
('ANDRÉA P.','M','1',NOW()),
('AMANDINE','M','1',NOW()),
('MARIE-PIER ','M','1',NOW()),
('MÉLISSA ','M','1',NOW()),
('MANILA ','M','1',NOW()),
('GENEVIÈVE','O','1',NOW()),
('LEMYA','O','1',NOW()),
(' MORGANE','P','1',NOW()),
('STÉPHANIE','P','1',NOW()),
(' MARIE-EVE ','P-C','1',NOW()),
(' STÉPHANY','P','1',NOW()),
('JESSICA  ','P','1',NOW()),
('JESSICA N.','P','1',NOW()),
('SYLVIE ','P','1',NOW()),
('VIRGINIE','P','1',NOW()),
('ULRIC','P','1',NOW()),
('MICHA','P-L','1',NOW()),
('SYLVIE','P','1',NOW()),
(' SYLVAIN ','P','1',NOW()),
('BRYAN ','P','1',NOW()),
(' STÉPHANIE','R','1',NOW()),
('CAROLINE ','R','1',NOW()),
('CASSANDRE','S-J','1',NOW()),
('CLAUDIA','S','1',NOW()),
('KATHIA','S','1',NOW()),
('SERGIO','S','1',NOW()),
('ANN-PIER ','S','1',NOW()),
('CHARLOTTE','S','1',NOW()),
(' VICTORIA ','S','1',NOW()),
('JESSICA ','S-A-E','1',NOW()),
('DELPHINE','S','1',NOW()),
('LORRAINE ','S-O','1',NOW()),
('CLAUDINE ','T','1',NOW()),
(' ARIANE','T','1',NOW()),
(' VÉRONIQUE ','T','1',NOW()),
(' MICHAEL','T','1',NOW()),
('VINCENT ','T','1',NOW()),
('DOMINIQUE ','V','1',NOW()),
('MARY ','V','1',NOW()),
('MARIE','V','1',NOW()),
('CHANTAL ','V','1',NOW()),
('CAROLINE ','V','1',NOW()),
('LYDIA-TANIA','Z','1',NOW());

INSERT INTO agentadmin (first_name, last_name, status, dt_sys) VALUES 
('JEAN-FRANÇOIS','B','1',NOW()),
('JOANNE','D-P','1',NOW()),
('MÉLANIE','D','1',NOW()),
('PATRICIA','E','1',NOW()),
('CHANTALE','T','1',NOW()),
('ROXANNE','T','1',NOW()),
('KATIA','V','1',NOW()),
('HEIDI','V','1',NOW());


INSERT INTO patron (first_name,last_name, status, dt_sys) VALUES 
('L','DUCHARME-CREVIER','1',NOW()),
('G','DU PONT-THIBODEAU','1',NOW()),
('G','ÉMERIAUD','1',NOW()),
('C','FARRELL','1',NOW()),
('K','HARRINGTON','1',NOW()),
('P','JOUVET','1',NOW()),
('J-S','JOYAL','1',NOW()),
('G','PETTERSEN','1',NOW()),
('F','PROULX','1',NOW()),
('B','TOLEDANO','1',NOW()),
('M','TUCCI','1',NOW()),
('T','DI GENOVA','1',NOW()),
('M','DONLAN','1',NOW()),
('N','ROUMELIOTIS','1',NOW());


INSERT INTO fellow (first_name, last_name, status, dt_sys) VALUES 
('S','BARTHÉLÉMY','1',NOW()),
('M','CHOMTON','1',NOW()),
('B','CRULLI','1',NOW()),
('L','DE CLOEDT','1',NOW()),
('N','NARDI','1',NOW()),
('M','SAUTHIER','1',NOW()),
('N','SAVY','1',NOW()),
('C','THIBAULT','1',NOW());



INSERT INTO nursing (first_name, last_name, status, dt_sys) VALUES 
('VICTORIA','F','1',NOW()),
('JULIE','F','1',NOW()),
('JULIE','G','1',NOW()),
('SOFIE','G','1',NOW()),
('RENÉE ','G','1',NOW()),
('JENNIFER','G','1',NOW()),
('MARIE-CLAUDE ','G','1',NOW()),
('PATRICE','G','1',NOW()),
('MARIE-ÈVE','G','1',NOW()),
('CATHERINE','G','1',NOW()),
('JESSIE ','G','1',NOW()),
('DELPHINE ','G','1',NOW()),
('LYSANNE','G','1',NOW()),
('ABDENNOUR ','H','1',NOW()),
('SAMIRA ','H','1',NOW()),
('CRISTINA','H-M','1',NOW()),
('KIM-LIEN  ','H','1',NOW()),
('STÉPHANIE ','H','1',NOW()),
('CHRISTINE','J','1',NOW()),
('MYRIAM','J','1',NOW()),
('IMENE','K','1',NOW()),
('KARL','K-D','1',NOW()),
('MADELINE ','A-L','1',NOW()),
('KEVEN ','L','1',NOW()),
('ANDRÉE  ','L','1',NOW()),
('NADINE ','L','1',NOW()),
('JOËLLE ','L','1',NOW()),
('MARIE-CHRISTINE ','L','1',NOW()),
(' VANESSA ','L','1',NOW()),
('CHRISTINE ','L','1',NOW()),
('MARIE ','L','1',NOW()),
('MÉLISSA ','L','1',NOW()),
(' JUSTIN ','L','1',NOW()),
('KATHRYN ','L','1',NOW()),
(' BUU HUONG ','L','1',NOW()),
(' JADE','L','1',NOW()),
('PATRICIA ','L','1',NOW()),
('FRÉDÉRIC ','M','1',NOW()),
('VÉRONIQUE','M','1',NOW()),
(' MATTHIEU ','M','1',NOW()),
('CATHERINE ','M','1',NOW()),
('SYLVIE ','M','1',NOW()),
('ANDRÉA P.','M','1',NOW()),
('AMANDINE','M','1',NOW()),
('MARIE-PIER ','M','1',NOW()),
('MÉLISSA ','M','1',NOW()),
('MANILA ','M','1',NOW()),
('GENEVIÈVE','O','1',NOW()),
('LEMYA','O','1',NOW()),
(' MORGANE','P','1',NOW()),
('STÉPHANIE','P','1',NOW()),
(' MARIE-EVE ','P-C','1',NOW()),
(' STÉPHANY','P','1',NOW()),
('JESSICA  ','P','1',NOW()),
('JESSICA N.','P','1',NOW()),
('SYLVIE ','P','1',NOW()),
('VIRGINIE','P','1',NOW()),
('ULRIC','P','1',NOW()),
('MICHA','P-L','1',NOW()),
('SYLVIE','P','1',NOW()),
(' SYLVAIN ','P','1',NOW()),
('BRYAN ','P','1',NOW()),
(' STÉPHANIE','R','1',NOW()),
('CAROLINE ','R','1',NOW()),
('CASSANDRE','S-J','1',NOW()),
('CLAUDIA','S','1',NOW()),
('KATHIA','S','1',NOW()),
('SERGIO','S','1',NOW()),
('ANN-PIER ','S','1',NOW()),
('CHARLOTTE','S','1',NOW()),
(' VICTORIA ','S','1',NOW()),
('JESSICA ','S-A-E','1',NOW()),
('DELPHINE','S','1',NOW()),
('LORRAINE ','S-O','1',NOW()),
('CLAUDINE ','T','1',NOW()),
(' ARIANE','T','1',NOW()),
(' VÉRONIQUE ','T','1',NOW()),
(' MICHAEL','T','1',NOW()),
('VINCENT ','T','1',NOW()),
('DOMINIQUE ','V','1',NOW()),
('MARY ','V','1',NOW()),
('MARIE','V','1',NOW()),
('CHANTAL ','V','1',NOW()),
('CAROLINE ','V','1',NOW()),
('LYDIA-TANIA','Z','1',NOW());





INSERT INTO pharmacist (first_name, last_name, status, dt_sys) VALUES 
('CHRISTOPHER','M','1',NOW()),
('ANNIE','L','1',NOW()),
('ISABELLE ','G','1',NOW());





/* ======================================== */



stopped here









INSERT INTO type_conge (type,hexrgbcode,dt_sys ) VALUES 
('NA','#000000',NOW());
('CONGE ETAGE','#032149',NOW()),
('CONGE MAISON','#074daa',NOW()),
('CONGE TEMPORAIRE','#045b61',NOW());




INSERT INTO type_assistance_respiratoire (type, dt_sys) VALUES 
('Non ventilé',NOW()),
('Lunettes nasales à haut débit',NOW()),
('Ventilation non invasive',NOW()),
('Ventilation invasive',NOW());

INSERT INTO type_med (type, dt_sys) VALUES 
('Chir Cardiaque',NOW()),
('Pédiatrie A',NOW()),
('Pédiatrie B',NOW());


INSERT INTO type_nursing (type, dt_sys) VALUES 
('NA',NOW()),
('Soins Intensifs',NOW()),
('Soins Intermédiaires',NOW());


INSERT INTO isolement (isolement, hexrgbcode, dt_sys) VALUES 
('Gouttellettes-Contact ','#',NOW()),
('Contact ','#',NOW()),
('Contact +','#',NOW()),
('Gouttellettes','#',NOW()),
('Aérien','#',NOW()),
('Préventif','#',NOW());



INSERT INTO statusroom (statusroom, hexrgbcode, dt_sys) VALUES 
('Disponible','#ffffff',NOW()),
('Occupée',' #eeeeee',NOW()),
('Contaminée','#FEEFD7',NOW()),
('En désinfection','#cdc6ff',NOW()),
('Indisponible','#000000',NOW());


INSERT INTO evacuation (evacuation, hexrgbcode, dt_sys) VALUES 
('1','#1f9400',NOW()),
('2','#ffdf2b',NOW()),
('3','#ef0041',NOW()),
('4','#ef0041',NOW());

INSERT INTO chargetravail (chargetravail, hexrgbcode, dt_sys) VALUES 
('1','#000000',NOW()),
('2','#000000',NOW()),
('3','#000000',NOW()),
('4','#000000',NOW());

INSERT INTO traitements_particuliers (type, hexrgbcode, dt_sys) VALUES 
('ECMO','#123cd0',NOW()),
('Hémofiltration','#123cd1',NOW()),
('Mars','#123cd2',NOW()),
('Plasmaphérèse','#123cd3',NOW()),
('Hémodialyse','#123cd4',NOW()),
('Chimiothérapie','#123cd5',NOW()),
('Autre ','#123cd6',NOW());

INSERT INTO deplacement_critique (type, hexrgbcode, dt_sys) VALUES 
('Non','#',NOW()),
('Oui','#',NOW());




INSERT INTO tournee_medicale_type (type) VALUES 
('Non'),
('Oui');

INSERT INTO tournee_med_nursing_available_type (type) VALUES 
('Non'),
('Oui');


/*
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('1','N','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('2','N','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('3','N','H','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('4','N','H','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('5','N','H','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('6','N','H','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('7','+','H','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('8','+','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('9','+','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('10','+','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('11','+','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('12','+','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('13','N','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('14','+','N','GB','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('15','N','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('16','N','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('17','N','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('18','N','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('19','N','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('20','N','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('21','N','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('22','+','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('23','N','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('24','N','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('25','N','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('26','N','N','SP','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('27','N','N','SP','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('28','N','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('29','-','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('30','-','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('31','-','N','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('32','-','H','N','123',NOW());
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel, dt_sys) VALUES ('33','N','N','N','123',NOW());
*/
INSERT INTO room (roomnumber, pression, hemodialysis, soins_palliatif, tel,virtualroom ,dt_sys) VALUES 
('1','N','N','N','123',   "0",NOW()),
('2','N','N','N','123',   "0",NOW()),
('3','N','H','N','123',   "0",NOW()),
('4','N','H','N','123',   "0",NOW()),
('5','N','H','N','123',   "0",NOW()),
('6','N','H','N','123',   "0",NOW()),
('7','+','H','N','123',   "0",NOW()),
('8','+','N','N','123',   "0",NOW()),
('9','+','N','N','123',   "0",NOW()),
('10','+','N','N','123',  "0",NOW()),
('11','+','N','N','123',  "0",NOW()),
('12','+','N','N','123',  "0",NOW()),
('13','N','N','N','123',  "0",NOW()),
('14','+','N','GB','123', "0",NOW()),
('15','N','N','N','123',  "0",NOW()),
('16','N','N','N','123',  "0",NOW()),
('17','N','N','N','123',  "0",NOW()),
('18','N','N','N','123',  "0",NOW()),
('19','N','N','N','123',  "0",NOW()),
('20','N','N','N','123',  "0",NOW()),
('21','N','N','N','123',  "0",NOW()),
('22','+','N','N','123',  "0",NOW()),
('23','N','N','N','123',  "0",NOW()),
('24','N','N','N','123',  "0",NOW()),
('25','N','N','N','123',  "0",NOW()),
('26','N','N','SP','123', "0",NOW()),
('27','N','N','SP','123', "0",NOW()),
('28','N','N','N','123',  "0",NOW()),
('29','-','N','N','123',  "0",NOW()),
('30','-','N','N','123',  "0",NOW()),
('31','-','N','N','123',  "0",NOW()),
('32','-','H','N','123',  "0",NOW()),
('33','N','N','N','123',  "0",NOW()),
('34','-','N','N','123',  "1",NOW()),
('35','-','N','N','123',  "1",NOW()),
('36','-','H','N','123',  "1",NOW()),
('37','N','N','N','123',  "1",NOW());


INSERT INTO roomcurrentstatus (fk_room, fk_statusroom, dt_sys) VALUES 
('1', '1', NOW()),
('2', '1', NOW()),
('3', '2', NOW()),
('4', '2', NOW()),
('5', '2', NOW()),
('6', '4', NOW()),
('7', '3', NOW()),
('8', '4', NOW()),
('9', '5', NOW()),
('10', '3',NOW()),
('11', '1',NOW()),
('12', '2',NOW()),
('13', '5',NOW()),
('14', '1',NOW()),
('15', '2',NOW()),
('16', '1',NOW()),
('17', '1',NOW()),
('18', '4',NOW()),
('19', '1',NOW()),
('20', '1',NOW()),
('21', '1',NOW()),
('22', '1',NOW()),
('23', '1',NOW()),
('24', '3',NOW()),
('25', '1',NOW()),
('26', '1',NOW()),
('27', '1',NOW()),
('28', '4',NOW()),
('29', '1',NOW()),
('30', '1',NOW()),
('31', '2',NOW()),
('32', '1',NOW()),
('33', '1',NOW());







INSERT INTO patient (nb_dossier, first_name, last_name, `status`, dt_sys) VALUES 
('df745646', 'Willian', 'Jung', '1', NOW()),
('sdf46', 'Jonh', 'Berlusc', '1', NOW()),
('t46f46', 'Donald', 'Duck', '1', NOW()),
('ohf46', 'Montreal', ' Canada', '1', NOW()),
('hf46', 'Florida', 'Usa', '1', NOW());

INSERT INTO patientecurrentsatus (
fk_patient,
disp_name_patient,
paciente_session,
fk_exam_status_type,
disp_exam_status_type,
dt_sys_admission,
fk_tournee_medicale_fait,
disp_tournee_medicale_fait,
fk_tournee_med_nursing_available,
disp_tournee_nursing_available,
fk_type_med,
disp_type_med,
fk_patron,
disp_name_patron,
fk_fellow,
disp_name_fellow,
fk_nursing,
disp_name_nursing,
fk_pharmacist,
roomnumber,
disp_name_pharmacist,
fk_resident,
disp_name_resident,
fk_type_nursing,
disp_type_nursing,
fk_type_assistance_respiratoire,
disp_type_assistance_respiratoire,
fk_isolement,
disp_isolement,
fk_codevacuation,
fk_chargetravail,
fk_traitmentsparticuliers,
disp_traitmentsparticuliers,
fk_deplacementcritique,
disp_deplacementcritique,
note,
scheduled_departure,
performed_departure,
nb_lit_hospitalier,
mouvement_alert,
codevacuation_hexacode,
traitmentsparticuliers_hexacode,
mouvement_alert_path,
fk_type_conge,
disp_type_conge,
disp_type_conge_hexacode,
disp_type_med_char

) 
VALUES 

(
1,
'Willian. J',
'jg67gjl9',
2,
'Attendre',
NOW(),
1,
'Non',
2,
'Oui',
1,
'Chir Cardiaque',
6,
'JOUVET P',
2,
'CHOMTON M',
1,
'VICTORIA F',
1,
'1',
'CHRISTOPHER M',
1,
'JHON B',
3,
'Soins Intermédiaires',
2,
'Lunettes nasales à haut débit',
4,
'Gouttellettes',
2,
4,
1,
'ECMO',
1,
'Non',
'',
NOW(),
NOW(),
'123456',
'0',
'#ffdf2b',
'#123cd0',
'',
1,
'NA'

);



SELECT 
nb_lit_hospitalier, 
fk_codevacuation,
fk_deplacementcritique,
disp_isolement,
disp_type_nursing,
fk_chargetravail,
disp_type_med,
disp_name_patient,
disp_name_nursing,
scheduled_departure 
FROM patientecurrentsatus;


SELECT exty.type,ex.exams,  FROM examcurrentsession excs
INNER JOIN exams AS ex
ON(ex.id=excs.fk_exam)
INNER JOIN type_exams AS exty
ON(exty.id=ex.fk_type_exams)
;