
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 26/04/2016 às 22:54:54
-- Versão do Servidor: 10.0.20-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u367985245_fesc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `academias`
--

CREATE TABLE IF NOT EXISTS `academias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `professor` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `academias`
--

INSERT INTO `academias` (`id`, `nome`, `endereco`, `telefone`, `cidade`, `foto`, `professor`) VALUES
(2, 'EQUIPE CBT JIU JITSU/ MMA', 'AVENIDA SANTA CATARINA, CENTRO SALA 01 ', '4899701866', 'BALNEÁRIO ARROIO DO SILVA', 'logodefinidacbt2015.jpg', ' Carlos Batista Faixa Preta BJJ 3°grau'),
(3, 'EQUIPE CBT JIU JITSU e MMA', 'SALÃO REDONDO', '4899701866', 'Timbé do Sul', '1404655032logodefinidacbt2015.jpg', 'Carlos Batista Faixa Preta BJJ 3° grau'),
(4, 'CBT/ KOI JIU JITSU  ', 'Rua Benjamin Constant  Costa E Silva', '4734275556', 'Joinville SC', 'koijiujitsu.jpg', 'Fernando Tod Faixa Preta'),
(5, 'Equipe NOVA UNIÃO', 'Academia top Fitnnes rua José Quintino em cim', '4734570088', 'Barra velha SC', 'logomarcosbarravelha.jpg', 'Instrutor Marcos Vieira faixa Roxa'),
(6, 'Gaditas JIU JITSU', 'Estrada da Serraria, 1800, casa 01, Guaruja ', '5192104645', 'Porto Alegre RS', 'gaditas.jpg', 'Instrutor Eduardo Oliveira Faixa Marrom'),
(7, 'EQUIPE WADO DELARIVA CHAPECÓ', 'Indio Conda, 1200', '4999168181', 'Chapecó-SC', 'logomarcas.jpg', 'Michel Erbetz'),
(8, 'EQUIPE FLORIPA TEAM CURITIBANOS', 'Rua Salomão Carneiro de Almeida, N°416 Centro', '4932411604', 'CURITIBANOS-SC', '14147609583574_115529015311447_1829221168_n.jpg', 'Instrutor Paulo Cesar Poeta Fermino Junior in'),
(9, 'ACADEMIA JET CENTER', 'Rua: Florianópolis, 2709, Fatima,', '4734380312', ' Joinville-SC', '10390040_820880917924450_4056404210081877266_n.jpg', 'Gilmar Costa Vargas Faixa Preta 5° grau'),
(10, 'LEONARDO SANTOS TEAM', 'Luiz Berlim, 38, CENTRO', '4792444331', 'Itajaí-SC', 'logoleonardosantosnovaunio.jpg', 'Leonardo Santos'),
(11, 'TONICÃO TEAM BJJ', 'Francisco Tolentino, 684, CENTRO', '4832251677', 'FLORIANÓPOLIS', 'tonicaoteamrafaeltorresvasques.jpg', 'Rafael Torres Vasques'),
(12, 'FUSION CLUB BJJ', 'Altissimo Tournier, 312, Coloninha', '4896287079', 'Araranguá-SC', 'logocristianofrana.jpg', 'Cristiano França'),
(13, 'EQUIPE FRAN DO CARMO BJJ', 'Rua Manoel Pedro Vieira 1255 sala 09, Morro d', '4891833828', 'FLORIANÓPOLIS', 'rafaelfrandocarmo.jpg', 'Rafael Rodrigues Torres'),
(14, 'IMPACTO ACADEMIA BJJ', 'Rui Barbosa, 1711, Centro', '', 'Turvo-SC', '1430594989logocristianofrana.jpg', 'Stefesson Alves de Aguiar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `albuns`
--

CREATE TABLE IF NOT EXISTS `albuns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(150) DEFAULT NULL,
  `dt_cadastro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `albuns`
--

INSERT INTO `albuns` (`id`, `descricao`, `dt_cadastro`) VALUES
(1, 'Foto da campanha JIU JITSU OLÍMPICO 2015 NAS ESCOLAS.', '2014-06-14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atletas`
--

