CREATE TABLE utilisateurs
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- -----------------------------------------------------
-- Table personnes
-- -----------------------------------------------------
CREATE TABLE personnes /* @MC TODO developper */
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    utilisateur_id INT,
    INDEX fk_personne_user (utilisateur_id),
    CONSTRAINT fk_personne_user FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs (id)
    ON DELETE SET NULL
    ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table entites
-- Les entites sont des groupes qui peuvent associer des entites juridiques
-- permettre le polymorphisme entre les types d'entites avec les productions, les generiques etc.
-- mais aussi pour les associations mere enfant pour les sociétés table entite_associations
-- -----------------------------------------------------

CREATE TABLE entites
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    type_entite ENUM('SOCIETE','MAISON','ENTREPRISE','TALENT') NOT NULL,
    -- INDEX idx_entite (id, type_entite_id) /* @TOFIX : Erreur La clé 'type_entite_id' n'existe pas dans la table */
);

-- -----------------------------------------------------
-- Table entite_associations
-- foreign key interne de la table entites car pas de cascades possibles avec InnoDB SQL
-- -----------------------------------------------------
CREATE TABLE entite_associations
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    entite_id INT NOT NULL,
    parent_id INT NOT NULL,
    INDEX idx_entite_asso (parent_id, entite_id),
    /* @TOFIX: Impossible d'ajouter des contraintes d'index externe */
    CONSTRAINT fk_entite FOREIGN KEY (entite_id) REFERENCES entites (id)
        ON DELETE CASCADE
        ON UPDATE NO ACTION,
    CONSTRAINT fk_parent FOREIGN KEY (parent_id) REFERENCES entites (id)
        ON DELETE CASCADE
        ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table employes
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS employes (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    personne_id INT NOT NULL ,
    personne_user_id INT NOT NULL,
    fonction VARCHAR(100) NULL,
    debut DATE NULL,
    fin DATE NULL,
    entite_id INT NOT NULL,
    INDEX idx_employe_personne (personne_id),
    INDEX idx_employe_entite (entite_id ),
    CONSTRAINT fk_employe_personne FOREIGN KEY  (personne_id) REFERENCES personnes (id)
        ON DELETE CASCADE
        ON UPDATE NO ACTION,
    CONSTRAINT fk_employe_entite FOREIGN KEY (entite_id) REFERENCES entites (id)
        ON DELETE CASCADE
        ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table talents
-- -----------------------------------------------------
CREATE TABLE talents /* @MC TODO developper*/
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    personne_id INT,
    personne_user_id INT,
    INDEX fk_talent_personne (personne_id),
    CONSTRAINT fk_talent_personne FOREIGN KEY (personne_id) REFERENCES personnes (id)
    ON DELETE SET NULL
    ON UPDATE NO ACTION
);

CREATE TABLE type_prod
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    secteur ENUM('FILM','TÉLÉVISION','NUMÉRIQUE'),
    INDEX (id)
);

CREATE TABLE genres
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    titre VARCHAR(100) NOT NULL,
    INDEX (id)
);

CREATE TABLE genre_prod
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    genre_id INT,
    secteur ENUM('FILM','TÉLÉVISION','NUMÉRIQUE') NOT NULL,
    KEY fk_genre (genre_id),
    CONSTRAINT fk_genre FOREIGN KEY (genre_id) REFERENCES genres (id) ON DELETE CASCADE ON UPDATE NO ACTION,
    INDEX (id)
);

CREATE TABLE formats
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    titre VARCHAR(100) NOT NULL,
    INDEX (id)
);

CREATE TABLE format_prod
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    format_id INT,
    secteur ENUM('FILM','TÉLÉVISION','NUMÉRIQUE') NOT NULL,
    KEY fk_format (format_id),
    CONSTRAINT fk_format FOREIGN KEY (format_id) REFERENCES formats (id) ON DELETE CASCADE ON UPDATE NO ACTION,
    INDEX (id)
);

