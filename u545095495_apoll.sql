
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 17/11/2016 às 21:54:40
-- Versão do Servidor: 10.0.20-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u545095495_apoll`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) CHARACTER SET latin1 NOT NULL,
  `email` varchar(300) CHARACTER SET latin1 NOT NULL,
  `comentario` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=44 ;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `email`, `comentario`) VALUES
(42, 'ApolloMusic', 'tcc.webradio2016@gmail.com', 'Qualquer duvida ou dica, para o site, mande uma mensagem.'),
(43, 'marcos', 'markim_tdb@hotmail.com', 'site ficou show leks.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `confc`
--

CREATE TABLE IF NOT EXISTS `confc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8_bin NOT NULL,
  `email` varchar(300) COLLATE utf8_bin NOT NULL,
  `comentario` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=55 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `confn`
--

CREATE TABLE IF NOT EXISTS `confn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) CHARACTER SET latin1 NOT NULL,
  `texto` text CHARACTER SET latin1 NOT NULL,
  `imagem` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=38 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login` varchar(32) COLLATE utf8_bin NOT NULL,
  `senha` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`login`, `senha`) VALUES
('Etec', 'IdioZucchi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) CHARACTER SET latin1 NOT NULL,
  `texto` text CHARACTER SET latin1 NOT NULL,
  `imagem` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=63 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `imagem`) VALUES
