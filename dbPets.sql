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