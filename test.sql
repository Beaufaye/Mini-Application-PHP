/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  10/08/2023 13:28:33                      */
/*==============================================================*/


drop table if exists Apprenant;

drop table if exists Tuteur;

/*==============================================================*/
/* Table : Apprenant                                            */
/*==============================================================*/
create table Apprenant
(
   id_apprenant         int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   date_de_naissance    datetime,
   genre                varchar(254),
   ville                varchar(254),
   tuteur               varchar(254),
   contact              int,
   primary key (id_apprenant),
   key AK_Identifiant_1 (id_apprenant)
);

/*==============================================================*/
/* Table : Tuteur                                               */
/*==============================================================*/
create table Tuteur
(
   id_tuteur            int not null,
   id_apprenant         int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   date_de_naissance    datetime,
   genre                varchar(254),
   ville                varchar(254),
   contact              int,
   primary key (id_tuteur),
   key AK_Identifiant_1 (id_tuteur),
   key AK_Identifiant_2 (id_tuteur)
);

alter table Tuteur add constraint FK_Association_1 foreign key (id_apprenant)
      references Apprenant (id_apprenant) on delete restrict on update restrict;

