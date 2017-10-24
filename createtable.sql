create database IF NOT EXISTS Assignmentdb;

go

Create table IF NOT EXISTS Orders(
firstname varchar(50) not null primary key,
lastname varchar(50) not null,
noOftyres int not null);

go

Alter table Orders add IF NOT EXISTS amount numeric null;

go

Update Orders
set amount=noOftyres*110;