(57, 'PlayStation VR impressiona com bons jogos', 'Como aparelho, o PlayStation VR impressiona logo de princípio. Desde que sai da caixa ele impõe respeito, com design robusto, apesar de não ser tão grande quanto se imagina pelas fotos. Na verdade, é possível segurá-lo sem problemas com apenas uma mão, já que ele não é nem mesmo tão pesado assim.\r\nCom dimensões que se encaixam quase que em qualquer tipo de cabeça, de menores a maiores, o PS VR tem bons pontos ajustáveis, seja na frente ou atrás, além de interior acolchoado, que proporciona algum conforto aos usuários. Não é incomodo utilizá-lo mesmo para quem usa óculos de grau tradicionais.', 'fotos/n.jpg'),
(58, 'Games em Ofertas da Semana', 'A Xbox Live brasileira tem poucas ofertas nesta semana, mas com descontos para alguns títulos de destaque, como Dirt 3, Dirt Showdown, Devil May Cry 4, Resident Evil Revelations e mais no Xbox One e Xbox 360. Há, ainda, os títulos grátis da linha Games With Gold, que devem rotacionar a partir de 16 de novembro.\r\nA PlayStation Store comemora dez anos, e são os fãs que ganham presentes. Diversos títulos estão em promoção para PS3, PS4 e PS Vita.\r\nO Steam, como de costume, vem com boas promoções para jogos indie, como o elogiado Broforce, além de Trine 2, Deponia, Memoria e Dead Age.\r\nA loja online para jogos de PC, Nuuvem, oferece pacotes interessantes com preços bem baixos, como o pacote LEGO, que vem com seis jogos, entre eles LEGO Batman, Harry Potter e LEGO Movie.\r\nA GOG, outra loja online de jogos para PC, começou sua promoção de outuno, com dezenas de games em oferta, entre eles os elogiados Undertale e Stardew Valley, além de The Witcher 3 em edição completa.', 'fotos/n.jpg'),
(59, 'Conheça Mouses Gamers que Podem Valer a Pena comprar', 'O mouse é considerado um dos acessórios mais importantes para o jogador por oferecer ferramentas avançadas e práticas que deixam você na frente dos outros jogadores. Confira abaixo cinco mouses gamers e comece a se preparar para os descontos da Black Friday. Com preços a partir de R$ 180, a lista traz modelos de estilos variados.\r\n\r\nRazer Naga Hex V2,  preço de R$ 560 a R$738, 16.000 dpi e com a possibilidade de escolher entre 16,8 milhões de cores, do leds.\r\n\r\nMadcatz R.A.T.9 Wireless, R$ 945, 6.400 dpi, wireless de 2,4 GHz e tempo de resposta de até 1 ms.\r\n\r\nCorsair Scimitar RGB, R$ 409, 12.000 dpi, o periférico conta com iluminação de várias cores e tempo de resposta de 1 ms.\r\n\r\nLogitech G402 Imperion Fury, entre R$ 220 e R$ 229, 4.000 dpi, além de oito botões que podem ser configurados pelo jogador e uma aceleração máxima de 16 G.\r\n\r\nThermaltake Saphira, apartir de  R$185, tem sensor óptico ajustável de 3.500 dpi de sensibilidade e cinco botões para configurar. Com USB banhado a ouro e cabo reforçado com revestimento em nylon.', 'fotos/n.jpg'),
(60, 'Overwatch Terá Fim de Semana Gratuito', '\r\nOverwatch ficará novamente gratuito para os usuários do Xbox One, PS4 e PC, entre os dias 18 e 21 de novembro. Todos os heróis, mapas e modos estarão disponíveis para quem quiser baixar o game. Entretanto, o título da Blizzard só terá acesso de graça para os assinantes da PlayStation Plus ou Xbox Live Ouro.\r\n\r\nEsta é a segunda vez que Overwatch oferece um fim de semana gratuito, mas, desta vez, engloba também o PC. O download do game deverá ser feito na PlayStation Store, Xbox Marketplace ou, no caso de computadores, a loja da Battle.net.\r\n\r\nA versão ficará disponível a partir das 17h, do dia 8 de novembro, horário de Brasília. O game tem mais de 10GB de download, além de atualizações. Por isso,  é bom que a conexão esteja preparada, para não perder nenhum minuto do período.\r\nOverwatch é um game multiplayer em primeira pessoa da mesma produtora de Warcraft, Diablo e Starcraft. O jogo tem 22 personagens, divididos em classes, com partidas de rodadas e captura de pontos.', 'fotos/n36.jpg'),
(61, 'O que é e como abrir um arquivo xml?', 'XML é o formato padrão de notas fiscais eletrônicas, mais conhecidas como NF-e, o arquivo surgiu em meados da década de 90 para apresentar uma forma prática de troca de informações pela internet unindo a flexibilidade do SGML com a simplicidade do HTML. O princípio do XML é que ele pode ser lido por diversos tipo de software assim como se integra com inúmeras linguagens de programação, o que facilita sua leitura e escrita.\r\n\r\nDiferente de outros tipo de arquivo como o PDF, que é um formato fechado para documentos, o XML só oferece suporte para texto puro com possibilidade de separação de conteúdo por formatação, simplicidade e legibilidade para humanos e computadores, interligação com bancos de dados e inserção de tags.\r\n\r\nPara que sejam lidos de forma apropriada os arquivos XML necessitam de leitores específicos, no caso das notas fiscais eletrônicas o arquivo pode ser aberto pelo leitor disponibilizado pela Receita Federal que está disponível para Windows e Linux.\r\n\r\nLeitor da Receita Federal: Disponível para Windows e Linux.\r\n\r\nOpções de leitor de XML\r\n\r\nNa internet também existem alguns outros leitores online que dispensam a instalação e facilitam a vida de quem precisa visualizar o conteúdo destes arquivos, veja abaixo algumas opções:\r\n\r\nLeitor XML: Permite ler e visualizar arquivos XML enviados para o site sem grandes opções.\r\n\r\nFreeNFE: Permite visualizar e converter o arquivo XML para PDF.\r\n\r\nXML Viewer: Além de permitir a visualização é possível formartar e converter arquivos com facilidade.\r\n\r\nComo converter XML para PDF?\r\n\r\nOpções de conversores de XML\r\n\r\nPara converter arquivos XML para outros formatos mais amigáveis para dispositivos móveis como o PDF também é possível encontrar soluções online bem práticas como os sites abaixo, neles o usuário só precisa enviar o arquivo e aguardar a conversão para depois baixar o arquivo XML convertido para o formato desejado.\r\n\r\nXML Grid: Permite converter arquivos XML no formato CSV de forma bem simples.\r\n\r\nCool Utils: Permite converter arquivos XML para diversos tipos de formato como PDF, TIFF, JPG, HTML entre outros.', 'fotos/n.jpg'),
(62, 'Diablo 3, Volta com Necromancer e Fases', '\r\nDiablo 3: Reaper of Souls receberá um novo personagem através de uma expansão em 2017 que terá a volta da classe Necromancer, segundo anunciado na BlizzCon 2016, na Califórnia, Estados Unidos. Além disso, na próxima semana será lançada uma atualização para testes que traz fases remasterizadas do primeiro Diablo em comemoração ao 20º aniversário do game.\r\n\r\nO novo Necromancer é uma reimaginação da antiga classe de Diablo 2 e será capaz de invocar exércitos de mortos-vivos para lutarem a seu favor, além de atacar por conta própria com ossos e magia. Os jogadores receberão ainda dois novos espaços para personagens, dois novos baús, um "pet" e vários outros extras estéticos.\r\n\r\nNo PC, o DLC pago “The Rise of the Necromancer” será oferecido através de um pacote que exigirá que o jogador possua tanto o Diablo 3 original quanto sua expansão "Reaper of Souls". Nos consoles como o PS4 ou Xbox One é o equivalente à versão "Diablo 3 Ultimate Evil Edition".\r\n\r\nJá na próxima semana, os jogadores poderão testar a atualização “Darkening of Tristram” que traz a velha catedral do primeiro Diablo com 16 fases repletas de monstros, entre eles os quatro chefes do game original. Haverá, também, um filtro chamado “Glorious Retrovision” que deixará os gráficos pixelados como há 20 anos e limitará o movimento do personagem a apenas oito direções.', 'fotos/n.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(250) CHARACTER SET latin1 NOT NULL,
  `imagem` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `link` (`link`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `slide`
--

INSERT INTO `slide` (`id`, `link`, `imagem`) VALUES
(19, 'http://www.etecbebedouro.com.br/?area=26&noticia=437', 'fotos/19.jpg'),
(22, 'https://www.facebook.com/ApolloMusic2016/', 'fotos/21.jpg'),
(20, 'http://www.etecbebedouro.com.br/?area=26&noticia=436', 'fotos/20.jpg'),
(9, 'http://www.etecbebedouro.com.br/?area=26&noticia=419', 'fotos/9.jpg'),
(10, 'http://www.etecbebedouro.com.br/?area=26&noticia=401', 'fotos/10.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tophits`
--

CREATE TABLE IF NOT EXISTS `tophits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `musica` varchar(150) CHARACTER SET latin1 NOT NULL,
  `cantor` varchar(150) CHARACTER SET latin1 NOT NULL,
  `link` varchar(400) CHARACTER SET latin1 NOT NULL,
  `imagem` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=34 ;

--
-- Extraindo dados da tabela `tophits`
--

INSERT INTO `tophits` (`id`, `musica`, `cantor`, `link`, `imagem`) VALUES
(23, '10%', 'Maiara & Maraisa', 'https://www.youtube.com/watch?v=JybMBMTHWP8', 'fotos/d23.jpg'),
(30, 'Eu Sei De Cor', 'Marília Mendonça', 'https://www.youtube.com/watch?v=sS2yCCi2Mek', 'fotos/d30.jpg'),
(31, 'Closer', 'The Chainsmokers', 'https://www.youtube.com/watch?v=0zGcUoRlhmw', 'fotos/d31.jpg'),
(32, 'Sim ou Não (feat. Maluma)', 'Anitta', 'https://www.youtube.com/watch?v=7Yrghfw1eNo', 'fotos/d32.jpg'),
(29, 'Medo Bobo', 'Maiara & Maraisa', 'https://www.youtube.com/watch?v=Jzl_nrTkfIM', 'fotos/d28.jpg'),
(33, 'Cold Water (feat. Justin Bieber & MØ)', 'Major Lazer', 'https://www.youtube.com/watch?v=a59gmGkq_pw', 'fotos/d33.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
