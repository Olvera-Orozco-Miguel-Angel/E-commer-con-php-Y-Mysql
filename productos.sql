create database productos;
use productos;
create table libro(
clave varchar(15) primary key,
photo varchar(150),
nombre varchar(100),
marca varchar(60),
precio decimal(10,2)
);

Insert into libro(clave,photo,nombre,marca,precio)
values('Q-001',"photo1.jpg","The Cartoon Guide to Chemistry Larry Gonick","Collins Reference, 2005",125.45);

Insert into libro(clave,photo,nombre,marca,precio)
values('Q-002',"photo2.jpg","The Periodic Table: Elements with Style!, Simon Basher","Kingfisher,2007",92.80);

Insert into libro(clave,photo,nombre,marca,precio)
values('Q-003',"photo3.jpg","Chemestry: Getting a Big Reaction, Dan Green","Kingfisher, 2010",213.25);

Insert into libro(clave,photo,nombre,marca,precio)
values("Q-004","photo4.jpg","The Molecular Nature of Matter, Martin Silberg","MacGraw-Hill, 2011",267.60);

Insert into libro(clave,photo,nombre,marca,precio)
values("Q-005","photo5.jpg","General Chemistry, Linus Pauling","Dover Publications, 1988",235.40);


        
 