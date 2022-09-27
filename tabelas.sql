CREATE DATABASE pubnow;
use pubnow;
CREATE TABLE `publicacao` (
  `id_post` int(11) NOT NULL,
  `titulo` varchar(65) NOT NULL,
  `descricao` varchar(60) DEFAULT NULL,
  `conteudo` varchar(4000) NOT NULL,
  `id_user` int(11) NOT NULL
);
CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(65) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL
);
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `FK_idusuario` (`id_user`);
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);
ALTER TABLE `publicacao`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `publicacao`
  ADD CONSTRAINT `FK_idusuario` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_user`);
