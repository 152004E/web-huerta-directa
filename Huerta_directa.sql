create database huerta_directa;
use huerta_directa;

 CREATE TABLE TB_roles(
id_role int primary key not null auto_increment,
role_type varchar(50) not null,
description_role text
 );
 
 
 insert into TB_roles(role_type, description_role) 
			values ('Administrador','Administrador del sistema');
 insert into TB_roles(role_type, description_role) 
			values ('Cliente','Cliente del sistema');

select * from TB_roles;

	
 CREATE TABLE TB_users(
 id_user int auto_increment primary key unique,
 fk_id_role int,
 name_user varchar(100) ,
 phone varchar(20) ,
 history_of_purchase_and_sale text,
 email varchar(100) not null unique,
 password_user varchar (100) not null,
 address varchar(100) ,
 account_creation_date date,
 FOREIGN KEY (fk_id_role) REFERENCES TB_roles(id_role)
);

 insert into TB_users(fk_id_role,email, password_user) 
			values ('1', 'jefersonsnachez@gmail.com', '242424');

insert into TB_users(fk_id_role, email, password_user) 
			values ('2', 'maria23@gmail.com', '12345');
            select * from TB_users;