CREATE TABLE IF NOT EXISTS `atletas` (
  `cpf` bigint(11) unsigned zerofill NOT NULL,
  `rg` bigint(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_nasc` date NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `academia` varchar(50) DEFAULT NULL,
  `faixa` varchar(50) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `categoria` varchar(50) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `professor` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) NOT NULL,
  `id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  UNIQUE KEY `rg_UNIQUE` (`rg`),
  UNIQUE KEY `rg` (`rg`,`email`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=216 ;

--
-- Extraindo dados da tabela `atletas`
--

INSERT INTO `atletas` (`cpf`, `rg`, `nome`, `data_nasc`, `email`, `academia`, `faixa`, `peso`, `categoria`, `foto`, `professor`, `cidade`, `id`, `status`) VALUES
(06652198908, 4070026, 'Eduardo Soprana Coelho', '1987-11-12', 'eduardoscoelho@hotmail.com', 'Cb Team Jiu Jitsu', 'branca', 100, 'pesadíssimo', '2014092112.56.55.jpg', 'Carlos Batista', 'Timbé Do Sul', 00100, 1),
(03813710939, 3677131, 'Carlos De Oliveira Batista', '1976-03-04', 'carlosacjj@msn.com', 'Cb Team Jiu Jitsu', 'preta', 85, 'meio pesado', 'fotocarlosbatista.jpg', 'Carlos Batista', 'Balneário Arroio Do Silva', 00101, 1),
(00000000000, 5830973, 'Gabriel Martins Da Silva', '1999-11-02', 'biel-martins1998@hotmail.com', 'Cb Team Jiu Jitsu', 'verde', 45, 'pluma', '1405184929gabrielmartin.jpgcortado.jpg', 'Carlos Batista', 'Balneário Arroio Do Silva', 00102, 1),
(07876429750, 1421574, 'Gladston Muniz Santana', '1978-04-24', 'gladstonmuniz@yahoo.com.br', 'Agnaldo Goes', 'roxa', 98, 'pesado', NULL, 'Agnalso Goes', 'Vila Velha', 00103, 1),
(02515255035, 6077052451, 'Henrique Kaiser Cardoso', '1990-04-01', 'henriquecardosobjj@gmail.com', 'Guetho Jiu Jitsu', 'azul', 61, 'pluma', 'img_20140629_154157571.jpg', 'Guto Campos', 'Gramado', 00104, 1),
(28987423840, 281191232, 'Robson Lopes Masson', '1980-06-11', 'r-massom@hotmail.com', 'Gold Team', 'marrom', 80, 'médio', 'img_27928872388613.jpeg', 'Robson Masson', 'Itapema', 00105, 1),
(04340243841, 2866008, 'Ricardo Susumu Takada', '1962-03-08', 'rijack7@hotmail.com', 'Ocs-itajaí', 'preta', 86, 'meio pesado', 'img_20140715_074755910.jpg', 'Ocimar Costa Santos', 'Itajaí - Sc', 00106, 1),
(88749541900, 3038383, 'Carlos Antonio GonÇalves Alves', '0000-00-00', 'carlosalvesbjj@hotmail.com', 'Tean Tavares', 'preta', 97, 'super pesado', 'foto.jpg', 'Ricardo Bortoluzzi', 'SÃo JosÉ', 00107, 1),
(05285196973, 0, 'Lucas De Oliveira Vieira', '2003-04-03', 'lucasoliveira.2003@hotmail.com', ' Cb Team Brazilian Jiu Jitsu', 'amarela', 50, 'meio pesado', NULL, 'Carlos Batista', ' BalneÁrio Arroio Do Silva', 00108, 1),
(09518505985, 6650807, 'João Pedro Warmling De Oliveira', '2001-06-29', 'j.pedro_wo@hotmail.com', 'Cb Team Jiu Jitsu', 'cinza', 50, 'médio', 'fotojoaowar.jpg', 'Carlos Batista', 'Balneário Arroio Do Silva', 00109, 1),
(11195499906, 2114633163, 'Vinicius Matheus Da Conceição Fernandes', '1999-11-05', 'viniloco@live.com', 'Cb Team Jiu Jitsu', 'laranja', 56, 'médio', 'fotobaitagolpe.jpg', 'Carlos Batista', 'Balneário Arroio Do Silva', 00110, 1),
(11111111111, 6650802, 'Edgar Warmling De Oliveira', '1999-12-10', 'edgarcbteamjj@hotmail.com', 'Cb Team Jiu Jitsu', 'amarela', 61, 'meio pesado', 'fotoedgarwar.jpg', 'Carlos Batista', 'Balneário Arroio Do Silva', 00111, 1),
(00622245902, 38242362, 'Edson Nascimento', '1978-12-22', 'geneci_dealmeida@hotmail.com', 'Dan Lucas', 'azul', 54, 'galo', NULL, 'Carlos Batista', 'Joinville', 00112, 1),
(02462582924, 29944910, 'Geneci De Almeida ', '1975-04-25', 'tatiedo.joi@gmail.com', 'Dan Lucas', 'azul', 48, 'galo', NULL, 'Carlos Batista', 'Joinville', 00113, 1),
(11531430970, 7306387, 'Matheus Nascimento', '2003-11-09', 'matheus.nascimento@hotmail.com', 'Cb Team Jiu Jitsu', 'branca', 27, 'galo', NULL, 'Carlos Batista', 'Joinville', 00114, 1),
(56547625591, 442971656, 'Ronilson Nunes Silva', '1972-09-08', 'ronilson_silva@yahoo.com.br', 'Elite Jiu-jitsu', 'preta', 100, 'super pesado', 'dsc_0636.jpg', 'Ronilson', 'Chapeco', 00115, 1),
(04241529917, 3655170, 'Jader Marasca', '1983-07-10', 'jader_marasca@hotmail.com', 'Elite Jiu Jitsu', 'azul', 88, 'pesado', NULL, 'Ronilson Silva', 'Itapiranga', 00116, 1),
(03378287926, 3907938, 'Adinan Patrik De Campos', '1981-06-11', 'adinanpc@yahoo.com.br', 'Elite Jiu-jitsu', 'preta', 88, 'meio pesado', NULL, 'Adinan Patrik De Campos', 'SÃo Miguel Do Oeste', 00117, 1),
(57838569087, 1035701877, 'Dionisio Américo Martins Nunes', '1971-05-27', 'dionisio.nunes@ibest.com.br', 'Elite Jj', 'azul', 81, 'médio', NULL, 'Jorge Borges', 'Itapiranga', 00118, 1),
(11615120980, 6543000, 'Moisés Marchesin Manfioletti', '2002-03-10', 'moisescbteam@hotmail.com', 'Cb Team Jiu Jitsu', 'branca', 65, 'pesadíssimo', 'moises.jpg', 'Carlos Batista', 'Timbé Do Sul', 00170, 1),
(06073209908, 5019868, 'Alexandre Lazzarotto', '1986-08-29', 'alelazzarotto@bol.com.br', 'Elite Jiu-jitsu', 'roxa', 84, 'meio pesado', NULL, 'Adinan De Campos', 'SÃo Miguel Do Oeste', 00120, 1),
(02163095908, 3373239, 'JoÃo Batista Lopes', '1978-05-03', 'batistasmo@hotmail.com', 'Elite Jiu-jitsu', 'branca', 74, 'leve', 'dsc02268.jpg', 'Adinan De Campos', 'SÃo Miguel Do Oeste', 00121, 1),
(06650337960, 5102001, 'Fernando Prezzi', '1988-07-30', 'fernandoprezzi@hotmail.com', 'Elite Jiu-jitsu', 'branca', 75, 'leve', 'dsc02270.jpg', 'Adinan De Campos', 'SÃo Miguel Do Oeste', 00122, 1),
(06137022986, 4240516, 'Wagner Patrick Machado', '1990-05-13', 'wagnermachadoainsf@hotmail.com', 'Elite Jiu-jitsu', 'branca', 91, 'pesado', 'dsc02271.jpg', 'Adinan De Campos', 'SÃo Miguel Do Oeste', 00123, 1),
(05490671912, 4269725, 'Fabio Junior Rossini', '1985-05-06', 'compras@maxelmoveis.com.br', 'Elite Jiu-jitsu', 'branca', 91, 'pesado', 'dsc02278.jpg', 'Adinan De Campos', 'SÃo Miguel Do Oeste', 00124, 1),
(04392300986, 4157325, 'Tiago Rodrigues Da Silva', '1988-03-23', 'tiagosmosc@hotmail.com', 'Elite Jiu-jitsu', 'branca', 98, 'super pesado', 'dsc02275.jpg', 'Adinan De Campos', 'SÃo Miguel Do Oeste', 00125, 1),
(02623751927, 3920021, 'Adriano Junior Da Silva', '1981-01-13', 'estofadoscomarte@hotmail.com', 'Elite Jiu-jitsu', 'branca', 88, 'meio pesado', 'dsc02261.jpg', 'Adinan De Campos', 'SÃo Miguel Do Oeste', 00126, 1),
(02132883971, 2545486, 'Marcos Paulo Gasparin', '1976-01-05', 'marcos_mpaulo@yahoo.com.br', 'Elite Jiu-jitsu', 'azul', 98, 'super pesado', 'dsc02263.jpg', 'Adinan De Campos', 'SÃo Miguel Do Oeste', 00127, 1),
(50734610963, 1253513, 'Luiz Alcebiades Pichetti', '1964-09-12', 'luizpichetti@yahoo.com.br', 'Elite Jiu-jitsu', 'marrom', 91, 'pesado', 'dsc02266.jpg', 'Adinan De Campos', 'SÃo Miguel Do Oeste', 00128, 1),
(10718211995, 70226351, 'Gabrieli Westphal', '2000-06-03', 'gaby_03smo@hotmail.com', 'Elite Jiu-jitsu', 'branca', 56, 'médio', 'dsc02276.jpg', 'Adinan De Campos', 'SÃo Miguel Do Oeste', 00129, 1),
(06455399960, 5199763, 'Evandro Henrique Fernandes', '1988-05-24', 'taieliazevedo@hotmail.com', 'Elite Jiu-jitsu', 'azul', 70, 'pluma', 'dsc02265.jpg', 'Adinan De Campos', 'SÃo Miguel Do Oeste', 00130, 1),
(06100944910, 5069393, 'Carla Patrícia Castanho', '1988-10-30', 'carlitcha1@gmail.com', 'Elite Jiu-jitsu', 'branca', 53, 'pluma', 'carla.jpg', 'Ronilson Silva', 'Chapecó', 00131, 1),
(31740894847, 343961106, 'Marcos Eduardo Luiz', '1985-05-19', 'lmarcos.luiz@gmail.com', 'Wado Delariva Chapecó', 'branca', 94, 'pesado', '1408707438foto.jpg', 'Michel Ebertz', 'Chapecó', 00132, 1),
(02426336099, 7165965, 'Felipe Lamana Canova', '1994-03-15', 'lipe_canova@hotmail.com', 'Equipe Wado De La Riva Chapecó', 'branca', 91, 'pesado', '10514753_632213313543630_4297413043988202054_n22.jpg', 'Michel Ebertz', 'Chapecó', 00133, 1),
(05480617931, 4598903, 'Augusto Antonio Favretto', '1987-02-08', 'augusto.favretto@hotmail.com', 'Equipe Wado De La Riva Chapecó', 'roxa', 82, 'médio', NULL, 'Michel Ebertz', 'Chapéco', 00134, 1),
(05725979911, 4291632, 'Josimar Zorzzi', '1987-03-12', 'jzorzzi@gmail.com', 'Wado De La Riva Chapecó', 'branca', 68, 'leve', NULL, 'Michel Ebertz', 'Chapecó', 00135, 1),
(06287799927, 49118960, 'Ivan Felipi Biazus', '0000-00-00', 'ivanbiazus_mp@hotmail.com', 'Wado De La Riva', 'branca', 62, 'pluma', '1409068766foto.jpg', 'Michel Ebertz', 'Chapecó', 00136, 1),
(96383650753, 60581204, 'Álvaro Fernando Mourabito Pereira ', '1961-01-06', 'alvarosplinter@hotmail.com', 'Álvaro Splinter Free Combat ', 'preta', -67, 'leve', NULL, 'Álvaro  Faixa Vermelha E Preta 7° Guau', 'Barra Do PiraÍ - Rj', 00137, 1),
(07308859924, 53595327, 'Vitor Augusto Zimmermann Simioni', '1996-09-16', 'mikmba_dedao@hotmail.com', 'Equipe Wado De La Riva Michel Ebertz', 'branca', 94.3, 'pesado', NULL, 'Michel Ebertz', 'Concórdia', 00138, 1),
(01160414980, 4134494, 'Thiago D''alves Borsati', '1995-10-11', 'thiagobrst@me.com', 'Equipe Wado De La Riva Michel Ebertz', 'branca', 82.3, 'médio', NULL, 'Michel Ebertz', 'Concórdia', 00139, 1),
(06483973942, 4950671, 'Maicon Junior Silvestrin', '1989-05-20', 'maicon_silvestrin@yahoo.com.br', 'Wado De La Riva', 'branca', 75, 'leve', NULL, 'Michel Ebertz', 'Chapecó', 00140, 1),
(05152863979, 7075050687, 'Thiago Mateus Machado', '1986-07-24', 'thiagodh@yahoo.com.br', 'Wado De La Riva Chapeco', 'azul', 70, 'leve', NULL, 'Michel Ebertz', 'Chapeco', 00141, 1),
(01144744946, 370893, 'Lin Meng Wen', '1995-10-23', 'tunder.rafa@hotmail.com', 'Equipe Wado Delariva', 'azul', 55, 'galo', 'img_20140817_205003.jpg', 'Michel Ebertz', 'Chapecó', 00142, 1),
(00398267910, 2952219, 'Marcos Roberto Scheitz', '1977-10-09', 'cbtatletamarcos@hotmail.com', 'Cb Team Jiu Jitsu', 'azul', 82.3, 'médio', '10603399_10203108207360965_2360252910820626144_n.jpg', 'Carlos Batista', 'Balneario Arroio Do Silva', 00143, 1),
(07373497942, 5861543, 'Arthur  Villain', '1990-07-13', 'gugabnu@hotmail.com', 'Wado De La Riva Chapeco', 'roxa', 85, 'meio pesado', NULL, 'Michel Ebertz ', 'Chapeco', 00144, 1),
(06645230990, 4257289, 'Mauricio Menegazzo', '1989-10-29', 'menegazzo41@hotmail.com', 'Equipe Wado De La Riva Chapecó', 'azul', 76, 'leve', 'ee.jpg', 'Michel Ebertz', 'Chapecó', 00145, 1),
(05930377901, 4864881, 'Valtair Guarnieri', '0000-00-00', 'valtairsis@gmail.com', 'Wado De La Riva Chapecó', 'branca', 63, 'pluma', NULL, 'Michel Ebertz', 'Chapecó', 00146, 1),
(05929257906, 4034933, 'Jean Mateus Scussel', '1988-07-18', 'jeanrollero@gmail.com', 'Wado De La Riva Chapecó', 'azul', 87.2, 'meio pesado', '20140829_204649.jpg', 'Michel Ebertz', 'Seara', 00147, 1),
(04124192975, 4105735, 'Rodrigo Schumolheer', '2014-10-17', 'rodrigo_schu@yahoo.com.br', 'Cb Team', 'preta', 106, 'absoluto', '10419623_672065762875798_3631080342570861051_n.jpg', 'Rodrigo Schumolheer', 'Rio Do Sul', 00148, 1),
(03999534931, 3818656, 'Edison Antonio Basso', '1984-09-20', 'edison_basso@yahoo.com.br', 'Equipe Wado Delariva ChapecÓ', 'azul', 86, 'meio pesado', '1409592997foto.jpg', 'Michel Erbetz', 'Chapecó', 00149, 1),
(02317294999, 6740233, 'Gilmar Costa Vargas ', '1978-06-10', 'gilmarvargas@pop.com.br', 'Jet Center', 'preta', 85, 'meio pesado', '2013072919.55.33.jpg', 'Gilmar Costa Vargas Faixa Preta 5º Grau', 'Joinville', 00150, 1),
(10245409955, 1111111111, 'Juliana Dahm Da Rosa', '1995-12-24', 'juliana-dahm@hotmail.com', 'Cb Team Jiu Jitsu', 'branca', 80, 'meio pesado', 'julianadahm.jpg', 'Carlos Batista', 'Balneário Arroio Do Silva', 00151, 1),
(08553027988, 5097994, 'Thiago Nardi', '1993-01-02', 'thiaguinho_nardi@hotmail.com', 'Equipe  Wado De La Riva Chapecó', 'azul', 69, 'leve', '1409758089foto.jpg', 'Michel Ebertz', 'Seara ', 00152, 1),
(06687039970, 49032720, 'Tatiane Batista', '1987-06-16', 'thyane1@hotmail.com', 'Jet Center', 'azul', 63, 'médio', 'img_20140814_21205711.jpg', 'Gilmar Costa Vargas Faixa Preta 5º Grau', 'Joinville', 00153, 1),
(04753677907, 4354847, 'Julia Cercal De Borba', '1987-09-04', 'ju.cborba@gmail.com', 'Jet Center', 'branca', 76, 'pesado', '1926818_559374427508474_1607910643497312049_n.jpg', 'Gilmar Costa Vargas Faixa Preta 5º Grau', 'Joinville', 00154, 1),
(08502424955, 6194745, 'Vitor Furtado', '1998-04-15', 'vitorfurtado815@hotmail.com', 'Jet Center', 'branca', 77, 'pesado', '141109205410001302_625555357524157_931680604_n.jpg', 'Gilmar Costa Vargas Faixa Preta 5º Grau', 'Joinville', 00155, 1),
(37259221879, 7042659, 'Anderson Silvano Alves', '1989-08-31', 'silvanodx1@hotmail.com', 'Jet Center', 'branca', 73, 'leve', '10269634_652199578203616_2519456154308846072_n.jpg', 'Gilmar Costa Vargas Faixa Preta 5º Grau', 'Joinville', 00156, 1),
(10599825952, 6985857, 'Natan Dos Santos Ferreira', '1998-07-27', 'nathanfjutf@facebook.com', 'Jet Center', 'branca', 60, 'pluma', '10629851_270835346445303_7428602553013423924_n.jpg', 'Gilmar Costa Vargas Faixa Preta 5º Grau', 'Joinville', 00157, 1),
(10967634946, 6503255, 'Caroline Lemos Correia', '1998-02-14', 'carolzinha2009_@hotmail.com', 'Jet Center', 'branca', 75, 'pesadíssimo', '10685279_690902244323593_128091128_n.jpg', 'Gilmar Costa Vargas Faixa Preta 5º Grau', 'Joinville', 00158, 1),
(08770698910, 6265292, 'Thiago De Sene Pereira ', '1995-01-08', 'thiagodesenepereira@hotmail.com', 'Academia Jet Center', 'branca', 66, 'leve', '141479113410568883_1470639326541011_1710674883835297093_n.jpg', 'Gilmar Costa Vargas Faixa Preta 5º Grau', 'Joinville', 00176, 1),
(07764071986, 7268057, 'Vinicius Sperber Gomes', '1991-09-18', 'vinicius_sperber@hotmail.com', 'Jet Center', 'azul', 78, 'médio', '2013103021.21.43.jpg', 'Gilmar Costa Vargas Faixa Preta 5º Grau', 'Joinville', 00159, 1),
(04949745970, 6662152, 'Rricson Machado', '1986-09-16', 'ericson_1609@hotmail.com', 'Jet Center', 'branca', 78, 'médio', '10647819_690902734323544_1110875441_n.jpg', 'Gilmar Costa Vargas Faixa Preta 5º Grau', 'Joinville', 00160, 1),
(09146018905, 5541337, 'Thiago De Oliveira Gaio', '1994-12-26', 'thiagoandressa.pg@facebook.com', 'Jet Center', 'branca', 84, 'meio pesado', '10568883_1470639326541011_1710674883835297093_n.jpg', 'Gilmar Costa Vargas Faixa Preta 5º Grau', 'Joinville', 00161, 1),
(05371688935, 90183516, 'Ricardo Araujo De Lima', '1985-12-22', 'ricardo_1985live@hotmail.com', 'Gracie Humaitá', 'marrom', 105, 'pesadíssimo', 'euuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu.jpg', 'Tomeya Sasahara', 'Umuarama Parana', 00162, 1),
(08018738947, 107277200, 'Raphael Felix', '1989-02-22', 'ra2013instalacoes@hotmail.com', 'Gracie Humaitá', 'branca', 105, 'pesadíssimo', NULL, 'Tomeya Sasahara', 'Umuarama Parana', 00163, 1),
(07290959914, 10448174, 'Ricardo Pinto Dos Santos', '1989-09-14', 'ricardo-com-pinta@hotmail.com', 'Gracie Humaitá', 'azul', 75, 'leve', NULL, 'Tomeya Sasahara', 'Douradina', 00164, 1),
(00730786978, 59998048, 'Francisco Frizon', '1979-10-06', 'chicofrizon@hotmail.com', 'Gracie Humaitá', 'marrom', 94, 'pesado', 'outradochiquinho.jpg', 'Tomeya Sasahara', 'Umuarama Parana', 00165, 1),
(01182648932, 254298850, 'Tomeya Sasahara Filho', '1978-10-06', 'tomeyasasa@hotmail.com', 'Gracie Humaitá', 'preta', 76, 'leve', NULL, 'Tomeya Sasahara', 'Umuarama Parana', 00166, 1),
(10846791919, 108368128, 'Alison Fernandes ', '1996-11-22', 'alisonfernadees@live.com', 'Gracie Humaitá', 'branca', 65.8, 'leve', NULL, 'Tomeya Sasahara', 'Umuarama Parana', 00167, 1),
(05543698933, 140592714, 'Gbriel Piovezan ', '1999-12-28', 'gabriel.henrique36@yahoo.com.br', 'Gracie Humaitá', 'branca', 58.5, 'médio', NULL, 'Tomeya Sasahara', 'Umuarama Parana', 00168, 1),
(10641701969, 137704757, 'Alan Lisboa Leal', '1999-03-04', 'alanleal181@gmail.com', 'Gracie Humaitá', 'branca', 77, 'pesadíssimo', NULL, 'Tomeya Sasahara', 'Umuarama Parana', 00169, 1),
(22430066858, 276269937, 'Fernando Salustiano Da Silva', '1976-10-22', 'fernando.sal.silva@gmail.com', 'Koi Cb Team Jiu Jitsu', 'azul', 90, 'pesado', '1958292_557347554364093_1386917400_n.jpg', 'Fernando Tod', 'Joinville', 00171, 1),
(00377806030, 1084578581, 'Eduardo Oliveira Rodrigues', '1985-02-28', 'dudugaditas@gmail.com', 'Guetho Jiujitsu', 'marrom', 70, 'leve', 'pqaaak2phr2adduzskvikp1yyotryl6kdotpcfkwzoags_lqnztxyhyznrjxlfoy_l7kx0jkjnz1wpt4bynu7xgdkniam1t1un6anzataay_x8pjmghnjqjk0sp.jpg', 'Gustavo Campos', 'Porto Alegre', 00172, 1),
(84261480930, 2963649, 'Paulo Cesar Cordova Kuster', '1973-10-16', 'ringueboxe@hotmail.com', 'Paulo De Jesus Fight Team', 'preta', 88, 'meio pesado', 'certificadopaulo4.jpg', '', 'Navegantes', 00173, 1),
(00965742911, 4130704, 'Marcelo Venicius De Jesus Pereira', '1984-07-10', 'marcelo.tst2011@gmail.com', 'Xatuba Joinville', 'marrom', 80, 'médio', '10492325_258658410995343_5074610952595760024_n.jpg', 'Marcelo', 'Joinville', 00174, 1),
(01173879676, 5739585, 'Wesley Vani De Souza Neto', '0000-00-00', 'wesleyvani@hotmail.com', 'Arena Team', 'marrom', 90, 'super pesado', NULL, 'Eduardo Alves Portilho', 'Concórdia Sc', 00175, 1),
(00651325994, 43231985, 'Juliano Santana Ribeiro', '1982-02-25', 'julianosrja@yahoo.com.br', '', 'preta', 88, 'meio pesado', NULL, 'Juliano Santana Ribeiro', 'Itapoá', 00177, 1),
(01935670913, 2044082, 'Rafael Torres Vasques', '1976-01-21', 'rafatorresjj@gmail.com', 'Tonicão Team', 'preta', 105, 'super pesado', NULL, 'Rafael Torres Vasques', 'Florianopolis', 00178, 1),
(65802420944, 44973250, 'Jose Da Silva Fajardo', '0000-00-00', 'fajardojos@yahoo.com.br', 'Fajardo Jiu Jitsu', 'marrom', 79, 'médio', NULL, 'Carlos Batista Tean', 'Guaraniaçu Pr', 00179, 1),
(05427449965, 52357619, 'Fabiano Marcucci', '1986-02-24', 'fabiano@globalbusiness.cnt.br', 'TonicÃo Team', 'marrom', 103, 'pesadíssimo', 'nova1.jpg', 'Rafael Torres Vasques', 'Florianópolis', 00180, 1),
(01434930947, 20400357, 'Paulo Cesar Poeta Fermino Junior', '1979-08-20', 'poetabio@hotmail.com', 'Floripa Team Carlson Gracie', 'marrom', 80, 'médio', 'paulo.jpg', 'Enio Frony Gondran ', 'Curitibanos', 00181, 1),
(67478840949, 3544082, 'Enio Frony Gondran', '1966-10-29', 'eniofronygondran@hotmail.com', 'Floripa Team Carlson Gracie', 'preta', 100, 'super pesado', 'fotoenio.jpg', 'Enio Frony Gondran', 'Florianópolis', 00182, 1),
(07616591965, 5467052, 'Cristhian Morando', '1989-11-26', 'cristiamorando@hotmail.com', 'Tonicão Team ', 'branca', 122, 'pesadíssimo', NULL, 'Marcelo Saraiva ', 'Videira ', 00183, 1),
(10996538941, 7123222, 'Kaue De Melo Bento', '1998-01-01', 'kauebento2011@hotmail.com', 'Centro De Treinamento Machado', 'verde', 60, 'médio', NULL, 'Fenando Rosa ', 'Jinville Santa Catarina', 00184, 1),
(02062890060, 6950078, 'Ioahan Brambilla', '2005-11-08', 'eri_guber@contato.net', 'Carlos Batista Team', 'cinza', 34, 'pluma', 'img_20150222_141540.jpg', 'Carlos Batista', 'BalneÁrio Arroio Do Silva', 00185, 1),
(03913399909, 3840170, 'Celso Jose Nogueira', '1982-03-19', 'celso.nogueira82@gmail.com', 'Jet Center', 'branca', 102, 'pesadíssimo', NULL, 'Gilmar Costa Vargas Faixa Preta 5 º Grau', 'Joinville', 00186, 1),
(01042013985, 4986385, 'Willian De Andrade', '1989-02-10', 'andradewill.2015@gmail.com', 'Jet Center', 'branca', 65, 'leve', '10672258_10202262433280829_7750765633807560890_n.jpg', 'Gilmar Costa Vargas Faixa Preta 5º Grau', 'Joinville', 00187, 1),
(04782312962, 2368931, 'Lucas Pretto Da Silva', '1984-08-02', 'lucasprettopersonal@hotmail.com', 'Lotus Club Carvoeiro', 'marrom', 75.8, 'leve', 'fotoperfil.jpg', 'Lucas Pretto Da Silva', 'Içara', 00188, 1),
(08128953982, 6019751, 'Guilherme Heil', '1991-03-28', 'guilhermeheil28@gmail.com', 'Jet Center', 'branca', 87, 'pesado', NULL, 'Gilmar C.vargas Faixa Preta 5ºgrau', 'Joinville', 00189, 1),
(11504924908, 7297982, 'Saimon Da Rosa Fidencio', '2002-07-30', 'saimon@hotmail.com', 'Lotus Club Carvoeiro', 'branca', 1, 'absoluto', NULL, 'Lucas Pretto Da Silva', 'Içara', 00190, 1),
(11504946979, 7295665, 'Deanira Da Rosa Oliveira', '2003-10-09', 'deanira@hotmail.com', 'Lotus Club Carvoeiro', 'branca', 1, 'absoluto', NULL, 'Lucas Pretto Da Silva', 'Içara', 00191, 1),
(06758397939, 5572026, 'Cicero Dos Santos Bittencourt', '1988-05-12', 'cicerobittencourt88@hotmail.com', 'Jet Center', 'branca', 73, 'leve', '1538646_414758981987372_543000618_n.jpg', 'Gilmar C.vargas Faixa Preta 5ºgrau', 'Joinville', 00192, 1),
(03038773913, 3948407, 'Anderson Teixeira Bianchin', '1982-09-24', 'mokeado@gmail.com', 'Fusion Jiu Jitsu', 'roxa', 75, 'leve', 'fopto.jpg', 'Cristiano França', 'Turvo', 00193, 1),
(06865973976, 5636381, 'Eliton Faria', '1988-03-23', 'faria-elitonjiu-jitsu@bol.com.br', 'Floripa Team', 'roxa', 72, 'leve', '1425866959img20150308wa0031.jpg', 'Enio Gondran', 'Florianopolis', 00194, 1),
(09313661942, 3273145, 'Thiago Borba De Oliveira', '2001-07-26', 'guscorseguros@hotmail.com', 'Centro De Treinamento Orion Palhoça', 'laranja', 55, 'leve', NULL, 'Mauricio Santos Conceição ', 'Palhoça', 00195, 1),
(77754603500, 52542170, 'Mauricio Santos Conceição ', '1976-06-01', 'guscorseguros@r7.com', 'Centro De Treinamento Orion Palhoça', 'preta', 75, 'leve', NULL, 'Mauricio Santos Conceição ', 'Palhoça', 00196, 1),
(11653979941, 6635323, 'Gustavo Lemke Dos Santos', '2000-01-18', 'gustavolemkes@hotmail.com', 'Centro De Treinamento Orion Palhoça', 'verde', 77, 'pesadíssimo', NULL, 'Mauricio Santos Conceição ', 'Palhoça', 00197, 1),
(97336084915, 3273146, 'Cicero Dos Santos', '1978-09-15', 'siglass-sc@hotmail.com', 'Centro De Treinamento Orion Palhoça', 'roxa', 81, 'médio', NULL, 'Mauricio Santos Conceição ', 'Palhoça', 00198, 1),
(69368643920, 2069813, 'Renato Rachadell', '1974-05-11', 'centrodelutasorion@r7.com', 'Centro De Lutas Orion', 'azul', 105, 'super pesado', NULL, 'Mauricio Santos Conceição ', 'PalhoÇa', 00199, 1),
(36025290881, 451041951, 'Joel Silva P De Souza', '1986-10-01', 'vivartvisual@gmail.com', 'Cbt Jj', 'marrom', 68, 'leve', NULL, 'Carlos Batista', 'Florianopolis', 00200, 1),
(04269113936, 4013285, 'Tiago De Freitas Vicente', '1984-03-25', 'tiagodfvicente@gmail.com', 'Fusion', 'marrom', 118, 'pesadíssimo', NULL, 'Cristiano França', 'Ararangua', 00201, 1),
(06739106959, 106976163, 'Juliano Martins Da Cruz', '1990-10-26', 'juliano.cruz2125@gmail.com', 'Piazza Jiu Jitsu', 'azul', 69, 'pluma', NULL, 'Jeferson Godoi', 'Biguaçu', 00202, 1),
(09936168950, 6651837, 'Gabriel Neumann Lummertz', '2004-04-18', 'alexsandraneumann@gmail.com', 'Cbt Team Jiu Jitsu', 'amarela', 38, 'leve', NULL, 'Carlos Batista', 'Balneário Arroio Do Silva', 00203, 1),
(00022220941, 2790240, 'Alexandre Piccinini', '1975-01-30', 'cal.orleans@gmail.com', 'Lotus', 'branca', 84, 'meio pesado', NULL, 'Felipe Silva', 'Orleans', 00204, 1),
(08950076900, 4067272, 'Rafael De Souza Feliciano', '1994-12-04', 'rafaelfeliciano@hotmail.com.br', 'Cb Team', 'branca', 105, 'super pesado', NULL, 'Carlos Batista', 'Garopaba', 00205, 1),
(54894190087, 1038476691, 'Selmar Menezes', '1969-01-17', 'lcpajsc@hotmail.com', 'Dojo Menezes', 'preta', 70, 'médio', 'selmar.jpg', 'Selmar', 'Bombinhas', 00206, 1),
(04884284917, 45709521, 'Marcelo Bento', '1984-01-09', 'marcelocustelinha_84@hotmail.com', 'Floripa Team/carlson Gracie', 'preta', 70, 'pluma', 'marcelosite1.jpg', 'Enio Frony Gondran', 'Florianópolis', 00207, 1),
(76593622753, 119085553, 'Acyr Ricardo Mourabito Pereira', '1964-01-26', 'acyrricardo@yahoo.com.br', 'Alvaro Splinter Free Combat', 'preta', -75, 'médio', NULL, 'Acyr Ricardo Mourabito Pereira ', 'Barra Do Pirai', 00208, 1),
(08160599935, 5393491, 'Carlos Yago Machado', '1992-03-27', 'judoabluz@gmsil.com', 'Carlos Machado', 'marrom', 73, 'leve', NULL, 'Carlos Yago Machado', 'Abelardo Luz- Sc', 00209, 1),
(07892254927, 5793651, 'João Paulo Desouza', '1992-10-18', 'joaosouza08@hotmail.com', 'Asm', 'azul', 75, 'leve', '995509_527818883964200_1804914281_n.jpg', 'Edson Silva', 'Palhoça', 00210, 1),
(02783969920, 42827027, 'Alessandro Da Silva ', '1980-12-12', 'gordomaldito180@hormail.com', 'Floripa Team Jiu Jitsu ( Equipe Gondran Jiu Jitsu ', 'marrom', 85, 'meio pesado', NULL, 'Enio  Fronny Gondran', '35', 00211, 1),
(50798510072, 5093977624, 'Marcos Almeida', '1978-01-28', 'marcosalmeida8087@gmail.com', 'Centro De Lutas Marcos Almeida ', 'preta', 90, 'pesado', NULL, 'Marcos Odirlei Lopes Almeida. ', 'Armazém Sc', 00212, 1),
(06444409969, 5063892, 'Cleiton Freitas Candido', '1988-11-14', 'cleiton.cfc@hotmail.com', 'Centro De Lutas Marcos Almeida', 'branca', 93, 'pesado', '20160331_1917391.jpg', 'Marcos Odirlei Lopes De Almeida', 'Armazém', 00213, 1),
(04642081062, 5128610473, 'Rian Dravanz Vieira Furtado', '2004-03-25', 'lizamilenev@yahoo.com.br', 'Forma Fisica', 'branca', 43, 'galo', 'j71294.jpg', 'Leandro Luz', 'Pelotas', 00214, 1),
(04669379976, 5974641, 'Adao Jose Fidelis Medeiros', '0000-00-00', 'adao-fm@hotmail.com', 'Centro De Lutas Marcos Almeida', 'marrom', 88, 'meio pesado', NULL, 'Marcos Almeida', 'Gravatal', 00215, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `albuns_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_fotos_albuns_idx` (`albuns_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`id`, `nome`, `albuns_id`) VALUES
(2, '1404157569123425.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricoes`
--

CREATE TABLE IF NOT EXISTS `inscricoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `sexo` char(1) NOT NULL,
  `rg` bigint(20) DEFAULT NULL,
  `cpf` bigint(20) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `equipe` varchar(45) DEFAULT NULL,
  `professor` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) NOT NULL,
  `faixa` varchar(45) NOT NULL,
  `peso` float NOT NULL,
  `comprovante` varchar(200) DEFAULT NULL,
  `absoluto` int(1) NOT NULL DEFAULT '0',
  `status` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Extraindo dados da tabela `inscricoes`
--

INSERT INTO `inscricoes` (`id`, `nome`, `sexo`, `rg`, `cpf`, `data_nasc`, `email`, `cidade`, `equipe`, `professor`, `categoria`, `faixa`, `peso`, `comprovante`, `absoluto`, `status`) VALUES
(1, 'Carlos de Oliveira Batista', 'M', 3677131, 3813710939, '1976-03-04', 'carlosacjj@msn.com', 'Balneário Arroio do Silva', 'CB TEAM BJJ', 'CARLOS BATISTA', 'meio pesado', 'preta', 86, NULL, 1, 0),
(2, 'marcelo lopez fernandez', 'M', 5110488, 29719668873, '0000-00-00', 'marcelolopezfernandezz@gmail.com', 'florianopolis', 'RVJJ', 'Paulo Stadler', 'pluma', 'azul', 66, NULL, 0, 0),
(3, 'César Nunes', 'M', 3307103, 2009693906, '1976-10-06', 'cesar.logicaconstrutora@gmail.com', 'Florianópolis', 'Rvjj ', 'Paulo Stabler', 'leve', 'azul', 70, NULL, 1, 0),
(4, 'Adinan De Campos', 'M', 3907938, 3378287926, '1981-06-11', 'adinanpc@yahoo.com.br', 'São Miguel Do Oeste', 'Elite Jiu-jitsu', 'Adinan De Campos', 'pesado', 'preta', 93, NULL, 1, 0),
(5, 'Adriano Alves Antunes', 'M', 83219483, 6419873908, '1988-01-28', 'aantunesjj@hotmail.com', 'Cascavel /pr', 'Aliance', 'Mario Reis', 'meio pesado', 'roxa', 83, NULL, 1, 0),
(6, 'Emerson Luis Borges', 'M', 75018380, 4635959988, '1984-04-27', 'emersonborges@outlook.com', 'Florianopolis', 'Rvjj', 'Paulo Stadler', 'super pesado', 'branca', 100.5, NULL, 0, 0),
(7, 'Diogo Joaquim Silveira', '', 5123596, 6803284913, '1989-07-20', 'diogobebezao2011@gmail.com', 'Joinville', 'Nova União ', 'Henrique Marcos Pele', 'pesadíssimo', 'marrom', 123, NULL, 1, 0),
(8, 'Ricardo Faustino De Carvalho', 'M', 6733458, 81523416068, '0000-00-00', 'egler_rs22@hotmail.com', 'Florianópolis ', 'Rv Jj', 'Paulo Stadler', 'galo', 'amarela', 34, NULL, 1, 0),
(34, 'Gabriel Gomes', 'M', 4941687, 5871790909, '1988-05-25', 'jonathas_faria@hotmail.com', 'São Jose', 'Tonicao Team', 'Fabiano Crispim', 'médio', 'branca', 82, NULL, 1, 0),
(17, 'Luan Goldbeck', 'M', 5450430, 7783567959, '1990-06-19', 'luangoldbeck@gmail.com', 'Mondaí', 'Elite Jiu Jitsu', 'Adinan Patrick De Campos', 'médio', 'azul', 81.5, NULL, 1, 0),
(18, 'Douglas Bernardino Gonçalves', 'M', 54977606, 7124136938, '1989-10-13', 'douglas_fts@hotmail.com', 'Lages', 'Nova Uniao', 'Marcos Cunha', 'leve', 'roxa', 75, NULL, 1, 0),
(19, 'Égler Ricardo De Carvalho ', 'M', 6915282, 82743118091, '1982-07-17', 'egler_rs22@hotmail.com', 'Florianópolis ', 'Rv Jj', 'Paulo Standler', 'pesado', 'azul', 90, NULL, 1, 0),
(31, 'Fabio Nery Fernandes', 'M', 4284739, 983603960, '1987-03-05', 'fabiofernandesjj@gmail.com', 'Itajai', 'Nova União', 'Matheus Martins', 'leve', 'marrom', 76, NULL, 0, 0),
(21, 'Jonathas De Faria', 'M', 3936320, 477433952, '1982-05-24', 'jonathasdefaria@gmail.com', 'São Jose', 'Tonicao Team', 'Fabiano Crispim', 'leve', 'azul', 73, NULL, 0, 0),
(22, 'Ramon Cesar Goulart', 'M', 40649822, 4092383924, '1982-11-11', 'jonathas_faria@hotmail.com', 'São Jose', 'Tonicao Team', 'Fabiano Crispim', 'pluma', 'azul', 68, NULL, 1, 0),
(23, 'Rodrigo Da  Rosa', 'M', 35945559, 723565961, '1982-11-07', 'jonathas_faria@hotmail.com', 'São Jose', 'Tonicao Team', 'Fabiano Crispim', 'médio', 'azul', 80, NULL, 1, 0),
(24, 'Jhonatan Laffin', 'M', 5301315, 6532189901, '1988-10-31', 'jonathas_faria@hotmail.com', 'São Jose', 'Tonicao Team', 'Fabiano Crispim', 'meio pesado', 'branca', 84, NULL, 1, 0),
(25, 'Gustavo Lemke Dos Santos', 'M', 3273145, 97336084915, '2000-01-18', 'guscorseguros@hotmail.com', 'Palhoça', 'Orion', 'Mauricio Santos Conceição', 'pesadíssimo', 'verde', 77, NULL, 0, 0),
(26, 'Thiago Borba De Oliveira', 'M', 3980485, 369355903, '2001-07-26', 'guscorseguros@hotmail.com', 'Palhoça', 'Orion', 'Mauricio Santos Conceição', 'leve', 'laranja', 56, NULL, 0, 0),
(27, 'Fabiano Marcucci', 'M', 52357619, 5427449965, '1986-02-24', 'fabiano@globalbusiness.cnt.br', 'Florianópolis', 'Tonicão Team', 'Rafael Torres Vasques', 'super pesado', 'marrom', 99, NULL, 1, 0),
(28, 'Markus Vinicius Chaves', 'M', 4975601, 6360150921, '1989-01-12', 'jonathasdefaria@gmail.com', 'São Jose', 'Tonicao Team', 'Fabiano Crispim', 'médio', 'azul', 80, NULL, 1, 0),
(30, 'Jaciana De Almeida', 'F', 5782159, 8842871907, '1993-03-26', 'jacianadealmeida@hotmail.com', 'Chapecó', 'Elite Jiu-jitsu', 'Ronilson Silva', 'pesado', 'azul', 71, NULL, 1, 0),
(33, 'Anderson Ricardo Vieira Da Silva', 'M', 38017520, 3008075975, '1980-12-09', 'andersonrvsilva@hotmail.com', 'Florianópolis', 'Tonicão Team Jiu Jitsu', 'Fabiano Crispim', 'médio', 'branca', 82, NULL, 0, 0),
(35, 'Luiz Fernando Da Cunha', 'M', 6222272, 10879499982, '2000-07-07', 'luisfernandoo7@hotmail.com', 'Governador Celso Ramos', 'Coelho Jiu-jitsu/ Carlson Gracie Team', 'Isaky Anderson Coelho', 'leve', 'verde', 54, NULL, 1, 0),
(36, 'Rodrigo Franzoni', 'M', 5125764, 5039969988, '1984-09-13', 'rodrigozoni@hotmail.com', 'Fpolis', 'Rvjj Rio Vermelho Jiu Jitsu', 'Paulo Standler', 'pesado', 'roxa', 91, NULL, 1, 0),
(37, 'Thiago Luiz Da Silva', 'M', 5122091, 8244635959, '1991-05-28', 'thiagoluizdasilvaa@gmail.com', 'Florianópolis', 'Wado De La Riva', 'Fábio Suzuki / Carlos Rocha', 'médio', 'roxa', 80, NULL, 1, 0),
(38, 'Martinus Mauricio De Freitas', 'M', 4183895, 5415814906, '1986-03-21', 'martinus_freitas@hotmail.com', 'Florianopolis ', 'Wado De La Riva', 'Nada/rocha ', 'meio pesado', 'azul', 84, NULL, 1, 0),
(39, 'Thiago Roberto Pereira ', 'M', 4079531, 4356167902, '1986-03-20', 'thiagoroberto86@icloud.com', 'Brusque', 'Nova União ', 'Walter Telles', 'leve', 'branca', 70, NULL, 0, 0),
(40, 'Fernando Andrade', 'M', 38455765, 721178936, '1979-03-24', 'jonathas_faria@hotmail.com', 'São Jose', 'Tonicao Team', 'Fabiano Crispim', 'médio', 'roxa', 75, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletters`
--

CREATE TABLE IF NOT EXISTS `newsletters` (
  `email` varchar(120) NOT NULL,
  `data` date NOT NULL,
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `newsletters`
--

INSERT INTO `newsletters` (`email`, `data`) VALUES
('eduardoscoelho@hotmail.com', '2014-06-22'),
('mestreguedesjj@yahoo.com.br', '2014-07-14'),
('carlosacjj@msn.com', '2014-06-22'),
('carlosalvesbjj@hotmail.com', '2014-07-15'),
('dantesouza76@gmail.com', '2014-08-26'),
('julianosrja@yahoo.com.br', '2014-11-06'),
('gabikakau@gmail.com', '2015-03-02'),
('vilson.fajardo@gmail.com', '2015-05-04'),
('biellemes@bol.com.br', '2015-05-19'),
('regina-b@hotmail.com', '2015-09-24'),
('reginaldo-b@hotmail.com', '2015-09-24'),
('paulogabrielamarante@gmail.com', '2015-12-19'),
('pp5tnt@hotmail.com', '2015-12-19'),
('gordomaldito180@hotmail.com', '2016-02-21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `descricao` longtext NOT NULL,
  `data` date DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descricao`, `data`, `imagem`) VALUES
(12, 'Jiu-jitsu olímpico nas escolas 2015', '<p style="text-align: left;"> Boa tarde amigos do esporte, estamos aqui comunicando que estamos trabalhando forte na campanha <b style="text-align: left;">JIU JITSU OLÍMPICO NAS ESCOLAS EM 2015</b>, lembrando que esta campanha é de todos e graças a DEUS estamos tendo uma ótima procura e aceitação pelo público jovem e adulto. <br></p><p style="text-align: left;">Grandes nomes do nosso esporte já aderiram a campanha e estarão sendo entrevistados pela FJJOSC  em BREVE! <br></p><p style="text-align: left;">Aguardem novas noticias! Adquira sua camiseta da campanha!</p>', '2014-06-01', '12341234.jpg'),
(13, 'Parceria da FJJOSC com CIRCUITO OPEN 2014', 'Saudações comunidade do JIU JITSU BRASILEIRO, vimos por meio deste comunicar que foi feita uma das melhores parcerias do ano para nosso esporte em 2014. A COPA UK que será realizada em Blumenau dia 20 de julho, será homologada pela FEDERAÇÃO DO ESTADO DE SANTA CATARINA como "COPA SANTA CATARINA 2014" e será valida como evento OFICIAL do ESTADO DE SANTA CATARINA. <br><br>Nós da FJJOSC, estamos trabalhando para socializar e profissionalizar nosso esporte. A oficialização diante dos orgãos estaduais já estão sendo providenciadas, para que possamos dar a oportunidade a os nossos filiados a adquirirem a BOLSA ATLETA 2015 por esta entidade. <br><br>Portanto participe, as inscrições já estão aberta no site  <a href="http://www.circuitoopen.com.br/" rel="nofollow nofollow" target="_blank" style="color: rgb(59, 89, 152); cursor: pointer; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif;">www.circuitoopen.com.br</a> não fique de fora deste evento único oficializado como olímpico e padronizado para os competidores de alto rendimento. ', '2014-06-01', 'copauk.jpg'),
(14, 'A FJJOSC fala sobre o instrutor Marcos Vieira da equipe NOVA UNIÃO-SC', '  Marcos Vieira instrutor da NOVA UNIÃO dar aula em cinco escolas em Barra Velha-SC, chamado de oficineiro, o instrutor fala da importância do Jiu-Jitsu na sua vida e fala da importância do Jiu Jitsu na vida das crianças de seu projeto, sabemos que ele é pioneiro em Santa Catarina com a introdução do Jiu Jitsu nas escolas e ainda fala com exclusividade para nós da FJJOSC, todos os detalhes de seu trabalho social, tanto nas escolas onde abrange, mais de 400 crianças e também sobre seu projeto que mantem em sua casa. <br>Acompanhe na integra logo pelo Site!', '2014-06-01', '3563456456.jpg'),
(50, 'Catarinense de jiu-jitsu sucesso total em Chapecó', 'A cidade de chapecó foi palco de uma das melhores competições de Santa Catarina com tudo bem organizado e entregue diante do EDITAL, a organização está de parabens e promete logo colocar os resultados no site da FEDERAÇÃO para checagem geral. Osss parabens equipe ELITE JIU JITSU pela parceria ficamos honrado em realizar junto este grande evento em Chaepcó!!! ', '2014-09-25', 'fotodoginasiocatarinense.jpg'),
(49, 'Mais um grande Parceiro fechado para NACIONAL OPEN 2014 em Araranguá dia 16 de novembro', 'Agora você não poderá reclamar de fome no NACIONAL OPEN KIDS 2014, fechada a parceria com um dos melhores lanches da ILHA estará no evento o Cachorro quente do Carioca, conhecido e famoso pelos ótimos e saborosos cachorro quente que faz com produtos de qualidade e com higiene total. Venha conferir não fique de fora desta grande festa final do ano no JIU JITSU! <p>Osss</p>', '2014-09-04', '1409834833cahorroquente.jpg'),
(52, 'Caratão FESCJJ 2015', 'Ja esta sendo feito o CARTÃO DA FESCJJ para todo o sul do Brasil, estamos trabalhando para todos! Faça ja o seu e garanta sua participação no CIRCUITO PROFISSIONAL DE JIU JITSU 2015!', '2015-02-14', 'cartocarlos.jpg'),
(53, 'Circuito catarinense profissional de jiu-jitsu faz homenagem a grã-mestre Tonicão', ' Para nós do Circuito é uma honra homenagear uma pessoal tão querida que fez e faz pelo nosso esporte dando suporte, alegria, tecnica e muita oportunidade a muitos professores que hoje tem seu trabalho e seu sustento! Parabens Grã mestre, justa homenagem a quem foi pioneiro em nosso estado e quem distribuiu e difundiu o esporte jiu jitsu por aqui!!! <p>Osss </p>', '2015-03-14', 'bannercentraldimenomenor.jpg'),
(31, 'Transmissão ao vivo da 1ª Copa CBT de Jiu JItsu - Timbé do Sul 2014', 'Acompanhe a transmissão ao vivo da 1ª Copa CBT de Jiu Jitsu sendo realizada em Timbé do Sul - SC. A transmissão terá início as 09:00 horas, com um intervalo às 12:00 horas e previsão de término para às 17:00 horas. <p><br></p><p>Acompanhe também as novidades e outros detalhes na <a href="https://www.facebook.com/Fjjosc?fref=ts">fanpage da federação</a>.</p><p>A transmissão também pode ser assistida diretamente no Livestream <a href="http://www.livestream.com/copacbtjiujitsu">clicando aqui</a>.</p><p><br></p><p></p><p><iframe width="740" height="485" src="http://cdn.livestream.com/embed/copacbtjiujitsu?layout=4&amp;color=0xe7e7e7&amp;autoPlay=true&amp;mute=false&amp;iconColorOver=0x888888&amp;iconColor=0x777777&amp;allowchat=true&amp;height=385&amp;width=640" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe></p><p></p><p></p>', '2014-06-29', NULL),
(32, 'Comunicado a todas as academias do Brasil', 'Vimos por meio deste, aos professores que queiram se filiar gratuitamente na FJJOSC que apresente os documentos que a entidade solicita para cadastramento oficial. Algumas academias ja estão sendo cadastradas e estão oficializada por esta entidade a dar aulas em qualquer parte do território Nacional onde lhes garante o nosso ESTATUTO. filie-se venha fazer parte de uma nova era no BJJ. <p>Osss</p>', '2014-07-06', '1404657835logofederao2015.jpg'),
(33, 'Parceira fechada com o site ILUTAS para o BRASIL OPEN 2014', 'Foi firmada uma grande parceria com o site ILUTAS para ficar responsável por todas as chaves cronogram, checagem de atletas e pontuação final do BRASIL OPEN de JIU JITSU, tal como também o site vai fazer as inscrições online dentro de um prazo que a FEDERAÇÃO vai determinar...portanto professores e atletas procurem o site: www.ilutas.com.br para se cadastrar e fazer suas inscrições com profissionalismos e segurança...pois vamos disponibilizar grande estrutura e premiação para todos os atletas do Brasil. Aguardem mais noticias dia 20 de julho com edital completo. Osss ', '2014-07-06', 'ilutas.jpg'),
(34, 'Parceria e homologação do evento nacional Open Kids 2014', 'A FJJOSC tentando buscar parceria para fortalecer e melhorar o NACIONAL OPEN KIDS 2014, trás a todos o mais novo parceiro do Evento a instituição "IKS BRASIL", onde vamos viabilizar a homologação do nosso evento para ser oficial no Brasil e ter o suporte técnico e jurídico para que todos os atletas tenham o reconhecido titulo de CAMPEÃO BRASILEIRO BJJ 2014 por uma entidade oficial. Portanto se você tem um projeto social e quer ver seu aluno campeão Brasileiro chegou a sua vez venha participar do maior evento social do Mundo! <p>Osss  informações sobre a instituição VC PODE ACESSAR:  http://www.iksma.org/</p>', '2014-07-06', 'iks.jpg'),
(36, 'Nota importante para atletas e professores', 'A FEDERAÇÃO DO ESTADO DE SANTA CATARINA DE JIU JITSU vem através deste comunicado, informar que a filiação é totalmente gratuita para este ano. Sendo que, nossa meta e realizar um cadastro atualizado de atletas para trabalharmos com uma propósta para todos os que possam intereçar e que de alguma forma gostariam de participar de nossos eventos. Para aquisição do cartão da FESCJJ será cobrado uma taxa de R$25,00 onde o atleta pode retirar nos eventos da ENTIDADE! Agradeçemos desde ja a colaboração e a grande aceitação de todos! <p>Att,Direção FESCJJ</p>', '2014-08-19', 'novalogofescjj.jpg'),
(38, 'Campeonato catarinense de jiu-jitsu da FESCJJ será em setembro na cidade de Chapecó', 'Bom dia a todos, é com grande prazer que venho através deste comunicar o CAMPEONATO CATARINENSE 2014, onde será realizado em Chapecó-SC no dia 21 de Setembro no Ginásio Ivo Silveira, Centro. Este campeonato vai marcar uma nova era no jiu jitsu de Santa Catarina pois, terá uma grande organização e premiação em Dinheiro. A FESCJJ demorou para anunciar e promover o campeonato catarinense 2014, devido ao congestionamento de campeonatos no Estado. Porem, iremos fazer sem dúvida o melhor e maior evento no Oeste do Estado e todas as equipes estão convidadas a participar com seus atletas. Grandes nomes da CBJJ/ IBJJF estarão fazendo parte da ORGANIZAÇÃO DO CATARINENSE DANDO GARANTIA E CREDIBILIDADE AO CAMPEONATO NÃO FIQUE DE FORA VENHA PARA CHAPECÓ! OSSS ', '2014-08-19', 'cartazcatarinesesite.jpg'),
(39, 'Nacional Open kids deJiu-jitsu e no-gi', 'Bom dia a todos, é com grande prazer que venho através deste comunicar o NACIONAL OPEN KIDS 2014, será realizado em Araranguá-SC no dia 23 de Novembro de 2014, no Ginásio Padre Ezio Julli; Rua Amaro Jose Pereira, 998 Centro. Este campeonato vai marcar uma nova era no jiu jitsu para crianças e adolescentes de todo o Brasil pois, terá uma grande organização e premiação em Dinheiro. A FESCJJ demorou para anunciar e promover seus campeonatos em Santa Catarina, devido ao cogestionamento de campeonatos no Estado, porem iremos fazer sem duvida um dos melhores evento no Sul do Brasil. Todas as equipes estão convidadas a participar com seus atletas não precisa de FILIAÇÃO basta estar filiado a uma entidade no ano corrente! Grandes nomes da ARBITRAGEM DA CBJJ/ IBJJF estarão fazendo parte da  ORGAIZAÇÃO DANDO ASSIM GARANTIAS E CREDIBILIDADE AO CAMPEONATO MAIS IMPORTANTE PARA CRIANÇAS EM 2014! NÃO FIQUE DE FORA VENHA PARA ARARANGUÁ EM NOVEMBRO! <p>OSSS</p>', '2014-08-19', 'nacionalopen2014site.jpg'),
(40, 'Mais um parceiro forte para NACIONAL OPEN KIDS 2014!', 'A FEDERAÇÃO estará fechando alguns brindes e kimonos para as categorias infantis para o NACIONAL OPEN KIDS 2014  e temos o prazer de anunciar mais um grande parceiro para este PROJETO que vai revolucionar o nosso jiu jitsu aqui no Sul do País. Obrigado QUIRON KIMONOS pelo suporte cedido a FEDERAÇÃO e agora para o CAMPEONATO NACIONAL OPEN KIDS 2014! Osss', '2014-08-26', 'quironkimonos.jpg'),
(41, 'Premiação nos absolutos confirmadíssima para os atletas!!!', 'O CATARINENSE DE JIU JITSU VAI DISPONIBILIZAR UMA GRANDE PREMIAÇÃO AOS COMPETIDORES QUE IREM A CHAPECÓ, PARTICIPEM! ESTAMOS TENTANDO MELHORAR AINDA MAIS ESTA PREMIAÇÃO TODAS AS INFORMAÇÕES NO SITE DE APOIO! www.ilutas.com.br ', '2014-08-28', 'cartascatarinenseabsolutos.jpg'),
(51, 'Nacional Open Kids jiu-jitsu e no-gi', 'O campeonato NACIONAL OPEN BRASIL KIDS foi realizado em Araranguá-SC, com todos os requisitos pré determinados e seguidos. Sucesso de publico, atletas e parceiros aos quais presenciaram uma forma diferente de realizar campeonato de jiu jitsu. A busca da FESCJJ não é direcionar e nem menosprezar ninguem apenas estamos fazendo um trabalho diferente e isso encomoda muita gente que não quer a evolução do nosso esporte no Estado. Estamos começando um novo trabalho mais forte e de direção única! Parabens a todos os campeões e em breve todos os campeões individual estaram sendo postados aqui. Forte abraço até o próximo campeonato. Osss', '2014-11-28', 'logofescjj2015atualizado.jpg'),
(24, 'Entrevista com o mestre Carlos Batista presidente da FJJOSC', '<p class="MsoListParagraphCxSpFirst" style="margin-left: 0cm; font-size: 13.63636302947998px;"><b style="margin-left: 0cm;">1. Bom Dia Professor Carlos, conte seu inicio no esporte e como chegou no Jiu-Jitsu.</b></p><p class="MsoListParagraphCxSpFirst" style="margin-left: 0cm; font-size: 13.63636302947998px;">Bom dia! Eu sempre gostei de artes marciais, sempre queria lutar mas como eu era de família simples, sem condições financeiras, nunca pude treinar em academia de boa e de verdade. Então montei minha própria academia no quintal de minha casa em 1989.Ainda menino,com 13 anos de idade,comecei fazendo Kung Fu e Boxe, mas também aprendi varias outras modalidades por revistas e livros que colecionava na época,e ainda coleciono. De lá para cá, fui desenvolvendo alguns métodos para minha defesa pessoal, baseados em livros e revistas de artes marciais, ai não parei mais! Em 1992 ,conheci o Jiu-Jitsu por acaso ,fui jogar bola em um campinho perto de casa,chegando lá vi o Mestrão Cássio Cardoso treinando em cima de uma lona. Não joguei mais bola este dia! [RISOS] </p><p class="MsoListParagraphCxSpFirst" style="margin-left: 0cm; font-size: 13.63636302947998px;">Fiquei impressionado com as técnicas que ele ali usava,resolvi brincar com outros garotos ali mesmo ,e acabei me apaixonando pelo esporte, e eu que era fanático por Bruce Lee, acabei deixando de lado alguns conceitos de artes marciais e aderi ao Jiu-Jitsu, Ao qual me encontro até hoje graças a DEUS.</p><p class="MsoListParagraphCxSpFirst" style="margin-left: 0cm; font-size: 13.63636302947998px;"><br></p><p class="MsoListParagraphCxSpFirst" style="margin-left: 0cm; font-size: 13.63636302947998px;"><span style="margin-left: 0cm;"><b style="margin-left: 0cm;">2. C</b></span><b style="margin-left: 0cm;">omo foi sua trajetória dentro do Jiu-Jitsu e com quem já treinou?</b></p><p class="MsoListParagraphCxSpFirst" style="margin-left: 0cm; font-size: 13.63636302947998px;">O meu começo no Jiu-Jitsu foi através de treinos diários com alguns amigos,que por volta de 1998 chegou à cidade de Garopaba por um faixa azul ,aluno do Eduardo Ommati, e continuei treinando, um ano depois peguei a azul com o Mestre João Evangelista “Junior Macgayver”, aluno direto de Crolin Gracie,comecei a treinar junto ao Crolin ,em Florianópolis, na Academia Wadokan e aos finais de semana na manhã e na tarde treinava com o Junior nos Ingleses. Começo de 2001, já com a roxa, abri minha própria filial em Garopaba com o aval do meu mestre, Junior Macgayver.Treinava e rolava com bastante turistas e visitantes, que vinham para Garopaba passar o verão, como Zé Mario, Cássio Cardoso, Peixotinho, Capone ,Paradeda, entre outros que vinham passar as férias e treinavam em uma filial da Sul Jiu-Jitsu, na época em Garopaba, comandada pelo Índio. Em 2002 ,peguei a Marrom pela FJJOSC ,assinada pelo mestre Jorge Medeiros, e pela FJJC que tinha o presidente como Crolin Gracie. Passei a treinar também com João Morais em 2003 ,na sua academia ,e ajudava nos treinos de sua equipe. Por falta de horários, condições financeiras e tempo, comecei a treinar sozinho e dar aula para alguns alunos meus em Garopaba.Em um campeonato que organizei em Garopaba, junto ao João Morais, já sozinho, conheci o Mestre Mauricio Mello, ao qual me graduou pela Gracie Barra a faixa preta em janeiro de 2004 por tempo e currículo.Ali fiquei até 2008 fazendo parte da equipe. Como eu tinha que ir treinar com o Maurício em Blumenau,  não tinha tempo por causa do trabalho e fiquei meio que a desejar em não visita-lo com frequência. Acabei me desligando um pouco e rompendo minha ligação com o Mauricio por falta de visitas e treino com ele, mas agradeço muito a força que ele me deu e tenho amizade com ele até hoje. Já com 4 anos de faixa preta ,comprovados, lutei vários eventos e fui fazendo meu trabalho sozinho ao qual tive muitas lutas dentro e fora dos tatames.</p><p class="MsoListParagraphCxSpFirst" style="margin-left: 0cm; font-size: 13.63636302947998px;"><br></p><p class="MsoListParagraphCxSpFirst" style="margin-left: 0cm; font-size: 13.63636302947998px;"><b style="margin-left: 0cm;">3. Professor  Carlos, fale um pouco de você como Atleta e suas conquistas dentro do esporte Jiu Jitsu.</b><br></p><p class="MsoListParagraphCxSpFirst" style="margin-left: 0cm; font-size: 13.63636302947998px;">Eu comecei a lutar de verdade em 1998 uma copa que teve em Floripa e não fui muito bem não perdi na primeira luta eu já tinha um nível bom e perdi para o nervosismo kkk ai em 1999 lutei a copa sul catarinense organizada pelo meu amigo Glauco Machado em Tubarão e me sagrei campeão depois não parei mais fui campeão catarinense, campeão copa shopping criciúma, copa são José e outros eventos...tudo na branca. Depois fui 3 vezes campeão catarinense, campeão sul brasileiro, copa Floripa os melhores atletas da região, copa Crolin Gracie entre outras...Bom se eu colocar todos os títulos vai faltar folha kkkk brincadeira bom em fim eu fui 15 vezes campeão catarinense FJJC e FJJOSC e LIGA CATARINENSE  juntos, 7 vezes campeão SUL BRASILEIRO (CBJJ, CBJJE e CBJJO) juntos, Campeão Gaúcho 2 vezes, Campeão de varias copa OPEN, campeão DESAFIO FAIXA PRETA em 2008, Campeão liga catarinense 2011, Campeão blufighter 2001...entre outros. Já em 2013 VICE-CAMPEÃO SELETIVA ABU DABHI EM GRAMADO NO ABSOLUTO PRETA SENIOR e CAMPEÃO MUNDIAL FAIXA PRETA PELA Confederação Brasileira de Lutas Profissionais, e outros títulos OPEN. Devo ter aproximadamente umas 100 lutas em meu cartel, e ainda tem gente que diz que eu nunca lutei!. Já ministrei vários seminários e aulas pelo Brasil, Argentina e Uruguai.<o:p></o:p></p><p class="MsoListParagraphCxSpFirst" style="margin-left: 0cm; font-size: 13.63636302947998px;"><br></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 0cm; font-size: 13.63636302947998px;"><b style="margin-left: 0cm;">4. Sua equipe como vc criou a “CBT JIU JITSU/ MMA” e seu projeto social e quais intenção com a equipe no cenário nacional e internacional?</b> </p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 0cm; font-size: 13.63636302947998px;">A equipe CBT eu não criei e sim já nasceu comigo kkk estou levando meu nome agora a sério por vários motivos e um deles foi no ano passado onde, eu estava associado à outra equipe de nome internacional ao qual buscava o fortalecimento de meu nome no cenário internacional e acabei ficando mais fraco devido a incomodar algumas pessoas desordeiras e de má índole sendo que não fazem mais parte de meu trabalho e equipe. O meu projeto social é meu sonho virando realidade, pois já tive vários resultados positivos dentro e fora dos tatames.  A verdade e que sempre levo a sério até jogo de peteca kkk e isso incômoda muita gente, não sei por que isso incomoda alguns... mas, para este ano ninguém vai falar ou incomodar minha equipe ou meu nome neste quesito eu posso garantir. Quero priorizar a evolução técnica da minha equipe e possivelmente lançar até 2015 o nome em âmbito nacional e para isso temos que trabalhar e muito. O foco este ano, são os campeonatos da LIGA OPEN, FJJC e DA nossa FEDERAÇÃO e para isso temos que trabalhar e muito para alcançar o nosso reconhecimento e espaço dentro e fora dos tatames. Tenho trabalhado exaustivamente em meu projeto social, e os frutos já serão visto ainda este ano no Mundial da CBJJE em São Paulo, se DEUS quiser quero leva-los para representar Santa Catarina no Mundial e tentar conseguir bons resultados com eles.<o:p></o:p></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 0cm; font-size: 13.63636302947998px;"><br></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 0cm; font-size: 13.63636302947998px;"><b>5. Professor, fale um pouco sobre a Federação Olímpica e como você chegou à presidência?</b></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 0cm; font-size: 13.63636302947998px;">Bom a Federação chegou a minha vida numa hora bem legal, pois estava trabalhando para expandir meus eventos de Jiu Jitsu que eram os melhores daquele tempo atraia muitos atletas de todo o Brasil e em 2008 em uma reunião junto com meu sócio e acabei conhecendo o Sr. Jorge Medeiros ao qual era o presidente na época e me sugeriu para lançar minha candidatura à presidência da FEDERAÇÃO, pois ele ia deixar o cargo e foi ai então que aceitei fui eleito e tomando posse dia 20 de outubro de 2008 e onde me encontro no segundo mandato até agora. A federação é uma entidade sem fins lucrativos que veio para montar eventos oficiais, fiscalizar e dar continuidade as CONFEDERAÇÕES NACIONAIS em registrar e apoiar os atletas de Santa Catarina.</p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 0cm; font-size: 13.63636302947998px;"><br></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 0cm; font-size: 13.63636302947998px;"><b style="margin-left: 0cm;">6. Professor, você sabe que tem outra FEDERAÇÃO em Santa Catarina e é mais antiga que a OLÍMPICA o que você tem a falar deles, e tem alguma rivalidade entre vocês?</b> </p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 0cm; font-size: 13.63636302947998px;">Não tem nada haver, pelo contrario eu tenho admiração e respeito pelo Sr. Presidente da FJJC pois ele esta fazendo um ótimo trabalho a frente daquela entidade e admiro isso, pois ele tem se esforçado a levar o JIU JITSU aqui no Estado a um patamar bem elevado e espero contribuir de alguma forma para isso. Tanto é que vou colocar meus alunos e eu vou lutar lá também lá FJJC. Espero fazer meu trabalho para expandir o JIU JITSU OLÍMPICO aqui no Estado de forma coerente e de fácil acessibilidade a os atletas sem prejudicar ou passar por cima de ninguém, cada um tem seu espaço e seus diretórios.<o:p></o:p></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 0cm; font-size: 13.63636302947998px;"><br></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 0cm; font-size: 13.63636302947998px;"><b>7. O que a FEDERAÇÃO OLÍMPICA esta fazendo em 2014 e espera para 2015? </b></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 0cm; font-size: 13.63636302947998px;">Este ano vamos priorizar trabalhos internos tais como homologação de decretos estaduais e federal para atribuir e consolidar futuros benefícios aos atletas catarinenses. Estamos trabalhando para a evolução do JIU JITSU em um todo e não só por nossa equipe ou grupo tal e sim, para todos os professores e atletas. A nossa proposta este ano e corrigir alguns erros do passado e trabalhar com seriedade e profissionalismo para que possamos dar continuidade e segurança a nossos filiados. Firmamos uma parceria agora com o CIRCUITO OPEN para legalizar um evento e dar entrada a registros de atletas para possíveis bolsas em 2015. Para 2015 vamos trabalhar para por o JIU JITSU OLÍMPICO nas redes escolares do Estado, e viabilizar uma grande oportunidade de mostrar o nosso jiu jitsu a varias crianças que ainda não conhecem ou descriminam nosso esporte por falta de oportunidade ou cultura.</p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 0cm; font-size: 13.63636302947998px;"><br></p><p class="MsoNormal" style="font-size: 13.63636302947998px;"><b>8. Por que a parceria com o CIRCUITO OPEN este ano?</b><o:p></o:p></p><p class="MsoListParagraph" style="margin-left: 0cm; font-size: 13.63636302947998px;">Bom, eu conheço o professor Monte de longa data e sei do seu caráter e trabalho diante da LIGA e do CIRCUITO, conversarmos um pouco pessoalmente e por telefone e acertamos para este evento uma parceria para oficializar um evento pela FJJOSC e que dependendo deste evento poderemos ter outras parcerias futuras fortalecendo ainda mais o JIU JITSU aqui no Estado, mas primeiro vamos viabilizar este para podermos ver como vai ser depois.<o:p></o:p></p><p class="MsoListParagraph" style="margin-left: 0cm; font-size: 13.63636302947998px;"><br></p><p class="MsoNormal" style="font-size: 13.63636302947998px;"><b>9. Professor, dê suas considerações finais. Fiique a vontade.</b><o:p></o:p></p><p class="MsoListParagraph" style="margin-left: 0cm; font-size: 13.63636302947998px;">Primeiramente quero agradecer a DEUS por tudo e por todos os amigos que tem me dado. Agradecer a minha esposa por esta do meu lado sempre, a meus alunos, aos meus amigos de verdade que estão juntos comigo e dizer que vamos ter muito trabalho ainda pela frente, mas que vamos ter muitas surpresas boas para 2015 pela FEDERAÇÃO OLÍMPICA. </p><p class="MsoListParagraph" style="margin-left: 0cm; font-size: 13.63636302947998px;">Fiquem com DEUS! </p><p class="MsoListParagraph" style="margin-left: 0cm; font-size: 13.63636302947998px;">Osss</p><p class="MsoListParagraph" style="margin-left:0cm;mso-add-space:auto;text-align:justify"><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><o:p> </o:p></span></p>', '2014-06-14', 'foto.jpg'),
(26, 'Edital de convocação N° 006/ 2014', 'O Sr. Presidente da Federação de Jiu Jitsu Olímpico do Estado de Santa Catarina, localizada na Rua Durval Oliveira Souza, n° 60, Centro, Balneário Arroio do Silva-SC, convoca seus membros associados para comparecerem a ASSEMBLÉIA GERAL EXTRAORDINÁRIA a realizar-se dia 30 de junho de 2014, as 19:00hs, tendo como local o endereço acima mencionado, a ser instalada em primeira convocação com a presença de no mínimo 1/ 5 (um quinto) dos membros filiados, e 30 (trinta) minutos após, se não for conseguido quorum, em segunda convocação com qualquer numero de membros presentes, para deliberar sobre a seguinte;<br>Ordem do Dia:<p></p><ul><li>Alteração do Estatuto da Federação de Jiu Jitsu Olímpico do Estado de Santa Catarina em seus Art. 6°, Art. 20° Paragrafo Primeiro e Art. 21°, dando cumprimento a Lei Federal 9.615/ 98; <br></li><li>Atualização e alteração de membros da diretoria;<br></li><li>Atualização e alterações de membros do conselho Fiscal;<br></li><li>Regulamentar e fixar a data do Campeonato Catarinense de Jiu Jitsu Olímpico 2014;<br></li><li>Deliberar e tomar providências sobre, a campanha Jiu Jitsu nas escolas em 2015.<br></li></ul><p><br></p><p>Sem mais torna-se publica esta convocação.</p><p></p><p><br></p><p>Balneário Arroio do Silva, 15 de junho de 2014.</p><p><br></p><p>Presidente Carlos Batista. </p><p></p><p></p><p></p>', '2014-06-15', 'logofederao2015.jpg'),
(27, 'Projeto faixa preta de Jesus', 'Iniciativas como esta que estamos mostrando, e que faz a diferença do nosso esporte crescer e querer realmente mudar algo no Brasil não precisamos de Milhões em investimento e sim do respeito e da valorização de verdade dos órgãos públicos e da garantia das crianças carentes no esporte que gostam de fazer. Este projeto tem o o apoio da FJJOSC e acreditamos com nossa parte e ampla divulgação em nosso site podemos levar e ajudar a divulgar ainda mais no auxilio de parceiros que queiram ajudar de verdade o nosso JIU JITSU, e principalmente as crianças que gostam de lutar pela vida.... informações no site: www.faixapretadejesus.com.br  acompanhe e faça sua parte!!!', '2014-06-18', 'jiujitsuxadres.jpg'),
(29, 'Copa CBT de jiu-jitsu 2014 inscrições abertas até quarta-feira', 'A <b>copa CBT de JIU JITSU OLÍMPICO 2014</b>, será um evento apoiado pela <b>FJJO-SC</b> para que tenhamos um começo de trabalho e fortalecer contatos com os professores da região. A intenção e formar um grupo de professores e alunos onde discutirão vários assuntos para engrandecimento do nosso esporte aqui no sul do País. Também será colocado em pauta uma matéria importante para evolução e introdução do nosso esporte nas escolas de todo o Brasil onde vamos começar a trabalhar forte e dar prioridade aqui em Santa Catarina. Contamos com sua presença e de todos os PROFESSORES DO BEM. Traga sua equipe! O evento é OPEN e tem limites de inscrições! Já estão confirmados grandes nomes do Sul do Pais. Listagem de nomes completo <b>Quarta feira</b>. Aguardem e acompanhem aqui no Site! O evento vai ser social para projetos que não tem condições de lutar em eventos de inscrições caras. Nossa meta este ano e trabalhar para dar oportunidade a todos com grande estrutura e organização! A NOVA FEDERAÇÃO VAI TER ESTE COMPROMISSO COM VOCÊS!!! <p>Osss</p>', '2014-06-22', 'logodefinidacbt2015.jpg'),
(30, 'Entrevista com Instrutor Marcos Vieira', '<p><b>1 - Boa tarde instrutor Marcos, fale um pouco de sua história no Jiu Jitsu.</b></p><p>R:Em 2009 estava decidido a mudar de vida, deixar os maus hábitos e ter uma vida mais saudável, como já havia praticado algumas artes marciais na infância resolvi voltar a praticar. Procurei uma academia na cidade e alguns amigos me falaram de aulas de jiu-jitus na academia das barra, foi então que conheci o prof. André Oliveira e desde então nunca mais parei, ele virou meu amigo e a arte suave meu estilo de vida.</p><p><br></p><p><b>2 - O que o Jiu Jitsu trouxe de benefícios para sua vida em um modo geral?</b></p><p>R:Minha vida mudou cem por cento, desde a questão da saúde até os hábitos de alimentação.</p><p><br></p><p><b>3 - Com quem você treina? Qual equipe você pertence? Com quem treinou ou treina?</b></p><p>R:Treino com o prof. André Oliveira desde a faixa branca nunca mudei de equipe ou professor, sempre fui Nova União.</p><p><br></p><p><b>4 - Como funciona suas aulas e onde você dar aulas?</b></p><p>R: Dou aulas em cinco escolas municipais, na Academia Top Fitness e em minha casa no meu projeto social para crianças carentes. Lembrando que minhas aulas são supervisionadas pelo meu Professor pois ainda sou faixa roxa.</p><p><br></p><p><b>5 - Fale do seu projeto Social implantado na Cidade de Barra Velha?</b>   </p><p>R:Esse projeto que desenvolvo em minha casa foi pensando em mim quando criança, minha família não tinha condições de pagar uma academia pra eu treina,r só fui começar no mundo das artes marciais quando comecei a trabalhar aos quatorze anos. Por isso hoje me sinto na obrigação de ajudar essas crianças que tem o mesmo sonho que eu tinha quando criança assistindo os filmes do Bruce Lee...rs</p><p><br></p><p><b>6 - Você esta dando aula nas escolas de Barra Velha, como você conseguiu implantar este projeto e com a ajuda de quem?</b></p><p>R:Sim, comecei esse ano, como meu trabalho com as crianças já era conhecido na região, fui procurado pelas diretoras das escola e questionado se havia possibilidade de eu estar levando esse trabalho também para as escolas do município.</p><p><br></p><p><b>7 - Você participa de competições? Porque?</b></p><p>R: sim, com certeza! Acho importantíssimo na evolução da criança as competições, por isso devo dar o exemplo. O jiu-jitsu que eu ensino visa a competição, como são crianças evito ensinar golpes de finalização e enfatizo o jiu-jitsu de competição ensinado macetes pra pontuar sempre.</p><p><br></p><p> <b>8 - O que você tem a falar da FEDERAÇÃO OLÍMPICA? </b></p><p>R: Acho que todo órgão que procura divulgar o nosso esporte é muito bem vindo, devemos nos unir pra colocar de vez o Jiu-jitsu no calendário escolar, inclusive com competições interescolares, por exemplo a que iremos realizar esse ano em Barra Velha.</p><p><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><b style="margin-bottom: 0.0001pt; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">9 - Oque você acha do projeto nas escolas ser implantado no Estado de Santa Catarina?</b> <font color="#444444" style="margin-bottom: 0.0001pt; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><span style="margin-bottom: 0.0001pt; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><o:p style="margin-bottom: 0.0001pt; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"></o:p></span></font></p><p></p><p>R: Esse projeto já existe desde 2007 a nível nacional, criado pelo MEC, desde então ele está disponível pra todas as prefeituras do país, seria bom se o governo do estado também abraçasse a ideia e apoiasse mais o Jiu-jitsu no estado.</p><p><br></p><p><b>10 - Professor de suas considerações finais para o nosso público.</b></p><p>R:Estamos dando um pequeno passo aqui em nossa cidade, espero que em breve o Jiu-jitsu posso ser visto com outros olhos pela sociedade, que possamos juntos levar esse esporte ao maior número de pessoas, começando pelas crianças, criando esse hábito saudável nelas, desenvolvendo o autocontrole, equilíbrio, companheirismo, coordenação motora e espírito esportivo, tudo isso gera uma enorme qualidade de vida para as crianças.</p>', '2014-06-23', '553029_373293989467405_1710118674_n.jpg'),
(54, '2° ETAPA DO CATARINENSE DE JIU JITSU PROFISSIONAL 2015', '  Confirmado! Segunda Etapa do Catarinense de Jiu Jitsu Profissional 2015, será realizada na belissima cidade de Barra Velha-SC, litoral norte, no dia 24 de maio de 2015 e contará com uma premiação de 10 MIL REAIS EM PRÊMIOS que serão distribuidos em varias categorias absolutos de kimono e sem kimono! Além do campeonato ser oficial e valer ponto para o RANKING ESTADUAL, você irá lutar a única "COPA ESTADUAL DE SUBMISSION PROFISSIONAL 2015" Esta copa tem a honra e o prazer de resgatar a credibilidade e também formalizar a modalidade Submission Profissional, distribuindo grande prêmiação e esturtura para os competidores profissionais de Santa Catarina em 2015! Aguardamos sua FILIAÇÃO e INSCRIÇÃO através do Site: <span style="color:rgb(0,0,255);"><b style="color:rgb(0,0,255);"><u style="color:rgb(0,0,255);">www.fescjj.com.br</u></b></span>  É a FESCJJ trabalhando para oficializar e profissionalizar nosso esporte em Santa Catarina!  ', '2015-04-19', 'segundaetapacatarinense2015site2015.jpg'),
(55, 'INSCRIÇÕES PARA 2° ETAPA DO CATARINENSE JÁ ESTÃO LIBERADAS!!!', 'Atenção Professores e Atletas as inscrições ja estão liberadas no site da FEDERAÇÃO basta entra no link <a href="http://www.fescjj.com.br/inscricoes">http://www.fescjj.com.br/inscricoes</a> e fazer sua inscrição online!!! ATENÇÃO TODOS!!! Estamos trabalhando para facilitar e desenvolver um sistema facil de inscrição, portanto ajudem colaborando com os dados pessoais! Apos fazer a inscrição você poderá mandar um e-mail para: inscricaofescjj@gmail.com e confirme e garanta a  sua inscrição online! Após sua inscrição online no site, responderemos com uma mensagem automática do nosso e-mail!<p><br></p><p>Boa sorte!</p><p>As inscrições vão até dia 20 de maio e não será prorrogada!</p>', '2015-05-03', 'bannersitefescjj.jpg'),
(56, 'SULBRASILEIRO DE JIU JITSU PROFISSIONAL 2015', 'Atenção atletas do SUL DO BRASIL o SULBRASILEIRO DE JIU JITSU esta se aproximando e juntos estamos trazendo grandes novidades fique atento, vamos disponibilizar uma grande estrutura e boa premiação!!! Todas as informações no site ILUTAS.COM.BR ', '2015-11-11', 'sulbrasil2.jpg'),
(57, 'Ranking POR EQUIPE ADULTO ATUALIZADO!!!', 'ATUALIZAÇÃO DO RANKING CATARINENSE 2015, lembrando que a ultima ETAPA será dia 13 de dezembro no Balneário Arroio do Silva e será valendo ponto duplo para o Ranking Profissional 2015.', '2015-11-28', 'rankingcatarinenseprofissionaldejiujitsu2015adulto.jpg'),
(58, 'ATUALIZAÇÃO RANKING KIDS PRO 2015!!!', 'ATUALIZAÇÃO DO RANKING CATARINENSE 2015, lembrando que a ultima ETAPA será dia 13 de dezembro no Balneário Arroio do Silva e será valendo ponto duplo para o Ranking Profissional 2015.', '2015-11-28', 'pontuaoporequipekidsgeraljpg.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'aaa', '0539c3f4aadf498b51a5f0ceb8370e1f');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_frame` text NOT NULL,
  `dt_cadastro` date DEFAULT NULL,
  `descricao` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `cod_frame`, `dt_cadastro`, `descricao`) VALUES
(1, '<iframe width="420" height="315" src="//www.youtube.com/embed/4OlQHhCxGsE?rel=0" frameborder="0" allowfullscreen></iframe>', '2014-06-11', 'A história do Jiu Jitsu'),
(6, '<iframe width="420" height="315" src="//www.youtube.com/embed/DGxl4E0nJCg" frameborder="0" allowfullscreen></iframe>', '2014-07-11', 'Projeto Social Balneário Arroio do Silva CB TEAM BJJ'),
(5, '<iframe width="560" height="315" src="//www.youtube.com/embed/0iR2GFlC1ys" frameborder="0" allowfullscreen></iframe> ', '2014-07-07', 'Projeto Gaditas Jiu Jitsu'),
(7, '<iframe width="300" height="315" src="//www.youtube.com/embed/9GENmUJ0JSo" frameborder="0" allowfullscreen></iframe>', '2014-10-01', 'Chama para o NACIONAL OPEN KIDS 2014');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
