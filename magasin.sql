-- ---------------------Création Table client-----------------------------------------
create table Client(
	id int NOT NULL AUTO_INCREMENT,
	nomFamille varchar(50) NOT NULL,
	prenom varchar(70) NOT NULL,
    courriel varchar(100) NOT NULL,
    motPasse varchar(100) NOT NULL,
    deleted binary,
	primary key(id)
);