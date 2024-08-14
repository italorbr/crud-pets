drop database dbPets;
create database dbPets;

use dbPets;

create table tbPets(
codPet int not null auto_increment,
nomePet varchar(20),
racaPet varchar(20),
idadePet int(3),
corPet varchar(20),
rgaPet char(12),
sexoPet char(1) default "F" check(sexoPet in('F' , 'M')),
primary key(codPet));


INSERT INTO tbPets (codPet,nomePet,racaPet,idadePet,corPet,rgaPet,sexoPet)
VALUES ('','Simba','Vira-lata',10,'Branco','1.123.123','M');

INSERT INTO tbPets (codPet,nomePet,racaPet,idadePet,corPet,rgaPet,sexoPet)
VALUES ('','Kiara','Husky',4,'Branco','2.123.123','F');

INSERT INTO tbPets (codPet,nomePet,racaPet,idadePet,corPet,rgaPet,sexoPet)
VALUES ('','Laion','Vira-lata',12,'Preto','3.123.123','M');