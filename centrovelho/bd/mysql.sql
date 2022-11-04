CREATE DATABASE centro

CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `senha` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `diretor` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `telefone` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `documento` varchar(50) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `telefone` (`telefone`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;


-- Dumping data for table `tb_alunos`

INSERT INTO `tb_usuarios` (`id`, `usuario`,`senha`, `diretor`, `telefone`, `documento`) VALUES
(1, 'Miguel','1234', 'Diretor', '931399014', '0000LA3737');

-- --------------------------------------------------------


-- Table structure for table `tb_usuarios`


CREATE TABLE IF NOT EXISTS `tb_alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `email` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `senha` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `idade` int(10) NOT NULL,
  `endereco` varchar(255) COLLATE latin1_general_cs NOT NULL,
  `nivel` varchar(50) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

-- Dumping data for table `tb_usuarios`

INSERT INTO `tb_alunos` (`id`, `usuario`, `email`, `senha`,`idade`, `endereco`, 'Aluno') VALUES
(1, 'Ana', 'joschris@admin', '12345', '11','Rio de Janeiro,Nit','Aluno'),
(2, 'Alberto', 'alberto@gmail.com', '2424','11','Rio de Janeiro,Nit', 'Aluno'),
(4, 'Maria', 'maria@gmail.com', '2222','11', 'Rio de Janeiro,Nit','Aluno'),
(5, 'Winne', 'winne@gmail.com', '1234','11', 'Rio de Janeiro,Nit','Aluno'),
(8, 'Vanio Manuel', 'vanioA@gmail.com', '1234','11', 'Rio de Janeiro,Nit','Aluno'),
(7, 'Cesar', 'cesar@gmail.com', '1234','11', 'Rio de Janeiro,Nit','Aluno');
