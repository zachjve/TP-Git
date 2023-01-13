CREATE DATABASE "TPDiapo";
USE TPDiapo;

CREATE USER 'AppDiapo'@'localhost' IDENTIFIED BY 'azerty';
GRANT ALL PRIVILEGES ON TPDiapo.* to 'AppDiapo'@'localhost' IDENTIFIED BY 'azerty';

CREATE TABLE Utilisateur(
    id int PRIMARY KEY AUTO_INCREMENT,
    pseudo varchar(30) NOT NULL,
    email varchar(254) NOT NULL,
    hashPswd text NOT NULL 
) ENGINE = InnoDB;

CREATE TABLE ImageEnregistree(
    urlImage varchar(254) NOT NULL,
    utilisateurId int NOT NULL,
    PRIMARY KEY (urlImage, utilisateurId),
    CONSTRAINT FK_utilisateurId FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(id)
) ENGINE = InnoDB;