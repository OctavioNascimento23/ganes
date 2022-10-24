-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Out-2022 às 12:40
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `ganes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nomeCategoria`) VALUES
(1, 'Romance'),
(2, 'Ficção'),
(3, 'Drama'),
(4, 'Política'),
(5, 'Fantasia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `idLivro` int(11) NOT NULL,
  `nomeLivro` varchar(100) NOT NULL,
  `fk_idCategoria` int(11) NOT NULL,
  `autorLivro` varchar(50) DEFAULT NULL,
  `precoLivro` varchar(50) DEFAULT NULL,
  `editoraLivro` varchar(50) DEFAULT NULL,
  `anoLivro` varchar(50) DEFAULT NULL,
  `idiomaLivro` enum('Português','Inglês','Espanhol') DEFAULT NULL,
  `descricaoLivro` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`idLivro`, `nomeLivro`, `fk_idCategoria`, `autorLivro`, `precoLivro`, `editoraLivro`, `anoLivro`, `idiomaLivro`, `descricaoLivro`) VALUES
(1, 'Heartstopper: Dois garotos, um encontro', 1, 'Alice Oseman', 'R$ 59,99', 'Schwarcz SA\n', '2021', 'Português', 'O primeiro volume da adorada série em quadrinhos finalmente chega ao Brasil. A HQ que inspirou a série original da Netflix! Charlie Spring e Nick Nelson não têm quase nada em comum. Charlie é um aluno dedicado e bastante inseguro por conta do bullying que sofre no colégio desde que se assumiu gay. Já Nick é superpopular, especialmente querido por ser um ótimo jogador de rúgbi. Quando os dois passam a sentar um ao lado do outro toda manhã, uma amizade intensa se desenvolve, e eles ficam cada vez mais próximos. Charlie logo começa a se sentir diferente a respeito do novo amigo, apesar de saber que se apaixonar por um garoto hétero só vai gerar frustrações. Mas o próprio Nick está em dúvida sobre o que sente — e talvez os garotos estejam prestes a descobrir que, quando menos se espera, o amor pode funcionar das formas mais incríveis e surpreendentes. Essa edição contém: Capa dura Ilustrações em duas cores Fichas sobre cada personagem Uma prévia do próximo volume.'),
(2, 'Por lugares incríveis', 3, 'Jennifer Niven', 'R$ 44,90', 'Schwarcz SA', '2015', 'Português', 'Agora um filme Netflix, estrelado por Elle Fanning e Justice Smith. Violet Markey tinha uma vida perfeita, mas todos os seus planos deixam de fazer sentido quando ela e a irmã sofrem um acidente de carro e apenas Violet sobrevive. Sentindo-se culpada pelo que aconteceu, a garota se afasta de todos e tenta descobrir como seguir em frente. Theodore Finch é o esquisito da escola, perseguido pelos valentões e chamado de “aberração” por onde passa. Para piorar, é obrigado a lidar com longos períodos de depressão, o pai violento e a apatia do resto da família. Enquanto Violet conta os dias para o fim das aulas, quando poderá ir embora da cidadezinha onde mora, Finch pesquisa diferentes métodos de suicídio e imagina se conseguiria levar algum deles adiante. Em uma dessas tentativas, ele vai parar no alto da torre da escola e, para sua surpresa, encontra Violet, também prestes a pular. Um ajuda o outro a sair dali, e essa dupla improvável se une para fazer um trabalho de geografia: conhecer lugares incríveis do estado onde moram. Ao lado de Finch, Violet para de contar os dias e finalmente passa a vivê-los. O garoto, por sua vez, encontra alguém com quem pode ser ele mesmo, e torce para que consiga se manter desperto. “Me apaixonei por Violet e Finch antes mesmo de se apaixonarem um pelo outro. A jornada deles é adorável e inteligente e corajosa. Vai partir seu coração e relembrar o que significa estar vivo.” — Jennifer E. Smith, autora de A probabilidade estatística do amor à primeira vista.'),
(3, 'Mordida', 1, 'Sarah Andersen', 'R$ 55,92', 'SEGUINTE', '2021', 'Português', 'Vinte anos atrás, America Singer participou da Seleção e conquistou o coração do príncipe Maxon. Agora chegou a vez da princesa Eadlyn, filha do casal. Prestes a conhecer os trinta e cinco pretendentes que irão disputar sua mão numa nova Seleção, ela não tem esperanças de viver um conto de fadas como o de seus pais Mas assim que a competição começa, ela percebe que encontrar seu príncipe encantado talvez não seja tão impossível quanto parecia.'),
(4, 'A fada mamãe e eu', 5, 'Sophie Kinsella', 'R$ 37,90', 'Galera Junior', '2019', 'Português', 'Ella tem um grande segredo: sua mãe é uma fada. Aliás, todas as mulheres de sua família têm poderes mágicos e asas lindas. Além de uma Smartvarinha capaz de produzir os mais interessantes feitiços, como criar a festa de aniversário perfeita, acelerar a fila do supermercado e fazer lindos e deliciosos cupcakes. Mas a mãe de Ella também tem certa... dificuldade para operar sua Smartvarinha, e nem sempre seus feitiços acabam saindo do jeitinho que se imaginou a princípio. Sorte a dela ter Ella sempre por perto para ajudar a resolver as coisas e fazer tudo voltar ao normal.\r\n\r\nO novo livro de Sophie Kinsella, feito sob medida para os pequenos, A fada mamãe e eu traz uma mensagem sobre as virtudes da paciência e sobre como a vida familiar não precisa ser perfeita para ser divertida e repleta de amor.'),
(5, 'O príncipe cruel', 5, 'Holly Black', 'R$ 41,88', 'Galera', '2018', 'Português', 'Jude tinha apenas sete anos quando seus pais foram brutalmente assasinados e ela e as irmãs levadas para viver no traiçoeiro Reino das Fadas. Dez anos depois, tudo o que Jude quer é se encaixar, mesmo sendo uma garota mortal. Mas todos os feéricos parecem desprezar os humanos... Especialmente o príncipe Cardan, o mais jovem e mais perverso dos filhos do Grande Rei de Elfhame.\r\n\r\nPara conquistar o tão desejado lugar na Corte, Jude precisa desafiar o príncipe - e enfrentar as consequências do ato.\r\n\r\nA garota passa, então, a se envolver cada vez mais nos jogos e intrigas do palácio, e acaba descobrindo a própria vocação para trapaças e derramamento de sangue. Mas quando uma traição ameaça afogar o Reindo das Fadas em violência, Jude precisará arriscar tudo em uma perigosa aliança para salvar suas irmãs - e a própria Elfhame.\r\n\r\nCercada por mentiras e pessoas que desejam destruí-la , Jude terá que descobrir o verdadeiro significado da palavra poder antes que seja tarde demais.\r\n\r\nCom personagens únicos, reviravoltas inesperadas, e uma traição de tirar o fôlego, O príncipe cruel vai deixar o leitor querendo mergulhar de cabeça na continuação deste universo.'),
(7, 'Política é para todos', 4, 'Gabriela Prioli', 'R$ 23,99', 'Companhia das Letras', '2021', 'Português', 'O que é uma democracia e para que serve uma constituição? Quais são as atribuições de cada uma das três esferas de poder e como garantir que elas se mantenham em harmonia? Como funcionam as eleições e qual a importância das fake news nesse cenário?\r\nEm Política é para todos, a advogada e apresentadora Gabriela Prioli responde a essas e outras questões imprescindíveis para a compreensão do funcionamento da política ― sobretudo a brasileira ―, mas que muitas pessoas têm receio ou vergonha de perguntar. Com a linguagem descomplicada que fez dela uma das personalidades mais populares do país, a autora mostra como cada um de nós pode se engajar para construir a sociedade que queremos, debatendo os assuntos relevantes com opiniões próprias e argumentos racionais.'),
(8, 'Politica ideologia e conspirações', 4, 'Garry Allen', 'R$ 19,90', 'Faro Editorial', '2017', 'Português', 'Sempre ouvimos teorias sobre conspirações guiando o mundo, comandadas pelo establishment político, ditadas por sociedades secretas, confrarias, religiões e organizações à sombra do Estado. No entanto, nunca eram apresentadas provas, documentos que atestassem a real existências das tramas. Até agora. Este livro mostra que, além de existirem, não se trata de algo secreto nem discreto, mas de uma guerra aberta, declarada e constante, que nos distrai com sua tática de colocar socialistas contra liberais, esquerda contra direita, capitalismo vs comunismo. Fomos divididos em torcidas de uma falsa disputa, e os que realmente vencem nem precisam entrar em campo, sempre estiveram juntos em um terceiro lado, que não estava disputando nada, apenas nos ocupando enquanto mantinham o poder. São os grandes banqueiros e elites globais que dirigem o mundo. Não à toa eles se vendem como socialistas, benevolentes e altruístas, há método nisso tudo: decidem as opções que você tem para votar, em que causas acredita, quais alimentos são saudáveis e o que deve consumir em todos os aspectos: bens móveis, imóveis e culturais. Famílias como Rockefeller, Morgans, Rothschilds e grupos como Bildeberg, Frankfurt e outros super-ricos são os personagens daqui, sempre ligados a figuras como Lênin, Trótski, Mao Tsé-Tung, Hitler, Karl Marx e tantos outros. Com as revelações apresentadas, pode-se decidir, com mais consciência, de quais causas, movimentos e ideais realmente vale a pena participar.'),
(9, 'A organização: A Odebrecht e o esquema de corrupção que chocou o mundo', 4, 'Malu Gaspar', 'R$ 55,99', 'Companhia das Letras', '2020', 'Português', 'Em 2015, quando a força-tarefa da Lava Jato fulminou o “clube” de empreiteiras que controlava os contratos com a Petrobras, a Odebrecht liderava com folga o ranking das empresas de engenharia nacionais. Delatados por colaboradores da Justiça, alguns de seus principais executivos foram presos, acusados de uma volumosa coleção de crimes.\r\nPara tentar sobreviver à hecatombe, a organização ― era assim que os controladores e funcionários se referiam à companhia ― e seus dirigentes confessaram um longo histórico de práticas escusas que abalou a República e chocou o mundo, envolvendo propinas a centenas de políticos, de prefeitos a presidentes. Emilio e Marcelo Odebrecht, pai e filho, cujo relacionamento sempre fora difícil, romperam publicamente em meio a um duelo de denúncias.\r\nNeste livro sobre a glória e a desgraça da Odebrecht, Malu Gaspar desvenda as engrenagens de um sistema de corrupção que parecia inviolável, e lança luz sobre as espúrias relações entre Estado e empresas que condicionaram por muito tempo uma espécie de “capitalismo à brasileira”.'),
(10, 'Direita e Esquerda: Razões e significados de uma distinção política ', 4, 'Norberto Bobbio', 'R$ 26,99', 'Editora Unesp', '2012', 'Português', 'A terceira edição de Direita e esquerda chega em meio a um cenário econômico global tumultuado por uma das piores crises financeiras do capitalismo. Quando de sua primeira edição, em 1999, Norberto Bobbio, um dos principais pensadores contemporâneos, deu uma resposta a quem preconizava que já não fazia sentido distinguir direita e esquerda, pois na globalização a análise dos problemas políticos e econômicos expandira-se para além das fronteiras dos Estados nacionais: “Parece-me ter ocorrido exatamente o contrário, ou seja, que a distinção não está morta e sepultada, mas mais viva do que nunca”.\r\n'),
(11, 'Como funciona o fascismo: A política do “nós” e “eles”', 4, 'Jason Stanley', 'R$ 59,90', 'L&PM', '2018', 'Português', 'Fascismo: originalmente, regime de cunho ideológico estabelecido pelo ditador Benito Mussolini na Itália da década de 1920, que valoriza ideais de nação e raça em detrimento dos valores individuais e é representado por um líder autoritário. Mas por que esse termo voltou à ordem do dia em pleno século XXI? À luz de episódios recentes de democracias que enveredaram para regimes mais ou menos totalitários; de líderes democraticamente eleitos que usam retóricas fascistas para fazer política, como Donald Trump; mas também bebendo no extenso histórico do fascismo – de Mein Kampf, de Hitler, aos discursos fratricidas que levaram ao genocídio de Ruanda na década de 1990 –, ­Jason Stanley analisa a estrutura comum por trás de todas essas experiências. Ele estabelece os dez principais fundamentos do fascismo, entre os quais encontramos: a ideia de reviver um passado mítico e glorioso; o uso de propaganda para distorcer e minar conceitos e instituições democráticas (tendo como pretexto o combate à corrupção); ataques a universidades e intelectuais; uma forte ­noção de hierarquia; a política da lei e da ordem baseada na ideia de grupos minoritários criminosos; e a valorização do “trabalho duro” em prejuízo de sistemas de bem-estar social. Tais mecanismos apoiam-se uns aos outros simbioticamente, criando e reforçando divisões, ao mesmo tempo em que minam os pilares da democracia – eleições livres, judiciário independente, liberdade de expressão e de imprensa etc. – que poderiam conter a ascensão totalitária. A história nos mostra o imenso perigo de subestimar o poder cumulativo dessas táticas, que deixam a sociedade cada vez mais vulnerável aos apelos da liderança autoritária. Apenas identificando as políticas fascistas, o autor argumenta, poderemos resistir a seus efeitos mais danosos e retornar aos ideais democráticos.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reg`
--

CREATE TABLE `reg` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `street` varchar(50) DEFAULT NULL,
  `gender` enum('Masculino','Feminino') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reg`
--

INSERT INTO `reg` (`name`, `username`, `password`, `image`, `id`, `street`, `gender`) VALUES
('Octávio Nascimento', 'TavinMoa', 'Moa23022005', 'image/images.png', 1, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`idLivro`),
  ADD KEY `fk_idCategoria` (`fk_idCategoria`);

--
-- Índices para tabela `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `idLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `livro_ibfk_1` FOREIGN KEY (`fk_idCategoria`) REFERENCES `categoria` (`idCategoria`);
COMMIT;
