create database Assignmentdb;

go

Create table IF NOT EXISTS Orders(
firstname varchar(50) not null primary key,
lastname varchar(50) not null,
noOftyres int not null);

go

insert into Orders(firstname, lastname,noOfTyres)
values('john','smith',2);

go