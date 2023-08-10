
drop table if exists Apprenant;

drop table if exists Tuteur;


create table tuteur
(
   id_tuteur            int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   date_de_naissance    datetime,
   ville                varchar(254),
   contact              int,
   primary key (id_tuteur),
   
);

INSERT INTO tuteur (nom, prenom, date_de_naissance, ville, contact)
VALUES ('AGBANOU','Vital','2003-07-12','Nantes',0022996547895),
       (),
       (),
       (),
       (),
       (),
       

create table apprenant
(
   id_apprenant         int not null primary key AUTO_INCREMENT,
   id_tuteur            int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   date_de_naissance    datetime,
   ville                varchar(254),
   contact              int,
   foreign key(id_tuteur) references tuteur(id_tuteur)
 
);

