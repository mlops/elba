@extends('layout.master')
@section('title', '/////#Elba Ramalho - Discos ')@stop
@section('head-script')
@parent
<script type="text/javascript">

</script>  
<style>
p.critica {

    margin: 0;
    padding: 100px;

}
p.fonte {
    padding-left: 5%;
    text-align: center;
}
p.fonte a{
    color: black;
}
p.fonte a:link{
    color: black;
}
p.fonte a:hover,
a:focus, a:visited {
    color: red;
    text-decoration: none;
}
</style>
@stop
@section('content')

<section id="post" class="section-container post-permalink">
    <div class="permalink-container">
        <header class="post-header">
            <h2>Vem aí o novo DVD de Elba: show “Cordas, Gonzaga e Afins”.</h2>
            <p class="post-date">Publicado: 30/10/2015</p>
            </header>

            <div class="post-thumb">
                <img src="{{  URL::to(Config::get('caminho.server_public').'/images/news/vitrine09a.jpg') }}" alt="My Life">        </div>
                <div class="post-body">
                </div>
                <footer class="post-footer">
                    <div class="post-txt">
                        <ul>
                            <li><p class="materia">

Em breve chegará às lojas, via Coqueiro Verde Records, o novo DVD de Elba, com o registro do espetáculo “Cordas, Gonzaga e Afins”, apresentado em setembro de 2014 no Chevorlet Hall (Olinda/PE). Elba recebeu dois convidados especais: o músico Naná Vasconcelos e o cantor e compositor Marcelo Jeneci. Sai nos formatos DVD e kit DVD/CD.
Enquanto isso, leia aqui a crítica do jornalista carioca Mauro Ferreira, feita para o blog Notas Musicais na estreia do show em Salvador/BA.
</p></li>
                            <li><p class="materia"><br>
                            <p class="materia"></p></p></li>
                            <li></li>
                            <li><p class="critica"><span style="background-color: white; font-family: 'Trebuchet MS', Trebuchet, sans-serif; font-size: 15px; line-height: 20.7900009155273px;"><span style="color: #3d85c6;">♪</span></span><span style="background-color: white; color: #990000; font-family: 'Trebuchet MS', Trebuchet, sans-serif; font-size: 15px; line-height: 20.7900009155273px;">&nbsp;</span><span style="color: #783f04;">"Na voz que canta tudo ainda arde"</span>. Espetáculo de arquitetura teatral, <i><b><span style="color: blue;">Cordas, Gonzaga e afins</span></b></i> está em sintonia com o histórico honroso de Elba Ramalho em palcos brasileiros, repondo a carreira da intérprete paraibana nos trilhos após discos e shows pautados por menor ambição artística. A criação de um espetáculo centrado na obra seminal de Luiz Gonzaga (1912 - 1989) - a mais perfeita tradução das alegrias e tristezas do Nordeste do Brasil - pode até sugestionar paralelismo com o show derivado do álbum <i><b><span style="color: #783f04;">Elba canta Luiz</span></b></i> (BMG, 2002) e perpetuado no DVD e CD <i><b><span style="color: #20124d;">Elba ao vivo</span></b></i> (BMG, 2003). Mas nada é do jeito que já foi um dia porque - tal como mentalizado pela jornalista e produtora cultural Margot Rodrigues, idealizadora do espetáculo patrocinado pelo projeto Natura Musical - Elba divide a bela cena com o grupo pernambucano SaGRAMA e com as cordas do também pernambucano Quarteto Encore. O uso dessa formação clássica na abordagem do cancioneiro popular de Gonzaga - e dos compositores afinados com sua obra - dá frescor a todo o repertório costurado pelo diretor André Brasileiro com textos do dramaturgo pernambucano Newton Moreno em roteiro sagaz que faz o sertão virar mar na transposição do primeiro para o segundo ato. Não são apenas cordas - e elas já seriam muito. Elba canta Gonzaga com arranjos calcados em <i>mix</i> renovador de cordas, percussões, sopros e a sanfona de Beto Hortis. De certa maneira, a temática do primeiro ato de <i><b><span style="color: blue;">Cordas, Gonzaga e afins</span></b></i> remete a um dos melhores espetáculos da carreira da cantora, <i><b><span style="color: #783f04;">Leão do Norte</span></b></i> (1996), por focar as agruras do sertanejo que precisa ser um forte para vencer a batalha cotidiana de sua vida seca - como cantou o rei da nação nordestina no baião <i><span style="color: #0b5394;">Algodão</span></i> (Luiz Gonzaga e Zé Dantas, 1983), uma das músicas de Gonzaga selecionadas para o roteiro repleto de novidades na voz valente de Elba, ora ouvida nos tons mais graves da maturidade. Leoa, Elba também teve que ser forte na travessia Paraíba-Rio de Janeiro feita em 1974, há 40 longos anos. Por isso, há verdade quando ela entra em cena, da plateia, dando voz a&nbsp;<i><span style="color: #0b5394;">Pau de arara</span></i> (Luiz Gonzaga e Guio de Moraes, 1952) &nbsp;Por isso, também, poucas vozes têm - como a de Elba - credibilidade para cantar um repertório de <i>paixões jagunças</i>, para citar termo usado em um dos imagéticos textos de Newton Moreno salpicados no roteiro bem urdido. Quando o telão exibe imagens de Elba no início da carreira, enquanto a intérprete revive <span style="color: #0b5394;"><i>Não sonho mais</i></span> (Chico Buarque, 1979), tudo faz sentido porque <i><b><span style="color: blue;">Cordas, Gonzaga e afins</span></b></i> é - também - o espetáculo comemorativo dos 35 anos de carreira fonográfica da leoa. Brava, Elba não se deixa dominar e apagar em cena pela imponência das orquestrações do SaGRAMA -&nbsp;grupo pernambucano criado em 1995 pelo flautista e maestro Sérgio Campelo, diretor musical do espetáculo - e do Quarteto Encore. A introdução e as passagens villa-lobianas do arranjo de <i><span style="color: #0b5394;">Súplica cearense</span></i> (Gordurinha e Nelinho, 1967) exemplificam a maestria dos grupos no tratamento orquestral da obra de Gonzaga. <i><span style="color: #0b5394;">Súplica cearense</span></i> é o primeiro grande momento do show, cuja estreia nacional foi realizada em 23 de agosto de 2014 em apresentação que lotou o Teatro Castro Alves, em Salvador (BA). Mas outros grandes momentos se seguiram - como o <i>link</i> inteligente de <i><span style="color: #0b5394;">Assum branco </span></i>(José Miguel Wisnik e Tom Zé, 1994) com <i><span style="color: #0b5394;">Assum preto</span></i> (Luiz Gonzaga e Humberto Teixeira, 1950). Esta toada dolente é pungentemente cantada por Elba com os olhos vendados por suas mãos, em belo efeito cênico e de interpretação. Surte efeito também a ação de Elba abrir um livro ou um envelope ao dizer os textos de Newton Moreno. Sem inventar moda, o diretor André Brasileiro - ligado ao teatro do Recife (PE) - conduz Elba com delicadeza e sensibilidade por roteiro de músicas como <i><span style="color: #0b5394;">O ciúme</span></i> (Caetano Veloso, 1987), majestosamente emoldurada pelas cordas do Encore e entoada com Elba sentada em caixote que complementa o cenário construído com elementos de tom apropriadamente rústico. O tom de&nbsp;<i><span style="color: #0b5394;">Béradêro</span></i> (Chico César, 1995), número-vinheta em que Elba reproduz os tons agrestes de seu canto nos anos 1970. Na sequência, <i><span style="color: #0b5394;">Ave Maria sertaneja</span></i> (Júlio Ricardo e Osvaldo de Oliveira, 1964) abre bloco de clima sacro em que vida, religião e morte se entrelaçam, culminando com <i><span style="color: #0b5394;">Funeral de um lavrador</span></i> (Chico Buarque sobre texto de João Cabral de Melo Neto, 1964). A propósito, a lembrança do poeta recifense João Cabral de Melo Neto (1920 - 1999) - cujo texto da cigana em sua obra-prima <i><span style="color: #783f04;"><b>Morte e vida severina</b></span></i> (1955) é dito em cena por Elba - é oportuna porque a obra de João Cabral também retrata com fidelidade e poesia esse universo de paixões jagunças. Balaio de sementes, como poetizado por Elba em outro texto de <i><b><span style="color: blue;">Cordas, Gonzaga e afins</span></b></i>, o cancioneiro do <i>Rei do Baião</i> frutifica em cena ao som dos compositores afins como o cantor e compositor pernambucano Accioly Neto (1950 - 2000) - de quem Elba revive <i><span style="color: #0b5394;">A natureza das coisas</span></i> (2000) em número de empatia popular - e o cantor e compositor pernambucano Alceu Valença, representado por <i><span style="color: #0b5394;">Tomara</span></i> (Alceu Valença e Rubem Valença Filho, 1990). Mas o eixo do roteiro reside na obra de <i>Gonzagão</i>, cuja pouco ouvida toada <i><span style="color: #0b5394;">Adeus, Iracema</span></i> (Luiz Gonzaga e Zé Dantas, 1962) faz o sertão virar mar a partir do segundo ato, iniciado com a itinerante <i><span style="color: #0b5394;">A violeira</span></i> (Antonio Carlos Jobim e Chico Buarque, 1983). Esse mar fundo abarca a <i><span style="color: #0b5394;">Ciranda praieira</span></i> (1998) de Lenine e Paulo César Pinheiro, remexendo em águas de Pernambuco, terra do frevo de bloco <i><span style="color: #0b5394;">Aquela rosa</span></i> (Geraldo Azevedo e Carlos Fernando, 1979) e de maracatus como&nbsp;<i><span style="color: #0b5394;">Braia dengosa</span></i> (Luiz Gonzaga e Guio de Moraes, 1952), outro título pouco ouvido do cancioneiro de um rei que extrapolou o universo do baião. Para quem acompanha a trajetória de Elba, <i><b><span style="color: blue;">Cordas, Gonzaga e afins</span></b></i> mostra músicas nunca encaradas pela leoa, que, mesmo insegura com a letra de <i><span style="color: #0b5394;">Domingo no parque</span></i> (Gilberto Gil, 1967), oferece boa interpretação deste clássico da fase tropicalista da obra do compositor baiano Gilberto Gil. Nessa música, o SaGRAMA se guia pela orquestração emblemática do maestro Rogério Duprat (1932 - 2006) sem deixar de pôr seu toque pessoal no tema. Na sequência,&nbsp;<i><span style="color: #0b5394;">Sanfona sentida</span></i> (Dominginhos e Anastácia, 1973) e<i><span style="color: #0b5394;"> Sete meninas</span></i> (Dominguinhos e Toinho Alves, 1975) reiteram a salutar intenção de renovação do repertório de Elba que pareceu pautar os criadores de <i><b><span style="color: blue;">Cordas, Gonzaga e afins</span></b></i>, espetáculo que culmina com bloco de temas juninos em arremate que ainda pode ficar mais espontaneamente animado à medida em que o show ganhar chão na turnê nacional que vai passar por mais seis capitais do Brasil até novembro de 2014. No todo, <i><b><span style="color: blue;">Cordas, Gonzaga e afins</span></b></i> devolve a Elba Ramalho o status de grande intérprete dos palcos. "<span style="color: #783f04;">Tanta gente canta, tanta</span> <span style="color: #783f04;">gente cala"</span>. Sobre toda a estrada, pavimentada no Rio de Janeiro há 40 anos, paira a monstruosa força dessa voz que ainda arde.</p></li>
                            <li><p class="chamada-itunes">Roteiro:</p></li>
                            <li><p class="chamada-itunes"><img src="{{ URL::to(Config::get('caminho.server_public').'/images/news/extras/roteiro.jpg') }}" ></p></li>
                            <li><p class="fonte">Fonte:<br>
                            <a href="http://www.blognotasmusicais.com.br/2014/08/elba-faz-seu-sertao-virar-mar-no.html" target="blank">http://www.blognotasmusicais.com.br/2014/08/elba-faz-seu-sertao-virar-mar-no.html</a></p></li>
                        </ul>
                    </div>

                        <ul class="tag-list invisible">
                            <li><a href="" rel="tag">tag lista</a></li>
                            <li><a href="" rel="tag">tag lista</a></li>
                        </ul>
                </footer>
                </div>
                <div class="related-posts">
                    <header class="related-posts-header"></header>
                    <article class="related-item">
                        <div class="related-item-inner">
                        <div class="post-thumb">
                                <a href="{{ URL::to('/news/4') }}">
                                  <img src="{{ URL::to(Config::get('caminho.server_public').'/images/news/el05.jpg') }}" alt="Elba 2015"> 
                                </a>
                            </div>
                            <footer class="post-footer invisible">
                                <a class="title" href=""><h3>Elba 2015</h3></a>
                                <a class="readmore" href="">Elba 2015</a>
                            </footer>
                        </div>
                    </article>
                    <article class="related-item">
                        <div class="related-item-inner">
                            <div class="post-thumb">
                                <a href="{{ URL::to('/news/1') }}">
                                 <img src="{{ URL::to(Config::get('caminho.server_public').'/images/news/elb01.jpg') }}" alt="Elba 2015"> 
                                </a>
                            </div>
                            <footer class="post-footer invisible">
                                <a class="title" href=""><h3>Elba 2015</h3></a>
                                <a class="readmore" href="">Elba 2015</a>
                            </footer>
                        </div>
                    </article>
                    <article class="related-item">
                        <div class="related-item-inner">
                            <div class="post-thumb">
                                <a href="{{ URL::to('/news/6') }}">
                                   <img src="{{ URL::to(Config::get('caminho.server_public').'/images/news/elb06.jpg')}}" alt="Elba 2015"> 
                                </a>
                            </div>
                            <footer class="post-footer invisible">

                                <a class="title" href=""><h3>Elba 2015</h3></a>
                                <a class="readmore" href="">Elba 2015</a>
                            </footer>
                        </div>
                    </article>
                </div>
            </section>

            @stop 

            @section('script-js')

            @stop
