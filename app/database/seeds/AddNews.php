<?php

class AddNews extends Seeder {

	public function run()
	{
		DB::table('news')->delete(); // deleting old records.

        News::create( [
                'author_id' => '1',
                'slugs' => 'nos_ares_de_lisboa',
                'title' => 'O disco tem 4 canções de Dominguinhos, sendo 3 inéditas: “Olhando o coração” e a dobradinha “Nos ares de Lisboa/Um passarinho enganador”',
                'article' => '<p class="news-txt">Das 12 músicas que integram “Do meu olhar pra fora”, novo trabalho de Elba Ramalho, quatro carregam a assinatura de Dominguinhos. Além do clássico “Contrato de separação”, composta pelo artista em parceria com Anastácia, Elba apresenta três canções inéditas. A primeira delas, a faixa de abertura, é o cartão de vistas do disco: “Olhando o coração”, parceria com o poeta Climério, que traz um arranjo que remete ao balanço de ritmos como xote e baião, mas com uma pegada pop/contemporânea. A dobradinha “Nos ares de Lisboa / Um passarinho enganador”, letrada por Fausto Nilo, conta com a participação especialíssima da nova estrela da música portuguesa Carminho. Mostra que a obra de Elba, assim como a de Dominguinhos, cruza as fronteiras dos oceanos rítmicos.</p>
                <p class="news-video"><iframe width="640" height="360" src="https://www.youtube.com/embed/jYNxEY9uBxc" controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>
                <p class="news-video"><iframe width="640" height="360" src="https://www.youtube.com/embed/-aVrHg4MOto" controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>
                <p class="news-video"><iframe width="640" height="360" src="https://www.youtube.com/embed/YqsLQxKHHgw" controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>',
                'img' => 'vitrine07.jpg',
                'fonte' => 'Assessoria de Imprensa'
                //'created_at' => '2016-07-26 23:17:32'
        ] );
        News::create( [
                'author_id' => '1',
                'slugs' => 'chico_cesar_participacao',
                'title' => 'Chico César faz participação especial em novo disco de Elba Ramalho',
                'article' => '<p class="news-txt">“Patchuli foi uma encomenda, foi um pedido meu pra Chico César”, conta Elba Ramalho sobre a canção - feita especialmente para “Do Meu Olhar Pra Fora” -, que conta com a participação especial do cantor e compositor paraibano. Inédita, a música recebeu arranjo de metais de Nilsinho Amarante, com direito a Mestre Spok no sax, entre outros. Confira no vídeo abaixo!</p>
                <p class="news-video"><iframe width="640" height="360" src="https://www.youtube.com/embed/cAI6kxwxM3w" controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>',
                'img' => 'vitrine03.jpg',
                'fonte' => 'Assessoria de Imprensa'
        ] );
        News::create( [
                'author_id' => '1',
                'slugs' => 'elba_dueto_carminho',
                'title' => 'Elba Ramalho faz dueto com a cantora portuguesa Carminho em seu novo disco',
                'article' => '<p class="news-txt">Provando que sua música não tem fronteiras e enriquecendo o caráter eclético de seu novo disco, Elba Ramalho apresenta aos fãs um dueto com a cantora portuguesa Carminho. A canção escolhida é o fado “Nos Ares de Lisboa – Um Passarinho Enganador”, inédita de Dominguinhos e Fausto Nilo. Saiba mais sobre o encontro das duas artistas assistindo ao depoimento de Elba Ramalho abaixo!</p>
                <p class="news-video"><iframe width="640" height="360" src="https://www.youtube.com/embed/jYNxEY9uBxc" controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>',
                'img' => 'vitrine06.jpg',
                'fonte' => 'Assessoria de Imprensa'
        ] );
        News::create( [
                'author_id' => '1',
                'slugs' => 'a_poesia_de_dominguinhos',
                'title' => 'A poesia de Dominguinhos e DJ Dolores em uma única canção',
                'article' => '<p class="news-txt">“Olhando o Coração”, primeira faixa do novo álbum, mostra a que veio Elba Ramalho. Até então inédita, a canção é poesia em dose dupla: à beleza da composição de Dominguinhos e Climério houve o acréscimo da poesia de DJ Dolores. Com um misto inusitado de instrumentos, como pífano, kalimba e zabumba, a música representa o cartão-postal perfeito para “Do Meu Olhar Pra Fora”.</p>
                <p class="news-video"><iframe width="640" height="360" src="https://www.youtube.com/embed/-aVrHg4MOto" controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>',
                'img' => 'vitrine03.jpg',
                'fonte' => 'Assessoria de Imprensa'
        ] );
News::create( [
        'author_id' => '1',
        'slugs' => 'elba_volta_cantar_frances',
        'title' => 'Neste novo trabalho, Elba voltou a gravar em francês. Desta vez, uma dolente canção sobre separação: “La noyée”.',
        'article' => '<p class="news-txt">Um um disco marcado pela diversidade rítmica, transitando entre o reggae e o fado, o ápice é a música “La noyée”, de um dos grandes nomes da música francesa, Serge Gaisnbourg. Sugerida por Yuri Queiroga, um dos produtores do álbum, a canção só entrou no repertório após certa insistência. Elba acabou cedendo ao desafio e, para fazer bonito, contou com uma aula de pronúncia com ex-cônsul da França. Confira no vídeo exclusivo:</p>
        <p class="news-video"><iframe width="640" height="360" src="https://www.youtube.com/embed/4m5E4QjRVbQ" controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>',
        'img' => 'vitrine04.jpg',
        'fonte' => 'Assessoria de Imprensa'
] );
News::create( [
        'author_id' => '1',
        'slugs' => 'arvore_mais_pedida_radio',
        'title' => '“Árvore” é a mais pedida na Rádio MPB FM antes mesmo do lançamento do disco.',
        'article' => '<p class="news-txt">Em dezembro de 2014, foi lançado um aperitivo do novo disco de Elba Ramalho, “Do meu olhar pra fora”. Tratava-se de um EP para o iTunes com três faixas, como forma de aperitivo para o que estava por vir. Logo a seguir, uma delas, “Árvore”, já se consolidava como a mais pedida na rádio MPB FM do Rio de Janeiro. A canção do baiano Edson Gomes é um clássico do reggae nacional e é “um despertar para a delicadeza, para com os animais, a natureza, principalmente para com o ser humano”, nas palavras de Elba. Confira o vídeo da série “faixa a faixa”:</p>
        <p class="news-video"><iframe width="640" height="360" src="https://www.youtube.com/embed/cBLs7hm0Mlo" controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>',
        'img' => 'vitrine05.jpg',
        'fonte' => 'Assessoria de Imprensa'
] );
News::create( [
        'author_id' => '1',
        'slugs' => 'do_meu_olhar_pra_fora',
        'title' => '“Do meu olhar pra fora”, novo CD de Elba Ramalho, já está nas lojas e em todas as plataformas digitais.',
        'article' => '<p class="news-txt">“Do meu olhar pra fora”, o novo trabalho de Elba Ramalho, já está nas lojas de todo o Brasil e também nas plataformas digitais. Chega recheado de surpresas, sendo a maior delas a sonoridade pop/contemporânea. O disco também está disponível para degustação no canal do YouTube da gravadora Coqueiro Verde Records.</p> <p>Confira:<br/>
        <p class="news-materia"><a href="http://www.youtube.com/watch?v=7jmqxE_g5lE&amp;list=PLrzr8ul1N3DqEODkp4IY2a6nbakP5Gd5Z">Veja Aqui!</a></p>
                <p class="text-center">"Clique aqui e compre o novo álbum de Elba Ramalho no iTunes!" </p>
                <a href="http://loja.coqueiroverderecords.com/elba-ramalho-do-meu-olhar-pra-fora.html" class="post-comprar-btn" target="blank">Comprar</a></p>',
        'img' => 'vitrine10.jpg',
        'fonte' => 'Assessoria de Imprensa'
] );
News::create( [
        'author_id' => '1',
        'slugs' => 'elba_outubro_rosa',
        'title' => 'Elba é capa da edição sobre o Outubro Rosa da revista da Gol Linhas Aéreas Inteligentes.',
        'article' => '<p class="news-txt">O "Outubro Rosa" é uma campanha de conscientização que tem como objetivo principal alertar as mulheres e a sociedade sobre a importância da prevenção e do diagnóstico precoce do câncer de mama. Nesta edição da revista da Gol Linhas Aéreas Inteligentes, Elba conta como foi sua jornada na luta contra o câncer e dá um exemplo de fé, otimismo e amor próprio. Confira abaixo!</p>
        <span class="news-img"><img src="http://www.elbaramalho.com.br/images/news/extras/gol2.jpg"></span>
        <span class="news-img"><img src="http://www.elbaramalho.com.br/images/news/extras/gol3.jpg"></span>
        <span class="news-img"><img src="http://www.elbaramalho.com.br/images/news/extras/gol4.jpg"></span>',
        'img' => 'vitrine08.jpg',
        'fonte' => 'Assessoria de Imprensa'
] );

News::create( [
        'author_id' => '1',
        'slugs' => 'corda_gonzaga_Afins',
        'title' => 'Vem aí o novo DVD de Elba: show “Cordas, Gonzaga e Afins”.',
        'article' => '<p class="news-txt">Em breve chegará às lojas, via Coqueiro Verde Records, o novo DVD de Elba, com o registro do espetáculo “Cordas, Gonzaga e Afins”, apresentado em setembro de 2014 no Chevorlet Hall (Olinda/PE). Elba recebeu dois convidados especais: o músico Naná Vasconcelos e o cantor e compositor Marcelo Jeneci. Sai nos formatos DVD e kit DVD/CD. Enquanto isso, leia aqui a crítica do jornalista carioca Mauro Ferreira, feita para o blog Notas Musicais na estreia do show em Salvador/BA.</p>
        <div class="post-txt">
                                <ul>
                                    <li></li>
                                    <li><p class="materia"><span><span style="color: #3d85c6;">♪</span></span><span style="color: #990000;">&nbsp;</span><span style="color: #783f04;">"Na voz que canta tudo ainda arde"</span>. Espetáculo de arquitetura teatral, <i><b><span style="color: blue;">Cordas, Gonzaga e afins</span></b></i> está em sintonia com o histórico honroso de Elba Ramalho em palcos brasileiros, repondo a carreira da intérprete paraibana nos trilhos após discos e shows pautados por menor ambição artística. A criação de um espetáculo centrado na obra seminal de Luiz Gonzaga (1912 - 1989) - a mais perfeita tradução das alegrias e tristezas do Nordeste do Brasil - pode até sugestionar paralelismo com o show derivado do álbum <i><b><span style="color: #783f04;">Elba canta Luiz</span></b></i> (BMG, 2002) e perpetuado no DVD e CD <i><b><span style="color: #20124d;">Elba ao vivo</span></b></i> (BMG, 2003). Mas nada é do jeito que já foi um dia porque - tal como mentalizado pela jornalista e produtora cultural Margot Rodrigues, idealizadora do espetáculo patrocinado pelo projeto Natura Musical - Elba divide a bela cena com o grupo pernambucano SaGRAMA e com as cordas do também pernambucano Quarteto Encore. O uso dessa formação clássica na abordagem do cancioneiro popular de Gonzaga - e dos compositores afinados com sua obra - dá frescor a todo o repertório costurado pelo diretor André Brasileiro com textos do dramaturgo pernambucano Newton Moreno em roteiro sagaz que faz o sertão virar mar na transposição do primeiro para o segundo ato. Não são apenas cordas - e elas já seriam muito. Elba canta Gonzaga com arranjos calcados em <i>mix</i> renovador de cordas, percussões, sopros e a sanfona de Beto Hortis. De certa maneira, a temática do primeiro ato de <i><b><span style="color: blue;">Cordas, Gonzaga e afins</span></b></i> remete a um dos melhores espetáculos da carreira da cantora, <i><b><span style="color: #783f04;">Leão do Norte</span></b></i> (1996), por focar as agruras do sertanejo que precisa ser um forte para vencer a batalha cotidiana de sua vida seca - como cantou o rei da nação nordestina no baião <i><span style="color: #0b5394;">Algodão</span></i> (Luiz Gonzaga e Zé Dantas, 1983), uma das músicas de Gonzaga selecionadas para o roteiro repleto de novidades na voz valente de Elba, ora ouvida nos tons mais graves da maturidade. Leoa, Elba também teve que ser forte na travessia Paraíba-Rio de Janeiro feita em 1974, há 40 longos anos. Por isso, há verdade quando ela entra em cena, da plateia, dando voz a&nbsp;<i><span style="color: #0b5394;">Pau de arara</span></i> (Luiz Gonzaga e Guio de Moraes, 1952) &nbsp;Por isso, também, poucas vozes têm - como a de Elba - credibilidade para cantar um repertório de <i>paixões jagunças</i>, para citar termo usado em um dos imagéticos textos de Newton Moreno salpicados no roteiro bem urdido. Quando o telão exibe imagens de Elba no início da carreira, enquanto a intérprete revive <span style="color: #0b5394;"><i>Não sonho mais</i></span> (Chico Buarque, 1979), tudo faz sentido porque <i><b><span style="color: blue;">Cordas, Gonzaga e afins</span></b></i> é - também - o espetáculo comemorativo dos 35 anos de carreira fonográfica da leoa. Brava, Elba não se deixa dominar e apagar em cena pela imponência das orquestrações do SaGRAMA -&nbsp;grupo pernambucano criado em 1995 pelo flautista e maestro Sérgio Campelo, diretor musical do espetáculo - e do Quarteto Encore. A introdução e as passagens villa-lobianas do arranjo de <i><span style="color: #0b5394;">Súplica cearense</span></i> (Gordurinha e Nelinho, 1967) exemplificam a maestria dos grupos no tratamento orquestral da obra de Gonzaga. <i><span style="color: #0b5394;">Súplica cearense</span></i> é o primeiro grande momento do show, cuja estreia nacional foi realizada em 23 de agosto de 2014 em apresentação que lotou o Teatro Castro Alves, em Salvador (BA). Mas outros grandes momentos se seguiram - como o <i>link</i> inteligente de <i><span style="color: #0b5394;">Assum branco </span></i>(José Miguel Wisnik e Tom Zé, 1994) com <i><span style="color: #0b5394;">Assum preto</span></i> (Luiz Gonzaga e Humberto Teixeira, 1950). Esta toada dolente é pungentemente cantada por Elba com os olhos vendados por suas mãos, em belo efeito cênico e de interpretação. Surte efeito também a ação de Elba abrir um livro ou um envelope ao dizer os textos de Newton Moreno. Sem inventar moda, o diretor André Brasileiro - ligado ao teatro do Recife (PE) - conduz Elba com delicadeza e sensibilidade por roteiro de músicas como <i><span style="color: #0b5394;">O ciúme</span></i> (Caetano Veloso, 1987), majestosamente emoldurada pelas cordas do Encore e entoada com Elba sentada em caixote que complementa o cenário construído com elementos de tom apropriadamente rústico. O tom de&nbsp;<i><span style="color: #0b5394;">Béradêro</span></i> (Chico César, 1995), número-vinheta em que Elba reproduz os tons agrestes de seu canto nos anos 1970. Na sequência, <i><span style="color: #0b5394;">Ave Maria sertaneja</span></i> (Júlio Ricardo e Osvaldo de Oliveira, 1964) abre bloco de clima sacro em que vida, religião e morte se entrelaçam, culminando com <i><span style="color: #0b5394;">Funeral de um lavrador</span></i> (Chico Buarque sobre texto de João Cabral de Melo Neto, 1964). A propósito, a lembrança do poeta recifense João Cabral de Melo Neto (1920 - 1999) - cujo texto da cigana em sua obra-prima <i><span style="color: #783f04;"><b>Morte e vida severina</b></span></i> (1955) é dito em cena por Elba - é oportuna porque a obra de João Cabral também retrata com fidelidade e poesia esse universo de paixões jagunças. Balaio de sementes, como poetizado por Elba em outro texto de <i><b><span style="color: blue;">Cordas, Gonzaga e afins</span></b></i>, o cancioneiro do <i>Rei do Baião</i> frutifica em cena ao som dos compositores afins como o cantor e compositor pernambucano Accioly Neto (1950 - 2000) - de quem Elba revive <i><span style="color: #0b5394;">A natureza das coisas</span></i> (2000) em número de empatia popular - e o cantor e compositor pernambucano Alceu Valença, representado por <i><span style="color: #0b5394;">Tomara</span></i> (Alceu Valença e Rubem Valença Filho, 1990). Mas o eixo do roteiro reside na obra de <i>Gonzagão</i>, cuja pouco ouvida toada <i><span style="color: #0b5394;">Adeus, Iracema</span></i> (Luiz Gonzaga e Zé Dantas, 1962) faz o sertão virar mar a partir do segundo ato, iniciado com a itinerante <i><span style="color: #0b5394;">A violeira</span></i> (Antonio Carlos Jobim e Chico Buarque, 1983). Esse mar fundo abarca a <i><span style="color: #0b5394;">Ciranda praieira</span></i> (1998) de Lenine e Paulo César Pinheiro, remexendo em águas de Pernambuco, terra do frevo de bloco <i><span style="color: #0b5394;">Aquela rosa</span></i> (Geraldo Azevedo e Carlos Fernando, 1979) e de maracatus como&nbsp;<i><span style="color: #0b5394;">Braia dengosa</span></i> (Luiz Gonzaga e Guio de Moraes, 1952), outro título pouco ouvido do cancioneiro de um rei que extrapolou o universo do baião. Para quem acompanha a trajetória de Elba, <i><b><span style="color: blue;">Cordas, Gonzaga e afins</span></b></i> mostra músicas nunca encaradas pela leoa, que, mesmo insegura com a letra de <i><span style="color: #0b5394;">Domingo no parque</span></i> (Gilberto Gil, 1967), oferece boa interpretação deste clássico da fase tropicalista da obra do compositor baiano Gilberto Gil. Nessa música, o SaGRAMA se guia pela orquestração emblemática do maestro Rogério Duprat (1932 - 2006) sem deixar de pôr seu toque pessoal no tema. Na sequência,&nbsp;<i><span style="color: #0b5394;">Sanfona sentida</span></i> (Dominginhos e Anastácia, 1973) e<i><span style="color: #0b5394;"> Sete meninas</span></i> (Dominguinhos e Toinho Alves, 1975) reiteram a salutar intenção de renovação do repertório de Elba que pareceu pautar os criadores de <i><b><span style="color: blue;">Cordas, Gonzaga e afins</span></b></i>, espetáculo que culmina com bloco de temas juninos em arremate que ainda pode ficar mais espontaneamente animado à medida em que o show ganhar chão na turnê nacional que vai passar por mais seis capitais do Brasil até novembro de 2014. No todo, <i><b><span style="color: blue;">Cordas, Gonzaga e afins</span></b></i> devolve a Elba Ramalho o status de grande intérprete dos palcos. "<span style="color: #783f04;">Tanta gente canta, tanta</span> <span style="color: #783f04;">gente cala"</span>. Sobre toda a estrada, pavimentada no Rio de Janeiro há 40 anos, paira a monstruosa força dessa voz que ainda arde.</p></li>
                                    <li><p class="text-center">Roteiro:</p></li>
                                    <li><p class="text-center"><img src="http://www.elbaramalho.com.br/images/news/extras/roteiro.jpg"></p></li>
                                </ul>
                            </div>',
        'img' => 'vitrine11.jpg',
        'fonte' => '<a href="http://www.blognotasmusicais.com.br/2014/08/elba-faz-seu-sertao-virar-mar" target="blank">blognotasmusicais.com.br</a>'
] );






News::create( [
        'author_id' => '1',
        'slugs' => 'single_frevo_video_frevo',
        'title' => 'Single inédito cujo vídeo evoca frevos de folias antigas',
        'article' => '<p class="news-txt">Tradicional voz dos Carnavais de Pernambuco, onde conquistou público fiel ao longo de quase 40 anos de carreira, Elba Ramalho vai lançar single com a gravação de frevo inédito de autoria de André Rio e Rannieri Oliveira. Disponível nas plataformas digitais a partir da próxima sexta-feira, 22 de janeiro de 2016, o single <strong>Frevo, paixão e zueira</strong> gerou lyric video - já em rotação  no YouTube - com imagens que lembram os 35 frevos gravados pela cantora paraibana em discografia solo iniciada em 1979. Reminiscências de frevos de folias antigas à parte, <strong>Frevo, paixão e zueira</strong> se alinha com as melhores gravações de Elba no gênero. O refrão é capaz de levantar poeira na folia!!</p>
        <span class="news-img"></span>
        
        <p class="news-video">
        <iframe width="640" height="360" src="https://www.youtube.com/embed/Y1bifIn6W4w?rel=0" showinfo=0"  frameborder="0" allowfullscreen></iframe></p><br/>
        ',
        'img' => 'vitrine12.jpg',
        'fonte' => '<a href="http://www.blognotasmusicais.com.br/2016/01/elba-lanca-single-com-frevo-inedito.html" target="blank">blognotasmusicais.com.br</a>'
] );


News::create( [
        'author_id' => '1',
        'slugs' => 'single_frevo_novo_patamar',
        'title' => 'Elba Ramalho leva música de Gonzagão a novo patamar. Junto a orquestra, cantora é emoldurada por seus herdeiros na MPB',
        'article' => '<p class="news-txt">RIO - Elba Ramalho começa o show andando por entre as mesas do Classic Hall, em Recife, entoando os versos de “Pau de arara”, de Luiz Gonzaga e Guio de Moraes: “Só trazia a coragem e a cara/ Vindo num pau de arara/ Eu penei, mas aqui cheguei”. Parece um concerto modesto (impressão reforçada por uma senhorinha que tecla ao celular enquanto a paraibana passa, com seu figurino multicolorido), mas não é nada disso: a embaixadora da música nordestina, com patrocínios da Natura Musical, do governo federal e outros, é a estrela de uma obra grandiosa.</br></br>
        Com o grupo instrumental <strong>SaGrama</strong>, o quarteto de cordas Encore e um repertório de clássicos de Gonzagão e de seus descendentes musicais, Elba, aos 63 anos (a gravação é de setembro de 2014), mostra todos os lados de sua competência artística. Ao lado de parceiros como Margot Rodrigues, que assina o projeto, e André Brasileiro, diretor do show, a cantora é a responsável pelo roteiro, em parceria com os dois e mais Alexandre Valentim.</br></br>
        E, apesar da grandeza de tudo o que envolve este “Cordas, Gonzaga e afins” — o Nordeste nunca foi mesmo chegado a sutilezas —, o roteiro é a estrela maior do espetáculo, amarrando, sem sobras, a árvore genealógica de Luiz Gonzaga, que vai da “Súplica cearense” (Gordurinha e Nelinho) ao “Assum branco” de José Miguel Wisnik; da “Violeira” de Tom & Chico aos filhos e sobrinhos mais próximos, como Alceu Valença e Dominguinhos, em uma viagem sem solavancos em lombo de jegue.</br></br>
        Embrulhada com luxo pela voz e pela teatralidade de Elba, com bom gosto (mas sem esconder o sotaque) e maestria dos músicos — Naná Vasconcelos, Marcelo Jeneci e Marcelo Caldi são mais algumas das feras envolvidas —, uma sinfonia para apresentar o Nordeste ao mundo, caso este, atrasadinho, ainda não o conheça.</p>

        <p class="news-video">
        <video controls preload="none" width="100%"  poster="http://www.elbaramalho.com.br/images/news/extras/oglobo.jpg" controls>
          <source src="https://voddownload01.video.globo.com/v0/0e/ab/2f/4745446_2ffc4d49344af0e42c80370529d7e153e0289e49/4745446-web360.mp4?h=050214532376343802580804145324123488376041531eyVnDFZ0jA5o2ejh4I8uNg&k=html5" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
        </p>',
        'img' => 'vitrine13.jpg',
        'fonte' => '<a href="http://oglobo.globo.com/cultura/musica/critica-elba-ramalho-leva-musica-de-gonzagao-novo-patamar-18501046" target="blank">Bernardo Araujo (oglobo)</a>'
] );





News::create( [
        'author_id' => '1',
        'slugs' => 'elba_apresenta_dvd_cd_cordas_gonzaga_e_afins',
        'title' => 'Elba apresenta o DVD/CD "Cordas, Gonzaga e Afins"',
        'article' => '<p class="news-txt">Em pequenos vídeos, Elba apresenta e comenta em detalhes seu novo trabalho, o DVD/CD "Cordas, Gonzaga e Afins".</p>

        <p class="news-video">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/XjMKw08rAiQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>
        <p class="news-video">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/1SM9sZtrhH0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>

        <p class="news-video">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/Eth69mGaVsw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>

        <p class="news-video">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/wqDS8cxyZfk?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>

        <p class="news-video">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/km2MMQbE3zI?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>
        <p class="news-video">
        <iframe width="640" height="360" src="https://www.youtube.com/embed/lSdP4Wdp08o?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>
        <p class="news-video">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/Ayv-K5P_de8?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>',
        'img' => 'vitrine14.jpg',
        'fonte' => ' '
] );



News::create( [
        'author_id' => '1',
        'slugs' => 'distante_de_oce_tema_novela_eta_mundo_bom',
        'title' => 'Veja aqui o clipe-letra de "Distante d&#39;ocê&quot;, tema da novela &quot;Êta mundo bom!&quot; (TV Globo).',
        'article' => '<p class="news-txt">A música "Distante d&#39;ocê&quot; foi gravada por Elba especialmente para a trilha da novela das 18h &quot;Êta mundo bom!&quot;, da TV Globo. A canção é tema dos personagens Romeu (Klebber Toledo) e Mafalda (Camila Queiroz) e acaba de ganhar um clipe-letra, ilustrado pelo artista André Menezes. Veja aqui:</p>

        <p class="news-video">
        <iframe width="640" height="360" src="https://www.youtube.com/embed/lth4QPqovgM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </p>
      ',
        'img' => 'vitrine15.jpg',
        'fonte' => 'Assessoria de Imprensa'
] );


News::create( [
        'author_id' => '1',
        'slugs' => 'tom_maior_no_carnaval_2017_de_sao_saulo',
        'title' => 'Elba será homenageada pela G.R.E.S. Tom Maior no Carnaval 2017 de São Paulo',
        'article' => '<p class="news-txt">
        Em abril deste ano, Elba foi escolhida pela Escola de Samba Tom Maior para ser homenageada no Carnaval de 2017 com o enredo: "Elba Ramalho canta em oração o folclore do Nordeste - Toque sanfoneiro forró, frevo e xaxado..."
        </br></br>
    A Tom Maior sagrou-se vice-campeã do Grupo de Acesso do Carnaval 2016 homenageando o cantor Milton Nascimento. Com isso, conquistou o direito de desfilar no Grupo Especial no ano que vem: ela abrirá os desfiles de São Paulo na sexta-feira, dia 24 de fevereiro.
 </br></br>
 Participe do Facebook da Tom Maior e mantenha-se atualizado sobre tudo o que a Escola está preparando: <a href="https://www.facebook.com/grestommaior/?fref=ts" style="color:#ff0000;" >facebook grestommaior</a> </br></br>
 O jornalista Sidney Rezende também mostra o dia a dia do Carnaval e da Tom Maior em seu site: 
<a href="http://www.sidneyrezende.com/tag/tom_maior" style="color:#ff0000;">sidneyrezende.com</a><br><br>
O samba-enredo já foi escolhido pela comunidade da Escola para ser apresentado no Sambódromo do Anhembi. Confira: <a href="https://www.youtube.com/watch?v=ZG4stNGFQ9c" style="color:#ff0000;">CONFIRA!</a>
        </p>
      ',
        'img' => 'vitrine16.jpg',
        'fonte' => 'Assessoria de Imprensa'
] );


News::create( [
        'author_id' => '1',
        'slugs' => 'o_grande_encontro_esta_de_volta',
        'title' => 'O Grande Encontro está de volta!',
        'article' => '<p class="news-txt">
        O grande reencontro de Alceu Valença, Elba Ramalho e Geraldo Azevedo"
        </br></br>
    Roberta Pennafort/O Estado de São Paulo
 </br></br>
 Vinte anos depois, o grande reencontro nordestino: Alceu Valença, Elba Ramalho e Geraldo Azevedo, sem Zé Ramalho, voltam a fazer shows juntos. Na turnê pelo País que começa nos dias 17 e 18, no Metropolitan, no Rio, eles apresentam novidades: as inéditas “O melhor presente”, parceria de Geraldo, Toni Garrido e Elba, compositora bissexta, “Só depois de muitos anos”, de Geraldo e Abel Silva, “Ciranda da traição”, só de Alceu. “Me dá um beijo”, de Geraldo e Alceu, lançada há 44 anos, se soma ao repertório, baseado em sucessos das últimas quatro décadas.</br></br>
 Esta é a terceira configuração do encontro. Com as carreiras entrelaçadas desde os primeiros palcos, nos anos 1970, quando se fixaram no Rio, os artistas se reuniram em quarteto em 1996. Gravaram um CD ao vivo. Viraram um trio, com a saída de Alceu, no ano seguinte, e lançaram um CD de estúdio. Em 2000, ainda com os mesmos integrantes, veio “O Grande Encontro 3”. A trilogia superou um milhão de cópias vendidas.<br><br>

 Leia mais em: <a href="http://cultura.estadao.com.br/noticias/musica,o-grande-reencontro-de-alceu-valenca-elba-ramalho-e-geraldo-azevedo,10000073665" style="color:#ff0000;">cultura.estadao.com.br/noticias/o-grande-reencontro-de-alceu-valenca-elba-ramalho-e-geraldo-azevedo</a>
 <br><br>

 Acompanhe as novidades e novas datas pelo Facebook do grupo: <a href="https://www.facebook.com/o.gnd.encontro/?fref=ts" style="color:#ff0000;">grupo gnd.encontro</a>

        </p>
      ',
        'img' => 'vitrine17.jpg',
        'fonte' => 'Assessoria de Imprensa'
] );




	}

}