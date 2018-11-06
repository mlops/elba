<?php

class AddParticipacoesExtas extends Seeder {
public function run() {
DB::table('participacoes_extras')->delete(); // deleting old records.

ParticipacoesExtras::create( [
'participacoes_id' =>'1',
'faixa_titulo' => 'Mulher na Janela',
'compositor' => '(Airton Barbosa / Chico Buarque / João Cabral de Melo Neto)',
'dolp' => 'Do LP com a trilha sonora do filme “Morte e vida severina”, Marcus Pereira MPL 9367 (1977)<br/>
Com:<strong> José Dumont</strong>',
'letra' => '<p>Trabalho aqui nunca falta<br />
    A quem sabe trabalhar<br />
    O que fazia o compadre<br />
Na sua terra de l&aacute;?</p>
<p>Pois fui sempre lavrador<br />
    Lavrador de terra m&aacute;<br />
    N&atilde;o h&aacute; esp&eacute;cie de terra<br />
Que eu n&atilde;o possa cultivar</p>
<p>Isso aqui de nada adianta<br />
    Pouco existe o que lavrar<br />
    Mas diga-me, retirante<br />
Que mais fazia por l&aacute;?</p>
<p>Tamb&eacute;m l&aacute; na minha terra<br />
    De terra mesmo pouco h&aacute;<br />
    Mas at&eacute; a calva da pedra<br />
Sinto-me capaz de arar</p>
<p>Tamb&eacute;m de pouco adianta<br />
    Nem pedra h&aacute; aqui que amassar<br />
    Diga-me ainda, compadre<br />
Que mais fazia por l&aacute;?</p>
<p>Conhe&ccedil;o todas as ro&ccedil;as<br />
    Que nesta ch&atilde;o podem dar<br />
    O algod&atilde;o, a mamona<br />
A pita, o milho, o caro&aacute;</p>
<p>Esses ro&ccedil;ados o banco<br />
    J&aacute; n&atilde;o quer financiar<br />
    Mas diga-me, retirante<br />
Que mais fazia l&aacute;?</p>
<p>Em qualquer das cinco tachas<br />
    De um bangu&ecirc; sei cozinhar<br />
    Sei cuidar de uma moenda<br />
De uma casa de purgar</p>
<p>Com a vinda das usinas<br />
    H&aacute; poucos engenhos j&aacute;<br />
    Nada mais o retirante<br />
Aprendeu a fazer l&aacute;?</p>
<p>Ali ningu&eacute;m aprendeu<br />
    Outro of&iacute;cio ou aprender&aacute;<br />
    Mas o sol, de sol a sol<br />
Bem se aprende a suportar</p>
<p>Mas isso ent&atilde;o ser&aacute; tudo<br />
    Em que sabe trabalhar?<br />
    Vamos, diga, retirante<br />
Outras coisas saber&aacute;?</p>
<p>Deseja mesmo saber<br />
    O que &eacute; que eu fazia por l&aacute;?<br />
    Comer quando havia o qu&ecirc;<br />
E, havendo ou n&atilde;o, trabalhar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o e dire&ccedil;&atilde;o musical: Airton Barbosa<br />
    Viol&atilde;o: Geraldo Azevedo<br />
    Bateria: Normando Pinheiro<br />
    Zabumba: Lourival Lemes<br />
</p>',
'faixa_mp3' => '1977-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'1',
'faixa_titulo' => 'As Ciganas',
'compositor' => '(Airton Barbosa / João Cabral de Melo Neto)<br />',
'dolp' => 'Do LP com a trilha sonora do filme “Morte e vida severina”, Marcus Pereira MPL 9367 (1977)<br />
Com:<strong> Tânia Alves</strong>
',
'letra' => '<p>Aten&ccedil;&atilde;o pe&ccedil;o senhores<br />
    Para esta breve leitura<br />
    Somos ciganas do Egito<br />
Lemos a sorte futura</p>
<p>Vou dizer todas as coisas<br />
    Que desde j&aacute; posso ver<br />
    Na vida desse menino<br />
Acabado de nascer</p>
<p>Aprender&aacute; a caminhar<br />
    Na lama com guaiamuns<br />
    E a correr o ensinar&atilde;o<br />
    Os anf&iacute;bios caranguejos<br />
    Pelo que ser&aacute; anf&iacute;bio<br />
Como a gente daqui mesmo</p>
<p>Aten&ccedil;&atilde;o pe&ccedil;o senhores,<br />
    Tamb&eacute;m pra minha leitura<br />
    Tamb&eacute;m venho dos Egito<br />
Vou completar a figura</p>
<p>Outras coisas que estou vendo<br />
    &Eacute; necess&aacute;rio que eu diga<br />
    N&atilde;o pensem que a vida dele<br />
H&aacute; de ser sempre daninha</p>
<p>Cedo aprender&aacute; a ca&ccedil;ar<br />
    Primeiro com as galinhas<br />
    Que &eacute; catando pelo ch&atilde;o<br />
Tudo o que cheira a comida</p>
<p>E depois aprender&aacute;<br />
    Com outras esp&eacute;cies de bichos<br />
    Com os porcos nos monturos<br />
Com os cachorros no lixo</p>
<p>N&atilde;o ficar&aacute; a pescar<br />
    De Jerer&eacute; toda a vida<br />
    Minha amiga se esqueceu<br />
De dizer todas as linhas</p>
<p>Enxergo daqui a planura<br />
    Que &eacute; a vida do homem de of&iacute;cio<br />
    Bem mais sadia que os mangues<br />
Tenha embora precip&iacute;cios</p>
<p>Vejo-o uns anos mais tarde<br />
    Na ilha do Maruim<br />
    Vestido negro de lama<br />
Voltar de pescar siris</p>
<p>E vejo-o ainda maior,<br />
    Pelo imenso lamar&atilde;o<br />
    Fazendo dos dedos iscas<br />
Para pescar camar&atilde;o</p>
<p>N&atilde;o o vejo dentro dos mangues<br />
    Vejo-o dentro de uma f&aacute;brica<br />
    Se est&aacute; negro n&atilde;o &eacute; lama<br />
&Eacute; graxa de sua m&aacute;quina</p>
<p>Coisa mais limpa que a lama<br />
    Do pescador de mar&eacute;<br />
    Que vemos aqui vestido<br />
De lama da cara ao p&eacute;</p>
<p>E mais para que n&atilde;o pensem<br />
    Que em sua vida tudo &eacute; triste<br />
    Vejo coisas que o trabalho<br />
Talvez at&eacute; lhe conquiste</p>
<p>Que &eacute; mudar-se desses mangues<br />
    Daqui do Capibaribe<br />
    Para um mocambo melhor<br />
Nos mangues do Beberibe</p>
<p>Produ&ccedil;&atilde;o e dire&ccedil;&atilde;o musical: Airton Barbosa<br />
    Violas: Geraldo Azevedo e Ivson Wanderley<br />
</p>
',
'creditos' => '<p>Produção e direção musical: Airton Barbosa<br /> Violas: Geraldo Azevedo e Ivson Wanderley</p>
',
'faixa_mp3' => '1977-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'2',
'faixa_titulo' => 'O Meu Amor',
'compositor' => '(Chico Buarque)',
'dolp' => 'Do LP “Chico Buarque”, Philips 6349.398 (1978)<br/>
Com:<strong> Marieta Severo</strong>
',
'letra' => '<p>O Meu Amor<br />
    (Chico Buarque)<br />
    Do LP &ldquo;Chico Buarque&rdquo;, Philips 6349.398 (1978)<br />
Com Marieta Severo</p>
<p><em>Teresinha</em><br />
    O meu amor<br />
    Tem um jeito manso que &eacute; s&oacute; seu<br />
    E que me deixa louca<br />
    Quando me beija a boca<br />
    A minha pele toda fica arrepiada<br />
    E me beija com calma e fundo<br />
At&eacute; minh&#39;alma se sentir beijada, ai</p>
<p><em>L&uacute;cia</em><br />
    O meu amor<br />
    Tem um jeito manso que &eacute; s&oacute; seu<br />
    Que rouba os meus sentidos<br />
    Viola os meus ouvidos<br />
    Com tantos segredos lindos e indecentes<br />
    Depois brinca comigo<br />
    Ri do meu umbigo<br />
E me crava os dentes, ai</p>
<p><em>As duas</em><br />
    Eu sou sua menina, viu?<br />
    E ele &eacute; o meu rapaz<br />
    Meu corpo &eacute; testemunha<br />
Do bem que ele me faz</p>
<p><em>L&uacute;cia</em><br />
    Meu amor<br />
    Tem um jeito manso que &eacute; s&oacute; seu<br />
    De me deixar maluca<br />
    Quando me ro&ccedil;a a nuca<br />
    E quase me machuca com a barba malfeita<br />
    E de pousar as coxas entre as minhas coxas<br />
Quando ele se deita, ai</p>
<p><em>Teresinha</em><br />
    O meu amor<br />
    Tem um jeito manso que &eacute; s&oacute; seu<br />
    De me fazer rodeios<br />
    De me beijar os seios<br />
    Me beijar o ventre<br />
    E me deixar em brasa<br />
    Desfruta do meu corpo<br />
Como se o meu corpo fosse a sua casa, ai</p>
<p><em>A duas</em><br />
    Eu sou sua menina, viu?<br />
    E ele &eacute; o meu rapaz<br />
    Meu corpo &eacute; testemunha<br />
Do bem que ele me faz</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o e dire&ccedil;&atilde;o: Sergio de Carvalho<br />
    Arranjo, reg&ecirc;ncia e piano: Francis Hime<br />
    Viol&atilde;o: Arthur Verocai e Jorge Lima<br />
    Baixo: Luis&atilde;o<br />
    Bateria: Pedrinho<br />
    Percuss&atilde;o: Chiquinho, Djalma e Chacal<br />
    Trompete: Marcio<br />
    Trombone: Maciel<br />
    Clarinete: Marko e Jayme<br />
    Flauta: Copinha, Celso e Franklin<br />
    Cordas: Phonogram<br />
</p>
',
'faixa_mp3' => '1978-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'3',
'faixa_titulo' => 'Bicho de Sete Cabe&ccedil;as II',
'compositor' => '(Z&eacute; Ramalho / Geraldo Azevedo / Renato Rocha)',
'dolp' => 'Do LP Geraldo Azevedo &ldquo;Bicho de 7 cabe&ccedil;as&rdquo;, Epic/CBS 144.325 (1979)<br />
Com:<strong> Geraldo Azevedo</strong>',
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
    N&atilde;o tem ningu&eacute;m que mere&ccedil;a<br />
    N&atilde;o tem cora&ccedil;&atilde;o que esque&ccedil;a<br />
    N&atilde;o tem p&eacute;, n&atilde;o tem cabe&ccedil;a<br />
    N&atilde;o da p&eacute;, n&atilde;o &eacute; direito<br />
    N&atilde;o foi nada, eu n&atilde;o fiz nada disso<br />
    E voc&ecirc; fez um<br />
Bicho de sete cabe&ccedil;a</p>
',
'creditos' => '<p>Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Carlos Alberto Sion<br />
    Arranjo, viol&atilde;o, orquestra&ccedil;&atilde;o e reg&ecirc;ncia: Geraldo Azevedo<br />
    Viola de 10 cordas: Z&eacute; Ramalho<br />
    Violinos: Giancarlo Pareschi (spalla), Jos&eacute; Alves da Silva, Alfredo Vidal, Jo&atilde;o Daltro de<br />
    Almeida, Virg&iacute;lio Arraes Filho, Aizik Meilach Geller, Roberto Eduard Jean Arnaud, Carlos<br />
    Eduardo Hack, Luiz Carlos Campos Marques, Walter Hack, Jos&eacute; Dias de Lana e<br />
    Francisco Perrota<br />
    Violas: Frederick Stephany, Arlindo Figueiredo Penteado e Nelson de H. de Macedo<br />
    Cellos: Jorge Hundert Ranevsky, Ibere Gomes Grosso e Alceu de Almeida Reis<br />
</p>',
'faixa_mp3' => '1979-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'4',
'faixa_titulo' => 'O Meu Amor',
'compositor' => '(Chico Buarque)',
'dolp' => 'Do LP com a trilha sonora da pe&ccedil;a &ldquo;&Oacute;pera do Malandro&rdquo;, Philips 6349.401 (1979)<br />
Com:<strong> Marieta Severo</strong>',
'letra' => '<p><em>Teresinha</em><br />
    O meu amor<br />
    Tem um jeito manso que &eacute; s&oacute; seu<br />
    E que me deixa louca<br />
    Quando me beija a boca<br />
    A minha pele toda fica arrepiada<br />
    E me beija com calma e fundo<br />
At&eacute; minh&#39;alma se sentir beijada, ai</p>
<p><em>L&uacute;cia</em><br />
    O meu amor<br />
    Tem um jeito manso que &eacute; s&oacute; seu<br />
    Que rouba os meus sentidos<br />
    Viola os meus ouvidos<br />
    Com tantos segredos lindos e indecentes<br />
    Depois brinca comigo<br />
    Ri do meu umbigo<br />
E me crava os dentes, ai</p>
<p><em>As duas</em><br />
    Eu sou sua menina, viu?<br />
    Ele &eacute; o meu rapaz<br />
    Meu corpo &eacute; testemunha<br />
Do bem que ele me faz</p>
<p><em>L&uacute;cia</em><br />
    Meu amor<br />
    Tem um jeito manso que &eacute; s&oacute; seu<br />
    De me deixar maluca<br />
    Quando me ro&ccedil;a a nuca<br />
    E quase me machuca com a barba malfeita<br />
    E de pousar as coxas entre as minhas coxas<br />
Quando ele se deita, ai</p>
<p><em>Teresinha</em><br />
    O meu amor<br />
    Tem um jeito manso que &eacute; s&oacute; seu<br />
    De me fazer rodeios<br />
    De me beijar os seios<br />
    Me beijar o ventre<br />
    E me deixar em brasa<br />
    Desfruta do meu corpo<br />
Como se o meu corpo fosse a sua casa, ai</p>
<p><em>A duas</em><br />
    Eu sou sua menina, viu?<br />
    Ele &eacute; o meu rapaz<br />
    Meu corpo &eacute; testemunha<br />
Do bem que ele me faz</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o e dire&ccedil;&atilde;o: Sergio de Carvalho<br />
    Arranjo, reg&ecirc;ncia e piano: Francis Hime<br />
    Viol&atilde;o: Geraldinho<br />
    Baixo: Novelli<br />
    Bateria: Elber Bedaque<br />
    Percuss&atilde;o: Chiquinho, Djalma e Chacal<br />
    Trompete: Marcio<br />
    Trombone: Maciel, Jo&atilde;o Luiz, Manoel e Macaxeira<br />
    Clarinete: Netinho e Botelho<br />
    Flauta: Celso, Jorginho e Franklin<br />
    Violinos: Pareschi (spalla), Jos&eacute; Alves, Vetere, Guetta, Bailon, Carlos Hack, Daltro,<br />
    Faini, Lana, Marques, Bordinh&atilde;o, Pompeu, Nath&eacute;rcia, Arnaud, Walter Hack e Arraes<br />
    Violas: Penteado, Stephany, Pereira e Flinkas<br />
    Cellos: Alceu, Ana Bezerra, Bariola e Ranevsky<br />
    Contrabaixos: Edson Lobo e Sandrino Santoro<br />
</p>',
'faixa_mp3' => '1979-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'5',
'faixa_titulo' => 'Feras Deveras',
'compositor' => '(Robertinho de Recife / Jorge Mautner)',
'dolp' => 'Do LP Robertinho de Recife &ldquo;E agora pra voc&ecirc;s... suingues tropicais&rdquo;, CBS 138.159 (1979)<br />
Com:<strong> Robertinho de Recife</strong>
',
'letra' => '<p>Deveras, deveras<br />
    As mulheres s&atilde;o feras, feras<br />
    Ou ent&atilde;o s&atilde;o quimeras<br />
Sonhos risonhos, primaveras</p>
<p>Que os homens de todas as eras<br />
    De todas eras<br />
    Paqueram nas paqueras<br />
Rutes, Madalenas ou Veras</p>
<p>E sem saber que s&atilde;o perigosas<br />
    Que d&atilde;o rosas, mas s&atilde;o panteras<br />
    Estas feras maravilhosas<br />
Estas feras de todas as esferas</p>
<p>Patr&iacute;cias, Augustas ou Anas<br />
    S&atilde;o todas t&atilde;o bacanas sacanas<br />
Rutes, Madalenas ou Veras</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Robertinho de Recife e Ivair Vila Real<br />
    Dire&ccedil;&atilde;o musical: Tulio Mour&atilde;o e Robertinho de Recife<br />
    Arranjo e guitarra: Robertinho de Recife<br />
    Baixo: Valdecir Nei<br />
    Bateria: Picol&eacute;<br />
</p>',
'faixa_mp3' => '1979-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'6',
'faixa_titulo' => 'Olha o Trem',
'compositor' => '(Carlos Fernando)',
'dolp' => 'Do LP &ldquo;Asas da Am&eacute;rica &ndash; Frevo&rdquo;, Epic/CBS 235.035 (1979)
',
'letra' => '<p>Aprendi a dan&ccedil;ar, a cantar, namorar<br />
    Salve eles<br />
    Os clarins, as zabumbas, guitarras<br />
    Maracas, ganz&aacute;s<br />
Todos eles</p>
<p>Espalhados ou n&atilde;o<br />
    Misturados no ch&atilde;o nasce um raio<br />
    Olha o trem<br />
    &Eacute; o passo, &eacute; o pau<br />
    &Eacute; o rock, &eacute; o samba<br />
Fole, xaxado</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Carlos Fernando<br />
    Arranjo de base e viol&atilde;o: Geraldo Azevedo<br />
    Guitarra: Joca<br />
    Cavaquinho: Neco<br />
    Baixo: Guil<br />
    Sanfona: Z&eacute; Am&eacute;rico Bastos<br />
    Bateria: Elber Bedaque<br />
    Pandeiro: Jackson do Pandeiro<br />
    Surdo: Ney<br />
    Arranjo de metais, reg&ecirc;ncia, sax tenor e clarinete: Juarez Ara&uacute;jo<br />
    Sax bar&iacute;tono: Odilon Pinto<br />
    Sax alto: Em&iacute;lio Batista<br />
    Trompete: Formiga<br />
    Trombone: Roberto Marques<br />
Riquinta: Mazinho</p>
',
'faixa_mp3' => '1979-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'6',
'faixa_titulo' => 'A Mulher do Dia',
'compositor' => '(Carlos Fernando)',
'dolp' => 'Do LP &ldquo;Asas da Am&eacute;rica &ndash; Frevo&rdquo;, Epic/CBS 235.035 (1979)
',
'letra' => '<p>Os clarins tocaram chamando aten&ccedil;&atilde;o<br />
    Com cara de sono, vestido de Nero<br />
    Corri pra varanda<br />
Salve a multid&atilde;o</p>
<p>Os clarins tocaram chamando aten&ccedil;&atilde;o<br />
    Olha eu com cara de sono, vestido de Nero<br />
    Corri pra varanda<br />
    Salve a multid&atilde;o<br />
Que vem e que passa cantando</p>
<p>Acorda pretinho, vem ver tua tia<br />
    A deusa do povo, a Mulher do Dia<br />
    Requebra pintada<br />
    De rouge, de talco e batom<br />
    &Eacute; pena que seja de papel crepom<br />
    Requebra pintada<br />
    De rouge, de talco e batom<br />
&Eacute; pena que seja de papel crepom</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Carlos Fernando<br />
    Arranjo de base e viol&atilde;o: Geraldo Azevedo<br />
    Guitarra: Joca<br />
    Cavaquinho: Neco<br />
    Baixo: Guil<br />
    Sanfona: Z&eacute; Am&eacute;rico Bastos<br />
    Bateria: Elber Bedaque<br />
    Pandeiro: Jackson do Pandeiro<br />
    Surdo: Ney<br />
    Arranjo de metais, reg&ecirc;ncia, sax tenor e clarinete: Juarez Ara&uacute;jo<br />
    Sax bar&iacute;tono: Odilon Pinto<br />
    Sax alto: Em&iacute;lio Batista<br />
    Trompete: Formiga<br />
    Trombone: Roberto Marques<br />
    Riquinta: Mazinho<br />
</p>',
'faixa_mp3' => '1979-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'7',
'faixa_titulo' => 'Anjo Avesso',
'compositor' => '(Carlos Fernando)',
'dolp' => 'Do LP &ldquo;Asas da Am&eacute;rica &ndash; Frevo&rdquo;, Epic/CBS 144.425 (1980)
',
'letra' => '<p>Safada era a cara do anjo<br />
    Que no quarto noturno pintou<br />
    No meu ouvido falou loucuras de amor<br />
    Pegou minha m&atilde;o e sa&iacute;mos na troca de passos<br />
    Num beijo molhado, escandalizado<br />
    Que at&eacute; minha gata se escandalizou<br />
Com penacho de &iacute;ndio ele me coroou</p>
<p>Sou anjo avesso, sou Tup&atilde; presente<br />
    Guerreiro sempre, galhos da semente<br />
    Do algod&atilde;o, do Pau-Brasil<br />
    Da serpentina que coloriu<br />
    Os olhos dos cegos, a voz do an&atilde;o<br />
    A vida e o meu cora&ccedil;&atilde;o de le&atilde;o<br />
    Os olhos dos cegos, a voz do an&atilde;o<br />
A vida e o meu cora&ccedil;&atilde;o de le&atilde;o</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Carlos Fernando<br />
    Arranjos de base, metais e reg&ecirc;ncia: Juarez Ara&uacute;jo<br />
    Dire&ccedil;&atilde;o musical e viol&atilde;o: Geraldo Azevedo<br />
    Bateria: Elber Bedaque<br />
    Baixo: Guil<br />
    Surdo: Marcos Amma<br />
    Pandeiro: Z&eacute; Gomes<br />
    Guitarra: Joca<br />
    Trompetes: Barreto, Hamilton, Darcy e Heraldo<br />
    Trombones: Manoel, Onofre e Silvio<br />
    Sax alto: Jayme, Marcos e Em&iacute;lio<br />
    Sax tenor: Luiz Bezerra e Z&eacute; Bodega<br />
    Sax bar&iacute;tono: Aurino e Geraldo<br />
</p>',
'faixa_mp3' => '1980-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'10',
'faixa_titulo' => 'Na Terra, no C&eacute;u ou no Mar',
'compositor' => '(Toquinho / Mutinho / Luiz Alves)',
'dolp' => 'Do LP Toquinho &ldquo;Doce vida&rdquo;, Ariola 201.621 (1981)<br />
Com:<strong> Toquinho</strong>
',
'letra' => '<p>Logo que o sol se esconder<br />
    Ou antes da tarde chegar<br />
    No encanto de um amanhecer<br />
Em noite de breu ou luar</p>
<p>L&aacute; onde voc&ecirc; quiser<br />
    Tudo que voc&ecirc; mandar<br />
    Do jeito que voc&ecirc; disser<br />
Na terra, no c&eacute;u ou no mar</p>
<p>Na terra, no c&eacute;u ou no mar<br />
O in&iacute;cio &eacute; o caminho do fim</p>
<p>Eu quero me desgovernar<br />
    Deixando teu corpo guardar<br />
Minha do&ccedil;ura, carmim</p>
<p>Eu quero me desnortear<br />
    Fazendo o teu ventre velar<br />
A pequena morte de mim</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Fernando Faro<br />
    Viol&atilde;o: Toquinho<br />
    <em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em><br />
</p>',
'faixa_mp3' => '1981-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'11',
'faixa_titulo' => 'Bate Cora&ccedil;&atilde;o (Ao vivo)',
'compositor' => '(Cec&eacute;u)',
'dolp' => 'Do LP Elba, Moraes Moreira e Toquinho &ldquo;Brasil Night Montreux&rdquo;, Ariola 201.627 (1981)
',
'letra' => '<p>Bate, bate, bate cora&ccedil;&atilde;o<br />
    Dentro desse velho peito<br />
    Voc&ecirc; j&aacute; t&aacute; acostumado<br />
A ser maltratado, a n&atilde;o ter direitos</p>
<p>Bate, bate, bate cora&ccedil;&atilde;o<br />
    N&atilde;o ligue, deixe quem quiser falar<br />
    Porque o que se leva dessa vida, cora&ccedil;&atilde;o<br />
    &Eacute; o amor que a gente tem pra dar<br />
    Porque o que se leva dessa vida, cora&ccedil;&atilde;o<br />
&Eacute; o amor que a gente tem pra dar</p>
<p>Oi, tum, tum, bate cora&ccedil;&atilde;o<br />
    Oi, tum, cora&ccedil;&atilde;o pode bater<br />
    Oi, tum, tum, tum, bate cora&ccedil;&atilde;o<br />
Que eu morro de amor com muito prazer</p>
<p>As &aacute;guas des&aacute;guam para o mar<br />
    Meus olhos vivem cheios d&#39;&aacute;gua<br />
    Chorando, molhando meu rosto<br />
    De tanto desgosto, me causando m&aacute;goas<br />
    Mas meu cora&ccedil;&atilde;o s&oacute; tem amor, amor!<br />
    Diveras mesmo, pra valer, &ecirc;<br />
    Por isso a gente pena, sofre e chora cora&ccedil;&atilde;o<br />
    E morre todo dia sem saber<br />
    Por isso a gente pena, sofre e chora cora&ccedil;&atilde;o<br />
E morre todo dia sem saber</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Mazzola<br />
    Acordeom: Z&eacute; Am&eacute;rico Bastos<br />
    Baixo: Guil<br />
    Gitarra: Joca<br />
    Bateria: Elber Bedaque<br />
    Percuss&atilde;o: Marcos Amma<br />
</p>',
'faixa_mp3' => '1981-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'11',
'faixa_titulo' => 'Bai&atilde;o (Ao vivo)',
'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
'dolp' => 'Do LP Elba, Moraes Moreira e Toquinho &ldquo;Brasil Night Montreux&rdquo;, Ariola 201.627 (1981)
',
'letra' => '<p>Eu vou mostrar pra voc&ecirc;s<br />
    Como se dan&ccedil;a o bai&atilde;o<br />
    E quem quiser aprender<br />
&Eacute; favor prestar aten&ccedil;&atilde;o</p>
<p>Morena chega pra c&aacute;<br />
    Bem junto ao meu cora&ccedil;&atilde;o<br />
    Agora &eacute; s&oacute; me seguir<br />
Pois eu vou dan&ccedil;ar o bai&atilde;o</p>
<p>Eu j&aacute; dancei balanc&ecirc;<br />
    Xamego, samba e xer&eacute;m<br />
    Mas o bai&atilde;o tem um qu&ecirc;<br />
    Que as outras dan&ccedil;as n&atilde;o t&ecirc;m<br />
    Por isso eu quero afirmar<br />
    Com toda convic&ccedil;&atilde;o<br />
Que sou doido pelo bai&atilde;o</p>
<p>Eu j&aacute; dance no Par&aacute;<br />
    Toquei sanfona em Bel&eacute;m<br />
    Cantei l&aacute; no Cear&aacute;<br />
    E sei o que me conv&eacute;m<br />
    Por isso eu quero afirmar<br />
    Com toda convic&ccedil;&atilde;o<br />
Que sou doido pelo bai&atilde;o</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Mazzola<br />
    Acordeom: Z&eacute; Am&eacute;rico Bastos<br />
    Baixo: Guil<br />
    Gitarra: Joca<br />
    Bateria: Elber Bedaque<br />
    Percuss&atilde;o: Marcos Amma<br />
</p>',
'faixa_mp3' => '1981-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'11',
'faixa_titulo' => 'Todo Azul (Ao Vivo)',
'compositor' => '(Tadeu Mathias)',
'dolp' => 'Do LP Elba, Moraes Moreira e Toquinho &ldquo;Brasil Night Montreux&rdquo;, Ariola 201.627 (1981)
',
'letra' => '<p>Foi azul, mas passou<br />
    E foi bom como tu, acabou<br />
    E foi da cor do c&eacute;u<br />
    Foi n&ecirc;go, foi lundu<br />
    N&atilde;o &eacute; maracutu<br />
Foi amor</p>
<p>Foram negros, bastou<br />
    N&atilde;o o preto lundu, meu amor<br />
    Foram tenebrosos anos<br />
    Tantos cala, cala, cala<br />
    Senhora e senhor<br />
    N&atilde;o me deixou saber<br />
N&atilde;o falou</p>
<p>Uma gota no fundo do mar<br />
    Lucidez em pleno carnaval<br />
    Eu te vi em meio &agrave; multid&atilde;o<br />
    Foi real, foi real<br />
    Era tu meu amor<br />
    Mas passou<br />
    Foi azul, todo azul<br />
E foi bom</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Mazzola<br />
    Teclados: Z&eacute; Am&eacute;rico Bastos<br />
    Guitarra: Joca<br />
    Percuss&atilde;o: Marcos Amma<br />
</p>',
'faixa_mp3' => '1981-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'12',
'faixa_titulo' => 'O Peru',
'compositor' => '(Paulo Soledade / Toquinho / Vin&iacute;cius de Moraes)',
'dolp' => 'Do LP &ldquo;Arca de No&eacute; 2&rdquo;, Ariola 201.631 (1981)
',
'letra' => '<p>Glu, glu, glu<br />
    Abram alas pro peru<br />
    Glu, glu, glu<br />
Abram alas pro peru</p>
<p>O peru foi a passeio<br />
    Pensando que era pav&atilde;o<br />
    Tico-tico riu-se tanto<br />
Que morreu de congest&atilde;o</p>
<p>O peru dan&ccedil;a de roda<br />
    Numa roda de carv&atilde;o<br />
    Quando acaba fica tonto<br />
    De quase cair no ch&atilde;o<br />
    Quando acaba fica tonto<br />
De quase cair no ch&atilde;o</p>
<p>O peru se viu um dia<br />
    Nas &aacute;guas do ribeir&atilde;o<br />
    Foi se olhando, foi dizendo<br />
Que beleza de pav&atilde;o</p>
<p>Foi dormir e teve um sonho<br />
    Logo que o sol se escondeu<br />
    Que sua cauda tinha cores<br />
    Como a desse amigo seu<br />
    Que sua cauda tinha cores<br />
Como a desse amigo seu</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Fernando Faro<br />
    Arranjo e reg&ecirc;ncia: Rog&eacute;rio Duprat<br />
    Piano: Agostinho Silva<br />
    Baixo: Claudio Bertrami<br />
    Piccollo: Carrasqueira<br />
    Flauta: Bol&atilde;o<br />
    Viol&atilde;o: Toquinho<br />
    Viola: Z&eacute; Menezes<br />
    Percuss&atilde;o: Chacal e Mar&ccedil;al<br />
    Vocais: Fabiola, Luna, Regininha e Lucinha Lins<br />
</p>',
'faixa_mp3' => '1981-7.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'13',
'faixa_titulo' => 'A Cidade dos Artistas',
'compositor' => '(L. Enriquez Bacalov / Sergio Bardotti / Chico Buarque)',
'dolp' => 'Do LP com a trilha sonora do filme &ldquo;Os Saltimbancos Trapalh&otilde;es&rdquo;, Ariola 201.634 (1981)<br />
Com:<strong> Os Trapalh&otilde;es</strong>
',
'letra' => '<p>Na cidade<br />
    Ser artista<br />
    &Eacute; posar sorridente<br />
    &Eacute; ver se de repente<br />
Sai numa revista</p>
<p>&Eacute; esperar que o orelh&atilde;o<br />
    Complete a liga&ccedil;&atilde;o<br />
    Confirmando a excurs&atilde;o<br />
    Que te leva ao Jap&atilde;o<br />
Com o teu pianista</p>
<p>E antes que o sol desponte<br />
    Contemplando o horizonte<br />
    Conceder entrevistas<br />
    Aos outros artistas<br />
Debaixo da ponte</p>
<p>Na cidade<br />
    Ser artista<br />
    &Eacute; subir na cadeira<br />
    Engolindo peixeira<br />
Empolgar o turista</p>
<p>&Eacute; beber formicida<br />
    &Eacute; cuspir labareda<br />
    E olha a pra&ccedil;a lotando<br />
    O chap&eacute;u estufando<br />
De tanta moeda</p>
<p>&Eacute; cair de joelhos<br />
    &Eacute; dar gra&ccedil;as aos c&eacute;us<br />
    L&aacute; se foi o turista<br />
    O dinheiro, a peixeira<br />
A cadeira e o chap&eacute;u</p>
<p>Ser artista<br />
    Na cidade<br />
    &Eacute; comer um fiapo<br />
    &Eacute; vestir um farrapo<br />
&Eacute; ficar &agrave; vontade</p>
<p>&Eacute; vagar pela noite<br />
    &Eacute; ser um vaga-lume<br />
    &Eacute; catar uma guimba<br />
    &Eacute; tomar uma pinga<br />
&Eacute; pintar um tapume</p>
<p>&Eacute; n&atilde;o ser quase nada<br />
    &Eacute; n&atilde;o ter documentos<br />
    T&eacute; que o rapa te pega<br />
    Te dobra, te amassa<br />
E te joga l&aacute; dentro</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o e realiza&ccedil;&atilde;o: Mazzola<br />
    Arranjo: Luis Enriquez Bacalov<br />
    <em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em><br />
</p>',
'faixa_mp3' => '1981-8.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'14',
'faixa_titulo' => 'S&eacute;culo XXI',
'compositor' => '(Carlos Fernando)',
'dolp' => 'Do LP &ldquo;Asas da Am&eacute;rica &ndash; Tempo Foli&atilde;o 82&rdquo;, Ariola 201.639 (1981)
',
'letra' => '<p>Al&ocirc;, al&ocirc;, passageiros do s&eacute;culo vinte<br />
    Al&ocirc;, al&ocirc;, foli&otilde;es do s&eacute;culo vinte e um<br />
    Segura esse frevo<br />
    No p&eacute;, na garganta<br />
    No espa&ccedil;o que resta<br />
De toda essa onda que vem</p>
<p>No passo, no trunfo de l&aacute;<br />
    No passo, no <em>time</em> de c&aacute;<br />
    No passo, no trunfo de l&aacute;<br />
No passo, no <em>time</em> de c&aacute;</p>
<p>Baby, baby<br />
    Baby I love you<br />
    Baby, baby<br />
Baby I love you</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Carlos Fernando<br />
    Dire&ccedil;&atilde;o musical: Novelli e Paulo Rafael<br />
    Arranjo e clavinete: Z&eacute; Am&eacute;rico Bastos<br />
    Bateria: Elber Bedaque<br />
    Baixo: Guil<br />
    Surdo e percuss&atilde;o: Firmino<br />
    Guitarra base: Paulo Rafael<br />
    Guitarra solo: Zeppa Souza<br />
    Oberheim: Z&eacute; Roberto<br />
    Sax alto: Netinho<br />
    Sax tenor: Maca&eacute;<br />
    Sax bar&iacute;tono: Aurino<br />
    Trombones: Maciel e Norato<br />
    Piston: Formiga e Amilton<br />
    Vocais: Regininha, Luna, Fab&iacute;ola, Viviane, Solange, Suzana e Nair<br />
</p>',
'faixa_mp3' => '1981-9.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'8',
'faixa_titulo' => 'Cavalos do C&atilde;o',
'compositor' => '(Z&eacute; Ramalho)',
'dolp' => 'Do LP Z&eacute; Ramalho &ldquo;A terceira l&acirc;mina&rdquo;, Epic/CBS 235.049 (1981)<br />
Com:<strong> Z&eacute; Ramalho</strong>
',
'letra' => '<p>Corriam os anos trinta<br />
    No nordeste brasileiro<br />
    Algumas sociedades lutavam pelo dinheiro<br />
    Que vendiam pelas terras<br />
    Coron&eacute;is em p&eacute;s-de-guerra<br />
Beatos e cangaceiros</p>
<p>E correr da volante<br />
    No meio da noite<br />
    No meio da caatinga<br />
Que quer me pegar</p>
<p>Na mem&oacute;ria da vingan&ccedil;a<br />
    Um desejo de menino<br />
    Um cavaleiro do diabo<br />
    Corre atr&aacute;s de seu destino<br />
    Condenado em sua terra<br />
    Coron&eacute;is em p&eacute;s-de-guerra<br />
Beatos e cangaceiros</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Z&eacute; Ramalho e Mauro Motta<br />
    Viol&atilde;o Ovation e Ovation 12 cordas: Z&eacute; Ramalho<br />
    Viol&atilde;o: Vital Farias<br />
    Baixo: Chico Julien<br />
    Piano: Fernando Moura<br />
    Flauta: Waldemar Falc&atilde;o<br />
    Bateria: Rui Motta<br />
    Tri&acirc;ngulo: Ubiratan Silva<br />
    Pandeiro: Z&eacute; Gomes<br />
    Zabumba: Coronel<br />
    Sanfona: Severo<br />
</p>',
'faixa_mp3' => '1981-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'9',
'faixa_titulo' => 'M&uacute;sica das Nuvens e do Ch&atilde;o',
'compositor' => '(Hermeto Pascoal)',
'dolp' => 'Do LP Glorinha Gadelha &ldquo;Bendito o fruto&rdquo;, Copacabana COLP 12.615 (1981)<br />
Com:<strong> Glorinha Gadelha e Hermeto Pascoal</strong>',
'letra' => '<p>Errei o olhar meu que lhe quis<br />
    Errei o vasto sorriso que sorri<br />
    Errei a hora em que cheguei trazendo a f&eacute;<br />
    Que se acendeu por tr&aacute;s dos olhos<br />
Que nem mesmo o fogo viu</p>
<p>Errei a vida, o cio, errei o corte<br />
    Errei a dor que foi mais forte<br />
    Que todo o orgasmo que bebi<br />
Errei o grito que saiu</p>
<p>Errei a paix&atilde;o que o amor n&atilde;o quis<br />
    Errei a cama na grama do jardim<br />
    Errei a hora em que escrevi meu sonho a giz<br />
    E ri das l&aacute;grimas dos olhos<br />
Que lavaram o que sofri</p>
<p>Errei a vida<br />
    Errei o cio, o veio forte<br />
    Rompeu na hora em que o desejo<br />
    Sobre o meu corpo se fundiu<br />
Errei o grito que partiu</p>
<p>Amei o olhar meu que lhe quis<br />
    Amei o vasto sorriso que sorri<br />
    Amei a hora em que cheguei trazendo a f&eacute;<br />
    Que se acendeu por tr&aacute;s dos olhos<br />
Que nem mesmo o fogo viu</p>
<p>Amei a vida, o cio, amei o corte<br />
    Amei a dor que foi mais forte<br />
    Que todo orgasmo que bebi<br />
Amei o grito que saiu</p>
<p>Amei a paix&atilde;o que o amor n&atilde;o quis<br />
    Amei a cama na grama do jardim<br />
    Amei a hora em que escrevi meu sonho a giz<br />
    E ri das l&aacute;grimas dos olhos<br />
Que lavaram o que sofri</p>
<p>Amei a vida, o cio, o veio forte<br />
    Rompeu na hora em que o desejo<br />
    Sobre o meu corpo se fundiu<br />
Amei o grito que partiu</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Antonio Carlos de Oliveira<br />
    Arranjo: Sivuca e Hermeto Pascoal<br />
    <em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em>
</p>',
'faixa_mp3' => '1981-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'15',
'faixa_titulo' => 'Farinhada',
'compositor' => '(Zé Dantas)',
'dolp' => 'Do LP Luiz Gonzaga “Eterno cantador”RCA/Victor 103.0525 (1982)<br/>
Com:<strong> Luiz Gonzaga</strong>
',
'letra' => '<p>Tava na peneira<br />
    Eu tava peneirando<br />
    Eu tava no namoro<br />
Eu tava namorando</p>
<p>Na farinhada l&aacute; na serra do Teixeira<br />
    Namorei uma cab&ocirc;ca<br />
    Nunca vi t&atilde;o feiticeira<br />
    A mininada descascava macaxeira<br />
    Z&eacute; Migu&eacute; no caititu<br />
E eu e ela na peneira</p>
<p>O vento dava, sacudia a cabeleira<br />
    Levantava a saia dela<br />
    No balan&ccedil;o da peneira<br />
    Fechei os &oacute;io e o vento foi soprando<br />
    Quando deu um ridimunho<br />
Sem querer tava espiando</p>
<p>De madrugada n&oacute;s fiquemo ali sozinho<br />
    O pai dela soube disso<br />
    Deu de perna no caminho<br />
    Chegando l&aacute; at&eacute; riu da brincadeira<br />
    N&oacute;s estava namorando<br />
    Eu e ela na peneira<br />
</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Luiz Bandeira<br />
    Arranjo e reg&ecirc;ncia: Orlando Silveira<br />
    <em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em><br />
</p>',
'faixa_mp3' => '1982-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'18',
'faixa_titulo' => 'A Violeira',
'compositor' => '(Tom Jobim / Chico Buarque)',
'dolp' => 'Do LP com a trilha sonora do filme &ldquo;Para viver um grande amor&rdquo;, CBS 138.259 (1983)
',
'letra' => '<p>Desde menina<br />
    Caprichosa e nordestina<br />
    Que eu sabia<br />
    A minha sina era no Rio vir morar<br />
    Em Araripe topei com o chofer dum jipe<br />
    Que descia pra Sergipe<br />
Pro servi&ccedil;o militar</p>
<p>Esse maluco me largou em Pernambuco<br />
    Quando um cara de trabuco<br />
    Me pediu pra namorar<br />
    Mais adiante<br />
    Num estado interessante<br />
Um caixeiro viajante me levou pra Macap&aacute;</p>
<p>Uma cigana revelou que a minha sorte<br />
    Era ficar naquele Norte<br />
    E eu n&atilde;o queria acreditar<br />
    Juntei os trapos com um velho marinheiro<br />
    Viajei no seu cargueiro<br />
Que encalhou no Cear&aacute;</p>
<p>Voltei pro Crato e fui fazer artesanato<br />
    De barro bom e barato<br />
    Pra m&oacute; de economizar<br />
    Eu era um broto e tamb&eacute;m fiz muito garoto<br />
    Um mais bem feito que o outro<br />
Eles s&oacute; faltam falar</p>
<p>Juntei a prole e me atirei no S&atilde;o Francisco<br />
    Enfrentei raio, corisco<br />
    Correnteza e coisa m&aacute;<br />
    Inda arrumei com um artista em Pirapora<br />
    Mais um filho e vim-me embora<br />
C&aacute; no Rio vim parar</p>
<p>Ver Ipanema foi que nem beber jurema<br />
    Que cen&aacute;rio de cinema<br />
    Que poema &agrave; beira-mar<br />
    E n&atilde;o tem tira, nem doutor, nem ziguizira<br />
    Quero ver quem &eacute; que tira<br />
    N&oacute;s aqui desse lugar<br />
    E n&atilde;o tem tira, nem doutor, nem ziguizira<br />
    Quero ver quem &eacute; que tira<br />
N&oacute;s aqui desse lugar</p>
<p>Ser&aacute; verdade que eu cheguei nessa cidade<br />
    Pra primeira autoridade<br />
    Resolver me escorra&ccedil;ar<br />
    Com a tralha inteira remontar a Mantiqueira<br />
    At&eacute; chegar na corredeira<br />
O S&atilde;o Francisco me levar</p>
<p>Me distrair nos bra&ccedil;os de um barqueiro sonso<br />
    Despencar na Paulo Afonso<br />
    No oceano me afogar<br />
    Perder os filhos em Fernando de Noronha<br />
    E voltar morta de vergonha<br />
Pro sert&atilde;o de Quixad&aacute;</p>
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
N&oacute;s aqui desse lugar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Homero Ferreira<br />
    Dire&ccedil;&atilde;o musical: Tom Jobim<br />
    Arranjo e reg&ecirc;ncia: Eduardo Souto Neto<br />
    Viola: Z&eacute; Menezes<br />
    Acordeom: Chiquinho<br />
    Baixo el&eacute;trico: Novelli<br />
    Rabeca: Z&eacute; Gomes<br />
    Zabumba: C&iacute;cero<br />
    Tri&acirc;ngulo: Tinda<br />
    Clave: Sidinho<br />
    Coro de crian&ccedil;as: Lel&ecirc;, Luiza, Mariana, Silvinha, Bernardo e Cristiano<br />
    Arregimenta&ccedil;&atilde;o (coro): Cristina<br />
</p>',
'faixa_mp3' => '1983-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'16',
'faixa_titulo' => 'Lamento Africano',
'compositor' => '(D.P. / folclore africano)',
'dolp' => 'Do LP S&eacute;rgio Bor&eacute; &ldquo;Tambores urbanos... m&atilde;os amigas&rdquo;, Barcarola/Polygram LPB 027 (1983)',
'letra' => '<p>Kioso unguando fu&aacute;<br />
    Nanhanga di l&ecirc;<br />
    Kioso unguando fu&aacute;<br />
Nanhanga di l&ecirc;</p>
<p>Mama, mama &ecirc;<br />
    Mama, mama &ecirc;<br />
    Mama, mama &ecirc;<br />
Mama, mama &ecirc;</p>
<p>Tataku matadi<br />
    Mamaku muginh&ecirc;<br />
    Tataku matadi<br />
Mamaku muginh&ecirc;</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o geral e produ&ccedil;&atilde;o: S&eacute;rgio Bor&eacute;<br />
    Adapta&ccedil;&atilde;o e arranjos: S&eacute;rgio Bor&eacute; e Charles<br />
    Congas e caneco: Chacal<br />
    Bateria, ron ton ton, cow bell e caxixis: Charles Chalegre<br />
    Congas, bong&ocirc;s, teponaxtle, syndrum, apitos e xeker&ecirc;: S&eacute;rgio Bor&eacute;<br />
    Vocais: Zeppa Souza, Z&eacute; Am&eacute;rico Bastos, Antonio Sant&rsquo;Anna, Jaburu e S&eacute;rgio Bor&eacute;<br />
    Arranjo vocal: Todos do coro<br />
</p>',
'faixa_mp3' => '1983-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'17',
'faixa_titulo' => 'Maluca por Sivuca',
'compositor' => '(Walter Queiroz)',
'dolp' => 'Do LP Walter Queiroz &ldquo;Seguindo o mantra&rdquo;, Opus Columbia/CBS 412.040 (1983)<br />
Com:<strong> Walter Queiroz</strong>',
'letra' => '<p>&Oacute; Para&iacute;ba, meu amor<br />
    Eu vim te ver<br />
    Trazendo um cheiro da Bahia<br />
Eu vim te ver</p>
<p>Itapu&atilde; manda um abra&ccedil;o em Mana&iacute;ra<br />
    Cabo Branco, Cabedelo<br />
    Jacum&atilde; e Tamba&uacute;<br />
    E pede um beijo<br />
    Um cord&atilde;o de caranguejo<br />
    Uma rede pregui&ccedil;osa<br />
E um doce de caju</p>
<p>Se lembra o dia que voc&ecirc; ficou maluca<br />
    Ouvindo um disco de Sivuca<br />
    E danou-se pra chorar<br />
    Eu prometi que nunca mais eu te esquecia<br />
    Que eu voltava, que eu fazia<br />
Um cafun&eacute; pra te agradar</p>',
'creditos' => '<p>Produzido por Walter Queir&oacute;z, Jo&atilde;o Donato e F&aacute;tima Flor<br />
    Dire&ccedil;&atilde;o musical e piano: Jo&atilde;o Donato<br />
    Guitarra: Chiquito Braga<br />
    Contrabaixo: Levy<br />
    Bateria: Rubinho<br />
    Cocos, agog&ocirc; e tri&acirc;ngulo: Augusto Arid<br />
</p>',
'faixa_mp3' => '1983-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'19',
'faixa_titulo' => 'Est&oacute;ria da Coca',
'compositor' => '(folclore / recolhido por Ester Pedreira de Cerqueira)',
'dolp' => 'Do LP &ldquo;Brincadeiras de roda, est&oacute;rias e can&ccedil;&otilde;es de ninar&rdquo;, Est&uacute;dio Eldorado 73.83.0415 (1983)<br />
Com:<strong> Coro Infantil</strong>
',
'letra' => '<p><em>Historinha infantil narrada por Elba</em></p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Alu&iacute;zio Falc&atilde;o<br />
    Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o, arranjo, reg&ecirc;ncia e viol&atilde;o: Ant&ocirc;nio Madureira<br />
    Viola: Heraldo do Monte<br />
    Bandolim: Ant&ocirc;nio Carlos N&oacute;brega<br />
    Coro infantil: M&aacute;rica Montilha, Renata Leopoldo, Roberta Leopoldo, Vivian Pozzetti,<br />
    Daniela Mozer, Renata Vacchini e Carla Angelucci<br />
    Reg&ecirc;ncia do coro infantil: D&eacute;cio Cascapera<br />
</p>
',
'faixa_mp3' => '1983-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'19',
'faixa_titulo' => 'Aninha e o Pr&iacute;ncipe',
'compositor' => '(folclore / recolhido por Ester Pedreira de Cerqueira)',
'dolp' => 'Do LP &ldquo;Brincadeiras de roda, est&oacute;rias e can&ccedil;&otilde;es de ninar&rdquo;, Est&uacute;dio Eldorado 73.83.0415 (1983)<br />
Com:<strong> Solange Maria e Ant&ocirc;nio N&oacute;brega</strong>
',
'letra' => '<p><em>Historinha infantil narrada por Elba</em></p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Alu&iacute;zio Falc&atilde;o<br />
    Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o, arranjo, reg&ecirc;ncia e viol&atilde;o: Ant&ocirc;nio Madureira<br />
    Viola: Heraldo do Monte<br />
</p>',
'faixa_mp3' => '1983-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'19',
'faixa_titulo' => 'Est&oacute;ria da Figueira',
'compositor' => '(folclore / recolhido por Ester Pedreira de Cerqueira)',
'dolp' => 'Do LP &ldquo;Brincadeiras de roda, est&oacute;rias e can&ccedil;&otilde;es de ninar&rdquo;, Est&uacute;dio Eldorado 73.83.0415 (1983)<br />
Com:<strong> Solange Maria</strong>',
'letra' => '<p><em>Historinha infantil narrada por Elba</em></p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Alu&iacute;zio Falc&atilde;o<br />
    Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o, arranjo, reg&ecirc;ncia e viol&atilde;o: Ant&ocirc;nio Madureira<br />
    Viola: Heraldo do Monte<br />
</p>
',
'faixa_mp3' => '1983-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'21',
'faixa_titulo' => 'Cara Bonita',
'compositor' => '(Francis Hime / Ol&iacute;via Hime)',
'dolp' => 'Do LP Francis Hime &ldquo;Essas parcerias&rdquo;, Elenco/Polygram 822.198-1 (1984)<br />
Com:<strong> Francis Hime</strong>
',
'letra' => '<p>Morena, morena, voc&ecirc; me pegou<br />
    Voc&ecirc; bem que sabia e nem me avisou<br />
    Foi me enrolando, enroscando, implorando<br />
Ro&ccedil;ando esse jeito de gato que mia, alquimia</p>
<p>Chicote t&aacute; frio, chicote queimou<br />
    Guardei meu amor l&aacute; no fundo do po&ccedil;o<br />
    E o danado do mo&ccedil;o fingiu que n&atilde;o via<br />
Queria</p>
<p>Morena cheirosa da cor do rom&atilde;<br />
    Generosa e dengosa essa filha de Ians&atilde;<br />
    Vira pra c&aacute; teu olhar de carbono<br />
Me p&otilde;e no teu colo e me tira o quimono e o sono</p>
<p>T&aacute; quente, t&aacute; frio, t&aacute; bom meu amor<br />
    Visto a cama de seda e de chita<br />
    E ficou t&atilde;o bonita que eu quero teu beijo<br />
Desejo</p>
<p>Eu tava sonhando<br />
    E voc&ecirc; me acordou pra assanhar<br />
    Me provocar, me arrepiar, vai me acabar<br />
    Mexe que mexe, remexe as cadeiras num S<br />
Pobre do meu cora&ccedil;&atilde;o nesse sobe que desce</p>
<p>Esse suor cheio de mar<br />
    Esse gingar eu sei de cor<br />
    Tran&ccedil;a que tran&ccedil;a que eu dan&ccedil;o que dan&ccedil;o<br />
Me d&aacute; de uma vez tua cara bonita</p>
<p>Moreno, moreno, voc&ecirc; temperou<br />
    Eu que tava acalmando e a pimenta esquentou<br />
    Deixa a chaleira chiar no fog&atilde;o<br />
    Escorrega teu corpo e me d&aacute; teu cangote<br />
Que dote</p>
<p>Tira o teu pezinho aqui do p&eacute; do meu<br />
    Num vai dizer que se arrependeu<br />
    Se me deu teu amor, teu carinho, teu beijo<br />
Desejo</p>
<p>Morena, morena, voc&ecirc; me pegou<br />
    Voc&ecirc; bem que sabia e nem me avisou<br />
    Moreno, moreno, voc&ecirc; temperou<br />
    Voc&ecirc; bem que sabia e nem me avisou<br />
    Morena, morena, chicote queimou<br />
Voc&ecirc; bem que sabia e nem me avisou</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o art&iacute;stica e produ&ccedil;&atilde;o musical: S&eacute;rgio de Carvalho<br />
    Dire&ccedil;&atilde;o musical, arranjo, reg&ecirc;ncia e piano Yamaha CP-70: Francis Hime<br />
    Viol&atilde;o: H&eacute;lio Delmiro<br />
    Baixo: Jamil Joanes<br />
    Bateria: Theo Lima<br />
    Flauta C: Celso Woltzenlogel, Geraldo e Paulo Guimar&atilde;es<br />
    Clarinete: Botelho<br />
    Sax soprano: Z&eacute; Nogueira<br />
    Sax alto: Ricardo Pontes<br />
    Sax tenor: Biju e Z&eacute; Carlos<br />
    Sax bar&iacute;tono: L&eacute;o Gandelman<br />
    Trompetes: M&aacute;rcio Montarroyos, Bidinho e Formiga<br />
    Trombone: Serginho<br />
    Congas, agog&ocirc; e ganz&aacute;: Caf&eacute;<br />
    Tamborins e cincerro: Marcelo Salazar<br />
</p>',
'faixa_mp3' => '1984-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'22',
'faixa_titulo' => 'Novo Tempo',
'compositor' => '(Ivan Lins / Vitor Martins)',
'dolp' => 'Do LP Ivan Lins, Vitor Martins e Gilson Peranzzetta &ldquo;Juntos&rdquo;, Polygram 822.672-1 (1984)<br />
Com:<strong> Ivan Lins</strong>
',
'letra' => '<p>No novo tempo, apesar dos castigos<br />
    Estamos crescidos estamos atentos<br />
    Estamos mais vivos pra nos socorrer<br />
Pra nos socorrer, pra nos socorrer</p>
<p>No novo tempo, apesar dos perigos<br />
    Da for&ccedil;a mais bruta, da noite que assusta<br />
    Estamos na luta pra sobreviver<br />
Pra sobreviver, pra sobreviver</p>
<p>Pra que nossa esperan&ccedil;a<br />
    Seja mais que a vingan&ccedil;a<br />
    Seja sempre o caminho<br />
Que se deixa de heran&ccedil;a</p>
<p>No novo tempo, apesar dos castigos<br />
    De toda fadiga, de toda injusti&ccedil;a<br />
    Estamos na briga pra nos socorrer<br />
Pra nos socorrer, pra nos socorrer</p>
<p>No novo tempo, apesar dos perigos<br />
    De todos os pecados, de todos enganos<br />
    Estamos marcados pra sobreviver<br />
Pra sobreviver, pra sobreviver</p>
<p>No novo tempo, apesar dos castigos<br />
    Estamos em cena, estamos nas ruas<br />
    Quebrando as algemas pra nos socorrer<br />
Pra nos socorrer, pra nos socorrer</p>
<p>No novo tempo, apesar dos perigos<br />
    A gente se encontra cantando na pra&ccedil;a<br />
    Fazendo pirra&ccedil;a pra sobreviver<br />
Pra sobreviver, pra sobreviver</p>',
'creditos' => '<p>Idealiza&ccedil;&atilde;o: Vitor Martins<br />
    Dire&ccedil;&atilde;o art&iacute;stica e piano Yamaha CP-70: Ivan Lins<br />
    Dire&ccedil;&atilde;o musical, arranjo, reg&ecirc;ncia, Yamaha DX-7 e Korg Polysix: Gilson Peranzzetta<br />
    Acordeom: Z&eacute; Am&eacute;rico Bastos<br />
    Baixo: Antonio Sant&rsquo;Anna<br />
    Guitarra: Zeppa Souza<br />
    Bateria: Rubinho<br />
    Percuss&atilde;o: Jorginho<br />
</p>
',
'faixa_mp3' => '1984-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'20',
'faixa_titulo' => 'Sanfoninha Choradeira',
'compositor' => '(Luiz Gonzaga / Jo&atilde;o Silva)',
'dolp' => 'Do LP Luiz Gonzaga &ldquo;Danado de bom&rdquo;, RCA/Camden 107.0435 (1984)<br />
Com:<strong> Luiz Gonzaga</strong>
',
'letra' => '<p>Chora sanfoninha, chora, chora<br />
    Chora sanfoninha a minha dor<br />
    Minha sanfoninha amiga certa<br />
    Que chorando tu desperta<br />
O cora&ccedil;&atilde;o do meu amor</p>
<p>E ela me vendo, t&aacute; fingindo que n&atilde;o t&aacute;<br />
    T&aacute; me querendo, t&aacute; fingindo que n&atilde;o t&aacute;<br />
    Cora&ccedil;&atilde;o batendo, t&aacute; fingindo que n&atilde;o t&aacute;<br />
    T&aacute; batendo, t&aacute; morrendo<br />
Mas n&atilde;o quer se declarar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Oseas Lopes<br />
    Arranjo e reg&ecirc;ncia: Chiquinho do Acordeom<br />
    Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
</p>',
'faixa_mp3' => '1984-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'20',
'faixa_titulo' => 'Danado de Bom',
'compositor' => '(Luiz Gonzaga / Jo&atilde;o Silva)',
'dolp' => 'Do LP Luiz Gonzaga &ldquo;Danado de bom&rdquo;, RCA/Camden 107.0435 (1984)<br />
Com:<strong> Luiz Gonzaga</strong>
',
'letra' => '<p><em>- T&aacute; danado!<br />
    - Danado o que, Elba? Isso &eacute; Dominguinhos!<br />
- Danando de bom, seu Lula!</em></p>
<p>Ta &eacute; danado de bom<br />
    Ta &eacute; danado de bom, meu cumpade<br />
    Ta &eacute; danado de bom<br />
    Forrozinho, bonitinho<br />
    Gostosinho, safadinho<br />
Danado de bom</p>
<p>Olha, Macambira na zabumba<br />
    Z&eacute; Cupira no tri&acirc;ngulo<br />
E Mariano no gongu&ecirc;</p>
<p>Olha, meu cumpadre na viola<br />
    Meu sobrinho na manola<br />
E Cipriano no mel&ecirc;</p>
<p>Olha a meninada nas cui&eacute;<br />
    T&aacute; sobrando capil&eacute;<br />
E j&aacute; tem bebo pra dan&aacute;</p>
<p>Tem nego grudado que nem piolho<br />
    Tem nega piscando o olho<br />
    Me chamando pra dan&ccedil;ar<br />
    Tem nego grudado que nem piolho<br />
    Tem nega piscando o olho<br />
    Me chamando pra dan&ccedil;ar<br />
E eu vou l&aacute;!</p>
<p>T&aacute; que forrozinho de primeira<br />
    J&aacute; num cabe forrozeira<br />
E cada vez chegando mais</p>
<p>T&aacute; da cozinha pro terreiro<br />
    Sanfoneiro e zabumbeiro<br />
Pra frente, pras tr&aacute;s</p>
<p>Olha, meu cumpade Dami&atilde;o<br />
    Pode apagar o lampi&atilde;o<br />
Que t&aacute; querendo clarear</p>
<p>Aguente o fole meu cumpadre Boror&oacute;<br />
    Que esse &eacute; o tipo do forr&oacute;<br />
    Que num tem hora pra parar<br />
    Aguente o fole meu cumpadre Boror&oacute;<br />
    Que esse &eacute; o tipo do forr&oacute;<br />
Que num tem hora pra parar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Oseas Lopes<br />
    Arranjo e reg&ecirc;ncia: Chiquinho do Acordeom<br />
    <em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em>
</p>
',
'faixa_mp3' => '1984-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'23',
'faixa_titulo' => 'Apresenta&ccedil;&atilde;o de Pablo Milan&eacute;s',
'compositor' => '',
'dolp' => 'Do LP &ldquo;Pablo Milan&eacute;s &ndash; Ao vivo no Brasil&rdquo;, Ariola/Barclay 817.774-1 (1984)',
'letra' => '<p><em>Elba apresenta Pablo Milan&eacute;s na abertura do show no Canec&atilde;o gravado<br />
    em novembro de 1983</em><br />
</p>',
'creditos' => '',
'faixa_mp3' => '1984-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'26',
'faixa_titulo' => 'Palavra de Mulher',
'compositor' => '(Chico Buarque)',
'dolp' => 'Do LP Chico Buarque &ldquo;Malandro&rdquo;, Ariola/Barclay 826.549-1 (1985)
',
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
Eu vou voltar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Homero Ferreira e Carlinhos Vergueiro<br />
    Arranjo: Chiquinho de Moraes<br />
    Piano: Crist&oacute;v&atilde;o Bastos<br />
    Violinos: Giancarlo Pareschi (spalla), Aizik Geller, Alfredo Vidal, Bernardo Bessler,<br />
    Carlos Hack, Francisco Perrotta, Jo&atilde;o Daltro, Jorge Faini, Jos&eacute; Alves, Michel Bessler,<br />
    Paschoal Perrotta, Walter Hack, Luiz Carlos Marques e Walter Gomes de Souza<br />
    Violas: Arlindo Penteado, Frederick Stephany, Hindenburgo Borges e Nelson de Macedo<br />
    Cellos: Alceu de Almeida Reis, Jacques Morelenbaum, Jorge Kundert, Marcio Malard e<br />
    Luiz Fernando Zamith<br />
    Contrabaixo: Sandrino Santoro<br />
</p>',
'faixa_mp3' => '1985-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'28',
'faixa_titulo' => 'Uma S&oacute; Voz',
'compositor' => '(Marcelo Fromer / Toni Bellotto)',
'dolp' => 'Do compacto promocional R&aacute;dio Cidade FM, Continental 5-99-901-009 (1985)<br />
Com:<strong> Nando Reis, Paulo Miklos, Branco Mello, Paula Toller, Evandro Mesquita, Renato Russo, Ney Matogrosso, Lob&atilde;o, Leo Jaime, Zizi Possi, Vin&iacute;cius Cantu&aacute;ria, Cazuza, Erasmo Carlos e Gilberto Gil</strong>
',
'letra' => '<p>&Eacute; uma s&oacute; voz<br />
    &Eacute; voc&ecirc;, somos n&oacute;s<br />
    &Eacute; uma s&oacute; voz<br />
    &Eacute; voc&ecirc;, somos n&oacute;s<br />
Desta vez n&atilde;o estamos s&oacute;s</p>
<p>Todo dia &eacute; r&eacute;veillon<br />
    Todo dia &eacute; tudo de bom<br />
    Todos os tipos de som<br />
    Todo dia &eacute; carnaval<br />
    Todo dia &eacute;<br />
Tudo bem, nada vai mal</p>
<p>Feio e o bonito<br />
    Calmo e o aflito<br />
    O certo e o errado<br />
    O forte e o fraco<br />
    Nesta cidade todos vivem em paz<br />
Nesta cidade todos somos iguais</p>
<p>A bela e a fera<br />
    A falsa e a sincera<br />
    A clara e a escura<br />
    A f&eacute; e a loucura<br />
    Nesta cidade todos vivem em paz<br />
Nesta cidade somos todos iguais</p>',
'creditos' => '<p>Concep&ccedil;&atilde;o da m&uacute;sica/arranjo: Tit&atilde;s<br />
    Produ&ccedil;&atilde;o musical: Paulo Miklos<br />
    Guitarras: Marcelo Fromer, Toni Bellotto, Paulo Miklos, Herbert Vianna e Lulu Santos<br />
    Bateria: Charles Gavin<br />
    Baixo: Nando Reis<br />
    Sax: George Israel<br />
</p>',
'faixa_mp3' => '1985-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'25',
'faixa_titulo' => 'Bicho de Sete Cabe&ccedil;as II (Ao vivo)',
'compositor' => '(Geraldo Azevedo / Z&eacute; Ramalho / Renato Rocha)',
'dolp' => 'Do LP Geraldo Azevedo &ldquo;A luz do solo&rdquo;, Ariola/Barclay 827.904-1 (1985)<br />
Com:<strong> Geraldo Azevedo</strong>
',
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
    N&atilde;o tem ningu&eacute;m que mere&ccedil;a<br />
    N&atilde;o tem cora&ccedil;&atilde;o que esque&ccedil;a<br />
    N&atilde;o tem p&eacute;, n&atilde;o tem cabe&ccedil;a<br />
    N&atilde;o da p&eacute;, n&atilde;o &eacute; direito<br />
    N&atilde;o foi nada, eu n&atilde;o fiz nada disso<br />
    E voc&ecirc; fez um<br />
Bicho de sete cabe&ccedil;a</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o art&iacute;stica e produ&ccedil;&atilde;o musical do projeto: Mazzola<br />
    Produ&ccedil;&atilde;o: Antonio Foguete<br />
    Viol&atilde;o: Geraldo Azevedo<br />
</p>',
'faixa_mp3' => '1985-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'24',
'faixa_titulo' => 'Qui Nem Jil&oacute;',
'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
'dolp' => 'Do LP Luiz Gonzaga &ldquo;Sanfoneiro macho&rdquo;, RCA/Camden 107.0446 (1985)<br />
Com:<strong> Luiz Gonzaga</strong>
',
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
    Aos bra&ccedil;os do meu xod&oacute;<br />
    Saudade assim faz roer<br />
E amarga que nem jil&oacute;</p>
<p>Mas ningu&eacute;m pode dizer<br />
    Que me viu triste a chorar<br />
    Saudade o meu rem&eacute;dio &eacute; cantar<br />
Saudade o meu rem&eacute;dio &eacute; cantar</p>
<p>Produ&ccedil;&atilde;o: Oseas Lopes<br />
    Arranjo e reg&ecirc;ncia: Chiquinho do Acordeom<br />
    Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Oseas Lopes<br />
    Arranjo e reg&ecirc;ncia: Chiquinho do Acordeom<br />
    Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
</p>',
'faixa_mp3' => '1985-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'27',
'faixa_titulo' => 'Chega de M&aacute;goa',
'compositor' => '(Composi&ccedil;&atilde;o coletiva)',
'dolp' => 'Do compacto simples &ldquo;Nordeste J&aacute;&rdquo;, Continental s/n&ordm; (1985)<br />
Com:<strong> v&aacute;rios artistas</strong>
',
'letra' => '<p>N&oacute;s n&atilde;o vamos nos dispersar<br />
    Juntos, &eacute; t&atilde;o bom saber<br />
    Que passado o tormento<br />
Ser&aacute; nosso esse ch&atilde;o</p>
<p>&Aacute;gua, dona da vida<br />
    Ouve essa prece t&atilde;o comovida<br />
    Chega, brinca na fonte<br />
    Desce do monte<br />
Vem como amiga</p>
<p>Te quero &aacute;gua de beber<br />
    Um copo d&#39;&aacute;gua<br />
    Marola mansa da mar&eacute;<br />
    Mulher amada<br />
Te quero orvalho toda manh&atilde;</p>
<p>Terra, olha essa terra<br />
    Ra&ccedil;a valente, gente sofrida<br />
    Chama, tem que ter feira<br />
    Tem que ter festa<br />
Vamos pra vida</p>
<p>Te quero terra pra plantar<br />
    Ah, te quero verde<br />
    Te quero casa pra morar<br />
    Ah, te quero rede<br />
    Depois da chuva o sol da manh&atilde;<br />
    Chega de m&aacute;goa<br />
Chega de tanto penar</p>
<p>Canto e o nosso canto<br />
    Joga no tempo uma semente<br />
    Gente, olha essa gente<br />
Olha essa gente, olha essa gente</p>
<p>Canto (eu canto) e o nosso canto (canto)<br />
    Joga no tempo (joga no tempo)<br />
    Uma semente (yeah, yeah, yeah, yeah, yeah)<br />
    Gente (quero te ver crescer bonita)<br />
    Olha essa gente (quero te ver crescer feliz)<br />
    Olha essa gente (olha essa terra, olha essa gente)<br />
Olha essa gente (gente pra ser feliz, feliz)</p>
<p>Te quero &aacute;gua de beber (me d&ecirc; um copo)<br />
    Um copo d&#39;&aacute;gua<br />
    Marola mansa da mar&eacute; (yeah, yeah, yeah)<br />
    Mulher amada (mulher amada)<br />
    Te quero terra pra plantar (plantar)<br />
    Te quero verde (te quero verde)<br />
    Te quero casa pra morar<br />
    Te quero rede<br />
    Depois da chuva o sol da manh&atilde;<br />
    Chega de m&aacute;goa<br />
    Chega de tanto penar<br />
    Chega de m&aacute;goa<br />
    Chega de tanto penar<br />
Ah!</p>',
'creditos' => '<p>Realiza&ccedil;&atilde;o: Sindicado dos M&uacute;sicos Profissionais do Munic&iacute;pio do Rio de Janeiro<br />
    Arranjo: coletivo<br />
    <em>M&uacute;sicos n&atilde;o especificados na ficha t&eacute;cnica</em><br />
    Cantores: Milton Nascimento, Djavan, Rita Lee, Gal Costa, Gonzaguinha, Chico<br />
    Buarque, Faf&aacute; de Bel&eacute;m, Caetano Veloso, Simone, Paula Toller, Roger, Maria Beth&acirc;nia,<br />
    Elizeth Cardoso, Gilberto Gil, Tim Maia, Roberto Carlos, Erasmo Carlos, Fagner, Alceu<br />
    Valen&ccedil;a, Luiz Melodia, Eudardo Dusek, Amelinha, T&acirc;nia Alves, Zez&eacute; Motta, Emilinha<br />
    Borba, Alcione, F&aacute;tima Guedes, Zizi Possi, Marina Lima, Baby Consuelo, Pepeu Gomes,<br />
    Beth Carvalho, Nara Le&atilde;o, Nana Caymmi, Sandra de S&aacute;, Joyce, Guilherme Arantes<br />
</p>',
'faixa_mp3' => '1985-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'27',
'faixa_titulo' => 'Seca D&rsquo;&aacute;gua',
'compositor' => '(Composi&ccedil;&atilde;o coletiva sobre poema de Patativa do Assar&eacute;)',
'dolp' => 'Do compacto simples &ldquo;Nordeste J&aacute;&rdquo;, Continental s/n&ordm; (1985)<br />
Com:<strong> v&aacute;rios artistas</strong>
',
'letra' => '<p>&Eacute; triste para o Nordeste<br />
    O que a natureza fez<br />
    Mandou cinco anos de seca<br />
    E uma chuva em cada m&ecirc;s<br />
    E agora em 85<br />
Mandou tudo de uma vez</p>
<p>A sorte do nordestino<br />
    &Eacute; mesmo de fazer d&oacute;<br />
    Seca sem chuva &eacute; ruim<br />
Mas seca d&#39;&aacute;gua &eacute; pior</p>
<p>Quando chove brandamente<br />
    Depressa nasce um capim<br />
    D&aacute; milho, arroz e feij&atilde;o<br />
    Mandioca e amendoim<br />
    Mas como em 85<br />
At&eacute; o sapo achou ruim</p>
<p>Maranh&atilde;o e Piau&iacute;<br />
    Est&atilde;o sofrendo por l&aacute;<br />
    Mas o maior sofrimento<br />
    &Eacute; nessas bandas de c&aacute;<br />
    Pernambuco, Rio Grande<br />
Para&iacute;ba e Cear&aacute;</p>
<p>O Jaguaribe inundou<br />
    A cidade de Iguatu<br />
    E Sobral foi alagado pelo Rio Acara&uacute;<br />
    O mesmo estrago fizeram<br />
Salgado e Banabui&uacute;</p>
<p>Cear&aacute; martirizado<br />
    Eu tenho pena de ti<br />
    Limoeiro, Ita&iacute;&ccedil;aba, Quixer&eacute; e Aracati<br />
    Faz pena ver o lamento<br />
Dos flagelados dali</p>
<p>Seus doutores governantes<br />
    Da nossa grande na&ccedil;&atilde;o<br />
    O flagelo das enchentes &eacute; de cortar cora&ccedil;&atilde;o<br />
    Muitas fam&iacute;lias vivendo<br />
Sem lar, sem roupa, sem p&atilde;o</p>',
'creditos' => '<p>Realiza&ccedil;&atilde;o: Sindicado dos M&uacute;sicos Profissionais do Munic&iacute;pio do Rio de Janeiro<br />
    Arranjo: coletivo<br />
    M&uacute;sicos n&atilde;o especificados na ficha t&eacute;cnica<br />
    Cantores: Roberto Ribeiro, Alcione, Jo&atilde;o Nogueira, Amelinha, Gilberto Gil, Paulinho da<br />
    Viola, Ol&iacute;via Byington, Ivan Lins, Elza Soares, Jo&atilde;o do Vale, Luiz Carlos da Vila,<br />
    Terezinha de Jesus, MPB-4 (Magro, Aquiles, Ruy e Miltinho), Fagner, Carlinhos<br />
    Vergueiro, Rosemary, Beth Carvalho, Ednardo, T&acirc;nia Alves, Belchior, Bebeto, Mauro<br />
    Duarte, Marlene, Telma Costa, S&iacute;lvio Cesar, Luiz Gonzaga, Erasmo Carlos, Mi&uacute;cha,<br />
    Chico Buarque e Gonzaguinha<br />
</p>',
'faixa_mp3' => '1985-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'29',
'faixa_titulo' => 'Pot-pourri de Frevos',
'compositor' => '',
'dolp' => 'Do LP Trio El&eacute;trico Armandinho, Dod&ocirc; e Osmar &ldquo;Chame gente&rdquo;, RCA/Victor 103.0661 (1985)<br/>
Com:<strong> Andr&eacute; Macedo</strong>',
'letra' => '
<p><strong>Santos Dumont, Dod&ocirc; e Osmar</strong><br />
<em>(Moraes Moreira / Galv&atilde;o)</em></p>
<p>Santos Dumont, avi&atilde;o<br />
Dod&ocirc; e Osmar, o trio el&eacute;trico</p>
<p>Inven&ccedil;&atilde;o de brasileiro<br />
    Que &eacute; de uma ast&uacute;cia t&atilde;o louca<br />
    De deixar o mundo inteiro<br />
Com &aacute;gua na boca</p>
<p>Seja baiano, mineiro, mineiro<br />
    Com &aacute;gua na boca<br />
    Seja do Rio de Janeiro, Janeiro<br />
    Com &aacute;gua na boca<br />
    De deixar o mundo inteiro, inteiro<br />
Com &aacute;gua na boca</p>
<p>
    <strong>Jubileu de Prata</strong><br />
<em>(Dod&ocirc; / Osmar Macedo)</em></p>
<p>Jubileu de prata<br />
    Luz em cascata<br />
    Explos&atilde;o de alegria<br />
    Multid&atilde;o na folia<br />
    Por todo lado<br />
    De fio a pavio<br />
    O frevo eletrizado<br />
E a loucura do trio</p>
<p>
    <strong>Viva Dod&ocirc; e Osmar</strong><br />
<em>(Moraes Moreira / Z&eacute; Am&eacute;rico)</em></p>
<p>Dod&ocirc;, Dod&ocirc;<br />
    Antes do gringo a guitarra ele inventou<br />
    Osmar, Osmar<br />
O carnaval veio trieletrizar</p>
<p>Logo depois da guerra<br />
    Na minha terra, Bahia<br />
    Dois baianos sem compromisso<br />
    Descobriram que o cepo maci&ccedil;o<br />
    Evitava o fen&ocirc;meno de microfonia<br />
    E assim, com o nome de pau el&eacute;trico<br />
    Nascia um dia a guitarra na Bahia<br />
Bahia, Bahia</p>
<p>
    <strong>Diabol&ocirc;</strong><br />
<em>(Dod&ocirc; / Osmar Macedo)</em></p>
<p>Diabol&ocirc; num frevo de Dod&ocirc;<br />
Eu vou diabolar num frevo de Osmar</p>
<p>Pula pra c&aacute;, pula pra l&aacute;<br />
    Pula pra tr&aacute;s, pula pro ar<br />
    Eu vou pra rua pra diabolar<br />
Vou atr&aacute;s do trio de Dod&ocirc; e Osmar</p>
<p>
    <strong>Cad&ecirc; o Trio</strong><br />
<em>(Armandinho Macedo / Moraes Moreira)</em></p>
<p>Todo mundo me perguntou<br />
    Todo mundo a me perguntar<br />
    Cad&ecirc; o trio Dod&ocirc;?<br />
Cad&ecirc; o trio Osmar?</p>
<p>J&aacute; andei do Campo Grande<br />
    A p&eacute; at&eacute; o Pelourinho<br />
    E n&atilde;o escutei sequer<br />
Um solo do Armandinho</p>
<p>Se a gente com o trio n&atilde;o pula<br />
    A culpa &eacute; de quem manipula<br />
E n&atilde;o pula o carnaval</p>
<p>
    <strong>Dod&ocirc; no C&eacute;u, Osmar na Terra (Passo Double Carnaval)</strong><br />
<em>(Moraes Moreira / Osmar Macedo / Solon Melo)</em></p>
<p>Dod&ocirc; no c&eacute;u mandou um recado<br />
    Not&iacute;cias boas e lembran&ccedil;as<br />
    Disse que t&aacute; ao nosso lado<br />
Sempre a guiar nossas andan&ccedil;as</p>
<p>Disse que nunca disse adeus<br />
    Nem acreditou no final<br />
    Contou at&eacute; como &eacute; que foi que Deus<br />
Aben&ccedil;oou o carnaval</p>
<p>
    <strong>Pombo Correio (Double Morse)</strong><br />
<em>(Dod&ocirc; / Osmar Macedo / Moraes Moreira)</em></p>
<p>Pombo correio voa ligeiro<br />
    Meu mensageiro<br />
    E essa mensagem de amor<br />
    Leva no bico<br />
    Que eu aqui fico cantando<br />
    Que &eacute; pra espantar essa tristeza<br />
Que a incerteza do amor traz</p>
<p>Pombo correio<br />
    Nesse caso eu lhe conto<br />
    Por essas linhas a que ponto quer chegar<br />
    Meu cora&ccedil;&atilde;o, o que mais gosta<br />
&quot;Volta pra mim&quot; seria sim a melhor resposta</p>
<p>
    <strong>Vassourinha El&eacute;trica</strong><br />
<em>(Moraes Moreira)</em></p>
<p>Varre, varre, varre vassourinhas<br />
    Varreu um dia as ruas da Bahia<br />
    Frevo, chuva de frevo e sombrinha<br />
Metais em brasa, brasa, brasa que ardia</p>
<p>Varre, varre, varre vassourinhas<br />
    Varreu um dia as ruas da Bahia<br />
    Abriu alas e caminho pra depois passar<br />
O trio de Armandinho, Dod&ocirc; e Osmar</p>
<p>&Eacute; o frevo, &eacute; o trio, &eacute; o povo<br />
    &Eacute; o povo, &eacute; o frevo, &eacute; o trio<br />
    Sempre juntos fazendo o mais novo<br />
O carnaval do Brasil</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Guti<br />
    Produ&ccedil;&atilde;o executiva, guitarra baiana e guitarras: Armandinho<br />
    Baixo: Betinho<br />
    Bateria e Simons: Haroldo Macedo<br />
</p>',
'faixa_mp3' => '1985-7.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'30',
'faixa_titulo' => 'O Infante',
'compositor' => '(André Luiz Oliveira / Fernando Pessoa)',
'dolp' => 'Do LP &ldquo;Mensagem &ndash; Fernando Pessoa&rdquo;, Est&uacute;dio Eldorado 110.86.0495 (1986)
',
'letra' => '<p>Deus quer, o homem sonha, a obra nasce<br />
    Deus quis que a Terra fosse toda uma<br />
    Que o mar unisse, j&aacute; n&atilde;o separasse<br />
Sagrou-te e foste desvendando a espuma</p>
<p>E a orla branca foi de ilha em continente<br />
    Clareou correndo at&eacute; ao fim do mundo<br />
    E viu-se a terra inteira, de repente<br />
Surgir redonda do azul profundo</p>
<p>Quem te sagrou, criou-te portugu&ecirc;s<br />
    Do mar e n&oacute;s em ti nos deu sinal<br />
    Cumpriu-se o mar e o imp&eacute;rio se desfez<br />
Senhor, falta cumprir-se Portugal</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o musical e de est&uacute;dio: Sergio Mineiro<br />
    Produ&ccedil;&atilde;o: Sergio Campanelle<br />
    Arranjo, reg&ecirc;ncia e teclados: Francis Hime<br />
    Baixo: Gabriel J. Bahalis<br />
    Viol&atilde;o: Antonio Paulo Bellinatti<br />
    Flautas: Demetrio Santos Lima<br />
    Clarinete: Isidoro Longano (Bol&atilde;o)<br />
    Violinos: Elias Slon (spalla), Caetano Domingos Finelli, Luiz Alfonsi, Ricardo Morati de<br />
    Carvalho, Ana Lucia Danilovic, Mayra M. O. Lima, Jorge Gisbert, Madoka Ikeya, Jorge<br />
    Salim Filho e Audino Eluseu Nunes Apar&iacute;cio<br />
    Violas: Michel Verebes, Alwin V. Johannes Oelsner e Newton Servulo Nascimento<br />
    Cellos: Song Hwan Han, Julio Cerezo Ortiz e Paulo Domingos Taccetti (solista)<br />
</p>',
'faixa_mp3' => '1986-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'31',
'faixa_titulo' => 'Boca do Balão (Remix)',
'compositor' => '(Moraes Moreira / Zeca Barreto / Fred G&oacute;es)',
'dolp' => 'Do LP Mix &ldquo;Boca do Bal&atilde;o&rdquo;, Barclay/Polygram 885.029-1 (1986)
',
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
    Rasteiro ou no ch&atilde;o<br />
    A gente se esquenta<br />
E arrebenta a boca do bal&atilde;o</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Mazzola<br />
    Remix: DJ Grego<br />
    Arranjo de base, metais e teclados: Lincoln Olivetti<br />
    Baixo: Fernandinho<br />
    Metais: Marcio Montarroyos, Bidinho, Leo Gandelman e Z&eacute; Nogueira<br />
    Percuss&atilde;o: Ariovaldo<br />
    Surdo: Gordinho<br />
    Pandeiro: Mazzola<br />
    Castanhola: Chacal<br />
    Acordeom: Dominguinhos<br />
    Efeito de explos&atilde;o: Barroso<br />
</p>',
'faixa_mp3' => '1986-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'32',
'faixa_titulo' => 'Las Muchachas de Copacabana',
'compositor' => '(Chico Buarque)',
'dolp' => 'Do LP com a trilha sonora do filme &ldquo;&Oacute;pera do Malandro&rdquo;, Barclay/Polygram 829.609-1 (1985/7)
',
'letra' => '<p>Se o cliente quer rumbeira, tem<br />
    Com tempeiro da baiana<br />
    Somos las muchachas de Copacabana<br />
Somos las muchachas de Copacabana</p>
<p>Cubanita brasileira, tem<br />
    Com sombreiro &agrave; mexicana<br />
    Somos las muchachas de Copacabana<br />
Somos las muchachas de Copacabana</p>
<p>&ldquo;Mam&atilde;e desculpa meus erros de caligrafia<br />
    Lembran&ccedil;a da filha que brilha aqui na capital<br />
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
<p>&ldquo;Mam&atilde;e pro m&ecirc;s eu lhe mando umas economia<br />
    Lembran&ccedil;a da filha que brilha aqui na capital<br />
    &Eacute; uma estrela internacional<br />
    Tua filha na capital<br />
&Eacute; uma estrela internacional&rdquo;</p>
<p>Atra&ccedil;&atilde;o da Martinica, tem<br />
    Chica de Copacabana<br />
    Paraguaia da Jamaica, tem<br />
    Balalaica peruana<br />
    Corcovado em Mar del Plata, tem<br />
    Catarata de banana<br />
    &Iacute;ndia canibal, na certa tem<br />
    E &eacute; oferta da semana<br />
    Somos las muchachas de Copacabana<br />
Somos las muchachas de Copacabana</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Homero Ferreira Antonio Foguete e Carlinhos Vergueiro<br />
    Dire&ccedil;&atilde;o musical e arranjo: Chiquinho de Moraes<br />
    <em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em>
</p>',
'faixa_mp3' => '1987-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'32',
'faixa_titulo' => 'O Meu Amor',
'compositor' => '(Chico Buarque)',
'dolp' => 'Do LP com a trilha sonora do filme &ldquo;&Oacute;pera do Malandro&rdquo;, Barclay/Polygram 829.609-1 (1985/7)<br />
Com:<strong> Claudia Ohana</strong>
',
'letra' => '<p><em>Ludmila</em><br />
    O meu amor<br />
    Tem um jeito manso que &eacute; s&oacute; seu<br />
    E que me deixa louca<br />
    Quando me beija a boca<br />
    A minha pele toda fica arrepiada<br />
    E me beija com calma e fundo<br />
At&eacute; minh&#39;alma se sentir beijada, ai</p>
<p><em>Margot</em><br />
    O meu amor<br />
    Tem um jeito manso que &eacute; s&oacute; seu<br />
    Que rouba os meus sentidos<br />
    Viola os meus ouvidos<br />
    Com tantos segredos lindos e indecentes<br />
    Depois brinca comigo<br />
    Ri do meu umbigo<br />
E me crava os dentes, ai</p>
<p><em>As duas</em><br />
    Eu sou sua menina, viu?<br />
    Ele &eacute; o meu rapaz<br />
    Meu corpo &eacute; testemunha<br />
Do bem que ele me faz</p>
<p><em>Margot</em><br />
    Meu amor<br />
    Tem um jeito manso que &eacute; s&oacute; seu<br />
    De me deixar maluca<br />
    Quando me ro&ccedil;a a nuca<br />
    E quase me machuca com a barba malfeita<br />
    E de pousar as coxas entre as minhas coxas<br />
Quando ele se deita, ai</p>
<p><em>Ludmila</em><br />
    O meu amor<br />
    Tem um jeito manso que &eacute; s&oacute; seu<br />
    De me fazer rodeios<br />
    De me beijar os seios<br />
    Me beijar o ventre<br />
    E me deixar em brasa<br />
    Desfruta do meu corpo<br />
Como se o meu corpo fosse a sua casa, ai</p>
<p><em>A duas</em><br />
    Eu sou sua menina, viu?<br />
    Ele &eacute; o meu rapaz<br />
    Meu corpo &eacute; testemunha<br />
Do bem que ele me faz</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Homero Ferreira Antonio Foguete e Carlinhos Vergueiro<br />
    Dire&ccedil;&atilde;o musical e arranjo: Chiquinho de Moraes<br />
    <em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em>
</p>',
'faixa_mp3' => '1987-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'32',
'faixa_titulo' => 'Peda&ccedil;o de Mim',
'compositor' => '(Chico Buarque)',
'dolp' => 'Do LP com a trilha sonora do filme &ldquo;&Oacute;pera do Malandro&rdquo;, Barclay/Polygram 829.609-1 (1985/7)<br />
Com:<strong> Edson Celulari</strong>
',
'letra' => '<p>Oh, peda&ccedil;o de mim<br />
    Oh, metade afastada de mim<br />
    Leva o teu olhar<br />
    Que a saudade &eacute; o pior tormento<br />
    &Eacute; pior do que o esquecimento<br />
&Eacute; pior do que se entrevar</p>
<p>Oh, peda&ccedil;o de mim<br />
    Oh, metade exilada de mim<br />
    Leva os teus sinais<br />
    Que a saudade d&oacute;i como um barco<br />
    Que aos poucos descreve um arco<br />
E evita atracar no cais</p>
<p>Oh, peda&ccedil;o de mim<br />
    Oh, metade arrancada de mim<br />
    Leva o vulto teu<br />
    Que a saudade &eacute; o rev&eacute;s de um parto<br />
    A saudade &eacute; arrumar o quarto<br />
Do filho que j&aacute; morreu</p>
<p>Oh, peda&ccedil;o de mim<br />
    Oh, metade amputada de mim<br />
    Leva o que h&aacute; de ti<br />
    Que a saudade d&oacute;i latejada<br />
    &Eacute; assim como uma fisgada<br />
No membro que j&aacute; perdi</p>
<p>Oh, peda&ccedil;o de mim<br />
    Oh, metade adorada de mim<br />
    Leva os olhos meus<br />
    Que a saudade &eacute; o pior castigo<br />
    E eu n&atilde;o quero levar comigo<br />
    A mortalha do amor<br />
Adeus</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Homero Ferreira Antonio Foguete e Carlinhos Vergueiro<br />
    Dire&ccedil;&atilde;o musical e arranjo: Chiquinho de Moraes<br />
    Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
</p>
',
'faixa_mp3' => '1987-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'33',
'faixa_titulo' => 'Madalena / Izaura',
'compositor' => '',
'dolp' => 'Do LP &ldquo;H&aacute; sempre um nome de mulher&rdquo;, Independente/BMG/Ariola 803.520 (1987)',
'letra' => '<p><strong>Madalena</strong><br />
<em>(Ary Macedo / Ayrton Amorim)</em></p>
<p>Chorar como eu chorei<br />
    Ningu&eacute;m deve chorar<br />
    Amar como eu amei<br />
Ningu&eacute;m deve amar</p>
<p>Chorava que dava pena<br />
    Por amor a Madalena<br />
    E ela me abandonou<br />
    Diminuindo no jardim<br />
Uma linda flor</p>
<p>Ela que para mim<br />
    Era um anjo de bondade<br />
    Partiu, me deixando saudade<br />
    E eu que era feliz<br />
    Tornei-me um sofredor<br />
Porque perdi meu grande amor</p>
<p>
    <strong>Izaura</strong><br />
<em>(Herivelto Martins / Roberto Roberti)</em></p>
<p>Ai, ai, ai, Izaura<br />
    Hoje eu n&atilde;o posso ficar<br />
    Se eu cair em seus bra&ccedil;os<br />
    N&atilde;o h&aacute; despertador<br />
Que me fa&ccedil;a acordar</p>
<p>O trabalho &eacute; um dever<br />
    Todos devem respeitar<br />
    &Ocirc;, Izaura, me desculpe<br />
    No domingo eu vou voltar<br />
    Teu carinho &eacute; muito bom<br />
    Ningu&eacute;m pode contestar<br />
    Se voc&ecirc; quiser eu fico<br />
    Mas vai me prejudicar<br />
Eu vou trabalhar</p>',
'creditos' => '<p>Cria&ccedil;&atilde;o e dire&ccedil;&atilde;o geral: Ricardo Cravo Albim<br />
    Arranjo e reg&ecirc;ncia: Maestro Orlando Silveira<br />
    Participa&ccedil;&atilde;o especial nas bases: Conjunto &Eacute;poca de Ouro (Jorginho do Pandeiro, Dino,<br />
    Cesar Faria, Carlos Leite, Ronaldo Souza e Valmar do Cavaquinho)<br />
    Metais: <em>na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em>
</p>',
'faixa_mp3' => '1987-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'34',
'faixa_titulo' => 'Grude',
'compositor' => '(Nando Cordel)',
'dolp' => 'Do LP Nando Cordel &ldquo;Puro Prazer&rdquo;, RCA/Victor 103.0726 (1988)<br />
Com:<strong> Nando Cordel</strong>
',
'letra' => '<p>O teu amor nunca me deixa sossegado<br />
    &Eacute; fogo, &eacute; sarro, &eacute; sedutor<br />
    E vira e mexe, n&atilde;o tem hora, n&atilde;o tem lado<br />
O lambuzado desse amor</p>
<p>Eu vivo sempre agarrado<br />
    No rabo da tua saia<br />
    Eu vivo sempre agarrado<br />
No rabo da tua saia</p>
<p>Nesse peneirado<br />
    A gente desmaia<br />
    Nesse peneirado<br />
A gente desmaia</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o executiva: Michael Sullivan e Jos&eacute; Milton<br />
    Arranjo e reg&ecirc;ncia: Sivuca e Tutuca<br />
    Acordeom: Sivuca<br />
    Teclados: Tutuca<br />
    Viol&atilde;o: Nando Cordel<br />
    Guitarra: Jos&eacute; Carlos, Pedro Carlos e Evaldo Rui<br />
    Baixo: Jamil Joanes<br />
    Bateria: Picol&eacute; e T&eacute;o Lima<br />
    Zabumba: Jos&eacute; Dueval<br />
    Percuss&atilde;o: Mingo<br />
    Ritmo: Hermelinda Lopes, Serafim de Souza e Domingos Savio<br />
</p>',
'faixa_mp3' => '1988-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'35',
'faixa_titulo' => 'Risque',
'compositor' => '(Ary Barroso)',
'dolp' => 'Do LP &ldquo;Grandes Autores &ndash; Ary Barroso&rdquo;, Polygram 838.337-1 (1989)
',
'letra' => '<p>Risque meu nome do seu caderno<br />
    J&aacute; n&atilde;o suporto o inferno<br />
Do nosso amor fracassado</p>
<p>Deixe que eu siga novos caminhos<br />
    Em busca de outros carinhos<br />
Matemos nosso passado</p>
<p>Mas se algum dia, talvez<br />
    A saudade apertar<br />
    N&atilde;o se perturbe<br />
    Afogue a saudade<br />
Nos copos de um bar</p>
<p>Creia<br />
    Toda quimera se esfuma<br />
    Como a brancura da espuma<br />
Que se desmancha na areia</p>',
'creditos' => '<p>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos ou qualquer refer&ecirc;ncia &agrave;<br />
    produ&ccedil;&atilde;o<br />
</p>',
'faixa_mp3' => '1989-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'36',
'faixa_titulo' => 'Beija',
'compositor' => '(Cid Guerreiro / Dito)',
'dolp' => 'Do LP Cid Guerreiro &ldquo;Minha p&aacute;tria&rdquo;, BMG Ariola 140.0035 (1989)<br />
Com:<strong> Cid Guerreiro</strong>
',
'letra' => '<p>Me d&aacute; um beijo, morena<br />
    Me d&aacute; um beijo<br />
    Me d&aacute; um beijo, morena<br />
Me d&aacute; um beijo</p>
<p>Que eu sinto desejo<br />
    De minha boca na sua boca<br />
    Do meu corpo no seu corpo<br />
    Se enrolando pouco a pouco<br />
T&ocirc; doidinho pra te amar</p>
<p>Quero sentir que tem ci&uacute;mes<br />
    Eu quero seu perfume<br />
Eu quero um beijo seu</p>
<p>Quero matar a minha sede<br />
    Deitar na minha rede<br />
Depois dizer adeus</p>
<p>Quero beijar a sua boca<br />
    Voc&ecirc; me deixa louca<br />
Eu quero um beijo seu</p>
<p>Quero deitar na minha rede<br />
    Matara minha sede<br />
Depois dizer adeus</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o executiva: Michael Sullivan e Cid Guerreiro<br />
    Arranjo: Cid Guerreiro e Zito Moura<br />
    Baixo: Claudio Japiass&uacute; (Ba&eacute;)<br />
    Teclados: Zito Moura<br />
    Bateria: P&acirc;ntico<br />
    Guitarra base: Cid Guerreiro<br />
    Guitarra solo: Cristiano Pessoa<br />
    Acordeom: Severo<br />
</p>',
'faixa_mp3' => '1989-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'37',
'faixa_titulo' => 'Imaculada',
'compositor' => '(Ary Sperling / Aldir Blanc)',
'dolp' => 'Do segundo LP com a trilha sonora da novela &ldquo;Tieta&rdquo;, Som Livre 405.0005 (1989)
',
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
Continua a ser imaculada</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Mariozinho Rocha<br />
    <em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em>
</p>',
'faixa_mp3' => '1989-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'39',
'faixa_titulo' => 'Bota F&eacute; Que d&aacute; P&eacute;',
'compositor' => '(Luiz Campos / A&eacute;cio Fl&aacute;vio)',
'dolp' => 'Do LP &ldquo;It&aacute;lia 90&rdquo;, Polygram 846.337-1 (1990)
',
'letra' => '<p>Bota f&eacute; nesse peito<br />
    Dessa vez n&atilde;o tem jeito<br />
O Brasil chega l&aacute;</p>
<p>Vai com garra e com sede<br />
    Bota a bola na rede<br />
Pro meu povo dan&ccedil;ar</p>
<p>D&aacute;-lhe verde e amarelo<br />
    Essa Copa &eacute; que eu quero<br />
D&aacute;-lhe, d&aacute;-lhe Brasil</p>
<p>Revivendo de novo<br />
    A festa do povo<br />
Pra comemorar</p>
<p>&Eacute; ra&ccedil;a no peito<br />
    &Eacute; bola no p&eacute;<br />
    &Eacute; ta&ccedil;a na m&atilde;o<br />
&Eacute; grito de ol&eacute;</p>
<p>Vai no peito e na ra&ccedil;a<br />
    L&aacute;, l&aacute;, l&aacute;, l&aacute;, l&aacute;, l&aacute;, l&aacute;, l&aacute;<br />
    &Eacute; a batucada na tarantela<br />
Ginga Brasil com a bola no p&eacute;</p>
<p>Vai no peito e na ra&ccedil;a<br />
    L&aacute;, l&aacute;, l&aacute;, l&aacute;, l&aacute;, l&aacute;, l&aacute;, l&aacute;<br />
    Ginga pra l&aacute;, ginga pra c&aacute;<br />
Ginga Brasil, bota f&eacute; que d&aacute; p&eacute;</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Aramis Barros<br />
    Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Paulo Deb&eacute;tio<br />
    Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
</p>',
'faixa_mp3' => '1990-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'38',
'faixa_titulo' => 'Asa Branca',
'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
'dolp' => 'Do LP Gonzaguinha &ldquo;Luizinho de Gonzaga&rdquo;, WEA 670.9091 (1990)<br />
Com:<strong> Gonzaguinha, Fagner, Sandra Rozados, Joquinha Gonzaga,<br />
F&aacute;tima Guedes, Fernanda, Amora, Mariana, Marin&ecirc;s, Elizeth<br />
Cardoso, Joanna, L&uacute;cia Turnbull, Alcione, Carmen Costa, Beth<br />
Carvalho, Rosana, Herbert Viana, Marlene, Erasmo Carlos e Xuxa</strong></p>
',
'letra' => '<p>Quando olhei a terra ardendo<br />
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
Entonce eu disse &ldquo;adeus Rosinha<br />
Guarda contigo meu cora&ccedil;&atilde;o&rdquo;<br />
Entonce eu disse &ldquo;adeus Rosinha<br />
Guarda contigo meu cora&ccedil;&atilde;o&rdquo;</p>
<p>Hoje longe muitas l&eacute;guas<br />
Numa triste solid&atilde;o<br />
Espero a chuva cair de novo<br />
Pra mim voltar pro meu sert&atilde;o<br />
Espero a chuva cair de novo<br />
Pra mim voltar pro meu sert&atilde;o</p>
<p>Quando o verde dos teus olhos<br />
Se espalhar na planta&ccedil;&atilde;o<br />
Eu te asseguro, n&atilde;o chore n&atilde;o, viu<br />
Que eu voltarei viu, meu cora&ccedil;&atilde;o<br />
Eu te asseguro, n&atilde;o chore n&atilde;o, viu<br />
Que eu voltarei viu, meu cora&ccedil;&atilde;o</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Gonzaguinha<br />
Produ&ccedil;&atilde;o executiva: Roberto Sant&rsquo;Ana e J. Moraes<br />
Arranjo e teclados: Jota Moraes<br />
Baixo: Jamil Joanes<br />
Bateria: Paschoal Meirelles<br />
Percuss&atilde;o: Mingo<br />
Flauta: Ricardo Pontes<br />
Sanfona: Chiquinho do Acordeom<br />
</p>',
'faixa_mp3' => '1990-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'40',
'faixa_titulo' => 'Mosca na Sopa',
'compositor' => '(Raul Seixas)',
'dolp' => 'Do LP Margareth Menezes &ldquo;Kindala&rdquo;, Polygram 849.441-1 (1991)<br />
Com:<strong> Margareth Menezes e Dominic Smith</strong>
',
'letra' => '<p>Eu sou a mosca<br />
Que pousou em sua sopa<br />
Eu sou a mosca<br />
Que pousou pra lhe abusar</p>
<p>Eu sou a mosca<br />
Que perturba o seu sono<br />
Eu sou a mosca<br />
No seu quarto a zumbizar</p>
<p>Mas n&atilde;o adianta vir me dedetizar<br />
Pois nem o DDT pode me exterminar<br />
Porque c&ecirc; mata uma<br />
E vem outra em meu lugar</p>
<p><em>Attention please, I&rsquo;m the big one<br />
The fly that flies, the fly that lies<br />
Bussing, humming, screaming along<br />
Picking in your ear and flying around</em></p>
<p><em>Don&rsquo;t stop, won&rsquo;t stop, you can&rsquo;t sleep<br />
Even counting sheep you won&rsquo;t get rid of me<br />
I&rsquo;m in your soup, I&rsquo;m in your room<br />
Won&rsquo;t let you feel alone, you ain&rsquo;t free!</em></p>',
'creditos' => '<p>Produ&ccedil;&atilde;o, dire&ccedil;&atilde;o de est&uacute;dio e baixo: Nestor Madrid<br />
Arranjo: Pedro Giorlandini e Ramiro Mussoto<br />
Percuss&atilde;o, programa&ccedil;&atilde;o de bateria eletr&ocirc;nica, vocal e berimbaus: Ramiro Mussoto<br />
Teclados, vocal e agog&ocirc;: Pedro Giorlandini<br />
Guitarras: Dominic Smith<br />
Bateria: Jorge Brasil<br />
</p>',
'faixa_mp3' => '1991-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'41',
'faixa_titulo' => 'Morena de Angola (Ao vivo)',
'compositor' => '(Chico Buarque)',
'dolp' => 'Do LP &ldquo;Rio Show Festival &ndash; Os melhores momentos&rdquo;, Som Livre 406.0145 (1991)
',
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
<p>Ser&aacute; que ela t&aacute; caprichando<br />
No peixe que eu trouxe de Benguela<br />
Ser&aacute; que t&aacute; no remelexo<br />
Abandonou meu peixe na tigela</p>
<p>Ser&aacute; que quando vai pra cama<br />
A morena se esquece dos chocalhos<br />
Ser&aacute; que namora fazendo bochincho<br />
Com seus penduricalhos</p>
<p>Morena de Angola<br />
Que leva o chocalho amarrado na canela<br />
Eu acho que deixei um cacho<br />
Do meu cora&ccedil;&atilde;o na Catumbela</p>
<p>Morena de Angola<br />
Que leva o chocalho amarrado na canela<br />
Morena, bichinha danada<br />
Minha camarada do MPLA</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o musical, arranjo e teclados: Eduardo Souto Neto<br />
Teclados: Fernando Moura<br />
Guitarra: Manass&eacute;s<br />
Baixo: Jamil Joanes<br />
Percuss&atilde;o: Repolho<br />
Acordeom: Marcos Farias<br />
Bateria: Elber Bedaque<br />
Flauta: Marcelo Neves<br />
Vocais: Jussara e Betina (vocais)<br />
</p>',
'faixa_mp3' => '1991-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'42',
'faixa_titulo' => 'Carolina',
'compositor' => '(Chico Buarque)',
'dolp' => 'Do LP &ldquo;Z&eacute; Maur&iacute;cio&rdquo;, Independente s/n&ordm; (1991)<br />
Com:<strong> Z&eacute; Maur&iacute;cio Machline</strong>
',
'letra' => '<p>Carolina<br />
Nos seus olhos fundos<br />
Guarda tanta dor<br />
A dor de todo esse mundo<br />
Eu j&aacute; lhe expliquei que n&atilde;o vai dar<br />
Seu pranto n&atilde;o vai nada ajudar<br />
Eu j&aacute; convidei para dan&ccedil;ar<br />
&Eacute; hora, j&aacute; sei, de aproveitar<br />
L&aacute; fora, amor<br />
Uma rosa nasceu<br />
Todo mundo sambou<br />
Uma estrela caiu<br />
Eu bem que mostrei sorrindo<br />
Pela janela, &oacute; que lindo<br />
Mas Carolina n&atilde;o viu</p>
<p>Carolina<br />
Nos seus olhos tristes<br />
Guarda tanto amor<br />
O amor que j&aacute; n&atilde;o existe<br />
Eu bem que avisei, vai acabar<br />
De tudo lhe dei para aceitar<br />
Mil versos cantei pra lhe agradar<br />
Agora n&atilde;o sei como explicar<br />
L&aacute; fora, amor<br />
Uma rosa morreu<br />
Uma festa acabou<br />
Nosso barco partiu<br />
Eu bem que mostrei a ela<br />
O tempo passou na janela<br />
E s&oacute; Carolina n&atilde;o viu</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o art&iacute;stica, arranjo, programa&ccedil;&atilde;o e teclados: Luiz Macedo<br />
Viol&atilde;o e guitarra: Natan Marques<br />
Piano e clarinete: Jather Garotti<br />
Violoncelo: Renato Lemos<br />
Percuss&atilde;o: Ary Dias<br />
</p>',
'faixa_mp3' => '1991-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'43',
'faixa_titulo' => 'O Canto do Galo',
'compositor' => '(Carlos Fernando / Geraldo Amaral)',
'dolp' => 'Do LP &ldquo;O Galo da Madrugada&rdquo;, Indepentente/Seleto 101.171 (1991)
',
'letra' => '<p>L&aacute; vem o Galo<br />
Cantando o dia<br />
Chamando a gente com alegria</p>
<p>&Eacute; dia, &eacute; dia, &eacute; dia<br />
Levanta, moreno, pulando da cama<br />
Pintou quem te ama<br />
Chegou a folia</p>
<p>Para saudar o carnaval<br />
De Aroeira, original<br />
Em S&atilde;o Jos&eacute; tudo &eacute; real<br />
O Galo no frevo<br />
Recife imortal, imortal</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o art&iacute;stica: Carlos Fernando<br />
Produ&ccedil;&atilde;o, guitarra e viol&atilde;o: Paulo Rafael<br />
Dire&ccedil;&atilde;o musical e arranjo de base: Tovinho e Paulo Rafael<br />
Bateria: Adelson<br />
Baixo: Mongol<br />
Teclados: Tovinho<br />
Arranjo, reg&ecirc;ncia dos metais e sax alto: Maestro Duda<br />
Sax tenor: Bob&ocirc;<br />
Sax bar&iacute;tono: Costinha<br />
Trompetes: Nailson, Marquinhos e Alexandre<br />
Trombones: Radegundes e Nino<br />
</p>',
'faixa_mp3' => '1991-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'44',
'faixa_titulo' => 'A Luz do Mundo',
'compositor' => '(Djavan, Chico, Caetano, Arnaldo Antunes e Gil)',
'dolp' => 'Do LP Mix &ldquo;Se essa rua fosse minha&rdquo;, Continental 599.404.857 (1991)<br />
Com:<strong> v&aacute;rios artistas</strong>
',
'letra' => '<p>Eu sou a luz do mundo e ningu&eacute;m me v&ecirc; aqui<br />
Eu sou o sal da terra e ningu&eacute;m me sabe aqui<br />
Brincando de existir<br />
Ningu&eacute;m pode me pegar<br />
Eu sou a voz da vida, nada vai me calar</p>
<p>Pivete, capit&atilde;o da areia, trombadinha<br />
A imensid&atilde;o da noite para habitar<br />
A lua, mas se essa rua fosse minha<br />
Meu caminho, meu sono, meu zanzar</p>
<p>Ducha de chuva fria e sol de aquecedor<br />
Cama de viaduto e carros de cobertor<br />
Letreiros de b&ecirc;-a-b&aacute;<br />
Vitrines de ver TV<br />
Beijo de cola e colo de esmola pra comer</p>
<p>Corre, menino<br />
Vem, menino<br />
Perto de mim</p>',
'creditos' => '<p>Baixo: Arthur Maia<br />
Teclados: Paulo Calazans<br />
Guitarra: Torcuato Mariano<br />
Voz: Djavan, Caetano Veloso, Gilberto Gil, Chico Buarque, Xuxa, Maria Beth&acirc;nia, Sandra de S&aacute;, Ang&eacute;lica, Gal Costa, Ivan Lins, Beth Carvalho, Alceu Valen&ccedil;a, Renato Russo, Pel&eacute;, Elba Ramalho, Ney Matogrosso, Simone, Jo&atilde;o Bosco, Fagner, Lob&atilde;o, Herbert Viana, Lulu Santos, Roberto Carlos, Adriana Calcanhotto, Aquiles, Magro, Miltinho, Ruy, Arnaldo Antunes, Concei&ccedil;&atilde;o Rios, Emilinha Borba, Evandro Mesquita, Fl&aacute;vio Pantoja, Iris Bustamente, Joyce, Kleiton, Kledir, Leila Pinheiro, Leo Jaime, Mi&uacute;cha e Ver&ocirc;nica Sabino<br />
</p>',
'faixa_mp3' => '1991-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'46',
'faixa_titulo' => 'Balan&ccedil;a Sanfoneiro',
'compositor' => '(Savinho)',
'dolp' => 'Do LP Dominguinhos &ldquo;Garanhuns&rdquo;, RGE 308.6310 (1992)<br />
Com:<strong> Dominguinhos</strong>',
'letra' => '<p>Balan&ccedil;a sanfoneiro que esse fole ronca<br />
Que esse fola apronta, que esse fole &eacute; bom<br />
No som dessa sanfona todo mundo dan&ccedil;a<br />
Todo mundo canta sem sair do tom</p>
<p>Eu j&aacute; cantei, eu j&aacute; dancei forr&oacute;, xaxado<br />
Sentindo o floreado que a sanfona d&aacute;<br />
&Eacute; uma parada dura meu jogo de cintura<br />
Mulherada me procura querendo dan&ccedil;ar</p>
<p>A noite inteira no sal&atilde;o escuro &eacute; festa<br />
Pois o forr&oacute; s&oacute; presta na luz do luar<br />
Apaga o candeeiro que esse forr&oacute; t&aacute; maneiro<br />
Vamos toque sanfoneiro que eu quero dan&ccedil;ar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Dominguinhos<br />
Arranjo e reg&ecirc;ncia: Chiquinho do Acordeom<br />
Baixo: Arismar do Esp&iacute;rito Santo<br />
Bateria: Antonio de Almeida (Toniquinho)<br />
Guitarras: Heraldo do Monte e Olmir Stocker (Alem&atilde;o)<br />
Viol&atilde;o: Olmir Stocker (Alem&atilde;o)<br />
Acordeom: Dominguinhos e Chiquinho do Acordeom<br />
Tri&acirc;ngulo: Zezun<br />
Zabumba: Di&ocirc; Ara&uacute;jo<br />
Agog&ocirc;: Waldomiro Domingos<br />
Vocal: Guadalupe, Angela, Silvinha Ara&uacute;jo, Ringo e Carlinhos<br />
</p>',
'faixa_mp3' => '1992-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'47',
'faixa_titulo' => 'De Onde Vem o Bai&atilde;o',
'compositor' => '(Gilberto Gil)',
'dolp' => 'Do CD &ldquo;Gilberto Gil &ndash; Songbook vol. 1&rdquo;, Lumiar Discos LD 01/92 (1992)<br />
Com:<strong> Dominguinhos</strong>
',
'letra' => '<p>Debaixo do barro do ch&atilde;o da pista onde se dan&ccedil;a<br />
Suspira uma sustan&ccedil;a sustentada por um sopro divino<br />
Que sobe pelos p&eacute;s da gente e de repente se lan&ccedil;a<br />
Pela sanfona afora at&eacute; o cora&ccedil;&atilde;o do menino</p>
<p>Debaixo do barro do ch&atilde;o da pista onde se dan&ccedil;a<br />
&Eacute; como se Deus irradiasse uma forte energia<br />
Que sobe pelo ch&atilde;o<br />
E se transforma em ondas de bai&atilde;o, xaxado e xote<br />
Que balan&ccedil;a a tran&ccedil;a do cabelo da menina<br />
E quanta alegria!</p>
<p>De onde &eacute; que vem o bai&atilde;o?<br />
Vem debaixo do barro do ch&atilde;o<br />
De onde &eacute; que vem o xote e o xaxado?<br />
Vem debaixo do barro do ch&atilde;o<br />
De onde vem a esperan&ccedil;a, a sustan&ccedil;a<br />
Espalhando o verde dos teus olhos pela planta&ccedil;&atilde;o?<br />
&Ocirc;&ocirc;, vem debaixo do barro do ch&atilde;o</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o: Almir Chediak<br />
Arranjo e acordeom: Dominguinhos<br />
Bateria: Fernando Pereira<br />
Percuss&atilde;o: Firmino<br />
Baixo el&eacute;trico: Luiz&atilde;o Maia<br />
Guitarra e cavaquinho: Neco</p>
',
'faixa_mp3' => '1992-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'45',
'faixa_titulo' => 'O que a Noite Faz',
'compositor' => '(Danilo Caymmi / Dudu Falc&atilde;o)',
'dolp' => 'Do LP com a trilha sonora da novela &ldquo;Pedra sobre Pedra&rdquo;, Som Livre 407.0078 (1992)
',
'letra' => '<p>Olha meu amor<br />
O que a noite faz<br />
Esconde os teus olhos<br />
Entre mil cristais</p>
<p>Pelo nosso amor<br />
Pelo amor de Deus<br />
Diz que vai voltar<br />
N&atilde;o, n&atilde;o me diz adeus</p>
<p>Olha quanto c&eacute;u<br />
Quanta solid&atilde;o<br />
Nem sei quantas marcas<br />
Tem meu cora&ccedil;&atilde;o</p>
<p>Que &eacute; que eu vou fazer<br />
Pra ficar em paz<br />
Pra n&atilde;o te esquecer<br />
Nem lembrar demais</p>
<p>Olha meu amor<br />
O que a vida fez<br />
Me deixou a noite<br />
Te levou de vez</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o musical: Mariozinho Rocha<br />
Produ&ccedil;&atilde;o musical: Andr&eacute; Sperling<br />
Arranjo: Roger Henri<br />
Acordeom franc&ecirc;s (musette): Marcos Farias<br />
Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</p>
',
'faixa_mp3' => '1992-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'48',
'faixa_titulo' => 'Cidad&atilde;o (Vers&atilde;o Solo) (remix)',
'compositor' => '(Moraes Moreira / Capinan)',
'dolp' => 'Do LP single mix &ldquo;Cidad&atilde;o&rdquo;, Polygram 2801.619 (1992) <br>
"Também no CD "Axé Music - O som da Bahia", Polygram 517.918-1 (1993)',
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
Nessa cidade na&ccedil;&atilde;o</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Elba Ramalho e Marcos Farias<br />
Arranjo: Mazzola, Ricardo Le&atilde;o e Moraes Moreira<br />
Bateria: Jorginho Gomes<br />
Contrabaixo: Jamil Joanes<br />
Guitarra: Davi Moraes<br />
Percuss&atilde;o: Mingo, Cidinho e Repolho<br />
Surdo: Gordinho<br />
Teclados: Ricardo Le&atilde;o<br />
Vocais: Jurema C&acirc;ndia, Jussara, Nair Candia, Betina, Zeppa Souza, Chico Puppo, Louren&ccedil;o e Marcio Lott<br />
Povo: Elba, Pimpa, Mazzola e Fatinha<br />
</p>',
'faixa_mp3' => '1992-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'53',
'faixa_titulo' => 'Chegadinho',
'compositor' => '(Assis&atilde;o)',
'dolp' => 'Do CD &ldquo;O grande forr&oacute; de Elba Ramalho&rdquo;, Globo/Polydor 519.445-2 (1993)
',
'letra' => '<p>No baco-baco do zabumba<br />
O nheco-nheco da sanfona<br />
E uma dama que saiba arrastar os p&eacute;s<br />
E o chiar do chinelo animando o sanfoneiro<br />
Bate o breque bem ligeiro na pancada dos coit&eacute;s</p>
<p>Pode balan&ccedil;ar teu corpo bonito, menina<br />
Esse teu chegadinho me ensina<br />
Que eu te ensino a forrozar<br />
Venha cá, danada, me matar de beijo<br />
Passe o pente, água de cheiro<br />
Vem ligeiro xique-xique xique-d&aacute;</p>',
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
</p>',
'faixa_mp3' => '1993-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'49',
'faixa_titulo' => 'N&atilde;o D&aacute; pra Esperar (Siempre fiel)',
'compositor' => '(Mariano Garc&iacute;a Perez / vers&atilde;o: Fausto Nilo)',
'dolp' => 'Do CD &ldquo;&Eacute; Natal&rdquo;, Polygram 518.712-1 (1993)<br />
Com:<strong> v&aacute;rios artistas</strong>
',
'letra' => '<p>Quando a esperan&ccedil;a quer se apagar<br />
Acendo os olhos no teu olhar<br />
Fico sonhando que o mundo &eacute; meu amigo<br />
Somos desejos e nada mais<br />
Nesse deserto de amor<br />
Viol&ecirc;ncia, pe&ccedil;o paz!<br />
J&aacute; n&atilde;o sabemos chorar</p>
<p>Mas no fundo &eacute; uma revolu&ccedil;&atilde;o<br />
O mundo &eacute; um moinho<br />
Est&aacute; vencendo quem retira o p&atilde;o<br />
Da boca de um menino</p>
<p>Ainda quero dizer esta frase t&atilde;o velha<br />
&ldquo;Eu te amo e a vida &eacute; bela<br />
Vale &agrave; pena sonhar&rdquo;<br />
Outros j&aacute; v&atilde;o nascer no azul da esfera<br />
Negro, branco, &iacute;ndio e fera haver&atilde;o de brilhar</p>
<p>Fa&ccedil;a-se a luz para clarear<br />
Fa&ccedil;a-se o tempo pra nos criar<br />
Vamos no vento<br />
O vento &eacute; nosso abrigo</p>
<p>Nossa cidade n&atilde;o tem pa&iacute;s<br />
E essa can&ccedil;&atilde;o passar&aacute;<br />
Viol&ecirc;ncia nunca mais<br />
N&oacute;s s&oacute; sabemos cantar</p>
<p>Mas no fundo &eacute; uma revolu&ccedil;&atilde;o<br />
O mundo &eacute; um moinho<br />
Est&aacute; batendo mais um cora&ccedil;&atilde;o<br />
Um p&aacute;ssaro no ninho</p>
<p>Hoje eu quero te ver<br />
E apagar esta tela<br />
A cor da fome &eacute; a luz da guerra<br />
H&aacute; de haver um lugar<br />
Um lugar pra viver<br />
Na cidade ou na selva<br />
H&aacute; tanta gente, h&aacute; tanta terra<br />
J&aacute; n&atilde;o d&aacute; pra esperar</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o art&iacute;stica: Max Pierre e Jos&eacute; Celso Guida<br />
Artistas: Andrei, Bad Girls, Boka Boka, C&aacute;ssia Eller, C&eacute;sar Camargo Mariano, Chit&atilde;ozinho &amp; Xoror&oacute;, Edmon, Elba Ramalho, Fantasmas, Guido Brunini, Katia, Leila Pinheiro, Leo Gandelman, Margareth Menezes, Maria Beth&acirc;nia, Mylla Christie, Nelson Freitas, Netinho, Ney Matogrosso, Paulo Ricardo &amp; RPM, Rita de C&aacute;ssia, R&uacute;tila M&aacute;quina, Sandy &amp; Junior, Sarajane, Selma Reis, T&acirc;nia Alves, Tigres de Bengala e Wando.<br />
Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
</p>',
'faixa_mp3' => '1993-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'51',
'faixa_titulo' => 'Samba em Prel&uacute;dio',
'compositor' => '(Baden Powell / Vinicius de Moraes)',
'dolp' => 'Do CD &ldquo;Vinicius de Moraes &ndash; Songbook vol. 2&rdquo;, Lumiar Discos LD 02/93 (1993)<br />
Com:<strong> Geraldo Azevedo</strong>
',
'letra' => '<p>Eu sem voc&ecirc;<br />
N&atilde;o tenho por qu&ecirc;<br />
Porque sem voc&ecirc;<br />
N&atilde;o sei nem chorar<br />
Sou chama sem luz<br />
Jardim sem luar<br />
Luar sem amor<br />
Amor sem se dar</p>
<p>E eu sem voc&ecirc;<br />
Sou s&oacute; desamor<br />
Um barco sem mar<br />
Um campo sem flor<br />
Tristeza que vai<br />
Tristeza que vem<br />
Sem voc&ecirc; meu amor eu n&atilde;o sou ningu&eacute;m</p>
<p>Ai, que saudade<br />
Que vontade de ver renascer nossas vidas<br />
Volta querida<br />
Os meus bra&ccedil;os precisam dos teus<br />
Teus abra&ccedil;os precisam dos meus</p>
<p>Estou t&atilde;o sozinho<br />
Tenho os olhos cansados de olhar para o al&eacute;m<br />
Vem ver a vida<br />
Sem voc&ecirc;, meu amor, eu n&atilde;o sou ningu&eacute;m</p>',
'creditos' => '<p>Arranjo e viol&atilde;o: Geraldo Azevedo<br />
Contrabaixo: Adriano Giffoni<br />
Piano: Crist&oacute;v&atilde;o Bastos<br />
Percuss&atilde;o: Dom Chacal<br />
</p>',
'faixa_mp3' => '1993-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'54',
'faixa_titulo' => 'Devora-me Outra Vez (Ven Devorame Otra Vez) (Remix)',
'compositor' => '(Palmer Hernandez / Vers&atilde;o: Fausto Nilo)',
'dolp' => 'Do LP single mix &ldquo;Devora-me outra vez&rdquo;, Polygram 2801.741 (1993)
',
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
</p>',
'faixa_mp3' => '1993-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'52',
'faixa_titulo' => 'Tum, Tum, T&aacute;, T&aacute;',
'compositor' => '(Jo&atilde;o Silva)',
'dolp' => 'Do LP Zinho &ldquo;Forr&oacute; com gosto de g&aacute;s&rdquo;, Girassol Discos LP 5001 (1993)<br />
Com:<strong> Zinho</strong>
',
'letra' => '<p>Quando voc&ecirc; me aperta<br />
Nos seus bra&ccedil;os fico louca<br />
Que acabe o forr&oacute;<br />
Pra beijar a sua boca<br />
E eu, paix&atilde;o<br />
Parece at&eacute; que tem em mim um fogueir&atilde;o</p>
<p>Meu cora&ccedil;&atilde;o<br />
Bate fora do comum<br />
Sem compasso, desgarrado<br />
Disparado, oi, tum, tum</p>
<p>Tum, tum, t&aacute;, t&aacute;<br />
T&aacute; &eacute; bom de mais, meu bem querer<br />
O calor desses seus bra&ccedil;os<br />
&Eacute; minha fonte de prazer</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o art&iacute;stica e produ&ccedil;&atilde;o executiva: Jo&atilde;o Silva<br />
Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Zinho<br />
Arranjo de metais e trombone: Chico City<br />
Arranjo de base e acordeom: Toinho de Bel&eacute;m<br />
Acordeom: Dominguinhos e Gen&aacute;rio<br />
Guitarra: Roberto<br />
Baixo: Deda<br />
Bateria: Carlinhos Batera<br />
Sax alto e tenor: Cal<br />
Trompete: Alc&acirc;ntara<br />
Percuss&atilde;o: Durval<br />
</p>',
'faixa_mp3' => '1993-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'50',
'faixa_titulo' => 'Menino do Pel&ocirc',
'compositor' => '(Ger&ocirc;nimo / Saul Barbosa)',
'dolp' => 'Do CD Meninos do Pel&ocirc; &ldquo;Adota eu&rdquo;, Sony Music 850.209/2-464444 (1993)<br />
Com:<strong> Meninos do Pel&ocirc</strong>;
',
'letra' => '<p>Todo menino do Pel&ocirc;<br />
Sabe tocar tambor<br />
Todo menino do Pel&ocirc;<br />
Sabe tocar tambor</p>
<p>Sabe tocar<br />
Sabe tocar<br />
Sabe tocar tambor<br />
Sabe tocar<br />
Sabe tocar<br />
Sabe tocar tambor</p>
<p>Eu quero ver (Eu quero ver)<br />
O menino subindo a ladeira<br />
Sem viol&ecirc;ncia<br />
Com toda malemol&ecirc;ncia<br />
Fazendo bumb&aacute;, bumb&aacute;<br />
Fazendo bumb&aacute;, bumb&aacute;</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Daniela Mercury e Ramiro Musotto<br />
Arranjo: Ary Sperling, Daniela Mercury e Ramiro Musotto<br />
Teclados: Ary Sperling<br />
Programa&ccedil;&atilde;o de ritmo e percuss&atilde;o: Ramiro Musotto<br />
Surdo: M&aacute;rcio<br />
Repique: Beto Resende<br />
Repique, tarol e timbau: Bui&uacute;<br />
Voz e repique: Buiuzinho<br />
Vocais: Daniela Mercury, Gabriel P&oacute;voas, Giovana Mercury P&oacute;voas, V&acirc;nia Abreu, Ananda Amaral, Clara Mendes, Davi Britto, Felipe Saback, Liane Dur&atilde;o, Luana Lemos, Lucas Saback, Micael Oliveira, Myrna Bonfim, Nayamara Bonfim e Soraya Nunes</p>
',
'faixa_mp3' => '1993-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'55',
'faixa_titulo' => 'O Dengo que a Nega Tem',
'compositor' => '(Dorival Caymmi)',
'dolp' => 'Do CD &ldquo;Dorival Caymmi&rdquo;, Sony Music 850.346/2-464500 (1994)',
'letra' => '<p>&Eacute; dengo, &eacute; dengo, &eacute; dengo, meu bem<br />
Dengo que nega tem<br />
Tem dengo no remelexo, meu bem<br />
Dengo no falar tamb&eacute;m</p>
<p>Quando se diz que no falar tem dengo<br />
Tem dengo, tem dengo, tem dengo, tem<br />
Quando se diz que no andar tem dengo<br />
Tem dengo, tem dengo, tem dengo, tem<br />
Quando se diz que no sorrir tem dengo<br />
Tem dengo, tem dengo, tem dengo, tem<br />
Quando se diz que no sambar tem dengo<br />
Tem dengo, tem dengo, tem dengo, tem</p>
<p>&Eacute; no mexido, &eacute; no descanso, &eacute; no balan&ccedil;o<br />
&Eacute; no jeitinho requebrado que essa nega tem<br />
Que todo mundo fica enfeiti&ccedil;ado<br />
E atr&aacute;s do dengo dessa nega todo mundo vem<br />
Atr&aacute;s do dengo dessa nega todo mundo vem</p>
<p>Quando se diz que no quebrar tem dengo<br />
Tem dengo, tem dengo, tem dengo, tem<br />
Quando se diz que no bulir tem dengo<br />
Tem dengo, tem dengo, tem dengo, tem<br />
Quando se diz que no cantar tem dengo<br />
Tem dengo, tem dengo, tem dengo, tem<br />
Quando se diz que no olhar tem dengo<br />
Tem dengo, tem dengo, tem dengo, tem</p>',
'creditos' => '<p>Idealiza&ccedil;&atilde;o e realiza&ccedil;&atilde;o: Regina Oreiro<br />
Produ&ccedil;&atilde;o: Regina Oreiro e Danilo Caymmi<br />
Arranjo, reg&ecirc;ncia, viol&atilde;o e baixo: Jacar&eacute;<br />
Cavaquinho: Alceu Maia<br />
Bateria: Marcelo Brasil<br />
Congas e pandeiro: Repolho<br />
Cu&iacute;ca e tamborim: Ov&iacute;dio<br />
Surdo e tamborim: Gordinho<br />
Vocais: Jussara e Jurema<br />
</p>',
'faixa_mp3' => '1994-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'56',
'faixa_titulo' => 'Marina',
'compositor' => '(Dorival Caymmi)',
'dolp' => 'Do CD Nelson Gon&ccedil;alves &ldquo;Cante comigo&rdquo;, BMG Brasil 7.432.124.392-1 (1994)<br />
Com:<strong> Nelson Gon&ccedil;alves</strong>',
'letra' => '<p>Marina, morena<br />
Marina, voc&ecirc; se pintou<br />
Marina, voc&ecirc; fa&ccedil;a tudo<br />
Mas fa&ccedil;a um favor<br />
N&atilde;o pinte esse rosto que eu gosto<br />
Que eu gosto e que &eacute; s&oacute; meu<br />
Marina, voc&ecirc; j&aacute; &eacute; bonita com o que Deus lhe deu</p>
<p>Me aborreci, me zanguei<br />
J&aacute; n&atilde;o posso falar<br />
E quando eu me zango, Marina, n&atilde;o sei perdoar<br />
Eu j&aacute; desculpei muita coisa<br />
Voc&ecirc; n&atilde;o arranjava outra igual<br />
Desculpe, Marina, morena<br />
Mas t&ocirc; de mal<br />
(De mal com voc&ecirc;)</p>',
'creditos' => '<p>Arranjo e baixo: Jacar&eacute;<br />
Piano e teclados: Fernando Merlino<br />
Viol&atilde;o: Marcos Arcanjo<br />
Bateria: Pantico Rocha<br />
Percuss&atilde;o: Reginaldo Vargas<br />
Trompete e flugelhorn: Chico Oliveira<br />
Flauta: David Ganc<br />
Trombone: Vitor Santos<br />
</p>',
'faixa_mp3' => '1994-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'57',
'faixa_titulo' => 'Que Pena',
'compositor' => '(Jorge Ben)',
'dolp' => 'Do CD Oscar D&rsquo;Leon &ldquo;El rey de los soneros&rdquo;, Polygram (1994)<br />
Com:<strong> Oscar D&rsquo;Leon</strong>
',
'letra' => '<p>Ele j&aacute; n&atilde;o gosta mais de mim<br />
Mais eu gosto dele mesmo assim<br />
Que pena, que pena<br />
Ella ya no es m&aacute;s mi peque&ntilde;a<br />
Que pena, que pena</p>
<p>Pois n&atilde;o &eacute; f&aacute;cil recuperar<br />
Um grande amor perdido<br />
Pues ella era una rosa<br />
Ela era uma rosa<br />
Las otras eran albahaca<br />
As outras eram manjeric&atilde;o<br />
Ella era una rosa<br />
Ela era uma rosa<br />
Que mandava no meu cora&ccedil;&atilde;o<br />
Cora&ccedil;&atilde;o, cora&ccedil;&atilde;o</p>
<p>Ele j&aacute; n&atilde;o gosta mais de mim<br />
Mas eu gosto dele mesmo assim<br />
Ai meu Deus que pena, que pena<br />
Ella ya no es m&aacute;s mi peque&ntilde;a<br />
Que pena, que pena</p>
<p>N&atilde;o, n&atilde;o, n&atilde;o<br />
N&atilde;o vou chorar<br />
Eu vou &eacute; cantar<br />
Pois a vida continua<br />
Pois a vida continua<br />
E eu n&atilde;o vou ficar sozinha no meio da rua<br />
No meio da rua<br />
Esperando que algu&eacute;m me d&ecirc; a m&atilde;o<br />
Me de la mano, la mano (a m&atilde;o)</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o musical, arranjo e piano: Sergio George<br />
Baixo: Ruben Rodriguez<br />
Trompete: Raul Agraz<br />
Trombones: William Cepeda, Jose Davila e Chris Wasburne<br />
Congas: Papo Pepin<br />
Bong&ocirc;: Bobby Allende<br />
Timbal: Marc Qui&ntilde;ones<br />
Vocal: Ray Sepulveda, Luis Cabarcas, Jorge Suarez e Juan Silva<br />
</p>',
'faixa_mp3' => '1994-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'58',
'faixa_titulo' => 'Tropicaliente (Cora&ccedil;&atilde;o da Gente)',
'compositor' => '(Jo&atilde;o Wash / Nando Cordel / vers&atilde;o: Susana Pi&ntilde;ar)',
'dolp' => 'Do CD Elba Ramalho &ldquo;Devora-me&rdquo; &ndash; edi&ccedil;&atilde;o internacional, Polygram 314.519.901-2 (1994)
',
'letra' => '<p>Morena que baila en un mar de alegr&iacute;a<br />
Quiz&aacute;s la sirena de mis fantas&iacute;as<br />
Ojal&aacute; que no se acabe el d&iacute;a<br />
Dejal&aacute; y ya ver&aacute;s cu&aacute;nta energ&iacute;a<br />
Ojal&aacute; que no se acabe el d&iacute;a<br />
Dejal&aacute; y ya ver&aacute;s cu&aacute;nta energ&iacute;a</p>
<p>Sue&ntilde;o y de salsa, tropicaliente<br />
Cuando dispara<br />
No para m&aacute;s un coraz&oacute;n ardiente</p>
<p>Oh, oh, oh tropicaliente<br />
Oh, oh, oh ilumina<br />
Un coraz&oacute;n ardiente<br />
Oh, oh, oh tropicaliente<br />
Oh, oh, oh ilumina<br />
Un coraz&oacute;n</p>
<p>Te cantar&eacute;<br />
Mantras, boleros<br />
Y te dir&eacute; una vez m&aacute;s<br />
Ay c&oacute;mo te quiero!</p>
<p>Te ense&ntilde;ar&eacute;<br />
Ritmos cubanos<br />
Ritos de amor<br />
Bajo el cielo panamericano</p>
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
</p>',
'faixa_mp3' => '1994-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'63',
'faixa_titulo' => 'Me Juego Todo (Eu Quero &eacute; Botar Meu Bloco na Rua)',
'compositor' => '(Sergio Sampaio /vers&atilde;o: Maria Rosario Avelar)',
'dolp' => 'Do CD single &ldquo;Eu quero &eacute; botar meu bloco na rua&rdquo;, Polygram M-2801.901 (1995)<br />
Participa&ccedil;&atilde;o especial: <strong>Orquestra HB</strong><br />
<em>Tamb&eacute;m na vers&atilde;o em portugu&ecirc;s</em>
',
'letra' => '<p>Yo no apuesto por algo peque&ntilde;o<br />
Cuando tengo un sue&ntilde;o que me vuelve loca<br />
No sabe mi boca quedarse en sonrisa<br />
Prefiero la risa que me llena m&aacute;s</p>
<p>Entre un paso y su huella hay un mundo<br />
Y en cada segundo un universo entero<br />
Eso es que yo quiero, sentirlo cercano<br />
Guardarlo en mi mano y no soltarlo m&aacute;s</p>
<p>Me juego toda, en cada momento<br />
Quiero llegar al final<br />
Me juego toda, no importa si pierdo<br />
Siempre vivir es so&ntilde;ar</p>
<p>Yo no elijo el camino del medio<br />
Yo le pongo asedio a todos los gigantes<br />
Voy siempre adelante contra lo imposible<br />
Y no me conformo con menos de m&aacute;s</p>
<p>Me juego toda, en cada momento<br />
No importa si pierdo siempre<br />
Vivir es so&ntilde;ar<br />
Me juego toda, no importa si pierdo<br />
Sin prisas, sin dudas<br />
Gano, la suerte es as&iacute;<br />
Me juego toda, en cada momento<br />
Voy a guardar el mundo en mi mano<br />
Me juego toda, no importa si pierdo<br />
Yo quiero tus besos que me vuelven loca<br />
Me juego toda, en cada momento<br />
Me juego por &eacute;l en &eacute;ste carnaval</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Sidney Cecchini e La&iacute;s Galv&atilde;o<br />
Orquestra Heartbreakers<br />
Vibrafone: Guga Stroeter<br />
Sax: George Freire<br />
Sax tenor: Sergio Lyra David<br />
Sax bar&iacute;tono: Xico Guedes<br />
Trombone: Matias Capovilla<br />
Trompete: Luis Macedo<br />
Baixo: M&aacute;rio Carib&eacute;<br />
Piano e clarinete: Jether Garotti Jr<br />
Bateria: Beto Caldas<br />
Bong&ocirc;: James M&uuml;ller<br />
Congas: Mestre Dinho<br />
Timbales: Marcos Tessari<br />
Voz: Hamilton Moreno<br />
</p>',
'faixa_mp3' => '1995-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'60',
'faixa_titulo' => 'Bahia, Cidade Aberta',
'compositor' => '(Jorge Portugal / Saul Barbosa)',
'dolp' => 'Do CD Saul Barbosa &ldquo;Bahia, cidade aberta&rdquo;, Dabli&uacute; Discos OT 5018 (1995)
',
'letra' => '<p>Deixa a baiana rodar<br />
Deixa a cidade a cantar o sentimento da cor<br />
No mundo inteiro n&atilde;o h&aacute;<br />
Tanta maneira de amar<br />
Tanta mistura de amor</p>
<p>Bahia, cidade aberta<br />
A gente se manifesta cantando<br />
&Eacute; festa puxando festa<br />
E a gente fazendo festa e lutando</p>
<p>Se a vida n&atilde;o tem final<br />
Explode no carnaval, eu tamb&eacute;m vou<br />
E a galera vai me encontrar<br />
No limite do c&eacute;u, do mar desse amor</p>
<p>Deixa a baiana rodar<br />
Deixa a cidade a cantar<br />
Que essa vida n&atilde;o &eacute; brincadeira<br />
No mundo inteiro n&atilde;o h&aacute;<br />
Tanta maneira de amar<br />
E eu te amo de qualquer maneira</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Jos&eacute; Carlos Costa Netto e Saul Barbosa<br />
Arranjo: Marquinhos Siqueira e Saul Barbosa<br />
Viol&atilde;o: Saul Barbosa<br />
Percuss&atilde;o: Ivan Huol, Leonardo Reis e Rudson Daniel<br />
Trompete: Joatan Nascimento<br />
Sax tenor: Leti&eacute;res Leite<br />
Sax alto: Andr&eacute; Becker<br />
Trombone: Fred Dantas<br />
Bateria: Marcelo Brasil<br />
Baixo el&eacute;trico: Marquinhos Siqueira<br />
Piano: Mikael Mutti<br />
</p>',
'faixa_mp3' => '1995-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'64',
'faixa_titulo' => 'Estrada do Sert&atilde;o',
'compositor' => '(Jo&atilde;o Pernambuco / Herm&iacute;nio Bello de Carvalho)',
'dolp' => 'Do CD Herm&iacute;nio Bello de Carvalho &ldquo;Cantoria&rdquo;, Saci 107.727 (1995)
',
'letra' => '<p>Coisa que n&atilde;o arrenego<br />
Nem t&atilde;o pouco desapega<br />
Ter gostado de voc&ecirc;<br />
Foi gostar desenchavido<br />
Encruado, recolhido<br />
De ningu&eacute;m se aperceber</p>
<p>Matutando vou na estrada<br />
Nos meus &oacute;io a passarada<br />
Faz um ninho pra voc&ecirc;<br />
Juriti me espreita triste<br />
E a jandaia n&atilde;o resiste<br />
Chora junto por voc&ecirc;</p>
<p>Nos teus &oacute;io faz clar&atilde;o<br />
&Eacute; um verde, um azul&atilde;o<br />
Ti&ecirc; sangue, furta cor<br />
Que me d&aacute; desassossego<br />
Que me suga que nem morcego<br />
Mangando que &eacute; beija-flor</p>
<p>N&atilde;o me encrespe a vida assim<br />
J&aacute; me basta o que de mim<br />
Essa vida ca&ccedil;oou<br />
N&atilde;o me faz essa gra&ccedil;ola<br />
De me abrir essa gaiola<br />
Pra depois n&atilde;o me prender</p>
<p>Canta firme juriti<br />
E me entoa uma can&ccedil;&atilde;o<br />
Sabi&aacute; me ro&ccedil;a aqui, ah sabi&aacute;<br />
Bem de junto ao cora&ccedil;&atilde;o</p>
<p>Pousa aqui meu colibri<br />
V&ecirc; se tu tem pena de eu<br />
Quero ser teu bacuri<br />
Quero ser de v&oacute;smic&ecirc;<br />
Quanto mais c&ecirc; desfeiteia, me despreza<br />
Mais me arrasto pra voc&ecirc;</p>',
'creditos' => '<p>Arranjo: Leandro Braga<br />
Viol&atilde;o e viol&atilde;o de 10 cordas: Jo&atilde;o Lyra<br />
Viol&atilde;o tenor: Pedro Amorim<br />
Acordeom: Sivuca</p>',
'faixa_mp3' => '1995-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'61',
'faixa_titulo' => 'Viola de Penedo',
'compositor' => '(Luiz Bandeira)',
'dolp' => 'Do CD &ldquo;Clara Nunes com vida&rdquo;, EMI 835.657-2 (1995)<br />
Com:<strong> Clara Nunes</strong>
',
'letra' => '<p>Lingo, lingo, lingo, lingo<br />
A viola de penedo toca ponteado<br />
Bongo, bongo, bongo, bongo<br />
&Eacute; zabumba a noite toda no coco rodado</p>
<p>Zeca Tum&eacute; de Porto Calvo (roda &ecirc;, rod&aacute;)<br />
Num coco em Jaboat&atilde;o (roda &ecirc;, rod&aacute;)<br />
Fez todo mundo dar risada<br />
Na primeira umbigada<br />
Que levou sentou no ch&atilde;o</p>
<p>Coco que tem mulh&eacute; bonita (roda &ecirc;, rod&aacute;)<br />
A noite passa e ningu&eacute;m sente (roda &ecirc;, rod&aacute;)<br />
Entrou na roda, fica preso<br />
Tudo que &eacute; home aceso<br />
Dando umbigada na gente</p>
<p>A fazer coisa que eu n&atilde;o gosto (roda &ecirc;, rod&aacute;)<br />
Prefiro ir presa e passar fome (roda &ecirc;, rod&aacute;)<br />
Morro dizendo que num quero<br />
Num aceito, num tolero<br />
Dan&ccedil;a de home com home</p>
<p>Cabra enxerido eu dou cacha&ccedil;a (roda &ecirc;, rod&aacute;)<br />
E finjo que bebo com ele (roda &ecirc;, rod&aacute;)<br />
Se ele fica bebo e dorme<br />
Num tem talvez nem conforme<br />
V&atilde;o rodar com a mul&eacute; dele</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Paulo C&eacute;sar Pinheiro e Jos&eacute; Milton<br />
Projeto: Jos&eacute; Milton e Gerald Seligman<br />
Arranjo, acordeom e colher: Sivuca<br />
Viol&atilde;o: H&eacute;lio Delmiro<br />
Viol&atilde;o 7 cordas: Dino 7 Cordas<br />
Viola 10 cordas: Z&eacute; Menezes<br />
Baixo el&eacute;trico: Luiz&atilde;o Maia<br />
Bateria: Wilson das Neves<br />
Ritmo: Cabelinho, Elizeu Felix, Gordinho, Jorginho do Pandeiro e Luna<br />
Vocais: Barbosa, Dinorah, Francinete, Genaro, Ju&ccedil;ara Mar&ccedil;al e Zenilda Barroso<br />
</p>',
'faixa_mp3' => '1995-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'59',
'faixa_titulo' => 'Noturna',
'compositor' => '(Ivan Lins / Vitor Martins)',
'dolp' => 'Do CD com a trilha sonora da novela &ldquo;Explode cora&ccedil;&atilde;o&rdquo;, Som Livre 2072-1 (1995)
',
'letra' => '<p>Vindo de uma luz<br />
Algu&eacute;m tocou em mim<br />
Fez o que bem quis<br />
Tomou conta de mim</p>
<p>Cheia de emo&ccedil;&atilde;o<br />
Cantou com a minha pr&oacute;pria voz<br />
E fez essa can&ccedil;&atilde;o pra n&oacute;s<br />
E partiu</p>
<p>Uma can&ccedil;&atilde;o de amor<br />
Que h&aacute; muito n&atilde;o se faz<br />
Uma can&ccedil;&atilde;o, amor<br />
Pra quem amou demais</p>
<p>Teve o poder<br />
Teve a loucura e lucidez<br />
Certeza de que dessa vez<br />
Nos uniu</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o musical: Mariozinho Rocha<br />
Produ&ccedil;&atilde;o musical: Alberto Rosemblit<br />
<em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em><br />
</p>',
'faixa_mp3' => '1995-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'62',
'faixa_titulo' => 'Caboca',
'compositor' => '(Ary Barroso / Jos&eacute; Carlos Burle)',
'dolp' => 'Do CD &ldquo;Ary Barroso &ndash; Songbook vol. 2&rdquo;, Lumiar Discos LD 02/95 (1995)
',
'letra' => '<p>Caboca, quando os teus olhos me olharam<br />
E os teus bra&ccedil;os me abra&ccedil;aram<br />
Quase que enlouqueci</p>
<p>Caboca, da boca cheia de vi&ccedil;o<br />
Me pusesse um tal feiti&ccedil;o<br />
Que nunca mais te esqueci</p>
<p>Caboca, fugi pro meio do mato<br />
Sem saber que teu retrato<br />
Trazia no cora&ccedil;&atilde;o</p>
<p>Caboca, que nas curvas do caminho<br />
As curvas do teu corpinho<br />
Me vinham &agrave; imagina&ccedil;&atilde;o</p>
<p>Caboca, sapoti de seiva forte<br />
Das matas virgens do norte<br />
Perfumadas como o qu&ecirc;</p>
<p>Caboca, caboca simplicidade<br />
Nem mesmo aqui na cidade<br />
Posso de ti me esquecer</p>
<p>Caboca, juro por Nossa Senhora<br />
Que por este mundo afora<br />
Coisa igual n&atilde;o pode haver</p>
<p>Caboca, &eacute; o Brasil bem brasileiro<br />
Brasil verde, hospitaleiro<br />
Que descubro em voc&ecirc;</p>',
'creditos' => '<p>Arranjo: Leandro Braga<br />
Viola de arco: Frederick Stephany<br />
Violinos: Giancarlo Pareschi e Jos&eacute; Alves da Silva<br />
Violoncelo: M&aacute;rcio Eymard Mallard<br />
Viol&atilde;o e viola de 10 cordas: Marco Pereira<br />
Acordeom: Oswaldinho do Acordeom<br />
</p>
',
'faixa_mp3' => '1995-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'66',
'faixa_titulo' => 'A Violeira',
'compositor' => '(Chico Buarque / Tom Jobim)',
'dolp' => 'Do CD &ldquo;Antonio Carlos Jobim &ndash; Songbook vol. 4&rdquo;, Lumiar Discos LD 108.303 (1996)
',
'letra' => '<p>Desde menina<br />
Caprichosa e nordestina<br />
Que eu sabia<br />
A minha sina era no Rio vir morar<br />
Em Araripe eu topei com o chofer dum jipe<br />
Que descia pra Sergipe<br />
Pro servi&ccedil;o militar</p>
<p>Esse maluco me largou em Pernambuco<br />
Quando um cara de trabuco<br />
Me pediu pra namorar<br />
Mais adiante<br />
Num estado interessante<br />
Um caixeiro viajante me levou pra Macap&aacute;</p>
<p>Uma cigana revelou que a minha sorte<br />
Era ficar naquele Norte<br />
Eu n&atilde;o queria acreditar<br />
Juntei os trapos com um velho marinheiro<br />
Viajei no seu cargueiro<br />
Que encalhou no Cear&aacute;</p>
<p>Voltei pro Crato, fui fazer artesanato<br />
De barro bom e barato<br />
Pra mode economizar<br />
Eu era um broto, tamb&eacute;m fiz muito garoto<br />
Um mais bem feito que o outro<br />
Eles s&oacute; faltam falar</p>
<p>Juntei a prole e me atirei no S&atilde;o Francisco<br />
Enfrentei raio, corisco<br />
Correnteza e coisa m&aacute;<br />
Inda arrumei com um artista em Pirapora<br />
Mais um filho e vim-me embora<br />
C&aacute; no Rio vim parar</p>
<p>Ver Ipanema foi que nem beber jurema<br />
Que cen&aacute;rio de cinema<br />
Que poema &agrave; beira-mar<br />
E n&atilde;o tem tira, nem doutor, nem ziguizira<br />
Quero ver quem &eacute; que tira<br />
N&oacute;s aqui desse lugar<br />
E n&atilde;o tem tira, nem doutor, nem ziguizira<br />
Quero ver quem &eacute; que tira<br />
N&oacute;s aqui desse lugar</p>
<p>Ser&aacute; verdade que eu cheguei nessa cidade<br />
Pra primeira autoridade<br />
Resolver me escorra&ccedil;ar<br />
Com a tralha inteira remontar a Mantiqueira<br />
At&eacute; chegar na corredeira<br />
O S&atilde;o Francisco me levar</p>
<p>Me distrair nos bra&ccedil;os de um barqueiro sonso<br />
Despencar na Paulo Afonso<br />
No oceano me afogar<br />
Perder os filhos em Fernando de Noronha<br />
E voltar morta de vergonha<br />
Pro sert&atilde;o de Quixad&aacute;</p>
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
N&oacute;s aqui desse lugar</p>',
'creditos' => '<p>Arranjo e piano: Leandro Braga<br />
Percuss&atilde;o: Beto Cazes<br />
Baixo el&eacute;trico: Boror&oacute;<br />
Flauta: Chico S&aacute;<br />
Viola: Jo&atilde;o Lyra<br />
Sax soprano: Z&eacute; Nogueira<br />
</p>',
'faixa_mp3' => '1996-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'67',
'faixa_titulo' => 'Dois Rubis',
'compositor' => '(Petr&uacute;cio Amorim)',
'dolp' => 'Do CD Fl&aacute;vio Jos&eacute; &ldquo;Filho do dono&rdquo;, L.B.C. Grava&ccedil;&otilde;es 101.303 (1996)<br />
Com:<strong> Fl&aacute;vio Jos&eacute;</strong>
',
'letra' => '<p>&Eacute; isso a&iacute; minha amiga<br />
Voc&ecirc; arrasa a minha vida<br />
Acende o meu cora&ccedil;&atilde;o<br />
Seu corpo quando me aquece<br />
Eu sinto at&eacute; que parece<br />
Ter o calor de um vulc&atilde;o<br />
Desculpe minha companheira<br />
Parece at&eacute; brincadeira<br />
De tanto que t&ocirc; feliz<br />
Pois quando eu sinto o seu beijo<br />
Meus olhos c&aacute; de desejo<br />
Brilham que nem dois rubis</p>
<p>&Eacute; isso a&iacute; meu amigo<br />
Voc&ecirc; arrasa comigo<br />
Acende o meu cora&ccedil;&atilde;o<br />
Seu corpo quando me aquece<br />
Eu sinto at&eacute; que parece<br />
Ter o calor de um vulc&atilde;o<br />
Desculpe meu companheiro<br />
Parece at&eacute; exagero<br />
De tanto que t&ocirc; feliz<br />
Pois quando eu sinto o seu beijo<br />
Meus olhos c&aacute; de desejo<br />
Brilham que nem dois rubis</p>
<p>O amor fez tanto volume<br />
Que &agrave;s vezes sinto ci&uacute;me<br />
Se tu demoras chegar<br />
Eu j&aacute; pedi para a lua<br />
Pra clarear toda a rua<br />
Quando tu fores passar<br />
Voc&ecirc; tem tudo que eu gosto<br />
E voc&ecirc; me faz t&atilde;o feliz<br />
Pois quando eu sinto o seu beijo<br />
Meus olhos c&aacute; de desejo<br />
Brilham que nem dois rubis<br />
Pois quando eu sinto o seu beijo<br />
Meus olhos c&aacute; de desejo<br />
Brilham que nem dois rubis</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o executiva, arranjo e acordeom: Fl&aacute;vio Jos&eacute;<br />
Baixo: Ulisses Barbosa<br />
Bateria: Wellington (Lango)<br />
Zabumba e tri&acirc;ngulo: Quartinha<br />
</p>',
'faixa_mp3' => '1996-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'68',
'faixa_titulo' => 'Manifesta',
'compositor' => '(Dod&ocirc; / Osmar Macedo)',
'dolp' => 'Do CD Osmar Macedo &ldquo;Filhos da alegria&rdquo;, Eldorado 946.075 (1996)
',
'letra' => '<p>O som do Hava&iacute; j&aacute; era<br />
Mexicano, quimera<br />
O fado de cristal nunca fez mal<br />
Tamb&eacute;m o pasodoble j&aacute; passara para tr&aacute;s<br />
E at&eacute; o tango n&atilde;o se ouve mais</p>
<p>Som do trio<br />
Guitarra baiana no ar<br />
Frevo quente da Bahia<br />
N&atilde;o preciso do rock<br />
S&oacute; preciso do toque<br />
Envolvente, legal<br />
Para o meu carnaval<br />
Vamos dan&ccedil;ar, vamos cantar<br />
Nossa m&uacute;sica popular</p>',
'creditos' => '<p>Baixo: Betinho<br />
Guitarra base: Paulo Santana<br />
Guitarra baiana: Armandinho<br />
Guitarra havaiana: Osmar Macedo<br />
Teclados: Yacoce Sim&otilde;es<br />
Bateria: Toinho Batera<br />
Percuss&atilde;o: Daniel<br />
</p>',
'faixa_mp3' => '1996-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'70',
'faixa_titulo' => 'Bodas de Frevo',
'compositor' => '(Toinho Alves / Aldir Blanc)',
'dolp' => 'Do CD Quinteto Violado &ldquo;25 anos n&atilde;o s&atilde;o 25 dias&rdquo;, Atra&ccedil;&atilde;o ATR 32.004 (1996)<br />
Com:<strong> Quinteto Violado</strong>
',
'letra' => '<p>Eu vi, ol&aacute;<br />
Um Quinteto Violando<br />
Violalirando<br />
Esse Brasil patife</p>
<p>Eu vi, ol&aacute;<br />
Em Olinda e no Recife<br />
Um Quinteto com cacife<br />
Com cacife pra mostrar</p>
<p>Voil&agrave;, viola<br />
Tua voz vol&aacute;til<br />
Atirei um pau no gato<br />
E o bichano fez miau<br />
Comemomiando 25 anos<br />
N&atilde;o s&atilde;o 25 dias<br />
Cada dia &eacute; carnaval</p>
<p>Vem menina, transa o passo e ferve<br />
Com essa verve, pr&oacute;pria dos pernambucanos<br />
Vem crian&ccedil;a, fervoroso &eacute; o frevo<br />
Colhe o trevo dos meus 25 anos</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o musical: Toinho Alves e Dudu Alves<br />
Viol&atilde;o, viola e voz: Marcelo Melo<br />
Teclados: Dudu Alves<br />
Flauta e viol&atilde;o: Ciano Alves<br />
Percuss&atilde;o e voz: Roberto Medeiros<br />
Baixo e voz: Toinho Alves<br />
Guitarra: Fred Arara Andrade<br />
</p>',
'faixa_mp3' => '1996-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'69',
'faixa_titulo' => 'Aquele Abra&ccedil;o',
'compositor' => '(Gilberto Gil)',
'dolp' => 'Do CD single &ldquo;Rio 2004&rdquo;, Natasha Records NAT 2004 (1996)<br />
Com:<strong> v&aacute;rios artistas</strong>
',
'letra' => '<p>O Rio de Janeiro continua lindo<br />
O Rio de Janeiro continua sendo<br />
O Rio de Janeiro, fevereiro e mar&ccedil;o</p>
<p>Al&ocirc;, al&ocirc;, Realengo &ndash; aquele abra&ccedil;o!<br />
Al&ocirc;, torcida do Flamengo &ndash; aquele abra&ccedil;o!<br />
Al&ocirc;, al&ocirc;, Realengo &ndash; aquele abra&ccedil;o!<br />
Al&ocirc;, torcida do Flamengo &ndash; aquele abra&ccedil;o!</p>
<p>Chacrinha continua balan&ccedil;ando a pan&ccedil;a<br />
E buzinando a mo&ccedil;a e comandando a massa<br />
E continua dando as ordens no terreiro</p>
<p>Al&ocirc;, al&ocirc;, seu Chacrinha &ndash; velho guerreiro<br />
Al&ocirc;, al&ocirc;, Terezinha, Rio de Janeiro<br />
Al&ocirc;, al&ocirc;, seu Chacrinha &ndash; velho palha&ccedil;o<br />
Al&ocirc;, al&ocirc;, Terezinha &ndash; aquele abra&ccedil;o!</p>
<p>Al&ocirc;, mo&ccedil;a da favela &ndash; aquele abra&ccedil;o!<br />
Todo mundo da Portela &ndash; aquele abra&ccedil;o!<br />
Todo m&ecirc;s de fevereiro &ndash; aquele passo!<br />
Al&ocirc;, Banda de Ipanema &ndash; aquele abra&ccedil;o!</p>
<p>Meu caminho pelo mundo eu mesmo tra&ccedil;o<br />
A Bahia j&aacute; me deu r&eacute;gua e compasso<br />
Quem sabe de mim sou eu &ndash; aquele abra&ccedil;o!<br />
Pra voc&ecirc; que meu esqueceu &ndash; aquele abra&ccedil;o!</p>
<p>Al&ocirc;, Rio de Janeiro &ndash; aquele abra&ccedil;o!<br />
Todo o povo brasileiro &ndash; aquele abra&ccedil;o!</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o art&iacute;stica, produ&ccedil;&atilde;o musical, arranjo, baixo, programa&ccedil;&atilde;o de bateria eletr&ocirc;nica e sample: Liminha<br />
Programa&ccedil;&atilde;o de bateria eletr&ocirc;nica e percuss&atilde;o: Ramiro Musotto<br />
Viol&atilde;o: Gilberto Gil<br />
Teclados, arranjo de metais e sample: Willian Magalh&atilde;es<br />
Guitarra: Fernando Vidal<br />
Percuss&atilde;o: Armando Mar&ccedil;al, Paulinho da Aba, Ov&iacute;dio Brito e Marcelinho Moreira<br />
Scratch: Rodrigo DS Nuts<br />
Teclados e efeitos: Chico Neves<br />
Vozes: Adriana Calcanhotto, Alcione, Ang&eacute;lica, Arnaldo Antunes, Baba C&oacute;smica, Baby do Brasil, Beth Carvalho, Caetano Veloso, Chico C&eacute;sar, Daniela Mercury, Da&uacute;de, Djavan, Edu Lobo, Elba Ramalho, Elymar Santos, Erasmo Carlos, Evandro Mesquita, Fagner, Fernanda Abreu, Fl&aacute;vio Venturini, Gabriel o Pensador, Geraldo Azevedo, Gilberto Gil, Ivo Meirelles, Jerry Adriani, Joanna, Leo Jaime, Marcelo Yuka, Marley e D&eacute;lcio (Grupo Ra&ccedil;a), Moreira da Silva, Nana Caymmi, Nando Reis, Netinho (Negritude Jr.), Ney Matogrosso, Orlando Morais, Paulinho Moska, Paulo Ricardo, Pel&eacute;, Renata Arruda, Roberta Miranda, Roberto Frejat, Rosana, Sandra de S&aacute;, Simone, Tiririca, Toni Garrido e Zez&eacute; Motta<br />
</p>',
'faixa_mp3' => '1996-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'65',
'faixa_titulo' => 'Beija-me/Eu Quero um Samba/Coisinha do Pai (Ao Vivo)',
'compositor' => '(Roberto Martins / Mario Rossi &ndash; Haroldo Barbosa / Janet de Almeida &ndash; Almir Guineto / Jorge Arag&atilde;o / Luiz Carlos da Vila)',
'dolp' => 'Do CD &ldquo;Casa de samba&rdquo;, Polygram 532.500-2 (1996)<br />
Com:<strong> Jair Rodrigue</strong>
',
'letra' => '<p><strong>Beija-me</strong><br/>
<em>(Roberto Martins / Mario Rossi)</em></p>
<p>Beija-me<br />
Deixa o teu rosto coladinho ao meu<br />
Beija-me<br />
Eu dou a vida pelo beijo teu<br />
Beija-me<br />
Quero sentir o teu perfume<br />
Beija-me com todo o teu amor<br />
Sen&atilde;o eu morro de ci&uacute;me</p>
<p>Ai, ai, ai, que coisa boa<br />
O beijinho do meu bem<br />
Dito assim parece &agrave; toa<br />
O feiti&ccedil;o que ele tem</p>
<p>Ai, ai, ai, que coisa louca<br />
Que gostinho divinal<br />
Quando eu ponho a minha boca<br />
Nos seus l&aacute;bios de coral</p>
<p>
<strong>Eu Quero Um Samba</strong> <br />
<em>(Haroldo Barbosa / Janet de Almeida)</em></p>
<p>Eu quero um samba feito s&oacute; pra mim<br />
Eu quero a melodia feita assim<br />
(Quero sambar, quero sambar)<br />
Quero sambar porque no samba eu sei que vou<br />
(Me acabar, me beirar, me espalhar)<br />
A noite inteira at&eacute; o sol raiar</p>
<p>Ai, quando um samba acaba<br />
Eu fico triste ent&atilde;o<br />
Vai melancolia, eu quero alegria<br />
Dentro do meu cora&ccedil;&atilde;o</p>
<p><strong>Coisinha do Pai</strong><br />
<em>(Almir Guineto / Jorge Arag&atilde;o / Luiz Carlos da Vila)</em>
</p>
<p>&Ocirc; coisinha t&atilde;o bonitinha do pai<br />
&Ocirc; coisinha t&atilde;o bonitinha do pai</p>
<p>Voc&ecirc; vale ouro<br />
Todo o meu tesouro<br />
T&atilde;o formosa da cabe&ccedil;a aos p&eacute;s<br />
Vou lhe amando, lhe adorando<br />
E digo mais uma vez<br />
Agrade&ccedil;o a Deus porque lhe fez</p>
<p>Charmosa, t&atilde;o dengosa<br />
S&oacute; me deixa prosa<br />
Tesouro, voc&ecirc; vale ouro<br />
Agrade&ccedil;o a Deus porque lhe fez</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o e arranjo: Rildo Hora<br />
Piano e teclados: Fernando Merlino<br />
Baixo el&eacute;trico: Jamil Joanes<br />
Bateria: Jorge Luiz Gomes<br />
Cavaquinho: Henrique Cazes<br />
Viol&otilde;es: Cl&aacute;udio Jorge, Neco, Paul&atilde;o 7 cordas e Z&eacute; Carlos<br />
Percuss&atilde;o: Beloba, Marcos Esguleba e Ov&iacute;dio Brito<br />
Tamborim: Barney<br />
Vocais: Cl&aacute;udia Telles, Fab&iacute;ola Pires, Dinorah (Affonsina Pires) e Patr&iacute;cia da Hora<br />
</p>',
'faixa_mp3' => '1996-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'80',
'faixa_titulo' => 'Santa Teresa',
'compositor' => '(Gui Guimar&atilde;es / Marinaldo Guimar&atilde;es)',
'dolp' => 'Do CD &ldquo;Acorda Bamba&rdquo;, Independente/Clave Produ&ccedil;&otilde;es 199.001.690 (1997)<br />
Com:<strong> Acorda Bamba</strong>
',
'letra' => '<p>Em Santa Teresa<br />
Tenho os meus prazeres<br />
Rei n&atilde;o tem coroa<br />
L&aacute; no fogueteiro</p>
<p>Em cima do morro, oi Ioi&ocirc;<br />
Tem pipa no alto, ai Iai&aacute;<br />
Em cima do morro, oi Ioi&ocirc;<br />
Tem pipa no alto, ai Iai&aacute;</p>
<p>E a gente do asfalto<br />
Do Rio de Janeiro<br />
E a gente do asfalto<br />
Do Rio de Janeiro</p>
<p>Correndo atr&aacute;s das pipas<br />
Bal&atilde;o soltou foi l&aacute; de cima do morro<br />
Foi de cima do morro<br />
De cima do morro</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o e dire&ccedil;&atilde;o musical: Marco Andr&eacute;<br />
Arranjo: Acorda Bamba e Marco Andr&eacute;<br />
Voz: Gui Guimar&atilde;es e Elba Ramalho<br />
Bateria: Jean Phillipe<br />
Baixo: Rodrigo Sebastian<br />
Viol&atilde;o: Breno Poubel<br />
Cavaquinho: Gui Guimar&atilde;es<br />
Guitarra: Bernardo Dantas<br />
Flauta transversa: Alexandre Bittencourt<br />
Percuss&atilde;o: Lucas Amorim<br />
Pandeirola: J&oacute;<br />
Palmas: Acorda Bamba<br />
</p>',
'faixa_mp3' => '1997-11.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'76',
'faixa_titulo' => 'Mulher Rendeira',
'compositor' => '(Z&eacute; do Norte)',
'dolp' => 'Do CD com a trilha sonora do filme &ldquo;O cangaceiro&rdquo;, BMG 7.432.151.321-2 (1997)
',
'letra' => '<p>Ol&ecirc;, mul&eacute; rendeira<br />
Ol&ecirc;, mul&eacute; rend&aacute;<br />
Tu me ensina a fazer renda<br />
Que eu te ensino a namor&aacute;</p>
<p>Andei o sert&atilde;o inteiro<br />
Levando um menino bom<br />
Sou mul&eacute; de muita briga<br />
N&atilde;o h&aacute; quem me diga n&atilde;o</p>
<p>Ol&ecirc;, mul&eacute; rendeira<br />
Ol&ecirc;, mul&eacute; renda<br />
Chorou, por mim n&atilde;o fica<br />
Solu&ccedil;ou, vai no born&aacute;</p>
<p>Mul&eacute; de cangaceiro<br />
N&atilde;o tem medo de careta<br />
Quando v&ecirc; a coisa preta<br />
Sai rolando pelo ch&atilde;o</p>
<p>P&otilde;e o dedo no gatilho<br />
Toca fogo no sert&atilde;o<br />
Tenente perde a patente<br />
Coron&eacute; perde o gal&atilde;o</p>
<p>Meu sangue corre nas veia<br />
Cora&ccedil;&atilde;o sai do lugar<br />
Nos macaco da puli&ccedil;a<br />
Mando bala pra mat&aacute;</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o musical: Luca Salvia<br />
Arranjo e reg&ecirc;ncia: Maestro Vicente (Vitch&eacute;) Salvia<br />
Assistente: Ot&aacute;vio de Moraes<br />
Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
</p>',
'faixa_mp3' => '1997-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'76',
'faixa_titulo' => 'Se Eu Soubesse',
'compositor' => '(Antonio dos Santos)',
'dolp' => 'Do CD com a trilha sonora do filme &ldquo;O cangaceiro&rdquo;, BMG 7.432.151.321-2 (1997)
',
'letra' => '<p>Se eu soubesse que chorando<br />
Empato a tua viagem<br />
Meus olhos eram dois rios<br />
Que n&atilde;o te davam passagem</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o musical: Luca Salvia<br />
Arranjo e reg&ecirc;ncia: Maestro Vicente (Vitch&eacute;) Salvia<br />
Assistente: Ot&aacute;vio de Moraes<br />
<em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em>
</p>',
'faixa_mp3' => '1997-7.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'74',
'faixa_titulo' => 'Estrela do Mar',
'compositor' => '(Marino Pinto / Paulo Soledade)',
'dolp' => 'Do CD &ldquo;Tributo a Dalva de Oliveira&rdquo;, Albatroz 3208012-1 (1997)
',
'letra' => '<p>Um pequenino gr&atilde;o de areia<br />
Que era um pobre sonhador<br />
Olhando o c&eacute;u viu uma estrela<br />
E imaginou coisas de amor</p>
<p>Passaram anos, muitos anos<br />
Ela no c&eacute;u, ele no mar<br />
Dizem que nunca o pobrezinho<br />
Pode com ela encontrar</p>
<p>Se houve ou se n&atilde;o houve<br />
Alguma coisa entre eles dois<br />
Ningu&eacute;m soube at&eacute; hoje explicar<br />
O que h&aacute; de verdade<br />
&Eacute; que depois, muito depois<br />
Apareceu a estrela do mar</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o e viol&atilde;o: Roberto Menescal<br />
Arranjo: Fernando Merlino e Roberto Menescal<br />
Teclados e coberturas: Fernando Merlino<br />
Baixo: Nema Antunes<br />
Percuss&atilde;o: Raymundo Bittencourt e Dado Brother<br />
Bateria: Pantico Rocha e Raymundo Bittencourt<br />
</p>',
'faixa_mp3' => '1997-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'72',
'faixa_titulo' => 'Lambada de Serpente',
'compositor' => '(Djavan / Cacaso)',
'dolp' => 'Do CD &ldquo;Djavan &ndash; Songbook vol. 1&rdquo;, Lumiar Discos LD 01/97 108.440 (1997)
',
'letra' => '<p>Cuidar dum p&eacute; de milho<br />
Que demora na semente<br />
Meu pai disse<br />
&ldquo;Meu filho, noite fria, tempo quente&rdquo;</p>
<p>Lambada de serpente<br />
A trai&ccedil;&atilde;o me enfeiti&ccedil;ou<br />
Quem tem amor ausente<br />
J&aacute; viveu a minha dor</p>
<p>Do ch&atilde;o da minha terra<br />
Um lamento de corrente<br />
Um gr&atilde;o de p&eacute; de guerra<br />
Pra colher dente por dente</p>',
'creditos' => '<p>Idealiza&ccedil;&atilde;o e produ&ccedil;&atilde;o: Almir Chediak<br />
Arranjo e piano: Leandro Braga<br />
Viol&atilde;o: Jo&atilde;o Lira<br />
Baixo: Boror&oacute;<br />
Percuss&atilde;o: Beto Cazes<br />
Sax soprano: Z&eacute; Nogueira<br />
Flautas: Chico S&aacute;<br />
</p>',
'faixa_mp3' => '1997-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'73',
'faixa_titulo' => 'Cravo Vermelho',
'compositor' => '(Carlos Fernando)',
'dolp' => 'M&uacute;sica incidental: &ldquo;Quem me deu foi Lia&rdquo; (Baracho) &ndash; <strong>Lia de Itamarac&aacute;</strong><br />Do CD &ldquo;Recirandar&rdquo;, San Francisco/Eldorado SF 5057 (1997)
',
'letra' => '<p>Quintais, varandas de Olinda<br />
Farol, ladeiras, luar<br />
Descansa teus olhos mirante<br />
N&atilde;o tem marinheiros no mar</p>
<p>Eu sou daqui mas vim de longe<br />
Eu sou daqui mas vim de longe<br />
Contando estrelas naveguei na barca grande<br />
Contando estrelas naveguei na barca grande</p>
<p>Cravo vermelho na lapela<br />
Cravo vermelho na lapela<br />
A madrugada eu vou varar junto com elas<br />
A madrugada eu vou varar junto com elas</p>
<p>Tem rosas de cor morena<br />
Uma verbena pra me enfeitar<br />
S&atilde;o flores de carne e osso<br />
Pro meu pesco&ccedil;o, pro meu colar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Carlos Fernando<br />
Arranjo de metais: Maestro Duda<br />
Dire&ccedil;&atilde;o musical, arranjo de base e teclados: Tovinho<br />
Guitarra: Luciano Oliveira<br />
Baixo: Mongol<br />
Bateria: Carlinhos<br />
Saxofones: Duda, Rafael, Costinha e Gilberto<br />
Trompetes: Roque, Marquinhos e Alexandre<br />
Vocais: Dora de Paula, Sheila e Fabr&iacute;cio</p>',
'faixa_mp3' => '1997-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'77',
'faixa_titulo' => 'Pra Voc&ecirc; (Ao Vivo)',
'compositor' => '(Silvio Cesar)',
'dolp' => 'Do CD &ldquo;Casa da bossa&rdquo;, Polygram 536.061-2 (1997)<br />
Com:<strong> S&iacute;lvio Cesar</strong>
',
'letra' => '<p>Pra voc&ecirc; eu guardei<br />
Um amor infinito<br />
Pra voc&ecirc; procurei<br />
O lugar mais bonito<br />
Pra voc&ecirc; eu sonhei<br />
O meu sonho de paz<br />
Pra voc&ecirc; me guardei demais<br />
Demais</p>
<p>Se voc&ecirc; n&atilde;o voltar<br />
O que fa&ccedil;o da vida?<br />
N&atilde;o sei mais procurar<br />
A alegria perdida<br />
Eu n&atilde;o sei nem por que<br />
Terminou tudo assim<br />
Ah, se eu fosse voc&ecirc;<br />
Eu voltava pra mim<br />
Voltava sim<br />
Ah, se eu fosse voc&ecirc;<br />
Eu voltava pra mim</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Jos&eacute; Milton<br />
Dire&ccedil;&atilde;o art&iacute;stica: Max Pierre<br />
Coordena&ccedil;&atilde;o musical, arranjo e piano: C&eacute;sar Camargo Mariano<br />
Viol&atilde;o: Romero Lubambo<br />
Baixo: Nico Assump&ccedil;&atilde;o<br />
Bateria: T&eacute;o Lima<br />
</p>',
'faixa_mp3' => '1997-8.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'75',
'faixa_titulo' => 'Vozes da Seca',
'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas)',
'dolp' => 'Do CD &ldquo;Dominguinhos e convidados cantam Luiz Gonzaga&rdquo;, Velas 11-V224 (1997)<br />
Com:<strong> Dominguinhos</strong>
',
'letra' => '<p>Seu dout&ocirc; os nordestinos t&ecirc;m muita gratid&atilde;o<br />
Pelo aux&iacute;lio dos sulistas nesta seca do sert&atilde;o<br />
Mas dout&ocirc; uma esmola a um homem que &eacute; s&atilde;o<br />
Ou lhe mata de vergonha ou vicia o cidad&atilde;o</p>
<p>&Eacute; por isso que pedimos prote&ccedil;&atilde;o a v&oacute;smic&ecirc;<br />
Home por n&oacute;is escu&iacute;do para as r&eacute;dias do poder<br />
Pois dout&ocirc; dos vinte estados temos oito sem chover<br />
Veja bem, quase a metade do Brasil t&aacute; sem cum&ecirc;</p>
<p>D&ecirc; servi&ccedil;o a nosso povo, encha os rios de barragem<br />
D&ecirc; cumida a pre&ccedil;o baum, n&atilde;o esque&ccedil;a a a&ccedil;udagem<br />
Livre assim n&oacute;is da ismola, que no fim dessa estiagem<br />
Lhe pagamo int&eacute; os juros sem gastar nossa coragem</p>
<p>Se o dout&ocirc; fizer assim salva o povo do sert&atilde;o<br />
Quando um dia a chuva vir, que riqueza pra na&ccedil;&atilde;o!<br />
Nunca mais n&oacute;is pensa em seca, vai d&aacute; tudo neste ch&atilde;o<br />
Como v&ecirc;, nosso destino merc&ecirc; tem na vossa m&atilde;o</p>',
'creditos' => '<p>Arranjo: Heraldo do Monte e M&aacute;rio Manga<br />
Zabumba: D&eacute;o de Ara&uacute;jo<br />
Acordeom: Dominguinhos e Gennaro<br />
Guitarra: Heraldo do Monte<br />
Baixo el&eacute;trico: Toninho Tavares<br />
Bateria: Wellington Soares<br />
Tri&acirc;ngulo: Zazum<br />
Guitarra: Z&eacute; Ant&ocirc;nio<br />
Violinos: Luiz Amato e Alex Braga Ximenes<br />
Violoncelo: Adriana Holtz<br />
Clarinete: Ubaldo Versolato<br />
</p>',
'faixa_mp3' => '1997-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'78',
'faixa_titulo' => 'Forr&oacute; do Chiq-Tak',
'compositor' => '(Arac&iacute;lio Ara&uacute;jo / Pinto do Acordeom)',
'dolp' => 'Do CD Fagner &ldquo;Terral&rdquo;, BMG Brasil 7.432.150.061-2 (1997)<br />
Com:<strong> Fagner</strong>
',
'letra' => '<p>Eu vou botar pra derreter<br />
E ningu&eacute;m vai me segurar<br />
Um forrozinho dessa maneira<br />
A gente dan&ccedil;a a noite inteira<br />
At&eacute; o dia clarear</p>
<p>Chiq-tak, chiq-tak, chiq-tak<br />
&Eacute; o tamanco da neguinha no sal&atilde;o<br />
Chiq tak, chiq tak, chiq tak<br />
Simbora gente que hoje &eacute; dia de S&atilde;o Jo&atilde;o<br />
Chiq tak, chiq tak, chiq tak<br />
&Eacute; o arrastado da chinela no sal&atilde;o<br />
Chiq tak, chiq tak, chiq tak<br />
Eu procurando meu amor na multid&atilde;o</p>
<p>De madrugada o couro comendo<br />
Todo mundo vendo e eu achando bom<br />
Bom, bom, bom, o chamego dela<br />
E o sanfoneiro sem sair do tom</p>',
'creditos' => '<p>Arranjo e teclados: Luiz Ant&ocirc;nio<br />
Baixo e guitarra: Robertinho de Recife<br />
Bateria: Renato Massa<br />
Zabumba: Firmino<br />
</p>',
'faixa_mp3' => '1997-9.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'79',
'faixa_titulo' => 'B&ecirc;-a-B&aacute;',
'compositor' => '(Toquinho / Elifas Andreato)',
'dolp' => '<p>Do CD Toquinho “Canção dos direitos da criança”, Movieplay BS 297 (1997)</p>',
'letra' => '<p><em>A criança tem direito à educação para desenvolver as suas aptidões, suas opiniões e o seu sentimento de responsabilidade moral e social.</em>
</p><p>Quando a gente cresce um pouco<br />
&Eacute; coisa de louco o que fazem com a gente<br />
Tem hora pra levantar<br />
Hora pra se deitar, pra visitar parente<br />
Quando se aprende a falar,<br />
Se come&ccedil;a a estudar, isso n&atilde;o acaba nunca<br />
E s&oacute; vai saber ler<br />
S&oacute; vai saber escrever quem aprender o b&ecirc;-a-b&aacute;<br />
E al&eacute;m do abeced&aacute;rio<br />
Um grande dicion&aacute;rio vamos todos precisar</p>
<p>Com A escrevo amor, com B bola de cor<br />
Com C eu tenho corpo, cara e cora&ccedil;&atilde;o<br />
Com D ao meu dispor escrevo dado e dor<br />
Com E eu sinto emo&ccedil;&atilde;o</p>
<p>Com F falo flor, com G eu grito gol<br />
E com H de haver eu posso harmonizar<br />
Com I desejo ir, com J volto j&aacute;<br />
Com L eu tenho luar</p>
<p>Com M escrevo m&atilde;o, mam&atilde;e, manjeric&atilde;o<br />
Com N digo n&atilde;o e o verbo nascer<br />
Com O eu posso olhar, com P papai e par<br />
Com Q eu quero querer</p>
<p>Com R posso rir, com S sapoti<br />
Com T tamandu&aacute;, com U urubupung&aacute;<br />
Com V juro que vi, com X fa&ccedil;o xixi<br />
No fim o Z da zebra</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Jorge Gambler<br />
Arranjo e viol&atilde;o: Toquinho<br />
Locu&ccedil;&atilde;o infantil: Rodrigo de Freitas<br />
Coro infantil: Tatiana Parra, Cidinha, Sueli Gondim e Tania Lemke<br />
Reg&ecirc;ncia do coro infantil: Teruo Yoshida<br />
Baixo: Ivani Sabino, Jo&atilde;o Mour&atilde;o e Arismar do Esp&iacute;rito Santo<br />
Bateria: Pepa e Parron<br />
Guitarra: Paulo Coelho, Sergio Zurawski e Elias Almeida<br />
Acordeom: Toninho Ferragutti e Oswaldinho<br />
Percuss&atilde;o: Luiz Rabelo e Gambler<br />
</p>',
'faixa_mp3' => '1997-10.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'71',
'faixa_titulo' => 'Olha pro C&eacute;u',
'compositor' => '(Luiz Gonzaga / Jos&eacute; Fernandes)',
'dolp' => 'Do CD &ldquo;Arrai&aacute; da Xuxa&rdquo;, Som Livre 2146-2 (1997)
',
'letra' => '<p>Olha pro c&eacute;u, meu amor<br />
V&ecirc; como ele est&aacute; lindo<br />
Olha praquele bal&atilde;o multicor<br />
Como no c&eacute;u vai sumindo</p>
<p>Foi numa noite igual a esta<br />
Que tu me deste o cora&ccedil;&atilde;o<br />
O c&eacute;u estava assim em festa<br />
Porque era noite de S&atilde;o Jo&atilde;o</p>
<p>Havia bal&otilde;es no ar<br />
Xote e bai&atilde;o no sal&atilde;o<br />
E no terreiro o teu olhar<br />
Que incendiou meu cora&ccedil;&atilde;o</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Michael Sullivan<br />
Arranjo: Luiz Ant&ocirc;nio e Robertinho de Recife<br />
Coprodu&ccedil;&atilde;o e guitarra: Robertinho de Recife<br />
Sanfona: Dominguinhos<br />
Teclados: Luiz Ant&ocirc;nio<br />
Bateria: Renato Massa<br />
Baixo: Jacar&eacute;<br />
Percuss&atilde;o: Paulinho He-Man e Firmino<br />
Vocais: Paquitas, Angela Mattos, Z&eacute; Henrique, Andr&eacute;a Sorvet&atilde;o, Conrado e Alessandra<br />
</p>',
'faixa_mp3' => '1997-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'83',
'faixa_titulo' => 'Dia de Vit&oacute;ria',
'compositor' => '(Marcos Valle / Paulo S&eacute;rgio Valle)',
'dolp' => 'Do CD &ldquo;Marcos Valle &ndash; Songbook 1&rdquo;, Lumiar Discos LD 3803/98 (1998)
',
'letra' => '<p>Manh&atilde; cedo<br />
Um grito jovem sai<br />
Em prece pelo ar<br />
Vencendo o ch&atilde;o e o mar</p>
<p>Ecoando<br />
Em cada cora&ccedil;&atilde;o<br />
Apela pra raz&atilde;o<br />
De um povo de amplo amor</p>
<p>Meu irm&atilde;o vem<br />
De voc&ecirc; preciso<br />
D&ecirc;-me sua m&atilde;o<br />
Sigamos essa voz</p>
<p>Olhe pra tr&aacute;s pra ver<br />
A multid&atilde;o que vem<br />
&Eacute; que o povo acorda e v&ecirc;<br />
Que o mundo &eacute; seu</p>
<p>E nas mesmas ruas<br />
Onde faz as festas<br />
Hoje m&atilde;o na m&atilde;o<br />
Faz o cord&atilde;o do amor</p>
<p>Canta a can&ccedil;&atilde;o da paz<br />
N&atilde;o se cala mais<br />
Abre o peito e grita<br />
Sente que venceu<br />
Quase chorando, ri<br />
Junto a seu irm&atilde;o</p>
<p>Cai a noite<br />
E a multid&atilde;o se vai<br />
No ar ficando a voz<br />
De quem pediu amor</p>
<p>Sinos, cantos<br />
Armas desse amor<br />
Por onde a gente andou<br />
Ecoam a dizer</p>
<p>Que o povo acorda e v&ecirc;<br />
Que o mundo &eacute; seu<br />
Peito aberto<br />
Sente que venceu</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Almir Chediak<br />
Arranjo e piano: Leandro Braga<br />
Acordeom: Crist&oacute;v&atilde;o Bastos<br />
Bateria: Fernando Pereira<br />
Baixo el&eacute;trico: Jos&eacute; Pienasola<br />
Bandolim: Pedro Amorim<br />
</p>',
'faixa_mp3' => '1998-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'85',
'faixa_titulo' => 'Brejo da Cruz',
'compositor' => '(Chico Buarque)',
'dolp' => 'Do CD &ldquo;Brasil s&atilde;o outros 500&rdquo;, Som Livre 5101-2 (1998)<br />
Com:<strong> Miguel Falabella</strong>
',
'letra' => '<p>A novidade<br />
Que tem no Brejo da Cruz<br />
&Eacute; a crian&ccedil;ada<br />
Se alimentar de luz</p>
<p>Alucinados<br />
Meninos ficando azuis<br />
E desencarnando<br />
L&aacute; no Brejo da Cruz</p>
<p>Eletrizados<br />
Cruzam os c&eacute;us do Brasil<br />
Na rodovi&aacute;ria<br />
Assumem formas mil</p>
<p>Uns vendem fumo<br />
Tem uns que viram Jesus<br />
Muito sanfoneiro<br />
Cego tocando blues</p>
<p>Uns t&ecirc;m saudade<br />
E dan&ccedil;am maracatus<br />
Uns atiram pedra<br />
Outros passeiam nus</p>
<p>Mas h&aacute; milh&otilde;es desses seres<br />
Que se disfar&ccedil;am t&atilde;o bem<br />
Que ningu&eacute;m pergunta<br />
De onde essa gente vem</p>
<p>S&atilde;o jardineiros<br />
Guardas noturnos, casais<br />
S&atilde;o passageiros<br />
Bombeiros e bab&aacute;s</p>
<p>J&aacute; nem se lembram<br />
Que existe um Brejo da Cruz<br />
Que eram crian&ccedil;as<br />
E que comiam luz</p>
<p>S&atilde;o faxineiros<br />
Balan&ccedil;am nas constru&ccedil;&otilde;es<br />
S&atilde;o bilheteiras<br />
Baleiros e gar&ccedil;ons</p>
<p>J&aacute; nem se lembram<br />
Que existe um Brejo da Cruz<br />
Que eram crian&ccedil;as<br />
E que comiam luz</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Daniel Souza, Tiago Morenno e Z&eacute; Trindade Netto<br />
Arranjo e teclados: Z&eacute; Am&eacute;rico Bastos<br />
Flauta: David Ganc<br />
Percuss&atilde;o: Gil&oacute; e Paulo Oliveira<br />
Baixo el&eacute;trico: Jacar&eacute;<br />
Guitarra: Marcos Arcanjo<br />
Bateria: Ted Santana<br />
Guitarra: Zepa<br />
</p>',
'faixa_mp3' => '1998-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'85',
'faixa_titulo' => 'Entidade Universal (Eu)',
'compositor' => '(Carlinhos Brown / Carcar&aacute;)',
'dolp' => 'Do CD &ldquo;Brasil s&atilde;o outros 500&rdquo;, Som Livre 5101-2 (1998)<br />
Com:<strong> v&aacute;rios artistas</strong>
',
'letra' => '<p>Sou eu quem l&aacute; fora corre em busca do p&atilde;o<br />
Sou eu quem encara a verdade nessa amplid&atilde;o<br />
Ignoro os sistemas da terra<br />
E essas guerras ocultas e sem paz<br />
Que Deus ou&ccedil;a os meus pedidos<br />
E unifique o mundo mais</p>
<p>Sou eu quem pe&ccedil;o que nos ajude<br />
Que ou&ccedil;a os gritos de paz e perd&atilde;o<br />
Quem tem amor que nunca mude<br />
E quem n&atilde;o tem que encha o cora&ccedil;&atilde;o</p>
<p>Sou eu quem l&aacute; fora corre em busca do p&atilde;o<br />
Sou eu quem encara a verdade nessa amplid&atilde;o<br />
Sou eu quem pe&ccedil;o que nos ajude<br />
Que ou&ccedil;a os gritos de paz e perd&atilde;o<br />
Quem tem amor que nunca mude<br />
E quem n&atilde;o tem que encha o cora&ccedil;&atilde;o</p>
<p>Ignoro os sistemas da terra<br />
E essas guerras ocultas e sem paz<br />
Que Deus ou&ccedil;a os meus pedidos<br />
E purifique o mundo mais, mais</p>
<p>Fogo, &aacute;gua, vida, vida<br />
Fogo, &aacute;gua, vida, vida</p>
<p>&Eacute; Natal no meu pa&iacute;s<br />
Papai Noel chegou<br />
&Eacute; Natal no meu pa&iacute;s<br />
Papai Noel chegou, chegou, chegou</p>',
'creditos' => '<p>Arranjo: Carlinhos Brown, Celso Fonseca e Eduardo Souto Neto<br />
Percuss&atilde;o: Carlinhos Brown<br />
Percuss&atilde;o e programa&ccedil;&atilde;o eletr&ocirc;nica: Ramiro Musotto<br />
Viol&otilde;es: Celso Fonseca<br />
Arregimentador das cordas: Paschoal Perrota<br />
Violinos: Antonella Lima Pareschi : Violino e Ricardo Amado<br />
Viola de arco: Jesu&iacute;na Noronha Passaroto<br />
Violoncelo: M&aacute;rcio Eymard Mallard<br />
Vocais: Alcione, Ant&ocirc;nio N&oacute;brega, Camila Pitanga, Carlinhos Brown, Carlinhos de Jesus, Carolina Ferraz, Chico Buarque, Daniel, Daniela Mercury, Djavan, Du Mosc&oacute;vis, Em&iacute;lio Santiago, Fernanda Abreu, Fernanda Montenegro, Gabriel o Pensador, Gilberto Gil, Hebe Camargo, Ivete Sangalo, Jo&atilde;o Bosco, Lenine, Let&iacute;cia Sabatella, Mait&ecirc; Proen&ccedil;a, Marco Nanini, Maria Beth&acirc;nia, Marieta Severo, Mar&iacute;lia Pera, Marisa Orth, Miguel Falabella, Milton Nascimento, Moreira da Silva, Nana Caymmi, Ney Matogrosso, Paulinho da Viola, Stella Miranda, Velha Guarda da Mangueira, Vera Holtz, Xuxa e Zeca Pagodinho<br />
</p>',
'faixa_mp3' => '1998-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'84',
'faixa_titulo' => 'Sai Man&eacute;',
'compositor' => '(Ariston / Toni Costa)',
'dolp' => 'Do CD Toni Costa &ldquo;A sorte muda&rdquo;, Indie Records IN 0003-2 (1998)<br />
Com:<strong> Toni Costa</strong>
',
'letra' => '<p>Eu sou de paz e ningu&eacute;m me arreda<br />
Sou sangue bom, pode acreditar<br />
Mas dou um boi pra n&atilde;o ir na guerra<br />
E uma boiada pra n&atilde;o voltar, yeah<br />
Se n&atilde;o for &agrave; vera, &eacute; melhor parar, yeah<br />
V&ecirc; se n&atilde;o come&ccedil;a<br />
O que &eacute; dif&iacute;cil pra terminar</p>
<p>N&atilde;o como grama e nem jogo pedra<br />
N&atilde;o sou de ferro pra tolerar<br />
O de cima pisa, o de baixo seca<br />
Meu Deus onde &eacute; que isso vai chegar? &Eacute;...<br />
Quando a coisa aperta<br />
&Eacute; pra arrepiar, &eacute;<br />
Se botar na tela come&ccedil;a a hora do pau quebrar</p>
<p>Como &eacute; que &eacute;? Como &eacute; que &eacute;?<br />
Se &eacute; pra encarar vai dizendo qual &eacute;<br />
E jacar&eacute;? E Barnab&eacute;?<br />
Se duvidar leva at&eacute; de mulher<br />
Que &eacute; que c&ecirc; quer? Que &eacute; que c&ecirc; quer?<br />
E se mancar vou pisar no seu p&eacute;<br />
Rabacu&eacute;, lheguel&eacute;<br />
Vou lhe fazer descascar de colher<br />
Oi sai man&eacute;!</p>
<p>Agora tudo acaba em conversa<br />
N&atilde;o tem conversa pra me levar<br />
Se pro meu lado ningu&eacute;m maneira<br />
Quem &eacute; menino pra maneirar? &Eacute;...<br />
Se esse leita azeda, o mel vai rolar, &eacute;<br />
Traga na tigela que eu vou beber de me lambuzar</p>
<p>De tanta gente hoje abrindo as pernas<br />
O mundo vai de pernas pro ar<br />
O bom cabrito &eacute; bom porque berra<br />
E olha o barraco que eu vou armar, yeah<br />
Pesco&ccedil;o &eacute; canela e se vacilar, yeah<br />
&Eacute; caix&atilde;o e vela<br />
Ajoelhou vai ter que rezar</p>
<p>Sou filho de meu pai, amigo<br />
Por isso n&atilde;o se saia n&atilde;o<br />
Comigo n&atilde;o se engane que eu n&atilde;o paro no port&atilde;o<br />
E se vier com gaiatice<br />
N&atilde;o sou da sua laia, irm&atilde;o<br />
Se for mexer comigo<br />
Tem pecado sem perd&atilde;o</p>
<p>Quem v&ecirc; de fora n&atilde;o considera<br />
Tamb&eacute;m por menos n&atilde;o vou deixar<br />
A minha m&atilde;e n&atilde;o cuidou da pe&ccedil;a<br />
Que a dona encrenca vai grampear, &eacute;<br />
Vou tirar da reta, vou me adiantar, &eacute;<br />
V&ecirc; se n&atilde;o me aperta<br />
Me d&aacute; licen&ccedil;a que eu vou passar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Toni Costa<br />
Arranjo: Toni Costa e Luiz Brasil<br />
Viol&otilde;es, viol&atilde;o (solo), berimbau e caxixi: Luiz Brasil<br />
Violacho: Fernando Nunes<br />
Percuss&atilde;o: Firmino e Marcelo Costa<br />
</p>',
'faixa_mp3' => '1998-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'86',
'faixa_titulo' => 'O Canto Da Ema',
'compositor' => '(Alventino Cavalcanti / Ayres Vianna / Jo&atilde;o do Vale)',
'dolp' => 'Do CD &ldquo;Jackson do Pandeiro revisto e sampleado&rdquo;, BMG Brasil 7.432.155.241-2 (1998)
',
'letra' => '<p>A ema gemeu no tronco do jurem&aacute;<br />
A ema gemeu no tronco do jurem&aacute;</p>
<p>Foi um sinal bem triste, morena<br />
Fiquei a imaginar<br />
Ser&aacute; que &eacute; o nosso amor, morena<br />
Que vai se acabar?</p>
<p>Voc&ecirc; bem sabe que a ema quando canta<br />
Vem trazendo no seu canto um bocado de azar<br />
Eu tenho medo, pois acho que &eacute; muito cedo<br />
Muito cedo meu benzinho<br />
Pra esse amor se acabar</p>
<p>Vem morena, vem, vem, vem<br />
Me beijar, me beijar<br />
D&aacute; um beijo, d&aacute; um beijo<br />
Pra esse medo<br />
Se acabar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Jos&eacute; Milton<br />
Arranjo, reg&ecirc;ncia e sanfona: Sivuca<br />
Guitarra e viol&atilde;o: Jo&atilde;o Lyra<br />
Bateria: T&eacute;o Lima<br />
Percuss&atilde;o: Mingo Ara&uacute;jo e Durval<br />
Vocais: Marcio Lott, Ricardo Magno, Sergio Fontoura e Chico Puppo<br />
</p>',
'faixa_mp3' => '1998-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'91',
'faixa_titulo' => 'Espere por Mim, Morena (Ao Vivo)',
'compositor' => '(Gonzaguinha)',
'dolp' => 'Do CD &ldquo;Casa do forr&oacute;&rdquo;, Universal Music 538.077-2 (1998)<br />
Com:<strong> Chico C&eacute;sar</strong>
',
'letra' => '<p>Espere por mim, morena<br />
Espere que eu chego j&aacute;<br />
O amor por voc&ecirc;, morena<br />
Faz a saudade me apressar</p>
<p>Tire um sono na rede<br />
Deixe a porta encostada<br />
Que o vento da madrugada<br />
J&aacute; me leva pra voc&ecirc;</p>
<p>E antes de acontecer<br />
O sol a barra vir quebrar<br />
Estarei nos teus bra&ccedil;os<br />
Para nunca mais voar</p>
<p>E nas noites de frio<br />
Serei o teu cobertor<br />
Quentarei o teu corpo<br />
Com meu calor</p>
<p>Ah, minha santa, te juro<br />
Por Deus, nosso Senhor<br />
Nunca mais ent&atilde;o, morena<br />
Vou fugir do teu amor</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o e viola: Robertinho de Recife<br />
Acordeom: Chiquinho Chagas<br />
Viol&atilde;o: Jo&atilde;o Lira<br />
Baixo: Paulo Cesar Barros<br />
Teclados: Luiz Antonio<br />
Bateria: Renato Massa<br />
Percuss&atilde;o: Firmino e Z&eacute; Gomes</p>',
'faixa_mp3' => '1998-12.mp3'
] );

ParticipacoesExtras::create( [
'participacoes_id' =>'81',
'faixa_titulo' => 'Meu pequeno Hippolyte',
'compositor' => '(Carlos Eugênio Paz / Adayla Barbosa / Cristina Behring)',
'dolp' => 'Da trilha sonora da peça “Allan Kardec – Um olhar para a eternidade” (inédita em disco), 1997
',
'letra' => '<p>Meu pequeno Hippolyte, meu menino<br />
Pequenino em meus braços, em meu sonho<br />
De onde estou te vejo um astro<br />
De luminosa intensidade<br />
Meu menino Hippolyte</p>

<p>Operário do Cristo<br />
Mensageiro da luz<br />
E da verdade<br />
Que se expande e ilumina toda a humanidade<br />
Com divino consolo</p>

<p>Mon petit Hippolyte<br />
Mon petit Hippolyte<br />
Sê meu menino ainda<br />
Sê meu menino sempre</p>',
'creditos' => '',
'faixa_mp3' => '1997 - Meu pequeno Hippolyte.mp3'
] );

ParticipacoesExtras::create( [
'participacoes_id' =>'82',
'faixa_titulo' => 'Paris',
'compositor' => '(Alberto Ribeiro / Alcyr Pires Vermelho)',
'dolp' => 'Do CD &ldquo;Rumo ao penta&rdquo;, BMG Brasil 7.432.157.326-2 (1998)<br />
Vers&atilde;o com <em>sample</em> de <strong>Carmen Miranda</strong> no single &ldquo;Paris&rdquo;, BMG VP 0266 (1997)
',
'letra' => '<p>Paris! Paris!<br />
Teu rio &eacute; o Rio Sena<br />
Paris! Paris!<br />
Tens loura, mas n&atilde;o tens morena<br />
Que lindas mulheres de olhos azuis<br />
Tu &eacute;s a Cidade Luz<br />
Paris! Paris! Je t&#39;aime<br />
Mas eu gosto muito mais do Leme</p>
<p>E eu tamb&eacute;m quis ir um dia a Paris<br />
Pra conhecer o que havia l&aacute;<br />
E ao ver o metr&ocirc; a saudade apertou<br />
E vim correndo para c&aacute;</p>
<p>Quando eu cheguei<br />
De alegria chorei<br />
E achei o Rio lindo como o qu&ecirc;<br />
Disquei 43-0023<br />
&ldquo;Amor, como &eacute; que vai voc&ecirc;?&rdquo;</p>',
'creditos' => '<p>Arranjo: Robertinho de Recife e Luiz Ant&ocirc;nio<br />
Produ&ccedil;&atilde;o, baixo e guitarra: Robertinho de Recife<br />
Teclados: Luiz Ant&ocirc;nio<br />
Percuss&atilde;o: Paulinho He-Man<br />
Bateria: Renato Massa<br />
</p>',
'faixa_mp3' => '1998-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'89',
'faixa_titulo' => 'Forrandovira (Virou Forr&oacute;)',
'compositor' => '(Roberto Leal / Maria Lucia / Rodrigo Leal)',
'dolp' => 'Do CD Roberto Leal &ldquo;Forrandovira&rdquo;, RGE 7631-2 (1998)<br />
Com:<strong> Roberto Leal</strong>
',
'letra' => '<p>Quando toca esse ferrinho<br />
Devagar, devagarinho<br />
Meu amor, eu gosto tanto<br />
E o sanfoneiro quando abre esse fole<br />
Minha gente n&atilde;o &eacute; mole<br />
Toca mais que eu n&atilde;o me canso</p>
<p>E nesse tum, bate, bate, cora&ccedil;&atilde;o<br />
No passo dessa menina cora&ccedil;&atilde;o pode bater<br />
Virei com ela e o forr&oacute; vira virou<br />
Dancei com ela, a nossa festa n&atilde;o parou<br />
Virei com ele e o forr&oacute; vira virou<br />
Forrandovira a nossa festa come&ccedil;ou</p>
<p>Forrandovira quando tudo come&ccedil;ou<br />
Forrandovira quando a gente se encontrou<br />
Forrandovira quando tudo come&ccedil;ou<br />
Forrandovira quando a gente se encontrou</p>
<p>Nesse chamego dan&ccedil;a-se o forr&oacute;<br />
E eu batendo o p&eacute; vira carimb&oacute;<br />
Nesse chamego dan&ccedil;a-se o forr&oacute;<br />
E eu batendo o p&eacute; vira carimb&oacute;</p>
<p>Fiquei na esquina ao ouvir a concertina<br />
Quando chega essa menina<br />
E diz: &ldquo;Amor n&atilde;o fique s&oacute;<br />
N&atilde;o tenha medo<br />
Vem dan&ccedil;ar nesse chamego<br />
Meu amor me d&aacute; um cheiro<br />
E se enrola no meu forr&oacute;&rdquo;</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o art&iacute;stica: Roberto Leal<br />
Produ&ccedil;&atilde;o art&iacute;stica, arranjo, programa&ccedil;&otilde;es e reg&ecirc;ncia: Rodrigo Leal<br />
Percuss&atilde;o: La&eacute;rcio da Costa Henrique e Vander Conrado<br />
Acordeom: Marinho<br />
Trombone: Fran&ccedil;ois<br />
Trompete: Gil<br />
Sax tenor, alto e soprano: Proveta<br />
Cavaquinho e banjo: Marcelo Lombardo<br />
Coro: Ringo, Caio Fl&aacute;vio, Silvinha Ara&uacute;jo, Angela M&aacute;rcia e Rodrigo Leal<br />
</p>',
'faixa_mp3' => '1998-9.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'89',
'faixa_titulo' => 'Asa Branca',
'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
'dolp' => 'Do CD Roberto Leal &ldquo;Forrandovira&rdquo;, RGE 7631-2 (1998)<br />
Com:<strong> Roberto Leal</strong>
',
'letra' => '<p>Quando olhei a terra ardendo<br />
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
<p>At&eacute; mesmo a Asa Branca<br />
Bateu asas do sert&atilde;o<br />
Entonce eu disse &ldquo;adeus Rosinha<br />
Guarda contigo meu cora&ccedil;&atilde;o&rdquo;<br />
Entonce eu disse &ldquo;adeus Rosinha<br />
Guarda contigo meu cora&ccedil;&atilde;o&rdquo;</p>
<p>Hoje longe muitas l&eacute;guas<br />
Numa triste solid&atilde;o<br />
Espero a chuva cair de novo<br />
Pra eu voltar, ai, pro meu sert&atilde;o<br />
Espero a chuva cair de novo<br />
Pra eu voltar, ai, pro meu sert&atilde;o</p>
<p>Quando o verde dos teus olhos<br />
Se espalhar na planta&ccedil;&atilde;o<br />
Eu te asseguro, n&atilde;o chores n&atilde;o, viu<br />
Que eu voltarei viu, meu cora&ccedil;&atilde;o<br />
Eu te asseguro, n&atilde;o chores n&atilde;o, viu<br />
Que eu voltarei viu, meu cora&ccedil;&atilde;o</p>
',
'creditos' => '<p>Dire&ccedil;&atilde;o art&iacute;stica: Roberto Leal<br />
Produ&ccedil;&atilde;o art&iacute;stica, arranjo, programa&ccedil;&otilde;es e reg&ecirc;ncia: Rodrigo Leal<br />
Percuss&atilde;o: La&eacute;rcio da Costa Henrique e Vander Conrado<br />
Acordeom: Marinho<br />
Trombone: Fran&ccedil;ois<br />
Trompete: Gil<br />
Sax tenor, alto e soprano: Proveta<br />
Cavaquinho e banjo: Marcelo Lombardo<br />
Gaita de fole: Raul Jaime Brabo<br />
</p>',
'faixa_mp3' => '1998-10.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'90',
'faixa_titulo' => 'Ter Voc&ecirc; &eacute; Ter Raz&atilde;o',
'compositor' => '(Dominguinhos / Clim&eacute;rio)',
'dolp' => 'Do CD Maur&iacute;cio Mattar &ldquo;A gente nunca esquece&rdquo;, Sony Music (1998)<br />
Com:<strong> Maur&iacute;cio Mattar</strong>
',
'letra' => '<p>Quando eu lembro de voc&ecirc;, cora&ccedil;&atilde;o<br />
D&aacute; vontade de chorar<br />
Quando eu lembro do teu beijo, cora&ccedil;&atilde;o<br />
Que saudade que me d&aacute;<br />
Ter voc&ecirc; no pensamento, meu amor<br />
Ter voc&ecirc; no cora&ccedil;&atilde;o, minha flor<br />
Ter voc&ecirc; &eacute; ter raz&atilde;o<br />
E n&atilde;o ter sofrimento, meu amor</p>
<p>N&atilde;o ter &eacute; judia&ccedil;&atilde;o<br />
Que fazer dessa paix&atilde;o<br />
Que fazer sem teu carinho<br />
Que fazer sem aconchego<br />
Ter voc&ecirc; &eacute; ter um ninho, ser menino<br />
Sem voc&ecirc; eu morro cedo s&oacute; de medo<br />
Ter voc&ecirc; &eacute; ter destino, ter estrada<br />
Ter voc&ecirc; &eacute; ter sentido e dire&ccedil;&atilde;o</p>',
'creditos' => '<p>Arranjo: Dominguinhos, Sandro Haick e Pepe Rodriguez<br />
Dire&ccedil;&atilde;o vocal, baixo e viol&otilde;es: Sandro Haick<br />
Teclados e piano: Pepe Rodriguez<br />
Bateria e percuss&atilde;o: Cuca Teixeira<br />
Acordeom solo: Dominguinhos<br />
</p>',
'faixa_mp3' => '1998-11.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'87',
'faixa_titulo' => 'Quem &eacute; Muito Querido a Mim',
'compositor' => '(Geraldo Azevedo / Rog&eacute;rio Duarte)',
'dolp' => 'Do CD &ldquo;Can&ccedil;&otilde;es do Divino Mestre&rdquo; encartado no livro &ldquo;Bhagavad Gita &ndash; Can&ccedil;&atilde;o do Divino Mestre&rdquo;, Cia das Letras (1998)
',
'letra' => '<p>Quem &eacute; muito querido<br />
Quem &eacute; muito querido a mim<br />
&Eacute; muito querido a mim<br />
Aquele que n&atilde;o inveja<br />
Que &eacute; amigo sincero<br />
De todos os seres vivos<br />
Que n&atilde;o tem senso de posse<br />
Que tem a mesma atitude<br />
Na tristeza ou na alegria<br />
Que &eacute; sempre determinado<br />
Tendo a mente e o intelecto<br />
Harmonizados comigo<br />
&Eacute; muito querido a mim</p>
<p>&Eacute; muito querido a mim<br />
Quem nunca perturba os outros<br />
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
&Eacute; muito querido a mim</p>
<p>&Eacute; muito querido a mim<br />
Quem age do mesmo modo<br />
Com amigos e inimigos<br />
E n&atilde;o muda de atitude<br />
No ostracismo ou na gl&oacute;ria<br />
No sucesso ou no fracasso<br />
Quem nunca se contamina<br />
E sempre fica contente<br />
Com o que lhe &eacute; oferecido<br />
Este me &eacute; muito querido<br />
&Eacute; muito querido a mim<br />
&Eacute; muito querido a mim<br />
Este me &eacute; muito querido<br />
&Eacute; muito querido a mim</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Carlos Renn&oacute;<br />
Arranjo e viol&atilde;o: Geraldo Azevedo<br />
</p>',
'faixa_mp3' => '1998-7.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'88',
'faixa_titulo' => 'Juntei-me &agrave; Voz Verdadeira',
'compositor' => '(L&iacute;dia Jorge / Ant&oacute;nio Chainho)',
'dolp' => 'Do CD Ant&oacute;nio Chainho &ldquo;A guitarra e outras mulheres&rdquo;, Movieplay (1998)
',
'letra' => '<p>Juntei-me &agrave; voz da guitarra<br />
Por ser mais que verdadeira<br />
Provei que eu pr&oacute;pria era<br />
Feita da sua madeira</p>
<p>Viemos da mesma &aacute;rvore<br />
Talhadas do mesmo jeito<br />
Guitarra tem as minhas formas<br />
Eu tenho o seu pr&oacute;prio peito</p>
<p>Est&atilde;o em mim as suas cordas<br />
E at&eacute; a m&atilde;o de quem toca<br />
&Eacute; carne da minha carne<br />
Falando da minha boca</p>',
'creditos' => '<p>Guitarra portuguesa: Antonio Chainho<br />
Viola: Fernando Alvim<br />
Violinos: Eyvind Kang, Laura Seaton-Finn, Yuri Vodovoz, Mari Sweet, Susan Lorentsen, Mary Rowell e Suzanne Ornstein<br />
Violoncellos: Clay Ruede, Dorothy Lawson, Julie Green, Bruce Wang, Richard Locker, Mary Wooten, Melissa Meell Richardson e Stephanie Cummins<br />
Guitarra de 7 cordas: Vinicius Cantu&aacute;ria<br />
Baixo: Greg Cohen<br />
Melotron e optigan: Peter Sherer<br />
Theremin: Pamelia Stickney<br />
</p>',
'faixa_mp3' => '1998-8.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'101',
'faixa_titulo' => 'Fa&ccedil;o Tudo pra Te Amar',
'compositor' => '(Jonas de Andrade)',
'dolp' => 'Do CD Alcymar Monteiro &ldquo;Festa brasileira&rdquo;, Ingazeira Discos (1999)<br />
Com:<strong> Alcymar Monteiro</strong>
',
'letra' => '<p>Me abra&ccedil;a, me aperta<br />
Me bota no colo<br />
Eu quero &eacute; voc&ecirc;<br />
Me beija na boca<br />
Me leva pra casa (cama)<br />
Eu amo voc&ecirc;</p>
<p>Quero te dar meu amor<br />
Quero sentir teu carinho<br />
Vamos viver bem juntinhos<br />
Como um casal de pombinhos</p>
<p>Quero deitar nos teus bra&ccedil;os<br />
Quero sentir teu calor<br />
Juntar teu corpo com o meu<br />
Numa noite de amor</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o art&iacute;stica: Artur Maria<br />
Produ&ccedil;&atilde;o executiva e concep&ccedil;&atilde;o de arranjo: Alcymar Monteiro<br />
Arranjo e reg&ecirc;ncia: Genaro<br />
Guitarra: L&uacute; Bahia<br />
Bateria: Jair Tavares e Wellington<br />
Contrabaixo: Toninho Tavares<br />
Zabumba e tri&acirc;ngulo: Quartinha<br />
Teclados: F&aacute;bio Valois<br />
Agog&ocirc;: Quartinha e Jair Tavares<br />
Pandeiro: Ivo Jos&eacute;<br />
Vocal: Lyllian Rackel, Nena Queiroga, Bruno Simpson, Walkiria, Dora e Robson<br />
</p>',
'faixa_mp3' => '1999-10.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'95',
'faixa_titulo' => 'Terremoto',
'compositor' => '(Jo&atilde;o Donato / Paulo C&eacute;sar Pinheiro)',
'dolp' => 'Do CD &ldquo;Jo&atilde;o Donato &ndash; Songbook vol. 2&rdquo;, Lumiar Discos LD 44-05/99 (1999)
',
'letra' => '<p>&Ecirc;, mam&atilde;e, com o p&eacute; na terra<br />
&Ecirc;, meu pai, com o p&eacute; no ch&atilde;o<br />
&Ecirc;, mam&atilde;e, com o p&eacute; na terra<br />
&Ecirc;, meu pai, com o p&eacute; no ch&atilde;o</p>
<p>Olhei pro c&eacute;u<br />
Que confus&atilde;o<br />
Toquei no c&eacute;u<br />
Com o p&eacute; no ch&atilde;o<br />
Por onde andei<br />
Sem dire&ccedil;&atilde;o<br />
Eu te verei<br />
Com o p&eacute; no ch&atilde;o</p>
<p>Por onde andei<br />
Sem dire&ccedil;&atilde;o<br />
Eu te verei<br />
Com o p&eacute; no ch&atilde;o<br />
Meu mestre e rei<br />
Foi Salom&atilde;o<br />
Que me ensinou<br />
Com o p&eacute; no ch&atilde;o</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Almir Chediak<br />
Arranjo e piano: Leandro Braga<br />
Viol&atilde;o: Jo&atilde;o Lyra<br />
</p>',
'faixa_mp3' => '1999-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'93',
'faixa_titulo' => 'Forr&oacute; das Cumadre',
'compositor' => '(Jo&atilde;o Silva)',
'dolp' => 'Do CD Marin&ecirc;s e sua gente &ldquo;50 anos de forr&oacute;&rdquo;, BMG Brasil 7.432.164.746-2 (1999)<br />
Com:<strong> Marin&ecirc;s</strong>
',
'letra' => '<p>Olha comadre, semana que vem<br />
No terreiro l&aacute; de casa semana que vem<br />
Vai ter uma sanfoneirada semana que vem<br />
Eu vou dar uma forrozada semana que vem</p>
<p>V&aacute; no gog&oacute; cumadre, v&aacute; no gog&oacute;<br />
Pra gandalhada escangalhar-se no forr&oacute;<br />
V&aacute; no gog&oacute; cumadre, v&aacute; no gog&oacute;<br />
Pra gandalhada escangalhar-se no forr&oacute;</p>
<p>&Ecirc;, &ecirc;ta, que coisa boa!<br />
Ningu&eacute;m gosta de forr&oacute; mais do que eu<br />
E at&eacute; acho que esse povo &eacute; todo meu<br />
E de repente o mundo fica miudinho<br />
E &eacute; por isso que eu s&oacute; dan&ccedil;o agarradinha<br />
Duas coisas eu dou valor<br />
&Eacute; o forr&oacute; com sanfoninha e o fungar do meu amor</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Elba Ramalho<br />
Arranjo, acordeom e zabumba: Marcos Farias<br />
Guitarra: Marcos Arcanjo<br />
Contrabaixo: Jacar&eacute;<br />
Percuss&atilde;o: Paulinho He-Man<br />
Sax soprano: Cesar Michilles<br />
Bateria: Tedy Santana<br />
</p>',
'faixa_mp3' => '1999-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'96',
'faixa_titulo' => 'Todo Dia Era Dia de &iacute;ndio',
'compositor' => '(Jorge Ben Jor)',
'dolp' => 'M&uacute;sica incidental: <strong>Um &iacute;ndio</strong>(Caetano Veloso)<br />
Do CD &ldquo;Tons da natureza&rdquo;, Independente (1999)
',
'letra' => '<p>Curumim chama Cunhat&atilde;<br />
Que eu vou contar<br />
Curumim chama Cunhat&atilde;<br />
Que eu vou contar<br />
Todo dia era dia de &iacute;ndio<br />
Todo dia era dia de &iacute;ndio<br />
Curumim, Cunhat&atilde;<br />
Cunhat&atilde;, Curumim</p>
<p>Antes que o homem aqui chegasse<br />
As terras brasileiras eram habitadas e amadas<br />
Por mais de tr&ecirc;s milh&otilde;es de &iacute;ndios<br />
Propriet&aacute;rios felizes da Terra Brazilis<br />
Pois todo dia era dia de &iacute;ndio<br />
Todo dia era dia de &iacute;ndio</p>
<p>Mas agora eles s&oacute; t&ecirc;m<br />
O dia 19 de abril<br />
Mas agora eles s&oacute; t&ecirc;m<br />
O dia 19 de abril<br />
Amantes da natureza<br />
Eles s&atilde;o incapazes com certeza<br />
De maltratar uma f&ecirc;mea<br />
Ou de poluir o rio e o mar<br />
Preservando o equil&iacute;brio ecol&oacute;gico<br />
Entre a terra, fauna e flora</p>
<p>Pois em sua gl&oacute;ria, o &iacute;ndio<br />
Era o exemplo puro e perfeito<br />
Pr&oacute;ximo da harmonia<br />
Da fraternidade e da alegria<br />
Da alegria de viver<br />
Da alegria de viver<br />
E, no entanto, hoje<br />
O seu canto triste<br />
&Eacute; o lamento de uma ra&ccedil;a que j&aacute; foi muito feliz<br />
Pois antigamente<br />
Todo dia era dia de &iacute;ndio<br />
Todo dia era dia de &iacute;ndio</p>
<p>Curumim, Cunhat&atilde;<br />
Cunhat&atilde;, Curumim<br />
Ter&ecirc;r&ecirc;r&ecirc;r&ecirc;r&ecirc;, &ecirc;, &ecirc;<br />
Ter&ecirc;r&ecirc;r&ecirc;r&ecirc;r&ecirc;, ah, ah<br />
Ter&ecirc;r&ecirc;r&ecirc;r&ecirc;r&ecirc;, &ecirc;, &ecirc;<br />
Ter&ecirc;r&ecirc;r&ecirc;r&ecirc;r&ecirc;, ah, ah</p>',
'creditos' => '<p>Arranjo e teclados: M&aacute;rcio Lomiranda<br />
Percuss&atilde;o: Sidinho Moreira<br />
Guitarra: Fernando Caneca<br />
</p>',
'faixa_mp3' => '1999-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'97',
'faixa_titulo' => 'Voc&ecirc; Vai me Seguir',
'compositor' => '(Chico Buarque / Ruy Guerra)',
'dolp' => 'Do CD &ldquo;Chico Buarque &ndash; Songbook vol. 1&rdquo;, Lumiar Discos 46-07/99 (1999)
',
'letra' => '<p>Voc&ecirc; vai me seguir<br />
Aonde quer que eu v&aacute;<br />
Voc&ecirc; vai me servir<br />
Voc&ecirc; vai se curvar</p>
<p>Voc&ecirc; vai resistir<br />
Mas vai se acostumar<br />
Voc&ecirc; vai me agredir<br />
Voc&ecirc; vai me adorar</p>
<p>Voc&ecirc; vai me sorrir<br />
Voc&ecirc; vai se enfeitar<br />
E vem me seduzir<br />
Me possuir, me infernizar</p>
<p>Voc&ecirc; vai me trair<br />
Voc&ecirc; vem me beijar<br />
Voc&ecirc; vai me cegar<br />
E eu vou consentir</p>
<p>Voc&ecirc; vai conseguir<br />
Enfim, me apunhalar<br />
Voc&ecirc; vai me velar<br />
Chorar, vai me cobrir<br />
E me ninar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Almir Chediak<br />
Arranjo e piano: Leandro Braga<br />
Viol&atilde;o: Jo&atilde;o Lyra<br />
Contrabaixo: Adriano Giffoni<br />
</p>',
'faixa_mp3' => '1999-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'98',
'faixa_titulo' => 'Sem A&ccedil;&uacute;car',
'compositor' => '(Chico Buarque)',
'dolp' => 'Do CD &ldquo;Chico Buarque &ndash; Songbook vol. 4&rdquo;, Lumiar Discos 49-10/99 (1999)
',
'letra' => '<p>Todo dia ele faz diferente<br />
N&atilde;o sei se ele volta da rua<br />
N&atilde;o sei se me traz um presente<br />
N&atilde;o sei se ele fica na sua<br />
Talvez ele chegue sentido<br />
Quem sabe me cobre de beijos<br />
Ou nem me desmancha o vestido<br />
Ou nem me adivinha os desejos</p>
<p>Dia &iacute;mpar tem chocolate<br />
Dia par eu vivo de brisa<br />
Dia &uacute;til ele me bate<br />
Dia santo ele me alisa<br />
Longe dele eu tremo de amor<br />
Na presen&ccedil;a dele me calo<br />
Eu de dia sou sua flor<br />
Eu de noite sou seu cavalo</p>
<p>A cerveja dele &eacute; sagrada<br />
A vontade dele &eacute; a mais justa<br />
A minha paix&atilde;o &eacute; piada<br />
A sua risada me assusta<br />
Sua boca &eacute; um cadeado<br />
E meu corpo &eacute; uma fogueira<br />
Enquanto ele dorme pesado<br />
Eu rolo sozinha na esteira</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Almir Chediak<br />
Arranjo e piano: Leandro Braga<br />
Contrabaixo: Adriano Giffoni<br />
</p>',
'faixa_mp3' => '1999-7.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'94',
'faixa_titulo' => 'Cantos pra Despertar',
'compositor' => '(Cristina Saraiva / Simone Guimar&atilde;es)',
'dolp' => 'Do CD Simone Guimar&atilde;es &ldquo;Aguap&eacute;&rdquo;, Ti&ecirc; Musical TIECD004 (1999)<br />
Com:<strong> Simone Guimar&atilde;es</strong>
',
'letra' => '
<p>De cantos de lua cheia<br />
Encanto das &aacute;guas do mar<br />
Mo&ccedil;os e mo&ccedil;as faceiras<br />
Um dia ir&atilde;o despertar<br />
Um dia ir&atilde;o despertar</p>
<p>Tem roseiras, tem jasmim<br />
Cheiro de flor no ar<br />
Noites que n&atilde;o t&ecirc;m fim<br />
Lua pra namorar</p>
<p>L&aacute; na terra de onde eu vim<br />
Estrelas cruzam o ar<br />
E reinam nos capinzais<br />
Caiporas, boitat&aacute;s</p>
<p>Quando o sol clareia<br />
E doura a mata, a ribeira<br />
Ent&atilde;o eu fico a olhar<br />
Rios e palmeiras</p>
<p>Tem coqueiro nos jardins<br />
Cheiro de sal no ar<br />
Versos que n&atilde;o t&ecirc;m fim<br />
Preces pra Iemanj&aacute;</p>
<p>L&aacute; na terra de onde eu vim<br />
O homem n&atilde;o teme o mar<br />
Levanta a vela e vai<br />
Parte pra n&atilde;o voltar</p>
<p>Quando a mar&eacute; &eacute; cheia<br />
Transborda sonhos na areia<br />
Ent&atilde;o eu fico a lembrar<br />
Contos de sereias</p>',
'creditos' => '<p>Arranjo e viol&atilde;o de nylon: Maur&iacute;cio Maestro<br />
Piano: Leandro Braga<br />
Baixo: Jorge Helder<br />
Bateria: Marcos Feij&atilde;o<br />
Viol&atilde;o de a&ccedil;o: Luiz Brasil<br />
Viol&atilde;o de 12: Fernando Carvalho<br />
Percuss&atilde;o: Beto Cazes<br />
</p>',
'faixa_mp3' => '1999-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'100',
'faixa_titulo' => 'Fogo, Vento e Mar',
'compositor' => '(Francisco Magaldi / Jos&eacute; Louren&ccedil;o)',
'dolp' => 'Do CD Francisco Magaldi e Jos&eacute; Louren&ccedil;o &ldquo;Viagem das cores&rdquo;, MZA Music 012 967-2 (1999)
',
'letra' => '<p><em>Faixa instrumental com vocalizes</em></p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o: Mendes Foguette<br />
Realiza&ccedil;&atilde;o: Francisco Magaldi e Jos&eacute; Louren&ccedil;o<br />
Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
</p>',
'faixa_mp3' => '1999-9.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'92',
'faixa_titulo' => 'Flor de Campina',
'compositor' => '(Geraldo Amaral / Carlos Fernando)',
'dolp' => 'Do CD Asinhas da Am&eacute;rica &ldquo;O Pinto da Madrugada&rdquo;, San Francisco/INEDIT SFN 5078 (1999)
',
'letra' => '<p>Campina Grande &eacute;s a flor morena<br />
Morena, morena<br />
Toda a cidade cantando, brilhando<br />
&Eacute; linda, &eacute; livre, &eacute; fera</p>
<p>Minha cidade cantando brilhante ser&aacute;<br />
Sua Micarande, novo carnaval<br />
Cantando com ela sem desafinar<br />
A flor de Campina, agreste luar</p>
<p>A Para&iacute;-b&ecirc;-a-b&aacute; invade toda Campina<br />
A alegria se espalha nos olhos da pequenina<br />
Que &eacute; grande no pensamento<br />
&Eacute; linda como as meninas<br />
O bairro da Liberdade<br />
Libera todas as rimas<br />
Bodocong&oacute; beija a lua<br />
Campina Grande por cima<br />
Bodocong&oacute; beija a lua<br />
Campina Grande por cima</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Carlos Fernando e Tovinho<br />
Dire&ccedil;&atilde;o musical, arranjo de base e teclado: Tovinho<br />
Bateria: Carlinhos<br />
Baixo: Mongol<br />
Guitarra: Luciano Oliveira<br />
Vocais: Meives, Nena Queiroga, Scheila e Sharlene<br />
</p>',
'faixa_mp3' => '1999-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'99',
'faixa_titulo' => 'Estrada do Canind&eacute;',
'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
'dolp' => 'Do CD promocional &ldquo;Elba Ramalho &ndash; Os grandes sucessos&rdquo;, BMG Brasil VPE 0152 (1999)',
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
Vai oiando coisa a gran&eacute;<br />
Coisas que pra mode ver<br />
O crist&atilde;o tem que andar a p&eacute;</p>
<p><em>*Esta faixa foi originalmente registrada em 1994 para o projeto &ldquo;&Eacute; forr&oacute;, &eacute; xote, &eacute; bai&atilde;o &ndash; Viva Gonzag&atilde;o&rdquo;, da gravadora BMG Ariola. Na &eacute;poca Elba era contratada da Polygram, que n&atilde;o autorizou sua participa&ccedil;&atilde;o e n&atilde;o liberou a faixa para entrar no disco. Em 1999, com Elba j&aacute; na BMG, a m&uacute;sica foi finalmente lan&ccedil;ada.</em></p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Jos&eacute; Milton e Raimundo Fagner<br />
Arranjo e sanfona: Sivuca<br />
Teclados: Luiz Ant&ocirc;nio Gomes<br />
Zabumba: Durval<br />
Tri&acirc;ngulo: Mingo Ara&uacute;jo<br />
Percuss&atilde;o: Mingo Ara&uacute;jo e Firmino<br />
Bateria: Fernando Pereira, Jurim Moreira e T&eacute;o Lima<br />
Baixo: Jorj&atilde;o e Jamil Joanes<br />
Guitarra: Manass&eacute;s<br />
</p>
',
'faixa_mp3' => '1999-8.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'103',
'faixa_titulo' => 'Bodocong&oacute; (Ao Vivo)',
'compositor' => '(Humberto Teixeira / C&iacute;cero Nunes)',
'dolp' => '    Do CD &ldquo;O melhor do forr&oacute; no maior S&atilde;o Jo&atilde;o do mundo&rdquo;, BMG Brasil 7.432.175.050-2 (2000)
',
'letra' => '<p>Eu fui feliz l&aacute; no Bodocong&oacute;<br />
Com meu barquinho de um remo s&oacute;<br />
Quando era lua<br />
Com meu bem andava &agrave; toa<br />
Ai, ai, ai, que coisa boa<br />
L&aacute; no meu Bodocong&oacute;</p>
<p>Bod&oacute;, Bod&oacute;, Bodocong&oacute;<br />
Meu can&aacute;rio verde, meu curi&oacute;<br />
Bod&oacute;, Bod&oacute;, Bod&oacute;, Bod&oacute;, Bod&oacute;, Bodocong&oacute;<br />
Campina Grande eu vivo aqui t&atilde;o s&oacute;<br />
Ai, ai, Campina Grande eu vivo aqui t&atilde;o s&oacute;</p>',
'creditos' => '<p>Teclados: Z&eacute; Am&eacute;rico<br />
Sanfona: Marcos Farias<br />
Baixo: Jacar&eacute;<br />
Bateria: Med<br />
Percuss&atilde;o: Paulinho He-Man<br />
Guitarra: Marcos Arcanjo<br />
Sax, flauta e vocal: David Ganc<br />
Vocal: Jussara<br />
</p>',
'faixa_mp3' => '2000-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'104',
'faixa_titulo' => 'Bandeira Desfraldada',
'compositor' => '(Vital Farias)',
'dolp' => 'Do CD Z&eacute; Ramalho &ldquo;Na&ccedil;&atilde;o Nordestina&rdquo;, BMG Brasil 7.432.175.467-2 (2000)<br />
Com:<strong> Z&eacute; Ramalho</strong>
',
'letra' => '<p>Nas pir&acirc;mides do teu corpo<br />
No proj&eacute;til de tua boca<br />
Na passagem do cometa<br />
Dos teus olhos</p>
<p>E esse teu sotaque nordestino<br />
E essa tua vis&atilde;o de pau-de-arara<br />
Restos de retalhos de bandeiras<br />
Desfraldadas</p>',
'creditos' => '<p>Arranjo e c&iacute;tara: Robertinho de Recife<br />
Violas e voz: Z&eacute; Ramalho<br />
Ritmo e percuss&atilde;o: Jo&atilde;o Firmino<br />
Transcri&ccedil;&atilde;o do arranjo, sax soprano e flauta: C&eacute;sar Michiles<br />
Violinos: L&eacute;o Ortiz e Glauco Fernandes<br />
Cello: Luiz Fernando Zamith<br />
Viola: Nayran Pessanha<br />
</p>
',
'faixa_mp3' => '2000-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'112',
'faixa_titulo' => 'Caso de Muito Ensino',
'compositor' => '(Carlos Drummond de Andrade / Sergio Ricardo)',
'dolp' => 'Do CD Sergio Ricardo "Estória de João-Joana", Rádio MEC RM0001(2000)<br>Com: <strong>Sergio Ricardo e Geraldo Azevedo</strong>
',
'letra' => '<p>Meu irm&atilde;o o sucedido<br />
Em Lages do Caldeir&atilde;o<br />
&Eacute; caso de muito ensino<br />
Merecedor de aten&ccedil;&atilde;o<br />
Por isso &eacute; que me apresento<br />
Fazendo esta rela&ccedil;&atilde;o<br />
Por isso &eacute; que me apresento<br />
Fazendo esta rela&ccedil;&atilde;o</p>
<p>Vivia em dito arraial<br />
Do pa&iacute;s das Alagoas<br />
Um rapaz chamado Jo&atilde;o<br />
Cuja for&ccedil;a era das boas<br />
Pra sojigar burro bravo<br />
Tigres, on&ccedil;as e leoas<br />
Pra sojigar burro bravo<br />
Tigres, on&ccedil;as e leoas</p>
<p>Jo&atilde;o, lhe deram este nome<br />
N&atilde;o foi de letra em cart&oacute;rio<br />
Pois sua m&atilde;e e seu pai<br />
Viviam de pedit&oacute;rio<br />
Gente assim do miser&ecirc;<br />
Nunca soube o que &eacute; cas&oacute;rio</p>',
'creditos' => '<p>Arranjo e dire&ccedil;&atilde;o musical: S&eacute;rgio Ricardo<br />
Produ&ccedil;&atilde;o executiva: Maristela Rangel Pinto e Soraya Nunes<br />
Produ&ccedil;&atilde;o: Sonia Pinto<br />
Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
</p>',
'faixa_mp3' => '2000-14.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'112',
'faixa_titulo' => 'Fogo no Agreste',
'compositor' => '(Carlos Drummond de Andrade / Sergio Ricardo)',
'dolp' => 'Do CD Sergio Ricardo "Estória de João-Joana", Rádio MEC RM0001(2000)<br/>
Com:<strong> João Bosco e Telma Tavares</strong>
',
'letra' => '<p>Num dia de calor desses<br />
Que tacam fogo no agreste<br />
Jo&atilde;o suava que suava<br />
Sem despir a sua veste</p>
<p>&ldquo;Companheiro esta camisa<br />
N&atilde;o &eacute; coisa que moleste?&rdquo;<br />
Lhe perguntou um amigo<br />
Que estava de peito nu</p>
<p>E Jo&atilde;o se calado estava<br />
Nem deu pio de nambu<br />
Ningu&eacute;m nunca viu seu pelo<br />
Nem por traz do murundu<br />
Ningu&eacute;m nunca viu seu pelo<br />
Nem por traz do murundu, &ecirc;</p>
<p>O Jo&atilde;o era muito avexado<br />
Na hora de tomar banho<br />
Punha tranca no barraco<br />
Fugindo a qualquer estranho<br />
Em Lages nenhum var&atilde;o<br />
Tinha recato tamanho</p>
<p>Jo&atilde;o nas &uacute;ltimas semanas<br />
Entrou a sofrer de incha&ccedil;o<br />
Mesmo assim arranca toco<br />
Sem se carpir de cansa&ccedil;o<br />
Um dia n&atilde;o aguenta mais<br />
E exclama &ldquo;O que &eacute; que eu fa&ccedil;o?&rdquo;</p>
<p>Os manos vendo naquilo<br />
Coisa mei desimportante<br />
Logo receitam de araque<br />
Meizinha sem variante<br />
Para qualquer macacoa<br />
Carece tomar purgante</p>
<p>Jo&atilde;o entrou no purgativo<br />
Louco de dor e de medo<br />
Se estorcendo e contorcendo<br />
Na solid&atilde;o do arvoredo<br />
Pois ele em sua afli&ccedil;&atilde;o<br />
L&aacute; se escondera bem cedo</p>
<p>O gemido que exalava<br />
Do peito de Jo&atilde;o sozinho<br />
Alertou os seus dois manos<br />
Que foram ver de mansinho<br />
Como &eacute; que aquele bravo<br />
Se tornara t&atilde;o fraquinho</p>
<p>No ch&atilde;o de terra essa terra<br />
Que a todos n&oacute;s vai comer<br />
Chorava uma criancinha<br />
Acabada de nascer<br />
E Jo&atilde;o de peito desnudo<br />
Acarinhava este ser<br />
E Jo&atilde;o de peito desnudo<br />
Acarinhava este ser</p>',
'creditos' => '<p>Arranjo e dire&ccedil;&atilde;o musical: S&eacute;rgio Ricardo<br />
Produ&ccedil;&atilde;o executiva: Maristela Rangel Pinto e Soraya Nunes<br />
Produ&ccedil;&atilde;o: Sonia Pinto<br />
Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
</p>
',
'faixa_mp3' => '2000-15.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'112',
'faixa_titulo' => 'Por For&ccedil;a da Natureza',
'compositor' => '(Carlos Drummond de Andrade / Sergio Ricardo)',
'dolp' => 'Do CD Sergio Ricardo "Estória de João-Joana", Rádio MEC RM0001(2000)
',
'letra' => '<p>Aquela cena imprevista<br />
Causou a maior surpresa<br />
O que tanto se ocultara<br />
Se mostrava sem defesa<br />
Jo&atilde;o deixara de ser Jo&atilde;o<br />
Por for&ccedil;a da natureza<br />
Jo&atilde;o deixara de ser Jo&atilde;o<br />
Por for&ccedil;a da natureza </p>
',
'creditos' => '<p>Arranjo e dire&ccedil;&atilde;o musical: S&eacute;rgio Ricardo<br />
Produ&ccedil;&atilde;o executiva: Maristela Rangel Pinto e Soraya Nunes<br />
Produ&ccedil;&atilde;o: Sonia Pinto<br />
Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
<p>
    ',
    'faixa_mp3' => '2000-16.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'112',
    'faixa_titulo' => 'Duas Vezes Escrava',
    'compositor' => '(Carlos Drummond de Andrade / Sergio Ricardo)',
    'dolp' => 'Do CD Sergio Ricardo "Estória de João-Joana", Rádio MEC RM0001(2000)<br/>
    Com:<strong> Chico Buarque</strong>
    ',
    'letra' => '<p>A sorte se presenteia<br />
        A todos doen&ccedil;a e fome<br />
        Para as mulheres capricha<br />
        Num privil&eacute;gio sem nome<br />
        Colhe mis&eacute;ria maior<br />
    E diz &agrave; coitada: &ldquo;Tome!&rdquo;</p>
    <p>&Eacute; forma de escravid&atilde;o<br />
        A infinita pobreza<br />
        Mas duas vezes escrava<br />
        &Eacute; a mulher com certeza<br />
        Pois escrava de um escravo<br />
    Pode haver maior dureza?</p>
    <p>Por isso aquela mocinha<br />
        Fez tudo para iludir<br />
        Aos outros e ao seu destino<br />
        Mas rola n&atilde;o &eacute; tapir<br />
        E chega l&aacute; um momento<br />
    Da natureza explodir</p>
    <p>Jo&atilde;o vira Joana<br />
        Acontecem dessas coisas sem preceito<br />
        No seu colo est&aacute; Jo&atilde;ozinho<br />
        Mamando leite de peito<br />
        Pelo menos esse aqui<br />
        De ser homem tem direito<br />
        Pelo menos esse aqui<br />
    De ser homem tem direito</p>',
    'creditos' => '<p>Arranjo e dire&ccedil;&atilde;o musical: S&eacute;rgio Ricardo<br />
        Produ&ccedil;&atilde;o executiva: Maristela Rangel Pinto e Soraya Nunes<br />
        Produ&ccedil;&atilde;o: Sonia Pinto<br />
        Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
    </p>',
    'faixa_mp3' => '2000-17.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'112',
    'faixa_titulo' => 'Em Favor e Gra&ccedil;a',
    'compositor' => '(Carlos Drummond de Andrade / Sergio Ricardo)',
    'dolp' => 'Do CD Sergio Ricardo "Estória de João-Joana", Rádio MEC RM0001(2000)<br/>
    Com:<strong> Vários Artistas</strong>
    ',
    'letra' => '<p>Saibam quantos deste caso<br />
        Houverem ci&ecirc;ncia que a vida<br />
        N&atilde;o anda em favor e gra&ccedil;a<br />
        Igualmente repartida<br />
        E que dor ensombra a falta<br />
        De amor, de paz e comida<br />
        E que dor ensombra a falta<br />
    De amor, de paz e comida</p>',
    'creditos' => '<p>Arranjo e dire&ccedil;&atilde;o musical: S&eacute;rgio Ricardo<br />
        Produ&ccedil;&atilde;o executiva: Maristela Rangel Pinto e Soraya Nunes<br />
        Produ&ccedil;&atilde;o: Sonia Pinto<br />
        Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
    </p>',
    'faixa_mp3' => '2000-18.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'105',
    'faixa_titulo' => '&Eacute; S&oacute; Voc&ecirc; Querer',
    'compositor' => '(Nando Cordel)',
    'dolp' => 'Do CD Trio Forrozzão "Na batida da zabumba", Natasha records 789.700.903.222(2000)<br/>
    Com:<strong> Trio Forrozão</strong>
    ',
    'letra' => '<p>Eu sou o teu amor<br />
        &Eacute; s&oacute; voc&ecirc; querer<br />
        Eu fa&ccedil;o qualquer coisa<br />
    Pra ficar com voc&ecirc;</p>
    <p>Te dou meu cora&ccedil;&atilde;o<br />
        O que voc&ecirc; sonhar<br />
        Voc&ecirc; n&atilde;o sabe como &eacute; grande<br />
    Esta vontade de te amar</p>
    <p>Voc&ecirc; tem perfume da manh&atilde;<br />
        Que eu fico doidinho pra cheirar<br />
        A sua boca &eacute; uma rom&atilde;<br />
    Que eu fico doidinho pra beijar</p>
    <p>Voc&ecirc; &eacute; minha luz e eu vou seguir<br />
        Porque sei que posso me dar bem<br />
        O meu cora&ccedil;&atilde;o me diz<br />
    Igual a tu n&atilde;o tem ningu&eacute;m</p>
    ',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Paulo Rafael<br />
        Arranjo e acordeom: Chiquinho Chagas<br />
        Voz: Bastos<br />
        Zabumba: Nicodemus<br />
        Tri&acirc;ngulo: Chupa Cabra<br />
        Baixo: Fernando Nunes<br />
        Percuss&atilde;o: Firmino<br />
    </p>',
    'faixa_mp3' => '2000-5.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'106',
    'faixa_titulo' => 'Asa Branca',
    'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
    'dolp' => 'Do CD Raul di Blasio “Brasileirinho”, BMG Brasil 7.432.177.375-2(2000)<br/>
    Com:<strong> Raul di Blasio</strong>
    ',
    'letra' => '<p>Quando olhei a terra ardendo<br />
        Qual fogueira de S&atilde;o Jo&atilde;o<br />
        Eu perguntei a Deus do c&eacute;u, ai<br />
        Por que tamanha judia&ccedil;&atilde;o<br />
        Eu perguntei a Deus do c&eacute;u, ai<br />
    Por que tamanha judia&ccedil;&atilde;o</p>',
    'creditos' => '<p>Arranjo de base, flautas, viol&atilde;o e viola: Jo&atilde;o Lyra<br />
        Orquestra&ccedil;&atilde;o: Dori Caymmi<br />
        Baixo: Jamil Joanes<br />
        Bateria: Jurim Moreira<br />
        Percuss&atilde;o: Firmino<br />
        Sanfona: Adelson Viana<br />
        Flautas: Z&eacute; Canuto e Adrea Dias<br />
    </p>',
    'faixa_mp3' => '2000-6.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'107',
    'faixa_titulo' => 'Vamo Embolando',
    'compositor' => '(Paulo Vascon / Tenyson del Rey)',
    'dolp' => 'Do CD Banda Beijo “Apaixonada”, Universal Music 7.314.548.155-2(2000)<br/>
    Com:<strong> Gilmelândia (Banda Beijo)</strong>
    ',
    'letra' => '<p>A mulher do boi &eacute; a vaca<br />
        A mulher do fac&atilde;o &eacute; a faca<br />
        A pimenta &eacute; da pimenteira<br />
        A goiaba &eacute; da goiabeira<br />
        Quem cochicha o rabo espicha<br />
        A moleza &eacute; irm&atilde; da pregui&ccedil;a<br />
        O destino &eacute; cumpade da sorte<br />
    A cumade da vida &eacute; a morte</p>
    <p>Vamo embolando<br />
        Vamo embolando<br />
        Vamo embolando para ver no que &eacute; que d&aacute;<br />
        Vamo embolando<br />
        Vamo embolando<br />
    Vamo embolando at&eacute; o dia clarear</p>
    <p>&Eacute; o cravo que enfeita a lapela<br />
        A menina que enfeita a janela<br />
        &Eacute; o homem que &eacute; o lobo do homem<br />
        Quem n&atilde;o chora dorme com fome<br />
        O caro&ccedil;o &eacute; o fruto da fruta<br />
        O menino com a vara cutuca<br />
        A mentira tem perna curta<br />
    Mesmo assim ela vai longe</p>
    <p>E &eacute; coxa batendo com coxa<br />
        E &eacute; mo&ccedil;o de olho na mo&ccedil;a<br />
        Sanfoneiro acerta na mosca<br />
    Um forr&oacute; bom da gota</p>
    <p>A zambumba fica apimentada<br />
        Triangueiro apressa a pegada<br />
        A sanfona d&aacute; uma acelerada<br />
    E o forr&oacute; vai virando embolada</p>
    <p>A menina t&aacute; no papo<br />
        Jenipapo t&aacute; no mato<br />
        O rato t&aacute; no buraco<br />
    No buraco do sapato</p>
    <p>Quem n&atilde;o t&aacute; rico, t&aacute; roto<br />
        Quem n&atilde;o t&aacute; reto, t&aacute; torto<br />
        Tem gente chupando dente<br />
    Tem gente roendo osso</p>',
    'creditos' => '<p>Arranjo: Gigi e Bebeto Pires<br />
        Baixo: Jomar<br />
        Teclados: Bebeto Pires<br />
        Bateria: Fabio Serrano<br />
        Guitarra: Gerson Silva<br />
        Sax tenor: Nivaldo Cerqueira<br />
        Trompete: Sinho Cerqueira<br />
        Trombone: Nery<br />
        Sanfona: Franciel<br />
        Pandeiro: Emanuel Magno<br />
        Zabumba, tri&acirc;ngulo e block: Eudes Henriques<br />
        Vocal: Tito Bahiense<br />
    </p>',
    'faixa_mp3' => '2000-7.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'108',
    'faixa_titulo' => 'Presente de Papai Noel',
    'compositor' => '(Elino Juli&atilde;o)',
    'dolp' => 'Do CD Elino Julião “O cantador do seridó”, Nação Potiguar / Independente(2000) <br/>
    Com:<strong> Elino Julião</strong>
    ',
    'letra' => '<p>Demorou mas chegou meu dia<br />
        De tanta alegria eu perdi meu chap&eacute;u<br />
        Quando a rua ficar toda escura<br />
    Eu vou ver a figura de Papai Noel</p>
    <p>Eu nunca vi esse homem<br />
        Conhe&ccedil;o de nome, ele &eacute; t&atilde;o falado<br />
        Tanta vontade que eu tenho<br />
    Aqui no desenho ele &eacute; t&atilde;o engra&ccedil;ado</p>
    <p>Dizem que quando ele desce do c&eacute;u<br />
        Aparecem os anjos cantando<br />
        E ele chega sorrindo pra gente<br />
    &ldquo;T&aacute; aqui seu presente&rdquo;, vai logo entregando</p>
    <p>Meia-noite eu estou preparado<br />
        Eu fico assentado, olhando pro c&eacute;u<br />
        E &eacute; por isso que estou t&atilde;o contente<br />
    Vou ganhar presente de Papai Noel</p>',
    'creditos' => '<p>Arranjo e co-produ&ccedil;&atilde;o: Gereba<br />
        Viol&atilde;o: Joca Costa<br />
        Baixo: George<br />
        Sanfona: Jos&eacute; Hilton<br />
        Flauta: Bethoven<br />
        Zabumba, tri&acirc;ngulo, agog&ocirc;, pandeiro, ganz&aacute; e mel&ecirc;: Mingo Ara&uacute;jo<br />
        Vocal: Ana Maria, Araken, Fabiana, Heliana e Jacira<br />
        Reg&ecirc;ncia de coro: Danilo Guanais<br />
    </p>',
    'faixa_mp3' => '2000-8.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'102',
    'faixa_titulo' => 'Su&iacute;te dos Pescadores (Ao Vivo)',
    'compositor' => '(Dorival Caymmi)',
    'dolp' => 'Do CD &ldquo;Brasil 500 anos&rdquo;, Som Livre 2267-2 (2000)<br />
    Com:<strong> Daniela Mercury, Ivete Sangalo e Moraes Moreira</strong>
    ',
    'letra' => '<p>A estrela Dalva me acompanha<br />
        Iluminando meu caminho<br />
        Eu sei que ainda estou sozinho<br />
    Mas tem algu&eacute;m que est&aacute; pensando em mim</p>
    <p>Minha jangada vai sair pro mar<br />
        Vou trabalhar, meu bem querer<br />
        Se Deus quiser quando eu voltar do mar<br />
        Um peixe bom eu vou trazer<br />
        Meus companheiros tamb&eacute;m v&atilde;o voltar<br />
    E a Deus do c&eacute;u vamos agradecer</p>',
    'creditos' => '<p>Dire&ccedil;&atilde;o art&iacute;stica: Aramis Barros<br />
        Produ&ccedil;&atilde;o: Paulo Henrique<br />
        Arranjo: Chiquinho de Moraes<br />
        Bateria: Sergio Mello<br />
        Baixo: Paulo Cesar Barros<br />
        Guitarra: Ricardo Palmeira<br />
        Percuss&atilde;o: Jacar&eacute;<br />
        Guitarra e viol&atilde;o: Paulo Soledade<br />
        Piano: Hamleto Stamato<br />
        Teclados (est&uacute;dio): Paulo Henrique<br />
        Acordeom: Chiquinho Chagas<br />
        Trompete, flugelhorn e trombone: Paulinho Trompete<br />
        Sax tenor, bar&iacute;tono e flautas: Widor Santiago<br />
        Sax alto e soprano: Sandro Guimar&atilde;es<br />
        Trombones: Roberto Marques e Paulo Willian<br />
        Violinos: L&eacute;o Ortiz, Rog&eacute;rio Rosa, Glauco Fernandes e Gustavo Menezes<br />
        Violas: Eduardo Pereira, Jairo Diniz e Debora Cheine<br />
        Violoncelos: Luiz Fernando Zamith e Hugo Pilger<br />
        Vocais (est&uacute;dio): Cris Dellano, Marisa Alfaia, Nina Pancevski, Nan&aacute; Tribuzi, Paulo Soledade, Paulo Henrique, Hamleto Satamato e Paulinho Trompete<br />
    </p>
    ',
    'faixa_mp3' => '2000-1.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'102',
    'faixa_titulo' => 'Isso Aqui T&aacute; Bom Demais / Banho de Cheiro (Ao Vivo)',
    'compositor' => '(Dominguinhos &ndash; Nando Cordel / Carlos Fernando)',
    'dolp' => 'Do CD &ldquo;Brasil 500 anos&rdquo;, Som Livre 2267-2 (2000)
    ',
    'letra' => '<p>Olha isso aqui t&aacute; muito bom<br />
        Isso aqui t&aacute; bom demais<br />
        Olha quem t&aacute; fora quer entrar<br />
    Mas quem t&aacute; dentro n&atilde;o sai</p>
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
    O b&ecirc;-a-b&aacute; do Brasil</p>',
    'creditos' => '<p>Dire&ccedil;&atilde;o art&iacute;stica: Aramis Barros<br />
        Produ&ccedil;&atilde;o: Paulo Henrique<br />
        Arranjo: Chiquinho de Moraes<br />
        Bateria: Sergio Mello<br />
        Baixo: Paulo Cesar Barros<br />
        Guitarra: Ricardo Palmeira<br />
        Percuss&atilde;o: Jacar&eacute;<br />
        Guitarra e viol&atilde;o: Paulo Soledade<br />
        Piano: Hamleto Stamato<br />
        Teclados (est&uacute;dio): Paulo Henrique<br />
        Acordeom: Chiquinho Chagas<br />
        Trompete, flugelhorn e trombone: Paulinho Trompete<br />
        Sax tenor, bar&iacute;tono e flautas: Widor Santiago<br />
        Sax alto e soprano: Sandro Guimar&atilde;es<br />
        Trombones: Roberto Marques e Paulo Willian<br />
        Violinos: L&eacute;o Ortiz, Rog&eacute;rio Rosa, Glauco Fernandes e Gustavo Menezes<br />
        Violas: Eduardo Pereira, Jairo Diniz e Debora Cheine<br />
        Violoncelos: Luiz Fernando Zamith e Hugo Pilger<br />
        Vocais (est&uacute;dio): Cris Dellano, Marisa Alfaia, Nina Pancevski, Nan&aacute; Tribuzi, Paulo Soledade, Paulo Henrique, Hamleto Satamato e Paulinho Trompete<br />
    </p>
    ',
    'faixa_mp3' => '2000-2.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'109',
    'faixa_titulo' => 'Pedra de Responsa (Ao Vivo)',
    'compositor' => '(Chico C&eacute;sar / Zeca Baleiro)',
    'dolp' => 'Do CD &ldquo;Brasil All Stars &ndash; Sons da terra (Benefit for street kids)&rdquo;, CD-PIR1574 (2000)',
    'letra' => '<p>&Eacute; pedra, &eacute; pedra, &eacute; pedra<br />
        &Eacute; pedra de responsa<br />
        Mam&atilde;e eu volto pra ilha<br />
    Nem que seja montado na on&ccedil;a</p>
    <p>Quando fui na ilha maravilha<br />
        Fui tratado como um pax&aacute;<br />
        Me deram arroz de cux&aacute;<br />
        &Aacute;gua gelada da bilha<br />
        Cozido de jurar&aacute;<br />
    Alavantu na quadrilha</p>
    <p>Me levaram no boi-bumb&aacute; pra dan&ccedil;ar<br />
        Eu dancei<br />
        Me deram catuaba pra provar<br />
        Aprovei<br />
        Me deram um cigarrinho pra fumar<br />
    Menino, como eu gostei</p>',
    'creditos' => '<p>Viol&atilde;o e guitarra: Marcos Arcanjo<br />
        Baixo: Jacar&eacute;<br />
        Acordeom: Ol&iacute;vio Filho<br />
        Percuss&atilde;o: Paulinho He-Man<br />
        Bateria: Tost&atilde;o Queiroga<br />
    </p>',
    'faixa_mp3' => '2000-9.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'109',
    'faixa_titulo' => '&Eacute; d&rsquo;Oxum (Ao Vivo)',
    'compositor' => '(Ger&ocirc;nimo / Vev&eacute; Calazans)',
    'dolp' => 'Do CD &ldquo;Brasil All Stars &ndash; Sons da terra (Benefit for street kids)&rdquo;, CD-PIR1574 (2000)
    ',
    'letra' => '<p><em>(letra em yorub&aacute;)</em></p>
    <p>Nessa cidade todo mundo &eacute; d&rsquo;Oxum<br />
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
    Eu vou navegar</p>',
    'creditos' => '<p>Viol&atilde;o e guitarra: Marcos Arcanjo<br />
        Baixo: Jacar&eacute;<br />
        Acordeom: Ol&iacute;vio Filho<br />
        Percuss&atilde;o: Paulinho He-Man<br />
        Bateria: Tost&atilde;o Queiroga<br />
    </p>',
    'faixa_mp3' => '2000-10.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'110',
    'faixa_titulo' => 'Folia de Rua',
    'compositor' => '(Mestre Fub&aacute;)',
    'dolp' => 'Do CD &ldquo;Bloco de Jo&atilde;o Pessoa: Folia de Rua&rdquo;, Independente (2000)
    ',
    'letra' => '<p>Cara de malandro boa pinta s&oacute; vale<br />
        No carnaval de rua<br />
        A folia n&atilde;o pertence a ningu&eacute;m<br />
    T&aacute; cada um na sua</p>
    <p>Palha&ccedil;os, pirilampos, colombinas se esbaldam<br />
        Nos bra&ccedil;os de um pierr&ocirc;<br />
        Abra seu abra&ccedil;o e sorria<br />
    Que a verdadeira folia de rua chegou</p>
    <p>Bicho, bicho, bicho, bicho maluco n&atilde;o paga<br />
        Vai todo mundo nessa<br />
        Se a galera passa acendendo a massa<br />
    O carnaval come&ccedil;a</p>
    <p>Confete, serpentina, purpurina, cacha&ccedil;a<br />
        Chuva, suor e tes&atilde;o<br />
        Essa alegria &eacute; a folia de rua<br />
    Que t&aacute; na sua mexendo com a multid&atilde;o</p>
    <p>Atr&aacute;s do trio el&eacute;trico eu vou, eu vou<br />
        No passo dessa banda eu vou atr&aacute;s<br />
        E tudo quanto &eacute; bloco eu ainda acho pouco<br />
    Quero muito, &eacute; muito mais</p>
    <p>Atr&aacute;s do trio el&eacute;trico eu vou, eu vou<br />
        No passo dessa banda eu vou brincar<br />
    Nessa folia quero ver voc&ecirc; entrar</p>',
    'creditos' => '<p>Arranjo: Marcelo Vilor<br />
        Trompetes: Ranilson e Denilson<br />
        Sax bar&iacute;tono: Costinha<br />
        Sax alto: Teinho<br />
        Sax tenor: Jo&atilde;o Paulo<br />
        Trombone vara: Rog&eacute;rio<br />
        Bumbo: See<br />
        Baixo: Rubens<br />
        Guitarra: Letinho<br />
        Cantores: Luciene e Ricardo<br />
        Vocal: Cinderela<br />
    </p>',
    'faixa_mp3' => '2000-11.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'115',
    'faixa_titulo' => 'A Vida do Viajante (Ao Vivo)',
    'compositor' => '(Luiz Gonzaga / Herv&eacute; Cordovil)',
    'dolp' => 'Do DVD &ldquo;O grande encontro 3&rdquo;, BMG Brasil (2000)<br />
    Com:<strong> Geraldo Azevedo, Z&eacute; Ramalho, Moraes Moreira, Belchior e Lenine</strong>
    ',
    'letra' => '<p>Minha vida &eacute; andar por esse pa&iacute;s<br />
        Pra ver se um dia descanso feliz<br />
        Guardando as recorda&ccedil;&otilde;es<br />
        Das terras onde passei<br />
        Andando pelos sert&otilde;es<br />
    Dos amigos que l&aacute; deixei</p>
    <p>Chuva, sol, poeira e carv&atilde;o<br />
        Longe de casa, sigo o roteiro<br />
        Mais uma esta&ccedil;&atilde;o<br />
    E a saudade no cora&ccedil;&atilde;o</p>
    <p>Mar e terra, inverno e ver&atilde;o<br />
        Mostro o sorriso, mostro a alegria<br />
        Mas eu mesmo, n&atilde;o<br />
    E a saudade no cora&ccedil;&atilde;o</p>',
    'creditos' => '<p>Viol&atilde;o: Geraldo Azevedo e Z&eacute; Ramalho<br />
        Acordeom: Marcos Farias<br />
        Percuss&atilde;o: Paulinho He-Man e Z&eacute; Gomes<br />
        Cello: Lui Coimbra<br />
        Flauta: Cesar Michilles<br />
    </p>',
    'faixa_mp3' => '2000-21.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'111',
    'faixa_titulo' => 'Quero Mais',
    'compositor' => '(Netinho)',
    'dolp' => 'Do CD &ldquo;Deus aben&ccedil;oe as crian&ccedil;as&rdquo;, Independente (2000)
    ',
    'letra' => '<p>Quero cantar pra voc&ecirc;s neste tom<br />
        Mais uma melodia<br />
        S&oacute; quero passar pra voc&ecirc;s nesse som<br />
    Um pouco de alegria</p>
    <p>Quero cantar e aproveitar uma vez mais<br />
        O dom de doar harmonia<br />
        Pra pisar de vez firme nesse ch&atilde;o<br />
    Dia, dia, dia, dia, noite e dia</p>
    <p>Meus filhos, meus amigos<br />
        Meu pai, minha m&atilde;e<br />
        Meu parente pr&oacute;ximo, meu pr&oacute;ximo<br />
        Meu companheiro, meu guia<br />
        Meu irm&atilde;o e at&eacute; quem n&atilde;o me engolia<br />
    Nem lia no meu cora&ccedil;&atilde;o</p>
    <p>E o amor ardia<br />
        E s&oacute; a f&eacute; renasce em tudo<br />
        Daquilo que iludiu e passou<br />
        E agora eu quero mais<br />
        Eu quero mais, eu quero mais<br />
        E agora eu quero mais<br />
        Eu quero mais, eu quero mais<br />
    Eu quero &eacute; mais</p>',
    'creditos' => '<p>Dire&ccedil;&atilde;o geral: Netinho<br />
        Produ&ccedil;&atilde;o musical: Sandro Haick<br />
        Arranjo: Sandro Haick e Pepe Rodrigues<br />
        Teclados e piano: Pepe Rodrigues<br />
        Bateria e percuss&atilde;o: Cuca Teixeira<br />
        Sax tenor: Manito<br />
        Programa&ccedil;&atilde;o de loops: Edu Martins<br />
        Coro: Caio Fl&aacute;vio, Ringo, Maria e Angela<br />
        Coro infantil: La&iacute;s, Let&iacute;cia, Alex, Karina e Felipe<br />
    </p>',
    'faixa_mp3' => '2000-12.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'111',
    'faixa_titulo' => 'Deus Aben&ccedil;oe as Crian&ccedil;as',
    'compositor' => '(Marinho Marcos / Eunice Barbosa)',
    'dolp' => 'Do CD &ldquo;Deus aben&ccedil;oe as crian&ccedil;as&rdquo;, Independente (2000)<br />
    Com:<strong> Coral Infantil</strong>
    ',
    'letra' => '<p>&Eacute; preciso cuidar<br />
        Dessa casa onde a gente mora<br />
        Da beleza por dentro e por fora<br />
    Nossa vida tem muito valor</p>
    <p>&Eacute; preciso cuidar<br />
        Da sa&uacute;de, do corpo e da alma<br />
        Pra manter o equil&iacute;brio e a calma<br />
    N&oacute;s devemos plantar o amor</p>
    <p>Deus aben&ccedil;oe as crian&ccedil;as<br />
        Crian&ccedil;as do terceiro mil&ecirc;nio<br />
        Viva a for&ccedil;a da vida<br />
    Viva Jesus Nazareno</p>
    <p>Deus aben&ccedil;oe as crian&ccedil;as<br />
        Que cres&ccedil;am na paz, na alegria<br />
        S&atilde;o elas a nossa esperan&ccedil;a<br />
    De um mundo melhor todo dia</p>
    <p>&Eacute; preciso saber<br />
        Que a esperan&ccedil;a &eacute; o caminho da luz<br />
        O amor &eacute; a m&atilde;o que conduz<br />
    E que a f&eacute; n&atilde;o podemos perder</p>
    <p>&Eacute; preciso acender<br />
        Essa luz que est&aacute; dentro de n&oacute;s<br />
        Pra que Deus possa ouvir nossa voz<br />
    E dar for&ccedil;a pra gente viver</p>',
    'creditos' => '<p>Dire&ccedil;&atilde;o geral: Netinho<br />
        Produ&ccedil;&atilde;o musical: Sandro Haick<br />
        Arranjo: Sandro Haick e Pepe Rodrigues<br />
        Teclados e piano: Pepe Rodrigues<br />
        Bateria e percuss&atilde;o: Cuca Teixeira<br />
        Coro: Caio Fl&aacute;vio, Ringo, Maria e Angela<br />
        Coro infantil: La&iacute;s, Let&iacute;cia, Alex, Karina e Felipe<br />
    </p>',
    'faixa_mp3' => '2000-13.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'114',
    'faixa_titulo' => 'A Fala do Rio',
    'compositor' => '(Egberto Gismonti / Ben&eacute; Fonteles)',
    'dolp' => 'Do CD encartado no livro de Ben&eacute; Fonteles &ldquo;Caminho das &aacute;guas &ndash; Rio S&atilde;o Francisco &ndash; Hist&oacute;rias e m&uacute;sicas&rdquo;, Independente / Mov. Artistas pela Natureza (2000)<br />
    Com:<strong> Gilberto Gil</strong>
    ',
    'letra' => '<p><em>Texto de Ben&eacute; Fonteles musicado por Egberto Gismonti</em></p>
    ',
    'creditos' => '',
    'faixa_mp3' => '2000-20.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'113',
    'faixa_titulo' => 'Rebenta Boi',
    'compositor' => '(C&acirc;ndido Canela)',
    'dolp' => 'Do CD Assis &Acirc;ngelo &ldquo;Interpreta poetas brasileiros&rdquo;, Independente (2000)<br />
    Com:<strong> Assis &Acirc;ngelo</strong>
    ',
    'letra' => '<p>Na b&ecirc;ra dum curr&aacute; v&eacute;io<br />
        Suzinha, discunsulada<br />
        Floresce o rebenta boi<br />
    Nas taperinha largada</p>
    <p>Vanc&ecirc;is cunhece essa fruita<br />
        De p&eacute; rasteiro no ch&atilde;o?<br />
        &Eacute; a mais bela de todas<br />
    Nas terras do meu sert&atilde;o</p>
    <p>Ningu&eacute;m apois lhe precura<br />
        &Eacute; fruita que nem se come<br />
        Pru isso v&eacute;ve isquicida<br />
    Nos pensamento dos home</p>
    <p>Mas, por&eacute;m, rebenta boi<br />
        Tem formosura e beleza<br />
        Tomb&eacute;m foi feita por Deus<br />
    Num beijo da natureza</p>
    <p>Mesmo escrava do destino<br />
        Largada, sem prote&ccedil;&atilde;o<br />
        Rebenta boi inda &eacute;<br />
    A mais bela do sert&atilde;o</p>
    <p>Tem o marelo do sol<br />
        O verde dos matag&aacute;r<br />
        O azul formando as core<br />
    Da bandeira nacion&aacute;</p>
    ',
    'creditos' => '<p>Produtor fonogr&aacute;fico: Te&oacute;filo de Azevedo Filho/Pequizeiro Produ&ccedil;&otilde;es Art&iacute;sticas<br />
        Tema de fundo: &ldquo;Tiagoilana&rdquo;, de T&eacute;o Azevedo (solo de viola caipira)<br />
    </p>',
    'faixa_mp3' => '2000-19.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'119',
    'faixa_titulo' => 'Mar Vermelho',
    'compositor' => '(Moraes Moreira / Tavinho Paes)',
    'dolp' => 'Do CD Moraes Moreira &ldquo;Bai&atilde;o com H&rdquo;, Atra&ccedil;&atilde;o ATR 31083 (2001)<br />
    Com:<strong> Moraes Moreira</strong>
    ',
    'letra' => '<p>O mar vermelho levantou crista de galo<br />
        Meu pensamento firme naquela mulher<br />
        Apaixonada ela vem fazendo onda<br />
        Manda e desmanda<br />
    E nem eu sei o que ela quer</p>
    <p>Puxa essa rede porque o mar n&atilde;o t&aacute; pra peixe<br />
        Recolha a vela porque o tempo j&aacute; virou<br />
        Na sua aldeia hoje &eacute; dia de festa<br />
        Se n&atilde;o foi dia de pesca<br />
    &Eacute; noite de pescador</p>
    <p>Vem meu amor<br />
        Venha pra areia pra n&atilde;o marear<br />
        Vem meu amor<br />
    Que a lua cheia vai clarear</p>
    <p>Meu marinheiro<br />
        &Eacute; passageiro esse tempo medonho<br />
        Vem matar a minha sede balan&ccedil;ando a rede<br />
    Embalando nosso sonho</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Moraes Moreira e Jairo Pires<br />
        Arranjo, reg&ecirc;ncia, sax tenor e flauta: Roberto Stepheson<br />
        Voz e viol&atilde;o: Moraes Moreira<br />
        Acordeom: Chiquinho Chagas<br />
        Baixo: Fernando de Souza<br />
        Bateria e percuss&atilde;o: Ramiro Musotto<br />
        Sax alto, sax bar&iacute;tono, flauta transversa e flautim: Alexandre Caldi<br />
        Trombone: Elias Corr&ecirc;a<br />
        Trompete: Marcos Belchior<br />
    </p>',
    'faixa_mp3' => '2001-5.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'116',
    'faixa_titulo' => 'Ave Rainha',
    'compositor' => '(Andr&eacute; Luiz Oliveira)',
    'dolp' => 'Do CD &ldquo;Cora&ccedil;&atilde;o de M&atilde;e&rdquo;, Ramax/Som Livre 3041-2 (2001)
    ',
    'letra' => '<p>&Oacute; m&atilde;e<br />
        Onde foi pousar teu carinho?<br />
        &Oacute; m&atilde;e de Deus, olhai por n&oacute;s<br />
    Da altura do teu ninho</p>
    <p>Vem buscar<br />
        O teu filho no caminho, m&atilde;e<br />
        Vibra aqui comigo, sou sozinho<br />
        O teu calor<br />
    Arde em mim como uma chama, chama</p>
    <p>&Oacute; m&atilde;e<br />
        Como pude esquecer teu perfume?<br />
        &Oacute; m&atilde;e de Deus<br />
    Dai-me o voo da lembran&ccedil;a que nos une</p>
    <p>Quero ir<br />
        No teu sil&ecirc;ncio que resume, m&atilde;e<br />
        Todo o amor, preciso a luz<br />
        Quero teu lume<br />
        O teu calor<br />
    Arde em mim como uma chama, chama</p>
    <p>&Oacute; m&atilde;e<br />
        &Oacute; m&atilde;e de Deus<br />
    Por que estou aqui?</p>
    <p>Yhwh<br />
        Yhwh<br />
    Yhwh</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Elba Ramalho<br />
        Dire&ccedil;&atilde;o musical, arranjo e reg&ecirc;ncia de cordas: Marcos Farias<br />
        Viol&otilde;es: Marcos Arcanjo<br />
        Cordas: Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
    </p>',
    'faixa_mp3' => '2001-1.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'116',
    'faixa_titulo' => 'Estrela Soberana',
    'compositor' => '(Elba Ramalho / Geraldo Azevedo)',
    'dolp' => 'Do CD &ldquo;Cora&ccedil;&atilde;o de M&atilde;e&rdquo;, Ramax/Som Livre 3041-2 (2001)
    ',
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
        E abrasa a terra<br />
        Com seu manto azul<br />
        Aromas, b&aacute;lsamos de amor<br />
    Senhora M&atilde;e</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Elba Ramalho<br />
        Piano: Marcos Farias<br />
    </p>',
    'faixa_mp3' => '2001-2.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'120',
    'faixa_titulo' => 'Costa das Laranjeiras',
    'compositor' => '(Zezo Ribeiro)',
    'dolp' => 'Do CD Zezo Ribeiro &ldquo;Flamencando&rdquo;, Nubenegra (2001)
    ',
    'letra' => '<p>Costa das laranjeiras que vem l&aacute; do alto<br />
        Costa das laranjeiras que vem l&aacute; do alto<br />
        Que vem l&aacute; do alto das manh&atilde;s que vem<br />
    Que lindo</p>
    <p>Faz a can&ccedil;&atilde;o pra ela vir cantar<br />
        Faz a can&ccedil;&atilde;o que eu gosto pra voc&ecirc;<br />
        Que &eacute; meu cantar<br />
        Que &eacute; tudo palco<br />
        Florindo as noites do palco<br />
        Que &eacute; preu te ver l&aacute; no alto<br />
    Porta das emo&ccedil;&otilde;es</p>
    <p>Palco<br />
        Cobrindo as noites no palco<br />
        Me faz sonhar l&aacute; do alto<br />
    Costa dos cora&ccedil;&otilde;es</p>
    ',
    'creditos' => '<p>Arranjo e bateria: Christiano Rocha<br />
        Viol&atilde;o Conde Hermanos: Zezo Ribeiro<br />
        Baixo el&eacute;trico: Cl&aacute;udio Machado<br />
        Teclados: Jos&eacute; Roberto Gaia<br />
        Guitarra el&eacute;trica: Marcelo Pizarro<br />
        Acordeom: Oswaldinho do Acordeom<br />
    </p>
    ',
    'faixa_mp3' => '2001-6.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'118',
    'faixa_titulo' => 'F&eacute; Cega, Faca Amolada',
    'compositor' => '(Milton Nascimento / Ronaldo Bastos)',
    'dolp' => 'Do CD Roupa Nova &ldquo;Ouro de Minas&rdquo;, Universal 7.314.548.861-2 (2001)<br />
    Com:<strong> Roupa Nova</strong>
    ',
    'letra' => '<p>Agora n&atilde;o pergunto mais aonde vai a estrada<br />
        Agora n&atilde;o espero mais aquela madrugada<br />
        Vai ser, vai ser, vai ter de ser, vai ser faca amolada<br />
    O brilho cego de paix&atilde;o e f&eacute;, faca amolada</p>
    <p>Deixar a sua luz brilhar e ser muito tranquilo<br />
        Deixar o seu amor crescer e ser muito tranquilo<br />
        Brilhar, brilhar, acontecer, brilhar, faca amolada<br />
    Irm&atilde;o, irm&atilde;, irm&atilde;, irm&atilde;o de f&eacute;, faca amolada</p>
    <p>Plantar o trigo e refazer o p&atilde;o de cada dia<br />
        Beber do vinho e renascer na luz de todo dia<br />
        A f&eacute;, a f&eacute;, paix&atilde;o e f&eacute;, a f&eacute;, faca amolada<br />
    O ch&atilde;o, o ch&atilde;o, o sal da terra, o ch&atilde;o, faca amolada</p>
    <p>Deixar a sua luz brilhar no p&atilde;o de cada dia<br />
        Deixar o seu amor crescer na luz de todo dia<br />
        Vai ser, vai ser, vai ter de ser, vai ser muito tranquilo<br />
    O brilho cego de paix&atilde;o e f&eacute;, faca amolada</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Roupa Nova<br />
        Arranjo, reg&ecirc;ncia de saxofones, teclados e vocal: Cleberson Horsth<br />
        Percuss&atilde;o, vocal e voz: Paulinho<br />
        Baixo, programa&ccedil;&atilde;o de computador e vocal: Nando<br />
        Guitarra, viol&atilde;o e vocal: Kiko<br />
        Bateria e vocal: Serginho<br />
        Teclados, viol&atilde;o e vocal: Ricardo Feghali<br />
        Saxofones: Marcelo Martins e Henrique Band<br />
    </p>',
    'faixa_mp3' => '2001-4.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'117',
    'faixa_titulo' => 'Romaria',
    'compositor' => '(Renato Teixeira)',
    'dolp' => 'Do CD Padre Ant&ocirc;nio Maria &ldquo;Apenas um menino&rdquo;, Sony/BMG 2-502580 (2001)<br />
    Com:<strong> Padre Ant&ocirc;nio Maria</strong>
    ',
    'letra' => '<p>&Eacute; de sonho e de p&oacute;<br />
        O destino de um s&oacute;<br />
        Feito eu perdido em pensamentos<br />
    Sobre o meu cavalo</p>
    <p>&Eacute; de la&ccedil;o e de n&oacute;<br />
        De jibeira<br />
        O jil&oacute; dessa vida<br />
    Cumprida a s&oacute;</p>
    <p>Sou caipira, Pirapora<br />
        Nossa Senhora de Aparecida<br />
        Ilumina a mina escura e funda<br />
    O trem da minha vida</p>
    <p>O meu pai foi pe&atilde;o<br />
        Minha m&atilde;e solid&atilde;o<br />
        Meus irm&atilde;os perderam-se na vida<br />
    &Agrave; custa de aventuras</p>
    <p>Descasei, joguei<br />
        Investi, desisti<br />
        Se h&aacute; sorte<br />
    Eu n&atilde;o sei, nunca vi</p>
    <p>Me disseram, por&eacute;m<br />
        Que eu viesse aqui<br />
        Pra pedir de romaria e prece<br />
    Paz nos desaventos</p>
    <p>Como eu n&atilde;o sei rezar<br />
        S&oacute; queria mostrar<br />
        Meu olhar, meu olhar<br />
    Meu olhar</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Dalmo Beloti<br />
        Arranjo e teclados: Tutuca Borba<br />
        Viol&atilde;o e guitarra: Pedrinho Periquito<br />
        Baixo: Paulo Cesar<br />
        Bateria e percuss&atilde;o: Paulinho Ribeiro<br />
        Vocais: Marise Resende, Nina Pancevski, Ricardo Magno e Simiana Resende<br />
    </p>',
    'faixa_mp3' => '2001-3.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'122',
    'faixa_titulo' => 'Noites de Junho',
    'compositor' => '(Alberto Ribeiro / Jo&atilde;o de Barro)',
    'dolp' => 'Do CD &ldquo;Braguinha &ndash; Songbook vol. 1&rdquo;, Lumiar LD 58 (2002)
    ',
    'letra' => '<p>Noite fria, t&atilde;o fria de junho<br />
        Os bal&otilde;es para o c&eacute;u v&atilde;o subindo<br />
        Entre as nuvens aos poucos sumindo<br />
    Envoltos num t&ecirc;nue v&eacute;u</p>
    <p>Os bal&otilde;es devem ser com certeza<br />
        As estrelas daqui deste mundo<br />
        E as estrelas do espa&ccedil;o profundo<br />
    S&atilde;o os bal&otilde;es l&aacute; do c&eacute;u</p>
    <p>Bal&atilde;o do meu sonho dourado<br />
        Subiste enfeitado, cheinho de luz<br />
        Depois as crian&ccedil;as tascaram<br />
    Rasgaram teu bojo de listras azuis</p>
    <p>E tu que invejando as estrelas<br />
        Sonhavas, ao v&ecirc;-las, ser astro no c&eacute;u<br />
        Hoje bal&atilde;o apagado<br />
    Acabas rasgado em trapos ao l&eacute;u</p>',
    'creditos' => '<p>Arranjo e piano: Leandro Braga<br />
        Acordem: Chico Chagas<br />
        Ganz&aacute;, agog&ocirc; e tri&acirc;ngulo: Dom Chacal<br />
        Zabumba: Firmino<br />
        Viol&atilde;o: Jo&atilde;o Lyra<br />
        Baixo el&eacute;trico: Jorge Helder<br />
        Viol&atilde;o 7 cordas: Marcello Gon&ccedil;alves<br />
    </p>',
    'faixa_mp3' => '2002-5.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'126',
    'faixa_titulo' => 'Drumemb&ecirc;is',
    'compositor' => '(Zeca Baleiro)',
    'dolp' => 'Do CD Zeca Baleiro &ldquo;Pet Shop Mundo C&atilde;o&rdquo;, Abril Music/MZA 2407004-2 (2002)<br />
    Com:<strong> Zeca Baleiro, Totonho e Os Cabra e Karnak</strong>
    ',
    'letra' => '
    <p><em>T&aacute; rolando uma onda a&iacute;<br />
    Manda a&iacute; DJ Corisco</em></p>
    <p>&Eacute; drumemb&ecirc;is, drumemb&ecirc;is, drumemb&ecirc;is<br />
        Todo mundo t&aacute; entrando na onda do drumemb&ecirc;is<br />
        &Eacute; drumemb&ecirc;is, drumemb&ecirc;is, drumemb&ecirc;is<br />
    Todo mundo apavorando na levada drumemb&ecirc;is</p>
    <p>At&eacute; Maricota<br />
        Desviou a sua rota<br />
        Desligou sua Toyota<br />
        E caiu no drumemb&ecirc;is<br />
        S&aacute; Josefina, Serafina e Orelina<br />
        Todo mundo arrepiou<br />
        E se lascou no drumemb&ecirc;is<br />
        E eu tamb&eacute;m vou me lascar<br />
    Vou me espalhar no drumemb&ecirc;is</p>
    <p>Fiz uns biscate<br />
        E comprei uma picape<br />
        Embolada &eacute; quase rap<br />
        Rap &eacute; quase drumemb&ecirc;is<br />
        Tonho de Zefa endoidou<br />
        Tomou um ecstasy<br />
        E ficou metido a besta<br />
    Se ferrou, foi pro xadrez</p>
    <p>Em Juazeiro, Salgueiro e Petrolina<br />
        A noite &eacute; uma menina<br />
        Londrina num drumemb&ecirc;is<br />
        T&aacute; todo mundo com medo do fim do mundo<br />
        Mas pior que o fim do mundo<br />
    Para mim &eacute; o fim do m&ecirc;s</p>
    <p>T&aacute; todo mundo querendo rir para o mundo<br />
        Fingindo falar umbundo<br />
        Para impressionar ingl&ecirc;s<br />
        Fui numa rave<br />
        Nos confins de Arapiraca<br />
        Enfiei o p&eacute; na jaca<br />
    Cantei folia de reis</p>
    <p><em>Senhora dona da casa<br />
        Vim cantar mais uma vez<br />
        Deus lhe d&ecirc; felicidade<br />
    Paz amor e ...</em></p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Ramiro Musotto e Zeca Baleiro<br />
        Voz e viol&atilde;o: Zeca Baleiro<br />
        Guitarra: Rog&eacute;rio Delayon<br />
        Programa&ccedil;&atilde;o de MPC: Ramiro Musotto<br />
        Programa&ccedil;&atilde;o de teclados e baixo: Sacha Amback<br />
        Scratch: &Eacute;rico Theobaldo<br />
        Air Fx: Evaldo Luna<br />
        Totonho e os Cabra (Voz: Totonho // Vocal: Toni Monteiro)<br />
        Karnak (Voz e vocal: Andr&eacute; Abujamra // Sax soprano e vocal: Hugo Hori // Vocal: Marcos Bowie e Mano Bap)<br />
    </p>',
    'faixa_mp3' => '2002-10.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'123',
    'faixa_titulo' => 'Nova Ilus&atilde;o',
    'compositor' => '(Claudionor Cruz / Pedro Caetano)',
    'dolp' => 'Do CD Conjunto &Eacute;poca de Ouro &ldquo;Caf&eacute; Brasil 2&rdquo;, Warner 505.046.606.962-7 (2002)<br />
    Com:<strong> Conjunto &Eacute;poca de Ouro</strong>
    ',
    'letra' => '<p>&Eacute; dos teus olhos a luz<br />
        Que ilumina e conduz<br />
        Minha nova ilus&atilde;o<br />
        &Eacute; nos teus olhos que eu vejo<br />
    Um amor, um desejo do meu cora&ccedil;&atilde;o</p>
    <p>&Eacute;s um poema na terra<br />
        Uma estrela no c&eacute;u, um tesouro no mar<br />
        &Eacute;s tanta felicidade<br />
    Que nem a metade consigo exaltar</p>
    <p>Se um beija-flor descobrisse<br />
        A do&ccedil;ura e a meiguice que teus l&aacute;bios t&ecirc;m<br />
        Jamais ro&ccedil;aria as asas brejeiras<br />
    Por entre roseiras ou jardins de ningu&eacute;m</p>
    <p>&Oacute; dona dos sonhos, ilus&atilde;o concebida<br />
        Surpresa que a vida me fez das mulheres<br />
        H&aacute; no meu cora&ccedil;&atilde;o uma flor em bot&atilde;o<br />
    Que abrir&aacute; se quiseres</p>
    ',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Jorginho do Pandeiro e Vin&iacute;cius S&aacute;<br />
        Arranjo e viol&atilde;o 7 cordas: Dino 7 Cordas<br />
        Viol&otilde;es: Cesar Faria e Toni<br />
        Pandeiro: Jorginho do Pandeiro<br />
        Cavaquinho: Jorginho Filho<br />
        Bandolim: Ronaldo do Bandolim<br />
    </p>
    ',
    'faixa_mp3' => '2002-6.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'124',
    'faixa_titulo' => 'Entre o C&eacute;u e o Mar (Ao Vivo)',
    'compositor' => '(Roger Henri / Dudu Falc&atilde;o)',
    'dolp' => 'Do CD &ldquo;Palco MPB 2 &ndash; Ao vivo&rdquo;, Sony/BMG (2002)
    ',
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
    &Eacute; t&atilde;o igual ao seu</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Adriana Ramos, Hugo Pereira Nunes, Paula Melo e Renan Miranda<br />
        Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
    </p>',
    'faixa_mp3' => '2002-7.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'124',
    'faixa_titulo' => 'Veja (Margarida) (Ao Vivo)',
    'compositor' => '(Vital Farias)',
    'dolp' => 'Do CD &ldquo;Palco MPB 2 &ndash; Ao vivo&rdquo;, Sony/BMG (2002)
    ',
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
    <p>Essas feridas da vida, Margarida<br />
        Essas feridas da vida, amarga vida<br />
        Pra voc&ecirc; gostar<br />
    (Pra voc&ecirc; gostar de mim)</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Adriana Ramos, Hugo Pereira Nunes, Paula Melo e Renan Miranda<br />
        Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos<br />
    </p>
    ',
    'faixa_mp3' => '2002-8.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'125',
    'faixa_titulo' => 'Vem Dudu',
    'compositor' => '(Natanael Guedes / Jo&atilde;o Santiago)',
    'dolp' => 'Do CD &ldquo;Vem Dudu &ndash; Bloco Flor da Lira de Olinda&rdquo;, Independente (2002)
    ',
    'letra' => '<p>Se Duarte Coelho soubesse<br />
        Do carnaval de Olinda<br />
        Pedia ao criador<br />
        Pra voltar ao alto da S&eacute;<br />
        E dan&ccedil;ar um frevo rasgado<br />
    Na cidade que ele fundou</p>
    <p>Vem, vem, vem Dudu<br />
        Venha ver Flor da Lira passar<br />
        O frevo est&aacute; em Olinda<br />
    E chegou para ficar</p>',
    'creditos' => '<p>Dire&ccedil;&atilde;o geral e produ&ccedil;&atilde;o art&iacute;stica: Seronildo Guerra<br />
        Produ&ccedil;&atilde;o executiva: Duda Layme<br />
        Dire&ccedil;&atilde;o musical, arranjo, reg&ecirc;ncia, viol&atilde;o e violino: Romildo Pessoa<br />
        Bombardino: Ibrahim Genu&iacute;no<br />
        Caixa: Severino Ramos (Raminho)<br />
        Surdo: Ivo da Silva (Ivinho)<br />
        Banjo: Jo&atilde;o Duarte e Carlos Eduardo (Dudu)<br />
        Bandolim e pandeiro: Nilson Gomes<br />
        Sax tenor: L&uacute;cio Henrique<br />
        Sax alto: Humberto Rodrigues (Preguinho)<br />
        Trompete: Altamir Pereira<br />
        Flauta: Eduardo Layme Dantas<br />
        Cavaquinho: Andrews Duarte (Dindinho)<br />
        Clarinete: Vlademir Vieira<br />
    </p>',
    'faixa_mp3' => '2002-9.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'127',
    'faixa_titulo' => 'S&atilde;o Jo&atilde;o de Seu Luiz',
    'compositor' => '(Toinho Alves)',
    'dolp' => 'Do CD Quinteto Violado &ldquo;Retirantes de Sanfona e Violadas&rdquo;, Atra&ccedil;&atilde;o (2002)<br />
    Com:<strong> Quinteto Violado e v&aacute;rios artistas</strong>
    ',
    'letra' => '<p>Se a gente bem soubesse<br />
        Festa de S&atilde;o Jo&atilde;o<br />
        De uns tempos pra c&aacute;<br />
    Seria do Rei do Bai&atilde;o</p>
    <p>Por isso eu fa&ccedil;o agora<br />
        Do artista a obriga&ccedil;&atilde;o<br />
        De manter bem viva a obra<br />
    De Luiz, Rei do Bai&atilde;o</p>
    <p>Toca, sanfoneiro, a m&uacute;sica do Rei<br />
        Viva Luiz Gonzaga<br />
        Pelo que foi, pelo que fez<br />
        Toca, sanfoneiro, a m&uacute;sica do Rei<br />
        Viva Luiz Gonzaga<br />
    Pelo que foi, pelo que fez</p>
    <p>S&atilde;o Jo&atilde;o n&atilde;o vai<br />
        N&atilde;o vai se incomodar<br />
        De dividir com o Rei<br />
    As honras do seu m&ecirc;s</p>
    <p>Ele vai gostar de ouvir um bai&atilde;o<br />
        Em louvor a Seu Luiz<br />
        Sanfoneiro, seu irm&atilde;o<br />
        Ele vai gostar de ouvir um bai&atilde;o<br />
        Em louvor a Seu Luiz<br />
    Sanfoneiro, seu irm&atilde;o</p>',
    'creditos' => '<p>Baixo e voz: Toinho<br />
        Viola e voz: Marcelo<br />
        Viol&atilde;o, flauta e p&iacute;fano: Ciano<br />
        Percuss&atilde;o: Roberto<br />
        Teclado: Dudu<br />
        Baterista convidado: Kiko<br />
    Convidados por ordem de entrada: Elba Ramalho, Gisele Tigre, Alcymar Monteiro, Fl&aacute;vio Jos&eacute;, Chico C&eacute;sar, Santanna o Cantador, Silv&eacute;rio Pessoa, Patr&iacute;cia Fran&ccedil;a, Paulinho Moska, Cl&aacute;udio Lins, Xangai, Joquinha Gonzaga, Maciel Melo, Claudia Soul, Geraldinho Lins, Gerlane Lops, Kleiton e Kledir, Banda de Pau e Corda, Israel Filho, Kiko Oliveira, Lu Sanfoneiro e Banda Alfabeto</p>
    ',
    'faixa_mp3' => '2002-11.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'121',
    'faixa_titulo' => 'L&eacute;gua Tirana (Ao Vivo)',
    'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
    'dolp' => 'Do CD &ldquo;Humberto Teixeira &ndash; O doutor do bai&atilde;o&rdquo;, Biscoito Fino BF 533 (2002)<br />
    Com:<strong> Fagner</strong>
    ',
    'letra' => '<p>&Oacute; que estrada mais comprida<br />
        &Oacute; que l&eacute;gua t&atilde;o tirana<br />
        Ai se eu tivesse asa<br />
    Inda hoje eu via Ana</p>
    <p>Quando o sol tostou as folhas<br />
        E bebeu o riach&atilde;o<br />
        Fui int&eacute; o Juazeiro<br />
    Pra fazer minha ora&ccedil;&atilde;o</p>
    <p>T&ocirc; vortando estrupiado<br />
        Mas alegre o cora&ccedil;&atilde;o<br />
        Padim Ci&ccedil;o ouviu minhas prece<br />
    Fez chover no meu sert&atilde;o</p>
    <p>Trago um ter&ccedil;o pra das Dores<br />
        Pra Reimundo, um viol&atilde;o<br />
        E pra ela, e pra ela<br />
    Trago eu e o cora&ccedil;&atilde;o</p>',
    'creditos' => '<p>Idealiza&ccedil;&atilde;o: Denise Dummont e Ana Lontra Jobim<br />
        Arranjo, dire&ccedil;&atilde;o musical e piano: Wagner Tiso<br />
        Acordeom: Z&eacute; Am&eacute;rico Bastos e Marcos Nimihister<br />
        Baixo el&eacute;trico: Jorge Helder<br />
        Violoncelo: Marcio Mallard<br />
    </p>',
    'faixa_mp3' => '2002-1.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'121',
    'faixa_titulo' => 'Para&iacute;ba (Ao Vivo)',
    'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
    'dolp' => 'Do CD &ldquo;Humberto Teixeira &ndash; O doutor do bai&atilde;o&rdquo;, Biscoito Fino BF 533 (2002)',
    'letra' => '<p>Quando a lama virou pedra<br />
        E Mandacaru secou<br />
        Quando a riba&ccedil;&atilde; de sede<br />
        Bateu asas e voou<br />
        Foi a&iacute; que eu vim me embora<br />
        Carregando a minha dor<br />
    Hoje mando um abra&ccedil;o pra ti pequenina</p>
    <p>Para&iacute;ba masculina<br />
        Mulh&eacute; macho, sim sinh&ocirc;<br />
        Para&iacute;ba masculina<br />
    Mulh&eacute; macho, sim sinh&ocirc;</p>
    <p>&Ecirc;ta pau pereira<br />
        Que em princesa j&aacute; cantou<br />
        &Ecirc;ta Para&iacute;ba<br />
        Mulh&eacute; macho, sim sinh&ocirc;<br />
        &Ecirc;ta pau pereira<br />
        Meu bodoque n&atilde;o quebrou<br />
    Hoje mando um abra&ccedil;o pra ti pequenina</p>',
    'creditos' => '<p>Idealiza&ccedil;&atilde;o: Denise Dummont e Ana Lontra Jobim<br />
        Arranjo, dire&ccedil;&atilde;o musical e piano: Wagner Tiso<br />
        Acordeom: Z&eacute; Am&eacute;rico Bastos<br />
        Teclados: Marcos Nimihister<br />
        Bateria: Andr&eacute; Bochecha<br />
        Baixo el&eacute;trico: Jorge Helder<br />
        Violoncelo: Marcio Mallard<br />
        Clarinete: Cristiano Alves<br />
    </p>',
    'faixa_mp3' => '2002-2.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'121',
    'faixa_titulo' => 'Assum Preto (Ao Vivo)',
    'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
    'dolp' => 'Do CD &ldquo;Humberto Teixeira &ndash; O doutor do bai&atilde;o&rdquo;, Biscoito Fino BF 533 (2002)
    ',
    'letra' => '<p>Tudo em vorta &eacute; s&oacute; beleza<br />
        C&eacute;u de abril e a mata em flor<br />
        Mas assum preto, cego dos &oacute;io<br />
        Num vendo a luz, ai, canta de dor<br />
        Mas assum preto, cego dos &oacute;io<br />
    Num vendo a luz, ai, canta de dor</p>
    <p>Tarvez por ignoran&ccedil;a<br />
        Ou mardade das pi&oacute;<br />
        Furaro os &oacute;io do assum preto<br />
        Pra ele assim, ai, cant&aacute; mi&oacute;<br />
        Furaro os &oacute;io do assum preto<br />
    Pra ele assim, ai, cant&aacute; mi&oacute;</p>
    <p>Assum preto veve sorto<br />
        Mas num pode avu&aacute;<br />
        Mil veze a sina de uma gaiola<br />
        Desde que o c&eacute;u, ai, pudesse oi&aacute;<br />
        Mil veze a sina de uma gaiola<br />
    Desde que o c&eacute;u, ai, pudesse oi&aacute;</p>
    <p>Assum preto o meu cantar<br />
        &Eacute; t&atilde;o triste quanto o teu<br />
        Tamb&eacute;m roubaram o meu amor, ai<br />
        Que era a luz, ai, dos &oacute;io meu<br />
        Tamb&eacute;m roubaram o meu amor, viu<br />
    Que era a luz, ai, dos &oacute;io meu</p>',
    'creditos' => '<p>Idealiza&ccedil;&atilde;o: Denise Dummont e Ana Lontra Jobim<br />
        Arranjo, dire&ccedil;&atilde;o musical e piano: Wagner Tiso<br />
        Acordeom: Z&eacute; Am&eacute;rico Bastos<br />
        Teclados: Marcos Nimihister<br />
        Bateria: Andr&eacute; Bochecha<br />
        Baixo el&eacute;trico: Jorge Helder<br />
        Violoncelo: Marcio Mallard<br />
        Clarinete: Cristiano Alves<br />
    </p>',
    'faixa_mp3' => '2002-3.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'121',
    'faixa_titulo' => 'Asa Branca (Ao Vivo)',
    'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
    'dolp' => 'Do CD &ldquo;Humberto Teixeira &ndash; O doutor do bai&atilde;o&rdquo;, Biscoito Fino BF 533 (2002)<br />
    Com:<strong> Rita Ribeiro, Carm&eacute;lia Alves, Lenine, Fagner e Gilberto Gil</strong>
    ',
    'letra' => '
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
        Numa triste solid&atilde;o<br />
        Espero a chuva cair de novo<br />
        Pra eu voltar pro meu sert&atilde;o<br />
        Espero a chuva cair de novo<br />
    Pra eu voltar pro meu sert&atilde;o</p>
    <p>Quando o verde dos teus olhos<br />
        Se espalhar na pranta&ccedil;&atilde;o<br />
        Eu te asseguro, n&atilde;o chore n&atilde;o, viu<br />
        Que eu vortarei viu, meu cora&ccedil;&atilde;o<br />
        Eu te asseguro, n&atilde;o chore n&atilde;o, viu<br />
    Que eu vortarei viu, meu cora&ccedil;&atilde;o</p>',
    'creditos' => '<p>Idealiza&ccedil;&atilde;o: Denise Dummont e Ana Lontra Jobim<br />
        Arranjo, dire&ccedil;&atilde;o musical e piano: Wagner Tiso<br />
        Acordeom: Z&eacute; Am&eacute;rico Bastos<br />
        Teclados: Marcos Nimihister<br />
        Bateria: Andr&eacute; Bochecha<br />
        Baixo el&eacute;trico: Jorge Helder<br />
        Violoncelo: Marcio Mallard<br />
        Clarinete: Cristiano Alves<br />
    </p>
    ',
    'faixa_mp3' => '2002-4.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'128',
    'faixa_titulo' => 'Flor de Ingazeira',
    'compositor' => '(Francisco Bosco / Jo&atilde;o Bosco)',
    'dolp' => 'Do CD &ldquo;Jo&atilde;o Bosco &ndash; Songbook vol. 2&rdquo;, Lumiar LD 65-04/03 (2003)
    ',
    'letra' => '<p>Do seu amor todos os males j&aacute; sofri<br />
        Eu j&aacute; sofri<br />
        Na &aacute;gua seca da ins&ocirc;nia eu bebi<br />
    Ai, eu bebi</p>
    <p>Perdi a fome de tanto comer a dor<br />
        Ai, eu perdi<br />
        Sol que persegue o retirante aonde for<br />
        Seu amor areeiro<br />
        Seu amor<br />
        Mossor&oacute;, Juazeiro<br />
        Seu amor<br />
    Aonde for</p>
    <p>No mapa das manh&atilde;s paradas do amor<br />
        Cariri, cumeeira<br />
        Seu amor<br />
        Caic&oacute;, flor de ingazeira<br />
    Seu amor</p>
    <p>Os dias mancos v&atilde;o caindo no ch&atilde;o<br />
        As horas cantam sempre o mesmo bord&atilde;o<br />
        Quem responde essa simples quest&atilde;o<br />
        &ldquo;Quantos dentes terei que beijar<br />
    Pra que um dia do gosto dos l&aacute;bios possa desfrutar?&rdquo;</p>
    <p>Do seu amor todos os males j&aacute; sofri<br />
        Eu j&aacute; sofri<br />
    Do seu amor s&oacute; seu amor n&atilde;o conheci</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Almir Chediak<br />
        Arranjo e piano: Leandro Braga<br />
        Viol&atilde;o e viola: Jo&atilde;o Lyra<br />
        Baixo el&eacute;trico: Jorge Helder<br />
        Percuss&atilde;o: Sidinho Moreira<br />
    </p>',
    'faixa_mp3' => '2003-1.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'129',
    'faixa_titulo' => 'Bichinho Danadinho',
    'compositor' => '(Pinto do Acordeon / Cobrinha)',
    'dolp' => 'Do CD Trio Nordestino &ldquo;Ba&uacute; do Trio Nordestino&rdquo;, Som Livre 4323-2 (2003)<br />
    Com:<strong> Trio Nordestino</strong>
    ',
    'letra' => '<p>Por que baixa essa cabe&ccedil;a meu bem<br />
        Quando eu passo por voc&ecirc;?<br />
        Esse teu jeito me devora<br />
    J&aacute; est&aacute; chegando a hora de todo mundo saber</p>
    <p>Por que voc&ecirc; n&atilde;o me olha<br />
        Se eu tenho uma coisinha para lhe dizer?<br />
        Eu vou virar um bichinho pequeno, mas danadinho<br />
        Para perturbar voc&ecirc;<br />
        Eu vou virar um bichinho pequeno, mas danadinho<br />
    Para perturbar voc&ecirc;</p>
    <p>Se eu fosse uma abelhinha<br />
        Eu lhe ferrava, eu lhe picava s&oacute; pra ver<br />
        Voc&ecirc; me pegando, me esmagando<br />
    Judiando pra valer</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo, bateria, baixo, cavaquinho, pandeiro, chocalho, agog&ocirc;, reco-reco e viol&atilde;o de a&ccedil;o: Duani<br />
        Zabumba: Coron&eacute;<br />
        Voz e tri&acirc;ngulo: Luiz M&aacute;rio<br />
        Sanfona: Beto Souza<br />
    </p>',
    'faixa_mp3' => '2003-2.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'132',
    'faixa_titulo' => 'Tambor dos Ateus',
    'compositor' => '(Pedro J&oacute;ia / Tiago Torres da Silva)',
    'dolp' => 'Do CD Pedro Joia &ldquo;Jacarand&aacute;&rdquo;, Zona M&uacute;sica (2003)
    ',
    'letra' => '<p>Quando sua m&atilde;o pousou na minha<br />
        Eu estava certa que tinha<br />
    Um peito de madrugada, &ocirc; ler&ecirc;</p>
    <p>Mas depois da sua m&atilde;o<br />
        Descobri que o cora&ccedil;&atilde;o<br />
    N&atilde;o estava certo de nada, &ocirc; ler&ecirc;</p>
    <p>Cora&ccedil;&atilde;o que aprende a bater<br />
        Pensa que pode esquecer<br />
    O som do tambor de Deus, &ocirc; ler&ecirc;</p>
    <p>Mas quanto mais ele dan&ccedil;a<br />
        Mais dentro dele se cansa<br />
    O batuque dos ateus, &ocirc; ler&ecirc;</p>
    <p>Quando minha m&atilde;o pousou na sua<br />
        Eu me senti linda e nua<br />
    Feliz da minha nudez, &ocirc; ler&ecirc;</p>
    <p>T&atilde;o feliz que desde ent&atilde;o<br />
        S&oacute; penso em pousar a m&atilde;o<br />
    Na sua m&atilde;o outra vez, &ocirc; ler&ecirc;</p>
    <p>Meu cora&ccedil;&atilde;o perto de voc&ecirc;<br />
        Escrevendo o que n&atilde;o l&ecirc;<br />
    Falando o que n&atilde;o escutou, &ocirc; ler&ecirc;</p>
    <p>Canta, canta e n&atilde;o afina<br />
        Mas quando aprende &eacute; que ensina<br />
    O que ningu&eacute;m lhe ensinou, &ocirc; ler&ecirc;</p>',
    'creditos' => '<p>Produzido por Pedro J&oacute;ia e Tiago Torres da Silva<br />
        Dire&ccedil;&atilde;o musical e guitarra: Pedro J&oacute;ia<br />
        Bandolim: Edu Miranda<br />
        Contrabaixo: M&aacute;rio Franco<br />
        Pandeiro: Marcos Suzano<br />
        Caj&oacute;n e djemb&eacute;: Vicki<br />
    </p>',
    'faixa_mp3' => '2003-5.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'131',
    'faixa_titulo' => 'Boatos',
    'compositor' => '(Paulo R&oacute;)',
    'dolp' => 'Do CD Jaguaribe Carne &ldquo;Vem no vento&rdquo;, Chita Discos/Independente (2003)<br />
    Com:<strong> Jaguaribe Carne</strong>
    ',
    'letra' => '<p>Ouvi dizer que a justi&ccedil;a &eacute; cega<br />
        S&oacute; pode ser, s&oacute; pode ser<br />
    S&oacute; pode ser, s&oacute; pode ser</p>',
    'creditos' => '<p>Vozes: Elba Ramalho, Paulo R&oacute; e Pedro Osmar<br />
        Viol&atilde;o: Paulo R&oacute;<br />
        Guitarra: Marcelo Macedo<br />
        Baixo el&eacute;trico: Xisto Medeiros<br />
        Teclado: Helinho Medeiros<br />
        Bateria e tri&acirc;ngulo: Hermes Medeiros (Gongu&eacute;)<br />
        Ganz&aacute;s e alfaias: Hermes, Pedro e Paulo<br />
    </p>',
    'faixa_mp3' => '2003-4.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'130',
    'faixa_titulo' => 'M&atilde;e do C&eacute;u Morena',
    'compositor' => '(Padre Zezinho)',
    'dolp' => 'Do CD Grupo Musical M&atilde;e do Perp&eacute;tuo Socorro &ldquo;S&oacute; por voc&ecirc;, Maria&rdquo;, Independente (2003)',
    'letra' => '<p>M&atilde;e do c&eacute;u morena<br />
        Senhora da Am&eacute;rica Latina<br />
        De olhar e caridade t&atilde;o divina<br />
    De cor igual &agrave; cor de tantas ra&ccedil;as</p>
    <p>Virgem t&atilde;o serena<br />
        Senhora destes povos t&atilde;o sofridos<br />
        Patrona dos pequenos e oprimidos<br />
    Derrama sobre n&oacute;s as tuas gra&ccedil;as</p>
    <p>Derrama sobre os jovens tua luz<br />
        Aos pobres vem mostrar o teu Jesus<br />
    Ao mundo inteiro traz o teu amor de M&atilde;e</p>
    <p>Ensina quem tem tudo a partilhar<br />
        Ensina quem tem pouco a n&atilde;o cansar<br />
    E faz o nosso povo caminhar em paz</p>
    <p>Derrama a esperan&ccedil;a sobre n&oacute;s<br />
        Ensina o povo a n&atilde;o calar a voz<br />
    Desperta o cora&ccedil;&atilde;o de quem n&atilde;o acordou</p>
    <p>Ensina que a justi&ccedil;a &eacute; condi&ccedil;&atilde;o<br />
        De construir um mundo mais irm&atilde;o<br />
    E faz o nosso povo conhecer Jesus</p>
    <p>Ave Maria cheia de gra&ccedil;as<br />
        O senhor &eacute; convosco<br />
        Bendita sois v&oacute;s entre todas as mulheres<br />
    Bendito &eacute; fruto do vosso ventre, Jesus</p>',
    'creditos' => '<p>Dire&ccedil;&atilde;o: Heliane Boaventura Negrini<br />
        Produ&ccedil;&atilde;o: Maria Angela Malleni<br />
        Arranjo e teclados: Misael Passos Jr.<br />
        Acordeom: Mazir e Jorgito<br />
        Viol&otilde;es: Eliane Negrini, Edina Brustolin e Marcos Pereira<br />
    </p>',
    'faixa_mp3' => '2003-3.mp3'
    ] );

ParticipacoesExtras::create( [
'participacoes_id' =>'133',
'faixa_titulo' => 'Sanfoninha Choradeira (Ao vivo)',
'compositor' => '(Luiz Gonzaga / Jo&atilde;o Silva)',
'dolp' => '<p>Do CD Luiz Gonzaga &ldquo;Show de despedida &ndash; Danado de bom&rdquo;, Som Livre (2003)<br />
Gravada ao vivo no Especial da TV Globo de 1984<br />
Com:<strong> Luiz Gonzaga</strong></p>',
'letra' => '<p>Chora sanfoninha, chora, chora<br />
Chora sanfoninha a minha dor<br />
Minha sanfoninha amiga certa<br />
Que chorando tu desperta<br />
O cora&ccedil;&atilde;o do meu amor</p>

<p>E ela me vendo, t&aacute; fingindo que n&atilde;o t&aacute;<br />
T&aacute; me querendo, t&aacute; fingindo que n&atilde;o t&aacute;<br />
Cora&ccedil;&atilde;o batendo, t&aacute; fingindo que n&atilde;o t&aacute;<br />
T&aacute; batendo, t&aacute; morrendo<br />
Mas n&atilde;o quer se declarar<br />
</p>',
'creditos' => '',
'faixa_mp3' => '2003-6.mp3'
] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'139',
    'faixa_titulo' => 'Canta Cora&ccedil;&atilde;o',
    'compositor' => '(Geraldo Azevedo / Carlos Fernando)',
    'dolp' => 'Do CD &ldquo;Canto livre meninada&rdquo;, Independente (2004)<br />
    Com:<strong> Coral Canto Livre Meninada</strong>
    ',
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
    Procurando alcan&ccedil;ar</p>
    <p>A nau perdida, o trem que chega<br />
        A nova dan&ccedil;a, mata verde, esperan&ccedil;a<br />
        Em suas tran&ccedil;as vou voar<br />
    Passarinho, vou voar</p>
    <p>Meu alegre cora&ccedil;&atilde;o<br />
        &Eacute; triste como um camelo<br />
        &Eacute; fr&aacute;gil que nem brinquedo<br />
    &Eacute; forte como le&atilde;o</p>
    <p>&Eacute; todo zelo, &eacute; todo amor, &eacute; desmantelo<br />
        Querubim, &eacute; c&atilde;o de fogo<br />
        Jesus Cristo, &eacute; Lampi&atilde;o<br />
    Passarinho, eu vou voar</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o e dire&ccedil;&atilde;o musical: Socorro Estrela<br />
        Reg&ecirc;ncia e arranjo vocal: Socorro Estrela e Rosana Diogo<br />
        Arranjo instrumental e programa&ccedil;&atilde;o de midi: Socorro Estrela, Poty Junior e Giuliam Cabral<br />
        Arranjo vocal: Socorro Estrela e Rosana Diogo<br />
        Teclados: Giuliam Cabral<br />
        Sax: Costinha<br />
        Coralistas: Adenilda Barbosa, Alan Felisberto, Alane Fernandes, Ang&eacute;lica Nascimento, Cl&aacute;udia Michele, Dayse Santos, D&eacute;bora Silva, Diego Mendes, Diego Felisberto, Edvirgens Menezes, Elaine Moura, Elizabeth Rodrigues, Elizane Nascimento, Emanuel Santos, Graciele Silva, Graziele Souza, Ingrid Silva, Ismaelly Silva, Jac&oacute; J&uacute;nior Lima, Jadely Clementino, Jadilene Clementino, Jadsely Clementino, Jailson dos Santos, Jaqueline Gomes, Jaqueline Moura, J&eacute;ssica dos Santos, Jonatha Lima, Joseane Nascimento, K&eacute;zia Santos, Lindic&aacute;ssia Barbosa, Luana da Silva, Luana Fab&iacute;ola, Marcos Lima, Maria Elias, Maria Martins, Nim&aacute;ria Santos, Paulo Livramento, Pedro Livramento, Ra&iacute;ssa Estrela, S&acirc;mara Silva, Silvana Silva, Tatiana Lira, Wilma Carla e Yuri Lima<br />
    </p>',
    'faixa_mp3' => '2004-7.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'134',
    'faixa_titulo' => 'Alto L&aacute; (Ao Vivo)',
    'compositor' => '(Arlindo Cruz / Sombrinha / Zeca Pagodinho)',
    'dolp' => 'Do CD &ldquo;Um barzinho, um viol&atilde;o vol. 3 e 4&rdquo;, Universal Music 6.024.981.945-0 (2004)
    ',
    'letra' => '<p>Eu soube<br />
        Que voc&ecirc; anda falando<br />
        Que eu fico implorando pra voltar ao nosso lar<br />
        Alto l&aacute;!<br />
        Guarde a l&iacute;ngua na boca<br />
        Sua verdade &eacute; t&atilde;o pouca<br />
        Como pode ter raz&atilde;o?<br />
        Se foi voc&ecirc; quem me pediu perd&atilde;o<br />
    Se foi voc&ecirc; quem me pediu perd&atilde;o</p>
    <p>Hum, voc&ecirc; n&atilde;o mereceu<br />
        Amor igual ao meu<br />
        Era pra ser guardado<br />
        Voc&ecirc; n&atilde;o cumpriu os mandamentos<br />
        E tanto mentiu que conseguiu<br />
    Tudo acabado!</p>
    <p>Vai, quero viver em paz<br />
        Voc&ecirc; pisou demais<br />
        Meu cora&ccedil;&atilde;o sofrido<br />
        Eu volto pra orgia<br />
        O meu mundo proibido<br />
        De onde eu nunca devia ter sa&iacute;do<br />
        Eu volto pra orgia<br />
        O meu mundo proibido<br />
    De onde eu nunca devia ter sa&iacute;do</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello<br />
        Dire&ccedil;&atilde;o art&iacute;stica: Max Pierre<br />
        Gravado no Espa&ccedil;o Universal UP/RJ<br />
        Viol&atilde;o: Marcos Arcanjo<br />
        Cavaco: Marcio Hulk<br />
    </p>',
    'faixa_mp3' => '2004-1.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'134',
    'faixa_titulo' => 'Un Vestido Y un Amor (Ao Vivo)',
    'compositor' => '(Fito Paez)',
    'dolp' => 'Do CD &ldquo;Um barzinho, um viol&atilde;o vol. 3 e 4&rdquo;, Universal Music 6.024.981.945-0 (2004)
    ',
    'letra' => '<p>Te vi<br />
        Juntabas margaritas del mantel<br />
        Ya s&eacute; que te trat&eacute; bastante mal<br />
        No s&eacute; si eras un &aacute;ngel o un rub&iacute;<br />
    O simplemente te vi</p>
    <p>Te vi<br />
        Saliste entre la gente a saludar<br />
        Los astros se rieron otra vez<br />
        La llave de m&aacute;ndala se quebr&oacute;<br />
    O simplemente te vi</p>
    <p>Todo lo que digo est&aacute; de m&aacute;s<br />
        Las luces siempre encienden en el alma<br />
        Y cuando me pierdo en la ciudad<br />
        Vos ya sabes comprender<br />
        Es solo un rato, no m&aacute;s<br />
        Tendr&iacute;a que llorar o salir a matar<br />
        Te vi, te vi, te vi<br />
    Yo no buscaba nadie y te vi</p>
    <p>Te vi<br />
        Fumabas unos chinos en Madrid<br />
        Hay cosas que te ayudan a vivir<br />
        No hac&iacute;as otra cosa que escribir<br />
    Yo simplemente te vi</p>
    <p>Me fui<br />
        Me voy de vez en cuando a alg&uacute;n lugar<br />
        Ya s&eacute;, no te hace gracia este pa&iacute;s<br />
        Ten&iacute;as un vestido y un amor<br />
    Yo simplemente te vi</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Guto Gra&ccedil;a Mello<br />
        Dire&ccedil;&atilde;o art&iacute;stica: Max Pierre<br />
        Gravado no Espa&ccedil;o Universal UP/RJ<br />
        Viol&atilde;o: Marcos Arcanjo<br />
        Cavaco: Marcio Hulk<br />
    </p>',
    'faixa_mp3' => '2004-2.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'137',
    'faixa_titulo' => 'As Coisas que Caymmi Cantou',
    'compositor' => '(Ricardo Chaves)',
    'dolp' => 'Do CD Ricardo Chaves &ldquo;Cantador de alegria&rdquo;, Independente (2004)
    ',
    'letra' => '<p>As coisas que Caymmi cantou<br />
        Hist&oacute;rias t&atilde;o boas da gente lembrar<br />
        O vento no coqueiro, dois de fevereiro<br />
    S&atilde;o coisas que Caymmi cantou</p>
    <p>O canto que fala do pescador<br />
        Que sempre deseja o bem do mar<br />
        Pescaria de jangada, tem peixe na rede<br />
    Nas &aacute;guas da m&atilde;e Iemanj&aacute;</p>
    <p>Se voc&ecirc; j&aacute; foi &agrave; Bahia<br />
        Sabe que quem vem pra beira do mar<br />
        Cai no samba da minha terra<br />
    E descobre o que &eacute; que a baiana tem</p>
    <p>Doralice, Rosa Morena, Marina, Dora<br />
        Veja s&oacute; o dengo que a nega tem<br />
        Acalanto com cheiro de cravo e canela<br />
    S&oacute; louco pra n&atilde;o desejar Gabriela</p>
    ',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Ricardo Chaves e Luciano Calazans<br />
        Arranjo e baixo: Luciano Calazans<br />
        Viol&otilde;es: Saul Barbosa<br />
        Teclados: Luizinho Assis<br />
        Bateria: Marcelo Brasil<br />
        Percuss&atilde;o: Gabi Guedes<br />
    Flautas: Kiko Souza</p>',
    'faixa_mp3' => '2004-5.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'138',
    'faixa_titulo' => 'Festa em Olinda',
    'compositor' => '(Toninho Horta / Felipe Cordeiro)',
    'dolp' => 'Do CD Toninho Horta &ldquo;Com o p&eacute; no forr&oacute;&rdquo;, Minas Records MR 006/04 (2004)<br />
    Com:<strong> Toninho Horta</strong>
    ',
    'letra' => '<p>O sol nasceu<br />
        Amanheceu no meu sert&atilde;o<br />
        Sobre o barro dessa estrada<br />
        Olha o c&eacute;u azul<br />
        No brejo santo, Caruaru, Camaragibe<br />
        Vou chegando ao cais<br />
    S&oacute; em Olinda &eacute; que eu encontro minha paz</p>
    <p>Teu cora&ccedil;&atilde;o batendo bem juntinho do meu<br />
        Nessa festa me abra&ccedil;a, me faz aprendiz<br />
        Dan&ccedil;ando frevo, maracatu, o balanceio<br />
        &Eacute; voc&ecirc; quem diz<br />
    Que meu amor &eacute; teu amor de ser feliz</p>
    <p>Na beira do mar vem me namorar<br />
        Teu olhar &eacute; o sol dessa manh&atilde;<br />
        Um bocado de tempero em minha mesa<br />
        Minha ro&ccedil;a, meu rega&ccedil;o<br />
    Me desfa&ccedil;o em paix&atilde;o sem fim</p>
    <p>Pra te agradar, pra ser teu sonho<br />
        Vem c&aacute; meu nego, vem<br />
        Meu aconchego, vem<br />
        Pra me fazer muito feliz<br />
        S&oacute; quero ser o teu amor<br />
    Teu bem, meu bem</p>
    <p>Entra nessa festa, vem dan&ccedil;ar<br />
        Deixa a emo&ccedil;&atilde;o bater, pular nesse bai&atilde;o<br />
        Me d&aacute; um beijo com sabor de alu&aacute;<br />
    Fica do meu lado que eu te dou meu cora&ccedil;&atilde;o</p>',
    'creditos' => '<p>Arranjo, voz, guitarras e viol&otilde;es: Toninho Horta<br />
        Vocal: Mister X, Dina L&eacute;ia e Daniele Matias<br />
        Flautas: Lena Horta<br />
        Acordeom: Adelson Viana<br />
        Teclados: Cl&aacute;udio Faria<br />
        Contrabaixo: Edson Sancho<br />
        Tri&acirc;ngulo, shake, caxixi e efeitos: Hoto J&uacute;nior<br />
        Zabumba: Gilson Monteiro<br />
    </p>',
    'faixa_mp3' => '2004-6.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'135',
    'faixa_titulo' => 'Iluminada',
    'compositor' => '(Jorge Portugal / Roberto Mendes)',
    'dolp' => 'Do CD Marcia Short &ldquo;Iluminada&rdquo;, Ramax/Independente (2004)<br />
    Com:<strong> Marcia Short</strong>
    ',
    'letra' => '<p>Quando voc&ecirc; me acendeu<br />
        Fiquei toda arrepiada<br />
        Vi claridade no breu<br />
    Minha alma iluminada</p>
    <p>Senti uma febre danada<br />
        Perdi minha hora marcada<br />
        Abri minha porta fechada<br />
        E o meu corpo tremeu<br />
    Eu estava apaixonada, meu Deus</p>
    <p>Quando voc&ecirc; me entendeu<br />
        Eu n&atilde;o entendia nada<br />
        Minha vida renasceu<br />
    E amei estar sendo amada</p>
    <p>Senti uma febre danada<br />
        Perdi minha hora marcada<br />
        Abri minha porta fechada<br />
        E o amor se rendeu<br />
    Quero ser sua namorada, meu Deus</p>
    <p>Seja l&aacute; quem te mandou<br />
        Meu amor te recebeu<br />
        E hoje o c&eacute;u de sua estrela<br />
        Menino, sou eu<br />
    Menino, sou eu</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o e dire&ccedil;&atilde;o: Elba Ramalho<br />
        Coordena&ccedil;&atilde;o geral: Gaetano Lops<br />
        Produ&ccedil;&atilde;o executiva: Vinicius Teixeira e Fatinha Costa<br />
        Arranjo de base: Marcos Arcanjo e Fernando Merlino<br />
        Guitarra e viol&atilde;o: Marcos Arcanjo<br />
        Viol&atilde;o: Roberto Mendes<br />
        Teclado: Fernando Merlino<br />
        Baixo: Andr&eacute; Gon&ccedil;alves<br />
        Bateria: Cesinha<br />
        Percuss&atilde;o: Marcos Lobo e Paulinho He-Man<br />
        Trompete: Marcos Jesus<br />
        Trombone: Ezequiel<br />
        Sax e flauta: Julio Merlino<br />
    </p>',
    'faixa_mp3' => '2004-3.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'136',
    'faixa_titulo' => 'Mulher Curada',
    'compositor' => '(Altay Veloso)',
    'dolp' => 'Do CD Altay Veloso &ldquo;Alab&ecirc; de Jerusal&eacute;m: &oacute;pera negra&rdquo;, Independente (2004)<br />
    Com:<strong> Altay Veloso</strong>
    ',
    'letra' => '<p><em>E antes que fosse tarde acontecia mais um milagre. Aquela mulher que um dia sofrera demais de sangria, dan&ccedil;ava no meio da rua e ia ficando nua pra mostrar pra quem duvidava que ela n&atilde;o mais sangrava.</em></p>
    <p>Era t&atilde;o voraz<br />
        Golpeava em mim seus punhais<br />
        Jamais concedeu tr&eacute;gua<br />
    Hoje, enfim, retornas &agrave;s trevas</p>',
    'creditos' => '<p>Arranjo, reg&ecirc;ncia e piano: Jo&atilde;o Carlos Coutinho<br />
        Violino: Ricardo Amado<br />
        Cello: Marcio Malard<br />
        Teclados e voz: Altay Veloso<br />
    </p>
    ',
    'faixa_mp3' => '2004-4.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'148',
    'faixa_titulo' => 'Dom Jo&atilde;o, o Primeiro',
    'compositor' => '(Fernando Pessoa / Andr&eacute; Luiz Oliveira)',
    'dolp' => 'Do CD &ldquo;Mensagem 2 &ndash; Fernando Pessoa&rdquo;, Trama (2005)
    ',
    'letra' => '<p>O homem e a hora s&atilde;o um s&oacute;<br />
        Quando Deus faz<br />
        E a hist&oacute;ria &eacute; feita<br />
        O mais &eacute; carne, cujo p&oacute;<br />
    A terra espreita</p>
    <p>Mestre, sem o saber<br />
        Do Templo<br />
        Que Portugal foi feito ser<br />
        Que houveste a gl&oacute;ria e deste o exemplo<br />
        De o defender<br />
        Teu nome, eleito em sua fama<br />
        &Eacute;, na ara da nossa alma interna<br />
        A que repele<br />
        Eterna chama<br />
    A sombra eterna</p>',
    'creditos' => '<p>Projeto e dire&ccedil;&atilde;o art&iacute;stica: Andr&eacute; Luiz Oliveira<br />
        Produ&ccedil;&atilde;o musical: Andy Costa<br />
        Arranjo e reg&ecirc;ncia: Leandro Braga<br />
        Cello: Jabes de Oliveira e Ricardo Rosse<br />
        Cordas: Quarteto do RJ (violinos: Marcio Sanches e Felipe Fortuna; cello: Ricardo Rosse; viola: Jairo Diniz)<br />
        Viola: Cac&aacute;<br />
        Violino: K&aacute;tia Pinheiro<br />
    </p>',
    'faixa_mp3' => '2005-9.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'141',
    'faixa_titulo' => 'Xote da Saudade',
    'compositor' => '(Geraldinho Lins / Carlinhos Borges)',
    'dolp' => 'Do CD Trio Virgulino &ldquo;Forr&oacute; do futuro&rdquo;, Independente (2005)<br />
    Com:<strong> Trio Virgulino</strong>
    ',
    'letra' => '<p>Eu j&aacute; sabia<br />
        Que um dia ia sentir saudade sua<br />
        Pedi arrego todo dia &agrave;quela lua<br />
    Que me inspirava em teu olhar para cantar</p>
    <p>O aconchego<br />
        E o teu chamego agora s&oacute; era lembran&ccedil;a<br />
        A paz n&atilde;o vinha, o jeito era entrar na dan&ccedil;a<br />
    Queria te esquecer para nunca mais sofrer</p>
    <p>Mas n&atilde;o &eacute; assim<br />
        Ningu&eacute;m manda em cora&ccedil;&atilde;o apaixonado<br />
        T&ocirc; entregue<br />
        T&ocirc; todo desmantelado<br />
    Por causa do amor que voc&ecirc; me ensinou</p>
    <p>E essa dor<br />
        Eu consolo com um toque de sanfona<br />
        Enquanto voc&ecirc; n&atilde;o vem<br />
        Espero noite e dia<br />
    Fazendo fantasia, recriando nosso amor</p>
    <p>E doeu sim<br />
        Foi a saudade que bateu<br />
        Tem d&oacute; de mim<br />
    E vem ficar mais eu</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo, voz e sanfona: Enok Virgulino<br />
        Voz e tri&acirc;ngulo: Adelmo Nascimento<br />
        Voz, zabumba e pandeiro: Roberto Pinheiro<br />
        Bateria: Chico Medori<br />
        Baixo: Thiago do Esp&iacute;rito Santo<br />
        Viol&atilde;o: Cl&aacute;udio Conradi<br />
        Viol&atilde;o de 7 cordas: Arismar do Esp&iacute;rito Santo<br />
        Guitarra: Potiguara Menezes<br />
    </p>',
    'faixa_mp3' => '2005-2.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'142',
    'faixa_titulo' => 'Toque de Fole (Ao Vivo)',
    'compositor' => '(Bastinho Calixto / Ana Paula)',
    'dolp' => 'Do CD Forr&oacute;&ccedil;acana &ldquo;O melhor forr&oacute; do mundo &ndash; Ao vivo&rdquo;, Indie Records 789.842.012.476 (2005)<br />
    Com:<strong> Forr&oacute;&ccedil;acana</strong>
    ',
    'letra' => '<p>Toque sanfoneiro<br />
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
    Dedo no fole &eacute; forrozada</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Forr&oacute;&ccedil;acana e Bernardo Vilhena<br />
        Arranjo: Forr&oacute;&ccedil;acana<br />
        Dire&ccedil;&atilde;o musical, voz, zabumbatera, alfaia e derback: Duani<br />
        Sanfona, trombone e violoncelo: Mar&aacute;<br />
        Tri&acirc;ngulo, pandeiro, percuss&atilde;o e vocal: Chris Mour&atilde;o<br />
        Cavaco, guitarra, viola de 10 e vocal: Cacha&ccedil;a<br />
        Rabeca, guitarras, bandolim, viol&atilde;o e vocal: Marcos Moletta<br />
        Baixo: Sid&atilde;o Santos<br />
        Percuss&atilde;o: Fabio Luna<br />
        Vocal: Jussara Louren&ccedil;o<br />
    </p>',
    'faixa_mp3' => '2005-3.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'149',
    'faixa_titulo' => 'Carcar&aacute; (Ao Vivo)',
    'compositor' => '(Jo&atilde;o do Vale / Jos&eacute; Candido)',
    'dolp' => 'Do DVD Forro&ccedil;acana &ldquo;O melhor forr&oacute; do mundo &ndash; Ao vivo&rdquo;, Indie Records 789.842.012.474 (2005)<br />
    Com:<strong> Forro&ccedil;acana</strong>
    ',
    'letra' => '<p>Carcar&aacute;<br />
        L&aacute; no sert&atilde;o<br />
        &Eacute; um bicho que avoa que nem avi&atilde;o<br />
        &Eacute; um p&aacute;ssaro malvado<br />
    Tem o bico volteado que nem gavi&atilde;o</p>
    <p>Carcar&aacute;<br />
        Quando v&ecirc; ro&ccedil;a queimada<br />
        Sai voando e cantando<br />
        Carcar&aacute;<br />
        Vai fazer sua ca&ccedil;ada<br />
    Carcar&aacute; come int&eacute; cobra queimada</p>
    <p>Mas quando chega o tempo da invernada<br />
        O sert&atilde;o n&atilde;o tem mais ro&ccedil;a queimada<br />
        Carcar&aacute; mesmo assim num passa fome<br />
    Os burrego que nasce na baixada</p>
    <p>Carcar&aacute;<br />
        Pega, mata e come<br />
        Carcar&aacute;<br />
        Num vai morrer de fome<br />
        Carcar&aacute;<br />
        Mais coragem do que home<br />
        Carcar&aacute;<br />
    Pega, mata e come</p>
    <p>Carcar&aacute; &eacute; malvado, &eacute; valent&atilde;o<br />
        &Eacute; a &aacute;guia de l&aacute; do meu sert&atilde;o<br />
        Os burrego novinho num pode and&aacute;<br />
    Ele puxa o imbigo int&eacute; mat&aacute;</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Forr&oacute;&ccedil;acana e Bernardo Vilhena<br />
        Arranjo: Forr&oacute;&ccedil;acana<br />
        Dire&ccedil;&atilde;o musical, voz, zabumbatera, alfaia e derback: Duani<br />
        Sanfona, trombone e violoncelo: Mar&aacute;<br />
        Tri&acirc;ngulo, pandeiro, percuss&atilde;o e vocal: Chris Mour&atilde;o<br />
        Cavaco, guitarra, viola de 10 e vocal: Cacha&ccedil;a<br />
        Rabeca, guitarras, bandolim, viol&atilde;o e vocal: Marcos Moletta<br />
        Baixo: Sid&atilde;o Santos<br />
        Percuss&atilde;o: Fabio Luna<br />
        Vocal: Jussara Louren&ccedil;o<br />
    </p>',
    'faixa_mp3' => '2005-10.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'145',
    'faixa_titulo' => 'Jurema Preta',
    'compositor' => '(Ceguinhas de Campina Grande)',
    'dolp' => 'Do CD Ceguinhas de Campina Grande &ldquo;A pessoa &eacute; para o que nasce&rdquo;, Tratore (2005)
    ',
    'letra' => '<p>&Ocirc; tamanqueiro<br />
        Eu quero um par<br />
        Eu quero um par<br />
    Eu quero um par de tamanco pr&rsquo;eu andar</p>
    <p>&Ocirc; l&aacute; em casa tem um p&eacute; de pau<br />
        Um p&eacute; de pau com nome Jurema Preta<br />
        Mais pra cima tem o diabo de uma velha<br />
        Uma velha quebrando as espoletas<br />
        Mais pra cima tem o diabo do macaco<br />
        E o macaco fazendo tanta careta<br />
        Mais pra cima tem o diabo do valente<br />
        Um valente com punhal na m&atilde;o direita<br />
        Mais pra cima tem o diabo do soldado<br />
    Tem o soldado tocando tanta corneta</p>
    <p>Eu dei uma tapa no diabo da velha<br />
        Ela deixou de quebrar as espoletas<br />
        Eu dei uma tapa no diabo do macaco<br />
        Ele deixou de fazer tanta careta<br />
        Eu dei uma tapa no diabo do valente<br />
        Ele caiu com o punhal na m&atilde;o direita<br />
        Eu dei uma tapa no diabo do soldado<br />
    Ele deixou de tocar tanta corneta</p>
    <p>Arrebolei todo o trem fora da linha<br />
        Atendendo os amigos que ali vinham<br />
        Bem no alto do problema, sem demora<br />
        Das pontinhas do cabelo eu fiz escora<br />
        Ant&ocirc;in Malan ligou para Waldomiro<br />
        Coloquei o trem na linha<br />
    O maquinista apitou e foi embora</p>',
    'creditos' => '<p>Arranjos, programa&ccedil;&atilde;o, sampler e mixagem: Z&eacute; Am&eacute;rico<br />
        Vocal: Lula Queiroga<br />
        Viola de 12 cordas: Marcos Arcanjo<br />
    </p>',
    'faixa_mp3' => '2005-6.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'146',
    'faixa_titulo' => 'Promessa',
    'compositor' => '(Jerry Adriani)',
    'dolp' => 'Do CD &ldquo;Pra voc&ecirc; &ndash; Homenagem &agrave; Nossa Senhora da Penha&rdquo;, Independente (2005)
    ',
    'letra' => '<p>Foi t&atilde;o dif&iacute;cil come&ccedil;ar a nova vida por aqui<br />
        T&atilde;o diferente do lugar onde eu nasci<br />
        Sa&iacute; de l&aacute; com esperan&ccedil;a, a alma cheia de ilus&atilde;o<br />
    De uma vida bem melhor eu conseguir</p>
    <p>Mas logo vi, n&atilde;o era como eu pensei<br />
        Cidade grande n&atilde;o &eacute; como imaginei<br />
        &Eacute; muita gente sem lugar nem pra morar<br />
        Passando por necessidade, sem poder se sustentar<br />
        &Eacute; muita gente sem lugar nem pra morar<br />
    Passando por necessidade, sem poder se sustentar</p>
    <p>Quantas crian&ccedil;as pelas ruas sem escola<br />
        Mendigando, pedem esmola pra poder sobreviver<br />
        A viol&ecirc;ncia por aqui mata bem mais que no sert&atilde;o<br />
    Seca n&atilde;o h&aacute;, mas morre gente sem ter p&atilde;o</p>
    <p>E me apeguei com a minha Santa M&atilde;e do C&eacute;u<br />
        Uma promessa fiz com toda devo&ccedil;&atilde;o<br />
        Eu fui &agrave; Penha, a p&eacute; subi a escadaria<br />
    Pedi para Virgem Maria pela Sua interse&ccedil;&atilde;o</p>
    <p>M&atilde;e milagrosa<br />
        Dentre todas a escolhida<br />
        Protegei-nos m&atilde;e bondosa<br />
    Das agruras desta vida</p>
    <p>M&atilde;e caridosa<br />
        Olhai pelos filhos seus<br />
        Livrai-nos m&atilde;e das armadilhas<br />
        Dos que s&oacute; conhecem trevas<br />
    E n&atilde;o viram a luz de Deus</p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Jerry Adriani e Daniel Figueiredo<br />
        Arranjo, acordeom, teclados, bateria e baixo: Eron Lima<br />
        Viol&otilde;es e guitarra: Ad&ecirc;lima<br />
        Grava&ccedil;&atilde;o e zabumba: Reginaldo R&eacute;gis<br />
        Tri&acirc;ngulo: Chris Magno<br />
    </p>',
    'faixa_mp3' => '2005-7.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'143',
    'faixa_titulo' => 'Por Causa de um Ingresso do Festival Matou Roqueira de 15 Anos',
    'compositor' => '(Chico C&eacute;sar)',
    'dolp' => 'Do CD Chico C&eacute;sar &ldquo;De uns tempos pra c&aacute;&rdquo;, Biscoito Fino BF 619 (2005)
    ',
    'letra' => '<p>Chegou ver&atilde;o, dei de cara com o sol<br />
        Abri os bra&ccedil;os pro Cristo, ah meu Deus<br />
        Rio de mim, assobio baixinho<br />
        Tenho medo, mas disfar&ccedil;o, vamos l&aacute;<br />
        Sozinho, tenho medo, mas disfar&ccedil;o, vamos l&aacute;<br />
    Caminho, tenho medo, mas disfar&ccedil;o, vamos l&aacute;</p>
    <p>Deu no jornal: tem um rei no Brasil<br />
        O rei t&aacute; nu numa praia do Rio<br />
        Rio de mim, assobio baixinho<br />
        Tenho medo, mas disfar&ccedil;o, vamos l&aacute;<br />
        Sozinho, tenho medo, mas disfar&ccedil;o, vamos l&aacute;<br />
    Caminho, tenho medo, mas disfar&ccedil;o, vamos l&aacute;</p>
    <p>Quem vem l&aacute;<br />
        Diz a&iacute;<br />
        Podes crer<br />
    Quem &eacute;</p>
    <p>Telefono a cobrar, meu amor<br />
        D&ecirc; lembran&ccedil;as ao povo da&iacute;<br />
        A pol&iacute;cia parou &ndash; eu n&atilde;o sei, vou tentar<br />
        Est&atilde;o vindo pra c&aacute; &ndash; de gar&ccedil;om ou ator<br />
        &Eacute; melhor desligar &ndash; eu desligo, meu bem<br />
    Meus documentos, doutor</p>',
    'creditos' => '<p>Voz e viol&atilde;o: Chico C&eacute;sar<br />
        Cordas: Quinteto da Para&iacute;ba<br />
        Voz e autoria do texto falado: Pedro Osmar<br />
        Zabumbaixo e arranjo de cordas: Xisto Medeiros<br />
    </p>',
    'faixa_mp3' => '2005-4.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'140',
    'faixa_titulo' => 'Mulher',
    'compositor' => '(Doug Wayne / vers&atilde;o: Feio)',
    'dolp' => 'Do CD com a trilha sonora da novela &ldquo;Prova de amor&rdquo;, Record Music RMCD 351 (2005)
    ',
    'letra' => '<p>Pra descrever uma mulher<br />
        N&atilde;o &eacute; do jeito que quiser<br />
        Primeiro tem que ser sens&iacute;vel<br />
        Sen&atilde;o &eacute; imposs&iacute;vel<br />
        Quem v&ecirc; por fora n&atilde;o vai ver<br />
        Por dentro o que ela &eacute;<br />
        &Eacute; um risco tentar resumir<br />
    Mulher</p>
    <p>De um lado &eacute; corpo e sedu&ccedil;&atilde;o<br />
        Do outro for&ccedil;a e cora&ccedil;&atilde;o<br />
        &Eacute; fera e sabe machucar<br />
        Mas a primeira a te curar<br />
        E sempre faz o que bem quer<br />
        Ningu&eacute;m pode impedir<br />
        E assim come&ccedil;a a definir<br />
    Mulher</p>
    <p>Mulher<br />
        Entre tudo que existe &eacute; principal<br />
        Pra voc&ecirc; gerar a vida &eacute; natural<br />
    Esse &eacute; o mundo da mulher</p>
    <p>Mulher<br />
        Que a divina natureza fez surgir<br />
        A mais linda obra prima que algu&eacute;m j&aacute; viu<br />
        Assim nasceu a mulher<br />
    Nas m&atilde;os de Deus</p>
    <p>Por mais que o homem possa ter<br />
        Sem ela n&atilde;o d&aacute; pra viver<br />
        &Agrave;s vezes pede prote&ccedil;&atilde;o<br />
        Pra ter um pouco de aten&ccedil;&atilde;o<br />
        Se finge ser t&atilde;o fr&aacute;gil, mas<br />
        Domina quem quiser<br />
        Pois ningu&eacute;m pode definir<br />
    Mulher</p>',
    'creditos' => '<p>Dire&ccedil;&atilde;o musical: M&aacute;rcio Vip Antonucci<br />
        Produ&ccedil;&atilde;o musical: Daniel Figueiredo e Manoel Barenbein<br />
        <em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em><br />
    </p>',
    'faixa_mp3' => '2005-1.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'144',
    'faixa_titulo' => 'Raps&oacute;dia',
    'compositor' => '(Rodney Mariano / Salgado Maranh&atilde;o)',
    'dolp' => 'Do CD Salgado Maranh&atilde;o &ldquo;Amor&aacute;gio: Poetas da can&ccedil;&atilde;o&rdquo;, Sesc Rio.Som FSN 020205 (2005)
    ',
    'letra' => '<p>Toda vez que eu vou falar de mim<br />
        Tem retalhos de lamentos assim<br />
        Toda vez que eu vou falar de mim<br />
    Tem retalhos de lamentos assim</p>
    <p>E as marcas de sol na cara<br />
        Que eu trouxe de onde eu vim<br />
        O sentimento profundo que a terra injetou nas minhas veias<br />
        Um verde na emo&ccedil;&atilde;o<br />
        Um sabor de mato no meu paladar<br />
        Um sol no cora&ccedil;&atilde;o<br />
    Que a cidade n&atilde;o conseguiu apagar</p>
    <p>Toda vez que eu vou falar de mim<br />
        Tem saudades e lamentos assim<br />
        Toda vez que eu vou falar de mim<br />
    Tem retalhos de lamentos assim</p>
    <p>E as marcas de sol que eu trouxe<br />
        Do longe de onde eu vim<br />
        O sentimento profundo que a terra guardou na minha voz<br />
        Um tempo que me leva<br />
        Por caminhos tantos que nem sei se vou<br />
        Um tempo que me tem<br />
    A cantar os dons que a vida me ensinou</p>',
    'creditos' => '<p>Arranjo, sitar, efeitos e percuss&atilde;o: Z&eacute; Am&eacute;rico<br />
        Violas: Pedro Braga<br />
    Bateria: Camilo Mariano</p>',
    'faixa_mp3' => '2005-5.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'147',
    'faixa_titulo' => 'O Canto da Natureza',
    'compositor' => '(Silvio Corsioli / Vicente Castillo)',
    'dolp' => 'Do CD &ldquo;Amigos do bem&rdquo;, Independente (2005)
    ',
    'letra' => '<p>Canta alegre passarinho a linda melodia<br />
        Que vem de manh&atilde; anunciar que o dia<br />
    Acabou de raiar</p>
    <p>Canta um canto de esperan&ccedil;a, eu quero acreditar<br />
        Ao ver nossas crian&ccedil;as que o amanh&atilde;<br />
    Podemos mudar</p>
    <p>Canta passarinho, canta<br />
        Canta o seu canto de paz<br />
    Quisera mostrar quanto bem o seu canto me traz</p>
    <p>Canta passarinho, canta<br />
        Eu sonho ao te ouvir cantar<br />
    Te ou&ccedil;o e nos meus pensamentos come&ccedil;o a voar</p>
    <p>Canta passarinho, canta<br />
        O mundo quer te ouvir cantar<br />
        Diga no seu canto ao mundo que somos irm&atilde;os<br />
    E devemos nos amar</p>',
    'creditos' => '<p>Arranjo, teclados, harpa e acordeom: Maestro Vicente Castillo<br />
        Produ&ccedil;&atilde;o musical: Los Castillos e Silvio Corsioli<br />
        Bateria: Renato Evangelista e Giovani Torres<br />
        Contrabaixo: Laurenti Gomes da Silva, M&aacute;rio Castillo e Luis Gustavo<br />
        Viol&otilde;es: Nestor Castillo, Jo&atilde;o Neto e Cristobal Castillo<br />
        Guitarras: Jo&atilde;o Neto, Marcelo Modesto e Cristiano Pinho<br />
        Percuss&atilde;o: Marcelo Ramos Brazanoto e La&eacute;rcio da Costa<br />
        Cordas: Artur Huf (spalla), Aramis Rocha, Paulo Paschoal, Irani Kodin, Lev Vecksler, Mattew Thorpe e Cristian Sandu<br />
        Violas: Jos&eacute; Eduardo de Almeida e Vladimir Klementiev<br />
        Obo&eacute;: Joel Gisiger<br />
        Vocais: Priscila Machado M. Furtado, Robson Nascimento, Elizet Semogini e Vicente Castillo<br />
    </p>',
    'faixa_mp3' => '2005-8.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'156',
    'faixa_titulo' => 'Lua de Sol',
    'compositor' => '(Jorge Vercillo)',
    'dolp' => 'Da trilha sonora da pe&ccedil;a &ldquo;O fio da meada&rdquo;, n&atilde;o lan&ccedil;ada comercialmente (2006)<br />
    Com:<strong> Jorge Vercillo</strong>
    ',
    'letra' => '<p>Eu t&ocirc; pensando em tu que s&oacute;<br />
        &Eacute; ch&atilde;o que chega a dar um n&oacute;<br />
        Um homem para se envolver<br />
    Dif&iacute;cil como bicho se render</p>
    <p>A&ccedil;ude quando o ar se v&ecirc;<br />
        A vida se avisa em ar<br />
        E as gar&ccedil;as dele v&ecirc;m beber<br />
    Como fa&ccedil;o eu do teu olhar</p>
    <p>Desv&atilde;o que faz pensar em n&oacute;s<br />
        Resiste que eu chego j&aacute;<br />
        Depois que fui te conhecer<br />
    Jamais de mim voltei lembrar</p>
    <p>Luar que mais parece um sol<br />
        Ningu&eacute;m vai machucar voc&ecirc;<br />
        S&oacute; vim pra te fazer sentir<br />
        Voc&ecirc; pra me fazer viver<br />
    </p>
    ',
    'creditos' => '',
    'faixa_mp3' => '2006-7.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'155',
    'faixa_titulo' => 'Meu Passarinho Voou',
    'compositor' => '(Zeca do Acordeon / Mauro Coelho / Cicinho de Assis)',
    'dolp' => 'Lan&ccedil;ada no site oficial de Cicinho de Assis (2006)<br />
    Com:<strong> Cicinho de Assis</strong>
    ',
    'letra' => '<p>Quando voc&ecirc; foi embora<br />
        Meu cora&ccedil;&atilde;o doeu<br />
        Meu passarinho na gaiola<br />
    Est&aacute; sofrendo com saudade de voc&ecirc;</p>
    <p>Nossa casa est&aacute; sem alegria por falta de voc&ecirc;, meu bem<br />
        As flores e o jardim secaram, n&atilde;o querem mais viver<br />
    Meu bem eu posso at&eacute; morrer por causa de voc&ecirc;</p>
    <p>Pedi a Santo Ant&ocirc;nio para enxugar as minhas l&aacute;grimas<br />
        Ver se ele faz o meu amor voltar pra casa<br />
        At&eacute; o passarinho que eu tinha fugiu da gaiola<br />
    Meu cora&ccedil;&atilde;o doeu demais quando ele foi embora</p>
    <p>Meu passarinho voou, voou, voou<br />
        Meu cora&ccedil;&atilde;o doeu, doeu, doeu<br />
        Meu passarinho voou, voou, voou<br />
        Meu cora&ccedil;&atilde;o doeu, doeu, doeu<br />
    </p>
    ',
    'creditos' => '',
    'faixa_mp3' => '2006-6.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'153',
    'faixa_titulo' => 'Forr&oacute; em Campina',
    'compositor' => '(Jackson do Pandeiro)',
    'dolp' => 'Do CD &ldquo;Forr&oacute; pras crian&ccedil;as&rdquo;, Biscoito Fino BF 655 (2006)
    ',
    'letra' => '<p>Cantando meu forr&oacute; vem &agrave; lembran&ccedil;a<br />
        O meu tempo de crian&ccedil;a que me faz chorar<br />
        Cantando meu forr&oacute; vem &agrave; lembran&ccedil;a<br />
    O meu tempo de crian&ccedil;a que me faz chorar</p>
    <p>&Oacute; linda flor, linda morena<br />
        Campina Grande, minha Borborema<br />
        &Oacute; linda flor, linda morena<br />
    Campina Grande, minha Borborema</p>
    <p>Me lembro de Maria Pororoca<br />
        De Josefa Tributino e de Carminha Vilar<br />
        Me lembro de Maria Pororoca<br />
    De Josefa Tributino e de Carminha Vilar</p>
    <p>Bodocong&oacute;, Alto Branco, Z&eacute; Pinheiro<br />
        Aprendi tocar pandeiro nos forr&oacute;s de l&aacute;<br />
        Bodocong&oacute;, Alto Branco, Z&eacute; Pinheiro<br />
    Aprendi tocar pandeiro nos forr&oacute;s de l&aacute;</p>',
    'creditos' => '<p>Idealiza&ccedil;&atilde;o, produ&ccedil;&atilde;o, arranjo e dire&ccedil;&atilde;o musical: Z&eacute; Renato<br />
        Baixo: R&ocirc;mulo Gomes<br />
        Acordeom: Marcos Nimrichter<br />
        Viol&atilde;o: Jo&atilde;o Castilho<br />
        Bateria: Xande Figueiredo<br />
        Percuss&atilde;o: Beto Cazes<br />
        Sopros: Marcelo Bernardes<br />
        Regente do coro infantil: Paulo Malaguti<br />
        Coro infantil: Clarice Siqueira, Gabriela Nascimento, Victor Santos, Thatiana Napolitano,<br/> Bianca de Souza, Matheus de Lima, Matheus da Silva, Fl&aacute;vya Peres, Leonardo Dias, Johanna Weglinski,<br/> Benjamin Moschkovich, Clara Besouchet, Lucas Linhares e Maria Clara Fialho<br />
    </p>',
    'faixa_mp3' => '2006-4.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'154',
    'faixa_titulo' => 'Por Causa de um Ingresso de Festival Matou Roqueira de 15 Anos (Ao Vivo)',
    'compositor' => '(Chico C&eacute;sar)',
    'dolp' => 'Do DVD &ldquo;Cantos e encontros de uns tempos pra c&aacute;&rdquo;, Biscoito Fino BF 716 (2006)<br />
Com:<strong> Chico César</strong>
    ',
    'letra' => '<p>Chegou ver&atilde;o, dei de cara com o sol<br />
        Abri os bra&ccedil;os pro Cristo, ah meu Deus<br />
        Rio de mim, assobio baixinho<br />
        Tenho medo, mas disfar&ccedil;o, vamos l&aacute;<br />
        Caminho, tenho medo, mas disfar&ccedil;o, vamos l&aacute;<br />
    Sozinho, tenho medo, mas disfar&ccedil;o, vamos l&aacute;</p>
    <p>Deu no jornal: tem um rei no Brasil<br />
        O rei t&aacute; nu numa praia do Rio<br />
        Rio de mim, assobio baixinho<br />
        Tenho medo, mas disfar&ccedil;o, vamos l&aacute;<br />
        Sozinho, tenho medo, mas disfar&ccedil;o, vamos l&aacute;<br />
    Caminho, tenho medo, mas disfar&ccedil;o, vamos l&aacute;</p>
    <p>Telefono a cobrar, meu amor<br />
        D&ecirc; lembran&ccedil;as ao povo da&iacute;<br />
        A pol&iacute;cia parou &ndash; eu n&atilde;o sei, vou tentar<br />
        Est&atilde;o vindo pra c&aacute; &ndash; de gar&ccedil;om ou ator<br />
        &Eacute; melhor desligar &ndash; eu desligo, meu bem<br />
    Meus documentos, doutor</p>
    ',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Joana Hime, Raquel Deleuse e Valciara Gomes<br />
        Viol&atilde;o e voz: Chico C&eacute;sar<br />
        Percuss&atilde;o: Simone Soul<br />
        Violinos: Yerko Pinto Tabilo e Ronedilk Dantas<br />
        Violoncelo: Ra&iuml;ff Dantas Barreto<br />
        Viola de arco: Samuel Espinoza<br />
        Flauta: Simone Julian<br />
        Contrabaixo: Xisto Medeiros<br />
    </p>',
    'faixa_mp3' => '2006-5.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'150',
    'faixa_titulo' => 'A Prosa Impúrpura do Caicó / Asa Branca',
    'compositor' => '(Chico C&eacute;sar &ndash; Luiz Gonzaga / Humberto Teixeira)',
    'dolp' => 'Do CD/DVD &ldquo;Cantos e encontros de uns tempos pra c&aacute;&rdquo;, Biscoito Fino BF 716 (2006)<br />
Com:<strong> Chico César</strong>
    ',
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
    <p><strong>Asa Branca</strong><br />
    <em>(Luiz Gonzaga / Humberto Teixeira)</em></p>
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
        Pra mim vort&aacute; pro meu sert&atilde;o<br />
        Espero a chuva cair de novo<br />
    Pra mim vort&aacute; pro meu sert&atilde;o</p>
    <p>Quando o verde dos teus olhos<br />
        Se espalhar na planta&ccedil;&atilde;o<br />
        Eu te asseguro, n&atilde;o chore n&atilde;o, viu<br />
        Que eu voltarei, meu cora&ccedil;&atilde;o<br />
        Eu te asseguro, n&atilde;o chore n&atilde;o, viu<br />
    Que eu voltarei viu, meu cora&ccedil;&atilde;o</p>
    ',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Joana Hime, Raquel Deleuse e Valciara Gomes<br />
        Viol&atilde;o e voz: Chico C&eacute;sar<br />
    </p>',
    'faixa_mp3' => '2006-1.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'151',
    'faixa_titulo' => 'Amplid&atilde;o',
    'compositor' => '(Chico C&eacute;sar)',
    'dolp' => 'Do CD com a trilha da novela &ldquo;P&aacute;ginas da vida&rdquo;, Som Livre (2006)
    ',
    'letra' => '<p>Deixa eu te Guardar<br />
        A casa &eacute; sua<br />
        Faz em mim teu lar<br />
        Me reconstrua<br />
        Queira me habitar<br />
        Onde eu me escondo<br />
        Faz deste lugar<br />
    S&oacute; seu no mundo</p>
    <p>Eu quero ser<br />
        Onde voc&ecirc;<br />
        Sossega a alma<br />
        E chora e ri<br />
        Encontra a calma<br />
    Pra sonhar sem dormir</p>
    <p>Vem acender<br />
        As luzes que iluminam o meu cora&ccedil;&atilde;o<br />
        Vem ter comigo sua parte da amplid&atilde;o<br />
        De minha parte<br />
    Eu estou aqui</p>',
    'creditos' => ' <p><em>Na ficha t&eacute;cnica n&atilde;o consta o nome dos m&uacute;sicos</em><br />
    </p>
    ',
    'faixa_mp3' => '2006-2.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'152',
    'faixa_titulo' => 'Floril&eacute;gio',
    'compositor' => '',
    'dolp' => 'Do CD Ant&ocirc;nio N&oacute;brega &ldquo;Nove de fevereiro vol. 2&rdquo;, Independente (2006)<br />
    Com:<strong> Antonio N&oacute;brega, Chico C&eacute;sar, Claudionor Germano, Dalva Torres, Dominguinhos, Expedito Baracho, Geraldo Azevedo, Melissa Dias, N&aacute; Ozzetti, Nena Queiroga, Silv&eacute;rio Pessoa, Suzana Salles, Val&eacute;ria Moraes e Vanessa Oliveira</strong>
    ',
    'letra' => '<p><strong>Dia Azul</strong><br />
    <em>(Capiba)</em></p>
    <p>Eu com Madeira vou cantar<br />
        Vou pra rua, vou dan&ccedil;ar<br />
    Com a multid&atilde;o</p>
    <p>O dia amanheceu azul<br />
        Azul t&atilde;o lindo que me faz sonhar<br />
        Se eu fosse um poeta popular<br />
        Cantava as belezas desse dia sem igual<br />
        Mas como eu n&atilde;o tenho o dom do saber<br />
    Melhor este dia esquecer</p>
    <p>Mas se Madeira aparecer<br />
        Eu n&atilde;o sei o que vai ser<br />
        O que vou fazer ent&atilde;o<br />
        Eu com Madeira vou cantar<br />
        Vou pra rua, vou dan&ccedil;ar<br />
    Com a multid&atilde;o</p>
    <p>
        <strong>Madeira que Cupim N&atilde;o R&oacute;i</strong><br />
    <em>(Capiba)</em></p>
    <p>E se aqui estamos cantando esta can&ccedil;&atilde;o<br />
        Viemos defender a nossa tradi&ccedil;&atilde;o<br />
        E dizer bem alto que a injusti&ccedil;a d&oacute;i<br />
    N&oacute;s somos madeira de lei que o cupim n&atilde;o r&oacute;i</p>
    <p>
        <strong>Vai Pegar Fogo</strong><br />
    <em>(Manoel Gilberto / Jos&eacute; Menezes)</em></p>
    <p>Isto aqui ainda vai pegar fogo<br />
        Quando o frevo esquentar<br />
        Vou cair nesse passo de novo<br />
    Vou botar &eacute; pra quebrar</p>
    <p>Eu n&atilde;o vou embora<br />
        Nem por um milh&atilde;o<br />
        T&aacute; ficando bom agora<br />
    Eu daqui n&atilde;o saio n&atilde;o</p>
    <p>
        <strong>Roda e avisa</strong><br />
    <em>(J. Michiles / Edson Rodrigues)</em></p>
    <p>Roda, roda, roda e avisa<br />
        Que a alegria explodiu no ar<br />
        O Velho Guerreiro sorrindo, subindo, subindo<br />
    Foi pro c&eacute;u brincar</p>
    <p>Roda, roda, roda que a vida<br />
        &Eacute; um sonho que vai terminar<br />
        E o bom palha&ccedil;o n&atilde;o chora<br />
    E vai embora sem explicar</p>
    <p>Quem vai querer<br />
        Abacaxi, banana e bacalhau<br />
        Olha m&atilde;e do Russo<br />
    E a buzinada pro seu Nicolau</p>
    <p>Vem reviver<br />
        Toda a alegria do seu carnaval<br />
        Al&ocirc;, al&ocirc;, Terezinha<br />
    Ai, que saudade do Cassino do Chacrinha</p>
    <p>
        <strong>Desemba&ccedil;a A&iacute;</strong><br />
    <em>(Moraes Moreira)</em></p>
    <p>Desemba&ccedil;a a&iacute;<br />
        Desemba&ccedil;a a&iacute;<br />
    Nosso carnaval</p>
    <p>O povo pede passagem<br />
        N&atilde;o pode viver &agrave; margem<br />
    N&atilde;o &eacute; marginal</p>
    <p>Desemba&ccedil;a a&iacute;<br />
        Desemba&ccedil;a a&iacute;<br />
    Nossa grande festa</p>
    <p>Vem dan&ccedil;ar com o povo<br />
        Balan&ccedil;ar de novo<br />
    O ch&atilde;o da pra&ccedil;a do poeta</p>
    <p>
        <strong>Sou Eu Teu Amor</strong><br />
    <em>(Alceu Valen&ccedil;a / Carlos Fernando)</em></p>
    <p>L&aacute; vem, l&aacute; vem o bloco<br />
        Mas cad&ecirc; o bloco? J&aacute; passou<br />
        L&aacute; vem, l&aacute; vem o bloco<br />
    Mas cad&ecirc; o bloco? J&aacute; passou</p>
    <p>Um bloco veloz feito um raio<br />
        Chamado Sou Eu Teu Amor<br />
        Um bloco veloz feito um raio<br />
    Chamado Sou Eu Teu Amor</p>
    <p>Por onde ele passa<br />
        Sacode alegria a vapor<br />
        Lim&atilde;o com cacha&ccedil;a<br />
    Na onda do frevo esquentou</p>
    <p>L&aacute; vem o bloco<br />
        &Eacute; um bloco que chega<br />
        &Eacute; um bloco que passa<br />
        &Eacute; um raio que rompe e que tra&ccedil;a<br />
        E a massa espanta a dor<br />
    L&aacute; vem</p>
    <p>L&aacute; vem o bloco<br />
        Chamado Sou Eu Teu Amor<br />
        L&aacute; vem, l&aacute; vem o bloco<br />
    Chamado Sou Eu Teu Amor</p>
    <p>
        <strong>Isso Aqui T&aacute; Bom Demais</strong><br />
    <em>(Dominguinhos / Nando Cordel)</em></p>
    <p>Olha que isso aqui t&aacute; muito bom<br />
        Isso aqui t&aacute; bom demais<br />
        Olha quem t&aacute; fora quer entrar<br />
    Mas quem t&aacute; dentro n&atilde;o sai</p>
    <p>Vou me perder, me afogar no teu amor<br />
    Vou desfrutar, me lambuzar nesse calor</p>
    <p>
        <strong>&Eacute; de Fazer Chorar</strong><br />
    <em>(Luiz Bandeira)</em></p>
    <p>&Eacute; de fazer chorar<br />
        Quando o dia amanhece<br />
        E obriga o frevo a acabar<br />
        &Oacute; quarta-feira ingrata<br />
        Chega t&atilde;o depressa<br />
    S&oacute; pra contrariar</p>
    <p>Quem &eacute; de fato um bom pernambucano<br />
        Espera um ano e se mete na brincadeira<br />
        Esquece tudo quando cai no frevo<br />
    E no melhor da festa chega a quarta-feira</p>
    <p>
        <strong>Evoca&ccedil;&atilde;o n. 1</strong><br />
    <em>(Nelson Ferreira)</em></p>
    <p>Adeus, adeus minha gente<br />
        Que j&aacute; cantamos bastante<br />
        Recife adormecia<br />
        Ficava a sonhar<br />
    Ao som da triste melodia</p>',
    'creditos' => '<p><em>instrumentais</em><br />
        <strong>Vassourinhas</strong> <em>(Mathias da Rocha / Joana Batista Ramos)</em><br />
    <strong>Fog&atilde;o</strong> <em>(Sergio Lisboa)</em></p>
    <p>Dire&ccedil;&atilde;o art&iacute;stica: Antonio N&oacute;brega<br />
        Produ&ccedil;&atilde;o musical geral, guitarra e cavaquinho: Edmilson Capelupi<br />
        Produ&ccedil;&atilde;o musical Recife: Spok<br />
        Baixo el&eacute;trico: Edson Alves<br />
        Surdo: Gabriel Almeida<br />
        Caixa, pratos e pandeiro: M&aacute;rio Gaiotto<br />
        Zabumba e tri&acirc;ngulo: Zezinho Pitoco<br />
        Participa&ccedil;&atilde;o especial: Banda Mantiqueira<br />
    </p>
    ',
    'faixa_mp3' => '2006-3.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'162',
    'faixa_titulo' => 'Roda e Avisa',
    'compositor' => '(J. Michiles / Edson Rodrigues)',
    'dolp' => 'Do CD &ldquo;Asas do Frevo &ndash; Homenagem &agrave; J. Michiles&rdquo;, Independente (2007)',
    'letra' => '<p>Roda, roda, roda e avisa<br />
        Que a alegria explodiu no ar<br />
        O Velho Guerreiro sorrindo<br />
    Subindo, subindo, foi pro c&eacute;u brincar</p>
    <p>Roda, roda, roda que a vida<br />
        &Eacute; um sonho que vai terminar<br />
        E o bom palha&ccedil;o n&atilde;o chora<br />
    E vai embora sem explicar</p>
    <p>Quem vai querer<br />
        Abacaxi, banana e bacalhau<br />
        Olha a m&atilde;e do Russo<br />
    E a buzinada pra seu Nicolau</p>
    <p>Vem reviver<br />
        Toda alegria do seu carnaval<br />
        Al&ocirc;, al&ocirc; Teresinha<br />
    Ai que saudade do Cassino do Chacrinha</p>',
    'creditos' => '<p>Dire&ccedil;&atilde;o, produ&ccedil;&atilde;o musical e flauta: C&eacute;sar Michiles<br />
        Arranjo: Duda<br />
        Bateria: Adelson<br />
        Baixo: Mongol<br />
        Guitarra: Luciano Magno<br />
        Percuss&atilde;o: Mam&atilde;o e Lucas dos Prazeres<br />
        Sax alto: Spok e Gustavo Anacleto<br />
        Sax tenor: Gilberto Pontes e Gilmar Black<br />
        Trompetes: Preto, Papl&eacute;gua, Jailson e Gemerson<br />
        Trombones: Nilsinho Amarante, Cleber e Marc&iacute;lio<br />
    </p>',
    'faixa_mp3' => '2007-6.mp3'
    ] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'163',
    'faixa_titulo' => 'Frevo Rasgado',
    'compositor' => '(Gilberto Gil / Bruno Ferreira)',
    'dolp' => 'Do CD &ldquo;100 anos de frevo &ndash; &Eacute; de perder o sapato&rdquo;, Biscoito Fino BF 648 (2007)
    ',
    'letra' => '<p>Foi quando eu topei com voc&ecirc;<br />
        Que a coisa virou confus&atilde;o<br />
        No sal&atilde;o<br />
        Porque parei, procurei<br />
        N&atilde;o encontrei<br />
        Nem mais um sinal de emo&ccedil;&atilde;o<br />
    Em seu olhar</p>
    <p>A&iacute; eu me desesperei<br />
        E a coisa virou confus&atilde;o<br />
        No sal&atilde;o<br />
        Porque lembrei<br />
        Do seu sorriso aberto<br />
        Que era t&atilde;o perto, que era t&atilde;o perto<br />
        Em um carnaval que passou<br />
        Porque lembrei<br />
        Que esse frevo rasgado<br />
        Foi naquele tempo passado<br />
        O frevo que voc&ecirc; gostou<br />
    E dan&ccedil;ou e pulou</p>
    <p>A coisa virou confus&atilde;o<br />
        Sem briga, sem nada demais<br />
        No sal&atilde;o<br />
        Porque a bagun&ccedil;a que eu fiz, machucado<br />
        Bagun&ccedil;a que eu fiz t&atilde;o calado<br />
        Foi dentro do meu cora&ccedil;&atilde;o<br />
        Porque a bagun&ccedil;a que eu fiz, machucado<br />
        Bagun&ccedil;a que eu fiz t&atilde;o calado<br />
    Foi dentro do meu cora&ccedil;&atilde;o</p>',
    'creditos' => '<p>Arranjo: Edson Rodrigues<br />
        Arranjo de base e teclados: Tovinho<br />
        Bateria: Adelson Silva<br />
        Baixo: Mongol<br />
        Trompete: Enok Chagas, Papal&eacute;gua, Lampadinha e P&ecirc;to<br />
        Trombone: Nilsinho Amarante, Cl&eacute;ber Silva, Fl&aacute;vio Souza e Marc&iacute;lio<br />
        Sax: Gilberto Pontes, Gilmar Black e Edson Rodrigues<br />
    </p>',
    'faixa_mp3' => '2007-7.mp3'
    ] );
ParticipacoesExtras::create( [
'participacoes_id' =>'164',
'faixa_titulo' => 'Dúvida',
'compositor' => '(Luiz Gonzaga / Domingos Ramos)',
'dolp' => 'Do CD Elba Ramalho “João Nunes – 90 anos”, Independente (2007)',
'letra' => '<p>N&atilde;o sei por que raz&atilde;o<br />
Tu tens ci&uacute;mes<br />
N&atilde;o sei por que raz&atilde;o<br />
N&atilde;o cr&ecirc;s em mim</p>
<br />
<p>Bem sabes que te quero<br />
E o meu amor &eacute; t&atilde;o sincero<br />
&Eacute; demais duvidar tanto assim<br />
Ai de mim!</p>
<br />
<p>Bem v&ecirc;s que vivo escravizado<br />
Preso ao teu encanto<br />
N&atilde;o deves duvidar assim<br />
De quem te adora tanto</p>
<br />
<p>N&atilde;o deves duvidar de mim<br />
Porque n&atilde;o tens raz&atilde;o<br />
E assim torturas sem querer<br />
Teu cora&ccedil;&atilde;o</p>',
'creditos' => '<p>Viol&atilde;o: Marcos Arcanjo</p>',
'faixa_mp3' => '2007-81.mp3'
] );

ParticipacoesExtras::create( [
'participacoes_id' =>'164',
'faixa_titulo' => 'Carinhoso',
'compositor' => '(Pixinguinha / João de Barro)',
'dolp' => 'Do CD Elba Ramalho “João Nunes – 90 anos”, Independente (2007)',
'letra' => '<p>Meu cora&ccedil;&atilde;o<br />
N&atilde;o sei por qu&ecirc;<br />
Bate feliz<br />
Quando te v&ecirc;</p>
<br />
<p>E os meus olhos ficam sorrindo<br />
E pelas ruas v&atilde;o te seguindo<br />
Mas mesmo assim<br />
Foges de mim</p>
<br />
<p>Ah, se tu soubesses<br />
Como eu sou t&atilde;o carinhoso<br />
E o muito, muito que te quero<br />
E como &eacute; sincero o meu amor<br />
Eu sei que tu n&atilde;o fugirias mais de mim</p>
<br />
<p>Vem, vem, vem, vem<br />
Vem sentir o calor dos l&aacute;bios meus<br />
&Agrave; procura dos teus<br />
E vem matar essa paix&atilde;o<br />
Que me devora o cora&ccedil;&atilde;o<br />
E s&oacute; assim ent&atilde;o<br />
Serei feliz, bem feliz</p>',
'creditos' => '<p>Viol&atilde;o: Marcos Arcanjo</p>',
'faixa_mp3' => '2007-82.mp3'
] );

ParticipacoesExtras::create( [
'participacoes_id' =>'164',
'faixa_titulo' => 'Rosa',
'compositor' => '(Pixinguinha / Otávio de Souza)',
'dolp' => 'Do CD Elba Ramalho “João Nunes – 90 anos”, Independente (2007)',
'letra' => '<p>Tu &eacute;s divina e graciosa<br />
Est&aacute;tua majestosa do amor<br />
Por Deus esculturada<br />
E formada com ardor<br />
Da alma da mais linda flor<br />
De mais ativo olor<br />
Que na vida &eacute; preferida pelo beija-flor</p>
<br />
<p>Se Deus me fora t&atilde;o clemente<br />
Aqui neste ambiente de luz<br />
Formada numa tela deslumbrante e bela<br />
O teu cora&ccedil;&atilde;o junto ao meu lanceado<br />
Pregado e crucificado sobre a r&oacute;sea cruz<br />
Do arfante peito teu</p>
<br />
<p>Tu &eacute;s a forma ideal<br />
Est&aacute;tua magistral, oh, alma perenal<br />
Do meu primeiro amor, sublime amor<br />
Tu &eacute;s de Deus a soberana flor<br />
Tu &eacute;s de Deus a cria&ccedil;&atilde;o<br />
Que em todo o cora&ccedil;&atilde;o sepultas um amor<br />
O riso, a f&eacute;, a dor<br />
Em s&acirc;ndalos olentes, cheios de sabor<br />
Em vozes t&atilde;o dolentes como um sonho em flor<br />
&Eacute;s l&aacute;ctea estrela<br />
&Eacute;s m&atilde;e da realeza<br />
&Eacute;s tudo enfim que tem de belo<br />
Em todo resplendor da santa natureza</p>
<br />
<p>Perd&atilde;o se ouso confessar-te<br />
Eu hei de sempre amar-te<br />
Oh, flor meu peito n&atilde;o resiste<br />
Oh, meu Deus o quanto &eacute; triste<br />
A incerteza de um amor<br />
Que mais me faz penar em esperar<br />
Em conduzir-te um dia ao p&eacute; do altar</p>
<br />
<p>Jurar, aos p&eacute;s do onipotente<br />
Em preces comoventes de dor<br />
E receber a un&ccedil;&atilde;o da tua gratid&atilde;o<br />
Depois de remir meus desejos<br />
Em nuvens de beijos<br />
Hei de te envolver at&eacute; meu padecer<br />
De todo fenecer</p>',
'creditos' => '<p>Viol&atilde;o: Marcos Arcanjo</p>',
'faixa_mp3' => '2007-83.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'164',
'faixa_titulo' => 'Risque',
'compositor' => '(Ary Barroso)',
'dolp' => 'Do CD Elba Ramalho “João Nunes – 90 anos”, Independente (2007)',
'letra' => '<p>Risque<br />
Meu nome do seu caderno<br />
J&aacute; n&atilde;o suporto o inferno<br />
Do nosso amor fracassado</p>
<br />
<p>Deixe<br />
Que eu siga novos caminhos<br />
Em busca de outros carinhos<br />
Matemos nosso passado</p>
<br />
<p>Mas, se algum dia, talvez<br />
A saudade apertar<br />
N&atilde;o se perturbe<br />
Afogue a saudade nos copos de um bar</p>
<br />
<p>Creia<br />
Toda a quimera se esfuma<br />
Como a brancura da espuma<br />
Que se desmancha na areia</p>',
'creditos' => '<p>Viol&atilde;o: Marcos Arcanjo</p>',
'faixa_mp3' => '2007-84.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'164',
'faixa_titulo' => 'Camisa Amarela',
'compositor' => '(Ary Barroso)',
'dolp' => 'Do CD Elba Ramalho “João Nunes – 90 anos”, Independente (2007)',
'letra' => '<p>Encontrei o meu peda&ccedil;o na avenida<br />
De camisa amarela<br />
Cantando a Florisbela, oi<br />
A Florisbela<br />
Convidei-o a voltar pra casa em minha companhia<br />
Exibiu-me um sorriso de ironia<br />
E desapareceu no turbilh&atilde;o da galeria</p>
<br />
<p>N&atilde;o estava nada bom<br />
O meu peda&ccedil;o na verdade<br />
Estava bem mamado<br />
Bem chumbado, atravessado<br />
Foi por a&iacute; cambaleando<br />
Se acabando num cord&atilde;o<br />
Com um reco-reco na m&atilde;o<br />
Depois o encontrei num caf&eacute; zurrapa<br />
Do Largo da Lapa<br />
Foli&atilde;o de ra&ccedil;a<br />
Bebendo o quinto copo de cacha&ccedil;a<br />
Isso n&atilde;o &eacute; chala&ccedil;a</p>
<br />
<p>Voltou &agrave;s sete horas da manh&atilde;<br />
Mas s&oacute; na quarta-feira<br />
Cantando a Jardineira, oi<br />
A Jardineira<br />
Pediu-me ainda zonzo um copo d&rsquo;&aacute;gua com bicarbonato<br />
Meu peda&ccedil;o estava ruim de fato<br />
Pois caiu da cama e n&atilde;o tirou nem o sapato</p>
<br />
<p>Roncou uma semana<br />
E acordou mal-humorado<br />
Quis brigar comigo, que perigo!<br />
Mas n&atilde;o ligo<br />
O meu peda&ccedil;o me domina, me fascina<br />
Ele &eacute; o tal<br />
Por isso n&atilde;o levo &agrave; mal</p>
<br />
<p>Pegou a camisa<br />
A camisa amarela<br />
Botou fogo nela<br />
Gosto dele assim<br />
Passou a brincadeira<br />
E ele &eacute; pra mim<br />
Meu Senhor do Bonfim</p>',
'creditos' => '<p>Viol&atilde;o: Marcos Arcanjo</p>',
'faixa_mp3' => '2007-85.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'164',
'faixa_titulo' => 'Nada Al&eacute;m',
'compositor' => '(Custódio Mesquita / Mário Lago)',
'dolp' => 'Do CD Elba Ramalho “João Nunes – 90 anos”, Independente (2007)',
'letra' => '<p>Nada al&eacute;m<br />
Nada al&eacute;m de uma ilus&atilde;o<br />
Chega bem<br />
E &eacute; demais para o meu cora&ccedil;&atilde;o<br />
Acreditando em tudo<br />
Que o amor mentindo sempre diz<br />
Eu vou vivendo assim feliz<br />
Na ilus&atilde;o de ser feliz</p>
<br />
<p>Se o amor<br />
S&oacute; nos causa sofrimento e dor<br />
&Eacute; melhor<br />
Bem melhor a ilus&atilde;o do amor<br />
Eu n&atilde;o quero e n&atilde;o pe&ccedil;o<br />
Para o meu cora&ccedil;&atilde;o<br />
Nada al&eacute;m de uma linda ilus&atilde;o</p>',
'creditos' => '<p>Viol&atilde;o: Marcos Arcanjo</p>',
'faixa_mp3' => '2007-86.mp3'
] );

ParticipacoesExtras::create( [
'participacoes_id' =>'164',
'faixa_titulo' => 'Cinco Letras que Choram (Adeus)',
'compositor' => '(Silvino Neto)',
'dolp' => 'Do CD Elba Ramalho “João Nunes – 90 anos”, Independente (2007)',
'letra' => '<p>Adeus, adeus, adeus<br />
Cinco letras que choram<br />
Num solu&ccedil;o de dor<br />
Adeus, adeus, adeus<br />
&Eacute; como o fim de uma estrada<br />
Cortando a encruzilhada<br />
Ponto final de um romance de amor</p>
<br />
<p>Quem parte tem os olhos rasos d&rsquo;&aacute;gua<br />
Ao sentir a grande m&aacute;goa<br />
Por se despedir de algu&eacute;m<br />
Quem fica<br />
Tamb&eacute;m fica chorando<br />
Com o cora&ccedil;&atilde;o penando<br />
Querendo partir tamb&eacute;m<br />
Adeus, adeus, adeus</p>',
'creditos' => '<p>Viol&atilde;o: Marcos Arcanjo</p>',
'faixa_mp3' => '2007-87.mp3'
] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'159',
    'faixa_titulo' => 'Hino de Sauda&ccedil;&atilde;o a Sua Santidade o Papa Bento XVI',
    'compositor' => '(Moacyr Maciel)',
    'dolp' => 'Do DVD &ldquo;Homenagem da cidade de S&atilde;o Sebasti&atilde;o do Rio de Janeiro &agrave; Sua Santidade o Papa Bento XVI&rdquo;, Independente (2007)<br />
Com a <strong>Banda do Corpo de Bombeiros do RJ</strong></p>
',
'letra' => '<p>Tu &eacute;s Pedro<br />
    E sobre ti erguerei minha igreja<br />
    E ningu&eacute;m<br />
Jamais ir&aacute; contra ela</p>
<p>S&ecirc; bem-vindo, &oacute; Santo Padre<br />
    De Jesus seu representante<br />
    O Brasil e a igreja inteira<br />
    Se a alegra e vos pede suplicante<br />
Aben&ccedil;oa-nos, &oacute; Pai</p>
<p>Aben&ccedil;oa-nos &oacute; Santo Padre<br />
    De Jesus seu representante<br />
    O Brasil e a igreja inteira<br />
    Se a alegra e vos pede suplicante<br />
Aben&ccedil;oa-nos, &oacute; Pai</p>',
'creditos' => '<p>Arranjo/m&uacute;sicos: Banda do Corpo de Bombeiros do Rio de Janeiro
</p>',
'faixa_mp3' => '2007-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' => '157',
'faixa_titulo' => 'Viva a M&atilde;e de Deus e Nossa',
'compositor' => '(D. P.)',
'dolp' => 'Do CD &ldquo;Bendito o que vem em nome do Senhor&rdquo;, Codimuc/Independente (2007)',
'letra' => '<p>Viva a M&atilde;e de Deus e nossa<br />
    Sem pecado concebida<br />
    Viva a Virgem Imaculada<br />
A Senhora Aparecida</p>
<p>Aqui est&atilde;o vossos devotos<br />
    Cheios de f&eacute; incendida<br />
    De conforto e de esperan&ccedil;a<br />
&Oacute; Senhora Aparecida</p>
<p>Virgem santa, Virgem bela<br />
    M&atilde;e am&aacute;vel, M&atilde;e querida<br />
    Amparai-nos, socorrei-nos<br />
&Oacute; Senhora Aparecida</p>
<p>Protegei a Santa Igreja<br />
    M&atilde;e terna e compadecida<br />
    Protegei a nossa P&aacute;tria<br />
&Oacute; Senhora Aparecida</p>
<p>Amparai a todo o Clero<br />
    Em sua terrena lida<br />
    Para o bem dos pecadores<br />
&Oacute; Senhora Aparecida</p>
<p>Velai por nossas fam&iacute;lias<br />
    Pela inf&acirc;ncia desvalida<br />
    Pelo povo brasileiro<br />
&Oacute; Senhora Aparecida</p>',
'creditos' => '<p>Arranjo e adapta&ccedil;&atilde;o: Carlos Henrique T. Moreira<br />
    <em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em><br />
</p>',
'faixa_mp3' => '2007-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'160',
'faixa_titulo' => 'Dúvidas',
'compositor' => '(C&eacute;sar Asfor Rocha / Amaro Penna)',
'dolp' => 'Do CD Amaro Penna e Cesar Asfor &ldquo;Parceiros&rdquo;, Independente (2007)<br />
Com:<strong> Waldonys</strong>
',
'letra' => '<p>Eu pe&ccedil;o que me esclare&ccedil;a<br />
O que tem maior valia<br />
Se a esperan&ccedil;a frustrada<br />
Ou ela, quando ainda havia?</p>
<p>Gostaria de saber<br />
O que mais vale nesta vida<br />
Ter a coisa desejada<br />
Ou n&atilde;o ter a coisa querida<br />
A emo&ccedil;&atilde;o experimentada<br />
Ou a que vai ser sentida<br />
A emo&ccedil;&atilde;o experimentada<br />
Ou a que vai ser sentida</p>
<p>Sinceramente eu n&atilde;o sei<br />
O que tem maior valor<br />
Se o verso recitado<br />
Ou o que o medo abafou<br />
Se o beijo consentido<br />
Ou o que a boca roubou<br />
Se o beijo consentido<br />
Ou o que a boca roubou</p>
<p>&Eacute; dif&iacute;cil de dizer<br />
Qual seja o mais precioso<br />
O amor que n&atilde;o deu certo<br />
Ou se o outro exitoso<br />
Se ambos quando terminam<br />
Cora&ccedil;&atilde;o chora saudoso<br />
Se ambos quando terminam<br />
Cora&ccedil;&atilde;o chora saudoso</p>
<p>Voc&ecirc; que sabe de tudo<br />
Me esclare&ccedil;a por favor<br />
Mas vale a can&ccedil;&atilde;o cantada<br />
Ou a que no peito calou?<br />
A l&aacute;grima que foi chorada<br />
Ou a que n&atilde;o se derramou?<br />
A l&aacute;grima que foi chorada<br />
Ou a que n&atilde;o se derramou?</p>
',
'creditos' => '<p>Voz e acordeom: Waldonys<br />
Bateria: Denilson Lopes<br />
Percuss&atilde;o: Hoto Jr.<br />
Viol&atilde;o: Jo&atilde;o Lira<br />
Piano e teclado: Luiz Ant&ocirc;nio Gomes<br />
Baixo: Humphry Scott<br />
Vocal: Micheline e Paula Tribuzy<br />
</p>',
'faixa_mp3' => '2007-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'158',
'faixa_titulo' => 'Prece a Nossa Senhora',
'compositor' => '(Osvaldo Vict&oacute;rio)',
'dolp' => 'Do CD Padre Reginaldo Manzotti &ldquo;A tempestade vai passar&rdquo;, Independente (2007)<br />
Com:<strong> Padre Reginaldo Manzotti</strong>
',
'letra' => '<p>&Oacute; Santa Maria vigiai-me com os olhos de m&atilde;e<br />
Que nossas fam&iacute;lias recebam a sua prote&ccedil;&atilde;o<br />
Cobrir com seu manto sagrado, &oacute; M&atilde;e a n&oacute;s vem<br />
Que estejamos na sua gra&ccedil;a pra sempre, am&eacute;m</p>
<p>&Oacute; m&atilde;e vem ouvir nossas preces e nos amparai<br />
Livrai M&atilde;e querida e afaste de todo o mal<br />
Mostrai o caminho &agrave;queles que n&atilde;o sabem aonde ir<br />
&Oacute; M&atilde;e vem cuidar do futuro do nosso pa&iacute;s</p>
<p>Virgem Imaculada, Senhora da esperan&ccedil;a<br />
Clareia nossa estrada, olhai nossas crian&ccedil;as<br />
Salvai o povo seu, Nossa Senhora vem<br />
Maria M&atilde;e de Deus e nossa M&atilde;e tamb&eacute;m</p>
<p>&Oacute; Maria que alegria &eacute; ver nossas fam&iacute;lias<br />
Unidas pra te louvar<br />
&Oacute; Maria que alegria &eacute; ter Sua companhia<br />
E com voc&ecirc; caminhar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Padre Reginaldo Manzotti<br />
Produ&ccedil;&atilde;o art&iacute;stica e dire&ccedil;&atilde;o de voz: Karla Fioravante<br />
Arranjo, teclado e programa&ccedil;&atilde;o: J. Resende<br />
Contrabaixo: Pedro Ivo<br />
Bateria: Albino<br />
Guitarra e viol&atilde;o: Roger Dias<br />
Flauta transversal: M&aacute;rio L&uacute;cio<br />
Percuss&atilde;o: La&eacute;rcio da Costa<br />
</p>',
'faixa_mp3' => '2007-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'161',
'faixa_titulo' => 'S&atilde;o Jo&atilde;o Barroco',
'compositor' => '(Geraldo Azevedo / Carlos Fernando)',
'dolp' => 'Do CD Geraldo Azevedo &ldquo;O Brasil existe em mim&rdquo;, SonyBMG (2007)<br />
Com:<strong> Geraldo Azevedo</strong>
',
'letra' => '<p>Eu tive um sonho com um anjo barroco<br />
Foi um sonho curto trilhado entre o sim e o n&atilde;o<br />
O anjo rebelde voou pro inferno<br />
E eu para o c&eacute;u do barroco S&atilde;o Jo&atilde;o</p>
<p>S&atilde;o Jo&atilde;o padroeiro, das matas do Oxossi<br />
S&atilde;o Jo&atilde;o dos carneiros, menino dos olhos azuis<br />
S&atilde;o Jo&atilde;o &eacute; a joia do brilho primeiro<br />
Nas glebas do reino da era crist&atilde;</p>
<p>O ouro do milho nas espigas douradas<br />
Bal&otilde;es coloridos, o cinza do c&eacute;u<br />
Fogueiras acesas, planeta de luz<br />
S&atilde;o Jo&atilde;o me aque&ccedil;a com a l&atilde; dos carneiros<br />
Nos dias de junho da fria esta&ccedil;&atilde;o</p>
',
'creditos' => '<p>Dire&ccedil;&atilde;o art&iacute;stica, voz e viol&atilde;o: Geraldo Azevedo<br />
Produ&ccedil;&atilde;o e guitarra: Paulo Rafael<br />
Dire&ccedil;&atilde;o musical: Geraldo Azevedo e Geraldo Amaral<br />
Sanfona: Beto Souza<br />
Sax: Vitor Mota<br />
Baixo: Igor Ara&uacute;jo<br />
Percuss&atilde;o: Zama<br />
Bateria: Tiago Azevedo<br />
</p>',
'faixa_mp3' => '2007-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'166',
'faixa_titulo' => 'Noite de V&ecirc;nus',
'compositor' => '(Zezo Ribeiro / Alem&atilde;o)',
'dolp' => 'Do CD Zezo Ribeiro &ldquo;Cora&ccedil;&atilde;o de melodia&rdquo;, Independente (2008)
',
'letra' => '<p>Noite de v&ecirc;nus<br />
Uma lua branca e s&oacute; n&oacute;s dois<br />
C&eacute;u ficou estrelado<br />
Pra voc&ecirc;</p>
<p>Tudo &eacute; encanto<br />
Despertando todo esse amor<br />
Deixa eu sentir na pele<br />
Teu calor, teu calor</p>
<p>Vem, vem ficar comigo<br />
Vem, vem cuidar de mim<br />
Parceiro, amante, amigo<br />
Me faz acreditar nesse amor sem fim</p>
<p>Noite de v&ecirc;nus<br />
O amor se espalha pelo ar<br />
O meu desejo &eacute; s&oacute; ter voc&ecirc;</p>
<p>Tudo &eacute; encanto<br />
Despertando todo o nosso amor<br />
Deixa eu sentir na pele<br />
Teu calor, teu calor</p>
<p>Vem, vem ficar comigo<br />
Vem, vem cuidar de mim<br />
Parceiro, amante, amigo<br />
S&oacute; v&ecirc;nus pra encantar nossa noite assim<br />
Me faz acreditar nesse amor sem fim</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Zezo Ribeiro, Cesar Lopes e Henrique Matulis<br />
Viol&atilde;o: Zezo Ribeiro<br />
</p>',
'faixa_mp3' => '2008-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'167',
'faixa_titulo' => 'Na Base da Chinela (Ao Vivo)',
'compositor' => '(Jackson do Pandeiro / Rosil Cavalcanti)',
'dolp' => 'Do CD Trio Virgulino &ldquo;26 anos de estrada&rdquo;, Atra&ccedil;&atilde;o Fonogr&aacute;fica (2008)<br />
Com:<strong> Trio Virgulino</strong>
',
'letra' => '<p>Eu fui dan&ccedil;ar um baile na casa da Gabriela<br />
Nunca vi coisa t&atilde;o boa foi na base da chinela<br />
Eu fui dan&ccedil;ar um baile na casa da Gabriela<br />
Nunca vi coisa t&atilde;o boa foi na base da chinela</p>
<p>O sujeito ia chegando, tirava logo o sapato<br />
Se tivesse de botina, sola grossa, bico chato<br />
Entrava pra dan&ccedil;ar no baile da Gabriela<br />
Tirando meia e sapato, cal&ccedil;ando um par de chinela</p>
<p>E o baile tava animado s&oacute; na base da chinela<br />
Todo mundo disputava dan&ccedil;ar com a Gabriela<br />
Requebrar naquela base no sal&atilde;o s&oacute; tinha ela<br />
O camarada ria gostando da base dela<br />
Jogaram no sal&atilde;o pimenta bem machucada<br />
O baile da Gabriela acabou com chinelada</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo e sanfona: Enok Virgulino<br />
Tri&acirc;ngulo: Adelmo Nascimento<br />
Zabumba: Roberto Pinheiro<br />
Bateria: Edu Peixe<br />
Viol&atilde;o: Cl&aacute;udio Conradi<br />
Guitarra: Celso Rocha (Cito)<br />
Baixo: Xulapa<br />
</p>',
'faixa_mp3' => '2008-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'167',
'faixa_titulo' => 'Xote da Saudade (Ao Vivo)',
'compositor' => '(Geraldinho Lins / Carlinhos Borges)',
'dolp' => 'Do CD Trio Virgulino &ldquo;26 anos de estrada&rdquo;, Atra&ccedil;&atilde;o Fonogr&aacute;fica (2008)<br />
Com:<strong> Trio Virgulino</strong>
',
'letra' => '<p>Eu j&aacute; sabia<br />
Que um dia ia sentir saudade sua<br />
Pedi arrego todo dia &agrave;quela lua<br />
Que me inspirava em seu olhar para cantar</p>
<p>O aconchego<br />
E o teu chamego agora s&oacute; era lembran&ccedil;a<br />
A paz n&atilde;o vinha, o jeito era entrar na dan&ccedil;a<br />
Queria te esquecer para nunca mais sofrer</p>
<p>Mas n&atilde;o &eacute; assim<br />
Ningu&eacute;m manda em cora&ccedil;&atilde;o apaixonado<br />
T&ocirc; entregue<br />
T&ocirc; todo desmantelado<br />
Por causa do amor que voc&ecirc; me ensinou</p>
<p>E essa dor<br />
Eu consolo com um toque de sanfona<br />
Enquanto voc&ecirc; n&atilde;o vem<br />
Espero noite e dia<br />
Fazendo fantasias, recriando nosso amor</p>
<p>E doeu sim<br />
Foi a saudade que bateu<br />
Tem d&oacute; de mim<br />
E vem ficar mais eu</p>
',
'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo e sanfona: Enok Virgulino<br />
Tri&acirc;ngulo: Adelmo Nascimento<br />
Zabumba: Roberto Pinheiro<br />
Bateria: Edu Peixe<br />
Viol&atilde;o: Cl&aacute;udio Conradi<br />
Guitarra: Celso Rocha (Cito)<br />
Baixo: Xulapa<br />
</p>',
'faixa_mp3' => '2008-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'168',
'faixa_titulo' => 'Pombo Correio (Ao Vivo)',
'compositor' => '(Moraes Moreira / Osmar Macedo / Dod&ocirc;)',
'dolp' => 'Do CD &ldquo;Um barzinho e um viol&atilde;o &ndash; Novela 70 &ndash; vol. 2&rdquo;, Universal Music (2008)
',
'letra' => '<p>Pombo correio voa depressa<br />
E essa carta leva para o meu amor<br />
Leva no bico que eu aqui fico esperando<br />
Pela resposta<br />
Que &eacute; pra saber se ela ainda gosta de mim</p>
<p>Pombo correio<br />
Se acaso um desencontro acontecer<br />
N&atilde;o perca nem um s&oacute; segundo<br />
Voar o mundo se preciso for<br />
O mundo voa mas me traga uma not&iacute;cia boa</p>
<p>Pombo correio voa ligeiro<br />
Meu mensageiro e essa mensagem de amor<br />
Leva no bico que eu aqui fico cantando<br />
Que &eacute; pra espantar essa tristeza<br />
Que a incerteza do amor traz</p>
<p>Pombo correio<br />
Nesse caso eu lhe conto<br />
Por estas linhas a que ponto quer chegar<br />
Meu cora&ccedil;&atilde;o, o que mais gosta<br />
&ldquo;Volta pra mim&rdquo; seria sim a melhor resposta</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o art&iacute;stica: Max Pierre e Ricardo Moreira<br />
Viol&atilde;o: Marcos Arcanjo<br />
Cavaquinho: Mauro Diniz<br />
</p>
',
'faixa_mp3' => '2008-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'169',
'faixa_titulo' => 'Ai que Saudade D&rsquo;oc&ecirc; (Ao Vivo)',
'compositor' => '(Vital Farias)',
'dolp' => 'Do CD Fabio Jr. &ldquo;Fabio Jr. e Elas&rdquo;, SonyBMG (2008)<br />
Com:<strong> Fabio Jr.</strong>
',
'letra' => '<p>N&atilde;o se admire se um dia<br />
Um beija-flor invadir<br />
A porta da tua casa<br />
Te der um beijo e partir<br />
Fui eu que mandei o beijo<br />
Pra matar meu desejo<br />
Faz tempo que eu n&atilde;o te vejo<br />
Ai que saudade d&#39;oc&ecirc;</p>
<p>Se um dia oc&ecirc; lembrar<br />
Escreva uma carta pra mim<br />
Bote logo no correio<br />
Com frases dizendo assim:<br />
&ldquo;Faz tempo que n&atilde;o lhe vejo<br />
Quero matar meu desejo<br />
Lhe mando um monte de beijo<br />
Ai que saudade sem fim&rdquo;</p>
<p>E se quiser recordar<br />
Aquele nosso namoro<br />
Quando eu ia viajar<br />
Voc&ecirc; ca&iacute;a no choro<br />
Eu chorando pela estrada<br />
O que &eacute; que eu posso fazer<br />
Trabalha &eacute; minha sina<br />
Eu gosto mesmo &eacute; d&#39;oc&ecirc;</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o: Santiago Ferraz<br />
Arranjo e teclados: Bruno Cardoso<br />
Bateria: Kiko Freitas<br />
Baixo: Edu Martins<br />
Viol&atilde;o: Sandro Haick<br />
Teclados: Paulo Calasans<br />
Vocal: Vera Martins, Priscila Maciel, Daniel Quirino, Silvio da Silva e Robson Nascimento<br />
</p>',
'faixa_mp3' => '2008-7.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'171',
'faixa_titulo' => 'O Forr&oacute; &eacute; Bom em Qualquer Lugar (Ao Vivo)',
'compositor' => '(Elymar Santos / Anna Fernandez)',
'dolp' => 'Do CD Elymar Santos &ldquo;Guerreiro sonhador&rdquo;, Som Livre (2008)<br />
Com:<strong> Elymar Santos e Marquinho (acordeom)</strong>
',
'letra' => '<p>O forr&oacute; &eacute; bom em qualquer lugar<br />
O forr&oacute; &eacute; bom em qualquer lugar<br />
Seja em S&atilde;o Paulo ou no Cear&aacute;<br />
O forr&oacute; &eacute; bom, vamos forrozar</p>
<p>O forr&oacute; &eacute; bom em qualquer lugar<br />
O forr&oacute; &eacute; bom em qualquer lugar<br />
Seja em Pernambuco ou no Paran&aacute;<br />
O forr&oacute; &eacute; bom, vamos forrozar</p>
<p>Na Para&iacute;ba, Alagoas<br />
Na Bahia, no Par&aacute;<br />
Rio de Janeiro, Maranh&atilde;o<br />
Rio Grande do Sul e em Goi&aacute;s</p>
<p>Sergipe, Amazonas<br />
Santa Catarina, Minas Gerais<br />
Espirito Santo, Mato Grosso<br />
Acre, Distrito Federal</p>
<p>Rio Grande do Norte, Rond&ocirc;nia<br />
Roraima e Piau&iacute;<br />
Mato Grosso do Sul<br />
Tocantins e Amap&aacute;</p>
<p>Vem, vem, pra gente forrozar<br />
Vem, vem, pra gente chamegar<br />
Vem, vem que &eacute; bom demais<br />
O forr&oacute; &eacute; bom em qualquer lugar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o musical: Almir<br />
Arranjo: Jorge Cardoso e Julinho Teixeira<br />
Bateria: Paulinho Crian&ccedil;a<br />
Baixo: Arnaldo Madureira<br />
Percuss&atilde;o: Z&eacute; Leal e Anjo Caldas<br />
Teclados: Jean Barros e Alcir Alves<br />
Guitarra e viol&atilde;o: Paulo Blanc e Marcelo Nami<br />
Vocais: Micheli Aguiar, Alessandra Maia e Nina Pancevski<br />
</p>',
'faixa_mp3' => '2008-13.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'171',
'faixa_titulo' => 'De Volta pro Aconchego (Ao Vivo)',
'compositor' => '(Dominguinhos / Nando Cordel)',
'dolp' => 'Do CD Elymar Santos &ldquo;Guerreiro sonhador&rdquo;, Som Livre (2008)<br />
Com:<strong> Elymar Santos e Marquinho (acordeom)</strong>',
'letra' => '<p>Estou de volta pro meu aconchego<br />
Trazendo na mala bastante saudade<br />
Querendo um sorriso sincero, um abra&ccedil;o<br />
Para aliviar meu cansa&ccedil;o<br />
E toda essa minha vontade</p>
<p>Que bom poder t&aacute; contigo de novo<br />
Ro&ccedil;ando seu corpo e beijando voc&ecirc;<br />
Pra mim tu &eacute;s a estrela mais linda<br />
Seus olhos me prendem, fascinam<br />
A paz que eu gosto de ter</p>
<p>&Eacute; duro ficar sem voc&ecirc; vez em quando<br />
Parece que falta um peda&ccedil;o de mim<br />
Me alegro na hora de regressar<br />
Parece que vou mergulhar<br />
Na felicidade sem fim</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o musical: Almir<br />
Arranjo: Jorge Cardoso e Julinho Teixeira<br />
Bateria: Paulinho Crian&ccedil;a<br />
Baixo: Arnaldo Madureira<br />
Percuss&atilde;o: Z&eacute; Leal e Anjo Caldas<br />
Teclados: Jean Barros e Alcir Alves<br />
Guitarra e viol&atilde;o: Paulo Blanc e Marcelo Nami<br />
Sax tenor, alto e flauta: Julio Henrique<br />
Trompete e flugelhorn: Aniceto<br />
Trombone: Isa&iacute;as<br />
Vocais: Micheli Aguiar, Alessandra Maia e Nina Pancevski<br />
</p>',
'faixa_mp3' => '2008-14.mp3'
] );






ParticipacoesExtras::create( [
'participacoes_id' =>'165',
'faixa_titulo' => 'Ave Maria',
'compositor' => '(Gounod)',
'dolp' => 'Do CD &ldquo;Estrelas do Natal&rdquo;, MZA Music MZA036 (2008)
',
'letra' => '<p>Ave Maria, Ave Maria<br />
Gratia plena<br />
Dominus tecum<br />
Benedicta tu<br />
In mulieribus<br />
Et benedictus fructus<br />
Ventri tui Jesus</p>
<p>Sancta Maria<br />
Mater Maria, Maria<br />
Ora pro nobis<br />
Nobis peccatoribus<br />
Nunc et in hora mortis<br />
Hora mortis nostrae<br />
Amen</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Mazzola<br />
Arranjo e teclado: Ricardo Le&atilde;o<br />
</p>',
'faixa_mp3' => '2008-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'173',
'faixa_titulo' => 'Cart&atilde;o de Natal',
'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas)',
'dolp' => 'Do CD &ldquo;Natal bem brasileiro&rdquo;, Biscoito Fino BF 874 (2008)
',
'letra' => '<p>Ouvindo os sinos de Deus<br />
Repicando na matriz<br />
Para voc&ecirc; e os seus<br />
Pe&ccedil;o um Natal bem feliz<br />
Blem, blem, blem, blem<br />
Blem, blem</p>
<p>Um ano novo afortunado<br />
Venturoso e aben&ccedil;oado<br />
T&atilde;o ditosa ora&ccedil;&atilde;o do al&eacute;m<br />
Seja ouvida por Deus<br />
E que os anjos digam am&eacute;m<br />
Blem, blem, blem, blem<br />
Blem, blem</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Thiago Marques Luiz<br />
Arranjo e viol&otilde;es: Ronaldo Rayol<br />
Baixo el&eacute;trico: Eric Budney<br />
Acordeom: Gustavo Sarzi<br />
Bateria e percuss&atilde;o: Nahame Casseb<br />
</p>',
'faixa_mp3' => '2008-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'174',
'faixa_titulo' => 'Energia (Ao Vivo)',
'compositor' => '(Lula Queiroga)',
'dolp' => 'Do DVD encartado no livro de Weydson Barros Leal &ldquo;Olinda 100 Anos de Frevo&rdquo;, Prefeitura de Olinda/Publikimagem (2008)
',
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
Pra dizer ao Brasil<br />
Que hoje &eacute; o dia D</p>',
'creditos' => '<p><em>Na ficha t&eacute;cnica do DVD n&atilde;o consta o nome dos m&uacute;sicos</em>
</p>',
'faixa_mp3' => '2008-16.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'172',
'faixa_titulo' => 'Anuncia&ccedil;&atilde;o',
'compositor' => '(Jeff Izaki)',
'dolp' => 'Do CD Jeff Izaki &ldquo;Festa do nascimento&rdquo;, Independente (2008)<br />
Com Jeff Izaki
',
'letra' => '<p>Parece um clar&atilde;o no c&eacute;u<br />
Uma luz na escurid&atilde;o<br />
Nasceu o filho de Isabel<br />
Fogo da anuncia&ccedil;&atilde;o</p>
<p>Olhe para o c&eacute;u, Maria<br />
As estrelas v&atilde;o mostrar<br />
Que a luz que brilha t&atilde;o forte<br />
Clareia o sul e o norte</p>
<p>Aquece o cora&ccedil;&atilde;o<br />
Anunciando hoje<br />
Nasceu menino Jo&atilde;o</p>',
'creditos' => '<p>Arranjo: Elba, Marcos Arcanjo, Cezzinha Thomaz, Anjo Caldas, Tost&atilde;o Queiroga e Fof&atilde;o<br />
Viol&atilde;o de nylon: Marcos Arcanjo<br />
Bateria e tri&acirc;ngulo: Tost&atilde;o Queiroga<br />
Zabumba: Anjo Caldas<br />
Acordeom: Cezzinha Thomaz<br />
</p>',
'faixa_mp3' => '2008-15.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'170',
'faixa_titulo' => 'Tempos Quase Modernos (Ao Vivo)',
'compositor' => '(Roberto Mendes / Capinan)',
'dolp' => 'Do DVD &ldquo;Por uma vida sem viol&ecirc;ncia&rdquo;, Petrobr&aacute;s/Independente (2008)<br />
Com ?
',
'letra' => '<p>Qual o assunto que mais lhe interessa?<br />
Qual o assunto que mais lhe interessa?</p>
<p>Al&eacute;m da vida in vitro feita nas coxas<br />
E vivida &agrave;s pressas</p>
<p>Qual o assunto que mais lhe interessa?<br />
Qual o assunto que mais lhe interessa?</p>
<p>A empresa da guerra<br />
A mais-valia da morte<br />
A &uacute;ltima senten&ccedil;a<br />
A viol&ecirc;ncia nas ruas<br />
O bio terrorismo<br />
A soja transg&ecirc;nica</p>
<p>Clonagem da mente<br />
Dos &oacute;rg&atilde;os vitais<br />
A nova ci&ecirc;ncia<br />
Moral decadente<br />
Tradi&ccedil;&atilde;o milenar<br />
Outra tend&ecirc;ncia</p>
<p>Qual o assunto que mais lhe interessa?<br />
Qual o assunto que mais lhe interessa?</p>
<p>Suic&iacute;dio, livre arb&iacute;trio<br />
Aborto consentido<br />
Eutan&aacute;sia<br />
A d&iacute;vida cong&ecirc;nita<br />
O quinto partido<br />
O tempo das m&aacute;quinas</p>
<p>Monarquia, playback<br />
A rep&uacute;blica inventa<br />
O eclipse lunar<br />
A decad&ecirc;ncia moral<br />
A calota polar<br />
O imp&eacute;rio dos egos<br />
O vidente cedo<br />
O cachimbo de &Eacute;dipo<br />
A paix&atilde;o de Romeu</p>
<p>Colapso dos mares<br />
Crian&ccedil;as sem lares<br />
A aus&ecirc;ncia de Deus</p>
<p>Qual o assunto que mais lhe interessa?<br />
Qual o assunto que mais lhe interessa?</p>
<p><em>Qual o assunto que mais lhe interessa?<br />
A assembleia dos lobos<br />
O ju&iacute;zo dos loucos<br />
A vontade dos c&eacute;us<br />
A escala econ&ocirc;mica em que o crime compensa<br />
Qual &eacute; o assunto em que mais voc&ecirc; pensa?<br />
Sexo, amor, culpa ou inoc&ecirc;ncia<br />
A dieta do Papa, o segredo de F&aacute;tima<br />
A &uacute;ltima penit&ecirc;ncia<br />
Qual &eacute; o assunto em que mais voc&ecirc; pensa?<br />
Qual &eacute; o assunto que mais lhe interessa?<br />
Qual &eacute; o assunto que mais lhe interessa?<br />
Qual &eacute; o assunto que mais voc&ecirc; pensa?</em></p>
<p>Bom dia Vietn&atilde;<br />
Boa noite Bagd&aacute;<br />
Adeus Sherazade<br />
Qual o assunto que mais lhe interessa?<br />
Qual a verdade em que mais voc&ecirc; pensa?<br />
O fim da natureza<br />
E o final da hist&oacute;ria<br />
Gl&oacute;ria, gl&oacute;ria, gl&oacute;ria, gl&oacute;ria, gl&oacute;ria, gl&oacute;ria?</p>
<p>Apenas uma can&ccedil;&atilde;o invento agora<br />
Um poema<br />
A madrugada &eacute; sil&ecirc;ncio, a dor acalenta<br />
Esquece o in&iacute;cio de tudo e o fim dos tempos<br />
Deita no colo de tua amada<br />
Onde da misteriosa expans&atilde;o do nada<br />
O universo se alimenta</p>
<p><em>Qual &eacute; o assunto em que mais voc&ecirc; pensa?<br />
Qual a verdade em que mais voc&ecirc; sente?<br />
Qual a mentira em que mais acredita?<br />
Qual &eacute; o nome que voc&ecirc; mais grita?<br />
Qual &eacute; a for&ccedil;a que mais te enfraquece?<br />
Qual &eacute; a fome que mais te alimenta?<br />
Qual &eacute; o prato que mais te apetece?<br />
Qual &eacute; o mapa que mais te orienta?<br />
Qual &eacute; o jogo que mais voc&ecirc; ganha?<br />
Qual &eacute; o ganho que mais te enriquece?<br />
Qual &eacute; a perda que mais voc&ecirc; chora?<br />
Qual &eacute; a casa em que mais voc&ecirc; mora?<br />
Qual &eacute; a frase que mais voc&ecirc; fala?<br />
Qual &eacute; a fala que mais voc&ecirc; cala?<br />
Qual &eacute; o assunto que mais voc&ecirc; teme?<br />
E o tema que mais ignora?<br />
Qual o assunto que mais lhe interessa?</em></p>
',
'creditos' => '<p>Guitarra: Marcos Arcanjo<br />
Baixo: Fernando Gabi (Fof&atilde;o)<br />
Bateria: Tost&atilde;o Queiroga<br />
Percuss&atilde;o: Anjo Caldas<br />
</p>',
'faixa_mp3' => '2008-8.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'170',
'faixa_titulo' => 'A Natureza das Coisas (Ao Vivo)',
'compositor' => '(Accioly Neto)',
'dolp' => 'Do DVD &ldquo;Por uma vida sem viol&ecirc;ncia&rdquo;, Petrobr&aacute;s/Independente (2008)',
'letra' => '<p>Se avexe n&atilde;o<br />
Que amanh&atilde; pode acontecer tudo<br />
Inclusive nada<br />
Se avexe n&atilde;o<br />
Que a lagarta rasteja at&eacute; o dia<br />
Em que cria asas</p>
<p>Se avexe n&atilde;o<br />
Que a burrinha da felicidade nunca se atrasa<br />
Se avexe n&atilde;o<br />
Amanh&atilde; ela para na porta da sua casa</p>
<p>Se avexe n&atilde;o<br />
Toda caminhada come&ccedil;a no primeiro passo<br />
A natureza n&atilde;o tem pressa<br />
Segue seu compasso<br />
Inexoravelmente chega l&aacute;</p>
<p>Se avexe n&atilde;o<br />
Observe quem vai subindo a ladeira<br />
Seja princesa ou seja lavandeira<br />
Pra ir mais alto vai ter que suar</p>',
'creditos' => '<p>Guitarra: Marcos Arcanjo<br />
Baixo: Fernando Gabi (Fof&atilde;o)<br />
Bateria: Tost&atilde;o Queiroga<br />
Percuss&atilde;o: Anjo Caldas<br />
</p>',
'faixa_mp3' => '2008-9.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'170',
'faixa_titulo' => 'Banho de Cheiro (Ao Vivo)',
'compositor' => '(Carlos Fernando)',
'dolp' => 'Do DVD &ldquo;Por uma vida sem viol&ecirc;ncia&rdquo;, Petrobr&aacute;s/Independente (2008)
',
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
O b&ecirc;-a-b&aacute; do Brasil</p>',
'creditos' => '<p>Guitarra: Marcos Arcanjo<br />
Baixo: Fernando Gabi (Fof&atilde;o)<br />
Bateria: Tost&atilde;o Queiroga<br />
Percuss&atilde;o: Anjo Caldas<br />
</p>',
'faixa_mp3' => '2008-10.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'170',
'faixa_titulo' => 'Frevo Mulher (Ao Vivo)',
'compositor' => '(Z&eacute; Ramalho)',
'dolp' => 'Do DVD &ldquo;Por uma vida sem viol&ecirc;ncia&rdquo;, Petrobr&aacute;s/Independente (2008)<br />
Com:<strong> Margareth Menezes</strong>
',
'letra' => '<p>Quantos aqui ouvem os olhos eram de f&eacute;<br />
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
Procurando por um</p>',
'creditos' => '<p>Guitarra: Marcos Arcanjo<br />
Baixo: Fernando Gabi (Fof&atilde;o)<br />
Bateria: Tost&atilde;o Queiroga<br />
Percuss&atilde;o: Anjo Caldas<br />
</p>',
'faixa_mp3' => '2008-11.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'170',
'faixa_titulo' => 'Dandalunda (Ao Vivo)',
'compositor' => '(Carlinhos Brown)',
'dolp' => 'Do DVD &ldquo;Por uma vida sem viol&ecirc;ncia&rdquo;, Petrobr&aacute;s/Independente (2008)<br />
Com:<strong> Margareth Menezes e Grupo Moinho</strong>
',
'letra' => '<p>Bem pertinho da entrada do gueto<br />
Um terreiro de Angola e Ketu<br />
M&atilde;e maiamba que comanda o centro<br />
Dona Oxum dan&ccedil;ando Oxossi no tempo</p>
<p>L&aacute; em cima no tamarineiro<br />
Mariinha da pipoca ajoelha<br />
Em janeiro, no dia primeiro<br />
Desce o dono do terreiro<br />
Coqu&ecirc;</p>
<p>Dandalunda, maimbanda, coqu&ecirc;<br />
Dandalunda, maimbanda, coqu&ecirc;<br />
Dandalunda, maimbanda, coqu&ecirc;<br />
Dandalunda, maimbanda, coqu&ecirc;<br />
Coqu&ecirc;</p>
<p>Seu Zumbi &eacute; santo sim que eu sei<br />
Caxixi, agdavi, capoeira<br />
Casa de batuque e toque na mesa<br />
Linda santa Ians&atilde; da pureza</p>
<p>Vira fogo, atraca, atraca, se chegue<br />
Vi Nan&atilde; dentro da mata do jej&ecirc;<br />
Brasa acesa na pisada do frevo<br />
Arrepia o corpo inteiro<br />
Coqu&ecirc;</p>
<p>Dandalunda<br />
Paira na beira<br />
Dandalunda<br />
Da cachoeira<br />
Dandalunda<br />
Paz e &aacute;gua fresca<br />
Dandalunda<br />
Doura dend&ecirc;</p>',
'creditos' => '<p>Arranjo/m&uacute;sicos: Banda Margareth Menezes<br />
</p>',
'faixa_mp3' => '2008-12.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'175',
'faixa_titulo' => 'Hino da Banda do Siri',
'compositor' => '(Jo&atilde;o Alfredo &ldquo;Bol&atilde;o&rdquo;)',
'dolp' => 'Do CD da Banda Sinf&ocirc;nica de Natal, distribu&iacute;do gratuitamente pela Prefeitura de Natal para o carnaval 2009 (2008)<br />
Com:<strong> Banda Sinf&ocirc;nica de Natal</strong>
',
'letra' => '<p>Hoje &eacute; carnaval<br />
A Banda do Siri est&aacute; nas ruas<br />
Deixe a tristeza, entre no cord&atilde;o<br />
Fa&ccedil;a do sorriso a for&ccedil;a da uni&atilde;o</p>
<p>A parada do Cruzeiro<br />
&Eacute; aquela sensa&ccedil;&atilde;o<br />
Cerveja bem geladinha<br />
Esfria o sol do ver&atilde;o</p>
<p>Ruas, becos e vielas<br />
Sob um ch&atilde;o de passarelas<br />
Um s&oacute; grito de emo&ccedil;&atilde;o<br />
A banda passa, desfila<br />
Nas vivas cores da vida<br />
Prociss&atilde;o da ilus&atilde;o</p>
<p>E no arrast&atilde;o dessa gente<br />
A banda chega bem quente<br />
L&aacute; no p&eacute; do Gavi&atilde;o<br />
E no arrast&atilde;o dessa gente<br />
A banda chega bem quente<br />
L&aacute; no p&eacute; do Gavi&atilde;o</p>',
'creditos' => '<p>Arranjo, reg&ecirc;ncia e dire&ccedil;&atilde;o musical: Gilberto Cabral<br />
Banda Sinf&ocirc;nica<br />
Maestro: Jo&atilde;o da Banda<br />
Flautim: Jos&eacute; Roberto da Silva<br />
Flautas: Marjorie Salu Miranda de S&aacute;, Carlos Alberto de Freitas, Jos&eacute; Roberto de Souza, Jos&eacute; Ricardo Garcia da Silva, Jo&atilde;o Maria Naz&aacute;rio da Silva e Marinalda Dantas<br />
Obo&eacute;: Jaciara Maria de F. Oliveira<br />
Clarinetes: En&eacute;as Albuquerque Silva, Erasmo de Oliveira J&uacute;nior, Wallace Batista da Silva, Suely Pereira Santiago, Andry Carla Ferreira do Nascimento, Suzana Maria C. dos Santos, L&uacute;cia Teixeira Trigueiro, Margareth Gon&ccedil;alves da Silva, Marc&iacute;lio Severino Souza, Everaldo Felipe de Almeida e Jos&eacute; Carlos dos Santos<br />
Fagote: Alexandre dos Santos e Julian Elgueta<br />
Sax soprano: Luis Ant&ocirc;nio Dantas de Fran&ccedil;a<br />
Sax alto: Paulo Johnson dos Anjos, Javadilma Gomes Ferreira e Isaque Gurgel<br />
Sax tenor: Ozenir Luciano da Silva Junior e Rivanildo Correia Santos<br />
Sax bar&iacute;tono: Leonardo Santos Tom&eacute;<br />
Trompa: Osiel Lobo de Miranda, Jos&eacute; Jer&ocirc;nimo Duarte Filho, Djair Francisco Dantas e Ricardo Ant&atilde;o do Nascimento<br />
Trompetes: Alcione Gualberto de S&aacute;, Jo&atilde;o Maria Simpl&iacute;cio Ferreira, Murilo Soares de Oliveira e Jos&eacute; Ilton Ata&iacute;de<br />
Trombone: Gilberto Cabral da Silva, Jair Brand&atilde;o de Lima, Jos&eacute; Benedito da Silva, Daniel Alves dos Santos e Jos&eacute; Manoel Nunes<br />
Tuba: Geraldo Bernardo da Silva e Adriano Eduardo M. Dantas<br />
T&iacute;mpano: Jo&atilde;o Paulino Filho<br />
Bateria: Jos&eacute; Pedro dos Santos Neto<br />
Percuss&atilde;o: Edmilson Ferreira Cardoso e Marlon Magno de Lima<br />
Guitarra: Camilo Emanuel de M. Lemos<br />
Teclado: Willames Silva da Costa<br />
Contrabaixo: Edilton Costa Lima<br />
Convidados<br />
Obo&eacute;: Roberta Benjamin Barbosa<br />
Trompetes: Marlyson Jos&eacute; da Silva, Sylas Henrique da Silva, Erinaldo Dantas de Ara&uacute;jo e Peniel Galv&atilde;o Ramos<br />
Trombone: Luiz Carlos de Lima Filho, Alzimar Trajano da Silva, Laerte Adler Ribeiro de Lima e Marcos Alberto Bispo Cordeiro<br />
Bateria, percuss&atilde;o e xilofone: Jaildo Gurgel da Costa<br />
Percuss&atilde;o: Juscelino Brito Teixeira<br />
Fagote: Daniel Aguiar de Rezende<br />
</p>',
'faixa_mp3' => '2008-17.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'179',
'faixa_titulo' => 'O Maior Carnaval do Planeta',
'compositor' => '(Andr&eacute; Rio)',
'dolp' => 'Do CD &ldquo;O canto do Galo &ndash; Um tributo a En&eacute;as&rdquo;, Independente (2009)',
'letra' => '<p>Manh&atilde; de s&aacute;bado j&aacute; chegou<br />
E at&eacute; a lua, de teimosa, ficou pra ver<br />
O galo acordando o sol<br />
E no raiar do amanhecer<br />
Como num encanto dos clarins ecoou<br />
O hino maior, Evo&eacute;<br />
E o carnaval come&ccedil;ou</p>
<p>O povo era um mar de gente<br />
Fazendo a ponte tremer<br />
A Guararapes em festa<br />
A orquestra tocando para o mundo ver<br />
E o passado presente<br />
Regando a semente<br />
Do sonho que En&eacute;as plantou<br />
E que hoje bem mais que uma festa<br />
&Eacute; o espet&aacute;culo maior da terra</p>
<p>Vem, vem pro Galo<br />
Vem, vem pra ver<br />
Na Conc&oacute;rdia o frevo ferver<br />
Vem, vem pro Galo<br />
Mergulhar de cabe&ccedil;a<br />
No maior carnaval do planeta</p>
',
'creditos' => '<p>Dire&ccedil;&atilde;o e produ&ccedil;&atilde;o musical: Andr&eacute; Rio<br />
Auxiliares de produ&ccedil;&atilde;o: Marcos Cabral e Fernando Azula<br />
Arranjo de base: Andr&eacute; Rio, Br&aacute;ulio Ara&uacute;jo e Marcos Cabral<br />
Bateria: Augusto Silva<br />
Baixo: Br&aacute;ulio Ara&uacute;jo<br />
Guitarras: Marcos Cabral<br />
Teclado: Fabio Valois<br />
Percuss&atilde;o: Augusto Silva<br />
Sax alto e tenor: Luidinho Souza<br />
Trompetes: Fabinho Costa e Augusto Fran&ccedil;a<br />
Trombones: Nilsinho Amarante e Jonatan Santos<br />
Vocais: Nena Queiroga e Vanessa Oliveira<br />
</p>',
'faixa_mp3' => '2009-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'187',
'faixa_titulo' => 'Plantio de Amor (Ao Vivo)',
'compositor' => '(Dominguinhos / Clim&eacute;rio)',
'dolp' => 'Do DVD Raiz do Sana, Independente (2009)<br />
Com:<strong> Raiz do Sana</strong>
',
'letra' => '<p>Vem, sara em mim essa dor<br />
Essa falta de ti<br />
Esse aperreio de amor</p>
<p>Vem cerca o meu cora&ccedil;&atilde;o<br />
Planta em mim essa dor<br />
Que faz brotar seu calor</p>
<p>Vem semear o teu beijo<br />
Eu vou colher teu desejo<br />
Bem no ro&ccedil;ado do peito</p>
<p>Vem, vou afogar minhas m&aacute;goas<br />
Em tuas profundas &aacute;guas<br />
Vou mergulhar em teu leito</p>
<p>Se &eacute;s mar, eu sou jangadeiro<br />
Se &eacute;s guerra, eu sou Lampi&atilde;o<br />
Se &eacute;s dan&ccedil;a, sou sanfoneiro<br />
Se &eacute;s xaxado, eu sou bai&atilde;o</p>',
'creditos' => '<p>Voz: Tati Veras<br />
Percuss&atilde;o: Phinha e Rodrigo Bucair<br />
Guitarra: L&eacute;o Oliveira<br />
Sanfona: Rodrigo Ramalho<br />
Baixo: Elysio<br />
Zabumba: Frank Furtado<br />
</p>',
'faixa_mp3' => '2009-17.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'176',
'faixa_titulo' => 'Enchente',
'compositor' => '(Andr&eacute; Rio / Cezinha)',
'dolp' => 'Do CD Andr&eacute; Rio e Trio Sotaque &ldquo;Raps&oacute;dia Nordestina&rdquo;, (2009)<br />
Com:<strong> Andr&eacute; Rio</strong>
',
'letra' => '<p>Luz que ilumina minha vida<br />
Chuva que floresce meu sert&atilde;o<br />
Hoje canto minha alegria<br />
De ver que a tristeza &eacute; partida<br />
Desde que meus olhos, seus, s&atilde;o</p>
<p>Arvore que brota minha sinh&aacute;<br />
Raio que clareia a escurid&atilde;o<br />
Hoje canto minha alegria<br />
De ser retirante da vida<br />
De um cora&ccedil;&atilde;o s&oacute;, sem raz&atilde;o</p>
<p>S&atilde;o Jo&atilde;o me fa&ccedil;a ser<br />
A brasa que acende a fogueira<br />
A m&atilde;o que apanha a colheita<br />
O bra&ccedil;o de rio que abra&ccedil;a<br />
Pra seca, a esperan&ccedil;a d&rsquo;&aacute;gua<br />
A regar sua paix&atilde;o<br />
Pro amor se tornar a enchente<br />
De mim no seu cora&ccedil;&atilde;o</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o, viol&atilde;o e viola: Luciano Magno<br />
Co-produ&ccedil;&atilde;o: Ranniere Oliveira<br />
Acordeom: Cezinha<br />
Pandeiro: Raimundo Batista<br />
Teclado: Fabio Valois<br />
Baixo: Nando Barreto<br />
Bateria e percuss&atilde;o: Hiato<br />
</p>',
'faixa_mp3' => '2009-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'180',
'faixa_titulo' => 'Forr&oacute; do Pic Plic Pl&aacute;',
'compositor' => '(Jo&atilde;o Silva / J. B. Aquino)',
'dolp' => 'Do CD Trio Juriti &ldquo;Cara a cara&rdquo;, Independente (2009)<br />
Com:<strong> Trio Juriti</strong>
',
'letra' => '<p>Ele veio do fundo do quintal<br />
Hoje &eacute; maioral nos palho&ccedil;&otilde;es<br />
T&aacute; valendo milh&otilde;es<br />
T&aacute; valendo milh&otilde;es<br />
T&aacute; valendo milh&otilde;es<br />
O forr&oacute; t&aacute; valendo milh&otilde;es</p>
<p>T&aacute; do jeito que o velho pai gostava<br />
Do jeito que velho pai queria<br />
Pra quem n&atilde;o acreditava<br />
Que o forr&oacute; explodia</p>
<p>Ta&iacute;, ta&iacute;, t&aacute;<br />
Ele zombou de todo mundo<br />
E hoje &eacute; pic plic pl&aacute;</p>',
'creditos' => '<p>Arranjo: Mestrinho e Jo&atilde;o Silva<br />
Sanfona e voz: Mestrinho<br />
Tri&acirc;ngulo, agog&ocirc; e voz: Tha&iacute;s Nogueira<br />
Zabumba e voz: Scurinho<br />
Bateria: Toninho<br />
Baixo: Magr&atilde;o<br />
Guitarra: Omar Campos<br />
Pandeiro: L&eacute;o Rodrigues<br />
Cavaquinho: Thiago dos Santos<br />
Vocal: Trio Dona Flor<br />
</p>',
'faixa_mp3' => '2009-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'181',
'faixa_titulo' => 'Lua Viva',
'compositor' => '(Tito L&iacute;vio / Lula Cortes)',
'dolp' => 'Do CD Tito L&iacute;vio &ldquo;Feito pra tocar no r&aacute;dio&rdquo;, Independente (2009)<br />
Com:<strong> Tito L&iacute;vio</strong>
',
'letra' => '<p>A lua cheia &eacute; como a chave clara<br />
Que abre a porta do c&eacute;u do sert&atilde;o<br />
Que abre a mente com a chave nova<br />
Pro cora&ccedil;&atilde;o</p>
<p>A lua viva &eacute; como a mente cheia<br />
Que abre a vida pra nova vis&atilde;o<br />
Que abre a porta para o universo<br />
Do cora&ccedil;&atilde;o</p>
<p>E novamente a lua cheia brilha<br />
E faz um rastro claro pelo c&eacute;u<br />
Como se a chave houvesse aberto a porta<br />
Do universo sobre o meu chap&eacute;u</p>
<p>A lua cheia l&aacute; da Para&iacute;ba<br />
&Eacute; como a chave cheia de ambi&ccedil;&atilde;o<br />
Que abre a porta para o universo<br />
Do cora&ccedil;&atilde;o</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Charles Teony<br />
Dire&ccedil;&atilde;o musical: Charles Teony e Taty Veloz<br />
Arranjo: Tito L&iacute;vio, Taty Veloz, Charles Teoni e Jo&atilde;o Bass<br />
Viol&atilde;o, guitarra e sintetizador: Taty Veloz<br />
Baixo: Toinho Japa<br />
Bateria e percuss&atilde;o: Hito Pereira<br />
Acordeom: Cezzinha Thomaz<br />
</p>',
'faixa_mp3' => '2009-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'178',
'faixa_titulo' => 'Mulata Assanhada',
'compositor' => '(Ataulfo Alves)',
'dolp' => 'Do CD &ldquo;Ataulfo Alves 100 anos&rdquo;, Lua Music 357 (2009)
',
'letra' => '<p>Ai, mulata assanhada<br />
Que passa com gra&ccedil;a<br />
Fazendo pirra&ccedil;a<br />
Fingindo inocente<br />
Tirando o sossego da gente</p>
<p>Ai, mulata se eu pudesse<br />
E se meu dinheiro desse<br />
Eu te dava sem pensar<br />
Essa terra, este c&eacute;u, este mar<br />
E ela finge que n&atilde;o sabe<br />
Que tem feiti&ccedil;o no olhar</p>
<p>Ai, meu Deus, que bom seria<br />
Se voltasse a escravid&atilde;o<br />
Eu pegava a escurinha<br />
Prendia no meu cora&ccedil;&atilde;o<br />
E depois a pretoria<br />
&Eacute; quem resolvia a quest&atilde;o</p>',
'creditos' => '<p>Idealiza&ccedil;&atilde;o e produ&ccedil;&atilde;o: Thiago Marques Luiz<br />
Dire&ccedil;&atilde;o musical e arranjo: Andr&eacute; Bedur&ecirc; e Rovilson Pascoal<br />
Viol&atilde;o de nylon: Rovilson Pascoal<br />
Baixo: Andr&eacute; Bedur&ecirc;<br />
Cavaquinho: Ildo Silva<br />
Bateria e percuss&atilde;o: Guilherme Kastrup<br />
Arranjo de metais e sax tenor: Marcelo Monteiro<br />
Trompete: Reginaldo Gomes<br />
Trombone: Tiquinho<br />
</p>',
'faixa_mp3' => '2009-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'192',
'faixa_titulo' => 'Ora&ccedil;&atilde;o de S&atilde;o Francisco',
'compositor' => '(D.P./ Adapta&ccedil;&atilde;o: Padre Casimiro Irala)',
'dolp' => 'Do CD Silvério Pessoa “Ciclos”, Independente (2009)<br/>
Com:<strong> Silvério Pessoa</strong>
',
'letra' => '<p>Senhor, fazei-me um instrumento de vossa paz<br />
Onde houver &oacute;dio, que eu leve o amor<br />
Onde houver ofensa, que eu leve o perd&atilde;o<br />
Onde houver disc&oacute;rdia, que eu leve a uni&atilde;o<br />
Onde houver d&uacute;vida, que eu leve a f&eacute;</p>
<p>Onde houver erro, que eu leve a verdade<br />
Onde houver desespero, que eu leve a esperan&ccedil;a<br />
Onde houver tristeza, que eu leve a alegria<br />
E onde houver trevas, que eu leve a luz</p>
<p>&Oacute; mestre, fazei que eu procure mais<br />
Consolar, que ser consolado<br />
Compreender, que ser compreendido<br />
Amar, que ser amado<br />
Pois &eacute; dando que se recebe<br />
&Eacute; perdoando que se &eacute; perdoado<br />
E &eacute; morrendo que se vive para a vida eterna</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Silv&eacute;rio Pessoa<br />
Dire&ccedil;&atilde;o art&iacute;stica e musical: Alex Sobreira, Elias Paulino e Silv&eacute;rio Pessoa<br />
Arranjo de base e cordas: Alex Sobreira e Elias Paulino<br />
Viol&otilde;es: Alex Sobreira<br />
Violoncelo: Fabiano Menezes<br />
Viol&atilde;o tenor: Ma&iacute;ra Macedo<br />
Bandolim: Moema Macedo<br />
</p>',
'faixa_mp3' => '2009-22.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'182',
'faixa_titulo' => 'Mais Uma Vez (Ao Vivo)',
'compositor' => '(Renato Russo / Fl&aacute;vio Venturini)',
'dolp' => 'Do CD T&acirc;nia Mara &ldquo;Falando de amor&rdquo;, EMI (2009)<br />
Com:<strong> T&acirc;nia Mara</strong>',
'letra' => '<p>Mas &eacute; claro que o sol vai voltar amanh&atilde;<br />
Mais uma vez, eu sei<br />
Escurid&atilde;o j&aacute; vi pior<br />
De endoidecer gente s&atilde;<br />
Espera que o sol j&aacute; vem</p>
<p>Tem gente que est&aacute; do mesmo lado que voc&ecirc;<br />
Mas deveria estar do lado de l&aacute;<br />
Tem gente que machuca os outros<br />
Tem gente que n&atilde;o sabe amar<br />
Tem gente enganando a gente<br />
Veja a nossa vida como est&aacute;<br />
Mas eu sei que um dia a gente aprende<br />
Se voc&ecirc; quiser algu&eacute;m em quem confiar<br />
Confie em si mesmo<br />
Quem acredita sempre alcan&ccedil;a</p>
<p>Nunca deixe que lhe digam que n&atilde;o vale a pena<br />
Acreditar no sonho que se tem<br />
Ou que os seus planos nunca v&atilde;o dar certo<br />
Ou que voc&ecirc; nunca vai ser algu&eacute;m<br />
Tem gente que machuca os outros<br />
Tem gente que n&atilde;o sabe amar<br />
Mas eu sei que um dia a gente aprende<br />
Se voc&ecirc; quiser algu&eacute;m em quem confiar<br />
Confie em si mesmo<br />
Quem acredita sempre alcan&ccedil;a</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: J&uacute;lio Teixeira e T&acirc;nia Mara<br />
Dire&ccedil;&atilde;o: M&aacute;rio Meirelles<br />
Arranjo: J&uacute;lio Teixeira<br />
Bateria: Daniel Couto<br />
Baixo: Marcelo Sousa e Humphry Scott<br />
Teclados: Eliseu Fi&uacute;za<br />
Percuss&atilde;o: Jader Pinheiro<br />
Guitarras: Claudinho Ferreira e Leandro Barros<br />
Vocal: Marconi Couto<br />
Backing: Alexandre Pereira da Silva, Agnaldo Batista de Figueiredo (Abdulah) e Alessandra Maia<br />
</p>',
'faixa_mp3' => '2009-7.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'182',
'faixa_titulo' => 'Lembran&ccedil;a de um Beijo (Ao Vivo)',
'compositor' => '(Accioly Neto)',
'dolp' => 'Do CD T&acirc;nia Mara &ldquo;Falando de amor&rdquo;, EMI (2009)<br />
Com:<strong> T&acirc;nia Mara</strong>
',
'letra' => '<p>Quando a saudade invade o cora&ccedil;&atilde;o da gente<br />
Pega a veia onde corria um grande amor<br />
N&atilde;o tem conversa nem cacha&ccedil;a que d&ecirc; jeito<br />
Nem um amigo do peito que segure o choror&ocirc;</p>
<p>Que segure o choror&ocirc;<br />
Que segure o choror&ocirc;</p>
<p>Saudade j&aacute; tem nome de mulher<br />
S&oacute; pra fazer do homem o que bem quer<br />
Saudade j&aacute; tem nome de mulher<br />
S&oacute; pra fazer do homem o que bem quer</p>
<p>O cabra pode ser valente<br />
E chorar<br />
Ter meio mundo de dinheiro<br />
E chorar<br />
Ser forte que nem sertanejo<br />
E chorar<br />
S&oacute; na lembran&ccedil;a de um beijo<br />
Chorar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: J&uacute;lio Teixeira e T&acirc;nia Mara<br />
Dire&ccedil;&atilde;o: M&aacute;rio Meirelles<br />
Arranjo e acordeom: J&uacute;lio Teixeira<br />
Bateria: Daniel Couto<br />
Baixo: Marcelo Sousa e Humphry Scott<br />
Teclados: Eliseu Fi&uacute;za<br />
Percuss&atilde;o: Jader Pinheiro<br />
Guitarras: Claudinho Ferreira e Leandro Barros<br />
Vocal: Marconi Couto<br />
Backing: Alexandre Pereira da Silva, Agnaldo Batista de Figueiredo (Abdulah) e Alessandra Maia<br />
</p>',
'faixa_mp3' => '2009-8.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'193',
'faixa_titulo' => 'N&atilde;o Chore Mais (No Woman, no Cry) (Ao Vivo)',
'compositor' => '(Vincent Ford / vers&atilde;o: Gilberto Gil)',
'dolp' => 'Do DVD T&acirc;nia Mara &ldquo;Falando de amor&rdquo;, EMI (2009)<br />
Com:<strong> T&acirc;nia Mara</strong>
',
'letra' => '<p>No woman, no cry<br />
No woman, no cry</p>
<p>Bem que eu me lembro<br />
A gente sentado aqui<br />
Na grama do aterro, sob o sol<br />
Ob-observando hip&oacute;critas<br />
Disfar&ccedil;ados, rondando ao redor</p>
<p>Amigos presos<br />
Amigos sumindo assim<br />
Pra nunca mais<br />
Nas recorda&ccedil;&otilde;es<br />
Retratos do mal em si<br />
Melhor &eacute; deixar pra tr&aacute;s</p>
<p>Bem que eu me lembro<br />
A gente sentado aqui<br />
Na grama do aterro, sob o c&eacute;u<br />
Ob-observando estrelas<br />
Junto &agrave; fogueirinha de papel</p>
<p>Quentar o frio<br />
Requentar o p&atilde;o<br />
E comer com voc&ecirc;<br />
Os p&eacute;s, de manh&atilde;, pisar o ch&atilde;o<br />
Eu sei a barra de viver</p>
<p>Mas se Deus quiser<br />
Tudo, tudo, tudo vai dar p&eacute;<br />
Tudo, tudo, tudo vai dar p&eacute;<br />
Tudo, tudo, tudo vai dar p&eacute;<br />
Tudo, tudo, tudo vai dar p&eacute;</p>
<p>Everything is gonna be allright<br />
Everything is gonna be allright</p>
<p>N&atilde;o, n&atilde;o chore mais<br />
N&atilde;o, n&atilde;o chore mais</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: J&uacute;lio Teixeira e T&acirc;nia Mara<br />
Dire&ccedil;&atilde;o: M&aacute;rio Meirelles<br />
Arranjo: J&uacute;lio Teixeira<br />
Bateria: Daniel Couto<br />
Baixo: Marcelo Sousa e Humphry Scott<br />
Teclados: Eliseu Fi&uacute;za<br />
Percuss&atilde;o: Jader Pinheiro<br />
Guitarras: Claudinho Ferreira e Leandro Barros<br />
Vocal: Marconi Couto<br />
Backing: Alexandre Pereira da Silva, Agnaldo Batista de Figueiredo (Abdulah) e Alessandra Maia<br />
</p>',
'faixa_mp3' => '2009-23.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'183',
'faixa_titulo' => 'Boato Ribeirinho (Ao Vivo)',
'compositor' => '(Nilton Freitas / Wilson Freitas / Wilson Duarte)',
'dolp' => 'Do CD Targino Gondim &ldquo;Simplesmente assim&rdquo;, Atra&ccedil;&atilde;o (2009)<br />
Com:<strong> Targino Gondim</strong>
',
'letra' => '<p>Corre um boato na beira do rio<br />
Que o Velho Chico pode morrer<br />
Virar riacho e correr pro nada<br />
Viajando por temporada<br />
Quando a chuva do meu Deus dar&aacute; chegar<br />
Dar&aacute; chegar<br />
Quando a chuva do meu Deus dar&aacute; chegar</p>
<p>J&aacute; dizia Frei Luiz de Xique-xique<br />
Qu&atilde;o &#39;xique&#39; &eacute; ter<br />
O rio pra nadar a correr<br />
Qu&atilde;o &#39;xique&#39; &eacute; ter<br />
O rio pra pescar e pra beber</p>
<p>N&atilde;o deixe morrer<br />
N&atilde;o deixe o rio morrer<br />
Sen&atilde;o o que ser&aacute; de mim<br />
Que s&oacute; tenho esse rio pra viver<br />
Sen&atilde;o o que ser&aacute; de mim<br />
Que s&oacute; tenho esse rio pra viver</p>
<p>Que ser&aacute;, que ser&aacute; de mim?<br />
Que ser&aacute; de Jos&eacute; Serafim?<br />
Qual ser&aacute; o destino do menino<br />
Que nasceu e cresceu aprendendo a pescar surubim?</p>
<p>N&atilde;o deixe morrer<br />
N&atilde;o deixe o rio morrer<br />
Se n&atilde;o morre o ribeirinho de fome, de sede<br />
De sei l&aacute; o qu&ecirc;<br />
Se n&atilde;o morre o ribeirinho de fome, de sede<br />
De sei l&aacute; o qu&ecirc;</p>',
'creditos' => '<p>Sanfona e voz: Targino Gondim<br />
Sanfona detalhes: Cicinho de Assis<br />
Viol&atilde;o: Tadeu Gouveia<br />
Baixo: Marcos Brasil<br />
Bateria: Emanuel Ara&uacute;jo<br />
Percuss&atilde;o: Aur&eacute;lio Gomes<br />
Zabumba: Cleiton<br />
Tri&acirc;ngulo: Raimundo Suzano<br />
Vocais: Danielle Ramos, Fabiana Santiago e Cleiton<br />
</p>',
'faixa_mp3' => '2009-9.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'183',
'faixa_titulo' => 'Deixe Estar (Ao Vivo)',
'compositor' => '(Targino Gondim / Tenison Del Rey / Gersinho)',
'dolp' => 'Do CD Targino Gondim &ldquo;Simplesmente assim&rdquo;, Atra&ccedil;&atilde;o (2009)<br />
Com:<strong> Targino Gondim</strong>
',
'letra' => '<p>Deixe estar<br />
Eu j&aacute; n&atilde;o tenho nada pra falar<br />
Deixe estar<br />
Que a vida vai seguindo de qualquer maneira<br />
Amar n&atilde;o &eacute; brincadeira<br />
O amor n&atilde;o &eacute; da gente<br />
Se n&atilde;o cuidar, acaba de repente<br />
Sorriso agora, choro l&aacute; na frente<br />
Isso vale pra qualquer pessoa<br />
Tudo passar&aacute;, passarinho voa<br />
N&atilde;o vou ficar aqui sofrendo &agrave; toa<br />
Deixe estar, amor</p>',
'creditos' => '<p>Sanfona e voz: Targino Gondim<br />
Sanfona detalhes: Cicinho de Assis<br />
Viol&atilde;o: Tadeu Gouveia<br />
Baixo: Marcos Brasil<br />
Bateria: Emanuel Ara&uacute;jo<br />
Percuss&atilde;o: Aur&eacute;lio Gomes<br />
Zabumba: Cleiton<br />
Tri&acirc;ngulo: Raimundo Suzano<br />
</p>',
'faixa_mp3' => '2009-10.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'183',
'faixa_titulo' => 'Esperando na Janela (Ao Vivo)',
'compositor' => '(Targino Gondim / Manuca Almeida / Raimundinho do Acordeon)',
'dolp' => 'Do CD Targino Gondim &ldquo;Simplesmente assim&rdquo;, Atra&ccedil;&atilde;o (2009)<br />
Com:<strong> Targino Gondim</strong>',
'letra' => '<p>Ainda me lembro do seu caminhar<br />
Seu jeito de olhar, eu me lembro bem<br />
Fico querendo sentir o seu cheiro<br />
Daquele jeito que ela tem<br />
O tempo todo eu fico feito tonto<br />
Sempre procurando, mas ela n&atilde;o vem<br />
E esse aperto no fundo do peito<br />
Desses que o sujeito n&atilde;o pode aguentar, ah<br />
E esse aperto aumenta meu desejo<br />
Eu n&atilde;o vejo a hora de poder lhe falar</p>
<p>Por isso eu vou na casa dela, ai, ai<br />
Falar do meu amor pra ela, vai<br />
T&aacute; me esperando na janela, ai, ai<br />
N&atilde;o sei se vou me segurar</p>',
'creditos' => '<p>Sanfona e voz: Targino Gondim<br />
Viol&atilde;o: Tadeu Gouveia<br />
</p>',
'faixa_mp3' => '2009-11.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'184',
'faixa_titulo' => 'De Volta pro Aconchego (Ao Vivo)',
'compositor' => '(Dominguinhos / Nando Cordel)',
'dolp' => 'Do DVD &ldquo;Dominguinhos &ndash; Ao vivo&rdquo;, Independente/Polydisc 100.079 (2009)<br />
Com:<strong> Dominguinhos</strong>
',
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
Na felicidade sem fim</p>',
'creditos' => '<p>Voz e acordeom: Dominguinhos<br />
Guitarra e viol&atilde;o: Sandro Haick e Jo&atilde;o Neto<br />
Acordeom: Cezzinha Thomaz<br />
Baixo: Mongol<br />
Bateria: Alex Buck<br />
Viol&atilde;o: Chico Teixeira<br />
</p>',
'faixa_mp3' => '2009-12.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'184',
'faixa_titulo' => 'Onde Est&aacute; Voc&ecirc; (Ao Vivo)',
'compositor' => '(Zezum)',
'dolp' => 'Do DVD &ldquo;Dominguinhos &ndash; Ao vivo&rdquo;, Independente/Polydisc 100.079 (2009)<br />
Com:<strong> Dominguinhos</strong>
',
'letra' => '<p>Onde est&aacute; voc&ecirc;<br />
Apare&ccedil;a aqui pra me ver<br />
Eu vou gostar demais<br />
Sabes onde estou e nada mudou<br />
Venha me dizer onde voc&ecirc; andou</p>
<p>Eu andei sem te encontrar<br />
Em quase todo lugar<br />
Eu perguntava por ti<br />
Teus passos sempre segui<br />
Querendo te encontrar<br />
S&oacute; pra falar de amor<br />
Frases que nunca falei<br />
Carinhos que nunca fiz<br />
Beijos que nunca te dei<br />
O amor que te neguei<br />
Agora quero te dar<br />
E te fazer feliz</p>',
'creditos' => '<p>Voz e acordeom: Dominguinhos<br />
Guitarra e viol&atilde;o: Sandro Haick e Jo&atilde;o Neto<br />
Acordeom: Cezzinha Thomaz<br />
Baixo: Mongol<br />
Bateria: Alex Buck<br />
Zabumba: Quartinha<br />
Tri&acirc;ngulo: Flavinho<br />
Pandeiro: Valdomiro<br />
Viol&atilde;o: Chico Teixeira</p>',
'faixa_mp3' => '2009-13.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'184',
'faixa_titulo' => 'Plantio de Amor (Ao Vivo)',
'compositor' => '(Dominguinhos / Clim&eacute;rio)',
'dolp' => 'Do DVD &ldquo;Dominguinhos &ndash; Ao vivo&rdquo;, Independente/Polydisc 100.079 (2009)
',
'letra' => '<p>Vem, sara em mim essa dor<br />
Essa falta de ti<br />
Esse aperreio de amor</p>
<p>Vem cerca o meu cora&ccedil;&atilde;o<br />
Planta em mim essa dor<br />
Que faz brotar teu calor</p>
<p>Vou semear o teu beijo<br />
Eu vou colher teu desejo<br />
Bem no ro&ccedil;ado do peito</p>
<p>Vem, vou afogar minhas m&aacute;goas<br />
Em tuas profundas &aacute;guas<br />
Vou mergulhar em teu leito</p>
<p>Se &eacute;s mar, eu sou jangadeiro<br />
Se &eacute;s guerra, sou Lampi&atilde;o<br />
Se &eacute;s dan&ccedil;a, sou sanfoneiro<br />
Se &eacute;s xaxado, eu sou bai&atilde;o</p>',
'creditos' => '<p>Voz e acordeom: Dominguinhos<br />
Guitarra e viol&atilde;o: Sandro Haick e Jo&atilde;o Neto<br />
Acordeom: Cezzinha Thomaz<br />
Baixo: Mongol<br />
Bateria: Alex Buck<br />
Zabumba: Quartinha<br />
Tri&acirc;ngulo: Flavinho<br />
Pandeiro: Valdomiro<br />
Viol&atilde;o: Chico Teixeira<br />
</p>',
'faixa_mp3' => '2009-14.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'191',
'faixa_titulo' => 'Amor Cego',
'compositor' => '(Amaro Penna / Ubiratan Aguiar)',
'dolp' => 'Do CD Ubiratan Aguiar &ldquo;A sina do cabra da peste&rdquo;, Independente (2009)',
'letra' => '<p>Meu fetiche, meu a&ccedil;oite<br />
Marcas de minh&rsquo;alma<br />
Minha coberta da noite<br />
Carne que me acalma</p>
<p>Meu dengo, meu doce<br />
Meu petisco, meu manjar<br />
Se voc&ecirc; de novo fosse<br />
Desejos a me ati&ccedil;ar</p>
<p>Minha festa, meu querer<br />
Fica o resto da manh&atilde;<br />
Pra acordar no anoitecer<br />
Com o canto de Ians&atilde;</p>
<p>Meu pecado e virtude<br />
Acasala o meu ego<br />
Acalma minha inquietude<br />
Faz meu amor ficar cego</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Leonardo Rocha<br />
Arranjo, viol&atilde;o e viola: Manass&eacute;s<br />
Tri&acirc;ngulo: Gilson<br />
Baixo ac&uacute;stico: N&eacute;lio Costa<br />
Acordeom: Adelson Viana<br />
Bateria: Denilson Lopes<br />
</p>',
'faixa_mp3' => '2009-21.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'185',
'faixa_titulo' => 'A Dan&ccedil;a do Dia a Dia',
'compositor' => '(Fl&aacute;vio Leandro)',
'dolp' => 'Do CD Santanna &ldquo;Forr&oacute;, a dan&ccedil;a do dia a dia&rdquo;, Atra&ccedil;&atilde;o (2009)<br />
Com:<strong> Santanna</strong>',
'letra' => '
<p>Quer saber como &eacute; vida<br />
Bote o p&eacute; na estrada s&oacute; pra ver como &eacute; que &eacute;<br />
Quer saber como &eacute; o amor<br />
Tente desvendar o cora&ccedil;&atilde;o de uma mulher</p>
<p>Quer saber se tem amigo<br />
Caia no castigo de dizer: &ldquo;T&ocirc; sem dinheiro&rdquo;<br />
E a&iacute; nesse final de festa<br />
O amigo que presta &eacute; o que chegar primeiro<br />
E a&iacute; nesse final de festa<br />
O amigo que presta &eacute; o que chegar primeiro</p>
<p>Se queres seguir adiante<br />
Pegue a vida e plante no melhor caminho<br />
N&atilde;o ligue para os dissabores<br />
No cheiro das flores tamb&eacute;m h&aacute; espinho</p>
<p>O vinho bom se faz na luta<br />
E quem melhor escuta aprende a falar<br />
Os olhos mentem pra raz&atilde;o<br />
E a voz do cora&ccedil;&atilde;o &agrave;s vezes pode errar</p>
<p>Eu quero a minha vida no compasso dessa dan&ccedil;a<br />
Na esperan&ccedil;a desse mundo melhorar<br />
Quero meu forr&oacute; morando na literatura<br />
E desenhando a arquitetura da cultura popular</p>
<p><em>A&iacute; o poeta Pinto do Monteiro de Monteiro disse:</em><br />
Eu comparo esta vida<br />
A curva da letra S:<br />
Tem uma ponta que sobe<br />
Tem outra ponta que desce<br />
E a volta que d&aacute; no meio<br />
Nem todo mundo conhece</p>
<p><em>E eu digo</em><br />
A cultura popular agradece<br />
Quando Elba Ramalho aparece</p>
<p>Produ&ccedil;&atilde;o: Laelma Fraga Carvalho e Santanna o Cantador<br />
Acordeom: Cezzinha Thomaz<br />
Zabumba, tri&acirc;ngulo e agog&ocirc;: Quartinha<br />
Pandeiro, caixa, ganz&aacute; e efeitos: Samucka<br />
Vocal/efeitos: Yanutti<br />
</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Laelma Fraga Carvalho e Santanna o Cantador<br />
Acordeom: Cezzinha Thomaz<br />
Zabumba, tri&acirc;ngulo e agog&ocirc;: Quartinha<br />
Pandeiro, caixa, ganz&aacute; e efeitos: Samucka<br />
Vocal/efeitos: Yanutti<br />
</p>',
'faixa_mp3' => '2009-15.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'186',
'faixa_titulo' => 'Tenho um Xod&oacute; por Ti (I&rsquo;ve Got a Crush on You)',
'compositor' => '(George Gershwin / Ira Gershwin / vers&atilde;o: Carlos Renn&oacute;)',
'dolp' => 'Do CD &ldquo;Nego&rdquo;, Biscoito Fino BF 872 (2009)<br />
Com:<strong> Dominguinhos</strong>
',
'letra' => '<p>Ah, seriam t&atilde;o felizes<br />
Joanas, Beatrizes<br />
Ah se ganhassem-me</p>
<p>Voc&ecirc; t&atilde;o persistente<br />
E a mim t&atilde;o resistente<br />
Venceu &ndash; e convenceu</p>
<p>&Oacute; meu grande e elegante, meu Romeu<br />
Sei que te ganhei<br />
N&atilde;o sei como ocorreu<br />
Nem &eacute;s assim perfeito<br />
Mas agitou meu peito<br />
Te ver aparecer</p>
<p>Tenho um xod&oacute; por ti<br />
P&atilde;o de mel<br />
Ando suspirando<br />
Pra dedel<br />
Eu nunca tive em mente<br />
Me apaixonar t&atilde;o intensamente<br />
Que tal eu, que tal tu<br />
Num chal&eacute; charmoso pra chuchu?<br />
Do meu chamego tem d&oacute;<br />
Que eu tenho um xod&oacute;, meu broto, por ti</p>
<p>Tenho um xod&oacute; por ti<br />
P&atilde;o de mel<br />
Ando suspirando<br />
Pra dedel<br />
N&atilde;o &eacute; s&oacute; azara&ccedil;&atilde;o<br />
Provamos que h&aacute; predestina&ccedil;&atilde;o</p>
<p>Topo eu, topo tu<br />
Num chal&eacute; charmoso pra chuchu<br />
O teu chamego da d&oacute;<br />
Que eu tenho um xod&oacute;, meu broto, por ti</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Carlos Renn&oacute;, Jaques Morelenbaum e Moogie Canazio<br />
Arranjo: Jacques Morelembaum<br />
Acordeom: Dominguinhos<br />
Piano: Jo&atilde;o Donato<br />
</p>',
'faixa_mp3' => '2009-16.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'177',
'faixa_titulo' => 'Maria e o Anjo',
'compositor' => '(Dalvimar Gallo)',
'dolp' => 'Do CD Padre Fabio de Melo &ldquo;Iluminar&rdquo;, Som Livre (2009)<br />
Com:<strong> Padre Fabio de Melo</strong>',
'letra' => '<p><em>Maria</em><br />
Quem ser&aacute;s tu, criatura bela<br />
Que encheu meu quarto com tua luz?<br />
O teu olhar me trouxe a paz<br />
Tua presen&ccedil;a me refaz</p>
<p><em>Anjo</em><br />
Eu sou o Anjo Gabriel<br />
Venho da parte do Senhor<br />
Dar&aacute;s a luz ao Salvador<br />
Ser&aacute;s a m&atilde;e do Emanuel</p>
<p><em>Maria</em><br />
Por que teus l&aacute;bios tremem tanto assim?<br />
Por que n&atilde;o tiras teus olhos de mim?</p>
<p><em>Anjo</em><br />
H&aacute; tanta gra&ccedil;a estar diante de ti<br />
Que o c&eacute;u inteiro espera por teu sim</p>
<p><em>Maria</em><br />
N&atilde;o temas, doce anjo do Senhor<br />
Escuta o que agora vou falar<br />
Sorri, vai ao c&eacute;u anunciar<br />
Sim, eu serei a m&atilde;e do Salvador</p>
<p><em>Anjo</em><br />
Ave Maria, quanta alegria<br />
O c&eacute;u se encheu de luz<br />
Pois vai nascer Jesus<br />
Santa Maria, Deus escolheu-te bem<br />
E todos os anjos cantam am&eacute;m</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Jota Moraes e Maur&iacute;cio Piassarollo<br />
Arranjo e teclado: Maur&iacute;cio Piassarollo<br />
Guitarra e viol&atilde;o: Cl&aacute;udio Costa<br />
Baixo: Marcelo Linhares<br />
Viol&atilde;o e guitarra: Sidney Linhares<br />
Bateria: Wallace Santos<br />
Percuss&atilde;o: Kab&eacute; Pinheiro<br />
Arranjo e reg&ecirc;ncia de cordas: Jota Moraes<br />
Arregimentador e spalla: Ricardo Amado<br />
Violinos: Adonhiran Reis, Fernando Pereira, Carlos Mendes, Ricardo J. Menezes, Fabio Peixoto, Priscila Plata Rato e Dhyan Toffolo<br />
Violas: Gabriel Marin e Jos&eacute; Ricardo V&ouml;elker Taboada<br />
Violoncelos: Alceu Reis e Hugo Pilger<br />
Vocal: Aline Souza, T&acirc;mara Cruz, Jaimerson Silva, Anderson Leonel e Nequinho<br />
</p>',
'faixa_mp3' => '2009-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'188',
'faixa_titulo' => 'O Padre',
'compositor' => '(Fabio Geriz)',
'dolp' => 'Do CD Padre Antonio Maria &ldquo;Prisioneiro do amor&rdquo;, Atra&ccedil;&atilde;o (2009)<br />
Com:<strong> Padre Antonio Maria</strong>
',
'letra' => '<p>Sofre cora&ccedil;&atilde;o que chega o z&oacute;i mareja<br />
Que peleja de miss&atilde;o<br />
Sobre a estola desse homem que clareia<br />
Nos caminhos a vis&atilde;o</p>
<p>A pedra fundamental da nossa Igreja<br />
O sangue, o vinho, a carne e o p&atilde;o<br />
Pelas m&atilde;os de quem trabalha nessa mesa<br />
A transubstancia&ccedil;&atilde;o</p>
<p>E eu tenho certeza que n&atilde;o h&aacute; riqueza<br />
Maior que o amor que h&aacute; em toda missa, em cada clamor<br />
Que esse homem santo leva a Deus um canto<br />
Que transforma o cora&ccedil;&atilde;o</p>
<p>Quem busca a esperan&ccedil;a no olhar de uma crian&ccedil;a<br />
V&ecirc; que &eacute; importante para um pa&iacute;s<br />
Uma Igreja Santa e na comunidade onde mora um Padre<br />
O povo vive mais feliz</p>
<p>&Agrave;s vezes cedo o desejo bate &agrave; porta<br />
Vai seguir a voca&ccedil;&atilde;o<br />
A saudade em seu peito &eacute; contratempo<br />
Deus segura em sua m&atilde;o</p>
<p>Como um pai que d&aacute; a vida por seus filhos<br />
O Padre doa o seu viver<br />
Farol que indica o rumo no mundo perdido<br />
Quem abre os olhos pode ver</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o e arranjo: Janio Santone<br />
Viol&otilde;es: Orlando Baron<br />
Acordeom: Marinho do Acordeom<br />
Percuss&atilde;o: Edmilson Negr&atilde;o</p>',
'faixa_mp3' => '2009-18.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'190',
'faixa_titulo' => 'Natureza, Espelho de Deus',
'compositor' => '(Paulo Deb&eacute;tio / Paulinho Rezende)',
'dolp' => 'Do CD Paulo Deb&eacute;tio &ldquo;Pelas ruas do Brasil&rdquo;, Independente (2009)',
'letra' => '<p>Eu sou a &aacute;gua dos rios nas veias da terra<br />
A dar de beber &agrave;s sedentas sementes<br />
Eu sou a nascente, o cerrado e a serra</p>
<p>Eu sou o grito de dor da madeira ferida<br />
A relva, a selva, a seiva da vida<br />
Eu sou onde tudo come&ccedil;a e se encerra</p>
<p>Eu sou a voz do planeta que o homem embarga<br />
O doce das frutas e a erva que amarga<br />
As &aacute;guas revoltas s&atilde;o os prantos meus</p>
<p>Quem envenena meus mares, me queima e desmata<br />
Me sangra sem pena, aos poucos me mata<br />
N&atilde;o v&ecirc; que eu sou o espelho de Deus</p>
<p>Eu sou a natureza, indefesa, n&atilde;o me trate assim<br />
Eu sou a &aacute;guia, a baleia e o angelim<br />
Somos irm&atilde;os na terra<br />
Pedra, bicho, planta, gente enfim<br />
Pra que essa vida viva, cuida bem de mim</p>
<p>Eu sou o sol das manh&atilde;s sobre minhas campinas<br />
O frio das neves, as claras colinas<br />
Os p&aacute;ssaros livres, a sombra que resta</p>
<p>Eu sou o bicho do mato, a flor pantaneira<br />
Eu sou a savana, a serpente, a palmeira<br />
O cheiro do verde que vem das florestas</p>
<p>Sou o cavaleiro do mundo e sou a boiada<br />
Eu sou o estradeiro e o p&oacute; da estrada<br />
Sou cren&ccedil;a nos olhos dos homens ateus</p>
<p>Quem me devasta, me fere, me ca&ccedil;a, me extingue<br />
Me arranca as ra&iacute;zes, n&atilde;o deixe que eu vingue<br />
N&atilde;o pode se ver no espelho de Deus</p>',
'creditos' => '<p>Arranjo, acordeom, bateria, baixo e teclado: Jos&eacute; Am&eacute;rico Bastos<br />
Viol&atilde;o e guitarra: Israel Dantas<br />
</p>',
'faixa_mp3' => '2009-20.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'189',
'faixa_titulo' => 'Rabo de Saia',
'compositor' => '(Durval Vieira / Fuba de Tapero&aacute;)',
'dolp' => 'Do CD Fuba de Tapero&aacute; &ldquo;Forr&oacute; do bom&rdquo;, Independente (2009)<br />
Com:<strong> Fuba de Tapero&aacute;</strong>
',
'letra' => '<p>Hoje de noite o bicho pega, o couro come<br />
Hoje de noite o bicho pega, o couro come<br />
Pode chegar que n&atilde;o tem nada proibido<br />
O forr&oacute; t&aacute; entupido de mulher querendo h&ocirc;me<br />
Pode chegar que n&atilde;o tem nada proibido<br />
O forr&oacute; t&aacute; entupido de mulher querendo h&ocirc;me</p>
<p>Tem moreninha, tem loirinha forrozeira<br />
Balan&ccedil;ando a noite inteira do jeito que os h&ocirc;me quer<br />
Suor descendo e a poeira levantando<br />
S&oacute; se v&ecirc; h&ocirc;me fungando no cangote das mui&eacute;<br />
Suor descendo e a poeira levantando<br />
S&oacute; se v&ecirc; h&ocirc;me fungando no cangote das mui&eacute;</p>
<p>Chega pra c&aacute; que o forr&oacute; t&aacute; bom demais<br />
Pra namorar, pra farrear, fazer gandaia<br />
Eu vou em cima, eu vou embaixo, eu vou no fundo<br />
A coisa melhor do mundo &eacute; forr&oacute; e rabo de saia<br />
Eu vou em cima, eu vou embaixo, eu vou no fundo<br />
A coisa melhor do mundo &eacute; forr&oacute; e rabo de saia</p>',
'creditos' => '<p>Voz, pandeiro e tri&acirc;ngulo: Fuba de Tapero&aacute;<br />
Acordeom: Dominguinhos<br />
Viol&atilde;o e guitarra de 7 cordas: Sandro Haick<br />
Baixo: Thiago Alves<br />
Cavaquinho potiguara, bateria, zabumba e agog&ocirc;: Dido<br />
Vocais: La&iacute;s e Diana</p>',
'faixa_mp3' => '2009-19.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'202',
'faixa_titulo' => 'Eu S&oacute; Quero um Xod&oacute; (Ao Vivo)',
'compositor' => '(Dominguinhos / Anast&aacute;cia)',
'dolp' => 'Do CD Monobloco &ldquo;Monobloco 10&rdquo;, Universal Music (2010)<br />
Com:<strong> Monobloco</strong>
',
'letra' => '<p>Que falta eu sinto de um bem<br />
Que falta me faz um xod&oacute;<br />
Mas como eu n&atilde;o tenho ningu&eacute;m<br />
Eu levo a vida assim t&atilde;o s&oacute;</p>
<p>Eu s&oacute; quero um amor<br />
Que acabe o meu sofrer<br />
Um xod&oacute; pra mim<br />
Do meu jeito assim<br />
Que alegre o meu viver</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: MonoblocoSHOW<br />
Voz: Fabio Allman, Pedro Lu&iacute;s<br />
Percuss&atilde;o: Celso Alvim, F&aacute;bio Groove, Junior Teixeira, Andr&eacute; Schmidt, Gabriel Lopes e Pitito<br />
Agog&ocirc;: Renato Biguli<br />
Bateria: Sidon Silva, Caco Chagas, C. A. Ferrari<br />
Caixa: Fred Castilho, Marcos Feij&atilde;o, Gui Rodrigues<br />
Baixo: M&aacute;rio Moura, Igor Ara&uacute;jo e Mestre Maur&atilde;o<br />
Guitarra: Carlos Cacha&ccedil;a, Alexandre Momo, Pedro Quental e L&eacute;o Saad<br />
Cavaquinho: Alessandro Valente, Carlinhos Chaves</p>',
'faixa_mp3' => '2010-10.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'202',
'faixa_titulo' => 'Festa do Interior (Ao Vivo)',
'compositor' => '(Moraes Moreira / Abel Silva)',
'dolp' => 'Do CD Monobloco &ldquo;Monobloco 10&rdquo;, Universal Music (2010)<br />
Com:<strong> Monobloco</strong>
',
'letra' => '<p>Fagulhas, pontas de agulhas<br />
Brilham estrelas de S&atilde;o Jo&atilde;o<br />
Babados, xotes e xaxados<br />
Segura as pontas meu cora&ccedil;&atilde;o</p>
<p>Bombas na guerra-magia<br />
Ningu&eacute;m matava, ningu&eacute;m morria<br />
Nas trincheiras da alegria<br />
O que explodia era o amor<br />
Nas trincheiras da alegria<br />
O que explodia era o amor</p>
<p>Ardia naquela fogueira que me esquentava<br />
A vida inteira, eterna noite<br />
Sempre a primeira<br />
Festa do interior</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: MonoblocoSHOW<br />
Voz: Fabio Allman, Pedro Lu&iacute;s<br />
Percuss&atilde;o: Celso Alvim, F&aacute;bio Groove, Junior Teixeira, Andr&eacute; Schmidt, Gabriel Lopes e Pitito<br />
Agog&ocirc;: Renato Biguli<br />
Bateria: Sidon Silva, Caco Chagas, C. A. Ferrari<br />
Caixa: Fred Castilho, Marcos Feij&atilde;o, Gui Rodrigues<br />
Baixo: M&aacute;rio Moura, Igor Ara&uacute;jo e Mestre Maur&atilde;o<br />
Guitarra: Carlos Cacha&ccedil;a, Alexandre Momo, Pedro Quental e L&eacute;o Saad<br />
Cavaquinho: Alessandro Valente, Carlinhos Chaves<br />
</p>',
'faixa_mp3' => '2010-11.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'194',
'faixa_titulo' => 'G&iacute;rias do Norte',
'compositor' => '(Jacinto Silva / Onildo Almeida)',
'dolp' => 'Do CD &ldquo;No cora&ccedil;&atilde;o da gente &ndash; Tributo a Jacinto Silva&rdquo;, Independente (2010)',
'letra' => '<p>O Z&eacute; do Brejo quando se casariou<br />
Ele me convidariou<br />
Pra quadrilha eu marcari&aacute;<br />
Marcariei uma quadrilha ritmada<br />
Fui at&eacute; de madrugada<br />
Todo mundo com seu pari&aacute;</p>
<p>Alavanti&uacute;, cham&atilde; damanarrari&ecirc;<br />
Cantei coco pra valer<br />
E todo mundo com seu pari&aacute;</p>
<p>Brincariei na festa de casamento<br />
Da filha de Z&eacute; do Bento<br />
Na fazenda Caiucari&aacute;<br />
O Z&eacute; do Brejo, noivo muito animado<br />
Logo depois de casado<br />
Me pediu para cantari&aacute;</p>
<p>Me perguntaram por que &eacute; que eu canto assim<br />
Eu ent&atilde;o lhe respondi<br />
&Eacute; porque a minha l&iacute;ngua n&atilde;o dari&aacute;<br />
Esse neg&oacute;cio de dizer<br />
Alavant&uacute;, cham&atilde; damanarrari&ecirc;<br />
Eu posso me atrapalhari&aacute;</p>',
'creditos' => '<p>Arranjo e acordeom: Cezzinha Thomaz<br />
Zabumba: Durval<br />
Baixo: Ney Concei&ccedil;&atilde;o<br />
Guitarra: Israel<br />
</p>',
'faixa_mp3' => '2010-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'195',
'faixa_titulo' => 'Meu Sublime Torr&atilde;o',
'compositor' => '(Genival Macedo)',
'dolp' => 'Do CD &ldquo;Tributo a Genival Macedo&rdquo;, Independente (2010)<br />
Com:<strong> Spok Frevo Orquestra</strong>
',
'letra' => '<p>Num recanto bonito do Brasil<br />
Sorri a minha terra amada<br />
Onde o azul do c&eacute;u<br />
&Eacute; mais cor de anil<br />
Onde o sol t&atilde;o quente<br />
Parece mais sutil</p>
<p>L&aacute;, eu nasci e me criei<br />
Fiz can&ccedil;&otilde;es e amei<br />
Sempre tive inspira&ccedil;&atilde;o</p>
<p>L&aacute;<br />
No Nordeste imenso<br />
Tem um fulgor intenso<br />
Meu sublime torr&atilde;o</p>
<p>A minha terra<br />
Que s&oacute; encerra<br />
Belezas mil<br />
Pode ser chamada<br />
A namorada<br />
Do meu Brasil</p>
<p>Minha terra tem<br />
O cantar dos passarinhos<br />
Na lagoa, os gansinhos<br />
Com seu nado devagar<br />
As morenas t&atilde;o gentis<br />
Ostentando seus perfis<br />
Numa noite de luar</p>
<p>N&atilde;o tem a fama da baiana<br />
Mas a paraibana<br />
Sabe amar, tem sedu&ccedil;&atilde;o<br />
Para&iacute;ba hospitaleira<br />
Morena brasileira<br />
Do meu cora&ccedil;&atilde;o</p>',
'creditos' => '<p>Arranjo de base e piano: George Arag&atilde;o<br />
Arranjo de metais: Cl&oacute;vis Pereira e Spok Frevo Orquestra<br />
Viol&atilde;o e baixo: Cac&aacute; Barreto<br />
Bateria: Hito Pereira<br />
</p>',
'faixa_mp3' => '2010-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'197',
'faixa_titulo' => 'O Chineleiro (Ao Vivo)',
'compositor' => '(Jo&atilde;o Silva / J.B. de Aquino)',
'dolp' => 'Do CD Cristina Amaral &ldquo;A vida &eacute; um circo&rdquo;, Independente (2010)<br />
Com:<strong> Cristina Amaral</strong>
',
'letra' => '<p>A onda agora &eacute;<br />
Forr&oacute; pra aqui, forr&oacute; pra l&aacute;<br />
Pra todo lugar<br />
Se as moreninhas querem dan&ccedil;ar forr&oacute;<br />
Ent&atilde;o vamos vadiar</p>
<p>De madrugada<br />
Quando a barra tiver vindo<br />
O forr&oacute; tiver tinindo, fazendo cair<br />
A gente aqui pra mostrar que &eacute; forrozeiro<br />
Vai parar o sanfoneiro<br />
Pra quem t&aacute; l&aacute; fora ouvir</p>
<p>S&oacute; o chiado do chinelo chinelando<br />
Chineleiro no chinelo<br />
S&oacute; no ch&atilde;o a chinelar<br />
Chineleiro<br />
Olha o chinelo, cora&ccedil;&atilde;o<br />
No sal&atilde;o o chineleiro com o fole a folemar</p>',
'creditos' => '<p>Arranjo e guitarra: Breno Lira<br />
Baixo: Jefferson Cupertino<br />
Bateria: Ricardo Fraga<br />
Sanfona: Julinho do Acordeom e Cezzinha Thomaz<br />
Percuss&atilde;o: Cl&aacute;udio Santana e Paulinho Busttorff<br />
Zabumba e caxixi: Carlos Amarelo<br />
Vocais: Lyzia Rocha, Chirley Ramalho e Daniella Oliveira<br />
</p>',
'faixa_mp3' => '2010-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'196',
'faixa_titulo' => 'Espumas ao Vento (Ao Vivo)',
'compositor' => '(Accioly Neto)',
'dolp' => 'Do DVD Cristina Amaral &ldquo;A vida &eacute; um circo&rdquo;, Independente (2010)<br />
Com:<strong> Cristina Amaral</strong>',
'letra' => '<p>Sei que a&iacute; dentro ainda mora um pedacinho de mim<br />
Um grande amor n&atilde;o se acaba assim<br />
Feito espumas ao vento<br />
N&atilde;o &eacute; coisa de momento, raiva passageira<br />
Mania que d&aacute; e passa feito brincadeira<br />
O amor deixa marcas que n&atilde;o d&aacute; pra apagar</p>
<p>Sei que errei e t&ocirc; aqui pra te pedir perd&atilde;o<br />
Cabe&ccedil;a doida, cora&ccedil;&atilde;o na m&atilde;o<br />
Desejo pegando fogo<br />
E sem saber direito a hora e o que fazer<br />
Eu n&atilde;o encontro uma palavra para te dizer<br />
Ah, se eu fosse voc&ecirc; eu voltava pra mim de novo</p>
<p>E de uma coisa fique certa, amor<br />
A porta vai estar sempre aberta, amor<br />
O meu olhar vai dar uma festa, amor<br />
Na hora que voc&ecirc; chegar</p>',
'creditos' => '<p>Arranjo e guitarra: Breno Lira<br />
Baixo: Jefferson Cupertino<br />
Bateria: Ricardo Fraga<br />
Sanfona: Cezzinha Thomaz<br />
Percuss&atilde;o: Cl&aacute;udio Santana e Paulinho Busttorff<br />
Zabumba e caxixi: Carlos Amarelo<br />
</p>',
'faixa_mp3' => '2010-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'198',
'faixa_titulo' => 'Estrada Longa',
'compositor' => '(Xico Bizerra / Br&aacute;ulio Medeiros)',
'dolp' => 'Do CD Xico Bizerra &ldquo;Candeeiros e neons&rdquo;, Independente (2010)<br />
Com:<strong> Cezinha</strong>
',
'letra' => '<p>Se a estrada &eacute; longa eu parto mais cedo<br />
Se n&atilde;o tem clar&atilde;o, desacendo o medo<br />
A solid&atilde;o nunca foi meu brinquedo<br />
Eu fa&ccedil;o tudo pelo nosso amor</p>
<p>Por sobre as pedras eu apresso o passo<br />
Bebo da vontade de ter seu abra&ccedil;o<br />
Meu peito sorrindo bate sem compasso<br />
Fazendo festa para o nosso amor</p>
<p>Se o mundo inteiro<br />
No meu ouvido vier cochichar<br />
Me dizendo que eu n&atilde;o devo ir<br />
Eu n&atilde;o ligo e digo &ldquo;t&ocirc; indo pra l&aacute;&rdquo;</p>
<p>Pra te encontrar<br />
Coisa mais dengosa, coisa mais bonita<br />
Bordo em minha alma dois la&ccedil;os de fita<br />
Pra enfeitar o brilho do teu olhar</p>',
'creditos' => '<p>Arranjo, acordeom e voz: Cezzinha Thomaz<br />
Baixo: Toninho Tavares<br />
Zabumba, tri&acirc;ngulo e agog&ocirc;: Quartinha<br />
Viol&atilde;o: Renato Bandeira<br />
Efeitos percussivos: Vitamina<br />
</p>',
'faixa_mp3' => '2010-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'199',
'faixa_titulo' => 'Esque&ccedil;a (Forget him) (Ao Vivo)',
'compositor' => '(M. Anthony / vers&atilde;o: Roberto Corte Real)',
'dolp' => 'Do CD Roberto Carlos &ldquo;Emo&ccedil;&otilde;es sertanejas&rdquo;, SonyBMG (2010)',
'letra' => '<p>Esque&ccedil;a<br />
Se ele n&atilde;o te ama<br />
Esque&ccedil;a<br />
Se ele n&atilde;o te quer<br />
N&atilde;o chore mais, n&atilde;o sofra assim<br />
Porque posso te dar amor sem fim</p>
<p>Ele n&atilde;o pensa em querer-te<br />
Te faz sofrer e at&eacute; chorar<br />
N&atilde;o chore mais<br />
Vem pra mim, vem<br />
N&atilde;o sofra, n&atilde;o pense<br />
N&atilde;o chore mais meu bem</p>',
'creditos' => '<p>Arranjo e reg&ecirc;ncia: Eduardo Lages<br />
Bateria: Albino Infantozzi<br />
Baixo: Pedro Ivo<br />
Teclados: Jota Resende<br />
Acordeom: Cezzinha Thomaz<br />
Viol&otilde;es: Paulinho Ferreira e Elias Almeida<br />
Percuss&atilde;o: Luiz Rabello<br />
Violinos: Alejandro Ramirez (spalla), Dorin Tudor&aacute;s, Alex Braga e Ot&aacute;vio Nicolai<br />
Violas: Alexandre de Le&oacute;n e Erson de Biaggi<br />
Cellos: Gustavo Lessa e Br&aacute;ulio Lima<br />
Vocais: Ringo, Angela e Maria Diniz<br />
</p>',
'faixa_mp3' => '2010-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'199',
'faixa_titulo' => 'Eu Quero Apenas (Ao Vivo)',
'compositor' => '(Roberto Carlos / Erasmo Carlos)',
'dolp' => 'Do CD Roberto Carlos &ldquo;Emo&ccedil;&otilde;es sertanejas&rdquo;, SonyBMG (2010)<br />
Com:<strong> Zez&eacute; di Camargo e Luciano, Victor &amp; Leo, S&eacute;rgio Reis, Roberta Miranda, Rio Negro &amp; Solim&otilde;es, Paula Fernandes, Nalva Aguiar, Milion&aacute;rio &amp; Jos&eacute; Rico, Leonardo, Gian &amp; Giovani, Daniel, C&eacute;sar Menotti &amp; Fabiano, Bruno &amp; Marrone e Roberto Carlos</strong>
',
'letra' => '<p>Eu quero apenas olhar os campos<br />
Eu quero apenas cantar meu canto<br />
Eu s&oacute; n&atilde;o quero cantar sozinho<br />
Eu quero um coro de passarinho<br />
Quero levar o meu canto amigo<br />
A qualquer amigo que precisar</p>
<p>Eu quero ter um milh&atilde;o de amigos<br />
E bem mais forte poder cantar<br />
Eu quero ter um milh&atilde;o de amigos<br />
E bem mais forte poder cantar</p>
<p>Eu quero apenas um vento forte<br />
Levar meu barco no rumo norte<br />
E no caminho quero pescar<br />
Quero dividir quando l&aacute; chegar<br />
Quero levar o meu canto amigo<br />
A qualquer amigo que precisar</p>
<p>Eu quero crer na paz do futuro<br />
Eu quero ter um quintal sem muro<br />
Quero meu filho pisando firme<br />
Cantando alto, sorrindo livre<br />
Quero levar o meu canto amigo<br />
A qualquer amigo que precisar</p>
<p>Eu quero amor decidindo a vida<br />
Sentir a for&ccedil;a da m&atilde;o amiga<br />
O meu irm&atilde;o com sorriso aberto<br />
Se ele chorar, quero estar por perto<br />
Quero levar o meu canto amigo<br />
A qualquer amigo que precisar</p>
<p>Venha comigo olhar os campos<br />
Cante comigo tamb&eacute;m meu canto<br />
Eu s&oacute; n&atilde;o quero cantar sozinho<br />
Eu quero um coro de passarinhos<br />
Quero levar o meu canto amigo<br />
A qualquer amigo que precisar</p>',
'creditos' => '<p>Arranjo e reg&ecirc;ncia: Eduardo Lages<br />
Bateria: Norival D&rsquo;Angelo<br />
Baixo: Darcio Ract<br />
Teclado: Tutuca<br />
Viol&otilde;es: Paulinho Ferreira e Elias Almeida<br />
Percuss&atilde;o: Anderson Marquez (Ded&eacute;)<br />
Trompetes: Nahor Oliveira e Jo&atilde;o Lenhari<br />
Trombone: Jorge Berto<br />
Sax: Ubaldo Versolato<br />
</p>',
'faixa_mp3' => '2010-7.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'200',
'faixa_titulo' => 'Rela-Rela no Chinelado',
'compositor' => '(Bastinho Calixto / Ana Paula)',
'dolp' => 'Do CD Terezinha do Acordeom &ldquo;Seis ponto zero&rdquo;, Independente (2010)<br />
Com:<strong> Terezinha do Acordeom</strong>
',
'letra' => '<p>No meu forr&oacute; s&oacute; entra quem souber dan&ccedil;ar<br />
N&atilde;o dou moleza, o cabra tem que rebolar<br />
Um sanfoneiro com o dedo bem amolado<br />
Puxando o fole<br />
&Eacute; proibido cochilar</p>
<p>N&atilde;o tem cachimbo e nem pimenta no sal&atilde;o<br />
N&atilde;o tem valente, a noite inteira &eacute; s&oacute; forr&oacute;<br />
J&aacute; proibi dan&ccedil;ar mulher com mulher<br />
Rela-rela no chinelado a noite inteira quem quiser</p>
<p>Vem c&aacute;, vem ver, vem dan&ccedil;ar<br />
Nesse forr&oacute; passei manteiga<br />
Chegue e vamos chinelar<br />
S&atilde;o dois pra l&aacute;, dois pra c&aacute;<br />
Aperte minha cintura<br />
Vamos juntos vadiar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo e acordeom: Cezzinha Thomaz<br />
Baixo: Toninho Tavares<br />
Guitarra: Apollo Natureza<br />
Bateria: Sandro Pink<br />
Zabumba, tri&acirc;ngulo e agog&ocirc;: Quartinha<br />
Vocais: B&aacute;rbara Aires e Viviane Vilanova<br />
</p>
',
'faixa_mp3' => '2010-8.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'201',
'faixa_titulo' => 'Flor do Campo',
'compositor' => '(Z&eacute; do Norte / M. Alexandre)',
'dolp' => 'Do CD Socorro Lira &ldquo;Lua bonita&rdquo;, Independente (2010)<br />
Com:<strong> Socorro Lira</strong>
',
'letra' => '<p>Adeus flor do campo<br />
Minha a&ccedil;ucena, minha bonina<br />
Dama da noite que me fascina<br />
Orqu&iacute;dea branca, rosa menina</p>
<p>At&eacute; um dia companheiro de jornada<br />
Eu vou me embora, vou seguir o meu destino<br />
Pois minha vida sempre foi um labirinto<br />
Correndo o mundo desde o tempo de menino<br />
Pois minha vida sempre foi um labirinto<br />
Correndo o mundo desde o tempo de menino</p>
<p>Se algum dia a flor do campo perguntar<br />
De onde vim, com quem moro, aonde vou<br />
Diga pra ela que procuro um novo mundo<br />
Que tenha paz, carinho e amor<br />
Diga pra ela que procuro um novo mundo<br />
Que tenha paz, carinho e amor</p>',
'creditos' => '<p>Viol&atilde;o de 6, viola e baixol&atilde;o: J&uacute;lio Caldas<br />
Sanfona: Ol&iacute;vio Filho<br />
Zabumba, tri&acirc;ngulo e agog&ocirc;: C&aacute;ssia Maria<br />
Vocais: Rosa Macedo, J&uacute;lio Caldas e Socorro Lira<br />
</p>',
'faixa_mp3' => '2010-9.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'203',
'faixa_titulo' => 'Onde Deus Possa me Ouvir',
'compositor' => '(Vander Lee)',
'dolp' => 'Do CD Forr&oacute; Pimenta do Reino &ldquo;Me deixa ser seu namorado&rdquo;, <br/>Independente (2010) &ndash; lan&ccedil;ada na internet.<br/>Em 2014 saiu o CD.<br/>
Com:<strong> Pimenta do Reino</strong>',
'letra' => '<p>Sabe o que eu queria agora, meu bem?<br />
Sair, chegar l&aacute; fora e encontrar algu&eacute;m<br />
Que n&atilde;o me dissesse nada<br />
N&atilde;o me perguntasse nada tamb&eacute;m</p>
<p>Que me oferecesse um colo, um ombro<br />
Onde eu desaguasse todo desengano<br />
Mas a vida anda louca<br />
As pessoas andam tristes<br />
Meus amigos s&atilde;o amigos de ningu&eacute;m</p>
<p>Sabe o que eu mais quero agora, meu amor?<br />
Morar no interior do meu interior<br />
Pra entender por que se agridem<br />
Se empurram pro abismo<br />
Se debatem, se combatem sem saber</p>
<p>Meu amor<br />
Deixa eu chorar at&eacute; cansar<br />
Me leve pra qualquer lugar<br />
Aonde Deus possa me ouvir</p>
<p>A minha dor<br />
Eu n&atilde;o consigo compreender<br />
Eu quero algo pra beber<br />
Me deixe aqui, pode sair<br />
Adeus</p>',
'creditos' => '<p>Arranjo e acordeom: Erom Lima<br />
Voz e viol&atilde;o: Daniel Guerra<br />
Zabumba: Junior Domingues<br />
Violino: Rodrigo Ara&uacute;jo<br />
Flauta: Pejota<br />
Percuss&atilde;o: Guilherme Rocha<br />
Baixo: Mozart<br />
</p>',
'faixa_mp3' => '2010-12.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'208',
'faixa_titulo' => 'Bloco da Solid&atilde;o',
'compositor' => '(Evaldo Gouveia / Jair Amorim)',
'dolp' => 'Do CD &ldquo;O trovador &ndash; Uma homenagem a Evaldo Gouveia&rdquo;, Independente/Prefeitura de Fortaleza (2011)
',
'letra' => '<p>Ang&uacute;stia, solid&atilde;o<br />
Um triste adeus em cada m&atilde;o<br />
L&aacute; vai, meu bloco vai<br />
S&oacute; desse jeito &eacute; que ele sai<br />
Na frente sigo eu<br />
Levo o estandarte de um amor<br />
O Amor que se perdeu no carnaval</p>
<p>L&aacute; vai meu bloco<br />
E l&aacute; vou eu tamb&eacute;m<br />
Mais uma vez sem ter ningu&eacute;m<br />
No s&aacute;bado e domingo<br />
Segunda e ter&ccedil;a-feira<br />
E quarta-feira vem<br />
O ano inteiro &eacute; sempre assim<br />
Por isso quando eu passar<br />
Batam palmas para mim</p>
<p>Aplaudam quem sorrir<br />
Trazendo l&aacute;grimas no olhar<br />
Merece uma homenagem<br />
Quem tem for&ccedil;as pra cantar<br />
T&atilde;o grande &eacute; minha dor<br />
Pede passagem quando sai<br />
Comigo s&oacute;<br />
L&aacute; vai meu bloco, vai</p>',
'creditos' => '<p>Arranjo e piano: Fernando Merlino<br />
Viol&atilde;o: Marcos Arcanjo<br />
Bateria: Pantico Rocha<br />
Pandeiro: Igor Ribeiro<br />
Baixo: R&ocirc;mulo Gomes<br />
Violoncelo: Ocelo Mendon&ccedil;a<br />
</p>',
'faixa_mp3' => '2011-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'204',
'faixa_titulo' => 'Imagina&ccedil;&atilde;o (Ao Vivo)',
'compositor' => '(Sandra de S&aacute;)',
'dolp' => 'Do CD Sandra de S&aacute; &ldquo;Africanatividade &ndash; 30 anos &ndash; Ao vivo&rdquo;, Universal Music (2011)<br />
Com:<strong> Sandra de S&aacute;</strong>
',
'letra' => '<p>Hoje eu queria uma noite sem problemas<br />
Um amorzinho louco, sem esquemas<br />
Coisas obscenas ao p&eacute; do ouvido, rolando tudo</p>
<p>A minha vida dentro do teu corpo<br />
O meu tes&atilde;o impresso no seu rosto<br />
Nas minhas asas, alma e imagina&ccedil;&atilde;o</p>
<p>N&atilde;o pare, n&atilde;o pense, n&atilde;o corra, n&atilde;o sofra<br />
Engula meu choro, beba meu suor<br />
Deixa vibrar o sil&ecirc;ncio da boca que ama, que beija</p>',
'creditos' => '<p>Arranjo: Sandra de S&aacute; e Banda<br />
Vocais: Gil Miranda e Gilce de Paula<br />
Percuss&atilde;o: Ricardo Brazil e Bebeto Sorriso<br />
Bateria: Fl&aacute;vio Santos<br />
Baixo: Dudu de Souza<br />
Guitarra: Ewerton Freitas<br />
Teclados: Asbel Cezar<br />
</p>',
'faixa_mp3' => '2011-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'205',
'faixa_titulo' => 'De Volta Pro Aconchego (Ao Vivo)',
'compositor' => '(Dominguinhos / Nando Cordel)',
'dolp' => 'Do CD Dominguinhos &ldquo;Iluminado&rdquo;, Biscoito Fino BF (2011)<br />
Com:<strong> Dominguinhos</strong>
',
'letra' => '<p>Estou de volta pro meu aconchego<br />
Trazendo na mala bastante saudade<br />
Querendo um sorriso sincero, um abra&ccedil;o<br />
Para aliviar meu cansa&ccedil;o<br />
E toda essa minha vontade</p>
<p>Que bom poder t&aacute; contigo de novo<br />
Ro&ccedil;ando seu corpo e beijando voc&ecirc;<br />
Pra mim tu &eacute;s a estrela mais linda<br />
Seus olhos me prendem, fascinam<br />
A paz que eu gosto de ter</p>
<p>&Eacute; duro ficar sem voc&ecirc; vez em quando<br />
Parece que falta um peda&ccedil;o de mim<br />
Me alegro na hora de regressar<br />
Parece que vou mergulhar<br />
Na felicidade sem fim</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Z&eacute; Am&eacute;rico Bastos, Bia e Cris Brizzi e Moema Eifler<br />
Acordeom: Dominguinhos<br />
Bateria: L&uacute;cio Primo<br />
Contrabaixo: Ney Concei&ccedil;&atilde;o<br />
Percuss&atilde;o: Papete<br />
Bandolim: Sandro Haick</p>',
'faixa_mp3' => '2011-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'209',
'faixa_titulo' => 'O Melhor do Amor (Ao Vivo)',
'compositor' => '(Loalwa Braz)',
'dolp' => 'Do DVD Loalwa Braz &ldquo;Ensolarado &ndash; Ao vivo&rdquo;, Independente (2011)<br />
Com:<strong> Loalwa Braz</strong>
',
'letra' => '<p>Eu sei que o melhor do amor t&aacute; guardado comigo<br />
E sei que pra minha paz s&oacute; faltava voc&ecirc; chegar<br />
Ser&aacute; que eu vou ajudar o meu lindo destino<br />
Que mais uma vez deixou a gente se encontrar</p>
<p>Queria saber fazer a felicidade<br />
Cantar bem alto a realidade<br />
&Eacute; voc&ecirc; que eu tenho em meu cora&ccedil;&atilde;o</p>
<p>E acho meu bem querer, com sinceridade<br />
Que o meu prazer &eacute; no seu abra&ccedil;o<br />
E o seu prazer, minha emo&ccedil;&atilde;o</p>
<p>A vida &eacute; lhe querer<br />
O ato &eacute; lhe querer<br />
O fato &eacute; lhe querer, paix&atilde;o</p>
<p>Eu vivo pra lhe querer<br />
Eu respiro por lhe querer<br />
Eu canto pra lhe querer, &ocirc;</p>',
'creditos' => '<p>Arranjo: Loalwa Braz e Jacar&eacute;<br />
Teclados de base: Marcos Val&eacute;rio<br />
Teclados de efeito: N&eacute;lio J&uacute;nior<br />
Guitarra: Jerominho<br />
Bateria: Luciano Broa<br />
Baixo: Charles Bonfim<br />
</p>',
'faixa_mp3' => '2011-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'206',
'faixa_titulo' => 'Todo o Sentimento',
'compositor' => '(Crist&oacute;v&atilde;o Bastos / Chico Buarque)',
'dolp' => 'Do CD &ldquo;A vida da gente &ndash; Trilha da novela&rdquo;, Som Livre (2011)
',
'letra' => '<p>Preciso n&atilde;o dormir<br />
At&eacute; se consumar<br />
O tempo<br />
Da gente</p>
<p>Preciso conduzir<br />
Um tempo de te amar<br />
Te amando devagar<br />
E urgentemente</p>
<p>Pretendo descobrir<br />
No &uacute;ltimo momento<br />
Um tempo que refaz o que desfez<br />
Que recolhe todo o sentimento<br />
E bota no corpo uma outra vez</p>
<p>Prometo te querer<br />
At&eacute; o amor cair<br />
Doente<br />
Doente</p>
<p>Prefiro ent&atilde;o partir<br />
A tempo de poder<br />
A gente se desvencilhar da gente</p>
<p>Depois de te perder<br />
Te encontro, com certeza<br />
Talvez num tempo da delicadeza<br />
Onde n&atilde;o diremos nada<br />
Nada aconteceu<br />
Apenas seguirei como encantado<br />
Ao lado teu</p>',
'creditos' => '<p><em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em><br />
</p>
',
'faixa_mp3' => '2011-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'207',
'faixa_titulo' => 'Tudo Bem',
'compositor' => '(Sergio de Meriti / W. Leme / Frank)',
'dolp' => 'Do CD Gerlane Lops &ldquo;Da branca&rdquo;, Independente (2011)<br />
Com:<strong> Gerlane Lops</strong>
',
'letra' => '<p>Tudo bem<br />
Se com voc&ecirc; t&aacute; tudo certo<br />
Tudo bem<br />
Se precisar estou por perto</p>
<p>Ainda bem<br />
Se com voc&ecirc; t&aacute; tudo certo<br />
Veja bem<br />
A tempestade j&aacute; passou<br />
E a vida nos ensina<br />
Que ainda &eacute; tempo pra recome&ccedil;ar<br />
E o que tiver que ser, ser&aacute;<br />
Ser&aacute; que a gente aprendeu, ser&aacute;?</p>
<p>Tomara<br />
Pois o que Deus uniu ningu&eacute;m separa<br />
A amizade &eacute; ouro, &eacute; joia rara<br />
Se a gente cultivar<br />
O tempo vai passar<br />
E sempre vai ficar tudo bem</p>
<p>Tudo bem que o bem prevalece<br />
&Eacute; melhor quando est&aacute; tudo bem<br />
Se uma coisa contigo acontece<br />
Acontece comigo tamb&eacute;m<br />
Me perdoe se acaso eu errar<br />
Estou pronta pra te perdoar<br />
Tudo bem</p>',
'creditos' => '<p>Viol&atilde;o: Ricardo Lima<br />
Cavaco: Siri do Cavaco<br />
Baixo: Br&aacute;ulio Ara&uacute;jo<br />
Pandeiro/mexerica/efeitos: Anderson Gomes<br />
Surdo/Ron/tantan/efeitos: Wilson Jr.<br />
Percuss&atilde;o: Renato Nogueira<br />
Bateria: Lucas Ara&uacute;jo<br />
</p>',
'faixa_mp3' => '2011-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'211',
'faixa_titulo' => 'Morena',
'compositor' => '(Gonzaguinha)',
'dolp' => 'Do CD Qinho &ldquo;O tempo soa&rdquo;, Independente (2012)<br />
Com:<strong> Qinho</strong>
',
'letra' => '<p>Pise no pil&atilde;o, morena<br />
Pile, moa, amasse bem a dor<br />
Bata no pil&atilde;o, morena<br />
Reiva d&ecirc;, machuque a dor</p>
<p>Freva no pil&atilde;o, morena<br />
Pile, moa, amasse bem a flor<br />
Zangue no pil&atilde;o, morena<br />
Reiva d&ecirc; que &eacute; mal de amor</p>
<p>Guarde com carinho<br />
O perfume, o espinho da a&ccedil;ucena<br />
Deixe que do povo<br />
Quem n&atilde;o saiba, tenha pena<br />
E n&atilde;o chore de alegria<br />
Se voc&ecirc; nem desconfia<br />
Pile, moa, amasse bem<br />
Reiva de que &eacute; mal de amor<br />
Mal de amor<br />
&Eacute; o amor...</p>',
'creditos' => '<p>Vocais e guitarra: Qinho<br />
Guitarra: Fabio Lima<br />
Teclado e acordeom: Ricardo Rito<br />
Baixo: Pedro Dantas<br />
Bateria: Thomas Harros<br />
Percuss&atilde;o: Alexandre Garniz&eacute;<br />
</p>',
'faixa_mp3' => '2012-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'212',
'faixa_titulo' => 'Xote da Saudade (Ao Vivo)',
'compositor' => '(Geraldinho Lins / Carlinhos Borges)',
'dolp' => 'Do CD Geraldinho Lins &ldquo;Do sert&atilde;o &agrave; beira-mar&rdquo;, Independente (2012)<br />
Com:<strong> Geraldinho Lins</strong>
',
'letra' => '<p>Eu j&aacute; sabia<br />
Que um dia ia sentir saudade sua<br />
Pedi arrego todo dia &agrave;quela lua<br />
Que me inspirava em teu olhar para cantar</p>
<p>O aconchego<br />
E o teu chamego agora s&oacute; era lembran&ccedil;a<br />
A paz n&atilde;o vinha, o jeito era entrar na dan&ccedil;a<br />
Queria te esquecer para nunca mais sofrer</p>
<p>Mas n&atilde;o &eacute; assim<br />
Ningu&eacute;m manda em cora&ccedil;&atilde;o apaixonado<br />
Eu t&ocirc; entregue<br />
T&ocirc; todo desmantelado<br />
Por causa do amor que voc&ecirc; me ensinou</p>
<p>E essa dor<br />
Eu consolo com um toque de sanfona<br />
Enquanto voc&ecirc; n&atilde;o vem<br />
E eu espero noite e dia<br />
Fazendo fantasia, recriando o nosso amor</p>
<p>E doeu sim<br />
Foi a saudade que bateu<br />
Tenha d&oacute; de mim<br />
E vem ficar mais eu</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Fred Morais e Silvano Pedroza<br />
Voz e viol&atilde;o: Geraldinho Lins<br />
Baixo: Saulo Alves<br />
Guitarra e vocal: Kiel Hernandes<br />
Bateria e vocal: Sandro Pik<br />
Teclados: Daniel Feliz<br />
Zabumba: Marquinhos de Casa Amarela<br />
Sanfona: Manoelzinho do Acordeom<br />
Percuss&atilde;o: Sandro Araras<br />
</p>',
'faixa_mp3' => '2012-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'223',
'faixa_titulo' => 'Forr&oacute; Sacolejado',
'compositor' => '(Amazan)',
'dolp' => 'Do CD Amazan &ldquo;S&oacute; alegria!&rdquo;, Independente (2012)<br />
Com:<strong> Amazan</strong>
',
'letra' => '<p>Esse forr&oacute; &eacute; sacudido e balan&ccedil;ado<br />
Pro nego ficar suado que nem tampa de chaleira<br />
Mas quente do que um bico de lamparina<br />
Do que fogo de menina, do que boca de caieira</p>
<p>Forr&oacute; com cheiro de canjica e milho assado<br />
Feito aceiro de ro&ccedil;ado do sert&atilde;o do Serid&oacute;<br />
Eu quero ver se o cabra me escutando<br />
N&atilde;o vai ficar se babando pra entrar nesse forr&oacute;<br />
Eu quero ver se o cabra me escutando<br />
N&atilde;o vai ficar se babando pra entrar nesse forr&oacute;</p>
<p>E tome dedo no teclado da sanfona<br />
E tome dedo nos bot&otilde;es da baixaria<br />
E tome fole se abrindo, se fechando<br />
Todo mundo balan&ccedil;ando at&eacute; amanhecer o dia</p>
<p>Esse forr&oacute; foi feito de encomenda<br />
Feito fuso de moenda, que nem tampa de panela<br />
Mais aprumado do que cabo de enxada<br />
Meio-fio de cal&ccedil;ada e soleira de janela</p>
<p>Ele &eacute; mais doce do que mel a&ccedil;ucarado<br />
Mas pode ficar salgado feito sal de Mossor&oacute;<br />
Eu quero ver se o cabra me escutando<br />
N&atilde;o vai ficar se babando pra entrar nesse forr&oacute;<br />
Eu quero ver se o cabra me escutando<br />
N&atilde;o vai ficar se babando pra entrar nesse forr&oacute;</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o e dire&ccedil;&atilde;o: Amazan<br />
Acordeom: Amazan e Walter Pipoca<br />
Guitarra e vocal: Claudio Coruja<br />
Bateria e zabumba: Fa&iacute;sca<br />
Baixo: Angelo Bass<br />
Percuss&atilde;o: Carlinhos Pelle e Fa&iacute;sca<br />
Pandeiro: Augusto<br />
</p>',
'faixa_mp3' => '2012-14.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'214',
'faixa_titulo' => 'Campina dos Tropeiros e dos Amores',
'compositor' => '(Del Feliz / Adail Mena / Xico Bizerra)',
'dolp' => 'Do CD Del Feliz &ldquo;Missa do Vaqueiro 2012 &ndash; Centen&aacute;rio de Luiz Gonzaga&rdquo;, Independente (2012)<br />
Com:<strong> Del Feliz</strong>
',
'letra' => '<p>Enfeitam-se de verde as tuas serras<br />
Banhadas com carinho pelo sol<br />
&Agrave; noite um oceano de estrelas<br />
Transforma a luz da lua num farol</p>
<p>As trilhas tem o rastro dos tropeiros<br />
Cl&atilde; boiadeiro que fundou este lugar<br />
Saga de gente aguerrida<br />
Her&oacute;is que marcaram a vida<br />
Terra t&atilde;o bonita assim n&atilde;o vai se encontrar</p>
<p>P&aacute;tria dos ari&uacute;s<br />
Ra&ccedil;a de valor<br />
Parque do Povo acolhedor<br />
O melhor S&atilde;o Jo&atilde;o<br />
Xote, marchinha e bai&atilde;o<br />
Um esplendor</p>
<p>O cora&ccedil;&atilde;o da Para&iacute;ba<br />
Tem a alma feminina<br />
Linda menina, can&ccedil;&atilde;o e poema<br />
Borborema, grande Campina</p>
<p>Campina, comunh&atilde;o paraibana<br />
Porteira que se abre pro sert&atilde;o<br />
Antiga Vila Nova da Rainha<br />
Aldeia no plat&ocirc; do chapad&atilde;o</p>
<p>Fundada foi por Teod&oacute;sio Ledo<br />
Homem sem medo, seu capit&atilde;o-mor<br />
Um exemplo de var&atilde;o<br />
E o ouro branco, o algod&atilde;o<br />
Fez esta cidade boa se tornar melhor</p>
<p>Parte o trem do forr&oacute;<br />
Sob um c&eacute;u azul anil<br />
Silibrina de Br&aacute;ulio e Biliu<br />
Umbigadas do Genival<br />
Elba Ramalho em flor, do teu amor</p>
<p>Pra S&atilde;o Jos&eacute; da Mata e galante<br />
Gente elegante vai dan&ccedil;ando o meu forr&oacute;<br />
At&eacute; que a luz do sol v&aacute; se escondendo<br />
Atr&aacute;s das &aacute;guas do Bodocong&oacute;</p>
<p>T&atilde;o belo memorial em homenagem<br />
&Agrave; grande Marin&ecirc;s que tanto amou<br />
A&ccedil;udes velho e novo<br />
Rel&iacute;quias do meu povo<br />
Muito al&eacute;m do sonho que Brederodes sonhou</p>',
'creditos' => '<p><em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em></p>
',
'faixa_mp3' => '2012-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'222',
'faixa_titulo' => 'No Meu P&eacute; de Serra',
'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
'dolp' => 'Do CD &ldquo;Gonzag&atilde;o100 anos&rdquo;, Lua Music (2012)
',
'letra' => '<p>L&aacute; no meu p&eacute; de serra<br />
Deixei ficar meu cora&ccedil;&atilde;o<br />
Ai, que saudades tenho<br />
Eu vou voltar pro meu sert&atilde;o</p>
<p>No meu ro&ccedil;ado trabalhava todo dia<br />
Mas no meu rancho eu tinha tudo que queria<br />
L&aacute; se dan&ccedil;ava quase toda quinta-feira<br />
Sanfona n&atilde;o faltava e tome xote a noite inteira</p>
<p>O xote &eacute; bom<br />
De se dan&ccedil;ar<br />
A gente gruda na cabocla sem soltar<br />
Um passo l&aacute;<br />
Um outro c&aacute;<br />
Enquanto o fole t&aacute; tocando<br />
T&aacute; gemendo<br />
T&aacute; chorando<br />
T&aacute; fungando<br />
Reclamando sem parar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Thiago Marques Luiz<br />
Arranjo: Rovilson Pascoal e Andr&eacute; Bedur&ecirc;<br />
Viol&atilde;o, guitarra, cavaquinho, programa&ccedil;&atilde;o e efeitos: Rovilson Pascoal<br />
Baixo e viol&atilde;o: Andr&eacute; Bedur&ecirc;<br />
Sanfona e teclados: Ricardo Prado<br />
Bateria: Gustavo Souza<br />
Percuss&atilde;o: Michelle Abu<br />
</p>',
'faixa_mp3' => '2012-13.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'210',
'faixa_titulo' => 'A Poeira e a Estrada',
'compositor' => '(Maciel Melo / Cl&aacute;udio Almeida)',
'dolp' => 'Do CD Maciel Melo &ldquo;Minha metade&rdquo;, Independente (2012)<br />
Com:<strong> Maciel Melo</strong>
',
'letra' => '<p>Amigo, olhe a poeira, olhe a estrada<br />
Olhe os garranchos<br />
Que arranham pensamentos<br />
Entre o cascalho<br />
V&aacute; separando os espinhos<br />
N&atilde;o esque&ccedil;a que os caminhos<br />
S&atilde;o dif&iacute;ceis pra danar</p>
<p>Nem todo atalho diminui uma dist&acirc;ncia<br />
Nem toda &acirc;nsia no final tem alegria<br />
Veja na flor que o espinho lhe vigia<br />
A noite adormece o dia<br />
E a lua vem lhe ninar</p>
<p>Devagarinho<br />
V&aacute; pelo cheiro das flores<br />
Siga os amores<br />
Nunca deixe pra depois<br />
Nem tudo &eacute; certo<br />
Como quatro &eacute; dois e dois<br />
Nem todo amor merece todo o cora&ccedil;&atilde;o</p>
<p>Se a poesia ainda n&atilde;o lhe trouxe o fermento<br />
E o sofrimento entre o amor, ganhou a vez<br />
Nem tudo &eacute; eterno quando a gente ama</p>
<p>Por isso, amigo, n&atilde;o se entregue agora<br />
Talvez um dia o mundo lhe pe&ccedil;a perd&atilde;o<br />
Por isso n&atilde;o se perca n&atilde;o<br />
Os amores v&atilde;o e a gente fica<br />
Por isso n&atilde;o se perca n&atilde;o<br />
Os amores v&atilde;o e a gente fica</p>',
'creditos' => '<p>Arranjo de sanfona e sanfona: Cezzinha Thomaz<br />
Arranjo de trompete e trompete: Fabinho Costa<br />
Vozes: Maciel e Elba<br />
Piano: Fabio Valois<br />
Baixo: Toninho Tavares<br />
Bateria: Hito Pereira<br />
Viol&otilde;es: Juninho<br />
Zabumba e tri&acirc;ngulo: Quartinha<br />
Vocal: Bruno Simpson, Cl&aacute;udia Beija e L&iacute;gia<br />
</p>',
'faixa_mp3' => '2012-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'215',
'faixa_titulo' => 'Can&aacute;rio Miudinho',
'compositor' => '(Bruno Lins / Tonzinho)',
'dolp' => 'Do CD Fim de Feira &ldquo;De todo jeito a gente apanha&rdquo;, Independente (2012)<br />
Com:<strong> Fim de Feira</strong>
',
'letra' => '<p>P&aacute;ssaro do c&eacute;u<br />
Deixa-me viver<br />
No teu sonho lindo e prateado<br />
P&aacute;ssaro do c&eacute;u<br />
Deixa-me viver<br />
No teu sonho lindo e prateado</p>
<p>Dai-me tua luz<br />
Faz com que os planetas<br />
Se transformem num clar&atilde;o<br />
Pra que as minhas m&atilde;os<br />
Possam afastar<br />
Ao longe a escurid&atilde;o</p>
<p>P&aacute;ssaro do amor<br />
Lan&ccedil;a a tua voz<br />
Contra as mis&eacute;rias desse mundo<br />
P&aacute;ssaro do amor<br />
Lan&ccedil;a a tua voz<br />
Contra as mis&eacute;rias desse mundo</p>
<p>Faz com que esse p&atilde;o<br />
Finalmente seja entregue a multid&atilde;o<br />
Livre pra sonhar<br />
Tuas asas s&atilde;o de quem quiser voar</p>
<p>Meu can&aacute;rio miudinho<br />
Do teu ninho vai brotar o amor<br />
O amor<br />
Meu can&aacute;rio miudinho<br />
Do teu ninho vai brotar o amor<br />
O amor</p>',
'creditos' => '<p>Arranjo de cordas: Rodrigo Samigo<br />
Vozes: Bruno Lins e Elba<br />
Violino: Carlos Santos<br />
Cello: Fabiano Menezes<br />
Guitarras, viola e banjo americano: Tonzinho<br />
Baixo: Jean Brow<br />
Bateria: M&aacute;rcio Silva<br />
Percuss&atilde;o e efeitos: Lucivan Max<br />
Acordeom: Ant&ocirc;nio Muniz<br />
</p>',
'faixa_mp3' => '2012-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'216',
'faixa_titulo' => 'Nem se Despediu de Mim',
'compositor' => '(Luiz Gonzaga / Jo&atilde;o Silva)',
'dolp' => 'Do CD Genival Lacerda &ldquo;No balan&ccedil;o do forr&oacute;&rdquo;, Independente (2012)<br />
Com:<strong> Genival Lacerda</strong>
',
'letra' => '<p>Nem se despediu de mim<br />
Nem se despediu de mim<br />
J&aacute; chegou contando as horas<br />
Bebeu &aacute;gua e foi-se embora<br />
Nem se despediu de mim<br />
J&aacute; chegou contando as horas<br />
Bebeu &aacute;gua e foi-se embora<br />
Nem se despediu de mim</p>
<p>Te assossega, cora&ccedil;&atilde;o<br />
Que esse amor renascer&aacute;<br />
Vai-se um dia, mas vem outro<br />
A&iacute; ent&atilde;o, quando ele voltar</p>
<p>Quebre o pote e a quartinha<br />
Bote fogo na camarinha<br />
Que ele vai se declarar<br />
Quebre o pote e a quartinha<br />
Bote fogo na camarinha<br />
Que ele vai se declarar</p>',
'creditos' => '<p>Bateria: Hito<br />
Zabumba: Z&eacute; Ronaldo<br />
Baixo: Andr&eacute;<br />
Guitarra: Kiko<br />
Viol&atilde;o 7 cordas: Jorge Simas<br />
Acordeom: Pernalonga<br />
Vocal: Robson e Janete<br />
</p>',
'faixa_mp3' => '2012-7.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'224',
'faixa_titulo' => 'O Resto Pode Esperar',
'compositor' => '(Rog&eacute;rio Rangel)',
'dolp' => 'Do CD Rog&eacute;rio Rangel &ldquo;Respeito a Janu&aacute;rio&rdquo;, Independente (2012)<br />
Com:<strong> Rog&eacute;rio Rangel</strong>
',
'letra' => '<p>Meu amor, quando eu te vejo<br />
&Eacute; o c&eacute;u aqui no ch&atilde;o<br />
&Eacute; a chuva miudinha<br />
Alegrando a planta&ccedil;&atilde;o</p>
<p>Meu amor, quando eu te vejo<br />
Fico matutando assim<br />
Se Deus te fez desse jeito<br />
Tava pensando em mim<br />
Se Deus te fez desse jeito<br />
Tava pensando em mim</p>
<p>Se tu me olhas desse jeito t&atilde;o dengoso<br />
Meu corpo t&atilde;o fogoso<br />
Falta pouco pra incendiar<br />
A&iacute; &eacute; s&oacute; querer<br />
A&iacute; &eacute; s&oacute; deixar<br />
Que a natureza faz a sua parte</p>
<p>S&oacute; tu quem sabes o meu ponto de fervura<br />
Me levar a loucura<br />
Meu segredo e meu paladar<br />
O que eu pe&ccedil;o &agrave; vida<br />
A vida t&aacute; me dando<br />
O resto pode esperar</p>',
'creditos' => '<p>Arranjo: Rog&eacute;rio Rangel, F&aacute;bio Valois e Genaro<br />
Sanfonas: Beto Hortis e Genaro<br />
Bateria: Rog&eacute;rio Adriano, Hito Pereira e Luca Ara&uacute;jo<br />
Zabumba e percuss&atilde;o: Quartinha, Lucas Ara&uacute;jo e Mavi Rodrigues<br />
Baixo: Nando Barreto, Toninho Tavares e Wellington Santana<br />
Teclados: F&aacute;bio Valois<br />
Vocais: Rog&eacute;rio Rangel, Gerl&uacute;cia Barros, J&eacute;ssica Dias, Elisa Mel, Sara Cavalcanti, N&aacute;dia Maia, Angela Luz e Nena Queiroga<br />
</p>',
'faixa_mp3' => '2012-15.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'226',
'faixa_titulo' => 'O sertão de Luiz (O ser-tão de luz)',
'compositor' => '(Tony Maciel)',
'dolp' => 'Gravada originalmente para o projeto "Nordestino sim senhor" da TV Asa Branca (Globo/Caruaru/PE)<br/>
por ocasião do centenário de Luiz Gonzaga. Lançada no YouTube em <br/>
2012 e incluída no CD promocional do cantor/compositor Tony Maciel em 2014.

Com:<strong> Daniela Mercury, Nando Cordel e Santanna o Cantador</strong>
',
'letra' => '<p><em>E o poeta Sebasti&atilde;o Dias disse:<br />
E o rei deixou o trono, medalha e trof&eacute;u<br />
Pendurou o gib&atilde;o, tirou o chap&eacute;u<br />
Deus o levou do p&eacute;-de-serra<br />
Tem rei no c&eacute;u e na terra<br />
Bai&atilde;o na terra e no c&eacute;u</em></p>
<p>A voz que falava do povo<br />
Ritmada pelo bai&atilde;o<br />
Com sua for&ccedil;a e sua luta<br />
Fez florescer o Nordeste sem chuva</p>
<p>No sert&atilde;o tu &eacute;s o Rei do Bai&atilde;o<br />
Na&ccedil;&atilde;o de um povo trabalhador<br />
De uma gente que acredita<br />
Que a alegria vence a dor</p>
<p>Por tempo o sonho do sert&atilde;o foi Luz<br />
E h&aacute; tempos que chora o sert&atilde;o por Luiz<br />
Se a asa branca voou por causa da seca<br />
Ela voltou com saudades de tu, Luiz<br />
Ele veio de Exu e n&atilde;o perdeu o eixo<br />
E hoje chora o sert&atilde;o com saudades de tu, Luiz</p>
<p>E pela falta que tu faz &agrave; cai&ccedil;ara<br />
No sop&eacute; da Serra do Araripe<br />
Sempre haver&aacute; seguidores de Gonzaga<br />
Alegrando os dias mais dif&iacute;ceis</p>
<p>Mas hoje tem festa na ro&ccedil;a<br />
S&atilde;o Jo&atilde;o o ano inteiro<br />
A&ccedil;ucenas e Karolinas<br />
Missa do vaqueiro</p>
<p>Luiz do sert&atilde;o<br />
Luiz do bai&atilde;o<br />
Luiz Gonzaga</p>
',
'creditos' => '<p><em>
Ficha t&eacute;cnica n&atilde;o divulgada no v&iacute;deo</em>
</p>
',
'faixa_mp3' => '2012-17.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'217',
'faixa_titulo' => 'Passeando em Paris',
'compositor' => '(Luiz Gonzaga / Gereba / Ben&eacute; Fonteles)',
'dolp' => 'Do CD Gereba Barreto &amp; Convidados &ldquo;Luas do Gonzaga &ndash; Uma hist&oacute;ria de Luiz&rdquo;, Independente (2012)',
'letra' => '<p>Pelos teus olhos me vejo<br />
Pela Paris dos meus olhos<br />
Pelas cores de Van Gogh<br />
Renoir, Monet, Pissarro<br />
Pela dor e a beleza<br />
Que a todo artista move<br />
Pelas teclas das sanfonas<br />
Visitando o que comove<br />
No que havia em &ldquo;La vie en rose&rdquo;</p>
<p>E al&eacute;m da cena em Notre Dame<br />
E aqu&eacute;m do Sena em nossos rios<br />
Ter a alma al&eacute;m da torre<br />
Da cidade e suas luzes<br />
Que iluminam l&aacute; em Exu o sombrio<br />
Feito o Redentor no Rio<br />
Que aben&ccedil;oa a cidade<br />
A Paris de um pa&iacute;s em Paris</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Gereba Barreto e Vilma Fernandes<br />
Arranjo, viol&atilde;o, viola de 10 cordas e assobio: Gereba<br />
Baixo el&eacute;trico: Duda Silveira<br />
Clarinete: Ivan Sacerdote<br />
Viola de 10 cordas: Raimundo Nova<br />
Acordeom: Silvinho do Acordeom<br />
Sanfona: Targino Gondim<br />
</p>',
'faixa_mp3' => '2012-8.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'218',
'faixa_titulo' => 'Sanfoninha Choradeira',
'compositor' => '(Luiz Gonzaga / Jo&atilde;o Silva)',
'dolp' => 'Do CD Falamansa &ldquo;As sanfonas do Rei&rdquo;, Deckdisc 10064-2 (2012)<br />
Com:<strong> Falamansa</strong>
',
'letra' => '<p>Chora, sanfoninha, chora, chora<br />
Chora, sanfoninha, a minha dor<br />
Minha sanfoninha, amiga certa<br />
Que chorando tu desperta<br />
O cora&ccedil;&atilde;o do meu amor</p>
<p>Se ela t&aacute; me vendo<br />
T&aacute; fingindo que n&atilde;o t&aacute;<br />
T&aacute; me querendo<br />
T&aacute; fingindo que n&atilde;o t&aacute;<br />
Cora&ccedil;&atilde;o batendo<br />
T&aacute; fingindo que n&atilde;o t&aacute;<br />
T&aacute; batendo, t&aacute; morrendo<br />
Mas n&atilde;o quer se declarar</p>',
'creditos' => '<p>Voz, viol&atilde;o, ukulele e synth: Tato<br />
Zabumba e backing: Alem&atilde;o<br />
Sanfona: Valdir<br />
Tri&acirc;ngulo, efeitos e backing: Dezinho<br />
Guitarra, viol&atilde;o e bass synth: Renatinho<br />
Baixo e ukulele bass: Fabinho<br />
Bateria: Mix<br />
Alfaia, pandeiro e efeitos: Gustavo da Lua</p>',
'faixa_mp3' => '2012-9.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'213',
'faixa_titulo' => 'Se Tu Quiser (Ao Vivo)',
'compositor' => '(Xico Bizerra)',
'dolp' => 'Do DVD Almir Rouche &ldquo;Evo&eacute;, Nabuco!&rdquo;, Independente (2012)<br />
Com:<strong> Almir Rouche</strong>
',
'letra' => '<p>Se tu quiser<br />
Eu invento o vento pra ventar amor<br />
Uma chuva bem chovida<br />
Pra chover p&eacute; de ful&ocirc;<br />
Pra tu ficar cheirosa e vir dan&ccedil;ar mais eu</p>
<p>Se tu quiser<br />
Eu poemo um poema bem cheio de rima<br />
Acendo a estrela mais bonita l&aacute; de cima<br />
Fa&ccedil;o tudo que puder<br />
Pra tu ficar mais eu</p>
<p>Se tu quiser<br />
Eu crio um sentimento pra gente se amar<br />
Descubro um jeito novo de te abra&ccedil;ar<br />
Te beijo com um beijo<br />
Que ningu&eacute;m nunca beijou</p>
<p>Se tu quiser<br />
Basta me dizer que eu irei correndo<br />
&Eacute; s&oacute; me avisar que tu t&aacute; me querendo<br />
E o mundo vai saber<br />
O que &eacute; um grande amor</p>',
'creditos' => '<p>Bateria: Gordinho<br />
Guitarra: M&aacute;rcio Santos<br />
Baixo: Mano<br />
Acordeom: Cezzinha Thomaz<br />
Percuss&atilde;o: Nikima e Skilo<br />
Teclados: Alessandro &ldquo;Pypoca&rdquo;<br />
Flauta: ?<br />
</p>',
'faixa_mp3' => '2012-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'225',
'faixa_titulo' => 'Um Bilhete pro Seu Lua',
'compositor' => '(Gonzaguinha)',
'dolp' => '<p>Lançada no site oficial de Elba, regravada pela passagem dos 100 anos de Gonzagão (2012)</p>
',
'letra' => '<p>&Ecirc;, meu pai<br />
T&ocirc; sentindo saudades de voc&ecirc;<br />
Como vai<br />
Essa voz que &eacute; a voz do meu sert&atilde;o?<br />
Como est&atilde;o<br />
O trabalho, os projetos, oi?<br />
Mando l&aacute; um abra&ccedil;o dos netos</p>
<p>Cem anos de bai&atilde;o n&atilde;o &eacute; pra qualquer besta<br />
Ainda mais com essa sanfona<br />
Espalhando sempre a festa<br />
Cuida bem do cora&ccedil;&atilde;o, liga n&atilde;o</p>
<p>Que o povo tem amor<br />
Por tudo o que voc&ecirc; &eacute;<br />
Que o povo tem amor<br />
Por tudo o que voc&ecirc; &eacute;</p>
<p>V&ecirc;, meu pai<br />
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
O povo inteirinho dentro desse cora&ccedil;&atilde;o</p>',
'creditos' => '<p><em>Ficha t&eacute;cnica n&atilde;o divulgada no v&iacute;deo</em></p>
',
'faixa_mp3' => '2012-16.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'219',
'faixa_titulo' => 'Valsa de uma Cidade (Ao vivo)',
'compositor' => '(Ismael Netto / Ant&ocirc;nio Maria)',
'dolp' => 'Do CD &ldquo;Cristo Redentor 80 anos&rdquo;, EMI Music (2012)
',
'letra' => '<p>Vento do mar no meu rosto<br />
E o sol a queimar, queimar<br />
Cal&ccedil;ada cheia de gente a passar<br />
E a me ver passar<br />
Rio de Janeiro, gosto de voc&ecirc;<br />
Gosto de quem gosta<br />
Deste c&eacute;u, deste mar, desta gente feliz</p>
<p>Bem que eu quis escrever um poema de amor<br />
E o amor<br />
Estava em tudo o que eu vi<br />
Em tudo quanto eu amei</p>
<p>E no poema que eu fiz<br />
Tinha algu&eacute;m mais feliz que eu<br />
O meu amor<br />
Que n&atilde;o me quis</p>',
'creditos' => '<p>Arranjo e teclados: Julio Teixeira<br />
Viol&atilde;o: Jos&eacute; Carlos<br />
Bateria: Luciano Santiago<br />
Baixo: Andr&eacute; Neiva<br />
Percuss&atilde;o: Jaguar&aacute; e Andr&eacute; Siqueira</p>
',
'faixa_mp3' => '2012-10.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'220',
'faixa_titulo' => 'Para&iacute;ba',
'compositor' => '(Luiz Gonzaga / Humberto Teixeira)',
'dolp' => 'Do CD &ldquo;Bai&atilde;o de dois&rdquo;, Sony Music 88.765.421.102 (2012)<br />
Com:<strong> Luiz Gonzaga</strong>
',
'letra' => '<p>Quando a lama virou pedra<br />
E mandacaru secou<br />
Quando o riba&ccedil;&atilde; de sede<br />
Bateu asas e voou<br />
Eu entonce vim me embora<br />
Carregando a minha dor<br />
Hoje eu mando um abra&ccedil;o pra ti, pequenina</p>
<p>Para&iacute;ba masculina<br />
Mui&eacute; macho, sim sinh&ocirc;<br />
Para&iacute;ba masculina<br />
Mui&eacute; macho, sim sinh&ocirc;</p>
<p>Eita, pau pereira<br />
Que em princesa j&aacute; roncou<br />
Eita, Para&iacute;ba<br />
Mui&eacute; macho, sim sinh&ocirc;<br />
Eita, pau pereira<br />
Meu bodoque n&atilde;o quebrou<br />
Hoje eu mando um abra&ccedil;o pra ti, pequenina</p>',
'creditos' => '<p>Voz: Luiz Gonzaga e Elba<br />
Grava&ccedil;&atilde;o adicional<br />
Viol&atilde;o e viola: Jo&atilde;o Lira<br />
Zabumba, tri&acirc;ngulo, xique e agog&ocirc;: Firmino<br />
Dire&ccedil;&atilde;o de voz: Jos&eacute; Am&eacute;rico Bastos<br />
</p>',
'faixa_mp3' => '2012-11.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'221',
'faixa_titulo' => 'Vem Dan&ccedil;ar',
'compositor' => '(Jana&iacute;na Pereira)',
'dolp' => 'Do CD Bicho de P&eacute; &ldquo;A vida vai&rdquo;, Independente (2012)<br />
Com:<strong> Bicho de P&eacute;</strong>
',
'letra' => '<p>Vem dan&ccedil;ar<br />
Sentir o corpo todo balan&ccedil;ar<br />
Agarradinho no forr&oacute;<br />
Ai, que bom<br />
O *zabumbeiro repicando no compasso<br />
As batidas do seu cora&ccedil;&atilde;o<br />
O *zabumbeiro repicando no compasso<br />
As batidas do seu cora&ccedil;&atilde;o<br />
(*triangueiro / *sanfoneiro / *guitarreiro)</p>
<p>Eita, forrozinho bom danando<br />
Que a gente chega arrumado<br />
Perfumado, entusiasmado<br />
E de repente sai dan&ccedil;ando<br />
Sai rodopiando<br />
Se arrochando, se enroscando<br />
P&otilde;e chinela pra chiar</p>
<p>No fim da noite<br />
A gente sai cansado, sai despenteado<br />
Com o corpo todo suado<br />
De tanto forrozear</p>',
'creditos' => '<p>Voz, pandeiro, tri&acirc;ngulo, matracas, mineiro, coro e arranjo vocal: Jana&iacute;na Pereira<br />
Viol&atilde;o e cavaquinho: Potiguara Menezes<br />
Baixo e coro: Daniel Teixeira<br />
Percuss&atilde;o: Chica Brother<br />
Sanfona: Cezzinha Thomaz e Clayton Gama<br />
Zabumba: Vinicinho (Meketrefe)<br />
</p>',
'faixa_mp3' => '2012-12.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'230',
'faixa_titulo' => 'Sanctus, Sanctus',
'compositor' => '(Janduhy Finizola)',
'dolp' => 'Do CD &ldquo;Rezas do sol para a Missa do Vaqueiro&rdquo;, Independente (2013)
',
'letra' => '<p>Jesus &eacute; santo dos santos<br />
Deus verdadeiro<br />
Vaqueiro &eacute; gente da gente<br />
Bom companheiro</p>
<p>Senhor de b&ecirc;n&ccedil;&atilde;os e gl&oacute;rias<br />
L&aacute; nas alturas<br />
Que des&ccedil;a sobre o vaqueiro<br />
E o sert&atilde;o inteiro</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Jos&eacute; Milton e Roberta Jansen<br />
Sanfona: Gennaro e Beto Hortis<br />
Baixo: Wagner Santos<br />
Viola: Jo&atilde;o Neto<br />
Viol&atilde;o: Ananias Junior<br />
Quartinha, zabumba, tri&acirc;ngulo e agog&ocirc;: Vanutti<br />
</p>',
'faixa_mp3' => '2013-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'227',
'faixa_titulo' => 'Ai que Saudade D&rsquo;oc&ecirc;',
'compositor' => '(Vital Farias)',
'dolp' => 'Do CD Flor de Mu&ccedil;amb&ecirc;, Independente (2013)<br />
Com:<strong> Flor de Mu&ccedil;amb&ecirc;</strong>
',
'letra' => '<p>N&atilde;o se admire se um dia<br />
Um beija-flor invadir<br />
A porta da tua casa<br />
Te der um beijo e partir<br />
Fui eu que mandei o beijo<br />
Que &eacute; pra matar meu desejo<br />
Faz tempo que eu n&atilde;o te vejo<br />
Ai que saudade d&#39;oc&ecirc;</p>
<p>Se um dia oc&ecirc; lembrar<br />
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
Que &eacute; que eu posso fazer?<br />
Trabalhar &eacute; minha sina<br />
Eu gosto mesmo &eacute; d&#39;oc&ecirc;</p>',
'creditos' => '<p>Adapta&ccedil;&atilde;o base e cordas: Maestro Spok<br />
Violino e voz: Gizelle Dias<br />
Viola: Roberta Vieira<br />
Violino: Manoela Dias<br />
Cello: Valqu&iacute;ria Janie<br />
Guitarra, viol&atilde;o e viola: Renato Bandeira<br />
Sanfona: Beto Hortis<br />
Baixo: H&eacute;lio Silva<br />
Bateria: Fernando Lopes<br />
Percuss&atilde;o: Lucas dos Prazeres<br />
</p>',
'faixa_mp3' => '2013-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'229',
'faixa_titulo' => 'Anarri&ecirc; do Semba',
'compositor' => '(Magary Lord / F&aacute;bio Alc&acirc;ntara / Leonardo Reis)',
'dolp' => 'Do CD Magary Lord &ldquo;Inventando moda&rdquo;, Universal Music (2013)<br />
Com:<strong> Magary Lord</strong>
',
'letra' => '<p>Voc&ecirc; me faz me sentir bem<br />
Eu com voc&ecirc; vou mais al&eacute;m<br />
Voc&ecirc; me faz me sentir bem<br />
Eu com voc&ecirc; vou mais al&eacute;m</p>
<p>Navego nesse mundo todo de meu Deus<br />
Em busca da felicidade<br />
Menina, eu te dou um ouro<br />
N&atilde;o importa a idade</p>
<p>Quando voc&ecirc; sonhar<br />
Lembra aquela cena que te agradou<br />
Lembra dos amigos, lembra do amor<br />
E a fada dos sonhos vai realizar</p>
<p>Anarri, anarri&ecirc; do semba<br />
Anarri&ecirc;, anarri&ecirc; do semba, amor<br />
Anarri&ecirc;, anarri&ecirc; do semba<br />
Anarri&ecirc;, anarri&ecirc; do semba, amor</p>',
'creditos' => '<p>Voz: Magary Lord<br />
Guitarra e vocal: Fabio Alc&acirc;ntara<br />
Viol&atilde;o: Cod&oacute; Lima<br />
Baixo: Gustavo Carib&eacute;<br />
Bateria: M&aacute;rcio Bonfim<br />
Percuss&atilde;o: Binho Aranha e Marcos Paulo Copque<br />
Acordeom: Silvinho<br />
Vocal: Karinne Rosselle, Nilce Ramos e Tuka Ramos<br />
</p>',
'faixa_mp3' => '2013-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'231',
'faixa_titulo' => 'Riacho do Navio (Ao Vivo)',
'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas)',
'dolp' => 'Do CD Marina Elali &ldquo;Duetos &ndash; Homenagem a Luiz Gonzaga e Z&eacute; Dantas&rdquo;, Som Livre (2013)<br />
Com:<strong> Marina Elali</strong>
',
'letra' => '<p>Riacho do Navio<br />
Corre pro Paje&uacute;<br />
O rio Paje&uacute; vai despejar no S&atilde;o Francisco<br />
O rio S&atilde;o Francisco<br />
Vai bater no mei do mar<br />
O rio S&atilde;o Francisco<br />
Vai bater no mei do mar</p>
<p>Ah, se eu fosse um peixe<br />
Ao contr&aacute;rio do rio<br />
Nadava contra as &aacute;guas<br />
E nesse desafio<br />
Sa&iacute;a l&aacute; do mar<br />
Pro riacho do Navio<br />
Eu ia diretinho pro riacho do Navio</p>
<p>Pra ver o meu brejinho<br />
Fazer umas ca&ccedil;adas<br />
Ver as pegas de boi<br />
Andar nas vaquejadas<br />
Dormir ao som do chocalho<br />
E acordar com a passarada<br />
Sem r&aacute;dio e nem not&iacute;cia<br />
Das terras civilizadas</p>',
'creditos' => '<p>Piano: Lincoln Olivetti<br />
Piano, teclado e synths: Asbel Cezar<br />
Teclado e synths: Walter Klayson Monastirski<br />
Bateria: Rike Frainer<br />
Baixo: M&aacute;rio Cavalcanti<br />
Viol&atilde;o e guitarra: Felipe Bade<br />
Sanfona: Lu Miliano<br />
Zabumba: Jerimum de Olinda<br />
</p>',
'faixa_mp3' => '2013-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'231',
'faixa_titulo' => 'Xote das Meninas (Ao Vivo)',
'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas)',
'dolp' => 'Do CD Marina Elali &ldquo;Duetos &ndash; Homenagem a Luiz Gonzaga e Z&eacute; Dantas&rdquo;, Som Livre (2013)<br />
Com:<strong> Marina Elali e Ivete Sangalo</strong>
',
'letra' => '<p>Ela s&oacute; quer<br />
S&oacute; pensa em namorar<br />
Ela s&oacute; quer<br />
S&oacute; pensa em namorar</p>
<p>De manh&atilde; cedo j&aacute; t&aacute; pintada<br />
S&oacute; vive suspirando, sonhando acordada<br />
O pai leva ao doutor a filha adoentada<br />
N&atilde;o come, n&atilde;o estuda<br />
N&atilde;o dorme, n&atilde;o quer nada</p>
<p>Mas o doutor nem examina<br />
Chamando o pai do lado<br />
Lhe diz logo em surdina<br />
O mal &eacute; da idade<br />
E que pra tal menina<br />
N&atilde;o h&aacute; um s&oacute; rem&eacute;dio<br />
Em toda a medicina</p>',
'creditos' => '<p>Piano: Lincoln Olivetti<br />
Piano, teclado e synths: Asbel Cezar<br />
Teclado e synths: Walter Klayson Monastirski<br />
Bateria: Rike Frainer<br />
Baixo: M&aacute;rio Cavalcanti<br />
Viol&atilde;o e guitarra: Felipe Bade<br />
Sanfona: Lu Miliano<br />
Zabumba: Jerimum de Olinda<br />
</p>',
'faixa_mp3' => '2013-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'233',
'faixa_titulo' => 'S&atilde;o Jo&atilde;o na Ro&ccedil;a (Ao Vivo)',
'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas)',
'dolp' => 'Do DVD Marina Elali &ldquo;Duetos &ndash; Homenagem a Luiz Gonzaga e Z&eacute; Dantas&rdquo;, Som Livre 0873-9 (2013)<br />
Com:<strong> Marina Elali, Ivete Sangalo, Zez&eacute; Di Camargo e Luciano, T&acirc;nia Mara, Geraldo Azevedo, Quinteto Violado, Daniel Gonzaga, Avi&otilde;es do Forr&oacute; e Waldonys</strong>
',
'letra' => '<p>A fogueira t&aacute; queimando<br />
Em homenagem a S&atilde;o Jo&atilde;o<br />
O forr&oacute; j&aacute; come&ccedil;ou<br />
Vamo gente, rapap&eacute; nesse sal&atilde;o</p>
<p>Dan&ccedil;a Joaquim com Zab&eacute;<br />
Luiz com Iai&aacute;<br />
Dan&ccedil;a Janj&atilde;o com Raqu&eacute;<br />
E eu com Sinh&aacute;<br />
Traz a cacha&ccedil;a Man&eacute;<br />
Eu quero ver<br />
Quero ver paia voar</p>',
'creditos' => '<p>Piano: Lincoln Olivetti<br />
Piano, teclado e synths: Asbel Cezar<br />
Teclado e synths: Walter Klayson Monastirski<br />
Bateria: Rike Frainer<br />
Baixo: M&aacute;rio Cavalcanti<br />
Viol&atilde;o e guitarra: Felipe Bade<br />
Sanfona: Lu Miliano<br />
Zabumba: Jerimum de Olinda<br />
</p>',
'faixa_mp3' => '2013-8.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'232',
'faixa_titulo' => 'Anjo de Deus',
'compositor' => '(Frei Dami&atilde;o Silva / S&iacute;lvio Nascimento / Fl&aacute;vio Pio)',
'dolp' => 'Do CD Frei Dami&atilde;o Silva &ldquo;Vem, Jesus&rdquo;, Independente (2013)<br />
Com:<strong> Frei Dami&atilde;o</strong>
',
'letra' => '<p><em>Anjo de Deus<br />
Repousa sobre n&oacute;s<br />
Levai os nossos pedidos<br />
As nossas inten&ccedil;&otilde;es<br />
Ao cora&ccedil;&atilde;o de Deus<br />
Ao cora&ccedil;&atilde;o de Jesus</em></p>
<p>Tem um anjo perto de voc&ecirc;<br />
Ele veio receber o teu pedido<br />
Vai apresentar o teu problema ao Senhor<br />
Pra ele derramar o seu amor</p>
<p>Anjo de Deus<br />
Repousa sobre n&oacute;s<br />
Anjo de Deus<br />
Recebe as nossas ora&ccedil;&otilde;es<br />
Levai as nossas preces ao Senhor Jesus<br />
E pede paz aos nossos cora&ccedil;&otilde;es</p>    ',
'creditos' => '<p>Bateria: Dawila Drums<br />
Baixo: Buga Rodriguez<br />
Guitarra e viol&atilde;o: George Souza<br />
Teclados: Fl&aacute;vio Pio<br />
Percuss&atilde;o: Thiago Wilker<br />
Programa&ccedil;&otilde;es em sample: Junior Freitas<br />
Sax: Rafinha<br />
Vocal: Dora e Valkyria Mendes<br />
</p>
',
'faixa_mp3' => '2013-7.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'228',
'faixa_titulo' => 'Estrelas que se Encantam',
'compositor' => '(Dominguinhos / Xico Bizerra)',
'dolp' => 'Do CD Xico Bizerra &ldquo;Luar Agreste no C&eacute;u Cariri&rdquo;, Independente (2013)',
'letra' => '<p>Quem diz que uma sanfona n&atilde;o chora<br />
Est&aacute; por fora, chora sim<br />
Ela &eacute; amiga e confidente<br />
De um viol&atilde;o plangente<br />
De um cavaco e um bandolim</p>
<p>Chora o pranto da beleza<br />
Sem tristeza ou solu&ccedil;ar<br />
Em cada tecla que debulha a harmonia<br />
Desinventa a agonia<br />
Pra essa vida se alegrar</p>
<p>Quando uma estrela se espregui&ccedil;a<br />
E se enfeiti&ccedil;a com o luar<br />
Passa a brilhar toda dengosa<br />
Que nem pedra preciosa<br />
Cobi&ccedil;ando o lapidar</p>
<p>Outras estrelas se encantam<br />
E acalantam meu sonhar<br />
Mas o brilho que emana l&aacute; de cima<br />
Reflete a obra prima<br />
Do brilho do teu olhar</p>
<p>&Oacute;, doce flauta, quando se achega<br />
Terna e meiga s&oacute; faz bem<br />
Saudade boa daquele que foi<br />
Certeza que um dia ele vem</p>
<p>E se delicia pintando o dia<br />
Com as tintas do amor<br />
E at&eacute; parece que a sua melodia<br />
&Eacute; uma fantasia desenhada pela flor</p>
<p>Esse choro n&atilde;o vai findar, eu sei<br />
Pois o amor n&atilde;o vai deixar<br />
Enquanto houver ternura assim cantada<br />
A alma apaixonada da can&ccedil;&atilde;o existir&aacute;</p>
<p>E assim sorrindo pela vida eu vou<br />
De m&atilde;os dadas com o luar<br />
Vou sorrindo com a sanfona<br />
T&atilde;o alegre desse choro<br />
Que &eacute; pra voc&ecirc; n&atilde;o chorar</p>',
'creditos' => '<p>Arranjo e viol&atilde;o 7 cordas: Boz&oacute;<br />
Sanfona: Luizinho<br />
Cello: Fabiano Menezes<br />
Cavaco: Jo&atilde;o Paulo Albertin<br />
Flauta e clarinete: Alexandre<br />
Pandeiro: Jo&atilde;o Vitor<br />
</p>',
'faixa_mp3' => '2013-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'234',
'faixa_titulo' => 'Meu Destino no Teu',
'compositor' => '(Sheilami Guerreiro)',
'dolp' => 'Lan&ccedil;ada no YouTube (2013)<br />
Com:<strong> Tauan Rodrigues</strong>
',
'letra' => '<p>Voc&ecirc; chegou com um sorriso<br />
E me fez renascer<br />
Com jeito de mo&ccedil;a bonita<br />
Me perdi por voc&ecirc;</p>
<p>Mas voc&ecirc; foi embora<br />
E deixou em mim<br />
Coisas inesperadas<br />
De uma paix&atilde;o sem fim<br />
Que veio de um olhar<br />
E n&atilde;o pode acabar</p>
<p>Minha vida, n&atilde;o esque&ccedil;a<br />
O que aconteceu<br />
Foi mais que um simples desejo<br />
Foi meu destino no teu</p>
<p>E quando sentir vontade de ouvir minha voz<br />
A te pedir carinho debaixo dos len&ccedil;&oacute;is<br />
Pode telefonar<br />
Estou a te esperar</p>
<p>Vem pra mim que a gente v&ecirc; como vai ficar<br />
Quando a gente quer meia dist&acirc;ncia<br />
&Eacute; capaz de afastar<br />
Me sinto mais mulher contigo<br />
Esque&ccedil;o os perigos de uma louca paix&atilde;o<br />
E eu deixo a solid&atilde;o de lado<br />
Te entrego os meus sonhos<br />
E o meu cora&ccedil;&atilde;o</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Marcos Farias<br />
Ficha t&eacute;cnica n&atilde;o divulgada no v&iacute;deo<br />
</p>',
'faixa_mp3' => '2013-9.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'243',
'faixa_titulo' => 'Asas da Paix&atilde;o',
'compositor' => '(Jo&atilde;ozinho Ribeiro)',
'dolp' => 'Do CD Jo&atilde;ozinho Ribeiro &ldquo;Milh&otilde;es de uns &ndash; Vol. 1&rdquo;, Independente (2014)',
'letra' => '<p>Por onde anda<br />
A paisagem dos teus olhos<br />
Que eu procuro<br />
Como louco, feito um c&atilde;o?</p>
<p>Farejo longe<br />
A medida dos teus passos<br />
E me devasso<br />
Nas asas dessa paix&atilde;o</p>
<p>Paix&atilde;o que aflora<br />
A pele, a alma, em pleno voo<br />
Num fio suspensa<br />
Papagaio cortando o c&eacute;u</p>
<p>Que se debru&ccedil;a<br />
Num solu&ccedil;o incontido<br />
No oco dos meus ouvidos<br />
Tens licen&ccedil;a pra chegar</p>
<p>&Ocirc; da paix&atilde;o<br />
&Ocirc; da paix&atilde;o<br />
Da paix&atilde;o companheira<br />
Raiz derradeira, cora&ccedil;&atilde;o</p>
<p>&Ocirc; pra chegar<br />
&Ocirc; pra chegar<br />
Pra dizer que esse canto<br />
N&atilde;o sabe aonde a dor vai dar</p>',
'creditos' => '<p><em>Na ficha t&eacute;cnica do disco n&atilde;o consta o nome dos m&uacute;sicos</em></p>
',
'faixa_mp3' => '2014-11.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'244',
'faixa_titulo' => 'Na Base da Chinela (Ao Vivo)',
'compositor' => '(Jackson do Pandeiro / Rosil Cavalcanti)',
'dolp' => 'Do CD Camar&atilde;o e Salatiel &ldquo;Camar&atilde;o &amp; Salatiel &ndash; Ao vivo&rdquo;, Independente (2014)<br />
Com:<strong> Camar&atilde;o e Salatiel</strong>
',
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
'creditos' => '',
'faixa_mp3' => '2014-12.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'237',
'faixa_titulo' => 'Minha Vida &eacute; te Amar (Ao Vivo)',
'compositor' => '(Dominguinhos / Nando Cordel)',
'dolp' => 'Do CD Cezzinha &ldquo;Cezzinha &amp; Convidados &ndash; Ao vivo&rdquo;, Som Livre (2014)<br />
Com:<strong> Cezzinha</strong>
',
'letra' => '<p>Minha lua &eacute; tua estrada<br />
Minha ceia &eacute; teu sabor<br />
Minha casa a tua espera<br />
Nos meus bra&ccedil;os, teu amor</p>
<p>Teu sorriso &eacute; sempre lindo<br />
Meu desejo &eacute; te encontrar<br />
Meu prazer &eacute; infinito<br />
Minha vida &eacute; te amar</p>
<p>Eu quero tudo, eu fa&ccedil;o tudo<br />
Pra ficar perto de voc&ecirc;<br />
Voc&ecirc; &eacute; sede, &eacute; sonho, &eacute; l&iacute;rio<br />
&Eacute; a raz&atilde;o pra eu viver</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o musical e acordeom: Cezzinha Thomaz<br />
Bateria: Hito Pereira<br />
Baixo: Toninho Tavares<br />
Guitarra: Junior Xanfer<br />
Zabumba e percuss&atilde;o: Nen&eacute;m Zabumbeiro e Raimundo da Zabumba<br />
Tri&acirc;ngulo: Ulisses Silveira<br />
</p>',
'faixa_mp3' => '2014-3.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'237',
'faixa_titulo' => 'De Volta pro Aconchego (Ao Vivo)',
'compositor' => '(Dominguinhos / Nando Cordel)',
'dolp' => 'Do CD Cezzinha &ldquo;Cezzinha &amp; Convidados &ndash; Ao vivo&rdquo;, Som Livre (2014)<br />
com:<strong> Cezzinha</strong>
',
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
Na felicidade sem fim</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o musical e acordeom: Cezzinha Thomaz<br />
Bateria: Hito Pereira<br />
Baixo: Toninho Tavares<br />
Guitarra: Junior Xanfer<br />
Zabumba e percuss&atilde;o: Nen&eacute;m Zabumbeiro e Raimundo da Zabumba<br />
Tri&acirc;ngulo: Ulisses Silveira<br />
</p>',
'faixa_mp3' => '2014-4.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'239',
'faixa_titulo' => 'Duas Caravelas',
'compositor' => '(Geraldo Azevedo / Maciel Melo)',
'dolp' => 'Do CD Irah Caldeira &ldquo;Esperando por setembro&rdquo;, Independente (2014)<br />
Com:<strong> Irah Caldeira</strong>',
'letra' => '<p>Hoje eu acordei cantando uma cantando<br />
Uma can&ccedil;&atilde;o falando de amor<br />
Hoje eu acordei querendo ouvir sua voz<br />
Feito alma que quer reza<br />
E amor que se preza &eacute; assim<br />
Quando mais car&iacute;cias<br />
Mais vontade d&aacute; em mim</p>
<p>Somos duas caravelas<br />
Velas i&ccedil;adas<br />
No mesmo mar<br />
Na mesma dire&ccedil;&atilde;o<br />
Levadas pelos ventos mais fortes<br />
Ventos que vem do mar<br />
E ventos do sert&atilde;o</p>
<p>Ventos que agitam as &aacute;guas<br />
De um rio que remansa<br />
Ventos de Olinda<br />
Ventos que ainda ventam<br />
Que ainda inventam<br />
U&ocirc;u, u&ocirc;u, de navegar</p>
<p>Ventos que nos balan&ccedil;am<br />
Mares que avan&ccedil;am pra n&oacute;s<br />
E cada um de n&oacute;s tem que velejar<br />
E cada um de n&oacute;s tem que velejar</p>',
'creditos' => '<p>Arranjo: Ananias e Vanutti<br />
Arranjo de metais: Fabinho<br />
Bateria: Hito Pereira<br />
Percuss&atilde;o e samplers: Vanutti<br />
Trompete: Fabinho Costa<br />
Trombone: Marcone T&uacute;lio<br />
Sax: Gilmar Black<br />
Baixo: Toninho Tavares<br />
Viol&atilde;o: Jo&atilde;o Neto<br />
Guitarra: Ananias Neto<br />
Acordeom: Gennaro<br />
</p>',
'faixa_mp3' => '2014-6.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'240',
'faixa_titulo' => 'O Menino e a Menina',
'compositor' => '(Leninho / Xico Bizerra)',
'dolp' => 'Do CD Leninho de Bodoc&oacute; &amp; Convidados &ldquo;Do Exu a Liverpool&rdquo;, Independente (2014)<br />
Com:<strong> Leninho de Bodoc&oacute;</strong>
',
'letra' => '<p>A dor em cada em esquina<br />
Se reflete na retina<br />
Da menina do sinal<br />
Ou no olho do pivete<br />
Que me vende seu chiclete<br />
Numa noite de Natal</p>
<p>E essa chuva que n&atilde;o passa<br />
Desenhando na vidra&ccedil;a<br />
O clamor da natureza<br />
A dureza dessa vida<br />
No bal&eacute; do para-brisa<br />
Corta sonhos de tristeza</p>
<p>Quem dera se essa dor passasse agora<br />
Quem dera n&atilde;o ouvir choro l&aacute; fora<br />
Buzinas e far&oacute;is nessa neblina<br />
O menino e a menina</p>
<p>Quem dera ver o sol poder se abrir<br />
Quem dera s&oacute; ouvir algu&eacute;m sorrir<br />
O menino seu amor poder cantar<br />
E a menina nunca mais querer chorar</p>',
'creditos' => '<p>Sanfona: Claudinho<br />
Baixo e bateria: Dier<br />
Guitarra e viol&atilde;o: Elvis Alexandre<br />
Percuss&atilde;o: Nen&eacute;m da Zefa<br />
</p>',
'faixa_mp3' => '2014-7.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'241',
'faixa_titulo' => 'M&atilde;e do C&eacute;u Morena',
'compositor' => '(Padre Zezinho)',
'dolp' => 'Do CD Padre Zezinho &ldquo;Tributo a um pioneiro&rdquo;, Universal Music 060.253.738.370 (2014)',
'letra' => '<p>M&atilde;e do c&eacute;u morena<br />
Senhora da Am&eacute;rica Latina<br />
De olhar e caridade t&atilde;o divina<br />
De cor igual &agrave; cor de tantas ra&ccedil;as</p>
<p>Virgem t&atilde;o serena<br />
Senhora destes povos t&atilde;o sofridos<br />
Patrona dos pequenos e oprimidos<br />
Derrama sobre n&oacute;s as tuas gra&ccedil;as</p>
<p>Derrama sobre os jovens tua luz<br />
Aos pobres vem mostrar o teu Jesus<br />
Ao mundo inteiro traz o teu amor de M&atilde;e</p>
<p>Ensina quem tem tudo a partilhar<br />
Ensina quem tem pouco a n&atilde;o cansar<br />
E faz o nosso povo caminhar em paz</p>
<p>Derrama a esperan&ccedil;a sobre n&oacute;s<br />
Ensina o povo a n&atilde;o calar a voz<br />
Desperta o cora&ccedil;&atilde;o de quem n&atilde;o acordou</p>
<p>Ensina que a justi&ccedil;a &eacute; condi&ccedil;&atilde;o<br />
De construir um mundo mais irm&atilde;o<br />
E faz o nosso povo conhecer Jesus<br />
</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo, cordas, teclado e programa&ccedil;&atilde;o: Renato Pal&atilde;o<br />
Bateria: Rog&eacute;rio Pal&atilde;o<br />
Contrabaixo: Rangel Francisco<br />
Viol&atilde;o: Ma&eacute;rcio Lopes<br />
Acordeom: Fioravante</p>',
'faixa_mp3' => '2014-8.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'241',
'faixa_titulo' => 'Ora&ccedil;&atilde;o por Nossos Filhos',
'compositor' => '(Padre Zezinho)',
'dolp' => 'Do CD Padre Zezinho &ldquo;Tributo a um pioneiro&rdquo;, Universal Music 060.253.738.370 (2014)
',
'letra' => '<p>Ouve a nossa prece &oacute; Pai celeste<br />
Em favor dos filhos que nos deste<br />
P&otilde;e em n&oacute;s um pouco do teu brilho<br />
E em cada filho a tua luz</p>
<p>P&otilde;e tua palavra em nossa boca<br />
P&otilde;e teu gesto em nosso cora&ccedil;&atilde;o<br />
N&atilde;o amemos nem demais e nem de menos</p>
<p>Saibamos ser seus pais<br />
Saibamos muito mais</p>
<p>Pessoas educando outras pessoas<br />
Cidad&atilde;os formando novos cidad&atilde;os<br />
Fam&iacute;lias preparando outras fam&iacute;lias<br />
Pais formando os filhos para a paz<br />
</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o, arranjo, cordas, teclado e programa&ccedil;&atilde;o: Renato Pal&atilde;o<br />
Bateria: Rog&eacute;rio Pal&atilde;o<br />
Contrabaixo: Rangel Francisco<br />
Violino: Ariel Sanches, Pedro Gobeth, Gabriela Fogo, Luiz Barrionuevo e Maria Paredes<br />
Violoncelo: Fabr&iacute;cio Rodrigues e Thiago Faria<br />
Viola: Fabio Schio, Pedro Visockas e Keder C&acirc;ndido<br />
Acordeom: Fioravante</p>',
'faixa_mp3' => '2014-9.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'242',
'faixa_titulo' => 'Sem Jesus N&atilde;o Vai (Ao Vivo)',
'compositor' => '(Jake Trevisan)',
'dolp' => 'Do CD Jake Trevisan &ldquo;Esperan&ccedil;a&rdquo;, Independente (2014)<br />
Com:<strong> Jake Trevisan</strong>
',
'letra' => '<p>Mas sem Jesus n&atilde;o vai<br />
Mas sem Jesus n&atilde;o d&aacute; pra ser<br />
Pois sem Jesus no meu caminho<br />
Sem Jesus n&atilde;o sei viver</p>
<p>Mas sem Jesus n&atilde;o vai<br />
N&atilde;o vai, n&atilde;o<br />
Ele &eacute; o dono do meu cora&ccedil;&atilde;o<br />
Quando eu sair daqui<br />
Do meu caminho ele vai cuidar</p>
<p>E bate aqui dentro, tum-tum<br />
Um amor verdadeiro<br />
Que n&atilde;o &eacute; mais um<br />
&Eacute; o amor de Cristo<br />
Que hoje vai me transformar<br />
</p>',
'creditos' => '',
'faixa_mp3' => '2014-10.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'245',
'faixa_titulo' => 'Lenda de S&atilde;o Jo&atilde;o (Ao Vivo)',
'compositor' => '(Luiz Gonzaga / Z&eacute; Dantas)',
'dolp' => 'Do CD Targino &ldquo;Ser t&atilde;o da gente &ndash; Ao vivo&rdquo;, Independente (2014)<br />
Com:<strong> Targino Gondim</strong>
',
'letra' => '<p>Eu vou, vou soltar foguete<br />
Eu vou, vou soltar bal&atilde;o<br />
Eu vou festejar S&atilde;o Pedro<br />
Eu vou festejar S&atilde;o Jo&atilde;o</p>
<p>Diz que Santa Isabel<br />
Disse a prima Maria<br />
Jo&atilde;o vindo ao mundo<br />
Lhe aviso no dia</p>
<p>Ao ver no meu rancho<br />
Um grande clar&atilde;o<br />
E uma fogueira<br />
Nasceu S&atilde;o Jo&atilde;o</p>
<p>Por isso &eacute; que o mundo<br />
Com muita raz&atilde;o<br />
Assim festeja<br />
O Senhor S&atilde;o Jo&atilde;o</p>
<p>Disse que S&atilde;o Jo&atilde;o foi dormir<br />
E que s&oacute; se acordou<br />
No dia de Pedro<br />
E S&atilde;o Jo&atilde;o se zangou</p>
<p>Pois tinha pedido<br />
A santa fam&iacute;lia<br />
Que lhe acordasse<br />
Chagando o seu dia</p>
<p>Mas se ele sa&iacute;sse<br />
Do sono profundo<br />
Um grande inc&ecirc;ndio<br />
Acabava o mundo</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o e acordeom: Targino<br />
Bateria: Gargamel<br />
Contrabaixo: Luiz Maia<br />
Zabumba: Paulo Henrique<br />
Guitarra e viol&atilde;o: Tadeu Gouveia<br />
Percuss&atilde;o: Aur&eacute;lio e Juninho<br />
Acordeom: Quinteto Sanf&ocirc;nico do S&atilde;o Francisco (G&eacute;o, Wanderley do Nordeste, Fl&aacute;vio Bai&atilde;o, Cicinho de Assis e Renan Mendes)<br />
Vocais: Tita Alves e Carlinhos Marques<br />
</p>',
'faixa_mp3' => '2014-13.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'245',
'faixa_titulo' => 'Olha pro C&eacute;u (Ao Vivo)',
'compositor' => '(Luiz Gonzaga / Jos&eacute; Fernandes)',
'dolp' => 'Do CD Targino &ldquo;Ser t&atilde;o da gente &ndash; Ao vivo&rdquo;, Independente (2014)<br />
Com:<strong> Targino Gondim e Xangai</strong>
',
'letra' => '<p>Olha pro c&eacute;u, meu amor<br />
V&ecirc; como ele est&aacute; lindo<br />
Olha praquele bal&atilde;o multicor<br />
Que l&aacute; no c&eacute;u vai sumindo</p>
<p>Foi numa noite igual a esta<br />
Que tu me deste o teu cora&ccedil;&atilde;o<br />
O c&eacute;u estava assim em festa<br />
Pois era noite de S&atilde;o Jo&atilde;o</p>
<p>Havia bal&otilde;es no ar<br />
Xote e bai&atilde;o no sal&atilde;o<br />
E no terreiro o seu olhar<br />
Que incendiou meu cora&ccedil;&atilde;o</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o e acordeom: Targino<br />
Bateria: Gargamel<br />
Contrabaixo: Luiz Maia<br />
Zabumba: Paulo Henrique<br />
Guitarra e viol&atilde;o: Tadeu Gouveia<br />
Percuss&atilde;o: Aur&eacute;lio e Juninho<br />
Acordeom: Quinteto Sanf&ocirc;nico do S&atilde;o Francisco (G&eacute;o, Wanderley do Nordeste, Fl&aacute;vio Bai&atilde;o, Cicinho de Assis e Renan Mendes)<br />
Vocais: Tita Alves e Carlinhos Marques<br />
Participa&ccedil;&atilde;o especial: Zezinho Aboiador, Jo&atilde;o Omar, Nilton Freitas<br />
</p>',
'faixa_mp3' => '2014-14.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'236',
'faixa_titulo' => 'Pluma',
'compositor' => '(Ricardo Koctus)',
'dolp' => 'Do CD Ricardo Koctus &ldquo;Samba bossa rock&rsquo;n&rsquo;roll&rdquo;, Independente (2014)<br />
Com:<strong> Ricardo Koctus</strong>
',
'letra' => '<p>Olhos nos olhos<br />
A hora &eacute; de partir<br />
Sem dizer adeus ou sinto muito<br />
Simplesmente ir</p>
<p>M&atilde;os com as m&atilde;os<br />
N&atilde;o podem entrela&ccedil;ar<br />
N&atilde;o caminham juntas<br />
S&atilde;o estranhas no lugar</p>
<p>Agora sou o vento<br />
Voc&ecirc; &eacute; pluma<br />
Quanto mais perto chego<br />
Longe est&aacute;</p>
<p>Agora sou a noite<br />
Voc&ecirc; o dia<br />
Quanto mais perto chego<br />
Longe est&aacute;</p>
<p>Ah, os abra&ccedil;os<br />
N&atilde;o deveriam acabar<br />
Mas se n&atilde;o h&aacute; por qu&ecirc;<br />
Ent&atilde;o assim ser&aacute;</p>
<p>L&aacute;bios<br />
Beijaram o c&eacute;u<br />
Criaram asas<br />
Pra nunca mais voltar</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o e baixo: Barral Lima<br />
Arranjo, viol&atilde;o de 7 cordas, a&ccedil;o, nylon e bandolim: Lucas Telles<br />
Piano e acordeom: Luisa Mitre<br />
Percuss&atilde;o: Abel Borges<br />
Cavaquinho: Lucas Ladeia<br />
</p>',
'faixa_mp3' => '2014-2.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'235',
'faixa_titulo' => 'Flor de Maracuj&aacute;',
'compositor' => '(Jo&atilde;o Donato / Lysias &Ecirc;nio)',
'dolp' => 'Do CD Cl&aacute;udia Beija &ldquo;Amarte&rdquo;, Independente (2014)<br />
Com:<strong> Cl&aacute;udia Beija</strong>
',
'letra' => '<p>L&aacute; no avarandado<br />
Na luz do meio-dia<br />
O segredo dos teus olhos<br />
Tanta coisa me dizia</p>
<p>O cabelo solto ao vento<br />
O teu jeito de olhar<br />
E no seu corpo moreno<br />
A flor de maracuj&aacute;</p>
<p>Dia de sol, cheiro de flor<br />
Gosto de mar, amor<br />
Na tua cor, luz do luar<br />
Vento que vem do mar</p>
<p>Roda gira, vira o vento<br />
Meu amor vai te levar<br />
Bem pra l&aacute; do fim do mundo<br />
Onde eu vou te chamar<br />
Bem pra l&aacute; do fim do mundo<br />
Onde eu vou te chamar</p>',
'creditos' => '<p>Arranjo, harmonia e piano: George Arag&atilde;o<br />
Acordeom: Beto Ortis<br />
Baixo: Br&aacute;ulio Ara&uacute;jo<br />
Guitarra: Renato Bandeira<br />
Arranjo de flautas: Cac&aacute; Barretto e S&eacute;rgio Campello<br />
Flautas: S&eacute;rgio Campello<br />
Bateria: Tost&atilde;o Queiroga</p>',
'faixa_mp3' => '2014-1.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'238',
'faixa_titulo' => 'Diga Sim pra Mim (Ao Vivo)',
'compositor' => '(Isabella Taviani)',
'dolp' => 'Do CD Isabella Taviani &ldquo;Eu Raio X &ndash; Ao vivo&rdquo; Coqueiro Verde Records (2014)<br />
Com:<strong> Isabella Taviani</strong>
',
'letra' => '<p>Eu pensei em comprar algumas flores<br />
S&oacute; pra chamar mais aten&ccedil;&atilde;o<br />
Eu sei, j&aacute; n&atilde;o h&aacute; mais raz&atilde;o pra solid&atilde;o<br />
Meu bem, eu t&ocirc; pedindo a sua m&atilde;o</p>
<p>Ent&atilde;o case-se comigo numa noite de luar<br />
Ou na manh&atilde; de um domingo &agrave; beira mar<br />
Diga sim pra mim<br />
Case-se comigo na igreja e no papel<br />
Vestido branco com buqu&ecirc; e lua de mel<br />
Diga sim pra mim<br />
Sim pra mim</p>
<p>Eu pensei em escrever alguns poemas<br />
S&oacute; pra tocar seu cora&ccedil;&atilde;o<br />
Eu sei, uma pitada de romance &eacute; bom<br />
Meu bem, eu t&ocirc; pedindo a sua m&atilde;o</p>
<p>Prometo sempre ser o seu abrigo<br />
Na dor, o sofrimento &eacute; dividido<br />
Lhe juro ser fiel ao nosso encontro<br />
Na alegria,a felicidade vem em dobro</p>
<p>Eu comprei uma casinha t&atilde;o modesta<br />
Eu sei, voc&ecirc; n&atilde;o liga pra essas coisas<br />
Te darei toda a riqueza de uma vida<br />
O meu amor</p>',
'creditos' => '<p>Bateria: Pedro Mamede<br />
Baixo: Arthur de Palla<br />
Guitarra e viol&atilde;o: Felipe Melanio<br />
Guitarra: Caio Barreto<br />
Teclados: Geovanni Andrade<br />
Acordeom: Douglas Borsatti<br />
</p>',
'faixa_mp3' => '2014-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'246',
'faixa_titulo' => 'Dominguinhos, os Dez Dedos de Ouro',
'compositor' => '(Anast&aacute;cia / Liane)',
'dolp' => 'Do CD Anast&aacute;cia &ldquo;Ave de arriba&ccedil;&atilde;o &ndash; 60 anos de forr&oacute; e MPB&rdquo; (Independente) (2015)<br />
Com:<strong> Anast&aacute;cia</strong>
',
'letra' => '<p>Foram dez dedos de ouro<br />
Na sanfona a deslizar<br />
A voz tranquila e suave<br />
Que fez o povo cantar</p>
<p>Calou a voz para sempre<br />
Mas a sanfona ficou<br />
E o povo vai lembrar<br />
Dominguinhos cantador</p>
<p>Sanfoneiro<br />
Sanfoneiro<br />
Os dez dedos de ouro<br />
Que encantou o mundo inteiro</p>
<p>A tocar suas can&ccedil;&otilde;es<br />
Sua vida dedicou<br />
Ao falar do seu sert&atilde;o<br />
Falava com muito amor</p>
<p>Um eterno viajante<br />
Varava a estrada afora<br />
O can&aacute;rio emudeceu<br />
E o sert&atilde;o agora chora</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Eraldo Trajano<br />
Sanfonas: C&eacute;sar do Acordeom e Ol&iacute;vio Filho<br />
Guitarra e baixo: Lau<br />
Bateria, tri&acirc;ngulo, zabumba e percuss&atilde;o: Dido Batera<br />
Cavaquinho: Marcelo Bicudo<br />
Vocais: Jair, La&iacute;s, V&acirc;nia e Daniel<br />
</p>',
'faixa_mp3' => '2015-1.mp3'
] );
    ParticipacoesExtras::create( [
    'participacoes_id' =>'258',
    'faixa_titulo' => 'Oculto e Revelado (Ao Vivo)',
    'compositor' => '(Padre Fabio de Melo)',
    'dolp' => 'Do CD Padre F&aacute;bio de Melo &ldquo;Deus no esconderijo do verso&rdquo;, Sony Music (2015)<br />
    Com:<strong> Padre F&aacute;bio de Melo</strong>
    ',
    'letra' => '<p>Deus mora em mim<br />
    Neste aqui, onde em mim, n&atilde;o sei<br />
    Neste ali, t&atilde;o de mim, sem lei<br />
    Mora onde eu n&atilde;o sei chegar</p>
    <p>Falando em mim<br />
    Diz sem mim, usa a minha voz<br />
    Mas por mim fala o outro a s&oacute;s<br />
    No mist&eacute;rio de sermos n&oacute;s</p>
    <p>Quem desejar compreend&ecirc;-lo<br />
    Queira por hora esquec&ecirc;-lo<br />
    Queira abrir m&atilde;o do que dele ouviu<br />
    Queira esquecer o que dele viu<br />
    Queira enfrentar o desconforto<br />
    Queira entrar no mar revolto<br />
    No sempre oculto, no seu mist&eacute;rio<br />
    S&oacute; pra encontrar o que dele &eacute; s&oacute; seu<br />
    </p>',
    'creditos' => '<p>Produ&ccedil;&atilde;o: Jos&eacute; Milton<br />
Dire&ccedil;&atilde;o art&iacute;stica: S&eacute;rgio Bittencourt<br />
Arranjo, reg&ecirc;ncia e piano: Eduardo Souto Neto<br />
Baixo: Jorge Helder<br />
Viol&atilde;o: Lula Galv&atilde;o<br />
Sanfona: Adelson Viana<br />
Bateria: Jurim Moreira<br />
Obo&eacute;: Francisco Gon&ccedil;alves<br />
Trompa: Philip Doyle<br />
Ganz&aacute;, tri&acirc;ngulo e block: Z&eacute; Leal<br />
Violinos: Daniel Guedes, Glauco Fernandes, Daniel Albuquerque, Jos&eacute; Alves, Eduardo Hack, Antonella Pareschi, Oswaldo Carvalho, Rog&eacute;rio Rosa e Jo&atilde;o Daltro<br />
Violas: Jesu&iacute;na Passaroto e Eduardo Pereira<br />
Cellos: Yura Ranevsky e M&aacute;rcio Mallard</p>',
    'faixa_mp3' => '2016-3-1.mp3'
    ] );



    ParticipacoesExtras::create( [
        'participacoes_id' =>'247',
        'faixa_titulo' => 'Oculto e Revelado',
        'compositor' => '(Padre Fabio de Melo)',
        'dolp' => 'Do CD Padre F&aacute;bio de Melo &ldquo;Deus no esconderijo do verso &ndash; Ao vivo&rdquo;, Sony Music (2016)<br />
        Com: <strong>Padre F&aacute;bio de Melo</strong>',
        'letra' => '<p>Deus mora em mim<br />
        Neste aqui, onde em mim, n&atilde;o sei<br />
        Neste ali, t&atilde;o de mim, sem lei<br />
        Mora onde eu n&atilde;o sei chegar</p>
        
        <p>Falando em mim<br />
        Diz sem mim, usa a minha voz<br />
        Mas por mim fala o outro a s&oacute;s<br />
        No mist&eacute;rio de sermos n&oacute;s</p>
        
        <p>Quem desejar compreend&ecirc;-lo<br />
        Queira por hora esquec&ecirc;-lo<br />
        Queira abrir m&atilde;o do que dele ouviu<br />
        Queira esquecer o que dele viu<br />
        Queira enfrentar o desconforto<br />
        Queira entrar no mar revolto<br />
        No sempre oculto, no seu mist&eacute;rio<br />
        S&oacute; pra encontrar o que dele &eacute; s&oacute; seu<br />
        </p>
        ',
        'creditos' => '',
        'faixa_mp3' => '2015-2.mp3'
        ] );

ParticipacoesExtras::create( [
'participacoes_id' =>'252',
'faixa_titulo' => 'Corações Mamulengos!',
'compositor' => '(Washington Motta / Pitimbu / Vagner Silva / Alexandre Alegria / Telmo / Léo da Taberna / Marcelo Valência)',
'dolp' => 'Samba enredo da Escola União do Parque Curicica <br/>
Do CD “Sambas Enredo 2016 - Série A”, Som Livre/Lierj (2015)<br/>
Com:<strong> Ronaldo Ylê</strong>',
'letra' => '<p>Vem, meu amor, mamulengar<br />
Na caravana Curicica<br />
Dif&iacute;cil n&atilde;o se emocionar<br />
Eu vou passar<br />
Mas a saudade fica</p>

<p>Quem nunca viu, vai ver<br />
Pode se achegar<br />
Reze pra n&atilde;o chover<br />
Oxente, o show vai come&ccedil;ar</p>

<p>Ei, do ba&uacute; surgiu<br />
Vixe, tantos olhos coloriu<br />
Das m&atilde;os os bonecos ganham vida<br />
Mamulengos, doce ilus&atilde;o<br />
Salve os mestres do meu sert&atilde;o</p>

<p>Tem com&eacute;dia e terror<br />
Cigana no cajueiro<br />
Papa-figo inclemente<br />
De dar susto tamb&eacute;m<br />
O palha&ccedil;o n&atilde;o faz rir ningu&eacute;m<br />
O palha&ccedil;o n&atilde;o faz rir ningu&eacute;m</p>

<p>Tem festan&ccedil;a<br />
Vem pra dan&ccedil;ar<br />
Maracatu, bumba-meu-boi<br />
Eita, que fole danado<br />
Audaciosa num batuque arretado</p>

<p>Acol&aacute; vem Lampi&atilde;o<br />
Pra vencer o desafio<br />
Desse povo nordestino, oi<br />
Que leva a vida por um fio</p>

<p>Hist&oacute;rias, magia da arte<br />
Brincando por toda parte<br />
Est&aacute; na hora, eu vou partir<br />
Alegrar outra cidade<br />
</p>',
'creditos' => '',
'faixa_mp3' => '2015-10.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'250',
'faixa_titulo' => 'A Sereia Guiomar',
'compositor' => '(Dona Ivone Lara / Délcio Carvalho)',
'dolp' => 'Do CD “Sambabook Dona Ivone Lara”, Universal Music (2015)',
'letra' => '<p>A sereia Guiomar mora em alto mar<br />
A sereia Guiomar mora em alto mar<br />
Como &eacute; bonito, meu Deus, a lenda dessa sereia<br />
Como &eacute; bonito, meu Deus, a lenda dessa sereia</p>

<p>E a lenda dessa sereia, fascina<br />
E a lenda dessa sereia, fascina<br />
O canto dessa sereia, meu Deus, domina<br />
O canto dessa sereia, meu Deus, domina</p>

<p>Falam na beira do cais<br />
Que Manoel pescador<br />
Ouvindo um canto t&atilde;o lindo<br />
Logo se apaixonou</p>

<p>Seguiu correndo pro mar<br />
Dizem que em noite de lua<br />
Envolvido no seu manto<br />
O mo&ccedil;o flutua</p>

<p>Todo o mist&eacute;rio do mar<br />
Me causa grande emo&ccedil;&atilde;o<br />
Encantamento e beleza<br />
Que toca o meu cora&ccedil;&atilde;o</p>

<p>Hist&oacute;ria de canoeiro<br />
Gela meu sangue na veia<br />
Quando ele conta a lenda<br />
Da bela sereia<br />
</p>',
'creditos' => '',
'faixa_mp3' => '2015-5.mp3'
] );
ParticipacoesExtras::create( [
'participacoes_id' =>'250',
'faixa_titulo' => 'Sonho Meu',
'compositor' => '(Dona Ivone Lara / Délcio Carvalho)',
'dolp' => 'Do CD “Sambabook Dona Ivone Lara”, Universal Music (2015)<br/>
Com:<strong> vários artistas</strong>
',
'letra' => '<p>Sonho meu<br />
Sonho meu<br />
Vai buscar quem mora longe<br />
Sonho meu</p>

<p>Vai mostrar esta saudade<br />
Sonho meu<br />
Com a sua liberdade<br />
Sonho meu<br />
No meu c&eacute;u a estrela guia se perdeu<br />
A madrugada fria s&oacute; me traz melancolia<br />
Sonho meu</p>

<p>Sinto o canto da noite<br />
Na boca do vento<br />
Fazer a dan&ccedil;a das flores<br />
No meu pensamento</p>

<p>Traz a pureza de um samba<br />
Sentido, marcado de m&aacute;goas de amor<br />
Um samba que mexe o corpo da gente<br />
E o vento vadio embalando a flor<br />
</p>',
'creditos' => '',
'faixa_mp3' => '2015-6.mp3'
] );


ParticipacoesExtras::create( [
'participacoes_id' =>'249',
'faixa_titulo' => 'Pra Ficar Contigo',
'compositor' => '(Ed Wilson / Gilson)',
'dolp' => 'Do CD/DVD Maurício Mattar “20 anos de música”, Radar Records (2015)',
'letra' => '<p>Ai, que vontade de te ver de novo<br />
N&atilde;o vejo a hora de te abra&ccedil;ar<br />
Eu t&ocirc; doidinho pra ficar contigo<br />
Agarradinho e nunca mais largar</p>

<p>Ai, que vontade de ganhar teu beijo<br />
E nesse beijo a gente viajar<br />
Rolar na grama, na beira do rio<br />
Amar gostoso e depois descansar</p>

<p>Ah, se eu pudesse eu pedia ao tempo<br />
Pra dar mais um tempo pra ficar contigo<br />
Porque n&atilde;o d&aacute; vontade de ir embora<br />
O que eu mais quero &eacute; ter voc&ecirc; comigo</p>

<p>O nosso amor &eacute; lenha na fogueira<br />
Quando a gente esquenta n&atilde;o quer mais parar<br />
Quero ficar contigo a vida inteira<br />
Amor, n&atilde;o demora, eu quero te amar</p>

<p>Vem pra c&aacute;, meu amor, vamos namorar<br />
Vem c&aacute;, meu amor, vamos aproveitar<br />
Vem pra c&aacute;, meu amor, vamos namorar<br />
Vem c&aacute; meu amor, vamos aproveitar<br />
</p>',
'creditos' => '',
'faixa_mp3' => '2015-4.mp3'
] );


ParticipacoesExtras::create( [
'participacoes_id' =>'248',
'faixa_titulo' => 'Faz Bem pra Mim',
'compositor' => '(Rafael Barros Castro)',
'dolp' => 'Do CD Rafael Barros Castro, Independente (2015)<br/>
Com:<strong> Rafael Barros Castro</strong>',
'letra' => '<p>Faz t&atilde;o bem pra mim<br />
O encontro dos nossos olhares<br />
As lembran&ccedil;as dos nossos lugares<br />
&Ocirc;, saudade que nunca tem fim</p>

<p>Faz t&atilde;o bem pra mim<br />
Quando chega uma mensagem sua<br />
Meu sorriso cresce feito lua<br />
Como pode tanto amor assim?</p>

<p>Me faz t&atilde;o bem, meu bem<br />
O teu carinho<br />
Eu n&atilde;o posso mais viver sozinho<br />
Sem voc&ecirc; eu n&atilde;o sou ningu&eacute;m</p>

<p>Me faz t&atilde;o bem, meu bem<br />
Teu abra&ccedil;o e o teu beijo<br />
Quanto mais provo, mais eu desejo, ah...<br />
Faz t&atilde;o bem pra mim<br />
</p>',
'creditos' => '<p>Arranjo, voz, viol&otilde;es e slide: Rafael Barros Castro<br />
Acordeom: Marcelo Caldi<br />
Zabumba, gongu&ecirc;, tri&acirc;ngulo e reco-reco: Durval Pereira<br />
Bateria: Diego Soares<br />
Contrabaixo: Cl&aacute;udio Alves<br />
</p>',
'faixa_mp3' => '2015-3.mp3'
] );

ParticipacoesExtras::create( [
'participacoes_id' =>'251',
'faixa_titulo' => 'A Fia de Chico Brito (Ao Vivo)',
'compositor' => '(Chico Anysio)',
'dolp' => 'Do CD “Duas noites para Dolores Duran”, Coqueiro Verde Records CBR 095 (2015)<br/>
Com:<strong> Márcia Castro</strong>',
'letra' => '<p>Sou de f&iacute;a de Chico Brito<br />
Pai de oito fio mai&oacute;<br />
Nascida em Baturit&eacute;<br />
Criada &agrave; carne de s&oacute;r<br />
Sete h&ocirc;me e eu mui&eacute;<br />
Oito f&iacute;o pra cri&aacute;<br />
Sete h&ocirc;me pra peixeira<br />
E a mui&eacute; pra se cas&aacute;</p>

<p>Dos oito f&iacute;o do v&eacute;io<br />
Tem sete que se cas&ocirc;<br />
Os h&ocirc;me fez casamento<br />
E cinco j&aacute; procri&ocirc;<br />
S&oacute; eu &eacute; que t&ocirc; sobrando<br />
Na certa, Deus se engan&ocirc;<br />
Acabo me abilolando<br />
Porque meu caso &eacute; cas&aacute;<br />
E caso de quarqu&eacute; jeito<br />
Caso int&eacute; no milit&aacute;</p>

<p>De tanto piscar os z&oacute;i<br />
J&aacute; t&ocirc; ficando zar&ocirc;ia<br />
De tanto chamar com a m&atilde;o<br />
Nas m&atilde;o j&aacute; tenho int&eacute; b&ocirc;ia<br />
J&aacute; fiz duzentas novena<br />
J&aacute; me cansei de rezar<br />
Meus cutuvelo t&aacute; inchado<br />
De no port&atilde;o debru&ccedil;ar<br />
E caso de quarqu&eacute; jeito<br />
Caso int&eacute; no milit&aacute;!<br />
</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Rodrigo Faour<br />
Dire&ccedil;&atilde;o musical: Paulo Serau<br />
Baixo: Davi Martin<br />
Bateria: Al&ecirc; Cortina<br />
Piano ac&uacute;stico: Tibor Fitel<br />
Trompete: Jos&eacute; Arimat&eacute;a<br />
</p>',
'faixa_mp3' => '2015-7.mp3'
] );


ParticipacoesExtras::create( [
'participacoes_id' =>'251',
'faixa_titulo' => 'Não se Avexe, Não (Ao Vivo)',
'compositor' => '(Chico Anysio / Haydée de Paula)',
'dolp' => 'Do CD “Duas noites para Dolores Duran”, Coqueiro Verde Records CBR 095 (2015)',
'letra' => '<p>Sebasti&atilde;o, meu bem<br />
Anda logo, vem<br />
Vem pra mais perto de mim<br />
Chegadinho assim<br />
Tua mui&eacute; num t&aacute; presente<br />
Quem mandou num t&aacute;?<br />
Vamos dan&ccedil;ar um bucadinho<br />
Larga de me oi&aacute;r</p>

<p>Encrenca n&atilde;o vai dar<br />
Somo de maior<br />
Pode nem dar confus&atilde;o<br />
Se avexe, n&atilde;o<br />
Casquinha &eacute; bom de se tirar<br />
Vamo aproveitar<br />
A melodia do bai&atilde;o</p>

<p>Mas n&atilde;o roda tanto assim<br />
Que se n&atilde;o o vento d&aacute;<br />
Minha saia vai subir<br />
Esse povo todo vai oi&aacute;<br />
Anda, peste, vem pra c&aacute;<br />
Que eu me achego mais proc&ecirc;<br />
Esse beijo eu sei que &eacute; bom<br />
Mas ningu&eacute;m vai ver<br />
</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Rodrigo Faour<br />
Dire&ccedil;&atilde;o musical: Paulo Serau<br />
Baixo: Davi Martin<br />
Bateria: Al&ecirc; Cortina<br />
Piano ac&uacute;stico: Tibor Fitel<br />
Trompete: Jos&eacute; Arimat&eacute;a<br />
</p>',
'faixa_mp3' => '2015-8.mp3'
] );



ParticipacoesExtras::create( [
'participacoes_id' =>'251',
'faixa_titulo' => 'Pela Rua (Ao Vivo)',
'compositor' => '(J. Ribamar / Dolores Duran)',
'dolp' => 'Do CD “Duas noites para Dolores Duran”, Coqueiro Verde Records CBR 095 (2015)',
'letra' => '<p>No ar parado passou um lamento<br />
Riscou a noite e desapareceu<br />
Depois a lua ficou mais sozinha<br />
Foi ficando triste e tamb&eacute;m se escondeu</p>

<p>Na minha vida<br />
Uma saudade meiga<br />
Solu&ccedil;ou baixinho<br />
No meu olhar<br />
Um mundo de tristeza<br />
Veio se aninhar</p>

<p>Minha can&ccedil;&atilde;o ficou assim sem jeito<br />
Cheia de desejos<br />
E eu fui andando pela rua escura<br />
Pra poder chorar<br />
</p>',
'creditos' => '<p>Produ&ccedil;&atilde;o: Rodrigo Faour<br />
Dire&ccedil;&atilde;o musical: Paulo Serau<br />
Arranjo e piano ac&uacute;stico: Tibor Fitel<br />
</p>',
'faixa_mp3' => '2015-9.mp3'
] );


ParticipacoesExtras::create( [
'participacoes_id' =>'253',
'faixa_titulo' => 'Direito de Nascer',
'compositor' => '(Roberto Bastos / Nei Lacerda / Tiba Camargos)',
'dolp' => 'Lançada no YouTube (2015)<br/>
Com:<strong> vários artistas</strong>
',
'letra' => '<p>Tentaram impedir que eu viesse nascer<br />
Planejaram que eu n&atilde;o fosse viver<br />
Disseram que a hora era agora<br />
De calar minha respira&ccedil;&atilde;o</p>

<p>Mas aqui dentro o amor prevaleceu<br />
Quando minha m&atilde;e foi tocada por Deus<br />
&ldquo;Filho n&atilde;o tenha medo<br />
N&atilde;o, n&atilde;o vou desistir&rdquo;</p>

<p>Os meses passavam, eu mandava sinais<br />
Ouvindo a voz de minha m&atilde;e<br />
&ldquo;Nada de mal vai te acontecer<br />
Tens o direito de nascer&rdquo;</p>

<p>Se hoje me escuta, ouve minha voz<br />
Foi por amor que cheguei at&eacute; aqui<br />
Deus n&atilde;o escreve o que n&atilde;o pode cumprir<br />
E o seu amor foi escrito aqui<br />
Em meu cora&ccedil;&atilde;o</p>

<p>Se nos escutam numa s&oacute; voz<br />
Foi por amor que chegamos aqui<br />
Deus n&atilde;o escreve o que n&atilde;o pode cumprir<br />
E o seu amor foi escrito aqui<br />
Em nossos cora&ccedil;&otilde;es</p>

<p>Todos unidos defendendo a vida<br />
Mostrando ao mundo que foi bom nascer<br />
&Eacute; bom viver<br />
</p>',
'creditos' => '<p>Cantores: Elba Ramalho, Dunga PHN, Tiba Camargos, Expresso HG, Eros Biondini, Ziza Fernandes, Eugenio Jorge, Eliana Ribeiro, Salete Ferreira, Bem da Hora, Ricardo S&aacute;, Di&aacute;cono Nelsinho Corr&ecirc;a, M&aacute;rcio Todeschini, Cassiano Meirelles CN, Orlando Junior, Andr&eacute; Florencio, Juliana de Paula, Padre F&aacute;bio de Melo, Adriana Arydes Oficial, Ana Lucia CN, Gilliana Duarte, Dominus e Emanuel St&ecirc;nio</p>',
'faixa_mp3' => '2015-11.mp3'
] );



ParticipacoesExtras::create( [
'participacoes_id' =>'254',
'faixa_titulo' => 'Chapéu de Couro',
'compositor' => '(Natan Marques / Eliakin Rufino)',
'dolp' => 'Do CD Marcelo Barra “Minha aldeia”, Independente (2015)<br/>
Com:<strong> Marcelo Barra</strong>
',
'letra' => '<p>Na cidade de Exu<br />
Nas terras de Pernambuco<br />
Uma sanfona atirada<br />
Caiu nas m&atilde;os de um matuto</p>

<p>Ela vinha da cidade<br />
Ele vinha do sert&atilde;o<br />
Ela inventou a saudade<br />
Ele inventou o bai&atilde;o</p>

<p>Chap&eacute;u de couro<br />
No arrasta-p&eacute;<br />
Dan&ccedil;a at&eacute; homem com homem<br />
Dan&ccedil;a mulher com mulher</p>

<p>Seja xaxado<br />
Seja bai&atilde;o<br />
Seja pra sempre louvado<br />
O nome de Gonzag&atilde;o<br />
</p>',
'creditos' => '<p>Dire&ccedil;&atilde;o musical, arranjo e viol&otilde;es: Natan Marques<br />
Bateria: Maguinho<br />
Baixo: Cl&aacute;udio Rocha<br />
Piano: Beto Corr&ecirc;a<br />
Percuss&atilde;o: M&aacute;rcio Fortes<br />
Acordeom: Toninho Ferragutti<br />
</p>',
'faixa_mp3' => '2015-12.mp3'
] );






ParticipacoesExtras::create( [
'participacoes_id' =>'255',
'faixa_titulo' => 'Distante d’ocê',
'compositor' => '(Hermes Prada)',
'dolp' => 'Do CD com a trilha sonora da novela “Êta mundo bom”, Som Livre (2015)
',
'letra' => '<p>Oi, amor<br />
Eu vim num p&eacute; de vento pra te ver<br />
Cora&ccedil;&atilde;o<br />
Tava doidim de saudade d&rsquo;oc&ecirc;<br />
N&atilde;o deu mais<br />
Pra segurar no peito a paix&atilde;o<br />
Sem voc&ecirc;, flor<br />
Tava demais em mim a solid&atilde;o</p>

<p>Oi, amor<br />
Eu vim aqui s&oacute; pra falar c&rsquo;oc&ecirc;<br />
A saudade<br />
Tava a ponto de me enlouquecer<br />
Que n&atilde;o deu<br />
Pra esquecer a luz do seu olhar<br />
E que sem<br />
O seu carinho eu n&atilde;o sei ficar</p>

<p>Quero saber se a dona lua j&aacute; entregou<br />
Um bilhetinho de amor que eu te mandei<br />
Quero saber se a estrelinha l&aacute; do c&eacute;u<br />
J&aacute; deu o recadin pr&rsquo;oc&ecirc; conforme eu falei</p>

<p>&Eacute; tanto amor que nem cabe mais no peito<br />
Cora&ccedil;&atilde;o de qualquer jeito queria te ver<br />
Pois ele bate, bate todo atrapaiado<br />
Grita num compasso errado distante d&rsquo;oc&ecirc;<br />
Distante d&rsquo;oc&ecirc;, distante d&rsquo;oc&ecirc;<br />
Distante d&rsquo;oc&ecirc;, distante d&rsquo;oc&ecirc;<br />
</p>',
'creditos' => '<p>Arranjo, produ&ccedil;&atilde;o, dire&ccedil;&atilde;o musical e viol&atilde;o de a&ccedil;o: Rannieri Oliveira<br />
Viola de 10: Juno Moraes<br />
Viol&atilde;o de a&ccedil;o: Marcos Arcanjo<br />
Bateria: Tost&atilde;o Queiroga<br />
Zabumba: Durval<br />
Acordeom: Rafael Menin&atilde;o <br />
Baixo: Ney Concei&ccedil;&atilde;o<br />
Percuss&atilde;o: Anjo Caldas</p>',
'faixa_mp3' => '2016-8.mp3'
] );


ParticipacoesExtras::create( [
'participacoes_id' =>'256',
'faixa_titulo' => 'Mãe do Perdão',
'compositor' => '(Liah Soares / Edu Krieger)',
'dolp' => '“Mãe do perdão” - Single digital – Lado Esquerdo Produções (2015)<br />com <strong>Liah Soares</strong>',
'letra' => '<p>
O que move tanta gente<br />
Pelas ruas num só passo?<br />
De repente me entrelaço<br />
Nessa multidão que emana fé<br />
</p>

<p>Marcha firme, segue em frente<br />
Com um imenso relicário<br />
Que consagra em santuário<br />
Todo o coração de Nazaré<br />
</p>


<p>
Nesse mar de luz<br />
Que conduz preces ao céu<br />
Seu sagrado véu<br />
É quem nos guia<br />
</p>

<p>Ouça a canção que ecoa em nossa voz<br />
Mãe do perdão, Maria, olhai por nós<br />
Ouça a canção que ecoa em nossa voz<br />
Mãe do perdão, Maria, rogai por nós<br />
</p>
',
'creditos' => '',
'faixa_mp3' => '2015-14.mp3'
] );



ParticipacoesExtras::create( [
'participacoes_id' =>'257',
'faixa_titulo' => 'Frevo, Paix&atilde;o e Zueira',
'compositor' => '(Andr&eacute; Rio / Rannieri Oliveira)',
'dolp' => 'Coqueiro Verde Records - (single digital) (2016)',
'letra' => '<p>Frevo!<br />
Frevo!<br />
Frevo!<br />
Frevo!</p>

<p>Eu quero ver o caldeir&atilde;o ferver<br />
Quando o frevo rasgar<br />
E eu me encontrar com voc&ecirc;<br />
&Eacute; corpo a corpo<br />
Nosso olhar apaixonado<br />
Beijo sabor de pecado<br />
Fervilhando de prazer</p>

<p>S&atilde;o quatro dias<br />
E eu ainda acho pouco<br />
Do Galo raiando o dia<br />
Ao Marco Zero do povo<br />
A gente se entrega &agrave; fantasia<br />
Se joga na alegria<br />
E faz a festa acontecer</p>

<p>&Eacute; frevo at&eacute; quarta-feira<br />
Zueira, zueira, ai, ai, ah<br />
&Eacute; pra levantar poeira<br />
Poeira, poeira<br />
</p>
',
'creditos' => '<p>Arranjo e teclado: Rannieri Oliveira<br />
Bateria: Tostão Queiroga<br />
Percussão: Anjo Caldas<br />
Baixo: Fofão<br />
Acordeom: Rafael Meninão<br />
Trompete: Enok Chagas<br />
Sax baixo e alto: Gilmar Black<br />
Trombone: Nilson Amarante<br />
Vocais: Bruno Simpson, Cláudia Beija e Ylana Queiroga<br />
</p>',
'faixa_mp3' => '2016-1.mp3'
] );


ParticipacoesExtras::create( [
'participacoes_id' =>'259',
'faixa_titulo' => 'Cria (Canção de Ninar à Vida que Vem)',
'compositor' => '(Maria Dapaz / Xico Bizerra)',
'dolp' => 'Do CD Xico Bizerra “Valsas, canções e tudo o mais que há” Independente (2016)<br />',
'letra' => '<p>Havia a vida<br />
Ávida de ser<br />Havia o ser<br />
Na via do nascer</p>

<p>E a luz ent&atilde;o se fez<br />
A vida fez a vez<br />De ser feliz<br />
De ver a cor do sol</p>

<p>Gr&aacute;vida a vida<br />Vai brotar<br />
Semente que somente<br />
No amor se d&aacute;</p>

<p>No repartir da paz<br />
Acordar capaz de cantar<br />
Toda a beleza<br />
Do parir</p>

<p>Vivida a minha vida<br />
E a vida dela<br />
Tanta maravida<br />
Doce, bela</p>

<p>Saber que veio o sim<br />
E foi-se o n&atilde;o<br />
D&aacute;diva<br />
Divina oferenda humana</p>

<p>Presen&ccedil;a da beleza<br />
Do ninar<br />
Sentir que nunca mais<br />Escurid&atilde;o</p>
</p>
',
'creditos' => '<p>
Produção: Xico Bizerra<br />
Arranjo e violão: Vanutti Macedo<br />
Acordeom: Luizinho de Serra<br />
Baixo: Bráulio Araújo</p>',
'faixa_mp3' => '2016-3.mp3'
] );





ParticipacoesExtras::create( [
'participacoes_id' =>'260',
'faixa_titulo' => 'Encarnação',
'compositor' => '(Tim Rescala)',
'dolp' => 'Do CD com a trilha sonora da novela “Velho Chico”, Som Livre 4360-2 (2016)<br />',
'letra' => '<p>
Encarnação, solidão<br />
Tristeza, rancor<br />
Falta de amor<br />
Tristeza, rancor<br />
Falta de amor
</p>

<p>Cinzento é seu coração<br />
É só dor, Encarnação<br />
Cinzento é seu coração<br />
É só dor, Encarnação</p>
',
'creditos' => '',
'faixa_mp3' => '2016-4.mp3'
] );



ParticipacoesExtras::create( [
'participacoes_id' =>'261',
'faixa_titulo' => 'Pra Incendiar seu Coração',
'compositor' => '(Moraes Moreira / Patinhas)',
'dolp' => 'Do DVD “Spok & Orquestra Forrobodó convidam”, Independente (2016)<br />
com <strong>Maestro Spok</strong>',
'letra' => '<p>Ai, como a fogueira tava fria<br />
Ai, ai, antes de você chegar<br />
Ai, ai, ai, ai, vi a bela que chovia<br />
Uma lágrima na bacia<br />
Era seu nome que ardia<br />
Mas não chegava a brilhar<br />
</p>

<p>Ai, ai, ai, aiê<br />
Ai, ai, aiê, você chegou<br />
Aiê, e tudo então se iluminou<br />
Ô, ô, ô, ô, mas foi um rápido clarão<br />
Chuveirinho prateado<br />
Tinha alguém ao seu lado<br />
Escurecendo o salão<br />
</p>

<p>Mas eu pedi a São João<br />
Pra incendiar, pra incendiar seu coração<br />
O que ele fez não me ensinou<br />
E até hoje ainda sou o seu amor<br />
</p>
',
'creditos' => '',
'faixa_mp3' => '2016-5.mp3'
] );



ParticipacoesExtras::create( [
'participacoes_id' =>'262',
'faixa_titulo' => 'Que Lindos Olhos',
'compositor' => '(Domínio público / adaptação: Villa-Lobos)',
'dolp' => 'Do CD “Brasil de Tuhu – Quarteto Radamés Gnattali (vol. 1)”, Independente (2016)',
'letra' => '<p>
Que lindos olhos<br />
Que lindos olhos tem você<br />
Que ainda hoje<br />
Que ainda hoje eu reparei<br />
</p>

<p>Se eu reparasse<br />
Se eu reparasse há mais tempo<br />
Eu não amava<br />
Eu não amava quem amei<br />
</p>

',
'creditos' => '<p>Direção musical: Carla Rincón<br />
Arranjo: Leandro Braga<br />
Quarteto Radamés Gnattali<br />
Violino: Carla Rincón e Andréia Carizzi<br />
Viola: Estevan Reis<br />
Violoncelo: Hugo Pilger</p>',
'faixa_mp3' => '2016-6-1.mp3'
] );

ParticipacoesExtras::create( [
'participacoes_id' =>'262',
'faixa_titulo' => 'Você Diz que Sabe Tudo',
'compositor' => '(Domínio público / adaptação: Villa-Lobos)',
'dolp' => 'Do CD “Brasil de Tuhu – Quarteto Radamés Gnattali (vol. 1)”, Independente (2016)',
'letra' => '<p>
Você diz que sabe tudo<br />
Mas não sabe namorar<br />
Quero que você diga, ô, lê, lê<br />
Quantos peixes tem o mar<br />
Quero que você diga, ô, lê, lê<br />
Quantos peixes tem o mar<br />
</p>

<p>Quantos peixes tem o mar<br />
Eu não posso te dizer<br />
Que o mar é muito grande, ô, lê, lê<br />
Tenho medo de morrer<br />
Que o mar é muito grande, ô, lê, lê<br />
Tenho medo de morrer<br />
</p>

',
'creditos' => '<p>Direção musical: Carla Rincón<br />
Arranjo: Leandro Braga<br />
Quarteto Radamés Gnattali<br />
Violino: Carla Rincón e Andréia Carizzi<br />
Viola: Estevan Reis<br />
Violoncelo: Hugo Pilger</p>',
'faixa_mp3' => '2016-6-2.mp3'
] );

ParticipacoesExtras::create( [
'participacoes_id' =>'263',
'faixa_titulo' => 'Sol das Lavadeiras',
'compositor' => '(Zé Manoel / Mavi Pugliesi)',
'dolp' => 'Do CD “Delírio de um romance a céu aberto – Zé Manoel”, Joia Moderna (2016)',
'letra' => '<p>
Acorda sol<br />
Mas não sabe namorar<br />
Detrás da ingazeira<br />
Vem, traz manhã<br />
Que a noite é sorrateira<br />
</p>

<p>Acorda sol das lavadeiras<br />
Bem-vindo sol das lavadeiras<br />
Enxuga o pranto das crioulas<br />
Das mãos dessas trabalhadoras<br />
Transforma essas águas num mar de alegria<br />
Assim como nasce o dia<br />
Assim como nasce o dia<br />
Assim como nasce o dia<br />
</p>

<p>Sombreado de palmeira<br />
Resto de matina<br />
Vislumbre rosicler<br />
Arrebol rural<br />
Retorna tão instauradora<br />
Vigora a mão mantenedora<br />
Aflora devolvendo aos campos luz<br />
</p>

<p>Assim como nasce o dia<br />
Assim como nasce o dia<br />
Assim como nasce o dia<br />
Assim como nasce o dia<br />
</p>

<p>Desabrocha a luza flor, flamejante ao leste<br />
Oh, rosa celeste, cai meridional<br />
Assola por detrás dos montes<br />
Raiando, fende o horizonte<br />
Abrasa e manso pelo céu reluz<br />
</p>

<p>Assim como nasce o dia<br />
Assim como nasce o dia<br />
Assim como nasce o dia<br />
Assim como nasce o dia<br />
</p>


',
'creditos' => '<p>Produção: Thiago Marques Luiz<br />
Arranjo e piano: Zé Manoel<br /></p>',
'faixa_mp3' => '2016-7-1.mp3'
] );



ParticipacoesExtras::create( [
'participacoes_id' =>'264',
'faixa_titulo' => 'Ave Maria Sertaneja',
'compositor' => '(Julio Ricardo / O. de Oliveira)',
'dolp' => 'Do CD “Natal Nordestino”, Independente (2016)',
'letra' => '<p>
Quando batem as seis horas<br/>
De joelhos sobre o chão<br/>
O sertanejo reza<br/>
A sua oração<br/>
</p>

<p>Ave Maria<br/>
Mãe de Deus, Jesus<br/>
Nos dê força e coragem<br/>
Pra carregar a nossa cruz<br/>
</p>

<p>Nessa hora bendita e santa<br/>
Devemos suplicar<br/>
À Virgem Imaculada<br/>
Os enfermos vir curar<br/>
</p>

',
'creditos' => '<p>Idealização: Ione Costa<br/>
Coordenação geral: Terezinha do Acordeom<br/>
Coordenação musical, arranjo e sanfona: Gennaro<br/>
Bateria: Zé Mário Drums<br/>
Guitarra: Apolo Natureza<br/>
Baixo: Toninho Tavares<br/>
Zabumba e percussão: Quartinha<br/>
Vocais: Cláudia Beija, Bárbara Aires e Verônica<br/>
</p>',
'faixa_mp3' => '2016-Ave_Maria_sertaneja.mp3'
] );



ParticipacoesExtras::create([
    'participacoes_id' => '265',
    'faixa_titulo' => 'Elba Ramalho Canta em Oração o Folclore do Nordeste. Toque Sanfoneiro Forró, Frevo e Xaxado',
    'compositor' => '(Maradona/Turko/Ricardo Neto/Paulinho Miranda/Rafa do Cavaco/Celsinho Mody/Leo Reis/Tinga)',
    'dolp' => 'Samba Enredo 2017 da Tom Maior<br/>
    Do CD “Sambas de enredo do carnaval de São Paulo 2017”, Independente (2016) com <strong>Bruno Ribas</strong><br>
    citação: “De volta pro aconchego” (Dominguinhos / Nando Cordel)',
    'letra' => '<p><em>Estou de volta pro meu aconchego...</em>
</p>

<p>Esse forro tá gostoso, arretado demais <br/>
Puxa o fole, sanfoneiro<br/>
Arrasta o pé, rapaz<br/>
Elba Ramalho é a flor do Nordeste<br/>
Sou Tom Maior em oração<br/>
Sou cabra da peste<br/>
</p>

<p>Simbora amor<br/>
Hoje a noite é de luar<br/>
Meu cordel em poesia faz a festa no arraiá<br/>
No céu de estrelas<br/>
Fogueiras de São João<br/>
Tem Asa Branca<br/>
Salve o Rei do meu baião<br/>
</p>

<p>Êta povo festeiro<br/>
Que faz levantar poeira<br/>
Coração cangaceiro<br/>
Menina danada, guerreira<br/>
</p>

<p>Ave Maria<br/>
Vou seguindo em romaria<br/>
Ao Padim Ciço minha fé e devoção<br/>
Oh, mãe divina<br/>
Faz chover no meu sertão<br/>
</p>

<p>Nos palcos da vida eu forroziei<br/>
Morte e Vida Severina<br/>
Folia de reis, oi<br/>
Tem cavalhada, a ciranda risca o chão<br/>
Oi, tum, tum, tum, bate forte o coração<br/>
</p>

<p>E quando o vento sacode a cabeleira<br/>
Leva o meu canto retratando esse lugar<br/>
No mexe, mexe<br/>
Vem dançar a quebradeira<br/>
Tão brasileira é a festa popular<br/>
</p>

<p>Frevo e xaxado causa o maior sururu<br/>
Vem ver meu boi na terra do maracatu<br/>
Eu tô com saudades de tu, meu desejo<br/>
Amor, me faz um xamego<br/>
É hora de coroar<br/>
Estou de volta pro meu aconchego<br/>
Nesse cortejo nordestino<br/>
Se avexe não, vem dançar!<br/>
</p>
',
    'creditos' => '<p>Produção: Liga Independente das Escolas de Samba de São Paulo<br/>
Coprodução e direção: R. Pimentel<br/>
Diretor de bateria: Mestre Carlão<br/>
Arranjo e cavacos: Rafa do Cavaco<br/>
Bandolim e solos: Bruninho Carvalho<br/>
Violão 7 cordas: Diego<br/>
Violão 6 cordas: Klebaum Gordinho<br/>
Sanfona: Cristiano Giby<br/>
Músicos de base: Fabiano Sorriso e Vitor da Candelária<br/>
</p>',
    'faixa_mp3' => '2016-Samba_Enredo_Tom_Maior_2017.mp3',
]);

ParticipacoesExtras::create([
    'participacoes_id' => '266',
    'faixa_titulo' => 'Do Avesso',
    'compositor' => '(Juliano Holanda)',
    'dolp' => 'Do CD Almério “Desempena”, Independente (2017) com<strong> Almério</strong>
',
    'letra' => '<p>Pra quem sabe caminhar<br/>
Sem ter pressa de chegar<br/>
Um tropeço pode ser um passo<br/>
Um abraço pode ser um bom começo<br/>
Pra quem sabe se virar do avesso<br/>
</p>

<p>Nesses dias em que é necessário<br/>
Colocar toda a mobília da casa pra fora<br/>
Pra fazer a faxina detalhada<br/>
E limpar bem os quatro cantos da alma<br/>
E mandar toda a má energia embora<br/>
</p>

',
    'creditos' => '<p>Produção, arranjo, violão de nylon e baixo: Juliano Holanda<br/>
Pífano em sol e pífano (baixo) em ré: Philipe Moreira Sales<br/>
Zabumba, caixa, surdo, chimbal, cazé, caxixi, sementes, reco-reco de mola e balde de <br/>
gelo de metal: Maconiel Rocha

</p>',
    'faixa_mp3' => '2017-Do_avesso_(com_Almerio).mp3',
]);
ParticipacoesExtras::create([
    'participacoes_id' => '267',
    'faixa_titulo' => 'Fibra de Cristal',
    'compositor' => '(Sérgio Sá)',
    'dolp' => 'Do CD Sérgio Sá “Sérgio S/A”, Independente (2017)
com <strong>Sérgio Sá</strong>
',
    'letra' => '<p>Me aparece de dentro do peito<br/>
Transmitindo um eterno sinal<br/>
De que estranha matéria ele é feito?<br/>
Fibra fina, fibra de cristal<br/>
</p>

<p>Cruza portas, transpassa paredes<br/>
Pelos ares e mares se lança<br/>
É o fio de todas as redes<br/>
Se estendendo na invisível dança<br/>
</p>

<p>Meu amor<br/>
Quando é teu companheiro que te chama<br/>
A energia fugaz de quem te ama<br/>
Não conhece limites pra te tocar<br/>
</p>

<p>
Neste amor<br/>
Cada impulso é canção que se traduz<br/>
Em som, na velocidade da luz<br/>
Que te alcança antes mesmo de eu cantar<br/>
Te alcança antes mesmo de eu cantar<br/>
</p>

<p>
Sol ardente, camadas de gelo<br/>
Tempestade, avalanche ou vulcão<br/>
Nada vai ser capaz de detê-lo<br/>
No caminho do teu coração<br/>
</p>

<p>
Dá mil voltas em torno do mundo<br/>
Desce o cosmo se preciso for<br/>
Do meu peito ele nasce no fundo<br/>
Pra mandar meus recados de amor<br/>
</p>

',
    'creditos' => '',
    'faixa_mp3' => '2017-Fibra_de_cristal_(com_Sergio_Sa).mp3',
]);

ParticipacoesExtras::create([
    'participacoes_id' => '268',
    'faixa_titulo' => 'Convívio',
    'compositor' => '(Michael Sullivan / Karol Wojtyla)',
    'dolp' => 'Do CD “Versos da alma – Músicas inspiradas nos poemas de Karol Wojtyla, São João Paulo II”, Sony Music (2017)
',
    'letra' => '<p>Sou um de vocês<br/>
Não menti nas canções<br/>
É o papel do poeta<br/>
Adivinhar os corações<br/>
Vos falarei sobre um coração<br/>
Assim eu sou contra os tempos de destruição<br/>
</p>

<p>Com a oração sobre o meu teto de palha<br/>
És tu a minha poesia que cuida da casa<br/>
E nas canções que aliviam a dor<br/>
A melodia suave é um buquê de flores<br/>
</p>

<p>E no meu peito um arrepio de piedade<br/>
De eco e de felicidade<br/>
Sou um de vocês<br/>
Sou um camponês<br/>
Sou um de vocês<br/>
</p>

<p>Fonte de vida na saudade da terra<br/>
Em ti a glória, oh, Cristo em nossa alma<br/>
Na aliança da liberdade<br/>
Na nossa alma<br/>
</p>
<p>E como uma fonte<br/>
Que jorra beleza e amor<br/>
Assim eu sou<br/>
Com simplicidade e sem rancor<br/>
</p>
<p>Eis a palavra<br/>
Nobre, bela<br/>
Que toca o céu<br/>
E enche o meu coração de mel<br/>
</p>

',
    'creditos' => '',
    'faixa_mp3' => '2017-Convivio.mp3',
]);
ParticipacoesExtras::create([
    'participacoes_id' => '269',
    'faixa_titulo' => 'Círio de Nazaré',
    'compositor' => '(Alcymar Monteiro)',
    'dolp' => 'Do single digital de Alcymar Monteiro “Círio de Nazaré”, Somax (2017)
com <strong>Alcymar Monteiro</strong>
',
    'letra' => '<p>Festa de amor<br/>
Encontro de fé<br/>
O povo do Pará festeja<br/>
O Círio de Nazaré<br/>
</p>

<p>Belém, Belém, Belém<br/>
A procissão, a trasladação<br/>
O milagre, a corda<br/>
Tradição, tradução<br/>
</p>

<p>Cantando e rezando<br/>
Sigo a multidão<br/>
Senhora de Nazaré<br/>
Escuta a minha oração<br/>
</p>

<p>Belém, Belém, Belém<br/>
Nazaré, Nazaré, Nazaré<br/>
Abençoa as águas, os rios<br/>
Aguapés e marés<br/>
</p>
<p>Nazaré, Nazaré, Nazaré<br/>
Abençoa os índios, a fauna, a flora<br/>
Os igarapés<br/>
</p>


',
    'creditos' => '',
    'faixa_mp3' => '2017-Cirio_de_Nazare.mp3',
]);

ParticipacoesExtras::create([
    'participacoes_id' => '270',
    'faixa_titulo' => 'Bate Coração (Ao vivo)',
    'compositor' => '(Cecéu)',
    'dolp' => 'Do DVD Ton Oliveira & Amigos “ABC do forró – Homenagem a Antônio Barros e Cecéu”, Independente (2017)<br/>
com <strong>Ton Oliveira</strong>
',
    'letra' => '<p>Bate, bate, bate, coração<br/>
Dentro desse velho peito<br/>
Você já tá acostumado<br/>
A ser maltratado, a não ter direitos<br/>
</p>

<p>Bate, bate, bate, coração<br/>
Não ligue, deixe quem quiser falar<br/>
Porque o que se leva dessa vida, coração<br/>
É o amor que a gente tem pra dar<br/>
Porque o que se leva dessa vida, coração<br/>
É o amor que a gente tem pra dar<br/>
</p>

<p>Oi, tum, tum, bate, coração<br/>
Oi, tum, coração pode bater<br/>
Oi, tum, tum, bate, coração<br/>
Que eu morro de amor com muito prazer<br/>
</p>

<p>As águas só deságuam para o mar<br/>
Meus olhos vivem cheios d&rsquo;água<br/>
Chorando, molhando meu rosto<br/>
De tanto desgosto, me causando mágoas<br/>
</p>

<p>Mas meu coração só tem amor<br/>
Amor deveras mesmo, pra valer<br/>
Por isso a gente pena, sofre e chora, coração<br/>
E morre todo dia sem saber<br/>
Por isso a gente pena, sofre e chora, coração<br/>
E morre todo dia sem saber<br/>
</p>


',
    'creditos' => '',
    'faixa_mp3' => '2017-Bate_coracao(Ao_vivo).mp3',
]);
ParticipacoesExtras::create([
    'participacoes_id' => '271',
    'faixa_titulo' => 'Voltei Recife (Ao vivo)',
    'compositor' => '(Luiz Bandeira)',
    'dolp' => 'Do DVD Nena Queiroga “Pernambuco para o mundo”, Independente (2017)
com <strong>Nena Queiroga</strong>
',
    'letra' => '<p>Voltei, Recife<br/>
Foi a saudade que me trouxe pelo braço<br/>
Quero ver novamente Vassouras<br/>
Na rua abafando<br/>
Tomar umas e outras<br/>
E cair no passo<br/>
</p>

<p>Cadê Toureiros<br/>
Cadê Bola de Ouro<br/>
As Pás, os Lenhadores<br/>
O Bloco Batutas de São José<br/>

</p>

<p>Quero sentir<br/>
A embriaguez do frevo<br/>
Que entra na cabeça<br/>
Depois toma o corpo<br/>
E acaba no pé<br/>
</p>
<e><strong>Hino do Elefante de Olinda</strong><br/>
<em>(Clídio Nigro / Clóvis Vieira)</em>
</p>
<p>Ao som dos clarins de Momo<br/>
O povo aclama com todo ardor<br/>
O Elefante exaltando as suas tradições<br/>
E também seu esplendor<br/>
</p>

<p>Olinda, esse meu canto<br/>
Foi inspirado em teu louvor<br/>
Entre confetes, serpentinas, venho te oferecer<br/>
Com alegria o meu amor<br/>
</p>

<p>Olinda, quero cantar a ti<br/>
Essa canção<br/>
Teus coqueirais, o teu sol, o teu mar<br/>
Faz vibrar meu coração<br/>
De amor a sonhar<br/>
De Olinda sem igual<br/>
Salve o teu carnaval<br/>
</p>
',
        'creditos' => 'Produção: Nena Queiroga<br/>
Guitarra: Leandro Melo<br/>
Guitarra e viola: Junior Chumbago<br/>
Baixo: Eliel Neto<br/>
Teclados: Roberth Lucianno<br/>
Bateria: Fernandinho Lopes<br/>
Percussão: Vitamina e Lara Klaus<br/>
Sanfona: Luizinho de Serra<br/>
Trombone: Kid Bone<br/>
Trompete: Baby e Paulo Lima<br/>
Sax: Derivaldo e Junior Sorriso<br/>
Vocais: Ylana Queiroga, Clara Neves e Patrícia Sampaio<br/>
',
    'faixa_mp3' => '2017-Voltei_Recife--Hino_do_Elefante_de_Olinda.mp3',
]);



ParticipacoesExtras::create([
    'participacoes_id' => '272',
    'faixa_titulo' => 'É Proibido Cochilar (Ao vivo)',
    'compositor' => '(Antônio Barros)',
    'dolp' => 'Do DVD Waldonys “Meu ninho”, Independente (2017)
com <strong>Waldonys</strong>
',
    'letra' => '<p>O forró daqui é melhor que o seu<br/>
O sanfoneiro é muito melhor<br/>
As moreninhas a noite inteira<br/>
Na brincadeira levanta pó<br/>
</p>

<p>É animado, ninguém cochila<br/>
Chega faz fila pra dançar<br/>
Na entrada está escrito<br/>
É proibido cochilar<br/>
</p>

<p>É proibido cochilar<br/>
Cochilar, cochilar<br/>
É proibido cochilar<br/>
Cochilar, cochilar<br/>
</p>
<p>A poeira sobe, o suor desce<br/>
A gente vê o sol raiar<br/>
O sanfoneiro padece<br/>
Mas não pode reclamar<br/>
</p>
<p>Se está ganhando dinheiro<br/>
É bom dinheiro ganhar<br/>
Ele leu na entrada<br/>
Que é proibido cochilar<br/>
</p>


',
    'creditos' => 'Produção, arranjo e sanfona: Waldonys<br/>
Guitarra: Lu de Souza<br/>
Violão de 12 cordas: Eduardo Holanda<br/>
Baixo: Edson Sancho<br/>
Bateria: Neo dos Santos<br/>
Zabumba: Gilson Monteiro<br/>
Triângulo: Chico Viola<br/>
Vocais: Nívea Monteiro e Ingrid Sales<br/>
',
    'faixa_mp3' => '2017-e_proibido_cochilar.mp3',
]);



ParticipacoesExtras::create([
    'participacoes_id' => '273',
    'faixa_titulo' => 'Deixa Clarear',
    'compositor' => '(Jorge de Altinho / Joãozinho Soares)',
    'dolp' => 'Do CD “Forró, festa e São João”, Independente (2018)
com <strong>Waldonys</strong>
',
    'letra' => '<p>Quero ver amanhecer<br/>
Deixa o dia clarear<br/>
Eu quero ver poeira nessa brincadeira<br/>
Até o sol raiar<br/>
</p>

<p>Vim de tão longe pra ficar contigo<br/>
E pra ficar comigo vieste também<br/>
Deixa o forró chegar de manhãzinha<br/>
Que hoje tu és minha<br/>
E eu sou teu, meu bem<br/>
</p>

<p>Tô satisfeito<br/>
Coração no peito batendo desse jeito<br/>
É grande a emoção<br/>
Deixa o amor matar esta saudade<br/>
Que felicidade, eita tentação!<br/>

</p>


',
    'creditos' => '',
    'faixa_mp3' => '2018-Deixa_clarear_(com_Waldonys).mp3',
]);
ParticipacoesExtras::create([
    'participacoes_id' => '274',
    'faixa_titulo' => 'Xaxado no Chiado',
    'compositor' => '(Yuri Queiroga / Lucy Alves)',
    'dolp' => 'Do single digital de Lucy Alves, Warner Music (2018)
com <strong>Lucy Alves</strong>
',
    'letra' => '<p>A minha flor desabrochou<br/>
Do meu casulo a borboleta voou<br/>
Estrela que brilha<br/>
Segura no meu braço, vamo pra quadrilha<br/>
Estrela que brilha<br/>
Segura no meu braço, vamo pra quadrilha<br/>
</p>

<p>Anarriê, alavantú<br/>
Olha a chuva, choveu, passou<br/>
Os ciganos cantam pra lua<br/>
E a noiva canta para o seu amor<br/>

</p>

<p>É xaxado no chiado, é o chinelo no chão<br/>
É o solo no solado, é fogo de São João<br/>
Vou me jogar nos teus braços<br/>
Vou te dar meu coração<br/>
Que nem Maria Bonita nos braços de Lampião<br/>
</p>


',
    'creditos' => '',
    'faixa_mp3' => '2018-Xaxado_no_chiado_(com_Lucy_Alves).mp3',
]);
ParticipacoesExtras::create([
    'participacoes_id' => '275',
    'faixa_titulo' => 'Em Belém, Nossa Senhora',
    'compositor' => '(Waldeci Farias)',
    'dolp' => 'Do CD Karen Keldani “O girassol”, Independente (2018)
com <strong>Karen Keldani</strong>
',
    'letra' => '<p>Em Belém, Nossa Senhora<br/>
Em Nazaré, Nossa Senhora<br/>
Em Jerusalém, Nossa Senhora<br/>
Com Jesus, com Jesus, com Jesus<br/>
</p>

<p>Eu também, Nossa Senhora<br/>
Quero ficar, Nossa Senhora<br/>
Hoje e para sempre, Nossa Senhora<br/>
Com Jesus, com Jesus, com Jesus<br/>
</p>

<p>E lá no céu, Nossa Senhora<br/>
Continua sua grande história<br/>
Com Jesus, com Jesus, com Jesus<br/>
Na santa e eterna glória<br/>
</p>


',
    'creditos' => '<p>Arranjo, dire&ccedil;&atilde;o musical, guitarra, viol&atilde;o, vocal, percuss&atilde;o e programa&ccedil;&atilde;o de cordas: Fernando Monteiro<br/>
    Baixo: Johnny Lotti<br/>
    Bateria: Samuel de Andrade<br/>
    Piano, &oacute;rg&atilde;o, teclado: Denis Almeida</p>',
    'faixa_mp3' => '2018-EmBelemNossa-Senhora-karen.mp3',
]);
ParticipacoesExtras::create([
    'participacoes_id' => '276',
    'faixa_titulo' => 'Frevo Mulher',
    'compositor' => '(Zé Ramalho)',
    'dolp' => 'Do single digital de Ivo Meirelles e Funk’n Lata, SambaPop (2018)
com <strong>Ivo Meirelles e Funk’n Lata</strong>
',
    'letra' => '<p>Quantos aqui ouvem os olhos eram de <br/>
Quantos elementos amam aquela mulher<br/>
Quantos homens eram inverno, outros verão<br/>
Outonos caindo secos no solo da minha mão<br/>
</p>

<p>Gemeram entre cabeças a ponta do esporão<br/>
A folha do não me toque e o medo da solidão (solidão)<br/>
Veneno meu companheiro desatado cantador<br/>
E desemboca no primeiro açude do meu amor<br/>
</p>

<p>É quando o tempo sacode a cabeleira<br/>
A trança toda vermelha<br/>
Um olho cego vagueia<br/>
Procurando por um<br/>
</p>


',
    'creditos' => '',
    'faixa_mp3' => '2018-Frevo_Mulher_(com_Ivo_Meirelles_e_Funkn_Lata).mp3',
]);
ParticipacoesExtras::create([
    'participacoes_id' => '277',
    'faixa_titulo' => 'Flor Bela',
    'compositor' => '(Átila Lima / Edi)',
    'dolp' => 'Do single digital da Banda Eva, Independente (2018)
com <strong>Banda Eva</strong>
',
    'letra' => '<p>Eu vou te dar<br/>
O azul do mar<br/>
Minha linda flor, bela flor<br/>
E o paraíso doce<br/>
Que meu coração criou<br/>

</p>

<p>Meu coração dispara se vejo você<br/>
O tempo não revela<br/>
Como é bonita a espera<br/>
Eu simplesmente encontrei o amor<br/>

</p>

<p>Meu coração balança<br/>
Feito uma criança<br/>
Se estou com você<br/>
Eu tô de bem com a vida<br/>
Eu simplesmente encontrei o amor<br/>

</p>
<p>Eu vou ligar pra te falar de amor<br/>
Tô precisando desse teu calor<br/>
Eu tô querendo ter você pra mim<br/>
Vou te plantar no meu jardim<br/>
</p>


',
    'creditos' => '',
    'faixa_mp3' => '2018-Flor_Bela_(com_Banda_Eva).mp3',
]);
ParticipacoesExtras::create([
    'participacoes_id' => '278',
    'faixa_titulo' => 'Olhinhos de Fogueira',
    'compositor' => '(Luiz Fidélis)',
    'dolp' => 'Do EP digital de Luan Estilizado “Esquenta São João”, Som Livre (2018)
com <strong>Luan Estilizado</strong>
',
    'letra' => '<p>Explodiu meu coração<br/>
Feito bomba no São João<br/>
Quando deslizei as mãos<br/>
Pelas suas costas nuas<br/>
</p>

<p>Vi estrela no salão<br/>
Luar cheio de balão<br/>
Teus olhinhos de fogueira<br/>
Me queimando de paixão<br/>
</p>

<p>Chão batido de chuvinha<br/>
Só pra ver tuas perninhas<br/>
Tuas perninhas grossas<br/>
Dançar São João na roça<br/>
</p>
<p>Roça de milho, roça meu filho<br/>
Roça assim teu corpo em mim<br/>
Roça mulata, roça a batata<br/>
Roça assim teu corpo em mim<br/>

</p>


',
    'creditos' => '',
    'faixa_mp3' => '2018-Olhinhos_de_fogueira_(com_Luan_Estilizado).mp3',
]);
ParticipacoesExtras::create([
    'participacoes_id' => '279',
    'faixa_titulo' => 'Eu Só Quero um Xodó (Ao vivo)',
    'compositor' => '(Dominguinhos / Anastácia)',
    'dolp' => 'Do CD Fulô de Mandacaru “In concert”, Independente (2018)
com <strong>Fulô de Mandacaru</strong>
',
    'letra' => '<p>Que falta eu sinto de um bem<br/>
Que falta me faz um xodó<br/>
Mas como eu não tenho ninguém<br/>
Eu levo a vida assim tão só<br/>
</p>

<p>Eu só quero um amor<br/>
Que acabe o meu sofrer<br/>
Um xodó pra mim<br/>
Do meu jeito assim<br/>
Que alegre o meu viver<br/>
</p>

',
    'creditos' => '',
    'faixa_mp3' => '2018-Eu_so_quero_um_xodo_(Ao vivo).mp3',
]);
ParticipacoesExtras::create([
    'participacoes_id' => '280',
    'faixa_titulo' => 'A Luz dos Meus Olhos',
    'compositor' => '(Rafa Virgulino)',
    'dolp' => 'Do CD Enok Virgulino “Forró bom é aqui”, Independente (2018)
com <strong>Enok Virgulino</strong>
',
    'letra' => '<p>No silêncio me achei<br/>
E baixinho rezei no escuro<br/>
Fé nessa oração<br/>
E ponho em tuas mãos o futuro<br/>
</p>

<p>Ó, Santa Luzia<br/>
Conservai a luz dos meus olhos<br/>
Pra que eu possa ver as belezas<br/>
De tantas riquezas da criação<br/>
Ver a magia no sorriso de uma criança<br/>
O brilho do sol e as cores<br/>
Das flores que a vida trouxe cá pra mim<br/>
</p>
<p>Hoje enxergo a cegueira do mundo<br/>
E as pessoas visando o poder<br/>
Mas a fé e o amor que me movem<br/>
Me levam a crer<br/>
</p>
<p>Que a janela da alma dos homens<br/>
Mostre além do que se possa ver<br/>
O milagre dos olhos de Deus<br/>
Que o coração vê<br/>
</p>
',
    'creditos' => '',
    'faixa_mp3' => '2018-A_luz_dos_meus_olhos_(com_Enok_Virgulino).mp3',
]);
ParticipacoesExtras::create([
    'participacoes_id' => '281',
    'faixa_titulo' => 'A Nossa Voz',
    'compositor' => '(Xororó / Tonny / Kleber)',
    'dolp' => 'Do single digital Amigos do Bem “A nossa voz”, Independente (2018)
com <strong>vários artistas</strong>
',
    'letra' => '<p>Tudo o que eu quero é um país sem medo<br/>
De corrigir seus erros, de crescer e de sonhar<br/>
Somos índios, brancos, amarelos, negros<br/>
Somos um gigante pronto pra despertar<br/>
</p>

<p>Tô querendo, mesmo, um país seguro<br/>
Que tenha justiça, mais saúde e educação<br/>
Nossa terra é fértil, linda e tão jovem<br/>
A mudança está em nossas mãos<br/>
</p>
<p>Esse é o país que eu quero construir<br/>
Com o nosso povo andando de mãos dadas vamos conseguir<br/>
Esse é o Brasil, somos milhões<br/>
E o futuro depende só de nós<br/>
Nada irá calar a nossa voz<br/>
</p>
<p>É, quero poder andar em segurança<br/>
Sem medo, eu só tenho esperança<br/>
Quem vem de baixo também alcança<br/>
Não mais ser julgado se o corpo balança<br/>
</p>
<p>O povo quer paz, a gente quer mais<br/>
A revolução é a gente que faz<br/>
É hora de a gente mostrar<br/>
Que ainda somos racionais<br/>
</p>
<p>Lutei para sorrir, sempre resistir<br/>
(Eu quero sorrir, ser feliz por aqui)<br/>
Vencer e ser feliz, por paz e amizade<br/>
(Com liberdade)<br/>
Sim, esse é o louvor, te peço, meu Senhor<br/>
(Um país de amor, sem distinção de cor)<br/>
Ajude o meu povo a sair dessa escravidão<br/>
(Sem maldade)<br/>
</p>
<p>Nunca desistimos, somos brasileiros<br/>
(...amor para guerreiras e guerreiros então)<br/>
Temos a esperança viva em cada olhar<br/>
(Ordem e progresso só com união)<br/>
Tudo o que eu quero é um país sem muros<br/>
Respeitar a sua e ter a minha opinião<br/>
Nossos filhos herdarão o que plantamos<br/>
A semente está em nossas mãos<br/>
</p>
',
    'creditos' => 'Cantam: Chitãozinho & Xororó, Paulo Miklos, Thiaguinho, Luan Santana, Michel Teló,<br/>
     Gilberto Gil, Sandy, Andreas Kisser, Família Lima, Marcos & Belutti, Alcione, Paula Fernandes,<br/>
      Toni Garrido, Karol Conka, Projota, Negra Li, Rappin Hood, Seu Jorge, Ivete Sangalo, Rogério Flausino,<br/>
       Maria Gadu, Junior Lima, Caetano Veloso, Elba Ramalho, Daniel, Tonny & Kleber e Allison Lima<br/>
Direção geral e violão: Xororó<br/>
Produção musical: Cláudio Paladini<br/>
Arranjo de base: Xororó e Cláudio Paladini<br/>
Arranjo de cordas: Lucas Lima<br/>
Bateria: Junior Lima<br/>
Baixo: Dudinha<br/>
Guitarra: Andreas Kisser<br/>
Violão e guitarra: Edson Guidetti<br/>
Piano, hammond e acordeom: Cláudio Paladini<br/>
Cordas: Família Lima, Aramís Rocha, Deni Rocha, Robson Rocha e Daniel Pires<br/>
',
    'faixa_mp3' => '2018-A_nossa_voz_(com_varios_artistas).mp3',
]);
ParticipacoesExtras::create([
    'participacoes_id' => '282',
    'faixa_titulo' => 'Juninamente',
    'compositor' => '(Raphael Costa / Cezzinha Thomaz)',
    'dolp' => 'Do CD Raphael Costa “Diamante hortelã”, Independente (2018)
com <strong>Raphael Costa</strong>
',
    'letra' => '<p>Vindo de longe daqui <br/>
Pra leste do meu sertão<br/>
Trouxe no cheiro a maré<br/>
Novas pro meu coração<br/>
</p>

<p>Fez do meu corpo o que quis<br/>
Por bem roubou minha mão<br/>
Numa quadrilha na festa<br/>
No dia de São João<br/>
</p>
<p>De milho, de fogueira<br/>
Se fez o nosso pão<br/>
Pela noite inteira<br/>
Me negou o não<br/>
</p>
<p>Juninamente<br/>
A saudade desfez-se em meu peito<br/>
A chuva lavou<br/>
</p>
<p>Na correnteza dos olhos do tal<br/>
A vontade de amar me levou<br/>
Num veleiro rio afora<br/>
Deu no mar e ancorou<br/>
</p>

',
    'creditos' => 'Produção e sanfona: Marcelo Jeneci<br/>
Coprodução: Raphael Costa<br/>
Violão 7 cordas: Pedro Fonseca<br/>

',
    'faixa_mp3' => '2018-juninamente.mp3',
]);
ParticipacoesExtras::create([
    'participacoes_id' => '283',
    'faixa_titulo' => 'Valsa de uma cidade',
    'compositor' => '(Ismael Netto / Antônio Maria)',
    'dolp' => 'Do clipe da campanha “Rio desistir jamais”, lançada apenas no YouTube (2018) com <strong>vários artistas</strong>

',
    'letra' => '<p>Vento do mar no meu rosto<br/>
E o sol a queimar, queimar<br/>
Calçada cheia de gente<br/>
A passar e a me ver passar<br/>
</p>

<p>Rio de Janeiro, gosto de você<br/>
Gosto de quem gosta<br/>
Desse céu, desse mar<br/>
Dessa gente feliz<br/>
</p>
<p>Bem que eu quis escrever<br/>
Um poema de amor e o amor<br/>
Estava em tudo que eu vi<br/>
Em tudo quanto eu amei<br/>
</p>
<p>E no poema que eu fiz<br/>
Tinha alguém mais feliz que eu<br/>
O meu amor...<br/>
</p>


',
    'creditos' => 'Cantam: Rogério Flausino, Di Ferrero, Anitta, Dinho Ouro Preto, Samuel Rosa, André<br/>
     Frateschi, Herbert Vianna, Elba Ramalho, Iza, Evandro Mesquita, Fernanda Abreu, Toni <br/>
     Garrido, Andreas Kisser, Digão, Tony Bellotto, George Israel, Marcelo D2, Amanda<br/>
     Richter, Babauí, Bruno Gouveia, Fiuk, Juliane Trevisol, Karen Junqueira, Livia Rossi<br/>
     Marcos Frota, Nelson Freitas, Rodrigo Santos, Will e Zé Ricardo
',
    'faixa_mp3' => '2018-valsa_de_uma_cidade.mp3',
]);
ParticipacoesExtras::create([
    'participacoes_id' => '284',
    'faixa_titulo' => 'Eu sou o São João',
    'compositor' => '(Del Feliz / Ton Olivieira / Fábio Salvador)',
    'dolp' => 'Música-tema da campanha de registro do Forró como patrimônio imaterial do Brasil, lançada apenas no YouTube (2018) com <strong>Flávio José, Nando Cordel, Del Feliz, Santanna, Ton Oliveira, Elba Ramalho, Alcymar Monteiro e Tato</strong>

',
    'letra' => '<p>Eu sou<br/>
Uma zabumba, um triângulo e um pandeiro<br/>
Uma sanfona no colo do sanfoneiro<br/>
Que contagia e não tem hora pra parar<br/>
</p>

<p>Eu sou<br />
Sou cordelista, repentista e violeiro<br />
Sou bandeirinhas coloridas no terreiro<br />
Onde a alegria manda a tristeza dan&ccedil;ar<br />
</p>
<p>Sou quadrilheiro, chinelo e chapéu de palha<br />
Sou pau de fita, sou de toda cor<br />
Sou a beleza da rainha do milho<br />
Sou paz e amor<br />
</p>
<p>Sou vaqueiro nordestino<br />
Vitalino, Gonzag&atilde;o<br />
Sou a menina enfeitada de chita, bonita<br />
Eu sou o S&atilde;o Jo&atilde;o<br />
</p>
<p>
Coco de roda e xaxado no pé<br />
Arrasta-pé, xote e baião<br />
Eu sou um povo, sou plural num só, sou o forró<br />
Eu sou o São João<br />
</p>
<p>
Eu sou<br />
Comida típica, o quentão e o licor<br />
O resfulengo que embala o dançador<br />
Sou a história dessa gente a festejar<br />
</p>
<p>
Eu sou<br />
Sou a zabumba, o triângulo e o pandeiro<br />
Uma sanfona no colo do sanfoneiro<br />
Que contagia e não tem hora pra parar<br />
</p>
<p>
Sou casamento caipira e pau de sebo<br />
Sou quebra pote, sou quadriculado<br />
Sou bandeirola, os fogos e fogueiras<br />
Sorriso estampado<br />
</p>
<p>
Sou autenticidade<br />
Sou raiz e tradição<br />
Sou um desenho de xilogravura, cultura<br />
Eu sou o São João<br />
</p>
<p>
Coco de roda e xaxado no pé<br />
Arrasta-pé, xote e baião<br />
Eu sou um povo, sou plural num só, sou o forró<br />
Eu sou o São João<br />
</p>


',
    'creditos' => 'Sanfona: Fábio Salvador<br />
    Zabumba: Budiu Show<br />
    Triângulo: Joelson Barros<br />
    Guitarra: Leandro Farias<br />
    Edição, programação, teclados, baixo e bateria: Jeremias Felix<br />
    Violino: Noa<br />
',
    'faixa_mp3' => '2018 - Eu_sou_o_sao_joao.mp3',
]);



}
}