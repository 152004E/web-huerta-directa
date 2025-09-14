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
            SELECT * FROM TB_users WHERE id_user = 2;
     
    



CREATE TABLE TB_orders(
id_order int auto_increment primary key unique,
fk_id_user int not null,
total_amount decimal(10,2) not null,
order_date date not null,
FOREIGN KEY (fk_id_user) REFERENCES TB_users(id_user)
);

CREATE TABLE TB_products(
id_product int auto_increment primary key unique,
name_product varchar (50) not null,
price decimal(10,2) not null,
category varchar(100) not null,
unidad varchar(255) not null,
image_product VARCHAR(255) not null,
description_product text not null,
publication_date date null
);

select * from TB_products;

CREATE TABLE TB_sales(
id_sale int auto_increment primary key unique,
fk_id_user int not null,
fk_id_order int not null,
date_sale date not null,
sale_detail text not null,
discount decimal (10,2) not null,
amount smallint not null,
subtotal decimal(10,2) not null,
final_amount decimal (10,2) not null,
FOREIGN KEY (fk_id_order) REFERENCES TB_orders(id_order),
FOREIGN KEY (fk_id_user) REFERENCES TB_users(id_user)
);


CREATE TABLE TB_payments(
id_payment int auto_increment primary key unique,
fk_id_sale int not null,
total_amount decimal (10,2) not null,
payment_method varchar(20) not null,
description_payments text not null,
date_payment date not null,
FOREIGN KEY (fk_id_sale) REFERENCES TB_sales(id_sale)
);

CREATE TABLE TB_transport_company(
id_transport_company int auto_increment primary key unique,
fk_id_sale int not null,
name_transport_company varchar (100) not null,
email varchar(255) not null unique,
shipping_rates decimal (10,2) not null,
FOREIGN KEY (fk_id_sale) REFERENCES TB_sales(id_sale)
);

CREATE TABLE TB_orders_products(
id_order_product int auto_increment primary key unique,
product_detail text not null,
fk_id_order int not null,
fk_id_product int not null,
FOREIGN KEY (fk_id_order) REFERENCES TB_orders(id_order),
FOREIGN KEY (fk_id_product) REFERENCES TB_products(id_product)
)
