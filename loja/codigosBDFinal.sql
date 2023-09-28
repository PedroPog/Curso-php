create database db_loja
default character set utf8
default collate utf8_general_ci;
use db_loja;

create table categoria(
idCategoria int primary key auto_increment,
dsCategoria varchar(25) not null
)default charset utf8;

create table marca(
idMarca int primary key auto_increment,
dsMarca varchar(25) not null
)default charset utf8;

create table estilo(
idEstilo int primary key auto_increment,
dsEstilo varchar(25) not null
)default charset utf8;

create table produto(
idProduto int primary key auto_increment,
dsProduto varchar(25)not null,
valor decimal(6,2) not null,
estoque int not null,
idCategoria int not null,
idMarca int not null,
idEstilo int not null,
dsCapa varchar(255) not null,
sgLancamento enum('S','N') not null,
constraint fk_cat foreign key(idCategoria) references categoria(idCategoria),
constraint fk_est foreign key(idEstilo) references estilo(idEstilo),
constraint fk_mar foreign key(idMarca) references marca(idMarca)
)default charset utf8;

insert into categoria values(default,'Tenis'),
(default,'Acessorio');

insert into marca values(default,'Nike'),
(default,'Adidas'),
(default,'Jordan'),
(default,'All-Star');

insert into estilo values(default,'Basquete'),
(default,'Skate'),
(default,'Futebol'),
(default,'Casual');

insert into produto values (default,'Jordan 2','110.00','10','1','3','1','jordan2','N'),
(default,'Nike sb','110.00','10','1','1','2','nikesb','N'),
(default,'CHUTEIRA LACELESS X','110.00','10','1','2','3','adidas1','N'),
(default,'Bola AL RIHLA','110.00','10','2','2','3','bola1','N'),
(default,'Boné AEROREADY','110.00','10','2','2','4','bone1','N');

insert into produto values
(default,'Chuteira Predator','150.00','0','1','2','3','chuteira1','N'),
(default,'Camisa DryFit','25.00','0','1','1','4','camisa1','N'),
(default,'Tênis Skate Pro','80.00','0','1','4','2','tenisskate','N'),
(default,'Meião Esportivo','10.00','0','1','1','4','meiao1','N'),
(default,'Bermuda Fitness','40.00','0','1','2','4','bermuda1','N');

insert into produto values
(default,'Bola de Vôlei','30.00','8','2','1','3','bolavolei','N'),
(default,'Boné Snapback','20.00','25','2','4','2','bone2','N'),
(default,'Tênis Futsal','70.00','10','1','3','3','futsal','N'),
(default,'Jaqueta Corta Vento','90.00','5','2','2','4','jaqueta1','N'),
(default,'Sapatilha de Balé','40.00','10','1','1','1','sapatilha','N');

create view listarProd as
SELECT produto.idProduto,
    produto.dsProduto,
    produto.valor,
    produto.estoque,
    categoria.dsCategoria,
    marca.dsMarca,
    estilo.dsEstilo,
    produto.dsCapa,
    produto.sgLancamento
FROM produto inner join categoria
on produto.idCategoria = categoria.idCategoria 
inner join marca
on produto.idMarca = marca.idMarca
inner join estilo
on produto.idEstilo = estilo.idEstilo;


select * from listarprod;


select dsProduto,valor,dsCapa,estoque from listarprod;

select dsProduto,valor,dsCapa,estoque from listarprod where sgLancamento = 'S';
select dsProduto,valor,dsCapa,estoque from listarprod where dsCategoria = "Tenis";




