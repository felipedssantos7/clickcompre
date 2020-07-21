# Banco de dados.
-- drop database clickevolue;
-- create database clickevolue;
-- use clickevolue;
-- User: b81698ac9e2b6a
-- Password: 2241ac90
-- host: us-cdbr-east-02.cleardb.com
use heroku_b4cd65cb5d1df28;

# Cliente.
-- Tabela.
create table client(
	id int auto_increment primary key,
	name varchar(200) not null,
	cpf varchar(200) not null,
	email varchar(200) not null,
	gender varchar(200) not null,
	date_of_birth varchar(200) not null,
	password varchar(32) not null
);
-- Cadastro.
drop procedure if exists clientRegister;
delimiter $$
create procedure clientRegister(
	in name_value varchar(200), 
	in cpf_value varchar(200), 
	in email_value varchar(200), 
	in gender_value varchar(200), 
	in date_of_birth_value varchar(200), 
	in password_value varchar(32)
)
begin
	insert into client(name, cpf, email, gender, date_of_birth, password) 
		values (name_value, cpf_value, email_value, gender_value, date_of_birth_value, password_value);
end $$
delimiter ;
call clientRegister('Felipe da Silva Santos', '713.073.664-06', 'felipe@gmail.com', 
	'Masculino', '2001-18-11', 'felipe123');
select * from client;
-- Login.
drop procedure if exists clientLogin;
delimiter $$
create procedure clientLogin(
	in email_value varchar(200), 
	in password_value varchar(32)
)
begin
	select * from client where email = email_value and password = password_value;
end $$
delimiter ;
call clientLogin('felipe@gmail.com', 'felipe123');
-- Atualização.
drop procedure if exists clientUpdate;
delimiter $$
create procedure clientUpdate(
	in id_value int,
	in name_value varchar(200), 
	in cpf_value varchar(200), 
	in email_value varchar(200), 
	in gender_value varchar(200), 
	in date_of_birth_value varchar(200)
)
begin
	update client set name = name_value, cpf = cpf_value, email = email_value, 
		gender = gender_value, date_of_birth = date_of_birth_value where id = id_value;
end $$
delimiter ;
call clientUpdate(1, 'Felipe da Silva Santos', '713.073.664-06', 'felipe2@gmail.com', 
	'Masculino', '2001-18-11');
select * from client;
-- Remoção.
drop procedure if exists clientDelete;
delimiter $$
create procedure clientDelete(in id_value int)
begin
	delete from client where id = id_value;
end $$
delimiter ;
call clientDelete(1);
select * from client;
