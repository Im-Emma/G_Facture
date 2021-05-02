create database if not exists gFacture;
use gFacture;
--drop database gFacture;

create table facture
(
numF int primary key,
objet varchar(50),
dateF varchar(50),
client varchar(50),
tauxTva float,
prixHt float null,
tva float null,
prixTtc float null
);


create table d_facture
(
numDF int primary key,
numFfk int,
designation varchar(50),
unite varchar(50),
qte int,
prixUnite float null,
prixTotal float null
);


alter table d_facture add foreign key (numFfk) references facture(numF) on delete cascade;


insert into facture values(1,'obj334','2020-05-18','client83',0.20,0,0,0);
insert into facture values(2,'obj353','2020-05-12','client36',0.20,0,0,0);
insert into facture values(3,'obj353','2020-04-25','client83',0.20,0,0,0);
insert into facture values(4,'obj363','2020-12-03','client73',0.20,0,0,0);

insert into d_facture values(10,1,'Detail1','dh',3,150,0);
insert into d_facture values(11,1,'Detail1','dh',5,150,0);
insert into d_facture values(12,1,'Detail1','dh',1,120,0);
insert into d_facture values(13,2,'Detail1','dh',2,200,0);
insert into d_facture values(14,2,'Detail1','dh',10,300,0);
insert into d_facture values(15,2,'Detail1','dh',2,300,0);
