drop table admin;
drop table buyer;
drop table seller;
drop table cart;
drop table product;
drop table sales;
drop table BIN;
drop table auction;
drop table best_offer;
drop table bid_chat;

create table admin (
    id_admin integer primary key auto_increment,
    username varchar(30) not null,
    passwd varchar(50) not null
);

create table buyer (
    id_buyer integer primary key auto_increment,
    username varchar(30) not null,
    passwd varchar(50) not null,
    iban varchar(60) not null
);

create table seller (
    id_seller integer primary key auto_increment,
    username varchar(30) not null,
    passwd varchar(50) not null,
    iban varchar(60) not null
);

create table cart (
    id_prod integer not null,
    foreign key (id_prod) references product(id_prod),
    id_buyer integer not null,
    foreign key (id_buyer) references buyer(id_buyer)
);

create table product (
    id_prod integer primary key auto_increment,
    img_src varchar(30) not null,
    descrip varchar(60) not null,
    type_prod varchar(30) not null,
    id_seller integer not null,
    foreign key (id_seller) references seller(id_seller)
);

create table sales (
    sale_date date not null,
    id_prod integer not null,
    foreign key (id_prod) references product(id_prod),
    id_buyer integer not null,
    foreign key (id_buyer) references buyer(id_buyer)
);

create table BIN (
    id_bin integer primary key auto_increment,
    price integer not null,
    id_prod integer not null,
    foreign key (id_prod) references product(id_prod)
);

create table auction (
    id_auc integer primary key auto_increment,
    deadline date not null,
    max_price integer,
    price integer,
    id_prod integer not null,
    foreign key (id_prod) references product(id_prod),
    id_buyer integer,
    foreign key (id_buyer) references buyer(id_buyer) 
);

create table best_offer (
    id_bo integer primary key auto_increment,
    buyer_price integer,
    seller_price integer not null,
    price integer,
    id_prod integer not null,
    foreign key (id_prod) references product(id_prod),
    id_buyer integer,
    foreign key (id_buyer) references buyer(id_buyer) 
);

create table bid_chat (
    id_offer integer primary key auto_increment,
    offer integer not null,
    id_bo integer not null,
    foreign key (id_bo) references best_offer(id_bo)
);

insert into admin(username, passwd) values("admin", "admin");
insert into buyer(username, passwd, iban) values("cam", "testcam", "1234");
insert into seller(username, passwd, iban) values("sue", "testsue", "9876");
insert into product(img_src, descrip, type_prod, id_seller) values("src_bin", "bin for test", "castle", 1);
insert into product(img_src, descrip, type_prod, id_seller) values("src_bin", "bin suv1", "suv", 1);
insert into product(img_src, descrip, type_prod, id_seller) values("src_bin", "bin suv2", "suv", 1);
insert into product(img_src, descrip, type_prod, id_seller) values("src_bin", "auction for test", "penthouse", 1);
insert into product(img_src, descrip, type_prod, id_seller) values("src_bin", "best offer for test", "suv", 1);
insert into BIN(price, id_prod) values(15, 1);
insert into BIN(price, id_prod) values(15, 2);
insert into BIN(price, id_prod) values(15, 3);
insert into auction(deadline, id_prod) values("2023-08-23", 4);
insert into best_offer(seller_price, id_prod) values(100, 5);
