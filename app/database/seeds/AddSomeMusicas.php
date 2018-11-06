<?php

class AddSomeMusicas extends Seeder {
 
    public function run() {
        DB::table('musicas')->delete(); // deleting old records.
 
        Musicas::create(
            array(
                'faixa' => 'Canta Cora&#231;&#227;o',
                'compositor' => '(Geraldo Azevedo / Carlos Fernando)',
                'letra' => '<p>Canta, canta, passarinho<br />
Canta, canta, miudinho<br />
Na palma da minha m&atilde;o</p>

<p>Quero ver voc&ecirc; voando<br />
Quero ouvir voc&ecirc; cantando<br />
Quero paz no cora&ccedil;&atilde;o</p>

<p>Quero ver voc&ecirc; voando<br />
Quero ouvir voc&ecirc; cantando<br />
Na palma da minha m&atilde;o</p>

<p>Na palma da minha m&atilde;o<br />
Tem os dedos, tem as linhas<br />
Que olhar cigano caminha<br />
Procurando alcan&ccedil;ar<br />
A nau perdida, o trem que chega<br />
A nova dan&ccedil;a, mata verde, esperan&ccedil;a<br />
Em suas tran&ccedil;as vou voar<br />
Passarinho, vou voar</p>

<p>Meu alegre cora&ccedil;&atilde;o<br />
&Eacute; triste como um camelo<br />
&Eacute; fr&aacute;gil que nem brinquedo<br />
&Eacute; forte como le&atilde;o</p>

<p>&Eacute; todo zelo, &eacute; todo amor, &eacute; desmantelo<br />
&Eacute; querubim, &eacute; c&atilde;o de fogo<br />
&Eacute; Jesus Cristo, &eacute; Lampi&atilde;o<br />
Passarinho, eu vou voar</p>
',
'creditos' => '<p>Arranjo de base: Geraldo Azevedo e Z&amp;#233; Ramalho<br />
Arranjo de cordas: Paulo Machado<br />
Viol&amp;#227;o: Geraldo Azevedo<br />
Viola 10 cordas: Z&amp;#233; Ramalho<br />
Guitarra: Robertinho de Recife<br />
Piano: Paulo Machado<br />
Baixo: Luis Alves<br />
Bateria e percuss&amp;#227;o: Chico Batera<br />
Coro: Amelinha, Lize Bravo, M&amp;#244;nica Schimidt, Cristina e Sheila</p>
',
                'faixa_mp3' => '01_canta_coracao.mp3',
                'faixa_ogg' => '01_canta_coracao.ogg',
                'disco_id' => '1',   ));



        Musicas::create(
            array(
                'faixa' => 'N&#227;o Sonho Mais',
                'compositor' => '(Chico Buarque de Hollanda)',
                'letra' => '<p>Hoje eu sonhei contigo<br />
Tanta desdita<br />
Amor nem te digo<br />
Tanto castigo<br />
Que eu tava aflita de te contar</p>

<p>Foi um sonho medonho<br />
Desses que &amp;#224;s vezes a gente sonha<br />
E baba na fronha<br />
E se urina toda<br />
E quer sufocar</p>

<p>Meu amor vi chegando<br />
Um trem de candango<br />
Formando um bando<br />
Mas que era um bando<br />
De orangotango pra te pegar</p>

<p>Vinha nego humilhado<br />
Vinha morto-vivo<br />
Vinha flagelado de tudo que &amp;#233; lado<br />
Vinha um bom motivo pra te esfolar</p>

<p>Quanto mais tu corria, mais tu ficava<br />
Mais atolava, mais te sujava<br />
Amor, tu fedia<br />
Empesteava o ar</p>

<p>Tu que foi t&amp;#227;o valente<br />
Chorou pra gente<br />
Pediu piedade, olha que maldade<br />
Me deu vontade de gargalhar</p>

<p>Ao p&amp;#233; da ribanceira acabou-se a li&amp;#231;a<br />
Escarrei-te inteira a tua carni&amp;#231;a<br />
E tinha justi&amp;#231;a nesse escarrar</p>

<p>Te rasgamo a carca&amp;#231;a<br />
Descemo a ripa<br />
Viramo as tripa<br />
Comemo os ovo<br />
Ai, aquele povo p&amp;#244;s-se a cantar</p>

<p>Foi um sonho medonho<br />
Desses que &amp;#224;s vezes a gente sonha<br />
E baba na fronha e se urina toda<br />
E j&amp;#225; n&amp;#227;o tem paz</p>

<p>Pois eu sonhei contigo e ca&amp;#237; da cama<br />
Ai, amor, n&amp;#227;o briga<br />
Ai, n&amp;#227;o me castiga<br />
Ai, diz que me ama<br />
E eu n&amp;#227;o sonho mais</p>
',
'creditos' => '<p>Arranjo de base e viola: Otavio Burnier<br />
Viol&amp;#227;o: Geraldo Azevedo<br />
Baixo: Rub&amp;#227;o Sabino<br />
Sanfona: Dominguinhos<br />
Pandeiro: Jackson do Pandeiro<br />
Zabumba: C&amp;#237;cero<br />
Tri&amp;#226;ngulo: Jo&amp;#227;o</p>
',
                'faixa_mp3' => '02_nao_sonho_mais.mp3',
                'faixa_ogg' => '02_nao_sonho_mais.ogg',
                'disco_id' => '1',   ));


        Musicas::create(
            array(
                'faixa' => 'Veio d&#225;gua',
                'compositor' => '(Luiz Ramalho)',
                'letra' => '<p>Um veio d&amp;#39;&amp;#225;gua na serra<br />
&amp;#201; o olho d&rsquo; &amp;#225;gua<br />
Um veio d&rsquo;&amp;#225;gua no rosto<br />
&amp;#201; uma m&amp;#225;goa a correr</p>

<p>Um pingo d&rsquo;&amp;#225;gua no rosto<br />
&amp;#201; uma tristeza<br />
Um pingo d&rsquo;&amp;#225;gua na rosa<br />
&amp;#201; uma beleza pra se ver</p>

<p>Pode haver ang&amp;#250;stia no sorriso<br />
Pode haver sil&amp;#234;ncio que difama<br />
Pode estar mentindo quem te jura<br />
Pode estar fingindo quem te ama</p>

<p>A moeda tem coroa e cara<br />
O luar tamb&amp;#233;m clareia a lama<br />
Pode haver um c&amp;#233;u na &amp;#225;gua clara<br />
Pode haver um v&amp;#233;u na tua fama</p>
',
'creditos' => '<p>Arranjo de base: Z&amp;#233; Ramalho e Luiz Ramalho<br />
Arranjo de cordas: Paulo Machado<br />
Viol&amp;#227;o ovation: Geraldo Azevedo<br />
Viola de 10 cordas: Z&amp;#233; Ramalho<br />
Sanfona e piano: Sivuca<br />
Baixo: Jamil Joanes<br />
Bateria: Elber Bedaque<br />
Percuss&amp;#227;o: Robertinho Silva</p>
',
                'faixa_mp3' => '03_veio_dagua.mp3',
                'faixa_ogg' => '03_veio_dagua.ogg',
                'disco_id' => '1',   ));



         Musicas::create(
            array(
                'faixa' => 'Raz&#227;o De Paz',
                'compositor' => '(Novelli / M&#225;rcio Borges)',
                'letra' => '<p>Clareou raz&amp;#227;o de paz<br />
Talvez porque seja bom<br />
La&amp;#231;o que a serpente deu<br />
Homem mais nenhum desfaz</p>

<p>Quem bateu decerto, errou<br />
Quem levou de gra&amp;#231;a, viu<br />
A bandeira do perd&amp;#227;o<br />
Labareda consumiu</p>

<p>De que serve ser doutor<br />
E voltar palavra atr&amp;#225;s?<br />
Ou dizer que vai fazer<br />
Sem mostrar que &amp;#233; capaz?</p>

<p>Clareou raz&amp;#227;o de ser<br />
Palavra de bom rapaz<br />
La&amp;#231;o que a serpente deu<br />
Homem mais nenhum desfaz</p>

<p>Encontrar raz&amp;#227;o de ser<br />
Talvez porque tudo bem<br />
Ou sen&amp;#227;o talvez porque<br />
S&amp;#243; se vive uma vez</p>

<p>Cobra d&rsquo;&amp;#225;gua, beija-flor<br />
Estrela ou vegetal<br />
Seja homem ou o que for<br />
Ningu&amp;#233;m vai ficar pra tr&amp;#225;s</p>

<p>Encontrar raz&amp;#227;o de ser<br />
Talvez porque tudo bem</p>

',
'creditos' => '<p>Arranjo de base, viol&amp;#227;o e baixo: Novelli<br />
Viola de 10 cordas: Geraldo Azevedo<br />
Viol&amp;#227;o el&amp;#233;trico: Pato<br />
Flautas: Danilo Caymmi, Paulo Jobim e Franklin<br />
Sanfona: Dominguinhos<br />
Bateria e percuss&amp;#227;o: Robertinho Silva<br />
Percuss&amp;#227;o: Bol&amp;#227;o</p>
',
                'faixa_mp3' => '04_razao_de_paz.mp3',
                'faixa_ogg' => '04_razao_de_paz.ogg',
                'disco_id' => '1',   ));



         Musicas::create(
            array(
                'faixa' => 'Baile De M&#225;scaras',
                'compositor' => '(Pedro Osmar)',
                'letra' => '<p>Minha viola andava escondida<br />
Descontente da vida, atarantada<br />
Com as recentes not&amp;#237;cias<br />
Que vinham do meu amor<br />
Com as recentes not&amp;#237;cias<br />
Que vinham do meu amor</p>

<p>&amp;#201; que nos &amp;#250;ltimos dez anos<br />
Todas as violas andam escondidas<br />
Descontentes da vida, atarantadas<br />
Com as recentes not&amp;#237;cias<br />
Que vem l&amp;#225; do exterior<br />
Com as recentes not&amp;#237;cias<br />
Que vem l&amp;#225; do exterior</p>

<p>Para encobrir a verdade<br />
De tamanha tristeza<br />
Todas as violas puseram m&amp;#225;scaras<br />
Vestiram roupa de mulher<br />
Cal&amp;#231;aram bota de soldado<br />
E sa&amp;#237;ram por a&amp;#237; dizendo que era carnaval<br />
E sa&amp;#237;ram por a&amp;#237; dizendo que era carnaval</p>
',
'creditos' => '<p>Arranjo de base: Geraldo Azevedo e Pedro Osmar<br />
Viol&amp;#227;o ovation: Geraldo Azevedo<br />
Viola: Pedro Osmar<br />
Guitarra: Lulu Santos<br />
Sax e flauta: Nivaldo Ornellas<br />
Baixo: Jamil Joanes<br />
Bateria: Elber Bedaque</p>
',
                'faixa_mp3' => '05_baile_de_mascaras.mp3',
                'faixa_ogg' => '05_baile_de_mascaras.ogg',
                'disco_id' => '1',   ));


         Musicas::create(
            array(
                'faixa' => 'Filho das &#205;ndias',
                'compositor' => '(Vinicius Cantu&#225;ria)',
                'letra' => '<p>Irupixuna bati&amp;#234;, ela cantava<br />
Filho das &amp;#237;ndias<br />
Irupixuna bati&amp;#234;, ela dan&amp;#231;ava<br />
Filho das &amp;#237;ndias</p>

<p>Mexiam com as tintas<br />
Misturavam as cores<br />
Falavam de amores</p>

<p>Tratavam da planta<br />
Que cuidava a mente e o corpo<br />
Seguindo o velho ritual<br />
Tudo era normal</p>

<p>Marcavam seu tempo<br />
Atrav&amp;#233;s da lua e do sol<br />
&amp;#212;ooooooo filho das &amp;#237;ndias<br />
&amp;#212;ooooooo filho das &amp;#237;ndias<br />
&amp;#212;ooooooo filho das &amp;#237;ndias<br />
&amp;#212;ooooooo filho das &amp;#237;ndias<br />
&amp;#212;ooooooo filho das &amp;#237;ndias</p>

',
'creditos' => '<p>Arranjo de base e guitarra: Vin&amp;#237;cius Cantu&amp;#225;ria<br />
Piano: Wagner Tiso<br />
Baixo: Waldecy<br />
Bateria: Robertinho Silva<br />
Percuss&amp;#227;o: Bol&amp;#227;o<br />
Sax: Oberdan<br />
Piston: Barrosinho<br />
Trombone: Maciel<br />
Coro: Lize Bravo, M&amp;#244;nica Schimidt, Cristina, Sheila, Paulo Machado, Geraldo Azevedo, Renato Rocha e Marcelo Falc&amp;#227;o</p>
',
                'faixa_mp3' => '06_filho_das_indias.mp3',
                'faixa_ogg' => '06_filho_das_indias.ogg',
                'disco_id' => '1',   ));

 Musicas::create(
            array(
                'faixa' => 'Ave de Prata',
                'compositor' => '(Z&#233; Ramalho)',
                'letra' => '<p>&amp;#201; muito mais do que muito<br />
Muito mais do que quantos anos todos piorei<br />
&amp;#201; muito mais do que mata<br />
Muito mais do que morrem todos pela planta do p&amp;#233;<br />
&amp;#201; muito mais do que fera<br />
Mais do que bicho se quiser procriar<br />
Uma esp&amp;#233;cie: sementes da &amp;#225;gua, mist&amp;#233;rios da luz</p>

<p>&amp;#201; muito mais do que antes<br />
Mais do que vinte anos multiplicar<br />
Dividir a mentira<br />
Entre cabelos, olhos e furac&amp;#245;es<br />
Inventar objetos<br />
Pela esfinge quando era mulher<br />
Ave de prata<br />
Veneno de fogo<br />
Vagalume do mar</p>

<p>O mar que se acaba na areia<br />
Gemidos da terra apoiados no ch&amp;#227;o<br />
Entre todos que usam os dentes do arp&amp;#227;o<br />
Apoiados em cada parede pela m&amp;#227;o<br />
Pela m&amp;#227;o que criou tantas trevas e luz</p>

<p>E cada coisa perdida<br />
Perdidamente pode se apaixonar<br />
Pela &amp;#250;ltima vida<br />
Poucos amigos h&amp;#227;o de te procurar<br />
Como &amp;#233; o sil&amp;#234;ncio<br />
E nesse momento tudo deve calar<br />
Numa hist&amp;#243;ria que venha do povo<br />
O ju&amp;#237;zo final</p>
',
'creditos' => '<p>Arranjo de base e viol&amp;#227;o ovation: Z&amp;#233; Ramalho<br />
Arranjo de cordas: Paulo Machado<br />
Viola de 10 cordas: Geraldo Azevedo<br />
Viol&amp;#227;o 7 cordas: Dino<br />
Guitarra portuguesa: Robertinho de Recife</p>
',
                'faixa_mp3' => '07_ave_de_prata.mp3',
                'faixa_ogg' => '07_ave_de_prata.ogg',
                'disco_id' => '1',   ));


Musicas::create(
            array(
                'faixa' => 'Kukukaya (Jogo da Asa da Bruxa)',
                'compositor' => '(C&#225;tia de França)',
                'letra' => '<p>S&amp;#227;o quatro jogadores nessa mesa<br />
Frente a frente para jogar<br />
S&amp;#227;o quatro cabras de peia no desafio<br />
Jogo da bruxa em noite de lua cheia<br />
S&amp;#227;o quatro jogadores nessa mesa<br />
Dando as cartas do jogo sujo da vida</p>

<p>Kukukaya, eu quero isso aqui<br />
Kukukaya, olha esse cachorro aqui, r&amp;#234;i, r&amp;#234;i<br />
Kukukaya, eu quero isso aqui, r&amp;#234;i<br />
Kukukaya, olha esse cachorro aqui</p>

<p>S&amp;#227;o quatro jogadores nessa mesa<br />
Frente a frente, sem dar falsa folga a ningu&amp;#233;m<br />
S&amp;#227;o quatro cabras de peia<br />
De riso d&amp;#243;cil, de rima f&amp;#225;cil<br />
N&amp;#227;o v&amp;#225; se enganar, hein meu bem?</p>

<p>Eu tenho dois olhos, eu tenho dois p&amp;#233;s<br />
Dos meus olhos v&amp;#225; pra meus p&amp;#233;s<br />
Dos meus p&amp;#233;s<br />
Pra dentro da terra<br />
Da terra para a morte</p>

<p>O ovo &amp;#233; redondo, ventre redondo &amp;#233;<br />
Vem amor, vem com sa&amp;#250;de<br />
Onde eu sou chama, seja voc&amp;#234; brasa<br />
Onde eu sou chuva, seja voc&amp;#234; &amp;#225;gua<br />
Onde eu sou chama, seja voc&amp;#234; brasa<br />
Onde eu sou chuva, seja voc&amp;#234; &amp;#225;gua</p>

<p>Kukukaya, eu quero voc&amp;#234; aqui, r&amp;#234;i<br />
Kukukaya, preste aten&amp;#231;&amp;#227;o em mim, r&amp;#234;i, r&amp;#234;i<br />
Kukukaya, eu quero voc&amp;#234; aqui<br />
Kukukaya, preste aten&amp;#231;&amp;#227;o em mim</p>


',
'creditos' => '<p>Arranjo de base e viol&amp;#227;o ovation: Geraldo Azevedo<br />
Arranjo de cordas: Paulo Machado<br />
Viola 10 cordas: Z&amp;#233; Ramalho<br />
Viola: Z&amp;#233; Fl&amp;#225;vio<br />
Guitarras: Lulu Santos<br />
Baixo: Jamil Joanes<br />
Piano: Paulo Sauer<br />
Bateria: Elber Bedaque<br />
Percuss&amp;#227;o: Robertinho Silva<br />
Coro: Amelinha, Lize Bravo, M&amp;#244;nica Schimidt, Cristina e Sheila</p>
',
                'faixa_mp3' => '08_kukukaya.mp3',
                'faixa_ogg' => '08_kukukaya.ogg',
                'disco_id' => '1',   ));


Musicas::create(
            array(
                'faixa' => 'Cart&#227;o Postal',
                'compositor' => '(David Tygel / Cacaso)',
                'letra' => '<p>Eu sou manhoso, eu sou brasileiro<br />
Finjo que vou, mas n&amp;#227;o vou<br />
Minha janela &amp;#233; moldura<br />
Do luar do sert&amp;#227;o &amp;#224; verde mata<br />
Nos olhos verdes da mulata<br />
Nos olhos verdes da mulata</p>

<p>Sou brasileiro manhoso e por isso<br />
Dentro da noite em meu quarto<br />
Fico cismando na beira de um rio<br />
Na imensa solid&amp;#227;o de latidos de araras</p>

<p>L&amp;#237;vido, l&amp;#237;vido<br />
De medo e de amor</p>
',
'creditos' => '<p>Arranjo de base: David Tygel e Geraldo Azevedo<br />
Arranjo de cordas: Francis Hime<br />
Viol&amp;#227;o: Geraldo Azevedo<br />
Viol&amp;#227;o 7 cordas: Dino<br />
Bandolim: Joel<br />
Pandeiro: Jorginho<br />
Clarinete: Netinho</p>
',
                'faixa_mp3' => '09_cartao_postal.mp3',
                'faixa_ogg' => '09_cartao_postal.ogg',
                'disco_id' => '1',   ));

Musicas::create(
            array(
                'faixa' => 'O Dia Do Criador',
                'compositor' => '(Walter Franco)',
                'letra' => '<p>A terra &amp;#233; o mesmo lugar<br />
Onde se canta pra poder dan&amp;#231;ar<br />
A terra &amp;#233; o mesmo lugar<br />
Onde se dan&amp;#231;a pra poder cantar</p>

<p>Eia c&amp;#233;u, olha a lua cheia<br />
Eia estrela da manh&amp;#227;<br />
Eia mar, olha o gr&amp;#227;o de areia<br />
Eia irm&amp;#227;o, olha tua irm&amp;#227;</p>

<p>Chegando l&amp;#225; da ribeira<br />
Chegando l&amp;#225; da ribeira<br />
Chegando l&amp;#225; da ribeira<br />
Chegando l&amp;#225; da ribeira<br />
Chegando l&amp;#225; da ribeira</p>

<p>A terra &amp;#233; o mesmo lugar<br />
Onde se canta pra poder sonhar<br />
A terra &amp;#233; o mesmo lugar<br />
Onde se sonha pra despertar</p>

<p>Eia fogo que te incendeia<br />
Eia irm&amp;#227;, olha teu irm&amp;#227;o<br />
Eia sol que tudo clareia<br />
Olha a &amp;#225;gua que sai do ch&amp;#227;o</p>

<p>Correndo pra cachoeira<br />
Correndo pra cachoeira<br />
Correndo pra cachoeira<br />
Correndo pra cachoeira<br />
Correndo pra cachoeira</p>

<p>A terra &amp;#233; o mesmo lugar<br />
Onde se cansa pra poder deitar<br />
A terra &amp;#233; o mesmo lugar<br />
Onde se deita pra descansar</p>

<p>Eia vento que rodopia<br />
Eia, eia, meu amor<br />
Eia, eia, eia poesia<br />
Olha o dia do criador</p>

<p>Entrando na brincadeira<br />
Entrando na brincadeira<br />
Entrando na brincadeira<br />
Entrando na brincadeira<br />
Entrando na brincadeira</p>

<p>Chegando l&amp;#225; da ribeira<br />
Correndo pra cachoeira<br />
Entrando na brincadeira<br />
Entrando na brincadeira<br />
Entrando na brincadeira</p>
',
'creditos' => '<p>Arranjo de base e viol&amp;#227;o: Jo&amp;#227;o de Aquino<br />
Viola: Geraldo Azevedo<br />
Baixo: Luiz&amp;#227;o<br />
Flauta: Waldemar Falc&amp;#227;o<br />
Bateria: Robertinho Silva<br />
Percuss&amp;#227;o: Bol&amp;#227;o e Bor&amp;#233;<br />
Coro: M&amp;#244;nica Schimidt, Neila, Luc&amp;#237;nia e N&amp;#225;dia</p>
',
                'faixa_mp3' => '10_o_dia_do_criador.mp3',
                'faixa_ogg' => '10_o_dia_do_criador.ogg',
                'disco_id' => '1',   ));

Musicas::create(
            array(
                'faixa' => 'Bodocong&#243;',
                'compositor' => '(Humberto Teixeira / C&#237;cero Nunes)',
                'letra' => '<p>Eu fui feliz l&amp;#225; no Bodocong&amp;#243;<br />
Com meu barquinho de um remo s&amp;#243;<br />
Quando era lua<br />
Com meu bem remava &amp;#224; toa<br />
Ai, ai, ai, que coisa boa<br />
L&amp;#225; no meu Bodocong&amp;#243;</p>

<p>Bodocong&amp;#243; Bod&amp;#243; Bodocong&amp;#243;<br />
Meu can&amp;#225;rio verde, meu curi&amp;#243;<br />
Bodocong&amp;#243; Bod&amp;#243; Bod&amp;#243;<br />
Bod&amp;#243; Bodocong&amp;#243;<br />
Campina Grande eu vivo aqui t&amp;#227;o s&amp;#243;<br />
Ai, ai<br />
Campina Grande eu vivo aqui t&amp;#227;o s&amp;#243;</p>
',
'creditos' => '<p>Arranjo de base: Geraldo Azevedo e Dominguinhos<br />
Viol&atilde;o ovation: Geraldo Azevedo<br />
Viola: Z&eacute; Ramalho<br />
Sanfona: Dominguinhos<br />
Baixo: Novelli<br />
Zabumba: Borel<br />
Pandeiro: Z&eacute; Gomes<br />
Tri&acirc;ngulo: Z&eacute; Leal<br />
Bateria: Robertinho Silva</p>
',
                'faixa_mp3' => '11_bodocongo.mp3',
                'faixa_ogg' => '11_bodocongo.ogg',
                'disco_id' => '1',   ));



Musicas::create(
            array(
                'faixa' => 'Caldeir&atilde;o dos Mitos',
                'compositor' => '<p>(Br&aacute;ulio Tavares)</p>',
                'letra' => '<p>Eu vi o c&eacute;u &agrave; meia-noite<br />
Se avermelhando num clar&atilde;o<br />
Como o inc&ecirc;ndio anunciado<br />
No Apocalipse de S&atilde;o Jo&atilde;o<br />
Por&eacute;m n&atilde;o era nada disso<br />
Era um corisco, era um lampi&atilde;o</p>

<p>Eu vi um risco nos espa&ccedil;os<br />
Era o revoo de um sanha&ccedil;u<br />
Eu vi o dia amanhecendo<br />
No ronco do maracatu<br />
N&atilde;o era a lan&ccedil;a de S&atilde;o Jorge<br />
Era o espinho do mandacaru</p>

<p>Vi um profeta conduzindo<br />
Pros arraias as multid&otilde;es<br />
Pra construir um ch&atilde;o sagrado<br />
Com espingardas e fac&otilde;es<br />
N&atilde;o foi Mois&eacute;s na Palestina<br />
Foi Conselheiro andando nos sert&otilde;es</p>

<p>Eu vi um som na escadaria<br />
D&oacute;-re-mi-f&aacute; sol-l&aacute;-si-d&oacute;<br />
N&atilde;o era o eco das trombetas<br />
De Josu&eacute; em Jeric&oacute;<br />
Era um fole de oito baixo<br />
A tocar numa noite de forr&oacute;</p>

<p>Vi um magrelo amarelado<br />
Passando a perna no patr&atilde;o<br />
N&atilde;o foi ningu&eacute;m da Inglaterra<br />
Nem de Paris, nem do Jap&atilde;o<br />
Era o Pedro Malazarte, era Jo&atilde;o Grilo<br />
E era Canc&atilde;o</p>

<p>Ouvi um som ao meio-dia<br />
No meio do ch&atilde;o do Cear&aacute;<br />
N&atilde;o era o coro dos arcanjos<br />
Nem era a voz de Jeov&aacute;<br />
Era uma cascavel armando o bote<br />
Balan&ccedil;ando o marac&aacute;</p>

<p>Vi uma m&atilde;o fazer no barro<br />
Um homem forte, um homem nu<br />
Um homem branco como eu<br />
Um homem preto como tu<br />
Por&eacute;m n&atilde;o foi a m&atilde;o de Deus<br />
Foi Vitalino de Caruaru<br />
Por&eacute;m n&atilde;o foi a m&atilde;o de Deus<br />
Foi Vitalino de Caruaru<br />
Por&eacute;m n&atilde;o foi a m&atilde;o de Deus<br />
Foi Vitalino de Caruaru<br />
</p>
',
'creditos' => '<p>Arranjo: Banda Roj&atilde;o<br />
Fole de 8 baixos: Abdias<br />
Sanfona: Z&eacute; Am&eacute;rico<br />
Baixo el&eacute;trico: Guil Guimar&atilde;es<br />
Zabumba: Fausto Maciel<br />
Pandeiro: Edson Dutra e Marcos Amma<br />
Tri&acirc;ngulo: Dida<br />
Agog&ocirc;: Osvaldo Oliveira e Marcos Amma<br />
Efeitos: Marcos Amma<br />
Viola de 12 cordas: Joca<br />
</p>
',
                'faixa_mp3' => '01_caldeirao_de_mitos.mp3',
                'faixa_ogg' => '01_caldeirao_de_mitos.ogg',
                'disco_id' => '2',   ));

Musicas::create(
            array(
                'faixa' => 'N&oacute; Cego',
                'compositor' => '(Pedro Osmar)',
                'letra' => '<p>&Eacute; voc&ecirc; a pessoa que deu<br />
Um n&oacute; cego em meu peito<br />
De apaixonado, de apaixonado?<br />
&Eacute; voc&ecirc; a pessoa que deu<br />
Um n&oacute; cego em meu peito<br />
De apaixonado, de apaixonado?</p>

<p>&Eacute; voc&ecirc;<br />
O mascarado que me trancou<br />
O mascarado que me trancou<br />
Nessa noite sem amor?<br />
Nessa noite sem amor?</p>

<p>&Eacute; voc&ecirc; amigo?<br />
&Eacute; voc&ecirc; o inimigo?<br />
&Eacute; voc&ecirc; o perigo?<br />
&Eacute; voc&ecirc;?<br />
&Eacute; voc&ecirc; amigo?<br />
&Eacute; voc&ecirc; o inimigo?<br />
Voc&ecirc; o perigo?<br />
&Eacute; voc&ecirc;?</p>

<p>&Eacute; voc&ecirc; a garra de fome<br />
Que atormenta o presente?<br />
&Eacute; voc&ecirc; que mente muito?<br />
&Eacute; voc&ecirc; a garra de fome<br />
Que atormenta o presente?<br />
&Eacute; voc&ecirc; que mente muito?</p>

<p>Que me engana<br />
Que me rouba da vida?<br />
Que me engana<br />
Que me rouba da vida?<br />
Que me engana<br />
Que me rouba da vida?<br />
</p>
',
'creditos' => '<p>Viola de 10 cordas: Pedro Osmar<br />
Baixo el&eacute;trico: Guil Guimar&atilde;es<br />
Guitarra: Joca<br />
Percuss&atilde;o e surdo do maracatu: Marcos Amma<br />
Bateria: Elber Bedaque<br />
Viol&atilde;o: Geraldo Azevedo<br />
Sitar: Robertinho de Recife<br />
</p>
',
                'faixa_mp3' => '02_no_cego.mp3',
                'faixa_ogg' => '02_no_cego.ogg',
                'disco_id' => '2',   ));

Musicas::create(
            array(
                'faixa' => 'P&eacute;s de Milho',
                'compositor' => '(Jatob&aacute;)',
                'letra' => '<p>P&eacute;s de milho<br />
Os andarilhos<br />
Como os nossos filhos<br />
Procurando vinte milhas<br />
Pelas nossas filhas<br />
Protegendo os milharais<br />
Como as nossas m&atilde;es<br />
Perseguindo os animais<br />
Como os nossos pais</p>

<p>Comparando a rouxin&oacute;is<br />
Tal nossos av&oacute;s<br />
Flutuando pelos rios<br />
Como os nossos tios<br />
Fungos, cogumelos, limos<br />
Como os nossos primos<br />
Tanta gente t&atilde;o aflita<br />
Que eu nem sei ainda<br />
Se transformo o trigo em p&atilde;o<br />
Pra nossos irm&atilde;os<br />
Ou transformo o p&atilde;o em trigo<br />
Pros nossos amigos<br />
Que est&atilde;o salvos do perigo<br />
Do primeiro abrigo<br />
Procurando girass&oacute;is<br />
Como todos n&oacute;s<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia de cordas, piano el&eacute;trico e sanfona: Z&eacute; Am&eacute;rico<br />
Baixo el&eacute;trico: Guil Guimar&atilde;es<br />
Viola de 12 cordas: Joca<br />
Bateria: Elber Bedaque<br />
Congas, atabaques e efeitos: Marcos Amma<br />
Viol&atilde;o: Geraldo Azevedo</p>
',
                'faixa_mp3' => '03_pes_de_milho.mp3',
                'faixa_ogg' => '03_pes_de_milho.ogg',
                'disco_id' => '2',   ));

Musicas::create(
            array(
                'faixa' => 'L&eacute;gua Tirana ',
                'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
                'letra' => '<p>&Oacute;, que estrada mais comprida<br />
&Oacute;, que l&eacute;gua t&atilde;o tirana<br />
Ai, se eu tivesse asas<br />
Inda hoje eu via Ana</p>

<p>Quando o sol tostou as folhas<br />
E bebeu o riach&atilde;o<br />
Fui int&eacute; o Juazeiro<br />
Pra fazer minha ora&ccedil;&atilde;o</p>

<p>T&ocirc; voltando estropiado<br />
Mas alegre o cora&ccedil;&atilde;o<br />
Padim Ci&ccedil;o ouviu minha prece<br />
Fez chover no meu sert&atilde;o</p>

<p>Varei mais de vinte serras<br />
De alpercata e p&eacute; no ch&atilde;o<br />
Mesmo assim como inda farta<br />
Pra chegar no meu rinc&atilde;o!</p>

<p>Trago um ter&ccedil;o pra das Dores<br />
Pra Reimundo, um viol&atilde;o<br />
E pra ela, e pra ela<br />
Trago eu e o cora&ccedil;&atilde;o<br />
E pra ela, e pra ela<br />
Trago eu e o cora&ccedil;&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo de cordas: Alexandre Gnatalli<br />
Arranjo de base e viol&atilde;o de 7 cordas: Dino<br />
Cavaquinho: Manass&eacute;s e Canhoto<br />
Viol&atilde;o de 6 cordas: Meira<br />
Sanfona: Sivuca<br />
Flauta: Franklin<br />
</p>
',
                'faixa_mp3' => '04_legua_tirana.mp3',
                'faixa_ogg' => '04_legua_tirana.ogg',
                'disco_id' => '2',   ));


Musicas::create(
            array(
                'faixa' => 'Porto da Saudade',
                'compositor' => '(Alceu Valença)(Refr&atilde;o do folclore nordestino)
',
                'letra' => '<p>Faz tanto tempo<br />
Tempo &eacute; rua solidade<br />
Leia saudade quando escrevo solid&atilde;o<br />
Quis o destino tortuoso dos ciganos<br />
E as aventuras dos pneus de um caminh&atilde;o<br />
Que atravessava o riacho de salobro<br />
Deixando marcas desenhadas pelo ch&atilde;o<br />
O vento vinha e varria &agrave; minha volta<br />
A ventania e o tempo n&atilde;o tem compaix&atilde;o<br />
A ventania e o tempo n&atilde;o tem compaix&atilde;o</p>

<p>&Oacute;, mana deixa eu ir<br />
&Oacute;, mana eu vou s&oacute;<br />
&Oacute;, mana deixa eu ir<br />
Pro sert&atilde;o de Caic&oacute;</p>

<p>Faz tanto tempo<br />
Tempo &eacute; o porto da saudade<br />
Praias do Rio de Janeiro no ver&atilde;o<br />
Quero o destino das &aacute;guas dos oceanos<br />
Me evaporando preu chover no riach&atilde;o<br />
Mergulharia no riacho de salobro<br />
Lavando a culpa como se eu fosse crist&atilde;o<br />
O vento vinha e varria &agrave; minha volta<br />
A ventania e o tempo n&atilde;o tem compaix&atilde;o<br />
A ventania e o tempo n&atilde;o tem compaix&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo: Banda Roj&atilde;o<br />
Baixo el&eacute;trico: Guil Guimar&atilde;es<br />
Viola de 12 cordas: Joca<br />
Viol&atilde;o: Geraldo Azevedo<br />
Sanfona: Z&eacute; Am&eacute;rico<br />
Bateria: Elber Bedaque<br />
Tri&acirc;ngulo e agog&ocirc;: Marcos Amma<br />
Coro: Aleuda, Cristina Ponce e As Gatas (Francinete, Eur&iacute;dice, Zenilda e Dinorah)<br />
</p>
',
                'faixa_mp3' => '05_porto_da_saudade.mp3',
                'faixa_ogg' => '05_porto_da_saudade.ogg',
                'disco_id' => '2',   ));

Musicas::create(
            array(
                'faixa' => 'O Violeiro',
                'compositor' => '(Elomar)',
                'letra' => '<p>Vou cantar num canto de primeiro<br />
As coisas l&aacute; da minha mudern&aacute;ge<br />
Que me fizeram errante violeiro<br />
Eu falo s&eacute;rio e n&atilde;o &eacute; vadi&aacute;ge<br />
E pra voc&ecirc; que agora est&aacute; me ouvindo<br />
Eu juro int&eacute; pelo santo menino<br />
V&iacute;ge Maria, que ouve o que eu digo<br />
Se for mentira, me mande um castigo</p>

<p>Iap&ocirc;is pro cantador e violeiro<br />
S&oacute; h&aacute; tr&ecirc;s coisas nesse mundo v&atilde;o<br />
Amor, forria, viola<br />
Nunca dinheiro<br />
Viola, forria, amor, dinheiro n&atilde;o<br />
Viola, forria, amor, dinheiro n&atilde;o</p>

<p>Cantador de trovas e martelos<br />
De gabinete, ligeira e mour&atilde;o<br />
Ai, cantador, corri o mundo inteiro<br />
J&aacute; int&eacute; cantei nas porta de um castelo<br />
De um rei que se chamava de Jo&atilde;o<br />
Pode acreditar meu companheiro<br />
Adisp&ocirc;is de eu ter cantado o dia inteiro<br />
O rei me disse &ldquo;fica&rdquo;, eu disse &ldquo;n&atilde;o&rdquo;</p>

<p>Se eu tivesse de viver obrigado<br />
Um dia e antes desse dia eu morro<br />
Deus fez os h&ocirc;me e os bicho tudo f&ocirc;rro<br />
J&aacute; havia escrito no livro sagrado<br />
Que a vida nessa terra &eacute; uma passagem<br />
Cada um leva um fardo pesado<br />
&Eacute; o ensinamento que desde a mudern&aacute;ge<br />
Eu trago dentro do cora&ccedil;&atilde;o guardado</p>

<p>Tive muita dor de n&atilde;o ter nada<br />
Pensando que esse mundo &eacute; tudo ter<br />
Mas s&oacute; depois de penar pelas estrada<br />
Beleza na pobreza &eacute; que fui ver<br />
Fui ver na prociss&atilde;o, louvado seja<br />
O malassombro das casa abandona<br />
Coro de cego na porta das igreja<br />
E o ermo da solid&atilde;o nas estrada</p>

<p>Pispiando tudo do come&ccedil;o<br />
Eu vou mostrar como se faz um pachola<br />
Ai, que enforca o pesco&ccedil;o da viola<br />
E revira toda a moda pelo avesso<br />
E sem arreparar se &eacute; noite e dia<br />
Vai assim cantar o bem da forria<br />
Sem um tost&atilde;o na cuia o cantador<br />
Canta at&eacute; morrer o bem do amor<br />
</p>
',
'creditos' => 'Viola de 10 cordas e viol&atilde;o: Z&eacute; Menezes<br />
Viola de 12 cordas: Joca
',
                'faixa_mp3' => '06_o_violeiro.mp3',
                'faixa_ogg' => '06_o_violeiro.ogg',
                'disco_id' => '2',   ));


Musicas::create(
            array(
                'faixa' => 'Banquete de Signos',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>Discutir o canga&ccedil;o com liberdade<br />
&Eacute; saber da viola, da viol&ecirc;ncia<br />
Descobrir nos cabelos inoc&ecirc;ncia<br />
&Eacute; saber da fatal fertilidade</p>

<p>Descobrir a cidade na natureza<br />
Descobrir a beleza dessa mulher<br />
Descobrir o que der boniteza<br />
Na peleja do homem vier, quando vier</p>

<p>Descobrir o baga&ccedil;o dos engenhos<br />
No mela&ccedil;o da cana mais um beijo<br />
Descobrir os desejos que n&atilde;o tem cura<br />
Saracura do brejo na novena</p>

<p>Descobrir a serena da natureza<br />
Descobrir a beleza dessa mulher<br />
Descobrir o que der boniteza<br />
Na peleja do homem vier, quando vier<br />
</p>
',
'creditos' => '<p>Arranjo e reg&ecirc;ncia: Miguel Cidras<br />
Bateria: Picol&eacute;<br />
Baixo el&eacute;trico: Paulo C&eacute;sar<br />
Guitarra e guitarra portuguesa: Robertinho de Recife<br />
Viol&atilde;o ovation: Geraldo Azevedo<br />
Viola ovation: Z&eacute; Ramalho<br />
Zabumba: Bor&eacute;<br />
</p>
',
                'faixa_mp3' => '07_banquete_de_signos.mp3',
                'faixa_ogg' => '07_banquete_de_signos.ogg',
                'disco_id' => '2',   ));

Musicas::create(
            array(
                'faixa' => 'Espiral Do Tempo',
                'compositor' => '(Geraldo Azevedo / Carlos Fernando)',
                'letra' => '<p>Antes da China, o bicho da seda<br />
Depois o homem, o sabor, o metal<br />
Antes de todos, formiga e abelhas<br />
Jo&atilde;o e Maria, a asa, a paz</p>

<p>&Aacute;vido p&aacute;ssaro, brilho de prata<br />
Bico de ponta, sede de amar<br />
&Aacute;vido p&aacute;ssaro, brilho de prata<br />
Bico de ponta, sede de amar</p>

<p>O sol das Am&eacute;ricas, o cio da &Aacute;frica<br />
A energia que muda as quatro esta&ccedil;&otilde;es<br />
O pend&atilde;o do trigo, a m&atilde;o dos padeiros<br />
A l&atilde; dos carneiros, o mar e sert&otilde;es<br />
</p>
',
'creditos' => '<p>Baixo el&eacute;trico: Guil Guimar&atilde;es<br />
Guitarra: Joca<br />
Viol&atilde;o: Geraldo Azevedo<br />
Bateria e timbales: Elber Bedaque<br />
Percuss&atilde;o, bong&ocirc; e cowbell: Marcos Amma<br />
&Oacute;rg&atilde;o: Z&eacute; Am&eacute;rico<br />
</p>
',
                'faixa_mp3' => '08_espiral_do_tempo.mp3',
                'faixa_ogg' => '08_espiral_do_tempo.ogg',
                'disco_id' => '2',   ));



Musicas::create(
            array(
                'faixa' => 'Capim do Vale',
                'compositor' => '(Sivuca / Paulinho Tapaj&oacute;s)',
                'letra' => '<p>Lava esse cheiro de erva<br />
Pimenta e capim do vale<br />
Lava esse cheiro de erva<br />
Pimenta e capim do vale</p>

<p>Lava o suor da colheita<br />
E aceita que eu te agasalhe<br />
Lava o suor da colheita<br />
E aceita que eu te agasalhe</p>

<p>Larga a madeira na estrada<br />
E larga essa faca de entalhe<br />
Larga a madeira na estrada<br />
E larga essa faca de entalhe</p>

<p>Larga o patr&atilde;o na picada<br />
E aceita que eu te agasalhe<br />
Larga o patr&atilde;o na picada<br />
E aceita que eu te agasalhe</p>

<p>Sempre h&aacute; de haver algum trigo<br />
E da terra algum peda&ccedil;o<br />
Guarda a tua m&atilde;o pra um amigo<br />
Que n&atilde;o vai querer teu bra&ccedil;o<br />
Guarda a tua m&atilde;o pra um amigo<br />
Que n&atilde;o vai querer teu bra&ccedil;o</p>

<p>Deixa o dinheiro mal pago<br />
E mande que ele trabalhe<br />
Deixa o dinheiro mal pago<br />
E mande que ele trabalhe</p>

<p>Enquanto voc&ecirc; toma um trago<br />
E aceita que eu te agasalhe<br />
Enquanto voc&ecirc; toma um trago<br />
E aceita que eu te agasalhe</p>

<p>Deita teu corpo em meu ventre<br />
Que eu guardo a tua semente<br />
Deita teu corpo em meu ventre<br />
Que eu guardo a tua semente</p>

<p>Ningu&eacute;m carrega a colheita<br />
Dos frutos que s&atilde;o da gente<br />
Ningu&eacute;m carrega a colheita<br />
Dos frutos que s&atilde;o da gente<br />
</p>
',
'creditos' => '<p>Arranjo e reg&ecirc;ncia de base: Sivuca<br />
Baixo el&eacute;trico: Z&eacute; Am&eacute;rico<br />
Guitarra: Joca<br />
Sanfona e colher: Sivuca<br />
Zabumba: Marcos Amma<br />
Tri&acirc;ngulo: Peninha<br />
Ganz&aacute;: Caf&eacute;<br />
Congas: Caf&eacute;, Peninha e Marcos Amma<br />
Coro: Aleuda, Cristina Ponce, As Gatas (Francinete, Eur&iacute;dice, Zenilda e Dinorah), Tadeu Mathias, Guil Guimar&atilde;es, Joca, Marcos Amma, Z&eacute; Am&eacute;rico, Carlos Jullien, Carlos Fernando e S&iacute;lvio Romero<br />
Palmas: Guil Guimar&atilde;es, Joca, Marcos Amma, Z&eacute; Am&eacute;rico, Carlos Jullien, Tadeu Mathias, Carlos Fernando, S&iacute;lvio Romero, Chico Jullien e Mochel<br />
</p>
',
                'faixa_mp3' => '09_capim_do_vale.mp3',
                'faixa_ogg' => '09_capim_do_vale.ogg',
                'disco_id' => '2',   ));

Musicas::create(
            array(
                'faixa' => 'Ful&ocirc; da Margem',
                'compositor' => '(Mirab&ocirc; / Capinan)',
                'letra' => '<p>N&atilde;o sou ful&ocirc; que se cheire<br />
E que se deixe murchar<br />
Nem sou o mato onde morre<br />
Onde corre a Estrela Dalva</p>

<p>Eu n&atilde;o sou corpo que se corte<br />
Eu n&atilde;o sou sorte que se enjeite<br />
Eu n&atilde;o sou porto que se deixe<br />
Moreno, sem me levar</p>

<p>Eu n&atilde;o sou carne e nem sou peixe, moreno<br />
Rio abaixo, rio acima<br />
Nem sou cacimba vazia<br />
Que se enche de chorar</p>

<p>Eu n&atilde;o sou bra&ccedil;o de mar, moreno<br />
Que n&atilde;o se deixe abra&ccedil;ar<br />
Nem sou a ful&ocirc; da margem, moreno<br />
Que n&atilde;o se possa cheirar<br />
Nem sou a ful&ocirc; da margem, moreno<br />
Que n&atilde;o se possa cheirar<br />
</p>
',
'creditos' => '<p>Arranjo de base e sanfona: Z&eacute; Am&eacute;rico<br />
Baixo el&eacute;trico: Guil Guimar&atilde;es<br />
Guitarra: Joca<br />
Bateria: Elber Bedaque<br />
Viol&atilde;o: Geraldo Azevedo<br />
Tri&acirc;ngulo e agog&ocirc;: Marcos Amma<br />
</p>
',
                'faixa_mp3' => '10_fulo_da_margem.mp3',
                'faixa_ogg' => '10_fulo_da_margem.ogg',
                'disco_id' => '2',   ));


Musicas::create(
            array(
                'faixa' => 'Imbalan&ccedil;a',
                'compositor' => 'Luiz Gonzaga / Z&eacute; Dantas',
                'letra' => '<p>&Oacute;ia a paia do coqueiro quando o vento d&aacute;<br />
O tombo da jangada nas onda do mar<br />
Olha o tombo da jangada nas onda do mar<br />
&Oacute;ia a paia do coqueiro quando o vento d&aacute;</p>

<p>Pra voc&ecirc; aguentar meu roj&atilde;o<br />
&Eacute; preciso saber requebrar<br />
Ter molejo nos p&eacute;s e nas m&atilde;os<br />
Ter no corpo o balan&ccedil;o do mar<br />
Ser que nem carrapeta no ch&atilde;o<br />
E virar folha seca no ar<br />
Que &eacute; pra quando escutar meu bai&atilde;o<br />
Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar<br />
Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar<br />
Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar<br />
Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar<br />
Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>

<p>Voc&ecirc; tem que viver no sert&atilde;o<br />
Pra na rede aprender embalar<br />
Aprender a bater no pil&atilde;o<br />
Na peneira aprender peneirar<br />
Ver relampo no m&ecirc;i do trov&atilde;o<br />
Fazer cobra de fogo no ar<br />
Que &eacute; pra quando escutar meu bai&atilde;o<br />
Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar<br />
Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar<br />
Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar<br />
Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar<br />
Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar<br />
</p>
',
'creditos' => '<p>Baixo el&eacute;trico: Guil Guimar&atilde;es<br />
Guitarra: Paulo Rafael<br />
Sanfona: Z&eacute; Am&eacute;rico<br />
Pandeiro: Jackson do Pandeiro<br />
Tri&acirc;ngulo: Tinda<br />
Ganz&aacute;: Vicente Pereira<br />
Agog&ocirc;: Loza<br />
Zabumba: Ci&ccedil;o<br />
Flauta: Z&eacute; da Flauta<br />
Caxixi: Marcos Amma<br />
</p>
',
                'faixa_mp3' => '11_imbalanca.mp3',
                'faixa_ogg' => '11_imbalanca.ogg',
                'disco_id' => '2',   ));

Musicas::create(
            array(
                'faixa' => 'Veja (Margarida)',
                'compositor' => '(Vital Farias)',
                'letra' => '<p>Veja voc&ecirc;<br />
Arco-&iacute;ris j&aacute; mudou de cor<br />
E uma rosa nunca mais desabrochou<br />
E eu n&atilde;o quero ver voc&ecirc;<br />
Com esse gosto de sab&atilde;o na boca</p>

<p>Arco-&iacute;ris j&aacute; mudou de cor<br />
E uma rosa nunca mais desabrochou<br />
E eu n&atilde;o quero ver voc&ecirc;<br />
Eu n&atilde;o quero ver</p>

<p>Veja, meu bem<br />
Gasolina vai subir de pre&ccedil;o<br />
E eu n&atilde;o quero nunca mais seu endere&ccedil;o<br />
Ou &eacute; o come&ccedil;o do fim<br />
Ou &eacute; o fim</p>

<p>Eu vou partir<br />
Pra cidade garantida, proibida<br />
Arranjar meio de vida, Margarida<br />
Pra voc&ecirc; gostar de mim</p>

<p>Essas feridas da vida, Margarida<br />
Essas feridas da vida, amarga vida<br />
Pra voc&ecirc; gostar<br />
(Pra voc&ecirc; gostar de mim)<br />
</p>
',
'creditos' => '<p>Arranjo e reg&ecirc;ncia de base: Vital Farias<br />
Baixo el&eacute;trico: Guil Guimar&atilde;es<br />
Viol&atilde;o: Vital Farias<br />
Viola: Joca<br />
Piano: Z&eacute; Am&eacute;rico<br />
</p>
',
                'faixa_mp3' => '12_veja_margarida.mp3',
                'faixa_ogg' => '12_veja_margarida.ogg',
                'disco_id' => '2',   ));

Musicas::create(
            array(
                'faixa' => 'Temporal',
                'compositor' => '(Br&aacute;ulio Tavares / Fub&aacute;)',
                'letra' => '<p>Quem viu a terra gemer<br />
Nos dentes brancos do mar<br />
E a laje fria da espuma<br />
A sete palmos de olhar<br />
Pisou as curvas do mapa<br />
E os raios do sol nascente<br />
Tocou as cordas da harpa<br />
De a&ccedil;o incandescente</p>

<p>Eu percorri todo o sonho<br />
No meio da madrugada<br />
E vi planta&ccedil;&otilde;es de balas<br />
Sementes das espingardas<br />
Eu mato, matas e mata<br />
Quem fala n&atilde;o mata n&atilde;o<br />
Quem cala consente a fala<br />
E os gritos do capit&atilde;o</p>

<p>Quem viu os cachorros negros<br />
Latindo para o luar<br />
E um voo v&atilde;o dos morcegos<br />
Gritando mudos no ar<br />
Conhece a for&ccedil;a guardada<br />
Na mola dos temporais<br />
Escurecendo as estrelas<br />
Nos ombros dos generais</p>

<p>A mais cruel armadilha<br />
Encruzilhada dos fins<br />
E os alicerces das ilhas<br />
Ro&iacute;dos pelos cupins<br />
A fina dor da ferida<br />
Doendo at&eacute; no fac&atilde;o<br />
E o mapa da minha vida<br />
Na palma da minha m&atilde;o</p>

<p>Quem viu o bra&ccedil;o da sombra<br />
Das folhas de uma palmeira<br />
Pousar em car&iacute;cia longa<br />
Nos ombros da terra inteira<br />
Ouviu da boca da noite<br />
Feroz sil&ecirc;ncio mortal<br />
E viu o bobo da corte<br />
Dan&ccedil;ando no funeral<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano: Miguel Cidras<br />
Guitarra e violas: Joca<br />
Baixo: Paulo Cesar<br />
Bateria: Mam&atilde;o<br />
Percuss&atilde;o: Marcos Amma<br />
Sanfona: Z&eacute; Am&eacute;rico<br />
Violinos: Peraschi, Walter Hack, Carlos Hack, Virg&iacute;lio Filho, Jorge Faini, Aizik Geller, Daltro e Pascoal<br />
Violas: Penteado, Frederick Stephany, Jos&eacute; Dias de Lana e Nelson de Macedo<br />
Cellos: Alceu e Jorge Ranesvsky<br />
</p>
',
                'faixa_mp3' => '01_temporal.mp3',
                'faixa_ogg' => '01_temporal.ogg',
                'disco_id' => '3',   ));


Musicas::create(
            array(
                'faixa' => 'Amanh&atilde; Eu Vou',
                'compositor' => '(Luiz Gonzaga / Bedu&iacute;no)',
                'letra' => '<p>Era uma certa vez<br />
Um lago mal assombrado<br />
A noite sempre se ouvia<br />
Crimbamba cantando assim</p>

<p>Amanh&atilde; eu vou, amanh&atilde; eu vou<br />
Amanh&atilde; eu vou, amanh&atilde; eu vou<br />
Eu vou, amanh&atilde; eu vou<br />
Amanh&atilde; eu vou, amanh&atilde; eu vou</p>

<p>A carimbamba, ave da noite<br />
Cantava triste l&aacute; na taboa<br />
Amanh&atilde; eu vou, amanh&atilde; eu vou</p>

<p>E Rosabela, linda donzela<br />
Ouviu o seu canto e foi pra lagoa<br />
E Rosabela, linda donzela<br />
Ouviu o seu canto e foi pra lagoa</p>

<p>A taboa la&ccedil;ou a donzela<br />
Pra dentro d&rsquo;&aacute;gua ela levou<br />
A carimbamba vive cantando<br />
Mas Rosabela nunca mais voltou</p>

<p>Amanh&atilde; eu vou, amanh&atilde; eu vou<br />
Amanh&atilde; eu vou, amanh&atilde; eu vou<br />
Eu vou, eu vou<br />
Eu vou, amanh&atilde; eu vou<br />
</p>',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano ac&uacute;stico: Miguel Cidras<br />
Baixo: Paulo Cesar<br />
Guitarra: Joca<br />
Percuss&atilde;o: Marcos Amma<br />
Bateria: Mam&atilde;o<br />
Charango: Pipo<br />
Violinos: Peraschi, Walter Hack, Carlos Hack, Virg&iacute;lio Filho, Jorge Faini, Aizik Geller, Daltro e Pascoal<br />
Violas: Penteado, Frederick Stephany, Jos&eacute; Dias de Lana e Nelson de Macedo<br />
Cellos: Alceu e Jorge Ranesvsky<br />
</p>
',
                'faixa_mp3' => '02_amanha_eu_vou.mp3',
                'faixa_ogg' => '02_amanha_eu_vou.ogg',
                'disco_id' => '3',   ));

Musicas::create(
            array(
                'faixa' => 'Dono Dos Teus Olhos',
                'compositor' => '(Humberto Teixeira)',
                'letra' => '<p>N&atilde;o te esque&ccedil;a<br />
Que eu sou dona dos teus &oacute;io<br />
Faz favor de num espi&aacute; pra mais ningu&eacute;m<br />
Esse azul cor e promessa dos teus &oacute;io<br />
Faz quarqu&eacute; crist&atilde;o gostar de tu tamb&eacute;m</p>

<p>Que nosso senhor perdoe o meu ci&uacute;me<br />
Quando penso em cegar os &oacute;io teu<br />
Pra que eu, somente eu seja o teu guia<br />
Os &oacute;io dos teus &oacute;io, a luz dos &oacute;io teu<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano: Z&eacute; Am&eacute;rico<br />
Baixo ac&uacute;stico: Antonio Santana<br />
Violinos: Peraschi, Jos&eacute; Alves, Virg&iacute;lio Filho, Aizik Geller, Vidal e Pascoal<br />
Violas: Penteado e Hindemburgo Pereira<br />
Cellos: Marcio Mallard e Jaques Morelenbaum<br />
</p>
',
                'faixa_mp3' => '03_dono_dos_teus_olhos.mp3',
                'faixa_ogg' => '03_dono_dos_teus_olhos.ogg',
                'disco_id' => '3',   ));

Musicas::create(
            array(
                'faixa' => 'Oitava',
                'compositor' => '(C&aacute;tia de Fran&ccedil;a)',
                'letra' => '<p>Explode o p&ocirc;r do sol<br />
Lambendo o horizonte<br />
Da outra banda, a Lua<br />
Por entre os coqueirais</p>

<p>Mist&eacute;rios, sei, ele encerra<br />
Segredos seus ao luar<br />
Silenciosa m&atilde;e terra<br />
Sem pressa, sem esperar</p>

<p>Oitava teclados da vida<br />
Oitava na nota dos dias<br />
Eu tava presa pelos dedos<br />
Em brasa, em carne viva<br />
Carne viva, &ecirc;...</p>

<p>Ouvindo o mar n&oacute;s est&aacute;vamos<br />
No tombo do ata ou desata<br />
S&oacute; sei que oitava da vida<br />
Tu foge ou ela te mata</p>

<p>Oitava teclados da vida<br />
Oitava na nota dos dias<br />
Eu tava sem rumo, perdida<br />
T&atilde;o triste, na dor consumida<br />
Consumida, &ecirc;...<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano: Miguel Cidras<br />
Guitarra: Joca<br />
Baixo: Paulo Cesar<br />
Bateria: Mam&atilde;o<br />
Percuss&atilde;o: Marcos Amma<br />
Trumpetes: Marcio Montarroyos e Bidinho<br />
Saxes: Leo Gandelman, Z&eacute; Carlos e Oberdan<br />
Trombone: Serginho<br />
</p>
',
                'faixa_mp3' => '04_oitava.mp3',
                'faixa_ogg' => '04_oitava.ogg',
                'disco_id' => '3',   ));

Musicas::create(
            array(
                'faixa' => 'O Pedido',
                'compositor' => '(Elomar)',
                'letra' => '<p>J&aacute; que tu vai l&aacute; pra feira<br />
Traga de l&aacute; para mim<br />
&Aacute;gua da ful&ocirc; que cheira<br />
Um novelo e um carmim</p>

<p>Traz um pacote de misse<br />
Meu amigo, ah, se tu visse<br />
Aquele cego cantador<br />
Um dia ele me disse<br />
Jogando um mote de amor<br />
Que eu havera de viver<br />
Por esse mundo<br />
E morrer ainda em flor</p>

<p>Passa naquela barraca<br />
Daquela mui&eacute; rez&ecirc;ra<br />
Onde almo&ccedil;amo paca<br />
Panelada e frigideira</p>

<p>Int&eacute; voc&ecirc; disse uma loa<br />
Gabando a boia boa<br />
Que das casas da cidade<br />
Aquela era a primeira</p>

<p>Traz pra mim umas brevidades<br />
Que eu quero matar a saudade<br />
Faz tempo que fui na feira<br />
Ai, saudade</p>

<p>Ah, pois sim, v&ecirc; se n&atilde;o esquece<br />
Que inda nessa lua cheia<br />
N&oacute;s vai brincar na quermesse<br />
L&aacute; no riacho d&#39;areia</p>

<p>Na casa daquele homem<br />
Feiticeiro e curador<br />
Que o dia inteiro &eacute; homem<br />
Fio de Nosso Senhor<br />
Mas disp&ocirc;is da meia-noite<br />
&Eacute; lobisomem comedor<br />
Dos pag&atilde;o que a m&atilde;e esqueceu<br />
Do batismo salvador<br />
Inda tem dois garraf&atilde;o<br />
Com dois canguim responsad&ocirc;</p>

<p>Ah, pois sim, v&ecirc; se n&atilde;o esquece<br />
De trazer ruge e carmim<br />
Ai, se o dinheiro desse<br />
Eu queria um trancelim</p>

<p>Com mais tr&ecirc;s metro de chita<br />
Que &eacute; pra eu fazer um vestido<br />
E ficar bem mais bonito<br />
Que Mad&ocirc; de Juca Dido<br />
E Zefa de Nh&ocirc; Joaquim</p>

<p>J&aacute; que tu vai l&aacute; pra feira, meu amigo<br />
Traz essas coisinha para mim<br />
</p>

',
'creditos' => '<p>Viol&atilde;o: Vital Farias<br />
Viola: Joca<br />
</p>
',
                'faixa_mp3' => '05_o_pedido.mp3',
                'faixa_ogg' => '05_o_pedido.ogg',
                'disco_id' => '3',   ));


Musicas::create(
            array(
                'faixa' => 'Lua Viva',
                'compositor' => '(Tito Livio / Lula Cortes)',
                'letra' => '<p>A lua cheia &eacute; como a chave clara<br />
Que abre a porta do c&eacute;u do sert&atilde;o<br />
Que abre a mente com a chave nova<br />
Pro cora&ccedil;&atilde;o</p>

<p>A lua viva com a mente cheia<br />
Cheia da vida pra nova vis&atilde;o<br />
Que abre a porta com a mente nova<br />
Pro cora&ccedil;&atilde;o</p>

<p>E novamente a lua cheia brilha<br />
E faz um rastro claro pelo c&eacute;u<br />
Como se a chave houvesse aberto a porta<br />
Do universo sobre o meu chap&eacute;u</p>

<p>A lua cheia l&aacute; da Para&iacute;ba<br />
&Eacute; como a chave cheia de ambi&ccedil;&atilde;o<br />
Que abre a porta para o universo<br />
Do cora&ccedil;&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano el&eacute;trico: Miguel Cidras<br />
Guitarra e viola: Joca<br />
Viol&atilde;o: Robson Jorge<br />
Baixo: Guil<br />
Sanfona: Z&eacute; Am&eacute;rico<br />
Bateria: Elber Bedaque<br />
Percuss&atilde;o: Marcos Amma<br />
</p>
',
                'faixa_mp3' => '06_lua_viva.mp3',
                'faixa_ogg' => '06_lua_viva.ogg',
                'disco_id' => '3',   ));



Musicas::create(
            array(
                'faixa' => 'Aquarela Nordestina',
                'compositor' => '(Rosil Cavalcanti)',
                'letra' => '<p>No Nordeste imenso<br />
Quando o sol calcina a terra<br />
N&atilde;o se v&ecirc; uma folha verde na baixa ou na serra<br />
Juriti n&atilde;o suspira, inhambu seu canto encerra<br />
N&atilde;o se v&ecirc; uma folha verde na baixa ou na serra</p>

<p>Acau&atilde; bem no alto do pau-ferro canta forte<br />
Como que reclamando nossa falta de sorte<br />
Asa branca, sedenta, vai chegando na bebida<br />
N&atilde;o tem &aacute;gua a lagoa<br />
J&aacute; est&aacute; ressequida</p>

<p>E o sol vai queimando o brejo, o sert&atilde;o<br />
Cariri e agreste<br />
Ai, ai, meu Deus<br />
Tenha pena do Nordeste</p>

<p>Lai&aacute; lai&aacute; lai&aacute;, lai&aacute; lai&aacute; lai&aacute;<br />
Lai&aacute; lai&aacute; lai&aacute;, lai&aacute; lai&aacute;<br />
</p>

',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e sanfona: Z&eacute; Am&eacute;rico<br />
Viola: Joca<br />
Bateria: Elber Bedaque<br />
Baixo: Guil<br />
Percuss&atilde;o: Marcos Amma<br />
Flautas: Eliane, In&ecirc;s, Franklin e Z&eacute; Carlos<br />
Coro: Ed Wilson, Carlos Pedro, Tadeu Mathias, Rachel, Nilza, Elson e Loalva<br />
</p>
',
                'faixa_mp3' => '07_aquarela_nordestina.mp3',
                'faixa_ogg' => '07_aquarela_nordestina.ogg',
                'disco_id' => '3',   ));

Musicas::create(
            array(
                'faixa' => 'Vem (Ser Navegador)',
                'compositor' => '(Marco Polo)',
                'letra' => '<p>Vem<br />
Vou levar-te na beira do cais<br />
Onde nascem as flores do adeus<br />
E o deserto se encontra com o mar</p>

<p>Vem<br />
No meu barco de velas azuis<br />
Por caminhos do vento e ver&atilde;o<br />
At&eacute; onde a certeza levar</p>

<p>V&ecirc;<br />
Cinco estrelas de sal no chap&eacute;u<br />
Sou vaqueiro das ondas sem fim<br />
E o horizonte &eacute; meu &uacute;nico lar</p>

<p>V&ecirc;<br />
Sempre chego onde pretendo ir<br />
Se j&aacute; sei navegar furac&otilde;es<br />
Muito mais oceanos de paz</p>

<p>Toda vida &eacute; vida e vale viver<br />
Mesmo empurrando e trope&ccedil;ando e o que for<br />
Eu contigo quero compreender<br />
O universo submarino do amor</p>

<p>Ra&ccedil;a &eacute; ra&ccedil;a e quem quer ser, vencer<br />
Tem que estar pronto a todo instante<br />
A todo instante ser navegador<br />
Descobrir o rumo novo do amor<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano: Miguel Cidras<br />
Baixo: Paulo Cesar<br />
Bateria: Mam&atilde;o<br />
Guitarra: Joca<br />
Violinos: Peraschi, Walter Hack, Carlos Hack, Virg&iacute;lio Filho, Jorge Faini, Aizik Geller, Daltro e Pascoal<br />
Violas: Penteado, Frederick Stephany, Jos&eacute; Dias de Lana e Nelson de Macedo<br />
Cellos: Alceu e Jorge Ranesvsky<br />
</p>
',
                'faixa_mp3' => '08_vem_ser_navegador.mp3',
                'faixa_ogg' => '08_vem_ser_navegador.ogg',
                'disco_id' => '3',   ));

Musicas::create(
            array(
                'faixa' => 'Caju&iacute;na',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>Existirmos a que ser&aacute; que se destina?<br />
Quando tu me deste a rosa pequenina<br />
Vi que &eacute;s um homem lindo e que se acaso a sina<br />
Do menino infeliz n&atilde;o se nos ilumina<br />
T&atilde;o pouco turva-se a l&aacute;grima nordestina<br />
Apenas a mat&eacute;ria vida era t&atilde;o fina<br />
E &eacute;ramos olharmo-nos intacta retina<br />
A caju&iacute;na cristalina em Teresina<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano: Miguel Cidras<br />
Baixo: Guil<br />
Viola: Joca<br />
Sanfona: Z&eacute; Am&eacute;rico<br />
Percuss&atilde;o: Marcos Amma<br />
Violinos: Peraschi, Walter Hack, Carlos Hack, Virg&iacute;lio Filho, Jorge Faini, Aizik Geller, Daltro e Pascoal<br />
Violas: Penteado, Frederick Stephany, Jos&eacute; Dias de Lana e Nelson de Macedo<br />
Cellos: Alceu e Jorge Ranesvsky<br />
</p>
',
                'faixa_mp3' => '09_cajuina.mp3',
                'faixa_ogg' => '09_cajuina.ogg',
                'disco_id' => '3',   ));

Musicas::create(
            array(
                'faixa' => 'Eu Queria',
                'compositor' => '(Roberto Martins / M&aacute;rio Rossi)',
                'letra' => '<p>Queria ser asfalto pra voc&ecirc; pisar em mim<br />
Queria ser uma rosa por dentro do teu jardim<br />
Queria minha vida dentro do teu cora&ccedil;&atilde;o<br />
Queria beber &aacute;gua na palma da tua m&atilde;o</p>

<p>Queria ser o dono do teu corpo sedutor<br />
Queria inda gozar teus beijo embriagador<br />
Queria uma casinha entre os verdes pinheirais<br />
Pra n&oacute;s morarmos juntos<br />
S&oacute; n&oacute;s dois<br />
E ningu&eacute;m mais<br />
</p>
',
'creditos' => '<p>Viol&atilde;o: Elba Ramalho<br />
Violas: Joca<br />
</p>
',
                'faixa_mp3' => '10_eu_queria.mp3',
                'faixa_ogg' => '10_eu_queria.ogg',
                'disco_id' => '3',   ));


Musicas::create(
            array(
                'faixa' => 'Essa Alegria (Caboclinhos)',
                'compositor' => '(Lula Queiroga)',
                'letra' => '<p>Essa alegria &eacute; a guia<br />
Estrela guia do carnaval<br />
A nossa tribo abre o dia &ecirc;&ecirc;&ecirc;...</p>

<p>Essa alegria &eacute; a barca<br />
Navega a barca no carnaval<br />
A nossa tribo traz o vento &ecirc;&ecirc;&ecirc;...</p>

<p>Essa alegria &eacute; o pend&atilde;o<br />
Nossa esperan&ccedil;a no carnaval<br />
Um estandarte na floresta &ecirc;&ecirc;&ecirc;...</p>

<p>Balan&ccedil;a o marac&aacute;<br />
Dan&ccedil;a da reden&ccedil;&atilde;o<br />
Raios da vida raiar<br />
Fonte a escorrer<br />
Rio de transbordar<br />
Jorro de alma jorrar</p>

<p>Esse ritmo dentro da noite<br />
Quando a m&uacute;sica e o pensamento<br />
Forem um s&oacute;<br />
Forem o sol</p>

<p>Arco, penacho, flecha e tambor<br />
Cabocolinhos no carnaval<br />
Traz de Olinda a surpresa &ecirc;&ecirc;&ecirc;...</p>

<p>Todas as tribos do pa&iacute;s<br />
Vivas num dia de carnaval<br />
Como se a terra ainda fosse nossa<br />
</p>
',
'creditos' => '<p>Arranjo e reg&ecirc;ncia: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Baixo: Antonio Sant&rsquo;Anna<br />
Viola: Zeppa Souza<br />
Ovation: Geraldo Azevedo<br />
Percuss&atilde;o: Cidinho e Elber Bedaque<br />
Metais: Hamilton, Barreto, Maciel, Berto<br />
Coro: M&aacute;rcio Lott, Jaime Alem, Zeppa Souza, Nair C&acirc;ndia, Regininha, Andrea<br />
Palmas: Carl&atilde;o, Guil, Elba, Z&eacute; Am&eacute;rico Bastos, M&aacute;rcio, Jaime Alem, Zeppa Souza, Nair C&acirc;ndia, Regininha, Andrea<br />
</p>
',
                'faixa_mp3' => '01_essa_alegria_caboclinhos.mp3',
                'faixa_ogg' => '01_essa_alegria_caboclinhos.ogg',
                'disco_id' => '4',   ));


Musicas::create(
            array(
                'faixa' => 'Domin&oacute;',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>Pegue o cigano e bote perto da mentira<br />
E a mentira bote perto do cigano<br />
O alfaiate bote pertinho do pano<br />
E o pano na pele do caipira</p>

<p>O top&aacute;zio encrustado na safira<br />
E na pira do fogo dos diamantes<br />
O desejo bote perto dos amantes<br />
E os instantes no voo de quem n&atilde;o deu</p>

<p>Pegue o destino e bote perto da viagem<br />
E a viagem bote perto do destino<br />
O sacrist&atilde;o bote pertinho do sino<br />
E no s&iacute;mbolo a ponte da miragem</p>

<p>O valente bote perto da coragem<br />
E na margem o lado que n&atilde;o presta<br />
O bo&ecirc;mio bote perto da seresta<br />
E na fresta o olho que n&atilde;o v&ecirc;<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia, piano Yamaha e acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Baixo: Antonio Sant&rsquo;Anna<br />
Viola: Zeppa Souza<br />
Ovation: Z&eacute; Ramalho<br />
Percuss&atilde;o: Cidinho e Elber Bedaque<br />
Vocal: Marcio Lott, Jaime Alem, Zeppa Souza, Nair C&acirc;ndia, Regininha, Andrea<br />
</p>
',
                'faixa_mp3' => '02_domino.mp3',
                'faixa_ogg' => '02_domino.ogg',
                'disco_id' => '4',   ));

Musicas::create(
            array(
                'faixa' => 'No Som Da Sanfona',
                'compositor' => '(Kak&aacute; do Asfalto / Jackson do Pandeiro)',
                'letra' => '<p>Ouvi o toque da sanfona me chamar<br />
Ouvi o toque da sanfona me chamar<br />
Ouvi o toque da sanfona me chamar<br />
Ouvi o toque da sanfona me chamar</p>

<p>Um sanfoneiro bem maneiro<br />
Puxa o fole<br />
Folia a noite inteira<br />
At&eacute; o dia clarear<br />
O cabra vem se aconchegando<br />
Se relando<br />
Quando o pagode esquenta<br />
Ningu&eacute;m quer sair de l&aacute;</p>

<p>&Ecirc;ta pagode que t&aacute; bom<br />
Que t&aacute; danado<br />
Morena aqui do lado<br />
Faz o boneco chorar<br />
Chora, n&atilde;o chora<br />
Morena disse que chora<br />
No som de uma viola<br />
Faz o corpo balan&ccedil;ar</p>

<p>Quem &eacute; sambeiro, batuqueiro, forrozeiro<br />
Tem privil&eacute;gio agora<br />
So&ccedil;aite particular<br />
Agora toda a classe alta quer xaxar<br />
Forr&oacute; de brasileiro chegou em todo lugar<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Baixo: Antonio Sant&rsquo;Anna<br />
Guitarra: Zeppa Souza<br />
Zabumba: C&iacute;cero<br />
Pandeiro: Jackson do Pandeiro<br />
Percuss&atilde;o: Cidinho<br />
Palmas: Guil, Carl&atilde;o, Cidinho, M&aacute;rio Almeida, Pimpolho, Z&eacute; Am&eacute;rico Bastos, M&aacute;rcio, Jaime Alem, Zeppa Souza, Nair C&acirc;ndia, Regininha, Andrea<br />
Coro: M&aacute;rcio Lott, Jaime Alem, Zeppa Souza, Nair C&acirc;ndia, Regininha, Andrea<br />
</p>
',
                'faixa_mp3' => '03_no_som_da_sanfona.mp3',
                'faixa_ogg' => '03_no_som_da_sanfona.ogg',
                'disco_id' => '4',   ));

Musicas::create(
            array(
                'faixa' => ' A Casca Do Ovo',
                'compositor' => '(Gonzaguinha)',
                'letra' => '<p>N&atilde;o tenha receio<br />
De falar de amor<br />
N&atilde;o tenha receio<br />
De falar de amor</p>

<p>Por mais velho que achem<br />
Para sempre ser&aacute;<br />
Por mais velho que achem<br />
Para sempre ser&aacute;</p>

<p>O eterno novo<br />
Como a casca do ovo<br />
Que ningu&eacute;m nunca far&aacute;</p>

<p>A galinha bota<br />
E ela mesma se espanta<br />
De poder botar</p>

<p>Eu por mim quero mais, sempre mais<br />
Pois de amor n&atilde;o se enjoa<br />
Quero mais dessa festa<br />
Que p&otilde;e fogo no meu cora&ccedil;&atilde;o</p>

<p>A pitada de sal<br />
Traz saliva &agrave; boca<br />
De amar s&oacute; se cansa, meu bem<br />
Quem est&aacute; morta ou &eacute; louca<br />
De amar s&oacute; se cansa, meu bem<br />
Quem est&aacute; morta ou &eacute; louca<br />
</p>
',
'creditos' => '<p>
Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Baixo: Antonio Sant&rsquo;Anna<br />
Guitarra: Zeppa Souza<br />
Percuss&atilde;o: Cidinho<br />
Metais: M&aacute;rcio Montarroyos, Leo Gandelman, Serginho, Bidinho, Z&eacute; Carlos<br />
</p>
',
                'faixa_mp3' => '04_a_casca_do_ovo.mp3',
                'faixa_ogg' => '04_a_casca_do_ovo.ogg',
                'disco_id' => '4',   ));

Musicas::create(
            array(
                'faixa' => 'Chego j&aacute;',
                'compositor' => '(Alceu Valença)',
                'letra' => '<p>Eu j&aacute; chamei voc&ecirc;<br />
Voc&ecirc; n&atilde;o quis brincar<br />
Pode bater o p&eacute;<br />
Pode ficar</p>

<p>O Elefante j&aacute; vem<br />
Descendo o Amparo, meu bem<br />
E aquela Cobra que sobe a ladeira<br />
Com gosto de g&aacute;s<br />
O Elefante j&aacute; vem<br />
Eu Acho &eacute; Pouco, meu bem<br />
Segura a Coisa com muito cuidado<br />
Que eu chego j&aacute;</p>

<p>Segura a Coisa<br />
Que o Chap&eacute;u de Bode passou desgarrado<br />
Atr&aacute;s do feiti&ccedil;o cheirando a pecado<br />
&Eacute; com esse menino bonito que eu vou</p>

<p>O Elefante j&aacute; vem<br />
Eu Acho &eacute; Pouco, meu bem<br />
Segura a Coisa com muito cuidado<br />
Que eu chego j&aacute;, j&aacute;<br />
Segura a Coisa com muito cuidado<br />
Pra n&atilde;o se queimar, mar<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Baixo: Antonio Sant&rsquo;Anna<br />
Guitarra: Zeppa Souza<br />
Viol&atilde;o: Geraldo Azevedo<br />
Percuss&atilde;o: Cidinho<br />
</p>
',
                'faixa_mp3' => '05_chego_ja.mp3',
                'faixa_ogg' => '05_chego_ja.ogg',
                'disco_id' => '4',   ));

Musicas::create(
            array(
                'faixa' => 'Amor Com Caf&eacute;',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Se voc&ecirc; quiser o meu amor<br />
Tem que ser assim<br />
Agarradinho, escondidinho, bem bonitinho<br />
Somente pra mim</p>

<p>E de manh&atilde; cedo<br />
Fazer o caf&eacute;<br />
Trazer na cama<br />
Depois do caf&eacute;<br />
A gente se ama<br />
A gente se gama<br />
Depois do caf&eacute;</p>

<p>Ficar o dia inteiro<br />
Nesse d&aacute;-me, d&aacute;-me<br />
Nesse toma, toma<br />
Nesse pega, pega<br />
Nesse coma, coma<br />
Nessa brincadeira<br />
Sem ningu&eacute;m dar f&eacute;</p>

<p>Que o dia vai acabar<br />
E a noite j&aacute; vem<br />
O nosso amor pegando fogo<br />
Vamos se queimar<br />
Levar a vida nesse jogo<br />
Pra se ganhar<br />
E muito mais se querer bem<br />
</p>

',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Baixo: Antonio Sant&rsquo;Anna<br />
Guitarra: Zeppa Souza<br />
Zabumba: C&iacute;cero<br />
Pandeiro: Jackson do Pandeiro<br />
Percuss&atilde;o: Cidinho<br />
Coro: M&aacute;rcio Lott, Jaime Alem, Zeppa Souza, Nair C&acirc;ndia, Regininha, Andrea<br />
Metais: M&aacute;rcio Montarroyos, Leo Gandelman, Serginho, Bidinho, Z&eacute; Carlos</p>
',
                'faixa_mp3' => '06_amor_com_cafe.mp3',
                'faixa_ogg' => '06_amor_com_cafe.ogg',
                'disco_id' => '4',   ));

Musicas::create(
            array(
                'faixa' => 'Olhos Acesos',
                'compositor' => '(Z&eacute; Am&eacute;rico Bastos / Salgado Maranh&atilde;o)',
                'letra' => '<p>Eu canto como quem sofre<br />
A seca da planta&ccedil;&atilde;o<br />
Sou uma arara ofendida<br />
Fugindo da solid&atilde;o</p>

<p>Chora, sanfona agrestina<br />
Fundo no meu cora&ccedil;&atilde;o<br />
Eu sou que nem andorinha<br />
Quando come&ccedil;a o ver&atilde;o<br />
Eu sou que nem andorinha<br />
Quando come&ccedil;a o ver&atilde;o</p>

<p>Lugares, gente, saudade<br />
Selva, cidade, sert&atilde;o<br />
H&aacute; tanto amor que acalanto<br />
Dentro de mim um vulc&atilde;o</p>

<p>Berram guitarras aflitas<br />
Soltas na minha can&ccedil;&atilde;o<br />
S&atilde;o tantos olhos acesos<br />
S&atilde;o tantos passos no ch&atilde;o<br />
S&atilde;o tantos olhos acesos<br />
S&atilde;o tantos passos no ch&atilde;o</p>

<p>Eu canto como quem pinta<br />
O verde na planta&ccedil;&atilde;o<br />
Eu sou que nem os riachos<br />
Quando termina o ver&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Baixo: Antonio Sant&rsquo;Anna<br />
Guitarra: Zeppa Souza<br />
Percuss&atilde;o: Cidinho e Elber Bedaque<br />
Flautas em D&oacute; e Sol: Celso e Daniel<br />
Cordas: Paschoal Perrota, Giancarlo Pareschi, Alfredo Vidal, Carlos Eduardo Hack, Jos&eacute; Alves da Silva, Michel Bessler, Walter Hack, Aizik M. Geller, Arlindo Figueiredo Penteado, Frederick Stephany, Hindemburgo Vitoriano Borges Pereira, Nelson Baptista de Macedo, M&aacute;rcio Eymard Mallard, Jorge Kundert Ranevsky<br />
</p>
',
                'faixa_mp3' => '07_olhos_acesos.mp3',
                'faixa_ogg' => '07_olhos_acesos.ogg',
                'disco_id' => '4',   ));


Musicas::create(
            array(
                'faixa' => 'Sete Cantigas Para Voar',
                'compositor' => '(Vital Farias)',
                'letra' => '<p>Cantiga de campo<br />
De concentra&ccedil;&atilde;o<br />
A gente bem sente<br />
Com precis&atilde;o</p>

<p>Mas recordo a tua imagem<br />
Naquela viagem<br />
Que fiz pro sert&atilde;o<br />
Eu que nasci na floresta<br />
Canto e fa&ccedil;o festa no seu cora&ccedil;&atilde;o</p>

<p>Voa, voa azul&atilde;o<br />
Voa, voa azul&atilde;o</p>

<p>Cantiga de ro&ccedil;a<br />
De um cego apaixonado<br />
Cantiga de mo&ccedil;a<br />
L&aacute; do cercado<br />
Que canta a fauna e a flora<br />
Ningu&eacute;m ignora<br />
Se ela quer brotar<br />
Bota uma flor no cabelo<br />
Com alegria e zelo para n&atilde;o secar</p>

<p>Voa, voa no ar<br />
Voa, voa no ar</p>

<p>Cantiga de ninar<br />
A crian&ccedil;a na rede<br />
Mentira de &aacute;gua<br />
&Eacute; matar a sede<br />
Diz pra m&atilde;e que fui pro a&ccedil;ude<br />
Fui pescar um peixe<br />
Isso num fui, n&atilde;o<br />
Tava era cum namorado<br />
Pra alegria e festa do meu cora&ccedil;&atilde;o</p>

<p>Voa, voa azul&atilde;o<br />
Voa, voa azul&atilde;o</p>

<p>Cantiga de &iacute;ndio<br />
Que perdeu sua taba<br />
No peito esse inc&ecirc;ndio<br />
Seu n&atilde;o se apaga<br />
Deixe o &iacute;ndio no seu canto<br />
Que eu canto um acalanto<br />
Fa&ccedil;o outra can&ccedil;&atilde;o<br />
Deixe o peixe, deixe o rio<br />
Que o rio &eacute; um fio de inspira&ccedil;&atilde;o</p>

<p>Voa, voa azul&atilde;o<br />
Voa, voa azul&atilde;o<br />
Voa, voa...<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e viol&otilde;es: Vital Farias<br />
Vocal: Elba Ramalho</p>
',
                'faixa_mp3' => '08_sete_cantigas_para_voar.mp3',
                'faixa_ogg' => '08_sete_cantigas_para_voar.ogg',
                'disco_id' => '4',   ));

Musicas::create(
            array(
                'faixa' => 'Marcha Regresso',
                'compositor' => '(Paulo Sauer / Edison Luiz / Moraes Moreira)',
                'letra' => '<p>Marcha regresso<br />
De novo vamos ocupar<br />
No seio do povo o nosso lugar<br />
A Deus confesso e agrade&ccedil;o pela prote&ccedil;&atilde;o<br />
Feliz estou de volta pro seu cora&ccedil;&atilde;o</p>

<p>Marcha regresso<br />
Agora nem pra dizer<br />
No meio da rua procure aprender<br />
Pra n&atilde;o perder o que com tanta garra conquistou<br />
Seja voc&ecirc; e saiba se dar o valor</p>

<p>Marcha regresso<br />
Vai ser um sucesso ideal<br />
Real fantasia de um carnaval<br />
Viver o sonho de alcan&ccedil;ar um dia<br />
Toda liberdade que se pretendia reencontrar<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Baixo: Antonio Sant&rsquo;Anna<br />
Guitarra: Zeppa Souza<br />
Percuss&atilde;o: Cidinho e Elber Bedaque<br />
Metais: M&aacute;rcio Montarroyos, Leo Gandelman, Serginho, Bidinho, Z&eacute; Carlos<br />
</p>
',
                'faixa_mp3' => '09_marcha_regresso.mp3',
                'faixa_ogg' => '09_marcha_regresso.ogg',
                'disco_id' => '4',   ));

Musicas::create(
            array(
                'faixa' => 'Menina do Lido',
                'compositor' => '(Geraldo Azevedo / Carlos Fernando) Participa&ccedil;&atilde;o Especial: Geraldo Azevedo - Ed. Warner Chappell
',
                'letra' => '<p>Menina eu te conhe&ccedil;o n&atilde;o sei de onde<br />
Menina eu te conhe&ccedil;o n&atilde;o sei de onde<br />
Mas por incr&iacute;vel que pare&ccedil;a<br />
Sei o seu nome, menina (menino)</p>

<p>N&atilde;o sei se foi no bonde de Santa Teresa<br />
N&atilde;o sei se foi no bonde de Santa Teresa<br />
Como podia ser<br />
Numa butique em Copacabana</p>

<p>Ou num ch&aacute; de caridade, menina<br />
Promovido a quem de direito<br />
Ou num ch&aacute; de caridade, menina<br />
Promovido a quem de direito</p>

<p>O seu vestido era azul-anil<br />
E era domingo, viu<br />
Voc&ecirc; nem ligou pra mim<br />
&Eacute;, eu sou muito vivo<br />
Voc&ecirc; nem ligou pra mim<br />
&Eacute;, eu sou muito viva</p>

<p>Te lembra, menina<br />
Do passeio, do sorvete na Pra&ccedil;a do Lido?<br />
Tu n&atilde;o te lembras<br />
Do passeio, do sorvete na Pra&ccedil;a do Lido</p>

<p>Sou cantador, eu sou cantor<br />
Sou cantador, tamb&eacute;m sou cantor<br />
Sou cantador, eu sou cantor<br />
Sou cantador, tamb&eacute;m sou cantor<br />
Sou cantador eu canto samba<br />
Frevo, rumba, coco, merengue<br />
E maracatu, xacax&aacute;!<br />
</p>
',
'creditos' => '<p>Arranjo e reg&ecirc;ncia: Z&eacute; Am&eacute;rico Bastos<br />
Arranjo de base e Ovation: Geraldo Azevedo<br />
Percuss&atilde;o: Cidinho e Elber Bedaque<br />
Saxes: Maca&eacute;, Bij&uacute;, Netinho, Aurino</p>
',
                'faixa_mp3' => '10_menina_do_lido_com_geraldo_azevedo.mp3',
                'faixa_ogg' => '10_menina_do_lido_com_geraldo_azevedo.ogg',
                'disco_id' => '4',   ));


Musicas::create(
            array(
                'faixa' => 'Bate Cora&ccedil;&atilde;o',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Bate, bate, bate, cora&ccedil;&atilde;o<br />
Dentro desse velho peito<br />
Voc&ecirc; j&aacute; est&aacute; acostumado<br />
A ser maltratado, a n&atilde;o ter direitos</p>

<p>Bate, bate, bate, cora&ccedil;&atilde;o<br />
N&atilde;o ligue, deixe quem quiser falar<br />
Porque o que se leva dessa vida, cora&ccedil;&atilde;o<br />
&Eacute; o amor que a gente tem pra dar<br />
Porque o que se leva dessa vida, cora&ccedil;&atilde;o<br />
&Eacute; o amor que a gente tem pra dar</p>

<p>Oi, tum, tum, bate, cora&ccedil;&atilde;o<br />
Oi, tum, cora&ccedil;&atilde;o pode bater<br />
Oi, tum, tum, tum, bate, cora&ccedil;&atilde;o<br />
Que eu morro de amor com muito prazer</p>

<p>As &aacute;guas s&oacute; des&aacute;guam para o mar<br />
Meus olhos vivem cheios d&#39;&aacute;gua<br />
Chorando, molhando meu rosto<br />
De tanto desgosto, me causando m&aacute;goas</p>

<p>Mas meu cora&ccedil;&atilde;o s&oacute; tem amor<br />
Amor deveras mesmo, pra valer, &ecirc;<br />
Por isso a gente pena, sofre e chora, cora&ccedil;&atilde;o<br />
E morre todo dia sem saber<br />
Por isso a gente pena, sofre e chora, cora&ccedil;&atilde;o<br />
E morre todo dia sem saber<br />
</p>


',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Baixo: Guil<br />
Guitarra: Zeppa Souza<br />
Percuss&atilde;o: Cidinho e Elber Bedaque<br />
Coro: M&aacute;rcio Lott, Jaime Alem, Zeppa Souza, Nair C&acirc;ndia, Regininha, Andrea<br />
</p>
',
                'faixa_mp3' => '11_bate_coracao.mp3',
                'faixa_ogg' => '11_bate_coracao.ogg',
                'disco_id' => '4',   ));

Musicas::create(
            array(
                'faixa' => 'Banho de Cheiro',
                'compositor' => '(Carlos Fernando)',
                'letra' => '<p><em>- Alceu veio! Venha c&aacute;, meu irm&atilde;o!<br />
- T&ocirc; tomando uma cervejinha aqui...<br />
- Diz, e como &eacute; que se faz com o frevo?<br />
- Eu sei l&aacute;, t&ocirc; tomando cerveja! Mas olha, &eacute; um banho de cheiro por cima!<br />
- &Eacute; mesmo?<br />
- Mas &eacute; claro!<br />
- Ent&atilde;o vamos l&aacute;!<br />
- Brasil! Meu sistema solar!<br />
-Eita!<br />
- Simbora, rapaziada!</em</p>

<p>Eu quero um banho de cheiro<br />
Eu quero um banho de lua<br />
Eu quero navegar<br />
Eu quero uma menina<br />
Que me ensine noite e dia<br />
O valor do b&ecirc;-a-b&aacute;</p>

<p>O b&ecirc;-a-b&aacute; dos teus olhos<br />
Morena bonita da Boca do Rio<br />
O b&ecirc;-a-b&aacute; das narinas do rei<br />
O b&ecirc;-a-b&aacute; da Bahia<br />
Sangrando alegria, magia, magia<br />
Nos Filhos de Gandhi</p>

<p>O b&ecirc;-a-b&aacute; dos baianos<br />
Que charme bonito, foi o santo que deu<br />
O b&ecirc;-a-b&aacute; do Senhor do Bonfim<br />
O b&ecirc;-a-b&aacute; do sert&atilde;o<br />
Sem chover, sem colher<br />
Sem comer, sem lazer<br />
O b&ecirc;-a-b&aacute; do Brasil<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Lincoln Olivetti<br />
Bateria: Robertinho Silva<br />
Baixo: Fernando<br />
Guitarra: Robson Jorge<br />
Acordeom: Severo<br />
Pandeiro: Ariovaldo<br />
Percuss&atilde;o: Paulo Humberto<br />
Tri&acirc;ngulo: Cidinho</p>

<p>Metais<br />
Trumpete: Bidinho, M&aacute;rcio Montarroyos, Paulinho<br />
Trombone: Serginho<br />
Sax alto: Oberdan<br />
Sax tenor: Z&eacute; Carlos<br />
Sax bar&iacute;tono: Leo Gandelman</p>

<p>Bandinha<br />
Arranjo da bandinha: Agostinho Silva<br />
Sax: Dulcilando Ferreira<br />
Trombone: Edmundo Maciel<br />
Sax alto: Jaime<br />
Trombone baixo: Jesse<br />
Flautim: Lenir<br />
Trumpete: Nilton<br />
Tuba: Zenio<br />
Vocal: Flavio, Alceu Valen&ccedil;a, Claudia Gomes, Claudia Cesar, Braulio, Gilda Valentim, Carl&atilde;o, Patr&iacute;cia Gadelha, Owsaldo Lenine, Jaime Alem, Luna, Fl&aacute;vio de Souza Faria, Mariza, Marcio Magalh&atilde;es, Regininha<br />
</p>
',
                'faixa_mp3' => '01_banho_de_cheiro.mp3',
                'faixa_ogg' => '01_banho_de_cheiro.ogg',
                'disco_id' => '5',   ));

Musicas::create(
            array(
                'faixa' => 'Toque De Fole',
                'compositor' => '(Bastinho Calixto / Ana Paula)',
                'letra' => '<p>Toque, sanfoneiro<br />
Um forr&oacute; bem animado<br />
Com cad&ecirc;ncia de xaxado<br />
Da poeira levantar</p>

<p>Toque, sanfoneiro<br />
Que as mulheres t&atilde;o visando<br />
O fole frouxo tocando<br />
Castigando a nota l&aacute;</p>

<p>Toque, sanfoneiro<br />
Mostre que &eacute; v&eacute;io macho<br />
Capriche nos oito baixos<br />
At&eacute; o dia clarear</p>

<p>Toque, sanfoneiro, toque<br />
Porque a gente quer se esbaldar<br />
Toque, sanfoneiro, toque<br />
Porque a gente quer dan&ccedil;ar</p>

<p>Dedo no couro &eacute; pandeirada<br />
M&atilde;o no zabumba &eacute; zabumbada<br />
E no tri&acirc;ngulo &eacute; trianglada, oi<br />
Dedo no fole &eacute; forrozada<br />
</p>
',
'creditos' => '<p>Arranjo e piano Yamaha: Luiz Avelar<br />
Bateria: Paulinho Braga<br />
Baixo: Jamil<br />
Guitarra: Ricardo Silveira<br />
Percuss&atilde;o: Cidinho<br />
Ritmo: Jorge, Elizeu<br />
Pandeiro: Bira<br />
Acordeom: Severo, Sivuca, Jos&eacute; Am&eacute;rico<br />
</p>
',
                'faixa_mp3' => '02_toque_de_fole.mp3',
                'faixa_ogg' => '02_toque_de_fole.ogg',
                'disco_id' => '5',   ));

Musicas::create(
            array(
                'faixa' => 'Ave Cigana',
                'compositor' => '(Z&eacute; Am&eacute;rico Bastos / Salgado Maranh&atilde;o)',
                'letra' => '<p>Ave de sert&atilde;o, eu sei que sou<br />
A terra me acompanha aonde vou<br />
Dolente no meu jeito de cantar<br />
E de viver seguindo<br />
Ave de arriba&ccedil;&atilde;o<br />
Asa de beija-flor</p>

<p>Meu cora&ccedil;&atilde;o assim cigano<br />
&Eacute; feito esse ver&atilde;o em teu olhar<br />
Por onde passa o dia e passa a noite<br />
Passa a can&ccedil;&atilde;o<br />
Passa um solar<br />
Tanto luar sem fim</p>

<p>Pontas de recorda&ccedil;&otilde;es<br />
J&aacute; cantei o sol no cimento da cidade<br />
J&aacute; vivi t&atilde;o s&oacute; o lamento da saudade</p>

<p>Mas minha can&ccedil;&atilde;o &eacute; retirante<br />
&Eacute; feito vagalume pelo ar<br />
Brilhando em toda parte, em cada olhar<br />
Em qualquer sert&atilde;o, em qualquer cora&ccedil;&atilde;o<br />
Brilhando em toda parte, em cada olhar<br />
Em qualquer sert&atilde;o, em qualquer cora&ccedil;&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: C&eacute;sar Camargo Mariano<br />
Baixo: Jamil<br />
Viol&atilde;o: H&eacute;lio Delmiro<br />
</p>
',
                'faixa_mp3' => '03_ave_cigana.mp3',
                'faixa_ogg' => '03_ave_cigana.ogg',
                'disco_id' => '5',   ));

Musicas::create(
            array(
                'faixa' => 'Se Eu Fosse o Teu Patr&atilde;o',
                'compositor' => '(Chico Buarque) Participa&ccedil;&atilde;o Especial: Chico Buarque (M&uacute;sica da peça &ldquo;&Oacute;pera do Malandro&rdquo;)
',
                'letra' => '<p>ELES<br />
Eu te adivinhava<br />
E te cobi&ccedil;ava<br />
E te arrematava em leil&atilde;o<br />
Te ferrava a boca, morena<br />
Se eu fosse o teu patr&atilde;o</p>

<p>Ai, eu te cuidava<br />
Como uma escrava<br />
Ai, eu n&atilde;o te dava perd&atilde;o<br />
Te rasgava a roupa, morena<br />
Se eu fosse o teu patr&atilde;o</p>

<p>Eu te encarcerava<br />
Te acorrentava<br />
Te atava ao p&eacute; do fog&atilde;o<br />
N&atilde;o te dava sopa, morena<br />
Se eu fosse o teu patr&atilde;o</p>

<p>Eu te encurralava<br />
Te dominava<br />
Te violava no ch&atilde;o<br />
Te deixava rota, morena<br />
Se eu fosse o teu patr&atilde;o</p>

<p>Quando tu quebrava<br />
E tu desmontava<br />
E tu n&atilde;o prestava mais, n&atilde;o<br />
Eu comprava outra, morena<br />
Se eu fosse o teu patr&atilde;o</p>

<p>ELAS<br />
Pois eu te pagava direito<br />
Soldo de cidad&atilde;o<br />
Punha uma medalha em teu peito<br />
Se eu fosse o teu patr&atilde;o</p>

<p>O tempo passava sereno<br />
E sem reclama&ccedil;&atilde;o<br />
Tu nem reparava, moreno<br />
Na tua maldi&ccedil;&atilde;o</p>

<p>E tu s&oacute; pegava veneno<br />
Beijando a minha m&atilde;o<br />
&Oacute;dio te brotava, moreno<br />
&Oacute;dio do teu irm&atilde;o</p>

<p>Teu filho pegava gangrena<br />
Raiva, peste e sez&atilde;o<br />
C&oacute;lera na tua morena<br />
E tu n&atilde;o chiava, n&atilde;o</p>

<p>Eu te dava caf&eacute; pequeno<br />
E manteiga no p&atilde;o<br />
Depois te afagava, moreno<br />
Como se afaga um c&atilde;o</p>

<p>Eu sempre te dava esperan&ccedil;a<br />
Dum futuro b&atilde;o<br />
Tu me idolatrava, crian&ccedil;a<br />
Seu eu fosse o teu patr&atilde;o</p>

<p>Mas se tu cuspisse no prato<br />
Onde comeu feij&atilde;o<br />
Eu fechava o teu sindicato<br />
Se eu fosse o teu patr&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Francis Hime<br />
Bateria: Serginho<br />
Baixo: Jamil Joanes<br />
Viol&atilde;o: H&eacute;lio Delmiro<br />
Percuss&atilde;o: Jorge, Bira<br />
Tumbas: Cidinho<br />
Xequer&ecirc;: Frank Colon<br />
Cordas: Perrota&rsquo;s Sound<br />
Flauta: Celso<br />
Trombone: Edmundo Maciel, S&eacute;rgio Fernandes<br />
Trumpete: Bidinho, Donald Harris, Nilton Rodrigues, Paulo Roberto,<br />
Trumpete solo: Hamilton<br />
</p>
',
                'faixa_mp3' => '04_se_eu_fosse_o_teu_patrao.mp3',
                'faixa_ogg' => '04_se_eu_fosse_o_teu_patrao.ogg',
                'disco_id' => '5',   ));

Musicas::create(
            array(
                'faixa' => 'Choror&ocirc;',
                'compositor' => '(Gilberto Gil) Participa&ccedil;&atilde;o Especial: A Cor do Som',
                'letra' => '<p>Tenho pena de quem chora<br />
De quem chora tenho d&oacute;<br />
Quando o choro de quem chora<br />
N&atilde;o &eacute; choro, &eacute; choror&ocirc;</p>

<p>Quando uma pessoa chora seu choro baixinho<br />
De l&aacute;grima a correr pelo cantinho do olhar<br />
N&atilde;o se pode duvidar<br />
A raz&atilde;o daquela dor<br />
N&atilde;o se pode (deve) atrapalhar<br />
Sentindo seja o que for</p>

<p>Mas quando a pessoa chora o choro em desatino<br />
Batendo pino como quem vai se arrebentar<br />
A&iacute; penso que &eacute; melhor<br />
Ajudar aquela dor<br />
A encontrar o seu lugar<br />
No meio do choror&ocirc;</p>

<p>Choror&ocirc;, choror&ocirc;, choror&ocirc;<br />
&Eacute; muita &aacute;gua, &eacute; magoa, &eacute; jeito bobo de chorar<br />
Choror&ocirc;, choror&ocirc;, choror&ocirc;<br />
&Eacute; m&aacute;goa, &eacute; muita &aacute;gua, a gente pode se afogar</p>

<p>Choror&ocirc;, choror&ocirc;, choror&ocirc;<br />
&Eacute; muita &aacute;gua, &eacute; magoa, &eacute; jeito bobo de chorar<br />
Choror&ocirc;, choror&ocirc;, choror&ocirc;<br />
&Eacute; m&aacute;goa, &eacute; muita &aacute;gua, a gente pode se acabar<br />
</p>
',
'creditos' => '<p>Arranjo e reg&ecirc;ncia: M&uacute; Carvalho, Dadi e Victor Biglione<br />
Baixo: Dadi<br />
Bateria: Gustavo Schroeter<br />
Guitarra: Victor Biglione<br />
Percuss&atilde;o: Ary Dias<br />
Teclados: M&uacute; Carvalho</p>
',
                'faixa_mp3' => '05_chororo.mp3',
                'faixa_ogg' => '05_chororo.ogg',
                'disco_id' => '5',   ));

Musicas::create(
            array(
                'faixa' => 'Roendo Unha',
                'compositor' => '(Luiz Ramalho / Luiz Gonzaga)',
                'letra' => '<p>Quando vin-vin cantou<br />
Corri pra ver voc&ecirc;<br />
Atr&aacute;s da serra, o sol tava pra se esconder<br />
Quando voc&ecirc; partiu<br />
Eu n&atilde;o esque&ccedil;o mais<br />
Meu cora&ccedil;&atilde;o, amor, partiu atr&aacute;s</p>

<p>Vivo com os olhos na ladeira<br />
Quando vejo uma poeira<br />
Penso logo que &eacute; voc&ecirc;</p>

<p>Vivo de orelha levantada<br />
Para o lado da estrada<br />
Que atravessa o mu&ccedil;amb&ecirc;</p>

<p>Olha que eu j&aacute; t&ocirc; roendo unha<br />
A saudade &eacute; testemunha<br />
Do que agora vou dizer</p>

<p>Quando na janela eu me debru&ccedil;o<br />
O meu cantar &eacute; um solu&ccedil;o<br />
A galopar no massap&ecirc;<br />
</p>
',
'creditos' => '<p>Arranjo e sanfona: Severo<br />
Baixo: Santana<br />
Bateria: Elber Bedaque<br />
Guitarra: Paulo Rafael<br />
Percuss&atilde;o: Firmino<br />
Sax soprano: Marcelo Neves<br />
</p>
',
                'faixa_mp3' => '06_roendo_unha.mp3',
                'faixa_ogg' => '06_roendo_unha.ogg',
                'disco_id' => '5',   ));

Musicas::create(
            array(
                'faixa' => 'Batida de Trem',
                'compositor' => '(Vicente Barreto / Carlos Pitta)',
                'letra' => '<p>Cantando esse bai&atilde;o<br />
Aperriado com a sorte<br />
Felicidade n&atilde;o vem<br />
&Eacute; uma cantiga de cego<br />
&Eacute; uma sanfona tocando<br />
Parece batida de trem</p>

<p>Sou cantador da alegria<br />
Me chamam de Andorinha<br />
Nas festas l&aacute; do sert&atilde;o<br />
Estrela da primavera<br />
Pra onde for vou com ela<br />
Pra esquecer da solid&atilde;o</p>

<p>Se entrar nesse forr&oacute;<br />
Vem, meu amor<br />
Do seu nego tenha d&oacute;<br />
Vem, meu amor<br />
Ponha a m&atilde;o no cora&ccedil;&atilde;o<br />
Vem, meu amor<br />
Que &eacute; pra depois n&atilde;o ficar s&oacute;<br />
Vem, meu amor<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Luiz Avelar<br />
Bateria: Paulinho Braga<br />
Baixo: Jamil<br />
Guitarra: Ricardo Silveira<br />
Tumbadora: Cidinho<br />
Ritmo: Elizeu, Jorge<br />
Pandeiro: Bira<br />
Acorde&oacute;n: Severo<br />
Trumpete: Donald Harris, Alceb&iacute;ades Spinola, Nilton Rodrigues, Paulo Roberto<br />
Sax: Jos&eacute; Carlos<br />
Trombone: S&eacute;rgio<br />
</p>
',
                'faixa_mp3' => '07_batida_de_trem.mp3',
                'faixa_ogg' => '07_batida_de_trem.ogg',
                'disco_id' => '5',   ));

Musicas::create(
            array(
                'faixa' => 'Can&ccedil;&atilde;o da Despedida',
                'compositor' => '(Geraldo Azevedo / Geraldo Vandr&eacute;)',
                'letra' => '<p>J&aacute; vou embora<br />
Mas sei que vou voltar<br />
Amor, n&atilde;o chora<br />
Se eu volto &eacute; pra ficar</p>

<p>Amor, n&atilde;o chora<br />
Que a hora &eacute; de deixar<br />
O amor de agora<br />
Pra sempre ele ficar</p>

<p>Eu quis ficar aqui, mas n&atilde;o podia<br />
O meu caminho a ti n&atilde;o conduzia<br />
Um rei mal coroado n&atilde;o queria<br />
O amor em seu reinado<br />
Pois sabia, n&atilde;o ia ser amado</p>

<p>Amor n&atilde;o chora, eu volto um dia<br />
O rei velho e cansado j&aacute; morria<br />
Perdido em seu reinado, sem Maria<br />
Quando eu me despedia<br />
E no meu canto lhe dizia<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e teclados: C&eacute;sar Camargo Mariano<br />
Guitarra: Ricardo Silveira<br />
Baixo: Pedr&atilde;o<br />
Bateria: Picol&eacute;<br />
Percuss&atilde;o: Frank Colon<br />
Vocal: Pedr&atilde;o, Mariza, Sonia Burnier, Ilka Burnier, Gast&atilde;o Lamounier<br />
</p>
',
                'faixa_mp3' => '08_cancao_da_despedida.mp3',
                'faixa_ogg' => '08_cancao_da_despedida.ogg',
                'disco_id' => '5',   ));

Musicas::create(
            array(
                'faixa' => 'A volta dos Trov&otilde;es',
                'compositor' => '(Br&aacute;ulio Tavares / F&uacute;ba) Participa&ccedil;&atilde;o Especial: C&eacute;u da Boca e Roupa Nova',
                'letra' => '<p>Um tambor amedrontou a mata<br />
Quando o dia clareou<br />
Na clareira respondeu a flauta<br />
Um aviso de terror</p>

<p>Um cacique descobriu pegadas<br />
De um estranho ca&ccedil;ador<br />
Uma tribo foi exterminada<br />
Onde o rio avermelhou</p>

<p>Antes das chuvas<br />
Quando o trov&atilde;o tombou das estrelas<br />
E a selva escura<br />
Viu brilhar nas m&atilde;os de um deus<br />
Armas de estrondo e luz<br />
Viu brilhar nas m&atilde;os de um deus<br />
Armas de estrondo e luz<br />
Como avisou a lenda<br />
Armas de estrondo e luz</p>

<p>On&ccedil;a negra caminhou nas cinzas<br />
Da fogueira que passou<br />
Gavi&atilde;o voando contra a brisa<br />
Viu a mancha do trator</p>

<p>Sobre o ch&atilde;o onde os paj&eacute;s dan&ccedil;avam<br />
Uma vila se formou<br />
Todo dia longe ressoava<br />
O machado lenhador</p>

<p>Dentro da selva<br />
Pulsam os cora&ccedil;&otilde;es dos guerreiros<br />
Esperando a noite<br />
Em que os astros v&atilde;o trazer<br />
A volta dos trov&otilde;es<br />
Em que os astros v&atilde;o trazer<br />
A volta dos trov&otilde;es<br />
Como promete a lenda<br />
A volta dos trov&otilde;es<br />
</p>

',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e teclados: C&eacute;sar Camargo Mariano<br />
Atabaques: Frank Colon, Jorge, Franklin<br />
Surdo: Bira<br />
Vocal: C&eacute;u da Boca (Ver&ocirc;nica Sabino, Rosa Lobo, Dalmo Medeiros, Chico Adnet, Ronald Valle, Paula Morelembaun, Ma&uacute;cha Adnet, M&aacute;rcia Ruiz, Paulo Malaguti e Paulo Roberto Brand&atilde;o) e Roupa Nova (Cleberson Horst, Ricardo Feghali, Kiko, Nando da Silva, Serginho de Lima e Paulinho dos Santos)<br />
</p>
',
                'faixa_mp3' => '09_a_volta_dos_trovoes.mp3',
                'faixa_ogg' => '09_a_volta_dos_trovoes.ogg',
                'disco_id' => '5',   ));

Musicas::create(
            array(
                'faixa' => 'Ai Que Saudade d&rsquo;oc&ecirc;',
                'compositor' => '(Vital Farias) Direto',
                'letra' => '<p>N&atilde;o se admire se um dia<br />
Um beija-flor invadir<br />
A porta da tua casa<br />
Te der um beijo e partir<br />
Fui eu que mandei o beijo<br />
Que &eacute; pra matar meu desejo<br />
Faz tempo que eu n&atilde;o te vejo<br />
Ai que saudade d&rsquo;oc&ecirc;</p>

<p>Se um dia voc&ecirc; lembrar<br />
Escreva uma carta pra mim<br />
Bote logo no correio<br />
Com frases dizendo assim:<br />
&ldquo;Faz tempo que eu n&atilde;o te vejo<br />
Quero matar meu desejo<br />
Te mando um monte de beijo,<br />
Ai, que saudade sem fim&rdquo;</p>

<p>E se quiser recordar<br />
Aquele nosso namoro<br />
Quando eu ia viajar<br />
Voc&ecirc; ca&iacute;a no choro<br />
Eu chorando pela estrada<br />
Mas o que eu posso fazer?<br />
Trabalhar &eacute; minha sina<br />
Eu gosto mesmo &eacute; d&rsquo;oc&ecirc;<br />
</p>


',
'creditos' => '<p>Arranjo, reg&ecirc;ncia, piano e piano Yamaha: Jos&eacute; Am&eacute;rico<br />
Baixo: Antonio Santana<br />
Bateria: Elber Bedaque<br />
Ritmo: Geraldo Gomes, Jo&atilde;o Gomes, Jos&eacute; Silva Gomes<br />
Ovation: Jos&eacute; Paulo<br />
Percuss&atilde;o: Cidinho<br />
Cordas: Perrota&rsquo;s Sound<br />
Gaita: Maur&iacute;cio Einhorn<br />
</p>
',
                'faixa_mp3' => '10_ai_que_saudade_doce.mp3',
                'faixa_ogg' => '10_ai_que_saudade_doce.ogg',
                'disco_id' => '5',   ));

Musicas::create(
            array(
                'faixa' => 'Vida e Carnaval',
                'compositor' => '(Moraes Moreira / Aroldo Macedo) Participa&ccedil;&atilde;o Especial: Robertinho de Recife (guitarra solo)',
                'letra' => '<p>Mandei fazer a minha fantasia<br />
Alegoria de papel crepom<br />
Que &eacute; pra voc&ecirc; durante esses tr&ecirc;s dias<br />
Me curtir todinha<br />
E ao romper do som<br />
Aprender na escola que &eacute; a rua<br />
Ver a verdade nua<br />
E n&atilde;o sair do tom</p>

<p>Pagar pra ver qual &eacute;<br />
A barra de ser o que &eacute;<br />
Ser pra voc&ecirc; igual<br />
Na vida e no carnaval</p>

<p>Meu nego, tirei a m&aacute;scara<br />
Que at&eacute; agora escondeu<br />
Meu sentimento a mais rara<br />
Das joias que Deus me deu</p>

<p>N&atilde;o nego, tirei a m&aacute;scara<br />
Que at&eacute; agora escondeu<br />
Meu sentimento a mais rara<br />
Das joias que Deus me deu<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Lincoln Olivetti<br />
Participa&ccedil;&atilde;o especial na guitarra solo: Robertinho de Recife<br />
Bateria: Mario<br />
Baixo: Fernando<br />
Guitarra base e teclados: Robson Jorge<br />
Percuss&atilde;o: Ariovaldo, Altamiro, Edson, Paulo Humberto<br />
Trumpete: Bidinho, Jos&eacute; Pinto, Paulo Roberto<br />
Sax: Jos&eacute; Carlos<br />
Sax bar&iacute;tono: Leo Gandelman<br />
Sax alto: Oberdan<br />
Trombone: Serginho<br />
</p>
',
                'faixa_mp3' => '11_vida_e_carnaval.mp3',
                'faixa_ogg' => '11_vida_e_carnaval.ogg',
                'disco_id' => '5',   ));

Musicas::create(
            array(
                'faixa' => 'Cora&ccedil;&atilde;o Brasileiro',
                'compositor' => '(Celso Adolfo)',
                'letra' => '<p>No meu cora&ccedil;&atilde;o brasileiro<br />
Plantei um terreiro, colhi um caminho<br />
Armei a arapuca, fui pra tocaia<br />
Fui guerrear<br />
</p>
',
'creditos' => '<p>Voz: Elba Ramalho</p>
',
                'faixa_mp3' => '12_coracao_brasileiro.mp3',
                'faixa_ogg' => '12_coracao_brasileiro.ogg',
                'disco_id' => '5',   ));

Musicas::create(
            array(
                'faixa' => 'Azedo e Mascavo',
                'compositor' => '(Celso Adolfo)',
                'letra' => '<p>&Eacute; um beco estreito onde eu vou<br />
Passar com a minha paix&atilde;o<br />
Minha ferramenta &eacute; minha m&atilde;o</p>

<p>Eu choro e canto, eu sou bravo<br />
Eu sou azedo e mascavo<br />
Eu t&ocirc; na cruz, eu sou cravo</p>

<p>Eu lavo a terra do ch&atilde;o<br />
Tem um ju&aacute; no meu ch&atilde;o<br />
Eu como aqui desse ch&atilde;o</p>

<p>Rimo no mesmo t&atilde;o<br />
Alegria com viol&atilde;o<br />
Esperan&ccedil;a, trabalho e m&atilde;o</p>

<p>Voc&ecirc; j&aacute; viu meu retrato<br />
Eu sou matuto e mato<br />
Se gato voa, eu sou gato</p>

<p>Diz que eu sou brasa e vulc&atilde;o<br />
Diz que eu sou luz e vulc&atilde;o<br />
Eu mal nem sei disso, n&atilde;o</p>

<p>Eu fa&ccedil;o &eacute; fogo na vida<br />
Eu ca&ccedil;o &eacute; o fogo da vida<br />
Eu te&ccedil;o &eacute; o fogo e a vida</p>

<p>Eu canto em primeira e ter&ccedil;a<br />
Quarta, quinta, na sexta<br />
Eu trago a minha can&ccedil;&atilde;o</p>

<p>Rimo no mesmo t&atilde;o<br />
Alegria com viol&atilde;o<br />
Esperan&ccedil;a, trabalho e m&atilde;o</p>

<p>Voc&ecirc; j&aacute; viu meu retrato<br />
Eu sou matuto e mato<br />
Se gato voa, eu sou gato<br />
</p>
',
'creditos' => '<p>Arranjo, Yamaha GS-2, DX-7, Prophet e Arp Quadra: C&eacute;sar Camargo Mariano<br />
Viol&atilde;o: Celso Adolfo<br />
Programa&ccedil;&atilde;o de sintetizador: Mazzola<br />
</p>
',
                'faixa_mp3' => '01_azedo_e_mascavo.mp3',
                'faixa_ogg' => '01_azedo_e_mascavo.ogg',
                'disco_id' => '6',   ));

Musicas::create(
            array(
                'faixa' => 'Toque de Amor',
                'compositor' => '(Jos&eacute; Rocha / Jo&atilde;o Lyra)',
                'letra' => '<p>O amor &eacute; a luz guardi&atilde; da cidade<br />
Que ilumina o cortejo de poucas na&ccedil;&otilde;es<br />
Colorindo a tristeza de felicidade<br />
Com tambores<br />
Alegria dos negros lampi&otilde;es</p>

<p>Tem caixas de guerra<br />
Tarol e agog&ocirc;<br />
Cantar respland&ocirc;<br />
Pra depois debanar</p>

<p>O amor, flor da pele<br />
A luz, o a&ccedil;oite<br />
Que caminha lenta noite dos maracatus<br />
Batucando dentro do cora&ccedil;&atilde;o da cidade<br />
O del&iacute;rio<br />
A magia dos baques virados</p>

<p>Tem reis e rainhas<br />
Do sol e do mar<br />
O toque de amor<br />
Pra gente se encantar<br />
</p>
',
'creditos' => '<p>Arranjo de base e metais, piano Yamaha, baixo e sintetizador: Z&eacute; Am&eacute;rico Bastos<br />
Baixo: Ant&ocirc;nio Santana<br />
Guitarra: Zeppa Souza<br />
Bateria: Rubinho<br />
Percuss&atilde;o: Sidinho<br />
Surdo: Tangerina<br />
Congas: Zizinho<br />
Saxofones: Marcelo, Leo Gandelman e Z&eacute; Carlos<br />
Flauta: Leo Gandelman<br />
Trombones: Serginho e Paulo Willian<br />
Trompetes: Bidinho, Paulo Roberto e Nilton Rodrigues<br />
Vocal: Viviane, Loalwa, Marcio, Regininha, Jaime Alem, Betina, Neila, Tadeu Mathias e Lenine<br />
Simon&rsquo;s e programa&ccedil;&atilde;o de sintetizador: Mazzola<br />
</p>
',
                'faixa_mp3' => '02_toque_de_amor.mp3',
                'faixa_ogg' => '02_toque_de_amor.ogg',
                'disco_id' => '6',   ));


Musicas::create(
            array(
                'faixa' => 'Feitiço de Gafieira',
                'compositor' => '(Tadeu Mathias / Jaguar)',
                'letra' => '<p>Pra que falar de tristeza<br />
Galo cantou, diz que vem<br />
Na barra do dia sorrindo<br />
A manh&atilde;, ser feliz<br />
Vem que tem<br />
Fuzu&ecirc; na gafieira<br />
Rela, rela que a&iacute; vem</p>

<p>Mais um chorinho<br />
Meu amor, balan&ccedil;adinho<br />
Vem dan&ccedil;ar com esse jeitinho<br />
Que &eacute; meu e de mais ningu&eacute;m</p>

<p>Me enrosca toda<br />
Me d&aacute; um abra&ccedil;o<br />
Acerta o passo da minha paix&atilde;o<br />
Parece at&eacute; que h&aacute; um descompasso<br />
Batendo no meu peito, no meu cora&ccedil;&atilde;o</p>

<p>Quero bem tanto de voc&ecirc;<br />
Quero no ponto<br />
Me deixa tonto de amor beber<br />
No c&eacute;u, a lua se derrete em pranto<br />
Chorando de inveja d&rsquo;oc&ecirc;<br />
No c&eacute;u, a lua se derrete em pranto<br />
Chorando de inveja d&rsquo;oc&ecirc;<br />
</p>
',
'creditos' => '<p>Arranjo: Z&eacute; Am&eacute;rico Bastos e Zeppa Souza<br />
Acordeom: Severo<br />
Piano Yamaha, DX-7, Baixo e Prophet: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Rubinho<br />
Percuss&atilde;o: Sidinho, Marcos Rocha e Jorge Luiz<br />
Surdo: Carlos Alberto<br />
Viol&atilde;o de 7 cordas: Horondino<br />
Cavaquinho: Valmar<br />
Pandeiro e Clave: Zizinho<br />
Flauta e Sax: Z&eacute; Carlos e Leo Gandelman<br />
Sax tenor e Flauta: Marcelo<br />
Trombones: Paulo Willian e Serginho<br />
Trompete: Nilton Rodrigues<br />
Trompetes e Fl&uuml;gelhorns: Bidinho e Paulinho<br />
Claps: Mazzola<br />
Vocal: Viviane, Loalwa, Marcio, Regininha, Jaime Alem, Betina, Neila, Tadeu Mathias e Zeppa Souza<br />
</p>
',
                'faixa_mp3' => '03_feitico_de_gafieira.mp3',
                'faixa_ogg' => '03_feitico_de_gafieira.ogg',
                'disco_id' => '6',   ));

Musicas::create(
            array(
                'faixa' => 'Amanheceu',
                'compositor' => '(Zeppa Souza / Br&aacute;ulio Tavares) Dedicado a Pablo Milan&eacute;s',
                'letra' => '<p>Veio devagar no vento<br />
Um peda&ccedil;o escondido de can&ccedil;&atilde;o<br />
Passeou no firmamento<br />
No brilho de V&ecirc;nus de manh&atilde;<br />
Carrossel de luzes<br />
Sons em carrossel<br />
Acendendo todas as cores do c&eacute;u</p>

<p>Veio de manh&atilde; cedinho<br />
Soando bem longe, l&aacute; do al&eacute;m<br />
Leve como um passarinho<br />
Trazendo um segredo para algu&eacute;m<br />
A natureza acordou assim<br />
E a cidade inteira saiu pro jardim</p>

<p>Amanheceu o amor<br />
Amanheceu o amor<br />
Foi me encantando quando me tocou<br />
Amanheceu o amor<br />
Amanheceu o amor<br />
Bateu no meu peito e me acordou</p>

<p>Era como uma risada<br />
Na boca encarnada de arlequim<br />
Carnaval inaugurado<br />
No clar&atilde;o prateado de um clarim<br />
Sol de meio-dia, castelos no ar<br />
Luminosa melodia mais antiga que o mar</p>

<p>Era uma can&ccedil;&atilde;o somente<br />
Por&eacute;m, de repente, floresceu<br />
Turbilh&atilde;o profundo<br />
Era o rosto do mundo, e era eu<br />
Multid&atilde;o de sonhos<br />
Mutir&atilde;o de paz<br />
Forte como a ventania nos canaviais<br />
</p>
',
'creditos' => '<p>Arranjo de base e metais, piano Yamaha e DX-7: Z&eacute; Am&eacute;rico Bastos<br />
Contrabaixo: Ant&ocirc;nio Santana<br />
Acordeom: Severo<br />
Guitarra: Zeppa Souza<br />
Bateria: Rubinho<br />
Piano Yamaha: Milciades<br />
Sax: Marcelo e Z&eacute; Carlos<br />
Sax e Flauta: Leo Gandelman<br />
Trombones: Paulo William e Serginho<br />
Trompetes: Bidinho, Paulo Roberto e Nilton Rodrigues (participa&ccedil;&atilde;o especial)<br />
Simon&rsquo;s: Mazzola<br />
</p>
',
                'faixa_mp3' => '04_amanheceu.mp3',
                'faixa_ogg' => '04_amanheceu.ogg',
                'disco_id' => '6',   ));

Musicas::create(
            array(
                'faixa' => 'Forr&oacute; Do Poeir&atilde;o',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Quem n&atilde;o quiser dan&ccedil;ar<br />
Saia do meio do sal&atilde;o<br />
Que dan&ccedil;a hoje<br />
&Eacute; pra quem tem disposi&ccedil;&atilde;o<br />
A mulherada t&aacute; na base da chinela<br />
O suor t&aacute; na canela<br />
Quero ver o poeir&atilde;o</p>

<p>Eu quero ver o poeir&atilde;o (levantar)<br />
Na batida do bai&atilde;o (levantar)<br />
Agarradinho no sal&atilde;o (levantar)<br />
Machucando o cora&ccedil;&atilde;o (levantar)</p>

<p>Quero ver esse moreno o que voc&ecirc; tem<br />
Quero ouvir a batidinha do seu cora&ccedil;&atilde;o<br />
Quero ter voc&ecirc; comigo<br />
Quero o seu bem<br />
Quero esse menino levantar o poeir&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo: Z&eacute; Am&eacute;rico Bastos e Severo<br />
Zabumba: Mour&atilde;o<br />
Tri&acirc;ngulo: Tinda<br />
Maracas: Melqu&iacute;ades<br />
Agog&ocirc;: Sidinho<br />
Guitarra e vocal: Zeppa Souza<br />
Contrabaixo: Antonio Santana<br />
Bateria: Rubinho<br />
Trombone: Paulo Willian<br />
Drums link: Ary Carvalhaes<br />
Claps: Mazzola<br />
Vocal: Viviane, Loalwa, Marcio, Regininha, Jaime Alem, Neila e Tadeu Mathias<br />
</p>
',
                'faixa_mp3' => '05_forro_do_poeirao.mp3',
                'faixa_ogg' => '05_forro_do_poeirao.ogg',
                'disco_id' => '6',   ));

Musicas::create(
            array(
                'faixa' => 'Moreno de Ouro',
                'compositor' => '(Carlos Fernando/ Geraldo Amaral)',
                'letra' => '<p>Moreno, se teus olhos falassem<br />
Me revelariam atrav&eacute;s da luz<br />
Que vem como facho de fogo<br />
Queimando meu corpo<br />
Igualzinho ao sol</p>

<p>O sol que d&aacute; luz &agrave; pra&ccedil;a<br />
&Eacute; o mesmo que te beija<br />
Ent&atilde;o me beija moreno<br />
Subindo ladeiras<br />
Me leva at&eacute; quarta-feira</p>

<p>Quero com voc&ecirc; me soltar<br />
Perto de voc&ecirc; me quebrar<br />
Vem c&aacute;, moreno<br />
Me d&ecirc; a m&atilde;o<br />
&Eacute; ouro, &eacute; prata esse ch&atilde;o, moreno<br />
</p>
',
'creditos' => '<p>Arranjo, Piano Yamaha e Jupiter 8: Lincoln Olivetti<br />
Bateria: Picol&eacute;<br />
Jupiter 8: Jorj&atilde;o<br />
Trombone, Zin e Fender: Serginho<br />
Contrabaixo: Paulo Cesar<br />
Sax tenor: Marcelo<br />
Trombones: Paulo Willian e Serginho<br />
Trombone e Fl&uuml;gelhorn: Paulinho<br />
Trompetes e Fl&uuml;gelhorns: Nilton Rodrigues e Bidinho<br />
Sax e Flauta: Leo Gandelman<br />
Sax tenor e Flauta: Z&eacute; Carlos<br />
Vocal: Tadeu Mathias, Betina, Neila, Loalwa, Lenine, Fernando, Jaime Alem, Nair C&acirc;ndia e Elba<br />
</p>
',
                'faixa_mp3' => '06_moreno_de_ouro.mp3',
                'faixa_ogg' => '06_moreno_de_ouro.ogg',
                'disco_id' => '6',   ));

Musicas::create(
            array(
                'faixa' => 'Do Jeito Que a Gente Gosta',
                'compositor' => '(Severo / Jaguar)',
                'letra' => '<p>Cai, cai, moreno<br />
No fu&aacute; que ainda &eacute; cedo<br />
Sanfoneiro, empurre o dedo<br />
Bote o fole pra chorar<br />
Nessa pisada eu vou at&eacute; cair de costa<br />
O forr&oacute; t&aacute; animado<br />
Do jeito que a gente gosta</p>

<p>Bumba a zabumba, zabumbeiro<br />
Oi, bum, bum, b&aacute;!<br />
Castiga de l&aacute; sanfoneiro<br />
Que eu quero ver a paia da cana voar</p>

<p>Vem, amor<br />
Que hoje eu sou<br />
Seu dengo, seu xod&oacute;, meu nego<br />
Repara que xamego, vamos xamegar!<br />
</p>
',
'creditos' => '<p>Arranjo de base e metais: Z&eacute; Am&eacute;rico Bastos e Severo<br />
Arranjo de cordas: Ivan Paulo<br />
Acordeom: Severo<br />
Contrabaixo: Ant&ocirc;nio Santana<br />
Guitarra: Zeppa Souza<br />
Bateria: Rubinho<br />
Percuss&atilde;o: Sidinho<br />
Piano Yamaha e DX-7: Z&eacute; Am&eacute;rico Bastos<br />
Pandeiro: Zizinho<br />
Zabumba: Mour&atilde;o<br />
Tri&acirc;ngulo: Tinda<br />
Maracas: Melqu&iacute;ades<br />
Sax tenor e solo: Marcelo<br />
Trombones: Serginho e Paulo Willian<br />
Trombones e Fl&uuml;gelhorns: Paulinho, Nilton Rodrigues e Bidinho<br />
Sax e Flauta: Leo Gandelman<br />
Sax tenor e Flauta: Z&eacute; Carlos<br />
Claps: Mazzola<br />
Violinos: Jorge Kundert, Francisco Perrota, Jos&eacute; Alves, Bernardo, Michel, Alfredo Vidal, Aizik, Carlos Hack, Jacques Morelembaum, Jorge Faini, Paschoal Perrota, Virg&iacute;lio Arraes, Walter Hack e Giancarlo Pareschi (spalla)<br />
Violas: Arlindo Penteado, Frederick Stephany e Vitorino Borges<br />
Cellos: Alceu e M&aacute;rcio Mallard<br />
Simon&rsquo;s: Mazzola</p>
',
                'faixa_mp3' => '07_do_jeito_que_a_gente_gosta.mp3',
                'faixa_ogg' => '07_do_jeito_que_a_gente_gosta.ogg',
                'disco_id' => '6',   ));

Musicas::create(
            array(
                'faixa' => 'Amor Eterno (Soneto CXVI)',
                'compositor' => '(Tadeu Mathias / Ana Am&eacute;lia) (Soneto original de Shakespeare)',
                'letra' => '<p>De almas sinceras, a uni&atilde;o sincera<br />
Nada h&aacute; que impe&ccedil;a, amor n&atilde;o &eacute; amor<br />
Se quando encontra obst&aacute;culos se altera<br />
Ou se vacila ao m&iacute;nimo temor</p>

<p>Amor &eacute; um marco eterno, dominante<br />
Que encara a tempestade com bravura<br />
&Eacute; astro que norteia a vela errante<br />
Cujo valor se ignora l&aacute; na altura</p>

<p>Amor n&atilde;o teme o tempo muito embora<br />
Seu alfanje n&atilde;o poupe a mocidade<br />
Amor n&atilde;o se transforma de hora em hora<br />
Muito antes se afirma para a eternidade</p>

<p>Se isto &eacute; falso<br />
E que &eacute; falso algu&eacute;m provou<br />
Eu n&atilde;o sou poeta<br />
E nunca ningu&eacute;m amou<br />
</p>
',
'creditos' => '<p>Arranjo de base, piano ac&uacute;stico, DX-7, Yamaha GS-2 e Arp Quadra: C&eacute;sar Camargo Mariano<br />
Arranjo de cordas: Ivan Paulo<br />
Detalhes de teclados: Mazzola<br />
Guitarra: Zeppa Souza<br />
Bateria Simonsen: Teo<br />
Violinos: Jorge Kundert, Francisco Perrota, Jos&eacute; Alves, Bernardo, Michel, Alfredo Vidal, Aizik, Carlos Hack, Jacques Morelembaum, Jorge Faini, Paschoal Perrota, Virg&iacute;lio Arraes, Walter Hack e Giancarlo Pareschi (spalla)<br />
Violas: Arlindo Penteado, Frederick Stephany, Vitorino Borges e Nelson de Macedo<br />
Cellos: Alceu e Marcio Mallard<br />
Programa&ccedil;&atilde;o de sintetizador: Mazzola<br />
</p> 
',
                'faixa_mp3' => '08_amor_eterno.mp3',
                'faixa_ogg' => '08_amor_eterno.ogg',
                'disco_id' => '6',   ));


Musicas::create(
            array(
                'faixa' => 'Calmaria',
                'compositor' => '(Z&eacute; Am&eacute;rico Bastos / Salgado Maranh&atilde;o)Participa&ccedil;&atilde;o Especial: Zeppa Souza',
                'letra' => '<p>Quis fazer do nosso amor<br />
A calmaria de um rio<br />
E quanto mais eu mergulho<br />
Mais eu encontro o vazio<br />
Me enrosco na tua pele<br />
Assanho teu cora&ccedil;&atilde;o<br />
E sempre me surpreendo<br />
Com o fogo dessa paix&atilde;o</p>

<p>Nosso encontro &eacute; uma &ldquo;felicid&aacute;diva&rdquo;<br />
&Eacute; festa de passarinhos<br />
E &eacute; flor do mesmo espinho da vida</p>

<p>Quis trazer pro nosso amor<br />
A fantasia do cio<br />
E quanto mais eu mergulho<br />
Mais se aprofunda esse rio<br />
</p>
',
'creditos' => '<p>Arranjo de base e DX-7: Z&eacute; Am&eacute;rico Bastos<br />
Arranjo de cordas: Ivan Paulo<br />
Vocal (participa&ccedil;&atilde;o especial): Zeppa Souza<br />
Percuss&atilde;o: Sidinho<br />
Bateria: Rubinho<br />
Contrabaixo: Ant&ocirc;nio Santana<br />
Guitarra: Zeppa Souza<br />
Violinos: Jorge Kundert, Francisco Perrota, Jos&eacute; Alves, Bernardo, Michel, Alfredo Vidal, Aizik, Carlos Hack, Jacques Morelembaum, Jorge Faini, Paschoal Perrota, Virg&iacute;lio Arraes, Walter Hack e Giancarlo Pareschi (spalla)<br />
Violas: Arlindo Penteado, Frederick Stephany, Vitorino Borges e Nelson de Macedo<br />
Cellos: Alceu e Marcio Mallard<br />
Simon&rsquo;s: Mazzola<br />
</p>
',
                'faixa_mp3' => '09_calmaria.mp3',
                'faixa_ogg' => '09_calmaria.ogg',
                'disco_id' => '6',   ));

Musicas::create(
            array(
                'faixa' => 'Energia',
                'compositor' => '(Lula Queiroga)',
                'letra' => '<p>Olha que eu conhe&ccedil;o essa cara<br />
Voc&ecirc; chegou de cima<br />
Vem comigo, toma a chave do meu cora&ccedil;&atilde;o<br />
Eu j&aacute; entrei no clima</p>

<p>Olha que eu conhe&ccedil;o esse pique<br />
No seu teatro tamb&eacute;m quero ser atriz<br />
Deixa eu sair no seu bloco<br />
Me la&ccedil;a, me beija, me fa&ccedil;a feliz</p>

<p>O sol raiou<br />
Tomou conta da pra&ccedil;a<br />
Sua energia<br />
O sol raiou<br />
Pra dizer ao pa&iacute;s<br />
Que hoje &eacute; o dia D<br />
</p>
',
'creditos' => '<p>Arranjo e piano Yamaha: Lincoln Olivetti<br />
Bateria Simonsen: T&eacute;o<br />
Oberheim e Jupiter 8: Jorj&atilde;o<br />
Contrabaixo: Paulo Cesar<br />
Trompetes e Fl&uuml;gelhorns: Bidinho, Marcio Montarroyos e Don<br />
Sax alto: Leo Gandelman<br />
Sax tenor: Z&eacute; Carlos<br />
Sax bar&iacute;tono: Aurino<br />
Trombone, Zin e Fl&uuml;gelhorn: Serginho<br />
Guitarra: Robson Jorge<br />
Percuss&atilde;o: Djalma Corr&ecirc;a<br />
Vocal: Tadeu Mathias, Betina, Neila, Loalwa, Lenine, Fernando, Jaime Alem, Nair C&acirc;ndia e Elba<br />
</p>
',
                'faixa_mp3' => '10_energia.mp3',
                'faixa_ogg' => '10_energia.ogg',
                'disco_id' => '6',   ));

Musicas::create(
            array(
                'faixa' => ' Nordeste independente (Imagine o Brasil) (Ao vivo)',
                'compositor' => '(Br&aacute;ulio Tavares / Ivanildo Vila Nova)',
                'letra' => '<p><em>&ldquo;Os pol&iacute;ticos, os homens do poder, esses que deveriam resolver, se empenhar em resolver e solucionar os problemas s&eacute;rios e definitivos do nosso pa&iacute;s, eles permanecem em Bras&iacute;lia no gabinetes, quando se aproxima o ano das elei&ccedil;&otilde;es eles saem de Bras&iacute;lia, n&atilde;o &eacute;? V&atilde;o l&aacute;... eles pegam um avi&atilde;o, v&atilde;o l&aacute; no Nordeste, sobrevoam a regi&atilde;o, n&eacute;?, se certificam de que h&aacute; seca realmente no Nordeste e entra ano, sai ano, nada vem e o sert&atilde;o continua ao deus-dar&aacute;. Ent&atilde;o, diante dessas circunst&acirc;ncias todas &eacute; que o poeta popular j&aacute; t&aacute; fazendo m&uacute;sica, coisas engra&ccedil;adas evidentemente, mas mais ou menos assim: &lsquo;Imagine o Brasil ser dividido e o Nordeste ficar independente&rsquo;. Ent&atilde;o, senhoras e senhores com voc&ecirc;s, Ivanildo Vila Nova e Trupizupe Br&aacute;ulio Tavares, o raio da Cilibrina!&rdquo; Muito obrigado!</em></p>


<p>J&aacute; que existe no Sul esse conceito<br />
Que o Nordeste &eacute; ruim, seco e ingrato<br />
J&aacute; que existe a separa&ccedil;&atilde;o de fato<br />
&Eacute; preciso torn&aacute;-la de direito<br />
Quando um dia qualquer isso for feito<br />
Todos dois v&atilde;o lucrar imensamente<br />
Come&ccedil;ando uma vida diferente<br />
De que a gente at&eacute; hoje tem vivido<br />
Imagina o Brasil ser dividido<br />
E o Nordeste ficar independente</p>

<p>Dividindo a partir de Salvador<br />
O Nordeste seria outro pa&iacute;s<br />
Vigoroso, leal, rico e feliz<br />
Sem dever a ningu&eacute;m no exterior<br />
Jangadeiro seria o senador<br />
O cassaco de ro&ccedil;a era o suplente<br />
Cantador de viola o presidente<br />
O vaqueiro era o l&iacute;der do partido<br />
Imagina o Brasil ser dividido<br />
E o Nordeste ficar independente</p>

<p>Em Recife, o distrito industrial<br />
O idioma ia ser nordestinense<br />
A bandeira de renda cearense<br />
&ldquo;Asa Branca&rdquo; era o hino nacional<br />
O folheto era o s&iacute;mbolo oficial<br />
A moeda, o tost&atilde;o de antigamente<br />
Conselheiro seria o inconfidente<br />
Lampi&atilde;o, o her&oacute;i inesquecido<br />
Imagina o Brasil ser dividido<br />
E o Nordeste ficar independente</p>

<p>O Brasil ia ter de importar<br />
Do Nordeste algod&atilde;o, cana, caju<br />
Carna&uacute;ba, laranja, baba&ccedil;u<br />
Abacaxi e o sal de cozinhar<br />
O arroz, o agave do lugar<br />
O petr&oacute;leo, a cebola, o aguardente<br />
O Nordeste &eacute; autossuficiente<br />
O seu lucro seria garantido<br />
Imagina o Brasil ser dividido<br />
E o Nordeste ficar independente</p>

<p>Se isso a&iacute; se tornar realidade<br />
E algu&eacute;m do Brasil nos visitar<br />
Nesse nosso pa&iacute;s vai encontrar<br />
Confian&ccedil;a, respeito e amizade<br />
Tem o p&atilde;o repartido na metade<br />
Tem o prato na mesa, a cama quente<br />
Brasileiro ser&aacute; irm&atilde;o da gente<br />
Vai pra l&aacute; que ser&aacute; bem recebido<br />
Imagina o Brasil ser dividido<br />
E o Nordeste ficar independente</p>

<p>Eu n&atilde;o quero com isso que voc&ecirc;s<br />
Imaginem que eu tento ser grosseiro<br />
Pois se lembrem que o povo brasileiro<br />
&Eacute; amigo do povo portugu&ecirc;s<br />
Se um dia a separa&ccedil;&atilde;o se fez<br />
Todos os dois se respeitam no presente<br />
Se isso a&iacute; j&aacute; deu certo antigamente<br />
Nesse exemplo concreto e conhecido<br />
Imagina o Brasil ser dividido<br />
E o Nordeste ficar independente</p>
<p><em>Povo do meu Brasil<br />
Pol&iacute;ticos brasileiros<br />
N&atilde;o pensem que voc&ecirc;s nos enganam<br />
Porque nosso povo n&atilde;o &eacute; besta!<br />
</em></p>

',
'creditos' => '<p>Arranjo e guitarra: Zeppa Souza</p>

', 
                'faixa_mp3' => '11_nordeste_independente.mp3',
                'faixa_ogg' => '11_nordeste_independente.ogg',
                'disco_id' => '6',   ));

Musicas::create(
            array(
                'faixa' => 'Fogo Na Mistura',
                'compositor' => '(Tunai / S&eacute;rgio Natureza)',
                'letra' => '<p>Rasga a fantasia<br />
J&aacute; &eacute; quase dia<br />
Dan&ccedil;a que &eacute; pro sol raiar<br />
V&ecirc; que maravilha<br />
M&atilde;e-lua adivinha<br />
Que &eacute; hora e vai deitar</p>

<p>Vai de vento em popa<br />
Sai com pouca roupa<br />
Que o calor pode aumentar<br />
A temperatura<br />
Pra al&eacute;m da fervura<br />
Num del&iacute;rio popular</p>

<p>Fogo na mistura de sabedoria<br />
Desejo, magia, alegria e coisa e tal<br />
Dan&ccedil;ando todo mundo a mil<br />
Brasil, &ldquo;massa real&rdquo;</p>

<p>Afox&eacute;s e frevos<br />
Marcha e samba enredo<br />
Brancos, &iacute;ndios, negros<br />
Euforia nacional<br />
Cantando junto em qualquer tom<br />
Saindo num cord&atilde;o geral<br />
</p>
',
'creditos' => '<p>Arranjo: Hector Garrido<br />
Bateria: Adolfo &ldquo;Fofi&rdquo; Lancha<br />
Baixo: Juarez Hernandez<br />
Guitarra: Ren&eacute; Toledo<br />
Piano Fender: Luis de la Torre<br />
Sintetizador: Steve Quinze<br />
Percuss&atilde;o: Oscar Salas<br />
Vocais: Viviane, Fernando, Celinha, Jaime Alem, Nair C&acirc;ndia, Regina, Br&aacute;ulio, Tadeu Mathias, Jurema C&acirc;ndia, Rosana, Ant&ocirc;nio &ldquo;Foguete&rdquo;, Fatinha, Isabel, Laura, Gilda, Cleuber, Marco, Enaldo, Luiz Fernando, Ana Carla, Magda, Mauro, Gustavo, Massuka, Gabriela, Nana Vaz, Tiago, Paulinho Pizziali, Irene, Er&aacute;cliton, Os Abelhudos (Rodrigo Saldanha, Diego e Tatiana)<br />
</p>
',
                'faixa_mp3' => '01_fogo_na_mistura.mp3',
                'faixa_ogg' => '01_fogo_na_mistura.ogg',
                'disco_id' => '7',   ));

Musicas::create(
            array(
                'faixa' => 'De Volta Pro Aconchego ',
                'compositor' => '(Dominguinhos / Nando Cordel)',
                'letra' => '<p>Estou de volta pro meu aconchego<br />
Trazendo na mala bastante saudade<br />
Querendo um sorriso sincero, um abra&ccedil;o<br />
Para aliviar meu cansa&ccedil;o<br />
E toda essa minha vontade</p>

<p>Que bom poder t&aacute; contigo de novo<br />
Ro&ccedil;ando teu corpo e beijando voc&ecirc;<br />
Pra mim tu &eacute;s a estrela mais linda<br />
Seus olhos me prendem, fascinam<br />
A paz que eu gosto de ter</p>

<p>&Eacute; duro ficar sem voc&ecirc; vez em quando<br />
Parece que falta um peda&ccedil;o de mim<br />
Me alegro na hora de regressar<br />
Parece que vou mergulhar<br />
Na felicidade sem fim<br />
</p>
',
'creditos' => '<p>Arranjo: Dori Caymmi<br />
Bateria: Nico Assun&ccedil;&atilde;o<br />
Viol&atilde;o: Dori<br />
Teclados: Jota<br />
Percuss&atilde;o: Sidinho<br />
Acordeom: Chiquinho e Dominguinhos<br />
Violinos: Giancarlo, Alfredo, Jos&eacute; Alves, Paschoal Perrotta, Michel, Walter Hack, Carlos Hack, Aizik, Francisco Perrotta, Jorge Faini, Luiz Carlos, Virg&iacute;lio Arraes<br />
Violas: Arlindo Penteado, Frederick, Hindenburgo, Jos&eacute; Dias de Lana<br />
Cellos: Alceu de Almeida, Jacques Morelenbaum, Jorge Kundert, Marcio Eymard<br />
</p>
',
                'faixa_mp3' => '02_de_volta_pro_aconchego.mp3',
                'faixa_ogg' => '02_de_volta_pro_aconchego.ogg',
                'disco_id' => '7',   ));

Musicas::create(
            array(
                'faixa' => 'Como Se Fosse a Primavera (Canci&oacute;n) ',
                'compositor' => '(Pablo Milan&eacute;s / Nicolas Guill&eacute;n / vers&atilde;o: Chico Buarque)',
                'letra' => '<p>De que calada maneira<br />
Voc&ecirc; chega assim sorrindo<br />
Como se fosse a primavera<br />
E eu morrendo<br />
E de que modo sutil me derramou na camisa<br />
Todas as flores de abril</p>

<p>Quem lhe disse que eu era<br />
Riso sempre e nunca pranto<br />
Como se fosse a primavera<br />
N&atilde;o sou tanto<br />
No entanto, que espiritual<br />
Voc&ecirc; me d&aacute; uma rosa de seu rosal principal</p>

<p>De que calada maneira<br />
Voc&ecirc; chega assim sorrindo<br />
Como se fosse a primavera e eu morrendo<br />
E eu morrendo<br />
</p>
<p><em>Ide qu&eacute; callada manera<br />
Se me adentra usted sonriendo<br />
Como se fuera la primavera<br />
Yo muriendo</em><br />
</p>
',
'creditos' => '<p>Arranjo: Hector Garrido<br />
Bateria: Adolfo &ldquo;Fofi&rdquo; Lancha<br />
Baixo: Julio Hernandez<br />
Guitarra: Ren&eacute; Toledo<br />
Piano Fender: Luis de la Torre<br />
Percuss&atilde;o: Oscar Salas<br />
Trompete: Tony Concepcion e John Giorginni<br />
Sax tenor: Ed Calle<br />
Sax bar&iacute;tono: Ed Maina<br />
Trombone: Kevin Williams<br />
Surdo: Gordinho<br />
Tamborim: Trambique e Luna<br />
Tamborim/ganz&aacute;: Eliseu<br />
Cu&iacute;ca/agog&ocirc;: Ov&iacute;dio<br />
</p>
',
                'faixa_mp3' => '03_como_se_fosse_a_primavera.mp3',
                'faixa_ogg' => '03_como_se_fosse_a_primavera.ogg',
                'disco_id' => '7',   ));

Musicas::create(
            array(
                'faixa' => 'Desassossego ',
                'compositor' => '(Moraes Moreira / Guilherme Maia)',
                'letra' => '<p>Meu bem me chamou, pediu xamego<br />
Meu nego, t&ocirc; com o p&eacute; na estrada<br />
Me desprezou, desassossego<br />
Eu chego com a madrugada</p>

<p>O meu caminho sigo sempre em dire&ccedil;&atilde;o<br />
O teu carinho, cantinho do teu cora&ccedil;&atilde;o<br />
Viver sozinho, eu n&atilde;o, que dor<br />
U&ocirc;u, u&ocirc;u, u&ocirc;u, sou passarinho<br />
Sou teu condor<br />
E a vida &eacute; nosso ninho de amor<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Baixo: Jorge Degas<br />
Guitarra: Zeppa Souza<br />
Sax: Leo Gandelman<br />
Percuss&atilde;o: Sidinho<br />
Vocais: Regininha, Luna Messina, Cl&aacute;udia Telles, Jurema, Marcio, Tadeu Mathias, Ana L&uacute;cia, Hilton<br />
</p>
',
                'faixa_mp3' => '04_desassossego.mp3',
                'faixa_ogg' => '04_desassossego.ogg',
                'disco_id' => '7',   ));

Musicas::create(
            array(
                'faixa' => 'Mexe... mexe, funga... funga ',
                'compositor' => '(Severo/ Jaguar)',
                'letra' => '<p>Bom sanfoneiro &eacute; aquele que se treme<br />
Sustenta o fole, n&atilde;o cochila no forr&oacute;<br />
Bom sanfoneiro quando cai na forrozada<br />
Deixa doida a mulherada<br />
E a poeira sai do ch&atilde;o<br />
Bom sanfoneiro quando cai na forrozada<br />
Deixa doida a mulherada<br />
E a poeira sai do ch&atilde;o</p>

<p>&Eacute; um bole-bole, um mexe-mexe, um remelexo<br />
&Eacute; um funga-funga na sanfona e no sal&atilde;o</p>

<p>Vem c&aacute; benzinho me faz um carinho<br />
Vem de mansinho como quem n&atilde;o quer<br />
Nada e me puxa, vem devagarinho<br />
Me matar de dengo sem ningu&eacute;m dar p&eacute;<br />
Nada e me puxa, vem devagarinho<br />
Me matar de dengo sem ningu&eacute;m dar p&eacute;<br />
</p>
',
'creditos' => '<p>Arranjo: Dominguinhos e Severo<br />
Bateria: Elber Bedaque<br />
Baixo: Jorj&atilde;o<br />
Guitarra: Zeppa Souza<br />
Teclados: Z&eacute; Am&eacute;rico Bastos<br />
Percuss&atilde;o: Sidinho<br />
Acordeom: Severo e Dominguinhos<br />
Tri&acirc;ngulo: Jo&atilde;o Gomes<br />
Maraca: Lacerda Cavalcante<br />
Zabumba: Geraldo Gomes<br />
Flauta: Z&eacute; da Flauta<br />
Palmas: Mazzola<br />
Vocais: Regininha, Luna Messina, Cl&aacute;udia Telles, Jurema, Marcio, Tadeu Mathias, Hilton<br />
</p>
',
                'faixa_mp3' => '05_mexe_mexe_funga_funga.mp3',
                'faixa_ogg' => '05_mexe_mexe_funga_funga.ogg',
                'disco_id' => '7',   ));

Musicas::create(
            array(
                'faixa' => 'No caminho de Cuba ',
                'compositor' => '(Jaime Alem)',
                'letra' => '<p>Um sanfoneiro, no caminho de Cuba<br />
Um zabumbeiro, no caminho de Cuba<br />
Um triangueiro, no caminho de Cuba<br />
L&aacute; um rumbeiro se chegou<br />
Foi de congas no bai&atilde;o<br />
Misturando la cumbia com xaxado</p>

<p>Obatal&aacute;, no caminho de Cuba<br />
Babaiuiai&ecirc;, no caminho de Cuba<br />
Um canto negro, no caminho de Cuba<br />
L&aacute; um moreno balan&ccedil;ou o meu cora&ccedil;&atilde;o</p>

<p>Eu fui visitar uma ilha<br />
Que fica no Mar das Antilhas<br />
E l&aacute; conheci outra ra&ccedil;a americana<br />
Tamb&eacute;m filha de Olorum<br />
</p>
',
'creditos' => '<p>Arranjo: Hector Garrido<br />
Bateria: Adolfo &ldquo;Fofi&rdquo; Lancha<br />
Baixo: Julio Hernandez<br />
Guitarra: Ren&eacute; Toledo<br />
Piano Fender: Luis de la Torre<br />
Percuss&atilde;o: Oscar Salas<br />
Trumpete: Tony Concepcion e John Giorginni<br />
Sax tenor: Ed Calle<br />
Sax bar&iacute;tono: Ed Maina<br />
Trombone: Kevin Williams<br />
Acordeom: Dominguinhos e Severo<br />
Tri&acirc;ngulo: Sidinho<br />
Vocais: Jackie Molinary, Camelia Torres, Yvette Barge, Xavier Oliva<br />
Arranjo do vocal: Jaime Alem<br />
</p>
',
                'faixa_mp3' => '06_no_caminho_de_cuba.mp3',
                'faixa_ogg' => '06_no_caminho_de_cuba.ogg',
                'disco_id' => '7',   ));

Musicas::create(
            array(
                'faixa' => 'Anjo Do Prazer',
                'compositor' => '(Tadeu Mathias/Jaguar)',
                'letra' => '<p>Olha bem, nego, nesse meu jeitinho<br />
De dan&ccedil;ar chorinho, de dan&ccedil;ar forr&oacute;<br />
De brincadeira, l&aacute; na gafieira<br />
Varo a noite inteira, gosto de um xod&oacute;</p>

<p>Tiro de letra um bolero, um tango<br />
Um xaxado, um mambo<br />
Mando bem no p&eacute;<br />
Tenho estampado aqui no meu rosto<br />
Sou pra qualquer gosto, sou de A e B</p>

<p>Anjo da noite, bandido<br />
Na prata despido<br />
Cambista do prazer</p>

<p>Mas creia, nego<br />
Que me dou, me rendo<br />
Viro rosa, sendo s&oacute; de um beija-flor<br />
Se voc&ecirc; vem, amor, basta um desejo</p>

<p>Nego, sou lampejo<br />
Nego, sou festejo<br />
Nego, s&oacute; me vejo<br />
Um buqu&ecirc; de amor<br />
</p>
',
'creditos' => '<p>
Arranjo: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Baixo: Jorge Degas<br />
Guitarra: Zeppa Souza<br />
Percuss&atilde;o: Sidinho<br />
Trumpete: Bidinho e Nilton Rodrigues<br />
Sax alto: Leo Gandelman<br />
Sax tenor: Marcelo<br />
Trombone: Roberto Marques<br />
Pandeiro/tri&acirc;ngulo: Zizinho<br />
Tamborim/ganz&aacute;: Elizeu<br />
Tamborim/agog&ocirc;: Trambique<br />
Tamborim: Luna e Gordinho<br />
</p>
',
                'faixa_mp3' => '07_anjo_do_prazer.mp3',
                'faixa_ogg' => '07_anjo_do_prazer.ogg',
                'disco_id' => '7',   ));

Musicas::create(
            array(
                'faixa' => 'Equilibrando Os Planos',
                'compositor' => '(Altay Velloso)',
                'letra' => '<p>Onde meus p&eacute;s estiverem<br />
A&iacute; estar&aacute; minha raiz<br />
Pra me sustentar, pra me erguer, me lan&ccedil;ar<br />
Nas asas do vento, da chuva e do sol<br />
Quando meu ch&atilde;o se abala<br />
Estremece &eacute; a minha raiz<br />
Sacudindo os galhos, os frutos e os talos<br />
Que s&oacute; a lucidez j&aacute; me quis</p>

<p>E quando o meu &oacute;dio &eacute; viril<br />
E meu amor &eacute; ardente<br />
Ou minha calma nervosa<br />
Minha ira prudente<br />
S&atilde;o as asas da vida equilibrando os planos</p>

<p>E quando minha voz faz quest&atilde;o<br />
De te dar meu segredo<br />
E o meu cora&ccedil;&atilde;o revelar meus desejos<br />
S&atilde;o os palcos da vida levantando os panos</p>

<p>Onde a raz&atilde;o me levar<br />
Sob o ch&atilde;o estar&aacute; minha raiz<br />
Pra me fortalecer, pra me fortificar<br />
Romper, perdoar ou calar<br />
Se um dia meu sol se esconder<br />
&Eacute; que a noite tamb&eacute;m vive em mim<br />
E a lua vir&aacute; pra alternar minhas mar&eacute;s<br />
As estrelas guiar&atilde;o meus p&eacute;s</p>

<p>E quando o que em mim &eacute; sagrado<br />
Me torna profano<br />
&Eacute; que a n&uacute;ncia vida me quer mais cigano<br />
&Eacute; que a luz dessa noite me quer mais clareza</p>

<p>Nas veias do mundo eu vou sangue<br />
Alimenta e eu vou coragem<br />
As estradas da vida, uma eterna viagem<br />
E a&iacute; se revela minha natureza, minha natureza...<br />
</p>
',
'creditos' => '<p>Arranjo e guitarra: Zeppa Souza<br />
Bateria: Elber Bedaque<br />
Baixo: Jorj&atilde;o<br />
Percuss&atilde;o: Mazzola<br />
</p>
',
                'faixa_mp3' => '08_equilibrando_os_planos.mp3',
                'faixa_ogg' => '08_equilibrando_os_planos.ogg',
                'disco_id' => '7',   ));

Musicas::create(
            array(
                'faixa' => 'Sambai&atilde;ozar',
                'compositor' => '(Pinto do Acordeom)',
                'letra' => '<p>Meu Rio de Janeiro a gente te adora<br />
Mesmo sendo de fora tem que acostumar<br />
Mulata desfilando em Copacabana<br />
Todo fim de semana, vamo forrozar</p>

<p>A gente d&aacute; um duro pra ganhar dinheiro<br />
E gastar com sanfoneiro e tomar banho de mar<br />
A noite carioca deixa a gente louco<br />
Mesmo passando sufoco ningu&eacute;m quer sair de l&aacute;</p>

<p>O Corcovado nos espera de bra&ccedil;os abertos<br />
&Eacute; um sonho certo<br />
A gente acorda pra sonhar<br />
O Rio de Janeiro se mistura com zabumba<br />
Com cu&iacute;ca, com pandeiro pra sambai&atilde;ozar<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Baixo: Jorj&atilde;o<br />
Guitarra: Zeppa Souza<br />
Percuss&atilde;o: Sidinho<br />
Acordeom: Dominguinhos e Severo<br />
Trompete: Bidinho e Nilton Rodrigues<br />
Sax alto: Leo Gandelman<br />
Sax tenor: Marcelo<br />
Trombone: Roberto Marques<br />
Pandeiro: Zizinho<br />
Cu&iacute;ca/agog&ocirc;: Ov&iacute;dio<br />
</p>
',
                'faixa_mp3' => '09_sambaiaozar.mp3',
                'faixa_ogg' => '09_sambaiaozar.ogg',
                'disco_id' => '7',   ));

Musicas::create(
            array(
                'faixa' => 'P&aacute;tria Amada',
                'compositor' => '(Carlos Fernando)',
                'letra' => '<p>Vamos colocar na m&atilde;o do &iacute;ndio<br />
Os bot&otilde;es da inform&aacute;tica<br />
Vamos preparar com raio laser<br />
Uma grande feijoada</p>

<p>Ela tem futuro<br />
Tem, tem, tem<br />
Ela &eacute; o Brasil<br />
Sil, sil, sil<br />
Um surfista lindo a caminho do ano dois mil</p>

<p>Vem, vem ver, P&aacute;tria Amada<br />
Mistura tuas cores<br />
P&otilde;e o p&eacute; na nova estrada</p>

<p>Mistura pra ver como &eacute;<br />
Mistura pra ver se d&aacute; p&eacute;<br />
Mistura pra ver como &eacute;<br />
Mistura pra ver se d&aacute; p&eacute;</p>

<p>O riso, a dor, o canto<br />
O arco-&iacute;ris da paix&atilde;o<br />
A fantasia nua<br />
Da imagem na&ccedil;&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo e DX-7: Eduardo Souto Neto<br />
Arranjo de percuss&atilde;o: Mazzola<br />
Bateria: Elber Bedaque<br />
Baixo: Jorj&atilde;o<br />
Guitarra: Zeppa Souza<br />
Trompete: Bidinho e Nilton Rodrigues<br />
Trombone: Roberto Marques<br />
Sax alto: Leo Gandelman<br />
Sax tenor: Marcelo<br />
Percuss&atilde;o Lin MacLine: Mazzola<br />
Cu&iacute;ca: Ov&iacute;dio<br />
Ganz&aacute;: Wilson Canegal<br />
Tamborim: Luna e Eliseu<br />
Caixa/tamborim: Trambique<br />
Surdo: Gordinho<br />
Vocais: Regininha, Luna Messina, Cl&aacute;udia Telles, Jurema, Marcio, Tadeu Mathias, Ana L&uacute;cia, Hilton<br />
</p>

',
                'faixa_mp3' => '10_patria_amada.mp3',
                'faixa_ogg' => '10_patria_amada.ogg',
                'disco_id' => '7',   ));

Musicas::create(
            array(
                'faixa' => 'Remexer',
                'compositor' => '(Luiz Caldas / Carlinhos Brown)',
                'letra' => '<p>Fugindo da dor<br />
Sentindo o calor<br />
Preparando um ritual<br />
No meio desse ti-ti-ti<br />
Levantando o astral</p>

<p>Pintando essa cor<br />
Mem&oacute;ria de amor<br />
Armando o maior lual<br />
E quem ver o c&eacute;u pode crer<br />
Que n&atilde;o &eacute; nada normal<br />
E quem ver o c&eacute;u pode crer<br />
Que n&atilde;o &eacute; nada normal</p>

<p>Tem um mist&eacute;rio que a gente sempre quer saber<br />
Constela&ccedil;&atilde;o de Orion<br />
Seu tom, seu batom no meu som<br />
Anormal (sensual)<br />
Transa legal, coisa e tal<br />
Anormal (sensual)<br />
Transa legal, coisa e tal</p>

<p>Foi assim que eu vi voc&ecirc;<br />
Remexer<br />
Foi assim que eu vi voc&ecirc;<br />
Remexer</p>
',
'creditos' => '<p>Arranjo e teclados Simons: Z&eacute; Am&eacute;rico Bastos<br />
Bateria Yamaha: T&eacute;o<br />
Contrabaixo: Siz&atilde;o<br />
Viol&otilde;es: Zeppa Souza e Pipiu<br />
Percuss&atilde;o<br />
Congas: Repolho<br />
Bong&ocirc;: Firmino<br />
Trompete: Nilton Rodrigues e Don<br />
Trombone: Mois&eacute;s<br />
Sax tenor: Marcelo Neves<br />
Vocal: Jurema, Chico Pupo, Viviane, Pipiu, Nair C&acirc;ndia, Betina, Tadeu Mathias e Zeppa Souza<br />
</p>
',
                'faixa_mp3' => '01_remexer.mp3', 
                'faixa_ogg' => '01_remexer.ogg',
                'disco_id' => '8',   ));


Musicas::create(
            array(
                'faixa' => 'S&oacute; Se For a Dois',
                'compositor' => '(Rog&eacute;rio Meanda / Cazuza)',
                'letra' => '<p>Aos gurus da &Iacute;ndia<br />
E aos judeus da Palestina<br />
Aos &iacute;ndios da Am&eacute;rica Latina<br />
E aos brancos da &Aacute;frica do Sul</p>

<p>O mundo &eacute; azul<br />
Qual &eacute; a cor do amor<br />
O meu sangue &eacute; negro<br />
Branco, amarelo e vermelho</p>

<p>Aos pernambucanos<br />
E aos cubanos de Miami<br />
Aos americanos russos<br />
Armando os seus planos</p>

<p>Ao povo da China<br />
E o que a hist&oacute;ria ensina<br />
Aos jogos, aos dados<br />
Que inventaram a humanidade</p>

<p>As possibilidades de felicidade<br />
S&atilde;o ego&iacute;stas meu amor<br />
Viver a liberdade<br />
Amar de verdade<br />
S&oacute; se for a dois<br />
&Eacute;, s&oacute; a dois</p>

<p>Aos filhos de Gandhi<br />
Morrendo de fome<br />
Aos filhos de Cristo<br />
Cada vez mais ricos</p>

<p>O beijo do soldado em sua namorada<br />
Seja pra onde for<br />
Depois da grande noite<br />
Vai esconder a cor das flores<br />
E mostrar a dor<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: J&uacute;lio Cesar<br />
Bateria Yamaha: T&eacute;o<br />
Contrabaixo: D&eacute;cio<br />
Guitarra: Pisca<br />
Tumbadora: Geraldo Oliveira<br />
Tenor: Jos&eacute; Carlos Machado<br />
Trompete: Marcio Montarroyos, Paulinho Martins e Alceb&iacute;ades Spinola<br />
Sax bar&iacute;tono: Aurino de Oliveira<br />
Sax alto: Leo Gandelman<br />
</p>
',
                'faixa_mp3' => '02_so_se_for_a_dois.mp3', 
                'faixa_ogg' => '02_so_se_for_a_dois.ogg',
                'disco_id' => '8',   ));

Musicas::create(
            array(
                'faixa' => 'Sonho De Uma Noite De Ver&atilde;o',
                'compositor' => '(Dominguinhos / Jorge Mautner)',
                'letra' => '<p>Voc&ecirc; &eacute; tudo o que eu sonhei<br />
Meu cora&ccedil;&atilde;o<br />
Felicidade &eacute; ter voc&ecirc;<br />
Voc&ecirc; &eacute; um anjo, eu bem sei<br />
Que tem a luz<br />
Que me seduz<br />
Com o supremo dom do veneno<br />
No prazer</p>

<p>Numa noite de ver&atilde;o<br />
Eu sonhei que voei no azul<br />
E que quase esbarrei<br />
Nas estrelas do Cruzeiro do Sul</p>

<p>Na beleza da tristeza<br />
Refletida em seu olhar<br />
Aprendi a te reconhecer<br />
E at&eacute; mesmo a te desconhecer<br />
Te perder e te reencontrar<br />
No labirinto de tudo o que sinto</p>

<p>No sonho que cantando<br />
Vou tentando revelar<br />
No sonho que cantando<br />
Vou tentando revelar<br />
</p>
',
'creditos' => '<p>Arranjo de base e Yamaha CP 70: Cesar Camargo Mariano<br />
Arranjo de cordas: Chiquinho de Moraes<br />
Contrabaixo ac&uacute;stico: Sandrino Santoro<br />
Violas: Frederick Stephany, Arlindo Penteado, Hindenburgo Pereira e Marie Springuel<br />
Violinos: Alfredo Vidal, Jos&eacute; da Silva, Paschoal Perrotta, Jo&atilde;o Daltro, Walter Hack, Carlos Eduardo Hack, Michel Bessler, Aizik Geller, Bernardo Bessler, Francisco Perrotta e Luiz Carlos Marques<br />
Cellos: Alceu Reis, Luiz Fernando Zamith, Jorge Ranewsky e Marie Bernard<br />
</p>
',
                'faixa_mp3' => '03_sonho_de_uma_noite_de_verao.mp3', 
                'faixa_ogg' => '03_sonho_de_uma_noite_de_verao.ogg',
                'disco_id' => '8',   ));

Musicas::create(
            array(
                'faixa' => 'Odil&ecirc;, Odil&aacute;',
                'compositor' => '(Jo&atilde;o Bosco / Martinho da Vila) Participa&ccedil;&atilde;o Especial: Jo&atilde;o Bosco',
                'letra' => '<p>Odil&ecirc;, Odil&aacute;<br />
Que que vem fazer aqui meu irm&atilde;o<br />
Vim sambar<br />
&Ocirc;dil&ecirc;, &Ocirc;dil&aacute;<br />
Que que vem fazer aqui meu irm&atilde;o<br />
Vim sambar, oba</p>

<p>Entra na corrente<br />
Corpo, mente<br />
Cora&ccedil;&atilde;o, pulm&atilde;o<br />
Pra junto com a gente<br />
Viajar na energia-som<br />
Quem veio de longe atravessou raio e trov&atilde;o<br />
Pra cair no samba e receber a vibra&ccedil;&atilde;o</p>

<p>Com a negrada do Harlem<br />
Jesus Cristo tamb&eacute;m vem<br />
Pra sair do transe s&oacute; com o sino de Bel&eacute;m<br />
Quem faz romaria e prociss&atilde;o samba tamb&eacute;m<br />
E quem t&aacute; com a gente<br />
T&aacute; com o povo do al&eacute;m</p>

<p>Quem samba se sobe tem comb&aacute;, tem gurufim<br />
Teve um olho d&rsquo;&aacute;gua e um sorriso de marfim<br />
Se volta beijada &eacute; pigmeu ou curumim<br />
Vira um preto velho<br />
Pra sambar com a gente assim</p>

<p>Preta velha bate p&eacute;<br />
Bate colher, levanta p&oacute;<br />
D&aacute; marafo pro Odil&ecirc; que solta logo seu gog&oacute;<br />
Odil&aacute; de madrugada nem sem viola t&aacute; s&oacute;<br />
Pois t&aacute; com ax&eacute; da velha<br />
Nega preta sua av&oacute;<br />
</p>
',
'creditos' => '<p>Arranjo e Yamaha CP 70: C&eacute;sar Camargo Mariano<br />
Viol&atilde;o (Participa&ccedil;&atilde;o especial): Jo&atilde;o Bosco<br />
Contrabaixo: Nico Assump&ccedil;&atilde;o<br />
Percuss&atilde;o: Repolho<br />
Surdo e teclados (efeitos): Mazzola<br />
Vocal: Dinor&aacute;, Viviane, Karla dos Santos, Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Marcio Lott, Tufic e Copacabana</p>
',
                'faixa_mp3' => '04_odile_odila.mp3', 
                'faixa_ogg' => '04_odile_odila.ogg',
                'disco_id' => '8',   ));

Musicas::create(
            array(
                'faixa' => 'Boca Do Bal&atilde;o',
                'compositor' => '(Moraes Moreira / Zeca Barreto / Fred G&oacute;es)',
                'letra' => '<p>Na cidade grande<br />
Por mais que eu ande<br />
Ainda me espanto<br />
Quando ou&ccedil;o uma explos&atilde;o</p>

<p>L&aacute; no interior sempre era S&atilde;o Jo&atilde;o<br />
L&aacute; no interior sempre era S&atilde;o Jo&atilde;o</p>

<p>Viva S&atilde;o Jo&atilde;o<br />
Meu carneirinho<br />
Como te esperei<br />
Ano inteirinho</p>

<p>Ao p&eacute; da fogueira<br />
Madeira, velame<br />
Que o nosso amor inflame a noite inteira<br />
Na esteira ou no ch&atilde;o<br />
A gente se esquenta<br />
E arrebenta a boca do bal&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo de base, metais e teclados: Lincoln Olivetti<br />
Baixo: Fernandinho<br />
Metais: Marcio Montarroyos, Bidinho, Leo Gandelman e Z&eacute; Nogueira<br />
Percuss&atilde;o: Ariovaldo<br />
Surdo: Gordinho<br />
Pandeiro: Mazzola<br />
Castanhola: Chacal<br />
Acordeom: Dominguinhos<br />
Efeito de explos&atilde;o: Barroso<br />
</p>
',
                'faixa_mp3' => '05_boca_do_balao.mp3', 
                'faixa_ogg' => '05_boca_do_balao.ogg',
                'disco_id' => '8',   ));

Musicas::create(
            array(
                'faixa' => 'Nen&eacute;m Mulher',
                'compositor' => '(Pinto do Acordeom)',
                'letra' => '<p>Nen&eacute;m, nen&eacute;m, nen&eacute;m<br />
O que aconteceu?<br />
T&atilde;o todos te querendo<br />
Tu vem ficar mais eu<br />
&Oacute; nen&eacute;m, nen&eacute;m, meu bem<br />
Me d&aacute; teu cora&ccedil;&atilde;o<br />
Que eu caso com voc&ecirc;<br />
Nessa noite de ver&atilde;o</p>

<p>Basta ver como estou<br />
Enjeitado, sem amor<br />
Vem depressa me abra&ccedil;ar<br />
E por toda vida<br />
Nunca mais nos separar<br />
</p>
',
'creditos' => '<p>Arranjo, DX-7 e acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Contrabaixo: Pipiu<br />
Guitarra: Zeppa Souza<br />
Percuss&atilde;o: Firmino<br />
</p>
',
                'faixa_mp3' => '06_nenem_mulher.mp3', 
                'faixa_ogg' => '06_nenem_mulher.ogg',
                'disco_id' => '8',   ));

Musicas::create(
            array(
                'faixa' => 'Chorando e Cantando',
                'compositor' => '(Geraldo Azevedo / Fausto Nilo)',
                'letra' => '<p>Quando fevereiro chegar<br />
Saudade j&aacute; n&atilde;o mata a gente<br />
A chama continua<br />
No ar<br />
O fogo vai deixar semente<br />
A gente ri, a gente chora<br />
Ai, ai, a gente chora<br />
Fazendo a noite parecer um dia<br />
Faz mais<br />
Depois faz acordar cantando<br />
Pra fazer e acontecer<br />
Verdades e mentiras<br />
Faz crer<br />
Faz desacreditar de tudo<br />
E depois<br />
Depois amor, &ocirc;, &ocirc;, &ocirc;, &ocirc;</p>

<p>Ningu&eacute;m, ningu&eacute;m ver&aacute;<br />
O que eu sonhei<br />
S&oacute; voc&ecirc;, meu amor<br />
Ningu&eacute;m ver&aacute; o sonho<br />
Que eu sonhei</p>

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
Faz desacreditar de tudo<br />
E depois<br />
Depois amor, &ocirc;, &ocirc;, &ocirc;, &ocirc;<br />
</p>
',
'creditos' => '<p>Arranjo: Chiquinho de Moraes<br />
Bateria Yamaha: T&eacute;o<br />
Contrabaixo: D&eacute;cio<br />
Guitarra: Ricardo Silveira<br />
DX-7 Mirage: Ant&ocirc;nio Adolfo<br />
Sax: Paul Liberman<br />
Harm&ocirc;nica (Gaita de boca): Maur&iacute;cio Einhorn<br />
Violas: Frederick Stephany, Arlindo Penteado, Hindenburgo Pereira e Marie Christine<br />
Cellos: Alceu Reis, Luiz Fernando Zamith, Jorge Ranewsky e Marie Bernard<br />
Contrabaixo ac&uacute;stico: Sandrino Santoro<br />
Violinos: Giancarlo Pareschi (spalla), Alfredo Vidal, Jos&eacute; da Silva, Paschoal Perrotta, Jo&atilde;o Daltro, Walter Hack, Carlos Eduardo Hack, Michel Bessler, Aizik Geller, Bernardo Bessler, Francisco Perrotta e Luiz Carlos Marques<br />
</p>
',
                'faixa_mp3' => '07_chorando_e_cantando.mp3', 
                'faixa_ogg' => '07_chorando_e_cantando.ogg',
                'disco_id' => '8',   ));

Musicas::create(
            array(
                'faixa' => 'Forr&oacute; Temperado',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Cabra pra voc&ecirc; entrar nesse forr&oacute;<br />
Tem que pedir licen&ccedil;a<br />
Tem que derramar suor<br />
Tem que ser cabra macho<br />
Ter um n&oacute; na goela<br />
Botar fogo na panela<br />
Queimar pra derreter<br />
Al&eacute;m de se mexer<br />
Ter sebo na canela<br />
Ser como uma arruela<br />
Quando a coisa arrochar<br />
N&atilde;o vai desanimar<br />
Quando o forr&oacute; esquenta<br />
Cabra que n&atilde;o aguenta<br />
Chama a mam&atilde;e pra mamar</p>

<p>Mamar, mamar, mamar<br />
Cabra que n&atilde;o aguenta<br />
Chama a mam&atilde;e pra mamar<br />
Mamar, mamar, mamar<br />
Cabra que n&atilde;o aguenta<br />
Chama a mam&atilde;e pra mamar</p>

<p>Aqui s&oacute; entra mulher<br />
Aqui s&oacute; entra homem<br />
Se o cabra n&atilde;o tem nome<br />
N&atilde;o &eacute; homem pra entrar<br />
&Eacute; na entrada que se mostra o documento<br />
Se voc&ecirc; n&atilde;o tem talento<br />
N&atilde;o pode furruriar<br />
Esse forr&oacute; &eacute; temperado na pimenta<br />
Cabra que n&atilde;o aguenta<br />
Chama a mam&atilde;e pra mamar</p>
',
'creditos' => '<p>Arranjo e DX-7: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Contrabaixo: Pipiu<br />
Guitarra: Zeppa Souza<br />
Percuss&atilde;o: Firmino<br />
Acordeom: Marquinho<br />
Sax tenor: Marcelo Neves<br />
Trombone: Mois&eacute;s<br />
Trompete: Paulinho Martins<br />
</p>
',
                'faixa_mp3' => '08_forro_temperado.mp3', 
                'faixa_ogg' => '08_forro_temperado.ogg',
                'disco_id' => '8',   ));

Musicas::create(
            array(
                'faixa' => 'Vestido Suado',
                'compositor' => '(Tadeu Mathias)',
                'letra' => '<p>Quando sei de um forr&oacute;<br />
Eu me mando pra l&aacute;<br />
E descolo um moreno<br />
Que seja bom de dan&ccedil;ar<br />
Uma flor no cabelo<br />
Um vestido de fita<br />
Um batom encarnado<br />
Que me faz mais bonita</p>

<p>Quando sei de um forr&oacute;<br />
Eu me mando pra l&aacute;<br />
Vou gastando a chinela<br />
At&eacute; o dia clarear<br />
Se &eacute; pertinho ou distante<br />
Eu n&atilde;o quero nem saber<br />
O que eu quero &eacute; forrozar<br />
Nos seus bra&ccedil;os debru&ccedil;ar<br />
Hoje eu vou derreter</p>

<p>E dan&ccedil;o prum lado<br />
Me lan&ccedil;o pro outro<br />
&Eacute; um salto quebrado<br />
Meu nego torto<br />
O vestido suado<br />
E o povo em coro<br />
A alegria na sala<br />
N&atilde;o d&aacute; lugar pro choro<br />
O vestido suado<br />
E o povo em coro<br />
A alegria na sala<br />
N&atilde;o d&aacute; lugar pro choro<br />
</p>
',
'creditos' => '<p>Arranjo e DX-7: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Contrabaixo: Pipiu<br />
Guitarra: Zeppa Souza<br />
Percuss&atilde;o: Firmino<br />
Acordeom: Marquinho<br />
Sax tenor: Marcelo Neves<br />
Trombone: Mois&eacute;s<br />
Trompete: Paulinho Martins<br />
Vocal: Marcio Lott, Ana L&uacute;cia, Nair C&acirc;ndia, Viviane, Jurema, Liliane, Jaime Alem, Chico Pupo e Paulo Valente<br />
</p>
',
                'faixa_mp3' => '09_vestido_suado.mp3', 
                'faixa_ogg' => '09_vestido_suado.ogg',
                'disco_id' => '8',   ));

Musicas::create(
            array(
                'faixa' => 'Sai Da Frente',
                'compositor' => '(Gonzaguinha)',
                'letra' => '<p>Mantenha a calma, a f&eacute; e a coragem<br />
E traga a alma pra rua<br />
Seja a alegria a guia<br />
Conquiste o brilho do sol e da lua</p>

<p>A ra&ccedil;a, a gra&ccedil;a, a pra&ccedil;a, a ta&ccedil;a<br />
&Eacute; tudo coisa nossa<br />
E seja na bossa<br />
Seja na tro&ccedil;a<br />
Me aperte e vamo nessa, meu bem</p>

<p>Cora&ccedil;&atilde;o<br />
O tambor<br />
O tes&atilde;o<br />
Vai subir<br />
&Eacute; amor<br />
&Eacute; raz&atilde;o<br />
Sai da frente<br />
Que a gente quer ser feliz<br />
Quero mais<br />
Muito mais<br />
Muito mar<br />
Muita paz<br />
O prazer<br />
Muito mel dessa flor se abrindo<br />
No nosso pa&iacute;s<br />
</p>
',
'creditos' => '<p>Arranjo e Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Contrabaixo: Pipiu<br />
Guitarra: Zeppa Souza<br />
Percuss&atilde;o: Firmino<br />
Repique: Trambique<br />
Tamborim: Ney, Pedro, Nelson e Vivaldo<br />
Sax tenor: Marcelo Neves<br />
Trombone: Mois&eacute;s<br />
Trompete: Don<br />
Vocal: Fernando Adour, Chico Pupo, Viviane, Pipiu, Nair C&acirc;ndia, Betina, Tadeu Mathias e Rosa Lobo<br />
</p>
',
                'faixa_mp3' => '10_sai_da_frente.mp3', 
                'faixa_ogg' => '10_sai_da_frente.ogg',
                'disco_id' => '8',   ));

Musicas::create(
            array(
                'faixa' => 'Caia Na Real',
                'compositor' => '(Carlos Fernando / Eloísa Santos)',
                'letra' => '<p>Caia por cima de mim<br />
Que esse frevo t&aacute; no tempo de arrepiar<br />
Deixa pra l&aacute; o que &eacute; ruim<br />
Bem juntinho de mim vamo rebentar<br />
A solid&atilde;o, a extens&atilde;o de um perigo nuclear<br />
O que &eacute; bom vai vingar</p>

<p>Atr&aacute;s da lua, na terra, no fundo do mar<br />
Aqui na rua o bloco vai gargalhar<br />
E a multid&atilde;o cantando &ldquo;Vai raiar&rdquo;<br />
Caia por cima de mim<br />
Na hora H<br />
</p>
',
'creditos' => '<p>Arranjo e teclado: Lincoln Olivetti<br />
Contrabaixo: Fernandinho<br />
Surdo: Mazzola<br />
Sax alto: Leo Gandelman<br />
Tenor: Jos&eacute; Carlos Machado<br />
Trompete: Alcides Spinola e Marcio Montarroyos<br />
Vocal: Fernando Adour, Chico Pupo, Viviane, Pipiu, Nair C&acirc;ndia, Betina, Tadeu Mathias e Rosa Lobo<br />
</p>
',
                'faixa_mp3' => '11_caia_na_real.mp3', 
                'faixa_ogg' => '11_caia_na_real.ogg',
                'disco_id' => '8',   ));

Musicas::create(
            array(
                'faixa' => 'Ai De Mim',
                'compositor' => '(Luiz Caldas)',
                'letra' => '<p>O azul &eacute; prova dessa pomba paz<br />
O preto &eacute; brilho e essa luz me faz<br />
Sentir a rosa e namorar o espinho<br />
Conseguir carinho, n&atilde;o sofrer jamais</p>

<p>As cores brancas leves de algod&atilde;o<br />
Vermelho sangue cresce minha paix&atilde;o<br />
Eternidade, cravo de amargura<br />
Vira uma pintura, pinta o cora&ccedil;&atilde;o</p>

<p>Ai, ai, ai, tem d&oacute; de mim<br />
Seja minha flor<br />
Que eu serei o seu jardim<br />
Ai, ai, ai, ai, tem d&oacute; de mim<br />
Seja minha flor<br />
Que eu serei o seu jardim</p>

<p>No rosa-choque o seu batom lil&aacute;s<br />
Sempre me instiga, mas n&atilde;o satisfaz<br />
Me deixa louco como fica o caule<br />
Quando a gente arranca a rosa branca da paz</p>

<p>Um olho cego pode ver a mais<br />
Um cora&ccedil;&atilde;o v&ecirc; at&eacute; por tr&aacute;s<br />
A natureza me inspirou beleza<br />
Pois ela &eacute; alteza no que sempre faz</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia, piano Yamaha, DX-7 e Mirage: Z&eacute; Am&eacute;rico Bastos<br />
Guitarra e GR 700: Zeppa Souza<br />
Baixo: Pipiu<br />
Bateria: Elber Bedaque<br />
Bongo e kik&oacute;: Firmino<br />
Tri&acirc;ngulo e afox&eacute;: Camilo Mariano<br />
Sax soprano: Marcelo Neves<br />
Trombone: Mois&eacute;s<br />
</p>
',
                'faixa_mp3' => '01_ai_de_mim.mp3', 
                'faixa_ogg' => '01_ai_de_mim.ogg',
                'disco_id' => '9',   ));

Musicas::create(
            array(
                'faixa' => 'Folia Brasileira',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>Tem que ter molejo, meu bem<br />
Tem que ter tempero, meu bem<br />
Se agarrar com jeito<br />
Se esfregar direito<br />
Nesse vai e vem</p>

<p>O forr&oacute; tem que ser agarradinho<br />
Tem que ser no escurinho<br />
Tem que se aproveitar<br />
O forr&oacute; &eacute; uma folia brasileira<br />
S&oacute; acaba a brincadeira<br />
Quando o dia clarear</p>

<p>Tem que ter<br />
Perna batendo com perna<br />
Coxa ro&ccedil;ando com coxa<br />
No umbigo e no pesco&ccedil;o</p>

<p>Tem que ter<br />
Um ro&ccedil;a-ro&ccedil;a toda hora<br />
Um pra dentro, outro pra fora<br />
Pra gente sentir o gosto<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Acordeom: Marcos Farias<br />
Maraca: Losa<br />
Tri&acirc;ngulo e cicerro: Tinda<br />
Zabumba: C&iacute;cero e Firmino<br />
Guitarra e vocal: Zeppa Souza<br />
Baixo: Pipiu<br />
Bateria: Elber Bedaque<br />
Pandeiro: Zizinho<br />
Tri&acirc;ngulo, surdo, bongo e pandeiro: Firmino<br />
Trompetes: Paulinho Martins, Paulinho Roberto e Don<br />
Sax tenor: Marcelo Neves<br />
Sax alto: Z&eacute; Carlos<br />
Trombone: Mois&eacute;s<br />
Vocal: Jurema, Jussara, Betina, Regininha, Marcio Lott, Hilton Assun&ccedil;&atilde;o, Jaime Alem, Nair C&acirc;ndia e Jurema C&acirc;ndia<br />
</p>
',
                'faixa_mp3' => '02_folia_brasileira.mp3', 
                'faixa_ogg' => '02_folia_brasileira.ogg',
                'disco_id' => '9',   ));

Musicas::create(
            array(
                'faixa' => 'Vem Ficar Comigo',
                'compositor' => '(Nando Cordel / Dominguinhos)',
                'letra' => '<p>Vem ficar comigo<br />
Vem ser a luz da minha estrada<br />
Vivo esperando esse c&eacute;u para brilhar<br />
Teu sorriso lindo<br />
A tua boca doce sempre<br />
Eu necessito do teu amor<br />
Pra me enfeitar</p>

<p>Vem brincar comigo<br />
Vem cuidar de mim<br />
S&oacute; teu para&iacute;so &eacute; quem me faz viver feliz<br />
N&atilde;o me deixe solta<br />
Posso me perder<br />
De tudo no mundo<br />
O que eu mais quero &eacute; ter voc&ecirc;<br />
</p>
',
'creditos' => '<p>Arranjo de cordas, piano Yamaha e Mirage: Z&eacute; Am&eacute;rico Bastos<br />
Arranjo de base: Hilton Assun&ccedil;&atilde;o<br />
Baixo: Pipiu<br />
Bateria: Elber Bedaque<br />
Guitarra: Zeppa Souza<br />
Xique-xique e pandeiro: Zeppa Souza<br />
Acordeom: Dominguinhos<br />
</p>
',
                'faixa_mp3' => '03_vem_ficar_comigo.mp3', 
                'faixa_ogg' => '03_vem_ficar_comigo.ogg',
                'disco_id' => '9',   ));

Musicas::create(
            array(
                'faixa' => 'Quero Mais',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>O frevo t&aacute; no sangue do povo<br />
No morro, na rua<br />
O frevo deixa a gente louco<br />
Leve, afoito<br />
Ati&ccedil;a a gente se amar<br />
N&atilde;o d&aacute; pra segurar<br />
N&atilde;o d&aacute; pra segurar<br />
Ati&ccedil;a a gente se amar<br />
N&atilde;o d&aacute; pra segurar<br />
N&atilde;o d&aacute; pra segurar</p>

<p>Quero mais<br />
Quero mais<br />
Pra me derreter<br />
Quero mais<br />
Quero mais<br />
Fazer com voc&ecirc;<br />
Quero mais<br />
Quero mais<br />
Toda energia<br />
&Ecirc;ta coisa boa t&aacute; nessa folia<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Guitarra e vocal: Zeppa Souza<br />
Baixo: Pipiu<br />
Bateria: Elber Bedaque<br />
Tri&acirc;ngulo, surdo, bongo e pandeiro: Firmino<br />
Trompetes: Paulinho Martins, Paulinho Roberto e Don<br />
Sax tenor: Marcelo Neves<br />
Sax alto: Z&eacute; Carlos<br />
Trombone: Mois&eacute;s<br />
Pandeiro: Zizinho<br />
Acordeom: Dominguinhos<br />
Guitarra baiana: Armandinho<br />
Vocal: Jurema, Jussara, Betina, Regininha, Marcio Lott, Hilton Assun&ccedil;&atilde;o, Jaime Alem, Nair C&acirc;ndia e Jurema C&acirc;ndia<br />
</p>
',
                'faixa_mp3' => '04_quero_mais.mp3', 
                'faixa_ogg' => '04_quero_mais.ogg',
                'disco_id' => '9',   ));

Musicas::create(
            array(
                'faixa' => 'Ginga',
                'compositor' => '(Tadeu Mathias)',
                'letra' => '<p>&Eacute; o c&eacute;u, &eacute; o c&eacute;u, &eacute; o c&eacute;u<br />
Essa ginga da gente &eacute; o c&eacute;u<br />
&Eacute; o c&eacute;u, &eacute; o c&eacute;u, &eacute; o c&eacute;u<br />
Essa ginga da gente &eacute; o c&eacute;u</p>

<p>Ginga Brasil no balan&ccedil;o da rede<br />
Remexe no remo do remador<br />
De dia a feira &eacute; festa de rua<br />
De noite na praia ciranda e amor</p>

<p>Muita alegria ra&ccedil;a brasileira<br />
Ginga que a gente j&aacute; miscigenou<br />
O povo se lan&ccedil;a num vento nordeste<br />
E &eacute; nessa dan&ccedil;a do povo que eu vou</p>

<p>Olha a cintura (&eacute; ela)<br />
Sente o chamego (&eacute; ela)<br />
Subindo o morro (&eacute; ela)</p>

<p>Maracatu (&eacute; ela)<br />
Quem dan&ccedil;a lundu (&eacute; ela)<br />
Pagode na favela (&eacute; ela)</p>

<p>Rio de Janeiro (&eacute; ela)<br />
Samba no p&eacute; (&eacute; ela)<br />
E a brasileira (&eacute; ela)</p>

<p>Que tem cor de canela (&eacute; ela)<br />
Gilberto Gil (&eacute; ela)<br />
L&aacute; da Bahia (&eacute; ela)<br />
&Eacute; ela, &eacute; ela, &eacute; ela<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia, piano Yamaha e DX-7: Z&eacute; Am&eacute;rico Bastos<br />
Guitarra e vocal: Zeppa Souza<br />
Baixo: Pipiu<br />
Bateria e percuss&atilde;o: Elber Bedaque<br />
Congas LP e percuss&atilde;o: Firmino<br />
Trompetes: Paulinho Martins, Paulinho Roberto e Don<br />
Sax tenor: Marcelo Neves<br />
Sax alto: Z&eacute; Carlos<br />
Trombone: Mois&eacute;s<br />
Vocal: Jurema, Jussara, Betina, Regininha, Marcio Lott, Hilton Assun&ccedil;&atilde;o, Jaime Alem, Nair C&acirc;ndia e Jurema C&acirc;ndia<br />
</p>
',
                'faixa_mp3' => '05_ginga.mp3', 
                'faixa_ogg' => '05_ginga.ogg',
                'disco_id' => '9',   ));

Musicas::create(
            array(
                'faixa' => 'N&oacute;s Destinos',
                'compositor' => '(Moraes Moreira)',
                'letra' => '<p>Na pessoa de Jo&atilde;o<br />
Muito milho no paiol<br />
Quando inverna a esta&ccedil;&atilde;o<br />
Natal cidade do sol<br />
Natal cidade do sol</p>

<p>Sim, somos da mesma laia<br />
Que nem castanha e caju<br />
At&eacute; l&aacute; naquela praia<br />
De Atalaia &agrave; Aracaju</p>

<p>Sou nordestina<br />
E aprendi desde menina<br />
Ter orgulho dessa gente<br />
Que um dia independente<br />
Vai viver, voc&ecirc;s ver&atilde;o</p>

<p>Cabra-da-peste no sentido mais profundo<br />
Ser um cidad&atilde;o do mundo<br />
Luiz Gonzaga<br />
Padim Ci&ccedil;o e Lampi&atilde;o</p>

<p>Quero mais n&atilde;o<br />
Viver em guerra ou no abandono<br />
Em muita terra e pouco dono<br />
Viver em guerra ou no abandono<br />
Em muita terra e pouco dono</p>

<p>&Eacute;s a minha Fortaleza<br />
Forte beleza combina<br />
Verdes mares correnteza<br />
Da paisagem nordestina<br />
Da paisagem nordestina</p>

<p>Bom Alah das Alagoas<br />
Ata ou desata esse n&oacute;<br />
Da cabe&ccedil;a das pessoas<br />
M&atilde;o na massa em Macei&oacute;<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia, piano, DX-7 e Mirage: Z&eacute; Am&eacute;rico Bastos<br />
Guitarra e GR 700: Zeppa Souza<br />
Bateria: Elber Bedaque<br />
Tri&acirc;ngulo, kik&oacute; e afox&eacute;: Firmino<br />
Acordeom: Dominguinhos<br />
Bandolim: Armandinho<br />
</p>
',
                'faixa_mp3' => '06_nos_destinos.mp3', 
                'faixa_ogg' => '06_nos_destinos.ogg',
                'disco_id' => '9',   ));

Musicas::create(
            array(
                'faixa' => 'Rumbaiana',
                'compositor' => '(Tadeu Mathias)',
                'letra' => '<p>Vou fazer uma rumbaiana<br />
Como a minha irm&atilde; cigana me ensinou<br />
Uma dan&ccedil;a bonita e mundana<br />
Vai ganhar todo o seu amor</p>

<p>Mexe, mexe<br />
Mexe de prazer<br />
Ao som da rumba quero ver voc&ecirc; mexer<br />
Mexe, mexe<br />
Mexe de prazer<br />
Ao som da rumba quero ver voc&ecirc; mexer</p>

<p>Quero ver voc&ecirc; dan&ccedil;ando coladinho<br />
Teu suor vem me molhando o corpo todo<br />
Tu e eu, ai, eu e tu agarradinho<br />
E todo mundo escorregando nesse lodo<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Guitarra: Zeppa Souza<br />
Bateria: Elber Bedaque<br />
Congas LP, bongo, guiro, klave, cicerro e timbales LP: Firmino<br />
Trompetes: Paulinho Martins, Paulinho Roberto e Don<br />
Sax tenor: Marcelo Neves<br />
Trombone: Mois&eacute;s<br />
Sax alto: Z&eacute; Carlos<br />
Vocal: Elba Ramalho<br />
</p>
',
                'faixa_mp3' => '07_rumbaiana.mp3', 
                'faixa_ogg' => '07_rumbaiana.ogg',
                'disco_id' => '9',   ));

Musicas::create(
            array(
                'faixa' => 'Lembrando Voc&ecirc;',
                'compositor' => '(Sergio Souto / Moacyr Luz)',
                'letra' => '<p>L&aacute;, quando eu ouvia o canto do albatroz<br />
Eu l&aacute; sabia o que era um albatroz<br />
O que eu mesmo queria era lembrar voc&ecirc;<br />
O teu cheirinho de flor que nasce do ip&ecirc;</p>

<p>Sim, eu te perdi como quem perde a voz<br />
E vi secar as &aacute;guas do or&oacute;s<br />
O sal do mar, a flor-de-lis<br />
Um beija-flor</p>

<p>Vi meu cora&ccedil;&atilde;o sofrer<br />
Eu vi tamb&eacute;m o que eu nem pude crer<br />
&Eacute; que o pranto quando molha<br />
Desce at&eacute; manchar<br />
A seca l&aacute; fora n&atilde;o quer mais armar</p>

<p>E eu lembrando voc&ecirc;<br />
Ai, essa saudade atroz<br />
Se um de n&oacute;s aparecer<br />
Abro a mala dos len&ccedil;&oacute;is<br />
</p>
',
'creditos' => '<p>Arranjo, piano Yamaha, DX-7 e Mirage: Z&eacute; Am&eacute;rico Bastos<br />
Guitarra e GR 700: Zeppa Souza<br />
Bateria e afox&eacute;: Elber Bedaque<br />
Baixo: Pipiu<br />
Reco-reco, kik&oacute; e woodblock: Firmino<br />
Flauta: Marcelo Neves<br />
Trompete: Paulinho Martins<br />
Trombone: Mois&eacute;s<br />
Acordeom: Dominguinhos<br />
</p>
',
                'faixa_mp3' => '08_lembrando_voce.mp3', 
                'faixa_ogg' => '08_lembrando_voce.ogg',
                'disco_id' => '9',   ));

Musicas::create(
            array(
                'faixa' => 'Corcel Na Tempestade',
                'compositor' => '(Adauto Magalha / Almir Guineto)',
                'letra' => '<p>Hoje meu cora&ccedil;&atilde;o &eacute; s&oacute; saudade<br />
Vive adversidade<br />
A tristeza mora em mim<br />
Eu que j&aacute; senti felicidade<br />
Vivo a dura realidade<br />
Nosso amor chegou ao fim</p>

<p>Com voc&ecirc; deixei a mocidade<br />
No teu corpo a virgindade<br />
O que &eacute; bom vive t&atilde;o pouco</p>

<p>Deixo o meu corcel na tempestade<br />
Galopando na saudade<br />
Procurando por voc&ecirc;<br />
Deixo o meu corcel na tempestade<br />
Ando doida de saudade<br />
De saudade de voc&ecirc;</p>

<p>Meu amor n&atilde;o me esque&ccedil;a<br />
N&atilde;o te esquecerei<br />
Em muito sonho ainda<br />
Eu te encontrarei<br />
</p>
',
'creditos' => '<p>Arranjo de cordas, DX-7 e Mirage (cordas): Z&eacute; Am&eacute;rico Bastos<br />
Arranjo de base e viol&atilde;o Ovation: Hilton Assun&ccedil;&atilde;o<br />
Baixo: Pipiu<br />
Bateria: Elber Bedaque<br />
Guitarra e GR 700: Zeppa Souza<br />
Klave LP, xique-xique, sino e afox&eacute;: Firmino<br />
Acordeom: Dominguinhos<br />
Bandolim: Armandinho</p>
',
                'faixa_mp3' => '09_corcel_na_tempestade.mp3', 
                'faixa_ogg' => '09_corcel_na_tempestade.ogg',
                'disco_id' => '9',   ));

Musicas::create(
            array(
                'faixa' => 'Da Mesa Pra Cama',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Depois do banho<br />
Eu me perfumo e arrumo a cama<br />
Porque quem ama<br />
N&atilde;o escolhe hora pra brincar<br />
&Eacute; t&atilde;o dif&iacute;cil um amor desse jeito, perfeito<br />
Que &agrave;s vezes penso<br />
Que um dia voc&ecirc; vai me deixar</p>

<p>Mas quando voc&ecirc; me beija<br />
Eu tamb&eacute;m lhe beijo<br />
Mais aumenta o meu desejo<br />
Esquentando meu cora&ccedil;&atilde;o<br />
E esse molejo &eacute; voc&ecirc; quem me d&aacute;<br />
Tem gracejo, um desmaio, um relampejo<br />
&Eacute; um raio essa sensa&ccedil;&atilde;o</p>

<p>Ent&atilde;o a gente se abra&ccedil;a<br />
Se beija, rebeija<br />
Vai vivendo nessa peleja<br />
Fugindo da solid&atilde;o</p>

<p>Que bom quando a gente se ama<br />
Quando esse amor tem um qu&ecirc;<br />
Assim &eacute; da mesa pra cama<br />
Eu e voc&ecirc;<br />
</p>
',
'creditos' => '<p>Arranjo e piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Acordeom: Marcos Farias<br />
Zabumba: C&iacute;cero<br />
Tri&acirc;ngulo: Tinda<br />
Maraca e agog&ocirc;: Losa<br />
Guitarra e vocal: Zeppa Souza<br />
Baixo: Pipiu<br />
Bateria: Elber Bedaque<br />
Pandeiro: Zizinho<br />
Sax tenor: Marcelo Neves<br />
Trombone: Mois&eacute;s<br />
Trompete: Paulinho Martins<br />
Vocal: Jurema, Jussara, Betina, Regininha, Marcio Lott, Hilton Assun&ccedil;&atilde;o, Jaime Alem, Nair C&acirc;ndia e Jurema C&acirc;ndia<br />
</p>
',
                'faixa_mp3' => '10_da_mesa_pra_cama.mp3', 
                'faixa_ogg' => '10_da_mesa_pra_cama.ogg',
                'disco_id' => '9',   ));

Musicas::create(
            array(
                'faixa' => 'Sina De Cigarra',
                'compositor' => '(Jackson do Pandeiro / Delmiro Ramos)',
                'letra' => '<p>Nasci com a sina de cigarra<br />
Aonde eu chegar tem farra</p>

<p>I&ecirc;, i&ecirc;, i&ecirc;i, nasci pra cantar eu cantarei<br />
I&ecirc;, i&ecirc;, i&ecirc;i, nasci pra cantar eu cantarei</p>

<p>Vive o pedreiro do prumo<br />
A abelha do sumo<br />
O pescador de anzol</p>

<p>O campe&atilde;o da ta&ccedil;a<br />
O camel&ocirc; da pra&ccedil;a<br />
E eu canto forr&oacute;<br />
</p>

<p><strong>Cora&ccedil;&atilde;o bateu</strong><br />
(Jackson do Pandeiro / Ivo Martins)
</p>

<p>Cora&ccedil;&atilde;o bateu<br />
Cora&ccedil;&atilde;o bateu<br />
Cora&ccedil;&atilde;o bateu<br />
Ele bate mais forte que eu<br />
</p>

<p>Competente Demais<br />
(Jackson do Pandeiro / Valdemar Lima)</p>


<p>Voc&ecirc; falou que era<br />
Entendido demais<br />
Competente demais<br />
Pago pra ver o que &eacute; que voc&ecirc; faz<br />
Eu pago pra ver o que &eacute; que voc&ecirc; faz<br />
</p>


<p><strong>Mundo C&atilde;o</strong><br />
(Jackson do Pandeiro / Rogeria Ribeiro)</p>

<p>
Eu n&atilde;o sei, n&atilde;o sei n&atilde;o<br />
O que &eacute; que eu vou fazer<br />
Pra continuar vivendo nesse mundo c&atilde;o</p>

<p>Pra dar duro no batente<br />
Saio as quatro da matina<br />
Compro logo um jornal<br />
Pra completar a rotina<br />
Vejo crime e viol&ecirc;ncia<br />
Tudo &eacute; patifaria<br />
Fico com a cuca quente<br />
L&aacute; se foi minha alegria<br />
</p>


<p><strong>Cantiga da Perua</strong><br />
(Jackson do Pandeiro / Elias Soares)</p>


<p>&Eacute; de pior a pior<br />
&Eacute; de pior a pior<br />
A cantiga da perua &eacute; uma s&oacute;</p>

<p>Andam dizendo<br />
Que o progresso vai chegar<br />
Que a coisa vai melhorar<br />
Quando o homem for pra lua<br />
Mas a verdade crua<br />
&Eacute; que a situa&ccedil;&atilde;o da vida<br />
T&aacute; ficando parecida<br />
&Agrave; cantiga da perua</p>

<p>De tudo isso<br />
O que mais me inquizila<br />
&Eacute; o sujeito entrar na fila<br />
Pra comprar o que n&atilde;o tem<br />
Vai chegar tempo<br />
Que a nossa rapaziada<br />
Pra falar com a namorada<br />
Entra na fila tamb&eacute;m<br />
</p>


<p>Eu Vou Pra Lua<br />
(Ary Lobo / Luiz de França)
</p>

<p>Eu vou pra lua<br />
Eu vou morar l&aacute;<br />
Vou no meu Sputinik<br />
Do campo do Jequi&aacute;<br />
</p>
',
'creditos' => '<p>Arranjo: Z&eacute; Am&eacute;rico Bastos e Marcos Farias<br />
Acordeom e piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Guitarra e vocal: Zeppa<br />
Baixo: Pipiu<br />
Bateria: Elber Bedaque<br />
Pandeiro: Zizinho<br />
Zabumba, tri&acirc;ngulo, xique-xique, kik&oacute; e block: Firmino<br />
Clarinete: Netinho<br />
Vocal: Jurema, Jussara, Betina, Regininha, Marcio Lott, Hilton Assun&ccedil;&atilde;o, Jaime Alem, Nair C&acirc;ndia e Jurema C&acirc;ndia<br />
</p>
',
                'faixa_mp3' => '11_sina_de_cigarra.mp3', 
                'faixa_ogg' => '11_sina_de_cigarra.ogg',
                'disco_id' => '9',   ));

Musicas::create(
            array(
                'faixa' => 'Doida',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>Doida, muito doida eu sou<br />
Pelo teu amor<br />
Doida, muito doida eu t&ocirc;<br />
Pelo teu amor</p>

<p>Vem mexer comigo<br />
Pra ver meu fogo te ascender<br />
Vem rolar comigo<br />
Se lambuzar no meu prazer<br />
Eu te dou carinho, te fa&ccedil;o um dengo<br />
Deixo a fim<br />
Te fa&ccedil;o tudo<br />
E voc&ecirc; s&oacute; faz gostar de mim</p>

<p>&Ocirc;, &ocirc;, &ocirc;, &ocirc;<br />
&Ocirc;, &ocirc;, &ocirc;, &ocirc;, &ocirc;<br />
Me saculeja, me beija<br />
Me d&aacute; teu calor<br />
</p>
',
'creditos' => '<p>Arranjo de base: Z&eacute; Am&eacute;rico Bastos, Zeppa Souza, Julinho Teixeira e Firmino<br />
Orquestra&ccedil;&atilde;o, reg&ecirc;ncia, DX-7 e klavinet: Z&eacute; Am&eacute;rico Bastos<br />
Piano Yamaha: Julinho Teixeira<br />
Bateria: Elber Bedaque<br />
Guitarra: Zeppa Souza<br />
Contrabaixo: Pipiu<br />
Congas LP, bongo, afox&eacute;, cowbell, timbales LP, agog&ocirc; e guiro: Firmino<br />
Trombone: Mois&eacute;s do Nascimento<br />
Trompetes: Paulinho, Paulinho Martins e Bidinho<br />
Sax tenor: Marcelo Neves<br />
Sax alto: Leo Gandelman<br />
Vocal: Elba, Viviane Godoi, Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Jaime Alem, Jurema C&acirc;ndia, Tadeu Mathias, Louren&ccedil;o e Maur&iacute;cio Mattar</p>
',
                'faixa_mp3' => '01_doida.mp3', 
                'faixa_ogg' => '01_doida.ogg',
                'disco_id' => '10',   ));

Musicas::create(
            array(
                'faixa' => 'Salve-se Quem Puder',
                'compositor' => 'Participa&ccedil;&atilde;o Especial: Dominguinhos',
                'letra' => '<p>A gente faz o amor<br />
S&oacute; n&atilde;o desfaz o rancor<br />
N&atilde;o chore se eu disser<br />
Voc&ecirc; n&atilde;o quis quando eu quis<br />
Agora quer ser feliz<br />
Do jeito que o diabo quer</p>

<p>Eu j&aacute; cansei de esperar<br />
Olhando o tempo passar<br />
N&atilde;o quero mais sofrer<br />
Agora j&aacute; &eacute; depois<br />
Sorrimos juntos n&oacute;s dois<br />
Podemos esquecer</p>

<p>Indecis&atilde;o nunca mais<br />
O tempo n&atilde;o satisfaz<br />
A quem n&atilde;o sabe o que quer<br />
Voc&ecirc; foi tudo, meu Deus<br />
Mas seu dem&ocirc;nio sou eu<br />
E salve-se quem puder<br />
</p>
',
'creditos' => '<p>Arranjo: Dominguinhos e Z&eacute; Am&eacute;rico Bastos<br />
Orquestra&ccedil;&atilde;o, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Guitarra: Zeppa Souza<br />
Acordeom: Dominguinhos<br />
Contrabaixo: Pipiu<br />
Tri&acirc;ngulo e koc&oacute;: Firmino<br />
Bateria: Elber Bedaque<br />
Flautas: Marcelo Neves, Murilo Barquette, Mauro Senise e Celso Woltzenlogel<br />
</p>
',
                'faixa_mp3' => '02_salve_se_quem_puder_com_dominguinhos.mp3', 
                'faixa_ogg' => '02_salve_se_quem_puder_com_dominguinhos.ogg',
                'disco_id' => '10',   ));

Musicas::create(
            array(
                'faixa' => 'Segredo De Menina',
                'compositor' => '(Paulo Deb&eacute;tio / Waldir Luz)',
                'letra' => '<p>Ningu&eacute;m conhece os segredos da menina<br />
Que canta e dan&ccedil;a no brilho da purpurina<br />
Ningu&eacute;m conhece os segredos da menina<br />
Que canta e dan&ccedil;a no brilho da purpurina</p>

<p>Seu decotado, o rebolado, o riso franco<br />
Deixa de &aacute;gua na boca sarar&aacute;, negros e brancos<br />
Suor pingando, cabeleira solta ao vento<br />
E a gente vai se perdendo no tic tac do tempo</p>

<p>Eu sou assim, filha e m&atilde;e paraibana<br />
Zona Norte, Zona Leste, Zona Sul, Copacabana<br />
E vou levar o meu bai&atilde;o envenenado<br />
Esse toque malcriado que me faz ser t&atilde;o mulher</p>

<p>Olha o mirante de butuca nas canelas<br />
Da jovem mo&ccedil;a que cheira cravo e canela<br />
Olha o mirante de butuca nas canelas<br />
Da jovem mo&ccedil;a que cheira cravo e canela</p>

<p>Olha o passista com seu passo elegante<br />
Entra em cena pra brilhar<br />
Sob o olhar da jovem amante<br />
Roda moinho, roda a saia no compasso<br />
Quero ser mulher rendeira delirando nos seus bra&ccedil;os</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Guitarra: Zeppa Souza<br />
Acordeom: Dominguinhos<br />
Contrabaixo: Pipiu<br />
Bateria: Elber Bedaque<br />
Pandeiro: Nandinho do Pagode<br />
Tri&acirc;ngulo: Borel<br />
Egg maracas, congas LP, clave, cicierro, block: Firmino<br />
Trombones: Mois&eacute;s do Nascimento e Ricardo Marques<br />
Trumpetes: Paulinho, Paulinho Martins e Bidinho<br />
Sax tenor: Marcelo Neves<br />
Sax alto: Leo Gandelman<br />
</p>
',
                'faixa_mp3' => '03_segredo_de_menina.mp3', 
                'faixa_ogg' => '03_segredo_de_menina.ogg',
                'disco_id' => '10',   ));

Musicas::create(
            array(
                'faixa' => 'Estrela Grande',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>Estrela grande<br />
Por mais que eu ande<br />
Nunca te perco<br />
Nunca te alcan&ccedil;o<br />
Estrela grande</p>

<p>Por mais que eu ande<br />
Estrela grande<br />
Nunca te alcan&ccedil;o<br />
Nunca te perco<br />
Por mais que eu ande</p>

<p>Linda, mais linda<br />
Que todas as frutas<br />
E flores da terra morena<br />
Fundo de mim, minha pena<br />
L&aacute;grima lume do esp&iacute;rito<br />
Que habita tudo que existe<br />
Meu grito t&atilde;o triste<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e guitarra: Joca<br />
Piano Yamaha: Hugo Fattoruso<br />
Viol&atilde;o: Geraldo Azevedo<br />
Contrabaixo: Wagner Dias<br />
Bateria: Neguinho<br />
Block, afox&eacute;, bongo, surdo, congas LP e efeitos: Firmino<br />
Violinos: Giancarlo Pareschi, Alfredo Vidal, Jos&eacute; Alves, Bernardo Bessler, Jo&atilde;o Daltro, Carlos Eduardo, Michel Bessler, Aizik Meilack, Luiz Carlos, Francisco Perrota, Jorge Faini e Paschoal Perrota<br />
Violas: Frederick Stephany, Arlindo Figueiredo, Hindenburgo Borges e Jesu&iacute;na Noronha<br />
Cellos: Marcio Eymard, Alceu de Almeida Reis, Jacques Morelenbaum e Jorge Kundert</p>
',
                'faixa_mp3' => '04_estrela_grande.mp3', 
                'faixa_ogg' => '04_estrela_grande.ogg',
                'disco_id' => '10',   ));

Musicas::create(
            array(
                'faixa' => 'Palavra De Mulher',
                'compositor' => '(Chico Buarque)',
                'letra' => '<p>Vou voltar<br />
Haja o que houver eu vou voltar<br />
J&aacute; te deixei jurando nunca mais olhar pra tr&aacute;s<br />
Palavra de mulher<br />
Eu vou voltar</p>

<p>Posso at&eacute;<br />
Sair de bar em bar<br />
Em bar em bar<br />
Falar besteira e me enganar<br />
Com qualquer um deitar a noite inteira<br />
Eu vou te amar</p>

<p>Vou chegar<br />
A qualquer hora ao meu lugar<br />
E se uma outra pretendia<br />
Um dia te roubar<br />
Dispensa essa vadia<br />
Eu vou voltar</p>

<p>Vou subir<br />
A nossa escada, a escada<br />
A escada, a escada<br />
Meu amor, eu vou partir<br />
De novo e sempre feito viciada<br />
Eu vou voltar</p>

<p>Pode ser<br />
Que a nossa hist&oacute;ria seja mais<br />
Uma quimera<br />
E pode o nosso teto<br />
A Lapa, o Rio desabar</p>

<p>Pode ser<br />
Que passe o nosso tempo<br />
Como qualquer primavera<br />
Espera<br />
Me espera<br />
Eu vou voltar<br />
</p>
',
'creditos' => '<p>Arranjo: Chiquinho de Moraes<br />
Piano: Crist&oacute;v&atilde;o Bastos<br />
Violinos: Giancarlo Pareschi (spalla), Aizik Geller, Alfredo Vidal, Bernardo Bessler, Carlos Hack, Francisco Perrotta, Jo&atilde;o Daltro, Jorge Faini, Jos&eacute; Alves, Michel Bessler, Paschoal Perrota e Walter Hack<br />
Violas: Arlindo Penteado, Frederick Stephany, Hindenburgo Borges e Nelson Machado<br />
Cellos: Alceu de Almeida Reis, Jacques Morelenbaum, Jorge Kundert e Marcio Malard</p>
',
                'faixa_mp3' => '05_palavra_de_mulher.mp3', 
                'faixa_ogg' => '05_palavra_de_mulher.ogg',
                'disco_id' => '10',   ));

Musicas::create(
            array(
                'faixa' => 'Drag&atilde;o Encantado',
                'compositor' => '(Tadeu Mathias)',
                'letra' => '<p>Drag&atilde;o de fogo que brilha na escurid&atilde;o<br />
E me encandeia<br />
Amor que faz festa no meu cora&ccedil;&atilde;o<br />
E me incendeia<br />
 <br />
Leoa rainha<br />
Minha tenta&ccedil;&atilde;o<br />
Voc&ecirc; assim incendeia<br />
O amor do meu cora&ccedil;&atilde;o</p>

<p>Voc&ecirc; tem muito encanto<br />
&Eacute; uma lenda<br />
E t&aacute; na minha can&ccedil;&atilde;o</p>

<p>Eu lhe pe&ccedil;o um beijo<br />
&ldquo;N&atilde;o dou&rdquo;<br />
Ela t&aacute; doida para beijar<br />
Lhe convido a dan&ccedil;ar<br />
&ldquo;N&atilde;o vou&rdquo;<br />
Mas sei que ela quer rebolar</p>

<p>Deixe o medo de lado morena<br />
Vem me amar<br />
Deixe o medo de lado morena<br />
Vem me amar</p>

<p>Ilea&ecirc;, lelele, lelele, lelele&ocirc;<br />
Ilea&ecirc;, lelele, lelele, lelele&aacute;<br />
Ilea&ecirc;, lelele, lelele, lelele&ocirc;<br />
Ilea&ecirc;, lelele, lelele, lelele&aacute;<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia, piano Yamaha e DX-7: Z&eacute; Am&eacute;rico Bastos<br />
Guitarra: Zeppa Souza<br />
Bateria: Elber Bedaque<br />
Contrabaixo: Jorj&atilde;o<br />
Congas LP, bongo, afox&eacute;, guiro, tri&acirc;ngulo, soroban e block: Firmino<br />
Trombones: Mois&eacute;s do Nascimento e Roberto Marques<br />
Trompetes: Paulinho, Paulinho Martins e Bidinho<br />
Sax tenor e flauta: Marcelo Neves<br />
Sax alto: Leo Gandelman<br />
Vocal: Elba, Viviane Godoi, Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Jaime Alem, Jurema C&acirc;ndia, Tadeu Mathias e Louren&ccedil;o<br />
</p>
',
                'faixa_mp3' => '06_dragao_encantado.mp3', 
                'faixa_ogg' => '06_dragao_encantado.ogg',
                'disco_id' => '10',   ));

Musicas::create(
            array(
                'faixa' => 'Pisa No Meu Cora&ccedil;&atilde;o',
                'compositor' => '(Nando Cordel / Fausto Nilo)',
                'letra' => '<p>Comigo voc&ecirc; faz amor<br />
Contigo &eacute; pra enlouquecer<br />
Fico cega de paix&atilde;o<br />
D&aacute; pra todo mundo ver</p>

<p>Pisa no meu cora&ccedil;&atilde;o<br />
Meu amor n&atilde;o vai doer<br />
Pisa no meu cora&ccedil;&atilde;o<br />
Meu amor n&atilde;o vai doer</p>

<p>Se voc&ecirc; quer eu fa&ccedil;o de manh&atilde;<br />
Fa&ccedil;o anoitecer<br />
Fico doido, fico bom<br />
Fa&ccedil;o at&eacute; chover</p>

<p>Hoje ningu&eacute;m chora<br />
Hoje &eacute; brincadeira<br />
T&aacute; chegando a hora<br />
T&aacute; dando a doideira</p>

<p>Me d&aacute; que eu quero ver<br />
Que gosto tem voc&ecirc;<br />
Me d&aacute; que eu quero ver<br />
Que gosto tem voc&ecirc;<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Viol&atilde;o: Hilton Assun&ccedil;&atilde;o<br />
Bateria: Jurim Moreira<br />
Guitarra: Joca<br />
Contrabaixo: Pipiu<br />
Congas LP, talk drums e afox&eacute;: Firmino<br />
Clave: Marcos Amma<br />
Cowbell: Maur&iacute;cio Mattar<br />
Vocal: Elba, Viviane Godoi, Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Jaime Alem, Jurema C&acirc;ndia, Tadeu Mathias e Louren&ccedil;o<br />
</p>
',
                'faixa_mp3' => '07_pisa_no_meu_coracao.mp3', 
                'faixa_ogg' => '07_pisa_no_meu_coracao.ogg',
                'disco_id' => '10',   ));

Musicas::create(
            array(
                'faixa' => 'Um Bilhete Pro Seu Lua',
                'compositor' => 'Participa&ccedil;&atilde;o especial: Gonzaguinha',
                'letra' => '<p>&Ecirc; meu pai<br />
T&ocirc; sentindo saudades de voc&ecirc;<br />
Como vai<br />
Essa voz que &eacute; a voz do meu sert&atilde;o?<br />
Como est&atilde;o<br />
O trabalho, os projetos, oi?<br />
Mando l&aacute; um abra&ccedil;o dos netos</p>

<p>Setenta e cinco anos n&atilde;o &eacute; pra qualquer besta<br />
Ainda mais com essa sanfona<br />
Espalhando sempre a festa<br />
Cuida bem do cora&ccedil;&atilde;o, liga n&atilde;o</p>

<p>Que o povo tem amor<br />
Por tudo o que voc&ecirc; &eacute;<br />
Que o povo tem amor<br />
Por tudo o que voc&ecirc; &eacute;</p>

<p>V&ecirc; meu pai<br />
Inventaram o bai&atilde;o l&aacute; no Jap&atilde;o<br />
C&ecirc; vai ver<br />
Brevemente &eacute; moda no Brasil<br />
V&atilde;o mostrar<br />
Como &eacute; que se dan&ccedil;a, oi!<br />
Deixa andar<br />
Que a gente copia<br />
A tecnologia amostrou a alegria<br />
Que tem na tua lua<br />
Que brilha em pleno dia<br />
Cuida bem do cora&ccedil;&atilde;o, liga n&atilde;o</p>

<p>Que o povo n&atilde;o esquece<br />
Tudo que voc&ecirc; &eacute;<br />
Que o povo n&atilde;o esquece<br />
Tudo que voc&ecirc; &eacute;</p>

<p>E igual ao povo somente Deus<br />
E voc&ecirc; tem<br />
O povo inteirinho dentro desse cora&ccedil;&atilde;o<br />
O povo inteirinho dentro desse cora&ccedil;&atilde;o<br />
O povo inteirinho dentro desse cora&ccedil;&atilde;o<br />
</p>

',
'creditos' => '<p>Arranjo, reg&ecirc;ncia, piano Yamaha, DX-7, (cordas) Mirage e acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Elber Bedaque<br />
Guitarra: Zeppa Souza<br />
Contrabaixo: Pipiu<br />
Viol&atilde;o 12 cordas: Joca<br />
Block e xequer&ecirc;: Bidinho<br />
Tri&acirc;ngulo e claves: Firmino<br />
Clave: Marcos Amma<br />
Cowbell: Maur&iacute;cio Mattar<br />
Vocal: Elba, Viviane Godoi, Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Jaime Alem, Jurema C&acirc;ndia, Tadeu Mathias e Louren&ccedil;o<br />
</p>
',
                'faixa_mp3' => '08_um_bilhete_pro_seu_lua_com_gonzaguinha.mp3', 
                'faixa_ogg' => '08_um_bilhete_pro_seu_lua_com_gonzaguinha.ogg',
                'disco_id' => '10',   ));

Musicas::create(
            array(
                'faixa' => 'O Girassol Da Baixada',
                'compositor' => '(Jaime Alem)',
                'letra' => '<p>Sonhador<br />
Um menino da baixada plantou<br />
Um girassol<br />
E sentou pra esperar<br />
O sol na rodovia<br />
J&aacute; corria a novidade<br />
Todo mundo j&aacute; sabia do menino<br />
Que plantara uma flor<br />
No vazadouro de petr&oacute;leo</p>

<p>Acontece nessa terra<br />
Onde se plantando tudo d&aacute;<br />
Com os dias se passando<br />
As sementes v&atilde;o brotando generosas</p>

<p>Mas o menino da baixada plantou<br />
Um girassol<br />
E sentou pra esperar passar<br />
A chuva que ca&iacute;a todo dia<br />
Todo dia, todo dia<br />
Todo sonhador<br />
O menino n&atilde;o sabia<br />
Que plantara sobre a lama, a sede, a fome<br />
A esperan&ccedil;a<br />
De um viver que n&atilde;o se cansa</p>

<p>Na car&ecirc;ncia, inoc&ecirc;ncia<br />
Ignor&acirc;ncia, viol&ecirc;ncia desses dias tais<br />
Descobrimo-nos selvagens de um jeito<br />
Que ofende aos outros animais<br />
Acontece nessa terra<br />
Onde se plantando tudo d&aacute;<br />
Vergonha!<br />
</p>
',
'creditos' => '<p>Arranjo de base: Jaime Alem<br />
Arranjo, reg&ecirc;ncia, piano Yamaha e acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Piano Yamaha: Hugo Fattoruso<br />
Viol&atilde;o Ovation com nylon, viol&atilde;o Ovation com a&ccedil;o e viola 12 cordas: Jaime Alem<br />
Guitarra: Zeppa Souza<br />
Contrabaixo: Jamil<br />
Bateria: Elber Bedaque<br />
Viola 12 cordas: Joca<br />
Bock, caxixi e xequer&ecirc;: Bidinho<br />
Talk drums, reco-reco e chicote: Repolho<br />
Tri&acirc;ngulo, pandeiros, congas LP, afox&eacute; e tumba: Firmino<br />
Violinos: Giancarlo Pareschi, Alfredo Vidal, Jos&eacute; Alves, Bernardo Bessler, Jo&atilde;o Daltro, Carlos Eduardo, Michel Bessler, Aizik Meilack, Luiz Carlos, Francisco Perrota, Jorge Faini e Paschoal Perrota<br />
Violas: Frederick Stephany, Arlindo Figueiredo, Hindenburgo Borges e Jesu&iacute;na Noronha<br />
Cellos: Marcio Eymard, Alceu de Almeida Reis, Jacques Morelenbaum e Jorge Kundert<br />
</p>
',
                'faixa_mp3' => '09_o_girassol_da_baixada.mp3', 
                'faixa_ogg' => '09_o_girassol_da_baixada.ogg',
                'disco_id' => '10',   ));

Musicas::create(
            array(
                'faixa' => 'A Flor Da Magia',
                'compositor' => '(Z&eacute; Am&eacute;rico / Salgado Maranh&atilde;o)',
                'letra' => '<p>Tambor de crioula<br />
Bai&atilde;o da alegria<br />
Debaixo dos p&eacute;s<br />
A flor da magia</p>

<p>Tambor de terreiro<br />
Tambor de folia<br />
Debaixo da noite<br />
Suor e energia</p>

<p>Meu peito &eacute; um pantanal<br />
Um c&oacute;rrego de &aacute;gua doce<br />
A dor, se vem, vira amor<br />
Acorde sensual</p>

<p>Meu peito &eacute; um matagal<br />
De cheiro verde e can&ccedil;&atilde;o<br />
Meu peito &eacute; um matagal<br />
De cheiro verde e can&ccedil;&atilde;o</p>

<p>Aqui qualquer solid&atilde;o<br />
Vira carnaval<br />
Vira carnaval<br />
Aqui qualquer solid&atilde;o<br />
Vira carnaval<br />
Vira carnaval</p>

<p>Tambor de crioula<br />
Clar&atilde;o luz do dia<br />
Debaixo do sonho<br />
O sol principia<br />
</p>
',
'creditos' => '<p>
Arranjo, reg&ecirc;ncia e piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Jurim Moreira<br />
Viol&atilde;o: Hilton Assun&ccedil;&atilde;o<br />
Contrabaixo: Pipiu<br />
Viola 12 cordas: Joca<br />
Tambores: Marcos Amma<br />
Tumba, guiro, egg maracas, soroban, madeiras e tambores: Firmino<br />
Vocal: Elba, Viviane Godoi, Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Jaime Alem, Jurema C&acirc;ndia, Tadeu Mathias e Marcio Lott<br />
</p>
',
                'faixa_mp3' => '10_a_flor_da_magia.mp3', 
                'faixa_ogg' => '10_a_flor_da_magia.ogg',
                'disco_id' => '10',   ));

Musicas::create(
            array(
                'faixa' => 'Lu&atilde;',
                'compositor' => '(Maur&iacute;cio Mattar / Geraldo Azevedo)Participa&ccedil;&atilde;o Especial: Lu&atilde;',
                'letra' => '<p>Fruta madura me encantou<br />
Tal do&ccedil;ura de um menino nu<br />
Salve essa pele<br />
Salve a cor<br />
A manh&atilde; hoje lambeu c&eacute;u azul</p>

<p>C&eacute;u de Lu&atilde;<br />
Fruta feiticeira<br />
Anjo bom<br />
Tempo de luz<br />
Pro meu cora&ccedil;&atilde;o</p>

<p>Que diz assim<br />
Na can&ccedil;&atilde;o, na paix&atilde;o<br />
Ser feliz &eacute; cantar<br />
Cantar Lu&atilde;, &ecirc;, &ocirc;</p>

<p>Molhar os olhos de beijo<br />
Que ternura, pura flor do amor<br />
O frio, a febre, dor da dor<br />
Um le&atilde;o no foco quente do sol</p>

<p>Sol de Lu&atilde;<br />
Fruta feiticeira<br />
Tempo bom<br />
Anjo de luz<br />
Pro meu cora&ccedil;&atilde;o</p>

<p>Que diz assim<br />
Na can&ccedil;&atilde;o, na paix&atilde;o<br />
Ser feliz &eacute; cantar<br />
Cantar, cantar Lu&atilde;, &ecirc;, &ocirc;<br />
</p>
',
'creditos' => '<p>Arranjo de base: Joca e Geraldo Azevedo<br />
Arranjo de cordas e guitarras: Joca<br />
Piano Yamaha: Hugo Fattoruso<br />
Viol&atilde;o: Geraldo Azevedo<br />
Contrabaixo: Wagner Dias<br />
Bateria: Neguinho<br />
Egg maracas, efeitos e Lu&atilde;: Firmino<br />
Violinos: Giancarlo Pareschi, Alfredo Vidal, Jos&eacute; Alves, Bernardo Bessler, Jo&atilde;o Daltro, Carlos Eduardo, Michel Bessler, Aizik Meilack, Luiz Carlos, Francisco Perrota, Jorge Faini e Paschoal Perrota<br />
Violas: Frederick Stephany, Arlindo Figueiredo, Hindenburgo Borges e Jesu&iacute;na Noronha<br />
Cellos: Marcio Eymard, Alceu de Almeida Reis, Jacques Morelenbaum e Jorge Kundert<br />
</p>
',
                'faixa_mp3' => '11_lua.mp3', 
                'faixa_ogg' => '11_lua.ogg',
                'disco_id' => '10',   ));

Musicas::create(
            array(
                'faixa' => 'Jogo De Cintura',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>Voc&ecirc; tem que ter<br />
Jogo de cintura<br />
Olho na mistura<br />
N&atilde;o se incomodar<br />
De vez em quando nessa vida<br />
A gente engole um ca&ocirc;</p>

<p>Pra se arrumar, pra se arrumar<br />
Pra namorar, pra namorar<br />
Pra ser feliz, pra ser feliz<br />
Pra ter amor</p>

<p>E a &ocirc;<br />
Isso aqui vai melhorar<br />
E a &ocirc;<br />
Se a gente se enganchar<br />
E a &ocirc;<br />
Era bom que fosse j&aacute;<br />
Voc&ecirc; quer, eu tamb&eacute;m quero<br />
T&aacute; faltando come&ccedil;ar<br />
</p>
',
'creditos' => '<p>Arranjo e acordeom: Dominguinhos<br />
Piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Viol&atilde;o: Hilton Assun&ccedil;&atilde;o<br />
Guitarra: Zeppa Souza<br />
Contrabaixo: Pipiu<br />
Bateria: Elber Bedaque<br />
Tri&acirc;ngulo, agog&ocirc; e zabumba: Firmino<br />
Pandeiro: Nando do Pandeiro<br />
Clarinete/solo: Netinho<br />
Vocal: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Chico Pupo, Nair C&acirc;ndia, Jaime Alem, Zeppa Souza, R onaldo Barcellos, Jurema C&acirc;ndia e Leno<br />
</p>

',
                'faixa_mp3' => '01_jogo_de_cintura.mp3', 
                'faixa_ogg' => '01_jogo_de_cintura.ogg',
                'disco_id' => '11',   ));

Musicas::create(
            array(
                'faixa' => 'Cheiro Moreno',
                'compositor' => '(Paulo Deb&eacute;tio / Paulinho Resende)',
                'letra' => '<p>Me leva meu bem querer<br />
Pra me banhar<br />
Na del&iacute;cia do teu cheiro moreno<br />
Eu vim te namorar</p>

<p>A raz&atilde;o da minha vida<br />
&Eacute; ati&ccedil;ar seu cora&ccedil;&atilde;o<br />
Pois eu sou t&atilde;o mo&ccedil;a ainda<br />
Pra sofrer de solid&atilde;o</p>

<p>Fui na fonte do desejo<br />
Beber &aacute;gua e n&atilde;o achei<br />
E a sede do seu beijo<br />
At&eacute; hoje n&atilde;o matei</p>

<p>Sem seus olhos n&atilde;o me vejo<br />
Depois que seu gosto provei<br />
Sem seus olhos n&atilde;o me vejo<br />
Depois que seu gosto provei</p>

<p>Apesar da pouca idade<br />
Cedo eu tive que aprender<br />
Que a saudade &eacute; uma vontade<br />
Muito doida de te ver</p>

<p>Tenho andado t&atilde;o carente<br />
Da mal&iacute;cia desse olhar<br />
Cora&ccedil;&atilde;o ficou doente<br />
Me pediu pra te chamar</p>

<p>Tem paix&atilde;o que n&atilde;o se explica<br />
Onde bate fica at&eacute; sangrar<br />
Tem paix&atilde;o que n&atilde;o se explica<br />
Onde bate fica at&eacute; sangrar<br />
</p>

',
'creditos' => '<p>Arranjo: Z&eacute; Am&eacute;rico Bastos<br />
Piano: Julinho Teixeira<br />
Bateria: Carlos Bala<br />
Contrabaixo: Jorj&atilde;o<br />
Guitarra: Zeppa Souza e Joca<br />
Congas, pandeiro, queixada, afox&eacute; e tumba: Firmino<br />
Flauta e sax tenor: Marcelo Neves<br />
Trompete Flugel: Paulinho Trompete e Don Harris<br />
Trombones: Mois&eacute;s e Roberto Marques<br />
Vocal: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Chico Pupo, Nair C&acirc;ndia, Jaime Alem, Zeppa Souza, Ronaldo Barcellos, Jurema C&acirc;ndia e Leno<br />
</p>
',
                'faixa_mp3' => '02_cheiro_moreno.mp3', 
                'faixa_ogg' => '02_cheiro_moreno.ogg',
                'disco_id' => '11',   ));

Musicas::create(
            array(
                'faixa' => 'Agora &eacute; Sua Vez',
                'compositor' => '(Zinho) Participa&ccedil;&atilde;o Especial: Zinho',
                'letra' => '<p>Eu j&aacute; tomei de conta<br />
Eu j&aacute; dei meu recado<br />
J&aacute; fiz meu peneirado<br />
Com voc&ecirc; no forroz&atilde;o</p>

<p>Meu bem n&atilde;o diga n&atilde;o<br />
Meu bem diga que sim<br />
Agora &eacute; sua vez<br />
De tomar de conta de mim</p>

<p>Vem pra c&aacute; meu amor<br />
Vem pra c&aacute; meu amor<br />
Vem tomar de conta do meu cora&ccedil;&atilde;o<br />
Mas se voc&ecirc; disser que n&atilde;o<br />
N&atilde;o tem quentura no sal&atilde;o</p>

<p>Chega pra c&aacute;<br />
Vem se espalhar, meu bem<br />
Que a noite &eacute; nossa<br />
N&atilde;o se importe com ningu&eacute;m<br />
Meu bem<br />
Aqui no forroz&atilde;o<br />
Por favor, n&atilde;o diga n&atilde;o<br />
Vem pra c&aacute; meu bem querer</p>

<p>E nessa brincadeira<br />
Quem vai tomar de conta de mim &eacute; voc&ecirc;<br />
E nessa brincadeira<br />
Quem vai tomar de conta de mim &eacute; voc&ecirc;<br />
</p>
',
'creditos' => '<p>Arranjo e acordeom: Dominguinhos<br />
Baixo: Pipiu<br />
Bateria: Elber Bedaque<br />
Guitarra: Zeppa Souza<br />
Tri&acirc;ngulo e agog&ocirc;: Firmino<br />
Zabumba: Tiziu<br />
Pandeiro: Nando do Pandeiro<br />
</p>
',
                'faixa_mp3' => '03_agora_e_sua_vez_com_zinho.mp3', 
                'faixa_ogg' => '03_agora_e_sua_vez_com_zinho.ogg',
                'disco_id' => '11',   ));

Musicas::create(
            array(
                'faixa' => 'V&ecirc; Estrelas',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>&Eacute; hoje que a gente v&ecirc;<br />
Estrelas<br />
&Eacute; hoje que a gente faz<br />
Amor</p>

<p>Que bom, que bom querer<br />
Voc&ecirc;<br />
Que bom, que bom querer<br />
Voc&ecirc;</p>

<p>Tudo &eacute; festa, &eacute; folego<br />
Vem chegando maneiro<br />
Teu olhar feiticeiro<br />
Me prendeu</p>

<p>N&atilde;o tem jeito, eu te quero<br />
Balan&ccedil;ando em meu corpo<br />
Pra provar desse gosto<br />
Que &eacute; s&oacute; seu<br />
</p>
',
'creditos' => '<p>Arranjo e piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Viol&atilde;o: Hilton Assun&ccedil;&atilde;o<br />
Bateria: Carlos Bala<br />
Contrabaixo: Jorj&atilde;o<br />
Guitarra: Zeppa Souza<br />
Tumba, congas e timbales: Firmino<br />
Sax tenor: Marcelo Neves<br />
Sax alto: Z&eacute; Carlos<br />
Trompetes: Paulinho Trompete e Don Harris<br />
Trombones: Mois&eacute;s e Roberto Marques<br />
Vocal: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Chico Pupo, Nair C&acirc;ndia, Jaime Alem, Zeppa Souza, Ronaldo Barcellos, Jurema C&acirc;ndia e Leno<br />
</p>
',
                'faixa_mp3' => '04_ve_estrelas.mp3', 
                'faixa_ogg' => '04_ve_estrelas.ogg',
                'disco_id' => '11',   ));

Musicas::create(
            array(
                'faixa' => 'Sem Sa&iacute;da',
                'compositor' => '(Dominguinhos / Fausto Nilo)',
                'letra' => '<p>Eu nem queria pensar em voc&ecirc;<br />
Mas n&atilde;o consigo evitar<br />
Voc&ecirc; s&oacute; faz prometer, prometer<br />
Eu j&aacute; cansei de esperar<br />
Teu futuro n&atilde;o suporta minha paix&atilde;o<br />
Meu presente &eacute; teu amor fora de hora</p>

<p>Fa&ccedil;a comigo o que voc&ecirc; quiser<br />
Eu fa&ccedil;o tudo por puro prazer<br />
N&atilde;o consigo te dizer que n&atilde;o</p>

<p>Quantas vezes<br />
O amor me deixou sem sa&iacute;da<br />
Quantas mil tentativas de um dia mudar<br />
Esquecer nosso caminho<br />
Me perder noutros carinhos<br />
Mas agora nem d&aacute; tempo de pensar</p>

<p>Fa&ccedil;a comigo o que voc&ecirc; quiser<br />
Eu fa&ccedil;o tudo de amor com voc&ecirc;<br />
Pouco importa o dia de amanh&atilde;<br />
</p>
',
'creditos' => '<p>Arranjo de base: Dominguinhos e Z&eacute; Am&eacute;rico Bastos<br />
Teclados: Julinho Teixeira<br />
Piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Viol&atilde;o: Hilton Assun&ccedil;&atilde;o<br />
Guitarra: Zeppa Souza<br />
Contrabaixo: Pipiu<br />
Bateria: Elber Bedaque<br />
Acordeom: Dominguinhos<br />
Bong&ocirc;, sorobam, clave e efeito de prato: Firmino<br />
Clarinete/solo: Netinho<br />
Vocal: Zeppa Souza, Jaime Alem, Chico Pupo, Ronaldo Barcellos e Leno<br />
</p>
',
                'faixa_mp3' => '05_sem_saida.mp3', 
                'faixa_ogg' => '05_sem_saida.ogg',
                'disco_id' => '11',   ));

Musicas::create(
            array(
                'faixa' => 'Popular Brasileira',
                'compositor' => '(Moraes Moreira / Fred G&oacute;es)',
                'letra' => '<p>Foi pra Cuba dan&ccedil;ar rumba<br />
Foi pras ilhas de l&aacute;, filha<br />
O Brasil foi levar<br />
Samba, frevos e maracatus</p>

<p>Quem olhasse em seus olhos via<br />
A ciranda girando tinha<br />
Um sabor de mesti&ccedil;a pele<br />
Lembran&ccedil;a da Bahia</p>

<p>Sapatilhas de ponta, amor<br />
Fiz o ch&atilde;o e a cada passo<br />
Se voc&ecirc; me levar eu vou<br />
Estreitar nossos la&ccedil;os</p>

<p>Amizade e estima s&atilde;o<br />
Nordestina alegria sim<br />
Diz que tem, que tem solu&ccedil;&atilde;o<br />
Guerrilheira de mim</p>

<p>&Eacute; bonita, erudita<br />
Popular brasileira<br />
Deixe o vento levar o som<br />
N&atilde;o tem fronteiras<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia de metais e piano: Z&eacute; Am&eacute;rico Bastos<br />
Participa&ccedil;&atilde;o na introdu&ccedil;&atilde;o: Paulinho Trompete<br />
Arranjo de base: Luiz Brasil, Z&eacute; Am&eacute;rico Bastos e Moraes Moreira<br />
Contrabaixo: Guilherme Maia<br />
Bateria: Elber Bedaque<br />
Teclados: Luiz&atilde;o Paiva e Z&eacute; Am&eacute;rico Bastos<br />
Guitarras: Zeppa Souza e Rodrigo Campelo<br />
Viol&atilde;o: Pipiu<br />
Conga, timbales, cowbell, bong&ocirc;, surdo, caixa e efeitos: Firmino<br />
Conga, pandeiro, agog&ocirc; e xequer&ecirc;: Carlinhos Hogam<br />
Agog&ocirc;, bong&ocirc;, xequer&ecirc;, conga e timbales: Cassio Duarte<br />
Flauta e sax tenor: Marcelo Neves<br />
Sax alto: Z&eacute; Carlos<br />
Trompete Flugel: Paulinho Trompete e Don Harris<br />
Trombones: Mois&eacute;s e Roberto Marques<br />
Vocal: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Chico Pupo, Nair C&acirc;ndia, Jaime Alem, Zeppa Souza, Ronaldo Barcellos, Jurema C&acirc;ndia e Leno<br />
</p>
',
                'faixa_mp3' => '06_popular_brasileira.mp3', 
                'faixa_ogg' => '06_popular_brasileira.ogg',
                'disco_id' => '11',   ));

Musicas::create(
            array(
                'faixa' => 'A Roda Do Tempo',
                'compositor' => '(Lenine / Br&aacute;ulio Tavares)',
                'letra' => '<p>Diz que o tempo &eacute; um mist&eacute;rio (deixa falar)<br />
Que cura qualquer paix&atilde;o (deixa falar)<br />
Quem disse n&atilde;o conhecia<br />
Essa dor que noite e dia<br />
Martela meu cora&ccedil;&atilde;o</p>

<p>A roda do tempo gira (deixa girar)<br />
Para frente, para tr&aacute;s (deixa girar)<br />
Meu baralho eu j&aacute; tracei<br />
Se voc&ecirc; jogar um rei<br />
Eu tenho que jogar um &aacute;s</p>

<p>Eu me criei<br />
Escutando a melodia, &eacute;<br />
Da ventania castigando &agrave; beira-mar, &eacute;<br />
Me acostumei no tombo da ribanceira<br />
E quem sabe subir ladeira<br />
N&atilde;o tem pressa de chegar</p>

<p>Quem pensa que o c&eacute;u &eacute; perto (deixa pensar)<br />
Que &eacute; s&oacute; estender a m&atilde;o (deixa pensar)<br />
Fica mal acostumado<br />
Vive com o bra&ccedil;o esticado<br />
E os p&eacute;s fora do ch&atilde;o</p>

<p>Mas a vida vai passando (deixa passar)<br />
Como o c&eacute;u muda de cor (deixa passar)<br />
Cada curva do caminho<br />
Me leva devagarinho<br />
Mais perto do teu amor</p>
',
'creditos' => '<p>Arranjo e piano Yamaha: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Carlos Bala<br />
Tri&acirc;ngulo, zabumba, bong&ocirc; e cabacinha: Firmino<br />
Guitarra: Zeppa Souza<br />
Contrabaixo: Jorj&atilde;o<br />
Viola de 10 cordas: Lenine<br />
Vocal: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Chico Pupo, Nair C&acirc;ndia, Jaime Alem, Zeppa Souza, Ronaldo Barcellos, Jurema C&acirc;ndia e Leno<br />
</p>
',
                'faixa_mp3' => '07_a_roda_do_tempo.mp3', 
                'faixa_ogg' => '07_a_roda_do_tempo.ogg',
                'disco_id' => '11',   ));

Musicas::create(
            array(
                'faixa' => 'Agarradinho Com Voc&ecirc;',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>Voc&ecirc; &eacute; doce<br />
&Eacute; saboroso, &eacute; de endoidar<br />
Na tua praia eu quero sempre mergulhar<br />
Voc&ecirc; &eacute; flor, &eacute; meu caminho<br />
Quando vacila &eacute; meu espinho<br />
Anjo da guarda<br />
Meu escudo e meu luar</p>

<p>Me d&aacute;, me d&aacute;, me d&aacute;<br />
Meu cora&ccedil;&atilde;o descontrolou<br />
Eu quero, eu quero, eu quero<br />
Viajar no teu amor<br />
Voar, voar, voar<br />
Me desmanchar, virar prazer<br />
Morar numa estrela<br />
Agarradinho com voc&ecirc;<br />
</p>
',
'creditos' => '<p>Arranjo e piano: Eduardo Souto Neto<br />
Guitarra: Joca<br />
Contrabaixo: Jorj&atilde;o<br />
Surdo, pandeiro e bong&ocirc;: Firmino<br />
Bateria: Carlos Bala<br />
Guitarra: Zeppa Souza<br />
Trompetes: Hamilton e Barreto<br />
Sax tenor: Maca&eacute;<br />
Sax alto: Mauro Seninse<br />
Trombones: Eduardo Maciel e Roberto Marques<br />
Vocal: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Chico Pupo, Nair C&acirc;ndia, Jaime Alem, Zeppa Souza, Ronaldo Barcellos, Jurema C&acirc;ndia e Leno<br />
</p>
',
                'faixa_mp3' => '08_agarradinho_com_voce.mp3', 
                'faixa_ogg' => '08_agarradinho_com_voce.ogg',
                'disco_id' => '11',   ));

Musicas::create(
            array(
                'faixa' => 'Me Perdoa',
                'compositor' => '(Tadeu Mathias)',
                'letra' => '<p>Eu passei por cima<br />
De algumas coisas tuas<br />
Eu pequei<br />
N&atilde;o respeitado teus espa&ccedil;os<br />
Mas a vida ensina<br />
E eu voltei</p>

<p>T&ocirc; de malas prontas<br />
Pra seguir viagem<br />
Se voc&ecirc; n&atilde;o me quer de volta<br />
Vou seguir andando<br />
Largada pela vida<br />
Me perdoa amor<br />
Hoje eu estou aqui</p>

<p>&Eacute; t&atilde;o bom quando surge algo novo<br />
Que desperta uma nova paix&atilde;o<br />
Mas a cabe&ccedil;a se perde no tempo<br />
E a gente segue em dire&ccedil;&atilde;o</p>

<p>E assim completamente louca<br />
Agindo da pior maneira<br />
Eu errei<br />
Mas quando o cora&ccedil;&atilde;o aperta<br />
A&iacute; a saudade acerta<br />
E eu voltei<br />
Me perdoa amor<br />
Hoje eu estou aqui</p>
',
'creditos' => '<p>Arranjo e piano: Julinho Teixeira<br />
Contrabaixo: Jorj&atilde;o<br />
Guitarra: Zeppa Souza<br />
Bateria: Carlos Bala<br />
Pandeiro, afox&eacute;, tempo block: Firmino<br />
Sax alto/solo: Z&eacute; Carlos<br />
Vocal: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Chico Pupo, Nair C&acirc;ndia, Jaime Alem, Zeppa Souza, Ronaldo Barcellos, Jurema C&acirc;ndia e Leno<br />
</p>
',
                'faixa_mp3' => '09_me_perdoa.mp3', 
                'faixa_ogg' => '09_me_perdoa.ogg',
                'disco_id' => '11',   ));

Musicas::create(
            array(
                'faixa' => 'Saga Da Amaz&ocirc;nia',
                'compositor' => '(Vital Farias)',
                'letra' => '<p>I<br />
Era uma vez na Amaz&ocirc;nia<br />
A mais bonita floresta<br />
Mata verde, c&eacute;u azul<br />
A mais imensa floresta<br />
No fundo d&rsquo;&aacute;gua as Iaras<br />
Caboclo, lendas e m&aacute;goas<br />
E os rios puxando as &aacute;guas<br />
Papagaios, periquitos<br />
Cuidavam de suas cores<br />
Os peixes singrando os rios<br />
Curumins cheios de amores<br />
Sorria o jurupari<br />
Uirapuru seu porvir<br />
Era flora, fauna, frutos e flores<br />
Toda mata tem caipora<br />
Para a mata vigiar<br />
Veio caipora de fora<br />
Para a mata definhar<br />
E trouxe drag&atilde;o de ferro<br />
Pra comer muita madeira<br />
E trouxe estilo gigante<br />
Pra acabar com a capoeira<br />
Fizeram logo o projeto<br />
Sem ningu&eacute;m testemunhar<br />
Pra o drag&atilde;o cortar madeira<br />
E toda a mata derrubar<br />
Se a floresta meu amigo<br />
Tivesse p&eacute; pra andar<br />
Eu garanto meu amigo<br />
Com o perigo n&atilde;o tinha ficado l&aacute;<br />
O que se corta em segundos<br />
Gasta tempo pra vingar<br />
E o fruto que d&aacute; no cacho<br />
Pra gente se alimentar?<br />
Depois tem o passarinho, tem o ninho, tem o ar<br />
Igarap&eacute; rio abaixo<br />
Tem riacho e esse rio que &eacute; um mar<br />
</p>

<p>II<br />
Mas o drag&atilde;o continua na floreta a devorar<br />
E quem habita essa mata<br />
Pra onde vai mudar?<br />
Corre &iacute;ndio, seringueiro<br />
Pregui&ccedil;a, tamandu&aacute;,<br />
Tartaruga p&eacute; ligeiro<br />
Corre-corre tribo dos Kamayur&aacute;<br />
</p>

<p>III<br />
No lugar que havia mata<br />
Hoje h&aacute; persegui&ccedil;&atilde;o<br />
Grileiro mata posseiro<br />
S&oacute; pra lhe roubar seu ch&atilde;o<br />
Castanheiro, seringueiro, j&aacute; viraram at&eacute; pe&atilde;o<br />
Afora os que j&aacute; morreram<br />
Como ave de arriba&ccedil;&atilde;o<br />
Z&eacute; de Nana t&aacute; na prova<br />
Naquele lugar tem cova<br />
Gente enterrada no ch&atilde;o<br />
Pois mataram o &iacute;ndio que matou grileiro<br />
Que matou posseiro<br />
Disse um castanheiro para um seringueiro<br />
Que um estrangeiro roubou seu lugar</p>

<p>IV<br />
Foi ent&atilde;o que um violeiro<br />
Chegando na regi&atilde;o<br />
Ficou t&atilde;o penalizado<br />
Escreveu essa can&ccedil;&atilde;o<br />
E talvez desesperado com tanta devasta&ccedil;&atilde;o<br />
Pegou primeira estrada<br />
Sem rumo, sem dire&ccedil;&atilde;o<br />
Com olhos cheios de &aacute;gua<br />
Sumiu levando essa m&aacute;goa<br />
Dentro do seu cora&ccedil;&atilde;o<br />
</p>

<p>V<br />
Assim termino essa hist&oacute;ria<br />
Para gente de valor<br />
Pra gente que tem mem&oacute;ria<br />
Muita cren&ccedil;a, muito amor<br />
Pra defender o que ainda resta<br />
Sem rodeio, sem aresta<br />
Era uma vez uma floresta<br />
Na linha do Equador</p>
',
'creditos' => '<p>Arranjo e viol&atilde;o: Joca<br />
Piano: Helvius Vilela<br />
Prato, tambores e efeitos: Firmino<br />
Contrabaixo ac&uacute;stico: Carlos Eduardo<br />
Flautas: Celso Porta e Murilo Moss<br />
Trombones: Edmundo Maciel e Roberto Marques<br />
Clarinete: Paulo S&eacute;rgio Cunha<br />
Obo&eacute;: Lia Gandelman<br />
Violinos: Em&iacute;lio Batista Filho, Aizik Geller, Arlindo Figueiredo, Bernardo Bessler, Denner Campolina, Francisco Perrota, Jos&eacute; Alves, L&eacute;o Ortiz, Michel Bessler, Paschoal Perrota, Virg&iacute;lio Arraes e Walter Hack<br />
Violas: Alfredo Vidal, Jacques Morelenbaum e Marie Christine<br />
Cellos: Jesu&iacute;na Noronha, Jorge Kundert, Marcio Eymard e Walter Clis<br />
</p>
',
                'faixa_mp3' => '10_saga_da_amazonia.mp3', 
                'faixa_ogg' => '10_saga_da_amazonia.ogg',
                'disco_id' => '11',   ));

Musicas::create(
            array(
                'faixa' => 'Feitiço De Gafieira',
                'compositor' => '(Tadeu Mathias / Jaguar)',
                'letra' => '<p>Pra que falar de tristeza<br />
Galo cantou, diz que vem<br />
Na barra do dia sorrindo<br />
A manh&atilde;, ser feliz<br />
Vem que tem<br />
Fuzu&ecirc; na gafieira<br />
Rela, rela que a&iacute; vem<br />
</p>


<p><strong>Banquete de Signos</strong><br />
(Zé Ramalho)</p>

<p>Discutir o canga&ccedil;o com liberdade<br />
&Eacute; saber da viola, da viol&ecirc;ncia<br />
Descobrir nos cabelos inoc&ecirc;ncia<br />
&Eacute; saber da fatal fertilidade</p>

<p>Descobrir a cidade na natureza<br />
Descobrir a beleza dessa mulher<br />
Descobrir o que der boniteza<br />
Na peleja do homem vier, quando vier</p>

<p>Descobrir o baga&ccedil;o dos engenhos<br />
No mela&ccedil;o da cana mais um beijo<br />
Descobrir os desejos que n&atilde;o tem cura<br />
Saracura do brejo da novena</p>

<p>Descobrir a serena da natureza<br />
Descobrir a beleza dessa mulher<br />
Descobrir o que der boniteza<br />
Na peleja do homem vier, quando vier<br />
</p>


<p><strong>Jogo de Cintura</strong><br />
(Nando Cordel)</p>

<p>Voc&ecirc; tem que ter<br />
Jogo de cintura<br />
Olho na mistura<br />
N&atilde;o, n&atilde;o se incomodar<br />
De vez em quando nessa vida<br />
A gente engole um ca&ocirc;</p>

<p>Pra se arrumar, pra se arrumar<br />
Pra namorar, pra namorar<br />
Pra ser feliz, pra ser feliz<br />
Pra ter amor</p>

<p>E a &ocirc;<br />
Isso aqui vai melhorar<br />
E a &ocirc;<br />
Se a gente se enganchar<br />
E a &ocirc;<br />
Era bom que fosse j&aacute;<br />
Voc&ecirc; quer, eu tamb&eacute;m quero<br />
T&aacute; faltando come&ccedil;ar<br />
</p>


<p><strong>Brasil</strong><br />(Benedito Lacerda / Aldo Cabral)</p>


<p>Brasil, &eacute;s o meu ber&ccedil;o dourado<br />
O &iacute;ndio civilizado e aben&ccedil;oado por Deus<br />
Brasil, gigante de um continente<br />
&Eacute;s terra de toda gente<br />
Orgulho dos filhos teus<br />
</p>


<p><strong>Feitiço de Gafieira</strong>(Tadeu Mathias / Jaguar)</p>


<p>Mas pra que falar de tristeza<br />
Galo cantou, diz que vem<br />
Na barra do dia sorrindo<br />
A manh&atilde;, ser feliz<br />
Vem que tem<br />
Fuzu&ecirc; na gafieira<br />
Rela, rela que a&iacute; vem</p>

<p>Mais um chorinho<br />
Meu amor balan&ccedil;adinho<br />
Vem dan&ccedil;ar com esse jeitinho<br />
Que &eacute; meu e de mais ningu&eacute;m</p>

<p>Me enrosca toda<br />
Me d&aacute; um abra&ccedil;o<br />
Acerta o passo da minha paix&atilde;o<br />
Parece at&eacute;, ah, um descompasso<br />
Batendo no meu peito, no meu cora&ccedil;&atilde;o</p>

<p>Quero bem tanto de voc&ecirc;<br />
Quero no ponto<br />
Me deixa tonto de amor beber<br />
No c&eacute;u a lua se derrete em pranto<br />
Chorando de inveja d&rsquo;oc&ecirc;<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '01_feitico_de_gafieira_banquete.mp3', 
                'faixa_ogg' => '01_feitico_de_gafieira_banquete.ogg',
                'disco_id' => '12',   ));

Musicas::create(
            array(
                'faixa' => 'Pau-De-Arara (Vinheta)',
                'compositor' => '(Guio de Morais / Luiz Gonzaga)',
                'letra' => '<p>Quando eu vim do sert&atilde;o seu mo&ccedil;o<br />
Do meu Bodoc&oacute;<br />
A maleta era o saco<br />
O cadeado era um n&oacute;<br />
S&oacute; trazia a coragem e a cara<br />
Viajando num pau-de-arara<br />
Eu penei, mas aqui cheguei<br />
Viajando num pau-de-arara<br />
Eu penei, mas aqui cheguei<br />
</p>

',
'creditos' => '
',
                'faixa_mp3' => '02_pau_de_arara.mp3', 
                'faixa_ogg' => '02_pau_de_arara.ogg',
                'disco_id' => '12',   ));

Musicas::create(
            array(
                'faixa' => 'Filho Das &iacute;ndias',
                'compositor' => '(Vinicius Cantu&aacute;ria)',
                'letra' => '<p>Irupixuna bati&ecirc;, ela dan&ccedil;ava<br />
Filho das &iacute;ndias<br />
Irupixuna bati&ecirc;, ela dan&ccedil;ava<br />
Filho das &iacute;ndias<br />
</p>

<p><strong>A volta dos Trovões</strong><br />
(Br&aacute;ulio Tavares / Fub&aacute;)</p>


<p>Um tambor amedrontou a mata<br />
Quando o dia clareou<br />
Na clareira respondeu a flauta<br />
Um aviso de terror</p>

<p>Um cacique descobriu pegadas<br />
De um estranho ca&ccedil;ador<br />
Uma tribo foi exterminada<br />
Onde o rio avermelhou</p>

<p>Antes das chuvas<br />
Quando o trov&atilde;o tombou das estrelas<br />
E a selva escura<br />
Viu brilhar nas m&atilde;os de um deus<br />
Armas de estrondo e luz<br />
Como avisou a lenda<br />
Armas de estrondo e luz</p>

<p>On&ccedil;a negra caminhou nas cinzas<br />
Da fogueira que passou<br />
Gavi&atilde;o voando contra a brisa<br />
Viu a mancha do trator</p>

<p>Sobre o ch&atilde;o onde os paj&eacute;s dan&ccedil;avam<br />
Uma vila se formou<br />
Todo dia longe ressoava<br />
O machado lenhador</p>

<p>Dentro da selva<br />
Pulsam os cora&ccedil;&otilde;es dos guerreiros<br />
Esperando a noite<br />
Em que os astros v&atilde;o trazer<br />
A volta dos trov&otilde;es<br />
Como promete a lenda<br />
A volta dos trov&otilde;es<br />
</p>


<p><strong>Um &iacute;ndio (texto)</strong><br />(Caetano Veloso)</p>


<p>Um &iacute;ndio descer&aacute;<br />
De uma estrela colorida brilhante<br />
De uma estrela que vir&aacute;<br />
Numa velocidade estonteante<br />
E pousar&aacute; no cora&ccedil;&atilde;o do hemisf&eacute;rio sul<br />
Na Am&eacute;rica, na Am&eacute;rica<br />
Na Am&eacute;rica, num claro instante<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '03_filho_das_indias_a_volta_dos_trovoes_um_indio.mp3', 
                'faixa_ogg' => '03_filho_das_indias_a_volta_dos_trovoes_um_indio.ogg',
                'disco_id' => '12',   ));

Musicas::create(
            array(
                'faixa' => 'Imaculada',
                'compositor' => '(Ary Sperling / Aldir Blanc)',
                'letra' => '<p>Meu castelo &eacute; a casa da fazenda<br />
Onde te&ccedil;o a minha lenda<br />
Sei, meu pr&iacute;ncipe vir&aacute;<br />
Esse sonho bom que me alimenta<br />
A espera &eacute; menos lenta<br />
Se o desejo delirar</p>

<p>Eu prefiro assim<br />
Pois com essa espera<br />
Domo a fera que h&aacute; em mim<br />
&Eacute; imaculada a semente do prazer<br />
Rosa ardente por florescer</p>

<p>A crian&ccedil;a deixa o para&iacute;so<br />
Fadas, c&oacute;rregos, sorrisos<br />
A pureza virginal<br />
Planta no seu seio adolescente<br />
A ma&ccedil;&atilde; e a serpente<br />
Do pecado original</p>

<p>Quero ser mulher<br />
No lugar e hora que meu pr&iacute;ncipe quiser<br />
E assim conquistada pela espada do querer<br />
Continua a ser imaculada<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '04_imaculada.mp3', 
                'faixa_ogg' => '04_imaculada.ogg',
                'disco_id' => '12',   ));


Musicas::create(
            array(
                'faixa' => 'Miss Celie&#39;s blues',
                'compositor' => '(Quincy Jones / Rod Temperton / Lionel Richie)',
                'letra' => '<p>Sister, you&rsquo;ve been on my mind<br />
Oh sister, we&#39;re two of a kind<br />
So, sister, I&#39;m keepin&rsquo; my eye on you<br />
I betcha think I don&#39;t know nothin&rsquo;<br />
But singin&rsquo; the blues, oh, sister<br />
Have I got news for you, I&rsquo;m something<br />
I hope you think that you&rsquo;re something too</p>

<p>Scufflin&rsquo;, I been up that lonesome road<br />
And I seen a lot of suns going down<br />
Oh, but trust me<br />
No-o low life&#39;s gonna run me around</p>

<p>So let me tell you something sister<br />
Remember your name, no twister<br />
Gonna steal your stuff away, my sister<br />
Sho&rsquo; ain&rsquo;t got a whole lot of time<br />
So-o-o shake your shimmy sister<br />
&lsquo;Cause honey this Shug<br />
&lsquo;Cause honey<br />
&lsquo;Cause honey this Shug is feelin&rsquo; fine<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '05_miss_celies_blues.mp3', 
                'faixa_ogg' => '05_miss_celies_blues.ogg',
                'disco_id' => '12',   ));

Musicas::create(
            array(
                'faixa' => 'Tango de Nancy',
                'compositor' => '(Chico Buarque / Edu Lobo)',
                'letra' => '<p>Quem sou eu para falar de amor<br />
Se o amor me consumiu at&eacute; a espinha<br />
Dos meus beijos que falar<br />
Dos desejos de queimar<br />
E dos beijos que apagaram<br />
Os desejos que eu tinha</p>

<p>Quem sou eu para falar de amor<br />
Se de tanto me entregar<br />
Nunca fui minha<br />
O amor jamais foi meu<br />
O amor me conheceu<br />
Se esfregou na minha vida<br />
E me deixou assim</p>

<p>Homens eu n&atilde;o fiz a soma<br />
De quantos rolaram no meu camarim<br />
Outras chegaram a Roma passando por mim<br />
Ela de bra&ccedil;os abertos fazendo promessa<br />
Meus deuses, enfim!<br />
Eles gozando depressa<br />
Cheirando a gim</p>

<p>Eles querendo na hora<br />
Por dentro, por fora<br />
Por cima e por tr&aacute;s<br />
Juro por Deus de p&eacute;s juntos<br />
Que nunca mais</p>
',
'creditos' => '
',
                'faixa_mp3' => '06_tango_de_nancy.mp3', 
                'faixa_ogg' => '06_tango_de_nancy.ogg',
                'disco_id' => '12',   ));


Musicas::create(
            array(
                'faixa' => 'Las Muchachas de Copacabana',
                'compositor' => '(Chico Buarque)',
                'letra' => '<p>Se o cliente quer rumbeira, tem<br />
Com tempero da baiana<br />
Somos las muchachas de Copacabana<br />
Somos las muchachas de Copacabana</p>

<p>Cubanita brasileira tem<br />
Com sombreiro &agrave; mexicana<br />
Somos Las Muchachas de Copacabana<br />
Somos Las Muchachas de Copacabana<br />
 <br />
&ldquo;Mam&atilde;e<br />
Desculpa meus erros de caligrafia<br />
Lembran&ccedil;a da filha<br />
Que brilha aqui na capital<br />
&Eacute; uma estrela internacional<br />
Tua filha na capital<br />
&Eacute; uma estrela internacional&rdquo;</p>

<p>Quer uma amazona, o gringo tem<br />
Um domingo com a havaiana<br />
Somos las muchachas de Copacabana<br />
Somos las muchachas de Copacabana</p>

<p>Se quer uma pecadora, tem<br />
Uma loura mu&ccedil;ulmana<br />
Somos las muchachas de Copacabana<br />
Somos las muchachas de Copacabana</p>

<p>&ldquo;Mam&atilde;e<br />
Pro m&ecirc;s eu lhe mando umas economias<br />
Lembran&ccedil;a da filha<br />
Que brilha aqui na capital<br />
&Eacute; uma estrela internacional<br />
Tua filha na capital<br />
&Eacute; uma estrela internacional&rdquo;</p>

<p>Atra&ccedil;&atilde;o da Martinica, tem<br />
Uma chica sergipana<br />
Paraguaia da Jamaica, tem<br />
Balalaica peruana<br />
Corcovado em Mar del Plata, tem<br />
Catarata de banana<br />
&Iacute;ndia canibal, na certa tem<br />
&Eacute; oferta da semana<br />
Somos las muchachas de Copacabana<br />
Somos las muchachas de Copacabana<br />
</p>

',
'creditos' => '
',
                'faixa_mp3' => '07_las_muchachas_de_copacabana.mp3', 
                'faixa_ogg' => '07_las_muchachas_de_copacabana.ogg',
                'disco_id' => '12',   ));

Musicas::create(
            array(
                'faixa' => 'Ouro Puro',
                'compositor' => '(Cec&iacute;lio Nena / C&eacute;sar Rossini)',
                'letra' => '<p>Seu amor &eacute; uma luz<br />
&Eacute; um brilho no escuro<br />
Ouro puro, ouro puro<br />
T&ocirc; gamado em voc&ecirc;</p>

<p>Voc&ecirc; me assanha, me acende<br />
Me deixa em apuros<br />
Ouro puro, ouro puro<br />
Voc&ecirc; me d&aacute; prazer</p>

<p>Me faz brilhar<br />
Todo o meu querer<br />
Quando estou no seu corpo<br />
Suado queimando de paix&atilde;o</p>

<p>Vem lapidar<br />
Vem se derreter<br />
Quero banhar no teu beijo<br />
Te dar com desejo o meu cora&ccedil;&atilde;o</p>

<p>A vida inteira te amar<br />
Ouro puro<br />
A vida inteira te namorar<br />
Ouro puro</p>

<p>A vida inteira te beijar<br />
A vida inteira me entregar<br />
A vida inteira te beijar<br />
A vida inteira me entregar<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '08_ouro_puro.mp3', 
                'faixa_ogg' => '08_ouro_puro.ogg',
                'disco_id' => '12',   ));

Musicas::create(
            array(
                'faixa' => 'Doida',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>&Ocirc;, &ocirc;, &ocirc;, &ocirc;<br />
&Ocirc;, &ocirc;, &ocirc;, &ocirc;, &ocirc;<br />
Me saculeja, me beija<br />
Me d&aacute; teu calor</p>

<p>Doida, muito doida eu sou<br />
Pelo teu amor<br />
Doida, muito doida eu t&ocirc;<br />
Pelo teu amor</p>

<p>Vem mexer comigo<br />
Pra ver meu fogo te ascender<br />
Vem rolar comigo<br />
Se lambuzar no meu prazer<br />
Te dou carinho, te fa&ccedil;o um dengo<br />
Deixo a fim<br />
Te fa&ccedil;o tudo<br />
E voc&ecirc; s&oacute; faz gostar de mim<br />
</p>
<p><strong>V&ecirc; estrelas</strong><br />
(Nando Cordel)</p>

<p>&Eacute; hoje que a gente v&ecirc;<br />
Estrelas<br />
&Eacute; hoje que a gente faz<br />
Amor</p>

<p>Que bom, que bom querer<br />
Voc&ecirc;<br />
Que bom, que bom querer<br />
Voc&ecirc;<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '09_doida_ve_estrelas.mp3', 
                'faixa_ogg' => '09_doida_ve_estrelas.ogg',
                'disco_id' => '12',   ));

Musicas::create(
            array(
                'faixa' => 'Veja (Margarida)',
                'compositor' => '(Vital Farias)',
                'letra' => '<p>Veja voc&ecirc;, arco-&iacute;ris j&aacute; mudou de cor<br />
E uma rosa nunca mais desabrochou<br />
E eu n&atilde;o quero ver voc&ecirc;<br />
Com esse gosto de sab&atilde;o na boca</p>

<p>Arco-&iacute;ris j&aacute; mudou de cor<br />
E uma rosa nunca mais desabrochou<br />
E eu n&atilde;o quero ver voc&ecirc;<br />
Eu n&atilde;o quero ver</p>

<p>Veja meu bem<br />
Gasolina vai subir de pre&ccedil;o<br />
E eu n&atilde;o quero nunca mais seu endere&ccedil;o<br />
Ou &eacute; o come&ccedil;o do fim ou &eacute; o fim</p>

<p>Eu vou partir<br />
Pra cidade garantida, proibida<br />
Arranjar meio de vida, Margarida<br />
Pra voc&ecirc; gostar de mim</p>

<p>E essas feridas da vida, Margarida<br />
Essas feridas da vida, amarga vida<br />
Pra voc&ecirc; gostar<br />
(Pra voc&ecirc; gostar de mim)</p>
',
'creditos' => '
',
                'faixa_mp3' => '10_veja_margarida_.mp3', 
                'faixa_ogg' => '10_veja_margarida_.ogg',
                'disco_id' => '12',   ));

Musicas::create(
            array(
                'faixa' => 'Beatriz',
                'compositor' => '(Edu Lobo / Chico Buarque)Participa&ccedil;&atilde;o Especial: Tadeu Mathias',
                'letra' => '<p>Olha<br />
Ser&aacute; que ela &eacute; mo&ccedil;a<br />
Ser&aacute; que ela &eacute; triste<br />
Ser&aacute; que &eacute; o contr&aacute;rio<br />
Ser&aacute; que &eacute; pintura<br />
O rosto da atriz<br />
Se ela dan&ccedil;a no s&eacute;timo c&eacute;u<br />
Se ela acredita que &eacute; outro pa&iacute;s<br />
E se ela s&oacute; decora o seu papel<br />
E se eu pudesse entrar na sua vida</p>

<p>Olha<br />
Ser&aacute; que ela &eacute; lou&ccedil;a<br />
Ser&aacute; que ela de &eacute;ter<br />
Ser&aacute; que &eacute; loucura<br />
Ser&aacute; que &eacute; cen&aacute;rio<br />
A casa da atriz<br />
Se ela mora num arranha-c&eacute;u<br />
E se as paredes s&atilde;o feitas de giz<br />
E se ela chora num quarto de hotel<br />
Se eu pudesse entrar na sua vida</p>

<p>Sim<br />
Me leva para sempre Beatriz<br />
Me ensina a n&atilde;o andar<br />
Com os p&eacute;s no ch&atilde;o<br />
Para sempre, &eacute; sempre por um triz<br />
Diz quantos desastres tem na minha m&atilde;o<br />
Diz se &eacute; perigoso a gente ser feliz</p>

<p>Olha<br />
Ser&aacute; que &eacute; uma estrela<br />
Ser&aacute; que &eacute; mentira<br />
Ser&aacute; que &eacute; com&eacute;dia<br />
Ser&aacute; que &eacute; divina<br />
A vida da atriz<br />
Se ela um dia despencar do c&eacute;u<br />
E se os pagantes exigirem bis<br />
E se o arcanjo passar o chap&eacute;u<br />
E se eu pudesse<br />
Ah, se eu pudesse entrar na sua vida<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '11_beatriz_com_tadeu_mathias_.mp3', 
                'faixa_ogg' => '11_beatriz_com_tadeu_mathias_.ogg',
                'disco_id' => '12',   ));

Musicas::create(
            array(
                'faixa' => 'Marim Dos Caet&eacute;s',
                'compositor' => '(Alceu Valença)',
                'letra' => '<p><em>O artista precisa aparecer. N&atilde;o porque ele seja melhor do ningu&eacute;m. Mas porque o artista &eacute; transparente. E atrav&eacute;s da sua transpar&ecirc;ncia a gente pode enxergar o mundo. E o mundo precisa aparecer tamb&eacute;m.<em></p>

<p>N&atilde;o chore menina bonita<br />
Se Deus quiser<br />
Te vejo na Marim guerreira dos Caet&eacute;s<br />
De novo pra subir ladeiras<br />
Te dou, te dou meus p&eacute;s<br />
Olinda, Marim t&atilde;o bonita dos Caet&eacute;s</p>

<p>Vamos embora cabra cabriola<br />
T&aacute; chegando a hora da gente arribar<br />
Vamos simbora, j&aacute; fui caipora<br />
No jogo da sorte sempre dei azar</p>

<p>Vamos simbora, sei do itiner&aacute;rio<br />
Por ali passamos, por aqui passou<br />
Uma La Ursa da fita amarela<br />
Abrindo janelas para o nosso amor<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '12_marim_dos_caetes.mp3', 
                'faixa_ogg' => '12_marim_dos_caetes.ogg',
                'disco_id' => '12',   ));

Musicas::create(
            array(
                'faixa' => 'Popular Brasileira',
                'compositor' => '(Moraes Moreira / Fred G&oacute;es)',
                'letra' => '<p>Foi pra Cuba dan&ccedil;ar rumba<br />
Foi pras ilhas de l&aacute;, filha<br />
O Brasil foi levar<br />
Samba, frevos e maracatus</p>

<p>Quem olhasse em seus olhos via<br />
A ciranda girando tinha<br />
Um sabor de mesti&ccedil;a pele<br />
Lembran&ccedil;a da Bahia</p>

<p>Sapatilhas de ponta amor<br />
Fiz o ch&atilde;o e a cada passo<br />
Se voc&ecirc; me levar eu vou<br />
Estreitar nossos la&ccedil;os</p>

<p>Amizade e estima s&atilde;o<br />
Nordestina alegria sim<br />
Diz que tem, que tem solu&ccedil;&atilde;o<br />
Guerrilheira de mim</p>

<p>&Eacute; bonita, erudita<br />
Popular brasileira<br />
Deixe o vento levar o som<br />
N&atilde;o tem fronteiras</p>
',
'creditos' => '
',
                'faixa_mp3' => '13_popular_brasileira.mp3', 
                'faixa_ogg' => '13_popular_brasileira.ogg',
                'disco_id' => '12',   ));

Musicas::create(
            array(
                'faixa' => 'Nordeste Independente (Imagine o Brasil)',
                'compositor' => '(Br&aacute;ulio Tavares / Ivanildo Vilanova)',
                'letra' => '<p>J&aacute; que existe no sul esse conceito<br />
Que o nordeste &eacute; ruim, seco e ingrato<br />
J&aacute; que existe a separa&ccedil;&atilde;o de fato<br />
&Eacute; preciso torn&aacute;-la de direito<br />
Quando um dia qualquer isso for feito<br />
Todos dois v&atilde;o lucrar imensamente<br />
Come&ccedil;ando uma vida diferente<br />
De que a gente at&eacute; hoje tem vivido<br />
Imagina o Brasil ser dividido<br />
E o Nordeste ficar independente</p>

<p>Dividindo a partir de Salvador<br />
O nordeste seria outro pa&iacute;s<br />
Vigoroso, leal, rico e feliz<br />
Sem dever a ningu&eacute;m no exterior<br />
Jangadeiro seria o senador<br />
O cassaco de ro&ccedil;a era o suplente<br />
Cantador de viola o presidente<br />
O vaqueiro era o l&iacute;der do partido<br />
Imagina o Brasil ser dividido<br />
E o Nordeste ficar independente</p>

<p>Em Recife o distrito industrial<br />
O idioma ia ser nordestinense<br />
A bandeira de renda cearense<br />
Asa Branca era o hino nacional<br />
O folheto era o s&iacute;mbolo oficial<br />
A moeda, o tost&atilde;o de antigamente<br />
Conselheiro seria o inconfidente<br />
Lampi&atilde;o, o her&oacute;i inesquecido<br />
Imagina o Brasil ser dividido<br />
E o Nordeste ficar independente</p>

<p>O Brasil ia ter de importar<br />
Do nordeste algod&atilde;o, cana, caju<br />
Carna&uacute;ba, laranja, baba&ccedil;u<br />
Abacaxi e o sal de cozinhar<br />
O arroz, o agave do lugar<br />
O petr&oacute;leo, a cebola, o aguardente<br />
O Nordeste &eacute; autossuficiente<br />
O seu lucro seria garantido<br />
Imagina o Brasil ser dividido<br />
E o Nordeste ficar independente</p>

<p>Se isso a&iacute; se tornar realidade<br />
E algu&eacute;m do Brasil nos visitar<br />
Nesse nosso pa&iacute;s vai encontrar<br />
Confian&ccedil;a, respeito e amizade<br />
Tem o p&atilde;o repartido na metade<br />
Tem o prato na mesa, a cama quente<br />
Brasileiro ser&aacute; irm&atilde;o da gente<br />
Vai pra l&aacute; que ser&aacute; bem recebido<br />
Imagina o Brasil ser dividido<br />
E o Nordeste ficar independente</p>

<p>Eu n&atilde;o quero com isso que voc&ecirc;s<br />
Imaginem que eu tento ser grosseiro<br />
Pois se lembrem que o povo brasileiro<br />
&Eacute; amigo do povo portugu&ecirc;s<br />
Se um dia a separa&ccedil;&atilde;o se fez<br />
Todos os dois se respeitam no presente<br />
Se isso a&iacute; j&aacute; deu certo antigamente<br />
Nesse exemplo concreto e conhecido<br />
Imagina o Brasil ser dividido<br />
E o Nordeste ficar independente</p>

<p>Povo do meu Brasil<br />
Pol&iacute;ticos brasileiros<br />
Nunca pensem que voc&ecirc;s nos enganam<br />
Porque no fundo, no fundo<br />
Nosso povo n&atilde;o &eacute; besta!<br />
</p>
<p><strong>Asa Branca</strong><br />
(Luiz Gonzaga / Humberto Teixeira)</p>

<p>Qual fogueira de S&atilde;o Jo&atilde;o<br />
Eu perguntei a Deus do c&eacute;u, ai<br />
Por que tamanha judia&ccedil;&atilde;o<br />
Eu perguntei a Deus do c&eacute;u, ai<br />
Por que tamanha judia&ccedil;&atilde;o<br />
</p>

',
'creditos' => '
',
                'faixa_mp3' => '14_nordeste_independente_asa_branca.mp3', 
                'faixa_ogg' => '14_nordeste_independente_asa_branca.ogg',
                'disco_id' => '12',   ));

Musicas::create(
            array(
                'faixa' => 'Vida',
                'compositor' => '(Roger Kedyh / Maria Ju&ccedil;&aacute;) Participa&ccedil;&atilde;o Especial: Lulu Santos',
                'letra' => '<p>Vida &eacute; assim<br />
Vida<br />
Vida &eacute; assim<br />
Vida humana</p>

<p>Vida &eacute; alegria<br />
Vida me d&aacute; prazer<br />
Vida &eacute; a luz do dia<br />
Viva vadia<br />
Vida &eacute; o amor<br />
Vida &eacute; cor e confus&atilde;o<br />
Vida &eacute; som e paix&atilde;o</p>

<p>Vida &eacute; alegria<br />
Vida me d&aacute; prazer<br />
Vida &eacute; a luz do dia<br />
Viva vivida<br />
Vida &eacute; o amor<br />
Vida &eacute; cor e confus&atilde;o<br />
Vida &eacute; som e paix&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Eduardo Souto Netto<br />
Guitarras: Lulu Santos<br />
Bateria: Elber Bedaque<br />
Contrabaixo: Jamil Joanes<br />
Jamblock, congas e timbales: Repolho<br />
Trompetes: Marcio Montarroyos e Paulinho<br />
Trombone: Serginho<br />
Sax alto: Marcelo Martins e Mauro Senise<br />
Sax tenor: Maca&eacute;<br />
Coro: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Nair C&acirc;ndia, Fab&iacute;ola, Jaime Alem, Marcio Lott, Chico Pupo e Paulinho Soledade<br />
</p>
',
                'faixa_mp3' => '01_vida.mp3', 
                'faixa_ogg' => '01_vida.ogg',
                'disco_id' => '13',   ));

Musicas::create(
            array(
                'faixa' => 'Felicidade Urgente',
                'compositor' => '(Cl&aacute;udio Zoli / Ronaldo Lobato Santos) Participação Especial: Cl&aacute;udio Zoli',
                'letra' => '<p>Nunca mais eu vou voltar<br />
Essa estrada &eacute; meu destino<br />
Vou seguir a minha vida<br />
Vou achar o meu lugar</p>

<p>Louco pra viver em paz<br />
Eu procuro para&iacute;sos<br />
Em lugares esquecidos<br />
Em viagens ao luar</p>

<p>Eu vi a cor<br />
Sonhos<br />
E sei de cor<br />
O que &eacute; melhor pra mim</p>

<p>A vida me fez desse jeito<br />
O mundo &eacute; t&atilde;o imperfeito<br />
Pouca gente tem direito a ser feliz<br />
O tempo passa de repente<br />
Felicidade urgente para todos<br />
Para todos n&oacute;s</p>

<p>Quero te fazer feliz<br />
Quero ser feliz tamb&eacute;m<br />
Com voc&ecirc; t&aacute; tudo bem<br />
T&aacute; tudo bem</p>

<p>N&atilde;o vou mais olhar pra tr&aacute;s<br />
No caminho do infinito<br />
Encontrei uma raz&atilde;o<br />
E me perdi no teu olhar</p>

<p>Eu sempre quis muito mais<br />
Mais do que era preciso<br />
Quis milagres absintos<br />
E del&iacute;rios de prazer<br />
</p>
',
'creditos' => '<p>Arranjo, guitarras e voz: Claudio Zoli<br />
Teclados: Eduardo Souto Netto<br />
Bateria: Elber Bedaque<br />
Contrabaixo: Jamil Joanes<br />
Congas, timbales, afox&eacute; e martelo chin&ecirc;s: Repolho<br />
Coro: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Nair C&acirc;ndia, Fab&iacute;ola, Jaime Alem, Marcio Lott, Chico Pupo, Paulinho Soledade e Myrian Perachi<br />
</p>
',
                'faixa_mp3' => '02_felicidade_urgente.mp3', 
                'faixa_ogg' => '02_felicidade_urgente.ogg',
                'disco_id' => '13',   ));

Musicas::create(
            array(
                'faixa' => 'Morena de Angola',
                'compositor' => '(Chico Buarque)',
                'letra' => '<p>Morena de Angola<br />
Que leva o chocalho amarrado na canela<br />
Ser&aacute; que ela mexe o chocalho<br />
Ou o chocalho &eacute; que mexe com ela</p>

<p>Ser&aacute; que a morena cochila<br />
Escutando o cochicho do chocalho<br />
Ser&aacute; que desperta gingando<br />
E j&aacute; sai chocalhando pro trabalho</p>

<p>Ser&aacute; que ela t&aacute; na cozinha<br />
Guisando a galinha &agrave; cabidela<br />
Ser&aacute; que esqueceu da galinha<br />
E ficou batucando na panela</p>

<p>Ser&aacute; que no meio da mata, na moita<br />
A morena inda chocalha<br />
Ser&aacute; que ela n&atilde;o fica afoita<br />
Pra dan&ccedil;ar na chama da batalha</p>

<p>Morena de Angola<br />
Que leva o chocalho amarrado na canela<br />
Passando pelo regimento<br />
Ela faz requebrar a sentinela</p>

<p>Ser&aacute; que quando vai pra cama<br />
A morena se esquece dos chocalhos<br />
Ser&aacute; que namora fazendo bochincho<br />
Com seus penduricalhos</p>

<p>Ser&aacute; que ela t&aacute; caprichando<br />
No peixe que eu trouxe de Benguela<br />
Ser&aacute; que t&aacute; no remelexo<br />
Abandonou meu peixe na tigela</p>

<p>Ser&aacute; que quando fica choca<br />
P&otilde;e de quarentena o seu chocalho<br />
Ser&aacute; que depois ela bota<br />
A canela no nicho do pirralho</p>

<p>Morena de Angola<br />
Que leva o chocalho amarrado na canela<br />
Eu acho que deixei um cacho<br />
Do meu cora&ccedil;&atilde;o na Catumbela</p>

<p>Morena de Angola<br />
Que leva o chocalho amarrado na canela<br />
Morena, bichinha danada<br />
Minha camarada do MPLA<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Eduardo Souto Netto<br />
Bateria: Elber Bedaque<br />
Contrabaixo: Jamil Joanes<br />
Guitarra: Manass&eacute;s<br />
Acordeom: Oswaldinho do Acordeom<br />
Congas, ganz&aacute; e xequer&ecirc;: Repolho<br />
Coro: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Nair C&acirc;ndia, Fab&iacute;ola e Elba Ramalho<br />
</p>
',
                'faixa_mp3' => '03_morena_de_angola.mp3', 
                'faixa_ogg' => '03_morena_de_angola.ogg',
                'disco_id' => '13',   ));

Musicas::create(
            array(
                'faixa' => 'Ventos Do Norte',
                'compositor' => '(Djavan) Participa&ccedil;&atilde;o Especial: Djavan',
                'letra' => '<p>Bem-vinda n&atilde;o sei de onde<br />
N&atilde;o sei como apareceu<br />
Se foi dos ventos do norte<br />
Ou da mar&eacute; que cresceu</p>

<p>Toquei o seu lindo rosto<br />
E logo me apaixonei<br />
Amei com bastante gosto<br />
Tomei o posto de rei</p>

<p>&Eacute; como se eu tivesse<br />
Toda a for&ccedil;a de uma prece<br />
A me rodear<br />
&Eacute; como se eu tivesse<br />
Toda a for&ccedil;a de uma prece<br />
A me rodear</p>

<p>O meu amor foi t&atilde;o grande<br />
Que eu nem pude atinar<br />
Toda a mar&eacute;, todo o vento<br />
Como vem, torna a voltar</p>

<p>Assim se foi meu amor<br />
Deixando como lembran&ccedil;a<br />
A barra de sua saia<br />
Jogada na areia branca</p>

<p>&Eacute; como se eu tivesse<br />
Toda a for&ccedil;a de uma prece<br />
Pra n&atilde;o chorar<br />
&Eacute; como se eu tivesse<br />
Toda a for&ccedil;a de uma prece<br />
Pra n&atilde;o chorar<br />
</p>

',
'creditos' => '<p>Arranjo, viol&atilde;o e voz: Djavan<br />
Acordeom: Oswaldinho do Acordeom<br />
Contrabaixo: Jamil Joanes<br />
</p>
',
                'faixa_mp3' => '04_ventos_do_norte.mp3', 
                'faixa_ogg' => '04_ventos_do_norte.ogg',
                'disco_id' => '13',   ));

Musicas::create(
            array(
                'faixa' => 'Pisa Na Ful&ocirc;',
                'compositor' => '(Jo&atilde;o do Vale / Ernesto Pires / Silveira J&uacute;nior) Musicas Incidentais &ldquo;Extra&rdquo; (Gilberto Gil) e &ldquo;O cheiro da Carolina&rdquo; (Amorim Roxo / Z&eacute; Gonzaga)',
                'letra' => '<p>Pisa na ful&ocirc;<br />
Pisa na ful&ocirc;<br />
Pisa na ful&ocirc;<br />
N&atilde;o maltrate meu amor</p>

<p>Um dia desse<br />
Eu fui dan&ccedil;ar l&aacute; em Pedreira<br />
Na rua da golada<br />
Gostei da brincadeira<br />
Z&eacute; Caxang&aacute; era o tocador<br />
Mas s&oacute; tocava &ldquo;Pisa na ful&ocirc;&rdquo;</p>

<p>Eu vi menina<br />
Nem tinha doze anos<br />
Agarrar seu par<br />
Tamb&eacute;m sair dan&ccedil;ando<br />
Satisfeita e dizendo<br />
&ldquo;Meu amor, ai como &eacute; gostoso<br />
Pisa no ful&ocirc;&rdquo;</p>

<p>De madrugada Zeca Caxang&aacute;<br />
Disse ao dono da casa<br />
N&atilde;o precisa nem pagar<br />
Por favor, diga ao tocador<br />
Que eu tamb&eacute;m quero<br />
&ldquo;Pisa na ful&ocirc;&rdquo;</p>

<p>Carolina, hum, hum, hum<br />
Mas Carolina, hum, hum, hum<br />
Carolina, hum, hum, hum<br />
Mas Carolina, hum, hum, hum</p>
',
'creditos' => '<p>Arranjo e teclados: Eduardo Souto Netto<br />
Bateria: Elber Bedaque<br />
Contrabaixo: Jamil Joanes<br />
Guitarra: Manass&eacute;s<br />
Acordeom: Oswaldinho do Acordeom<br />
Bong&ocirc;, blocos, pandeiro, timbales e cowbell: Repolho<br />
Coro: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Nair C&acirc;ndia, Fab&iacute;ola, Jaime Alem, Marcio Lott, Chico Pupo e Paulinho Soledade<br />
</p>
',
                'faixa_mp3' => '05_pisa_na_fulo.mp3', 
                'faixa_ogg' => '05_pisa_na_fulo.ogg',
                'disco_id' => '13',   ));

Musicas::create(
            array(
                'faixa' => 'Mar&eacute; Dend&ecirc;',
                'compositor' => '(Carlinhos Brown) Participa&ccedil;&atilde;o Especial: Sandra de S&aacute; e Carlinhos Brown',
                'letra' => '<p>&ldquo;Mon doudou&rdquo; voc&ecirc; eu sei<br />
&ldquo;Mon doudou&rdquo; voc&ecirc; eu sei</p>

<p>Ol&aacute;, ola-&ecirc;<br />
Ol&aacute;, ola-&aacute;<br />
Ol&aacute;, ola-&ecirc;<br />
Ol&aacute;, ola-&aacute;<br />
Ol&aacute;, ol&aacute;...</p>

<p>Abusou, usou, usou<br />
Emprestou<br />
Deu pra mar&eacute; dend&ecirc;<br />
Um tesouro no isopor<br />
Res&iacute;duo que cessa a dor de vez</p>

<p>Chorou ar<br />
Chorou mar<br />
Chorou onda<br />
O ir do amor faz sentir chorona</p>

<p>A menina dos olhos<br />
A menina dos olhos</p>

<p>Ar de gostou<br />
Numa visagem nova<br />
Um ar selvagem rouba<br />
O fim para o final</p>

<p>Ar de gostou<br />
No alegre povoado<br />
De &iacute;ndio sofisticado<br />
Com a reza pela boca</p>

<p>Ar de gostou<br />
&Eacute; o bem, quero que ele goste<br />
&Eacute; o sol sortido de sorte<br />
Beijo assar querendo assar</p>

',
'creditos' => '<p>Arranjo de base: Carlinhos Brown<br />
Teclados: Eduardo Souto Netto<br />
Bateria: Elber Bedaque<br />
Contrabaixo: Jamil Joanes<br />
Guitarra: Joca<br />
Xequer&ecirc; e jemb&ecirc;: Repolho<br />
Viol&atilde;o, timbau, agog&ocirc; e vocal: Carlinhos Brown<br />
Coro: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Nair C&acirc;ndia, Fab&iacute;ola, Jaime Alem, Marcio Lott, Chico Pupo, Paulinho Soledade e Myrian Perachi<br />
</p>
',
                'faixa_mp3' => '06_mare_dende_com_sandra_de_sa.mp3', 
                'faixa_ogg' => '06_mare_dende_com_sandra_de_sa.ogg',
                'disco_id' => '13',   ));

Musicas::create(
            array(
                'faixa' => 'Fim De Jogo',
                'compositor' => '(Jamil Joanes / Nelson Motta)',
                'letra' => '<p>Quem sabe quando amanhecer<br />
Tudo de bom vai ser mem&oacute;ria<br />
Nossa hist&oacute;ria de amor vai ser<br />
Passado, promessa, paix&atilde;o<br />
Paisagem, pensamento<br />
Noite clara de ver&atilde;o</p>

<p>Quem sabe o que ser&aacute; de n&oacute;s?<br />
Quem sabe o pr&oacute;ximo momento?<br />
Tudo em n&oacute;s &eacute; desejo de amar<br />
Medo de amar<br />
Febre de amor a nos consumir<br />
Em nosso pr&oacute;prio fogo</p>

<p>Jogos de amor<br />
Surpresas do cora&ccedil;&atilde;o<br />
Tristezas feitas de momentos bons<br />
De tantos sentimentos v&atilde;os</p>

<p>Nesses jogos do amor<br />
Ganhar, perder, tanto faz meu amor<br />
Gozar, sofrer, fazem parte do amor<br />
Do jogo de viver para amar</p>

<p>Voc&ecirc; me diz que n&atilde;o me quer<br />
Vem pra dizer que vai embora<br />
Mas na hora do adeus n&atilde;o vai mais<br />
Nunca, jamais<br />
Fica sempre ao meu lado, sim<br />
At&eacute; o fim do jogo<br />
</p>
',
'creditos' => '<p>Arranjo e contrabaixo: Jamil Joanes<br />
Teclados: Eduardo Souto Netto<br />
Viola: Joca<br />
Viol&atilde;o: Claudio Jorge<br />
Efeitos/pratos: Elber Bedaque</p>
',
                'faixa_mp3' => '07_fim_de_jogo.mp3', 
                'faixa_ogg' => '07_fim_de_jogo.ogg',
                'disco_id' => '13',   ));

Musicas::create(
            array(
                'faixa' => 'Feitiço',
                'compositor' => '(Lenine)',
                'letra' => '<p>Voc&ecirc; passou fogoso<br />
Bonito e cheiroso a me enfeiti&ccedil;ar<br />
Com seu andar macio<br />
Gato no cio com pressa de chegar</p>

<p>E eu cai num del&iacute;rio<br />
E foi um col&iacute;rio pro meu olhar<br />
Perdi o rebolado<br />
Esse teu bailado &eacute; de estontear<br />
Perdi o rebolado<br />
Esse teu bailado &eacute; de estontear</p>

<p>E eu<br />
Eu quis te conquistar, e a&iacute;<br />
Eu quis te conhecer, e a&iacute;<br />
Fui at&eacute; num terreiro<br />
E nuns batuqueiros<br />
Pedi pros santos interceder</p>

<p>Eu quis te castigar, e a&iacute;<br />
Eu quis te convencer, e a&iacute;<br />
Saciar meu desejo<br />
E te dar um beijo de endoidecer<br />
Saciar meu desejo<br />
E te dar um beijo de endoidecer</p>

<p>E sempre que eu podia<br />
Te perseguia na marca&ccedil;&atilde;o<br />
De longe desejava<br />
Te acompanhava na percuss&atilde;o<br />
Eu era a tua sombra<br />
Ao som da rumba do meu cora&ccedil;&atilde;o<br />
Me imaginei rainha<br />
A melhor farinha pro teu pir&atilde;o<br />
Me imaginei rainha<br />
A melhor farinha pro teu pir&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo de base e guitarras: Lenine<br />
Arranjo de metais e teclados: Eduardo Souto Netto<br />
Bateria: Elber Bedaque<br />
Contrabaixo: Jamil Joanes<br />
Acordeom: Oswaldinho do Acordeom<br />
Congas, timbales, clave e talkdrums: Repolho<br />
Trompetes: Marcio Montarroyos e Paulinho<br />
Trombone: Serginho<br />
Sax alto: Marcelo Martins e Mauro Senise<br />
Sax tenor: Maca&eacute;<br />
Coro: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Nair C&acirc;ndia, Fab&iacute;ola, Jaime Alem, Marcio Lott, Chico Pupo, Paulinho Soledade e Myrian Perachi<br />
</p>
',
                'faixa_mp3' => '08_feitico.mp3', 
                'faixa_ogg' => '08_feitico.ogg',
                'disco_id' => '13',   ));

Musicas::create(
            array(
                'faixa' => 'Deixa Falar',
                'compositor' => '(F&aacute;tima Guedes)',
                'letra' => '<p>Todo mundo pensa que tem um xod&oacute;<br />
Deixa falar, ser&aacute; que &eacute;?<br />
Mas eu dou meu amor s&oacute; pra quem eu quiser<br />
Eu dou pra quem eu quiser</p>

<p>Todo mundo pensa que um xod&oacute; &eacute; assim<br />
Chegar, ficar, grudar ni mim<br />
Mas assim grudadinha eu sou mais maxixeira<br />
Sou a fina flor da mulher brasileira</p>

<p>Todo mundo jura que eu gosto de voc&ecirc;<br />
Deixa falar que eu quero ver<br />
Do carinho que eu guardo ningu&eacute;m vai saber<br />
Ningu&eacute;m jamais vai saber</p>

<p>Minha vida &eacute; um maxixe<br />
E maxixe &eacute; assim<br />
Chegar, ficar, grudar ni mim<br />
Mas eu tenho um xod&oacute; que me faz t&atilde;o brejeira<br />
Sou a fina flor da mulher brasileira<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Eduardo Souto Netto<br />
Bateria: Elber Bedaque<br />
Contrabaixo: Jamil Joanes<br />
Viola: Manass&eacute;s<br />
Acordeom: Oswaldinho do Acordeom<br />
Tri&acirc;ngulo, ovo sonoro e bong&ocirc;: Repolho<br />
Sax soprano: Mauro Senise<br />
</p>
',
                'faixa_mp3' => '09_diexa_falar.mp3', 
                'faixa_ogg' => '09_diexa_falar.ogg',
                'disco_id' => '13',   ));

Musicas::create(
            array(
                'faixa' => 'É d&#39;Oxum',
                'compositor' => '(Ger&ocirc;nimo / Vev&eacute; Calazans)',
                'letra' => '<p>Nessa cidade todo mundo &eacute; d&rsquo;Oxum<br />
Homem, menino, menina, mulher<br />
Toda essa gente irradia magia</p>

<p>Presente na &aacute;gua doce<br />
Presente na &aacute;gua salgada<br />
E toda cidade brilha</p>

<p>Seja tenente ou filho de pescador<br />
Ou importante desembargador<br />
Se der presente &eacute; tudo uma coisa s&oacute;</p>

<p>A for&ccedil;a que mora n&rsquo;&aacute;gua<br />
N&atilde;o faz distin&ccedil;&atilde;o de cor<br />
E toda cidade &eacute; d&rsquo;Oxum<br />
&Eacute; d&rsquo;Oxum, &eacute; d&rsquo;Oxum<br />
&Eacute; d&rsquo;Oxum</p>

<p>Eu vou navegar<br />
Eu vou navegar nas ondas do mar<br />
Eu vou navegar<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Eduardo Souto Netto<br />
Bateria: Elber Bedaque<br />
Contrabaixo: Jamil Joanes<br />
Viola: Manass&eacute;s<br />
Surdo: Carlinhos Brown<br />
Congas, efeitos, blocos, pandeiro, repique e caixa: Repolho<br />
Coro: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Nair C&acirc;ndia, Fab&iacute;ola, Jaime Alem, Marcio Lott, Chico Pupo e Paulinho Soledade<br />
</p>
',
                'faixa_mp3' => '10_e_doxum.mp3', 
                'faixa_ogg' => '10_e_doxum.ogg',
                'disco_id' => '13',   ));

Musicas::create(
            array(
                'faixa' => 'Tudo Vai Bem (N&oacute;s sofre, mas n&oacute;s goza)',
                'compositor' => '(Vital Farias)',
                'letra' => '<p>Vou com voc&ecirc;<br />
Pela avenida<br />
&Oacute; que besteira<br />
Se na quarta-feira estou fulo da vida</p>

<p>Puxa, voc&ecirc; s&oacute; quer brincar<br />
Sua cabe&ccedil;a n&atilde;o quer pensar<br />
Veja que a vida est&aacute; muito mais pra l&aacute;</p>

<p>Brinca comigo<br />
Esse fim de carnaval<br />
Esse perigo<br />
Para mim j&aacute; &eacute; normal</p>

<p>Eu e voc&ecirc; na buraqueira<br />
Pai e filho, espirito santo, am&eacute;m<br />
N&oacute;s sofre, mas n&oacute;s goza meu bem</p>

<p>Quando estou s&oacute;<br />
Voc&ecirc; n&atilde;o v&ecirc; o meu sucesso<br />
Posso n&atilde;o ter ordem<br />
Mas j&aacute; tenho algum progresso<br />
Pensa que abafa, voc&ecirc; &eacute; &ldquo;analfa&rdquo;<br />
N&atilde;o pensa nem faz o que quer<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Eduardo Souto Netto<br />
Bateria: Elber Bedaque<br />
Contrabaixo: Jamil Joanes<br />
Guitarra: Joca<br />
Acordeom: Oswaldinho do Acordeom<br />
Surdo e pandeiro: Repolho<br />
Sax alto e piccolo: Mauro Senise<br />
Trompetes: Marcio Montarroyos e Paulinho<br />
Trombone: Serginho<br />
Sax alto: Marcelo Martins<br />
Sax tenor: Maca&eacute;<br />
</p>
',
                'faixa_mp3' => '11_tudo_vai_bem_nos_sofre_mas_nos_goza.mp3', 
                'faixa_ogg' => '11_tudo_vai_bem_nos_sofre_mas_nos_goza.ogg',
                'disco_id' => '13',   ));

Musicas::create(
            array(
                'faixa' => 'La Vie En Rose',
                'compositor' => '(Pierre Louiguy / Edith Piaf)Participa&ccedil;&atilde;o Especial: Oswaldinho do Acordeom',
                'letra' => '<p>Quand il me prend dans s&eacute;s br&aacute;s<br />
Il me parle tout bas<br />
Je vouis la vie en rose</p>

<p>Il me dit d&ecirc;s mots d&rsquo;amour<br />
D&ecirc;s mots de tous l&ecirc;s jours<br />
Et &ccedil;a ni&rsquo;fait quelque chose</p>

<p>Il est entre dans mon coeur<br />
Il me parle de bouneur<br />
Dont je connais la cause</p>

<p>C&rsquo;est moi pour toi<br />
Toi pour moi dans la vie<br />
Il me la dit<br />
La jur&eacute; pour la vie</p>

<p>C&rsquo;est moi pour lui<br />
Lui pour moi dans la vie<br />
Il me la dit<br />
La jur&eacute; pour la vie</p>

<p>Il est grand je l&rsquo;aper&ccedil;ois<br />
Alors je sens dans moi<br />
Mon coeur que bat<br />
</p>
',
'creditos' => '<p>Arranjo e acordeom: Oswaldinho do Acordeom<br />
Teclados: Eduardo Souto Netto<br />
Contrabaixo: Jamil Joanes<br />
</p>
',
                'faixa_mp3' => '12_la_vie_en_rose.mp3', 
                'faixa_ogg' => '12_la_vie_en_rose.ogg',
                'disco_id' => '13',   ));

Musicas::create(
            array(
                'faixa' => 'São João Na Estrada',
                'compositor' => '(Moraes Moreira)',
                'letra' => '<p><strong>Caminhoneiro solit&aacute;rio</strong> (vinheta)<br />
(Mazzola)</p>

<p>Sons, efeitos e montagem: Geraldo, Claudinho, Marquinho e Marcelo Saboia<br />
</p>
<p>No m&ecirc;s de junho<br />
Tenho Deus por testemunho<br />
Com meu viol&atilde;o em punho<br />
Vou fazer o S&atilde;o Jo&atilde;o<br />
Tomar licor, menino, fazer eu vou<br />
A festa do interior<br />
E tamb&eacute;m da capital</p>

<p>Vou pra Natal e l&aacute; no circo da folia<br />
Vai amanhecer o dia<br />
E todo mundo no forr&oacute;<br />
L&aacute; em Timbau no forr&oacute; do seu Patr&iacute;cio<br />
Vai ter fogos de artif&iacute;cios<br />
Tamb&eacute;m l&aacute; em Mossor&oacute;</p>

<p>Em Jo&atilde;o Pessoa<br />
Soa bem esse galope<br />
E tem quem dance e tem quem toque<br />
E com que anima&ccedil;&atilde;o<br />
Santa Luzia, guia meus passos, me mande<br />
Al&eacute;m de Campina Grande a Sousa e toda a regi&atilde;o</p>

<p>Em Fortaleza com certeza um ouri&ccedil;o<br />
Juazeiro, Padim Ci&ccedil;o tamb&eacute;m vai dan&ccedil;ar bai&atilde;o<br />
Em Macei&oacute; quero ver bal&atilde;o no c&eacute;u<br />
Arapiraca e S&atilde;o Miguel<br />
Dando viva a S&atilde;o Jo&atilde;o</p>

<p>N&atilde;o pode parar o sanfoneiro<br />
N&atilde;o pode parar o cora&ccedil;&atilde;o<br />
S&oacute; pode parar a guerra<br />
Eu quero paz na terra<br />
E no c&eacute;u bal&atilde;o</p>

<p>Em Teresina, como se faz todo ano<br />
Parna&iacute;ba e Floriano tamb&eacute;m v&atilde;o comemorar<br />
Vou caminhando, vou chegando at&eacute; Recife<br />
Meu amor quem foi que disse<br />
Que n&atilde;o tem Caruaru?</p>

<p>Aracaju tem caju e tem castanha<br />
Gente aprende, gente apanha<br />
Nessa vida de estradeiro<br />
Em Salvador<br />
Vou chegar l&aacute; na Bahia<br />
L&aacute; na terra da alegria<br />
Vai ser festa o ano inteiro<br />
</p>

',
'creditos' => '<p>Arranjo de base: Julinho Teixeira e Mazzola<br />
Arranjo de metais: Julinho Teixeira<br />
Caixa e c/tempo: Elber Bedaque<br />
Contrabaixo: Jamil Joanes<br />
Guitarra: Robertinho de Recife<br />
Acordeom: Oswaldinho do Acordeom<br />
Sax: Marcelo Neves e Marcelo Martins<br />
Trompetes: Bidinho, Formiga, Hamilton e Paulo Martins<br />
Trombone: Roberto Marques<br />
Programa&ccedil;&atilde;o de bateria: Renato Ladeira<br />
Teclados: Julinho Teixeira<br />
Percuss&atilde;o: Repolho<br />
Efeitos: Foguete<br />
Vocais: Betina e Jussara<br />
</p>
',
                'faixa_mp3' => '01_sao_joao_na_estrada.mp3', 
                'faixa_ogg' => '01_sao_joao_na_estrada.ogg',
                'disco_id' => '14',   ));

Musicas::create(
            array(
                'faixa' => 'Flora',
                'compositor' => '(Ednardo / Dominguinhos / Clim&eacute;rio)',
                'letra' => '<p>Se eu pudesse pensar em ti<br />
Sem vontade de querer chorar<br />
Sem pensar em querer morrer<br />
Nem pensar em querer voltar</p>

<p>Essa dor que eu sinto agora<br />
&Eacute; uma dor que n&atilde;o tem nome<br />
Que o meu peito devora<br />
E come e fere e maltrata<br />
Sem matar</p>

<p>No ro&ccedil;ado do meu cora&ccedil;&atilde;o<br />
H&aacute; um tempo de plantar saudade<br />
H&aacute; um tempo de colher lembran&ccedil;a<br />
Pra depois com o tempo chorar</p>

<p>Oh, Flora meu sert&atilde;o florindo<br />
Aflora meu peito s&oacute;<br />
Teu amor &eacute; um fogo<br />
&Eacute; um fogo, &eacute; um fogo, &eacute; um fogo<br />
Dos teus olhos ti&ccedil;&atilde;o<br />
Teu amor &eacute; um fogo<br />
&Eacute; um fogo, &eacute; um fogo, &eacute; um fogo<br />
Dos teus olhos ti&ccedil;&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Fernando Moura<br />
Concep&ccedil;&atilde;o do arranjo: Mazzola<br />
Bateria: Jorginho Gomes<br />
Contrabaixo: Jamil Joanes<br />
Guitarra: Robertinho de Recife<br />
Viol&atilde;o: Manass&eacute;s<br />
Acordeom: Oswaldinho do Acordeom<br />
</p>
',
                'faixa_mp3' => '02_flora.mp3', 
                'faixa_ogg' => '02_flora.ogg',
                'disco_id' => '14',   ));

Musicas::create(
            array(
                'faixa' => 'Alegria Real',
                'compositor' => '(Saul Barbosa / Jaime Sodr&eacute;)',
                'letra' => '<p>A f&eacute; que atravessou o oceano<br />
Tem a for&ccedil;a de uma figa de guin&eacute;<br />
A juventude &eacute; a esperan&ccedil;a desse povo<br />
N&atilde;o precisa acreditar em S&atilde;o Tom&eacute;</p>

<p>&Ocirc;, &ocirc;, &ocirc;<br />
&Ocirc;, &ocirc;, &ocirc;<br />
&Ocirc;, &ocirc;, &ocirc;, &ocirc;<br />
O dia da igualdade j&aacute; chegou</p>

<p>Mistura no preto e no branco<br />
Suor e calor<br />
Na alegria da democracia real<br />
E um canto penetra num fruto<br />
Chamado emo&ccedil;&atilde;o<br />
Da semente plantada<br />
Da liberta&ccedil;&atilde;o</p>

<p>S&oacute; por amor, &ocirc;, &ocirc;<br />
S&oacute; por amor, &ocirc;, &ocirc;<br />
S&oacute; por amor, &ocirc;, &ocirc;<br />
S&oacute; por amor</p>

<p>Circula no corpo da alma um novo clamor<br />
No meu peito dourado seu sol vai se por<br />
E as bandeiras forradas de verde da nossa uni&atilde;o<br />
Na folia, na festa da liberta&ccedil;&atilde;o</p>
',
'creditos' => '<p>Arranjo e viol&atilde;o: Saul Barbosa<br />
Guitarra: Luiz Brasil<br />
Teclados: Marcos Farias<br />
Baixo: Jamil Joanes<br />
Repenique: Repolho e Marcos Lobo<br />
Surdo: Ary Dias<br />
Vocais: Jussara, Betina, Nair C&acirc;ndia, Jurema de C&acirc;ndia, Marcio Lott, Zeppa Souza, Louren&ccedil;o e Pedrinho Lopes<br />
</p>
',
                'faixa_mp3' => '03_alegria_real.mp3', 
                'faixa_ogg' => '03_alegria_real.ogg',
                'disco_id' => '14',   ));


Musicas::create(
            array(
                'faixa' => 'Que Nem Vem-Vem',
                'compositor' => '(Maciel Melo)',
                'letra' => '<p>
Quebrei no dente o taco da literatura<br />
T&ocirc; na hist&oacute;ria, t&ocirc; eu sei<br />
Que sou motivo pra falar<br />
Entrei de cara<br />
Cara, t&ocirc; caindo fora<br />
T&aacute; no tempo<br />
J&aacute; &eacute; hora de poder me desfrutar</p>

<p>Semente negra, eu sou raiz poderosa<br />
Aguada em verso e prosa<br />
Na cacimba de Bel&aacute;<br />
Meu canto tem um chapo-chapo de uma cuia<br />
Tem, tem<br />
Tem as manhas que o Mestre Louro plantou</p>

<p>Pra colher eu canto assim que nem vem-vem<br />
Pra soar como um acorde de sanfona<br />
Festejar que nem passarim no xer&eacute;m<br />
Namorar com as batidas da zabumba</p>

<p>Tum, tum, tum<br />
Bate, bate meu cora&ccedil;&atilde;o<br />
Por um forr&oacute; que nem o de Passagem Funda<br />
Tum, tum, tum<br />
Bate, bate meu cora&ccedil;&atilde;o<br />
D&aacute;-lhe zabumba, Jackson no pandeiro &eacute; &aacute;s<br />
Tum, tum, tum<br />
Bate, bate meu cora&ccedil;&atilde;o<br />
Se esse moreno n&atilde;o me quer<br />
N&atilde;o quero mais</p>
',
'creditos' => '<p>Arranjo, programa&ccedil;&atilde;o de computador e teclados: Marcos Farias<br />
Baixo: Jamil Joanes<br />
Guitarra: Manass&eacute;s<br />
Bateria: Elber Bedaque<br />
Teclados: Fernando Moura<br />
Tri&acirc;ngulo, block, pandeiro, timbales e zabumba: Repolho<br />
Acordeom: Oswaldinho do Acordeom e Marcos Farias<br />
Vocais: Jussara e Elba<br />
</p>
',
                'faixa_mp3' => '04_que_nem_vem_vem.mp3', 
                'faixa_ogg' => '04_que_nem_vem_vem.ogg',
                'disco_id' => '14',   ));

Musicas::create(
            array(
                'faixa' => 'Dúvida',
                'compositor' => '(Luiz Gonzaga / Domingos Ramos) <em>&ldquo;Pro meu pai, seu Jo&atilde;o Nunes&rdquo;</em>',
                'letra' => '<p>N&atilde;o sei por que raz&atilde;o tu tens ci&uacute;mes<br />
N&atilde;o sei por que raz&atilde;o n&atilde;o cr&ecirc;s em mim<br />
Bem sabes que te quero<br />
E o meu amor &eacute; t&atilde;o sincero<br />
&Eacute; demais duvidar tanto assim, ai de mim<br />
N&atilde;o sei por que raz&atilde;o tu tens ci&uacute;mes<br />
N&atilde;o sei por que raz&atilde;o n&atilde;o cr&ecirc;s em mim</p>

<p>Bem v&ecirc;s que vivo escravizado<br />
E preso ao teu encanto<br />
N&atilde;o deves duvidar assim de quem te adora tanto<br />
N&atilde;o deves duvidar de mim<br />
Por que n&atilde;o tens raz&atilde;o<br />
E assim torturas sem querer meu cora&ccedil;&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjos: Robertinho de Recife e Manass&eacute;s<br />
Teclados e detalhes: Marcos Farias<br />
Baixo: Jamil Joanes<br />
Bateria: Elber Bedaque<br />
Viol&atilde;o de base e viola: Robertinho de Recife<br />
Viola 12 cordas e guitarra portuguesa (solo): Manass&eacute;s<br />
Clave, afox&eacute; e guiro: Repolho<br />
Acordeom: Oswaldinho do Acordeom<br />
</p>

',
                'faixa_mp3' => '05_duvida.mp3', 
                'faixa_ogg' => '05_duvida.ogg',
                'disco_id' => '14',   ));

Musicas::create(
            array(
                'faixa' => 'Caminhos Do Cora&ccedil;&atilde;o',
                'compositor' => '(Gonzaguinha)',
                'letra' => '<p>H&aacute; muito tempo que eu sa&iacute; de casa<br />
H&aacute; muito tempo que eu ca&iacute; na estrada<br />
H&aacute; muito tempo que eu estou na vida<br />
Foi assim que eu quis<br />
Assim eu sou feliz</p>

<p>Principalmente por poder voltar<br />
A todos os lugares onde j&aacute; cheguei<br />
Pois l&aacute; deixei um prato de comida<br />
Um abra&ccedil;o amigo<br />
Um canto pra dormir e sonhar</p>

<p>E aprendi que se depende sempre<br />
De tanta, muita, diferente gente<br />
Toda pessoa sempre &eacute; as marcas<br />
Das li&ccedil;&otilde;es di&aacute;rias<br />
De outras tantas pessoas</p>

<p>E &eacute; t&atilde;o bonito quando a gente entende<br />
Que a gente &eacute; tanta gente<br />
Onde quer que a gente v&aacute;<br />
E &eacute; t&atilde;o bonito quando a gente sente<br />
Que nunca est&aacute; sozinho<br />
Por mais que tente estar</p>

<p>&Eacute; t&atilde;o bonito quando a gente pisa firme<br />
Nessas linhas que est&atilde;o<br />
Na palma de nossas m&atilde;os<br />
E &eacute; t&atilde;o bonito quando a gente vai &agrave; vida<br />
Nos caminhos onde bate<br />
Bem mais forte o cora&ccedil;&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo, viola, guitarra solo e detalhe: Robertinho de Recife<br />
Teclados: Marcos Farias<br />
Baixo: Jamil Joanes<br />
Viola 12 cordas: Manass&eacute;s<br />
Bateria: Elber Bedaque<br />
Tri&acirc;ngulo, talkdrums, pandeiro, efeitos e bells: Repolho<br />
</p>
',
                'faixa_mp3' => '06_caminhos_do_coracao.mp3', 
                'faixa_ogg' => '06_caminhos_do_coracao.ogg',
                'disco_id' => '14',   ));

Musicas::create(
            array(
                'faixa' => 'Miragem Do Porto',
                'compositor' => '(Lenine / Br&aacute;ulio Tavares)',
                'letra' => '<p>Eu sou aquele navio no mar<br />
Sem rumo e sem dono<br />
Tenho a miragem do porto<br />
Pra reconfortar meu sono<br />
E flutuar sobre as &aacute;guas<br />
Na mar&eacute; do abandono</p>

<p>E l&aacute; no mar<br />
Eu vi uma maravilha<br />
Vi o rosto de uma ilha<br />
Numa noite de luar<br />
&Ecirc;ta luar, lumi&ocirc; o meu navio<br />
Quem vai l&aacute; no mar bravio<br />
N&atilde;o sabe o que vai achar</p>

<p>E sou a ilha deserta onde ningu&eacute;m quer chegar<br />
Lendo a rota das estrelas na imensid&atilde;o do mar<br />
Chorando por um navio<br />
Ai, ai, ui, ui<br />
Que passou sem lhe avistar<br />
</p>
',
'creditos' => '<p>Arranjo, programa&ccedil;&atilde;o de computador e teclados: Luiz Avellar<br />
Viola: Manass&eacute;s<br />
Vocais: Robson, L&eacute;o e Chico Puppo</p>
',
                'faixa_mp3' => '07_miragem_do_porto.mp3', 
                'faixa_ogg' => '07_miragem_do_porto.ogg',
                'disco_id' => '14',   ));

Musicas::create(
            array(
                'faixa' => 'Cidad&atilde;o',
                'compositor' => '(Moraes Moreira / Capinan) Participa&ccedil;&atilde;o Especial: Margareth Menezes',
                'letra' => '<p>Na m&atilde;o do poeta<br />
O sol se levanta e a lua se deita<br />
Na c&ocirc;ncava pra&ccedil;a<br />
Aponta o poente, o apronte, o levante<br />
Crescente da massa</p>

<p>Aos p&eacute;s do poeta<br />
A ra&ccedil;a descansa de olho na festa<br />
E o c&eacute;u aben&ccedil;oa essa f&eacute; t&atilde;o profana<br />
&Oacute; minha gente baiana<br />
Goza mesmo que doa</p>

<p>Aboli&ccedil;&atilde;o<br />
No cora&ccedil;&atilde;o do poeta<br />
Cabe a multid&atilde;o<br />
Quem sabe essa pra&ccedil;a repleta<br />
Navio negreiro j&aacute; era<br />
Agora quem manda &eacute; a galera<br />
Nessa cidade na&ccedil;&atilde;o<br />
Cidad&atilde;o<br />
Navio negreiro j&aacute; era<br />
Agora quem manda &eacute; a galera<br />
Nessa cidade na&ccedil;&atilde;o</p>

<p>Aboli&ccedil;&atilde;o<br />
No carnaval do poeta<br />
Cabe a multid&atilde;o<br />
Quem sabe essa pra&ccedil;a repleta<br />
Navio negreiro j&aacute; era<br />
Agora quem manda &eacute; a galera<br />
Nessa cidade na&ccedil;&atilde;o<br />
Cidad&atilde;o<br />
Navio negreiro j&aacute; era<br />
Agora quem manda &eacute; a galera<br />
Nessa cidade na&ccedil;&atilde;o<br />
</p>

',
'creditos' => '<p>Arranjo: Mazzola, Ricardo Le&atilde;o e Moraes Moreira<br />
Bateria: Jorginho Gomes<br />
Contrabaixo: Jamil Joanes<br />
Guitarra: Davi Moraes<br />
Percuss&atilde;o: Mingo, Cidinho e Repolho<br />
Surdo: Gordinho<br />
Teclados: Ricardo Le&atilde;o<br />
Vocais: Jurema C&acirc;ndia, Jussara, Nair Candia, Betina, Zeppa Souza, Chico Puppo, Louren&ccedil;o e Marcio Lott<br />
Povo: Elba, Pimpa, Mazzola e Fatinha<br />
</p>
',
                'faixa_mp3' => '08_cidadao.mp3', 
                'faixa_ogg' => '08_cidadao.ogg',
                'disco_id' => '14',   ));

Musicas::create(
            array(
                'faixa' => 'Na hora &ldquo;H&rdquo;',
                'compositor' => '(Oswaldinho / Eliezer Setton)',
                'letra' => '<p>Oi, tunda tata tum<br />
Vareta no zabumba<br />
Oi, tunda t&aacute;, tudo &eacute; suor<br />
Oi , ting ling dim, tri&acirc;ngulo<br />
Xenhennh&eacute;m sanfona<br />
Isso &eacute; forr&oacute;</p>

<p>Volta e meia algu&eacute;m dizia<br />
Que o forr&oacute; perdia de vez seu lugar<br />
Tinha at&eacute; quem apostasse<br />
Que o substituto chegou pra ficar</p>

<p>Eu que conhe&ccedil;o seu mo&ccedil;o<br />
O sert&atilde;o e a pisada l&aacute; do Bodoc&oacute;<br />
Sei de monte de gente que nem eu<br />
Que gosta &eacute; de forr&oacute;</p>

<p>N&atilde;o sei qual vai ser a moda<br />
Que vai segurar na cadeira o forr&oacute;<br />
Pois passa o tempo e o que brilha em meus olho<br />
&Eacute; o que brilha nos &oacute;i da vov&oacute;</p>

<p>Foi discoteque e twist<br />
&Eacute; o rock e a lambada<br />
Mas na hora &ldquo;H&rdquo;<br />
O cora&ccedil;&atilde;o do meu povo<br />
Se avexa a bater pra forrozar<br />
</p>
',
'creditos' => '<p>Arranjo, programa&ccedil;&atilde;o de computador e teclados: Marcos Farias<br />
Acordeom: Oswaldinho do Acordeom<br />
Pandeiro: Z&eacute; Leal<br />
Tri&acirc;ngulo sample: Marin&ecirc;s<br />
</p>
',
                'faixa_mp3' => '09_na_hora_h.mp3', 
                'faixa_ogg' => '09_na_hora_h.ogg',
                'disco_id' => '14',   ));

Musicas::create(
            array(
                'faixa' => 'Noites Olindenses',
                'compositor' => '(Carlos Fernando)',
                'letra' => '<p>Quero dan&ccedil;ar com voc&ecirc;<br />
Nas noites olindenses<br />
Ai Lili, ai Lili, ai L&ocirc;<br />
Quero te ver como a lua<br />
Bonita e transparente<br />
Fluindo vertentes de amor, de amor</p>

<p>Nesse ver&atilde;o tu &eacute;s a luz que ilumina<br />
Meu cora&ccedil;&atilde;o de carnaval e purpurina<br />
Todas as rimas de Olinda menina<br />
Estrela matutina de toda a can&ccedil;&atilde;o</p>

<p>Can&ccedil;&atilde;o que vem e vai brilhar<br />
Em um domingo azul do mar<br />
De Olinda, de Olinda<br />
De Olinda, que linda Olinda<br />
De Olinda, de Olinda<br />
De Olinda, que linda Olinda<br />
</p>
',
'creditos' => '<p>Arranjo, programa&ccedil;&atilde;o de computador e teclados: Luiz Avellar<br />
Vocais: Jussara, Betina, Nair Candia, Jurema C&acirc;ndia, Ana Lucia e Kika Trist&atilde;o<br />
</p>
',
                'faixa_mp3' => '10_noites_olindenses.mp3', 
                'faixa_ogg' => '10_noites_olindenses.ogg',
                'disco_id' => '14',   ));

Musicas::create(
            array(
                'faixa' => 'Amor De &iacute;ndio',
                'compositor' => '(Beto Guedes / Ronaldo Bastos)',
                'letra' => '<p>Tudo que move &eacute; sagrado<br />
E remove as montanhas<br />
Com todo o cuidado, meu amor<br />
Enquanto a chama arder<br />
Todo dia te ver passar<br />
Tudo, viver a teu lado<br />
Com o arco da promessa<br />
No azul pintado pra durar</p>

<p>Abelha fazendo mel<br />
Vale o tempo que n&atilde;o voou<br />
A estrela caiu do c&eacute;u<br />
O pedido que se pensou<br />
O destino que se cumpriu<br />
De sentir teu calor<br />
E ser todo<br />
Todo dia &eacute; de viver<br />
Para ser o que for<br />
E ser tudo</p>

<p>Sim, todo amor &eacute; sagrado<br />
E o fruto do trabalho<br />
&Eacute; mais que sagrado, meu amor<br />
A massa que faz o p&atilde;o<br />
Vale a luz do teu suor<br />
Lembra que o sono &eacute; sagrado<br />
E alimenta de horizontes<br />
O tempo acordado de viver</p>

<p>No inverno te proteger<br />
No ver&atilde;o sair pra pescar<br />
No outono te conhecer<br />
Primavera poder gostar<br />
No estio me derreter<br />
Pra na chuva dan&ccedil;ar<br />
E andar junto<br />
O destino que se cumpriu<br />
De sentir teu calor<br />
E ser todo<br />
</p>
',
'creditos' => '<p>Arranjo e violas: Manass&eacute;s</p>
',
                'faixa_mp3' => '11_amor_de_indio.mp3', 
                'faixa_ogg' => '11_amor_de_indio.ogg',
                'disco_id' => '14',   ));

Musicas::create(
            array(
                'faixa' => 'Encanto',
                'compositor' => '(Ligia Anel / Xico Chaves / Jards Macal&eacute; / Christianne Dardenne)',
                'letra' => '<p>Nos galhos do arvoredo<br />
Ouvi algu&eacute;m me encantar<br />
S&oacute; com o seu canto<br />
Fui levada para l&aacute;</p>

<p>Simples de dizer<br />
F&aacute;cil de entender<br />
Algu&eacute;m que vem de longe<br />
Pra pertinho de voc&ecirc;<br />
</p>
',
'creditos' => '<p>Arranjo e viol&atilde;o: Jards Macal&eacute;</p>
',
                'faixa_mp3' => '12_encanto.mp3', 
                'faixa_ogg' => '12_encanto.ogg',
                'disco_id' => '14',   ));

Musicas::create(
            array(
                'faixa' => 'Eu Vou Te Amar',
                'compositor' => '(Geraldo Azevedo / Pipo Spera)',
                'letra' => '<p>Teu beijo me acordou novo dia<br />
Sinal que &eacute; vida, luz da manh&atilde;<br />
Que faz renascer a alegria<br />
No azul do c&eacute;u, na terra, no mar</p>

<p>Mas sem voc&ecirc; n&atilde;o existia<br />
Essa magia que torna real<br />
As coisas simples do dia a dia<br />
Tuas e minhas que a vida traz<br />
Eu vou te amar<br />
Com toda minha energia<br />
Bem que irradia<br />
Eu vou te amar</p>

<p>Eu vou te amar<br />
Eu vou te amar<br />
</p>
',
'creditos' => '<p>Arranjo e piano: Marcos Farias</p>
',
                'faixa_mp3' => '13_eu_vou_te_amar.mp3', 
                'faixa_ogg' => '13_eu_vou_te_amar.ogg',
                'disco_id' => '14',   ));

Musicas::create(
            array(
                'faixa' => 'Cora Coração (Coraz&oacute;n)',
                'compositor' => '(Glenn Monroig / vers&atilde;o: Cl&aacute;udio Rabello)',
                'letra' => '<p>Cora, cora, cora, cora&ccedil;&atilde;o, meu cora&ccedil;&atilde;o<br />
Meu cora&ccedil;&atilde;o, meu cora&ccedil;&atilde;o<br />
Cora, cora, cora, cora&ccedil;&atilde;o, meu cora&ccedil;&atilde;o<br />
Meu cora&ccedil;&atilde;o, meu cora, cora, cora</p>

<p>Cora, cora, cora, cora&ccedil;&atilde;o, meu cora&ccedil;&atilde;o<br />
Meu cora&ccedil;&atilde;o, meu cora&ccedil;&atilde;o<br />
Cora, cora, cora, cora&ccedil;&atilde;o, meu cora&ccedil;&atilde;o<br />
Cora&ccedil;&atilde;o</p>

<p>N&atilde;o consigo meu bem compreender<br />
Por que me feres sem uma raz&atilde;o<br />
Ser&aacute; verdade o que me contam que<br />
Est&aacute;s sugando o meu cora&ccedil;&atilde;o</p>

<p>Eu digo que n&atilde;o pode ser<br />
Porque como eu n&atilde;o h&aacute; outra mulher<br />
Cuidado ao apagar a luz<br />
Cuidado pra n&atilde;o deixar de jejum<br />
O meu cora&ccedil;&atilde;o</p>

<p>S&oacute; sentir daqui teu corpo arder<br />
Arde meu corpo com satisfa&ccedil;&atilde;o<br />
Por isso mesmo da pr&oacute;xima vez<br />
Eu vou ouvir melhor meu cora&ccedil;&atilde;o</p>

<p>Que me dir&aacute; que n&atilde;o confie mais<br />
O que tu me prometes n&atilde;o &eacute;s capaz<br />
&Eacute; t&atilde;o covarde o meu amor<br />
Quando me tocas<br />
Perco o controle do meu cora&ccedil;&atilde;o</p>

<p>Tenho tentado<br />
Tirar voc&ecirc; da minha mente<br />
Mas meu corpo todo se ressente<br />
Tu me deixas louca com teus beijos<br />
Logo me declaro presa desse amor<br />
</p>
',
'creditos' => '<p>Bateria: Cesinha<br />
Percuss&atilde;o baiana: Repolho, Firmino e Marcos Lobo<br />
Pandeiro: Zizinho e Chacal<br />
Timbal: Trambique<br />
Bong&ocirc;: Amauri<br />
Cu&iacute;ca: Zeca da Cu&iacute;ca<br />
Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o e Betina<br />
</p>
',
                'faixa_mp3' => '01_cora_coracao.mp3', 
                'faixa_ogg' => '01_cora_coracao.ogg',
                'disco_id' => '15',   ));

Musicas::create(
            array(
                'faixa' => 'Devora-me outra vez (Ven devorame otra vez)',
                'compositor' => '(Palmer Hernandez / vers&atilde;o: Fausto Nilo)',
                'letra' => '<p>No sil&ecirc;ncio da noite vazia teu amor voraz<br />
Enlouquece o balan&ccedil;o das horas<br />
Querendo mais<br />
Derramando a lua da praia<br />
Sobre meu len&ccedil;ol<br />
E &eacute; por isso que eu nunca te espero<br />
Sob a luz do sol</p>

<p>Em meus sonhos eu sempre te vejo<br />
Devorando-me<br />
Arrastada por esse desejo<br />
Vou at&eacute; o fim<br />
Nessa hora ningu&eacute;m como tu<br />
Que me ama com a fome do amor<br />
Que aquece meu nome<br />
Beijando meu corpo<br />
Que cai num abismo maior<br />
Vem</p>

<p>Devora-me outra vez<br />
Devora-me outra vez<br />
Me abra&ccedil;a, me toca e machuca<br />
Me leva at&eacute; onde eu nem sei</p>

<p>Devora-me outra vez<br />
Devora-me outra vez<br />
Me castiga com os seus desejos<br />
Que este amor eu guardei s&oacute; pra ti</p>

<p>Devorame otra vez<br />
Devorame otra vez<br />
Suavecito lentamente<br />
De la cabeza hasta los pies<br />
Hasta los pies</p>

<p>Devorame otra vez<br />
Devorame otra vez<br />
Em meus sonhos eu sempre te vejo<br />
Devorandome, devorame, devorame,</p>

<p>Devorame otra vez<br />
Devorame otra vez<br />
Devorame otra vez<br />
Devorame otra vez</p>

<p>Devorame otra vez<br />
Devorame otra vez<br />
No silencio da noite vazia<br />
Seu amor me devora a vida</p>

<p>Devorame otra vez<br />
Devorame otra vez<br />
Que aquece meu nome<br />
Beijando meu corpo<br />
Que cai num abismo maior<br />
Vem<br />
</p>
',
'creditos' => '<p>Bateria: Cesinha<br />
Surdo e repique: Repolho, Firmino e Marcos Lobo<br />
Bong&ocirc;, conga, timbales e chequer&ecirc;: Carlos &ldquo;Migie&rdquo; Rodriguez<br />
Baixo: Junior Irizarry<br />
Guitarra: Jorge Laboy<br />
Piano: Frankie Su&aacute;rez<br />
Trombones: Rafi Torres e Jorge Diaz<br />
Trompete: Loui O. Aquino<br />
Sax: Jos&eacute; &ldquo;Furito&rdquo; Rios<br />
Orquestra&ccedil;&atilde;o adicional de sopros: Marco Mu&ntilde;oz<br />
Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o e Betina<br />
</p>
',
                'faixa_mp3' => '02_devora_me_outra_vez.mp3', 
                'faixa_ogg' => '02_devora_me_outra_vez.ogg',
                'disco_id' => '15',   ));

Musicas::create(
            array(
                'faixa' => 'Magalenha',
                'compositor' => '(Carlinhos Brown)',
                'letra' => '<p>Vem Magalenha roj&atilde;o<br />
Traz a lenha pro fog&atilde;o<br />
Vem fazer arma&ccedil;&atilde;o<br />
Hoje &eacute; um dia de sol<br />
Alegria de coi&oacute; &eacute; curtir o ver&atilde;o</p>

<p>T&ecirc; t&ecirc; t&ecirc; ter&ecirc; t&ecirc;<br />
T&ecirc; t&ecirc; t&ecirc; ter&ecirc; t&ecirc;</p>

<p>Vem Magalenha roj&atilde;o<br />
Traz a senha pro fog&atilde;o<br />
T&ecirc; t&ecirc; t&ecirc; cora&ccedil;&atilde;o<br />
Hoje &eacute; um dia de sol<br />
Alegria de xod&oacute;<br />
Meu dever de ver&atilde;o</p>

<p>Calango lango no calango da pretinha<br />
T&ocirc; cantando essa mudinha pra senhora se lembrar<br />
Daquele tempo que vivia l&aacute; na ro&ccedil;a<br />
Com uma filha na barriga<br />
E outra filha pra criar<br />
</p>
',
'creditos' => '<p>Bateria: Cesinha<br />
Acordeom: Oswaldinho do Acordeom<br />
Percuss&atilde;o: Firmino<br />
Surdo e repique: Repolho, Firmino e Marcos Lobo<br />
Timbale e chequer&ecirc;: Carlos &ldquo;Migie&rdquo; Rodriguez<br />
Congas: Paoli Mej&iacute;as<br />
Baixo: Junior Irizarry<br />
Guitarra: Jorge Laboy<br />
Piano: Frankie Su&aacute;rez<br />
Trombones: Rafi Torres e Jorge Diaz<br />
Trompete: Loui O. Aquino<br />
Sax: Jos&eacute; &ldquo;Furito&rdquo; Rios<br />
Orquestra&ccedil;&atilde;o adicional de sopros: Marco Mu&ntilde;oz<br />
Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o e Betina</p>
',
                'faixa_mp3' => '03_magalenha.mp3', 
                'faixa_ogg' => '03_magalenha.ogg',
                'disco_id' => '15',   ));

Musicas::create(
            array(
                'faixa' => 'Ouro',
                'compositor' => '(Armandinho Macedo / Fausto Nilo)',
                'letra' => '<p>Voc&ecirc; vai querer conquistar meu ouro<br />
Eu vou querer conquistar o seu tesouro<br />
E foi numa ilha do futuro<br />
Que maravilha me aconteceu</p>

<p>Tava sem amar<br />
Pra quem tava sem amar<br />
Foi muito<br />
Tava sem amar<br />
Pra quem tava sem amar<br />
Foi louco</p>

<p>Tua mar&eacute; pra mim foi ouro<br />
Minha mar&eacute; pra ti foi oi, oi, &ocirc;<br />
Beira do mar pra mim foi oi, oi, &ocirc;<br />
Amar, amar, assim</p>

<p>Voc&ecirc; vai querer conquistar meu ouro<br />
Eu vou querer<br />
Seu ouro, seu ouro<br />
Seu ouro, seu ouro, seu ouro<br />
</p>
',
'creditos' => '<p>Bateria: Cesinha<br />
Viol&atilde;o: Manass&eacute;s<br />
Xique-xique e agog&ocirc;: Firmino<br />
Percuss&atilde;o geral: Zizinho, Amauri, Trambique, Zeza da Cu&iacute;ca e Chacal<br />
Timbales, bong&ocirc; e chequer&eacute;: Carlos &ldquo;Migie&rdquo; Rodriguez<br />
Congas: Paoli Mej&iacute;as<br />
Baixo: Junior Irizarry<br />
Guitarra: Jorge Laboy<br />
Piano: Frankie Su&aacute;rez<br />
Trombones: Rafi Torres e Jorge Diaz<br />
Trompete: Loui O. Aquino<br />
Sax: Jos&eacute; &ldquo;Furito&rdquo; Rios<br />
Orquestra&ccedil;&atilde;o adicional de sopros: Marco Mu&ntilde;oz<br />
</p>
',
                'faixa_mp3' => '04_ouro.mp3', 
                'faixa_ogg' => '04_ouro.ogg',
                'disco_id' => '15',   ));

Musicas::create(
            array(
                'faixa' => 'Porto Seguro',
                'compositor' => '(Durval Lelys)',
                'letra' => '<p>Foi devagarinho, bem de mansinho<br />
Meu cora&ccedil;&atilde;o revirou o c&eacute;u<br />
Entre as nuvens quentes fiquei sozinho<br />
Pensando em ti, me joguei no mar</p>

<p>Vem me dar calor, vem me dar amor<br />
T&ocirc; aqui esperando voc&ecirc; chegar<br />
Quero me envolver nessa tua dan&ccedil;a<br />
Na lua mansa te namorar</p>

<p>&Ocirc;, &ocirc;, &ocirc;, &ocirc;<br />
Que mexe<br />
Que mexe mais<br />
Que mexe<br />
Que mexe amor<br />
Seguro nessa cintura eu vou<br />
Que mexe mais<br />
Que mexe<br />
Que mexe amor<br />
Lembran&ccedil;as que d&atilde;o saudade<br />
Nessa cidade, Porto Seguro<br />
Ainda me lembro de voc&ecirc;</p>

<p>Ouro, num olhar de tesouro<br />
Vem na pedra do mar<br />
Na pedra do mar, na pedra do mar<br />
Olha &ecirc;, olha &ocirc;<br />
</p>
',
'creditos' => '<p>Bateria: Cesinha<br />
Percuss&atilde;o: Firmino, Repolho e Marcos Lobo<br />
Congas: Paoli Mej&iacute;as<br />
Bong&ocirc;, congas, timbales e chequer&eacute;: Carlos &ldquo;Migie&rdquo; Rodriguez<br />
Baixo: Junior Irizarry<br />
Guitarra: Jorge Laboy<br />
Piano: Frankie Su&aacute;rez<br />
Trombones: Rafi Torres e Jorge Diaz<br />
Trompete: Loui O. Aquino<br />
Sax: Jos&eacute; &ldquo;Furito&rdquo; Rios<br />
Orquestra&ccedil;&atilde;o adicional de sopros: Marco Mu&ntilde;oz<br />
Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o, Betina e Jurema C&acirc;ndia</p>
',
                'faixa_mp3' => '05_porto_seguro.mp3', 
                'faixa_ogg' => '05_porto_seguro.ogg',
                'disco_id' => '15',   ));

Musicas::create(
            array(
                'faixa' => 'Indiado',
                'compositor' => '(Carlinhos Brown)',
                'letra' => '<p>Todo ducado, todo capit&atilde;o<br />
Todo lustrado, todo Nostradamus<br />
Todo indiado, todo indiano<br />
Tudo pintado, todo americano</p>

<p>U&ecirc;lelelel&ecirc;, u&ecirc;lelelel&aacute;<br />
&Eacute; convidado compare&ccedil;o a ser massa<br />
U&ecirc;lelelel&ecirc;, u&ecirc;lelelel&aacute;<br />
Que nesse p&aacute;reo lamparina &eacute; ser Tarzan</p>

<p>Joga dudun, joga didi<br />
Joga como o Rei Dali<br />
Seja pro-cru-duo<br />
Uma ama seca<br />
Seja pro-cru-duo<br />
Uma ama seca</p>

<p>Ioi&ocirc; fazendo quindim<br />
Veja Ioi&ocirc; mexendo a p&aacute;, p&aacute;<br />
Ioi&ocirc; fazendo quindim<br />
Veja Ioi&ocirc; mexendo p&aacute;, p&aacute;</p>

<p>Tra&ccedil;a com tra&ccedil;a com tra&ccedil;a com tra&ccedil;a<br />
Caixa com caixa com caixa com caixa<br />
Cata sucata com cata sucata<br />
</p>

',
'creditos' => '<p>Bateria: Cesinha<br />
Percuss&atilde;o: Firmino, Repolho e Marcos Lobo<br />
Congas: Paoli Mej&iacute;as<br />
Bong&ocirc;, congas, timbales e chequer&eacute;: Carlos &ldquo;Migie&rdquo; Rodriguez<br />
Baixo: Junior Irizarry<br />
Guitarra: Jorge Laboy<br />
Piano: Frankie Su&aacute;rez<br />
Trombones: Rafi Torres e Jorge Diaz<br />
Trompete: Loui O. Aquino<br />
Sax: Jos&eacute; &ldquo;Furito&rdquo; Rios<br />
Orquestra&ccedil;&atilde;o adicional de sopros: Marco Mu&ntilde;oz<br />
Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o, Betina e Jurema C&acirc;ndia<br />
</p>
',
                'faixa_mp3' => '06_idiado.mp3', 
                'faixa_ogg' => '06_idiado.ogg',
                'disco_id' => '15',   ));
Musicas::create(
            array(
                'faixa' => 'Força interior (Fuerza interior)',
                'compositor' => '(Glenn Monroig / Vers&atilde;o: Cl&aacute;udio Rabello)',
                'letra' => '<p>Sinto uma for&ccedil;a que me protege<br />
A mesma que ampara sempre a minha gente<br />
&Eacute; uma coisa maravilhosa<br />
Saber que se preciso<br />
A f&eacute; em n&oacute;s resplandece</p>

<p>Por um momento eu me perdi<br />
N&atilde;o me encontrava<br />
J&aacute; quando a dor n&atilde;o mais cabia em minha alma<br />
Sem rancor nem &oacute;dio<br />
Foi com amor pr&oacute;prio<br />
Eu ganhei impulso<br />
Vem do mais profundo<br />
Essa &eacute; a</p>

<p>For&ccedil;a interior<br />
Que me curou quando ferida<br />
Que me empurra pra cima da vida<br />
For&ccedil;a interior<br />
Que em mim se espalha como fogo<br />
Que se caio j&aacute; se levantou</p>

<p>Hoje renas&ccedil;o como um dia novo<br />
Ouvindo a minha voz<br />
Acima de tudo e de todos<br />
Viver &eacute; uma quest&atilde;o de direito<br />
Acordo de manh&atilde;<br />
E sinto a vida no peito</p>

<p>Trago uma mescla de alegrias e tristezas<br />
E essa &eacute; a for&ccedil;a que me corre pelas veias<br />
Sem rancor nem &oacute;dio<br />
Foi com amor pr&oacute;prio<br />
Eu ganhei impulso<br />
Vem do mais profundo<br />
</p>
',
'creditos' => '<p>Bateria: Cesinha<br />
Percuss&atilde;o: Firmino<br />
Tri&acirc;ngulo: Amauri<br />
Surdo: Zizinho<br />
Pandeiro: Chacal<br />
Tamborim: Zeca da Cu&iacute;ca e Trambique<br />
Congas e bar&aacute;: Angel &ldquo;Cachete&rdquo; Maldonado<br />
Timbal: Charlie Sierra<br />
Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o e Betina</p>

',
                'faixa_mp3' => '07_trampolim.mp3', 
                'faixa_ogg' => '07_trampolim.ogg',
                'disco_id' => '15',   ));
Musicas::create(
            array(
                'faixa' => 'Desesperada (Desesperado)',
                'compositor' => '(Mark Spiro / K. C. Porter / Glenn Monroig / Vers&atilde;o: Ronaldo Bastos)<br />
<em>M&uacute;sica incidental: Wave (Tom Jobim)</em><br />',
                'letra' => '<p>Anos, meses, dias<br />
Noites frias de calor<br />
Enredado em corpos belos<br />
S&oacute;, sem um amor</p>

<p>E agora que enfim est&aacute;<br />
Nesse perfume do teu ser<br />
Come&ccedil;a a evaporar<br />
N&atilde;o quero mais te perder</p>

<p>Desesperada, assustada<br />
Procuro mais esse amor<br />
Desesperado<br />
E escapa outra vez</p>

<p>Chuva, asfalto, luzes, carros<br />
Gente de ilus&atilde;o<br />
Todo mundo busca<br />
E poucos acham o amor</p>

<p>Agora que enfim est&aacute;<br />
Estacionado em teu ser<br />
Sou presa do meu temor<br />
N&atilde;o quero mais te rever</p>

<p>Desesperada, assustada<br />
Buscando sempre um amor<br />
Desesperado<br />
Que me escapa outra vez</p>

<p>N&atilde;o quero tomar o rumo equivocado<br />
Por que diabos devo seguir?</p>

<p>Desesperada, assustada<br />
Anos, meses, dias<br />
Noites frias de calor<br />
Desesperada, assustada<br />
Enredada em corpos belos<br />
Mas sozinha sem amor<br />
Desesperada, assustada<br />
Todo mundo busca e poucos acham o amor<br />
Desesperada, assustada<br />
Outra vez</p>

<p>Desesperada, assustada<br />
Conhe&ccedil;o os passos dessa estrada<br />
Sei que n&atilde;o vai dar em nada<br />
Desesperada, assustada<br />
J&aacute; me cansei de solid&atilde;o<br />
Preciso ser amada<br />
Desesperada, assustada<br />
Buscando sempre um amor<br />
Desesperado<br />
Que me escapa outra vez<br />
</p>
',
'creditos' => '<p>Bateria: Cesinha<br />
Timbale e xique-xique: Firmino<br />
Timbal, bong&ocirc; e congas: Repolho e Marcos Lobo<br />
Percuss&atilde;o geral: Zizinho, Amauri, Trambique, Zeza da Cu&iacute;ca e Chacal<br />
Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o e Betina<br />
</p>

',
                'faixa_mp3' => '09_desesperada.mp3', 
                'faixa_ogg' => '09_desesperada.ogg',
                'disco_id' => '15',   ));
Musicas::create(
            array(
                'faixa' => 'Trampolim',
                'compositor' => '(Ary Sperling / Cl&aacute;udio Rabello)',
                'letra' => '<p>Quem passou por mim<br />
E eu n&atilde;o vi<br />
Fez desse meu cora&ccedil;&atilde;o<br />
Um trampolim<br />
Que busca na paix&atilde;o<br />
Algu&eacute;m na multid&atilde;o<br />
Algu&eacute;m que sabe enfim<br />
Que sempre fez parte de mim</p>

<p>Algu&eacute;m que sabe quem eu sou<br />
Que foi por onde eu nunca vou<br />
Que fala o que eu n&atilde;o sei<br />
Que diz se eu j&aacute; amei<br />
Por onde devo ir</p>

<p>Em tantas vezes<br />
Eu te quis ao me tocar<br />
Noites que o tempo n&atilde;o levou<br />
Fosse apenas sonho<br />
Eu saberia ao acordar<br />
Mas o dia nasce<br />
E j&aacute; me encontro a te querer<br />
Procurando os rastros desse amor</p>

<p>E por n&atilde;o saber em quem est&aacute;s<br />
Ou por n&atilde;o viver sem te levar em mim<br />
Vou onde n&atilde;o se vai<br />
Fa&ccedil;o o que n&atilde;o se faz<br />
E vai ser sempre assim<br />
At&eacute; que a busca chegue ao fim<br />
</p>

',
'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo, reg&ecirc;ncia e teclados: Ary Sperling<br />
Acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Flautas: Celso Woltzzenlogel e Mauro Senise<br />
Violinos: Giancarlo Pareschi, Alfredo Vidal, Jos&eacute; Alves, Carmelita Reis, Walter Hack, Carlos Hack, Aizik, Leo Ortiz, Paschoal Perrota, Jo&atilde;o Jer&ocirc;nimo, Marcelo Pompeu e Hindenburgo<br />
Violas: Glauco Cruz, Frederick Stephany, Arlindo Penteado e Jesu&iacute;na Passarotto<br />
Cellos: Marcio Mallard, Jacques Morelenbaum, Jorge Kundert e Luiz Zamith<br />
Mixagem: Jorge &ldquo;Gordo&rdquo; Guimar&atilde;es<br />
Assistente: Julio Carneiro<br />
</p>
',
                'faixa_mp3' => '07_trampolim.mp3', 
                'faixa_ogg' => '07_trampolim.ogg',
                'disco_id' => '15',   ));

Musicas::create(
            array(
                'faixa' => 'Eu Quero Meu Amor',
                'compositor' => '(Assis&atilde;o)',
                'letra' => '<p>Eu quero meu amor<br />
Eu quero meu amor<br />
Eu quero meu amor aqui nesse forroz&atilde;o</p>

<p>Eu quero meu amor<br />
Eu quero meu amor<br />
Eu quero meu amor na quentura do sal&atilde;o</p>

<p>Psiu, psiu, psiu, psiu<br />
Cala boca meu benzinho<br />
Esse amor &eacute; pra n&oacute;s dois<br />
Psiu, psiu, psiu, psiu<br />
Nosso amor &eacute; proibido<br />
Esse chamego &eacute; pra depois</p>

<p>Est&aacute; fazendo frio<br />
Cad&ecirc; minha paix&atilde;o?<br />
Quero ser o dono do seu cora&ccedil;&atilde;o</p>

<p>Doid&atilde;o, vou ficar doid&atilde;o<br />
Sen&atilde;o encontrar com meu amor<br />
Aqui nesse forroz&atilde;o<br />
Doid&atilde;o, doid&atilde;o, doid&atilde;o<br />
Sen&atilde;o encontrar o meu amor<br />
Aqui nesse forroz&atilde;o<br />
</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo, reg&ecirc;ncia e teclados: Julinho Teixeira<br />
Baixo: Heber<br />
Bateria: Cesinha<br />
Viol&atilde;o: Manass&eacute;s<br />
Acordeom: Marquinhos<br />
Sax alto: Jos&eacute; Carlos<br />
Sax tenor: Raul Mascarenhas<br />
Trompetes: Bidinho e Formiga<br />
Trombone: Roberto Marques<br />
Percuss&atilde;o: Repolho<br />
Vocais: Betina, Jurema C&acirc;ndia, Jurema Louren&ccedil;o, Nair C&acirc;ndia e Jussara Louren&ccedil;o<br />
</p>
',
                'faixa_mp3' => '10_eu_quero_meu_amor.mp3', 
                'faixa_ogg' => '10_eu_quero_meu_amor.ogg',
                'disco_id' => '15',   ));




Musicas::create(
            array(
                'faixa' => 'Eu Sou O Carnaval',
                'compositor' => '(Moraes Moreira)',
                'letra' => '<p>Eu sou o carnaval em cada esquina<br />
Do seu cora&ccedil;&atilde;o<br />
Eu sou o Pierrot e a Colombina<br />
Nas &aacute;guas de Amaralina<br />
Que alucina a multid&atilde;o</p>

<p>Toda a cidade vai navegar<br />
No mar l&aacute; do Badau&ecirc;<br />
Fazer tempero, se namorar<br />
Na massa do Massap&ecirc;</p>

<p>Tem baba de mo&ccedil;a do Carapu&aacute;<br />
Ganz&aacute;, bong&ocirc;, agog&ocirc; pirar<br />
Tem baba de mo&ccedil;a do Carapu&aacute;<br />
Ganz&aacute;, bong&ocirc;, agog&ocirc; pirar</p>

<p>Pira, pira, pirar<br />
Pira, pira, pirar<br />
</p>
',
'creditos' => '<p>Bateria: Cesinha<br />
Acordeom: Oswaldinho do Acordeom<br />
Cavaquinho: Manass&eacute;s<br />
Percuss&atilde;o geral: Zizinho, Amauri, Trambique, Zeza da Cu&iacute;ca e Chacal<br />
Congas: Firmino<br />
Timbales, bong&ocirc; e chequer&eacute;: Carlos &ldquo;Migie&rdquo; Rodriguez<br />
Congas: Paoli Mej&iacute;as<br />
Baixo: Junior Irizarry<br />
Guitarra: Jorge Laboy<br />
Tambora, congas e guiro: Niki Su&aacute;rez<br />
Flautas: Jos&eacute; &ldquo;Furito&rdquo; Rios<br />
Vocais: Marcio Lott, Chico Puppo, Fernando Adour, Ricardo Magno, Kika Trist&atilde;o, Aline Cabral, Jussara Louren&ccedil;o, Betina e Nair C&acirc;ndia<br />
</p>
',
                'faixa_mp3' => '11_eu_sou_o_carnaval.mp3', 
                'faixa_ogg' => '11_eu_sou_o_carnaval.ogg',
                'disco_id' => '15',   ));


Musicas::create(
            array(
                'faixa' => 'Cora&ccedil;&atilde;o Da Gente',
                'compositor' => '(Nando Cordel / Jo&atilde;o Wash)',
                'letra' => '<p>Morena que dan&ccedil;a no mar de alegria<br />
E faz a tribo cair na folia<br />
T&aacute; que t&aacute; ficando bom o dia<br />
Vai ficar muito melhor minha energia<br />
T&aacute; que t&aacute; ficando bom o dia<br />
Vai ficar muito melhor minha energia</p>

<p>Sonho de salsa tropicaliente<br />
Quando encara<br />
Escancara o cora&ccedil;&atilde;o da gente</p>

<p>&Ocirc;, &ocirc;, &ocirc;, tropicaliente<br />
&Ocirc;, &ocirc;, &ocirc;, enluarar<br />
O cora&ccedil;&atilde;o da gente</p>

<p>Vou te cantar<br />
Mantras, boleros<br />
Te enluarar<br />
Repetindo &ldquo;Ay como te quiero&rdquo;</p>

<p>Vou te contar<br />
Lendas de Havana<br />
Ritos de amor<br />
Sob a lua pan-americana<br />
</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo, reg&ecirc;ncia e teclados: Julinho Teixeira<br />
Baixo: Heber<br />
Bateria: Cesinha<br />
Viol&atilde;o: Manass&eacute;s<br />
Acordeom: Marquinhos<br />
Sax alto: Jos&eacute; Carlos<br />
Sax tenor: Raul Mascarenhas<br />
Trompetes: Bidinho e Formiga<br />
Trombone: Roberto Marques<br />
Percuss&atilde;o: Repolho, Marcos Lobo, Marcos Amma e Zizinho<br />
Vocais: Betina, Jurema C&acirc;ndia, Jurema Louren&ccedil;o, Nair C&acirc;ndia e Jussara Louren&ccedil;o<br />
</p>
',
                 'faixa_mp3' => '12_coracao_da_gente.mp3', 
                'faixa_ogg' => '12_coracao_da_gente.ogg',
                'disco_id' => '15',   ));

Musicas::create(
            array(
                'faixa' => 'Proibir Pra Qu&ecirc;',
                'compositor' => '(Dalmo Medeiros / Carlos Pita)',
                'letra' => '<p>Voc&ecirc; me faz sentir o c&eacute;u<br />
Me faz sentir o mel<br />
Que a vida tem pra dar<br />
Na rua da alegria eu vou</p>

<p>Voc&ecirc; me faz ser girassol<br />
Girando ao seu redor<br />
Dourando a luz do dia<br />
Planeta do amor eu sou</p>

<p>E essa dor j&aacute; n&atilde;o vai mais valer<br />
E esse meu amor vai sorrir<br />
Esse olhar &eacute; s&oacute; felicidade<br />
Acorda, cidade, com vontade<br />
Que o carnaval chegou</p>

<p>&Ocirc;, &ocirc;, &ocirc;, &ocirc;<br />
V&ecirc; se t&ocirc; na esquina<br />
Voc&ecirc; vem de Olinda<br />
Eu vou de Salvador</p>

<p>&Ocirc;, &ocirc;, &ocirc;, &ocirc;<br />
Proibir pra qu&ecirc;?<br />
Ningu&eacute;m mais segura<br />
O bloco do prazer</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo e teclados: Julinho Teixeira<br />
Guitarra: Luiz Brasil<br />
Contrabaixo: Fernando Nunes<br />
Bateria: Cesinha<br />
Surdo, agog&ocirc;, repique e timbales: Marquinho Lobo<br />
Congas, tri&acirc;ngulo e repique: Paulinho He-Man<br />
Pandeiro, block e repique: Lan Lan<br />
Trompetes: Bidinho e Formiga<br />
Sax tenor: Maca&eacute;<br />
Sax alto: Paulo Senise<br />
Trombone: Vitor<br />
Vocais: Jussara Silveira, Betina, Jussara Louren&ccedil;o, Bebel, Jurema, Carla, Marcelo Szabo, Marcio Lott, Chico Puppo, Ronaldo Barcelos, Zeppa Souza, Ronaldo Correa, Pedro Baldanza, Jorge Alexandre e Louren&ccedil;o<br />
Pr&eacute;-produ&ccedil;&atilde;o, teclados e guitarra solo: Est&uacute;dio Caverna (t&eacute;cnico: Roberto Lly)<br />
</p>
',
                'faixa_mp3' => '01_proibir_pra_que.mp3', 
                'faixa_ogg' => '01_proibir_pra_que.ogg',
                'disco_id' => '16',   ));

Musicas::create(
            array(
                'faixa' => 'Paisagem Da Janela',
                'compositor' => '(L&ocirc; Borges / Fernando Brant)',
                'letra' => '<p>Da janela lateral<br />
Do quarto de dormir<br />
Vejo uma igreja, um sinal de gl&oacute;ria<br />
Vejo um muro branco e um v&ocirc;o p&aacute;ssaro<br />
Vejo uma grade, um velho sinal</p>

<p>Mensageiro natural<br />
De coisas naturais<br />
Quando eu falava dessas cores m&oacute;rbidas<br />
Quando eu falava desses homens s&oacute;rdidos<br />
Quando eu falava desse temporal<br />
Voc&ecirc; n&atilde;o escutou</p>

<p>Voc&ecirc; n&atilde;o quer acreditar<br />
Mas isso &eacute; t&atilde;o normal<br />
Voc&ecirc; n&atilde;o quer acreditar<br />
Que eu apenas era</p>

<p>Cavaleiro marginal<br />
Lavado em ribeir&atilde;o<br />
Cavaleiro negro que viveu mist&eacute;rios<br />
Cavaleiro e senhor de casa e &aacute;rvores<br />
Sem querer descanso nem dominical</p>

<p>Cavaleiro marginal<br />
Banhado em ribeir&atilde;o<br />
Conheci as torres e os cemit&eacute;rios<br />
Conheci os homens e os seus vel&oacute;rios<br />
Eu olhava da janela lateral<br />
Do quarto de dormir<br />
</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello<br />
Arranjo e teclados: Marcio Miranda<br />
Viol&atilde;o solo: Paulo Rafael<br />
Contrabaixo: Fernando Nunes<br />
Bateria: Cesinha<br />
Tri&acirc;ngulo: Repolho<br />
Moringa: Marcos Suzano<br />
Viol&otilde;es: Paulo Coelho<br />
Acordeom: Oswaldinho do Acordeom<br />
Vocais: Jussara Silveira, Marcelo Szabo, Ronaldo Barcelos, Z&eacute; Louren&ccedil;o, Ana Leuzinger e Nina Pancevski<br />
</p>
',
                'faixa_mp3' => '02_paisagem_da_janela.mp3', 
                'faixa_ogg' => '02_paisagem_da_janela.ogg',
                'disco_id' => '16',   ));

Musicas::create(
            array(
                'faixa' => 'Caranguejo Dance',
                'compositor' => '(Moraes Moreira)',
                'letra' => '<p>&Eacute; o treme terra<br />
Tambor de guerra soa declarando paz<br />
Por toda treva<br />
Clareia o som, me leva e traz</p>

<p>Por toda a vida, a vida vivida<br />
Mestre e aprendiz<br />
&Eacute; de preceito, baticum no peito<br />
Cora&ccedil;&atilde;o me diz</p>

<p>&Eacute; a nova dan&ccedil;a, caboclo e lan&ccedil;a<br />
E a novidade me possui<br />
Dan&ccedil;o e me vejo<br />
Um caranguejo que na pista evolui</p>

<p>Swing e f&eacute; que nascem da mulher<br />
Que de repente parte<br />
T&atilde;o decidida, gr&aacute;vida de vida<br />
Ergue o estandarte, estandarte</p>

<p>Maracatu e eu<br />
Maracatu e eu<br />
N&oacute;s nossa voz<br />
E eles</p>

<p>Por todo o lado<br />
Baque virado na esteira do tarol<br />
Por toda a rua, a luz da lua<br />
A noite, o dia, a luz do sol</p>

<p>Ali ou alhures, homens e mulheres<br />
Todas as idades<br />
No carnaval<br />
Trabalhador rural dan&ccedil;ando na cidade</p>

<p>Silenciosos<br />
Por um momento n&atilde;o tocaram seus tambores<br />
No p&aacute;tio escuro<br />
Ali eu juro, eu vi, senhoras e senhores</p>

<p>E a meninada<br />
Animadamente celebrando ia<br />
N&atilde;o demorava era um que chegava<br />
E outro que sa&iacute;a, sa&iacute;a<br />
</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello<br />
Arranjos: Moraes Moreira e Marcio Miranda<br />
Teclados: Marcio Miranda<br />
Viol&atilde;o: Moraes Moreira<br />
Contrabaixo: Pedro Ivo<br />
Bateria: Jurim Moreira<br />
Repique, congas, agog&ocirc;, surdo e timbales: Repolho<br />
Agog&ocirc; e efeitos: Sandro Lustosa<br />
Guitarra: Paulo Rafael<br />
Acordeom: Oswaldinho do Acordeom<br />
Rabeca: Ricardo Amado<br />
Arranjo de rabeca: Vitor Santos<br />
Vocais: Jussara Silveira, Marcelo Szabo, Ronaldo Barcelos, Z&eacute; Louren&ccedil;o, Ana Leuzinger e Nina Pancevski<br />
</p>
',
                'faixa_mp3' => '03_caranguejo_dance.mp3', 
                'faixa_ogg' => '03_caranguejo_dance.ogg',
                'disco_id' => '16',   ));

Musicas::create(
            array(
                'faixa' => 'O Bom Da Vida',
                'compositor' => '(Dito / Jorge Zarath)',
                'letra' => '<p>No momento em que meus olhos<br />
Se encontraram com teus olhos<br />
Eu me apaixonei, eu me apaixonei<br />
Eu me apaixonei</p>

<p>Na loucura do molejo<br />
Eu sonhava com teu beijo<br />
Eu me apaixonei, eu me apaixonei<br />
Eu me apaixonei</p>

<p>Eu te quero porque sei<br />
Que a vida &eacute; sempre assim<br />
Eu te quero porque sei<br />
Voc&ecirc; nasceu pra mim<br />
N&atilde;o adianta se esconder<br />
Que a vida &eacute; feita pra viver</p>

<p>O bom da vida &eacute; viver<br />
&Eacute; se querer, se querer<br />
O bom da vida &eacute; sonhar<br />
Deixa acontecer</p>

<p>O bom da vida &eacute; viver<br />
&Eacute; se querer, se querer<br />
O bom da vida &eacute; sonhar<br />
Deixa o sol nascer</p>

<p>De dia &eacute; de dia<br />
E quando escurece<br />
Uma luz me guia<br />
Teu brilho me aquece<br />
</p>

',
'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo e teclados: Julinho Teixeira<br />
Viol&otilde;es: Luiz Brasil e Tony Costa<br />
Contrabaixo: Fernando Nunes<br />
Bateria: Cesinha<br />
Surdo, congas, repique e jamb&ecirc;: Marquinho Lobo<br />
Surdo, guiro, repique timbal: Paulinho He-man<br />
Clave, repique e timbal: Lan Lan<br />
Trompetes: Bidinho e Formiga<br />
Sax tenor: Maca&eacute;<br />
Sax alto: Paulo Senise<br />
Trombone: Vitor<br />
Vocais: Jussara Silveira, Betina, Jussara Louren&ccedil;o, Bebel, Jurema, Marcelo Szabo, Marcio Lott, Chico Puppo, Ronaldo Barcelos, Zeppa Souza, Ronaldo Correa, Pedro Baldanza, Jorge Alexandre e Louren&ccedil;o<br />
Pr&eacute;-produ&ccedil;&atilde;o, teclados e guitarra solo: Est&uacute;dio Caverna (t&eacute;cnico: Roberto Lly)</p>
',
                'faixa_mp3' => '04_o_bom_da_vida.mp3', 
                'faixa_ogg' => '04_o_bom_da_vida.ogg',
                'disco_id' => '16',   ));

Musicas::create(
            array(
                'faixa' => 'Eu quero &eacute; botar meu bloco na rua (vers&atilde;o Ska/Pop)',
                'compositor' => '(Sergio Sampaio) Participa&ccedil;&atilde;o Especial: Jheremmias N&atilde;o Bate Corner',
                'letra' => '<p>H&aacute; quem diga<br />
Que eu dormi de touca<br />
Que eu perdi a boca<br />
Que eu fugi da briga<br />
Que eu ca&iacute; do galho<br />
E que n&atilde;o vi sa&iacute;da<br />
Que eu morri de medo<br />
Quando o pau quebrou</p>

<p>H&aacute; quem diga<br />
Que eu n&atilde;o sei de nada<br />
Que eu n&atilde;o sou de nada<br />
E n&atilde;o pe&ccedil;o desculpas<br />
Que eu n&atilde;o tenho culpa<br />
Mas que eu dei bobeira<br />
E que Durango Kid quase me pegou</p>

<p>Eu quero &eacute; botar meu bloco na rua<br />
Brincar, botar pra gemer<br />
Eu quero &eacute; botar meu bloco na rua<br />
Gingar pra dar e vender</p>

<p>Eu, eu por mim queria isso e aquilo<br />
Um quilo mais daquilo<br />
Um grilo menos nisso<br />
&Eacute; disso que eu preciso<br />
N&atilde;o &eacute; nada disso<br />
Eu quero todo mundo nesse carnaval<br />
</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o: Netinho<br />
Arranjo e programa&ccedil;&atilde;o sample: Z&eacute; Raimundo e Jomar Freitas<br />
Guitarra, base e voz: Tuca Fernandes<br />
Arranjo de metais: Z&eacute; Raimundo e Letieres Leite<br />
Bateria: Robinson Cunha<br />
Baixo: Gigi<br />
Guitarras: Boca<br />
Teclados: Z&eacute; Raimundo<br />
Metais: Letieres Leite e Guiga Scott<br />
</p>
',
                'faixa_mp3' => '05_eu_quero_e_botar_meu_bloco_na_rua_ska_pop.mp3', 
                'faixa_ogg' => '05_eu_quero_e_botar_meu_bloco_na_rua_ska_pop.ogg',
                'disco_id' => '16',   ));

Musicas::create(
            array(
                'faixa' => 'Nascido em 22 de Abril',
                'compositor' => '(Altay Veloso)',
                'letra' => '<p>Que homem &eacute; esse que tem sete vidas<br />
Que gato, que tenta&ccedil;&atilde;o<br />
Que os gladiadores invejam o folego<br />
E a for&ccedil;a do seu pulm&atilde;o<br />
Que mulato &eacute; esse de l&aacute;bios carnudos<br />
Com os olhos de cor anil<br />
Que homem &eacute; esse nascido em 22 de abril</p>

<p>Bate tambor que nem Angola<br />
Sua sabor de Coca-cola<br />
Frequenta a sala da escola de samba<br />
Devoto de Aparecida<br />
Trabalhador, gosta da lida<br />
O seu defeito &eacute; que ele nunca se zanga</p>

<p>Eu amo esse homem porque sei<br />
Que ele tem virtudes que outros n&atilde;o tem<br />
Eu sei que precisa de muito amor e carinho<br />
Pra se dar bem</p>

<p>Que pena que alguns desses filhos<br />
Descambam na vida e seu nome traem<br />
Que pena que alguns desses filhos<br />
N&atilde;o puxaram ao pai</p>

<p>Que homem &eacute; esse<br />
Que &eacute; t&atilde;o bem dotado de ra&ccedil;a, de pedigree<br />
Que mulheres muito invejosas<br />
Fazem tudo para tir&aacute;-lo de mim</p>

<p>Mas sei que ele &eacute; forte e resiste<br />
Assim como tem resistido a dor<br />
Se tiver certeza da for&ccedil;a do meu amor<br />
</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello<br />
Arranjo: Nando Minardi<br />
Teclados: Marcio Miranda<br />
Contrabaixo: Fernando Nunes<br />
Bateria: Cesinha<br />
Viol&atilde;o: Luiz Brasil<br />
Sax soprano: Milton Guedes<br />
Surdo, culca e pandeiro: Marcos Suzano<br />
Bong&ocirc;, ganz&aacute; e repique de m&atilde;o: Repolho<br />
Arranjo e reg&ecirc;ncia de cordas: Salinas<br />
Violinos: Giancarlo Pareschi (spalla), Jos&eacute; Alves da Silva, Bernardo Bessler, Marri Cristina Bessler, Ricardo Amado da Silva, Antonela Lima Pareschi, Walter Hack, Marcelo Pompeu, Carmelita Reis, Aizik M. Geller e Jos&eacute; Dias<br />
Coorden e violino: Paschoal Perrota<br />
Violas: Frederick Stephany, Arlindo Figueiredo Penteado, Jeslina Noronha Passaroto e Jairo Diniz Silva<br />
Cellos: Alceu de Almeida Reis e Jorge Kundert Ranevsky<br />
Vocais: Jussara Silveira, Marcelo Szabo, Ronaldo Barcelos, Ana Leuzinger e Nina Pancevski<br />
</p>
',
                'faixa_mp3' => '06_nascido_em_22_de_abril.mp3', 
                'faixa_ogg' => '06_nascido_em_22_de_abril.ogg',
                'disco_id' => '16',   ));

Musicas::create(
            array(
                'faixa' => 'Incendia, Incendi&ecirc;',
                'compositor' => '(Francisco Gileno / Cl&aacute;udio Rabello)',
                'letra' => '<p>Fogo de palha queima, queima e se apaga<br />
Fogo de amor incendeia e se espalha<br />
Quem &eacute; do fogo que incendeia em fevereiro<br />
Sabe que em janeiro fogo j&aacute; inc&ecirc;ndio</p>

<p>Incendi&aacute;, incendi&ecirc;<br />
Inc&ecirc;ndi&ocirc;<br />
Incendi&aacute;, incendi&ecirc;<br />
Meu amor</p>

<p>Que n&atilde;o tem fogo de amor n&atilde;o se espalha<br />
Quem muito tem consegue a cinza suportar<br />
Ai meu amor, me aquece e me agasalha<br />
Quem n&atilde;o ama, se estra&ccedil;alha<br />
Deixa eu me incendi&aacute;</p>

<p>Nos teus cabelos cor de ouro do reinado<br />
Na tua boca perfumada de alecrim<br />
Eu acendi a brasa que tava apagada<br />
E galopei incendiada em teu leito de cetim</p>

<p>Fogo de palha dura apenas um momento<br />
Fogo de amor, ah, isso nunca chega ao fim<br />
Fogo por fogo, acabei num fogo cruzado<br />
Galopando no cerrado com voc&ecirc; dentro de mim<br />
</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo e teclados: Julinho Teixeira<br />
Guitarra: Luiz Brasil<br />
Contrabaixo: Fernando Nunes<br />
Bateria: Cesinha<br />
Acordeom: Oswaldinho do Acordeom<br />
Zabumba: Marquinho Lobo<br />
Tri&acirc;ngulo e contas: Paulinho He-man<br />
Caxixi e efeitos: Lan Lan<br />
Trompetes: Bidinho e Formiga<br />
Sax tenor: Maca&eacute;<br />
Sax alto: Paulo Senise<br />
Trombone: Vitor<br />
Vocais: Jussara Silveira, Betina, Jussara Louren&ccedil;o, Bebel, Jurema, Marcelo Szabo, Marcio Lott, Chico Puppo, Ronaldo Barcelos e Zeppa Souza<br />
Pr&eacute;-produ&ccedil;&atilde;o, teclados e guitarra solo: Est&uacute;dio Caverna (t&eacute;cnico: Roberto Lly)<br />
</p>
',
                'faixa_mp3' => '07_incendia_incendie.mp3', 
                'faixa_ogg' => '07_incendia_incendie.ogg',
                'disco_id' => '16',   ));

Musicas::create(
            array(
                'faixa' => '&Aacute;gua Fria (La gota fria)',
                'compositor' => '(Emiliano Zuleta / Vers&atilde;o: Claudio Rabello)',
                'letra' => '<p>C&ecirc; se lembra, moreninho, aquele dia<br />
Que ca&iacute;mo na folia<br />
Que sa&iacute;mo atr&aacute;s da banda?<br />
Sonhando levar a vida<br />
Girando feito ciranda<br />
Sonhando levar a vida<br />
Girando feito ciranda</p>

<p>Me arrepio quando penso<br />
Nos amores que j&aacute; tive<br />
Me arrepio quando penso<br />
Nos amores que j&aacute; tive</p>

<p>Voc&ecirc; foi o melhor moreno<br />
Me fez sentir quanto era livre<br />
Voc&ecirc; foi o melhor moreno<br />
Me fez sentir quanto era livre</p>

<p>V&ecirc; se me leva onde eu nunca vou<br />
Aonde hoje tenha baile<br />
V&ecirc; se me leva onde eu nunca vou<br />
Aonde hoje tenha baile</p>

<p>Moreninho v&ecirc; se me leva<br />
Por onde o meu sonho anda<br />
Moreninho v&ecirc; se me leva<br />
Por onde o meu sonho anda</p>

<p>Que aventura, que aventura vou viver<br />
Uma noite dessas quando s&oacute; por vadiagem<br />
Provar o amor de quem d&ecirc;<br />
Amor por qualquer bobagem<br />
Provar o amor de quem d&ecirc;<br />
Amor por qualquer bobagem</p>

<p>Moreninho n&atilde;o te engano<br />
Nem digo isso pra ofender<br />
Moreninho n&atilde;o te engano<br />
Nem digo isso pra ofender</p>

<p>Eu nasci com essa chama<br />
De sempre querer prazer<br />
Que eu nasci com essa chama<br />
De sempre querer prazer</p>

<p>Moreninho, moreninho<br />
Se voc&ecirc; me quiser, me quiser<br />
Vem c&aacute; me pegar<br />
Mas se na hora de amar<br />
Cair um balde de &aacute;gua fria<br />
Mas se na hora de amar<br />
Cair um balde de &aacute;gua fria</p>

<p>Desculpe, mas n&atilde;o era o dia<br />
De ter minha companhia<br />
Desculpe, mas n&atilde;o era o dia<br />
De ter minha companhia<br />
</p>

',
'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo, teclados e acordeom solo: Julinho Teixeira<br />
Viol&otilde;es: Luiz Brasil e Tony Costa<br />
Contrabaixo: Fernando Nunes<br />
Bateria: Cesinha<br />
Acordeom: Oswaldinho do Acordeom<br />
Bong&ocirc;: Marquinho Lobo<br />
Congas e timbales: Paulinho He-man<br />
Caxixi: Lan Lan<br />
Vocais: Jussara Silveira, Betina, Jussara Louren&ccedil;o, Bebel, Jurema de C&acirc;ndia, Marcelo Szabo, Marcio Lott, Chico Puppo, Ronaldo Barcelos, Zeppa Souza, Ronaldo Correa, Pedro Baldanza, Jorge Alexandre e Louren&ccedil;o<br />
</p>
',              
                'faixa_mp3' => '08_agua_fria.mp3', 
                'faixa_ogg' => '08_agua_fria.ogg',
                'disco_id' => '16',   ));

Musicas::create(
            array(
                'faixa' => 'A Massa',
                'compositor' => '(Raimundo Sodr&eacute; / Jorge Portugal)',
                'letra' => '<p>A dor da gente<br />
&Eacute; dor de menino acanhado<br />
Menino, bezerro, pisado<br />
No curral do mundo a penar</p>

<p>Que salta aos olhos<br />
Igual a um gemido calado<br />
A sombra do mal-assombrado<br />
&Eacute; a dor de nem poder chorar</p>

<p>Moinho de homens<br />
Que nem jerimuns amassados<br />
Mansos, meninos, domados<br />
Massa de medos iguais</p>

<p>Amassando a massa<br />
A m&atilde;o que amassa a comida<br />
Esculpe, modela e castiga<br />
A massa dos homens normais</p>

<p>Quando eu lembro da massa da mandioca m&atilde;e<br />
A massa<br />
Quando eu lembro da massa da mandioca, m&atilde;e<br />
A massa</p>

<p>Nunca mais me fizeram aquela presen&ccedil;a, m&atilde;e<br />
A massa<br />
&Eacute; a massa que planta a mandioca, m&atilde;e<br />
A massa<br />
A massa que eu falo &eacute; a que passa fome, m&atilde;e<br />
A massa<br />
Essa massa que planta &eacute; a mandioca, m&atilde;e<br />
A massa</p>

<p>Lel&eacute;, meu amor, lel&eacute;<br />
Lel&eacute;, meu amor, lel&eacute;<br />
No cabo da minha enxada n&atilde;o conhe&ccedil;o coron&eacute;<br />
No cabo da minha enxada n&atilde;o conhe&ccedil;o coron&eacute;</p>

<p>Eu quero mas n&atilde;o quero (camar&aacute;)<br />
Mulher minha na fun&ccedil;&atilde;o (camar&aacute;)<br />
C&ecirc; t&aacute; livre de um abra&ccedil;o (camar&aacute;)<br />
Mas n&atilde;o t&aacute; de um belisc&atilde;o (camar&aacute;)<br />
Torna a repetir meu amor (ai, ai, ai)<br />
Eu torno a repetir meu amor</p>

<p>O guarda civil n&atilde;o quer a roupa no quarador<br />
O guarda civil n&atilde;o quer a roupa no quarador<br />
Meu Deus, onde vai parar<br />
Parar essa massa?<br />
Meu Deus, onde vai parar<br />
Parar essa massa?<br />
</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo e teclados: Julinho Teixeira<br />
Viol&atilde;o: Luiz Brasil<br />
Contrabaixo: Fernando Nunes<br />
Bateria: Cesinha<br />
Zabumba, surdo, caxixi e zamb&ecirc;: Marquinho Lobo<br />
Block e timbal: Paulinho He-man<br />
Tri&acirc;ngulo e timbal: Lan Lan<br />
Trompetes: Bidinho e Formiga<br />
Sax tenor: Maca&eacute;<br />
Sax alto: Paulo Senise<br />
Trombone: Vitor<br />
Vocais: Jussara Silveira, Betina, Jussara Louren&ccedil;o, Bebel, Jurema, Marcelo Szabo, Marcio Lott, Chico Puppo, Ronaldo Barcelos, Zeppa Souza, Ronaldo Correa, Pedro Baldanza, Jorge Alexandre e Louren&ccedil;o<br />
Pr&eacute;-produ&ccedil;&atilde;o, teclados e guitarra solo: Est&uacute;dio Caverna (t&eacute;cnico: Roberto Lly)</p>
',
                'faixa_mp3' => '09_a_massa.mp3', 
                'faixa_ogg' => '09_a_massa.ogg',
                'disco_id' => '16',   ));

Musicas::create(
            array(
                'faixa' => 'Tudo Passa',
                'compositor' => '(Ant&ocirc;nio Barros / Cec&eacute;u)',
                'letra' => '<p>Pra me dar dor de cabe&ccedil;a<br />
Bastam as preocupa&ccedil;&otilde;es<br />
Por favor, meu bem, me esque&ccedil;a<br />
N&atilde;o ligue as emo&ccedil;&otilde;es<br />
Que eu vou fazer o poss&iacute;vel<br />
Pra ver se tamb&eacute;m lhe esque&ccedil;o<br />
Viver assim &eacute; horr&iacute;vel<br />
H&aacute; quanto tempo eu pade&ccedil;o</p>

<p>Ai, que d&oacute;i, d&oacute;i<br />
Mas a dor passa<br />
Ai, que r&oacute;i, r&oacute;i<br />
Mas para de roer<br />
Ai, que d&oacute;i, d&oacute;i<br />
Mas eu vou achar gra&ccedil;a<br />
Porque tudo passa<br />
E eu vou lhe esquecer</p>

<p>Vou cair de cabe&ccedil;a no maior forr&oacute;<br />
Levantar p&oacute; at&eacute; o amanhecer<br />
Eu vou beber o nosso amor de gra&ccedil;a<br />
Porque tudo passa e eu vou lhe esquecer<br />
</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello<br />
Arranjo de base e acordeom: Oswaldinho do Acordeom<br />
Zabumba e agog&ocirc;: Arecessoni de Almeida<br />
Tri&acirc;ngulo, pandeiro e reco reco: Jos&eacute; Durval<br />
Guitarra: Luiz Brasil<br />
Contrabaixo: Jacar&eacute;<br />
Vocais: Jussara Silveira, Marcelo Szabo Ronaldo Barcelos, Z&eacute; Louren&ccedil;o, Ana Leuzinger e Nina Pancevski<br />
</p>
',
                'faixa_mp3' => '10_tudo_passa.mp3', 
                'faixa_ogg' => '10_tudo_passa.ogg',
                'disco_id' => '16',   ));

Musicas::create(
            array(
                'faixa' => '&eacute; Esse?',
                'compositor' => '(Lenine)',
                'letra' => '<p>Nega que baque &eacute; esse?<br />
Chegou pra me baquear<br />
Nega tu n&atilde;o se avexe<br />
Seu corpo remexe<br />
Sem se perguntar por qu&ecirc;</p>

<p>Nega que baque &eacute; esse?<br />
Ningu&eacute;m pode me ajudar<br />
S&oacute; mesmo com voc&ecirc;<br />
Quero ver o baque da vida virar<br />
S&oacute; mesmo com voc&ecirc;<br />
Quero ver o baque da vida virar</p>

<p>E o ver&atilde;o chegou<br />
O sol j&aacute; saiu pra tirar teu mofo<br />
E o maracatu passou<br />
J&aacute; com o bombo batendo fofo<br />
S&oacute; quem vai atr&aacute;s<br />
&Eacute; capaz de entender toda essa magia<br />
A nega dan&ccedil;ando<br />
E a negada babando na fantasia<br />
A nega dan&ccedil;ando<br />
E a negada babando na fantasia</p>

<p>De onde vem esse toque<br />
Que contagia o mundo<br />
E leva todo mundo a reboque?<br />
Eu n&atilde;o sei como &eacute;<br />
Que essa nega danada da p&aacute; virada<br />
Ainda t&aacute; de p&eacute;</p>

<p>O maracatu &eacute; da Coroa Imperial<br />
&Eacute; de Pernambuco<br />
Ele &eacute; da Casa Real<br />
</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello<br />
Arranjo de base: Marcio Miranda e Guto Gra&ccedil;a Mello<br />
Teclados: Marcio Miranda<br />
Contrabaixo: Fernando Nunes<br />
Surdo, repique e agog&ocirc;: Marcos Suzano<br />
Bat&aacute;, xequer&ecirc; e repique: Repolho<br />
Guitarra: Paulo Rafael<br />
Vocais: Jussara Silveira, Z&eacute; Louren&ccedil;o, Marcelo Szabo, Ronaldo Barcelos, Ana Leuzinger e Nina Pancevski</p>
',
                'faixa_mp3' => '11_que_baque_e_esse.mp3', 
                'faixa_ogg' => '11_que_baque_e_esse.ogg',
                'disco_id' => '16',   ));

Musicas::create(
            array(
                'faixa' => 'Acaba Quando Começa',
                'compositor' => '(Ger&ocirc;nimo / Saul Barbosa)',
                'letra' => '<p>A beira da sua an&aacute;gua<br />
Na po&ccedil;a d&rsquo;&aacute;gua molhou<br />
Ao chover de madrugada<br />
Foi o dia que chegou</p>

<p>Na sola do seu sapato<br />
Mina &aacute;gua, nasce flor<br />
&Eacute; o canto do desejo<br />
&Eacute; um jeito de amor</p>

<p>De mar&eacute;, de vagar<br />
Se eu sou um voyager<br />
O que eu sinto por voc&ecirc;<br />
S&oacute; voc&ecirc; sabe o que &eacute;<br />
N&atilde;o precisa mais falar<br />
Quando a hist&oacute;ria come&ccedil;a<br />
&Eacute; quando ela acaba<br />
</p>

',
'creditos' => '<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello<br />
Arranjo de base e teclados: Marcio Miranda<br />
Contrabaixo: Fernando Nunes<br />
Bateria: Cesinha<br />
Congas: Repolho<br />
Tri&acirc;ngulo, ganz&aacute; e serrote: Marcos Suzano<br />
Flauta solo: Milton Guedes<br />
Acordeom: Oswaldinho<br />
Viol&atilde;o: Luiz Brasil<br />
Guitarra: Paulo Coelho<br />
Arranjo e reg&ecirc;ncia de cordas: Salinas<br />
Violinos: Giancarlo Pareschi (spalla), Jos&eacute; Alves da Silva, Bernardo Bessler, Marri Cristina Bessler, Ricardo Amado da Silva, Antonela Lima Pareschi, Walter Hack, Marcelo Pompeu, Carmelita Reis, Aizik M. Geller e Jos&eacute; Dias<br />
Coorden e violino: Paschoal Perrota<br />
Violas: Frederick Stephany, Arlindo Figueiredo Penteado, Jeslina Noronha Passaroto e Jairo Diniz Silva<br />
Cellos: Alceu de Almeida Reis e Jorge Kundert Ranevsky<br />
Vocais: Jussara Silveira, Marcelo Szabo, Ronaldo Barcelos, Ana Leuzinger e Nina Pancevski</p>
',              'faixa_mp3' => '12_acaba_quando_comeca.mp3', 
                'faixa_ogg' => '12_acaba_quando_comeca.ogg',
                'disco_id' => '16',   ));

Musicas::create(
            array(
                'faixa' => 'Eu quero &eacute; botar meu bloco na rua (Vers&atilde;o Forr&oacute;/Frevo)',
                'compositor' => '(Sergio Sampaio)',
                'letra' => '<p>H&aacute; quem diga<br />
Que eu dormi de touca<br />
Que eu perdi a boca<br />
Que eu fugi da briga<br />
Que eu ca&iacute; do galho<br />
E que n&atilde;o vi sa&iacute;da<br />
Que eu morri de medo<br />
Quando o pau quebrou</p>

<p>H&aacute; quem diga<br />
Que eu n&atilde;o sei de nada<br />
Que eu n&atilde;o sou de nada<br />
E n&atilde;o pe&ccedil;o desculpas<br />
Que eu n&atilde;o tenho culpa<br />
Mas que eu dei bobeira<br />
E que Durango Kid quase me pegou</p>

<p>Eu quero &eacute; botar meu bloco na rua<br />
Brincar, botar pra gemer<br />
Eu quero &eacute; botar meu bloco na rua<br />
Gingar pra dar e vender</p>

<p>Eu por mim queria isso e aquilo<br />
Um quilo mais daquilo<br />
Um grilo menos nisso<br />
&Eacute; disso que eu preciso<br />
N&atilde;o &eacute; nada disso<br />
Eu quero &eacute; todo mundo nesse carnaval<br />
</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o: Netinho<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: Mario Jorge Bruno, Ronaldo Ferrone e Luiz Rodrigues<br />
Auxiliares: Alex, Elcio e Billy<br />
Guitarra: Victor Biglione e Julinho Brown<br />
Sax: Milton Guedes e Dulciano Pereira<br />
Trombone: Vitor Santos<br />
Trompetes: Bidinho e Formiga<br />
Contrabaixo: Fernando Nunes<br />
Bateria: Cesinha<br />
Surdo: Gordinho<br />
Percuss&atilde;o: Marquinho Lobo, Firmino e Reginaldo Vargas<br />
Tamborins: Wanderley Moura, Ney Pedro, Vivaldo e Nelson Damas</p>
',
                'faixa_mp3' => '13_eu_quero_e_botar_meu_bloco_na_rua_forro_frevo.mp3', 
                'faixa_ogg' => '13_eu_quero_e_botar_meu_bloco_na_rua_forro_frevo.ogg',
                'disco_id' => '16',   ));

Musicas::create(
            array(
                'faixa' => 'Contradi&ccedil;&otilde;es',
                'compositor' => '(Dominguinhos / Fausto Nilo)',
                'letra' => '<p>Meu caso de amor<br />
&Eacute; um espinho feroz<br />
Quando bate &eacute; uma flor<br />
Seu carinho d&oacute;i</p>

<p>Seu gosto &eacute; de mel<br />
Com venenos amargos demais<br />
Sua boca, modernas palavras<br />
Seus l&aacute;bios, promessas de tempos atr&aacute;s</p>

<p>De tanto querer<br />
Me perdi nessas contradi&ccedil;&otilde;es<br />
Pus na m&atilde;o desse Deus<br />
Minhas emo&ccedil;&otilde;es</p>

<p>Todo homem se cr&ecirc;<br />
Quando entra em uma mulher<br />
Mas esquece que a dor e o prazer<br />
Vem quando ela quer</p>

<p>O que ele me deu<br />
Ningu&eacute;m pode roubar<br />
Mas da pr&oacute;xima vez<br />
Vou me apaixonar<br />
</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello<br />
Arranjo de base e acordeom: Dominguinhos<br />
Arranjo e reg&ecirc;ncia de cordas: Salinas<br />
Violinos: Giancarlo Pareschi (spalla), Jos&eacute; Alves da Silva, Bernardo Bessler, Marri Cristina Bessler, Ricardo Amado da Silva, Antonela Lima Pareschi, Walter Hack, Marcelo Pompeu, Carmelita Reis, Aizik M. Geller e Jos&eacute; Dias<br />
Coorden e violino: Paschoal Perrota<br />
Violas: Frederick Stephany, Arlindo Figueiredo Penteado, Jeslina Noronha Passaroto e Jairo Diniz Silva<br />
Cellos: Alceu de Almeida Reis e Jorge Kundert Ranevsky<br />
</p>
',
                'faixa_mp3' => '14_contradicoes.mp3', 
                'faixa_ogg' => '14_contradicoes.ogg',
                'disco_id' => '16',   ));

Musicas::create(
            array(
                'faixa' => 'Onde Tu T&aacute; Nen&eacute;m',
                'compositor' => '(Luis Bandeira)',
                'letra' => '<p>Onde tu t&aacute; nen&eacute;m<br />
Eu vim te procurar<br />
Vamos fazer as pazes<br />
Tenho tantas frases pra te agradar</p>

<p>Onde tu t&aacute; nen&eacute;m<br />
Eu vim te procurar<br />
Saudade sai me solta<br />
Estou aqui de volta pra meu bem beijar</p>

<p>Estou aqui de novo junto ao meu povo<br />
Minha gente amiga<br />
Quem me conhece sabe<br />
Que eu detesto intriga</p>

<p>Uma saudade enorme<br />
Come e deita e dorme no meu cora&ccedil;&atilde;o<br />
Rem&eacute;dio indicado pra quem est&aacute; errado<br />
&Eacute; pedir perd&atilde;o</p>

<p>Por uma briga &agrave; toa<br />
Quanta coisa boa a gente est&aacute; perdendo<br />
Sert&atilde;o em noite branca<br />
O dia amanhecendo</p>

<p>Nossa conversa linda<br />
Tem segredo ainda para um s&eacute;culo mais<br />
N&atilde;o &eacute; pra nos gabar<br />
Mas n&atilde;o existe um par como n&oacute;s dois se faz<br />
</p>
',
'creditos' => '<p>Arranjo e violas: Robertinho de Recife<br />
Sanfona: Z&eacute; Am&eacute;rico Bastos<br />
Baixo: Ciro Cruz<br />
Bateria: Renato Massa<br />
Percuss&atilde;o: Firmino e Paulinho He-Man<br />
Teclados: Luiz Antonio<br />
Vocais: Roberta Little, Lucy Louro, Val&eacute;ria Mariano e Nan&aacute;<br />
</p>
',
                'faixa_mp3' => '01_onde_tu_ta_nenem.mp3', 
                'faixa_ogg' => '01_onde_tu_ta_nenem.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'Xod&oacute; Beleza',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Me lembro daquele tempo<br />
Quando a gente namorava<br />
No port&atilde;o de casa, no port&atilde;o de casa<br />
Ah, era aquele chameguinho safadinho, bonitinho<br />
Muito bem agarradinho no port&atilde;o<br />
Ah, era aquele chameguinho safadinho, bonitinho<br />
Muito bem agarradinho no port&atilde;o</p>

<p>Meu bem por dentro e eu pelo lado de fora<br />
Ele dizia t&aacute; na hora e eu n&atilde;o, n&atilde;o<br />
Nosso namoro era xod&oacute; beleza<br />
Uma fogueira acesa dentro do meu cora&ccedil;&atilde;o<br />
Nosso namoro era xod&oacute; beleza<br />
Uma fogueira acesa dentro do meu cora&ccedil;&atilde;o</p>

<p>E a gente continua com aquele namorinho<br />
Muito mais agarradinho<br />
M&atilde;o na m&atilde;o</p>

<p>Chega pra c&aacute;, meu bem me d&aacute;<br />
Vamos lembrar daquele tempo l&aacute; no port&atilde;o<br />
Seu cora&ccedil;&atilde;o acelerava, o meu batia<br />
E a agonia se morria de paix&atilde;o</p>

<p>Nosso namoro era xod&oacute; beleza<br />
Uma fogueira acesa dentro do meu cora&ccedil;&atilde;o<br />
Nosso namoro era xod&oacute; beleza<br />
Uma fogueira acesa dentro do meu cora&ccedil;&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo: Z&eacute; Am&eacute;rico Bastos e Luiz Ant&ocirc;nio<br />
Guitarra: Marquinhos<br />
Sanfona: Z&eacute; Am&eacute;rico Bastos<br />
Baixo: Jacar&eacute;<br />
Bateria: Renato Massa<br />
Percuss&atilde;o: Paulinho He-Man<br />
Teclados: Luiz Antonio<br />
Vocais: Roberta Little, Lucy Louro, Val&eacute;ria Mariano, Nan&aacute;, Marcelo Szabo e Elba Ramalho<br />
</p>
',
                'faixa_mp3' => '02_xodo_beleza.mp3', 
                'faixa_ogg' => '02_xodo_beleza.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'Le&atilde;o do Norte',
                'compositor' => '(Lenine / Paulo C&eacute;sar Pinheiro) Participa&ccedil;&atilde;o Especial: Lenine',
                'letra' => '<p>Sou cora&ccedil;&atilde;o do folclore nordestino<br />
Eu sou Mateus e Basti&atilde;o do boi bumb&aacute;<br />
Sou o boneco de mestre Vitalino<br />
Dan&ccedil;ando uma ciranda em Itamarac&aacute;</p>

<p>Eu sou o verso de Carlos Pena Filho<br />
Num frevo de Capiba<br />
Ao som da Orquestra Armorial<br />
Sou Capibaribe num livro de Jo&atilde;o Cabral</p>

<p>Sou mamulengo de S&atilde;o Bento da Una<br />
Vindo num baque solto de um maracatu<br />
Eu sou um auto de Ariano Suassuna<br />
No meio da feira de Caruaru</p>

<p>Sou Frei Caneca no Pastoril do Faceta<br />
Levando a Flor da Lira pra Nova Jerusal&eacute;m<br />
Sou Luiz Gonzaga<br />
E eu sou do mangue tamb&eacute;m</p>

<p>Eu sou mameluco<br />
Sou de Casa Forte<br />
Sou de Pernambuco<br />
Eu sou o Le&atilde;o do Norte</p>

<p>Sou Macambira de Joaquim Cardoso<br />
Banda da Pife no meio do carnaval<br />
Na noite dos tambores silenciosos<br />
Sou a calunga revelando o carnaval</p>

<p>Sou a folia que desce l&aacute; de Olinda<br />
O Homem da Meia-Noite<br />
Eu sou puxando esse cord&atilde;o<br />
Sou jangadeiro na festa de Jaboat&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo: Robertinho de Recife e Lenine<br />
Viol&atilde;o: Lenine<br />
Sitar e guitar de 12 cordas: Robertinho de Recife<br />
Percuss&atilde;o: Firmino e Paulinho He-Man<br />
Teclados: Luiz Antonio<br />
</p>
',
                'faixa_mp3' => '03_leao_do_norte.mp3', 
                'faixa_ogg' => '03_leao_do_norte.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'Ch&atilde;o De Giz',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>Eu des&ccedil;o dessa solid&atilde;o<br />
Espalho coisas sobre um ch&atilde;o de giz<br />
H&aacute; meros devaneios tolos a me torturar<br />
Fotografias recortadas em jornais de folhas ami&uacute;de<br />
Eu vou te jogar num pano de guardar confetes<br />
Eu vou te jogar num pano de guardar confetes</p>

<p>Disparo balas de canh&atilde;o<br />
&Eacute; in&uacute;til pois existe um Gr&atilde;o-Vizir<br />
H&aacute; tantas violetas velhas sem um colibri<br />
Queria usar, quem sabe, uma camisa de for&ccedil;a<br />
Ou de V&ecirc;nus<br />
Mas n&atilde;o vou gozar de n&oacute;s apenas um cigarro<br />
Nem vou te beijar gastando assim o meu batom</p>

<p>Agora pego um caminh&atilde;o<br />
Na lona, vou a nocaute outra vez<br />
Pra sempre fui acorrentada no seu calcanhar<br />
Os meus vinte anos de boy, that&rsquo;s over baby!<br />
Freud explica<br />
N&atilde;o vou me sujar fumando apenas um cigarro<br />
Nem vou te beijar gastando assim o meu batom<br />
Quanto ao pano dos confetes<br />
J&aacute; passou o meu carnaval<br />
Isso explica porque o sexo &eacute; assunto popular<br />
No mais, estou indo embora<br />
No mais, estou indo embora, baby<br />
No mais, embora baby, no mais...<br />
No mais, estou indo embora, no mais...<br />
</p>

',
'creditos' => '<p>Arranjo e viol&atilde;o de a&ccedil;o: Z&eacute; Ramalho<br />
Viol&atilde;o de nylon: Geraldo Azevedo<br />
Sitar: Robertinho de Recife<br />
Violino: Paul de Castro<br />
Baixo: Jacar&eacute;<br />
Bateria: Renato Massa<br />
Teclados: Luiz Ant&ocirc;nio<br />
Vocais: Elba Ramalho e Marcelo Szabo<br />
</p>
',
                'faixa_mp3' => '04_chao_de_giz.mp3', 
                'faixa_ogg' => '04_chao_de_giz.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'B&eacute;rad&ecirc;ro',
                'compositor' => '(Chico C&eacute;sar)',
                'letra' => '<p>Os olhos tristes da fita<br />
Rodando no gravador<br />
Uma mo&ccedil;a cosendo roupa<br />
Com a linha do Equador<br />
E a voz da santa dizendo<br />
&ldquo;O que &eacute; que eu t&ocirc; fazendo<br />
C&aacute; em cima desse andor?&rdquo;<br />
E a voz da santa dizendo<br />
&ldquo;O que &eacute; que eu t&ocirc; fazendo<br />
C&aacute; em cima desse andor?&rdquo;</p>

<p>A tinta pinta o asfalto<br />
Enfeita a alma motorista<br />
&Eacute; cor na cor da cidade<br />
Batom no l&aacute;bio nortista<br />
O olhar v&ecirc; tons t&atilde;o sudestes<br />
E o beijo que v&oacute;s me nordestes<br />
Arranha-c&eacute;u da boca paulista<br />
O olhar v&ecirc; tons t&atilde;o sudestes<br />
E o beijo que v&oacute;s me nordestes<br />
Arranha-c&eacute;u da boca paulista</p>

<p>Cadeiras el&eacute;tricas da baiana<br />
Senten&ccedil;a que o turista cheire<br />
E os sem amor e os sem teto<br />
Os sem paix&atilde;o, sem alqueire<br />
No peito dos sem peito uma seta<br />
E a cigana analfabeta<br />
Lendo a m&atilde;o de Paulo Freire<br />
No peito dos sem peito uma seta<br />
E a cigana analfabeta<br />
Lendo a m&atilde;o de Paulo Freire</p>

<p>A contenteza do triste<br />
Tristezura do contente<br />
Vozes de faca cortando<br />
Como o riso da serpente<br />
S&atilde;o sons de sins, n&atilde;o contudo<br />
P&eacute; quebrado, verso mudo<br />
Grito no hospital da gente<br />
S&atilde;o sons de sins, n&atilde;o contudo<br />
P&eacute; quebrado, verso mudo<br />
Grito no hospital da gente<br />
</p>
<p>S&atilde;o sons, sons, s&atilde;o sons de sins<br />
S&atilde;o sons, s&atilde;o sons, s&atilde;o sons de sins<br />
S&atilde;o sons, sons de sins<br />
</p>

',
'creditos' => '<p>Arranjo, guitarra e sitar: Robertinho de Recife<br />
Percuss&atilde;o: Firmino e Luiz Antonio<br />
Vocais: Roberta Little, Lucy Louro, Val&eacute;ria Mariano, Nan&aacute;, Marcelo Szabo, Elba Ramalho e MC Jacar&eacute;<br />
</p>
',
                'faixa_mp3' => '05_beradero.mp3', 
                'faixa_ogg' => '05_beradero.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'Treze De Dezembro',
                'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas / letra: Gilberto Gil) Participa&ccedil;&atilde;o Especial: Conjunto &Eacute;poca de Ouro e Dominguinhos',
                'letra' => '<p>Bem que essa noite eu vi gente chegando<br />
Eu vi sapo saltitando<br />
E ao longe ouvi o ronco alegre do trov&atilde;o<br />
Alguma coisa forte pra valer<br />
Tava para acontecer na regi&atilde;o<br />
Quando o galo cantou, o dia raiou<br />
Eu imaginei<br />
&Eacute; que hoje &eacute; treze de dezembro<br />
E a treze de dezembro nasceu Nosso Rei</p>

<p>O nosso Rei do Bai&atilde;o, a maior voz do sert&atilde;o<br />
Filho do sonho de D. Sebasti&atilde;o<br />
Como fruto do matrim&ocirc;nio<br />
Do cometa Janu&aacute;rio com a estrela Santana<br />
Ao nascer da Era do Aqu&aacute;rio<br />
No cen&aacute;rio rico das terras de Exu<br />
O mensageiro nu dos orix&aacute;s<br />
&Eacute; desse treze de dezembro que eu me lembrarei<br />
E sei que n&atilde;o me esquecerei jamais<br />
</p>
',
'creditos' => '<p>Arranjo: Conjunto &Eacute;poca de Ouro<br />
Sanfona: Dominguinhos<br />
&Eacute;poca de Ouro<br />
Viol&atilde;o: Cesar Faria<br />
Viol&atilde;o7 cordas: Dino 7 Cordas<br />
Bandolim: Ronaldo do Bandolim<br />
Viol&atilde;o: Toni<br />
Cavaquinho: Jorge Filho<br />
Pandeiro: Jorginho do Pandeiro<br />
</p>
',
                'faixa_mp3' => '06_treze_de_dezembro.mp3', 
                'faixa_ogg' => '06_treze_de_dezembro.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'Na Base Da Chinela',
                'compositor' => '(Jackson do Pandeiro / Rosil Cavalcanti)',
                'letra' => '<p>Eu fui dan&ccedil;ar um baile na casa da Gabriela<br />
Nunca vi coisa t&atilde;o boa foi na base da chinela<br />
Eu fui dan&ccedil;ar um baile na casa da Gabriela<br />
Nunca vi coisa t&atilde;o boa foi na base da chinela</p>

<p>O sujeito ia chegando tirava logo o sapato<br />
Se tivesse de botina, sola grossa, bico chato<br />
Entrava pra dan&ccedil;ar no baile da Gabriela<br />
Tirando meia e sapato, cal&ccedil;ando um par de chinela</p>

<p>O baile estava animado s&oacute; na base da chinela<br />
Toda a turma disputava dan&ccedil;ar com a Gabriela<br />
Requebrar naquela base no sal&atilde;o s&oacute; tinha ela<br />
Todos convidados riam gostando da base dela<br />
Jogaram no sal&atilde;o pimenta bem machucada<br />
O baile da Gabriela acabou com chinelada<br />
</p>
',
'creditos' => '<p>Arranjo e guitarras: Robertinho de Recife<br />
Sanfona: Z&eacute; Am&eacute;rico Bastos<br />
Baixo: Ciro Cruz<br />
Bateria: Renato Massa<br />
Percuss&atilde;o: Firmino<br />
Teclados: Luiz Antonio<br />
Clarinete: Juarez Ara&uacute;jo<br />
Vocais: Roberta Little, Lucy Louro, Val&eacute;ria Mariano e Nan&aacute;<br />
</p>

',
                'faixa_mp3' => '07_na_base_da_chinela.mp3', 
                'faixa_ogg' => '07_na_base_da_chinela.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'Canoeiro',
                'compositor' => '(Dorival Caymmi)',
                'letra' => '<p>Louvado seja Deus &oacute; meu pai<br />
Louvado seja Deus &oacute; meu pai</p>

<p>&Ocirc; canoeiro bota a rede<br />
Bota a rede no mar<br />
&Ocirc; canoeiro bota a rede no mar</p>

<p>Cerca o peixe, bate o remo<br />
Puxa a corda, colhe a rede<br />
&Ocirc; canoeiro puxa a rede do mar</p>

<p>Vai ter presente pra Chiquinha<br />
Ter presente pra Iai&aacute;<br />
&Ocirc; canoeiro puxa a rede do mar</p>

<p>Iai&aacute; me d&aacute; teu remo<br />
Teu remo pra mim remar<br />
O remo caiu, quebrou-se, mana<br />
L&aacute; em alto mar<br />
</p>
',
'creditos' => '<p>Arranjo: Robertinho de Recife<br />
Viol&atilde;o: Lenine<br />
Baixo e guitarra: Robertinho de Recife<br />
Percuss&atilde;o: Firmino e Paulinho He-Man<br />
Vocais: Roberta Little, Lucy Louro, Val&eacute;ria Mariano, Nan&aacute;, Marcelo Szabo, Elba Ramalho e MC Jacar&eacute;<br />
</p>
',
                'faixa_mp3' => '08_canoeiro.mp3', 
                'faixa_ogg' => '08_canoeiro.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'Parceiros Das Del&iacute;cias',
                'compositor' => '(Geraldo Azevedo / Capinan)',
                'letra' => '<p>Amor<br />
Vem me tirar a sede<br />
Amor<br />
Vem me tirar da rede<br />
Amor<br />
Nem que seja das intrigas<br />
Vem me tirar<br />
Vem me botar na vida</p>

<p>Amor<br />
Vem me tirar o cinto<br />
Amor<br />
Vem me tirar a pele<br />
Amor<br />
Nem que seja sem mal&iacute;cia<br />
Vem me tirar<br />
Vem me fazer car&iacute;cia</p>

<p>Vem me tirar<br />
&Agrave;s vezes pra dan&ccedil;ar<br />
At&eacute; me machucar, amor<br />
Vem me botar na rede<br />
Reviver a sede<br />
Vem me fazer aquele amor<br />
Parceiro das del&iacute;cias<br />
Amor<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Luiz Ant&ocirc;nio<br />
Violas: Robertinho de Recife<br />
Viol&atilde;o: Marquinhos<br />
Bateria: Renato Massa<br />
Percuss&atilde;o: Firmino e Paulinho He-Man<br />
Gaita: Milton Guedes<br />
</p>
',
                'faixa_mp3' => '09_parceiros_das_delicias.mp3', 
                'faixa_ogg' => '09_parceiros_das_delicias.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'Eu Vou Até At&eacute; De Manh&atilde;',
                'compositor' => '(Lauro Maia)Participa&ccedil;&atilde;o: Boca Livre',
                'letra' => '<p>Oi, balanc&ecirc;, balan&ccedil;ar<br />
Balan&ccedil;a pra l&aacute; e pra c&aacute;<br />
Oi, balanc&ecirc;, balan&ccedil;ar<br />
Balan&ccedil;a pra l&aacute; e pra c&aacute;</p>

<p>Eu vou at&eacute; de manh&atilde;<br />
S&oacute; nesse balancear<br />
Eu vou at&eacute; de manh&atilde;<br />
S&oacute; nesse balancear</p>

<p>Quem balan&ccedil;a com jeito h&aacute; de gostar<br />
Dan&ccedil;ando, dan&ccedil;ando, n&atilde;o quer mais parar<br />
Quem balan&ccedil;a com jeito h&aacute; de gostar<br />
Dan&ccedil;ando, dan&ccedil;ando, n&atilde;o quer mais parar</p>

<p>O camarada fica mole<br />
Fica mole, mole<br />
O camarada fica mole<br />
Fica mole, mole, mole</p>

<p>Outro dia a charanga do Zequinha<br />
Tocou balanc&ecirc; a noite inteirinha<br />
Outro dia a charanga do Zequinha<br />
Tocou balanc&ecirc; a noite inteirinha</p>

<p>O fole velho ficou rouco<br />
Ficou rouco, rouco<br />
O fole velho ficou rouco<br />
Ficou rouco, rouco, rouco<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Luiz Ant&ocirc;nio<br />
Guitarra: Robertinho de Recife<br />
Sanfona: Z&eacute; Am&eacute;rico Bastos<br />
Baixo: Ciro Cruz<br />
Bateria: Renato Massa<br />
Percuss&atilde;o: Firmino<br />
Teclados: Luiz Antonio<br />
</p>
',
                'faixa_mp3' => '10_eu_vou_ate_de_manha.mp3', 
                'faixa_ogg' => '10_eu_vou_ate_de_manha.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'Estrada Do Canind&eacute;',
                'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
                'letra' => '<p>Ai, ai, que bom<br />
Que bom, que bom que &eacute;<br />
Uma estrada e uma caboca<br />
Uma gente andando a p&eacute;</p>

<p>Ai, ai, que bom<br />
Que bom, que bom que &eacute;<br />
Uma estrada e a lua branca<br />
No sert&atilde;o de Canind&eacute;</p>

<p>Artom&oacute;ve l&aacute; nem se sabe<br />
Se &eacute; home ou se &eacute; mui&eacute;<br />
Quem &eacute; rico anda em burrico<br />
Quem &eacute; pobre anda a p&eacute;</p>

<p>Mas o pobre v&ecirc; nas estrada<br />
O orvaio beijando as flor<br />
V&ecirc; de perto o galo campina<br />
Que quando canta muda de cor</p>

<p>Vai moiando os p&eacute;s nos riacho<br />
Que &aacute;gua fresca, Nosso Senhor!<br />
Vai oiando coisa a granel<br />
Coisas que pra mode ver<br />
O crist&atilde;o tem que andar a p&eacute;<br />
</p>
',
'creditos' => '<p>Arranjo: Banda da Elba<br />
Guitarra: Marquinhos<br />
Baixo: Jacar&eacute;<br />
Sanfona: Cesinha<br />
Bateria: Renato Massa<br />
Percuss&atilde;o: Paulinho He-Man<br />
</p>
',
                'faixa_mp3' => '11_estrada_do_caninde.mp3', 
                'faixa_ogg' => '11_estrada_do_caninde.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'A Paisagem',
                'compositor' => '(Manduka / Dominguinhos)',
                'letra' => '<p>A paisagem quer te ver<br />
Na porta do meu carinho<br />
Entre nela sem bater<br />
Como a lua de mansinho</p>

<p>Fa&ccedil;a uso do querer<br />
Seja qual for o caminho<br />
Pois o rio que passa aqui<br />
Passou antes no vizinho</p>

<p>O canto de um passarinho<br />
Mais ligeiro que uma pena<br />
Me a&ccedil;ucara, me a&ccedil;ucena<br />
Mesmo quando estou sozinha</p>

<p>A saudade &eacute; um moinho<br />
Em seu giro me acena<br />
Eu comigo me enfarinho<br />
Mais conservo ela serena<br />
Eu comigo me enfarinho<br />
Mais conservo ela serena<br />
</p>
',
'creditos' => '<p>Arranjo e sanfona: Dominguinhos<br />
Viol&atilde;o: Marquinhos<br />
Baixo: Jacar&eacute;<br />
Bateria: Renato Massa<br />
Percuss&atilde;o: Paulinho He-Man<br />
Teclados: Luiz Ant&ocirc;nio<br />
</p>
',
                'faixa_mp3' => '12_a_paisagem.mp3', 
                'faixa_ogg' => '12_a_paisagem.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'Estrela Mi&uacute;da',
                'compositor' => '(Jo&atilde;o do Vale / Luiz Vieira)',
                'letra' => '<p>Estrela mi&uacute;da que alumeia o mar<br />
Alumi&aacute; terra e mar<br />
Pra meu bem vir me buscar<br />
H&aacute; mais de um m&ecirc;s que ela n&atilde;o<br />
Que ela n&atilde;o vem me buscar</p>

<p>A gar&ccedil;a perdeu a pena<br />
Ao passar no igarap&eacute;<br />
Eu tamb&eacute;m perdi meu len&ccedil;o<br />
Atr&aacute;s de quem n&atilde;o me quer</p>

<p>Estrela mi&uacute;da que alumeia o mar<br />
Alumi&aacute; terra e mar<br />
Pra meu bem vir me buscar<br />
H&aacute; mais de um m&ecirc;s que ela n&atilde;o<br />
Que ela n&atilde;o vem me beijar</p>

<p>A onda quebrou na praia<br />
E voltou correndo ao mar<br />
Meu amor foi como a onda<br />
E n&atilde;o voltou pra me beijar<br />
</p>
',
'creditos' => '<p>Arranjo, cavaquinho e viol&atilde;o: Robertinho de Recife<br />
Percuss&atilde;o: Firmino e Luiz Ant&ocirc;nio<br />
Viol&atilde;o de 7 cordas: Dino<br />
Trombone: L&eacute;lio Penha<br />
</p>
',
                'faixa_mp3' => '13_estrela_miuda.mp3', 
                'faixa_ogg' => '13_estrela_miuda.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'Sim, Foi Voc&ecirc;',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>Sim<br />
Foi voc&ecirc; quem n&atilde;o quis voltar<br />
Toda noite a saudade vem<br />
De verdade agora lhe procurar</p>

<p>Como a mim<br />
Que a tristeza tem<br />
Para sempre perdido al&eacute;m do sorriso<br />
J&aacute; sem poder chorar</p>

<p>Ah, nosso amor foi bom<br />
Foi de n&atilde;o se esquecer<br />
Foi t&atilde;o bonito<br />
Foi para sempre<br />
E era de se esperar renascer</p>

<p>Mas<br />
Foi voc&ecirc; quem n&atilde;o quis voltar<br />
Toda noite a saudade vem<br />
De verdade agora<br />
Lhe procurar<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Luiz Ant&ocirc;nio<br />
Violas: Robertinho de Recife<br />
Bateria: Renato Massa<br />
Percuss&atilde;o: Firmino<br />
Sax: Milton Guedes<br />
</p> 
',
                'faixa_mp3' => '14_sim_foi_voce.mp3', 
                'faixa_ogg' => '14_sim_foi_voce.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'Frevos',
                'compositor' => 'Participa&ccedil;&atilde;o Especial: Banda Pinguim (Recife)',
                'letra' => '<p><strong>Evoca&ccedil;&atilde;o</strong><br />
(Nelson Ferreira)</p>

<p>Felinto, Pedro Salgado<br />
Guilherme Fenelon<br />
Cad&ecirc; seus blocos famosos?<br />
Bloco das Flores, Andaluzas<br />
Pirilampos, Ap&ocirc;is Fum<br />
Dos carnavais saudosos</p>

<p>Na alta madrugada<br />
O coro entoava<br />
O tom da marcha regresso<br />
Que era um sucesso<br />
Dos tempos ideais<br />
Do velho Raul Morais</p>

<p>Adeus, adeus minha gente<br />
Que j&aacute; cantamos bastante<br />
Recife adormecia<br />
Ficava a sonhar<br />
Ao som da triste melodia<br />
</p>


<p><strong>Frevo n&ordm; 1 do Recife</strong><br />
(Ant&ocirc;nio Maria)<br />
</p>

<p>Ai, ai, saudade<br />
Saudade t&atilde;o grande<br />
Saudade que eu sinto<br />
Do Clube das P&aacute;s, dos Vassouras<br />
Passistas tra&ccedil;ando tesouras<br />
Nas ruas repletas de l&aacute;<br />
Batidas de bumbo<br />
S&atilde;o maracatus retardados<br />
Que voltam pra casa cansados<br />
Com seus estandartes pro ar</p>

<p>Que adianta se o Recife est&aacute; longe<br />
E a saudade &eacute; t&atilde;o grande<br />
Que eu at&eacute; me embara&ccedil;o<br />
Parece que eu vejo Walfrido Cebola no passo<br />
Haroldo Mathias, Cola&ccedil;o<br />
Recife est&aacute; perto de mim</p>

<p>Saudades que eu sinto<br />
S&atilde;o maracatus retardados<br />
Que voltam pra casa cansados<br />
Com seus estandartes pro ar<br />
</p>


<p><strong>Oh! Bela</strong><br />
(Capiba)<br />
</p>

<p>Voc&ecirc; diz que ela &eacute; bela<br />
Ela &eacute; bela sim senhor<br />
Por&eacute;m poderia ser mais bela<br />
Se ela tivesse o meu amor<br />
Meu amor</p>

<p>Bela &eacute; toda natureza, &ocirc; bela<br />
Bela &eacute; tudo que &eacute; belo, &ocirc; bela<br />
O sorriso da crian&ccedil;a<br />
O perfume de uma rosa<br />
O que fica na lembran&ccedil;a</p>

<p>Belo &eacute; ver um passarinho, &ocirc; bela<br />
Indo em busca do seu ninho, &ocirc; bela<br />
Todo mundo se amando<br />
Com amor e com carinho<br />
Uns sorrindo, outros chorando de amor<br />
De amor<br />
</p>


<p>Sou Eu Teu Amor<br />
(Alceu Valen&ccedil;a / Carlos Fernando)<br />
</p>

<p>L&aacute; vem, l&aacute; vem o bloco<br />
Mas cad&ecirc; o bloco? J&aacute; passou<br />
L&aacute; vem, l&aacute; vem o bloco<br />
Mas cad&ecirc; o bloco? J&aacute; passou</p>

<p>Um bloco veloz feito um raio<br />
Chamado Sou Eu Teu Amor <br />
Um bloco veloz feito um raio<br />
Chamado Sou Eu Teu Amor</p>

<p>Por onde ele passa<br />
Sacode alegria a vapor<br />
Lim&atilde;o com cacha&ccedil;a<br />
Na onda do frevo esquentou<br />
L&aacute; vem!</p>

<p>L&aacute; vem o bloco<br />
&Eacute; um bloco que chega<br />
&Eacute; um bloco que passa<br />
&Eacute; um raio que rompe e que tra&ccedil;a<br />
E a massa espanta a dor<br />
L&aacute; vem</p>

<p>L&aacute; vem um bloco <br />
Chamado Sou Eu Teu Amor<br />
L&aacute; vem um bloco <br />
Chamado Sou Eu Teu Amor<br />
</p>

',
'creditos' => '<p>Arranjo de metais: Juarez Ara&uacute;jo<br />
Arranjo de base: Banda Ping&uuml;im<br />
Metais: Juarez Ara&uacute;jo, Mazinho, Roberto Stepheson, Toti Cavalcanti, Altair Martins, Sueli Faria e Leilo Penha<br />
Violas e guitarra portuguesa: Robertinho de Recife<br />
Pandeiro: Firmino<br />
Vocais: Roberta Little, Lucy Louro, Val&eacute;ria Mariano e Nan&aacute;<br />
</p>
',
                'faixa_mp3' => '15_frevos.mp3', 
                'faixa_ogg' => '15_frevos.ogg',
                'disco_id' => '17',   ));

Musicas::create(
            array(
                'faixa' => 'Sabi&aacute;',
                'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas)',
                'letra' => '<p>A todo mundo eu dou psiu<br />
Perguntando por meu bem<br />
Tendo o cora&ccedil;&atilde;o vazio<br />
Vivo assim a dar psiu<br />
Sabi&aacute; vem c&aacute; tamb&eacute;m</p>

<p>Tu que andas pelo mundo (sabi&aacute;)<br />
Tu que tanto j&aacute; voou (sabi&aacute;)<br />
Tu que cantas, passarinho (sabi&aacute;)<br />
Alivia a minha dor</p>

<p>Tem pena d&rsquo;eu (sabi&aacute;)<br />
Diz por favor (sabi&aacute;)<br />
Tu que cantas passarinho (sabi&aacute;)<br />
Alivia a minha dor (sabi&aacute;)<br />
</p>
',
'creditos' => '<p>cantam: Alceu Valença, Elba Ramalho, Geraldo Azevedo e Zé Ramalho</p>
',
                'faixa_mp3' => '01_sabia.mp3', 
                'faixa_ogg' => '01_sabia.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'Cora&ccedil;&atilde;o Bobo',
                'compositor' => '(Alceu Valen&ccedil;a)',
                'letra' => '<p>Meu cora&ccedil;&atilde;o t&aacute; batendo<br />
Como quem diz n&atilde;o tem jeito<br />
Zabumba bumba esquisito<br />
Batendo dentro do peito</p>

<p>Teu cora&ccedil;&atilde;o t&aacute; batendo<br />
Como quem diz n&atilde;o tem jeito<br />
O cora&ccedil;&atilde;o dos aflitos<br />
Pipoca dentro do peito<br />
O cora&ccedil;&atilde;o dos aflitos<br />
Pipoca dentro do peito</p>

<p>Cora&ccedil;&atilde;o bobo, cora&ccedil;&atilde;o bola<br />
Cora&ccedil;&atilde;o bal&atilde;o, cora&ccedil;&atilde;o S&atilde;o Jo&atilde;o<br />
A gente se ilude dizendo<br />
J&aacute; n&atilde;o d&aacute; mais cora&ccedil;&atilde;o<br />
</p>

',
'creditos' => 'cantam: Alceu Valen&ccedil;a e Z&eacute; Ramalho
',
                'faixa_mp3' => '02_coracao_bobo.mp3', 
                'faixa_ogg' => '02_coracao_bobo.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'Jacarepagu&aacute; Blues',
                'compositor' => '(Z&eacute; Ramalho) Canta: Alceu Valen&ccedil;a',
                'letra' => '<p>T&atilde;o indecente<br />
Foi o jeito que essa mina descarada, arranhada, repulsiva<br />
Me jogou de repente<br />
Eu j&aacute; sabia das suas inten&ccedil;&otilde;es mal&eacute;ficas contra mim<br />
Por isso me precavi com todo alho e cebola<br />
Que eu consegui encontrar<br />
Mas o que eu n&atilde;o sabia era que voc&ecirc; era<br />
Exata e precisa nos seus movimentos<br />
Por isso confesso<br />
Eu t&ocirc; num terr&iacute;vel astral</p>

<p>Minha fam&iacute;lia mandou-me um cart&atilde;o postal<br />
Pois tal cart&atilde;o conseguiu me fazer chorar<br />
E o reco-reco que eu brincava<br />
Hein m&atilde;e a senhora me bateu<br />
Porque eu troquei por um isqueiro<br />
Pra poder fumar<br />
Um tal neg&oacute;cio ou coisa parecida<br />
Que faz bem ou mal a sa&uacute;de<br />
N&atilde;o interessa m&atilde;e<br />
V&aacute; perguntar ao Gabeira se voc&ecirc; pode fumar</p>

<p>Mas o cap&iacute;tulo<br />
Da novela dolorida, colorida, comovida que eu pedi pra ver<br />
O personagem que encenava a contram&atilde;o do gancho<br />
A oficina telep&aacute;tica me sorria como um camafeu<br />
Mas o que eu n&atilde;o sabia &eacute; que essa trama toda<br />
Ia cair nas costas da pessoa que vos fala e relata<br />
O que aconteceu<br />
</p>
',
'creditos' => 'canta: Alceu Valença
',
                'faixa_mp3' => '03_jacarepagua_blues.mp3', 
                'faixa_ogg' => '03_jacarepagua_blues.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'Pelas Ruas Que Andei',
                'compositor' => '(Alceu Valen&ccedil;a / Vicente Barreto)',
                'letra' => '<p>Na Madalena<br />
Eu revi teu nome<br />
Na Boa Vista<br />
Quis te encontrar<br />
Rua do Sol da Boa Hora<br />
Rua da Aurora<br />
Vou caminhar</p>

<p>Rua das Ninfas<br />
Matriz Saudade<br />
Da Soledade de quem passou<br />
Rua Benfica Boa Viagem<br />
Na Piedade tanta dor</p>

<p>Pelas ruas que andei<br />
Procurei, procurei, procurei<br />
Te encontrar<br />
Pelas ruas que andei<br />
Procurei, procurei, procurei<br />
Te encontrar<br />
</p>
',
'creditos' => 'canta: Alceu Valença
',
                'faixa_mp3' => '04_pelas_ruas_que_andei.mp3', 
                'faixa_ogg' => '04_pelas_ruas_que_andei.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'Talism&atilde;',
                'compositor' => '(Geraldo Azevedo / AlceuValen&ccedil;a) Canta: Alceu Valença e Geraldo Azevedo',
                'letra' => '<p>Diana me d&ecirc; um talism&atilde;<br />
Um talism&atilde;<br />
Viajar<br />
Voc&ecirc; j&aacute; pensou em mais eu viajar<br />
Quando o sol desmaiar<br />
Vou viajar</p>

<p>Olha essa sombra<br />
Esse rastro de mim<br />
Olha essa seta<br />
Essa r&eacute;stia de sol<br />
Morena<br />
</p>
',
'creditos' => 'canta: Alceu Valença e Geraldo Azevedo
',
                'faixa_mp3' => '05_talisma.mp3', 
                'faixa_ogg' => '05_talisma.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'O Ci&uacute;me',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>Dorme o sol &agrave; flor do Chico, meio-dia<br />
Tudo esbarra embriagado de seu lume<br />
Dorme ponte, Pernambuco, Rio, Bahia<br />
S&oacute; vigia um ponto negro: meu ci&uacute;me</p>

<p>O ci&uacute;me lan&ccedil;ou sua flecha preta<br />
E se viu ferido justo na garganta<br />
Quem nem alegre, nem triste, nem poeta<br />
Entre Petrolina e Juazeiro canta</p>

<p>Velho Chico vens de Minas<br />
De onde o oculto do mist&eacute;rio se escondeu<br />
Sei que o levas todo em ti<br />
N&atilde;o me ensinas<br />
E eu sou s&oacute; eu, s&oacute; eu s&oacute;, eu</p>

<p>Juazeiro, nem te lembras dessa tarde<br />
Petrolina, nem chegaste a perceber<br />
Mas na voz que canta tudo ainda arde<br />
Tudo &eacute; perda, tudo quer buscar, cad&ecirc;?</p>

<p>Tanta gente canta<br />
Tanta gente cala<br />
Tantas almas esticadas no curtume<br />
Sobre toda estrada, sobre toda sala<br />
Paira monstruosa<br />
A sombra do ci&uacute;me<br />
</p>

',
'creditos' => 'canta: Geraldo Azevedo
',
                'faixa_mp3' => '06_o_ciume.mp3', 
                'faixa_ogg' => '06_o_ciume.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'Dia Branco',
                'compositor' => '(Geraldo Azevedo / Renato Rocha) Canta: Elba Ramalho',
                'letra' => '<p>Se voc&ecirc; vier<br />
Pro que der e vier<br />
Comigo<br />
Eu te prometo o sol<br />
Se hoje o sol sair<br />
Ou a chuva<br />
Se a chuva cair</p>

<p>Se voc&ecirc; vier<br />
At&eacute; onde a gente chegar<br />
Numa pra&ccedil;a na beira do mar<br />
Num peda&ccedil;o de qualquer lugar<br />
Nesse dia branco</p>

<p>Se branco ele for<br />
Esse tanto, esse canto de amor<br />
Se voc&ecirc; quiser e vier<br />
Pro que der e vier<br />
Comigo<br />
</p>
',
'creditos' => 'canta: Elba Ramalho
',
                'faixa_mp3' => '07_dia_branco.mp3', 
                'faixa_ogg' => '07_dia_branco.ogg',
                'disco_id' => '18',   ));


Musicas::create(
            array(
                'faixa' => 'O Amanh&atilde; é Distante (Tomorrow is a long time)',
                'compositor' => '(Bob Dylan / Vers&atilde;o: Geraldo Azevedo / Babal)',
                'letra' => '<p>E se hoje n&atilde;o fosse essa estrada<br />
Se a noite n&atilde;o tivesse tanto atalho<br />
O amanh&atilde; n&atilde;o fosse t&atilde;o distante<br />
Solid&atilde;o seria nada pra voc&ecirc;</p>

<p>Se ao menos o meu amor estivesse aqui<br />
E eu pudesse ouvir seu cora&ccedil;&atilde;o<br />
Se ao menos mentisse ao meu lado<br />
Estaria em minha coma outra vez</p>

<p>Meu reflexo n&atilde;o consigo ver na &aacute;gua<br />
Nem fazer can&ccedil;&otilde;es sem nenhuma dor<br />
Nem ouvir o eco dos meus passos<br />
Nem lembrar meu nome quando algu&eacute;m chamou</p>

<p>H&aacute; beleza no rio do meu canto<br />
H&aacute; beleza em tudo o que h&aacute; no c&eacute;u<br />
Por&eacute;m nada com certeza &eacute; mais bonito<br />
Quando lembro dos olhos do meu bem<br />
</p>
',
'creditos' => 'canta: Geraldo Azevedo e Zé Ramalho
',
                'faixa_mp3' => '08_o_amanha_e_distante.mp3', 
                'faixa_ogg' => '08_o_amanha_e_distante.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'Admir&aacute;vel Gado Novo',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>&Ecirc;, &ocirc;, &ocirc;<br />
Vida de gado<br />
Povo marcado &ecirc;<br />
Povo feliz</p>

<p>&Ocirc; boi...<br />
Voc&ecirc;s que fazem parte dessa massa<br />
Que passa nos projetos do futuro<br />
&Eacute; duro tanto ter que caminhar<br />
E dar muito mais do que receber</p>

<p>E ter que demonstrar sua coragem<br />
&Agrave; margem do que possa aparecer<br />
E ver que toda essa engrenagem<br />
J&aacute; sente a ferrugem lhe comer</p>

<p>L&aacute; fora faz um tempo confort&aacute;vel<br />
A vigil&acirc;ncia cuida do normal<br />
Os autom&oacute;veis ouvem a not&iacute;cia<br />
Os homens a publicam no jornal</p>

<p>E correm atrav&eacute;s da madrugada<br />
A &uacute;nica velhice que chegou<br />
Demoram-se na beira da estrada<br />
E passam a contar o que sobrou</p>

<p>O povo foge da ignor&acirc;ncia<br />
Apesar de viver t&atilde;o perto dela<br />
E sonham com melhores tempos idos<br />
Contemplam essa vida numa cela</p>

<p>E esperam nova possibilidade<br />
De verem esse mundo se acabar<br />
A Arca de No&eacute;, o dirig&iacute;vel<br />
N&atilde;o voam, nem se pode flutuar<br />
N&atilde;o voam, nem se pode flutuar<br />
N&atilde;o voam, nem se pode flutuar</p>
',
'creditos' => 'canta: Zé Ramalho
',
                'faixa_mp3' => '09_admiravel_gado_novo.mp3', 
                'faixa_ogg' => '09_admiravel_gado_novo.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'Trem das 7',
                'compositor' => '(Raul Seixas) Canta: Zé Ramalho',
                'letra' => '<p>&Oacute;i, &oacute;i o trem<br />
Vem surgindo de tr&aacute;s das montanhas azuis, olha o trem<br />
&Oacute;i, &oacute;i o trem<br />
Vem trazendo de longe as cinzas do velho &eacute;on<br />
&Oacute;i, j&aacute; &eacute; vem<br />
Fumegando, apitando, chamando os que sabem do trem<br />
&Oacute;i, &oacute;i o trem<br />
N&atilde;o precisa passagem nem mesmo bagagem no trem</p>

<p>Quem vai chorar<br />
Quem vai sorrir?<br />
Quem vai ficar<br />
Quem vai partir?</p>

<p>Pois o trem est&aacute; chegando<br />
T&aacute; chegando na esta&ccedil;&atilde;o<br />
&Eacute; o trem das sete horas<br />
&Eacute; o &uacute;ltimo do sert&atilde;o, do sert&atilde;o</p>

<p>&Oacute;i, olhe o c&eacute;u<br />
J&aacute; n&atilde;o &eacute; o mesmo c&eacute;u que voc&ecirc; conheceu, n&atilde;o &eacute; mais<br />
V&ecirc;, &oacute;i que c&eacute;u<br />
&Eacute; um c&eacute;u carregado, rajado, suspenso no ar<br />
V&ecirc;, &eacute; o sinal<br />
&Eacute; o sinal das trombetas, dos anjos e dos guardi&otilde;es<br />
&Oacute;i, l&aacute; vem Deus<br />
Deslizando no c&eacute;u entre brumas de mil megatons<br />
&Oacute;i, olhe o mal<br />
Vem de bra&ccedil;os e abra&ccedil;os com o bem num romance astral<br />
Am&eacute;m<br />
</p>
',
'creditos' => 'canta: Zé Ramalho
',
                'faixa_mp3' => '10_trem_das_sete.mp3', 
                'faixa_ogg' => '10_trem_das_sete.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'Ch&atilde;o De Giz',
                'compositor' => '(Raul Seixas) Cantam: Elba Ramalho e Z&eacute; Ramalho',
                'letra' => '<p>Eu des&ccedil;o dessa solid&atilde;o<br />
Espalho coisas sobre um ch&atilde;o de giz<br />
H&aacute; meros devaneios tolos a me torturar<br />
Fotografias recortadas em jornais de folhas ami&uacute;de<br />
Eu vou te jogar num pano de guardar confetes<br />
Eu vou te jogar num pano de guardar confetes</p>

<p>Disparo balas de canh&atilde;o<br />
&Eacute; in&uacute;til pois existe um Gr&atilde;o-Vizir<br />
H&aacute; tantas violetas velhas sem um colibri<br />
Queria usar, quem sabe, uma camisa de for&ccedil;a<br />
Ou de V&ecirc;nus<br />
Mas n&atilde;o vou gozar de n&oacute;s apenas um cigarro<br />
Nem vou lhe beijar gastando assim o meu batom</p>

<p>Agora pego um caminh&atilde;o<br />
Na lona, vou a nocaute outra vez<br />
Pra sempre fui acorrentada no seu calcanhar<br />
Meus vinte anos de boy, that&rsquo;s over baby!<br />
Freud explica<br />
N&atilde;o vou me sujar fumando apenas um cigarro<br />
Nem vou lhe beijar gastando assim o meu batom<br />
Quanto ao pano dos confetes<br />
J&aacute; passou meu carnaval<br />
Isso explica porque o sexo &eacute; assunto popular<br />
No mais, estou indo embora, baby<br />
No mais, estou indo embora<br />
No mais, embora baby, baby<br />
No mais, estou indo embora, no mais...<br />
</p>

',
'creditos' => 'canta: Elba Ramalho e Zé Ramalho
',
                'faixa_mp3' => '11_chao_de_giz.mp3', 
                'faixa_ogg' => '11_chao_de_giz.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'Veja (Margarida)',
                'compositor' => '(Vital Farias) Canta: Elba Ramalho',
                'letra' => '<p>Veja voc&ecirc;, arco-&iacute;ris j&aacute; mudou de cor<br />
Uma rosa nunca mais desabrochou<br />
N&atilde;o quero ver voc&ecirc;<br />
Com esse gosto de sab&atilde;o na boca</p>

<p>Arco-&iacute;ris j&aacute; mudou de cor<br />
Uma rosa nunca mais desabrochou<br />
N&atilde;o quero ver voc&ecirc;<br />
Eu n&atilde;o quero ver</p>

<p>Veja meu bem<br />
Gasolina vai subir de pre&ccedil;o<br />
Eu n&atilde;o quero nunca mais seu endere&ccedil;o<br />
Ou &eacute; o come&ccedil;o do fim, ou &eacute; o fim</p>

<p>Eu vou partir<br />
Pra cidade garantida, proibida<br />
Arranjar meio de vida, Margarida<br />
Pra voc&ecirc; gostar de mim</p>

<p>E essas feridas da vida, Margarida<br />
Essas feridas da vida, amarga vida<br />
Pra voc&ecirc; gostar... de mim<br />
</p>
',
'creditos' => 'canta: Elba Ramalho
',
                'faixa_mp3' => '12_veja_margarida.mp3', 
                'faixa_ogg' => '12_veja_margarida.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'A Prosa Imp&uacute;rpura do Caic&oacute;',
                'compositor' => '(Chico C&eacute;sar)',
                'letra' => '<p>Ah, Caic&oacute; arcaico<br />
Em meu peito catolaico<br />
Tudo &eacute; descren&ccedil;a e f&eacute;<br />
Ah, Caic&oacute; arcaico<br />
Meu cashcouer mallarmaico<br />
Tudo rejeita e quer</p>

<p>&Eacute; com, &eacute; sem<br />
Um milh&atilde;o, um vint&eacute;m<br />
Todo mundo e ningu&eacute;m<br />
P&eacute; de xique-xique, p&eacute; de flor</p>

<p>Relabucho, vel&oacute;rio<br />
Videogame, orat&oacute;rio<br />
High-cult, simpl&oacute;rio<br />
Amor sem fim, desamor</p>

<p>Sexo no-i&ecirc;<br />
Oxente, oh shit<br />
Cego Aderaldo olhando pra mim<br />
Moon-walk-man</p>
',
'creditos' => 'canta: Elba Ramalho
',
                'faixa_mp3' => '13_a_prosa_impupura_do_caico.mp3', 
                'faixa_ogg' => '13_a_prosa_impupura_do_caico.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'Tesoura Do Desejo',
                'compositor' => '(Alceu Valen&ccedil;a) Cantam: Alceu Valen&ccedil;a e Elba Ramalho',
                'letra' => '<p>Voc&ecirc; atravessando aquela rua vestida de negro<br />
E eu te esperando em frente a um certo Bar Leblon<br />
Voc&ecirc; se aproximando e eu morrendo de medo<br />
Ali, bem mesmo em frente a um certo Bar Leblon</p>

<p>Quando eu atravessava aquela rua morria de medo<br />
De ver o teu sorriso e come&ccedil;ar um velho sonho bom<br />
E o sonho, fatalmente, viraria pesadelo<br />
Ali, bem mesmo em frente a um certo Bar Leblon</p>

<p>- Vamos entrar<br />
- N&atilde;o tenho tempo<br />
- O que &eacute; que houve?<br />
- O que &eacute; que h&aacute;?<br />
- O que &eacute; que houve meu amor<br />
Voc&ecirc; cortou os seus cabelos?<br />
- Foi a tesoura do desejo<br />
Desejo mesmo de mudar<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '14_tesoura_do_desejo.mp3', 
                'faixa_ogg' => '14_tesoura_do_desejo.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'Chorando E Cantando',
                'compositor' => '(Geraldo Azevedo / Fausto Nilo) Canta: Elba Ramalho e Geraldo Azevedo',
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
Depois amor, &ocirc;, &ocirc;, &ocirc;, &ocirc;</p>

<p>Ningu&eacute;m, ningu&eacute;m ver&aacute;<br />
O que eu sonhei<br />
S&oacute; voc&ecirc;, meu amor<br />
Ningu&eacute;m ver&aacute; o sonho<br />
Que eu sonhei</p>

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
Faz desacreditar de tudo<br />
E depois<br />
Depois amor, amor, amor</p>
',
'creditos' => '
',
                'faixa_mp3' => '15_chorando_e_cantando.mp3', 
                'faixa_ogg' => '15_chorando_e_cantando.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'Banho De Cheiro',
                'compositor' => '(Carlos Fernando) Canta: Elba Ramalho',
                'letra' => '<p>Eu quero um banho de cheiro<br />
Eu quero um banho de lua<br />
Eu quero navegar<br />
Eu quero uma menina<br />
Que me ensine noite e dia<br />
O valor do b&ecirc;-a-b&aacute;</p>

<p>O b&ecirc;-a-b&aacute; dos teus olhos<br />
Morena bonita da Boca do Rio<br />
O b&ecirc;-a-b&aacute; das narinas do rei<br />
O b&ecirc;-a-b&aacute; da Bahia<br />
Sangrando alegria, magia, magia<br />
Nos Filhos de Gandhi</p>

<p>O b&ecirc;-a-b&aacute; dos baianos<br />
Que charme bonito, foi o santo que deu<br />
O b&ecirc;-a-b&aacute; do Senhor do Bonfim<br />
O b&ecirc;-a-b&aacute; do sert&atilde;o<br />
Sem chover, sem colher<br />
Sem comer, sem lazer<br />
O b&ecirc;-a-b&aacute; do Brasil<br />
</p>
<p><strong>Frevo Mulher</strong><br />
<em>(Z&eacute; Ramalho)</em><br />
<small>Cantam: Alceu Valen&ccedil;a, Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</small></p>

<p>Quantos aqui ouvem os olhos eram de f&eacute;<br />
Quantos elementos amam aquela mulher<br />
Quantos homens eram inverno, outros ver&atilde;o<br />
Outonos caindo secos no solo da minha m&atilde;o</p>

<p>Gemeram entre cabe&ccedil;as a ponta do espor&atilde;o<br />
A folha do n&atilde;o me toque e o medo da solid&atilde;o<br />
Veneno meu companheiro desatado cantador<br />
E desemboca no primeiro a&ccedil;ude do meu amor</p>

<p>&Eacute; quando o tempo sacode a cabeleira<br />
A tran&ccedil;a toda vermelha<br />
Um olho cego vagueia<br />
Procurando por um<br />
</p>

',
'creditos' => 'canta: Elba Ramalho
',
                'faixa_mp3' => '16_banho_de_cheiro_frevo_mulher.mp3', 
                'faixa_ogg' => '16_banho_de_cheiro_frevo_mulher.ogg',
                'disco_id' => '18',   ));

Musicas::create(
            array(
                'faixa' => 'Baioque',
                'compositor' => '(Chico Buarque)',
                'letra' => '<p>Quando eu canto que se cuide<br />
Quem n&atilde;o for meu irm&atilde;o<br />
O meu canto, punhalada<br />
N&atilde;o conhece o perd&atilde;o</p>

<p>Quando eu rio<br />
Quando eu rio, rio seco<br />
Como &eacute; seco o sert&atilde;o<br />
Meu sorriso &eacute; uma fenda<br />
Escavada no ch&atilde;o</p>

<p>Quando eu choro<br />
Quando choro &eacute; uma enchente<br />
Surpreendendo o ver&atilde;o<br />
&Eacute; o inverno, de repente<br />
Inundando sert&atilde;o</p>

<p>Quando eu amo<br />
Quando amo, eu devoro<br />
Todo o meu cora&ccedil;&atilde;o<br />
Eu odeio, eu adoro<br />
Numa mesma ora&ccedil;&atilde;o<br />
Quando canto</p>

<p>Mammy, n&atilde;o quero seguir definhando sol a sol<br />
Me leva daqui, eu quero partir<br />
Requebrando um rock&rsquo;n&rsquo;roll<br />
N&atilde;o quero saber como se dan&ccedil;a o bai&atilde;o<br />
Eu quero ligar, eu quero um lugar<br />
No sol de Ipanema, cinema e televis&atilde;o<br />
</p>

',
'creditos' => '<p>Arranjo: Z&eacute; Ramalho<br />
Bateria: Renato &ldquo;Massa&rdquo;<br />
Baixo: Jacar&eacute;<br />
Acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Percuss&atilde;o: Paulinho He-Man<br />
Teclados: Luiz Ant&ocirc;nio<br />
Guitarra: Robertinho de Recife<br />
</p>
',
                'faixa_mp3' => '01_baioque.mp3', 
                'faixa_ogg' => '01_baioque.ogg',
                'disco_id' => '19',   ));
Musicas::create(
            array(
                'faixa' => 'Pav&atilde;o Mysteriozo',
                'compositor' => '(Ednardo)',
                'letra' => '<p>Pav&atilde;o mysteriozo<br />
P&aacute;ssaro formoso<br />
Tudo &eacute; mist&eacute;rio<br />
Nesse teu voar<br />
Ai, se eu corresse assim<br />
Tantos c&eacute;us assim<br />
Muita hist&oacute;ria eu tinha pra contar</p>

<p>Pav&atilde;o mysteriozo<br />
Nessa cauda aberta em leque<br />
Me guarda moleque<br />
De eterno brincar<br />
Me poupa do vexame<br />
De morrer t&atilde;o mo&ccedil;o<br />
Muita coisa ainda quero olhar</p>

<p>Pav&atilde;o mysteriozo<br />
P&aacute;ssaro formoso<br />
No escuro dessa noite<br />
Me ajuda a cantar<br />
Derrama essas fa&iacute;scas<br />
Despeja esse trov&atilde;o<br />
Desmancha isso tudo<br />
Que n&atilde;o &eacute; certo n&atilde;o</p>

<p>Pav&atilde;o mysteriozo<br />
P&aacute;ssaro formoso<br />
Um conde raivoso<br />
N&atilde;o tarda a chegar<br />
N&atilde;o temas minha donzela<br />
Nossa sorte nessa guerra<br />
Eles s&atilde;o muitos<br />
Mas n&atilde;o podem voar</p>
',
'creditos' => '<p>Arranjo e acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Renato &ldquo;Massa&rdquo;<br />
Baixo: Jacar&eacute;<br />
Percuss&atilde;o: Paulinho He-Man<br />
Trompete: Chico Oliveira<br />
Sax: David Ganc<br />
Guitarra: Marcos Arcanjo<br />
Teclados: Luiz Ant&ocirc;nio<br />
Viola de 12 cordas: Robertinho de Recife<br />
Vocais: Lucia Perez, Tadeu Mathias, Fabio Mondego e Roberta Little<br />
</p>
',
                'faixa_mp3' => '02_pavao_mysterioso.mp3', 
                'faixa_ogg' => '02_pavao_mysterioso.ogg',
                'disco_id' => '19',   ));

Musicas::create(
            array(
                'faixa' => 'S. O. S.',
                'compositor' => '(Raul Seixas)',
                'letra' => '<p>Hoje &eacute; domingo<br />
Missa e praia, c&eacute;u de anil, tem sangue no jornal<br />
Bandeira na avenidasil<br />
L&aacute; por detr&aacute;s da triste linda zona sul<br />
Vai tudo muito bem<br />
Formigas que trafegam sem por qu&ecirc;<br />
E da janela desses quartos de pens&atilde;o<br />
Eu, como vetor<br />
Tranq&uuml;ilo eu tento uma transmuta&ccedil;&atilde;o</p>

<p>&Ocirc;, &ocirc; seu mo&ccedil;o<br />
Do disco voador<br />
Me leve com voc&ecirc;<br />
Pra onde voc&ecirc; for</p>

<p>&Ocirc;, &ocirc; seu mo&ccedil;o<br />
Mas n&atilde;o me deixe aqui<br />
Enquanto eu sei que tem<br />
Tanta estrela por a&iacute;</p>

<p>Andei rezando para totens e Jesus<br />
Jamais olhei pro c&eacute;u<br />
Meu disco voador, al&eacute;m<br />
J&aacute; fui macaco em domingos glaciais<br />
Atlantas colossais<br />
E eu n&atilde;o soube como utilizar<br />
E nas mensagens que nos chegam sem parar<br />
Ningu&eacute;m pode notar<br />
Est&atilde;o muito ocupados pra pensar<br />
</p>
<p><em>Pai nosso, que estais nos c&eacute;us<br />
Santificado seja o Vosso nome<br />
Venha a n&oacute;s o Vosso reino<br />
Seja feita a Vossa vontade<br />
Assim na terra como no c&eacute;u<br />
O p&atilde;o nosso de cada dia nos dai hoje<br />
Perdoai as nossas ofensas<br />
Assim como n&oacute;s perdoamos a quem nos tem ofendido<br />
N&atilde;o nos deixeis cair em tenta&ccedil;&atilde;o<br />
Mas livrai-nos do mal<br />
Amem.</em><br />
</p>
',
'creditos' => '<p>Arranjo: Z&eacute; Ramalho<br />
Arranjo de detalhes e guitarras: Robertinho de Recife<br />
Bateria: Renato &ldquo;Massa&rdquo;<br />
Baixo: Jacar&eacute;<br />
Percuss&atilde;o: Paulinho He-Man<br />
Violino: Paul de Castro<br />
Teclados: Luiz Ant&ocirc;nio<br />
</p>
',
                'faixa_mp3' => '03_sos.mp3', 
                'faixa_ogg' => '03_sos.ogg',
                'disco_id' => '19',   ));

Musicas::create(
            array(
                'faixa' => 'Paralelas',
                'compositor' => '(Belchior)',
                'letra' => '<p>Dentro do carro<br />
Sobre o trevo<br />
A cem por hora<br />
&Oacute; meu amor<br />
S&oacute; tens agora os carinhos do motor<br />
E no escrit&oacute;rio em que eu trabalho<br />
E fico rico<br />
Quanto mais eu multiplico<br />
Diminui o meu amor</p>

<p>Em cada luz de merc&uacute;rio<br />
Vejo a luz do teu olhar<br />
Passa as pra&ccedil;as, viadutos<br />
Nem te lembras de voltar<br />
De voltar, de voltar</p>

<p>No Corcovado<br />
Quem abre os bra&ccedil;os sou eu<br />
Copacabana<br />
Esta semana o mar sou eu<br />
Como &eacute; perversa a juventude<br />
Do meu cora&ccedil;&atilde;o<br />
E s&oacute; entende o que &eacute; cruel<br />
O que &eacute; paix&atilde;o</p>

<p>E as paralelas<br />
Dos pneus na &aacute;gua das ruas<br />
S&atilde;o duas estradas nuas<br />
Em que foges do que &eacute; teu<br />
No apartamento, oitavo andar<br />
Abro a vidra&ccedil;a e grito quando o carro passa<br />
Teu infinito sou eu<br />
Sou eu, sou eu, sou eu<br />
</p>

',
'creditos' => '<p>Arranjo e viol&atilde;o: Paulinho Moska<br />
Bateria: Renato &ldquo;Massa&rdquo;<br />
Baixo: Jacar&eacute;<br />
Guitarra: Robertinho de Recife<br />
Teclados e arranjo de cordas: Luiz Ant&ocirc;nio<br />
Cordas: Leo Ortiz, Glauco Fernandes, Jesu&iacute;na Passarotto, Eduardo Pereira e Hugo Pilger<br />
</p>

',
                'faixa_mp3' => '04_paralelas.mp3', 
                'faixa_ogg' => '04_paralelas.ogg',
                'disco_id' => '19',   ));

Musicas::create(
            array(
                'faixa' => 'Vila Do Sossego',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>Oh, eu n&atilde;o sei se eram os antigos que diziam<br />
Em seus papiros Papillon j&aacute; me dizia<br />
Que nas torturas toda carne se trai<br />
E normalmente, comumente, fatalmente, felizmente<br />
Displicentemente o nervo se contrai<br />
&Ocirc;, &ocirc;, &ocirc;... com precis&atilde;o</p>

<p>Nos avi&otilde;es que vomitavam p&aacute;ra-quedas<br />
Nas casamatas, casas vivas, caso morras<br />
Nos del&iacute;rios meus grilos temer<br />
O casamento, rompimento, sacramento, documento<br />
Como um passatempo quero mais te ver<br />
&Ocirc;, &ocirc;, &ocirc;... com afli&ccedil;&atilde;o</p>

<p>Meu treponema n&atilde;o &eacute; p&aacute;lido nem viscoso<br />
Os meus gametas se agrupam no meu som<br />
E as querubinas meninas rever<br />
O compromisso, submisso, rebuli&ccedil;o no corti&ccedil;o<br />
Chamo o Padre C&iacute;cero para me benzer<br />
&Ocirc;, &ocirc;, &ocirc;... com devo&ccedil;&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo: Z&eacute; Ramalho<br />
Guitarras: Robertinho de Recife<br />
Bateria: Renato &ldquo;Massa&rdquo;<br />
Baixo: Jacar&eacute;<br />
Percuss&atilde;o: Paulinho He-Man<br />
Teclados: Luiz Ant&ocirc;nio<br />
</p>
',
                'faixa_mp3' => '05_vila_do_sossego.mp3', 
                'faixa_ogg' => '05_vila_do_sossego.ogg',
                'disco_id' => '19',   ));

Musicas::create(
            array(
                'faixa' => 'Vamos Fugir',
                'compositor' => '(Gilberto Gil / Liminha)',
                'letra' => '<p>Vamos fugir<br />
Desse lugar, baby<br />
Vamos fugir<br />
T&ocirc; cansada de esperar<br />
Que voc&ecirc; me carregue</p>

<p>Vamos fugir<br />
Pra outro lugar, baby<br />
Vamos fugir<br />
Pra onde quer que voc&ecirc; v&aacute;<br />
Que voc&ecirc; me carregue</p>

<p>Mas diga que ir&aacute;<br />
Iraj&aacute;, Iraj&aacute;<br />
Pra onde o sol beijar voc&ecirc;<br />
Voc&ecirc; beijar o sol<br />
Maraj&oacute;, Maraj&oacute;<br />
Qualquer outro lugar comum<br />
Outro lugar qualquer<br />
Guapor&eacute;, Guapor&eacute;<br />
Qualquer outro lugar ao sol<br />
Outro lugar ao sul<br />
C&eacute;u azul, c&eacute;u azul<br />
Onde haja sol<br />
Meu corpo nu junto ao seu corpo nu</p>

<p>Vamos fugir<br />
Pra outro lugar, baby<br />
Vamos fugir<br />
Pra onde haja um tobog&atilde;<br />
Onde a gente escorregue<br />
Todo dia de manh&atilde;<br />
Flores que a gente regue<br />
Uma banda de ma&ccedil;&atilde;<br />
Outra banda de reggae<br />
T&ocirc; cansada de esperar<br />
Que voc&ecirc; me carregue<br />
</p>

',
'creditos' => '<p>Arranjo: Banda Elba Ramalho<br />
Bateria: Renato &ldquo;Massa&rdquo;<br />
Baixo: Jacar&eacute;<br />
Percuss&atilde;o: Paulinho He-Man<br />
Trompete: Chico Oliveira<br />
Sax: David Ganc<br />
Guitarra: Marcos Arcanjo<br />
Teclados: Luiz Ant&ocirc;nio<br />
Vocais: Lucia Perez, Tadeu Mathias, Fabio Mondego e Roberta Little<br />
</p>
',
                'faixa_mp3' => '06_vamos_fugir.mp3', 
                'faixa_ogg' => '06_vamos_fugir.ogg',
                'disco_id' => '19',   ));

Musicas::create(
            array(
                'faixa' => 'Zanzibar',
                'compositor' => '(Armandinho / Fausto Nilo)',
                'letra' => '<p>No azul de Jezebel<br />
No c&eacute;u de Calcut&aacute;<br />
Feliz constela&ccedil;&atilde;o<br />
Reluz no corpo dela<br />
Ai tricolor colar</p>

<p>&Aacute;s de maracatu<br />
No azul de Zanzibar<br />
Ali meu cora&ccedil;&atilde;o<br />
Zumbiu no gozo dela<br />
Ai, mina aperta a minha m&atilde;o<br />
Al&aacute; meu only you<br />
No azul da estrela<br />
Ai, mina aperta a minha m&atilde;o<br />
Al&aacute; meu only you<br />
No azul da estrela</p>

<p>Ali&aacute;s<br />
Bazar da coisa azul<br />
Meu only you<br />
&Eacute; muito mais<br />
Que o azul de Zanzibar<br />
Paracuru<br />
O azul da estrela<br />
O azul da estrela<br />
</p>
',
'creditos' => '<p>Arranjo: Armandinho e Robertinho de Recife<br />
Guitarra: Luiz Brasil<br />
Percuss&atilde;o: Mingo Ara&uacute;jo<br />
Bandolim: Armandinho<br />
Baixo: Dadi<br />
</p>
',
                'faixa_mp3' => '07_zanzibar.mp3', 
                'faixa_ogg' => '07_zanzibar.ogg',
                'disco_id' => '19',   ));

Musicas::create(
            array(
                'faixa' => 'Os Argonautas',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>O barco, meu cora&ccedil;&atilde;o n&atilde;o ag&uuml;enta<br />
Tanta tormenta, alegria<br />
Meu cora&ccedil;&atilde;o n&atilde;o contenta<br />
O dia, o marco, meu cora&ccedil;&atilde;o<br />
O porto, n&atilde;o</p>

<p>Navegar &eacute; preciso<br />
Viver n&atilde;o &eacute; preciso<br />
Navegar &eacute; preciso<br />
Viver n&atilde;o &eacute; preciso</p>

<p>O barco, noite no c&eacute;u t&atilde;o bonito<br />
Sorriso solto, perdido<br />
Horizonte, madrugada<br />
O riso, o arco da madrugada<br />
O porto, nada</p>

<p>O barco, o autom&oacute;vel brilhante<br />
O trilho solto, o barulho<br />
Do meu dente em tua veia<br />
O sangue, o charco, barulho lento<br />
O porto, sil&ecirc;ncio<br />
</p>
',
'creditos' => '<p>Arranjo: Armandinho, Luiz Brasil, Robertinho de Recife, Elba Ramalho e Pepeu Gomes<br />
Guitarra portuguesa: Robertinho de Recife<br />
Bandolim: Armandinho<br />
Viola: Pepeu Gomes<br />
Vil&atilde;o: Luiz Brasil<br />
</p>

',
                'faixa_mp3' => '08_os_argonautas.mp3', 
                'faixa_ogg' => '08_os_argonautas.ogg',
                'disco_id' => '19',   ));

Musicas::create(
            array(
                'faixa' => 'Relampiano',
                'compositor' => '(Lenine / Moska)',
                'letra' => '<p>T&aacute; relampiano, cad&ecirc; nen&eacute;m?<br />
T&aacute; vendendo drops no sinal pra algu&eacute;m<br />
T&aacute; relampiano, cad&ecirc; nen&eacute;m?<br />
T&aacute; vendendo drops no sinal pra algu&eacute;m<br />
T&aacute; vendendo drops no sinal, ningu&eacute;m</p>

<p>Todo dia &eacute; dia, toda hora &eacute; hora<br />
Nen&eacute;m n&atilde;o demora pra se levantar<br />
M&atilde;e lavando roupa, pai j&aacute; foi embora<br />
O ca&ccedil;ula chora, mas h&aacute; de se acostumar<br />
Com vida l&aacute; de fora do barraco<br />
Hay que endurecer um cora&ccedil;&atilde;o t&atilde;o fraco<br />
Para vencer o medo do trov&atilde;o<br />
Sua vida aponta a contram&atilde;o</p>

<p>Tudo &eacute; t&atilde;o normal, todo tal e qual<br />
Nen&eacute;m n&atilde;o tem hora para ir se deitar<br />
M&atilde;e passando roupa do pai de agora<br />
De um outro ca&ccedil;ula que inda vai chegar<br />
&Eacute; mais uma boca dentro do barraco<br />
Mais um quilo de farinha do mesmo saco<br />
Para alimentar um novo Jo&atilde;o Ningu&eacute;m<br />
A cidade cresce junto com nen&eacute;m<br />
</p>
',
'creditos' => '<p>Arranjo e viol&atilde;o: Lenine<br />
Bateria: Renato &ldquo;Massa&rdquo;<br />
Baixo: Jacar&eacute;<br />
Acordeom: Dominguinhos<br />
Percuss&atilde;o: Paulinho He-Man<br />
Teclados: Luiz Ant&ocirc;nio<br />
</p>
',
                'faixa_mp3' => '09_relampiano.mp3', 
                'faixa_ogg' => '09_relampiano.ogg',
                'disco_id' => '19',   ));

Musicas::create(
            array(
                'faixa' => ' Quando Chega O Ver&atilde;o',
                'compositor' => '(Dominguinhos / Abel Silva)',
                'letra' => '<p>Quando chega o ver&atilde;o<br />
&Eacute; um desassossego por dentro do cora&ccedil;&atilde;o<br />
Quem ama, sofre<br />
Quem n&atilde;o ama, sofre mais<br />
Sofre a menina, sofre o rapaz<br />
Sofre a menina, sofre o rapaz<br />
Sofre a menina, sofre o rapaz<br />
Sofre a menina, sofre o rapaz</p>

<p>Can&aacute;rio que muda a pena, d&oacute;i<br />
Amor que muda de penas, d&oacute;i<br />
Can&aacute;rio que muda a pena, d&oacute;i<br />
Amor que muda de penas, d&oacute;i</p>

<p>E tome xote Mariquinha<br />
E tome xote S&aacute; Menina<br />
E tome xote<br />
E tome mais<br />
E tome xote Mariquinha<br />
E tome xote S&aacute; Menina<br />
E tome xote<br />
E tome mais<br />
</p>
<p><strong>At&eacute; mais V&ecirc;</strong><br />
<em>(Pedrinho / Primo)</em><br />
</p>
<p><p>Se eu morasse aqui pertinho, nega<br /><br />
Todo dia eu vinha te ver<br /><br />
Te trazia um par de cheiro, nega<br /><br />
Pra derramar em voc&amp;ecirc;</p></p>

<p><p>Veste teu vestido, nega<br /><br />
Vamos antes de chover<br /><br />
Bota o teu vestido logo, nega<br /><br />
Se tirar me d&amp;aacute; prazer</p></p>

<p><p>Quando chego no riacho<br /><br />
Vou metendo a m&amp;atilde;o por baixo<br /><br />
E arrancando um girassol<br /><br />
E cantando um belo xote<br /><br />
Dando beijo no cangote<br /><br />
Por debaixo do len&amp;ccedil;ol</p></p>

<p><p>L&amp;aacute; se foi a lua cheia<br /><br />
J&amp;aacute; &amp;eacute; meia noite meia<br /><br />
At&amp;eacute; logo at&amp;eacute; mais ver<br /><br />
Se eu morasse aqui pertinho, nega<br /><br />
Todo dia eu vinha te ver<br /><br />
Se eu morasse aqui pertinho, nega<br /><br />
Todo dia eu vinha te ver<br /><br />
</p></p>
<p><strong>Pequenininha</strong><br />
<em>(Assis&atilde;o)</em></p>

<p>Quando a gente tem amor<br />
N&atilde;o sabe onde ele est&aacute;<br />
&Eacute; uma saudade imensa<br />
A gente se ag&uuml;enta<br />
E n&atilde;o quer chorar</p>

<p>Tem d&oacute; pequenininha<br />
Tem d&oacute; pequenininha<br />
Tem d&oacute;<br />
Eu n&atilde;o quero chorar</p>

<p>Mas quando a gente se v&ecirc;<br />
&Eacute; uma alegria sem fim<br />
A gente pega a saudade<br />
E manda ao longe assim<br />
</p>

',
'creditos' => '<p>Arranjo: Luiz Ant&ocirc;nio e Dominguinhos<br />
Bateria: Renato &ldquo;Massa&rdquo;<br />
Baixo: Jacar&eacute;<br />
Acordeom: Dominguinhos<br />
Percuss&atilde;o: Paulinho He-Man<br />
Guitarra: Marcos Arcanjo<br />
Teclados: Luiz Ant&ocirc;nio<br />
Vocais: Lucia Perez, Tadeu Mathias, Fabio Mondego e Roberta Little<br />
</p>
',
                'faixa_mp3' => '10_xotes_quando_chega.mp3', 
                'faixa_ogg' => '10_xotes_quando_chega.ogg',
                'disco_id' => '19',   ));


 
 Musicas::create(
            array(
                'faixa' => 'A M&uacute;sica Do Nosso Amor',
                'compositor' => '(Saul Barbosa / Jorge Portugal)',
                'letra' => '<p>Luar de lua serena<br />
C&eacute;u de fogo iluminado<br />
Estrela de tanto brilho<br />
Fogueira assando milho<br />
Milho parecendo fogo</p>

<p>A cidade era pequena<br />
Mas no cora&ccedil;&atilde;o cabia<br />
O tamanho da alegria<br />
Que a gente traduzia<br />
Como a m&uacute;sica do nosso amor</p>

<p>Luar de lua serena<br />
Arrai&aacute; iluminado<br />
O forr&oacute; comendo quente<br />
Marin&ecirc;s e sua gente<br />
Luiz Gonzaga a cantar</p>

<p>No cora&ccedil;&atilde;o da pequena<br />
O primeiro amor batia<br />
A primeira brasa ardia<br />
Da fogueira poesia<br />
Era s&oacute; o S&atilde;o Jo&atilde;o chegar</p>

<p>Pula fogueira i&aacute;<br />
Que eu pulo sim senhor<br />
Pula fogueira i&aacute;<br />
Que S&atilde;o Jo&atilde;o mandou<br />
&Eacute; brincadeira<br />
Bal&atilde;o, beijo de biju, bal&atilde;o<br />
Ainda acendo<br />
Uma fogueira no meu cora&ccedil;&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Luiz Ant&ocirc;nio<br />
Bateria: Renato &ldquo;Massa&rdquo;<br />
Baixo: Jacar&eacute;<br />
Acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Percuss&atilde;o: Paulinho He-Man<br />
Guitarras: Marcos Arcanjo e Robertinho de Recife<br />
Vocais: Lucia Perez, Tadeu Mathias, Fabio Mondego e Roberta Little<br />
</p>

',
                'faixa_mp3' => '11_a_musica_do_nosso_amor.mp3', 
                'faixa_ogg' => '11_a_musica_do_nosso_amor.ogg',
                'disco_id' => '19',   ));

Musicas::create(
            array(
                'faixa' => 'Ciranda Da Rosa Vermelha',
                'compositor' => '(folclore / adapta&ccedil;&atilde;o: Alceu Valen&ccedil;a)',
                'letra' => '<p>Teu beijo doce tem sabor do mel da cana<br />
Sou tua ama, tua escrava, teu amor<br />
Sou tua cama, teu engenho, teu moinho<br />
Tu &eacute;s feito um passarinho<br />
Que se chama beija-flor<br />
Sou tua cama, teu engenho, teu moinho<br />
Tu &eacute;s feito um passarinho<br />
Que se chama beija-flor</p>

<p>Sou rosa vermelha<br />
Ai meu bem querer<br />
Beija-flor sou tua rosa<br />
Hei de amar-te at&eacute; morrer</p>

<p>Quando tu voas pra beijar as outras flores<br />
Eu sinto dores, um ci&uacute;me, um calor<br />
Que toma o peito, o meu corpo<br />
E invade a alma<br />
S&oacute; meu beija-flor acalma<br />
Tua escrava, meu senhor<br />
Que toma o peito, o meu corpo<br />
E invade a alma<br />
S&oacute; meu beija-flor acalma<br />
Tua escrava, meu senhor<br />
</p>

',
'creditos' => '<p>Arranjo: Julinho Teixeira<br />
Bateria: Robert Lyy<br />
Percuss&atilde;o: Renato Ladeira e Paulinho He-Man<br />
Viol&atilde;o e guitarra portuguesa: Robertinho de Recife<br />
Vocais: Jurema C&acirc;ndia, Clarice, Marisa Fossa e Sara Nicoleh<br />
</p>
',
                'faixa_mp3' => '12_ciranda_da_rosa_vermelha.mp3', 
                'faixa_ogg' => '12_ciranda_da_rosa_vermelha.ogg',
                'disco_id' => '19',   ));

Musicas::create(
            array(
                'faixa' => 'Tambor Do Mundo',
                'compositor' => '(Geraldo Azevedo / Fausto Nilo)',
                'letra' => '<p>Bombo de zabumba<br />
Cora&ccedil;&atilde;o do forr&oacute;<br />
Bateu no tambor do mundo<br />
Eu dan&ccedil;o a noite inteira<br />
Na ilha de Cuba<br />
Ou no sert&atilde;o de Ic&oacute;<br />
Tem coco quebrando tudo<br />
Que levanta poeira<br />
&Eacute; a nossa alegria<br />
Senhoras e senhores</p>

<p>No mar da China<br />
No azul da cordilheira<br />
Ou em Madagascar<br />
Toda a mo&ccedil;ada vai querer<br />
L&aacute; em Campina<br />
Ou no baile de Madureira<br />
Se a sanfona tocar<br />
A madrugada vai tremer<br />
Vai todo mundo brincar</p>

<p>Eu quero ver tu remexer<br />
No resfolego da sanfona at&eacute; o sol raiar<br />
Eu quero ver tu remexer<br />
No resfolego da sanfona at&eacute; o sol raiar</p>

<p>Hoje eu sou rumbeira<br />
Amanh&atilde; que ser&aacute;?<br />
&Ocirc; mana, vamos pra vida<br />
Que chorar n&atilde;o serve<br />
L&aacute; no fim do mundo<br />
Onde o tambor batucar<br />
&Eacute; a nossa alegria<br />
Senhoras e senhores</p>

<p>J&aacute; fui Diana<br />
Fui pastora e feiticeira<br />
Fui sereia do mar<br />
Apaixonada por viver<br />
Na caravana<br />
Fui cigana, fui princesa<br />
Mas quando eu te encontrar<br />
A madrugada vai tremer<br />
Vai todo mundo brincar</p>
',
'creditos' => '<p>Arranjo e acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Bateria: Renato &ldquo;Massa&rdquo;<br />
Baixo: Jacar&eacute;<br />
Percuss&atilde;o: Paulinho He-Man<br />
Trombone: Aldivas Ayres<br />
Trompete: Chico Oliveira<br />
Sax: David Ganc<br />
Teclados: Luiz Ant&ocirc;nio<br />
</p>
',
                'faixa_mp3' => '13_tambor_do_mundo.mp3', 
                'faixa_ogg' => '13_tambor_do_mundo.ogg',
                'disco_id' => '19',   ));

Musicas::create(
            array(
                'faixa' => 'Eu Tamb&eacute;m Quero Beijar',
                'compositor' => '(Moraes Moreira / Pepeu Gomes / Fausto Nilo)',
                'letra' => '<p>A flor do desejo e do maracuj&aacute;<br />
Eu tamb&eacute;m quero beijar<br />
Haja fogo, haja guerra, haja a guerra que h&aacute;<br />
Eu tamb&eacute;m quero beijar<br />
Do Farol da Barra ao Jardim de Al&aacute;<br />
Eu tamb&eacute;m quero beijar<br />
Da pele morena daquela acol&aacute;<br />
Eu tamb&eacute;m quero beijar</p>

<p>Beijo a flor<br />
Mas a flor que eu desejo eu n&atilde;o posso beijar<br />
Ai amor<br />
Haja fogo, haja guerra, haja a guerra que h&aacute;<br />
Teu cheiro<br />
&Eacute; o marinheiro do barco fantasma que vai me levar<br />
Mundo inteiro<br />
Haja fogo, haja guerra, haja a guerra que h&aacute;<br />
Festejo</p>


<p><strong>Ch&atilde;o da pra&ccedil;a</strong><br />
<em>(Moraes Moreira / Fausto Nilo)</em></p>

<p>Meu amor<br />
Quem ficou nessa dan&ccedil;a, meu amor<br />
Tem f&eacute; na dan&ccedil;a<br />
Nossa dor, meu amor<br />
&Eacute; que balan&ccedil;a a nossa dor<br />
O ch&atilde;o da pra&ccedil;a</p>

<p>V&ecirc; que j&aacute; detonou o som na pra&ccedil;a<br />
Porque j&aacute; todo o pranto rolou<br />
Olhos negros, cru&eacute;is, tentadores<br />
Das multid&otilde;es sem cantor<br />
Olhos negros, cru&eacute;is, tentadores<br />
Das multid&otilde;es sem cantor</p>

<p>Eu era menino, menino<br />
Um bedu&iacute;no com ouvido de mercador<br />
L&aacute; no oriente tem gente<br />
Com olhar de lan&ccedil;a na dan&ccedil;a do meu amor<br />
Tem que dan&ccedil;ar a dan&ccedil;a<br />
Que a nossa dor<br />
Balan&ccedil;a o ch&atilde;o da pra&ccedil;a<br />
Ouou&ocirc;</p>

<p><strong>Gemedeira</strong><br />
<em>(Robertinho de Recife / Capinan)</em></p>

<p>Tava eu mirando a lua<br />
Veio a mo&ccedil;a me olhar<br />
Perguntei se era nova<br />
N&atilde;o custou me apaixonar</p>

<p>No cavalo de S&atilde;o Jorge<br />
J&aacute; mulher a galopar<br />
Sete l&eacute;guas de paix&atilde;o<br />
Sem parar de suspirar</p>

<p>Tava tocando a viola<br />
Num galope &agrave; beira mar<br />
Ai, ai, ai, &eacute; bom que d&oacute;i<br />
Ui, ui, ui, chega a sangrar</p>

<p>Gemedeira &eacute; que nem beijo<br />
Come&ccedil;ou, custa a parar<br />
Ela olhou, pediu um xote<br />
Pra gemer bastou te amar</p>

<p>Tava sentado na pedra<br />
Veio o dono reclamar<br />
Perguntou pra ver quem era<br />
N&atilde;o custou me apresentar</p>

<p>Com cem tiros de pistola<br />
Sete furos de punhal<br />
Sou violeiro, patr&atilde;o<br />
Ele n&atilde;o p&ocirc;de escutar<br />
</p>
',
'creditos' => '<p>Arranjo e guitarras: Robertinho de Recife<br />
Bateria: Renato &ldquo;Massa&rdquo;<br />
Baixo: Jacar&eacute;<br />
Percuss&atilde;o: Paulinho He-Man<br />
Teclados: Luiz Ant&ocirc;nio<br />
Guitarras em &ldquo;Eu tamb&eacute;m quero beijar&rdquo;: Pepeu Gomes<br />
Vocais: Lucia Perez, Tadeu Mathias, Fabio Mondego e Roberta Little<br />
</p>
',
                'faixa_mp3' => '13_tambor_do_mundo.mp3', 
                'faixa_ogg' => '13_tambor_do_mundo.ogg',
                'disco_id' => '19',   ));

Musicas::create(
            array(
                'faixa' => 'Disparada',
                'compositor' => '(Geraldo Vandr&eacute; / Theo de Barros) Cantam: Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho',
                'letra' => '<p>Prepare o seu cora&ccedil;&atilde;o<br />
Pras coisas que eu vou contar<br />
Eu venho l&aacute; do sert&atilde;o<br />
Eu venho l&aacute; do sert&atilde;o<br />
Eu venho l&aacute; do sert&atilde;o<br />
E posso n&atilde;o lhe agradar</p>

<p>Aprendi a dizer n&atilde;o<br />
Ver a morte sem chorar<br />
E a morte, o destino, tudo<br />
A morte, o destino, tudo<br />
Estava fora de lugar<br />
Eu vivo pra consertar</p>

<p>Na boiada j&aacute; fui boi<br />
Mas um dia me montei<br />
N&atilde;o por um motivo meu<br />
Ou de quem comigo houvesse<br />
Que qualquer querer tivesse<br />
Por&eacute;m por necessidade<br />
Do dono de uma boiada<br />
Cujo vaqueiro morreu</p>

<p>Boiadeiro muito tempo<br />
La&ccedil;o firme, bra&ccedil;o forte<br />
Muito gado, muita gente<br />
Pela vida segurei<br />
Seguia como num sonho<br />
E boiadeiro era um rei</p>

<p>Mas o mundo foi rodando<br />
Nas patas do meu cavalo<br />
E nos sonhos que fui sonhando<br />
As vis&otilde;es se clareando<br />
As vis&otilde;es se clareando<br />
At&eacute; que um dia acordei</p>

<p>Ent&atilde;o n&atilde;o pude seguir<br />
Valente lugar-tenente<br />
De dono de gado e gente<br />
Porque gado a gente marca<br />
Tange e ferra, engorda e mata<br />
Mas com gente &eacute; diferente</p>

<p>Se voc&ecirc; n&atilde;o concordar<br />
N&atilde;o posso me desculpar<br />
N&atilde;o canto pra enganar<br />
Vou pegar minha viola<br />
Vou deixar voc&ecirc; de lado<br />
Vou cantar noutro lugar</p>

<p>Na boiada j&aacute; fui boi<br />
Boiadeiro j&aacute; fui rei<br />
N&atilde;o por um motivo meu<br />
Ou de quem comigo houvesse<br />
E qualquer querer tivesse<br />
Por qualquer coisa de seu<br />
Por qualquer coisa de seu<br />
Querer mais longe que eu<br />
</p>
',
'creditos' => '<p>Arranjo de base: Z&eacute; Ramalho e Geraldo Azevedo<br />
Arranjo de cordas e sopros: Robertinho de Recife<br />
Viol&atilde;o: Z&eacute; Ramalho<br />
Viola: Geraldo Azevedo<br />
Acordeom: Dominguinhos<br />
Baixo: Jamil Joanes<br />
Flautas e sax soprano: C&eacute;sar Michiles<br />
Teclados: Luiz Ant&ocirc;nio<br />
Percuss&atilde;o: Z&eacute; Gomes, Lucas e Firmino<br />
</p>

',
                'faixa_mp3' => '01_disparada.mp3', 
                'faixa_ogg' => '01_disparada.ogg',
                'disco_id' => '20',   ));


Musicas::create(
            array(
                'faixa' => 'O Princ&iacute;pio Do Prazer',
                'compositor' => 'Cantam: Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho',
                'letra' => '<p>Juntos vamos esquecer<br />
Tudo que doeu em n&oacute;s<br />
Nada vale tanto pra rever<br />
Tempo que ficamos s&oacute;s<br />
Faz a tua luz brilhar<br />
Pra iluminar a nossa paz<br />
O meu cora&ccedil;&atilde;o me diz<br />
Fundamental &eacute; ser feliz<br />
Meu cora&ccedil;&atilde;o me diz<br />
Fundamental &eacute; ser feliz</p>

<p>Juntos vamos acordar o amor<br />
Car&iacute;cias, can&ccedil;&otilde;es<br />
Deixa entrar o sol da manh&atilde;<br />
A cor do som<br />
Eu com voc&ecirc; sou muito mais<br />
O princ&iacute;pio do prazer<br />
Sonho que o tempo n&atilde;o desfaz<br />
O meu cora&ccedil;&atilde;o me diz<br />
Fundamental &eacute; ser feliz<br />
Meu cora&ccedil;&atilde;o me diz<br />
Fundamental &eacute; ser feliz<br />
</p>
',
'creditos' => '<p>cantam: Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho<br />
Arranjo: Z&eacute; Ramalho, Geraldo Azevedo e Robertinho de Recife<br />
Viol&atilde;o: Geraldo Azevedo<br />
Viola: Z&eacute; Ramalho<br />
Baixo: Jamil Joanes<br />
Guitarra: Robertinho de Recife<br />
Teclados: Luiz Ant&ocirc;nio<br />
Percuss&atilde;o: Z&eacute; Gomes, Lucas e Firmino<br />
Bateria: Renato Massa</p>


',
                'faixa_mp3' => '02_o_principio_do_prazer.mp3', 
                'faixa_ogg' => '02_o_principio_do_prazer.ogg',
                'disco_id' => '20',   ));

Musicas::create(
            array(
                'faixa' => 'Banquete De Signos',
                'compositor' => '(Z&eacute; Ramalho) Cantam: Elba Ramalho e Z&eacute; Ramalho',
                'letra' => '<p>Discutir o canga&ccedil;o com liberdade<br />
&Eacute; saber da viola, da viol&ecirc;ncia<br />
Descobrir nos cabelos inoc&ecirc;ncia<br />
&Eacute; saber da fatal fertilidade</p>

<p>Descobrir a cidade na natureza<br />
Descobrir a beleza dessa mulher<br />
Descobrir o que der boniteza<br />
Na peleja do homem vier, quando vier</p>

<p>Descobrir o baga&ccedil;o dos engenhos<br />
No mela&ccedil;o da cana mais um beijo<br />
Descobrir os desejos que n&atilde;o tem cura<br />
Saracura do brejo da novena</p>

<p>Descobrir a serena da natureza<br />
Descobrir a beleza dessa mulher<br />
Descobrir o que der boniteza<br />
Na peleja do homem vier, quando vier<br />
</p>
',
'creditos' => '<p>Arranjo: Z&eacute; Ramalho e Robertinho de Recife<br />
Viol&atilde;o: Z&eacute; Ramalho<br />
Baixo: Jamil Joanes<br />
Sitar: Robertinho de Recife<br />
Teclados: Luiz Ant&ocirc;nio<br />
Percuss&atilde;o: Firmino e Paulinho He-Man<br />
</p>
',
                'faixa_mp3' => '03_banquete_de_signos.mp3', 
                'faixa_ogg' => '03_banquete_de_signos.ogg',
                'disco_id' => '20',   ));

Musicas::create(
            array(
                'faixa' => 'Miragens',
                'compositor' => '(Geraldo Azevedo / Z&eacute; Ramalho) Cantam: Geraldo Azevedo e Z&eacute; Ramalho',
                'letra' => '<p>Bem querer vem querer-me<br />
As ondas, as miragens<br />
O fogo que n&atilde;o incendeia</p>

<p>A imagem mais bonita<br />
A entrega da emo&ccedil;&atilde;o<br />
Os amores pulsando de novo</p>

<p>A incr&iacute;vel maravilha<br />
Da estrela do ver&atilde;o<br />
Suspendendo a ponte do manto da noite</p>

<p>Espiral do sil&ecirc;ncio<br />
Cristalina a vis&atilde;o<br />
Clareando a fonte do sonho do povo</p>

<p>Em vez de emudecer poderia cantar<br />
A mais linda can&ccedil;&atilde;o sem lamento<br />
E quem n&atilde;o escutar perderia talvez<br />
A maior metade do tempo do sonho<br />
</p>

',
'creditos' => '<p>Arranjo: Z&eacute; Ramalho e Geraldo Azevedo<br />
Viol&atilde;o: Geraldo Azevedo<br />
Viola: Z&eacute; Ramalho<br />
Guitarra solo: Robertinho de Recife<br />
Baixo: Jamil Joanes<br />
Bateria: Renato Massa<br />
&Oacute;rg&atilde;o: Luiz Ant&ocirc;nio<br />
Percuss&atilde;o: Z&eacute; Gomes, Lucas e Firmino<br />
</p>

',
                'faixa_mp3' => '04_miragens.mp3', 
                'faixa_ogg' => '04_miragens.ogg',
                'disco_id' => '20',   ));
Musicas::create(
            array(
                'faixa' => 'Pedras E Moças',
                'compositor' => '(Z&eacute; Ramalho e Geraldo Azevedo) Cantam: Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho',
                'letra' => '<p>Acho que a primeira pedra<br />
Quem atirou n&atilde;o tem perd&atilde;o<br />
A segunda pedra<br />
Quem a jogou n&atilde;o sei</p>

<p>Sei que n&atilde;o sou eu quem ferir&aacute;<br />
Pela &uacute;ltima vez<br />
As milhares mo&ccedil;as<br />
Tantas Madalenas<br />
Tenras, t&atilde;o pequenas<br />
Loucas</p>

<p>De tanto amor<br />
Como &eacute; que v&atilde;o<br />
Como &eacute; que v&ecirc;m<br />
Tanto querer sem um bem</p>

<p>S&oacute; segura nessa pausa<br />
Quem tem um sol que &eacute; maior<br />
De quem tenha d&oacute;<br />
Sem ser menor demais<br />
Sabe e saber&aacute; de si<br />
Talvez quem penetrou<br />
Nas milhares mo&ccedil;as<br />
Tantas madalenas<br />
Tenras t&atilde;o pequenas<br />
Loucas</p>

<p>De tanto amor<br />
Como &eacute; que v&atilde;o<br />
Como &eacute; que v&ecirc;m<br />
Tanto querer sem um bem</p>

<p>De tanto amor<br />
Como saber<br />
Quando gozar<br />
Sem conhecer seu sabor</p>

<p>Ir&aacute; dizer<br />
Ir&aacute; dan&ccedil;ar<br />
Se sonhos que v&ecirc;m<br />
Antes dos anjos dos homens<br />
E dos dem&ocirc;nios<br />
Luciferianas, pobres Gabri&eacute;is<br />
Como s&atilde;o cru&eacute;is os deuses meus<br />
Ou ent&atilde;o ser&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo: Z&eacute; Ramalho e Geraldo Azevedo<br />
Viol&atilde;o: Geraldo Azevedo<br />
Viola: Z&eacute; Ramalho<br />
Baixo: Jamil Joanes<br />
Sax soprano: L&eacute;o Gandelman<br />
Vibrafone e &oacute;rg&atilde;o: Luiz Ant&ocirc;nio<br />
Percuss&atilde;o: Z&eacute; Gomes, Lucas e Firmino<br />
Bateria: Renato Massa<br />
</p>
',
                'faixa_mp3' => '05_pedras_e_mocas.mp3', 
                'faixa_ogg' => '05_pedras_e_mocas.ogg',
                'disco_id' => '20',   ));

Musicas::create(
            array(
                'faixa' => 'Canta Cora&ccedil;&atilde;o',
                'compositor' => '(Geraldo Azevedo / Carlos Fernando) Cantam: Elba Ramalho e Geraldo Azevedo',
                'letra' => '<p>Canta, canta, passarinho<br />
Canta, canta, miudinho<br />
Na palma da minha m&atilde;o</p>

<p>Quero ver voc&ecirc; voando<br />
Quero ouvir voc&ecirc; cantando<br />
Quero paz no cora&ccedil;&atilde;o</p>

<p>Eu quero ver voc&ecirc; voando<br />
Quero ouvir voc&ecirc; cantando<br />
Na palma da minha m&atilde;o</p>

<p>Na palma da minha m&atilde;o<br />
Tem os dedos, tem as linhas<br />
Que olhar cigano caminha<br />
Procurando alcan&ccedil;ar<br />
A nau perdida, o trem que chega<br />
A nova dan&ccedil;a, mata verde esperan&ccedil;a<br />
Em suas tran&ccedil;as vou voar<br />
Passarinho, vou voar</p>

<p>Meu alegre cora&ccedil;&atilde;o<br />
&Eacute; triste como um camelo<br />
&Eacute; fr&aacute;gil que nem brinquedo<br />
&Eacute; forte como um le&atilde;o<br />
&Eacute; todo zelo, &eacute; todo amor, &eacute; desmantelo<br />
&Eacute; querubim, &eacute; c&atilde;o de fogo<br />
&Eacute; Jesus Cristo, &eacute; Lampi&atilde;o<br />
Passarinho, eu vou voar<br />
</p>


',
'creditos' => '<p>Arranjo: Geraldo Azevedo e Z&eacute; Ramalho<br />
Viol&atilde;o: Geraldo Azevedo<br />
Viola: Z&eacute; Ramalho<br />
Baixo: Jamil Joanes<br />
Acordeom: Dominguinhos<br />
Flautas: C&eacute;sar Michiles<br />
Percuss&atilde;o: Firmino e Paulinho He-Man<br />
</p>
',
                'faixa_mp3' => '06_canta_coracao.mp3', 
                'faixa_ogg' => '06_canta_coracao.ogg',
                'disco_id' => '20',   ));

Musicas::create(
            array(
                'faixa' => 'Eternas Ondas',
                'compositor' => '(Z&eacute; Ramalho) Cantam: Elba Ramalho e Z&eacute; Ramalho',
                'letra' => '<p>Quanto tempo temos antes de voltarem<br />
Aquelas ondas<br />
Que vieram como gotas em sil&ecirc;ncio<br />
T&atilde;o furioso<br />
Derrubando homens entre outros animais<br />
Devastando a sede desses matagais<br />
Derrubando homens entre outros animais<br />
Devastando a sede desses matagais</p>

<p>Devorando &aacute;rvores, pensamentos<br />
Seguindo a linha<br />
Do que foi escrito pelo mesmo l&aacute;bio<br />
T&atilde;o furioso<br />
E se teu amigo vento n&atilde;o te procurar<br />
&Eacute; por que multid&otilde;es ele foi arrastar<br />
E se teu amigo vento n&atilde;o te procurar<br />
&Eacute; por que multid&otilde;es ele foi arrastar<br />
</p>
',
'creditos' => '<p>Arranjo: Z&eacute; Ramalho e Robertinho de Recife<br />
Viola: Z&eacute; Ramalho<br />
Baixo: Jamil Joanes<br />
Violas, guitarras e efeitos: Robertinho de Recife<br />
Solo hoog: Luiz Ant&ocirc;nio<br />
Percuss&atilde;o: Firmino e Paulinho He-Man<br />
</p>
',
                'faixa_mp3' => '07_eternas_ondas.mp3', 
                'faixa_ogg' => '07_eternas_ondas.ogg',
                'disco_id' => '20',   ));

Musicas::create(
            array(
                'faixa' => 'Bicho De 7 Cabeças II',
                'compositor' => '(Z&eacute; Ramalho / Geraldo Azevedo / Renato Rocha)',
                'letra' => '<p>N&atilde;o d&aacute; p&eacute;<br />
N&atilde;o tem p&eacute; nem cabe&ccedil;a<br />
N&atilde;o tem ningu&eacute;m que mere&ccedil;a<br />
N&atilde;o tem cora&ccedil;&atilde;o que esque&ccedil;a<br />
N&atilde;o tem jeito mesmo<br />
N&atilde;o tem d&oacute; no peito<br />
N&atilde;o tem nem talvez<br />
Ter feito o que voc&ecirc; me fez<br />
Desapare&ccedil;a<br />
Cres&ccedil;a e desapare&ccedil;a</p>

<p>N&atilde;o tem d&oacute; no peito<br />
N&atilde;o tem jeito<br />
N&atilde;o tem cora&ccedil;&atilde;o que esque&ccedil;a<br />
N&atilde;o tem ningu&eacute;m que mere&ccedil;a<br />
N&atilde;o tem p&eacute;, n&atilde;o tem cabe&ccedil;a<br />
N&atilde;o da p&eacute;, n&atilde;o &eacute; direito<br />
N&atilde;o foi nada, eu n&atilde;o fiz nada disso<br />
E voc&ecirc; fez um<br />
Bicho de sete cabe&ccedil;as<br />
Bicho de sete cabe&ccedil;as<br />
</p>
',
'creditos' => '<p>Arranjo: Z&eacute; Ramalho e Geraldo Azevedo<br />
Viol&atilde;o: Geraldo Azevedo<br />
Viola: Z&eacute; Ramalho<br />
Baixo: Jamil Joanes<br />
Trompete: Marcio Montarroyos<br />
Vibrafone e &oacute;rg&atilde;o: Luiz Ant&ocirc;nio<br />
Percuss&atilde;o: Z&eacute; Gomes, Lucas e Firmino<br />
Bateria: Renato Massa<br />
</p>
',
                'faixa_mp3' => '08_bicho_de_7_cabecas_ii.mp3', 
                'faixa_ogg' => '08_bicho_de_7_cabecas_ii.ogg',
                'disco_id' => '20',   ));

Musicas::create(
            array(
                'faixa' => 'O Autor Da Natureza',
                'compositor' => '(Z&eacute; Vicente da Para&iacute;ba / Passarinho do Norte / Br&aacute;ulio Tavares)Cantam: Geraldo Azevedo e Z&eacute; Ramalho',
                'letra' => '<p>A natureza<br />
A natureza<br />
A natureza<br />
A natureza</p>

<p>O que prende demais minha aten&ccedil;&atilde;o<br />
&Eacute; um touro raivoso numa arena<br />
Uma pulga do jeito que &eacute; pequena<br />
Dominar a bravura de um le&atilde;o<br />
Na picada ele muda a posi&ccedil;&atilde;o<br />
Pra co&ccedil;ar-se depressa com certeza<br />
N&atilde;o se serve da unha nem da presa<br />
Se levanta da cama e fica em p&eacute;<br />
Tudo isso provando o quanto &eacute;<br />
Poderosa e suprema a natureza</p>

<p>Admiro demais o beija-flor<br />
Que com medo da cobra inimiga<br />
S&oacute; constr&oacute;i o seu ninho na urtiga<br />
Recebendo li&ccedil;&atilde;o do Criador<br />
Observo a coragem do condor<br />
Que nos montes rochosos come a presa<br />
Urubu empregado da limpeza<br />
Quando &eacute; triste a vida do abutre<br />
Quando encontra um morto &eacute; que se nutre<br />
Quanto &eacute; grande e suprema a natureza</p>

<p>A abelha por Deus foi amestrada<br />
Sem haver um processo bioqu&iacute;mico<br />
At&eacute; hoje n&atilde;o houve nenhum qu&iacute;mico<br />
Pra fazer a ci&ecirc;ncia dizer nada<br />
O buraco pequeno da entrada<br />
Facilita a passagem com franqueza<br />
Uma &eacute; sentinela de defesa<br />
E as outras se espalham no vergel<br />
Sem turbina, sem tacho fazem mel<br />
Como &eacute; grande o poder da natureza</p>

<p>N&atilde;o h&aacute; pedra igualmente ao diamante<br />
Nem metal t&atilde;o querido quanto o ouro<br />
N&atilde;o existe tristeza como o choro<br />
Nem reflexo igual ao do brilhante<br />
Nem com&eacute;dia maior que a de Dante<br />
Nem existe acusado sem defesa<br />
Nem pecado maior que avareza<br />
Nem altura igualmente ao firmamento<br />
Nem veloz igualmente ao pensamento<br />
Nem h&aacute; grande igualmente &agrave; natureza</p>

<p>Tem um verso que fala da maconha<br />
Que &eacute; uma erva que d&aacute; no meio do mato<br />
Se fumada provoca um tal barato<br />
A maior emo&ccedil;&atilde;o que a gente sonha<br />
A viagem &agrave;s vezes &eacute; medonha<br />
D&aacute; suor, d&aacute; vertigem, d&aacute; fraqueza<br />
Por&eacute;m, quase sempre &eacute; uma beleza<br />
Eu por mim experimento todo dia<br />
Se eu tivesse um agora eu bem queria<br />
Pois a coisa &eacute; da santa natureza<br />
</p>

',
'creditos' => '<p>Arranjo: Z&eacute; Ramalho e Geraldo Azevedo<br />
Viol&atilde;o: Geraldo Azevedo<br />
Baixo: Jamil Joanes<br />
Berimbau de bacia: Robertinho de Recife<br />
Percuss&atilde;o: Z&eacute; Gomes, Lucas e Firmino<br />
</p>
',
                'faixa_mp3' => '09_o_autor_da_natureza.mp3', 
                'faixa_ogg' => '09_o_autor_da_natureza.ogg',
                'disco_id' => '20',   ));

Musicas::create(
            array(
                'faixa' => 'Saga Da Asa Branca',
                'compositor' => '(Zé Vicente da Paraíba / Passarinho do Norte / Bráulio Tavares) Cantam: Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho',
                'letra' => '<p><strong>Asa Branca</strong><br />
<em>(Luiz Gonzaga / Humberto Teixeira)</em></p>

<p>Quando olhei a terra ardendo<br />
Qual fogueira de S&atilde;o Jo&atilde;o<br />
Eu perguntei a Deus do c&eacute;u<br />
Por que tamanha judia&ccedil;&atilde;o<br />
Eu perguntei a Deus do c&eacute;u, ai<br />
Por que tamanha judia&ccedil;&atilde;o</p>

<p>Que braseiro, que fornalha<br />
Nem um p&eacute; de planta&ccedil;&atilde;o<br />
Por falta d&rsquo;&aacute;gua perdi meu gado<br />
Morreu de sede meu alaz&atilde;o<br />
Por falta d&rsquo;&aacute;gua perdi meu gado<br />
Morreu de sede meu alaz&atilde;o</p>

<p>Int&eacute; mesmo a Asa Branca<br />
Bateu asas do sert&atilde;o<br />
Entonce eu disse &ldquo;adeus Rosinha<br />
Guarda contigo meu cora&ccedil;&atilde;o&rdquo;<br />
Entonce eu disse &ldquo;adeus Rosinha<br />
Guarda contigo meu cora&ccedil;&atilde;o&rdquo;</p>

<p>Quando o verde dos teus olhos<br />
Se espalhar na planta&ccedil;&atilde;o<br />
Eu te asseguro, n&atilde;o chore n&atilde;o, viu<br />
Que eu voltarei viu, meu cora&ccedil;&atilde;o<br />
Eu te asseguro, n&atilde;o chore n&atilde;o, viu<br />
Eu voltarei viu, meu cora&ccedil;&atilde;o<br />
</p>
<p><strong>A volta da Asa Branca</strong><br />
<em>(Luiz Gonzaga / Z&eacute; Dantas)</em></p>

<p>J&aacute; faz tr&ecirc;s noites que pro norte relampeia<br />
A Asa Branca ouvindo o ronco do trov&atilde;o<br />
J&aacute; bateu asas e voltou pro meu sert&atilde;o<br />
Ai, ai, eu vou-me embora<br />
Vou cuidar da planta&ccedil;&atilde;o<br />
J&aacute; bateu asas e voltou pro meu sert&atilde;o<br />
Ai, ai, eu vou-me embora<br />
Vou cuidar da planta&ccedil;&atilde;o</p>

<p>A seca fez eu desertar da minha terra<br />
Mas felizmente Deus agora se alembrou<br />
De mandar chuva presse sert&atilde;o sofredor<br />
Sert&atilde;o das mulh&eacute; s&eacute;ria, dos home trabalhador<br />
De mandar chuva presse sert&atilde;o sofredor<br />
Sert&atilde;o das mulh&eacute; s&eacute;ria, dos home trabalhador</p>

<p>Rios correndo, as cachoeiras t&atilde;o zoando<br />
Terra molhada, mato verde, que riqueza<br />
E a Asa Branca tarde canta que beleza<br />
Ai, ai, o povo alegre, mais alegre a natureza<br />
E a Asa Branca tarde canta que beleza<br />
Ai, ai, o povo alegre, mais alegre a natureza</p>

<p>Revendo a chuva me arrecordo de Rosinha<br />
A linda flor do meu sert&atilde;o pernambucano<br />
E se a safra n&atilde;o atrapalhar meus planos<br />
Que &eacute; que h&aacute; &oacute; seu vig&aacute;rio, vou casar no fim do ano<br />
E se a safra n&atilde;o atrapalhar meus planos<br />
Que &eacute; que h&aacute; &oacute; seu vig&aacute;rio, vou casar no fim do ano<br />
</p>

',
'creditos' => '<p>Arranjo: Geraldo Azevedo e Z&eacute; Ramalho<br />
Viola: Z&eacute; Ramalho<br />
Baixo: Jamil Joanes<br />
Viola de 10 cordas: Robertinho de Recife<br />
Acordeom: Dominguinhos<br />
Flautas: C&eacute;sar Michiles<br />
Bateria: Renato Massa<br />
Percuss&atilde;o: Z&eacute; Gomes, Lucas e Firmino<br />
</p>
',
                'faixa_mp3' => '10_saga_da_asa_branca.mp3', 
                'faixa_ogg' => '10_saga_da_asa_branca.ogg',
                'disco_id' => '20',   ));

Musicas::create(
            array(
                'faixa' => 'Can&ccedil;&atilde;o Da Despedida',
                'compositor' => '(Geraldo Azevedo / Geraldo Vandr&eacute;) Canta: Elba Ramalho',
                'letra' => '<p>J&aacute; vou embora<br />
Mas sei que vou voltar<br />
Amor n&atilde;o chora<br />
Se eu volto &eacute; pra ficar</p>

<p>Amor n&atilde;o chora<br />
Que a hora &eacute; de deixar<br />
O amor de agora<br />
Pra sempre ele ficar</p>

<p>Eu quis ficar aqui, mas n&atilde;o podia<br />
O meu caminho a ti n&atilde;o conduzia<br />
Um rei mal coroado n&atilde;o queria<br />
O amor em seu reinado<br />
Pois sabia, n&atilde;o ia ser amado</p>

<p>Amor n&atilde;o chora, eu volto um dia<br />
O rei velho e cansado j&aacute; morria<br />
Perdido em seu reinado, sem Maria<br />
Quando eu me despedia<br />
E no meu canto lhe dizia</p>
',
'creditos' => '
<p>Arranjo e viol&atilde;o: Geraldo Azevedo</p>
',
                'faixa_mp3' => '11_cancao_da_despedida.mp3', 
                'faixa_ogg' => '11_cancao_da_despedida.ogg',
                'disco_id' => '20',   ));

Musicas::create(
            array(
                'faixa' => 'Ai Que Saudade De Oc&ecirc;',
                'compositor' => '(Vital Farias) Cantam: Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho',
                'letra' => '<p>N&atilde;o se admire se um dia<br />
Um beija-flor invadir<br />
A porta da tua casa<br />
Te der um beijo e partir<br />
Fui eu que mandei o beijo<br />
Que &eacute; pra matar meu desejo<br />
Faz tempo que eu n&atilde;o te vejo<br />
Ai que saudade d&rsquo;oc&ecirc;</p>

<p>Se um dia oc&ecirc; lembrar<br />
Escreva uma carta pra mim<br />
Bote logo no correio<br />
Com frases dizendo assim:<br />
&ldquo;Faz tempo que n&atilde;o te vejo<br />
Quero matar meu desejo<br />
Te mando um monte de beijos<br />
Ai que saudade sem fim&rdquo;</p>

<p>E se quiser recordar<br />
Aquele nosso namoro<br />
Quando eu ia viajar<br />
Voc&ecirc; ca&iacute;a no choro<br />
E eu chorando pela estrada<br />
Mas o que eu posso fazer<br />
Trabalha &eacute; minha sina<br />
Eu gosto mesmo &eacute; d&#39;oc&ecirc;<br />
</p>
',
'creditos' => '
<p>Arranjo: Z&eacute; Ramalho e Geraldo Azevedo<br />
Viol&atilde;o: Geraldo Azevedo<br />
Viola: Z&eacute; Ramalho<br />
Baixo: Jamil Joanes<br />
Acordeom: Dominguinhos<br />
Flautas: C&eacute;sar Michiles<br />
Percuss&atilde;o: Firmino e Paulinho He-Man</p>
',
                'faixa_mp3' => '12_ai_que_saudade_doce.mp3', 
                'faixa_ogg' => '12_ai_que_saudade_doce.ogg',
                'disco_id' => '20',   ));


Musicas::create(
            array(
                'faixa' => 'Chameguinho',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Meu bem castiga nesse passo miudinho<br />
Faz aquele chameguinho<br />
N&atilde;o d&ecirc; bola pra ningu&eacute;m<br />
Voc&ecirc; &eacute; meu caf&eacute; com leite<br />
&Eacute; o queijo dentro do meu p&atilde;o<br />
&Eacute; o ch&atilde;o pra que eu me deite<br />
Que ascende seu cora&ccedil;&atilde;o<br />
Meu bem voc&ecirc; me sacuda<br />
Me acuda e me d&ecirc; um n&oacute;</p>

<p>Mostre pra esse povo que voc&ecirc; &eacute; quente<br />
Mostre pra essa gente que voc&ecirc; &eacute; meu xod&oacute;<br />
Mostre pra esse povo que voc&ecirc; &eacute; quente<br />
Mostre pra essa gente que voc&ecirc; &eacute; meu xod&oacute;</p>

<p>Quero ver o povo todo se babando<br />
Quero ver voc&ecirc; dan&ccedil;ando comigo num canto s&oacute;<br />
Com aquele chamego de fazer roer<br />
Pra todo mundo ver, do ch&atilde;o levantar p&oacute;<br />
</p>
',
'creditos' => '<p>Arranjo e guitarra: Robertinho de Recife<br />
Percuss&atilde;o: Paulinho He-Man<br />
Baixo: Fa&iacute;sca Bass<br />
Sanfona: Valdeci Ara&uacute;jo<br />
Bateria: Arthur Cesar<br />
Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o<br />
</p>
',
                'faixa_mp3' => '01_chameguinho.mp3', 
                'faixa_ogg' => '01_chameguinho.ogg',
                'disco_id' => '21',   ));

Musicas::create(
            array(
                'faixa' => 'Tum-Tum-Tum',
                'compositor' => '(Ari Monteiro /Crist&oacute;v&atilde;o de Alencar)',
                'letra' => '<p>No tempo que eu era s&oacute;<br />
Que n&atilde;o tinha amor nenhum<br />
Meu cora&ccedil;&atilde;o batia mansinho<br />
Tum, tum, tum</p>

<p>Depois veio voc&ecirc;<br />
O meu amor n&uacute;mero um<br />
E o meu cora&ccedil;&atilde;o pois se a bater<br />
Tum, tum, tum, tum, tum, tum<br />
</p>
<p><strong>Mulata No Coco</strong><br />
<em>(Oscar Barbosa / Geraldo Nunes)</em></p>

<p>Olha o balan&ccedil;o das cadeira dela<br />
Olha o balan&ccedil;o das cadeira dela d&aacute;<br />
Olha o balan&ccedil;o das cadeira dela<br />
Fiz esse coco s&oacute; pra ela balan&ccedil;ar</p>

<p>Quando eu gritei o coco<br />
A mulata se espalhou<br />
Com o chiado da sand&aacute;lia dela<br />
A poeira levantou</p>

<p>A mo&ccedil;ada lhe cobriu de palmas<br />
Ela em cena tornou a voltar<br />
Com satisfa&ccedil;&atilde;o voltei a cantar esse coco<br />
Que eu fiz s&oacute; pra ela balan&ccedil;ar<br />
</p>

',
'creditos' => '<p>Arranjo: Robertinho de Recife e Luiz Ant&ocirc;nio<br />
Percuss&atilde;o: Paulinho He-Man<br />
Baixo: Fa&iacute;sca Bass<br />
Cavaco: Robertinho de Recife<br />
Sanfona: Chiquinho Chagas e Valdeci Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio<br />
Bateria: Arthur Cesar<br />
Clarinete: Juarez Ara&uacute;jo<br />
Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o<br />
</p>
',
                'faixa_mp3' => '02_tum_tum_tum_mulata_no_coco.mp3', 
                'faixa_ogg' => '02_tum_tum_tum_mulata_no_coco.ogg',
                'disco_id' => '21',   ));

Musicas::create(
            array(
                'faixa' => 'Face',
                'compositor' => '(Chico C&eacute;sar / Itamar Assump&ccedil;&atilde;o / Zeca Baleiro)',
                'letra' => '<p>Eu dou a minha face pra bater<br />
Mas se quiser pode beijar<br />
Vem dentro de mim, vem fora de si<br />
Meu amor, meu amor vem c&aacute;<br />
Vem dentro de mim, vem fora de si<br />
Meu amor, meu amor vem c&aacute;</p>

<p>Menina voc&ecirc; me alucina<br />
Mas a minha sina &eacute; te desejar<br />
Desejo como o rato<br />
O queijo como a boca<br />
O beijo meu amor desejar<br />
Desejo como o rato<br />
O queijo como rato<br />
O beijo como a boca<br />
Desejo meu amor vem c&aacute;</p>

<p>Morena, vem da minha pena<br />
Minha amada Madalena<br />
Minha cruz, meu ar<br />
Entenda que amar<br />
&Eacute; desejar beijar<br />
Menina desejo seu beijo<br />
Entenda que amar<br />
&Eacute; desejar beijar<br />
Morena, meu amor, vem c&aacute;<br />
</p>
',
'creditos' => '<p>Arranjo e guitarra: Robertinho de Recife<br />
Percuss&atilde;o: Paulinho He-Man<br />
Baixo: Fa&iacute;sca Bass<br />
Sanfona: Valdeci Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio<br />
Bateria: Arthur Cesar<br />
Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o<br />
</p>
',
                'faixa_mp3' => '03_face.mp3', 
                'faixa_ogg' => '03_face.ogg',
                'disco_id' => '21',   ));

Musicas::create(
            array(
                'faixa' => 'Lavadeira Do Rio',
                'compositor' => '(Lenine / Br&aacute;ulio Tavares) Participa&ccedil;&atilde;o Especial: Lenine',
                'letra' => '<p>A lavadeira do rio<br />
Muito len&ccedil;ol pra lavar<br />
Fica faltando uma saia<br />
Quando o sab&atilde;o se acabar</p>

<p>Mas corra pra beira da praia<br />
Veja a espuma brilhar<br />
Ou&ccedil;a o barulho bravio<br />
Das ondas que batem na beira do mar<br />
Ou&ccedil;a o barulho bravio<br />
Das ondas que batem na beira do mar</p>

<p>&Ecirc;, &ocirc;, o vento soprou<br />
&Ecirc;, &ocirc;, a folha caiu<br />
&Ecirc;, &ocirc;, cad&ecirc; meu amor<br />
Que a noite chegou fazendo frio</p>

<p>&Ocirc; Rita tu sai da janela<br />
Deixa esse mo&ccedil;o passar<br />
Quem n&atilde;o &eacute; rica e &eacute; bela<br />
N&atilde;o pode se descuidar</p>

<p>&Ocirc; Rita tu sai da janela<br />
Que as mo&ccedil;as desse lugar<br />
Nem se demora a donzela<br />
Nem se destina a casar<br />
Nem se demora a donzela<br />
Nem se destina a casar<br />
</p>
',
'creditos' => '<p>Arranjo: Lenine<br />
Viola: Robertinho de Recife<br />
Sampler: Luiz Ant&ocirc;nio<br />
Percuss&atilde;o: Paulinho He-Man<br />
Vocal: Tadeu Mathias<br />
</p>
',
                'faixa_mp3' => '04_lavadeira_do_rio.mp3', 
                'faixa_ogg' => '04_lavadeira_do_rio.ogg',
                'disco_id' => '21',   ));

Musicas::create(
            array(
                'faixa' => 'Aroma',
                'compositor' => '(Dominguinhos / Nando Cordel)',
                'letra' => '<p>Eu gosto do aroma do teu corpo<br />
Do beijo cristalino e sedutor<br />
Da pele que &eacute; macia feito seda<br />
Teu jeito cobi&ccedil;ado o meu amor</p>

<p>Eu gosto quando &eacute;s um passarinho<br />
E v&ecirc; na minha boca um sapoti<br />
Eu passo a vida inteira nos teus bra&ccedil;os<br />
O que voc&ecirc; quiser eu fa&ccedil;o<br />
Quero ver voc&ecirc; feliz<br />
Eu passo a vida inteira nos teus bra&ccedil;os<br />
O que voc&ecirc; quiser eu fa&ccedil;o<br />
Quero ver voc&ecirc; feliz</p>

<p>Que loucura teu amor<br />
Ai, ai, ai<br />
Ningu&eacute;m pode imaginar<br />
Ai, ai, ai<br />
&Eacute; demais o teu molejo<br />
A del&iacute;cia do teu beijo<br />
Faz a gente desmaiar<br />
</p>
',
'creditos' => '<p>Arranjo: Robertinho de Recife e Dominguinhos<br />
Percuss&atilde;o: Paulinho He-Man<br />
Baixo: Fa&iacute;sca Bass<br />
Sanfona (solo): Dominguinhos<br />
Sanfona: Valdeci Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio<br />
Bateria: Arthur Cesar<br />
Guitarra: Robertinho de Recife<br />
Zabumba: Dio de Ara&uacute;jo<br />
Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o<br />
</p>
',
                'faixa_mp3' => '05_aroma.mp3', 
                'faixa_ogg' => '05_aroma.ogg',
                'disco_id' => '21',   ));

Musicas::create(
            array(
                'faixa' => 'A Letra I',
                'compositor' => '(Z&eacute; Dantas / Luiz Gonzaga)',
                'letra' => '<p>Vai cartinha fechada<br />
N&atilde;o deixa ningu&eacute;m te abrir<br />
&Agrave;quela casa caiada onde mora a letra I<br />
Existe uma cacimba do rio que o ver&atilde;o secou<br />
Meus &oacute;io chorou tanta m&aacute;goa<br />
Que hoje sem &aacute;gua me responde a dor<br />
Meus &oacute;io chorou tanta m&aacute;goa<br />
Que hoje sem &aacute;gua me responde a dor</p>

<p>Ai, diz que o amor<br />
Fumega no meu cora&ccedil;&atilde;o<br />
Tal qual a fogueira<br />
Das noites de S&atilde;o Jo&atilde;o</p>

<p>Que eu sofro por viver sem ela<br />
Tando longe dela s&oacute; sei reclamar<br />
Eu vivo como um passarinho<br />
Que longe do ninho s&oacute; pensa em voltar<br />
</p>
',
'creditos' => '<p>Arranjo e guitarra: Robertinho de Recife<br />
Percuss&atilde;o: Paulinho He-Man<br />
Baixo: Fa&iacute;sca Bass<br />
Sanfona: Valdeci Ara&uacute;jo<br />
Bateria: Arthur Cesar<br />
Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o<br />
</p>
',
                'faixa_mp3' => '06_a_letra_i.mp3', 
                'faixa_ogg' => '06_a_letra_i.ogg',
                'disco_id' => '21',   ));

Musicas::create(
            array(
                'faixa' => 'Pra Ninar Meu Cora&ccedil;&atilde;o',
                'compositor' => '(Maciel Melo / Luis Fidélis)',
                'letra' => '<p>T&ocirc; esperando por voc&ecirc; a qualquer hora, amor<br />
Pode bater na porta do meu cora&ccedil;&atilde;o<br />
Tirei a chave, eu arranquei a fechadura<br />
Pra ver voc&ecirc; de encontro &agrave; minha solid&atilde;o</p>

<p>Vem depressa que eu j&aacute; estou contando as horas<br />
Tic-tac no rel&oacute;gio da paix&atilde;o<br />
Vem cantar ao meu ouvido aquela m&uacute;sica<br />
Maravilhosa pra ninar meu cora&ccedil;&atilde;o</p>

<p>Vem, vem, vem matar a minha sede<br />
Vem, vem, vem cuidar do meu amor<br />
Vem, vem, vem armar a tua rede<br />
Que no meu peito tem um par de armador<br />
</p>
',
'creditos' => '<p>Arranjo e guitarra: Robertinho de Recife<br />
Percuss&atilde;o: Paulinho He-Man<br />
Baixo: Fa&iacute;sca Bass<br />
Sanfona: Valdeci Ara&uacute;jo<br />
Bateria: Arthur Cesar<br />
Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o<br />
</p>
',
                'faixa_mp3' => '07_pra_ninar_meu_coracao.mp3', 
                'faixa_ogg' => '07_pra_ninar_meu_coracao.ogg',
                'disco_id' => '21',   ));

Musicas::create(
            array(
                'faixa' => 'Pau-de-arara &eacute; a Vovozinha',
                'compositor' => '(Gordurinha)',
                'letra' => '<p>Vim da Bahia pro Rio de Janeiro<br />
Pra ganhar dinheiro, desaforo n&atilde;o<br />
Pau de arara &eacute; a vovozinha<br />
Eu s&oacute; viajo &eacute; de avi&atilde;o<br />
Pau de arara &eacute; a vovozinha<br />
Eu s&oacute; viajo &eacute; de avi&atilde;o</p>

<p>Humorista de almanaque<br />
Aprendiz de gozador<br />
Eu vou lhe levar na Bahia<br />
Voc&ecirc; vai cair duro l&aacute; em Salvador</p>

<p>Vai escorregar no petr&oacute;leo<br />
Vou lhe entupir de cacau<br />
Se chegar falando em g&iacute;ria<br />
Voc&ecirc; vai entrar no pau</p>

<p>Depois &ocirc; cabra da peste<br />
N&atilde;o me diga que o Nordeste s&oacute; tem cabra mau<br />
Depois &ocirc; cabra da peste<br />
N&atilde;o me diga que o Nordeste s&oacute; tem cabra mau<br />
</p>
',
'creditos' => '<p>Arranjo e cavaco: Robertinho de Recife<br />
Percuss&atilde;o: Paulinho He-Man<br />
Baixo: Fa&iacute;sca Bass<br />
Sanfona: Valdeci Ara&uacute;jo<br />
Bateria: Arthur Cesar<br />
Sax: Juarez Ara&uacute;jo<br />
Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o<br />
</p>
',
                'faixa_mp3' => '08_pau_de_arara_e_a_vovonhinha.mp3', 
                'faixa_ogg' => '08_pau_de_arara_e_a_vovonhinha.ogg',
                'disco_id' => '21',   ));

Musicas::create(
            array(
                'faixa' => 'Me Pegue Pra Chamegar',
                'compositor' => '(Tadeu Mathias)',
                'letra' => '<p>Um chamego desses s&oacute; &eacute; bom contigo<br />
Chegue logo meu pretinho, &eacute;s o meu amor<br />
Tu &eacute;s o bem bom da minha vida<br />
Eu sou tua querida, tua pequenina flor</p>

<p>Eu sou<br />
Eu sei que sou o seu amor<br />
Eu vou<br />
A noite toda com voc&ecirc;<br />
Nesse chamego arrochado<br />
Que me deixa louca de tanto prazer<br />
Quase perco o ju&iacute;zo quando voc&ecirc; me abra&ccedil;a<br />
Nego, voc&ecirc; me la&ccedil;a com essa sua dan&ccedil;a</p>

<p>Que &eacute; um chamego<br />
&Eacute; um chamego, nego<br />
&Eacute; um chamego<br />
&Eacute; um chamego, nego<br />
&Eacute; um chamego<br />
Que me pega bem cedo<br />
&Eacute; mexido, &eacute; chamego<br />
Me pegue pra chamegar</p>

<p>Me pegue, me pegue pra chamegar<br />
Me pegue, me pegue pra chamegar<br />
Me pegue, me pegue pra chamegar<br />
Pegue devagar<br />
Me pegue pra chamegar<br />
</p>
',
'creditos' => '<p>Arranjo e guitarra: Robertinho de Recife<br />
Percuss&atilde;o: Paulinho He-Man<br />
Baixo: Fa&iacute;sca Bass<br />
Sanfona: Valdeci Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio<br />
Bateria: Arthur Cesar<br />
Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o<br />
</p>
',
                'faixa_mp3' => '09_me_pegue_pra_chamegar.mp3', 
                'faixa_ogg' => '09_me_pegue_pra_chamegar.ogg',
                'disco_id' => '21',   ));
Musicas::create(
            array(
                'faixa' => 'S&atilde;o Xang&ocirc; Menino',
                'compositor' => '(Carlinhos Brown)',
                'letra' => '<p>E hoje &eacute; o anivers&aacute;rio de S&atilde;o Jo&atilde;o<br />
E hoje &eacute; o anivers&aacute;rio de S&atilde;o Jo&atilde;o<br />
Vamos comer canjica, vamos soltar bal&atilde;o<br />
Que hoje &eacute; o anivers&aacute;rio de S&atilde;o Jo&atilde;o</p>

<p>S&atilde;o Xang&ocirc; menino<br />
Carrega o carneiro no peito<br />
A mando do amado<br />
Comando uniperfeito<br />
A mando do amado<br />
Comando uniperfeito</p>

<p>Tenho fogo na goela<br />
S&oacute; quent&atilde;o para o cantar<br />
&Eacute; festa na ruela<br />
No paiol do varandar</p>

<p>As mo&ccedil;as da fazenda<br />
Vencem o seu que fazer<br />
Vamos pagar a prenda<br />
No licor do bem querer</p>

<p>Sanfoneiro rindo<br />
Carrega a sanfona no peito<br />
Zabumba &eacute; Pedro<br />
E o triangueiro &eacute; Tonho Casamenteiro<br />
</p>
',
'creditos' => '<p>Concep&ccedil;&atilde;o musical: Carlinhos Brown<br />
Percuss&atilde;o: Paulinho He-Man<br />
Baixo: Fa&iacute;sca Bass<br />
Cavaco e guitarra: Robertinho de Recife<br />
Sanfona: Valdeci Ara&uacute;jo<br />
Bateria: Arthur Cesar<br />
Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o<br />
</p>
',
                'faixa_mp3' => '10_sao_xango_menino.mp3', 
                'faixa_ogg' => '10_sao_xango_menino.ogg',
                'disco_id' => '21',   ));

Musicas::create(
            array(
                'faixa' => 'Casa, Comida e Paix&atilde;o',
                'compositor' => '(Dominguinhos / Fausto Nilo)',
                'letra' => '<p>L&aacute; se vai o meu amor<br />
Levando uma grande saudade<br />
Nas asas de um avi&atilde;o<br />
No horizonte a fronteira da liberdade<br />
Riqueza e felicidade<br />
Cidades de outro sert&atilde;o</p>

<p>Labirinto do tempo, sou teu passageiro<br />
Viajo em meu pr&oacute;prio estrangeiro<br />
Pra onde esse amor me levar<br />
Vou no deserto criar um jardim<br />
E no oceano fundar um pa&iacute;s<br />
E num futuro feliz eu s&oacute; penso em voltar</p>

<p>Felicidade<br />
Momento da vida que voa<br />
Nos bra&ccedil;os de uma pessoa<br />
Que a gente nem pensa em deixar</p>

<p>Tarde de vento nas flores do mato<br />
O tempo levou seu retrato<br />
Deixou os meus olhos no ch&atilde;o<br />
Juro que meu cora&ccedil;&atilde;o nem sabia<br />
O brinquedo da nossa alegria<br />
Era casa, comida e paix&atilde;o</p>

<p>O seu nome ainda hoje eu escuto na rua<br />
Mas saiba que o sol continua<br />
Batendo no mesmo lugar<br />
Ou ser&aacute; que voc&ecirc; se esqueceu de mim<br />
Que a nossa saudade &eacute; t&atilde;o ruim<br />
Que o melhor rem&eacute;dio &eacute; cantar?<br />
</p>
',
'creditos' => '<p>Arranjo: Luiz Ant&ocirc;nio<br />
Sanfona: Dominguinhos<br />
Viol&atilde;o: Geraldo Azevedo<br />
Guitarra portuguesa: Robertinho de Recife<br />
</p>
',
                'faixa_mp3' => '11_casa_comida_e_paixao.mp3', 
                'faixa_ogg' => '11_casa_comida_e_paixao.ogg',
                'disco_id' => '21',   ));

Musicas::create(
            array(
                'faixa' => 'Z&eacute; Esteves',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>Ai, quando eu lembro aquele beijo, aquele abra&ccedil;o<br />
Longe no tempo e no espa&ccedil;o<br />
Sem momento e sem lugar<br />
O sentimento no meu peito d&aacute; um la&ccedil;o<br />
Que eu n&atilde;o sei como desfa&ccedil;o<br />
E vou cantando devagar, ai<br />
Vou cantando devagar<br />
Mas quando eu pego a cantar, viu<br />
D&aacute; vontade de chorar</p>

<p>A vida passa e a gente se encontra sozinho<br />
Sem entender o caminho que tem pra seguir<br />
Algum momento de carinho fez sentido<br />
Mas agora est&aacute; perdido, n&atilde;o h&aacute; nada aqui<br />
Quem ergue a ta&ccedil;a, come a fruta<br />
E bebe o vinho sem pensar<br />
Que vir&aacute; logo a saudade pra ficar?<br />
Que vontade de chorar, viu<br />
S&oacute; vontade de chorar<br />
Que vontade de chorar, ai<br />
Que vontade de chorar<br />
</p>
',
'creditos' => '<p>Arranjo e viol&atilde;o: Marcos Arcanjo<br />
Percuss&atilde;o: Paulinho He-Man<br />
Baixo: Jacar&eacute;<br />
Sanfona: Severo<br />
Violino: Paul de Castro<br />
Flauta: C&eacute;sar Michiles<br />
</p>
',
                'faixa_mp3' => '12_ze_esteves.mp3', 
                'faixa_ogg' => '12_ze_esteves.ogg',
                'disco_id' => '21',   ));

Musicas::create(
            array(
                'faixa' => 'Meu Sublime Torr&atilde;o',
                'compositor' => '(Genival Macedo)',
                'letra' => '<p>Num recanto bonito do Brasil<br />
Sorri a minha terra amada<br />
Onde o azul do c&eacute;u &eacute; mais cor de anil<br />
Onde o sol t&atilde;o quente<br />
Parece mais gentil<br />
</p>

<p><strong>Para&iacute;ba Meu Amor>/strong><br />
<em>(Chico C&eacute;sar)</em></p>

<p>Para&iacute;ba meu amor<br />
Eu estava de sa&iacute;da, mas eu vou ficar<br />
N&atilde;o quero chorar<br />
O choro da despedida<br />
O acaso da minha vida um dado n&atilde;o abolir&aacute;</p>

<p>E vir&aacute;s bem dentro de mim<br />
Como um S&atilde;o Jo&atilde;o sem fim<br />
Queimando o sert&atilde;o<br />
E a fogueirinha, lanterna de laser<br />
Que ilumina os festejos do meu cora&ccedil;&atilde;o</p>

<p>Hoje eu mando um abra&ccedil;o pra ti, pequenina<br />
Para&iacute;ba hospitaleira<br />
Morena brasileira<br />
Do meu cora&ccedil;&atilde;o<br />
</p>

',
'creditos' => '<p>Arranjo e viola: Robertinho de Recife<br />
Percuss&atilde;o: Paulinho He-Man<br />
Baixo: Fa&iacute;sca Bass<br />
Sanfona (introdu&ccedil;&atilde;o): Dominguinhos<br />
Sanfona: Valdeci Ara&uacute;jo<br />
Bateria: Arthur Cesar<br />
Vocais: Tadeu Mathias, Roberta Little, Jussara Silveira e Jussara Louren&ccedil;o<br />
</p>
',
                'faixa_mp3' => '13_paraiba_meu_amor.mp3', 
                'faixa_ogg' => '13_paraiba_meu_amor.ogg',
                'disco_id' => '21',   ));

Musicas::create(
            array(
                'faixa' => 'A Palo Seco',
                'compositor' => '(Belchior)',
                'letra' => '<p>Se voc&ecirc; vier me perguntar por onde andei<br />
No tempo em que voc&ecirc; sonhava<br />
De olhos abertos lhe direi<br />
Amigo, eu me desesperava</p>

<p>Sei que assim falando pensas<br />
Que esse desespero &eacute; moda em 76<br />
Mas ando mesmo descontente<br />
Desesperadamente eu grito em portugu&ecirc;s<br />
Mas ando mesmo descontente<br />
Desesperadamente eu grito em portugu&ecirc;s</p>

<p>Tenho 25 anos de sonho e de sangue<br />
E de Am&eacute;rica do Sul<br />
Por for&ccedil;a deste destino<br />
Um tango argentino<br />
Me cai bem melhor que um blues</p>

<p>Sei que assim falando pensas<br />
Que esse desespero &eacute; moda em 76<br />
Eu quero &eacute; que esse canto torto<br />
Feito faca corte a carne de voc&ecirc;s<br />
Eu quero &eacute; que esse canto torto<br />
Feito faca corte a carne de voc&ecirc;s<br />
</p>

',
'creditos' => '<p>Arranjo, piano e teclados: Z&eacute; Am&eacute;rico Bastos<br />
Contrabaixo: Jorge Helder<br />
Guitarra: Zeppa Souza<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o: Paulinho He-Man e Marcos Amma<br />
</p>
',
                'faixa_mp3' => '01_a_palo_seco.mp3', 
                'faixa_ogg' => '01_a_palo_seco.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Trem Das Ilus&otilde;es',
                'compositor' => '(Alceu Valen&ccedil;a / Herbert Azul) Participa&ccedil;&atilde;o Especial: Alceu Valen&ccedil;a',
                'letra' => '<p>Ah, se meu desejo voasse<br />
Como ave, como p&aacute;ssaro<br />
Lhe ca&ccedil;asse em toda parte<br />
Provocasse sua compaix&atilde;o</p>

<p>&Eacute; t&atilde;o pouco, muito louco<br />
Ficar ouvindo sua voz pelo telefone<br />
A can&ccedil;&atilde;o que n&oacute;s cantamos como trilha<br />
Nessa noite de interroga&ccedil;&atilde;o</p>

<p>&Eacute; t&atilde;o pouco, muito louco<br />
Ser flor e pedra em seu caminho<br />
Sofrer, gemer quase em sil&ecirc;ncio<br />
Morder seu nome no len&ccedil;o<br />
Ver nossa hist&oacute;ria por um fio<br />
&Eacute; t&atilde;o vazio</p>

<p>Vai ver que esse trem que voc&ecirc; viaja<br />
N&atilde;o tem janela n&atilde;o<br />
N&atilde;o tem casa na colina<br />
N&atilde;o tem p&ocirc;r-do-sol l&aacute; em cima<br />
&Eacute; voc&ecirc; que est&aacute; cego e n&atilde;o me v&ecirc; viajando<br />
Na mais cruel ilus&atilde;o<br />
Ah, ah, ah, ah, ah, ah<br />
</p>
',
'creditos' => 'Arranjo, piano e teclados: Zé Américo Bastos
Contrabaixo: Jorge Helder
Guitarra e violão de aço: Zeppa Souza
Bateria: Camilo Mariano
Percussão: Paulinho He-Man e Marcos Amma
',
                'faixa_mp3' => '02_trem_das_ilusoes.mp3', 
                'faixa_ogg' => '02_trem_das_ilusoes.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'O Meu Amor',
                'compositor' => '(Chico Buarque)',
                'letra' => '<p>O meu amor<br />
Tem um jeito manso que &eacute; s&oacute; seu<br />
E que me deixa louca<br />
Quando me beija a boca<br />
Minha pele toda fica arrepiada<br />
E me beija com calma e fundo<br />
At&eacute; minh&rsquo;alma se sentir beijada<br />
Ai</p>

<p>O meu amor<br />
Tem um jeito manso que &eacute; s&oacute; seu<br />
Que rouba os meus sentidos<br />
Viola os meus ouvidos<br />
Com tantos segredos<br />
Lindos e indecentes<br />
Depois brinca comigo<br />
Ri do meu umbigo<br />
E me crava os dentes<br />
Ai</p>

<p>Eu sou sua menina, viu?<br />
E ele &eacute; o meu rapaz<br />
Meu corpo &eacute; testemunha<br />
Do bem que ele me faz</p>

<p>O meu amor<br />
Tem um jeito manso que &eacute; s&oacute; seu<br />
De me deixar maluca<br />
Quando me ro&ccedil;a a nuca<br />
E quase me machuca<br />
Com a barba mal feita<br />
E de pousar as coxas<br />
Entre as minhas coxas<br />
Quando ele se deita<br />
Ai</p>

<p>O meu amor<br />
Tem um jeito manso que &eacute; s&oacute; seu<br />
De me fazer rodeios<br />
De me beijar os seios<br />
Me beijar o ventre<br />
Me deixar em brasa<br />
Desfruta do meu corpo<br />
Como se o meu corpo<br />
Fosse a sua casa<br />
Ai<br />
</p>
',
'creditos' => '<p>Arranjo, piano e teclados: Z&eacute; Am&eacute;rico Bastos<br />
Viol&atilde;o de nylon e guitarra: Chiquinho Braga<br />
Baixo: Jorge Helder<br />
Bateria: Camilo Mariano<br />
Sax alto e soprano: Z&eacute; Canuto<br />
Percuss&atilde;o: Paulinho He-Man e Marcos Amma<br />
</p>
',
                'faixa_mp3' => '03_o_meu_amor.mp3', 
                'faixa_ogg' => '03_o_meu_amor.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Não sonho mais',
                'compositor' => '(Chico Buarque) Participa&ccedil;&atilde;o Especial: Chico Buarque',
                'letra' => '<p>Hoje eu sonhei contigo<br />
Tanta desdita<br />
Amor nem te digo<br />
Tanto castigo<br />
Que eu tava aflita de te contar</p>

<p>Foi um sonho medonho<br />
Desses que &agrave;s vezes a gente sonha<br />
Baba na fronha<br />
Se urina toda<br />
Quer sufocar</p>

<p>Meu amor vi chegando<br />
Um trem de candango<br />
Formando um bando<br />
Mas que era um bando<br />
De orangotango pra te pegar</p>

<p>Vinha nego humilhado<br />
Vinha morto-vivo<br />
Vinha flagelado de tudo que &eacute; lado<br />
Vinha um bom motivo pra te esfolar</p>

<p>Quanto mais tu corria, mais tu ficava<br />
Mais atolava, mais te sujava<br />
Amor, tu fedia<br />
Empesteava o ar</p>

<p>Tu que foi t&atilde;o valente<br />
Chorou pra gente<br />
Pediu piedade, olha que maldade<br />
Me deu vontade de gargalhar</p>

<p>Ao p&eacute; da ribanceira acabou-se a li&ccedil;a<br />
Escarrei-te inteira a tua carni&ccedil;a<br />
Tinha justi&ccedil;a nesse escarrar</p>

<p>Te rasgamo a carca&ccedil;a<br />
Descemo a ripa<br />
Viramo as tripa<br />
Comemo os ovo<br />
Ai, aquele povo p&ocirc;s-se a cantar</p>

<p>Foi um sonho medonho<br />
Desses que &agrave;s vezes a gente sonha<br />
E baba na fronha e se urina toda<br />
E j&aacute; n&atilde;o tem paz</p>

<p>Pois eu sonhei contigo e ca&iacute; da cama<br />
Ai, amor, n&atilde;o briga, ai, n&atilde;o me castiga<br />
Ai, diz que me ama<br />
E eu n&atilde;o sonho mais<br />
</p>

',
'creditos' => '<p>Arranjo, piano e acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Contrabaixo: Jacar&eacute;<br />
Guitarra: Zeppa Souza<br />
Viola de 12 cordas: Manass&eacute;s<br />
Bateria: Camilo Mariano<br />
Flauta: David Ganc<br />
Percuss&atilde;o: Paulinho He-Man e Marcos Amma<br />
</p>

',
                'faixa_mp3' => '04_nao_sonho_mais.mp3', 
                'faixa_ogg' => '04_nao_sonho_mais.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Caju&iacute;na',
                'compositor' => '(Caetano Veloso)',
                'letra' => '<p>Existirmos a que ser&aacute; que se destina?<br />
Pois quando tu me deste a rosa pequenina<br />
Vi que &eacute;s um homem lindo e que se acaso a sina<br />
Do menino infeliz n&atilde;o se nos ilumina<br />
T&atilde;o pouco turva-se a l&aacute;grima nordestina<br />
Apenas a mat&eacute;ria vida era t&atilde;o fina<br />
E &eacute;ramos olharmo-nos intacta retina<br />
A caju&iacute;na cristalina em Teresina<br />
</p>
',
'creditos' => '<p>Arranjo: Duofel (Fernando Melo e Luiz Bueno)<br />
Acordeom: Z&eacute; Am&eacute;rico Bastos<br />
Contrabaixo: Jacar&eacute;<br />
Viola de 12 cordas: Fernando Melo<br />
Viol&atilde;o de nylon: Luiz Bueno<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o: Paulinho He-Man e Marcos Amma<br />
</p>
',
                'faixa_mp3' => '05_cajuina.mp3', 
                'faixa_ogg' => '05_cajuina.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Ave De Prata',
                'compositor' => '(Z&eacute; Ramalho) Participa&ccedil;&atilde;o Especial: Z&eacute Ramalho',
                'letra' => '<p>&Eacute; muito mais do que muito<br />
Muito mais do que quantos anos todos piorei<br />
&Eacute; muito mais do que mata<br />
Muito mais do que morrem todos pela planta do p&eacute;<br />
&Eacute; muito mais do que fera<br />
Mais do que bicho quando quer procriar<br />
Uma esp&eacute;cie: sementes da &aacute;gua, mist&eacute;rios da luz</p>

<p>&Eacute; muito mais do que antes<br />
Mais do que vinte anos multiplicar<br />
Dividir a mentira<br />
Entre cabelos, olhos e furac&otilde;es<br />
Inventar objetos<br />
Pela esfinge quando era mulher<br />
Ave de prata<br />
Veneno de fogo<br />
Vagalume do mar</p>

<p>O mar que se acaba na areia<br />
Gemidos da terra apoiados no ch&atilde;o<br />
Entre todos que usam os dentes do arp&atilde;o<br />
Apoiados em cada parede pela m&atilde;o<br />
Pela m&atilde;o que criou tantas trevas e luz</p>

<p>E cada coisa perdida<br />
Perdidamente pode se apaixonar<br />
Pela &uacute;ltima vida<br />
Poucos amigos h&atilde;o de te procurar<br />
Como &eacute; o sil&ecirc;ncio<br />
E nesse momento tudo deve calar<br />
Numa hist&oacute;ria que venha do povo<br />
O ju&iacute;zo final<br />
</p>
',
'creditos' => '<p>Arranjo e viol&atilde;o de a&ccedil;o: Z&eacute; Ramalho<br />
Viola de 12 cordas: Manasses<br />
Contrabaixo: Artur Maia<br />
Acordeom e teclados: Z&eacute; Am&eacute;rico Bastos<br />
Percuss&atilde;o: Paulinho He-Man e Marcos Amma<br />
</p>
',
                'faixa_mp3' => '06_ave_de_prata.mp3', 
                'faixa_ogg' => '06_ave_de_prata.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Palavra De Mulher',
                'compositor' => '(Chico Buarque)',
                'letra' => '<p>Vou voltar<br />
Haja o que houver eu vou voltar<br />
J&aacute; te deixei jurando nunca mais olhar pra tr&aacute;s<br />
Palavra de mulher<br />
Eu vou voltar</p>

<p>Posso at&eacute;<br />
Sair de bar em bar<br />
Em bar em bar<br />
Falar besteira e me enganar<br />
Com qualquer um deitar a noite inteira<br />
Eu vou te amar</p>

<p>Vou chegar<br />
A qualquer hora ao meu lugar<br />
E se uma outra pretendia<br />
Um dia te roubar<br />
Dispensa essa vadia<br />
Eu vou voltar</p>

<p>Vou subir<br />
A nossa escada, a escada<br />
A escada, a escada<br />
Meu amor, eu vou partir<br />
De novo e sempre feito viciada<br />
Eu vou voltar</p>

<p>Pode ser<br />
Que a nossa hist&oacute;ria seja mais<br />
Uma quimera<br />
E pode o nosso teto<br />
A Lapa, o Rio desabar</p>

<p>Pode ser<br />
Que passe o nosso tempo<br />
Como qualquer primavera<br />
Espera<br />
Me espera<br />
Eu vou voltar<br />
</p>
',
'creditos' => '<p>Arranjo e cello: Jacques Morelenbaum<br />
Viol&atilde;o: Luiz Brasil<br />
Baixo ac&uacute;stico: Zeca Assun&ccedil;&atilde;o<br />
Bateria: Carlos Bala<br />
Violinos: Giancarlo Pareschi (spalla), Michel Bessler, Jos&eacute; Alves, Ricardo Amado, Walter Hack, Antonella Pareschi, Bernardo Bessler e Paschoal Perrotta<br />
Violas: Jesu&iacute;na Passaroto e Marie Christine Bessler<br />
Cellos: Alceu Reis e Marcelo Salles<br />
</p>
',
                'faixa_mp3' => '07_palavra_de_mulher.mp3', 
                'faixa_ogg' => '07_palavra_de_mulher.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'N&oacute; Cego',
                'compositor' => '(Pedro Osmar) Participa&ccedil;&atilde;o Especial: Lenine',
                'letra' => '<p>&Eacute; voc&ecirc; a pessoa que deu<br />
Um n&oacute; cego em meu peito<br />
De apaixonado, de apaixonado?<br />
&Eacute; voc&ecirc; a pessoa que deu<br />
Um n&oacute; cego em meu peito<br />
De apaixonado, de apaixonado?</p>

<p>&Eacute; voc&ecirc;<br />
O mascarado que me trancou<br />
O mascarado que me trancou<br />
Nessa noite sem amor?<br />
Nessa noite sem amor?</p>

<p>&Eacute; voc&ecirc; amigo?<br />
Voc&ecirc; o inimigo?<br />
&Eacute; voc&ecirc; o perigo?<br />
&Eacute; voc&ecirc;?<br />
&Eacute; voc&ecirc; amigo?<br />
Voc&ecirc; o inimigo?<br />
&Eacute; voc&ecirc; o perigo?<br />
&Eacute; voc&ecirc;?</p>

<p>&Eacute; voc&ecirc; a garra de fome<br />
Que atormenta o presente?<br />
&Eacute; voc&ecirc; que mente muito?<br />
&Eacute; voc&ecirc; a garra de fome<br />
Que atormenta o presente?<br />
&Eacute; voc&ecirc; que mente muito?</p>

<p>Que me engana<br />
Que me rouba da vida?<br />
Que me engana<br />
Que me rouba da vida?<br />
Que me engana<br />
Que me rouba da vida?<br />
</p>
',
'creditos' => '<p>Arranjo, piano e teclados: Z&eacute; Am&eacute;rico Bastos<br />
Guitarra: Zeppa Souza<br />
Viola de 12 cordas: Manass&eacute;s<br />
Contrabaixo: Jacar&eacute;<br />
Bateria: Camilo Mariano<br />
Flautas: David Ganc<br />
Percuss&atilde;o: Paulinho He-Man e Marcos Amma<br />
</p>
',
                'faixa_mp3' => '08_no_cego.mp3', 
                'faixa_ogg' => '08_no_cego.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Imaculada',
                'compositor' => '(Ary Sperling / Aldir Blanc) Participa&ccedil;&atilde;o Especial: Nana Caymmi',
                'letra' => '<p>Meu castelo &eacute; a casa da fazenda<br />
Onde te&ccedil;o a minha lenda<br />
Sei, meu pr&iacute;ncipe vir&aacute;<br />
Esse sonho bom que me alimenta<br />
A espera &eacute; menos lenta<br />
Se o desejo delirar</p>

<p>Eu prefiro assim<br />
Pois com essa espera<br />
Domo a fera que h&aacute; em mim<br />
&Eacute; imaculada a semente do prazer<br />
Rosa ardente por florescer</p>

<p>A crian&ccedil;a deixa o para&iacute;so<br />
Fadas, c&oacute;rregos, sorrisos<br />
A pureza virginal<br />
Planta no seu seio adolescente<br />
A ma&ccedil;&atilde; e a serpente<br />
Do pecado original</p>

<p>Quero ser mulher<br />
No lugar e hora que meu pr&iacute;ncipe quiser<br />
E assim conquistada pela espada do querer<br />
Continua a ser imaculada<br />
</p>
',
'creditos' => '<p>Arranjo e teclados: Wagner Tiso<br />
Baixo ac&uacute;stico: Zeca Assun&ccedil;&atilde;o<br />
Viol&otilde;es: Victor Biglione e Ana de Oliveira<br />
Cello: Fernando Bru e David Chew<br />
Viola: Nayran Pessanha<br />
Obo&eacute;: Francisco Gon&ccedil;alves<br />
Flauta em sol: Mauro Senise<br />
Clarineta: Cristiano Alves<br />
Percuss&atilde;o: Paulinho He-Man<br />
</p>
',
                'faixa_mp3' => '09_imaculada.mp3', 
                'faixa_ogg' => '09_imaculada.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Sete Cantigas Para Voar',
                'compositor' => '(Vital Farias) Participa&ccedil;&atilde;o Especial: Renata Arruda',
                'letra' => '<p>Cantiga de campo<br />
De concentra&ccedil;&atilde;o<br />
A gente bem sente<br />
Com precis&atilde;o<br />
Mas recordo a tua imagem<br />
Naquela viagem<br />
Que fiz pro sert&atilde;o<br />
Eu que nasci na floresta<br />
Canto e fa&ccedil;o festa no seu cora&ccedil;&atilde;o<br />
Voa, voa azul&atilde;o<br />
Voa, voa azul&atilde;o</p>

<p>Cantiga de ro&ccedil;a<br />
De um cego apaixonado<br />
Cantiga de mo&ccedil;a<br />
L&aacute; no cercado<br />
Que canta a fauna e a flora<br />
Ningu&eacute;m ignora<br />
Se ela quer brotar<br />
Boto uma flor no cabelo<br />
Com alegria e zelo para n&atilde;o secar<br />
Voa, voa no ar<br />
Voa, voa no ar</p>

<p>Cantiga de ninar<br />
A crian&ccedil;a na rede<br />
Mentira de &aacute;gua<br />
&Eacute; matar a sede<br />
Diz pra m&atilde;e que fui pro a&ccedil;ude<br />
Fui pescar um peixe<br />
Isso n&atilde;o fui n&atilde;o<br />
Tava era com o namorado<br />
Pra alegria e festa do meu cora&ccedil;&atilde;o<br />
Voa, voa azul&atilde;o<br />
Voa, voa azul&atilde;o</p>

<p>Cantiga de &iacute;ndio<br />
Que perdeu sua taba<br />
No peito esse inc&ecirc;ndio<br />
Seu n&atilde;o se apaga<br />
Deixe o &iacute;ndio no seu canto<br />
Que eu canto um acalanto<br />
Fa&ccedil;o outra can&ccedil;&atilde;o<br />
Deixe o peixe, deixe o rio<br />
Que o rio &eacute; um fio de inspira&ccedil;&atilde;o<br />
Voa, voa azul&atilde;o<br />
Voa, voa azul&atilde;o<br />
Voa, voa...<br />
</p>

',
'creditos' => '<p>Arranjo e teclados: Z&eacute; Am&eacute;rico Bastos<br />
Acordeom: Dominguinhos<br />
Contrabaixo: Jacar&eacute;<br />
Viola de 12 cordas: Manasses<br />
Viol&atilde;o de nylon: Zeppa Souza<br />
Percuss&atilde;o: Paulinho He-Man e Marcos Amma<br />
Vocais: Jussara Louren&ccedil;o e Tadeu Mathias<br />
</p>

',
                'faixa_mp3' => '10_sete_cantigas_para_voar.mp3', 
                'faixa_ogg' => '10_sete_cantigas_para_voar.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Retrato Da Vida',
                'compositor' => '(Djavan / Dominguinhos) Participa&ccedil;&atilde;o Especial: Dominguinhos',
                'letra' => '<p>Esse matagal sem fim<br />
Essa estrada, esse rio seco<br />
Essa dor que mora em mim<br />
N&atilde;o descansa e nem dorme cedo<br />
O retrato da minha vida<br />
&Eacute; amar em segredo</p>

<p>N&atilde;o quer saber de mim<br />
E eu vivendo da tua vida<br />
Deus no c&eacute;u e voc&ecirc; aqui<br />
A esperan&ccedil;a &eacute; quem me abriga<br />
Esses campos n&atilde;o tardam em florir<br />
J&aacute; se espera uma boa colheita<br />
E tudo parece seguir<br />
Fazendo a vida t&atilde;o direita</p>

<p>Mas e voc&ecirc;, o que faz<br />
Que n&atilde;o repara no ch&atilde;o<br />
Por onde tem que passar<br />
E pisa em meu cora&ccedil;&atilde;o?<br />
O teu beijo em meu destino<br />
Era tudo que eu queria<br />
Ser meu homem, meu menino<br />
O ser amado de todo dia<br />
</p>
',
'creditos' => '<p>Arranjo e viol&atilde;o: Luiz Brasil<br />
Acordeom: Dominguinhos<br />
Viola de 12 cordas: Manass&eacute;s<br />
Contrabaixo: Alberto Continentino<br />
Bateria: Carlos Bala<br />
Percuss&atilde;o: Paulinho He-Man e Marcos Amma<br />
</p>
',
                'faixa_mp3' => '11_retrato_da_vida.mp3', 
                'faixa_ogg' => '11_retrato_da_vida.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Kukukaya (Jogo da Asa da Bruxa)',
                'compositor' => '(C&aacute;tia de Fran&ccedil;a) Participa&ccedil;&atilde;o Especial: Geraldo Azevedo',
                'letra' => '<p>S&atilde;o quatro jogadores nessa mesa<br />
Frente a frente para jogar<br />
S&atilde;o quatro cabras de peia no desafio<br />
No jogo da bruxa em noite de lua cheia<br />
S&atilde;o quatro jogadores nessa mesa<br />
Dando as cartas do jogo sujo da vida</p>

<p>Kukukaya, eu quero isso aqui, ei<br />
Kukukaya, olha esse cachorro aqui, ei<br />
Kukukaya, eu quero isso aqui<br />
Kukukaya, olha esse cachorro aqui</p>

<p>S&atilde;o quatro jogadores nessa mesa<br />
Frente a frente, sem dar falsa folga a ningu&eacute;m<br />
S&atilde;o quatro cabras de peia<br />
De riso d&oacute;cil, de rima f&aacute;cil<br />
N&atilde;o v&aacute; se enganar, hein meu bem?</p>

<p>Eu tenho dois olhos, eu tenho dois p&eacute;s<br />
Dos meus olhos v&aacute; pra meus p&eacute;s<br />
Dos meus p&eacute;s, pra dentro da terra<br />
Da terra para a morte</p>

<p>O ovo &eacute; redondo, ventre redondo &eacute;<br />
Vem amor, vem com sa&uacute;de<br />
Onde eu sou chama seja voc&ecirc; brasa<br />
Onde eu sou chuva seja voc&ecirc; &aacute;gua<br />
Onde eu sou chama seja voc&ecirc; brasa<br />
Onde eu sou chuva seja voc&ecirc; &aacute;gua</p>

<p>Kukukaya, eu quero voc&ecirc; aqui<br />
Kukukaya, preste aten&ccedil;&atilde;o em mim<br />
Kukukaya, eu quero voc&ecirc; aqui<br />
Kukukaya, preste aten&ccedil;&atilde;o em mim<br />
</p>
',
'creditos' => '<p>Arranjo: Geraldo Azevedo e Z&eacute; Am&eacute;rico Bastos<br />
Teclados: Z&eacute; Am&eacute;rico Bastos<br />
Viola de 10 cordas e viol&atilde;o: Geraldo Azevedo<br />
Guitarra: Victor Biglione<br />
Percuss&atilde;o: Paulinho He-Man e Marcos Amma</p>
',
                'faixa_mp3' => '12_kukukaya_jogo_da_asa_da_bruxa.mp3', 
                'faixa_ogg' => '12_kukukaya_jogo_da_asa_da_bruxa.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Choveu Sorvete (La salve de las Antillas)',
                'compositor' => '(Luis Kalaff / Vers&atilde;o: Carlinhos Brown)',
                'letra' => '<p>Na gandaia com sol solista<br />
Viajar nesse ado&ccedil;ar<br />
Nas cantigas das coisas belas<br />
Da minha terra natal</p>

<p>Abar&aacute;, louro, bolo, molho<br />
Hoje quero saborear<br />
Os beijos da timbaleira<br />
Num cantinho l&aacute; dendo bar</p>

<p>Choveu sorvete<br />
Na minha origem<br />
Choveu sorvete<br />
Adeus princesa</p>

<p>Nas barracas dos santos, l&iacute;rios<br />
Haver&aacute; sempre uma cor<br />
Ressaindo das ruas velhas<br />
Servindo a vida de amor</p>

<p>Santa B&aacute;rbara, S&atilde;o Ger&ocirc;nimo<br />
E a Nan&atilde; Boroc&ocirc;<br />
Ox&oacute;ssi, Ogum de ronda<br />
Oxal&aacute; e pai Xang&ocirc;</p>

<p>Embala, bala, baleira<br />
E vamos na prociss&atilde;o<br />
A &aacute;gua de cheiro cheira<br />
Bonfim quer ver Concei&ccedil;&atilde;o</p>
',
'creditos' => '<p>Arranjo, piano e teclados: Z&eacute; Am&eacute;rico Bastos<br />
Contrabaixo: Arlindo Pipiu<br />
Guitarra: Zeppa Souza<br />
Bateria e percuss&atilde;o: Camilo Mariano<br />
Percuss&atilde;o: Paulinho He-Man e Marcos Amma<br />
Saxofone: Roberto Stepheson<br />
Trombone: Roberto Marques<br />
Trompete: Paulinho Trompete<br />
Vocais: Elba Ramalho, Jussara Louren&ccedil;o, Tadeu Mathias e Paulinho He-Man<br />
</p>
',
                'faixa_mp3' => '13_choveu_sorvete.mp3', 
                'faixa_ogg' => '13_choveu_sorvete.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Quem &eacute; Muito Querido a Mim',
                'compositor' => '(Geraldo Azevedo / Rog&eacute;rio Duarte) Participa&ccedil;&atilde;o Especial: Margareth Menezes',
                'letra' => '<p>Aquele que n&atilde;o inveja<br />
Que &eacute; amigo sincero<br />
De todos os seres vivos<br />
Que n&atilde;o tem senso de posse<br />
Que tem a mesma atitude<br />
Na tristeza ou na alegria<br />
Que &eacute; sempre determinado<br />
Tendo a mente e o intelecto<br />
Harmonizados comigo<br />
&Eacute; muito querido a mim<br />
Harmonizados comigo<br />
&Eacute; muito querido a mim</p>

<p>Quem nunca perturba os outros<br />
Nem se deixa perturbar<br />
Al&eacute;m da dualidade<br />
Do sofrimento e prazer<br />
Livre do medo e da ang&uacute;stia<br />
Tamb&eacute;m &eacute; muito querido<br />
Aquele que n&atilde;o se apega<br />
Nem ao prazer, nem &agrave; dor<br />
Que n&atilde;o rejeita ou deseja<br />
Ao que agrada ou aborrece<br />
Renunciando igualmente<br />
&Eacute; muito querido a mim<br />
Renunciando igualmente<br />
&Eacute; muito querido a mim</p>

<p>Quem age do mesmo modo<br />
Com amigos e inimigos<br />
E n&atilde;o muda de atitude<br />
No ostracismo ou na gl&oacute;ria<br />
No sucesso ou no fracasso<br />
Quem nunca se contamina<br />
E sempre fica contente<br />
Com o que lhe &eacute; oferecido<br />
Este me &eacute; muito querido<br />
&Eacute; muito querido a mim<br />
Este me &eacute; muito querido<br />
&Eacute; muito querido a mim<br />
</p>
',
'creditos' => '<p>Arranjo: Z&eacute; Am&eacute;rico Bastos<br />
Viol&atilde;o: Zeppa Souza<br />
Viol&atilde;o de 12 cordas e zig-zum: Luiz Bueno<br />
Contrabaixo: Jacar&eacute;<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o: Paulinho He-Man e Marcos Amma<br />
</p>
',
                'faixa_mp3' => '14_quem_e_muito_querido_a_mim.mp3', 
                'faixa_ogg' => '14_quem_e_muito_querido_a_mim.ogg',
                'disco_id' => '22',   ));


Musicas::create(
            array(
                'faixa' => 'Caldeir&atilde;o Dos Mitos',
                'compositor' => '(Br&aacute;ulio Tavares)',
                'letra' => '<p>Eu vi o c&eacute;u &agrave; meia-noite<br />
Se avermelhando num clar&atilde;o<br />
Como o inc&ecirc;ndio anunciado<br />
No Apocalipse de S&atilde;o Jo&atilde;o<br />
Por&eacute;m n&atilde;o era nada disso<br />
Era um corisco, era um lampi&atilde;o</p>

<p>Eu vi um risco nos espa&ccedil;os<br />
Era o rev&ocirc;o de um sanha&ccedil;&uacute;<br />
Eu vi o dia amanhecendo<br />
No ronco do maracatu<br />
N&atilde;o era a lan&ccedil;a de S&atilde;o Jorge<br />
Era o espinho do mandacaru</p>

<p>Eu vi um som na escadaria<br />
D&oacute;-re-mi-f&aacute; sol-l&aacute;-si-d&oacute;<br />
N&atilde;o era o eco das trombetas<br />
De Josu&eacute; em Jeric&oacute;<br />
Era um fole de oito baixo<br />
A tocar numa noite de forr&oacute;<br />
</p>
<p><em>A fogueira t&aacute; queimando<br />
Em homenagem a S&atilde;o Jo&atilde;o<br />
O forr&oacute; j&aacute; come&ccedil;ou<br />
Vamo gente rapap&eacute; nesse sal&atilde;o<br />
</em></p>
<p>Eu vi um som ao meio-dia<br />
No meio do ch&atilde;o do Cear&aacute;<br />
N&atilde;o era o coro dos arcanjos<br />
Nem era a voz de Jeov&aacute;<br />
Era uma cascavel armando um bote<br />
Balan&ccedil;ando o marac&aacute;</p>

<p>Vi um magrelo amarelado<br />
Passando a perna no patr&atilde;o<br />
N&atilde;o foi ningu&eacute;m da Inglaterra<br />
Nem de Paris, nem do Jap&atilde;o<br />
Era o Pedro Malazarte, era Jo&atilde;o Grilo<br />
E era Canc&atilde;o</p>

<p>Vi uma m&atilde;o fazer no barro<br />
Um homem forte, um homem nu<br />
Um homem branco como eu<br />
Um homem preto como tu<br />
Por&eacute;m n&atilde;o foi a m&atilde;o de Deus<br />
Foi Vitalino de Caruaru<br />
Por&eacute;m n&atilde;o foi a m&atilde;o de Deus<br />
Foi Vitalino de Caruaru<br />
Por&eacute;m n&atilde;o foi a m&atilde;o de Deus<br />
Foi Vitalino de Caruaru<br />
</p>

',
'creditos' => '
',
                'faixa_mp3' => '01_caldeirao_dos_mitos.mp3', 
                'faixa_ogg' => '01_caldeirao_dos_mitos.ogg',
                'disco_id' => '22',   ));
Musicas::create(
            array(
                'faixa' => 'Amor Com Caf&eacute;',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Se voc&ecirc; quiser o meu amor<br />
Tem que ser assim<br />
Agarradinho, escondidinho<br />
Bem bonitinho<br />
Somente pra mim</p>

<p>E de manh&atilde; cedo<br />
Fazer o caf&eacute;<br />
Trazer na cama<br />
Depois do caf&eacute;<br />
A gente se ama<br />
A gente se gama<br />
Depois do caf&eacute;</p>

<p>Ficar o dia inteiro<br />
Nesse d&aacute;-me, d&aacute;-me<br />
Nesse toma, toma<br />
Nesse pega, pega<br />
Nesse coma, coma<br />
Nessa brincadeira<br />
Sem ningu&eacute;m dar f&eacute;</p>

<p>Que o dia vai acabar<br />
E a noite j&aacute; vem<br />
O nosso amor pegando fogo<br />
Vamos se queimar<br />
Levar a vida nesse jogo<br />
Pra se ganhar<br />
Muito mais se querer bem<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '02_amor_com_cafe.mp3', 
                'faixa_ogg' => '02_amor_com_cafe.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Forr&oacute; do Xenhenh&eacute;m',
                'compositor' => '(Cec&eacute;u)',
                'letra' => '<p>Morena forrozeira do cangote suado<br />
T&ocirc; ficando arriado com voc&ecirc; meu bem<br />
Com esse rebolado teu corpinho fica mole<br />
E nesse bole-bole, nesse vai-e-vem<br />
O cora&ccedil;&atilde;o da gente chega lateja<br />
A gente s&oacute; deseja passar bem<br />
Com voc&ecirc; meu bem no xenhenh&eacute;m<br />
No xenhenh&eacute;m, no xenhenh&eacute;m<br />
Com voc&ecirc; meu bem no xenhenh&eacute;m<br />
No xenhenh&eacute;m, no xenhenh&eacute;m</p>

<p>Quem foi esse inteligente que inventou o forr&oacute;?<br />
Fez a morena levantar p&oacute;<br />
Ele &eacute; um artista, trabalhou bem<br />
E a morena forrozeira &eacute; de quem<br />
Tiver disposto pra ganhar no xenhenh&eacute;m</p>

<p>Xenhenh&eacute;m, xenhenh&eacute;m, xenhenh&eacute;m<br />
Xenhenh&eacute;m, xenhenh&eacute;m, xenhenh&eacute;m<br />
Xenhenh&eacute;m, xenhenh&eacute;m, xenhenh&eacute;m<br />
Vou fazer tudo pra ganhar no xenhenh&eacute;m<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '03_forro_do_xenhenhem.mp3', 
                'faixa_ogg' => '03_forro_do_xenhenhem.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Agora &eacute; Sua Vez',
                'compositor' => '(Zinho)',
                'letra' => '<p>Eu j&aacute; tomei de conta<br />
Eu j&aacute; dei meu recado<br />
J&aacute; fiz meu peneirado<br />
Com voc&ecirc; no forroz&atilde;o</p>

<p>Meu bem n&atilde;o diga n&atilde;o<br />
Meu bem diga que sim<br />
Agora &eacute; sua vez<br />
De tomar de conta de mim</p>

<p>Vem pra c&aacute; meu amor<br />
Vem pra c&aacute; meu amor<br />
Vem tomar de conta do meu cora&ccedil;&atilde;o<br />
Mas se voc&ecirc; disser que n&atilde;o<br />
N&atilde;o tem quentura no sal&atilde;o</p>

<p>Chega pra c&aacute;<br />
Vem se espalhar, meu bem<br />
Que a noite &eacute; nossa<br />
N&atilde;o se importe com ningu&eacute;m<br />
Meu bem<br />
Aqui no forroz&atilde;o<br />
Por favor, n&atilde;o diga n&atilde;o<br />
Vem pra c&aacute; meu bem querer</p>

<p>E nessa brincadeira<br />
Quem vai tomar de conta de mim &eacute; voc&ecirc;<br />
E nessa brincadeira<br />
Quem vai tomar de conta de mim &eacute; voc&ecirc;<br />
</p>
<p>Forr&oacute; das cumadres<br />
<em>(Jo&atilde;o Silva)</em><br />
</p>
<p>Olha comadre semana que vem<br />
No terreiro l&aacute; de casa semana que vem<br />
Vai ter uma sanfoneirada semana que vem<br />
Eu vou dar uma forrozada semana que vem</p>

<p>V&aacute; no gog&oacute; comadre, v&aacute; no gog&oacute;<br />
Pra gandalhada escangalhar-se no forr&oacute;<br />
V&aacute; no gog&oacute; comadre, v&aacute; no gog&oacute;<br />
Pra gandalhada escangalhar-se no forr&oacute;</p>

<p>&Ecirc;, &ecirc;ta, que coisa boa!<br />
Ningu&eacute;m gosta de forr&oacute; mais do que eu<br />
At&eacute; acho que esse povo &eacute; todo meu<br />
E de repente o mundo fica miudinho<br />
E &eacute; por isso que eu s&oacute; dan&ccedil;o agarradinha</p>

<p>Duas coisas dou valor<br />
&Eacute; o forr&oacute; com sanfoninha<br />
E o fungar do meu amor<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '04_agora_e_sua_vez_forro_das_cumadres.mp3', 
                'faixa_ogg' => '04_agora_e_sua_vez_forro_das_cumadres.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => '&Eacute; d&rsquo;Oxum',
                'compositor' => '(Ger&ocirc;nimo / Vev&eacute; Calazans) Participa&ccedil;&atilde;o Especial: Ger&ocirc;nimo',
                'letra' => '<p>Nessa cidade todo mundo &eacute; d&rsquo;Oxum<br />
Homem, menino, menina, mulher<br />
Toda essa gente irradia magia</p>

<p>Presente na &aacute;gua doce<br />
Presente na &aacute;gua salgada<br />
E toda cidade brilha</p>

<p>Seja tenente ou filho de pescador<br />
Ou importante desembargador<br />
Se der presente &eacute; tudo uma coisa s&oacute;</p>

<p>A for&ccedil;a que mora n&rsquo;&aacute;gua<br />
N&atilde;o faz distin&ccedil;&atilde;o de cor<br />
E toda a cidade &eacute; d&rsquo;Oxum</p>

<p>&Eacute; d&rsquo;Oxum, &eacute; d&rsquo;Oxum<br />
&Eacute; d&rsquo;Oxum</p>

<p>Eu vou navegar<br />
Eu vou navegar nas ondas do mar<br />
Eu vou navegar<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '05_e_doxum.mp3', 
                'faixa_ogg' => '05_e_doxum.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Pisa Na Ful&ocirc;',
                'compositor' => 'Jo&atilde;o do Vale / Ernesto Pires / Silveira J&uacute;nior',
                'letra' => '<p>Pisa na ful&ocirc;<br />
Pisa na ful&ocirc;<br />
Pisa na ful&ocirc;<br />
N&atilde;o maltrate meu amor</p>

<p>Um dia desse<br />
Eu fui dan&ccedil;ar l&aacute; em Pedreira<br />
Na rua da golada<br />
Gostei da brincadeira<br />
Z&eacute; Caxang&aacute; era o tocador<br />
Mas s&oacute; tocava &ldquo;Pisa na ful&ocirc;&rdquo;</p>

<p>Eu vi menina<br />
Nem tinha doze anos<br />
Agarrar seu par<br />
Tamb&eacute;m sair dan&ccedil;ando<br />
Satisfeita e dizendo<br />
&ldquo;Meu amor, ai como &eacute; gostoso<br />
Pisa no ful&ocirc;&rdquo;<br />
</p>
<p><strong>Choror&ocirc;</strong><br />
<em>(Gilberto Gil)</em><br />
</p>
<p>Tenho pena de quem chora<br />
De quem chora tenho d&oacute;<br />
Quando o choro de quem chora<br />
N&atilde;o &eacute; choro, &eacute; choror&ocirc;</p>

<p>Quando uma pessoa chora seu choro baixinho<br />
De l&aacute;grima a correr pelo cantinho do olhar<br />
N&atilde;o se pode duvidar<br />
Da raz&atilde;o daquela dor<br />
N&atilde;o se pode atrapalhar<br />
Sentindo seja o que for</p>

<p>Mas quando a pessoa chora o choro em desatino<br />
Batendo pino como quem vai se arrebentar<br />
A&iacute; penso que &eacute; melhor<br />
Ajudar aquela dor<br />
A encontrar o seu lugar<br />
No meio do choror&ocirc;</p>

<p>Choror&ocirc;, choror&ocirc;, choror&ocirc;<br />
&Eacute; muita &aacute;gua, &eacute; magoa, &eacute; jeito bobo de chorar<br />
Choror&ocirc;, choror&ocirc;, choror&ocirc;<br />
&Eacute; m&aacute;goa, &eacute; muita &aacute;gua, a gente pode se afogar</p>

<p>Choror&ocirc;, choror&ocirc;, choror&ocirc;<br />
&Eacute; muita &aacute;gua, &eacute; magoa, &eacute; jeito bobo de chorar<br />
Choror&ocirc;, choror&ocirc;, choror&ocirc;<br />
&Eacute; muita m&aacute;goa, &eacute; &aacute;gua, a gente pode se afogar<br />
</p>
<p><strong>No meu p&eacute; de serra</strong><br />
<em>(Luiz Gonzaga)</em><br />
</p>
<p>L&aacute; no meu p&eacute; de serra<br />
Deixei ficar meu cora&ccedil;&atilde;o<br />
Ai que saudades tenho<br />
Eu vou voltar pro meu sert&atilde;o</p>

<p>No meu ro&ccedil;ado eu trabalhava todo dia<br />
Mas no meu rancho eu tinha tudo que queria<br />
L&aacute; se dan&ccedil;ava quase toda quinta-feira<br />
Sanfona n&atilde;o faltava e tome xote a noite inteira</p>

<p>O xote &eacute; bom<br />
De se dan&ccedil;ar<br />
A gente gruda na cabocla sem soltar<br />
Um passo l&aacute;<br />
Um outro c&aacute;<br />
Enquanto o fole t&aacute; tocando<br />
T&aacute; gemendo, t&aacute; chorando, t&aacute; fungando<br />
Reclamando sem parar<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '06_pisa_na_fulo_chororo_no_meu_pe_de_serra.mp3', 
                'faixa_ogg' => '06_pisa_na_fulo_chororo_no_meu_pe_de_serra.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Av&ocirc;hai',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>Um velho cruza a soleira<br />
De botas longas, de barbas longas<br />
De ouro o brilho do seu colar<br />
Na laje fria onde quarava sua camisa<br />
E seu alforje de ca&ccedil;ador</p>

<p>&Ocirc; meu velho e invis&iacute;vel av&ocirc;hai<br />
&Oacute; meu velho e indivis&iacute;vel av&ocirc;hai</p>

<p>Neblina turva e brilhante<br />
Em meu c&eacute;rebro co&aacute;gulos de sol<br />
A manita matutina<br />
E que transparente cortina ao meu redor</p>

<p>E se eu disser que &eacute; mei sabido<br />
Voc&ecirc; diz que &eacute; mei pior<br />
Mais e pior do que planeta<br />
Quando perde o girassol</p>

<p>Era o ter&ccedil;o de brilhante nos dedos de minha av&oacute;<br />
E nunca mais eu tive medo da porteira<br />
Nem tamb&eacute;m da companheira<br />
Que nunca dormia s&oacute;</p>

<p>Av&ocirc;hai!<br />
Av&ocirc;hai!</p>

<p>Um brejo cruza a poeira<br />
De fato existe num tom mais leve<br />
Na palidez desse pessoal<br />
Pares de olhos t&atilde;o profundos<br />
Que amargam as pessoas que fitar</p>

<p>Mas que bebem sua vida<br />
Sua alma na altura que mandar<br />
S&atilde;o os olhos, s&atilde;o as asas<br />
Cabelos de av&ocirc;hai</p>

<p>Na pedra de turmalina<br />
E no terreiro da usina eu me criei<br />
Voava de madrugada<br />
E na cratera condenada eu me calei</p>

<p>Se eu calei foi de tristeza<br />
Voc&ecirc; cala por calar<br />
E calado vai ficando<br />
S&oacute; fala quando eu mandar</p>

<p>Rebuscando a consci&ecirc;ncia com medo de viajar<br />
At&eacute; o meio da cabe&ccedil;a do cometa<br />
Girando na carrapeta<br />
No jogo de improvisar</p>

<p>Entrecortando<br />
Eu sigo dentro a linha reta<br />
Eu tenho a palavra certa<br />
Pra doutor n&atilde;o reclamar</p>

<p>Av&ocirc;hai! Av&ocirc; e pai<br />
Av&ocirc;hai!<br />
Av&ocirc;hai!<br />
Av&ocirc;hai<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '07_avohai.mp3', 
                'faixa_ogg' => '07_avohai.ogg',
                'disco_id' => '22',   ));
Musicas::create(
            array(
                'faixa' => 'Le&atilde;o Do Norte',
                'compositor' => '(Lenine / Paulo C&eacute;sar Pinheiro)',
                'letra' => '<p>Eu sou mameluco<br />
Sou de Casa Forte<br />
Sou de Pernambuco<br />
Eu sou o Le&atilde;o do Norte</p>

<p>Sou cora&ccedil;&atilde;o do folclore nordestino<br />
Eu sou Mateus e Basti&atilde;o do boi bumb&aacute;<br />
Sou o boneco de mestre Vitalino<br />
Dan&ccedil;ando uma ciranda em Itamarac&aacute;</p>

<p>Eu sou um verso de Carlos Pena Filho<br />
Num frevo de Capiba<br />
Ao som da Orquestra Armorial<br />
Sou Capibaribe num livro de Jo&atilde;o Cabral</p>

<p>Sou mamulengo de S&atilde;o Bento da Una<br />
Vindo num baque solto de um maracatu<br />
Eu sou um auto de Ariano Suassuna<br />
No meio da feira de Caruaru</p>

<p>Sou Frei Caneca no Pastoril do Faceta<br />
Levando a Flor da Lira pra Nova Jerusal&eacute;m<br />
Sou Luiz Gonzaga<br />
E eu sou do mangue tamb&eacute;m</p>

<p>Sou Macambira de Joaquim Cardoso<br />
Banda da Pife no mei do carnaval<br />
Na noite dos tambores silenciosos<br />
Sou a calunga revelando o carnaval</p>

<p>Sou a folia que desce l&aacute; de Olinda<br />
O Homem da Meia-Noite<br />
Eu sou puxando esse cord&atilde;o<br />
Sou jangadeiro na festa de Jaboat&atilde;o<br />
</p>

',
'creditos' => '
',
                'faixa_mp3' => '08_leao_do_norte.mp3', 
                'faixa_ogg' => '08_leao_do_norte.ogg',
                'disco_id' => '22',   ));


Musicas::create(
            array(
                'faixa' => 'Batida De Trem',
                'compositor' => '(Vicente Barreto / Carlos Pita)',
                'letra' => '<p>Cantando esse bai&atilde;o<br />
Aperriado com a sorte<br />
Felicidade n&atilde;o vem<br />
&Eacute; uma cantiga de cego<br />
&Eacute; uma sanfona tocando<br />
Parece batida de trem</p>

<p>Sou cantador da alegria<br />
Me chamam de Andorinha<br />
Nas festas l&aacute; do sert&atilde;o<br />
Estrela da primavera<br />
Pra onde for vou com ela<br />
Pra esquecer da solid&atilde;o</p>

<p>Pra entrar nesse forr&oacute;<br />
Vem meu amor<br />
Do seu nego tenha d&oacute;<br />
Vem meu amor<br />
Ponha a m&atilde;o no cora&ccedil;&atilde;o<br />
Vem meu amor<br />
Pra meu bem n&atilde;o ficar s&oacute;<br />
Vem meu amor<br />
</p>
<p><strong>Toque de fole</strong><br />
<em>(Bastinho Calixto / Ana Paula)</em></p>

<p>Toque sanfoneiro<br />
Um forr&oacute; bem animado<br />
Com cad&ecirc;ncia de xaxado<br />
Da poeira levantar</p>

<p>Toque sanfoneiro<br />
Que as mulheres t&atilde;o visando<br />
O fole frouxo tocando<br />
Castigando a nota l&aacute;</p>

<p>Toque sanfoneiro<br />
Mostre que &eacute; velho macho<br />
Capriche nos oito baixos<br />
At&eacute; o dia clarear</p>

<p>Toque sanfoneiro, toque<br />
Porque a gente quer se esbaldar<br />
Toque sanfoneiro, toque<br />
Porque a gente quer dan&ccedil;ar</p>

<p>Dedo no couro &eacute; pandeirada<br />
M&atilde;o no zabumba &eacute; zabumbada<br />
E no tri&acirc;ngulo &eacute; trianglada, oi<br />
Dedo no fole &eacute; forrozada<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '09_batida_de_trem_toque_de_fole.mp3', 
                'faixa_ogg' => '09_batida_de_trem_toque_de_fole.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Roendo Unha',
                'compositor' => '(Luiz Gonzaga / Luiz Ramalho)',
                'letra' => '<p>Quando Vinvin cantou<br />
Corri pra ver voc&ecirc;<br />
Atr&aacute;s da serra, o sol tava pra se esconder<br />
Quando voc&ecirc; partiu<br />
Eu n&atilde;o me esque&ccedil;o mais<br />
Meu cora&ccedil;&atilde;o, amor, partiu atr&aacute;s</p>

<p>Vivo com os olhos na ladeira<br />
Quando vejo uma poeira<br />
Penso logo que &eacute; voc&ecirc;<br />
Vivo de orelha levantada<br />
Para o lado da estrada<br />
Que atravessa o mu&ccedil;amb&ecirc;<br />
Olha que eu j&aacute; t&ocirc; roendo unha<br />
A saudade &eacute; testemunha<br />
Do que agora vou dizer<br />
Quando na janela eu me debru&ccedil;o<br />
Meu cantar &eacute; um solu&ccedil;o<br />
A galopar no ma&ccedil;ap&ecirc;<br />
</p>
<p><strong>No som da sanfona</strong><br />
<em>(Kak&aacute; do Asfalto / Jackson do Pandeiro)</em><br />
</p>
<p>Ouvi o toque da sanfona me chamar<br />
Ouvi o toque da sanfona me chamar</p>

<p>Um sanfoneiro bem maneiro puxe o fole<br />
Folia a noite inteira at&eacute; o dia clarear<br />
O cabra vem se aconchegando, se relando<br />
Quando o pagode esquenta<br />
Ningu&eacute;m quer sair de l&aacute;</p>

<p>&Ecirc;ta pagode que t&aacute; bom<br />
Que t&aacute; danado<br />
Morena aqui do lado faz o boneco chorar<br />
Chora, n&atilde;o chora<br />
Morena disse que chora<br />
No som de uma viola faz o corpo balan&ccedil;ar</p>

<p>Quem &eacute; sambeiro, batuqueiro, forrozeiro<br />
Tem privil&eacute;gio agora so&ccedil;aite particular<br />
Agora toda classe alta quer xaxar<br />
Forr&oacute; de brasileiro chegou em todo lugar<br />
</p>
<p><strong>Morena de Angola</strong><br />
<em>(Chico Buarque)</em><br />
</p>
<p>Morena de Angola<br />
Que leva o chocalho amarrado na canela<br />
Ser&aacute; que ela mexe o chocalho<br />
Ou o chocalho &eacute; que mexe com ela</p>

<p>Ser&aacute; que a morena cochila<br />
Escutando o cochicho do chocalho<br />
Ser&aacute; que desperta gingando<br />
J&aacute; sai chocalhando pro trabalho</p>

<p>Ser&aacute; que ela t&aacute; na cozinha<br />
Guisando a galinha &agrave; cabidela<br />
Ser&aacute; que esqueceu da galinha<br />
Ficou batucando na panela</p>

<p>Ser&aacute; que no meio da mata, na moita<br />
A morena inda chocalha<br />
Ser&aacute; que ela n&atilde;o fica afoita<br />
Pra dan&ccedil;ar na chama da batalha</p>

<p>Morena de Angola<br />
Que leva o chocalho amarrado na canela<br />
Passando pelo regimento<br />
Ela faz requebrar a sentinela</p>

<p>Ser&aacute; que quando vai pra cama<br />
A morena se esquece dos chocalhos<br />
Ser&aacute; que namora fazendo bochincho<br />
Com seus penduricalhos</p>

<p>Ser&aacute; que ela t&aacute; caprichando<br />
No peixe que eu trouxe de Benguela<br />
Ser&aacute; que t&aacute; no remelexo<br />
Abandonou meu peixe na tigela</p>

<p>Ser&aacute; que quando fica choca<br />
P&otilde;e de quarentena o seu chocalho<br />
Ser&aacute; que depois ela bota<br />
A canela no nicho do pirralho</p>

<p>Morena de Angola<br />
Que leva o chocalho amarrado na canela<br />
Acho que deixei um cacho<br />
Do meu cora&ccedil;&atilde;o na Catumbela</p>

<p>Morena de Angola<br />
Que leva o chocalho amarrado na canela<br />
Morena, bichinha danada<br />
Minha camarada do MPLA<br />
</p>


',
'creditos' => '
',
                'faixa_mp3' => '10_roendo_unha_no_som_da_sanfona_morena_de_angola.mp3', 
                'faixa_ogg' => '10_roendo_unha_no_som_da_sanfona_morena_de_angola.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Pagode Russo',
                'compositor' => '(Luiz Gonzaga / Jo&atilde;o Silva)',
                'letra' => '<p>Ontem eu sonhei que tava em Moscou<br />
Dan&ccedil;ando pagode russo na boate Cossacou<br />
Ontem eu sonhei que tava em Moscou<br />
Dan&ccedil;ando pagode russo na boate Cossacou</p>

<p>Parecia at&eacute; um frevo naquele vai ou n&atilde;o vai<br />
Parecia at&eacute; um frevo naquele cai ou n&atilde;o cai<br />
Parecia at&eacute; um frevo naquele vai ou n&atilde;o vai<br />
Parecia at&eacute; um frevo naquele cai ou n&atilde;o cai</p>

<p>Entra cossaco, cossaco dan&ccedil;a agora<br />
Na dan&ccedil;a do cossaco, n&atilde;o fica cossaco fora<br />
Entra cossaco, cossaco dan&ccedil;a agora<br />
Na dan&ccedil;a do cossaco, n&atilde;o fica cossaco fora</p>
<p><strong>Onde tu t&aacute; nen&eacute;m</strong><br />
<em>(Luis Bandeira)</em><br />
</p>
<p>Onde tu t&aacute; nen&eacute;m<br />
Eu vim te procurar<br />
Vamos fazer as pazes<br />
Tenho tantas frases pra te agradar</p>

<p>Onde tu t&aacute; nen&eacute;m<br />
Eu vim te procurar<br />
Saudade sai me solta<br />
Estou aqui de volta pra meu bem beijar</p>

<p>Estou aqui de novo junto ao meu povo<br />
Minha gente amiga<br />
Quem me conhece sabe<br />
Que eu detesto intriga</p>

<p>Uma saudade enorme<br />
Come e deita e dorme no meu cora&ccedil;&atilde;o<br />
Rem&eacute;dio indicado pra quem est&aacute; errado<br />
&Eacute; pedir perd&atilde;o</p>

<p>Por uma briga &agrave; toa<br />
Tanta coisa boa a gente t&aacute; perdendo<br />
Sert&atilde;o em noite branca<br />
O dia amanhecendo</p>

<p>Nossa conversa linda<br />
Tem segredo ainda para um s&eacute;culo mais<br />
N&atilde;o &eacute; pra nos gabar<br />
Mas n&atilde;o existe um par como n&oacute;s dois se faz<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '11_pagode_russo_onde_tu_ta_nenem.mp3', 
                'faixa_ogg' => '11_pagode_russo_onde_tu_ta_nenem.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Olha Pro C&eacute;u',
                'compositor' => '(Luiz Gonzaga / Jos&eacute; Fernandes)',
                'letra' => '<p>Olha pro c&eacute;u, meu amor<br />
Veja como ele est&aacute; lindo<br />
Olha praquele bal&atilde;o multicor<br />
Que l&aacute; c&eacute;u vai sumindo</p>

<p>Foi numa noite igual a esta<br />
Que tu me deste o teu cora&ccedil;&atilde;o<br />
O c&eacute;u estava todinho em festa<br />
Pois era noite de S&atilde;o Jo&atilde;o</p>

<p>Havia bal&otilde;es no ar<br />
Xote e bai&atilde;o no sal&atilde;o<br />
E no terreiro o seu olhar<br />
Que incendiou meu cora&ccedil;&atilde;o<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '12_olha_pro_ceu.mp3', 
                'faixa_ogg' => '12_olha_pro_ceu.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Boca Do Bal&atilde;o',
                'compositor' => '(Moraes Moreira / Zeca Barreto / Fred G&oacute;es)',
                'letra' => '<p>Na cidade grande<br />
Por mais que eu ande<br />
Ainda me espanto<br />
Quando ou&ccedil;o uma explos&atilde;o</p>

<p>L&aacute; no interior sempre era S&atilde;o Jo&atilde;o<br />
L&aacute; no interior sempre era S&atilde;o Jo&atilde;o</p>

<p>Viva S&atilde;o Jo&atilde;o<br />
Meu carneirinho<br />
Como te esperei<br />
Ano inteirinho</p>

<p>Ao p&eacute; da fogueira<br />
Madeira, velame<br />
Que o nosso amor inflame a noite inteira<br />
Na esteira ou no ch&atilde;o<br />
A gente se esquenta<br />
E arrebenta a boca do bal&atilde;o<br />
</p>
<p><strong>S&atilde;o Jo&atilde;o na estrada</strong><br />
<em>(Moraes Moreira)</em><br />
</p>
<p>No m&ecirc;s de junho<br />
Tenho Deus por testemunho<br />
Com meu viol&atilde;o em punho<br />
Vou fazer o S&atilde;o Jo&atilde;o<br />
Tomar licor, menino, fazer eu vou<br />
A festa do interior<br />
E tamb&eacute;m da capital</p>

<p>Vou pra Natal e l&aacute; no circo da folia<br />
Vai amanhecer o dia<br />
E todo mundo no forr&oacute;<br />
L&aacute; em Timbau no forr&oacute; do seu Patr&iacute;cio<br />
Vai ter fogos de artif&iacute;cios<br />
Tamb&eacute;m l&aacute; em Mossor&oacute;</p>

<p>Em Jo&atilde;o Pessoa<br />
Soa bem esse galope<br />
Tem quem dance e tem quem toque<br />
Com que anima&ccedil;&atilde;o<br />
Santa Luzia, guia meus passos, me mande<br />
Al&eacute;m de Campina Grande, Sousa e toda a regi&atilde;o</p>

<p>Em Fortaleza com certeza um ouri&ccedil;o<br />
Juazeiro e Padim Ci&ccedil;o tamb&eacute;m vai dan&ccedil;ar bai&atilde;o<br />
Em Macei&oacute; quero ver bal&atilde;o no c&eacute;u<br />
Arapiraca e S&atilde;o Miguel<br />
Dando viva a S&atilde;o Jo&atilde;o</p>

<p>N&atilde;o pode parar o sanfoneiro<br />
N&atilde;o pode parar o cora&ccedil;&atilde;o<br />
S&oacute; pode parar a guerra<br />
</p>
<p>Quero paz na terra<br />
E no c&eacute;u bal&atilde;o</p>

<p>Em Teresina, como se faz todo ano<br />
Parna&iacute;ba e Floriano tamb&eacute;m v&atilde;o comemorar<br />
Vou caminhando, vou chegando at&eacute; Recife<br />
Meu amor quem foi que disse<br />
Que n&atilde;o tem Caruaru?</p>

<p>Aracaju tem caju e tem castanha<br />
Gente aprende, gente apanha<br />
Nessa vida de estradeiro<br />
Em Salvador<br />
Vou chegar l&aacute; na Bahia<br />
L&aacute; na terra da alegria<br />
Vai ser festa o ano inteiro<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '13_boca_do_balao_sao_joao_na_estrada.mp3', 
                'faixa_ogg' => '13_boca_do_balao_sao_joao_na_estrada.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'De Volta Pro Aconchego',
                'compositor' => '(Dominguinhos / Nando Cordel)',
                'letra' => '<p>Estou de volta pro meu aconchego<br />
Trazendo na mala bastante saudade<br />
Querendo um sorriso sincero, um abra&ccedil;o<br />
Para aliviar meu cansa&ccedil;o<br />
E toda essa minha vontade</p>

<p>Que bom poder t&aacute; contigo de novo<br />
Ro&ccedil;ando teu corpo e beijando voc&ecirc;<br />
Pra mim tu &eacute;s a estrela mais linda<br />
Teus olhos me prendem, fascinam<br />
A paz que eu gosto de ter</p>

<p>&Eacute; duro ficar sem voc&ecirc; vez em quando<br />
Parece que falta um peda&ccedil;o de mim<br />
Me alegro na hora de regressar<br />
Parece que vou mergulhar<br />
Na felicidade sem fim<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '14_de_volta_pro_aconchego.mp3', 
                'faixa_ogg' => '14_de_volta_pro_aconchego.ogg',
                'disco_id' => '22',   ));

Musicas::create(
            array(
                'faixa' => 'Caravana',
                'compositor' => '(Geraldo Azevedo / Alceu Valença)',
                'letra' => '<p>Corra, n&atilde;o pare<br />
N&atilde;o pense demais<br />
Repare essas velas no cais<br />
Que a vida &eacute; cigana</p>

<p>&Eacute; caravana<br />
&Eacute; pedra de gelo ao sol<br />
Degelou teus olhos t&atilde;o s&oacute;s<br />
Num mar de &aacute;gua clara<br />
</p>
',
'creditos' => '<p>Cantam: <strong>Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</strong></p>
<p>Viol&otilde;es: Geraldo Azevedo e Z&eacute; Ramalho<br />
Cello: Lui Coimbra<br />
Flauta: Cesar Michilles<br />
</p>
',
                'faixa_mp3' => '01_caravana.mp3', 
                'faixa_ogg' => '01_caravana.ogg',
                'disco_id' => '23',   ));

Musicas::create(
            array(
                'faixa' => 'T&aacute;xi Lunar',
                'compositor' => '(Geraldo Azevedo / Z&eacute; Ramalho / Alceu Valen&ccedil;a)',
                'letra' => '<p>Ela me deu o seu amor, eu tomei<br />
No dia dezesseis de maio, viajei<br />
De espa&ccedil;onave atropelado, procurei<br />
O meu amor aperreado</p>

<p>Apenas apanhei na beira-mar<br />
Um t&aacute;xi pra esta&ccedil;&atilde;o lunar<br />
Apenas apanhei na beira-mar<br />
Um t&aacute;xi pra esta&ccedil;&atilde;o lunar</p>

<p>Bela linda criatura, bonita<br />
Nem menina, nem mulher<br />
Tem espelho no seu rosto de neve<br />
Nem menina, nem mulher</p>

<p>Pela sua cabeleira, vermelha<br />
Pelos raios desse sol lil&aacute;s<br />
Pelo fogo do seu corpo, centelha<br />
Belos raios desse sol<br />
</p>
',
'creditos' => '<p>cantam: <strong>Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</strong></p>
<p>Viol&otilde;es: Geraldo Azevedo, Elba Ramalho e Z&eacute; Ramalho<br />
Acordeom: Marcos Farias<br />
Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes<br />
Cello: Lui Coimbra<br />
Sax soprano: Cesar Michilles<br />
</p>

',
                'faixa_mp3' => '02_taxi_lunar.mp3', 
                'faixa_ogg' => '02_taxi_lunar.ogg',
                'disco_id' => '23',   ));
Musicas::create(
            array(
                'faixa' => 'Dona Da Minha Cabe&ccedil;a',
                'compositor' => '(Geraldo Azevedo / Fausto Nilo)',
                'letra' => '<p>Dona da minha cabe&ccedil;a<br />
Ela vem como um carnaval<br />
Toda paix&atilde;o recome&ccedil;a<br />
Ela &eacute; bonita, &eacute; demais</p>

<p>N&atilde;o h&aacute; um porto seguro<br />
Futuro tamb&eacute;m n&atilde;o h&aacute;<br />
Mas faz tanta diferen&ccedil;a<br />
Quando ela dan&ccedil;a, dan&ccedil;a</p>

<p>Eu digo e ela n&atilde;o acredita<br />
Ela &eacute; bonita demais<br />
Eu digo e ela n&atilde;o acredita<br />
Ela &eacute; bonita, bonita</p>

<p>Dona da minha cabe&ccedil;a<br />
Quero tanto lhe ver chegar<br />
Quero saciar minha sede<br />
Milh&otilde;es de vezes, milh&otilde;es de vezes</p>

<p>Na for&ccedil;a dessa beleza<br />
&Eacute; que eu sinto firmeza e paz<br />
Por isso nunca desapare&ccedil;a<br />
Nunca me esque&ccedil;a<br />
Que eu n&atilde;o esque&ccedil;o jamais<br />
</p>
',
'creditos' => '<p><strong>Canta: Geraldo Azevedo</strong></p>
<p>Viol&atilde;o: Geraldo Azevedo<br />
Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes<br />
Cello: Lui Coimbra<br />
Sax soprano: Cesar Michilles<br />
</p>
',
                'faixa_mp3' => '03_dona_da_minha_cabeca.mp3', 
                'faixa_ogg' => '03_dona_da_minha_cabeca.ogg',
                'disco_id' => '23',   ));

Musicas::create(
            array(
                'faixa' => 'Canta Brasil',
                'compositor' => '(Alcyr Pires Vermelho / David Nasser)',
                'letra' => '<p>As selvas te deram das noites teus ritmos b&aacute;rbaros<br />
E os negros trouxeram de longe reservas de pranto<br />
Os brancos falaram de amor em suas can&ccedil;&otilde;es<br />
E dessa mistura de vozes nasceu o seu canto</p>

<p>Brasil, minha voz enternecida<br />
J&aacute; dourou os teus bras&otilde;es<br />
Na express&atilde;o mais comovida<br />
Das mais ardentes can&ccedil;&otilde;es</p>

<p>Tamb&eacute;m, na beleza desse c&eacute;u<br />
Onde o azul &eacute; mais azul<br />
Na aquarela do Brasil<br />
Eu cantei de norte a sul</p>

<p>Mas agora o teu cantar<br />
Meu Brasil quero escutar<br />
Nas preces da sertaneja<br />
Nas ondas do rio-mar</p>

<p>&Ocirc;, esse rio turbilh&atilde;o<br />
Entre selvas de roj&atilde;o<br />
Continente a caminhar</p>

<p>No c&eacute;u, no mar, na terra<br />
Canta Brasil<br />
No c&eacute;u, no mar, na terra<br />
Canta Brasil<br />
</p>
',
'creditos' => '<p><strong>Cantam: Geraldo Azevedo e Moraes Moreira</strong></p>
<p>Viol&otilde;es: Geraldo Azevedo e Moraes Moreira</p>
',
                'faixa_mp3' => '04_canta_brasil.mp3', 
                'faixa_ogg' => '04_canta_brasil.ogg',
                'disco_id' => '23',   ));

Musicas::create(
            array(
                'faixa' => 'Frisson',
                'compositor' => '(Tunai / Sergio Natureza)',
                'letra' => '<p>Meu cora&ccedil;&atilde;o pulou<br />
Voc&ecirc; chegou, me deixou assim<br />
Com os p&eacute;s fora do ch&atilde;o<br />
Pensei: que bom<br />
Parece, enfim, acordei</p>

<p>Pra renovar meu ser<br />
Faltava mesmo chegar voc&ecirc;<br />
Assim, sem me avisar<br />
E acelerar<br />
Um cora&ccedil;&atilde;o que j&aacute; bate pouco</p>

<p>De tanto procurar por outro<br />
Anda cansado<br />
Mas quando voc&ecirc; est&aacute; do lado<br />
Fica louco de satisfa&ccedil;&atilde;o<br />
Solid&atilde;o nunca mais</p>

<p>Voc&ecirc; caiu do c&eacute;u<br />
Um anjo lindo que apareceu<br />
Com olhos de cristal<br />
Enfeiti&ccedil;ou<br />
Eu nunca vi nada igual</p>

<p>De repente<br />
Voc&ecirc; surgiu na minha frente<br />
Luz cintilante<br />
Estrela em forma de gente<br />
Invasora do planeta amor<br />
Voc&ecirc; me conquistou</p>

<p>Me olha<br />
Me toca<br />
Me faz sentir<br />
Que &eacute; hora, agora<br />
Da gente ir<br />
</p>

',
'creditos' => '<p><strong>Canta: Elba Ramalho</strong></p>
<p>Viol&atilde;o: Geraldo Azevedo<br />
Acordeom: Marcos Farias<br />
Percuss&atilde;o: Paulinho He-Man<br />
Flauta: Cesar Michilles<br />
</p>

',
                'faixa_mp3' => '05_frisson.mp3', 
                'faixa_ogg' => '05_frisson.ogg',
                'disco_id' => '23',   ));

Musicas::create(
            array(
                'faixa' => 'L&aacute; e C&aacute;',
                'compositor' => '(Lenine / Sergio Natureza)',
                'letra' => '<p>Mangueira, Il&ecirc; Ay&ecirc; e viva o baticum<br />
Quando a Padre Miguel encontra com Olodum<br />
Caymmi com Noel, em Tom maior Jobim<br />
A Penha, a Candel&aacute;ria, o Senhor do Bonfim</p>

<p>Irm&atilde;o S&atilde;o Salvador e S&atilde;o Sebasti&atilde;o<br />
Tamborim, berimbau na marca&ccedil;&atilde;o<br />
Pontal do Arpoador, final de Itapo&atilde;<br />
Meninos do Pel&ocirc;, da Flor do Amanh&atilde;</p>

<p>Diga a&iacute;, diga l&aacute;<br />
Voc&ecirc; j&aacute; foi &agrave; Bahia, nego? N&atilde;o?<br />
Ent&atilde;o v&aacute;, ent&atilde;o v&aacute;<br />
Diga l&aacute;, diga a&iacute;<br />
Voc&ecirc; j&aacute; foi at&eacute; o Rio, nega? N&atilde;o?<br />
Tem que ir, tem que ir</p>

<p>Rocinha faz parelha l&aacute; com Curuzu<br />
Centelha, luz, ax&eacute; que vem do fundo azul<br />
Do c&eacute;u, do mar, de Mar&eacute; at&eacute; Maric&aacute;<br />
No reino de &aacute;gua e sal de m&atilde;e Iemanj&aacute;</p>

<p>&Eacute; tanta coisa afim, tanto l&aacute; como c&aacute;<br />
Tem Barras, Piedades e Jardim de Alah<br />
S&atilde;o trios e afox&eacute;s, blocos de empolga&ccedil;&atilde;o<br />
De arranco, negro e branco, tudo de rod&atilde;o</p>

<p>Jo&atilde;o, Benjor, Cartola<br />
Da Viola, Gil, Vel&ocirc;<br />
Coquejo, Alcyvando<br />
Chico, Ciro, Osmar, Dod&ocirc;</p>

<p>Geraldos e Ederaldos<br />
Elton, Candeia e Xang&ocirc;<br />
Rufino, Aldir, Patinhas<br />
Da Vila, Ismael, Mel&ocirc;</p>

<p>Monsueto e Batatinha<br />
Silas, Ciata e Sinh&ocirc;<br />
Salve M&atilde;e Menininha<br />
Clementina voz da cor</p>

<p>Al&ocirc; Carlos Cacha&ccedil;a<br />
Pedra Noventa falou<br />
Valeu Rio e Bahia<br />
Simpatia &eacute; quase amor<br />
</p>
',
'creditos' => '<p><strong>Cantam: Elba Ramalho e Lenine</strong></p>
<p>Viol&atilde;o: Lenine<br />
Percuss&atilde;o: Paulinho He-Man<br />
</p>
',
                'faixa_mp3' => '06_la_e_ca.mp3', 
                'faixa_ogg' => '06_la_e_ca.ogg',
                'disco_id' => '23',   ));

Musicas::create(
            array(
                'faixa' => 'A peleja Do Diabo Com o Dono Do C&eacute;u',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>Mas com tanto dinheiro girando no mundo<br />
Quem tem pede muito<br />
Quem n&atilde;o tem, pede mais<br />
Cobi&ccedil;am a terra e toda riqueza<br />
Do reino dos homens e dos animais</p>

<p>Cobi&ccedil;am at&eacute; a plan&iacute;cie dos sonhos<br />
Lugares eternos para descansar<br />
A terra do verde que foi prometido<br />
At&eacute; que se cansem de tanto esperar<br />
Que eu n&atilde;o vim de longe para me enganar<br />
Que eu n&atilde;o vim de longe para me enganar<br />
Que eu n&atilde;o vim de longe para me enganar</p>

<p>Mas o templo do homem, a mulher e o filho<br />
O gado novilho urra no cural<br />
Vaqueiros que tangem a humanidade<br />
Em cada cidade, em cada capital</p>

<p>Em cada pessoa de procedimento<br />
Em cada lamento palavras de sal<br />
A nau que flutua no leito do rio<br />
Conduz a velhice, conduz a moral<br />
Assim como Deus, parab&eacute;ns o mau<br />
Assim como Deus, parab&eacute;ns o mau<br />
Assim como Deus, parab&eacute;ns o mau</p>

<p>J&aacute; que tudo depende da boa vontade<br />
&Eacute; de caridade que eu quero falar<br />
&Eacute; daquela esmola, da cuia tremendo<br />
Ou mato ou me rendo, &eacute; lei natural</p>

<p>Do muro de cal espirrado de sangue<br />
De lama, de mangue, de rouge e batom<br />
O tom da conversa que ou&ccedil;o me criva<br />
De setas e faca e favos de mel<br />
&Eacute; a peleja do diabo com o dono do c&eacute;u<br />
&Eacute; a peleja do diabo com o dono do c&eacute;u<br />
Olha a peleja do diabo com o dono do c&eacute;u<br />
</p>
',
'creditos' => '<p>Canta: <strong>Z&eacute; Ramalho</strong></p>
<p>Viol&atilde;o: Z&eacute; Ramalho<br />
Acordeom: Marcos Farias<br />
Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes<br />
Flauta: Cesar Michilles<br />
</p>
',
                'faixa_mp3' => '07_a_peleja_do_diabo_com_o_dono_do_ceu.mp3', 
                'faixa_ogg' => '07_a_peleja_do_diabo_com_o_dono_do_ceu.ogg',
                'disco_id' => '23',   ));

Musicas::create(
            array(
                'faixa' => 'Garoto de aluguel (Taxi Boy)',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>Baby<br />
D&ecirc;-me seu dinheiro que eu quero viver<br />
D&ecirc;-me seu rel&oacute;gio que eu quero saber<br />
Quanto tempo falta para eu lhe esquecer<br />
Quanto vale um homem para amar voc&ecirc;</p>

<p>Minha profiss&atilde;o &eacute; suja e vulgar<br />
Quero um pagamento para me deitar<br />
E junto com voc&ecirc; estrangular meu riso<br />
D&ecirc;-me seu amor, dele n&atilde;o preciso<br />
&Ocirc;, &ocirc;, &ocirc;... &ocirc;, &ocirc;, &ocirc;... &ocirc;...</p>

<p>Baby<br />
Nossa rela&ccedil;&atilde;o acaba-se assim<br />
Como um caramelo que chegasse ao fim<br />
Na boca vermelha de uma dama louca<br />
Pague meu dinheiro e vista sua roupa</p>

<p>Deixe a porta aberta quando for saindo<br />
Voc&ecirc; vai chorando e eu fico sorrindo<br />
Conte pras amigas que tudo foi mal<br />
Nada me preocupa de um marginal<br />
&Ocirc;, &ocirc;, &ocirc;... &ocirc;, &ocirc;, &ocirc;... &ocirc;...<br />
</p>
',
'creditos' => '<p>Cantam: ,strong>Z&eacute; Ramalho e Belchior</strong></p>
<p>Viol&atilde;o: Z&eacute; Ramalho<br />
Acordeom: Marcos Farias<br />
Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes<br />
Cello: Lui Coimbra<br />
</p>
',
                'faixa_mp3' => '08_garoto_de_aluguel.mp3', 
                'faixa_ogg' => '08_garoto_de_aluguel.ogg',
                'disco_id' => '23',   ));

Musicas::create(
            array(
                'faixa' => 'Galope Rasante',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>A sombra que me move<br />
Tamb&eacute;m me ilumina<br />
Me leve nos cabelos<br />
Me lave na piscina</p>

<p>Em cada ponto claro<br />
Cometa que cai no mar<br />
Em cada cor diferente<br />
Que tente me clarear</p>

<p>&Eacute; noite que vai chegar<br />
&Eacute; claro, &eacute; de manh&atilde;<br />
&Eacute; mo&ccedil;a e anci&atilde;</p>

<p>O pelo do cavalo<br />
O vento pela crina<br />
O h&aacute;bito no olho<br />
Veneno, lamparina</p>

<p>Debaixo de sete quedas<br />
Querendo me levantar<br />
Debaixo de teu cabelo<br />
A fonte de se banhar</p>

<p>&Eacute; ouro que vai pingar<br />
Na prata do camel&ocirc;<br />
&Eacute; noite do meu amor</p>

',
'creditos' => '<p>Cantam: <strong>Geraldo Azevedo e Z&eacute; Ramalho</strong></p>
<p>Viol&otilde;es: Geraldo Azevedo e Z&eacute; Ramalho<br />
Acordeom: Marcos Farias<br />
Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes<br />
</p>

',
                'faixa_mp3' => '09_galope_rasante.mp3', 
                'faixa_ogg' => '09_galope_rasante.ogg',
                'disco_id' => '23',   ));

Musicas::create(
            array(
                'faixa' => 'Voc&ecirc; Se Lembra',
                'compositor' => '(Geraldo Azevedo / Pipo Spera / Fausto Nilo) M&uacute;sica Incidental: Solo da corda G. (J.S. Bach)',
                'letra' => '<p>Entre as estrelas do meu drama<br />
Voc&ecirc; j&aacute; foi meu anjo azul<br />
Chegamos num final feliz<br />
Na tela prateada da ilus&atilde;o</p>

<p>Na realidade, onde est&aacute; voc&ecirc;?<br />
Em que cidade voc&ecirc; mora?<br />
Em que paisagem, em que pa&iacute;s?<br />
Me diz em que lugar, cad&ecirc; voc&ecirc;?</p>

<p>Voc&ecirc; se lembra?<br />
Torrentes de paix&atilde;o<br />
Ouvir nossa can&ccedil;&atilde;o<br />
Sonhar em Casablanca<br />
E se perder no labirinto de outra hist&oacute;ria</p>

<p>A caravana do deserto<br />
Atravessou meu cora&ccedil;&atilde;o<br />
E eu fui chorando por voc&ecirc;<br />
At&eacute; os sete mares do sert&atilde;o<br />
</p>
',
'creditos' => '<p>Viol&otilde;es: Geraldo Azevedo e Z&eacute; Ramalho<br />
Acordeom: Marcos Farias<br />
Cello: Lui Coimbra<br />
</p>
',
    'faixa_mp3' => '10_voce_se_lembra.mp3', 
                'faixa_ogg' => '10_voce_se_lembra.ogg',
                'disco_id' => '23',   ));

Musicas::create(
            array(
                'faixa' => 'Petrolina – Juazeiro',
                'compositor' => '(Jorge de Altinho)',
                'letra' => '<p>Na margem do S&atilde;o Francisco nasceu a beleza<br />
E a natureza ela conservou<br />
Jesus aben&ccedil;oou com sua m&atilde;o divina<br />
Pra n&atilde;o morrer de saudade vou voltar pra Petrolina<br />
Jesus aben&ccedil;oou com sua m&atilde;o divina<br />
Pra n&atilde;o morrer de saudade vou voltar pra Petrolina</p>

<p>Do outro lado do rio tem uma cidade<br />
Que na minha mocidade eu visitava todo dia<br />
Atravessava a ponte, ai que alegria!<br />
Chegava em Juazeiro, Juazeiro da Bahia<br />
Atravessava a ponte, ai que alegria!<br />
Chegava em Juazeiro, Juazeiro da Bahia</p>

<p>Hoje eu me lembro que no tempo de crian&ccedil;a<br />
Esquisito era a carranca e o apito do trem<br />
Achava lindo quando a ponte levantava<br />
E o vapor passava num gostoso vai e vem</p>

<p>Petrolina, Juazeiro, Juazeiro, Petrolina<br />
Todas duas eu acho uma coisa linda<br />
Eu gosto de Juazeiro e adoro Petrolina<br />
</p>
',
'creditos' => '<p>Cantam: Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</p>
<p>Viol&atilde;o: Geraldo Azevedo<br />
Acordeom: Marcos Farias<br />
Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes<br />
Cello: Lui Coimbra<br />
Flauta: Cesar Michilles<br />
</p>
',
    'faixa_mp3' => '11_petrolina_juazeiro.mp3', 
                'faixa_ogg' => '11_petrolina_juazeiro.ogg',
                'disco_id' => '23',   ));

Musicas::create(
            array(
                'faixa' => 'A Terceira L&acirc;mina',
                'compositor' => '(Z&eacute; Ramalho)',
                'letra' => '<p>&Eacute; aquela que fere<br />
Que vir&aacute; mais tranquila<br />
Com a fome do povo<br />
Com peda&ccedil;os da vida<br />
Como a dura semente<br />
Que se prende no fogo<br />
De toda multid&atilde;o</p>

<p>Acho bem mais<br />
Do que pedras na m&atilde;o<br />
Dos que vivem calados<br />
Pendurados no tempo<br />
Esquecendo os momentos<br />
Na fundura do po&ccedil;o<br />
Na garganta do fosso<br />
Na voz de um cantador</p>

<p>E vir&aacute; como guerra<br />
A terceira mensagem<br />
Na cabe&ccedil;a do homem<br />
Afli&ccedil;&atilde;o e coragem<br />
Afastado da terra<br />
Ele pensa na fera<br />
Que o come&ccedil;a a devorar</p>

<p>Acho que os anos ir&atilde;o se passar<br />
Com aquela certeza<br />
Que teremos no olho<br />
Novamente a id&eacute;ia<br />
De sairmos do po&ccedil;o<br />
Da garganta do fosso<br />
Na voz de um cantador<br />
</p>
',
'creditos' => '<p>Cantam: Elba Ramalho e Z&eacute; Ramalho</p>
<p>Viol&otilde;es: Elba Ramalho e Z&eacute; Ramalho<br />
Cello: Lui Coimbra<br />
</p>
',
    'faixa_mp3' => '12_a_terceira_lamina.mp3', 
                'faixa_ogg' => '12_a_terceira_lamina.ogg',
                'disco_id' => '23',   ));
Musicas::create(
            array(
                'faixa' => 'Tum-Tum-Tum',
                'compositor' => '(Ari Monteiro / Crist&oacute;v&atilde;o de Alencar)',
                'letra' => '<p>
No tempo que eu era s&oacute;<br />
Que n&atilde;o tinha amor nenhum<br />
Meu cora&ccedil;&atilde;o batia mansinho<br />
Tum, tum, tum</p>

<p>Depois veio voc&ecirc;<br />
O meu amor n&uacute;mero um<br />
E o meu cora&ccedil;&atilde;o pois se a bater<br />
Tum, tum, tum, tum, tum, tum<br />
</p>
<p><strong>Mulata No Coco</strong><br />
<em>(Oscar Barbosa / Geraldo Nunes)</em><br />
</p>
<p>Olha o balan&ccedil;o das cadeira dela<br />
Olha o balan&ccedil;o das cadeira dela d&aacute;<br />
Olha o balan&ccedil;o das cadeira dela<br />
Fiz esse coco s&oacute; pra ela balan&ccedil;ar</p>

<p>Quando eu gritei o coco<br />
A mulata se espalhou<br />
Com o chiado da sand&aacute;lia dela<br />
A poeira levantou</p>

<p>A mo&ccedil;ada lhe cobriu de palmas<br />
Ela em cena tornou a voltar<br />
Com satisfa&ccedil;&atilde;o voltei a cantar esse coco<br />
Que eu fiz s&oacute; pra ela balan&ccedil;ar<br />
</p>
',
'creditos' => '<p>Cantam: Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</p>
<p>Viol&otilde;es: Geraldo Azevedo e Z&eacute; Ramalho<br />
Acordeom: Marcos Farias<br />
Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes<br />
Cello: Lui Coimbra<br />
Flauta: Cesar Michilles<br />
</p>

',
    'faixa_mp3' => '13_tum_tum_tum_mulata_no_coco.mp3', 
                'faixa_ogg' => '13_tum_tum_tum_mulata_no_coco.ogg',
                'disco_id' => '23',   ));

Musicas::create(
            array(
                'faixa' => 'Eu Vou Pra Lua',
                'compositor' => '(Ary Lobo / Luis de França)',
                'letra' => '<p>Eu vou pra lua, eu vou morar l&aacute;<br />
Vou no meu Sputnik do Campo do Jiqui&aacute;<br />
Eu vou pra lua, mam&atilde;e eu vou morar l&aacute;<br />
Vou no meu Sputnik do Campo do Jiqui&aacute;</p>

<p>J&aacute; estou enjoado aqui da terra<br />
Onde o povo a pulso faz regime<br />
A ind&uacute;stria, roubo, a fome e o crime<br />
Onde os pre&ccedil;os aumentam todo dia</p>

<p>O progresso daqui, a carestia<br />
N&atilde;o adianta mais se fazer cr&iacute;tica<br />
Ningu&eacute;m acredita na pol&iacute;tica<br />
Onde o povo s&oacute; vive em agonia</p>

<p>L&aacute; n&atilde;o tem juventude transviada<br />
Os rapazes de l&aacute; n&atilde;o tem mal&iacute;cia<br />
Quando h&aacute; casamento na pol&iacute;cia<br />
&Eacute; a mo&ccedil;a quem &eacute; sentenciada</p>

<p>Por acaso a dona for casada<br />
Trair o marido a coisa &eacute; feia<br />
Ela pega dez anos de cadeia<br />
E o conquistador n&atilde;o sofre nada</p>

<p>Na lua n&atilde;o tem nome abreviado<br />
IPSEP, IPASE, nem CASEP<br />
Nem IPEV, nem CPMF<br />
Nem h&aacute; contrabando de mercadoria</p>

<p>L&aacute; n&atilde;o falta &aacute;gua, n&atilde;o falta energia<br />
N&atilde;o falta hospital, n&atilde;o falta escola<br />
&Eacute; fuzilado l&aacute; quem come bola<br />
E morre na rua quem faz anarquia<br />
</p>
<p><strong>O Canto Da Ema</strong><br />
<em>(Alventino Cavalcanti / Aires Viana / Jo&atilde;o do Vale)</em><br />
</p>
<p>A ema gemeu no tronco do Juremar<br />
A ema gemeu no tronco do Juremar<br />
Foi um sinal bem triste, morena<br />
Fiquei a imaginar<br />
Ser&aacute; que &eacute; o nosso amor, morena<br />
Que vai se acabar?</p>

<p>Voc&ecirc; bem sabe que a ema quando canta<br />
Vem trazendo no seu canto um bocado de azar<br />
Eu tenho medo pois acho que &eacute; muito cedo<br />
Muito cedo meu benzinho<br />
Pra esse amor acabar</p>

<p>Vem morena, vem, vem, vem<br />
Me beijar, me beijar<br />
D&aacute; um beijo, d&aacute; um beijo<br />
Pra esse medo<br />
Se acabar<br />
</p>

',
'creditos' => '<p>Cantam: Elba Ramalho, Geraldo Azevedo e Z&eacute; Ramalho</p>
<p>Viol&atilde;o: Geraldo Azevedo e Z&eacute; Ramalho<br />
Acordeom: Marcos Farias<br />
Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes<br />
Cello: Lui Coimbra<br />
Flauta: Cesar Michilles<br />
</p>
',
    'faixa_mp3' => '14_eu_vou_pra_lua_o_canto_da_ema.mp3', 
                'faixa_ogg' => '14_eu_vou_pra_lua_o_canto_da_ema.ogg',
                'disco_id' => '23',   ));

Musicas::create(
            array(
                'faixa' => 'Cirandeira',
                'compositor' => '(Lenine) Cita&ccedil;&atilde;o: Cirandeiro (Edu Lobo / Capinan)',
                'letra' => '<p>Foi minha raz&atilde;o que me arrasou<br />
Que alterou o beat do meu cora&ccedil;&atilde;o<br />
Que bateu fora do compasso<br />
Atravessou, riscou no espa&ccedil;o<br />
E foi al&eacute;m dessa can&ccedil;&atilde;o</p>

<p>Eu na multid&atilde;o<br />
Multiplicada em solid&atilde;o<br />
Encoura&ccedil;ado cora&ccedil;&atilde;o<br />
Bate s&oacute; no descompasso<br />
Sincopando o mesmo passo<br />
Sempre em sua dire&ccedil;&atilde;o</p>

<p>Eu bem que tentei<br />
Contei te encontrar<br />
E o que eu naveguei<br />
A te procurar<br />
A onda que andei<br />
E aonde me levar<br />
Serei o seu mar, sereia</p>

<p>Onda do mar<br />
Quem navegou foi Lia<br />
Folia de navegador<br />
Essa ciranda que me fez folia<br />
Fo Lia quem cirandeou (&ocirc; cirandeiro)<br />
</p>
<p><em>&Ocirc; cirandeiro, &ocirc;<br />
Cirandeiro, cirandeiro, &ocirc;<br />
A pedra do seu anel<br />
Brilha mais do que o sol</em><br />
</p>
',
'creditos' => '<p><em>Cita&ccedil;&atilde;o: Cirandeiro (Edu Lobo / Capinan)</em></p>
<p>Arranjo e baixo: Marcos Farias<br />
Viol&atilde;o de nylon: Lenine<br />
Percuss&atilde;o: Paulinho He-Man<br />
Cello e flautas: Ocelo Mendon&ccedil;a<br />
Trombone: Alcimar Oliveira<br />
</p>
',
    'faixa_mp3' => '01_cirandeira.mp3', 
                'faixa_ogg' => '01_cirandeira.ogg',
                'disco_id' => '24',   ));

Musicas::create(
            array(
                'faixa' => 'Patativa',
                'compositor' => '(Vicente Celestino)',
                'letra' => '<p>Acorda Patativa, vem cantar<br />
Relembra as madrugadas que l&aacute; v&atilde;o<br />
E faz da sua janela o meu altar<br />
Escuta a minha eterna ora&ccedil;&atilde;o</p>

<p>Eu vivo inutilmente a procurar<br />
Algu&eacute;m que compreenda o meu amor<br />
E vejo que &eacute; destino o meu sofrer<br />
&Eacute; padecer n&atilde;o encontrar<br />
Quem compreenda o trovador</p>

<p>Eu tenho n&rsquo;alma um vendaval sem fim<br />
E uma esperan&ccedil;a que &eacute; se ter por mim<br />
O mesmo afeto que juravas ter<br />
Para que acabe esse meu sofrer</p>

<p>Eu sei que juras cruelmente em v&atilde;o<br />
Eu sei que preso tens o cora&ccedil;&atilde;o<br />
Eu sei que vives tristemente a ocultar<br />
Que a outro amas sem querer amar</p>

<p>Mulher, o teu capricho vencer&aacute;<br />
E um dia sua loucura findar&aacute;<br />
Adeus, a Deus minh&rsquo;alma entregarei<br />
E de outro por injurio morrerei</p>

<p>Amar, que sonho lindo, encantador<br />
Mais lindo porque minh&rsquo;alma tem amor<br />
E tu vens se expressando sem raz&atilde;o<br />
A minha hist&oacute;ria e busco em v&atilde;o<br />
O teu ingrato cora&ccedil;&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo de base e cordas, reg&ecirc;ncia e sanfona: Marcos Farias<br />
Guitarra: Luiz Neto<br />
Violas: Tuco Marcondes<br />
Baixo: Jacar&eacute;<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o: Paulinho He-Man<br />
Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu<br />
</p>
',
    'faixa_mp3' => '02_patativa.mp3', 
                'faixa_ogg' => '02_patativa.ogg',
                'disco_id' => '24',   ));

Musicas::create(
            array(
                'faixa' => 'Se Eu Tivesse Asa',
                'compositor' => '(Geraldo Azevedo / Geraldo Amaral)',
                'letra' => '<p>Passarinho que vai praquele lado<br />
Leva um recado, voa ligeiro<br />
Diz ao meu amor<br />
Estou t&atilde;o sozinho aqui<br />
Com uma saudade sem fim</p>

<p>Passarinho se eu tivesse asa<br />
N&atilde;o te pedia, eu mesmo ia<br />
Ver o meu amor, o meu amor<br />
Peda&ccedil;o de c&eacute;u<br />
Ardente desejo<br />
Apaixonado<br />
Eu quero o seu beijo<br />
Ficar ao seu lado e ser mais feliz</p>

<p>Voa, voa, voa, passarinho<br />
Leve as penas do destino<br />
Vai ao meu amor contar<br />
Que eu n&atilde;o seu viver sem seu carinho<br />
Sinto falta dos seus bra&ccedil;os<br />
E da luz do seu olhar<br />
</p>
',
'creditos' => '<p>Arranjo de base e cordas, reg&ecirc;ncia, baixo e sanfona: Marcos Farias<br />
Viol&atilde;o de nylon: Geraldo Azevedo<br />
Gaita harm&ocirc;nica: Milton Guedes<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o: Paulinho He-Man<br />
Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu<br />
</p>
',
    'faixa_mp3' => '02_patativa.mp3', 
                'faixa_ogg' => '02_patativa.ogg',
                'disco_id' => '24',   ));

Musicas::create(
            array(
                'faixa' => 'Alma Nua',
                'compositor' => '(Zeca Baleiro)',
                'letra' => '<p>Nuvens passando sobre a minha cabe&ccedil;a<br />
Meu amor, me apare&ccedil;a<br />
Pra que eu possa te alcan&ccedil;ar<br />
Roubando flores de uma natureza morta<br />
Se a beleza &eacute; o que importa<br />
Tanto faz rir ou chorar</p>

<p>Dessa maneira eu vou<br />
A vida inteira<br />
Pra quem me queira eu t&ocirc;<br />
Se dou bandeira<br />
&Eacute; pra cantar pro meu amor</p>

<p>Vou me arrastando<br />
Entre a vontade e o cansa&ccedil;o<br />
Sobre p&eacute;talas de a&ccedil;o vou pisando devagar<br />
Flores de pl&aacute;stico, eu sei, n&atilde;o tem espinho<br />
Mas quem segue o seu caminho<br />
Sem a dor onde vai dar</p>

<p>Ca&ccedil;ando rimas<br />
Ouvindo estrelas<br />
Mais leve, leve, que o ar, que o avi&atilde;o<br />
Fazendo juras<br />
A alma nua<br />
T&atilde;o quente quanto uma noite de S&atilde;o Jo&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo e viol&atilde;o de nylon: Zeca Baleiro<br />
Viol&atilde;o de a&ccedil;o e viol&atilde;o &ldquo;dobro&rdquo;: Tuco Marcondes<br />
Percuss&atilde;o: Paulinho He-Man<br />
Cello: Ocelo Mendon&ccedil;a<br />
Baixo: Marcos Farias<br />
</p>
',
    'faixa_mp3' => '03_se_eu_tivesse_asa.mp3', 
                'faixa_ogg' => '03_se_eu_tivesse_asa.ogg',
                'disco_id' => '24',   ));

Musicas::create(
            array(
                'faixa' => 'Onde Anda Voc&ecirc;',
                'compositor' => '(Chico Pessoa / Z&eacute; do Norte)',
                'letra' => '<p>Onde anda voc&ecirc;<br />
Que procuro e n&atilde;o encontro<br />
V&ecirc; se ao menos telefona<br />
E me diga onde est&aacute;</p>

<p>Onde anda voc&ecirc;<br />
Que n&atilde;o sai da minha vida<br />
E n&atilde;o vejo uma sa&iacute;da<br />
Pra poder te esquecer</p>

<p>Meu cora&ccedil;&atilde;o parece viajar no tempo<br />
E acredita que um dia<br />
Voc&ecirc; vai voltar pra mim</p>

<p>&Eacute; que ele bate mais feliz<br />
Quando te vejo<br />
Chega at&eacute; me sufocar<br />
De imensa alegria</p>

<p>De tanto medo de perder<br />
Foi que eu perdi<br />
E hoje conto as horas pra te ver<br />
Esperando esse dia</p>

<p>Cad&ecirc; voc&ecirc;?<br />
Por favor, me telefona<br />
N&atilde;o maltrate quem te ama<br />
Apare&ccedil;a nem que seja pra dizer adeus<br />
</p>
',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e sanfona: Marcos Farias<br />
Guitarra: Luiz Neto<br />
Saxofone: Milton Guedes<br />
Baixo: Jacar&eacute;<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o: Paulinho He-Man<br />
Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu<br />
</p>
',
    'faixa_mp3' => '04_alma_nua.mp3', 
                'faixa_ogg' => '04_alma_nua.ogg',
                'disco_id' => '24',   ));

Musicas::create(
            array(
                'faixa' => 'Querendo Mais',
                'compositor' => '(Nando Cordel)',
                'letra' => '<p>Eu vou me derramar<br />
Nesse teu amor<br />
E me deliciar<br />
Nesse teu amor<br />
Fazer o que pensar<br />
Nesse teu amor<br />
Ai, meu Deus, como &eacute; gostoso<br />
Ter o seu amor</p>

<p>Meu cora&ccedil;&atilde;o dispara, fica doido<br />
Ta querendo fogo<br />
Ta querendo mais<br />
Voc&ecirc; pra mim &eacute; uma estrela linda<br />
De toda maneira<br />
Sempre satisfaz</p>

<p>Vem pra me ninar<br />
Vem cuidar de mim<br />
Minha vida &eacute; s&oacute; te amar<br />
Vem me remexer<br />
Me fazer feliz<br />
N&atilde;o consigo te deixar<br />
</p>
',
'creditos' => '<p>Arranjo de base, reg&ecirc;ncia e sanfonas: Marcos Farias<br />
Guitarra: Luiz Neto<br />
Baixo: Jacar&eacute;<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o: Paulinho He-Man<br />
Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu<br />
</p>
',
    'faixa_mp3' => '06_querendo_mais.mp3', 
                'faixa_ogg' => '06_querendo_mais.ogg',
                'disco_id' => '24',   ));

Musicas::create(
            array(
                'faixa' => 'Sem Ganz&aacute; N&atilde;o &eacute; Coco',
                'compositor' => '(Chico C&eacute;sar)',
                'letra' => '<p>Coco sem ganz&aacute; n&atilde;o &eacute; coco<br />
Namoro sem beijar n&atilde;o &eacute; amor<br />
Morena da Penha<br />
Demore, mas venha<br />
Eu demoro, mas eu vou</p>

<p>Quero ganz&aacute;, quero ganz&aacute;, quero ganz&aacute;<br />
Morena tem pena<br />
Tem pena no meu cocar<br />
Quero beijar, quero beijar, quero beijar<br />
Mas eu beijo com decoro<br />
Pro namoro demorar</p>

<p>O coco tem que ter ganz&aacute; e pandeiro<br />
Um namoro maneiro, a morena tem que beijar<br />
Tem que gostar do beijo<br />
Pra gostar de ser beijada<br />
No coco de embolada<br />
E na pancada do ganz&aacute;<br />
</p>
',
'creditos' => '<p>Arranjo, viol&atilde;o e vocais: Chico C&eacute;sar<br />
Percuss&atilde;o: Zelito Pitoco e Guilherme Untrup<br />
Baixo: Sawami Jr.<br />
Acordeom: Toninho Ferragutti<br />
</p>
',
    'faixa_mp3' => '07_sem_ganza_nao_e_coco.mp3', 
                'faixa_ogg' => '07_sem_ganza_nao_e_coco.ogg',
                'disco_id' => '24',   ));

Musicas::create(
            array(
                'faixa' => 'Pra Virar Xod&oacute;',
                'compositor' => '(Jo&atilde;o Gon&ccedil;alves / Fub&aacute; de Tapero&aacute;)',
                'letra' => '<p>Eu quero seu rostinho<br />
Coladinho no meu rosto<br />
Quero ver o seu pesco&ccedil;o<br />
No meu ombro a descansar</p>

<p>Seu corpo todo suado<br />
Aguentando o meu repuxo<br />
Ralando bucho com bucho<br />
Deixa quem quiser falar</p>

<p>Amor<br />
&Eacute; o que eu tenho pra lhe dar<br />
Amor<br />
&Eacute; o que eu tenho pra lhe dar</p>

<p>Se ligue a noite inteira<br />
No repique do zabumba<br />
No piado da sanfona<br />
No balan&ccedil;o do forr&oacute;</p>

<p>Arrasta o p&eacute; no ch&atilde;o<br />
Que ta gostosa a brincadeira<br />
No balan&ccedil;ar da poeira<br />
Voc&ecirc; vira meu xod&oacute;</p>
',
'creditos' => '<p>Arranjo de base, reg&ecirc;ncia e sanfonas: Marcos Farias<br />
Guitarra: Luiz Neto<br />
Baixo: Jacar&eacute;<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o: Paulinho He-Man<br />
Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu<br />
</p>
',
    'faixa_mp3' => '08_pra_virar_xodo.mp3', 
                'faixa_ogg' => '08_pra_virar_xodo.ogg',
                'disco_id' => '24',   ));

Musicas::create(
            array(
                'faixa' => 'Pra Se Aninhar',
                'compositor' => '(Targino Gondim)',
                'letra' => '<p>Sinto falta de voc&ecirc;<br />
Meu amor, n&atilde;o sei viver<br />
Junto a essa solid&atilde;o<br />
Meus olhos andam cheios d&rsquo;&aacute;gua<br />
N&atilde;o escondo minha m&aacute;goa<br />
Estou sofrendo de paix&atilde;o</p>

<p>Vivo feito passarinho<br />
Que t&aacute; perdido no ninho<br />
E n&atilde;o encontro algu&eacute;m<br />
Pra se aninhar<br />
Sou um sabi&aacute; ferido<br />
Sei que agora estou perdido<br />
Sem voc&ecirc; pra me achar</p>

<p>Sem voc&ecirc; n&atilde;o h&aacute; chamego<br />
Nem xod&oacute; e nem sossego<br />
E n&atilde;o encontro algu&eacute;m<br />
Pra me acalmar<br />
Meu amor, meu amorzinho<br />
Pra n&oacute;s dois ficar juntinho<br />
Tem meu ranchinho pra n&oacute;s morar<br />
</p>
',
'creditos' => '<p>Arranjo de base, reg&ecirc;ncia e sanfonas: Marcos Farias<br />
Guitarra: Luiz Neto<br />
Baixo: Jacar&eacute;<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o: Paulinho He-Man<br />
Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu<br />
</p>
',
    'faixa_mp3' => '09_pra_se_aninhar.mp3', 
                'faixa_ogg' => '09_pra_se_aninhar.ogg',
                'disco_id' => '24',   ));

Musicas::create(
            array(
                'faixa' => 'Entre o C&eacute;u e o Mar',
                'compositor' => '(Roger Henri / Dudu Falc&atilde;o)',
                'letra' => '<p>Quantos labirintos<br />
Tem seu cora&ccedil;&atilde;o<br />
Pra eu me perder<br />
E te encontrar</p>

<p>Quantas avenidas<br />
Tem o seu olhar<br />
Pra eu te seguir<br />
E me guiar</p>

<p>Meu cora&ccedil;&atilde;o me leva<br />
Perto demais do seu<br />
Meu cora&ccedil;&atilde;o nem sabe por que<br />
O meu amor<br />
&Eacute; bem maior que eu</p>

<p>Quem sabe o destino<br />
Ainda vai juntar<br />
O c&eacute;u e o mar<br />
Eu e voc&ecirc;</p>

<p>Quem de n&oacute;s um dia<br />
Iria imaginar<br />
Que o amor pudesse<br />
Acontecer</p>

<p>Seu cora&ccedil;&atilde;o &eacute; livre<br />
Tanto que prende o meu<br />
Seu cora&ccedil;&atilde;o nem sabe por que<br />
O meu amor<br />
&Eacute; t&atilde;o igual ao seu<br />
</p>

',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e programa&ccedil;&atilde;o: Julinho Teixeira<br />
Sax soprano: Z&eacute; Canuto<br />
Violinos: Bernardo Bessler (spalla), Michel Bessler, Jo&atilde;o Daltro, Jos&eacute; Alves, Antonella Pareschi, Ricardo Amado, Paschoal Perrota, Walter Hack, Carlos Eduardo Hack, Carlos Eduardo Moreno, Paula Barbato e Jos&eacute; Rog&eacute;rio<br />
Violas: Marie Christine Bessler, Jesu&iacute;na Passaroto, Jos&eacute; Ricardo Taboada e Eduardo Roberto<br />
Cellos: M&aacute;rcio Mallard, Yura Ranevsky, Marcus Ribeiro e Hugo Pilger<br />
Vocais: Marcio Lott, Chico Puppo, Jussara Louren&ccedil;o, Jurema C&acirc;ndia, Ana Leuzinger e Viviane God&oacute;i<br />
</p>
',
    'faixa_mp3' => '10_entre_o_ceu_e_o_mar.mp3', 
                'faixa_ogg' => '10_entre_o_ceu_e_o_mar.ogg',
                'disco_id' => '24',   ));

Musicas::create(
            array(
                'faixa' => 'Forr&oacute; de Surubim',
                'compositor' => '(Ant&ocirc;nio Barros)',
                'letra' => '<p>Ajunta os bebo<br />
No forr&oacute; de Surubim<br />
Pra fazer cuim<br />
Para dar altera&ccedil;&atilde;o</p>

<p>Por qualquer besteira<br />
Puxa a faca (da bainha), fura o fole<br />
V&atilde;o l&aacute; dentro tomar gole<br />
De cacha&ccedil;a com lim&atilde;o</p>

<p>&Eacute;, mas Surubim<br />
Que &eacute; homem destemido<br />
N&atilde;o tem medo do perigo<br />
Empunha a faca na m&atilde;o</p>

<p>Faz uma rosca<br />
Na ponta do bigode<br />
Com ele ningu&eacute;m pode<br />
S&oacute; ele &eacute; valent&atilde;o</p>

<p>Surubim diz que o forr&oacute;<br />
S&oacute; est&aacute; mais animado<br />
Quando o pau est&aacute; comendo<br />
Quando o fole est&aacute; furado<br />
Quando apaga o candeeiro<br />
Quando &eacute; grande a confus&atilde;o<br />
Quando v&ecirc; a concertina<br />
Passando de m&atilde;o em m&atilde;o<br />
Quando v&ecirc; os bebo mole<br />
De cacha&ccedil;a com lim&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo de base, reg&ecirc;ncia e sanfonas: Marcos Farias<br />
Clarinete: Dirceu Leitte<br />
Baixo: Jacar&eacute;<br />
Zabumba: Coron&eacute;<br />
Tri&acirc;ngulo e pandeiro: Luiz Cl&aacute;udio<br />
Bateria: Camilo Mariano<br />
Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu<br />
</p>
',
    'faixa_mp3' => '11_forro_de_surubim.mp3', 
                'faixa_ogg' => '11_forro_de_surubim.ogg',
                'disco_id' => '24',   ));

Musicas::create(
            array(
                'faixa' => 'Lua Vadia',
                'compositor' => '(J. Michiles)',
                'letra' => '<p>Lua da minha janela<br />
Singela lua vadia<br />
Lua nova, lua cheia<br />
Poesia que clareia<br />
Minha rua, meu quintal<br />
Lua branca cristalina<br />
Brejeira lua menina<br />
Matutina, sensual</p>

<p>Lamparina do universo<br />
Do meu verso solit&aacute;rio<br />
Minha reza, meu ros&aacute;rio<br />
Meu di&aacute;rio, meu cordel<br />
Meu romance clandestino<br />
Meu destino carrossel<br />
Minha doce namorada<br />
Minha amada lua de mel</p>

<p>Quando &agrave; noite em minha cama<br />
Tua luz fogosa e bela<br />
Vem brechar minha janela<br />
Sobejar-me de emo&ccedil;&atilde;o<br />
Corpo inteiro, toda nua<br />
&Eacute;s a lua do meu cio<br />
Do meu cora&ccedil;&atilde;o febril<br />
No vazio da solid&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo de base, reg&ecirc;ncia e sanfona: Marcos Farias<br />
Guitarra: Luiz Neto<br />
Guitarra &ldquo;steel&rdquo;: Rick Ferreira<br />
Baixo: Jacar&eacute;<br />
Percuss&atilde;o: Paulinho He-Man<br />
Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu<br />
</p>
',
    'faixa_mp3' => '12_lua_vadia.mp3', 
                'faixa_ogg' => '12_lua_vadia.ogg',
                'disco_id' => '24',   ));
Musicas::create(
            array(
                'faixa' => 'O Amor &eacute; Lindo',
                'compositor' => '(Tony Gadelha / Afonso Gadelha / Gl&oacute;ria Gadelha)',
                'letra' => '<p>Quando voc&ecirc; me quiser, amor<br />
N&atilde;o me negue o sentimento<br />
Menina, a trama da vida &eacute; presente<br />
&Eacute; fogo, &eacute; chama e carrega a gente</p>

<p>Quando voc&ecirc; entender, amor<br />
Que a vida tamb&eacute;m parte da dor<br />
N&atilde;o quero que chore<br />
Quero que me olhe como um beija-flor</p>

<p>Quando voc&ecirc; me disser, amor<br />
Que deseja ter um ninho<br />
Menino, eu posso ser um passarinho<br />
Que canta e beija com muito carinho</p>

<p>Mas se todo o seu desejo for<br />
Descobrir quando se sente o amor<br />
Chega como um toque<br />
E deixa o corpo mole como uma flor</p>

<p>Olha nos meus olhos<br />
O amor &eacute; lindo<br />
Beija minha boca<br />
O amor &eacute; lindo<br />
Deita nos bra&ccedil;os<br />
O amor &eacute; lindo<br />
</p>
',
'creditos' => '<p>Arranjo, sanfona, percuss&atilde;o, baixo e bateria: Marcos Farias<br />
Vocais: Lidiane Castro, Dinal&eacute;ia e Elizeu<br />
</p>

',
    'faixa_mp3' => '13_o_amor_e_lindo.mp3', 
                'faixa_ogg' => '13_o_amor_e_lindo.ogg',
                'disco_id' => '24',   ));

Musicas::create(
            array(
                'faixa' => 'Estrela Soberana',
                'compositor' => '(Elba Ramalho / Geraldo Azevedo)',
                'letra' => '<p>Senhora M&atilde;e<br />
Divina luz<br />
Clara manh&atilde;<br />
Que nos conduz aos c&eacute;us<br />
Estrela Soberana<br />
Maria, Miriam, me chama<br />
Acalma e banha<br />
A minha pobre alma<br />
Nas &aacute;guas do seu cora&ccedil;&atilde;o</p>

<p>Estrela d&rsquo;&aacute;gua<br />
Rainha e paz<br />
Estrela, estrela<br />
Do amor demais</p>

<p>Senhora, doce esplendor<br />
Derrama o mel de tua flor<br />
E abra&ccedil;a a terra<br />
Com seu manto azul<br />
Aromas, b&aacute;lsamos de amor<br />
Senhora M&atilde;e<br />
</p>

',
'creditos' => '<p>Viol&atilde;o de nylon: Geraldo Azevedo</p>
',
    'faixa_mp3' => '14_estrela_soberana.mp3', 
                'faixa_ogg' => '14_estrela_soberana.ogg',
                'disco_id' => '24',   ));

Musicas::create(
            array(
                'faixa' => 'Danado De Bom',
                'compositor' => '(Luiz Gonzaga / Jo&atilde;o Silva)',
                'letra' => '<p>Ta &eacute; danado de bom<br />
Ta &eacute; danado de bom, meu cumpade<br />
Ta &eacute; danado de bom<br />
Forrozinho, bonitinho<br />
Gostosinho, safadinho<br />
Danado de bom</p>

<p>Olha Macambira na zabumba<br />
Z&eacute; Cupira no tri&acirc;ngulo<br />
E Mariano no gongu&ecirc;<br />
Olha, meu cumpadre na viola<br />
Meu sobrinho na manola<br />
E Cipriano no mel&ecirc;<br />
Olha a meninada nas cui&eacute;<br />
T&aacute; sobrando capil&eacute;<br />
E j&aacute; tem bebo pra dan&aacute;</p>

<p>Tem nego grudado que nem piolho<br />
Tem nega piscando o olho<br />
Me chamando pra dan&ccedil;ar<br />
Tem nego grudado que nem piolho<br />
Tem nega piscando o olho<br />
Me chamando pra dan&ccedil;ar</p>

<p>T&aacute; que forrozinho de primeira<br />
J&aacute; num cabe forrozeira<br />
E cada vez chegando mais<br />
T&aacute; da cozinha pro terreiro<br />
Sanfoneiro e zabumbeiro<br />
Pra frente, pras tr&aacute;s<br />
Olha, meu cumpade Dami&atilde;o<br />
Pode apagar o lampi&atilde;o<br />
Que t&aacute; querendo clarear</p>

<p>Aguente o fole meu cumpadre Boror&oacute;<br />
Que esse &eacute; o tipo do forr&oacute;<br />
Que num tem hora pra parar<br />
Aguente o fole meu cumpadre Boror&oacute;<br />
Que esse &eacute; o tipo do forr&oacute;<br />
Que num tem hora pra parar<br />
</p>
',
'creditos' => '<p>Arranjo e sanfona: Dominguinhos<br />
Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo<br />
Baixo: Arismar do Esp&iacute;rito Santo<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o e efeitos: Paulinho He-Man<br />
Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;<br />
Zabumba: Di&oacute; de Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio Porto<br />
Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho<br />
</p>
',
    'faixa_mp3' => '01_danado_de_bom.mp3', 
                'faixa_ogg' => '01_danado_de_bom.ogg',
                'disco_id' => '25',   ));

Musicas::create(
            array(
                'faixa' => 'A sorte &eacute; Cega',
                'compositor' => '(Luiz Guimar&atilde;es)',
                'letra' => '<p>Meu amor quando eu te vejo<br />
Fico a suspirar<br />
Por que &eacute; que tu n&atilde;o v&ecirc;<br />
Que eu vivo a te esperar</p>

<p>Passarinho na gaiola<br />
Vive sempre a cantar<br />
Passa fome, passa sede<br />
Sem pedir, sem reclamar</p>

<p>Mas existe a diferen&ccedil;a<br />
Passarinho eu n&atilde;o sou<br />
Minha fome, minha sede<br />
&Eacute; teu carinho, &eacute; teu amor</p>

<p>Meu amor quando eu te vejo<br />
Fico a suspirar<br />
Por que &eacute; que tu n&atilde;o v&ecirc;<br />
Que eu estou a te esperar</p>

<p>Dizem que a sorte &eacute; cega<br />
S&oacute; agora acreditei<br />
Por que tu gosta de mim?<br />
Meu amor, isso eu n&atilde;o sei</p>

<p>Se ao menos eu pudesse<br />
Alimentar esta ilus&atilde;o<br />
Que ficou dentro de mim<br />
Machucando o cora&ccedil;&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo e sanfona: Dominguinhos<br />
Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo<br />
Baixo: Arismar do Esp&iacute;rito Santo<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o e efeitos: Paulinho He-Man<br />
Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;<br />
Zabumba: Di&oacute; de Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio Porto<br />
Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho<br />
</p>
',
    'faixa_mp3' => '02_a_sorte_e_cega.mp3', 
                'faixa_ogg' => '02_a_sorte_e_cega.ogg',
                'disco_id' => '25',   ));
Musicas::create(
            array(
                'faixa' => 'Quer Ir Mais Eu',
                'compositor' => '(Luiz Gonzaga / Miguel Lima)',
                'letra' => '<p>Quer ir mais eu, vamo<br />
Quer ir mais eu, vambora<br />
Quer ir mais eu, vamo<br />
Quer ir mais eu, vambora</p>

<p>Vambora<br />
Vambora sem demora<br />
Deixa a roupa na corda<br />
Que n&atilde;o vai chover agora</p>

<p>Mas se voc&ecirc; quiser ficar<br />
Eu vou ali, vou ali e volto j&aacute;<br />
Mas pelo sim, pelo sim, pelo n&atilde;o<br />
Deixa na geladeira &aacute;gua t&ocirc;nica e lim&atilde;o<br />
</p>
',
'creditos' => '<p>Arranjo e sanfona: Dominguinhos<br />
Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo<br />
Baixo: Arismar do Esp&iacute;rito Santo<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o e efeitos: Paulinho He-Man<br />
Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;<br />
Zabumba: Di&oacute; de Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio Porto<br />
Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho<br />
</p>
',
    'faixa_mp3' => '02_quer_ir_mais_eu.mp3', 
                'faixa_ogg' => '02_a_sorte_e_cega.ogg',
                'disco_id' => '25',   ));

Musicas::create(
            array(
                'faixa' => 'O Xote Das Meninas',
                'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas)',
                'letra' => '<p>Mandacaru quando fulor&aacute; na seca<br />
&Eacute; o sinal que a chuva chega no sert&atilde;o<br />
Toda menina que enjoa da boneca<br />
&Eacute; sinal que o amor j&aacute; chegou no cora&ccedil;&atilde;o<br />
Meia comprida, n&atilde;o quer mais sapato baixo<br />
Vestido bem cintado, n&atilde;o quer mais vestir tim&atilde;o</p>

<p>Ela s&oacute; quer, s&oacute; pensa em namorar<br />
Ela s&oacute; quer, s&oacute; pensa em namorar<br />
Ela s&oacute; quer, s&oacute; pensa em namorar<br />
Ela s&oacute; quer, s&oacute; pensa em namorar</p>

<p>De manh&atilde; cedo j&aacute; t&aacute; pintada<br />
S&oacute; vive suspirando, sonhando acordada<br />
O pai leva ao dout&ocirc; a filha adoentada<br />
N&atilde;o come, n&atilde;o estuda<br />
N&atilde;o dorme, n&atilde;o quer nada</p>

<p>Mas o dout&ocirc; nem examina<br />
Chamando o pai de lado<br />
Lhe diz logo em surdina<br />
O mal &eacute; da idade<br />
E que pra tal menina<br />
N&atilde;o h&aacute; um s&oacute; rem&eacute;dio em toda a medicina<br />
</p>
',
'creditos' => '<p>Arranjo e sanfona: Dominguinhos<br />
Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo<br />
Baixo: Arismar do Esp&iacute;rito Santo<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o e efeitos: Paulinho He-Man<br />
Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;<br />
Zabumba: Di&oacute; de Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio Porto<br />
Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho<br />
</p>
',
    'faixa_mp3' => '04_o_xote_das_meninas.mp3', 
                'faixa_ogg' => '04_o_xote_das_meninas.ogg',
                'disco_id' => '25',   ));

Musicas::create(
            array(
                'faixa' => 'O Xamego Da Guiomar',
                'compositor' => '(Luiz Gonzaga / Miguel Lima) Participa&ccedil;&atilde;o Especial: Zeca Pagodinho',
                'letra' => '<p>Acho muito interessante o xamego da Guiomar<br />
Ela diz a todo instante que comigo vai casar<br />
N&atilde;o creio muito nisso, ela sabe muito bem<br />
Aceito o compromisso pela gaita que ela tem</p>

<p>Por causa dela eu j&aacute; perdi a calma e o sossego<br />
Credo, nunca vi tanto xamego<br />
Pois a Guiomar est&aacute; doidinha pra casar<br />
E eu tamb&eacute;m n&atilde;o t&ocirc; aqui pra bobear</p>

<p>Todo mundo sabe, todo mundo diz<br />
Que ela tem por mim um grande apego<br />
Por&eacute;m, n&atilde;o ata nem desata<br />
Com a bossa do xamego<br />
Assim n&atilde;o h&aacute; quem possa<br />
Ter calma, ter sossego<br />
Mas digo francamente<br />
E posso at&eacute; jurar<br />
Que a gaita da Guiomar vai se acabar<br />
(Eu vou gastar!)<br />
</p>
',
'creditos' => '<p>Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo<br />
Baixo: Maur&iacute;cio Hulk<br />
Bateria: Camilo Mariano<br />
Clarinete: Dirceu Leitte<br />
Percuss&atilde;o e efeitos: Paulinho He-Man<br />
Sanfona: Toninho Ferragutti<br />
Viol&atilde;o de 7 cordas: Paulo Roberto Pereira Ara&uacute;jo (Paul&atilde;o)<br />
Bandolim: Arlindo Cruz<br />
Cavaquinho: Paulinho Soares<br />
Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;<br />
Zabumba: Di&oacute; de Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio Porto<br />
Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho<br />
</p>
',
    'faixa_mp3' => '05_o_xamego_da_guiomar.mp3', 
                'faixa_ogg' => '05_o_xamego_da_guiomar.ogg',
                'disco_id' => '25',   ));

Musicas::create(
            array(
                'faixa' => 'Vem Morena',
                'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas)',
                'letra' => '<p>Vem morena pros meus bra&ccedil;os<br />
Vem morena, vem dan&ccedil;ar<br />
Quero ver tu requebrando<br />
Quero ver tu requebrar</p>

<p>Quero ver tu remexer<br />
No resfulego da sanfona<br />
Int&eacute; que o sol raiar</p>

<p>Esse teu fungado quente<br />
Bem no p&eacute; do meu pesco&ccedil;o<br />
Arrepia o corpo da gente<br />
Faz o veio ficar mo&ccedil;o<br />
E o cora&ccedil;&atilde;o de repente<br />
Bota o sangue em arvoro&ccedil;o</p>

<p>Esse teu suor sargado<br />
&Eacute; gostoso e tem sabor<br />
Pois o teu corpo suado<br />
Com esse cheiro de ful&ocirc;<br />
Tem um gosto temperado<br />
Dos temperos do amor<br />
</p>
',
'creditos' => '<p>Arranjo e sanfona: Dominguinhos<br />
Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo<br />
Baixo: Arismar do Esp&iacute;rito Santo<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o e efeitos: Paulinho He-Man<br />
Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;<br />
Zabumba: Di&oacute; de Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio Porto<br />
Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho<br />
</p>

',
    'faixa_mp3' => '06_vem_morena.mp3', 
                'faixa_ogg' => '06_vem_morena.ogg',
                'disco_id' => '25',   ));

Musicas::create(
            array(
                'faixa' => 'Or&eacute;lia',
                'compositor' => '(Humberto Teixeira)',
                'letra' => '<p>Caminheiro sem destino<br />
O destino &eacute; Deus quem d&aacute;<br />
Sempre em paz comigo mesmo<br />
Cora&ccedil;&atilde;o s&oacute; pra cantar<br />
Um xamego hoje aqui<br />
Amanh&atilde;, um dengo acol&aacute;<br />
E o p&oacute; das estrada apagando<br />
Os xod&oacute;s que eu tive por l&aacute;<br />
Foi entonce que ela surgiu<br />
Tava escrito Or&eacute;lia chegar</p>

<p>Or&eacute;lia, ai, ai, Or&eacute;lia<br />
S&oacute; de olhar teu olhar magneto<br />
Vi logo o meu fim<br />
Que paix&atilde;o, foi um choque da peste<br />
Meu corpo tremeu que nem curumim</p>

<p>Or&eacute;lia, ai, ai, Or&eacute;lia<br />
Ai, bichinha, se tu me deixar<br />
Vai ser muito ruim<br />
Fa&ccedil;o arte no leste e no oeste<br />
No sul, no nordeste<br />
Dou cabo de mim<br />
</p>
',
'creditos' => '<p>Arranjo e sanfona: Dominguinhos<br />
Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo<br />
Baixo: Arismar do Esp&iacute;rito Santo<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o e efeitos: Paulinho He-Man<br />
Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;<br />
Zabumba: Di&oacute; de Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio Porto<br />
Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho<br />
</p>
',
    'faixa_mp3' => '07_orelia.mp3', 
                'faixa_ogg' => '07_orelia.ogg',
                'disco_id' => '25',   ));

Musicas::create(
            array(
                'faixa' => 'Sorriso Cativante',
                'compositor' => '(Dominguinhos / Anast&aacute;cia)',
                'letra' => '<p>Quando chego no meu rancho<br />
Vejo minha moreninha<br />
De sorriso cativante<br />
Eu sacudo a poeira da estrada<br />
E os contratempos da vida<br />
Deixo em lugar distante<br />
Minha paz t&aacute; ali dentro<br />
Essa moreninha &eacute; meu calmante<br />
Minha paz t&aacute; ali dentro<br />
Essa moreninha &eacute; meu calmante</p>

<p>Tro&ccedil;o gostoso &eacute; o amor<br />
E coisa gostosa &eacute; querer bem<br />
&Eacute; uma fogueira bem acesa<br />
E a quentura da fogueira s&oacute; faz bem<br />
Quando chego perto da morena<br />
Sinto que eu pego fogo tamb&eacute;m<br />
Quando chego perto da morena<br />
Sinto que eu pego fogo tamb&eacute;m<br />
</p>
',
'creditos' => '<p>Arranjo e sanfona: Dominguinhos<br />
Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo<br />
Baixo: Arismar do Esp&iacute;rito Santo<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o e efeitos: Paulinho He-Man<br />
Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;<br />
Zabumba: Di&oacute; de Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio Porto<br />
Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho<br />
</p>
',
    'faixa_mp3' => '08_sorriso_cativante.mp3', 
                'faixa_ogg' => '08_sorriso_cativante.ogg',
                'disco_id' => '25',   ));

Musicas::create(
            array(
                'faixa' => 'Aquilo bom (Garotas do Leblon)',
                'compositor' => '(Luiz Gonzaga / Severino Ramos)',
                'letra' => '<p>Quando eu me encontro<br />
Com as garotas do Leblon<br />
Chega a ser aquilo bom, aquilo bom<br />
&Eacute; Maricota, &eacute; Mariquita e Marion<br />
Chega ser aquilo bom, aquilo bom<br />
&Eacute; Maricota, &eacute; Mariquita e Marion<br />
Chega ser aquilo bom, aquilo bom</p>

<p>Tem uma moreninha<br />
E tem uma marrom<br />
E tem uma loira sofisticadinha<br />
Chega a ser aquilo bom, aquilo bom<br />
Chega a ser aquilo bom, aquilo bom</p>

<p>Quando chega o domingo<br />
Vou correndo pro Leblon<br />
Chego na praia<br />
Tibungo com as meninas<br />
Chega ser aquilo bom, aquilo bom<br />
Chega ser aquilo bom, aquilo bom<br />
</p>
<p><strong>Facilita</strong><br />
<em>(Luiz Ramalho)</em><br />
</p>
<p>Comadre Joana sempre reparou<br />
A minissaia que a filha tem<br />
O namorado se invocou tamb&eacute;m<br />
E certo dia pra ela falou<br />
Tua saia, Bastiana, termina muito cedo<br />
Tua blusa, Bastiana, come&ccedil;a muito tarde<br />
Tua saia, Bastiana, termina muito cedo<br />
Tua blusa, Bastiana, come&ccedil;a muito tarde</p>

<p>Mas ela respondeu: oi, facilita<br />
Pra dan&ccedil;ar o xenhenh&eacute;m, oi, facilita<br />
Pra peneirar o xer&eacute;m, oi, facilita<br />
Pra dan&ccedil;ar na gafieira, oi, facilita<br />
Pra mandar pra lavadeira, oi, facilita<br />
Pra correr na capoeira, oi, facilita<br />
Pra subir no caminh&atilde;o, oi, facilita<br />
Pra passar no ribeir&atilde;o, oi, facilita<br />
</p>
<p><strong>O cheiro da Carolina</strong><br />
<em>(Amorim Roxo / Z&eacute; Gonzaga)</em><br />
</p>
<p>Carolina foi pro samba, Carolina<br />
Pra dan&ccedil;ar o xenhenh&eacute;m, Carolina<br />
Todo mundo caidinho, Carolina<br />
Pelo cheiro que ela tem, Carolina</p>

<p>Hum, hum, hum, Carolina<br />
Hum, hum, hum, Carolina<br />
Hum, hum, hum, Carolina<br />
Pelo cheiro que ela tem</p>

<p>Gente que nunca dan&ccedil;ou, Carolina<br />
Nesse dia quis dan&ccedil;ar, Carolina<br />
S&oacute; por causa do cheirinho, Carolina<br />
Todo mundo tava l&aacute;, Carolina</p>

<p>Hum, hum, hum, Carolina<br />
Hum, hum, hum, Carolina<br />
Hum, hum, hum, Carolina<br />
Todo mundo tava l&aacute;</p>

<p>Foi chegando o delegado, Carolina<br />
Pra olhar os que dan&ccedil;ava, Carolina<br />
O xerife entrou na dan&ccedil;a, Carolina<br />
E no fim tamb&eacute;m cheirava, Carolina</p>

<p>Hum, hum, hum, Carolina<br />
Hum, hum, hum, Carolina<br />
Hum, hum, hum, Carolina<br />
E no fim tamb&eacute;m cheirava<br />
</p>

',
'creditos' => '<p>Arranjo e sanfona: Dominguinhos<br />
Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo<br />
Baixo: Arismar do Esp&iacute;rito Santo<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o e efeitos: Paulinho He-Man<br />
Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;<br />
Zabumba: Di&oacute; de Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio Porto<br />
Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho<br />
</p>
',
    'faixa_mp3' => '09_aquilo_bom_facilita_o_cheiro_da_carolina.mp3', 
                'faixa_ogg' => '09_aquilo_bom_facilita_o_cheiro_da_carolina.ogg',
                'disco_id' => '25',   ));

Musicas::create(
            array(
                'faixa' => 'Xamego',
                'compositor' => '(Luiz Gonzaga / Miguel Lima)',
                'letra' => '<p>O xamego d&aacute; prazer<br />
O xamego faz sofrer<br />
O xamego &agrave;s vezes d&oacute;i, &agrave;s vezes n&atilde;o<br />
O xamego &agrave;s vezes r&oacute;i o cora&ccedil;&atilde;o</p>

<p>Todo mundo quer saber o que &eacute; o xamego<br />
Ningu&eacute;m sabe se ele &eacute; branco<br />
Se &eacute; mulato ou negro<br />
Ningu&eacute;m sabe se ele &eacute; branco<br />
Se &eacute; mulato ou negro</p>

<p>Quem n&atilde;o sabe o que &eacute; xamego pede pra vov&oacute;<br />
Que j&aacute; tem setenta anos e inda quer xod&oacute;<br />
Reclama noite e dia por viver t&atilde;o s&oacute;<br />
E reclama noite e dia por viver t&atilde;o s&oacute;</p>

<p>Ai, que xod&oacute;<br />
Ai, que xamego<br />
Ai, que chorinho bom<br />
Chega (toca) mais um bocadinho<br />
Sem sair do tom</p>

<p>Meu compadre chegadinho<br />
Ai, que xamego bom<br />
Ai, que xamego bom<br />
Ai, que xamego bom<br />
</p>
',
'creditos' => '<p>Arranjo e sanfona: Dominguinhos<br />
Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo<br />
Baixo: Arismar do Esp&iacute;rito Santo<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o e efeitos: Paulinho He-Man<br />
Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;<br />
Zabumba: Di&oacute; de Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio Porto<br />
Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho<br />
</p>
',
    'faixa_mp3' => '10_xamego.mp3', 
                'faixa_ogg' => '10_xamego.ogg',
                'disco_id' => '25',   ));

Musicas::create(
            array(
                'faixa' => 'Numa Sala De Reboco',
                'compositor' => '(Z&eacute; Marcolino / Luiz Gonzaga)',
                'letra' => '<p>Todo tempo quanto houver<br />
Pra mim &eacute; pouco<br />
Pra dan&ccedil;ar com meu benzinho<br />
Numa sala de reboco</p>

<p>Enquanto o fole<br />
T&aacute; tocando, t&aacute; gemendo<br />
Vou dan&ccedil;ando e vou dizendo<br />
Meu sofrer pra ela s&oacute;</p>

<p>E ningu&eacute;m nota<br />
Que eu t&ocirc; lhe conversando<br />
E nosso amor vai aumentando<br />
E pra que coisa mais mi&oacute;</p>

<p>S&oacute; fico triste<br />
Quando o dia amanhece<br />
Ai, meu Deus, se eu pudesse<br />
Acabar separa&ccedil;&atilde;o</p>

<p>Pra n&oacute;s viver<br />
Igualado a sanguessuga<br />
E nosso amor pede mais fuga<br />
Do que essa que nos d&atilde;o<br />
</p>

',
'creditos' => '<p>Arranjo e sanfona: Dominguinhos<br />
Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo<br />
Baixo: Arismar do Esp&iacute;rito Santo<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o e efeitos: Paulinho He-Man<br />
Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;<br />
Zabumba: Di&oacute; de Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio Porto<br />
Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho<br />
</p>
',
                'faixa_mp3' => '11_numa_sala_de_reboco.mp3', 
                'faixa_ogg' => '11_numa_sala_de_reboco.ogg',
                'disco_id' => '25',   ));
Musicas::create(
            array(
                'faixa' => 'Calango Da Lacraia',
                'compositor' => '(Luiz Gonzaga / Jeov&aacute; Portela) Participa&ccedil;&otilde;es Especiais: Fub&aacute; de Tapero&aacute; e Di&oacute; de Ara&uacute;jo',
                'letra' => '<p>Eu vou te contar um caso<br />
Voc&ecirc; ri que se escangaia<br />
A mulher do Z&eacute; Maria<br />
Foi dan&ccedil;ar, caiu a saia</p>

<p>Calangotango<br />
Do calango da lacraia<br />
Meu cabrito t&aacute; na corda<br />
Meu cavalo ta na baia</p>

<p>Minha filha n&atilde;o se casa<br />
Com homem que n&atilde;o trabaia<br />
Trabaiador quando &eacute; bom<br />
Segunda-feira n&atilde;o faia</p>

<p>No lugar que eu jogo bola<br />
N&atilde;o quero jogo de maia<br />
Tamb&eacute;m quero ser direito<br />
Voc&ecirc; mesmo me atrapaia</p>

<p>Desaforo de mineiro<br />
&Eacute; chamar nortista de tr&aacute;ia<br />
O nortista puxa a faca<br />
Mineiro puxa a navaia<br />
</p>
<p><strong>Nega Zefa</strong><br />
<em>(Severino Ramos / Noel Silva)</em><br />
</p>
<p>Gente<br />
Olha a Zefa como dan&ccedil;a o xaxeado<br />
&Ecirc;ta nega da mulesta do cabelo arrepiado</p>

<p>&Eacute; bonito a gente ver a nega no sal&atilde;o<br />
Todo mundo fica olhando a nega tipo viol&atilde;o<br />
&Eacute; bonito a gente ver a nega no sal&atilde;o<br />
&Ecirc;ta nega da mulesta pra dan&ccedil;ar coco e bai&atilde;o</p>

<p>A nega n&atilde;o &eacute; mineira, n&atilde;o<br />
A nega n&atilde;o &eacute; baiana, n&atilde;o<br />
Se n&atilde;o &eacute; pernambucana<br />
Vixe, que a nega &eacute; paraibana<br />
</p>
<p><strong>Coco xe&ecirc;m</strong><br />
<em>(Severino Ramos / Jacy Santos)</em><br />
</p>
<p>Tome ten&ecirc;ncia no coco, mulher<br />
&Eacute; coco xenhenh&eacute;m feito pra dan&ccedil;ar<br />
Tome ten&ecirc;ncia no coco, mulher<br />
Tome ten&ecirc;ncia no coco<br />
Vamo coco vadiar</p>

<p>S&oacute; nas cadeira dessa nega bole-bole<br />
Que parece at&eacute; o fole da sanfona do Nen&eacute;m<br />
Olha, as cadeira dessa nega tem um molho<br />
Todo mundo bota o olho quando dan&ccedil;a o xenhenh&eacute;m</p>

<p>Xenhenh&eacute;m, xenhenh&eacute;m, xenhenh&eacute;m<br />
Todo mundo bota o olho quando dan&ccedil;a o xenhenh&eacute;m<br />
Xenhenh&eacute;m, xenhenh&eacute;m, xenhenh&eacute;m<br />
Todo mundo bota o olho quando dan&ccedil;a o xenhenh&eacute;m</p>

<p>E quando chego l&aacute; na sede do Cunheca<br />
Eu fico logo sapeca quando a nega diz que vem<br />
Falo que a preta e feia, mas eu dou valor<br />
Pois a nega &eacute; mesmo um show quando dan&ccedil;a o xenhenh&eacute;m</p>

<p>Xenhenh&eacute;m, xenhenh&eacute;m, xenhenh&eacute;m<br />
Pois a nega &eacute; mesmo um show quando dan&ccedil;a o xenhenh&eacute;m<br />
Xenhenh&eacute;m, xenhenh&eacute;m, xenhenh&eacute;m<br />
Pois a nega &eacute; mesmo um show quando dan&ccedil;a o xenhenh&eacute;m<br />
</p>
',
'creditos' => '<p>Arranjo e sanfona: Dominguinhos<br />
Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo<br />
Baixo: Arismar do Esp&iacute;rito Santo<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o e efeitos: Paulinho He-Man<br />
Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;<br />
Zabumba: Di&oacute; de Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio Porto<br />
Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho<br />
</p>
',
    'faixa_mp3' => '12_calango_da_lacraia_nega_zefa_coco_xeem.mp3', 
                'faixa_ogg' => '12_calango_da_lacraia_nega_zefa_coco_xeem.ogg',
                'disco_id' => '25',   ));

Musicas::create(
            array(
                'faixa' => 'Canta Luiz',
                'compositor' => '(Dominguinhos / Poeta Oliveira) Participa&ccedil;&atilde;o Especial: Dominguinhos',
                'letra' => '<p>Canta Luiz, canta Luiz<br />
Tua sanfona e teu cantar me faz feliz<br />
Toca Luiz, canta pra n&oacute;s<br />
Quero dormir e acordar com tua voz</p>

<p>Uma sanfona, gib&atilde;o e chap&eacute;u de couro<br />
E o cantar desse grande sanfoneiro<br />
Sua can&ccedil;&atilde;o j&aacute; completou bodas de ouro<br />
Sendo cantada nos rinc&otilde;es do mundo inteiro</p>

<p>Vai Asa Branca cantar l&aacute; no Juazeiro<br />
Que o Assum Preto j&aacute; chegou pra te escutar<br />
Diz Acau&atilde; que me espere no umbuzeiro<br />
Que o Car&atilde;o j&aacute; est&aacute; come&ccedil;ando a cantar<br />
</p>

',
'creditos' => '<p>Arranjo e sanfona: Dominguinhos<br />
Guitarra, viol&atilde;o, viola e cavaquinho: Marcos Arcanjo<br />
Baixo: Arismar do Esp&iacute;rito Santo<br />
Bateria: Camilo Mariano<br />
Percuss&atilde;o e efeitos: Paulinho He-Man<br />
Tri&acirc;ngulo e pandeiro: Fub&aacute; de Tapero&aacute;<br />
Tri&acirc;ngulo e pandeiro: Fuba de Tapero&aacute;<br />
Zabumba: Di&oacute; de Ara&uacute;jo<br />
Teclados: Luiz Ant&ocirc;nio Porto<br />
Vocais: Jussara Louren&ccedil;o, Jurema Louren&ccedil;o, Paulinho He-Man e Elba Ramalho<br />
</p>
',
    'faixa_mp3' => '13_canta_luiz.mp3', 
                'faixa_ogg' => '13_canta_luiz.ogg',
                'disco_id' => '25',   ));

Musicas::create(
            array(
                'faixa' => 'Asa Branca',
                'compositor' => '(Luiz Gonzaga / Humberto Teixeira)Cita&ccedil;&atilde;o: Canta Luiz (Dominguinhos)',
                'letra' => '<p><em>Canta Luiz, canta Luiz<br />
Tua sanfona e teu cantar me faz feliz<br />
Toca Luiz, canta pra n&oacute;s<br />
Quero dormir e acordar com tua voz</em><br />
</p>
<p>Quando olhei a terra ardendo<br />
Qual fogueira de S&atilde;o Jo&atilde;o<br />
Eu perguntei a Deus do c&eacute;u, ai<br />
Por que tamanha judia&ccedil;&atilde;o<br />
Eu perguntei a Deus do c&eacute;u, ai<br />
Por que tamanha judia&ccedil;&atilde;o</p>

<p>Que braseiro, que fornalha<br />
Nem um p&eacute; de planta&ccedil;&atilde;o<br />
Por falta d&rsquo;&aacute;gua perdi meu gado<br />
Morreu de sede meu alaz&atilde;o<br />
Por falta d&rsquo;&aacute;gua perdi meu gado<br />
Morreu de sede meu alaz&atilde;o</p>

<p>Int&eacute; mesmo a Asa Branca<br />
Bateu asas do sert&atilde;o<br />
Entonce eu disse: &ldquo;adeus Rosinha<br />
Guarda contigo meu cora&ccedil;&atilde;o&rdquo;<br />
Entonce eu disse: &ldquo;adeus Rosinha<br />
Guarda contigo meu cora&ccedil;&atilde;o&rdquo;</p>

<p>Hoje longe muitas l&eacute;guas<br />
Na mais triste solid&atilde;o<br />
Espero a chuva cair de novo<br />
Pra mim voltar pro meu sert&atilde;o<br />
Espero a chuva cair de novo<br />
Pra mim voltar pro meu sert&atilde;o</p>

<p>Quando o verde dos teus olhos<br />
Se espalhar na planta&ccedil;&atilde;o<br />
Eu te asseguro, n&atilde;o chore n&atilde;o<br />
Eu voltarei viu, meu cora&ccedil;&atilde;o<br />
Eu te asseguro, n&atilde;o chore n&atilde;o, viu<br />
Que eu voltarei viu, meu cora&ccedil;&atilde;o<br />
</p>
',
'creditos' => '
',
    'faixa_mp3' => '01_asa_branca.mp3', 
                'faixa_ogg' => '01_asa_branca.ogg',
                'disco_id' => '26',   ));

Musicas::create(
            array(
                'faixa' => 'A Vida Do Viajante',
                'compositor' => '(Luiz Gonzaga / Herv&eacute; Cordovil)',
                'letra' => '<p>Minha vida &eacute; andar por esse pa&iacute;s<br />
Pra ver se um dia descanso feliz<br />
Guardando as recorda&ccedil;&otilde;es<br />
Das terras onde passei<br />
Andando pelos sert&otilde;es<br />
Dos amigos que l&aacute; deixei</p>

<p>Chuva e sol, poeira e carv&atilde;o<br />
Longe de casa, sigo o roteiro<br />
Mais uma esta&ccedil;&atilde;o<br />
E a saudade do Seu Gonzag&atilde;o</p>

<p>Mar e terra, inverno e ver&atilde;o<br />
Mostro o sorriso, mostro a alegria<br />
Mas eu mesmo, n&atilde;o<br />
E a saudade no meu cora&ccedil;&atilde;o<br />
</p>
',
'creditos' => '
',
    'faixa_mp3' => '02_a_vida_do_viajante.mp3', 
                'faixa_ogg' => '02_a_vida_do_viajante.ogg',
                'disco_id' => '26',   ));

Musicas::create(
            array(
                'faixa' => 'Imbalan&ccedil;a',
                'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas) Cita&ccedil;&atilde;o: Quando eu contar (Iai&aacute;) (Serginho Meriti / Beto Sem Bra&ccedil;o)',
                'letra' => '<p>&Oacute;ia a paia do coqueiro quando o vento d&aacute;<br />
O tombo da jangada nas ondas do mar<br />
Olha o tombo da jangada nas ondas do mar<br />
&Oacute;ia a paia do coqueiro quando o vento d&aacute;</p>

<p>Pra voc&ecirc; aguentar meu roj&atilde;o<br />
&Eacute; preciso saber requebrar<br />
Ter molejo nos p&eacute;s e nas m&atilde;os<br />
Ter no corpo o balan&ccedil;o do mar<br />
Ser que nem carrapeta no ch&atilde;o<br />
E virar folha seca no ar<br />
Que &eacute; pra quando escutar meu bai&atilde;o<br />
Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>

<p>Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar<br />
Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar<br />
Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar</p>

<p>Voc&ecirc; tem que viver no sert&atilde;o<br />
Pra na rede aprender embalar<br />
Aprender a bater no pil&atilde;o<br />
Na peneira aprender peneirar<br />
Ver relampo no mei do trov&atilde;o<br />
Fazer cobra de fogo no ar<br />
Que &eacute; pra quando escutar meu bai&atilde;o<br />
Imbalan&ccedil;a, imbalan&ccedil;a, imbalan&ccedil;ar<br />
</p>

',
'creditos' => '
',
    'faixa_mp3' => '03_imbalanca.mp3', 
                'faixa_ogg' => '03_imbalanca.ogg',
                'disco_id' => '26',   ));

Musicas::create(
            array(
                'faixa' => 'Pagode Russo',
                'compositor' => '(Luiz Gonzaga / Jo&atilde;o Silva)',
                'letra' => '<p>Ontem eu sonhei que tava em Moscou<br />
Dan&ccedil;ando pagode russo na boate Cossacou<br />
Ontem eu sonhei que tava em Moscou<br />
Dan&ccedil;ando pagode russo na boate Cossacou</p>

<p>Parecia at&eacute; um frevo naquele cai ou n&atilde;o cai<br />
Parecia at&eacute; um frevo naquele vai ou n&atilde;o vai<br />
Parecia at&eacute; um frevo naquele cai ou n&atilde;o cai<br />
Parecia at&eacute; um frevo naquele vai ou n&atilde;o vai</p>

<p>Entra cossaco, cossaco dan&ccedil;a agora<br />
Na dan&ccedil;a do cossaco, n&atilde;o fica cossaco fora<br />
Entra cossaco, cossaco dan&ccedil;a agora<br />
Na dan&ccedil;a do cossaco, n&atilde;o fica cossaco fora<br />
</p>
<p><strong>Onde tu t&aacute; nen&eacute;m</strong><br />
<em>(Luiz Bandeira)</em><br />
</p>
<p>Onde tu t&aacute; nen&eacute;m<br />
Eu vim te procurar<br />
Vamos fazer as pazes<br />
Tenho tantas frases pra te agradar</p>

<p>Onde tu t&aacute; nen&eacute;m<br />
Eu vim te procurar<br />
Saudade sai me solta<br />
T&ocirc; aqui de volta pra meu bem beijar</p>

<p>Estou aqui de novo junto ao meu povo<br />
Minha gente amiga<br />
Quem me conhece sabe<br />
Que eu detesto intriga</p>

<p>Uma saudade enorme<br />
Come e deita e dorme no meu cora&ccedil;&atilde;o<br />
Rem&eacute;dio indicado pra quem est&aacute; errado<br />
&Eacute; pedir perd&atilde;o</p>

<p>Por uma briga &agrave; toa<br />
Tanta coisa boa a gente t&aacute; perdendo<br />
Sert&atilde;o em noite branca<br />
O dia amanhecendo</p>

<p>Nossa conversa linda<br />
Tem segredo ainda para um s&eacute;culo mais<br />
N&atilde;o &eacute; pra nos gabar<br />
Mas n&atilde;o existe um par como n&oacute;s dois se faz<br />
</p>
',
'creditos' => '
',
    'faixa_mp3' => '04_pagode_russo_onde_tu_ta_nenem.mp3', 
                'faixa_ogg' => '04_pagode_russo_onde_tu_ta_nenem.ogg',
                'disco_id' => '26',   ));

Musicas::create(
            array(
                'faixa' => 'Numa Sala De Reboco',
                'compositor' => '(Z&eacute; Marcolino / Luiz Gonzaga)',
                'letra' => '<p>Todo tempo quanto houver<br />
Pra mim &eacute; pouco<br />
Pra dan&ccedil;ar com meu benzinho<br />
Numa sala de reboco</p>

<p>Enquanto o fole<br />
T&aacute; tocando, t&aacute; gemendo<br />
Vou cantando e vou dizendo<br />
Meu sofrer pra ela s&oacute;</p>

<p>E ningu&eacute;m nota<br />
Que eu t&ocirc; lhe conversando<br />
E nosso amor vai aumentando<br />
E pra que coisa mais mi&oacute;</p>

<p>S&oacute; fico triste<br />
Quando o dia amanhece<br />
Ai, meu Deus, se eu pudesse<br />
Acabar separa&ccedil;&atilde;o</p>

<p>Pra n&oacute;s viver<br />
Igualado a sanguessuga<br />
E nosso amor pede mais fuga<br />
Do que essa que nos d&atilde;o<br />
</p>
<p><strong>Estrada de Canind&eacute;</strong><br />
<em>(Luiz Gonzaga / Humberto Teixeira)</em><br />
</p>
<p>Ai, ai, que bom<br />
Que bom, que bom que &eacute;<br />
Uma estrada e uma caboca<br />
Uma gente andando a p&eacute;</p>

<p>Ai, ai, que bom<br />
Que bom, que bom que &eacute;<br />
Uma estrada e a lua branca<br />
No sert&atilde;o de Canind&eacute;</p>

<p>Artom&oacute;ve l&aacute; nem se sabe<br />
Se &eacute; home ou se &eacute; mui&eacute;<br />
Quem &eacute; rico anda em burrico<br />
Quem &eacute; pobre anda a p&eacute;</p>

<p>Mas o pobre v&ecirc; nas estrada<br />
O orvaio beijando as flor<br />
V&ecirc; de perto o galo campina<br />
Que quando canta muda de cor</p>

<p>Vai moiando os p&eacute;s nos riacho<br />
Que &aacute;gua fresca, Nosso Senhor!<br />
Vai oiando coisa a gran&eacute;<br />
Coisas que pra mode ver<br />
O crist&atilde;o tem que andar a p&eacute;</p>

',
'creditos' => '
',
    'faixa_mp3' => '05_numa_sala_de_reboco_estrada_do_caninde.mp3', 
                'faixa_ogg' => '05_numa_sala_de_reboco_estrada_do_caninde.ogg',
                'disco_id' => '26',   ));

Musicas::create(
            array(
                'faixa' => 'Juazeiro',
                'compositor' => '(Luiz Gonzaga / Humberto Teixeira) 
Cita&ccedil;&atilde;o: Admir&aacute;vel gado novo (Z&eacute; Ramalho) / B&eacute;rad&ecirc;ro (Chico C&eacute;sar)<br />
</p>',
                'letra' => '<p>Minha m&atilde;e quando eu morrer<br />
Me cubra com o seu v&eacute;u<br />
Em cima da minha cova<br />
Bote o gib&atilde;o e o chap&eacute;u<br />
Que &eacute; pra eu cantar aboio<br />
Nas vaquejadas do c&eacute;u</p>

<p>Juazeiro, juazeiro<br />
Me responda, por favor<br />
Juazeiro, velho amigo<br />
Onde anda meu amor</p>

<p>Ai, Juazeiro<br />
Ela nunca mais voltou<br />
Diz, Juazeiro<br />
Onde anda meu amor</p>

<p>Juazeiro, n&atilde;o te alembra<br />
Quando o nosso amor nasceu?<br />
Toda tarde &agrave; tua sombra<br />
Conversava ela e eu</p>

<p>Ai, Juazeiro<br />
Onde anda meu amor?<br />
Diz, Juazeiro<br />
Como d&oacute;i a minha dor</p>

<p>Juazeiro, seje franco<br />
Ela tem um novo amor<br />
Se n&atilde;o tem, por que tu choras<br />
Solid&aacute;rio a minha dor?</p>

<p>Ai, Juazeiro<br />
N&atilde;o me deixe assim roer<br />
Ai, Juazeiro<br />
T&ocirc; cansada de sofrer<br />
</p>
<p><em>&Ecirc;, &ocirc;, &ocirc;<br />
Vida de gado<br />
Povo marcado, &ecirc;<br />
Povo feliz</em><br />
</p>
<p>Eu fui me embora, meu amor chorou<br />
Eu fui me embora, meu amor chorou<br />
Eu fui vou embora, meu amor chorou<br />
Vou voltar</p>

<p>Eu vou nas asas de um passarinho<br />
Eu vou nos beijos de um beija-flor<br />
Eu vou nas asas de um passarinho<br />
Eu vou nos beijos de um beija-flor</p>

<p>No tic-tic-tic-tac do meu cora&ccedil;&atilde;o, renascer&aacute;<br />
No meu cora&ccedil;&atilde;o, renascer&aacute;<br />
Timbalada &eacute; semente de um novo dia<br />
Nordeste,sofrimento, povo lutador<br />
Entre mares e montanhas com voc&ecirc; eu vou<br />
Amor, &eacute; s&oacute; me chamar que eu vou<br />
Amor, &eacute; s&oacute; me chamar, amor</p>

<p>Juazeiro, meu destino<br />
T&aacute; ligado junto ao teu<br />
No teu tronco tem dois nomes<br />
Ela mesma que escreveu</p>

<p>Ai, Juazeiro<br />
N&atilde;o me deixe assim roer<br />
Diz , Juazeiro<br />
Eu prefiro at&eacute; morrer<br />
</p>
<p><em>Os &oacute;io tristes da fita<br />
Rodando no gravador<br />
Uma mo&ccedil;a cosendo roupa<br />
Com a linha do Equador<br />
E a voz da santa dizendo<br />
&ldquo;O que &eacute; que eu t&ocirc; fazendo<br />
C&aacute; em cima desse andor?&rdquo;</em><br />
</p>
',
'creditos' => '<p>Beija-flor<br />
(Xex&eacute;u / Z&eacute; Raimundo)<br />
Cita&ccedil;&atilde;o: Admir&aacute;vel gado novo (Z&eacute; Ramalho) / B&eacute;rad&ecirc;ro (Chico C&eacute;sar)<br />
</p>

',
                'faixa_mp3' => '06_juazeiro_beija_flor.mp3', 
                'faixa_ogg' => '06_juazeiro_beija_flor.ogg',
                'disco_id' => '26',   ));

Musicas::create(
            array(
                'faixa' => 'Luar Do Sert&atilde;o',
                'compositor' => '(Jo&atilde;o Pernambuco / Catulo da Paix&atilde;o Cearense)',
                'letra' => '<p>Ai, que saudade do luar da minha terra<br />
L&aacute; na serra branquejando<br />
Folhas secas pelo ch&atilde;o<br />
Este luar c&aacute; da cidade t&atilde;o escuro<br />
N&atilde;o tem aquela saudade<br />
Do luar l&aacute; do sert&atilde;o</p>

<p>N&atilde;o h&aacute;, &oacute; gente, &oacute; n&atilde;o<br />
Luar como este do sert&atilde;o<br />
N&atilde;o h&aacute;, &oacute; gente, &oacute; n&atilde;o<br />
Luar como este do sert&atilde;o</p>

<p>Se a lua nasce por detr&aacute;s da verde mata<br />
Mais parece um sol de prata<br />
Prateando a solid&atilde;o<br />
E a gente pega na viola que ponteia<br />
E a can&ccedil;&atilde;o e a lua cheia<br />
A nos nascer do cora&ccedil;&atilde;o</p>

<p>Coisa mais bela neste mundo n&atilde;o existe<br />
Do que ouvir-se um galo triste<br />
No sert&atilde;o se faz luar<br />
Parece at&eacute; que a alma da lua &eacute; que descanta<br />
Escondida na garganta<br />
Desse galo a solu&ccedil;ar</p>

<p>Ai, quem me dera que eu morresse l&aacute; na serra<br />
Abra&ccedil;ada &agrave; minha terra<br />
E dormindo de uma vez<br />
Ser enterrada numa grota pequenina<br />
Onde &agrave; tarde a surunina<br />
Chora sua viuvez<br />
</p>

',
'creditos' => '

',
                'faixa_mp3' => '07_luar_do_sertao.mp3', 
                'faixa_ogg' => '07_luar_do_sertao.ogg',
                'disco_id' => '26',   ));

Musicas::create(
            array(
                'faixa' => 'D&uacute;vida',
                'compositor' => '(Luiz Gonzaga / Domingos Ramos)',
                'letra' => '<p>N&atilde;o sei por que raz&atilde;o tu tens ci&uacute;mes<br />
N&atilde;o sei por que raz&atilde;o n&atilde;o cr&ecirc;s em mim<br />
Bem sabes que te quero<br />
E o meu amor &eacute; t&atilde;o sincero<br />
&Eacute; demais duvidar tanto assim, ai de mim<br />
N&atilde;o sei por que raz&atilde;o tu tens ci&uacute;mes<br />
N&atilde;o sei por que raz&atilde;o n&atilde;o cr&ecirc;s em mim</p>

<p>Bem v&ecirc;s que vivo escravizado<br />
Preso ao teu encanto<br />
N&atilde;o deves duvidar assim de quem te adora tanto<br />
N&atilde;o deves duvidar de mim<br />
Por que n&atilde;o tens raz&atilde;o<br />
E assim torturas sem querer meu cora&ccedil;&atilde;o<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '08_duvida.mp3', 
                'faixa_ogg' => '08_duvida.ogg',
                'disco_id' => '26',   ));

Musicas::create(
            array(
                'faixa' => 'S&uacute;plica Cearense',
                'compositor' => '(Gordurinha / Nelinho)',
                'letra' => '<p>&Oacute; Deus, perdoe este pobre coitado<br />
Que de joelhos rezou um bocado<br />
Pedindo pra chuva cair sem parar</p>

<p>&Oacute; Deus, ser&aacute; que o Senhor se zangou<br />
E s&oacute; por isso o sol se arretirou<br />
Fazendo cair toda chuva que h&aacute;</p>

<p>Senhor, eu pedi para o sol se esconder um tiquinho<br />
Pedi pra chover, mas chover de mansinho<br />
Pra ver se nascia uma planta no ch&atilde;o</p>

<p>Meu Deus, se eu n&atilde;o rezei direito o Senhor me perdoe<br />
Mas eu acho que a culpa foi<br />
Desse pobre que nem sabe fazer ora&ccedil;&atilde;o</p>

<p>Meu Deus, perdoe eu encher os meus z&oacute;io de &aacute;gua<br />
E ter lhe pedido cheinho de m&aacute;goa<br />
Pro sol inclemente se arretirar</p>

<p>Desculpe, eu pedi a toda hora pra chegar o inverno<br />
Desculpe eu pedir para acabar com o inferno<br />
Que sempre queimou o meu Cear&aacute;<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '09_suplica_cearense.mp3', 
                'faixa_ogg' => '09_suplica_cearense.ogg',
                'disco_id' => '26',   ));

Musicas::create(
            array(
                'faixa' => 'Qui Nem jil&oacute;',
                'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
                'letra' => '<p>Se a gente lembra s&oacute; por lembrar<br />
Do amor que a gente um dia perdeu<br />
Saudade int&eacute; que assim &eacute; bom<br />
Pro cabra se convencer<br />
Que &eacute; feliz sem saber<br />
Pois n&atilde;o sofreu</p>

<p>Por&eacute;m, se a gente vive a sonhar<br />
Com algu&eacute;m que se deseja rever<br />
Saudade intonce a&iacute; &eacute; ruim<br />
Eu tiro isso por mim<br />
Que vivo doido a sofrer</p>

<p>Ai, quem me dera voltar<br />
Pros bra&ccedil;os do meu xod&oacute;<br />
Saudade assim faz doer<br />
Amarga que nem jil&oacute;<br />
Mas ningu&eacute;m pode dizer<br />
Que viu triste a chorar<br />
Saudade, o meu rem&eacute;dio &eacute; cantar<br />
Saudade, o meu rem&eacute;dio &eacute; cantar<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '10_que_nem_jilo.mp3', 
                'faixa_ogg' => '10_que_nem_jilo.ogg',
                'disco_id' => '26',   ));

Musicas::create(
            array(
                'faixa' => 'Assum Preto',
                'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
                'letra' => '<p>Tudo em vorta &eacute; s&oacute; beleza<br />
C&eacute;u de abril e a mata em flor<br />
Mas assum preto, cego dos &oacute;io<br />
N&atilde;o vendo a luz, ai, canta de dor<br />
Mas assum preto, cego dos &oacute;io<br />
N&atilde;o vendo a luz, ai, canta de dor</p>

<p>Tarvez por ignor&acirc;n&ccedil;a<br />
Ou marade das pior<br />
Furaro os &oacute;io do assum preto<br />
Pra ele assim, ai, cantar mi&oacute;<br />
Furaro os &oacute;io do assum preto<br />
Pra ele assim, ai, cantar mi&oacute;</p>

<p>Assum preto v&eacute;ve sorto<br />
Mas n&atilde;o pode avoar<br />
Mil v&ecirc;ze a sina de uma gaiola<br />
Desde que o c&eacute;u, ai, pudesse oi&aacute;<br />
Mil v&ecirc;ze a sina de uma gaiola<br />
Desde que o c&eacute;u, ai, pudesse oi&aacute;</p>

<p>Assum preto o meu cantar<br />
&Eacute; t&atilde;o triste quanto o teu<br />
Tamb&eacute;m roubaram o meu amor, ai<br />
Que era a luz, ai, dos &oacute;io meu<br />
Tamb&eacute;m roubaram o meu amor, ai<br />
Que era a luz, ai, dos &oacute;io meu<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '11_assum_preto.mp3', 
                'faixa_ogg' => '11_assum_preto.ogg',
                'disco_id' => '26',   ));

Musicas::create(
            array(
                'faixa' => 'Sabi&aacute;',
                'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas)',
                'letra' => '<p>A todo mundo eu dou psiu<br />
Perguntando por meu bem<br />
Tendo o cora&ccedil;&atilde;o vazio<br />
Vivo assim a dar psiu<br />
Sabi&aacute; vem c&aacute; tamb&eacute;m</p>

<p>Tu que andas pelo mundo (sabi&aacute;)<br />
Tu que tanto j&aacute; voou (sabi&aacute;)<br />
Tu que canta, passarinho (sabi&aacute;)<br />
Alivia a minha dor</p>

<p>Tem pena d&rsquo;eu (sabi&aacute;)<br />
Diz por favor (sabi&aacute;)<br />
Tu que canta passarinho (sabi&aacute;)<br />
Por onde anda meu amor (sabi&aacute;)</p>

<p>Tem pena d&rsquo;eu (sabi&aacute;)<br />
Diz por favor (sabi&aacute;)<br />
Tu que canta pelo mundo (sabi&aacute;)<br />
Por onde anda meu amor (sabi&aacute;)<br />
</p>
',
'creditos' => '
',
                'faixa_mp3' => '12_sabia.mp3', 
                'faixa_ogg' => '12_sabia.ogg',
                'disco_id' => '26',   ));

Musicas::create(
            array(
                'faixa' => 'De Volta Pro Aconchego',
                'compositor' => '(Dominguinhos / Nando Cordel) Participa&ccedil;&atilde;o Especial: Dominguinhos',
                'letra' => '<p>Estou de volta pro meu aconchego<br />
Trazendo na mala bastante saudade<br />
Querendo um sorriso sincero, um abra&ccedil;o<br />
Para aliviar meu cansa&ccedil;o<br />
E toda essa minha vontade</p>

<p>Que bom poder t&aacute; contigo de novo<br />
Ro&ccedil;ando teu corpo e beijando voc&ecirc;<br />
Pra mim tu &eacute;s a estrela mais linda<br />
Teus olhos me prendem, fascinam<br />
A paz que eu gosto de ter</p>

<p>&Eacute; duro ficar sem voc&ecirc; vez em quando<br />
Parece que falta um peda&ccedil;o de mim<br />
Me alegro na hora de regressar<br />
Parece que vou mergulhar<br />
Na felicidade sem fim<br />
</p>

',
'creditos' => '
',
                'faixa_mp3' => '13_de_volta_pro_aconchego.mp3', 
                'faixa_ogg' => '13_de_volta_pro_aconchego.ogg',
                'disco_id' => '26',   ));

Musicas::create(
            array(
                'faixa' => 'Nem Se Despediu De Mim',
                'compositor' => '(Luiz Gonzaga / Jo&atilde;o Silva) Participa&ccedil;&atilde;o: Dominguinhos',
                'letra' => '<p>Nem se despediu de mim<br />
Nem se despediu de mim<br />
J&aacute; chegou contando as horas<br />
Bebeu &aacute;gua e foi-se embora<br />
Nem se despediu de mim<br />
J&aacute; chegou contando as horas<br />
Bebeu &aacute;gua e foi-se embora<br />
Nem se despediu de mim</p>

<p>Te assossega o cora&ccedil;&atilde;o<br />
Que este amor renascer&aacute;<br />
Vai-se um dia, mas vem outro<br />
Da&iacute; ent&atilde;o, quando ele voltar<br />
Pegue o pote e a quartinha<br />
Bote fogo na tamarinha<br />
Que ele vai se declarar<br />
Pegue o pote e a quartinha<br />
Bote fogo na tamarinha<br />
Que ele vai se declarar<br />
</p>
<p><strong>S&atilde;o Jo&atilde;o do carneirinho</strong><br />
<em>(Guio de Morais / Luiz Gonzaga)</em><br />
</p>
<p>Eu plantei meu milho todo<br />
No dia de S&atilde;o Jos&eacute;<br />
Se me ajuda a provid&ecirc;ncia<br />
Vamo ter milho a gran&eacute;<br />
Neste ano eu vou colher<br />
Vinte espiga em cada p&eacute;<br />
Pelos calco vou colher<br />
Vinte espiga em cada p&eacute;</p>

<p>Ai, S&atilde;o Jo&atilde;o<br />
S&atilde;o Jo&atilde;o dos Carneirinho<br />
Voc&ecirc; &eacute; t&atilde;o bonzinho<br />
Fale com S&atilde;o Jos&eacute;<br />
Fale l&aacute; com S&atilde;o Jos&eacute;<br />
Pe&ccedil;a pra ele me ajudar<br />
Pe&ccedil;a pro meu milho d&aacute;<br />
Vinte espiga em cada p&eacute;<br />
</p>
<p><strong>Pedras que cantam</strong><br />
<em>(Dominguinhos / Fausto Nilo)</em><br />
</p>
<p>Quem &eacute; rico mora na praia<br />
Mas quem trabalha n&atilde;o tem onde morar<br />
Quem n&atilde;o chora dorme com fome<br />
Mas quem tem nome joga prata no ar</p>

<p>&Ocirc; tempo duro no ambiente<br />
&Ocirc; tempo escuro na mem&oacute;ria<br />
O tempo &eacute; quente e o drag&atilde;o &eacute; voraz<br />
Vamos embora de repente<br />
Vamos embora sem demora<br />
Vamos pra frente que pra tr&aacute;s n&atilde;o d&aacute; mais</p>

<p>Pra ser feliz num lugar<br />
Pra sorrir e cantar<br />
Tanta coisa a gente inventa<br />
Mas o dia que a poesia se arrebenta<br />
&Eacute; que as pedras v&atilde;o cantar<br />
</p>

',
'creditos' => '
',
                'faixa_mp3' => '14_nem_se_despediu_de_mim.mp3', 
                'faixa_ogg' => '14_nem_se_despediu_de_mim.ogg',
                'disco_id' => '26',   ));

Musicas::create(
            array(
                'faixa' => 'Rio De Sonho',
                'compositor' => '(Dominguinhos / Wally Bianchi)',
                'letra' => '
Vou soltar meu barco
Nesse rio de sonho
Para te seguir
Onde quer que passe
O fio do teu caminho
Também quero ir

Nessa estrada juntos
Tanta coisa boa
Pode acontecer
Não preciso nada
Só você por perto
Para eu viver
Não preciso nada
Só você por perto
Para eu viver

Sempre que te vejo
Os meus olhos giram
Tontos de emoção
Dentro aqui do peito
Bate disparado
O meu coração

Deixo que teus braços
Levem os meus passos
E o que for, será
Você é meu anjo
Meu raio de lua
E canto de sabiá
Você é meu anjo
Meu raio de lua
E canto de sabiá
',
'creditos' => 'cantam: Elba e Dominguinhos
Arranjo: Dominguinhos e Zé Américo Bastos
Acordeom: Dominguinhos
Teclados: Zé Américo Bastos
Bateria: Camilo Mariano
Contrabaixo: Fernando Gaby (Fofão)
Guitarra e violão de nylon: Marcos Arcanjo
Percussão: Paulinho He-Man
Vocais: Zepa, Jussara Lourenço e Bettina Graziani

',
                'faixa_mp3' => '01_rio_de_sonho.mp3', 
                'faixa_ogg' => '01_rio_de_sonho.ogg',
                'disco_id' => '27',   ));

Musicas::create(
            array(
                'faixa' => 'Tenho Sede',
                'compositor' => '(Dominguinhos / Anastácia)',
                'letra' => 'Traga-me um copo d’água, tenho sede
E essa sede pode me matar
Minha garganta pede um pouco de água
E os meus olhos pedem teu olhar

A planta pede chuva quando quer brotar
O céu logo escurece quando vai chover
Meu coração só pede o teu amor
Se não me deres posso até morrer

',
'creditos' => 'Arranjo, piano e teclados: Zé Américo Bastos
Acordeom: Dominguinhos
Bateria: Camilo Mariano
Contrabaixo: Fernando Gaby (Fofão)
Guitarra e violão de nylon: Marcos Arcanjo
Percussão: Paulinho He-Man
Flautas: Zé Canuto
',
                'faixa_mp3' => '02_tenho_sede.mp3', 
                'faixa_ogg' => '02_tenho_sede.ogg',
                'disco_id' => '27',   ));

Musicas::create(
            array(
                'faixa' => 'Lamento Sertanejo',
                'compositor' => '(Dominguinhos / Gilberto Gil)',
                'letra' => 'Por ser de lá
Do sertão, lá do serrado
Lá do interior do mato
Da catinga, do roçado

Eu quase não saio
Eu quase não tenho amigo
Eu quase que não consigo
Ficar na cidade sem viver contrariado

Por ser de lá
Na certa por isso mesmo
Não gosto de cama mole
Não sei comer sem torresmo

Eu quase não falo
Quase não sei de nada
Sou como rês desgarrada
Nessa multidão boiada
Caminhando a esmo

E era nada de nem nunca de negro não
E era né de nunca mais
E era noite de né nunca de nada mais
E era nem de negro não

Pipoca ali, aqui, pipoca além
Desanoitece a manhã
Tudo mudou
',
'creditos' => 'Citação: Pipoca moderna (Caetano Veloso / Sebastião Biano)
canta: Elba
Arranjo, piano e teclados: Zé Américo Bastos
Acordeom: Dominguinhos
Bateria: Camilo Mariano
Contrabaixo: Jacaré
Guitarra e violão de nylon e aço: Marcos Arcanjo
Percussão: Paulinho He-Man
Vocais: Zepa, Marcela Paiva, Gilson Vieira e Bettina Graziani
',
                'faixa_mp3' => '03_lamento_sertanejo.mp3', 
                'faixa_ogg' => '03_lamento_sertanejo.ogg',
                'disco_id' => '27',   ));

Musicas::create(
            array(
                'faixa' => 'Eu Só Quero Um Xodó',
                'compositor' => '(Dominguinhos / Anastácia)',
                'letra' => 'Que falta eu sinto de um bem
Que falta me faz um xodó
Mas como eu não tenho ninguém
Eu levo a vida assim tão só

Eu só quero um amor
Que acabe o meu sofrer
Um xodó pra mim
Do meu jeito assim
Que alegre o meu viver

',
'creditos' => 'cantam: Elba e Dominguinhos
Arranjo, piano e teclados: Zé Américo Bastos
Acordeom: Dominguinhos
Bateria: Camilo Mariano
Contrabaixo: Fernando Gaby (Fofão)
Guitarra e violão de nylon: Marcos Arcanjo
Percussão: Paulinho He-Man
Sax alto: Zé Canuto
Trombone: Aldivas Ayres
Trompete: Jessé Sadoc
Vocais: Zepa, Jurema de Cândia, Marcela Paiva, Gilson Vieira e Bettina Graziani
',
                'faixa_mp3' => '04_eu_so_quero_um_xodo.mp3', 
                'faixa_ogg' => '04_eu_so_quero_um_xodo.ogg',
                'disco_id' => '27',   ));

Musicas::create(
            array(
                'faixa' => 'Vem Ficar Comigo',
                'compositor' => '(Nando Cordel / Dominguinhos)',
                'letra' => 'Vem ficar comigo
Vem ser a luz da minha estrada
Vivo esperando esse céu para brilhar
Teu sorriso lindo
A tua boca doce sempre
Eu necessito do teu amor
Pra me enfeitar

Vem ficar comigo
Vem cuidar de mim
Só teu paraíso
É quem me faz viver feliz

Não me deixe solta
Posso me perder
De tudo no mundo
O que eu mais quero é ter você
',
'creditos' => 'canta: Elba
Arranjo, piano, teclados e samplers (cordas): Zé Américo Bastos
Acordeom: Dominguinhos
Bateria: Camilo Mariano
Contrabaixo: Fernando Gaby (Fofão)
Violão de aço e nylon: Marcos Arcanjo
Percussão: Paulinho He-Man
Flautas: Zé Canuto
',
                'faixa_mp3' => '05_vem_ficar_comigo.mp3', 
                'faixa_ogg' => '05_vem_ficar_comigo.ogg',
                'disco_id' => '27',   ));

Musicas::create(
            array(
                'faixa' => 'Onde Está Você',
                'compositor' => '(Zezum)',
                'letra' => 'Onde está você
Apareça aqui pra me ver
Eu vou gostar demais
Sabes onde estou e nada mudou
Venha me dizer onde você andou

Eu andei sem te encontrar
Em quase todo lugar
Eu perguntava por ti
Teus passos sempre segui
Querendo te encontrar
Só pra falar de amor
Frases que nunca falei
Carinhos que nunca fiz
Beijos que nunca te dei
O amor que te neguei
Agora quero te dar
E te fazer feliz
',
'creditos' => 'cantam: Elba e Dominguinhos
Arranjo: Dominguinhos e Zé Américo Bastos
Acordeom: Dominguinhos
Piano e teclados: Zé Américo Bastos
Bateria: Camilo Mariano
Contrabaixo: Fernando Gaby (Fofão)
Guitarra e violão de nylon: Marcos Arcanjo
Percussão: Paulinho He-Man
',
                'faixa_mp3' => '06_onde_esta_voce.mp3', 
                'faixa_ogg' => '06_onde_esta_voce.ogg',
                'disco_id' => '27',   ));


Musicas::create(
            array(
                'faixa' => 'Retrato Da Vida',
                'compositor' => '(Djavan / Dominguinhos)',
                'letra' => 'Esse matagal sem fim
Essa estrada, esse rio seco
Essa dor que mora em mim
Não descansa e nem dorme cedo
O retrato da minha vida
É amar em segredo

Não quer saber de mim
E eu vivendo da tua vida
Deus no céu e você aqui
A esperança é quem me abriga
Esses campos não tardam em florir
Já se espera uma boa colheita
E tudo parece seguir
Fazendo a vida tão direita

Mas e você, o que faz
Que não repara no chão
Por onde tem que passar
E pisa em meu coração?
O teu beijo em meu destino
Era tudo que eu queria
Ser teu (meu) homem, teu (meu) menino
O ser amado de todo dia
',
'creditos' => 'cantam: Elba e Dominguinhos
Arranjo, piano, teclados e samplers (cordas): Zé Américo Bastos
Acordeom: Dominguinhos
Bateria: Camilo Mariano
Contrabaixo: Fernando Gaby (Fofão)
Guitarra e violão de nylon: Marcos Arcanjo
Percussão: Paulinho He-Man
',
                'faixa_mp3' => '07_retrato_da_vida.mp3', 
                'faixa_ogg' => '07_retrato_da_vida.ogg',
                'disco_id' => '27',   ));

Musicas::create(
            array(
                'faixa' => 'Chama',
                'compositor' => '(Tato)',
                'letra' => 'Já faz tanto tempo
Talvez seja tarde
Esse chão cinzento
Uma chama ainda arde

Todo o meu lamento
Por não poder entender
Se hoje mesmo com saudade
Finjo não te conhecer

Que é pra ver
Se ainda há brilho nesse teu olhar
Que é pra ver
Se essa canção ainda te faz lembrar

De tudo aquilo que teu coração
Custa esquecer
Quero ver
Se ainda emociono você
',
'creditos' => 'cantam: Elba e Dominguinhos
Arranjo e teclados: Zé Américo Bastos
Acordeom: Dominguinhos
Bateria: Camilo Mariano
Contrabaixo: Fernando Gaby (Fofão)
Guitarra e violão de nylon: Marcos Arcanjo
Guitarra (slide): Pedro Braga
Percussão: Paulinho He-Man
',
                'faixa_mp3' => '08_chama.mp3', 
                'faixa_ogg' => '08_chama.ogg',
                'disco_id' => '27',   ));

Musicas::create(
            array(
                'faixa' => 'Xote De Navegação',
                'compositor' => '(Dominguinhos / Chico Buarque)',
                'letra' => 'Eu vejo aquele rio a deslizar
O tempo atravessar meu vilarejo
E às vezes largo o afazer
Me pego em sonhos a navegar

Com o nome Paciência
Vai a minha embarcação
Pendulando como o tempo
E tendo igual destinação

Pra quem anda na barcaça
Tudo, tudo passa
Só o tempo não

Passam paisagens furta-cor
Passa e repassa o mesmo cais
No mesmo instante eu vejo a flor
Que desabrocha e se desfaz

Essa é a tua música
É tua respiração
Mas eu tenho só teu lenço
Em minha mão

Olhando o meu navio
O impaciente capataz
Grita da ribanceira
Que navega pra trás

No convés eu vou sombrio
Cabeleira de rapaz
Pela água do rio que é sem fim
E é nunca mais
',
'creditos' => 'cantam: Elba e Dominguinhos
Arranjo, piano, teclados e samplers (cordas): Zé Américo Bastos
Acordeom: Dominguinhos
Teclado: Zé Américo Bastos
Bateria: Camilo Mariano
Contrabaixo: Fernando Gaby (Fofão)
Guitarra e violão de nylon: Marcos Arcanjo
Percussão: Paulinho He-Man
',
                'faixa_mp3' => '09_xote_de_navegacao.mp3', 
                'faixa_ogg' => '09_xote_de_navegacao.ogg',
                'disco_id' => '27',   ));

Musicas::create(
            array(
                'faixa' => 'Gostoso Demais',
                'compositor' => '(Dominguinhos / Nando Cordel)',
                'letra' => 'Tô com saudade de tu, meu desejo
Tô com saudade do beijo e do mel
Do teu olhar carinhoso
Do teu abraço gostoso
De passear no teu céu

É tão difícil ficar sem você
O teu amor é gostoso demais
Teu cheiro me dá prazer
Quando estou com você
Estou nos braços da paz

Pensamento viaja
E vai buscar meu bem querer
Não dá pra ser feliz assim
Tem dó de mim
Que é que eu posso fazer
',
'creditos' => 'cantam: Elba e Dominguinhos
Arranjo, piano e teclados: Zé Américo Bastos
Acordeom: Dominguinhos
Bateria: Camilo Mariano
Contrabaixo: Fernando Gaby (Fofão)
Guitarra e violão de nylon e aço: Marcos Arcanjo
Percussão: Paulinho He-Man
',
                'faixa_mp3' => '10_gostoso_demais.mp3', 
                'faixa_ogg' => '10_gostoso_demais.ogg',
                'disco_id' => '27',   ));

Musicas::create(
            array(
                'faixa' => 'Forrozinho Bom',
                'compositor' => '(Dominguinhos / Climério)',
                'letra' => 'Eita forrozinho bom
Eita forrozinho bom
A gente chega, a gente agita
A gente mexe, a gente bole
A gente acocha até o dia clarear

Meu amor não foi embora
Meu amor foi passear
Meu amor tem olho claro
Como a prata do luar

Meu amor ficou lá fora
Meu amor não quis entrar
Meu amor chegou agora
Meu amor vem vadiar

Tem tanta estrela no céu
Tem tanto peixe no mar
Eu tenho tanta saudade
Da tua boca beijar

Eu não quero viver só
Pois viver é partilhar
A vida é mesmo um forró
Pra ser feliz e dançar

',
'creditos' => 'cantam: Elba e Dominguinhos
Arranjo: Dominguinhos e Zé Américo Bastos
Acordeom: Dominguinhos
Teclados: Zé Américo Bastos
Contrabaixo: Fernando Gaby (Fofão)
Guitarra e violão de nylon: Marcos Arcanjo
Percussão: Paulinho He-Man
Vocais: Zepa, Jussara Lourenço e Bettina Graziani
',
                'faixa_mp3' => '11_forrozinho_bom.mp3', 
                'faixa_ogg' => '11_forrozinho_bom.ogg',
                'disco_id' => '27',   ));

Musicas::create(
            array(
                'faixa' => 'De Volta Pro Aconchego',
                'compositor' => '(Dominguinhos / Nando Cordel)',
                'letra' => 'Estou de volta pro meu aconchego
Trazendo na mala bastante saudade
Querendo um sorriso sincero, um abraço
Para aliviar meu cansaço
E toda essa minha vontade

Que bom poder tá contigo de novo
Roçando teu corpo e beijando você
Pra mim tu és a estrela mais linda
Teus olhos me prendem, fascinam
A paz que eu gosto de ter

É duro ficar sem você vez em quando
Parece que falta um pedaço de mim
Me alegro na hora de regressar
Parece que vou mergulhar
Na felicidade sem fim
',
'creditos' => 'cantam: Elba e Dominguinhos
Arranjo, piano, teclados e samplers (cordas): Zé Américo Bastos
Acordeom: Dominguinhos
Bateria: Camilo Mariano
Contrabaixo: Fernando Gaby (Fofão)
Violão de nylon e aço: Marcos Arcanjo
Percussão: Paulinho He-Man

',
                'faixa_mp3' => '12_de_volta_pro_aconchego.mp3', 
                'faixa_ogg' => '12_de_volta_pro_aconchego.ogg',
                'disco_id' => '27',   ));

Musicas::create(
            array(
                'faixa' => 'Pedras Que Cantam',
                'compositor' => '(Dominguinhos / Fausto Nilo)',
                'letra' => 'Quem é rico mora na praia
Mas quem trabalha não tem onde morar
Quem não chora dorme com fome
Mas quem tem nome joga a prata no mar

O tempo duro no ambiente
O tempo escuro na memória
O tempo é quente e o dragão é voraz

Vamos embora de repente
Vamos embora sem demora
Vamos pra frente
Que pra trás não dá mais

Pra ser feliz num lugar
Pra sorrir e cantar
Tanta coisa a gente inventa
Mas no dia que a poesia se arrebenta
É que as pedras vão cantar


Isso aqui tá bom demais
(Dominguinhos / Nando Cordel)

Olha, isso aqui tá muito bom
Isso aqui tá bom demais
Olha, quem tá fora quer entrar
Mas quem tá dentro não sai

Vou me perder, me afogar no teu amor
Vou desfrutar, me lambuzar neste calor
Te agarrar pra descontar minha paixão
Aproveitar o gosto dessa animação
',
'creditos' => 'cantam: Elba e Dominguinhos
Arranjo, piano e teclados: Zé Américo Bastos
Acordeom: Dominguinhos
Bateria: Camilo Mariano
Contrabaixo: Fernando Gaby (Fofão)
Guitarra e violão de nylon: Marcos Arcanjo
Percussão: Paulinho He-Man
Sax alto: Zé Canuto
Trombone: Aldivas Ayres
Trompete: Jessé Sadoc
Vocais: Zepa, Marcela Paiva, Gilson Vieira e Bettina Graziani
',
                'faixa_mp3' => '13_pedras_que_cantam_isso_aqui_ta_bom_demais.mp3', 
                'faixa_ogg' => '13_pedras_que_cantam_isso_aqui_ta_bom_demais.ogg',
                'disco_id' => '27',   ));

Musicas::create(
            array(
                'faixa' => 'Gaiola Da Saudade',
                'compositor' => '(Jam da Silva / Maciel Salu)',
                'letra' => 'Vivo andando no mundo
Na gaiola da saudade
Igualmente um passarinho
Voando solto nos ares

Querendo água e comida
Pra matar minha vontade
Deixo minha terra chorando
Pra morar noutra cidade

Para que sentir a dor?
Para que se tê-la?
O sol queima, racha a terra
E a lua clareia
Para que sentir a dor?
Para que se tê-la?

Tempo bom foi no passado
Na época do meu avô
O homem tá destruindo
O que a natureza criou

Planta semente na terra
Espera a chuva e não cai
Tão aborrecendo a Cristo
Por causa de tudo isso
Tempo bom ninguém vê mais

Na estação pego um trem
Sigo firme na estrada
A bagagem é minha roupa
E a rabeca afinada

Vem a noite, não dá sono
Na madrugada cochilo
Vejo a chegada do dia
Não sei qual o é o meu destino

',
'creditos' => 'canta: Elba
Arranjo: Yuri Queiroga e Tostão Queiroga
Ganzá, lata, alfaia, zabumba, ilu e darbuka: Lucas dos Prazeres
Cavaco, guitarra, baixo e programação: Yuri Queiroga
Bateria: Tostão Queiroga
Clarinete e flautas: Dirceu Leite
Violão de nylon: Marcos Arcanjo

',
                'faixa_mp3' => '01_gaiola_da_saudade.mp3', 
                'faixa_ogg' => '01_gaiola_da_saudade.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'Ave Anjos Angeli',
                'compositor' => '(Jorge Ben Jor) Participação Especial: A Trombonada',
                'letra' => 'Verdade, amor, sabedoria, felicidade
Síntese, clareza, confiança, abundância
Ação correta, justiça, renascimento
Beleza, harmonia
Força, vitória, glória, paz
Comunicação e alegria

Anjo, anjo, anjo, anjo, anjo
Minha fé me faz a cabeça
Ela me faz com certeza
Minha fé me faz a cabeça
Ela me faz com certeza

Senhora das águas
Senhora dos ventos
Senhora das flores
Senhora dos amores
Dá licença deu tocar nesse lugar
Dá licença deu cantar nesse lugar
Quero tocar pros anjos
Quero cantar pros anjos

Seraphim, cherubim
Cherubim, seraphim
Seraphim, cherubim
Cherubim, seraphim

Throni
Dominatione
Virtutes
Potestates
Principatus
Archangeli
Angeli
',
'creditos' => 'canta: Elba Ramalho
Arranjo: Tostão Queiroga e Yuri Queiroga
Arranjo de metais e trombone: Nilson Amarante
Trombones: A Trombonada (Nilsinho Amarante, Adonis Garcia, Esli Lino, Adelson Lins e Junior Cebolinha)
Bateria: Tostão Queiroga
Guitarras e baixo: Yuri Queiroga
Violão: Marcos Arcanjo
Ganzá, tamborim, repique de mão, pandeiros, ilu, agogô repique de baqueta e surdo: Lucas dos Prazeres
',
                'faixa_mp3' => '02_ave_anjos_angeli.mp3', 
                'faixa_ogg' => '02_ave_anjos_angeli.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'Noite Severina',
                'compositor' => '(Lula Queiroga / Pedro Luis)',
                'letra' => 'Corre calma severina noite
De leve no lençol que te tateia a pele fina
Pedras sonhando pó na mina
Pedras sonhando com britadeiras
Cada ser tem sonhos a sua maneira
Cada ser tem sonhos a sua maneira

Corre alta severina noite
No ronco da cidade uma janela assim acesa
Eu respiro seu desejo
Chama no pavio da lamparina
Sombra no lençol que tateia a pele fina
Sombra no lençol que tateia a pele fina

Ali tão sempre perto e não me vendo
Ali sinto tua alma flutuar do corpo
Teus olhos se movendo sem se abrir
Ali tão certo e justo e só te sendo
Absinto-me de ti, mas sempre vivo
Meus olhos te movendo sem te abrir

Corre solta suassuna noite
Tocaia de animal que acompanha sua presa
Escravo da sua beleza
Daqui a pouco o dia vai querer raiar
Daqui a pouco o dia vai querer raiar
Daqui a pouco o dia vai querer raiar
Daqui a pouco o dia vai querer raiar
',
'creditos' => 'canta: Elba Ramalho
Arranjo: Tostão Queiroga e Yuri Queiroga
Triângulo, moringa, lata com vassoura e agogô: Jam da Silva
Panelas indianas, programações, violão, baixo e guitarras: Yuri Queiroga
Cello: Lui Coimbra
Bateria eletrônica, cajon FX, caxixi e programações: Tostão Queiroga
Violão intro: Lucky Luciano
Violão de aço: Marcos Arcanjo
Acordeom delay: Lulinha Alencar

',
                'faixa_mp3' => '03_noite_severina.mp3', 
                'faixa_ogg' => '03_noite_severina.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'Rua Da Passagem (Trânsito)',
                'compositor' => '(Lenine / Arnaldo Antunes) Participação Especial: Maestro Spok',
                'letra' => 'Os curiosos atrapalham o trânsito
Gentileza é fundamental
Não adianta esquentar a cabeça
Não precisa avançar no sinal

Dando seta pra mudar de pista
Ou pra entrar na transversal
Pisca alerta pra encostar na guia
Pára brisa para o temporal

Já buzinou, espere, não insista
Desencoste o seu do meu metal
Devagar pra contemplar a vista
Menos peso do pé no pedal
Não se deve atropelar cachorro
Nem qualquer outro animal

Todo mundo tem direito à vida
E todo mundo tem direito igual
Todo mundo tem direito à vida
E todo mundo tem direito igual

Motoqueiro, caminhão, pedestre
Carro importado, carro nacional
Mas tem que dirigir direito
Para não congestionar o local

Tanto faz você chegar primeiro
O primeiro foi seu ancestral
É melhor você chegar inteiro
Com seu venoso e seu arterial
A cidade é tanto do mendigo
Quanto do policial

Travesti trabalhador turista
Solitário família casal
Todo mundo tem direito à vida
E todo mundo tem direito igual

Sem ter medo de andar na rua
Porque a rua é o seu quintal
Todo mundo tem direito à vida
E todo mundo tem direito igual

Boa noite, tudo bem, bom dia
Gentileza é fundamental
Todo mundo tem direito à vida
E todo mundo tem direito igual

Pisca alerta pra encostar na guia
Com licença, obrigado, até logo, tchau
Todo mundo tem direito à vida
E todo mundo tem direito igual

',
'creditos' => 'canta: Elba Ramalho
Sax soprano, tenor e barítono: Maestro Spok
Programação (sons de carro), ilu, pandeiro, agogô, ganzá, caxixi, baixo e programação eletrônica: Yuri Queiroga
Lata: Lucky Luciano
Viola de 12 cordas: Marcos Arcanjo
Bandolim de 10 cordas: Hamilton de Holanda
Vocais: Nena Queiroga, Ylana Queiroga e Vanessa Miranda
Voz (criança): Yan Queiroga


',
                'faixa_mp3' => '04_rua_da_passagem.mp3', 
                'faixa_ogg' => '04_rua_da_passagem.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'Tempos quase modernos (Qual o assunto que mais lhe interessa)',
                'compositor' => '(Roberto Mendes / Capinan) Participação Especial: Gabriel o Pensador e Frejat',
                'letra' => 'Qual o assunto que mais lhe interessa?
Qual o assunto que mais lhe interessa?

Além da vida in vitro feita nas coxas
E vivida às pressas

Qual o assunto que mais lhe interessa?
Qual o assunto que mais lhe interessa?

A empresa da guerra
A mais-valia da morte
A última sentença
A violência nas ruas
O bio terrorismo
A soja transgênica

Clonagem da mente
Dos órgãos vitais
A nova ciência
Moral decadente
Tradição milenar
Outra tendência

Qual o assunto que mais lhe interessa?
Qual o assunto que mais lhe interessa?

Suicídio, livre arbítrio
Aborto consentido
Eutanásia
A dívida congênita
O quinto partido
O tempo das máquinas

Monarquia, playback
A república inventa
O eclipse lunar
A decadência moral
A calota polar
O império dos egos
O vidente cedo
O cachimbo de Édipo
A paixão de Romeu

Colapso dos mares
Crianças sem lares
A ausência de Deus

Qual o assunto que mais lhe interessa?
Qual o assunto que mais lhe interessa?

Qual o assunto que mais lhe interessa?
A assembleia dos lobos
O juízo dos loucos
A vontade dos céus
A escala econômica em que o crime compensa
Qual é o assunto em que mais você pensa?
Sexo, amor, culpa ou inocência
A dieta do Papa, o segredo de Fátima
A última penitência
Qual é o assunto em que mais você pensa?
Qual é o assunto que mais lhe interessa?
Qual é o assunto que mais lhe interessa?
Qual é o assunto que mais você pensa?

Bom dia Vietnã
Boa noite Bagdá
Adeus Sherazade
Qual o assunto que mais lhe interessa?
Qual a verdade em que mais você pensa?
O fim da natureza
E o final da história
Glória, glória, glória, glória, glória, glória?

Apenas uma canção invento agora
Um poema
A madrugada é silêncio, a dor acalenta
Esquece o início de tudo e o fim dos tempos
Deita no colo de tua amada
Onde da misteriosa expansão do nada
O universo se alimenta

Qual é o assunto em que mais você pensa?
Qual a verdade em que mais você sente?
Qual a mentira em que mais acredita?
Qual é o nome que você mais grita?
Qual é a força que mais te enfraquece?
Qual é a fome que mais te alimenta?
Qual é o prato que mais te apetece?
Qual é o mapa que mais te orienta?
Qual é o jogo que mais você ganha?
Qual é o ganho que mais te enriquece?
Qual é a perda que mais você chora?
Qual é a casa em que mais você mora?
Qual é a frase que mais você fala?
Qual é a fala que mais você cala?
Qual é o assunto que mais você teme?
E qual é o tema que mais ignora?
Qual o assunto que mais lhe interessa?
',
'creditos' => 'Arranjo: Yuri Queiroga e Tostão Queiroga
Baixo e programação: Yuri Queiroga
Guitarras e teclados: Frejat
Bateria: Tostão Queiroga
Programações e teclado: Fabrício Melo

',
                'faixa_mp3' => '05_tempos_quase_modernos.mp3', 
                'faixa_ogg' => '05_tempos_quase_modernos.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'A Natureza Das Coisas',
                'compositor' => '(Accioly Neto)',
                'letra' => 'Se avexe não
Que amanhã pode acontecer tudo
Inclusive nada
Se avexe não
Que a lagarta rasteja até o dia
Em que cria asas

Se avexe não
Que a burrinha da felicidade nunca se atrasa
Se avexe não
Amanhã ela para na porta da sua casa

Se avexe não
Toda caminhada começa no primeiro passo
A natureza não tem pressa
Segue seu compasso
Inexoravelmente chega lá

Se avexe não
Observe quem vai subindo a ladeira
Seja princesa ou seja lavandeira
Pra ir mais alto vai ter que suar

',
'creditos' => 'canta: Elba Ramalho 
Arranjo: Yuri Queiroga e Tostão Queiroga
Guitarra e baixo: Yuri Queiroga
Bateria: Tostão Queiroga
Triângulo, pandeiro, caxixi, zabumba e shaker: Anjo Caldas
Guitarra: Marcos Arcanjo
Acordeom: Toninho Ferragutti
Violão e cello: Lui Coimbra
Vocais: Elba Ramalho, Nena Queiroga, Ylana Queiroga e Vanessa Miranda
',
                'faixa_mp3' => '06_a_natureza_das_coisas.mp3', 
                'faixa_ogg' => '06_a_natureza_das_coisas.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'Argila',
                'compositor' => '(Carlinhos Brown) Participação Especial: Hamilton de Holanda',
                'letra' => 'Uganda, cubana, ipanamana
Baiana, Luanda, nada Ruanda
Kinshaze, manga, banana

Vinha rindo e circulando
Sobre tudo o cobertor
Do teu olhar verreu meus olhos
E do teu olho joio

Uma gota de orvalho
Que era vidro se quedou
Vivendo em despedace
E o coração coador

Sorriu
Vexado de amargor e se pintou
Na lama da lagoa
Pra à toa correr, ê...

Se for feito de argila
Seis enfeites te darei
Flores não andam em dúzia
Só foi uma que eu roubei

Sorriu
Vexado de amargor e se pintou
Com a lama da lagoa
Coa, voa

Ê zuzuê
Ê zum, zum, zum
Ê zuzuê
Zum

Solidão anda de muda
Sei pra sempre te amarei
Procurei por essas curvas
Quem no Tororó deixei, ê...
',
'creditos' => 'canta: Elba Ramalho 
Arranjo: Tostão Queiroga e Yuri Queiroga
Bandolim de 10 cordas: Hamilton de Holanda
Pratos com vassouras e tambor FX: Tostão Queiroga
Guitarra, cavaquinho, violão e baixo: Yuri Queiroga
Guitarras: Paulo Rafael
Pote, shaker, triângulo, guisos, bacia de água e conduíte: Jam da Silva
',
                'faixa_mp3' => '07_argila.mp3', 
                'faixa_ogg' => '07_argila.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'Boi Cavalo de Tróia',
                'compositor' => '(Pedro Osmar / Paulo Ró) Participação Especial: Pedro Osmar',
                'letra' => 'O boi, o boi, o boi, o boi
O boi, o boi, o boi, o boi
O boi tá na rua
O boi tá na sua

Vem com o povo
Dançar no terreiro do rei
O boi no meio do povo vem saber
Qual é a do rei?
Eu sei!
Qual é a dos três?
Eu sei!

Onde se chega pela rua
O boi Cavalo de Tróia vem cuidadoso
Cantar sua apatia
Assumir seu lugar, definir sua vida
O boi tá na rua, o boi tá na sua
O boi tá na rua

O boi tá na rua (em passeata)
O boi tá na rua (em passeata)
O boi tá na rua (em passeata)
O boi tá na rua
',
'creditos' => 'canta: Elba Ramalho
Arranjo: Tostão Queiroga e Yuri Queiroga
Viola de 10 cordas, viola caipira e vozes: Pedro Osmar
Caxixi, ilu, alfaia, pandeiros, tamborim, guiro e palmas: Jam da Silva
Caixa e palmas: Tostão Queiroga
Sapateado, cavaquinho e violão FX: Yuri Queiroga
Arranjo de sopros, flauta, barítono, sax barítono, flauta transversa e pífano: Carlos Malta
Matraca, pandeirão, ilu, tambor, alfaia, caixa de guerra, caracaxá e preaca: Lucas dos Prazeres
Vocais: Elba Ramalho, Nena Queiroga, Ylana Queiroga, Vanessa Miranda, Anjo Caldas, Marcos Arcanjo, Tostão Queiroga, Pedro Osmar, Any Guedes e Millene Ramalho
',
                'faixa_mp3' => '08_boi_cavalo_de_troia.mp3', 
                'faixa_ogg' => '08_boi_cavalo_de_troia.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'Último Minuto',
                'compositor' => '(Lula Queiroga) Participação Especial: Lula Queiroga',
                'letra' => 'Nunca mais eu quero ouvir falar Hitler
E nem quero ouvir dizer Pinochet
Sai pra lá Sadan
Vai de retro Stalin, Idi Amin
Gente ruim

Deixa que eu chuto
Deixa o último minuto da história pra mim
Deixa que eu chuto
Deixa o último minuto da história

Nunca mais eu digo o nome Reagan
Livrai-nos do Mao Tsé Tung
Me deixa em paz Milosevic, Yeltsin
Gente ruim

Sonhei que no juízo final eu era Deus
O Deus número bilhão e tal
E a imensa maioria da humanidade
Tava ali pra condenar um por um
Cada cara de pau que fez mal a moça
Mãe, chamada Terra
Essa menina de cara roxa
Vítima brutal da covardia
Dessa gente ruim

Nunca mais eu quero ouvir falar Hitler
E nem quero ouvir dizer Pinochet
Sai pra lá Sadan, vai de retro Bush
Sai pra lá Sadan, vai de retro
',
'creditos' => 'canta: Elba Ramalho
Arranjo: Tostão Queiroga, Yuri Queiroga e Lucky Luciano
Surdo, tambor de corda, repique, caixa, guiro, shaker, agogô e triângulo: Jam da Silva
Guitarras, programações e teclados: Yuri Queiroga
Bateria e programações: Tostão Queiroga
Baixo, teclados e guitarras: Lucky Luciano
Vocais: Elba Ramalho, Tostão Queiroga, Jorge Nova, Thiago Ramalho e Lula Queiroga

',
                'faixa_mp3' => '09_ultimo_minuto.mp3', 
                'faixa_ogg' => '09_ultimo_minuto.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'A Dança Das Borboletas',
                'compositor' => '(Alceu Valença / Zé Ramalho)',
                'letra' => 'As borboletas estão voando
A dança louca das borboletas
As borboletas estão girando
Estão virando a sua cabeça

Quem vai voar
Não quer dançar
Só quer voar
Avoar

Quem vai girar
Não quer cair
Só quer girar
Não caia

E as borboletas estão invadindo
Os apartamentos, cinemas e bares
Esgotos e rios e lagos e mares
Em um rodopio de arrepiar

Derrubam janelas e portas de vidro
Escadas rolantes e das chaminés
Mergulham e giram em meio à fumaça
É como um arco-íris no centro do céu
',
'creditos' => 'canta: Elba Ramalho
Arranjo e bateria: Tostão Queiroga
Guitarras, baixo e guitarras FX final: Yuri Queiroga
Pandeiros, guiro, triângulo, jonjo e caxixi: Anjo Caldas
Guitarras: Luã Mattar
Acordeom: Toninho Ferragutti
Guitarra: Paulo Rafael
Baje, djembê, alfaia, ilu, ganzá, pote, talking drums e surdo: Lucas dos Prazeres
',
                'faixa_mp3' => '10_a_danca_das_borboletas.mp3', 
                'faixa_ogg' => '10_a_danca_das_borboletas.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'As Forças Da Natureza',
                'compositor' => '(João Nogueira / Paulo César Pinheiro)',
                'letra' => 'Quando o sol
Se derramar em toda sua essência
Desafiando o poder da ciência
Pra combater o mal

E o mar
Com suas águas bravias
Levar consigo o pó dos nossos dias
Vai ser um bom sinal

Os palácios vão desabar
Sob a força de um temporal
E os ventos vão sufocar
O barulho infernal

Os homens vão se rebelar
Dessa farsa descomunal
Vai voltar tudo ao seu lugar
Afinal

Vai resplandecer
Uma chuva de prata do céu vai descer, lá, laiá
O esplendor da mata vai renascer
E o ar de novo vai ser natural

Vai florir
Cada grande cidade o mato vai cobrir
Das ruínas um novo povo vai surgir
E vai cantar afinal

As pragas e as ervas daninhas
As armas e os homens de mal
Vão desaparecer nas cinzas de um carnaval
',
'creditos' => 'canta: Elba Ramalho
Arranjo e violão de 6 cordas: Marcos Arcanjo
Cavaquinho Gianini: Paulo Soares
Violão 7 cordas: Paulão 7 cordas
Surdo, ganzá, pandeiro, repique de anel e tamborim: Maninho
Vocais: Nena Queiroga, Ylana Queiroga e Vanessa Miranda
',
                'faixa_mp3' => '11_as_forcas_da_natureza.mp3', 
                'faixa_ogg' => '11_as_forcas_da_natureza.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'Dois Pra Sempre',
                'compositor' => '(Lula Queiroga)',
                'letra' => 'Sempre em meu coração
Esse desejo bom
Quase maior do que o futuro
Eu sei
Que no mundo existe alguém
Alma parecida
Pra dividir minha vida

Sempre adivinhação
Sempre eu querer saber
Um passo a frente do destino
E eu sei
Vi o amor chegando assim
Coisa tão querida
Muda o sentido da vida

Olho iluminado
Braço arrepiado
Lágrimas caindo sobre o jardim
Quando acontece de ser assim
Dois pra sempre
',
'creditos' => 'canta: Elba Ramalho
Arranjo: Toninho Ferragutti e Yuri Queiroga
Arranjo de cordas e cello: Lui Coimbra
Acordeom: Toninho Ferragutti
Violão e panelas indianas: Yuri Queiroga

',
                'faixa_mp3' => '12_dois_pra_sempre.mp3', 
                'faixa_ogg' => '12_dois_pra_sempre.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'Os Beijos',
                'compositor' => '(Pedro Luís / Ivan Santos) Participação Especial: Pedro Luís e a Parede',
                'letra' => 'O beijo no sofá
O beijo no harém
Um beijo na estação de trem

O beijo de amor
O beijo sem tesão
O de reconciliação

O beijo das canções
O beijo das araras
O beijo de aflições e taras

O beijo que se dá
O beijo que se ganha
O beijo da mulher-aranha

Tem beijo devoção
Também beijo-troféu
E beijo artigo de bordel

O beijo após a missa
Me beija diz a moça
Um beijo dado assim à força

Um beijo que é real
O outro é sonhador
E beija o pôster do cantor

Um beija a sua mão
O outro o corpo inteiro
O time beija o seu goleiro

De beijo no Bebê
A mãe da mais de cem
Mas beijo-crime também tem

Um beijo em Paris
O beijo do cartaz
Um beija o outro rapaz

O beijo no escuro
O beijo à meia luz
O beijo nos pés de Jesus

Um beija e lambe a pele
Um morde e causa dor
O beijo diz como é que eu tô

O beijo da serpente
O beijo no asfalto
O beijo no meio do mato

O beijo que oferece
O beijo que ofende
O beijo azul do happy end

O beijo da chegada
O beijo despedida
O beijo com sabor de vida

Um beijo em sigilo
O beijo da novela
Os beijos que eu já dei nela

',
'creditos' => 'canta: Elba Ramalho
Arranjo: Pedro Luís e a Parede e Yuri Queiroga
Viola, violão e vozes: Pedro Luís e a Parede
Baixo: Mario Moura
Zabumba: C. A. Ferrari
Caixa: Celso Alvim
Reco-reco e triângulo: Sidon Silva
Guitarra: Yuri Queiroga


',
                'faixa_mp3' => '13_os_beijos.mp3', 
                'faixa_ogg' => '13_os_beijos.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'Novena',
                'compositor' => '(Geraldo Azevedo / Marcus Vinicius) Participação Especial: Geraldo Azevedo',
                'letra' => 'Sei que são nove dias, nove penas
Enquanto a espera aumenta
O mundo se faz esquecido
Na terra dos homens
De luzes coloridas

Enquanto a família reza a novena
As notícias que montam cavalos ligeiros
Vão tomando todo o mundo
E na casa, no lar
Esquecidos ficam todos longe de saber
O que foi que aconteceu
E ali ninguém percebeu
Tanta pedra de amor cair
Tanta gente se partir
No azul dessa incrível dor

Enquanto a família reza
Alguém segue a novena
No abismo de preces repetidas
No sossego de uma agonia sem fim

Enquanto a família reza a novena
Nove dias se passam marcados
Sem tempo, sem nada e sem fim
No meio do mundo, do medo

E de mim despedaço em tanto verso
Então de orações a sala se faz
E lá fora se esquece a paz
Uma bomba explodiu por lá
Sobre os olhos de meu bem
E assim me mata também
Enquanto a novena chega ao fim
Bandas, bandeiras
Benditos passando pela vida
E a novena se perde esquecida de nós

Nas horas de Deus, amém
Padre, Filho, Espírito Santo
Essa é a primeira cantiga
Que nessa casa eu canto
',
'creditos' => 'canta: Elba Ramalho
Arranjo: Elba Ramalho
Violão de nylon: Geraldo Azevedo
Violão de 12 cordas: Marcos Arcanjo
Acordeom: Lulinha Alencar
Percussão: Firmino
Berimbau, alfaia, ilu, conga e triângulo: Jam da Silva
',
                'faixa_mp3' => '14_novena.mp3', 
                'faixa_ogg' => '14_novena.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'Conceição Dos Coqueiros',
                'compositor' => '(Alexandre Bicudo / Lula Queiroga / Lulu Oliveira)',
                'letra' => 'Ia dessa maneira
Subindo o morro bem devagar
Boca da alma cantando
Senhora dos coqueiros
Chego mais perto e me ilumino
Eu que já vim de tão longe
Do mar
Daqui se vê o mar
Também se vê a dor e o mal
Gente que reza e sofre tanto
Leve ao ouvido de Deus
O meu lamento
Por nós

Chuva derrete o gesso
Ó, Conceição estende o manto
Vira do avesso esse canto
Desce dessa janela
Venha soprar vela por vela
Sopre de novo esperança
Vem cá
Vem desabençoar
Essa tristeza intrusa
Faz a ciranda na ladeira
Sopra no ouvido de Deus
Esse lamento

Leva ao ouvido de Deus
Esse lamento

Ave Maria
Gratia plena
Dominus tecum
',
'creditos' => 'canta: Elba Ramalho 
Arranjo: Tostão Queiroga e Yuri Queiroga
Programações: Tostão Queiroga
Harpa: Cristina Braga
Acordeom: Toninho Ferragutti
Conduíte e tambor subgrave: Jam da Silva
Programações, baixo, cavaquinho, teclados e guitarra: Yuri Queiroga
Violão: Renato Bandeira
',
                'faixa_mp3' => '15_conceicao_dos_coqueiros.mp3', 
                'faixa_ogg' => '15_conceicao_dos_coqueiros.ogg',
                'disco_id' => '28',   ));

Musicas::create(
            array(
                'faixa' => 'Amplidão',
                'compositor' => '(Chico César)',
                'letra' => 'Deixa eu te guardar
A casa é sua
Faz em mim teu lar
Me reconstrua
Queira me habitar
Onde eu me escondo
Faz deste lugar
Só seu no mundo

Eu quero ser
Onde você
Sossega a alma
E chora e ri
Encontra a calma
Pra sonhar sem dormir
Vem acender
As luzes que iluminam o meu coração
Vem ter comigo sua parte da amplidão
De minha parte
Eu estou aqui
',
'creditos' => 'canta: Elba Ramalho 
Produção: Lenine
Violão de 8 cordas: Paulo Aragão
Violão requinto: Maurício Marques
Violão: Marcos Alves e Carlos Chaves
',
                'faixa_mp3' => '16_amplidao.mp3', 
                'faixa_ogg' => '16_amplidao.ogg',
                'disco_id' => '28',   ));


Musicas::create(
            array(
                'faixa' => 'Fuxico',
                'compositor' => '(Flávio Leandro)',
                'letra' => 'O meu amor
Ficou com raiva d’eu e me mandou embora
Eu juro que doeu e que a saudade agora
Devora feito fogo quando vai queimar

O meu amor
Por causa de um fuxico, de uma coisa à toa
Trocou o nosso ninho que era coisa boa
Por uma indiferença que não tem mais fim

Tem nada não
Eu choro todo o pranto que for pra chorar
Eu pago todo o preço que for pra pagar
Mas vou morrer dizendo que não te esqueci

E quando a saudade apertar
Não deixe de telefonar
Pra esta que ainda te ama
E vive doidinha de vontade
De ter seu amor sem maldade
Pra acender o calor dessa chama
',
'creditos' => 'canta: Elba Ramalho 
Arranjo de base, acordeom e triângulo: Cezzinha Thomaz
PAD: Zé Américo Bastos
Bateria: Tostão Queiroga
Guitarra: Marcos Arcanjo
Contrabaixo: Fernando Gaby (Fofão)
Percussão: Anjo Caldas
',
                'faixa_mp3' => '01_fuxico.mp3', 
                'faixa_ogg' => '01_fuxico.ogg',
                'disco_id' => '29',   ));

Musicas::create(
            array(
                'faixa' => 'Um Baião Chamado Saudade',
                'compositor' => '(Petrúcio Amorim / Rogério Rangel)',
                'letra' => 'Sinto muita saudade de você
Vem na lua, na chuva, no vento
Quando às vezes bota pra doer
Juízo quer endoidecer
Espinho furando por dentro

Pelo que não fiz peço perdão
É que às vezes o amor se confunde
E mistura ódio com paixão
Realidade e ilusão
E o coração se ilude

Ah, foi um sonho que a gente viveu
Foi bonito o que aconteceu
E você ainda pede: “Esqueça”
Ah, você sabe da nossa paixão
Como tirar do coração
O que não sai da cabeça
',
'creditos' => 'canta: Elba Ramalho 
Arranjo de base, acordeom, triângulo e zabumba: Cezzinha Thomaz
Piano (Fender Rhodes): Rannieri Oliveira
Bateria: Tostão Queiroga
Violão de nylon e guitarra: Marcos Arcanjo
Contrabaixo e baixo acústico: Fernando Gaby (Fofão)
Percussão: Anjo Caldas

',
                'faixa_mp3' => '02_um_baiao_chamado_saudade.mp3', 
                'faixa_ogg' => '02_um_baiao_chamado_saudade.ogg',
                'disco_id' => '29',   ));

Musicas::create(
            array(
                'faixa' => 'Riso Cristalino',
                'compositor' => '(Dominguinhos / Climério) Participação Especial: Dominguinhos',
                'letra' => 'Meu olhar não leva jeito de chorar
Quando vê o teu sorriso derramar
Esse riso cristalino de alegria
Como o beijo que a praia deu no mar

É melhor ser triste assim como eu estou
Do que ser feliz na vida como estás
Pois felicidade em mim é teu amor
Que é mais claro que uma noite de luar

Quando a brisa dessa noite te abraçar
Vai sentir o frio forte da paixão
O meu braço abraça o corpo de outro amor
Como o beijo que essa praia deu no mar

',
'creditos' => 'canta: Elba Ramalho
Arranjo de base, acordeom e triângulo: Cezzinha Thomaz
Voz e acordeom: Dominguinhos
PAD: Zé Américo Bastos
Bateria: Tostão Queiroga
Guitarra: Marcos Arcanjo
Contrabaixo: Fernando Gaby (Fofão)
Percussão: Anjo Caldas

',
                'faixa_mp3' => '03_riso_cristalino.mp3', 
                'faixa_ogg' => '03_riso_cristalino.ogg',
                'disco_id' => '29',   ));

Musicas::create(
            array(
                'faixa' => 'Não Lhe Solto Mais',
                'compositor' => '(Antônio Barros / Cecéu)',
                'letra' => 'Morena não faça isso
Deixe desse reboliço
Não mexa comigo não, viu
Quero respeito comigo
Já cortaram o meu umbigo
Não sou mais menino não, viu

Eu sou duro, sou maduro
E também muito seguro
Ainda posso dar no couro
Você vai gostar
Vai se apaixonar
Vai cair no choro

Mais é aí que o couro come
Vou mostrar que sou é homem
Como é que um homem faz
Dou-lhe uma rasteira, lhe castigo na esteira
Não lhe solto mais
Dou-lhe uma rasteira, lhe castigo na esteira
Não lhe solto mais

Depois não adianta você gemer
Você gemer, você chorar
A gente bebe água quando sente sede
Cabelo se assanha quando o vento dá

Olha morena esse teu cheiro
Se juntar com o meu tempero
Vai ser bom demais
Dou-lhe uma rasteira, lhe castigo na esteira
Não lhe solto mais
Dou-lhe uma rasteira, lhe castigo na esteira
Não lhe solto mais
',
'creditos' => 'canta: Elba Ramalho
Arranjo de metais e trombone tenor: Nilsinho Amarante
Arranjo de base, acordeom, triângulo e zabumba: Cezzinha Thomaz
PAD: Zé Américo Bastos
Bateria: Tostão Queiroga
Guitarra: Marcos Arcanjo
Contrabaixo: Fernando Gaby (Fofão)
Percussão: Anjo Caldas
Trompetes: Enok Chagas e Fabinho Costa
Sax tenor: Gilberto Pontes
Sax alto: Maestro Spok
Vocais: Jussara Lourenço, Jurema Lourenço, Elba e Cezzinha Thomaz
',
                'faixa_mp3' => '04_nao_lhe_solto_mais.mp3', 
                'faixa_ogg' => '04_nao_lhe_solto_mais.ogg',
                'disco_id' => '29',   ));

Musicas::create(
            array(
                'faixa' => 'Me Dá Meu Coração',
                'compositor' => '(Accioly Neto)',
                'letra' => 'Você dizia que me amava e me queria
Que jamais em sua vida gostou de alguém assim
Que eu era tudo pra você
A flor do bem querer
E nunca ia poder viver sem mim

Tanto cuidado, tanto mimo, tanto dengo
Cada dia mais crescendo
Dava gosto de se ver
Como se fosse transmissão de pensamento
Você ligava pra mim e eu tava pensando em você

Diga onde foi que eu errei
Aonde vacilei
Fiquei de fora
Se foi tudo uma ilusão
Me dá meu coração
Que eu vou embora
',
'creditos' => 'canta: Elba Ramalho
Arranjo de base, acordeom e triângulo: Cezzinha Thomaz
PAD: Zé Américo Bastos
Bateria: Tostão Queiroga
Guitarra e viola de 12 cordas: Marcos Arcanjo
Contrabaixo: Fernando Gaby (Fofão)
Percussão: Anjo Caldas
',
                'faixa_mp3' => '05_me_da_meu_coracao.mp3', 
                'faixa_ogg' => '05_me_da_meu_coracao.ogg',
                'disco_id' => '29',   ));

Musicas::create(
            array(
                'faixa' => 'Oferendar',
                'compositor' => '(Flávio Leandro / Xico Bizerra)',
                'letra' => 'Deixa eu me banhar no orvalho fresco desse teu amor
Deixa eu me molhar na cachoeira do teu carinhar
Deixa eu me entranhar pelas veredas do teu coração
Deixa eu desvendar tua paixão
Deixa eu me apaixonar
Deixa eu desvendar tua paixão
Deixa eu me apaixonar

Deixa eu beber no teu riacho
Um cacho de água cristalina
Deixa eu fecundar tua semente
No ventre de uma chuva fina
E a cada manhã
Meu amor te oferendar
E a cada manhã
Meu amor te oferendar

Minha boca te espiando e nada te dizendo
Meus olhos alumiando tudo a te falar
E cá dentro do peito um pobre coração batendo
Contendo um balaio cheio de amor pra dar

Vem me dar um cheiro
Que eu te dou o meu
Se avexe, vem ligeiro
Chegue cá pra riba deu
Vem me dar teu cheiro que eu te dou o meu amor
E a minha vida do jeitinho que Deus criou
',
'creditos' => 'canta: Elba Ramalho
Arranjo de base, acordeom e triângulo: Cezzinha Thomaz
PAD: Zé Américo Bastos
Cello: Lui Coimbra
Bateria: Tostão Queiroga
Guitarra: Marcos Arcanjo
Contrabaixo: Fernando Gaby (Fofão)
Percussão: Anjo Caldas
Vocais: Jussara Lourenço, Jurema Lourenço e Elba
',
                'faixa_mp3' => '06_oferendar.mp3', 
                'faixa_ogg' => '06_oferendar.ogg',
                'disco_id' => '29',   ));

Musicas::create(
            array(
                'faixa' => 'É Só Você Querer',
                'compositor' => '(Nando Cordel) Participação Especial: Cezzinha Thomaz',
                'letra' => 'O meu amor é seu
É só você querer
Eu faço qualquer coisa
Pra ficar com você

Te dou meu coração
E o que você sonhar
Você não sabe como é grande
Essa vontade de te amar

Você tem perfume da manhã
Eu fico doidinha pra cheirar
A tua boca é uma romã
Eu fico doidinha pra beijar

Você é minha luz e eu vou seguir
Porque sei que posso me dar bem
O meu coração me diz
Igual a tu não tem ninguém
O meu coração me diz
Igual a tu não tem ninguém

',
'creditos' => 'canta: Elba Ramalho
Arranjo, PAD e cordas (samplers): Zé Américo Bastos
Bateria, moringa e pratos: Tostão Queiroga
Guitarra e violão de nylon: Marcos Arcanjo
Contrabaixo e baixo acústico: Fernando Gaby (Fofão)
Cello: Lui Coimbra
Percussão: Anjo Caldas
Acordeom e triângulo: Cezzinha Thomaz

',
                'faixa_mp3' => '07_e_so_voce_querer.mp3', 
                'faixa_ogg' => '07_e_so_voce_querer.ogg',
                'disco_id' => '29',   ));

Musicas::create(
            array(
                'faixa' => 'Recado',
                'compositor' => '(Cezzinha Thomaz / Fábio Simões)',
                'letra' => 'Lua que ilumina, muda a minha sina
Eu não quero mais sofrer
Lua que ilumina, muda a minha sina
Eu não quero mais sofrer
Manda um recado só pra ela
Correr pra janela e aparecer

Diz também
Que eu preciso daquele sorriso
E teus olhos de paixão
Estou apaixonado, eu sei
E esse é meu recado
',
'creditos' => 'canta: Elba Ramalho
Arranjo de base, PAD, arranjo de cordas e cordas (samplers): Zé Américo Bastos
Piano (Fender Rhodes): Rannieri Oliveira
Bateria: Tostão Queiroga
Guitarra: Marcos Arcanjo
Contrabaixo: Fernando Gaby (Fofão)
Percussão: Anjo Caldas
Acordeom, triângulo e zabumba: Cezzinha Thomaz
',
                'faixa_mp3' => '08_recado.mp3', 
                'faixa_ogg' => '08_recado.ogg',
                'disco_id' => '29',   ));

Musicas::create(
            array(
                'faixa' => 'D&#39;estar',
                'compositor' => '(Eliezer Setton)',
                'letra' => 'Saiu da minha vida sem olhar nos olhos meus
Na hora da partida nem sequer me disse adeus
Se a culpa &#233; minha ou se &#233; ingratid&#227;o
Sei n&#227;o, sei n&#227;o, sei n&#227;o

Provou minha comida, bebeu &#225;gua que eu tomei
Sabe da minha vida coisas que eu mesmo n&#227;o sei
Se lhe perdoo ou se eu pe&#231;o perd&#227;o
Sei n&#227;o, sei n&#227;o, sei n&#227;o

D&#39;estar
Que eu me aguento do meu jeito, sem chorar
D&#39;estar
Eu suporto caladinha a minha dor
D&#39;estar
Isso &#233; coisa de quem vive pra se dar
D&#39;estar
Que nem tudo que era doce se acabou

D&#39;estar
Se a saudade se chegar eu digo n&#227;o
D&#39;estar
Eu conhe&#231;o direitinho meu cora&#231;&#227;o
D&#39;estar
Logo, logo, outro amor, outra paix&#227;o
D&#39;estar
Sozinha n&#227;o fico n&#227;o
',
'creditos' => 'canta: Elba Ramalho
Arranjo de base, acordeom e triângulo: Cezzinha Thomaz
PAD: Zé Américo Bastos
Bateria: Tostão Queiroga
Guitarra: Marcos Arcanjo
Contrabaixo: Fernando Gaby (Fofão)
Percussão: Anjo Caldas
Vocais: Jussara Lourenço, Jurema Lourenço e Elba

',
                'faixa_mp3' => '09_estar.mp3', 
                'faixa_ogg' => '09_estar.ogg',
                'disco_id' => '29',   ));

Musicas::create(
            array(
                'faixa' => 'Ilusão Nada Mais',
                'compositor' => '(Dominguinhos / Fausto Nilo)',
                'letra' => 'Bela madona dos meus olhos
Pelos teus lábios
Tanto veneno já bebi
Tudo por um beijo no teu peito
Adormecido nos rochedos da memória

Por meu delírio nessa história
Fui desenhando a tua imensa catedral
Com as lágrimas sem jeito
Do meu sonho imperfeito
E migalhas de um tormento colossal

Se alguém tortura meu olhar
Com teu sorriso
Pela janela de um trem
Morro no moderno paraíso
E nem preciso mais amar ninguém

Está chovendo em meu passado
E eu nem recordo
A tua sombra sobre mim
A luz do jardim àquela hora
É o que eu relembro nessa solidão de agora

Toda imensidão da nova aurora
Foi a vitória do teu bem sobre o meu mal
Razão contraditória
Desses versos esquisitos
Com verdades impossíveis de cantar

Preste atenção que eu estou cantando
Enquanto choro
Com frases de botequim
É mesmo assim a realidade
Dá vontade de chorar no fim

E o sol da minha vida nunca mais iluminou
A estrada refletida por teus olhos matinais
O azul entre os portais
O meu futuro já passou
É a própria cor do nunca mais
É a insensatez de ser feliz
Além dos sonhos da razão
Ilusão, nada mais
',
'creditos' => 'canta: Elba Ramalho
Arranjo de base e acordeom: Cezzinha Thomaz
Piano acústico: Zé Américo Bastos
Sax soprano: Leo Gandelman
Bateria, moringa e pratos: Tostão Queiroga
Guitarra e violão de nylon: Marcos Arcanjo
Baixo acústico: Fernando Gaby (Fofão)
Percussão: Anjo Caldas
',
                'faixa_mp3' => '10_ilusao_nada_mais.mp3', 
                'faixa_ogg' => '10_ilusao_nada_mais.ogg',
                'disco_id' => '29',   ));

Musicas::create(
            array(
                'faixa' => 'Se Tu Quiser',
                'compositor' => '(Xico Bizerra)',
                'letra' => 'Se tu quiser
Eu invento o vento pra ventar amor
Uma chuva bem chovida
Pra chover pé de fulô
Pra tu ficar cheirosa e vir dançar mais eu

Se tu quiser
Eu poemo um poema bem cheio de rima
Acendo a estrela mais bonita lá de cima
Faço tudo que puder
Pra tu ficar mais eu

Se tu quiser
Eu crio um sentimento pra gente se amar
Descubro um jeito novo de te abraçar
Te beijo com um beijo
Que ninguém nunca beijou

Se tu quiser
Basta me dizer que eu irei correndo
É só me avisar que tu tá me querendo
E o mundo vai saber
O que é um grande amor

',
'creditos' => 'canta: Elba Ramalho
Arranjo de metais: Enok Chagas
Arranjo de base, acordeom e triângulo: Cezzinha Thomaz
PAD: Zé Américo Bastos
Bateria: Tostão Queiroga
Guitarra: Marcos Arcanjo
Contrabaixo: Fernando Gaby (Fofão)
Percussão: Anjo Caldas
Trombone tenor: Nilsinho Amarante
Tompetes: Enok Chagas e Fabinho Costa
Sax tenor: Gilberto Pontes
Sax alto: Maestro Spok
Vocais: Jussara Lourenço, Jurema Lourenço e Elba

',
                'faixa_mp3' => '11_se_tu_quiser.mp3', 
                'faixa_ogg' => '11_se_tu_quiser.ogg',
                'disco_id' => '29',   ));


Musicas::create(
            array(
                'faixa' => 'Seu Aconchego',
                'compositor' => '(Júnior Vieira / Terezinha do Acordeom)',
                'letra' => 'Um passarinho me contou
No meu ouvido bem baixinho
Que é meu o seu amor
Sou dona do seu carinho

No inverno e no verão
Vou seguindo o seu caminho
Com você meu coração
Nunca vai ficar sozinho

Canto como canta o sabiá
O curió e o poeta beija-flor
Quero para sempre desfrutar
Seu aconchego, sua paz e seu amor

Se estou triste, você chora
Se estou feliz, sorri comigo
Sei que nunca vai embora
É seguro o seu abrigo

Nossas horas de amor
É você quem me conduz
Minha brisa no calor
No escuro a minha luz
',
'creditos' => 'canta: Elba Ramalho
Arranjo de base, acordeom e triângulo: Cezzinha Thomaz
PAD: Zé Américo Bastos
Bateria: Tostão Queiroga
Guitarras: Luã Mattar (participação especial) e Marcos Arcanjo
Contrabaixo: Fernando Gaby (Fofão)
Percussão: Anjo Caldas
Vocais: Jussara Lourenço, Jurema Lourenço e Elba
',
                'faixa_mp3' => '12_seu_aconchego.mp3', 
                'faixa_ogg' => '12_seu_aconchego.ogg',
                'disco_id' => '29',   ));



Musicas::create(
            array(
                'faixa' => 'Bebedouro',
                'compositor' => '(Maciel Melo / Anchieta Dali)',
                'letra' => 'Eu já brinquei de amor
Já brinquei com o riso
Eu zombei do choro
E o meu bebedouro desaflorou

Tanto bem que me quiseste
Bem me fizeste
Eu fui cafajeste
Onde o amor veste o seu cobertor

Eu já perdi as contas
De quantas vezes eu me perdi
Procurando e às vezes
Não encontrava o que procurar

Mas minhas dúvidas
Levam meus segredos
O amor já foi meu melhor brinquedo
Perdi o medo de te amar

Eu não suporto mais essas dúvidas
Minhas dúvidas
Não suporto mais essas dúvidas
Minhas dúvidas
',
'creditos' => 'canta: Elba Ramalho
Arranjo de metais e trombone tenor: Nilsinho Amarante
Arranjo de base, acordeom, triângulo e zabumba: Cezzinha Thomaz
Bateria: Tostão Queiroga
Violão de nylon: Marcos Arcanjo
Contrabaixo: Fernando Gaby (Fofão)
Percussão: Anjo Caldas
Trompetes: Enok Chagas e Fabinho Costa
Sax tenor: Gilberto Pontes
Sax alto: Maestro Spok
Vocais: Jussara Lourenço, Jurema Lourenço e Elba

',
                'faixa_mp3' => '13_bebedouro.mp3', 
                'faixa_ogg' => '13_bebedouro.ogg',
                'disco_id' => '29',   ));

Musicas::create(
            array(
                'faixa' => 'Quem é Você',
                'compositor' => '(Jorge de Altinho)',
                'letra' => 'Quem é você
Que desde o dia em que eu te vi me faz tão bem
Que me abraça, faz amor como ninguém
Sem você perto sou criança sem brinquedo

Quem é você
Que quando abri os olhos tava no seu laço
Que com carinho manda embora meu cansaço
Me ensinando amar a vida sem ter medo

Quem é você
Que abriu meu peito, vasculhou meu coração
Que deu um jeito de espantar a solidão
Que há muito tempo era a minha companheira

Quem é você
Que vive agora em minha mente noite e dia
Que se tornou razão da minha alegria
Me faz feliz, meu anjo, e diz quem é você
',
'creditos' => 'canta: Elba Ramalho
Arranjo de base, acordeom e triângulo: Cezzinha Thomaz
Piano Rhodes: Zé Américo Bastos
Bateria: Tostão Queiroga
Guitarra: Marcos Arcanjo
Contrabaixo: Fernando Gaby (Fofão)
Percussão: Anjo Caldas
Vocais: Jussara Lourenço, Jurema Lourenço e Elba
',
                'faixa_mp3' => '14_quem_e_voce.mp3', 
                'faixa_ogg' => '14_quem_e_voce.ogg',
                'disco_id' => '29',   ));

Musicas::create(
            array(
                'faixa' => 'Anunciação',
                'compositor' => '(Alceu Valença)',
                'letra' => 'Na bruma leve das paixões que vem de dentro
Tu vens chegando pra brincar no meu quintal
No teu cavalo, peito nu, cabelo ao vento
E o sol quarando nossas roupas no varal

Tu vens, tu vens
Eu já escuto os teus sinais
Tu vens, tu vens
Eu já escuto os teus sinais

A voz do anjo sussurrou no meu ouvido
Eu não duvido, já escuto os teus sinais
Que tu virias numa manhã de domingo
Eu te anuncio nos sinos das catedrais
',
'creditos' => 'canta: Elba Ramalho
',
                'faixa_mp3' => '01_anunciacao.mp3', 
                'faixa_ogg' => '01_anunciacao.ogg',
                'disco_id' => '30',   ));

Musicas::create(
            array(
                'faixa' => 'Banquete De Signos',
                'compositor' => '(Zé Ramalho)',
                'letra' => 'Discutir o cangaço com liberdade
É saber da viola, da violência
Descobrir nos cabelos inocência
É saber da fatal fertilidade

Descobrir a cidade na natureza
Descobrir a beleza dessa mulher
Descobrir o que der boniteza
Na peleja do homem vier, quando vier

Descobrir o bagaço dos engenhos
No melaço da cana mais um beijo
Descobrir os desejos que não tem cura
Saracura do brejo da novena

Descobrir a serena da natureza
Descobrir a beleza dessa mulher
Descobrir o que der boniteza
Na peleja do homem vier, quando vier
',
'creditos' => 'canta: Elba Ramalho
',
                'faixa_mp3' => '02_banquete_de_signos.mp3', 
                'faixa_ogg' => '02_banquete_de_signos.ogg',
                'disco_id' => '30',   ));




Musicas::create(
            array(
                'faixa' => 'Canta, Coração',
                'compositor' => '(Geraldo Azevedo / Carlos Fernando) Participação Especial: Geraldo Azevedo',
                'letra' => 'Canta, canta, passarinho
Canta, canta, miudinho
Na palma da minha mão

Eu quero ver você voando
Quero ouvir você cantando
Quero paz no coração

Eu quero ver você voando
Quero ouvir você cantando
Na palma da minha mão

Na palma da minha mão
Tem os dedos, tem as linhas
Que olhar cigano caminha
Procurando alcançar
A nau perdida, o trem que chega
A nova dança, mata verde, esperança
Em suas tranças vou voar
Passarinho, eu vou voar

Meu alegre coração
É triste como um camelo
É frágil que nem brinquedo
É forte como leão

É todo zelo, é todo amor, é desmantelo
É querubim, é cão de fogo
É Jesus Cristo, é Lampião
Passarinho, eu vou voar

',
'creditos' => 'cantam: Elba Ramalho
',
                'faixa_mp3' => '03_canta_coracao.mp3', 
                'faixa_ogg' => '03_canta_coracao.ogg',
                'disco_id' => '30',   ));

Musicas::create(
            array(
                'faixa' => 'Morena De Angola',
                'compositor' => '(Chico Buarque)',
                'letra' => 'Morena de Angola
Que leva o chocalho amarrado na canela
Será que ela mexe o chocalho
Ou o chocalho é que mexe com ela

Será que a morena cochila
Escutando o cochicho do chocalho
Será que desperta gingando
E já sai chocalhando pro trabalho

Será que ela tá na cozinha
Guisando a galinha à cabidela
Será que esqueceu da galinha
Ficou batucando na panela

Será que no meio da mata, na moita
A morena inda chocalha
Será que ela não fica afoita
Pra dançar na chama da batalha

Morena de Angola
Que leva o chocalho amarrado na canela
Passando pelo regimento
Ela faz requebrar a sentinela

Será que quando vai pra cama
A morena se esquece dos chocalhos
Será que namora fazendo bochincho
Com seus penduricalhos

Será que ela tá caprichando
No peixe que eu trouxe de Benguela
Será que tá no remelexo
Abandonou meu peixe na tigela

Será que quando fica choca
Põe de quarentena os seus chocalhos
Será que depois ela bota
A canela no nicho do pirralho

Morena de Angola
Que leva o chocalho amarrado na canela
Acho que deixei um cacho
Do meu coração na Catumbela

Morena de Angola
Que leva o chocalho amarrado na canela
Morena, bichinha danada
Minha camarada do MPLA
',
'creditos' => 'cantam: Elba Ramalho Música incidental: Odeon (Ernesto Narazeth)
',
                'faixa_mp3' => '04_morena_de_angola.mp3', 
                'faixa_ogg' => '04_morena_de_angola.ogg',
                'disco_id' => '30',   ));

Musicas::create(
            array(
                'faixa' => 'Pavão Mysteriozo',
                'compositor' => '(Ednardo)',
                'letra' => 'Pavão mysteriozo
Pássaro formoso
Tudo é mistério
Nesse teu voar
Ah, se eu corresse assim
Tantos céus assim
Muita história eu tinha pra contar

Pavão mysteriozo
Nessa cauda aberta em leque
Me guarda moleque
De eterno brincar
Me poupa do vexame
De morrer tão moço
Muita coisa ainda quero olhar

Pavão mysteriozo
Pássaro formoso
No escuro dessa noite
Me ajude a cantar
Derrame essas faíscas
Despeje esse trovão
Desmancha isso tudo
Que não é certo não

Pavão mysteriozo
Pássaro formoso
Um conde raivoso
Não tarda a chegar
Não temas minha donzela
Nossa sorte nessa guerra
Eles são muitos
Mas não podem voar

',
'creditos' => 'canta: Elba Ramalho
',
                'faixa_mp3' => '05_pavao_mysterioso.mp3', 
                'faixa_ogg' => '05_pavao_mysterioso.ogg',
                'disco_id' => '30',   ));

Musicas::create(
            array(
                'faixa' => 'O Meu Amor',
                'compositor' => '(Chico Buarque) Participação Especial: Alcione',
                'letra' => 'O meu amor
Tem um jeito manso que é só seu
E que me deixa louca
Quando me beija a boca
Minha pele toda fica arrepiada
E me beija com calma e fundo
Até minh’alma se sentir beijada
Ai

O meu amor
Tem um jeito manso que é só seu
Que rouba os meus sentidos
Viola os meus ouvidos
Com tantos segredos
Lindos e indecentes
Depois brinca comigo
Ri do meu umbigo
E me crava os dentes
Ai

Eu sou sua menina, viu?
E ele é o meu rapaz
Meu corpo é testemunha
Do bem que ele me faz

O meu amor
Tem um jeito manso que é só seu
De me deixar maluca
Quando me roça a nuca
Quase me machuca
Com a barba mal feita
E de pousar as coxas
Entre as minhas coxas
Quando ele se deita
Ai

O meu amor
Tem um jeito manso que é só seu
De me fazer rodeios
De me beijar os seios
Me beijar o ventre
Me deixar em brasa
Desfruta do meu corpo
Como se o meu corpo
Fosse a sua casa
Ai
',
'creditos' => 'cantam: Elba Ramalho
',
                'faixa_mp3' => '06_o_meu_amor.mp3', 
                'faixa_ogg' => '06_o_meu_amor.ogg',
                'disco_id' => '30',   ));

Musicas::create(
            array(
                'faixa' => 'De Volta Pro Aconchego',
                'compositor' => '(Dominguinhos / Nando Cordel)',
                'letra' => 'Estou de volta pro meu aconchego
Trazendo na mala bastante saudade
Querendo um sorriso sincero, um abraço
Para aliviar meu cansaço
E toda essa minha vontade

Que bom poder tá contigo de novo
Roçando teu corpo e beijando você
Pra mim tu és a estrela mais linda
Seus olhos me prendem, fascinam
A paz que eu gosto de ter

É duro ficar sem você vez em quando
Parece que falta um pedaço de mim
Me alegro na hora de regressar
Parece que vou mergulhar
Na felicidade sem fim

',
'creditos' => 'canta: Elba Ramalho 
',
                'faixa_mp3' => '07_de_volta_pro_aconchego.mp3', 
                'faixa_ogg' => '07_de_volta_pro_aconchego.ogg',
                'disco_id' => '30',   ));
Musicas::create(
            array(
                'faixa' => 'Queixa',
                'compositor' => '(Caetano Veloso) Participação Especial: Lenine',
                'letra' => 'Um amor assim delicado
Você pega e despreza
Não devia ter despertado
Ajoelha e não reza

Dessa coisa que mete medo
Pela sua grandeza
Não sou o único culpado
Disso eu tenho a certeza

Princesa, surpresa, você me arrasou
Serpente, nem sente que me envenenou
Senhora, e agora me diga onde eu vou
Senhora, serpente, princesa

Um amor assim violento
Quando torna-se mágoa
É o avesso de um sentimento
Oceano sem água

Ondas, desejos de vingança
Nessa desnatureza
Batem forte sem esperança
Contra a tua dureza

Um amor assim delicado
Nenhum homem daria
Talvez tenha sido pecado
Apostar na alegria

Você pensa que eu tenho tudo
E vazio me deixa
Mas Deus não quer que eu fique mudo
E eu te grito essa queixa

Princesa, surpresa, você me arrasou
Serpente, nem sente que me envenenou
Senhora, e agora me diga aonde eu vou
Amiga, me diga
',
'creditos' => 'cantam: Elba Ramalho
',
                'faixa_mp3' => '08_queixa_com_lenine.mp3', 
                'faixa_ogg' => '08_queixa_com_lenine.ogg',
                'disco_id' => '30',   ));

Musicas::create(
            array(
                'faixa' => 'Admirável Gado Novo',
                'compositor' => '(Zé Ramalho) Participação Especial: Zé Ramalho',
                'letra' => 'Vocês que fazem parte dessa massa
Que passa nos projetos do futuro
É duro tanto ter que caminhar
E dar muito mais do que receber

E ter que demonstrar sua coragem
À margem do que possa aparecer
E ver que toda essa engrenagem
Já sente a ferrugem lhe comer

Ê, ô, ô
Vida de gado
Povo marcado ê
Povo feliz

Lá fora faz um tempo confortável
A vigilância cuida do normal
Os automóveis ouvem a notícia
Os homens a publicam no jornal

E correm através da madrugada
A única velhice que chegou
Demoram-se na beira da estrada
E passam a contar o que sobrou

O povo foge da ignorância
Apesar de viver tão perto dela
E sonham com melhores tempos idos
Contemplam essa vida numa cela

Esperam nova possibilidade
De verem esse mundo se acabar
A Arca de Noé, o dirigível
Não voam, nem se pode flutuar
Não voam, nem se pode flutuar
Não voam, nem se pode flutuar

',
'creditos' => 'canta: Elba Ramalho
',
                'faixa_mp3' => '09_admiravel_gado_novo_vida_de_gado.mp3', 
                'faixa_ogg' => '09_admiravel_gado_novo_vida_de_gado.ogg',
                'disco_id' => '30',   ));

Musicas::create(
            array(
                'faixa' => 'Chorando e Cantando',
                'compositor' => '(Geraldo Azevedo / Fausto Nilo) Participação Especial: Geraldo Azevedo',
                'letra' => 'Quando fevereiro chegar
Saudade já não mata a gente
A chama continua
No ar
O fogo vai deixar semente
A gente ri, a gente chora
Ai, ai, ai, ai, a gente chora
Fazendo a noite parecer um dia
Faz mais
Depois faz acordar cantando
Pra fazer e acontecer
Verdades e mentiras
Faz crer
Faz desacreditar de tudo
E depois
Depois amor, amor, amor

Ninguém, ninguém verá
O que eu sonhei
Só você, meu amor
Ninguém verá o sonho
Que eu sonhei

Um sorriso quando acordar
Pintado pelo sol nascente
Eu vou te procurar
Na luz
De cada olhar mais diferente
Tua chama me ilumina
Me faz
Virar um astro incandescente
Teu amor faz cometer loucuras
Faz mais
Depois faz acordar chorando
Pra fazer e acontecer
Verdades e mentiras
Faz crer
Faz desacreditar de tudo
E depois
Depois amor, ô, ô, ô
',
'creditos' => 'canta: Elba Ramalho
',
                'faixa_mp3' => '10_chorando_e_cantando.mp3', 
                'faixa_ogg' => '10_chorando_e_cantando.ogg',
                'disco_id' => '30',   ));


Musicas::create(
            array(
                'faixa' => 'É Só Você Querer',
                'compositor' => '(Nando Cordel) Participação Especial: Cezzinha Thomaz',
                'letra' => 'O meu amor é seu
É só você querer
Eu faço qualquer coisa
Pra ficar com você

Te dou meu coração
E o que você sonhar
Você não sabe como é grande
Essa vontade de te amar

Você tem perfume da manhã
Eu fico doidinha pra cheirar
A tua boca é uma romã
Eu fico doidinha pra beijar

Você é minha luz e eu vou seguir
Porque sei que posso me dar bem
O meu coração me diz
Igual a tu não tem ninguém
O meu coração me diz
Igual a tu não tem ninguém

',
'creditos' => 'canta: Elba Ramalho
',
                'faixa_mp3' => '11_e_so_voce_querer.mp3', 
                'faixa_ogg' => '11_e_so_voce_querer.ogg',
                'disco_id' => '30',   ));


Musicas::create(
            array(
                'faixa' => 'Chão De Giz',
                'compositor' => '(Nando Cordel) Participação Especial: Zé Ramalho',
                'letra' => 'Eu desço dessa solidão
Espalho coisas sobre um chão de giz
Há meros devaneios tolos a me torturar
Fotografias recortadas em jornais de folhas amiúde
Eu vou te jogar num pano de guardar confetes
Eu vou te jogar num pano de guardar confetes

Disparo balas de canhão
É inútil pois existe um Grão-Vizir
Há tantas violetas velhas sem um colibri
Queria usar, quem sabe, uma camisa de força
Ou de Vênus
Mas não vou gozar de nós apenas um cigarro
Nem vou te beijar gastando assim o meu batom

Agora pego um caminhão
Na lona, vou a nocaute outra vez
Pra sempre fui acorrentado no seu calcanhar
Meus vinte anos de boy, that’s over baby!
Freud explica
Não vou me sujar fumando apenas um cigarro
Nem vou te beijar gastando assim o meu batom
Quanto ao pano dos confetes
Já passou meu carnaval
Isso explica porque o sexo é assunto popular
No mais, estou indo embora
No mais, estou indo embora, baby, baby
No mais, estou indo embora...
',
'creditos' => 'canta: Elba Ramalho
',
                'faixa_mp3' => '12_chao_de_giz.mp3', 
                'faixa_ogg' => '12_chao_de_giz.ogg',
                'disco_id' => '30',   ));

Musicas::create(
            array(
                'faixa' => 'Chuva De Sombrinhas',
                'compositor' => '(André Rio / Nena Queiroga) Participação Especial: André Rio',
                'letra' => 'Eu desço dessa solidão
Espalho coisas sobre um chão de giz
Há meros devaneios tolos a me torturar
Fotografias recortadas em jornais de folhas amiúde
Eu vou te jogar num pano de guardar confetes
Eu vou te jogar num pano de guardar confetes

Disparo balas de canhão
É inútil pois existe um Grão-Vizir
Há tantas violetas velhas sem um colibri
Queria usar, quem sabe, uma camisa de força
Ou de Vênus
Mas não vou gozar de nós apenas um cigarro
Nem vou te beijar gastando assim o meu batom

Agora pego um caminhão
Na lona, vou a nocaute outra vez
Pra sempre fui acorrentado no seu calcanhar
Meus vinte anos de boy, that’s over baby!
Freud explica
Não vou me sujar fumando apenas um cigarro
Nem vou te beijar gastando assim o meu batom
Quanto ao pano dos confetes
Já passou meu carnaval
Isso explica porque o sexo é assunto popular
No mais, estou indo embora
No mais, estou indo embora, baby, baby
No mais, estou indo embora...
',
'creditos' => 'canta: Elba Ramalho
',
                'faixa_mp3' => '13_chuva_de_sombrinhas.mp3', 
                'faixa_ogg' => '13_chuva_de_sombrinhas.ogg',
                'disco_id' => '30',   ));

Musicas::create(
            array(
                'faixa' => 'Frevo Mulher',
                'compositor' => '(Zé Ramalho)',
                'letra' => 'Quantos aqui ouvem os olhos eram de fé
Quantos elementos amam aquela mulher
Quantos homens eram inverno, outros verão
Outonos caindo secos no solo da minha mão

Gemeram entre cabeças a ponta do esporão
A folha do não me toque e o medo da solidão
Veneno meu companheiro desatado cantador
E desemboca no primeiro açude do meu amor

É quando o tempo sacode a cabeleira
A trança toda vermelha
Um olho cego vagueia
Procurando por um
',
'creditos' => 'canta: Elba Ramalho 
',
                'faixa_mp3' => '14_frevo_mulher.mp3', 
                'faixa_ogg' => '14_frevo_mulher.ogg',
                'disco_id' => '30',   ));

Musicas::create(
            array(
                'faixa' => 'Embolar Na Areia',
                'compositor' => '(Herbert Azul)',
                'letra' => 'Eu hoje à noite vou sair pro mêi rua
Vou beijar a santa lua que cismou de aparecer
É dia de festa, fitas, feira e reisado
Ó, meu belo do pecado
Morro de amor por você

Namoradeiro, menino canavial
Se banha no São Francisco do Penedo Coqueiral
E no Puxim
Coruripe do pontal
És fruto, nome de flor
Na trilha do manguezal

Vamos se embolar na areia meu amor, viu
Vamos se embolar na areia
Vamos se embolar na areia meu amor, viu
Vamos se embolar na areia

Grão de areia
Eu te dou colar de conchas
Faço promessa pras águas
Pro vento vir e soprar
E em janeiro
Ir ao mar dos navegantes
Para em terras bem distantes
A santa abençoar
',
'creditos' => 'canta: Elba Ramalho
Arranjo, Rhodes, programação de bateria, percussão e efeitos: Zé Américo Bastos
Baixo: Ney Conceição
Guitarras e viola 12: Pedro Braga
Coro: Elba e Flavio Rêgo
',
                'faixa_mp3' => '01_embolar_na_areia.mp3', 
                'faixa_ogg' => '01_embolar_na_areia.ogg',
                'disco_id' => '31',   ));

Musicas::create(
            array(
                'faixa' => 'Deitar e Rolar',
                'compositor' => '(Antonio Barros / Cecéu)',
                'letra' => 'Quero comer da tua comida
Beber da tua bebida
Deitar na tua cama

Quero ser tua sobremesa
Porque eu quero ter a certeza
Meu bem, que você me ama

Quero lavar o teu prato
Eu quero estar no teu retrato
Da tua sala de estar

Quero sentir teu calor
Provar o gosto do amor
O amor que você tem pra dar

Aí, eu vou, meu bem
Eu vou deitar e rolar
Aí, eu vou, meu bem
Eu vou deitar e rolar

Quero ser o teu caminho
O calor do teu verão
O agasalho do teu ninho
Teu amor, tua paixão

Deitar no teu leito
E poder te abraçar
E daquele jeito você me beijar
',
'creditos' => 'canta: Elba Ramalho
Arranjo e acordeom: Cezzinha Thomaz
Baixo: Ney Conceição
Guitarras: Sandro Haick e Marcos Arcanjo
Bateria: Sergio Machado
Percussão: Durval Pereira
Sax soprano e tenor: Zé Canuto
Coro: Jussara e Jurema Loureço, Guadalupe e Elba
',
                'faixa_mp3' => '02_deitar_e_rolar.mp3', 
                'faixa_ogg' => '02_deitar_e_rolar.ogg',
                'disco_id' => '31',   ));

Musicas::create(
            array(
                'faixa' => 'Frevo Meio Envergonhado',
                'compositor' => '(Monique Kessous)',
                'letra' => 'Não sou de nenhuma tribo
A minha ciranda não tem roda não
Eu faço de tudo um pouco
Mas ninguém viu, ninguém sabe não

Sou desse jeito meio envergonhada
Mas quando eu danço vou até o chão
Sou desse jeito meio envergonhada
Mas quando eu danço vou até o chão

Será que eu posso ensinar
A desligar o botão
É viver só com o coração

Vida é feita pra amar
Fazer o que bem quiser
Tô aprendendo a chupar cana e assobiar
Vida é feita pra amar
Fazer o que bem quiser
Tô aprendendo a chupar cana e assobiar

Esse é o meu frevo, meu fogo
Meu eterno carnaval
Eu vou correndo pra não me atrasar
Vambora lá dançar

',
'creditos' => 'canta: Elba Ramalho
Arranjo, PAD, synth e programação de percussão: Zé Américo Bastos
Baixo: Ney Conceição
Guitarra e violão: Marcos Arcanjo
Bateria: Tostão Queiroga
Percussão: Durval Pereira e Anjo Caldas
',
                'faixa_mp3' => '03_frevo_meio_envergonhado.mp3', 
                'faixa_ogg' => '03_frevo_meio_envergonhado.ogg',
                'disco_id' => '31',   ));

Musicas::create(
            array(
                'faixa' => 'Quando Fecho Os Olhos',
                'compositor' => '(Chico César / Carlos Rennó)',
                'letra' => 'E aí você surgiu na minha frente
E eu vi o espaço e o tempo em suspensão
Senti no ar a força diferente
De um momento eterno desde então

E aqui dentro de mim você demora
Já tornou-se parte mesmo do meu ser
E agora, em qualquer parte, a qualquer hora
Quando eu fecho os olhos vejo só você

E cada um de nós é um a sós
E uma só pessoa somos nós
Unos num canto, numa voz
E cada um de nós é um a sós
E uma só pessoa somos nós
Unos num canto, numa voz

O amor une os amantes em um ímã
E num enigma claro se traduz
Extremos se atraem, se aproximam
E se completam como sombra e luz

E assim viemos nos assimilando
Nos assemelhando a nos absorver
E agora, não tem onde, não tem quando
Quando eu fecho os olhos vejo só você
',
'creditos' => 'canta: Elba Ramalho
Arranjo, piano e cordas (sample): Zé Américo Bastos
Baixo: Ney Conceição
Violão (stell e nylon): Marcos Arcanjo
Bateria: Tostão Queiroga
Percussão: Durval Pereira e Anjo Caldas
Acordeom: Mestrinho
',
                'faixa_mp3' => '04_quando_fecho_os_olhos.mp3', 
                'faixa_ogg' => '04_quando_fecho_os_olhos.ogg',
                'disco_id' => '31',   ));

Musicas::create(
            array(
                'faixa' => 'Por Que Tem Que Ser Assim?',
                'compositor' => '(Chico Pessoa / Cezzinha Thomaz)',
                'letra' => 'Já é tarde e sem querer
Eu aqui de novo pensando em você
Por querer teu coração
Tô perdida na razão

Ah, como eu queria
Ficar sempre de braços abertos pra você
Como o Cristo Redentor

Ah, eu não queria
A cada dia amanhecer sem teu amor
Eu não suportaria tanta dor

Por que tem que ser assim?
Se eu te quero tanto
O quanto você quer a mim
Se eu te amo tanto
Por que tem que ser assim?

',
'creditos' => 'canta: Elba Ramalho
Arranjo e acordeom: Cezzinha Thomaz
Baixo: Ney Conceição
Violão e viola caipira: João Lira
Percussão: Anjo Calas e Durval Pereira
',
                'faixa_mp3' => '05_por_que_tem_que_ser_assim.mp3', 
                'faixa_ogg' => '05_por_que_tem_que_ser_assim.ogg',
                'disco_id' => '31',   ));

Musicas::create(
            array(
                'faixa' => 'Não Chora, Não Chora Não',
                'compositor' => '(Petrúcio Amorim)',
                'letra' => 'Quando o forró começa assim ninguém aguenta
O sangue esquenta na batida do baião
A mulherada se assanha no terreiro
Pega a mão do cavalheiro que seja bom de salão

Aí começa a safadeza na sanfona
O fole esquenta na batida do baião
Ninguém nesse forró
Não chora, não chora, não chora não
Ninguém nesse forró
Não chora, não chora, não chora não

Ciranda também mexe com a cabeça
O frevo faz o corpo flutuar
Maracatu lá no terreiro de Olinda
Faz a menina na ribeira balança
Enquanto a alegria permanece
No samba e no boi do Maranhão

Ninguém nesse forró
Não chora, não chora, não chora não
Ninguém aqui nesse forró
Não chora, não chora, não chora não
',
'creditos' => 'canta: Elba Ramalho
Arranjo e acordeom: Cezzinha Thomaz
Baixo: Ney Conceição
Guitarra: Marcos Arcanjo
Bateria: Sergio Machado
Percussão: Durval Pereira
Coro: Jussara e Jurema Lourenço, Guadalupe e Elba
',
                'faixa_mp3' => '06_nao_chora_nao_chora_nao.mp3', 
                'faixa_ogg' => '06_nao_chora_nao_chora_nao.ogg',
                'disco_id' => '31',   ));

Musicas::create(
            array(
                'faixa' => 'Amor De Bumba-Meu-Boi',
                'compositor' => '(Rogério Rangel)',
                'letra' => 'Eu ando louco por uma paixão maior
E eu que bem tentei evitar o pior
E o pior é tanto querer e não ter
A estrada é longa
E a sanfona chora só, só...

Nessa tarde que me arde solidão
A FM agita as tribos da nação
Olhei você, passei a acreditar em anjo
Sua presença deu motivo, deu canção

Dança meu boi
Pisa leve, pisa fundo
Dança meu boi
Vira noite, vira mundo

Na madrugada
Vai buscar o meu amor
No pó da estrada
Minha lágrima secou

Tudo que eu canto tem um tanto de você
Tento fugir, noutra rima me esconder
Mas essa luz cintilando em cada verso
Na melodia mergulho
Deixa doer, doer...

Eu ando louco que me arde solidão
Nessa tarde tem um tanto de você
A estrada é longa
E eu acredito em anjo
Minha sanfona
Chora só, deixa doer
',
'creditos' => 'canta: Elba Ramalho
Arranjo e acordeom: Cezzinha Thomaz
Baixo, violão 7 e bandolim: Sandro Haick
Guitarra e violão: Marcos Arcanjo
Bateria: Sergio Machado
Percussão: Durval Pereira, Anjo Caldas e Elba
Coro: Jussara e Jurema Lourenço, Guadalupe e Elba
',
                'faixa_mp3' => '07_amor_de_bumba_meu_boi.mp3', 
                'faixa_ogg' => '07_amor_de_bumba_meu_boi.ogg',
                'disco_id' => '31',   ));

Musicas::create(
            array(
                'faixa' => 'Fibra De Cristal',
                'compositor' => '(Sérgio Sá)',
                'letra' => 'Me aparece de dentro do peito
Transmitindo um eterno sinal
De que estranha matéria ele é feito?
Fibra fina, fibra de cristal

Cruza portas, transpassa paredes
Pelos ares e mares se lança
É o fio de todas as redes
Se estendendo na invisível dança

Meu amor
Quando é teu companheiro que te chama
A energia fugaz de quem te ama
Não conhece limites pra te tocar

Neste amor
Cada impulso é canção que se traduz
Em som, na velocidade da luz
Que te alcança antes mesmo de eu cantar
Te alcança antes mesmo de eu cantar

Sol ardente, camadas de gelo
Tempestade, avalanche ou vulcão
Nada vai ser capaz de detê-lo
No caminho do teu coração

Dá mil voltas em torno do mundo
Desce o cosmo se preciso for
Do meu peito ele nasce no fundo
Pra mandar meus recados de amor

',
'creditos' => 'canta: Elba Ramalho
Arranjo, Rhodes, synth e programação de bateria e percussão: Zé Américo Bastos
Baixo: Ney Conceição
Guitarras e viola 12: Pedro Braga
',
                'faixa_mp3' => '08_fibra_de_cristal.mp3', 
                'faixa_ogg' => '08_fibra_de_cristal.ogg',
                'disco_id' => '31',   ));

Musicas::create(
            array(
                'faixa' => 'Mucuripe',
                'compositor' => '(Fagner / Belchior)',
                'letra' => 'As velas do Mucuripe
Vão sair para pescar
Vou levar as minhas mágoas
Pras águas fundas do mar
Hoje à noite namorar
Sem ter medo da saudade
Sem vontade de casar

Calça nova de riscado
Paletó de linho branco
Que até o mês passado
Lá no campo inda era flor

Com o meu chapéu quebrado
Um sorriso ingênuo e franco
De um rapaz moço encantado
Com vinte anos de amor

Aquela estrela é dela
Vida, vento, vela leva-me daqui
Aquela estrela é dela
Vida, vento, vela leva-me daqui
',
'creditos' => 'canta: Elba Ramalho
Arranjo, piano e cordas (sample): Zé Américo Bastos
Baixo: Ney Conceição
Violão: Marcos Arcanjo
Bateria: Tostão Queiroga
Percussão: Durval Pereira e Anjo Caldas
Acordeom: Mestrinho
',
                'faixa_mp3' => '09_mucuripe.mp3', 
                'faixa_ogg' => '09_mucuripe.ogg',
                'disco_id' => '31',   ));

Musicas::create(
            array(
                'faixa' => 'Onde Deus Possa Me Ouvir',
                'compositor' => '(Vander Lee)',
                'letra' => 'Sabe o que eu queria agora, meu bem?
Sair, chegar lá fora e encontrar alguém
Que não me dissesse nada
Não me perguntasse nada também

Que me oferecesse um colo ou um ombro
Onde eu desaguasse todo o desengano
Mas a vida anda louca
As pessoas andam tristes
Meus amigos são amigos de ninguém

Sabe o que eu mais quero agora, meu amor?
Morar no interior do seu interior
Pra entender por que se agridem
Se empurram pro abismo
Se debatem, se combatem sem saber

Meu amor, deixa eu chorar até cansar
Me leve pra qualquer lugar
Aonde Deus possa me ouvir

Minha dor eu não consigo compreender
Eu quero algo pra beber
Me deixe aqui, pode sair
Adeus

',
'creditos' => 'canta: Elba Ramalho
Arranjo, Rhodes e teclado: Zé Américo Bastos
Arranjo e acordeom: Mestrinho
Baixo: Ney Conceição
Violão: Marcos Arcanjo
Guitarra: Pedro Braga
Bateria: Tostão Queiroga
Percussão: Durval Pereira e Anjo Caldas
',
                'faixa_mp3' => '10_onde_deus_possa_me_ouvir.mp3', 
                'faixa_ogg' => '10_onde_deus_possa_me_ouvir.ogg',
                'disco_id' => '31',   ));

Musicas::create(
            array(
                'faixa' => 'Tu De Lá, Eu De Cá',
                'compositor' => '(Antonio Barros / Cecéu)',
                'letra' => 'Meu bem, vamos fazer esse forró pegar fogo
Entra no jogo, entra no jogo
Quem nunca joga, não pode aprender
Ganhar e perder, perder e ganhar
Entrar pela noite, sair de manhã
Comer a maçã sem Eva notar
Vamos chinelar, levantar poeira
Porque essa brincadeira vai até o sol raiar

Tu de lá, eu de cá, meu bem
Como as ondas do mar
Tu de lá, eu de cá, meu bem
Como as ondas do mar

Chega aqui pertinho, me dá um cheirinho
Pisa miudinho no meu coração
Explode no peito a tua alegria
Sorria, sorria, minha grande paixão

As águas que correm no rio Amazonas
Vão fazer marola nas ondas do mar
O teu remelexo me endoida a cachola
Na tua marola quero me afogar
',
'creditos' => 'canta: Elba Ramalho
Arranjo e acordeom: Cezzinha Thomaz
Baixo: Ney Conceição
Violão 7 e bandolim: Sandro Haick
Guitarra: Marcos Arcanjo
Bateria: Sergio Machado
Percussão: Durval Pereira
Coro: Jussara e Jurema Lourenço, Guadalupe e Elba
',
                'faixa_mp3' => '11_tu_de_la_eu_de_ca.mp3', 
                'faixa_ogg' => '11_tu_de_la_eu_de_ca.ogg',
                'disco_id' => '31',   ));

Musicas::create(
            array(
                'faixa' => 'Na Rede',
                'compositor' => '(Nando Cordel)',
                'letra' => 'Quem é que não gosta
De um agarradinho
De forró no escurinho
De sentir calor

Quem é que não gosta
De ficar na rede
De matar a sede
De fazer amor

Quem é que não gosta
De ouvir fungado
De ficar grudado
De sentir prazer

Nesse quebra-quebra
Nesse esfrega-esfrega
Coração fica pedindo
Pra se derreter

Ai, ai, ai, ai, ai, ai
Aqui tá bom demais, aqui tá bom demais
Ai, ai, ai, ai, ai, ai
Aqui tá bom demais, aqui tá bom demais

Na brincadeira
A gente faz o que é bom
A gente suja de batom
A gente cresce o nosso amor
Carinho, chamego, desejo, sabor
',
'creditos' => 'canta: Elba Ramalho
Arranjo e acordeom: Cezzinha Thomaz
Baixo: Ney Conceição
Guitarras: Sandro Haick e Marcos Arcanjo
Bateria: Sergio Machado
Percussão: Durval Pereira
Coro: Jussara e Jurema Lourenço, Guadalupe e Elba
',
                'faixa_mp3' => '12_na_rede.mp3', 
                'faixa_ogg' => '12_na_rede.ogg',
                'disco_id' => '31',   ));

Musicas::create(
            array(
                'faixa' => 'Minha Vida é Te Amar',
                'compositor' => '(Dominguinhos / Nando Cordel)',
                'letra' => 'Minha lua é tua estrada
Minha ceia é teu sabor
Minha casa a tua espera
Nos meus braços, teu amor

Teu sorriso é sempre lindo
Meu desejo é te encontrar
Meu prazer é infinito
Minha vida é te amar

Eu quero tudo, eu faço tudo
Pra ficar perto de você
Você é sede, é sonho, é lírio
É a razão pra eu viver
',
'creditos' => 'canta: Elba Ramalho
Arranjo e acordeom: Cezzinha Thomaz
Baixo: Ney Conceição
Violão e viola caipira: João Lira
Percussão: Anjo Caldas e Durval Pereira

',
                'faixa_mp3' => '13_minha_vida_e_te_amar.mp3', 
                'faixa_ogg' => '13_minha_vida_e_te_amar.ogg',
                'disco_id' => '31',   ));
Musicas::create(
            array(
                'faixa' => 'Forró Brasileiro',
                'compositor' => '(Cezzinha Thomaz / Fabio Simões)',
                'letra' => 'Bate o zabumba, bate o triângulo e pandeiro
Chama o povo brasileiro que o forró vai começar
Puxa esse fole, bota gás no candeeiro
Que a palha do coqueiro da palhoça vai voar

É pra dançar forró e arrasta-pé
Homem dançar com mulher até o dia clarear
Eu quero ver aquele bole-bole
Que o corpo fica mole, nego bota pra suar

Forró brasileiro
Começou no meu terreiro
E todo mundo quer dançar
Forró brasileiro
Começou no meu terreiro
E vai até o sol raiar
',
'creditos' => 'canta: Elba Ramalho
Arranjo e acordeom: Cezzinha Thomaz
Baixo: Ney Conceição
Guitarra: Sandro Haick
Bateria: Sergio Machado
Percussão: Durval Pereira
Sax alto, soprano e tenor: Zé Canuto
Coro: Jussara e Jurema Loureço, Guadalupe e Elba
',
                'faixa_mp3' => '14_forro_brasileiro.mp3', 
                'faixa_ogg' => '14_forro_brasileiro.ogg',
                'disco_id' => '31',   ));






Musicas::create(
            array(
                'faixa' => 'Olhando o Coração',
                'compositor' => '(Dominguinhos / Climério Ferreira)',
                'letra' => 'O meu andar pelo mundo
É um andar bem profundo
Vai onde tem um forró

Uma alegria, uma dança
Meu coração não se cansa
De uma festa encontrar

Um dia talvez eu pare
Ou qualquer dia encostar
Talvez cabreiro eu encare
E olhe o povo dançar

Mas por enquanto eu nem tento
Apreciar as estrelas
Olhar pro céu e vê-las
Piscarem luzes no chão

Eu cá por mim me contento
E sem querer ofendê-las
Ao invés de olhar estrelas
Olho pro meu coração

Pois é assim meu andar
Nos cafundós desse mundo
Não me engano ou confundo
Nem sei pra onde vou ir

Só saberei se chegar
Finalmente ao meu destino
Não cometi desatino
De planejar ao partir

O meu andar pela vida
É sem controle, errante
É como sonho de amante
Que acredita no amor

E nessa trilha perdida
No rumo desconhecido
O meu andar atrevido
Cura ferida e a dor
Cura ferida e a dor

O meu andar pela vida
É sem controle errante
É como sonho de amante
Que acredita no amor

E nessa trilha perdida
No rumo desconhecido
O meu andar atrevido
Cura a ferida e a dor
Cura a ferida e a dor

',
'creditos' => 'Programação/beat: DJ Dolores
Bateria: Tostão Queiroga
Baixo, guitarra, kalimba e apitos: Yuri Queiroga
Zabumba e percussão: Durval Pereira
Percussão: Anjo Caldas
Viola: Paulo Rafael
Violão: Ney Conceição
Acordeom: Rafael Meninão
Flautas e pífanos: Dirceu Leite

',
                'faixa_mp3' => '01_olhando_o_coracao.mp3', 
                'faixa_ogg' => '01_olhando_o_coracao.ogg',
                'disco_id' => '32',   ));




Musicas::create(
            array(
                'faixa' => 'Fazê o quê',
                'compositor' => '(Pedro Luís)',
                'letra' => 'Prendi as coisa
Faiscando a ferradura
Na minha cabeça dura
E fui no lombo do cavalo

Ao galopá-lo
Fui salvando minha vida
Que eu achava já perdida
Pelas esquinas do mundo

De vagabundo
Poeta tem muito pouco
Menos médico, mais louco
Vai enchendo a cabeça

Pra que apareça
Agarrada no seu verso
Ideia prum universo
Mais tranquilo e mais humano

Traçando plano
Reta, curva ou ladeira
Bosque, várzea ou ribanceira
Vai seguindo o arquiteto

Se tem Hermeto
Bispo, Marley, Gentileza
Isso só me dá certeza
Da nobreza que dá certo

Vou fazer, vou fazer (o que?)
Música pra enriquecer
Os corações e o planeta
Basta um papel e uma caneta


',
'creditos' => 'Programação/beat: DJ Dolores
Bateria: Tostão Queiroga
Baixo, guitarra e monotron: Yuri Queiroga
Alfaia e percussão: Lucas dos Prazeres
Guitarra e viola: Paulo Rafael
Trombone: Nilsinho Amarante
Trompete: Enok Chagas
Sax tenor: Gilberto Pontes
Sax barítono: Maestro Spok
Coro: Elba Ramalho, Kika Tristão, Jussara Lourenço, Bettina Graziani, Luã Mattar, Alessandro Rocha, Léo Araujo e Marcus Vinicius


',
                'faixa_mp3' => '02_faze_o_que.mp3', 
                'faixa_ogg' => '02_faze_o_que.ogg',
                'disco_id' => '32',   ));


Musicas::create(
            array(
                'faixa' => 'Só pra lembrar',
                'compositor' => '(Zélia Duncan / Dani Black)',
                'letra' => 'Quando a noite
For longa demais
A escuridão
Roubar sua paz

Posso ser eu
O risco pra uma faísca
Posso ser eu
O lume que se arrisca
Solo no breu
Fagulha imune a dor
Só pra lembrar
Que você tem um amor

Quando a espera
For tempo demais
A esperança
Cansada e gasta no chão

Posso ser eu
O braço que te carrega
Posso ser eu
O laço que te entrega
Fé no apogeu
A mão que rega a flor
Só pra lembrar
Que você tem um amor

Pode a razão desabar
Deixa cair o perdão em gotas
Pode o oásis secar
Eu buscarei a mais clara das fontes
Só pra lembrar
Só pra lembrar
Que você tem meu amor

Leito coberto de sonho e mel
De peito aberto bem perto do céu
Nunca é deserto nem nada é tão mau
Quando se tem um amor só seu



',
'creditos' => 'Bateria: Thomas Harres
Baixo: Pedro Dantas
Percussão: Anjo Caldas
Agogô: Luã
Guitarra e agogô: Yuri Queiroga
Violão de nylon e violão de aço: Marcos Arcanjo
Clarinete e flauta: Dirceu Leite
Cello: Lui Coimbra e Ricardo Santoro
Viola: Jessé Pereira
Arranjo de cordas: Ney Conceição


',
                'faixa_mp3' => '03_so_pra_lembrar.mp3', 
                'faixa_ogg' => '03_so_pra_lembrar.ogg',
                'disco_id' => '32',   ));


Musicas::create(
            array(
                'faixa' => 'É o que me interessa',
                'compositor' => '(Lenine / Dudu Falcão)',
                'letra' => 'Daqui desse momento
Do meu olhar pra fora
O mundo é só miragem
A sombra do futuro
A sobra do passado
Assombram a paisagem

Quem vai virar o jogo
E transformar a perda
Em nossa recompensa
Quando eu olhar pro lado
Eu quero estar cercado
Só de quem me interessa

Às vezes é um instante
A tarde faz silêncio
E o vento sopra a meu favor
Às vezes eu pressinto
E é como uma saudade
De um tempo que ainda não passou

Me traz o teu sossego
Atrasa o meu relógio
Acalma a minha pressa
Me dá sua palavra
Sussurra em meu ouvido
Só o que me interessa

A lógica do vento
O caos do pensamento
A paz na solidão
A órbita do tempo
A pausa do retrato
A voz da intuição

A curva do universo
A fórmula do acaso
O alcance da promessa
O salto do desejo
O agora e o infinito
Só o que me interessa
',
'creditos' => 'Harpa: Cristina Braga
Baixo, guitarra e synth: Yuri Queiroga
Violão e synth: Luã
Cello: Lui Coimbra
',
                'faixa_mp3' => '04_e_o_que_me_interessa.mp3', 
                'faixa_ogg' => '04_e_o_que_me_interessa.ogg',
                'disco_id' => '32',   ));

Musicas::create(
            array(
                'faixa' => 'Nossa Senhora da Paz',
                'compositor' => '(Clayton Barros / Emerson Calado / Lirinha / Nego Henrique / Rafael Almeida)',
                'letra' => 'Nossa Senhora da Paz
A bailarina do circo
Vem beijar a pele da cidade

As feridas
Os jardins
A pressão
E o motor

Nossa Senhora dos Sonhos
A trapezista do circo
Venha descansar na minha cama

Traga toda luz que há no céu
Traga toda luz que há no chão
Leva meu atalho e minha sorte
No movimento da rua

',
'creditos' => 'Harpa: Cristina Braga
Bateria: Tostão Queiroga
Alfaia e percussão: Lucas dos Prazeres
Pandeirão e percussão: Anjo Caldas
Baixo e guitarra: Yuri Queiroga
Guitarra: Paulo Rafael
Violão: Marcos Arcanjo
Cello: Lui Coimbra
Coro: Luã, Alessandro Rocha, Léo Araujo e Marcos Vinícius

',
                'faixa_mp3' => '05_nossa_senhora_da_paz.mp3', 
                'faixa_ogg' => '05_nossa_senhora_da_paz.ogg',
                'disco_id' => '32',   ));


Musicas::create(
            array(
                'faixa' => 'Contrato de separação',
                'compositor' => '(Dominguinhos / Anastácia)',
                'letra' => 'Olha, essa saudade
Que maltrata o meu peito
É ilusão
E por ser ilusão
É mais difícil de apagar

Ela vai me consumindo lentamente
Ela brinca com meu peito
E leva sempre a melhor

Eu quis fazer com ela
Um contrato de separação
Negou-se então a aceitar
Sorrindo da minha ilusão

Só tem um jeito agora
É tentar de vez me libertar
Brigar com a lembrança
Pra não mais lembrar


',
'creditos' => 'Acordeom: Toninho Ferragutti
Arranjo de cordas e baixo acústico: Ney Conceição
Cello: Lui Coimbra e Janaina Salles
Viola: Ricardo Volker Taboada


',
                'faixa_mp3' => '06_contrato_de_separacao.mp3', 
                'faixa_ogg' => '06_contrato_de_separacao.ogg',
                'disco_id' => '32',   ));

Musicas::create(
            array(
                'faixa' => 'Nos ares de Lisboa',
                'compositor' => '(Dominguinhos / Fausto Nilo) Participação especial: Carminho (voz), Armandinho (bandolim) e Diogo Clemente (viola portuguesa)',
                'letra' => 'Uma pombinha branca
Nos ares de Lisboa
A procurar seu ninho
Voa, voa

Há flores no deserto
Há pedras no caminho
Há lágrimas na rua
Lua, lua

Minha saudade é tanta
Que espanta o passarinho
E a luz que vem do vinho
Dá vontade de voar
<strong>Um passarinho enganador</strong>
(Dominguinhos / Fausto Nilo)
Você voou do nosso ninho
Meu passarinho enganador
O juazeiro chorou
O riacho emudeceu
E o meu céu
Já não tem mais passarinhos
Você e eu

Não tenha pena de mim
Vendo a paisagem chorar
Descansei meu olhar
Em outro olhar também

Ninguém conhece o amor sem chorar
Nem acontece uma dor sem prazer
Você foi a seca ruim
E depois temporal
Afinal você foi o meu bem querer

Um rio passou por mim
Acariciou meu sertão
Fez a saudade chover
Dentro do meu coração

Felicidade vai
Felicidade vem
Você é o meu inverno
E o meu sol também

',
'creditos' => 'Vozes: Elba e Carminho
Bandolim: Armandinho
Acordeom: Toninho Ferragutti
Baixo acústico: Ney Conceição
Viola portuguesa: Diogo Clemente


',
                'faixa_mp3' => '07_nos_ares_de_lisboa.mp3', 
                'faixa_ogg' => '07_nos_ares_de_lisboa.ogg',
                'disco_id' => '32',   ));

Musicas::create(
            array(
                'faixa' => 'Árvore',
                'compositor' => '(Edson Gomes)',
                'letra' => 'Ando sobre a terra
E vivo sob o sol
E as
E as minhas raízes
Eu balanço
Eu balanço
Eu balanço

Todo santo dia
Pois todo dia é santo
E eu
Sou uma árvore bonita
Que precisa ter os seus cuidados

Vem me regar, mãe
Vem me regar
Vem me regar, ô, mãe
Vem me regar
',
'creditos' => 'Bateria: Sanzyo Dub
Baixo: Chico Tchê
Percussão: Anjo Caldas
Guitarra base: Jayme Bettas
Guitarra solo: Yuri Queiroga
Violão: Luã
Órgão e teclado: João Nogueira
Trombone: Nilsinho Amarante
Trompete: Enok Chagas
Sax tenor: Gilberto Pontes
Sax barítono: Maestro Spok
Coro: Gil Miranda e Gilce de Paula
',
                'faixa_mp3' => '08_arvore.mp3', 
                'faixa_ogg' => '08_arvore.ogg',
                'disco_id' => '32',   ));

Musicas::create(
            array(
                'faixa' => 'Patchuli',
                'compositor' => '(Chico César)',
                'letra' => 'Que cheiro bom é esse
Que eu tô sentindo aqui
Patchuli, patchuli
Patchuli, patchuli

Cheira que nem fogueira
Que queima no Cariri
Patchuli, patchuli
Patchuli, patchuli

Cheiro de mato queimado
De coivara no roçado
Que há dentro de mim e ti
Eita cheiro bom danado
Parece um sonho acordado
Que se sonha sem dormir
Patchuli, patchuli
Patchuli, patchuli

Nesse baile perfumado
Mesmo quando tô parado
O chão parece bulir
Solto ou empareado
Danço sem sentir enfado
Na dança do patchuli
Patchuli, patchuli
Patchuli, patchuli

',
'creditos' => 'Vozes: Elba e Chico César
Bateria e percussão: Sid3
Baixo e synth: Yuri Queiroga
Guitarra: Gabriel Melo
Violão: Luã
Arranjo de metais e trombone: Nilsinho Amarante
Sax: Gilberto Pontes e Maestro Spok
Trompete: Enok Chagas

',
                'faixa_mp3' => '09_patchuli.mp3', 
                'faixa_ogg' => '09_patchuli.ogg',
                'disco_id' => '32',   ));

Musicas::create(
            array(
                'faixa' => 'La noyée',
                'compositor' => '(Serge Gainsbourg)',
                'letra' => 'Tu t&#39;en vas à la dérive
Sur la rivire du souvenir
Et moi, courant sur la rive
Je te crie de revenir

Mais, lentement, tu t&#39;éloignes
Dans ta course éperdue
Peu à peu, je te regagne
Un peu de terrain perdu

De temps en temps, tu t&#39;enfonces
Dans le liquide mouvant
Ou bien, frôlant quelques ronces
Tu hésites et tu m&#39;attends

En te cachant la figure
Dans ta robe retroussée
De peur que ne te défigurent
Et la honte et les regrets

Tu n&#39;es plus qu&#39;une pauvre épave
Chienne creve au fil de l&#39;eau
Mais je reste ton esclave
Et plonge dans le ruisseau

Quand le souvenir s&#39;arrête
Et l&#39;océan de l&#39;oubli
Brisant nos coeurs et nos têtes
A jamais, nous réunit


',
'creditos' => 'Arranjo, piano, acordeom e cravo: Marcelo Jeneci
Baixo: Yuri Queiroga
Violão e guitarra: Luã
',
                'faixa_mp3' => '10_la_noyee.mp3', 
                'faixa_ogg' => '10_la_noyee.ogg',
                'disco_id' => '32',   ));

Musicas::create(
            array(
                'faixa' => 'Risoflora',
                'compositor' => '(Chico Science)',
                'letra' => 'Eu sou um caranguejo, estou de andada
Só por sua causa
Só por você, só por você
E quando estou contigo eu quero gostar
E quando estou um pouco mais junto
Eu quero te amar

E aí deixar de lado
Como a flor que eu tinha na mão
E aí esqueci na calçada
Só por esquecer
Apenas porque você
Não sabe voltar pra mim

Ô, Risoflora
Vou ficar de andada até te achar
Prometo, meu amor, vou me regenerar

Ô, Risoflora
Não vou dar mais bobeira dentro de um caritó
Ô, Risoflora, não me deixe só

Eu sou um caranguejo e quero gostar
Enquanto estou um pouco mais junto
Eu quero te amar
E acho que você não sabe o que é isso, não
E, se sabe, pelo menos você pode fingir
E em vez de cair em suas mãos
Preferia os seus braços
E em meus braços te levarei como uma flor
Pra minha maloca na beira do rio, meu amor



',
'creditos' => 'Harpa: Cristina Braga
Bateria: Tostão Queiroga
Percussão: Sid3
FX: DJ Dolores
Baixo e guitarra: Yuri Queiroga
Guitarra: Luã

',
                'faixa_mp3' => '11_risoflora.mp3', 
                'faixa_ogg' => '11_risoflora.ogg',
                'disco_id' => '32',   ));

Musicas::create(
            array(
                'faixa' => 'Ser livre',
                'compositor' => '(Arlindo Cruz / Zeca Pagodinho)',
                'letra' => 'Vou romper de vez as algemas
Dar ponto final aos problemas
Livre, bem livre
Livre

Vou viver um mundo sem leis
E sem ser senão ou talvez
Ser livre, livre
Livre

Vou acreditar no futuro
E sair de cima do muro
Não vou mergulhar no escuro
Não vou sufocar o meu canto

Pelos quatro cantos da vida
Procurar a paz esquecida
Caminhar pelos bons caminhos
Num jardim com flor, sem espinhos

Na aurora de um novo dia
Hei de ter amor e algeria
Contruir a paz no meu ninho
E cantar com os passarinhos

Livre, livre
Livre, bem livre
Livre, livre
Ser livre
Livre
',
'creditos' => 'Arranjo, synth e programação: Ivo Senra
Guitarra: Luã
',
                'faixa_mp3' => '12_ser_livre.mp3', 
                'faixa_ogg' => '12_ser_livre.ogg',
                'disco_id' => '32',   ));
/////////////////FIM
    }

}

