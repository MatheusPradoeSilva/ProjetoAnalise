CREATE database pubnow;

CREATE table usuario
(
    id_user int AUTO_INCREMENT primary key NOT NULL,
    nome varchar(65) not null,
    senha varchar(60) not null,
    email varchar(50) not null
);

CREATE table publicacao
(
    id_post int AUTO_INCREMENT primary key NOT NULL,
    titulo varchar(65) not null,
    descricao varchar(60),
    conteudo varchar(4000) not null,
    id_user int not null, 
     CONSTRAINT FK_idusuario FOREIGN KEY (id_user)
     REFERENCES usuario(id_user)
);


