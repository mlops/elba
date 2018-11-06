<?php

class AddMusicas extends Seeder
{

    public function run()
    {
        DB::table('musicas')->delete(); // deleting old records.

        Musicas::create(
            array(
                'faixa' => 'Canta Cora&#231;&#227;o',
                'compositor' => '(Geraldo Azevedo / Carlos Fernando)',
                'letra' => '<p>Canta, canta, passarinho</p>
<p>Canta, canta, miudinho</p>
<p>Na palma da minha m&atilde;o</p>
<p>&nbsp;</p>
<p>Quero ver voc&ecirc; voando</p>
<p>Quero ouvir voc&ecirc; cantando</p>
<p>Quero paz no cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Quero ver voc&ecirc; voando</p>
<p>Quero ouvir voc&ecirc; cantando</p>
<p>Na palma da minha m&atilde;o</p>
<p>&nbsp;</p>
<p>Na palma da minha m&atilde;o</p>
<p>Tem os dedos, tem as linhas</p>
<p>Que olhar cigano caminha</p>
<p>Procurando alcan&ccedil;ar</p>
<p>A nau perdida, o trem que chega</p>
<p>A nova dan&ccedil;a, mata verde, esperan&ccedil;a</p>
<p>Em suas tran&ccedil;as vou voar</p>
<p>Passarinho, vou voar</p>
<p>&nbsp;</p>
<p>Meu alegre cora&ccedil;&atilde;o</p>
<p>&Eacute; triste como um camelo</p>
<p>&Eacute; fr&aacute;gil que nem brinquedo</p>
<p>&Eacute; forte como le&atilde;o</p>
<p>&nbsp;</p>
<p>&Eacute; todo zelo, &eacute; todo amor, &eacute; desmantelo</p>
<p>&Eacute; querubim, &eacute; c&atilde;o de fogo</p>
<p>&Eacute; Jesus Cristo, &eacute; Lampi&atilde;o</p>
<p>Passarinho, eu vou voar</p>
',
                'creditos' => '
<p>Arranjo de base: Geraldo Azevedo e Z&eacute; Ramalho</p>
<p>Arranjo de cordas: Paulo Machado</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Viola 10 cordas: Z&eacute; Ramalho</p>
<p>Guitarra: Robertinho de Recife</p>
<p>Piano: Paulo Machado</p>
<p>Baixo: Luis Alves</p>
<p>Bateria e percuss&atilde;o: Chico Batera</p>
<p>Coro: Amelinha, Lize Bravo, M&ocirc;nica Schimidt, Cristina e Sheila</p>
',
                'faixa_mp3' => '01_canta_coracao.mp3',
                'faixa_ogg' => '01_canta_coracao.ogg',
                'disco_id' => '1'));

        Musicas::create(
            array(
                'faixa' => 'N&#227;o Sonho Mais',
                'compositor' => '(Chico Buarque de Hollanda)',
                'letra' => '<p>Hoje eu sonhei contigo</p>
<p>Tanta desdita</p>
<p>Amor nem te digo</p>
<p>Tanto castigo</p>
<p>Que eu tava aflita de te contar</p>
<p>&nbsp;</p>
<p>Foi um sonho medonho</p>
<p>Desses que &agrave;s vezes a gente sonha</p>
<p>E baba na fronha</p>
<p>E se urina toda</p>
<p>E quer sufocar</p>
<p>&nbsp;</p>
<p>Meu amor vi chegando</p>
<p>Um trem de candango</p>
<p>Formando um bando</p>
<p>Mas que era um bando</p>
<p>De orangotango pra te pegar</p>
<p>&nbsp;</p>
<p>Vinha nego humilhado</p>
<p>Vinha morto-vivo</p>
<p>Vinha flagelado de tudo que &eacute; lado</p>
<p>Vinha um bom motivo pra te esfolar</p>
<p>&nbsp;</p>
<p>Quanto mais tu corria, mais tu ficava</p>
<p>Mais atolava, mais te sujava</p>
<p>Amor, tu fedia</p>
<p>Empesteava o ar</p>
<p>&nbsp;</p>
<p>Tu que foi t&atilde;o valente</p>
<p>Chorou pra gente</p>
<p>Pediu piedade, olha que maldade</p>
<p>Me deu vontade de gargalhar</p>
<p>&nbsp;</p>
<p>Ao p&eacute; da ribanceira acabou-se a li&ccedil;a</p>
<p>Escarrei-te inteira a tua carni&ccedil;a</p>
<p>E tinha justi&ccedil;a nesse escarrar</p>
<p>&nbsp;</p>
<p>Te rasgamo a carca&ccedil;a</p>
<p>Descemo a ripa</p>
<p>Viramo as tripa</p>
<p>Comemo os ovo</p>
<p>Ai, aquele povo p&ocirc;s-se a cantar</p>
<p>&nbsp;</p>
<p>Foi um sonho medonho</p>
<p>Desses que &agrave;s vezes a gente sonha</p>
<p>E baba na fronha e se urina toda</p>
<p>E j&aacute; n&atilde;o tem paz</p>
<p>&nbsp;</p>
<p>Pois eu sonhei contigo e ca&iacute; da cama</p>
<p>Ai, amor, n&atilde;o briga</p>
<p>Ai, n&atilde;o me castiga</p>
<p>Ai, diz que me ama</p>
<p>E eu n&atilde;o sonho mais</p>
',
                'creditos' => '<p>Arranjo de base e viola: Otavio Burnier</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Baixo: Rub&atilde;o Sabino</p>
<p>Sanfona: Dominguinhos</p>
<p>Pandeiro: Jackson do Pandeiro</p>
<p>Zabumba: C&iacute;cero</p>
<p>Tri&acirc;ngulo: Jo&atilde;o</p>
',
                'faixa_mp3' => '02_nao_sonho_mais.mp3',
                'faixa_ogg' => '02_nao_sonho_mais.ogg',
                'disco_id' => '1'));

        Musicas::create(
            array(
                'faixa' => 'Veio D&apos;&#225;gua',
                'compositor' => '(Luiz Ramalho)',
                'letra' => '<p>Um veio d&rsquo;&aacute;gua na serra</p>
<p>&Eacute; o olho d&rsquo; &aacute;gua</p>
<p>Um veio d&rsquo;&aacute;gua no rosto</p>
<p>&Eacute; uma m&aacute;goa a correr</p>
<p>&nbsp;</p>
<p>Um pingo d&rsquo;&aacute;gua no rosto</p>
<p>&Eacute; uma tristeza</p>
<p>Um pingo d&rsquo;&aacute;gua na rosa</p>
<p>&Eacute; uma beleza pra se ver</p>
<p>&nbsp;</p>
<p>Pode haver ang&uacute;stia no sorriso</p>
<p>Pode haver sil&ecirc;ncio que difama</p>
<p>Pode estar mentindo quem te jura</p>
<p>Pode estar fingindo quem te ama</p>
<p>&nbsp;</p>
<p>A moeda tem coroa e cara</p>
<p>O luar tamb&eacute;m clareia a lama</p>
<p>Pode haver um c&eacute;u na &aacute;gua clara</p>
<p>Pode haver um v&eacute;u na tua fama</p>
',
                'creditos' => '<p>Arranjo de base: Z&eacute; Ramalho e Luiz Ramalho</p>
<p>Arranjo de cordas: Paulo Machado</p>
<p>Viol&atilde;o ovation: Geraldo Azevedo</p>
<p>Viola de 10 cordas: Z&eacute; Ramalho</p>
<p>Sanfona e piano: Sivuca</p>
<p>Baixo: Jamil Joanes</p>
<p>Bateria: Elber Bedaque</p>
<p>Percuss&atilde;o: Robertinho Silva</p>
',
                'faixa_mp3' => '03_veio_dagua.mp3',
                'faixa_ogg' => '03_veio_dagua.ogg',
                'disco_id' => '1'));

        Musicas::create(
            array(
                'faixa' => 'Raz&#227;o de Paz',
                'compositor' => '(Novelli / M&#225;rcio Borges)',
                'letra' => '<p>Clareou raz&atilde;o de paz</p>
<p>Talvez porque seja bom</p>
<p>La&ccedil;o que a serpente deu</p>
<p>Homem mais nenhum desfaz</p>
<p>&nbsp;</p>
<p>Quem bateu decerto, errou</p>
<p>Quem levou de gra&ccedil;a, viu</p>
<p>A bandeira do perd&atilde;o</p>
<p>Labareda consumiu</p>
<p>&nbsp;</p>
<p>De que serve ser doutor</p>
<p>E voltar palavra atr&aacute;s?</p>
<p>Ou dizer que vai fazer</p>
<p>Sem mostrar que &eacute; capaz?</p>
<p>&nbsp;</p>
<p>Clareou raz&atilde;o de ser</p>
<p>Palavra de bom rapaz</p>
<p>La&ccedil;o que a serpente deu</p>
<p>Homem mais nenhum desfaz</p>
<p>&nbsp;</p>
<p>Encontrar raz&atilde;o de ser</p>
<p>Talvez porque tudo bem</p>
<p>Ou sen&atilde;o talvez porque</p>
<p>S&oacute; se vive uma vez</p>
<p>&nbsp;</p>
<p>Cobra d&rsquo;&aacute;gua, beija-flor</p>
<p>Estrela ou vegetal</p>
<p>Seja homem ou o que for</p>
<p>Ningu&eacute;m vai ficar pra tr&aacute;s</p>
<p>&nbsp;</p>
<p>Encontrar raz&atilde;o de ser</p>
<p>Talvez porque tudo bem</p>

',
                'creditos' => '
<p>Arranjo de base, viol&atilde;o e baixo: Novelli</p>
<p>Viola de 10 cordas: Geraldo Azevedo</p>
<p>Viol&atilde;o el&eacute;trico: Pato</p>
<p>Flautas: Danilo Caymmi, Paulo Jobim e Franklin</p>
<p>Sanfona: Dominguinhos</p>
<p>Bateria e percuss&atilde;o: Robertinho Silva</p>
<p>Percuss&atilde;o: Bol&atilde;o</p>
',
                'faixa_mp3' => '04_razao_de_paz.mp3',
                'faixa_ogg' => '04_razao_de_paz.ogg',
                'disco_id' => '1'));

        Musicas::create(
            array(
                'faixa' => 'Baile de M&#225;scaras',
                'compositor' => '(Pedro Osmar)',
                'letra' => '<p>Minha viola andava escondida</p>
<p>Descontente da vida, atarantada</p>
<p>Com as recentes not&iacute;cias</p>
<p>Que vinham do meu amor</p>
<p>Com as recentes not&iacute;cias</p>
<p>Que vinham do meu amor</p>
<p>&nbsp;</p>
<p>&Eacute; que nos &uacute;ltimos dez anos</p>
<p>Todas as violas andam escondidas</p>
<p>Descontentes da vida, atarantadas</p>
<p>Com as recentes not&iacute;cias</p>
<p>Que vem l&aacute; do exterior</p>
<p>Com as recentes not&iacute;cias</p>
<p>Que vem l&aacute; do exterior</p>
<p>&nbsp;</p>
<p>Para encobrir a verdade</p>
<p>De tamanha tristeza</p>
<p>Todas as violas puseram m&aacute;scaras</p>
<p>Vestiram roupa de mulher</p>
<p>Cal&ccedil;aram bota de soldado</p>
<p>E sa&iacute;ram por a&iacute; dizendo que era carnaval</p>
<p>E sa&iacute;ram por a&iacute; dizendo que era carnaval</p>
',
                'creditos' => '
<p>Arranjo de base: Geraldo Azevedo e Pedro Osmar</p>
<p>Viol&atilde;o ovation: Geraldo Azevedo</p>
<p>Viola: Pedro Osmar</p>
<p>Guitarra: Lulu Santos</p>
<p>Sax e flauta: Nivaldo Ornellas</p>
<p>Baixo: Jamil Joanes</p>
<p>Bateria: Elber Bedaque</p>
',
                'faixa_mp3' => '05_baile_de_mascaras.mp3',
                'faixa_ogg' => '05_baile_de_mascaras.ogg',
                'disco_id' => '1'));

        Musicas::create(
            array(
                'faixa' => 'Filho das &#205;ndias',
                'compositor' => '(Vinicius Cantu&#225;ria)',
                'letra' => '<p>Irupixuna bati&ecirc;, ela cantava</p>
<p>Filho das &iacute;ndias</p>
<p>Irupixuna bati&ecirc;, ela dan&ccedil;ava</p>
<p>Filho das &iacute;ndias</p>
<p>&nbsp;</p>
<p>Mexiam com as tintas</p>
<p>Misturavam as cores</p>
<p>Falavam de amores</p>
<p>&nbsp;</p>
<p>Tratavam da planta</p>
<p>Que cuidava a mente e o corpo</p>
<p>Seguindo o velho ritual</p>
<p>Tudo era normal</p>
<p>&nbsp;</p>
<p>Marcavam seu tempo</p>
<p>Atrav&eacute;s da lua e do sol</p>
<p>&Ocirc;ooooooo filho das &iacute;ndias</p>
<p>&Ocirc;ooooooo filho das &iacute;ndias</p>
<p>&Ocirc;ooooooo filho das &iacute;ndias</p>
<p>&Ocirc;ooooooo filho das &iacute;ndias</p>
<p>&Ocirc;ooooooo filho das &iacute;ndias</p>

',
                'creditos' => '
<p>Arranjo de base e guitarra: Vin&iacute;cius Cantu&aacute;ria</p>
<p>Piano: Wagner Tiso</p>
<p>Baixo: Waldecy</p>
<p>Bateria: Robertinho Silva</p>
<p>Percuss&atilde;o: Bol&atilde;o</p>
<p>Sax: Oberdan</p>
<p>Piston: Barrosinho</p>
<p>Trombone: Maciel</p>
<p>Coro: Lize Bravo, M&ocirc;nica Schimidt, Cristina, Sheila, Paulo Machado, Geraldo Azevedo, Renato Rocha e Marcelo Falc&atilde;o</p>
',
                'faixa_mp3' => '06_filho_das_indias.mp3',
                'faixa_ogg' => '06_filho_das_indias.ogg',
                'disco_id' => '1'));

        Musicas::create(
            array(
                'faixa' => 'Ave de Prata',
                'compositor' => '(Z&#233; Ramalho)',
                'letra' => '<p>&Eacute; muito mais do que muito</p>
<p>Muito mais do que quantos anos todos piorei</p>
<p>&Eacute; muito mais do que mata</p>
<p>Muito mais do que morrem todos pela planta do p&eacute;</p>
<p>&Eacute; muito mais do que fera</p>
<p>Mais do que bicho se quiser procriar</p>
<p>Uma esp&eacute;cie: sementes da &aacute;gua, mist&eacute;rios da luz</p>
<p>&nbsp;</p>
<p>&Eacute; muito mais do que antes</p>
<p>Mais do que vinte anos multiplicar</p>
<p>Dividir a mentira</p>
<p>Entre cabelos, olhos e furac&otilde;es</p>
<p>Inventar objetos</p>
<p>Pela esfinge quando era mulher</p>
<p>Ave de prata</p>
<p>Veneno de fogo</p>
<p>Vagalume do mar</p>
<p>&nbsp;</p>
<p>O mar que se acaba na areia</p>
<p>Gemidos da terra apoiados no ch&atilde;o</p>
<p>Entre todos que usam os dentes do arp&atilde;o</p>
<p>Apoiados em cada parede pela m&atilde;o</p>
<p>Pela m&atilde;o que criou tantas trevas e luz</p>
<p>&nbsp;</p>
<p>E cada coisa perdida</p>
<p>Perdidamente pode se apaixonar</p>
<p>Pela &uacute;ltima vida</p>
<p>Poucos amigos h&atilde;o de te procurar</p>
<p>Como &eacute; o sil&ecirc;ncio</p>
<p>E nesse momento tudo deve calar</p>
<p>Numa hist&oacute;ria que venha do povo</p>
<p>O ju&iacute;zo final</p>
',
                'creditos' => '
<p>Arranjo de base e viol&atilde;o ovation: Z&eacute; Ramalho</p>
<p>Arranjo de cordas: Paulo Machado</p>
<p>Viola de 10 cordas: Geraldo Azevedo</p>
<p>Viol&atilde;o 7 cordas: Dino</p>
<p>Guitarra portuguesa: Robertinho de Recife</p>
',
                'faixa_mp3' => '07_ave_de_prata.mp3',
                'faixa_ogg' => '07_ave_de_prata.ogg',
                'disco_id' => '1'));

        Musicas::create(
            array(
                'faixa' => 'Kukukaya (Jogo da Asa da Bruxa)',
                'compositor' => '(C&#225;tia de França)',
                'letra' => '<p>S&atilde;o quatro jogadores nessa mesa</p>
<p>Frente a frente para jogar</p>
<p>S&atilde;o quatro cabras de peia no desafio</p>
<p>Jogo da bruxa em noite de lua cheia</p>
<p>S&atilde;o quatro jogadores nessa mesa</p>
<p>Dando as cartas do jogo sujo da vida</p>
<p>&nbsp;</p>
<p>Kukukaya, eu quero isso aqui</p>
<p>Kukukaya, olha esse cachorro aqui, r&ecirc;i, r&ecirc;i</p>
<p>Kukukaya, eu quero isso aqui, r&ecirc;i</p>
<p>Kukukaya, olha esse cachorro aqui</p>
<p>&nbsp;</p>
<p>S&atilde;o quatro jogadores nessa mesa</p>
<p>Frente a frente, sem dar falsa folga a ningu&eacute;m</p>
<p>S&atilde;o quatro cabras de peia</p>
<p>De riso d&oacute;cil, de rima f&aacute;cil</p>
<p>N&atilde;o v&aacute; se enganar, hein meu bem?</p>
<p>&nbsp;</p>
<p>Eu tenho dois olhos, eu tenho dois p&eacute;s</p>
<p>Dos meus olhos v&aacute; pra meus p&eacute;s</p>
<p>Dos meus p&eacute;s</p>
<p>Pra dentro da terra</p>
<p>Da terra para a morte</p>
<p>&nbsp;</p>
<p>O ovo &eacute; redondo, ventre redondo &eacute;</p>
<p>Vem amor, vem com sa&uacute;de</p>
<p>Onde eu sou chama, seja voc&ecirc; brasa</p>
<p>Onde eu sou chuva, seja voc&ecirc; &aacute;gua</p>
<p>Onde eu sou chama, seja voc&ecirc; brasa</p>
<p>Onde eu sou chuva, seja voc&ecirc; &aacute;gua</p>
<p>&nbsp;</p>
<p>Kukukaya, eu quero voc&ecirc; aqui, r&ecirc;i</p>
<p>Kukukaya, preste aten&ccedil;&atilde;o em mim, r&ecirc;i, r&ecirc;i</p>
<p>Kukukaya, eu quero voc&ecirc; aqui</p>
<p>Kukukaya, preste aten&ccedil;&atilde;o em mim</p>


',
                'creditos' => '
<p>Arranjo de base e viol&atilde;o ovation: Geraldo Azevedo</p>
<p>Arranjo de cordas: Paulo Machado</p>
<p>Viola 10 cordas: Z&eacute; Ramalho</p>
<p>Viola: Z&eacute; Fl&aacute;vio</p>
<p>Guitarras: Lulu Santos</p>
<p>Baixo: Jamil Joanes</p>
<p>Piano: Paulo Sauer</p>
<p>Bateria: Elber Bedaque</p>
<p>Percuss&atilde;o: Robertinho Silva</p>
<p>Coro: Amelinha, Lize Bravo, M&ocirc;nica Schimidt, Cristina e Sheila</p>
',
                'faixa_mp3' => '08_kukukaya.mp3',
                'faixa_ogg' => '08_kukukaya.ogg',
                'disco_id' => '1'));

        Musicas::create(
            array(
                'faixa' => 'Cart&#227;o Postal',
                'compositor' => '(David Tygel / Cacaso)',
                'letra' => '<p>Eu sou manhoso, eu sou brasileiro</p>
<p>Finjo que vou, mas n&atilde;o vou</p>
<p>Minha janela &eacute; moldura</p>
<p>Do luar do sert&atilde;o &agrave; verde mata</p>
<p>Nos olhos verdes da mulata</p>
<p>Nos olhos verdes da mulata</p>
<p>&nbsp;</p>
<p>Sou brasileiro manhoso e por isso</p>
<p>Dentro da noite em meu quarto</p>
<p>Fico cismando na beira de um rio</p>
<p>Na imensa solid&atilde;o de latidos de araras</p>
<p>&nbsp;</p>
<p>L&iacute;vido, l&iacute;vido</p>
<p>De medo e de amor</p>
',
                'creditos' => '
<p>Arranjo de base: David Tygel e Geraldo Azevedo</p>
<p>Arranjo de cordas: Francis Hime</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Viol&atilde;o 7 cordas: Dino</p>
<p>Bandolim: Joel</p>
<p>Pandeiro: Jorginho</p>
<p>Clarinete: Netinho</p>
',
                'faixa_mp3' => '09_cartao_postal.mp3',
                'faixa_ogg' => '09_cartao_postal.ogg',
                'disco_id' => '1'));

        Musicas::create(
            array(
                'faixa' => 'O Dia do Criador',
                'compositor' => '(Walter Franco)',
                'letra' => '<p>A terra &eacute; o mesmo lugar</p>
<p>Onde se canta pra poder dan&ccedil;ar</p>
<p>A terra &eacute; o mesmo lugar</p>
<p>Onde se dan&ccedil;a pra poder cantar</p>
<p>&nbsp;</p>
<p>Eia c&eacute;u, olha a lua cheia</p>
<p>Eia estrela da manh&atilde;</p>
<p>Eia mar, olha o gr&atilde;o de areia</p>
<p>Eia irm&atilde;o, olha tua irm&atilde;</p>
<p>&nbsp;</p>
<p>Chegando l&aacute; da ribeira</p>
<p>Chegando l&aacute; da ribeira</p>
<p>Chegando l&aacute; da ribeira</p>
<p>Chegando l&aacute; da ribeira</p>
<p>Chegando l&aacute; da ribeira</p>
<p>&nbsp;</p>
<p>A terra &eacute; o mesmo lugar</p>
<p>Onde se canta pra poder sonhar</p>
<p>A terra &eacute; o mesmo lugar</p>
<p>Onde se sonha pra despertar</p>
<p>&nbsp;</p>
<p>Eia fogo que te incendeia</p>
<p>Eia irm&atilde;, olha teu irm&atilde;o</p>
<p>Eia sol que tudo clareia</p>
<p>Olha a &aacute;gua que sai do ch&atilde;o</p>
<p>&nbsp;</p>
<p>Correndo pra cachoeira</p>
<p>Correndo pra cachoeira</p>
<p>Correndo pra cachoeira</p>
<p>Correndo pra cachoeira</p>
<p>Correndo pra cachoeira</p>
<p>&nbsp;</p>
<p>A terra &eacute; o mesmo lugar</p>
<p>Onde se cansa pra poder deitar</p>
<p>A terra &eacute; o mesmo lugar</p>
<p>Onde se deita pra descansar</p>
<p>&nbsp;</p>
<p>Eia vento que rodopia</p>
<p>Eia, eia, meu amor</p>
<p>Eia, eia, eia poesia</p>
<p>Olha o dia do criador</p>
<p>&nbsp;</p>
<p>Entrando na brincadeira</p>
<p>Entrando na brincadeira</p>
<p>Entrando na brincadeira</p>
<p>Entrando na brincadeira</p>
<p>Entrando na brincadeira</p>
<p>&nbsp;</p>
<p>Chegando l&aacute; da ribeira</p>
<p>Correndo pra cachoeira</p>
<p>Entrando na brincadeira</p>
<p>Entrando na brincadeira</p>
<p>Entrando na brincadeira</p>
',
                'creditos' => '
<p>Arranjo de base e viol&atilde;o: Jo&atilde;o de Aquino</p>
<p>Viola: Geraldo Azevedo</p>
<p>Baixo: Luiz&atilde;o</p>
<p>Flauta: Waldemar Falc&atilde;o</p>
<p>Bateria: Robertinho Silva</p>
<p>Percuss&atilde;o: Bol&atilde;o e Bor&eacute;</p>
<p>Coro: M&ocirc;nica Schimidt, Neila, Luc&iacute;nia e N&aacute;dia</p>
',
                'faixa_mp3' => '10_o_dia_do_criador.mp3',
                'faixa_ogg' => '10_o_dia_do_criador.ogg',
                'disco_id' => '1'));

        Musicas::create(
            array(
                'faixa' => 'Bodocong&#243;',
                'compositor' => '(Humberto Teixeira / C&#237;cero Nunes)',
                'letra' => '<p>Eu fui feliz l&aacute; no Bodocong&oacute;</p>
<p>Com meu barquinho de um remo s&oacute;</p>
<p>Quando era lua</p>
<p>Com meu bem remava &agrave; toa</p>
<p>Ai, ai, ai, que coisa boa</p>
<p>L&aacute; no meu Bodocong&oacute;</p>
<p>&nbsp;</p>
<p>Bodocong&oacute; Bod&oacute; Bodocong&oacute;</p>
<p>Meu can&aacute;rio verde, meu curi&oacute;</p>
<p>Bodocong&oacute; Bod&oacute; Bod&oacute;</p>
<p>Bod&oacute; Bodocong&oacute;</p>
<p>Campina Grande eu vivo aqui t&atilde;o s&oacute;</p>
<p>Ai, ai</p>
<p>Campina Grande eu vivo aqui t&atilde;o s&oacute;</p>
',
                'creditos' => '
<p>Arranjo de base: Geraldo Azevedo e Dominguinhos</p>
<p>Viol&atilde;o ovation: Geraldo Azevedo</p>
<p>Viola: Z&eacute; Ramalho</p>
<p>Sanfona: Dominguinhos</p>
<p>Baixo: Novelli</p>
<p>Zabumba: Borel</p>
<p>Pandeiro: Z&eacute; Gomes</p>
<p>Tri&acirc;ngulo: Z&eacute; Leal</p>
<p>Bateria: Robertinho Silva</p>
',
                'faixa_mp3' => '11_bodocongo.mp3',
                'faixa_ogg' => '11_bodocongo.ogg',
                'disco_id' => '1'));

        Musicas::create(
            array(
                'faixa' => 'Caldeir&atilde;o dos Mitos',
                'compositor' => '(Br&aacute;ulio Tavares)',
                'letra' => '<p>Eu vi o c&eacute;u &agrave; meia-noite</p>
<p>Se avermelhando num clar&atilde;o</p>
<p>Como o inc&ecirc;ndio anunciado</p>
<p>No Apocalipse de S&atilde;o Jo&atilde;o</p>
<p>Por&eacute;m n&atilde;o era nada disso</p>
<p>Era um corisco, era um lampi&atilde;o</p>
<p>&nbsp;</p>
<p>Eu vi um risco nos espa&ccedil;os</p>
<p>Era o revoo de um sanha&ccedil;u</p>
<p>Eu vi o dia amanhecendo</p>
<p>No ronco do maracatu</p>
<p>N&atilde;o era a lan&ccedil;a de S&atilde;o Jorge</p>
<p>Era o espinho do mandacaru</p>
<p>&nbsp;</p>
<p>Vi um profeta conduzindo</p>
<p>Pros arraias as multid&otilde;es</p>
<p>Pra construir um ch&atilde;o sagrado</p>
<p>Com espingardas e fac&otilde;es</p>
<p>N&atilde;o foi Mois&eacute;s na Palestina</p>
<p>Foi Conselheiro andando nos sert&otilde;es</p>
<p>&nbsp;</p>
<p>Eu vi um som na escadaria</p>
<p>D&oacute;-re-mi-f&aacute; sol-l&aacute;-si-d&oacute;</p>
<p>N&atilde;o era o eco das trombetas</p>
<p>De Josu&eacute; em Jeric&oacute;</p>
<p>Era um fole de oito baixo</p>
<p>A tocar numa noite de forr&oacute;</p>
<p>&nbsp;</p>
<p>Vi um magrelo amarelado</p>
<p>Passando a perna no patr&atilde;o</p>
<p>N&atilde;o foi ningu&eacute;m da Inglaterra</p>
<p>Nem de Paris, nem do Jap&atilde;o</p>
<p>Era o Pedro Malazarte, era Jo&atilde;o Grilo</p>
<p>E era Canc&atilde;o</p>
<p>&nbsp;</p>
<p>Ouvi um som ao meio-dia</p>
<p>No meio do ch&atilde;o do Cear&aacute;</p>
<p>N&atilde;o era o coro dos arcanjos</p>
<p>Nem era a voz de Jeov&aacute;</p>
<p>Era uma cascavel armando o bote</p>
<p>Balan&ccedil;ando o marac&aacute;</p>
<p>&nbsp;</p>
<p>Vi uma m&atilde;o fazer no barro</p>
<p>Um homem forte, um homem nu</p>
<p>Um homem branco como eu</p>
<p>Um homem preto como tu</p>
<p>Por&eacute;m n&atilde;o foi a m&atilde;o de Deus</p>
<p>Foi Vitalino de Caruaru</p>
<p>Por&eacute;m n&atilde;o foi a m&atilde;o de Deus</p>
<p>Foi Vitalino de Caruaru</p>
<p>Por&eacute;m n&atilde;o foi a m&atilde;o de Deus</p>
<p>Foi Vitalino de Caruaru</p>
',
                'creditos' => '
<p>Arranjo: Banda Roj&atilde;o</p>
<p>Fole de 8 baixos: Abdias</p>
<p>Sanfona: Z&eacute; Am&eacute;rico</p>
<p>Baixo el&eacute;trico: Guil Guimar&atilde;es</p>
<p>Zabumba: Fausto Maciel</p>
<p>Pandeiro: Edson Dutra e Marcos Amma</p>
<p>Tri&acirc;ngulo: Dida</p>
<p>Agog&ocirc;: Osvaldo Oliveira e Marcos Amma</p>
<p>Efeitos: Marcos Amma</p>
<p>Viola de 12 cordas: Joca</p>
',
                'faixa_mp3' => '01_caldeirao_de_mitos.mp3',
                'faixa_ogg' => '01_caldeirao_de_mitos.ogg',
                'disco_id' => '2'));

        Musicas::create(
            array(
                'faixa' => 'N&oacute Cego',
                'compositor' => '(Pedro Osmar)',
                'letra' => '<p>&Eacute; voc&ecirc; a pessoa que deu</p>
<p>Um n&oacute; cego em meu peito</p>
<p>De apaixonado, de apaixonado?</p>
<p>&Eacute; voc&ecirc; a pessoa que deu</p>
<p>Um n&oacute; cego em meu peito</p>
<p>De apaixonado, de apaixonado?</p>
<p>&nbsp;</p>
<p>&Eacute; voc&ecirc;</p>
<p>O mascarado que me trancou</p>
<p>O mascarado que me trancou</p>
<p>Nessa noite sem amor?</p>
<p>Nessa noite sem amor?</p>
<p>&nbsp;</p>
<p>&Eacute; voc&ecirc; amigo?</p>
<p>&Eacute; voc&ecirc; o inimigo?</p>
<p>&Eacute; voc&ecirc; o perigo?</p>
<p>&Eacute; voc&ecirc;?</p>
<p>&Eacute; voc&ecirc; amigo?</p>
<p>&Eacute; voc&ecirc; o inimigo?</p>
<p>Voc&ecirc; o perigo?</p>
<p>&Eacute; voc&ecirc;?</p>
<p>&nbsp;</p>
<p>&Eacute; voc&ecirc; a garra de fome</p>
<p>Que atormenta o presente?</p>
<p>&Eacute; voc&ecirc; que mente muito?</p>
<p>&Eacute; voc&ecirc; a garra de fome</p>
<p>Que atormenta o presente?</p>
<p>&Eacute; voc&ecirc; que mente muito?</p>
<p>&nbsp;</p>
<p>Que me engana</p>
<p>Que me rouba da vida?</p>
<p>Que me engana</p>
<p>Que me rouba da vida?</p>
<p>Que me engana</p>
<p>Que me rouba da vida?</p>
',
                'creditos' => '
<p>Viola de 10 cordas: Pedro Osmar</p>
<p>Baixo el&eacute;trico: Guil Guimar&atilde;es</p>
<p>Guitarra: Joca</p>
<p>Percuss&atilde;o e surdo do maracatu: Marcos Amma</p>
<p>Bateria: Elber Bedaque</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Sitar: Robertinho de Recife</p>
',
                'faixa_mp3' => '02_no_cego.mp3',
                'faixa_ogg' => '02_no_cego.ogg',
                'disco_id' => '2'));

        Musicas::create(
            array(
                'faixa' => 'P&eacute;s de Milho',
                'compositor' => '(Jatob&aacute;)',
                'letra' => '<p>P&eacute;s de milho</p>
<p>Os andarilhos</p>
<p>Como os nossos filhos</p>
<p>Procurando vinte milhas</p>
<p>Pelas nossas filhas</p>
<p>Protegendo os milharais</p>
<p>Como as nossas m&atilde;es</p>
<p>Perseguindo os animais</p>
<p>Como os nossos pais</p>
<p>&nbsp;</p>
<p>Comparando a rouxin&oacute;is</p>
<p>Tal nossos av&oacute;s</p>
<p>Flutuando pelos rios</p>
<p>Como os nossos tios</p>
<p>Fungos, cogumelos, limos</p>
<p>Como os nossos primos</p>
<p>Tanta gente t&atilde;o aflita</p>
<p>Que eu nem sei ainda</p>
<p>Se transformo o trigo em p&atilde;o</p>
<p>Pra nossos irm&atilde;os</p>
<p>Ou transformo o p&atilde;o em trigo</p>
<p>Pros nossos amigos</p>
<p>Que est&atilde;o salvos do perigo</p>
<p>Do primeiro abrigo</p>
<p>Procurando girass&oacute;is</p>
<p>Como todos n&oacute;s</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia de cordas, piano el&eacute;trico e sanfona: Z&eacute; Am&eacute;rico</p>
<p>Baixo el&eacute;trico: Guil Guimar&atilde;es</p>
<p>Viola de 12 cordas: Joca</p>
<p>Bateria: Elber Bedaque</p>
<p>Congas, atabaques e efeitos: Marcos Amma</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
',
                'faixa_mp3' => '03_pes_de_milho.mp3',
                'faixa_ogg' => '03_pes_de_milho.ogg',
                'disco_id' => '2'));

        Musicas::create(
            array(
                'faixa' => 'L&eacute;gua Tirana ',
                'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
                'letra' => '<p>&Oacute;, que estrada mais comprida</p>
<p>&Oacute;, que l&eacute;gua t&atilde;o tirana</p>
<p>Ai, se eu tivesse asas</p>
<p>Inda hoje eu via Ana</p>
<p>&nbsp;</p>
<p>Quando o sol tostou as folhas</p>
<p>E bebeu o riach&atilde;o</p>
<p>Fui int&eacute; o Juazeiro</p>
<p>Pra fazer minha ora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>T&ocirc; voltando estropiado</p>
<p>Mas alegre o cora&ccedil;&atilde;o</p>
<p>Padim Ci&ccedil;o ouviu minha prece</p>
<p>Fez chover no meu sert&atilde;o</p>
<p>&nbsp;</p>
<p>Varei mais de vinte serras</p>
<p>De alpercata e p&eacute; no ch&atilde;o</p>
<p>Mesmo assim como inda farta</p>
<p>Pra chegar no meu rinc&atilde;o!</p>
<p>&nbsp;</p>
<p>Trago um ter&ccedil;o pra das Dores</p>
<p>Pra Reimundo, um viol&atilde;o</p>
<p>E pra ela, e pra ela</p>
<p>Trago eu e o cora&ccedil;&atilde;o</p>
<p>E pra ela, e pra ela</p>
<p>Trago eu e o cora&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo de cordas: Alexandre Gnatalli</p>
<p>Arranjo de base e viol&atilde;o de 7 cordas: Dino</p>
<p>Cavaquinho: Manass&eacute;s e Canhoto</p>
<p>Viol&atilde;o de 6 cordas: Meira</p>
<p>Sanfona: Sivuca</p>
<p>Flauta: Franklin</p>
',
                'faixa_mp3' => '04_legua_tirana.mp3',
                'faixa_ogg' => '04_legua_tirana.ogg',
                'disco_id' => '2'));

        Musicas::create(
            array(
                'faixa' => 'Porto da Saudade',
                'compositor' => '(Alceu Valen&ccedil;a)(Refr&atilde;o do folclore nordestino)
',
                'letra' => '<p>Faz tanto tempo</p>
<p>Tempo &eacute; rua solidade</p>
<p>Leia saudade quando escrevo solid&atilde;o</p>
<p>Quis o destino tortuoso dos ciganos</p>
<p>E as aventuras dos pneus de um caminh&atilde;o</p>
<p>Que atravessava o riacho de salobro</p>
<p>Deixando marcas desenhadas pelo ch&atilde;o</p>
<p>O vento vinha e varria &agrave; minha volta</p>
<p>A ventania e o tempo n&atilde;o tem compaix&atilde;o</p>
<p>A ventania e o tempo n&atilde;o tem compaix&atilde;o</p>
<p>&nbsp;</p>
<p>&Oacute;, mana deixa eu ir</p>
<p>&Oacute;, mana eu vou s&oacute;</p>
<p>&Oacute;, mana deixa eu ir</p>
<p>Pro sert&atilde;o de Caic&oacute;</p>
<p>&nbsp;</p>
<p>Faz tanto tempo</p>
<p>Tempo &eacute; o porto da saudade</p>
<p>Praias do Rio de Janeiro no ver&atilde;o</p>
<p>Quero o destino das &aacute;guas dos oceanos</p>
<p>Me evaporando preu chover no riach&atilde;o</p>
<p>Mergulharia no riacho de salobro</p>
<p>Lavando a culpa como se eu fosse crist&atilde;o</p>
<p>O vento vinha e varria &agrave; minha volta</p>
<p>A ventania e o tempo n&atilde;o tem compaix&atilde;o</p>
<p>A ventania e o tempo n&atilde;o tem compaix&atilde;o</p>
',
                'creditos' => '
<p>Arranjo: Banda Roj&atilde;o</p>
<p>Baixo el&eacute;trico: Guil Guimar&atilde;es</p>
<p>Viola de 12 cordas: Joca</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Sanfona: Z&eacute; Am&eacute;rico</p>
<p>Bateria: Elber Bedaque</p>
<p>Tri&acirc;ngulo e agog&ocirc;: Marcos Amma</p>
<p>Coro: Aleuda, Cristina Ponce e As Gatas (Francinete, Eur&iacute;dice, Zenilda e Dinorah)</p>
',
                'faixa_mp3' => '05_porto_da_saudade.mp3',
                'faixa_ogg' => '05_porto_da_saudade.ogg',
                'disco_id' => '2'));

        Musicas::create(
            array(
                'faixa' => 'O Violeiro',
                'compositor' => '(Elomar)',
                'letra' => '<p>Vou cantar num canto de primeiro</p>
<p>As coisas l&aacute; da minha mudern&aacute;ge</p>
<p>Que me fizeram errante violeiro</p>
<p>Eu falo s&eacute;rio e n&atilde;o &eacute; vadi&aacute;ge</p>
<p>E pra voc&ecirc; que agora est&aacute; me ouvindo</p>
<p>Eu juro int&eacute; pelo santo menino</p>
<p>V&iacute;ge Maria, que ouve o que eu digo</p>
<p>Se for mentira, me mande um castigo</p>
<p>&nbsp;</p>
<p>Iap&ocirc;is pro cantador e violeiro</p>
<p>S&oacute; h&aacute; tr&ecirc;s coisas nesse mundo v&atilde;o</p>
<p>Amor, forria, viola</p>
<p>Nunca dinheiro</p>
<p>Viola, forria, amor, dinheiro n&atilde;o</p>
<p>Viola, forria, amor, dinheiro n&atilde;o</p>
<p>&nbsp;</p>
<p>Cantador de trovas e martelos</p>
<p>De gabinete, ligeira e mour&atilde;o</p>
<p>Ai, cantador, corri o mundo inteiro</p>
<p>J&aacute; int&eacute; cantei nas porta de um castelo</p>
<p>De um rei que se chamava de Jo&atilde;o</p>
<p>Pode acreditar meu companheiro</p>
<p>Adisp&ocirc;is de eu ter cantado o dia inteiro</p>
<p>O rei me disse &ldquo;fica&rdquo;, eu disse &ldquo;n&atilde;o&rdquo;</p>
<p>&nbsp;</p>
<p>Se eu tivesse de viver obrigado</p>
<p>Um dia e antes desse dia eu morro</p>
<p>Deus fez os h&ocirc;me e os bicho tudo f&ocirc;rro</p>
<p>J&aacute; havia escrito no livro sagrado</p>
<p>Que a vida nessa terra &eacute; uma passagem</p>
<p>Cada um leva um fardo pesado</p>
<p>&Eacute; o ensinamento que desde a mudern&aacute;ge</p>
<p>Eu trago dentro do cora&ccedil;&atilde;o guardado</p>
<p>&nbsp;</p>
<p>Tive muita dor de n&atilde;o ter nada</p>
<p>Pensando que esse mundo &eacute; tudo ter</p>
<p>Mas s&oacute; depois de penar pelas estrada</p>
<p>Beleza na pobreza &eacute; que fui ver</p>
<p>Fui ver na prociss&atilde;o, louvado seja</p>
<p>O malassombro das casa abandona</p>
<p>Coro de cego na porta das igreja</p>
<p>E o ermo da solid&atilde;o nas estrada</p>
<p>&nbsp;</p>
<p>Pispiando tudo do come&ccedil;o</p>
<p>Eu vou mostrar como se faz um pachola</p>
<p>Ai, que enforca o pesco&ccedil;o da viola</p>
<p>E revira toda a moda pelo avesso</p>
<p>E sem arreparar se &eacute; noite e dia</p>
<p>Vai assim cantar o bem da forria</p>
<p>Sem um tost&atilde;o na cuia o cantador</p>
<p>Canta at&eacute; morrer o bem do amor</p>
',
                'creditos' => '
<p>Viola de 10 cordas e viol&atilde;o: Z&eacute; Menezes</p>
<p>Viola de 12 cordas: Joca</p>
',
                'faixa_mp3' => '06_o_violeiro.mp3',
                'faixa_ogg' => '06_o_violeiro.ogg',
                'disco_id' => '2'));

        Musicas::create(
            array(
                'faixa' => 'Banquete de Signos',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>Discutir o canga&ccedil;o com liberdade</p>
<p>&Eacute; saber da viola, da viol&ecirc;ncia</p>
<p>Descobrir nos cabelos inoc&ecirc;ncia</p>
<p>&Eacute; saber da fatal fertilidade</p>
<p>&nbsp;</p>
<p>Descobrir a cidade na natureza</p>
<p>Descobrir a beleza dessa mulher</p>
<p>Descobrir o que der boniteza</p>
<p>Na peleja do homem vier, quando vier</p>
<p>&nbsp;</p>
<p>Descobrir o baga&ccedil;o dos engenhos</p>
<p>No mela&ccedil;o da cana mais um beijo</p>
<p>Descobrir os desejos que n&atilde;o tem cura</p>
<p>Saracura do brejo na novena</p>
<p>&nbsp;</p>
<p>Descobrir a serena da natureza</p>
<p>Descobrir a beleza dessa mulher</p>
<p>Descobrir o que der boniteza</p>
<p>Na peleja do homem vier, quando vier</p>
',
                'creditos' => '
<p>Arranjo e reg&ecirc;ncia: Miguel Cidras</p>
<p>Bateria: Picol&eacute;</p>
<p>Baixo el&eacute;trico: Paulo C&eacute;sar</p>
<p>Guitarra e guitarra portuguesa: Robertinho de Recife</p>
<p>Viol&atilde;o ovation: Geraldo Azevedo</p>
<p>Viola ovation: Z&eacute; Ramalho</p>
<p>Zabumba: Bor&eacute;</p>
',
                'faixa_mp3' => '07_banquete_de_signos.mp3',
                'faixa_ogg' => '07_banquete_de_signos.ogg',
                'disco_id' => '2'));

        Musicas::create(
            array(
                'faixa' => 'Espiral do Tempo',
                'compositor' => '(Geraldo Azevedo / Carlos Fernando)',
                'letra' => '<p>Antes da China, o bicho da seda</p>
<p>Depois o homem, o sabor, o metal</p>
<p>Antes de todos, formiga e abelhas</p>
<p>Jo&atilde;o e Maria, a asa, a paz</p>
<p>&nbsp;</p>
<p>&Aacute;vido p&aacute;ssaro, brilho de prata</p>
<p>Bico de ponta, sede de amar</p>
<p>&Aacute;vido p&aacute;ssaro, brilho de prata</p>
<p>Bico de ponta, sede de amar</p>
<p>&nbsp;</p>
<p>O sol das Am&eacute;ricas, o cio da &Aacute;frica</p>
<p>A energia que muda as quatro esta&ccedil;&otilde;es</p>
<p>O pend&atilde;o do trigo, a m&atilde;o dos padeiros</p>
<p>A l&atilde; dos carneiros, o mar e sert&otilde;es</p>
',
                'creditos' => '
<p>Baixo el&eacute;trico: Guil Guimar&atilde;es</p>
<p>Guitarra: Joca</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Bateria e timbales: Elber Bedaque</p>
<p>Percuss&atilde;o, bong&ocirc; e cowbell: Marcos Amma</p>
<p>&Oacute;rg&atilde;o: Z&eacute; Am&eacute;rico</p>
',
                'faixa_mp3' => '08_espiral_do_tempo.mp3',
                'faixa_ogg' => '08_espiral_do_tempo.ogg',
                'disco_id' => '2'));

        Musicas::create(
            array(
                'faixa' => 'Capim do Vale',
                'compositor' => '(Sivuca / Paulinho Tapaj&oacute;s)',
                'letra' => '<p>Lava esse cheiro de erva</p>
<p>Pimenta e capim do vale</p>
<p>Lava esse cheiro de erva</p>
<p>Pimenta e capim do vale</p>
<p>&nbsp;</p>
<p>Lava o suor da colheita</p>
<p>E aceita que eu te agasalhe</p>
<p>Lava o suor da colheita</p>
<p>E aceita que eu te agasalhe</p>
<p>&nbsp;</p>
<p>Larga a madeira na estrada</p>
<p>E larga essa faca de entalhe</p>
<p>Larga a madeira na estrada</p>
<p>E larga essa faca de entalhe</p>
<p>&nbsp;</p>
<p>Larga o patr&atilde;o na picada</p>
<p>E aceita que eu te agasalhe</p>
<p>Larga o patr&atilde;o na picada</p>
<p>E aceita que eu te agasalhe</p>
<p>&nbsp;</p>
<p>Sempre h&aacute; de haver algum trigo</p>
<p>E da terra algum peda&ccedil;o</p>
<p>Guarda a tua m&atilde;o pra um amigo</p>
<p>Que n&atilde;o vai querer teu bra&ccedil;o</p>
<p>Guarda a tua m&atilde;o pra um amigo</p>
<p>Que n&atilde;o vai querer teu bra&ccedil;o</p>
<p>&nbsp;</p>
<p>Deixa o dinheiro mal pago</p>
<p>E mande que ele trabalhe</p>
<p>Deixa o dinheiro mal pago</p>
<p>E mande que ele trabalhe</p>
<p>&nbsp;</p>
<p>Enquanto voc&ecirc; toma um trago</p>
<p>E aceita que eu te agasalhe</p>
<p>Enquanto voc&ecirc; toma um trago</p>
<p>E aceita que eu te agasalhe</p>
<p>&nbsp;</p>
<p>Deita teu corpo em meu ventre</p>
<p>Que eu guardo a tua semente</p>
<p>Deita teu corpo em meu ventre</p>
<p>Que eu guardo a tua semente</p>
<p>&nbsp;</p>
<p>Ningu&eacute;m carrega a colheita</p>
<p>Dos frutos que s&atilde;o da gente</p>
<p>Ningu&eacute;m carrega a colheita</p>
<p>Dos frutos que s&atilde;o da gente</p>
',
                'creditos' => '
<p>Arranjo e reg&ecirc;ncia de base: Sivuca</p>
<p>Baixo el&eacute;trico: Z&eacute; Am&eacute;rico</p>
<p>Guitarra: Joca</p>
<p>Sanfona e colher: Sivuca</p>
<p>Zabumba: Marcos Amma</p>
<p>Tri&acirc;ngulo: Peninha</p>
<p>Ganz&aacute;: Caf&eacute;</p>
<p>Congas: Caf&eacute;, Peninha e Marcos Amma</p>
<p>Coro: Aleuda, Cristina Ponce, As Gatas (Francinete, Eur&iacute;dice, Zenilda e Dinorah), Tadeu Mathias, Guil Guimar&atilde;es, Joca, Marcos Amma, Z&eacute; Am&eacute;rico, Carlos Jullien, Carlos Fernando e S&iacute;lvio Romero</p>
<p>Palmas: Guil Guimar&atilde;es, Joca, Marcos Amma, Z&eacute; Am&eacute;rico, Carlos Jullien, Tadeu Mathias, Carlos Fernando, S&iacute;lvio Romero, Chico Jullien e Mochel</p>
',
                'faixa_mp3' => '09_capim_do_vale.mp3',
                'faixa_ogg' => '09_capim_do_vale.ogg',
                'disco_id' => '2'));

        Musicas::create(
            array(
                'faixa' => 'Ful&ocirc; da Margem',
                'compositor' => '(Mirab&ocirc; / Capinan)',
                'letra' => '<p>N&atilde;o sou ful&ocirc; que se cheire</p>
<p>E que se deixe murchar</p>
<p>Nem sou o mato onde morre</p>
<p>Onde corre a Estrela Dalva</p>
<p>&nbsp;</p>
<p>Eu n&atilde;o sou corpo que se corte</p>
<p>Eu n&atilde;o sou sorte que se enjeite</p>
<p>Eu n&atilde;o sou porto que se deixe</p>
<p>Moreno, sem me levar</p>
<p>&nbsp;</p>
<p>Eu n&atilde;o sou carne e nem sou peixe, moreno</p>
<p>Rio abaixo, rio acima</p>
<p>Nem sou cacimba vazia</p>
<p>Que se enche de chorar</p>
<p>&nbsp;</p>
<p>Eu n&atilde;o sou bra&ccedil;o de mar, moreno</p>
<p>Que n&atilde;o se deixe abra&ccedil;ar</p>
<p>Nem sou a ful&ocirc; da margem, moreno</p>
<p>Que n&atilde;o se possa cheirar</p>
<p>Nem sou a ful&ocirc; da margem, moreno</p>
<p>Que n&atilde;o se possa cheirar</p>
',
                'creditos' => '
<p>Arranjo de base e sanfona: Z&eacute; Am&eacute;rico</p>
<p>Baixo el&eacute;trico: Guil Guimar&atilde;es</p>
<p>Guitarra: Joca</p>
<p>Bateria: Elber Bedaque</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Tri&acirc;ngulo e agog&ocirc;: Marcos Amma</p>
',
                'faixa_mp3' => '10_fulo_da_margem.mp3',
                'faixa_ogg' => '10_fulo_da_margem.ogg',
                'disco_id' => '2'));

        Musicas::create(
            array(
                'faixa' => 'Imbalan&ccedil;a',
                'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas)',
                'letra' => '<p>&Oacute;ia a paia do coqueiro quando o vento d&aacute;</p>
<p>O tombo da jangada nas onda do mar</p>
<p>Olha o tombo da jangada nas onda do mar</p>
<p>&Oacute;ia a paia do coqueiro quando o vento d&aacute;</p>
<p>&nbsp;</p>
<p>Pra voc&ecirc; aguentar meu roj&atilde;o</p>
<p>&Eacute; preciso saber requebrar</p>
<p>Ter molejo nos p&eacute;s e nas m&atilde;os</p>
<p>Ter no corpo o balan&ccedil;o do mar</p>
<p>Ser que nem carrapeta no ch&atilde;o</p>
<p>E virar folha seca no ar</p>
<p>Que &eacute; pra quando escutar meu bai&atilde;o</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
<p>&nbsp;</p>
<p>Voc&ecirc; tem que viver no sert&atilde;o</p>
<p>Pra na rede aprender embalar</p>
<p>Aprender a bater no pil&atilde;o</p>
<p>Na peneira aprender peneirar</p>
<p>Ver relampo no m&ecirc;i do trov&atilde;o</p>
<p>Fazer cobra de fogo no ar</p>
<p>Que &eacute; pra quando escutar meu bai&atilde;o</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
<p>&nbsp;</p>
',
                'creditos' => '
<p>Baixo el&eacute;trico: Guil Guimar&atilde;es</p>
<p>Guitarra: Paulo Rafael</p>
<p>Sanfona: Z&eacute; Am&eacute;rico</p>
<p>Pandeiro: Jackson do Pandeiro</p>
<p>Tri&acirc;ngulo: Tinda</p>
<p>Ganz&aacute;: Vicente Pereira</p>
<p>Agog&ocirc;: Loza</p>
<p>Zabumba: Ci&ccedil;o</p>
<p>Flauta: Z&eacute; da Flauta</p>
<p>Caxixi: Marcos Amma</p>
',
                'faixa_mp3' => '11_imbalanca.mp3',
                'faixa_ogg' => '11_imbalanca.ogg',
                'disco_id' => '2'));

        Musicas::create(
            array(
                'faixa' => 'Veja (Margarida)',
                'compositor' => '(Vital Farias)',
                'letra' => '<p>Veja voc&ecirc;</p>
<p>Arco-&iacute;ris j&aacute; mudou de cor</p>
<p>E uma rosa nunca mais desabrochou</p>
<p>E eu n&atilde;o quero ver voc&ecirc;</p>
<p>Com esse gosto de sab&atilde;o na boca</p>
<p>&nbsp;</p>
<p>Arco-&iacute;ris j&aacute; mudou de cor</p>
<p>E uma rosa nunca mais desabrochou</p>
<p>E eu n&atilde;o quero ver voc&ecirc;</p>
<p>Eu n&atilde;o quero ver</p>
<p>&nbsp;</p>
<p>Veja, meu bem</p>
<p>Gasolina vai subir de pre&ccedil;o</p>
<p>E eu n&atilde;o quero nunca mais seu endere&ccedil;o</p>
<p>Ou &eacute; o come&ccedil;o do fim</p>
<p>Ou &eacute; o fim</p>
<p>&nbsp;</p>
<p>Eu vou partir</p>
<p>Pra cidade garantida, proibida</p>
<p>Arranjar meio de vida, Margarida</p>
<p>Pra voc&ecirc; gostar de mim</p>
<p>&nbsp;</p>
<p>Essas feridas da vida, Margarida</p>
<p>Essas feridas da vida, amarga vida</p>
<p>Pra voc&ecirc; gostar</p>
<p>(Pra voc&ecirc; gostar de mim)</p>
',
                'creditos' => '
<p>Arranjo e reg&ecirc;ncia de base: Vital Farias<br />
Baixo el&eacute;trico: Guil Guimar&atilde;es<br />
Viol&atilde;o: Vital Farias<br />
Viola: Joca<br />
Piano: Z&eacute; Am&eacute;rico<br />
</p>
',
                'faixa_mp3' => '12_veja_margarida.mp3',
                'faixa_ogg' => '12_veja_margarida.ogg',
                'disco_id' => '2'));

        Musicas::create(
            array(
                'faixa' => 'Temporal',
                'compositor' => '(Br&aacute;ulio Tavares / Fub&aacute;)',
                'letra' => '<p>Quem viu a terra gemer</p>
<p>Nos dentes brancos do mar</p>
<p>E a laje fria da espuma</p>
<p>A sete palmos de olhar</p>
<p>Pisou as curvas do mapa</p>
<p>E os raios do sol nascente</p>
<p>Tocou as cordas da harpa</p>
<p>De a&ccedil;o incandescente</p>
<p>&nbsp;</p>
<p>Eu percorri todo o sonho</p>
<p>No meio da madrugada</p>
<p>E vi planta&ccedil;&otilde;es de balas</p>
<p>Sementes das espingardas</p>
<p>Eu mato, matas e mata</p>
<p>Quem fala n&atilde;o mata n&atilde;o</p>
<p>Quem cala consente a fala</p>
<p>E os gritos do capit&atilde;o</p>
<p>&nbsp;</p>
<p>Quem viu os cachorros negros</p>
<p>Latindo para o luar</p>
<p>E um voo v&atilde;o dos morcegos</p>
<p>Gritando mudos no ar</p>
<p>Conhece a for&ccedil;a guardada</p>
<p>Na mola dos temporais</p>
<p>Escurecendo as estrelas</p>
<p>Nos ombros dos generais</p>
<p>&nbsp;</p>
<p>A mais cruel armadilha</p>
<p>Encruzilhada dos fins</p>
<p>E os alicerces das ilhas</p>
<p>Ro&iacute;dos pelos cupins</p>
<p>A fina dor da ferida</p>
<p>Doendo at&eacute; no fac&atilde;o</p>
<p>E o mapa da minha vida</p>
<p>Na palma da minha m&atilde;o</p>
<p>&nbsp;</p>
<p>Quem viu o bra&ccedil;o da sombra</p>
<p>Das folhas de uma palmeira</p>
<p>Pousar em car&iacute;cia longa</p>
<p>Nos ombros da terra inteira</p>
<p>Ouviu da boca da noite</p>
<p>Feroz sil&ecirc;ncio mortal</p>
<p>E viu o bobo da corte</p>
<p>Dan&ccedil;ando no funeral</p>
<p>&nbsp;</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano: Miguel Cidras</p>
<p>Guitarra e violas: Joca</p>
<p>Baixo: Paulo Cesar</p>
<p>Bateria: Mam&atilde;o</p>
<p>Percuss&atilde;o: Marcos Amma</p>
<p>Sanfona: Z&eacute; Am&eacute;rico</p>
<p>Violinos: Peraschi, Walter Hack, Carlos Hack, Virg&iacute;lio Filho, Jorge Faini, Aizik Geller, Daltro e Pascoal</p>
<p>Violas: Penteado, Frederick Stephany, Jos&eacute; Dias de Lana e Nelson de Macedo</p>
<p>Cellos: Alceu e Jorge Ranesvsky</p>
',
                'faixa_mp3' => '01_temporal.mp3',
                'faixa_ogg' => '01_temporal.ogg',
                'disco_id' => '3'));

        Musicas::create(
            array(
                'faixa' => 'Amanh&atilde; Eu Vou',
                'compositor' => '(Luiz Gonzaga / Bedu&iacute;no)',
                'letra' => '<p>Era uma certa vez</p>
<p>Um lago mal assombrado</p>
<p>A noite sempre se ouvia</p>
<p>Crimbamba cantando assim</p>
<p>&nbsp;</p>
<p>Amanh&atilde; eu vou, amanh&atilde; eu vou</p>
<p>Amanh&atilde; eu vou, amanh&atilde; eu vou</p>
<p>Eu vou, amanh&atilde; eu vou</p>
<p>Amanh&atilde; eu vou, amanh&atilde; eu vou</p>
<p>&nbsp;</p>
<p>A carimbamba, ave da noite</p>
<p>Cantava triste l&aacute; na taboa</p>
<p>Amanh&atilde; eu vou, amanh&atilde; eu vou</p>
<p>&nbsp;</p>
<p>E Rosabela, linda donzela</p>
<p>Ouviu o seu canto e foi pra lagoa</p>
<p>E Rosabela, linda donzela</p>
<p>Ouviu o seu canto e foi pra lagoa</p>
<p>&nbsp;</p>
<p>A taboa la&ccedil;ou a donzela</p>
<p>Pra dentro d&rsquo;&aacute;gua ela levou</p>
<p>A carimbamba vive cantando</p>
<p>Mas Rosabela nunca mais voltou</p>
<p>&nbsp;</p>
<p>Amanh&atilde; eu vou, amanh&atilde; eu vou</p>
<p>Amanh&atilde; eu vou, amanh&atilde; eu vou</p>
<p>Eu vou, eu vou</p>
<p>Eu vou, amanh&atilde; eu vou</p>
<p>&nbsp;</p>',
                'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano ac&uacute;stico: Miguel Cidras</p>
<p>Baixo: Paulo Cesar</p>
<p>Guitarra: Joca</p>
<p>Percuss&atilde;o: Marcos Amma</p>
<p>Bateria: Mam&atilde;o</p>
<p>Charango: Pipo</p>
<p>Violinos: Peraschi, Walter Hack, Carlos Hack, Virg&iacute;lio Filho, Jorge Faini, Aizik Geller, Daltro e Pascoal</p>
<p>Violas: Penteado, Frederick Stephany, Jos&eacute; Dias de Lana e Nelson de Macedo</p>
<p>Cellos: Alceu e Jorge Ranesvsky</p>
',
                'faixa_mp3' => '02_amanha_eu_vou.mp3',
                'faixa_ogg' => '02_amanha_eu_vou.ogg',
                'disco_id' => '3'));

        Musicas::create(
            array(
                'faixa' => 'Dono Dos Teus Olhos',
                'compositor' => '(Humberto Teixeira)',
                'letra' => '<p>N&atilde;o te esque&ccedil;a</p>
<p>Que eu sou dona dos teus &oacute;io</p>
<p>Faz favor de num espi&aacute; pra mais ningu&eacute;m</p>
<p>Esse azul cor e promessa dos teus &oacute;io</p>
<p>Faz quarqu&eacute; crist&atilde;o gostar de tu tamb&eacute;m</p>
<p>&nbsp;</p>
<p>Que nosso senhor perdoe o meu ci&uacute;me</p>
<p>Quando penso em cegar os &oacute;io teu</p>
<p>Pra que eu, somente eu seja o teu guia</p>
<p>Os &oacute;io dos teus &oacute;io, a luz dos &oacute;io teu</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano: Z&eacute; Am&eacute;rico</p>
<p>Baixo ac&uacute;stico: Antonio Santana</p>
<p>Violinos: Peraschi, Jos&eacute; Alves, Virg&iacute;lio Filho, Aizik Geller, Vidal e Pascoal</p>
<p>Violas: Penteado e Hindemburgo Pereira</p>
<p>Cellos: Marcio Mallard e Jaques Morelenbaum</p>
',
                'faixa_mp3' => '03_dono_dos_teus_olhos.mp3',
                'faixa_ogg' => '03_dono_dos_teus_olhos.ogg',
                'disco_id' => '3'));

        Musicas::create(
            array(
                'faixa' => 'Oitava',
                'compositor' => '(C&aacute;tia de Fran&ccedil;a)',
                'letra' => '<p>Explode o p&ocirc;r do sol</p>
<p>Lambendo o horizonte</p>
<p>Da outra banda, a Lua</p>
<p>Por entre os coqueirais</p>
<p>&nbsp;</p>
<p>Mist&eacute;rios, sei, ele encerra</p>
<p>Segredos seus ao luar</p>
<p>Silenciosa m&atilde;e terra</p>
<p>Sem pressa, sem esperar</p>
<p>&nbsp;</p>
<p>Oitava teclados da vida</p>
<p>Oitava na nota dos dias</p>
<p>Eu tava presa pelos dedos</p>
<p>Em brasa, em carne viva</p>
<p>Carne viva, &ecirc;...</p>
<p>&nbsp;</p>
<p>Ouvindo o mar n&oacute;s est&aacute;vamos</p>
<p>No tombo do ata ou desata</p>
<p>S&oacute; sei que oitava da vida</p>
<p>Tu foge ou ela te mata</p>
<p>&nbsp;</p>
<p>Oitava teclados da vida</p>
<p>Oitava na nota dos dias</p>
<p>Eu tava sem rumo, perdida</p>
<p>T&atilde;o triste, na dor consumida</p>
<p>Consumida, &ecirc;...</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano: Miguel Cidras</p>
<p>Guitarra: Joca</p>
<p>Baixo: Paulo Cesar</p>
<p>Bateria: Mam&atilde;o</p>
<p>Percuss&atilde;o: Marcos Amma</p>
<p>Trumpetes: Marcio Montarroyos e Bidinho</p>
<p>Saxes: Leo Gandelman, Z&eacute; Carlos e Oberdan</p>
<p>Trombone: Serginho</p>
',
                'faixa_mp3' => '04_oitava.mp3',
                'faixa_ogg' => '04_oitava.ogg',
                'disco_id' => '3'));

        Musicas::create(
            array(
                'faixa' => 'O Pedido',
                'compositor' => '(Elomar)',
                'letra' => '<p>J&aacute; que tu vai l&aacute; pra feira</p>
<p>Traga de l&aacute; para mim</p>
<p>&Aacute;gua da ful&ocirc; que cheira</p>
<p>Um novelo e um carmim</p>
<p>&nbsp;</p>
<p>Traz um pacote de misse</p>
<p>Meu amigo, ah, se tu visse</p>
<p>Aquele cego cantador</p>
<p>Um dia ele me disse</p>
<p>Jogando um mote de amor</p>
<p>Que eu havera de viver</p>
<p>Por esse mundo</p>
<p>E morrer ainda em flor</p>
<p>&nbsp;</p>
<p>Passa naquela barraca</p>
<p>Daquela mui&eacute; rez&ecirc;ra</p>
<p>Onde almo&ccedil;amo paca</p>
<p>Panelada e frigideira</p>
<p>&nbsp;</p>
<p>Int&eacute; voc&ecirc; disse uma loa</p>
<p>Gabando a boia boa</p>
<p>Que das casas da cidade</p>
<p>Aquela era a primeira</p>
<p>&nbsp;</p>
<p>Traz pra mim umas brevidades</p>
<p>Que eu quero matar a saudade</p>
<p>Faz tempo que fui na feira</p>
<p>Ai, saudade</p>
<p>&nbsp;</p>
<p>Ah, pois sim, v&ecirc; se n&atilde;o esquece</p>
<p>Que inda nessa lua cheia</p>
<p>N&oacute;s vai brincar na quermesse</p>
<p>L&aacute; no riacho d&#39;areia</p>
<p>&nbsp;</p>
<p>Na casa daquele homem</p>
<p>Feiticeiro e curador</p>
<p>Que o dia inteiro &eacute; homem</p>
<p>Fio de Nosso Senhor</p>
<p>Mas disp&ocirc;is da meia-noite</p>
<p>&Eacute; lobisomem comedor</p>
<p>Dos pag&atilde;o que a m&atilde;e esqueceu</p>
<p>Do batismo salvador</p>
<p>Inda tem dois garraf&atilde;o</p>
<p>Com dois canguim responsad&ocirc;</p>
<p>&nbsp;</p>
<p>Ah, pois sim, v&ecirc; se n&atilde;o esquece</p>
<p>De trazer ruge e carmim</p>
<p>Ai, se o dinheiro desse</p>
<p>Eu queria um trancelim</p>
<p>&nbsp;</p>
<p>Com mais tr&ecirc;s metro de chita</p>
<p>Que &eacute; pra eu fazer um vestido</p>
<p>E ficar bem mais bonito</p>
<p>Que Mad&ocirc; de Juca Dido</p>
<p>E Zefa de Nh&ocirc; Joaquim</p>
<p>&nbsp;</p>
<p>J&aacute; que tu vai l&aacute; pra feira, meu amigo</p>
<p>Traz essas coisinha para mim</p>
',
                'creditos' => '
<p>Viol&atilde;o: Vital Farias</p>
<p>Viola: Joca</p>
',
                'faixa_mp3' => '05_o_pedido.mp3',
                'faixa_ogg' => '05_o_pedido.ogg',
                'disco_id' => '3'));

        Musicas::create(
            array(
                'faixa' => 'Lua Viva',
                'compositor' => '(Tito Livio / Lula Cortes)',
                'letra' => '<p>A lua cheia &eacute; como a chave clara</p>
<p>Que abre a porta do c&eacute;u do sert&atilde;o</p>
<p>Que abre a mente com a chave nova</p>
<p>Pro cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>A lua viva com a mente cheia</p>
<p>Cheia da vida pra nova vis&atilde;o</p>
<p>Que abre a porta com a mente nova</p>
<p>Pro cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>E novamente a lua cheia brilha</p>
<p>E faz um rastro claro pelo c&eacute;u</p>
<p>Como se a chave houvesse aberto a porta</p>
<p>Do universo sobre o meu chap&eacute;u</p>
<p>&nbsp;</p>
<p>A lua cheia l&aacute; da Para&iacute;ba</p>
<p>&Eacute; como a chave cheia de ambi&ccedil;&atilde;o</p>
<p>Que abre a porta para o universo</p>
<p>Do cora&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano el&eacute;trico: Miguel Cidras</p>
<p>Guitarra e viola: Joca</p>
<p>Viol&atilde;o: Robson Jorge</p>
<p>Baixo: Guil</p>
<p>Sanfona: Z&eacute; Am&eacute;rico</p>
<p>Bateria: Elber Bedaque</p>
<p>Percuss&atilde;o: Marcos Amma</p>
',
                'faixa_mp3' => '06_lua_viva.mp3',
                'faixa_ogg' => '06_lua_viva.ogg',
                'disco_id' => '3'));

        Musicas::create(
            array(
                'faixa' => 'Aquarela Nordestina',
                'compositor' => '(Rosil Cavalcanti)',
                'letra' => '<p>No Nordeste imenso</p>
<p>Quando o sol calcina a terra</p>
<p>N&atilde;o se v&ecirc; uma folha verde na baixa ou na serra</p>
<p>Juriti n&atilde;o suspira, inhambu seu canto encerra</p>
<p>N&atilde;o se v&ecirc; uma folha verde na baixa ou na serra</p>
<p>&nbsp;</p>
<p>Acau&atilde; bem no alto do pau-ferro canta forte</p>
<p>Como que reclamando nossa falta de sorte</p>
<p>Asa branca, sedenta, vai chegando na bebida</p>
<p>N&atilde;o tem &aacute;gua a lagoa</p>
<p>J&aacute; est&aacute; ressequida</p>
<p>&nbsp;</p>
<p>E o sol vai queimando o brejo, o sert&atilde;o</p>
<p>Cariri e agreste</p>
<p>Ai, ai, meu Deus</p>
<p>Tenha pena do Nordeste</p>
<p>&nbsp;</p>
<p>Lai&aacute; lai&aacute; lai&aacute;, lai&aacute; lai&aacute; lai&aacute;</p>
<p>Lai&aacute; lai&aacute; lai&aacute;, lai&aacute; lai&aacute;</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e sanfona: Z&eacute; Am&eacute;rico</p>
<p>Viola: Joca</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Guil</p>
<p>Percuss&atilde;o: Marcos Amma</p>
<p>Flautas: Eliane, In&ecirc;s, Franklin e Z&eacute; Carlos</p>
<p>Coro: Ed Wilson, Carlos Pedro, Tadeu Mathias, Rachel, Nilza, Elson e Loalva</p>
',
                'faixa_mp3' => '07_aquarela_nordestina.mp3',
                'faixa_ogg' => '07_aquarela_nordestina.ogg',
                'disco_id' => '3'));

        Musicas::create(
            array(
                'faixa' => 'Vem (Ser Navegador)',
                'compositor' => '(Marco Polo)',
                'letra' => '<p>Vem</p>
<p>Vou levar-te na beira do cais</p>
<p>Onde nascem as flores do adeus</p>
<p>E o deserto se encontra com o mar</p>
<p>&nbsp;</p>
<p>Vem</p>
<p>No meu barco de velas azuis</p>
<p>Por caminhos do vento e ver&atilde;o</p>
<p>At&eacute; onde a certeza levar</p>
<p>&nbsp;</p>
<p>V&ecirc;</p>
<p>Cinco estrelas de sal no chap&eacute;u</p>
<p>Sou vaqueiro das ondas sem fim</p>
<p>E o horizonte &eacute; meu &uacute;nico lar</p>
<p>&nbsp;</p>
<p>V&ecirc;</p>
<p>Sempre chego onde pretendo ir</p>
<p>Se j&aacute; sei navegar furac&otilde;es</p>
<p>Muito mais oceanos de paz</p>
<p>&nbsp;</p>
<p>Toda vida &eacute; vida e vale viver</p>
<p>Mesmo empurrando e trope&ccedil;ando e o que for</p>
<p>Eu contigo quero compreender</p>
<p>O universo submarino do amor</p>
<p>&nbsp;</p>
<p>Ra&ccedil;a &eacute; ra&ccedil;a e quem quer ser, vencer</p>
<p>Tem que estar pronto a todo instante</p>
<p>A todo instante ser navegador</p>
<p>Descobrir o rumo novo do amor</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano: Miguel Cidras</p>
<p>Baixo: Paulo Cesar</p>
<p>Bateria: Mam&atilde;o</p>
<p>Guitarra: Joca</p>
<p>Violinos: Peraschi, Walter Hack, Carlos Hack, Virg&iacute;lio Filho, Jorge Faini, Aizik Geller, Daltro e Pascoal</p>
<p>Violas: Penteado, Frederick Stephany, Jos&eacute; Dias de Lana e Nelson de Macedo</p>
<p>Cellos: Alceu e Jorge Ranesvsky</p>
',
                'faixa_mp3' => '08_vem_ser_navegador.mp3',
                'faixa_ogg' => '08_vem_ser_navegador.ogg',
                'disco_id' => '3'));

        Musicas::create(
            array(
                'faixa' => 'Caju&iacute;na',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>Existirmos a que ser&aacute; que se destina?</p>
<p>Quando tu me deste a rosa pequenina</p>
<p>Vi que &eacute;s um homem lindo e que se acaso a sina</p>
<p>Do menino infeliz n&atilde;o se nos ilumina</p>
<p>T&atilde;o pouco turva-se a l&aacute;grima nordestina</p>
<p>Apenas a mat&eacute;ria vida era t&atilde;o fina</p>
<p>E &eacute;ramos olharmo-nos intacta retina</p>
<p>A caju&iacute;na cristalina em Teresina</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano: Miguel Cidras</p>
<p>Baixo: Guil</p>
<p>Viola: Joca</p>
<p>Sanfona: Z&eacute; Am&eacute;rico</p>
<p>Percuss&atilde;o: Marcos Amma</p>
<p>Violinos: Peraschi, Walter Hack, Carlos Hack, Virg&iacute;lio Filho, Jorge Faini, Aizik Geller, Daltro e Pascoal</p>
<p>Violas: Penteado, Frederick Stephany, Jos&eacute; Dias de Lana e Nelson de Macedo</p>
<p>Cellos: Alceu e Jorge Ranesvsky</p>
',
                'faixa_mp3' => '09_cajuina.mp3',
                'faixa_ogg' => '09_cajuina.ogg',
                'disco_id' => '3'));

        Musicas::create(
            array(
                'faixa' => 'Eu Queria',
                'compositor' => '(Roberto Martins / M&aacute;rio Rossi)',
                'letra' => '<p>Queria ser asfalto pra voc&ecirc; pisar em mim</p>
<p>Queria ser uma rosa por dentro do teu jardim</p>
<p>Queria minha vida dentro do teu cora&ccedil;&atilde;o</p>
<p>Queria beber &aacute;gua na palma da tua m&atilde;o</p>
<p>&nbsp;</p>
<p>Queria ser o dono do teu corpo sedutor</p>
<p>Queria inda gozar teus beijo embriagador</p>
<p>Queria uma casinha entre os verdes pinheirais</p>
<p>Pra n&oacute;s morarmos juntos</p>
<p>S&oacute; n&oacute;s dois</p>
<p>E ningu&eacute;m mais</p>
',
                'creditos' => '
<p>Viol&atilde;o: Elba Ramalho</p>
<p>Violas: Joca</p>
',
                'faixa_mp3' => '10_eu_queria.mp3',
                'faixa_ogg' => '10_eu_queria.ogg',
                'disco_id' => '3'));

        Musicas::create(
            array(
                'faixa' => 'Essa Alegria (Caboclinhos)',
                'compositor' => '(Lula Queiroga)',
                'letra' => '<p>Essa alegria &eacute; a guia</p>
<p>Estrela guia do carnaval</p>
<p>A nossa tribo abre o dia &ecirc;&ecirc;&ecirc;...</p>
<p>&nbsp;</p>
<p>Essa alegria &eacute; a barca</p>
<p>Navega a barca no carnaval</p>
<p>A nossa tribo traz o vento &ecirc;&ecirc;&ecirc;...</p>
<p>&nbsp;</p>
<p>Essa alegria &eacute; o pend&atilde;o</p>
<p>Nossa esperan&ccedil;a no carnaval</p>
<p>Um estandarte na floresta &ecirc;&ecirc;&ecirc;...</p>
<p>&nbsp;</p>
<p>Balan&ccedil;a o marac&aacute;</p>
<p>Dan&ccedil;a da reden&ccedil;&atilde;o</p>
<p>Raios da vida raiar</p>
<p>Fonte a escorrer</p>
<p>Rio de transbordar</p>
<p>Jorro de alma jorrar</p>
<p>&nbsp;</p>
<p>Esse ritmo dentro da noite</p>
<p>Quando a m&uacute;sica e o pensamento</p>
<p>Forem um s&oacute;</p>
<p>Forem o sol</p>
<p>&nbsp;</p>
<p>Arco, penacho, flecha e tambor</p>
<p>Cabocolinhos no carnaval</p>
<p>Traz de Olinda a surpresa &ecirc;&ecirc;&ecirc;...</p>
<p>&nbsp;</p>
<p>Todas as tribos do pa&iacute;s</p>
<p>Vivas num dia de carnaval</p>
<p>Como se a terra ainda fosse nossa</p>
',
                'creditos' => '
<p>Arranjo e reg&ecirc;ncia: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Antonio Sant&rsquo;Anna</p>
<p>Viola: Zeppa Souza</p>
<p>Ovation: Geraldo Azevedo</p>
<p>Percuss&atilde;o: Cidinho e Elber Bedaque</p>
<p>Metais: Hamilton, Barreto, Maciel, Berto</p>
<p>Coro: M&aacute;rcio Lott, Jaime Alem, Zeppa Souza, Nair C&acirc;ndia, Regininha, Andrea</p>
<p>Palmas: Carl&atilde;o, Guil, Elba, Z&eacute; Am&eacute;rico Bastos, M&aacute;rcio, Jaime Alem, Zeppa Souza, Nair C&acirc;ndia, Regininha, Andrea</p>
',
                'faixa_mp3' => '01_essa_alegria_caboclinhos.mp3',
                'faixa_ogg' => '01_essa_alegria_caboclinhos.ogg',
                'disco_id' => '4'));

        Musicas::create(
            array(
                'faixa' => 'Domin&oacute;',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>Pegue o cigano e bote perto da mentira</p>
<p>E a mentira bote perto do cigano</p>
<p>O alfaiate bote pertinho do pano</p>
<p>E o pano na pele do caipira</p>
<p>&nbsp;</p>
<p>O top&aacute;zio encrustado na safira</p>
<p>E na pira do fogo dos diamantes</p>
<p>O desejo bote perto dos amantes</p>
<p>E os instantes no voo de quem n&atilde;o deu</p>
<p>&nbsp;</p>
<p>Pegue o destino e bote perto da viagem</p>
<p>E a viagem bote perto do destino</p>
<p>O sacrist&atilde;o bote pertinho do sino</p>
<p>E no s&iacute;mbolo a ponte da miragem</p>
<p>&nbsp;</p>
<p>O valente bote perto da coragem</p>
<p>E na margem o lado que n&atilde;o presta</p>
<p>O bo&ecirc;mio bote perto da seresta</p>
<p>E na fresta o olho que n&atilde;o v&ecirc;</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia, piano Yamaha e acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Antonio Sant&rsquo;Anna</p>
<p>Viola: Zeppa Souza</p>
<p>Ovation: Z&eacute; Ramalho</p>
<p>Percuss&atilde;o: Cidinho e Elber Bedaque</p>
<p>Vocal: Marcio Lott, Jaime Alem, Zeppa Souza, Nair C&acirc;ndia, Regininha, Andrea</p>
',
                'faixa_mp3' => '02_domino.mp3',
                'faixa_ogg' => '02_domino.ogg',
                'disco_id' => '4'));

        Musicas::create(
            array(
                'faixa' => 'No Som da Sanfona',
                'compositor' => '(Kak&aacute; do Asfalto / Jackson do Pandeiro)',
                'letra' => '<p>Ouvi o toque da sanfona me chamar</p>
<p>Ouvi o toque da sanfona me chamar</p>
<p>Ouvi o toque da sanfona me chamar</p>
<p>Ouvi o toque da sanfona me chamar</p>
<p>&nbsp;</p>
<p>Um sanfoneiro bem maneiro</p>
<p>Puxa o fole</p>
<p>Folia a noite inteira</p>
<p>At&eacute; o dia clarear</p>
<p>O cabra vem se aconchegando</p>
<p>Se relando</p>
<p>Quando o pagode esquenta</p>
<p>Ningu&eacute;m quer sair de l&aacute;</p>
<p>&nbsp;</p>
<p>&Ecirc;ta pagode que t&aacute; bom</p>
<p>Que t&aacute; danado</p>
<p>Morena aqui do lado</p>
<p>Faz o boneco chorar</p>
<p>Chora, n&atilde;o chora</p>
<p>Morena disse que chora</p>
<p>No som de uma viola</p>
<p>Faz o corpo balan&ccedil;ar</p>
<p>&nbsp;</p>
<p>Quem &eacute; sambeiro, batuqueiro, forrozeiro</p>
<p>Tem privil&eacute;gio agora</p>
<p>So&ccedil;aite particular</p>
<p>Agora toda a classe alta quer xaxar</p>
<p>Forr&oacute; de brasileiro chegou em todo lugar</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Antonio Sant&rsquo;Anna</p>
<p>Guitarra: Zeppa Souza</p>
<p>Zabumba: C&iacute;cero</p>
<p>Pandeiro: Jackson do Pandeiro</p>
<p>Percuss&atilde;o: Cidinho</p>
<p>Palmas: Guil, Carl&atilde;o, Cidinho, M&aacute;rio Almeida, Pimpolho, Z&eacute; Am&eacute;rico Bastos, M&aacute;rcio, Jaime Alem, Zeppa Souza, Nair C&acirc;ndia, Regininha, Andrea</p>
<p>Coro: M&aacute;rcio Lott, Jaime Alem, Zeppa Souza, Nair C&acirc;ndia, Regininha, Andrea</p>
',
                'faixa_mp3' => '03_no_som_da_sanfona.mp3',
                'faixa_ogg' => '03_no_som_da_sanfona.ogg',
                'disco_id' => '4'));

        Musicas::create(
            array(
                'faixa' => ' A Casca do Ovo',
                'compositor' => '(Gonzaguinha)',
                'letra' => '<p>N&atilde;o tenha receio</p>
<p>De falar de amor</p>
<p>N&atilde;o tenha receio</p>
<p>De falar de amor</p>
<p>&nbsp;</p>
<p>Por mais velho que achem</p>
<p>Para sempre ser&aacute;</p>
<p>Por mais velho que achem</p>
<p>Para sempre ser&aacute;</p>
<p>&nbsp;</p>
<p>O eterno novo</p>
<p>Como a casca do ovo</p>
<p>Que ningu&eacute;m nunca far&aacute;</p>
<p>&nbsp;</p>
<p>A galinha bota</p>
<p>E ela mesma se espanta</p>
<p>De poder botar</p>
<p>&nbsp;</p>
<p>Eu por mim quero mais, sempre mais</p>
<p>Pois de amor n&atilde;o se enjoa</p>
<p>Quero mais dessa festa</p>
<p>Que p&otilde;e fogo no meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>A pitada de sal</p>
<p>Traz saliva &agrave; boca</p>
<p>De amar s&oacute; se cansa, meu bem</p>
<p>Quem est&aacute; morta ou &eacute; louca</p>
<p>De amar s&oacute; se cansa, meu bem</p>
<p>Quem est&aacute; morta ou &eacute; louca</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Antonio Sant&rsquo;Anna</p>
<p>Guitarra: Zeppa Souza</p>
<p>Percuss&atilde;o: Cidinho</p>
<p>Metais: M&aacute;rcio Montarroyos, Leo Gandelman, Serginho, Bidinho, Z&eacute; Carlos</p>
',
                'faixa_mp3' => '04_a_casca_do_ovo.mp3',
                'faixa_ogg' => '04_a_casca_do_ovo.ogg',
                'disco_id' => '4'));

        Musicas::create(
            array(
                'faixa' => 'Chego J&aacute;',
                'compositor' => '(Alceu Valen&ccedil;a)',
                'letra' => '<p>Eu j&aacute; chamei voc&ecirc;</p>
<p>Voc&ecirc; n&atilde;o quis brincar</p>
<p>Pode bater o p&eacute;</p>
<p>Pode ficar</p>
<p>&nbsp;</p>
<p>O Elefante j&aacute; vem</p>
<p>Descendo o Amparo, meu bem</p>
<p>E aquela Cobra que sobe a ladeira</p>
<p>Com gosto de g&aacute;s</p>
<p>O Elefante j&aacute; vem</p>
<p>Eu Acho &eacute; Pouco, meu bem</p>
<p>Segura a Coisa com muito cuidado</p>
<p>Que eu chego j&aacute;</p>
<p>&nbsp;</p>
<p>Segura a Coisa</p>
<p>Que o Chap&eacute;u de Bode passou desgarrado</p>
<p>Atr&aacute;s do feiti&ccedil;o cheirando a pecado</p>
<p>&Eacute; com esse menino bonito que eu vou</p>
<p>&nbsp;</p>
<p>O Elefante j&aacute; vem</p>
<p>Eu Acho &eacute; Pouco, meu bem</p>
<p>Segura a Coisa com muito cuidado</p>
<p>Que eu chego j&aacute;, j&aacute;</p>
<p>Segura a Coisa com muito cuidado</p>
<p>Pra n&atilde;o se queimar, mar</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Antonio Sant&rsquo;Anna</p>
<p>Guitarra: Zeppa Souza</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Percuss&atilde;o: Cidinho</p>
',
                'faixa_mp3' => '05_chego_ja.mp3',
                'faixa_ogg' => '05_chego_ja.ogg',
                'disco_id' => '4'));

        Musicas::create(
            array(
                'faixa' => 'Amor com Caf&eacute;',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Se voc&ecirc; quiser o meu amor</p>
<p>Tem que ser assim</p>
<p>Agarradinho, escondidinho, bem bonitinho</p>
<p>Somente pra mim</p>
<p>&nbsp;</p>
<p>E de manh&atilde; cedo</p>
<p>Fazer o caf&eacute;</p>
<p>Trazer na cama</p>
<p>Depois do caf&eacute;</p>
<p>A gente se ama</p>
<p>A gente se gama</p>
<p>Depois do caf&eacute;</p>
<p>&nbsp;</p>
<p>Ficar o dia inteiro</p>
<p>Nesse d&aacute;-me, d&aacute;-me</p>
<p>Nesse toma, toma</p>
<p>Nesse pega, pega</p>
<p>Nesse coma, coma</p>
<p>Nessa brincadeira</p>
<p>Sem ningu&eacute;m dar f&eacute;</p>
<p>&nbsp;</p>
<p>Que o dia vai acabar</p>
<p>E a noite j&aacute; vem</p>
<p>O nosso amor pegando fogo</p>
<p>Vamos se queimar</p>
<p>Levar a vida nesse jogo</p>
<p>Pra se ganhar</p>
<p>E muito mais se querer bem</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Antonio Sant&rsquo;Anna</p>
<p>Guitarra: Zeppa Souza</p>
<p>Zabumba: C&iacute;cero</p>
<p>Pandeiro: Jackson do Pandeiro</p>
<p>Percuss&atilde;o: Cidinho</p>
<p>Coro: M&aacute;rcio Lott, Jaime Alem, Zeppa Souza, Nair C&acirc;ndia, Regininha, Andrea</p>
<p>Metais: M&aacute;rcio Montarroyos, Leo Gandelman, Serginho, Bidinho, Z&eacute; Carlos</p>
',
                'faixa_mp3' => '06_amor_com_cafe.mp3',
                'faixa_ogg' => '06_amor_com_cafe.ogg',
                'disco_id' => '4'));

        Musicas::create(
            array(
                'faixa' => 'Olhos Acesos',
                'compositor' => '(Z&eacute; Am&eacute;rico Bastos / Salgado Maranh&atilde;o)',
                'letra' => '<p>Eu canto como quem sofre</p>
<p>A seca da planta&ccedil;&atilde;o</p>
<p>Sou uma arara ofendida</p>
<p>Fugindo da solid&atilde;o</p>
<p>&nbsp;</p>
<p>Chora, sanfona agrestina</p>
<p>Fundo no meu cora&ccedil;&atilde;o</p>
<p>Eu sou que nem andorinha</p>
<p>Quando come&ccedil;a o ver&atilde;o</p>
<p>Eu sou que nem andorinha</p>
<p>Quando come&ccedil;a o ver&atilde;o</p>
<p>&nbsp;</p>
<p>Lugares, gente, saudade</p>
<p>Selva, cidade, sert&atilde;o</p>
<p>H&aacute; tanto amor que acalanto</p>
<p>Dentro de mim um vulc&atilde;o</p>
<p>&nbsp;</p>
<p>Berram guitarras aflitas</p>
<p>Soltas na minha can&ccedil;&atilde;o</p>
<p>S&atilde;o tantos olhos acesos</p>
<p>S&atilde;o tantos passos no ch&atilde;o</p>
<p>S&atilde;o tantos olhos acesos</p>
<p>S&atilde;o tantos passos no ch&atilde;o</p>
<p>&nbsp;</p>
<p>Eu canto como quem pinta</p>
<p>O verde na planta&ccedil;&atilde;o</p>
<p>Eu sou que nem os riachos</p>
<p>Quando termina o ver&atilde;o</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Antonio Sant&rsquo;Anna</p>
<p>Guitarra: Zeppa Souza</p>
<p>Percuss&atilde;o: Cidinho e Elber Bedaque</p>
<p>Flautas em D&oacute; e Sol: Celso e Daniel</p>
<p>Cordas: Paschoal Perrota, Giancarlo Pareschi, Alfredo Vidal, Carlos Eduardo Hack, Jos&eacute; Alves da Silva, Michel Bessler, Walter Hack, Aizik M. Geller, Arlindo Figueiredo Penteado, Frederick Stephany, Hindemburgo Vitoriano Borges Pereira, Nelson Baptista de Macedo, M&aacute;rcio Eymard Mallard, Jorge Kundert Ranevsky</p>
',
                'faixa_mp3' => '07_olhos_acesos.mp3',
                'faixa_ogg' => '07_olhos_acesos.ogg',
                'disco_id' => '4'));

        Musicas::create(
            array(
                'faixa' => 'Sete Cantigas para Voar',
                'compositor' => '(Vital Farias)',
                'letra' => '<p>Cantiga de campo</p>
<p>De concentra&ccedil;&atilde;o</p>
<p>A gente bem sente</p>
<p>Com precis&atilde;o</p>
<p>&nbsp;</p>
<p>Mas recordo a tua imagem</p>
<p>Naquela viagem</p>
<p>Que fiz pro sert&atilde;o</p>
<p>Eu que nasci na floresta</p>
<p>Canto e fa&ccedil;o festa no seu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Voa, voa azul&atilde;o</p>
<p>Voa, voa azul&atilde;o</p>
<p>&nbsp;</p>
<p>Cantiga de ro&ccedil;a</p>
<p>De um cego apaixonado</p>
<p>Cantiga de mo&ccedil;a</p>
<p>L&aacute; do cercado</p>
<p>Que canta a fauna e a flora</p>
<p>Ningu&eacute;m ignora</p>
<p>Se ela quer brotar</p>
<p>Bota uma flor no cabelo</p>
<p>Com alegria e zelo para n&atilde;o secar</p>
<p>&nbsp;</p>
<p>Voa, voa no ar</p>
<p>Voa, voa no ar</p>
<p>&nbsp;</p>
<p>Cantiga de ninar</p>
<p>A crian&ccedil;a na rede</p>
<p>Mentira de &aacute;gua</p>
<p>&Eacute; matar a sede</p>
<p>Diz pra m&atilde;e que fui pro a&ccedil;ude</p>
<p>Fui pescar um peixe</p>
<p>Isso num fui, n&atilde;o</p>
<p>Tava era cum namorado</p>
<p>Pra alegria e festa do meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Voa, voa azul&atilde;o</p>
<p>Voa, voa azul&atilde;o</p>
<p>&nbsp;</p>
<p>Cantiga de &iacute;ndio</p>
<p>Que perdeu sua taba</p>
<p>No peito esse inc&ecirc;ndio</p>
<p>Seu n&atilde;o se apaga</p>
<p>Deixe o &iacute;ndio no seu canto</p>
<p>Que eu canto um acalanto</p>
<p>Fa&ccedil;o outra can&ccedil;&atilde;o</p>
<p>Deixe o peixe, deixe o rio</p>
<p>Que o rio &eacute; um fio de inspira&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Voa, voa azul&atilde;o</p>
<p>Voa, voa azul&atilde;o</p>
<p>Voa, voa...</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e viol&otilde;es: Vital Farias</p>
<p>Vocal: Elba Ramalho</p>
',
                'faixa_mp3' => '08_sete_cantigas_para_voar.mp3',
                'faixa_ogg' => '08_sete_cantigas_para_voar.ogg',
                'disco_id' => '4'));

        Musicas::create(
            array(
                'faixa' => 'Marcha Regresso',
                'compositor' => '(Paulo Sauer / Edison Luiz / Moraes Moreira)',
                'letra' => '<p>Marcha regresso</p>
<p>De novo vamos ocupar</p>
<p>No seio do povo o nosso lugar</p>
<p>A Deus confesso e agrade&ccedil;o pela prote&ccedil;&atilde;o</p>
<p>Feliz estou de volta pro seu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Marcha regresso</p>
<p>Agora nem pra dizer</p>
<p>No meio da rua procure aprender</p>
<p>Pra n&atilde;o perder o que com tanta garra conquistou</p>
<p>Seja voc&ecirc; e saiba se dar o valor</p>
<p>&nbsp;</p>
<p>Marcha regresso</p>
<p>Vai ser um sucesso ideal</p>
<p>Real fantasia de um carnaval</p>
<p>Viver o sonho de alcan&ccedil;ar um dia</p>
<p>Toda liberdade que se pretendia reencontrar</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Antonio Sant&rsquo;Anna</p>
<p>Guitarra: Zeppa Souza</p>
<p>Percuss&atilde;o: Cidinho e Elber Bedaque</p>
<p>Metais: M&aacute;rcio Montarroyos, Leo Gandelman, Serginho, Bidinho, Z&eacute; Carlos</p>
',
                'faixa_mp3' => '09_marcha_regresso.mp3',
                'faixa_ogg' => '09_marcha_regresso.ogg',
                'disco_id' => '4'));

        Musicas::create(
            array(
                'faixa' => 'Menina do Lido',
                'compositor' => '(Geraldo Azevedo / Carlos Fernando) Participa&ccedil;&atilde;o Especial: <strong>Geraldo Azevedo</strong>
',
                'letra' => '<p>Menina eu te conhe&ccedil;o n&atilde;o sei de onde</p>
<p>Menina eu te conhe&ccedil;o n&atilde;o sei de onde</p>
<p>Mas por incr&iacute;vel que pare&ccedil;a</p>
<p>Sei o seu nome, menina (menino)</p>
<p>&nbsp;</p>
<p>N&atilde;o sei se foi no bonde de Santa Teresa</p>
<p>N&atilde;o sei se foi no bonde de Santa Teresa</p>
<p>Como podia ser</p>
<p>Numa butique em Copacabana</p>
<p>&nbsp;</p>
<p>Ou num ch&aacute; de caridade, menina</p>
<p>Promovido a quem de direito</p>
<p>Ou num ch&aacute; de caridade, menina</p>
<p>Promovido a quem de direito</p>
<p>&nbsp;</p>
<p>O seu vestido era azul-anil</p>
<p>E era domingo, viu</p>
<p>Voc&ecirc; nem ligou pra mim</p>
<p>&Eacute;, eu sou muito vivo</p>
<p>Voc&ecirc; nem ligou pra mim</p>
<p>&Eacute;, eu sou muito viva</p>
<p>&nbsp;</p>
<p>Te lembra, menina</p>
<p>Do passeio, do sorvete na Pra&ccedil;a do Lido?</p>
<p>Tu n&atilde;o te lembras</p>
<p>Do passeio, do sorvete na Pra&ccedil;a do Lido</p>
<p>&nbsp;</p>
<p>Sou cantador, eu sou cantor</p>
<p>Sou cantador, tamb&eacute;m sou cantor</p>
<p>Sou cantador, eu sou cantor</p>
<p>Sou cantador, tamb&eacute;m sou cantor</p>
<p>Sou cantador eu canto samba</p>
<p>Frevo, rumba, coco, merengue</p>
<p>E maracatu, xacax&aacute;!</p>
',
                'creditos' => '
<p>Arranjo e reg&ecirc;ncia: Z&eacute; Am&eacute;rico Bastos</p>
<p>Arranjo de base e Ovation: Geraldo Azevedo</p>
<p>Percuss&atilde;o: Cidinho e Elber Bedaque</p>
<p>Saxes: Maca&eacute;, Bij&uacute;, Netinho, Aurino</p>
',
                'faixa_mp3' => '10_menina_do_lido_com_geraldo_azevedo.mp3',
                'faixa_ogg' => '10_menina_do_lido_com_geraldo_azevedo.ogg',
                'disco_id' => '4'));

        Musicas::create(
            array(
                'faixa' => 'Bate Cora&ccedil;&atilde;o',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Bate, bate, bate, cora&ccedil;&atilde;o</p>
<p>Dentro desse velho peito</p>
<p>Voc&ecirc; j&aacute; est&aacute; acostumado</p>
<p>A ser maltratado, a n&atilde;o ter direitos</p>
<p>&nbsp;</p>
<p>Bate, bate, bate, cora&ccedil;&atilde;o</p>
<p>N&atilde;o ligue, deixe quem quiser falar</p>
<p>Porque o que se leva dessa vida, cora&ccedil;&atilde;o</p>
<p>&Eacute; o amor que a gente tem pra dar</p>
<p>Porque o que se leva dessa vida, cora&ccedil;&atilde;o</p>
<p>&Eacute; o amor que a gente tem pra dar</p>
<p>&nbsp;</p>
<p>Oi, tum, tum, bate, cora&ccedil;&atilde;o</p>
<p>Oi, tum, cora&ccedil;&atilde;o pode bater</p>
<p>Oi, tum, tum, tum, bate, cora&ccedil;&atilde;o</p>
<p>Que eu morro de amor com muito prazer</p>
<p>&nbsp;</p>
<p>As &aacute;guas s&oacute; des&aacute;guam para o mar</p>
<p>Meus olhos vivem cheios d&#39;&aacute;gua</p>
<p>Chorando, molhando meu rosto</p>
<p>De tanto desgosto, me causando m&aacute;goas</p>
<p>&nbsp;</p>
<p>Mas meu cora&ccedil;&atilde;o s&oacute; tem amor</p>
<p>Amor deveras mesmo, pra valer, &ecirc;</p>
<p>Por isso a gente pena, sofre e chora, cora&ccedil;&atilde;o</p>
<p>E morre todo dia sem saber</p>
<p>Por isso a gente pena, sofre e chora, cora&ccedil;&atilde;o</p>
<p>E morre todo dia sem saber</p>


',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Guil</p>
<p>Guitarra: Zeppa Souza</p>
<p>Percuss&atilde;o: Cidinho e Elber Bedaque</p>
<p>Coro: M&aacute;rcio Lott, Jaime Alem, Zeppa Souza, Nair C&acirc;ndia, Regininha, Andrea</p>
',
                'faixa_mp3' => '11_bate_coracao.mp3',
                'faixa_ogg' => '11_bate_coracao.ogg',
                'disco_id' => '4'));

        Musicas::create(
            array(
                'faixa' => 'Banho de Cheiro',
                'compositor' => '(Carlos Fernando)',
                'letra' => '<p><em>- Alceu veio! Venha c&aacute;, meu irm&atilde;o!</em></p>
<p><em>- T&ocirc; tomando uma cervejinha aqui...</em></p>
<p><em>- Diz, e como &eacute; que se faz com o frevo?</em></p>
<p><em>- Eu sei l&aacute;, t&ocirc; tomando cerveja! Mas olha, &eacute; um banho de cheiro por cima!</em></p>
<p><em>- &Eacute; mesmo?</em></p>
<p><em>- Mas &eacute; claro!</em></p>
<p><em>- Ent&atilde;o vamos l&aacute;!</em></p>
<p><em>- Brasil! Meu sistema solar!</em></p>
<p><em>-Eita!</em></p>
<p><em>- Simbora, rapaziada!</em></p>
<p>&nbsp;</p>
<p>Eu quero um banho de cheiro</p>
<p>Eu quero um banho de lua</p>
<p>Eu quero navegar</p>
<p>Eu quero uma menina</p>
<p>Que me ensine noite e dia</p>
<p>O valor do b&ecirc;-a-b&aacute;</p>
<p>&nbsp;</p>
<p>O b&ecirc;-a-b&aacute; dos teus olhos</p>
<p>Morena bonita da Boca do Rio</p>
<p>O b&ecirc;-a-b&aacute; das narinas do rei</p>
<p>O b&ecirc;-a-b&aacute; da Bahia</p>
<p>Sangrando alegria, magia, magia</p>
<p>Nos Filhos de Gandhi</p>
<p>&nbsp;</p>
<p>O b&ecirc;-a-b&aacute; dos baianos</p>
<p>Que charme bonito, foi o santo que deu</p>
<p>O b&ecirc;-a-b&aacute; do Senhor do Bonfim</p>
<p>O b&ecirc;-a-b&aacute; do sert&atilde;o</p>
<p>Sem chover, sem colher</p>
<p>Sem comer, sem lazer</p>
<p>O b&ecirc;-a-b&aacute; do Brasil</p>
',
                'creditos' => '
<p>Arranjo e teclados: Lincoln Olivetti</p>
<p>Bateria: Robertinho Silva</p>
<p>Baixo: Fernando</p>
<p>Guitarra: Robson Jorge</p>
<p>Acordeom: Severo</p>
<p>Pandeiro: Ariovaldo</p>
<p>Percuss&atilde;o: Paulo Humberto</p>
<p>Tri&acirc;ngulo: Cidinho</p>
<p>&nbsp;</p>
<p>Metais</p>
<p>Trumpete: Bidinho, M&aacute;rcio Montarroyos, Paulinho</p>
<p>Trombone: Serginho</p>
<p>Sax alto: Oberdan</p>
<p>Sax tenor: Z&eacute; Carlos</p>
<p>Sax bar&iacute;tono: Leo Gandelman</p>
<p>&nbsp;</p>
<p>Bandinha</p>
<p>Arranjo da bandinha: Agostinho Silva</p>
<p>Sax: Dulcilando Ferreira</p>
<p>Trombone: Edmundo Maciel</p>
<p>Sax alto: Jaime</p>
<p>Trombone baixo: Jesse</p>
<p>Flautim: Lenir</p>
<p>Trumpete: Nilton</p>
<p>Tuba: Zenio</p>
<p>Vocal: Flavio, Alceu Valen&ccedil;a, Claudia Gomes, Claudia Cesar, Braulio, Gilda Valentim, Carl&atilde;o, Patr&iacute;cia Gadelha, Owsaldo Lenine, Jaime Alem, Luna, Fl&aacute;vio de Souza Faria, Mariza, Marcio Magalh&atilde;es, Regininha</p>
',
                'faixa_mp3' => '01_banho_de_cheiro.mp3',
                'faixa_ogg' => '01_banho_de_cheiro.ogg',
                'disco_id' => '5'));

        Musicas::create(
            array(
                'faixa' => 'Toque De Fole',
                'compositor' => '(Bastinho Calixto / Ana Paula)',
                'letra' => '<p>Toque, sanfoneiro</p>
<p>Um forr&oacute; bem animado</p>
<p>Com cad&ecirc;ncia de xaxado</p>
<p>Da poeira levantar</p>
<p>&nbsp;</p>
<p>Toque, sanfoneiro</p>
<p>Que as mulheres t&atilde;o visando</p>
<p>O fole frouxo tocando</p>
<p>Castigando a nota l&aacute;</p>
<p>&nbsp;</p>
<p>Toque, sanfoneiro</p>
<p>Mostre que &eacute; v&eacute;io macho</p>
<p>Capriche nos oito baixos</p>
<p>At&eacute; o dia clarear</p>
<p>&nbsp;</p>
<p>Toque, sanfoneiro, toque</p>
<p>Porque a gente quer se esbaldar</p>
<p>Toque, sanfoneiro, toque</p>
<p>Porque a gente quer dan&ccedil;ar</p>
<p>&nbsp;</p>
<p>Dedo no couro &eacute; pandeirada</p>
<p>M&atilde;o no zabumba &eacute; zabumbada</p>
<p>E no tri&acirc;ngulo &eacute; trianglada, oi</p>
<p>Dedo no fole &eacute; forrozada</p>
',
                'creditos' => '
<p>Arranjo e piano Yamaha: Luiz Avelar</p>
<p>Bateria: Paulinho Braga</p>
<p>Baixo: Jamil</p>
<p>Guitarra: Ricardo Silveira</p>
<p>Percuss&atilde;o: Cidinho</p>
<p>Ritmo: Jorge, Elizeu</p>
<p>Pandeiro: Bira</p>
<p>Acordeom: Severo, Sivuca, Jos&eacute; Am&eacute;rico</p>
',
                'faixa_mp3' => '02_toque_de_fole.mp3',
                'faixa_ogg' => '02_toque_de_fole.ogg',
                'disco_id' => '5'));

        Musicas::create(
            array(
                'faixa' => 'Ave Cigana',
                'compositor' => '(Z&eacute; Am&eacute;rico Bastos / Salgado Maranh&atilde;o)',
                'letra' => '<p>Ave de sert&atilde;o, eu sei que sou</p>
<p>A terra me acompanha aonde vou</p>
<p>Dolente no meu jeito de cantar</p>
<p>E de viver seguindo</p>
<p>Ave de arriba&ccedil;&atilde;o</p>
<p>Asa de beija-flor</p>
<p>&nbsp;</p>
<p>Meu cora&ccedil;&atilde;o assim cigano</p>
<p>&Eacute; feito esse ver&atilde;o em teu olhar</p>
<p>Por onde passa o dia e passa a noite</p>
<p>Passa a can&ccedil;&atilde;o</p>
<p>Passa um solar</p>
<p>Tanto luar sem fim</p>
<p>&nbsp;</p>
<p>Pontas de recorda&ccedil;&otilde;es</p>
<p>J&aacute; cantei o sol no cimento da cidade</p>
<p>J&aacute; vivi t&atilde;o s&oacute; o lamento da saudade</p>
<p>&nbsp;</p>
<p>Mas minha can&ccedil;&atilde;o &eacute; retirante</p>
<p>&Eacute; feito vagalume pelo ar</p>
<p>Brilhando em toda parte, em cada olhar</p>
<p>Em qualquer sert&atilde;o, em qualquer cora&ccedil;&atilde;o</p>
<p>Brilhando em toda parte, em cada olhar</p>
<p>Em qualquer sert&atilde;o, em qualquer cora&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo e teclados: C&eacute;sar Camargo Mariano</p>
<p>Baixo: Jamil</p>
<p>Viol&atilde;o: H&eacute;lio Delmiro</p>
',
                'faixa_mp3' => '03_ave_cigana.mp3',
                'faixa_ogg' => '03_ave_cigana.ogg',
                'disco_id' => '5'));

        Musicas::create(
            array(
                'faixa' => 'Se eu Fosse o Teu Patr&atilde;o',
                'compositor' => '(Chico Buarque) Participa&ccedil;&atilde;o Especial: <strong>Chico Buarque</strong> (M&uacute;sica da peça &ldquo;&Oacute;pera do Malandro&rdquo;)
',
                'letra' => '<p>ELES</p>
<p>Eu te adivinhava</p>
<p>E te cobi&ccedil;ava</p>
<p>E te arrematava em leil&atilde;o</p>
<p>Te ferrava a boca, morena</p>
<p>Se eu fosse o teu patr&atilde;o</p>
<p>&nbsp;</p>
<p>Ai, eu te cuidava</p>
<p>Como uma escrava</p>
<p>Ai, eu n&atilde;o te dava perd&atilde;o</p>
<p>Te rasgava a roupa, morena</p>
<p>Se eu fosse o teu patr&atilde;o</p>
<p>&nbsp;</p>
<p>Eu te encarcerava</p>
<p>Te acorrentava</p>
<p>Te atava ao p&eacute; do fog&atilde;o</p>
<p>N&atilde;o te dava sopa, morena</p>
<p>Se eu fosse o teu patr&atilde;o</p>
<p>&nbsp;</p>
<p>Eu te encurralava</p>
<p>Te dominava</p>
<p>Te violava no ch&atilde;o</p>
<p>Te deixava rota, morena</p>
<p>Se eu fosse o teu patr&atilde;o</p>
<p>&nbsp;</p>
<p>Quando tu quebrava</p>
<p>E tu desmontava</p>
<p>E tu n&atilde;o prestava mais, n&atilde;o</p>
<p>Eu comprava outra, morena</p>
<p>Se eu fosse o teu patr&atilde;o</p>
<p>&nbsp;</p>
<p>ELAS</p>
<p>Pois eu te pagava direito</p>
<p>Soldo de cidad&atilde;o</p>
<p>Punha uma medalha em teu peito</p>
<p>Se eu fosse o teu patr&atilde;o</p>
<p>&nbsp;</p>
<p>O tempo passava sereno</p>
<p>E sem reclama&ccedil;&atilde;o</p>
<p>Tu nem reparava, moreno</p>
<p>Na tua maldi&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>E tu s&oacute; pegava veneno</p>
<p>Beijando a minha m&atilde;o</p>
<p>&Oacute;dio te brotava, moreno</p>
<p>&Oacute;dio do teu irm&atilde;o</p>
<p>&nbsp;</p>
<p>Teu filho pegava gangrena</p>
<p>Raiva, peste e sez&atilde;o</p>
<p>C&oacute;lera na tua morena</p>
<p>E tu n&atilde;o chiava, n&atilde;o</p>
<p>&nbsp;</p>
<p>Eu te dava caf&eacute; pequeno</p>
<p>E manteiga no p&atilde;o</p>
<p>Depois te afagava, moreno</p>
<p>Como se afaga um c&atilde;o</p>
<p>&nbsp;</p>
<p>Eu sempre te dava esperan&ccedil;a</p>
<p>Dum futuro b&atilde;o</p>
<p>Tu me idolatrava, crian&ccedil;a</p>
<p>Seu eu fosse o teu patr&atilde;o</p>
<p>&nbsp;</p>
<p>Mas se tu cuspisse no prato</p>
<p>Onde comeu feij&atilde;o</p>
<p>Eu fechava o teu sindicato</p>
<p>Se eu fosse o teu patr&atilde;o</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Francis Hime</p>
<p>Bateria: Serginho</p>
<p>Baixo: Jamil Joanes</p>
<p>Viol&atilde;o: H&eacute;lio Delmiro</p>
<p>Percuss&atilde;o: Jorge, Bira</p>
<p>Tumbas: Cidinho</p>
<p>Xequer&ecirc;: Frank Colon</p>
<p>Cordas: Perrota&rsquo;s Sound</p>
<p>Flauta: Celso</p>
<p>Trombone: Edmundo Maciel, S&eacute;rgio Fernandes</p>
<p>Trumpete: Bidinho, Donald Harris, Nilton Rodrigues, Paulo Roberto,</p>
<p>Trumpete solo: Hamilton</p>
',
                'faixa_mp3' => '04_se_eu_fosse_o_teu_patrao.mp3',
                'faixa_ogg' => '04_se_eu_fosse_o_teu_patrao.ogg',
                'disco_id' => '5'));

        Musicas::create(
            array(
                'faixa' => 'Choror&ocirc;',
                'compositor' => '(Gilberto Gil) Participa&ccedil;&atilde;o Especial: <strong>A Cor do Som</strong>',
                'letra' => '<p>Tenho pena de quem chora</p>
<p>De quem chora tenho d&oacute;</p>
<p>Quando o choro de quem chora</p>
<p>N&atilde;o &eacute; choro, &eacute; choror&ocirc;</p>
<p>&nbsp;</p>
<p>Quando uma pessoa chora seu choro baixinho</p>
<p>De l&aacute;grima a correr pelo cantinho do olhar</p>
<p>N&atilde;o se pode duvidar</p>
<p>A raz&atilde;o daquela dor</p>
<p>N&atilde;o se pode (deve) atrapalhar</p>
<p>Sentindo seja o que for</p>
<p>&nbsp;</p>
<p>Mas quando a pessoa chora o choro em desatino</p>
<p>Batendo pino como quem vai se arrebentar</p>
<p>A&iacute; penso que &eacute; melhor</p>
<p>Ajudar aquela dor</p>
<p>A encontrar o seu lugar</p>
<p>No meio do choror&ocirc;</p>
<p>&nbsp;</p>
<p>Choror&ocirc;, choror&ocirc;, choror&ocirc;</p>
<p>&Eacute; muita &aacute;gua, &eacute; magoa, &eacute; jeito bobo de chorar</p>
<p>Choror&ocirc;, choror&ocirc;, choror&ocirc;</p>
<p>&Eacute; m&aacute;goa, &eacute; muita &aacute;gua, a gente pode se afogar</p>
<p>&nbsp;</p>
<p>Choror&ocirc;, choror&ocirc;, choror&ocirc;</p>
<p>&Eacute; muita &aacute;gua, &eacute; magoa, &eacute; jeito bobo de chorar</p>
<p>Choror&ocirc;, choror&ocirc;, choror&ocirc;</p>
<p>&Eacute; m&aacute;goa, &eacute; muita &aacute;gua, a gente pode se acabar</p>
',
                'creditos' => '
<p>Arranjo e reg&ecirc;ncia: M&uacute; Carvalho, Dadi e Victor Biglione</p>
<p>Baixo: Dadi</p>
<p>Bateria: Gustavo Schroeter</p>
<p>Guitarra: Victor Biglione</p>
<p>Percuss&atilde;o: Ary Dias</p>
<p>Teclados: M&uacute; Carvalho</p>
',
                'faixa_mp3' => '05_chororo.mp3',
                'faixa_ogg' => '05_chororo.ogg',
                'disco_id' => '5'));

        Musicas::create(
            array(
                'faixa' => 'Roendo Unha',
                'compositor' => '(Luiz Ramalho / Luiz Gonzaga)',
                'letra' => '<p>Quando vin-vin cantou</p>
<p>Corri pra ver voc&ecirc;</p>
<p>Atr&aacute;s da serra, o sol tava pra se esconder</p>
<p>Quando voc&ecirc; partiu</p>
<p>Eu n&atilde;o esque&ccedil;o mais</p>
<p>Meu cora&ccedil;&atilde;o, amor, partiu atr&aacute;s</p>
<p>&nbsp;</p>
<p>Vivo com os olhos na ladeira</p>
<p>Quando vejo uma poeira</p>
<p>Penso logo que &eacute; voc&ecirc;</p>
<p>&nbsp;</p>
<p>Vivo de orelha levantada</p>
<p>Para o lado da estrada</p>
<p>Que atravessa o mu&ccedil;amb&ecirc;</p>
<p>&nbsp;</p>
<p>Olha que eu j&aacute; t&ocirc; roendo unha</p>
<p>A saudade &eacute; testemunha</p>
<p>Do que agora vou dizer</p>
<p>&nbsp;</p>
<p>Quando na janela eu me debru&ccedil;o</p>
<p>O meu cantar &eacute; um solu&ccedil;o</p>
<p>A galopar no massap&ecirc;</p>
',
                'creditos' => '
<p>Arranjo e sanfona: Severo</p>
<p>Baixo: Santana</p>
<p>Bateria: Elber Bedaque</p>
<p>Guitarra: Paulo Rafael</p>
<p>Percuss&atilde;o: Firmino</p>
<p>Sax soprano: Marcelo Neves</p>
',
                'faixa_mp3' => '06_roendo_unha.mp3',
                'faixa_ogg' => '06_roendo_unha.ogg',
                'disco_id' => '5'));

        Musicas::create(
            array(
                'faixa' => 'Batida de Trem',
                'compositor' => '(Vicente Barreto / Carlos Pitta)',
                'letra' => '<p>Cantando esse bai&atilde;o</p>
<p>Aperriado com a sorte</p>
<p>Felicidade n&atilde;o vem</p>
<p>&Eacute; uma cantiga de cego</p>
<p>&Eacute; uma sanfona tocando</p>
<p>Parece batida de trem</p>
<p>&nbsp;</p>
<p>Sou cantador da alegria</p>
<p>Me chamam de Andorinha</p>
<p>Nas festas l&aacute; do sert&atilde;o</p>
<p>Estrela da primavera</p>
<p>Pra onde for vou com ela</p>
<p>Pra esquecer da solid&atilde;o</p>
<p>&nbsp;</p>
<p>Se entrar nesse forr&oacute;</p>
<p>Vem, meu amor</p>
<p>Do seu nego tenha d&oacute;</p>
<p>Vem, meu amor</p>
<p>Ponha a m&atilde;o no cora&ccedil;&atilde;o</p>
<p>Vem, meu amor</p>
<p>Que &eacute; pra depois n&atilde;o ficar s&oacute;</p>
<p>Vem, meu amor</p>
',
                'creditos' => '
<p>Arranjo e teclados: Luiz Avelar</p>
<p>Bateria: Paulinho Braga</p>
<p>Baixo: Jamil</p>
<p>Guitarra: Ricardo Silveira</p>
<p>Tumbadora: Cidinho</p>
<p>Ritmo: Elizeu, Jorge</p>
<p>Pandeiro: Bira</p>
<p>Acorde&oacute;n: Severo</p>
<p>Trumpete: Donald Harris, Alceb&iacute;ades Spinola, Nilton Rodrigues, Paulo Roberto</p>
<p>Sax: Jos&eacute; Carlos</p>
<p>Trombone: S&eacute;rgio</p>
',
                'faixa_mp3' => '07_batida_de_trem.mp3',
                'faixa_ogg' => '07_batida_de_trem.ogg',
                'disco_id' => '5'));

        Musicas::create(
            array(
                'faixa' => 'Can&ccedil;&atilde;o da Despedida',
                'compositor' => '(Geraldo Azevedo / Geraldo Vandr&eacute;)',
                'letra' => '<p>J&aacute; vou embora</p>
<p>Mas sei que vou voltar</p>
<p>Amor, n&atilde;o chora</p>
<p>Se eu volto &eacute; pra ficar</p>
<p>&nbsp;</p>
<p>Amor, n&atilde;o chora</p>
<p>Que a hora &eacute; de deixar</p>
<p>O amor de agora</p>
<p>Pra sempre ele ficar</p>
<p>&nbsp;</p>
<p>Eu quis ficar aqui, mas n&atilde;o podia</p>
<p>O meu caminho a ti n&atilde;o conduzia</p>
<p>Um rei mal coroado n&atilde;o queria</p>
<p>O amor em seu reinado</p>
<p>Pois sabia, n&atilde;o ia ser amado</p>
<p>&nbsp;</p>
<p>Amor n&atilde;o chora, eu volto um dia</p>
<p>O rei velho e cansado j&aacute; morria</p>
<p>Perdido em seu reinado, sem Maria</p>
<p>Quando eu me despedia</p>
<p>E no meu canto lhe dizia</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e teclados: C&eacute;sar Camargo Mariano</p>
<p>Guitarra: Ricardo Silveira</p>
<p>Baixo: Pedr&atilde;o</p>
<p>Bateria: Picol&eacute;</p>
<p>Percuss&atilde;o: Frank Colon</p>
<p>Vocal: Pedr&atilde;o, Mariza, Sonia Burnier, Ilka Burnier, Gast&atilde;o Lamounier</p>
',
                'faixa_mp3' => '08_cancao_da_despedida.mp3',
                'faixa_ogg' => '08_cancao_da_despedida.ogg',
                'disco_id' => '5'));

        Musicas::create(
            array(
                'faixa' => 'A Volta dos Trov&otilde;es',
                'compositor' => '(Br&aacute;ulio Tavares / F&uacute;ba) Participa&ccedil;&atilde;o Especial: <strong>C&eacute;u da Boca e Roupa Nova</strong>',
                'letra' => '<p>Um tambor amedrontou a mata</p>
<p>Quando o dia clareou</p>
<p>Na clareira respondeu a flauta</p>
<p>Um aviso de terror</p>
<p>&nbsp;</p>
<p>Um cacique descobriu pegadas</p>
<p>De um estranho ca&ccedil;ador</p>
<p>Uma tribo foi exterminada</p>
<p>Onde o rio avermelhou</p>
<p>&nbsp;</p>
<p>Antes das chuvas</p>
<p>Quando o trov&atilde;o tombou das estrelas</p>
<p>E a selva escura</p>
<p>Viu brilhar nas m&atilde;os de um deus</p>
<p>Armas de estrondo e luz</p>
<p>Viu brilhar nas m&atilde;os de um deus</p>
<p>Armas de estrondo e luz</p>
<p>Como avisou a lenda</p>
<p>Armas de estrondo e luz</p>
<p>&nbsp;</p>
<p>On&ccedil;a negra caminhou nas cinzas</p>
<p>Da fogueira que passou</p>
<p>Gavi&atilde;o voando contra a brisa</p>
<p>Viu a mancha do trator</p>
<p>&nbsp;</p>
<p>Sobre o ch&atilde;o onde os paj&eacute;s dan&ccedil;avam</p>
<p>Uma vila se formou</p>
<p>Todo dia longe ressoava</p>
<p>O machado lenhador</p>
<p>&nbsp;</p>
<p>Dentro da selva</p>
<p>Pulsam os cora&ccedil;&otilde;es dos guerreiros</p>
<p>Esperando a noite</p>
<p>Em que os astros v&atilde;o trazer</p>
<p>A volta dos trov&otilde;es</p>
<p>Em que os astros v&atilde;o trazer</p>
<p>A volta dos trov&otilde;es</p>
<p>Como promete a lenda</p>
<p>A volta dos trov&otilde;es</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e teclados: C&eacute;sar Camargo Mariano</p>
<p>Atabaques: Frank Colon, Jorge, Franklin</p>
<p>Surdo: Bira</p>
<p>Vocal: C&eacute;u da Boca (Ver&ocirc;nica Sabino, Rosa Lobo, Dalmo Medeiros, Chico Adnet, Ronald Valle, Paula Morelembaun, Ma&uacute;cha Adnet, M&aacute;rcia Ruiz, Paulo Malaguti e Paulo Roberto Brand&atilde;o) e Roupa Nova (Cleberson Horst, Ricardo Feghali, Kiko, Nando da Silva, Serginho de Lima e Paulinho dos Santos)</p>
',
                'faixa_mp3' => '09_a_volta_dos_trovoes.mp3',
                'faixa_ogg' => '09_a_volta_dos_trovoes.ogg',
                'disco_id' => '5'));

        Musicas::create(
            array(
                'faixa' => 'Ai que Saudade d&rsquo;oc&ecirc;',
                'compositor' => '(Vital Farias) Direto',
                'letra' => '<p>N&atilde;o se admire se um dia</p>
<p>Um beija-flor invadir</p>
<p>A porta da tua casa</p>
<p>Te der um beijo e partir</p>
<p>Fui eu que mandei o beijo</p>
<p>Que &eacute; pra matar meu desejo</p>
<p>Faz tempo que eu n&atilde;o te vejo</p>
<p>Ai que saudade d&#39;oc&ecirc;</p>
<p>&nbsp;</p>
<p>Se um dia voc&ecirc; lembrar</p>
<p>Escreva uma carta pra mim</p>
<p>Bote logo no correio</p>
<p>Com frases dizendo assim:</p>
<p>&ldquo;Faz tempo que eu n&atilde;o te vejo</p>
<p>Quero matar meu desejo</p>
<p>Te mando um monte de beijo,</p>
<p>Ai, que saudade sem fim&rdquo;</p>
<p>&nbsp;</p>
<p>E se quiser recordar</p>
<p>Aquele nosso namoro</p>
<p>Quando eu ia viajar</p>
<p>Voc&ecirc; ca&iacute;a no choro</p>
<p>Eu chorando pela estrada</p>
<p>Mas o que eu posso fazer?</p>
<p>Trabalhar &eacute; minha sina</p>
<p>Eu gosto mesmo &eacute; d&#39;oc&ecirc;</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia, piano e piano Yamaha: Jos&eacute; Am&eacute;rico</p>
<p>Baixo: Antonio Santana</p>
<p>Bateria: Elber Bedaque</p>
<p>Ritmo: Geraldo Gomes, Jo&atilde;o Gomes, Jos&eacute; Silva Gomes</p>
<p>Ovation: Jos&eacute; Paulo</p>
<p>Percuss&atilde;o: Cidinho</p>
<p>Cordas: Perrota&rsquo;s Sound</p>
<p>Gaita: Maur&iacute;cio Einhorn</p>
',
                'faixa_mp3' => '10_ai_que_saudade_doce.mp3',
                'faixa_ogg' => '10_ai_que_saudade_doce.ogg',
                'disco_id' => '5'));

        Musicas::create(
            array(
                'faixa' => 'Vida e Carnaval',
                'compositor' => '(Moraes Moreira / Aroldo Macedo) Participa&ccedil;&atilde;o Especial: <strong>Robertinho de Recife </strong> (guitarra solo)',
                'letra' => '<p>Mandei fazer a minha fantasia</p>
<p>Alegoria de papel crepom</p>
<p>Que &eacute; pra voc&ecirc; durante esses tr&ecirc;s dias</p>
<p>Me curtir todinha</p>
<p>E ao romper do som</p>
<p>Aprender na escola que &eacute; a rua</p>
<p>Ver a verdade nua</p>
<p>E n&atilde;o sair do tom</p>
<p>&nbsp;</p>
<p>Pagar pra ver qual &eacute;</p>
<p>A barra de ser o que &eacute;</p>
<p>Ser pra voc&ecirc; igual</p>
<p>Na vida e no carnaval</p>
<p>&nbsp;</p>
<p>Meu nego, tirei a m&aacute;scara</p>
<p>Que at&eacute; agora escondeu</p>
<p>Meu sentimento a mais rara</p>
<p>Das joias que Deus me deu</p>
<p>&nbsp;</p>
<p>N&atilde;o nego, tirei a m&aacute;scara</p>
<p>Que at&eacute; agora escondeu</p>
<p>Meu sentimento a mais rara</p>
<p>Das joias que Deus me deu</p>
',
                'creditos' => '
<p>Arranjo e teclados: Lincoln Olivetti</p>
<p>Participa&ccedil;&atilde;o especial na guitarra solo: <strong>Robertinho de Recife</strong></p>
<p>Bateria: Mario</p>
<p>Baixo: Fernando</p>
<p>Guitarra base e teclados: Robson Jorge</p>
<p>Percuss&atilde;o: Ariovaldo, Altamiro, Edson, Paulo Humberto</p>
<p>Trumpete: Bidinho, Jos&eacute; Pinto, Paulo Roberto</p>
<p>Sax: Jos&eacute; Carlos</p>
<p>Sax bar&iacute;tono: Leo Gandelman</p>
<p>Sax alto: Oberdan</p>
<p>Trombone: Serginho</p>
',
                'faixa_mp3' => '11_vida_e_carnaval.mp3',
                'faixa_ogg' => '11_vida_e_carnaval.ogg',
                'disco_id' => '5'));

        Musicas::create(
            array(
                'faixa' => 'Cora&ccedil;&atilde;o Brasileiro',
                'compositor' => '(Celso Adolfo)',
                'letra' => '<p>No meu cora&ccedil;&atilde;o brasileiro</p>
<p>Plantei um terreiro, colhi um caminho</p>
<p>Armei a arapuca, fui pra tocaia</p>
<p>Fui guerrear</p>
',
                'creditos' => '
<p>Voz: Elba Ramalho</p>
',
                'faixa_mp3' => '12_coracao_brasileiro.mp3',
                'faixa_ogg' => '12_coracao_brasileiro.ogg',
                'disco_id' => '5'));

        Musicas::create(
            array(
                'faixa' => 'Azedo e Mascavo',
                'compositor' => '(Celso Adolfo)',
                'letra' => '<p>&Eacute; um beco estreito onde eu vou</p>
<p>Passar com a minha paix&atilde;o</p>
<p>Minha ferramenta &eacute; minha m&atilde;o</p>
<p>&nbsp;</p>
<p>Eu choro e canto, eu sou bravo</p>
<p>Eu sou azedo e mascavo</p>
<p>Eu t&ocirc; na cruz, eu sou cravo</p>
<p>&nbsp;</p>
<p>Eu lavo a terra do ch&atilde;o</p>
<p>Tem um ju&aacute; no meu ch&atilde;o</p>
<p>Eu como aqui desse ch&atilde;o</p>
<p>&nbsp;</p>
<p>Rimo no mesmo t&atilde;o</p>
<p>Alegria com viol&atilde;o</p>
<p>Esperan&ccedil;a, trabalho e m&atilde;o</p>
<p>&nbsp;</p>
<p>Voc&ecirc; j&aacute; viu meu retrato</p>
<p>Eu sou matuto e mato</p>
<p>Se gato voa, eu sou gato</p>
<p>&nbsp;</p>
<p>Diz que eu sou brasa e vulc&atilde;o</p>
<p>Diz que eu sou luz e vulc&atilde;o</p>
<p>Eu mal nem sei disso, n&atilde;o</p>
<p>&nbsp;</p>
<p>Eu fa&ccedil;o &eacute; fogo na vida</p>
<p>Eu ca&ccedil;o &eacute; o fogo da vida</p>
<p>Eu te&ccedil;o &eacute; o fogo e a vida</p>
<p>&nbsp;</p>
<p>Eu canto em primeira e ter&ccedil;a</p>
<p>Quarta, quinta, na sexta</p>
<p>Eu trago a minha can&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Rimo no mesmo t&atilde;o</p>
<p>Alegria com viol&atilde;o</p>
<p>Esperan&ccedil;a, trabalho e m&atilde;o</p>
<p>&nbsp;</p>
<p>Voc&ecirc; j&aacute; viu meu retrato</p>
<p>Eu sou matuto e mato</p>
<p>Se gato voa, eu sou gato</p>
',
                'creditos' => '
<p>Arranjo, Yamaha GS-2, DX-7, Prophet e Arp Quadra: C&eacute;sar Camargo Mariano</p>
<p>Viol&atilde;o: Celso Adolfo</p>
<p>Programa&ccedil;&atilde;o de sintetizador: Mazzola</p>
',
                'faixa_mp3' => '01_azedo_e_mascavo.mp3',
                'faixa_ogg' => '01_azedo_e_mascavo.ogg',
                'disco_id' => '6'));

        Musicas::create(
            array(
                'faixa' => 'Toque de Amor',
                'compositor' => '(Jos&eacute; Rocha / Jo&atilde;o Lyra)',
                'letra' => '<p>O amor &eacute; a luz guardi&atilde; da cidade</p>
<p>Que ilumina o cortejo de poucas na&ccedil;&otilde;es</p>
<p>Colorindo a tristeza de felicidade</p>
<p>Com tambores</p>
<p>Alegria dos negros lampi&otilde;es</p>
<p>&nbsp;</p>
<p>Tem caixas de guerra</p>
<p>Tarol e agog&ocirc;</p>
<p>Cantar respland&ocirc;</p>
<p>Pra depois debanar</p>
<p>&nbsp;</p>
<p>O amor, flor da pele</p>
<p>A luz, o a&ccedil;oite</p>
<p>Que caminha lenta noite dos maracatus</p>
<p>Batucando dentro do cora&ccedil;&atilde;o da cidade</p>
<p>O del&iacute;rio</p>
<p>A magia dos baques virados</p>
<p>&nbsp;</p>
<p>Tem reis e rainhas</p>
<p>Do sol e do mar</p>
<p>O toque de amor</p>
<p>Pra gente se encantar</p>
',
                'creditos' => '
<p>Arranjo de base e metais, piano Yamaha, baixo e sintetizador: Z&eacute; Am&eacute;rico Bastos</p>
<p>Baixo: Ant&ocirc;nio Santana</p>
<p>Guitarra: Zeppa Souza</p>
<p>Bateria: Rubinho</p>
<p>Percuss&atilde;o: Sidinho</p>
<p>Surdo: Tangerina</p>
<p>Congas: Zizinho</p>
<p>Saxofones: Marcelo, Leo Gandelman e Z&eacute; Carlos</p>
<p>Flauta: Leo Gandelman</p>
<p>Trombones: Serginho e Paulo Willian</p>
<p>Trompetes: Bidinho, Paulo Roberto e Nilton Rodrigues</p>
<p>Vocal: Viviane, Loalwa, Marcio, Regininha, Jaime Alem, Betina, Neila, Tadeu Mathias e Lenine</p>
<p>Simon&rsquo;s e programa&ccedil;&atilde;o de sintetizador: Mazzola</p>
',
                'faixa_mp3' => '02_toque_de_amor.mp3',
                'faixa_ogg' => '02_toque_de_amor.ogg',
                'disco_id' => '6'));

        Musicas::create(
            array(
                'faixa' => 'Feiti&ccedil;o de Gafieira',
                'compositor' => '(Tadeu Mathias / Jaguar)',
                'letra' => '<p>Pra que falar de tristeza</p>
<p>Galo cantou, diz que vem</p>
<p>Na barra do dia sorrindo</p>
<p>A manh&atilde;, ser feliz</p>
<p>Vem que tem</p>
<p>Fuzu&ecirc; na gafieira</p>
<p>Rela, rela que a&iacute; vem</p>
<p>&nbsp;</p>
<p>Mais um chorinho</p>
<p>Meu amor, balan&ccedil;adinho</p>
<p>Vem dan&ccedil;ar com esse jeitinho</p>
<p>Que &eacute; meu e de mais ningu&eacute;m</p>
<p>&nbsp;</p>
<p>Me enrosca toda</p>
<p>Me d&aacute; um abra&ccedil;o</p>
<p>Acerta o passo da minha paix&atilde;o</p>
<p>Parece at&eacute; que h&aacute; um descompasso</p>
<p>Batendo no meu peito, no meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Quero bem tanto de voc&ecirc;</p>
<p>Quero no ponto</p>
<p>Me deixa tonto de amor beber</p>
<p>No c&eacute;u, a lua se derrete em pranto</p>
<p>Chorando de inveja d&rsquo;oc&ecirc;</p>
<p>No c&eacute;u, a lua se derrete em pranto</p>
<p>Chorando de inveja d&rsquo;oc&ecirc;</p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Am&eacute;rico Bastos e Zeppa Souza</p>
<p>Acordeom: Severo</p>
<p>Piano Yamaha, DX-7, Baixo e Prophet: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Rubinho</p>
<p>Percuss&atilde;o: Sidinho, Marcos Rocha e Jorge Luiz</p>
<p>Surdo: Carlos Alberto</p>
<p>Viol&atilde;o de 7 cordas: Horondino</p>
<p>Cavaquinho: Valmar</p>
<p>Pandeiro e Clave: Zizinho</p>
<p>Flauta e Sax: Z&eacute; Carlos e Leo Gandelman</p>
<p>Sax tenor e Flauta: Marcelo</p>
<p>Trombones: Paulo Willian e Serginho</p>
<p>Trompete: Nilton Rodrigues</p>
<p>Trompetes e Fl&uuml;gelhorns: Bidinho e Paulinho</p>
<p>Claps: Mazzola</p>
<p>Vocal: Viviane, Loalwa, Marcio, Regininha, Jaime Alem, Betina, Neila, Tadeu Mathias e Zeppa Souza</p>
',
                'faixa_mp3' => '03_feitico_de_gafieira.mp3',
                'faixa_ogg' => '03_feitico_de_gafieira.ogg',
                'disco_id' => '6'));

        Musicas::create(
            array(
                'faixa' => 'Amanheceu',
                'compositor' => '(Zeppa Souza / Br&aacute;ulio Tavares) Dedicado a Pablo Milan&eacute;s',
                'letra' => '<p>Veio devagar no vento</p>
<p>Um peda&ccedil;o escondido de can&ccedil;&atilde;o</p>
<p>Passeou no firmamento</p>
<p>No brilho de V&ecirc;nus de manh&atilde;</p>
<p>Carrossel de luzes</p>
<p>Sons em carrossel</p>
<p>Acendendo todas as cores do c&eacute;u</p>
<p>&nbsp;</p>
<p>Veio de manh&atilde; cedinho</p>
<p>Soando bem longe, l&aacute; do al&eacute;m</p>
<p>Leve como um passarinho</p>
<p>Trazendo um segredo para algu&eacute;m</p>
<p>A natureza acordou assim</p>
<p>E a cidade inteira saiu pro jardim</p>
<p>&nbsp;</p>
<p>Amanheceu o amor</p>
<p>Amanheceu o amor</p>
<p>Foi me encantando quando me tocou</p>
<p>Amanheceu o amor</p>
<p>Amanheceu o amor</p>
<p>Bateu no meu peito e me acordou</p>
<p>&nbsp;</p>
<p>Era como uma risada</p>
<p>Na boca encarnada de arlequim</p>
<p>Carnaval inaugurado</p>
<p>No clar&atilde;o prateado de um clarim</p>
<p>Sol de meio-dia, castelos no ar</p>
<p>Luminosa melodia mais antiga que o mar</p>
<p>&nbsp;</p>
<p>Era uma can&ccedil;&atilde;o somente</p>
<p>Por&eacute;m, de repente, floresceu</p>
<p>Turbilh&atilde;o profundo</p>
<p>Era o rosto do mundo, e era eu</p>
<p>Multid&atilde;o de sonhos</p>
<p>Mutir&atilde;o de paz</p>
<p>Forte como a ventania nos canaviais</p>
',
                'creditos' => '
<p>Arranjo de base e metais, piano Yamaha e DX-7: Z&eacute; Am&eacute;rico Bastos</p>
<p>Contrabaixo: Ant&ocirc;nio Santana</p>
<p>Acordeom: Severo</p>
<p>Guitarra: Zeppa Souza</p>
<p>Bateria: Rubinho</p>
<p>Piano Yamaha: Milciades</p>
<p>Sax: Marcelo e Z&eacute; Carlos</p>
<p>Sax e Flauta: Leo Gandelman</p>
<p>Trombones: Paulo William e Serginho</p>
<p>Trompetes: Bidinho, Paulo Roberto e Nilton Rodrigues (participa&ccedil;&atilde;o especial)</p>
<p>Simon&rsquo;s: <strong>Mazzola</strong></p>
',
                'faixa_mp3' => '04_amanheceu.mp3',
                'faixa_ogg' => '04_amanheceu.ogg',
                'disco_id' => '6'));

        Musicas::create(
            array(
                'faixa' => 'Forr&oacute; do Poeir&atilde;o',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Quem n&atilde;o quiser dan&ccedil;ar</p>
<p>Saia do meio do sal&atilde;o</p>
<p>Que dan&ccedil;a hoje</p>
<p>&Eacute; pra quem tem disposi&ccedil;&atilde;o</p>
<p>A mulherada t&aacute; na base da chinela</p>
<p>O suor t&aacute; na canela</p>
<p>Quero ver o poeir&atilde;o</p>
<p>&nbsp;</p>
<p>Eu quero ver o poeir&atilde;o (levantar)</p>
<p>Na batida do bai&atilde;o (levantar)</p>
<p>Agarradinho no sal&atilde;o (levantar)</p>
<p>Machucando o cora&ccedil;&atilde;o (levantar)</p>
<p>&nbsp;</p>
<p>Quero ver esse moreno o que voc&ecirc; tem</p>
<p>Quero ouvir a batidinha do seu cora&ccedil;&atilde;o</p>
<p>Quero ter voc&ecirc; comigo</p>
<p>Quero o seu bem</p>
<p>Quero esse menino levantar o poeir&atilde;o</p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Am&eacute;rico Bastos e Severo</p>
<p>Zabumba: Mour&atilde;o</p>
<p>Tri&acirc;ngulo: Tinda</p>
<p>Maracas: Melqu&iacute;ades</p>
<p>Agog&ocirc;: Sidinho</p>
<p>Guitarra e vocal: Zeppa Souza</p>
<p>Contrabaixo: Antonio Santana</p>
<p>Bateria: Rubinho</p>
<p>Trombone: Paulo Willian</p>
<p>Drums link: Ary Carvalhaes</p>
<p>Claps: Mazzola</p>
<p>Vocal: Viviane, Loalwa, Marcio, Regininha, Jaime Alem, Neila e Tadeu Mathias</p>
',
                'faixa_mp3' => '05_forro_do_poeirao.mp3',
                'faixa_ogg' => '05_forro_do_poeirao.ogg',
                'disco_id' => '6'));

        Musicas::create(
            array(
                'faixa' => 'Moreno de Ouro',
                'compositor' => '(Carlos Fernando/ Geraldo Amaral)',
                'letra' => '<p>Moreno, se teus olhos falassem</p>
<p>Me revelariam atrav&eacute;s da luz</p>
<p>Que vem como facho de fogo</p>
<p>Queimando meu corpo</p>
<p>Igualzinho ao sol</p>
<p>&nbsp;</p>
<p>O sol que d&aacute; luz &agrave; pra&ccedil;a</p>
<p>&Eacute; o mesmo que te beija</p>
<p>Ent&atilde;o me beija moreno</p>
<p>Subindo ladeiras</p>
<p>Me leva at&eacute; quarta-feira</p>
<p>&nbsp;</p>
<p>Quero com voc&ecirc; me soltar</p>
<p>Perto de voc&ecirc; me quebrar</p>
<p>Vem c&aacute;, moreno</p>
<p>Me d&ecirc; a m&atilde;o</p>
<p>&Eacute; ouro, &eacute; prata esse ch&atilde;o, moreno</p>
',
                'creditos' => '
<p>Arranjo, Piano Yamaha e Jupiter 8: Lincoln Olivetti</p>
<p>Bateria: Picol&eacute;</p>
<p>Jupiter 8: Jorj&atilde;o</p>
<p>Trombone, Zin e Fender: Serginho</p>
<p>Contrabaixo: Paulo Cesar</p>
<p>Sax tenor: Marcelo</p>
<p>Trombones: Paulo Willian e Serginho</p>
<p>Trombone e Fl&uuml;gelhorn: Paulinho</p>
<p>Trompetes e Fl&uuml;gelhorns: Nilton Rodrigues e Bidinho</p>
<p>Sax e Flauta: Leo Gandelman</p>
<p>Sax tenor e Flauta: Z&eacute; Carlos</p>
<p>Vocal: Tadeu Mathias, Betina, Neila, Loalwa, Lenine, Fernando, Jaime Alem, Nair C&acirc;ndia e Elba</p>
',
                'faixa_mp3' => '06_moreno_de_ouro.mp3',
                'faixa_ogg' => '06_moreno_de_ouro.ogg',
                'disco_id' => '6'));

        Musicas::create(
            array(
                'faixa' => 'Do Jeito Que a Gente Gosta',
                'compositor' => '(Severo / Jaguar)',
                'letra' => '<p>Cai, cai, moreno</p>
<p>No fu&aacute; que ainda &eacute; cedo</p>
<p>Sanfoneiro, empurre o dedo</p>
<p>Bote o fole pra chorar</p>
<p>Nessa pisada eu vou at&eacute; cair de costa</p>
<p>O forr&oacute; t&aacute; animado</p>
<p>Do jeito que a gente gosta</p>
<p>&nbsp;</p>
<p>Bumba a zabumba, zabumbeiro</p>
<p>Oi, bum, bum, b&aacute;!</p>
<p>Castiga de l&aacute; sanfoneiro</p>
<p>Que eu quero ver a paia da cana voar</p>
<p>&nbsp;</p>
<p>Vem, amor</p>
<p>Que hoje eu sou</p>
<p>Seu dengo, seu xod&oacute;, meu nego</p>
<p>Repara que xamego, vamos xamegar!</p>
',
                'creditos' => '
<p>Arranjo de base e metais: Z&eacute; Am&eacute;rico Bastos e Severo</p>
<p>Arranjo de cordas: Ivan Paulo</p>
<p>Acordeom: Severo</p>
<p>Contrabaixo: Ant&ocirc;nio Santana</p>
<p>Guitarra: Zeppa Souza</p>
<p>Bateria: Rubinho</p>
<p>Percuss&atilde;o: Sidinho</p>
<p>Piano Yamaha e DX-7: Z&eacute; Am&eacute;rico Bastos</p>
<p>Pandeiro: Zizinho</p>
<p>Zabumba: Mour&atilde;o</p>
<p>Tri&acirc;ngulo: Tinda</p>
<p>Maracas: Melqu&iacute;ades</p>
<p>Sax tenor e solo: Marcelo</p>
<p>Trombones: Serginho e Paulo Willian</p>
<p>Trombones e Fl&uuml;gelhorns: Paulinho, Nilton Rodrigues e Bidinho</p>
<p>Sax e Flauta: Leo Gandelman</p>
<p>Sax tenor e Flauta: Z&eacute; Carlos</p>
<p>Claps: Mazzola</p>
<p>Violinos: Jorge Kundert, Francisco Perrota, Jos&eacute; Alves, Bernardo, Michel, Alfredo Vidal, Aizik, Carlos Hack, Jacques Morelembaum, Jorge Faini, Paschoal Perrota, Virg&iacute;lio Arraes, Walter Hack e Giancarlo Pareschi (spalla)</p>
<p>Violas: Arlindo Penteado, Frederick Stephany e Vitorino Borges</p>
<p>Cellos: Alceu e M&aacute;rcio Mallard</p>
<p>Simon&rsquo;s: Mazzola</p>
',
                'faixa_mp3' => '07_do_jeito_que_a_gente_gosta.mp3',
                'faixa_ogg' => '07_do_jeito_que_a_gente_gosta.ogg',
                'disco_id' => '6'));

        Musicas::create(
            array(
                'faixa' => 'Amor Eterno (Soneto CXVI)',
                'compositor' => '(Tadeu Mathias / Ana Am&eacute;lia) (Soneto original de Shakespeare)',
                'letra' => '<p>De almas sinceras, a uni&atilde;o sincera</p>
<p>Nada h&aacute; que impe&ccedil;a, amor n&atilde;o &eacute; amor</p>
<p>Se quando encontra obst&aacute;culos se altera</p>
<p>Ou se vacila ao m&iacute;nimo temor</p>
<p>&nbsp;</p>
<p>Amor &eacute; um marco eterno, dominante</p>
<p>Que encara a tempestade com bravura</p>
<p>&Eacute; astro que norteia a vela errante</p>
<p>Cujo valor se ignora l&aacute; na altura</p>
<p>&nbsp;</p>
<p>Amor n&atilde;o teme o tempo muito embora</p>
<p>Seu alfanje n&atilde;o poupe a mocidade</p>
<p>Amor n&atilde;o se transforma de hora em hora</p>
<p>Muito antes se afirma para a eternidade</p>
<p>&nbsp;</p>
<p>Se isto &eacute; falso</p>
<p>E que &eacute; falso algu&eacute;m provou</p>
<p>Eu n&atilde;o sou poeta</p>
<p>E nunca ningu&eacute;m amou</p>
',
                'creditos' => '
<p>Arranjo de base, piano ac&uacute;stico, DX-7, Yamaha GS-2 e Arp Quadra: C&eacute;sar Camargo Mariano</p>
<p>Arranjo de cordas: Ivan Paulo</p>
<p>Detalhes de teclados: Mazzola</p>
<p>Guitarra: Zeppa Souza</p>
<p>Bateria Simonsen: Teo</p>
<p>Violinos: Jorge Kundert, Francisco Perrota, Jos&eacute; Alves, Bernardo, Michel, Alfredo Vidal, Aizik, Carlos Hack, Jacques Morelembaum, Jorge Faini, Paschoal Perrota, Virg&iacute;lio Arraes, Walter Hack e Giancarlo Pareschi (spalla)</p>
<p>Violas: Arlindo Penteado, Frederick Stephany, Vitorino Borges e Nelson de Macedo</p>
<p>Cellos: Alceu e Marcio Mallard</p>
<p>Programa&ccedil;&atilde;o de sintetizador: Mazzola</p>
',
                'faixa_mp3' => '08_amor_eterno.mp3',
                'faixa_ogg' => '08_amor_eterno.ogg',
                'disco_id' => '6'));

        Musicas::create(
            array(
                'faixa' => 'Calmaria',
                'compositor' => '(Z&eacute; Am&eacute;rico Bastos / Salgado Maranh&atilde;o) Participa&ccedil;&atilde;o Especial: <strong>Zeppa Souza</strong>',
                'letra' => '<p>Quis fazer do nosso amor</p>
<p>A calmaria de um rio</p>
<p>E quanto mais eu mergulho</p>
<p>Mais eu encontro o vazio</p>
<p>Me enrosco na tua pele</p>
<p>Assanho teu cora&ccedil;&atilde;o</p>
<p>E sempre me surpreendo</p>
<p>Com o fogo dessa paix&atilde;o</p>
<p>&nbsp;</p>
<p>Nosso encontro &eacute; uma &ldquo;felicid&aacute;diva&rdquo;</p>
<p>&Eacute; festa de passarinhos</p>
<p>E &eacute; flor do mesmo espinho da vida</p>
<p>&nbsp;</p>
<p>Quis trazer pro nosso amor</p>
<p>A fantasia do cio</p>
<p>E quanto mais eu mergulho</p>
<p>Mais se aprofunda esse rio</p>
',
                'creditos' => '
<p>Arranjo de base e DX-7: Z&eacute; Am&eacute;rico Bastos</p>
<p>Arranjo de cordas: Ivan Paulo</p>
<p>Vocal (participa&ccedil;&atilde;o especial): Zeppa Souza</p>
<p>Percuss&atilde;o: Sidinho</p>
<p>Bateria: Rubinho</p>
<p>Contrabaixo: Ant&ocirc;nio Santana</p>
<p>Guitarra: Zeppa Souza</p>
<p>Violinos: Jorge Kundert, Francisco Perrota, Jos&eacute; Alves, Bernardo, Michel, Alfredo Vidal, Aizik, Carlos Hack, Jacques Morelembaum, Jorge Faini, Paschoal Perrota, Virg&iacute;lio Arraes, Walter Hack e Giancarlo Pareschi (spalla)</p>
<p>Violas: Arlindo Penteado, Frederick Stephany, Vitorino Borges e Nelson de Macedo</p>
<p>Cellos: Alceu e Marcio Mallard</p>
<p>Simon&rsquo;s: Mazzola</p>
',
                'faixa_mp3' => '09_calmaria.mp3',
                'faixa_ogg' => '09_calmaria.ogg',
                'disco_id' => '6'));

        Musicas::create(
            array(
                'faixa' => 'Energia',
                'compositor' => '(Lula Queiroga)',
                'letra' => '<p>Olha que eu conhe&ccedil;o essa cara</p>
<p>Voc&ecirc; chegou de cima</p>
<p>Vem comigo, toma a chave do meu cora&ccedil;&atilde;o</p>
<p>Eu j&aacute; entrei no clima</p>
<p>&nbsp;</p>
<p>Olha que eu conhe&ccedil;o esse pique</p>
<p>No seu teatro tamb&eacute;m quero ser atriz</p>
<p>Deixa eu sair no seu bloco</p>
<p>Me la&ccedil;a, me beija, me fa&ccedil;a feliz</p>
<p>&nbsp;</p>
<p>O sol raiou</p>
<p>Tomou conta da pra&ccedil;a</p>
<p>Sua energia</p>
<p>O sol raiou</p>
<p>Pra dizer ao pa&iacute;s</p>
<p>Que hoje &eacute; o dia D</p>
',
                'creditos' => '
<p>Arranjo e piano Yamaha: Lincoln Olivetti</p>
<p>Bateria Simonsen: T&eacute;o</p>
<p>Oberheim e Jupiter 8: Jorj&atilde;o</p>
<p>Contrabaixo: Paulo Cesar</p>
<p>Trompetes e Fl&uuml;gelhorns: Bidinho, Marcio Montarroyos e Don</p>
<p>Sax alto: Leo Gandelman</p>
<p>Sax tenor: Z&eacute; Carlos</p>
<p>Sax bar&iacute;tono: Aurino</p>
<p>Trombone, Zin e Fl&uuml;gelhorn: Serginho</p>
<p>Guitarra: Robson Jorge</p>
<p>Percuss&atilde;o: Djalma Corr&ecirc;a</p>
<p>Vocal: Tadeu Mathias, Betina, Neila, Loalwa, Lenine, Fernando, Jaime Alem, Nair C&acirc;ndia e Elba</p>
<p>&nbsp;</p>
',
                'faixa_mp3' => '10_energia.mp3',
                'faixa_ogg' => '10_energia.ogg',
                'disco_id' => '6'));

        Musicas::create(
            array(
                'faixa' => ' Nordeste Independente (Imagine o Brasil) (Ao vivo)',
                'compositor' => '(Br&aacute;ulio Tavares / Ivanildo Vila Nova)',
                'letra' => '<p><em>&ldquo;Os pol&iacute;ticos, os homens do poder, esses que deveriam resolver, se empenhar em resolver e solucionar os problemas s&eacute;rios e definitivos do nosso pa&iacute;s, eles permanecem em Bras&iacute;lia no gabinetes, quando se aproxima o ano das elei&ccedil;&otilde;es eles saem de Bras&iacute;lia, n&atilde;o &eacute;? V&atilde;o l&aacute;... eles pegam um avi&atilde;o, v&atilde;o l&aacute; no Nordeste, sobrevoam a regi&atilde;o, n&eacute;?, se certificam de que h&aacute; seca realmente no Nordeste e entra ano, sai ano, nada vem e o sert&atilde;o continua ao deus-dar&aacute;. Ent&atilde;o, diante dessas circunst&acirc;ncias todas &eacute; que o poeta popular j&aacute; t&aacute; fazendo m&uacute;sica, coisas engra&ccedil;adas evidentemente, mas mais ou menos assim: &lsquo;Imagine o Brasil ser dividido e o Nordeste ficar independente&rsquo;. Ent&atilde;o, senhoras e senhores com voc&ecirc;s, Ivanildo Vila Nova e Trupizupe Br&aacute;ulio Tavares, o raio da Cilibrina!&rdquo; Muito obrigado!</em></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>J&aacute; que existe no Sul esse conceito</p>
<p>Que o Nordeste &eacute; ruim, seco e ingrato</p>
<p>J&aacute; que existe a separa&ccedil;&atilde;o de fato</p>
<p>&Eacute; preciso torn&aacute;-la de direito</p>
<p>Quando um dia qualquer isso for feito</p>
<p>Todos dois v&atilde;o lucrar imensamente</p>
<p>Come&ccedil;ando uma vida diferente</p>
<p>De que a gente at&eacute; hoje tem vivido</p>
<p>Imagina o Brasil ser dividido</p>
<p>E o Nordeste ficar independente</p>
<p>&nbsp;</p>
<p>Dividindo a partir de Salvador</p>
<p>O Nordeste seria outro pa&iacute;s</p>
<p>Vigoroso, leal, rico e feliz</p>
<p>Sem dever a ningu&eacute;m no exterior</p>
<p>Jangadeiro seria o senador</p>
<p>O cassaco de ro&ccedil;a era o suplente</p>
<p>Cantador de viola o presidente</p>
<p>O vaqueiro era o l&iacute;der do partido</p>
<p>Imagina o Brasil ser dividido</p>
<p>E o Nordeste ficar independente</p>
<p>&nbsp;</p>
<p>Em Recife, o distrito industrial</p>
<p>O idioma ia ser nordestinense</p>
<p>A bandeira de renda cearense</p>
<p>&ldquo;Asa Branca&rdquo; era o hino nacional</p>
<p>O folheto era o s&iacute;mbolo oficial</p>
<p>A moeda, o tost&atilde;o de antigamente</p>
<p>Conselheiro seria o inconfidente</p>
<p>Lampi&atilde;o, o her&oacute;i inesquecido</p>
<p>Imagina o Brasil ser dividido</p>
<p>E o Nordeste ficar independente</p>
<p>&nbsp;</p>
<p>O Brasil ia ter de importar</p>
<p>Do Nordeste algod&atilde;o, cana, caju</p>
<p>Carna&uacute;ba, laranja, baba&ccedil;u</p>
<p>Abacaxi e o sal de cozinhar</p>
<p>O arroz, o agave do lugar</p>
<p>O petr&oacute;leo, a cebola, o aguardente</p>
<p>O Nordeste &eacute; autossuficiente</p>
<p>O seu lucro seria garantido</p>
<p>Imagina o Brasil ser dividido</p>
<p>E o Nordeste ficar independente</p>
<p>&nbsp;</p>
<p>Se isso a&iacute; se tornar realidade</p>
<p>E algu&eacute;m do Brasil nos visitar</p>
<p>Nesse nosso pa&iacute;s vai encontrar</p>
<p>Confian&ccedil;a, respeito e amizade</p>
<p>Tem o p&atilde;o repartido na metade</p>
<p>Tem o prato na mesa, a cama quente</p>
<p>Brasileiro ser&aacute; irm&atilde;o da gente</p>
<p>Vai pra l&aacute; que ser&aacute; bem recebido</p>
<p>Imagina o Brasil ser dividido</p>
<p>E o Nordeste ficar independente</p>
<p>&nbsp;</p>
<p>Eu n&atilde;o quero com isso que voc&ecirc;s</p>
<p>Imaginem que eu tento ser grosseiro</p>
<p>Pois se lembrem que o povo brasileiro</p>
<p>&Eacute; amigo do povo portugu&ecirc;s</p>
<p>Se um dia a separa&ccedil;&atilde;o se fez</p>
<p>Todos os dois se respeitam no presente</p>
<p>Se isso a&iacute; j&aacute; deu certo antigamente</p>
<p>Nesse exemplo concreto e conhecido</p>
<p>Imagina o Brasil ser dividido</p>
<p>E o Nordeste ficar independente</p>
<p>&nbsp;</p>
<p><em>Povo do meu Brasil</em></p>
<p><em>Pol&iacute;ticos brasileiros</em></p>
<p><em>N&atilde;o pensem que voc&ecirc;s nos enganam</em></p>
<p><em>Porque nosso povo n&atilde;o &eacute; besta!</em></p>
',
                'creditos' => '
<p>Arranjo e guitarra: Zeppa Souza</p>',
                'faixa_mp3' => '11_nordeste_independente.mp3',
                'faixa_ogg' => '11_nordeste_independente.ogg',
                'disco_id' => '6'));

        Musicas::create(
            array(
                'faixa' => 'Energia',
                'compositor' => '(Lula Queiroga)',
                'letra' => '<p>Olha que eu conhe&ccedil;o essa cara<br />
Voc&ecirc; chegou de cima<br />
Vem comigo, toma a chave do meu cora&ccedil;&atilde;o<br />
Eu j&aacute; entrei no clima</p>
<p>&nbsp;</p>
<p>Olha que eu conhe&ccedil;o esse pique<br />
No seu teatro tamb&eacute;m quero ser atriz<br />
Deixa eu sair no seu bloco<br />
Me la&ccedil;a, me beija, me fa&ccedil;a feliz</p>
<p>&nbsp;</p>
<p>O sol raiou<br />
Tomou conta da pra&ccedil;a<br />
Sua energia<br />
O sol raiou<br />
Pra dizer ao pa&iacute;s<br />
Que hoje &eacute; o dia D</p>',
                'creditos' => '',
                'faixa_mp3' => '1_Energia.mp3',
                'faixa_ogg' => '1_Energia.ogg',
                'disco_id' => '7'));

        Musicas::create(
            array(
                'faixa' => 'Banquete de Signos',
                'compositor' => '(Zé Ramalho)',
                'letra' => '<p>Discutir o canga&ccedil;o com liberdade<br />
&Eacute; saber da viola, da viol&ecirc;ncia<br />
Descobrir nos cabelos inoc&ecirc;ncia<br />
&Eacute; saber da fatal fertilidade</p>
<p>&nbsp;</p>
<p>Descobrir a cidade na natureza<br />
Descobrir a beleza dessa mulher<br />
Descobrir o que der boniteza<br />
Na peleja do homem vier, quando vier</p>
<p>&nbsp;</p>
<p>Descobrir o baga&ccedil;o dos engenhos<br />
No mela&ccedil;o da cana mais um beijo<br />
Descobrir os desejos que n&atilde;o tem cura<br />
Saracura do brejo na novena</p>
<p>&nbsp;</p>
<p>Descobrir a serena da natureza<br />
Descobrir a beleza dessa mulher<br />
Descobrir o que der boniteza<br />
Na peleja do homem vier, quando vier<br />
</p>',
                'creditos' => '',
                'faixa_mp3' => '2_Banquete_de_signos.mp3',
                'faixa_ogg' => '2_Banquete_de_signos.ogg',
                'disco_id' => '7'));

        Musicas::create(
            array(
                'faixa' => 'Quero Ir a Cuba',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>Mam&atilde;e eu quero ir a Cuba<br />
Quero ver a vida l&aacute;<br />
La sue&ntilde;o una perla encendida<br />
Sobre la mar</p>
<p>&nbsp;</p>
<p>Mam&atilde;e eu quero amar a ilha<br />
De Xang&ocirc; e Iemanj&aacute;<br />
Yorub&aacute; igual &agrave; Bahia</p>
<p>&nbsp;</p>
<p>Desde C&eacute;lia Cruz<br />
Cuando eu era un ni&ntilde;o de Jesus<br />
E a revolu&ccedil;&atilde;o<br />
Que tamb&eacute;m tocou meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>&ldquo;Cuba seja aqui&rdquo;<br />
Essa ouvi dos l&aacute;bios de Petit<br />
Desde o cha-cha-cha<br />
Mam&atilde;e eu quero ir a Cuba<br />
E quero voltar!</p>
<p>&nbsp;</p>

<p><strong>Canto Geral</strong><br />
<em>(Pablo Neruda)</em></p>
<p>&nbsp;</p>
<p><em>Cuba, Cuba<br />
Flor espumosa<br />
Efervescente<br />
Escarlate</em></p>
<p>&nbsp;</p>
<p><em>Esta &eacute; a &aacute;rvore dos livres<br />
&Aacute;rvore-terra<br />
&Aacute;rvore-nuvem<br />
&Aacute;rvore-p&atilde;o<br />
&Aacute;rvore-flecha<br />
&Aacute;rvore-punho<br />
&Aacute;rvore-fogo<br />
Eu te amo!</em></p>
<p>&nbsp;</p>
<p><em>Pura terra<br />
Como tantas coisas amei contradit&oacute;rias<br />
A rua, a flor, a abund&acirc;ncia, o rito<br />
Eu te amo, pura irm&atilde; do oceano<br />
E amei o sistema da tua forma reta<br />
E a precisa extens&atilde;o do teu vazio</em></p>
',
                'creditos' => '',
                'faixa_mp3' => '3_Quero_ir_a_Cuba.mp3',
                'faixa_ogg' => '3_Quero_ir_a_Cuba.ogg',
                'disco_id' => '7'));
        Musicas::create(
            array(
                'faixa' => 'Toque de Fole',
                'compositor' => '(Bastinho Calixto / Ana Paula)',
                'letra' => '<p>Toque, sanfoneiro<br />
Um forr&oacute; bem animado<br />
Com cad&ecirc;ncia de xaxado<br />
Da poeira levantar</p>
<p>&nbsp;</p>
<p>Toque, sanfoneiro<br />
Que as mulheres t&atilde;o visando<br />
O fole frouxo tocando<br />
Castigando a nota l&aacute;</p>
<p>&nbsp;</p>
<p>Toque, sanfoneiro<br />
Mostre que &eacute; v&eacute;io macho<br />
Capriche nos oito baixos<br />
At&eacute; o dia clarear</p>
<p>&nbsp;</p>
<p>Toque, sanfoneiro, toque<br />
Porque a gente quer se esbaldar<br />
Toque, sanfoneiro, toque<br />
Porque a gente quer dan&ccedil;ar</p>
<p>&nbsp;</p>
<p>Dedo no couro &eacute; pandeirada<br />
M&atilde;o no zabumba &eacute; zabumbada<br />
E no tri&acirc;ngulo &eacute; trianglada, oi<br />
Dedo no fole &eacute; forrozada<br />
</p>',
                'creditos' => '',
                'faixa_mp3' => '4_Toque_de_fole.mp3',
                'faixa_ogg' => '4_Toque_de_fole.ogg',
                'disco_id' => '7'));
        Musicas::create(
            array(
                'faixa' => 'No Som da Sanfona',
                'compositor' => '(Jackson do Pandeiro / Kaká do Asfalto)',
                'letra' => '<p>Ouvi o toque da sanfona me chamar<br />
Ouvi o toque da sanfona me chamar<br />
Ouvi o toque da sanfona me chamar<br />
Ouvi o toque da sanfona me chamar</p>
<p>&nbsp;</p>
<p>Um sanfoneiro bem maneiro<br />
Puxa o fole<br />
Folia a noite inteira<br />
At&eacute; o dia clarear<br />
O cabra vem se aconchegando<br />
Se relando<br />
Quando o pagode esquenta<br />
Ningu&eacute;m quer sair de l&aacute;</p>
<p>&nbsp;</p>
<p>&Ecirc;ta pagode que t&aacute; bom<br />
Que t&aacute; danado<br />
Morena aqui do lado<br />
Faz o boneco chorar<br />
Chora, n&atilde;o chora<br />
Morena disse que chora<br />
No som de uma viola<br />
Faz o corpo balan&ccedil;ar</p>
<p>&nbsp;</p>
<p>Quem &eacute; sambeiro, batuqueiro, forrozeiro<br />
Tem privil&eacute;gio agora<br />
So&ccedil;aite particular<br />
Agora toda a classe alta quer xaxar<br />
Forr&oacute; de brasileiro chegou em todo lugar</p>',
                'creditos' => '',
                'faixa_mp3' => '5_No_som_da_sanfona.mp3',
                'faixa_ogg' => '5_No_som_da_sanfona.ogg',
                'disco_id' => '7'));
        Musicas::create(
            array(
                'faixa' => 'Samba Escrachado',
                'compositor' => '(Lenine / Zeh Rocha)',
                'letra' => '<p>O meu samba escancarou<br />
No quebra-quebra<br />
Saiu do compasso<br />
E desandou</p>
<p>&nbsp;</p>
<p>T&aacute; sem escola<br />
Sem passarela<br />
Sem diploma de embaixador</p>
<p>&nbsp;</p>
<p>&Eacute;!<br />
&Eacute; t&atilde;o escrachado!<br />
Que vai dar uma canja<br />
Numa banda de jazz<br />
Que vai pra Montreaux</p>
<p>&nbsp;</p>
<p>&Eacute;!<br />
&Eacute; t&atilde;o debochado<br />
Que Carmem Miranda<br />
No palco do c&eacute;u<br />
Desceu para o morro e se rebolou<br />
Clementina foi quem vadiou<br />
Pixinguinha, a partir do alto, aben&ccedil;oou<br />
Pixinguinha, a partir do alto, aben&ccedil;oou</p>
<p>&nbsp;</p>
<p>E salve o sambista que ningu&eacute;m viu<br />
Folia de reias<br />
Ginga de maracatu, bantu<br />
Batuque de catimb&oacute;, jongo</p>
<p>&nbsp;</p>
<p>O meu samba escancarou<br />
A farra de guitarra e sintetizador<br />
Outro pagode, outra aquarela<br />
No batuque de um novo tambor</p>
<p>&nbsp;</p>
<p>&Eacute;!<br />
&Eacute; t&atilde;o debochado<br />
Que no Corcovado<br />
Um negro sambista se fez redentor</p>
<p>&nbsp;</p>
<p>&Eacute;!<br />
&Eacute; t&atilde;o desbundado<br />
Que at&eacute; Grande Otelo<br />
Na tela do mundo<br />
Comendo banana quase se engasgou</p>
<p>&nbsp;</p>
<p>Nem Cabral descobriu seu sabor<br />
Na cabe&ccedil;a do samba a cartola coroou<br />
Na cabe&ccedil;a do samba a cartola coroou<br />
Na cabe&ccedil;a do samba a cartola coroou...</p>',
                'creditos' => '',
                'faixa_mp3' => '6_Samba_escrachado.mp3',
                'faixa_ogg' => '6_Samba_escrachado.ogg',
                'disco_id' => '7'));

        Musicas::create(
            array(
                'faixa' => 'Fogo na Mistura',
                'compositor' => '(Tunai / S&eacute;rgio Natureza)',
                'letra' => '<p>Rasga a fantasia</p>
<p>J&aacute; &eacute; quase dia</p>
<p>Dan&ccedil;a que &eacute; pro sol raiar</p>
<p>V&ecirc; que maravilha</p>
<p>M&atilde;e-lua adivinha</p>
<p>Que &eacute; hora e vai deitar</p>
<p>&nbsp;</p>
<p>Vai de vento em popa</p>
<p>Sai com pouca roupa</p>
<p>Que o calor pode aumentar</p>
<p>A temperatura</p>
<p>Pra al&eacute;m da fervura</p>
<p>Num del&iacute;rio popular</p>
<p>&nbsp;</p>
<p>Fogo na mistura de sabedoria</p>
<p>Desejo, magia, alegria e coisa e tal</p>
<p>Dan&ccedil;ando todo mundo a mil</p>
<p>Brasil, &ldquo;massa real&rdquo;</p>
<p>&nbsp;</p>
<p>Afox&eacute;s e frevos</p>
<p>Marcha e samba enredo</p>
<p>Brancos, &iacute;ndios, negros</p>
<p>Euforia nacional</p>
<p>Cantando junto em qualquer tom</p>
<p>Saindo num cord&atilde;o geral</p>
',
                'creditos' => '
<p>Arranjo: Hector Garrido</p>
<p>Bateria: Adolfo &ldquo;Fofi&rdquo; Lancha</p>
<p>Baixo: Juarez Hernandez</p>
<p>Guitarra: Ren&eacute; Toledo</p>
<p>Piano Fender: Luis de la Torre</p>
<p>Sintetizador: Steve Quinze</p>
<p>Percuss&atilde;o: Oscar Salas</p>
<p>Vocais: Viviane, Fernando, Celinha, Jaime Alem, Nair C&acirc;ndia, Regina, Br&aacute;ulio, Tadeu Mathias, Jurema C&acirc;ndia, Rosana, Ant&ocirc;nio &ldquo;Foguete&rdquo;, Fatinha, Isabel, Laura, Gilda, Cleuber, Marco, Enaldo, Luiz Fernando, Ana Carla, Magda, Mauro, Gustavo, Massuka, Gabriela, Nana Vaz, Tiago, Paulinho Pizziali, Irene, Er&aacute;cliton, Os Abelhudos (Rodrigo Saldanha, Diego e Tatiana)</p>
',
                'faixa_mp3' => '01_fogo_na_mistura.mp3',
                'faixa_ogg' => '01_fogo_na_mistura.ogg',
                'disco_id' => '8'));

        Musicas::create(
            array(
                'faixa' => 'De Volta pro Aconchego ',
                'compositor' => '(Dominguinhos / Nando Cordel)',
                'letra' => '<p>Estou de volta pro meu aconchego</p>
<p>Trazendo na mala bastante saudade</p>
<p>Querendo um sorriso sincero, um abra&ccedil;o</p>
<p>Para aliviar meu cansa&ccedil;o</p>
<p>E toda essa minha vontade</p>
<p>&nbsp;</p>
<p>Que bom poder t&aacute; contigo de novo</p>
<p>Ro&ccedil;ando teu corpo e beijando voc&ecirc;</p>
<p>Pra mim tu &eacute;s a estrela mais linda</p>
<p>Seus olhos me prendem, fascinam</p>
<p>A paz que eu gosto de ter</p>
<p>&nbsp;</p>
<p>&Eacute; duro ficar sem voc&ecirc; vez em quando</p>
<p>Parece que falta um peda&ccedil;o de mim</p>
<p>Me alegro na hora de regressar</p>
<p>Parece que vou mergulhar</p>
<p>Na felicidade sem fim</p>
',
                'creditos' => '
<p>Arranjo: Dori Caymmi</p>
<p>Bateria: Nico Assun&ccedil;&atilde;o</p>
<p>Viol&atilde;o: Dori</p>
<p>Teclados: Jota</p>
<p>Percuss&atilde;o: Sidinho</p>
<p>Acordeom: Chiquinho e Dominguinhos</p>
<p>Violinos: Giancarlo, Alfredo, Jos&eacute; Alves, Paschoal Perrotta, Michel, Walter Hack, Carlos Hack, Aizik, Francisco Perrotta, Jorge Faini, Luiz Carlos, Virg&iacute;lio Arraes</p>
<p>Violas: Arlindo Penteado, Frederick, Hindenburgo, Jos&eacute; Dias de Lana</p>
<p>Cellos: Alceu de Almeida, Jacques Morelenbaum, Jorge Kundert, Marcio Eymard</p>
',
                'faixa_mp3' => '02_de_volta_pro_aconchego.mp3',
                'faixa_ogg' => '02_de_volta_pro_aconchego.ogg',
                'disco_id' => '8'));

        Musicas::create(
            array(
                'faixa' => 'Como se Fosse a Primavera (Canci&oacute;n) ',
                'compositor' => '(Pablo Milan&eacute;s / Nicolas Guill&eacute;n / vers&atilde;o: Chico Buarque)',
                'letra' => '<p>De que calada maneira</p>
<p>Voc&ecirc; chega assim sorrindo</p>
<p>Como se fosse a primavera</p>
<p>E eu morrendo</p>
<p>E de que modo sutil me derramou na camisa</p>
<p>Todas as flores de abril</p>
<p>&nbsp;</p>
<p>Quem lhe disse que eu era</p>
<p>Riso sempre e nunca pranto</p>
<p>Como se fosse a primavera</p>
<p>N&atilde;o sou tanto</p>
<p>No entanto, que espiritual</p>
<p>Voc&ecirc; me d&aacute; uma rosa de seu rosal principal</p>
<p>&nbsp;</p>
<p>De que calada maneira</p>
<p>Voc&ecirc; chega assim sorrindo</p>
<p>Como se fosse a primavera e eu morrendo</p>
<p>E eu morrendo</p>
<p>&nbsp;</p>
<p><em>Ide qu&eacute; callada manera</em></p>
<p><em>Se me adentra usted sonriendo</em></p>
<p><em>Como se fuera la primavera</em></p>
<p><em>Yo muriendo</em></p>
',
                'creditos' => '
<p>Arranjo: Hector Garrido</p>
<p>Bateria: Adolfo &ldquo;Fofi&rdquo; Lancha</p>
<p>Baixo: Julio Hernandez</p>
<p>Guitarra: Ren&eacute; Toledo</p>
<p>Piano Fender: Luis de la Torre</p>
<p>Percuss&atilde;o: Oscar Salas</p>
<p>Trompete: Tony Concepcion e John Giorginni</p>
<p>Sax tenor: Ed Calle</p>
<p>Sax bar&iacute;tono: Ed Maina</p>
<p>Trombone: Kevin Williams</p>
<p>Surdo: Gordinho</p>
<p>Tamborim: Trambique e Luna</p>
<p>Tamborim/ganz&aacute;: Eliseu</p>
<p>Cu&iacute;ca/agog&ocirc;: Ov&iacute;dio</p>
',
                'faixa_mp3' => '03_como_se_fosse_a_primavera.mp3',
                'faixa_ogg' => '03_como_se_fosse_a_primavera.ogg',
                'disco_id' => '8'));

        Musicas::create(
            array(
                'faixa' => 'Desassossego ',
                'compositor' => '(Moraes Moreira / Guilherme Maia)',
                'letra' => '<p>Meu bem me chamou, pediu xamego</p>
<p>Meu nego, t&ocirc; com o p&eacute; na estrada</p>
<p>Me desprezou, desassossego</p>
<p>Eu chego com a madrugada</p>
<p>&nbsp;</p>
<p>O meu caminho sigo sempre em dire&ccedil;&atilde;o</p>
<p>O teu carinho, cantinho do teu cora&ccedil;&atilde;o</p>
<p>Viver sozinho, eu n&atilde;o, que dor</p>
<p>U&ocirc;u, u&ocirc;u, u&ocirc;u, sou passarinho</p>
<p>Sou teu condor</p>
<p>E a vida &eacute; nosso ninho de amor</p>
',
                'creditos' => '
<p>Arranjo e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Jorge Degas</p>
<p>Guitarra: Zeppa Souza</p>
<p>Sax: Leo Gandelman</p>
<p>Percuss&atilde;o: Sidinho</p>
<p>Vocais: Regininha, Luna Messina, Cl&aacute;udia Telles, Jurema, Marcio, Tadeu Mathias, Ana L&uacute;cia, Hilton</p>
',
                'faixa_mp3' => '04_desassossego.mp3',
                'faixa_ogg' => '04_desassossego.ogg',
                'disco_id' => '8'));

        Musicas::create(
            array(
                'faixa' => 'Mexe... mexe, Funga... funga ',
                'compositor' => '(Severo/ Jaguar)',
                'letra' => '<p>Bom sanfoneiro &eacute; aquele que se treme</p>
<p>Sustenta o fole, n&atilde;o cochila no forr&oacute;</p>
<p>Bom sanfoneiro quando cai na forrozada</p>
<p>Deixa doida a mulherada</p>
<p>E a poeira sai do ch&atilde;o</p>
<p>Bom sanfoneiro quando cai na forrozada</p>
<p>Deixa doida a mulherada</p>
<p>E a poeira sai do ch&atilde;o</p>
<p>&nbsp;</p>
<p>&Eacute; um bole-bole, um mexe-mexe, um remelexo</p>
<p>&Eacute; um funga-funga na sanfona e no sal&atilde;o</p>
<p>&nbsp;</p>
<p>Vem c&aacute; benzinho me faz um carinho</p>
<p>Vem de mansinho como quem n&atilde;o quer</p>
<p>Nada e me puxa, vem devagarinho</p>
<p>Me matar de dengo sem ningu&eacute;m dar p&eacute;</p>
<p>Nada e me puxa, vem devagarinho</p>
<p>Me matar de dengo sem ningu&eacute;m dar p&eacute;</p>
',
                'creditos' => '
<p>Arranjo: Dominguinhos e Severo</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Jorj&atilde;o</p>
<p>Guitarra: Zeppa Souza</p>
<p>Teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Percuss&atilde;o: Sidinho</p>
<p>Acordeom: Severo e Dominguinhos</p>
<p>Tri&acirc;ngulo: Jo&atilde;o Gomes</p>
<p>Maraca: Lacerda Cavalcante</p>
<p>Zabumba: Geraldo Gomes</p>
<p>Flauta: Z&eacute; da Flauta</p>
<p>Palmas: Mazzola</p>
<p>Vocais: Regininha, Luna Messina, Cl&aacute;udia Telles, Jurema, Marcio, Tadeu Mathias, Hilton</p>
',
                'faixa_mp3' => '05_mexe_mexe_funga_funga.mp3',
                'faixa_ogg' => '05_mexe_mexe_funga_funga.ogg',
                'disco_id' => '8'));

        Musicas::create(
            array(
                'faixa' => 'No Caminho de Cuba ',
                'compositor' => '(Jaime Alem)',
                'letra' => '<p>Um sanfoneiro, no caminho de Cuba</p>
<p>Um zabumbeiro, no caminho de Cuba</p>
<p>Um triangueiro, no caminho de Cuba</p>
<p>L&aacute; um rumbeiro se chegou</p>
<p>Foi de congas no bai&atilde;o</p>
<p>Misturando la cumbia com xaxado</p>
<p>&nbsp;</p>
<p>Obatal&aacute;, no caminho de Cuba</p>
<p>Babaiuiai&ecirc;, no caminho de Cuba</p>
<p>Um canto negro, no caminho de Cuba</p>
<p>L&aacute; um moreno balan&ccedil;ou o meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Eu fui visitar uma ilha</p>
<p>Que fica no Mar das Antilhas</p>
<p>E l&aacute; conheci outra ra&ccedil;a americana</p>
<p>Tamb&eacute;m filha de Olorum</p>
',
                'creditos' => '
<p>Arranjo: Hector Garrido</p>
<p>Bateria: Adolfo &ldquo;Fofi&rdquo; Lancha</p>
<p>Baixo: Julio Hernandez</p>
<p>Guitarra: Ren&eacute; Toledo</p>
<p>Piano Fender: Luis de la Torre</p>
<p>Percuss&atilde;o: Oscar Salas</p>
<p>Trumpete: Tony Concepcion e John Giorginni</p>
<p>Sax tenor: Ed Calle</p>
<p>Sax bar&iacute;tono: Ed Maina</p>
<p>Trombone: Kevin Williams</p>
<p>Acordeom: Dominguinhos e Severo</p>
<p>Tri&acirc;ngulo: Sidinho</p>
<p>Vocais: Jackie Molinary, Camelia Torres, Yvette Barge, Xavier Oliva</p>
<p>Arranjo do vocal: Jaime Alem</p>
',
                'faixa_mp3' => '06_no_caminho_de_cuba.mp3',
                'faixa_ogg' => '06_no_caminho_de_cuba.ogg',
                'disco_id' => '8'));

        Musicas::create(
            array(
                'faixa' => 'Anjo do Prazer',
                'compositor' => '(Tadeu Mathias/Jaguar)',
                'letra' => '<p>Olha bem, nego, nesse meu jeitinho</p>
<p>De dan&ccedil;ar chorinho, de dan&ccedil;ar forr&oacute;</p>
<p>De brincadeira, l&aacute; na gafieira</p>
<p>Varo a noite inteira, gosto de um xod&oacute;</p>
<p>&nbsp;</p>
<p>Tiro de letra um bolero, um tango</p>
<p>Um xaxado, um mambo</p>
<p>Mando bem no p&eacute;</p>
<p>Tenho estampado aqui no meu rosto</p>
<p>Sou pra qualquer gosto, sou de A e B</p>
<p>&nbsp;</p>
<p>Anjo da noite, bandido</p>
<p>Na prata despido</p>
<p>Cambista do prazer</p>
<p>&nbsp;</p>
<p>Mas creia, nego</p>
<p>Que me dou, me rendo</p>
<p>Viro rosa, sendo s&oacute; de um beija-flor</p>
<p>Se voc&ecirc; vem, amor, basta um desejo</p>
<p>&nbsp;</p>
<p>Nego, sou lampejo</p>
<p>Nego, sou festejo</p>
<p>Nego, s&oacute; me vejo</p>
<p>Um buqu&ecirc; de amor</p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Jorge Degas</p>
<p>Guitarra: Zeppa Souza</p>
<p>Percuss&atilde;o: Sidinho</p>
<p>Trumpete: Bidinho e Nilton Rodrigues</p>
<p>Sax alto: Leo Gandelman</p>
<p>Sax tenor: Marcelo</p>
<p>Trombone: Roberto Marques</p>
<p>Pandeiro/tri&acirc;ngulo: Zizinho</p>
<p>Tamborim/ganz&aacute;: Elizeu</p>
<p>Tamborim/agog&ocirc;: Trambique</p>
<p>Tamborim: Luna e Gordinho</p>
',
                'faixa_mp3' => '07_anjo_do_prazer.mp3',
                'faixa_ogg' => '07_anjo_do_prazer.ogg',
                'disco_id' => '8'));

        Musicas::create(
            array(
                'faixa' => 'Equilibrando os Planos',
                'compositor' => '(Altay Velloso)',
                'letra' => '<p>Onde meus p&eacute;s estiverem</p>
<p>A&iacute; estar&aacute; minha raiz</p>
<p>Pra me sustentar, pra me erguer, me lan&ccedil;ar</p>
<p>Nas asas do vento, da chuva e do sol</p>
<p>Quando meu ch&atilde;o se abala</p>
<p>Estremece &eacute; a minha raiz</p>
<p>Sacudindo os galhos, os frutos e os talos</p>
<p>Que s&oacute; a lucidez j&aacute; me quis</p>
<p>&nbsp;</p>
<p>E quando o meu &oacute;dio &eacute; viril</p>
<p>E meu amor &eacute; ardente</p>
<p>Ou minha calma nervosa</p>
<p>Minha ira prudente</p>
<p>S&atilde;o as asas da vida equilibrando os planos</p>
<p>&nbsp;</p>
<p>E quando minha voz faz quest&atilde;o</p>
<p>De te dar meu segredo</p>
<p>E o meu cora&ccedil;&atilde;o revelar meus desejos</p>
<p>S&atilde;o os palcos da vida levantando os panos</p>
<p>&nbsp;</p>
<p>Onde a raz&atilde;o me levar</p>
<p>Sob o ch&atilde;o estar&aacute; minha raiz</p>
<p>Pra me fortalecer, pra me fortificar</p>
<p>Romper, perdoar ou calar</p>
<p>Se um dia meu sol se esconder</p>
<p>&Eacute; que a noite tamb&eacute;m vive em mim</p>
<p>E a lua vir&aacute; pra alternar minhas mar&eacute;s</p>
<p>As estrelas guiar&atilde;o meus p&eacute;s</p>
<p>&nbsp;</p>
<p>E quando o que em mim &eacute; sagrado</p>
<p>Me torna profano</p>
<p>&Eacute; que a n&uacute;ncia vida me quer mais cigano</p>
<p>&Eacute; que a luz dessa noite me quer mais clareza</p>
<p>&nbsp;</p>
<p>Nas veias do mundo eu vou sangue</p>
<p>Alimenta e eu vou coragem</p>
<p>As estradas da vida, uma eterna viagem</p>
<p>E a&iacute; se revela minha natureza, minha natureza...</p>
',
                'creditos' => '
<p>Arranjo e guitarra: Zeppa Souza</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Jorj&atilde;o</p>
<p>Percuss&atilde;o: Mazzola</p>
',
                'faixa_mp3' => '08_equilibrando_os_planos.mp3',
                'faixa_ogg' => '08_equilibrando_os_planos.ogg',
                'disco_id' => '8'));

        Musicas::create(
            array(
                'faixa' => 'Sambai&atilde;ozar',
                'compositor' => '(Pinto do Acordeom)',
                'letra' => '<p>Meu Rio de Janeiro a gente te adora</p>
<p>Mesmo sendo de fora tem que acostumar</p>
<p>Mulata desfilando em Copacabana</p>
<p>Todo fim de semana, vamo forrozar</p>
<p>&nbsp;</p>
<p>A gente d&aacute; um duro pra ganhar dinheiro</p>
<p>E gastar com sanfoneiro e tomar banho de mar</p>
<p>A noite carioca deixa a gente louco</p>
<p>Mesmo passando sufoco ningu&eacute;m quer sair de l&aacute;</p>
<p>&nbsp;</p>
<p>O Corcovado nos espera de bra&ccedil;os abertos</p>
<p>&Eacute; um sonho certo</p>
<p>A gente acorda pra sonhar</p>
<p>O Rio de Janeiro se mistura com zabumba</p>
<p>Com cu&iacute;ca, com pandeiro pra sambai&atilde;ozar</p>
',
                'creditos' => '
<p>Arranjo e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Jorj&atilde;o</p>
<p>Guitarra: Zeppa Souza</p>
<p>Percuss&atilde;o: Sidinho</p>
<p>Acordeom: Dominguinhos e Severo</p>
<p>Trompete: Bidinho e Nilton Rodrigues</p>
<p>Sax alto: Leo Gandelman</p>
<p>Sax tenor: Marcelo</p>
<p>Trombone: Roberto Marques</p>
<p>Pandeiro: Zizinho</p>
<p>Cu&iacute;ca/agog&ocirc;: Ov&iacute;dio</p>
',
                'faixa_mp3' => '09_sambaiaozar.mp3',
                'faixa_ogg' => '09_sambaiaozar.ogg',
                'disco_id' => '8'));

        Musicas::create(
            array(
                'faixa' => 'P&aacute;tria Amada',
                'compositor' => '(Carlos Fernando)',
                'letra' => '<p>Vamos colocar na m&atilde;o do &iacute;ndio</p>
<p>Os bot&otilde;es da inform&aacute;tica</p>
<p>Vamos preparar com raio laser</p>
<p>Uma grande feijoada</p>
<p>&nbsp;</p>
<p>Ela tem futuro</p>
<p>Tem, tem, tem</p>
<p>Ela &eacute; o Brasil</p>
<p>Sil, sil, sil</p>
<p>Um surfista lindo a caminho do ano dois mil</p>
<p>&nbsp;</p>
<p>Vem, vem ver, P&aacute;tria Amada</p>
<p>Mistura tuas cores</p>
<p>P&otilde;e o p&eacute; na nova estrada</p>
<p>&nbsp;</p>
<p>Mistura pra ver como &eacute;</p>
<p>Mistura pra ver se d&aacute; p&eacute;</p>
<p>Mistura pra ver como &eacute;</p>
<p>Mistura pra ver se d&aacute; p&eacute;</p>
<p>&nbsp;</p>
<p>O riso, a dor, o canto</p>
<p>O arco-&iacute;ris da paix&atilde;o</p>
<p>A fantasia nua</p>
<p>Da imagem na&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo e DX-7: Eduardo Souto Neto</p>
<p>Arranjo de percuss&atilde;o: Mazzola</p>
<p>Bateria: Elber Bedaque</p>
<p>Baixo: Jorj&atilde;o</p>
<p>Guitarra: Zeppa Souza</p>
<p>Trompete: Bidinho e Nilton Rodrigues</p>
<p>Trombone: Roberto Marques</p>
<p>Sax alto: Leo Gandelman</p>
<p>Sax tenor: Marcelo</p>
<p>Percuss&atilde;o Lin MacLine: Mazzola</p>
<p>Cu&iacute;ca: Ov&iacute;dio</p>
<p>Ganz&aacute;: Wilson Canegal</p>
<p>Tamborim: Luna e Eliseu</p>
<p>Caixa/tamborim: Trambique</p>
<p>Surdo: Gordinho</p>
<p>Vocais: Regininha, Luna Messina, Cl&aacute;udia Telles, Jurema, Marcio, Tadeu Mathias, Ana L&uacute;cia, Hilton</p>
',
                'faixa_mp3' => '10_patria_amada.mp3',
                'faixa_ogg' => '10_patria_amada.ogg',
                'disco_id' => '8'));

        Musicas::create(
            array(
                'faixa' => 'Remexer',
                'compositor' => '(Luiz Caldas / Carlinhos Brown)',
                'letra' => '<p>Fugindo da dor</p>
<p>Sentindo o calor</p>
<p>Preparando um ritual</p>
<p>No meio desse ti-ti-ti</p>
<p>Levantando o astral</p>
<p>&nbsp;</p>
<p>Pintando essa cor</p>
<p>Mem&oacute;ria de amor</p>
<p>Armando o maior lual</p>
<p>E quem ver o c&eacute;u pode crer</p>
<p>Que n&atilde;o &eacute; nada normal</p>
<p>E quem ver o c&eacute;u pode crer</p>
<p>Que n&atilde;o &eacute; nada normal</p>
<p>&nbsp;</p>
<p>Tem um mist&eacute;rio que a gente sempre quer saber</p>
<p>Constela&ccedil;&atilde;o de Orion</p>
<p>Seu tom, seu batom no meu som</p>
<p>Anormal (sensual)</p>
<p>Transa legal, coisa e tal</p>
<p>Anormal (sensual)</p>
<p>Transa legal, coisa e tal</p>
<p>&nbsp;</p>
<p>Foi assim que eu vi voc&ecirc;</p>
<p>Remexer</p>
<p>Foi assim que eu vi voc&ecirc;</p>
<p>Remexer</p>
',
                'creditos' => '
<p>Arranjo e teclados Simons: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria Yamaha: T&eacute;o</p>
<p>Contrabaixo: Siz&atilde;o</p>
<p>Viol&otilde;es: Zeppa Souza e Pipiu</p>
<p>Percuss&atilde;o</p>
<p>Congas: Repolho</p>
<p>Bong&ocirc;: Firmino</p>
<p>Trompete: Nilton Rodrigues e Don</p>
<p>Trombone: Mois&eacute;s</p>
<p>Sax tenor: Marcelo Neves</p>
<p>Vocal: Jurema, Chico Pupo, Viviane, Pipiu, Nair C&acirc;ndia, Betina, Tadeu Mathias e Zeppa Souza</p>
',
                'faixa_mp3' => '01_remexer.mp3',
                'faixa_ogg' => '01_remexer.ogg',
                'disco_id' => '9'));

        Musicas::create(
            array(
                'faixa' => 'S&oacute; se For a Dois',
                'compositor' => '(Rog&eacute;rio Meanda / Cazuza)',
                'letra' => '<p>Aos gurus da &Iacute;ndia</p>
<p>E aos judeus da Palestina</p>
<p>Aos &iacute;ndios da Am&eacute;rica Latina</p>
<p>E aos brancos da &Aacute;frica do Sul</p>
<p>&nbsp;</p>
<p>O mundo &eacute; azul</p>
<p>Qual &eacute; a cor do amor</p>
<p>O meu sangue &eacute; negro</p>
<p>Branco, amarelo e vermelho</p>
<p>&nbsp;</p>
<p>Aos pernambucanos</p>
<p>E aos cubanos de Miami</p>
<p>Aos americanos russos</p>
<p>Armando os seus planos</p>
<p>&nbsp;</p>
<p>Ao povo da China</p>
<p>E o que a hist&oacute;ria ensina</p>
<p>Aos jogos, aos dados</p>
<p>Que inventaram a humanidade</p>
<p>&nbsp;</p>
<p>As possibilidades de felicidade</p>
<p>S&atilde;o ego&iacute;stas meu amor</p>
<p>Viver a liberdade</p>
<p>Amar de verdade</p>
<p>S&oacute; se for a dois</p>
<p>&Eacute;, s&oacute; a dois</p>
<p>&nbsp;</p>
<p>Aos filhos de Gandhi</p>
<p>Morrendo de fome</p>
<p>Aos filhos de Cristo</p>
<p>Cada vez mais ricos</p>
<p>&nbsp;</p>
<p>O beijo do soldado em sua namorada</p>
<p>Seja pra onde for</p>
<p>Depois da grande noite</p>
<p>Vai esconder a cor das flores</p>
<p>E mostrar a dor</p>
',
                'creditos' => '
<p>Arranjo e teclados: J&uacute;lio Cesar</p>
<p>Bateria Yamaha: T&eacute;o</p>
<p>Contrabaixo: D&eacute;cio</p>
<p>Guitarra: Pisca</p>
<p>Tumbadora: Geraldo Oliveira</p>
<p>Tenor: Jos&eacute; Carlos Machado</p>
<p>Trompete: Marcio Montarroyos, Paulinho Martins e Alceb&iacute;ades Spinola</p>
<p>Sax bar&iacute;tono: Aurino de Oliveira</p>
<p>Sax alto: Leo Gandelman</p>
',
                'faixa_mp3' => '02_so_se_for_a_dois.mp3',
                'faixa_ogg' => '02_so_se_for_a_dois.ogg',
                'disco_id' => '9'));

        Musicas::create(
            array(
                'faixa' => 'Sonho de Uma Noite de Ver&atilde;o',
                'compositor' => '(Dominguinhos / Jorge Mautner)',
                'letra' => '<p>Voc&ecirc; &eacute; tudo o que eu sonhei</p>
<p>Meu cora&ccedil;&atilde;o</p>
<p>Felicidade &eacute; ter voc&ecirc;</p>
<p>Voc&ecirc; &eacute; um anjo, eu bem sei</p>
<p>Que tem a luz</p>
<p>Que me seduz</p>
<p>Com o supremo dom do veneno</p>
<p>No prazer</p>
<p>&nbsp;</p>
<p>Numa noite de ver&atilde;o</p>
<p>Eu sonhei que voei no azul</p>
<p>E que quase esbarrei</p>
<p>Nas estrelas do Cruzeiro do Sul</p>
<p>&nbsp;</p>
<p>Na beleza da tristeza</p>
<p>Refletida em seu olhar</p>
<p>Aprendi a te reconhecer</p>
<p>E at&eacute; mesmo a te desconhecer</p>
<p>Te perder e te reencontrar</p>
<p>No labirinto de tudo o que sinto</p>
<p>&nbsp;</p>
<p>No sonho que cantando</p>
<p>Vou tentando revelar</p>
<p>No sonho que cantando</p>
<p>Vou tentando revelar</p>
',
                'creditos' => '
<p>Arranjo de base e Yamaha CP 70: Cesar Camargo Mariano</p>
<p>Arranjo de cordas: Chiquinho de Moraes</p>
<p>Contrabaixo ac&uacute;stico: Sandrino Santoro</p>
<p>Violas: Frederick Stephany, Arlindo Penteado, Hindenburgo Pereira e Marie Springuel</p>
<p>Violinos: Alfredo Vidal, Jos&eacute; da Silva, Paschoal Perrotta, Jo&atilde;o Daltro, Walter Hack, Carlos Eduardo Hack, Michel Bessler, Aizik Geller, Bernardo Bessler, Francisco Perrotta e Luiz Carlos Marques</p>
<p>Cellos: Alceu Reis, Luiz Fernando Zamith, Jorge Ranewsky e Marie Bernard</p>
',
                'faixa_mp3' => '03_sonho_de_uma_noite_de_verao.mp3',
                'faixa_ogg' => '03_sonho_de_uma_noite_de_verao.ogg',
                'disco_id' => '9'));

        Musicas::create(
            array(
                'faixa' => 'Odil&ecirc;, Odil&aacute;',
                'compositor' => '(Jo&atilde;o Bosco / Martinho da Vila) Participa&ccedil;&atilde;o Especial: <strong>Jo&atilde;o Bosco</strong>',
                'letra' => '<p>Odil&ecirc;, Odil&aacute;</p>
<p>Que que vem fazer aqui meu irm&atilde;o</p>
<p>Vim sambar</p>
<p>&Ocirc;dil&ecirc;, &Ocirc;dil&aacute;</p>
<p>Que que vem fazer aqui meu irm&atilde;o</p>
<p>Vim sambar, oba</p>
<p>&nbsp;</p>
<p>Entra na corrente</p>
<p>Corpo, mente</p>
<p>Cora&ccedil;&atilde;o, pulm&atilde;o</p>
<p>Pra junto com a gente</p>
<p>Viajar na energia-som</p>
<p>Quem veio de longe atravessou raio e trov&atilde;o</p>
<p>Pra cair no samba e receber a vibra&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Com a negrada do Harlem</p>
<p>Jesus Cristo tamb&eacute;m vem</p>
<p>Pra sair do transe s&oacute; com o sino de Bel&eacute;m</p>
<p>Quem faz romaria e prociss&atilde;o samba tamb&eacute;m</p>
<p>E quem t&aacute; com a gente</p>
<p>T&aacute; com o povo do al&eacute;m</p>
<p>&nbsp;</p>
<p>Quem samba se sobe tem comb&aacute;, tem gurufim</p>
<p>Teve um olho d&rsquo;&aacute;gua e um sorriso de marfim</p>
<p>Se volta beijada &eacute; pigmeu ou curumim</p>
<p>Vira um preto velho</p>
<p>Pra sambar com a gente assim</p>
<p>&nbsp;</p>
<p>Preta velha bate p&eacute;</p>
<p>Bate colher, levanta p&oacute;</p>
<p>D&aacute; marafo pro Odil&ecirc; que solta logo seu gog&oacute;</p>
<p>Odil&aacute; de madrugada nem sem viola t&aacute; s&oacute;</p>
<p>Pois t&aacute; com ax&eacute; da velha</p>
<p>Nega preta sua av&oacute;</p>
',
                'creditos' => '
<p>Arranjo e Yamaha CP 70: C&eacute;sar Camargo Mariano</p>
<p>Viol&atilde;o (Participa&ccedil;&atilde;o especial): Jo&atilde;o Bosco</p>
<p>Contrabaixo: Nico Assump&ccedil;&atilde;o</p>
<p>Percuss&atilde;o: Repolho</p>
<p>Surdo e teclados (efeitos): Mazzola</p>
<p>Vocal: Dinor&aacute;, Viviane, Karla dos Santos, Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Marcio Lott, Tufic e Copacabana</p>
',
                'faixa_mp3' => '04_odile_odila.mp3',
                'faixa_ogg' => '04_odile_odila.ogg',
                'disco_id' => '9'));

        Musicas::create(
            array(
                'faixa' => 'Boca do Bal&atilde;o',
                'compositor' => '(Moraes Moreira / Zeca Barreto / Fred G&oacute;es)',
                'letra' => '<p>Na cidade grande</p>
<p>Por mais que eu ande</p>
<p>Ainda me espanto</p>
<p>Quando ou&ccedil;o uma explos&atilde;o</p>
<p>&nbsp;</p>
<p>L&aacute; no interior sempre era S&atilde;o Jo&atilde;o</p>
<p>L&aacute; no interior sempre era S&atilde;o Jo&atilde;o</p>
<p>&nbsp;</p>
<p>Viva S&atilde;o Jo&atilde;o</p>
<p>Meu carneirinho</p>
<p>Como te esperei</p>
<p>Ano inteirinho</p>
<p>&nbsp;</p>
<p>Ao p&eacute; da fogueira</p>
<p>Madeira, velame</p>
<p>Que o nosso amor inflame a noite inteira</p>
<p>Na esteira ou no ch&atilde;o</p>
<p>A gente se esquenta</p>
<p>E arrebenta a boca do bal&atilde;o</p>
',
                'creditos' => '
<p>Arranjo de base, metais e teclados: Lincoln Olivetti</p>
<p>Baixo: Fernandinho</p>
<p>Metais: Marcio Montarroyos, Bidinho, Leo Gandelman e Zé Nogueira</p>
<p>Percussão: Ariovaldo</p>
<p>Surdo: Gordinho</p>
<p>Pandeiro: Mazzola</p>
<p>Castanhola: Chacal</p>
<p>Acordeom: Dominguinhos</p>
<p>Efeito de explosão: Barroso</p>

',
                'faixa_mp3' => '05_boca_do_balao.mp3',
                'faixa_ogg' => '05_boca_do_balao.ogg',
                'disco_id' => '9'));

        Musicas::create(
            array(
                'faixa' => 'Nen&eacute;m Mulher',
                'compositor' => '(Pinto do Acordeom)',
                'letra' => '<p>Nen&eacute;m, nen&eacute;m, nen&eacute;m</p>
<p>O que aconteceu?</p>
<p>T&atilde;o todos te querendo</p>
<p>Tu vem ficar mais eu</p>
<p>&Oacute; nen&eacute;m, nen&eacute;m, meu bem</p>
<p>Me d&aacute; teu cora&ccedil;&atilde;o</p>
<p>Que eu caso com voc&ecirc;</p>
<p>Nessa noite de ver&atilde;o</p>
<p>&nbsp;</p>
<p>Basta ver como estou</p>
<p>Enjeitado, sem amor</p>
<p>Vem depressa me abra&ccedil;ar</p>
<p>E por toda vida</p>
<p>Nunca mais nos separar</p>
',
                'creditos' => '
<p>Arranjo, DX-7 e acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Contrabaixo: Pipiu</p>
<p>Guitarra: Zeppa Souza</p>
<p>Percuss&atilde;o: Firmino</p>
',
                'faixa_mp3' => '06_nenem_mulher.mp3',
                'faixa_ogg' => '06_nenem_mulher.ogg',
                'disco_id' => '9'));

        Musicas::create(
            array(
                'faixa' => 'Chorando e Cantando',
                'compositor' => '(Geraldo Azevedo / Fausto Nilo)',
                'letra' => '<p>Quando fevereiro chegar</p>
<p>Saudade j&aacute; n&atilde;o mata a gente</p>
<p>A chama continua</p>
<p>No ar</p>
<p>O fogo vai deixar semente</p>
<p>A gente ri, a gente chora</p>
<p>Ai, ai, a gente chora</p>
<p>Fazendo a noite parecer um dia</p>
<p>Faz mais</p>
<p>Depois faz acordar cantando</p>
<p>Pra fazer e acontecer</p>
<p>Verdades e mentiras</p>
<p>Faz crer</p>
<p>Faz desacreditar de tudo</p>
<p>E depois</p>
<p>Depois amor, &ocirc;, &ocirc;, &ocirc;, &ocirc;</p>
<p>&nbsp;</p>
<p>Ningu&eacute;m, ningu&eacute;m ver&aacute;</p>
<p>O que eu sonhei</p>
<p>S&oacute; voc&ecirc;, meu amor</p>
<p>Ningu&eacute;m ver&aacute; o sonho</p>
<p>Que eu sonhei</p>
<p>&nbsp;</p>
<p>Um sorriso quando acordar</p>
<p>Pintado pelo sol nascente</p>
<p>Eu vou te procurar</p>
<p>Na luz</p>
<p>De cada olhar mais diferente</p>
<p>Tua chama me ilumina</p>
<p>Me faz</p>
<p>Virar um astro incandescente</p>
<p>Teu amor faz cometer loucuras</p>
<p>Faz mais</p>
<p>Depois faz acordar chorando</p>
<p>Pra fazer e acontecer</p>
<p>Verdades e mentiras</p>
<p>Faz crer</p>
<p>Faz desacreditar de tudo</p>
<p>E depois</p>
<p>Depois amor, &ocirc;, &ocirc;, &ocirc;, &ocirc;</p>
',
                'creditos' => '
<p>Arranjo: Chiquinho de Moraes</p>
<p>Bateria Yamaha: T&eacute;o</p>
<p>Contrabaixo: D&eacute;cio</p>
<p>Guitarra: Ricardo Silveira</p>
<p>DX-7 Mirage: Ant&ocirc;nio Adolfo</p>
<p>Sax: Paul Liberman</p>
<p>Harm&ocirc;nica (Gaita de boca): Maur&iacute;cio Einhorn</p>
<p>Violas: Frederick Stephany, Arlindo Penteado, Hindenburgo Pereira e Marie Christine</p>
<p>Cellos: Alceu Reis, Luiz Fernando Zamith, Jorge Ranewsky e Marie Bernard</p>
<p>Contrabaixo ac&uacute;stico: Sandrino Santoro</p>
<p>Violinos: Giancarlo Pareschi (spalla), Alfredo Vidal, Jos&eacute; da Silva, Paschoal Perrotta, Jo&atilde;o Daltro, Walter Hack, Carlos Eduardo Hack, Michel Bessler, Aizik Geller, Bernardo Bessler, Francisco Perrotta e Luiz Carlos Marques</p>
',
                'faixa_mp3' => '07_chorando_e_cantando.mp3',
                'faixa_ogg' => '07_chorando_e_cantando.ogg',
                'disco_id' => '9'));

        Musicas::create(
            array(
                'faixa' => 'Forr&oacute; Temperado',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Cabra pra voc&ecirc; entrar nesse forr&oacute;</p>
<p>Tem que pedir licen&ccedil;a</p>
<p>Tem que derramar suor</p>
<p>Tem que ser cabra macho</p>
<p>Ter um n&oacute; na goela</p>
<p>Botar fogo na panela</p>
<p>Queimar pra derreter</p>
<p>Al&eacute;m de se mexer</p>
<p>Ter sebo na canela</p>
<p>Ser como uma arruela</p>
<p>Quando a coisa arrochar</p>
<p>N&atilde;o vai desanimar</p>
<p>Quando o forr&oacute; esquenta</p>
<p>Cabra que n&atilde;o aguenta</p>
<p>Chama a mam&atilde;e pra mamar</p>
<p>&nbsp;</p>
<p>Mamar, mamar, mamar</p>
<p>Cabra que n&atilde;o aguenta</p>
<p>Chama a mam&atilde;e pra mamar</p>
<p>Mamar, mamar, mamar</p>
<p>Cabra que n&atilde;o aguenta</p>
<p>Chama a mam&atilde;e pra mamar</p>
<p>&nbsp;</p>
<p>Aqui s&oacute; entra mulher</p>
<p>Aqui s&oacute; entra homem</p>
<p>Se o cabra n&atilde;o tem nome</p>
<p>N&atilde;o &eacute; homem pra entrar</p>
<p>&Eacute; na entrada que se mostra o documento</p>
<p>Se voc&ecirc; n&atilde;o tem talento</p>
<p>N&atilde;o pode furruriar</p>
<p>Esse forr&oacute; &eacute; temperado na pimenta</p>
<p>Cabra que n&atilde;o aguenta</p>
<p>Chama a mam&atilde;e pra mamar</p>
',
                'creditos' => '
<p>Arranjo e DX-7: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Contrabaixo: Pipiu</p>
<p>Guitarra: Zeppa Souza</p>
<p>Percuss&atilde;o: Firmino</p>
<p>Acordeom: Marquinho</p>
<p>Sax tenor: Marcelo Neves</p>
<p>Trombone: Mois&eacute;s</p>
<p>Trompete: Paulinho Martins</p>
<p>Vocal: Marcio Lott, Ana L&uacute;cia, Nair C&acirc;ndia, Viviane, Jurema, Liliane, Jaime Alem, Chico Pupo e Paulo Valente</p>
',
                'faixa_mp3' => '08_forro_temperado.mp3',
                'faixa_ogg' => '08_forro_temperado.ogg',
                'disco_id' => '9'));

        Musicas::create(
            array(
                'faixa' => 'Vestido Suado',
                'compositor' => '(Tadeu Mathias)',
                'letra' => '<p>Quando sei de um forr&oacute;</p>
<p>Eu me mando pra l&aacute;</p>
<p>E descolo um moreno</p>
<p>Que seja bom de dan&ccedil;ar</p>
<p>Uma flor no cabelo</p>
<p>Um vestido de fita</p>
<p>Um batom encarnado</p>
<p>Que me faz mais bonita</p>
<p>&nbsp;</p>
<p>Quando sei de um forr&oacute;</p>
<p>Eu me mando pra l&aacute;</p>
<p>Vou gastando a chinela</p>
<p>At&eacute; o dia clarear</p>
<p>Se &eacute; pertinho ou distante</p>
<p>Eu n&atilde;o quero nem saber</p>
<p>O que eu quero &eacute; forrozar</p>
<p>Nos seus bra&ccedil;os debru&ccedil;ar</p>
<p>Hoje eu vou derreter</p>
<p>&nbsp;</p>
<p>E dan&ccedil;o prum lado</p>
<p>Me lan&ccedil;o pro outro</p>
<p>&Eacute; um salto quebrado</p>
<p>Meu nego torto</p>
<p>O vestido suado</p>
<p>E o povo em coro</p>
<p>A alegria na sala</p>
<p>N&atilde;o d&aacute; lugar pro choro</p>
<p>O vestido suado</p>
<p>E o povo em coro</p>
<p>A alegria na sala</p>
<p>N&atilde;o d&aacute; lugar pro choro</p>
',
                'creditos' => '
<p>Arranjo e DX-7: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Contrabaixo: Pipiu</p>
<p>Guitarra: Zeppa Souza</p>
<p>Percuss&atilde;o: Firmino</p>
<p>Acordeom: Marquinho</p>
<p>Sax tenor: Marcelo Neves</p>
<p>Trombone: Mois&eacute;s</p>
<p>Trompete: Paulinho Martins</p>
<p>Vocal: Marcio Lott, Ana L&uacute;cia, Nair C&acirc;ndia, Viviane, Jurema, Liliane, Jaime Alem, Chico Pupo e Paulo Valente</p>
',
                'faixa_mp3' => '09_vestido_suado.mp3',
                'faixa_ogg' => '09_vestido_suado.ogg',
                'disco_id' => '9'));

        Musicas::create(
            array(
                'faixa' => 'Sai da Frente',
                'compositor' => '(Gonzaguinha)',
                'letra' => '<p>Mantenha a calma, a f&eacute; e a coragem</p>
<p>E traga a alma pra rua</p>
<p>Seja a alegria a guia</p>
<p>Conquiste o brilho do sol e da lua</p>
<p>&nbsp;</p>
<p>A ra&ccedil;a, a gra&ccedil;a, a pra&ccedil;a, a ta&ccedil;a</p>
<p>&Eacute; tudo coisa nossa</p>
<p>E seja na bossa</p>
<p>Seja na tro&ccedil;a</p>
<p>Me aperte e vamo nessa, meu bem</p>
<p>&nbsp;</p>
<p>Cora&ccedil;&atilde;o</p>
<p>O tambor</p>
<p>O tes&atilde;o</p>
<p>Vai subir</p>
<p>&Eacute; amor</p>
<p>&Eacute; raz&atilde;o</p>
<p>Sai da frente</p>
<p>Que a gente quer ser feliz</p>
<p>Quero mais</p>
<p>Muito mais</p>
<p>Muito mar</p>
<p>Muita paz</p>
<p>O prazer</p>
<p>Muito mel dessa flor se abrindo</p>
<p>No nosso pa&iacute;s</p>
',
                'creditos' => '
<p>Arranjo e Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Contrabaixo: Pipiu</p>
<p>Guitarra: Zeppa Souza</p>
<p>Percuss&atilde;o: Firmino</p>
<p>Repique: Trambique</p>
<p>Tamborim: Ney, Pedro, Nelson e Vivaldo</p>
<p>Sax tenor: Marcelo Neves</p>
<p>Trombone: Mois&eacute;s</p>
<p>Trompete: Don</p>
<p>Vocal: Fernando Adour, Chico Pupo, Viviane, Pipiu, Nair C&acirc;ndia, Betina, Tadeu Mathias e Rosa Lobo</p>
',
                'faixa_mp3' => '10_sai_da_frente.mp3',
                'faixa_ogg' => '10_sai_da_frente.ogg',
                'disco_id' => '9'));

        Musicas::create(
            array(
                'faixa' => 'Caia na Real',
                'compositor' => '(Carlos Fernando / Eloísa Santos)',
                'letra' => '<p>Caia por cima de mim</p>
<p>Que esse frevo t&aacute; no tempo de arrepiar</p>
<p>Deixa pra l&aacute; o que &eacute; ruim</p>
<p>Bem juntinho de mim vamo rebentar</p>
<p>A solid&atilde;o, a extens&atilde;o de um perigo nuclear</p>
<p>O que &eacute; bom vai vingar</p>
<p>&nbsp;</p>
<p>Atr&aacute;s da lua, na terra, no fundo do mar</p>
<p>Aqui na rua o bloco vai gargalhar</p>
<p>E a multid&atilde;o cantando &ldquo;Vai raiar&rdquo;</p>
<p>Caia por cima de mim</p>
<p>Na hora H</p>
',
                'creditos' => '
<p>Arranjo e teclado: Lincoln Olivetti</p>
<p>Contrabaixo: Fernandinho</p>
<p>Surdo: Mazzola</p>
<p>Sax alto: Leo Gandelman</p>
<p>Tenor: Jos&eacute; Carlos Machado</p>
<p>Trompete: Alcides Spinola e Marcio Montarroyos</p>
<p>Vocal: Fernando Adour, Chico Pupo, Viviane, Pipiu, Nair C&acirc;ndia, Betina, Tadeu Mathias e Rosa Lobo</p>
',
                'faixa_mp3' => '11_caia_na_real.mp3',
                'faixa_ogg' => '11_caia_na_real.ogg',
                'disco_id' => '9'));

        Musicas::create(
            array(
                'faixa' => 'Ai de Mim',
                'compositor' => '(Luiz Caldas)',
                'letra' => '<p>O azul &eacute; prova dessa pomba paz</p>
<p>O preto &eacute; brilho e essa luz me faz</p>
<p>Sentir a rosa e namorar o espinho</p>
<p>Conseguir carinho, n&atilde;o sofrer jamais</p>
<p>&nbsp;</p>
<p>As cores brancas leves de algod&atilde;o</p>
<p>Vermelho sangue cresce minha paix&atilde;o</p>
<p>Eternidade, cravo de amargura</p>
<p>Vira uma pintura, pinta o cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Ai, ai, ai, tem d&oacute; de mim</p>
<p>Seja minha flor</p>
<p>Que eu serei o seu jardim</p>
<p>Ai, ai, ai, ai, tem d&oacute; de mim</p>
<p>Seja minha flor</p>
<p>Que eu serei o seu jardim</p>
<p>&nbsp;</p>
<p>No rosa-choque o seu batom lil&aacute;s</p>
<p>Sempre me instiga, mas n&atilde;o satisfaz</p>
<p>Me deixa louco como fica o caule</p>
<p>Quando a gente arranca a rosa branca da paz</p>
<p>&nbsp;</p>
<p>Um olho cego pode ver a mais</p>
<p>Um cora&ccedil;&atilde;o v&ecirc; at&eacute; por tr&aacute;s</p>
<p>A natureza me inspirou beleza</p>
<p>Pois ela &eacute; alteza no que sempre faz</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia, piano Yamaha, DX-7 e Mirage: Z&eacute; Am&eacute;rico Bastos</p>
<p>Guitarra e GR 700: Zeppa Souza</p>
<p>Baixo: Pipiu</p>
<p>Bateria: Elber Bedaque</p>
<p>Bongo e kik&oacute;: Firmino</p>
<p>Tri&acirc;ngulo e afox&eacute;: Camilo Mariano</p>
<p>Sax soprano: Marcelo Neves</p>
<p>Trombone: Mois&eacute;s</p>
',
                'faixa_mp3' => '01_ai_de_mim.mp3',
                'faixa_ogg' => '01_ai_de_mim.ogg',
                'disco_id' => '10'));

        Musicas::create(
            array(
                'faixa' => 'Folia Brasileira',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>Tem que ter molejo, meu bem</p>
<p>Tem que ter tempero, meu bem</p>
<p>Se agarrar com jeito</p>
<p>Se esfregar direito</p>
<p>Nesse vai e vem</p>
<p>&nbsp;</p>
<p>O forr&oacute; tem que ser agarradinho</p>
<p>Tem que ser no escurinho</p>
<p>Tem que se aproveitar</p>
<p>O forr&oacute; &eacute; uma folia brasileira</p>
<p>S&oacute; acaba a brincadeira</p>
<p>Quando o dia clarear</p>
<p>&nbsp;</p>
<p>Tem que ter</p>
<p>Perna batendo com perna</p>
<p>Coxa ro&ccedil;ando com coxa</p>
<p>No umbigo e no pesco&ccedil;o</p>
<p>&nbsp;</p>
<p>Tem que ter</p>
<p>Um ro&ccedil;a-ro&ccedil;a toda hora</p>
<p>Um pra dentro, outro pra fora</p>
<p>Pra gente sentir o gosto</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Marcos Farias</p>
<p>Maraca: Losa</p>
<p>Tri&acirc;ngulo e cicerro: Tinda</p>
<p>Zabumba: C&iacute;cero e Firmino</p>
<p>Guitarra e vocal: Zeppa Souza</p>
<p>Baixo: Pipiu</p>
<p>Bateria: Elber Bedaque</p>
<p>Pandeiro: Zizinho</p>
<p>Tri&acirc;ngulo, surdo, bongo e pandeiro: Firmino</p>
<p>Trompetes: Paulinho Martins, Paulinho Roberto e Don</p>
<p>Sax tenor: Marcelo Neves</p>
<p>Sax alto: Z&eacute; Carlos</p>
<p>Trombone: Mois&eacute;s</p>
<p>Vocal: Jurema, Jussara, Betina, Regininha, Marcio Lott, Hilton Assun&ccedil;&atilde;o, Jaime Alem, Nair C&acirc;ndia e Jurema C&acirc;ndia</p>
',
                'faixa_mp3' => '02_folia_brasileira.mp3',
                'faixa_ogg' => '02_folia_brasileira.ogg',
                'disco_id' => '10'));

        Musicas::create(
            array(
                'faixa' => 'Vem Ficar Comigo',
                'compositor' => '(Nando Cordel / Dominguinhos)',
                'letra' => '<p>Vem ficar comigo</p>
<p>Vem ser a luz da minha estrada</p>
<p>Vivo esperando esse c&eacute;u para brilhar</p>
<p>Teu sorriso lindo</p>
<p>A tua boca doce sempre</p>
<p>Eu necessito do teu amor</p>
<p>Pra me enfeitar</p>
<p>&nbsp;</p>
<p>Vem brincar comigo</p>
<p>Vem cuidar de mim</p>
<p>S&oacute; teu para&iacute;so &eacute; quem me faz viver feliz</p>
<p>N&atilde;o me deixe solta</p>
<p>Posso me perder</p>
<p>De tudo no mundo</p>
<p>O que eu mais quero &eacute; ter voc&ecirc;</p>
',
                'creditos' => '
<p>Arranjo de cordas, piano Yamaha e Mirage: Z&eacute; Am&eacute;rico Bastos</p>
<p>Arranjo de base: Hilton Assun&ccedil;&atilde;o</p>
<p>Baixo: Pipiu</p>
<p>Bateria: Elber Bedaque</p>
<p>Guitarra: Zeppa Souza</p>
<p>Xique-xique e pandeiro: Zeppa Souza</p>
<p>Acordeom: Dominguinhos</p>
',
                'faixa_mp3' => '03_vem_ficar_comigo.mp3',
                'faixa_ogg' => '03_vem_ficar_comigo.ogg',
                'disco_id' => '10'));

        Musicas::create(
            array(
                'faixa' => 'Quero Mais',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>O frevo t&aacute; no sangue do povo</p>
<p>No morro, na rua</p>
<p>O frevo deixa a gente louco</p>
<p>Leve, afoito</p>
<p>Ati&ccedil;a a gente se amar</p>
<p>N&atilde;o d&aacute; pra segurar</p>
<p>N&atilde;o d&aacute; pra segurar</p>
<p>Ati&ccedil;a a gente se amar</p>
<p>N&atilde;o d&aacute; pra segurar</p>
<p>N&atilde;o d&aacute; pra segurar</p>
<p>&nbsp;</p>
<p>Quero mais</p>
<p>Quero mais</p>
<p>Pra me derreter</p>
<p>Quero mais</p>
<p>Quero mais</p>
<p>Fazer com voc&ecirc;</p>
<p>Quero mais</p>
<p>Quero mais</p>
<p>Toda energia</p>
<p>&Ecirc;ta coisa boa t&aacute; nessa folia</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Guitarra e vocal: Zeppa Souza</p>
<p>Baixo: Pipiu</p>
<p>Bateria: Elber Bedaque</p>
<p>Tri&acirc;ngulo, surdo, bongo e pandeiro: Firmino</p>
<p>Trompetes: Paulinho Martins, Paulinho Roberto e Don</p>
<p>Sax tenor: Marcelo Neves</p>
<p>Sax alto: Z&eacute; Carlos</p>
<p>Trombone: Mois&eacute;s</p>
<p>Pandeiro: Zizinho</p>
<p>Acordeom: Dominguinhos</p>
<p>Guitarra baiana: Armandinho</p>
<p>Vocal: Jurema, Jussara, Betina, Regininha, Marcio Lott, Hilton Assun&ccedil;&atilde;o, Jaime Alem, Nair C&acirc;ndia e Jurema C&acirc;ndia</p>
',
                'faixa_mp3' => '04_quero_mais.mp3',
                'faixa_ogg' => '04_quero_mais.ogg',
                'disco_id' => '10'));

        Musicas::create(
            array(
                'faixa' => 'Ginga',
                'compositor' => '(Tadeu Mathias)',
                'letra' => '<p>&Eacute; o c&eacute;u, &eacute; o c&eacute;u, &eacute; o c&eacute;u</p>
<p>Essa ginga da gente &eacute; o c&eacute;u</p>
<p>&Eacute; o c&eacute;u, &eacute; o c&eacute;u, &eacute; o c&eacute;u</p>
<p>Essa ginga da gente &eacute; o c&eacute;u</p>
<p>&nbsp;</p>
<p>Ginga Brasil no balan&ccedil;o da rede</p>
<p>Remexe no remo do remador</p>
<p>De dia a feira &eacute; festa de rua</p>
<p>De noite na praia ciranda e amor</p>
<p>&nbsp;</p>
<p>Muita alegria ra&ccedil;a brasileira</p>
<p>Ginga que a gente j&aacute; miscigenou</p>
<p>O povo se lan&ccedil;a num vento nordeste</p>
<p>E &eacute; nessa dan&ccedil;a do povo que eu vou</p>
<p>&nbsp;</p>
<p>Olha a cintura (&eacute; ela)</p>
<p>Sente o chamego (&eacute; ela)</p>
<p>Subindo o morro (&eacute; ela)</p>
<p>&nbsp;</p>
<p>Maracatu (&eacute; ela)</p>
<p>Quem dan&ccedil;a lundu (&eacute; ela)</p>
<p>Pagode na favela (&eacute; ela)</p>
<p>&nbsp;</p>
<p>Rio de Janeiro (&eacute; ela)</p>
<p>Samba no p&eacute; (&eacute; ela)</p>
<p>E a brasileira (&eacute; ela)</p>
<p>&nbsp;</p>
<p>Que tem cor de canela (&eacute; ela)</p>
<p>Gilberto Gil (&eacute; ela)</p>
<p>L&aacute; da Bahia (&eacute; ela)</p>
<p>&Eacute; ela, &eacute; ela, &eacute; ela</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia, piano Yamaha e DX-7: Z&eacute; Am&eacute;rico Bastos</p>
<p>Guitarra e vocal: Zeppa Souza</p>
<p>Baixo: Pipiu</p>
<p>Bateria e percuss&atilde;o: Elber Bedaque</p>
<p>Congas LP e percuss&atilde;o: Firmino</p>
<p>Trompetes: Paulinho Martins, Paulinho Roberto e Don</p>
<p>Sax tenor: Marcelo Neves</p>
<p>Sax alto: Z&eacute; Carlos</p>
<p>Trombone: Mois&eacute;s</p>
<p>Vocal: Jurema, Jussara, Betina, Regininha, Marcio Lott, Hilton Assun&ccedil;&atilde;o, Jaime Alem, Nair C&acirc;ndia e Jurema C&acirc;ndia</p>
',
                'faixa_mp3' => '05_ginga.mp3',
                'faixa_ogg' => '05_ginga.ogg',
                'disco_id' => '10'));

        Musicas::create(
            array(
                'faixa' => 'N&oacute;s Destinos',
                'compositor' => '(Moraes Moreira)',
                'letra' => '<p>Na pessoa de Jo&atilde;o</p>
<p>Muito milho no paiol</p>
<p>Quando inverna a esta&ccedil;&atilde;o</p>
<p>Natal cidade do sol</p>
<p>Natal cidade do sol</p>
<p>&nbsp;</p>
<p>Sim, somos da mesma laia</p>
<p>Que nem castanha e caju</p>
<p>At&eacute; l&aacute; naquela praia</p>
<p>De Atalaia &agrave; Aracaju</p>
<p>&nbsp;</p>
<p>Sou nordestina</p>
<p>E aprendi desde menina</p>
<p>Ter orgulho dessa gente</p>
<p>Que um dia independente</p>
<p>Vai viver, voc&ecirc;s ver&atilde;o</p>
<p>&nbsp;</p>
<p>Cabra-da-peste no sentido mais profundo</p>
<p>Ser um cidad&atilde;o do mundo</p>
<p>Luiz Gonzaga</p>
<p>Padim Ci&ccedil;o e Lampi&atilde;o</p>
<p>&nbsp;</p>
<p>Quero mais n&atilde;o</p>
<p>Viver em guerra ou no abandono</p>
<p>Em muita terra e pouco dono</p>
<p>Viver em guerra ou no abandono</p>
<p>Em muita terra e pouco dono</p>
<p>&nbsp;</p>
<p>&Eacute;s a minha Fortaleza</p>
<p>Forte beleza combina</p>
<p>Verdes mares correnteza</p>
<p>Da paisagem nordestina</p>
<p>Da paisagem nordestina</p>
<p>&nbsp;</p>
<p>Bom Alah das Alagoas</p>
<p>Ata ou desata esse n&oacute;</p>
<p>Da cabe&ccedil;a das pessoas</p>
<p>M&atilde;o na massa em Macei&oacute;</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia, piano, DX-7 e Mirage: Z&eacute; Am&eacute;rico Bastos</p>
<p>Guitarra e GR 700: Zeppa Souza</p>
<p>Bateria: Elber Bedaque</p>
<p>Tri&acirc;ngulo, kik&oacute; e afox&eacute;: Firmino</p>
<p>Acordeom: Dominguinhos</p>
<p>Bandolim: Armandinho</p>
',
                'faixa_mp3' => '06_nos_destinos.mp3',
                'faixa_ogg' => '06_nos_destinos.ogg',
                'disco_id' => '10'));

        Musicas::create(
            array(
                'faixa' => 'Rumbaiana',
                'compositor' => '(Tadeu Mathias)',
                'letra' => '<p>Vou fazer uma rumbaiana</p>
<p>Como a minha irm&atilde; cigana me ensinou</p>
<p>Uma dan&ccedil;a bonita e mundana</p>
<p>Vai ganhar todo o seu amor</p>
<p>&nbsp;</p>
<p>Mexe, mexe</p>
<p>Mexe de prazer</p>
<p>Ao som da rumba quero ver voc&ecirc; mexer</p>
<p>Mexe, mexe</p>
<p>Mexe de prazer</p>
<p>Ao som da rumba quero ver voc&ecirc; mexer</p>
<p>&nbsp;</p>
<p>Quero ver voc&ecirc; dan&ccedil;ando coladinho</p>
<p>Teu suor vem me molhando o corpo todo</p>
<p>Tu e eu, ai, eu e tu agarradinho</p>
<p>E todo mundo escorregando nesse lodo</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Guitarra: Zeppa Souza</p>
<p>Bateria: Elber Bedaque</p>
<p>Congas LP, bongo, guiro, klave, cicerro e timbales LP: Firmino</p>
<p>Trompetes: Paulinho Martins, Paulinho Roberto e Don</p>
<p>Sax tenor: Marcelo Neves</p>
<p>Trombone: Mois&eacute;s</p>
<p>Sax alto: Z&eacute; Carlos</p>
<p>Vocal: Elba Ramalho</p>
',
                'faixa_mp3' => '07_rumbaiana.mp3',
                'faixa_ogg' => '07_rumbaiana.ogg',
                'disco_id' => '10'));

        Musicas::create(
            array(
                'faixa' => 'Lembrando Voc&ecirc;',
                'compositor' => '(Sergio Souto / Moacyr Luz)',
                'letra' => '<p>L&aacute;, quando eu ouvia o canto do albatroz</p>
<p>Eu l&aacute; sabia o que era um albatroz</p>
<p>O que eu mesmo queria era lembrar voc&ecirc;</p>
<p>O teu cheirinho de flor que nasce do ip&ecirc;</p>
<p>&nbsp;</p>
<p>Sim, eu te perdi como quem perde a voz</p>
<p>E vi secar as &aacute;guas do or&oacute;s</p>
<p>O sal do mar, a flor-de-lis</p>
<p>Um beija-flor</p>
<p>&nbsp;</p>
<p>Vi meu cora&ccedil;&atilde;o sofrer</p>
<p>Eu vi tamb&eacute;m o que eu nem pude crer</p>
<p>&Eacute; que o pranto quando molha</p>
<p>Desce at&eacute; manchar</p>
<p>A seca l&aacute; fora n&atilde;o quer mais armar</p>
<p>&nbsp;</p>
<p>E eu lembrando voc&ecirc;</p>
<p>Ai, essa saudade atroz</p>
<p>Se um de n&oacute;s aparecer</p>
<p>Abro a mala dos len&ccedil;&oacute;is</p>
',
                'creditos' => '
<p>Arranjo, piano Yamaha, DX-7 e Mirage: Z&eacute; Am&eacute;rico Bastos</p>
<p>Guitarra e GR 700: Zeppa Souza</p>
<p>Bateria e afox&eacute;: Elber Bedaque</p>
<p>Baixo: Pipiu</p>
<p>Reco-reco, kik&oacute; e woodblock: Firmino</p>
<p>Flauta: Marcelo Neves</p>
<p>Trompete: Paulinho Martins</p>
<p>Trombone: Mois&eacute;s</p>
<p>Acordeom: Dominguinhos</p>
',
                'faixa_mp3' => '08_lembrando_voce.mp3',
                'faixa_ogg' => '08_lembrando_voce.ogg',
                'disco_id' => '10'));

        Musicas::create(
            array(
                'faixa' => 'Corcel na Tempestade',
                'compositor' => '(Adauto Magalha / Almir Guineto)',
                'letra' => '<p>Hoje meu cora&ccedil;&atilde;o &eacute; s&oacute; saudade</p>
<p>Vive adversidade</p>
<p>A tristeza mora em mim</p>
<p>Eu que j&aacute; senti felicidade</p>
<p>Vivo a dura realidade</p>
<p>Nosso amor chegou ao fim</p>
<p>&nbsp;</p>
<p>Com voc&ecirc; deixei a mocidade</p>
<p>No teu corpo a virgindade</p>
<p>O que &eacute; bom vive t&atilde;o pouco</p>
<p>&nbsp;</p>
<p>Deixo o meu corcel na tempestade</p>
<p>Galopando na saudade</p>
<p>Procurando por voc&ecirc;</p>
<p>Deixo o meu corcel na tempestade</p>
<p>Ando doida de saudade</p>
<p>De saudade de voc&ecirc;</p>
<p>&nbsp;</p>
<p>Meu amor n&atilde;o me esque&ccedil;a</p>
<p>N&atilde;o te esquecerei</p>
<p>Em muito sonho ainda</p>
<p>Eu te encontrarei</p>
',
                'creditos' => '
<p>Arranjo de cordas, DX-7 e Mirage (cordas): Z&eacute; Am&eacute;rico Bastos</p>
<p>Arranjo de base e viol&atilde;o Ovation: Hilton Assun&ccedil;&atilde;o</p>
<p>Baixo: Pipiu</p>
<p>Bateria: Elber Bedaque</p>
<p>Guitarra e GR 700: Zeppa Souza</p>
<p>Klave LP, xique-xique, sino e afox&eacute;: Firmino</p>
<p>Acordeom: Dominguinhos</p>
<p>Bandolim: Armandinho</p>
',
                'faixa_mp3' => '09_corcel_na_tempestade.mp3',
                'faixa_ogg' => '09_corcel_na_tempestade.ogg',
                'disco_id' => '10'));

        Musicas::create(
            array(
                'faixa' => 'Da Mesa pra Cama',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Depois do banho</p>
<p>Eu me perfumo e arrumo a cama</p>
<p>Porque quem ama</p>
<p>N&atilde;o escolhe hora pra brincar</p>
<p>&Eacute; t&atilde;o dif&iacute;cil um amor desse jeito, perfeito</p>
<p>Que &agrave;s vezes penso</p>
<p>Que um dia voc&ecirc; vai me deixar</p>
<p>&nbsp;</p>
<p>Mas quando voc&ecirc; me beija</p>
<p>Eu tamb&eacute;m lhe beijo</p>
<p>Mais aumenta o meu desejo</p>
<p>Esquentando meu cora&ccedil;&atilde;o</p>
<p>E esse molejo &eacute; voc&ecirc; quem me d&aacute;</p>
<p>Tem gracejo, um desmaio, um relampejo</p>
<p>&Eacute; um raio essa sensa&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Ent&atilde;o a gente se abra&ccedil;a</p>
<p>Se beija, rebeija</p>
<p>Vai vivendo nessa peleja</p>
<p>Fugindo da solid&atilde;o</p>
<p>&nbsp;</p>
<p>Que bom quando a gente se ama</p>
<p>Quando esse amor tem um qu&ecirc;</p>
<p>Assim &eacute; da mesa pra cama</p>
<p>Eu e voc&ecirc;</p>
',
                'creditos' => '
<p>Arranjo e piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Marcos Farias</p>
<p>Zabumba: C&iacute;cero</p>
<p>Tri&acirc;ngulo: Tinda</p>
<p>Maraca e agog&ocirc;: Losa</p>
<p>Guitarra e vocal: Zeppa Souza</p>
<p>Baixo: Pipiu</p>
<p>Bateria: Elber Bedaque</p>
<p>Pandeiro: Zizinho</p>
<p>Sax tenor: Marcelo Neves</p>
<p>Trombone: Mois&eacute;s</p>
<p>Trompete: Paulinho Martins</p>
<p>Vocal: Jurema, Jussara, Betina, Regininha, Marcio Lott, Hilton Assun&ccedil;&atilde;o, Jaime Alem, Nair C&acirc;ndia e Jurema C&acirc;ndia</p>
',
                'faixa_mp3' => '10_da_mesa_pra_cama.mp3',
                'faixa_ogg' => '10_da_mesa_pra_cama.ogg',
                'disco_id' => '10'));

        Musicas::create(
            array(
                'faixa' => 'Sina de Cigarra',
                'compositor' => '(Jackson do Pandeiro / Delmiro Ramos)',
                'letra' => '<p>Nasci com a sina de cigarra</p>
<p>Aonde eu chegar tem farra</p>
<p>&nbsp;</p>
<p>I&ecirc;, i&ecirc;, i&ecirc;i, nasci pra cantar eu cantarei</p>
<p>I&ecirc;, i&ecirc;, i&ecirc;i, nasci pra cantar eu cantarei</p>
<p>&nbsp;</p>
<p>Vive o pedreiro do prumo</p>
<p>A abelha do sumo</p>
<p>O pescador de anzol</p>
<p>&nbsp;</p>
<p>O campe&atilde;o da ta&ccedil;a</p>
<p>O camel&ocirc; da pra&ccedil;a</p>
<p>E eu canto forr&oacute;</p>
<p>&nbsp;</p>
<p><strong>Cora&ccedil;&atilde;o bateu</strong></p>
<p>(Jackson do Pandeiro / Ivo Martins)</p>
<hr class="space-letra-top-musicas">
<p>Cora&ccedil;&atilde;o bateu</p>
<p>Cora&ccedil;&atilde;o bateu</p>
<p>Cora&ccedil;&atilde;o bateu</p>
<p>Ele bate mais forte que eu</p>
<p>&nbsp;</p>
<p><strong>Competente demais</strong></p>
<p>(Jackson do Pandeiro / Valdemar Lima)</p>
<hr class="space-letra-top-musicas">
<p>Voc&ecirc; falou que era</p>
<p>Entendido demais</p>
<p>Competente demais</p>
<p>Pago pra ver o que &eacute; que voc&ecirc; faz</p>
<p>Eu pago pra ver o que &eacute; que voc&ecirc; faz</p>
<p>&nbsp;</p>
<p><strong>Mundo c&atilde;o</strong></p>
<p>(Jackson do Pandeiro / Rogeria Ribeiro)</p>
<hr class="space-letra-top-musicas">
<p>Eu n&atilde;o sei, n&atilde;o sei n&atilde;o</p>
<p>O que &eacute; que eu vou fazer</p>
<p>Pra continuar vivendo nesse mundo c&atilde;o</p>
<p>&nbsp;</p>
<p>Pra dar duro no batente</p>
<p>Saio as quatro da matina</p>
<p>Compro logo um jornal</p>
<p>Pra completar a rotina</p>
<p>Vejo crime e viol&ecirc;ncia</p>
<p>Tudo &eacute; patifaria</p>
<p>Fico com a cuca quente</p>
<p>L&aacute; se foi minha alegria</p>
<p>&nbsp;</p>
<p><strong>Cantiga da perua</strong></p>
<p>(Jackson do Pandeiro / Elias Soares)</p>
<hr class="space-letra-top-musicas">
<p>&Eacute; de pior a pior</p>
<p>&Eacute; de pior a pior</p>
<p>A cantiga da perua &eacute; uma s&oacute;</p>
<p>&nbsp;</p>
<p>Andam dizendo</p>
<p>Que o progresso vai chegar</p>
<p>Que a coisa vai melhorar</p>
<p>Quando o homem for pra lua</p>
<p>Mas a verdade crua</p>
<p>&Eacute; que a situa&ccedil;&atilde;o da vida</p>
<p>T&aacute; ficando parecida</p>
<p>&Agrave; cantiga da perua</p>
<p>&nbsp;</p>
<p>De tudo isso</p>
<p>O que mais me inquizila</p>
<p>&Eacute; o sujeito entrar na fila</p>
<p>Pra comprar o que n&atilde;o tem</p>
<p>Vai chegar tempo</p>
<p>Que a nossa rapaziada</p>
<p>Pra falar com a namorada</p>
<p>Entra na fila tamb&eacute;m</p>
<p>&nbsp;</p>
<p><strong>Eu vou pra lua</strong></p>
<p>(Ary Lobo / Luiz de Fran&ccedil;a)</p>
<hr class="space-letra-top-musicas">
<p>Eu vou pra lua</p>
<p>Eu vou morar l&aacute;</p>
<p>Vou no meu Sputinik</p>
<p>Do campo do Jequi&aacute;</p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Am&eacute;rico Bastos e Marcos Farias</p>
<p>Acordeom e piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Guitarra e vocal: Zeppa</p>
<p>Baixo: Pipiu</p>
<p>Bateria: Elber Bedaque</p>
<p>Pandeiro: Zizinho</p>
<p>Zabumba, tri&acirc;ngulo, xique-xique, kik&oacute; e block: Firmino</p>
<p>Clarinete: Netinho</p>
<p>Vocal: Jurema, Jussara, Betina, Regininha, Marcio Lott, Hilton Assun&ccedil;&atilde;o, Jaime Alem, Nair C&acirc;ndia e Jurema C&acirc;ndia</p>
',
                'faixa_mp3' => '11_sina_de_cigarra.mp3',
                'faixa_ogg' => '11_sina_de_cigarra.ogg',
                'disco_id' => '10'));

        Musicas::create(
            array(
                'faixa' => 'Doida',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>Doida, muito doida eu sou</p>
<p>Pelo teu amor</p>
<p>Doida, muito doida eu t&ocirc;</p>
<p>Pelo teu amor</p>
<p>&nbsp;</p>
<p>Vem mexer comigo</p>
<p>Pra ver meu fogo te ascender</p>
<p>Vem rolar comigo</p>
<p>Se lambuzar no meu prazer</p>
<p>Eu te dou carinho, te fa&ccedil;o um dengo</p>
<p>Deixo a fim</p>
<p>Te fa&ccedil;o tudo</p>
<p>E voc&ecirc; s&oacute; faz gostar de mim</p>
<p>&nbsp;</p>
<p>&Ocirc;, &ocirc;, &ocirc;, &ocirc;</p>
<p>&Ocirc;, &ocirc;, &ocirc;, &ocirc;, &ocirc;</p>
<p>Me saculeja, me beija</p>
<p>Me d&aacute; teu calor</p>
',
                'creditos' => '
<p>Arranjo de base: Z&eacute; Am&eacute;rico Bastos, Zeppa Souza, Julinho Teixeira e Firmino</p>
<p>Orquestra&ccedil;&atilde;o, reg&ecirc;ncia, DX-7 e klavinet: Z&eacute; Am&eacute;rico Bastos</p>
<p>Piano Yamaha: Julinho Teixeira</p>
<p>Bateria: Elber Bedaque</p>
<p>Guitarra: Zeppa Souza</p>
<p>Contrabaixo: Pipiu</p>
<p>Congas LP, bongo, afox&eacute;, cowbell, timbales LP, agog&ocirc; e guiro: Firmino</p>
<p>Trombone: Mois&eacute;s do Nascimento</p>
<p>Trompetes: Paulinho, Paulinho Martins e Bidinho</p>
<p>Sax tenor: Marcelo Neves</p>
<p>Sax alto: Leo Gandelman</p>
<p>Vocal: Elba, Viviane Godoi, Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Jaime Alem, Jurema C&acirc;ndia, Tadeu Mathias, Louren&ccedil;o e Maur&iacute;cio Mattar</p>
',
                'faixa_mp3' => '01_doida.mp3',
                'faixa_ogg' => '01_doida.ogg',
                'disco_id' => '11'));

        Musicas::create(
            array(
                'faixa' => 'Salve-se Quem Puder',
                'compositor' => '(Dominguinhos/Fausto Nilo) Participa&ccedil;&atilde;o Especial:<strong> Dominguinhos</strong>',
                'letra' => '<p>A gente faz o amor</p>
<p>S&oacute; n&atilde;o desfaz o rancor</p>
<p>N&atilde;o chore se eu disser</p>
<p>Voc&ecirc; n&atilde;o quis quando eu quis</p>
<p>Agora quer ser feliz</p>
<p>Do jeito que o diabo quer</p>
<p>&nbsp;</p>
<p>Eu j&aacute; cansei de esperar</p>
<p>Olhando o tempo passar</p>
<p>N&atilde;o quero mais sofrer</p>
<p>Agora j&aacute; &eacute; depois</p>
<p>Sorrimos juntos n&oacute;s dois</p>
<p>Podemos esquecer</p>
<p>&nbsp;</p>
<p>Indecis&atilde;o nunca mais</p>
<p>O tempo n&atilde;o satisfaz</p>
<p>A quem n&atilde;o sabe o que quer</p>
<p>Voc&ecirc; foi tudo, meu Deus</p>
<p>Mas seu dem&ocirc;nio sou eu</p>
<p>E salve-se quem puder</p>
',
                'creditos' => '
<p>Arranjo: Dominguinhos e Z&eacute; Am&eacute;rico Bastos</p>
<p>Orquestra&ccedil;&atilde;o, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Guitarra: Zeppa Souza</p>
<p>Acordeom: Dominguinhos</p>
<p>Contrabaixo: Pipiu</p>
<p>Tri&acirc;ngulo e koc&oacute;: Firmino</p>
<p>Bateria: Elber Bedaque</p>
<p>Flautas: Marcelo Neves, Murilo Barquette, Mauro Senise e Celso Woltzenlogel</p>
',
                'faixa_mp3' => '02_salve_se_quem_puder_com_dominguinhos.mp3',
                'faixa_ogg' => '02_salve_se_quem_puder_com_dominguinhos.ogg',
                'disco_id' => '11'));

        Musicas::create(
            array(
                'faixa' => 'Segredo de Menina',
                'compositor' => '(Paulo Deb&eacute;tio / Waldir Luz)',
                'letra' => '<p>Ningu&eacute;m conhece os segredos da menina</p>
<p>Que canta e dan&ccedil;a no brilho da purpurina</p>
<p>Ningu&eacute;m conhece os segredos da menina</p>
<p>Que canta e dan&ccedil;a no brilho da purpurina</p>
<p>&nbsp;</p>
<p>Seu decotado, o rebolado, o riso franco</p>
<p>Deixa de &aacute;gua na boca sarar&aacute;, negros e brancos</p>
<p>Suor pingando, cabeleira solta ao vento</p>
<p>E a gente vai se perdendo no tic tac do tempo</p>
<p>&nbsp;</p>
<p>Eu sou assim, filha e m&atilde;e paraibana</p>
<p>Zona Norte, Zona Leste, Zona Sul, Copacabana</p>
<p>E vou levar o meu bai&atilde;o envenenado</p>
<p>Esse toque malcriado que me faz ser t&atilde;o mulher</p>
<p>&nbsp;</p>
<p>Olha o mirante de butuca nas canelas</p>
<p>Da jovem mo&ccedil;a que cheira cravo e canela</p>
<p>Olha o mirante de butuca nas canelas</p>
<p>Da jovem mo&ccedil;a que cheira cravo e canela</p>
<p>&nbsp;</p>
<p>Olha o passista com seu passo elegante</p>
<p>Entra em cena pra brilhar</p>
<p>Sob o olhar da jovem amante</p>
<p>Roda moinho, roda a saia no compasso</p>
<p>Quero ser mulher rendeira delirando nos seus bra&ccedil;os</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Guitarra: Zeppa Souza</p>
<p>Acordeom: Dominguinhos</p>
<p>Contrabaixo: Pipiu</p>
<p>Bateria: Elber Bedaque</p>
<p>Pandeiro: Nandinho do Pagode</p>
<p>Tri&acirc;ngulo: Borel</p>
<p>Egg maracas, congas LP, clave, cicierro, block: Firmino</p>
<p>Trombones: Mois&eacute;s do Nascimento e Ricardo Marques</p>
<p>Trumpetes: Paulinho, Paulinho Martins e Bidinho</p>
<p>Sax tenor: Marcelo Neves</p>
<p>Sax alto: Leo Gandelman</p>
',
                'faixa_mp3' => '03_segredo_de_menina.mp3',
                'faixa_ogg' => '03_segredo_de_menina.ogg',
                'disco_id' => '11'));

        Musicas::create(
            array(
                'faixa' => 'Estrela Grande',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>Estrela grande</p>
<p>Por mais que eu ande</p>
<p>Nunca te perco</p>
<p>Nunca te alcan&ccedil;o</p>
<p>Estrela grande</p>
<p>&nbsp;</p>
<p>Por mais que eu ande</p>
<p>Estrela grande</p>
<p>Nunca te alcan&ccedil;o</p>
<p>Nunca te perco</p>
<p>Por mais que eu ande</p>
<p>&nbsp;</p>
<p>Linda, mais linda</p>
<p>Que todas as frutas</p>
<p>E flores da terra morena</p>
<p>Fundo de mim, minha pena</p>
<p>L&aacute;grima lume do esp&iacute;rito</p>
<p>Que habita tudo que existe</p>
<p>Meu grito t&atilde;o triste</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e guitarra: Joca</p>
<p>Piano Yamaha: Hugo Fattoruso</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Contrabaixo: Wagner Dias</p>
<p>Bateria: Neguinho</p>
<p>Block, afox&eacute;, bongo, surdo, congas LP e efeitos: Firmino</p>
<p>Violinos: Giancarlo Pareschi, Alfredo Vidal, Jos&eacute; Alves, Bernardo Bessler, Jo&atilde;o Daltro, Carlos Eduardo, Michel Bessler, Aizik Meilack, Luiz Carlos, Francisco Perrota, Jorge Faini e Paschoal Perrota</p>
<p>Violas: Frederick Stephany, Arlindo Figueiredo, Hindenburgo Borges e Jesu&iacute;na Noronha</p>
<p>Cellos: Marcio Eymard, Alceu de Almeida Reis, Jacques Morelenbaum e Jorge Kundert</p>
',
                'faixa_mp3' => '04_estrela_grande.mp3',
                'faixa_ogg' => '04_estrela_grande.ogg',
                'disco_id' => '11'));

        Musicas::create(
            array(
                'faixa' => 'Palavra de Mulher',
                'compositor' => '(Chico Buarque)',
                'letra' => '<p>Vou voltar</p>
<p>Haja o que houver eu vou voltar</p>
<p>J&aacute; te deixei jurando nunca mais olhar pra tr&aacute;s</p>
<p>Palavra de mulher</p>
<p>Eu vou voltar</p>
<p>&nbsp;</p>
<p>Posso at&eacute;</p>
<p>Sair de bar em bar</p>
<p>Em bar em bar</p>
<p>Falar besteira e me enganar</p>
<p>Com qualquer um deitar a noite inteira</p>
<p>Eu vou te amar</p>
<p>&nbsp;</p>
<p>Vou chegar</p>
<p>A qualquer hora ao meu lugar</p>
<p>E se uma outra pretendia</p>
<p>Um dia te roubar</p>
<p>Dispensa essa vadia</p>
<p>Eu vou voltar</p>
<p>&nbsp;</p>
<p>Vou subir</p>
<p>A nossa escada, a escada</p>
<p>A escada, a escada</p>
<p>Meu amor, eu vou partir</p>
<p>De novo e sempre feito viciada</p>
<p>Eu vou voltar</p>
<p>&nbsp;</p>
<p>Pode ser</p>
<p>Que a nossa hist&oacute;ria seja mais</p>
<p>Uma quimera</p>
<p>E pode o nosso teto</p>
<p>A Lapa, o Rio desabar</p>
<p>&nbsp;</p>
<p>Pode ser</p>
<p>Que passe o nosso tempo</p>
<p>Como qualquer primavera</p>
<p>Espera</p>
<p>Me espera</p>
<p>Eu vou voltar</p>
',
                'creditos' => '
<p>Arranjo: Chiquinho de Moraes</p>
<p>Piano: Crist&oacute;v&atilde;o Bastos</p>
<p>Violinos: Giancarlo Pareschi (spalla), Aizik Geller, Alfredo Vidal, Bernardo Bessler, Carlos Hack, Francisco Perrotta, Jo&atilde;o Daltro, Jorge Faini, Jos&eacute; Alves, Michel Bessler, Paschoal Perrota e Walter Hack</p>
<p>Violas: Arlindo Penteado, Frederick Stephany, Hindenburgo Borges e Nelson Machado</p>
<p>Cellos: Alceu de Almeida Reis, Jacques Morelenbaum, Jorge Kundert e Marcio Malard</p>
',
                'faixa_mp3' => '05_palavra_de_mulher.mp3',
                'faixa_ogg' => '05_palavra_de_mulher.ogg',
                'disco_id' => '11'));

        Musicas::create(
            array(
                'faixa' => 'Drag&atilde;o Encantado',
                'compositor' => '(Tadeu Mathias)',
                'letra' => '<p>Drag&atilde;o de fogo que brilha na escurid&atilde;o</p>
<p>E me encandeia</p>
<p>Amor que faz festa no meu cora&ccedil;&atilde;o</p>
<p>E me incendeia</p>
<p>&nbsp;</p>
<p>Leoa rainha</p>
<p>Minha tenta&ccedil;&atilde;o</p>
<p>Voc&ecirc; assim incendeia</p>
<p>O amor do meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Voc&ecirc; tem muito encanto</p>
<p>&Eacute; uma lenda</p>
<p>E t&aacute; na minha can&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Eu lhe pe&ccedil;o um beijo</p>
<p>&ldquo;N&atilde;o dou&rdquo;</p>
<p>Ela t&aacute; doida para beijar</p>
<p>Lhe convido a dan&ccedil;ar</p>
<p>&ldquo;N&atilde;o vou&rdquo;</p>
<p>Mas sei que ela quer rebolar</p>
<p>&nbsp;</p>
<p>Deixe o medo de lado morena</p>
<p>Vem me amar</p>
<p>Deixe o medo de lado morena</p>
<p>Vem me amar</p>
<p>&nbsp;</p>
<p>Ilea&ecirc;, lelele, lelele, lelele&ocirc;</p>
<p>Ilea&ecirc;, lelele, lelele, lelele&aacute;</p>
<p>Ilea&ecirc;, lelele, lelele, lelele&ocirc;</p>
<p>Ilea&ecirc;, lelele, lelele, lelele&aacute;</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia, piano Yamaha e DX-7: Z&eacute; Am&eacute;rico Bastos</p>
<p>Guitarra: Zeppa Souza</p>
<p>Bateria: Elber Bedaque</p>
<p>Contrabaixo: Jorj&atilde;o</p>
<p>Congas LP, bongo, afox&eacute;, guiro, tri&acirc;ngulo, soroban e block: Firmino</p>
<p>Trombones: Mois&eacute;s do Nascimento e Roberto Marques</p>
<p>Trompetes: Paulinho, Paulinho Martins e Bidinho</p>
<p>Sax tenor e flauta: Marcelo Neves</p>
<p>Sax alto: Leo Gandelman</p>
<p>Vocal: Elba, Viviane Godoi, Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Jaime Alem, Jurema C&acirc;ndia, Tadeu Mathias e Louren&ccedil;o</p>
',
                'faixa_mp3' => '06_dragao_encantado.mp3',
                'faixa_ogg' => '06_dragao_encantado.ogg',
                'disco_id' => '11'));

        Musicas::create(
            array(
                'faixa' => 'Pisa no Meu Cora&ccedil;&atilde;o',
                'compositor' => '(Nando Cordel / Fausto Nilo)',
                'letra' => '<p>Comigo voc&ecirc; faz amor</p>
<p>Contigo &eacute; pra enlouquecer</p>
<p>Fico cega de paix&atilde;o</p>
<p>D&aacute; pra todo mundo ver</p>
<p>&nbsp;</p>
<p>Pisa no meu cora&ccedil;&atilde;o</p>
<p>Meu amor n&atilde;o vai doer</p>
<p>Pisa no meu cora&ccedil;&atilde;o</p>
<p>Meu amor n&atilde;o vai doer</p>
<p>&nbsp;</p>
<p>Se voc&ecirc; quer eu fa&ccedil;o de manh&atilde;</p>
<p>Fa&ccedil;o anoitecer</p>
<p>Fico doido, fico bom</p>
<p>Fa&ccedil;o at&eacute; chover</p>
<p>&nbsp;</p>
<p>Hoje ningu&eacute;m chora</p>
<p>Hoje &eacute; brincadeira</p>
<p>T&aacute; chegando a hora</p>
<p>T&aacute; dando a doideira</p>
<p>&nbsp;</p>
<p>Me d&aacute; que eu quero ver</p>
<p>Que gosto tem voc&ecirc;</p>
<p>Me d&aacute; que eu quero ver</p>
<p>Que gosto tem voc&ecirc;</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o: Hilton Assun&ccedil;&atilde;o</p>
<p>Bateria: Jurim Moreira</p>
<p>Guitarra: Joca</p>
<p>Contrabaixo: Pipiu</p>
<p>Congas LP, talk drums e afox&eacute;: Firmino</p>
<p>Clave: Marcos Amma</p>
<p>Cowbell: Maur&iacute;cio Mattar</p>
<p>Vocal: Elba, Viviane Godoi, Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Jaime Alem, Jurema C&acirc;ndia, Tadeu Mathias e Louren&ccedil;o</p>
',
                'faixa_mp3' => '07_pisa_no_meu_coracao.mp3',
                'faixa_ogg' => '07_pisa_no_meu_coracao.ogg',
                'disco_id' => '11'));

        Musicas::create(
            array(
                'faixa' => 'Um Bilhete Pro Seu Lua',
                'compositor' => '(Gonzaguinha) Participa&ccedil;&atilde;o especial:<strong> Gonzaguinha</strong>',
                'letra' => '<p>&Ecirc; meu pai</p>
<p>T&ocirc; sentindo saudades de voc&ecirc;</p>
<p>Como vai</p>
<p>Essa voz que &eacute; a voz do meu sert&atilde;o?</p>
<p>Como est&atilde;o</p>
<p>O trabalho, os projetos, oi?</p>
<p>Mando l&aacute; um abra&ccedil;o dos netos</p>
<p>&nbsp;</p>
<p>Setenta e cinco anos n&atilde;o &eacute; pra qualquer besta</p>
<p>Ainda mais com essa sanfona</p>
<p>Espalhando sempre a festa</p>
<p>Cuida bem do cora&ccedil;&atilde;o, liga n&atilde;o</p>
<p>&nbsp;</p>
<p>Que o povo tem amor</p>
<p>Por tudo o que voc&ecirc; &eacute;</p>
<p>Que o povo tem amor</p>
<p>Por tudo o que voc&ecirc; &eacute;</p>
<p>&nbsp;</p>
<p>V&ecirc; meu pai</p>
<p>Inventaram o bai&atilde;o l&aacute; no Jap&atilde;o</p>
<p>C&ecirc; vai ver</p>
<p>Brevemente &eacute; moda no Brasil</p>
<p>V&atilde;o mostrar</p>
<p>Como &eacute; que se dan&ccedil;a, oi!</p>
<p>Deixa andar</p>
<p>Que a gente copia</p>
<p>A tecnologia amostrou a alegria</p>
<p>Que tem na tua lua</p>
<p>Que brilha em pleno dia</p>
<p>Cuida bem do cora&ccedil;&atilde;o, liga n&atilde;o</p>
<p>&nbsp;</p>
<p>Que o povo n&atilde;o esquece</p>
<p>Tudo que voc&ecirc; &eacute;</p>
<p>Que o povo n&atilde;o esquece</p>
<p>Tudo que voc&ecirc; &eacute;</p>
<p>&nbsp;</p>
<p>E igual ao povo somente Deus</p>
<p>E voc&ecirc; tem</p>
<p>O povo inteirinho dentro desse cora&ccedil;&atilde;o</p>
<p>O povo inteirinho dentro desse cora&ccedil;&atilde;o</p>
<p>O povo inteirinho dentro desse cora&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia, piano Yamaha, DX-7, (cordas) Mirage e acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Elber Bedaque</p>
<p>Guitarra: Zeppa Souza</p>
<p>Contrabaixo: Pipiu</p>
<p>Viol&atilde;o 12 cordas: Joca</p>
<p>Block e xequer&ecirc;: Bidinho</p>
<p>Tri&acirc;ngulo e claves: Firmino</p>
<p>Clave: Marcos Amma</p>
<p>Cowbell: Maur&iacute;cio Mattar</p>
<p>Vocal: Elba, Viviane Godoi, Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Jaime Alem, Jurema C&acirc;ndia, Tadeu Mathias e Louren&ccedil;o</p>
',
                'faixa_mp3' => '08_um_bilhete_pro_seu_lua_com_gonzaguinha.mp3',
                'faixa_ogg' => '08_um_bilhete_pro_seu_lua_com_gonzaguinha.ogg',
                'disco_id' => '11'));

        Musicas::create(
            array(
                'faixa' => 'O Girassol da Baixada',
                'compositor' => '(Jaime Alem)',
                'letra' => '<p>Sonhador</p>
<p>Um menino da baixada plantou</p>
<p>Um girassol</p>
<p>E sentou pra esperar</p>
<p>O sol na rodovia</p>
<p>J&aacute; corria a novidade</p>
<p>Todo mundo j&aacute; sabia do menino</p>
<p>Que plantara uma flor</p>
<p>No vazadouro de petr&oacute;leo</p>
<p>&nbsp;</p>
<p>Acontece nessa terra</p>
<p>Onde se plantando tudo d&aacute;</p>
<p>Com os dias se passando</p>
<p>As sementes v&atilde;o brotando generosas</p>
<p>&nbsp;</p>
<p>Mas o menino da baixada plantou</p>
<p>Um girassol</p>
<p>E sentou pra esperar passar</p>
<p>A chuva que ca&iacute;a todo dia</p>
<p>Todo dia, todo dia</p>
<p>Todo sonhador</p>
<p>O menino n&atilde;o sabia</p>
<p>Que plantara sobre a lama, a sede, a fome</p>
<p>A esperan&ccedil;a</p>
<p>De um viver que n&atilde;o se cansa</p>
<p>&nbsp;</p>
<p>Na car&ecirc;ncia, inoc&ecirc;ncia</p>
<p>Ignor&acirc;ncia, viol&ecirc;ncia desses dias tais</p>
<p>Descobrimo-nos selvagens de um jeito</p>
<p>Que ofende aos outros animais</p>
<p>Acontece nessa terra</p>
<p>Onde se plantando tudo d&aacute;</p>
<p>Vergonha!</p>
',
                'creditos' => '
<p>Arranjo de base: Jaime Alem</p>
<p>Arranjo, reg&ecirc;ncia, piano Yamaha e acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Piano Yamaha: Hugo Fattoruso</p>
<p>Viol&atilde;o Ovation com nylon, viol&atilde;o Ovation com a&ccedil;o e viola 12 cordas: Jaime Alem</p>
<p>Guitarra: Zeppa Souza</p>
<p>Contrabaixo: Jamil</p>
<p>Bateria: Elber Bedaque</p>
<p>Viola 12 cordas: Joca</p>
<p>Bock, caxixi e xequer&ecirc;: Bidinho</p>
<p>Talk drums, reco-reco e chicote: Repolho</p>
<p>Tri&acirc;ngulo, pandeiros, congas LP, afox&eacute; e tumba: Firmino</p>
<p>Violinos: Giancarlo Pareschi, Alfredo Vidal, Jos&eacute; Alves, Bernardo Bessler, Jo&atilde;o Daltro, Carlos Eduardo, Michel Bessler, Aizik Meilack, Luiz Carlos, Francisco Perrota, Jorge Faini e Paschoal Perrota</p>
<p>Violas: Frederick Stephany, Arlindo Figueiredo, Hindenburgo Borges e Jesu&iacute;na Noronha</p>
<p>Cellos: Marcio Eymard, Alceu de Almeida Reis, Jacques Morelenbaum e Jorge Kundert</p>
',
                'faixa_mp3' => '09_o_girassol_da_baixada.mp3',
                'faixa_ogg' => '09_o_girassol_da_baixada.ogg',
                'disco_id' => '11'));

        Musicas::create(
            array(
                'faixa' => 'A Flor da Magia',
                'compositor' => '(Z&eacute; Am&eacute;rico / Salgado Maranh&atilde;o)',
                'letra' => '<p>Tambor de crioula</p>
<p>Bai&atilde;o da alegria</p>
<p>Debaixo dos p&eacute;s</p>
<p>A flor da magia</p>
<p>&nbsp;</p>
<p>Tambor de terreiro</p>
<p>Tambor de folia</p>
<p>Debaixo da noite</p>
<p>Suor e energia</p>
<p>&nbsp;</p>
<p>Meu peito &eacute; um pantanal</p>
<p>Um c&oacute;rrego de &aacute;gua doce</p>
<p>A dor, se vem, vira amor</p>
<p>Acorde sensual</p>
<p>&nbsp;</p>
<p>Meu peito &eacute; um matagal</p>
<p>De cheiro verde e can&ccedil;&atilde;o</p>
<p>Meu peito &eacute; um matagal</p>
<p>De cheiro verde e can&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Aqui qualquer solid&atilde;o</p>
<p>Vira carnaval</p>
<p>Vira carnaval</p>
<p>Aqui qualquer solid&atilde;o</p>
<p>Vira carnaval</p>
<p>Vira carnaval</p>
<p>&nbsp;</p>
<p>Tambor de crioula</p>
<p>Clar&atilde;o luz do dia</p>
<p>Debaixo do sonho</p>
<p>O sol principia</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Jurim Moreira</p>
<p>Viol&atilde;o: Hilton Assun&ccedil;&atilde;o</p>
<p>Contrabaixo: Pipiu</p>
<p>Viola 12 cordas: Joca</p>
<p>Tambores: Marcos Amma</p>
<p>Tumba, guiro, egg maracas, soroban, madeiras e tambores: Firmino</p>
<p>Vocal: Elba, Viviane Godoi, Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Jaime Alem, Jurema C&acirc;ndia, Tadeu Mathias e Marcio Lott</p>
',
                'faixa_mp3' => '10_a_flor_da_magia.mp3',
                'faixa_ogg' => '10_a_flor_da_magia.ogg',
                'disco_id' => '11'));

        Musicas::create(
            array(
                'faixa' => 'Lu&atilde;',
                'compositor' => '(Maur&iacute;cio Mattar / Geraldo Azevedo) Participa&ccedil;&atilde;o Especial: <strong>Lu&atilde;</strong>',
                'letra' => '<p>Fruta madura me encantou</p>
<p>Tal do&ccedil;ura de um menino nu</p>
<p>Salve essa pele</p>
<p>Salve a cor</p>
<p>A manh&atilde; hoje lambeu c&eacute;u azul</p>
<p>&nbsp;</p>
<p>C&eacute;u de Lu&atilde;</p>
<p>Fruta feiticeira</p>
<p>Anjo bom</p>
<p>Tempo de luz</p>
<p>Pro meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Que diz assim</p>
<p>Na can&ccedil;&atilde;o, na paix&atilde;o</p>
<p>Ser feliz &eacute; cantar</p>
<p>Cantar Lu&atilde;, &ecirc;, &ocirc;</p>
<p>&nbsp;</p>
<p>Molhar os olhos de beijo</p>
<p>Que ternura, pura flor do amor</p>
<p>O frio, a febre, dor da dor</p>
<p>Um le&atilde;o no foco quente do sol</p>
<p>&nbsp;</p>
<p>Sol de Lu&atilde;</p>
<p>Fruta feiticeira</p>
<p>Tempo bom</p>
<p>Anjo de luz</p>
<p>Pro meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Que diz assim</p>
<p>Na can&ccedil;&atilde;o, na paix&atilde;o</p>
<p>Ser feliz &eacute; cantar</p>
<p>Cantar, cantar Lu&atilde;, &ecirc;, &ocirc;</p>
',
                'creditos' => '
<p>Arranjo de base: Joca e Geraldo Azevedo</p>
<p>Arranjo de cordas e guitarras: Joca</p>
<p>Piano Yamaha: Hugo Fattoruso</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Contrabaixo: Wagner Dias</p>
<p>Bateria: Neguinho</p>
<p>Egg maracas, efeitos e Lu&atilde;: Firmino</p>
<p>Violinos: Giancarlo Pareschi, Alfredo Vidal, Jos&eacute; Alves, Bernardo Bessler, Jo&atilde;o Daltro, Carlos Eduardo, Michel Bessler, Aizik Meilack, Luiz Carlos, Francisco Perrota, Jorge Faini e Paschoal Perrota</p>
<p>Violas: Frederick Stephany, Arlindo Figueiredo, Hindenburgo Borges e Jesu&iacute;na Noronha</p>
<p>Cellos: Marcio Eymard, Alceu de Almeida Reis, Jacques Morelenbaum e Jorge Kundert</p>
',
                'faixa_mp3' => '11_lua.mp3',
                'faixa_ogg' => '11_lua.ogg',
                'disco_id' => '11'));

        Musicas::create(
            array(
                'faixa' => 'Jogo de Cintura',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>Voc&ecirc; tem que ter</p>
<p>Jogo de cintura</p>
<p>Olho na mistura</p>
<p>N&atilde;o se incomodar</p>
<p>De vez em quando nessa vida</p>
<p>A gente engole um ca&ocirc;</p>
<p>&nbsp;</p>
<p>Pra se arrumar, pra se arrumar</p>
<p>Pra namorar, pra namorar</p>
<p>Pra ser feliz, pra ser feliz</p>
<p>Pra ter amor</p>
<p>&nbsp;</p>
<p>E a &ocirc;</p>
<p>Isso aqui vai melhorar</p>
<p>E a &ocirc;</p>
<p>Se a gente se enganchar</p>
<p>E a &ocirc;</p>
<p>Era bom que fosse j&aacute;</p>
<p>Voc&ecirc; quer, eu tamb&eacute;m quero</p>
<p>T&aacute; faltando come&ccedil;ar</p>
',
                'creditos' => '
<p>Arranjo e acordeom: Dominguinhos</p>
<p>Piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o: Hilton Assun&ccedil;&atilde;o</p>
<p>Guitarra: Zeppa Souza</p>
<p>Contrabaixo: Pipiu</p>
<p>Bateria: Elber Bedaque</p>
<p>Tri&acirc;ngulo, agog&ocirc; e zabumba: Firmino</p>
<p>Pandeiro: Nando do Pandeiro</p>
<p>Clarinete/solo: Netinho</p>
<p>Vocal: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Chico Pupo, Nair C&acirc;ndia, Jaime Alem, Zeppa Souza, R onaldo Barcellos, Jurema C&acirc;ndia e Leno</p>
',
                'faixa_mp3' => '01_jogo_de_cintura.mp3',
                'faixa_ogg' => '01_jogo_de_cintura.ogg',
                'disco_id' => '12'));

        Musicas::create(
            array(
                'faixa' => 'Cheiro Moreno',
                'compositor' => '(Paulo Deb&eacute;tio / Paulinho Resende)',
                'letra' => '<p>Me leva meu bem querer</p>
<p>Pra me banhar</p>
<p>Na del&iacute;cia do teu cheiro moreno</p>
<p>Eu vim te namorar</p>
<p>&nbsp;</p>
<p>A raz&atilde;o da minha vida</p>
<p>&Eacute; ati&ccedil;ar seu cora&ccedil;&atilde;o</p>
<p>Pois eu sou t&atilde;o mo&ccedil;a ainda</p>
<p>Pra sofrer de solid&atilde;o</p>
<p>&nbsp;</p>
<p>Fui na fonte do desejo</p>
<p>Beber &aacute;gua e n&atilde;o achei</p>
<p>E a sede do seu beijo</p>
<p>At&eacute; hoje n&atilde;o matei</p>
<p>&nbsp;</p>
<p>Sem seus olhos n&atilde;o me vejo</p>
<p>Depois que seu gosto provei</p>
<p>Sem seus olhos n&atilde;o me vejo</p>
<p>Depois que seu gosto provei</p>
<p>&nbsp;</p>
<p>Apesar da pouca idade</p>
<p>Cedo eu tive que aprender</p>
<p>Que a saudade &eacute; uma vontade</p>
<p>Muito doida de te ver</p>
<p>&nbsp;</p>
<p>Tenho andado t&atilde;o carente</p>
<p>Da mal&iacute;cia desse olhar</p>
<p>Cora&ccedil;&atilde;o ficou doente</p>
<p>Me pediu pra te chamar</p>
<p>&nbsp;</p>
<p>Tem paix&atilde;o que n&atilde;o se explica</p>
<p>Onde bate fica at&eacute; sangrar</p>
<p>Tem paix&atilde;o que n&atilde;o se explica</p>
<p>Onde bate fica at&eacute; sangrar</p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Am&eacute;rico Bastos</p>
<p>Piano: Julinho Teixeira</p>
<p>Bateria: Carlos Bala</p>
<p>Contrabaixo: Jorj&atilde;o</p>
<p>Guitarra: Zeppa Souza e Joca</p>
<p>Congas, pandeiro, queixada, afox&eacute; e tumba: Firmino</p>
<p>Flauta e sax tenor: Marcelo Neves</p>
<p>Trompete Flugel: Paulinho Trompete e Don Harris</p>
<p>Trombones: Mois&eacute;s e Roberto Marques</p>
<p>Vocal: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Chico Pupo, Nair C&acirc;ndia, Jaime Alem, Zeppa Souza, Ronaldo Barcellos, Jurema C&acirc;ndia e Leno</p>
',
                'faixa_mp3' => '02_cheiro_moreno.mp3',
                'faixa_ogg' => '02_cheiro_moreno.ogg',
                'disco_id' => '12'));

        Musicas::create(
            array(
                'faixa' => 'Agora &eacute; Sua Vez',
                'compositor' => '(Zinho) Participa&ccedil;&atilde;o Especial: <strong> Zinho</strong>',
                'letra' => '<p>Eu j&aacute; tomei de conta</p>
<p>Eu j&aacute; dei meu recado</p>
<p>J&aacute; fiz meu peneirado</p>
<p>Com voc&ecirc; no forroz&atilde;o</p>
<p>&nbsp;</p>
<p>Meu bem n&atilde;o diga n&atilde;o</p>
<p>Meu bem diga que sim</p>
<p>Agora &eacute; sua vez</p>
<p>De tomar de conta de mim</p>
<p>&nbsp;</p>
<p>Vem pra c&aacute; meu amor</p>
<p>Vem pra c&aacute; meu amor</p>
<p>Vem tomar de conta do meu cora&ccedil;&atilde;o</p>
<p>Mas se voc&ecirc; disser que n&atilde;o</p>
<p>N&atilde;o tem quentura no sal&atilde;o</p>
<p>&nbsp;</p>
<p>Chega pra c&aacute;</p>
<p>Vem se espalhar, meu bem</p>
<p>Que a noite &eacute; nossa</p>
<p>N&atilde;o se importe com ningu&eacute;m</p>
<p>Meu bem</p>
<p>Aqui no forroz&atilde;o</p>
<p>Por favor, n&atilde;o diga n&atilde;o</p>
<p>Vem pra c&aacute; meu bem querer</p>
<p>&nbsp;</p>
<p>E nessa brincadeira</p>
<p>Quem vai tomar de conta de mim &eacute; voc&ecirc;</p>
<p>E nessa brincadeira</p>
<p>Quem vai tomar de conta de mim &eacute; voc&ecirc;</p>
',
                'creditos' => '
<p>Arranjo e acordeom: Dominguinhos</p>
<p>Baixo: Pipiu</p>
<p>Bateria: Elber Bedaque</p>
<p>Guitarra: Zeppa Souza</p>
<p>Tri&acirc;ngulo e agog&ocirc;: Firmino</p>
<p>Zabumba: Tiziu</p>
<p>Pandeiro: Nando do Pandeiro</p>
',
                'faixa_mp3' => '03_agora_e_sua_vez_com_zinho.mp3',
                'faixa_ogg' => '03_agora_e_sua_vez_com_zinho.ogg',
                'disco_id' => '12'));

        Musicas::create(
            array(
                'faixa' => 'V&ecirc; Estrelas',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>&Eacute; hoje que a gente v&ecirc;</p>
<p>Estrelas</p>
<p>&Eacute; hoje que a gente faz</p>
<p>Amor</p>
<p>&nbsp;</p>
<p>Que bom, que bom querer</p>
<p>Voc&ecirc;</p>
<p>Que bom, que bom querer</p>
<p>Voc&ecirc;</p>
<p>&nbsp;</p>
<p>Tudo &eacute; festa, &eacute; folego</p>
<p>Vem chegando maneiro</p>
<p>Teu olhar feiticeiro</p>
<p>Me prendeu</p>
<p>&nbsp;</p>
<p>N&atilde;o tem jeito, eu te quero</p>
<p>Balan&ccedil;ando em meu corpo</p>
<p>Pra provar desse gosto</p>
<p>Que &eacute; s&oacute; seu</p>
',
                'creditos' => '
<p>Arranjo e piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o: Hilton Assun&ccedil;&atilde;o</p>
<p>Bateria: Carlos Bala</p>
<p>Contrabaixo: Jorj&atilde;o</p>
<p>Guitarra: Zeppa Souza</p>
<p>Tumba, congas e timbales: Firmino</p>
<p>Sax tenor: Marcelo Neves</p>
<p>Sax alto: Z&eacute; Carlos</p>
<p>Trompetes: Paulinho Trompete e Don Harris</p>
<p>Trombones: Mois&eacute;s e Roberto Marques</p>
<p>Vocal: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Chico Pupo, Nair C&acirc;ndia, Jaime Alem, Zeppa Souza, Ronaldo Barcellos, Jurema C&acirc;ndia e Leno</p>
',
                'faixa_mp3' => '04_ve_estrelas.mp3',
                'faixa_ogg' => '04_ve_estrelas.ogg',
                'disco_id' => '12'));

        Musicas::create(
            array(
                'faixa' => 'Sem Sa&iacute;da',
                'compositor' => '(Dominguinhos / Fausto Nilo)',
                'letra' => '<p>Eu nem queria pensar em voc&ecirc;</p>
<p>Mas n&atilde;o consigo evitar</p>
<p>Voc&ecirc; s&oacute; faz prometer, prometer</p>
<p>Eu j&aacute; cansei de esperar</p>
<p>Teu futuro n&atilde;o suporta minha paix&atilde;o</p>
<p>Meu presente &eacute; teu amor fora de hora</p>
<p>&nbsp;</p>
<p>Fa&ccedil;a comigo o que voc&ecirc; quiser</p>
<p>Eu fa&ccedil;o tudo por puro prazer</p>
<p>N&atilde;o consigo te dizer que n&atilde;o</p>
<p>&nbsp;</p>
<p>Quantas vezes</p>
<p>O amor me deixou sem sa&iacute;da</p>
<p>Quantas mil tentativas de um dia mudar</p>
<p>Esquecer nosso caminho</p>
<p>Me perder noutros carinhos</p>
<p>Mas agora nem d&aacute; tempo de pensar</p>
<p>&nbsp;</p>
<p>Fa&ccedil;a comigo o que voc&ecirc; quiser</p>
<p>Eu fa&ccedil;o tudo de amor com voc&ecirc;</p>
<p>Pouco importa o dia de amanh&atilde;</p>
',
                'creditos' => '
<p>Arranjo de base: Dominguinhos e Z&eacute; Am&eacute;rico Bastos</p>
<p>Teclados: Julinho Teixeira</p>
<p>Piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o: Hilton Assun&ccedil;&atilde;o</p>
<p>Guitarra: Zeppa Souza</p>
<p>Contrabaixo: Pipiu</p>
<p>Bateria: Elber Bedaque</p>
<p>Acordeom: Dominguinhos</p>
<p>Bong&ocirc;, sorobam, clave e efeito de prato: Firmino</p>
<p>Clarinete/solo: Netinho</p>
<p>Vocal: Zeppa Souza, Jaime Alem, Chico Pupo, Ronaldo Barcellos e Leno</p>
',
                'faixa_mp3' => '05_sem_saida.mp3',
                'faixa_ogg' => '05_sem_saida.ogg',
                'disco_id' => '12'));

        Musicas::create(
            array(
                'faixa' => 'Popular Brasileira',
                'compositor' => '(Moraes Moreira / Fred G&oacute;es)',
                'letra' => '<p>Foi pra Cuba dan&ccedil;ar rumba</p>
<p>Foi pras ilhas de l&aacute;, filha</p>
<p>O Brasil foi levar</p>
<p>Samba, frevos e maracatus</p>
<p>&nbsp;</p>
<p>Quem olhasse em seus olhos via</p>
<p>A ciranda girando tinha</p>
<p>Um sabor de mesti&ccedil;a pele</p>
<p>Lembran&ccedil;a da Bahia</p>
<p>&nbsp;</p>
<p>Sapatilhas de ponta, amor</p>
<p>Fiz o ch&atilde;o e a cada passo</p>
<p>Se voc&ecirc; me levar eu vou</p>
<p>Estreitar nossos la&ccedil;os</p>
<p>&nbsp;</p>
<p>Amizade e estima s&atilde;o</p>
<p>Nordestina alegria sim</p>
<p>Diz que tem, que tem solu&ccedil;&atilde;o</p>
<p>Guerrilheira de mim</p>
<p>&nbsp;</p>
<p>&Eacute; bonita, erudita</p>
<p>Popular brasileira</p>
<p>Deixe o vento levar o som</p>
<p>N&atilde;o tem fronteiras</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia de metais e piano: Z&eacute; Am&eacute;rico Bastos</p>
<p>Participa&ccedil;&atilde;o na introdu&ccedil;&atilde;o: Paulinho Trompete</p>
<p>Arranjo de base: Luiz Brasil, Z&eacute; Am&eacute;rico Bastos e Moraes Moreira</p>
<p>Contrabaixo: Guilherme Maia</p>
<p>Bateria: Elber Bedaque</p>
<p>Teclados: Luiz&atilde;o Paiva e Z&eacute; Am&eacute;rico Bastos</p>
<p>Guitarras: Zeppa Souza e Rodrigo Campelo</p>
<p>Viol&atilde;o: Pipiu</p>
<p>Conga, timbales, cowbell, bong&ocirc;, surdo, caixa e efeitos: Firmino</p>
<p>Conga, pandeiro, agog&ocirc; e xequer&ecirc;: Carlinhos Hogam</p>
<p>Agog&ocirc;, bong&ocirc;, xequer&ecirc;, conga e timbales: Cassio Duarte</p>
<p>Flauta e sax tenor: Marcelo Neves</p>
<p>Sax alto: Z&eacute; Carlos</p>
<p>Trompete Flugel: Paulinho Trompete e Don Harris</p>
<p>Trombones: Mois&eacute;s e Roberto Marques</p>
<p>Vocal: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Chico Pupo, Nair C&acirc;ndia, Jaime Alem, Zeppa Souza, Ronaldo Barcellos, Jurema C&acirc;ndia e Leno</p>
',
                'faixa_mp3' => '06_popular_brasileira.mp3',
                'faixa_ogg' => '06_popular_brasileira.ogg',
                'disco_id' => '12'));

        Musicas::create(
            array(
                'faixa' => 'A Roda do Tempo',
                'compositor' => '(Lenine / Br&aacute;ulio Tavares)',
                'letra' => '<p>Diz que o tempo &eacute; um mist&eacute;rio (deixa falar)</p>
<p>Que cura qualquer paix&atilde;o (deixa falar)</p>
<p>Quem disse n&atilde;o conhecia</p>
<p>Essa dor que noite e dia</p>
<p>Martela meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>A roda do tempo gira (deixa girar)</p>
<p>Para frente, para tr&aacute;s (deixa girar)</p>
<p>Meu baralho eu j&aacute; tracei</p>
<p>Se voc&ecirc; jogar um rei</p>
<p>Eu tenho que jogar um &aacute;s</p>
<p>&nbsp;</p>
<p>Eu me criei</p>
<p>Escutando a melodia, &eacute;</p>
<p>Da ventania castigando &agrave; beira-mar, &eacute;</p>
<p>Me acostumei no tombo da ribanceira</p>
<p>E quem sabe subir ladeira</p>
<p>N&atilde;o tem pressa de chegar</p>
<p>&nbsp;</p>
<p>Quem pensa que o c&eacute;u &eacute; perto (deixa pensar)</p>
<p>Que &eacute; s&oacute; estender a m&atilde;o (deixa pensar)</p>
<p>Fica mal acostumado</p>
<p>Vive com o bra&ccedil;o esticado</p>
<p>E os p&eacute;s fora do ch&atilde;o</p>
<p>&nbsp;</p>
<p>Mas a vida vai passando (deixa passar)</p>
<p>Como o c&eacute;u muda de cor (deixa passar)</p>
<p>Cada curva do caminho</p>
<p>Me leva devagarinho</p>
<p>Mais perto do teu amor</p>
',
                'creditos' => '
<p>Arranjo e piano Yamaha: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Carlos Bala</p>
<p>Tri&acirc;ngulo, zabumba, bong&ocirc; e cabacinha: Firmino</p>
<p>Guitarra: Zeppa Souza</p>
<p>Contrabaixo: Jorj&atilde;o</p>
<p>Viola de 10 cordas: Lenine</p>
<p>Vocal: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Chico Pupo, Nair C&acirc;ndia, Jaime Alem, Zeppa Souza, Ronaldo Barcellos, Jurema C&acirc;ndia e Leno</p>
',
                'faixa_mp3' => '07_a_roda_do_tempo.mp3',
                'faixa_ogg' => '07_a_roda_do_tempo.ogg',
                'disco_id' => '12'));

        Musicas::create(
            array(
                'faixa' => 'Agarradinho com Voc&ecirc;',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>Voc&ecirc; &eacute; doce</p>
<p>&Eacute; saboroso, &eacute; de endoidar</p>
<p>Na tua praia eu quero sempre mergulhar</p>
<p>Voc&ecirc; &eacute; flor, &eacute; meu caminho</p>
<p>Quando vacila &eacute; meu espinho</p>
<p>Anjo da guarda</p>
<p>Meu escudo e meu luar</p>
<p>&nbsp;</p>
<p>Me d&aacute;, me d&aacute;, me d&aacute;</p>
<p>Meu cora&ccedil;&atilde;o descontrolou</p>
<p>Eu quero, eu quero, eu quero</p>
<p>Viajar no teu amor</p>
<p>Voar, voar, voar</p>
<p>Me desmanchar, virar prazer</p>
<p>Morar numa estrela</p>
<p>Agarradinho com voc&ecirc;</p>
',
                'creditos' => '
<p>Arranjo e piano: Eduardo Souto Neto</p>
<p>Guitarra: Joca</p>
<p>Contrabaixo: Jorj&atilde;o</p>
<p>Surdo, pandeiro e bong&ocirc;: Firmino</p>
<p>Bateria: Carlos Bala</p>
<p>Guitarra: Zeppa Souza</p>
<p>Trompetes: Hamilton e Barreto</p>
<p>Sax tenor: Maca&eacute;</p>
<p>Sax alto: Mauro Seninse</p>
<p>Trombones: Eduardo Maciel e Roberto Marques</p>
<p>Vocal: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Chico Pupo, Nair C&acirc;ndia, Jaime Alem, Zeppa Souza, Ronaldo Barcellos, Jurema C&acirc;ndia e Leno</p>
',
                'faixa_mp3' => '08_agarradinho_com_voce.mp3',
                'faixa_ogg' => '08_agarradinho_com_voce.ogg',
                'disco_id' => '12'));

        Musicas::create(
            array(
                'faixa' => 'Me Perdoa',
                'compositor' => '(Tadeu Mathias)',
                'letra' => '<p>Eu passei por cima</p>
<p>De algumas coisas tuas</p>
<p>Eu pequei</p>
<p>N&atilde;o respeitado teus espa&ccedil;os</p>
<p>Mas a vida ensina</p>
<p>E eu voltei</p>
<p>&nbsp;</p>
<p>T&ocirc; de malas prontas</p>
<p>Pra seguir viagem</p>
<p>Se voc&ecirc; n&atilde;o me quer de volta</p>
<p>Vou seguir andando</p>
<p>Largada pela vida</p>
<p>Me perdoa amor</p>
<p>Hoje eu estou aqui</p>
<p>&nbsp;</p>
<p>&Eacute; t&atilde;o bom quando surge algo novo</p>
<p>Que desperta uma nova paix&atilde;o</p>
<p>Mas a cabe&ccedil;a se perde no tempo</p>
<p>E a gente segue em dire&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>E assim completamente louca</p>
<p>Agindo da pior maneira</p>
<p>Eu errei</p>
<p>Mas quando o cora&ccedil;&atilde;o aperta</p>
<p>A&iacute; a saudade acerta</p>
<p>E eu voltei</p>
<p>Me perdoa amor</p>
<p>Hoje eu estou aqui</p>
',
                'creditos' => '
<p>Arranjo e piano: Julinho Teixeira</p>
<p>Contrabaixo: Jorj&atilde;o</p>
<p>Guitarra: Zeppa Souza</p>
<p>Bateria: Carlos Bala</p>
<p>Pandeiro, afox&eacute;, tempo block: Firmino</p>
<p>Sax alto/solo: Z&eacute; Carlos</p>
<p>Vocal: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Chico Pupo, Nair C&acirc;ndia, Jaime Alem, Zeppa Souza, Ronaldo Barcellos, Jurema C&acirc;ndia e Leno</p>
',
                'faixa_mp3' => '09_me_perdoa.mp3',
                'faixa_ogg' => '09_me_perdoa.ogg',
                'disco_id' => '12'));

        Musicas::create(
            array(
                'faixa' => 'Saga da Amaz&ocirc;nia',
                'compositor' => '(Vital Farias)',
                'letra' => '<p>I</p>
<p>Era uma vez na Amaz&ocirc;nia</p>
<p>A mais bonita floresta</p>
<p>Mata verde, c&eacute;u azul</p>
<p>A mais imensa floresta</p>
<p>No fundo d&rsquo;&aacute;gua as Iaras</p>
<p>Caboclo, lendas e m&aacute;goas</p>
<p>E os rios puxando as &aacute;guas</p>
<p>Papagaios, periquitos</p>
<p>Cuidavam de suas cores</p>
<p>Os peixes singrando os rios</p>
<p>Curumins cheios de amores</p>
<p>Sorria o jurupari</p>
<p>Uirapuru seu porvir</p>
<p>Era flora, fauna, frutos e flores</p>
<p>Toda mata tem caipora</p>
<p>Para a mata vigiar</p>
<p>Veio caipora de fora</p>
<p>Para a mata definhar</p>
<p>E trouxe drag&atilde;o de ferro</p>
<p>Pra comer muita madeira</p>
<p>E trouxe estilo gigante</p>
<p>Pra acabar com a capoeira</p>
<p>Fizeram logo o projeto</p>
<p>Sem ningu&eacute;m testemunhar</p>
<p>Pra o drag&atilde;o cortar madeira</p>
<p>E toda a mata derrubar</p>
<p>Se a floresta meu amigo</p>
<p>Tivesse p&eacute; pra andar</p>
<p>Eu garanto meu amigo</p>
<p>Com o perigo n&atilde;o tinha ficado l&aacute;</p>
<p>O que se corta em segundos</p>
<p>Gasta tempo pra vingar</p>
<p>E o fruto que d&aacute; no cacho</p>
<p>Pra gente se alimentar?</p>
<p>Depois tem o passarinho, tem o ninho, tem o ar</p>
<p>Igarap&eacute; rio abaixo</p>
<p>Tem riacho e esse rio que &eacute; um mar</p>
<p>&nbsp;</p>
<p>II</p>
<p>Mas o drag&atilde;o continua na floreta a devorar</p>
<p>E quem habita essa mata</p>
<p>Pra onde vai mudar?</p>
<p>Corre &iacute;ndio, seringueiro</p>
<p>Pregui&ccedil;a, tamandu&aacute;,</p>
<p>Tartaruga p&eacute; ligeiro</p>
<p>Corre-corre tribo dos Kamayur&aacute;</p>
<p>&nbsp;</p>
<p>III</p>
<p>No lugar que havia mata</p>
<p>Hoje h&aacute; persegui&ccedil;&atilde;o</p>
<p>Grileiro mata posseiro</p>
<p>S&oacute; pra lhe roubar seu ch&atilde;o</p>
<p>Castanheiro, seringueiro, j&aacute; viraram at&eacute; pe&atilde;o</p>
<p>Afora os que j&aacute; morreram</p>
<p>Como ave de arriba&ccedil;&atilde;o</p>
<p>Z&eacute; de Nana t&aacute; na prova</p>
<p>Naquele lugar tem cova</p>
<p>Gente enterrada no ch&atilde;o</p>
<p>Pois mataram o &iacute;ndio que matou grileiro</p>
<p>Que matou posseiro</p>
<p>Disse um castanheiro para um seringueiro</p>
<p>Que um estrangeiro roubou seu lugar</p>
<p>&nbsp;</p>
<p>IV</p>
<p>Foi ent&atilde;o que um violeiro</p>
<p>Chegando na regi&atilde;o</p>
<p>Ficou t&atilde;o penalizado</p>
<p>Escreveu essa can&ccedil;&atilde;o</p>
<p>E talvez desesperado com tanta devasta&ccedil;&atilde;o</p>
<p>Pegou primeira estrada</p>
<p>Sem rumo, sem dire&ccedil;&atilde;o</p>
<p>Com olhos cheios de &aacute;gua</p>
<p>Sumiu levando essa m&aacute;goa</p>
<p>Dentro do seu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>V</p>
<p>Assim termino essa hist&oacute;ria</p>
<p>Para gente de valor</p>
<p>Pra gente que tem mem&oacute;ria</p>
<p>Muita cren&ccedil;a, muito amor</p>
<p>Pra defender o que ainda resta</p>
<p>Sem rodeio, sem aresta</p>
<p>Era uma vez uma floresta</p>
<p>Na linha do Equador</p>
',
                'creditos' => '
<p>Arranjo e viol&atilde;o: Joca</p>
<p>Piano: Helvius Vilela</p>
<p>Prato, tambores e efeitos: Firmino</p>
<p>Contrabaixo ac&uacute;stico: Carlos Eduardo</p>
<p>Flautas: Celso Porta e Murilo Moss</p>
<p>Trombones: Edmundo Maciel e Roberto Marques</p>
<p>Clarinete: Paulo S&eacute;rgio Cunha</p>
<p>Obo&eacute;: Lia Gandelman</p>
<p>Violinos: Em&iacute;lio Batista Filho, Aizik Geller,</p>
<p>Arlindo Figueiredo, Bernardo Bessler, Denner Campolina, </p>
<p>Francisco Perrota, Jos&eacute; Alves, L&eacute;o Ortiz, </p>
<p>Michel Bessler, Paschoal Perrota, Virg&iacute;lio Arraes e Walter Hack</p>
<p>Violas: Alfredo Vidal, Jacques Morelenbaum e Marie Christine</p>
<p>Cellos: Jesu&iacute;na Noronha, Jorge Kundert, Marcio Eymard e Walter Clis</p>
',
                'faixa_mp3' => '10_saga_da_amazonia.mp3',
                'faixa_ogg' => '10_saga_da_amazonia.ogg',
                'disco_id' => '12'));

        Musicas::create(
            array(
                'faixa' => 'Feiti&ccedil;o  de Gafieira',
                'compositor' => '(Tadeu Mathias / Jaguar)',
                'letra' => '<p>Pra que falar de tristeza</p>
<p>Galo cantou, diz que vem</p>
<p>Na barra do dia sorrindo</p>
<p>A manh&atilde;, ser feliz</p>
<p>Vem que tem</p>
<p>Fuzu&ecirc; na gafieira</p>
<p>Rela, rela que a&iacute; vem</p>
<p>&nbsp;</p>
<p><strong>Banquete de signos</strong></p>
<p>(Z&eacute; Ramalho)</p>
<hr class="space-letra-top-musicas">
<p>Discutir o canga&ccedil;o com liberdade</p>
<p>&Eacute; saber da viola, da viol&ecirc;ncia</p>
<p>Descobrir nos cabelos inoc&ecirc;ncia</p>
<p>&Eacute; saber da fatal fertilidade</p>
<p>&nbsp;</p>
<p>Descobrir a cidade na natureza</p>
<p>Descobrir a beleza dessa mulher</p>
<p>Descobrir o que der boniteza</p>
<p>Na peleja do homem vier, quando vier</p>
<p>&nbsp;</p>
<p>Descobrir o baga&ccedil;o dos engenhos</p>
<p>No mela&ccedil;o da cana mais um beijo</p>
<p>Descobrir os desejos que n&atilde;o tem cura</p>
<p>Saracura do brejo da novena</p>
<p>&nbsp;</p>
<p>Descobrir a serena da natureza</p>
<p>Descobrir a beleza dessa mulher</p>
<p>Descobrir o que der boniteza</p>
<p>Na peleja do homem vier, quando vier</p>
<p>&nbsp;</p>
<p><strong>Jogo de cintura</strong></p>
<p>(Nando Cordel)</p>
<hr class="space-letra-top-musicas">
<p>Voc&ecirc; tem que ter</p>
<p>Jogo de cintura</p>
<p>Olho na mistura</p>
<p>N&atilde;o, n&atilde;o se incomodar</p>
<p>De vez em quando nessa vida</p>
<p>A gente engole um ca&ocirc;</p>
<p>&nbsp;</p>
<p>Pra se arrumar, pra se arrumar</p>
<p>Pra namorar, pra namorar</p>
<p>Pra ser feliz, pra ser feliz</p>
<p>Pra ter amor</p>
<p>&nbsp;</p>
<p>E a &ocirc;</p>
<p>Isso aqui vai melhorar</p>
<p>E a &ocirc;</p>
<p>Se a gente se enganchar</p>
<p>E a &ocirc;</p>
<p>Era bom que fosse j&aacute;</p>
<p>Voc&ecirc; quer, eu tamb&eacute;m quero</p>
<p>T&aacute; faltando come&ccedil;ar</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Brasil</strong></p>
<p>(Benedito Lacerda / Aldo Cabral)</p>
<hr class="space-letra-top-musicas">
<p>Brasil, &eacute;s o meu ber&ccedil;o dourado</p>
<p>O &iacute;ndio civilizado e aben&ccedil;oado por Deus</p>
<p>Brasil, gigante de um continente</p>
<p>&Eacute;s terra de toda gente</p>
<p>Orgulho dos filhos teus</p>
<p>&nbsp;</p>
<p><strong>Feiti&ccedil;o de gafieira</strong></p>
<p>(Tadeu Mathias / Jaguar)</p>
<hr class="space-letra-top-musicas">
<p>Mas pra que falar de tristeza</p>
<p>Galo cantou, diz que vem</p>
<p>Na barra do dia sorrindo</p>
<p>A manh&atilde;, ser feliz</p>
<p>Vem que tem</p>
<p>Fuzu&ecirc; na gafieira</p>
<p>Rela, rela que a&iacute; vem</p>
<p>&nbsp;</p>
<p>Mais um chorinho</p>
<p>Meu amor balan&ccedil;adinho</p>
<p>Vem dan&ccedil;ar com esse jeitinho</p>
<p>Que &eacute; meu e de mais ningu&eacute;m</p>
<p>&nbsp;</p>
<p>Me enrosca toda</p>
<p>Me d&aacute; um abra&ccedil;o</p>
<p>Acerta o passo da minha paix&atilde;o</p>
<p>Parece at&eacute;, ah, um descompasso</p>
<p>Batendo no meu peito, no meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Quero bem tanto de voc&ecirc;</p>
<p>Quero no ponto</p>
<p>Me deixa tonto de amor beber</p>
<p>No c&eacute;u a lua se derrete em pranto</p>
<p>Chorando de inveja d&rsquo;oc&ecirc;</p>
',
                'creditos' => '',
                'faixa_mp3' => '01_feitico_de_gafieira_banquete.mp3',
                'faixa_ogg' => '01_feitico_de_gafieira_banquete.ogg',
                'disco_id' => '13'));

        Musicas::create(
            array(
                'faixa' => 'Pau-de-Arara (Vinheta)',
                'compositor' => '(Guio de Morais / Luiz Gonzaga)',
                'letra' => '<p>Quando eu vim do sert&atilde;o seu mo&ccedil;o</p>
<p>Do meu Bodoc&oacute;</p>
<p>A maleta era o saco</p>
<p>O cadeado era um n&oacute;</p>
<p>S&oacute; trazia a coragem e a cara</p>
<p>Viajando num pau-de-arara</p>
<p>Eu penei, mas aqui cheguei</p>
<p>Viajando num pau-de-arara</p>
<p>Eu penei, mas aqui cheguei</p>
',
                'creditos' => '',
                'faixa_mp3' => '02_pau_de_arara.mp3',
                'faixa_ogg' => '02_pau_de_arara.ogg',
                'disco_id' => '13'));

        Musicas::create(
            array(
                'faixa' => 'Filho das &iacute;ndias',
                'compositor' => '(Vinicius Cantu&aacute;ria)',
                'letra' => '<p>Irupixuna bati&ecirc;, ela dan&ccedil;ava</p>
<p>Filho das &iacute;ndias</p>
<p>Irupixuna bati&ecirc;, ela dan&ccedil;ava</p>
<p>Filho das &iacute;ndias</p>
<p>&nbsp;</p>
<p><strong>A volta dos trov&otilde;es</strong></p>
<p>(Br&aacute;ulio Tavares / Fub&aacute;)</p>
<hr class="space-letra-top-musicas">
<p>Um tambor amedrontou a mata</p>
<p>Quando o dia clareou</p>
<p>Na clareira respondeu a flauta</p>
<p>Um aviso de terror</p>
<p>&nbsp;</p>
<p>Um cacique descobriu pegadas</p>
<p>De um estranho ca&ccedil;ador</p>
<p>Uma tribo foi exterminada</p>
<p>Onde o rio avermelhou</p>
<p>&nbsp;</p>
<p>Antes das chuvas</p>
<p>Quando o trov&atilde;o tombou das estrelas</p>
<p>E a selva escura</p>
<p>Viu brilhar nas m&atilde;os de um deus</p>
<p>Armas de estrondo e luz</p>
<p>Como avisou a lenda</p>
<p>Armas de estrondo e luz</p>
<p>&nbsp;</p>
<p>On&ccedil;a negra caminhou nas cinzas</p>
<p>Da fogueira que passou</p>
<p>Gavi&atilde;o voando contra a brisa</p>
<p>Viu a mancha do trator</p>
<p>&nbsp;</p>
<p>Sobre o ch&atilde;o onde os paj&eacute;s dan&ccedil;avam</p>
<p>Uma vila se formou</p>
<p>Todo dia longe ressoava</p>
<p>O machado lenhador</p>
<p>&nbsp;</p>
<p>Dentro da selva</p>
<p>Pulsam os cora&ccedil;&otilde;es dos guerreiros</p>
<p>Esperando a noite</p>
<p>Em que os astros v&atilde;o trazer</p>
<p>A volta dos trov&otilde;es</p>
<p>Como promete a lenda</p>
<p>A volta dos trov&otilde;es</p>
<p>&nbsp;</p>
<p><strong>Um &iacute;ndio (texto)</strong></p>
<p>(Caetano Veloso)</p>
<hr class="space-letra-top-musicas">
<p>Um &iacute;ndio descer&aacute;</p>
<p>De uma estrela colorida brilhante</p>
<p>De uma estrela que vir&aacute;</p>
<p>Numa velocidade estonteante</p>
<p>E pousar&aacute; no cora&ccedil;&atilde;o do hemisf&eacute;rio sul</p>
<p>Na Am&eacute;rica, na Am&eacute;rica</p>
<p>Na Am&eacute;rica, num claro instante</p>
',
                'creditos' => '',
                'faixa_mp3' => '03_filho_das_indias_a_volta_dos_trovoes_um_indio.mp3',
                'faixa_ogg' => '03_filho_das_indias_a_volta_dos_trovoes_um_indio.ogg',
                'disco_id' => '13'));

        Musicas::create(
            array(
                'faixa' => 'Imaculada',
                'compositor' => '(Ary Sperling / Aldir Blanc)',
                'letra' => '<p>Meu castelo &eacute; a casa da fazenda</p>
<p>Onde te&ccedil;o a minha lenda</p>
<p>Sei, meu pr&iacute;ncipe vir&aacute;</p>
<p>Esse sonho bom que me alimenta</p>
<p>A espera &eacute; menos lenta</p>
<p>Se o desejo delirar</p>
<p>&nbsp;</p>
<p>Eu prefiro assim</p>
<p>Pois com essa espera</p>
<p>Domo a fera que h&aacute; em mim</p>
<p>&Eacute; imaculada a semente do prazer</p>
<p>Rosa ardente por florescer</p>
<p>&nbsp;</p>
<p>A crian&ccedil;a deixa o para&iacute;so</p>
<p>Fadas, c&oacute;rregos, sorrisos</p>
<p>A pureza virginal</p>
<p>Planta no seu seio adolescente</p>
<p>A ma&ccedil;&atilde; e a serpente</p>
<p>Do pecado original</p>
<p>&nbsp;</p>
<p>Quero ser mulher</p>
<p>No lugar e hora que meu pr&iacute;ncipe quiser</p>
<p>E assim conquistada pela espada do querer</p>
<p>Continua a ser imaculada</p>
',
                'creditos' => '',
                'faixa_mp3' => '04_imaculada.mp3',
                'faixa_ogg' => '04_imaculada.ogg',
                'disco_id' => '13'));

        Musicas::create(
            array(
                'faixa' => 'Miss Celie&#39;s blues',
                'compositor' => '(Quincy Jones / Rod Temperton / Lionel Richie)',
                'letra' => '<p>Sister, you&rsquo;ve been on my mind</p>
<p>Oh sister, we&#39;re two of a kind</p>
<p>So, sister, I&#39;m keepin&rsquo; my eye on you</p>
<p>I betcha think I don&#39;t know nothin&rsquo;</p>
<p>But singin&rsquo; the blues, oh, sister</p>
<p>Have I got news for you, I&rsquo;m something</p>
<p>I hope you think that you&rsquo;re something too</p>
<p>&nbsp;</p>
<p>Scufflin&rsquo;, I been up that lonesome road</p>
<p>And I seen a lot of suns going down</p>
<p>Oh, but trust me</p>
<p>No-o low life&#39;s gonna run me around</p>
<p>&nbsp;</p>
<p>So let me tell you something sister</p>
<p>Remember your name, no twister</p>
<p>Gonna steal your stuff away, my sister</p>
<p>Sho&rsquo; ain&rsquo;t got a whole lot of time</p>
<p>So-o-o shake your shimmy sister</p>
<p>&lsquo;Cause honey this Shug</p>
<p>&lsquo;Cause honey</p>
<p>&lsquo;Cause honey this Shug is feelin&rsquo; fine</p>
',
                'creditos' => '
',
                'faixa_mp3' => '05_miss_celies_blues.mp3',
                'faixa_ogg' => '05_miss_celies_blues.ogg',
                'disco_id' => '13'));

        Musicas::create(
            array(
                'faixa' => 'Tango de Nancy',
                'compositor' => '(Chico Buarque / Edu Lobo)',
                'letra' => '<p>Quem sou eu para falar de amor</p>
<p>Se o amor me consumiu at&eacute; a espinha</p>
<p>Dos meus beijos que falar</p>
<p>Dos desejos de queimar</p>
<p>E dos beijos que apagaram</p>
<p>Os desejos que eu tinha</p>
<p>&nbsp;</p>
<p>Quem sou eu para falar de amor</p>
<p>Se de tanto me entregar</p>
<p>Nunca fui minha</p>
<p>O amor jamais foi meu</p>
<p>O amor me conheceu</p>
<p>Se esfregou na minha vida</p>
<p>E me deixou assim</p>
<p>&nbsp;</p>
<p>Homens eu n&atilde;o fiz a soma</p>
<p>De quantos rolaram no meu camarim</p>
<p>Outras chegaram a Roma passando por mim</p>
<p>Ela de bra&ccedil;os abertos fazendo promessa</p>
<p>Meus deuses, enfim!</p>
<p>Eles gozando depressa</p>
<p>Cheirando a gim</p>
<p>&nbsp;</p>
<p>Eles querendo na hora</p>
<p>Por dentro, por fora</p>
<p>Por cima e por tr&aacute;s</p>
<p>Juro por Deus de p&eacute;s juntos</p>
<p>Que nunca mais</p>
',
                'creditos' => '
',
                'faixa_mp3' => '06_tango_de_nancy.mp3',
                'faixa_ogg' => '06_tango_de_nancy.ogg',
                'disco_id' => '13'));

        Musicas::create(
            array(
                'faixa' => 'Las Muchachas de Copacabana',
                'compositor' => '(Chico Buarque)',
                'letra' => '<p>Se o cliente quer rumbeira, tem</p>
<p>Com tempero da baiana</p>
<p>Somos las muchachas de Copacabana</p>
<p>Somos las muchachas de Copacabana</p>
<p>&nbsp;</p>
<p>Cubanita brasileira tem</p>
<p>Com sombreiro &agrave; mexicana</p>
<p>Somos Las Muchachas de Copacabana</p>
<p>Somos Las Muchachas de Copacabana</p>
<p>&nbsp;</p>
<p>&ldquo;Mam&atilde;e</p>
<p>Desculpa meus erros de caligrafia</p>
<p>Lembran&ccedil;a da filha</p>
<p>Que brilha aqui na capital</p>
<p>&Eacute; uma estrela internacional</p>
<p>Tua filha na capital</p>
<p>&Eacute; uma estrela internacional&rdquo;</p>
<p>&nbsp;</p>
<p>Quer uma amazona, o gringo tem</p>
<p>Um domingo com a havaiana</p>
<p>Somos las muchachas de Copacabana</p>
<p>Somos las muchachas de Copacabana</p>
<p>&nbsp;</p>
<p>Se quer uma pecadora, tem</p>
<p>Uma loura mu&ccedil;ulmana</p>
<p>Somos las muchachas de Copacabana</p>
<p>Somos las muchachas de Copacabana</p>
<p>&nbsp;</p>
<p>&ldquo;Mam&atilde;e</p>
<p>Pro m&ecirc;s eu lhe mando umas economias</p>
<p>Lembran&ccedil;a da filha</p>
<p>Que brilha aqui na capital</p>
<p>&Eacute; uma estrela internacional</p>
<p>Tua filha na capital</p>
<p>&Eacute; uma estrela internacional&rdquo;</p>
<p>&nbsp;</p>
<p>Atra&ccedil;&atilde;o da Martinica, tem</p>
<p>Uma chica sergipana</p>
<p>Paraguaia da Jamaica, tem</p>
<p>Balalaica peruana</p>
<p>Corcovado em Mar del Plata, tem</p>
<p>Catarata de banana</p>
<p>&Iacute;ndia canibal, na certa tem</p>
<p>&Eacute; oferta da semana</p>
<p>Somos las muchachas de Copacabana</p>
<p>Somos las muchachas de Copacabana</p>

',
                'creditos' => '
',
                'faixa_mp3' => '07_las_muchachas_de_copacabana.mp3',
                'faixa_ogg' => '07_las_muchachas_de_copacabana.ogg',
                'disco_id' => '13'));

        Musicas::create(
            array(
                'faixa' => 'Ouro Puro',
                'compositor' => '(Cec&iacute;lio Nena / C&eacute;sar Rossini)',
                'letra' => '<p>Seu amor &eacute; uma luz</p>
<p>&Eacute; um brilho no escuro</p>
<p>Ouro puro, ouro puro</p>
<p>T&ocirc; gamado em voc&ecirc;</p>
<p>&nbsp;</p>
<p>Voc&ecirc; me assanha, me acende</p>
<p>Me deixa em apuros</p>
<p>Ouro puro, ouro puro</p>
<p>Voc&ecirc; me d&aacute; prazer</p>
<p>&nbsp;</p>
<p>Me faz brilhar</p>
<p>Todo o meu querer</p>
<p>Quando estou no seu corpo</p>
<p>Suado queimando de paix&atilde;o</p>
<p>&nbsp;</p>
<p>Vem lapidar</p>
<p>Vem se derreter</p>
<p>Quero banhar no teu beijo</p>
<p>Te dar com desejo o meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>A vida inteira te amar</p>
<p>Ouro puro</p>
<p>A vida inteira te namorar</p>
<p>Ouro puro</p>
<p>&nbsp;</p>
<p>A vida inteira te beijar</p>
<p>A vida inteira me entregar</p>
<p>A vida inteira te beijar</p>
<p>A vida inteira me entregar</p>
',
                'creditos' => '
',
                'faixa_mp3' => '08_ouro_puro.mp3',
                'faixa_ogg' => '08_ouro_puro.ogg',
                'disco_id' => '13'));

        Musicas::create(
            array(
                'faixa' => 'Doida',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>&Ocirc;, &ocirc;, &ocirc;, &ocirc;</p>
<p>&Ocirc;, &ocirc;, &ocirc;, &ocirc;, &ocirc;</p>
<p>Me saculeja, me beija</p>
<p>Me d&aacute; teu calor</p>
<p>&nbsp;</p>
<p>Doida, muito doida eu sou</p>
<p>Pelo teu amor</p>
<p>Doida, muito doida eu t&ocirc;</p>
<p>Pelo teu amor</p>
<p>&nbsp;</p>
<p>Vem mexer comigo</p>
<p>Pra ver meu fogo te ascender</p>
<p>Vem rolar comigo</p>
<p>Se lambuzar no meu prazer</p>
<p>Te dou carinho, te fa&ccedil;o um dengo</p>
<p>Deixo a fim</p>
<p>Te fa&ccedil;o tudo</p>
<p>E voc&ecirc; s&oacute; faz gostar de mim</p>
<p>&nbsp;</p>
<p><strong>V&ecirc; estrelas</strong></p>
<p>(Nando Cordel)</p>
<hr class="space-letra-top-musicas">
<p>&Eacute; hoje que a gente v&ecirc;</p>
<p>Estrelas</p>
<p>&Eacute; hoje que a gente faz</p>
<p>Amor</p>
<p>&nbsp;</p>
<p>Que bom, que bom querer</p>
<p>Voc&ecirc;</p>
<p>Que bom, que bom querer</p>
<p>Voc&ecirc;</p>
',
                'creditos' => '
',
                'faixa_mp3' => '09_doida_ve_estrelas.mp3',
                'faixa_ogg' => '09_doida_ve_estrelas.ogg',
                'disco_id' => '13'));

        Musicas::create(
            array(
                'faixa' => 'Veja (Margarida)',
                'compositor' => '(Vital Farias)',
                'letra' => '<p>Veja voc&ecirc;, arco-&iacute;ris j&aacute; mudou de cor</p>
<p>E uma rosa nunca mais desabrochou</p>
<p>E eu n&atilde;o quero ver voc&ecirc;</p>
<p>Com esse gosto de sab&atilde;o na boca</p>
<p>&nbsp;</p>
<p>Arco-&iacute;ris j&aacute; mudou de cor</p>
<p>E uma rosa nunca mais desabrochou</p>
<p>E eu n&atilde;o quero ver voc&ecirc;</p>
<p>Eu n&atilde;o quero ver</p>
<p>&nbsp;</p>
<p>Veja meu bem</p>
<p>Gasolina vai subir de pre&ccedil;o</p>
<p>E eu n&atilde;o quero nunca mais seu endere&ccedil;o</p>
<p>Ou &eacute; o come&ccedil;o do fim ou &eacute; o fim</p>
<p>&nbsp;</p>
<p>Eu vou partir</p>
<p>Pra cidade garantida, proibida</p>
<p>Arranjar meio de vida, Margarida</p>
<p>Pra voc&ecirc; gostar de mim</p>
<p>&nbsp;</p>
<p>E essas feridas da vida, Margarida</p>
<p>Essas feridas da vida, amarga vida</p>
<p>Pra voc&ecirc; gostar</p>
<p>(Pra voc&ecirc; gostar de mim)</p>
',
                'creditos' => '
',
                'faixa_mp3' => '10_veja_margarida_.mp3',
                'faixa_ogg' => '10_veja_margarida_.ogg',
                'disco_id' => '13'));

        Musicas::create(
            array(
                'faixa' => 'Beatriz',
                'compositor' => '(Edu Lobo / Chico Buarque) Participa&ccedil;&atilde;o Especial: <strong> Tadeu Mathias</strong>',
                'letra' => '<p>Olha</p>
<p>Ser&aacute; que ela &eacute; mo&ccedil;a</p>
<p>Ser&aacute; que ela &eacute; triste</p>
<p>Ser&aacute; que &eacute; o contr&aacute;rio</p>
<p>Ser&aacute; que &eacute; pintura</p>
<p>O rosto da atriz</p>
<p>Se ela dan&ccedil;a no s&eacute;timo c&eacute;u</p>
<p>Se ela acredita que &eacute; outro pa&iacute;s</p>
<p>E se ela s&oacute; decora o seu papel</p>
<p>E se eu pudesse entrar na sua vida</p>
<p>&nbsp;</p>
<p>Olha</p>
<p>Ser&aacute; que ela &eacute; lou&ccedil;a</p>
<p>Ser&aacute; que ela de &eacute;ter</p>
<p>Ser&aacute; que &eacute; loucura</p>
<p>Ser&aacute; que &eacute; cen&aacute;rio</p>
<p>A casa da atriz</p>
<p>Se ela mora num arranha-c&eacute;u</p>
<p>E se as paredes s&atilde;o feitas de giz</p>
<p>E se ela chora num quarto de hotel</p>
<p>Se eu pudesse entrar na sua vida</p>
<p>&nbsp;</p>
<p>Sim</p>
<p>Me leva para sempre Beatriz</p>
<p>Me ensina a n&atilde;o andar</p>
<p>Com os p&eacute;s no ch&atilde;o</p>
<p>Para sempre, &eacute; sempre por um triz</p>
<p>Diz quantos desastres tem na minha m&atilde;o</p>
<p>Diz se &eacute; perigoso a gente ser feliz</p>
<p>&nbsp;</p>
<p>Olha</p>
<p>Ser&aacute; que &eacute; uma estrela</p>
<p>Ser&aacute; que &eacute; mentira</p>
<p>Ser&aacute; que &eacute; com&eacute;dia</p>
<p>Ser&aacute; que &eacute; divina</p>
<p>A vida da atriz</p>
<p>Se ela um dia despencar do c&eacute;u</p>
<p>E se os pagantes exigirem bis</p>
<p>E se o arcanjo passar o chap&eacute;u</p>
<p>E se eu pudesse</p>
<p>Ah, se eu pudesse entrar na sua vida</p>
',
                'creditos' => '
',
                'faixa_mp3' => '11_beatriz_com_tadeu_mathias_.mp3',
                'faixa_ogg' => '11_beatriz_com_tadeu_mathias_.ogg',
                'disco_id' => '13'));

        Musicas::create(
            array(
                'faixa' => 'Marim dos Caet&eacute;s',
                'compositor' => '(Alceu Valença)',
                'letra' => '<p><em>O artista precisa aparecer. N&atilde;o porque ele seja melhor do ningu&eacute;m. Mas porque o artista &eacute; transparente. E atrav&eacute;s da sua transpar&ecirc;ncia a gente pode enxergar o mundo. E o mundo precisa aparecer tamb&eacute;m.</em></p>
<p>&nbsp;</p>
<p>N&atilde;o chore menina bonita</p>
<p>Se Deus quiser</p>
<p>Te vejo na Marim guerreira dos Caet&eacute;s</p>
<p>De novo pra subir ladeiras</p>
<p>Te dou, te dou meus p&eacute;s</p>
<p>Olinda, Marim t&atilde;o bonita dos Caet&eacute;s</p>
<p>&nbsp;</p>
<p>Vamos embora cabra cabriola</p>
<p>T&aacute; chegando a hora da gente arribar</p>
<p>Vamos simbora, j&aacute; fui caipora</p>
<p>No jogo da sorte sempre dei azar</p>
<p>&nbsp;</p>
<p>Vamos simbora, sei do itiner&aacute;rio</p>
<p>Por ali passamos, por aqui passou</p>
<p>Uma La Ursa da fita amarela</p>
<p>Abrindo janelas para o nosso amor</p>
',
                'creditos' => '
',
                'faixa_mp3' => '12_marim_dos_caetes.mp3',
                'faixa_ogg' => '12_marim_dos_caetes.ogg',
                'disco_id' => '13'));

        Musicas::create(
            array(
                'faixa' => 'Popular Brasileira',
                'compositor' => '(Moraes Moreira / Fred G&oacute;es)',
                'letra' => '<p>Foi pra Cuba dan&ccedil;ar rumba</p>
<p>Foi pras ilhas de l&aacute;, filha</p>
<p>O Brasil foi levar</p>
<p>Samba, frevos e maracatus</p>
<p>&nbsp;</p>
<p>Quem olhasse em seus olhos via</p>
<p>A ciranda girando tinha</p>
<p>Um sabor de mesti&ccedil;a pele</p>
<p>Lembran&ccedil;a da Bahia</p>
<p>&nbsp;</p>
<p>Sapatilhas de ponta amor</p>
<p>Fiz o ch&atilde;o e a cada passo</p>
<p>Se voc&ecirc; me levar eu vou</p>
<p>Estreitar nossos la&ccedil;os</p>
<p>&nbsp;</p>
<p>Amizade e estima s&atilde;o</p>
<p>Nordestina alegria sim</p>
<p>Diz que tem, que tem solu&ccedil;&atilde;o</p>
<p>Guerrilheira de mim</p>
<p>&nbsp;</p>
<p>&Eacute; bonita, erudita</p>
<p>Popular brasileira</p>
<p>Deixe o vento levar o som</p>
<p>N&atilde;o tem fronteiras</p>
',
                'creditos' => '
',
                'faixa_mp3' => '13_popular_brasileira.mp3',
                'faixa_ogg' => '13_popular_brasileira.ogg',
                'disco_id' => '13'));

        Musicas::create(
            array(
                'faixa' => 'Nordeste Independente (Imagine o Brasil)',
                'compositor' => '(Br&aacute;ulio Tavares / Ivanildo Vilanova)',
                'letra' => '<p>J&aacute; que existe no sul esse conceito</p>
<p>Que o nordeste &eacute; ruim, seco e ingrato</p>
<p>J&aacute; que existe a separa&ccedil;&atilde;o de fato</p>
<p>&Eacute; preciso torn&aacute;-la de direito</p>
<p>Quando um dia qualquer isso for feito</p>
<p>Todos dois v&atilde;o lucrar imensamente</p>
<p>Come&ccedil;ando uma vida diferente</p>
<p>De que a gente at&eacute; hoje tem vivido</p>
<p>Imagina o Brasil ser dividido</p>
<p>E o Nordeste ficar independente</p>
<p>&nbsp;</p>
<p>Dividindo a partir de Salvador</p>
<p>O nordeste seria outro pa&iacute;s</p>
<p>Vigoroso, leal, rico e feliz</p>
<p>Sem dever a ningu&eacute;m no exterior</p>
<p>Jangadeiro seria o senador</p>
<p>O cassaco de ro&ccedil;a era o suplente</p>
<p>Cantador de viola o presidente</p>
<p>O vaqueiro era o l&iacute;der do partido</p>
<p>Imagina o Brasil ser dividido</p>
<p>E o Nordeste ficar independente</p>
<p>&nbsp;</p>
<p>Em Recife o distrito industrial</p>
<p>O idioma ia ser nordestinense</p>
<p>A bandeira de renda cearense</p>
<p>Asa Branca era o hino nacional</p>
<p>O folheto era o s&iacute;mbolo oficial</p>
<p>A moeda, o tost&atilde;o de antigamente</p>
<p>Conselheiro seria o inconfidente</p>
<p>Lampi&atilde;o, o her&oacute;i inesquecido</p>
<p>Imagina o Brasil ser dividido</p>
<p>E o Nordeste ficar independente</p>
<p>&nbsp;</p>
<p>O Brasil ia ter de importar</p>
<p>Do nordeste algod&atilde;o, cana, caju</p>
<p>Carna&uacute;ba, laranja, baba&ccedil;u</p>
<p>Abacaxi e o sal de cozinhar</p>
<p>O arroz, o agave do lugar</p>
<p>O petr&oacute;leo, a cebola, o aguardente</p>
<p>O Nordeste &eacute; autossuficiente</p>
<p>O seu lucro seria garantido</p>
<p>Imagina o Brasil ser dividido</p>
<p>E o Nordeste ficar independente</p>
<p>&nbsp;</p>
<p>Se isso a&iacute; se tornar realidade</p>
<p>E algu&eacute;m do Brasil nos visitar</p>
<p>Nesse nosso pa&iacute;s vai encontrar</p>
<p>Confian&ccedil;a, respeito e amizade</p>
<p>Tem o p&atilde;o repartido na metade</p>
<p>Tem o prato na mesa, a cama quente</p>
<p>Brasileiro ser&aacute; irm&atilde;o da gente</p>
<p>Vai pra l&aacute; que ser&aacute; bem recebido</p>
<p>Imagina o Brasil ser dividido</p>
<p>E o Nordeste ficar independente</p>
<p>&nbsp;</p>
<p>Eu n&atilde;o quero com isso que voc&ecirc;s</p>
<p>Imaginem que eu tento ser grosseiro</p>
<p>Pois se lembrem que o povo brasileiro</p>
<p>&Eacute; amigo do povo portugu&ecirc;s</p>
<p>Se um dia a separa&ccedil;&atilde;o se fez</p>
<p>Todos os dois se respeitam no presente</p>
<p>Se isso a&iacute; j&aacute; deu certo antigamente</p>
<p>Nesse exemplo concreto e conhecido</p>
<p>Imagina o Brasil ser dividido</p>
<p>E o Nordeste ficar independente</p>
<p>&nbsp;</p>
<p>Povo do meu Brasil</p>
<p>Pol&iacute;ticos brasileiros</p>
<p>Nunca pensem que voc&ecirc;s nos enganam</p>
<p>Porque no fundo, no fundo</p>
<p>Nosso povo n&atilde;o &eacute; besta!</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Asa Branca</strong></p>
<p>(Luiz Gonzaga / Humberto Teixeira)</p>
<hr class="space-letra-top-musicas">
<p>Qual fogueira de S&atilde;o Jo&atilde;o</p>
<p>Eu perguntei a Deus do c&eacute;u, ai</p>
<p>Por que tamanha judia&ccedil;&atilde;o</p>
<p>Eu perguntei a Deus do c&eacute;u, ai</p>
<p>Por que tamanha judia&ccedil;&atilde;o</p>
',
                'creditos' => '
',
                'faixa_mp3' => '14_nordeste_independente_asa_branca.mp3',
                'faixa_ogg' => '14_nordeste_independente_asa_branca.ogg',
                'disco_id' => '13'));

        Musicas::create(
            array(
                'faixa' => 'Vida',
                'compositor' => '(Roger Kedyh / Maria Ju&ccedil;&aacute;) Participa&ccedil;&atilde;o Especial:<strong> Lulu Santos</strong>',
                'letra' => '<p>Vida &eacute; assim</p>
<p>Vida</p>
<p>Vida &eacute; assim</p>
<p>Vida humana</p>
<p>&nbsp;</p>
<p>Vida &eacute; alegria</p>
<p>Vida me d&aacute; prazer</p>
<p>Vida &eacute; a luz do dia</p>
<p>Viva vadia</p>
<p>Vida &eacute; o amor</p>
<p>Vida &eacute; cor e confus&atilde;o</p>
<p>Vida &eacute; som e paix&atilde;o</p>
<p>&nbsp;</p>
<p>Vida &eacute; alegria</p>
<p>Vida me d&aacute; prazer</p>
<p>Vida &eacute; a luz do dia</p>
<p>Viva vivida</p>
<p>Vida &eacute; o amor</p>
<p>Vida &eacute; cor e confus&atilde;o</p>
<p>Vida &eacute; som e paix&atilde;o</p>
',
                'creditos' => '
<p>Arranjo e teclados: Eduardo Souto Netto</p>
<p>Guitarras: Lulu Santos</p>
<p>Bateria: Elber Bedaque</p>
<p>Contrabaixo: Jamil Joanes</p>
<p>Jamblock, congas e timbales: Repolho</p>
<p>Trompetes: Marcio Montarroyos e Paulinho</p>
<p>Trombone: Serginho</p>
<p>Sax alto: Marcelo Martins e Mauro Senise</p>
<p>Sax tenor: Maca&eacute;</p>
<p>Coro: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Nair C&acirc;ndia, Fab&iacute;ola, Jaime Alem, Marcio Lott, Chico Pupo e Paulinho Soledade</p>
</p>
',
                'faixa_mp3' => '01_vida.mp3',
                'faixa_ogg' => '01_vida.ogg',
                'disco_id' => '14'));

        Musicas::create(
            array(
                'faixa' => 'Felicidade Urgente',
                'compositor' => '(Cl&aacute;udio Zoli / Ronaldo Lobato Santos) Participação Especial: <strong>Cl&aacute;udio Zoli</strong>',
                'letra' => '<p>Nunca mais eu vou voltar</p>
<p>Essa estrada &eacute; meu destino</p>
<p>Vou seguir a minha vida</p>
<p>Vou achar o meu lugar</p>
<p>&nbsp;</p>
<p>Louco pra viver em paz</p>
<p>Eu procuro para&iacute;sos</p>
<p>Em lugares esquecidos</p>
<p>Em viagens ao luar</p>
<p>&nbsp;</p>
<p>Eu vi a cor</p>
<p>Sonhos</p>
<p>E sei de cor</p>
<p>O que &eacute; melhor pra mim</p>
<p>&nbsp;</p>
<p>A vida me fez desse jeito</p>
<p>O mundo &eacute; t&atilde;o imperfeito</p>
<p>Pouca gente tem direito a ser feliz</p>
<p>O tempo passa de repente</p>
<p>Felicidade urgente para todos</p>
<p>Para todos n&oacute;s</p>
<p>&nbsp;</p>
<p>Quero te fazer feliz</p>
<p>Quero ser feliz tamb&eacute;m</p>
<p>Com voc&ecirc; t&aacute; tudo bem</p>
<p>T&aacute; tudo bem</p>
<p>&nbsp;</p>
<p>N&atilde;o vou mais olhar pra tr&aacute;s</p>
<p>No caminho do infinito</p>
<p>Encontrei uma raz&atilde;o</p>
<p>E me perdi no teu olhar</p>
<p>&nbsp;</p>
<p>Eu sempre quis muito mais</p>
<p>Mais do que era preciso</p>
<p>Quis milagres absintos</p>
<p>E del&iacute;rios de prazer</p>

',
                'creditos' => '
<p>Arranjo, guitarras e voz: Claudio Zoli</p>
<p>Teclados: Eduardo Souto Netto</p>
<p>Bateria: Elber Bedaque</p>
<p>Contrabaixo: Jamil Joanes</p>
<p>Congas, timbales, afox&eacute; e martelo chin&ecirc;s: Repolho</p>
<p>Coro: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Nair C&acirc;ndia, Fab&iacute;ola, Jaime Alem, Marcio Lott, Chico Pupo, Paulinho Soledade e Myrian Perachi</p>
',
                'faixa_mp3' => '02_felicidade_urgente.mp3',
                'faixa_ogg' => '02_felicidade_urgente.ogg',
                'disco_id' => '14'));

        Musicas::create(
            array(
                'faixa' => 'Morena de Angola',
                'compositor' => '(Chico Buarque)',
                'letra' => '<p>Morena de Angola</p>
<p>Que leva o chocalho amarrado na canela</p>
<p>Ser&aacute; que ela mexe o chocalho</p>
<p>Ou o chocalho &eacute; que mexe com ela</p>
<p>&nbsp;</p>
<p>Ser&aacute; que a morena cochila</p>
<p>Escutando o cochicho do chocalho</p>
<p>Ser&aacute; que desperta gingando</p>
<p>E j&aacute; sai chocalhando pro trabalho</p>
<p>&nbsp;</p>
<p>Ser&aacute; que ela t&aacute; na cozinha</p>
<p>Guisando a galinha &agrave; cabidela</p>
<p>Ser&aacute; que esqueceu da galinha</p>
<p>E ficou batucando na panela</p>
<p>&nbsp;</p>
<p>Ser&aacute; que no meio da mata, na moita</p>
<p>A morena inda chocalha</p>
<p>Ser&aacute; que ela n&atilde;o fica afoita</p>
<p>Pra dan&ccedil;ar na chama da batalha</p>
<p>&nbsp;</p>
<p>Morena de Angola</p>
<p>Que leva o chocalho amarrado na canela</p>
<p>Passando pelo regimento</p>
<p>Ela faz requebrar a sentinela</p>
<p>&nbsp;</p>
<p>Ser&aacute; que quando vai pra cama</p>
<p>A morena se esquece dos chocalhos</p>
<p>Ser&aacute; que namora fazendo bochincho</p>
<p>Com seus penduricalhos</p>
<p>&nbsp;</p>
<p>Ser&aacute; que ela t&aacute; caprichando</p>
<p>No peixe que eu trouxe de Benguela</p>
<p>Ser&aacute; que t&aacute; no remelexo</p>
<p>Abandonou meu peixe na tigela</p>
<p>&nbsp;</p>
<p>Ser&aacute; que quando fica choca</p>
<p>P&otilde;e de quarentena o seu chocalho</p>
<p>Ser&aacute; que depois ela bota</p>
<p>A canela no nicho do pirralho</p>
<p>&nbsp;</p>
<p>Morena de Angola</p>
<p>Que leva o chocalho amarrado na canela</p>
<p>Eu acho que deixei um cacho</p>
<p>Do meu cora&ccedil;&atilde;o na Catumbela</p>
<p>&nbsp;</p>
<p>Morena de Angola</p>
<p>Que leva o chocalho amarrado na canela</p>
<p>Morena, bichinha danada</p>
<p>Minha camarada do MPLA</p>
',
                'creditos' => '
<p>Arranjo e teclados: Eduardo Souto Netto</p>
<p>Bateria: Elber Bedaque</p>
<p>Contrabaixo: Jamil Joanes</p>
<p>Guitarra: Manass&eacute;s</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
<p>Congas, ganz&aacute; e xequer&ecirc;: Repolho</p>
<p>Coro: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Nair C&acirc;ndia, Fab&iacute;ola e Elba Ramalho</p>
',
                'faixa_mp3' => '03_morena_de_angola.mp3',
                'faixa_ogg' => '03_morena_de_angola.ogg',
                'disco_id' => '14'));

        Musicas::create(
            array(
                'faixa' => 'Ventos do Norte',
                'compositor' => '(Djavan) Participa&ccedil;&atilde;o Especial: <strong> Djavan</strong>',
                'letra' => '<p>Bem-vinda n&atilde;o sei de onde</p>
<p>N&atilde;o sei como apareceu</p>
<p>Se foi dos ventos do norte</p>
<p>Ou da mar&eacute; que cresceu</p>
<p>&nbsp;</p>
<p>Toquei o seu lindo rosto</p>
<p>E logo me apaixonei</p>
<p>Amei com bastante gosto</p>
<p>Tomei o posto de rei</p>
<p>&nbsp;</p>
<p>&Eacute; como se eu tivesse</p>
<p>Toda a for&ccedil;a de uma prece</p>
<p>A me rodear</p>
<p>&Eacute; como se eu tivesse</p>
<p>Toda a for&ccedil;a de uma prece</p>
<p>A me rodear</p>
<p>&nbsp;</p>
<p>O meu amor foi t&atilde;o grande</p>
<p>Que eu nem pude atinar</p>
<p>Toda a mar&eacute;, todo o vento</p>
<p>Como vem, torna a voltar</p>
<p>&nbsp;</p>
<p>Assim se foi meu amor</p>
<p>Deixando como lembran&ccedil;a</p>
<p>A barra de sua saia</p>
<p>Jogada na areia branca</p>
<p>&nbsp;</p>
<p>&Eacute; como se eu tivesse</p>
<p>Toda a for&ccedil;a de uma prece</p>
<p>Pra n&atilde;o chorar</p>
<p>&Eacute; como se eu tivesse</p>
<p>Toda a for&ccedil;a de uma prece</p>
<p>Pra n&atilde;o chorar</p>
',
                'creditos' => '
<p>Arranjo, viol&atilde;o e voz: Djavan</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
<p>Contrabaixo: Jamil Joanes</p>
',
                'faixa_mp3' => '04_ventos_do_norte.mp3',
                'faixa_ogg' => '04_ventos_do_norte.ogg',
                'disco_id' => '14'));

        Musicas::create(
            array(
                'faixa' => 'Pisa na Ful&ocirc;',
                'compositor' => '(Jo&atilde;o do Vale / Ernesto Pires / Silveira J&uacute;nior)<br>Musicas Incidentais &ldquo;Extra&rdquo; (Gilberto Gil) e &ldquo;O cheiro da Carolina&rdquo; (Amorim Roxo / Z&eacute; Gonzaga)',
                'letra' => '<p>Pisa na ful&ocirc;</p>
<p>Pisa na ful&ocirc;</p>
<p>Pisa na ful&ocirc;</p>
<p>N&atilde;o maltrate meu amor</p>
<p>&nbsp;</p>
<p>Um dia desse</p>
<p>Eu fui dan&ccedil;ar l&aacute; em Pedreira</p>
<p>Na rua da golada</p>
<p>Gostei da brincadeira</p>
<p>Z&eacute; Caxang&aacute; era o tocador</p>
<p>Mas s&oacute; tocava &ldquo;Pisa na ful&ocirc;&rdquo;</p>
<p>&nbsp;</p>
<p>Eu vi menina</p>
<p>Nem tinha doze anos</p>
<p>Agarrar seu par</p>
<p>Tamb&eacute;m sair dan&ccedil;ando</p>
<p>Satisfeita e dizendo</p>
<p>&ldquo;Meu amor, ai como &eacute; gostoso</p>
<p>Pisa no ful&ocirc;&rdquo;</p>
<p>&nbsp;</p>
<p>De madrugada Zeca Caxang&aacute;</p>
<p>Disse ao dono da casa</p>
<p>N&atilde;o precisa nem pagar</p>
<p>Por favor, diga ao tocador</p>
<p>Que eu tamb&eacute;m quero</p>
<p>&ldquo;Pisa na ful&ocirc;&rdquo;</p>
<p>&nbsp;</p>
<p>Carolina, hum, hum, hum</p>
<p>Mas Carolina, hum, hum, hum</p>
<p>Carolina, hum, hum, hum</p>
<p>Mas Carolina, hum, hum, hum</p>
',
                'creditos' => '
<p>Arranjo e teclados: Eduardo Souto Netto</p>
<p>Bateria: Elber Bedaque</p>
<p>Contrabaixo: Jamil Joanes</p>
<p>Guitarra: Manass&eacute;s</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
<p>Bong&ocirc;, blocos, pandeiro, timbales e cowbell: Repolho</p>
<p>Coro: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Nair C&acirc;ndia, Fab&iacute;ola, Jaime Alem, Marcio Lott, Chico Pupo e Paulinho Soledade</p>
',
                'faixa_mp3' => '05_pisa_na_fulo.mp3',
                'faixa_ogg' => '05_pisa_na_fulo.ogg',
                'disco_id' => '14'));

        Musicas::create(
            array(
                'faixa' => 'Mar&eacute; Dend&ecirc;',
                'compositor' => '(Carlinhos Brown) Participa&ccedil;&atilde;o Especial:<strong> Sandra de S&aacute; e Carlinhos Brown</strong>',
                'letra' => '<p>&ldquo;Mon doudou&rdquo; voc&ecirc; eu sei</p>
<p>&ldquo;Mon doudou&rdquo; voc&ecirc; eu sei</p>
<p>&nbsp;</p>
<p>Ol&aacute;, ola-&ecirc;</p>
<p>Ol&aacute;, ola-&aacute;</p>
<p>Ol&aacute;, ola-&ecirc;</p>
<p>Ol&aacute;, ola-&aacute;</p>
<p>Ol&aacute;, ol&aacute;...</p>
<p>&nbsp;</p>
<p>Abusou, usou, usou</p>
<p>Emprestou</p>
<p>Deu pra mar&eacute; dend&ecirc;</p>
<p>Um tesouro no isopor</p>
<p>Res&iacute;duo que cessa a dor de vez</p>
<p>&nbsp;</p>
<p>Chorou ar</p>
<p>Chorou mar</p>
<p>Chorou onda</p>
<p>O ir do amor faz sentir chorona</p>
<p>&nbsp;</p>
<p>A menina dos olhos</p>
<p>A menina dos olhos</p>
<p>&nbsp;</p>
<p>Ar de gostou</p>
<p>Numa visagem nova</p>
<p>Um ar selvagem rouba</p>
<p>O fim para o final</p>
<p>&nbsp;</p>
<p>Ar de gostou</p>
<p>No alegre povoado</p>
<p>De &iacute;ndio sofisticado</p>
<p>Com a reza pela boca</p>
<p>&nbsp;</p>
<p>Ar de gostou</p>
<p>&Eacute; o bem, quero que ele goste</p>
<p>&Eacute; o sol sortido de sorte</p>
<p>Beijo assar querendo assar</p>
',
                'creditos' => '
<p>Arranjo de base: Carlinhos Brown</p>
<p>Teclados: Eduardo Souto Netto</p>
<p>Bateria: Elber Bedaque</p>
<p>Contrabaixo: Jamil Joanes</p>
<p>Guitarra: Joca</p>
<p>Xequer&ecirc; e jemb&ecirc;: Repolho</p>
<p>Viol&atilde;o, timbau, agog&ocirc; e vocal: Carlinhos Brown</p>
<p>Coro: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Nair C&acirc;ndia, Fab&iacute;ola, Jaime Alem, Marcio Lott, Chico Pupo, Paulinho Soledade e Myrian Perachi</p>
',
                'faixa_mp3' => '06_mare_dende_com_sandra_de_sa.mp3',
                'faixa_ogg' => '06_mare_dende_com_sandra_de_sa.ogg',
                'disco_id' => '14'));

        Musicas::create(
            array(
                'faixa' => 'Fim de Jogo',
                'compositor' => '(Jamil Joanes / Nelson Motta)',
                'letra' => '<p>Quem sabe quando amanhecer</p>
<p>Tudo de bom vai ser mem&oacute;ria</p>
<p>Nossa hist&oacute;ria de amor vai ser</p>
<p>Passado, promessa, paix&atilde;o</p>
<p>Paisagem, pensamento</p>
<p>Noite clara de ver&atilde;o</p>
<p>&nbsp;</p>
<p>Quem sabe o que ser&aacute; de n&oacute;s?</p>
<p>Quem sabe o pr&oacute;ximo momento?</p>
<p>Tudo em n&oacute;s &eacute; desejo de amar</p>
<p>Medo de amar</p>
<p>Febre de amor a nos consumir</p>
<p>Em nosso pr&oacute;prio fogo</p>
<p>&nbsp;</p>
<p>Jogos de amor</p>
<p>Surpresas do cora&ccedil;&atilde;o</p>
<p>Tristezas feitas de momentos bons</p>
<p>De tantos sentimentos v&atilde;os</p>
<p>&nbsp;</p>
<p>Nesses jogos do amor</p>
<p>Ganhar, perder, tanto faz meu amor</p>
<p>Gozar, sofrer, fazem parte do amor</p>
<p>Do jogo de viver para amar</p>
<p>&nbsp;</p>
<p>Voc&ecirc; me diz que n&atilde;o me quer</p>
<p>Vem pra dizer que vai embora</p>
<p>Mas na hora do adeus n&atilde;o vai mais</p>
<p>Nunca, jamais</p>
<p>Fica sempre ao meu lado, sim</p>
<p>At&eacute; o fim do jogo</p>
',
                'creditos' => '
<p>Arranjo e contrabaixo: Jamil Joanes</p>
<p>Teclados: Eduardo Souto Netto</p>
<p>Viola: Joca</p>
<p>Viol&atilde;o: Claudio Jorge</p>
<p>Efeitos/pratos: Elber Bedaque</p>
',
                'faixa_mp3' => '07_fim_de_jogo.mp3',
                'faixa_ogg' => '07_fim_de_jogo.ogg',
                'disco_id' => '14'));

        Musicas::create(
            array(
                'faixa' => 'Feitiço',
                'compositor' => '(Lenine)',
                'letra' => '<p>Voc&ecirc; passou fogoso</p>
<p>Bonito e cheiroso a me enfeiti&ccedil;ar</p>
<p>Com seu andar macio</p>
<p>Gato no cio com pressa de chegar</p>
<p>&nbsp;</p>
<p>E eu cai num del&iacute;rio</p>
<p>E foi um col&iacute;rio pro meu olhar</p>
<p>Perdi o rebolado</p>
<p>Esse teu bailado &eacute; de estontear</p>
<p>Perdi o rebolado</p>
<p>Esse teu bailado &eacute; de estontear</p>
<p>&nbsp;</p>
<p>E eu</p>
<p>Eu quis te conquistar, e a&iacute;</p>
<p>Eu quis te conhecer, e a&iacute;</p>
<p>Fui at&eacute; num terreiro</p>
<p>E nuns batuqueiros</p>
<p>Pedi pros santos interceder</p>
<p>&nbsp;</p>
<p>Eu quis te castigar, e a&iacute;</p>
<p>Eu quis te convencer, e a&iacute;</p>
<p>Saciar meu desejo</p>
<p>E te dar um beijo de endoidecer</p>
<p>Saciar meu desejo</p>
<p>E te dar um beijo de endoidecer</p>
<p>&nbsp;</p>
<p>E sempre que eu podia</p>
<p>Te perseguia na marca&ccedil;&atilde;o</p>
<p>De longe desejava</p>
<p>Te acompanhava na percuss&atilde;o</p>
<p>Eu era a tua sombra</p>
<p>Ao som da rumba do meu cora&ccedil;&atilde;o</p>
<p>Me imaginei rainha</p>
<p>A melhor farinha pro teu pir&atilde;o</p>
<p>Me imaginei rainha</p>
<p>A melhor farinha pro teu pir&atilde;o</p>
',
                'creditos' => '
<p>Arranjo de base e guitarras: Lenine</p>
<p>Arranjo de metais e teclados: Eduardo Souto Netto</p>
<p>Bateria: Elber Bedaque</p>
<p>Contrabaixo: Jamil Joanes</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
<p>Congas, timbales, clave e talkdrums: Repolho</p>
<p>Trompetes: Marcio Montarroyos e Paulinho</p>
<p>Trombone: Serginho</p>
<p>Sax alto: Marcelo Martins e Mauro Senise</p>
<p>Sax tenor: Maca&eacute;</p>
<p>Coro: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Nair C&acirc;ndia, Fab&iacute;ola, Jaime Alem, Marcio Lott, Chico Pupo, Paulinho Soledade e Myrian Perachi</p>
',
                'faixa_mp3' => '08_feitico.mp3',
                'faixa_ogg' => '08_feitico.ogg',
                'disco_id' => '14'));

        Musicas::create(
            array(
                'faixa' => 'Deixa Falar',
                'compositor' => '(F&aacute;tima Guedes)',
                'letra' => '<p>Todo mundo pensa que tem um xod&oacute;</p>
<p>Deixa falar, ser&aacute; que &eacute;?</p>
<p>Mas eu dou meu amor s&oacute; pra quem eu quiser</p>
<p>Eu dou pra quem eu quiser</p>
<p>&nbsp;</p>
<p>Todo mundo pensa que um xod&oacute; &eacute; assim</p>
<p>Chegar, ficar, grudar ni mim</p>
<p>Mas assim grudadinha eu sou mais maxixeira</p>
<p>Sou a fina flor da mulher brasileira</p>
<p>&nbsp;</p>
<p>Todo mundo jura que eu gosto de voc&ecirc;</p>
<p>Deixa falar que eu quero ver</p>
<p>Do carinho que eu guardo ningu&eacute;m vai saber</p>
<p>Ningu&eacute;m jamais vai saber</p>
<p>&nbsp;</p>
<p>Minha vida &eacute; um maxixe</p>
<p>E maxixe &eacute; assim</p>
<p>Chegar, ficar, grudar ni mim</p>
<p>Mas eu tenho um xod&oacute; que me faz t&atilde;o brejeira</p>
<p>Sou a fina flor da mulher brasileira</p>
',
                'creditos' => '
<p>Arranjo e teclados: Eduardo Souto Netto</p>
<p>Bateria: Elber Bedaque</p>
<p>Contrabaixo: Jamil Joanes</p>
<p>Viola: Manass&eacute;s</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
<p>Tri&acirc;ngulo, ovo sonoro e bong&ocirc;: Repolho</p>
<p>Sax soprano: Mauro Senise</p>
',
                'faixa_mp3' => '09_diexa_falar.mp3',
                'faixa_ogg' => '09_diexa_falar.ogg',
                'disco_id' => '14'));

        Musicas::create(
            array(
                'faixa' => '? d&rsquo;Oxum',
                'compositor' => '(Ger&ocirc;nimo / Vev&eacute; Calazans)',
                'letra' => '<p>Nessa cidade todo mundo &eacute; d&rsquo;Oxum</p>
<p>Homem, menino, menina, mulher</p>
<p>Toda essa gente irradia magia</p>
<p>&nbsp;</p>
<p>Presente na &aacute;gua doce</p>
<p>Presente na &aacute;gua salgada</p>
<p>E toda cidade brilha</p>
<p>&nbsp;</p>
<p>Seja tenente ou filho de pescador</p>
<p>Ou importante desembargador</p>
<p>Se der presente &eacute; tudo uma coisa s&oacute;</p>
<p>&nbsp;</p>
<p>A for&ccedil;a que mora n&rsquo;&aacute;gua</p>
<p>N&atilde;o faz distin&ccedil;&atilde;o de cor</p>
<p>E toda cidade &eacute; d&rsquo;Oxum</p>
<p>&Eacute; d&rsquo;Oxum, &eacute; d&rsquo;Oxum</p>
<p>&Eacute; d&rsquo;Oxum</p>
<p>&nbsp;</p>
<p>Eu vou navegar</p>
<p>Eu vou navegar nas ondas do mar</p>
<p>Eu vou navegar</p>
',
                'creditos' => '
<p>Arranjo e teclados: Eduardo Souto Netto</p>
<p>Bateria: Elber Bedaque</p>
<p>Contrabaixo: Jamil Joanes</p>
<p>Viola: Manass&eacute;s</p>
<p>Surdo: Carlinhos Brown</p>
<p>Congas, efeitos, blocos, pandeiro, repique e caixa: Repolho</p>
<p>Coro: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Nair C&acirc;ndia, Fab&iacute;ola, Jaime Alem, Marcio Lott, Chico Pupo e Paulinho Soledade</p>
',
                'faixa_mp3' => '10_e_doxum.mp3',
                'faixa_ogg' => '10_e_doxum.ogg',
                'disco_id' => '14'));

        Musicas::create(
            array(
                'faixa' => 'Tudo Vai Bem (N&oacute;s Sofre, mas N&oacute;s Goza)',
                'compositor' => '(Vital Farias)',
                'letra' => '<p>Vou com voc&ecirc;</p>
<p>Pela avenida</p>
<p>&Oacute; que besteira</p>
<p>Se na quarta-feira estou fulo da vida</p>
<p>&nbsp;</p>
<p>Puxa, voc&ecirc; s&oacute; quer brincar</p>
<p>Sua cabe&ccedil;a n&atilde;o quer pensar</p>
<p>Veja que a vida est&aacute; muito mais pra l&aacute;</p>
<p>&nbsp;</p>
<p>Brinca comigo</p>
<p>Esse fim de carnaval</p>
<p>Esse perigo</p>
<p>Para mim j&aacute; &eacute; normal</p>
<p>&nbsp;</p>
<p>Eu e voc&ecirc; na buraqueira</p>
<p>Pai e filho, espirito santo, am&eacute;m</p>
<p>N&oacute;s sofre, mas n&oacute;s goza meu bem</p>
<p>&nbsp;</p>
<p>Quando estou s&oacute;</p>
<p>Voc&ecirc; n&atilde;o v&ecirc; o meu sucesso</p>
<p>Posso n&atilde;o ter ordem</p>
<p>Mas j&aacute; tenho algum progresso</p>
<p>Pensa que abafa, voc&ecirc; &eacute; &ldquo;analfa&rdquo;</p>
<p>N&atilde;o pensa nem faz o que quer</p>
',
                'creditos' => '
<p>Arranjo e teclados: Eduardo Souto Netto</p>
<p>Bateria: Elber Bedaque</p>
<p>Contrabaixo: Jamil Joanes</p>
<p>Guitarra: Joca</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
<p>Surdo e pandeiro: Repolho</p>
<p>Sax alto e piccolo: Mauro Senise</p>
<p>Trompetes: Marcio Montarroyos e Paulinho</p>
<p>Trombone: Serginho</p>
<p>Sax alto: Marcelo Martins</p>
<p>Sax tenor: Maca&eacute;</p>
',
                'faixa_mp3' => '11_tudo_vai_bem_nos_sofre_mas_nos_goza.mp3',
                'faixa_ogg' => '11_tudo_vai_bem_nos_sofre_mas_nos_goza.ogg',
                'disco_id' => '14'));

        Musicas::create(
            array(
                'faixa' => 'La Vie En Rose',
                'compositor' => '(Pierre Louiguy / Edith Piaf) Participa&ccedil;&atilde;o Especial: <strong> Oswaldinho do Acordeom</strong>',
                'letra' => '<p>Quand il me prend dans s&eacute;s br&aacute;s</p>
<p>Il me parle tout bas</p>
<p>Je vouis la vie en rose</p>
<p>&nbsp;</p>
<p>Il me dit d&ecirc;s mots d&rsquo;amour</p>
<p>D&ecirc;s mots de tous l&ecirc;s jours</p>
<p>Et &ccedil;a ni&rsquo;fait quelque chose</p>
<p>&nbsp;</p>
<p>Il est entre dans mon coeur</p>
<p>Il me parle de bouneur</p>
<p>Dont je connais la cause</p>
<p>&nbsp;</p>
<p>C&rsquo;est moi pour toi</p>
<p>Toi pour moi dans la vie</p>
<p>Il me la dit</p>
<p>La jur&eacute; pour la vie</p>
<p>&nbsp;</p>
<p>C&rsquo;est moi pour lui</p>
<p>Lui pour moi dans la vie</p>
<p>Il me la dit</p>
<p>La jur&eacute; pour la vie</p>
<p>&nbsp;</p>
<p>Il est grand je l&rsquo;aper&ccedil;ois</p>
<p>Alors je sens dans moi</p>
<p>Mon coeur que bat</p>
',
                'creditos' => '
<p>Arranjo e acordeom: Oswaldinho do Acordeom</p>
<p>Teclados: Eduardo Souto Netto</p>
<p>Contrabaixo: Jamil Joanes</p>
',
                'faixa_mp3' => '12_la_vie_en_rose.mp3',
                'faixa_ogg' => '12_la_vie_en_rose.ogg',
                'disco_id' => '14'));

        Musicas::create(
            array(
                'faixa' => 'Caminhoneiro Solit&aacute;rio',
                'compositor' => 'vinheta: (Mazzola) / (Moraes Moreira)',
                'letra' => '<hr class="space-letra-top">
            <p></p><p><strong>Caminhoneiro Solitário</strong>(vinheta)</p>
        <p><em>(Mazzola)</em></p>
        <hr class="space-letra-top-musicas">
        <p><em>Sons, efeitos e montagem: Geraldo, Claudinho, Marquinho e Marcelo Saboia</em></p>
        <p>&nbsp;</p>
        <p><strong>São João na Estrada</strong></p>
        <p><em>(Moraes Moreira)</em></p>
        <hr class="space-letra-top-musicas">
        <p>No mês de junho</p>
        <p>Tenho Deus por testemunho</p>
        <p>Com meu violão em punho</p>
        <p>Vou fazer o São João</p>
        <p>Tomar licor, menino, fazer eu vou</p>
        <p>A festa do interior</p>
        <p>E também da capital</p>
        <p>&nbsp;</p>
        <p>Vou pra Natal e lá no circo da folia</p>
        <p>Vai amanhecer o dia</p>
        <p>E todo mundo no forró</p>
        <p>Lá em Timbau no forró do seu Patrício</p>
        <p>Vai ter fogos de artifícios</p>
        <p>Também lá em Mossoró</p>
        <p>&nbsp;</p>
        <p>Em João Pessoa</p>
        <p>Soa bem esse galope</p>
        <p>E tem quem dance e tem quem toque</p>
        <p>E com que animação</p>
        <p>Santa Luzia, guia meus passos, me mande</p>
        <p>Além de Campina Grande a Sousa e toda a região</p>
        <p>&nbsp;</p>
        <p>Em Fortaleza com certeza um ouriço</p>
        <p>Juazeiro, Padim Ciço também vai dançar baião</p>
        <p>Em Maceió quero ver balão no céu</p>
        <p>Arapiraca e São Miguel</p>
        <p>Dando viva a São João</p>
        <p>&nbsp;</p>
        <p>Não pode parar o sanfoneiro</p>
        <p>Não pode parar o coração</p>
        <p>Só pode parar a guerra</p>
        <p>Eu quero paz na terra</p>
        <p>E no céu balão</p>
        <p>&nbsp;</p>
        <p>Em Teresina, como se faz todo ano</p>
        <p>Parnaíba e Floriano também vão comemorar</p>
        <p>Vou caminhando, vou chegando até Recife</p>
        <p>Meu amor quem foi que disse</p>
        <p>Que não tem Caruaru?</p>
        <p>&nbsp;</p>
        <p>Aracaju tem caju e tem castanha</p>
        <p>Gente aprende, gente apanha</p>
        <p>Nessa vida de estradeiro</p>
        <p>Em Salvador</p>
        <p>Vou chegar lá na Bahia</p>
        <p>Lá na terra da alegria</p>
        <p>Vai ser festa o ano inteiro</p>
        <p></p><br>


            <p><strong>Ficha Técnica:</strong></p>
            <p>Arranjo de base: Julinho Teixeira e Mazzola</p>
        <p>Arranjo de metais: Julinho Teixeira</p>
        <p>Caixa e c/tempo: Elber Bedaque</p>
        <p>Contrabaixo: Jamil Joanes</p>
        <p>Guitarra: Robertinho de Recife</p>
        <p>Acordeom: Oswaldinho do Acordeom</p>
        <p>Sax: Marcelo Neves e Marcelo Martins</p>
        <p>Trompetes: Bidinho, Formiga, Hamilton e Paulo Martins</p>
        <p>Trombone: Roberto Marques</p>
        <p>Programação de bateria: Renato Ladeira</p>
        <p>Teclados: Julinho Teixeira</p>
        <p>Percussão: Repolho</p>
        <p>Efeitos: Foguete</p>
        <p>Vocais: Betina e Jussara</p>
',
                'creditos' => '
<p>Arranjo de base: Julinho Teixeira e Mazzola</p>
<p>Arranjo de metais: Julinho Teixeira</p>
<p>Caixa e c/tempo: Elber Bedaque</p>
<p>Contrabaixo: Jamil Joanes</p>
<p>Guitarra: Robertinho de Recife</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
<p>Sax: Marcelo Neves e Marcelo Martins</p>
<p>Trompetes: Bidinho, Formiga, Hamilton e Paulo Martins</p>
<p>Trombone: Roberto Marques</p>
<p>Programa&ccedil;&atilde;o de bateria: Renato Ladeira</p>
<p>Teclados: Julinho Teixeira</p>
<p>Percuss&atilde;o: Repolho</p>
<p>Efeitos: Foguete</p>
<p>Vocais: Betina e Jussara</p>
',
                'faixa_mp3' => '01_sao_joao_na_estrada.mp3',
                'faixa_ogg' => '01_sao_joao_na_estrada.ogg',
                'disco_id' => '15'));

        Musicas::create(
            array(
                'faixa' => 'Flora',
                'compositor' => '(Ednardo / Dominguinhos / Clim&eacute;rio)',
                'letra' => '<p>Se eu pudesse pensar em ti</p>
<p>Sem vontade de querer chorar</p>
<p>Sem pensar em querer morrer</p>
<p>Nem pensar em querer voltar</p>
<p>&nbsp;</p>
<p>Essa dor que eu sinto agora</p>
<p>&Eacute; uma dor que n&atilde;o tem nome</p>
<p>Que o meu peito devora</p>
<p>E come e fere e maltrata</p>
<p>Sem matar</p>
<p>&nbsp;</p>
<p>No ro&ccedil;ado do meu cora&ccedil;&atilde;o</p>
<p>H&aacute; um tempo de plantar saudade</p>
<p>H&aacute; um tempo de colher lembran&ccedil;a</p>
<p>Pra depois com o tempo chorar</p>
<p>&nbsp;</p>
<p>Oh, Flora meu sert&atilde;o florindo</p>
<p>Aflora meu peito s&oacute;</p>
<p>Teu amor &eacute; um fogo</p>
<p>&Eacute; um fogo, &eacute; um fogo, &eacute; um fogo</p>
<p>Dos teus olhos ti&ccedil;&atilde;o</p>
<p>Teu amor &eacute; um fogo</p>
<p>&Eacute; um fogo, &eacute; um fogo, &eacute; um fogo</p>
<p>Dos teus olhos ti&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo e teclados: Fernando Moura</p>
<p>Concep&ccedil;&atilde;o do arranjo: Mazzola</p>
<p>Bateria: Jorginho Gomes</p>
<p>Contrabaixo: Jamil Joanes</p>
<p>Guitarra: Robertinho de Recife</p>
<p>Viol&atilde;o: Manass&eacute;s</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
',
                'faixa_mp3' => '02_flora.mp3',
                'faixa_ogg' => '02_flora.ogg',
                'disco_id' => '15'));

        Musicas::create(
            array(
                'faixa' => 'Alegria Real',
                'compositor' => '(Saul Barbosa / Jaime Sodr&eacute;)',
                'letra' => '<p>A f&eacute; que atravessou o oceano</p>
<p>Tem a for&ccedil;a de uma figa de guin&eacute;</p>
<p>A juventude &eacute; a esperan&ccedil;a desse povo</p>
<p>N&atilde;o precisa acreditar em S&atilde;o Tom&eacute;</p>
<p>&nbsp;</p>
<p>&Ocirc;, &ocirc;, &ocirc;</p>
<p>&Ocirc;, &ocirc;, &ocirc;</p>
<p>&Ocirc;, &ocirc;, &ocirc;, &ocirc;</p>
<p>O dia da igualdade j&aacute; chegou</p>
<p>&nbsp;</p>
<p>Mistura no preto e no branco</p>
<p>Suor e calor</p>
<p>Na alegria da democracia real</p>
<p>E um canto penetra num fruto</p>
<p>Chamado emo&ccedil;&atilde;o</p>
<p>Da semente plantada</p>
<p>Da liberta&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>S&oacute; por amor, &ocirc;, &ocirc;</p>
<p>S&oacute; por amor, &ocirc;, &ocirc;</p>
<p>S&oacute; por amor, &ocirc;, &ocirc;</p>
<p>S&oacute; por amor</p>
<p>&nbsp;</p>
<p>Circula no corpo da alma um novo clamor</p>
<p>No meu peito dourado seu sol vai se por</p>
<p>E as bandeiras forradas de verde da nossa uni&atilde;o</p>
<p>Na folia, na festa da liberta&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo e viol&atilde;o: Saul Barbosa</p>
<p>Guitarra: Luiz Brasil</p>
<p>Teclados: Marcos Farias</p>
<p>Baixo: Jamil Joanes</p>
<p>Repenique: Repolho e Marcos Lobo</p>
<p>Surdo: Ary Dias</p>
<p>Vocais: Jussara, Betina, Nair C&acirc;ndia, Jurema de C&acirc;ndia, Marcio Lott, Zeppa Souza, Louren&ccedil;o e Pedrinho Lopes</p>
',
                'faixa_mp3' => '03_alegria_real.mp3',
                'faixa_ogg' => '03_alegria_real.ogg',
                'disco_id' => '15'));

        Musicas::create(
            array(
                'faixa' => 'Que nem Vem-Vem',
                'compositor' => '(Maciel Melo)',
                'letra' => '<p>Quebrei no dente o taco da literatura</p>
<p>T&ocirc; na hist&oacute;ria, t&ocirc; eu sei</p>
<p>Que sou motivo pra falar</p>
<p>Entrei de cara</p>
<p>Cara, t&ocirc; caindo fora</p>
<p>T&aacute; no tempo</p>
<p>J&aacute; &eacute; hora de poder me desfrutar</p>
<p>&nbsp;</p>
<p>Semente negra, eu sou raiz poderosa</p>
<p>Aguada em verso e prosa</p>
<p>Na cacimba de Bel&aacute;</p>
<p>Meu canto tem um chapo-chapo de uma cuia</p>
<p>Tem, tem</p>
<p>Tem as manhas que o Mestre Louro plantou</p>
<p>&nbsp;</p>
<p>Pra colher eu canto assim que nem vem-vem</p>
<p>Pra soar como um acorde de sanfona</p>
<p>Festejar que nem passarim no xer&eacute;m</p>
<p>Namorar com as batidas da zabumba</p>
<p>&nbsp;</p>
<p>Tum, tum, tum</p>
<p>Bate, bate meu cora&ccedil;&atilde;o</p>
<p>Por um forr&oacute; que nem o de Passagem Funda</p>
<p>Tum, tum, tum</p>
<p>Bate, bate meu cora&ccedil;&atilde;o</p>
<p>D&aacute;-lhe zabumba, Jackson no pandeiro &eacute; &aacute;s</p>
<p>Tum, tum, tum</p>
<p>Bate, bate meu cora&ccedil;&atilde;o</p>
<p>Se esse moreno n&atilde;o me quer</p>
<p>N&atilde;o quero mais</p>
',
                'creditos' => '
<p>Arranjo, programa&ccedil;&atilde;o de computador e teclados: Marcos Farias</p>
<p>Baixo: Jamil Joanes</p>
<p>Guitarra: Manass&eacute;s</p>
<p>Bateria: Elber Bedaque</p>
<p>Teclados: Fernando Moura</p>
<p>Tri&acirc;ngulo, block, pandeiro, timbales e zabumba: Repolho</p>
<p>Acordeom: Oswaldinho do Acordeom e Marcos Farias</p>
<p>Vocais: Jussara e Elba</p>
',
                'faixa_mp3' => '04_que_nem_vem_vem.mp3',
                'faixa_ogg' => '04_que_nem_vem_vem.ogg',
                'disco_id' => '15'));

        Musicas::create(
            array(
                'faixa' => 'D&uacute;vida',
                'compositor' => '(Luiz Gonzaga / Domingos Ramos) <em>&ldquo;Pro meu pai, seu Jo&atilde;o Nunes&rdquo;</em>',
                'letra' => '<p>N&atilde;o sei por que raz&atilde;o tu tens ci&uacute;mes</p>
<p>N&atilde;o sei por que raz&atilde;o n&atilde;o cr&ecirc;s em mim</p>
<p>Bem sabes que te quero</p>
<p>E o meu amor &eacute; t&atilde;o sincero</p>
<p>&Eacute; demais duvidar tanto assim, ai de mim</p>
<p>N&atilde;o sei por que raz&atilde;o tu tens ci&uacute;mes</p>
<p>N&atilde;o sei por que raz&atilde;o n&atilde;o cr&ecirc;s em mim</p>
<p>&nbsp;</p>
<p>Bem v&ecirc;s que vivo escravizado</p>
<p>E preso ao teu encanto</p>
<p>N&atilde;o deves duvidar assim de quem te adora tanto</p>
<p>N&atilde;o deves duvidar de mim</p>
<p>Por que n&atilde;o tens raz&atilde;o</p>
<p>E assim torturas sem querer meu cora&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjos: Robertinho de Recife e Manass&eacute;s</p>
<p>Teclados e detalhes: Marcos Farias</p>
<p>Baixo: Jamil Joanes</p>
<p>Bateria: Elber Bedaque</p>
<p>Viol&atilde;o de base e viola: Robertinho de Recife</p>
<p>Viola 12 cordas e guitarra portuguesa (solo): Manass&eacute;s</p>
<p>Clave, afox&eacute; e guiro: Repolho</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
',
                'faixa_mp3' => '05_duvida.mp3',
                'faixa_ogg' => '05_duvida.ogg',
                'disco_id' => '15'));

        Musicas::create(
            array(
                'faixa' => 'Caminhos do Cora&ccedil;&atilde;o',
                'compositor' => '(Gonzaguinha)',
                'letra' => '<p>H&aacute; muito tempo que eu sa&iacute; de casa</p>
<p>H&aacute; muito tempo que eu ca&iacute; na estrada</p>
<p>H&aacute; muito tempo que eu estou na vida</p>
<p>Foi assim que eu quis</p>
<p>Assim eu sou feliz</p>
<p>&nbsp;</p>
<p>Principalmente por poder voltar</p>
<p>A todos os lugares onde j&aacute; cheguei</p>
<p>Pois l&aacute; deixei um prato de comida</p>
<p>Um abra&ccedil;o amigo</p>
<p>Um canto pra dormir e sonhar</p>
<p>&nbsp;</p>
<p>E aprendi que se depende sempre</p>
<p>De tanta, muita, diferente gente</p>
<p>Toda pessoa sempre &eacute; as marcas</p>
<p>Das li&ccedil;&otilde;es di&aacute;rias</p>
<p>De outras tantas pessoas</p>
<p>&nbsp;</p>
<p>E &eacute; t&atilde;o bonito quando a gente entende</p>
<p>Que a gente &eacute; tanta gente</p>
<p>Onde quer que a gente v&aacute;</p>
<p>E &eacute; t&atilde;o bonito quando a gente sente</p>
<p>Que nunca est&aacute; sozinho</p>
<p>Por mais que tente estar</p>
<p>&nbsp;</p>
<p>&Eacute; t&atilde;o bonito quando a gente pisa firme</p>
<p>Nessas linhas que est&atilde;o</p>
<p>Na palma de nossas m&atilde;os</p>
<p>E &eacute; t&atilde;o bonito quando a gente vai &agrave; vida</p>
<p>Nos caminhos onde bate</p>
<p>Bem mais forte o cora&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo, viola, guitarra solo e detalhe: Robertinho de Recife</p>
<p>Teclados: Marcos Farias</p>
<p>Baixo: Jamil Joanes</p>
<p>Viola 12 cordas: Manass&eacute;s</p>
<p>Bateria: Elber Bedaque</p>
<p>Tri&acirc;ngulo, talkdrums, pandeiro, efeitos e bells: Repolho</p>
',
                'faixa_mp3' => '06_caminhos_do_coracao.mp3',
                'faixa_ogg' => '06_caminhos_do_coracao.ogg',
                'disco_id' => '15'));

        Musicas::create(
            array(
                'faixa' => 'Miragem do Porto',
                'compositor' => '(Lenine / Br&aacute;ulio Tavares)',
                'letra' => '<p>Eu sou aquele navio no mar</p>
<p>Sem rumo e sem dono</p>
<p>Tenho a miragem do porto</p>
<p>Pra reconfortar meu sono</p>
<p>E flutuar sobre as &aacute;guas</p>
<p>Na mar&eacute; do abandono</p>
<p>&nbsp;</p>
<p>E l&aacute; no mar</p>
<p>Eu vi uma maravilha</p>
<p>Vi o rosto de uma ilha</p>
<p>Numa noite de luar</p>
<p>&Ecirc;ta luar, lumi&ocirc; o meu navio</p>
<p>Quem vai l&aacute; no mar bravio</p>
<p>N&atilde;o sabe o que vai achar</p>
<p>&nbsp;</p>
<p>E sou a ilha deserta onde ningu&eacute;m quer chegar</p>
<p>Lendo a rota das estrelas na imensid&atilde;o do mar</p>
<p>Chorando por um navio</p>
<p>Ai, ai, ui, ui</p>
<p>Que passou sem lhe avistar</p>
',
                'creditos' => '
<p>Arranjo, programa&ccedil;&atilde;o de computador e teclados: Luiz Avellar</p>
<p>Viola: Manass&eacute;s</p>
<p>Vocais: Robson, L&eacute;o e Chico Puppo</p>
',
                'faixa_mp3' => '07_miragem_do_porto.mp3',
                'faixa_ogg' => '07_miragem_do_porto.ogg',
                'disco_id' => '15'));

        Musicas::create(
            array(
                'faixa' => 'Cidad&atilde;o',
                'compositor' => '(Moraes Moreira / Capinan) Participa&ccedil;&atilde;o Especial: <strong> Margareth Menezes</strong>',
                'letra' => '<p>Na m&atilde;o do poeta</p>
<p>O sol se levanta e a lua se deita</p>
<p>Na c&ocirc;ncava pra&ccedil;a</p>
<p>Aponta o poente, o apronte, o levante</p>
<p>Crescente da massa</p>
<p>&nbsp;</p>
<p>Aos p&eacute;s do poeta</p>
<p>A ra&ccedil;a descansa de olho na festa</p>
<p>E o c&eacute;u aben&ccedil;oa essa f&eacute; t&atilde;o profana</p>
<p>&Oacute; minha gente baiana</p>
<p>Goza mesmo que doa</p>
<p>&nbsp;</p>
<p>Aboli&ccedil;&atilde;o</p>
<p>No cora&ccedil;&atilde;o do poeta</p>
<p>Cabe a multid&atilde;o</p>
<p>Quem sabe essa pra&ccedil;a repleta</p>
<p>Navio negreiro j&aacute; era</p>
<p>Agora quem manda &eacute; a galera</p>
<p>Nessa cidade na&ccedil;&atilde;o</p>
<p>Cidad&atilde;o</p>
<p>Navio negreiro j&aacute; era</p>
<p>Agora quem manda &eacute; a galera</p>
<p>Nessa cidade na&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Aboli&ccedil;&atilde;o</p>
<p>No carnaval do poeta</p>
<p>Cabe a multid&atilde;o</p>
<p>Quem sabe essa pra&ccedil;a repleta</p>
<p>Navio negreiro j&aacute; era</p>
<p>Agora quem manda &eacute; a galera</p>
<p>Nessa cidade na&ccedil;&atilde;o</p>
<p>Cidad&atilde;o</p>
<p>Navio negreiro j&aacute; era</p>
<p>Agora quem manda &eacute; a galera</p>
<p>Nessa cidade na&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo: Mazzola, Ricardo Le&atilde;o e Moraes Moreira</p>
<p>Bateria: Jorginho Gomes</p>
<p>Contrabaixo: Jamil Joanes</p>
<p>Guitarra: Davi Moraes</p>
<p>Percuss&atilde;o: Mingo, Cidinho e Repolho</p>
<p>Surdo: Gordinho</p>
<p>Teclados: Ricardo Le&atilde;o</p>
<p>Vocais: Jurema C&acirc;ndia, Jussara, Nair Candia, Betina, Zeppa Souza, Chico Puppo, Louren&ccedil;o e Marcio Lott</p>
<p>Povo: Elba, Pimpa, Mazzola e Fatinha</p>
',
                'faixa_mp3' => '08_cidadao.mp3',
                'faixa_ogg' => '08_cidadao.ogg',
                'disco_id' => '15'));

        Musicas::create(
            array(
                'faixa' => 'Na Hora &ldquo;H&rdquo;',
                'compositor' => '(Oswaldinho / Eliezer Setton)',
                'letra' => '<p>Oi, tunda tata tum</p>
<p>Vareta no zabumba</p>
<p>Oi, tunda t&aacute;, tudo &eacute; suor</p>
<p>Oi , ting ling dim, tri&acirc;ngulo</p>
<p>Xenhennh&eacute;m sanfona</p>
<p>Isso &eacute; forr&oacute;</p>
<p>&nbsp;</p>
<p>Volta e meia algu&eacute;m dizia</p>
<p>Que o forr&oacute; perdia de vez seu lugar</p>
<p>Tinha at&eacute; quem apostasse</p>
<p>Que o substituto chegou pra ficar</p>
<p>&nbsp;</p>
<p>Eu que conhe&ccedil;o seu mo&ccedil;o</p>
<p>O sert&atilde;o e a pisada l&aacute; do Bodoc&oacute;</p>
<p>Sei de monte de gente que nem eu</p>
<p>Que gosta &eacute; de forr&oacute;</p>
<p>&nbsp;</p>
<p>N&atilde;o sei qual vai ser a moda</p>
<p>Que vai segurar na cadeira o forr&oacute;</p>
<p>Pois passa o tempo e o que brilha em meus olho</p>
<p>&Eacute; o que brilha nos &oacute;i da vov&oacute;</p>
<p>&nbsp;</p>
<p>Foi discoteque e twist</p>
<p>&Eacute; o rock e a lambada</p>
<p>Mas na hora &ldquo;H&rdquo;</p>
<p>O cora&ccedil;&atilde;o do meu povo</p>
<p>Se avexa a bater pra forrozar</p>
',
                'creditos' => '
<p>Arranjo, programa&ccedil;&atilde;o de computador e teclados: Marcos Farias</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
<p>Pandeiro: Z&eacute; Leal</p>
<p>Tri&acirc;ngulo sample: Marin&ecirc;s</p>
',
                'faixa_mp3' => '09_na_hora_h.mp3',
                'faixa_ogg' => '09_na_hora_h.ogg',
                'disco_id' => '15'));

        Musicas::create(
            array(
                'faixa' => 'Noites Olindenses',
                'compositor' => '(Carlos Fernando)',
                'letra' => '<p>Quero dan&ccedil;ar com voc&ecirc;</p>
<p>Nas noites olindenses</p>
<p>Ai Lili, ai Lili, ai L&ocirc;</p>
<p>Quero te ver como a lua</p>
<p>Bonita e transparente</p>
<p>Fluindo vertentes de amor, de amor</p>
<p>&nbsp;</p>
<p>Nesse ver&atilde;o tu &eacute;s a luz que ilumina</p>
<p>Meu cora&ccedil;&atilde;o de carnaval e purpurina</p>
<p>Todas as rimas de Olinda menina</p>
<p>Estrela matutina de toda a can&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Can&ccedil;&atilde;o que vem e vai brilhar</p>
<p>Em um domingo azul do mar</p>
<p>De Olinda, de Olinda</p>
<p>De Olinda, que linda Olinda</p>
<p>De Olinda, de Olinda</p>
<p>De Olinda, que linda Olinda</p>
',
                'creditos' => '
<p>Arranjo, programa&ccedil;&atilde;o de computador e teclados: Luiz Avellar</p>
<p>Vocais: Jussara, Betina, Nair Candia, Jurema C&acirc;ndia, Ana Lucia e Kika Trist&atilde;o</p>
',
                'faixa_mp3' => '10_noites_olindenses.mp3',
                'faixa_ogg' => '10_noites_olindenses.ogg',
                'disco_id' => '15'));

        Musicas::create(
            array(
                'faixa' => 'Amor de &iacute;ndio',
                'compositor' => '(Beto Guedes / Ronaldo Bastos)',
                'letra' => '<p>Tudo que move &eacute; sagrado</p>
<p>E remove as montanhas</p>
<p>Com todo o cuidado, meu amor</p>
<p>Enquanto a chama arder</p>
<p>Todo dia te ver passar</p>
<p>Tudo, viver a teu lado</p>
<p>Com o arco da promessa</p>
<p>No azul pintado pra durar</p>
<p>&nbsp;</p>
<p>Abelha fazendo mel</p>
<p>Vale o tempo que n&atilde;o voou</p>
<p>A estrela caiu do c&eacute;u</p>
<p>O pedido que se pensou</p>
<p>O destino que se cumpriu</p>
<p>De sentir teu calor</p>
<p>E ser todo</p>
<p>Todo dia &eacute; de viver</p>
<p>Para ser o que for</p>
<p>E ser tudo</p>
<p>&nbsp;</p>
<p>Sim, todo amor &eacute; sagrado</p>
<p>E o fruto do trabalho</p>
<p>&Eacute; mais que sagrado, meu amor</p>
<p>A massa que faz o p&atilde;o</p>
<p>Vale a luz do teu suor</p>
<p>Lembra que o sono &eacute; sagrado</p>
<p>E alimenta de horizontes</p>
<p>O tempo acordado de viver</p>
<p>&nbsp;</p>
<p>No inverno te proteger</p>
<p>No ver&atilde;o sair pra pescar</p>
<p>No outono te conhecer</p>
<p>Primavera poder gostar</p>
<p>No estio me derreter</p>
<p>Pra na chuva dan&ccedil;ar</p>
<p>E andar junto</p>
<p>O destino que se cumpriu</p>
<p>De sentir teu calor</p>
<p>E ser todo</p>
',
                'creditos' => '
<p>Arranjo e violas: Manass&eacute;s</p>
',
                'faixa_mp3' => '11_amor_de_indio.mp3',
                'faixa_ogg' => '11_amor_de_indio.ogg',
                'disco_id' => '15'));

        Musicas::create(
            array(
                'faixa' => 'Encanto',
                'compositor' => '(Ligia Anel / Xico Chaves / Jards Macal&eacute; / Christianne Dardenne)',
                'letra' => '<p>Nos galhos do arvoredo</p>
<p>Ouvi algu&eacute;m me encantar</p>
<p>S&oacute; com o seu canto</p>
<p>Fui levada para l&aacute;</p>
<p>&nbsp;</p>
<p>Simples de dizer</p>
<p>F&aacute;cil de entender</p>
<p>Algu&eacute;m que vem de longe</p>
<p>Pra pertinho de voc&ecirc;</p>
',
                'creditos' => '
<p>Arranjo e viol&atilde;o: Jards Macal&eacute;</p>
',
                'faixa_mp3' => '12_encanto.mp3',
                'faixa_ogg' => '12_encanto.ogg',
                'disco_id' => '15'));

        Musicas::create(
            array(
                'faixa' => 'Eu Vou Te Amar',
                'compositor' => '(Geraldo Azevedo / Pipo Spera)',
                'letra' => '<p>Teu beijo me acordou novo dia</p>
<p>Sinal que &eacute; vida, luz da manh&atilde;</p>
<p>Que faz renascer a alegria</p>
<p>No azul do c&eacute;u, na terra, no mar</p>
<p>&nbsp;</p>
<p>Mas sem voc&ecirc; n&atilde;o existia</p>
<p>Essa magia que torna real</p>
<p>As coisas simples do dia a dia</p>
<p>Tuas e minhas que a vida traz</p>
<p>Eu vou te amar</p>
<p>Com toda minha energia</p>
<p>Bem que irradia</p>
<p>Eu vou te amar</p>
<p>&nbsp;</p>
<p>Eu vou te amar</p>
<p>Eu vou te amar</p>
',
                'creditos' => '
<p>Arranjo e piano: Marcos Farias</p>
',
                'faixa_mp3' => '13_eu_vou_te_amar.mp3',
                'faixa_ogg' => '13_eu_vou_te_amar.ogg',
                'disco_id' => '15'));

        Musicas::create(
            array(
                'faixa' => 'Cora Cora&ccedil;&atilde;o (Coraz&oacute;n)',
                'compositor' => '(Glenn Monroig / vers&atilde;o: Cl&aacute;udio Rabello)',
                'letra' => '<p>Cora, cora, cora, cora&ccedil;&atilde;o, meu cora&ccedil;&atilde;o</p>
<p>Meu cora&ccedil;&atilde;o, meu cora&ccedil;&atilde;o</p>
<p>Cora, cora, cora, cora&ccedil;&atilde;o, meu cora&ccedil;&atilde;o</p>
<p>Meu cora&ccedil;&atilde;o, meu cora, cora, cora</p>
<p>&nbsp;</p>
<p>Cora, cora, cora, cora&ccedil;&atilde;o, meu cora&ccedil;&atilde;o</p>
<p>Meu cora&ccedil;&atilde;o, meu cora&ccedil;&atilde;o</p>
<p>Cora, cora, cora, cora&ccedil;&atilde;o, meu cora&ccedil;&atilde;o</p>
<p>Cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>N&atilde;o consigo meu bem compreender</p>
<p>Por que me feres sem uma raz&atilde;o</p>
<p>Ser&aacute; verdade o que me contam que</p>
<p>Est&aacute;s sugando o meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Eu digo que n&atilde;o pode ser</p>
<p>Porque como eu n&atilde;o h&aacute; outra mulher</p>
<p>Cuidado ao apagar a luz</p>
<p>Cuidado pra n&atilde;o deixar de jejum</p>
<p>O meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>S&oacute; sentir daqui teu corpo arder</p>
<p>Arde meu corpo com satisfa&ccedil;&atilde;o</p>
<p>Por isso mesmo da pr&oacute;xima vez</p>
<p>Eu vou ouvir melhor meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Que me dir&aacute; que n&atilde;o confie mais</p>
<p>O que tu me prometes n&atilde;o &eacute;s capaz</p>
<p>&Eacute; t&atilde;o covarde o meu amor</p>
<p>Quando me tocas</p>
<p>Perco o controle do meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Tenho tentado</p>
<p>Tirar voc&ecirc; da minha mente</p>
<p>Mas meu corpo todo se ressente</p>
<p>Tu me deixas louca com teus beijos</p>
<p>Logo me declaro presa desse amor</p>
',
                'creditos' => '
<p>Bateria: Cesinha</p>
<p>Percuss&atilde;o baiana: Repolho, Firmino e Marcos Lobo</p>
<p>Pandeiro: Zizinho e Chacal</p>
<p>Timbal: Trambique</p>
<p>Bong&ocirc;: Amauri</p>
<p>Cu&iacute;ca: Zeca da Cu&iacute;ca</p>
<p>Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o e Betina</p>
',
                'faixa_mp3' => '01_cora_coracao.mp3',
                'faixa_ogg' => '01_cora_coracao.ogg',
                'disco_id' => '16'));

        Musicas::create(
            array(
                'faixa' => 'Devora-me Outra Vez (Ven Devorame Otra Vez)',
                'compositor' => '(Palmer Hernandez / vers&atilde;o: Fausto Nilo)',
                'letra' => '<p>No sil&ecirc;ncio da noite vazia teu amor voraz</p>
<p>Enlouquece o balan&ccedil;o das horas</p>
<p>Querendo mais</p>
<p>Derramando a lua da praia</p>
<p>Sobre meu len&ccedil;ol</p>
<p>E &eacute; por isso que eu nunca te espero</p>
<p>Sob a luz do sol</p>
<p>&nbsp;</p>
<p>Em meus sonhos eu sempre te vejo</p>
<p>Devorando-me</p>
<p>Arrastada por esse desejo</p>
<p>Vou at&eacute; o fim</p>
<p>Nessa hora ningu&eacute;m como tu</p>
<p>Que me ama com a fome do amor</p>
<p>Que aquece meu nome</p>
<p>Beijando meu corpo</p>
<p>Que cai num abismo maior</p>
<p>Vem</p>
<p>&nbsp;</p>
<p>Devora-me outra vez</p>
<p>Devora-me outra vez</p>
<p>Me abra&ccedil;a, me toca e machuca</p>
<p>Me leva at&eacute; onde eu nem sei</p>
<p>&nbsp;</p>
<p>Devora-me outra vez</p>
<p>Devora-me outra vez</p>
<p>Me castiga com os seus desejos</p>
<p>Que este amor eu guardei s&oacute; pra ti</p>
<p>&nbsp;</p>
<p>Devorame otra vez</p>
<p>Devorame otra vez</p>
<p>Suavecito lentamente</p>
<p>De la cabeza hasta los pies</p>
<p>Hasta los pies</p>
<p>&nbsp;</p>
<p>Devorame otra vez</p>
<p>Devorame otra vez</p>
<p>Em meus sonhos eu sempre te vejo</p>
<p>Devorandome, devorame, devorame,</p>
<p>&nbsp;</p>
<p>Devorame otra vez</p>
<p>Devorame otra vez</p>
<p>Devorame otra vez</p>
<p>Devorame otra vez</p>
<p>&nbsp;</p>
<p>Devorame otra vez</p>
<p>Devorame otra vez</p>
<p>No silencio da noite vazia</p>
<p>Seu amor me devora a vida</p>
<p>&nbsp;</p>
<p>Devorame otra vez</p>
<p>Devorame otra vez</p>
<p>Que aquece meu nome</p>
<p>Beijando meu corpo</p>
<p>Que cai num abismo maior</p>
<p>Vem</p>
',
                'creditos' => '
<p>Bateria: Cesinha</p>
<p>Surdo e repique: Repolho, Firmino e Marcos Lobo</p>
<p>Bong&ocirc;, conga, timbales e chequer&ecirc;: Carlos &ldquo;Migie&rdquo; Rodriguez</p>
<p>Baixo: Junior Irizarry</p>
<p>Guitarra: Jorge Laboy</p>
<p>Piano: Frankie Su&aacute;rez</p>
<p>Trombones: Rafi Torres e Jorge Diaz</p>
<p>Trompete: Loui O. Aquino</p>
<p>Sax: Jos&eacute; &ldquo;Furito&rdquo; Rios</p>
<p>Orquestra&ccedil;&atilde;o adicional de sopros: Marco Mu&ntilde;oz</p>
<p>Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o e Betina</p>
',
                'faixa_mp3' => '02_devora_me_outra_vez.mp3',
                'faixa_ogg' => '02_devora_me_outra_vez.ogg',
                'disco_id' => '16'));

        Musicas::create(
            array(
                'faixa' => 'Magalenha',
                'compositor' => '(Carlinhos Brown)',
                'letra' => '<p>Vem Magalenha roj&atilde;o</p>
<p>Traz a lenha pro fog&atilde;o</p>
<p>Vem fazer arma&ccedil;&atilde;o</p>
<p>Hoje &eacute; um dia de sol</p>
<p>Alegria de coi&oacute; &eacute; curtir o ver&atilde;o</p>
<p>&nbsp;</p>
<p>T&ecirc; t&ecirc; t&ecirc; ter&ecirc; t&ecirc;</p>
<p>T&ecirc; t&ecirc; t&ecirc; ter&ecirc; t&ecirc;</p>
<p>&nbsp;</p>
<p>Vem Magalenha roj&atilde;o</p>
<p>Traz a senha pro fog&atilde;o</p>
<p>T&ecirc; t&ecirc; t&ecirc; cora&ccedil;&atilde;o</p>
<p>Hoje &eacute; um dia de sol</p>
<p>Alegria de xod&oacute;</p>
<p>Meu dever de ver&atilde;o</p>
<p>&nbsp;</p>
<p>Calango lango no calango da pretinha</p>
<p>T&ocirc; cantando essa mudinha pra senhora se lembrar</p>
<p>Daquele tempo que vivia l&aacute; na ro&ccedil;a</p>
<p>Com uma filha na barriga</p>
<p>E outra filha pra criar</p>
',
                'creditos' => '
<p>Bateria: Cesinha</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
<p>Percuss&atilde;o: Firmino</p>
<p>Surdo e repique: Repolho, Firmino e Marcos Lobo</p>
<p>Timbale e chequer&ecirc;: Carlos &ldquo;Migie&rdquo; Rodriguez</p>
<p>Congas: Paoli Mej&iacute;as</p>
<p>Baixo: Junior Irizarry</p>
<p>Guitarra: Jorge Laboy</p>
<p>Piano: Frankie Su&aacute;rez</p>
<p>Trombones: Rafi Torres e Jorge Diaz</p>
<p>Trompete: Loui O. Aquino</p>
<p>Sax: Jos&eacute; &ldquo;Furito&rdquo; Rios</p>
<p>Orquestra&ccedil;&atilde;o adicional de sopros: Marco Mu&ntilde;oz</p>
<p>Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o e Betina</p>
',
                'faixa_mp3' => '03_magalenha.mp3',
                'faixa_ogg' => '03_magalenha.ogg',
                'disco_id' => '16'));

        Musicas::create(
            array(
                'faixa' => 'Ouro',
                'compositor' => '(Armandinho Macedo / Fausto Nilo)',
                'letra' => '<p>Voc&ecirc; vai querer conquistar meu ouro</p>
<p>Eu vou querer conquistar o seu tesouro</p>
<p>E foi numa ilha do futuro</p>
<p>Que maravilha me aconteceu</p>
<p>&nbsp;</p>
<p>Tava sem amar</p>
<p>Pra quem tava sem amar</p>
<p>Foi muito</p>
<p>Tava sem amar</p>
<p>Pra quem tava sem amar</p>
<p>Foi louco</p>
<p>&nbsp;</p>
<p>Tua mar&eacute; pra mim foi ouro</p>
<p>Minha mar&eacute; pra ti foi oi, oi, &ocirc;</p>
<p>Beira do mar pra mim foi oi, oi, &ocirc;</p>
<p>Amar, amar, assim</p>
<p>&nbsp;</p>
<p>Voc&ecirc; vai querer conquistar meu ouro</p>
<p>Eu vou querer</p>
<p>Seu ouro, seu ouro</p>
<p>Seu ouro, seu ouro, seu ouro</p>
',
                'creditos' => '
<p>Bateria: Cesinha</p>
<p>Viol&atilde;o: Manass&eacute;s</p>
<p>Xique-xique e agog&ocirc;: Firmino</p>
<p>Percuss&atilde;o geral: Zizinho, Amauri, Trambique, Zeza da Cu&iacute;ca e Chacal</p>
<p>Timbales, bong&ocirc; e chequer&eacute;: Carlos &ldquo;Migie&rdquo; Rodriguez</p>
<p>Congas: Paoli Mej&iacute;as</p>
<p>Baixo: Junior Irizarry</p>
<p>Guitarra: Jorge Laboy</p>
<p>Piano: Frankie Su&aacute;rez</p>
<p>Trombones: Rafi Torres e Jorge Diaz</p>
<p>Trompete: Loui O. Aquino</p>
<p>Sax: Jos&eacute; &ldquo;Furito&rdquo; Rios</p>
<p>Orquestra&ccedil;&atilde;o adicional de sopros: Marco Mu&ntilde;oz</p>
',
                'faixa_mp3' => '04_ouro.mp3',
                'faixa_ogg' => '04_ouro.ogg',
                'disco_id' => '16'));

        Musicas::create(
            array(
                'faixa' => 'Porto Seguro',
                'compositor' => '(Durval Lelys)',
                'letra' => '<p>Foi devagarinho, bem de mansinho</p>
<p>Meu cora&ccedil;&atilde;o revirou o c&eacute;u</p>
<p>Entre as nuvens quentes fiquei sozinho</p>
<p>Pensando em ti, me joguei no mar</p>
<p>&nbsp;</p>
<p>Vem me dar calor, vem me dar amor</p>
<p>T&ocirc; aqui esperando voc&ecirc; chegar</p>
<p>Quero me envolver nessa tua dan&ccedil;a</p>
<p>Na lua mansa te namorar</p>
<p>&nbsp;</p>
<p>&Ocirc;, &ocirc;, &ocirc;, &ocirc;</p>
<p>Que mexe</p>
<p>Que mexe mais</p>
<p>Que mexe</p>
<p>Que mexe amor</p>
<p>Seguro nessa cintura eu vou</p>
<p>Que mexe mais</p>
<p>Que mexe</p>
<p>Que mexe amor</p>
<p>Lembran&ccedil;as que d&atilde;o saudade</p>
<p>Nessa cidade, Porto Seguro</p>
<p>Ainda me lembro de voc&ecirc;</p>
<p>&nbsp;</p>
<p>Ouro, num olhar de tesouro</p>
<p>Vem na pedra do mar</p>
<p>Na pedra do mar, na pedra do mar</p>
<p>Olha &ecirc;, olha &ocirc;</p>
',
                'creditos' => '
<p>Bateria: Cesinha</p>
<p>Percuss&atilde;o: Firmino, Repolho e Marcos Lobo</p>
<p>Congas: Paoli Mej&iacute;as</p>
<p>Bong&ocirc;, congas, timbales e chequer&eacute;: Carlos &ldquo;Migie&rdquo; Rodriguez</p>
<p>Baixo: Junior Irizarry</p>
<p>Guitarra: Jorge Laboy</p>
<p>Piano: Frankie Su&aacute;rez</p>
<p>Trombones: Rafi Torres e Jorge Diaz</p>
<p>Trompete: Loui O. Aquino</p>
<p>Sax: Jos&eacute; &ldquo;Furito&rdquo; Rios</p>
<p>Orquestra&ccedil;&atilde;o adicional de sopros: Marco Mu&ntilde;oz</p>
<p>Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o, Betina e Jurema C&acirc;ndia</p>
',
                'faixa_mp3' => '05_porto_seguro.mp3',
                'faixa_ogg' => '05_porto_seguro.ogg',
                'disco_id' => '16'));

        Musicas::create(
            array(
                'faixa' => 'Indiado',
                'compositor' => '(Carlinhos Brown)',
                'letra' => '<p>Todo ducado, todo capit&atilde;o</p>
<p>Todo lustrado, todo Nostradamus</p>
<p>Todo indiado, todo indiano</p>
<p>Tudo pintado, todo americano</p>
<p>&nbsp;</p>
<p>U&ecirc;lelelel&ecirc;, u&ecirc;lelelel&aacute;</p>
<p>&Eacute; convidado compare&ccedil;o a ser massa</p>
<p>U&ecirc;lelelel&ecirc;, u&ecirc;lelelel&aacute;</p>
<p>Que nesse p&aacute;reo lamparina &eacute; ser Tarzan</p>
<p>&nbsp;</p>
<p>Joga dudun, joga didi</p>
<p>Joga como o Rei Dali</p>
<p>Seja pro-cru-duo</p>
<p>Uma ama seca</p>
<p>Seja pro-cru-duo</p>
<p>Uma ama seca</p>
<p>&nbsp;</p>
<p>Ioi&ocirc; fazendo quindim</p>
<p>Veja Ioi&ocirc; mexendo a p&aacute;, p&aacute;</p>
<p>Ioi&ocirc; fazendo quindim</p>
<p>Veja Ioi&ocirc; mexendo p&aacute;, p&aacute;</p>
<p>&nbsp;</p>
<p>Tra&ccedil;a com tra&ccedil;a com tra&ccedil;a com tra&ccedil;a</p>
<p>Caixa com caixa com caixa com caixa</p>
<p>Cata sucata com cata sucata</p>
',
                'creditos' => '
<p>Bateria: Cesinha</p>
<p>Percuss&atilde;o: Firmino, Repolho e Marcos Lobo</p>
<p>Congas: Paoli Mej&iacute;as</p>
<p>Bong&ocirc;, congas, timbales e chequer&eacute;: Carlos &ldquo;Migie&rdquo; Rodriguez</p>
<p>Baixo: Junior Irizarry</p>
<p>Guitarra: Jorge Laboy</p>
<p>Piano: Frankie Su&aacute;rez</p>
<p>Trombones: Rafi Torres e Jorge Diaz</p>
<p>Trompete: Loui O. Aquino</p>
<p>Sax: Jos&eacute; &ldquo;Furito&rdquo; Rios</p>
<p>Orquestra&ccedil;&atilde;o adicional de sopros: Marco Mu&ntilde;oz</p>
<p>Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o, Betina e Jurema C&acirc;ndia</p>
',
                'faixa_mp3' => '06_idiado.mp3',
                'faixa_ogg' => '06_idiado.ogg',
                'disco_id' => '16'));
        Musicas::create(
            array(
                'faixa' => 'Força Interior (Fuerza Interior)',
                'compositor' => '(Glenn Monroig / Vers&atilde;o: Cl&aacute;udio Rabello)',
                'letra' => '<p>Sinto uma for&ccedil;a que me protege</p>
<p>A mesma que ampara sempre a minha gente</p>
<p>&Eacute; uma coisa maravilhosa</p>
<p>Saber que se preciso</p>
<p>A f&eacute; em n&oacute;s resplandece</p>
<p>&nbsp;</p>
<p>Por um momento eu me perdi</p>
<p>N&atilde;o me encontrava</p>
<p>J&aacute; quando a dor n&atilde;o mais cabia em minha alma</p>
<p>Sem rancor nem &oacute;dio</p>
<p>Foi com amor pr&oacute;prio</p>
<p>Eu ganhei impulso</p>
<p>Vem do mais profundo</p>
<p>Essa &eacute; a</p>
<p>&nbsp;</p>
<p>For&ccedil;a interior</p>
<p>Que me curou quando ferida</p>
<p>Que me empurra pra cima da vida</p>
<p>For&ccedil;a interior</p>
<p>Que em mim se espalha como fogo</p>
<p>Que se caio j&aacute; se levantou</p>
<p>&nbsp;</p>
<p>Hoje renas&ccedil;o como um dia novo</p>
<p>Ouvindo a minha voz</p>
<p>Acima de tudo e de todos</p>
<p>Viver &eacute; uma quest&atilde;o de direito</p>
<p>Acordo de manh&atilde;</p>
<p>E sinto a vida no peito</p>
<p>&nbsp;</p>
<p>Trago uma mescla de alegrias e tristezas</p>
<p>E essa &eacute; a for&ccedil;a que me corre pelas veias</p>
<p>Sem rancor nem &oacute;dio</p>
<p>Foi com amor pr&oacute;prio</p>
<p>Eu ganhei impulso</p>
<p>Vem do mais profundo</p>
',
                'creditos' => '
<p>Bateria: Cesinha</p>
<p>Percuss&atilde;o: Firmino</p>
<p>Tri&acirc;ngulo: Amauri</p>
<p>Surdo: Zizinho</p>
<p>Pandeiro: Chacal</p>
<p>Tamborim: Zeca da Cu&iacute;ca e Trambique</p>
<p>Congas e bar&aacute;: Angel &ldquo;Cachete&rdquo; Maldonado</p>
<p>Timbal: Charlie Sierra</p>
<p>Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o e Betina</p>
',
                'faixa_mp3' => '07_trampolim.mp3',
                'faixa_ogg' => '07_trampolim.ogg',
                'disco_id' => '16'));
        Musicas::create(
            array(
                'faixa' => 'Desesperada (Desesperado)',
                'compositor' => '(Mark Spiro / K. C. Porter / Glenn Monroig / Vers&atilde;o: Ronaldo Bastos)<br>
                <em>M&uacute;sica incidental: <strong>Wave</strong> (Tom Jobim)</em>',
                'letra' => '<p>Anos, meses, dias</p>
<p>Noites frias de calor</p>
<p>Enredado em corpos belos</p>
<p>S&oacute;, sem um amor</p>
<p>&nbsp;</p>
<p>E agora que enfim est&aacute;</p>
<p>Nesse perfume do teu ser</p>
<p>Come&ccedil;a a evaporar</p>
<p>N&atilde;o quero mais te perder</p>
<p>&nbsp;</p>
<p>Desesperada, assustada</p>
<p>Procuro mais esse amor</p>
<p>Desesperado</p>
<p>E escapa outra vez</p>
<p>&nbsp;</p>
<p>Chuva, asfalto, luzes, carros</p>
<p>Gente de ilus&atilde;o</p>
<p>Todo mundo busca</p>
<p>E poucos acham o amor</p>
<p>&nbsp;</p>
<p>Agora que enfim est&aacute;</p>
<p>Estacionado em teu ser</p>
<p>Sou presa do meu temor</p>
<p>N&atilde;o quero mais te rever</p>
<p>&nbsp;</p>
<p>Desesperada, assustada</p>
<p>Buscando sempre um amor</p>
<p>Desesperado</p>
<p>Que me escapa outra vez</p>
<p>&nbsp;</p>
<p>N&atilde;o quero tomar o rumo equivocado</p>
<p>Por que diabos devo seguir?</p>
<p>&nbsp;</p>
<p>Desesperada, assustada</p>
<p>Anos, meses, dias</p>
<p>Noites frias de calor</p>
<p>Desesperada, assustada</p>
<p>Enredada em corpos belos</p>
<p>Mas sozinha sem amor</p>
<p>Desesperada, assustada</p>
<p>Todo mundo busca e poucos acham o amor</p>
<p>Desesperada, assustada</p>
<p>Outra vez</p>
<p>&nbsp;</p>
<p>Desesperada, assustada</p>
<p>Conhe&ccedil;o os passos dessa estrada</p>
<p>Sei que n&atilde;o vai dar em nada</p>
<p>Desesperada, assustada</p>
<p>J&aacute; me cansei de solid&atilde;o</p>
<p>Preciso ser amada</p>
<p>Desesperada, assustada</p>
<p>Buscando sempre um amor</p>
<p>Desesperado</p>
<p>Que me escapa outra vez</p>
',
                'creditos' => '
<p>Bateria: Cesinha</p>
<p>Timbale e xique-xique: Firmino</p>
<p>Timbal, bong&ocirc; e congas: Repolho e Marcos Lobo</p>
<p>Percuss&atilde;o geral: Zizinho, Amauri, Trambique, Zeza da Cu&iacute;ca e Chacal</p>
<p>Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o e Betina</p>
',
                'faixa_mp3' => '09_desesperada.mp3',
                'faixa_ogg' => '09_desesperada.ogg',
                'disco_id' => '16'));
        Musicas::create(
            array(
                'faixa' => 'Trampolim',
                'compositor' => '(Ary Sperling / Cl&aacute;udio Rabello)',
                'letra' => '<p>Quem passou por mim</p>
<p>E eu n&atilde;o vi</p>
<p>Fez desse meu cora&ccedil;&atilde;o</p>
<p>Um trampolim</p>
<p>Que busca na paix&atilde;o</p>
<p>Algu&eacute;m na multid&atilde;o</p>
<p>Algu&eacute;m que sabe enfim</p>
<p>Que sempre fez parte de mim</p>
<p>&nbsp;</p>
<p>Algu&eacute;m que sabe quem eu sou</p>
<p>Que foi por onde eu nunca vou</p>
<p>Que fala o que eu n&atilde;o sei</p>
<p>Que diz se eu j&aacute; amei</p>
<p>Por onde devo ir</p>
<p>&nbsp;</p>
<p>Em tantas vezes</p>
<p>Eu te quis ao me tocar</p>
<p>Noites que o tempo n&atilde;o levou</p>
<p>Fosse apenas sonho</p>
<p>Eu saberia ao acordar</p>
<p>Mas o dia nasce</p>
<p>E j&aacute; me encontro a te querer</p>
<p>Procurando os rastros desse amor</p>
<p>&nbsp;</p>
<p>E por n&atilde;o saber em quem est&aacute;s</p>
<p>Ou por n&atilde;o viver sem te levar em mim</p>
<p>Vou onde n&atilde;o se vai</p>
<p>Fa&ccedil;o o que n&atilde;o se faz</p>
<p>E vai ser sempre assim</p>
<p>At&eacute; que a busca chegue ao fim</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o, arranjo, reg&ecirc;ncia e teclados: Ary Sperling</p>
<p>Acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Flautas: Celso Woltzzenlogel e Mauro Senise</p>
<p>Violinos: Giancarlo Pareschi, Alfredo Vidal, Jos&eacute; Alves, Carmelita Reis, Walter Hack, Carlos Hack, Aizik, Leo Ortiz, Paschoal Perrota, Jo&atilde;o Jer&ocirc;nimo, Marcelo Pompeu e Hindenburgo</p>
<p>Violas: Glauco Cruz, Frederick Stephany, Arlindo Penteado e Jesu&iacute;na Passarotto</p>
<p>Cellos: Marcio Mallard, Jacques Morelenbaum, Jorge Kundert e Luiz Zamith</p>
<p>Mixagem: Jorge &ldquo;Gordo&rdquo; Guimar&atilde;es</p>
<p>Assistente: Julio Carneiro</p>
',
                'faixa_mp3' => '07_trampolim.mp3',
                'faixa_ogg' => '07_trampolim.ogg',
                'disco_id' => '16'));

        Musicas::create(
            array(
                'faixa' => 'Eu Quero Meu Amor',
                'compositor' => '(Assis&atilde;o)',
                'letra' => '<p>Eu quero meu amor</p>
<p>Eu quero meu amor</p>
<p>Eu quero meu amor aqui nesse forroz&atilde;o</p>
<p>&nbsp;</p>
<p>Eu quero meu amor</p>
<p>Eu quero meu amor</p>
<p>Eu quero meu amor na quentura do sal&atilde;o</p>
<p>&nbsp;</p>
<p>Psiu, psiu, psiu, psiu</p>
<p>Cala boca meu benzinho</p>
<p>Esse amor &eacute; pra n&oacute;s dois</p>
<p>Psiu, psiu, psiu, psiu</p>
<p>Nosso amor &eacute; proibido</p>
<p>Esse chamego &eacute; pra depois</p>
<p>&nbsp;</p>
<p>Est&aacute; fazendo frio</p>
<p>Cad&ecirc; minha paix&atilde;o?</p>
<p>Quero ser o dono do seu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Doid&atilde;o, vou ficar doid&atilde;o</p>
<p>Sen&atilde;o encontrar com meu amor</p>
<p>Aqui nesse forroz&atilde;o</p>
<p>Doid&atilde;o, doid&atilde;o, doid&atilde;o</p>
<p>Sen&atilde;o encontrar o meu amor</p>
<p>Aqui nesse forroz&atilde;o</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o, arranjo, reg&ecirc;ncia e teclados: Julinho Teixeira</p>
<p>Baixo: Heber</p>
<p>Bateria: Cesinha</p>
<p>Viol&atilde;o: Manass&eacute;s</p>
<p>Acordeom: Marquinhos</p>
<p>Sax alto: Jos&eacute; Carlos</p>
<p>Sax tenor: Raul Mascarenhas</p>
<p>Trompetes: Bidinho e Formiga</p>
<p>Trombone: Roberto Marques</p>
<p>Percuss&atilde;o: Repolho</p>
<p>Vocais: Betina, Jurema C&acirc;ndia, Jurema Louren&ccedil;o, Nair C&acirc;ndia e Jussara Louren&ccedil;o</p>
',
                'faixa_mp3' => '10_eu_quero_meu_amor.mp3',
                'faixa_ogg' => '10_eu_quero_meu_amor.ogg',
                'disco_id' => '16'));

        Musicas::create(
            array(
                'faixa' => 'Eu Sou o Carnaval',
                'compositor' => '(Moraes Moreira)',
                'letra' => '<p>Eu sou o carnaval em cada esquina</p>
<p>Do seu cora&ccedil;&atilde;o</p>
<p>Eu sou o Pierrot e a Colombina</p>
<p>Nas &aacute;guas de Amaralina</p>
<p>Que alucina a multid&atilde;o</p>
<p>&nbsp;</p>
<p>Toda a cidade vai navegar</p>
<p>No mar l&aacute; do Badau&ecirc;</p>
<p>Fazer tempero, se namorar</p>
<p>Na massa do Massap&ecirc;</p>
<p>&nbsp;</p>
<p>Tem baba de mo&ccedil;a do Carapu&aacute;</p>
<p>Ganz&aacute;, bong&ocirc;, agog&ocirc; pirar</p>
<p>Tem baba de mo&ccedil;a do Carapu&aacute;</p>
<p>Ganz&aacute;, bong&ocirc;, agog&ocirc; pirar</p>
<p>&nbsp;</p>
<p>Pira, pira, pirar</p>
<p>Pira, pira, pirar</p>
',
                'creditos' => '
<p>Bateria: Cesinha</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
<p>Cavaquinho: Manass&eacute;s</p>
<p>Percuss&atilde;o geral: Zizinho, Amauri, Trambique, Zeza da Cu&iacute;ca e Chacal</p>
<p>Congas: Firmino</p>
<p>Timbales, bong&ocirc; e chequer&eacute;: Carlos &ldquo;Migie&rdquo; Rodriguez</p>
<p>Congas: Paoli Mej&iacute;as</p>
<p>Baixo: Junior Irizarry</p>
<p>Guitarra: Jorge Laboy</p>
<p>Tambora, congas e guiro: Niki Su&aacute;rez</p>
<p>Flautas: Jos&eacute; &ldquo;Furito&rdquo; Rios</p>
<p>Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o, Betina e Nair C&acirc;ndia</p>
',
                'faixa_mp3' => '11_eu_sou_o_carnaval.mp3',
                'faixa_ogg' => '11_eu_sou_o_carnaval.ogg',
                'disco_id' => '16'));

        Musicas::create(
            array(
                'faixa' => 'Cora&ccedil;&atilde;o da Gente',
                'compositor' => '(Nando Cordel / Jo&atilde;o Wash)',
                'letra' => '<p>Morena que dan&ccedil;a no mar de alegria</p>
<p>E faz a tribo cair na folia</p>
<p>T&aacute; que t&aacute; ficando bom o dia</p>
<p>Vai ficar muito melhor minha energia</p>
<p>T&aacute; que t&aacute; ficando bom o dia</p>
<p>Vai ficar muito melhor minha energia</p>
<p>&nbsp;</p>
<p>Sonho de salsa tropicaliente</p>
<p>Quando encara</p>
<p>Escancara o cora&ccedil;&atilde;o da gente</p>
<p>&nbsp;</p>
<p>&Ocirc;, &ocirc;, &ocirc;, tropicaliente</p>
<p>&Ocirc;, &ocirc;, &ocirc;, enluarar</p>
<p>O cora&ccedil;&atilde;o da gente</p>
<p>&nbsp;</p>
<p>Vou te cantar</p>
<p>Mantras, boleros</p>
<p>Te enluarar</p>
<p>Repetindo &ldquo;Ay como te quiero&rdquo;</p>
<p>&nbsp;</p>
<p>Vou te contar</p>
<p>Lendas de Havana</p>
<p>Ritos de amor</p>
<p>Sob a lua pan-americana</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o, arranjo, reg&ecirc;ncia e teclados: Julinho Teixeira</p>
<p>Baixo: Heber</p>
<p>Bateria: Cesinha</p>
<p>Viol&atilde;o: Manass&eacute;s</p>
<p>Acordeom: Marquinhos</p>
<p>Sax alto: Jos&eacute; Carlos</p>
<p>Sax tenor: Raul Mascarenhas</p>
<p>Trompetes: Bidinho e Formiga</p>
<p>Trombone: Roberto Marques</p>
<p>Percuss&atilde;o: Repolho, Marcos Lobo, Marcos Amma e Zizinho</p>
<p>Vocais: Betina, Jurema C&acirc;ndia, Jurema Louren&ccedil;o, Nair C&acirc;ndia e Jussara Louren&ccedil;o</p>
',
                'faixa_mp3' => '12_coracao_da_gente.mp3',
                'faixa_ogg' => '12_coracao_da_gente.ogg',
                'disco_id' => '16'));

        Musicas::create(
            array(
                'faixa' => 'Proibir pra Qu&ecirc;',
                'compositor' => '(Dalmo Medeiros / Carlos Pita)',
                'letra' => '<p>Voc&ecirc; me faz sentir o c&eacute;u</p>
<p>Me faz sentir o mel</p>
<p>Que a vida tem pra dar</p>
<p>Na rua da alegria eu vou</p>
<p>&nbsp;</p>
<p>Voc&ecirc; me faz ser girassol</p>
<p>Girando ao seu redor</p>
<p>Dourando a luz do dia</p>
<p>Planeta do amor eu sou</p>
<p>&nbsp;</p>
<p>E essa dor j&aacute; n&atilde;o vai mais valer</p>
<p>E esse meu amor vai sorrir</p>
<p>Esse olhar &eacute; s&oacute; felicidade</p>
<p>Acorda, cidade, com vontade</p>
<p>Que o carnaval chegou</p>
<p>&nbsp;</p>
<p>&Ocirc;, &ocirc;, &ocirc;, &ocirc;</p>
<p>V&ecirc; se t&ocirc; na esquina</p>
<p>Voc&ecirc; vem de Olinda</p>
<p>Eu vou de Salvador</p>
<p>&nbsp;</p>
<p>&Ocirc;, &ocirc;, &ocirc;, &ocirc;</p>
<p>Proibir pra qu&ecirc;?</p>
<p>Ningu&eacute;m mais segura</p>
<p>O bloco do prazer</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o, arranjo e teclados: Julinho Teixeira</p>
<p>Guitarra: Luiz Brasil</p>
<p>Contrabaixo: Fernando Nunes</p>
<p>Bateria: Cesinha</p>
<p>Surdo, agog&ocirc;, repique e timbales: Marquinho Lobo</p>
<p>Congas, tri&acirc;ngulo e repique: Paulinho He-Man</p>
<p>Pandeiro, block e repique: Lan Lan</p>
<p>Trompetes: Bidinho e Formiga</p>
<p>Sax tenor: Maca&eacute;</p>
<p>Sax alto: Paulo Senise</p>
<p>Trombone: Vitor</p>
<p>Vocais: Jussara Silveira, Betina, Jussara Louren&ccedil;o, Bebel, Jurema, Carla, Marcelo Szabo, Marcio Lott, Chico Puppo, Ronaldo Barcelos, Zeppa Souza, Ronaldo Correa, Pedro Baldanza, Jorge Alexandre e Louren&ccedil;o</p>
<p>Pr&eacute;-produ&ccedil;&atilde;o, teclados e guitarra solo: Est&uacute;dio Caverna (t&eacute;cnico: Roberto Lly)</p>
',
                'faixa_mp3' => '01_proibir_pra_que.mp3',
                'faixa_ogg' => '01_proibir_pra_que.ogg',
                'disco_id' => '17'));

        Musicas::create(
            array(
                'faixa' => 'Paisagem da Janela',
                'compositor' => '(L&ocirc; Borges / Fernando Brant)',
                'letra' => '<p>Da janela lateral</p>
<p>Do quarto de dormir</p>
<p>Vejo uma igreja, um sinal de gl&oacute;ria</p>
<p>Vejo um muro branco e um v&ocirc;o p&aacute;ssaro</p>
<p>Vejo uma grade, um velho sinal</p>
<p>&nbsp;</p>
<p>Mensageiro natural</p>
<p>De coisas naturais</p>
<p>Quando eu falava dessas cores m&oacute;rbidas</p>
<p>Quando eu falava desses homens s&oacute;rdidos</p>
<p>Quando eu falava desse temporal</p>
<p>Voc&ecirc; n&atilde;o escutou</p>
<p>&nbsp;</p>
<p>Voc&ecirc; n&atilde;o quer acreditar</p>
<p>Mas isso &eacute; t&atilde;o normal</p>
<p>Voc&ecirc; n&atilde;o quer acreditar</p>
<p>Que eu apenas era</p>
<p>&nbsp;</p>
<p>Cavaleiro marginal</p>
<p>Lavado em ribeir&atilde;o</p>
<p>Cavaleiro negro que viveu mist&eacute;rios</p>
<p>Cavaleiro e senhor de casa e &aacute;rvores</p>
<p>Sem querer descanso nem dominical</p>
<p>&nbsp;</p>
<p>Cavaleiro marginal</p>
<p>Banhado em ribeir&atilde;o</p>
<p>Conheci as torres e os cemit&eacute;rios</p>
<p>Conheci os homens e os seus vel&oacute;rios</p>
<p>Eu olhava da janela lateral</p>
<p>Do quarto de dormir</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello</p>
<p>Arranjo e teclados: Marcio Miranda</p>
<p>Viol&atilde;o solo: Paulo Rafael</p>
<p>Contrabaixo: Fernando Nunes</p>
<p>Bateria: Cesinha</p>
<p>Tri&acirc;ngulo: Repolho</p>
<p>Moringa: Marcos Suzano</p>
<p>Viol&otilde;es: Paulo Coelho</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
<p>Vocais: Jussara Silveira, Marcelo Szabo, Ronaldo Barcelos, Z&eacute; Louren&ccedil;o, Ana Leuzinger e Nina Pancevski</p>
',
                'faixa_mp3' => '02_paisagem_da_janela.mp3',
                'faixa_ogg' => '02_paisagem_da_janela.ogg',
                'disco_id' => '17'));

        Musicas::create(
            array(
                'faixa' => 'Caranguejo Dance',
                'compositor' => '(Moraes Moreira)',
                'letra' => '<p>&Eacute; o treme terra</p>
<p>Tambor de guerra soa declarando paz</p>
<p>Por toda treva</p>
<p>Clareia o som, me leva e traz</p>
<p>&nbsp;</p>
<p>Por toda a vida, a vida vivida</p>
<p>Mestre e aprendiz</p>
<p>&Eacute; de preceito, baticum no peito</p>
<p>Cora&ccedil;&atilde;o me diz</p>
<p>&nbsp;</p>
<p>&Eacute; a nova dan&ccedil;a, caboclo e lan&ccedil;a</p>
<p>E a novidade me possui</p>
<p>Dan&ccedil;o e me vejo</p>
<p>Um caranguejo que na pista evolui</p>
<p>&nbsp;</p>
<p>Swing e f&eacute; que nascem da mulher</p>
<p>Que de repente parte</p>
<p>T&atilde;o decidida, gr&aacute;vida de vida</p>
<p>Ergue o estandarte, estandarte</p>
<p>&nbsp;</p>
<p>Maracatu e eu</p>
<p>Maracatu e eu</p>
<p>N&oacute;s nossa voz</p>
<p>E eles</p>
<p>&nbsp;</p>
<p>Por todo o lado</p>
<p>Baque virado na esteira do tarol</p>
<p>Por toda a rua, a luz da lua</p>
<p>A noite, o dia, a luz do sol</p>
<p>&nbsp;</p>
<p>Ali ou alhures, homens e mulheres</p>
<p>Todas as idades</p>
<p>No carnaval</p>
<p>Trabalhador rural dan&ccedil;ando na cidade</p>
<p>&nbsp;</p>
<p>Silenciosos</p>
<p>Por um momento n&atilde;o tocaram seus tambores</p>
<p>No p&aacute;tio escuro</p>
<p>Ali eu juro, eu vi, senhoras e senhores</p>
<p>&nbsp;</p>
<p>E a meninada</p>
<p>Animadamente celebrando ia</p>
<p>N&atilde;o demorava era um que chegava</p>
<p>E outro que sa&iacute;a, sa&iacute;a</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello</p>
<p>Arranjos: Moraes Moreira e Marcio Miranda</p>
<p>Teclados: Marcio Miranda</p>
<p>Viol&atilde;o: Moraes Moreira</p>
<p>Contrabaixo: Pedro Ivo</p>
<p>Bateria: Jurim Moreira</p>
<p>Repique, congas, agog&ocirc;, surdo e timbales: Repolho</p>
<p>Agog&ocirc; e efeitos: Sandro Lustosa</p>
<p>Guitarra: Paulo Rafael</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
<p>Rabeca: Ricardo Amado</p>
<p>Arranjo de rabeca: Vitor Santos</p>
<p>Vocais: Jussara Silveira, Marcelo Szabo, Ronaldo Barcelos, Z&eacute; Louren&ccedil;o, Ana Leuzinger e Nina Pancevski</p>
',
                'faixa_mp3' => '03_caranguejo_dance.mp3',
                'faixa_ogg' => '03_caranguejo_dance.ogg',
                'disco_id' => '17'));

        Musicas::create(
            array(
                'faixa' => 'O Bom da Vida',
                'compositor' => '(Dito / Jorge Zarath)',
                'letra' => '<p>No momento em que meus olhos</p>
<p>Se encontraram com teus olhos</p>
<p>Eu me apaixonei, eu me apaixonei</p>
<p>Eu me apaixonei</p>
<p>&nbsp;</p>
<p>Na loucura do molejo</p>
<p>Eu sonhava com teu beijo</p>
<p>Eu me apaixonei, eu me apaixonei</p>
<p>Eu me apaixonei</p>
<p>&nbsp;</p>
<p>Eu te quero porque sei</p>
<p>Que a vida &eacute; sempre assim</p>
<p>Eu te quero porque sei</p>
<p>Voc&ecirc; nasceu pra mim</p>
<p>N&atilde;o adianta se esconder</p>
<p>Que a vida &eacute; feita pra viver</p>
<p>&nbsp;</p>
<p>O bom da vida &eacute; viver</p>
<p>&Eacute; se querer, se querer</p>
<p>O bom da vida &eacute; sonhar</p>
<p>Deixa acontecer</p>
<p>&nbsp;</p>
<p>O bom da vida &eacute; viver</p>
<p>&Eacute; se querer, se querer</p>
<p>O bom da vida &eacute; sonhar</p>
<p>Deixa o sol nascer</p>
<p>&nbsp;</p>
<p>De dia &eacute; de dia</p>
<p>E quando escurece</p>
<p>Uma luz me guia</p>
<p>Teu brilho me aquece</p>

',
                'creditos' => '
<p>Produ&ccedil;&atilde;o, arranjo e teclados: Julinho Teixeira</p>
<p>Viol&otilde;es: Luiz Brasil e Tony Costa</p>
<p>Contrabaixo: Fernando Nunes</p>
<p>Bateria: Cesinha</p>
<p>Surdo, congas, repique e jamb&ecirc;: Marquinho Lobo</p>
<p>Surdo, guiro, repique timbal: Paulinho He-man</p>
<p>Clave, repique e timbal: Lan Lan</p>
<p>Trompetes: Bidinho e Formiga</p>
<p>Sax tenor: Maca&eacute;</p>
<p>Sax alto: Paulo Senise</p>
<p>Trombone: Vitor</p>
<p>Vocais: Jussara Silveira, Betina, Jussara Louren&ccedil;o, Bebel, Jurema, Marcelo Szabo, Marcio Lott, Chico Puppo, Ronaldo Barcelos, Zeppa Souza, Ronaldo Correa, Pedro Baldanza, Jorge Alexandre e Louren&ccedil;o</p>
<p>Pr&eacute;-produ&ccedil;&atilde;o, teclados e guitarra solo: Est&uacute;dio Caverna (t&eacute;cnico: Roberto Lly)</p>
',
                'faixa_mp3' => '04_o_bom_da_vida.mp3',
                'faixa_ogg' => '04_o_bom_da_vida.ogg',
                'disco_id' => '17'));

        Musicas::create(
            array(
                'faixa' => 'Eu Quero &eacute; Botar meu Bloco na Rua (vers&atilde;o Ska/Pop)',
                'compositor' => '(Sergio Sampaio) Participa&ccedil;&atilde;o especial: <strong> Jheremmias N&atilde;o Bate Corner</strong>',
                'letra' => '<p>H&aacute; quem diga</p>
<p>Que eu dormi de touca</p>
<p>Que eu perdi a boca</p>
<p>Que eu fugi da briga</p>
<p>Que eu ca&iacute; do galho</p>
<p>E que n&atilde;o vi sa&iacute;da</p>
<p>Que eu morri de medo</p>
<p>Quando o pau quebrou</p>
<p>&nbsp;</p>
<p>H&aacute; quem diga</p>
<p>Que eu n&atilde;o sei de nada</p>
<p>Que eu n&atilde;o sou de nada</p>
<p>E n&atilde;o pe&ccedil;o desculpas</p>
<p>Que eu n&atilde;o tenho culpa</p>
<p>Mas que eu dei bobeira</p>
<p>E que Durango Kid quase me pegou</p>
<p>&nbsp;</p>
<p>Eu quero &eacute; botar meu bloco na rua</p>
<p>Brincar, botar pra gemer</p>
<p>Eu quero &eacute; botar meu bloco na rua</p>
<p>Gingar pra dar e vender</p>
<p>&nbsp;</p>
<p>Eu, eu por mim queria isso e aquilo</p>
<p>Um quilo mais daquilo</p>
<p>Um grilo menos nisso</p>
<p>&Eacute; disso que eu preciso</p>
<p>N&atilde;o &eacute; nada disso</p>
<p>Eu quero todo mundo nesse carnaval</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o: Netinho</p>
<p>Arranjo e programa&ccedil;&atilde;o sample: Z&eacute; Raimundo e Jomar Freitas</p>
<p>Guitarra, base e voz: Tuca Fernandes</p>
<p>Arranjo de metais: Z&eacute; Raimundo e Letieres Leite</p>
<p>Bateria: Robinson Cunha</p>
<p>Baixo: Gigi</p>
<p>Guitarras: Boca</p>
<p>Teclados: Z&eacute; Raimundo</p>
<p>Metais: Letieres Leite e Guiga Scott</p>
',
                'faixa_mp3' => '05_eu_quero_e_botar_meu_bloco_na_rua_ska_pop.mp3',
                'faixa_ogg' => '05_eu_quero_e_botar_meu_bloco_na_rua_ska_pop.ogg',
                'disco_id' => '17'));

        Musicas::create(
            array(
                'faixa' => 'Nascido em 22 de Abril',
                'compositor' => '(Altay Veloso)',
                'letra' => '<p>Que homem &eacute; esse que tem sete vidas</p>
<p>Que gato, que tenta&ccedil;&atilde;o</p>
<p>Que os gladiadores invejam o folego</p>
<p>E a for&ccedil;a do seu pulm&atilde;o</p>
<p>Que mulato &eacute; esse de l&aacute;bios carnudos</p>
<p>Com os olhos de cor anil</p>
<p>Que homem &eacute; esse nascido em 22 de abril</p>
<p>&nbsp;</p>
<p>Bate tambor que nem Angola</p>
<p>Sua sabor de Coca-cola</p>
<p>Frequenta a sala da escola de samba</p>
<p>Devoto de Aparecida</p>
<p>Trabalhador, gosta da lida</p>
<p>O seu defeito &eacute; que ele nunca se zanga</p>
<p>&nbsp;</p>
<p>Eu amo esse homem porque sei</p>
<p>Que ele tem virtudes que outros n&atilde;o tem</p>
<p>Eu sei que precisa de muito amor e carinho</p>
<p>Pra se dar bem</p>
<p>&nbsp;</p>
<p>Que pena que alguns desses filhos</p>
<p>Descambam na vida e seu nome traem</p>
<p>Que pena que alguns desses filhos</p>
<p>N&atilde;o puxaram ao pai</p>
<p>&nbsp;</p>
<p>Que homem &eacute; esse</p>
<p>Que &eacute; t&atilde;o bem dotado de ra&ccedil;a, de pedigree</p>
<p>Que mulheres muito invejosas</p>
<p>Fazem tudo para tir&aacute;-lo de mim</p>
<p>&nbsp;</p>
<p>Mas sei que ele &eacute; forte e resiste</p>
<p>Assim como tem resistido a dor</p>
<p>Se tiver certeza da for&ccedil;a do meu amor</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello</p>
<p>Arranjo: Nando Minardi</p>
<p>Teclados: Marcio Miranda</p>
<p>Contrabaixo: Fernando Nunes</p>
<p>Bateria: Cesinha</p>
<p>Viol&atilde;o: Luiz Brasil</p>
<p>Sax soprano: Milton Guedes</p>
<p>Surdo, culca e pandeiro: Marcos Suzano</p>
<p>Bong&ocirc;, ganz&aacute; e repique de m&atilde;o: Repolho</p>
<p>Arranjo e reg&ecirc;ncia de cordas: Salinas</p>
<p>Violinos: Giancarlo Pareschi (spalla), Jos&eacute; Alves da Silva, Bernardo Bessler, Marri Cristina Bessler, Ricardo Amado da Silva, Antonela Lima Pareschi, Walter Hack, Marcelo Pompeu, Carmelita Reis, Aizik M. Geller e Jos&eacute; Dias</p>
<p>Coorden e violino: Paschoal Perrota</p>
<p>Violas: Frederick Stephany, Arlindo Figueiredo Penteado, Jeslina Noronha Passaroto e Jairo Diniz Silva</p>
<p>Cellos: Alceu de Almeida Reis e Jorge Kundert Ranevsky</p>
<p>Vocais: Jussara Silveira, Marcelo Szabo, Ronaldo Barcelos, Ana Leuzinger e Nina Pancevski</p>
',
                'faixa_mp3' => '06_nascido_em_22_de_abril.mp3',
                'faixa_ogg' => '06_nascido_em_22_de_abril.ogg',
                'disco_id' => '17'));

        Musicas::create(
            array(
                'faixa' => 'Incendia, Incendi&ecirc;',
                'compositor' => '(Francisco Gileno / Cl&aacute;udio Rabello)',
                'letra' => '<p>Fogo de palha queima, queima e se apaga</p>
<p>Fogo de amor incendeia e se espalha</p>
<p>Quem &eacute; do fogo que incendeia em fevereiro</p>
<p>Sabe que em janeiro fogo j&aacute; inc&ecirc;ndio</p>
<p>&nbsp;</p>
<p>Incendi&aacute;, incendi&ecirc;</p>
<p>Inc&ecirc;ndi&ocirc;</p>
<p>Incendi&aacute;, incendi&ecirc;</p>
<p>Meu amor</p>
<p>&nbsp;</p>
<p>Que n&atilde;o tem fogo de amor n&atilde;o se espalha</p>
<p>Quem muito tem consegue a cinza suportar</p>
<p>Ai meu amor, me aquece e me agasalha</p>
<p>Quem n&atilde;o ama, se estra&ccedil;alha</p>
<p>Deixa eu me incendi&aacute;</p>
<p>&nbsp;</p>
<p>Nos teus cabelos cor de ouro do reinado</p>
<p>Na tua boca perfumada de alecrim</p>
<p>Eu acendi a brasa que tava apagada</p>
<p>E galopei incendiada em teu leito de cetim</p>
<p>&nbsp;</p>
<p>Fogo de palha dura apenas um momento</p>
<p>Fogo de amor, ah, isso nunca chega ao fim</p>
<p>Fogo por fogo, acabei num fogo cruzado</p>
<p>Galopando no cerrado com voc&ecirc; dentro de mim</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o, arranjo e teclados: Julinho Teixeira</p>
<p>Guitarra: Luiz Brasil</p>
<p>Contrabaixo: Fernando Nunes</p>
<p>Bateria: Cesinha</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
<p>Zabumba: Marquinho Lobo</p>
<p>Tri&acirc;ngulo e contas: Paulinho He-man</p>
<p>Caxixi e efeitos: Lan Lan</p>
<p>Trompetes: Bidinho e Formiga</p>
<p>Sax tenor: Maca&eacute;</p>
<p>Sax alto: Paulo Senise</p>
<p>Trombone: Vitor</p>
<p>Vocais: Jussara Silveira, Betina, Jussara Louren&ccedil;o, Bebel, Jurema, Marcelo Szabo, Marcio Lott, Chico Puppo, Ronaldo Barcelos e Zeppa Souza</p>
<p>Pr&eacute;-produ&ccedil;&atilde;o, teclados e guitarra solo: Est&uacute;dio Caverna (t&eacute;cnico: Roberto Lly)</p>
',
                'faixa_mp3' => '07_incendia_incendie.mp3',
                'faixa_ogg' => '07_incendia_incendie.ogg',
                'disco_id' => '17'));

        Musicas::create(
            array(
                'faixa' => '&Aacute;gua Fria (La gota fria)',
                'compositor' => '(Emiliano Zuleta / Vers&atilde;o: Claudio Rabello)',
                'letra' => '<p>C&ecirc; se lembra, moreninho, aquele dia</p>
<p>Que ca&iacute;mo na folia</p>
<p>Que sa&iacute;mo atr&aacute;s da banda?</p>
<p>Sonhando levar a vida</p>
<p>Girando feito ciranda</p>
<p>Sonhando levar a vida</p>
<p>Girando feito ciranda</p>
<p>&nbsp;</p>
<p>Me arrepio quando penso</p>
<p>Nos amores que j&aacute; tive</p>
<p>Me arrepio quando penso</p>
<p>Nos amores que j&aacute; tive</p>
<p>&nbsp;</p>
<p>Voc&ecirc; foi o melhor moreno</p>
<p>Me fez sentir quanto era livre</p>
<p>Voc&ecirc; foi o melhor moreno</p>
<p>Me fez sentir quanto era livre</p>
<p>&nbsp;</p>
<p>V&ecirc; se me leva onde eu nunca vou</p>
<p>Aonde hoje tenha baile</p>
<p>V&ecirc; se me leva onde eu nunca vou</p>
<p>Aonde hoje tenha baile</p>
<p>&nbsp;</p>
<p>Moreninho v&ecirc; se me leva</p>
<p>Por onde o meu sonho anda</p>
<p>Moreninho v&ecirc; se me leva</p>
<p>Por onde o meu sonho anda</p>
<p>&nbsp;</p>
<p>Que aventura, que aventura vou viver</p>
<p>Uma noite dessas quando s&oacute; por vadiagem</p>
<p>Provar o amor de quem d&ecirc;</p>
<p>Amor por qualquer bobagem</p>
<p>Provar o amor de quem d&ecirc;</p>
<p>Amor por qualquer bobagem</p>
<p>&nbsp;</p>
<p>Moreninho n&atilde;o te engano</p>
<p>Nem digo isso pra ofender</p>
<p>Moreninho n&atilde;o te engano</p>
<p>Nem digo isso pra ofender</p>
<p>&nbsp;</p>
<p>Eu nasci com essa chama</p>
<p>De sempre querer prazer</p>
<p>Que eu nasci com essa chama</p>
<p>De sempre querer prazer</p>
<p>&nbsp;</p>
<p>Moreninho, moreninho</p>
<p>Se voc&ecirc; me quiser, me quiser</p>
<p>Vem c&aacute; me pegar</p>
<p>Mas se na hora de amar</p>
<p>Cair um balde de &aacute;gua fria</p>
<p>Mas se na hora de amar</p>
<p>Cair um balde de &aacute;gua fria</p>
<p>&nbsp;</p>
<p>Desculpe, mas n&atilde;o era o dia</p>
<p>De ter minha companhia</p>
<p>Desculpe, mas n&atilde;o era o dia</p>
<p>De ter minha companhia</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o, arranjo, teclados e acordeom solo: Julinho Teixeira</p>
<p>Viol&otilde;es: Luiz Brasil e Tony Costa</p>
<p>Contrabaixo: Fernando Nunes</p>
<p>Bateria: Cesinha</p>
<p>Acordeom: Oswaldinho do Acordeom</p>
<p>Bong&ocirc;: Marquinho Lobo</p>
<p>Congas e timbales: Paulinho He-man</p>
<p>Caxixi: Lan Lan</p>
<p>Vocais: Jussara Silveira, Betina, Jussara Louren&ccedil;o, Bebel, Jurema de C&acirc;ndia, Marcelo Szabo, Marcio Lott, Chico Puppo, Ronaldo Barcelos, Zeppa Souza, Ronaldo Correa, Pedro Baldanza, Jorge Alexandre e Louren&ccedil;o</p>
',
                'faixa_mp3' => '08_agua_fria.mp3',
                'faixa_ogg' => '08_agua_fria.ogg',
                'disco_id' => '17'));

        Musicas::create(
            array(
                'faixa' => 'A Massa',
                'compositor' => '(Raimundo Sodr&eacute; / Jorge Portugal)',
                'letra' => '<p>A dor da gente</p>
<p>&Eacute; dor de menino acanhado</p>
<p>Menino, bezerro, pisado</p>
<p>No curral do mundo a penar</p>
<p>&nbsp;</p>
<p>Que salta aos olhos</p>
<p>Igual a um gemido calado</p>
<p>A sombra do mal-assombrado</p>
<p>&Eacute; a dor de nem poder chorar</p>
<p>&nbsp;</p>
<p>Moinho de homens</p>
<p>Que nem jerimuns amassados</p>
<p>Mansos, meninos, domados</p>
<p>Massa de medos iguais</p>
<p>&nbsp;</p>
<p>Amassando a massa</p>
<p>A m&atilde;o que amassa a comida</p>
<p>Esculpe, modela e castiga</p>
<p>A massa dos homens normais</p>
<p>&nbsp;</p>
<p>Quando eu lembro da massa da mandioca m&atilde;e</p>
<p>A massa</p>
<p>Quando eu lembro da massa da mandioca, m&atilde;e</p>
<p>A massa</p>
<p>&nbsp;</p>
<p>Nunca mais me fizeram aquela presen&ccedil;a, m&atilde;e</p>
<p>A massa</p>
<p>&Eacute; a massa que planta a mandioca, m&atilde;e</p>
<p>A massa</p>
<p>A massa que eu falo &eacute; a que passa fome, m&atilde;e</p>
<p>A massa</p>
<p>Essa massa que planta &eacute; a mandioca, m&atilde;e</p>
<p>A massa</p>
<p>&nbsp;</p>
<p>Lel&eacute;, meu amor, lel&eacute;</p>
<p>Lel&eacute;, meu amor, lel&eacute;</p>
<p>No cabo da minha enxada n&atilde;o conhe&ccedil;o coron&eacute;</p>
<p>No cabo da minha enxada n&atilde;o conhe&ccedil;o coron&eacute;</p>
<p>&nbsp;</p>
<p>Eu quero mas n&atilde;o quero (camar&aacute;)</p>
<p>Mulher minha na fun&ccedil;&atilde;o (camar&aacute;)</p>
<p>C&ecirc; t&aacute; livre de um abra&ccedil;o (camar&aacute;)</p>
<p>Mas n&atilde;o t&aacute; de um belisc&atilde;o (camar&aacute;)</p>
<p>Torna a repetir meu amor (ai, ai, ai)</p>
<p>Eu torno a repetir meu amor</p>
<p>&nbsp;</p>
<p>O guarda civil n&atilde;o quer a roupa no quarador</p>
<p>O guarda civil n&atilde;o quer a roupa no quarador</p>
<p>Meu Deus, onde vai parar</p>
<p>Parar essa massa?</p>
<p>Meu Deus, onde vai parar</p>
<p>Parar essa massa?</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o, arranjo e teclados: Julinho Teixeira</p>
<p>Viol&atilde;o: Luiz Brasil</p>
<p>Contrabaixo: Fernando Nunes</p>
<p>Bateria: Cesinha</p>
<p>Zabumba, surdo, caxixi e zamb&ecirc;: Marquinho Lobo</p>
<p>Block e timbal: Paulinho He-man</p>
<p>Tri&acirc;ngulo e timbal: Lan Lan</p>
<p>Trompetes: Bidinho e Formiga</p>
<p>Sax tenor: Maca&eacute;</p>
<p>Sax alto: Paulo Senise</p>
<p>Trombone: Vitor</p>
<p>Vocais: Jussara Silveira, Betina, Jussara Louren&ccedil;o, Bebel, Jurema, Marcelo Szabo, Marcio Lott, Chico Puppo, Ronaldo Barcelos, Zeppa Souza, Ronaldo Correa, Pedro Baldanza, Jorge Alexandre e Louren&ccedil;o</p>
<p>Pr&eacute;-produ&ccedil;&atilde;o, teclados e guitarra solo: Est&uacute;dio Caverna (t&eacute;cnico: Roberto Lly)</p>
',
                'faixa_mp3' => '09_a_massa.mp3',
                'faixa_ogg' => '09_a_massa.ogg',
                'disco_id' => '17'));

        Musicas::create(
            array(
                'faixa' => 'Tudo Passa',
                'compositor' => '(Ant&ocirc;nio Barros / Cec&eacute;u)',
                'letra' => '<p>Pra me dar dor de cabe&ccedil;a</p>
<p>Bastam as preocupa&ccedil;&otilde;es</p>
<p>Por favor, meu bem, me esque&ccedil;a</p>
<p>N&atilde;o ligue as emo&ccedil;&otilde;es</p>
<p>Que eu vou fazer o poss&iacute;vel</p>
<p>Pra ver se tamb&eacute;m lhe esque&ccedil;o</p>
<p>Viver assim &eacute; horr&iacute;vel</p>
<p>H&aacute; quanto tempo eu pade&ccedil;o</p>
<p>&nbsp;</p>
<p>Ai, que d&oacute;i, d&oacute;i</p>
<p>Mas a dor passa</p>
<p>Ai, que r&oacute;i, r&oacute;i</p>
<p>Mas para de roer</p>
<p>Ai, que d&oacute;i, d&oacute;i</p>
<p>Mas eu vou achar gra&ccedil;a</p>
<p>Porque tudo passa</p>
<p>E eu vou lhe esquecer</p>
<p>&nbsp;</p>
<p>Vou cair de cabe&ccedil;a no maior forr&oacute;</p>
<p>Levantar p&oacute; at&eacute; o amanhecer</p>
<p>Eu vou beber o nosso amor de gra&ccedil;a</p>
<p>Porque tudo passa e eu vou lhe esquecer</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello</p>
<p>Arranjo de base e acordeom: Oswaldinho do Acordeom</p>
<p>Zabumba e agog&ocirc;: Arecessoni de Almeida</p>
<p>Tri&acirc;ngulo, pandeiro e reco reco: Jos&eacute; Durval</p>
<p>Guitarra: Luiz Brasil</p>
<p>Contrabaixo: Jacar&eacute;</p>
<p>Vocais: Jussara Silveira, Marcelo Szabo Ronaldo Barcelos, Z&eacute; Louren&ccedil;o, Ana Leuzinger e Nina Pancevski</p>
',
                'faixa_mp3' => '10_tudo_passa.mp3',
                'faixa_ogg' => '10_tudo_passa.ogg',
                'disco_id' => '17'));

        Musicas::create(
            array(
                'faixa' => 'Que Baque &eacute; Esse?',
                'compositor' => '(Lenine)',
                'letra' => '<p>Nega que baque &eacute; esse?</p>
<p>Chegou pra me baquear</p>
<p>Nega tu n&atilde;o se avexe</p>
<p>Seu corpo remexe</p>
<p>Sem se perguntar por qu&ecirc;</p>
<p>&nbsp;</p>
<p>Nega que baque &eacute; esse?</p>
<p>Ningu&eacute;m pode me ajudar</p>
<p>S&oacute; mesmo com voc&ecirc;</p>
<p>Quero ver o baque da vida virar</p>
<p>S&oacute; mesmo com voc&ecirc;</p>
<p>Quero ver o baque da vida virar</p>
<p>&nbsp;</p>
<p>E o ver&atilde;o chegou</p>
<p>O sol j&aacute; saiu pra tirar teu mofo</p>
<p>E o maracatu passou</p>
<p>J&aacute; com o bombo batendo fofo</p>
<p>S&oacute; quem vai atr&aacute;s</p>
<p>&Eacute; capaz de entender toda essa magia</p>
<p>A nega dan&ccedil;ando</p>
<p>E a negada babando na fantasia</p>
<p>A nega dan&ccedil;ando</p>
<p>E a negada babando na fantasia</p>
<p>&nbsp;</p>
<p>De onde vem esse toque</p>
<p>Que contagia o mundo</p>
<p>E leva todo mundo a reboque?</p>
<p>Eu n&atilde;o sei como &eacute;</p>
<p>Que essa nega danada da p&aacute; virada</p>
<p>Ainda t&aacute; de p&eacute;</p>
<p>&nbsp;</p>
<p>O maracatu &eacute; da Coroa Imperial</p>
<p>&Eacute; de Pernambuco</p>
<p>Ele &eacute; da Casa Real</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello</p>
<p>Arranjo de base: Marcio Miranda e Guto Gra&ccedil;a Mello</p>
<p>Teclados: Marcio Miranda</p>
<p>Contrabaixo: Fernando Nunes</p>
<p>Surdo, repique e agog&ocirc;: Marcos Suzano</p>
<p>Bat&aacute;, xequer&ecirc; e repique: Repolho</p>
<p>Guitarra: Paulo Rafael</p>
<p>Vocais: Jussara Silveira, Z&eacute; Louren&ccedil;o, Marcelo Szabo, Ronaldo Barcelos, Ana Leuzinger e Nina Pancevski</p>
',
                'faixa_mp3' => '11_que_baque_e_esse.mp3',
                'faixa_ogg' => '11_que_baque_e_esse.ogg',
                'disco_id' => '17'));

        Musicas::create(
            array(
                'faixa' => 'Acaba Quando Começa',
                'compositor' => '(Ger&ocirc;nimo / Saul Barbosa)',
                'letra' => '<p>A beira da sua an&aacute;gua</p>
<p>Na po&ccedil;a d&rsquo;&aacute;gua molhou</p>
<p>Ao chover de madrugada</p>
<p>Foi o dia que chegou</p>
<p>&nbsp;</p>
<p>Na sola do seu sapato</p>
<p>Mina &aacute;gua, nasce flor</p>
<p>&Eacute; o canto do desejo</p>
<p>&Eacute; um jeito de amor</p>
<p>&nbsp;</p>
<p>De mar&eacute;, de vagar</p>
<p>Se eu sou um voyager</p>
<p>O que eu sinto por voc&ecirc;</p>
<p>S&oacute; voc&ecirc; sabe o que &eacute;</p>
<p>N&atilde;o precisa mais falar</p>
<p>Quando a hist&oacute;ria come&ccedil;a</p>
<p>&Eacute; quando ela acaba</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello</p>
<p>Arranjo de base e teclados: Marcio Miranda</p>
<p>Contrabaixo: Fernando Nunes</p>
<p>Bateria: Cesinha</p>
<p>Congas: Repolho</p>
<p>Tri&acirc;ngulo, ganz&aacute; e serrote: Marcos Suzano</p>
<p>Flauta solo: Milton Guedes</p>
<p>Acordeom: Oswaldinho</p>
<p>Viol&atilde;o: Luiz Brasil</p>
<p>Guitarra: Paulo Coelho</p>
<p>Arranjo e reg&ecirc;ncia de cordas: Salinas</p>
<p>Violinos: Giancarlo Pareschi (spalla), Jos&eacute; Alves da Silva, Bernardo Bessler, Marri Cristina Bessler, Ricardo Amado da Silva, Antonela Lima Pareschi, Walter Hack, Marcelo Pompeu, Carmelita Reis, Aizik M. Geller e Jos&eacute; Dias</p>
<p>Coorden e violino: Paschoal Perrota</p>
<p>Violas: Frederick Stephany, Arlindo Figueiredo Penteado, Jeslina Noronha Passaroto e Jairo Diniz Silva</p>
<p>Cellos: Alceu de Almeida Reis e Jorge Kundert Ranevsky</p>
<p>Vocais: Jussara Silveira, Marcelo Szabo, Ronaldo Barcelos, Ana Leuzinger e Nina Pancevski</p>
', 'faixa_mp3' => '12_acaba_quando_comeca.mp3',
                'faixa_ogg' => '12_acaba_quando_comeca.ogg',
                'disco_id' => '17'));

        Musicas::create(
            array(
                'faixa' => 'Eu Quero &eacute; Botar Meu Bloco na Rua (Vers&atilde;o Forr&oacute;/Frevo)',
                'compositor' => '(Sergio Sampaio)',
                'letra' => '<p>H&aacute; quem diga</p>
<p>Que eu dormi de touca</p>
<p>Que eu perdi a boca</p>
<p>Que eu fugi da briga</p>
<p>Que eu ca&iacute; do galho</p>
<p>E que n&atilde;o vi sa&iacute;da</p>
<p>Que eu morri de medo</p>
<p>Quando o pau quebrou</p>
<p>&nbsp;</p>
<p>H&aacute; quem diga</p>
<p>Que eu n&atilde;o sei de nada</p>
<p>Que eu n&atilde;o sou de nada</p>
<p>E n&atilde;o pe&ccedil;o desculpas</p>
<p>Que eu n&atilde;o tenho culpa</p>
<p>Mas que eu dei bobeira</p>
<p>E que Durango Kid quase me pegou</p>
<p>&nbsp;</p>
<p>Eu quero &eacute; botar meu bloco na rua</p>
<p>Brincar, botar pra gemer</p>
<p>Eu quero &eacute; botar meu bloco na rua</p>
<p>Gingar pra dar e vender</p>
<p>&nbsp;</p>
<p>Eu por mim queria isso e aquilo</p>
<p>Um quilo mais daquilo</p>
<p>Um grilo menos nisso</p>
<p>&Eacute; disso que eu preciso</p>
<p>N&atilde;o &eacute; nada disso</p>
<p>Eu quero &eacute; todo mundo nesse carnaval</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o: Netinho</p>
<p>T&eacute;cnicos de grava&ccedil;&atilde;o: Mario Jorge Bruno, Ronaldo Ferrone e Luiz Rodrigues</p>
<p>Auxiliares: Alex, Elcio e Billy</p>
<p>Guitarra: Victor Biglione e Julinho Brown</p>
<p>Sax: Milton Guedes e Dulciano Pereira</p>
<p>Trombone: Vitor Santos</p>
<p>Trompetes: Bidinho e Formiga</p>
<p>Contrabaixo: Fernando Nunes</p>
<p>Bateria: Cesinha</p>
<p>Surdo: Gordinho</p>
<p>Percuss&atilde;o: Marquinho Lobo, Firmino e Reginaldo Vargas</p>
<p>Tamborins: Wanderley Moura, Ney Pedro, Vivaldo e Nelson Damas</p>
',
                'faixa_mp3' => '13_eu_quero_e_botar_meu_bloco_na_rua_forro_frevo.mp3',
                'faixa_ogg' => '13_eu_quero_e_botar_meu_bloco_na_rua_forro_frevo.ogg',
                'disco_id' => '17'));

        Musicas::create(
            array(
                'faixa' => 'Contradi&ccedil;&otilde;es',
                'compositor' => '(Dominguinhos / Fausto Nilo)',
                'letra' => '<p>Meu caso de amor</p>
<p>&Eacute; um espinho feroz</p>
<p>Quando bate &eacute; uma flor</p>
<p>Seu carinho d&oacute;i</p>
<p>&nbsp;</p>
<p>Seu gosto &eacute; de mel</p>
<p>Com venenos amargos demais</p>
<p>Sua boca, modernas palavras</p>
<p>Seus l&aacute;bios, promessas de tempos atr&aacute;s</p>
<p>&nbsp;</p>
<p>De tanto querer</p>
<p>Me perdi nessas contradi&ccedil;&otilde;es</p>
<p>Pus na m&atilde;o desse Deus</p>
<p>Minhas emo&ccedil;&otilde;es</p>
<p>&nbsp;</p>
<p>Todo homem se cr&ecirc;</p>
<p>Quando entra em uma mulher</p>
<p>Mas esquece que a dor e o prazer</p>
<p>Vem quando ela quer</p>
<p>&nbsp;</p>
<p>O que ele me deu</p>
<p>Ningu&eacute;m pode roubar</p>
<p>Mas da pr&oacute;xima vez</p>
<p>Vou me apaixonar</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello</p>
<p>Arranjo de base e acordeom: Dominguinhos</p>
<p>Arranjo e reg&ecirc;ncia de cordas: Salinas</p>
<p>Violinos: Giancarlo Pareschi (spalla), Jos&eacute; Alves da Silva, Bernardo Bessler, Marri Cristina Bessler, Ricardo Amado da Silva, Antonela Lima Pareschi, Walter Hack, Marcelo Pompeu, Carmelita Reis, Aizik M. Geller e Jos&eacute; Dias</p>
<p>Coorden e violino: Paschoal Perrota</p>
<p>Violas: Frederick Stephany, Arlindo Figueiredo Penteado, Jeslina Noronha Passaroto e Jairo Diniz Silva</p>
<p>Cellos: Alceu de Almeida Reis e Jorge Kundert Ranevsky</p>
',
                'faixa_mp3' => '14_contradicoes.mp3',
                'faixa_ogg' => '14_contradicoes.ogg',
                'disco_id' => '17'));

        Musicas::create(
            array(
                'faixa' => 'Onde Tu T&aacute; Nen&eacute;m',
                'compositor' => '(Luis Bandeira)',
                'letra' => '<p>Onde tu t&aacute; nen&eacute;m</p>
<p>Eu vim te procurar</p>
<p>Vamos fazer as pazes</p>
<p>Tenho tantas frases pra te agradar</p>
<p>&nbsp;</p>
<p>Onde tu t&aacute; nen&eacute;m</p>
<p>Eu vim te procurar</p>
<p>Saudade sai me solta</p>
<p>Estou aqui de volta pra meu bem beijar</p>
<p>&nbsp;</p>
<p>Estou aqui de novo junto ao meu povo</p>
<p>Minha gente amiga</p>
<p>Quem me conhece sabe</p>
<p>Que eu detesto intriga</p>
<p>&nbsp;</p>
<p>Uma saudade enorme</p>
<p>Come e deita e dorme no meu cora&ccedil;&atilde;o</p>
<p>Rem&eacute;dio indicado pra quem est&aacute; errado</p>
<p>&Eacute; pedir perd&atilde;o</p>
<p>&nbsp;</p>
<p>Por uma briga &agrave; toa</p>
<p>Quanta coisa boa a gente est&aacute; perdendo</p>
<p>Sert&atilde;o em noite branca</p>
<p>O dia amanhecendo</p>
<p>&nbsp;</p>
<p>Nossa conversa linda</p>
<p>Tem segredo ainda para um s&eacute;culo mais</p>
<p>N&atilde;o &eacute; pra nos gabar</p>
<p>Mas n&atilde;o existe um par como n&oacute;s dois se faz</p>
',
                'creditos' => '
<p>Arranjo e violas: Robertinho de Recife</p>
<p>Sanfona: Z&eacute; Am&eacute;rico Bastos</p>
<p>Baixo: Ciro Cruz</p>
<p>Bateria: Renato Massa</p>
<p>Percuss&atilde;o: Firmino e Paulinho He-Man</p>
<p>Teclados: Luiz Antonio</p>
<p>Vocais: Roberta Little, Lucy Louro, Val&eacute;ria Mariano e Nan&aacute;</p>
',
                'faixa_mp3' => '01_onde_tu_ta_nenem.mp3',
                'faixa_ogg' => '01_onde_tu_ta_nenem.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'Xod&oacute; Beleza',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Me lembro daquele tempo</p>
<p>Quando a gente namorava</p>
<p>No port&atilde;o de casa, no port&atilde;o de casa</p>
<p>Ah, era aquele chameguinho safadinho, bonitinho</p>
<p>Muito bem agarradinho no port&atilde;o</p>
<p>Ah, era aquele chameguinho safadinho, bonitinho</p>
<p>Muito bem agarradinho no port&atilde;o</p>
<p>&nbsp;</p>
<p>Meu bem por dentro e eu pelo lado de fora</p>
<p>Ele dizia t&aacute; na hora e eu n&atilde;o, n&atilde;o</p>
<p>Nosso namoro era xod&oacute; beleza</p>
<p>Uma fogueira acesa dentro do meu cora&ccedil;&atilde;o</p>
<p>Nosso namoro era xod&oacute; beleza</p>
<p>Uma fogueira acesa dentro do meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>E a gente continua com aquele namorinho</p>
<p>Muito mais agarradinho</p>
<p>M&atilde;o na m&atilde;o</p>
<p>&nbsp;</p>
<p>Chega pra c&aacute;, meu bem me d&aacute;</p>
<p>Vamos lembrar daquele tempo l&aacute; no port&atilde;o</p>
<p>Seu cora&ccedil;&atilde;o acelerava, o meu batia</p>
<p>E a agonia se morria de paix&atilde;o</p>
<p>&nbsp;</p>
<p>Nosso namoro era xod&oacute; beleza</p>
<p>Uma fogueira acesa dentro do meu cora&ccedil;&atilde;o</p>
<p>Nosso namoro era xod&oacute; beleza</p>
<p>Uma fogueira acesa dentro do meu cora&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Am&eacute;rico Bastos e Luiz Ant&ocirc;nio</p>
<p>Guitarra: Marquinhos</p>
<p>Sanfona: Z&eacute; Am&eacute;rico Bastos</p>
<p>Baixo: Jacar&eacute;</p>
<p>Bateria: Renato Massa</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Teclados: Luiz Antonio</p>
<p>Vocais: Roberta Little, Lucy Louro, Val&eacute;ria Mariano, Nan&aacute;, Marcelo Szabo e Elba Ramalho</p>
',
                'faixa_mp3' => '02_xodo_beleza.mp3',
                'faixa_ogg' => '02_xodo_beleza.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'Le&atilde;o do Norte',
                'compositor' => '(Lenine / Paulo C&eacute;sar Pinheiro) Participa&ccedil;&atilde;o especial: <strong> Lenine</strong>',
                'letra' => '<p>Sou cora&ccedil;&atilde;o do folclore nordestino</p>
<p>Eu sou Mateus e Basti&atilde;o do boi bumb&aacute;</p>
<p>Sou o boneco de mestre Vitalino</p>
<p>Dan&ccedil;ando uma ciranda em Itamarac&aacute;</p>
<p>&nbsp;</p>
<p>Eu sou o verso de Carlos Pena Filho</p>
<p>Num frevo de Capiba</p>
<p>Ao som da Orquestra Armorial</p>
<p>Sou Capibaribe num livro de Jo&atilde;o Cabral</p>
<p>&nbsp;</p>
<p>Sou mamulengo de S&atilde;o Bento da Una</p>
<p>Vindo num baque solto de um maracatu</p>
<p>Eu sou um auto de Ariano Suassuna</p>
<p>No meio da feira de Caruaru</p>
<p>&nbsp;</p>
<p>Sou Frei Caneca no Pastoril do Faceta</p>
<p>Levando a Flor da Lira pra Nova Jerusal&eacute;m</p>
<p>Sou Luiz Gonzaga</p>
<p>E eu sou do mangue tamb&eacute;m</p>
<p>&nbsp;</p>
<p>Eu sou mameluco</p>
<p>Sou de Casa Forte</p>
<p>Sou de Pernambuco</p>
<p>Eu sou o Le&atilde;o do Norte</p>
<p>&nbsp;</p>
<p>Sou Macambira de Joaquim Cardoso</p>
<p>Banda da Pife no meio do carnaval</p>
<p>Na noite dos tambores silenciosos</p>
<p>Sou a calunga revelando o carnaval</p>
<p>&nbsp;</p>
<p>Sou a folia que desce l&aacute; de Olinda</p>
<p>O Homem da Meia-Noite</p>
<p>Eu sou puxando esse cord&atilde;o</p>
<p>Sou jangadeiro na festa de Jaboat&atilde;o</p>
',
                'creditos' => '
<p>Arranjo: Robertinho de Recife e Lenine</p>
<p>Viol&atilde;o: Lenine</p>
<p>Sitar e guitar de 12 cordas: Robertinho de Recife</p>
<p>Percuss&atilde;o: Firmino e Paulinho He-Man</p>
<p>Teclados: Luiz Antonio</p>
',
                'faixa_mp3' => '03_leao_do_norte.mp3',
                'faixa_ogg' => '03_leao_do_norte.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'Ch&atilde;o de Giz',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>Eu des&ccedil;o dessa solid&atilde;o</p>
<p>Espalho coisas sobre um ch&atilde;o de giz</p>
<p>H&aacute; meros devaneios tolos a me torturar</p>
<p>Fotografias recortadas em jornais de folhas ami&uacute;de</p>
<p>Eu vou te jogar num pano de guardar confetes</p>
<p>Eu vou te jogar num pano de guardar confetes</p>
<p>&nbsp;</p>
<p>Disparo balas de canh&atilde;o</p>
<p>&Eacute; in&uacute;til pois existe um Gr&atilde;o-Vizir</p>
<p>H&aacute; tantas violetas velhas sem um colibri</p>
<p>Queria usar, quem sabe, uma camisa de for&ccedil;a</p>
<p>Ou de V&ecirc;nus</p>
<p>Mas n&atilde;o vou gozar de n&oacute;s apenas um cigarro</p>
<p>Nem vou te beijar gastando assim o meu batom</p>
<p>&nbsp;</p>
<p>Agora pego um caminh&atilde;o</p>
<p>Na lona, vou a nocaute outra vez</p>
<p>Pra sempre fui acorrentada no seu calcanhar</p>
<p>Os meus vinte anos de boy, that&rsquo;s over baby!</p>
<p>Freud explica</p>
<p>N&atilde;o vou me sujar fumando apenas um cigarro</p>
<p>Nem vou te beijar gastando assim o meu batom</p>
<p>Quanto ao pano dos confetes</p>
<p>J&aacute; passou o meu carnaval</p>
<p>Isso explica porque o sexo &eacute; assunto popular</p>
<p>No mais, estou indo embora</p>
<p>No mais, estou indo embora, baby</p>
<p>No mais, embora baby, no mais...</p>
<p>No mais, estou indo embora, no mais...</p>
',
                'creditos' => '
<p>Arranjo e viol&atilde;o de a&ccedil;o: Z&eacute; Ramalho</p>
<p>Viol&atilde;o de nylon: Geraldo Azevedo</p>
<p>Sitar: Robertinho de Recife</p>
<p>Violino: Paul de Castro</p>
<p>Baixo: Jacar&eacute;</p>
<p>Bateria: Renato Massa</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
<p>Vocais: Elba Ramalho e Marcelo Szabo</p>
',
                'faixa_mp3' => '04_chao_de_giz.mp3',
                'faixa_ogg' => '04_chao_de_giz.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'B&eacute;rad&ecirc;ro',
                'compositor' => '(Chico C&eacute;sar)',
                'letra' => '<p>Os olhos tristes da fita</p>
<p>Rodando no gravador</p>
<p>Uma mo&ccedil;a cosendo roupa</p>
<p>Com a linha do Equador</p>
<p>E a voz da santa dizendo</p>
<p>&ldquo;O que &eacute; que eu t&ocirc; fazendo</p>
<p>C&aacute; em cima desse andor?&rdquo;</p>
<p>E a voz da santa dizendo</p>
<p>&ldquo;O que &eacute; que eu t&ocirc; fazendo</p>
<p>C&aacute; em cima desse andor?&rdquo;</p>
<p>&nbsp;</p>
<p>A tinta pinta o asfalto</p>
<p>Enfeita a alma motorista</p>
<p>&Eacute; cor na cor da cidade</p>
<p>Batom no l&aacute;bio nortista</p>
<p>O olhar v&ecirc; tons t&atilde;o sudestes</p>
<p>E o beijo que v&oacute;s me nordestes</p>
<p>Arranha-c&eacute;u da boca paulista</p>
<p>O olhar v&ecirc; tons t&atilde;o sudestes</p>
<p>E o beijo que v&oacute;s me nordestes</p>
<p>Arranha-c&eacute;u da boca paulista</p>
<p>&nbsp;</p>
<p>Cadeiras el&eacute;tricas da baiana</p>
<p>Senten&ccedil;a que o turista cheire</p>
<p>E os sem amor e os sem teto</p>
<p>Os sem paix&atilde;o, sem alqueire</p>
<p>No peito dos sem peito uma seta</p>
<p>E a cigana analfabeta</p>
<p>Lendo a m&atilde;o de Paulo Freire</p>
<p>No peito dos sem peito uma seta</p>
<p>E a cigana analfabeta</p>
<p>Lendo a m&atilde;o de Paulo Freire</p>
<p>&nbsp;</p>
<p>A contenteza do triste</p>
<p>Tristezura do contente</p>
<p>Vozes de faca cortando</p>
<p>Como o riso da serpente</p>
<p>S&atilde;o sons de sins, n&atilde;o contudo</p>
<p>P&eacute; quebrado, verso mudo</p>
<p>Grito no hospital da gente</p>
<p>S&atilde;o sons de sins, n&atilde;o contudo</p>
<p>P&eacute; quebrado, verso mudo</p>
<p>Grito no hospital da gente</p>
<p>&nbsp;</p>
<p>S&atilde;o sons, sons, s&atilde;o sons de sins</p>
<p>S&atilde;o sons, s&atilde;o sons, s&atilde;o sons de sins</p>
<p>S&atilde;o sons, sons de sins</p>
',
                'creditos' => '
<p>Arranjo, guitarra e sitar: Robertinho de Recife</p>
<p>Percuss&atilde;o: Firmino e Luiz Antonio</p>
<p>Vocais: Roberta Little, Lucy Louro, Val&eacute;ria Mariano, Nan&aacute;, Marcelo Szabo, Elba Ramalho e MC Jacar&eacute;</p>
',
                'faixa_mp3' => '05_beradero.mp3',
                'faixa_ogg' => '05_beradero.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'Treze de Dezembro',
                'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas / letra: Gilberto Gil) Participa&ccedil;&atilde;o especial: <strong> Conjunto &Eacute;poca de Ouro</strong> e <strong>Dominguinhos</strong>',
                'letra' => '<p>Bem que essa noite eu vi gente chegando</p>
<p>Eu vi sapo saltitando</p>
<p>E ao longe ouvi o ronco alegre do trov&atilde;o</p>
<p>Alguma coisa forte pra valer</p>
<p>Tava para acontecer na regi&atilde;o</p>
<p>Quando o galo cantou, o dia raiou</p>
<p>Eu imaginei</p>
<p>&Eacute; que hoje &eacute; treze de dezembro</p>
<p>E a treze de dezembro nasceu Nosso Rei</p>
<p>&nbsp;</p>
<p>O nosso Rei do Bai&atilde;o, a maior voz do sert&atilde;o</p>
<p>Filho do sonho de D. Sebasti&atilde;o</p>
<p>Como fruto do matrim&ocirc;nio</p>
<p>Do cometa Janu&aacute;rio com a estrela Santana</p>
<p>Ao nascer da Era do Aqu&aacute;rio</p>
<p>No cen&aacute;rio rico das terras de Exu</p>
<p>O mensageiro nu dos orix&aacute;s</p>
<p>&Eacute; desse treze de dezembro que eu me lembrarei</p>
<p>E sei que n&atilde;o me esquecerei jamais</p>
',
                'creditos' => '
<p>Arranjo: Conjunto &Eacute;poca de Ouro</p>
<p>Sanfona: Dominguinhos</p>
<p>&Eacute;poca de Ouro</p>
<p>Viol&atilde;o: Cesar Faria</p>
<p>Viol&atilde;o7 cordas: Dino 7 Cordas</p>
<p>Bandolim: Ronaldo do Bandolim</p>
<p>Viol&atilde;o: Toni</p>
<p>Cavaquinho: Jorge Filho</p>
<p>Pandeiro: Jorginho do Pandeiro</p>
',
                'faixa_mp3' => '06_treze_de_dezembro.mp3',
                'faixa_ogg' => '06_treze_de_dezembro.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'Na Base da Chinela',
                'compositor' => '(Jackson do Pandeiro / Rosil Cavalcanti)',
                'letra' => '<p>Eu fui dan&ccedil;ar um baile na casa da Gabriela</p>
<p>Nunca vi coisa t&atilde;o boa foi na base da chinela</p>
<p>Eu fui dan&ccedil;ar um baile na casa da Gabriela</p>
<p>Nunca vi coisa t&atilde;o boa foi na base da chinela</p>
<p>&nbsp;</p>
<p>O sujeito ia chegando tirava logo o sapato</p>
<p>Se tivesse de botina, sola grossa, bico chato</p>
<p>Entrava pra dan&ccedil;ar no baile da Gabriela</p>
<p>Tirando meia e sapato, cal&ccedil;ando um par de chinela</p>
<p>&nbsp;</p>
<p>O baile estava animado s&oacute; na base da chinela</p>
<p>Toda a turma disputava dan&ccedil;ar com a Gabriela</p>
<p>Requebrar naquela base no sal&atilde;o s&oacute; tinha ela</p>
<p>Todos convidados riam gostando da base dela</p>
<p>Jogaram no sal&atilde;o pimenta bem machucada</p>
<p>O baile da Gabriela acabou com chinelada</p>
',
                'creditos' => '
<p>Arranjo e guitarras: Robertinho de Recife</p>
<p>Sanfona: Z&eacute; Am&eacute;rico Bastos</p>
<p>Baixo: Ciro Cruz</p>
<p>Bateria: Renato Massa</p>
<p>Percuss&atilde;o: Firmino</p>
<p>Teclados: Luiz Antonio</p>
<p>Clarinete: Juarez Ara&uacute;jo</p>
<p>Vocais: Roberta Little, Lucy Louro, Val&eacute;ria Mariano e Nan&aacute;</p>
',
                'faixa_mp3' => '07_na_base_da_chinela.mp3',
                'faixa_ogg' => '07_na_base_da_chinela.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'Canoeiro',
                'compositor' => '(Dorival Caymmi)',
                'letra' => '<p>Louvado seja Deus &oacute; meu pai</p>
<p>Louvado seja Deus &oacute; meu pai</p>
<p>&nbsp;</p>
<p>&Ocirc; canoeiro bota a rede</p>
<p>Bota a rede no mar</p>
<p>&Ocirc; canoeiro bota a rede no mar</p>
<p>&nbsp;</p>
<p>Cerca o peixe, bate o remo</p>
<p>Puxa a corda, colhe a rede</p>
<p>&Ocirc; canoeiro puxa a rede do mar</p>
<p>&nbsp;</p>
<p>Vai ter presente pra Chiquinha</p>
<p>Ter presente pra Iai&aacute;</p>
<p>&Ocirc; canoeiro puxa a rede do mar</p>
<p>&nbsp;</p>
<p>Iai&aacute; me d&aacute; teu remo</p>
<p>Teu remo pra mim remar</p>
<p>O remo caiu, quebrou-se, mana</p>
<p>L&aacute; em alto mar</p>
',
                'creditos' => '
<p>Arranjo: Robertinho de Recife</p>
<p>Viol&atilde;o: Lenine</p>
<p>Baixo e guitarra: Robertinho de Recife</p>
<p>Percuss&atilde;o: Firmino e Paulinho He-Man</p>
<p>Vocais: Roberta Little, Lucy Louro, Val&eacute;ria Mariano, Nan&aacute;, Marcelo Szabo, Elba Ramalho e MC Jacar&eacute;</p>
',
                'faixa_mp3' => '08_canoeiro.mp3',
                'faixa_ogg' => '08_canoeiro.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'Parceiros das Del&iacute;cias',
                'compositor' => '(Geraldo Azevedo / Capinan)',
                'letra' => '<p>Amor</p>
<p>Vem me tirar a sede</p>
<p>Amor</p>
<p>Vem me tirar da rede</p>
<p>Amor</p>
<p>Nem que seja das intrigas</p>
<p>Vem me tirar</p>
<p>Vem me botar na vida</p>
<p>&nbsp;</p>
<p>Amor</p>
<p>Vem me tirar o cinto</p>
<p>Amor</p>
<p>Vem me tirar a pele</p>
<p>Amor</p>
<p>Nem que seja sem mal&iacute;cia</p>
<p>Vem me tirar</p>
<p>Vem me fazer car&iacute;cia</p>
<p>&nbsp;</p>
<p>Vem me tirar</p>
<p>&Agrave;s vezes pra dan&ccedil;ar</p>
<p>At&eacute; me machucar, amor</p>
<p>Vem me botar na rede</p>
<p>Reviver a sede</p>
<p>Vem me fazer aquele amor</p>
<p>Parceiro das del&iacute;cias</p>
<p>Amor</p>
',
                'creditos' => '
<p>Arranjo e teclados: Luiz Ant&ocirc;nio</p>
<p>Violas: Robertinho de Recife</p>
<p>Viol&atilde;o: Marquinhos</p>
<p>Bateria: Renato Massa</p>
<p>Percuss&atilde;o: Firmino e Paulinho He-Man</p>
<p>Gaita: Milton Guedes</p>
',
                'faixa_mp3' => '09_parceiros_das_delicias.mp3',
                'faixa_ogg' => '09_parceiros_das_delicias.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'Eu Vou até At&eacute; de Manh&atilde;',
                'compositor' => '(Lauro Maia) Participa&ccedil;&atilde;o: <strong>Boca Livre</strong>',
                'letra' => '<p>Oi, balanc&ecirc;, balan&ccedil;ar</p>
<p>Balan&ccedil;a pra l&aacute; e pra c&aacute;</p>
<p>Oi, balanc&ecirc;, balan&ccedil;ar</p>
<p>Balan&ccedil;a pra l&aacute; e pra c&aacute;</p>
<p>&nbsp;</p>
<p>Eu vou at&eacute; de manh&atilde;</p>
<p>S&oacute; nesse balancear</p>
<p>Eu vou at&eacute; de manh&atilde;</p>
<p>S&oacute; nesse balancear</p>
<p>&nbsp;</p>
<p>Quem balan&ccedil;a com jeito h&aacute; de gostar</p>
<p>Dan&ccedil;ando, dan&ccedil;ando, n&atilde;o quer mais parar</p>
<p>Quem balan&ccedil;a com jeito h&aacute; de gostar</p>
<p>Dan&ccedil;ando, dan&ccedil;ando, n&atilde;o quer mais parar</p>
<p>&nbsp;</p>
<p>O camarada fica mole</p>
<p>Fica mole, mole</p>
<p>O camarada fica mole</p>
<p>Fica mole, mole, mole</p>
<p>&nbsp;</p>
<p>Outro dia a charanga do Zequinha</p>
<p>Tocou balanc&ecirc; a noite inteirinha</p>
<p>Outro dia a charanga do Zequinha</p>
<p>Tocou balanc&ecirc; a noite inteirinha</p>
<p>&nbsp;</p>
<p>O fole velho ficou rouco</p>
<p>Ficou rouco, rouco</p>
<p>O fole velho ficou rouco</p>
<p>Ficou rouco, rouco, rouco</p>
',
                'creditos' => '
<p>Arranjo e teclados: Luiz Ant&ocirc;nio</p>
<p>Guitarra: Robertinho de Recife</p>
<p>Sanfona: Z&eacute; Am&eacute;rico Bastos</p>
<p>Baixo: Ciro Cruz</p>
<p>Bateria: Renato Massa</p>
<p>Percuss&atilde;o: Firmino</p>
<p>Teclados: Luiz Antonio</p>
',
                'faixa_mp3' => '10_eu_vou_ate_de_manha.mp3',
                'faixa_ogg' => '10_eu_vou_ate_de_manha.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'Estrada do Canind&eacute;',
                'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
                'letra' => '<p>Ai, ai, que bom</p>
<p>Que bom, que bom que &eacute;</p>
<p>Uma estrada e uma caboca</p>
<p>Uma gente andando a p&eacute;</p>
<p>&nbsp;</p>
<p>Ai, ai, que bom</p>
<p>Que bom, que bom que &eacute;</p>
<p>Uma estrada e a lua branca</p>
<p>No sert&atilde;o de Canind&eacute;</p>
<p>&nbsp;</p>
<p>Artom&oacute;ve l&aacute; nem se sabe</p>
<p>Se &eacute; home ou se &eacute; mui&eacute;</p>
<p>Quem &eacute; rico anda em burrico</p>
<p>Quem &eacute; pobre anda a p&eacute;</p>
<p>&nbsp;</p>
<p>Mas o pobre v&ecirc; nas estrada</p>
<p>O orvaio beijando as flor</p>
<p>V&ecirc; de perto o galo campina</p>
<p>Que quando canta muda de cor</p>
<p>&nbsp;</p>
<p>Vai moiando os p&eacute;s nos riacho</p>
<p>Que &aacute;gua fresca, Nosso Senhor!</p>
<p>Vai oiando coisa a granel</p>
<p>Coisas que pra mode ver</p>
<p>O crist&atilde;o tem que andar a p&eacute;</p>
',
                'creditos' => '
<p>Arranjo: Banda da Elba</p>
<p>Guitarra: Marquinhos</p>
<p>Baixo: Jacar&eacute;</p>
<p>Sanfona: Cesinha</p>
<p>Bateria: Renato Massa</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
',
                'faixa_mp3' => '11_estrada_do_caninde.mp3',
                'faixa_ogg' => '11_estrada_do_caninde.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'A Paisagem',
                'compositor' => '(Manduka / Dominguinhos)',
                'letra' => '<p>A paisagem quer te ver</p>
<p>Na porta do meu carinho</p>
<p>Entre nela sem bater</p>
<p>Como a lua de mansinho</p>
<p>&nbsp;</p>
<p>Fa&ccedil;a uso do querer</p>
<p>Seja qual for o caminho</p>
<p>Pois o rio que passa aqui</p>
<p>Passou antes no vizinho</p>
<p>&nbsp;</p>
<p>O canto de um passarinho</p>
<p>Mais ligeiro que uma pena</p>
<p>Me a&ccedil;ucara, me a&ccedil;ucena</p>
<p>Mesmo quando estou sozinha</p>
<p>&nbsp;</p>
<p>A saudade &eacute; um moinho</p>
<p>Em seu giro me acena</p>
<p>Eu comigo me enfarinho</p>
<p>Mais conservo ela serena</p>
<p>Eu comigo me enfarinho</p>
<p>Mais conservo ela serena</p>
',
                'creditos' => '
<p>Arranjo e sanfona: Dominguinhos</p>
<p>Viol&atilde;o: Marquinhos</p>
<p>Baixo: Jacar&eacute;</p>
<p>Bateria: Renato Massa</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
',
                'faixa_mp3' => '12_a_paisagem.mp3',
                'faixa_ogg' => '12_a_paisagem.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'Estrela Mi&uacute;da',
                'compositor' => '(Jo&atilde;o do Vale / Luiz Vieira)',
                'letra' => '<p>Estrela mi&uacute;da que alumeia o mar</p>
<p>Alumi&aacute; terra e mar</p>
<p>Pra meu bem vir me buscar</p>
<p>H&aacute; mais de um m&ecirc;s que ela n&atilde;o</p>
<p>Que ela n&atilde;o vem me buscar</p>
<p>&nbsp;</p>
<p>A gar&ccedil;a perdeu a pena</p>
<p>Ao passar no igarap&eacute;</p>
<p>Eu tamb&eacute;m perdi meu len&ccedil;o</p>
<p>Atr&aacute;s de quem n&atilde;o me quer</p>
<p>&nbsp;</p>
<p>Estrela mi&uacute;da que alumeia o mar</p>
<p>Alumi&aacute; terra e mar</p>
<p>Pra meu bem vir me buscar</p>
<p>H&aacute; mais de um m&ecirc;s que ela n&atilde;o</p>
<p>Que ela n&atilde;o vem me beijar</p>
<p>&nbsp;</p>
<p>A onda quebrou na praia</p>
<p>E voltou correndo ao mar</p>
<p>Meu amor foi como a onda</p>
<p>E n&atilde;o voltou pra me beijar</p>
',
                'creditos' => '
<p>Arranjo, cavaquinho e viol&atilde;o: Robertinho de Recife</p>
<p>Percuss&atilde;o: Firmino e Luiz Ant&ocirc;nio</p>
<p>Viol&atilde;o de 7 cordas: Dino</p>
<p>Trombone: L&eacute;lio Penha</p>
',
                'faixa_mp3' => '13_estrela_miuda.mp3',
                'faixa_ogg' => '13_estrela_miuda.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'Sim, Foi Voc&ecirc;',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>Sim</p>
<p>Foi voc&ecirc; quem n&atilde;o quis voltar</p>
<p>Toda noite a saudade vem</p>
<p>De verdade agora lhe procurar</p>
<p>&nbsp;</p>
<p>Como a mim</p>
<p>Que a tristeza tem</p>
<p>Para sempre perdido al&eacute;m do sorriso</p>
<p>J&aacute; sem poder chorar</p>
<p>&nbsp;</p>
<p>Ah, nosso amor foi bom</p>
<p>Foi de n&atilde;o se esquecer</p>
<p>Foi t&atilde;o bonito</p>
<p>Foi para sempre</p>
<p>E era de se esperar renascer</p>
<p>&nbsp;</p>
<p>Mas</p>
<p>Foi voc&ecirc; quem n&atilde;o quis voltar</p>
<p>Toda noite a saudade vem</p>
<p>De verdade agora</p>
<p>Lhe procurar</p>
',
                'creditos' => '
<p>Arranjo e teclados: Luiz Ant&ocirc;nio</p>
<p>Violas: Robertinho de Recife</p>
<p>Bateria: Renato Massa</p>
<p>Percuss&atilde;o: Firmino</p>
<p>Sax: Milton Guedes</p>
',
                'faixa_mp3' => '14_sim_foi_voce.mp3',
                'faixa_ogg' => '14_sim_foi_voce.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'Frevos',
                'compositor' => 'Participa&ccedil;&atilde;o especial: <strong> Banda Pinguim</strong> (Recife)',
                'letra' => '<p><strong>Evoca&ccedil;&atilde;o</strong></p>
<p>(Nelson Ferreira)</p>
<hr class="space-letra-top-musicas">
<p>Felinto, Pedro Salgado</p>
<p>Guilherme Fenelon</p>
<p>Cad&ecirc; seus blocos famosos?</p>
<p>Bloco das Flores, Andaluzas</p>
<p>Pirilampos, Ap&ocirc;is Fum</p>
<p>Dos carnavais saudosos</p>
<p>&nbsp;</p>
<p>Na alta madrugada</p>
<p>O coro entoava</p>
<p>O tom da marcha regresso</p>
<p>Que era um sucesso</p>
<p>Dos tempos ideais</p>
<p>Do velho Raul Morais</p>
<p>&nbsp;</p>
<p>Adeus, adeus minha gente</p>
<p>Que j&aacute; cantamos bastante</p>
<p>Recife adormecia</p>
<p>Ficava a sonhar</p>
<p>Ao som da triste melodia</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Frevo n&ordm; 1 do Recife</strong></p>
<p>(Ant&ocirc;nio Maria)</p>
<hr class="space-letra-top-musicas">
<p>Ai, ai, saudade</p>
<p>Saudade t&atilde;o grande</p>
<p>Saudade que eu sinto</p>
<p>Do Clube das P&aacute;s, dos Vassouras</p>
<p>Passistas tra&ccedil;ando tesouras</p>
<p>Nas ruas repletas de l&aacute;</p>
<p>Batidas de bumbo</p>
<p>S&atilde;o maracatus retardados</p>
<p>Que voltam pra casa cansados</p>
<p>Com seus estandartes pro ar</p>
<p>&nbsp;</p>
<p>Que adianta se o Recife est&aacute; longe</p>
<p>E a saudade &eacute; t&atilde;o grande</p>
<p>Que eu at&eacute; me embara&ccedil;o</p>
<p>Parece que eu vejo Walfrido Cebola no passo</p>
<p>Haroldo Mathias, Cola&ccedil;o</p>
<p>Recife est&aacute; perto de mim</p>
<p>&nbsp;</p>
<p>Saudades que eu sinto</p>
<p>S&atilde;o maracatus retardados</p>
<p>Que voltam pra casa cansados</p>
<p>Com seus estandartes pro ar</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Oh! Bela</strong></p>
<p>(Capiba)</p>
<hr class="space-letra-top-musicas">
<p>Voc&ecirc; diz que ela &eacute; bela</p>
<p>Ela &eacute; bela sim senhor</p>
<p>Por&eacute;m poderia ser mais bela</p>
<p>Se ela tivesse o meu amor</p>
<p>Meu amor</p>
<p>&nbsp;</p>
<p>Bela &eacute; toda natureza, &ocirc; bela</p>
<p>Bela &eacute; tudo que &eacute; belo, &ocirc; bela</p>
<p>O sorriso da crian&ccedil;a</p>
<p>O perfume de uma rosa</p>
<p>O que fica na lembran&ccedil;a</p>
<p>&nbsp;</p>
<p>Belo &eacute; ver um passarinho, &ocirc; bela</p>
<p>Indo em busca do seu ninho, &ocirc; bela</p>
<p>Todo mundo se amando</p>
<p>Com amor e com carinho</p>
<p>Uns sorrindo, outros chorando de amor</p>
<p>De amor</p>
<p>&nbsp;</p>
<p><strong>Sou eu teu amor</strong></p>
<p>(Alceu Valen&ccedil;a / Carlos Fernando)</p>
<hr class="space-letra-top-musicas">
<p>L&aacute; vem, l&aacute; vem o bloco</p>
<p>Mas cad&ecirc; o bloco? J&aacute; passou</p>
<p>L&aacute; vem, l&aacute; vem o bloco</p>
<p>Mas cad&ecirc; o bloco? J&aacute; passou</p>
<p>&nbsp;</p>
<p>Um bloco veloz feito um raio</p>
<p>Chamado Sou Eu Teu Amor</p>
<p>Um bloco veloz feito um raio</p>
<p>Chamado Sou Eu Teu Amor</p>
<p>&nbsp;</p>
<p>Por onde ele passa</p>
<p>Sacode alegria a vapor</p>
<p>Lim&atilde;o com cacha&ccedil;a</p>
<p>Na onda do frevo esquentou</p>
<p>L&aacute; vem!</p>
<p>&nbsp;</p>
<p>L&aacute; vem o bloco</p>
<p>&Eacute; um bloco que chega</p>
<p>&Eacute; um bloco que passa</p>
<p>&Eacute; um raio que rompe e que tra&ccedil;a</p>
<p>E a massa espanta a dor</p>
<p>L&aacute; vem</p>
<p>&nbsp;</p>
<p>L&aacute; vem um bloco</p>
<p>Chamado Sou Eu Teu Amor</p>
<p>L&aacute; vem um bloco</p>
<p>Chamado Sou Eu Teu Amor</p>

',
                'creditos' => '
<p>Arranjo de metais: Juarez Ara&uacute;jo</p>
<p>Arranjo de base: Banda Ping&uuml;im</p>
<p>Metais: Juarez Ara&uacute;jo, Mazinho, Roberto Stepheson, Toti Cavalcanti, Altair Martins, Sueli Faria e Leilo Penha</p>
<p>Violas e guitarra portuguesa: Robertinho de Recife</p>
<p>Pandeiro: Firmino</p>
<p>Vocais: Roberta Little, Lucy Louro, Val&eacute;ria Mariano e Nan&aacute;</p>
',
                'faixa_mp3' => '15_frevos.mp3',
                'faixa_ogg' => '15_frevos.ogg',
                'disco_id' => '18'));

        Musicas::create(
            array(
                'faixa' => 'Sabi&aacute;',
                'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas) cantam:<strong> Alceu Valença, Elba Ramalho, Geraldo Azevedo e Zé Ramalho</strong>',
                'letra' => '<p>A todo mundo eu dou psiu</p>
<p>Perguntando por meu bem</p>
<p>Tendo o cora&ccedil;&atilde;o vazio</p>
<p>Vivo assim a dar psiu</p>
<p>Sabi&aacute; vem c&aacute; tamb&eacute;m</p>
<p>&nbsp;</p>
<p>Tu que andas pelo mundo (sabi&aacute;)</p>
<p>Tu que tanto j&aacute; voou (sabi&aacute;)</p>
<p>Tu que cantas, passarinho (sabi&aacute;)</p>
<p>Alivia a minha dor</p>
<p>&nbsp;</p>
<p>Tem pena d&rsquo;eu (sabi&aacute;)</p>
<p>Diz por favor (sabi&aacute;)</p>
<p>Tu que cantas passarinho (sabi&aacute;)</p>
<p>Alivia a minha dor (sabi&aacute;)</p>
',
                'creditos' => '',
                'faixa_mp3' => '01_sabia.mp3',
                'faixa_ogg' => '01_sabia.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'Cora&ccedil;&atilde;o Bobo',
                'compositor' => '(Alceu Valen&ccedil;a) cantam:<strong> Alceu Valença e Zé Ramalho</strong>',
                'letra' => '<p>Meu cora&ccedil;&atilde;o t&aacute; batendo</p>
<p>Como quem diz n&atilde;o tem jeito</p>
<p>Zabumba bumba esquisito</p>
<p>Batendo dentro do peito</p>
<p>&nbsp;</p>
<p>Teu cora&ccedil;&atilde;o t&aacute; batendo</p>
<p>Como quem diz n&atilde;o tem jeito</p>
<p>O cora&ccedil;&atilde;o dos aflitos</p>
<p>Pipoca dentro do peito</p>
<p>O cora&ccedil;&atilde;o dos aflitos</p>
<p>Pipoca dentro do peito</p>
<p>&nbsp;</p>
<p>Cora&ccedil;&atilde;o bobo, cora&ccedil;&atilde;o bola</p>
<p>Cora&ccedil;&atilde;o bal&atilde;o, cora&ccedil;&atilde;o S&atilde;o Jo&atilde;o</p>
<p>A gente se ilude dizendo</p>
<p>J&aacute; n&atilde;o d&aacute; mais cora&ccedil;&atilde;o</p>

',
                'creditos' => '',
                'faixa_mp3' => '02_coracao_bobo.mp3',
                'faixa_ogg' => '02_coracao_bobo.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'Jacarepagu&aacute; Blues',
                'compositor' => '(Z&eacute; Ramalho) Canta:<strong> Alceu Valen&ccedil;a</strong>',
                'letra' => '<p>T&atilde;o indecente</p>
<p>Foi o jeito que essa mina descarada, arranhada, repulsiva</p>
<p>Me jogou de repente</p>
<p>Eu j&aacute; sabia das suas inten&ccedil;&otilde;es mal&eacute;ficas contra mim</p>
<p>Por isso me precavi com todo alho e cebola</p>
<p>Que eu consegui encontrar</p>
<p>Mas o que eu n&atilde;o sabia era que voc&ecirc; era</p>
<p>Exata e precisa nos seus movimentos</p>
<p>Por isso confesso</p>
<p>Eu t&ocirc; num terr&iacute;vel astral</p>
<p>&nbsp;</p>
<p>Minha fam&iacute;lia mandou-me um cart&atilde;o postal</p>
<p>Pois tal cart&atilde;o conseguiu me fazer chorar</p>
<p>E o reco-reco que eu brincava</p>
<p>Hein m&atilde;e a senhora me bateu</p>
<p>Porque eu troquei por um isqueiro</p>
<p>Pra poder fumar</p>
<p>Um tal neg&oacute;cio ou coisa parecida</p>
<p>Que faz bem ou mal a sa&uacute;de</p>
<p>N&atilde;o interessa m&atilde;e</p>
<p>V&aacute; perguntar ao Gabeira se voc&ecirc; pode fumar</p>
<p>&nbsp;</p>
<p>Mas o cap&iacute;tulo</p>
<p>Da novela dolorida, colorida, comovida que eu pedi pra ver</p>
<p>O personagem que encenava a contram&atilde;o do gancho</p>
<p>A oficina telep&aacute;tica me sorria como um camafeu</p>
<p>Mas o que eu n&atilde;o sabia &eacute; que essa trama toda</p>
<p>Ia cair nas costas da pessoa que vos fala e relata</p>
<p>O que aconteceu</p>
',
                'creditos' => '',
                'faixa_mp3' => '03_jacarepagua_blues.mp3',
                'faixa_ogg' => '03_jacarepagua_blues.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'Pelas Ruas que Andei',
                'compositor' => '(Alceu Valen&ccedil;a / Vicente Barreto) canta:<strong> Alceu Valen&ccedil;a</strong>',
                'letra' => '<p>Na Madalena</p>
<p>Eu revi teu nome</p>
<p>Na Boa Vista</p>
<p>Quis te encontrar</p>
<p>Rua do Sol da Boa Hora</p>
<p>Rua da Aurora</p>
<p>Vou caminhar</p>
<p>&nbsp;</p>
<p>Rua das Ninfas</p>
<p>Matriz Saudade</p>
<p>Da Soledade de quem passou</p>
<p>Rua Benfica Boa Viagem</p>
<p>Na Piedade tanta dor</p>
<p>&nbsp;</p>
<p>Pelas ruas que andei</p>
<p>Procurei, procurei, procurei</p>
<p>Te encontrar</p>
<p>Pelas ruas que andei</p>
<p>Procurei, procurei, procurei</p>
<p>Te encontrar</p>',
                'creditos' => '',
                'faixa_mp3' => '04_pelas_ruas_que_andei.mp3',
                'faixa_ogg' => '04_pelas_ruas_que_andei.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'Talism&atilde;',
                'compositor' => '(Geraldo Azevedo / AlceuValen&ccedil;a) cantam:<strong> Alceu Valença e Geraldo Azevedo</strong>',
                'letra' => '<p>Diana me d&ecirc; um talism&atilde;</p>
<p>Um talism&atilde;</p>
<p>Viajar</p>
<p>Voc&ecirc; j&aacute; pensou em mais eu viajar</p>
<p>Quando o sol desmaiar</p>
<p>Vou viajar</p>
<p>&nbsp;</p>
<p>Olha essa sombra</p>
<p>Esse rastro de mim</p>
<p>Olha essa seta</p>
<p>Essa r&eacute;stia de sol</p>
<p>Morena</p>
',
                'creditos' => '',
                'faixa_mp3' => '05_talisma.mp3',
                'faixa_ogg' => '05_talisma.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'O Ci&uacute;me',
                'compositor' => '(Caetano Veloso) canta: <strong>Geraldo Azevedo</strong>',
                'letra' => '<p>Dorme o sol &agrave; flor do Chico, meio-dia</p>
<p>Tudo esbarra embriagado de seu lume</p>
<p>Dorme ponte, Pernambuco, Rio, Bahia</p>
<p>S&oacute; vigia um ponto negro: meu ci&uacute;me</p>
<p>&nbsp;</p>
<p>O ci&uacute;me lan&ccedil;ou sua flecha preta</p>
<p>E se viu ferido justo na garganta</p>
<p>Quem nem alegre, nem triste, nem poeta</p>
<p>Entre Petrolina e Juazeiro canta</p>
<p>&nbsp;</p>
<p>Velho Chico vens de Minas</p>
<p>De onde o oculto do mist&eacute;rio se escondeu</p>
<p>Sei que o levas todo em ti</p>
<p>N&atilde;o me ensinas</p>
<p>E eu sou s&oacute; eu, s&oacute; eu s&oacute;, eu</p>
<p>&nbsp;</p>
<p>Juazeiro, nem te lembras dessa tarde</p>
<p>Petrolina, nem chegaste a perceber</p>
<p>Mas na voz que canta tudo ainda arde</p>
<p>Tudo &eacute; perda, tudo quer buscar, cad&ecirc;?</p>
<p>&nbsp;</p>
<p>Tanta gente canta</p>
<p>Tanta gente cala</p>
<p>Tantas almas esticadas no curtume</p>
<p>Sobre toda estrada, sobre toda sala</p>
<p>Paira monstruosa</p>
<p>A sombra do ci&uacute;me</p>
',
                'creditos' => '',
                'faixa_mp3' => '06_o_ciume.mp3',
                'faixa_ogg' => '06_o_ciume.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'Dia Branco',
                'compositor' => '(Geraldo Azevedo / Renato Rocha) canta:<strong> Elba Ramalho</strong>',
                'letra' => '<p>Se voc&ecirc; vier</p>
<p>Pro que der e vier</p>
<p>Comigo</p>
<p>Eu te prometo o sol</p>
<p>Se hoje o sol sair</p>
<p>Ou a chuva</p>
<p>Se a chuva cair</p>
<p>&nbsp;</p>
<p>Se voc&ecirc; vier</p>
<p>At&eacute; onde a gente chegar</p>
<p>Numa pra&ccedil;a na beira do mar</p>
<p>Num peda&ccedil;o de qualquer lugar</p>
<p>Nesse dia branco</p>
<p>&nbsp;</p>
<p>Se branco ele for</p>
<p>Esse tanto, esse canto de amor</p>
<p>Se voc&ecirc; quiser e vier</p>
<p>Pro que der e vier</p>
<p>Comigo</p>
',
                'creditos' => '',
                'faixa_mp3' => '07_dia_branco.mp3',
                'faixa_ogg' => '07_dia_branco.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'O Amanh&atilde; é Distante (Tomorrow is a long time)',
                'compositor' => '(Bob Dylan / Vers&atilde;o: Geraldo Azevedo / Babal) cantam: <strong>Geraldo Azevedo e Zé Ramalho</strong>',
                'letra' => '<p>E se hoje n&atilde;o fosse essa estrada</p>
<p>Se a noite n&atilde;o tivesse tanto atalho</p>
<p>O amanh&atilde; n&atilde;o fosse t&atilde;o distante</p>
<p>Solid&atilde;o seria nada pra voc&ecirc;</p>
<p>&nbsp;</p>
<p>Se ao menos o meu amor estivesse aqui</p>
<p>E eu pudesse ouvir seu cora&ccedil;&atilde;o</p>
<p>Se ao menos mentisse ao meu lado</p>
<p>Estaria em minha coma outra vez</p>
<p>&nbsp;</p>
<p>Meu reflexo n&atilde;o consigo ver na &aacute;gua</p>
<p>Nem fazer can&ccedil;&otilde;es sem nenhuma dor</p>
<p>Nem ouvir o eco dos meus passos</p>
<p>Nem lembrar meu nome quando algu&eacute;m chamou</p>
<p>&nbsp;</p>
<p>H&aacute; beleza no rio do meu canto</p>
<p>H&aacute; beleza em tudo o que h&aacute; no c&eacute;u</p>
<p>Por&eacute;m nada com certeza &eacute; mais bonito</p>
<p>Quando lembro dos olhos do meu bem</p>
',
                'creditos' => '',
                'faixa_mp3' => '08_o_amanha_e_distante.mp3',
                'faixa_ogg' => '08_o_amanha_e_distante.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'Admir&aacute;vel Gado Novo',
                'compositor' => '(Z&eacute; Ramalho) canta:<strong> Zé Ramalho</strong>',
                'letra' => '<p>&Ecirc;, &ocirc;, &ocirc;</p>
<p>Vida de gado</p>
<p>Povo marcado &ecirc;</p>
<p>Povo feliz</p>
<p>&nbsp;</p>
<p>&Ocirc; boi...</p>
<p>Voc&ecirc;s que fazem parte dessa massa</p>
<p>Que passa nos projetos do futuro</p>
<p>&Eacute; duro tanto ter que caminhar</p>
<p>E dar muito mais do que receber</p>
<p>&nbsp;</p>
<p>E ter que demonstrar sua coragem</p>
<p>&Agrave; margem do que possa aparecer</p>
<p>E ver que toda essa engrenagem</p>
<p>J&aacute; sente a ferrugem lhe comer</p>
<p>&nbsp;</p>
<p>L&aacute; fora faz um tempo confort&aacute;vel</p>
<p>A vigil&acirc;ncia cuida do normal</p>
<p>Os autom&oacute;veis ouvem a not&iacute;cia</p>
<p>Os homens a publicam no jornal</p>
<p>&nbsp;</p>
<p>E correm atrav&eacute;s da madrugada</p>
<p>A &uacute;nica velhice que chegou</p>
<p>Demoram-se na beira da estrada</p>
<p>E passam a contar o que sobrou</p>
<p>&nbsp;</p>
<p>O povo foge da ignor&acirc;ncia</p>
<p>Apesar de viver t&atilde;o perto dela</p>
<p>E sonham com melhores tempos idos</p>
<p>Contemplam essa vida numa cela</p>
<p>&nbsp;</p>
<p>E esperam nova possibilidade</p>
<p>De verem esse mundo se acabar</p>
<p>A Arca de No&eacute;, o dirig&iacute;vel</p>
<p>N&atilde;o voam, nem se pode flutuar</p>
<p>N&atilde;o voam, nem se pode flutuar</p>
<p>N&atilde;o voam, nem se pode flutuar</p>
',
                'creditos' => '',
                'faixa_mp3' => '09_admiravel_gado_novo.mp3',
                'faixa_ogg' => '09_admiravel_gado_novo.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'Trem das 7',
                'compositor' => '(Raul Seixas) canta:<strong> Zé Ramalho</strong>',
                'letra' => '<p>&Oacute;i, &oacute;i o trem</p>
<p>Vem surgindo de tr&aacute;s das montanhas azuis, olha o trem</p>
<p>&Oacute;i, &oacute;i o trem</p>
<p>Vem trazendo de longe as cinzas do velho &eacute;on</p>
<p>&Oacute;i, j&aacute; &eacute; vem</p>
<p>Fumegando, apitando, chamando os que sabem do trem</p>
<p>&Oacute;i, &oacute;i o trem</p>
<p>N&atilde;o precisa passagem nem mesmo bagagem no trem</p>
<p>&nbsp;</p>
<p>Quem vai chorar</p>
<p>Quem vai sorrir?</p>
<p>Quem vai ficar</p>
<p>Quem vai partir?</p>
<p>&nbsp;</p>
<p>Pois o trem est&aacute; chegando</p>
<p>T&aacute; chegando na esta&ccedil;&atilde;o</p>
<p>&Eacute; o trem das sete horas</p>
<p>&Eacute; o &uacute;ltimo do sert&atilde;o, do sert&atilde;o</p>
<p>&nbsp;</p>
<p>&Oacute;i, olhe o c&eacute;u</p>
<p>J&aacute; n&atilde;o &eacute; o mesmo c&eacute;u que voc&ecirc; conheceu, n&atilde;o &eacute; mais</p>
<p>V&ecirc;, &oacute;i que c&eacute;u</p>
<p>&Eacute; um c&eacute;u carregado, rajado, suspenso no ar</p>
<p>V&ecirc;, &eacute; o sinal</p>
<p>&Eacute; o sinal das trombetas, dos anjos e dos guardi&otilde;es</p>
<p>&Oacute;i, l&aacute; vem Deus</p>
<p>Deslizando no c&eacute;u entre brumas de mil megatons</p>
<p>&Oacute;i, olhe o mal</p>
<p>Vem de bra&ccedil;os e abra&ccedil;os com o bem num romance astral</p>
<p>Am&eacute;m</p>
',
                'creditos' => '',
                'faixa_mp3' => '10_trem_das_sete.mp3',
                'faixa_ogg' => '10_trem_das_sete.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'Ch&atilde;o de Giz',
                'compositor' => '(Raul Seixas) cantam: <strong>Elba Ramalho e Z&eacute; Ramalho</strong>',
                'letra' => '<p>Eu des&ccedil;o dessa solid&atilde;o</p>
<p>Espalho coisas sobre um ch&atilde;o de giz</p>
<p>H&aacute; meros devaneios tolos a me torturar</p>
<p>Fotografias recortadas em jornais de folhas ami&uacute;de</p>
<p>Eu vou te jogar num pano de guardar confetes</p>
<p>Eu vou te jogar num pano de guardar confetes</p>
<p>&nbsp;</p>
<p>Disparo balas de canh&atilde;o</p>
<p>&Eacute; in&uacute;til pois existe um Gr&atilde;o-Vizir</p>
<p>H&aacute; tantas violetas velhas sem um colibri</p>
<p>Queria usar, quem sabe, uma camisa de for&ccedil;a</p>
<p>Ou de V&ecirc;nus</p>
<p>Mas n&atilde;o vou gozar de n&oacute;s apenas um cigarro</p>
<p>Nem vou lhe beijar gastando assim o meu batom</p>
<p>&nbsp;</p>
<p>Agora pego um caminh&atilde;o</p>
<p>Na lona, vou a nocaute outra vez</p>
<p>Pra sempre fui acorrentada no seu calcanhar</p>
<p>Meus vinte anos de boy, that&rsquo;s over baby!</p>
<p>Freud explica</p>
<p>N&atilde;o vou me sujar fumando apenas um cigarro</p>
<p>Nem vou lhe beijar gastando assim o meu batom</p>
<p>Quanto ao pano dos confetes</p>
<p>J&aacute; passou meu carnaval</p>
<p>Isso explica porque o sexo &eacute; assunto popular</p>
<p>No mais, estou indo embora, baby</p>
<p>No mais, estou indo embora</p>
<p>No mais, embora baby, baby</p>
<p>No mais, estou indo embora, no mais...</p>

',
                'creditos' => '',
                'faixa_mp3' => '11_chao_de_giz.mp3',
                'faixa_ogg' => '11_chao_de_giz.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'Veja (Margarida)',
                'compositor' => '(Vital Farias) canta:<strong> Elba Ramalho</strong>',
                'letra' => '<p>Veja voc&ecirc;, arco-&iacute;ris j&aacute; mudou de cor</p>
<p>Uma rosa nunca mais desabrochou</p>
<p>N&atilde;o quero ver voc&ecirc;</p>
<p>Com esse gosto de sab&atilde;o na boca</p>
<p>&nbsp;</p>
<p>Arco-&iacute;ris j&aacute; mudou de cor</p>
<p>Uma rosa nunca mais desabrochou</p>
<p>N&atilde;o quero ver voc&ecirc;</p>
<p>Eu n&atilde;o quero ver</p>
<p>&nbsp;</p>
<p>Veja meu bem</p>
<p>Gasolina vai subir de pre&ccedil;o</p>
<p>Eu n&atilde;o quero nunca mais seu endere&ccedil;o</p>
<p>Ou &eacute; o come&ccedil;o do fim, ou &eacute; o fim</p>
<p>&nbsp;</p>
<p>Eu vou partir</p>
<p>Pra cidade garantida, proibida</p>
<p>Arranjar meio de vida, Margarida</p>
<p>Pra voc&ecirc; gostar de mim</p>
<p>&nbsp;</p>
<p>E essas feridas da vida, Margarida</p>
<p>Essas feridas da vida, amarga vida</p>
<p>Pra voc&ecirc; gostar... de mim</p>
',
                'creditos' => '',
                'faixa_mp3' => '12_veja_margarida.mp3',
                'faixa_ogg' => '12_veja_margarida.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'A Prosa Imp&uacute;rpura do Caic&oacute;',
                'compositor' => '(Chico C&eacute;sar) canta:<strong> Elba Ramalho</strong>',
                'letra' => '<p>Ah, Caic&oacute; arcaico</p>
<p>Em meu peito catolaico</p>
<p>Tudo &eacute; descren&ccedil;a e f&eacute;</p>
<p>Ah, Caic&oacute; arcaico</p>
<p>Meu cashcouer mallarmaico</p>
<p>Tudo rejeita e quer</p>
<p>&nbsp;</p>
<p>&Eacute; com, &eacute; sem</p>
<p>Um milh&atilde;o, um vint&eacute;m</p>
<p>Todo mundo e ningu&eacute;m</p>
<p>P&eacute; de xique-xique, p&eacute; de flor</p>
<p>&nbsp;</p>
<p>Relabucho, vel&oacute;rio</p>
<p>Videogame, orat&oacute;rio</p>
<p>High-cult, simpl&oacute;rio</p>
<p>Amor sem fim, desamor</p>
<p>&nbsp;</p>
<p>Sexo no-i&ecirc;</p>
<p>Oxente, oh shit</p>
<p>Cego Aderaldo olhando pra mim</p>
<p>Moon-walk-man</p>
',
                'creditos' => '',
                'faixa_mp3' => '13_a_prosa_impupura_do_caico.mp3',
                'faixa_ogg' => '13_a_prosa_impupura_do_caico.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'Tesoura do Desejo',
                'compositor' => '(Alceu Valen&ccedil;a) cantam:<strong> Alceu Valen&ccedil;a e Elba Ramalho</strong>',
                'letra' => '<p>Voc&ecirc; atravessando aquela rua vestida de negro</p>
<p>E eu te esperando em frente a um certo Bar Leblon</p>
<p>Voc&ecirc; se aproximando e eu morrendo de medo</p>
<p>Ali, bem mesmo em frente a um certo Bar Leblon</p>
<p>&nbsp;</p>
<p>Quando eu atravessava aquela rua morria de medo</p>
<p>De ver o teu sorriso e come&ccedil;ar um velho sonho bom</p>
<p>E o sonho, fatalmente, viraria pesadelo</p>
<p>Ali, bem mesmo em frente a um certo Bar Leblon</p>
<p>&nbsp;</p>
<p>- Vamos entrar</p>
<p>- N&atilde;o tenho tempo</p>
<p>- O que &eacute; que houve?</p>
<p>- O que &eacute; que h&aacute;?</p>
<p>- O que &eacute; que houve meu amor</p>
<p>Voc&ecirc; cortou os seus cabelos?</p>
<p>- Foi a tesoura do desejo</p>
<p>Desejo mesmo de mudar</p>
<p>&nbsp;</p>
',
                'creditos' => '',
                'faixa_mp3' => '14_tesoura_do_desejo.mp3',
                'faixa_ogg' => '14_tesoura_do_desejo.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'Chorando e Cantando',
                'compositor' => '(Geraldo Azevedo / Fausto Nilo) cantam:<strong> Elba Ramalho e Geraldo Azevedo</strong>',
                'letra' => '<p>Quando fevereiro chegar</p>
<p>Saudade j&aacute; n&atilde;o mata a gente</p>
<p>A chama continua</p>
<p>No ar</p>
<p>O fogo vai deixar semente</p>
<p>A gente ri, a gente chora</p>
<p>Ai, ai, ai, ai, a gente chora</p>
<p>Fazendo a noite parecer um dia</p>
<p>Faz mais</p>
<p>Depois faz acordar cantando</p>
<p>Pra fazer e acontecer</p>
<p>Verdades e mentiras</p>
<p>Faz crer</p>
<p>Faz desacreditar de tudo</p>
<p>E depois</p>
<p>Depois amor, &ocirc;, &ocirc;, &ocirc;, &ocirc;</p>
<p>&nbsp;</p>
<p>Ningu&eacute;m, ningu&eacute;m ver&aacute;</p>
<p>O que eu sonhei</p>
<p>S&oacute; voc&ecirc;, meu amor</p>
<p>Ningu&eacute;m ver&aacute; o sonho</p>
<p>Que eu sonhei</p>
<p>&nbsp;</p>
<p>Um sorriso quando acordar</p>
<p>Pintado pelo sol nascente</p>
<p>Eu vou te procurar</p>
<p>Na luz</p>
<p>De cada olhar mais diferente</p>
<p>Tua chama me ilumina</p>
<p>Me faz</p>
<p>Virar um astro incandescente</p>
<p>Teu amor faz cometer loucuras</p>
<p>Faz mais</p>
<p>Depois faz acordar chorando</p>
<p>Pra fazer e acontecer</p>
<p>Verdades e mentiras</p>
<p>Faz crer</p>
<p>Faz desacreditar de tudo</p>
<p>E depois</p>
<p>Depois amor, amor, amor</p>
',
                'creditos' => '',
                'faixa_mp3' => '15_chorando_e_cantando.mp3',
                'faixa_ogg' => '15_chorando_e_cantando.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'Banho de Cheiro',
                'compositor' => '(Carlos Fernando) canta:<strong> Elba Ramalho</strong>',
                'letra' => '<p>Eu quero um banho de cheiro</p>
<p>Eu quero um banho de lua</p>
<p>Eu quero navegar</p>
<p>Eu quero uma menina</p>
<p>Que me ensine noite e dia</p>
<p>O valor do b&ecirc;-a-b&aacute;</p>
<p>&nbsp;</p>
<p>O b&ecirc;-a-b&aacute; dos teus olhos</p>
<p>Morena bonita da Boca do Rio</p>
<p>O b&ecirc;-a-b&aacute; das narinas do rei</p>
<p>O b&ecirc;-a-b&aacute; da Bahia</p>
<p>Sangrando alegria, magia, magia</p>
<p>Nos Filhos de Gandhi</p>
<p>&nbsp;</p>
<p>O b&ecirc;-a-b&aacute; dos baianos</p>
<p>Que charme bonito, foi o santo que deu</p>
<p>O b&ecirc;-a-b&aacute; do Senhor do Bonfim</p>
<p>O b&ecirc;-a-b&aacute; do sert&atilde;o</p>
<p>Sem chover, sem colher</p>
<p>Sem comer, sem lazer</p>
<p>O b&ecirc;-a-b&aacute; do Brasil</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Frevo mulher</strong></p>
<p>(Z&eacute; Ramalho)</p>
<p>cantam:<strong> Alceu Valen&ccedil;a, Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</strong></p>
<hr class="space-letra-top-musicas">
<p>Quantos aqui ouvem os olhos eram de f&eacute;</p>
<p>Quantos elementos amam aquela mulher</p>
<p>Quantos homens eram inverno, outros ver&atilde;o</p>
<p>Outonos caindo secos no solo da minha m&atilde;o</p>
<p>&nbsp;</p>
<p>Gemeram entre cabe&ccedil;as a ponta do espor&atilde;o</p>
<p>A folha do n&atilde;o me toque e o medo da solid&atilde;o</p>
<p>Veneno meu companheiro desatado cantador</p>
<p>E desemboca no primeiro a&ccedil;ude do meu amor</p>
<p>&nbsp;</p>
<p>&Eacute; quando o tempo sacode a cabeleira</p>
<p>A tran&ccedil;a toda vermelha</p>
<p>Um olho cego vagueia</p>
<p>Procurando por um</p>
<p>&nbsp;</p>

',
                'creditos' => '',
                'faixa_mp3' => '16_banho_de_cheiro_frevo_mulher.mp3',
                'faixa_ogg' => '16_banho_de_cheiro_frevo_mulher.ogg',
                'disco_id' => '19'));

        Musicas::create(
            array(
                'faixa' => 'Baioque',
                'compositor' => '(Chico Buarque)',
                'letra' => '<p>Quando eu canto que se cuide</p>
<p>Quem n&atilde;o for meu irm&atilde;o</p>
<p>O meu canto, punhalada</p>
<p>N&atilde;o conhece o perd&atilde;o</p>
<p>&nbsp;</p>
<p>Quando eu rio</p>
<p>Quando eu rio, rio seco</p>
<p>Como &eacute; seco o sert&atilde;o</p>
<p>Meu sorriso &eacute; uma fenda</p>
<p>Escavada no ch&atilde;o</p>
<p>&nbsp;</p>
<p>Quando eu choro</p>
<p>Quando choro &eacute; uma enchente</p>
<p>Surpreendendo o ver&atilde;o</p>
<p>&Eacute; o inverno, de repente</p>
<p>Inundando sert&atilde;o</p>
<p>&nbsp;</p>
<p>Quando eu amo</p>
<p>Quando amo, eu devoro</p>
<p>Todo o meu cora&ccedil;&atilde;o</p>
<p>Eu odeio, eu adoro</p>
<p>Numa mesma ora&ccedil;&atilde;o</p>
<p>Quando canto</p>
<p>&nbsp;</p>
<p>Mammy, n&atilde;o quero seguir definhando sol a sol</p>
<p>Me leva daqui, eu quero partir</p>
<p>Requebrando um rock&rsquo;n&rsquo;roll</p>
<p>N&atilde;o quero saber como se dan&ccedil;a o bai&atilde;o</p>
<p>Eu quero ligar, eu quero um lugar</p>
<p>No sol de Ipanema, cinema e televis&atilde;o</p>

',
                'creditos' => '
<p>Arranjo: Z&eacute; Ramalho</p>
<p>Bateria: Renato &ldquo;Massa&rdquo;</p>
<p>Baixo: Jacar&eacute;</p>
<p>Acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
<p>Guitarra: Robertinho de Recife</p>
',
                'faixa_mp3' => '01_baioque.mp3',
                'faixa_ogg' => '01_baioque.ogg',
                'disco_id' => '20'));
        Musicas::create(
            array(
                'faixa' => 'Pav&atilde;o Mysteriozo',
                'compositor' => '(Ednardo)',
                'letra' => '<p>Pav&atilde;o mysteriozo</p>
<p>P&aacute;ssaro formoso</p>
<p>Tudo &eacute; mist&eacute;rio</p>
<p>Nesse teu voar</p>
<p>Ai, se eu corresse assim</p>
<p>Tantos c&eacute;us assim</p>
<p>Muita hist&oacute;ria eu tinha pra contar</p>
<p>&nbsp;</p>
<p>Pav&atilde;o mysteriozo</p>
<p>Nessa cauda aberta em leque</p>
<p>Me guarda moleque</p>
<p>De eterno brincar</p>
<p>Me poupa do vexame</p>
<p>De morrer t&atilde;o mo&ccedil;o</p>
<p>Muita coisa ainda quero olhar</p>
<p>&nbsp;</p>
<p>Pav&atilde;o mysteriozo</p>
<p>P&aacute;ssaro formoso</p>
<p>No escuro dessa noite</p>
<p>Me ajuda a cantar</p>
<p>Derrama essas fa&iacute;scas</p>
<p>Despeja esse trov&atilde;o</p>
<p>Desmancha isso tudo</p>
<p>Que n&atilde;o &eacute; certo n&atilde;o</p>
<p>&nbsp;</p>
<p>Pav&atilde;o mysteriozo</p>
<p>P&aacute;ssaro formoso</p>
<p>Um conde raivoso</p>
<p>N&atilde;o tarda a chegar</p>
<p>N&atilde;o temas minha donzela</p>
<p>Nossa sorte nessa guerra</p>
<p>Eles s&atilde;o muitos</p>
<p>Mas n&atilde;o podem voar</p>
',
                'creditos' => '
<p>Arranjo e acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Renato &ldquo;Massa&rdquo;</p>
<p>Baixo: Jacar&eacute;</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Trompete: Chico Oliveira</p>
<p>Sax: David Ganc</p>
<p>Guitarra: Marcos Arcanjo</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
<p>Viola de 12 cordas: Robertinho de Recife</p>
<p>Vocais: Lucia Perez, Tadeu Mathias, Fabio Mondego e Roberta Little</p>
',
                'faixa_mp3' => '02_pavao_mysterioso.mp3',
                'faixa_ogg' => '02_pavao_mysterioso.ogg',
                'disco_id' => '20'));

        Musicas::create(
            array(
                'faixa' => 'S. O. S.',
                'compositor' => '(Raul Seixas)',
                'letra' => '<p>Hoje &eacute; domingo</p>
<p>Missa e praia, c&eacute;u de anil, tem sangue no jornal</p>
<p>Bandeira na avenidasil</p>
<p>L&aacute; por detr&aacute;s da triste linda zona sul</p>
<p>Vai tudo muito bem</p>
<p>Formigas que trafegam sem por qu&ecirc;</p>
<p>E da janela desses quartos de pens&atilde;o</p>
<p>Eu, como vetor</p>
<p>Tranq&uuml;ilo eu tento uma transmuta&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>&Ocirc;, &ocirc; seu mo&ccedil;o</p>
<p>Do disco voador</p>
<p>Me leve com voc&ecirc;</p>
<p>Pra onde voc&ecirc; for</p>
<p>&nbsp;</p>
<p>&Ocirc;, &ocirc; seu mo&ccedil;o</p>
<p>Mas n&atilde;o me deixe aqui</p>
<p>Enquanto eu sei que tem</p>
<p>Tanta estrela por a&iacute;</p>
<p>&nbsp;</p>
<p>Andei rezando para totens e Jesus</p>
<p>Jamais olhei pro c&eacute;u</p>
<p>Meu disco voador, al&eacute;m</p>
<p>J&aacute; fui macaco em domingos glaciais</p>
<p>Atlantas colossais</p>
<p>E eu n&atilde;o soube como utilizar</p>
<p>E nas mensagens que nos chegam sem parar</p>
<p>Ningu&eacute;m pode notar</p>
<p>Est&atilde;o muito ocupados pra pensar</p>
<p>&nbsp;</p>
<p><em>Pai nosso, que estais nos c&eacute;us</em></p>
<p><em>Santificado seja o Vosso nome</em></p>
<p><em>Venha a n&oacute;s o Vosso reino</em></p>
<p><em>Seja feita a Vossa vontade</em></p>
<p><em>Assim na terra como no c&eacute;u</em></p>
<p><em>O p&atilde;o nosso de cada dia nos dai hoje</em></p>
<p><em>Perdoai as nossas ofensas</em></p>
<p><em>Assim como n&oacute;s perdoamos a quem nos tem ofendido</em></p>
<p><em>N&atilde;o nos deixeis cair em tenta&ccedil;&atilde;o</em></p>
<p><em>Mas livrai-nos do mal</em></p>
<p><em>Amem.</em></p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Ramalho</p>
<p>Arranjo de detalhes e guitarras: Robertinho de Recife</p>
<p>Bateria: Renato &ldquo;Massa&rdquo;</p>
<p>Baixo: Jacar&eacute;</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Violino: Paul de Castro</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
',
                'faixa_mp3' => '03_sos.mp3',
                'faixa_ogg' => '03_sos.ogg',
                'disco_id' => '20'));

        Musicas::create(
            array(
                'faixa' => 'Paralelas',
                'compositor' => '(Belchior)',
                'letra' => '<p>Dentro do carro</p>
<p>Sobre o trevo</p>
<p>A cem por hora</p>
<p>&Oacute; meu amor</p>
<p>S&oacute; tens agora os carinhos do motor</p>
<p>E no escrit&oacute;rio em que eu trabalho</p>
<p>E fico rico</p>
<p>Quanto mais eu multiplico</p>
<p>Diminui o meu amor</p>
<p>&nbsp;</p>
<p>Em cada luz de merc&uacute;rio</p>
<p>Vejo a luz do teu olhar</p>
<p>Passa as pra&ccedil;as, viadutos</p>
<p>Nem te lembras de voltar</p>
<p>De voltar, de voltar</p>
<p>&nbsp;</p>
<p>No Corcovado</p>
<p>Quem abre os bra&ccedil;os sou eu</p>
<p>Copacabana</p>
<p>Esta semana o mar sou eu</p>
<p>Como &eacute; perversa a juventude</p>
<p>Do meu cora&ccedil;&atilde;o</p>
<p>E s&oacute; entende o que &eacute; cruel</p>
<p>O que &eacute; paix&atilde;o</p>
<p>&nbsp;</p>
<p>E as paralelas</p>
<p>Dos pneus na &aacute;gua das ruas</p>
<p>S&atilde;o duas estradas nuas</p>
<p>Em que foges do que &eacute; teu</p>
<p>No apartamento, oitavo andar</p>
<p>Abro a vidra&ccedil;a e grito quando o carro passa</p>
<p>Teu infinito sou eu</p>
<p>Sou eu, sou eu, sou eu</p>

',
                'creditos' => '
<p>Arranjo e viol&atilde;o: Paulinho Moska</p>
<p>Bateria: Renato &ldquo;Massa&rdquo;</p>
<p>Baixo: Jacar&eacute;</p>
<p>Guitarra: Robertinho de Recife</p>
<p>Teclados e arranjo de cordas: Luiz Ant&ocirc;nio</p>
<p>Cordas: Leo Ortiz, Glauco Fernandes, Jesu&iacute;na Passarotto, Eduardo Pereira e Hugo Pilger</p>

',
                'faixa_mp3' => '04_paralelas.mp3',
                'faixa_ogg' => '04_paralelas.ogg',
                'disco_id' => '20'));

        Musicas::create(
            array(
                'faixa' => 'Vila do Sossego',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>Oh, eu n&atilde;o sei se eram os antigos que diziam</p>
<p>Em seus papiros Papillon j&aacute; me dizia</p>
<p>Que nas torturas toda carne se trai</p>
<p>E normalmente, comumente, fatalmente, felizmente</p>
<p>Displicentemente o nervo se contrai</p>
<p>&Ocirc;, &ocirc;, &ocirc;... com precis&atilde;o</p>
<p>&nbsp;</p>
<p>Nos avi&otilde;es que vomitavam p&aacute;ra-quedas</p>
<p>Nas casamatas, casas vivas, caso morras</p>
<p>Nos del&iacute;rios meus grilos temer</p>
<p>O casamento, rompimento, sacramento, documento</p>
<p>Como um passatempo quero mais te ver</p>
<p>&Ocirc;, &ocirc;, &ocirc;... com afli&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Meu treponema n&atilde;o &eacute; p&aacute;lido nem viscoso</p>
<p>Os meus gametas se agrupam no meu som</p>
<p>E as querubinas meninas rever</p>
<p>O compromisso, submisso, rebuli&ccedil;o no corti&ccedil;o</p>
<p>Chamo o Padre C&iacute;cero para me benzer</p>
<p>&Ocirc;, &ocirc;, &ocirc;... com devo&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Ramalho</p>
<p>Guitarras: Robertinho de Recife</p>
<p>Bateria: Renato &ldquo;Massa&rdquo;</p>
<p>Baixo: Jacar&eacute;</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
',
                'faixa_mp3' => '05_vila_do_sossego.mp3',
                'faixa_ogg' => '05_vila_do_sossego.ogg',
                'disco_id' => '20'));

        Musicas::create(
            array(
                'faixa' => 'Vamos Fugir',
                'compositor' => '(Gilberto Gil / Liminha)',
                'letra' => '<p>Vamos fugir</p>
<p>Desse lugar, baby</p>
<p>Vamos fugir</p>
<p>T&ocirc; cansada de esperar</p>
<p>Que voc&ecirc; me carregue</p>
<p>&nbsp;</p>
<p>Vamos fugir</p>
<p>Pra outro lugar, baby</p>
<p>Vamos fugir</p>
<p>Pra onde quer que voc&ecirc; v&aacute;</p>
<p>Que voc&ecirc; me carregue</p>
<p>&nbsp;</p>
<p>Mas diga que ir&aacute;</p>
<p>Iraj&aacute;, Iraj&aacute;</p>
<p>Pra onde o sol beijar voc&ecirc;</p>
<p>Voc&ecirc; beijar o sol</p>
<p>Maraj&oacute;, Maraj&oacute;</p>
<p>Qualquer outro lugar comum</p>
<p>Outro lugar qualquer</p>
<p>Guapor&eacute;, Guapor&eacute;</p>
<p>Qualquer outro lugar ao sol</p>
<p>Outro lugar ao sul</p>
<p>C&eacute;u azul, c&eacute;u azul</p>
<p>Onde haja sol</p>
<p>Meu corpo nu junto ao seu corpo nu</p>
<p>&nbsp;</p>
<p>Vamos fugir</p>
<p>Pra outro lugar, baby</p>
<p>Vamos fugir</p>
<p>Pra onde haja um tobog&atilde;</p>
<p>Onde a gente escorregue</p>
<p>Todo dia de manh&atilde;</p>
<p>Flores que a gente regue</p>
<p>Uma banda de ma&ccedil;&atilde;</p>
<p>Outra banda de reggae</p>
<p>T&ocirc; cansada de esperar</p>
<p>Que voc&ecirc; me carregue</p>

',
                'creditos' => '
<p>Arranjo: Banda Elba Ramalho</p>
<p>Bateria: Renato &ldquo;Massa&rdquo;</p>
<p>Baixo: Jacar&eacute;</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Trompete: Chico Oliveira</p>
<p>Sax: David Ganc</p>
<p>Guitarra: Marcos Arcanjo</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
<p>Vocais: Lucia Perez, Tadeu Mathias, Fabio Mondego e Roberta Little</p>
',
                'faixa_mp3' => '06_vamos_fugir.mp3',
                'faixa_ogg' => '06_vamos_fugir.ogg',
                'disco_id' => '20'));

        Musicas::create(
            array(
                'faixa' => 'Zanzibar',
                'compositor' => '(Armandinho / Fausto Nilo)',
                'letra' => '<p>No azul de Jezebel</p>
<p>No c&eacute;u de Calcut&aacute;</p>
<p>Feliz constela&ccedil;&atilde;o</p>
<p>Reluz no corpo dela</p>
<p>Ai tricolor colar</p>
<p>&nbsp;</p>
<p>&Aacute;s de maracatu</p>
<p>No azul de Zanzibar</p>
<p>Ali meu cora&ccedil;&atilde;o</p>
<p>Zumbiu no gozo dela</p>
<p>Ai, mina aperta a minha m&atilde;o</p>
<p>Al&aacute; meu only you</p>
<p>No azul da estrela</p>
<p>Ai, mina aperta a minha m&atilde;o</p>
<p>Al&aacute; meu only you</p>
<p>No azul da estrela</p>
<p>&nbsp;</p>
<p>Ali&aacute;s</p>
<p>Bazar da coisa azul</p>
<p>Meu only you</p>
<p>&Eacute; muito mais</p>
<p>Que o azul de Zanzibar</p>
<p>Paracuru</p>
<p>O azul da estrela</p>
<p>O azul da estrela</p>
',
                'creditos' => '
<p>Arranjo: Armandinho e Robertinho de Recife</p>
<p>Guitarra: Luiz Brasil</p>
<p>Percuss&atilde;o: Mingo Ara&uacute;jo</p>
<p>Bandolim: Armandinho</p>
<p>Baixo: Dadi</p>
',
                'faixa_mp3' => '07_zanzibar.mp3',
                'faixa_ogg' => '07_zanzibar.ogg',
                'disco_id' => '20'));

        Musicas::create(
            array(
                'faixa' => 'Os Argonautas',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>O barco, meu cora&ccedil;&atilde;o n&atilde;o ag&uuml;enta</p>
<p>Tanta tormenta, alegria</p>
<p>Meu cora&ccedil;&atilde;o n&atilde;o contenta</p>
<p>O dia, o marco, meu cora&ccedil;&atilde;o</p>
<p>O porto, n&atilde;o</p>
<p>&nbsp;</p>
<p>Navegar &eacute; preciso</p>
<p>Viver n&atilde;o &eacute; preciso</p>
<p>Navegar &eacute; preciso</p>
<p>Viver n&atilde;o &eacute; preciso</p>
<p>&nbsp;</p>
<p>O barco, noite no c&eacute;u t&atilde;o bonito</p>
<p>Sorriso solto, perdido</p>
<p>Horizonte, madrugada</p>
<p>O riso, o arco da madrugada</p>
<p>O porto, nada</p>
<p>&nbsp;</p>
<p>O barco, o autom&oacute;vel brilhante</p>
<p>O trilho solto, o barulho</p>
<p>Do meu dente em tua veia</p>
<p>O sangue, o charco, barulho lento</p>
<p>O porto, sil&ecirc;ncio</p>
',
                'creditos' => '
<p>Arranjo: Armandinho, Luiz Brasil, Robertinho de Recife, Elba Ramalho e Pepeu Gomes</p>
<p>Guitarra portuguesa: Robertinho de Recife</p>
<p>Bandolim: Armandinho</p>
<p>Viola: Pepeu Gomes</p>
<p>Vil&atilde;o: Luiz Brasil</p>

',
                'faixa_mp3' => '08_os_argonautas.mp3',
                'faixa_ogg' => '08_os_argonautas.ogg',
                'disco_id' => '20'));

        Musicas::create(
            array(
                'faixa' => 'Relampiano',
                'compositor' => '(Lenine / Moska)',
                'letra' => '<p>T&aacute; relampiano, cad&ecirc; nen&eacute;m?</p>
<p>T&aacute; vendendo drops no sinal pra algu&eacute;m</p>
<p>T&aacute; relampiano, cad&ecirc; nen&eacute;m?</p>
<p>T&aacute; vendendo drops no sinal pra algu&eacute;m</p>
<p>T&aacute; vendendo drops no sinal, ningu&eacute;m</p>
<p>&nbsp;</p>
<p>Todo dia &eacute; dia, toda hora &eacute; hora</p>
<p>Nen&eacute;m n&atilde;o demora pra se levantar</p>
<p>M&atilde;e lavando roupa, pai j&aacute; foi embora</p>
<p>O ca&ccedil;ula chora, mas h&aacute; de se acostumar</p>
<p>Com vida l&aacute; de fora do barraco</p>
<p>Hay que endurecer um cora&ccedil;&atilde;o t&atilde;o fraco</p>
<p>Para vencer o medo do trov&atilde;o</p>
<p>Sua vida aponta a contram&atilde;o</p>
<p>&nbsp;</p>
<p>Tudo &eacute; t&atilde;o normal, todo tal e qual</p>
<p>Nen&eacute;m n&atilde;o tem hora para ir se deitar</p>
<p>M&atilde;e passando roupa do pai de agora</p>
<p>De um outro ca&ccedil;ula que inda vai chegar</p>
<p>&Eacute; mais uma boca dentro do barraco</p>
<p>Mais um quilo de farinha do mesmo saco</p>
<p>Para alimentar um novo Jo&atilde;o Ningu&eacute;m</p>
<p>A cidade cresce junto com nen&eacute;m</p>
',
                'creditos' => '
<p>Arranjo e viol&atilde;o: Lenine</p>
<p>Bateria: Renato &ldquo;Massa&rdquo;</p>
<p>Baixo: Jacar&eacute;</p>
<p>Acordeom: Dominguinhos</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
',
                'faixa_mp3' => '09_relampiano.mp3',
                'faixa_ogg' => '09_relampiano.ogg',
                'disco_id' => '20'));

        Musicas::create(
            array(
                'faixa' => ' Quando Chega o Ver&atilde;o',
                'compositor' => '(Dominguinhos / Abel Silva)',
                'letra' => '<p>Quando chega o ver&atilde;o</p>
<p>&Eacute; um desassossego por dentro do cora&ccedil;&atilde;o</p>
<p>Quem ama, sofre</p>
<p>Quem n&atilde;o ama, sofre mais</p>
<p>Sofre a menina, sofre o rapaz</p>
<p>Sofre a menina, sofre o rapaz</p>
<p>Sofre a menina, sofre o rapaz</p>
<p>Sofre a menina, sofre o rapaz</p>
<p>&nbsp;</p>
<p>Can&aacute;rio que muda a pena, d&oacute;i</p>
<p>Amor que muda de penas, d&oacute;i</p>
<p>Can&aacute;rio que muda a pena, d&oacute;i</p>
<p>Amor que muda de penas, d&oacute;i</p>
<p>&nbsp;</p>
<p>E tome xote Mariquinha</p>
<p>E tome xote S&aacute; Menina</p>
<p>E tome xote</p>
<p>E tome mais</p>
<p>E tome xote Mariquinha</p>
<p>E tome xote S&aacute; Menina</p>
<p>E tome xote</p>
<p>E tome mais</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>At&eacute; mais v&ecirc;</strong></p>
<p>(Pedrinho / Primo)</p>
<hr class="space-letra-top-musicas">
<p>Se eu morasse aqui pertinho, nega</p>
<p>Todo dia eu vinha te ver</p>
<p>Te trazia um par de cheiro, nega</p>
<p>Pra derramar em voc&ecirc;</p>
<p>&nbsp;</p>
<p>Veste teu vestido, nega</p>
<p>Vamos antes de chover</p>
<p>Bota o teu vestido logo, nega</p>
<p>Se tirar me d&aacute; prazer</p>
<p>&nbsp;</p>
<p>Quando chego no riacho</p>
<p>Vou metendo a m&atilde;o por baixo</p>
<p>E arrancando um girassol</p>
<p>E cantando um belo xote</p>
<p>Dando beijo no cangote</p>
<p>Por debaixo do len&ccedil;ol</p>
<p>&nbsp;</p>
<p>L&aacute; se foi a lua cheia</p>
<p>J&aacute; &eacute; meia noite meia</p>
<p>At&eacute; logo at&eacute; mais ver</p>
<p>Se eu morasse aqui pertinho, nega</p>
<p>Todo dia eu vinha te ver</p>
<p>Se eu morasse aqui pertinho, nega</p>
<p>Todo dia eu vinha te ver</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Pequenininha</strong></p>
<p>(Assis&atilde;o)</p>
<hr class="space-letra-top-musicas">
<p>Quando a gente tem amor</p>
<p>N&atilde;o sabe onde ele est&aacute;</p>
<p>&Eacute; uma saudade imensa</p>
<p>A gente se ag&uuml;enta</p>
<p>E n&atilde;o quer chorar</p>
<p>&nbsp;</p>
<p>Tem d&oacute; pequenininha</p>
<p>Tem d&oacute; pequenininha</p>
<p>Tem d&oacute;</p>
<p>Eu n&atilde;o quero chorar</p>
<p>&nbsp;</p>
<p>Mas quando a gente se v&ecirc;</p>
<p>&Eacute; uma alegria sem fim</p>
<p>A gente pega a saudade</p>
<p>E manda ao longe assim</p>

',
                'creditos' => '
<p>Arranjo: Luiz Ant&ocirc;nio e Dominguinhos</p>
<p>Bateria: Renato &ldquo;Massa&rdquo;</p>
<p>Baixo: Jacar&eacute;</p>
<p>Acordeom: Dominguinhos</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Guitarra: Marcos Arcanjo</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
<p>Vocais: Lucia Perez, Tadeu Mathias, Fabio Mondego e Roberta Little</p>
',
                'faixa_mp3' => '10_xotes_quando_chega.mp3',
                'faixa_ogg' => '10_xotes_quando_chega.ogg',
                'disco_id' => '20'));

        Musicas::create(
            array(
                'faixa' => 'A M&uacute;sica do Nosso Amor',
                'compositor' => '(Saul Barbosa / Jorge Portugal)',
                'letra' => '<p>Luar de lua serena</p>
<p>C&eacute;u de fogo iluminado</p>
<p>Estrela de tanto brilho</p>
<p>Fogueira assando milho</p>
<p>Milho parecendo fogo</p>
<p>&nbsp;</p>
<p>A cidade era pequena</p>
<p>Mas no cora&ccedil;&atilde;o cabia</p>
<p>O tamanho da alegria</p>
<p>Que a gente traduzia</p>
<p>Como a m&uacute;sica do nosso amor</p>
<p>&nbsp;</p>
<p>Luar de lua serena</p>
<p>Arrai&aacute; iluminado</p>
<p>O forr&oacute; comendo quente</p>
<p>Marin&ecirc;s e sua gente</p>
<p>Luiz Gonzaga a cantar</p>
<p>&nbsp;</p>
<p>No cora&ccedil;&atilde;o da pequena</p>
<p>O primeiro amor batia</p>
<p>A primeira brasa ardia</p>
<p>Da fogueira poesia</p>
<p>Era s&oacute; o S&atilde;o Jo&atilde;o chegar</p>
<p>&nbsp;</p>
<p>Pula fogueira i&aacute;</p>
<p>Que eu pulo sim senhor</p>
<p>Pula fogueira i&aacute;</p>
<p>Que S&atilde;o Jo&atilde;o mandou</p>
<p>&Eacute; brincadeira</p>
<p>Bal&atilde;o, beijo de biju, bal&atilde;o</p>
<p>Ainda acendo</p>
<p>Uma fogueira no meu cora&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo e teclados: Luiz Ant&ocirc;nio</p>
<p>Bateria: Renato &ldquo;Massa&rdquo;</p>
<p>Baixo: Jacar&eacute;</p>
<p>Acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Guitarras: Marcos Arcanjo e Robertinho de Recife</p>
<p>Vocais: Lucia Perez, Tadeu Mathias, Fabio Mondego e Roberta Little</p>

',
                'faixa_mp3' => '11_a_musica_do_nosso_amor.mp3',
                'faixa_ogg' => '11_a_musica_do_nosso_amor.ogg',
                'disco_id' => '20'));

        Musicas::create(
            array(
                'faixa' => 'Ciranda da Rosa Vermelha',
                'compositor' => '(folclore / adapta&ccedil;&atilde;o: Alceu Valen&ccedil;a)',
                'letra' => '<p>Teu beijo doce tem sabor do mel da cana</p>
<p>Sou tua ama, tua escrava, teu amor</p>
<p>Sou tua cama, teu engenho, teu moinho</p>
<p>Tu &eacute;s feito um passarinho</p>
<p>Que se chama beija-flor</p>
<p>Sou tua cama, teu engenho, teu moinho</p>
<p>Tu &eacute;s feito um passarinho</p>
<p>Que se chama beija-flor</p>
<p>&nbsp;</p>
<p>Sou rosa vermelha</p>
<p>Ai meu bem querer</p>
<p>Beija-flor sou tua rosa</p>
<p>Hei de amar-te at&eacute; morrer</p>
<p>&nbsp;</p>
<p>Quando tu voas pra beijar as outras flores</p>
<p>Eu sinto dores, um ci&uacute;me, um calor</p>
<p>Que toma o peito, o meu corpo</p>
<p>E invade a alma</p>
<p>S&oacute; meu beija-flor acalma</p>
<p>Tua escrava, meu senhor</p>
<p>Que toma o peito, o meu corpo</p>
<p>E invade a alma</p>
<p>S&oacute; meu beija-flor acalma</p>
<p>Tua escrava, meu senhor</p>
',
                'creditos' => '
<p>Arranjo: Julinho Teixeira</p>
<p>Bateria: Robert Lyy</p>
<p>Percuss&atilde;o: Renato Ladeira e Paulinho He-Man</p>
<p>Viol&atilde;o e guitarra portuguesa: Robertinho de Recife</p>
<p>Vocais: Jurema C&acirc;ndia, Clarice, Marisa Fossa e Sara Nicoleh</p>
',
                'faixa_mp3' => '12_ciranda_da_rosa_vermelha.mp3',
                'faixa_ogg' => '12_ciranda_da_rosa_vermelha.ogg',
                'disco_id' => '20'));

        Musicas::create(
            array(
                'faixa' => 'Tambor do Mundo',
                'compositor' => '(Geraldo Azevedo / Fausto Nilo)',
                'letra' => '<p>Bombo de zabumba</p>
<p>Cora&ccedil;&atilde;o do forr&oacute;</p>
<p>Bateu no tambor do mundo</p>
<p>Eu dan&ccedil;o a noite inteira</p>
<p>Na ilha de Cuba</p>
<p>Ou no sert&atilde;o de Ic&oacute;</p>
<p>Tem coco quebrando tudo</p>
<p>Que levanta poeira</p>
<p>&Eacute; a nossa alegria</p>
<p>Senhoras e senhores</p>
<p>&nbsp;</p>
<p>No mar da China</p>
<p>No azul da cordilheira</p>
<p>Ou em Madagascar</p>
<p>Toda a mo&ccedil;ada vai querer</p>
<p>L&aacute; em Campina</p>
<p>Ou no baile de Madureira</p>
<p>Se a sanfona tocar</p>
<p>A madrugada vai tremer</p>
<p>Vai todo mundo brincar</p>
<p>&nbsp;</p>
<p>Eu quero ver tu remexer</p>
<p>No resfolego da sanfona at&eacute; o sol raiar</p>
<p>Eu quero ver tu remexer</p>
<p>No resfolego da sanfona at&eacute; o sol raiar</p>
<p>&nbsp;</p>
<p>Hoje eu sou rumbeira</p>
<p>Amanh&atilde; que ser&aacute;?</p>
<p>&Ocirc; mana, vamos pra vida</p>
<p>Que chorar n&atilde;o serve</p>
<p>L&aacute; no fim do mundo</p>
<p>Onde o tambor batucar</p>
<p>&Eacute; a nossa alegria</p>
<p>Senhoras e senhores</p>
<p>&nbsp;</p>
<p>J&aacute; fui Diana</p>
<p>Fui pastora e feiticeira</p>
<p>Fui sereia do mar</p>
<p>Apaixonada por viver</p>
<p>Na caravana</p>
<p>Fui cigana, fui princesa</p>
<p>Mas quando eu te encontrar</p>
<p>A madrugada vai tremer</p>
<p>Vai todo mundo brincar</p>
',
                'creditos' => '
<s><p>Arranjo e acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Renato &ldquo;Massa&rdquo;</p>
<p>Baixo: Jacar&eacute;</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Trombone: Aldivas Ayres</p>
<p>Trompete: Chico Oliveira</p>
<p>Sax: David Ganc</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
',
                'faixa_mp3' => '13_tambor_do_mundo.mp3',
                'faixa_ogg' => '13_tambor_do_mundo.ogg',
                'disco_id' => '20'));

        Musicas::create(
            array(
                'faixa' => 'Eu Tamb&eacute;m Quero Beijar',
                'compositor' => '(Moraes Moreira / Pepeu Gomes / Fausto Nilo)',
                'letra' => '<p>A flor do desejo e do maracuj&aacute;</p>
<p>Eu tamb&eacute;m quero beijar</p>
<p>Haja fogo, haja guerra, haja a guerra que h&aacute;</p>
<p>Eu tamb&eacute;m quero beijar</p>
<p>Do Farol da Barra ao Jardim de Al&aacute;</p>
<p>Eu tamb&eacute;m quero beijar</p>
<p>Da pele morena daquela acol&aacute;</p>
<p>Eu tamb&eacute;m quero beijar</p>
<p>&nbsp;</p>
<p>Beijo a flor</p>
<p>Mas a flor que eu desejo eu n&atilde;o posso beijar</p>
<p>Ai amor</p>
<p>Haja fogo, haja guerra, haja a guerra que h&aacute;</p>
<p>Teu cheiro</p>
<p>&Eacute; o marinheiro do barco fantasma que vai me levar</p>
<p>Mundo inteiro</p>
<p>Haja fogo, haja guerra, haja a guerra que h&aacute;</p>
<p>Festejo</p>
<p>&nbsp;</p>
<p><strong>Ch&atilde;o da pra&ccedil;a</strong></p>
<p>(Moraes Moreira / Fausto Nilo)</p>
<hr class="space-letra-top-musicas">
<p>Meu amor</p>
<p>Quem ficou nessa dan&ccedil;a, meu amor</p>
<p>Tem f&eacute; na dan&ccedil;a</p>
<p>Nossa dor, meu amor</p>
<p>&Eacute; que balan&ccedil;a a nossa dor</p>
<p>O ch&atilde;o da pra&ccedil;a</p>
<p>&nbsp;</p>
<p>V&ecirc; que j&aacute; detonou o som na pra&ccedil;a</p>
<p>Porque j&aacute; todo o pranto rolou</p>
<p>Olhos negros, cru&eacute;is, tentadores</p>
<p>Das multid&otilde;es sem cantor</p>
<p>Olhos negros, cru&eacute;is, tentadores</p>
<p>Das multid&otilde;es sem cantor</p>
<p>&nbsp;</p>
<p>Eu era menino, menino</p>
<p>Um bedu&iacute;no com ouvido de mercador</p>
<p>L&aacute; no oriente tem gente</p>
<p>Com olhar de lan&ccedil;a na dan&ccedil;a do meu amor</p>
<p>Tem que dan&ccedil;ar a dan&ccedil;a</p>
<p>Que a nossa dor</p>
<p>Balan&ccedil;a o ch&atilde;o da pra&ccedil;a</p>
<p>Ouou&ocirc;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Gemedeira</strong></p>
<p>(Robertinho de Recife / Capinan)</p>
<hr class="space-letra-top-musicas">
<p>Tava eu mirando a lua</p>
<p>Veio a mo&ccedil;a me olhar</p>
<p>Perguntei se era nova</p>
<p>N&atilde;o custou me apaixonar</p>
<p>&nbsp;</p>
<p>No cavalo de S&atilde;o Jorge</p>
<p>J&aacute; mulher a galopar</p>
<p>Sete l&eacute;guas de paix&atilde;o</p>
<p>Sem parar de suspirar</p>
<p>&nbsp;</p>
<p>Tava tocando a viola</p>
<p>Num galope &agrave; beira mar</p>
<p>Ai, ai, ai, &eacute; bom que d&oacute;i</p>
<p>Ui, ui, ui, chega a sangrar</p>
<p>&nbsp;</p>
<p>Gemedeira &eacute; que nem beijo</p>
<p>Come&ccedil;ou, custa a parar</p>
<p>Ela olhou, pediu um xote</p>
<p>Pra gemer bastou te amar</p>
<p>&nbsp;</p>
<p>Tava sentado na pedra</p>
<p>Veio o dono reclamar</p>
<p>Perguntou pra ver quem era</p>
<p>N&atilde;o custou me apresentar</p>
<p>&nbsp;</p>
<p>Com cem tiros de pistola</p>
<p>Sete furos de punhal</p>
<p>Sou violeiro, patr&atilde;o</p>
<p>Ele n&atilde;o p&ocirc;de escutar</p>
',
                'creditos' => '
<p>Arranjo e guitarras: Robertinho de Recife</p>
<p>Bateria: Renato &ldquo;Massa&rdquo;</p>
<p>Baixo: Jacar&eacute;</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
<p>Guitarras em &ldquo;Eu tamb&eacute;m quero beijar&rdquo;: Pepeu Gomes</p>
<p>Vocais: Lucia Perez, Tadeu Mathias, Fabio Mondego e Roberta Little</p>
',
                'faixa_mp3' => '13_tambor_do_mundo.mp3',
                'faixa_ogg' => '13_tambor_do_mundo.ogg',
                'disco_id' => '20'));

        Musicas::create(
            array(
                'faixa' => 'Disparada',
                'compositor' => '(Geraldo Vandr&eacute; / Theo de Barros) cantam: <strong>Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</strong>',
                'letra' => '<p>Prepare o seu cora&ccedil;&atilde;o</p>
<p>Pras coisas que eu vou contar</p>
<p>Eu venho l&aacute; do sert&atilde;o</p>
<p>Eu venho l&aacute; do sert&atilde;o</p>
<p>Eu venho l&aacute; do sert&atilde;o</p>
<p>E posso n&atilde;o lhe agradar</p>
<p>&nbsp;</p>
<p>Aprendi a dizer n&atilde;o</p>
<p>Ver a morte sem chorar</p>
<p>E a morte, o destino, tudo</p>
<p>A morte, o destino, tudo</p>
<p>Estava fora de lugar</p>
<p>Eu vivo pra consertar</p>
<p>&nbsp;</p>
<p>Na boiada j&aacute; fui boi</p>
<p>Mas um dia me montei</p>
<p>N&atilde;o por um motivo meu</p>
<p>Ou de quem comigo houvesse</p>
<p>Que qualquer querer tivesse</p>
<p>Por&eacute;m por necessidade</p>
<p>Do dono de uma boiada</p>
<p>Cujo vaqueiro morreu</p>
<p>&nbsp;</p>
<p>Boiadeiro muito tempo</p>
<p>La&ccedil;o firme, bra&ccedil;o forte</p>
<p>Muito gado, muita gente</p>
<p>Pela vida segurei</p>
<p>Seguia como num sonho</p>
<p>E boiadeiro era um rei</p>
<p>&nbsp;</p>
<p>Mas o mundo foi rodando</p>
<p>Nas patas do meu cavalo</p>
<p>E nos sonhos que fui sonhando</p>
<p>As vis&otilde;es se clareando</p>
<p>As vis&otilde;es se clareando</p>
<p>At&eacute; que um dia acordei</p>
<p>&nbsp;</p>
<p>Ent&atilde;o n&atilde;o pude seguir</p>
<p>Valente lugar-tenente</p>
<p>De dono de gado e gente</p>
<p>Porque gado a gente marca</p>
<p>Tange e ferra, engorda e mata</p>
<p>Mas com gente &eacute; diferente</p>
<p>&nbsp;</p>
<p>Se voc&ecirc; n&atilde;o concordar</p>
<p>N&atilde;o posso me desculpar</p>
<p>N&atilde;o canto pra enganar</p>
<p>Vou pegar minha viola</p>
<p>Vou deixar voc&ecirc; de lado</p>
<p>Vou cantar noutro lugar</p>
<p>&nbsp;</p>
<p>Na boiada j&aacute; fui boi</p>
<p>Boiadeiro j&aacute; fui rei</p>
<p>N&atilde;o por um motivo meu</p>
<p>Ou de quem comigo houvesse</p>
<p>E qualquer querer tivesse</p>
<p>Por qualquer coisa de seu</p>
<p>Por qualquer coisa de seu</p>
<p>Querer mais longe que eu</p>
',
                'creditos' => '
<p>Arranjo de base: Z&eacute; Ramalho e Geraldo Azevedo</p>
<p>Arranjo de cordas e sopros: Robertinho de Recife</p>
<p>Viol&atilde;o: Z&eacute; Ramalho</p>
<p>Viola: Geraldo Azevedo</p>
<p>Acordeom: Dominguinhos</p>
<p>Baixo: Jamil Joanes</p>
<p>Flautas e sax soprano: C&eacute;sar Michiles</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
<p>Percuss&atilde;o: Z&eacute; Gomes, Lucas e Firmino</p>
',
                'faixa_mp3' => '01_disparada.mp3',
                'faixa_ogg' => '01_disparada.ogg',
                'disco_id' => '21'));

        Musicas::create(
            array(
                'faixa' => 'O Princ&iacute;pio do Prazer',
                'compositor' => '(Geraldo Azevedo) cantam: <strong>Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</strong>',
                'letra' => '<p>Juntos vamos esquecer</p>
<p>Tudo que doeu em n&oacute;s</p>
<p>Nada vale tanto pra rever</p>
<p>Tempo que ficamos s&oacute;s</p>
<p>Faz a tua luz brilhar</p>
<p>Pra iluminar a nossa paz</p>
<p>O meu cora&ccedil;&atilde;o me diz</p>
<p>Fundamental &eacute; ser feliz</p>
<p>Meu cora&ccedil;&atilde;o me diz</p>
<p>Fundamental &eacute; ser feliz</p>
<p>&nbsp;</p>
<p>Juntos vamos acordar o amor</p>
<p>Car&iacute;cias, can&ccedil;&otilde;es</p>
<p>Deixa entrar o sol da manh&atilde;</p>
<p>A cor do som</p>
<p>Eu com voc&ecirc; sou muito mais</p>
<p>O princ&iacute;pio do prazer</p>
<p>Sonho que o tempo n&atilde;o desfaz</p>
<p>O meu cora&ccedil;&atilde;o me diz</p>
<p>Fundamental &eacute; ser feliz</p>
<p>Meu cora&ccedil;&atilde;o me diz</p>
<p>Fundamental &eacute; ser feliz</p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Ramalho, Geraldo Azevedo e Robertinho de Recife</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Viola: Z&eacute; Ramalho</p>
<p>Baixo: Jamil Joanes</p>
<p>Guitarra: Robertinho de Recife</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
<p>Percuss&atilde;o: Z&eacute; Gomes, Lucas e Firmino</p>
<p>Bateria: Renato Massa</p>
',
                'faixa_mp3' => '02_o_principio_do_prazer.mp3',
                'faixa_ogg' => '02_o_principio_do_prazer.ogg',
                'disco_id' => '21'));

        Musicas::create(
            array(
                'faixa' => 'Banquete de Signos',
                'compositor' => '(Z&eacute; Ramalho) cantam: <strong>Elba Ramalho e Z&eacute; Ramalho</strong>',
                'letra' => '<p>Discutir o canga&ccedil;o com liberdade</p>
<p>&Eacute; saber da viola, da viol&ecirc;ncia</p>
<p>Descobrir nos cabelos inoc&ecirc;ncia</p>
<p>&Eacute; saber da fatal fertilidade</p>
<p>&nbsp;</p>
<p>Descobrir a cidade na natureza</p>
<p>Descobrir a beleza dessa mulher</p>
<p>Descobrir o que der boniteza</p>
<p>Na peleja do homem vier, quando vier</p>
<p>&nbsp;</p>
<p>Descobrir o baga&ccedil;o dos engenhos</p>
<p>No mela&ccedil;o da cana mais um beijo</p>
<p>Descobrir os desejos que n&atilde;o tem cura</p>
<p>Saracura do brejo da novena</p>
<p>&nbsp;</p>
<p>Descobrir a serena da natureza</p>
<p>Descobrir a beleza dessa mulher</p>
<p>Descobrir o que der boniteza</p>
<p>Na peleja do homem vier, quando vier</p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Ramalho e Robertinho de Recife</p>
<p>Viol&atilde;o: Z&eacute; Ramalho</p>
<p>Baixo: Jamil Joanes</p>
<p>Sitar: Robertinho de Recife</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
<p>Percuss&atilde;o: Firmino e Paulinho He-Man</p>
',
                'faixa_mp3' => '03_banquete_de_signos.mp3',
                'faixa_ogg' => '03_banquete_de_signos.ogg',
                'disco_id' => '21'));

        Musicas::create(
            array(
                'faixa' => 'Miragens',
                'compositor' => '(Geraldo Azevedo / Z&eacute; Ramalho) cantam: <strong>Geraldo Azevedo e Z&eacute; Ramalho</strong>',
                'letra' => '<p>Bem querer vem querer-me</p>
<p>As ondas, as miragens</p>
<p>O fogo que n&atilde;o incendeia</p>
<p>&nbsp;</p>
<p>A imagem mais bonita</p>
<p>A entrega da emo&ccedil;&atilde;o</p>
<p>Os amores pulsando de novo</p>
<p>&nbsp;</p>
<p>A incr&iacute;vel maravilha</p>
<p>Da estrela do ver&atilde;o</p>
<p>Suspendendo a ponte do manto da noite</p>
<p>&nbsp;</p>
<p>Espiral do sil&ecirc;ncio</p>
<p>Cristalina a vis&atilde;o</p>
<p>Clareando a fonte do sonho do povo</p>
<p>&nbsp;</p>
<p>Em vez de emudecer poderia cantar</p>
<p>A mais linda can&ccedil;&atilde;o sem lamento</p>
<p>E quem n&atilde;o escutar perderia talvez</p>
<p>A maior metade do tempo do sonho</p>

',
                'creditos' => '
<p>Arranjo: Z&eacute; Ramalho e Geraldo Azevedo</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Viola: Z&eacute; Ramalho</p>
<p>Guitarra solo: Robertinho de Recife</p>
<p>Baixo: Jamil Joanes</p>
<p>Bateria: Renato Massa</p>
<p>&Oacute;rg&atilde;o: Luiz Ant&ocirc;nio</p>
<p>Percuss&atilde;o: Z&eacute; Gomes, Lucas e Firmino</p>

',
                'faixa_mp3' => '04_miragens.mp3',
                'faixa_ogg' => '04_miragens.ogg',
                'disco_id' => '21'));
        Musicas::create(
            array(
                'faixa' => 'Pedras e Moças',
                'compositor' => '(Z&eacute; Ramalho e Geraldo Azevedo) cantam: <strong>Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</strong>',
                'letra' => '<p>Acho que a primeira pedra</p>
<p>Quem atirou n&atilde;o tem perd&atilde;o</p>
<p>A segunda pedra</p>
<p>Quem a jogou n&atilde;o sei</p>
<p>&nbsp;</p>
<p>Sei que n&atilde;o sou eu quem ferir&aacute;</p>
<p>Pela &uacute;ltima vez</p>
<p>As milhares mo&ccedil;as</p>
<p>Tantas Madalenas</p>
<p>Tenras, t&atilde;o pequenas</p>
<p>Loucas</p>
<p>&nbsp;</p>
<p>De tanto amor</p>
<p>Como &eacute; que v&atilde;o</p>
<p>Como &eacute; que v&ecirc;m</p>
<p>Tanto querer sem um bem</p>
<p>&nbsp;</p>
<p>S&oacute; segura nessa pausa</p>
<p>Quem tem um sol que &eacute; maior</p>
<p>De quem tenha d&oacute;</p>
<p>Sem ser menor demais</p>
<p>Sabe e saber&aacute; de si</p>
<p>Talvez quem penetrou</p>
<p>Nas milhares mo&ccedil;as</p>
<p>Tantas madalenas</p>
<p>Tenras t&atilde;o pequenas</p>
<p>Loucas</p>
<p>&nbsp;</p>
<p>De tanto amor</p>
<p>Como &eacute; que v&atilde;o</p>
<p>Como &eacute; que v&ecirc;m</p>
<p>Tanto querer sem um bem</p>
<p>&nbsp;</p>
<p>De tanto amor</p>
<p>Como saber</p>
<p>Quando gozar</p>
<p>Sem conhecer seu sabor</p>
<p>&nbsp;</p>
<p>Ir&aacute; dizer</p>
<p>Ir&aacute; dan&ccedil;ar</p>
<p>Se sonhos que v&ecirc;m</p>
<p>Antes dos anjos dos homens</p>
<p>E dos dem&ocirc;nios</p>
<p>Luciferianas, pobres Gabri&eacute;is</p>
<p>Como s&atilde;o cru&eacute;is os deuses meus</p>
<p>Ou ent&atilde;o ser&atilde;o</p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Ramalho e Geraldo Azevedo</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Viola: Z&eacute; Ramalho</p>
<p>Baixo: Jamil Joanes</p>
<p>Sax soprano: L&eacute;o Gandelman</p>
<p>Vibrafone e &oacute;rg&atilde;o: Luiz Ant&ocirc;nio</p>
<p>Percuss&atilde;o: Z&eacute; Gomes, Lucas e Firmino</p>
<p>Bateria: Renato Massa</p>
',
                'faixa_mp3' => '05_pedras_e_mocas.mp3',
                'faixa_ogg' => '05_pedras_e_mocas.ogg',
                'disco_id' => '21'));

        Musicas::create(
            array(
                'faixa' => 'Canta Cora&ccedil;&atilde;o',
                'compositor' => '(Geraldo Azevedo / Carlos Fernando) cantam: <strong>Elba Ramalho e Geraldo Azevedo</strong>',
                'letra' => '<p>Canta, canta, passarinho</p>
<p>Canta, canta, miudinho</p>
<p>Na palma da minha m&atilde;o</p>
<p>&nbsp;</p>
<p>Quero ver voc&ecirc; voando</p>
<p>Quero ouvir voc&ecirc; cantando</p>
<p>Quero paz no cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Eu quero ver voc&ecirc; voando</p>
<p>Quero ouvir voc&ecirc; cantando</p>
<p>Na palma da minha m&atilde;o</p>
<p>&nbsp;</p>
<p>Na palma da minha m&atilde;o</p>
<p>Tem os dedos, tem as linhas</p>
<p>Que olhar cigano caminha</p>
<p>Procurando alcan&ccedil;ar</p>
<p>A nau perdida, o trem que chega</p>
<p>A nova dan&ccedil;a, mata verde esperan&ccedil;a</p>
<p>Em suas tran&ccedil;as vou voar</p>
<p>Passarinho, vou voar</p>
<p>&nbsp;</p>
<p>Meu alegre cora&ccedil;&atilde;o</p>
<p>&Eacute; triste como um camelo</p>
<p>&Eacute; fr&aacute;gil que nem brinquedo</p>
<p>&Eacute; forte como um le&atilde;o</p>
<p>&Eacute; todo zelo, &eacute; todo amor, &eacute; desmantelo</p>
<p>&Eacute; querubim, &eacute; c&atilde;o de fogo</p>
<p>&Eacute; Jesus Cristo, &eacute; Lampi&atilde;o</p>
<p>Passarinho, eu vou voar</p>
',
                'creditos' => '
<p>Arranjo: Geraldo Azevedo e Z&eacute; Ramalho</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Viola: Z&eacute; Ramalho</p>
<p>Baixo: Jamil Joanes</p>
<p>Acordeom: Dominguinhos</p>
<p>Flautas: C&eacute;sar Michiles</p>
<p>Percuss&atilde;o: Firmino e Paulinho He-Man</p>
',
                'faixa_mp3' => '06_canta_coracao.mp3',
                'faixa_ogg' => '06_canta_coracao.ogg',
                'disco_id' => '21'));

        Musicas::create(
            array(
                'faixa' => 'Eternas Ondas',
                'compositor' => '(Z&eacute; Ramalho) cantam: <strong>Elba Ramalho e Z&eacute; Ramalho</strong>',
                'letra' => '<p>Quanto tempo temos antes de voltarem</p>
<p>Aquelas ondas</p>
<p>Que vieram como gotas em sil&ecirc;ncio</p>
<p>T&atilde;o furioso</p>
<p>Derrubando homens entre outros animais</p>
<p>Devastando a sede desses matagais</p>
<p>Derrubando homens entre outros animais</p>
<p>Devastando a sede desses matagais</p>
<p>&nbsp;</p>
<p>Devorando &aacute;rvores, pensamentos</p>
<p>Seguindo a linha</p>
<p>Do que foi escrito pelo mesmo l&aacute;bio</p>
<p>T&atilde;o furioso</p>
<p>E se teu amigo vento n&atilde;o te procurar</p>
<p>&Eacute; por que multid&otilde;es ele foi arrastar</p>
<p>E se teu amigo vento n&atilde;o te procurar</p>
<p>&Eacute; por que multid&otilde;es ele foi arrastar</p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Ramalho e Robertinho de Recife</p>
<p>Viola: Z&eacute; Ramalho</p>
<p>Baixo: Jamil Joanes</p>
<p>Violas, guitarras e efeitos: Robertinho de Recife</p>
<p>Solo hoog: Luiz Ant&ocirc;nio</p>
<p>Percuss&atilde;o: Firmino e Paulinho He-Man</p>
',
                'faixa_mp3' => '07_eternas_ondas.mp3',
                'faixa_ogg' => '07_eternas_ondas.ogg',
                'disco_id' => '21'));

        Musicas::create(
            array(
                'faixa' => 'Bicho de 7 Cabeças II',
                'compositor' => '(Z&eacute; Ramalho / Geraldo Azevedo / Renato Rocha) cantam: <strong>Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</strong>',
                'letra' => '<p>N&atilde;o d&aacute; p&eacute;</p>
<p>N&atilde;o tem p&eacute; nem cabe&ccedil;a</p>
<p>N&atilde;o tem ningu&eacute;m que mere&ccedil;a</p>
<p>N&atilde;o tem cora&ccedil;&atilde;o que esque&ccedil;a</p>
<p>N&atilde;o tem jeito mesmo</p>
<p>N&atilde;o tem d&oacute; no peito</p>
<p>N&atilde;o tem nem talvez</p>
<p>Ter feito o que voc&ecirc; me fez</p>
<p>Desapare&ccedil;a</p>
<p>Cres&ccedil;a e desapare&ccedil;a</p>
<p>&nbsp;</p>
<p>N&atilde;o tem d&oacute; no peito</p>
<p>N&atilde;o tem jeito</p>
<p>N&atilde;o tem cora&ccedil;&atilde;o que esque&ccedil;a</p>
<p>N&atilde;o tem ningu&eacute;m que mere&ccedil;a</p>
<p>N&atilde;o tem p&eacute;, n&atilde;o tem cabe&ccedil;a</p>
<p>N&atilde;o da p&eacute;, n&atilde;o &eacute; direito</p>
<p>N&atilde;o foi nada, eu n&atilde;o fiz nada disso</p>
<p>E voc&ecirc; fez um</p>
<p>Bicho de sete cabe&ccedil;as</p>
<p>Bicho de sete cabe&ccedil;as</p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Ramalho e Geraldo Azevedo</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Viola: Z&eacute; Ramalho</p>
<p>Baixo: Jamil Joanes</p>
<p>Trompete: Marcio Montarroyos</p>
<p>Vibrafone e &oacute;rg&atilde;o: Luiz Ant&ocirc;nio</p>
<p>Percuss&atilde;o: Z&eacute; Gomes, Lucas e Firmino</p>
<p>Bateria: Renato Massa</p>
',
                'faixa_mp3' => '08_bicho_de_7_cabecas_ii.mp3',
                'faixa_ogg' => '08_bicho_de_7_cabecas_ii.ogg',
                'disco_id' => '21'));

        Musicas::create(
            array(
                'faixa' => 'O Autor da Natureza',
                'compositor' => '(Z&eacute; Vicente da Para&iacute;ba / Passarinho do Norte / Br&aacute;ulio Tavares) cantam: <strong>Geraldo Azevedo e Z&eacute; Ramalho</strong>',
                'letra' => '<p>A natureza</p>
<p>A natureza</p>
<p>A natureza</p>
<p>A natureza</p>
<p>&nbsp;</p>
<p>O que prende demais minha aten&ccedil;&atilde;o</p>
<p>&Eacute; um touro raivoso numa arena</p>
<p>Uma pulga do jeito que &eacute; pequena</p>
<p>Dominar a bravura de um le&atilde;o</p>
<p>Na picada ele muda a posi&ccedil;&atilde;o</p>
<p>Pra co&ccedil;ar-se depressa com certeza</p>
<p>N&atilde;o se serve da unha nem da presa</p>
<p>Se levanta da cama e fica em p&eacute;</p>
<p>Tudo isso provando o quanto &eacute;</p>
<p>Poderosa e suprema a natureza</p>
<p>&nbsp;</p>
<p>Admiro demais o beija-flor</p>
<p>Que com medo da cobra inimiga</p>
<p>S&oacute; constr&oacute;i o seu ninho na urtiga</p>
<p>Recebendo li&ccedil;&atilde;o do Criador</p>
<p>Observo a coragem do condor</p>
<p>Que nos montes rochosos come a presa</p>
<p>Urubu empregado da limpeza</p>
<p>Quando &eacute; triste a vida do abutre</p>
<p>Quando encontra um morto &eacute; que se nutre</p>
<p>Quanto &eacute; grande e suprema a natureza</p>
<p>&nbsp;</p>
<p>A abelha por Deus foi amestrada</p>
<p>Sem haver um processo bioqu&iacute;mico</p>
<p>At&eacute; hoje n&atilde;o houve nenhum qu&iacute;mico</p>
<p>Pra fazer a ci&ecirc;ncia dizer nada</p>
<p>O buraco pequeno da entrada</p>
<p>Facilita a passagem com franqueza</p>
<p>Uma &eacute; sentinela de defesa</p>
<p>E as outras se espalham no vergel</p>
<p>Sem turbina, sem tacho fazem mel</p>
<p>Como &eacute; grande o poder da natureza</p>
<p>&nbsp;</p>
<p>N&atilde;o h&aacute; pedra igualmente ao diamante</p>
<p>Nem metal t&atilde;o querido quanto o ouro</p>
<p>N&atilde;o existe tristeza como o choro</p>
<p>Nem reflexo igual ao do brilhante</p>
<p>Nem com&eacute;dia maior que a de Dante</p>
<p>Nem existe acusado sem defesa</p>
<p>Nem pecado maior que avareza</p>
<p>Nem altura igualmente ao firmamento</p>
<p>Nem veloz igualmente ao pensamento</p>
<p>Nem h&aacute; grande igualmente &agrave; natureza</p>
<p>&nbsp;</p>
<p>Tem um verso que fala da maconha</p>
<p>Que &eacute; uma erva que d&aacute; no meio do mato</p>
<p>Se fumada provoca um tal barato</p>
<p>A maior emo&ccedil;&atilde;o que a gente sonha</p>
<p>A viagem &agrave;s vezes &eacute; medonha</p>
<p>D&aacute; suor, d&aacute; vertigem, d&aacute; fraqueza</p>
<p>Por&eacute;m, quase sempre &eacute; uma beleza</p>
<p>Eu por mim experimento todo dia</p>
<p>Se eu tivesse um agora eu bem queria</p>
<p>Pois a coisa &eacute; da santa natureza</p>

',
                'creditos' => '
<p>Arranjo: Z&eacute; Ramalho e Geraldo Azevedo</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Baixo: Jamil Joanes</p>
<p>Berimbau de bacia: Robertinho de Recife</p>
<p>Percuss&atilde;o: Z&eacute; Gomes, Lucas e Firmino</p>
',
                'faixa_mp3' => '09_o_autor_da_natureza.mp3',
                'faixa_ogg' => '09_o_autor_da_natureza.ogg',
                'disco_id' => '21'));

        Musicas::create(
            array(
                'faixa' => 'Saga da Asa Branca',
                'compositor' => '(Zé Vicente da Paraíba / Passarinho do Norte / Bráulio Tavares) cantam: <strong>Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</strong>',
                'letra' => '<p><strong>Asa Branca</strong></p>
<p>(Luiz Gonzaga / Humberto Teixeira)</p>
<hr class="space-letra-top-musicas">
<p>Quando olhei a terra ardendo</p>
<p>Qual fogueira de S&atilde;o Jo&atilde;o</p>
<p>Eu perguntei a Deus do c&eacute;u</p>
<p>Por que tamanha judia&ccedil;&atilde;o</p>
<p>Eu perguntei a Deus do c&eacute;u, ai</p>
<p>Por que tamanha judia&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Que braseiro, que fornalha</p>
<p>Nem um p&eacute; de planta&ccedil;&atilde;o</p>
<p>Por falta d&rsquo;&aacute;gua perdi meu gado</p>
<p>Morreu de sede meu alaz&atilde;o</p>
<p>Por falta d&rsquo;&aacute;gua perdi meu gado</p>
<p>Morreu de sede meu alaz&atilde;o</p>
<p>&nbsp;</p>
<p>Int&eacute; mesmo a Asa Branca</p>
<p>Bateu asas do sert&atilde;o</p>
<p>Entonce eu disse &ldquo;adeus Rosinha</p>
<p>Guarda contigo meu cora&ccedil;&atilde;o&rdquo;</p>
<p>Entonce eu disse &ldquo;adeus Rosinha</p>
<p>Guarda contigo meu cora&ccedil;&atilde;o&rdquo;</p>
<p>&nbsp;</p>
<p>Quando o verde dos teus olhos</p>
<p>Se espalhar na planta&ccedil;&atilde;o</p>
<p>Eu te asseguro, n&atilde;o chore n&atilde;o, viu</p>
<p>Que eu voltarei viu, meu cora&ccedil;&atilde;o</p>
<p>Eu te asseguro, n&atilde;o chore n&atilde;o, viu</p>
<p>Eu voltarei viu, meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p><strong>A volta da Asa Branca</strong></p>
<p>(Luiz Gonzaga / Z&eacute; Dantas)</p>
<hr class="space-letra-top-musicas">
<p>J&aacute; faz tr&ecirc;s noites que pro norte relampeia</p>
<p>A Asa Branca ouvindo o ronco do trov&atilde;o</p>
<p>J&aacute; bateu asas e voltou pro meu sert&atilde;o</p>
<p>Ai, ai, eu vou-me embora</p>
<p>Vou cuidar da planta&ccedil;&atilde;o</p>
<p>J&aacute; bateu asas e voltou pro meu sert&atilde;o</p>
<p>Ai, ai, eu vou-me embora</p>
<p>Vou cuidar da planta&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>A seca fez eu desertar da minha terra</p>
<p>Mas felizmente Deus agora se alembrou</p>
<p>De mandar chuva presse sert&atilde;o sofredor</p>
<p>Sert&atilde;o das mulh&eacute; s&eacute;ria, dos home trabalhador</p>
<p>De mandar chuva presse sert&atilde;o sofredor</p>
<p>Sert&atilde;o das mulh&eacute; s&eacute;ria, dos home trabalhador</p>
<p>&nbsp;</p>
<p>Rios correndo, as cachoeiras t&atilde;o zoando</p>
<p>Terra molhada, mato verde, que riqueza</p>
<p>E a Asa Branca tarde canta que beleza</p>
<p>Ai, ai, o povo alegre, mais alegre a natureza</p>
<p>E a Asa Branca tarde canta que beleza</p>
<p>Ai, ai, o povo alegre, mais alegre a natureza</p>
<p>&nbsp;</p>
<p>Revendo a chuva me arrecordo de Rosinha</p>
<p>A linda flor do meu sert&atilde;o pernambucano</p>
<p>E se a safra n&atilde;o atrapalhar meus planos</p>
<p>Que &eacute; que h&aacute; &oacute; seu vig&aacute;rio, vou casar no fim do ano</p>
<p>E se a safra n&atilde;o atrapalhar meus planos</p>
<p>Que &eacute; que h&aacute; &oacute; seu vig&aacute;rio, vou casar no fim do ano</p>

',
                'creditos' => '
<p>Arranjo: Geraldo Azevedo e Z&eacute; Ramalho</p>
<p>Viola: Z&eacute; Ramalho</p>
<p>Baixo: Jamil Joanes</p>
<p>Viola de 10 cordas: Robertinho de Recife</p>
<p>Acordeom: Dominguinhos</p>
<p>Flautas: C&eacute;sar Michiles</p>
<p>Bateria: Renato Massa</p>
<p>Percuss&atilde;o: Z&eacute; Gomes, Lucas e Firmino</p>
',
                'faixa_mp3' => '10_saga_da_asa_branca.mp3',
                'faixa_ogg' => '10_saga_da_asa_branca.ogg',
                'disco_id' => '21'));

        Musicas::create(
            array(
                'faixa' => 'Can&ccedil;&atilde;o da Despedida',
                'compositor' => '(Geraldo Azevedo / Geraldo Vandr&eacute;) canta: <strong>Elba Ramalho</strong>',
                'letra' => '<p>J&aacute; vou embora</p>
<p>Mas sei que vou voltar</p>
<p>Amor n&atilde;o chora</p>
<p>Se eu volto &eacute; pra ficar</p>
<p>&nbsp;</p>
<p>Amor n&atilde;o chora</p>
<p>Que a hora &eacute; de deixar</p>
<p>O amor de agora</p>
<p>Pra sempre ele ficar</p>
<p>&nbsp;</p>
<p>Eu quis ficar aqui, mas n&atilde;o podia</p>
<p>O meu caminho a ti n&atilde;o conduzia</p>
<p>Um rei mal coroado n&atilde;o queria</p>
<p>O amor em seu reinado</p>
<p>Pois sabia, n&atilde;o ia ser amado</p>
<p>&nbsp;</p>
<p>Amor n&atilde;o chora, eu volto um dia</p>
<p>O rei velho e cansado j&aacute; morria</p>
<p>Perdido em seu reinado, sem Maria</p>
<p>Quando eu me despedia</p>
<p>E no meu canto lhe dizia</p>
',
                'creditos' => '
<p>Arranjo e viol&atilde;o: Geraldo Azevedo</p>
',
                'faixa_mp3' => '11_cancao_da_despedida.mp3',
                'faixa_ogg' => '11_cancao_da_despedida.ogg',
                'disco_id' => '21'));

        Musicas::create(
            array(
                'faixa' => 'Ai Que Saudade de Oc&ecirc;',
                'compositor' => '(Vital Farias) cantam: <strong>Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</strong>',
                'letra' => '<p>N&atilde;o se admire se um dia</p>
<p>Um beija-flor invadir</p>
<p>A porta da tua casa</p>
<p>Te der um beijo e partir</p>
<p>Fui eu que mandei o beijo</p>
<p>Que &eacute; pra matar meu desejo</p>
<p>Faz tempo que eu n&atilde;o te vejo</p>
<p>Ai que saudade d&rsquo;oc&ecirc;</p>
<p>&nbsp;</p>
<p>Se um dia oc&ecirc; lembrar</p>
<p>Escreva uma carta pra mim</p>
<p>Bote logo no correio</p>
<p>Com frases dizendo assim:</p>
<p>&ldquo;Faz tempo que n&atilde;o te vejo</p>
<p>Quero matar meu desejo</p>
<p>Te mando um monte de beijos</p>
<p>Ai que saudade sem fim&rdquo;</p>
<p>&nbsp;</p>
<p>E se quiser recordar</p>
<p>Aquele nosso namoro</p>
<p>Quando eu ia viajar</p>
<p>Voc&ecirc; ca&iacute;a no choro</p>
<p>E eu chorando pela estrada</p>
<p>Mas o que eu posso fazer</p>
<p>Trabalha &eacute; minha sina</p>
<p>Eu gosto mesmo &eacute; d&#39;oc&ecirc;</p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Ramalho e Geraldo Azevedo</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Viola: Z&eacute; Ramalho</p>
<p>Baixo: Jamil Joanes</p>
<p>Acordeom: Dominguinhos</p>
<p>Flautas: C&eacute;sar Michiles</p>
<p>Percuss&atilde;o: Firmino e Paulinho He-Man</p>
',
                'faixa_mp3' => '12_ai_que_saudade_doce.mp3',
                'faixa_ogg' => '12_ai_que_saudade_doce.ogg',
                'disco_id' => '21'));

        Musicas::create(
            array(
                'faixa' => 'Chameguinho',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Meu bem castiga nesse passo miudinho</p>
<p>Faz aquele chameguinho</p>
<p>N&atilde;o d&ecirc; bola pra ningu&eacute;m</p>
<p>Voc&ecirc; &eacute; meu caf&eacute; com leite</p>
<p>&Eacute; o queijo dentro do meu p&atilde;o</p>
<p>&Eacute; o ch&atilde;o pra que eu me deite</p>
<p>Que ascende seu cora&ccedil;&atilde;o</p>
<p>Meu bem voc&ecirc; me sacuda</p>
<p>Me acuda e me d&ecirc; um n&oacute;</p>
<p>&nbsp;</p>
<p>Mostre pra esse povo que voc&ecirc; &eacute; quente</p>
<p>Mostre pra essa gente que voc&ecirc; &eacute; meu xod&oacute;</p>
<p>Mostre pra esse povo que voc&ecirc; &eacute; quente</p>
<p>Mostre pra essa gente que voc&ecirc; &eacute; meu xod&oacute;</p>
<p>&nbsp;</p>
<p>Quero ver o povo todo se babando</p>
<p>Quero ver voc&ecirc; dan&ccedil;ando comigo num canto s&oacute;</p>
<p>Com aquele chamego de fazer roer</p>
<p>Pra todo mundo ver, do ch&atilde;o levantar p&oacute;</p>
',
                'creditos' => '
<p>Arranjo e guitarra: Robertinho de Recife</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Baixo: Fa&iacute;sca Bass</p>
<p>Sanfona: Valdeci Ara&uacute;jo</p>
<p>Bateria: Arthur Cesar</p>
<p>Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o</p>
',
                'faixa_mp3' => '01_chameguinho.mp3',
                'faixa_ogg' => '01_chameguinho.ogg',
                'disco_id' => '22'));

        Musicas::create(
            array(
                'faixa' => 'Tum-Tum-Tum',
                'compositor' => '(Ari Monteiro /Crist&oacute;v&atilde;o de Alencar)',
                'letra' => '<p>No tempo que eu era s&oacute;</p>
<p>Que n&atilde;o tinha amor nenhum</p>
<p>Meu cora&ccedil;&atilde;o batia mansinho</p>
<p>Tum, tum, tum</p>
<p>&nbsp;</p>
<p>Depois veio voc&ecirc;</p>
<p>O meu amor n&uacute;mero um</p>
<p>E o meu cora&ccedil;&atilde;o pois se a bater</p>
<p>Tum, tum, tum, tum, tum, tum</p>
<p>&nbsp;</p>
<p><strong>Mulata no coco</strong></p>
<p>(Oscar Barbosa / Geraldo Nunes)</p>
<hr class="space-letra-top-musicas">
<p>Olha o balan&ccedil;o das cadeira dela</p>
<p>Olha o balan&ccedil;o das cadeira dela d&aacute;</p>
<p>Olha o balan&ccedil;o das cadeira dela</p>
<p>Fiz esse coco s&oacute; pra ela balan&ccedil;ar</p>
<p>&nbsp;</p>
<p>Quando eu gritei o coco</p>
<p>A mulata se espalhou</p>
<p>Com o chiado da sand&aacute;lia dela</p>
<p>A poeira levantou</p>
<p>&nbsp;</p>
<p>A mo&ccedil;ada lhe cobriu de palmas</p>
<p>Ela em cena tornou a voltar</p>
<p>Com satisfa&ccedil;&atilde;o voltei a cantar esse coco</p>
<p>Que eu fiz s&oacute; pra ela balan&ccedil;ar</p>
',
                'creditos' => '
<p>Arranjo: Robertinho de Recife e Luiz Ant&ocirc;nio</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Baixo: Fa&iacute;sca Bass</p>
<p>Cavaco: Robertinho de Recife</p>
<p>Sanfona: Chiquinho Chagas e Valdeci Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
<p>Bateria: Arthur Cesar</p>
<p>Clarinete: Juarez Ara&uacute;jo</p>
<p>Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o</p>
',
                'faixa_mp3' => '02_tum_tum_tum_mulata_no_coco.mp3',
                'faixa_ogg' => '02_tum_tum_tum_mulata_no_coco.ogg',
                'disco_id' => '22'));

        Musicas::create(
            array(
                'faixa' => 'Face',
                'compositor' => '(Chico C&eacute;sar / Itamar Assump&ccedil;&atilde;o / Zeca Baleiro)',
                'letra' => '<p>Eu dou a minha face pra bater</p>
<p>Mas se quiser pode beijar</p>
<p>Vem dentro de mim, vem fora de si</p>
<p>Meu amor, meu amor vem c&aacute;</p>
<p>Vem dentro de mim, vem fora de si</p>
<p>Meu amor, meu amor vem c&aacute;</p>
<p>&nbsp;</p>
<p>Menina voc&ecirc; me alucina</p>
<p>Mas a minha sina &eacute; te desejar</p>
<p>Desejo como o rato</p>
<p>O queijo como a boca</p>
<p>O beijo meu amor desejar</p>
<p>Desejo como o rato</p>
<p>O queijo como rato</p>
<p>O beijo como a boca</p>
<p>Desejo meu amor vem c&aacute;</p>
<p>&nbsp;</p>
<p>Morena, vem da minha pena</p>
<p>Minha amada Madalena</p>
<p>Minha cruz, meu ar</p>
<p>Entenda que amar</p>
<p>&Eacute; desejar beijar</p>
<p>Menina desejo seu beijo</p>
<p>Entenda que amar</p>
<p>&Eacute; desejar beijar</p>
<p>Morena, meu amor, vem c&aacute;</p>
',
                'creditos' => '
<p>Arranjo e guitarra: Robertinho de Recife</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Baixo: Fa&iacute;sca Bass</p>
<p>Sanfona: Valdeci Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
<p>Bateria: Arthur Cesar</p>
<p>Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o</p>
',
                'faixa_mp3' => '03_face.mp3',
                'faixa_ogg' => '03_face.ogg',
                'disco_id' => '22'));

        Musicas::create(
            array(
                'faixa' => 'Lavadeira do Rio',
                'compositor' => '(Lenine / Br&aacute;ulio Tavares) Participa&ccedil;&atilde;o especial: <strong> Lenine</strong>',
                'letra' => '<p>A lavadeira do rio</p>
<p>Muito len&ccedil;ol pra lavar</p>
<p>Fica faltando uma saia</p>
<p>Quando o sab&atilde;o se acabar</p>
<p>&nbsp;</p>
<p>Mas corra pra beira da praia</p>
<p>Veja a espuma brilhar</p>
<p>Ou&ccedil;a o barulho bravio</p>
<p>Das ondas que batem na beira do mar</p>
<p>Ou&ccedil;a o barulho bravio</p>
<p>Das ondas que batem na beira do mar</p>
<p>&nbsp;</p>
<p>&Ecirc;, &ocirc;, o vento soprou</p>
<p>&Ecirc;, &ocirc;, a folha caiu</p>
<p>&Ecirc;, &ocirc;, cad&ecirc; meu amor</p>
<p>Que a noite chegou fazendo frio</p>
<p>&nbsp;</p>
<p>&Ocirc; Rita tu sai da janela</p>
<p>Deixa esse mo&ccedil;o passar</p>
<p>Quem n&atilde;o &eacute; rica e &eacute; bela</p>
<p>N&atilde;o pode se descuidar</p>
<p>&nbsp;</p>
<p>&Ocirc; Rita tu sai da janela</p>
<p>Que as mo&ccedil;as desse lugar</p>
<p>Nem se demora a donzela</p>
<p>Nem se destina a casar</p>
<p>Nem se demora a donzela</p>
<p>Nem se destina a casar</p>
',
                'creditos' => '
<p>Arranjo: Lenine</p>
<p>Viola: Robertinho de Recife</p>
<p>Sampler: Luiz Ant&ocirc;nio</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Vocal: Tadeu Mathias</p>
',
                'faixa_mp3' => '04_lavadeira_do_rio.mp3',
                'faixa_ogg' => '04_lavadeira_do_rio.ogg',
                'disco_id' => '22'));

        Musicas::create(
            array(
                'faixa' => 'Aroma',
                'compositor' => '(Dominguinhos / Nando Cordel)',
                'letra' => '<p>Eu gosto do aroma do teu corpo</p>
<p>Do beijo cristalino e sedutor</p>
<p>Da pele que &eacute; macia feito seda</p>
<p>Teu jeito cobi&ccedil;ado o meu amor</p>
<p>&nbsp;</p>
<p>Eu gosto quando &eacute;s um passarinho</p>
<p>E v&ecirc; na minha boca um sapoti</p>
<p>Eu passo a vida inteira nos teus bra&ccedil;os</p>
<p>O que voc&ecirc; quiser eu fa&ccedil;o</p>
<p>Quero ver voc&ecirc; feliz</p>
<p>Eu passo a vida inteira nos teus bra&ccedil;os</p>
<p>O que voc&ecirc; quiser eu fa&ccedil;o</p>
<p>Quero ver voc&ecirc; feliz</p>
<p>&nbsp;</p>
<p>Que loucura teu amor</p>
<p>Ai, ai, ai</p>
<p>Ningu&eacute;m pode imaginar</p>
<p>Ai, ai, ai</p>
<p>&Eacute; demais o teu molejo</p>
<p>A del&iacute;cia do teu beijo</p>
<p>Faz a gente desmaiar</p>
',
                'creditos' => '
<p>Arranjo: Robertinho de Recife e Dominguinhos</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Baixo: Fa&iacute;sca Bass</p>
<p>Sanfona (solo): Dominguinhos</p>
<p>Sanfona: Valdeci Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
<p>Bateria: Arthur Cesar</p>
<p>Guitarra: Robertinho de Recife</p>
<p>Zabumba: Dio de Ara&uacute;jo</p>
<p>Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o</p>
',
                'faixa_mp3' => '05_aroma.mp3',
                'faixa_ogg' => '05_aroma.ogg',
                'disco_id' => '22'));

        Musicas::create(
            array(
                'faixa' => 'A Letra I',
                'compositor' => '(Z&eacute; Dantas / Luiz Gonzaga)',
                'letra' => '<p>Vai cartinha fechada</p>
<p>N&atilde;o deixa ningu&eacute;m te abrir</p>
<p>&Agrave;quela casa caiada onde mora a letra I</p>
<p>Existe uma cacimba do rio que o ver&atilde;o secou</p>
<p>Meus &oacute;io chorou tanta m&aacute;goa</p>
<p>Que hoje sem &aacute;gua me responde a dor</p>
<p>Meus &oacute;io chorou tanta m&aacute;goa</p>
<p>Que hoje sem &aacute;gua me responde a dor</p>
<p>&nbsp;</p>
<p>Ai, diz que o amor</p>
<p>Fumega no meu cora&ccedil;&atilde;o</p>
<p>Tal qual a fogueira</p>
<p>Das noites de S&atilde;o Jo&atilde;o</p>
<p>&nbsp;</p>
<p>Que eu sofro por viver sem ela</p>
<p>Tando longe dela s&oacute; sei reclamar</p>
<p>Eu vivo como um passarinho</p>
<p>Que longe do ninho s&oacute; pensa em voltar</p>
',
                'creditos' => '
<p>Arranjo e guitarra: Robertinho de Recife</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Baixo: Fa&iacute;sca Bass</p>
<p>Sanfona: Valdeci Ara&uacute;jo</p>
<p>Bateria: Arthur Cesar</p>
<p>Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o</p>
',
                'faixa_mp3' => '06_a_letra_i.mp3',
                'faixa_ogg' => '06_a_letra_i.ogg',
                'disco_id' => '22'));

        Musicas::create(
            array(
                'faixa' => 'Pra Ninar Meu Cora&ccedil;&atilde;o',
                'compositor' => '(Maciel Melo / Luis Fidélis)',
                'letra' => '<p>T&ocirc; esperando por voc&ecirc; a qualquer hora, amor</p>
<p>Pode bater na porta do meu cora&ccedil;&atilde;o</p>
<p>Tirei a chave, eu arranquei a fechadura</p>
<p>Pra ver voc&ecirc; de encontro &agrave; minha solid&atilde;o</p>
<p>&nbsp;</p>
<p>Vem depressa que eu j&aacute; estou contando as horas</p>
<p>Tic-tac no rel&oacute;gio da paix&atilde;o</p>
<p>Vem cantar ao meu ouvido aquela m&uacute;sica</p>
<p>Maravilhosa pra ninar meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Vem, vem, vem matar a minha sede</p>
<p>Vem, vem, vem cuidar do meu amor</p>
<p>Vem, vem, vem armar a tua rede</p>
<p>Que no meu peito tem um par de armador</p>
',
                'creditos' => '
<p>Arranjo e guitarra: Robertinho de Recife</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Baixo: Fa&iacute;sca Bass</p>
<p>Sanfona: Valdeci Ara&uacute;jo</p>
<p>Bateria: Arthur Cesar</p>
<p>Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o</p>
',
                'faixa_mp3' => '07_pra_ninar_meu_coracao.mp3',
                'faixa_ogg' => '07_pra_ninar_meu_coracao.ogg',
                'disco_id' => '22'));

        Musicas::create(
            array(
                'faixa' => 'Pau-de-arara &eacute; a Vovozinha',
                'compositor' => '(Gordurinha)',
                'letra' => '<p>Vim da Bahia pro Rio de Janeiro</p>
<p>Pra ganhar dinheiro, desaforo n&atilde;o</p>
<p>Pau de arara &eacute; a vovozinha</p>
<p>Eu s&oacute; viajo &eacute; de avi&atilde;o</p>
<p>Pau de arara &eacute; a vovozinha</p>
<p>Eu s&oacute; viajo &eacute; de avi&atilde;o</p>
<p>&nbsp;</p>
<p>Humorista de almanaque</p>
<p>Aprendiz de gozador</p>
<p>Eu vou lhe levar na Bahia</p>
<p>Voc&ecirc; vai cair duro l&aacute; em Salvador</p>
<p>&nbsp;</p>
<p>Vai escorregar no petr&oacute;leo</p>
<p>Vou lhe entupir de cacau</p>
<p>Se chegar falando em g&iacute;ria</p>
<p>Voc&ecirc; vai entrar no pau</p>
<p>&nbsp;</p>
<p>Depois &ocirc; cabra da peste</p>
<p>N&atilde;o me diga que o Nordeste s&oacute; tem cabra mau</p>
<p>Depois &ocirc; cabra da peste</p>
<p>N&atilde;o me diga que o Nordeste s&oacute; tem cabra mau</p>
',
                'creditos' => '
<p>Arranjo e cavaco: Robertinho de Recife</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Baixo: Fa&iacute;sca Bass</p>
<p>Sanfona: Valdeci Ara&uacute;jo</p>
<p>Bateria: Arthur Cesar</p>
<p>Sax: Juarez Ara&uacute;jo</p>
<p>Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o</p>
',
                'faixa_mp3' => '08_pau_de_arara_e_a_vovonhinha.mp3',
                'faixa_ogg' => '08_pau_de_arara_e_a_vovonhinha.ogg',
                'disco_id' => '22'));

        Musicas::create(
            array(
                'faixa' => 'Me Pegue pra Chamegar',
                'compositor' => '(Tadeu Mathias)',
                'letra' => '<p>Um chamego desses s&oacute; &eacute; bom contigo</p>
<p>Chegue logo meu pretinho, &eacute;s o meu amor</p>
<p>Tu &eacute;s o bem bom da minha vida</p>
<p>Eu sou tua querida, tua pequenina flor</p>
<p>&nbsp;</p>
<p>Eu sou</p>
<p>Eu sei que sou o seu amor</p>
<p>Eu vou</p>
<p>A noite toda com voc&ecirc;</p>
<p>Nesse chamego arrochado</p>
<p>Que me deixa louca de tanto prazer</p>
<p>Quase perco o ju&iacute;zo quando voc&ecirc; me abra&ccedil;a</p>
<p>Nego, voc&ecirc; me la&ccedil;a com essa sua dan&ccedil;a</p>
<p>&nbsp;</p>
<p>Que &eacute; um chamego</p>
<p>&Eacute; um chamego, nego</p>
<p>&Eacute; um chamego</p>
<p>&Eacute; um chamego, nego</p>
<p>&Eacute; um chamego</p>
<p>Que me pega bem cedo</p>
<p>&Eacute; mexido, &eacute; chamego</p>
<p>Me pegue pra chamegar</p>
<p>&nbsp;</p>
<p>Me pegue, me pegue pra chamegar</p>
<p>Me pegue, me pegue pra chamegar</p>
<p>Me pegue, me pegue pra chamegar</p>
<p>Pegue devagar</p>
<p>Me pegue pra chamegar</p>
',
                'creditos' => '
<p>Arranjo e guitarra: Robertinho de Recife</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Baixo: Fa&iacute;sca Bass</p>
<p>Sanfona: Valdeci Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio</p>
<p>Bateria: Arthur Cesar</p>
<p>Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o</p>
',
                'faixa_mp3' => '09_me_pegue_pra_chamegar.mp3',
                'faixa_ogg' => '09_me_pegue_pra_chamegar.ogg',
                'disco_id' => '22'));
        Musicas::create(
            array(
                'faixa' => 'S&atilde;o Xang&ocirc; Menino',
                'compositor' => '(Carlinhos Brown)',
                'letra' => '<p>E hoje &eacute; o anivers&aacute;rio de S&atilde;o Jo&atilde;o</p>
<p>E hoje &eacute; o anivers&aacute;rio de S&atilde;o Jo&atilde;o</p>
<p>Vamos comer canjica, vamos soltar bal&atilde;o</p>
<p>Que hoje &eacute; o anivers&aacute;rio de S&atilde;o Jo&atilde;o</p>
<p>&nbsp;</p>
<p>S&atilde;o Xang&ocirc; menino</p>
<p>Carrega o carneiro no peito</p>
<p>A mando do amado</p>
<p>Comando uniperfeito</p>
<p>A mando do amado</p>
<p>Comando uniperfeito</p>
<p>&nbsp;</p>
<p>Tenho fogo na goela</p>
<p>S&oacute; quent&atilde;o para o cantar</p>
<p>&Eacute; festa na ruela</p>
<p>No paiol do varandar</p>
<p>&nbsp;</p>
<p>As mo&ccedil;as da fazenda</p>
<p>Vencem o seu que fazer</p>
<p>Vamos pagar a prenda</p>
<p>No licor do bem querer</p>
<p>&nbsp;</p>
<p>Sanfoneiro rindo</p>
<p>Carrega a sanfona no peito</p>
<p>Zabumba &eacute; Pedro</p>
<p>E o triangueiro &eacute; Tonho Casamenteiro</p>
',
                'creditos' => '
<p>Concep&ccedil;&atilde;o musical: Carlinhos Brown</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Baixo: Fa&iacute;sca Bass</p>
<p>Cavaco e guitarra: Robertinho de Recife</p>
<p>Sanfona: Valdeci Ara&uacute;jo</p>
<p>Bateria: Arthur Cesar</p>
<p>Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o</p>
',
                'faixa_mp3' => '10_sao_xango_menino.mp3',
                'faixa_ogg' => '10_sao_xango_menino.ogg',
                'disco_id' => '22'));

        Musicas::create(
            array(
                'faixa' => 'Casa, Comida e Paix&atilde;o',
                'compositor' => '(Dominguinhos / Fausto Nilo)',
                'letra' => '<p>L&aacute; se vai o meu amor</p>
<p>Levando uma grande saudade</p>
<p>Nas asas de um avi&atilde;o</p>
<p>No horizonte a fronteira da liberdade</p>
<p>Riqueza e felicidade</p>
<p>Cidades de outro sert&atilde;o</p>
<p>&nbsp;</p>
<p>Labirinto do tempo, sou teu passageiro</p>
<p>Viajo em meu pr&oacute;prio estrangeiro</p>
<p>Pra onde esse amor me levar</p>
<p>Vou no deserto criar um jardim</p>
<p>E no oceano fundar um pa&iacute;s</p>
<p>E num futuro feliz eu s&oacute; penso em voltar</p>
<p>&nbsp;</p>
<p>Felicidade</p>
<p>Momento da vida que voa</p>
<p>Nos bra&ccedil;os de uma pessoa</p>
<p>Que a gente nem pensa em deixar</p>
<p>&nbsp;</p>
<p>Tarde de vento nas flores do mato</p>
<p>O tempo levou seu retrato</p>
<p>Deixou os meus olhos no ch&atilde;o</p>
<p>Juro que meu cora&ccedil;&atilde;o nem sabia</p>
<p>O brinquedo da nossa alegria</p>
<p>Era casa, comida e paix&atilde;o</p>
<p>&nbsp;</p>
<p>O seu nome ainda hoje eu escuto na rua</p>
<p>Mas saiba que o sol continua</p>
<p>Batendo no mesmo lugar</p>
<p>Ou ser&aacute; que voc&ecirc; se esqueceu de mim</p>
<p>Que a nossa saudade &eacute; t&atilde;o ruim</p>
<p>Que o melhor rem&eacute;dio &eacute; cantar?</p>
',
                'creditos' => '
<p>Arranjo: Luiz Ant&ocirc;nio</p>
<p>Sanfona: Dominguinhos</p>
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Guitarra portuguesa: Robertinho de Recife</p>
',
                'faixa_mp3' => '11_casa_comida_e_paixao.mp3',
                'faixa_ogg' => '11_casa_comida_e_paixao.ogg',
                'disco_id' => '22'));

        Musicas::create(
            array(
                'faixa' => 'Z&eacute; Esteves',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>Ai, quando eu lembro aquele beijo, aquele abra&ccedil;o</p>
<p>Longe no tempo e no espa&ccedil;o</p>
<p>Sem momento e sem lugar</p>
<p>O sentimento no meu peito d&aacute; um la&ccedil;o</p>
<p>Que eu n&atilde;o sei como desfa&ccedil;o</p>
<p>E vou cantando devagar, ai</p>
<p>Vou cantando devagar</p>
<p>Mas quando eu pego a cantar, viu</p>
<p>D&aacute; vontade de chorar</p>
<p>&nbsp;</p>
<p>A vida passa e a gente se encontra sozinho</p>
<p>Sem entender o caminho que tem pra seguir</p>
<p>Algum momento de carinho fez sentido</p>
<p>Mas agora est&aacute; perdido, n&atilde;o h&aacute; nada aqui</p>
<p>Quem ergue a ta&ccedil;a, come a fruta</p>
<p>E bebe o vinho sem pensar</p>
<p>Que vir&aacute; logo a saudade pra ficar?</p>
<p>Que vontade de chorar, viu</p>
<p>S&oacute; vontade de chorar</p>
<p>Que vontade de chorar, ai</p>
<p>Que vontade de chorar</p>
',
                'creditos' => '
<p>Arranjo e viol&atilde;o: Marcos Arcanjo</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Baixo: Jacar&eacute;</p>
<p>Sanfona: Severo</p>
<p>Violino: Paul de Castro</p>
<p>Flauta: C&eacute;sar Michiles</p>
',
                'faixa_mp3' => '12_ze_esteves.mp3',
                'faixa_ogg' => '12_ze_esteves.ogg',
                'disco_id' => '22'));

        Musicas::create(
            array(
                'faixa' => 'Meu Sublime Torr&atilde;o',
                'compositor' => '(Genival Macedo)',
                'letra' => '<p>Num recanto bonito do Brasil</p>
<p>Sorri a minha terra amada</p>
<p>Onde o azul do c&eacute;u &eacute; mais cor de anil</p>
<p>Onde o sol t&atilde;o quente</p>
<p>Parece mais gentil</p>
<p>&nbsp;</p>
<p><strong>Para&iacute;ba meu amor</strong></p>
<p>(Chico C&eacute;sar)</p>
<hr class="space-letra-top-musicas">
<p>Para&iacute;ba meu amor</p>
<p>Eu estava de sa&iacute;da, mas eu vou ficar</p>
<p>N&atilde;o quero chorar</p>
<p>O choro da despedida</p>
<p>O acaso da minha vida um dado n&atilde;o abolir&aacute;</p>
<p>&nbsp;</p>
<p>E vir&aacute;s bem dentro de mim</p>
<p>Como um S&atilde;o Jo&atilde;o sem fim</p>
<p>Queimando o sert&atilde;o</p>
<p>E a fogueirinha, lanterna de laser</p>
<p>Que ilumina os festejos do meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Hoje eu mando um abra&ccedil;o pra ti, pequenina</p>
<p>Para&iacute;ba hospitaleira</p>
<p>Morena brasileira</p>
<p>Do meu cora&ccedil;&atilde;o</p>

',
                'creditos' => '
<p>Arranjo e viola: Robertinho de Recife</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Baixo: Fa&iacute;sca Bass</p>
<p>Sanfona (introdu&ccedil;&atilde;o): Dominguinhos</p>
<p>Sanfona: Valdeci Ara&uacute;jo</p>
<p>Bateria: Arthur Cesar</p>
<p>Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o</p>
',
                'faixa_mp3' => '13_paraiba_meu_amor.mp3',
                'faixa_ogg' => '13_paraiba_meu_amor.ogg',
                'disco_id' => '22'));

        Musicas::create(
            array(
                'faixa' => 'A Palo Seco',
                'compositor' => '(Belchior)',
                'letra' => '<p>Se voc&ecirc; vier me perguntar por onde andei</p>
<p>No tempo em que voc&ecirc; sonhava</p>
<p>De olhos abertos lhe direi</p>
<p>Amigo, eu me desesperava</p>
<p>&nbsp;</p>
<p>Sei que assim falando pensas</p>
<p>Que esse desespero &eacute; moda em 76</p>
<p>Mas ando mesmo descontente</p>
<p>Desesperadamente eu grito em portugu&ecirc;s</p>
<p>Mas ando mesmo descontente</p>
<p>Desesperadamente eu grito em portugu&ecirc;s</p>
<p>&nbsp;</p>
<p>Tenho 25 anos de sonho e de sangue</p>
<p>E de Am&eacute;rica do Sul</p>
<p>Por for&ccedil;a deste destino</p>
<p>Um tango argentino</p>
<p>Me cai bem melhor que um blues</p>
<p>&nbsp;</p>
<p>Sei que assim falando pensas</p>
<p>Que esse desespero &eacute; moda em 76</p>
<p>Eu quero &eacute; que esse canto torto</p>
<p>Feito faca corte a carne de voc&ecirc;s</p>
<p>Eu quero &eacute; que esse canto torto</p>
<p>Feito faca corte a carne de voc&ecirc;s</p>

',
                'creditos' => '
<p>Arranjo, piano e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Contrabaixo: Jorge Helder</p>
<p>Guitarra: Zeppa Souza</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o: Paulinho He-Man e Marcos Amma</p>
',
                'faixa_mp3' => '01_a_palo_seco.mp3',
                'faixa_ogg' => '01_a_palo_seco.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Trem das Ilus&otilde;es',
                'compositor' => '(Alceu Valen&ccedil;a / Herbert Azul) Participa&ccedil;&atilde;o especial: <strong> Alceu Valen&ccedil;a</strong>',
                'letra' => '<p>Ah, se meu desejo voasse</p>
<p>Como ave, como p&aacute;ssaro</p>
<p>Lhe ca&ccedil;asse em toda parte</p>
<p>Provocasse sua compaix&atilde;o</p>
<p>&nbsp;</p>
<p>&Eacute; t&atilde;o pouco, muito louco</p>
<p>Ficar ouvindo sua voz pelo telefone</p>
<p>A can&ccedil;&atilde;o que n&oacute;s cantamos como trilha</p>
<p>Nessa noite de interroga&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>&Eacute; t&atilde;o pouco, muito louco</p>
<p>Ser flor e pedra em seu caminho</p>
<p>Sofrer, gemer quase em sil&ecirc;ncio</p>
<p>Morder seu nome no len&ccedil;o</p>
<p>Ver nossa hist&oacute;ria por um fio</p>
<p>&Eacute; t&atilde;o vazio</p>
<p>&nbsp;</p>
<p>Vai ver que esse trem que voc&ecirc; viaja</p>
<p>N&atilde;o tem janela n&atilde;o</p>
<p>N&atilde;o tem casa na colina</p>
<p>N&atilde;o tem p&ocirc;r-do-sol l&aacute; em cima</p>
<p>&Eacute; voc&ecirc; que est&aacute; cego e n&atilde;o me v&ecirc; viajando</p>
<p>Na mais cruel ilus&atilde;o</p>
<p>Ah, ah, ah, ah, ah, ah</p>
',
                'creditos' => '
<p>Arranjo, piano e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Contrabaixo: Jorge Helder</p>
<p>Guitarra e viol&atilde;o de a&ccedil;o: Zeppa Souza</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o: Paulinho He-Man e Marcos Amma</p>
',
                'faixa_mp3' => '02_trem_das_ilusoes.mp3',
                'faixa_ogg' => '02_trem_das_ilusoes.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'O Meu Amor',
                'compositor' => '(Chico Buarque)',
                'letra' => '<p>O meu amor</p>
<p>Tem um jeito manso que &eacute; s&oacute; seu</p>
<p>E que me deixa louca</p>
<p>Quando me beija a boca</p>
<p>Minha pele toda fica arrepiada</p>
<p>E me beija com calma e fundo</p>
<p>At&eacute; minh&rsquo;alma se sentir beijada</p>
<p>Ai</p>
<p>&nbsp;</p>
<p>O meu amor</p>
<p>Tem um jeito manso que &eacute; s&oacute; seu</p>
<p>Que rouba os meus sentidos</p>
<p>Viola os meus ouvidos</p>
<p>Com tantos segredos</p>
<p>Lindos e indecentes</p>
<p>Depois brinca comigo</p>
<p>Ri do meu umbigo</p>
<p>E me crava os dentes</p>
<p>Ai</p>
<p>&nbsp;</p>
<p>Eu sou sua menina, viu?</p>
<p>E ele &eacute; o meu rapaz</p>
<p>Meu corpo &eacute; testemunha</p>
<p>Do bem que ele me faz</p>
<p>&nbsp;</p>
<p>O meu amor</p>
<p>Tem um jeito manso que &eacute; s&oacute; seu</p>
<p>De me deixar maluca</p>
<p>Quando me ro&ccedil;a a nuca</p>
<p>E quase me machuca</p>
<p>Com a barba mal feita</p>
<p>E de pousar as coxas</p>
<p>Entre as minhas coxas</p>
<p>Quando ele se deita</p>
<p>Ai</p>
<p>&nbsp;</p>
<p>O meu amor</p>
<p>Tem um jeito manso que &eacute; s&oacute; seu</p>
<p>De me fazer rodeios</p>
<p>De me beijar os seios</p>
<p>Me beijar o ventre</p>
<p>Me deixar em brasa</p>
<p>Desfruta do meu corpo</p>
<p>Como se o meu corpo</p>
<p>Fosse a sua casa</p>
<p>Ai</p>
',
                'creditos' => '
<p>Arranjo, piano e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o de nylon e guitarra: Chiquinho Braga</p>
<p>Baixo: Jorge Helder</p>
<p>Bateria: Camilo Mariano</p>
<p>Sax alto e soprano: Z&eacute; Canuto</p>
<p>Percuss&atilde;o: Paulinho He-Man e Marcos Amma</p>
',
                'faixa_mp3' => '03_o_meu_amor.mp3',
                'faixa_ogg' => '03_o_meu_amor.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Não Sonho mais',
                'compositor' => '(Chico Buarque) Participa&ccedil;&atilde;o especial: <strong> Chico Buarque</strong>',
                'letra' => '<p>Hoje eu sonhei contigo</p>
<p>Tanta desdita</p>
<p>Amor nem te digo</p>
<p>Tanto castigo</p>
<p>Que eu tava aflita de te contar</p>
<p>&nbsp;</p>
<p>Foi um sonho medonho</p>
<p>Desses que &agrave;s vezes a gente sonha</p>
<p>Baba na fronha</p>
<p>Se urina toda</p>
<p>Quer sufocar</p>
<p>&nbsp;</p>
<p>Meu amor vi chegando</p>
<p>Um trem de candango</p>
<p>Formando um bando</p>
<p>Mas que era um bando</p>
<p>De orangotango pra te pegar</p>
<p>&nbsp;</p>
<p>Vinha nego humilhado</p>
<p>Vinha morto-vivo</p>
<p>Vinha flagelado de tudo que &eacute; lado</p>
<p>Vinha um bom motivo pra te esfolar</p>
<p>&nbsp;</p>
<p>Quanto mais tu corria, mais tu ficava</p>
<p>Mais atolava, mais te sujava</p>
<p>Amor, tu fedia</p>
<p>Empesteava o ar</p>
<p>&nbsp;</p>
<p>Tu que foi t&atilde;o valente</p>
<p>Chorou pra gente</p>
<p>Pediu piedade, olha que maldade</p>
<p>Me deu vontade de gargalhar</p>
<p>&nbsp;</p>
<p>Ao p&eacute; da ribanceira acabou-se a li&ccedil;a</p>
<p>Escarrei-te inteira a tua carni&ccedil;a</p>
<p>Tinha justi&ccedil;a nesse escarrar</p>
<p>&nbsp;</p>
<p>Te rasgamo a carca&ccedil;a</p>
<p>Descemo a ripa</p>
<p>Viramo as tripa</p>
<p>Comemo os ovo</p>
<p>Ai, aquele povo p&ocirc;s-se a cantar</p>
<p>&nbsp;</p>
<p>Foi um sonho medonho</p>
<p>Desses que &agrave;s vezes a gente sonha</p>
<p>E baba na fronha e se urina toda</p>
<p>E j&aacute; n&atilde;o tem paz</p>
<p>&nbsp;</p>
<p>Pois eu sonhei contigo e ca&iacute; da cama</p>
<p>Ai, amor, n&atilde;o briga, ai, n&atilde;o me castiga</p>
<p>Ai, diz que me ama</p>
<p>E eu n&atilde;o sonho mais</p>

',
                'creditos' => '
<p>Arranjo, piano e acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Contrabaixo: Jacar&eacute;</p>
<p>Guitarra: Zeppa Souza</p>
<p>Viola de 12 cordas: Manass&eacute;s</p>
<p>Bateria: Camilo Mariano</p>
<p>Flauta: David Ganc</p>
<p>Percuss&atilde;o: Paulinho He-Man e Marcos Amma</p>

',
                'faixa_mp3' => '04_nao_sonho_mais.mp3',
                'faixa_ogg' => '04_nao_sonho_mais.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Caju&iacute;na',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>Existirmos a que ser&aacute; que se destina?</p>
<p>Pois quando tu me deste a rosa pequenina</p>
<p>Vi que &eacute;s um homem lindo e que se acaso a sina</p>
<p>Do menino infeliz n&atilde;o se nos ilumina</p>
<p>T&atilde;o pouco turva-se a l&aacute;grima nordestina</p>
<p>Apenas a mat&eacute;ria vida era t&atilde;o fina</p>
<p>E &eacute;ramos olharmo-nos intacta retina</p>
<p>A caju&iacute;na cristalina em Teresina</p>
',
                'creditos' => '
<p>Arranjo: Duofel (Fernando Melo e Luiz Bueno)</p>
<p>Acordeom: Z&eacute; Am&eacute;rico Bastos</p>
<p>Contrabaixo: Jacar&eacute;</p>
<p>Viola de 12 cordas: Fernando Melo</p>
<p>Viol&atilde;o de nylon: Luiz Bueno</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o: Paulinho He-Man e Marcos Amma</p>
',
                'faixa_mp3' => '05_cajuina.mp3',
                'faixa_ogg' => '05_cajuina.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Ave de Prata',
                'compositor' => '(Z&eacute; Ramalho) Participa&ccedil;&atilde;o especial: <strong> Z&eacute; Ramalho</strong>',
                'letra' => '<p>&Eacute; muito mais do que muito</p>
<p>Muito mais do que quantos anos todos piorei</p>
<p>&Eacute; muito mais do que mata</p>
<p>Muito mais do que morrem todos pela planta do p&eacute;</p>
<p>&Eacute; muito mais do que fera</p>
<p>Mais do que bicho quando quer procriar</p>
<p>Uma esp&eacute;cie: sementes da &aacute;gua, mist&eacute;rios da luz</p>
<p>&nbsp;</p>
<p>&Eacute; muito mais do que antes</p>
<p>Mais do que vinte anos multiplicar</p>
<p>Dividir a mentira</p>
<p>Entre cabelos, olhos e furac&otilde;es</p>
<p>Inventar objetos</p>
<p>Pela esfinge quando era mulher</p>
<p>Ave de prata</p>
<p>Veneno de fogo</p>
<p>Vagalume do mar</p>
<p>&nbsp;</p>
<p>O mar que se acaba na areia</p>
<p>Gemidos da terra apoiados no ch&atilde;o</p>
<p>Entre todos que usam os dentes do arp&atilde;o</p>
<p>Apoiados em cada parede pela m&atilde;o</p>
<p>Pela m&atilde;o que criou tantas trevas e luz</p>
<p>&nbsp;</p>
<p>E cada coisa perdida</p>
<p>Perdidamente pode se apaixonar</p>
<p>Pela &uacute;ltima vida</p>
<p>Poucos amigos h&atilde;o de te procurar</p>
<p>Como &eacute; o sil&ecirc;ncio</p>
<p>E nesse momento tudo deve calar</p>
<p>Numa hist&oacute;ria que venha do povo</p>
<p>O ju&iacute;zo final</p>
',
                'creditos' => '
<p>Arranjo e viol&atilde;o de a&ccedil;o: Z&eacute; Ramalho</p>
<p>Viola de 12 cordas: Manasses</p>
<p>Contrabaixo: Artur Maia</p>
<p>Acordeom e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Percuss&atilde;o: Paulinho He-Man e Marcos Amma</p>
',
                'faixa_mp3' => '06_ave_de_prata.mp3',
                'faixa_ogg' => '06_ave_de_prata.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Palavra de Mulher',
                'compositor' => '(Chico Buarque)',
                'letra' => '<p>Vou voltar</p>
<p>Haja o que houver eu vou voltar</p>
<p>J&aacute; te deixei jurando nunca mais olhar pra tr&aacute;s</p>
<p>Palavra de mulher</p>
<p>Eu vou voltar</p>
<p>&nbsp;</p>
<p>Posso at&eacute;</p>
<p>Sair de bar em bar</p>
<p>Em bar em bar</p>
<p>Falar besteira e me enganar</p>
<p>Com qualquer um deitar a noite inteira</p>
<p>Eu vou te amar</p>
<p>&nbsp;</p>
<p>Vou chegar</p>
<p>A qualquer hora ao meu lugar</p>
<p>E se uma outra pretendia</p>
<p>Um dia te roubar</p>
<p>Dispensa essa vadia</p>
<p>Eu vou voltar</p>
<p>&nbsp;</p>
<p>Vou subir</p>
<p>A nossa escada, a escada</p>
<p>A escada, a escada</p>
<p>Meu amor, eu vou partir</p>
<p>De novo e sempre feito viciada</p>
<p>Eu vou voltar</p>
<p>&nbsp;</p>
<p>Pode ser</p>
<p>Que a nossa hist&oacute;ria seja mais</p>
<p>Uma quimera</p>
<p>E pode o nosso teto</p>
<p>A Lapa, o Rio desabar</p>
<p>&nbsp;</p>
<p>Pode ser</p>
<p>Que passe o nosso tempo</p>
<p>Como qualquer primavera</p>
<p>Espera</p>
<p>Me espera</p>
<p>Eu vou voltar</p>
',
                'creditos' => '
<p>Arranjo e cello: Jacques Morelenbaum</p>
<p>Viol&atilde;o: Luiz Brasil</p>
<p>Baixo ac&uacute;stico: Zeca Assun&ccedil;&atilde;o</p>
<p>Bateria: Carlos Bala</p>
<p>Violinos: Giancarlo Pareschi (spalla), Michel Bessler, Jos&eacute; Alves, Ricardo Amado, Walter Hack, Antonella Pareschi, Bernardo Bessler e Paschoal Perrotta</p>
<p>Violas: Jesu&iacute;na Passaroto e Marie Christine Bessler</p>
<p>Cellos: Alceu Reis e Marcelo Salles</p>
',
                'faixa_mp3' => '07_palavra_de_mulher.mp3',
                'faixa_ogg' => '07_palavra_de_mulher.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'N&oacute; Cego',
                'compositor' => '(Pedro Osmar) Participa&ccedil;&atilde;o especial: <strong> Lenine</strong>',
                'letra' => '<p>&Eacute; voc&ecirc; a pessoa que deu</p>
<p>Um n&oacute; cego em meu peito</p>
<p>De apaixonado, de apaixonado?</p>
<p>&Eacute; voc&ecirc; a pessoa que deu</p>
<p>Um n&oacute; cego em meu peito</p>
<p>De apaixonado, de apaixonado?</p>
<p>&nbsp;</p>
<p>&Eacute; voc&ecirc;</p>
<p>O mascarado que me trancou</p>
<p>O mascarado que me trancou</p>
<p>Nessa noite sem amor?</p>
<p>Nessa noite sem amor?</p>
<p>&nbsp;</p>
<p>&Eacute; voc&ecirc; amigo?</p>
<p>Voc&ecirc; o inimigo?</p>
<p>&Eacute; voc&ecirc; o perigo?</p>
<p>&Eacute; voc&ecirc;?</p>
<p>&Eacute; voc&ecirc; amigo?</p>
<p>Voc&ecirc; o inimigo?</p>
<p>&Eacute; voc&ecirc; o perigo?</p>
<p>&Eacute; voc&ecirc;?</p>
<p>&nbsp;</p>
<p>&Eacute; voc&ecirc; a garra de fome</p>
<p>Que atormenta o presente?</p>
<p>&Eacute; voc&ecirc; que mente muito?</p>
<p>&Eacute; voc&ecirc; a garra de fome</p>
<p>Que atormenta o presente?</p>
<p>&Eacute; voc&ecirc; que mente muito?</p>
<p>&nbsp;</p>
<p>Que me engana</p>
<p>Que me rouba da vida?</p>
<p>Que me engana</p>
<p>Que me rouba da vida?</p>
<p>Que me engana</p>
<p>Que me rouba da vida?</p>
',
                'creditos' => '
<p>Arranjo, piano e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Guitarra: Zeppa Souza</p>
<p>Viola de 12 cordas: Manass&eacute;s</p>
<p>Contrabaixo: Jacar&eacute;</p>
<p>Bateria: Camilo Mariano</p>
<p>Flautas: David Ganc</p>
<p>Percuss&atilde;o: Paulinho He-Man e Marcos Amma</p>
',
                'faixa_mp3' => '08_no_cego.mp3',
                'faixa_ogg' => '08_no_cego.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Imaculada',
                'compositor' => '(Ary Sperling / Aldir Blanc) Participa&ccedil;&atilde;o especial: <strong> Nana Caymmi</strong>',
                'letra' => '<p>Meu castelo &eacute; a casa da fazenda</p>
<p>Onde te&ccedil;o a minha lenda</p>
<p>Sei, meu pr&iacute;ncipe vir&aacute;</p>
<p>Esse sonho bom que me alimenta</p>
<p>A espera &eacute; menos lenta</p>
<p>Se o desejo delirar</p>
<p>&nbsp;</p>
<p>Eu prefiro assim</p>
<p>Pois com essa espera</p>
<p>Domo a fera que h&aacute; em mim</p>
<p>&Eacute; imaculada a semente do prazer</p>
<p>Rosa ardente por florescer</p>
<p>&nbsp;</p>
<p>A crian&ccedil;a deixa o para&iacute;so</p>
<p>Fadas, c&oacute;rregos, sorrisos</p>
<p>A pureza virginal</p>
<p>Planta no seu seio adolescente</p>
<p>A ma&ccedil;&atilde; e a serpente</p>
<p>Do pecado original</p>
<p>&nbsp;</p>
<p>Quero ser mulher</p>
<p>No lugar e hora que meu pr&iacute;ncipe quiser</p>
<p>E assim conquistada pela espada do querer</p>
<p>Continua a ser imaculada</p>
',
                'creditos' => '
<p>Arranjo e teclados: Wagner Tiso</p>
<p>Baixo ac&uacute;stico: Zeca Assun&ccedil;&atilde;o</p>
<p>Viol&otilde;es: Victor Biglione e Ana de Oliveira</p>
<p>Cello: Fernando Bru e David Chew</p>
<p>Viola: Nayran Pessanha</p>
<p>Obo&eacute;: Francisco Gon&ccedil;alves</p>
<p>Flauta em sol: Mauro Senise</p>
<p>Clarineta: Cristiano Alves</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
',
                'faixa_mp3' => '09_imaculada.mp3',
                'faixa_ogg' => '09_imaculada.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Sete Cantigas Para Voar',
                'compositor' => '(Vital Farias) Participa&ccedil;&atilde;o especial: <strong> Renata Arruda</strong>',
                'letra' => '<p>Cantiga de campo</p>
<p>De concentra&ccedil;&atilde;o</p>
<p>A gente bem sente</p>
<p>Com precis&atilde;o</p>
<p>Mas recordo a tua imagem</p>
<p>Naquela viagem</p>
<p>Que fiz pro sert&atilde;o</p>
<p>Eu que nasci na floresta</p>
<p>Canto e fa&ccedil;o festa no seu cora&ccedil;&atilde;o</p>
<p>Voa, voa azul&atilde;o</p>
<p>Voa, voa azul&atilde;o</p>
<p>&nbsp;</p>
<p>Cantiga de ro&ccedil;a</p>
<p>De um cego apaixonado</p>
<p>Cantiga de mo&ccedil;a</p>
<p>L&aacute; no cercado</p>
<p>Que canta a fauna e a flora</p>
<p>Ningu&eacute;m ignora</p>
<p>Se ela quer brotar</p>
<p>Boto uma flor no cabelo</p>
<p>Com alegria e zelo para n&atilde;o secar</p>
<p>Voa, voa no ar</p>
<p>Voa, voa no ar</p>
<p>&nbsp;</p>
<p>Cantiga de ninar</p>
<p>A crian&ccedil;a na rede</p>
<p>Mentira de &aacute;gua</p>
<p>&Eacute; matar a sede</p>
<p>Diz pra m&atilde;e que fui pro a&ccedil;ude</p>
<p>Fui pescar um peixe</p>
<p>Isso n&atilde;o fui n&atilde;o</p>
<p>Tava era com o namorado</p>
<p>Pra alegria e festa do meu cora&ccedil;&atilde;o</p>
<p>Voa, voa azul&atilde;o</p>
<p>Voa, voa azul&atilde;o</p>
<p>&nbsp;</p>
<p>Cantiga de &iacute;ndio</p>
<p>Que perdeu sua taba</p>
<p>No peito esse inc&ecirc;ndio</p>
<p>Seu n&atilde;o se apaga</p>
<p>Deixe o &iacute;ndio no seu canto</p>
<p>Que eu canto um acalanto</p>
<p>Fa&ccedil;o outra can&ccedil;&atilde;o</p>
<p>Deixe o peixe, deixe o rio</p>
<p>Que o rio &eacute; um fio de inspira&ccedil;&atilde;o</p>
<p>Voa, voa azul&atilde;o</p>
<p>Voa, voa azul&atilde;o</p>
<p>Voa, voa...</p>

',
                'creditos' => '
<p>Arranjo e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Dominguinhos</p>
<p>Contrabaixo: Jacar&eacute;</p>
<p>Viola de 12 cordas: Manasses</p>
<p>Viol&atilde;o de nylon: Zeppa Souza</p>
<p>Percuss&atilde;o: Paulinho He-Man e Marcos Amma</p>
<p>Vocais: Jussara Louren&ccedil;o e Tadeu Mathias</p>

',
                'faixa_mp3' => '10_sete_cantigas_para_voar.mp3',
                'faixa_ogg' => '10_sete_cantigas_para_voar.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Retrato da Vida',
                'compositor' => '(Djavan / Dominguinhos) Participa&ccedil;&atilde;o especial: <strong> Dominguinhos</strong>',
                'letra' => '<p>Esse matagal sem fim</p>
<p>Essa estrada, esse rio seco</p>
<p>Essa dor que mora em mim</p>
<p>N&atilde;o descansa e nem dorme cedo</p>
<p>O retrato da minha vida</p>
<p>&Eacute; amar em segredo</p>
<p>&nbsp;</p>
<p>N&atilde;o quer saber de mim</p>
<p>E eu vivendo da tua vida</p>
<p>Deus no c&eacute;u e voc&ecirc; aqui</p>
<p>A esperan&ccedil;a &eacute; quem me abriga</p>
<p>Esses campos n&atilde;o tardam em florir</p>
<p>J&aacute; se espera uma boa colheita</p>
<p>E tudo parece seguir</p>
<p>Fazendo a vida t&atilde;o direita</p>
<p>&nbsp;</p>
<p>Mas e voc&ecirc;, o que faz</p>
<p>Que n&atilde;o repara no ch&atilde;o</p>
<p>Por onde tem que passar</p>
<p>E pisa em meu cora&ccedil;&atilde;o?</p>
<p>O teu beijo em meu destino</p>
<p>Era tudo que eu queria</p>
<p>Ser meu homem, meu menino</p>
<p>O ser amado de todo dia</p>
',
                'creditos' => '
<p>Arranjo e viol&atilde;o: Luiz Brasil</p>
<p>Acordeom: Dominguinhos</p>
<p>Viola de 12 cordas: Manass&eacute;s</p>
<p>Contrabaixo: Alberto Continentino</p>
<p>Bateria: Carlos Bala</p>
<p>Percuss&atilde;o: Paulinho He-Man e Marcos Amma</p>
',
                'faixa_mp3' => '11_retrato_da_vida.mp3',
                'faixa_ogg' => '11_retrato_da_vida.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Kukukaya (Jogo da Asa da Bruxa)',
                'compositor' => '(C&aacute;tia de Fran&ccedil;a) Participa&ccedil;&atilde;o especial: <strong> Geraldo Azevedo</strong>',
                'letra' => '<p>S&atilde;o quatro jogadores nessa mesa</p>
<p>Frente a frente para jogar</p>
<p>S&atilde;o quatro cabras de peia no desafio</p>
<p>No jogo da bruxa em noite de lua cheia</p>
<p>S&atilde;o quatro jogadores nessa mesa</p>
<p>Dando as cartas do jogo sujo da vida</p>
<p>&nbsp;</p>
<p>Kukukaya, eu quero isso aqui, ei</p>
<p>Kukukaya, olha esse cachorro aqui, ei</p>
<p>Kukukaya, eu quero isso aqui</p>
<p>Kukukaya, olha esse cachorro aqui</p>
<p>&nbsp;</p>
<p>S&atilde;o quatro jogadores nessa mesa</p>
<p>Frente a frente, sem dar falsa folga a ningu&eacute;m</p>
<p>S&atilde;o quatro cabras de peia</p>
<p>De riso d&oacute;cil, de rima f&aacute;cil</p>
<p>N&atilde;o v&aacute; se enganar, hein meu bem?</p>
<p>&nbsp;</p>
<p>Eu tenho dois olhos, eu tenho dois p&eacute;s</p>
<p>Dos meus olhos v&aacute; pra meus p&eacute;s</p>
<p>Dos meus p&eacute;s, pra dentro da terra</p>
<p>Da terra para a morte</p>
<p>&nbsp;</p>
<p>O ovo &eacute; redondo, ventre redondo &eacute;</p>
<p>Vem amor, vem com sa&uacute;de</p>
<p>Onde eu sou chama seja voc&ecirc; brasa</p>
<p>Onde eu sou chuva seja voc&ecirc; &aacute;gua</p>
<p>Onde eu sou chama seja voc&ecirc; brasa</p>
<p>Onde eu sou chuva seja voc&ecirc; &aacute;gua</p>
<p>&nbsp;</p>
<p>Kukukaya, eu quero voc&ecirc; aqui</p>
<p>Kukukaya, preste aten&ccedil;&atilde;o em mim</p>
<p>Kukukaya, eu quero voc&ecirc; aqui</p>
<p>Kukukaya, preste aten&ccedil;&atilde;o em mim</p>
',
                'creditos' => '
<p>Arranjo: Geraldo Azevedo e Z&eacute; Am&eacute;rico Bastos</p>
<p>Teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viola de 10 cordas e viol&atilde;o: Geraldo Azevedo</p>
<p>Guitarra: Victor Biglione</p>
<p>Percuss&atilde;o: Paulinho He-Man e Marcos Amma</p>
',
                'faixa_mp3' => '12_kukukaya_jogo_da_asa_da_bruxa.mp3',
                'faixa_ogg' => '12_kukukaya_jogo_da_asa_da_bruxa.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Choveu Sorvete (La Salve de las Antillas)',
                'compositor' => '(Luis Kalaff / Vers&atilde;o: Carlinhos Brown)',
                'letra' => '<p>Na gandaia com sol solista</p>
<p>Viajar nesse ado&ccedil;ar</p>
<p>Nas cantigas das coisas belas</p>
<p>Da minha terra natal</p>
<p>&nbsp;</p>
<p>Abar&aacute;, louro, bolo, molho</p>
<p>Hoje quero saborear</p>
<p>Os beijos da timbaleira</p>
<p>Num cantinho l&aacute; dendo bar</p>
<p>&nbsp;</p>
<p>Choveu sorvete</p>
<p>Na minha origem</p>
<p>Choveu sorvete</p>
<p>Adeus princesa</p>
<p>&nbsp;</p>
<p>Nas barracas dos santos, l&iacute;rios</p>
<p>Haver&aacute; sempre uma cor</p>
<p>Ressaindo das ruas velhas</p>
<p>Servindo a vida de amor</p>
<p>&nbsp;</p>
<p>Santa B&aacute;rbara, S&atilde;o Ger&ocirc;nimo</p>
<p>E a Nan&atilde; Boroc&ocirc;</p>
<p>Ox&oacute;ssi, Ogum de ronda</p>
<p>Oxal&aacute; e pai Xang&ocirc;</p>
<p>&nbsp;</p>
<p>Embala, bala, baleira</p>
<p>E vamos na prociss&atilde;o</p>
<p>A &aacute;gua de cheiro cheira</p>
<p>Bonfim quer ver Concei&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo, piano e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Contrabaixo: Arlindo Pipiu</p>
<p>Guitarra: Zeppa Souza</p>
<p>Bateria e percuss&atilde;o: Camilo Mariano</p>
<p>Percuss&atilde;o: Paulinho He-Man e Marcos Amma</p>
<p>Saxofone: Roberto Stepheson</p>
<p>Trombone: Roberto Marques</p>
<p>Trompete: Paulinho Trompete</p>
<p>Vocais: Elba Ramalho, Jussara Louren&ccedil;o, Tadeu Mathias e Paulinho He-Man</p>
',
                'faixa_mp3' => '13_choveu_sorvete.mp3',
                'faixa_ogg' => '13_choveu_sorvete.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Quem &eacute; Muito Querido a Mim',
                'compositor' => '(Geraldo Azevedo / Rog&eacute;rio Duarte) Participa&ccedil;&atilde;o especial: <strong> Margareth Menezes</strong>',
                'letra' => '<p>Aquele que n&atilde;o inveja</p>
<p>Que &eacute; amigo sincero</p>
<p>De todos os seres vivos</p>
<p>Que n&atilde;o tem senso de posse</p>
<p>Que tem a mesma atitude</p>
<p>Na tristeza ou na alegria</p>
<p>Que &eacute; sempre determinado</p>
<p>Tendo a mente e o intelecto</p>
<p>Harmonizados comigo</p>
<p>&Eacute; muito querido a mim</p>
<p>Harmonizados comigo</p>
<p>&Eacute; muito querido a mim</p>
<p>&nbsp;</p>
<p>Quem nunca perturba os outros</p>
<p>Nem se deixa perturbar</p>
<p>Al&eacute;m da dualidade</p>
<p>Do sofrimento e prazer</p>
<p>Livre do medo e da ang&uacute;stia</p>
<p>Tamb&eacute;m &eacute; muito querido</p>
<p>Aquele que n&atilde;o se apega</p>
<p>Nem ao prazer, nem &agrave; dor</p>
<p>Que n&atilde;o rejeita ou deseja</p>
<p>Ao que agrada ou aborrece</p>
<p>Renunciando igualmente</p>
<p>&Eacute; muito querido a mim</p>
<p>Renunciando igualmente</p>
<p>&Eacute; muito querido a mim</p>
<p>&nbsp;</p>
<p>Quem age do mesmo modo</p>
<p>Com amigos e inimigos</p>
<p>E n&atilde;o muda de atitude</p>
<p>No ostracismo ou na gl&oacute;ria</p>
<p>No sucesso ou no fracasso</p>
<p>Quem nunca se contamina</p>
<p>E sempre fica contente</p>
<p>Com o que lhe &eacute; oferecido</p>
<p>Este me &eacute; muito querido</p>
<p>&Eacute; muito querido a mim</p>
<p>Este me &eacute; muito querido</p>
<p>&Eacute; muito querido a mim</p>
',
                'creditos' => '
<p>Arranjo: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o: Zeppa Souza</p>
<p>Viol&atilde;o de 12 cordas e zig-zum: Luiz Bueno</p>
<p>Contrabaixo: Jacar&eacute;</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o: Paulinho He-Man e Marcos Amma</p>
',
                'faixa_mp3' => '14_quem_e_muito_querido_a_mim.mp3',
                'faixa_ogg' => '14_quem_e_muito_querido_a_mim.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Caldeir&atilde;o dos Mitos',
                'compositor' => '(Br&aacute;ulio Tavares)',
                'letra' => '<p>Eu vi o c&eacute;u &agrave; meia-noite</p>
<p>Se avermelhando num clar&atilde;o</p>
<p>Como o inc&ecirc;ndio anunciado</p>
<p>No Apocalipse de S&atilde;o Jo&atilde;o</p>
<p>Por&eacute;m n&atilde;o era nada disso</p>
<p>Era um corisco, era um lampi&atilde;o</p>
<p>&nbsp;</p>
<p>Eu vi um risco nos espa&ccedil;os</p>
<p>Era o rev&ocirc;o de um sanha&ccedil;&uacute;</p>
<p>Eu vi o dia amanhecendo</p>
<p>No ronco do maracatu</p>
<p>N&atilde;o era a lan&ccedil;a de S&atilde;o Jorge</p>
<p>Era o espinho do mandacaru</p>
<p>&nbsp;</p>
<p>Eu vi um som na escadaria</p>
<p>D&oacute;-re-mi-f&aacute; sol-l&aacute;-si-d&oacute;</p>
<p>N&atilde;o era o eco das trombetas</p>
<p>De Josu&eacute; em Jeric&oacute;</p>
<p>Era um fole de oito baixo</p>
<p>A tocar numa noite de forr&oacute;</p>
<p>&nbsp;</p>
<p><em>A fogueira t&aacute; queimando</em></p>
<p><em>Em homenagem a S&atilde;o Jo&atilde;o</em></p>
<p><em>O forr&oacute; j&aacute; come&ccedil;ou</em></p>
<p><em>Vamo gente rapap&eacute; nesse sal&atilde;o</em></p>
<p>&nbsp;</p>
<p>Eu vi um som ao meio-dia</p>
<p>No meio do ch&atilde;o do Cear&aacute;</p>
<p>N&atilde;o era o coro dos arcanjos</p>
<p>Nem era a voz de Jeov&aacute;</p>
<p>Era uma cascavel armando um bote</p>
<p>Balan&ccedil;ando o marac&aacute;</p>
<p>&nbsp;</p>
<p>Vi um magrelo amarelado</p>
<p>Passando a perna no patr&atilde;o</p>
<p>N&atilde;o foi ningu&eacute;m da Inglaterra</p>
<p>Nem de Paris, nem do Jap&atilde;o</p>
<p>Era o Pedro Malazarte, era Jo&atilde;o Grilo</p>
<p>E era Canc&atilde;o</p>
<p>&nbsp;</p>
<p>Vi uma m&atilde;o fazer no barro</p>
<p>Um homem forte, um homem nu</p>
<p>Um homem branco como eu</p>
<p>Um homem preto como tu</p>
<p>Por&eacute;m n&atilde;o foi a m&atilde;o de Deus</p>
<p>Foi Vitalino de Caruaru</p>
<p>Por&eacute;m n&atilde;o foi a m&atilde;o de Deus</p>
<p>Foi Vitalino de Caruaru</p>
<p>Por&eacute;m n&atilde;o foi a m&atilde;o de Deus</p>
<p>Foi Vitalino de Caruaru</p>
',
                'creditos' => '
',
                'faixa_mp3' => '01_caldeirao_dos_mitos.mp3',
                'faixa_ogg' => '01_caldeirao_dos_mitos.ogg',
                'disco_id' => '23'));
        Musicas::create(
            array(
                'faixa' => 'Amor com Caf&eacute;',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Se voc&ecirc; quiser o meu amor</p>
<p>Tem que ser assim</p>
<p>Agarradinho, escondidinho</p>
<p>Bem bonitinho</p>
<p>Somente pra mim</p>
<p>&nbsp;</p>
<p>E de manh&atilde; cedo</p>
<p>Fazer o caf&eacute;</p>
<p>Trazer na cama</p>
<p>Depois do caf&eacute;</p>
<p>A gente se ama</p>
<p>A gente se gama</p>
<p>Depois do caf&eacute;</p>
<p>&nbsp;</p>
<p>Ficar o dia inteiro</p>
<p>Nesse d&aacute;-me, d&aacute;-me</p>
<p>Nesse toma, toma</p>
<p>Nesse pega, pega</p>
<p>Nesse coma, coma</p>
<p>Nessa brincadeira</p>
<p>Sem ningu&eacute;m dar f&eacute;</p>
<p>&nbsp;</p>
<p>Que o dia vai acabar</p>
<p>E a noite j&aacute; vem</p>
<p>O nosso amor pegando fogo</p>
<p>Vamos se queimar</p>
<p>Levar a vida nesse jogo</p>
<p>Pra se ganhar</p>
<p>Muito mais se querer bem</p>
',
                'creditos' => '
',
                'faixa_mp3' => '02_amor_com_cafe.mp3',
                'faixa_ogg' => '02_amor_com_cafe.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Forr&oacute; do Xenhenh&eacute;m',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Morena forrozeira do cangote suado</p>
<p>T&ocirc; ficando arriado com voc&ecirc; meu bem</p>
<p>Com esse rebolado teu corpinho fica mole</p>
<p>E nesse bole-bole, nesse vai-e-vem</p>
<p>O cora&ccedil;&atilde;o da gente chega lateja</p>
<p>A gente s&oacute; deseja passar bem</p>
<p>Com voc&ecirc; meu bem no xenhenh&eacute;m</p>
<p>No xenhenh&eacute;m, no xenhenh&eacute;m</p>
<p>Com voc&ecirc; meu bem no xenhenh&eacute;m</p>
<p>No xenhenh&eacute;m, no xenhenh&eacute;m</p>
<p>&nbsp;</p>
<p>Quem foi esse inteligente que inventou o forr&oacute;?</p>
<p>Fez a morena levantar p&oacute;</p>
<p>Ele &eacute; um artista, trabalhou bem</p>
<p>E a morena forrozeira &eacute; de quem</p>
<p>Tiver disposto pra ganhar no xenhenh&eacute;m</p>
<p>&nbsp;</p>
<p>Xenhenh&eacute;m, xenhenh&eacute;m, xenhenh&eacute;m</p>
<p>Xenhenh&eacute;m, xenhenh&eacute;m, xenhenh&eacute;m</p>
<p>Xenhenh&eacute;m, xenhenh&eacute;m, xenhenh&eacute;m</p>
<p>Vou fazer tudo pra ganhar no xenhenh&eacute;m</p>
',
                'creditos' => '
',
                'faixa_mp3' => '03_forro_do_xenhenhem.mp3',
                'faixa_ogg' => '03_forro_do_xenhenhem.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Agora &eacute; Sua Vez',
                'compositor' => '(Zinho)',
                'letra' => '<p>Eu j&aacute; tomei de conta</p>
<p>Eu j&aacute; dei meu recado</p>
<p>J&aacute; fiz meu peneirado</p>
<p>Com voc&ecirc; no forroz&atilde;o</p>
<p>&nbsp;</p>
<p>Meu bem n&atilde;o diga n&atilde;o</p>
<p>Meu bem diga que sim</p>
<p>Agora &eacute; sua vez</p>
<p>De tomar de conta de mim</p>
<p>&nbsp;</p>
<p>Vem pra c&aacute; meu amor</p>
<p>Vem pra c&aacute; meu amor</p>
<p>Vem tomar de conta do meu cora&ccedil;&atilde;o</p>
<p>Mas se voc&ecirc; disser que n&atilde;o</p>
<p>N&atilde;o tem quentura no sal&atilde;o</p>
<p>&nbsp;</p>
<p>Chega pra c&aacute;</p>
<p>Vem se espalhar, meu bem</p>
<p>Que a noite &eacute; nossa</p>
<p>N&atilde;o se importe com ningu&eacute;m</p>
<p>Meu bem</p>
<p>Aqui no forroz&atilde;o</p>
<p>Por favor, n&atilde;o diga n&atilde;o</p>
<p>Vem pra c&aacute; meu bem querer</p>
<p>&nbsp;</p>
<p>E nessa brincadeira</p>
<p>Quem vai tomar de conta de mim &eacute; voc&ecirc;</p>
<p>E nessa brincadeira</p>
<p>Quem vai tomar de conta de mim &eacute; voc&ecirc;</p>
<p>&nbsp;</p>
<p><strong>Forr&oacute; das cumadres</strong></p>
<p>(Jo&atilde;o Silva)</p>
<hr class="space-letra-top-musicas">
<p>Olha comadre semana que vem</p>
<p>No terreiro l&aacute; de casa semana que vem</p>
<p>Vai ter uma sanfoneirada semana que vem</p>
<p>Eu vou dar uma forrozada semana que vem</p>
<p>&nbsp;</p>
<p>V&aacute; no gog&oacute; comadre, v&aacute; no gog&oacute;</p>
<p>Pra gandalhada escangalhar-se no forr&oacute;</p>
<p>V&aacute; no gog&oacute; comadre, v&aacute; no gog&oacute;</p>
<p>Pra gandalhada escangalhar-se no forr&oacute;</p>
<p>&nbsp;</p>
<p>&Ecirc;, &ecirc;ta, que coisa boa!</p>
<p>Ningu&eacute;m gosta de forr&oacute; mais do que eu</p>
<p>At&eacute; acho que esse povo &eacute; todo meu</p>
<p>E de repente o mundo fica miudinho</p>
<p>E &eacute; por isso que eu s&oacute; dan&ccedil;o agarradinha</p>
<p>&nbsp;</p>
<p>Duas coisas dou valor</p>
<p>&Eacute; o forr&oacute; com sanfoninha</p>
<p>E o fungar do meu amor</p>
',
                'creditos' => '
',
                'faixa_mp3' => '04_agora_e_sua_vez_forro_das_cumadres.mp3',
                'faixa_ogg' => '04_agora_e_sua_vez_forro_das_cumadres.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => '&Eacute; d&rsquo;Oxum',
                'compositor' => '(Ger&ocirc;nimo / Vev&eacute; Calazans) Participa&ccedil;&atilde;o especial: <strong> Ger&ocirc;nimo</strong>',
                'letra' => '<p>Nessa cidade todo mundo &eacute; d&rsquo;Oxum</p>
<p>Homem, menino, menina, mulher</p>
<p>Toda essa gente irradia magia</p>
<p>&nbsp;</p>
<p>Presente na &aacute;gua doce</p>
<p>Presente na &aacute;gua salgada</p>
<p>E toda cidade brilha</p>
<p>&nbsp;</p>
<p>Seja tenente ou filho de pescador</p>
<p>Ou importante desembargador</p>
<p>Se der presente &eacute; tudo uma coisa s&oacute;</p>
<p>&nbsp;</p>
<p>A for&ccedil;a que mora n&rsquo;&aacute;gua</p>
<p>N&atilde;o faz distin&ccedil;&atilde;o de cor</p>
<p>E toda a cidade &eacute; d&rsquo;Oxum</p>
<p>&nbsp;</p>
<p>&Eacute; d&rsquo;Oxum, &eacute; d&rsquo;Oxum</p>
<p>&Eacute; d&rsquo;Oxum</p>
<p>&nbsp;</p>
<p>Eu vou navegar</p>
<p>Eu vou navegar nas ondas do mar</p>
<p>Eu vou navegar</p>
',
                'creditos' => '
',
                'faixa_mp3' => '05_e_doxum.mp3',
                'faixa_ogg' => '05_e_doxum.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Pisa na Ful&ocirc;',
                'compositor' => 'Jo&atilde;o do Vale / Ernesto Pires / Silveira J&uacute;nior',
                'letra' => '<p>Pisa na ful&ocirc;</p>
<p>Pisa na ful&ocirc;</p>
<p>Pisa na ful&ocirc;</p>
<p>N&atilde;o maltrate meu amor</p>
<p>&nbsp;</p>
<p>Um dia desse</p>
<p>Eu fui dan&ccedil;ar l&aacute; em Pedreira</p>
<p>Na rua da golada</p>
<p>Gostei da brincadeira</p>
<p>Z&eacute; Caxang&aacute; era o tocador</p>
<p>Mas s&oacute; tocava &ldquo;Pisa na ful&ocirc;&rdquo;</p>
<p>&nbsp;</p>
<p>Eu vi menina</p>
<p>Nem tinha doze anos</p>
<p>Agarrar seu par</p>
<p>Tamb&eacute;m sair dan&ccedil;ando</p>
<p>Satisfeita e dizendo</p>
<p>&ldquo;Meu amor, ai como &eacute; gostoso</p>
<p>Pisa no ful&ocirc;&rdquo;</p>
<p>&nbsp;</p>
<p><strong>Choror&ocirc;</strong></p>
<p>(Gilberto Gil)</p>
<hr class="space-letra-top-musicas">
<p>Tenho pena de quem chora</p>
<p>De quem chora tenho d&oacute;</p>
<p>Quando o choro de quem chora</p>
<p>N&atilde;o &eacute; choro, &eacute; choror&ocirc;</p>
<p>&nbsp;</p>
<p>Quando uma pessoa chora seu choro baixinho</p>
<p>De l&aacute;grima a correr pelo cantinho do olhar</p>
<p>N&atilde;o se pode duvidar</p>
<p>Da raz&atilde;o daquela dor</p>
<p>N&atilde;o se pode atrapalhar</p>
<p>Sentindo seja o que for</p>
<p>&nbsp;</p>
<p>Mas quando a pessoa chora o choro em desatino</p>
<p>Batendo pino como quem vai se arrebentar</p>
<p>A&iacute; penso que &eacute; melhor</p>
<p>Ajudar aquela dor</p>
<p>A encontrar o seu lugar</p>
<p>No meio do choror&ocirc;</p>
<p>&nbsp;</p>
<p>Choror&ocirc;, choror&ocirc;, choror&ocirc;</p>
<p>&Eacute; muita &aacute;gua, &eacute; magoa, &eacute; jeito bobo de chorar</p>
<p>Choror&ocirc;, choror&ocirc;, choror&ocirc;</p>
<p>&Eacute; m&aacute;goa, &eacute; muita &aacute;gua, a gente pode se afogar</p>
<p>&nbsp;</p>
<p>Choror&ocirc;, choror&ocirc;, choror&ocirc;</p>
<p>&Eacute; muita &aacute;gua, &eacute; magoa, &eacute; jeito bobo de chorar</p>
<p>Choror&ocirc;, choror&ocirc;, choror&ocirc;</p>
<p>&Eacute; muita m&aacute;goa, &eacute; &aacute;gua, a gente pode se afogar</p>
<p>&nbsp;</p>
<p><strong>No meu p&eacute; de serra</strong></p>
<p>(Luiz Gonzaga)</p>
<hr class="space-letra-top-musicas">
<p>L&aacute; no meu p&eacute; de serra</p>
<p>Deixei ficar meu cora&ccedil;&atilde;o</p>
<p>Ai que saudades tenho</p>
<p>Eu vou voltar pro meu sert&atilde;o</p>
<p>&nbsp;</p>
<p>No meu ro&ccedil;ado eu trabalhava todo dia</p>
<p>Mas no meu rancho eu tinha tudo que queria</p>
<p>L&aacute; se dan&ccedil;ava quase toda quinta-feira</p>
<p>Sanfona n&atilde;o faltava e tome xote a noite inteira</p>
<p>&nbsp;</p>
<p>O xote &eacute; bom</p>
<p>De se dan&ccedil;ar</p>
<p>A gente gruda na cabocla sem soltar</p>
<p>Um passo l&aacute;</p>
<p>Um outro c&aacute;</p>
<p>Enquanto o fole t&aacute; tocando</p>
<p>T&aacute; gemendo, t&aacute; chorando, t&aacute; fungando</p>
<p>Reclamando sem parar</p>
',
                'creditos' => '
',
                'faixa_mp3' => '06_pisa_na_fulo_chororo_no_meu_pe_de_serra.mp3',
                'faixa_ogg' => '06_pisa_na_fulo_chororo_no_meu_pe_de_serra.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Av&ocirc;hai',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>Um velho cruza a soleira</p>
<p>De botas longas, de barbas longas</p>
<p>De ouro o brilho do seu colar</p>
<p>Na laje fria onde quarava sua camisa</p>
<p>E seu alforje de ca&ccedil;ador</p>
<p>&nbsp;</p>
<p>&Ocirc; meu velho e invis&iacute;vel av&ocirc;hai</p>
<p>&Oacute; meu velho e indivis&iacute;vel av&ocirc;hai</p>
<p>&nbsp;</p>
<p>Neblina turva e brilhante</p>
<p>Em meu c&eacute;rebro co&aacute;gulos de sol</p>
<p>A manita matutina</p>
<p>E que transparente cortina ao meu redor</p>
<p>&nbsp;</p>
<p>E se eu disser que &eacute; mei sabido</p>
<p>Voc&ecirc; diz que &eacute; mei pior</p>
<p>Mais e pior do que planeta</p>
<p>Quando perde o girassol</p>
<p>&nbsp;</p>
<p>Era o ter&ccedil;o de brilhante nos dedos de minha av&oacute;</p>
<p>E nunca mais eu tive medo da porteira</p>
<p>Nem tamb&eacute;m da companheira</p>
<p>Que nunca dormia s&oacute;</p>
<p>&nbsp;</p>
<p>Av&ocirc;hai!</p>
<p>Av&ocirc;hai!</p>
<p>&nbsp;</p>
<p>Um brejo cruza a poeira</p>
<p>De fato existe num tom mais leve</p>
<p>Na palidez desse pessoal</p>
<p>Pares de olhos t&atilde;o profundos</p>
<p>Que amargam as pessoas que fitar</p>
<p>&nbsp;</p>
<p>Mas que bebem sua vida</p>
<p>Sua alma na altura que mandar</p>
<p>S&atilde;o os olhos, s&atilde;o as asas</p>
<p>Cabelos de av&ocirc;hai</p>
<p>&nbsp;</p>
<p>Na pedra de turmalina</p>
<p>E no terreiro da usina eu me criei</p>
<p>Voava de madrugada</p>
<p>E na cratera condenada eu me calei</p>
<p>&nbsp;</p>
<p>Se eu calei foi de tristeza</p>
<p>Voc&ecirc; cala por calar</p>
<p>E calado vai ficando</p>
<p>S&oacute; fala quando eu mandar</p>
<p>&nbsp;</p>
<p>Rebuscando a consci&ecirc;ncia com medo de viajar</p>
<p>At&eacute; o meio da cabe&ccedil;a do cometa</p>
<p>Girando na carrapeta</p>
<p>No jogo de improvisar</p>
<p>&nbsp;</p>
<p>Entrecortando</p>
<p>Eu sigo dentro a linha reta</p>
<p>Eu tenho a palavra certa</p>
<p>Pra doutor n&atilde;o reclamar</p>
<p>&nbsp;</p>
<p>Av&ocirc;hai! Av&ocirc; e pai</p>
<p>Av&ocirc;hai!</p>
<p>Av&ocirc;hai!</p>
<p>Av&ocirc;hai</p>
',
                'creditos' => '
',
                'faixa_mp3' => '07_avohai.mp3',
                'faixa_ogg' => '07_avohai.ogg',
                'disco_id' => '23'));
        Musicas::create(
            array(
                'faixa' => 'Le&atilde;o do Norte',
                'compositor' => '(Lenine / Paulo C&eacute;sar Pinheiro)',
                'letra' => '<p>Eu sou mameluco</p>
<p>Sou de Casa Forte</p>
<p>Sou de Pernambuco</p>
<p>Eu sou o Le&atilde;o do Norte</p>
<p>&nbsp;</p>
<p>Sou cora&ccedil;&atilde;o do folclore nordestino</p>
<p>Eu sou Mateus e Basti&atilde;o do boi bumb&aacute;</p>
<p>Sou o boneco de mestre Vitalino</p>
<p>Dan&ccedil;ando uma ciranda em Itamarac&aacute;</p>
<p>&nbsp;</p>
<p>Eu sou um verso de Carlos Pena Filho</p>
<p>Num frevo de Capiba</p>
<p>Ao som da Orquestra Armorial</p>
<p>Sou Capibaribe num livro de Jo&atilde;o Cabral</p>
<p>&nbsp;</p>
<p>Sou mamulengo de S&atilde;o Bento da Una</p>
<p>Vindo num baque solto de um maracatu</p>
<p>Eu sou um auto de Ariano Suassuna</p>
<p>No meio da feira de Caruaru</p>
<p>&nbsp;</p>
<p>Sou Frei Caneca no Pastoril do Faceta</p>
<p>Levando a Flor da Lira pra Nova Jerusal&eacute;m</p>
<p>Sou Luiz Gonzaga</p>
<p>E eu sou do mangue tamb&eacute;m</p>
<p>&nbsp;</p>
<p>Sou Macambira de Joaquim Cardoso</p>
<p>Banda da Pife no mei do carnaval</p>
<p>Na noite dos tambores silenciosos</p>
<p>Sou a calunga revelando o carnaval</p>
<p>&nbsp;</p>
<p>Sou a folia que desce l&aacute; de Olinda</p>
<p>O Homem da Meia-Noite</p>
<p>Eu sou puxando esse cord&atilde;o</p>
<p>Sou jangadeiro na festa de Jaboat&atilde;o</p>
',
                'creditos' => '
',
                'faixa_mp3' => '08_leao_do_norte.mp3',
                'faixa_ogg' => '08_leao_do_norte.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Batida de Trem',
                'compositor' => '(Vicente Barreto / Carlos Pita)',
                'letra' => '<p>Cantando esse bai&atilde;o</p>
<p>Aperriado com a sorte</p>
<p>Felicidade n&atilde;o vem</p>
<p>&Eacute; uma cantiga de cego</p>
<p>&Eacute; uma sanfona tocando</p>
<p>Parece batida de trem</p>
<p>&nbsp;</p>
<p>Sou cantador da alegria</p>
<p>Me chamam de Andorinha</p>
<p>Nas festas l&aacute; do sert&atilde;o</p>
<p>Estrela da primavera</p>
<p>Pra onde for vou com ela</p>
<p>Pra esquecer da solid&atilde;o</p>
<p>&nbsp;</p>
<p>Pra entrar nesse forr&oacute;</p>
<p>Vem meu amor</p>
<p>Do seu nego tenha d&oacute;</p>
<p>Vem meu amor</p>
<p>Ponha a m&atilde;o no cora&ccedil;&atilde;o</p>
<p>Vem meu amor</p>
<p>Pra meu bem n&atilde;o ficar s&oacute;</p>
<p>Vem meu amor</p>
<p>&nbsp;</p>
<p><strong>Toque de fole</strong></p>
<p>(Bastinho Calixto / Ana Paula)</p>
<hr class="space-letra-top-musicas">
<p>Toque sanfoneiro</p>
<p>Um forr&oacute; bem animado</p>
<p>Com cad&ecirc;ncia de xaxado</p>
<p>Da poeira levantar</p>
<p>&nbsp;</p>
<p>Toque sanfoneiro</p>
<p>Que as mulheres t&atilde;o visando</p>
<p>O fole frouxo tocando</p>
<p>Castigando a nota l&aacute;</p>
<p>&nbsp;</p>
<p>Toque sanfoneiro</p>
<p>Mostre que &eacute; velho macho</p>
<p>Capriche nos oito baixos</p>
<p>At&eacute; o dia clarear</p>
<p>&nbsp;</p>
<p>Toque sanfoneiro, toque</p>
<p>Porque a gente quer se esbaldar</p>
<p>Toque sanfoneiro, toque</p>
<p>Porque a gente quer dan&ccedil;ar</p>
<p>&nbsp;</p>
<p>Dedo no couro &eacute; pandeirada</p>
<p>M&atilde;o no zabumba &eacute; zabumbada</p>
<p>E no tri&acirc;ngulo &eacute; trianglada, oi</p>
<p>Dedo no fole &eacute; forrozada</p>
',
                'creditos' => '
',
                'faixa_mp3' => '09_batida_de_trem_toque_de_fole.mp3',
                'faixa_ogg' => '09_batida_de_trem_toque_de_fole.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Roendo Unha',
                'compositor' => '(Luiz Gonzaga / Luiz Ramalho)',
                'letra' => '<p>Quando Vinvin cantou</p>
<p>Corri pra ver voc&ecirc;</p>
<p>Atr&aacute;s da serra, o sol tava pra se esconder</p>
<p>Quando voc&ecirc; partiu</p>
<p>Eu n&atilde;o me esque&ccedil;o mais</p>
<p>Meu cora&ccedil;&atilde;o, amor, partiu atr&aacute;s</p>
<p>&nbsp;</p>
<p>Vivo com os olhos na ladeira</p>
<p>Quando vejo uma poeira</p>
<p>Penso logo que &eacute; voc&ecirc;</p>
<p>Vivo de orelha levantada</p>
<p>Para o lado da estrada</p>
<p>Que atravessa o mu&ccedil;amb&ecirc;</p>
<p>Olha que eu j&aacute; t&ocirc; roendo unha</p>
<p>A saudade &eacute; testemunha</p>
<p>Do que agora vou dizer</p>
<p>Quando na janela eu me debru&ccedil;o</p>
<p>Meu cantar &eacute; um solu&ccedil;o</p>
<p>A galopar no ma&ccedil;ap&ecirc;</p>
<p>&nbsp;</p>
<p><strong>No som da sanfona</strong></p>
<p>(Kak&aacute; do Asfalto / Jackson do Pandeiro)</p>
<hr class="space-letra-top-musicas">
<p>Ouvi o toque da sanfona me chamar</p>
<p>Ouvi o toque da sanfona me chamar</p>
<p>&nbsp;</p>
<p>Um sanfoneiro bem maneiro puxe o fole</p>
<p>Folia a noite inteira at&eacute; o dia clarear</p>
<p>O cabra vem se aconchegando, se relando</p>
<p>Quando o pagode esquenta</p>
<p>Ningu&eacute;m quer sair de l&aacute;</p>
<p>&nbsp;</p>
<p>&Ecirc;ta pagode que t&aacute; bom</p>
<p>Que t&aacute; danado</p>
<p>Morena aqui do lado faz o boneco chorar</p>
<p>Chora, n&atilde;o chora</p>
<p>Morena disse que chora</p>
<p>No som de uma viola faz o corpo balan&ccedil;ar</p>
<p>&nbsp;</p>
<p>Quem &eacute; sambeiro, batuqueiro, forrozeiro</p>
<p>Tem privil&eacute;gio agora so&ccedil;aite particular</p>
<p>Agora toda classe alta quer xaxar</p>
<p>Forr&oacute; de brasileiro chegou em todo lugar</p>
<p>&nbsp;</p>
<p><strong>Morena de Angola</strong></p>
<p>(Chico Buarque)</p>
<hr class="space-letra-top-musicas">
<p>Morena de Angola</p>
<p>Que leva o chocalho amarrado na canela</p>
<p>Ser&aacute; que ela mexe o chocalho</p>
<p>Ou o chocalho &eacute; que mexe com ela</p>
<p>&nbsp;</p>
<p>Ser&aacute; que a morena cochila</p>
<p>Escutando o cochicho do chocalho</p>
<p>Ser&aacute; que desperta gingando</p>
<p>J&aacute; sai chocalhando pro trabalho</p>
<p>&nbsp;</p>
<p>Ser&aacute; que ela t&aacute; na cozinha</p>
<p>Guisando a galinha &agrave; cabidela</p>
<p>Ser&aacute; que esqueceu da galinha</p>
<p>Ficou batucando na panela</p>
<p>&nbsp;</p>
<p>Ser&aacute; que no meio da mata, na moita</p>
<p>A morena inda chocalha</p>
<p>Ser&aacute; que ela n&atilde;o fica afoita</p>
<p>Pra dan&ccedil;ar na chama da batalha</p>
<p>&nbsp;</p>
<p>Morena de Angola</p>
<p>Que leva o chocalho amarrado na canela</p>
<p>Passando pelo regimento</p>
<p>Ela faz requebrar a sentinela</p>
<p>&nbsp;</p>
<p>Ser&aacute; que quando vai pra cama</p>
<p>A morena se esquece dos chocalhos</p>
<p>Ser&aacute; que namora fazendo bochincho</p>
<p>Com seus penduricalhos</p>
<p>&nbsp;</p>
<p>Ser&aacute; que ela t&aacute; caprichando</p>
<p>No peixe que eu trouxe de Benguela</p>
<p>Ser&aacute; que t&aacute; no remelexo</p>
<p>Abandonou meu peixe na tigela</p>
<p>&nbsp;</p>
<p>Ser&aacute; que quando fica choca</p>
<p>P&otilde;e de quarentena o seu chocalho</p>
<p>Ser&aacute; que depois ela bota</p>
<p>A canela no nicho do pirralho</p>
<p>&nbsp;</p>
<p>Morena de Angola</p>
<p>Que leva o chocalho amarrado na canela</p>
<p>Acho que deixei um cacho</p>
<p>Do meu cora&ccedil;&atilde;o na Catumbela</p>
<p>&nbsp;</p>
<p>Morena de Angola</p>
<p>Que leva o chocalho amarrado na canela</p>
<p>Morena, bichinha danada</p>
<p>Minha camarada do MPLA</p>
',
                'creditos' => '
',
                'faixa_mp3' => '10_roendo_unha_no_som_da_sanfona_morena_de_angola.mp3',
                'faixa_ogg' => '10_roendo_unha_no_som_da_sanfona_morena_de_angola.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Pagode Russo',
                'compositor' => '(Luiz Gonzaga / Jo&atilde;o Silva)',
                'letra' => '<p>Ontem eu sonhei que tava em Moscou</p>
<p>Dan&ccedil;ando pagode russo na boate Cossacou</p>
<p>Ontem eu sonhei que tava em Moscou</p>
<p>Dan&ccedil;ando pagode russo na boate Cossacou</p>
<p>&nbsp;</p>
<p>Parecia at&eacute; um frevo naquele vai ou n&atilde;o vai</p>
<p>Parecia at&eacute; um frevo naquele cai ou n&atilde;o cai</p>
<p>Parecia at&eacute; um frevo naquele vai ou n&atilde;o vai</p>
<p>Parecia at&eacute; um frevo naquele cai ou n&atilde;o cai</p>
<p>&nbsp;</p>
<p>Entra cossaco, cossaco dan&ccedil;a agora</p>
<p>Na dan&ccedil;a do cossaco, n&atilde;o fica cossaco fora</p>
<p>Entra cossaco, cossaco dan&ccedil;a agora</p>
<p>Na dan&ccedil;a do cossaco, n&atilde;o fica cossaco fora</p>
<p>&nbsp;</p>
<p><strong>Onde tu t&aacute; nen&eacute;m</strong></p>
<p>(Luis Bandeira)</p>
<hr class="space-letra-top-musicas">
<p>Onde tu t&aacute; nen&eacute;m</p>
<p>Eu vim te procurar</p>
<p>Vamos fazer as pazes</p>
<p>Tenho tantas frases pra te agradar</p>
<p>&nbsp;</p>
<p>Onde tu t&aacute; nen&eacute;m</p>
<p>Eu vim te procurar</p>
<p>Saudade sai me solta</p>
<p>Estou aqui de volta pra meu bem beijar</p>
<p>&nbsp;</p>
<p>Estou aqui de novo junto ao meu povo</p>
<p>Minha gente amiga</p>
<p>Quem me conhece sabe</p>
<p>Que eu detesto intriga</p>
<p>&nbsp;</p>
<p>Uma saudade enorme</p>
<p>Come e deita e dorme no meu cora&ccedil;&atilde;o</p>
<p>Rem&eacute;dio indicado pra quem est&aacute; errado</p>
<p>&Eacute; pedir perd&atilde;o</p>
<p>&nbsp;</p>
<p>Por uma briga &agrave; toa</p>
<p>Tanta coisa boa a gente t&aacute; perdendo</p>
<p>Sert&atilde;o em noite branca</p>
<p>O dia amanhecendo</p>
<p>&nbsp;</p>
<p>Nossa conversa linda</p>
<p>Tem segredo ainda para um s&eacute;culo mais</p>
<p>N&atilde;o &eacute; pra nos gabar</p>
<p>Mas n&atilde;o existe um par como n&oacute;s dois se faz</p>
',
                'creditos' => '
',
                'faixa_mp3' => '11_pagode_russo_onde_tu_ta_nenem.mp3',
                'faixa_ogg' => '11_pagode_russo_onde_tu_ta_nenem.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Olha pro C&eacute;u',
                'compositor' => '(Luiz Gonzaga / Jos&eacute; Fernandes)',
                'letra' => '<p>Olha pro c&eacute;u, meu amor</p>
<p>Veja como ele est&aacute; lindo</p>
<p>Olha praquele bal&atilde;o multicor</p>
<p>Que l&aacute; c&eacute;u vai sumindo</p>
<p>&nbsp;</p>
<p>Foi numa noite igual a esta</p>
<p>Que tu me deste o teu cora&ccedil;&atilde;o</p>
<p>O c&eacute;u estava todinho em festa</p>
<p>Pois era noite de S&atilde;o Jo&atilde;o</p>
<p>&nbsp;</p>
<p>Havia bal&otilde;es no ar</p>
<p>Xote e bai&atilde;o no sal&atilde;o</p>
<p>E no terreiro o seu olhar</p>
<p>Que incendiou meu cora&ccedil;&atilde;o</p>
',
                'creditos' => '
',
                'faixa_mp3' => '12_olha_pro_ceu.mp3',
                'faixa_ogg' => '12_olha_pro_ceu.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Boca do Bal&atilde;o',
                'compositor' => '(Moraes Moreira / Zeca Barreto / Fred G&oacute;es)',
                'letra' => '<p>Na cidade grande</p>
<p>Por mais que eu ande</p>
<p>Ainda me espanto</p>
<p>Quando ou&ccedil;o uma explos&atilde;o</p>
<p>&nbsp;</p>
<p>L&aacute; no interior sempre era S&atilde;o Jo&atilde;o</p>
<p>L&aacute; no interior sempre era S&atilde;o Jo&atilde;o</p>
<p>&nbsp;</p>
<p>Viva S&atilde;o Jo&atilde;o</p>
<p>Meu carneirinho</p>
<p>Como te esperei</p>
<p>Ano inteirinho</p>
<p>&nbsp;</p>
<p>Ao p&eacute; da fogueira</p>
<p>Madeira, velame</p>
<p>Que o nosso amor inflame a noite inteira</p>
<p>Na esteira ou no ch&atilde;o</p>
<p>A gente se esquenta</p>
<p>E arrebenta a boca do bal&atilde;o</p>
<p>&nbsp;</p>
<p><strong>S&atilde;o Jo&atilde;o na estrada</strong></p>
<p>(Moraes Moreira)</p>
<hr class="space-letra-top-musicas">
<p>No m&ecirc;s de junho</p>
<p>Tenho Deus por testemunho</p>
<p>Com meu viol&atilde;o em punho</p>
<p>Vou fazer o S&atilde;o Jo&atilde;o</p>
<p>Tomar licor, menino, fazer eu vou</p>
<p>A festa do interior</p>
<p>E tamb&eacute;m da capital</p>
<p>&nbsp;</p>
<p>Vou pra Natal e l&aacute; no circo da folia</p>
<p>Vai amanhecer o dia</p>
<p>E todo mundo no forr&oacute;</p>
<p>L&aacute; em Timbau no forr&oacute; do seu Patr&iacute;cio</p>
<p>Vai ter fogos de artif&iacute;cios</p>
<p>Tamb&eacute;m l&aacute; em Mossor&oacute;</p>
<p>&nbsp;</p>
<p>Em Jo&atilde;o Pessoa</p>
<p>Soa bem esse galope</p>
<p>Tem quem dance e tem quem toque</p>
<p>Com que anima&ccedil;&atilde;o</p>
<p>Santa Luzia, guia meus passos, me mande</p>
<p>Al&eacute;m de Campina Grande, Sousa e toda a regi&atilde;o</p>
<p>&nbsp;</p>
<p>Em Fortaleza com certeza um ouri&ccedil;o</p>
<p>Juazeiro e Padim Ci&ccedil;o tamb&eacute;m vai dan&ccedil;ar bai&atilde;o</p>
<p>Em Macei&oacute; quero ver bal&atilde;o no c&eacute;u</p>
<p>Arapiraca e S&atilde;o Miguel</p>
<p>Dando viva a S&atilde;o Jo&atilde;o</p>
<p>&nbsp;</p>
<p>N&atilde;o pode parar o sanfoneiro</p>
<p>N&atilde;o pode parar o cora&ccedil;&atilde;o</p>
<p>S&oacute; pode parar a guerra</p>
<p>Quero paz na terra</p>
<p>E no c&eacute;u bal&atilde;o</p>
<p>&nbsp;</p>
<p>Em Teresina, como se faz todo ano</p>
<p>Parna&iacute;ba e Floriano tamb&eacute;m v&atilde;o comemorar</p>
<p>Vou caminhando, vou chegando at&eacute; Recife</p>
<p>Meu amor quem foi que disse</p>
<p>Que n&atilde;o tem Caruaru?</p>
<p>&nbsp;</p>
<p>Aracaju tem caju e tem castanha</p>
<p>Gente aprende, gente apanha</p>
<p>Nessa vida de estradeiro</p>
<p>Em Salvador</p>
<p>Vou chegar l&aacute; na Bahia</p>
<p>L&aacute; na terra da alegria</p>
<p>Vai ser festa o ano inteiro</p>
',
                'creditos' => '
',
                'faixa_mp3' => '13_boca_do_balao_sao_joao_na_estrada.mp3',
                'faixa_ogg' => '13_boca_do_balao_sao_joao_na_estrada.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'De Volta pro Aconchego',
                'compositor' => '(Dominguinhos / Nando Cordel)',
                'letra' => '<p>Estou de volta pro meu aconchego</p>
<p>Trazendo na mala bastante saudade</p>
<p>Querendo um sorriso sincero, um abra&ccedil;o</p>
<p>Para aliviar meu cansa&ccedil;o</p>
<p>E toda essa minha vontade</p>
<p>&nbsp;</p>
<p>Que bom poder t&aacute; contigo de novo</p>
<p>Ro&ccedil;ando teu corpo e beijando voc&ecirc;</p>
<p>Pra mim tu &eacute;s a estrela mais linda</p>
<p>Teus olhos me prendem, fascinam</p>
<p>A paz que eu gosto de ter</p>
<p>&nbsp;</p>
<p>&Eacute; duro ficar sem voc&ecirc; vez em quando</p>
<p>Parece que falta um peda&ccedil;o de mim</p>
<p>Me alegro na hora de regressar</p>
<p>Parece que vou mergulhar</p>
<p>Na felicidade sem fim</p>
',
                'creditos' => '
',
                'faixa_mp3' => '14_de_volta_pro_aconchego.mp3',
                'faixa_ogg' => '14_de_volta_pro_aconchego.ogg',
                'disco_id' => '23'));

        Musicas::create(
            array(
                'faixa' => 'Caravana',
                'compositor' => '(Geraldo Azevedo / Alceu Valença) cantam: <strong>Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</strong>',
                'letra' => '<p>Corra, n&atilde;o pare</p>
<p>N&atilde;o pense demais</p>
<p>Repare essas velas no cais</p>
<p>Que a vida &eacute; cigana</p>
<p>&nbsp;</p>
<p>&Eacute; caravana</p>
<p>&Eacute; pedra de gelo ao sol</p>
<p>Degelou teus olhos t&atilde;o s&oacute;s</p>
<p>Num mar de &aacute;gua clara</p>
',
                'creditos' => '
<p>Viol&otilde;es: Geraldo Azevedo e Z&eacute; Ramalho</p>
<p>Cello: Lui Coimbra</p>
<p>Flauta: Cesar Michilles</p>
',
                'faixa_mp3' => '01_caravana.mp3',
                'faixa_ogg' => '01_caravana.ogg',
                'disco_id' => '24'));

        Musicas::create(
            array(
                'faixa' => 'T&aacute;xi Lunar',
                'compositor' => '(Geraldo Azevedo / Z&eacute; Ramalho / Alceu Valen&ccedil;a) cantam: <strong>Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</strong>',
                'letra' => '<p>Ela me deu o seu amor, eu tomei</p>
<p>No dia dezesseis de maio, viajei</p>
<p>De espa&ccedil;onave atropelado, procurei</p>
<p>O meu amor aperreado</p>
<p>&nbsp;</p>
<p>Apenas apanhei na beira-mar</p>
<p>Um t&aacute;xi pra esta&ccedil;&atilde;o lunar</p>
<p>Apenas apanhei na beira-mar</p>
<p>Um t&aacute;xi pra esta&ccedil;&atilde;o lunar</p>
<p>&nbsp;</p>
<p>Bela linda criatura, bonita</p>
<p>Nem menina, nem mulher</p>
<p>Tem espelho no seu rosto de neve</p>
<p>Nem menina, nem mulher</p>
<p>&nbsp;</p>
<p>Pela sua cabeleira, vermelha</p>
<p>Pelos raios desse sol lil&aacute;s</p>
<p>Pelo fogo do seu corpo, centelha</p>
<p>Belos raios desse sol</p>
',
                'creditos' => '
<p>Viol&otilde;es: Geraldo Azevedo, Elba Ramalho e Z&eacute; Ramalho</p>
<p>Acordeom: Marcos Farias</p>
<p>Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes</p>
<p>Cello: Lui Coimbra</p>
<p>Sax soprano: Cesar Michilles</p>

',
                'faixa_mp3' => '02_taxi_lunar.mp3',
                'faixa_ogg' => '02_taxi_lunar.ogg',
                'disco_id' => '24'));
        Musicas::create(
            array(
                'faixa' => 'Dona da Minha Cabe&ccedil;a',
                'compositor' => '(Geraldo Azevedo / Fausto Nilo) canta: <strong>Geraldo Azevedo</strong>',
                'letra' => '<p>Dona da minha cabe&ccedil;a</p>
<p>Ela vem como um carnaval</p>
<p>Toda paix&atilde;o recome&ccedil;a</p>
<p>Ela &eacute; bonita, &eacute; demais</p>
<p>&nbsp;</p>
<p>N&atilde;o h&aacute; um porto seguro</p>
<p>Futuro tamb&eacute;m n&atilde;o h&aacute;</p>
<p>Mas faz tanta diferen&ccedil;a</p>
<p>Quando ela dan&ccedil;a, dan&ccedil;a</p>
<p>&nbsp;</p>
<p>Eu digo e ela n&atilde;o acredita</p>
<p>Ela &eacute; bonita demais</p>
<p>Eu digo e ela n&atilde;o acredita</p>
<p>Ela &eacute; bonita, bonita</p>
<p>&nbsp;</p>
<p>Dona da minha cabe&ccedil;a</p>
<p>Quero tanto lhe ver chegar</p>
<p>Quero saciar minha sede</p>
<p>Milh&otilde;es de vezes, milh&otilde;es de vezes</p>
<p>&nbsp;</p>
<p>Na for&ccedil;a dessa beleza</p>
<p>&Eacute; que eu sinto firmeza e paz</p>
<p>Por isso nunca desapare&ccedil;a</p>
<p>Nunca me esque&ccedil;a</p>
<p>Que eu n&atilde;o esque&ccedil;o jamais</p>
',
                'creditos' => '
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes</p>
<p>Cello: Lui Coimbra</p>
<p>Sax soprano: Cesar Michilles</p>
',
                'faixa_mp3' => '03_dona_da_minha_cabeca.mp3',
                'faixa_ogg' => '03_dona_da_minha_cabeca.ogg',
                'disco_id' => '24'));

        Musicas::create(
            array(
                'faixa' => 'Canta Brasil',
                'compositor' => '(Alcyr Pires Vermelho / David Nasser) cantam: <strong>Geraldo Azevedo e Moraes Moreira</strong>',
                'letra' => '<p>As selvas te deram das noites teus ritmos b&aacute;rbaros</p>
<p>E os negros trouxeram de longe reservas de pranto</p>
<p>Os brancos falaram de amor em suas can&ccedil;&otilde;es</p>
<p>E dessa mistura de vozes nasceu o seu canto</p>
<p>&nbsp;</p>
<p>Brasil, minha voz enternecida</p>
<p>J&aacute; dourou os teus bras&otilde;es</p>
<p>Na express&atilde;o mais comovida</p>
<p>Das mais ardentes can&ccedil;&otilde;es</p>
<p>&nbsp;</p>
<p>Tamb&eacute;m, na beleza desse c&eacute;u</p>
<p>Onde o azul &eacute; mais azul</p>
<p>Na aquarela do Brasil</p>
<p>Eu cantei de norte a sul</p>
<p>&nbsp;</p>
<p>Mas agora o teu cantar</p>
<p>Meu Brasil quero escutar</p>
<p>Nas preces da sertaneja</p>
<p>Nas ondas do rio-mar</p>
<p>&nbsp;</p>
<p>&Ocirc;, esse rio turbilh&atilde;o</p>
<p>Entre selvas de roj&atilde;o</p>
<p>Continente a caminhar</p>
<p>&nbsp;</p>
<p>No c&eacute;u, no mar, na terra</p>
<p>Canta Brasil</p>
<p>No c&eacute;u, no mar, na terra</p>
<p>Canta Brasil</p>
',
                'creditos' => '
<p>Viol&otilde;es: Geraldo Azevedo e Moraes Moreira</p>
',
                'faixa_mp3' => '04_canta_brasil.mp3',
                'faixa_ogg' => '04_canta_brasil.ogg',
                'disco_id' => '24'));

        Musicas::create(
            array(
                'faixa' => 'Frisson',
                'compositor' => '(Tunai / Sergio Natureza) canta: <strong>Elba Ramalho</strong>',
                'letra' => '<p>Meu cora&ccedil;&atilde;o pulou</p>
<p>Voc&ecirc; chegou, me deixou assim</p>
<p>Com os p&eacute;s fora do ch&atilde;o</p>
<p>Pensei: que bom</p>
<p>Parece, enfim, acordei</p>
<p>&nbsp;</p>
<p>Pra renovar meu ser</p>
<p>Faltava mesmo chegar voc&ecirc;</p>
<p>Assim, sem me avisar</p>
<p>E acelerar</p>
<p>Um cora&ccedil;&atilde;o que j&aacute; bate pouco</p>
<p>&nbsp;</p>
<p>De tanto procurar por outro</p>
<p>Anda cansado</p>
<p>Mas quando voc&ecirc; est&aacute; do lado</p>
<p>Fica louco de satisfa&ccedil;&atilde;o</p>
<p>Solid&atilde;o nunca mais</p>
<p>&nbsp;</p>
<p>Voc&ecirc; caiu do c&eacute;u</p>
<p>Um anjo lindo que apareceu</p>
<p>Com olhos de cristal</p>
<p>Enfeiti&ccedil;ou</p>
<p>Eu nunca vi nada igual</p>
<p>&nbsp;</p>
<p>De repente</p>
<p>Voc&ecirc; surgiu na minha frente</p>
<p>Luz cintilante</p>
<p>Estrela em forma de gente</p>
<p>Invasora do planeta amor</p>
<p>Voc&ecirc; me conquistou</p>
<p>&nbsp;</p>
<p>Me olha</p>
<p>Me toca</p>
<p>Me faz sentir</p>
<p>Que &eacute; hora, agora</p>
<p>Da gente ir</p>

',
                'creditos' => '
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Acordeom: Marcos Farias</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Flauta: Cesar Michilles</p>

',
                'faixa_mp3' => '05_frisson.mp3',
                'faixa_ogg' => '05_frisson.ogg',
                'disco_id' => '24'));

        Musicas::create(
            array(
                'faixa' => 'L&aacute; e C&aacute;',
                'compositor' => '(Lenine / Sergio Natureza) cantam: <strong>Elba Ramalho e Lenine</strong>',
                'letra' => '<p>Mangueira, Il&ecirc; Ay&ecirc; e viva o baticum</p>
<p>Quando a Padre Miguel encontra com Olodum</p>
<p>Caymmi com Noel, em Tom maior Jobim</p>
<p>A Penha, a Candel&aacute;ria, o Senhor do Bonfim</p>
<p>&nbsp;</p>
<p>Irm&atilde;o S&atilde;o Salvador e S&atilde;o Sebasti&atilde;o</p>
<p>Tamborim, berimbau na marca&ccedil;&atilde;o</p>
<p>Pontal do Arpoador, final de Itapo&atilde;</p>
<p>Meninos do Pel&ocirc;, da Flor do Amanh&atilde;</p>
<p>&nbsp;</p>
<p>Diga a&iacute;, diga l&aacute;</p>
<p>Voc&ecirc; j&aacute; foi &agrave; Bahia, nego? N&atilde;o?</p>
<p>Ent&atilde;o v&aacute;, ent&atilde;o v&aacute;</p>
<p>Diga l&aacute;, diga a&iacute;</p>
<p>Voc&ecirc; j&aacute; foi at&eacute; o Rio, nega? N&atilde;o?</p>
<p>Tem que ir, tem que ir</p>
<p>&nbsp;</p>
<p>Rocinha faz parelha l&aacute; com Curuzu</p>
<p>Centelha, luz, ax&eacute; que vem do fundo azul</p>
<p>Do c&eacute;u, do mar, de Mar&eacute; at&eacute; Maric&aacute;</p>
<p>No reino de &aacute;gua e sal de m&atilde;e Iemanj&aacute;</p>
<p>&nbsp;</p>
<p>&Eacute; tanta coisa afim, tanto l&aacute; como c&aacute;</p>
<p>Tem Barras, Piedades e Jardim de Alah</p>
<p>S&atilde;o trios e afox&eacute;s, blocos de empolga&ccedil;&atilde;o</p>
<p>De arranco, negro e branco, tudo de rod&atilde;o</p>
<p>&nbsp;</p>
<p>Jo&atilde;o, Benjor, Cartola</p>
<p>Da Viola, Gil, Vel&ocirc;</p>
<p>Coquejo, Alcyvando</p>
<p>Chico, Ciro, Osmar, Dod&ocirc;</p>
<p>&nbsp;</p>
<p>Geraldos e Ederaldos</p>
<p>Elton, Candeia e Xang&ocirc;</p>
<p>Rufino, Aldir, Patinhas</p>
<p>Da Vila, Ismael, Mel&ocirc;</p>
<p>&nbsp;</p>
<p>Monsueto e Batatinha</p>
<p>Silas, Ciata e Sinh&ocirc;</p>
<p>Salve M&atilde;e Menininha</p>
<p>Clementina voz da cor</p>
<p>&nbsp;</p>
<p>Al&ocirc; Carlos Cacha&ccedil;a</p>
<p>Pedra Noventa falou</p>
<p>Valeu Rio e Bahia</p>
<p>Simpatia &eacute; quase amor</p>
',
                'creditos' => '
<p>Viol&atilde;o: Lenine</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
',
                'faixa_mp3' => '06_la_e_ca.mp3',
                'faixa_ogg' => '06_la_e_ca.ogg',
                'disco_id' => '24'));

        Musicas::create(
            array(
                'faixa' => 'A Peleja do Diabo com o Dono Do C&eacute;u',
                'compositor' => '(Z&eacute; Ramalho) canta: <strong>Z&eacute; Ramalho</strong>',
                'letra' => '<p>Mas com tanto dinheiro girando no mundo</p>
<p>Quem tem pede muito</p>
<p>Quem n&atilde;o tem, pede mais</p>
<p>Cobi&ccedil;am a terra e toda riqueza</p>
<p>Do reino dos homens e dos animais</p>
<p>&nbsp;</p>
<p>Cobi&ccedil;am at&eacute; a plan&iacute;cie dos sonhos</p>
<p>Lugares eternos para descansar</p>
<p>A terra do verde que foi prometido</p>
<p>At&eacute; que se cansem de tanto esperar</p>
<p>Que eu n&atilde;o vim de longe para me enganar</p>
<p>Que eu n&atilde;o vim de longe para me enganar</p>
<p>Que eu n&atilde;o vim de longe para me enganar</p>
<p>&nbsp;</p>
<p>Mas o templo do homem, a mulher e o filho</p>
<p>O gado novilho urra no cural</p>
<p>Vaqueiros que tangem a humanidade</p>
<p>Em cada cidade, em cada capital</p>
<p>&nbsp;</p>
<p>Em cada pessoa de procedimento</p>
<p>Em cada lamento palavras de sal</p>
<p>A nau que flutua no leito do rio</p>
<p>Conduz a velhice, conduz a moral</p>
<p>Assim como Deus, parab&eacute;ns o mau</p>
<p>Assim como Deus, parab&eacute;ns o mau</p>
<p>Assim como Deus, parab&eacute;ns o mau</p>
<p>&nbsp;</p>
<p>J&aacute; que tudo depende da boa vontade</p>
<p>&Eacute; de caridade que eu quero falar</p>
<p>&Eacute; daquela esmola, da cuia tremendo</p>
<p>Ou mato ou me rendo, &eacute; lei natural</p>
<p>&nbsp;</p>
<p>Do muro de cal espirrado de sangue</p>
<p>De lama, de mangue, de rouge e batom</p>
<p>O tom da conversa que ou&ccedil;o me criva</p>
<p>De setas e faca e favos de mel</p>
<p>&Eacute; a peleja do diabo com o dono do c&eacute;u</p>
<p>&Eacute; a peleja do diabo com o dono do c&eacute;u</p>
<p>Olha a peleja do diabo com o dono do c&eacute;u</p>
',
                'creditos' => '
<p>Viol&atilde;o: Z&eacute; Ramalho</p>
<p>Acordeom: Marcos Farias</p>
<p>Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes</p>
<p>Flauta: Cesar Michilles</p>
',
                'faixa_mp3' => '07_a_peleja_do_diabo_com_o_dono_do_ceu.mp3',
                'faixa_ogg' => '07_a_peleja_do_diabo_com_o_dono_do_ceu.ogg',
                'disco_id' => '24'));

        Musicas::create(
            array(
                'faixa' => 'Garoto de Aluguel (Taxi Boy)',
                'compositor' => '(Z&eacute; Ramalho) cantam: <strong>Z&eacute; Ramalho e Belchior</strong>',
                'letra' => '<p>Baby</p>
<p>D&ecirc;-me seu dinheiro que eu quero viver</p>
<p>D&ecirc;-me seu rel&oacute;gio que eu quero saber</p>
<p>Quanto tempo falta para eu lhe esquecer</p>
<p>Quanto vale um homem para amar voc&ecirc;</p>
<p>&nbsp;</p>
<p>Minha profiss&atilde;o &eacute; suja e vulgar</p>
<p>Quero um pagamento para me deitar</p>
<p>E junto com voc&ecirc; estrangular meu riso</p>
<p>D&ecirc;-me seu amor, dele n&atilde;o preciso</p>
<p>&Ocirc;, &ocirc;, &ocirc;... &ocirc;, &ocirc;, &ocirc;... &ocirc;...</p>
<p>&nbsp;</p>
<p>Baby</p>
<p>Nossa rela&ccedil;&atilde;o acaba-se assim</p>
<p>Como um caramelo que chegasse ao fim</p>
<p>Na boca vermelha de uma dama louca</p>
<p>Pague meu dinheiro e vista sua roupa</p>
<p>&nbsp;</p>
<p>Deixe a porta aberta quando for saindo</p>
<p>Voc&ecirc; vai chorando e eu fico sorrindo</p>
<p>Conte pras amigas que tudo foi mal</p>
<p>Nada me preocupa de um marginal</p>
<p>&Ocirc;, &ocirc;, &ocirc;... &ocirc;, &ocirc;, &ocirc;... &ocirc;...</p>
',
                'creditos' => '
<p>Viol&atilde;o: Z&eacute; Ramalho</p>
<p>Acordeom: Marcos Farias</p>
<p>Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes</p>
<p>Cello: Lui Coimbra</p>
',
                'faixa_mp3' => '08_garoto_de_aluguel.mp3',
                'faixa_ogg' => '08_garoto_de_aluguel.ogg',
                'disco_id' => '24'));

        Musicas::create(
            array(
                'faixa' => 'Galope Rasante',
                'compositor' => '(Z&eacute; Ramalho) cantam: <strong>Geraldo Azevedo e Z&eacute; Ramalho</strong>',
                'letra' => '<p>A sombra que me move</p>
<p>Tamb&eacute;m me ilumina</p>
<p>Me leve nos cabelos</p>
<p>Me lave na piscina</p>
<p>&nbsp;</p>
<p>Em cada ponto claro</p>
<p>Cometa que cai no mar</p>
<p>Em cada cor diferente</p>
<p>Que tente me clarear</p>
<p>&nbsp;</p>
<p>&Eacute; noite que vai chegar</p>
<p>&Eacute; claro, &eacute; de manh&atilde;</p>
<p>&Eacute; mo&ccedil;a e anci&atilde;</p>
<p>&nbsp;</p>
<p>O pelo do cavalo</p>
<p>O vento pela crina</p>
<p>O h&aacute;bito no olho</p>
<p>Veneno, lamparina</p>
<p>&nbsp;</p>
<p>Debaixo de sete quedas</p>
<p>Querendo me levantar</p>
<p>Debaixo de teu cabelo</p>
<p>A fonte de se banhar</p>
<p>&nbsp;</p>
<p>&Eacute; ouro que vai pingar</p>
<p>Na prata do camel&ocirc;</p>
<p>&Eacute; noite do meu amor</p>

',
                'creditos' => '
<p>Viol&otilde;es: Geraldo Azevedo e Z&eacute; Ramalho</p>
<p>Acordeom: Marcos Farias</p>
<p>Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes</p>

',
                'faixa_mp3' => '09_galope_rasante.mp3',
                'faixa_ogg' => '09_galope_rasante.ogg',
                'disco_id' => '24'));

        Musicas::create(
            array(
                'faixa' => 'Voc&ecirc; se Lembra',
                'compositor' => '(Geraldo Azevedo / Pipo Spera / Fausto Nilo) <em>M&uacute;sica incidental: <strong>Solo da corda G.</strong> (J.S. Bach)</em><br>canta: <strong>Elba Ramalho</strong>',
                'letra' => '<p>Entre as estrelas do meu drama</p>
<p>Voc&ecirc; j&aacute; foi meu anjo azul</p>
<p>Chegamos num final feliz</p>
<p>Na tela prateada da ilus&atilde;o</p>
<p>&nbsp;</p>
<p>Na realidade, onde est&aacute; voc&ecirc;?</p>
<p>Em que cidade voc&ecirc; mora?</p>
<p>Em que paisagem, em que pa&iacute;s?</p>
<p>Me diz em que lugar, cad&ecirc; voc&ecirc;?</p>
<p>&nbsp;</p>
<p>Voc&ecirc; se lembra?</p>
<p>Torrentes de paix&atilde;o</p>
<p>Ouvir nossa can&ccedil;&atilde;o</p>
<p>Sonhar em Casablanca</p>
<p>E se perder no labirinto de outra hist&oacute;ria</p>
<p>&nbsp;</p>
<p>A caravana do deserto</p>
<p>Atravessou meu cora&ccedil;&atilde;o</p>
<p>E eu fui chorando por voc&ecirc;</p>
<p>At&eacute; os sete mares do sert&atilde;o</p>
',
                'creditos' => '
<p>Viol&otilde;es: Geraldo Azevedo e Z&eacute; Ramalho</p>
<p>Acordeom: Marcos Farias</p>
<p>Cello: Lui Coimbra</p>
',
                'faixa_mp3' => '10_voce_se_lembra.mp3',
                'faixa_ogg' => '10_voce_se_lembra.ogg',
                'disco_id' => '24'));

        Musicas::create(
            array(
                'faixa' => 'Petrolina e Juazeiro',
                'compositor' => '(Jorge de Altinho) cantam: <strong>Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</strong>',
                'letra' => '<p>Na margem do S&atilde;o Francisco nasceu a beleza</p>
<p>E a natureza ela conservou</p>
<p>Jesus aben&ccedil;oou com sua m&atilde;o divina</p>
<p>Pra n&atilde;o morrer de saudade vou voltar pra Petrolina</p>
<p>Jesus aben&ccedil;oou com sua m&atilde;o divina</p>
<p>Pra n&atilde;o morrer de saudade vou voltar pra Petrolina</p>
<p>&nbsp;</p>
<p>Do outro lado do rio tem uma cidade</p>
<p>Que na minha mocidade eu visitava todo dia</p>
<p>Atravessava a ponte, ai que alegria!</p>
<p>Chegava em Juazeiro, Juazeiro da Bahia</p>
<p>Atravessava a ponte, ai que alegria!</p>
<p>Chegava em Juazeiro, Juazeiro da Bahia</p>
<p>&nbsp;</p>
<p>Hoje eu me lembro que no tempo de crian&ccedil;a</p>
<p>Esquisito era a carranca e o apito do trem</p>
<p>Achava lindo quando a ponte levantava</p>
<p>E o vapor passava num gostoso vai e vem</p>
<p>&nbsp;</p>
<p>Petrolina, Juazeiro, Juazeiro, Petrolina</p>
<p>Todas duas eu acho uma coisa linda</p>
<p>Eu gosto de Juazeiro e adoro Petrolina</p>
',
                'creditos' => '
<p>Viol&atilde;o: Geraldo Azevedo</p>
<p>Acordeom: Marcos Farias</p>
<p>Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes</p>
<p>Cello: Lui Coimbra</p>
<p>Flauta: Cesar Michilles</p>
',
                'faixa_mp3' => '11_petrolina_juazeiro.mp3',
                'faixa_ogg' => '11_petrolina_juazeiro.ogg',
                'disco_id' => '24'));

        Musicas::create(
            array(
                'faixa' => 'A Terceira L&acirc;mina',
                'compositor' => '(Z&eacute; Ramalho) cantam: <strong>Elba Ramalho e Z&eacute; Ramalho</strong>',
                'letra' => '<p>&Eacute; aquela que fere</p>
<p>Que vir&aacute; mais tranquila</p>
<p>Com a fome do povo</p>
<p>Com peda&ccedil;os da vida</p>
<p>Como a dura semente</p>
<p>Que se prende no fogo</p>
<p>De toda multid&atilde;o</p>
<p>&nbsp;</p>
<p>Acho bem mais</p>
<p>Do que pedras na m&atilde;o</p>
<p>Dos que vivem calados</p>
<p>Pendurados no tempo</p>
<p>Esquecendo os momentos</p>
<p>Na fundura do po&ccedil;o</p>
<p>Na garganta do fosso</p>
<p>Na voz de um cantador</p>
<p>&nbsp;</p>
<p>E vir&aacute; como guerra</p>
<p>A terceira mensagem</p>
<p>Na cabe&ccedil;a do homem</p>
<p>Afli&ccedil;&atilde;o e coragem</p>
<p>Afastado da terra</p>
<p>Ele pensa na fera</p>
<p>Que o come&ccedil;a a devorar</p>
<p>&nbsp;</p>
<p>Acho que os anos ir&atilde;o se passar</p>
<p>Com aquela certeza</p>
<p>Que teremos no olho</p>
<p>Novamente a id&eacute;ia</p>
<p>De sairmos do po&ccedil;o</p>
<p>Da garganta do fosso</p>
<p>Na voz de um cantador</p>
',
                'creditos' => '
<p>Viol&otilde;es: Elba Ramalho e Z&eacute; Ramalho</p>
<p>Cello: Lui Coimbra</p>
',
                'faixa_mp3' => '12_a_terceira_lamina.mp3',
                'faixa_ogg' => '12_a_terceira_lamina.ogg',
                'disco_id' => '24'));
        Musicas::create(
            array(
                'faixa' => 'Tum-Tum-Tum',
                'compositor' => '(Ari Monteiro / Crist&oacute;v&atilde;o de Alencar) cantam: <strong>Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</strong>',
                'letra' => '<p>No tempo que eu era s&oacute;</p>
<p>Que n&atilde;o tinha amor nenhum</p>
<p>Meu cora&ccedil;&atilde;o batia mansinho</p>
<p>Tum, tum, tum</p>
<p>&nbsp;</p>
<p>Depois veio voc&ecirc;</p>
<p>O meu amor n&uacute;mero um</p>
<p>E o meu cora&ccedil;&atilde;o pois se a bater</p>
<p>Tum, tum, tum, tum, tum, tum</p>
<p>&nbsp;</p>
<p><strong>Mulata no coco</strong></p>
<p>(Oscar Barbosa / Geraldo Nunes)</p>
<hr class="space-letra-top-musicas">
<p>Olha o balan&ccedil;o das cadeira dela</p>
<p>Olha o balan&ccedil;o das cadeira dela d&aacute;</p>
<p>Olha o balan&ccedil;o das cadeira dela</p>
<p>Fiz esse coco s&oacute; pra ela balan&ccedil;ar</p>
<p>&nbsp;</p>
<p>Quando eu gritei o coco</p>
<p>A mulata se espalhou</p>
<p>Com o chiado da sand&aacute;lia dela</p>
<p>A poeira levantou</p>
<p>&nbsp;</p>
<p>A mo&ccedil;ada lhe cobriu de palmas</p>
<p>Ela em cena tornou a voltar</p>
<p>Com satisfa&ccedil;&atilde;o voltei a cantar esse coco</p>
<p>Que eu fiz s&oacute; pra ela balan&ccedil;ar</p>
',
                'creditos' => '
<p>Viol&otilde;es: Geraldo Azevedo e Z&eacute; Ramalho</p>
<p>Acordeom: Marcos Farias</p>
<p>Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes</p>
<p>Cello: Lui Coimbra</p>
<p>Flauta: Cesar Michilles</p>
',
                'faixa_mp3' => '13_tum_tum_tum_mulata_no_coco.mp3',
                'faixa_ogg' => '13_tum_tum_tum_mulata_no_coco.ogg',
                'disco_id' => '24'));

        Musicas::create(
            array(
                'faixa' => 'Eu Vou pra Lua',
                'compositor' => '(Ary Lobo / Luis de França) cantam: <strong>Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</strong>',
                'letra' => '<p>Eu vou pra lua, eu vou morar l&aacute;</p>
<p>Vou no meu Sputnik do Campo do Jiqui&aacute;</p>
<p>Eu vou pra lua, mam&atilde;e eu vou morar l&aacute;</p>
<p>Vou no meu Sputnik do Campo do Jiqui&aacute;</p>
<p>&nbsp;</p>
<p>J&aacute; estou enjoado aqui da terra</p>
<p>Onde o povo a pulso faz regime</p>
<p>A ind&uacute;stria, roubo, a fome e o crime</p>
<p>Onde os pre&ccedil;os aumentam todo dia</p>
<p>&nbsp;</p>
<p>O progresso daqui, a carestia</p>
<p>N&atilde;o adianta mais se fazer cr&iacute;tica</p>
<p>Ningu&eacute;m acredita na pol&iacute;tica</p>
<p>Onde o povo s&oacute; vive em agonia</p>
<p>&nbsp;</p>
<p>L&aacute; n&atilde;o tem juventude transviada</p>
<p>Os rapazes de l&aacute; n&atilde;o tem mal&iacute;cia</p>
<p>Quando h&aacute; casamento na pol&iacute;cia</p>
<p>&Eacute; a mo&ccedil;a quem &eacute; sentenciada</p>
<p>&nbsp;</p>
<p>Por acaso a dona for casada</p>
<p>Trair o marido a coisa &eacute; feia</p>
<p>Ela pega dez anos de cadeia</p>
<p>E o conquistador n&atilde;o sofre nada</p>
<p>&nbsp;</p>
<p>Na lua n&atilde;o tem nome abreviado</p>
<p>IPSEP, IPASE, nem CASEP</p>
<p>Nem IPEV, nem CPMF</p>
<p>Nem h&aacute; contrabando de mercadoria</p>
<p>&nbsp;</p>
<p>L&aacute; n&atilde;o falta &aacute;gua, n&atilde;o falta energia</p>
<p>N&atilde;o falta hospital, n&atilde;o falta escola</p>
<p>&Eacute; fuzilado l&aacute; quem come bola</p>
<p>E morre na rua quem faz anarquia</p>
<p>&nbsp;</p>
<p><strong>O Canto da Ema</strong></p>
<p>(Alventino Cavalcanti / Aires Viana / Jo&atilde;o do Vale)</p>
<hr class="space-letra-top-musicas">
<p>A ema gemeu no tronco do Juremar</p>
<p>A ema gemeu no tronco do Juremar</p>
<p>Foi um sinal bem triste, morena</p>
<p>Fiquei a imaginar</p>
<p>Ser&aacute; que &eacute; o nosso amor, morena</p>
<p>Que vai se acabar?</p>
<p>&nbsp;</p>
<p>Voc&ecirc; bem sabe que a ema quando canta</p>
<p>Vem trazendo no seu canto um bocado de azar</p>
<p>Eu tenho medo pois acho que &eacute; muito cedo</p>
<p>Muito cedo meu benzinho</p>
<p>Pra esse amor acabar</p>
<p>&nbsp;</p>
<p>Vem morena, vem, vem, vem</p>
<p>Me beijar, me beijar</p>
<p>D&aacute; um beijo, d&aacute; um beijo</p>
<p>Pra esse medo</p>
<p>Se acabar</p>
',
                'creditos' => '
<p>Viol&atilde;o: Geraldo Azevedo e Z&eacute; Ramalho</p>
<p>Acordeom: Marcos Farias</p>
<p>Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes</p>
<p>Cello: Lui Coimbra</p>
<p>Flauta: Cesar Michilles</p>
',
                'faixa_mp3' => '14_eu_vou_pra_lua_o_canto_da_ema.mp3',
                'faixa_ogg' => '14_eu_vou_pra_lua_o_canto_da_ema.ogg',
                'disco_id' => '24'));

        Musicas::create(
            array(
                'faixa' => 'Cirandeira',
                'compositor' => '(Lenine)<br><em>cita&ccedil;&atilde;o: <strong>Cirandeiro</strong> (Edu Lobo / Capinan)</em>',
                'letra' => '<p>Foi minha raz&atilde;o que me arrasou</p>
<p>Que alterou o beat do meu cora&ccedil;&atilde;o</p>
<p>Que bateu fora do compasso</p>
<p>Atravessou, riscou no espa&ccedil;o</p>
<p>E foi al&eacute;m dessa can&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Eu na multid&atilde;o</p>
<p>Multiplicada em solid&atilde;o</p>
<p>Encoura&ccedil;ado cora&ccedil;&atilde;o</p>
<p>Bate s&oacute; no descompasso</p>
<p>Sincopando o mesmo passo</p>
<p>Sempre em sua dire&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Eu bem que tentei</p>
<p>Contei te encontrar</p>
<p>E o que eu naveguei</p>
<p>A te procurar</p>
<p>A onda que andei</p>
<p>E aonde me levar</p>
<p>Serei o seu mar, sereia</p>
<p>&nbsp;</p>
<p>Onda do mar</p>
<p>Quem navegou foi Lia</p>
<p>Folia de navegador</p>
<p>Essa ciranda que me fez folia</p>
<p>Fo Lia quem cirandeou (&ocirc; cirandeiro)</p>
<p>&nbsp;</p>
<p><em>&Ocirc; cirandeiro, &ocirc;</em></p>
<p><em>Cirandeiro, cirandeiro, &ocirc;</em></p>
<p><em>A pedra do seu anel</em></p>
<p><em>Brilha mais do que o sol</em></p>
',
                'creditos' => '
<p>Arranjo e baixo: Marcos Farias</p>
<p>Viol&atilde;o de nylon: Lenine</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Cello e flautas: Ocelo Mendon&ccedil;a</p>
<p>Trombone: Alcimar Oliveira</p>
',
                'faixa_mp3' => '01_cirandeira.mp3',
                'faixa_ogg' => '01_cirandeira.ogg',
                'disco_id' => '25'));

        Musicas::create(
            array(
                'faixa' => 'Patativa',
                'compositor' => '(Vicente Celestino)',
                'letra' => '<p>Acorda Patativa, vem cantar</p>
<p>Relembra as madrugadas que l&aacute; v&atilde;o</p>
<p>E faz da sua janela o meu altar</p>
<p>Escuta a minha eterna ora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Eu vivo inutilmente a procurar</p>
<p>Algu&eacute;m que compreenda o meu amor</p>
<p>E vejo que &eacute; destino o meu sofrer</p>
<p>&Eacute; padecer n&atilde;o encontrar</p>
<p>Quem compreenda o trovador</p>
<p>&nbsp;</p>
<p>Eu tenho n&rsquo;alma um vendaval sem fim</p>
<p>E uma esperan&ccedil;a que &eacute; se ter por mim</p>
<p>O mesmo afeto que juravas ter</p>
<p>Para que acabe esse meu sofrer</p>
<p>&nbsp;</p>
<p>Eu sei que juras cruelmente em v&atilde;o</p>
<p>Eu sei que preso tens o cora&ccedil;&atilde;o</p>
<p>Eu sei que vives tristemente a ocultar</p>
<p>Que a outro amas sem querer amar</p>
<p>&nbsp;</p>
<p>Mulher, o teu capricho vencer&aacute;</p>
<p>E um dia sua loucura findar&aacute;</p>
<p>Adeus, a Deus minh&rsquo;alma entregarei</p>
<p>E de outro por injurio morrerei</p>
<p>&nbsp;</p>
<p>Amar, que sonho lindo, encantador</p>
<p>Mais lindo porque minh&rsquo;alma tem amor</p>
<p>E tu vens se expressando sem raz&atilde;o</p>
<p>A minha hist&oacute;ria e busco em v&atilde;o</p>
<p>O teu ingrato cora&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo de base e cordas, reg&ecirc;ncia e sanfona: Marcos Farias</p>
<p>Guitarra: Luiz Neto</p>
<p>Violas: Tuco Marcondes</p>
<p>Baixo: Jacar&eacute;</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu</p>
',
                'faixa_mp3' => '02_patativa.mp3',
                'faixa_ogg' => '02_patativa.ogg',
                'disco_id' => '25'));

        Musicas::create(
            array(
                'faixa' => 'Se Eu Tivesse Asa',
                'compositor' => '(Geraldo Azevedo / Geraldo Amaral)',
                'letra' => '<p>Passarinho que vai praquele lado</p>
<p>Leva um recado, voa ligeiro</p>
<p>Diz ao meu amor</p>
<p>Estou t&atilde;o sozinho aqui</p>
<p>Com uma saudade sem fim</p>
<p>&nbsp;</p>
<p>Passarinho se eu tivesse asa</p>
<p>N&atilde;o te pedia, eu mesmo ia</p>
<p>Ver o meu amor, o meu amor</p>
<p>Peda&ccedil;o de c&eacute;u</p>
<p>Ardente desejo</p>
<p>Apaixonado</p>
<p>Eu quero o seu beijo</p>
<p>Ficar ao seu lado e ser mais feliz</p>
<p>&nbsp;</p>
<p>Voa, voa, voa, passarinho</p>
<p>Leve as penas do destino</p>
<p>Vai ao meu amor contar</p>
<p>Que eu n&atilde;o seu viver sem seu carinho</p>
<p>Sinto falta dos seus bra&ccedil;os</p>
<p>E da luz do seu olhar</p>
',
                'creditos' => '
<p>Arranjo de base e cordas, reg&ecirc;ncia, baixo e sanfona: Marcos Farias</p>
<p>Viol&atilde;o de nylon: Geraldo Azevedo</p>
<p>Gaita harm&ocirc;nica: Milton Guedes</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu</p>
',
                'faixa_mp3' => '02_patativa.mp3',
                'faixa_ogg' => '02_patativa.ogg',
                'disco_id' => '25'));

        Musicas::create(
            array(
                'faixa' => 'Alma Nua',
                'compositor' => '(Zeca Baleiro)',
                'letra' => '<p>Nuvens passando sobre a minha cabe&ccedil;a</p>
<p>Meu amor, me apare&ccedil;a</p>
<p>Pra que eu possa te alcan&ccedil;ar</p>
<p>Roubando flores de uma natureza morta</p>
<p>Se a beleza &eacute; o que importa</p>
<p>Tanto faz rir ou chorar</p>
<p>&nbsp;</p>
<p>Dessa maneira eu vou</p>
<p>A vida inteira</p>
<p>Pra quem me queira eu t&ocirc;</p>
<p>Se dou bandeira</p>
<p>&Eacute; pra cantar pro meu amor</p>
<p>&nbsp;</p>
<p>Vou me arrastando</p>
<p>Entre a vontade e o cansa&ccedil;o</p>
<p>Sobre p&eacute;talas de a&ccedil;o vou pisando devagar</p>
<p>Flores de pl&aacute;stico, eu sei, n&atilde;o tem espinho</p>
<p>Mas quem segue o seu caminho</p>
<p>Sem a dor onde vai dar</p>
<p>&nbsp;</p>
<p>Ca&ccedil;ando rimas</p>
<p>Ouvindo estrelas</p>
<p>Mais leve, leve, que o ar, que o avi&atilde;o</p>
<p>Fazendo juras</p>
<p>A alma nua</p>
<p>T&atilde;o quente quanto uma noite de S&atilde;o Jo&atilde;o</p>
',
                'creditos' => '
<p>Arranjo e viol&atilde;o de nylon: Zeca Baleiro</p>
<p>Viol&atilde;o de a&ccedil;o e viol&atilde;o &ldquo;dobro&rdquo;: Tuco Marcondes</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Cello: Ocelo Mendon&ccedil;a</p>
<p>Baixo: Marcos Farias</p>
',
                'faixa_mp3' => '03_se_eu_tivesse_asa.mp3',
                'faixa_ogg' => '03_se_eu_tivesse_asa.ogg',
                'disco_id' => '25'));

        Musicas::create(
            array(
                'faixa' => 'Onde Anda Voc&ecirc;',
                'compositor' => '(Chico Pessoa / Z&eacute; do Norte)',
                'letra' => '<p>Onde anda voc&ecirc;</p>
<p>Que procuro e n&atilde;o encontro</p>
<p>V&ecirc; se ao menos telefona</p>
<p>E me diga onde est&aacute;</p>
<p>&nbsp;</p>
<p>Onde anda voc&ecirc;</p>
<p>Que n&atilde;o sai da minha vida</p>
<p>E n&atilde;o vejo uma sa&iacute;da</p>
<p>Pra poder te esquecer</p>
<p>&nbsp;</p>
<p>Meu cora&ccedil;&atilde;o parece viajar no tempo</p>
<p>E acredita que um dia</p>
<p>Voc&ecirc; vai voltar pra mim</p>
<p>&nbsp;</p>
<p>&Eacute; que ele bate mais feliz</p>
<p>Quando te vejo</p>
<p>Chega at&eacute; me sufocar</p>
<p>De imensa alegria</p>
<p>&nbsp;</p>
<p>De tanto medo de perder</p>
<p>Foi que eu perdi</p>
<p>E hoje conto as horas pra te ver</p>
<p>Esperando esse dia</p>
<p>&nbsp;</p>
<p>Cad&ecirc; voc&ecirc;?</p>
<p>Por favor, me telefona</p>
<p>N&atilde;o maltrate quem te ama</p>
<p>Apare&ccedil;a nem que seja pra dizer adeus</p>
',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e sanfona: Marcos Farias</p>
<p>Guitarra: Luiz Neto</p>
<p>Saxofone: Milton Guedes</p>
<p>Baixo: Jacar&eacute;</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu</p>
',
                'faixa_mp3' => '04_alma_nua.mp3',
                'faixa_ogg' => '04_alma_nua.ogg',
                'disco_id' => '25'));

        Musicas::create(
            array(
                'faixa' => 'Querendo Mais',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>Eu vou me derramar</p>
<p>Nesse teu amor</p>
<p>E me deliciar</p>
<p>Nesse teu amor</p>
<p>Fazer o que pensar</p>
<p>Nesse teu amor</p>
<p>Ai, meu Deus, como &eacute; gostoso</p>
<p>Ter o seu amor</p>
<p>&nbsp;</p>
<p>Meu cora&ccedil;&atilde;o dispara, fica doido</p>
<p>Ta querendo fogo</p>
<p>Ta querendo mais</p>
<p>Voc&ecirc; pra mim &eacute; uma estrela linda</p>
<p>De toda maneira</p>
<p>Sempre satisfaz</p>
<p>&nbsp;</p>
<p>Vem pra me ninar</p>
<p>Vem cuidar de mim</p>
<p>Minha vida &eacute; s&oacute; te amar</p>
<p>Vem me remexer</p>
<p>Me fazer feliz</p>
<p>N&atilde;o consigo te deixar</p>
',
                'creditos' => '
<p>Arranjo de base, reg&ecirc;ncia e sanfonas: Marcos Farias</p>
<p>Guitarra: Luiz Neto</p>
<p>Baixo: Jacar&eacute;</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu</p>
',
                'faixa_mp3' => '06_querendo_mais.mp3',
                'faixa_ogg' => '06_querendo_mais.ogg',
                'disco_id' => '25'));

        Musicas::create(
            array(
                'faixa' => 'Sem Ganz&aacute; N&atilde;o &eacute; Coco',
                'compositor' => '(Chico C&eacute;sar)',
                'letra' => '<p>Coco sem ganz&aacute; n&atilde;o &eacute; coco</p>
<p>Namoro sem beijar n&atilde;o &eacute; amor</p>
<p>Morena da Penha</p>
<p>Demore, mas venha</p>
<p>Eu demoro, mas eu vou</p>
<p>&nbsp;</p>
<p>Quero ganz&aacute;, quero ganz&aacute;, quero ganz&aacute;</p>
<p>Morena tem pena</p>
<p>Tem pena no meu cocar</p>
<p>Quero beijar, quero beijar, quero beijar</p>
<p>Mas eu beijo com decoro</p>
<p>Pro namoro demorar</p>
<p>&nbsp;</p>
<p>O coco tem que ter ganz&aacute; e pandeiro</p>
<p>Um namoro maneiro, a morena tem que beijar</p>
<p>Tem que gostar do beijo</p>
<p>Pra gostar de ser beijada</p>
<p>No coco de embolada</p>
<p>E na pancada do ganz&aacute;</p>
',
                'creditos' => '
<p>Arranjo, viol&atilde;o e vocais: Chico C&eacute;sar</p>
<p>Percuss&atilde;o: Zelito Pitoco e Guilherme Untrup</p>
<p>Baixo: Sawami Jr.</p>
<p>Acordeom: Toninho Ferragutti</p>
',
                'faixa_mp3' => '07_sem_ganza_nao_e_coco.mp3',
                'faixa_ogg' => '07_sem_ganza_nao_e_coco.ogg',
                'disco_id' => '25'));

        Musicas::create(
            array(
                'faixa' => 'Pra Virar Xod&oacute;',
                'compositor' => '(Jo&atilde;o Gon&ccedil;alves / Fub&aacute; de Tapero&aacute;)',
                'letra' => '<p>Eu quero seu rostinho</p>
<p>Coladinho no meu rosto</p>
<p>Quero ver o seu pesco&ccedil;o</p>
<p>No meu ombro a descansar</p>
<p>&nbsp;</p>
<p>Seu corpo todo suado</p>
<p>Aguentando o meu repuxo</p>
<p>Ralando bucho com bucho</p>
<p>Deixa quem quiser falar</p>
<p>&nbsp;</p>
<p>Amor</p>
<p>&Eacute; o que eu tenho pra lhe dar</p>
<p>Amor</p>
<p>&Eacute; o que eu tenho pra lhe dar</p>
<p>&nbsp;</p>
<p>Se ligue a noite inteira</p>
<p>No repique do zabumba</p>
<p>No piado da sanfona</p>
<p>No balan&ccedil;o do forr&oacute;</p>
<p>&nbsp;</p>
<p>Arrasta o p&eacute; no ch&atilde;o</p>
<p>Que ta gostosa a brincadeira</p>
<p>No balan&ccedil;ar da poeira</p>
<p>Voc&ecirc; vira meu xod&oacute;</p>
',
                'creditos' => '
<p>Arranjo de base, reg&ecirc;ncia e sanfonas: Marcos Farias</p>
<p>Guitarra: Luiz Neto</p>
<p>Baixo: Jacar&eacute;</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu</p>
',
                'faixa_mp3' => '08_pra_virar_xodo.mp3',
                'faixa_ogg' => '08_pra_virar_xodo.ogg',
                'disco_id' => '25'));

        Musicas::create(
            array(
                'faixa' => 'Pra se Aninhar',
                'compositor' => '(Targino Gondim)',
                'letra' => '<p>Sinto falta de voc&ecirc;</p>
<p>Meu amor, n&atilde;o sei viver</p>
<p>Junto a essa solid&atilde;o</p>
<p>Meus olhos andam cheios d&rsquo;&aacute;gua</p>
<p>N&atilde;o escondo minha m&aacute;goa</p>
<p>Estou sofrendo de paix&atilde;o</p>
<p>&nbsp;</p>
<p>Vivo feito passarinho</p>
<p>Que t&aacute; perdido no ninho</p>
<p>E n&atilde;o encontro algu&eacute;m</p>
<p>Pra se aninhar</p>
<p>Sou um sabi&aacute; ferido</p>
<p>Sei que agora estou perdido</p>
<p>Sem voc&ecirc; pra me achar</p>
<p>&nbsp;</p>
<p>Sem voc&ecirc; n&atilde;o h&aacute; chamego</p>
<p>Nem xod&oacute; e nem sossego</p>
<p>E n&atilde;o encontro algu&eacute;m</p>
<p>Pra me acalmar</p>
<p>Meu amor, meu amorzinho</p>
<p>Pra n&oacute;s dois ficar juntinho</p>
<p>Tem meu ranchinho pra n&oacute;s morar</p>
',
                'creditos' => '
<p>Arranjo de base, reg&ecirc;ncia e sanfonas: Marcos Farias</p>
<p>Guitarra: Luiz Neto</p>
<p>Baixo: Jacar&eacute;</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu</p>
',
                'faixa_mp3' => '09_pra_se_aninhar.mp3',
                'faixa_ogg' => '09_pra_se_aninhar.ogg',
                'disco_id' => '25'));

        Musicas::create(
            array(
                'faixa' => 'Entre o C&eacute;u e o Mar',
                'compositor' => '(Roger Henri / Dudu Falc&atilde;o)',
                'letra' => '<p>Quantos labirintos</p>
<p>Tem seu cora&ccedil;&atilde;o</p>
<p>Pra eu me perder</p>
<p>E te encontrar</p>
<p>&nbsp;</p>
<p>Quantas avenidas</p>
<p>Tem o seu olhar</p>
<p>Pra eu te seguir</p>
<p>E me guiar</p>
<p>&nbsp;</p>
<p>Meu cora&ccedil;&atilde;o me leva</p>
<p>Perto demais do seu</p>
<p>Meu cora&ccedil;&atilde;o nem sabe por que</p>
<p>O meu amor</p>
<p>&Eacute; bem maior que eu</p>
<p>&nbsp;</p>
<p>Quem sabe o destino</p>
<p>Ainda vai juntar</p>
<p>O c&eacute;u e o mar</p>
<p>Eu e voc&ecirc;</p>
<p>&nbsp;</p>
<p>Quem de n&oacute;s um dia</p>
<p>Iria imaginar</p>
<p>Que o amor pudesse</p>
<p>Acontecer</p>
<p>&nbsp;</p>
<p>Seu cora&ccedil;&atilde;o &eacute; livre</p>
<p>Tanto que prende o meu</p>
<p>Seu cora&ccedil;&atilde;o nem sabe por que</p>
<p>O meu amor</p>
<p>&Eacute; t&atilde;o igual ao seu</p>

',
                'creditos' => '
<p>Arranjo, reg&ecirc;ncia e programa&ccedil;&atilde;o: Julinho Teixeira</p>
<p>Sax soprano: Z&eacute; Canuto</p>
<p>Violinos: Bernardo Bessler (spalla), Michel Bessler, Jo&atilde;o Daltro, Jos&eacute; Alves, Antonella Pareschi, Ricardo Amado, Paschoal Perrota, Walter Hack, Carlos Eduardo Hack, Carlos Eduardo Moreno, Paula Barbato e Jos&eacute; Rog&eacute;rio</p>
<p>Violas: Marie Christine Bessler, Jesu&iacute;na Passaroto, Jos&eacute; Ricardo Taboada e Eduardo Roberto</p>
<p>Cellos: M&aacute;rcio Mallard, Yura Ranevsky, Marcus Ribeiro e Hugo Pilger</p>
<p>Vocais: Marcio Lott, Chico Puppo, Jussara Louren&ccedil;o, Jurema C&acirc;ndia, Ana Leuzinger e Viviane God&oacute;i</p>
',
                'faixa_mp3' => '10_entre_o_ceu_e_o_mar.mp3',
                'faixa_ogg' => '10_entre_o_ceu_e_o_mar.ogg',
                'disco_id' => '25'));

        Musicas::create(
            array(
                'faixa' => 'Forr&oacute; de Surubim',
                'compositor' => '(Ant&ocirc;nio Barros)',
                'letra' => '<p>Ajunta os bebo</p>
<p>No forr&oacute; de Surubim</p>
<p>Pra fazer cuim</p>
<p>Para dar altera&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Por qualquer besteira</p>
<p>Puxa a faca (da bainha), fura o fole</p>
<p>V&atilde;o l&aacute; dentro tomar gole</p>
<p>De cacha&ccedil;a com lim&atilde;o</p>
<p>&nbsp;</p>
<p>&Eacute;, mas Surubim</p>
<p>Que &eacute; homem destemido</p>
<p>N&atilde;o tem medo do perigo</p>
<p>Empunha a faca na m&atilde;o</p>
<p>&nbsp;</p>
<p>Faz uma rosca</p>
<p>Na ponta do bigode</p>
<p>Com ele ningu&eacute;m pode</p>
<p>S&oacute; ele &eacute; valent&atilde;o</p>
<p>&nbsp;</p>
<p>Surubim diz que o forr&oacute;</p>
<p>S&oacute; est&aacute; mais animado</p>
<p>Quando o pau est&aacute; comendo</p>
<p>Quando o fole est&aacute; furado</p>
<p>Quando apaga o candeeiro</p>
<p>Quando &eacute; grande a confus&atilde;o</p>
<p>Quando v&ecirc; a concertina</p>
<p>Passando de m&atilde;o em m&atilde;o</p>
<p>Quando v&ecirc; os bebo mole</p>
<p>De cacha&ccedil;a com lim&atilde;o</p>
',
                'creditos' => '
<p>Arranjo de base, reg&ecirc;ncia e sanfonas: Marcos Farias</p>
<p>Clarinete: Dirceu Leitte</p>
<p>Baixo: Jacar&eacute;</p>
<p>Zabumba: Coron&eacute;</p>
<p>Tri&acirc;ngulo e pandeiro: Luiz Cl&aacute;udio</p>
<p>Bateria: Camilo Mariano</p>
<p>Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu</p>
',
                'faixa_mp3' => '11_forro_de_surubim.mp3',
                'faixa_ogg' => '11_forro_de_surubim.ogg',
                'disco_id' => '25'));

        Musicas::create(
            array(
                'faixa' => 'Lua Vadia',
                'compositor' => '(J. Michiles)',
                'letra' => '<p>Lua da minha janela</p>
<p>Singela lua vadia</p>
<p>Lua nova, lua cheia</p>
<p>Poesia que clareia</p>
<p>Minha rua, meu quintal</p>
<p>Lua branca cristalina</p>
<p>Brejeira lua menina</p>
<p>Matutina, sensual</p>
<p>&nbsp;</p>
<p>Lamparina do universo</p>
<p>Do meu verso solit&aacute;rio</p>
<p>Minha reza, meu ros&aacute;rio</p>
<p>Meu di&aacute;rio, meu cordel</p>
<p>Meu romance clandestino</p>
<p>Meu destino carrossel</p>
<p>Minha doce namorada</p>
<p>Minha amada lua de mel</p>
<p>&nbsp;</p>
<p>Quando &agrave; noite em minha cama</p>
<p>Tua luz fogosa e bela</p>
<p>Vem brechar minha janela</p>
<p>Sobejar-me de emo&ccedil;&atilde;o</p>
<p>Corpo inteiro, toda nua</p>
<p>&Eacute;s a lua do meu cio</p>
<p>Do meu cora&ccedil;&atilde;o febril</p>
<p>No vazio da solid&atilde;o</p>
',
                'creditos' => '
<p>Arranjo de base, reg&ecirc;ncia e sanfona: Marcos Farias</p>
<p>Guitarra: Luiz Neto</p>
<p>Guitarra &ldquo;steel&rdquo;: Rick Ferreira</p>
<p>Baixo: Jacar&eacute;</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu</p>
',
                'faixa_mp3' => '12_lua_vadia.mp3',
                'faixa_ogg' => '12_lua_vadia.ogg',
                'disco_id' => '25'));
        Musicas::create(
            array(
                'faixa' => 'O Amor &eacute; Lindo',
                'compositor' => '(Tony Gadelha / Afonso Gadelha / Gl&oacute;ria Gadelha)',
                'letra' => '<p>Quando voc&ecirc; me quiser, amor</p>
<p>N&atilde;o me negue o sentimento</p>
<p>Menina, a trama da vida &eacute; presente</p>
<p>&Eacute; fogo, &eacute; chama e carrega a gente</p>
<p>&nbsp;</p>
<p>Quando voc&ecirc; entender, amor</p>
<p>Que a vida tamb&eacute;m parte da dor</p>
<p>N&atilde;o quero que chore</p>
<p>Quero que me olhe como um beija-flor</p>
<p>&nbsp;</p>
<p>Quando voc&ecirc; me disser, amor</p>
<p>Que deseja ter um ninho</p>
<p>Menino, eu posso ser um passarinho</p>
<p>Que canta e beija com muito carinho</p>
<p>&nbsp;</p>
<p>Mas se todo o seu desejo for</p>
<p>Descobrir quando se sente o amor</p>
<p>Chega como um toque</p>
<p>E deixa o corpo mole como uma flor</p>
<p>&nbsp;</p>
<p>Olha nos meus olhos</p>
<p>O amor &eacute; lindo</p>
<p>Beija minha boca</p>
<p>O amor &eacute; lindo</p>
<p>Deita nos bra&ccedil;os</p>
<p>O amor &eacute; lindo</p>
',
                'creditos' => '
<p>Arranjo, sanfona, percuss&atilde;o, baixo e bateria: Marcos Farias</p>
<p>Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu</p>

',
                'faixa_mp3' => '13_o_amor_e_lindo.mp3',
                'faixa_ogg' => '13_o_amor_e_lindo.ogg',
                'disco_id' => '25'));

        Musicas::create(
            array(
                'faixa' => 'Estrela Soberana',
                'compositor' => '(Elba Ramalho / Geraldo Azevedo)',
                'letra' => '<p>Senhora M&atilde;e</p>
<p>Divina luz</p>
<p>Clara manh&atilde;</p>
<p>Que nos conduz aos c&eacute;us</p>
<p>Estrela Soberana</p>
<p>Maria, Miriam, me chama</p>
<p>Acalma e banha</p>
<p>A minha pobre alma</p>
<p>Nas &aacute;guas do seu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Estrela d&rsquo;&aacute;gua</p>
<p>Rainha e paz</p>
<p>Estrela, estrela</p>
<p>Do amor demais</p>
<p>&nbsp;</p>
<p>Senhora, doce esplendor</p>
<p>Derrama o mel de tua flor</p>
<p>E abra&ccedil;a a terra</p>
<p>Com seu manto azul</p>
<p>Aromas, b&aacute;lsamos de amor</p>
<p>Senhora M&atilde;e</p>

',
                'creditos' => '
<p>Viol&atilde;o de nylon: Geraldo Azevedo</p>
',
                'faixa_mp3' => '14_estrela_soberana.mp3',
                'faixa_ogg' => '14_estrela_soberana.ogg',
                'disco_id' => '25'));

        Musicas::create(
            array(
                'faixa' => 'Danado de Bom',
                'compositor' => '(Luiz Gonzaga / Jo&atilde;o Silva)',
                'letra' => '<p>Ta &eacute; danado de bom</p>
<p>Ta &eacute; danado de bom, meu cumpade</p>
<p>Ta &eacute; danado de bom</p>
<p>Forrozinho, bonitinho</p>
<p>Gostosinho, safadinho</p>
<p>Danado de bom</p>
<p>&nbsp;</p>
<p>Olha Macambira na zabumba</p>
<p>Z&eacute; Cupira no tri&acirc;ngulo</p>
<p>E Mariano no gongu&ecirc;</p>
<p>Olha, meu cumpadre na viola</p>
<p>Meu sobrinho na manola</p>
<p>E Cipriano no mel&ecirc;</p>
<p>Olha a meninada nas cui&eacute;</p>
<p>T&aacute; sobrando capil&eacute;</p>
<p>E j&aacute; tem bebo pra dan&aacute;</p>
<p>&nbsp;</p>
<p>Tem nego grudado que nem piolho</p>
<p>Tem nega piscando o olho</p>
<p>Me chamando pra dan&ccedil;ar</p>
<p>Tem nego grudado que nem piolho</p>
<p>Tem nega piscando o olho</p>
<p>Me chamando pra dan&ccedil;ar</p>
<p>&nbsp;</p>
<p>T&aacute; que forrozinho de primeira</p>
<p>J&aacute; num cabe forrozeira</p>
<p>E cada vez chegando mais</p>
<p>T&aacute; da cozinha pro terreiro</p>
<p>Sanfoneiro e zabumbeiro</p>
<p>Pra frente, pras tr&aacute;s</p>
<p>Olha, meu cumpade Dami&atilde;o</p>
<p>Pode apagar o lampi&atilde;o</p>
<p>Que t&aacute; querendo clarear</p>
<p>&nbsp;</p>
<p>Aguente o fole meu cumpadre Boror&oacute;</p>
<p>Que esse &eacute; o tipo do forr&oacute;</p>
<p>Que num tem hora pra parar</p>
<p>Aguente o fole meu cumpadre Boror&oacute;</p>
<p>Que esse &eacute; o tipo do forr&oacute;</p>
<p>Que num tem hora pra parar</p>
',
                'creditos' => '
<p>Arranjo e sanfona: Dominguinhos</p>
<p>Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo</p>
<p>Baixo: Arismar do Esp&iacute;rito Santo</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o e efeitos: Paulinho He-Man</p>
<p>Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;</p>
<p>Zabumba: Di&oacute; de Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio Porto</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho</p>
',
                'faixa_mp3' => '01_danado_de_bom.mp3',
                'faixa_ogg' => '01_danado_de_bom.ogg',
                'disco_id' => '26'));

        Musicas::create(
            array(
                'faixa' => 'A Sorte &eacute; Cega',
                'compositor' => '(Luiz Guimar&atilde;es)',
                'letra' => '<p>Meu amor quando eu te vejo</p>
<p>Fico a suspirar</p>
<p>Por que &eacute; que tu n&atilde;o v&ecirc;</p>
<p>Que eu vivo a te esperar</p>
<p>&nbsp;</p>
<p>Passarinho na gaiola</p>
<p>Vive sempre a cantar</p>
<p>Passa fome, passa sede</p>
<p>Sem pedir, sem reclamar</p>
<p>&nbsp;</p>
<p>Mas existe a diferen&ccedil;a</p>
<p>Passarinho eu n&atilde;o sou</p>
<p>Minha fome, minha sede</p>
<p>&Eacute; teu carinho, &eacute; teu amor</p>
<p>&nbsp;</p>
<p>Meu amor quando eu te vejo</p>
<p>Fico a suspirar</p>
<p>Por que &eacute; que tu n&atilde;o v&ecirc;</p>
<p>Que eu estou a te esperar</p>
<p>&nbsp;</p>
<p>Dizem que a sorte &eacute; cega</p>
<p>S&oacute; agora acreditei</p>
<p>Por que tu gosta de mim?</p>
<p>Meu amor, isso eu n&atilde;o sei</p>
<p>&nbsp;</p>
<p>Se ao menos eu pudesse</p>
<p>Alimentar esta ilus&atilde;o</p>
<p>Que ficou dentro de mim</p>
<p>Machucando o cora&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo e sanfona: Dominguinhos</p>
<p>Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo</p>
<p>Baixo: Arismar do Esp&iacute;rito Santo</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o e efeitos: Paulinho He-Man</p>
<p>Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;</p>
<p>Zabumba: Di&oacute; de Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio Porto</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho</p>
',
                'faixa_mp3' => '02_a_sorte_e_cega.mp3',
                'faixa_ogg' => '02_a_sorte_e_cega.ogg',
                'disco_id' => '26'));
        Musicas::create(
            array(
                'faixa' => 'Quer ir Mais Eu',
                'compositor' => '(Luiz Gonzaga / Miguel Lima)',
                'letra' => '<p>Quer ir mais eu, vamo</p>
<p>Quer ir mais eu, vambora</p>
<p>Quer ir mais eu, vamo</p>
<p>Quer ir mais eu, vambora</p>
<p>&nbsp;</p>
<p>Vambora</p>
<p>Vambora sem demora</p>
<p>Deixa a roupa na corda</p>
<p>Que n&atilde;o vai chover agora</p>
<p>&nbsp;</p>
<p>Mas se voc&ecirc; quiser ficar</p>
<p>Eu vou ali, vou ali e volto j&aacute;</p>
<p>Mas pelo sim, pelo sim, pelo n&atilde;o</p>
<p>Deixa na geladeira &aacute;gua t&ocirc;nica e lim&atilde;o</p>
',
                'creditos' => '
<p>Flauta, saxofone e vocal: Milton Guedes</p>
<p>Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo</p>
<p>Baixo: Jacar&eacute;</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o e efeitos: Paulinho He-Man</p>
<p>Sanfona: Toninho Ferragutti</p>
<p>Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;</p>
<p>Zabumba: Di&oacute; de Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio Porto</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho</p>
',
                'faixa_mp3' => '03_quer_ir_mais_eu.mp3',
                'faixa_ogg' => '03_quer_ir_mais_eu.ogg',
                'disco_id' => '26'));

        Musicas::create(
            array(
                'faixa' => 'O Xote das Meninas',
                'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas)',
                'letra' => '<p>Mandacaru quando fulor&aacute; na seca</p>
<p>&Eacute; o sinal que a chuva chega no sert&atilde;o</p>
<p>Toda menina que enjoa da boneca</p>
<p>&Eacute; sinal que o amor j&aacute; chegou no cora&ccedil;&atilde;o</p>
<p>Meia comprida, n&atilde;o quer mais sapato baixo</p>
<p>Vestido bem cintado, n&atilde;o quer mais vestir tim&atilde;o</p>
<p>&nbsp;</p>
<p>Ela s&oacute; quer, s&oacute; pensa em namorar</p>
<p>Ela s&oacute; quer, s&oacute; pensa em namorar</p>
<p>Ela s&oacute; quer, s&oacute; pensa em namorar</p>
<p>Ela s&oacute; quer, s&oacute; pensa em namorar</p>
<p>&nbsp;</p>
<p>De manh&atilde; cedo j&aacute; t&aacute; pintada</p>
<p>S&oacute; vive suspirando, sonhando acordada</p>
<p>O pai leva ao dout&ocirc; a filha adoentada</p>
<p>N&atilde;o come, n&atilde;o estuda</p>
<p>N&atilde;o dorme, n&atilde;o quer nada</p>
<p>&nbsp;</p>
<p>Mas o dout&ocirc; nem examina</p>
<p>Chamando o pai de lado</p>
<p>Lhe diz logo em surdina</p>
<p>O mal &eacute; da idade</p>
<p>E que pra tal menina</p>
<p>N&atilde;o h&aacute; um s&oacute; rem&eacute;dio em toda a medicina</p>
',
                'creditos' => '
<p>Arranjo e sanfona: Dominguinhos</p>
<p>Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo</p>
<p>Baixo: Arismar do Esp&iacute;rito Santo</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o e efeitos: Paulinho He-Man</p>
<p>Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;</p>
<p>Zabumba: Di&oacute; de Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio Porto</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho</p>
',
                'faixa_mp3' => '04_o_xote_das_meninas.mp3',
                'faixa_ogg' => '04_o_xote_das_meninas.ogg',
                'disco_id' => '26'));

        Musicas::create(
            array(
                'faixa' => 'O Xamego da Guiomar',
                'compositor' => '(Luiz Gonzaga / Miguel Lima) Participa&ccedil;&atilde;o especial: <strong> Zeca Pagodinho</strong>',
                'letra' => '<p>Acho muito interessante o xamego da Guiomar</p>
<p>Ela diz a todo instante que comigo vai casar</p>
<p>N&atilde;o creio muito nisso, ela sabe muito bem</p>
<p>Aceito o compromisso pela gaita que ela tem</p>
<p>&nbsp;</p>
<p>Por causa dela eu j&aacute; perdi a calma e o sossego</p>
<p>Credo, nunca vi tanto xamego</p>
<p>Pois a Guiomar est&aacute; doidinha pra casar</p>
<p>E eu tamb&eacute;m n&atilde;o t&ocirc; aqui pra bobear</p>
<p>&nbsp;</p>
<p>Todo mundo sabe, todo mundo diz</p>
<p>Que ela tem por mim um grande apego</p>
<p>Por&eacute;m, n&atilde;o ata nem desata</p>
<p>Com a bossa do xamego</p>
<p>Assim n&atilde;o h&aacute; quem possa</p>
<p>Ter calma, ter sossego</p>
<p>Mas digo francamente</p>
<p>E posso at&eacute; jurar</p>
<p>Que a gaita da Guiomar vai se acabar</p>
<p>(Eu vou gastar!)</p>
',
                'creditos' => '
<p>Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo</p>
<p>Baixo: Maur&iacute;cio Hulk</p>
<p>Bateria: Camilo Mariano</p>
<p>Clarinete: Dirceu Leitte</p>
<p>Percuss&atilde;o e efeitos: Paulinho He-Man</p>
<p>Sanfona: Toninho Ferragutti</p>
<p>Viol&atilde;o de 7 cordas: Paulo Roberto Pereira Ara&uacute;jo (Paul&atilde;o)</p>
<p>Bandolim: Arlindo Cruz</p>
<p>Cavaquinho: Paulinho Soares</p>
<p>Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;</p>
<p>Zabumba: Di&oacute; de Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio Porto</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho</p>
',
                'faixa_mp3' => '05_o_xamego_da_guiomar.mp3',
                'faixa_ogg' => '05_o_xamego_da_guiomar.ogg',
                'disco_id' => '26'));

        Musicas::create(
            array(
                'faixa' => 'Vem Morena',
                'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas)',
                'letra' => '<p>Vem morena pros meus bra&ccedil;os</p>
<p>Vem morena, vem dan&ccedil;ar</p>
<p>Quero ver tu requebrando</p>
<p>Quero ver tu requebrar</p>
<p>&nbsp;</p>
<p>Quero ver tu remexer</p>
<p>No resfulego da sanfona</p>
<p>Int&eacute; que o sol raiar</p>
<p>&nbsp;</p>
<p>Esse teu fungado quente</p>
<p>Bem no p&eacute; do meu pesco&ccedil;o</p>
<p>Arrepia o corpo da gente</p>
<p>Faz o veio ficar mo&ccedil;o</p>
<p>E o cora&ccedil;&atilde;o de repente</p>
<p>Bota o sangue em arvoro&ccedil;o</p>
<p>&nbsp;</p>
<p>Esse teu suor sargado</p>
<p>&Eacute; gostoso e tem sabor</p>
<p>Pois o teu corpo suado</p>
<p>Com esse cheiro de ful&ocirc;</p>
<p>Tem um gosto temperado</p>
<p>Dos temperos do amor</p>
',
                'creditos' => '
<p>Arranjo e sanfona: Dominguinhos</p>
<p>Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo</p>
<p>Baixo: Arismar do Esp&iacute;rito Santo</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o e efeitos: Paulinho He-Man</p>
<p>Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;</p>
<p>Zabumba: Di&oacute; de Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio Porto</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho</p>
',
                'faixa_mp3' => '06_vem_morena.mp3',
                'faixa_ogg' => '06_vem_morena.ogg',
                'disco_id' => '26'));

        Musicas::create(
            array(
                'faixa' => 'Or&eacute;lia',
                'compositor' => '(Humberto Teixeira)',
                'letra' => '<p>Caminheiro sem destino</p>
<p>O destino &eacute; Deus quem d&aacute;</p>
<p>Sempre em paz comigo mesmo</p>
<p>Cora&ccedil;&atilde;o s&oacute; pra cantar</p>
<p>Um xamego hoje aqui</p>
<p>Amanh&atilde;, um dengo acol&aacute;</p>
<p>E o p&oacute; das estrada apagando</p>
<p>Os xod&oacute;s que eu tive por l&aacute;</p>
<p>Foi entonce que ela surgiu</p>
<p>Tava escrito Or&eacute;lia chegar</p>
<p>&nbsp;</p>
<p>Or&eacute;lia, ai, ai, Or&eacute;lia</p>
<p>S&oacute; de olhar teu olhar magneto</p>
<p>Vi logo o meu fim</p>
<p>Que paix&atilde;o, foi um choque da peste</p>
<p>Meu corpo tremeu que nem curumim</p>
<p>&nbsp;</p>
<p>Or&eacute;lia, ai, ai, Or&eacute;lia</p>
<p>Ai, bichinha, se tu me deixar</p>
<p>Vai ser muito ruim</p>
<p>Fa&ccedil;o arte no leste e no oeste</p>
<p>No sul, no nordeste</p>
<p>Dou cabo de mim</p>
',
                'creditos' => '
<p>Arranjo e sanfona: Dominguinhos</p>
<p>Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo</p>
<p>Baixo: Arismar do Esp&iacute;rito Santo</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o e efeitos: Paulinho He-Man</p>
<p>Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;</p>
<p>Zabumba: Di&oacute; de Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio Porto</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho</p>
',
                'faixa_mp3' => '07_orelia.mp3',
                'faixa_ogg' => '07_orelia.ogg',
                'disco_id' => '26'));

        Musicas::create(
            array(
                'faixa' => 'Sorriso Cativante',
                'compositor' => '(Dominguinhos / Anast&aacute;cia)',
                'letra' => '<p>Quando chego no meu rancho</p>
<p>Vejo minha moreninha</p>
<p>De sorriso cativante</p>
<p>Eu sacudo a poeira da estrada</p>
<p>E os contratempos da vida</p>
<p>Deixo em lugar distante</p>
<p>Minha paz t&aacute; ali dentro</p>
<p>Essa moreninha &eacute; meu calmante</p>
<p>Minha paz t&aacute; ali dentro</p>
<p>Essa moreninha &eacute; meu calmante</p>
<p>&nbsp;</p>
<p>Tro&ccedil;o gostoso &eacute; o amor</p>
<p>E coisa gostosa &eacute; querer bem</p>
<p>&Eacute; uma fogueira bem acesa</p>
<p>E a quentura da fogueira s&oacute; faz bem</p>
<p>Quando chego perto da morena</p>
<p>Sinto que eu pego fogo tamb&eacute;m</p>
<p>Quando chego perto da morena</p>
<p>Sinto que eu pego fogo tamb&eacute;m</p>
',
                'creditos' => '
<p>Arranjo e sanfona: Dominguinhos</p>
<p>Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo</p>
<p>Baixo: Arismar do Esp&iacute;rito Santo</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o e efeitos: Paulinho He-Man</p>
<p>Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;</p>
<p>Zabumba: Di&oacute; de Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio Porto</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho</p>
',
                'faixa_mp3' => '08_sorriso_cativante.mp3',
                'faixa_ogg' => '08_sorriso_cativante.ogg',
                'disco_id' => '26'));

        Musicas::create(
            array(
                'faixa' => 'Aquilo Bom (Garotas do Leblon)',
                'compositor' => '(Luiz Gonzaga / Severino Ramos)',
                'letra' => '<p>Quando eu me encontro</p>
<p>Com as garotas do Leblon</p>
<p>Chega a ser aquilo bom, aquilo bom</p>
<p>&Eacute; Maricota, &eacute; Mariquita e Marion</p>
<p>Chega ser aquilo bom, aquilo bom</p>
<p>&Eacute; Maricota, &eacute; Mariquita e Marion</p>
<p>Chega ser aquilo bom, aquilo bom</p>
<p>&nbsp;</p>
<p>Tem uma moreninha</p>
<p>E tem uma marrom</p>
<p>E tem uma loira sofisticadinha</p>
<p>Chega a ser aquilo bom, aquilo bom</p>
<p>Chega a ser aquilo bom, aquilo bom</p>
<p>&nbsp;</p>
<p>Quando chega o domingo</p>
<p>Vou correndo pro Leblon</p>
<p>Chego na praia</p>
<p>Tibungo com as meninas</p>
<p>Chega ser aquilo bom, aquilo bom</p>
<p>Chega ser aquilo bom, aquilo bom</p>
<p>&nbsp;</p>
<p><strong>Facilita</strong></p>
<p>(Luiz Ramalho)</p>
<hr class="space-letra-top-musicas">
<p>Comadre Joana sempre reparou</p>
<p>A minissaia que a filha tem</p>
<p>O namorado se invocou tamb&eacute;m</p>
<p>E certo dia pra ela falou</p>
<p>Tua saia, Bastiana, termina muito cedo</p>
<p>Tua blusa, Bastiana, come&ccedil;a muito tarde</p>
<p>Tua saia, Bastiana, termina muito cedo</p>
<p>Tua blusa, Bastiana, come&ccedil;a muito tarde</p>
<p>&nbsp;</p>
<p>Mas ela respondeu: oi, facilita</p>
<p>Pra dan&ccedil;ar o xenhenh&eacute;m, oi, facilita</p>
<p>Pra peneirar o xer&eacute;m, oi, facilita</p>
<p>Pra dan&ccedil;ar na gafieira, oi, facilita</p>
<p>Pra mandar pra lavadeira, oi, facilita</p>
<p>Pra correr na capoeira, oi, facilita</p>
<p>Pra subir no caminh&atilde;o, oi, facilita</p>
<p>Pra passar no ribeir&atilde;o, oi, facilita</p>
<p>&nbsp;</p>
<p><strong>O cheiro da Carolina</strong></p>
<p>(Amorim Roxo / Z&eacute; Gonzaga)</p>
<hr class="space-letra-top-musicas">
<p>Carolina foi pro samba, Carolina</p>
<p>Pra dan&ccedil;ar o xenhenh&eacute;m, Carolina</p>
<p>Todo mundo caidinho, Carolina</p>
<p>Pelo cheiro que ela tem, Carolina</p>
<p>&nbsp;</p>
<p>Hum, hum, hum, Carolina</p>
<p>Hum, hum, hum, Carolina</p>
<p>Hum, hum, hum, Carolina</p>
<p>Pelo cheiro que ela tem</p>
<p>&nbsp;</p>
<p>Gente que nunca dan&ccedil;ou, Carolina</p>
<p>Nesse dia quis dan&ccedil;ar, Carolina</p>
<p>S&oacute; por causa do cheirinho, Carolina</p>
<p>Todo mundo tava l&aacute;, Carolina</p>
<p>&nbsp;</p>
<p>Hum, hum, hum, Carolina</p>
<p>Hum, hum, hum, Carolina</p>
<p>Hum, hum, hum, Carolina</p>
<p>Todo mundo tava l&aacute;</p>
<p>&nbsp;</p>
<p>Foi chegando o delegado, Carolina</p>
<p>Pra olhar os que dan&ccedil;ava, Carolina</p>
<p>O xerife entrou na dan&ccedil;a, Carolina</p>
<p>E no fim tamb&eacute;m cheirava, Carolina</p>
<p>&nbsp;</p>
<p>Hum, hum, hum, Carolina</p>
<p>Hum, hum, hum, Carolina</p>
<p>Hum, hum, hum, Carolina</p>
<p>E no fim tamb&eacute;m cheirava</p>
',
                'creditos' => '
<p>Arranjo e sanfona: Dominguinhos</p>
<p>Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo</p>
<p>Baixo: Arismar do Esp&iacute;rito Santo</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o e efeitos: Paulinho He-Man</p>
<p>Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;</p>
<p>Zabumba: Di&oacute; de Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio Porto</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho</p>
',
                'faixa_mp3' => '09_aquilo_bom_facilita_o_cheiro_da_carolina.mp3',
                'faixa_ogg' => '09_aquilo_bom_facilita_o_cheiro_da_carolina.ogg',
                'disco_id' => '26'));

        Musicas::create(
            array(
                'faixa' => 'Xamego',
                'compositor' => '(Luiz Gonzaga / Miguel Lima)',
                'letra' => '<p>Carolina foi pro samba, Carolina</p>
<p>Pra dan&ccedil;ar o xenhenh&eacute;m, Carolina</p>
<p>Todo mundo caidinho, Carolina</p>
<p>Pelo cheiro que ela tem, Carolina</p>
<p>&nbsp;</p>
<p>Hum, hum, hum, Carolina</p>
<p>Hum, hum, hum, Carolina</p>
<p>Hum, hum, hum, Carolina</p>
<p>Pelo cheiro que ela tem</p>
<p>&nbsp;</p>
<p>Gente que nunca dan&ccedil;ou, Carolina</p>
<p>Nesse dia quis dan&ccedil;ar, Carolina</p>
<p>S&oacute; por causa do cheirinho, Carolina</p>
<p>Todo mundo tava l&aacute;, Carolina</p>
<p>&nbsp;</p>
<p>Hum, hum, hum, Carolina</p>
<p>Hum, hum, hum, Carolina</p>
<p>Hum, hum, hum, Carolina</p>
<p>Todo mundo tava l&aacute;</p>
<p>&nbsp;</p>
<p>Foi chegando o delegado, Carolina</p>
<p>Pra olhar os que dan&ccedil;ava, Carolina</p>
<p>O xerife entrou na dan&ccedil;a, Carolina</p>
<p>E no fim tamb&eacute;m cheirava, Carolina</p>
<p>&nbsp;</p>
<p>Hum, hum, hum, Carolina</p>
<p>Hum, hum, hum, Carolina</p>
<p>Hum, hum, hum, Carolina</p>
<p>E no fim tamb&eacute;m cheirava</p>
',
                'creditos' => '
<p>Arranjo e sanfona: Dominguinhos</p>
<p>Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo</p>
<p>Baixo: Arismar do Esp&iacute;rito Santo</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o e efeitos: Paulinho He-Man</p>
<p>Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;</p>
<p>Zabumba: Di&oacute; de Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio Porto</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho</p>
',
                'faixa_mp3' => '10_xamego.mp3',
                'faixa_ogg' => '10_xamego.ogg',
                'disco_id' => '26'));

        Musicas::create(
            array(
                'faixa' => 'Numa Sala de Reboco',
                'compositor' => '(Z&eacute; Marcolino / Luiz Gonzaga)',
                'letra' => '<p>Todo tempo quanto houver</p>
<p>Pra mim &eacute; pouco</p>
<p>Pra dan&ccedil;ar com meu benzinho</p>
<p>Numa sala de reboco</p>
<p>&nbsp;</p>
<p>Enquanto o fole</p>
<p>T&aacute; tocando, t&aacute; gemendo</p>
<p>Vou dan&ccedil;ando e vou dizendo</p>
<p>Meu sofrer pra ela s&oacute;</p>
<p>&nbsp;</p>
<p>E ningu&eacute;m nota</p>
<p>Que eu t&ocirc; lhe conversando</p>
<p>E nosso amor vai aumentando</p>
<p>E pra que coisa mais mi&oacute;</p>
<p>&nbsp;</p>
<p>S&oacute; fico triste</p>
<p>Quando o dia amanhece</p>
<p>Ai, meu Deus, se eu pudesse</p>
<p>Acabar separa&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Pra n&oacute;s viver</p>
<p>Igualado a sanguessuga</p>
<p>E nosso amor pede mais fuga</p>
<p>Do que essa que nos d&atilde;o</p>
',
                'creditos' => '
<p>&nbsp;</p>
<p>Arranjo e sanfona: Dominguinhos</p>
<p>Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo</p>
<p>Baixo: Arismar do Esp&iacute;rito Santo</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o e efeitos: Paulinho He-Man</p>
<p>Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;</p>
<p>Zabumba: Di&oacute; de Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio Porto</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho</p>
',
                'faixa_mp3' => '11_numa_sala_de_reboco.mp3',
                'faixa_ogg' => '11_numa_sala_de_reboco.ogg',
                'disco_id' => '26'));
        Musicas::create(
            array(
                'faixa' => 'Calango da Lacraia',
                'compositor' => '(Luiz Gonzaga / Jeov&aacute; Portela) Participa&ccedil;&otilde;es especiais: <strong>Fub&aacute; de Tapero&aacute; e Di&oacute; de Ara&uacute;jo</strong>',
                'letra' => '<p>Eu vou te contar um caso</p>
<p>Voc&ecirc; ri que se escangaia</p>
<p>A mulher do Z&eacute; Maria</p>
<p>Foi dan&ccedil;ar, caiu a saia</p>
<p>&nbsp;</p>
<p>Calangotango</p>
<p>Do calango da lacraia</p>
<p>Meu cabrito t&aacute; na corda</p>
<p>Meu cavalo ta na baia</p>
<p>&nbsp;</p>
<p>Minha filha n&atilde;o se casa</p>
<p>Com homem que n&atilde;o trabaia</p>
<p>Trabaiador quando &eacute; bom</p>
<p>Segunda-feira n&atilde;o faia</p>
<p>&nbsp;</p>
<p>No lugar que eu jogo bola</p>
<p>N&atilde;o quero jogo de maia</p>
<p>Tamb&eacute;m quero ser direito</p>
<p>Voc&ecirc; mesmo me atrapaia</p>
<p>&nbsp;</p>
<p>Desaforo de mineiro</p>
<p>&Eacute; chamar nortista de tr&aacute;ia</p>
<p>O nortista puxa a faca</p>
<p>Mineiro puxa a navaia</p>
<p>&nbsp;</p>
<p><strong>Nega Zefa</strong></p>
<p>(Severino Ramos / Noel Silva)</p>
<hr class="space-letra-top-musicas">
<p>Gente</p>
<p>Olha a Zefa como dan&ccedil;a o xaxeado</p>
<p>&Ecirc;ta nega da mulesta do cabelo arrepiado</p>
<p>&nbsp;</p>
<p>&Eacute; bonito a gente ver a nega no sal&atilde;o</p>
<p>Todo mundo fica olhando a nega tipo viol&atilde;o</p>
<p>&Eacute; bonito a gente ver a nega no sal&atilde;o</p>
<p>&Ecirc;ta nega da mulesta pra dan&ccedil;ar coco e bai&atilde;o</p>
<p>&nbsp;</p>
<p>A nega n&atilde;o &eacute; mineira, n&atilde;o</p>
<p>A nega n&atilde;o &eacute; baiana, n&atilde;o</p>
<p>Se n&atilde;o &eacute; pernambucana</p>
<p>Vixe, que a nega &eacute; paraibana</p>
<p>&nbsp;</p>
<p><strong>Coco xe&ecirc;m</strong></p>
<p>(Severino Ramos / Jacy Santos)</p>
<hr class="space-letra-top-musicas">
<p>Tome ten&ecirc;ncia no coco, mulher</p>
<p>&Eacute; coco xenhenh&eacute;m feito pra dan&ccedil;ar</p>
<p>Tome ten&ecirc;ncia no coco, mulher</p>
<p>Tome ten&ecirc;ncia no coco</p>
<p>Vamo coco vadiar</p>
<p>&nbsp;</p>
<p>S&oacute; nas cadeira dessa nega bole-bole</p>
<p>Que parece at&eacute; o fole da sanfona do Nen&eacute;m</p>
<p>Olha, as cadeira dessa nega tem um molho</p>
<p>Todo mundo bota o olho quando dan&ccedil;a o xenhenh&eacute;m</p>
<p>&nbsp;</p>
<p>Xenhenh&eacute;m, xenhenh&eacute;m, xenhenh&eacute;m</p>
<p>Todo mundo bota o olho quando dan&ccedil;a o xenhenh&eacute;m</p>
<p>Xenhenh&eacute;m, xenhenh&eacute;m, xenhenh&eacute;m</p>
<p>Todo mundo bota o olho quando dan&ccedil;a o xenhenh&eacute;m</p>
<p>&nbsp;</p>
<p>E quando chego l&aacute; na sede do Cunheca</p>
<p>Eu fico logo sapeca quando a nega diz que vem</p>
<p>Falo que a preta e feia, mas eu dou valor</p>
<p>Pois a nega &eacute; mesmo um show quando dan&ccedil;a o xenhenh&eacute;m</p>
<p>&nbsp;</p>
<p>Xenhenh&eacute;m, xenhenh&eacute;m, xenhenh&eacute;m</p>
<p>Pois a nega &eacute; mesmo um show quando dan&ccedil;a o xenhenh&eacute;m</p>
<p>Xenhenh&eacute;m, xenhenh&eacute;m, xenhenh&eacute;m</p>
<p>Pois a nega &eacute; mesmo um show quando dan&ccedil;a o xenhenh&eacute;m</p>
',
                'creditos' => '
<p>Arranjo e sanfona: Dominguinhos</p>
<p>Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo</p>
<p>Baixo: Arismar do Esp&iacute;rito Santo</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o e efeitos: Paulinho He-Man</p>
<p>Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;</p>
<p>Zabumba: Di&oacute; de Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio Porto</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho</p>
',
                'faixa_mp3' => '12_calango_da_lacraia_nega_zefa_coco_xeem.mp3',
                'faixa_ogg' => '12_calango_da_lacraia_nega_zefa_coco_xeem.ogg',
                'disco_id' => '26'));

        Musicas::create(
            array(
                'faixa' => 'Canta Luiz',
                'compositor' => '(Dominguinhos / Poeta Oliveira) Participa&ccedil;&atilde;o especial: <strong> Dominguinhos</strong>',
                'letra' => '<p>Canta Luiz, canta Luiz</p>
<p>Tua sanfona e teu cantar me faz feliz</p>
<p>Toca Luiz, canta pra n&oacute;s</p>
<p>Quero dormir e acordar com tua voz</p>
<p>&nbsp;</p>
<p>Uma sanfona, gib&atilde;o e chap&eacute;u de couro</p>
<p>E o cantar desse grande sanfoneiro</p>
<p>Sua can&ccedil;&atilde;o j&aacute; completou bodas de ouro</p>
<p>Sendo cantada nos rinc&otilde;es do mundo inteiro</p>
<p>&nbsp;</p>
<p>Vai Asa Branca cantar l&aacute; no Juazeiro</p>
<p>Que o Assum Preto j&aacute; chegou pra te escutar</p>
<p>Diz Acau&atilde; que me espere no umbuzeiro</p>
<p>Que o Car&atilde;o j&aacute; est&aacute; come&ccedil;ando a cantar</p>
',
                'creditos' => '
<p>Arranjo e sanfona: Dominguinhos</p>
<p>Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo</p>
<p>Baixo: Arismar do Esp&iacute;rito Santo</p>
<p>Bateria: Camilo Mariano</p>
<p>Percuss&atilde;o e efeitos: Paulinho He-Man</p>
<p>Tri&acirc;ngulo e pandeiro: Fub&aacute; de Tapero&aacute;</p>
<p>Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;</p>
<p>Zabumba: Di&oacute; de Ara&uacute;jo</p>
<p>Teclados: Luiz Ant&ocirc;nio Porto</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho</p>
',
                'faixa_mp3' => '13_canta_luiz.mp3',
                'faixa_ogg' => '13_canta_luiz.ogg',
                'disco_id' => '26'));

        Musicas::create(
            array(
                'faixa' => 'Asa Branca',
                'compositor' => '(Luiz Gonzaga / Humberto Teixeira)<em> cita&ccedil;&atilde;o: <strong>Canta Luiz</strong> (Dominguinhos)</em>',
                'letra' => '<p><em>Canta Luiz, canta Luiz</em></p>
<p><em>Tua sanfona e teu cantar me faz feliz</em></p>
<p><em>Toca Luiz, canta pra n&oacute;s</em></p>
<p><em>Quero dormir e acordar com tua voz</em></p>
<p>&nbsp;</p>
<p>Quando olhei a terra ardendo</p>
<p>Qual fogueira de S&atilde;o Jo&atilde;o</p>
<p>Eu perguntei a Deus do c&eacute;u, ai</p>
<p>Por que tamanha judia&ccedil;&atilde;o</p>
<p>Eu perguntei a Deus do c&eacute;u, ai</p>
<p>Por que tamanha judia&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Que braseiro, que fornalha</p>
<p>Nem um p&eacute; de planta&ccedil;&atilde;o</p>
<p>Por falta d&rsquo;&aacute;gua perdi meu gado</p>
<p>Morreu de sede meu alaz&atilde;o</p>
<p>Por falta d&rsquo;&aacute;gua perdi meu gado</p>
<p>Morreu de sede meu alaz&atilde;o</p>
<p>&nbsp;</p>
<p>Int&eacute; mesmo a Asa Branca</p>
<p>Bateu asas do sert&atilde;o</p>
<p>Entonce eu disse: &ldquo;adeus Rosinha</p>
<p>Guarda contigo meu cora&ccedil;&atilde;o&rdquo;</p>
<p>Entonce eu disse: &ldquo;adeus Rosinha</p>
<p>Guarda contigo meu cora&ccedil;&atilde;o&rdquo;</p>
<p>&nbsp;</p>
<p>Hoje longe muitas l&eacute;guas</p>
<p>Na mais triste solid&atilde;o</p>
<p>Espero a chuva cair de novo</p>
<p>Pra mim voltar pro meu sert&atilde;o</p>
<p>Espero a chuva cair de novo</p>
<p>Pra mim voltar pro meu sert&atilde;o</p>
<p>&nbsp;</p>
<p>Quando o verde dos teus olhos</p>
<p>Se espalhar na planta&ccedil;&atilde;o</p>
<p>Eu te asseguro, n&atilde;o chore n&atilde;o</p>
<p>Eu voltarei viu, meu cora&ccedil;&atilde;o</p>
<p>Eu te asseguro, n&atilde;o chore n&atilde;o, viu</p>
<p>Que eu voltarei viu, meu cora&ccedil;&atilde;o</p>
',
                'creditos' => '
',
                'faixa_mp3' => '01_asa_branca.mp3',
                'faixa_ogg' => '01_asa_branca.ogg',
                'disco_id' => '27'));

        Musicas::create(
            array(
                'faixa' => 'A Vida do Viajante',
                'compositor' => '(Luiz Gonzaga / Herv&eacute; Cordovil)',
                'letra' => '<p>Minha vida &eacute; andar por esse pa&iacute;s</p>
<p>Pra ver se um dia descanso feliz</p>
<p>Guardando as recorda&ccedil;&otilde;es</p>
<p>Das terras onde passei</p>
<p>Andando pelos sert&otilde;es</p>
<p>Dos amigos que l&aacute; deixei</p>
<p>&nbsp;</p>
<p>Chuva e sol, poeira e carv&atilde;o</p>
<p>Longe de casa, sigo o roteiro</p>
<p>Mais uma esta&ccedil;&atilde;o</p>
<p>E a saudade do Seu Gonzag&atilde;o</p>
<p>&nbsp;</p>
<p>Mar e terra, inverno e ver&atilde;o</p>
<p>Mostro o sorriso, mostro a alegria</p>
<p>Mas eu mesmo, n&atilde;o</p>
<p>E a saudade no meu cora&ccedil;&atilde;o</p>
',
                'creditos' => '
',
                'faixa_mp3' => '02_a_vida_do_viajante.mp3',
                'faixa_ogg' => '02_a_vida_do_viajante.ogg',
                'disco_id' => '27'));

        Musicas::create(
            array(
                'faixa' => 'Imbalan&ccedil;a',
                'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas) <em> cita&ccedil;&atilde;o: <strong>Quando eu contar (Iai&aacute;)</strong> (Serginho Meriti / Beto Sem Bra&ccedil;o)</em>',
                'letra' => '<p>&Oacute;ia a paia do coqueiro quando o vento d&aacute;</p>
<p>O tombo da jangada nas ondas do mar</p>
<p>Olha o tombo da jangada nas ondas do mar</p>
<p>&Oacute;ia a paia do coqueiro quando o vento d&aacute;</p>
<p>&nbsp;</p>
<p>Pra voc&ecirc; aguentar meu roj&atilde;o</p>
<p>&Eacute; preciso saber requebrar</p>
<p>Ter molejo nos p&eacute;s e nas m&atilde;os</p>
<p>Ter no corpo o balan&ccedil;o do mar</p>
<p>Ser que nem carrapeta no ch&atilde;o</p>
<p>E virar folha seca no ar</p>
<p>Que &eacute; pra quando escutar meu bai&atilde;o</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
<p>&nbsp;</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
<p>&nbsp;</p>
<p>Voc&ecirc; tem que viver no sert&atilde;o</p>
<p>Pra na rede aprender embalar</p>
<p>Aprender a bater no pil&atilde;o</p>
<p>Na peneira aprender peneirar</p>
<p>Ver relampo no mei do trov&atilde;o</p>
<p>Fazer cobra de fogo no ar</p>
<p>Que &eacute; pra quando escutar meu bai&atilde;o</p>
<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>
',
                'creditos' => '
',
                'faixa_mp3' => '03_imbalanca.mp3',
                'faixa_ogg' => '03_imbalanca.ogg',
                'disco_id' => '27'));

        Musicas::create(
            array(
                'faixa' => 'Pagode Russo',
                'compositor' => '(Luiz Gonzaga / Jo&atilde;o Silva)',
                'letra' => '<p>Ontem eu sonhei que tava em Moscou</p>
<p>Dan&ccedil;ando pagode russo na boate Cossacou</p>
<p>Ontem eu sonhei que tava em Moscou</p>
<p>Dan&ccedil;ando pagode russo na boate Cossacou</p>
<p>&nbsp;</p>
<p>Parecia at&eacute; um frevo naquele cai ou n&atilde;o cai</p>
<p>Parecia at&eacute; um frevo naquele vai ou n&atilde;o vai</p>
<p>Parecia at&eacute; um frevo naquele cai ou n&atilde;o cai</p>
<p>Parecia at&eacute; um frevo naquele vai ou n&atilde;o vai</p>
<p>&nbsp;</p>
<p>Entra cossaco, cossaco dan&ccedil;a agora</p>
<p>Na dan&ccedil;a do cossaco, n&atilde;o fica cossaco fora</p>
<p>Entra cossaco, cossaco dan&ccedil;a agora</p>
<p>Na dan&ccedil;a do cossaco, n&atilde;o fica cossaco fora</p>
<p>&nbsp;</p>
<p><strong>Onde tu t&aacute; nen&eacute;m</strong></p>
<p>(Luiz Bandeira)</p>
<hr class="space-letra-top-musicas">
<p>Onde tu t&aacute; nen&eacute;m</p>
<p>Eu vim te procurar</p>
<p>Vamos fazer as pazes</p>
<p>Tenho tantas frases pra te agradar</p>
<p>&nbsp;</p>
<p>Onde tu t&aacute; nen&eacute;m</p>
<p>Eu vim te procurar</p>
<p>Saudade sai me solta</p>
<p>T&ocirc; aqui de volta pra meu bem beijar</p>
<p>&nbsp;</p>
<p>Estou aqui de novo junto ao meu povo</p>
<p>Minha gente amiga</p>
<p>Quem me conhece sabe</p>
<p>Que eu detesto intriga</p>
<p>&nbsp;</p>
<p>Uma saudade enorme</p>
<p>Come e deita e dorme no meu cora&ccedil;&atilde;o</p>
<p>Rem&eacute;dio indicado pra quem est&aacute; errado</p>
<p>&Eacute; pedir perd&atilde;o</p>
<p>&nbsp;</p>
<p>Por uma briga &agrave; toa</p>
<p>Tanta coisa boa a gente t&aacute; perdendo</p>
<p>Sert&atilde;o em noite branca</p>
<p>O dia amanhecendo</p>
<p>&nbsp;</p>
<p>Nossa conversa linda</p>
<p>Tem segredo ainda para um s&eacute;culo mais</p>
<p>N&atilde;o &eacute; pra nos gabar</p>
<p>Mas n&atilde;o existe um par como n&oacute;s dois se faz</p>
',
                'creditos' => '
',
                'faixa_mp3' => '04_pagode_russo_onde_tu_ta_nenem.mp3',
                'faixa_ogg' => '04_pagode_russo_onde_tu_ta_nenem.ogg',
                'disco_id' => '27'));

        Musicas::create(
            array(
                'faixa' => 'Numa Sala de Reboco',
                'compositor' => '(Z&eacute; Marcolino / Luiz Gonzaga)',
                'letra' => '<p>Todo tempo quanto houver</p>
<p>Pra mim &eacute; pouco</p>
<p>Pra dan&ccedil;ar com meu benzinho</p>
<p>Numa sala de reboco</p>
<p>&nbsp;</p>
<p>Enquanto o fole</p>
<p>T&aacute; tocando, t&aacute; gemendo</p>
<p>Vou cantando e vou dizendo</p>
<p>Meu sofrer pra ela s&oacute;</p>
<p>&nbsp;</p>
<p>E ningu&eacute;m nota</p>
<p>Que eu t&ocirc; lhe conversando</p>
<p>E nosso amor vai aumentando</p>
<p>E pra que coisa mais mi&oacute;</p>
<p>&nbsp;</p>
<p>S&oacute; fico triste</p>
<p>Quando o dia amanhece</p>
<p>Ai, meu Deus, se eu pudesse</p>
<p>Acabar separa&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Pra n&oacute;s viver</p>
<p>Igualado a sanguessuga</p>
<p>E nosso amor pede mais fuga</p>
<p>Do que essa que nos d&atilde;o</p>
<p>&nbsp;</p>
<p><strong>Estrada de Canind&eacute;</strong></p>
<p>(Luiz Gonzaga / Humberto Teixeira)</p>
<hr class="space-letra-top-musicas">
<p>Ai, ai, que bom</p>
<p>Que bom, que bom que &eacute;</p>
<p>Uma estrada e uma caboca</p>
<p>Uma gente andando a p&eacute;</p>
<p>&nbsp;</p>
<p>Ai, ai, que bom</p>
<p>Que bom, que bom que &eacute;</p>
<p>Uma estrada e a lua branca</p>
<p>No sert&atilde;o de Canind&eacute;</p>
<p>&nbsp;</p>
<p>Artom&oacute;ve l&aacute; nem se sabe</p>
<p>Se &eacute; home ou se &eacute; mui&eacute;</p>
<p>Quem &eacute; rico anda em burrico</p>
<p>Quem &eacute; pobre anda a p&eacute;</p>
<p>&nbsp;</p>
<p>Mas o pobre v&ecirc; nas estrada</p>
<p>O orvaio beijando as flor</p>
<p>V&ecirc; de perto o galo campina</p>
<p>Que quando canta muda de cor</p>
<p>&nbsp;</p>
<p>Vai moiando os p&eacute;s nos riacho</p>
<p>Que &aacute;gua fresca, Nosso Senhor!</p>
<p>Vai oiando coisa a gran&eacute;</p>
<p>Coisas que pra mode ver</p>
<p>O crist&atilde;o tem que andar a p&eacute;</p>
',
                'creditos' => '
',
                'faixa_mp3' => '05_numa_sala_de_reboco_estrada_do_caninde.mp3',
                'faixa_ogg' => '05_numa_sala_de_reboco_estrada_do_caninde.ogg',
                'disco_id' => '27'));

        Musicas::create(
            array(
                'faixa' => 'Juazeiro',
                'compositor' => '(Luiz Gonzaga / Humberto Teixeira)&nbsp;Beija-flor&nbsp;(Xex&eacute;u / Z&eacute; Raimundo)<br/>Cita&ccedil;&atilde;o: Admir&aacute;vel gado novo (Z&eacute; Ramalho) / B&eacute;rad&ecirc;ro (Chico C&eacute;sar)',
                'letra' => '<p>Minha m&atilde;e quando eu morrer</p>
<p>Me cubra com o seu v&eacute;u</p>
<p>Em cima da minha cova</p>
<p>Bote o gib&atilde;o e o chap&eacute;u</p>
<p>Que &eacute; pra eu cantar aboio</p>
<p>Nas vaquejadas do c&eacute;u</p>
<p>&nbsp;</p>
<p>Juazeiro, juazeiro</p>
<p>Me responda, por favor</p>
<p>Juazeiro, velho amigo</p>
<p>Onde anda meu amor</p>
<p>&nbsp;</p>
<p>Ai, Juazeiro</p>
<p>Ela nunca mais voltou</p>
<p>Diz, Juazeiro</p>
<p>Onde anda meu amor</p>
<p>&nbsp;</p>
<p>Juazeiro, n&atilde;o te alembra</p>
<p>Quando o nosso amor nasceu?</p>
<p>Toda tarde &agrave; tua sombra</p>
<p>Conversava ela e eu</p>
<p>&nbsp;</p>
<p>Ai, Juazeiro</p>
<p>Onde anda meu amor?</p>
<p>Diz, Juazeiro</p>
<p>Como d&oacute;i a minha dor</p>
<p>&nbsp;</p>
<p>Juazeiro, seje franco</p>
<p>Ela tem um novo amor</p>
<p>Se n&atilde;o tem, por que tu choras</p>
<p>Solid&aacute;rio a minha dor?</p>
<p>&nbsp;</p>
<p>Ai, Juazeiro</p>
<p>N&atilde;o me deixe assim roer</p>
<p>Ai, Juazeiro</p>
<p>T&ocirc; cansada de sofrer</p>
<p>&nbsp;</p>
<p><em>&Ecirc;, &ocirc;, &ocirc;</em></p>
<p><em>Vida de gado</em></p>
<p><em>Povo marcado, &ecirc;</em></p>
<p><em>Povo feliz</em></p>
<p>&nbsp;</p>
<p>Eu fui me embora, meu amor chorou</p>
<p>Eu fui me embora, meu amor chorou</p>
<p>Eu fui vou embora, meu amor chorou</p>
<p>Vou voltar</p>
<p>&nbsp;</p>
<p>Eu vou nas asas de um passarinho</p>
<p>Eu vou nos beijos de um beija-flor</p>
<p>Eu vou nas asas de um passarinho</p>
<p>Eu vou nos beijos de um beija-flor</p>
<p>&nbsp;</p>
<p>No tic-tic-tic-tac do meu cora&ccedil;&atilde;o, renascer&aacute;</p>
<p>No meu cora&ccedil;&atilde;o, renascer&aacute;</p>
<p>Timbalada &eacute; semente de um novo dia</p>
<p>Nordeste,sofrimento, povo lutador</p>
<p>Entre mares e montanhas com voc&ecirc; eu vou</p>
<p>Amor, &eacute; s&oacute; me chamar que eu vou</p>
<p>Amor, &eacute; s&oacute; me chamar, amor</p>
<p>&nbsp;</p>
<p>Juazeiro, meu destino</p>
<p>T&aacute; ligado junto ao teu</p>
<p>No teu tronco tem dois nomes</p>
<p>Ela mesma que escreveu</p>
<p>&nbsp;</p>
<p>Ai, Juazeiro</p>
<p>N&atilde;o me deixe assim roer</p>
<p>Diz , Juazeiro</p>
<p>Eu prefiro at&eacute; morrer</p>
<p>&nbsp;</p>
<p><em>Os &oacute;io tristes da fita</em></p>
<p><em>Rodando no gravador</em></p>
<p><em>Uma mo&ccedil;a cosendo roupa</em></p>
<p><em>Com a linha do Equador</em></p>
<p><em>E a voz da santa dizendo</em></p>
<p><em>&ldquo;O que &eacute; que eu t&ocirc; fazendo</em></p>
<p><em>C&aacute; em cima desse andor?&rdquo;</em></p>
',
                'creditos' => '
',
                'faixa_mp3' => '06_juazeiro_beija_flor.mp3',
                'faixa_ogg' => '06_juazeiro_beija_flor.ogg',
                'disco_id' => '27'));

        Musicas::create(
            array(
                'faixa' => 'Luar do Sert&atilde;o',
                'compositor' => '(Jo&atilde;o Pernambuco / Catulo da Paix&atilde;o Cearense)',
                'letra' => '<p>Ai, que saudade do luar da minha terra</p>
<p>L&aacute; na serra branquejando</p>
<p>Folhas secas pelo ch&atilde;o</p>
<p>Este luar c&aacute; da cidade t&atilde;o escuro</p>
<p>N&atilde;o tem aquela saudade</p>
<p>Do luar l&aacute; do sert&atilde;o</p>
<p>&nbsp;</p>
<p>N&atilde;o h&aacute;, &oacute; gente, &oacute; n&atilde;o</p>
<p>Luar como este do sert&atilde;o</p>
<p>N&atilde;o h&aacute;, &oacute; gente, &oacute; n&atilde;o</p>
<p>Luar como este do sert&atilde;o</p>
<p>&nbsp;</p>
<p>Se a lua nasce por detr&aacute;s da verde mata</p>
<p>Mais parece um sol de prata</p>
<p>Prateando a solid&atilde;o</p>
<p>E a gente pega na viola que ponteia</p>
<p>E a can&ccedil;&atilde;o e a lua cheia</p>
<p>A nos nascer do cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Coisa mais bela neste mundo n&atilde;o existe</p>
<p>Do que ouvir-se um galo triste</p>
<p>No sert&atilde;o se faz luar</p>
<p>Parece at&eacute; que a alma da lua &eacute; que descanta</p>
<p>Escondida na garganta</p>
<p>Desse galo a solu&ccedil;ar</p>
<p>&nbsp;</p>
<p>Ai, quem me dera que eu morresse l&aacute; na serra</p>
<p>Abra&ccedil;ada &agrave; minha terra</p>
<p>E dormindo de uma vez</p>
<p>Ser enterrada numa grota pequenina</p>
<p>Onde &agrave; tarde a surunina</p>
<p>Chora sua viuvez</p>
',
                'creditos' => '

',
                'faixa_mp3' => '07_luar_do_sertao.mp3',
                'faixa_ogg' => '07_luar_do_sertao.ogg',
                'disco_id' => '27'));

        Musicas::create(
            array(
                'faixa' => 'D&uacute;vida',
                'compositor' => '(Luiz Gonzaga / Domingos Ramos)',
                'letra' => '<p>N&atilde;o sei por que raz&atilde;o tu tens ci&uacute;mes</p>
<p>N&atilde;o sei por que raz&atilde;o n&atilde;o cr&ecirc;s em mim</p>
<p>Bem sabes que te quero</p>
<p>E o meu amor &eacute; t&atilde;o sincero</p>
<p>&Eacute; demais duvidar tanto assim, ai de mim</p>
<p>N&atilde;o sei por que raz&atilde;o tu tens ci&uacute;mes</p>
<p>N&atilde;o sei por que raz&atilde;o n&atilde;o cr&ecirc;s em mim</p>
<p>&nbsp;</p>
<p>Bem v&ecirc;s que vivo escravizado</p>
<p>Preso ao teu encanto</p>
<p>N&atilde;o deves duvidar assim de quem te adora tanto</p>
<p>N&atilde;o deves duvidar de mim</p>
<p>Por que n&atilde;o tens raz&atilde;o</p>
<p>E assim torturas sem querer meu cora&ccedil;&atilde;o</p>
',
                'creditos' => '
',
                'faixa_mp3' => '08_duvida.mp3',
                'faixa_ogg' => '08_duvida.ogg',
                'disco_id' => '27'));

        Musicas::create(
            array(
                'faixa' => 'S&uacute;plica Cearense',
                'compositor' => '(Gordurinha / Nelinho)',
                'letra' => '<p>&Oacute; Deus, perdoe este pobre coitado</p>
<p>Que de joelhos rezou um bocado</p>
<p>Pedindo pra chuva cair sem parar</p>
<p>&nbsp;</p>
<p>&Oacute; Deus, ser&aacute; que o Senhor se zangou</p>
<p>E s&oacute; por isso o sol se arretirou</p>
<p>Fazendo cair toda chuva que h&aacute;</p>
<p>&nbsp;</p>
<p>Senhor, eu pedi para o sol se esconder um tiquinho</p>
<p>Pedi pra chover, mas chover de mansinho</p>
<p>Pra ver se nascia uma planta no ch&atilde;o</p>
<p>&nbsp;</p>
<p>Meu Deus, se eu n&atilde;o rezei direito o Senhor me perdoe</p>
<p>Mas eu acho que a culpa foi</p>
<p>Desse pobre que nem sabe fazer ora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Meu Deus, perdoe eu encher os meus z&oacute;io de &aacute;gua</p>
<p>E ter lhe pedido cheinho de m&aacute;goa</p>
<p>Pro sol inclemente se arretirar</p>
<p>&nbsp;</p>
<p>Desculpe, eu pedi a toda hora pra chegar o inverno</p>
<p>Desculpe eu pedir para acabar com o inferno</p>
<p>Que sempre queimou o meu Cear&aacute;</p>
',
                'creditos' => '
',
                'faixa_mp3' => '09_suplica_cearense.mp3',
                'faixa_ogg' => '09_suplica_cearense.ogg',
                'disco_id' => '27'));

        Musicas::create(
            array(
                'faixa' => 'Qui nem Jil&oacute;',
                'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
                'letra' => '<p>Se a gente lembra s&oacute; por lembrar</p>
<p>Do amor que a gente um dia perdeu</p>
<p>Saudade int&eacute; que assim &eacute; bom</p>
<p>Pro cabra se convencer</p>
<p>Que &eacute; feliz sem saber</p>
<p>Pois n&atilde;o sofreu</p>
<p>&nbsp;</p>
<p>Por&eacute;m, se a gente vive a sonhar</p>
<p>Com algu&eacute;m que se deseja rever</p>
<p>Saudade intonce a&iacute; &eacute; ruim</p>
<p>Eu tiro isso por mim</p>
<p>Que vivo doido a sofrer</p>
<p>&nbsp;</p>
<p>Ai, quem me dera voltar</p>
<p>Pros bra&ccedil;os do meu xod&oacute;</p>
<p>Saudade assim faz doer</p>
<p>Amarga que nem jil&oacute;</p>
<p>Mas ningu&eacute;m pode dizer</p>
<p>Que viu triste a chorar</p>
<p>Saudade, o meu rem&eacute;dio &eacute; cantar</p>
<p>Saudade, o meu rem&eacute;dio &eacute; cantar</p>
',
                'creditos' => '
',
                'faixa_mp3' => '10_que_nem_jilo.mp3',
                'faixa_ogg' => '10_que_nem_jilo.ogg',
                'disco_id' => '27'));

        Musicas::create(
            array(
                'faixa' => 'Assum Preto',
                'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
                'letra' => '<p>Tudo em vorta &eacute; s&oacute; beleza</p>
<p>C&eacute;u de abril e a mata em flor</p>
<p>Mas assum preto, cego dos &oacute;io</p>
<p>N&atilde;o vendo a luz, ai, canta de dor</p>
<p>Mas assum preto, cego dos &oacute;io</p>
<p>N&atilde;o vendo a luz, ai, canta de dor</p>
<p>&nbsp;</p>
<p>Tarvez por ignor&acirc;n&ccedil;a</p>
<p>Ou marade das pior</p>
<p>Furaro os &oacute;io do assum preto</p>
<p>Pra ele assim, ai, cantar mi&oacute;</p>
<p>Furaro os &oacute;io do assum preto</p>
<p>Pra ele assim, ai, cantar mi&oacute;</p>
<p>&nbsp;</p>
<p>Assum preto v&eacute;ve sorto</p>
<p>Mas n&atilde;o pode avoar</p>
<p>Mil v&ecirc;ze a sina de uma gaiola</p>
<p>Desde que o c&eacute;u, ai, pudesse oi&aacute;</p>
<p>Mil v&ecirc;ze a sina de uma gaiola</p>
<p>Desde que o c&eacute;u, ai, pudesse oi&aacute;</p>
<p>&nbsp;</p>
<p>Assum preto o meu cantar</p>
<p>&Eacute; t&atilde;o triste quanto o teu</p>
<p>Tamb&eacute;m roubaram o meu amor, ai</p>
<p>Que era a luz, ai, dos &oacute;io meu</p>
<p>Tamb&eacute;m roubaram o meu amor, ai</p>
<p>Que era a luz, ai, dos &oacute;io meu</p>
',
                'creditos' => '
',
                'faixa_mp3' => '11_assum_preto.mp3',
                'faixa_ogg' => '11_assum_preto.ogg',
                'disco_id' => '27'));

        Musicas::create(
            array(
                'faixa' => 'Sabi&aacute;',
                'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas)',
                'letra' => '<p>A todo mundo eu dou psiu</p>
<p>Perguntando por meu bem</p>
<p>Tendo o cora&ccedil;&atilde;o vazio</p>
<p>Vivo assim a dar psiu</p>
<p>Sabi&aacute; vem c&aacute; tamb&eacute;m</p>
<p>&nbsp;</p>
<p>Tu que andas pelo mundo (sabi&aacute;)</p>
<p>Tu que tanto j&aacute; voou (sabi&aacute;)</p>
<p>Tu que canta, passarinho (sabi&aacute;)</p>
<p>Alivia a minha dor</p>
<p>&nbsp;</p>
<p>Tem pena d&rsquo;eu (sabi&aacute;)</p>
<p>Diz por favor (sabi&aacute;)</p>
<p>Tu que canta passarinho (sabi&aacute;)</p>
<p>Por onde anda meu amor (sabi&aacute;)</p>
<p>&nbsp;</p>
<p>Tem pena d&rsquo;eu (sabi&aacute;)</p>
<p>Diz por favor (sabi&aacute;)</p>
<p>Tu que canta pelo mundo (sabi&aacute;)</p>
<p>Por onde anda meu amor (sabi&aacute;)</p>
',
                'creditos' => '',
                'faixa_mp3' => '12_sabia.mp3',
                'faixa_ogg' => '12_sabia.ogg',
                'disco_id' => '27'));

        Musicas::create(
            array(
                'faixa' => 'De Volta pro Aconchego',
                'compositor' => '(Dominguinhos / Nando Cordel) Participa&ccedil;&atilde;o especial: <strong> Dominguinhos</strong>',
                'letra' => '<p>Estou de volta pro meu aconchego</p>
<p>Trazendo na mala bastante saudade</p>
<p>Querendo um sorriso sincero, um abra&ccedil;o</p>
<p>Para aliviar meu cansa&ccedil;o</p>
<p>E toda essa minha vontade</p>
<p>&nbsp;</p>
<p>Que bom poder t&aacute; contigo de novo</p>
<p>Ro&ccedil;ando teu corpo e beijando voc&ecirc;</p>
<p>Pra mim tu &eacute;s a estrela mais linda</p>
<p>Teus olhos me prendem, fascinam</p>
<p>A paz que eu gosto de ter</p>
<p>&nbsp;</p>
<p>&Eacute; duro ficar sem voc&ecirc; vez em quando</p>
<p>Parece que falta um peda&ccedil;o de mim</p>
<p>Me alegro na hora de regressar</p>
<p>Parece que vou mergulhar</p>
<p>Na felicidade sem fim</p>
',
                'creditos' => '
',
                'faixa_mp3' => '13_de_volta_pro_aconchego.mp3',
                'faixa_ogg' => '13_de_volta_pro_aconchego.ogg',
                'disco_id' => '27'));

        Musicas::create(
            array(
                'faixa' => 'Nem se Despediu de Mim',
                'compositor' => '(Luiz Gonzaga / Jo&atilde;o Silva) Participa&ccedil;&atilde;o especial: <strong> Dominguinhos</strong>',
                'letra' => '<p>Nem se despediu de mim</p>
<p>Nem se despediu de mim</p>
<p>J&aacute; chegou contando as horas</p>
<p>Bebeu &aacute;gua e foi-se embora</p>
<p>Nem se despediu de mim</p>
<p>J&aacute; chegou contando as horas</p>
<p>Bebeu &aacute;gua e foi-se embora</p>
<p>Nem se despediu de mim</p>
<p>&nbsp;</p>
<p>Te assossega o cora&ccedil;&atilde;o</p>
<p>Que este amor renascer&aacute;</p>
<p>Vai-se um dia, mas vem outro</p>
<p>Da&iacute; ent&atilde;o, quando ele voltar</p>
<p>Pegue o pote e a quartinha</p>
<p>Bote fogo na tamarinha</p>
<p>Que ele vai se declarar</p>
<p>Pegue o pote e a quartinha</p>
<p>Bote fogo na tamarinha</p>
<p>Que ele vai se declarar</p>
<p>&nbsp;</p>
<p><strong>S&atilde;o Jo&atilde;o do Carneirinho</strong></p>
<p>(Guio de Morais / Luiz Gonzaga)</p>
<hr class="space-letra-top-musicas">
<p>Eu plantei meu milho todo</p>
<p>No dia de S&atilde;o Jos&eacute;</p>
<p>Se me ajuda a provid&ecirc;ncia</p>
<p>Vamo ter milho a gran&eacute;</p>
<p>Neste ano eu vou colher</p>
<p>Vinte espiga em cada p&eacute;</p>
<p>Pelos calco vou colher</p>
<p>Vinte espiga em cada p&eacute;</p>
<p>&nbsp;</p>
<p>Ai, S&atilde;o Jo&atilde;o</p>
<p>S&atilde;o Jo&atilde;o dos Carneirinho</p>
<p>Voc&ecirc; &eacute; t&atilde;o bonzinho</p>
<p>Fale com S&atilde;o Jos&eacute;</p>
<p>Fale l&aacute; com S&atilde;o Jos&eacute;</p>
<p>Pe&ccedil;a pra ele me ajudar</p>
<p>Pe&ccedil;a pro meu milho d&aacute;</p>
<p>Vinte espiga em cada p&eacute;</p>
<p>&nbsp;</p>
<p><strong>Pedras que Cantam</strong></p>
<p>(Dominguinhos / Fausto Nilo)</p>
<hr class="space-letra-top-musicas">
<p>Quem &eacute; rico mora na praia</p>
<p>Mas quem trabalha n&atilde;o tem onde morar</p>
<p>Quem n&atilde;o chora dorme com fome</p>
<p>Mas quem tem nome joga prata no ar</p>
<p>&nbsp;</p>
<p>&Ocirc; tempo duro no ambiente</p>
<p>&Ocirc; tempo escuro na mem&oacute;ria</p>
<p>O tempo &eacute; quente e o drag&atilde;o &eacute; voraz</p>
<p>Vamos embora de repente</p>
<p>Vamos embora sem demora</p>
<p>Vamos pra frente que pra tr&aacute;s n&atilde;o d&aacute; mais</p>
<p>&nbsp;</p>
<p>Pra ser feliz num lugar</p>
<p>Pra sorrir e cantar</p>
<p>Tanta coisa a gente inventa</p>
<p>Mas o dia que a poesia se arrebenta</p>
<p>&Eacute; que as pedras v&atilde;o cantar</p>

',
                'creditos' => '
',
                'faixa_mp3' => '14_nem_se_despediu_de_mim.mp3',
                'faixa_ogg' => '14_nem_se_despediu_de_mim.ogg',
                'disco_id' => '27'));

        Musicas::create(
            array(
                'faixa' => 'Rio de Sonho',
                'compositor' => '(Dominguinhos / Wally Bianchi) cantam: <strong>Elba e Dominguinhos</strong>',
                'letra' => '<p>Vou soltar meu barco</p>
<p>Nesse rio de sonho</p>
<p>Para te seguir</p>
<p>Onde quer que passe</p>
<p>O fio do teu caminho</p>
<p>Tamb&eacute;m quero ir</p>
<p>&nbsp;</p>
<p>Nessa estrada juntos</p>
<p>Tanta coisa boa</p>
<p>Pode acontecer</p>
<p>N&atilde;o preciso nada</p>
<p>S&oacute; voc&ecirc; por perto</p>
<p>Para eu viver</p>
<p>N&atilde;o preciso nada</p>
<p>S&oacute; voc&ecirc; por perto</p>
<p>Para eu viver</p>
<p>&nbsp;</p>
<p>Sempre que te vejo</p>
<p>Os meus olhos giram</p>
<p>Tontos de emo&ccedil;&atilde;o</p>
<p>Dentro aqui do peito</p>
<p>Bate disparado</p>
<p>O meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Deixo que teus bra&ccedil;os</p>
<p>Levem os meus passos</p>
<p>E o que for, ser&aacute;</p>
<p>Voc&ecirc; &eacute; meu anjo</p>
<p>Meu raio de lua</p>
<p>E canto de sabi&aacute;</p>
<p>Voc&ecirc; &eacute; meu anjo</p>
<p>Meu raio de lua</p>
<p>E canto de sabi&aacute;</p>
',
                'creditos' => '
<p>Arranjo: Dominguinhos e Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Dominguinhos</p>
<p>Teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Camilo Mariano</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Guitarra e viol&atilde;o de nylon: Marcos Arcanjo</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Vocais: Zepa, Jussara Louren&ccedil;o e Bettina Graziani</p>
',
                'faixa_mp3' => '01_rio_de_sonho.mp3',
                'faixa_ogg' => '01_rio_de_sonho.ogg',
                'disco_id' => '28'));

        Musicas::create(
            array(
                'faixa' => 'Tenho Sede',
                'compositor' => '(Dominguinhos / Anastácia) cantam: <strong>Elba e Dominguinhos</strong>',
                'letra' => '<p>Traga-me um copo d&rsquo;&aacute;gua, tenho sede</p>
<p>E essa sede pode me matar</p>
<p>Minha garganta pede um pouco de &aacute;gua</p>
<p>E os meus olhos pedem teu olhar</p>
<p>&nbsp;</p>
<p>A planta pede chuva quando quer brotar</p>
<p>O c&eacute;u logo escurece quando vai chover</p>
<p>Meu cora&ccedil;&atilde;o s&oacute; pede o teu amor</p>
<p>Se n&atilde;o me deres posso at&eacute; morrer</p>
',
                'creditos' => '
<p>Arranjo, piano e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Dominguinhos</p>
<p>Bateria: Camilo Mariano</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Guitarra e viol&atilde;o de nylon: Marcos Arcanjo</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Flautas: Z&eacute; Canuto</p>
',
                'faixa_mp3' => '02_tenho_sede.mp3',
                'faixa_ogg' => '02_tenho_sede.ogg',
                'disco_id' => '28'));

        Musicas::create(
            array(
                'faixa' => 'Lamento Sertanejo',
                'compositor' => '(Dominguinhos / Gilberto Gil) <em> cita&ccedil;&atilde;o: <strong>Pipoca moderna</strong> (Caetano Veloso / Sebasti&atilde;o Biano)</em><br>canta: <strong>Elba</strong>',
                'letra' => '<p>Por ser de l&aacute;</p>
<p>Do sert&atilde;o, l&aacute; do serrado</p>
<p>L&aacute; do interior do mato</p>
<p>Da catinga, do ro&ccedil;ado</p>
<p>&nbsp;</p>
<p>Eu quase n&atilde;o saio</p>
<p>Eu quase n&atilde;o tenho amigo</p>
<p>Eu quase que n&atilde;o consigo</p>
<p>Ficar na cidade sem viver contrariado</p>
<p>&nbsp;</p>
<p>Por ser de l&aacute;</p>
<p>Na certa por isso mesmo</p>
<p>N&atilde;o gosto de cama mole</p>
<p>N&atilde;o sei comer sem torresmo</p>
<p>&nbsp;</p>
<p>Eu quase n&atilde;o falo</p>
<p>Quase n&atilde;o sei de nada</p>
<p>Sou como r&ecirc;s desgarrada</p>
<p>Nessa multid&atilde;o boiada</p>
<p>Caminhando a esmo</p>
<p>&nbsp;</p>
<p><em>E era nada de nem nunca de negro n&atilde;o</em></p>
<p><em>E era n&eacute; de nunca mais</em></p>
<p><em>E era noite de n&eacute; nunca de nada mais</em></p>
<p><em>E era nem de negro n&atilde;o</em></p>
<p><em>&nbsp;</em></p>
<p><em>Pipoca ali, aqui, pipoca al&eacute;m</em></p>
<p><em>Desanoitece a manh&atilde;</em></p>
<p><em>Tudo mudou</em></p>
',
                'creditos' => '
<p>Arranjo, piano e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Dominguinhos</p>
<p>Bateria: Camilo Mariano</p>
<p>Contrabaixo: Jacar&eacute;</p>
<p>Guitarra e viol&atilde;o de nylon e a&ccedil;o: Marcos Arcanjo</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Vocais: Zepa, Marcela Paiva, Gilson Vieira e Bettina Graziani</p>
',
                'faixa_mp3' => '03_lamento_sertanejo.mp3',
                'faixa_ogg' => '03_lamento_sertanejo.ogg',
                'disco_id' => '28'));

        Musicas::create(
            array(
                'faixa' => 'Eu S&oacute; Quero um Xod&oacute;',
                'compositor' => '(Dominguinhos / Anast&aacute;cia) cantam: <strong>Elba e Dominguinhos</strong>',
                'letra' => '<p>Que falta eu sinto de um bem</p>
<p>Que falta me faz um xod&oacute;</p>
<p>Mas como eu n&atilde;o tenho ningu&eacute;m</p>
<p>Eu levo a vida assim t&atilde;o s&oacute;</p>
<p>&nbsp;</p>
<p>Eu s&oacute; quero um amor</p>
<p>Que acabe o meu sofrer</p>
<p>Um xod&oacute; pra mim</p>
<p>Do meu jeito assim</p>
<p>Que alegre o meu viver</p>
',
                'creditos' => '
<p>Arranjo, piano e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Dominguinhos</p>
<p>Bateria: Camilo Mariano</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Guitarra e viol&atilde;o de nylon: Marcos Arcanjo</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Sax alto: Z&eacute; Canuto</p>
<p>Trombone: Aldivas Ayres</p>
<p>Trompete: Jess&eacute; Sadoc</p>
<p>Vocais: Zepa, Jurema de C&acirc;ndia, Marcela Paiva, Gilson Vieira e Bettina Graziani</p>
',
                'faixa_mp3' => '04_eu_so_quero_um_xodo.mp3',
                'faixa_ogg' => '04_eu_so_quero_um_xodo.ogg',
                'disco_id' => '28'));

        Musicas::create(
            array(
                'faixa' => 'Vem Ficar Comigo',
                'compositor' => '(Nando Cordel / Dominguinhos) canta: <strong>Elba</strong>',
                'letra' => '<p>Vem ficar comigo</p>
<p>Vem ser a luz da minha estrada</p>
<p>Vivo esperando esse c&eacute;u para brilhar</p>
<p>Teu sorriso lindo</p>
<p>A tua boca doce sempre</p>
<p>Eu necessito do teu amor</p>
<p>Pra me enfeitar</p>
<p>&nbsp;</p>
<p>Vem ficar comigo</p>
<p>Vem cuidar de mim</p>
<p>S&oacute; teu para&iacute;so</p>
<p>&Eacute; quem me faz viver feliz</p>
<p>&nbsp;</p>
<p>N&atilde;o me deixe solta</p>
<p>Posso me perder</p>
<p>De tudo no mundo</p>
<p>O que eu mais quero &eacute; ter voc&ecirc;</p>
',
                'creditos' => '
<p>Arranjo, piano, teclados e samplers (cordas): Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Dominguinhos</p>
<p>Bateria: Camilo Mariano</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Viol&atilde;o de a&ccedil;o e nylon: Marcos Arcanjo</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Flautas: Z&eacute; Canuto</p>
',
                'faixa_mp3' => '05_vem_ficar_comigo.mp3',
                'faixa_ogg' => '05_vem_ficar_comigo.ogg',
                'disco_id' => '28'));

        Musicas::create(
            array(
                'faixa' => 'Onde Está Você',
                'compositor' => '(Zezum) cantam: <strong>Elba e Dominguinhos</strong>',
                'letra' => '<p>Onde est&aacute; voc&ecirc;</p>
<p>Apare&ccedil;a aqui pra me ver</p>
<p>Eu vou gostar demais</p>
<p>Sabes onde estou e nada mudou</p>
<p>Venha me dizer onde voc&ecirc; andou</p>
<p>&nbsp;</p>
<p>Eu andei sem te encontrar</p>
<p>Em quase todo lugar</p>
<p>Eu perguntava por ti</p>
<p>Teus passos sempre segui</p>
<p>Querendo te encontrar</p>
<p>S&oacute; pra falar de amor</p>
<p>Frases que nunca falei</p>
<p>Carinhos que nunca fiz</p>
<p>Beijos que nunca te dei</p>
<p>O amor que te neguei</p>
<p>Agora quero te dar</p>
<p>E te fazer feliz</p>
',
                'creditos' => '
<p>Arranjo: Dominguinhos e Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Dominguinhos</p>
<p>Piano e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Camilo Mariano</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Guitarra e viol&atilde;o de nylon: Marcos Arcanjo</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
',
                'faixa_mp3' => '06_onde_esta_voce.mp3',
                'faixa_ogg' => '06_onde_esta_voce.ogg',
                'disco_id' => '28'));

        Musicas::create(
            array(
                'faixa' => 'Retrato da Vida',
                'compositor' => '(Djavan / Dominguinhos) cantam: <strong>Elba e Dominguinhos</strong>',
                'letra' => '<p>Esse matagal sem fim</p>
<p>Essa estrada, esse rio seco</p>
<p>Essa dor que mora em mim</p>
<p>N&atilde;o descansa e nem dorme cedo</p>
<p>O retrato da minha vida</p>
<p>&Eacute; amar em segredo</p>
<p>&nbsp;</p>
<p>N&atilde;o quer saber de mim</p>
<p>E eu vivendo da tua vida</p>
<p>Deus no c&eacute;u e voc&ecirc; aqui</p>
<p>A esperan&ccedil;a &eacute; quem me abriga</p>
<p>Esses campos n&atilde;o tardam em florir</p>
<p>J&aacute; se espera uma boa colheita</p>
<p>E tudo parece seguir</p>
<p>Fazendo a vida t&atilde;o direita</p>
<p>&nbsp;</p>
<p>Mas e voc&ecirc;, o que faz</p>
<p>Que n&atilde;o repara no ch&atilde;o</p>
<p>Por onde tem que passar</p>
<p>E pisa em meu cora&ccedil;&atilde;o?</p>
<p>O teu beijo em meu destino</p>
<p>Era tudo que eu queria</p>
<p>Ser teu (meu) homem, teu (meu) menino</p>
<p>O ser amado de todo dia</p>
',
                'creditos' => '
<p>Arranjo, piano, teclados e samplers (cordas): Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Dominguinhos</p>
<p>Bateria: Camilo Mariano</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Guitarra e viol&atilde;o de nylon: Marcos Arcanjo</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
',
                'faixa_mp3' => '07_retrato_da_vida.mp3',
                'faixa_ogg' => '07_retrato_da_vida.ogg',
                'disco_id' => '28'));

        Musicas::create(
            array(
                'faixa' => 'Chama',
                'compositor' => '(Tato) cantam: <strong>Elba e Dominguinhos</strong>',
                'letra' => '<p>J&aacute; faz tanto tempo</p>
<p>Talvez seja tarde</p>
<p>Esse ch&atilde;o cinzento</p>
<p>Uma chama ainda arde</p>
<p>&nbsp;</p>
<p>Todo o meu lamento</p>
<p>Por n&atilde;o poder entender</p>
<p>Se hoje mesmo com saudade</p>
<p>Finjo n&atilde;o te conhecer</p>
<p>&nbsp;</p>
<p>Que &eacute; pra ver</p>
<p>Se ainda h&aacute; brilho nesse teu olhar</p>
<p>Que &eacute; pra ver</p>
<p>Se essa can&ccedil;&atilde;o ainda te faz lembrar</p>
<p>&nbsp;</p>
<p>De tudo aquilo que teu cora&ccedil;&atilde;o</p>
<p>Custa esquecer</p>
<p>Quero ver</p>
<p>Se ainda emociono voc&ecirc;</p>
',
                'creditos' => '
<p>Arranjo e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Dominguinhos</p>
<p>Bateria: Camilo Mariano</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Guitarra e viol&atilde;o de nylon: Marcos Arcanjo</p>
<p>Guitarra (slide): Pedro Braga</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
',
                'faixa_mp3' => '08_chama.mp3',
                'faixa_ogg' => '08_chama.ogg',
                'disco_id' => '28'));

        Musicas::create(
            array(
                'faixa' => 'Xote de Navegação',
                'compositor' => '(Dominguinhos / Chico Buarque) cantam: <strong>Elba e Dominguinhos</strong>',
                'letra' => '<p>Eu vejo aquele rio a deslizar</p>
<p>O tempo atravessar meu vilarejo</p>
<p>E &agrave;s vezes largo o afazer</p>
<p>Me pego em sonhos a navegar</p>
<p>&nbsp;</p>
<p>Com o nome Paci&ecirc;ncia</p>
<p>Vai a minha embarca&ccedil;&atilde;o</p>
<p>Pendulando como o tempo</p>
<p>E tendo igual destina&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Pra quem anda na barca&ccedil;a</p>
<p>Tudo, tudo passa</p>
<p>S&oacute; o tempo n&atilde;o</p>
<p>&nbsp;</p>
<p>Passam paisagens furta-cor</p>
<p>Passa e repassa o mesmo cais</p>
<p>No mesmo instante eu vejo a flor</p>
<p>Que desabrocha e se desfaz</p>
<p>&nbsp;</p>
<p>Essa &eacute; a tua m&uacute;sica</p>
<p>&Eacute; tua respira&ccedil;&atilde;o</p>
<p>Mas eu tenho s&oacute; teu len&ccedil;o</p>
<p>Em minha m&atilde;o</p>
<p>&nbsp;</p>
<p>Olhando o meu navio</p>
<p>O impaciente capataz</p>
<p>Grita da ribanceira</p>
<p>Que navega pra tr&aacute;s</p>
<p>&nbsp;</p>
<p>No conv&eacute;s eu vou sombrio</p>
<p>Cabeleira de rapaz</p>
<p>Pela &aacute;gua do rio que &eacute; sem fim</p>
<p>E &eacute; nunca mais</p>
',
                'creditos' => '
<p>Arranjo, piano, teclados e samplers (cordas): Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Dominguinhos</p>
<p>Teclado: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Camilo Mariano</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Guitarra e viol&atilde;o de nylon: Marcos Arcanjo</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
',
                'faixa_mp3' => '09_xote_de_navegacao.mp3',
                'faixa_ogg' => '09_xote_de_navegacao.ogg',
                'disco_id' => '28'));

        Musicas::create(
            array(
                'faixa' => 'Gostoso Demais',
                'compositor' => '(Dominguinhos / Nando Cordel) cantam: <strong>Elba e Dominguinhos</strong>',
                'letra' => '<p>T&ocirc; com saudade de tu, meu desejo</p>
<p>T&ocirc; com saudade do beijo e do mel</p>
<p>Do teu olhar carinhoso</p>
<p>Do teu abra&ccedil;o gostoso</p>
<p>De passear no teu c&eacute;u</p>
<p>&nbsp;</p>
<p>&Eacute; t&atilde;o dif&iacute;cil ficar sem voc&ecirc;</p>
<p>O teu amor &eacute; gostoso demais</p>
<p>Teu cheiro me d&aacute; prazer</p>
<p>Quando estou com voc&ecirc;</p>
<p>Estou nos bra&ccedil;os da paz</p>
<p>&nbsp;</p>
<p>Pensamento viaja</p>
<p>E vai buscar meu bem querer</p>
<p>N&atilde;o d&aacute; pra ser feliz assim</p>
<p>Tem d&oacute; de mim</p>
<p>Que &eacute; que eu posso fazer</p>
',
                'creditos' => '
<p>Arranjo, piano e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Dominguinhos</p>
<p>Bateria: Camilo Mariano</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Guitarra e viol&atilde;o de nylon e a&ccedil;o: Marcos Arcanjo</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
',
                'faixa_mp3' => '10_gostoso_demais.mp3',
                'faixa_ogg' => '10_gostoso_demais.ogg',
                'disco_id' => '28'));

        Musicas::create(
            array(
                'faixa' => 'Forrozinho Bom',
                'compositor' => '(Dominguinhos / Climério) cantam: <strong>Elba e Dominguinhos</strong>',
                'letra' => '<p>Eita forrozinho bom</p>
<p>Eita forrozinho bom</p>
<p>A gente chega, a gente agita</p>
<p>A gente mexe, a gente bole</p>
<p>A gente acocha at&eacute; o dia clarear</p>
<p>&nbsp;</p>
<p>Meu amor n&atilde;o foi embora</p>
<p>Meu amor foi passear</p>
<p>Meu amor tem olho claro</p>
<p>Como a prata do luar</p>
<p>&nbsp;</p>
<p>Meu amor ficou l&aacute; fora</p>
<p>Meu amor n&atilde;o quis entrar</p>
<p>Meu amor chegou agora</p>
<p>Meu amor vem vadiar</p>
<p>&nbsp;</p>
<p>Tem tanta estrela no c&eacute;u</p>
<p>Tem tanto peixe no mar</p>
<p>Eu tenho tanta saudade</p>
<p>Da tua boca beijar</p>
<p>&nbsp;</p>
<p>Eu n&atilde;o quero viver s&oacute;</p>
<p>Pois viver &eacute; partilhar</p>
<p>A vida &eacute; mesmo um forr&oacute;</p>
<p>Pra ser feliz e dan&ccedil;ar</p>
',
                'creditos' => '
<p>Arranjo: Dominguinhos e Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Dominguinhos</p>
<p>Teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Guitarra e viol&atilde;o de nylon: Marcos Arcanjo</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Vocais: Zepa, Jussara Louren&ccedil;o e Bettina Graziani</p>
',
                'faixa_mp3' => '11_forrozinho_bom.mp3',
                'faixa_ogg' => '11_forrozinho_bom.ogg',
                'disco_id' => '28'));

        Musicas::create(
            array(
                'faixa' => 'De Volta pro Aconchego',
                'compositor' => '(Dominguinhos / Nando Cordel) cantam: <strong>Elba e Dominguinhos</strong>',
                'letra' => '<p>Estou de volta pro meu aconchego</p>
<p>Trazendo na mala bastante saudade</p>
<p>Querendo um sorriso sincero, um abra&ccedil;o</p>
<p>Para aliviar meu cansa&ccedil;o</p>
<p>E toda essa minha vontade</p>
<p>&nbsp;</p>
<p>Que bom poder t&aacute; contigo de novo</p>
<p>Ro&ccedil;ando teu corpo e beijando voc&ecirc;</p>
<p>Pra mim tu &eacute;s a estrela mais linda</p>
<p>Teus olhos me prendem, fascinam</p>
<p>A paz que eu gosto de ter</p>
<p>&nbsp;</p>
<p>&Eacute; duro ficar sem voc&ecirc; vez em quando</p>
<p>Parece que falta um peda&ccedil;o de mim</p>
<p>Me alegro na hora de regressar</p>
<p>Parece que vou mergulhar</p>
<p>Na felicidade sem fim</p>
',
                'creditos' => '
<p>Arranjo, piano, teclados e samplers (cordas): Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Dominguinhos</p>
<p>Bateria: Camilo Mariano</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Viol&atilde;o de nylon e a&ccedil;o: Marcos Arcanjo</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
',
                'faixa_mp3' => '12_de_volta_pro_aconchego.mp3',
                'faixa_ogg' => '12_de_volta_pro_aconchego.ogg',
                'disco_id' => '28'));

        Musicas::create(
            array(
                'faixa' => 'Pedras que Cantam',
                'compositor' => '(Dominguinhos / Fausto Nilo) cantam: <strong>Elba e Dominguinhos</strong>',
                'letra' => '<p>Quem &eacute; rico mora na praia</p>
<p>Mas quem trabalha n&atilde;o tem onde morar</p>
<p>Quem n&atilde;o chora dorme com fome</p>
<p>Mas quem tem nome joga a prata no mar</p>
<p>&nbsp;</p>
<p>O tempo duro no ambiente</p>
<p>O tempo escuro na mem&oacute;ria</p>
<p>O tempo &eacute; quente e o drag&atilde;o &eacute; voraz</p>
<p>&nbsp;</p>
<p>Vamos embora de repente</p>
<p>Vamos embora sem demora</p>
<p>Vamos pra frente</p>
<p>Que pra tr&aacute;s n&atilde;o d&aacute; mais</p>
<p>&nbsp;</p>
<p>Pra ser feliz num lugar</p>
<p>Pra sorrir e cantar</p>
<p>Tanta coisa a gente inventa</p>
<p>Mas no dia que a poesia se arrebenta</p>
<p>&Eacute; que as pedras v&atilde;o cantar</p>
<p>&nbsp;</p>
<p><strong>Isso aqui t&aacute; bom demais</strong></p>
<p>(Dominguinhos / Nando Cordel)</p>
<hr class="space-letra-top-musicas">
<p>Olha, isso aqui t&aacute; muito bom</p>
<p>Isso aqui t&aacute; bom demais</p>
<p>Olha, quem t&aacute; fora quer entrar</p>
<p>Mas quem t&aacute; dentro n&atilde;o sai</p>
<p>&nbsp;</p>
<p>Vou me perder, me afogar no teu amor</p>
<p>Vou desfrutar, me lambuzar neste calor</p>
<p>Te agarrar pra descontar minha paix&atilde;o</p>
<p>Aproveitar o gosto dessa anima&ccedil;&atilde;o</p>
',
                'creditos' => '
<p>Arranjo, piano e teclados: Z&eacute; Am&eacute;rico Bastos</p>
<p>Acordeom: Dominguinhos</p>
<p>Bateria: Camilo Mariano</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Guitarra e viol&atilde;o de nylon: Marcos Arcanjo</p>
<p>Percuss&atilde;o: Paulinho He-Man</p>
<p>Sax alto: Z&eacute; Canuto</p>
<p>Trombone: Aldivas Ayres</p>
<p>Trompete: Jess&eacute; Sadoc</p>
<p>Vocais: Zepa, Marcela Paiva, Gilson Vieira e Bettina Graziani</p>
',
                'faixa_mp3' => '13_pedras_que_cantam_isso_aqui_ta_bom_demais.mp3',
                'faixa_ogg' => '13_pedras_que_cantam_isso_aqui_ta_bom_demais.ogg',
                'disco_id' => '28'));

        Musicas::create(
            array(
                'faixa' => 'Gaiola da Saudade',
                'compositor' => '(Jam da Silva / Maciel Salu)',
                'letra' => '<p>Vivo andando no mundo</p>
<p>Na gaiola da saudade</p>
<p>Igualmente um passarinho</p>
<p>Voando solto nos ares</p>
<p>&nbsp;</p>
<p>Querendo &aacute;gua e comida</p>
<p>Pra matar minha vontade</p>
<p>Deixo minha terra chorando</p>
<p>Pra morar noutra cidade</p>
<p>&nbsp;</p>
<p>Para que sentir a dor?</p>
<p>Para que se t&ecirc;-la?</p>
<p>O sol queima, racha a terra</p>
<p>E a lua clareia</p>
<p>Para que sentir a dor?</p>
<p>Para que se t&ecirc;-la?</p>
<p>&nbsp;</p>
<p>Tempo bom foi no passado</p>
<p>Na &eacute;poca do meu av&ocirc;</p>
<p>O homem t&aacute; destruindo</p>
<p>O que a natureza criou</p>
<p>&nbsp;</p>
<p>Planta semente na terra</p>
<p>Espera a chuva e n&atilde;o cai</p>
<p>T&atilde;o aborrecendo a Cristo</p>
<p>Por causa de tudo isso</p>
<p>Tempo bom ningu&eacute;m v&ecirc; mais</p>
<p>&nbsp;</p>
<p>Na esta&ccedil;&atilde;o pego um trem</p>
<p>Sigo firme na estrada</p>
<p>A bagagem &eacute; minha roupa</p>
<p>E a rabeca afinada</p>
<p>&nbsp;</p>
<p>Vem a noite, n&atilde;o d&aacute; sono</p>
<p>Na madrugada cochilo</p>
<p>Vejo a chegada do dia</p>
<p>N&atilde;o sei qual o &eacute; o meu destino</p>
',
                'creditos' => '
<p>Arranjo: Yuri Queiroga e Tost&atilde;o Queiroga</p>
<p>Ganz&aacute;, lata, alfaia, zabumba, ilu e darbuka: Lucas dos Prazeres</p>
<p>Cavaco, guitarra, baixo e programa&ccedil;&atilde;o: Yuri Queiroga</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Clarinete e flautas: Dirceu Leite</p>
<p>Viol&atilde;o de nylon: Marcos Arcanjo</p>
',
                'faixa_mp3' => '01_gaiola_da_saudade.mp3',
                'faixa_ogg' => '01_gaiola_da_saudade.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'Ave Anjos Angeli',
                'compositor' => '(Jorge Ben Jor) Participa&ccedil;&atilde;o especial: <strong> A Trombonada</strong>',
                'letra' => '<p>Verdade, amor, sabedoria, felicidade</p>
<p>S&iacute;ntese, clareza, confian&ccedil;a, abund&acirc;ncia</p>
<p>A&ccedil;&atilde;o correta, justi&ccedil;a, renascimento</p>
<p>Beleza, harmonia</p>
<p>For&ccedil;a, vit&oacute;ria, gl&oacute;ria, paz</p>
<p>Comunica&ccedil;&atilde;o e alegria</p>
<p>&nbsp;</p>
<p>Anjo, anjo, anjo, anjo, anjo</p>
<p>Minha f&eacute; me faz a cabe&ccedil;a</p>
<p>Ela me faz com certeza</p>
<p>Minha f&eacute; me faz a cabe&ccedil;a</p>
<p>Ela me faz com certeza</p>
<p>&nbsp;</p>
<p>Senhora das &aacute;guas</p>
<p>Senhora dos ventos</p>
<p>Senhora das flores</p>
<p>Senhora dos amores</p>
<p>D&aacute; licen&ccedil;a deu tocar nesse lugar</p>
<p>D&aacute; licen&ccedil;a deu cantar nesse lugar</p>
<p>Quero tocar pros anjos</p>
<p>Quero cantar pros anjos</p>
<p>&nbsp;</p>
<p>Seraphim, cherubim</p>
<p>Cherubim, seraphim</p>
<p>Seraphim, cherubim</p>
<p>Cherubim, seraphim</p>
<p>&nbsp;</p>
<p>Throni</p>
<p>Dominatione</p>
<p>Virtutes</p>
<p>Potestates</p>
<p>Principatus</p>
<p>Archangeli</p>
<p>Angeli</p>
',
                'creditos' => '
<p>Arranjo: Tost&atilde;o Queiroga e Yuri Queiroga</p>
<p>Arranjo de metais e trombone: Nilson Amarante</p>
<p>Trombones: A Trombonada (Nilsinho Amarante, Adonis Garcia, Esli Lino, Adelson Lins e Junior Cebolinha)</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Guitarras e baixo: Yuri Queiroga</p>
<p>Viol&atilde;o: Marcos Arcanjo</p>
<p>Ganz&aacute;, tamborim, repique de m&atilde;o, pandeiros, ilu, agog&ocirc; repique de baqueta e surdo: Lucas dos Prazeres</p>
',
                'faixa_mp3' => '02_ave_anjos_angeli.mp3',
                'faixa_ogg' => '02_ave_anjos_angeli.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'Noite Severina',
                'compositor' => '(Lula Queiroga / Pedro Luis)',
                'letra' => '<p>Corre calma severina noite</p>
<p>De leve no len&ccedil;ol que te tateia a pele fina</p>
<p>Pedras sonhando p&oacute; na mina</p>
<p>Pedras sonhando com britadeiras</p>
<p>Cada ser tem sonhos a sua maneira</p>
<p>Cada ser tem sonhos a sua maneira</p>
<p>&nbsp;</p>
<p>Corre alta severina noite</p>
<p>No ronco da cidade uma janela assim acesa</p>
<p>Eu respiro seu desejo</p>
<p>Chama no pavio da lamparina</p>
<p>Sombra no len&ccedil;ol que tateia a pele fina</p>
<p>Sombra no len&ccedil;ol que tateia a pele fina</p>
<p>&nbsp;</p>
<p>Ali t&atilde;o sempre perto e n&atilde;o me vendo</p>
<p>Ali sinto tua alma flutuar do corpo</p>
<p>Teus olhos se movendo sem se abrir</p>
<p>Ali t&atilde;o certo e justo e s&oacute; te sendo</p>
<p>Absinto-me de ti, mas sempre vivo</p>
<p>Meus olhos te movendo sem te abrir</p>
<p>&nbsp;</p>
<p>Corre solta suassuna noite</p>
<p>Tocaia de animal que acompanha sua presa</p>
<p>Escravo da sua beleza</p>
<p>Daqui a pouco o dia vai querer raiar</p>
<p>Daqui a pouco o dia vai querer raiar</p>
<p>Daqui a pouco o dia vai querer raiar</p>
<p>Daqui a pouco o dia vai querer raiar</p>
',
                'creditos' => '
<p>Arranjo: Tost&atilde;o Queiroga e Yuri Queiroga</p>
<p>Tri&acirc;ngulo, moringa, lata com vassoura e agog&ocirc;: Jam da Silva</p>
<p>Panelas indianas, programa&ccedil;&otilde;es, viol&atilde;o, baixo e guitarras: Yuri Queiroga</p>
<p>Cello: Lui Coimbra</p>
<p>Bateria eletr&ocirc;nica, cajon FX, caxixi e programa&ccedil;&otilde;es: Tost&atilde;o Queiroga</p>
<p>Viol&atilde;o intro: Lucky Luciano</p>
<p>Viol&atilde;o de a&ccedil;o: Marcos Arcanjo</p>
<p>Acordeom delay: Lulinha Alencar</p>
',
                'faixa_mp3' => '03_noite_severina.mp3',
                'faixa_ogg' => '03_noite_severina.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'Rua da Passagem (Trânsito)',
                'compositor' => '(Lenine / Arnaldo Antunes) Participa&ccedil;&atilde;o especial: <strong> Maestro Spok</strong>',
                'letra' => '<p>Os curiosos atrapalham o tr&acirc;nsito</p>
<p>Gentileza &eacute; fundamental</p>
<p>N&atilde;o adianta esquentar a cabe&ccedil;a</p>
<p>N&atilde;o precisa avan&ccedil;ar no sinal</p>
<p>&nbsp;</p>
<p>Dando seta pra mudar de pista</p>
<p>Ou pra entrar na transversal</p>
<p>Pisca alerta pra encostar na guia</p>
<p>P&aacute;ra brisa para o temporal</p>
<p>&nbsp;</p>
<p>J&aacute; buzinou, espere, n&atilde;o insista</p>
<p>Desencoste o seu do meu metal</p>
<p>Devagar pra contemplar a vista</p>
<p>Menos peso do p&eacute; no pedal</p>
<p>N&atilde;o se deve atropelar cachorro</p>
<p>Nem qualquer outro animal</p>
<p>&nbsp;</p>
<p>Todo mundo tem direito &agrave; vida</p>
<p>E todo mundo tem direito igual</p>
<p>Todo mundo tem direito &agrave; vida</p>
<p>E todo mundo tem direito igual</p>
<p>&nbsp;</p>
<p>Motoqueiro, caminh&atilde;o, pedestre</p>
<p>Carro importado, carro nacional</p>
<p>Mas tem que dirigir direito</p>
<p>Para n&atilde;o congestionar o local</p>
<p>&nbsp;</p>
<p>Tanto faz voc&ecirc; chegar primeiro</p>
<p>O primeiro foi seu ancestral</p>
<p>&Eacute; melhor voc&ecirc; chegar inteiro</p>
<p>Com seu venoso e seu arterial</p>
<p>A cidade &eacute; tanto do mendigo</p>
<p>Quanto do policial</p>
<p>&nbsp;</p>
<p>Travesti trabalhador turista</p>
<p>Solit&aacute;rio fam&iacute;lia casal</p>
<p>Todo mundo tem direito &agrave; vida</p>
<p>E todo mundo tem direito igual</p>
<p>&nbsp;</p>
<p>Sem ter medo de andar na rua</p>
<p>Porque a rua &eacute; o seu quintal</p>
<p>Todo mundo tem direito &agrave; vida</p>
<p>E todo mundo tem direito igual</p>
<p>&nbsp;</p>
<p>Boa noite, tudo bem, bom dia</p>
<p>Gentileza &eacute; fundamental</p>
<p>Todo mundo tem direito &agrave; vida</p>
<p>E todo mundo tem direito igual</p>
<p>&nbsp;</p>
<p>Pisca alerta pra encostar na guia</p>
<p>Com licen&ccedil;a, obrigado, at&eacute; logo, tchau</p>
<p>Todo mundo tem direito &agrave; vida</p>
<p>E todo mundo tem direito igual</p>
',
                'creditos' => '
<p>Sax soprano, tenor e bar&iacute;tono: Maestro Spok</p>
<p>Programa&ccedil;&atilde;o (sons de carro), ilu, pandeiro, agog&ocirc;, ganz&aacute;, caxixi, baixo e programa&ccedil;&atilde;o eletr&ocirc;nica: Yuri Queiroga</p>
<p>Lata: Lucky Luciano</p>
<p>Viola de 12 cordas: Marcos Arcanjo</p>
<p>Bandolim de 10 cordas: Hamilton de Holanda</p>
<p>Vocais: Nena Queiroga, Ylana Queiroga e Vanessa Miranda</p>
<p>Voz (crian&ccedil;a): Yan Queiroga</p>
',
                'faixa_mp3' => '04_rua_da_passagem.mp3',
                'faixa_ogg' => '04_rua_da_passagem.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'Tempos Quase Modernos (Qual o Assunto que Mais lhe Interessa)',
                'compositor' => '(Roberto Mendes / Capinan) Participa&ccedil;&atilde;o especial: <strong> Gabriel o Pensador e Frejat</strong>',
                'letra' => '<p>Qual o assunto que mais lhe interessa?</p>
<p>Qual o assunto que mais lhe interessa?</p>
<p>&nbsp;</p>
<p>Al&eacute;m da vida in vitro feita nas coxas</p>
<p>E vivida &agrave;s pressas</p>
<p>&nbsp;</p>
<p>Qual o assunto que mais lhe interessa?</p>
<p>Qual o assunto que mais lhe interessa?</p>
<p>&nbsp;</p>
<p>A empresa da guerra</p>
<p>A mais-valia da morte</p>
<p>A &uacute;ltima senten&ccedil;a</p>
<p>A viol&ecirc;ncia nas ruas</p>
<p>O bio terrorismo</p>
<p>A soja transg&ecirc;nica</p>
<p>&nbsp;</p>
<p>Clonagem da mente</p>
<p>Dos &oacute;rg&atilde;os vitais</p>
<p>A nova ci&ecirc;ncia</p>
<p>Moral decadente</p>
<p>Tradi&ccedil;&atilde;o milenar</p>
<p>Outra tend&ecirc;ncia</p>
<p>&nbsp;</p>
<p>Qual o assunto que mais lhe interessa?</p>
<p>Qual o assunto que mais lhe interessa?</p>
<p>&nbsp;</p>
<p>Suic&iacute;dio, livre arb&iacute;trio</p>
<p>Aborto consentido</p>
<p>Eutan&aacute;sia</p>
<p>A d&iacute;vida cong&ecirc;nita</p>
<p>O quinto partido</p>
<p>O tempo das m&aacute;quinas</p>
<p>&nbsp;</p>
<p>Monarquia, playback</p>
<p>A rep&uacute;blica inventa</p>
<p>O eclipse lunar</p>
<p>A decad&ecirc;ncia moral</p>
<p>A calota polar</p>
<p>O imp&eacute;rio dos egos</p>
<p>O vidente cedo</p>
<p>O cachimbo de &Eacute;dipo</p>
<p>A paix&atilde;o de Romeu</p>
<p>&nbsp;</p>
<p>Colapso dos mares</p>
<p>Crian&ccedil;as sem lares</p>
<p>A aus&ecirc;ncia de Deus</p>
<p>&nbsp;</p>
<p>Qual o assunto que mais lhe interessa?</p>
<p>Qual o assunto que mais lhe interessa?</p>
<p>&nbsp;</p>
<p><em>Qual o assunto que mais lhe interessa?</em></p>
<p><em>A assembleia dos lobos</em></p>
<p><em>O ju&iacute;zo dos loucos</em></p>
<p><em>A vontade dos c&eacute;us</em></p>
<p><em>A escala econ&ocirc;mica em que o crime compensa</em></p>
<p><em>Qual &eacute; o assunto em que mais voc&ecirc; pensa?</em></p>
<p><em>Sexo, amor, culpa ou inoc&ecirc;ncia</em></p>
<p><em>A dieta do Papa, o segredo de F&aacute;tima</em></p>
<p><em>A &uacute;ltima penit&ecirc;ncia</em></p>
<p><em>Qual &eacute; o assunto em que mais voc&ecirc; pensa?</em></p>
<p><em>Qual &eacute; o assunto que mais lhe interessa?</em></p>
<p><em>Qual &eacute; o assunto que mais lhe interessa?</em></p>
<p><em>Qual &eacute; o assunto que mais voc&ecirc; pensa?</em></p>
<p>&nbsp;</p>
<p>Bom dia Vietn&atilde;</p>
<p>Boa noite Bagd&aacute;</p>
<p>Adeus Sherazade</p>
<p>Qual o assunto que mais lhe interessa?</p>
<p>Qual a verdade em que mais voc&ecirc; pensa?</p>
<p>O fim da natureza</p>
<p>E o final da hist&oacute;ria</p>
<p>Gl&oacute;ria, gl&oacute;ria, gl&oacute;ria, gl&oacute;ria, gl&oacute;ria, gl&oacute;ria?</p>
<p>&nbsp;</p>
<p>Apenas uma can&ccedil;&atilde;o invento agora</p>
<p>Um poema</p>
<p>A madrugada &eacute; sil&ecirc;ncio, a dor acalenta</p>
<p>Esquece o in&iacute;cio de tudo e o fim dos tempos</p>
<p>Deita no colo de tua amada</p>
<p>Onde da misteriosa expans&atilde;o do nada</p>
<p>O universo se alimenta</p>
<p>&nbsp;</p>
<p><em>Qual &eacute; o assunto em que mais voc&ecirc; pensa?</em></p>
<p><em>Qual a verdade em que mais voc&ecirc; sente?</em></p>
<p><em>Qual a mentira em que mais acredita?</em></p>
<p><em>Qual &eacute; o nome que voc&ecirc; mais grita?</em></p>
<p><em>Qual &eacute; a for&ccedil;a que mais te enfraquece?</em></p>
<p><em>Qual &eacute; a fome que mais te alimenta?</em></p>
<p><em>Qual &eacute; o prato que mais te apetece?</em></p>
<p><em>Qual &eacute; o mapa que mais te orienta?</em></p>
<p><em>Qual &eacute; o jogo que mais voc&ecirc; ganha?</em></p>
<p><em>Qual &eacute; o ganho que mais te enriquece?</em></p>
<p><em>Qual &eacute; a perda que mais voc&ecirc; chora?</em></p>
<p><em>Qual &eacute; a casa em que mais voc&ecirc; mora?</em></p>
<p><em>Qual &eacute; a frase que mais voc&ecirc; fala?</em></p>
<p><em>Qual &eacute; a fala que mais voc&ecirc; cala?</em></p>
<p><em>Qual &eacute; o assunto que mais voc&ecirc; teme?</em></p>
<p><em>E qual &eacute; o tema que mais ignora?</em></p>
<p>Qual o assunto que mais lhe interessa?</p>
',
                'creditos' => '
<p>Arranjo: Yuri Queiroga e Tost&atilde;o Queiroga</p>
<p>Baixo e programa&ccedil;&atilde;o: Yuri Queiroga</p>
<p>Guitarras e teclados: Frejat</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Programa&ccedil;&otilde;es e teclado: Fabr&iacute;cio Melo</p>

',
                'faixa_mp3' => '05_tempos_quase_modernos.mp3',
                'faixa_ogg' => '05_tempos_quase_modernos.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'A Natureza das Coisas',
                'compositor' => '(Accioly Neto)',
                'letra' => '<p>Se avexe n&atilde;o</p>
<p>Que amanh&atilde; pode acontecer tudo</p>
<p>Inclusive nada</p>
<p>Se avexe n&atilde;o</p>
<p>Que a lagarta rasteja at&eacute; o dia</p>
<p>Em que cria asas</p>
<p>&nbsp;</p>
<p>Se avexe n&atilde;o</p>
<p>Que a burrinha da felicidade nunca se atrasa</p>
<p>Se avexe n&atilde;o</p>
<p>Amanh&atilde; ela para na porta da sua casa</p>
<p>&nbsp;</p>
<p>Se avexe n&atilde;o</p>
<p>Toda caminhada come&ccedil;a no primeiro passo</p>
<p>A natureza n&atilde;o tem pressa</p>
<p>Segue seu compasso</p>
<p>Inexoravelmente chega l&aacute;</p>
<p>&nbsp;</p>
<p>Se avexe n&atilde;o</p>
<p>Observe quem vai subindo a ladeira</p>
<p>Seja princesa ou seja lavandeira</p>
<p>Pra ir mais alto vai ter que suar</p>
',
                'creditos' => '
<p>Arranjo: Yuri Queiroga e Tost&atilde;o Queiroga</p>
<p>Guitarra e baixo: Yuri Queiroga</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Tri&acirc;ngulo, pandeiro, caxixi, zabumba e shaker: Anjo Caldas</p>
<p>Guitarra: Marcos Arcanjo</p>
<p>Acordeom: Toninho Ferragutti</p>
<p>Viol&atilde;o e cello: Lui Coimbra</p>
<p>Vocais: Elba Ramalho, Nena Queiroga, Ylana Queiroga e Vanessa Miranda</p>
',
                'faixa_mp3' => '06_a_natureza_das_coisas.mp3',
                'faixa_ogg' => '06_a_natureza_das_coisas.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'Argila',
                'compositor' => '(Carlinhos Brown) Participa&ccedil;&atilde;o especial: <strong> Hamilton de Holanda</strong>',
                'letra' => '<p>Uganda, cubana, ipanamana</p>
<p>Baiana, Luanda, nada Ruanda</p>
<p>Kinshaze, manga, banana</p>
<p>&nbsp;</p>
<p>Vinha rindo e circulando</p>
<p>Sobre tudo o cobertor</p>
<p>Do teu olhar verreu meus olhos</p>
<p>E do teu olho joio</p>
<p>&nbsp;</p>
<p>Uma gota de orvalho</p>
<p>Que era vidro se quedou</p>
<p>Vivendo em despedace</p>
<p>E o cora&ccedil;&atilde;o coador</p>
<p>&nbsp;</p>
<p>Sorriu</p>
<p>Vexado de amargor e se pintou</p>
<p>Na lama da lagoa</p>
<p>Pra &agrave; toa correr, &ecirc;...</p>
<p>&nbsp;</p>
<p>Se for feito de argila</p>
<p>Seis enfeites te darei</p>
<p>Flores n&atilde;o andam em d&uacute;zia</p>
<p>S&oacute; foi uma que eu roubei</p>
<p>&nbsp;</p>
<p>Sorriu</p>
<p>Vexado de amargor e se pintou</p>
<p>Com a lama da lagoa</p>
<p>Coa, voa</p>
<p>&nbsp;</p>
<p>&Ecirc; zuzu&ecirc;</p>
<p>&Ecirc; zum, zum, zum</p>
<p>&Ecirc; zuzu&ecirc;</p>
<p>Zum</p>
<p>&nbsp;</p>
<p>Solid&atilde;o anda de muda</p>
<p>Sei pra sempre te amarei</p>
<p>Procurei por essas curvas</p>
<p>Quem no Toror&oacute; deixei, &ecirc;...</p>
',
                'creditos' => '
<p>Arranjo: Tost&atilde;o Queiroga e Yuri Queiroga</p>
<p>Bandolim de 10 cordas: Hamilton de Holanda</p>
<p>Pratos com vassouras e tambor FX: Tost&atilde;o Queiroga</p>
<p>Guitarra, cavaquinho, viol&atilde;o e baixo: Yuri Queiroga</p>
<p>Guitarras: Paulo Rafael</p>
<p>Pote, shaker, tri&acirc;ngulo, guisos, bacia de &aacute;gua e condu&iacute;te: Jam da Silva</p>
',
                'faixa_mp3' => '07_argila.mp3',
                'faixa_ogg' => '07_argila.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'Boi Cavalo de Tr&oacute;ia',
                'compositor' => '(Pedro Osmar / Paulo R&oacute;) Participa&ccedil;&atilde;o especial: <strong> Pedro Osmar</strong>',
                'letra' => '<p>O boi, o boi, o boi, o boi</p>
<p>O boi, o boi, o boi, o boi</p>
<p>O boi t&aacute; na rua</p>
<p>O boi t&aacute; na sua</p>
<p>&nbsp;</p>
<p>Vem com o povo</p>
<p>Dan&ccedil;ar no terreiro do rei</p>
<p>O boi no meio do povo vem saber</p>
<p>Qual &eacute; a do rei?</p>
<p>Eu sei!</p>
<p>Qual &eacute; a dos tr&ecirc;s?</p>
<p>Eu sei!</p>
<p>&nbsp;</p>
<p>Onde se chega pela rua</p>
<p>O boi Cavalo de Tr&oacute;ia vem cuidadoso</p>
<p>Cantar sua apatia</p>
<p>Assumir seu lugar, definir sua vida</p>
<p>O boi t&aacute; na rua, o boi t&aacute; na sua</p>
<p>O boi t&aacute; na rua</p>
<p>&nbsp;</p>
<p>O boi t&aacute; na rua (em passeata)</p>
<p>O boi t&aacute; na rua (em passeata)</p>
<p>O boi t&aacute; na rua (em passeata)</p>
<p>O boi t&aacute; na rua</p>
',
                'creditos' => '
<p>Arranjo: Tost&atilde;o Queiroga e Yuri Queiroga</p>
<p>Viola de 10 cordas, viola caipira e vozes: Pedro Osmar</p>
<p>Caxixi, ilu, alfaia, pandeiros, tamborim, guiro e palmas: Jam da Silva</p>
<p>Caixa e palmas: Tost&atilde;o Queiroga</p>
<p>Sapateado, cavaquinho e viol&atilde;o FX: Yuri Queiroga</p>
<p>Arranjo de sopros, flauta, bar&iacute;tono, sax bar&iacute;tono, flauta transversa e p&iacute;fano: Carlos Malta</p>
<p>Matraca, pandeir&atilde;o, ilu, tambor, alfaia, caixa de guerra, caracax&aacute; e preaca: Lucas dos Prazeres</p>
<p>Vocais: Elba Ramalho, Nena Queiroga, Ylana Queiroga, Vanessa Miranda, Anjo Caldas, Marcos Arcanjo, Tost&atilde;o Queiroga, Pedro Osmar, Any Guedes e Millene Ramalho</p>
',
                'faixa_mp3' => '08_boi_cavalo_de_troia.mp3',
                'faixa_ogg' => '08_boi_cavalo_de_troia.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => '&Uacute;ltimo Minuto',
                'compositor' => '(Lula Queiroga) Participa&ccedil;&atilde;o especial: <strong> Lula Queiroga</strong>',
                'letra' => '<p>Nunca mais eu quero ouvir falar Hitler</p>
<p>E nem quero ouvir dizer Pinochet</p>
<p>Sai pra l&aacute; Sadan</p>
<p>Vai de retro Stalin, Idi Amin</p>
<p>Gente ruim</p>
<p>&nbsp;</p>
<p>Deixa que eu chuto</p>
<p>Deixa o &uacute;ltimo minuto da hist&oacute;ria pra mim</p>
<p>Deixa que eu chuto</p>
<p>Deixa o &uacute;ltimo minuto da hist&oacute;ria</p>
<p>&nbsp;</p>
<p>Nunca mais eu digo o nome Reagan</p>
<p>Livrai-nos do Mao Ts&eacute; Tung</p>
<p>Me deixa em paz Milosevic, Yeltsin</p>
<p>Gente ruim</p>
<p>&nbsp;</p>
<p>Sonhei que no ju&iacute;zo final eu era Deus</p>
<p>O Deus n&uacute;mero bilh&atilde;o e tal</p>
<p>E a imensa maioria da humanidade</p>
<p>Tava ali pra condenar um por um</p>
<p>Cada cara de pau que fez mal a mo&ccedil;a</p>
<p>M&atilde;e, chamada Terra</p>
<p>Essa menina de cara roxa</p>
<p>V&iacute;tima brutal da covardia</p>
<p>Dessa gente ruim</p>
<p>&nbsp;</p>
<p>Nunca mais eu quero ouvir falar Hitler</p>
<p>E nem quero ouvir dizer Pinochet</p>
<p>Sai pra l&aacute; Sadan, vai de retro Bush</p>
<p>Sai pra l&aacute; Sadan, vai de retro</p>
',
                'creditos' => '
<p>Arranjo: Tost&atilde;o Queiroga, Yuri Queiroga e Lucky Luciano</p>
<p>Surdo, tambor de corda, repique, caixa, guiro, shaker, agog&ocirc; e tri&acirc;ngulo: Jam da Silva</p>
<p>Guitarras, programa&ccedil;&otilde;es e teclados: Yuri Queiroga</p>
<p>Bateria e programa&ccedil;&otilde;es: Tost&atilde;o Queiroga</p>
<p>Baixo, teclados e guitarras: Lucky Luciano</p>
<p>Vocais: Elba Ramalho, Tost&atilde;o Queiroga, Jorge Nova, Thiago Ramalho e Lula Queiroga</p>

',
                'faixa_mp3' => '09_ultimo_minuto.mp3',
                'faixa_ogg' => '09_ultimo_minuto.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'A Dança das Borboletas',
                'compositor' => '(Alceu Valen&ccedil;a / Z&eacute; Ramalho)',
                'letra' => '<p>As borboletas est&atilde;o voando</p>
<p>A dan&ccedil;a louca das borboletas</p>
<p>As borboletas est&atilde;o girando</p>
<p>Est&atilde;o virando a sua cabe&ccedil;a</p>
<p>&nbsp;</p>
<p>Quem vai voar</p>
<p>N&atilde;o quer dan&ccedil;ar</p>
<p>S&oacute; quer voar</p>
<p>Avoar</p>
<p>&nbsp;</p>
<p>Quem vai girar</p>
<p>N&atilde;o quer cair</p>
<p>S&oacute; quer girar</p>
<p>N&atilde;o caia</p>
<p>&nbsp;</p>
<p>E as borboletas est&atilde;o invadindo</p>
<p>Os apartamentos, cinemas e bares</p>
<p>Esgotos e rios e lagos e mares</p>
<p>Em um rodopio de arrepiar</p>
<p>&nbsp;</p>
<p>Derrubam janelas e portas de vidro</p>
<p>Escadas rolantes e das chamin&eacute;s</p>
<p>Mergulham e giram em meio &agrave; fuma&ccedil;a</p>
<p>&Eacute; como um arco-&iacute;ris no centro do c&eacute;u</p>
',
                'creditos' => '
<p>Arranjo e bateria: Tost&atilde;o Queiroga</p>
<p>Guitarras, baixo e guitarras FX final: Yuri Queiroga</p>
<p>Pandeiros, guiro, tri&acirc;ngulo, jonjo e caxixi: Anjo Caldas</p>
<p>Guitarras: Lu&atilde; Mattar</p>
<p>Acordeom: Toninho Ferragutti</p>
<p>Guitarra: Paulo Rafael</p>
<p>Baje, djemb&ecirc;, alfaia, ilu, ganz&aacute;, pote, talking drums e surdo: Lucas dos Prazeres</p>
',
                'faixa_mp3' => '10_a_danca_das_borboletas.mp3',
                'faixa_ogg' => '10_a_danca_das_borboletas.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'As Forças da Natureza',
                'compositor' => '(Jo&atilde;o Nogueira / Paulo C&eacute;sar Pinheiro)',
                'letra' => '<p>Quando o sol</p>
<p>Se derramar em toda sua ess&ecirc;ncia</p>
<p>Desafiando o poder da ci&ecirc;ncia</p>
<p>Pra combater o mal</p>
<p>&nbsp;</p>
<p>E o mar</p>
<p>Com suas &aacute;guas bravias</p>
<p>Levar consigo o p&oacute; dos nossos dias</p>
<p>Vai ser um bom sinal</p>
<p>&nbsp;</p>
<p>Os pal&aacute;cios v&atilde;o desabar</p>
<p>Sob a for&ccedil;a de um temporal</p>
<p>E os ventos v&atilde;o sufocar</p>
<p>O barulho infernal</p>
<p>&nbsp;</p>
<p>Os homens v&atilde;o se rebelar</p>
<p>Dessa farsa descomunal</p>
<p>Vai voltar tudo ao seu lugar</p>
<p>Afinal</p>
<p>&nbsp;</p>
<p>Vai resplandecer</p>
<p>Uma chuva de prata do c&eacute;u vai descer, l&aacute;, lai&aacute;</p>
<p>O esplendor da mata vai renascer</p>
<p>E o ar de novo vai ser natural</p>
<p>&nbsp;</p>
<p>Vai florir</p>
<p>Cada grande cidade o mato vai cobrir</p>
<p>Das ru&iacute;nas um novo povo vai surgir</p>
<p>E vai cantar afinal</p>
<p>&nbsp;</p>
<p>As pragas e as ervas daninhas</p>
<p>As armas e os homens de mal</p>
<p>V&atilde;o desaparecer nas cinzas de um carnaval</p>
',
                'creditos' => '
<p>Arranjo e viol&atilde;o de 6 cordas: Marcos Arcanjo</p>
<p>Cavaquinho Gianini: Paulo Soares</p>
<p>Viol&atilde;o 7 cordas: Paul&atilde;o 7 cordas</p>
<p>Surdo, ganz&aacute;, pandeiro, repique de anel e tamborim: Maninho</p>
<p>Vocais: Nena Queiroga, Ylana Queiroga e Vanessa Miranda</p>
',
                'faixa_mp3' => '11_as_forcas_da_natureza.mp3',
                'faixa_ogg' => '11_as_forcas_da_natureza.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'Dois pra Sempre',
                'compositor' => '(Lula Queiroga)',
                'letra' => '<p>Sempre em meu cora&ccedil;&atilde;o</p>
<p>Esse desejo bom</p>
<p>Quase maior do que o futuro</p>
<p>Eu sei</p>
<p>Que no mundo existe algu&eacute;m</p>
<p>Alma parecida</p>
<p>Pra dividir minha vida</p>
<p>&nbsp;</p>
<p>Sempre adivinha&ccedil;&atilde;o</p>
<p>Sempre eu querer saber</p>
<p>Um passo a frente do destino</p>
<p>E eu sei</p>
<p>Vi o amor chegando assim</p>
<p>Coisa t&atilde;o querida</p>
<p>Muda o sentido da vida</p>
<p>&nbsp;</p>
<p>Olho iluminado</p>
<p>Bra&ccedil;o arrepiado</p>
<p>L&aacute;grimas caindo sobre o jardim</p>
<p>Quando acontece de ser assim</p>
<p>Dois pra sempre</p>
',
                'creditos' => '
<p>Arranjo: Toninho Ferragutti e Yuri Queiroga</p>
<p>Arranjo de cordas e cello: Lui Coimbra</p>
<p>Acordeom: Toninho Ferragutti</p>
<p>Viol&atilde;o e panelas indianas: Yuri Queiroga</p>

',
                'faixa_mp3' => '12_dois_pra_sempre.mp3',
                'faixa_ogg' => '12_dois_pra_sempre.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'Os Beijos',
                'compositor' => '(Pedro Lu&iacute;s / Ivan Santos) Participa&ccedil;&atilde;o especial: <strong> Pedro Lu&iacute;s e a Parede</strong>',
                'letra' => '<p>O beijo no sof&aacute;</p>
<p>O beijo no har&eacute;m</p>
<p>Um beijo na esta&ccedil;&atilde;o de trem</p>
<p>&nbsp;</p>
<p>O beijo de amor</p>
<p>O beijo sem tes&atilde;o</p>
<p>O de reconcilia&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>O beijo das can&ccedil;&otilde;es</p>
<p>O beijo das araras</p>
<p>O beijo de afli&ccedil;&otilde;es e taras</p>
<p>&nbsp;</p>
<p>O beijo que se d&aacute;</p>
<p>O beijo que se ganha</p>
<p>O beijo da mulher-aranha</p>
<p>&nbsp;</p>
<p>Tem beijo devo&ccedil;&atilde;o</p>
<p>Tamb&eacute;m beijo-trof&eacute;u</p>
<p>E beijo artigo de bordel</p>
<p>&nbsp;</p>
<p>O beijo ap&oacute;s a missa</p>
<p>Me beija diz a mo&ccedil;a</p>
<p>Um beijo dado assim &agrave; for&ccedil;a</p>
<p>&nbsp;</p>
<p>Um beijo que &eacute; real</p>
<p>O outro &eacute; sonhador</p>
<p>E beija o p&ocirc;ster do cantor</p>
<p>&nbsp;</p>
<p>Um beija a sua m&atilde;o</p>
<p>O outro o corpo inteiro</p>
<p>O time beija o seu goleiro</p>
<p>&nbsp;</p>
<p>De beijo no Beb&ecirc;</p>
<p>A m&atilde;e da mais de cem</p>
<p>Mas beijo-crime tamb&eacute;m tem</p>
<p>&nbsp;</p>
<p>Um beijo em Paris</p>
<p>O beijo do cartaz</p>
<p>Um beija o outro rapaz</p>
<p>&nbsp;</p>
<p>O beijo no escuro</p>
<p>O beijo &agrave; meia luz</p>
<p>O beijo nos p&eacute;s de Jesus</p>
<p>&nbsp;</p>
<p>Um beija e lambe a pele</p>
<p>Um morde e causa dor</p>
<p>O beijo diz como &eacute; que eu t&ocirc;</p>
<p>&nbsp;</p>
<p>O beijo da serpente</p>
<p>O beijo no asfalto</p>
<p>O beijo no meio do mato</p>
<p>&nbsp;</p>
<p>O beijo que oferece</p>
<p>O beijo que ofende</p>
<p>O beijo azul do happy end</p>
<p>&nbsp;</p>
<p>O beijo da chegada</p>
<p>O beijo despedida</p>
<p>O beijo com sabor de vida</p>
<p>&nbsp;</p>
<p>Um beijo em sigilo</p>
<p>O beijo da novela</p>
<p>Os beijos que eu j&aacute; dei nela</p>
',
                'creditos' => '
<p>Arranjo: Pedro Lu&iacute;s e a Parede e Yuri Queiroga</p>
<p>Viola, viol&atilde;o e vozes: Pedro Lu&iacute;s e a Parede</p>
<p>Baixo: Mario Moura</p>
<p>Zabumba: C. A. Ferrari</p>
<p>Caixa: Celso Alvim</p>
<p>Reco-reco e tri&acirc;ngulo: Sidon Silva</p>
<p>Guitarra: Yuri Queiroga</p>
',
                'faixa_mp3' => '13_os_beijos.mp3',
                'faixa_ogg' => '13_os_beijos.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'Novena',
                'compositor' => '(Geraldo Azevedo / Marcus Vinicius) Participa&ccedil;&atilde;o especial: <strong> Geraldo Azevedo</strong>',
                'letra' => '<p>Sei que s&atilde;o nove dias, nove penas</p>
<p>Enquanto a espera aumenta</p>
<p>O mundo se faz esquecido</p>
<p>Na terra dos homens</p>
<p>De luzes coloridas</p>
<p>&nbsp;</p>
<p>Enquanto a fam&iacute;lia reza a novena</p>
<p>As not&iacute;cias que montam cavalos ligeiros</p>
<p>V&atilde;o tomando todo o mundo</p>
<p>E na casa, no lar</p>
<p>Esquecidos ficam todos longe de saber</p>
<p>O que foi que aconteceu</p>
<p>E ali ningu&eacute;m percebeu</p>
<p>Tanta pedra de amor cair</p>
<p>Tanta gente se partir</p>
<p>No azul dessa incr&iacute;vel dor</p>
<p>&nbsp;</p>
<p>Enquanto a fam&iacute;lia reza</p>
<p>Algu&eacute;m segue a novena</p>
<p>No abismo de preces repetidas</p>
<p>No sossego de uma agonia sem fim</p>
<p>&nbsp;</p>
<p>Enquanto a fam&iacute;lia reza a novena</p>
<p>Nove dias se passam marcados</p>
<p>Sem tempo, sem nada e sem fim</p>
<p>No meio do mundo, do medo</p>
<p>&nbsp;</p>
<p>E de mim despeda&ccedil;o em tanto verso</p>
<p>Ent&atilde;o de ora&ccedil;&otilde;es a sala se faz</p>
<p>E l&aacute; fora se esquece a paz</p>
<p>Uma bomba explodiu por l&aacute;</p>
<p>Sobre os olhos de meu bem</p>
<p>E assim me mata tamb&eacute;m</p>
<p>Enquanto a novena chega ao fim</p>
<p>Bandas, bandeiras</p>
<p>Benditos passando pela vida</p>
<p>E a novena se perde esquecida de n&oacute;s</p>
<p>&nbsp;</p>
<p>Nas horas de Deus, am&eacute;m</p>
<p>Padre, Filho, Esp&iacute;rito Santo</p>
<p>Essa &eacute; a primeira cantiga</p>
<p>Que nessa casa eu canto</p>
',
                'creditos' => '
<p>Arranjo: Elba Ramalho</p>
<p>Viol&atilde;o de nylon: Geraldo Azevedo</p>
<p>Viol&atilde;o de 12 cordas: Marcos Arcanjo</p>
<p>Acordeom: Lulinha Alencar</p>
<p>Percuss&atilde;o: Firmino</p>
<p>Berimbau, alfaia, ilu, conga e tri&acirc;ngulo: Jam da Silva</p>
',
                'faixa_mp3' => '14_novena.mp3',
                'faixa_ogg' => '14_novena.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'Concei&ccedil;&atilde;o dos Coqueiros',
                'compositor' => '(Alexandre Bicudo / Lula Queiroga / Lulu Oliveira)',
                'letra' => '<p>Ia dessa maneira</p>
<p>Subindo o morro bem devagar</p>
<p>Boca da alma cantando</p>
<p>Senhora dos coqueiros</p>
<p>Chego mais perto e me ilumino</p>
<p>Eu que j&aacute; vim de t&atilde;o longe</p>
<p>Do mar</p>
<p>Daqui se v&ecirc; o mar</p>
<p>Tamb&eacute;m se v&ecirc; a dor e o mal</p>
<p>Gente que reza e sofre tanto</p>
<p>Leve ao ouvido de Deus</p>
<p>O meu lamento</p>
<p>Por n&oacute;s</p>
<p>&nbsp;</p>
<p>Chuva derrete o gesso</p>
<p>&Oacute;, Concei&ccedil;&atilde;o estende o manto</p>
<p>Vira do avesso esse canto</p>
<p>Desce dessa janela</p>
<p>Venha soprar vela por vela</p>
<p>Sopre de novo esperan&ccedil;a</p>
<p>Vem c&aacute;</p>
<p>Vem desaben&ccedil;oar</p>
<p>Essa tristeza intrusa</p>
<p>Faz a ciranda na ladeira</p>
<p>Sopra no ouvido de Deus</p>
<p>Esse lamento</p>
<p>&nbsp;</p>
<p>Leva ao ouvido de Deus</p>
<p>Esse lamento</p>
<p>&nbsp;</p>
<p><em>Ave Maria</em></p>
<p><em>Gratia plena</em></p>
<p><em>Dominus tecum</em></p>
',
                'creditos' => '
<p>Arranjo: Tost&atilde;o Queiroga e Yuri Queiroga</p>
<p>Programa&ccedil;&otilde;es: Tost&atilde;o Queiroga</p>
<p>Harpa: Cristina Braga</p>
<p>Acordeom: Toninho Ferragutti</p>
<p>Condu&iacute;te e tambor subgrave: Jam da Silva</p>
<p>Programa&ccedil;&otilde;es, baixo, cavaquinho, teclados e guitarra: Yuri Queiroga</p>
<p>Viol&atilde;o: Renato Bandeira</p>
',
                'faixa_mp3' => '15_conceicao_dos_coqueiros.mp3',
                'faixa_ogg' => '15_conceicao_dos_coqueiros.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'Amplid&atilde;o',
                'compositor' => '(Chico C&eacute;sar)',
                'letra' => '<p>Deixa eu te guardar</p>
<p>A casa &eacute; sua</p>
<p>Faz em mim teu lar</p>
<p>Me reconstrua</p>
<p>Queira me habitar</p>
<p>Onde eu me escondo</p>
<p>Faz deste lugar</p>
<p>S&oacute; seu no mundo</p>
<p>&nbsp;</p>
<p>Eu quero ser</p>
<p>Onde voc&ecirc;</p>
<p>Sossega a alma</p>
<p>E chora e ri</p>
<p>Encontra a calma</p>
<p>Pra sonhar sem dormir</p>
<p>Vem acender</p>
<p>As luzes que iluminam o meu cora&ccedil;&atilde;o</p>
<p>Vem ter comigo sua parte da amplid&atilde;o</p>
<p>De minha parte</p>
<p>Eu estou aqui</p>
',
                'creditos' => '
<p>Produ&ccedil;&atilde;o: Lenine</p>
<p>Viol&atilde;o de 8 cordas: Paulo Arag&atilde;o</p>
<p>Viol&atilde;o requinto: Maur&iacute;cio Marques</p>
<p>Viol&atilde;o: Marcos Alves e Carlos Chaves</p>
',
                'faixa_mp3' => '16_amplidao.mp3',
                'faixa_ogg' => '16_amplidao.ogg',
                'disco_id' => '29'));

        Musicas::create(
            array(
                'faixa' => 'Fuxico',
                'compositor' => '(Flávio Leandro)',
                'letra' => '<p>O meu amor</p>
<p>Ficou com raiva d&rsquo;eu e me mandou embora</p>
<p>Eu juro que doeu e que a saudade agora</p>
<p>Devora feito fogo quando vai queimar</p>
<p>&nbsp;</p>
<p>O meu amor</p>
<p>Por causa de um fuxico, de uma coisa &agrave; toa</p>
<p>Trocou o nosso ninho que era coisa boa</p>
<p>Por uma indiferen&ccedil;a que n&atilde;o tem mais fim</p>
<p>&nbsp;</p>
<p>Tem nada n&atilde;o</p>
<p>Eu choro todo o pranto que for pra chorar</p>
<p>Eu pago todo o pre&ccedil;o que for pra pagar</p>
<p>Mas vou morrer dizendo que n&atilde;o te esqueci</p>
<p>&nbsp;</p>
<p>E quando a saudade apertar</p>
<p>N&atilde;o deixe de telefonar</p>
<p>Pra esta que ainda te ama</p>
<p>E vive doidinha de vontade</p>
<p>De ter seu amor sem maldade</p>
<p>Pra acender o calor dessa chama</p>
',
                'creditos' => '
<p>Arranjo de base, acordeom e tri&acirc;ngulo: Cezzinha Thomaz</p>
<p>PAD: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Guitarra: Marcos Arcanjo</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
',
                'faixa_mp3' => '01_fuxico.mp3',
                'faixa_ogg' => '01_fuxico.ogg',
                'disco_id' => '30'));

        Musicas::create(
            array(
                'faixa' => 'Um Bai&atilde;o Chamado Saudade',
                'compositor' => '(Petr&uacute;cio Amorim / Rog&eacute;rio Rangel)',
                'letra' => '<p>Sinto muita saudade de voc&ecirc;</p>
<p>Vem na lua, na chuva, no vento</p>
<p>Quando &agrave;s vezes bota pra doer</p>
<p>Ju&iacute;zo quer endoidecer</p>
<p>Espinho furando por dentro</p>
<p>&nbsp;</p>
<p>Pelo que n&atilde;o fiz pe&ccedil;o perd&atilde;o</p>
<p>&Eacute; que &agrave;s vezes o amor se confunde</p>
<p>E mistura &oacute;dio com paix&atilde;o</p>
<p>Realidade e ilus&atilde;o</p>
<p>E o cora&ccedil;&atilde;o se ilude</p>
<p>&nbsp;</p>
<p>Ah, foi um sonho que a gente viveu</p>
<p>Foi bonito o que aconteceu</p>
<p>E voc&ecirc; ainda pede: &ldquo;Esque&ccedil;a&rdquo;</p>
<p>Ah, voc&ecirc; sabe da nossa paix&atilde;o</p>
<p>Como tirar do cora&ccedil;&atilde;o</p>
<p>O que n&atilde;o sai da cabe&ccedil;a</p>
',
                'creditos' => '
<p>Arranjo de base, acordeom, tri&acirc;ngulo e zabumba: Cezzinha Thomaz</p>
<p>Piano (Fender Rhodes): Rannieri Oliveira</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Viol&atilde;o de nylon e guitarra: Marcos Arcanjo</p>
<p>Contrabaixo e baixo ac&uacute;stico: Fernando Gaby (Fof&atilde;o)</p>
<p>Percuss&atilde;o: Anjo Caldas</p>

',
                'faixa_mp3' => '02_um_baiao_chamado_saudade.mp3',
                'faixa_ogg' => '02_um_baiao_chamado_saudade.ogg',
                'disco_id' => '30'));

        Musicas::create(
            array(
                'faixa' => 'Riso Cristalino',
                'compositor' => '(Dominguinhos / Clim&eacute;rio) Participa&ccedil;&atilde;o especial: <strong> Dominguinhos</strong>',
                'letra' => '<p>Meu olhar n&atilde;o leva jeito de chorar</p>
<p>Quando v&ecirc; o teu sorriso derramar</p>
<p>Esse riso cristalino de alegria</p>
<p>Como o beijo que a praia deu no mar</p>
<p>&nbsp;</p>
<p>&Eacute; melhor ser triste assim como eu estou</p>
<p>Do que ser feliz na vida como est&aacute;s</p>
<p>Pois felicidade em mim &eacute; teu amor</p>
<p>Que &eacute; mais claro que uma noite de luar</p>
<p>&nbsp;</p>
<p>Quando a brisa dessa noite te abra&ccedil;ar</p>
<p>Vai sentir o frio forte da paix&atilde;o</p>
<p>O meu bra&ccedil;o abra&ccedil;a o corpo de outro amor</p>
<p>Como o beijo que essa praia deu no mar</p>
',
                'creditos' => '
<p>Arranjo de base, acordeom e tri&acirc;ngulo: Cezzinha Thomaz</p>
<p>Voz e acordeom: Dominguinhos</p>
<p>PAD: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Guitarra: Marcos Arcanjo</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
',
                'faixa_mp3' => '03_riso_cristalino.mp3',
                'faixa_ogg' => '03_riso_cristalino.ogg',
                'disco_id' => '30'));

        Musicas::create(
            array(
                'faixa' => 'Não lhe Solto Mais',
                'compositor' => '(Ant&ocirc;nio Barros / Cec&eacute;u)',
                'letra' => '<p>Morena n&atilde;o fa&ccedil;a isso</p>
<p>Deixe desse reboli&ccedil;o</p>
<p>N&atilde;o mexa comigo n&atilde;o, viu</p>
<p>Quero respeito comigo</p>
<p>J&aacute; cortaram o meu umbigo</p>
<p>N&atilde;o sou mais menino n&atilde;o, viu</p>
<p>&nbsp;</p>
<p>Eu sou duro, sou maduro</p>
<p>E tamb&eacute;m muito seguro</p>
<p>Ainda posso dar no couro</p>
<p>Voc&ecirc; vai gostar</p>
<p>Vai se apaixonar</p>
<p>Vai cair no choro</p>
<p>&nbsp;</p>
<p>Mais &eacute; a&iacute; que o couro come</p>
<p>Vou mostrar que sou &eacute; homem</p>
<p>Como &eacute; que um homem faz</p>
<p>Dou-lhe uma rasteira, lhe castigo na esteira</p>
<p>N&atilde;o lhe solto mais</p>
<p>Dou-lhe uma rasteira, lhe castigo na esteira</p>
<p>N&atilde;o lhe solto mais</p>
<p>&nbsp;</p>
<p>Depois n&atilde;o adianta voc&ecirc; gemer</p>
<p>Voc&ecirc; gemer, voc&ecirc; chorar</p>
<p>A gente bebe &aacute;gua quando sente sede</p>
<p>Cabelo se assanha quando o vento d&aacute;</p>
<p>&nbsp;</p>
<p>Olha morena esse teu cheiro</p>
<p>Se juntar com o meu tempero</p>
<p>Vai ser bom demais</p>
<p>Dou-lhe uma rasteira, lhe castigo na esteira</p>
<p>N&atilde;o lhe solto mais</p>
<p>Dou-lhe uma rasteira, lhe castigo na esteira</p>
<p>N&atilde;o lhe solto mais</p>
',
                'creditos' => '
<p>Arranjo de metais e trombone tenor: Nilsinho Amarante</p>
<p>Arranjo de base, acordeom, tri&acirc;ngulo e zabumba: Cezzinha Thomaz</p>
<p>PAD: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Guitarra: Marcos Arcanjo</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
<p>Trompetes: Enok Chagas e Fabinho Costa</p>
<p>Sax tenor: Gilberto Pontes</p>
<p>Sax alto: Maestro Spok</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Elba e Cezzinha Thomaz</p>
',
                'faixa_mp3' => '04_nao_lhe_solto_mais.mp3',
                'faixa_ogg' => '04_nao_lhe_solto_mais.ogg',
                'disco_id' => '30'));

        Musicas::create(
            array(
                'faixa' => 'Me D&aacute; Meu Cora&ccedil;&atilde;o',
                'compositor' => '(Accioly Neto)',
                'letra' => '<p>Voc&ecirc; dizia que me amava e me queria</p>
<p>Que jamais em sua vida gostou de algu&eacute;m assim</p>
<p>Que eu era tudo pra voc&ecirc;</p>
<p>A flor do bem querer</p>
<p>E nunca ia poder viver sem mim</p>
<p>&nbsp;</p>
<p>Tanto cuidado, tanto mimo, tanto dengo</p>
<p>Cada dia mais crescendo</p>
<p>Dava gosto de se ver</p>
<p>Como se fosse transmiss&atilde;o de pensamento</p>
<p>Voc&ecirc; ligava pra mim e eu tava pensando em voc&ecirc;</p>
<p>&nbsp;</p>
<p>Diga onde foi que eu errei</p>
<p>Aonde vacilei</p>
<p>Fiquei de fora</p>
<p>Se foi tudo uma ilus&atilde;o</p>
<p>Me d&aacute; meu cora&ccedil;&atilde;o</p>
<p>Que eu vou embora</p>
',
                'creditos' => '
<p>Arranjo de base, acordeom e tri&acirc;ngulo: Cezzinha Thomaz</p>
<p>PAD: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Guitarra e viola de 12 cordas: Marcos Arcanjo</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
',
                'faixa_mp3' => '05_me_da_meu_coracao.mp3',
                'faixa_ogg' => '05_me_da_meu_coracao.ogg',
                'disco_id' => '30'));

        Musicas::create(
            array(
                'faixa' => 'Oferendar',
                'compositor' => '(Fl&aacute;vio Leandro / Xico Bizerra)',
                'letra' => '<p>Deixa eu me banhar no orvalho fresco desse teu amor</p>
<p>Deixa eu me molhar na cachoeira do teu carinhar</p>
<p>Deixa eu me entranhar pelas veredas do teu cora&ccedil;&atilde;o</p>
<p>Deixa eu desvendar tua paix&atilde;o</p>
<p>Deixa eu me apaixonar</p>
<p>Deixa eu desvendar tua paix&atilde;o</p>
<p>Deixa eu me apaixonar</p>
<p>&nbsp;</p>
<p>Deixa eu beber no teu riacho</p>
<p>Um cacho de &aacute;gua cristalina</p>
<p>Deixa eu fecundar tua semente</p>
<p>No ventre de uma chuva fina</p>
<p>E a cada manh&atilde;</p>
<p>Meu amor te oferendar</p>
<p>E a cada manh&atilde;</p>
<p>Meu amor te oferendar</p>
<p>&nbsp;</p>
<p>Minha boca te espiando e nada te dizendo</p>
<p>Meus olhos alumiando tudo a te falar</p>
<p>E c&aacute; dentro do peito um pobre cora&ccedil;&atilde;o batendo</p>
<p>Contendo um balaio cheio de amor pra dar</p>
<p>&nbsp;</p>
<p>Vem me dar um cheiro</p>
<p>Que eu te dou o meu</p>
<p>Se avexe, vem ligeiro</p>
<p>Chegue c&aacute; pra riba deu</p>
<p>Vem me dar teu cheiro que eu te dou o meu amor</p>
<p>E a minha vida do jeitinho que Deus criou</p>
',
                'creditos' => '
<p>Arranjo de base, acordeom e tri&acirc;ngulo: Cezzinha Thomaz</p>
<p>PAD: Z&eacute; Am&eacute;rico Bastos</p>
<p>Cello: Lui Coimbra</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Guitarra: Marcos Arcanjo</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o e Elba</p>
',
                'faixa_mp3' => '06_oferendar.mp3',
                'faixa_ogg' => '06_oferendar.ogg',
                'disco_id' => '30'));

        Musicas::create(
            array(
                'faixa' => '&Eacute; S&oacute; Voc&ecirc; Querer',
                'compositor' => '(Nando Cordel) Participa&ccedil;&atilde;o especial: <strong> Cezzinha Thomaz</strong>',
                'letra' => '<p>O meu amor &eacute; seu</p>
<p>&Eacute; s&oacute; voc&ecirc; querer</p>
<p>Eu fa&ccedil;o qualquer coisa</p>
<p>Pra ficar com voc&ecirc;</p>
<p>&nbsp;</p>
<p>Te dou meu cora&ccedil;&atilde;o</p>
<p>E o que voc&ecirc; sonhar</p>
<p>Voc&ecirc; n&atilde;o sabe como &eacute; grande</p>
<p>Essa vontade de te amar</p>
<p>&nbsp;</p>
<p>Voc&ecirc; tem perfume da manh&atilde;</p>
<p>Eu fico doidinha pra cheirar</p>
<p>A tua boca &eacute; uma rom&atilde;</p>
<p>Eu fico doidinha pra beijar</p>
<p>&nbsp;</p>
<p>Voc&ecirc; &eacute; minha luz e eu vou seguir</p>
<p>Porque sei que posso me dar bem</p>
<p>O meu cora&ccedil;&atilde;o me diz</p>
<p>Igual a tu n&atilde;o tem ningu&eacute;m</p>
<p>O meu cora&ccedil;&atilde;o me diz</p>
<p>Igual a tu n&atilde;o tem ningu&eacute;m</p>
',
                'creditos' => '
<p>Arranjo, PAD e cordas (samplers): Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria, moringa e pratos: Tost&atilde;o Queiroga</p>
<p>Guitarra e viol&atilde;o de nylon: Marcos Arcanjo</p>
<p>Contrabaixo e baixo ac&uacute;stico: Fernando Gaby (Fof&atilde;o)</p>
<p>Cello: Lui Coimbra</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
<p>Acordeom e tri&acirc;ngulo: Cezzinha Thomaz</p>
',
                'faixa_mp3' => '07_e_so_voce_querer.mp3',
                'faixa_ogg' => '07_e_so_voce_querer.ogg',
                'disco_id' => '30'));

        Musicas::create(
            array(
                'faixa' => 'Recado',
                'compositor' => '(Cezzinha Thomaz / Fábio Simões)',
                'letra' => '<p>Lua que ilumina, muda a minha sina</p>
<p>Eu n&atilde;o quero mais sofrer</p>
<p>Lua que ilumina, muda a minha sina</p>
<p>Eu n&atilde;o quero mais sofrer</p>
<p>Manda um recado s&oacute; pra ela</p>
<p>Correr pra janela e aparecer</p>
<p>&nbsp;</p>
<p>Diz tamb&eacute;m</p>
<p>Que eu preciso daquele sorriso</p>
<p>E teus olhos de paix&atilde;o</p>
<p>Estou apaixonado, eu sei</p>
<p>E esse &eacute; meu recado</p>
',
                'creditos' => '
<p>Arranjo de base, PAD, arranjo de cordas e cordas (samplers): Z&eacute; Am&eacute;rico Bastos</p>
<p>Piano (Fender Rhodes): Rannieri Oliveira</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Guitarra: Marcos Arcanjo</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
<p>Acordeom, tri&acirc;ngulo e zabumba: Cezzinha Thomaz</p>
',
                'faixa_mp3' => '08_recado.mp3',
                'faixa_ogg' => '08_recado.ogg',
                'disco_id' => '30'));

        Musicas::create(
            array(
                'faixa' => 'D&#39;estar',
                'compositor' => '(Eliezer Setton)',
                'letra' => '<p>Saiu da minha vida sem olhar nos olhos meus</p>
<p>Na hora da partida nem sequer me disse adeus</p>
<p>Se a culpa &eacute; minha ou se &eacute; ingratid&atilde;o</p>
<p>Sei n&atilde;o, sei n&atilde;o, sei n&atilde;o</p>
<p>&nbsp;</p>
<p>Provou minha comida, bebeu &aacute;gua que eu tomei</p>
<p>Sabe da minha vida coisas que eu mesmo n&atilde;o sei</p>
<p>Se lhe perdoo ou se eu pe&ccedil;o perd&atilde;o</p>
<p>Sei n&atilde;o, sei n&atilde;o, sei n&atilde;o</p>
<p>&nbsp;</p>
<p>D&rsquo; estar</p>
<p>Que eu me aguento do meu jeito, sem chorar</p>
<p>D&rsquo;estar</p>
<p>Eu suporto caladinha a minha dor</p>
<p>D&rsquo;estar</p>
<p>Isso &eacute; coisa de quem vive pra se dar</p>
<p>D&rsquo;estar</p>
<p>Que nem tudo que era doce se acabou</p>
<p>&nbsp;</p>
<p>D&rsquo;estar</p>
<p>Se a saudade se chegar eu digo n&atilde;o</p>
<p>D&rsquo;estar</p>
<p>Eu conhe&ccedil;o direitinho meu cora&ccedil;&atilde;o</p>
<p>D&rsquo;estar</p>
<p>Logo, logo, outro amor, outra paix&atilde;o</p>
<p>D&rsquo;estar</p>
<p>Sozinha n&atilde;o fico n&atilde;o</p>
',
                'creditos' => '
<p>Arranjo de base, acordeom e tri&acirc;ngulo: Cezzinha Thomaz</p>
<p>PAD: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Guitarra: Marcos Arcanjo</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o e Elba</p>

',
                'faixa_mp3' => '09_estar.mp3',
                'faixa_ogg' => '09_estar.ogg',
                'disco_id' => '30'));

        Musicas::create(
            array(
                'faixa' => 'Ilus&atilde;o Nada Mais',
                'compositor' => '(Dominguinhos / Fausto Nilo)',
                'letra' => '<p>Bela madona dos meus olhos</p>
<p>Pelos teus l&aacute;bios</p>
<p>Tanto veneno j&aacute; bebi</p>
<p>Tudo por um beijo no teu peito</p>
<p>Adormecido nos rochedos da mem&oacute;ria</p>
<p>&nbsp;</p>
<p>Por meu del&iacute;rio nessa hist&oacute;ria</p>
<p>Fui desenhando a tua imensa catedral</p>
<p>Com as l&aacute;grimas sem jeito</p>
<p>Do meu sonho imperfeito</p>
<p>E migalhas de um tormento colossal</p>
<p>&nbsp;</p>
<p>Se algu&eacute;m tortura meu olhar</p>
<p>Com teu sorriso</p>
<p>Pela janela de um trem</p>
<p>Morro no moderno para&iacute;so</p>
<p>E nem preciso mais amar ningu&eacute;m</p>
<p>&nbsp;</p>
<p>Est&aacute; chovendo em meu passado</p>
<p>E eu nem recordo</p>
<p>A tua sombra sobre mim</p>
<p>A luz do jardim &agrave;quela hora</p>
<p>&Eacute; o que eu relembro nessa solid&atilde;o de agora</p>
<p>&nbsp;</p>
<p>Toda imensid&atilde;o da nova aurora</p>
<p>Foi a vit&oacute;ria do teu bem sobre o meu mal</p>
<p>Raz&atilde;o contradit&oacute;ria</p>
<p>Desses versos esquisitos</p>
<p>Com verdades imposs&iacute;veis de cantar</p>
<p>&nbsp;</p>
<p>Preste aten&ccedil;&atilde;o que eu estou cantando</p>
<p>Enquanto choro</p>
<p>Com frases de botequim</p>
<p>&Eacute; mesmo assim a realidade</p>
<p>D&aacute; vontade de chorar no fim</p>
<p>&nbsp;</p>
<p>E o sol da minha vida nunca mais iluminou</p>
<p>A estrada refletida por teus olhos matinais</p>
<p>O azul entre os portais</p>
<p>O meu futuro j&aacute; passou</p>
<p>&Eacute; a pr&oacute;pria cor do nunca mais</p>
<p>&Eacute; a insensatez de ser feliz</p>
<p>Al&eacute;m dos sonhos da raz&atilde;o</p>
<p>Ilus&atilde;o, nada mais</p>
',
                'creditos' => '
<p>Arranjo de base e acordeom: Cezzinha Thomaz</p>
<p>Piano ac&uacute;stico: Z&eacute; Am&eacute;rico Bastos</p>
<p>Sax soprano: Leo Gandelman</p>
<p>Bateria, moringa e pratos: Tost&atilde;o Queiroga</p>
<p>Guitarra e viol&atilde;o de nylon: Marcos Arcanjo</p>
<p>Baixo ac&uacute;stico: Fernando Gaby (Fof&atilde;o)</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
',
                'faixa_mp3' => '10_ilusao_nada_mais.mp3',
                'faixa_ogg' => '10_ilusao_nada_mais.ogg',
                'disco_id' => '30'));

        Musicas::create(
            array(
                'faixa' => 'Se Tu Quiser',
                'compositor' => '(Xico Bizerra)',
                'letra' => '<p>Se tu quiser</p>
<p>Eu invento o vento pra ventar amor</p>
<p>Uma chuva bem chovida</p>
<p>Pra chover p&eacute; de ful&ocirc;</p>
<p>Pra tu ficar cheirosa e vir dan&ccedil;ar mais eu</p>
<p>&nbsp;</p>
<p>Se tu quiser</p>
<p>Eu poemo um poema bem cheio de rima</p>
<p>Acendo a estrela mais bonita l&aacute; de cima</p>
<p>Fa&ccedil;o tudo que puder</p>
<p>Pra tu ficar mais eu</p>
<p>&nbsp;</p>
<p>Se tu quiser</p>
<p>Eu crio um sentimento pra gente se amar</p>
<p>Descubro um jeito novo de te abra&ccedil;ar</p>
<p>Te beijo com um beijo</p>
<p>Que ningu&eacute;m nunca beijou</p>
<p>&nbsp;</p>
<p>Se tu quiser</p>
<p>Basta me dizer que eu irei correndo</p>
<p>&Eacute; s&oacute; me avisar que tu t&aacute; me querendo</p>
<p>E o mundo vai saber</p>
<p>O que &eacute; um grande amor</p>
',
                'creditos' => '
<p>Arranjo de metais: Enok Chagas</p>
<p>Arranjo de base, acordeom e tri&acirc;ngulo: Cezzinha Thomaz</p>
<p>PAD: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Guitarra: Marcos Arcanjo</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
<p>Trombone tenor: Nilsinho Amarante</p>
<p>Tompetes: Enok Chagas e Fabinho Costa</p>
<p>Sax tenor: Gilberto Pontes</p>
<p>Sax alto: Maestro Spok</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o e Elba</p>
',
                'faixa_mp3' => '11_se_tu_quiser.mp3',
                'faixa_ogg' => '11_se_tu_quiser.ogg',
                'disco_id' => '30'));

        Musicas::create(
            array(
                'faixa' => 'Seu Aconchego',
                'compositor' => '(J&uacute;nior Vieira / Terezinha do Acordeom)',
                'letra' => '<p>Um passarinho me contou</p>
<p>No meu ouvido bem baixinho</p>
<p>Que &eacute; meu o seu amor</p>
<p>Sou dona do seu carinho</p>
<p>&nbsp;</p>
<p>No inverno e no ver&atilde;o</p>
<p>Vou seguindo o seu caminho</p>
<p>Com voc&ecirc; meu cora&ccedil;&atilde;o</p>
<p>Nunca vai ficar sozinho</p>
<p>&nbsp;</p>
<p>Canto como canta o sabi&aacute;</p>
<p>O curi&oacute; e o poeta beija-flor</p>
<p>Quero para sempre desfrutar</p>
<p>Seu aconchego, sua paz e seu amor</p>
<p>&nbsp;</p>
<p>Se estou triste, voc&ecirc; chora</p>
<p>Se estou feliz, sorri comigo</p>
<p>Sei que nunca vai embora</p>
<p>&Eacute; seguro o seu abrigo</p>
<p>&nbsp;</p>
<p>Nossas horas de amor</p>
<p>&Eacute; voc&ecirc; quem me conduz</p>
<p>Minha brisa no calor</p>
<p>No escuro a minha luz</p>
',
                'creditos' => '
<p>Arranjo de base, acordeom e tri&acirc;ngulo: Cezzinha Thomaz</p>
<p>PAD: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Guitarras: Lu&atilde; Mattar (participa&ccedil;&atilde;o especial) e Marcos Arcanjo</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o e Elba</p>
',
                'faixa_mp3' => '12_seu_aconchego.mp3',
                'faixa_ogg' => '12_seu_aconchego.ogg',
                'disco_id' => '30'));

        Musicas::create(
            array(
                'faixa' => 'Bebedouro',
                'compositor' => '(Maciel Melo / Anchieta Dali)',
                'letra' => '<p>Eu j&aacute; brinquei de amor</p>
<p>J&aacute; brinquei com o riso</p>
<p>Eu zombei do choro</p>
<p>E o meu bebedouro desaflorou</p>
<p>&nbsp;</p>
<p>Tanto bem que me quiseste</p>
<p>Bem me fizeste</p>
<p>Eu fui cafajeste</p>
<p>Onde o amor veste o seu cobertor</p>
<p>&nbsp;</p>
<p>Eu j&aacute; perdi as contas</p>
<p>De quantas vezes eu me perdi</p>
<p>Procurando e &agrave;s vezes</p>
<p>N&atilde;o encontrava o que procurar</p>
<p>&nbsp;</p>
<p>Mas minhas d&uacute;vidas</p>
<p>Levam meus segredos</p>
<p>O amor j&aacute; foi meu melhor brinquedo</p>
<p>Perdi o medo de te amar</p>
<p>&nbsp;</p>
<p>Eu n&atilde;o suporto mais essas d&uacute;vidas</p>
<p>Minhas d&uacute;vidas</p>
<p>N&atilde;o suporto mais essas d&uacute;vidas</p>
<p>Minhas d&uacute;vidas</p>
',
                'creditos' => '
<p>Arranjo de metais e trombone tenor: Nilsinho Amarante</p>
<p>Arranjo de base, acordeom, tri&acirc;ngulo e zabumba: Cezzinha Thomaz</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Viol&atilde;o de nylon: Marcos Arcanjo</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
<p>Trompetes: Enok Chagas e Fabinho Costa</p>
<p>Sax tenor: Gilberto Pontes</p>
<p>Sax alto: Maestro Spok</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o e Elba</p>
',
                'faixa_mp3' => '13_bebedouro.mp3',
                'faixa_ogg' => '13_bebedouro.ogg',
                'disco_id' => '30'));

        Musicas::create(
            array(
                'faixa' => 'Quem &eacute; Voc&ecirc;',
                'compositor' => '(Jorge de Altinho)',
                'letra' => '<p>Quem &eacute; voc&ecirc;</p>
<p>Que desde o dia em que eu te vi me faz t&atilde;o bem</p>
<p>Que me abra&ccedil;a, faz amor como ningu&eacute;m</p>
<p>Sem voc&ecirc; perto sou crian&ccedil;a sem brinquedo</p>
<p>&nbsp;</p>
<p>Quem &eacute; voc&ecirc;</p>
<p>Que quando abri os olhos tava no seu la&ccedil;o</p>
<p>Que com carinho manda embora meu cansa&ccedil;o</p>
<p>Me ensinando amar a vida sem ter medo</p>
<p>&nbsp;</p>
<p>Quem &eacute; voc&ecirc;</p>
<p>Que abriu meu peito, vasculhou meu cora&ccedil;&atilde;o</p>
<p>Que deu um jeito de espantar a solid&atilde;o</p>
<p>Que h&aacute; muito tempo era a minha companheira</p>
<p>&nbsp;</p>
<p>Quem &eacute; voc&ecirc;</p>
<p>Que vive agora em minha mente noite e dia</p>
<p>Que se tornou raz&atilde;o da minha alegria</p>
<p>Me faz feliz, meu anjo, e diz quem &eacute; voc&ecirc;</p>
',
                'creditos' => '
<p>Arranjo de base, acordeom e tri&acirc;ngulo: Cezzinha Thomaz</p>
<p>Piano Rhodes: Z&eacute; Am&eacute;rico Bastos</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Guitarra: Marcos Arcanjo</p>
<p>Contrabaixo: Fernando Gaby (Fof&atilde;o)</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
<p>Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o e Elba</p>
',
                'faixa_mp3' => '14_quem_e_voce.mp3',
                'faixa_ogg' => '14_quem_e_voce.ogg',
                'disco_id' => '30'));

        Musicas::create(
            array(
                'faixa' => 'Anuncia&ccedil;&atilde;o',
                'compositor' => '(Alceu Valen&ccedil;a)',
                'letra' => '<p>Na bruma leve das paix&otilde;es que vem de dentro</p>
<p>Tu vens chegando pra brincar no meu quintal</p>
<p>No teu cavalo, peito nu, cabelo ao vento</p>
<p>E o sol quarando nossas roupas no varal</p>
<p>&nbsp;</p>
<p>Tu vens, tu vens</p>
<p>Eu j&aacute; escuto os teus sinais</p>
<p>Tu vens, tu vens</p>
<p>Eu j&aacute; escuto os teus sinais</p>
<p>&nbsp;</p>
<p>A voz do anjo sussurrou no meu ouvido</p>
<p>Eu n&atilde;o duvido, j&aacute; escuto os teus sinais</p>
<p>Que tu virias numa manh&atilde; de domingo</p>
<p>Eu te anuncio nos sinos das catedrais</p>
',
                'creditos' => '
',
                'faixa_mp3' => '01_anunciacao.mp3',
                'faixa_ogg' => '01_anunciacao.ogg',
                'disco_id' => '31'));

        Musicas::create(
            array(
                'faixa' => 'Banquete De Signos',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>Discutir o canga&ccedil;o com liberdade</p>
<p>&Eacute; saber da viola, da viol&ecirc;ncia</p>
<p>Descobrir nos cabelos inoc&ecirc;ncia</p>
<p>&Eacute; saber da fatal fertilidade</p>
<p>&nbsp;</p>
<p>Descobrir a cidade na natureza</p>
<p>Descobrir a beleza dessa mulher</p>
<p>Descobrir o que der boniteza</p>
<p>Na peleja do homem vier, quando vier</p>
<p>&nbsp;</p>
<p>Descobrir o baga&ccedil;o dos engenhos</p>
<p>No mela&ccedil;o da cana mais um beijo</p>
<p>Descobrir os desejos que n&atilde;o tem cura</p>
<p>Saracura do brejo da novena</p>
<p>&nbsp;</p>
<p>Descobrir a serena da natureza</p>
<p>Descobrir a beleza dessa mulher</p>
<p>Descobrir o que der boniteza</p>
<p>Na peleja do homem vier, quando vier</p>
',
                'creditos' => '
',
                'faixa_mp3' => '02_banquete_de_signos.mp3',
                'faixa_ogg' => '02_banquete_de_signos.ogg',
                'disco_id' => '31'));

        Musicas::create(
            array(
                'faixa' => 'Canta, Cora&ccedil;&atilde;o',
                'compositor' => '(Geraldo Azevedo / Carlos Fernando) Participa&ccedil;&atilde;o especial: <strong> Geraldo Azevedo</strong>',
                'letra' => '<p>Canta, canta, passarinho</p>
<p>Canta, canta, miudinho</p>
<p>Na palma da minha m&atilde;o</p>
<p>&nbsp;</p>
<p>Eu quero ver voc&ecirc; voando</p>
<p>Quero ouvir voc&ecirc; cantando</p>
<p>Quero paz no cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Eu quero ver voc&ecirc; voando</p>
<p>Quero ouvir voc&ecirc; cantando</p>
<p>Na palma da minha m&atilde;o</p>
<p>&nbsp;</p>
<p>Na palma da minha m&atilde;o</p>
<p>Tem os dedos, tem as linhas</p>
<p>Que olhar cigano caminha</p>
<p>Procurando alcan&ccedil;ar</p>
<p>A nau perdida, o trem que chega</p>
<p>A nova dan&ccedil;a, mata verde, esperan&ccedil;a</p>
<p>Em suas tran&ccedil;as vou voar</p>
<p>Passarinho, eu vou voar</p>
<p>&nbsp;</p>
<p>Meu alegre cora&ccedil;&atilde;o</p>
<p>&Eacute; triste como um camelo</p>
<p>&Eacute; fr&aacute;gil que nem brinquedo</p>
<p>&Eacute; forte como le&atilde;o</p>
<p>&nbsp;</p>
<p>&Eacute; todo zelo, &eacute; todo amor, &eacute; desmantelo</p>
<p>&Eacute; querubim, &eacute; c&atilde;o de fogo</p>
<p>&Eacute; Jesus Cristo, &eacute; Lampi&atilde;o</p>
<p>Passarinho, eu vou voar</p>

',
                'creditos' => '
',
                'faixa_mp3' => '03_canta_coracao.mp3',
                'faixa_ogg' => '03_canta_coracao.ogg',
                'disco_id' => '31'));

        Musicas::create(
            array(
                'faixa' => 'Morena De Angola',
                'compositor' => '(Chico Buarque) <em>M&uacute;sica incidental: <strong>Odeon</strong> (Ernesto Narazeth)</em>',
                'letra' => '<p>Morena de Angola</p>
<p>Que leva o chocalho amarrado na canela</p>
<p>Ser&aacute; que ela mexe o chocalho</p>
<p>Ou o chocalho &eacute; que mexe com ela</p>
<p>&nbsp;</p>
<p>Ser&aacute; que a morena cochila</p>
<p>Escutando o cochicho do chocalho</p>
<p>Ser&aacute; que desperta gingando</p>
<p>E j&aacute; sai chocalhando pro trabalho</p>
<p>&nbsp;</p>
<p>Ser&aacute; que ela t&aacute; na cozinha</p>
<p>Guisando a galinha &agrave; cabidela</p>
<p>Ser&aacute; que esqueceu da galinha</p>
<p>Ficou batucando na panela</p>
<p>&nbsp;</p>
<p>Ser&aacute; que no meio da mata, na moita</p>
<p>A morena inda chocalha</p>
<p>Ser&aacute; que ela n&atilde;o fica afoita</p>
<p>Pra dan&ccedil;ar na chama da batalha</p>
<p>&nbsp;</p>
<p>Morena de Angola</p>
<p>Que leva o chocalho amarrado na canela</p>
<p>Passando pelo regimento</p>
<p>Ela faz requebrar a sentinela</p>
<p>&nbsp;</p>
<p>Ser&aacute; que quando vai pra cama</p>
<p>A morena se esquece dos chocalhos</p>
<p>Ser&aacute; que namora fazendo bochincho</p>
<p>Com seus penduricalhos</p>
<p>&nbsp;</p>
<p>Ser&aacute; que ela t&aacute; caprichando</p>
<p>No peixe que eu trouxe de Benguela</p>
<p>Ser&aacute; que t&aacute; no remelexo</p>
<p>Abandonou meu peixe na tigela</p>
<p>&nbsp;</p>
<p>Ser&aacute; que quando fica choca</p>
<p>P&otilde;e de quarentena os seus chocalhos</p>
<p>Ser&aacute; que depois ela bota</p>
<p>A canela no nicho do pirralho</p>
<p>&nbsp;</p>
<p>Morena de Angola</p>
<p>Que leva o chocalho amarrado na canela</p>
<p>Acho que deixei um cacho</p>
<p>Do meu cora&ccedil;&atilde;o na Catumbela</p>
<p>&nbsp;</p>
<p>Morena de Angola</p>
<p>Que leva o chocalho amarrado na canela</p>
<p>Morena, bichinha danada</p>
<p>Minha camarada do MPLA</p>
',
                'creditos' => '
',
                'faixa_mp3' => '04_morena_de_angola.mp3',
                'faixa_ogg' => '04_morena_de_angola.ogg',
                'disco_id' => '31'));

        Musicas::create(
            array(
                'faixa' => 'Pav&atilde;o Mysteriozo',
                'compositor' => '(Ednardo)',
                'letra' => '<p>Pav&atilde;o mysteriozo</p>
<p>P&aacute;ssaro formoso</p>
<p>Tudo &eacute; mist&eacute;rio</p>
<p>Nesse teu voar</p>
<p>Ah, se eu corresse assim</p>
<p>Tantos c&eacute;us assim</p>
<p>Muita hist&oacute;ria eu tinha pra contar</p>
<p>&nbsp;</p>
<p>Pav&atilde;o mysteriozo</p>
<p>Nessa cauda aberta em leque</p>
<p>Me guarda moleque</p>
<p>De eterno brincar</p>
<p>Me poupa do vexame</p>
<p>De morrer t&atilde;o mo&ccedil;o</p>
<p>Muita coisa ainda quero olhar</p>
<p>&nbsp;</p>
<p>Pav&atilde;o mysteriozo</p>
<p>P&aacute;ssaro formoso</p>
<p>No escuro dessa noite</p>
<p>Me ajude a cantar</p>
<p>Derrame essas fa&iacute;scas</p>
<p>Despeje esse trov&atilde;o</p>
<p>Desmancha isso tudo</p>
<p>Que n&atilde;o &eacute; certo n&atilde;o</p>
<p>&nbsp;</p>
<p>Pav&atilde;o mysteriozo</p>
<p>P&aacute;ssaro formoso</p>
<p>Um conde raivoso</p>
<p>N&atilde;o tarda a chegar</p>
<p>N&atilde;o temas minha donzela</p>
<p>Nossa sorte nessa guerra</p>
<p>Eles s&atilde;o muitos</p>
<p>Mas n&atilde;o podem voar</p>

',
                'creditos' => '
',
                'faixa_mp3' => '05_pavao_mysterioso.mp3',
                'faixa_ogg' => '05_pavao_mysterioso.ogg',
                'disco_id' => '31'));

        Musicas::create(
            array(
                'faixa' => 'O Meu Amor',
                'compositor' => '(Chico Buarque) Participa&ccedil;&atilde;o especial: <strong> Alcione</strong>',
                'letra' => '<p>O meu amor</p>
<p>Tem um jeito manso que &eacute; s&oacute; seu</p>
<p>E que me deixa louca</p>
<p>Quando me beija a boca</p>
<p>Minha pele toda fica arrepiada</p>
<p>E me beija com calma e fundo</p>
<p>At&eacute; minh&rsquo;alma se sentir beijada</p>
<p>Ai</p>
<p>&nbsp;</p>
<p>O meu amor</p>
<p>Tem um jeito manso que &eacute; s&oacute; seu</p>
<p>Que rouba os meus sentidos</p>
<p>Viola os meus ouvidos</p>
<p>Com tantos segredos</p>
<p>Lindos e indecentes</p>
<p>Depois brinca comigo</p>
<p>Ri do meu umbigo</p>
<p>E me crava os dentes</p>
<p>Ai</p>
<p>&nbsp;</p>
<p>Eu sou sua menina, viu?</p>
<p>E ele &eacute; o meu rapaz</p>
<p>Meu corpo &eacute; testemunha</p>
<p>Do bem que ele me faz</p>
<p>&nbsp;</p>
<p>O meu amor</p>
<p>Tem um jeito manso que &eacute; s&oacute; seu</p>
<p>De me deixar maluca</p>
<p>Quando me ro&ccedil;a a nuca</p>
<p>Quase me machuca</p>
<p>Com a barba mal feita</p>
<p>E de pousar as coxas</p>
<p>Entre as minhas coxas</p>
<p>Quando ele se deita</p>
<p>Ai</p>
<p>&nbsp;</p>
<p>O meu amor</p>
<p>Tem um jeito manso que &eacute; s&oacute; seu</p>
<p>De me fazer rodeios</p>
<p>De me beijar os seios</p>
<p>Me beijar o ventre</p>
<p>Me deixar em brasa</p>
<p>Desfruta do meu corpo</p>
<p>Como se o meu corpo</p>
<p>Fosse a sua casa</p>
<p>Ai</p>
',
                'creditos' => '
',
                'faixa_mp3' => '06_o_meu_amor.mp3',
                'faixa_ogg' => '06_o_meu_amor.ogg',
                'disco_id' => '31'));

        Musicas::create(
            array(
                'faixa' => 'De Volta pro Aconchego',
                'compositor' => '(Dominguinhos / Nando Cordel)',
                'letra' => '<p>Estou de volta pro meu aconchego</p>
<p>Trazendo na mala bastante saudade</p>
<p>Querendo um sorriso sincero, um abra&ccedil;o</p>
<p>Para aliviar meu cansa&ccedil;o</p>
<p>E toda essa minha vontade</p>
<p>&nbsp;</p>
<p>Que bom poder t&aacute; contigo de novo</p>
<p>Ro&ccedil;ando teu corpo e beijando voc&ecirc;</p>
<p>Pra mim tu &eacute;s a estrela mais linda</p>
<p>Seus olhos me prendem, fascinam</p>
<p>A paz que eu gosto de ter</p>
<p>&nbsp;</p>
<p>&Eacute; duro ficar sem voc&ecirc; vez em quando</p>
<p>Parece que falta um peda&ccedil;o de mim</p>
<p>Me alegro na hora de regressar</p>
<p>Parece que vou mergulhar</p>
<p>Na felicidade sem fim</p>

',
                'creditos' => '
<p>canta: Elba Ramalho</p>
',
                'faixa_mp3' => '07_de_volta_pro_aconchego.mp3',
                'faixa_ogg' => '07_de_volta_pro_aconchego.ogg',
                'disco_id' => '31'));
        Musicas::create(
            array(
                'faixa' => 'Queixa',
                'compositor' => '(Caetano Veloso) Participa&ccedil;&atilde;o especial: <strong> Lenine</strong>',
                'letra' => '<p>Um amor assim delicado</p>
<p>Voc&ecirc; pega e despreza</p>
<p>N&atilde;o devia ter despertado</p>
<p>Ajoelha e n&atilde;o reza</p>
<p>&nbsp;</p>
<p>Dessa coisa que mete medo</p>
<p>Pela sua grandeza</p>
<p>N&atilde;o sou o &uacute;nico culpado</p>
<p>Disso eu tenho a certeza</p>
<p>&nbsp;</p>
<p>Princesa, surpresa, voc&ecirc; me arrasou</p>
<p>Serpente, nem sente que me envenenou</p>
<p>Senhora, e agora me diga onde eu vou</p>
<p>Senhora, serpente, princesa</p>
<p>&nbsp;</p>
<p>Um amor assim violento</p>
<p>Quando torna-se m&aacute;goa</p>
<p>&Eacute; o avesso de um sentimento</p>
<p>Oceano sem &aacute;gua</p>
<p>&nbsp;</p>
<p>Ondas, desejos de vingan&ccedil;a</p>
<p>Nessa desnatureza</p>
<p>Batem forte sem esperan&ccedil;a</p>
<p>Contra a tua dureza</p>
<p>&nbsp;</p>
<p>Um amor assim delicado</p>
<p>Nenhum homem daria</p>
<p>Talvez tenha sido pecado</p>
<p>Apostar na alegria</p>
<p>&nbsp;</p>
<p>Voc&ecirc; pensa que eu tenho tudo</p>
<p>E vazio me deixa</p>
<p>Mas Deus n&atilde;o quer que eu fique mudo</p>
<p>E eu te grito essa queixa</p>
<p>&nbsp;</p>
<p>Princesa, surpresa, voc&ecirc; me arrasou</p>
<p>Serpente, nem sente que me envenenou</p>
<p>Senhora, e agora me diga aonde eu vou</p>
<p>Amiga, me diga</p>
',
                'creditos' => '
',
                'faixa_mp3' => '08_queixa_com_lenine.mp3',
                'faixa_ogg' => '08_queixa_com_lenine.ogg',
                'disco_id' => '31'));

        Musicas::create(
            array(
                'faixa' => 'Admir&aacute;vel Gado Novo',
                'compositor' => '(Z&eacute; Ramalho) Participa&ccedil;&atilde;o especial: <strong> Z&eacute; Ramalho</strong>',
                'letra' => '<p>Voc&ecirc;s que fazem parte dessa massa</p>
<p>Que passa nos projetos do futuro</p>
<p>&Eacute; duro tanto ter que caminhar</p>
<p>E dar muito mais do que receber</p>
<p>&nbsp;</p>
<p>E ter que demonstrar sua coragem</p>
<p>&Agrave; margem do que possa aparecer</p>
<p>E ver que toda essa engrenagem</p>
<p>J&aacute; sente a ferrugem lhe comer</p>
<p>&nbsp;</p>
<p>&Ecirc;, &ocirc;, &ocirc;</p>
<p>Vida de gado</p>
<p>Povo marcado &ecirc;</p>
<p>Povo feliz</p>
<p>&nbsp;</p>
<p>L&aacute; fora faz um tempo confort&aacute;vel</p>
<p>A vigil&acirc;ncia cuida do normal</p>
<p>Os autom&oacute;veis ouvem a not&iacute;cia</p>
<p>Os homens a publicam no jornal</p>
<p>&nbsp;</p>
<p>E correm atrav&eacute;s da madrugada</p>
<p>A &uacute;nica velhice que chegou</p>
<p>Demoram-se na beira da estrada</p>
<p>E passam a contar o que sobrou</p>
<p>&nbsp;</p>
<p>O povo foge da ignor&acirc;ncia</p>
<p>Apesar de viver t&atilde;o perto dela</p>
<p>E sonham com melhores tempos idos</p>
<p>Contemplam essa vida numa cela</p>
<p>&nbsp;</p>
<p>Esperam nova possibilidade</p>
<p>De verem esse mundo se acabar</p>
<p>A Arca de No&eacute;, o dirig&iacute;vel</p>
<p>N&atilde;o voam, nem se pode flutuar</p>
<p>N&atilde;o voam, nem se pode flutuar</p>
<p>N&atilde;o voam, nem se pode flutuar</p>

',
                'creditos' => '
',
                'faixa_mp3' => '09_admiravel_gado_novo_vida_de_gado.mp3',
                'faixa_ogg' => '09_admiravel_gado_novo_vida_de_gado.ogg',
                'disco_id' => '31'));

        Musicas::create(
            array(
                'faixa' => 'Chorando e Cantando',
                'compositor' => '(Geraldo Azevedo / Fausto Nilo) Participa&ccedil;&atilde;o especial: <strong> Geraldo Azevedo</strong>',
                'letra' => '<p>Quando fevereiro chegar</p>
<p>Saudade j&aacute; n&atilde;o mata a gente</p>
<p>A chama continua</p>
<p>No ar</p>
<p>O fogo vai deixar semente</p>
<p>A gente ri, a gente chora</p>
<p>Ai, ai, ai, ai, a gente chora</p>
<p>Fazendo a noite parecer um dia</p>
<p>Faz mais</p>
<p>Depois faz acordar cantando</p>
<p>Pra fazer e acontecer</p>
<p>Verdades e mentiras</p>
<p>Faz crer</p>
<p>Faz desacreditar de tudo</p>
<p>E depois</p>
<p>Depois amor, amor, amor</p>
<p>&nbsp;</p>
<p>Ningu&eacute;m, ningu&eacute;m ver&aacute;</p>
<p>O que eu sonhei</p>
<p>S&oacute; voc&ecirc;, meu amor</p>
<p>Ningu&eacute;m ver&aacute; o sonho</p>
<p>Que eu sonhei</p>
<p>&nbsp;</p>
<p>Um sorriso quando acordar</p>
<p>Pintado pelo sol nascente</p>
<p>Eu vou te procurar</p>
<p>Na luz</p>
<p>De cada olhar mais diferente</p>
<p>Tua chama me ilumina</p>
<p>Me faz</p>
<p>Virar um astro incandescente</p>
<p>Teu amor faz cometer loucuras</p>
<p>Faz mais</p>
<p>Depois faz acordar chorando</p>
<p>Pra fazer e acontecer</p>
<p>Verdades e mentiras</p>
<p>Faz crer</p>
<p>Faz desacreditar de tudo</p>
<p>E depois</p>
<p>Depois amor, &ocirc;, &ocirc;, &ocirc;</p>
',
                'creditos' => '
<p>canta: Elba Ramalho</p>
',
                'faixa_mp3' => '10_chorando_e_cantando.mp3',
                'faixa_ogg' => '10_chorando_e_cantando.ogg',
                'disco_id' => '31'));

        Musicas::create(
            array(
                'faixa' => '&Eacute; S&oacute; Voc&ecirc; Querer',
                'compositor' => '(Nando Cordel) Participa&ccedil;&atilde;o especial: <strong> Cezzinha Thomaz</strong>',
                'letra' => '<p>O meu amor &eacute; seu</p>
<p>&Eacute; s&oacute; voc&ecirc; querer</p>
<p>Eu fa&ccedil;o qualquer coisa</p>
<p>Pra ficar com voc&ecirc;</p>
<p>&nbsp;</p>
<p>Te dou meu cora&ccedil;&atilde;o</p>
<p>E o que voc&ecirc; sonhar</p>
<p>Voc&ecirc; n&atilde;o sabe como &eacute; grande</p>
<p>Essa vontade de te amar</p>
<p>&nbsp;</p>
<p>Voc&ecirc; tem perfume da manh&atilde;</p>
<p>Eu fico doidinha pra cheirar</p>
<p>A tua boca &eacute; uma rom&atilde;</p>
<p>Eu fico doidinha pra beijar</p>
<p>&nbsp;</p>
<p>Voc&ecirc; &eacute; minha luz e eu vou seguir</p>
<p>Porque sei que posso me dar bem</p>
<p>O meu cora&ccedil;&atilde;o me diz</p>
<p>Igual a tu n&atilde;o tem ningu&eacute;m</p>
<p>O meu cora&ccedil;&atilde;o me diz</p>
<p>Igual a tu n&atilde;o tem ningu&eacute;m</p>
',
                'creditos' => '
',
                'faixa_mp3' => '11_e_so_voce_querer.mp3',
                'faixa_ogg' => '11_e_so_voce_querer.ogg',
                'disco_id' => '31'));

        Musicas::create(
            array(
                'faixa' => 'Ch&atilde;o de Giz',
                'compositor' => '(Z&eacute; Ramalho) Participa&ccedil;&atilde;o especial: <strong> Z&eacute; Ramalho</strong>',
                'letra' => '<p>Eu des&ccedil;o dessa solid&atilde;o</p>
<p>Espalho coisas sobre um ch&atilde;o de giz</p>
<p>H&aacute; meros devaneios tolos a me torturar</p>
<p>Fotografias recortadas em jornais de folhas ami&uacute;de</p>
<p>Eu vou te jogar num pano de guardar confetes</p>
<p>Eu vou te jogar num pano de guardar confetes</p>
<p>&nbsp;</p>
<p>Disparo balas de canh&atilde;o</p>
<p>&Eacute; in&uacute;til pois existe um Gr&atilde;o-Vizir</p>
<p>H&aacute; tantas violetas velhas sem um colibri</p>
<p>Queria usar, quem sabe, uma camisa de for&ccedil;a</p>
<p>Ou de V&ecirc;nus</p>
<p>Mas n&atilde;o vou gozar de n&oacute;s apenas um cigarro</p>
<p>Nem vou te beijar gastando assim o meu batom</p>
<p>&nbsp;</p>
<p>Agora pego um caminh&atilde;o</p>
<p>Na lona, vou a nocaute outra vez</p>
<p>Pra sempre fui acorrentado no seu calcanhar</p>
<p>Meus vinte anos de boy, that&rsquo;s over baby!</p>
<p>Freud explica</p>
<p>N&atilde;o vou me sujar fumando apenas um cigarro</p>
<p>Nem vou te beijar gastando assim o meu batom</p>
<p>Quanto ao pano dos confetes</p>
<p>J&aacute; passou meu carnaval</p>
<p>Isso explica porque o sexo &eacute; assunto popular</p>
<p>No mais, estou indo embora</p>
<p>No mais, estou indo embora, baby, baby</p>
<p>No mais, estou indo embora...</p>
',
                'creditos' => '
',
                'faixa_mp3' => '12_chao_de_giz.mp3',
                'faixa_ogg' => '12_chao_de_giz.ogg',
                'disco_id' => '31'));

        Musicas::create(
            array(
                'faixa' => 'Chuva de Sombrinhas',
                'compositor' => '(Andr&eacute; Rio / Nena Queiroga) Participa&ccedil;&atilde;o especial: <strong> Andr&eacute; Rio</strong>',
                'letra' => '<p>A terra vai tremer quando o Galo passar</p>
<p>Fazendo estremecer o ch&atilde;o da pra&ccedil;a</p>
<p>N&atilde;o vai sobrar pedra sobre pedra</p>
<p>Quando a orquestra tocar</p>
<p>Chamando toda a na&ccedil;&atilde;o do meu Brasil pra ver</p>
<p>Que &eacute; s&oacute; aqui que tem</p>
<p>Que &eacute; s&oacute; aqui que h&aacute;</p>
<p>Duda no frevo, Alceu, Ant&ocirc;nio N&oacute;brega</p>
<p>Que &eacute; s&oacute; aqui que tem</p>
<p>Que &eacute; s&oacute; aqui que h&aacute;</p>
<p>Rios de passos, chuvas de sombrinhas</p>
<p>O coco de Selma, a ciranda de Lia</p>
<p>O passo da Ema, a Cobra passar</p>
<p>O frevo fervendo ao sol do meio-dia</p>
<p>Quarenta graus de vassourinhas</p>
<p>&nbsp;</p>
<p>Ai que calor, &ocirc;, &ocirc;</p>
<p>Ai que calor, &ocirc;, &ocirc;</p>
<p>Ai que calor, &ocirc;, &ocirc;, &ocirc;, &ocirc;, &ocirc;... &ocirc;, &ocirc;</p>
',
                'creditos' => '
<p>canta: Elba Ramalho</p>
',
                'faixa_mp3' => '13_chuva_de_sombrinhas.mp3',
                'faixa_ogg' => '13_chuva_de_sombrinhas.ogg',
                'disco_id' => '31'));

        Musicas::create(
            array(
                'faixa' => 'Frevo Mulher',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>Quantos aqui ouvem os olhos eram de f&eacute;</p>
<p>Quantos elementos amam aquela mulher</p>
<p>Quantos homens eram inverno, outros ver&atilde;o</p>
<p>Outonos caindo secos no solo da minha m&atilde;o</p>
<p>&nbsp;</p>
<p>Gemeram entre cabe&ccedil;as a ponta do espor&atilde;o</p>
<p>A folha do n&atilde;o me toque e o medo da solid&atilde;o</p>
<p>Veneno meu companheiro desatado cantador</p>
<p>E desemboca no primeiro a&ccedil;ude do meu amor</p>
<p>&nbsp;</p>
<p>&Eacute; quando o tempo sacode a cabeleira</p>
<p>A tran&ccedil;a toda vermelha</p>
<p>Um olho cego vagueia</p>
<p>Procurando por um</p>
',
                'creditos' => '
',
                'faixa_mp3' => '14_frevo_mulher.mp3',
                'faixa_ogg' => '14_frevo_mulher.ogg',
                'disco_id' => '31'));

        Musicas::create(
            array(
                'faixa' => 'Olha pro Céu',
                'compositor' => '(Luiz Gonzaga / José Fernandes)<br/>
                cantam: <strong>Elba Ramalho e Gilberto Gil</strong>',
                'letra' => '<p>Olha pro c&eacute;u, meu amor</p>
<p>V&ecirc; como ele est&aacute; lindo</p>
<p>Olha praquele bal&atilde;o multicor</p>
<p>Que l&aacute; no c&eacute;u vai sumindo</p>
<p>&nbsp;</p>
<p>Foi numa noite igual a essa</p>
<p>Que tu me deste o teu cora&ccedil;&atilde;o</p>
<p>O c&eacute;u estava assim em festa</p>
<p>Pois era noite de S&atilde;o Jo&atilde;o</p>
<p>&nbsp;</p>
<p>Havia bal&otilde;es no ar</p>
<p>Xote e bai&atilde;o no sal&atilde;o</p>
<p>E no terreiro o seu olhar</p>
<p>Que incendiou meu cora&ccedil;&atilde;o</p>
',
                'creditos' => '',
                'faixa_mp3' => '01-Elba_e_Gil-Olha_pro_ceu.mp3',
                'faixa_ogg' => '01-Elba_e_Gil-Olha_pro_ceu.ogg',
                'disco_id' => '32'));

        Musicas::create(
            array(
                'faixa' => 'Anunciação',
                'compositor' => '(Alceu Valença)<br/>
                canta: <strong>Elba Ramalho</strong>',
                'letra' => '<p>Na bruma leve</p>
<p>Das paix&otilde;es que v&ecirc;m de dentro</p>
<p>Tu vens chegando</p>
<p>Pra brincar no meu quintal</p>
<p>&nbsp;</p>
<p>No teu cavalo</p>
<p>Peito nu, cabelo ao vento</p>
<p>E o sol quarando</p>
<p>Nossas roupas no varal</p>
<p>&nbsp;</p>
<p>Tu vens, tu vens</p>
<p>Eu j&aacute; escuto os teus sinais</p>
<p>Tu vens, tu vens</p>
<p>Eu j&aacute; escuto os teus sinais</p>
<p>&nbsp;</p>
<p>A voz do anjo</p>
<p>Sussurrou no meu ouvido</p>
<p>Eu n&atilde;o duvido</p>
<p>J&aacute; escuto os teus sinais</p>
<p>&nbsp;</p>
<p>Que tu virias</p>
<p>Numa manh&atilde; de domingo</p>
<p>Eu te anuncio</p>
<p>Nos sinos das catedrais</p>
',
                'creditos' => '',
                'faixa_mp3' => '02-Elba-Anunciacao.mp3',
                'faixa_ogg' => '02-Elba-Anunciacao.ogg',
                'disco_id' => '32'));

        Musicas::create(
            array(
                'faixa' => 'Na Base da Chinela',
                'compositor' => '(Jackson do Pandeiro / Rosil Cavalcanti)<br/>
                cantam: <strong>Elba Ramalho e Gilberto Gil</strong>',
                'letra' => '<p>Eu fui dan&ccedil;ar um baile</p>
<p>Na casa da Gabriela</p>
<p>Nunca vi coisa t&atilde;o boa</p>
<p>Foi na base da chinela</p>
<p>&nbsp;</p>
<p>O sujeito ia chegando</p>
<p>Tirava logo o sapato</p>
<p>Se tivesse de botina</p>
<p>Sola grossa, bico chato</p>
<p>Entrava pra dan&ccedil;ar</p>
<p>No baile da Gabriela</p>
<p>Tirando meia e sapato</p>
<p>E cal&ccedil;ando um par de chinela</p>
<p>&nbsp;</p>
<p>O baile estava animado</p>
<p>S&oacute; na base da chinela</p>
<p>Toda turma disputava</p>
<p>Dan&ccedil;ar com a Gabriela</p>
<p>A requebrar naquela base</p>
<p>No sal&atilde;o s&oacute; tinha ela</p>
<p>Todos convidados riam</p>
<p>Gostando da base dela</p>
<p>Jogaram no sal&atilde;o</p>
<p>Pimenta bem machucada</p>
<p>O baile da Gabriela</p>
<p>Acabou com chinelada</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Qui nem Jil&oacute;</strong></p>
<p><em>(Luiz Gonzaga / Humberto Teixeira)</em></p>
<p>&nbsp;</p>
<p>Se a gente lembra s&oacute; por lembrar</p>
<p>O amor que a gente um dia perdeu</p>
<p>Saudade int&eacute; que assim &eacute; bom</p>
<p>Pro cabra se convencer</p>
<p>Que &eacute; feliz sem saber</p>
<p>Pois n&atilde;o sofreu</p>
<p>&nbsp;</p>
<p>Por&eacute;m se a gente vive a sonhar</p>
<p>Com algu&eacute;m que se deseja rever</p>
<p>Saudade, entonce, a&iacute; &eacute; ruim</p>
<p>Eu tiro isso por mim</p>
<p>Que vivo doido a sofrer</p>
<p>&nbsp;</p>
<p>Ai quem me dera voltar</p>
<p>Pros bra&ccedil;os do meu xod&oacute;</p>
<p>Saudade assim faz roer</p>
<p>E amarga qui nem jil&oacute;</p>
<p>Mas ningu&eacute;m pode dizer</p>
<p>Que me viu triste a chorar</p>
<p>Saudade, o meu rem&eacute;dio &eacute; cantar</p>
<p>Saudade, o meu rem&eacute;dio &eacute; cantar</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Bai&atilde;o</strong></p>
<p><em>(Luiz Gonzaga / Humberto Teixeira)</em></p>
<p>&nbsp;</p>
<p>Eu vou mostrar pra voc&ecirc;s</p>
<p>Como se dan&ccedil;a o bai&atilde;o</p>
<p>E quem quiser aprender</p>
<p>&Eacute; favor prestar aten&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Morena chegue pra c&aacute;</p>
<p>Bem junto ao meu cora&ccedil;&atilde;o</p>
<p>Agora &eacute; s&oacute; me seguir</p>
<p>Pois eu vou dan&ccedil;ar o bai&atilde;o</p>
<p>&nbsp;</p>
<p>Eu j&aacute; dancei balanc&ecirc;</p>
<p>Xamego, samba e xer&eacute;m</p>
<p>Mas o bai&atilde;o tem um qu&ecirc;</p>
<p>Que as outras dan&ccedil;as n&atilde;o t&ecirc;m</p>
<p>&nbsp;</p>
<p>Quem quiser &eacute; s&oacute; dizer</p>
<p>Pois eu com satisfa&ccedil;&atilde;o</p>
<p>Vou cantar dan&ccedil;ando o bai&atilde;o</p>',
                'creditos' => '',
                'faixa_mp3' => '03-Elba_e_Gil-Na_base_da_chinela--Qui.mp3',
                'faixa_ogg' => '03-Elba_e_Gil-Na_base_da_chinela--Qui.ogg',
                'disco_id' => '32'));
        Musicas::create(
            array(
                'faixa' => 'Festa do Interior',
                'compositor' => '(Moraes Moreira / Abel Silva) <br />
                cantam: <strong>Elba Ramalho e Gilberto Gil</strong>',
                'letra' => '<p>Fagulhas, pontas de agulhas</p>
<p>Brilham estrelas de S&atilde;o Jo&atilde;o</p>
<p>Babados, xotes e xaxados</p>
<p>Segura as pontas, meu cora&ccedil;&atilde;o</p>
<p>Bombas na guerra-magia</p>
<p>Ningu&eacute;m matava, ningu&eacute;m morria</p>
<p>&nbsp;</p>
<p>Nas trincheiras da alegria</p>
<p>O que explodia era o amor</p>
<p>Nas trincheiras da alegria</p>
<p>O que explodia era o amor</p>
<p>&nbsp;</p>
<p>Ardia aquela fogueira</p>
<p>Que me esquentava</p>
<p>A vida inteira, eterna noite</p>
<p>Sempre a primeira festa do interior</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Pagode russo</strong></p>
<p><em>(Luiz Gonzaga / Jo&atilde;o Silva)</em></p>
<p>&nbsp;</p>
<p>Ontem eu sonhei que estava em Moscou</p>
<p>Dan&ccedil;ando pagode russo na boate Cossacou</p>
<p>Ontem eu sonhei que estava em Moscou</p>
<p>Dan&ccedil;ando pagode russo na boate Cossacou</p>
<p>&nbsp;</p>
<p>Parecia at&eacute; um frevo naquele cai ou n&atilde;o cai</p>
<p>Parecia at&eacute; um frevo naquele vai ou n&atilde;o vai</p>
<p>Parecia at&eacute; um frevo naquele cai ou n&atilde;o cai</p>
<p>Parecia at&eacute; um frevo naquele vai ou n&atilde;o vai</p>
<p>&nbsp;</p>
<p>Vem c&aacute; cossaco</p>
<p>Cossaco dan&ccedil;a agora</p>
<p>Na dan&ccedil;a do cossaco</p>
<p>N&atilde;o fica cossaco fora</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Onde tu t&aacute; nen&eacute;m</strong></p>
<p><em>(Luiz Bandeira)</em></p>
<p>&nbsp;</p>
<p>Onde tu t&aacute; nen&eacute;m</p>
<p>Eu vim te procurar</p>
<p>Vamos fazer as pazes</p>
<p>Tenho tantas frases pra te agradar</p>
<p>&nbsp;</p>
<p>Onde tu t&aacute; nen&eacute;m</p>
<p>Eu vim te procurar</p>
<p>Saudade sai me solta</p>
<p>T&ocirc; aqui de volta pra meu bem beijar</p>
<p>&nbsp;</p>
<p>Estou aqui de novo junto ao meu povo</p>
<p>Minha gente amiga</p>
<p>Quem me conhece sabe</p>
<p>Que eu detesto intriga</p>
<p>&nbsp;</p>
<p>Uma saudade enorme</p>
<p>Come, deita e dorme no meu cora&ccedil;&atilde;o</p>
<p>Rem&eacute;dio indicado pra quem est&aacute; errado</p>
<p>&Eacute; pedir perd&atilde;o</p>
<p>&nbsp;</p>
<p>Por uma briga &agrave; toa</p>
<p>Tanta coisa boa a gente est&aacute; perdendo</p>
<p>Sert&atilde;o em noite branca</p>
<p>O dia amanhecendo</p>
<p>&nbsp;</p>
<p>Nossa conversa linda</p>
<p>Tem segredo ainda para um s&eacute;culo mais</p>
<p>N&atilde;o &eacute; pra nos gabar</p>
<p>Mas n&atilde;o existe um par como n&oacute;s dois se faz</p>
',
                'creditos' => '',
                'faixa_mp3' => '04-Elba_e_Gil-Festa_do_interior.mp3',
                'faixa_ogg' => '04-Elba_e_Gil-Festa_do_interior.ogg',
                'disco_id' => '32'));
        Musicas::create(
            array(
                'faixa' => 'Procurando Tu',
                'compositor' => '(Antônio Barros / J. Luna)<br />
                cantam:<strong> Elba Ramalho, Gilberto Gil, Thiaguinho e Péricles</strong>',
                'letra' => '<p>Morena diga</p>
<p>Onde &eacute; que tu tava</p>
<p>Onde &eacute; que tu tava</p>
<p>Onde &eacute; que tava tu</p>
<p>&nbsp;</p>
<p>Passei a noite procurando tu</p>
<p>Procurando tu, procurando tu</p>
<p>Passei a noite procurando tu</p>
<p>Procurando tu, procurando tu</p>
<p>&nbsp;</p>
<p>Eu vivo triste, meu amor me beija</p>
<p>Mesmo que n&atilde;o seja beijo de amor</p>
<p>Esse teu beijo sei que me envenena</p>
<p>Mas n&atilde;o tenha pena se ele &eacute; matador</p>
<p>&nbsp;</p>
<p>Eu quero um beijo de lascar o cano</p>
<p>Pois eu sou baiano, cabra beijador</p>
<p>Eu quero um beijo de lascar o cano</p>
<p>Pois eu sou baiano, cabra beijador</p>
<p>&nbsp;</p>
<p>Chega pra perto, me d&aacute; um arrocho</p>
<p>Que eu j&aacute; t&ocirc; roxo de tato roer</p>
<p>Acende o fogo da minha fogueira</p>
<p>Que a noite inteira eu s&oacute; faltei morrer</p>
<p>&nbsp;</p>
<p>Te procurando, meu amor te dando</p>
<p>E tu me enganando, fazendo eu sofrer</p>
<p>Te procurando, meu amor te dando</p>
<p>E tu me enganando, fazendo eu sofrer</p>
',
                'creditos' => '',
                'faixa_mp3' => '05-Procurando_tu.mp3',
                'faixa_ogg' => '05-Procurando_tu.ogg',
                'disco_id' => '32'));
        Musicas::create(
            array(
                'faixa' => 'Esperando na Janela',
                'compositor' => '(Targino Gondim / Manuca Almeida / Raimundinho do Acordeon)<br/>
                canta: <strong>Gilberto Gil</strong>',
                'letra' => '<p>Ainda me lembro do seu caminhar</p>
<p>Seu jeito de olhar, eu me lembro bem</p>
<p>Fico querendo sentir o seu cheiro</p>
<p>&Eacute; daquele jeito que ela tem</p>
<p>&nbsp;</p>
<p>O tempo todo eu fico feito tonto</p>
<p>Sempre procurando, mas ela n&atilde;o vem</p>
<p>E esse aperto no fundo do peito</p>
<p>Desses que o sujeito n&atilde;o pode aguentar, ai</p>
<p>E esse aperto aumenta meu desejo</p>
<p>Eu n&atilde;o vejo a hora de poder lhe falar</p>
<p>&nbsp;</p>
<p>Por isso eu vou na casa dela, ai, ai</p>
<p>Falar do meu amor pra ela, vai</p>
<p>T&aacute; me esperando na janela, ai, ai</p>
<p>N&atilde;o sei se vou me segurar</p>
',
                'creditos' => '',
                'faixa_mp3' => '06-Gil-Esperando_na_janela.mp3',
                'faixa_ogg' => '06-Gil-Esperando_na_janela.ogg',
                'disco_id' => '32'));
        Musicas::create(
            array(
                'faixa' => 'De Volta pro Aconchego',
                'compositor' => '(Dominguinhos / Nando Cordel)</br>
                cantam: <strong>Elba Ramalho e Dominguinhos</strong>',
                'letra' => '<p>Estou de volta pro meu aconchego</p>
<p>Trazendo na mala bastante saudade</p>
<p>Querendo um sorriso sincero, um abra&ccedil;o</p>
<p>Para aliviar meu cansa&ccedil;o</p>
<p>E toda essa minha vontade</p>
<p>&nbsp;</p>
<p>Que bom poder t&aacute; contigo de novo</p>
<p>Ro&ccedil;ando teu corpo e beijando voc&ecirc;</p>
<p>Pra mim tu &eacute;s a estrela mais linda</p>
<p>Seus olhos me prendem, fascinam</p>
<p>A paz que eu gosto de ter</p>
<p>&nbsp;</p>
<p>&Eacute; duro, ficar sem voc&ecirc; vez em quando</p>
<p>Parece que falta um peda&ccedil;o de mim</p>
<p>Me alegro na hora de regressar</p>
<p>Parece que eu vou mergulhar</p>
<p>Na felicidade sem fim</p>
',
                'creditos' => '',
                'faixa_mp3' => '07-Ellba_e_Dominguinhos-De_volta_pro_aconchego.mp3',
                'faixa_ogg' => '07-Ellba_e_Dominguinhos-De_volta_pro_aconchego.ogg',
                'disco_id' => '32'));
        Musicas::create(
            array(
                'faixa' => 'Gostoso Demais',
                'compositor' => '(Dominguinhos / Nando Cordel)<br/>
                cantam: <strong>Elba Ramalho e Dominguinhos</strong>',
                'letra' => '<p>T&ocirc; com saudade de tu, meu desejo</p>
<p>T&ocirc; com saudade do beijo e do mel</p>
<p>Do teu olhar carinhoso</p>
<p>Do teu abra&ccedil;o gostoso</p>
<p>De passear no teu c&eacute;u</p>
<p>&nbsp;</p>
<p>&Eacute; t&atilde;o dif&iacute;cil ficar sem voc&ecirc;</p>
<p>O teu amor &eacute; gostoso demais</p>
<p>Seu cheiro me d&aacute; prazer</p>
<p>Eu quando estou com voc&ecirc;</p>
<p>Estou nos bra&ccedil;os da paz</p>
<p>&nbsp;</p>
<p>Pensamento viaja</p>
<p>E vai buscar meu bem-querer</p>
<p>N&atilde;o d&aacute; ser feliz assim</p>
<p>Tem d&oacute; de mim</p>
<p>O que &eacute; que eu posso fazer?</p>
',
                'creditos' => '',
                'faixa_mp3' => '08-Elba_Dominguinhos-Gostoso_demais.mp3',
                'faixa_ogg' => '08-Elba_Dominguinhos-Gostoso_demais.ogg',
                'disco_id' => '32'));
        Musicas::create(
            array(
                'faixa' => 'Eu Só Quero um Xodó',
                'compositor' => '(Dominguinhos / Anastácia)<br />
                cantam: <strong>Elba Ramalho, Gilberto Gil e Dominguinhos</strong>',
                'letra' => '<p>Que falta eu sinto de um bem</p>
<p>Que falta me faz um xod&oacute;</p>
<p>Mas como eu n&atilde;o tenho ningu&eacute;m</p>
<p>Eu levo a vida assim t&atilde;o s&oacute;</p>
<p>&nbsp;</p>
<p>Eu s&oacute; quero um amor</p>
<p>Que acabe o meu sofrer</p>
<p>Um xod&oacute; pra mim</p>
<p>Do meu jeito assim</p>
<p>Que alegre o meu viver</p>
',
                'creditos' => '',
                'faixa_mp3' => '09-Elba_Gil_Dominguinhos-Eu.mp3',
                'faixa_ogg' => '09-Elba_Gil_Dominguinhos-Eu.ogg',
                'disco_id' => '32'));
        Musicas::create(
            array(
                'faixa' => 'Espumas ao Vento',
                'compositor' => '(Accioly Neto)<br />
                cantam: <strong>Elba Ramalho e Gusttavo Lima</strong>',
                'letra' => '<p>Sei que a&iacute; dentro ainda mora um pedacinho de mim</p>
<p>Um grande amor n&atilde;o se acaba assim</p>
<p>Feito espumas ao vento</p>
<p>N&atilde;o &eacute; coisa de momento, raiva passageira</p>
<p>Mania que d&aacute; e passa, feito brincadeira</p>
<p>O amor deixa marcas que n&atilde;o d&aacute; pra apagar</p>
<p>&nbsp;</p>
<p>Sei que errei e t&ocirc; aqui pra te pedir perd&atilde;o</p>
<p>Cabe&ccedil;a doida, cora&ccedil;&atilde;o na m&atilde;o</p>
<p>Desejo pegando fogo</p>
<p>E sem saber direito a hora e o que fazer</p>
<p>Eu n&atilde;o encontro uma palavra s&oacute; pra te dizer</p>
<p>Mas se eu fosse voc&ecirc; eu voltava pra mim de novo</p>
<p>&nbsp;</p>
<p>E de uma coisa fique certa, amor</p>
<p>A porta vai t&aacute; sempre aberta, amor</p>
<p>O meu olhar vai dar uma festa, amor</p>
<p>Na hora que voc&ecirc; chegar</p>
',
                'creditos' => '',
                'faixa_mp3' => '10-Elba_e_Gusttavo Lima-Espumas_ao_vento.mp3',
                'faixa_ogg' => '10-Elba_e_Gusttavo Lima-Espumas_ao_vento.ogg',
                'disco_id' => '32'));
        Musicas::create(
            array(
                'faixa' => 'Sabiá',
                'compositor' => '(Luiz Gonzaga / Zé Dantas)<br />
                cantam: <strong>Elba Ramalho, Gilberto Gil e Geraldo Azevedo</strong>',
                'letra' => '<p>A todo mundo eu dou psiu (psiu, psiu, psiu)</p>
<p>Perguntando por meu bem (psiu, psiu, psiu)</p>
<p>E tendo um cora&ccedil;&atilde;o vazio</p>
<p>Vivo assim a dar psiu</p>
<p>Sabi&aacute; vem c&aacute; tamb&eacute;m (psiu, psiu, psiu)</p>
<p>&nbsp;</p>
<p>Tu que andas pelo mundo (sabi&aacute;)</p>
<p>Tu que tanto j&aacute; voou (sabi&aacute;)</p>
<p>Tu que fala aos passarinhos (sabi&aacute;)</p>
<p>Alivia minha dor</p>
<p>&nbsp;</p>
<p>Tem pena d&rsquo;eu (sabi&aacute;)</p>
<p>Diz, por favor (sabi&aacute;)</p>
<p>Tu que tanto anda no mundo (sabi&aacute;)</p>
<p>Por onde anda o meu amor (sabi&aacute;)</p>
',
                'creditos' => '',
                'faixa_mp3' => '11-Elba_Gil_e_Geraldo_Azevedo-Sabia.mp3',
                'faixa_ogg' => '11-Elba_Gil_e_Geraldo_Azevedo-Sabia.ogg',
                'disco_id' => '32'));
        Musicas::create(
            array(
                'faixa' => 'Pisa na Fulô',
                'compositor' => '(João do Vale / Ernesto Pires / Silveira Júnior)<br />
                cantam: <strong>Elba Ramalho, Gilberto Gil e Alcione</strong>',
                'letra' => '<p>Pisa na ful&ocirc;</p>
<p>Pisa na ful&ocirc;</p>
<p>Pisa na ful&ocirc;</p>
<p>N&atilde;o maltrata o meu amor</p>
<p>&nbsp;</p>
<p>Um dia desses</p>
<p>Fui dan&ccedil;ar l&aacute; em Pedreiras</p>
<p>Na rua da Golada</p>
<p>Eu gostei da brincadeira</p>
<p>Z&eacute; Caxang&aacute; era o tocador</p>
<p>Mas s&oacute; tocava &ldquo;Pisa na ful&ocirc;&rdquo;</p>
<p>&nbsp;</p>
<p>Eu vi menina que tinha doze anos</p>
<p>Agarrar seu par e tamb&eacute;m sair dan&ccedil;ando</p>
<p>Satisfeita e dizendo</p>
<p>&ldquo;Meu amor, ai, como &eacute; gostoso pisar na ful&ocirc;&rdquo;</p>
<p>&nbsp;</p>
<p>Seu Serafim conversava com Di&oacute;</p>
<p>&ldquo;Sou capaz de jurar nunca vi forr&oacute; mio&rdquo;</p>
<p>Int&eacute; vov&oacute; garrou na m&atilde;o do vov&ocirc;</p>
<p>&ldquo;Bora meu veinho, pisa na ful&ocirc;&rdquo;</p>
<p>&nbsp;</p>
<p>De madrugada Zeca Caxang&aacute;</p>
<p>Disse ao dono da casa</p>
<p>&ldquo;N&atilde;o precisa me pagar</p>
<p>Mas, por favor, arrume outro tocador</p>
<p>Que eu tamb&eacute;m quero pisar na ful&ocirc;&rdquo;</p>
',
                'creditos' => '',
                'faixa_mp3' => '12-Elba_Gil_e_Alcione-Pisa.mp3',
                'faixa_ogg' => '12-Elba_Gil_e_Alcione-Pisa.ogg',
                'disco_id' => '32'));
        Musicas::create(
            array(
                'faixa' => 'Cajuína',
                'compositor' => '(Caetano Veloso)<br />
                cantam: <strong>Elba Ramalho e Caetano Veloso</strong>',
                'letra' => '<p>Existirmos: a que ser&aacute; que se destina?</p>
<p>Pois quando tu me deste a rosa pequenina</p>
<p>Vi que &eacute;s um homem lindo e que se acaso a sina</p>
<p>Do menino infeliz n&atilde;o se nos ilumina</p>
<p>Tampouco turva-se a l&aacute;grima nordestina</p>
<p>Apenas a mat&eacute;ria vida era t&atilde;o fina</p>
<p>E &eacute;ramos olharmo-nos intacta retina</p>
<p>A caju&iacute;na cristalina em Teresina</p>
',
                'creditos' => '',
                'faixa_mp3' => '13-Elba_e_Caetano-Cajuina.mp3',
                'faixa_ogg' => '13-Elba_e_Caetano-Cajuina.ogg',
                'disco_id' => '32'));
        Musicas::create(
            array(
                'faixa' => 'São João Carioca',
                'compositor' => '(Gilberto Gil / Nando Cordel)<br/>
                cantam: <strong>Elba Ramalho e Gilberto Gil</strong>',
                'letra' => '<p>O Rio de Janeiro vai ser s&oacute; anima&ccedil;&atilde;o</p>
<p>&Eacute; forr&oacute;, &eacute; alegria, &eacute; festa de S&atilde;o Jo&atilde;o</p>
<p>O Rio de Janeiro vai ser s&oacute; anima&ccedil;&atilde;o</p>
<p>&Eacute; forr&oacute;, &eacute; alegria, &eacute; festa de S&atilde;o Jo&atilde;o</p>
<p>&nbsp;</p>
<p>S&atilde;o Crist&oacute;v&atilde;o, eu te convido pro chamego</p>
<p>S&atilde;o Conrado, vem que o fogo vai pegar</p>
<p>S&atilde;o Janu&aacute;rio, pode vir com seu molejo</p>
<p>Diga a S&atilde;o Sebasti&atilde;o que a festa vai come&ccedil;ar</p>
<p>&nbsp;</p>
<p>S&atilde;o Judas Tadeu, Santo Ant&ocirc;nio, Santa B&aacute;rbara</p>
<p>Traga S&atilde;o Vicente, S&atilde;o Bento e muita energia</p>
<p>S&atilde;o Jos&eacute;, S&atilde;o Jorge e S&atilde;o Jo&atilde;o Batista</p>
<p>Santa Marta, todo mundo vai cair nessa folia</p>
<p>&nbsp;</p>
<p>No Rio de Janeiro vai ter festa pra chuchu</p>
<p>Na pra&ccedil;a da Zona Norte, na pra&ccedil;a da Zona Sul</p>
<p>No Rio de Janeiro vai ter festa pra chuchu</p>
<p>Na pra&ccedil;a da Zona Norte, na pra&ccedil;a da Zona Sul</p>
<p>&nbsp;</p>
<p>Vem Flamengo, Madureira e Botafogo</p>
<p>Vem pro jogo lindo que nem futebol</p>
<p>Nas firulas do bai&atilde;o e do xaxado</p>
<p>Driblando tristeza e fado, dan&ccedil;ando de sol a sol</p>
<p>&nbsp;</p>
<p>A cidade ser&aacute; t&atilde;o maravilhosa</p>
<p>Quanto mais acesa no seu cora&ccedil;&atilde;o</p>
<p>Estiver sua fogueira, sua brasa</p>
<p>Aquecendo sua casa, ardendo sua paix&atilde;o</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Frevo mulher</strong></p>
<p>(Z&eacute; Ramalho)</p>
<p>&nbsp;</p>
<p>Quantos aqui ouvem</p>
<p>Os olhos eram de f&eacute;</p>
<p>Quantos elementos</p>
<p>Amam aquela mulher</p>
<p>&nbsp;</p>
<p>Quantos homens eram inverno</p>
<p>Outros ver&atilde;o</p>
<p>Outonos caindo secos</p>
<p>No solo da minha m&atilde;o</p>
<p>&nbsp;</p>
<p>Gemeram entre cabe&ccedil;as</p>
<p>A ponta do espor&atilde;o</p>
<p>A folha do n&atilde;o-me-toque</p>
<p>E o medo da solid&atilde;o</p>
<p>&nbsp;</p>
<p>Veneno meu companheiro</p>
<p>Desata no cantador</p>
<p>E desemboca no primeiro</p>
<p>A&ccedil;ude do meu amor</p>
<p>&nbsp;</p>
<p>&Eacute; quando o vento sacode a cabeleira</p>
<p>A tran&ccedil;a toda vermelha</p>
<p>Um olho cego vagueia</p>
<p>Procurando por um</p>
',
                'creditos' => '',
                'faixa_mp3' => '14-Elba_e_Gil-sjc--Frevo mulher.mp3',
                'faixa_ogg' => '14-Elba_e_Gil-sjc--Frevo mulher.ogg',
                'disco_id' => '32'));
        Musicas::create(
            array(
                'faixa' => 'Embolar na Areia',
                'compositor' => '(Herbert Azul)',
                'letra' => '<p>Eu hoje &agrave; noite vou sair pro m&ecirc;i rua</p>
<p>Vou beijar a santa lua que cismou de aparecer</p>
<p>&Eacute; dia de festa, fitas, feira e reisado</p>
<p>&Oacute;, meu belo do pecado</p>
<p>Morro de amor por voc&ecirc;</p>
<p>&nbsp;</p>
<p>Namoradeiro, menino canavial</p>
<p>Se banha no S&atilde;o Francisco do Penedo Coqueiral</p>
<p>E no Puxim</p>
<p>Coruripe do pontal</p>
<p>&Eacute;s fruto, nome de flor</p>
<p>Na trilha do manguezal</p>
<p>&nbsp;</p>
<p>Vamos se embolar na areia meu amor, viu</p>
<p>Vamos se embolar na areia</p>
<p>Vamos se embolar na areia meu amor, viu</p>
<p>Vamos se embolar na areia</p>
<p>&nbsp;</p>
<p>Gr&atilde;o de areia</p>
<p>Eu te dou colar de conchas</p>
<p>Fa&ccedil;o promessa pras &aacute;guas</p>
<p>Pro vento vir e soprar</p>
<p>E em janeiro</p>
<p>Ir ao mar dos navegantes</p>
<p>Para em terras bem distantes</p>
<p>A santa aben&ccedil;oar</p>
',
                'creditos' => '
<p>Arranjo, Rhodes, programa&ccedil;&atilde;o de bateria, percuss&atilde;o e efeitos: Z&eacute; Am&eacute;rico Bastos</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Guitarras e viola 12: Pedro Braga</p>
<p>Coro: Elba e Flavio R&ecirc;go</p>
',
                'faixa_mp3' => '01_embolar_na_areia.mp3',
                'faixa_ogg' => '01_embolar_na_areia.ogg',
                'disco_id' => '33'));

        Musicas::create(
            array(
                'faixa' => 'Deitar e Rolar',
                'compositor' => '(Antonio Barros / Cec&eacute;u)',
                'letra' => '<p>Quero comer da tua comida</p>
<p>Beber da tua bebida</p>
<p>Deitar na tua cama</p>
<p>&nbsp;</p>
<p>Quero ser tua sobremesa</p>
<p>Porque eu quero ter a certeza</p>
<p>Meu bem, que voc&ecirc; me ama</p>
<p>&nbsp;</p>
<p>Quero lavar o teu prato</p>
<p>Eu quero estar no teu retrato</p>
<p>Da tua sala de estar</p>
<p>&nbsp;</p>
<p>Quero sentir teu calor</p>
<p>Provar o gosto do amor</p>
<p>O amor que voc&ecirc; tem pra dar</p>
<p>&nbsp;</p>
<p>A&iacute;, eu vou, meu bem</p>
<p>Eu vou deitar e rolar</p>
<p>A&iacute;, eu vou, meu bem</p>
<p>Eu vou deitar e rolar</p>
<p>&nbsp;</p>
<p>Quero ser o teu caminho</p>
<p>O calor do teu ver&atilde;o</p>
<p>O agasalho do teu ninho</p>
<p>Teu amor, tua paix&atilde;o</p>
<p>&nbsp;</p>
<p>Deitar no teu leito</p>
<p>E poder te abra&ccedil;ar</p>
<p>E daquele jeito voc&ecirc; me beijar</p>
',
                'creditos' => '
<p>Arranjo e acordeom: Cezzinha Thomaz</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Guitarras: Sandro Haick e Marcos Arcanjo</p>
<p>Bateria: Sergio Machado</p>
<p>Percuss&atilde;o: Durval Pereira</p>
<p>Sax soprano e tenor: Z&eacute; Canuto</p>
<p>Coro: Jussara e Jurema Loure&ccedil;o, Guadalupe e Elba</p>
',
                'faixa_mp3' => '02_deitar_e_rolar.mp3',
                'faixa_ogg' => '02_deitar_e_rolar.ogg',
                'disco_id' => '33'));

        Musicas::create(
            array(
                'faixa' => 'Frevo Meio Envergonhado',
                'compositor' => '(Monique Kessous)',
                'letra' => '<p>N&atilde;o sou de nenhuma tribo</p>
<p>A minha ciranda n&atilde;o tem roda n&atilde;o</p>
<p>Eu fa&ccedil;o de tudo um pouco</p>
<p>Mas ningu&eacute;m viu, ningu&eacute;m sabe n&atilde;o</p>
<p>&nbsp;</p>
<p>Sou desse jeito meio envergonhada</p>
<p>Mas quando eu dan&ccedil;o vou at&eacute; o ch&atilde;o</p>
<p>Sou desse jeito meio envergonhada</p>
<p>Mas quando eu dan&ccedil;o vou at&eacute; o ch&atilde;o</p>
<p>&nbsp;</p>
<p>Ser&aacute; que eu posso ensinar</p>
<p>A desligar o bot&atilde;o</p>
<p>&Eacute; viver s&oacute; com o cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Vida &eacute; feita pra amar</p>
<p>Fazer o que bem quiser</p>
<p>T&ocirc; aprendendo a chupar cana e assobiar</p>
<p>Vida &eacute; feita pra amar</p>
<p>Fazer o que bem quiser</p>
<p>T&ocirc; aprendendo a chupar cana e assobiar</p>
<p>&nbsp;</p>
<p>Esse &eacute; o meu frevo, meu fogo</p>
<p>Meu eterno carnaval</p>
<p>Eu vou correndo pra n&atilde;o me atrasar</p>
<p>Vambora l&aacute; dan&ccedil;ar</p>
',
                'creditos' => '
<p>Arranjo, PAD, synth e programa&ccedil;&atilde;o de percuss&atilde;o: Z&eacute; Am&eacute;rico Bastos</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Guitarra e viol&atilde;o: Marcos Arcanjo</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Percuss&atilde;o: Durval Pereira e Anjo Caldas</p>
',
                'faixa_mp3' => '03_frevo_meio_envergonhado.mp3',
                'faixa_ogg' => '03_frevo_meio_envergonhado.ogg',
                'disco_id' => '33'));

        Musicas::create(
            array(
                'faixa' => 'Quando Fecho os Olhos',
                'compositor' => '(Chico C&eacute;sar / Carlos Renn&oacute;)',
                'letra' => '<p>E a&iacute; voc&ecirc; surgiu na minha frente</p>
<p>E eu vi o espa&ccedil;o e o tempo em suspens&atilde;o</p>
<p>Senti no ar a for&ccedil;a diferente</p>
<p>De um momento eterno desde ent&atilde;o</p>
<p>&nbsp;</p>
<p>E aqui dentro de mim voc&ecirc; demora</p>
<p>J&aacute; tornou-se parte mesmo do meu ser</p>
<p>E agora, em qualquer parte, a qualquer hora</p>
<p>Quando eu fecho os olhos vejo s&oacute; voc&ecirc;</p>
<p>&nbsp;</p>
<p>E cada um de n&oacute;s &eacute; um a s&oacute;s</p>
<p>E uma s&oacute; pessoa somos n&oacute;s</p>
<p>Unos num canto, numa voz</p>
<p>E cada um de n&oacute;s &eacute; um a s&oacute;s</p>
<p>E uma s&oacute; pessoa somos n&oacute;s</p>
<p>Unos num canto, numa voz</p>
<p>&nbsp;</p>
<p>O amor une os amantes em um &iacute;m&atilde;</p>
<p>E num enigma claro se traduz</p>
<p>Extremos se atraem, se aproximam</p>
<p>E se completam como sombra e luz</p>
<p>&nbsp;</p>
<p>E assim viemos nos assimilando</p>
<p>Nos assemelhando a nos absorver</p>
<p>E agora, n&atilde;o tem onde, n&atilde;o tem quando</p>
<p>Quando eu fecho os olhos vejo s&oacute; voc&ecirc;</p>
',
                'creditos' => '
<p>Arranjo, piano e cordas (sample): Z&eacute; Am&eacute;rico Bastos</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Viol&atilde;o (stell e nylon): Marcos Arcanjo</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Percuss&atilde;o: Durval Pereira e Anjo Caldas</p>
<p>Acordeom: Mestrinho</p>
',
                'faixa_mp3' => '04_quando_fecho_os_olhos.mp3',
                'faixa_ogg' => '04_quando_fecho_os_olhos.ogg',
                'disco_id' => '33'));

        Musicas::create(
            array(
                'faixa' => 'Por Que Tem Que Ser Assim?',
                'compositor' => '(Chico Pessoa / Cezzinha Thomaz)',
                'letra' => '<p>J&aacute; &eacute; tarde e sem querer</p>
<p>Eu aqui de novo pensando em voc&ecirc;</p>
<p>Por querer teu cora&ccedil;&atilde;o</p>
<p>T&ocirc; perdida na raz&atilde;o</p>
<p>&nbsp;</p>
<p>Ah, como eu queria</p>
<p>Ficar sempre de bra&ccedil;os abertos pra voc&ecirc;</p>
<p>Como o Cristo Redentor</p>
<p>&nbsp;</p>
<p>Ah, eu n&atilde;o queria</p>
<p>A cada dia amanhecer sem teu amor</p>
<p>Eu n&atilde;o suportaria tanta dor</p>
<p>&nbsp;</p>
<p>Por que tem que ser assim?</p>
<p>Se eu te quero tanto</p>
<p>O quanto voc&ecirc; quer a mim</p>
<p>Se eu te amo tanto</p>
<p>Por que tem que ser assim?</p>
',
                'creditos' => '
<p>Arranjo e acordeom: Cezzinha Thomaz</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Viol&atilde;o e viola caipira: Jo&atilde;o Lira</p>
<p>Percuss&atilde;o: Anjo Calas e Durval Pereira</p>
',
                'faixa_mp3' => '05_por_que_tem_que_ser_assim.mp3',
                'faixa_ogg' => '05_por_que_tem_que_ser_assim.ogg',
                'disco_id' => '33'));

        Musicas::create(
            array(
                'faixa' => 'N&atilde;o Chora, N&atilde;o Chora N&atilde;o',
                'compositor' => '(Petr&uacute;cio Amorim)',
                'letra' => '<p>Quando o forr&oacute; come&ccedil;a assim ningu&eacute;m aguenta</p>
<p>O sangue esquenta na batida do bai&atilde;o</p>
<p>A mulherada se assanha no terreiro</p>
<p>Pega a m&atilde;o do cavalheiro que seja bom de sal&atilde;o</p>
<p>&nbsp;</p>
<p>A&iacute; come&ccedil;a a safadeza na sanfona</p>
<p>O fole esquenta na batida do bai&atilde;o</p>
<p>Ningu&eacute;m nesse forr&oacute;</p>
<p>N&atilde;o chora, n&atilde;o chora, n&atilde;o chora n&atilde;o</p>
<p>Ningu&eacute;m nesse forr&oacute;</p>
<p>N&atilde;o chora, n&atilde;o chora, n&atilde;o chora n&atilde;o</p>
<p>&nbsp;</p>
<p>Ciranda tamb&eacute;m mexe com a cabe&ccedil;a</p>
<p>O frevo faz o corpo flutuar</p>
<p>Maracatu l&aacute; no terreiro de Olinda</p>
<p>Faz a menina na ribeira balan&ccedil;a</p>
<p>Enquanto a alegria permanece</p>
<p>No samba e no boi do Maranh&atilde;o</p>
<p>&nbsp;</p>
<p>Ningu&eacute;m nesse forr&oacute;</p>
<p>N&atilde;o chora, n&atilde;o chora, n&atilde;o chora n&atilde;o</p>
<p>Ningu&eacute;m aqui nesse forr&oacute;</p>
<p>N&atilde;o chora, n&atilde;o chora, n&atilde;o chora n&atilde;o</p>
',
                'creditos' => '
<p>Arranjo e acordeom: Cezzinha Thomaz</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Guitarra: Marcos Arcanjo</p>
<p>Bateria: Sergio Machado</p>
<p>Percuss&atilde;o: Durval Pereira</p>
<p>Coro: Jussara e Jurema Louren&ccedil;o, Guadalupe e Elba</p>
',
                'faixa_mp3' => '06_nao_chora_nao_chora_nao.mp3',
                'faixa_ogg' => '06_nao_chora_nao_chora_nao.ogg',
                'disco_id' => '33'));

        Musicas::create(
            array(
                'faixa' => 'Amor De Bumba-Meu-Boi',
                'compositor' => '(Rog&eacute;rio Rangel)',
                'letra' => '<p>Eu ando louco por uma paix&atilde;o maior</p>
<p>E eu que bem tentei evitar o pior</p>
<p>E o pior &eacute; tanto querer e n&atilde;o ter</p>
<p>A estrada &eacute; longa</p>
<p>E a sanfona chora s&oacute;, s&oacute;...</p>
<p>&nbsp;</p>
<p>Nessa tarde que me arde solid&atilde;o</p>
<p>A FM agita as tribos da na&ccedil;&atilde;o</p>
<p>Olhei voc&ecirc;, passei a acreditar em anjo</p>
<p>Sua presen&ccedil;a deu motivo, deu can&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Dan&ccedil;a meu boi</p>
<p>Pisa leve, pisa fundo</p>
<p>Dan&ccedil;a meu boi</p>
<p>Vira noite, vira mundo</p>
<p>&nbsp;</p>
<p>Na madrugada</p>
<p>Vai buscar o meu amor</p>
<p>No p&oacute; da estrada</p>
<p>Minha l&aacute;grima secou</p>
<p>&nbsp;</p>
<p>Tudo que eu canto tem um tanto de voc&ecirc;</p>
<p>Tento fugir, noutra rima me esconder</p>
<p>Mas essa luz cintilando em cada verso</p>
<p>Na melodia mergulho</p>
<p>Deixa doer, doer...</p>
<p>&nbsp;</p>
<p>Eu ando louco que me arde solid&atilde;o</p>
<p>Nessa tarde tem um tanto de voc&ecirc;</p>
<p>A estrada &eacute; longa</p>
<p>E eu acredito em anjo</p>
<p>Minha sanfona</p>
<p>Chora s&oacute;, deixa doer</p>
',
                'creditos' => '
<p>Arranjo e acordeom: Cezzinha Thomaz</p>
<p>Baixo, viol&atilde;o 7 e bandolim: Sandro Haick</p>
<p>Guitarra e viol&atilde;o: Marcos Arcanjo</p>
<p>Bateria: Sergio Machado</p>
<p>Percuss&atilde;o: Durval Pereira, Anjo Caldas e Elba</p>
<p>Coro: Jussara e Jurema Louren&ccedil;o, Guadalupe e Elba</p>
',
                'faixa_mp3' => '07_amor_de_bumba_meu_boi.mp3',
                'faixa_ogg' => '07_amor_de_bumba_meu_boi.ogg',
                'disco_id' => '33'));

        Musicas::create(
            array(
                'faixa' => 'Fibra de Cristal',
                'compositor' => '(S&eacute;rgio S&aacute;)',
                'letra' => '<p>Me aparece de dentro do peito</p>
<p>Transmitindo um eterno sinal</p>
<p>De que estranha mat&eacute;ria ele &eacute; feito?</p>
<p>Fibra fina, fibra de cristal</p>
<p>&nbsp;</p>
<p>Cruza portas, transpassa paredes</p>
<p>Pelos ares e mares se lan&ccedil;a</p>
<p>&Eacute; o fio de todas as redes</p>
<p>Se estendendo na invis&iacute;vel dan&ccedil;a</p>
<p>&nbsp;</p>
<p>Meu amor</p>
<p>Quando &eacute; teu companheiro que te chama</p>
<p>A energia fugaz de quem te ama</p>
<p>N&atilde;o conhece limites pra te tocar</p>
<p>&nbsp;</p>
<p>Neste amor</p>
<p>Cada impulso &eacute; can&ccedil;&atilde;o que se traduz</p>
<p>Em som, na velocidade da luz</p>
<p>Que te alcan&ccedil;a antes mesmo de eu cantar</p>
<p>Te alcan&ccedil;a antes mesmo de eu cantar</p>
<p>&nbsp;</p>
<p>Sol ardente, camadas de gelo</p>
<p>Tempestade, avalanche ou vulc&atilde;o</p>
<p>Nada vai ser capaz de det&ecirc;-lo</p>
<p>No caminho do teu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>D&aacute; mil voltas em torno do mundo</p>
<p>Desce o cosmo se preciso for</p>
<p>Do meu peito ele nasce no fundo</p>
<p>Pra mandar meus recados de amor</p>

',
                'creditos' => '
<p>Arranjo, Rhodes, synth e programa&ccedil;&atilde;o de bateria e percuss&atilde;o: Z&eacute; Am&eacute;rico Bastos</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Guitarras e viola 12: Pedro Braga</p>
',
                'faixa_mp3' => '08_fibra_de_cristal.mp3',
                'faixa_ogg' => '08_fibra_de_cristal.ogg',
                'disco_id' => '33'));

        Musicas::create(
            array(
                'faixa' => 'Mucuripe',
                'compositor' => '(Fagner / Belchior)',
                'letra' => '<p>As velas do Mucuripe</p>
<p>V&atilde;o sair para pescar</p>
<p>Vou levar as minhas m&aacute;goas</p>
<p>Pras &aacute;guas fundas do mar</p>
<p>Hoje &agrave; noite namorar</p>
<p>Sem ter medo da saudade</p>
<p>Sem vontade de casar</p>
<p>&nbsp;</p>
<p>Cal&ccedil;a nova de riscado</p>
<p>Palet&oacute; de linho branco</p>
<p>Que at&eacute; o m&ecirc;s passado</p>
<p>L&aacute; no campo inda era flor</p>
<p>&nbsp;</p>
<p>Com o meu chap&eacute;u quebrado</p>
<p>Um sorriso ing&ecirc;nuo e franco</p>
<p>De um rapaz mo&ccedil;o encantado</p>
<p>Com vinte anos de amor</p>
<p>&nbsp;</p>
<p>Aquela estrela &eacute; dela</p>
<p>Vida, vento, vela leva-me daqui</p>
<p>Aquela estrela &eacute; dela</p>
<p>Vida, vento, vela leva-me daqui</p>
',
                'creditos' => '
<p>Arranjo, piano e cordas (sample): Z&eacute; Am&eacute;rico Bastos</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Viol&atilde;o: Marcos Arcanjo</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Percuss&atilde;o: Durval Pereira e Anjo Caldas</p>
<p>Acordeom: Mestrinho</p>
',
                'faixa_mp3' => '09_mucuripe.mp3',
                'faixa_ogg' => '09_mucuripe.ogg',
                'disco_id' => '33'));

        Musicas::create(
            array(
                'faixa' => 'Onde Deus Possa Me Ouvir',
                'compositor' => '(Vander Lee)',
                'letra' => '<p>Sabe o que eu queria agora, meu bem?</p>
<p>Sair, chegar l&aacute; fora e encontrar algu&eacute;m</p>
<p>Que n&atilde;o me dissesse nada</p>
<p>N&atilde;o me perguntasse nada tamb&eacute;m</p>
<p>&nbsp;</p>
<p>Que me oferecesse um colo ou um ombro</p>
<p>Onde eu desaguasse todo o desengano</p>
<p>Mas a vida anda louca</p>
<p>As pessoas andam tristes</p>
<p>Meus amigos s&atilde;o amigos de ningu&eacute;m</p>
<p>&nbsp;</p>
<p>Sabe o que eu mais quero agora, meu amor?</p>
<p>Morar no interior do seu interior</p>
<p>Pra entender por que se agridem</p>
<p>Se empurram pro abismo</p>
<p>Se debatem, se combatem sem saber</p>
<p>&nbsp;</p>
<p>Meu amor, deixa eu chorar at&eacute; cansar</p>
<p>Me leve pra qualquer lugar</p>
<p>Aonde Deus possa me ouvir</p>
<p>&nbsp;</p>
<p>Minha dor eu n&atilde;o consigo compreender</p>
<p>Eu quero algo pra beber</p>
<p>Me deixe aqui, pode sair</p>
<p>Adeus</p>
',
                'creditos' => '
<p>Arranjo, Rhodes e teclado: Z&eacute; Am&eacute;rico Bastos</p>
<p>Arranjo e acordeom: Mestrinho</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Viol&atilde;o: Marcos Arcanjo</p>
<p>Guitarra: Pedro Braga</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Percuss&atilde;o: Durval Pereira e Anjo Caldas</p>
',
                'faixa_mp3' => '10_onde_deus_possa_me_ouvir.mp3',
                'faixa_ogg' => '10_onde_deus_possa_me_ouvir.ogg',
                'disco_id' => '33'));

        Musicas::create(
            array(
                'faixa' => 'Tu de L&aacute;, Eu de C&aacute',
                'compositor' => '(Antonio Barros / Cec&eacute;u)',
                'letra' => '<p>Meu bem, vamos fazer esse forr&oacute; pegar fogo</p>
<p>Entra no jogo, entra no jogo</p>
<p>Quem nunca joga, n&atilde;o pode aprender</p>
<p>Ganhar e perder, perder e ganhar</p>
<p>Entrar pela noite, sair de manh&atilde;</p>
<p>Comer a ma&ccedil;&atilde; sem Eva notar</p>
<p>Vamos chinelar, levantar poeira</p>
<p>Porque essa brincadeira vai at&eacute; o sol raiar</p>
<p>&nbsp;</p>
<p>Tu de l&aacute;, eu de c&aacute;, meu bem</p>
<p>Como as ondas do mar</p>
<p>Tu de l&aacute;, eu de c&aacute;, meu bem</p>
<p>Como as ondas do mar</p>
<p>&nbsp;</p>
<p>Chega aqui pertinho, me d&aacute; um cheirinho</p>
<p>Pisa miudinho no meu cora&ccedil;&atilde;o</p>
<p>Explode no peito a tua alegria</p>
<p>Sorria, sorria, minha grande paix&atilde;o</p>
<p>&nbsp;</p>
<p>As &aacute;guas que correm no rio Amazonas</p>
<p>V&atilde;o fazer marola nas ondas do mar</p>
<p>O teu remelexo me endoida a cachola</p>
<p>Na tua marola quero me afogar</p>
',
                'creditos' => '
<p>Arranjo e acordeom: Cezzinha Thomaz</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Viol&atilde;o 7 e bandolim: Sandro Haick</p>
<p>Guitarra: Marcos Arcanjo</p>
<p>Bateria: Sergio Machado</p>
<p>Percuss&atilde;o: Durval Pereira</p>
<p>Coro: Jussara e Jurema Louren&ccedil;o, Guadalupe e Elba</p>
',
                'faixa_mp3' => '11_tu_de_la_eu_de_ca.mp3',
                'faixa_ogg' => '11_tu_de_la_eu_de_ca.ogg',
                'disco_id' => '33'));

        Musicas::create(
            array(
                'faixa' => 'Na Rede',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>Quem &eacute; que n&atilde;o gosta</p>
<p>De um agarradinho</p>
<p>De forr&oacute; no escurinho</p>
<p>De sentir calor</p>
<p>&nbsp;</p>
<p>Quem &eacute; que n&atilde;o gosta</p>
<p>De ficar na rede</p>
<p>De matar a sede</p>
<p>De fazer amor</p>
<p>&nbsp;</p>
<p>Quem &eacute; que n&atilde;o gosta</p>
<p>De ouvir fungado</p>
<p>De ficar grudado</p>
<p>De sentir prazer</p>
<p>&nbsp;</p>
<p>Nesse quebra-quebra</p>
<p>Nesse esfrega-esfrega</p>
<p>Cora&ccedil;&atilde;o fica pedindo</p>
<p>Pra se derreter</p>
<p>&nbsp;</p>
<p>Ai, ai, ai, ai, ai, ai</p>
<p>Aqui t&aacute; bom demais, aqui t&aacute; bom demais</p>
<p>Ai, ai, ai, ai, ai, ai</p>
<p>Aqui t&aacute; bom demais, aqui t&aacute; bom demais</p>
<p>&nbsp;</p>
<p>Na brincadeira</p>
<p>A gente faz o que &eacute; bom</p>
<p>A gente suja de batom</p>
<p>A gente cresce o nosso amor</p>
<p>Carinho, chamego, desejo, sabor</p>
',
                'creditos' => '
<p>Arranjo e acordeom: Cezzinha Thomaz</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Guitarras: Sandro Haick e Marcos Arcanjo</p>
<p>Bateria: Sergio Machado</p>
<p>Percuss&atilde;o: Durval Pereira</p>
<p>Coro: Jussara e Jurema Louren&ccedil;o, Guadalupe e Elba</p>
',
                'faixa_mp3' => '12_na_rede.mp3',
                'faixa_ogg' => '12_na_rede.ogg',
                'disco_id' => '33'));

        Musicas::create(
            array(
                'faixa' => 'Minha Vida &eacute; Te Amar',
                'compositor' => '(Dominguinhos / Nando Cordel)',
                'letra' => '<p>Minha lua &eacute; tua estrada</p>
<p>Minha ceia &eacute; teu sabor</p>
<p>Minha casa a tua espera</p>
<p>Nos meus bra&ccedil;os, teu amor</p>
<p>&nbsp;</p>
<p>Teu sorriso &eacute; sempre lindo</p>
<p>Meu desejo &eacute; te encontrar</p>
<p>Meu prazer &eacute; infinito</p>
<p>Minha vida &eacute; te amar</p>
<p>&nbsp;</p>
<p>Eu quero tudo, eu fa&ccedil;o tudo</p>
<p>Pra ficar perto de voc&ecirc;</p>
<p>Voc&ecirc; &eacute; sede, &eacute; sonho, &eacute; l&iacute;rio</p>
<p>&Eacute; a raz&atilde;o pra eu viver</p>
',
                'creditos' => '
<p>Arranjo e acordeom: Cezzinha Thomaz</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Viol&atilde;o e viola caipira: Jo&atilde;o Lira</p>
<p>Percuss&atilde;o: Anjo Caldas e Durval Pereira</p>

',
                'faixa_mp3' => '13_minha_vida_e_te_amar.mp3',
                'faixa_ogg' => '13_minha_vida_e_te_amar.ogg',
                'disco_id' => '33'));
        Musicas::create(
            array(
                'faixa' => 'Forr&oacute; Brasileiro',
                'compositor' => '(Cezzinha Thomaz / Fabio Sim&otilde;es)',
                'letra' => '<p>Bate o zabumba, bate o tri&acirc;ngulo e pandeiro</p>
<p>Chama o povo brasileiro que o forr&oacute; vai come&ccedil;ar</p>
<p>Puxa esse fole, bota g&aacute;s no candeeiro</p>
<p>Que a palha do coqueiro da palho&ccedil;a vai voar</p>
<p>&nbsp;</p>
<p>&Eacute; pra dan&ccedil;ar forr&oacute; e arrasta-p&eacute;</p>
<p>Homem dan&ccedil;ar com mulher at&eacute; o dia clarear</p>
<p>Eu quero ver aquele bole-bole</p>
<p>Que o corpo fica mole, nego bota pra suar</p>
<p>&nbsp;</p>
<p>Forr&oacute; brasileiro</p>
<p>Come&ccedil;ou no meu terreiro</p>
<p>E todo mundo quer dan&ccedil;ar</p>
<p>Forr&oacute; brasileiro</p>
<p>Come&ccedil;ou no meu terreiro</p>
<p>E vai at&eacute; o sol raiar</p>
',
                'creditos' => '
<p>Arranjo e acordeom: Cezzinha Thomaz</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Guitarra: Sandro Haick</p>
<p>Bateria: Sergio Machado</p>
<p>Percuss&atilde;o: Durval Pereira</p>
<p>Sax alto, soprano e tenor: Z&eacute; Canuto</p>
<p>Coro: Jussara e Jurema Loure&ccedil;o, Guadalupe e Elba</p>
',
                'faixa_mp3' => '14_forro_brasileiro.mp3',
                'faixa_ogg' => '14_forro_brasileiro.ogg',
                'disco_id' => '33'));

        Musicas::create(
            array(
                'faixa' => 'Olhando o Cora&ccedil;&atilde;o',
                'compositor' => '(Dominguinhos / Clim&eacute;rio Ferreira)',
                'letra' => '<p>O meu andar pelo mundo</p>
<p>&Eacute; um andar bem profundo</p>
<p>Vai onde tem um forr&oacute;</p>
<p>&nbsp;</p>
<p>Uma alegria, uma dan&ccedil;a</p>
<p>Meu cora&ccedil;&atilde;o n&atilde;o se cansa</p>
<p>De uma festa encontrar</p>
<p>&nbsp;</p>
<p>Um dia talvez eu pare</p>
<p>Ou qualquer dia encostar</p>
<p>Talvez cabreiro eu encare</p>
<p>E olhe o povo dan&ccedil;ar</p>
<p>&nbsp;</p>
<p>Mas por enquanto eu nem tento</p>
<p>Apreciar as estrelas</p>
<p>Olhar pro c&eacute;u e v&ecirc;-las</p>
<p>Piscarem luzes no ch&atilde;o</p>
<p>&nbsp;</p>
<p>Eu c&aacute; por mim me contento</p>
<p>E sem querer ofend&ecirc;-las</p>
<p>Ao inv&eacute;s de olhar estrelas</p>
<p>Olho pro meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Pois &eacute; assim meu andar</p>
<p>Nos cafund&oacute;s desse mundo</p>
<p>N&atilde;o me engano ou confundo</p>
<p>Nem sei pra onde vou ir</p>
<p>&nbsp;</p>
<p>S&oacute; saberei se chegar</p>
<p>Finalmente ao meu destino</p>
<p>N&atilde;o cometi desatino</p>
<p>De planejar ao partir</p>
<p>&nbsp;</p>
<p>O meu andar pela vida</p>
<p>&Eacute; sem controle, errante</p>
<p>&Eacute; como sonho de amante</p>
<p>Que acredita no amor</p>
<p>&nbsp;</p>
<p>E nessa trilha perdida</p>
<p>No rumo desconhecido</p>
<p>O meu andar atrevido</p>
<p>Cura ferida e a dor</p>
<p>Cura ferida e a dor</p>
<p>&nbsp;</p>
<p>O meu andar pela vida</p>
<p>&Eacute; sem controle errante</p>
<p>&Eacute; como sonho de amante</p>
<p>Que acredita no amor</p>
<p>&nbsp;</p>
<p>E nessa trilha perdida</p>
<p>No rumo desconhecido</p>
<p>O meu andar atrevido</p>
<p>Cura a ferida e a dor</p>
<p>Cura a ferida e a dor</p>

',
                'creditos' => '
<p>Programa&ccedil;&atilde;o/beat: DJ Dolores</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Baixo, guitarra, kalimba e apitos: Yuri Queiroga</p>
<p>Zabumba e percuss&atilde;o: Durval Pereira</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
<p>Viola: Paulo Rafael</p>
<p>Viol&atilde;o: Ney Concei&ccedil;&atilde;o</p>
<p>Acordeom: Rafael Menin&atilde;o</p>
<p>Flautas e p&iacute;fanos: Dirceu Leite</p>
<p>&nbsp;</p>
',
                'faixa_mp3' => '01_olhando_o_coracao.mp3',
                'faixa_ogg' => '01_olhando_o_coracao.ogg',
                'disco_id' => '34'));

        Musicas::create(
            array(
                'faixa' => 'Faz&ecirc; o Qu&ecirc;',
                'compositor' => '(Pedro Lu&iacute;s)',
                'letra' => '<p>Prendi as coisa</p>
<p>Faiscando a ferradura</p>
<p>Na minha cabe&ccedil;a dura</p>
<p>E fui no lombo do cavalo</p>
<p>&nbsp;</p>
<p>Ao galop&aacute;-lo</p>
<p>Fui salvando minha vida</p>
<p>Que eu achava j&aacute; perdida</p>
<p>Pelas esquinas do mundo</p>
<p>&nbsp;</p>
<p>De vagabundo</p>
<p>Poeta tem muito pouco</p>
<p>Menos m&eacute;dico, mais louco</p>
<p>Vai enchendo a cabe&ccedil;a</p>
<p>&nbsp;</p>
<p>Pra que apare&ccedil;a</p>
<p>Agarrada no seu verso</p>
<p>Ideia prum universo</p>
<p>Mais tranquilo e mais humano</p>
<p>&nbsp;</p>
<p>Tra&ccedil;ando plano</p>
<p>Reta, curva ou ladeira</p>
<p>Bosque, v&aacute;rzea ou ribanceira</p>
<p>Vai seguindo o arquiteto</p>
<p>&nbsp;</p>
<p>Se tem Hermeto</p>
<p>Bispo, Marley, Gentileza</p>
<p>Isso s&oacute; me d&aacute; certeza</p>
<p>Da nobreza que d&aacute; certo</p>
<p>&nbsp;</p>
<p>Vou fazer, vou fazer (o que?)</p>
<p>M&uacute;sica pra enriquecer</p>
<p>Os cora&ccedil;&otilde;es e o planeta</p>
<p>Basta um papel e uma caneta</p>
',
                'creditos' => '
<p>Programa&ccedil;&atilde;o/beat: DJ Dolores</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Baixo, guitarra e monotron: Yuri Queiroga</p>
<p>Alfaia e percuss&atilde;o: Lucas dos Prazeres</p>
<p>Guitarra e viola: Paulo Rafael</p>
<p>Trombone: Nilsinho Amarante</p>
<p>Trompete: Enok Chagas</p>
<p>Sax tenor: Gilberto Pontes</p>
<p>Sax bar&iacute;tono: Maestro Spok</p>
<p>Coro: Elba Ramalho, Kika Trist&atilde;o, Jussara Louren&ccedil;o, Bettina Graziani, Lu&atilde; Mattar, Alessandro Rocha, L&eacute;o Araujo e Marcus Vinicius</p>
',
                'faixa_mp3' => '02_faze_o_que.mp3',
                'faixa_ogg' => '02_faze_o_que.ogg',
                'disco_id' => '34'));

        Musicas::create(
            array(
                'faixa' => 'S&oacute; pra Lembrar',
                'compositor' => '(Z&eacute;lia Duncan / Dani Black)',
                'letra' => '<p>Quando a noite</p>
<p>For longa demais</p>
<p>A escurid&atilde;o</p>
<p>Roubar sua paz</p>
<p>&nbsp;</p>
<p>Posso ser eu</p>
<p>O risco pra uma fa&iacute;sca</p>
<p>Posso ser eu</p>
<p>O lume que se arrisca</p>
<p>Solo no breu</p>
<p>Fagulha imune a dor</p>
<p>S&oacute; pra lembrar</p>
<p>Que voc&ecirc; tem um amor</p>
<p>&nbsp;</p>
<p>Quando a espera</p>
<p>For tempo demais</p>
<p>A esperan&ccedil;a</p>
<p>Cansada e gasta no ch&atilde;o</p>
<p>&nbsp;</p>
<p>Posso ser eu</p>
<p>O bra&ccedil;o que te carrega</p>
<p>Posso ser eu</p>
<p>O la&ccedil;o que te entrega</p>
<p>F&eacute; no apogeu</p>
<p>A m&atilde;o que rega a flor</p>
<p>S&oacute; pra lembrar</p>
<p>Que voc&ecirc; tem um amor</p>
<p>&nbsp;</p>
<p>Pode a raz&atilde;o desabar</p>
<p>Deixa cair o perd&atilde;o em gotas</p>
<p>Pode o o&aacute;sis secar</p>
<p>Eu buscarei a mais clara das fontes</p>
<p>S&oacute; pra lembrar</p>
<p>S&oacute; pra lembrar</p>
<p>Que voc&ecirc; tem meu amor</p>
<p>&nbsp;</p>
<p>Leito coberto de sonho e mel</p>
<p>De peito aberto bem perto do c&eacute;u</p>
<p>Nunca &eacute; deserto nem nada &eacute; t&atilde;o mau</p>
<p>Quando se tem um amor s&oacute; seu</p>
',
                'creditos' => '
<p>Bateria: Thomas Harres</p>
<p>Baixo: Pedro Dantas</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
<p>Agog&ocirc;: Lu&atilde;</p>
<p>Guitarra e agog&ocirc;: Yuri Queiroga</p>
<p>Viol&atilde;o de nylon e viol&atilde;o de a&ccedil;o: Marcos Arcanjo</p>
<p>Clarinete e flauta: Dirceu Leite</p>
<p>Cello: Lui Coimbra e Ricardo Santoro</p>
<p>Viola: Jess&eacute; Pereira</p>
<p>Arranjo de cordas: Ney Concei&ccedil;&atilde;o</p>
',
                'faixa_mp3' => '03_so_pra_lembrar.mp3',
                'faixa_ogg' => '03_so_pra_lembrar.ogg',
                'disco_id' => '34'));

        Musicas::create(
            array(
                'faixa' => '&Eacute; o Que Me Interessa',
                'compositor' => '(Lenine / Dudu Falc&atilde;o)',
                'letra' => '<p>Daqui desse momento</p>
<p>Do meu olhar pra fora</p>
<p>O mundo &eacute; s&oacute; miragem</p>
<p>A sombra do futuro</p>
<p>A sobra do passado</p>
<p>Assombram a paisagem</p>
<p>&nbsp;</p>
<p>Quem vai virar o jogo</p>
<p>E transformar a perda</p>
<p>Em nossa recompensa</p>
<p>Quando eu olhar pro lado</p>
<p>Eu quero estar cercado</p>
<p>S&oacute; de quem me interessa</p>
<p>&nbsp;</p>
<p>&Agrave;s vezes &eacute; um instante</p>
<p>A tarde faz sil&ecirc;ncio</p>
<p>E o vento sopra a meu favor</p>
<p>&Agrave;s vezes eu pressinto</p>
<p>E &eacute; como uma saudade</p>
<p>De um tempo que ainda n&atilde;o passou</p>
<p>&nbsp;</p>
<p>Me traz o teu sossego</p>
<p>Atrasa o meu rel&oacute;gio</p>
<p>Acalma a minha pressa</p>
<p>Me d&aacute; sua palavra</p>
<p>Sussurra em meu ouvido</p>
<p>S&oacute; o que me interessa</p>
<p>&nbsp;</p>
<p>A l&oacute;gica do vento</p>
<p>O caos do pensamento</p>
<p>A paz na solid&atilde;o</p>
<p>A &oacute;rbita do tempo</p>
<p>A pausa do retrato</p>
<p>A voz da intui&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>A curva do universo</p>
<p>A f&oacute;rmula do acaso</p>
<p>O alcance da promessa</p>
<p>O salto do desejo</p>
<p>O agora e o infinito</p>
<p>S&oacute; o que me interessa</p>
',
                'creditos' => '
<p>Harpa: Cristina Braga</p>
<p>Baixo, guitarra e synth: Yuri Queiroga</p>
<p>Viol&atilde;o e synth: Lu&atilde;</p>
<p>Cello: Lui Coimbra</p>
',
                'faixa_mp3' => '04_e_o_que_me_interessa.mp3',
                'faixa_ogg' => '04_e_o_que_me_interessa.ogg',
                'disco_id' => '34'));

        Musicas::create(
            array(
                'faixa' => 'Nossa Senhora da Paz',
                'compositor' => '(Clayton Barros / Emerson Calado / Lirinha / Nego Henrique / Rafael Almeida)',
                'letra' => '<p>Nossa Senhora da Paz</p>
<p>A bailarina do circo</p>
<p>Vem beijar a pele da cidade</p>
<p>&nbsp;</p>
<p>As feridas</p>
<p>Os jardins</p>
<p>A press&atilde;o</p>
<p>E o motor</p>
<p>&nbsp;</p>
<p>Nossa Senhora dos Sonhos</p>
<p>A trapezista do circo</p>
<p>Venha descansar na minha cama</p>
<p>&nbsp;</p>
<p>Traga toda luz que h&aacute; no c&eacute;u</p>
<p>Traga toda luz que h&aacute; no ch&atilde;o</p>
<p>Leva meu atalho e minha sorte</p>
<p>No movimento da rua</p>

',
                'creditos' => '
<p>Harpa: Cristina Braga</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Alfaia e percuss&atilde;o: Lucas dos Prazeres</p>
<p>Pandeir&atilde;o e percuss&atilde;o: Anjo Caldas</p>
<p>Baixo e guitarra: Yuri Queiroga</p>
<p>Guitarra: Paulo Rafael</p>
<p>Viol&atilde;o: Marcos Arcanjo</p>
<p>Cello: Lui Coimbra</p>
<p>Coro: Lu&atilde;, Alessandro Rocha, L&eacute;o Araujo e Marcos Vin&iacute;cius</p>

',
                'faixa_mp3' => '05_nossa_senhora_da_paz.mp3',
                'faixa_ogg' => '05_nossa_senhora_da_paz.ogg',
                'disco_id' => '34'));

        Musicas::create(
            array(
                'faixa' => 'Contrato de Separa&ccedil;&atilde;o',
                'compositor' => '(Dominguinhos / Anast&aacute;cia)',
                'letra' => '<p>Olha, essa saudade</p>
<p>Que maltrata o meu peito</p>
<p>&Eacute; ilus&atilde;o</p>
<p>E por ser ilus&atilde;o</p>
<p>&Eacute; mais dif&iacute;cil de apagar</p>
<p>&nbsp;</p>
<p>Ela vai me consumindo lentamente</p>
<p>Ela brinca com meu peito</p>
<p>E leva sempre a melhor</p>
<p>&nbsp;</p>
<p>Eu quis fazer com ela</p>
<p>Um contrato de separa&ccedil;&atilde;o</p>
<p>Negou-se ent&atilde;o a aceitar</p>
<p>Sorrindo da minha ilus&atilde;o</p>
<p>&nbsp;</p>
<p>S&oacute; tem um jeito agora</p>
<p>&Eacute; tentar de vez me libertar</p>
<p>Brigar com a lembran&ccedil;a</p>
<p>Pra n&atilde;o mais lembrar</p>
',
                'creditos' => '
<p>Acordeom: Toninho Ferragutti</p>
<p>Arranjo de cordas e baixo ac&uacute;stico: Ney Concei&ccedil;&atilde;o</p>
<p>Cello: Lui Coimbra e Janaina Salles</p>
<p>Viola: Ricardo Volker Taboada</p>
',
                'faixa_mp3' => '06_contrato_de_separacao.mp3',
                'faixa_ogg' => '06_contrato_de_separacao.ogg',
                'disco_id' => '34'));

        Musicas::create(
            array(
                'faixa' => 'Nos Ares de Lisboa',
                'compositor' => '(Dominguinhos / Fausto Nilo) Participa&ccedil;&atilde;o especial: <strong> Carminho</strong>',
                'letra' => '<p>Uma pombinha branca</p>
<p>Nos ares de Lisboa</p>
<p>A procurar seu ninho</p>
<p>Voa, voa</p>
<p>&nbsp;</p>
<p>H&aacute; flores no deserto</p>
<p>H&aacute; pedras no caminho</p>
<p>H&aacute; l&aacute;grimas na rua</p>
<p>Lua, lua</p>
<p>&nbsp;</p>
<p>Minha saudade &eacute; tanta</p>
<p>Que espanta o passarinho</p>
<p>E a luz que vem do vinho</p>
<p>D&aacute; vontade de voar</p>
<p>&nbsp;</p>
<p><strong>Um Passarinho Enganador</strong></p>
<p>(Dominguinhos / Fausto Nilo)</p>
<hr class="space-letra-top-musicas">
<p>Voc&ecirc; voou do nosso ninho</p>
<p>Meu passarinho enganador</p>
<p>O juazeiro chorou</p>
<p>O riacho emudeceu</p>
<p>E o meu c&eacute;u</p>
<p>J&aacute; n&atilde;o tem mais passarinhos</p>
<p>Voc&ecirc; e eu</p>
<p>&nbsp;</p>
<p>N&atilde;o tenha pena de mim</p>
<p>Vendo a paisagem chorar</p>
<p>Descansei meu olhar</p>
<p>Em outro olhar tamb&eacute;m</p>
<p>&nbsp;</p>
<p>Ningu&eacute;m conhece o amor sem chorar</p>
<p>Nem acontece uma dor sem prazer</p>
<p>Voc&ecirc; foi a seca ruim</p>
<p>E depois temporal</p>
<p>Afinal voc&ecirc; foi o meu bem querer</p>
<p>&nbsp;</p>
<p>Um rio passou por mim</p>
<p>Acariciou meu sert&atilde;o</p>
<p>Fez a saudade chover</p>
<p>Dentro do meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Felicidade vai</p>
<p>Felicidade vem</p>
<p>Voc&ecirc; &eacute; o meu inverno</p>
<p>E o meu sol tamb&eacute;m</p>

',
                'creditos' => '
<p>Vozes: Elba e Carminho</p>
<p>Bandolim: Armandinho</p>
<p>Acordeom: Toninho Ferragutti</p>
<p>Baixo ac&uacute;stico: Ney Concei&ccedil;&atilde;o</p>
<p>Viola portuguesa: Diogo Clemente</p>


',
                'faixa_mp3' => '07_nos_ares_de_lisboa.mp3',
                'faixa_ogg' => '07_nos_ares_de_lisboa.ogg',
                'disco_id' => '34'));

        Musicas::create(
            array(
                'faixa' => '&Aacute;rvore',
                'compositor' => '(Edson Gomes)',
                'letra' => '<p>Ando sobre a terra</p>
<p>E vivo sob o sol</p>
<p>E as</p>
<p>E as minhas ra&iacute;zes</p>
<p>Eu balan&ccedil;o</p>
<p>Eu balan&ccedil;o</p>
<p>Eu balan&ccedil;o</p>
<p>&nbsp;</p>
<p>Todo santo dia</p>
<p>Pois todo dia &eacute; santo</p>
<p>E eu</p>
<p>Sou uma &aacute;rvore bonita</p>
<p>Que precisa ter os seus cuidados</p>
<p>&nbsp;</p>
<p>Vem me regar, m&atilde;e</p>
<p>Vem me regar</p>
<p>Vem me regar, &ocirc;, m&atilde;e</p>
<p>Vem me regar</p>
',
                'creditos' => '
<p>Bateria: Sanzyo Dub</p>
<p>Baixo: Chico Tch&ecirc;</p>
<p>Percuss&atilde;o: Anjo Caldas</p>
<p>Guitarra base: Jayme Bettas</p>
<p>Guitarra solo: Yuri Queiroga</p>
<p>Viol&atilde;o: Lu&atilde;</p>
<p>&Oacute;rg&atilde;o e teclado: Jo&atilde;o Nogueira</p>
<p>Trombone: Nilsinho Amarante</p>
<p>Trompete: Enok Chagas</p>
<p>Sax tenor: Gilberto Pontes</p>
<p>Sax bar&iacute;tono: Maestro Spok</p>
<p>Coro: Gil Miranda e Gilce de Paula</p>
',
                'faixa_mp3' => '08_arvore.mp3',
                'faixa_ogg' => '08_arvore.ogg',
                'disco_id' => '34'));

        Musicas::create(
            array(
                'faixa' => 'Patchuli',
                'compositor' => '(Chico C&eacute;sar) Participa&ccedil;&atilde;o especial: <strong> Chico C&eacute;sar</strong>',
                'letra' => '<p>Que cheiro bom &eacute; esse</p>
<p>Que eu t&ocirc; sentindo aqui</p>
<p>Patchuli, patchuli</p>
<p>Patchuli, patchuli</p>
<p>&nbsp;</p>
<p>Cheira que nem fogueira</p>
<p>Que queima no Cariri</p>
<p>Patchuli, patchuli</p>
<p>Patchuli, patchuli</p>
<p>&nbsp;</p>
<p>Cheiro de mato queimado</p>
<p>De coivara no ro&ccedil;ado</p>
<p>Que h&aacute; dentro de mim e ti</p>
<p>Eita cheiro bom danado</p>
<p>Parece um sonho acordado</p>
<p>Que se sonha sem dormir</p>
<p>Patchuli, patchuli</p>
<p>Patchuli, patchuli</p>
<p>&nbsp;</p>
<p>Nesse baile perfumado</p>
<p>Mesmo quando t&ocirc; parado</p>
<p>O ch&atilde;o parece bulir</p>
<p>Solto ou empareado</p>
<p>Dan&ccedil;o sem sentir enfado</p>
<p>Na dan&ccedil;a do patchuli</p>
<p>Patchuli, patchuli</p>
<p>Patchuli, patchuli</p>

',
                'creditos' => '
<p>Vozes: Elba e Chico C&eacute;sar</p>
<p>Bateria e percuss&atilde;o: Sid3</p>
<p>Baixo e synth: Yuri Queiroga</p>
<p>Guitarra: Gabriel Melo</p>
<p>Viol&atilde;o: Lu&atilde;</p>
<p>Arranjo de metais e trombone: Nilsinho Amarante</p>
<p>Sax: Gilberto Pontes e Maestro Spok</p>
<p>Trompete: Enok Chagas</p>
',
                'faixa_mp3' => '09_patchuli.mp3',
                'faixa_ogg' => '09_patchuli.ogg',
                'disco_id' => '34'));

        Musicas::create(
            array(
                'faixa' => 'La Noy&eacute;e',
                'compositor' => '(Serge Gainsbourg)',
                'letra' => '<p>Tu t&#39;en vas &agrave; la d&eacute;rive</p>
<p>Sur la rivire du souvenir</p>
<p>Et moi, courant sur la rive</p>
<p>Je te crie de revenir</p>
<p>&nbsp;</p>
<p>Mais, lentement, tu t&#39;&eacute;loignes</p>
<p>Dans ta course &eacute;perdue</p>
<p>Peu &agrave; peu, je te regagne</p>
<p>Un peu de terrain perdu</p>
<p>&nbsp;</p>
<p>De temps en temps, tu t&#39;enfonces</p>
<p>Dans le liquide mouvant</p>
<p>Ou bien, fr&ocirc;lant quelques ronces</p>
<p>Tu h&eacute;sites et tu m&#39;attends</p>
<p>&nbsp;</p>
<p>En te cachant la figure</p>
<p>Dans ta robe retrouss&eacute;e</p>
<p>De peur que ne te d&eacute;figurent</p>
<p>Et la honte et les regrets</p>
<p>&nbsp;</p>
<p>Tu n&#39;es plus qu&#39;une pauvre &eacute;pave</p>
<p>Chienne creve au fil de l&#39;eau</p>
<p>Mais je reste ton esclave</p>
<p>Et plonge dans le ruisseau</p>
<p>&nbsp;</p>
<p>Quand le souvenir s&#39;arr&ecirc;te</p>
<p>Et l&#39;oc&eacute;an de l&#39;oubli</p>
<p>Brisant nos coeurs et nos t&ecirc;tes</p>
<p>A jamais, nous r&eacute;unit</p>
',
                'creditos' => '
<p>Arranjo, piano, acordeom e cravo: Marcelo Jeneci</p>
<p>Baixo: Yuri Queiroga</p>
<p>Viol&atilde;o e guitarra: Lu&atilde;</p>
',
                'faixa_mp3' => '10_la_noyee.mp3',
                'faixa_ogg' => '10_la_noyee.ogg',
                'disco_id' => '34'));

        Musicas::create(
            array(
                'faixa' => 'Risoflora',
                'compositor' => '(Chico Science)',
                'letra' => '<p>Eu sou um caranguejo, estou de andada</p>
<p>S&oacute; por sua causa</p>
<p>S&oacute; por voc&ecirc;, s&oacute; por voc&ecirc;</p>
<p>E quando estou contigo eu quero gostar</p>
<p>E quando estou um pouco mais junto</p>
<p>Eu quero te amar</p>
<p>&nbsp;</p>
<p>E a&iacute; deixar de lado</p>
<p>Como a flor que eu tinha na m&atilde;o</p>
<p>E a&iacute; esqueci na cal&ccedil;ada</p>
<p>S&oacute; por esquecer</p>
<p>Apenas porque voc&ecirc;</p>
<p>N&atilde;o sabe voltar pra mim</p>
<p>&nbsp;</p>
<p>&Ocirc;, Risoflora</p>
<p>Vou ficar de andada at&eacute; te achar</p>
<p>Prometo, meu amor, vou me regenerar</p>
<p>&nbsp;</p>
<p>&Ocirc;, Risoflora</p>
<p>N&atilde;o vou dar mais bobeira dentro de um carit&oacute;</p>
<p>&Ocirc;, Risoflora, n&atilde;o me deixe s&oacute;</p>
<p>&nbsp;</p>
<p>Eu sou um caranguejo e quero gostar</p>
<p>Enquanto estou um pouco mais junto</p>
<p>Eu quero te amar</p>
<p>E acho que voc&ecirc; n&atilde;o sabe o que &eacute; isso, n&atilde;o</p>
<p>E, se sabe, pelo menos voc&ecirc; pode fingir</p>
<p>E em vez de cair em suas m&atilde;os</p>
<p>Preferia os seus bra&ccedil;os</p>
<p>E em meus bra&ccedil;os te levarei como uma flor</p>
<p>Pra minha maloca na beira do rio, meu amor</p>
',
                'creditos' => '
<p>Harpa: Cristina Braga</p>
<p>Bateria: Tost&atilde;o Queiroga</p>
<p>Percuss&atilde;o: Sid3</p>
<p>FX: DJ Dolores</p>
<p>Baixo e guitarra: Yuri Queiroga</p>
<p>Guitarra: Lu&atilde;</p>

',
                'faixa_mp3' => '11_risoflora.mp3',
                'faixa_ogg' => '11_risoflora.ogg',
                'disco_id' => '34'));

        Musicas::create(
            array(
                'faixa' => 'Ser Livre',
                'compositor' => '(Arlindo Cruz / Zeca Pagodinho)',
                'letra' => '<p>Vou romper de vez as algemas</p>
<p>Dar ponto final aos problemas</p>
<p>Livre, bem livre</p>
<p>Livre</p>
<p>&nbsp;</p>
<p>Vou viver um mundo sem leis</p>
<p>E sem ser sen&atilde;o ou talvez</p>
<p>Ser livre, livre</p>
<p>Livre</p>
<p>&nbsp;</p>
<p>Vou acreditar no futuro</p>
<p>E sair de cima do muro</p>
<p>N&atilde;o vou mergulhar no escuro</p>
<p>N&atilde;o vou sufocar o meu canto</p>
<p>&nbsp;</p>
<p>Pelos quatro cantos da vida</p>
<p>Procurar a paz esquecida</p>
<p>Caminhar pelos bons caminhos</p>
<p>Num jardim com flor, sem espinhos</p>
<p>&nbsp;</p>
<p>Na aurora de um novo dia</p>
<p>Hei de ter amor e algeria</p>
<p>Contruir a paz no meu ninho</p>
<p>E cantar com os passarinhos</p>
<p>&nbsp;</p>
<p>Livre, livre</p>
<p>Livre, bem livre</p>
<p>Livre, livre</p>
<p>Ser livre</p>
<p>Livre</p>
',
                'creditos' => '
<p>Arranjo, synth e programa&ccedil;&atilde;o: Ivo Senra</p>
<p>Guitarra: Lu&atilde;</p>
',
                'faixa_mp3' => '12_ser_livre.mp3',
                'faixa_ogg' => '12_ser_livre.ogg',
                'disco_id' => '34'));

        Musicas::create(
            array(
                'faixa' => 'Pau de Arara / Algodão',
                'compositor' => '(Luiz Gonzaga / Guio de Moraes)',
                'letra' => '<p>Quando eu vim do sert&atilde;o, seu mo&ccedil;o<br />
Do meu Bodoc&oacute;<br />
A maleta era o saco<br />
E o cadeado era o n&oacute;<br />
S&oacute; trazia a coragem e a cara<br />
Viajando num pau de arara<br />
Eu penei, mas aqui cheguei<br />
Eu penei, mas aqui cheguei</p></br>
<p>Trouxe o tri&acirc;ngulo<br />
Trouxe o gongu&ecirc; no matul&atilde;o<br />
Trouxe o zabumba dentro do matul&atilde;o<br />
Xote, maracatu e bai&atilde;o<br />
Tudo isso eu trouxe no meu matul&atilde;o<br />
</p>
<p>&nbsp;</p>

<p><strong>Algod&atilde;o</strong><br />
<cite>(Luiz Gonzaga / Z&eacute; Dantas)</cite></p>
<p>&nbsp;</p>
<p>Bate a enxada no ch&atilde;o<br />
Limpa o p&eacute; de algod&atilde;o<br />
Pois pra vencer a batalha<br />
&Eacute; preciso ser forte, robusto<br />
Valente ou nascer no sert&atilde;o</p>
<p>&nbsp;</p>
<p>Tem que suar muito<br />
Pra ganhar o p&atilde;o<br />
E a coisa l&aacute;<br />
N&eacute; brinquedo n&atilde;o</p>
<p>&nbsp;</p>
<p>Mas quando chega o tempo rico da colheita<br />
Trabalhador vendo a fortuna se deleita<br />
Chama a fam&iacute;lia e sai<br />
Pelo ro&ccedil;ado vai<br />
Cantando alegre ai, ai, ai, ai, ai, ai, ai<br />
Chama a fam&iacute;lia e sai<br />
Pelo ro&ccedil;ado vai<br />
Cantando alegre ai, ai, ai, ai, ai, ai, ai</p>
<p>&nbsp;</p>
<p>Sertanejo do norte<br />
Vamos plantar algod&atilde;o<br />
Ouro branco que faz nosso povo feliz<br />
Que tanto enriquece o pa&iacute;s<br />
Um produto do nosso sert&atilde;o<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '01-pau_de_arara_algodao.mp3',
                'faixa_ogg' => '01-pau_de_arara_algodao.ogg',
                'disco_id' => '35'));

        Musicas::create(
            array(
                'faixa' => 'Não Sonho Mais',
                'compositor' => '(Chico Buarque)',
                'letra' => '<p>Hoje eu sonhei contigo<br />
Tanta desdita<br />
Amor nem te digo<br />
Tanto castigo<br />
Que eu tava aflita de te contar</p>
<p>&nbsp;</p>
<p>Foi um sonho medonho<br />
Desses que &agrave;s vezes a gente sonha<br />
E baba na fronha<br />
E se urina toda<br />
E quer sufocar</p>
<p>&nbsp;</p>
<p>Meu amor vi chegando<br />
Um trem de candango<br />
Formando um bando<br />
Mas que era um bando<br />
De orangotango pra te pegar</p>
<p>&nbsp;</p>
<p>Vinha nego humilhado<br />
Vinha morto-vivo<br />
Vinha flagelado de tudo que &eacute; lado<br />
Vinha um bom motivo pra te esfolar</p>
<p>&nbsp;</p>
<p>Quanto mais tu corria, mais tu ficava<br />
Mais atolava, mais te sujava<br />
Amor, tu fedia<br />
Empesteava o ar</p>
<p>&nbsp;</p>
<p>Tu que foi t&atilde;o valente<br />
Chorou pra gente<br />
Pediu piedade, olha que maldade<br />
Me deu vontade de gargalhar</p>
<p>&nbsp;</p>
<p>Ao p&eacute; da ribanceira acabou-se a li&ccedil;a<br />
Escarrei-te inteira a tua carni&ccedil;a<br />
E tinha justi&ccedil;a nesse escarrar</p>
<p>&nbsp;</p>
<p>Te rasgamo a carca&ccedil;a<br />
Descemo a ripa<br />
Viramo as tripa<br />
Comemo os ovo<br />
Ai, aquele povo p&ocirc;s-se a cantar</p>
<p>&nbsp;</p>
<p>Foi um sonho medonho<br />
Desses que &agrave;s vezes a gente sonha<br />
E baba na fronha e se urina toda<br />
E j&aacute; n&atilde;o tem paz</p>
<p>&nbsp;</p>
<p>Pois eu sonhei contigo e ca&iacute; da cama<br />
Ai, amor, n&atilde;o briga<br />
Ai, n&atilde;o me castiga<br />
Ai, diz que me ama<br />
E eu n&atilde;o sonho mais<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '02-nao_sonho_mais.mp3',
                'faixa_ogg' => '02-nao_sonho_mais.ogg',
                'disco_id' => '35'));

        Musicas::create(
            array(
                'faixa' => 'S?plica Cearense',
                'compositor' => '(Gordurinha / Nelinho) ',
                'letra' => '<p><strong>Texto: Aboio Mudo</strong></p>
                <p><cite>(Newton Moreno)</cite></p>
                <p>&nbsp;</p>
                <p>A madrugada escorre em sil&ecirc;ncio<br />
                Trope&ccedil;a em solu&ccedil;os escritos<br />
                A dist&acirc;ncia cavalga no peito<br />
                Como um mudo tentando um grito</p>
                <p>&nbsp;</p>
                <p>Rel&oacute;gio molha os olhos do tempo<br />
                Uma tempestade cair&aacute; em segundos<br />
                No corpo abre-se uma fenda<br />
                Que vai at&eacute; o outro lado do mundo<br />
                E n&atilde;o te alcan&ccedil;a<br />
                </p>
                <p>&nbsp;</p>
                <p><strong>S&uacute;plica Cearense</strong><br />
                <cite>(Gordurinha / Nelinho)</cite></p>
                <p>&nbsp;</p>
                <p>&Oacute; Deus<br />
                Perdoe este pobre coitado<br />
                Que de joelhos rezou um bocado<br />
                Pedindo pra chuva cair sem parar</p>
                <p>&nbsp;</p>

                <p>&Oacute; Deus<br />
                Ser&aacute; que o senhor se zangou<br />
                E s&oacute; por isso o sol se arretirou<br />
                Fazendo cair toda a chuva que h&aacute;</p>
                <p>&nbsp;</p>

                <p>Senhor, eu pedi para o sol se esconder um tiquinho<br />
                Pedi pra chover, mas chover de mansinho<br />
                Pra ver se nascia uma planta no ch&atilde;o</p>
                <p>&nbsp;</p>

                <p>&Oacute; Deus<br />
                Se eu n&atilde;o rezei direito o Senhor me perdoe<br />
                Mas eu acho que a culpa foi<br />
                Desse pobre que nem sabe fazer ora&ccedil;&atilde;o</p>
                <p>&nbsp;</p>

                <p>Meu Deus<br />
                Perdoe eu encher os meus olhos de &aacute;gua<br />
                E ter-lhe pedido cheinho de m&aacute;goa<br />
                Pro sol inclemente se arretirar</p>
                <p>&nbsp;</p>

                <p>Desculpe eu pedir a toda hora pra chegar o inverno<br />
                Desculpe eu pedir para acabar com o inferno<br />
                Que sempre queimou o meu Cear&aacute;<br />
                </p>
',
                'creditos' => '',
                'faixa_mp3' => '03-suplica_cearense.mp3',
                'faixa_ogg' => '03-suplica_cearense.ogg',
                'disco_id' => '35'));

        Musicas::create(
            array(
                'faixa' => 'Assum Branco / Assum Preto',
                'compositor' => '(José Miguel Wisnik)',
                'letra' => '<p>Quando ouvi o teu cantar<br />
Me lembrei nem sei do qu&ecirc;<br />
Me senti t&atilde;o s&oacute;<br />
T&atilde;o feliz, t&atilde;o s&oacute;<br />
S&oacute; e junto de voc&ecirc;</p>
<p>&nbsp;</p>

<p>Pois o s&oacute; do meu sofrer<br />
Bateu asas e voou<br />
Para um lugar<br />
Onde o teu cantar<br />
Foi levando e me levou</p>
<p>&nbsp;</p>

<p>E onde a gra&ccedil;a de viver<br />
Como a chuva no sert&atilde;o<br />
Fez que onde for<br />
L&aacute; se encontre a flor<br />
Que s&oacute; h&aacute; no cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>

<p>Que s&oacute; h&aacute; no bem-querer<br />
E na negra escurid&atilde;o<br />
Assum preto foi<br />
Asa branca d&oacute;i<br />
Muito al&eacute;m da solid&atilde;o</p>
<p>&nbsp;</p>
<p><strong>Assum Preto</strong><br />
<cite>(Luiz Gonzaga / Humberto Teixeira)</cite></p>
<p>&nbsp;</p>
<p>Tudo em vorta &eacute; s&oacute; beleza<br />
C&eacute;u de abril e a mata em flor<br />
Mas Assum Preto, cego dos &oacute;io<br />
Num vendo a luz, ai, canta de dor<br />
Mas Assum Preto, cego dos &oacute;io<br />
Num vendo a luz, ai, canta de dor<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '04-assum_branco_assum_preto.mp3',
                'faixa_ogg' => '04-assum_branco_assum_preto.ogg',
                'disco_id' => '35'));

        Musicas::create(
            array(
                'faixa' => 'O Ciúme',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>Dorme o sol &agrave; flor do Chico, meio-dia<br />
Tudo esbarra embriagado de seu lume<br />
Dorme ponte, Pernambuco, Rio, Bahia<br />
S&oacute; vigia um ponto negro: o meu ci&uacute;me</p>
<p>&nbsp;</p>

<p>O ci&uacute;me lan&ccedil;ou sua flecha preta<br />
E se viu ferido justo na garganta<br />
Quem nem alegre, nem triste, nem poeta<br />
Entre Petrolina e Juazeiro canta</p>
<p>&nbsp;</p>
<p>Velho Chico, vens de Minas<br />
De onde o oculto do mist&eacute;rio se escondeu<br />
Sei que o levas todo em ti, n&atilde;o me ensinas<br />
E eu sou s&oacute;, eu s&oacute;, eu s&oacute;, s&oacute; eu</p>
<p>&nbsp;</p>
<p>Juazeiro, nem te lembras dessa tarde<br />
Petrolina, nem chegaste a perceber<br />
Mas, na voz que canta tudo ainda arde<br />
Tudo &eacute; perda, tudo quer buscar, cad&ecirc;</p>
<p>&nbsp;</p>
<p>Tanta gente canta, tanta gente cala<br />
Tantas almas esticadas no curtume<br />
Sobre toda estrada, sobre toda sala<br />
Paira, monstruosa, a sombra do ci&uacute;me<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '05-o_ciume.mp3',
                'faixa_ogg' => '05-o_ciume.ogg',
                'disco_id' => '35'));

        Musicas::create(
            array(
                'faixa' => 'Béradêro / Ave Maria Sertaneja ',
                'compositor' => '(Chico César)',
                'letra' => '<p>Os olhos tristes da fita<br />
Rodando no gravador<br />
Uma mo&ccedil;a cozendo roupa<br />
Com a Linha do Equador<br />
E a voz da santa dizendo<br />
&ldquo;O que &eacute; que eu t&ocirc; fazendo c&aacute; em cima desse andor?&rdquo;<br />
E a voz da santa dizendo<br />
&ldquo;O que &eacute; que eu t&ocirc; fazendo c&aacute; em cima desse andor?&rdquo;</p>
<p>&nbsp;</p>
<p><strong>Ave Maria Sertaneja</strong><br />
<cite>(J&uacute;lio Ricardo / O. de Oliveira)</cite></p>
<p>&nbsp;</p>
<p>Quando batem as seis horas<br />
De joelhos sobre o ch&atilde;o<br />
O sertanejo reza a sua ora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Ave Maria<br />
M&atilde;e de Deus, Jesus<br />
Nos d&ecirc; for&ccedil;a e coragem<br />
Pra carregar a nossa cruz</p>
<p>&nbsp;</p>
<p>Nesta hora bendita e santa<br />
Viemos suplicar<br />
Pra Virgem Imaculada<br />
Os enfermos vir curar</p>
<p>&nbsp;</p>
<p><strong>Texto: &ldquo;Ave Maria&rdquo;</strong><br />
<cite>(Newton Moreno)</cite></p>
<p>&nbsp;</p>
<p>Em voo rasante pelos tetos humanos<br />
P&aacute;ssaro-m&atilde;e com pegadas no ar<br />
Canto sempre a ninar nas noites mancas<br />
Nos dias em bruma &eacute;s um colo de plumas<br />
Asas como ber&ccedil;o, colar que &eacute; ter&ccedil;o<br />
Nos seios do luar<br />
O grito mais b&aacute;rbaro, a dor mais crua<br />
N&atilde;o passam longe de tua cura, do seu cuidar<br />
M&atilde;e-passarinha, ave materna<br />
B&ecirc;n&ccedil;&atilde;o eterna que desce do c&eacute;u por sobre minha alma<br />
Perdoa minha falta, minha impaci&ecirc;ncia<br />
Estou dentro da casca como um filhote nu<br />
Cora&ccedil;&atilde;o afoito, boca sedenta pelo teu leite<br />
Que &eacute; mel sagrado, que &eacute; seiva benta<br />
Rompe essa porta, quero olhar teus olhos<br />
Quero agarrar tuas asas para planar pela estrada<br />
Que me devolve &agrave; viagem, que me devolve a casa<br />
Tua morada</p>
<p>&nbsp;</p>
<p><strong>Ave Maria</strong><br />
<cite>(Bach / Gounod)</cite></p>
<p>&nbsp;</p>
<p>Benedicta tu in mulieribus<br />
Et benedictus<br />
Et benedictus fructos ventri<br />
Ventri tui Jesus<br />
Ave Maria<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '06-beradero.mp3',
                'faixa_ogg' => '06-beradero.ogg',
                'disco_id' => '35'));

        Musicas::create(
            array(
                'faixa' => 'Adeus, Iracema',
                'compositor' => '(Luiz Gonzaga / Zé Dantas)',
                'letra' => '<p>Navega<br />
&Oacute;, jangada, nesse mar<br />
Enfeitado de coqueiros<br />
E coberto de luar</p>
<p>&nbsp;</p>
<p>Navega<br />
No Nordeste pela praia<br />
Quero ver Itapo&atilde;<br />
Quero ver minha Atalaia</p>
<p>&nbsp;</p>
<p>Boa viagem<br />
Gog&oacute; da Ema<br />
Areia preta<br />
Pontal, Tamba&uacute;<br />
Adeus, Iracema, adeus<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '07-adeus_iracema.mp3',
                'faixa_ogg' => '07-adeus_iracema.ogg',
                'disco_id' => '35'));
        Musicas::create(
            array(
                'faixa' => 'Ciranda Praieira',
                'compositor' => '(Lenine / Paulo César Pinheiro)',
                'letra' => '<p>De toda terra em que anda<br />
O mar s&oacute; dan&ccedil;a ciranda<br />
Na ilha de Itamarac&aacute;</p>
<p>&nbsp;</p>
<p>E quando o mar cirandeia<br />
Eu cirandeio na areia<br />
Eu cirandeio no mar</p>
<p>&nbsp;</p>
<p>Achei na praia um marisco<br />
Com a letra do nome dela<br />
Do lado eu fiz um rabisco<br />
Botando a minha chancela</p>
<p>&nbsp;</p>
<p>Tirei da palho&ccedil;a uma palha<br />
Fiz um cord&atilde;o de palmeira<br />
Fiz do marisco a medalha<br />
Pro colo da cirandeira</p>
<p>&nbsp;</p>
<p>Entrei na roda da sorte<br />
Brinquei de roda com ela<br />
A mo&ccedil;a &eacute; de casa forte<br />
Eu sou de casa amarela</p>
<p>&nbsp;</p>
<p>Mas foi na casa de Lia<br />
Numa ciranda praieira<br />
Que eu vi minha estrela-guia<br />
Nos olhos da cirandeira<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '08-ciranda_praieira.mp3',
                'faixa_ogg' => '08-ciranda_praieira.ogg',
                'disco_id' => '35'));

        Musicas::create(
            array(
                'faixa' => 'Gravitacional',
                'compositor' => '(Marcelo Jeneci) </br>Participação especial: <strong>Marcelo Jeneci</strong>',
                'letra' => '<p>A saudade t&aacute; batendo muito forte<br />
Nem parece que eu te vi antes de ontem<br />
Voc&ecirc; foi e me deixou o mundo inteiro<br />
Mas agora o meu mundo &eacute; um cinzeiro</p>
<p>&nbsp;</p>
<p>Que gira em torno de um sistema solar<br />
Tal qual a terra com o sol e o luar<br />
Assim sou eu com essa m&atilde;o no meu isqueiro<br />
Com a outra no cinzeiro eu fa&ccedil;o o mundo flutuar</p>
<p>&nbsp;</p>
<p>Com o meu pulm&atilde;o respiro o ar celestial<br />
Com p&eacute;s no ch&atilde;o me sinto gravitacional<br />
Na solid&atilde;o procuro minha outra metade<br />
Que apesar da gravidade pode ouvir o meu sinal</p>
<p>&nbsp;</p>
<p>Pois o universo &eacute; como um homem abandonado<br />
Estrelas cadentes s&atilde;o e-mails e recados<br />
Que v&atilde;o correndo para dizer a quem j&aacute; foi<br />
Que a liberdade &eacute; boa e pode ser vivida a dois<br />
Que a liberdade &eacute; boa e pode ser vivida a dois<br />
Que a liberdade &eacute; boa e pode ser vivida a dois<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '09-gravitacional.mp3',
                'faixa_ogg' => '09-gravitacional.ogg',
                'disco_id' => '35'));

        Musicas::create(
            array(
                'faixa' => 'A Violeira',
                'compositor' => '(Tom Jobim / Chico Buarque)',
                'letra' => '<p>Desde menina<br />
Caprichosa e nordestina<br />
Que eu sabia<br />
A minha sina era no Rio vir morar<br />
Em Araripe topei com o chofer dum jipe<br />
Que descia pra Sergipe<br />
Pro servi&ccedil;o militar</p>
<p>&nbsp;</p>
<p>Esse maluco me largou em Pernambuco<br />
Quando um cara de trabuco<br />
Me pediu pra namorar<br />
Mais adiante<br />
Num estado interessante<br />
Um caixeiro viajante me levou pra Macap&aacute;</p>
<p>&nbsp;</p>
<p>Uma cigana revelou que a minha sorte<br />
Era ficar naquele Norte<br />
E eu n&atilde;o queria acreditar<br />
Juntei os trapos com um velho marinheiro<br />
Viajei no seu cargueiro<br />
Que encalhou no Cear&aacute;</p>
<p>&nbsp;</p>
<p>Voltei pro Crato e fui fazer artesanato<br />
De barro bom e barato<br />
Pra m&oacute; de economizar<br />
Eu era um broto e tamb&eacute;m fiz muito garoto<br />
Um mais bem feito que o outro<br />
Eles s&oacute; faltam falar</p>
<p>&nbsp;</p>
<p>Juntei a prole e me atirei no S&atilde;o Francisco<br />
Enfrentei raio, corisco<br />
Correnteza e coisa m&aacute;<br />
Inda arrumei com um artista em Pirapora<br />
Mais um filho e vim-me embora<br />
C&aacute; no Rio vim parar</p>
<p>&nbsp;</p>
<p>Ver Ipanema foi que nem beber jurema<br />
Que cen&aacute;rio de cinema<br />
Que poema &agrave; beira-mar<br />
E n&atilde;o tem tira, nem doutor, nem ziguizira<br />
Quero ver quem &eacute; que tira<br />
N&oacute;s aqui desse lugar<br />
E n&atilde;o tem tira, nem doutor, nem ziguizira<br />
Quero ver quem &eacute; que tira<br />
N&oacute;s aqui desse lugar</p>
<p>&nbsp;</p>
<p>Ser&aacute; verdade que eu cheguei nessa cidade<br />
Pra primeira autoridade<br />
Resolver me escorra&ccedil;ar<br />
Com a tralha inteira remontar a Mantiqueira<br />
At&eacute; chegar na corredeira<br />
O S&atilde;o Francisco me levar</p>
<p>&nbsp;</p>
<p>Me distrair nos bra&ccedil;os de um barqueiro sonso<br />
Despencar na Paulo Afonso<br />
No oceano me afogar<br />
Perder os filhos em Fernando de Noronha<br />
E voltar morta de vergonha<br />
Pro sert&atilde;o de Quixad&aacute;</p>
<p>&nbsp;</p>
<p>Tem cabimento<br />
Depois de tanto tormento<br />
Me casar com algum sargento<br />
E todo sonho desmanchar<br />
N&atilde;o tem carranca<br />
Nem trator, nem alavanca<br />
Eu quero ver quem &eacute; que arranca<br />
N&oacute;s aqui desse lugar<br />
N&atilde;o tem carranca<br />
Nem trator, nem alavanca<br />
Quero ver quem &eacute; que arranca<br />
N&oacute;s aqui desse lugar<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '10-a_violeira.mp3',
                'faixa_ogg' => '10-a_violeira.ogg',
                'disco_id' => '35'));

        Musicas::create(
            array(
                'faixa' => 'Braia Dengosa',
                'compositor' => '(Luiz Gonzaga / Zé Dantas)</br>
                Participação especial: <strong>Naná Vasconcelos</strong>',
                'letra' => '<p>O maracatu dan&ccedil;a negra<br />
E o fado t&atilde;o portugu&ecirc;s<br />
No Brasil se juntaram<br />
N&atilde;o sei que ano, que m&ecirc;s</p>
<p>&nbsp;</p>
<p>S&oacute; sei &eacute; que foi Pernambuco<br />
Quem fez essa braia dengosa<br />
Quem nos deu o bai&atilde;o<br />
Que &eacute; dan&ccedil;a faceira e gostosa</p>
<p>&nbsp;</p>
<p>Portugu&ecirc;s com o fado e guitarra<br />
Cantava o amor<br />
E o negro ao som do batuque<br />
Chorava de dor<br />
Com mel&ecirc;, com gongu&ecirc;<br />
Com zabumba e cantando nag&ocirc;, oi</p>
<p>&nbsp;</p>
<p>Foi a melodia de branco<br />
E o batucado em zulu<br />
Que nos o bai&atilde;o<br />
Que nasceu do fado e do maracatu<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '11-braia_dengosa.mp3',
                'faixa_ogg' => '11-braia_dengosa.ogg',
                'disco_id' => '35'));

        Musicas::create(
            array(
                'faixa' => 'Sanfona Sentida',
                'compositor' => '(Dominguinhos / Anastácia)',
                'letra' => '<p>Vem amor, vem cantar<br />
Pois meus olhos<br />
Ficam querendo chorar<br />
Deixe as m&aacute;goas pra depois<br />
O amor &eacute; mais importante a dois</p>
<p>&nbsp;</p>
<p>Chora sanfona sentida<br />
Em meu peito gemendo<br />
Vai machucando<br />
E o meu peito de amor vai morrendo</p>
<p>&nbsp;</p>
<p>Quanto mais choro<br />
Me entrego todinho ao amor<br />
O teu gemido disfar&ccedil;a<br />
Em minh&rsquo;alma essa dor<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '12-sanfona_sentida.mp3',
                'faixa_ogg' => '12-sanfona_sentida.ogg',
                'disco_id' => '35'));
        Musicas::create(
            array(
                'faixa' => 'Sete Meninas',
                'compositor' => '(Dominguinhos / Toinho Alves)',
                'letra' => '<p>S&aacute;bado de noite eu vou<br />
Vou pra casa do Z&eacute;<br />
S&aacute;bado de noite eu vou<br />
Dan&ccedil;ar o coco e arrastar o p&eacute;</p>
<p>&nbsp;</p>
<p>A beleza de Maria<br />
Ela s&oacute; tem pra dar<br />
O corpinho que ela tem<br />
Seu andar requebradinho<br />
Mexe com a gente<br />
E ela nem, nem<br />
E ela nem, nem<br />
E ela nem, nem<br />
E ela nem, nem</p>
<p>&nbsp;</p>
<p>Ela vai dan&ccedil;ar um coco<br />
E eu vou me arrumar<br />
Na umbigada eu j&aacute; ganhei seis<br />
Agora vou inteirar</p>
<p>&nbsp;</p>
<p>S&atilde;o sete meninas<br />
S&atilde;o sete ful&ocirc;<br />
S&atilde;o sete umbigada certeira que eu dou<br />
S&atilde;o sete meninas<br />
S&atilde;o sete ful&ocirc;<br />
S&atilde;o sete umbigada certeira que eu dou<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '13-sete_meninas.mp3',
                'faixa_ogg' => '13-sete_meninas.ogg',
                'disco_id' => '35'));


        Musicas::create(
            array(
                'faixa' => 'Anuncia&ccedil;&atilde;o',
                'compositor' => '(Alceu Valen&ccedil;a) cantam: <strong>Alceu Valen&ccedil;a, Elba Ramalho e Geraldo Azevedo</strong>',
                'letra' => '<p>Na bruma leve das paix&otilde;es que v&ecirc;m de dentro<br />
Tu vens chegando pra brincar no meu quintal<br />
No teu cavalo, peito nu, cabelo ao vento<br />
E o sol quarando nossas roupas no varal<br />
</p>
<p>&nbsp;</p>
<p>Tu vens, tu vens<br />
Eu j&aacute; escuto os teus sinais<br />
Tu vens, tu vens<br />
Eu j&aacute; escuto os teus sinais<br />
</p>
<p>&nbsp;</p>
<p>A voz do anjo sussurrou no meu ouvido<br />
Eu n&atilde;o duvido, j&aacute; escuto os teus sinais<br />
Que tu virias numa manh&atilde; de domingo<br />
Eu te anuncio nos sinos das catedrais<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '01-Anunciacao.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Caravana',
                'compositor' => '(Geraldo Azevedo / Alceu Valen&ccedil;a) cantam: <strong>Alceu Valen&ccedil;a, Elba Ramalho e Geraldo Azevedo</strong>',
                'letra' => '<p>Corra, n&atilde;o pare<br />
n&atilde;o pense demais<br />
Repare essas velas no cais<br />
Que a vida &eacute; cigana<br />
</p>
<p>&nbsp;</p>
<p>&eacute; caravana<br />
&eacute; pedra de gelo ao sol<br />
Degelou teus olhos t&atilde;o s&oacute;s<br />
Num mar de &aacute;gua clara<br />
</p>

',
                'creditos' => '',
                'faixa_mp3' => '02-Caravana.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Me d&aacute; um beijo',
                'compositor' => '(Alceu Valen&ccedil;a) cantam: <strong>Alceu Valen&ccedil;a, Elba Ramalho e Geraldo Azevedo</strong>',
                'letra' => '<p>Me d&aacute; um beijo, humm<br />
Vigia um beijo, humm<br />
D&ecirc; c&aacute; um beijo, humm<br />
</p>
<p>&nbsp;</p>
<p>Se eu n&atilde;o lhe amo<br />
Mara morena manhosa<br />
Mara<br />
Maravilhosa<br />
Morro e Mara morrer&aacute;<br />
</p>
<p>&nbsp;</p>
<p>
O sol despontando raiou o dia<br />
&ocirc; Mara<br />
O olhar de Mara mar azulou<br />
&ocirc; Mara<br />
Vai dan&ccedil;ar o frevo na avenida<br />
&ocirc; Mara<br />
Vai abrir janelas pro nosso amor<br />
</p>

',
                'creditos' => '',
                'faixa_mp3' => '03-Me_da_um_Beijo.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Sabi&aacute;',
                'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas) cantam: <strong>Alceu Valen&ccedil;a, Elba Ramalho e Geraldo Azevedo</strong>',
                'letra' => '<p>A todo mundo eu dou psiu (psiu, psiu, psiu)<br />
Perguntando por meu bem (psiu, psiu, psiu)<br />
Tendo o cora&ccedil;&atilde;o vazio<br />
Vivo assim a dar psiu<br />
Sabi&aacute; vem c&aacute; tamb&eacute;m<br />
</p>
<p>&nbsp;</p>
<p>Tu que andas pelo mundo (sabi&aacute;)<br />
Tu que tanto j&aacute; voou (sabi&aacute;)<br />
Tu que cantas, passarinho (sabi&aacute;)<br />
Alivia a minha dor<br />
</p>
<p>&nbsp;</p>
<p>
Tem pena d&#39;eu (sabi&aacute;)<br />
Diz, por favor (sabi&aacute;)<br />
Tu que tanto anda no mundo (sabi&aacute;)<br />
Onde anda meu amor (sabi&aacute;)<br />
</p>
<p>&nbsp;</p>
<p>Tem pena d&#39;eu (sabi&aacute;)<br />
Diz, por favor (sabi&aacute;)<br />
Tu que cantas, passarinho (sabi&aacute;)<br />
Alivia minha dor (sabi&aacute;)<br />
</p>

',
                'creditos' => '',
                'faixa_mp3' => '04-Sabia.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Papagaio do futuro',
                'compositor' => '(Alceu Valen&ccedil;a) cantam: <strong>Geraldo Azevedo e Alceu Valen&ccedil;a</strong>',
                'letra' => '<p>Estou montado no futuro indicativo<br />
J&aacute; n&atilde;o corro mais perigo<br />
Nada tenho a declarar<br />
Terno de vidro costurado a parafuso<br />
Papagaio do futuro<br />
Num para-raio ao luar<br />
</p>
<p>&nbsp;</p>
<p>Eu fumo e tusso<br />
Fuma&ccedil;a de gasolina<br />
Olha, que eu fumo e tusso<br />
Fuma&ccedil;a de gasolina<br />
</p>
<p>&nbsp;</p>
<p>Quem sabe, sabe<br />
Quem n&atilde;o sabe, sobra<br />
Cobra caminha sem ter dire&ccedil;&atilde;o<br />
Quem sabe a cabra das barbas do bode<br />
A &aacute;guia avoa sem ser avi&atilde;o<br />
Oi, sem ser avi&atilde;o<br />
</p>
<p>&nbsp;</p>
<p><strong>Coco das serras</strong></p>
<p><em>(dom&iacute;nio p&uacute;blico)</em></p>
<p>&nbsp;</p>
<p>Vamos salvar as serras<br />
Da beira do rio &agrave; Sant&rsquo;Ana<br />
Vamos salvar as serras<br />
Da beira do rio &agrave; Sant&rsquo;Ana<br />
</p>
<p>Serra do Mar<br />
Serra da Remetedeira<br />
Pra cantar eu sou Madeira<br />
E cheguei na Serra do Po&ccedil;o<br />
&Eacute; um colosso<br />
Serra dos Dois &ldquo;Zirim&atilde;o&rdquo;<br />
Brejo, Brej&atilde;o<br />
T&ocirc; na Serra da Capela<br />
O Catuaba t&aacute; doente da goela<br />
Ficou de sentinela<br />
Se ele morrer, vai pro c&eacute;u<br />
Fiz um chap&eacute;u feito da p&aacute;ia do m&iacute;o<br />
Serra da Beira do Rio<br />
Serra do Montevid&eacute;u<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '05-Papagaio_do_Futuro_Coco_das_Serras.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        
        Musicas::create(
            array(
                'faixa' => 'Mo&ccedil;a bonita',
                'compositor' => '(Geraldo Azevedo / Capinan) cantam: <strong>Geraldo Azevedo e Alceu Valen&ccedil;a</strong>',
                'letra' => '<p>Mo&ccedil;a bonita<br />
Seu corpo cheira<br />
Ao bot&atilde;o da laranjeira<br />
Eu tamb&eacute;m n&atilde;o sei se &eacute;<br />
Imagine o desatino<br />
&eacute; um cheiro de caf&eacute;<br />
Ou &eacute; s&oacute; cheiro feminino<br />
Ou &eacute; s&oacute; cheiro de mulher<br />
</p>
<p>&nbsp;</p>
<p>Mo&ccedil;a bonita<br />
Seu olho brilha<br />
Qual estrela matutina<br />
Eu tamb&eacute;m n&atilde;o sei se &eacute;<br />
Imagina a minha sina<br />
&eacute; o brilho puro da f&eacute;<br />
Ou &eacute; s&oacute; brilho feminino<br />
Ou &eacute; s&oacute; brilho de mulher<br />
</p>
<p>&nbsp;</p>
<p>Mo&ccedil;a bonita<br />
Seu beijo pode<br />
Me matar sem compaix&atilde;o<br />
Eu tamb&eacute;m n&atilde;o sei se &eacute;<br />
Ou pura imagina&ccedil;&atilde;o<br />
Pra saber, voc&ecirc; me d&ecirc;<br />
Esse beijo assassino<br />
Nos seus bra&ccedil;os de mulher<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '06-Moca_Bonita.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'S&eacute;timo c&eacute;u',
                'compositor' => '(Geraldo Azevedo / Fausto Nilo) canta: <strong>Geraldo Azevedo</strong>',
                'letra' => '<p>Eu e voc&ecirc;<br />
No mundo da lua de mel<br />
Voc&ecirc; e eu<br />
Voando no s&eacute;timo c&eacute;u, &ocirc;<br />
</p>
<p>&nbsp;</p>
<p>D&ecirc; no que d&ecirc;<br />
A gente n&atilde;o quer mais parar<br />
Aconteceu<br />
Eu quero de novo<br />
</p>
<p>&nbsp;</p>
<p>Quero voc&ecirc;<br />
Ainda que fa&ccedil;a chorar<br />
Quero voc&ecirc;<br />
Sorrindo, querendo ficar, &ocirc;<br />
</p>
<p>&nbsp;</p>
<p>D&aacute; pra sentir<br />
O teu cora&ccedil;&atilde;o bater no meu<br />
D&aacute; pra saber<br />
Aonde esse amor vai desaguar<br />
</p>
<p>&nbsp;</p>
<p>Pois quem tem amor<br />
Pode rir ou chorar<br />
Pois quem tem amor<br />
Pode rir ou chorar<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '07-Setimo_Ceu.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Dona da minha cabe&ccedil;a',
                'compositor' => '(Geraldo Azevedo / Fausto Nilo) canta: <strong>Geraldo Azevedo</strong>',
                'letra' => '<p>Dona da minha cabe&ccedil;a<br />
Ela vem como um carnaval<br />
E toda paix&atilde;o recome&ccedil;a<br />
Ela &eacute; bonita, &eacute; demais<br />
</p>
<p>&nbsp;</p>
<p>n&atilde;o h&aacute; um porto seguro<br />
Futuro tamb&eacute;m n&atilde;o h&aacute;<br />
Mas faz tanta diferen&ccedil;a<br />
Quando ela dan&ccedil;a, dan&ccedil;a<br />
</p>
<p>&nbsp;</p>
<p>Eu digo e ela n&atilde;o acredita<br />
Ela &eacute; bonita demais<br />
Eu digo e ela n&atilde;o acredita<br />
Ela &eacute; bonita, bonita<br />
</p>
<p>&nbsp;</p>
<p>Dona da minha cabe&ccedil;a<br />
Quero tanto lhe ver chegar<br />
Quero saciar minha sede<br />
Milh&otilde;es de vezes<br />
Milh&otilde;es de vezes<br />
</p>
<p>&nbsp;</p>
<p>Na for&ccedil;a dessa beleza &eacute; que eu sinto firmeza e paz<br />
Por isso nunca desapare&ccedil;a<br />
Nunca me esque&ccedil;a<br />
Eu n&atilde;o te esque&ccedil;o jamais<br />
</p>
',
                'creditos' => '',
                'faixa_mp3' => '08-Dona_da_Minha_Cabeca.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Dia branco',
                'compositor' => '(Geraldo Azevedo / Renato Rocha) canta: <strong>Geraldo Azevedo</strong>',
                'letra' => '<p>Se voc&ecirc; vier<br />
Pro que der e vier<br />
Comigo<br />
Eu lhe prometo o sol<br />
Se hoje o sol sair<br />
Ou a chuva<br />
Se a chuva cair<br />
</p>
<p>&nbsp;</p>
<p>Se voc&ecirc; vier<br />
At&eacute; onde a gente chegar<br />
Numa pra&ccedil;a na beira do mar<br />
Num peda&ccedil;o de qualquer lugar<br />
Nesse dia branco<br />
</p>
<p>&nbsp;</p>
<p>Se branco ele for<br />
Esse tanto, esse canto de amor<br />
Se voc&ecirc; quiser e vier<br />
Pro que der e vier<br />
Comigo<br />
</p>

',
                'creditos' => '',
                'faixa_mp3' => '09-Dia_Branco.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'S&oacute; depois de muito amor eu vou embora',
                'compositor' => '(Geraldo Azevedo / Abel Silva) canta: <strong>Geraldo Azevedo</strong>',
                'letra' => '<p>A beleza brotou no teu sorriso<br />
E os meus olhos colheram teu olhar<br />
Que escapava do meu bicho indeciso<br />
Entre querer fugir ou se entregar<br />
</p>
<p>&nbsp;</p>
<p>Nesses dias de tantas amarguras<br />
A esperan&ccedil;a parece uma ilus&atilde;o<br />
&eacute; que a vida sem os sonhos &eacute; t&atilde;o dura<br />
E sem amar n&atilde;o suporta um cora&ccedil;&atilde;o<br />
</p>
<p>&nbsp;</p>
<p>Eu nem ou&ccedil;o as conversas dessa gente<br />
Teu abra&ccedil;o me espera, eu vou agora<br />
&Agrave; procura de &aacute;gua fresca e cama quente<br />
E s&oacute; depois de muito amor eu vou me embora<br />
</p>

',
                'creditos' => '',
                'faixa_mp3' => '10-So_Depois_de_Muito_Amor_Eu_Vou_Embora.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Bicho de sete cabe&ccedil;as II',
                'compositor' => '(Z&eacute; Ramalho / Geraldo Azevedo / Renato Rocha) cantam: <strong>Geraldo Azevedo e Elba Ramalho</strong>',
                'letra' => '<p>n&atilde;o d&aacute; p&eacute;<br />
n&atilde;o tem p&eacute; nem cabe&ccedil;a<br />
n&atilde;o tem ningu&eacute;m que mere&ccedil;a<br />
n&atilde;o tem cora&ccedil;&atilde;o que esque&ccedil;a<br />
n&atilde;o tem jeito mesmo<br />
n&atilde;o tem d&oacute; no peito<br />
n&atilde;o tem nem talvez<br />
Ter feito o que voc&ecirc; me fez<br />
Desapare&ccedil;a<br />
Cres&ccedil;a e desapare&ccedil;a<br />
</p>
<p>&nbsp;</p>
<p>n&atilde;o tem d&oacute; no peito<br />
n&atilde;o tem jeito<br />
n&atilde;o tem cora&ccedil;&atilde;o que esque&ccedil;a<br />
n&atilde;o tem ningu&eacute;m que mere&ccedil;a<br />
n&atilde;o tem p&eacute;, n&atilde;o tem cabe&ccedil;a<br />
n&atilde;o d&aacute; p&eacute; n&atilde;o &eacute; direito<br />
n&atilde;o foi nada<br />
Eu n&atilde;o fiz nada disso<br />
E voc&ecirc; fez um bicho de sete cabe&ccedil;as<br />
Bicho de sete cabe&ccedil;as<br />
</p>


',
                'creditos' => '',
                'faixa_mp3' => '11-Bicho_de_Sete_Cabe&ccedil;as.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Chorando e cantando',
                'compositor' => '(Geraldo Azevedo / Fausto Nilo) cantam: <strong>Geraldo Azevedo e Elba Ramalho</strong>',
                'letra' => '<p>Quando fevereiro chegar<br />
Saudade j&aacute; n&atilde;o mata a gente<br />
A chama continua<br />
No ar<br />
O fogo vai deixar semente<br />
A gente ri, a gente chora<br />
Ai, ai, ai, ai, a gente chora<br />
Fazendo a noite parecer um dia<br />
Faz mais<br />
Depois faz acordar cantando<br />
Pra fazer e acontecer<br />
Verdades e mentiras<br />
Faz crer<br />
Faz desacreditar de tudo<br />
E depois<br />
Depois amor, &ocirc;, &ocirc;, &ocirc;, &ocirc;<br />
</p>
<p>&nbsp;</p>
<p>Ningu&eacute;m, ningu&eacute;m ver&aacute;<br />
O que eu sonhei<br />
S&oacute; voc&ecirc;, meu amor<br />
Ningu&eacute;m ver&aacute; o sonho<br />
Que eu sonhei<br />
</p>
<p>&nbsp;</p>
<p>Um sorriso quando acordar<br />
Pintado pelo sol nascente<br />
Eu vou te procurar<br />
Na luz<br />
De cada olhar mais diferente<br />
Tua chama me ilumina<br />
Me faz<br />
Virar um astro incandescente<br />
Teu amor faz cometer loucuras<br />
Faz mais<br />
Depois faz acordar chorando<br />
Pra fazer e acontecer<br />
Verdades e mentiras<br />
Faz crer<br />
</p>
<p>&nbsp;</p>
<p>Faz desacreditar de tudo<br />
E depois<br />
Depois amor, amor, amor<br />
</p>


',
                'creditos' => '',
                'faixa_mp3' => '12-Chorando_e_Cantando.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'O princ&iacute;pio do prazer',
                'compositor' => '(Geraldo Azevedo) cantam: <strong>Elba Ramalho e Geraldo Azevedo</strong>',
                'letra' => '<p>Juntos vamos esquecer<br />
Tudo que doeu em n&oacute;s<br />
Nada vale tanto pra rever<br />
Tempo que ficamos s&oacute;s<br />
Faz a tua luz brilhar<br />
Para iluminar a nossa paz<br />
Meu cora&ccedil;&atilde;o me diz<br />
Fundamental &eacute; ser feliz<br />
Meu cora&ccedil;&atilde;o me diz<br />
Fundamental &eacute; ser feliz<br />
</p>
<p>&nbsp;</p>
<p>Juntos vamos acordar o amor<br />
Car&iacute;cias, can&ccedil;&otilde;es<br />
Deixa entrar o sol da manh&atilde;<br />
A cor do som<br />
Eu com voc&ecirc; sou muito mais<br />
O princ&iacute;pio do prazer<br />
Sonho que o tempo n&atilde;o desfaz<br />
Meu cora&ccedil;&atilde;o me diz<br />
Fundamental &eacute; ser feliz<br />
Meu cora&ccedil;&atilde;o me diz<br />
Fundamental &eacute; ser feliz<br />
</p>



',
                'creditos' => '',
                'faixa_mp3' => '13-Principio_do_Prazer.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Ai que saudade d&#39;oc&ecirc;',
                'compositor' => '(Vital Farias) canta: <strong>Elba Ramalho</strong>',
                'letra' => '<p>N&atilde;o se admire se um dia<br />
Um beija-flor invadir<br />
A porta da tua casa<br />
Te der um beijo e partir<br />
Fui eu que mandei o beijo<br />
Que &eacute; pra matar meu desejo<br />
Faz tempo que eu n&atilde;o te vejo<br />
Ai que saudade d&#39;oc&ecirc;<br />
</p>
<p>&nbsp;</p>
<p>Se um dia oc&ecirc; se lembrar<br />
Escreva uma carta pra mim<br />
Bote logo no correio<br />
Com frases dizendo assim<br />
&ldquo;Faz tempo que eu n&atilde;o te vejo<br />
Quero matar meu desejo<br />
Te mando um monte de beijo<br />
Ai que saudade sem fim&rdquo;<br />
</p>
<p>&nbsp;</p>
<p>E se quiser recordar<br />
Aquele nosso namoro<br />
Quando eu ia viajar<br />
Voc&ecirc; ca&iacute;a no choro<br />
Eu chorando pela estrada<br />
O que &eacute; que eu posso fazer?<br />
Trabalhar &eacute; minha sina<br />
Eu gosto mesmo &eacute; d&#39;oc&ecirc;<br />
</p>



',
                'creditos' => '',
                'faixa_mp3' => '14-Ai_Que_Saudade_Doce.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Ch&atilde;o de giz',
                'compositor' => '(Z&eacute; Ramalho) canta: <strong>Elba Ramalho</strong>',
                'letra' => '<p>Eu des&ccedil;o dessa solid&atilde;o<br />
Espalho coisas sobre um ch&atilde;o de giz<br />
H&aacute meros devaneios tolos a me torturar<br />
Fotografias recortadas em jornais de folhas ami&uacute;de<br />
Eu vou te jogar num pano de guardar confetes<br />
Eu vou te jogar num pano de guardar confetes<br />
</p>
<p>&nbsp;</p>
<p>Disparo balas de canh&atilde;o<br />
&Eacute; in&uacute;til pois existe um Gr&atilde;o-Vizir<br />
H&aacute tantas violetas velhas sem um colibri<br />
Queria usar, quem sabe, uma camisa de for&ccedil;a<br />
Ou de V&ecirc;nus<br />
Mas n&atilde;o vou gozar de n&oacute;s apenas um cigarro<br />
Nem vou lhe beijar gastando assim o meu batom<br />
</p>
<p>&nbsp;</p>
<p>Agora pego um caminh&atilde;o<br />
Na lona, vou a nocaute outra vez<br />
Pra sempre fui acorrentada no seu calcanhar<br />
Meus vinte anos de boy, that&#39;s over baby!<br />
Freud explica<br />
N&atilde;o vou me sujar fumando apenas um cigarro<br />
Nem vou te beijar gastando assim o meu batom<br />
</p>
<p>&nbsp;</p>
<p>Quanto ao pano dos confetes<br />
J&aacute; passou meu carnaval<br />
Isso explica porque o sexo &eacute; assunto popular<br />
No mais, estou indo embora<br />
No mais, estou indo embora<br />
No mais, embora<br />
No mais, estou indo embora, no mais...<br />
</p>



',
                'creditos' => '',
                'faixa_mp3' => '15-Chao_de_Giz.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));

        Musicas::create(
            array(
                'faixa' => 'Sangrando',
                'compositor' => '(Gonzaguinha) canta: <strong>Elba Ramalho</strong>',
                'letra' => '<p>Quando eu soltar a minha voz<br />
  Por favor, entenda<br />
  Que palavra por palavra<br />
  Eis aqui uma pessoa se entregando</p>
<p>&nbsp;</p>
<p>Cora&ccedil;&atilde;o na boca<br />
  Peito aberto<br />Vou sangrando<br />
  S&atilde;o as lutas dessa nossa vida<br />
  Que eu estou cantando</p>
<p>&nbsp;</p>
<p>Quando eu abrir minha garganta<br />
  Essa for&ccedil;a tanta<br />
  Tudo que voc&ecirc; ouvir<br />
  Esteja certa<br />
  Estarei vivendo</p>
<p>&nbsp;</p>
<p>Veja o brilho nos meus olhos<br />
  E o tremor nas minhas m&atilde;os<br />
  E o meu corpo t&atilde;o suado<br />
  Transbordando toda a ra&ccedil;a e emo&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>E se eu chorar<br />
  E o sal molhar o meu sorriso<br />
  N&atilde;o se espante, cante<br />
  Que o teu canto &eacute; a minha for&ccedil;a pra cantar</p>
  <p>&nbsp;</p>
  <p>Quando eu soltar a minha voz<br />
  Por favor, entenda<br />
  &Eacute; apenas o meu jeito de viver<br />
  O que &eacute; amar</p>



',
                'creditos' => '',
                'faixa_mp3' => '01-Sangrando.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Na base da chinela',
                'compositor' => '(Jackson do Pandeiro / Rosil Cavalcanti) canta: <strong>Elba Ramalho</strong>',
                'letra' => '<p>Eu fui dan&ccedil;ar um baile na casa da Gabriela<br />
  Nunca vi coisa t&atilde;o boa foi na base da chinela<br />
  Eu fui dan&ccedil;ar um baile na casa da Gabriela<br />
  Nunca vi coisa t&atilde;o boa foi na base da chinela</p>
<p>&nbsp;</p>
<p>O sujeito ia chegando, tirava logo o sapato<br />
  Se tivesse de botina, sola grossa, bico chato<br />
  Entrava pra dan&ccedil;ar no baile da Gabriela<br />
  Tirando meia e sapato, cal&ccedil;ando um par de chinela</p>
<p>&nbsp;</p>
<p>O baile estava animado s&oacute; na base da chinela<br />
  Toda a turma disputava dan&ccedil;ar com a Gabriela<br />
  Requebrar naquela base no sal&atilde;o s&oacute; tinha ela<br />
  O camarada ria gostando da base dela<br />
  Jogaram no sal&atilde;o pimenta bem machucada<br />
  O baile da Gabriela acabou com chinelada</p>
<p>&nbsp;</p>
  <p><strong>Qui nem jil&oacute;</strong></p>
<p><em>(Luiz Gonzaga / Humberto Teixeira)</em></p>
<p>&nbsp;</p>
<p>Se a gente lembra s&oacute; por lembrar<br />
  Do amor que a gente um dia perdeu<br />
  Saudade int&eacute; que assim &eacute; bom<br />
  Pro cabra se convencer<br />
  Que &eacute; feliz sem saber<br />
  Pois n&atilde;o sofreu</p>
<p>&nbsp;</p>
<p>Por&eacute;m se a gente vive a sonhar<br />
  Com algu&eacute;m que se deseja rever<br />
  Saudade, entonce, a&iacute; &eacute; ruim<br />
  Eu tiro isso por mim<br />
  Que vivo doido a sofrer</p>
<p>&nbsp;</p>
<p>Ai, quem me dera voltar<br />
  Pros bra&ccedil;os do meu xod&oacute;<br />
  Saudade assim faz roer<br />
  E amarga qui nem jil&oacute;<br />
  Mas ningu&eacute;m pode dizer<br />
  Que me viu triste a chorar<br />
  Saudade, o meu rem&eacute;dio &eacute; cantar<br />
  Saudade, o meu rem&eacute;dio &eacute; cantar</p>
<p>&nbsp;</p>
<p><strong>Eu s&oacute; quero um xod&oacute;</strong></p>
<p><em>(Dominguinhos / Anast&aacute;cia)</em></p>
<p>&nbsp;</p>
<p>Que falta eu sinto de um bem<br />
  Que falta me faz um xod&oacute;<br />
  Mas como eu n&atilde;o tenho ningu&eacute;m<br />
  Eu levo a vida assim t&atilde;o s&oacute;</p>
<p>&nbsp;</p>
<p>Eu s&oacute; quero um amor<br />
  Que acabe o meu sofrer<br />
  Um xod&oacute; pra mim<br />
  Do meu jeito assim<br />
  Que alegre o meu viver</p>



',
                'creditos' => '',
                'faixa_mp3' => '02-Na_Base_da_Chinela_Qui_Nem_Gilo_ Eu_So_Quero_um_Xodo.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Ciranda da rosa vermelha',
                'compositor' => '(folclore / adapta&ccedil;&atilde;o: Alceu Valen&ccedil;a) cantam: <strong>Elba Ramalho e Alceu Valen&ccedil;a</strong>',
                'letra' => '<p>Teu beijo doce<br />
  Tem sabor do mel da cana<br />
  &Ocirc;, Mariana<br />
  Maria, meu doce amor<br />
  Sou tua cama, teu engenho, teu moinho<br />
  Mas sou feito um passarinho<br />
  Que se chama beija-flor<br />
  Sou tua cama, teu engenho, teu moinho<br />
  Mas sou feito um passarinho<br />
  Que se chama beija-flor</p>
<p>&nbsp;</p>
<p>Se bato asas<br />
  Pra beijar as outras flores<br />
  Tu sente dores<br />
  Um ci&uacute;me e um calor<br />
  Que toma o peito, o teu corpo<br />
  E invade a alma<br />
  S&oacute; seu beija-flor lhe acalma<br />
  Serei sempre o seu amor<br />
  Que toma o peito, o teu corpo<br />
  E invade a alma<br />
  S&oacute; seu beija-flor lhe acalma<br />
  Serei sempre o seu amor</p>
<p>&nbsp;</p>
<p>A rosa vermelha<br />
  &Eacute; do bem querer<br />
  A rosa vermelha e branca<br />
  Hei de amar at&eacute; morrer</p>
<p>&nbsp;</p>
<p>Teu beijo doce tem sabor do mel da cana<br />
  Sou tua ama, tua escrava, teu amor<br />
  Sou tua cama, teu engenho, teu moinho<br />
  &Eacute;s feito um passarinho<br />
  Que se chama beija-flor<br />
  Sou tua cama, teu engenho, teu moinho<br />
  &Eacute;s feito um passarinho<br />
  Que se chama beija-flor</p>
<p>&nbsp;</p>
<p>Sou rosa vermelha<br />
  Ai, meu bem querer<br />
  Beija-flor, sou tua rosa<br />
  Hei de amar-te at&eacute; morrer</p>
<p>&nbsp;</p>
<p>Quando tu voas pra beijar as outras flores<br />
  Sinto dores, ci&uacute;me, calor<br />
  Que toma o peito, meu corpo<br />
  E invade a alma<br />
  S&oacute; meu beija-flor acalma<br />
  Tua escrava, meu senhor<br />
  Que toma o peito, o meu corpo<br />
  E invade a alma<br />
  S&oacute; meu beija-flor acalma<br />
  Tua escrava, meu senhor</p>
',
                'creditos' => '',
                'faixa_mp3' => '03-Ciranda_da_Rosa_Vermelha.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Tesoura do desejo',
                'compositor' => '(Alceu Valen&ccedil;a) cantam: <strong>Alceu Valen&ccedil;a e Elba Ramalho</strong>',
                'letra' => '<p>Voc&ecirc; atravessando aquela rua vestida de negro<br />
  E eu lhe esperando em frente a um certo bar, Leblon<br />
  Voc&ecirc; se aproximando e eu morrendo de medo<br />
  Ali, bem mesmo em frente a um certo bar, Leblon</p>
<p>&nbsp;</p>
<p>Quando eu atravessava aquela rua morria de medo<br />
  De ver o teu sorriso e come&ccedil;ar um velho sonho bom<br />
  E o sonho, fatalmente, viraria pesadelo<br />
  Ali, bem mesmo em frente a um certo bar, Leblon</p>
<p>&nbsp;</p>
<p>- Vamos entrar<br />- N&atilde;o tenho tempo<br />
  - O que &eacute; que houve?<br />
  - O que &eacute; que h&aacute;?<br />
  - O que &eacute; que houve, meu amor<br />
  Voc&ecirc; cortou os seus cabelos?<br />
  - Foi a tesoura do desejo<br />
  Desejo mesmo de mudar</p>
',
                'creditos' => '',
                'faixa_mp3' => '04-Tesoura_do_Desejo.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Flor de tangerina',
                'compositor' => '(Alceu Valen&ccedil;a) cantam: <strong>Elba Ramalho e Alceu Valen&ccedil;a</strong>',
                'letra' => '<p>Hoje eu sonhei que ela voltava<br />
  E vinha muito mais que linda<br />
  &Agrave; meia luz me acordava<br />
  Cheirando a flor de tangerina</p>
<p>&nbsp;</p>
<p>Eu lhe amava e mergulhava<br />
  No seu olhar de azul piscina<br />
  E docemente me afogava<br />
  Em suas &aacute;guas cristalinas</p>
<p>&nbsp;</p>
<p>Depois sonhei que ela voltava<br />
  E dessa vez bem mais que linda<br />
  &Agrave; meia luz me afagava<br />
  E sua pele era t&atilde;o fina</p>
<p>&nbsp;</p>
<p>Quando acordei meu bem chegava<br />
  N&atilde;o sei se ela me quer ainda<br />
  Chegar assim de madrugada<br />
  Desconfiada e meio t&iacute;mida</p>
',
                'creditos' => '',
                'faixa_mp3' => '05-Flor_de_Tangerina.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'La belle de jour',
                'compositor' => '(Alceu Valen&ccedil;a) canta: <strong>Alceu Valen&ccedil;a</strong>',
                'letra' => '<p>Eu lembro da mo?a bonita<br />
  Da praia de Boa Viagem<br />
  E a mo?a no meio da tarde<br />
  De um domingo azul</p>
<p>?</p>
<p>Azul era belle de jour<br />
  Era a bela da tarde<br />
  Seus olhos azuis como a tarde<br />
  Na tarde de um domingo azul<br />
  La belle de jour</p>
<p>?</p>
<p>Belle de jour, ?, ?<br />
  Belle de jour<br />
  La belle de jour<br />
  Era a mo?a mais linda<br />
  De toda a cidade<br />
  E foi justamente pra ela<br />
  Que eu escrevi o meu primeiro blues</p>
<p>?</p>
<p>Mas belle de jour<br />
  No azul viajava<br />
  Seus olhos azuis como a tarde<br />
  Na tarde de um domingo azul<br />
  La belle de jour</p>
<p>?</p>
<p>?</p>
<p><strong>Girassol</strong><br />
  <em>(Alceu Valen?a)</em></p>
<p>?</p>
<p>Mar e sol<br />
  Gira, gira, gira... girassol<br />
  Mar e sol<br />
  Gira, gira, gira... girassol</p>
<p>?</p>
<p>Um girassol nos teus cabelos<br />
  Batom vermelho, girassol<br />
  ?, morena, flor do desejo<br />
  Ah, teu cheiro em meu len?ol</p>
<p>?</p>
<p>Des?o pra rua, sinto saudade<br />
  Gata selvagem, sou ca?ador<br />
  Morena flor do desejo<br />
  Ah, teu cheiro matador</p>
',
                'creditos' => '',
                'faixa_mp3' => '06-La_Belle_de_Jour_Girassol.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Cora&ccedil;&atilde;o bobo',
                'compositor' => '(Alceu Valen&ccedil;a) canta: <strong>Alceu Valen&ccedil;a</strong>',
                'letra' => '<p>Meu cora&ccedil;&atilde;o t&aacute; batendo<br />
  Como quem diz n&atilde;o tem jeito<br />
  Zabumba bumba esquisito<br />
  Batendo dentro do peito</p>
<p>&nbsp;&nbsp;</p>
<p>Teu cora&ccedil;&atilde;o t&aacute; batendo<br />
  Como quem diz n&atilde;o tem jeito<br />
  O cora&ccedil;&atilde;o dos aflitos<br />
  Pipoca dentro do peito<br />
  O cora&ccedil;&atilde;o dos aflitos<br />
  Pipoca dentro do peito</p>
<p>&nbsp;</p>
<p>Cora&ccedil;&atilde;o bobo, cora&ccedil;&atilde;o bola<br />
  Cora&ccedil;&atilde;o bal&atilde;o, cora&ccedil;&atilde;o S&atilde;o Jo&atilde;o<br />
  A gente se ilude dizendo<br />
  J&aacute; n&atilde;o d&aacute; mais cora&ccedil;&atilde;o</p>
',
                'creditos' => '',
                'faixa_mp3' => '07-Coracao_Bobo.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Cabelo no pente',
                'compositor' => '(Alceu Valen&ccedil;a / Vicente Barreto) canta: <strong>Alceu Valen&ccedil;a</strong>',
                'letra' => '<p>Ai, ai, ai, ai<br />
  Oi, oi, oi, &ocirc;<br />
  Ai, ai, ah<br />
  Eu tamb&eacute;m quero, quero pisar na ful&ocirc;</p>
<p>&nbsp;</p>
<p>Andei pisando pelas ruas do passado<br />
  Criando calo no meu p&eacute; caminhador<br />
  Dan&ccedil;ando xote, tropecei com a harmonia<br />
  Na melodia do &ldquo;Pisa na Ful&ocirc;&rdquo;</p>
<p>&nbsp;</p>
<p>Andei passando como as &aacute;guas, como o vento<br />
  Como todo sofrimento que enfim me calejou<br />
  Terei futuro deslizando no presente<br />
  Como cabelo no pente que penteia meu amor<br />
  Feito cabelo no pente que penteia meu amor<br />
  Como cabelo no pente que penteia meu amor</p>
',
                'creditos' => '',
                'faixa_mp3' => '08-Cabelo_no_Pente.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Tropicana',
                'compositor' => '(Alceu Valen&ccedil;a / Vicente Barreto) canta: <strong>Alceu Valen&ccedil;a</strong>',
                'letra' => '<p>Da manga rosa<br />
  Quero gosto e o sumo<br />
  Mel&atilde;o maduro, sapoti, ju&aacute;<br />
  Jabuticaba, teu olhar noturno<br />
  Beijo travoso de umbu-caj&aacute;</p>
<p>&nbsp;</p>
<p>Pele macia<br />
  &Eacute; carne de caju<br />
  Saliva doce<br />
  Doce mel<br />
  Mel de uru&ccedil;u</p>
<p>&nbsp;</p>
<p>Linda morena<br />
  Fruta de vez, temporana<br />
  Caldo de cana caiana<br />
  Vou te desfrutar<br />
  Linda morena<br />
  Fruta de vez, temporana<br />
  Caldo de cana caiana<br />
  Vem me desfrutar</p>
<p>&nbsp;</p>
<p>Morena tropicana<br />
  Eu quero teu sabor<br />
  Oi, oi, oi, &ocirc;</p>
',
                'creditos' => '',
                'faixa_mp3' => '09-Tropicana.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'T&aacute;xi lunar',
                'compositor' => '(Geraldo Azevedo / Z&eacute; Ramalho / Alceu Valen&ccedil;a) cantam: <strong>Alceu Valen&ccedil;a, Elba Ramalho e Geraldo Azevedo</strong>',
                'letra' => '<p>Pela sua cabeleira, vermelha<br />
  Pelos raios desse sol lil&aacute;s<br />
  Pelo fogo do seu corpo, centelha<br />
  Belos raios desse sol</p>
<p>&nbsp;</p>
<p>Apenas apanhei na beira-mar<br />
  Um t&aacute;xi pra esta&ccedil;&atilde;o lunar<br />
  Apenas apanhei na beira-mar<br />
  Um t&aacute;xi pra esta&ccedil;&atilde;o lunar</p>
<p>&nbsp;</p>
<p>Bela linda criatura, bonita<br />
  Nem menina, nem mulher<br />
  Tem espelho no seu rosto de neve<br />
  Nem menina, nem mulher</p>
<p>&nbsp;</p>
<p>Ela me deu o seu amor, eu tomei<br />
  No dia dezesseis de maio, viajei<br />
  Espa&ccedil;onave atropelado, procurei<br />
  Seu meu amor aperreado</p>
',
                'creditos' => '',
                'faixa_mp3' => '10-Taxi_Lunar.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Ciranda da trai&ccedil;&atilde;o',
                'compositor' => '(Alceu Valen&ccedil;a) cantam: <strong>Alceu Valen&ccedil;a, Elba Ramalho e Geraldo Azevedo</strong>',
                'letra' => '<p>O amor tem seus caprichos<br />
  Trai&ccedil;oeiro<br />
  &Eacute; da paz e &eacute; da guerra<br />
  Trai&ccedil;oeiro<br />
  &Eacute; da tr&eacute;gua e do conflito<br />
  Trai&ccedil;oeiro<br />
  &Eacute; ver&atilde;o e primavera<br />
  Trai&ccedil;oeiro</p>
<p>&nbsp;</p>
<p>Um dia sorriso e festa<br />
  Trai&ccedil;oeiro<br />
  No outro gelado e frio<br />
  Trai&ccedil;oeiro<br />
  E deixa a alma deserta<br />
  Trai&ccedil;oeiro<br />
  Na solid&atilde;o do vazio</p>
<p>&nbsp;</p>
<p>&Eacute; no balan&ccedil;o das ondas<br />
  No vai e vem da paix&atilde;o<br />
  Que eu canto essa ciranda<br />
  De ci&uacute;me e trai&ccedil;&atilde;o</p>
',
                'creditos' => '',
                'faixa_mp3' => '11-Ciranda_da_Traicao.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Pelas ruas que andei',
                'compositor' => '(Alceu Valen&ccedil;a / Vicente Barreto) cantam: <strong>Alceu Valen&ccedil;a, Elba Ramalho e Geraldo Azevedo</strong>',
                'letra' => '<p>Na Madalena<br />
  Revi teu nome<br />
  Na Boa Vista<br />
  Quis te encontrar<br />
  Rua do Sol, da Boa Hora<br />
  Rua da Aurora<br />
  Vou caminhar</p>
<p>&nbsp;</p>
<p>Rua das Ninfas<br />
  Matriz, Saudade<br />
  Da Soledade de quem passou<br />
  Rua Benfica, Boa Viagem<br />
  Na Piedade tanta dor</p>
<p>&nbsp;</p>
<p>Pelas ruas que andei<br />
  Procurei, procurei, procurei<br />
  Te encontrar<br />
  Pelas ruas que andei<br />
  Procurei, procurei, procurei<br />
  Te encontrar</p>
',
                'creditos' => '',
                'faixa_mp3' => '12-Pelas_Ruas_Que_Andei.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Banho de cheiro',
                'compositor' => '(Carlos Fernando) cantam: <strong>Alceu Valen&ccedil;a, Elba Ramalho e Geraldo Azevedo</strong>',
                'letra' => '<p>Eu quero um banho de cheiro<br />
  Eu quero um banho de lua<br />
  Eu quero navegar<br />
  Eu quero uma menina<br />
  Que me ensine noite e dia<br />
  O valor do b&ecirc;-a-b&aacute;</p>
<p>&nbsp;</p>
<p>O b&ecirc;-a-b&aacute; dos teus olhos<br />
  Morena bonita da Boca do Rio<br />
  O b&ecirc;-a-b&aacute; das narinas do rei<br />
  O b&ecirc;-a-b&aacute; da Bahia<br />
  Sangrando alegria, magia, magia<br />
  Nos Filhos de Gandhi</p>
<p>&nbsp;</p>
<p>O b&ecirc;-a-b&aacute; dos baianos<br />
  Que charme bonito, foi o santo que deu<br />
  O b&ecirc;-a-b&aacute; do Senhor do Bonfim<br />
  O b&ecirc;-a-b&aacute; do sert&atilde;o<br />
  Sem chover, sem colher<br />
  Sem comer, sem lazer<br />
  O b&ecirc;-a-b&aacute; do Brasil</p>
',
                'creditos' => '',
                'faixa_mp3' => '13-Banho_de_Cheiro.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));
        Musicas::create(
            array(
                'faixa' => 'Frevo Mulher',
                'compositor' => '(Z&eacute; Ramalho) cantam: <strong>Alceu Valen&ccedil;a, Elba Ramalho e Geraldo Azevedo</strong>',
                'letra' => '<p>Quantos aqui ouvem os olhos eram de f&eacute;<br />
  Quantos elementos amam aquela mulher<br />
  Quantos homens eram inverno, outros ver&atilde;o<br />
  Outonos caindo secos no solo da minha m&atilde;o</p>
<p>&nbsp;</p>
<p>Gemeram entre cabe&ccedil;as a ponta do espor&atilde;o<br />
  A folha do n&atilde;o me toque e o medo da solid&atilde;o<br />
  Veneno meu companheiro desatado cantador<br />
  E desemboca no primeiro a&ccedil;ude do meu amor</p>
<p>&nbsp;</p>
<p>&Eacute; quando o tempo sacode a cabeleira<br />
  A tran&ccedil;a toda vermelha<br />
  Um olho cego vagueia<br />
  Procurando por um</p>
',
                'creditos' => '',
                'faixa_mp3' => '14-Frevo_Mulher.mp3',
                'faixa_ogg' => '',
                'disco_id' => '36'));






        Musicas::create(
            array(
                'faixa' => 'O homem',
                'compositor' => '(Roberto Carlos / Erasmo Carlos)',
                'letra' => '<p>Um certo dia um homem esteve aqui</p>
<p>Tinha o olhar mais belo que j&aacute; existiu</p>
<p>Tinha no cantar uma ora&ccedil;&atilde;o</p>
<p>No falar a mais linda can&ccedil;&atilde;o que j&aacute; se ouviu</p>
<p>&nbsp;</p>
<p>Sua voz falava s&oacute; de amor</p>
<p>Todo gesto seu era de amor</p>
<p>E paz</p>
<p>Ele trazia no cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Ele pelos campos caminhou</p>
<p>Subiu as montanhas e falou do amor maior</p>
<p>Fez a luz brilhar na escurid&atilde;o</p>
<p>O sol nascer em cada cora&ccedil;&atilde;o que compreendeu</p>
<p>&nbsp;</p>
<p>Que al&eacute;m da vida que se tem</p>
<p>Existe uma outra vida al&eacute;m</p>
<p>E assim o renascer</p>
<p>Morrer n&atilde;o &eacute; o fim</p>
<p>&nbsp;</p>
<p>Tudo que aqui Ele deixou</p>
<p>N&atilde;o passou e vai sempre existir</p>
<p>Flores nos lugares que pisou</p>
<p>E o caminho certo pra seguir</p>
<p>&nbsp;</p>
<p>Eu sei que Ele um dia vai voltar</p>
<p>E nos mesmos campos procurar o que plantou</p>
<p>E colher o que de bom nasceu</p>
<p>Chorar pela semente que morreu sem florescer</p>
<p>&nbsp;</p>
<p>Mas ainda &eacute; tempo de plantar</p>
<p>Fazer dentro de si a flor do bem crescer</p>
<p>Pra lhe entregar</p>
<p>Quando Ele aqui chegar</p>
',
                'creditos' => '<p>Arranjo, piano, programa&ccedil;&atilde;o de cordas, sopros, percuss&atilde;o e efeitos: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o e guitarra: Leo Amuedo</p>
<p>Baixo: Paulo C&eacute;sar Barros</p>
<p>Bateria: Camilo Mariano</p>
<p>Coro: Alessandro Rocha, Thamires Lima, Walace Ara&uacute;jo, Mariah, Lilian Santiago e Vin&iacute;cius Rosa</p>
',
                'faixa_mp3' => '01-O_homem.mp3',
                'faixa_ogg' => '',
                'disco_id' => '37'));
        Musicas::create(
            array(
                'faixa' => 'N&atilde;o passar&aacute;s',
                'compositor' => '(Z&eacute; Am&eacute;rico / Salgado Maranh&atilde;o)',
                'letra' => '<p>Vim cantar sobre o teu nome, Pai</p>
<p>Vim ser menos no teu mais</p>
<p>Passa o dia e passa a noite</p>
<p>E tu n&atilde;o passar&aacute;s</p>
<p>&nbsp;</p>
<p>Nenhum caminho &eacute; s&oacute; de flores</p>
<p>Nenhum deserto &eacute; s&oacute; de areia</p>
<p>Deixa o teu sangue ungir meu jardim</p>
<p>Deixa teu sol brilhar na minha veia</p>
<p>&nbsp;</p>
<p>Tenho gritado o teu nome</p>
<p>Onde n&atilde;o existe cura</p>
<p>Sonhado o rebento</p>
<p>De um reino al&eacute;m da loucura</p>
<p>&nbsp;</p>
<p>Vim chorar sobre os teus p&eacute;s, oh Pai</p>
<p>Feito um rio sobre os cristais</p>
<p>Passa a vida e passa a dor, meu Pai</p>
<p>E tu n&atilde;o passar&aacute;s</p>
',
                'creditos' => '<p>Arranjo, piano, programa&ccedil;&atilde;o de bateria e percuss&atilde;o: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o e guitarra: Leo Amuedo</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Acordeom: Mestrinho</p>
<p>Coro: Alessandro Rocha, Thamires Lima, Walace Ara&uacute;jo, Mariah, Lilian Santiago e Vin&iacute;cius Rocha</p>
',
                'faixa_mp3' => '02-Nao_passaras.mp3',
                'faixa_ogg' => '',
                'disco_id' => '37'));


        Musicas::create(
            array(
                'faixa' => 'Estrela luminosa',
                'compositor' => '(Altay Veloso)',
                'letra' => '<p>Maria cheia de ra&ccedil;a</p>
<p>N&atilde;o teve de gra&ccedil;a o que concebeu</p>
<p>Quando algu&eacute;m &eacute; um rio que gera um oceano</p>
<p>N&atilde;o h&aacute; nenhum tirano que arranque o que &eacute; seu</p>
<p>&nbsp;</p>
<p>Ventre quando se transforma em um santu&aacute;rio</p>
<p>&Eacute; revolucion&aacute;rio a meu modo de ver</p>
<p>Ningu&eacute;m vai do parto ao Santo Sud&aacute;rio</p>
<p>Sem saber por qu&ecirc;</p>
<p>&nbsp;</p>
<p>Tem que ter a luz da humildade</p>
<p>Cumplicidade, amor e revelia</p>
<p>Ningu&eacute;m se torna a m&atilde;e da cristandade</p>
<p>Sem a santa ousadia</p>
<p>&nbsp;</p>
<p>Olhos que velaram pelo sono de Adonai</p>
<p>Clareai o mundo, m&atilde;e, iluminai</p>
<p>Cada vez que um de n&oacute;s</p>
<p>Se v&ecirc; tentado pela insana covardia</p>
<p>&nbsp;</p>
<p>Divina m&atilde;e</p>
<p>Estrela luminosa que perpetuou Bel&eacute;m</p>
<p>Guerreira m&atilde;e</p>
<p>Nos dias de treva nas ruas de Jerusal&eacute;m</p>
<p>&nbsp;</p>
<p>Olhai por n&oacute;s</p>
<p>Nas horas de tristeza, nos momentos de afli&ccedil;&atilde;o</p>
<p>E derramai</p>
<p>A poderosa for&ccedil;a de vontade em nosso cora&ccedil;&atilde;o</p>
',
                'creditos' => '<p>Arranjo, piano, programa&ccedil;&atilde;o de cordas e percuss&atilde;o: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o, guitarra portuguesa e guitarra: Leo Amuedo</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Bateria: Camilo Mariano</p>
',
                'faixa_mp3' => '03-Estrela_luminosa.mp3',
                'faixa_ogg' => '',
                'disco_id' => '37'));
        Musicas::create(
            array(
                'faixa' => 'Alegria',
                'compositor' => '(Maninho) Participa&ccedil;&atilde;o especial: <strong>Padre F&aacute;bio de Melo</strong>',
                'letra' => '<p>Na prociss&atilde;o</p>
<p>Todos marchavam em um passo qualquer</p>
<p>E liam frases de um folheto e sequer</p>
<p>Trocar olhares conseguiam, meu Deus</p>
<p>&nbsp;</p>
<p>Na prociss&atilde;o</p>
<p>O vento frio que carregava os fi&eacute;is</p>
<p>Assobiou uma can&ccedil;&atilde;o que feriu</p>
<p>Todos passaram a lamentar, ai meu Deus</p>
<p>&nbsp;</p>
<p>A ladainha ent&atilde;o, por fim, repetiu</p>
<p>A trajet&oacute;ria, sem querer, da Paix&atilde;o</p>
<p>E algu&eacute;m gritou no meio da multid&atilde;o</p>
<p>Erguendo os bra&ccedil;os parecia enfrentar</p>
<p>Todo sil&ecirc;ncio come&ccedil;ou a cantar</p>
<p>A melodia de amor, ai meu Deus</p>
<p>&nbsp;</p>
<p>Na multid&atilde;o</p>
<p>A melodia come&ccedil;ou a viver</p>
<p>E algumas bocas come&ccedil;aram a sorrir</p>
<p>E o passo torto come&ccedil;ou a acertar</p>
<p>E o vento frio parou, desapareceu</p>
<p>E as m&atilde;os podiam ent&atilde;o, por fim, se tocar</p>
<p>E a multid&atilde;o passou ent&atilde;o a rezar</p>
<p>&nbsp;</p>
<p><em>O anjo anunciou a Maria</em></p>
<p><em>E ela concebeu do Esp&iacute;rito Santo</em></p>
<p><em>Eis aqui a serva do Senhor</em></p>
<p><em>Fa&ccedil;a-se em mim segunda a Vossa palavra</em></p>
<p><em>O verbo de Deus se fez carne</em></p>
<p><em>E habitou entre n&oacute;s</em></p>
<p><em>Oh, Maria, concebida sem pecado</em></p>
<p><em>Rogai por n&oacute;s que recorremos a v&oacute;s</em></p>
',
                'creditos' => '<p>Arranjo, piano, programa&ccedil;&atilde;o de cordas e percuss&atilde;o: Z&eacute; Am&eacute;rico Bastos<br />Viol&atilde;o: Leo Amuedo<br />Baixo: Ney Concei&ccedil;&atilde;o<br />Bateria: Camilo Mariano<br />Coro: Alessandro Rocha, Thamires Lima, Walace Ara&uacute;jo, Mariah, Lilian Santiago e Vinicius Rosa</p>
',
                'faixa_mp3' => '04-Alegria.mp3',
                'faixa_ogg' => '',
                'disco_id' => '37'));


        Musicas::create(
            array(
                'faixa' => 'Vou com Jesus',
                'compositor' => '(Cris Reis)',
                'letra' => '<p>Leme do meu barco, desafiando o c&eacute;u escuro</p>
<p>Fonte no deserto, no seu colo o meu escudo</p>
<p>Tudo que voc&ecirc; me diz &eacute; lei</p>
<p>Tudo que fizer por mim, eu sei</p>
<p>&Eacute; pra me ver cada vez mais feliz</p>
<p>&nbsp;</p>
<p>S&oacute; voc&ecirc; consegue</p>
<p>Num simples gesto de carinho</p>
<p>Aplacar a dor do mais trai&ccedil;oeiro espinho</p>
<p>Na sua voz, minha can&ccedil;&atilde;o</p>
<p>S&atilde;o meus far&oacute;is seu olhar</p>
<p>&nbsp;</p>
<p>N&atilde;o &eacute; dif&iacute;cil acreditar</p>
<p>Quando amar nos faz saber</p>
<p>Basta estender a m&atilde;o</p>
<p>Vou com Jesus</p>
<p>&nbsp;</p>
<p>Fechar os olhos, me entregar</p>
<p>E me atirar sem temer</p>
<p>Quando quiser voar</p>
<p>Vou com Jesus</p>
',
                'creditos' => '<p>Arranjo, piano el&eacute;trico, synth e programa&ccedil;&atilde;o de percuss&atilde;o: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o e guitarra: Leo Amuedo</p>
<p>Baixo: Paulo C&eacute;sar Barros</p>
<p>Bateria: Camilo Mariano</p>
<p>Coro: Alessandro Rocha, Thamires Lima, Walace Ara&uacute;jo, Mariah, Lilian Santiago e Vinicius Rosa</p>
',
                'faixa_mp3' => '05-Vou_com_Jesus.mp3',
                'faixa_ogg' => '',
                'disco_id' => '37'));
        Musicas::create(
            array(
                'faixa' => 'Paz pela paz',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>A paz do mundo come&ccedil;a em mim</p>
<p>Se tenho amor, com certeza sou feliz</p>
<p>Se fa&ccedil;o o bem a meu irm&atilde;o</p>
<p>Tenho a grandeza dentro do meu cora&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Chegou a hora da gente construir a paz</p>
<p>Ningu&eacute;m suporta mais o desamor</p>
<p>&nbsp;</p>
<p>Paz pela paz &ndash; pelas crian&ccedil;as</p>
<p>Paz pela paz &ndash; pelas florestas</p>
<p>Paz pela paz &ndash; pela coragem de mudar</p>
<p>&nbsp;</p>
<p>Paz pela paz &ndash; pela justi&ccedil;a</p>
<p>Paz pela paz &ndash; a liberdade</p>
<p>Paz pela paz &ndash; pela beleza de te amar</p>
<p>&nbsp;</p>
<p>Paz pela paz &ndash; um mundo novo</p>
<p>Paz pela paz &ndash; a esperan&ccedil;a</p>
<p>Paz pela paz &ndash; pela coragem de mudar</p>
<p>&nbsp;</p>
<p>Paz pela paz &ndash; paz entre os homens</p>
<p>Paz pela paz &ndash; entre as na&ccedil;&otilde;es</p>
<p>Paz pela paz &ndash; pela coragem de mudar</p>
',
                'creditos' => '<p>Arranjo, piano, programa&ccedil;&atilde;o de cordas e percuss&atilde;o: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o e guitarra: Leo Amuedo</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Bateria: Camilo Mariano</p>
<p>Coro e palmas: Alessandro Rocha, Thamires Lima, Walace Ara&uacute;jo, Mariah, Lilian Santiago e Vinicius Rosa</p>
',
                'faixa_mp3' => '06-Paz_pela_paz.mp3',
                'faixa_ogg' => '',
                'disco_id' => '37'));
        Musicas::create(
            array(
                'faixa' => 'Eu sou o caminho',
                'compositor' => '(Gilson)',
                'letra' => '<p>Eu sou o caminho, a verdade e a vida</p>
<p>A &aacute;gua que vai saciar tua sede</p>
<p>Aquele que vai te guiar no deserto</p>
<p>Que pode te livrar de todo o mal</p>
<p>&nbsp;</p>
<p>Eu sou o teu pai, teu irm&atilde;o, teu amigo</p>
<p>E sempre estou pronto pra te ajudar</p>
<p>E quando no vale da sombra da morte tiveres que passar</p>
<p>Contigo vou estar</p>
<p>&nbsp;</p>
<p>Eu te conhe&ccedil;o melhor do que ningu&eacute;m</p>
<p>Dos teus problemas eu cuido tamb&eacute;m</p>
<p>Conhe&ccedil;o tuas dores, teus pecados, teus temores</p>
<p>E tudo em tua vida posso transformar</p>
<p>&nbsp;</p>
<p>Dei minha vida para te salvar</p>
<p>Paguei o pre&ccedil;o pra te libertar</p>
<p>Tu &eacute;s meu filho, meu herdeiro</p>
<p>Podes me chamar Pai, meu Pai</p>
',
                'creditos' => '<p>Arranjo, piano e programa&ccedil;&atilde;o de cordas: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o e guitarra: Leo Amuedo</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Bateria: Camilo Mariano</p>
',
                'faixa_mp3' => '07-Eu_sou_o_caminho.mp3',
                'faixa_ogg' => '',
                'disco_id' => '37'));
        Musicas::create(
            array(
                'faixa' => 'O ter&ccedil;o',
                'compositor' => '(Gilson)',
                'letra' => '<p>Eu sou o caminho, a verdade e a vida</p>
<p>A &aacute;gua que vai saciar tua sede</p>
<p>Aquele que vai te guiar no deserto</p>
<p>Que pode te livrar de todo o mal</p>
<p>&nbsp;</p>
<p>Eu sou o teu pai, teu irm&atilde;o, teu amigo</p>
<p>E sempre estou pronto pra te ajudar</p>
<p>E quando no vale da sombra da morte tiveres que passar</p>
<p>Contigo vou estar</p>
<p>&nbsp;</p>
<p>Eu te conhe&ccedil;o melhor do que ningu&eacute;m</p>
<p>Dos teus problemas eu cuido tamb&eacute;m</p>
<p>Conhe&ccedil;o tuas dores, teus pecados, teus temores</p>
<p>E tudo em tua vida posso transformar</p>
<p>&nbsp;</p>
<p>Dei minha vida para te salvar</p>
<p>Paguei o pre&ccedil;o pra te libertar</p>
<p>Tu &eacute;s meu filho, meu herdeiro</p>
<p>Podes me chamar Pai, meu Pai</p>
',
                'creditos' => '<p>Arranjo, &oacute;rg&atilde;o e programa&ccedil;&atilde;o de cordas: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o e guitarra: Leo Amuedo</p>
<p>Baixo: Paulo C&eacute;sar Barros</p>
<p>Bateria: Camilo Mariano</p>
<p>Coro: Alessandro Rocha, Thamires Lima, Walace Ara&uacute;jo, Mariah, Lilian Santiago e Vinicius Rosa</p>
',
                'faixa_mp3' => '08-O_terco.mp3',
                'faixa_ogg' => '',
                'disco_id' => '37'));
        Musicas::create(
            array(
                'faixa' => 'Deixe o amor fazer a lei',
                'compositor' => '(Z&eacute; Am&eacute;rico / Salgado Maranh&atilde;o) Participa&ccedil;&atilde;o especial: <strong>Gilson</strong>',
                'letra' => '<p>Deixem passar os meninos</p>
<p>Com seus cardumes de luz e seu baticum</p>
<p>A paz de todos</p>
<p>A paz de todos &eacute; a paz de um</p>
<p>&nbsp;</p>
<p>Deixem voar os que sonham</p>
<p>Todos t&ecirc;m direito a um lar</p>
<p>Deixem crescer os meninos</p>
<p>Feito frutos no pomar</p>
<p>&nbsp;</p>
<p>Ningu&eacute;m &eacute; dono do mundo</p>
<p>Todos s&atilde;o filhos do rei</p>
<p>Deixe o amor fazer a lei</p>
<p>Deixem o amor fazer a lei</p>
<p>&nbsp;</p>
<p>J&aacute; ferimos tanto esse ch&atilde;o</p>
<p>J&aacute; bebemos muito essa dor</p>
<p>Onde sangra a vida, sangra o sonhador</p>
<p>Onde sangra a vida, morre o amor</p>
<p>&nbsp;</p>
<p>Deixem florir o desejo</p>
<p>Onde ainda existe f&eacute;</p>
<p>L&aacute; onde morre o mar</p>
<p>Morre tamb&eacute;m a mar&eacute;</p>
',
                'creditos' => '<p>Arranjo, piano, &oacute;rg&atilde;o, programa&ccedil;&atilde;o de bateria e percuss&atilde;o: Z&eacute; Am&eacute;rico Bastos</p>
<p>Guitarra: Leo Amuedo</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Viol&atilde;o Dobro Slide: Pedro Braga</p>
<p>Coro: Gilson, Bettina Graziani e Elba</p>
',
                'faixa_mp3' => '09-Deixe_o_amor_fazer_a_lei.mp3',
                'faixa_ogg' => '',
                'disco_id' => '37'));
        Musicas::create(
            array(
                'faixa' => 'La canzone di Medjugorje',
                'compositor' => '(Vittorio Gabassi / vers&atilde;o: Elba Ramalho / Jorge Nova)',
                'letra' => '<p>Um outro ar, um outro sol</p>
<p>Sobre as colinas de Medjugorje</p>
<p>S&atilde;o tantas luzes por sobre as casas</p>
<p>&Eacute; tanta paz dentro da igreja</p>
<p>S&atilde;o mais de mil fontes ornadas</p>
<p>S&atilde;o mais de mil velas acesas</p>
<p>&nbsp;</p>
<p>Um outro ar, um outro sol</p>
<p>Olhares novos entre as pessoas</p>
<p>Que te rodeiam, te d&atilde;o a m&atilde;o</p>
<p>Nessa corrente de ora&ccedil;&atilde;o</p>
<p>S&atilde;o mais de mil fontes ornadas</p>
<p>S&atilde;o mais de mil velas acesas</p>
<p>&nbsp;</p>
<p>Guarda-me, conforta-me</p>
<p>Oh, Virgem Maria</p>
<p>Minha M&atilde;e pur&iacute;ssima</p>
<p>Confio s&oacute; em ti</p>
<p>&nbsp;</p>
<p>Quanta do&ccedil;ura nas tuas palavras</p>
<p>Olha-me nos olhos</p>
<p>Nunca mais serei s&oacute;</p>
<p>N&atilde;o mais</p>
<p>&nbsp;</p>
<p>Esp&iacute;rito Santo, acende o amor</p>
<p>Sobre as ru&iacute;nas dos cora&ccedil;&otilde;es</p>
<p>Me acalente como a um menino</p>
<p>Esp&iacute;rito Santo, poder divino</p>
<p>S&atilde;o mil estrelas que se acendem</p>
<p>S&oacute; pra voc&ecirc;, Rainha da Paz</p>
<p>&nbsp;</p>
<p>Guardami, confortami</p>
<p>O Vergine Maria</p>
<p>Madre Mia Purissima</p>
<p>Confido solo in Te</p>
<p>&nbsp;</p>
<p>Quanta dolcezza nelle tue parole</p>
<p>Olha-me nos olhos</p>
<p>Nunca mais serei s&oacute;</p>
<p>N&atilde;o mais</p>
<p>&nbsp;</p>
<p>C&rsquo;&egrave; un&rsquo;altra aria</p>
<p>C&rsquo;&egrave; un altro sole</p>
<p>Sulle colline di Medjugorje</p>
<p>S&atilde;o mil estrelas que se acendem</p>
<p>Solo per te, Regina della Pace</p>
',
                'creditos' => '<p>Arranjo, &oacute;rg&atilde;o, programa&ccedil;&atilde;o de cordas e obo&eacute;: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o e guitarra portuguesa: Leo Amuedo</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Bateria: Camilo Mariano</p>
<p>Acordeom: Mestrinho</p>
',
                'faixa_mp3' => '10-La_canzone_di_Medjugorje.mp3',
                'faixa_ogg' => '',
                'disco_id' => '37'));
        Musicas::create(
            array(
                'faixa' => 'Minha f&eacute;',
                'compositor' => '(Paulo C&eacute;sar Barros / Pedrinho Piri)',
                'letra' => '<p>Haja o que houver</p>
<p>Pode vir o que vier</p>
<p>Nada &eacute; grande como a minha f&eacute;</p>
<p>&nbsp;</p>
<p>Jamais me rendo</p>
<p>Quando algu&eacute;m me diz um n&atilde;o</p>
<p>Sigo sempre a minha intui&ccedil;&atilde;o</p>
<p>&nbsp;</p>
<p>Algu&eacute;m um dia me disse</p>
<p>Que &eacute; s&oacute; prestar aten&ccedil;&atilde;o</p>
<p>Sinais em nossos caminhos</p>
<p>Chegam dando o rumo certo</p>
<p>&Eacute; s&oacute; voc&ecirc; seguir</p>
<p>&nbsp;</p>
<p>Mais forte sou do que os ventos</p>
<p>Mais forte sou do que as mar&eacute;s</p>
<p>Mais forte at&eacute; que as tempestades do mundo</p>
<p>E essa for&ccedil;a vem da minha f&eacute;</p>
',
                'creditos' => '<p>Arranjo, &oacute;rg&atilde;o, programa&ccedil;&atilde;o de bateria e percuss&atilde;o: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o e guitarra: Leo Amuedo</p>
<p>Baixo: Paulo C&eacute;sar Barros</p>
<p>Coro e palmas: Alessandro Rocha, Thamires Lima, Walace Ara&uacute;jo, Mariah, Lilian Santiago e Vinicius Rosa</p>
',
                'faixa_mp3' => '11-Minha_fe.mp3',
                'faixa_ogg' => '',
                'disco_id' => '37'));
        Musicas::create(
            array(
                'faixa' => 'Ave Maria',
                'compositor' => '(Franz Peter Schubert)',
                'letra' => '<p>Ave Maria</p>
<p>Gratia plena</p>
<p>Maria, gratia plena</p>
<p>Maria, gratia plena</p>
<p>Ave, ave dominus</p>
<p>Dominus tecum</p>
<p>&nbsp;</p>
<p>Benedicta tu in mulieribus</p>
<p>Et benedictus</p>
<p>Et benedictus fructus ventris</p>
<p>Ventris tuae, Jesus</p>
<p>Ave Maria</p>
',
                'creditos' => '<p>Arranjo, programa&ccedil;&atilde;o de cordas, horns e percuss&atilde;o: Z&eacute; Am&eacute;rico Bastos</p>
<p>Viol&atilde;o: Leo Amuedo</p>
<p>Baixo: Ney Concei&ccedil;&atilde;o</p>
<p>Bateria: Camilo Mariano</p>
<p>Coro: Alessandro Rocha, Thamires Lima, Walace Ara&uacute;jo, Mariah, Lilian Santiago e Vinicius Rosa</p>
',
                'faixa_mp3' => '12-Ave_Maria.mp3',
                'faixa_ogg' => '',
                'disco_id' => '37'));











                
/////////////////FIM
    }

}
