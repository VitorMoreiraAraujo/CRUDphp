create database dbFormulario;

use dbFormulario;

create table tbClientes(

	codCli int not null,
	nome varchar(100) not null,
	sobrenome varchar(100) not null,
	email varchar(100) null,
	cpf char(14) unique not null,
	sexo char(1) default 'F' check(sexo in('F','M')),
	usuario varchar(20) not null,
	senha varchar(10) not null,
	primary key(CodCli)

);