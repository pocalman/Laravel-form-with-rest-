CREATE TABLE enum_proposition (
    valeur VARCHAR(100) PRIMARY KEY NOT NULL
);
INSERT INTO `enum_proposition` (`valeur`) VALUES ('DEMANDE');
INSERT INTO `enum_proposition` (`valeur`) VALUES ('OFFRE');
INSERT INTO `enum_proposition` (`valeur`) VALUES ('ACCEPTEE');
INSERT INTO `enum_proposition` (`valeur`) VALUES ('REFUSEE');

CREATE TABLE enum_type_entite (
    valeur VARCHAR(100) PRIMARY KEY NOT NULL
);
INSERT INTO `enum_type_entite` (`valeur`) VALUES ('SOCIETE');
INSERT INTO `enum_type_entite` (`valeur`) VALUES ('MAISON');
INSERT INTO `enum_type_entite` (`valeur`) VALUES ('ENTREPRISE');
INSERT INTO `enum_type_entite` (`valeur`) VALUES ('TALENT');

CREATE TABLE enum_secteur (
    valeur VARCHAR(100) PRIMARY KEY NOT NULL
);
INSERT INTO `enum_secteur` (`valeur`) VALUES ('FILM');
INSERT INTO `enum_secteur` (`valeur`) VALUES ('TÉLÉVISION');
INSERT INTO `enum_secteur` (`valeur`) VALUES ('NUMÉRIQUE');

CREATE TABLE enum_etape (
    valeur VARCHAR(100) PRIMARY KEY NOT NULL
);
INSERT INTO `enum_etape` (`valeur`) VALUES ('PROJET');
INSERT INTO `enum_etape` (`valeur`) VALUES ('PRE-PRODUCTION');
INSERT INTO `enum_etape` (`valeur`) VALUES ('PRODUCTION');
INSERT INTO `enum_etape` (`valeur`) VALUES ('POSTPRODUCTION');
INSERT INTO `enum_etape` (`valeur`) VALUES ('TERMINÉ');

CREATE TABLE enum_granularite (
    valeur VARCHAR(100) PRIMARY KEY NOT NULL
);
INSERT INTO `enum_granularite` (`valeur`) VALUES ('SAISON');
INSERT INTO `enum_granularite` (`valeur`) VALUES ('MOIS');