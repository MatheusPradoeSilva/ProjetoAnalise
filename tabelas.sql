CREATE database pubnow;

CREATE table usuario
(
    id int AUTO_INCREMENT primary key NOT NULL,
    nome varchar(65) not null,
    senha varchar(60) not null,
    email varchar(50) not null
);


