create database db_loja
default character set utf8
default collate utf8_general_ci;
use db_loja;

create table categoria(
idCategoria int primary key auto_increment,
dsCategoria varchar(25) not null
)default charset utf8;

create table criacao(
idCriador int primary key auto_increment,
dsCriador varchar(25) not null
)default charset utf8;

create table produto(
idProduto int primary key auto_increment,
idRef int not null,
valor decimal(6,2) not null,
estoque int not null,
idCategoria int not null,
idCriador int not null,
dsCapa varchar(255) not null,
sgLancamento enum('S','N') not null,
constraint fk_cat foreign key(idCategoria) references categoria(idCategoria),
constraint fk_cri foreign key(idCriador) references criacao(idCriador)
)default charset utf8;