-- -----------------------------------------------------
-- Table productions
-- -----------------------------------------------------
-- @FIXED Utiliser CURRENT_DATE et CURRENT_TIMESTAMP as default values necessite SQL 8
CREATE TABLE productions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    qfq_id INT NOT NULL,
    titre VARCHAR(255) NOT NULL,
    titre_travail VARCHAR(255),
    autres_titres JSON COMMENT'ARRAY[]',
    type_production_id INT,
    secteur ENUM('FILM','TÉLÉVISION','NUMÉRIQUE') NOT NULL,
    synopsis_fr TEXT(255),
    synopsis_en TEXT(255),
    sujet TEXT(255),
    presentation TEXT(255),
    langue_originale JSON COMMENT 'ARRAY["FR","EN","FR&EN","AUTRES:"[]]',
    doublage JSON COMMENT 'ARRAY["FR","EN","FR&EN","AUTRES:"[]]',
    soustitre JSON COMMENT 'ARRAY["FR","EN","FR&EN","AUTRES:"[]]',
    nbr_episodes TINYINT,
    duree TIME,
    contact_infos VARCHAR(255),
    clientele varchar(255),
    budget varchar(100),
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_by INT,
    INDEX fk_type_production (type_production_id),
    INDEX idx_utilisateur_modif (updated_by),
    CONSTRAINT fk_updated_user FOREIGN KEY (updated_by) REFERENCES utilisateurs (id)
        ON DELETE SET NULL
        ON UPDATE NO ACTION,
    CONSTRAINT fk_type_production FOREIGN KEY (type_production_id) REFERENCES type_prod (id)
        ON DELETE SET NULL
        ON UPDATE NO ACTION
);


CREATE TABLE production_genre (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    production_id INT,
    genre_prod_id INT,
    INDEX (production_id, genre_prod_id),
    CONSTRAINT fk_production FOREIGN KEY (production_id) REFERENCES productions (id) ON DELETE CASCADE ON UPDATE NO ACTION,
    CONSTRAINT fk_genre_prod FOREIGN KEY (genre_prod_id) REFERENCES genre_prod (id) ON DELETE CASCADE ON UPDATE NO ACTION
);

CREATE TABLE production_format (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    production_id INT,
    format_prod_id INT,
    INDEX (production_id, format_prod_id),
    CONSTRAINT fk_format_production FOREIGN KEY (production_id) REFERENCES productions (id) ON DELETE CASCADE ON UPDATE NO ACTION,
    CONSTRAINT fk_format_prod FOREIGN KEY (format_prod_id) REFERENCES format_prod (id) ON DELETE CASCADE ON UPDATE NO ACTION
);

CREATE TABLE production_timeline (
    id INT AUTO_INCREMENT PRIMARY KEY,
    production_id INT,
    etape ENUM('PROJET','PRE-PRODUCTION','PRODUCTION','POSTPRODUCTION','TERMINÉ') NOT NULL,
    approximatif BOOLEAN  DEFAULT 0,
    granularité ENUM('SAISON','MOIS') NOT NULL,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    created_at DATE NOT NULL,
    updated_at TIMESTAMP NOT NULL,
    updated_by int(11),
    KEY (updated_by),
    CONSTRAINT FOREIGN KEY (updated_by) REFERENCES utilisateurs (id) ON DELETE SET NULL ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table coproductions
-- cas qui resument un flux d'offre/demande :
-- -- SI proposition="DEMANDE" AND entite_id IS NULL THEN ce sont des "slots" disponibles i.e. un projet cherche des collaborateurs de ce pays
-- -- SI proposition="DEMANDE" AND entite_id IS NOT NULL THEN un projet propose à cette entité de participer
-- -- SI proposition="OFFRE" AND entite_id IS NOT NULL THEN une entite propose de participer
-- -- SI proposition="ACCEPTEE" il s'agit d'une coproduction
-- -- SI proposition="REFUSEE" l'offre ou la demande est refusée et pourra etre supprimee
-- ** Voir si il faut garder un journal des modifications...
-- -----------------------------------------------------
-- @TOFIX #1022 - Ecriture impossible, doublon dans une clé de la table 'coproductions'
CREATE TABLE coproductions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  entite_id INT,
  production_id INT NOT NULL,
  proposition ENUM('DEMANDE','OFFRE','ACCEPTEE','REFUSEE') NULL,
  pays JSON,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_by INT
--   ,
--   INDEX idx_coproduction_entites (entite_id ),
--   INDEX idx_coproduction_activite (proposition),
--   INDEX idx_coproduction_production (production_id ),
--   INDEX idx_utilisateur_modif (updated_by),
--   CONSTRAINT fk_coproduction_entite FOREIGN KEY (entite_id) REFERENCES entites (id)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
--   CONSTRAINT fk_coproduction_production FOREIGN KEY (production_id) REFERENCES productions (id)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
--   CONSTRAINT fk_updated_user FOREIGN KEY (updated_by) REFERENCES utilisateurs (id)
--     ON DELETE SET NULL
--     ON UPDATE NO ACTION
);

