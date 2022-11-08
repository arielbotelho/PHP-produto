mysql -u root

create database projeto3;
 
use projeto3;

create table produto(
    idproduto int primary key auto_increment, 
    produto varchar(50) not null,
    descricao varchar(50) not null,
    quantidade int not null,
    valorunitario int not null,
    fornecedor varchar (50) not null
);

