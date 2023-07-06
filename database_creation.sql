drop table admin;
drop table buyer;
drop table seller;
drop table cart;
drop table product;
drop table BIN;
drop table auction;
drop table best_offer;
drop table bid_chat;

create table admin (
    id_admin integer primary key,
    username varchar(30) not null,
    passwd varchar(50) not null
);

create table buyer (
    id_buyer integer primary key,
    username varchar(30) not null,
    passwd varchar(50) not null
);

create table seller (
    id_seller integer primary key,
    username varchar(30) not null,
    passwd varchar(50) not null
);

create table cart (
    id_cart integer primary key,
    id_buyer integer,
    foreign key (id_buyer) references buyer(id_buyer)
);

create table product (
    id_prod integer primary key,
    img_src varchar(30),
    descrip varchar(60),
    id_seller integer,
    foreign key (id_seller) references seller(id_seller),
    id_cart integer,
    foreign key (id_cart) references cart(id_cart)
);

create table BIN (
    id_bin integer primary key,
    price integer not null,
    id_prod integer,
    foreign key (id_prod) references product(id_prod)
);

create table auction (
    id_auc integer primary key,
    max_price integer,
    price integer,
    id_prod integer,
    foreign key (id_prod) references product(id_prod),
    id_buyer integer,
    foreign key (id_buyer) references buyer(id_buyer) 
);

create table best_offer (
    id_bo integer primary key,
    buyer_price integer,
    seller_price integer,
    price integer,
    id_prod integer,
    foreign key (id_prod) references product(id_prod),
    id_buyer integer,
    foreign key (id_buyer) references buyer(id_buyer) 
);

create table bid_chat (
    id_offer integer primary key,
    offer integer not null,
    id_bo integer,
    foreign key (id_bo) references best_offer(id_bo)
);