CREATE TABLE generique_types (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    titre varchar(100) NOT NULL,
    INDEX (id)
);

CREATE TABLE generique_categories (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    generique_types_id INT,
    categorie varchar(100) NOT NULL,
    numeroQFQ INT,
    codeQFQ varchar(100),
    entete BOOLEAN NOT NULL DEFAULT 0,
    INDEX (id),
    CONSTRAINT FOREIGN KEY (generique_types_id) REFERENCES generique_types (id) ON DELETE SET NULL ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table generique_detail
-- -----------------------------------------------------
CREATE TABLE production_generique_detail (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    generique_types_id INT NOT NULL,
    production_id INT NOT NULL,
    date_debut DATE NOT NULL,
    date_fin DATE,
    pays_code varchar(100) NOT NULL,
    details varchar(100) NOT NULL,
    INDEX (generique_types_id),
    INDEX fk_generique_detail_productions (production_id ),
    CONSTRAINT FOREIGN KEY (generique_types_id) REFERENCES generique_types (id)
        ON DELETE CASCADE
        ON UPDATE NO ACTION,
    CONSTRAINT fk_generique_detail_productions FOREIGN KEY (production_id) REFERENCES productions (id)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table production_generique
--   Necessite la table personnes
-- -----------------------------------------------------
CREATE TABLE production_generique_credit (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    generique_types_id INT NOT NULL,
    production_id INT NOT NULL,
    entite_id INT,
    personne_id INT COMMENT"fallback si non entite, si non personne:creer",
    details varchar(100),
    CONSTRAINT FOREIGN KEY (generique_types_id) REFERENCES generique_types (id) ON DELETE CASCADE ON UPDATE NO ACTION,
    CONSTRAINT FOREIGN KEY (production_id) REFERENCES productions (id) ON DELETE CASCADE ON UPDATE NO ACTION,
    CONSTRAINT FOREIGN KEY (entite_id) REFERENCES entites (id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (personne_id) REFERENCES personnes (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE generique_equipe (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    production_id INT,
    equipe varchar(100),
    INDEX (id),
    CONSTRAINT FOREIGN KEY (production_id) REFERENCES productions (id) ON DELETE SET NULL ON UPDATE NO ACTION
);

-- -----------------------------------------------------
-- Table production_generique
-- -----------------------------------------------------
CREATE TABLE production_generique (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    generique_types_id INT,
    production_id INT,
    equipe_id INT,
    entite_id INT,
    personne_id INT COMMENT "fallback si non entite, si personne inexistant:creer",
    generique_categorie_id INT,
    details varchar(100),
    INDEX fk_generique_productions (production_id),
    INDEX fk_generique_entite (entite_id),
    INDEX fk_generique_equipe (equipe_id),
    CONSTRAINT FOREIGN KEY (generique_types_id) REFERENCES generique_types (id)
        ON DELETE CASCADE
        ON UPDATE NO ACTION,
    CONSTRAINT FOREIGN KEY (generique_categorie_id) REFERENCES generique_categories (id)
        ON DELETE CASCADE
        ON UPDATE NO ACTION,
    CONSTRAINT fk_generique_productions FOREIGN KEY (production_id) REFERENCES productions (id)
        ON DELETE CASCADE
        ON UPDATE NO ACTION,
    CONSTRAINT fk_generique_entite FOREIGN KEY (entite_id) REFERENCES entites (id)
        ON DELETE CASCADE
        ON UPDATE NO ACTION,
    CONSTRAINT FOREIGN KEY (personne_id) REFERENCES personnes (id)
        ON DELETE CASCADE
        ON UPDATE NO ACTION
);