<?php

class AddDiscos extends Seeder {

public function run() {
DB::table('discos')->delete(); // deleting old records.

Discos::create(
array(
'nome_disco' => 'Ave de Prata',
'ano' => '1979',
'release' => '<p>ELBA RAMALHO VOA MAIS ALTO COM <em>AVE DE PRATA</em></p>
<p>Elba Ramalho lança este mês seu primeiro LP, <em>Ave de Prata</em>, pela CBS. O nome do disco <br> – que é título de uma das faixas – não poderia ser mais adequado, pois ele tem tudo <br> para voar para o primeiro plano do mundo musical brasileiro.</p>
<p>É um elepê alegre, dançante, aberto e tão incendiário quanto o sol da caatinga. Até a <br> faixa de autoria de Chico Buarque entrou neste clima nordestino. <em>Não sonho mais</em> é <br> um deslavado baião.</p>
<p>Enfim, <em>Ave de Prata</em> é uma posição de Elba Ramalho, uma escolha musical. Ao <br> selecionar o repertório, ela voltou as costas para o oceano Atlântico, para o <br> colonialismo europeu e também para a influência americana. Olhou para o interior do <br> continente, sentiu apenas o Brasil e a América Latina, no que eles têm de comum e <br> básico: o balanço, o ritmo, o toque indígena, o clima negro.</p>
<p>A direção musical de <em>Ave de Prata</em> é de Geraldo Azevedo, a produção de Carlos Alberto <br> Sion. Os autores são todos jovens, inquietos, em permanente busca.</p>
<p>Os músicos – segundo Elba – <em>são os mais incríveis</em>. Sanfona, o mestre Sivuca, ou como <br> ela diz – <em>Sivuca, o pai da gente</em> – e Dominguinhos, Wagner Tiso, Robertinho de Recife, <br> Lulu dos Santos, Novelli, Danilo Caymmi, Paulo Jobim, Zé Ramalho, Jamil Jones, <br> Jackson do Pandeiro, Chico Batera, Sérgio Boré, Oberdan, Barrosinho, Joel do <br> Bandolim, David Tygel, Nivaldo Ornelas, Roberto Silva, Valdeci, Vinícius Cantuária e <br> Kátia de França.</p>
<p>Pelo resultado final, e por informações de Elba Ramalho, todos os músicos, assim <br> como os autores, foram para as gravações com o entusiasmo de quem participa de <br> uma grande festa. “Além da presença constante de Geraldo Azevedo, pois além de <br> compositor é o diretor musical, Chico Buarque, Zé Ramalho, Pedro Osmar, enfim, <br> todos os autores foram às gravações. Fizemos um trabalho com muito amor, muita <br> alegria, muita união. Era sempre uma grande festa, um encontro imenso”, conclui Elba <br> Ramalho.</p>
<p>&nbsp;</p>
<p>CANTORA &amp; ATRIZ OU “CANTRIZ”</p>
<p>Elba Ramalho é da Paraíba, onde começou cantando. Depois de já ter um trabalho <br> musical, resolveu fazer Economia, Direito, Teatro e Sociologia, paralelo a isso tudo era <br> atleta da Escola, – “cheguei a ser melhor atleta de handball da Paraíba e integrei a <br> seleção paraibana”. Veio para o Rio com o Quinteto Violado, para o show “A Feira”, no <br> teatro Casa Grande e ficou.</p>
<p>“Aqui me desliguei do Quinteto, fiquei no Rio, com pessoas da música e do teatro. <br> Uma das que me deu mais força foi Carlos Vereza. Mas todos me indicavam Luiz <br> Mendonça. Estavam certos. Ele era o meu caminho, tinha a ver. Comecei a trabalhar <br> com ele em <em>Viva o Cordão Encarnado</em>, substituindo a Sonia de Paula e fiquei quatro <br> anos com seu grupo, anos muito ricos em experiência, em aprendizado, em vivência. <br> Formamos o grupo Chegança – que resultou em <em>Lampião no Inferno</em>, <em>Canção de Fogo</em>, <br> <em>A Incrível História de Pedro Bacamarte</em>, remontamos também o <em>Cordão</em> em São Paulo”.</p>
<p>Esses trabalhos valeram a Elba Ramalho fartos elogios da crítica e algumas indicações <br> para o prêmio Mambembe; a primeira em <em>Dom Quixote de La Mancha</em> (teatro infantil) <br> e depois em <em>Lampião no Inferno</em> e <em>Viva o Cordão Encarnado</em>.</p>
<p>É importante lembrar que mesmo no teatro, Elba jamais cortou sua ligação com a <br> música. Sempre cantou nos espetáculos montados por Luiz Mendonça, além de fazer <br> vocal em discos de compositores diversos. Desses trabalhos de vocal, os mais recentes <br> estão nos discos de Geraldo Azevedo, <em>Bicho de Sete Cabeças</em> (na canção-título), Kátia <br> de França, Robertinho de Recife, Zé Ramalho, Amelinha, Alceu Valença e Walter <br> Franco.</p>
<p>Em 1978, Elba Ramalho trabalhou na <em>Ópera do Malandro</em>. Quando Chico gravou seu <br> LP, chamou Elba para cantar com Marieta Severo a mesma música que elas <br> apresentavam na peça, <em>O meu amor</em>. Quando essa faixa era uma das mais tocadas nas <br> rádios, a Censura proibiu sua execução pública. Nesse ano, Elba mais uma vez foi <br> indicada para o Prêmio Mambembe como melhor atriz.</p>
<p>Ainda em 1978, EIba Ramalho aproveitava as folgas de segunda-feira para fazer o <br> espetáculo <em>Teatro do Ornitorrinco Canta Brecht e Weill</em>, no Tablado. Paralelo a isso <br> fazia, nos fins de semana, a peça de Sérgio Bardotti, adaptada por Chico Buarque, Os <br> Saltimbancos.</p>
<p>Seu mais recente trabalho, no palco, foi na peça de Benjamin Santos, <em>O fado e a sina <br> de Mateus e Catirina</em>, substituindo Tânia Alves.</p>
<p>O fato de gravar o elepê – diz Elba Ramalho – não significa nenhuma troca, nem <br> abandono do palco. O trabalho de atriz não se opõe ao de cantora, eles são até muito <br> harmoniosos. A experiência de atriz me ajuda muito como cantora e vice-versa. O Tárik <br> brincou comigo, disse que sou uma “cantriz”. Acredito que posso fazer os dois, pois <br> sou muito voltada para o meu trabalho, não penso em outra coisa. Tenho vontade é de <br> criar, de fazer muitas coisas, estou em pleno processo de ebulição, querendo criar, <br> mostrar, buscar, reformular, enfim, quero sempre encontrar meu ofício, seja no <br> momento de cantar, ou trabalhar como atriz, um impulso novo, uma coisa vital, <br> orgânica, dinâmica.</p>
<p>Acredito que meu disco tenha essa determinação. Ele é muito pra cima, pra fora. Ele <br> tem uma chama do Nordeste muito forte, tudo aquilo que absorvi de meu povo, de <br> minha terra, misturado com o que adquiri no Rio.</p>
<p>Eu procurei me manter fiel à forma de cantar de minha gente, aquele grito, muito de <br> carpideira, de lavadeira, de pastorinha, uma coisa pura, muito real. Esse disco está <br> dentro de uma vitalidade nova na música brasileira. Há uma geração ótima de pessoas <br> com um trabalho muito sério e ainda não divulgado. Essas pessoas precisam mostrar a <br> qualidade de seu trabalho, por isso que gravei suas músicas. Essa é uma atitude muito <br> coerente e minha. Os nomes famosos, como Gil, Caetano, já conquistaram um espaço. <br> Tenho que gravar os novos, como eu, os que estão no começo. Esses autores que <br> gravei merecem um espaço, são muito fortes – com um trabalho incrível. Tenho <br> consciência que essa safra nova e vibrante é importante para a música brasileira. Estou <br> com eles, onde eu for, eles irão...</p>
<p>&nbsp;</p>
<p>Ilvaneri Penteado</p><br>  ',
'sbr_disco' => '<p>Epic/CBS 235.027<br />
Lan&ccedil;amento: setembro de 1979</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Dire&ccedil;&atilde;o art&iacute;stica: Jairo Pires<br />
Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Carlos Alberto Sion<br />
Dire&ccedil;&atilde;o de est&uacute;dio: Carlos Alberto Sion e Geraldo Azevedo<br />
Dire&ccedil;&atilde;o musical e arranjos de base: Geraldo Azevedo<br />
Assistente da produ&ccedil;&atilde;o art&iacute;stica: Marcelo Falc&atilde;o<br />
Reg&ecirc;ncias: Paulo Machado e Francis Hime<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: Jardel Le&atilde;o, Andy Mills e Eug&ecirc;nio Carvalho<br />
Mixagem: Andy Mills<br />
Montagem: Alencar<br />
Gravado nos est&uacute;dios Haway e Level</p>
<p>&nbsp;</p>
<p>Fotos: Paulo Klein<br />
Visual: Man&uacute;<br />
Encarte: Jejo Cornelsen<br />
Verso do encarte: Carlos E. de Lacerda<br />
Dire&ccedil;&atilde;o de arte: G&eacute;u</p>
<p>&nbsp;</p>
<p>Participa&ccedil;&atilde;o especial: Dominguinhos, Z&eacute; Ramalho, Geraldo Azevedo, Novelli, Vin&iacute;cius Cantu&aacute;ria, Sivuca, Robertinho de Recife, Nivaldo Ornellas e Jackson do Pandeiro</p>
<p>&nbsp;</p>
<p>Agradecimentos especiais: Raimundo Fagner, Teatro Tereza Rachel, Macarr&atilde;o, Andy Mills, Toninho Penido, Anal&uacute;, Rog&eacute;rio, Carlos Fernando, Fatinha, Marieta Severo, Luiz Mendon&ccedil;a, T&acirc;nia Alves, Man&uacute;, Alceu Valen&ccedil;a, Geraldinho, Miguel Farias e Chico Buarque de Hollanda</p>
<p>&nbsp;</p>
<p>&ldquo;Dedico esse trabalho ao meu pai Jo&atilde;o e minha m&atilde;e Geni.&rdquo;<br />
</p>',
'slug' => 'ave_de_prata',
'foto_fundo' => 'elba_album_01.jpg',
'capa_disco' => 'cd01.jpg',
'capa_sm' => 'cd01-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Capim do Vale',
'ano' => '1980',
'release' => '<p>CAPIM DO VALE: O MUNDO VISTO DO NORDESTE, NA VOZ DE ELBA RAMALHO</p>
        <p>&nbsp;</p>
        <p><em>Capim do Vale</em> é o segundo LP de Elba ramalho pela CBS, e vem fixar de forma definitiva a imagem dessa cantora que desde o ano passado, com o disco e o show <em>Ave de Prata</em>, revelou-se como uma das vozes mais pessoais entre os novos nomes da música brasileira. As canções interpretadas por Elba compõem, em seu conjunto, a imagem de um trabalho musical onde está presente o Nordeste como fonte inspiradora original, com sua música áspera, maliciosa, lírica, e – principalmente – carregada de uma poderosa energia que brota de cada uma das faixas deste disco. <em>Capim do Vale</em> é um disco onde está presente a música nordestina contemporânea, com tudo que ela tem de força criadora, de transformação contínua, e da permanente inventividade que consegue absorver e dominar as influências mais fortes. É um trajeto musical que a voz de Elba traça com canções de autores da Paraíba (Zé Ramalho, Sivuca, Pedro Osmar, Bráulio Tavares e Vital Farias), de Pernambuco (Luiz Gonzaga, Alceu Valença, Geraldo Azevedo e Carlos Fernando), Bahia (Elomar, Jatobá e Capinan) e Rio Grande do Norte (Mirabô).</p>
        <p>O disco, gravado nos estúdios Transamérica e Hawai, teve direção artística e de produção de Mauro Motta, tendo como assistentes de produção Bebeth Holmes e a própria Elba. Entre os músicos que tiveram participação especial nas doze faixas, aparecem Geraldo Azevedo, Zé Ramalho, Sivuca, Abdias, Robertinho do Recife, Dino, Pedro Osmar, Vital Farias, Paulinho Rafael, Zé da Flauta e o regional de Jackson do Pandeiro.</p>
        <p>O Nordeste está presente em todas as faixas de <em>Capim do Vale</em>, sob as mais diversas formas. Desde as canções mais caracteristicamente regionais (<em>Capim do vale</em>, <em>Fulô da margem</em>, <em>Pés de milho</em>) até canções de temática semiurbana (<em>Veja (Margarida)</em>, <em>Porto da saudade</em>), passando por outras que, através de uma fusão de temas e de ritmos, procuram sintetizar as mil faces da complexa realidade cultural nordestina (<em>Espiral do tempo</em>, <em>Caldeirão dos mitos</em>, <em>Banquete de signos</em>). Ao lado dessas, aparecem as regravações (<em>O violeiro</em>, <em>Légua tirana</em>, <em>Imbalança</em>) e uma canção de ritmo forte e letra intensamente atual (<em>Nó cego</em>).</p>
        <p>&nbsp;</p>
        <p>Equipe CBS: <em>Ave de Prata</em> teve uma vendagem surpreendente para um disco de estreia. Você acha que <em>Capim do Vale</em> pode estourar?</p>
        <p>Elba: Talvez, mas não é isso o mais importante. É claro que vou gostar caso o disco tenha uma aceitação imediata muito grande. Mas estou mais interessada é em garantir a continuidade do trabalho iniciado em <em>Ave de Prata</em>. De que adianta um disco tocar o tempo todo durante um ano inteiro e dois anos depois ser esquecido? Você pega uma revista de cinco anos atrás, vê a lista das paradas de sucesso. A maioria são músicas de que ninguém se lembra mais, não sabe mais nem cantarolar. Por isso eu não me preocupo em “estourar”. O que eu quero é que as pessoas percebam que existe uma proposta clara e muito forte no meu trabalho; quero que as pessoas confiem nesse trabalho, acreditem nele, entendam o que ele significa. Mais importante do que um “estouro” imediato é eu conseguir fazer com que daqui a dez anos as pessoas ainda encontrem motivos para colocar esses meus discos na vitrola.</p><br>   ',
'sbr_disco' => '<p>Epic/CBS 235.048<br />
Lan&ccedil;amento: setembro de 1980</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Est&uacute;dio Transam&eacute;rica (16 canais)<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: An&iacute;bal Felix e Waldir Pinheiro<br />
Auxiliares de grava&ccedil;&atilde;o: Jorge e Marco Aur&eacute;lio</p>
<p>&nbsp;</p>
<p>Est&uacute;dio Hawai (16 canais)<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: Carlinhos e Deraldo<br />
Auxiliares de grava&ccedil;&atilde;o: &Iacute;ndio e Peninha</p>
<p>&nbsp;</p>
<p>Mixagem: Deraldo<br />
Dire&ccedil;&atilde;o art&iacute;stica: Adalberto Ribeiro e Mauro Motta<br />
Produ&ccedil;&atilde;o: Mauro Motta<br />
Assistente de produ&ccedil;&atilde;o: Bebeth Holmes e Elba Ramalho</p>
<p>&nbsp;</p>
<p>Fotos: Cafi<br />
Visual da artista: Katia Mesel<br />
Arte: Carlos E. M. de Lacerda<br />
Dire&ccedil;&atilde;o de arte: G&eacute;u e Adalberto Ribeiro</p>
<p>&nbsp;</p>
<p>Este trabalho tem a participa&ccedil;&atilde;o da BANDA ROJ&Atilde;O formada por:<br />
Guil Guimar&atilde;es: baixo el&eacute;trico<br />
Z&eacute; Am&eacute;rico: sanfona e piano<br />
Joca: guitarra<br />
Marcos Amma: percuss&atilde;o<br />
Elber Bedaque: bateria<br />
</p>
<p>&nbsp;</p>
<p><strong>TEXTO ORIGINAL DO LP</strong></p>

<p>Claridade &eacute; o fogo, o artif&iacute;cio, o cumprimento do of&iacute;cio, a consci&ecirc;ncia do prazer.</p>

<p>Claridade &eacute; a luz do sol, raiar de todos os dias na alma, a nova gera&ccedil;&atilde;o, a pureza, o verbo, a reflex&atilde;o, a ci&ecirc;ncia.</p>

<p>Um pavio aceso na escurid&atilde;o.</p>

<p>Claridade &eacute; um rio correndo, todo o come&ccedil;o, todo o amor; &eacute; a poesia, &eacute; a m&uacute;sica brasileira e todos os amigos do peito.</p>

<p>Claridade &eacute; Caetano, Gil, Mautner, Melodia, Chico, Geraldinho, Luiz Gonzaga, Luis Ramalho, Z&eacute; Ramalho, Amelinha, Vital, Valen&ccedil;a, Nen&eacute;, Jackson do Pandeiro, Sivuca, Noveli, Schangai, Tadeu, Br&aacute;ulio, Umbelino, Romero, Washington, Dal, Jo&atilde;o, Carlinhos Jullien, Carlos Fernando, Katia Messel, de Fran&ccedil;a, Abdias, Robertinho de Recife, Milton Nascimento, Paulo Rafael, Z&eacute; da Flauta, Pedro Osmar, Elomar, Jatob&aacute;, Mirab&ocirc;, Capinan, Paulinho Tapaj&oacute;s, Nelsinho, Guil, Z&eacute; Am&eacute;rico, Joca, Elber, Marcos Amma, Mauro Motta, Bebeth, Beto Ribeiro, Coutinho e G&eacute;u.</p>

<p>Com um beijo,<br />
Elba Ramalho</p>
<br>
<p>',

'slug' => 'capim_do_vale',

'foto_fundo' => 'elba_album_02.jpg',
'capa_disco' => 'cd02.jpg',
'capa_sm' => 'cd02-sm.jpg',
'disco_tipo' => '1',  ));




Discos::create(
array(
'nome_disco' => 'ELBA',
'ano' => '1981',
'release' => '<p>“Caetano é sempre um mestre”</p>
<p>&nbsp;</p>
<p>Elba Ramalho é uma artista como poucas, que pode se orgulhar de chegar agora ao seu terceiro LP com um pique arrasador e uma carreira que mantém uma curva ascendente permanente nestes três anos. Consciente da importância de seu trabalho, onde a tônica predominante está totalmente voltada para suas raízes nordestinas. Elba Ramalho lança um novo disco que leva apenas seu nome como título, demonstrando em todos os ângulos do trabalho o amadurecimento musical que ela vem alcançando no decorrer de sua carreira.</p>
<p>Neste LP, como sempre, Elba Ramalho dá uma grande importância ao fato de manter no repertório uma coerência total com seus discos anteriores, seja no repertório escolhido ou na própria proposta do trabalho.</p>
<p>“Sempre existe um pensamento geral quando se faz um disco”, diz ela. “Uma ideia central, que a gente tenta seguir. Neste meu novo disco, o que mais se destaca é a proposta de me manter fiel à minha verdade original. Fiquei muito ligada também em fazer com que este disco fosse coerente com todo o trabalho que eu venho desenvolvendo desde o início da minha carreira, quando lancei o primeiro LP. Tem também um outro aspecto importante nisto tudo que é a minha preocupação em fazer um disco que chegasse mais perto do povo. Eu realmente me propus a fazer um disco claro, aberto, lúcido como os tempos que vivemos, que pudesse ser bem entendido pelo povo. Porque, afinal de contas, todo trabalho musical começa e termina no povo. Procurei dar um recado neste disco, que é o mesmo recado que dou nos meus shows, um toque nas pessoas, que pode ser entendido através das músicas que gravei”.</p>
<p>Para selecionar o repertório do novo disco, Elba Ramalho e seu produtor Mauro Motta ouviram mais de 300 músicas, que chegaram até eles das mais variadas maneiras. Quando foi feita a seleção final do disco, decidiram-se por incluir trabalhos de compositores novos, que Elba considera da maior importância: “Achei que devia dar uma força para alguns compositores que estão fazendo um trabalho muito bom, mas quase não encontram espaço para mostrá-lo. Bráulio Tavares, Fuba (Flávio Eduardo), Lula Côrtes, Marco Polo e Tito Lívio deram uma contribuição maravilhosa através de suas músicas”.</p>
<p>No novo disco, Elba Ramalho faz questão de ser acompanhada pela Banda Rojão, formada pelos músicos que acompanham ela desde o início da carreira. Em algumas faixas, participaram também Mamão (bateria), Paulo César (baixo) e Robson Jorge (violão).</p>
<p><em>Temporal</em>, de Bráulio Tavares e Fuba, é a música que abre o LP com grande força na letra, de uma poesia expressiva e plena de vigor. <em>Amanhã eu vou</em> (Luiz Gonzaga e Beduíno) e <em>Dono dos teus olhos</em> (Humberto Teixeira) confirmam a preocupação constante de Elba em gravar sempre os autores nordestinos importantes e tradicionais. Foi por isso também que ela incluiu em seu disco a música <em>Aquarela nordestina</em>, de Rosil Cavalcanti, como homenagem ao falecido autor.</p>
<p>“O Rosil Cavalcanti foi um compositor que fez um dos trabalhos mais bonitos e importantes da música nordestina. Basta dizer que foi ele o compositor de <em>Sebastiana</em> e <em>Meu cariri</em>, que já viraram clássicos da música popular do Nordeste. Foi também parceiro de Luiz Gonzaga e Jackson do Pandeiro. E o que eu estou sentindo é que a obra de Rosil está ficando esquecida; ninguém se preocupa em gravar suas músicas. Recentemente, estive na Paraíba e fiquei muito preocupada quando soube que estão querendo até apagar algumas fitas gravadas por ele que existem em arquivos de lá. A maneira que eu encontrei de dar um toque nessas pessoas foi regravando <em>Aquarela nordestina</em>, que além de tudo é uma música belíssima”.</p>
<p>“Já a música do Elomar”, Elba continua, “eu conhecia há vários anos. <em>O pedido</em> é uma das músicas mais bonitas que ele já fez e, inclusive, acho que Elomar é um dos nomes mais importantes da música brasileira, no momento. Para mim, ele é um mito, um menestrel, e tudo o que eu falar sobre ele ainda é pouco porque ele é muito mais. Ele fala a língua errada/certa do povo. Como dizia Manuel Bandeira, “o povo é quem fala mais gostoso o português do Brasil”. Outra coisa que me deixou muito feliz neste novo disco é que , finalmente, eu pude gravar uma música de Caetano Veloso. Regravei <em>Cajuína</em> e fico emocionada cada vez que ouço, porque o Caetano tem um significado todo especial para mim. Ele é o grande poeta, é sempre o mestre, o grande músico, grande artista, enfim, Caetano é o poeta geral, sob todos os aspectos”.</p>
<p>Elba fala das músicas de seu novo álbum com muito carinho. <em>Oitava</em> é da conterrânea Cátia de França, compositora a que ela, além de ser amiga, respeita e admira. <em>Vem (Ser navegador)</em>, de Marco Polo, é uma das que ela mais curte. <em>Lua viva</em>, de Tito Lívio e Lula Côrtes, tem sabor de novidade e faz parte da proposta da cantora de ajudar difundindo o trabalho dos novos nomes da MPB.</p>
<p>Já a história da música <em>Eu queria</em> é mais pitoresca. “Eu aprendi essa música numa de minhas viagens a Fortaleza, com um repentista chamado Beija-Flor. Ele cantou, gostei muito e aprendi a cantar com ele, pensando que era dele mesmo. Depois, no disco da cantora Célia (de 1977), ouvi a música gravada com outro arranjo e uma pequena modificação na letra. Aí, descobri que os autores eram Roberto Martins e Mário Rossi. Decidi incluí-la neste LP”.</p>
<p><em>Elba</em> é, antes de mais nada, um LP que combina perfeitamente com o pique de todo o trabalho da cantora que, de janeiro até agora, já fez mais de 50 shows, levando a música do Nordeste – a sua música – aos mais variados lugares do Brasil. Um disco que melódica e literariamente tem a mesma força do anterior, mas que, no entanto, vem mais livre e solto, mais rítmico e mais romântico. Mais ao encontro daquilo que ela própria sente com relação às músicas que canta. Enfim, uma proposta mais tranquila dentro do desenvolvimento e do amadurecimento de Elba Ramalho em sua arte e sua carreira.</p><br>',
'sbr_disco' => '<p>Epic/CBS 144.458<br />
Lan&ccedil;amento: junho de 1981</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p>Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Mauro Motta<br />
Assistente de produ&ccedil;&atilde;o art&iacute;stica: Bia<br />
T&eacute;cnico de grava&ccedil;&atilde;o e mixagem: Luiz Paulo<br />
Montagem: Eug&ecirc;nio<br />
Gravados nos Est&uacute;dios Sigla (RJ) em 24 canais<br />
Dire&ccedil;&atilde;o de arte: S&eacute;rgio Lopes<br />
Fotos: Frederico Mendes<br />
Arte: Laci Miranda</p>
<p>&nbsp;</p>
<p><strong>TEXTO ORIGINAL DO LP</strong></p>
<p>Esse disco &eacute; mais que um compromisso com a gravadora, &eacute; um compromisso comigo mesma e com o meu p&uacute;blico. Saiu exatamente como eu queria e por isso contei com a for&ccedil;a de muitas pessoas as quais quero agradecer de cora&ccedil;&atilde;o.<br />
Aos amigos da CBS.<br />
Particularmente ao meu produtor Mauro Motta, pela dedica&ccedil;&atilde;o e exig&ecirc;ncia nos &ldquo;acordes perfeitos&rdquo;; ao maestro Miguel Cidras pelos bel&iacute;ssimos arranjos; ao meu maestro e particular amigo e m&uacute;sico Z&eacute; Am&eacute;rico pelo banho de beleza nas cantigas &ldquo;Aquarela nordestina&rdquo; e &ldquo;Dono dos teus olhos&rdquo;; a Banda Roj&atilde;o (Joca, Guil, Marcos, Elber e Z&eacute;) pelo arrojo nesses anos de shows e shows Brasil a fora; ao p&uacute;blico fiel na viagem do som; aos compositores e m&uacute;sicos que participaram; a Vital Farias, Tadeu Mathias e Br&aacute;ulio Tavares pelos toques; ao t&eacute;cnico de som Luis Paulo pelos retoques e ao meu amor Carl&atilde;o, pela luz!</p>
<p>&nbsp;</p>
<p>Com f&eacute;,</p>
<p>&nbsp;</p>
<p>Elba Ramalho<br />
Rio, junho de 1981<br />
</p>',

'slug' => 'elba_ramalho',

'foto_fundo' => 'elba_album_03.jpg',
'capa_disco' => 'cd03.jpg',
'capa_sm' => 'cd03-sm.jpg', 
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Alegria',
'ano' => '1982',
'release' => '<p>Alegria tem um significado muito amplo e definitivamente exprime uma explosão de coisas. Um estado de espírito, uma energia de vida, uma pulsação que corre nas veias, uma festa de rua, o carnaval, o povo brasileiro, a vitória do Mengo no Maraca, uma boca sorrindo, a simplicidade de conduzir da vida, o bem estar, o amor, os amigos, a música que vem do coração.</p>
<p>Dizem que o nordestino caminha a vida com uma dualidade de sentimentos: a dor e a alegria.</p>
<p>A dor da seca, da fome, da retirada e a alegria do sacolejo dos forrós, a alegria de estar vivo, acima de tudo!!!</p>
<p>Não me considero uma pessoa inteiramente alegre, mas aprendi nos livros da vida que o não é uma afirmação do sim, e que do vazio do sábio surge a quietude, da quietude a ação, e da ação, a realização. “Pois a quietude é alegria”. A alegria é isenta de preocupações. Fértil por muitos anos. A alegria faz tudo despreocupadamente porque o vazio, o quieto, o tranquilo, o silêncio são a não-ação! Eis a raiz de todas as coisas.</p>
<p>Nesse disco, o repertório foi acontecendo sem pressa, e as músicas chegaram até ele, algumas feitas especialmente: <em>A casca do ovo</em>, do Gonzaguinha; <em>Dominó</em>, do Zé Ramalho; <em>Olhos acesos</em>, do Zé Américo e Salgado Maranhão; <em>Sete cantigas para voar</em>, do Vital Farias; <em>Marcha regresso</em>, do Edson, Paulo Sauer e Moraes Moreira; <em>No som da sanfona</em>, do Kaká do Asfalto e Jackson do Pandeiro.</p>
<p>As outras foram sendo descobertas. <em>Menina do Lido</em>, do Geraldo Azevedo e Carlos Fernando, é uma brincadeira com Geraldinho. Ela existe há anos e a gente canta há anos também. Está como a gente gosta de cantar e tinha de ser feita. Geraldinho é meu convidado especial. O registro definitivo de uma escolha, harmonia e amizade onde a música esteve sempre presente.</p>
<p><em>Amor com café</em> do Cecéu, o mesmo autor do <em>Bate coração</em>. Lá no Nordeste, Antonio Barros (Cecéu) é o mestre da música nordestina, séria e maliciosa, picante e dançante como o nosso povo. Lula Queiroga, com <em>Essa alegria (Caboclinhos)</em>, um ritmo que representa o carnaval de Recife. “Caboclinhos” é um bloco e no carnaval sua bateria e dança representam uma partícula dessa multiplicidade de som e ritmo. Lula é pouco conhecido, mas é mais um compositor, um talento que surge.</p>
<p>...a alegria é a guia!</p>
<p>...a alegria é a barca!</p>
<p>...a alegria é o pendão!</p>
<p>Alceu Valença, também pernambucano, é o compositor de <em>Chego já</em>, nome de um bloco de Olinda, muito famoso e sugestivo: <em>Segura a Coisa que eu Chego Já</em>. O frevo de bloco ou de rua, o ritmo mais pernambucano e brasileiro do mundo.</p>
<p>E a presença de Caetano... A música me foi apresentada por Luis Antonio Correa, e foi feita para a peça <em>O percevejo</em> de Maiakovski. É Caetano, um jeito novo de cantar, que a gente tenta, ousa e pode.</p>
<p>A produção de Aramis foi calma e precisa. Quero ressaltar a presença da Banda Rojão formada por Cidinho (percussão), Elber Bedaque (bateria), Zé Américo (sanfona e piano), Zeppa (guitarra), Guil e Santana (no trabalho de baixo).</p>
<p>A presença especial de Geraldinho e Zé Ramalho (violão), e os belíssimos arranjos que foram feitos por Zé Américo, músico e maestro de São Luís do Maranhão, polivalente e profundo no seu ouvido absoluto.</p>
<p>O trabalho de criação e realização foi nosso e agora é de vocês.</p>
<p>“Conheço a alegria dos peixes no rio através da minha própria alegria, à medida que vou caminhando à beira do mesmo rio”.</p>
<p>&nbsp;</p>
<p><em>Elba Ramalho</em></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>ELBALEGRIA</strong></p>
<p>&nbsp;</p>
<p>Quando tocava bateria no conjunto “The Golden Girls” nos idos de 60, Elba já passava para João Pessoa uma dosagem desconhecida de alegria em forma de música, batuque, África e Brasil. Nordeste-Cangaceirado pelo sol que via e queimava tudo.</p>
<p>Dos anos que se sucederam, não mais do que pique aumentado pelo brilho da velocidade de sua busca. O antes de vir chegou, passou e voltou muitas vezes ao seu redor. E virá muitas vezes ainda. Tudo como princípio, meio e final.</p>
<p>Novamente me lembro da gente tomando cachaça em Tambaú sentados na beira-mar, solvendo o aroma com iodo e deixando sair as canções que se vinham nos envolver como fome de cantores em fase de iniciação profética e humana. O tempo nos sorri quando se recorda conosco. A multiface do amor que se une a tudo isso, faz do ardor da batalha um ninho de faíscas que soltas pelo canto de Elba incendiaram não só João Pessoa nem Campinha Grande, mas saíram dessas órbitas e buscaram sentidos galácticos profundamente Lampionizados/Marinezados/Cantores de todo o mundo estão na sua voz. Mulher de alegria e fogo.</p>
<p>Sua fase atual como todas as outras, são ondas eternas, e quando ela me disse da alegria do nome do disco, era como se eu já soubesse disso tudo e não sabia.</p>
<p>O seu caldeirão abastece o banquete, os signos e os mitos. O que ferve é o canto, o cabelo, o olho e a vontade. A verdade dela é um santuário de alimentos diários e valentes. O seu elemento é o de todo artista: a natureza.</p>
<p>O dominó das associações vivas que estão em todos os olhos abertos, ergam o jogo da força que lume nos corações de Elba. Que são milhares batendo ao mesmo tempo, como o voo das aves que tem asas de prata. Nunca erram seus itinerário. Essa filha de longínquas paisagens é a boca de Luiz, de Jackson, de Marinês, de Dadá Maria e de Elba Ramalho.</p>
<p>&nbsp;</p>
<p><em>Zé Ramalho</em></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Quando ela canta e dança e dá-se em sua arte, é liberdade o que ela vivencia. Tem hora que fica elétrica: fogueira de São João. Tem hora que canta leve: ternura miúda dentro da gente. Trata-se de uma voz doce e travosa. Tipo assim uma mistura de caju com manga-rosa. Daqui pra frente e sempre, ela estará condenada a viver na alma do povo, no coração dos amigos. Semeando alegria pelos palcos, pelos alto-falantes, pelos escritórios, pelos laboratórios da tristeza, incendiando os corações das gentes e dos lugares.</p>
<p>&nbsp;</p>
<p><em>Salgado Maranhão</em></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Eu gosto mesmo é de artista que tem marca/estilo/aquele jeito de cuspir... Encrustado, a ferro e fogo na testa da moça de Campina Grande, eu assoletro contente – Elba Ramalho.</p>
<p>&nbsp;</p>
<p><em>Alceu Valença</em></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Não é uma arte fácil, a arte da voz de Elba. É exigente, é apaixonada. A voz de Elba pede – pede não, exige – que se descolonize o ouvido tanto, mas tanto, mas tanto ao ponto de mudar todas as referências, balançar a roseira, transformar os pontos cardeais. Não é voz para bater papo, para fundo de conversa, para elevador e cadeira de dentista. É voz que chega e diz que chegou, toma o ouvido de assalto, requer atenção imediata e exclusiva. Não é parecida, não é assemelhada, não é tipo tal, não faz o gênero qual. É voz de Elba. Chegou, tá chegada.</p>
<p>Mas é uma voz obediente à sua dona e, por isso, repleta de surpresas. Como neste disco sua dona quer e, mansamente, a voz de Elba fica contida, fica de câmara, fica suave, na fronteira do gemido. Fica bonita de uma beleza nova, e é como se João Gilberto desse o braço para Jackson do Pandeiro e a gente escuta coisa como <em>Deixa escorrer</em>, de Caetano, e se surpreende de ser Elba e ser Caetano – alguma alquimia misteriosa tirou tudo do lugar. Ou percorre os caminhos intrincados sugerido pelo violão de Vital Farias em <em>Sete cantigas para voar</em>, de sua autoria – a voz de Elba é um fio, e um vento, e uma brisa aventurando-se pela linha melódica que parece feita para desafiar o canto.</p>
<p>Mas Elba é por natureza amiga da festa e da explosão, que caem bem na sua voz, lhe são próprias, naturais. Nas coisas da sua terra sua voz tem uma vontade que ilumina, nordestinizando (reestabelecendo ligações?) o merengue à cubana que Geraldo Azevedo compôs (<em>Menina do Lido</em>) e a canção já urbanizada de Zé Américo e Salgado Maranhão (<em>Olhos acesos</em>). E rolando solto, toda metais, toda cantoria, no infernal coco de Kaká do Asfalto e mestre Jackson do Pandeiro, <em>No som da sanfona</em> ou na pungente alegria de Lula Queiroga ao duplo significado dos Caboclinhos – festa de redenção do povo ameríndio – em <em>Essa alegria</em>.</p>
<p>E, finalmente – Elba tocará no rádio. É inevitável. Sua voz exigente sabe ser acessível, também, e <em>Bate coração</em>, o sucesso de Cecéu, está aqui para provar. Junto com a marchinha de Moraes Moreira, Paulo Sauer e Edson Luiz (<em>Marcha regresso</em>) e a canção ao amor de Gonzaguinha (<em>A casca do ovo</em>).</p>
<p>A arte da voz de Elba está chegando ao ponto de fusão. Ponto de bala. Única, como sempre foi. E cada vez mais capaz de mais maravilhas.</p>
<p>&nbsp;</p>
<p><em>Ana Maria Bahiana</em></p><br>',
'sbr_disco' => '<p>Ariola 201.645<br />
Lan&ccedil;amento: maio de 1982</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Dire&ccedil;&atilde;o art&iacute;stica: Mazzola<br />
Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Aramis Barros<br />
Assist&ecirc;ncia art&iacute;stica: Eva Straus<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: Luiz Paulo, C&eacute;lio Martis, Eduardo Ramalho<br />
T&eacute;cnico de mixagem: C&eacute;lio Martins<br />
Assistente: Nestor<br />
Assistentes de est&uacute;dio: Jo&atilde;o Ricardo, Jackson Paulino<br />
Assist&ecirc;ncia geral: Pimpolho<br />
Arregimenta&ccedil;&atilde;o: Paschoal Perrota<br />
Gravado e mixado no per&iacute;odo de 15 de mar&ccedil;o a 15 de abril de 1982 nos est&uacute;dios Sigla-RJ<br />
Metais em &ldquo;A casca do ovo&rdquo;, &ldquo;Marcha regresso&rdquo; e &ldquo;Amor com caf&eacute;&rdquo; gravado nos est&uacute;dios Transam&eacute;rica<br />
T&eacute;cnico: Rafael Azulay<br />
Montagem: Ieddo (Level)<br />
Corte: Ivan Lisnik (Polygram)</p>
<p>&nbsp;</p>
<p>Fotos: Walter Firmo<br />
Capa: J. C. Mello<br />
Arte Final: Bruno Speranza<br />
</p>
',

'slug' => 'alegria',

'foto_fundo' => 'elba_album_04.jpg', 
'capa_disco' => 'cd04.jpg',
'capa_sm' => 'cd04-sm.jpg',  
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Coração Brasileiro',
'ano' => '1983',
'release' => '<p>No meu coração brasileiro</p>
<p>Plantei um terreiro</p>
<p>Colhi um caminho</p>
<p>Armei a arapuca</p>
<p>Fui pra tocaia</p>
<p>Fui guerrear</p>
<p>&nbsp;</p>
<p>O compositor desta música é o mineiro Celso Adolfo, e foi ouvindo-a na voz de Milton Nascimento que me inspirei para este trabalho. Coração alegria brasileiro, assim poderia se chamar este disco ou energia brasileira, ou mesmo coração, um acervo de emoções e sentimentos, um punhado de estórias, de surpresas, de coisas pra dizer, atrás da poesia e da música. O disco assim fluiu, espontâneo, mas preciso. Acho que é um disco romântico, sem maiores comprometimentos sociais, sociológicos ou políticos na sua mensagem, porém, por si só não deixa de denunciar ou reverenciar a tudo. O jeito do artista se exprimir em sua caminhada espiritual.</p>
<p>A produção foi uma vitória; insisti pra que fosse o Mazzola, pela sua capacidade e talento. E deu certo. Procuramos manter o “espírito regional” que caracteriza o meu trabalho, porém deixamos de lado o regionalismo de ter que ser “zabumba, sanfona e triângulo” e usamos tudo a que tínhamos direito, desde o regional de Jackson do Pandeiro (Duda, Cícero e Zé Gomes) até o ritmo mais daqui pro mundo – Paulinho Braga, Picolé, Elber Bedaque, Robertinho Silva, Pedrão, Hélio Delmiro, Frank Colon, Jamil Joanes, Paulinho Rafael, Bira, Céu da Boca, Roupa Nova, a Banda Rojão, o maestro Sivuca, forrozeando com Severo e Zé Américo; Lincoln Olivetti (com sua banda) realizou dois belíssimos arranjos, sintetizando e metalizando nos frevos de Pernambuco <em>Banho de cheiro</em> e da Bahia <em>Vida e carnaval</em>, um único espírito rítmico cuja ordem é fazer brilhar o som, fazer dançar o carnaval, esta festa do povo do Brasil.</p>
<p>Zé Américo arranjou a música <em>Ai que saudade d’ocê</em>, esse baião daqui, de amor e do menestrel paraibano Vital Farias. Luiz Avelar mexeu no ritmo, misturou os temperos e saiu o <em>Toque de fole</em> e <em>Batida de trem</em>, que podem tocar nos forrós de lá e pode se dançar nos “discos” daqui. Severo deu o toque “pé-de-serra”, “molho de gafieira” na música de Gonzaga e Luiz Ramalho, <em>Roendo unha</em>. A Cor do Som coloriu <em>Chororô</em> e eu ousei regravar, não com a singularidade de Gil, mas obedecendo a uma velha paixão minha por esta música.</p>
<p>A presença de Chico Buarque neste disco muito me honra. Convidei-o pra cantar e ele topou. Assim regravamos <em>Se eu fosse o teu patrão</em>, da Ópera do Malandro. Francis Hime também veio nessa e fundiu baião com salsa, com samba, com rock, etc... Porém, o que considero mais importante neste disco é a presença do maestro César Camargo Mariano, com sua arte de tocar a alma. Assim ficou <em>Ave cigana</em>, de Zé Américo e Salgado Maranhão, e <em>Canção da despedida</em>, de Geraldo Azevedo e Geraldo Vandré, composta em 1968 e censurada por todos estes anos. Com a presença do Céu da Boca, do Roupa Nova, percussões, e o piano de César, com mil efeitos de sons, fizemos <em>A volta dos trovões</em>. Os compositores desta são pouco conhecidos – Bráulio e Fuba, mas já estiveram antes nos meus discos e confirmaram o talento de grandes novos compositores da MPB. <em>A volta dos trovões</em> fala sobre uma história ou lenda ou fato real de como exterminavam aldeias indígenas inteiras, usando açúcar de atrativo e bombas de traição.</p>
<p>Esse canto é, pois, um pouco da história do Brasil e que está dentro de cada coração brasileiro.</p>
<p>&nbsp;</p>
<p><em>Elba Ramalho</em></p>
<p><em>junho de 1983</em></p><br> ',
'sbr_disco' => '<p>Ariola 813.600-1 5<br />
Lan&ccedil;amento: junho de 1983</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Produzido por: Mazzola<br />
Assistente de produ&ccedil;&atilde;o: Antonio &ldquo;Foguete&rdquo;<br />
Auxiliar de produ&ccedil;&atilde;o: Pimpa<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: Luiz Paulo (Sigla)/Mazzola, Ary Carvalhaes (Polygram)<br />
Auxiliar de grava&ccedil;&atilde;o: Julio (Sigla)<br />
Engenheiro de mixagem: Mazzola<br />
Auxiliar t&eacute;cnico de mixagem: Luiz Paulo<br />
Auxiliares de mixagem: Elba, Nestor e Julinho<br />
Help&rsquo;s: Luigi Hoffer, L&uacute;cio<br />
Corte: Ivan Lisnik<br />
Arregimentador: Paschoal Perrota<br />
Assist&ecirc;ncia art&iacute;stica: Eva Straus</p>
<p>&nbsp;</p>
<p>Capa: Naum Alves de Souza / J. C. Mello<br />
Fotos: L&iacute;vio Photogaleria<br />
Figurinos: Danielle<br />
Maquiagem: Guilherme Pereira<br />
Reprodu&ccedil;&otilde;es: Casa da Foto / Paulo Pinho<br />
Produ&ccedil;&atilde;o fotogr&aacute;fica: Naum Alves de Souza<br />
Encarte: Elba, L&iacute;vio, Mello e Bruno</p>
<p>&nbsp;</p>
<p><strong>TEXTO ORIGINAL DO LP</strong></p>
<p>&ldquo;Agrade&ccedil;o a todos que fizeram este trabalho. Mazzola pilotando, com arte, o som. Cesar Camargo Mariano, Lincoln Olivetti, Francis, Luiz Avelar e Z&eacute; Am&eacute;rico, criando bel&iacute;ssimos arranjos. Aos m&uacute;sicos, compositores, aos t&eacute;cnicos, ao Pimpa, Antonio, Eva, Gilda, Alceu, Lula Queiroga, Tadeu Mathias, Z&eacute; Ramalho, Gonzaguinha, ao Chico por ter vindo, a Milton Nascimento, Celso Adolfo e a Djavan (mando um beijo!). Lembrando da Clara, com saudades!!! Elba/83 &ndash; Al&ocirc; Marieta, obrigado pelo leque e o anjinho!!&rdquo;<br />
</p>
',

'slug' => 'coracao_brasileiro',

'foto_fundo' => 'elba_album_05.jpg',
'capa_disco' => 'cd05.jpg',
'capa_sm' => 'cd05-sm.jpg', 
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Do Jeito Que a Gente Gosta',
'ano' => '1984',
'release' => '<p>Não quero afirmar que este disco seja mais ou menos alegria, Nordeste, Brasil, força oculta, terra seca, chuva fina...</p>
<p>Digo que me sinto no ponto, descoberta a afirmação dos sentimentos para com tudo que arremata este ponto. A temperatura foi harmoniosa.</p>
<p>As viagens, o palco, o público, as emoções, as paixões...</p>
<p>O jogo da vida, o fogo e a vida... as surpresas, os fãs...</p>
<p>Entre um voo e outro, Mazzola maestrava e ministrava a produção com tática e talento de um mestre. Muito papo nos quartos de hotéis. Eu e os meus músicos idealizávamos o som que seria ideal, o meu som. Afinidades de longo tempo, todo dia cantando, amando, inventando... A minha Banda Rojão – Zeppa, Rubinho, Santana, Sidinho, Marcelo, Severo, Paulinho, Nilton, liderados pelo maestro Zé Américo, ensaiamos 7 músicas, como também juntos optamos pelo repertório e, praticamente, quase todas as músicas para este disco foram feitas em casa.</p>
<p>Em São Paulo, num almoço na casa do maestro César Camargo Mariano (com Flávia, Pedrinho e Maria Rita) mais duas músicas foram definidas e por último, os frevos pernambucanos, baianos, brasileiros, nas mãos do super Lincoln Olivetti.</p>
<p>Foi calmo e bom fazer este disco. Cantei sem receios ou medo dos fones e do estúdio e, pela primeira vez, me senti à vontade fazendo isto.</p>
<p>No mais, tá aí: a cor, a luz e o som que eu aprendi com o Brasil e com o meu povo.</p>
<p>“Por essa rua que caminho, iluminada pelo brio desse povo, às vezes escurecida pela falta do mesmo briol”.</p>
<p>&nbsp;</p>
<p>Elba</p>
<p>Junho/84</p>',
'sbr_disco' => '<p>Ariola/Barclay 823.030-1<br />
Lan&ccedil;amento: maio de 1984</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Produzido e mixado por: Mazzola<br />
Gravado no est&uacute;dio da Polygram nos meses de abril e maio de 1984<br />
Assistentes de produ&ccedil;&atilde;o: Ant&ocirc;nio &ldquo;Foguete&rdquo; e Fatinha<br />
Assist&ecirc;ncia art&iacute;stica: Eva Straus<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: Ary Carvalhaes e Jairo Gualberto<br />
Auxiliares de grava&ccedil;&atilde;o: Marcio e Marcos<br />
Auxiliar de mixagem: Marcio<br />
Corte: Ivan Lisnik<br />
Arregimenta&ccedil;&atilde;o: Pachoal Perrota<br />
Visual: Washington Matias</p>
<p>&nbsp;</p>
<p>Fotos: Walter Firmo e L&iacute;vio Campos<br />
Capa: J. C. Mello<br />
Arte final: Bruno Speranza<br />
</p>
',

'slug' => 'do_jeito_que_a_gente_gosta',

'foto_fundo' => 'elba_album_06.jpg',
'capa_disco' => 'cd06.jpg',
'capa_sm' => 'cd06-sm.jpg', 
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Festival Varadero 84',
'ano' => '1984',
'release' => '<p>
    Ainda que não seja um LP oficial (é um <em>bootleg</em>), este <strong><em>Festival Varedero 84</em></strong> entra aqui por uma curiosidade: pode ser
    considerado um dos itens mais raros da discografia de Elba. Foi produzido e lançado apenas em Cuba pela gravadora EGREM.
</p>
<p>
Em novembro de 1984 Elba era considerada a cantora mais popular do país e pode se dar ao luxo de interromper a temporada paulista de seu novo show,    <strong><em>Do jeito que a gente gosta</em></strong>, no Palácio de Convenções do Anhembi – onde se apresentou por apenas uma semana – exclusivamente para
    cantar em Cuba. No retorno ao Brasil fez mais três semanas de shows em São Paulo.
</p>
<p>
    Depois de passar 11 meses cantando <strong><em>Quero ir a Cuba</em></strong>, no show <strong><em>Coração Brasileiro</em></strong>, ela foi mesmo!
    Apresentou-se na noite de abertura do IV Festival Internacional de Música Popular, em Varadero, que ocorreu entre 21 e 25 de novembro. Ela contou: “Minha
    participação no festival cubano foi para mim de muita responsabilidade. Pela primeira vez o Brasil era representado por uma única artista solo. Além disso,
    o festival tem grande penetração na Europa e recebe a presença musical de 21 países como União Soviética, Alemanha, Austrália e Peru. Logo que cheguei,
    percebi a envolvência musical no dia-a-dia dos cubanos e a afinidade que têm com os brasileiros. Comentava-se muito que a representante do Brasil era uma
    “cantora que baila”. Enfim, a forte identidade por meio da música e dança”.
</p>
<p>
    O LP foi dividido entre Elba e a tradicional orquestra Los Van Van, o mais famoso grupo cubano pós-revolução, composto por importantes músicos como o
    percussionista Changuito e o pianista Pupy, liderados pelo baixista Juan Formell. A parte de Elba no vinil foi composta por grandes sucessos dela no Brasil
como: <strong><em>Banquete de signos</em></strong>, <strong><em>Toque de fole</em></strong>, <strong><em>Energia</em></strong> e <strong><em>No som da Sanfona</em></strong>. As outras duas músicas são pérolas até hoje inéditas em gravações oficiais em sua voz:    <strong><em>Quero ir a Cuba</em></strong>, de Caetano Veloso, com direito a citação do texto <strong><em>Canto geral</em></strong>, do chileno Pablo Neruda
em homenagem à Ilha – e que posteriormente seria o prefixo de <strong><em>No caminho de Cuba</em></strong>, feita por Jaime Alem a pedido da cantora; e    <strong><em>Samba escrachado</em></strong>, primeira música de Lenine (com Zeh Rocha) que Elba cantou em shows – momento em que apresentava os músicos da
    Banda Rojão.
</p>
<p>
    Elba voltou feliz ao Brasil e contou aos jornalistas: “Resumi minha apresentação em 40 minutos. Eles ficaram tão impressionados que, dois dias depois, saiu
    um disco com as músicas que eu havia interpretado. Uma coisa muito carinhosa: de um lado do LP, a Orquestra cubana Van Van e, do outro, “A noite
brasileira” comigo, com seis músicas das 11 músicas que cantei. Pena que na gravação não tenha ficado registrada    <strong><em>Samba do grande amor</em></strong>, de Chico Buarque, uma composição que ele fez dedicada aos cubanos. Aliás, a ausência de Chico foi muito
    sentida. Sempre me perguntavam a razão de ele não ter ido. Ele é um dos artistas brasileiros mais queridos em Cuba”.
</p>
<p>
    E finalizou como a música de Caetano: “É um povo caloroso. Acharam fantástica a minha dança. Esta receptividade me levou a uma apresentação extra com os
    artistas espanhóis e russos. Na verdade, agora que já fui a Cuba, quero voltar”.
</p>
<p>
    Tiago Silva Marques
</p>
<p>
    Abril/2016
</p>',
'sbr_disco' => '<p>EGREM – LD-V-84<br />
Lançamento: novembro de 1984</em></p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p>Gravado ao vivo em Varadero (Cuba), durante o IV Festival Internacional de M&uacute;sica Popular.<br />
Lan&ccedil;ado apenas em Cuba pela EGREM (Empresa de Grabaciones y Ediciones Musicales)</p><br />

<p><strong>Banda Roj&atilde;o</strong><br />
Dire&ccedil;&atilde;o musical, arranjos e teclados: Z&eacute; Am&eacute;rico Bastos<br />
Guitarra: Zeppa Souza<br />
Baixo: Ant&ocirc;nio Santana<br />
Bateria: Rubinho<br />
Percuss&atilde;o: Sidinho Moreira<br />
Trombone: Paulo Williams<br />
Trompete: Nilton Rodrigues<br />
Sax e flauta: Marcelo Neves<br />
Vocais: Tadeu Mathias e Nair de C&acirc;ndia<br />
</p>',

'slug' => 'festival_varadero',

'foto_fundo' => 'elba_album_061.jpg',
'capa_disco' => 'cd061.jpg',
'capa_sm' => 'cd061-sm.jpg', 
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Fogo Na Mistura',
'ano' => '1985',
'release' => '<p>Para os que acreditam na magia dos números, lá vai: é o 7º LP de Elba, em 7 anos de carreira: <em>Ave de Prata</em> (CBS/79), <em>Capim do Vale</em> (CBS/80), <em>Elba</em> (CBS/81), <em>Alegria</em> (Ariola/82), <em>Coração Brasileiro</em> (Ariola/83), <em>Do jeito que a gente gosta</em> (Barclay/84) e <em>Fogo na Mistura</em> (Barclay/85). Nesses sete discos, vários elementos em comum: o sertão, o Brasil, a energia, a alegria, a sensualidade, o humor; o fogo da vida. Os mesmos elementos presentes em seus principais shows: no Teatro Casa Grande (82), no Canecão (83 e 84), nas excursões pelo Brasil inteiro e pelo mundo, de Cuba ao Japão.</p>
<p>O segredo disso tudo talvez seja a mistura. Não o simples fato de misturar influências, porque isso já começa a acontecer cada vez que se ouve rádio. Mas saber o ponto certo, a proporção ideal, o segredo do molho. Misturar, por exemplo, a voz ao corpo e o corpo ao texto – a tal ponto que para descrevê-la seja preciso misturar uma palavra nova: “cantriz”. Pelo jeito de não apenas entoar, mas cantar dizendo.</p>
<p>A mistura mais antiga, entre o sertão divino e a cidade maravilhosa.</p>
<p>Ou entre uma certa sofisticação visual (todas as cores e todas as luzes permitidas pelas leis em vigor) e uma certa descontração que surpreende a plateia – no meio do show a cantora para e diz: “Dá um tempo aí que quebrou o salto do sapato”.</p>
<p>As misturas são muitas, e esse é um segredo delas. Elas fazem com que um disco de Elba atinja as pessoas independentemente de classe, idade, raça ou local de nascimento. Porque existem algumas coisas básicas, algumas camadas de sensibilidade que todos esses brasileiros partilham; e é por aí que uma porta se abre.</p>
<p>“Eu acho que tenho um sucesso razoável, considerando-se de um lado o meu ritmo de trabalho, e do outro as dificuldades econômicas num país como o Brasil. Nem me queixo nem me acho uma pessoa de mais sorte do que as outras. Meus shows tem sempre boa plateia, meus discos sempre vendem bem; eu acho isso algo muito natural. Quando você passa a vida inteira trabalhando para que uma coisa aconteça, na hora em que ela acontece você acha a coisa mais lógica do mundo”.</p>
<p>“Eu costumo dizer que sou uma operária, e realmente eu trabalho muito, viajo muito, e haja ensaio, haja gravação, haja entrevista, reuniões, contratos... Desde que eu entrei na música tem sido assim, nunca afrouxei o ritmo. Tenho uma banda de onze músicos. Equivale a um time de futebol. E tem a minha equipe de produção, tem os técnicos... É uma porção de gente trabalhando juntos, é ótimo, parece um circo”.</p>
<p>“Hoje em dia as coisas acontecem muito mais rapidamente. A TV contribui muito para isso. As modas, as ondas, tudo isso aparece e desaparece com mais frequência, dura menos tempo. A gente tem que estar de olho no que acontece – ainda mais nós artistas, que trabalhamos com a intuição. A gente não pode ter um programa de trabalho, um planejamento de criação para os próximos cinco anos, por exemplo. A gente vai vivenciando as coisas, vai ouvindo, vai assimilando, vai domesticando o que pode. Mas o bom mesmo é inventar sua própria onda, inventar seu próprio sonho. Para isso que serve o palco”.</p>
<p>O repertório desses sete discos vai de Rosil Cavalcante a Chico Buarque – passando por Bertold Brecht e Shakespeare. De <em>Jenny dos piratas</em> à <em>Geni do zepelim</em>; da Diana do pastoril a Carmen Miranda. Mulheres que invadem o palco, de uma em uma, cada qual com seu próprio jeito, sua dança, seu sorriso.</p>
<p>Um disco funciona como o registro das evoluções dessas personagens todas. Uma gravação que fixa a trajetória de cada uma delas, e que nos permite perceber quando retornam numa canção nova e inesperada.</p>
<p>Um disco serve pra tocar no rádio, nas vitrolas de ficha, no toca-fitas do carro, no radinho de pilha. Ele ergue a canção no ar; o ar da cidade se enche de canções: pipas, arraias, papagaios, corujas, pandorgas, todas subindo, procurando espaço entre o vento e o sol.</p>
<p>“Este disco foi um dos mais tranquilos que eu já fiz: foi feito em poucas semanas. O Mazzola trouxe algumas bases gravadas em Miami com músicos cubanos e americanos, e isso funcionou muito bem. É uma experiência nova como cantora. A maior parte do meu trabalho é feita com a Banda Rojão, que está comigo há muito tempo. Mas a gente sempre faz essas experiências, chama arranjadores como César Camargo Mariano ou Dori Caymmi... A gente procura novas formas. Eu me entendo muito bem com o Mazzola; este já é o terceiro disco meu produzido por ele. Ele descobre nuances, detalhes de arranjos, coisas de mixagem que dão um efeito fantástico. São coisas que dão uma unidade muito grande ao trabalho, dentro dessa proposta geral de misturar ritmos e temas”.</p>
<p>“Um disco tem que pensar em trazer informações novas, e ao mesmo tempo manter uma certa continuidade com o trabalho anterior. Eu gosto de fazer experiências novas – de arranjo, de repertório, de interpretação – mas você não pode chegar e mudar tudo de repente. Você tem que usar o já conhecido para abrir caminho para o mais novo. Eu faço o meu forró, o meu frevo, esse tipo de música mais comunicativo; e as pessoas que compram meu disco pra ouvir o forró acabam ouvindo tudo, e gostam. O forró é uma das linhas centrais do meu trabalho: as novidades vem em redor”.</p>
<p>“Eu acho que tudo que eu faço é uma coisa muito brasileira, inclusive porque eu conheço a música brasileira muito melhor que a de qualquer outro lugar. Em todas as viagens que eu fiz eu nunca deixei de perceber interesse pelo forró, pelo maracatu, pelo frevo, que são as coisas que me dão mais prazer de cantar. Eu faço o que eu sei fazer com gosto. É a melhor maneira de fazer bem feito”.</p>
<p>“Me perguntam por que é que eu falo tanto em energia. Ora, eu acredito que nós somos feitos de matéria, e matéria é energia. Cada um de nós é um feixe de energia, e essa energia atua sobre as outras pessoas. Isso é algo que me parece muito claro: se existe energia pessoal, eu tenho que conhecer a minha, saber como ela atua, como pode ser mais bem utilizada. O artista tem que se conhecer, senão ele pode estar cheio de boas intenções – e fazendo um trabalho que não tem nada a ver com ele mesmo”.</p>
<p>“A música negra é responsável por uma grande parte desse aspecto festivo, colorido, alegre, que a música brasileira tem hoje. Mas também existe do lado negro uma face meio triste, meio religiosa. A canção de Altay Veloso, <em>Equilibrando os planos</em>, é uma espécie de blue, mas não o blue no sentido americano da palavra; blue com uma qualidade, de um determinado tom emocional que condiciona a canção inteira. A música do Altay é muito envolvente: ele consegue reconstruir esse estado de espírito blue com uma linguagem muito dele, muito pessoal”.</p>
<p>A Nova República reconciliou os palcos e os palanques. Políticos e artistas acertaram os ponteiros. A música serviu como ligação entre isso tudo; não apenas belas canções que foram compostas, mas porque o próprio hino brasileiro passou a ser escutado com mais simpatia.</p>
<p>A música é uma possiblidade de resposta rápida ao que acontece em torno de nós. As canções urgem, são escutadas e aprendidas, logo depois vem outras; a atenção recolhe, a memória seleciona. Canções são às vezes recados importantes mas de vida curta; outras vezes, são pequenas sínteses que conseguem durante muito tempo satisfazer a nossa necessidade de encontrar um pouco de nitidez nas coisas. Qual o lugar da música na Nova República?</p>
<p>“Eu gosto de todo esse clima de Nova República que está aí. A gente teve dois abalos – a derrota das diretas, a morte de Tancredo. Mas a gente tem que olhar para o país agora, ver o que precisa ser feito. O Tancredo deixou muitas lições importantes para a gente. Eu queria que meu trabalho exprimisse isso, essa sensação de que nós de repente estamos podendo modificar o Brasil, melhorar a nossa própria vida. O lugar do cantor é no estúdio, é no palco, é na TV, onde quer que ele possa botar a boca no mundo.”</p>
<p>“Em Cuba nós sentimos uma identificação muito grande com todo o pessoal de lá – os músicos, a população. É uma coisa ao mesmo tempo estranha e familiar: aquele pessoal super parecido com a gente, mas falando espanhol e falando comunista. Eles são muito políticos, mas por outro lado são um povo muito latino, muito sensual. A música de lá parece a daqui. No Brasil se conhece pouco sobre Cuba, sobre a música cubana: a gente conhece Pablo Milanés, Silvio Rodrigues, uns poucos. Mas as orquestras de lá, os bailes de lá, são uma coisa muito bonita e muito brasileira”.</p>
<p>“A MPB está se tornando cada vez mais teatral, e o teatro vai se aproximando cada vez mais da música. A gente está numa época de musicais, de trabalhos onde as pessoas cantam, dançam, representam. Eu tenho uma saudade enorme do teatro, mas a música compensa isso em parte, porque eu sempre procuro explorar bastante o elemento dramático, o elemento visual. Eu acho que existe música de meio-de-rua (como o frevo e samba) e a música de recinto fechado (como a cantoria de viola e a bossa-nova). São vertentes antigas e fortes da música brasileira. Eu faço mais é música de meio-de-rua. O palco para mim é como um trecho de rua: aparece um pastoril armado, depois passa um bloco, ou se forma uma roda de samba. A música que eu faço é essa. Para mim, todo palco é aquele meu trecho de rua onde eu posso organizar a minha festa: pode ser no Canecão, num ginásio no interior, num teatro. Palco é palco: onde eu chego, armo a minha rua e boto o som pra rolar”.</p>
<p>“Quero falar de um modo especial sobre os compositores novos que estão no disco. Eu sempre me interesso pelo trabalho desse pessoal; às vezes nem chego a conhecê-los pessoalmente, mas o trabalho deles me toca, me diz alguma coisa. Neste disco tem o Nando Cordel, que é parceiro de Dominguinhos; o Jaime Alem, compositor de <em>No caminho de Cuba</em>; o Altay Veloso, que já gravou, e tem um trabalho fantástico; e Pinto do Acordeom, meu conterrâneo de Conceição do Piancó, grande sanfoneiro, meu amigo de infância; gravei dele <em>Sambaiãozar</em>, que diz: “O Corcovado nos espera de braços abertos, é um sonho certo, a gente acorda pra sonhar”. Eu acho que o Brasil acordou pra sonhar”.</p>
<p><em>Fogo na mistura</em> tem participação especial de Dominguinhos (acordeom em várias faixas, juntamente com Severo). A maioria das faixas tem acompanhamento da Banda Rojão, complementada por músicos de estúdio. Três faixas (<em>No caminho de Cuba</em>, <em>Como se fosse a primavera</em> e <em>Fogo na mistura</em>) tiveram suas bases gravadas em Miami, com arranjos de Hector Garrido e participação de músicos cubanos e americanos. Dori Caymmi assina o arranjo de <em>De volta pro aconchego</em>, Zeppa o de <em>Equilibrando os planos</em>, Dominguinhos e Severo o de <em>Mexe, mexe... funga, funga</em>, Eduardo Souto Neto o de <em>Pátria amada</em>; e os demais arranjos são de Zé Américo.</p>
<p>O disco foi produzido e mixado por Mazzola, em maio de 1985.</p>
<p>&nbsp;</p>
<p><strong><em>Bráulio Tavares</em></strong></p><br>  
',
'sbr_disco' => '<p>Polygram/Barclay 827.056-1<br />
Lan&ccedil;amento: maio de 1985</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Produzido por: Mazzola<br />
Gravado e mixado no Rio de Janeiro e Miami no m&ecirc;s de maio de 1985<br />
Assist&ecirc;ncia art&iacute;stica: Eva Straus<br />
Assistente de grava&ccedil;&atilde;o: Antonio Mendes &ldquo;Foguete&rdquo;<br />
Assistente de produ&ccedil;&atilde;o: Fatinha<br />
Est&uacute;dio de grava&ccedil;&atilde;o PRS e &ldquo;International Sound Miami&rdquo;<br />
T&eacute;cnicos: Ary Carvalhaes, M&aacute;rcio, Luiz Cl&aacute;udio, Jairo Gualberto e Mike Couzzi<br />
Auxiliares de grava&ccedil;&atilde;o: Barroso, Marcos e Charles<br />
Est&uacute;dio de mixagem: PRS Rio de Janeiro<br />
T&eacute;cnico de mixagem: Mazzola<br />
Auxiliares de mixagem: Barroso, Marcos e Ary Carvalhaes<br />
Arregimentador: Paschoal Perrota<br />
Corte: Am&eacute;rico</p>
<p>&nbsp;</p>
<p>Capa e coordena&ccedil;&atilde;o gr&aacute;fica: Jorge Vianna<br />
Logotipo: J. C. Mello<br />
Fotos, capa, contracapa e p&ocirc;ster: Antonio Guerreiro<br />
Fotos do encarte: Bruno Lins<br />
Maquilagem: Guilherme Pereira<br />
Figurinos: Washington Matias<br />
Produ&ccedil;&atilde;o: Washington, Fatinha e Deny J&ocirc;</p>
<p>&nbsp;</p>
<p><strong>TEXTO ORIGINAL DO LP</strong></p>
<p>&ldquo;Meu abra&ccedil;o especial para todos os m&uacute;sicos cubanos que participaram deste trabalho! Agrade&ccedil;o especialmente a Vital Farias e Ari Viana.&rdquo; Elba/85<br />
</p>
',

'slug' => 'fogo_na_mistura',

'foto_fundo' => 'elba_album_07.jpg',
'capa_disco' => 'cd07.jpg',
'capa_sm' => 'cd07-sm.jpg', 
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Remexer',
'ano' => '1986',
'release' => '<p><em>Remexer</em> é o oitavo LP de Elba Ramalho e o quinto produzido por Marco Aurélio da Silva, o indefectível Mazzola – que acompanha a cantora desde o sucesso de <em>Bate coração</em>. Gravado entre maio e junho deste ano, este novo disco de Elba dá prosseguimento à mistura de ritmos brasileiros que sempre caracterizou o seu trabalho. Tem deboche, forró, frevo, xote, baião, afoxé... enfim, motivos de sobra para remexer os esqueletos e corações de todo mortal que se preze.</p>
<p>Para falar deste trabalho, a nossa <em>nordestinaturner</em> escolheu ninguém menos que Jorge Mautner, o autor do (ir)radiante <em>Maracatu atômico</em>. E foi assim que o poeta visionário além-punk viu/ouviu o Remexer de Elba Ramalho.</p>
<p>&nbsp;</p>
<p><strong>Só se for a dois</strong> – Meanda/Cazuza</p>
<p>Canção político-existencial além-protesto. Prova da atualidade e da consciência de um engajamento não-dogmático, não-sectário, não-totalitário, desta dupla de gênios inquietos da nova geração de compositores. Viva a atualidade do Brasil-Universal-Moreno, afirmando sua negritude e condenando a África do Sul. E nota mais do que dez para a afirmação neo-anarquista-pacifista de que a contradição política nacional e mundial se resolve apenas... pelo amor... a dois! Elba aqui reflete sua experiência em ambas as matérias pela sua tradição de teatro político, é uma artista engajada enquanto suas lindas coxas a transformam em comichão sensual permanente de dengosa amorosidade. Só o amor de vênus-afrodite-iemanjá desta magnífica diva da paraíba-universal-pan-sexual é que poderá enfrentar os horrores do apartheid, dos assassinatos políticos e da devastação nuclear.</p>
<p>&nbsp;</p>
<p><strong>Remexer</strong> – Luiz Caldas/Carlinhos Brown</p>
<p>Lambada-afoxé além-caribeana de Luiz Caldas, com swing negro, mulato, cafuso, mameluco, negro, negro, negro do Brasil-Universal. Em forma de fricote, chicote, deboche! Este o ritmo do Brasil novo, da Nova República, da esperança, do otimismo! Maravilhoso o texto-conteúdo da letra: “Anormal... luau”. “Anormal” é a minoria aceita! E “luau” é a festa havaiana de todas as praias. De Itapoã a Copacabana. Todas as praias na festa da democracia multirracial brasileira! A voz de Elba e sua interpretação lembram os êxtases das cantoras do seu gênero-tipo: Carmen Miranda, Virgínia Lane, e as rumbeiras brasileiras – massa anônima do nosso povo dançarino!</p>
<p>&nbsp;</p>
<p><strong>Neném mulher</strong> – Pinto do Acordeom</p>
<p>É a vez da coisa do forró, manifestação mais do que nacional e quase sacro-profana que compete com o rock e todo o besteirol. O forró, assim como o pagode, é a prova mais do que viva da consciência emocional-total da nação: dengue, carinho, ternura, beijos infinitos sob o luar de verão. Dá vontade de casar com Elba para todo o sempre da eternidade. Através de Elba torna-se quase “real” o maior sonho humano, tema de todos os filmes, enredos, poemas, óperas, letras e telenovelas: o casamento! Viva Santo Antônio!</p>
<p>&nbsp;</p>
<p><strong>Boca do balão</strong> – Moraes Moreira/Zeca Barreto/Fred Góes</p>
<p>Aqui Moraes Moreira demonstra sua alegria interior, que reúne os arquétipos sentimentais do Brasil-continente-litoral-interior, norte-sul-leste-oeste-nordeste! Música saltitante para dançar ao lado da fogueira acesa de todas as paixões. Elba repete com charme e mistério, sacanagem e insinuante swing a frase que apaixonou o povo carioca e virou moda em todo o Brasil-Universal. Vamos “arrebentar a boca do balão” e emplacar o carnaval da Nova República, do cruzado e da reforma agrária! Viva, saravá, kolofé, amém, oxalá, evoé!</p>
<p>&nbsp;</p>
<p><strong>Sonho de uma noite de verão</strong> – Dominguinhos/Jorge Mautner</p>
<p>Aqui sou suspeito para falar. O grande responsável por este clássico dos clássicos, moderno-eterno, é o gênio de Dominguinhos. Ele fez a música de sopetão, registrando-a, num repente inspirado, ao gravador. A letra, eu coloquei depois. O título, “roubei” de Shakespeare. A voz de Elba aqui designa toda a tradição do cancioneiro nordestino. O velho e eterno-novíssimo romantismo das perdas e reencontros do amor-paixão encontra-se aqui perfeitamente recriado na esfuziante e emocionada interpretação do outro lado de Elba, o lado do seu coração de melão.</p>
<p>&nbsp;</p>
<p><strong>Forró temperado</strong> – Cecéu</p>
<p>Aqui a lembrança do coco e do gênio Jackson do Pandeiro se faz inevitável. O ritmo quente com que Elba impregna sua voz é um misto de remelexo carnavalesco fora do carnaval e malícia brejeira de ar inocente que encobre planos da mulher fatal. Santa e... ou... prostituta. Mas, na verdade, apenas mulher. Mulher do cangaço, mulher urbana, mulher suburbana, mulher sacana, mulher de Copacabana, mulher cotidiana, mulher que ama e ama e ama! Uma canção onde Elba dá conselhos com a sabedoria superior da mulher, da grande vênus-elba-afrodite-ramalho-iansã-iemanjá!</p>
<p>&nbsp;</p>
<p><strong>Odilê, Odilá</strong> – João Bosco/Martinho da Vila</p>
<p>Aqui temos a negritude mais uma vez proclamada em alto e bom som. A parceria é de dois sambistas que, além de reatualizarem a tradição gloriosa da negritude do Brasil-Universal, mergulham mais para trás, quase até os confins das raízes comuns da pátria-nação-emoção. A voz de Elba junta sua emoção numa corrente telepática, enfatizando a luta contra o racismo. E une misticamente as cidades mágicas de Belém, Jerusalém e Salvador. Isto é, o Brasil no universo. A canção do hino universal da alegria é o samba. Ou o antigo “zemba”, proibido como “subversivo” pelas autoridades imperiais.</p>
<p>&nbsp;</p>
<p><strong>Caia na real</strong> – Carlos Fernando/Heloísa Santos</p>
<p>Finalmente estamos no frevo. Já se disse que o frevo tem um “micróbio” que nos dá esta febre. O frevo é o frevo e não me atrevo a escrever sobre o frevo. Apenas dizer que este que nos pede para cair na real exibe a fantasia inebriante das ruas de Recife e Olinda na imaginação dos requebros e clarins e, ao mesmo tempo-espaço (ah!, alma pernambucana de Capiba e Miguel Arraes), o real real. Pernambuco é real, realista, adoro tal concreto. Isto dá à arte genial de Pernambuco todo um toque de “secura” de “enxuta espiritualidade e carnalidade” de João Cabral de Melo Neto... até o <em>Caia na real</em>.</p>
<p>&nbsp;</p>
<p><strong>Vestido suado</strong> – Tadeu Mathias</p>
<p>Mais um forró. Aqui a insinuação é a do suor, como fator de atração sexual. Elba dá novos conselhos, como uma deusa-pagã-cristã da parina universal! Os comentários são do Brasil real que espanta os antropólogos estrangeiros pela imensa alegria de seu povo “miserável”, mas que não para de sacudir as cadeiras, a cantar “o que eu quero é forrozar”... A alegria não cabe na sala do forró! O forró precisa conquistar a sala do Brasil todo! E nem aí dará!</p>
<p>&nbsp;</p>
<p><strong>Chorando e cantando</strong> – Geraldo Azevedo/Fausto Nilo</p>
<p>Novamente o tema de forrós-lamento e outros cantos e encantos nacionais, agora porém sofisticadamente triste. Elba nos faz viajar pelas fronteiras sutis e imprecisas do lusco-fusco das imagens que se alternam e alteiam como se fossem miragens de m deserto de amor!</p>
<p>&nbsp;</p>
<p><strong>Sai da frente</strong> – Gonzaga Jr.</p>
<p>Aqui, Gonzaginha afirma o novo gigantesco romantismo nacionalista não-xenófobo que há de dominar. Tomara Deus, Oxalá, os céus e mares e serras e terras da Nova República. Um beijo nos dois! “A razão é que a gente quer ser feliz”. No social, queremos mais, muito mais! Luxo para todos! Social-democracia-morena da Nova República para toda a eternidade!</p>
<p>&nbsp;</p>
<p><strong>Jorge Mautner</strong></p><br>
',
'sbr_disco' => '<p>Barclay/Polygram 829.659-1<br />
Lan&ccedil;amento: julho de 1986</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Produzido por Mazzola<br />
Coordena&ccedil;&atilde;o de produ&ccedil;&atilde;o: Eva Straus<br />
Assistente de produ&ccedil;&atilde;o: Fatinha e Ant&ocirc;nio Foguete<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: Ary Carvalhaes, Jairo Gualberto e Luiz Cl&aacute;udio<br />
Assistentes de grava&ccedil;&atilde;o: Charles, Marquinhos e Barrozo (Fera)<br />
Dire&ccedil;&atilde;o de mixagem: Mazzola<br />
Engenheiro de mixagem: Roberto Marques<br />
Auxiliares de mixagem: Ant&ocirc;nio Foguete e A. Rodrigues<br />
Montagem: William Tardelli<br />
Arregimenta&ccedil;&atilde;o: Paschoal Perrotta<br />
Corte: Am&eacute;rico</p>
<p>&nbsp;</p>
<p>Fotos/dire&ccedil;&atilde;o de arte: Marisa Alvarez Lima<br />
Layout, capa, contracapa e encarte: Vera Roesler<br />
Maquiagem: Guilherme Pereira e Nicinha<br />
Arte-final: Carlos Nascimento<br />
Coordena&ccedil;&atilde;o gr&aacute;fica: Jorge Vianna<br />
</p>',

'slug' => 'remexer',

'foto_fundo' => 'elba_album_08.jpg',
'capa_disco' => 'cd08.jpg',
'capa_sm' => 'cd08-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'ELBA',
'ano' => '1987',
'release' => '<p>Essas vozes nordestinas, onde as melodias parecem ser expressas meio na marra, invariavelmente demoram um bom tempo para serem assimiladas no sul. Imaginem que o grande Luiz Gonzaga, e ninguém ousa duvidar ser ele hoje em dia a mais eminente figura musical de sua região, foi também malhado quando começou a cantar nos seus discos.</p>
<p>O ímpeto em mostrar sua própria grandeza cultural num novo ambiente deixa em geral o nordestino meio aflito, e a técnica muitas vezes cede lugar a impulsos aparentemente desgovernados e com certeza um tanto ingênuos. Os observadores mais generosos acham que isso é garra, porém, os mais afoitos não conseguem esconder seu desagrado ou pelo menos reconhecer sua própria incapacidade de assimilação. Alceu, Fagner e Elba foram carimbados com apelidos até imaginativos, mas que só faltavam excomunga-los da música popular.</p>
<p>Esse desafio, e outros mais, fizeram de Elba Ramalho uma batalhadora indomável em tudo que tentou realizar. Tentou e conseguiu sempre. Elba é a estrela mais brilhante da música popular brasileira. O novo disco de uma estrela dessa magnitude precisa ser ouvido com atenção especial.</p>
<p>O que há de mais forte neste disco é a força da cultura nordestina. Expressa não por meio daquela ansiedade muito transparente nos seus primeiros discos, mas com a maturidade que choques e soluços ornamentaram sua sólida estrutura de mulher-artista. Elba é uma nordestina agora experiente, que se movimenta sabendo o tamanho do passo que vai dar.</p>
<p>Depois de 8 discos, centenas de shows e milhares de quilômetros pelo Brasil e pelo mundo, sempre com sua Banda Rojão, Elba divide a produção deste LP com o tecladista e arranjador Zé Américo, com ela desde o segundo disco. Um dado fundamental para este esplêndido trabalho artesanal, muito diferente da pobreza imbecil que tem atrofiado a cultura musical do país.</p>
<p>&nbsp;</p>
<p>Em ordem alfabética, estas são as músicas:</p>
<p>&nbsp;</p>
<p><strong><em>Ai de mim</em></strong> – é um galope ou forró-quadrilha, como também é chamada essa forma rítmica que o baiano descobriu, embora seja bem familiar a paraibanos e pernambucanos. Com uma forte marcação binária, Zé Américo optou pelos sopros em lugar da sanfona.</p>
<p><strong><em>Corcel na tempestade</em></strong> – uma toada romântica bem povão, feita pelo pagodeiro Almir Guineto e seu parceiro Adauto Magalha, com quem Elba se dá muito bem no Rio. Às vezes, ela sobe o morro, vai à periferia, às vezes os sambistas vão à sua casa, numa transa que já tem muito tempo. Foi escolhida entre várias sugestões recebidas nessa área, e é uma novidade nos discos de Elba.</p>
<p><strong><em>Da mesa pra cama</em></strong> – Cecéu é uma presença frequente nos sucessos de Elba, desde <em>Bate coração</em>. <em>Da mesa pra cama</em> é na linha picante, com letra de duplo sentido e a malícia constante na música nordestina. No arranjo de Zé Américo há uma sutil mudança rítmica que aproxima o nordeste do samba carioca.</p>
<p><strong><em>Folia brasileira</em></strong> – Nando Cordel é a mais nova revelação para a música brasileira destes tempos e tem feito parcerias inspiradíssimas com Dominguinhos. Elba já provou o gosto de um sucesso da dupla na suave canção <em>De volta pro aconchego</em>. Esta, ao contrário, é uma festa, com molejo e tempero que apimentam muito o trabalho de Elba ao incendiar a plateia quando entra no palco. Um forró com a metaleira se espalhando e o ritmo comendo largado, à moda do inesquecível Jackson do Pandeiro.</p>
<p><strong><em>Ginga</em></strong> – antes de gravar o disco, Elba passou 15 dias no nordeste. A comida, o calor humano, as festas e o clima que sentiu bem fortemente provocaram a encomenda desta música a seu vocalista Tadeu Mathias, e cujo título deveria ser o do disco. No estúdio foram trabalhados ritmos que fervem no caldeirão baiano com evidentes influências de batidas e marcações africanas, muito evidenciadas ultimamente no mundo todo.</p>
<p><strong><em>Lembrando você</em></strong> – guardada por Elba desde 1984, é uma composição do talentoso Sergio Souto, nascido no Acre, com o letrista Moacyr Luz. É a música que mais gosto neste disco, uma melodia de grande personalidade que resolve com originalidade os caminhos escolhidos, e muito bem casada à letra. A interpretação de Elba é direta e sensível, o que é explicável: é uma música que pegou-a direto no coração.</p>
<p><strong><em>Nós destinos</em></strong> – este disco é uma declaração aberta de amor ao nordeste, resumida sem pieguice nesta música de Moraes Moreira. O toque político é expresso no sonho de ver o nordeste independente, que Elba, como todo nordestino, sente na alma e exprime no canto triste e esperançoso. Dominguinhos e Armandinho, convidados especiais, atuam em várias faixas do disco, inclusive nesta.</p>
<p><strong><em>Pout-pourri Jackson do Pandeiro</em></strong> – “Ousei fazer um pout-pourri de Jackson”, afirma Elba modestamente. Porém, é o Jackson compositor, que representa uma parcela bem menor do que se pensa de seu repertório como cantor. Por isso não são músicas tão conhecidas, mesmo pelos seus admiradores. Algumas mais românticas, outras com uma abordagem social, todas feitas há anos atrás em ritmo de samba, que Jackson também cantava fantasticamente. Sambas atuais e definitivos, como esse grande herói da música nordestina a quem Elba considera seu mestre e o maior estimulador.</p>
<p><strong><em>Quero mais</em></strong> – um frevo tipo pipoca no fogo. Com letra simples, a segunda parte tem uma participação rítmica meio forrozeira, pois Nando Cordel, como pernambucano, embora não negue a raça de ótimo compositor de frevo, também é chegado a um forró. Energia pura, também com Armandinho e Dominguinhos na banda.</p>
<p><strong><em>Rumbaiana</em></strong> – mesmo gostando de salsas, rumbas e merengues, Elba acha que captou melhor esses ritmos depois de ter ido a Cuba e sentido que isso é o forró de lá. Aliás, hoje no nordeste o forró é dançado mais como uma rumba, com os casais rebolando diferente por influência da lambada, isto é, via Pará. Elba estranhou essa mudança e adorou a mistura, pois é assim que ela sempre gostou de dançar. Belo arranjo de Zé Américo e mais um espaço a Tadeu Mathias, em quem ela acredita muito.</p>
<p><strong><em>Vem ficar comigo</em></strong> – desde as suaves canções de Vital Farias (como <em>Sete cantigas para voar</em>), Elba tem desenvolvido o trabalho vocal em músicas românticas. Esta canção permaneceu guardada 2 anos, mas ela só decidiu gravá-la quando sentiu sua voz suficientemente encorpada para dar essa interpretação calorosa e solta. Mais uma vez Dominguinhos tem uma participação especial em sua própria música, dando o toque melodioso que enfeita tudo o que faz.</p>
<p>&nbsp;</p>
<p><strong><em>Zuza Homem de Mello</em></strong></p>
<p><em>(maio de 1987)</em></p><br>',
'sbr_disco' => '<p>Polygram 831.966-1<br />
Lan&ccedil;amento: maio de 1987</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p>Produzido por Z&eacute; Am&eacute;rico Bastos e Elba Ramalho<br />
Dire&ccedil;&atilde;o art&iacute;stica: Mariozinho Rocha<br />
Dire&ccedil;&atilde;o musical: Z&eacute; Am&eacute;rico Bastos<br />
Mixagem: Z&eacute; Am&eacute;rico Bastos, Ary Carvalhaes e Jairo Gualberto<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: Ary Carvalhaes e Jairo Gualberto<br />
Auxiliares: Charles e Carlinhos<br />
Montagem: Barroso<br />
Contrarregras: Pimpa e Alcindo<br />
Produ&ccedil;&atilde;o executiva: Nelsinho Fonseca<br />
Assistente de produ&ccedil;&atilde;o: Fatinha<br />
Gravado no outono de 1987</p>
<p>&nbsp;</p>
<p>Fotos: L&iacute;vio Campos<br />
Capa: Hildebrando de Castro<br />
</p>
',

'slug' => 'elba',

'foto_fundo' => 'elba_album_09.jpg',
'capa_disco' => 'cd09.jpg',
'capa_sm' => 'cd09-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Fruto',
'ano' => '1988',
'release' => '<p>A vitalidade e <strong>Elba</strong> Estrela Grande <strong>Ramalho</strong> é a energia do céu e da terra na veia do coração. Traz do nordeste a garra, bota da África a farra, mais o caos luminoso das metrópoles. São milhões de imagens e planos que se processam na informática do peito para gerar amor, música, alegria e encantamento. Por isso, nela, é tudo assim surpreendentemente inusitado: quando se esperava do norte vem do sul, quando se busca no rio vem do sal. Ser uma grande artista é quase um carma. Uma determinação suprema e inafiançável. E Elba sabe disso. Estrela cigana que se parte em mil pedaços de luz. Uns bebem da sua presença, outros comem da sua magia, e muitos acordam no seu toque. E sendo assim ávida de acordes a sua vida, ela também vai gravando pela estrada os gemidos e as paixões anônimas. Vai costurando dentro de si essa contribuição milionária das multidões, que faz de cada um dos seus trabalhos uma pérola de múltiplas cores. O disco <em>Fruto</em> é um sopro radical na direção do que será a MPB a partir de 88: renovação e reconquista de todos os espaços. Vale também como síntese da geleia geral dos ritmos brasileiros e suas influências, da senzala ao caribe. Faz ainda uma homenagem ao rei Luiz, pai do baião, que há mais de meio século distribui felicidade em doces porções de música. Soma-se a isso o talento e a competência do maestro Zé Américo, compositor, arranjador e fera dos teclados que estrutura o perfil e o sentido de unidade do trabalho, além de ser o produtor deste disco. Os dois na mesma bula, são como osso e medula. Elba, Elbrasil, há zil milhas de amor e sons, cantando e encantando fibra por fibra os corações.</p>
<p>&nbsp;</p>
<p><strong><em>Salve-se Quem Puder</em></strong> (Dominguinhos/Fausto Nilo) – Queixa de amor acre-doce para os corações magoados. Neste baião o Domingos dá uma canja, cantando com Elba e vestindo a melodia com sua sanfona brilhante. Traz o Nordeste pra perto. E nessa praia Elba não tem concorrentes. Ninguém igual a ela sabe universalizar o regional e modernizar a tradição, sem trair as características nativas.</p>
<p>&nbsp;</p>
<p><strong><em>O girassol da baixada</em></strong> (Jaime Alem) – É um grito de denúncia do pulso aberto da grande urbe. Numa linguagem cinematográfica, Jaime Alem traz o nosso olhar para os detalhes sutis da cidade grande. Para as pequenas porções de vida que vão surgindo indiferentes à violência e à desesperança. Elba com sua voz de rezadeira cobre de ênfase cada frase da canção, ressaltando a dor e o lirismo selvagens que brotam como girassóis das veias dessangradas da metrópole.</p>
<p>&nbsp;</p>
<p><strong><em>Estrela grande</em></strong> (Caetano Veloso) – Essa tem a manha de quem sabe achar sempre um jeito novo de dizer as coisas. De explodir em caetanaves poéticas. A melodia acasala a voz de Elba que se espalha densa e contundente. Percebe-se o esmero, o rigor da cantora em encontrar a maneira adequada, a forma mais cristalinda, para expressar a canção de Caetano Veloso. Porque em se tratando de Caetano e Elba juntos, as palavras não são apenas palavras, são explosões de significados.</p>
<p>&nbsp;</p>
<p><strong><em>Luã</em></strong> (Geraldo Azevedo/Maurício Mattar) – Tem gosto de melão. Fruta suave para acalentar Luã. Mala direta de pai para filho. Lábios de mãe lambendo a cria. Música, letra e voz se ajustam como numa súplica de amor. O belíssimo arranjo de Joca também nos leva a esse clima. No contexto do disco ela reflete o recolhimento. Uma fuga para ninar o coração.</p>
<p>&nbsp;</p>
<p><strong><em>Doida</em></strong> (Nando Cordel) – Aqui Nando Cordel vai buscar no Caribe fogo e molejo para endoidar os quadris da raça brasileira. Isso marca uma tendência que já vinha sendo seguida por Elba em alguns discos anteriores, um melhor na africanidade do continente. Para nós, uma aproximação revitalizadora com a cultura centro-americana. Para o seu trabalho, uma pitada de molho, num caldeirão de ritmos variados. A letra bastante simples de Nando funciona muito bem nesse tipo de melodia que pega de primeira.</p>
<p>&nbsp;</p>
<p><strong><em>Dragão encantado</em></strong> (Tadeu Mathias) – Esse tem o feitiço dos afoxés de Salvador. Foi feita para pular, para explodir no salão, para suar na praça, como todo som que vem da Bahia. Seja de noite, seja de dia, no carnaval, na praia, na folia, vale quem sabe transformar pernas, braços, pélvis e paixão em passaporte para o prazer. Elba conhece esse terreno e se aproveita disso para gerar em nós alegria e cumplicidade.</p>
<p>&nbsp;</p>
<p><strong><em>Segredo de menina</em></strong> (Paulo Debétio/Waldir Luz) – Certas canções já nascem prontas pra tocar no rádio. Tem o espírito, a sina, a vocação de ganhar a boca do povo. <em>Segredo de menina</em> tem esse feeling. É a cara de Elba no ritmo e na linguagem poética. Debétio utiliza um discurso mais urbano, com motivos que representam o dia-a-dia da cantora, fugindo, assim, do jargão comum dos baiões tradicionais que falam sempre de xamego, remelexo, poeira no pé, e dedo no fole. Aqui a voz de Elba entra suave e contrasta-se com o pique do lindo arranjo de Zé Américo, criando uma doce explosão.</p>
<p>&nbsp;</p>
<p><strong><em>Um bilhete pro seu Lua</em></strong> (Gonzaguinha) – Sendo esse disco, também, uma homenagem ao Rei Luiz Gonzaga, que considera Elba Ramalho a filha que ele não teve, tinha que ter alguma música da família. Nesse caso vem do filho Gonzaguinha parabenizando o pai pelos seus 75 anos de vida. Vida toda dedicada a alegrar o coração do povo, das cidades aos recantos mais ocultos do Brasil, onde a própria Elba é cria desse alastramento de beleza. Assim, ela se encarrega, com sua interpretação emocionada, de dar ainda mais vitalidade à canção de Gonzaguinha e botar adrenalina em nossas veias.</p>
<p>&nbsp;</p>
<p><strong><em>A flor da magia</em></strong> (Zé Américo Bastos/Salgado Maranhão) – Tem cheiro do axé que vem da terra. É o grito musical dos negros que vieram do Daomé para habitar o Maranhão. O toque do tambor, em si, já representa um diálogo com as divindades do cosmo, o discurso dos orixás. Ao tornar sua essa proposta, Elba sela um pacto com a negritude e se firma, cada vez mais, como a grande diva da canção brasileira no que ela tem de mais lúdico. Recebe o diamante bruto da cultura popular e o devolve lapidado, gerando emoções novas e enriquecendo o universo da percepção geral.</p>
<p>&nbsp;</p>
<p><strong><em>Pisa no meu coração</em></strong> (Nando Cordel/Fausto Nilo) – A parceria é instigante. A melodia é irresistível, do jeito que a Elba gosta. O título da música já dá a dica do que pode ser: ritmo e sensualidade na mesma frequência. A canção preenche exatamente o espaço desse toque sensual, um dos geradores da grande empatia de Elba como público. O casamento é perfeito. A alegria é geral.</p>
<p>&nbsp;</p>
<p><strong><em>Palavra de mulher</em></strong> (Chico Buarque) – Desde <em>Ave de prata</em> o talento de Chico tem presença certa no trabalho de Elba. Ela mesma já disse muitas vezes, que ninguém como ele sabe compor tão divinamente bem, se colocando no papel da mulher. Espelhando suas alegrias e suas dores mais secretas, numa sociedade onde a opressão machista tem nuances cada vez mais requintadas. Desta vez ele não faz por menos e traduz em sua canção o sentimento da ausência e do retorno. Na voz de Elba, a música ganha força motriz, movimento, plasticidade e sobretudo o sabor da vivência de quem encarna em si própria os papéis de mulher, cantora e atriz.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><em>Salgado Maranhão</em></p><br>
',
'sbr_disco' => '<p>Polygram 834.791-1<br />
Lan&ccedil;amento: maio de 1988</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p>Produzido por Z&eacute; Am&eacute;rico Bastos<br />
Dire&ccedil;&atilde;o art&iacute;stica: Mariozinho Rocha para MR Produ&ccedil;&otilde;es Art&iacute;sticas<br />
Assistente de produ&ccedil;&atilde;o: Fatinha<br />
Coordena&ccedil;&atilde;o da produ&ccedil;&atilde;o: Maria Helena<br />
T&eacute;cnico de grava&ccedil;&atilde;o: Jairo Gualberto<br />
Auxiliares de grava&ccedil;&atilde;o: Charles e Carlinhos<br />
Arregimenta&ccedil;&atilde;o: Paschoal Perrota<br />
Mixagem digital: Jairo Gualberto e Z&eacute; Am&eacute;rico Bastos<br />
Montagem digital: Marcus Adriano<br />
Corte digital: Am&eacute;rico e Jos&eacute; Ant&ocirc;nio<br />
Supervis&atilde;o processo digital: Luigi Hoffer e Jorge Freitas</p>
<p>&nbsp;</p>
<p>Fotos: L&iacute;vio Campos<br />
Capa: Hildebrando de Castro<br />
Coordena&ccedil;&atilde;o gr&aacute;fica: Arthur Fr&oacute;es<br />
Produ&ccedil;&atilde;o visual: Elba Ramalho e Charlot<br />
Coordena&ccedil;&atilde;o geral: Nelson Fonseca<br />
</p>
',

'slug' => 'fruto',

'foto_fundo' => 'elba_album_10.jpg',
'capa_disco' => 'cd10.jpg',
'capa_sm' => 'cd10-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Popular Brasileira',
'ano' => '1989',
'release' => '<p><strong><em>Popular Brasileira</em></strong>, décimo primeiro LP de Elba Ramalho, é, como os anteriores, um ponto de encontro entre dois polos opostos de nossa música: o recital de palco e a festa de rua. A maioria dos artistas tende a se aproximar de um desses extremos: ou o show fechado, a música-para-ser-ouvida, prendendo a atenção de uma plateia silenciosa, ou o superespectáculo, as praças ou estádios repletos, a música-para-ser-dançada, sacudindo milhares de corpos. Outros artistas, no entanto, sentem-se igualmente à vontade em ambas as situações. No caso de Elba, isso se deve à sua habilidade em juntar a sua experiência profissional de muitos anos de palco à sua vivência de festas populares do Nordeste, como o carnaval e o São João.</p>
<p>Para quem gosta de dançar (e parece que no Brasil se gosta muito), <strong><em>Popular Brasileira</em></strong> traz uma sucessão de faixas das que fazem a delícia das festas-de-largo e ao mesmo tempo dão uma meia-trava nas pretensões dos comentaristas que, por alguma razão, se sentem obrigados a atribuir-lhes uma denominação qualquer. <em>Vê estrelas</em>, por exemplo, é uma dessas combinações de ritmos latinos como as que a Bahia tem exportado ultimamente, numa usina tão pródiga de receitas que os rótulos mais sólidos (salsa, merengue) começam a se subdividir em denominações menos palpáveis: deboche, fricote, etc. O mesmo se pode dizer de outras canções com fisionomia semelhante, mudando apenas o andamento, que é mais repousante em <em>Cheiro moreno</em>.</p>
<p>Essa mistura (palavra invariavelmente associada ao tipo de música que Elba ajudou a popularizar) está presente também em <em>Popular brasileira</em>, que um arranjador pode ler como afoxé e outro como marcha-rancho, sem ter que forçar nenhuma barra; ou em <em>A roda do tempo</em>, onde o ponteio da viola é superposto a uma marcação rítmica que passa alternadamente do caboclinho pernambucano para a marcha-quadrilha junina.</p>
<p>É claro que algumas faixas, para compensar, são de uma nitidez a toda prova. <em>Agarradinho com você</em> é um daqueles frevos eletrizantes onde só tocam no chão o calcanhar e a ponta do pé, enquanto que <em>Jogo de cintura</em> e <em>Agora é sua vez</em> são casos de forró explícito, para se dançar enganchado, indo da rodada-larga até o balanço-miudinho. Por uma questão de equilíbrio, tanto <em>Sem saída</em> quanto <em>Me perdoa</em> são canções lentas e sentimentais, derivando para um bolero-de-rosto-colado, de volta ao aconchego e à calma dos casais.</p>
<p>Mas, como já foi dito, nem tudo na vida é dança. O momento teatral do disco, onde Elba ressurge como intérprete dramática, é a sua recriação da <em>Saga da Amazônia</em>, de Vital Farias. É uma canção longa, ao mesmo tempo emocionada e distanciada em relação à catástrofe que descreve. O arranjo de Joca para orquestra lhe dá uma nobreza operística, e a voz de Elba cancela por um instante o clima de festa-de-rua e nos transforma numa plateia em silêncio diante de um palco iluminado. A intensidade de sua interpretação torna presentes e vivas (sem grandiloquência, sem pose) as emoções que deram origem à canção – canção que por efeito de contraste se harmoniza com todo o restante do disco.</p>
<p>&nbsp;</p>
<p><strong><em>Bráulio Tavares</em></strong></p> 
',
'sbr_disco' => '<p>Polygram 838.006-1<br />
Lan&ccedil;amento: mar&ccedil;o de 1989</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Produzido por Z&eacute; Am&eacute;rico Bastos<br />
Dire&ccedil;&atilde;o art&iacute;stica: Mariozinho Rocha para MR Produ&ccedil;&otilde;es Art&iacute;sticas<br />
Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Paulo Deb&eacute;tio<br />
Assistentes de produ&ccedil;&atilde;o: Fatinha e Soraya<br />
Coordena&ccedil;&atilde;o de produ&ccedil;&atilde;o: Maria Helena<br />
T&eacute;cnico de grava&ccedil;&atilde;o: Jairo Gualberto<br />
Auxiliar de grava&ccedil;&atilde;o: Marco Vicente, Jo&atilde;o e Carlinhos<br />
Arregimenta&ccedil;&atilde;o: Barney<br />
Mixagem digital: Jairo Gualberto e Z&eacute; Am&eacute;rico Bastos<br />
Montagem digital: Marcus Adriano<br />
Corte digital: Am&eacute;rico e Jos&eacute; Ant&ocirc;nio<br />
Supervis&atilde;o t&eacute;cnica: Paulo Succar</p>
<p>&nbsp;</p>
<p>Capa: Tadeu Val&eacute;rio<br />
Fotos: L&iacute;vio Campos<br />
Lettering: Ov&iacute;dio Andrade<br />
Coordena&ccedil;&atilde;o geral: Nelson Fonseca<br />
</p>
',

'slug' => 'popular_brasileira',

'foto_fundo' => 'elba_album_11.jpg',
'capa_disco' => 'cd11.jpg',
'capa_sm' => 'cd11-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Elba Ao Vivo',
'ano' => '1990',
'release' => '<p>Neste seu primeiro disco ao vivo – gravado durante a turnê do show <em>Popular brasileira</em>, que vem percorrendo com imenso êxito as maiores capitais brasileiras – Elba tenta atender a todos aqueles que deleitosamente acompanham suas exibições no palco.</p>
<p>Porque não há como deixar de falar em prazer, sensualidade, força, garra, feminilidade e sabedoria quando se trata de Elba Ramalho. Com sua marca de energia agreste, suavizada por um fundo mergulho no que há de melhor e mais sofisticado na elaboração da música popular urbana, este disco parece ser uma celebração ao ar livre, um ritual pagão, que nos arrasta uma exaltação panorâmica da nossa música mais brasileira e popular.</p>
<p>Sempre sustentada por arranjos de primeira qualidade e uma banda irretocável, vamos sendo embalados por mambos, lambadas, rumbas, fox-baladas, samba-exaltação, melodiosas canções que relembram saraus, até o mais impetuoso forró, a mais deliciosa gafieira, o chorinho saltitante, o merengue devastador.</p>
<p>O disco de Elba é a história de nosso Brasil popular brincando com suas raízes latino-americanas e indígenas. Há citações de sobra, tanto nos arranjos que relembram velhos recursos da Rádio Nacional e que, retomando alguns clichês – na medida exata do compromisso entre a tradição e a transformação –, vão dando ampla sustentação à voz rascante de Elba. Ela nos embala em memórias de Ademilde Fonseca, já na primeira faixa do lado A, com <em>Feitiço de gafieira</em>, ou de Dalva de Oliveira, nos trinados do samba-exaltação <em>Brasil</em>, de Benedito Lacerda e Aldo Cabral.</p>
<p>É um Brasil vivo e gigante, não um gigante adormecido, o que Elba nos oferece. Há até mesmo o apelo ao nosso lado exótico e sofrido em toda a sequência índia, ainda no lado A (<em>A volta dos trovões</em>, sobretudo), onde os pontos de acentuação encontrados pela percussão rítmica deslocada vão criando um desenho originalíssimo e contundente. Algo que nos solicita a tristeza, a melancolia indígena, depois de ter nos remexido irresistivelmente no baião estilizado que é o <em>Jogo de cintura</em>. Quem não entender o que é remelexo, o enroscar das cadeiras, a umbigada e o deboche ternurento neste convite à dança, está irremediavelmente perdido, porque nunca mais vai saber o que é ser brasileiro.</p>
<p>Ainda no lado A temos a doçura de <em>Imaculada</em>, com sua insinuação de música a ser tocada em saraus de varanda com o dedilhado de um singelo violão e que por solução engenhosa do arranjador, transformou-se em música urbana. O sintetizador e o teclado eletrônico dão a essa faixa o som de uma grande orquestra, apesar de tudo intimista, devido ao toque lânguido do piano.</p>
<p>Em <em>Miss Celie’s blues</em> é a Billie Holiday quem arranha a voz de Elba, fazendo com que esta canção americana se nacionalize brasileira com o recurso virtuosístico do baixo elétrico, onde a maleabilidade e a flexibilidade, característica da música latina, transfiguram essa melodia de casa noturna nova-iorquina.</p>
<p>Afinal o escracho, a malevolência e a baderna dos sentidos! As <em>Muchachas de Copacabana</em> parecem saltar do vinil e invadir a nossa intimidade com sua irreverência e sensualidade. A intensidade da interpretação de Elba faria até o Chico Buarque balançar os quadris ao som desse mambo delirante.</p>
<p>Dando seguimento ao encontro das nossas raízes, é o sertão e a selva com a dança de salão, o baile popular urbano, a festa do corpo e da alma brasileira, Elba volta no lado B numa sequência de lambadas, que passa por <em>Ouro puro</em>, de Cecílio Mena e César Rossini, até desaguar em <em>Doida</em> e <em>Vê estrelas</em>, de Nando Cordel, autor também do fantástico <em>Jogo de cintura</em>, do lado A. A guitarra e o teclado eletrônico entraram na música brasileira associados à melodia nordestina desde a tropicália. Neste disco, através dos arranjos, é muito bem explorada a tônica nordestina pelo uso do modalismo (ou mixolídia, para os mais cultos musicalmente) e do ritmo afro, afoxé. É quando a melodia é tocada por todos os instrumentos, sempre sobre uma base de percussão afro, que mais agudamente ficamos envolvidos nessa celebração e criação coletiva, sempre acentuada pela presença das palmas de um coro de vozes afinadas, bem timbradas, com enorme segurança.</p>
<p>A parte instrumental do disco, em sua permanente competência, sustenta-se muito na qualidade dos teclados, do trompete, da percussão e da bateria. O tecladista dá apoio à seção rítmica, completando os espaços harmônicos ricos e fazendo dobramentos com os instrumentos de sopro. A percussão, presença singular e forte, acompanhada pela bateria envolvente e precisa, e ainda o trompete tocando preferencialmente nos registros mais altos, nos permitem viajar através desse encontro entre a grande orquestra urbana e a formação de banda de baile popular. Síntese perfeitíssima.</p>
<p>É nas faixas românticas do lado B, <em>Beatriz</em>, <em>Veja (Margarida)</em> e <em>Marim dos Caetés</em>, que a interpretação aberta, entregue, agrestemente pessoal de Elba, deixa sua singularidade evidente como excelente cantora. Ela sustenta notas com a mesma intensidade, até o final – recurso de interpretação a que o intérprete de música popular não se obriga. Além do mais, Elba ainda faz mudanças de timbre e empostação e voz. O resultado é que nos deparamos com uma grande cantora, personalíssima, nunca plagiando a si mesma, em constante ruptura e reconstrução.</p>
<p>O show de Elba, onde o disco foi gravado ao vivo, tem o nome da última faixa: <em>Popular brasileira</em>. Mas para definir Elba Ramalho neste seu último trabalho, vale a pena nos apropriarmos dos versos de Moraes Moreira e Fred Góes: “É bonita, erudita, popular brasileira. Deixa o vento levar o som, não tem fronteira”.</p>
<p>Elba de tão brasileira pode virar show da Broadway. Ela não tem fronteiras.</p>
<p>&nbsp;</p>
<p><strong><em>Paulo Moura</em></strong></p>
<p>&nbsp;</p>
<p>Gravar um disco sempre envolve muitos sentimentos. Já gravei 11 discos, sempre me entregando, mas por mais concentrada e emocionada que eu pudesse estar, estava entre as paredes de um estúdio. Sempre afirmei que o palco me fascina, que nele me sinto bem. A dor de barriga, o cansaço e todos os problemas desaparecem na hora do show.</p>
<p>Este será meu 12º disco e o primeiro ao vivo. Embora o processo de gravação seja mecânico e extremamente técnico, é o registro de muita energia, suor e de um momento único para mim: o êxtase que o público me proporciona.</p>
<p>Na verdade este disco é muito mais que um disco, é o meu último show, e não há como dissociar uma coisa da outra. Foi um espetáculo ousado, com a fantástica direção do Jorge Fernando, no qual eu repassava todos os meus shows anteriores. Uma superprodução onde eu tive que me superar sob todos os aspectos, inclusive fisicamente.</p>
<p>Torna-se até difícil explicar como um show que me leva à exaustão pode me dar prazer ao mesmo tempo. Trocar a tranquilidade, tecnologia e conforto de um estúdio pelo palco pode não ser muito sensato. Mas nunca foi tão bom gravar um disco como esse.</p>
<p>&nbsp;</p>
<p><strong><em>Elba Ramalho</em></strong></p><br>
',
'sbr_disco' => '<p>Polygram 842.336-1<br />
Lan&ccedil;amento: fevereiro de 1990</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p><strong>BANDA</strong><br />
Teclados: Luiz Avelar<br />
Guitarra e vocal: Zeppa Souza<br />
Contrabaixo: Pipiu<br />
Bateria: Elber Bedaque<br />
Percuss&atilde;o: Firmino<br />
Sax e flauta: Marcelo Neves<br />
Trompete: Paulinho<br />
Trombone: Mois&eacute;s<br />
Vocal: Jussara e Tadeu Mathias</p>
<p>&nbsp;</p>
<p><strong>O SHOW</strong><br />
Dire&ccedil;&atilde;o: Jorge Fernando<br />
Dire&ccedil;&atilde;o musical: Z&eacute; Am&eacute;rico Bastos<br />
Roteiro: Elba Ramalho e Jorge Fernando<br />
Participa&ccedil;&atilde;o especial e coreografias: N&aacute;dia Nardini, Tania Nardini, Tony Nardini e Carlinhos de Jesus<br />
Textos: Br&aacute;ulio Tavares<br />
Desenho e opera&ccedil;&atilde;o de luz: Juarez Farinon<br />
Cenografia: Am&eacute;rico Issa<br />
Execu&ccedil;&atilde;o de cen&aacute;rio: L&eacute;o Garrido<br />
Figurino: Marco Aur&eacute;lio<br />
Adere&ccedil;os: Adalmir Braga<br />
Divulga&ccedil;&atilde;o: Ivone Kassu<br />
Assessoria de imprensa: Alexandre Valentim<br />
Assistentes de produ&ccedil;&atilde;o: Fatinha e Moema Eifler<br />
Administra&ccedil;&atilde;o pessoal: Gilda Valentim<br />
Secret&aacute;ria: Soraya<br />
Auxiliar: Isaias<br />
Monitor: Toninho Campista<br />
Contrarregras: Pimpa e Josino<br />
Camarim: Fulvio Casa, Chiquinho e Karen<br />
Coordena&ccedil;&atilde;o de palco: Oto Guerra<br />
Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o e coordena&ccedil;&atilde;o geral: Carlos Ara&uacute;jo e Nelson Fonseca</p>
<p>&nbsp;</p>
<p><strong>O DISCO</strong><br />
Produzido por Z&eacute; Am&eacute;rico Bastos<br />
Gravado ao vivo no Palace nos dias 24, 25 e 26 de novembro de 1989<br />
Coordena&ccedil;&atilde;o geral: Nelson Fonseca<br />
Coordena&ccedil;&atilde;o de produ&ccedil;&atilde;o: Maria Helena<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: Jo&atilde;o Moreira, Jairo Gualberto, Ant&ocirc;nio Barroso e Marcio Gama<br />
T&eacute;cnico de manuten&ccedil;&atilde;o: Manoel Alberto Fernandes<br />
Auxiliares de est&uacute;dio: Marquinhos, Jorge e Jo&atilde;o<br />
Edi&ccedil;&atilde;o: Ant&ocirc;nio Barroso<br />
Mixagem digital: Z&eacute; Am&eacute;rico Bastos e Jairo Gualberto<br />
Apoio t&eacute;cnico: Roberto Marques, Jo&atilde;o Guarino, Carlos Freitas, Zorro, Otto Dutt Weiler, Cl&aacute;udio Mingroni e Djalma da Silva<br />
Supervis&atilde;o t&eacute;cnica: Paulo Succar<br />
Dire&ccedil;&atilde;o art&iacute;stica: Mayrton Bahia</p>
<p>&nbsp;</p>
<p>Capa: Hildebrando de Castro e Tadeu Val&eacute;rio<br />
Fotos da capa: L&iacute;vio Campos<br />
Fotos do encarte: L&iacute;vio Campos e Carlos Guerreiro<br />
Coordena&ccedil;&atilde;o gr&aacute;fica: Arthur Fr&oacute;es<br />
</p>
',

'slug' => 'elba_ao__vivo',

'foto_fundo' => 'elba_album_12.jpg',
'capa_disco' => 'cd12.jpg',
'capa_sm' => 'cd12-sm.jpg',
'disco_tipo' => '1',  ));


Discos::create(
array(
'nome_disco' => 'Felicidade Urgente',
'ano' => '1991',
'release' => '<p><strong><em>Felicidade Urgente</em></strong> foi concebido durante a temporada que Elba Ramalho realizou em outubro do ano passado no Blue Note, uma das mais tradicionais casas de jazz de Nova York. Saudada pela crítica americana como uma <em>brazilian bombshell</em>, Elba, sob a direção de Nelson Motta, apresentou um variado repertório de MPB, incluindo algumas canções que agora ficam registradas neste disco, o 13º de sua carreira.</p>
<p>Ali estava, por exemplo, o xote de João do Vale, <strong><em>Pisa na fulô</em></strong>, que agora recebe uma roupagem próxima do reggae, contando ainda com um belo arranjo vocal de Jaime Alem; é um clássico da música nordestina, que Elba recria numa interpretação única, com direito, no final, a citação de canções de Gilberto Gil e Luiz Gonzaga. Também do show do Blue Note veio para o disco a recriação de Elba para <strong><em>Morena de Angola</em></strong>, um sucesso na voz de Clara Nunes, no qual Elba destaca a sonoridade percussiva dos versos de Chico Buarque, enquanto o timbre nordestino da sanfona de Oswaldinho se casa com perfeição ao ritmo africano.</p>
<p>A música africana, matriz mais remota da MPB, ganha diversas variações dentro deste disco de Elba, que se destaca entre seus trabalhos mais recentes pelo equilíbrio alcançado, dentro de cada faixa, entre os elementos tipicamente nordestinos e as demais vertentes que costumaram alimentar o repertório da artista. É o caso de <strong><em>Vida</em></strong> (Maria Juçá/Roger Kedyh), um conhecido sucesso do grupo Obina Shok, contando aqui com a participação especial de Lulu Santos na guitarra; e de <strong><em>É d’Oxum</em></strong>, sucesso baiano do compositor Gerônimo: duas músicas largamente executadas em rádios e shows, e que recebem neste disco de Elba um novo tratamento, mesclando-se com facilidade ao seu estilo de interpretação.</p>
<p><strong><em>Feitiço</em></strong> (Lenine) é uma canção sacudida e caribenha, com letra provocante, bem ao estilo dos números de palco de Elba. Uma faixa que se sobressai no repertório do disco é <strong><em>Maré dendê</em></strong>, talvez a mais rítmica de todas, onde Elba e Sandra de Sá fazem um vigoroso dueto vocal, ressaltando a sonoridade dos versos surrealistas de Carlinhos Brown, acompanhadas por uma percussão poderosa e efeitos vocais surpreendentes.</p>
<p>As canções lentas tem proporcionado a Elba alguns grandes sucessos ao longo de sua carreira, e neste disco elas aparecem com destaque. <strong><em>Fim de jogo</em></strong> (Jamil Joanes/Nelson Motta) traz uma filigrana sutil de cordas e teclados, tecendo uma cantiga onde a história de amor se torna “passado, promessa, paixão, paisagem, pensamento – noite clara de verão”. <strong><em>Ventos do norte</em></strong> (Djavan) é uma canção de clima nostálgico, com a voz de Elba explorando os tons mais graves e a fluência dolente da melodia sendo conduzida pelo violão cadenciado de Djavan e pela sanfona de Oswaldinho.</p>
<p><strong><em>Felicidade urgente</em></strong> (Claudio Zoli/Ronaldo Santos) é de certo modo uma canção atípica dentro do repertório de Elba e, curiosamente, uma das mais bem realizadas do disco. Com sua “levada” quase <em>country</em> e a presença de Claudio Zoli na guitarra e vocais, ela é impelida por um ritmo dançante e envolvente, sublinhando versos como “A vida me fez desse jeito/ o mundo é tão imperfeito/ pouca gente tem direito a ser feliz/ O tempo passa de repente/ felicidade urgente para todos/ para todos nós”.</p>
<p>Outra canção de feição pouco comum e executada com perfeição é <strong><em>Deixa falar</em></strong> (Fátima Guedes): fazendo citação de Carmen Miranda (<em>O que é que a baiana tem?</em>), Elba dá uma interpretação primorosa a um maxixe delicado e malicioso, recuperando a sensualidade de um ritmo que poucos compositores e intérpretes brasileiros tem se aventurado a explorar.</p>
<p>O disco se encerra com <strong><em>Nós sofre, mas nós goza</em></strong>, um frevo vibrante de Vital Farias, que talvez surpreenda os ouvintes que ainda desconhecem essa faceta do talento do compositor de <em>Saga da Amazônia</em> e <em>Veja (Margarida)</em>; e <strong><em>La vie en rose</em></strong> (Luiguy/David/Piaf), um clássico de Edith Piaf com o qual Elba encerrava seu show no Blue Note.</p>
<p>A edição em CD de <strong><em>Felicidade Urgente</em></strong> traz ainda a recriação de Elba para <strong><em>Qui nem jiló</em></strong>, outro clássico da música popular nordestina na voz de Luiz Gonzaga.</p>
<p><strong><em>Felicidade Urgente</em></strong> tem produção de Nelson Motta, direção musical e arranjos de Eduardo Souto Neto e arranjos vocais de Jaime Alem. As participações especiais são de Djavan (violão e vocal em <em>Ventos do norte</em>), Sandra de Sá (vocal em <em>Maré dendê</em>), Claudio Zoli (guitarra e vocal em <em>Felicidade urgente</em>), Lulu Santos (guitarra em <em>Vida</em>), Mauro Senise (clarineta em <em>Deixa falar</em>). A Banda Rojão, que acompanha Elba em seus shows, participou da maioria das faixas do disco, e é formada por Eduardo Souto Neto (teclados), Oswaldinho (sanfona), Manassés (guitarra e violão), Jamil Joanes (baixo), Elber Bedaque (bateria), Repolho (percussão) e Jussara (vocal).</p>
<p>&nbsp;</p>
<p><strong><em>Bráulio Tavares</em></strong></p>
',
'sbr_disco' => '<p>Polygram 848.688-1<br />
Lan&ccedil;amento: junho de 1991</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Produzido por Nelson Motta<br />
Dire&ccedil;&atilde;o art&iacute;stica: Mayrton Bahia<br />
Dire&ccedil;&atilde;o musical: Eduardo Souto Netto<br />
Produ&ccedil;&atilde;o executiva: Fatinha<br />
Coordena&ccedil;&atilde;o de produ&ccedil;&atilde;o: Maria Helena<br />
Arregimenta&ccedil;&atilde;o: Barney e Alexandre Valentim<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: Marcus Adriano e Jairo Gualberto<br />
Assistentes: Jorge Super &ldquo;H&rdquo; e Jo&atilde;o Carlos<br />
T&eacute;cnico de grava&ccedil;&atilde;o (Est&uacute;dio Impress&atilde;o Digital): Eduardo Costa<br />
Assistentes (Est&uacute;dio Impress&atilde;o Digital): Paulo Henrique, Geraldo e Rog&eacute;rio<br />
Mixagem: Marcus Adriano (nas faixas &ldquo;Vida&rdquo;, &ldquo;Mar&eacute; dend&ecirc;&rdquo; e &ldquo;La vie en rose&rdquo;); Marcus Adriano (Est&uacute;dio Impress&atilde;o Digital)<br />
Montagem digital: Ant&ocirc;nio Barroso<br />
Corte digital: Jos&eacute; Ant&ocirc;nio<br />
Supervis&atilde;o t&eacute;cnica: Paulo Succar<br />
Coordena&ccedil;&atilde;o geral: Carlos Ara&uacute;jo</p>
<p>&nbsp;</p>
<p>Layout: Ruth Freihof<br />
Fotos: Isabel Garcia<br />
Arte do CD: Vanessa Duran Stepanenko<br />
Produ&ccedil;&atilde;o e make-up: Jesus<br />
Manuscritos encarte: Nena Braga<br />
Fotos da grava&ccedil;&atilde;o: Alexandre Valentim e Ricardo Malta<br />
Agradecimentos: Mazola, Eva, Foguete, Raquel e L&eacute;a Lima<br />
</p>
',

'slug' => 'felicidade_urgente',

'foto_fundo' => 'elba_album_13.jpg', 
'capa_disco' => 'cd13.jpg',
'capa_sm' => 'cd13-sm.jpg',
'disco_tipo' => '1',  ));


Discos::create(
array(
'nome_disco' => 'Encanto',
'ano' => '1992',
'release' => '<p>Sempre que um trabalho termina, fica no ar uma sensação de incerteza, de impessoalidade. Por mais satisfatório que seja o resultado final dele, sempre falta alguma coisa. Essa é a questão. A vontade de produzir meu próprio disco já vem de um tempo, assumir por inteiro a responsabilidade de acertos e erros é um aprendizado que, com certeza, faz crescer.</p>
<p><strong><em>Encanto</em></strong> é assim, o meu disco, a minha voz, o repertório que eu escolhi. É o primeiro disco que produzo e, assim, sem tantas influências externas, sou eu mais eu. Mas não estive só.</p>
<p>O resultado é o que está para se ouvir nas 13 faixas gravadas nesse <strong><em>Encanto</em></strong>. Grande parte do repertório é de compositores nordestinos, o que encaixa perfeitamente com o ritmo, que eu defini como balançado e balanceado – uma fusão do primitivo e do tecnológico. Extremamente harmonioso.</p>
<p>Harmonia. Músicas inéditas se juntam a antigas canções. <strong><em>Dúvida</em></strong>, uma valsa de Gonzagão, composta em 1946, na concepção de Robertinho de Recife e Manassés, pode ser ouvida como uma guarânia ou até como um fado. O mesmo Robertinho assume o arranjo que redescobre <strong><em>Caminhos do coração</em></strong>, música do amigo Gonzaguinha, que me foi sugerida por Nelson Motta.</p>
<p>E por falar nessa harmonia, torna-se obrigatória a menção de meus colaboradores. Mazzola tem presença mágica nas faixas <strong><em>Cidadão</em></strong>, <strong><em>São João na estrada</em></strong> e <strong><em>Flora</em></strong>. Marcos Farias – o Marquinhos, filho do sanfoneiro Abdias e da cantora Marinês, que me acompanha em shows há anos – assina comigo a produção e os arranjos de <strong><em>Que nem vem vem</em></strong> e <strong><em>Eu vou te amar</em></strong>.</p>
<p>Ao lembrar de minha banda, credito méritos aos meus músicos que contribuíram sensivelmente no desenvolvimento do trabalho em estúdio. As ideias foram tantas que o repertório foi definido no decorrer das gravações.</p>
<p>Desse modo, nota-se claramente a batuta de Mazzola regendo as faixas <strong><em>São João na estrada</em></strong> e <strong><em>Cidadão</em></strong>, de Moraes Moreira. Já <strong><em>Flora</em></strong> é um revival de uma canção de Ednardo, Dominguinhos e Climério, e ficou a cargo de Fernando Moura, que justificou tudo o que se diz a respeito das maravilhas da tecnologia moderna. Vejo estas faixas sob uma ótica futurista, e as ouço como renovadoras.</p>
<p>É isso mesmo? Deve ser. Estou feliz em trabalhar com tanta gente boa.</p>
<p><strong><em>Cidadão</em></strong> ainda conta com a presença brilhante e sempre poderosa de Margareth Menezes. <strong><em>São João na estrada</em></strong>, já está dito, é uma homenagem declarada ao nordestino, a essa fonte inesgotável de energia e inspiração. Assim como todo o disco, penso eu.</p>
<p>No mais, Bráulio Tavares e Lenine – os parceiros das delícias – criaram <strong><em>Miragem do porto</em></strong>, música que o maestro Luiz Avelar tratou de “magnetizar” e transformar num mantra. Luizinho também arranjou <strong><em>Noites olindenses</em></strong>, um frevo doce e melodioso composto por Carlos Fernando, já gravado uma vez por Caetano Veloso.</p>
<p>Da Bahia, feito especiaria, vem o que acho mais interessante, o “samba-pop-reggae” <strong><em>Alegria real</em></strong>. Diferente e cheio de sabor, ele é o ritmo preto-no-branco. Uma <em>fusion</em> que Saul Barbosa (arranjo e violão) compôs com o historiador e poeta Jayme Sodré.</p>
<p>Trazendo sanfona, música e arranjos prontos, Oswaldinho chegou <strong><em>Na hora H</em></strong>, com um forró-coco que lembra Jackson do Pandeiro. E forró é Nordeste, e é de lá, ou melhor ainda, da Paraíba, que vem Maciel Melo, compositor do xote-reggae <strong><em>Que nem vem vem</em></strong>.</p>
<p>Geraldo Azevedo e Pippo Spera também são “do norte”, mas foram os últimos a chegar, trazendo <strong><em>Eu vou te amar</em></strong>. Talvez pela pressa, o que devia ser o mais difícil se tornou o mais fácil de cantar. Foi só piano e voz, quase que saiu de primeira. Tudo muito rápido e franco, como minha amizade com Geraldinho. <strong><em>Eu vou te amar</em></strong> está só no CD.</p>
<p><strong><em>Amor de índio</em></strong> (Beto Guedes) é profunda, uma música que diz o que eu gostaria de dizer todos os dias. É de uma intensidade tão grande que pode ser chamada de esotérica, vanguardista, espiritual até. Diante de tantos elementos, o arranjo tinha que ser simples. A viola de Manassés bastou para conduzir o <strong><em>Amor de índio</em></strong>.</p>
<p>A presença de Macalé no disco não poderia ser convencional, <strong><em>Encanto</em></strong>, se apresenta sob forma de vinheta. É a música de varanda que transcende aos padrões, que tem a pretensão de explicar o que é encanto. Encanto é coisa que delicia. E <strong><em>Encanto</em></strong>, quanto disco, foi trabalhoso e cativante. Cada um sabe dos encantos que possui. Esse é o meu.</p>
<p>&nbsp;</p>
<p><em>Elba Ramalho</em></p>
<p><em>Maio/92</em></p>
',
'sbr_disco' => '<p>Polygram 512.416-2<br />
Lan&ccedil;amento: maio de 1992</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Produzido por Elba Ramalho e Marcos Farias<br />
Dire&ccedil;&atilde;o art&iacute;stica: Mayrton Bahia<br />
Produzido por Mazzola nas faixas &ldquo;Flora&rdquo;, &ldquo;S&atilde;o Jo&atilde;o na estrada&rdquo; e &ldquo;Cidad&atilde;o&rdquo;<br />
Assistente de produ&ccedil;&atilde;o: Ant&ocirc;nio Foguete<br />
Produ&ccedil;&atilde;o executiva: Fatinha<br />
Assistente de produ&ccedil;&atilde;o: Rog&eacute;rio Trindade<br />
Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Jos&eacute; Celso Guida<br />
Coordena&ccedil;&atilde;o de produ&ccedil;&atilde;o: Maria Helena<br />
Arregimentadores: Fatinha, Moema, Alexandre e Barney<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: M&aacute;rcio Gama, Marcelo Saboia e Marcos Saboia<br />
Assistentes de est&uacute;dio: Geraldo, Lowd, Pimpa e Josino<br />
T&eacute;cnicos de mixagem: Marcelo Saboia, Marcos Saboia, Mazzola e Marcos Farias<br />
Montagem: Ant&ocirc;nio Barrozo<br />
Corte: Jos&eacute; Ant&ocirc;nio<br />
Supervis&atilde;o t&eacute;cnica: Paulo Succar</p>
<p>&nbsp;</p>
<p>Projeto gr&aacute;fico: Arthur Fr&oacute;es<br />
Concep&ccedil;&atilde;o visual: Elba Ramalho<br />
Fotos: L&iacute;vio Campos<br />
Assistente: M&ocirc;nica<br />
Produ&ccedil;&atilde;o visual: Marco Napole&atilde;o<br />
Make-up: Elba Ramalho<br />
Arte: Ayssa Bastos e Vanessa Duran</p>
<p>&nbsp;</p>
<p>Agradecimentos especiais: Nelson Motta, Mayrton Bahia, Jos&eacute; Celso, Carl&atilde;o, Margareth Menezes, Moraes Moreira, Saul Barbosa, Jaime Sodr&eacute;, Robertinho de Recife, Luizinho Avellar, Geraldo Azevedo, Pippo Spera, Jards Macal&eacute;, Marcos Farias, Fernando Moura, Jamil Joanes, Elber Bedaque, Manass&eacute;s, Repolho, Marcelo Neves, Jussara, Betina, Fatinha, Rog&eacute;rio e Lu&atilde;.</p>

<p>Elba Ramalho/92<br />
</p>
',

'slug' => 'encanto',

'foto_fundo' => 'elba_album_14.jpg',
'capa_disco' => 'cd14.jpg',
'capa_sm' => 'cd14-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Devora-me',
'ano' => '1993',
'release' => '<p>Se não bastasse ser popular brasileira, Elba agora é mais do que nunca popular sem fronteiras. Elba é definitivamente mundial. Numa das vozes mais abençoadas de sensualidade e pulsação <em>brasilis</em>, se faz esquina onde se esbarram e trocam uma ideia o frevo e o merengue, o afoxé e o reggae, o chorinho e a rumba, o forró e o rock, a gafieira e o terreiro, o samba e a salsa, a América Latina e o caboclo Brasil, os cinco continentes em um só.</p>
<p>Palco iluminado de uma voz nobre de simplicidade, que faz pular, faz pensar, a música de Elba Ramalho ensina a sonhar com a união das diferenças, tal como a sua combinação alucinante de ritmos.</p>
<p>Elba Ramalho é um prazer que pode ser experimentado e exaltado em todos os seus discos. Discos de garra, força, suor eletrizante e ternura feroz de uma cantora vendaval. Um vendaval que derrubou num só golpe de paixão o produtor porto-riquenho Glenn Monroig.</p>
<p>A soma do sol da Paraíba com o sol do Caribe resultou no azul quente de <em>Devora-me</em>, um disco que é um mergulho singular na ampla varanda musical de Elba. Gravado no La Mezza Luna, em Porto Rico, e na Polygram (coro, percussão e a voz de Elba), a antropofagia do título é a celebração da cantora à sua música e o desejo mágico de entrega total a seu público. Ritual de ritmos.</p>
<p><em>Devora-me</em> é a síntese perfeita da energia ELBrasileira com a alquimia sonora de Monroig, que foi buscar nas raízes caribenhas e na cultura musical centro-latina o <em>merengue apambichao</em> (um dos ritmos mais antigos do mundo, da ilha de San Domingo), o <em>songo</em> (cubano), a <em>salsa bomba</em> (porto-riquenha), etc.O resultado? Só ouvindo o disco. Mas não procure referências, Elba Ramalho catalisa e devora tudo, brotando daí uma única definição – é Elba.</p>
<p><em>Cora, coração (Corazón)</em> abre o disco com um quase rap (você tem que saber o que é <em>rhythnandpoesy</em>!), com o refrão-título da música banhado por uma base rítmica latina irresistível. A composição é de Monroig, que ganhou versão para português de Cláudio Rabello. Glenn entrega de bandeja para a interpretação vulcânica de Elba mais duas canções – <em>Força interior (Fuerza interior)</em>, ao lado do compositor Luna, e versão de Rabello, e a <em>bossamba</em> (mais uma das misturas/definições de Glenn) “Desesperada (Desesperado)”, em parceria com Mark Spiro e KC Porter, versão de Ronaldo Bastos.</p>
<p>A melodia de <em>Devora-me outra vez (Vem devorameotravez)</em>, de Palmer Hernandez, versão de Fausto Nilo, reúne num clima flamenco um refrão embebido de <em>salsamba</em> e uma letra pra lá de quente. Um sucesso certo. <em>Magalenha</em>, do mestre dos timbaus Carlinhos Brown, é o que se segue e arrasa! A música é uma mistura de forró capeta com um arranjo de metais tipicamente latino que explode em animação. O <em>sambôngue</em> (lá vem Glenn de novo com suas misturas) de <em>Ouro</em>, uma mescla de samba-reggae com <em>bomba</em>, de autoria de Armandinho e Fausto Nilo, é irrequieto. É ElbaRamalho como <em>Porto Seguro</em>, de Durval Lelys, que desce mansinho no ouvido, é um mexe-mexe romântico delicioso. Haja cintura!</p>
<p><em>Indiado</em> é um baião <em>pop music</em> de Carlinhos Brown. <em>Trampolim</em>, uma delicada composição de Ary Sperling e Cláudio Rabello, traz uma Elba envolta em cordas e com um solo singelo de acordeom. Simplesmente belo! O forró volta com Assisão em <em>Eu quero meu amor</em>, um desafio para quem quer ficar parado. Não dá! <em>Eu sou o carnaval</em>, do repertório genial de Moraes Moreira, ganhou na voz de Elba Ramalho uma levada diferente e bela.</p>
<p><em>Devora-me</em> fecha com <em>Coração da gente</em>, de Nando Cordel e João Wash, um <em>tropi-caliente</em> para devorar de vez os pés, os quadris, a cabeça e a alma. Salve Elba!</p>
<p><em>Devora-me</em> é uma grande festa. Uma festa mágica de saudação ao ritmo, à própria música. Um disco elegante e sinuoso como a própria artista Elba. Artista que não se repete. Olha para o futuro. E o futuro da música é sempre se misturar cada vez mais. Expandir fronteiras. Expandir o próprio músico. Remexer as raízes para nascer novidade. E Elba é insaciável nesse devorar de novas ideias. Brasileira, sim senhor! Mas sem fronteiras!</p>
<p>&nbsp;</p>
<p><strong><em>Murillo Sant’Iago</em></strong></p>
<p><em>(dezembro de 93)</em></p>
',
'sbr_disco' => '<p>Polygram 519.901-2<br />
Lan&ccedil;amento: novembro de 1993</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Produzido por Glenn Monroig<br />
Dire&ccedil;&atilde;o art&iacute;stica: Max Pierre<br />
Orquestra&ccedil;&otilde;es adicionais: Frankie Su&aacute;rez<br />
Gravado em La Mezza Luna, Puerto Rico por Glenn Monroig, Efraim de Luna e Frankie Suarez<br />
Coro, percuss&atilde;o e voz de Elba gravados na Polygram/Brasil por Mario Jorge e Jairo Gualberto<br />
Assistentes: Julio Martins, Everaldo, Billy e Claudinho<br />
Coordena&ccedil;&atilde;o de produ&ccedil;&atilde;o: Jos&eacute; Celso Guida<br />
Assistentes de produ&ccedil;&atilde;o: Fatinha e Maria Helena<br />
Arregimentador: Jorginho<br />
Mixado em Castle Oaks, Calif&oacute;rnia<br />
Por Moogie Canazio<br />
Assistente: Luiz Quine<br />
Nas faixas &ldquo;Cora&ccedil;&atilde;o da gente&rdquo; e &ldquo;Eu quero meu amor&rdquo; produzido por Julinho Teixeira<br />
E mixado no est&uacute;dio Sigla por Jorge &ldquo;Gordo&rdquo; Guimar&atilde;es<br />
Corte: Sonopress / Oswaldo e Orlando</p>
<p>&nbsp;</p>
<p>Concep&ccedil;&atilde;o de capa e dire&ccedil;&atilde;o de arte: Geraldo Alves Pinto<br />
Fotos: Milton Montenegro<br />
Produ&ccedil;&atilde;o visual: Yam&ecirc; Reis<br />
Maquiagem: Dudu<br />
Arte: Ayssa Bastos e Juliana Ribeiro Rocha<br />
</p>
',

'slug' => 'devora_me',

'foto_fundo' => 'elba_album_15.jpg',
'capa_disco' => 'cd15.jpg',
'capa_sm' => 'cd15-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Paisagem',
'ano' => '1995',
'release' => '<p>Há uma espécie de alegria nas estradas, nos desertos, nas trovoadas. Há uma espécie de desafio na flor branca do mandacaru, e de atrevimento no mato-pasto que cobre a caatinga com as primeiras chuvas. Há uma espécie de alegria na pedra.</p>
<p>Há uma espécie de tristeza nos chocalhos que se ouve no sertão. Que a gente ouve mas não sabe de onde vem; e que finca o sertão na gente. Eu ouvi isso em Metéora, na Grécia, e não sabia se vinha de mim ou das montanhas. É uma espécie de suspiro, de pontuação do planeta.</p>
<p>Esses chocalhos definem uma <em>paisagem</em>. <em>Paisagem</em> que vem pelo ouvido. Que passa da terra pra gente pelo som. É assim a carreira de <strong>Elba</strong>: de terra e sons.</p>
<p>Sons que, do fundo da dureza e da força de horizontes que nunca se acabam - horizontes que só na as imensidões do Nordeste tem - fazem como que pontos. Um ponto aqui. Um eco acolá. Como cancelas. Cancelas que cortam cercas, abrem caminhos, e espalham <em>paisagem</em> por todo canto. E espalham <em>paisagem</em> em cantos que possam contê-la e suportá-la.</p>
<p><em>Paisagem</em> menos de coisa e feitio; <em>paisagem</em> que se sabe a som e cor: amarelos, encarnados, azuis.</p>
<p>É assim o disco de <strong>Elba</strong>: de amarelos, de encarnados, de azuis.</p>
<p>E <em>paisagem</em> é coisa efêmera, palavra de feminino. Feminino e singular, como o disco de <strong>Elba</strong>.</p>
<p>No meio da <em>paisagem</em> de som que se sabe trovoada, alguns versos são como estandartes, os estandartes de que eu tanto gosto:</p>
<p>&nbsp;</p>
<p><em>"A dor da gente é dor de menino acanhado"</em></p>
<p><em>&nbsp;</em></p>
<p><em>"... no cabo da minha enxada não conheço coroné"</em></p>
<p><em>&nbsp;</em></p>
<p><em>"A beira da sua anágua/ na poça d&#039;água molhou/ ao chover de madrugada/ foi o dia que chegou/ Na sola do seu sapato/ mina água, nasce flor"</em></p>
<p><em>&nbsp;</em></p>
<p>No meio da <em>paisagem</em> a gente vê se metamorfosearem palavras estrangeiras em coisas do sertão e coisas do sertão virarem mundo. <strong>Elba</strong> canta o sertão com sentido de mundo. E cada vez melhor.</p>
<p>Quando <strong>Elba</strong> me pediu para escrever o release de seu novo disco, só Goethe pôde me livrar da aflição que me invadiu por ter que dizer o que ela canta. Ele tem uma definição da arte que revela o movimento típico e definidor dos nordestinos que tiram alegria e música do árido chão de nossa existência:</p>
<p>&nbsp;</p>
<p><em>"A arte não é poder, é consolo".</em></p>
<p>&nbsp;</p>
<p><strong>Elba</strong> é assim.</p>
<p>&nbsp;</p>
<p><strong>Moacyr Góes</strong></p>
<p>abril/95</p>
',
'sbr_disco' => '<p>Polygram 528.117-2<br />
Lan&ccedil;amento: maio de 1995</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Dire&ccedil;&atilde;o art&iacute;stica: Max Pierre<br />
Uma produ&ccedil;&atilde;o Polygram dirigida por Guto Gra&ccedil;a Mello, Julinho Teixeira e Netinho<br />
Gravado nos est&uacute;dios: Cia dos T&eacute;cnicos/RJ, Mega/RJ, Mosh/SP e WR/Salvador/BA<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: Sergio Ricardo, Primo, Ronaldo Lima, M&aacute;rio Jorge Bruno, Claudio Farias e Eduardo Chermont<br />
Auxiliares de grava&ccedil;&atilde;o: Shane, Aur&eacute;lio, Sandro, Magro, Filet, Guto, Marcos e Delanir<br />
T&eacute;cnicos de mixagem: Flavio Sena, Mario Jorge Bruno e Mario Jorge &ldquo;Gordo&rdquo; (na faixa &ldquo;A massa&rdquo;)<br />
Arregimenta&ccedil;&atilde;o: Barney<br />
Assistentes de produ&ccedil;&atilde;o: Fatinha e Marcelo Szabo</p>
<p>&nbsp;</p>
<p>Fotos: M&aacute;rcia Ramalho<br />
Assist&ecirc;ncia de fotografia: Felipe Reinheimer<br />
Produ&ccedil;&atilde;o visual: Ton Hyll e Elba<br />
Maquiagem: Ton Hyll<br />
Design: Fernando Alvarus<br />
Dire&ccedil;&atilde;o de arte: G&ecirc; Alves Pinto</p>
<p>&nbsp;</p>
<p><strong>TEXTO ORIGINAL DO LP</strong></p>
<p>Meu muito obrigada a todos que contribu&iacute;ram neste trabalho maravilhoso. Agradecimentos especiais aos m&uacute;sicos, produtores, Polygram (Max &amp; Cia.), &agrave; minha gente da Acau&atilde; (Carl&atilde;o &amp; Cia.), &agrave; minha amiga Margareth Menezes, Moraes Moreira, Nena, ao Marcelo (pelas dicas e paci&ecirc;ncia!) e ao meu filho Lu&atilde;.</p>
<p>&nbsp;</p>
<p>Com saudade, mas com a certeza de que ela est&aacute; num plano muito melhor, dedico estas can&ccedil;&otilde;es &agrave; minha m&atilde;e. Muita luz, paz e amor para todos.</p>
<p>&nbsp;</p>
<p>&ldquo;Servir &eacute; a tarefa das grandes almas&rdquo;.</p>
<p>&nbsp;</p>
<p>Elba Ramalho / 95<br />
</p>
',

'slug' => 'paisagem',

'foto_fundo' => 'elba_album_16.jpg',
'capa_disco' => 'cd16.jpg',
'capa_sm' => 'cd16-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Leão Do Norte',
'ano' => '1996',
'release' => '<p><strong>Elba Ramalho: Leão do Norte</strong></p>
<p>&nbsp;</p>
<p>Elba Ramalho é a única cantora brasileira capaz de encarar com sabedoria, competência e sensibilidade um projeto como este. A verdade do nordeste corre no sangue dessa paraibana arretada e abraça o Brasil pela sua voz.</p>
<p>Neste significativo álbum em sua carreira, ela vai fundo na obra de personagens de épocas diversas, responsáveis pela grandeza da música nordestina. Da mesma maneira que algumas dessas canções ainda podem estar se sedimentando, pois seus autores estão em plena produtividade, outras foram embaçadas pelo tempo, mas não se desligaram dos alto-falantes internos que ressoam na memória de muitos de nós. Elas representam o extrato, a fina flor da obra desses eméritos criadores do canto popular nascidos na região.</p>
<p>São os compositores ouvidos há anos nas rádios do Maranhão, Ceará, Paraíba, Pernambuco, Bahia, nos auditórios das rádios cariocas, nos discos de 78 das eletrolas, nos LPs dos toca-discos e mais recentemente nos CDs dos players dos anos 90, nas FMs e MTVs. E durante anos ouvidas também nas festinhas, festonas e festejos, nos espetáculos, arrasta-pés,forrós, bailões, bares e barbearias, sorveterias e parquinhos, enfim, em todos os espaços coletivos ou individuais, onde a música tem um papel vital na celebração, no prazer, ou simplesmente na contemplação.</p>
<p>Foram eles, os compositores nordestinos, o ponto de partida do projeto. Sua obra foi esmiuçada até se chegar a um conjunto representativo para o perfil esfuziante da grande estrela, a intrépida Elba Ramalho. <em>Leão do Norte</em>, é pois, nos limites de um CD, uma antologia da música popular do nordeste dos últimos 50 anos.</p>
<p>&nbsp;</p>
<p><strong>Chico César (1964)</strong></p>
<p>Em São Paulo, onde está desde 1985, o paraibano de Catolé do Rocha, Chico César, além de agitar os shows que conquistaram paulatinamente a moçada, participou de alguns festivais, onde nem sempre sua originalíssima proposta sonora e visual foi captada pelos jurados. A exceção é o Festival de Avaré, onde conquistou vários prêmios: segundo lugar com <em>Dança</em> em 1992, e o de melhor letra com o aboio <em>Béradêro</em>, terceira colocada, em 1991. O saudoso crítico Edmar Pereira seduziu-se com Chico César, sendo o primeiro jornalista do sul do país a saudá-lo em 1991 no Jornal da Tarde com “letrista que revela extraordinária agilidade verbal, da qual nenhum compositor de sua geração sequer se avizinha, compondo com uma exemplar economia de palavras, característica do grupo Jaguaribe Carne (que ele integrou em João Pessoa), influenciado pelos poetas concretistas da Semana de 22. Neste ano de 96 seu trabalho, tudo indica, ganha finalmente a merecida projeção nacional, reconhecendo-se em Chico César a maior revelação da música nordestina nesta década.</p>
<p>&nbsp;</p>
<p><strong>Luiz Gonzaga (1912-1989)</strong></p>
<p>O patriarca da música nordestina foi um dos mais profundamente identificados com seu povo. Sob sua influência incomparável, estão abrigados quase todos os músicos e cantadores do Nordeste, que veem Gonzaga como seu grande mestre, responsável direto pela vida artística que decidiram levar, e mais tarde, pelos ensinamentos, que lhes deu o sentido do autêntico utilizado em suas obras. Gonzaga foi o Rei do Baião, o pai dos sanfoneiros, o grande herói musical do Nordeste, despertando para a música dessa região a admiração incondicional dos outros estados do país. Ao lado de Pixinguinha, que o antecedeu, e Tom Jobim, que veio depois, Luiz Gonzaga forma o tripé básico da história da música popular brasileira. Teve dois parceiros de marcante expressão: Zé Dantas e Humberto Teixeira, com quem compôs a maioria dos clássicos de sua admirável obra. <em>Estrada do Canindé</em>, uma das obras primas da dupla, foi gravado em dezembro de 1950, num disco de 78 rotações lançado em março do ano seguinte, e foi a eleita por Elba para reverenciar seu mestre.</p>
<p>&nbsp;</p>
<p><strong>Capiba (1904-1997)</strong></p>
<p>Embora tenha uma vastíssima obra, em boa parte instrumental, embora tenha sido pianista e fundador da célebre Jazz Band Acadêmica de Recife, Capiba não estudou música. Desde 1931 seus versos e melodias fazem parte do que se canta e dança no estado de Pernambuco, principalmente durante o carnaval. Dotado de grande energia, espalhou suas atividades artísticas em todas as direções incluindo a de cantor apesar de problemas de foniatria. Mas foi como compositor que Capiba se tornou um símbolo, um monumento vivo da cidade de Recife, da música pernambucana, e em consequência, do frevo. <em>Maria Bethânia</em> e <em>A mesma rosa amarela</em>, dois sucessos nacionais de Capiba, são de certa forma exceção nas suas composições, quanto ao gênero. O frevo domina sua obra, e um dos mais inspirados é <em>Oh! Bela</em>, que surgiu em 1970 e até hoje é uma mola propulsora nos carnavais de Pernambuco.</p>
<p>&nbsp;</p>
<p><strong>Lauro Maia (1913-1950)</strong></p>
<p>Certamente o mais ilustre compositor cearense de seu tempo, Lauro Maia era advogado, foi diretor da Ceará Rádio Clube, grande em diferentes gêneros musicais, além dos ritmos nordestinos. Entre 1945 e 1950, quando morava no Rio, atuando eventualmente como pianista, teve músicas incluídas no repertório de Orlando Silva, Carmélia Alves e Ciro Monteiro, e especialmente do conjunto Quatro Azes e um Curinga, cinco cearenses que tiveram enorme popularidade nessa época, e foram responsáveis pela divulgação de sua obra. Começando por <em>Eu vi um leão</em> (1942), seguido de <em>Trem de ferro</em> (1944), <em>Eu vou até de manhã</em> (1945), considerado a primeira gravação de um ritmo criado por dois compositores dos Vocalistas Tropicais, o balanceio. Aconselhado por Dorival Caymmi, Lauro Maia resolvera investir nesse novo ritmo, um baião com ares de sertanejo, que acabou carimbando seu trabalho como compositor nordestino. Elba convidou o excelente grupo Boca Livre para recriar o balanceio de Lauro Maia como no original, com um conjunto vocal.</p>
<p>&nbsp;</p>
<p><strong>Rosil Cavalcanti (1913-1968)</strong></p>
<p>O criador do popularíssimo programa de rádio de Campina Grande, <em>O forró de Zé Lagoa</em>, que permaneceu 22 anos nas rádios Cariri e Borborema, foi uma das personalidades mais queridas em sua região. Rosil tomava partido político em favor dos pobres, fazia denúncias, criava personagens e divulgava os artistas populares, cordelistas, sanfoneiros e cantadores. Tornou-se conhecido como compositor principalmente através de Jackson do Pandeiro, com quem formou em 1942 a dupla Café com Leite, que se apresentava na Rádio Tabajara de João Pessoa, e se desfez quando Jackson foi para Recife. Rosil foi para Campina Grande, mas ambos mantiveram a ligação através de suas criações, de fundamental importância no repertório de Jackson, como o clássico <em>Sebastiana</em>. Ambos só tocavam instrumento de percussão, e faleceram no mesmo dia 10 de julho, com 14 anos de diferença.</p>
<p>&nbsp;</p>
<p><strong>Antônio Barros (1930) e Cecéu (1950)</strong></p>
<p>Nascido em Campina Grande, Antônio começou a compor em 1953, vendo gravadas suas primeiras músicas por Genival Lacerda e Jackson do Pandeiro em 57. Morou em Recife nos anos 60 e no Rio nos 70, onde conheceu Cecéu, sua companheira de vida e de música, formando até a dupla Tony e Mary com um LP. Um legítimo representante do mais puro forró nordestino com agudo poder de observação, Antônio Barros obteve sucesso nacional na década de 70, a partir de <em>Procurando tu</em>, gravada originalmente pelo Trio Nordestino e logo em seguida, em mais de 30 regravações que hoje chegam perto de uma centena. Sua obra começa a ser gravada por Elba Ramalho em 82, com o estouro de <em>Bate coração</em> e <em>Amor com café</em>, recolocando-o na parada apenas um ano depois de <em>Homem com H</em>. Para esta antologia, ela escolheu <em>Xodó beleza</em>, de 87, lembrando o tempo da inocência do namoro no portão.</p>
<p>&nbsp;</p>
<p><strong>Jackson do Pandeiro (1919-1982)</strong></p>
<p>Até hoje não surgiu na música brasileira alguém com tamanha capacidade de invenção rítmica como o paraibano José Gomes Filho, o admiradíssimo cantor e ritmista Jackson do Pandeiro. Seu balanço contagiante foi recheado de instintivas invenções enriquecedoras sob as mais diversas formas: retardos e antecipações, redobradas e desdobradas, contrações, breques, acentuações, pausas, pontuações, ligaduras, enfim novos desenhos rítmicos inexistentes nos originais, proporcionando uma aula de interpretação sincopada em cada música das que deixou gravadas. Com Luiz Gonzaga forma a dupla mais admirada e influente da música nordestina, um grande contraste com a inacreditável humildade que pautou sua vida artística. Foi ainda um <em>showman</em> inigualável com seu “lenço da sorte” no pescoço, o chapeuzinho de banda e os passos e umbigadas que faziam o povo gargalhar. Jackson foi realmente um tipo único que enchia de alegria e prazer quem o visse no palco. Viveu grande parte de sua vida no Rio de Janeiro, sempre muito solicitado para gravações, mas como pandeirista, uma pequena parcela de sua estrutura como artista. Como compositor, teve em Rosil, amigo e companheiro musical, seu parceiro mais frequente. <em>Na base da chinela</em>, que ele próprio já gravara, e com o qual Elba homenageia mais uma vez um de seus maiores ídolos, representa bem o talento dessa dupla do barulho, Jackson e Rosil.</p>
<p>&nbsp;</p>
<p><strong>Luís Bandeira (1923-1998)</strong></p>
<p>Como tantos outros talentos que trabalharam na Rádio Clube de Pernambuco nos anos 40, o recifense Luís Bandeira foi ativo radialista como violonista, radioator e integrante do conjunto vocal Garotos da Lua. No Rio, desde 1950, onde também atuou em rádio, foi cantor, realizando uma carreira paralela como compositor iniciada em 51. São de sua autoria <em>O apito no samba</em>, frevos como Carabina, do repertório da Orquestra Tabajara e parcerias com Luís Vieira e João do Vale. Nos anos 60, fez parte da Caravana da Música Popular Brasileira criada por Humberto Teixeira, e que promoveu a música popular no exterior. <em>Onde tu tá, neném</em> foi gravado por Luiz Gonzaga em 1977.</p>
<p>&nbsp;</p>
<p><strong>Luiz Vieira (1928)</strong></p>
<p>Ainda menino, o pernambucano Luiz Vieira veio para o Rio, iniciando-se como cantor com menos de 20 anos, ao ingressar em rádio, na área de programas dedicados aos nordestinos. Atuou como cantor e apresentador sucessivamente na Rádio Tupi, TV Tupi, TV Record e TV Excelsior, onde seu show semanal ao vivo, com plateia, teve popularidade nacional. Com isso, suas composições foram bastante divulgadas, e canções como <em>Inteirinha</em>, <em>Menino de Braçanã</em>, <em>Menino passarinho</em> e <em>Paz do meu amor</em>, baiões como <em>Paroliando</em>, e toadas como <em>Os olhos do menino</em>, tornaram-se clássicos que ganharam outras interpretações gravadas. Luiz também gravou-as, mais de uma vez até, bem como as brilhantes parcerias que fez com João do Vale: <em>Na asa do vento</em> e <em>Maria Filó</em>.</p>
<p>&nbsp;</p>
<p><strong>João do Vale (1934-1996)</strong></p>
<p>O notável autor de <em>Carcará</em> é um homem rude, sofrido e sensível além de um dos mais emocionantes observadores da paisagem e da vida nordestina. Maranhense, trabalhou em empregos braçais, ao mesmo tempo que temperou sua atividade artística com uma comovente produção do mais elevado nível. Depois de sua atuação no show <em>Opinião</em> (1964) ao lado de Nara Leão e depois Maria Bethânia, começou a ser reconhecido no país através de sua voz tosca, fora do tom por vezes, mas com uma brutal carga de realismo. Sua obra é simplesmente magnífica, reconhecida pelos maiores artistas brasileiros que já participaram de dois discos seus como convidados. Entre esses admiradores incondicionais estão Chico Buarque, Tom Jobim, Paulinho da Viola, além do Nordeste em peso, é claro. Elba escolheu <em>Estrela miúda</em>, uma parceria com Luiz Vieira, gravada pela primeira vez em 1953 por Marlene, num disco onde seu nome foi grafado João Vales.</p>
<p>&nbsp;</p>
<p><strong>Nelson Ferreira (1902-1976)</strong></p>
<p>Tem o perfil da maioria dos clássicos compositores de frevo pernambucano, pois, estudou música, tocou em orquestra, e consequentemente, escreve o que cria. Respeitadíssima personalidade no Recife, onde atuou como líder/arranjador/diretor de rádio desde os anos 20, Nelson é o patrono de uma geração de chefes de orquestra e arranjadores responsáveis pela qualidade e abundância de composições de cunho instrumental de Pernambuco e estados vizinhos. Essa obra que o sul do país conhece vagamente é a essência do frevo, uma forma musical contagiante, cuidadosamente elaborada sobre princípios técnicos, regravada nesta antologia por uma sequência de quatro exemplos. <em>Evocação número 1</em> foi um retumbante sucesso carnavalesco em 1957, embora mal gravado tecnicamente na Mocambo. Nada disso impediu que o frevo passasse a ser quase um hino com suas evocações que sensibilizam quem já foi arrastado alguma vez pelo frevo em Olinda ou no Recife.</p>
<p>&nbsp;</p>
<p><strong>Antonio Maria (1921-1964)</strong></p>
<p>Muito mais conhecido como autor dos sambas-canções que embalavam a intensa vida noturna das boates do Rio de Janeiro nos anos 50; como aguçado e badalado cronista da talentosa imprensa carioca da época; ou ainda como radialista ligado ao futebol, o Menino Grande, Antonio Maria, também compôs frevos. Três apenas, e com o mesmo título, diferindo apenas pelos números: 1, 2 e 3 do Recife. Maria viveu intensamente os quarenta e poucos anos de sua vida, deixando uma obra marcada pelo decantado período das músicas compostas à mesa do bar. Veio ao Rio pela primeira vez para morar na companhia de outros pernambucanos, os “exilados nordestinos” que começavam, Fernando Lobo, Augusto Rodrigues, Teófilo de Barros Filho e Abelardo Chacrinha Barbosa, também quatro expoentes. Sua obra confessional é recheada de clássicos: <em>Manhã de carnaval</em>, <em>Ninguém me ama</em>, <em>Valsa de uma cidade</em>, <em>Suas mãos</em>. O <em>Frevo número 1 do Recife</em> foi gravado pelo Trio de Ouro em 1951.</p>
<p>&nbsp;</p>
<p><strong>Carlos Fernando (1942-2013)</strong></p>
<p>Um dos compositores de frevo da nova geração, Carlos Fernando iniciou-se na música fazendo letra para <em>Aquela rosa</em>, em parceria com Geraldo Azevedo e arrebatando o Festival do Norte/Nordeste em 1967. Depois juntou-se também com Alceu, vindo gradativamente os três para o Rio entre 68 e 73. Mas foi nos anos 80 que ele se projetou como compositor e produtor através da vitoriosa série de discos de frevo <em>Asas da América</em>, que já chegou a 7 volumes. Nela foram reunidos medalhões e iniciantes na interpretação de frevos clássicos do passado e outros compostos especialmente para os discos. Carlos Fernando está no repertório de Elba desde seu primeiro LP em <em>Canta coração</em> (parceria com Geraldo), tendo tido seu maior êxito com <em>Banho de cheiro</em> em 83. <em>Sou eu teu amor</em> (parceria com Alceu) faz parte do volume 1 de <em>Asas da América</em> (1979) e é uma gravação histórica, pois reúne Gilberto Gil e Jackson do Pandeiro, em seu único encontro em disco.</p>
<p>&nbsp;</p>
<p><strong>Lenine (1959)</strong></p>
<p>Seu tipo físico não é o que se espera de um pernambucano, loiro, de olhos verdes; mas sua música vigorosa é profundamente enraizada nos folguedos nordestinos – maracatu e caboclinhos. Começou a compor em 75, e desde que veio para o Rio, com 20 anos, foi paulatinamente sendo reconhecido como um dos melhores compositores do Nordeste em sua geração. Seus primeiros discos, em 83 e 84, não obtiveram grande repercussão, mas o que realizou com Marcos Suzano deixou bem nítido o estilo e a originalidade de seu trabalho, rendendo-lhes uma participação no <em>Free Jazz</em>. É nesse CD, <em>Olho de peixe</em>, que está <em>Leão no norte</em>, escolhida pela leonina Elba como uma das músicas que melhor representa os mais novos compositores do nordeste. É também o título desta antologia, remetendo ao estado de Pernambuco, ao símbolo totêmico do grupo de maracatu (ou Nação Africana) Leão Coroado, fundado em 1863.</p>
<p>&nbsp;</p>
<p><strong>Dominguinhos (1941-2013)</strong></p>
<p>Com sua voz doce e serena, sua sanfona suave eximiamente tocada, Dominguinhos sempre foi um artista que falou direto ao coração de sua gente. Trata a melodia com delicadeza, canta com respeito sem querer competir com o compositor, que pode até ser ele. Num forró tem um <em>punch</em> irresistível. Natural de Garanhuns, ele teve anos de estrada como músico de baile, dos grandes regionais do Rio desde os anos 60, quando começou a gravar a imensa série de discos sob seu nome. Foi reconhecido nacionalmente com <em>Eu só quero um xodó</em>, lançado por Gil em 73. Dominguinhos é um frequentador assíduo do repertório de Elba Ramalho desde <em>De volta pro aconchego</em> (1985). Nesta antologia, uma das duas músicas inéditas, com destino traçado: <em>A paisagem</em>, parceria com Manduka.</p>
<p>&nbsp;</p>
<p><strong>Dorival Caymmi (1914-2008)</strong></p>
<p>A naturalidade parece ser o que Caymmi mais buscou e alcançou em suas cento e poucas composições, que representam o conjunto mais condensado de obras primas da música brasileira. Historicamente o primeiro baiano a se consagrar no sul, Caymmi é o charme personificado, o homem sábio que não abre mão da sua própria velocidade para viver. Admirado e honrado no seu Brasil e no exterior, trouxe para o Rio em 1938 a sedução da Bahia através de seu canto, seu violão e suas “cançõezinhas” primorosamente simples e bem acabadas. Escolher só uma delas para uma antologia é garantia de malogro. <em>Canoeiro</em>, também intitulada <em>Pescaria</em>, é uma canção praieira gravada pelo Trio de Ouro em 1944, e sucessivamente por Caymmi (54), Marlene (58) e outros. Recebeu nesta versão de Elba um tratamento percussivo totalmente original.</p>
<p>&nbsp;</p>
<p><strong>Gilberto Gil (1942)</strong></p>
<p>Pode-se afirmar que Gilberto Gil é hoje o mais completo artista vivo da música brasileira. Superdotado para a arte, de uma musicalidade estonteante, Gil é um caso raro, não se podendo dizer quem é o melhor, o compositor, o letrista, o cantor, o violonista, o arranjador ou o performer. Vejo para o sul em 65 para se consagrar em três tempos, formando com Chico e Caetano o triunvirato máximo dos anos 60, em admirável produção ininterrupta há mais de 30 anos. A música de Gil em <em>Leão do Norte</em> é sua única parceria com Luiz Gonzaga. Em 1986, Gonzaga convidou vários artistas para comemorar seu 73º aniversário com uma festança em Exu. Na véspera tocou para Gil um requintado choro seu, gravado em fevereiro de 1953 no lado B de <em>O xote das meninas</em>. À noite, Gil fez uma letra saudando Gonzaga e deu-lhe de presente no dia seguinte, comemorando com música o 13 de dezembro. Dez anos depois é que <em>Treze de dezembro</em> é gravado pela primeira vez com letra, e a participação muito especial do decano regional Época de Ouro, valorizando ao máximo o maravilhoso presente que Gil deu, primeiro a Luiz Gonzaga, e agora a Elba Ramalho.</p>
<p>&nbsp;</p>
<p><strong>Caetano Veloso (1942)</strong></p>
<p>Caetano tem o grande mérito de jamais repetir uma fórmula quando faz uma nova canção. Pelo contrário, seus vôos artísticos vão em busca do desconhecido e inexplorado, movido por uma combinação de inteligência, inquietação e talento em todas as direções da arte, inclusive às que não se dedica regularmente. Desde que veio para São Paulo e depois Rio, nos anos 60, tornou-se um dos mais adorados artistas do Brasil, cativando de paixão um público heterogêneo em todos os níveis. Assim também é sua obra, múltipla e imprevisível. Elba destacou uma velha canção gravada no começo de sua carreira por Gal Costa. <em>Sim, foi você</em> é de 1965.</p>
<p>&nbsp;</p>
<p><strong>Alceu Valença (1946)</strong></p>
<p>No palco ele é um demônio. O imprevisível e divertido Alceu deixa você sem fala com suas idéias malucas que jorram em alta velocidade nas suas criações cênicas, ou suas interpretações que encarnam Jackson do Pandeiro, com quem dividiu o palco várias vezes. As composições de Alceu, quase sempre interpretadas por ele mesmo tal o cunho de personalidade que imprime, vão fundo no folclore. Contudo tem um aspecto contemporâneo, próprio de quem domina totalmente a ação de transformar uma inspiração numa obra de arte usando a linguagem de seu tempo. Um defensor destemperado do frevo, Alceu está nessa antologia logicamente na companhia dos outros pernambucanos do ritmo mais contagiante do Nordeste brasileiro.</p>
<p>&nbsp;</p>
<p><strong>Geraldo Azevedo (1945)</strong></p>
<p>Foi o primeiro dos dois que veio para o Rio em 67 para tocar violão com Eliana Pittman. Em Recife, ele e Alceu formavam uma dupla de sucesso reunida de novo em 1970 dando origem a um LP em 72. Nascido em Petrolina, o romântico Geraldinho é excelente violonista, fértil compositor, tendo a garra produzida pelas adversidades que enfrentou: a pobreza no interior de Pernambuco, e no Rio, quando atuava politicamente contra o regime militar. Sua obra esmeradamente trabalhada, se espalha num leque de ritmos do Nordeste, maracatus e frevos, xotes e forrós, baiões e toadas, canções e cantigas. Elba grava suas composições desde o primeiro disco, tendo naturalmente alguns grandes sucessos como <em>Canção da despedida</em>. Para a antologia optou por uma canção de Geraldo em parceria com o grande letrista baiano José Carlos Capinan, <em>Parceiro das delícias</em>, gravada em 1988.</p>
<p>&nbsp;</p>
<p><strong>Zé Ramalho (1949)</strong></p>
<p>Zé Ramalho é certamente o mais original personagem de sua geração na música nordestina. Sua figura messiânica encaixa-se como uma luva à voz cavernosa do fascinante declamador; com os temas apocalípticos tratados como cordel, prediletos em letras que atingem em cheio sua legião de admiradores; finalmente com a composição musical propriamente dita, calcada em andamentos agalopados e outras modalidades nordestinas perfeitamente adequadas a esse significativo conjunto do intérprete e suas músicas. Zé é de Brejo da Cruz, no interior da Paraíba, e está presente no repertório de Elba Ramalho (são primos) desde <em>Ave de Prata</em>, primeiro disco da cantora. Esse título é uma música de Zé. Igualmente foi no primeiro disco de Zé Ramalho que Elba localizou a música para <em>Leão do Norte</em>, aliás, uma canção que conhecia muito bem. Na gravação de Chão de giz (1978) o coro tinha cinco cantoras, e uma delas era Elba Ramalho.</p>
<p>&nbsp;</p>
<p><strong><em>Zuza Homem de Mello</em></strong></p>
<p><strong><em>Maio/96</em></strong></p>
<p>&nbsp;</p>
<p>Agradeço a todos que participaram deste trabalho. Músicos, técnicos, amigos... Um beijo pra Gilberto Gil, Lenine (que força, hem!?), Chico César, Zé Ramalho, Geraldo Azevedo e pro pessoal do Boca Livre (ficou lindo!).</p>
<p>Pra Dominguinhos vai um cheiro cheio de dengo.</p>
<p>Obrigada ao Conjunto Época de Ouro e aos doces meninos da Banda Pinguim de Recife. Palmas para o grande Robertíssimo de Recife, grande músico e produtor. Um beijo também pra Zuza Homem de Mello pela sua alma nordestina.</p>
<p>E a todos da BMG, pela fé.</p>
<p>Um abraço de luz pra Margareth Menezes, Fatinha, Marcelo e Luã.</p>
<p>Meu amor e alegria por estar viva e fazendo o que gosto!</p>
<p>Obrigada a Deus!</p>
<p>&nbsp;</p>
<p><strong><em>Elba Ramalho/96</em></strong></p>
',
'sbr_disco' => '<p>BMG Ariola 7.432.137.673-2<br />
Lan&ccedil;amento: maio de 1996</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Dire&ccedil;&atilde;o art&iacute;stica: S&eacute;rgio de Carvalho<br />
Produzido por Robertinho de Recife<br />
Coordena&ccedil;&atilde;o de produ&ccedil;&atilde;o: Claudia Andr&eacute;<br />
Assistentes de produ&ccedil;&atilde;o: Fatinha, Jacar&eacute; e Cassinha<br />
Grava&ccedil;&atilde;o e mixagem: Studio Lagoa/RJ<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: Leco e Robertinho de Recife<br />
Masteriza&ccedil;&atilde;o: Vison/Magic Master (Ch&atilde; de giz)</p>
<p>&nbsp;</p>
<p>Capa: Luiz Stein<br />
Fotos: Ernesto Baldan<br />
Maquiagem: Ton Hyll<br />
Assistente de arte: Daniel Souza<br />
</p>
',

'slug' => 'leao_do_norte',

'foto_fundo' => 'elba_album_17.jpg',
'capa_disco' => 'cd17.jpg',
'capa_sm' => 'cd17-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'O Grande Encontro',
'ano' => '1996',
'release' => '<p><em>O Grande Encontro</em> é na verdade mais um dos muitos encontros que Alceu Valença, Elba Ramalho, Geraldo Azevedo e Zé Ramalho tiveram ao longo de suas carreiras: encontros onde cantaram suas próprias composições, seus sucessos mais recentes, os seus rocks ou seus baiões preferidos, e aquelas canções do fundo do baú que todo mundo sabe, mas ninguém mais lembra. A única diferença é que, pela primeira vez, esse encontro se dá num palco, e não numa das incontáveis rodas de violão de que esses quatro amigos participaram ao longo de décadas de convivência e parcerias.</p>
<p>O disco registra o show realizado no Canecão, reproduz esse clima de troca de figurinhas belas e raras, essa partilha de memórias afetivas em forma de versos e melodias, e esse constante polimento que se dá às velhas canções no momento de transpô-las para um novo arranjo, um dueto vocal, uma nova harmonia da mão esquerda ou uma nova “batida” na direita.</p>
<p>Muitas linhas musicais se entrecruzam neste show-disco: não é apenas a diferença de timbres vocais.</p>
<p>O disco abre com uma canção de Luiz Gonzaga, a matriz musical unanimemente escolhida pelos quatro, mas percorre muitos outros caminhos. Vai do <em>folk-rock</em> de Bob Dylan (<em>O amanhã é distante</em>) à delicada canção urbana de Vital Farias (<em>Veja [Margarida]</em>); do rock-repente de Raul Seixas (<em>Trem das sete</em>) à nordestíssima toada de Caetano Veloso (<em>O ciúme</em>).</p>
<p>Um encontro de amigos, um sarau de reminiscências e violões, onde se recuperam canções conhecidas apenas pelos fãs mais especialistas (<em>Jacarepaguá blues</em>, <em>Talismã</em>), ao lado de sucessos unânimes, que fizeram cantar em coro milhares de pessoas por todo o Brasil, durante as temporadas do show.</p>
<p>&nbsp;</p>
<p>Alceu Valença</p>
<p>Curinga, Arlequim, Velho do Pastoril ou Saltimbanco, as mil faces de ator de Alceu Valença o fazem trocar de personagem no espaço de uma cambalhota, assumindo num instante outra cara, outro canto – que tanto pode ser um vozeirão de Vicente Celestino quanto um lamento de blues ou toada de cego. Metade clown, metade cangaceiro, Alceu se equilibra aos saltos numa corda-bamba que ele próprio vai tecendo no ar enquanto anda.</p>
<p>&nbsp;</p>
<p>Elba Ramalho</p>
<p>O recém-lançado <em>Leão do Norte</em> se firmou como o melhor disco e melhor show dos últimos anos da carreira de Elba. Maior intérprete da música nordestina depois de Marinês, Elba criou interpretações definitivas de clássicos como Luiz Gonzaga, Jackson do Pandeiro e Antonio Barros/Cecéu, além de revelar inúmeros compositores novos. E ao longo de sua carreira jamais deixou de registrar, de forma única e pessoal, as canções dos três “trovadores” que estão com ela no <em>Grande Encontro</em>.</p>
<p>&nbsp;</p>
<p>Geraldo Azevedo</p>
<p>De todos os chamados “trovadores” sertanejos do Nordeste, é o que melhor manipula o alfabeto musical da bossa-nova. O que o Zé Ramalho tem de sofridamente regional e cosmicamente roqueiro, Geraldo tem de menestrel lírico, seresteiro, tecedor de labirintos harmônicos, que se percorrem segurando a ponta do fio melódico. Suas canções têm aquela espontaneidade que só se alcança depois de muita elaboração.</p>
<p>&nbsp;</p>
<p>Zé Ramalho</p>
<p>A imprensa já o chamou de “Bob Dylan do sertão”, e em matéria de canções apocalípticas ninguém se aproximou tanto de “A hard rain’sa-gonnafall” quanto Raul Seixas e Zé Ramalho. Dylan já encarnou muitos personagens, mas o que Zé Ramalho melhor encarna é o de profeta judeu, bradando do alto da montanha de Brejo da Cruz, apontando com sarcasmo o sertão aos seus pés, mais adiante a Babilônia urbana, e no horizonte o apocalipse que se aproxima.</p>
<p>&nbsp;</p>
<p><strong><em>Bráulio Tavares</em></strong></p>
',
'sbr_disco' => '<p>BMG Ariola 7.432.141.787-2<br />
Lan&ccedil;amento: outubro de 1996</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p><strong>O SHOW</strong><br />
Ilumina&ccedil;&atilde;o: Cia da Luz<br />
Design de luz: Juarez Farinon<br />
Operador de intelabeam: Jarbas Godard<br />
Sonoriza&ccedil;&atilde;o: MAC Audio<br />
Operador de monitor: Sergio Felipe<br />
Operador de PA: Paulo Evangelista<br />
Roadie: Josino Feitosa / Carlos Santos (Bigode)<br />
Cen&oacute;grafo: Lula Martins<br />
Assistente de produ&ccedil;&atilde;o: Ana Costa (Fatinha), Maria Dantas (Bia), Francisco Herculano (Ney), Pedro Leal e Ubirajara Dornelles<br />
Produ&ccedil;&atilde;o executiva: Alexandre Valentim<br />
Realiza&ccedil;&atilde;o: Acau&atilde; Produtora, Gera&ccedil;&atilde;o Produtora, Jerimum Produ&ccedil;&otilde;es e Tropicana Produ&ccedil;&otilde;es</p>
<p>&nbsp;</p>
<p><strong>O DISCO</strong><br />
Gravado ao vivo no Canec&atilde;o/RJ em julho de 1996<br />
Produzido por Paulo Rafael<br />
Dire&ccedil;&atilde;o art&iacute;stica: S&eacute;rgio de Carvalho<br />
Engenheiro de grava&ccedil;&atilde;o: Carlos B. Ronconi<br />
Mixagem e edi&ccedil;&atilde;o: Discover<br />
Engenheiros: Fabio Henriques e Guilherme Reis<br />
Assistentes: Rodrigo e Alexandre Ribeiro<br />
Masteriza&ccedil;&atilde;o: Ricardo Garcia (Magic Master)</p>
<p>&nbsp;</p>
<p>Capa: Luiz Stein<br />
Fotos: L&iacute;vio Campos<br />
Assist&ecirc;ncia de arte: Daniel de Souza<br />
Coordena&ccedil;&atilde;o gr&aacute;fica: Emil Ferreira</p>
<p>&nbsp;</p>
<p>Agradecimentos: Paulo Tear, Luis Oscar Niemeyer, Mauro Scalabrin, Fred Schifer e toda a turma da BMG.<br />
</p>',

'slug' => 'o_grande_encontro',

'foto_fundo' => 'elba_album_18.jpg',
'capa_disco' => 'cd18.jpg',
'capa_sm' => 'cd18-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Baioque',
'ano' => '1997',
'release' => '<p><strong>Palco e estúdio – as alcovas de Elba</strong></p>
<p>&nbsp;</p>
<p>Está certo que o habitat natural de Elba Ramalho é o palco. Ela já sabia disso, quando via os reisados nos terreiros da família no sertão do Piancó, Paraíba do Norte. Basta ver a menina franzina ganhando três metros de altura e acompanhar o raio da faísca de seu olhar refletindo o refletor. A última vez em que vi assim tão confortável na própria pele postiça foi no show <em>O Grande Encontro</em>. Ela usava uma estrela na testa. Ou era a estrela que usava a testa dela, sei lá. Elba é isso: arroz de festa, quibe de quermesse – nasceu para ser notada, a exibida. Sendo abelha, o palco é a colmeia; sendo a rainha, o trono é o palco. Seus pés pisam o tablado com a intimidade difícil de se conseguir até numa alcova: muitas vezes vestida, ela está sempre nua; os sapatos que usa são ilusões de couro, pois no palco ela é toda vez a cantora descalça, e sem meias, vejam bem.</p>
<p>Pois foi do palco que ouvi a notícia de que <em>Baioque</em> – o disco, como se dizia no meu tempo (ou era LP?) ou o CD, como se diz hoje – estava em estado de gestação. Elba cantou <em>S.O.S.</em> e, de repente, eu descobri que Raul Seixas, o profeta do Apocalipse, mesmo tendo andado de carona no disco voador, nunca havia deixado o sertão da Bahia (e ainda está lá, eu juro), podendo ser, como certamente será, um artista de sucesso nas festas juninas da Campina Grande, que ela e eu tanto amamos.</p>
<p>Ao ouvir o disco, o demo, esta gíria tecnológica, que lembra nosso medo ancestral do inferno – avançando com cuidado entre surpresas e lembranças, vi-me diante da prova de que o teatro brasileiro perdeu uma atriz jeitosa, quando ela deixou a <em>Ópera do Malandro</em>. E, ao contrário do que previam os maus profetas (entre estes não estava, certamente, o Raulzito, mas, para cúmulo dos pecados, o autor destas mal traçadas linhas, sim), a canção popular ganhou uma voz definida e assumida. O lançamento de Elba Ramalho é o de sua maturidade. No palco, reina a cantriz. No CD (eu quase escrevia vinil), impera a cantora, a imperadora, capaz de retomar um sucesso antigo como a canção-título (de seu amigo Chico Buarque) e interpretá-la de um jeito novo e, mais do que novo, seu.</p>
<p>Do capítulo das lembranças consta a fortíssima <em>Vila do sossego</em>, de Zé Avôhai Ramalho Neto. Lembro-me de Elba no palco do Teatro São Pedro, na Barra Funda, em São Paulo, cantando no coro no show de lançamento daquele estrondoso sucesso do compadre nosso e primo dela. Tanto tempo faz. Melhor não contar, para não entregar nossa idade, parelha. Consta também <em>Paralelas,</em> de outro amigo comum, o “violétrico” cearense Antônio Carlos Gomes Belchior Fontenelle Fernandes. Bel escreveu a canção num tempo de dureza e a rejeitava, talvez por considera-la piegas, mas ela foi sucesso com Vanusa e será de novo com Elba. Porque merece; ao contrário do que pensava o próprio autor, é uma linda página de nosso cancioneiro popular (esta foi caprichada, hein?).</p>
<p>Ednardo, que com Rodger Rogério e Teti, era do Pessoal do Ceará, fez <em>Pavão mysteriozo</em> também como não quisesse nada, até estourar como faixa da trilha sonora da novela global <em>Saramandaia</em>. A canção, que se encerra com um verso antológico de final de romance de cordel – “eles são muitos, mas não podem voar” –, recebeu uma roupagem solene, <em>comme il faut</em>. Elba, craque em escolher repertório, também sabe, muito bem, encontrar o arranjador certo para a canção bem feita-e-eleita.</p>
<p>Como <em>Baioque</em>, <em>Os argonautas</em>, de Caetano Veloso, <em>Vamos fugir</em>, de Gilberto Gil e Liminha, entram no capítulo extra dos autores da veneração da cantora, que se enturmou na turma certa, quando pulou das tábuas do palco para o bico do laser (eu quase escrevia agulha, gente!). O repertório já dá uma ideia de antologia, que me parece ser a pretensão (no bom sentido da palavra, pessoal) da obra, como ela foi concebida. Geraldinho Azevedo comparece com <em>Tambor do mundo</em>, só porque não poderia faltar, assim como Alceu Valença, o clown do maracatu, que é parceiro do Geraldinho, mas desta vez preferiu ficar sócio do provo brasileiro (sua C<em>iranda da rosa vermelha</em> é adaptada do folclore).</p>
<p>No capítulo das surpresas, melhor dizendo, da curiosidade, que se opõe à memória, pero no mucho, a Elba, aquela do estúdio, ainda nos brinda com Lenine, que é parceiro de nosso irmão Bráulio Tavares, mas compôs mesmo <em>Relampiano</em> (que dá o toque social do acervo) foi com Paulinho Moska, que está entrando na moda (com todos os méritos, diga-se). Este é ainda o caso de <em>A música do nosso amor</em>, de Saul Barbosa e Jorge Portugal. Antes de subir de volta ao palco, com seus chinelos e seus balangandãs, a imperatriz do separatismo nordestino ataca de <em>Zanzibar</em>, escrita por Armandinho e Fausto Nilo.</p>
<p>De volta ao palco-alcova, ela reserva duas faixas para medleys. Uma é de xotes, que ela aprendeu a cantar vendo as umbigadas de Almira em Jackson de Todos os Pandeiros. Dominguinhos e Abel Silva comparecem ao forró com <em>Quando chega o verão</em>; Pedrinho e Primo, com <em>Até mais vê</em>; e Assisão, com a deliciosa, impagável, <em>Pequenininha</em>, própria para ser dançada no Parque do Povo, às margens do vazio Açude Novo, lá na Rainha da Borborema.</p>
<p>E o palco se engalana nos frevos <em>Eu também quero beijar</em> (de Pepeu, Moraes Moreira e Fausto Nilo); <em>Chão da praça</em> (de Moraes Moreira e Fausto Nilo) e a irresistível <em>Gemedeira</em> (o poema certo de Zé Carlos Capinam para a melodia endiabrada de Robertinho de Recife).</p>
<p>O que dizer? Ô, dá-lhe Elba! Olê, olê, olá. E mais: se você, como eu, pensava que a porta da alcova de Elba dá apenas para o palco iluminado, saiba que ela já frequenta a penumbra dos estúdios de gravação sem maquiagem, como se escovasse os dentes no banheiro de sua mais indevassável intimidade. Se duvidar, ouça <em>Baioque</em>. Ou então me desafie para um duelo a faca-peixeira, que eu vou convidar Zeca Tirbutina de madrinha.</p>
<p>&nbsp;</p>
<p><strong><em>José Nêumanne</em></strong></p>
<p>(paraibano do sertão do Rio do Peixe, jornalista e escritor, é editorialista do Jornal da Tarde, de Sumpaulo.)</p>
',
'sbr_disco' => '<p>BMG Ariola 7.432.147.850-2<br />
Lan&ccedil;amento: maio de 1997</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Dire&ccedil;&atilde;o: Jorge Davidson<br />
Produ&ccedil;&atilde;o: Robertinho de Recife<br />
Assistente de produ&ccedil;&atilde;o: Claudia Andr&eacute;, Fatinha e Moema<br />
T&eacute;cnico de grava&ccedil;&atilde;o: Jorge Jannarelli<br />
Mixagem: Marcos Adriano e Robertinho de Recife<br />
Assistentes de est&uacute;dio: Pinheiro e Ben-Hur<br />
Masteriza&ccedil;&atilde;o: Ricardo Garcia (Pro Master)<br />
Gravado no Studio Lagoa/RJ (mar&ccedil;o/97)<br />
Mixado no Est&uacute;dio Mega/RJ (abril/97)</p>
<p>&nbsp;</p>
<p>Capa: Luiz Stein<br />
Foto: Murilo Meirelles<br />
Styling: Rui C&ocirc;rtes<br />
Maquiagem: Ton Hyll<br />
Assist&ecirc;ncia de arte: Daniel de Souza<br />
Assist&ecirc;ncia de foto: Alex Savino<br />
Assist&ecirc;ncia de styling: Roberta Stamatto<br />
Produ&ccedil;&atilde;o de arte: D&eacute;a Dornelles Martins<br />
Produ&ccedil;&atilde;o de foto: Domingos Alc&acirc;ntara<br />
Supervisor gr&aacute;fico: Emil Ferreira</p>
<p>&nbsp;</p>
<p>Agradecimentos: Fabriciatto, Benedotti, Lygia, Durand e Sidonia Pagoni Bijuterias<br />
</p>
',

'slug' => 'baioque',

'foto_fundo' => 'elba_album_19.jpg', 
'capa_disco' => 'cd19.jpg',
'capa_sm' => 'cd19-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'O Grande Encontro 2',
'ano' => '1997',
'release' => '<p><em>O Grande Encontro 2</em> não é simplesmente uma sequência a <em>Grande Encontro</em>, lançado ano passado pela BMG. O primeiro disco tinha sido o registro ao vivo de um espetáculo que, meio que de improviso, reunira quatro artistas com trajetórias semelhantes e uma história em comum. Este agora surge primeiro como disco, para só depois ganhar forma de show. Elba Ramalho, Geraldo Azevedo e Zé Ramalho reuniram em torno de si uma constelação de músicos de primeira linha (de Robertinho de Recife a Dominguinhos) para celebrar.</p>
<p>A opção pelo disco de estúdio deu ao <em>O Grande Encontro II</em> uma textura diferente da do disco anterior, e que faz com que os dois se complementem. No primeiro é captada a energia, a espontaneidade de um show ao vivo, deixando clara a importância que tiveram esses fatores no inicio da carreira dos artistas: porque foi, por assim dizer, “no grito”, “no peito e na raça” que eles conquistaram primeiro o público nordestino e, em seguida, o resto do Brasil.</p>
<p>Este segundo disco, por outro lado, registra a evolução técnica e profissional que os artistas experimentaram ao longo destas duas décadas de atividade. A verdade é que existem cantores que se sentem mais à vontade no palco, e cantores que sentem mais à vontade no estúdio; no caso de Elba Ramalho, Geraldo Azevedo e Zé Ramalho, a carreira de cada um foi, entre outras coisas, a conquista gradual do espaço do estúdio como um laboratório de criação tão importante quanto o palco. Além de <em>O Grande Encontro II</em>, é possível ver os sinais dessa maturidade nos discos mais recentes de Elba Ramalho (<em>Leão do Norte</em> e <em>Baioque</em>), e de Zé Ramalho (<em>20 anos – Antologia acústica</em>), enquanto que na obra de Geraldo Azevedo esse processo já vem se revelando mais gradualmente, numa escalada de discos (<em>Bossa tropical</em>, <em>Berekekê</em>, <em>Futuramérica</em>) que, como aqueles, conseguem reproduzir em estúdio o perfil musical do artista, com toda a sua completa tapeçaria de sons, melodias, poesia e referências culturais.</p>
<p>A escolha de <em>Disparada</em>, de Théo e Geraldo Vandré, para abrir o disco tem uma força simbólica, pois foi esta canção, vencedora do Festival da TV Record, juntamente com <em>A banda</em>, que impôs em definitivo a temática nordestina/sertaneja como um dos ícones da “faixa nobre” da MPB. Depois do impacto de <em>Disparada</em>, violas e violeiros adquiriram uma dimensão épica no vocabulário da MPB, como se vê pela rápida sucessão de canções de alto nível que seguiram suas pegadas: <em>Ponteio</em> (Edu Lobo/Capinan), <em>O cantador</em> (Dori Caymmi/Nelson Motta), <em>A estrada e o violeiro</em> (Sidney Miller).</p>
<p>A presença de “<em>Disparada</em>” neste disco estende os limites deste encontro até um momento no passado, em que estes três artistas, ainda adolescentes e sem se conhecerem entre si, foram tocados pelo vigor das violas e das vozes que entoavam: “...as visões se clareando, as visões se clareando, até que um dia acordei”. E esse sopro épico está presente em outros momentos preciosos de <em>O Grande Encontro II</em>, como, por exemplo, no resgate dos martelos agalopados recolhidos na tradição oral dos repentistas (<em>O autor da natureza</em>), ou em canções como <em>Eternas ondas</em> ou <em>Banquete de signos</em>, cujas ousadias de linguagem não teriam sido possíveis sem a grande reviravolta poético-musical dos anos 60.</p>
<p>Se Vandré representou num certo momento uma das “linhas evolutivas” para a música brasileira (embora rendendo menos frutos do que a linha tropicalista que Caetano e Gil inauguravam na mesma época), a “linha tradicional” pode ser identificada nos criadores clássicos da canção do Nordeste, Luiz Gonzaga, Zé Dantas e Humberto Teixeira, que aparecem em <em>O Grande Encontro II</em> na faixa <em>Saga da Asa Branca</em>. Este díptico de canções (<em>Asa branca</em>/<em>A volta da asa branca</em>) expressa a cara-e-coroa da saga de todos os migrantes, todos os retirantes, todos os exilados: a fuga para a cidade grande depois que a seca deixou “a terra ardendo qual fogueira de São Joao”, e o retorno feliz depois que “já faz três noites que pro Norte relampeia”. <em>Asa branca</em> tornou-se no mundo inteiro o símbolo da canção nordestina; mas é preciso não esquecer <em>A volta da asa branca</em>, uma cantiga mais rica em melodia e letra e, acima de tudo, um hino à alegria, à volta para casa, à reconciliação de um povo com sua própria terra.</p>
<p><em>O Grande Encontro II</em> não é apenas o encontro de três artistas, mas também o ponto de convergência das correntes culturais que formaram cada um deles, e impeliram seu trajeto do sertão até a cidade, e depois, da cidade até a metrópole. Em Geraldo Azevedo, as canções sertanejas, depois a bossa-nova e, em seguida, o tropicalismo. Em Zé Ramalho, o repente dos violeiros, o misticismo das novenas e benditos, e finalmente o rock dos Beatles e Bob Dylan. Em Elba Ramalho, a musicalidade das festas-de-rua como São João e Carnaval, enriquecidas depois pela sensibilidade dramática desenvolvida nos palcos de café-concerto.</p>
<p><em>O Grande Encontro II</em> tem participações especiais de Robertinho de Recife (como produtor do disco, arranjador e instrumentista), Márcio Montarroyos (trompete em <em>Bicho de sete cabeças</em>), Dominguinhos (acordeom em <em>Disparada</em>, <em>Ai que saudade d’ocê</em>, <em>Canta coração</em> e <em>Saga da asa branca</em>) e Léo Gandelman (sax soprano em <em>Pedras e moças</em>). A formação básica das faixas contou com Jamil Joanes no baixo, Luiz Antonio nos teclados, Renato Massa na bateria, Cesar Michiles no sax e nas flautas, e na percussão Zé Gomes, Lucas, Firmino e Paulinho He-Man.</p>
',
'sbr_disco' => '<p>BMG Ariola 7.432.152.840-2<br />
Lan&ccedil;amento: novembro de 1997</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Dire&ccedil;&atilde;o art&iacute;stica: Jorge Davidson<br />
Produzido por: Robertinho de Recife<br />
Assistente de produ&ccedil;&atilde;o: Claudia Andr&eacute;<br />
Gravado e mixado on Europhonix System no Studio Lagoa/RJ em agosto, setembro e outubro de 1997<br />
T&eacute;cnico de grava&ccedil;&atilde;o e mixagem: Rob<br />
Masteriza&ccedil;&atilde;o: Ricardo Garcia</p>
<p>&nbsp;</p>
<p>Capa: P&oacute;s Imagem Design<br />
Dire&ccedil;&atilde;o de arte: Ricardo Leite e Rafael Ayres<br />
Projeto gr&aacute;fico: Fabiana Prado<br />
Fotos: Milton Montenegro<br />
Coordena&ccedil;&atilde;o gr&aacute;fica: Emil Ferreira<br />
</p>
',

'slug' => 'o_grande_encontro_2',

'foto_fundo' => 'elba_album_20.jpg',
'capa_disco' => 'cd20.jpg',
'capa_sm' => 'cd20-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Flor Da Paraíba',
'ano' => '1998',
'release' => '<p><strong>FLOR DA PARAÍBA</strong></p>
<p>Quando Elba me contou que chamaria seu novo trabalho – em fase de gravação – de <em>Flor da Paraíba</em> – por ser ele completamente nordestino, e por conta de uma dedicatória minha para ela na altura de sua chegada ao Rio, fiquei muito feliz. Primeiro por Elba lembrar-se de tal fato, segundo, porque ao longo de sua carreira, impar e fulgurante, ela só fez confirmar esse título, reafirmando-se como maior força da natureza nordestina em cena na MPB. Repito, portanto, a minha dedicatória: para Elba Ramalho, Flor da Paraíba, o carinho de <strong>Caetano Veloso</strong>.</p>
<p>&nbsp;</p>
<p><strong>FULÔ PARABÓLICA</strong></p>
<p>Lá no fundo dos quintas da memória – onde raízes migram para as raridades de chão –, vem este canto pão de mesas sempre fartas. Grande Ser Tão: Rosa! Guimarães sabia: “o sertão está em toda a parte... é onde o pensamento se forma mais forte que o poder do lugar. Sertão é dentro da gente.”</p>
<p>Este lugar universo dentro/fora de Elba, soando sua aldeia original. Fortes Ramalhos frondosos em toda a pARTE o poder transmutador do sentimento vibra, se firma, qual marca umbuzeiro florido a voz da paisagem quase deserta. A caatinga arde cheiro bom de baião pelas brenhas do invisível. Tem xique-chi na canção popular e jeito da benção de Luiz sorrido generoso atrás de moita na lua imaginária, querendo ainda que a “filha postiça” cante, dê corpo a seu espírito no Eterno. O Rei quer que ela continue seu vasto mote, bote sinceridade Januária no digital. Quer do laser, sons vertendo igual uma chuva primavera: aquela que levanta chote-poeira deixa almas secas com gostos de novidades e viços.</p>
<p>Elba Ramalho quando ousa baiões, en.canta toda: corpo e alma vivificando o chão batido do céu, realçando o estrelaR em flor da Terra. Exalam essências e a claridade sabida por Guimarães Rosa: “...aprender a viver é o que é o viver mesmo...”. Coisas que Gonzaga dedilhava de có e salteado. Cartilha desperta de sons que Elba emana pelo Dom da Verdade. Sabedoria plena de luzir o poder transcendente dos lugares: inteiros e sanfônicos; totais e triangulares; intensos e zabumbicos. O tudo pro Todo e para todos. Por isso ELBA é assim: imensa e rara.</p>
<p>&nbsp;</p>
<p><strong>Flor da Paraíba – faixa a faixa</strong></p>
<p>Elba Ramalho não é besta não, escolheu o melhor repertório vivencial para regar sua Flor da Paraíba, um CD onde fica muito à vontade na casa dos sentimentos nordestinos.</p>
<p>Deitada numa rede de sabedorias saborosas, que vão desde a tradição movida a fogueira de “um São João sem fim”, às chamas das luminosas novidades contemporâneas de “lanternas de laser” – cito Chico César em <em>Paraíba meu amor</em> – Elba faz resgates e redescobertas fundamentais:</p>
<ul class="list-style-disc">
<li>a maravilha de um dos clássicos da dupla Luiz Gonzaga e Zé Dantas, <em>A letra I</em>;</li>
<li>a irreverente invenção do genial mestre Gordurinha, <em>Pau-de-arara é a vovozinha</em>, que melodiosa por cheia de truques sonoros, pega qualquer sujeito desprevenido, principalmente nestas “esquinas de mesmices” da nossa música popular.</li>
</ul>
<p>Elba optou pelas tradições de xotes e baiões impecáveis:</p>
<ul class="list-style-disc">
<li><em>Tum, tum, tum</em>, muito bem mesclado com <em>Mulata no coco</em> e temperado com as deliciosas precisões instrumentais do clarinete de Juarez Araújo;</li>
<li><em>Pra ninar meu coração</em>, <em>Aroma</em>, <em>Me pegue pra chamegar</em>, <em>Chameguinho</em>, onde ela assume ao pé das letras e levantando leves poeiras do chão, a sua rica identidade bem além do sertanejo.</li>
</ul>
<p>E chega daí, experiente e destrada, a inusitada parceria de um nortista – Zeca Baleiro –, um nordestino – Chico César –, um paulista – Itamar Assumpção –, para iluminar a pele singular de <em>Face</em> ou ao aprimorar-se plural, dentro do ótimo arranjo de <em>Lavadeira do rio</em> no coco de Lenine e Bráulio Tavares. Nesta música o intrigante ritmo mastigado dos vocais, dão asas ao mascado tom das sonoridades percussivas, criando o momento mais solto e inventivo do CD.</p>
<p>É aí que a Flor da Paraíba abre as generosas pétalas para florar outras incomuns preciosidades:</p>
    <ul class="list-style-disc">
    <li><em>São Xangô menino</em> de Brown, onde Carlinhos bota quadrilha para timbalear no terreiro de Luiz Lua e de outros não menos mestres da poética junina;</li>
    <li>quando revela intimismo, através da bela voz sensível e sincera em <em>Casa, comida e paixão</em> – uma refinada canção onde mora pares da perfeição –, um poema de Fausto Nilo numa melodia de Dominguinhos. E ele a toca como um grande rei.</li>
    </ul>
<p>Tudo isso desemboca na linda transparência confessional de <em>Zé Esteves</em> de Caetano Veloso, e também na emocionante colagem de <em>Paraíba meu amor</em>, do conterrâneo Chico Cesar. Elba a introduz com um hino do seu estado de espírito paraibano, <em>Meu sublime torrão</em>, mixando-a com a conhecida <em>Paraíba</em>, dando força e lealdade a raridades vastas das consistentes raízes.</p>
<p><em>Flor da Paraíba</em>, afirma a cantora, mensageira de uma alegria sem par. Juntaram-se a ela músicos que são o que tocam, não retocam a realidade musical, e dão fidelidade rítmica a cada xote e baião para que este CD pulse coeso e íntegro dentro de sua proposta conceitual.</p>
<p>Obs.: <em>Pau-de-arara é a vovozinha</em>, Elba só viaja em boas companhias neste imenso avião de sonoridades brasileiras, cada dia mais irreversivelmente universais.</p>
<p>&nbsp;</p>
<p><strong><em>Bené Fonteles</em></strong>
',
'sbr_disco' => '<p>BMG Ariola &ndash; CD 7.432.158.703-2<br />
Lan&ccedil;amento: maio de 1998</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Dire&ccedil;&atilde;o art&iacute;stica: Jorge Davidson<br />
Produzido por: Robertinho de Recife<br />
Assistente de produ&ccedil;&atilde;o: Claudia Andr&eacute;<br />
Assist&ecirc;ncia art&iacute;stica: Gaetano Lops e Fatinha<br />
Gravado e mixado por Robertinho de Recife no Studio Lagoa/RJ em abril de 1998</p>
<p>&nbsp;</p>
<p>Dire&ccedil;&atilde;o de arte: Fabio Delduque<br />
Fotos: Ana Urban<br />
Beleza: Ton Hyll<br />
Figurino: S&ocirc;nia Ushiyama<br />
Assist&ecirc;ncia de cenografia: Jodel Junior e Alexandre Saturnino<br />
Computa&ccedil;&atilde;o gr&aacute;fica: Eduardo de Souza (CHP)<br />
Supervis&atilde;o gr&aacute;fica: Emil Ferreira</p>
<p>&nbsp;</p>
<p>Agradecimentos: H Stern, Emanuel Gurgel (Somzoom), Ari Viana (meu primo), Marcos Soares, Vav&aacute;, Fatinha, Z&eacute; Ramalho, Lu&atilde; (pela compreens&atilde;o) e Ga&ecirc; pela sua super for&ccedil;a. Com amor luz e paz,</p>
<p>&nbsp;</p>
<p>Elba Ramalho / 98<br />
</p>
',

'slug' => 'flor_da_paraiba',

'foto_fundo' => 'elba_album_21.jpg',
'capa_disco' => 'cd21.jpg',
'capa_sm' => 'cd21-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Solar',
'ano' => '1999',
'release' => '<p>O trabalho discográfico deste ano de 1999 veio recheado de surpresas. São 2 CDs abrangendo um total de 28 músicas e muitos convidados. São discos comemorativos e, portanto, o repertório apresentando é quase todo composto de músicas já conhecidas do público. Gravados entre junho e setembro deste ano, os discos se distinguem pela proposta musical a eles dispensada. Um CD gravado ao vivo em Salvador (BA) e em Montreux, no festival de jazz, onde me apresentei pela terceira vez e o outro feito em estúdio, ambos produzidos por mim e pelo maestro José Américo Bastos. Foi um trabalho que exigiu muito de nós.</p>
<p>Pesquisei minha própria obra, me reenlacei com os compositores e parceiros, alimentei muitos sonhos e projetamos o trabalho com o desafio de premiar o meu público com as velhas canções revisitadas, sorvendo o frescor do canto maduro refletido na calmaria de quem já sabe o caminho de volta e, portanto, errar, não traduz desarmonizar, e sim somar-se à sabedoria. O repertório se definiu a partir das sugestões enviadas, via internet, pelos fãs e afins, e assim mesmo não foi possível sintetizar toda a obra em 2 CDs, mas que no final, ajustados ao padrão estético exigido pela gravadora, oferece ao meu público um menu variado, um caldeirão de ritmos e signos.</p>
<p>Ensaiamos para a gravação ao vivo sob a batuta do maestro Zé Américo e tivemos a felicidade de compartilhar este momento com a alegria essencial do público baiano e suíço. Em três shows apenas e lá estava registrado em disco o que vivencio há 20 anos pelas estradas do planeta em múltiplas dimensões, com o mesmo prazer e disposição, sempre agradecida ao grande Mestre por tão honrosa dádiva.</p>
<p>Foi consolidado o projeto ao vivo. A presença de Gerônimo cantando <em>É d’Oxum</em> foi uma boa surpresa. Ele compareceu, deu uma canja e o momento se tornou mágico.</p>
<p>Já o disco de estúdio foi uma ousadia só. Eu tinha um tempo mínimo para realizar o projeto e queria muita gente cantando, arranjando... Enfim, todos vieram e vivi momentos musicais de muita emoção. Wagner Tiso e os belos arranjos para <em>Canção da despedida</em>, que infelizmente não entrou pela proibição, de última hora, do compositor Geraldo Vandré. Justifico aos fãs a ausência da canção tão solicitada pelo meu público. O encontro com Nana Caymmi, a grande diva e querida amiga, presente na minha vida em especiais momentos, e agora pela primeira vez cantando <em>Imaculada</em>, que o maestro Wagner Tiso tão lindamente arranjou.</p>
<p>A competência de Jaques Morelenbaum, e mais que isso, a minha alegria em cantar de novo <em>Palavra de mulher</em>, esta pérola de canção do mestre e amigo Chico Buarque. Foi, em 1978, quando encarnava a Lúcia, na <em>Ópera do Malandro</em>, que fiz o meu <em>début</em> na música, e tudo porque o Chico me convidou para cantar <em>O meu amor</em>, junto com Marieta, no seu disco de carreira. Aqui está de novo o início de tudo: <em>O meu amor</em> e <em>Não sonho mais</em>, esta última com a presença luminosa de Chico e ambas arranjadas pelo maestro Zé Américo.</p>
<p>O primeiro encontro com meu primo Zé Ramalho foi ainda na Paraíba, eu tocava bateria numa banda feminina de rock dirigida pelo Zé, que tocava guitarra numa já famosa banda chamada <em>Os 4 Loucos</em>. De lá pra cá, muitos encontros e trocas foram sorvidas com muito afeto. Vejo o meu primeiro disco, e a primeira música visionária do Zé para mim: <em>Ave de prata</em>, que dividimos agora num voo embalando pela sua viola, a viola de Manassés e o superbaixo de Arthur Maia.</p>
<p>Há exatamente 20 anos eu dividia a vida com Geraldo Azevedo. Éramos amigos e nossa casa era o point. Geraldo me ensinou muito, me fez crescer como músico, foi o meu esteio musical e me presenteou sempre com belas músicas. Tantas já tão cantadas por nós dois em tantos encontros, que resolvemos homenagear a nossa parceira Cátia de França, gravado <em>Kukukaya</em>. Alceu me presenteou com a bela <em>Trem das ilusões</em>, canção inédita e carro-chefe neste momento. Ainda do meu primeiro disco, elegemos o maracatu <em>Nó cego</em>, do paraibano Pedro Osmar e convidamos Lenine que, mais uma vez, fortalece com a sua brilhante presença o elo desta corrente. Outro ilustre convidado é o mestre Dominguinhos, com a emoção tocada de sofisticação, seu acordeom ponteia a belíssima <em>Retrato da vida</em>, uma parceria com Djavan.</p>
<p>Tenho ainda duas belas convidadas, Renata Arruda e Margareth Menezes, nas canções <em>Sete cantigas para voar</em> e <em>Quem é muito querido a mim</em>, respectivamente. Ainda em momento solo neste disco, regravei <em>Cajuína</em> de Caetano Veloso, <em>A palo seco</em>, de Belchior e uma versão já feita pela Timbalada de <em>Choveu sorvete</em>, do mágico Carlinhos Brown.</p>
<p>Bom, o trabalho agora já não me pertence, mas sim ao público tão amado por todos nós, artistas operários da arte, faxineiros das canções. Agradeço a todos os músicos e amigos, ao parceiro de estúdio Zé Américo, aos técnicos pela competência e carinho, à gravadora BMG Brasil pela fé, e ao meu filho Luã, que sempre inspira, sugere e preenche o vazio com a sua luz, inocência e sabedoria...</p>
<p>&nbsp;</p>
<p><strong><em>Elba Ramalho</em></strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<blockquote><p>Elba Ramalho é a maior estrela do meu estado e uma das mais reluzentes do país. Ter tido a possibilidade de dividir uma canção de Vital Farias com ela, bateu em dose tripla na raiz. Foi um lindo sonho realizado </p><footer><cite>Renata Arruda</cite></footer></blockquote>
<p>&nbsp;</p>
<blockquote><p>Voz feminina do nordeste e Brasil. Congrega, ao mesmo tempo
, canto e dramaticidade dentro de um corisco guardado no peito. É prata da casa. É a ave.</p><footer><cite>Zé Ramalho</cite></footer> </blockquote>
<p>&nbsp;</p>
<blockquote><p>Para a minha primeira e eterna intérprete: dizer que Elba é uma das maiores intérpretes brasileiras é chover no molhado... Falar que Elba é uma artista completa, que todos os seus discos primam sempre pelo refinamento, cuidado estético e bom gosto musical, é continuar chovendo no molhado... Reafirmar a generosidade e a solidariedade do seu espírito, é redundância, é chuva demais... Pra não vivar lama de confete, só me resta agradecer a amizade, a cumplicidade e o carinho que ela sempre dispendeu pra mim e pra minha música. Valeu Elba! Te adoro.</p><footer><cite>Lenine</cite></footer> </blockquote>
<p>&nbsp;</p>
<blockquote><p>Foi um prazer incomensurável participar do CD que comemora os 20 anos da brilhante carreira de Elba Ramalho. Salve nossa rainha, terna Leoa do Norte! Do súdito </p><footer><cite>Alceu Valença</cite></footer></blockquote>',
'sbr_disco' => '<p>BMG Brasil 7.432.170.243-2<br />
Lan&ccedil;amento: outubro de 1999</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p><strong>AO VIVO</strong><br />
<strong>Banda</strong><br />
Dire&ccedil;&atilde;o musical, arranjos e teclados: Z&eacute; Am&eacute;rico Bastos<br />
Acordeom: Toninho Ferragutti<br />
Contrabaixo: Jacar&eacute;<br />
Guitarra e viol&atilde;o: Marcos Arcanjo<br />
Viola e cavaquinho: Manasses de Souza<br />
Flauta e sax: David Ganc<br />
Trompete: Naor Oliveira<br />
Trombone: Aldivas Alves<br />
Percuss&atilde;o: Paulinho He-Man e Marcos Amma<br />
Bateria: Tedy Santana</p>
<p>&nbsp;</p>
<p><strong>Participa&ccedil;&otilde;es especiais</strong><br />
&Eacute; d&rsquo;Oxum: Ger&ocirc;nimo (arranjo e viol&atilde;o), Artur Maia (contrabaixo), Camilo Mariano (bateria) e Zeppa Souza (guitarra)<br />
Choveu sorvete: Paulinho Trompete (trompete) e Roberto Stepheson (sax)<br />
Morena de Angola / Toque de fole / Boca do bal&atilde;o / S&atilde;o Jo&atilde;o na estrada: Altair Martins (trompete) e Roberto Marques (trombone)</p>
<p>&nbsp;</p>
<p>Gravado ao vivo na Concha Ac&uacute;stica do Teatro Castro Alves/Salvador (24 e 25 de junho e 1999)<br />
Montreux Jazz Festival (1 de julho de 1999)</p>
<p>&nbsp;</p>
<p>Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Carlos Martins Ara&uacute;jo<br />
Produ&ccedil;&atilde;o executiva: Alexandre Valentim e Moema Eifler<br />
Assistente de produ&ccedil;&atilde;o: Gaetano Lops<br />
Operador de P.A.: Mario Jorge<br />
Operador de monitor: Ant&ocirc;nio Campista<br />
Operador de ilumina&ccedil;&atilde;o: Renato Ribeiro<br />
Roadie: Josino Feitosa</p>
<p>&nbsp;</p>
<p><strong>EST&Uacute;DIO</strong></p>
<p>Dire&ccedil;&atilde;o art&iacute;stica: Jorge Davidson<br />
Produzido por Z&eacute; Am&eacute;rico Bastos e Elba Ramalho<br />
Assistente de produ&ccedil;&atilde;o e arregimenta&ccedil;&atilde;o: Fatinha<br />
Gravado nos est&uacute;dios Nas Nuvens e AR<br />
T&eacute;cnicos: Eduardo Costa e Claudio Farias<br />
Assistentes: Theo Mar&eacute;s, Duda Mello, Eduardo Baldi e Luciano Tarto<br />
Mixado por: Z&eacute; Am&eacute;rico Bastos e Eduardo Costa no Est&uacute;dio AR</p>
<p>&nbsp;</p>
<p>Capa: Gringo C&aacute;rdia<br />
Foto: Murilo Meirelles<br />
Maquiagem: M&aacute;rcio Mitkay<br />
Figurino: Elba Ramalho<br />
J&oacute;ias e bijuterias: Alberto Sabino<br />
Fotos de folclore nordestino: arquivo Cafi<br />
Designer gr&aacute;fico assistente: Fabio Arruda<br />
Assistente de fotografia: Alexandre Savino<br />
Coordena&ccedil;&atilde;o gr&aacute;fica: Luis Felipe Couto e Emil Ferreira</p>
<p>&nbsp;</p>
<p>Agradecimentos: &ldquo;Projeto Sua Nota &eacute; um Show&rdquo;, Teatro Castro Alves/Salvador<br />
</p>
',
'slug' => 'solar',

'foto_fundo' => 'elba_album_22.jpg',
'capa_disco' => 'cd22.jpg',
'capa_sm' => 'cd22-sm.jpg',
'disco_tipo' => '2',  ));

Discos::create(
array(
'nome_disco' => 'O Grande Encontro 3',
'ano' => '2000',
'release' => '<p>O Grande e predestinado Encontro – nos palcos, nos discos e na vida – de Elba Ramalho, Geraldo Azevedo e Zé Ramalho sintetizava toda a força e perenidade da música e da cultura nordestinas. No auge de suas respectivas carreiras individuais, os três artistas – representantes máximos da leva de nordestinos que migrou para o Sul, na primeira metade dos anos 70, para conquistar um lugar nacional na música brasileira – se unem mais uma vez com toda a carga de riqueza e musicalidade própria de quem cresceu ouvindo Jackson do Pandeiro e João do Vale – cantor e compositor não por acaso reverenciados neste CD <em>O Grande Encontro 3</em> – e, claro, o seminal Luiz Gonzaga, base e começo de tudo.</p>
<p>O terceiro volume do vitorioso projeto resulta da gravação e um show único realizado pelo trio na casa carioca Garden Hall, em 5 de outubro. Quem esteve lá não esquece: a alquimia entre a paraibana Elba, o pernambucano Geraldo e o também paraibano Zé se fez presente desde o primeiro número. A vibração que acontecia no palco era sentida pela plateia, que a devolvia na forma de aplausos calorosos. O clima festivo foi captado pelo produtor do disco, o craque Guto Graça Mello, que transportou para o CD toda a magia, espontaneidade e musicalidade daquela noite inesquecível. Era, mais uma vez, a reafirmação da força de músicas que permanecem no imaginário popular – o público do show foi formado basicamente por fãs anônimos dos artistas – graças ao trabalho de resistência empreendido por Elba, Zé e Geraldo, ao longo desses anos, para dar prosseguimento ao trabalho de propagação da música nordestina iniciado pelo pioneiro Luiz Gonzaga nos anos 50.</p>
<p><em>O Grande Encontro 3</em> reúne o calor do palco do primeiro volume – também gravado ao vivo, em 1996 – com o requinte dos arranjos do segundo, registrado em estúdio em 1997. É, até agora, o melhor momento de uma série vitoriosa que nunca vende menos de 500 mil cópias a cada disco lançado. E vale ressaltar que, sem repetir músicas de um disco para o outro, o trio faz um valioso trabalho de atualização das produções autorais de Geraldo Azevedo e Zé Ramalho, dois compositores donos de obras tão ricas quanto vastas e que não se resumem aos grandes hits colecionados ao longo da carreira. Há muita coisa boa a ser apresentada para gerações jovens que não testemunharam o aparecimento de Elba, Geraldo e Zé no cenário musical brasileiro.</p>
<p><em>Caravana</em>, por exemplo. A música que abre o disco, com vibrante interpretação do trio, fez muito sucesso ao ser gravada por Geraldo em 1975 para a trilha sonora da novela <em>Gabriela</em>. E sempre foi hit certeiro nos shows, mas essa parceria de Alceu Valença e Geraldo Azevedo precisava de um registro coletivo em disco (Geraldo a regravou no retrospectivo <em>Raízes e frutos</em>). Da mesma forma que <em>Táxi lunar</em>, outra parceria de Alceu e Geraldo, esta acrescida da assinatura de Zé Ramalho. A música ganha o seu melhor registro na interpretação calorosa dos três artistas. Tanto <em>Táxi lunar</em> quanto <em>Caravana</em> já vinham sendo cantadas pelo trio desde o nascimento do projeto <em>O Grande Encontro</em>, mas nunca haviam entrado nos discos. Pois a dívida com o imenso público do grupo agora está selada.</p>
<p>O irretocável repertório de <em>O Grande Encontro 3</em> foi dividido na gravação em solos, duetos com convidados de cada um dos artistas (ou duos formados pelo próprio revezamento do trio em cena) e trios. Geraldo Azevedo abre o seu set solo cantando <em>Dona da minha cabeça</em>, um de seus hits românticos, gravado por ele no disco <em>De outra maneira</em>, de 1986. Em seguida, Geraldo chama o seu convidado: o sempre renovado baiano Moraes Moreira. Juntos, cantam harmoniosamente o samba-exaltação <em>Canta, Brasil</em>, de Alcyr Pires Vermelho e David Nasser, joia lançada com grande sucesso por Francisco Alves em 1941.</p>
<p>Em seguida, é a vez de Elba assumir o palco sozinha. E ela interpreta <em>Frisson</em>, balada pop romântica que consagrou seu autor Tunai nos anos 80. Para depois chamar o pernambucano Lenine, que só agora ganha o merecido reconhecimento nacional, depois de 20 anos de batalha – para, juntos, cantarem <em>Lá e cá</em>, parceria de Lenine e Sérgio Natureza que celebra a conexão Rio-Bahia com os irresistíveis suingue e negritude de dois Estados. Depois do set de Elba, Zé Ramalho volta à cena para cantar <em>A peleja do diabo com o dono do céu</em>, música que deu título ao seu segundo LP, de 1979. É a deixa para Zé chamar ao palco o terceiro convidado do disco, um rapaz latino-americano que migrou para o rio com o talentoso Pessoal do Ceará: Belchior. Contemporâneo de Zé, Belchior canta com o colega e amigo <em>Garoto de aluguel</em>, outra música do segundo disco de Ramalho. Uma releitura pungente, que vai fazer o público (re)descobrir a música, ousada para a época ao retratar a questão da homossexualidade masculina.</p>
<p>Encerrados os sets individuais, o trio se reveza no palco. <em>Galope rasante</em>, por exemplo, música do terceiro disco de Zé Ramalho (<em>A terceira lâmina</em>), ganha interpretação em dueto com Zé e Geraldo. E vale abrir um parêntesis aqui para lembrar que foi com os dois que o projeto do encontro teve origem. Ao se unirem para o show <em>Dueto</em>, com fenomenal sucesso de público e crítica, Zé e Geraldo espalharam a semente do <em>Grande Encontro</em>, que hoje dá vigorosos frutos como a interpretação madura de Elba para <em>Você se lembra</em>, belíssima e nostálgica balada lançada por Geraldo Azevedo em <em>Futuramérica</em>, recente trabalho de estúdio. E o mesmo Geraldo se une à Elba para celebrar a viagem festiva de <em>Petrolina-Juazeiro</em>, música de Jorge de Altinho, um compositor que transita pelo forró (e os ritmos englobados sob o generoso rótulo) com muita propriedade. Um talento ainda não reconhecido pela mídia do Sul na medida do seu valor.</p>
<p>Elba e Zé terminam o bloco de duetos com a definitiva gravação de <em>A terceira lâmina</em>, faixa-título do terceiro disco de Zé, música impregnada do tom apocalíptico que caracteriza a obra do compositor. E vem, então, com o trio reunido novamente, a celebração de Jackson do Pandeiro e João do Vale – duas das matrizes de todo o repertório reunido neste disco. <em>Tum, tum, tum</em>, <em>Mulata no coco</em>, <em>Eu vou pra lua</em> e <em>O canto da ema</em> traduzem a festa rítmica que é a música nordestina. Uma festa alegre, às vezes maliciosa, mas que carrega também a profundidade e a densidade de um povo resistente. Que soube impor sua cultura, seu canto e seus costumes. Como Elba Ramalho, Geraldo Azevedo e Zé Ramalho, símbolos dessa cultura perpetuada neste grandioso encontro.</p>
<p>&nbsp;</p>
<p><strong><em>Mauro Ferreira</em></strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Como diz um dos versos da canção, “você se lembra... chegamos juntos, num final feliz...”. Aqui estamos nós, fechando essa trilogia de rara beleza. Poético-musical nordestina e brasileira, dentro de cada um de nós, que vivemos para acreditar. <strong><em>Zé Ramalho</em></strong></p>
<p>&nbsp;</p>
<p>Cantar com Zé Ramalho e Geraldinho é como deitar na cama e rolar. Tudo tem cheiro bom, tem suingue bom, tem uma emoção verdadeira! Somos 3 em 1. Somos cada um em todos, trazemos na alma o vértice da comunhão e da verdadeira amizade. <strong><em>Elba Ramalho</em></strong></p>
<p>&nbsp;</p>
<p>É um projeto que envolve gente, tempo, memória, movimento, relações, emoções, gerações, é uma celebração de todas essas coisas. No presente, do passado ao futuro, realismo de fé e esperança. A dança da vida eterna lembrança sublime herança canções e corações. <strong><em>Geraldo Azevedo</em></strong></p>
',
'sbr_disco' => '<p>BMG Brasil 7.432.180.285-2<br />
Lan&ccedil;amento: novembro de 2000</p>',
'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Dire&ccedil;&atilde;o art&iacute;stica: Jorge Davidson<br />
Produ&ccedil;&atilde;o musical: Guto Gra&ccedil;a Mello<br />
Dire&ccedil;&atilde;o musical: Marcos Farias<br />
Produ&ccedil;&atilde;o executiva: Celso Lessa<br />
Coordena&ccedil;&atilde;o de produ&ccedil;&atilde;o: S&eacute;rgio Bittencourt</p>
<p>&nbsp;</p>
<p>Gravado ao vivo no Garden Hall/RJ no dia 5 de setembro de 2000<br />
Gravado por: Franklin Garrido<br />
Mixado no Blue Studios/RJ<br />
T&eacute;cnico de mixagem: Jorge &ldquo;Gordo&rdquo; Guimar&atilde;es<br />
Assistentes de mixagem: Alex Maurelle e Anderson<br />
Opera&ccedil;&atilde;o de pro-tools: Guto Gra&ccedil;a Mello, Marcelo &ldquo;Load&rdquo; e Renato Cesar<br />
Masteriza&ccedil;&atilde;o: Magic Master</p>
<p>&nbsp;</p>
<p>Produ&ccedil;&atilde;o de show: Alexandre Valentim<br />
Light designer: Peter Gasper<br />
Ilumina&ccedil;&atilde;o: Jos&eacute; Ant&ocirc;nio<br />
Operador de P.A.: M&aacute;rio Jorge<br />
Operador de monitor: S&eacute;rgio Perez<br />
Produ&ccedil;&atilde;o de palco: Bia Dantas e Francisco Canind&eacute;<br />
Contra-regras: JB, Josino Feitosa e Dinho<br />
FGL &Aacute;udio (Grava&ccedil;&atilde;o ao vivo)<br />
Engenheiro de grava&ccedil;&atilde;o: Franklin Garrido</p>
<p>&nbsp;</p>
<p>Coordena&ccedil;&atilde;o gr&aacute;fica: Luis Felipe Couto e Emil Ferreira<br />
Capa e projeto gr&aacute;fico: P&oacute;s Imagem Design<br />
Dire&ccedil;&atilde;o de arte: Ricardo Leite e Rafael Ayres<br />
Designer assistente: Eduardo Varela<br />
Fotos: Richard Romero<br />
Assistente de fotografia: Marcelo Bravo<br />
</p>
',
'slug' => 'o_grande_encontro_3',

'foto_fundo' => 'elba_album_23.jpg',
'capa_disco' => 'cd23.jpg',
'capa_sm' => 'cd23-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Cirandeira',
'ano' => '2001',
'release' => '<p>É pra levantar poeira? Então pergunte a quem assistiu o show de Elba e Zé Ramalho no <em>Rock in Rio III</em>: nuvem alta de poeira, alegria e energia que se espalhou pelo mundo todo naquele dia. Elba elevou às nuvens a música popular brasileira com elegância, firmeza, maturidade e beleza e realizou um espetáculo que lavou a minha alma &shy; me orgulhei mais ainda de ser brasileiro naquela tarde. E é por isso que eu acho estranho procurar no meu vocabulário os termos exatos para a difícil missão de descrever em poucas palavras <em>Cirandeira</em>, o novo CD de Elba. Acho melhor descrever o que sinto enquanto ouço.</p>
<p>Já tinha ouvido por telefone a musica de Lenine que dá nome a esse CD, a gravação de Elba só confirmou a porrada. Não acredito que exista alguém que ouça essa ciranda impune, sem sentir o gosto do mar de Itamaracá, mesmo sem ter nunca pisado por lá. Não cabe descrição, é uma porrada, e das mais bem intencionadas. Ah! Alcimar Oliveira desliza na harmonia um trombone feito uma jangada, lindamente.</p>
<p>Em <em>Patativa</em>, a poeira sobe de mansinho, começo de festa, hora de escolher seu par, a música já é uma cantada irresistível, quase sonsa, Vicente Celestino. Precisa explicar nada não, né?</p>
<p><em>Alma nua</em>, de Zeca Baleiro, viaja mais pra dentro, fronteiras da Zona da Mata, as bradas da fogueira se misturando nas estrelas, dá vontade de ouvir várias vezes. <em>Onde anda você</em>, de Chico Pessoa e Zé do Norte, é deliciosamente verdadeira, mão na luva na voz de Elba.</p>
<p><em>Querendo mais</em>, de Nando Cordel, é sensual, bate-coxa quase indecente, mesmo pra quem gosta e aí nem importa se sabe ou não dançar forró, a música ensina. E, se mesmo assim não adiantar, ela dança sozinha, é pra se derramar.</p>
<p><em>Sem ganzá não é coco</em> escreve Chico César e explica: “O coco tem que ter ganzá e pandeiro/ Um namoro maneiro/ A morena tem que beijar/ Tem que gostar do beijo/ Pra gostar de ser beijada/ No coco de embolada/ E na pancada do ganzá”. Pronto, tá dito. E Elba se espalha na melodia, dá a impressão de ter gravado dançando pelo estúdio a passos curtos e abraçada na própria cintura, aí a música fica ainda mais linda.</p>
<p><em>Pra virar xodó</em>, de João Gonçalves e Fuba de Taperoá, levanta mais ainda a poeira, Elba domina e tá dominado (tá tudo dominado). A dona da festa é generosa e abre mais espaço no salão, é pra se mexer nem que seja na cadeira, feito eu agora. Mas se você estiver ouvindo sozinho também, convide alguém pra ouvir junto... vai rolar um clima.</p>
<p>Em <em>Entre o céu e o mar</em>, mais uma vez Elba me empresta a voz e me deixa quieto, só ouvindo. Roger Henri conhece música de perto e de todos os lados, as melodias dele quase que já vem com letra, já é poesia, e eu só tive o privilégio da tradução desse sentimento. Obrigado, Elba.</p>
<p><em>Forró de Surubim</em>, de Antônio Barros, faz a poesia esconder a saia das moças no salão e aperta o espaço, mas é pra apertar mesmo, pra encher qualquer boa casa de forró. Eu conheço Surubim, a cidade, e parece que tá sendo tocada de lá, de tão bem executada – o clarinete de Dirceu Leitte arrasa.</p>
<p><em>Lua vadia</em>, de J. Michiles, faz carinho no céu, uma declaração de amor à lua “Lamparina do universo/ Do meu verso solitário/ Minha reza, meu rosário/ Meu diário, meu cordel”. A voz de Elba empresta mais brilho ainda, é céu iluminado.</p>
<p><em>O amor é lindo</em>, da não menos linda família Gadelha, de Tony, Afonso e Glorinha Gadelha, é lindo mesmo, podia começar assim: “Quando você me ouvir, amor/ Não me negue o sentimento...”. É inevitável sensação de afirmação do sentimento do amor dito da maneira mais convincente que existe: com amor na voz.</p>
<p><em>Estrela soberana</em>, de Elba e Geraldo Azevedo, é pra se ouvir “rezando”, é prece. Dessas músicas que surpreendem primeiro o autor e cria um efeito dominó que segue surpreendendo até o ultimo ouvinte, que, como não existe, não vai parar de ser ouvida nunca. É prece. E se seu CD-player estiver no modo repetição, deixa o violão de Lenine entrar. Entra no mesmo tom, por acaso? Carlo que não, é coisa que cada um busca explicação onde não tem, é somente pra ouvir tudo de novo mesmo.</p>
<p>Deixei por último, de propósito, <em>Se eu tivesse asa</em>, de Geraldo Azevedo e Geraldo Amaral, não somente porque é uma bela canção, com uma assinatura inconfundível do primeiro Geraldo, maravilhosamente acompanhada pelo segundo Geraldo, mas é porque o título me deixou curioso: como assim “Se eu não tivesse asa”, Elba? E não tem?</p>
<p>&nbsp;</p>
<p><strong><em>Dudu Falcão</em></strong>
',
'sbr_disco' => '<p>BMG Brasil 7.432.184.263-2<br />
Lan&ccedil;amento: mar&ccedil;o de 2001</p>',
'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Dire&ccedil;&atilde;o art&iacute;stica: Jorge Davidson<br />
Gerente art&iacute;stico: Sergio Bittencourt<br />
Produzido por: Elba Ramalho<br />
Diretor musical: Marcos Farias<br />
Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Gaetano Lops<br />
Assistente de produ&ccedil;&atilde;o: Danielle Ramalho</p>
<p>&nbsp;</p>
<p>Gravado no Rio Mix Est&uacute;dio/RJ entre dezembro de 2000 e janeiro de 2001<br />
T&eacute;cnico de grava&ccedil;&atilde;o: Didier Fernan<br />
Mixado por Marcos Farias no est&uacute;dio Laemkasa (DF), exceto:<br />
&ldquo;Entre o c&eacute;u e o mar&rdquo;, gravada no est&uacute;dio Caverna e mixada no AR Est&uacute;dios (engenheiro de grava&ccedil;&atilde;o: Rodrigo Vidal / assistente: Luiz&atilde;o Dantas);<br />
&ldquo;Sem ganz&aacute; n&atilde;o &eacute; coco&rdquo;, gravada no est&uacute;dio Anonimato (SP) por Carlos Aru e Andr&eacute; Rebelo. Viol&otilde;es e vocais gravados no est&uacute;dio Tamos A&iacute; (SP) por M&aacute;rio Manga;<br />
&ldquo;Cirandeira&rdquo;, mixada por Lenine no est&uacute;dio Impress&atilde;o Digital (engenheiro de mixagem: Damian Falconier).<br />
Vocais gravados no est&uacute;dio Pro&aacute;udio (CE) &ndash; engenheiro de som: Andr&eacute; Motta<br />
Masteriza&ccedil;&atilde;o: Magic Master (Mauro Bianchi)</p>
<p>&nbsp;</p>
<p>Capa: Andr&eacute; Lops e Gaetano Lops<br />
Fotos: Murillo Meirelles<br />
Detalhe do painel de Ion Muresanu: acervo do Costa Brava Clube/RJ<br />
Maquiagem: Ton Hyll<br />
Figurino: Elba Ramalho e Daniela Oliveira<br />
Coordena&ccedil;&atilde;o gr&aacute;fica: Luis Felipe Couto e Emil Ferreira</p>
<p>&nbsp;</p>
<p><strong>TEXTO ORIGINAL DO DISCO</strong></p>
<p>Compartilho com todos a alegria de realizar mais um trabalho e agrade&ccedil;o aos amigos pela presen&ccedil;a e pela f&eacute;. Ao maestro Marcos Farias (filho ilustre de Marin&ecirc;s e Abdias), Arlete Soares, Emmanuel, Julieta, Jorge Nova, &agrave; galera de Trancoso e aos parceiros Geraldinho, Chico C&eacute;sar, Zeca Baleiro e Lenine. Agrade&ccedil;o a Nossa Senhora pelas b&ecirc;n&ccedil;&atilde;os e inspira&ccedil;&otilde;es. Luz, amor e paz!</p>
<p>&nbsp;</p>
<p>Elba Maria Nunes Ramalho<br />
</p>
',
'slug' => 'cirandeira',

'foto_fundo' => 'elba_album_24.jpg',
'capa_disco' => 'cd24.jpg',
'capa_sm' => 'cd24-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Elba Canta Luiz',
'ano' => '2002',
'release' => '<p><strong>ELBA CANTA LUIZ</strong></p>
<p>&nbsp;</p>
<p>Eita, forró de fôlego que o resfolego do fole não nega. Logo quando os meninos do forró universitário vão se achando, cheios de cavilação, chega à praça este <em>Elba canta Luiz</em>. É matéria obrigatória. Trata-se do disco de uma das melhores cantoras do gênero interpretando o seu melhor compositor, e intérprete. Elba Ramalho cantando Luiz Gonzaga (e com arranjos de Dominguinhos) é uma oportunidade para que gerações diversas se deliciem com uma música viva, nascida nos pés-de-serra do Nordeste há mais de um século, sob a luz dos candeeiros, e que se mostra jovial e altiva ainda hoje iluminada pelo neon das grandes cidades.</p>
<p>Pois não é que o forró não envelheceu? Pelo contrário, até remoçou. E este <em>Elba canta Luiz</em> dispensa acessórios. A base não podia ser melhor. É Dominguinhos na sanfona e os outros dois integrantes de seu trio: Dió de Araújo, na zabumba, e Fuba de Taperoá, no triângulo e no pandeiro. Além de tocar, os três cantam com Elba no disco. Dominguinhos, na homenagem feita por ele e o poeta Oliveira (<em>Canta Luiz</em>), e os dois ritmistas quebram tudo no <em>Calango da lacraia</em>, música feita por Gonzaga e Jeová Portela ainda em 1946. Outro que mostra intimidade com o cantor nordestino e empresta molejo carioca a essa festa brasileira é Zeca Pagodinho em <em>O xamego da Guiomar</em>, do rei do baião com Miguel Lima, composta em 1943.</p>
<p>A diversão, a galhofa, a brincadeira, a picardia e o humor nordestinos são a escolha clara de Elba para cantar neste disco. Solene mesmo só o aboio de Gonzaga no final. Comovente. O resto é pro riso, pra dança, pro chamego, de canto de parede ou no meio do salão, em cocos, arrasta-pés, xotes e obviamente baiões. Nem tudo foi composto por “seu” Luiz. Como <em>A sorte é cega</em> (Luiz Guimarães), <em>Orélia</em> (Humberto Teixeira, um dos seus principais parceiros), <em>Sorriso cativante</em> (do próprio Dominguinhos em parceria com Anastácia), <em>Facilita</em> (Luiz Ramalho), <em>O cheiro da Carolina</em> (Amorim Roxo e Zé Gonzaga), <em>Nega Zefa</em> (Severino Ramos e Noel Silva) e também “<em>Coco xeem</em>” (Severino Ramos e Jaci Santos).</p>
<p>Mas é tudo Gonzaga. Coisas que ele cantou Brasil afora e até fora do Brasil, abrindo caminho para sua própria geração e as coisas subsequentes que cantariam a música do povo do Nordeste. Essa música que, ao lado do samba, tem sido tão importante para a criação, afirmação e renovação da identidade cultural do brasileiro, mesmo que nem sempre lhe reconheçam.</p>
<p>E, óbvio, mais Gonzaga ainda as que ele compôs durante quase meio século. E Elba agora. <em>Danado de bom</em>, dele com João Silva (de 1984), abre o disco e dá uma mostra do sofisticado compositor que é Luiz Gonzaga. Já com 72 anos quando compôs essa música, dá um banho de noção rítmica e melódica. Só aí, com o disco homônimo (que teve participação de Elba), com essa idade e toda a grandeza de sua música e história é que ele ganhou o seu primeiro Disco de Ouro.</p>
<p><em>Quer ir mais eu</em>, marcha-frevo em parceria com Miguel Lima, de 1947, mostra que a maestria de Luiz Gonzaga vem de longe. Com a sanfona de Toninho Ferragutti, as flautas de Milton Guedes e a percussão de Paulinho He-Man, está pronta para levantar poeira até em piso encerado. É uma alegria só. A abertura do “O x<em>ote das meninas</em>” (feita em 1953 por Gonzaga e Zé Dantas, seu mais importante parceiro ao lado de Humberto Teixeira) com Lua (apelido dado por Paulo Gracindo) imitando gaiato o “farafunfun” da sanfona, traz até nós, na nossa intimidade, esse artista que soube como ninguém traduzir o sertão nordestino em sua arte. E Elba entra logo cantando com a propriedade de quem enjoou da boneca e começou seus namoricos nos sertões de Piancó. Ao som de Gonzaga.</p>
<p>Outra parceria com Zé Dantas, a também muito conhecida <em>Vem, morena</em> (baião de 1949). O convite é para a tal “morena”. Difícil vai ser conter as ruivas, loiras e mesmo os rapazes de tez diversa diante desse apelo à dança, que nos deixa com o sangue em “arvoroço” pra cair no forró miudinho comandado por Elba. Como dizem os cariocas, é “tudo de bom”. Feito o <em>Aquilo bom</em>, de Luiz Gonzaga e Severino Ramos, de 1972, que abre a seleta de xotes malandros completada por <em>Facilita</em> e <em>O cheiro da Carolina</em>.</p>
<p>Mais uma parceria com Miguel Lima é <em>Xamego</em> (de 1944), em que Elba mostra o que aprendeu, bem aprendido, com Jackson do Pandeiro e com o próprio Luiz Gonzaga. Dividindo os versos, “quebrando” na divisão, percutindo as consoantes e fazendo soar os silêncios. Logo depois faz o mesmo com o xote <em>Numa sala de reboco</em> (um dos preferidos nos ambientes onde a juventude contemporânea dança forró), parceria de 1964 de “seu” Luiz com o “caboco” José Marcolino. A letra aí, contrariando a tradição das parcerias gonzagueanas, é do Rei do Baião e a melodia é do parceiro.</p>
<p>Este é mesmo um disco de grande importância para a música brasileira. Como um disco de Elis Regina cantando Tom Jobim. Ou Inezita Barroso interpretando Tonico e Tinoco, ou Pena Branca e Xavantinho. Ou ainda uma possível leitura de Rebeca Matta para os Mutantes. O reconhecimento imediato dessas canções e o sentimento de identificação com elas parecem nos lançar luz sobre estas impertinentes perguntas que sempre nos assaltam: “Quem somos? De onde viemos? Para onde vamos?”. Um pouco de nós é o que essas músicas são. E veio de onde essas músicas vieram. E vai para onde essas músicas vão. Um pouco de nós é Luiz Gonzaga. E veio dele. E para ele vai, bem como responde Elba Ramalho.</p>
<p>Muitas dessas canções Gonzaga tocou ainda nos anos 40 e 50 do século passado e Elba Ramalho vem agora nos tocar com elas. Para nos tirar do chão e dizer: <em>Canta Luiz</em>. Ao que, agradecidos, dizemos no compasso da zabumba: “Canta, Elba”. Canta e traz o luzeiro de Gonzaga para clarear o caminho que nos leva a essa sala de reboco onde somos gente. Ou à beira dessa fogueira onde somos brincantes de nossa própria história e vida.</p>
<p>&nbsp;</p>
<p><strong><em>Chico César</em></strong></p>
<p><em>(março de 2002)</em></p>
',
'sbr_disco' => '<p>BMG Brasil &ndash; CD 7.432.191.535-2<br />
Lan&ccedil;amento: mar&ccedil;o de 2002</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p>Direção artística: Jorge Davidson</p>
<p>Produzido por: Elba Ramalho e Dominguinhos</p>
<p>Produção executiva: Gaetano Lops</p>
<p>Assistente de produção: Vavá Ramalho</p>
<p>&nbsp;</p>
<p>Gravado no estúdio Pedra da Gávea (RJ) em dezembro de 2001 e janeiro de 2002</p>
<p>Mixado no estúdio D’Brou (RJ) nos meses de dezembro de 2001 e janeiro de 2002</p>
<p>Engenheiro de som (gravação e mixagem): Renato Muños</p>
<p>Masterizado no Magic Master Estúdio (RJ) por Ricardo Garcia</p>
<p>&nbsp;</p>
<p>Fotos: Nana Moraes</p>
<p>Assistente: Júlio Carlos</p>
<p>Produção de figurino: Cristina França e Bebel Moraes</p>
<p>Roupas: Eliza Conde e Zoomp</p>
<p>Jóias: H. Stern, Lafite e Rajhastan</p>
<p>Assistente: Jeane Figueredo</p>
<p>Make-up: Ricardson Costa (Rick)</p>
<p>Cenário de flores: Suzane Carvalho</p>
<p>Projeto gráfico: 2@ Studio Digital Ltda.</p>
<p>Direção de arte: Gaetano Lops</p>
<p>Criação e editoração eletrônica: André Lops e Aline Antonoff</p>
<p>Coordenação gráfica: Luiz Felipe Couto e Emil Ferreira</p>
<p>&nbsp;</p>
<p>Agradecimentos especiais a Dominguinhos, Zeca Pagodinho, Arlindo Cruz, Arlindo dos Oito Baixos (pela sanfona branca pertencente ao Mestre Gonzagão), Marcos Soares e Vavá, Jorge e Jussara, Adenildo Batista (presidente do fã-clube Ave de Prata), Frejat, Renato Muñoz, Marcos Arcanjo, Camilo Mariano, Paulinho He-Man, Fuba e Dio.</p>
<p>&nbsp;</p>
<p><strong>TEXTO ORIGINAL DO DISCO</strong></p>
<p>A voz de Seu Gonzaga é a voz do Nordeste! É a voz do São João e São Pedro, do retirante, do vaqueiro; é a voz da chuva e da seca, da Asa Branca voltando, da acauã agourando, é a voz da dor e da alegria. É a voz que aprendi a amar desde criança e até hoje me enleva e me leva de volta pro sertão. Revisitar sua obra fez brotar novas emoções e boas gargalhadas. É tudo tão verdadeiro, tão original, essencial e bom, que o jeito foi trilhar os caminhos da emoção e fazer um disco com músicas que estavam acesas na fogueira do meu coração. Não basta dizer que o amo muito e que sei também do seu amor por mim. Sei da sua confiança e fé no meu compromisso com a música do nosso povo, e isto serve de alimento, um bálsamo para a alma. É por tudo que nos une que sei que receberá esta singela homenagem com o mesmo amor que a envio. No mais, é só alegria e música e o prazer de tê-lo sempre cantando. Canta Luiz!</p>
<p>&nbsp;</p>
<p>Elba Ramalho</p>
',
'slug' => 'elba_canta_luiz',

'foto_fundo' => 'elba_album_25.jpg',
'capa_disco' => 'cd25.jpg',
'capa_sm' => 'cd25-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Elba Ao Vivo',
'ano' => '2003',
'release' => '<p>Quando gravei <em>Elba canta Luiz</em>, encontrei dificuldades de compactar em um único CD a<br> vasta obra de Luiz Gonzaga, imprescindível e essencial em todas as dores e alegrias aos <br> seus fiéis seguidores. O resultado final foi que o que se previa: por que não cantou <br> <em>Assum preto</em> ou <em>Qui nem jiló</em>? E <em>Asa branca</em>? Decidi então prosseguir na trilha de Seu <br> Luiz cantando pérolas para serem tocadas aos povos e que compõem o grande <br> caldeirão de ritmos e signos da música do Nordeste. Pelas vias e veias desse bravo e <br> fabuloso mestre, coroado pelo seu povo como eterno Rei do Baião, há muito mais para <br> ser descoberto e saboreado. O resultado é ao vivo, já que desta vez a gravação foi feita <br> diretamente do palco do ATL Hall, num único dia de show, especialmente montado <br> para a gravação do meu primeiro DVD solo e que será lançado junto com o CD <em>Elba Ao <br> Vivo</em>, a partir de março, em todo o Brasil.</p>
<p>O espetáculo teve a direção do magnífico Gabriel Villela. Juntos, construímos o roteiro <br> bem como todo o conceito do show, após longas noites de delírios, prosas e longas <br> caminhadas sob a árida terra do sertão nordestino. A eterna e clássica <em>Asa branca</em> abre <br> a sessão para fazer desfilar a alegria, com algumas pitadas de solidão. <em>A vida do <br> viajante</em> é um xote que identifica todo artista como um navegador. Da beira do cais ao <br> poente no Saara, o importante é caminhar e caminhar. Essa bela composição de <br> Gonzaga, em parceria com Hervé Cordovil, foi originalmente gravada por Seu Luiz e <br> seu querido filho, Gonzaguinha. <em>Imbalança</em> é uma parceria de Gonzaga com Zé Dantas <br> e estava um pouco esquecida nos velhos discos. Essa releitura em forma de coco-<br> samba-de-roda dá o tom do fogo na mistura. Tem <em>Pagode russo</em>, de Gonzaga e João <br> Silva, e Luiz Bandeira na bela melodia da animada <em>Onde tu tá neném</em>.</p>
<p>Os xotes são uma espécie de abre-alas na nossa escola. <em>Numa sala de reboco</em> e <em>Estrada <br> do Canindé</em>, parcerias de Seu Luiz com José Marcolino e Humberto Teixeira, <br> respectivamente, são a paisagem viva da felicidade. Cometemos uma ousadia ao <br> transformar o xote em um samba-reggae, na bela <em>Juazeiro</em>, um clássico de Gonzaga e <br> Humberto Teixeira que Alceu Valença adora cantar <em>à capella</em>. Como algumas citações <br> poéticas musicais, descansam à sua sombra Chico César, Zé Ramalho e Timbalada. O <br> Gabriel Villela sugeriu a inclusão de <em>Luar do sertão</em>, um clássico da música brasileira, de <br> Catulo da Paixão Cearense e João Pernambucano. Foi uma honra cantá-la, por todas as <br> imagens e beleza.</p>
<p>Há muitos anos, rolava solto o forró na casa da minha irmã Vavá, lá na Paraíba. <br> Estávamos eu, Dominguinhos, Seu Gonzaga, quando ousei tocar no violão uma valsa <br> que havia aprendido com meu pai ainda na infância, oferecendo-a a Seu Luiz. Para <br> minha surpresa ele disse: “Elba, essa música é minha!”. <em>Dúvida</em>, uma valsa composta <br> em 1946 em parceria com Domingos Ramos. <em>Súplica cearense</em> é uma das minhas <br> preferidas, principalmente pelo arranjo, detalhadamente trabalhado por mim em <br> parceria com os músicos. Essa bela página da música brasileira é de Gordurinha e <br> Nelinho. <em>Qui nem jiló</em> é um baião muito conhecido e já havia gravado com Seu Luiz há <br> muitos anos atrás. Aí está mais uma versão da alegria de Seu Luiz em parceria com <br> Humberto Teixeira. <em>Assum preto</em> (Luiz Gonzaga e Humberto Teixeira) e <em>Sabiá</em> (Luiz <br> Gonzaga e Zé Dantas) são os pássaros da minha infância. Uma lembrança tão presente <br> quanto ausente. <em>De volta pro aconchego</em> traz a presença de Dominguinhos, o grande <br> mestre do acordeom, que em parceria com Nando Cordel imortalizaram esta canção e <br> que eu, honrosamente, a cantei pela primeira vez. Essa música não consta no roteiro <br> musical de Seu Luiz, mas certamente que não ficaria fora do seu coração. Uma <br> promessa de nosso eterno amor e admiração.</p>
<p>O medley final mistura as quadrilhas juninas que animam as festas de São João e São <br> Pedro. <em>Nem se despediu de mim</em> (Luiz Gonzaga e João Silva), <em>São João do carneirinho</em> <br> (Luiz Gonzaga e Guio de Moraes) e <em>Pedras que cantam</em> (Dominguinhos e Fausto Nilo), <br> pra fazer rolar a festa. No mais é só o prazer de cantar aqui ou em qualquer lugar.</p>
<p>O melhor momento de todo artista é quando se expressa no balanço da sua dança.<br/>Aqui está mais uma festa brasileira em forma de xotes, baiões e xaxados que <br> oferecemos ao mundo. O DVD é mais completo e traz maracatu em forma de <em>Festa</em> <br> (Gonzaguinha), o chorinho <em>Treze de dezembro</em> em sua homenagem, com letra de <br> Gilberto Gil para uma composição de Luiz Gonzaga e Zé Dantas. Traz o também <br> pernambucano Alceu Valença em <em>Ciranda da rosa vermelha</em> e a dramática <em>Acauã</em> (Zé <br> Dantas), mais um pássaro da minha infância.</p>
<p>&nbsp;</p>
<p><strong><em>Elba Ramalho</em></strong></p>
<p><em>(março de 2003)</em></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Mais de 300 mil pessoas assistiram ao show <em>Elba canta Luiz</em>, que chega agora às lojas <br> em CD e DVD. Homenageando o Rei do Baião, Luiz Gonzaga, Elba Ramalho faz uma <br> grande festa ao som de xotes, baiões e xaxados. O CD tem 14 músicas exclusivas <br> extraídas do show <em>Elba canta Luiz</em>. O DVD traz o show na íntegra, com 26 faixas, <br> incluindo as participações de Zeca Pagodinho e Dominguinhos, além de dois clipes. A <br> direção é de Gabriel Vilella, um dos principais diretores de teatro do país. O resultado <br> é um espetáculo que mistura cor, efeitos de luz, dança e a contagiante energia de Elba <br> Ramalho.</p>
<p>O DVD tem faixas que podem ser assistidas em vários ângulos, além de comentários da <br> cantora sobre cada uma das músicas. Uma imperdível festa nordestina.</p>
',
'sbr_disco' => '<p>BMG Brasil 7.432.197.123-2<br />
Lan&ccedil;amento: mar&ccedil;o de 2003</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p><strong>SHOW</strong></p>
<p>Gravado ao vivo no ATL Hall (RJ) no dia 26 de outubro de 2002</p>
<p>Banda</p>
<p>Teclados: Luiz Antônio</p>
<p>Guitarra, viola e violão: Marcos Arcanjo</p>
<p>Contrabaixo: Jacaré</p>
<p>Saxofone, flauta e violoncelo: Ocelo Mendonça</p>
<p>Bateria: Camilo Mariano</p>
<p>Acordeom: Renato Cigano</p>
<p>Percussões: Paulinho He-Man e Anjo Caldas</p>
<p>Vocais: Jussara Lourenço, Daniel Maia e Leonardo Diniz</p>
<p>&nbsp;</p>
<p>Direção do show, cenários e figurinos: Gabriel Villela</p>
<p>Direção musical: Luiz Antônio</p>
<p>Direção de produção: Gaetano Lops</p>
<p>Direção de palco e produção executiva: Alexandre Valentim</p>
<p>Roteiro: Elba Ramalho e Gabriel Villela</p>
<p>Projeto de luz e operação de luz: Renato Ribeiro</p>
<p>Operação de moving-light: Danny Pudny</p>
<p>Operação de P.A.: Paulo P.A.</p>
<p>Operação de monitor: Rodrigo Lopes</p>
<p>Roadies: Josino Feitosa e Flávio Ribeiro</p>
<p>Assistentes de produção: Zeca Santana e Marcos Soares</p>
<p>Make-up: Rick Costa</p>
<p>Camarins: Soninha</p>
<p>Assessoria Elba: Vavá</p>
<p>Assessoria de imprensa: Ivone Kassú</p>
<p>&nbsp;</p>
<p><strong>DISCO</strong></p>
<p>Produzido por Elba Ramalho</p>
<p>Realização: BMG Brasil e Ramax Produções</p>
<p>Direção artística: Sérgio Bittencourt</p>
<p>Coordenação: Paula Melo</p>
<p>Engenheiro de gravação e mixagem: Renato Muñoz</p>
<p>Assistentes: André Coelho e Rodrigo Duarte</p>
<p>Estúdio de mixagem: Discover Estúdio</p>
<p>Coordenação de mixagem: Marcos Arcanjo</p>
<p>Masterização: Classic Master por Carlos Freitas</p>
<p>Coordenação geral: Gaetano Lops</p>
<p>&nbsp;</p>
<p>Fotos: Priscila Franco</p>
<p>Design da capa: Fábio Delduque</p>
<p>Coordenação gráfica: Rosangela Almeida e Emil Ferreira</p><br>',
'slug' => 'elba_ao_vivo',

'foto_fundo' => 'elba_album_26.jpg',
'capa_disco' => 'cd26.jpg',
'capa_sm' => 'cd26-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Elba e Dominguinhos',
'ano' => '2005',
'release' => '<p>Todos conhecemos e apreciamos as qualidades vocais e a força de intérprete de Elba Ramalho e isso fica confirmado mais uma vez neste disco que ela lança agora com Dominguinhos.</p>
<p>Este sim, é para mim uma surpresa, mas como? Por quê? Havemos de perguntar, já que também de Dominguinhos conhecemos e admiramos o belo trabalho que faz a grave voz que tem. Só espero que não seja só os meus ouvidos, o sanfoneiro querido de Luiz Gonzaga está cantando como nunca neste disco.</p>
<p>A mesma voz mansa e densa e a mesma expressão sincera e jocosa do seu tom baritonado. Mas há algo aqui neste disco que eu não sei o que é no cantar de Dominguinhos. Nós ouvintes, talvez cheguemos a descobrir, espero quem sabe, o espaço propiciado pela extensão entre o seu timbre e o da Elba tenha me levado a ouvir tonalidades intermediárias que ainda não havia ouvido em Dominguinhos; talvez a genuína paixão da Elba pelo canto esmerado em afinação e agudez tenha levado nosso emérito sanfoneiro e compositor a esmerar-se também em revelar cores inéditas do seu canto. Talvez, simplesmente, eu esteja “ouvindo” coisas.</p>
<p>De qualquer modo o repertório, a excepcional capacidade de ocupar os interstícios rítmicos entre a pele, o aro da zabumba e o triângulo filigranado, tenham me dado a impressão de que algo novo acontece na expressividade vocal destes dois intérpretes do Nordeste. Ouçam e me digam depois.</p>
<p>&nbsp;</p>
<p><strong><em>Gilberto Gil</em></strong></p>',

'sbr_disco' => '<p>BMG Brasil 8.287.666.596-2<br />
Lan&ccedil;amento: mar&ccedil;o de 2005</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p>Produzido por: Zé Américo Bastos</p>
<p>Direção artística: Sérgio Bittencourt</p>
<p>Produção executiva e coordenação geral: Gaetano Lops</p>
<p>Assistente de produção: Fatinha Costa</p>
<p>Engenheiro de gravação e masterização: Vanius Marques</p>
<p>Assistente: Douglas de Souza</p>
<p>Mixado por Zé Américo Bastos e Vanius Marques</p>
<p>Roadies: Josino Feitosa e Flávio Ribeiro</p>
<p>Gravado em outubro de 2004 no estúdio Cia dos Técnicos (RJ)</p>
<p>Pré-produção: Zap Studio</p>
<p>&nbsp;</p>
<p>Capa e projeto gráfico: Luiz Stein (LSD)</p>
<p>Fotos: Adriana Pittigliani</p>
<p>Designers assistentes: Darlan Carmo e Diogo Reis</p>
<p>Produção LSD: Caru Zilber</p>
<p>Assistente de fotografia: Antônio Terra</p>
<p>Make-up: Ton Hyll</p>
<p>Cabelo: Marcelo da Costa Harpa</p>
<p>Coordenação gráfica: Rosângela Almeida e Emil Ferreira</p>
<p>Todos os objetos cenográficos utilizados na produção da capa</p>
<p>foram cedidos pela loja “Cobras e Lagartos”.</p>
<p>&nbsp;</p>
<p>Agradeço a Deus por ter saúde e continuar tocando minha</p>
<p>sanfoninha. Dominguinhos</p>
',
'slug' => 'elba_e_dominguinhos',

'foto_fundo' => 'elba_album_27.jpg',
'capa_disco' => 'cd27.jpg',
'capa_sm' => 'cd27-sm.jpg',
'disco_tipo' => '1',  ));


Discos::create(
array(
'nome_disco' => 'Qual O Assunto Que Mais Lhe Interessa?',
'ano' => '2007',
'release' => '<p><strong>Qual o assunto que mais lhe interessa:</strong></p>

<p>1. O amor, o romance desfibrilado, o cora&ccedil;&atilde;o de veias apressadas. A paix&atilde;o harmonizada e contemplativa. O par em sintonia com o cosmos.<br />
2. O derretimento das calotas polares. O efeito estufa. O aquecimento global. O turbilh&atilde;o das &aacute;guas inundando terra&ccedil;os &agrave; beira-mar. O sol rachando a terra.<br />
3. A decad&ecirc;ncia da dec&ecirc;ncia, a escassez moral. O moto-perp&eacute;tuo, o c&iacute;rculo vicioso da gan&acirc;ncia.<br />
4. Uma nuvem de borboletas invadindo a cidade.<br />
5. A morte de Saddam, Pinochet e Yeltsin em menos de quatro meses.<br />
6. A f&eacute; removendo montanhas na sua cabe&ccedil;a, a for&ccedil;a inabal&aacute;vel dos peregrinos. A liturgia das novenas rezadas, mantras em looping, hipnotizando fam&iacute;lias na aridez sertaneja.<br />
7. A gentileza civilizat&oacute;ria dos motoristas e pedestres no cotidiano assassino do tr&acirc;nsito. Os ru&iacute;dos da metr&oacute;pole estrangulada.<br />
8. O movimento r&aacute;pido dos olhos, no momento do sonho.<br />
9. A passeata revolucion&aacute;ria dos bois de festejo.<br />
10. Os beijos.</p>

<p>Este novo &aacute;lbum de Elba Ramalho &eacute; um vasto card&aacute;pio de assuntos. E de paisagens sonoras. E aquela voz que arrasta junto com ela uma ambi&ecirc;ncia. Uma atmosfera pr&oacute;pria e inconfund&iacute;vel.<br />
Ora o solfejo da do&ccedil;ura e da celebra&ccedil;&atilde;o amorosa. Ora o tom dram&aacute;tico, apocal&iacute;ptico dos arautos. Ora a indigna&ccedil;&atilde;o perplexa, ora a sabedoria ancestral da paci&ecirc;ncia transformadora.<br />
Puro Elba.<br />
Cantando pros anjos. Com o apuro da maturidade e o sopro jovial dos inquietos.<br />
&Eacute; um disco para ouvir inteiro. Mais do que um rol de can&ccedil;&otilde;es, um passeio pelos caminhos de sol e de sombra na amplid&atilde;o dos sentimentos humanos.<br />
Elba &eacute; uma corisca cintilante, princesa do Cosmo. Foi uma honra trabalhar e poder estar perto dela e da fam&iacute;lia. Segundo est&atilde;o dizendo ficou muito bom. Ave Ramalho...</p>

<p><strong><em>Lula Queiroga</em></strong></p>

<p><em>Qual o assunto que mais lhe interessa</em>, o mais novo CD de Elba Ramalho, mostra em primeiro lugar uma unidade de sonoridade e de esp&iacute;rito com os discos mais significativos e de maior impacto na carreira da cantora. Para quem passeia com tanta facilidade por diferentes ritmos, Elba tem uma obra de enorme continuidade e coer&ecirc;ncia. Elba n&atilde;o &eacute; basicamente uma forrozeira, como Marin&ecirc;s. N&atilde;o &eacute; basicamente uma sambista, como Beth Carvalho; ou uma cantora de &ldquo;m&uacute;sica baiana&rdquo; como Ivete Sangalo ou Daniela Mercury, uma int&eacute;rprete de music-hall, de bolero, de frevo ou de baladas rom&acirc;nticas como dezenas. J&aacute; vestiu todos esses modelos, mas nenhum deles a define como cantora.<br />
<em>Qual o assunto que mais lhe interessa</em> revela, a partir da faixa-t&iacute;tulo, uma preocupa&ccedil;&atilde;o em dizer, contar, discutir. Sem a inten&ccedil;&atilde;o de fazer a cabe&ccedil;a do p&uacute;blico ou de propagandear uma ideologia, mas por uma necessidade de falar de assuntos interessantes. Por mais que a obra de Elba seja uma festa permanente, com muito som, muita luz, muito peso e amplifica&ccedil;&atilde;o, muita gente no palco, se tudo isso fosse arrancado n&atilde;o deixaria um vazio: deixaria a medula que move o seu trabalho, e que &eacute; a mais nobre miss&atilde;o de um artista, segundo Bob Dylan: &ldquo;contar hist&oacute;rias e fazer perguntas&rdquo;.<br />
Elba &eacute; porta-voz de compositores que revelou, ou que, mesmo j&aacute; gravados por outros artistas, tiveram na sua voz as interpreta&ccedil;&otilde;es mais vigorosas e inesquec&iacute;veis. Elba n&atilde;o canta apenas &ldquo;por cantar&rdquo;, sempre cantou para dizer: para contar hist&oacute;rias, para lembrar lugares, para explicar pessoas, para revelar uma parte da nossa vida de que a gente n&atilde;o tinha conhecimento. Elba &eacute; uma das cantoras com quem um letrista sente que n&atilde;o desperdi&ccedil;ou seu tempo.<br />
Um aspecto em <em>Qual o assunto que mais lhe interessa</em> remete a um dos discos fundamentais na carreira de Elba, <em>Le&atilde;o do Norte</em> (1996). Ambos se focam num grupo de compositores que servem para delimitar uma esp&eacute;cie de centro de gravidade da MPB. Esse centro &eacute; um n&uacute;cleo de maior densidade ao qual a gente sempre recorre para n&atilde;o se perder nos labirintos fractais de uma contemporaneidade que nos oferece diariamente novos estilos, novos g&ecirc;neros, novas tend&ecirc;ncias, novas tribos, novas tecnologias, novos modelos, novos canais de veicula&ccedil;&atilde;o, novas receitas salvadoras, novas liberdades obrigat&oacute;rias. <br />
Em <em>Le&atilde;o do Norte</em>, Elba havia retornado a esse centro buscando a obra de Lauro Maia, Z&eacute; Ramalho, Luiz Gonzaga, Caymmi, Jackson do Pandeiro; e conectando a ela a obra de seus contempor&acirc;neos Lenine e Chico C&eacute;sar. Depois de uma s&eacute;rie de discos em que a cantora tinha visitado de passagem variados estilos musicais, <em>Le&atilde;o do Norte</em> produziu em todos a sensa&ccedil;&atilde;o de que alguma coisa de repente fez contato, de que uma conex&atilde;o que estava t&ecirc;nue e vagarosa se avivou, e uma corrente de energia, que nunca havia secado por completo, recome&ccedil;ara a fluir. &Eacute; uma sensa&ccedil;&atilde;o parecida a que produz <em>Qual o assunto que mais lhe interessa</em>, quando vemos Elba contatar novamente o universo de Gonzaga e Jackson, s&oacute; que agora atrav&eacute;s de seus herdeiros Maciel Salu &amp; Jam da Silva e Accioly Neto. Ou quando essas can&ccedil;&otilde;es se misturam &agrave;s de nomes como Jo&atilde;o Nogueira &amp; Paulo C&eacute;sar Pinheiro ou Jorge Ben Jor (que Elba havia interpretado raramente); e quando dialogam com o que poder&iacute;amos chamar de &ldquo;pop-popular&rdquo; (num paradoxo t&iacute;pico da cultura de massas) feito por Pedro Osmar &amp; Paulo R&oacute;, por Carlinhos Brown e por Chico C&eacute;sar. Para n&atilde;o falar nos contempor&acirc;neos Pedro Lu&iacute;s &amp; Ivan Santos, Arnaldo Antunes, Capinam &amp; Roberto Mendes, Lenine e Lula Queiroga, al&eacute;m dos eternos parceiros Geraldo Azevedo e Z&eacute; Ramalho.<br />
Um dos assuntos que mais interessam a Elba neste momento &eacute; a religi&atilde;o, e o que poderia redundar num leque de can&ccedil;&otilde;es evangelizadoras tem neste disco um perfil de musicalidade pura. <em>Ave anjos angeli</em> de Ben Jor &eacute; uma invoca&ccedil;&atilde;o &agrave; Divindade e uma rever&ecirc;ncia de quem &eacute; recebido em terreiro amigo: &ldquo;D&aacute; licen&ccedil;a de cantar nesse lugar...&rdquo; Uma das mais belas can&ccedil;&otilde;es do disco &eacute; a que &eacute; dedicada a Nossa Senhora: <em>Concei&ccedil;&atilde;o dos Coqueiros</em> (Lula Queiroga, Lulu Oliveira e Alexandre Bicudo), que traz o esp&iacute;rito melanc&oacute;lico, devoto e altivo da religiosidade popular do morro recifense.<br />
Esta &uacute;ltima m&uacute;sica chama a aten&ccedil;&atilde;o para um dos elemento mais vis&iacute;veis em <em>Qual o assunto que mais lhe interessa</em>: a sonoridade digital resultante da presen&ccedil;a do produtor Lula Queiroga e dos seus fi&eacute;is escudeiros Yuri e Tost&atilde;o. Ouvi coment&aacute;rios de que o disco estava &ldquo;moderno&rdquo;, &ldquo;pop&rdquo; e isto me lembrou o aparecimento de <em>Ave de Prata</em> em 1979. O disco de estreia de Elba foi uma surpresa parcial para os que j&aacute; a conheciam. Uma parte esperava um disco de forr&oacute; nordestino, outra esperava um disco de MPB cl&aacute;ssica: e os coment&aacute;rios eram de que se tratava de um disco pop. Apesar de gravado precariamente, ainda &eacute; para muitos ouvintes de Elba um dos discos prediletos, pelo repert&oacute;rio surpreendente, arranjos originais e sonoridades inesperadas. Este novo CD remete a essa faceta moderna que era um dos elementos mais vis&iacute;veis em <em>Ave de Prata</em> e que depois retrocedeu para dar lugar a &ldquo;Elba a forrozeira&rdquo;, &ldquo;Elba a cantora de m&uacute;sica baiana&rdquo; e outros carimbos mais n&iacute;tidos, obrigat&oacute;rios na alf&acirc;ndega da ind&uacute;stria fonogr&aacute;fica.<br />
Enquanto a ind&uacute;stria fonogr&aacute;fica se recicla e se reconstr&oacute;i, este disco recupera o que essa ind&uacute;stria sempre teve de melhor &ndash; grandes compositores, grandes int&eacute;rpretes, grandes can&ccedil;&otilde;es &ndash; e p&otilde;e um p&eacute; na m&uacute;sica do presente, onde cada qual pode usar a sonoridade que mais lhe conv&eacute;m e falar dos assuntos que mais lhe interessam.</p>

<p><strong><em>Braulio Tavares</em></strong><br />
<em>(agosto de 2007)</em>
</p>
',
'sbr_disco' => '<p>RAMAX DRA 81.063 M<br />
Lan&ccedil;amento: outubro de 2007</p>',
'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Direção artística: Elba Ramalho</p>
<p>Produzido por: Lula Queiroga, Tostão Queiroga e Yuri Queiroga</p>
<p>Produção executiva: Gaetano Lops</p>
<p>Assistente de produção: Jorge Nova</p>
<p>Gravado nos estúdios Pedra da Gávea e Luni Áudio</p>
<p>Técnico de gravação: Renato Muñoz</p>
<p>Gravações adicionais: Rodrigo Duarte, Guilherme Medeiros, Lêo Dim, Yuri Queiroga e Tostão Queiroga</p>
<p>Mixado no estúdio D’Brou</p>
<p>Técnico de mixagem: Renato Muñoz</p>
<p>“Tempos quase modernos” mixada por Lêo Dim no estúdio Luni Áudio</p>
<p>Masterização: Magic Master</p>
<p>Técnico de masterização: Ricardo Garcia</p>
<p>&nbsp;</p>
<p>Fotos: Helena de Castro</p>
<p>Assistente: Juliana Carneiro</p>
<p>Make-up e produção visual: Ton Hyll</p>
<p>Direção de criação: Ricardo Gertrudes</p>
<p>Direção de arte: Pedro Gaia</p>
<p>Caligrafia: Claudia Imperial</p>
<p>Tratamento de imagens: Alex Wink (Studio AW)</p>
<p>Produção: Leo Martinez</p>
<p>Vestido vermelho: Espaço Lundgren</p>
<p>Vestido branco: Acervo pessoal</p>
<p>Sandálias: Elisa Atheniense</p>
<p>Bijuterias: Melinah</p><br>
<p>&nbsp;</p>
<p><strong>TEXTO ORIGINAL DO DISCO</strong></p>
<p>O que distingue este disco dos outros não é só conceito ou sonoridade, mas a porção de carinho que ele contém. Desde o início, quando as primeiras sementes são plantadas por Lenine, parceiro de muitos afetos, até a arrojada e competente produção de Lula, Yuri e Tostão Queiroga.</p>
<p>Gravado no Estúdio Pedra Bonita, em minha casa no bairro de São Conrado, no Rio de Janeiro, regado a vinho, pizza, feijão, farofa, arroz e bife acebolado, entre noites e dias de chuva e sol, este disco se veste de cores e sons com o auxílio luxuoso de Carlos Malta, Dirceu Leite, Toninho Ferragutti, Marcos Arcanjo, Cristina Braga, Lui Coimbra, Paulo Rafael, A Trombonada de Recife, o talento do Maestro Spok e a luminosa presença de Hamilton de Holanda, além da superguitarra de Frejat na música-título “Tempos quase modernos (Qual o assunto que mais lhe interessa?)”</p>
<p>No fragmento de canções, brilha a alma do samba que tanto admiro e a genialidade amorosa de Geraldinho Azevedo, meu amigo de grandes encontros.</p>
<p>Veio cantar comigo um Pensador que tem nome de anjo, o Gabriel, com sua boa energia e sua poesia incidental, oportuna e definitiva. Momento único!</p>
<p>Por mais que este disco soe diferente de tudo que fiz, em nada é adverso ao que sou, de fato!</p>
<p>Obrigada a todos que colaboraram neste trabalho. A Jorge Nova e sua competente assistência, aos técnicos, pela paciência, a Alexandre e todos do escritório pela eficiência. Aos músicos e amigos diversos que por aqui passaram, meu eterno carinho.</p>
<p>Obrigada aos fãs pela fidelidade e cumplicidade.</p>
<p>Minha eterna gratidão a Gaetano, parceiro neste trabalho e pai de minhas lindas filhas. Sem ele, não saberia que rumo tomar.</p>
<p>Um beijo bem gostoso no meu doce filho Luã e o brilho de sua guitarra.</p>
<p>Obrigada a Ricardo, Paula, Helena. Vavá, Fatinha, Gerson, Tuca, Márcia, seu Bebé e toda retaguarda.</p>
<p>Bem e paz a todos!</p>
<p>Elba Ramalho</p><br>
',
'slug' => 'qual_assunto_que_mais_lhe_interessa',

'foto_fundo' => 'elba_album_28.jpg',
'capa_disco' => 'cd28.jpg',
'capa_sm' => 'cd28-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Balaio De Amor',
'ano' => '2009',
'release' => '<p>Balaio de Elba</p>
<p><em>Elba inicia as comemorações dos 30 anos de carreira em álbum que reúne baiões e xotes de compositores pós-Luiz Gonzaga</em></p>
<p>&nbsp;</p>
<p>Ao lançar, em 1979, seu primeiro álbum, <em>Ave de Prata</em>, Elba Ramalho ingressava pela porta da frente no cenário cultural brasileiro. O Brasil estava diante de uma nova artista, de verve expressionista, extremamente original e de performances incendiárias. Elba firmou-se e nunca mais saiu do seleto time principal da MPB.</p>
<p>Passadas três décadas, Elba alcançou muito mais que os horizontes do sertão. A intérprete de sucesso, com seis discos de platina e 13 de ouro acumulados, celebra sua trajetória com o disco <em>Balaio de Amor</em> (Biscoito Fino), uma ode ao Nordeste de compositores pós-Luiz Gonzaga.</p>
<p>Elba define o CD como uma homenagem ao baião e ao xote que, assim como o samba, têm a essência na brasilidade. “São canções que sobreviverão porque fazem parte da tradição de um povo”, afirma a cantora. Além disso, acrescenta, são músicas românticas, relativamente simples, mas de uma poesia muita rica. “É um deleite para os ouvintes mais atentos. Um disco de amor, cheio de recados para quem gosta de dançar e que mostra uma alegria essencialmente nordestina. Tem muita sensibilidade.”, define.</p>
<p>Em <em>Balaio de Amor</em>, Elba retoma uma das principais características de sua carreira: a aposta em talentosos compositores, principalmente da Paraíba e de Pernambuco. Foi a intérprete quem primeiro gravou uma canção de Lenine e ajudou a projetar com registros antológicos Geraldo Azevedo, Belchior, Chico César, Lula Queiroga e outros. Produzido pelo compositor e músico Cezzinha Thomaz, o CD reúne uma boa safra de canções recentes, com belas melodias e letras poéticas, compostas por artistas que dificilmente rompem a barreira geográfica nordestina.</p>
<p>A cantora privilegiou selecionar canções que soassem praticamente inéditas nas demais regiões do país. “Algumas destas músicas são conhecidas pelos nordestinos e o povo acompanha as letras. Sempre fiz bem este trânsito do Nordeste com os outros cantos brasileiros, em meio a essa geografia imensa”.</p>
<p>De compositores já consagrados no eixo Centro-Sul do país, apenas duas faixas de Dominguinhos e uma de Nando Cordel. Do sanfoneiro, com quem já dividiu um álbum, registrou <em>Riso cristalino</em>, parceria com Climério Ferreira, em que o compositor leva o acordeom com Cezzinha e divide, com seu timbre grave, o vocal com Elba, e <em>Ilusão nada mais</em>, esta com Fausto Nilo, que conta com o sax soprano indefectível de Leo Gandelman.</p>
<p>Parceiro de Dominguinhos em dois super sucessos de Elba Ramalho; <em>Gostoso demais</em> e <em>De volta pro aconchego</em>, Nando Cordel contribui com <em>É só você querer</em>, gravada em duo com Cezzinha e já incluída na novela da 19h da Rede Globo, <em>Caras &amp; Bocas</em>. Com introdução lenta e dedilhada ao violão, a melódica composição conta com belo arranjo de cordas e samplers de cordas e já entra de antemão para o time de grandes canções românticas interpretadas por Elba.</p>
<p>Os demais compositores, que fecham as 14 faixas do CD, são em grande parte responsáveis pela renovação do forró – hoje já tão diversificado em subgêneros, como o pé-de-serra, o de latada e o universitário –, mas sempre calcado no tripé: sanfona, triângulo e zabumba. A base sonora clássica, comandada por Cezzinha, é reforçada pela banda formada basicamente por guitarra/violão (Marcos Arcanjo), bateria (Tostão Queiroga), percussão (Anjo Caldas), pad (Zé Américo) e contrabaixo/baixo acústico (Fofão).</p>
<p>As participações do maestro Spok no sax alto, que comanda a orquestra pernambucana que leva seu nome, assim como Nilsinho, da Trombonada e outros dois músicos no trompete e sax tenor são os responsáveis pelos naipes de metais injetados em <em>Não lhe solto mais</em> (Antonio Barros/ Cecéu), <em>Se tu quiser</em> (Xico Bizerra) e <em>Bebedouro</em>, esta última embalada pelo refrão radiofônico: “não suporto mais estas dúvidas, minhas dúvidas”.</p>
<p><em>Fuxico</em>, do compositor do sertão do Araripe – Flávio Leandro, já com oito CDs gravados -, abre o disco como legítima representante do legado de Luiz Gonzaga e Jackson do Pandeiro. Em <em>Um baião chamado saudade</em>, da dupla pernambucana Petrúcio Amorim e Rogério Rangel, a sanfona chorada abriga os versos que falam de amor e perguntam “como tirar do coração o que não sai da cabeça”. A canção <em>Recado</em>, por sua vez, de Cezzinha e Fábio Simões, é considerada pela cantora como uma das mais bonitas do disco. O título do álbum foi pincelado da faixa <em>Oferendar</em> (Flávia Leandro/ Xico Bizerra) que lança o verso inspirador: “cantando um balaio de amor pra dar”.</p>
<p>No balaio de Elba, os forrós ganham as nuances da intérprete singular que nunca abandonou a veia de atriz, a mesma que no passado abriu o caminho para a cantora. É no canto que Elba transparece a experiência de quem já percorreu os mais diversos palcos e amadureceu a voz. “Há 30 anos, quando lancei <em>Ave de Prata</em>, a intérprete vibrante e de timbre marcante já estava lá, mas aprendi a explorar outras regiões vocais; o grave e o médio. A ansiedade da iniciante, que arriscava tudo, deu lugar a uma artista mais serena e dona da arte do seu ofício”, avalia, com satisfação.</p>
<p>&nbsp;</p>
<p><em>Assessoria de Imprensa Elba Ramalho: Factual Comunicação</em></p><br>
',
'sbr_disco' => '<p>Biscoito Fino &ndash; CD BF-909<br />
Lan&ccedil;amento: abril de 2009</p>',
'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p>Produzido por: Cezzinha Thomaz e Elba Ramalho</p>
<p>Coordenação geral: Alexandre Valentim</p>
<p>Assistente de produção: Fatinha Costa e Vavá Ramalho</p>
<p>Gravação base e voz: Estúdio Pedra da Gávea</p>
<p>Gravação de voz – Elba: Zé Américo Bastos</p>
<p>Técnico: Rodrigo Lopes e Rodrigo Duarte</p>
<p>Mixado por Zé Américo Bastos no ZAP Studio</p>
<p>Sopros gravados no Estúdio Luni em Recife</p>
<p>Técnico: Leo Dim</p>
<p>Masterizado por Vânius Marques no estúdio Cia dos Técnicos</p>
<p>&nbsp;</p>
<p>Capa, fotos e conceito artístico: Renato Filho</p>
<p>Figurino e direção de arte: Eduardo Ferreira</p>
<p>Adereços: Eva Duarte</p>
<p>Maquiagem e cabelo: Henrique Mello</p>
<p>Cenografia: Giuliano Calife</p>
<p>Projeto gráfico: Tibério Palmeira</p>
<p>Iluminador: Sandro Santos</p>
<p>Manipulação de imagem: Renaldo Tiburzio</p>
<p>Estúdio fotográfico: Center Multimídia</p>
<p>Realização fotográfica: Stud1um</p>
<p>Assistente de produção Biscoito Fino: Maria Portugal</p>
<p>Adaptação do projeto gráfico: Carlos Artêncio</p>
<p>&nbsp;</p>
<p><strong>TEXTO ORIGINAL DO DISCO</strong></p>
<p>A ideia de cantar o Nordeste pelo afeto e pelo abraço de seus grandes e contemporâneos poetas, músicos e arteiros da festa, não só realiza um sonho antigo como atesta o amor: canteiro florido que carrego no peito pela música e pelo meu povo.</p>
<p>Disco repleto de xotes e baiões, choro e canções, bordado em chitas e enfitado de fitas a colorir nossas festas, coroando de alegria nossos corações.</p>
<p>Na dor ou na alegria, sempre procurei fazer do meu canto o veio mais seguro e salutar de reverenciar essa grande nação nordestina, minha eterna fonte de inspiração. Neste ano em que comemoro 30 anos de carreira, meus olhos buscam mais uma vez o infinito de suas paisagens áridas, mas perfumadas de esperança.</p>
<p>Diante de um mercado urgente e displicente, torna-se alimento eficiente a sanfona, a zabumba e o triângulo, mestres de cerimonia nesse cardápio de saborosos instrumentos, tradução eterna do nosso próprio retrato.</p>
<p>A sanfona está nas mãos de um jovem e brilhante músico, Cezzinha Thomaz, também produtor deste disco e parceiro de todas as horas. A ele toda a minha gratidão e o beijo mais doce. Obrigada por traduzir meus sentimentos em um disco tão bonito.</p>
<p>Agradeço aos músicos e técnicos que fizeram com que tudo se tornasse real.</p>
<p>Do sertão à cidade, os nomes aqui assinalados são da mais alta estirpe!</p>
<p>“Com amor e paixão! Assim se faz a história de um povo, de uma nação.”</p>
',
'slug' => 'balaio_de_amor',

'foto_fundo' => 'elba_album_29.jpg',
'capa_disco' => 'cd29.jpg',
'capa_sm' => 'cd29-sm.jpg',
'disco_tipo' => '1',  ));


Discos::create(
array(
'nome_disco' => 'Marco Zero',
'ano' => '2010',
'release' => '',
'sbr_disco' => '<p>Biscoito Fino &ndash; CD BF-341<br />
Lan&ccedil;amento: outubro de 2010</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p><strong>SHOW</strong></p>
<p><strong>Banda</strong></p>
<p>Arranjos, direção musical e sanfona: Cezzinha Thomaz</p>
<p>Violão e guitarra: Marcos Arcanjo</p>
<p>Bandolim, cavaquinho e guitarra: Sandro Haick</p>
<p>Baixo: Ney Conceição</p>
<p>Bateria: Sergio Machado</p>
<p>Percussão: Anjo Caldas e Lucas dos Prazeres</p>
<p>Zabumba: Durval Ferreira</p>
<p>Teclados: Rannieri Oliveira</p>
<p>Trombone: Nilson Amarante</p>
<p>Sax e flauta: Gilberto Pontes</p>
<p>Trompete: Enok Chagas</p>
<p>Sax alto: Zé Canuto</p>
<p>Vocais: Jussara Lourenço, Claudia Beija e Chê Leal</p>
<p>&nbsp;</p>
<p><strong>DISCO</strong></p>
<p>Gravado ao vivo no Marco Zero/Recife (PE)</p>
<p>Produzido por: Elba Ramalho e Cezzinha Thomaz</p>
<p>Coordenação geral: Alexandre Valentim</p>
<p>Realização: Acauã Produtora</p>
<p>Engenheiro de gravação: Gabriel Pinheiro</p>
<p>Assistente de gravação: Henrique Vilhena</p>
<p>Estúdio de mixagem: Biscoito Fino</p>
<p>Engenheiro de mixagem: Fernando Prado</p>
<p>Assistente de mixagem: Gustavo Krebs</p>
<p>Estúdio de masterização: Visom Digital</p>
<p>Mixado nos Estúdios Carranca de Recife por Júnior Evangelista e Cezzinha Thomaz</p>
<p>&nbsp;</p>
<p>Figurino: Ary Rodrigues</p>
<p>Projeto gráfico: Antônia Ratto Design</p>
<p>Fotos: Beto Figueroa e Marcelo Lyra</p>
<p>&nbsp;</p>
<p><strong>TEXTO ORIGINAL DO DISCO</strong></p>
<p>Realizar este trabalho em tão pouco tempo foi uma ousadia de todos: cantora, músicos, produção... mas deu certo! O esforço foi recompensado, o belo público pernambucano compareceu com a energia explosiva de milhões de volts e fez a festa. Agradeço a Deus, em primeiro lugar; a Biscoito Fino por acreditar; a Alexandre, meu empresário, pelo suporte e execução; ao André Brasileiro, pelo incentivo; à Fatinha, pela força amiga; à Vavá, todos da minha equipe “tour de force” e aos artistas pela presença e brilho na festa. Obrigada ao Cezzinha Thomaz pela competência nos arranjos e direção musical. Espero que todos vocês se divirtam, assim como nós.</p>
<p>&nbsp;</p>
<p>Elba Ramalho</p>
',
'slug' => 'marco_zero',

'foto_fundo' => 'elba_album_30.jpg',
'capa_disco' => 'cd30.jpg',
'capa_sm' => 'cd30-sm.jpg',
'disco_tipo' => '1',  ));



Discos::create(
array(
'nome_disco' => 'São João Carioca',
'ano' => '2012',
'release' => '',
'sbr_disco' => '<p><em>Som Livre - 2466-2</em><br />
<em>Lan&ccedil;amento: junho de 2012</em></p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p>Gravado ao vivo na Quinta da Boa Vista, Rio de Janeiro/RJ, em 12 junho de 2011<br />
Dire&ccedil;&atilde;o geral: Flora Gil e Let&iacute;cia Monte<br />
Dire&ccedil;&atilde;o musical: Gilberto Gil e Elba Ramalho<br />
Elba Ramalho convida: Alcione, Caetano Veloso, Thiaguinho &amp; P&eacute;ricles, Gilberto Gil, Dominguinhos, Geraldo Azevedo e Gusttavo Lima</p><br />

<p><strong>BANDA</strong><br />
Teclados: Z&eacute; Am&eacute;rico Bastos<br />
Baixo: Ney Concei&ccedil;&atilde;o<br />
Viol&atilde;o e guitarra: Marcos Arcanjo<br />
Bateria: Serginho Machado<br />
Percuss&atilde;o: Anjo Caldas<br />
Acordeom: Cezzinha Thomaz<br />
Zabumba: Durval<br />
Trombone: Nilsinho Amarante<br />
Trompete: Enok Chagas<br />
Sax: Gilberto Pontes<br />
Guitarra, guitarra baiana, bandolim, banjo, cavaquinho e viola de 12: S&eacute;rgio Chiavazzoli</p>
<br />
<p><strong>SHOW</strong><br />
Produ&ccedil;&atilde;o Musical e assistente de dire&ccedil;&atilde;o musical: S&eacute;rgio Chiavazzoli<br />
Reg&ecirc;ncia: Z&eacute; Am&eacute;rico Bastos<br />
Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o (Elba Ramalho): Alexandre Valentim<br />
Produ&ccedil;&atilde;o executiva (Elba Ramalho): Camila Paschoal e Fatinha<br />
Cen&aacute;rio: Carlos Santana e Jorge Bizzi<br />
Cenot&eacute;cnico: Ivan Marques<br />
Opera&ccedil;&atilde;o de luz: Jarbas Goudard<br />
Opera&ccedil;&atilde;o de P. A.: M&aacute;rio Jorge<br />
Opera&ccedil;&atilde;o de monitor: Fl&aacute;vio Rego<br />
Roadies: Josino Feitosa e Alex Cunha<br />
Edi&ccedil;&atilde;o de som: Thiago Braga, no Est&uacute;dio Palco (RJ)<br />
U. M. Gabisom: Marcos Possato Jr.</p>
<br />
<p>T&eacute;cnico de grava&ccedil;&atilde;o: Leco Possolo<br />
Mixado no Est&uacute;dio Som Livre por Leco Possolo<br />
Assistentes Est&uacute;dio Som Livre: Fernando Lauria e Felipe Dude</p>
<br />
<p>Geg&ecirc; Produ&ccedil;&otilde;es e Espiral<br />
Coordena&ccedil;&atilde;o de produ&ccedil;&atilde;o: Faf&aacute; Giordano e Beth Ara&uacute;jo<br />
Produ&ccedil;&atilde;o art&iacute;stica: Meny Lopes e B&aacute;rbara Ohana<br />
Assessoria de imprensa: Gilda Mattoso e Marcus Vinicius<br />
Assessoria jur&iacute;dica: Ana Tranjan<br />
Libera&ccedil;&atilde;o de direitos: Eveline Alves<br />
Globo Rio &ndash; Dire&ccedil;&atilde;o geral: Amauri Soares<br />
Realiza&ccedil;&atilde;o: Geg&ecirc; Produ&ccedil;&otilde;es e Espiral Cria&ccedil;&atilde;o e Produ&ccedil;&atilde;o Cultural, Globo Rio e Canal Brasil</p>
<br />
<p>Projeto gr&aacute;fico: Telma Ribeiro<br />
Fotos: Guido Moreto</p>
<br />
<p>(P) 2012 &ndash; Som Livre/Gel&eacute;ia Geral<br />
</p>
',
'slug' => 'sao_joao_carioca',

'foto_fundo' => 'elba_album_30-1.jpg',
'capa_disco' => 'cd30-1.jpg',
'capa_sm' => 'cd30-1-sm.jpg',
'disco_tipo' => '1',  ));

Discos::create(
array(
'nome_disco' => 'Vambora Lá Dançar',
'ano' => '2013',
'release' => '<p>“Este disco foi gravado em dois tempos distintos e tem as assinaturas de dois grandes músicos e produtores: Cezzinha Thomaz e Zé Américo Bastos. Em ambos, está o meu espírito, hora romântico, hora festeiro, do jeito que a gente gosta. Um convite à festa, a alegria e a boa música. Agora é com você e pra você”. Elba Ramalho</p>
<p>&nbsp;</p>
<p>O convite está feito! É hora de levantar da cadeira, puxar seu par pra junto e ir para o meio do salão! Quem irrompe no palco e nas caixas de som é Elba Ramalho, cheia de energia, colocando fogo na mistura pra todo mundo se requebrar!</p>
<p><em>Vambora lá dançar</em>, o novo álbum de carreira da artista que é uma das maiores representantes da música brasileira e da cultura nordestina, é um chamado para a alegria! Recheado de xotes, forrós e outros ritmos dançantes pra lá de animados e algumas baladas, o CD ganhou título extraído do refrão da música <em>Frevo meio envergonhado</em>, de Monique Kessous, um dos talentos da nova cena da MPB.</p>
<p>A mistura do som eletrificado com o acústico, característica marcante que permeia toda a carreira da artista, faz com que o ouvinte rapidamente perceba o inconfundível estilo Elba Ramalho nesse álbum.</p>
<p>Entre as faixas do disco, o forró <em>Deitar e rolar</em>, de Antonio Barros e Cecéu (autores de vários sucessos na voz de Elba) não vai deixar ninguém parado e <em>Por que tem que ser assim?</em> (Chico Pessoa e Cezzinha Thomaz), é uma balada arrebatadora bem ao estilo da cantora. Entre as regravações estão <em>Quando fecho os olhos</em> (Chico Cesar e Carlos Rennó), <em>Mucuripe</em> (Fagner e Belchior) e <em>Onde Deus possa me ouvir</em> (Vander Lee), que ganhou versão em xote.</p>
<p><em>Vambora lá dançar</em>, 31° disco de Elba Ramalho, chega às lojas de todo Brasil em fevereiro e é um lançamento/distribuição da gravadora Saladesom Records, numa parceria com a Acauã Produtora, escritório da artista.</p>
<p>&nbsp;</p>
<p>O disco - música a música</p>
<p>O álbum abre com a música <em>Embolar na areia</em>, de HebertAzzul. Forró dançante, para tirar a poeira do chão.</p>
<p>A segunda faixa, outro forró, <em>Deitar e rolar</em> (Antonio Barros e Cecéu), começa com uma introdução samba-funk, e traz a sanfona em destaque. O refrão flerta com o samba de roda, “Aí eu vou meu bem, eu vou deitar e rolar...”.</p>
<p>O xote, <em>Frevo meio envergonhado</em>, da carioca Monique Kessous, é a terceira faixa, e contém o verso que dá título a este novo trabalho de Elba, <em>Vambora lá dançar</em>.</p>
<p>A primeira balada do disco, <em>Quando fecho os olhos</em>, bem ao estilo do compositor Chico Cesar, foi composta em parceria com Carlos Rennó. A letra traz a constatação de um amor tão forte a tal ponto dos apaixonados não conseguirem se distinguir mais um do outro. “Quando eu fecho os olhos, vejo só você... E cada um de nós é um a sós, e uma só pessoa somos nós. Unos num canto, numa voz”.</p>
<p>A quinta música <em>Por que tem que ser assim</em>?, de Chico Pessoa e Cezzinha Thomaz, é uma balada xote, romântica, no melhor estilo Elba Ramalho. O arranjo e a sanfona são do compositor e sanfoneiro Cezzinha Thomaz. A letra trata de um amor impossível “Se eu te quero tanto o quanto você quer a mim, se eu te amo tanto, por que tem que ser assim?”.</p>
<p>A faixa 6, <em>Não chora, não chora não</em> de Petrúcio Amorim, é um forró em que o tema abordado nos versos da música é o próprio forró... “Quando o forró começa assim ninguém aguenta, o sangue esquenta na batida do baião, a mulherada se assanha no terreiro, pega a mão do cavalheiro que seja bom de salão...”.</p>
<p><em>Amor de bumba-meu-boi</em>, de Rogério Rangel, faixa sete, utiliza os ritmos do bumba-meu-boi... Um pouco da região Norte no som nordestino da cantora.</p>
<p><em>Fibra de Cristal</em>, de Sérgio Sá, oitava faixa, é um maracatu. Aqui mais uma vez a mistura eletro acústica marca presença contrapondo frases de guitarras distorcidas com frases de acordeom, tudo com o molho percussivo do maracatu.</p>
<p><em>Mucuripe</em> (Fagner e Belchior). Com interpretação emocionada de Elba, a música entrou para o repertório da cantora por conta de um programa sobre a geração anos 70 do Nordeste, onde Elba cantou a canção. Desde então surgiu a vontade de gravar a música, que ganhou arranjo com cordas e bongô.</p>
<p><em>Onde Deus possa me ouvir</em>, a faixa 10, é uma canção que tocou bastante nas rádios na voz do próprio compositor Vander Lee. Na versão de Elba, a música ganha uma versão xote, trazendo a canção para o universo da cantora.</p>
<p>A faixa 11 é <em>Tu de lá, eu de cá</em>, de Antonio Barros e Cecéu, é um forró com F maiúsculo, com toques de samba de roda praiano.</p>
<p>O compositor Nando Cordel, recorrente na carreira de Elba, emplaca o forró <em>Na rede</em>, décima segunda faixa do CD: “Ai aiaiaiaiaiai aqui tá bom demais, aqui tá bom demais”.</p>
<p>Dominguinhos marca presença na décima terceira faixa com o xote malemolente <em>Minha vida é te amar</em>, parceria com Nando Cordel: “Eu quero tudo, eu faço tudo pra ficar perto de você. Você é sede é sonho é lírio, é a razão pra eu viver!”.</p>
<p>E para fechar o álbum, <em>Forró brasileiro</em>, de Cezzinha Thomaz e Fábio Simões, reafirma o convite para a dança presente no título do disco: “Forró brasileiro, começou no meu terreiro e todo mundo quer dançar. Forró brasileiro começou no meu terreiro e vai até o sol raiar”.</p>
<p>&nbsp;</p>
<p><em>Vinicius Mattoso Produções Artísticas Ltda</em></p><br>
',
'sbr_disco' => '<p>Sala de Som Records &ndash; SLD0050<br />
Lan&ccedil;amento: janeiro de 2013</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p>Produzido por Zé Américo Bastos (faixas 1, 3, 4, 8, 9 e 10) e Cezzinha Thomaz e Zé Américo Bastos (faixas 2, 5, 6, 7, 11, 12, 13 e 14)</p>
<p>Produção: Acauã Produtora Ltda.</p>
<p>Coordenação geral: Alexandre Valentim</p>
<p>Assistentes de produção: Fatinha e Vavá Ramalho</p>
<p>Faixas 1, 3, 4, 8, 9 e 10 gravadas no estúdio Yahoo (RJ) – técnico: Ricardo Rodrigues Guilherme</p>
<p>Faixas 2, 5, 6, 7, 11, 12, 13 e 14 gravadas no estúdio Pedra da Gávea (RJ) – técnico: Zé Américo Bastos/ assistente: Flávio Rêgo</p>
<p>Vozes de Elba gravadas por Zé Américo Bastos no estúdio Pedra da Gávea.</p>
<p>Mixagem e masterização: ZAP Records, por Zé Américo Bastos</p>
<p>&nbsp;</p>
<p>Saladesom Records</p>
<p>Direção e produção executiva: André Agra</p>
<p>Assessoria jurídica: Fernanda Farias</p>
<p>Administrativo: Nina Reis</p>
<p>&nbsp;</p>
<p>Fotos: Lívio Campos</p>
<p>Direção de arte: Arthur Fróes</p>
<p>Maquiagem: Salvador Moretti</p>
<p>Styling: Rodrigo Farias</p>
',
'slug' => 'vambora_la_dancar',

'foto_fundo' => 'elba_album_31.jpg',
'capa_disco' => 'cd31.jpg',
'capa_sm' => 'cd31-sm.jpg',
'disco_tipo' => '1',  ));


Discos::create(
array(
'nome_disco' => 'Do Meu Olhar Pra Fora',
'ano' => '2015',
'release' => '<p><strong>A visão livre de Elba Ramalho nos caminhos da música</strong></p>
<br>
<p>Em um de seus melhores e mais arrojados discos, <strong><em>Do meu olhar pra fora</em></strong>, cantora exterioriza humanismo positivista com som pop contemporâneo formatado pelos produtores Luã Mattar e Yuri Queiroga</p>
<br>
<p><em>“O meu andar pelo mundo</em></p>
<p><em>É um andar bem profundo</em></p>
<p><em>Vai onde tem um forró</em></p>
<p><em>Uma alegria, uma dança</em></p>
<p><em>Meu coração não se cansa</em></p>
<p><em>De uma festa encontrar...”</em></p>
<p><em>&nbsp;</em></p>
<p>Os versos iniciais da primeira das 12 músicas do 32º álbum da discografia oficial de Elba Ramalho, <strong><em>Do meu olhar pra fora</em></strong>, sintetizam a caminhada desta grande cantora do Brasil. Intitulada <em>Olhando o coração</em>, a música é uma parceria inédita de Dominguinhos (1941 – 2013) com Climério Ferreira que parece feita sob medida para o canto valente da <em>Leoa do Norte</em>. <em>Olhando o coração</em> é um perfeito cartão de visitas para introduzir este disco que marca a estreia de Elba na gravadora Coqueiro Verde Records. O acordeom de Rafael Meninão se harmoniza com as batidas eletrônicas do DJ Dolores e com os pífanos de Dirceu Leite num arranjo que remete ao balanço de ritmos como xote e baião com pegada pop contemporânea.</p>
<br>
<p>Mantida na pressão, essa sonoridade pop contemporânea é mérito do paraibano Luã Mattar e do pernambucano Yuri Queiroga, os dois produtores que formataram <strong><em>Do meu olhar pra fora</em></strong> no estúdio Gigante de Pedra, na cidade do Rio de Janeiro (RJ). Fruto da união de Elba com o ator e cantor Maurício Mattar, Luã cresceu e agora aparece como um produtor antenado, cheio de jovialidade e de &nbsp;informações cruzadas com as de Yuri, que já havia trabalhado com Elba num dos álbuns da cantora mais aclamados pela crítica, <em>Qual o assunto que mais lhe interessa?</em>, de 2007. A sintonia entre a cantora e os produtores afinou um dos melhores e mais arrojados discos de Elba.</p>
<br>
<p>O título do álbum – <strong><em>Do meu olhar pra fora</em></strong>, extraído de versos da canção <em>É o que me interessa</em> (Lenine e Dudu Falcão, 2008) – traduz com precisão o espírito do disco e o momento de maturidade, de colheita, que pauta o canto livre de Elba. Feito com liberdade, palavra-chave para o entendimento desse trabalho, <strong><em>Do meu olhar pra fora</em></strong> expande o legado dessa celebrada intérprete de veia teatral que carrega a bandeira do seu Nordeste com orgulho e com independência desde os anos 1970, década em que migrou da Paraíba natal para a cidade do Rio de Janeiro (RJ) em busca de maior projeção como cantora. Mas que há muito já ficou maior do que o Nordeste.</p>
<br>
<p>Com as raízes fincadas na terra de Elba, mas com as antenas ligadas no mundo, <strong><em>Do meu olhar pra fora</em></strong> exterioriza o humanismo positivista que caracteriza não somente o canto da intérprete, mas também o discurso e a postura da cidadã diante da vida e do universo. Elba tem pregado sua fé católica no bem e nos homens de bem. Sem</p>
<p>procurar catequizar seu imenso público, a cantora vem imprimindo na sua música a harmonia e a paz que regem sua vida dentro e fora dos palcos e dos estúdios.</p>
<br>
<p>Mas paz, no dicionário de Elba, rima com festa, com dança, com alegria de viver. Formatado com gravações adicionais em estúdios de São Paulo (SP), Olinda (PE) e Recife (PE), <strong><em>Do meu olhar pra fora</em></strong> não nega a força de sua raça<em>. “Vou fazê, vou fazê / Música pra enriquecer / Os corações e o planeta”</em>, dá a pista nos versos arretados de <em>Fazê o quê?</em> (Pedro Luís), música lançada pelo coletivo carioca Pedro Luís e a Parede em seu primeiro álbum, <em>Astronauta Tupy</em>, de 1997. Esse misto de rap-repente com embolada ganha explosiva batida roqueira no arranjo que combina um naipe de metais em brasa com a guitarra de Paulo Rafael e as programações do DJ Dolores.</p>
<br>
<p>Na sequência, <em>Só pra lembrar</em> é uma parceria inédita do compositor paulista Dani Black com a cantora e compositora fluminense Zélia Duncan. O acento pop da faixa sublinha a pressão posta pelos produtores Luã Mattar e Yuri Queiroga no arranjo moldado com cordas orquestradas por Ney Conceição e com flauta (do mestre nos sopros Dirceu Leite) que remete ao universo musical dos Pífanos de Caruaru (PE). Entre raízes e antenas, Elba dá sua voz maturada a versos que brilham como fachos de luz em escuridão existencial. Na faixa, a cantora celebra o amor, alento em tempo de esperanças cansadas.</p>
<br>
<p>Ao mesmo tempo em que faz a festa, com a explosão de energia que a tornou uma das cantoras de maior potência e animação no palco, Elba Ramalho traz também sossego e acalma pressas em mundo assombrado pelas sobras do passado e pelas sombras do futuro. Por isso, a oportuna lembrança de <em>É o que me interessa</em> (Lenine e Dudu Falcão, 2008) – uma daquelas baladas encantadoras nascidas da inspiração melódica do pernambucano Lenine, companheiro de Elba nas andanças atrevidas da <em>Leoa</em> – faz todo o sentido no disco. A harpa celestial de Cristina Braga sobressai no arranjo adequado ao tom mais sereno da canção.</p>
<br>
<p>Luxo em qualquer gravação, a harpa de Cristina Braga reaparece na faixa seguinte, <em>Nossa Senhora da Paz</em> (Clayton Barros, Emerson Calado, José Paes Lira, Nego Henrique e Rafael Almeida, 2002), música que traduz o olhar atual de Elba diante do mundo. Mas o tom celestial reside mais no sentimento posto pela cantora na interpretação dessa música lançada há 13 anos pelo já desativado grupo pernambucano Cordel do Fogo Encantado. Composição do&nbsp; primeiro álbum do grupo, <em>Nossa Senhora da Paz</em> ganha feitio de oração no canto de Elba, mas o incendiário <em>mix</em> de tambores e guitarras do arranjo tem a pressão que é motor e marca pop do álbum <strong><em>Do meu olhar pra fora</em></strong>.</p>
<br>
<p>Instante de melancolia em álbum repleto de energia positiva, <em>Contrato de separação</em> reconecta Elba com o cancioneiro do cantor, compositor e sanfoneiro pernambucano José Domingos de Morais, o Seu Domingos – Dominguinhos, para o Brasil. O fato de três das 12 músicas do álbum <strong><em>Do meu olhar pra fora</em></strong> levarem a assinatura de Dominguinhos diz muito sobre a forte ligação que sempre uniu Elba ao herdeiro de Luiz Gonzaga (1912 – 1989), eterno <em>Rei do Baião</em>. Tanto que Elba chegou a gravar e assinar um álbum com Dominguinhos. Lançado em 2005, este disco teve repertório centrado no cancioneiro autoral de <em>Seu Domingos</em>. Foi uma espécie de <em>best of</em> da obra do sanfoneiro. Mas <em>Contrato de separação</em> não integrou o repertório desse disco. O que legitima a inclusão em <strong><em>Do meu olhar pra fora</em></strong> dessa canção doída de saudade, composta por Dominguinhos em parceria com sua então mulher Anastácia, lançada na voz sublime de Nana Caymmi em 1979 e ora revivida por Elba em registro valorizado pelo toque magistral do acordeom de Toninho Ferragutti. Esse acordeom tem o poder de evocar na faixa todo o rico universo musical de Dominguinhos. É como se o mestre estivesse na gravação, evocado pelas teclas manuseadas com precisão por Ferragutti.</p>
<br>
<p>Das três músicas de Dominguinhos cantadas por Elba em <strong><em>Do meu olhar pra fora</em></strong>, duas são inéditas em disco. Além de <em>Olhando o coração</em>, a outra novidade é <em>Nos ares de Lisboa – Um passarinho enganador</em>, fado que mostra que, tal como o canto de Elba, a obra de Dominguinhos sempre cruzou oceanos rítmicos, sem fronteiras, embora esteja sempre associada ao universo musical da <em>Nação Nordestina</em>. Da lavra poética do compositor cearense Fausto Nilo, os versos da música são cantados por Elba em dueto com a portuguesa Carminho, a mais aplaudida cantora de fado da atualidade. A cumplicidade feminina das intérpretes é fundamental para realçar toda a beleza dessa canção que embute a melancolia típica dos fados na travessia que a conduz do sertão aos ares de Lisboa pelo toque do acordeom de Toninho Ferragutti, do bandolim de Armandinho e da viola portuguesa de Diogo Clemente, músico lusitano especialmente convidado para tocar no disco.</p>
<br>
<p>A rota pop universal do CD <strong><em>Do meu olhar pra fora</em></strong> inclui escala na Jamaica, feita através da Bahia. <em>Árvore</em> é iluminado reggae de autoria do cantor e compositor baiano Edson Gomes, lançado pelo autor em seu terceiro álbum, <em>Campo de batalha</em>, de 1991. Gomes é um dos artistas brasileiros mais compromissados com a ideologia positiva do reggae. Na gravação de sua música por Elba, os metais abrilhantam a abordagem da cantora. De certa forma, é como se a árvore do título simbolizasse a figura da própria Elba, balançando com suas raízes em suas andanças sobre a terra, munida de amor e música.</p>
<br>
<p>Inédita de Chico César, gravada por Elba com a participação do cantor e compositor paraibano, <em>Patchuli</em> perfuma o baile pop da cantora no toque vigoroso de metais orquestrados por Nilsinho Amarante. Nessa faixa, como em muitas outras do disco <strong><em>Do meu olhar pra fora</em></strong>, Elba parte do Nordeste para alcançar o mundo. E, nessa viagem pop por sons universais, o destino mais surpreendente é o apontado por <em>La noyeé</em>, música feita pelo compositor francês Serge Gainsbourg (1928 - 1991) há 44 anos para a trilha sonora do filme&nbsp;<em>Romance de um ladrão</em>&nbsp;(Iugoslávia / França / Itália, 1971).&nbsp;O criativo arranjo da faixa, que dialoga de forma moderna com as tradições da <em>chanson française</em>, é de Marcelo Jeneci, músico polivalente que toca piano, acordeom e cravo nessa gravação que se conecta, pelo idioma francês, como registro de <em>La vie en rose</em> (1945) - sucesso da cantora francesa Edith Piaf (1915 – 1963) – feito por Elba há 24 anos para um álbum em que também ampliou seus horizontes estéticos, <em>Felicidade urgente</em>, produzido em 1991 por Nelson Motta.</p>
<br>
<p>De Paris, o disco migra para a lama do mangue pernambucano, revolvida com a oportuna regravação de <em>Risoflora</em> (Chico Science, 1994), música menos badalada do primeiro álbum da banda pernambucana Nação Zumbi, pedra fundamental do movimento recifense dos anos 1990 batizado de <em>Mangue Beat</em>. Ao dar voz a <em>Risoflora</em>, Elba faz brotar uma pungente declaração de amor de um <em>caranguejo</em> arrependido que promete se regenerar. Para quem não sabe, <em>Risoflora</em> é música feita pelo compositor pernambucano Chico Science (1966 – 1997), mentor da Nação, para reconquistar o amor de uma ex-namorada, Maria Eduarda Belém, apelidada Maria Duda. Sem anular o romantismo, bissexto no universo incandescente do <em>Mangue Beat</em>, o arranjo da gravação de Elba é inserido em ambiência <em>noise</em> de progressiva intensidade.</p>
<br>
<p>No fim, <em>Ser livre</em> arremata o disco com o reforço do conceito de liberdade que pautou a criação do álbum <strong><em>Do meu olhar pra fora</em></strong>. A música é parceria inédita do bamba Arlindo Cruz com Zeca Pagodinho. Mas quem espera ouvir um samba – especialidade dos compositores cariocas – vai se deparar com uma canção de tom etéreo, viajante, condizente com a bela arte gráfica do disco, assinada por Daniel Edmundson. O arranjo de Ivo Senra foi urdido somente com o <em>mix</em> da guitarra de Luã Mattar com as programações e sintetizadores pilotados pelo próprio Senra.</p>
<br>
<p><em>“Vou romper de vez as algemas</em></p>
<p><em>(...)</em></p>
<p><em>Caminhar pelos bons caminhos</em></p>
<p><em>Num jardim com flor sem espinhos</em>”.</p>
<br>
<p>Os versos de <em>Ser livre</em> se conectam com os de <em>Olhando o coração</em> pela mesma fina sintonia que liga as 12 músicas do disco. Em última instância, <strong><em>Do meu olhar pra fora</em></strong> é álbum conceitual sobre a caminhada de sua cantora ao longo de quatro décadas. Um andar atrevido que fez o canto bravo de Elba Maria Nunes Ramalho se fazer ouvir em todo o Brasil, desconstruindo a imagem masculinizada da mulher paraibana que estava enraizada no imaginário nacional com doses maciças de feminilidade, energia e valentia. Nascida em 17 de agosto de 1951, a <em>Leoa</em> sobreviveu na selva das cidades com uma voz que ganhou graves, maturidade, experiência e, sobretudo, liberdade nessa caminhada. <strong><em>Do meu ohar pra fora</em></strong> é fruto de tudo isso. É mais um firme passo de Elba Ramalho em direção ao infinito, ao eterno. Se os pés estão fincados nas suas raízes orgulhosamente nordestinas, as antenas captam os sinais do mundo e o espírito segue livre pelos caminhos do amor e da música.</p>
<br>
<p><strong>Mauro Ferreira</strong></p>
<p><strong>Fevereiro de 2015</strong></p>
',
'sbr_disco' => '<p>Coqueiro Verde Records &ndash; CV 10132<br />
Lan&ccedil;amento: mar&ccedil;o de 2015</p>',

'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p>Produzido por Luã Mattar e Yuri Queiroga</p>
<p>Produção executiva: Elba Ramalho</p>
<p>Direção de produção: Alexandre Valentim</p>
<p>&nbsp;</p>
<p>Gravado, mixado e masterizado no Estúdio Gigante de Pedra (Rio de Janeiro) por Raphael Kampel Stolnicki</p>
<p>Gravações adicionais: Estúdio Mundo Novo (Olinda/PE), Estúdio Maruin Records (Olinda/PE), Estúdio Fábrica (Recife/PE), Estúdio Salaviva (São Paulo/SP) por Buguinha Dub, Gabriel Melo, Cristiano Lemgruber e Carlos “KK” Akamine</p>
<p>Assistente de gravação: Alexandre Fuly</p>
<p>Assistentes de produção: Fatinha e Vavá</p>
<p>&nbsp;</p>
<p>Fotos Elba: Nana Moraes</p>
<p>Make up: Jerry Adriani</p>
<p>Arte gráfica e design: Daniel Edmundson</p><br>
',
'slug' => 'do_meu_olhar_pra_fora',

'foto_fundo' => 'elba_album_32.jpg',
'capa_disco' => 'cd32.jpg',
'capa_sm' => 'cd32-sm.jpg',
'disco_tipo' => '1',  ));



Discos::create(
array(
'nome_disco' => 'Cordas, Gonzaga e Afins',
'ano' => '2015',
'release' => '',
'sbr_disco' => '<p>Coqueiro Verde Records &ndash; CV 20482<br />
Lan&ccedil;amento: dezembro de 2015</p>',


'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
<p><strong>BANDA</strong></p>
<p><strong>SaGRAMA</strong><br />
S&eacute;rgio Campelo (flauta, flauta em sol, p&iacute;fano e flautim)<br />
Frederica Bourgeois (flauta, p&iacute;fano e voz)<br />
Cris&oacute;stomo Santos (clarinete e clarone)<br />
Cl&aacute;udio Moura (viola nordestina)<br />
Alex Sobreira (viol&atilde;o de 7 cordas)<br />
Jo&atilde;o Pimenta (contrabaixo ac&uacute;stico)<br />
Ant&ocirc;nio Barreto (marimba e percuss&atilde;o)<br />
Hugo Medeiros (percuss&atilde;o)<br />
Tarc&iacute;sio Resende (percuss&atilde;o)</p>

<p><strong>Quarteto Encore</strong><br />
Carlos Santos (1&ordm; violino)<br />
Rafaela Fonseca (2&ordm; violino)<br />
Laila Campelo (viola)<br />
Fabiano Menezes (violoncello)</p>

<p><strong>M&uacute;sicos convidados</strong><br />
Aristide Rosa (viola nordestina)<br />
Beto Hortis (sanfona)<br />
Marcelo Caldi (sanfona)<br />
Tost&atilde;o Queiroga (bateria)<br />
Aninha e Lulu Ara&uacute;jo (alfaias)</p>

<p><strong>Ficha t&eacute;cnica do show</strong></p>

<p>Gravado ao vivo no dia 25 de setembro de 2014 no Classic Hall (Olinda/PE)<br />
Cria&ccedil;&atilde;o e dire&ccedil;&atilde;o geral do projeto: Margot Rodrigues<br />
Dire&ccedil;&atilde;o do espet&aacute;culo: Andr&eacute; Brasileiro<br />
Textos: Newton Moreno<br />
Dire&ccedil;&atilde;o musical: S&eacute;rgio Campelo<br />
Arranjos: S&eacute;rgio Campelo e Cl&aacute;udio Moura</p>

<p>Dire&ccedil;&atilde;o de arte: Marcondes Lima<br />
Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Alexandre Valentim<br />
Roteiro musical: Elba Ramalho, Andr&eacute; Brasileiro, Margot Rodrigues e Alexandre Valentim<br />
Produ&ccedil;&atilde;o executiva: Alexandre Sampaio, Karla Martins e Camila Paschoal<br />
Assist&ecirc;ncia de produ&ccedil;&atilde;o: Tadeu Gondim</p>

<p>Grava&ccedil;&otilde;es adicionais e finaliza&ccedil;&atilde;o de &aacute;udio feitos no Est&uacute;dio Carranca<br />
Grava&ccedil;&otilde;es adicionais: Jorge Rom&atilde;o e Bruno Lins<br />
Edi&ccedil;&atilde;o: Marco Melo, Alberico Junior e Junior Evangelista<br />
Mixagem e p&oacute;s-produ&ccedil;&atilde;o de &aacute;udio: Tost&atilde;o Queiroga, Junior Evangelista e S&eacute;rgio Campelo</p>

<p>Fotos: Alex Ribeiro e Jo&atilde;o Vicente<br />
Dire&ccedil;&atilde;o de arte e design gr&aacute;fico do DVD e DVD/CD: Bruno Parmera<br />
Maquiagem: Jerry Adriani<br />
Produtora pessoal de Elba Ramalho: Ana de F&aacute;tima Costa<br />
Realiza&ccedil;&atilde;o: Margot Produ&ccedil;&otilde;es e Baioque Produ&ccedil;&otilde;es Art&iacute;sticas<br />
</p>

',
'slug' => 'cordas_gonzaga_e_afins',

'foto_fundo' => 'elba_album_33.jpg',
'capa_disco' => 'cd33.jpg',
'capa_sm' => 'cd33-sm.jpg',
'disco_tipo' => '1',  ));


Discos::create(
    array(
        'nome_disco' => 'O GRANDE ENCONTRO 20 ANOS',
        'ano' => '2016',
        'release' => '<p></p>',
        'sbr_disco' => '<p>Sony Music – 88.985.385.062<br />
Lan&ccedil;amento: dezembro de 2016</p>',

        'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>
        <p><strong>BANDA</strong></p>
<p>Paulo Rafael (guitarra)</p>
<p>Marcos Arcanjo (guitarra e viol&atilde;o)</p>
<p>Rafael Menin&atilde;o (sanfona)</p>
<p>Cesar Michiles (flautas e sax)</p>
<p>Ney Concei&ccedil;&atilde;o (baixo)</p>
<p>C&aacute;ssio Cunha (bateria)</p>
<p>Anjo Caldas (percuss&atilde;o)</p>
<br/>
<p><strong>SHOW</strong></p>
<p>Gravado ao vivo nos dias 6 e 7 de outubro de 2016 no Citibank Hall (S&atilde;o Paulo/SP)</p>
<p>Dire&ccedil;&atilde;o art&iacute;stica: Andr&eacute; Brasileiro</p>
<p>Roteiro musical: Alceu Valen&ccedil;a, Elba Ramalho e Geraldo Azevedo</p>
<p>Produ&ccedil;&atilde;o musical: Z&eacute; Am&eacute;rico Bastos</p>
<p>Dire&ccedil;&atilde;o musical: Marcos Arcanjo e Paulo Rafael</p>
<p>Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Alexandre Valentim</p>
<p>Coordena&ccedil;&atilde;o de produ&ccedil;&atilde;o: Em&iacute;lia Veras, Gabriela Azevedo e Yan&ecirc; Montenegro</p>
<p>Produ&ccedil;&atilde;o executiva: Ingrid Mac Cord e Talita Melcop</p>
<p>Produ&ccedil;&atilde;o Geraldo Azevedo: Reinaldo Galv&atilde;o</p>
<p>Produ&ccedil;&atilde;o Elba Ramalho: Ana de F&aacute;tima Costa (Fatinha)</p>
<p>Realiza&ccedil;&atilde;o: Acau&atilde; Produtora, Gera&ccedil;&atilde;o Produtora e Tropicana Produ&ccedil;&otilde;es</p>
<p>&nbsp;</p>
<p>Figurinos da banda: Carol Silveira</p>
<p>Maquiagem e stylist Elba: Rodrigo Farias</p>
<p>Cabelo Elba: Everson Rocha</p>
<p>&nbsp;</p>
<p>Assessoria de imprensa: J&uacute;lio Moura</p>
<p>Redes sociais: Beto Feitosa</p>
<p>Assessoria jur&iacute;dica: Escrit&oacute;rio Cultural &ndash; Fernanda Freitas</p>
<p>&nbsp;</p>
<p><strong>Equipe t&eacute;cnica do show</strong></p>
<p>T&eacute;cnico de P. A.: Sergio Peres</p>
<p>T&eacute;cnico de monitor: Flavio Rego</p>
<p>Engenheiro de grava&ccedil;&atilde;o e mixagem: Rodrigo Vidal</p>
<p>Gravado na unidade m&oacute;vel de &aacute;udio Gabisom</p>
<p>Light designer: Jarbas Goudard</p>
<p>Desenho e programa&ccedil;&atilde;o de Grand MA: Cesar Ramires</p>
<p>Assistentes de ilumina&ccedil;&atilde;o: Leonan Augusto de Oliveira (coordenador t&eacute;cnico), Felipe Latch Cardoso Maur&iacute;cio (rigger e opera&ccedil;&atilde;o de canh&atilde;o), Marcos Paulo Silva Afonso Teixeira (rack man e opera&ccedil;&atilde;o de canh&atilde;o), Pedro Henrique Martins de Castro (t&eacute;cnico e opera&ccedil;&atilde;o de canh&atilde;o)</p>
<p>&nbsp;</p>
<p><strong>Equipe de cenografia</strong></p>
<p>Cenografia, dire&ccedil;&atilde;o de arte, coordena&ccedil;&atilde;o e produ&ccedil;&atilde;o de cenografia: Gringo Cardia</p>
<p>Imagens para cenografia: obras do artista J. Cunha</p>
<p>Cen&oacute;grafo assistente e produ&ccedil;&atilde;o de cenografia: Jackson Tinoco</p>
<p>Designer gr&aacute;fica de cenografia: Julia Sampaio</p>
<p>Assistente de design gr&aacute;fico: Matheus Meira</p>
<p>Execu&ccedil;&atilde;o de cenografia: KF Cenografia</p>
<p>Montagem: Eliezer Paiva de Melo</p>
<p>Bordados sobre as telas da cenografia: Spectaculu &ndash; Escola de Arte e Tecnologia</p>
<p>&nbsp;</p>
<p><strong>Sony Music</strong></p>
<p>Presidente: Paulo Junqueiro</p>
<p>Dire&ccedil;&atilde;o art&iacute;stica (A &amp; R): Bruno Batista</p>
<p>Supervis&atilde;o art&iacute;stica: S&eacute;rgio Bittencourt</p>
<p>Coordena&ccedil;&atilde;o art&iacute;stica (A &amp; R): Andr&eacute; &ldquo;Peixel&rdquo; Mattos</p>
<p>&nbsp;</p>
<p>Fot&oacute;grafo capas e fotos encartes: Marcos Hermes</p>
<p>Projeto gr&aacute;fico: Sandro Mesquita</p>

</p>
',
        'slug' => 'grande_encontro_20anos',

        'foto_fundo' => 'elba_album_33-1.jpg',
        'capa_disco' => 'cd33-1.jpg',
        'capa_sm' => 'cd33-1-sm.jpg',
        'disco_tipo' => '2'));


Discos::create(
    array(
        'nome_disco' => 'EU SOU O CAMINHO',
        'ano' => '2017',
        'release' => '<p>Elba Ramalho</p>
<p>&nbsp;</p>
<p>Eu tenho muita f&eacute;, muito amor e temor a Deus. Eu n&atilde;o saberia viver sem Deus. Eu n&atilde;o acredito que tudo isso aqui seja um simples acaso. Eu acho que Deus &eacute; o criador de todas as coisas, o Senhor absoluto na sua grandeza, onipot&ecirc;ncia, onisci&ecirc;ncia, onipresen&ccedil;a. Minha alegria &eacute; saber que Deus existe e saber que existe uma eternidade. E que eu estou nessa eternidade, nesse projeto divino. Isso que me alimenta, me sustenta, me motiva, me impulsiona a ser um ser humano melhor.</p>
<p>A minha f&eacute; n&atilde;o &eacute; um exerc&iacute;cio de vez por outra, fazendo isso ou aquilo. Ela &eacute; algo s&oacute;lido, concreto, constante. F&eacute; &eacute; uma palavra pequenininha, mas que tem uma profundidade, uma dimens&atilde;o imensa dentro de nossa alma, dentro de nosso esp&iacute;rito. &Eacute; voc&ecirc; dormir acreditando que mesmo que voc&ecirc; n&atilde;o acorde pra ver a luz do sol desse mundo, voc&ecirc; ver&aacute; a luz em outra dimens&atilde;o. Ent&atilde;o isso &eacute; f&eacute;. A f&eacute; te traz serenidade, te traz paci&ecirc;ncia, te traz bondade. Eu acho que ela fundamenta tantas coisas maravilhosas...</p>
<p>Eu sei de onde eu vim e sei pra onde vou porque eu tenho f&eacute;. Ent&atilde;o eu me reconhe&ccedil;o nas minhas atitudes pela minha f&eacute;. Eu ajo e me relaciono com mundo e com as pessoas a partir da minha f&eacute;, a partir daquilo que eu tento seguir, que eu acredito, que &eacute; Jesus. Tudo que ele ensinou eu procuro olhar direitinho... eu acho que &eacute; t&atilde;o perfeito, t&atilde;o bonito... e trazer pra minha vida, pro meu dia a dia.</p>
<p>Esse &eacute; um disco de gratid&atilde;o a Deus por tudo o que eu tenho, por tudo que eu sou e por tudo que eu fa&ccedil;o. H&aacute; 16 anos produzi um &aacute;lbum dedicado a Nossa Senhora, chamado <em>Cora&ccedil;&atilde;o de M&atilde;e</em>. Naquele trabalho, pesquisei m&uacute;sicas de louvor e convidei artistas diversos para cantar. A devo&ccedil;&atilde;o sempre existiu, a f&eacute; se solidifica. Deus &eacute; imprescind&iacute;vel.</p>
<p>Deixo que as m&uacute;sicas cumpram sua fun&ccedil;&atilde;o. Que as mensagens de amor, esperan&ccedil;a e paz possam iluminar as trevas e dissipar as quimeras que se enra&iacute;zam nos cora&ccedil;&otilde;es. Vivemos tempos conturbados, que tendem a se agravar. Voltar-se para Deus &eacute; a melhor op&ccedil;&atilde;o, ao menos no meu entender.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Z&eacute; Am&eacute;rico Bastos &ndash; produtor</p>
<p>&nbsp;</p>
<p>Apesar de Elba ser uma pessoa extremamente cat&oacute;lica, este &eacute; um trabalho que n&atilde;o tem maneira de igreja. &Eacute; um disco que fala de amor, mas que tem uma pegada bem MPB, atrav&eacute;s de composi&ccedil;&otilde;es de artistas da m&uacute;sica popular brasileira que falam sobre um amor maior. S&atilde;o can&ccedil;&otilde;es muito bonitas que trazem mensagens que at&eacute; caberiam em um repert&oacute;rio religioso, mas que n&atilde;o tem esse prop&oacute;sito. Como diz o Padre F&aacute;bio de Melo, n&oacute;s conseguimos fazer uma linguagem popular para uma cantora que tem esta pegada da m&uacute;sica popular.</p>
<p><em>N&atilde;o passar&aacute;s </em>foi o primeiro single divulgado e ele exemplifica bem esse lado popular. &Eacute; um xote, uma coisa bem a cara de Elba. A gente tem uma afinidade muito grande, constru&iacute;da ao longo de muitos anos trabalhando juntos. &Eacute; maneira de pensar em parceria. Nos sentamos e escolhemos o repert&oacute;rio juntos. Elba queria trazer essas mensagens espirituais e eu propus trazer o popular. Tem v&aacute;rias m&uacute;sicas que falam do amor, sem necessariamente falar de Deus, mas que mant&eacute;m uma rela&ccedil;&atilde;o muito pr&oacute;xima. A gente foi fazendo aos poucos, com tudo muito bem pensado.</p>',
        'sbr_disco' => '<p>Baioque – 7.898.627.085.110<br />
Lan&ccedil;amento: Digital – dezembro de 2017<br/>
CD (físico) – junho de 2018</p>',

        'fx_tecnica' => '<p><strong>FICHA T&Eacute;CNICA</strong></p>

<p>Produzido por Zé Américo Bastos e Elba Ramalho<br />
Produção fonográfica: Alexandre Valentim – Baioque<br />
Direção musical: Zé Américo Bastos<br />
Gravado no segundo semestre de 2016<br />
</p>
<p>&nbsp;</p>
<p>Gravado, mixado e masterizado por Zé Américo Bastos, ZAP Studio/Rio de Janeiro<br />
Voz do Padre Fábio de Melo e coro: Estúdio Gigante de Pedra, por Raphael Stolnicki</p>
<p>&nbsp;</p>
<p>Projeto gráfico: Marcelo Ribeiro<br/>
Foto/capa: Marcelo Ribeiro<br/>
Foto/contracapa: Juno Lacet<br/>
Encarte: Marcelo Ribeiro (1, 2, 6, 7 e 8) e Juno Lacet (3 e 5)
</p>',
        'slug' => 'eu_sou_o_caminho',
        'foto_fundo' => 'elba_album_34.jpg',
        'capa_disco' => 'cd34.jpg',
        'capa_sm' => 'cd34-sm.jpg',
        'disco_tipo' => '1'));





        


/////////////////FIM
    }
}
