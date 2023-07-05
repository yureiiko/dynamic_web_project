create table admin (
    id_admin integer primary key,
    username varchar(30),
    passwd varchar(50)
);

create table buyer (
    id_buyer integer primary key,
    username varchar(30),
    passwd varchar(50)
);

create table seller (
    id_seller integer primary key,
    username varchar(30),
    passwd varchar(50)
);

create table cart (
    id_cart integer primary key,
    id_buyer integer foreign key references buyer(id_buyer)
);

create table product (
    id_prod integer primary key,
    img_src varchar(30),
    descrip varchar(60),
    id_seller integer foreign key references seller(id_seller),
    id_cart integer foreign key references cart(id_cart)
);

create table BIN (
    id_bin integer primary key,
    price integer,
    id_prod integer foreign key references product(id_prod)
);

create table auction (
    id_auc integer primary key,
    max_price integer,
    price integer
    id_prod integer foreign key references product(id_prod),
    id_buyer integer foreign key references buyer(id_buyer) 
);

create table best_offer (
    id_bo integer primary key,
    buyer_price integer,
    seller_price integer,
    price integer,
    id_prod integer foreign key references product(id_prod),
    id_buyer integer foreign key references buyer(id_buyer) 
);

create table bid_chat (
    id_offer integer primary key,
    offer integer not null,
    id_bo integer foreign key references best_offer(id_bo)
);