drop database dbPets;
create database dbPets;

use dbPets;

create table tbPets(
codPet int not null auto_increment,
nomePet varchar(20),
sobreNomePet varchar(20),
idadePet int(3),
emailDono varchar(100),
primary key(codPet));