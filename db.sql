create database shoppinglist;

use shoppinglist;
 
create table item (
    id int primary key auto_increment,
    description varchar(255) not null,
    amount smallint unsigned not null
);
insert into item (description,amount) values ('Testi yksi item',1);
insert into item (description,amount) values ('Testi kaksi item',2);
insert into item (description,amount) values ('Testi kolme item',3);

