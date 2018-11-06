@extends('layout.master4')
@section('title', '/////#Elba Ramalho-Biografia ')
@section('head-script')
    @parent
    <style>
    .ps-container {
        position: absolute;
        width: 100%;
        height: 90.5%;
        overflow: hidden;
        /*text-transform: uppercase;*/
        color: #555;
        background: #fff;
    }
    .ps-container > div {
        position: absolute;
        width: 50%;
    }
    .ps-container > div > div,
    .ps-slidewrapper > nav,
    .ps-slides > div {
        position: absolute;
    }
    .ps-header {
        top: 0px;
        left: 0px;
        height: 150px;
        z-index: 1001;
        background: #fff;
    }
    .ps-header h1 {
        color: #ccc;
        line-height: 150px;
        margin: 0;
        padding: 0 50px;
        font-weight: 200;
        font-size: 15px;
        letter-spacing: 10px;
    }
    .ps-contentwrapper {
        top: 0;
        bottom: 0px;
        overflow: hidden;
        z-index: 1000;
    }
    .ps-content {
        background: #fff;
        width: 100%;
        height: 100%;
        padding: 50px;
    }
    .ps-content h2 {
        padding: 10px 15px;
        border-right: 1px solid #f2f2f2;
        border-bottom: 1px solid #f2f2f2;
        letter-spacing: 4px;
        margin: -40px 0 30px;
        text-align: right;
        font-weight: 700;
    }
    .ps-content p {
        line-height: 26px;
        font-size: 1em;
        letter-spacing: 2px;
        /* word-spacing: 10px; */
        padding: 10px 15px;
        font-family: "Open Sans", "Helvetica-neue", arial, verdana sans-serif;
        font-weight: 400;
        text-align: left;
        overflow-y: scroll;
        height: 480px;
    }
    .ps-content span.ps-price {
        float: left;
        margin: 10px;
        width: 140px;
        height: 140px;
        line-height: 140px;
        text-align: center;
        color: #fff;
        background: #f7cfc6;
        background: rgba(247,197,185,0.8);
        font-size: 55px;
        font-weight: 200;
    }
    .ps-content a:last-child {
        font-size: 14px;
        font-weight: 700;
        color: #555;
        letter-spacing: 4px;
        float: right;
        border: 3px solid #555;
        padding: 3px;
        text-indent: 4px;
    }
    .no-touch .ps-content a:last-child:hover {
        color: #b2d79d;
        border-color: #b2d79d;
    }
    .ps-content a:last-child:before {
        content: '\53';
        font-family: 'icon';
        font-style: normal;
        font-weight: normal;
        speak: none;
        padding-right: 5px;
    }
    .ps-slidewrapper {
        right: 0px;
        top: 0px;
        height: 100%;
        overflow: hidden;
    }
    .ps-slides {
        top: 0px;
        bottom: 100px;
        width: 100%;
    }
    .ps-slides > div {
        width: 100%;
        height: 100%;
        box-shadow: inset 0 0 0 9999px rgba(179,157,250,0.1);
    }
    .ps-slidewrapper > nav {
        width: 100%;
        height: 100px;
        bottom: 0px;
        right: 0px;
        z-index: 1000;
    }
    .ps-slidewrapper > nav > a {
        width: 50%;
        height: 100%;
        position: relative;
        float: left;
        box-shadow: inset 0 0 0 9999px rgba(235, 80, 80, 0.67);
        outline: none;
    }
    .ps-slidewrapper > nav > a:first-child {
        box-shadow: inset 0 0 0 9999px rgba(246,224,121,0.1);
    }
    .no-touch .ps-slidewrapper > nav > a {
        -webkit-transition: box-shadow 0.4s ease-in-out;
        -moz-transition: box-shadow 0.4s ease-in-out;
        -ms-transition: box-shadow 0.4s ease-in-out;
        -o-transition: box-shadow 0.4s ease-in-out;
        transition: box-shadow 0.4s ease-in-out;
    }
    .no-touch .ps-slidewrapper > nav > a:hover {
        box-shadow: inset 0 0 0 9999px rgba(239,239,239, 0.5);
    }
   /* .no-touch .ps-slidewrapper > nav > a:first-child:hover {
        box-shadow: inset 0 0 0 9999px rgba(249,15,15,0.1);
    }*/
    .ps-slidewrapper > nav > a:after {
        content: '';
        position: absolute;
        width: 50px;
        height: 50px;
        top: 50%;
        left: 50%;
        margin: -10px 0 0 -23px;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        border-left: 1px solid #fff;
        border-top: 1px solid #fff;
    }
    .ps-slidewrapper > nav > a:first-child:after {
        -webkit-transform: rotate(-135deg);
        -moz-transform: rotate(-135deg);
        -o-transform: rotate(-135deg);
        -ms-transform: rotate(-135deg);
        transform: rotate(-135deg);
        margin: -40px 0 0 -23px;
    }
    .ps-slides > div,
    .ps-slidewrapper > nav > a {
        background-color: #fff;
        background-position: center top;
        background-repeat: no-repeat;
        -webkit-background-size: auto 100%;
        -moz-background-size: auto 100%;
        background-size: auto 100%;
    }
    .ps-move {
        -webkit-transition: top 400ms ease-out;
        -moz-transition: top 400ms ease-out;
        -o-transition: top 400ms ease-out;
        -ms-transition: top 400ms ease-out;
        transition: top 400ms ease-out;
    }
    .ps-price {
        display: none;
    }
    @media screen and (max-width: 860px) {
        .js .ps-container > div {
            width: 100%;
        }
        .js .ps-header {
            height: 50px;
        }
        .js .ps-header h1 {
            line-height: 50px;
            padding: 0px 20px;
            letter-spacing: 4px;
        }
        .js .ps-slides {
            bottom: 320px;
            top: 50px;
        }
        .js .ps-slidewrapper > nav {
            height: 100px;
        }
        .js .ps-contentwrapper {
            top: auto;
            height: 220px;
            bottom: 100px;
        }
        .js .ps-content {
            padding: 10px;
        }
        .js .ps-content h2 {
            border-right: none;
            font-size: 18px;
            margin: 10px 0;
            padding-top: 0;
        }
        .js .ps-content span.ps-price {
            font-size: 18px;
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-weight: 700;
            margin-bottom: 0;
        }
        .js .ps-content p {
            line-height: 20px;
            border: none;
            padding: 5px 10px;
            height: 140px;
            overflow-y: scroll;
        }
        .js .ps-content a:last-child {
            font-size: 13px;
            margin: 10px 20px 0 0;
        }
    }
    #rodape {
        margin-top: 1075px;
    }
    @media (min-width: 0) and (max-width: 400px) {
        #rodape {
            display: none;
        }
    
    }
    @media (min-width: 400px) and (max-width: 650px) {
        #rodape {
           display: none;
        }
      
    }
    @media (min-width: 650px) and (max-width: 960px) {
          #rodape {
              display: none;
          }
    }
    @media (min-width: 960px) and (max-width: 1200px) {
          #rodape {
              display: none;
          }
    }
    @media (min-width: 960px) and (max-width: 1920px) {
          #rodape {
              display: none;
          }
    }
    </style>
    <script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/modernizr.custom.79639.js"></script>
    <noscript><link rel="stylesheet" type="text/css" href="{{ URL::to(Config::get('caminho.server_public').'') }}/css/noscript.css" /></noscript>
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="{{ URL::to(Config::get('caminho.server_public').'') }}/css/noscript.css" /><![endif]-->
@stop



@section('content')
  @include('layout.menu-fix3')
  @include('layout.menu3')

<section id="ps-container" class="ps-container">
    <div class="ps-contentwrapper">
                   <div class="ps-content">
                       <h2>1951</h2>
                       <p>
                       - 17 de agosto: nasce em Concei&ccedil;&atilde;o/PB, <strong><em>Elba Maria Nunes Ramalho</em></strong>, quarta filha do casal<strong><em> Jo&atilde;o Nunes de Souza</em></strong> e <strong><em>Maria Geni Ramalho</em></strong>. Os filhos do casal, pela ordem, s&atilde;o:<strong><em>Everaldo</em></strong>, <strong><em>Everton</em></strong>, <strong><em>Ednovalda (Vavá)</em></strong>, <strong><em>Elba</em></strong>,    <strong><em>Eracliton</em></strong> e <strong><em>Jo&atilde;o Nunes Filho</em></strong>, todos nascidos tamb&eacute;m em Concei&ccedil;&atilde;o/PB.
                       </p>
                   </div>
                   <div class="ps-content">
                       <h2>1958-1962</h2>
                       <p>- Do 1&ordm; ao 5&ordm; ano, Elba estuda no<strong> <em>Grupo Escolar Jos&eacute; Leite</em></strong>.</p>
                   </div>


                    <div class="ps-content">
                        <h2>1963</h2>
                        <span class="ps-price">£140</span>
                        <p>- A fam&iacute;lia de Elba deixa Concei&ccedil;&atilde;o e se estabelece em Campina Grande.<br><br>
                        - Com 11 anos, Elba ingressa no 1&ordm; ginasial (6&ordm; ano) do Col&eacute;gio Estadual Dr. Elp&iacute;dio de Almeida, o <strong><em>Col&eacute;gio da Prata</em></strong>, onde estuda at&eacute; concluir o Ensino Fundamental.</p>
                    </div>

                    <div class="ps-content">
                        <h2>1966</h2>
                        <p>- Aos 14 anos, Elba participa de um grupo criado durante as aulas de literatura por sua ent&atilde;o professora <strong><em>Elizabeth Marinheiro (Betinha)</em></strong>, que em breve seria conhecido como <strong><em>Coral Falado Manuel Bandeira</em></strong>. O grupo fazia encena&ccedil;&otilde;es h&iacute;bridas da po&eacute;tica nacional e internacional, misturando m&uacute;sica, dan&ccedil;a e teatro, tais como: <em>Frei Serafim</em> (folclore), <em>Catimb&oacute;</em> (Ascenso Ferreira), <em>Viagem a S&atilde;o Saru&ecirc;</em> (Manuel Camilo dos Santos), <em>Epis&oacute;dio sinistro de Virgulino Ferreira</em> (Carlos Pena Filho), <em>O navio negreiro</em> (entre outros) (Castro Alves), <em>Os estatutos do homem</em> (entre outros) (Thiago de Mello), <em>Desafio de Romano M&atilde;e d'&aacute;gua e In&aacute;cio da Catingueira</em> (tamb&eacute;m autores), e mais textos de Lindolf Bell, Catulo, Z&eacute; da Luz e Cl&oacute;vis de Melo.<br><br>
                        - No <em>Col&eacute;gio da Prata</em> conhece, tamb&eacute;m, uma turma de garotas que formaram uma banda de rock no embalo da Jovem Guarda: <strong><em>As Brasas</em></strong>. Elba entra para o grupo tocando inicialmente guitarra, depois bateria. O conjunto era composto por: <strong><em>Jerusa Soares</em></strong><em>,</em> <strong><em>Rosinha Soares</em></strong>, <strong><em>Gra&ccedil;a Batista</em></strong>, <strong><em>Socorro Pereira</em></strong> e <strong><em>Eliane Boaventura</em></strong>.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1967</h2>
                        <p>- Na tentativa de afastar a filha do teatro e da m&uacute;sica, o pai de Elba a despachou com a irm&atilde; Vav&aacute; para Jo&atilde;o Pessoa. L&aacute; moraram num pensionato, juntamente com duas primas.<br><br>
                        - Na capital, cursou parte do Ensino M&eacute;dio no col&eacute;gio <strong><em>Lyceu Paraibano</em></strong>.<br><br>
                        - Durante a estada em Jo&atilde;o Pessoa, Elba faz amizades na escola e descobre que os irm&atilde;os de sua colega Cec&iacute;lia Miranda tinham um grupo de baile: os Quatro Loucos, formado por Golinha Miranda, Floriano Miranda, Ded&eacute; e Z&eacute; Ramalho. Muito interessada por m&uacute;sica, passou a frequentar a casa deles, onde conheceu Z&eacute; e Vital Farias. Inspirada pelo ambiente musical, prop&ocirc;s a cria&ccedil;&atilde;o de uma banda de meninas, as <strong>Golden Girls</strong>, formada por Elba, Cec&iacute;lia Miranda, Angela Fechine, Griselda e Shoula &ndash; todas colegas de escola.</p>
                        
                    </div>
                    <div class="ps-content">
                        <h2>1968</h2>
                        <p>- Atua em <strong><em>Morte e vida severina</em></strong>, de Jo&atilde;o Cabral de Melo Neto, dirigida pela professora Elizabeth Marinheiro. A pe&ccedil;a foi apresentada em Campina Grande, Jo&atilde;o Pessoa, Recife e Rio de Janeiro.<br><br>
                        - Os <em>Corais Falados Manuel Bandeira e Cec&iacute;lia Meireles</em>, compostos por 30 jovens e coordenados pelas professoras Elizabeth Marinheiro e Dalvanira Gadelha, apresentaram o programa &ldquo;Nordeste 68 &ndash; Poesia e povo&rdquo; em festivais de poesia e folclore nas cidades do Rio de Janeiro e Bras&iacute;lia. Elba participou ativamente dessas apresenta&ccedil;&otilde;es.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1969</h2>
                        <p>- Em abril, Elba deixa Jo&atilde;o Pessoa e volta a morar em Campina Grande.<br><br>
                        - No <strong><em>Col&eacute;gio da Prata</em></strong> ela termina o 3&ordm; cient&iacute;fico (3&ordm; ano do Ensino M&eacute;dio).<br><br>
                        - Atua no show musical <strong><em>Corais: Poesia e Tempo</em></strong>, que &eacute; uma retrospectiva dos quatro anos de apresenta&ccedil;&otilde;es do grupo de <em>Coral Falado</em>, englobando literatura, m&uacute;sica e dan&ccedil;a. A pe&ccedil;a viajou para o Rio de Janeiro e foi apresentada no Teatro Nacional de Com&eacute;dia (atual Teatro Glauce Rocha).</p>
                    </div>
                    <div class="ps-content">
                        <h2>1970-71</h2>
                        <p>- O grupo de <em>Corais Falados </em>cresce e se transforma na <strong><em>Funda&ccedil;&atilde;o Art&iacute;stico-Cultural Manuel Bandeira</em></strong>, a <strong>FACMA</strong>, saindo do ambiente escolar. A institui&ccedil;&atilde;o foi subdividida em departamentos e Elba tornou-se a diretora do <em>Departamento C&ecirc;nico-musical.</em><br><br>
                        - Pela FACMA, atua na pe&ccedil;a <strong><em>Di&aacute;logo das Carmelitas</em></strong>, do franc&ecirc;s Georges Bernanos, dirigida pela professora Elizabeth Marinheiro, interpretando a personagem <strong><em>Irm&atilde; Maria</em></strong>. O espet&aacute;culo estreou em Campina Grande e depois viajou por Jo&atilde;o Pessoa, Recife e Salvador. Em 1971 foi apresentado no <em>VI Festival Nacional de Teatro de Estudantes</em> em Aldeia de Arcozelo/RJ.<br><br>
                        - Cursou o primeiro per&iacute;odo do curso de <strong><em>Direito</em></strong> na <strong><em>Funda&ccedil;&atilde;o Universidade Regional do Nordeste &ndash; FURNE</em></strong>, e desistiu da faculdade.<br><br>
                        - Ingressa na <strong><em>Universidade Federal da Para&iacute;ba</em></strong> &ndash; campus Campina Grande (hoje Universidade Federal de Campina Grande) para estudar <strong><em>Economia</em></strong>. Paralelamente, tamb&eacute;m cursa <strong><em>Sociologia</em></strong>. N&atilde;o concluiu nenhum dos cursos, pois fazia faculdade apenas por press&atilde;o da fam&iacute;lia. Durante esse per&iacute;odo foi membro do Diret&oacute;rio Acad&ecirc;mico e jogadora do time de handball.</br></br>
                        <strong>1971</strong></br></br>
                        Atua na pe&ccedil;a <strong><em>De como casar com uma herdeira rica ou como se fazer um bom enterro</em></strong>, de Vital Santos, dirigida por Walter Pessoa e com dire&ccedil;&atilde;o musical da pr&oacute;pria Elba. Posteriormente, este espet&aacute;culo participou do <strong><em>III Festival de Teatro de S&atilde;o Jos&eacute; do Rio Preto/SP.</em></strong></p>
                    </div>
                    <div class="ps-content">
                        <h2>1972</h2>
                        <p>- Inicia um est&aacute;gio na <strong><em>FUNDESP</em></strong> em Campina Grande. Logo em seguida come&ccedil;a a trabalhar como recepcionista no <strong><em>Museu de Arte de Campina Grande</em></strong>.<br><br>
                        - Protagoniza a pe&ccedil;a <strong><em>O ministro do Supremo</em></strong>, de Armando Gonzaga, dirigida pelo ent&atilde;o professor <strong><em>Milton Baccarelli</em></strong>, interpretando <strong><em>Genoveva</em></strong>.<br><br>
                        - Na FACMA, Elba participava da organiza&ccedil;&atilde;o do <strong><em>Festival Campinense de M&uacute;sica Popular Brasileira</em></strong>. Na terceira edi&ccedil;&atilde;o, ela resolve concorrer com a can&ccedil;&atilde;o <strong><em>Ou coisa parecida</em></strong>, parceria dela com o amigo Zez&eacute; Duarte, que brincavam dizendo ser um pl&aacute;gio de uma m&uacute;sica de Belchior (<em>Na hora do almo&ccedil;o</em>). Para surpresa dela, vence o festival.<br><br>
                        - A professora Elizabeth Marinheiro intermediou junto ao seu amigo pessoal Jo&atilde;o Cabral de Melo Neto, ent&atilde;o embaixador do Brasil em Portugal, apoio do Governo portugu&ecirc;s, do Governo paraibano e da popula&ccedil;&atilde;o de Campina Grande, uma viagem da FACMA com os Corais em &ldquo;miss&atilde;o diplom&aacute;tica&rdquo; para apresentar a pe&ccedil;a musical <strong><em>Uma cena para dois povos</em></strong>, de Figueiredo Agra, no Teatro Pal&aacute;cio da Foz, em Lisboa, e na Casa do Brasil, em Madri. Elba era a &ldquo;comandante&rdquo; da equipe, segundo a professora Betinha. No retorno ao Brasil, a pe&ccedil;a foi apresentada em algumas cidades nordestinas.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1973</h2>
                        <p>- Momento hist&oacute;rico: Jo&atilde;o Cabral de Melo Neto prestigia a remontagem de seu poema <strong><em>Morte e Vida Severina</em></strong> encenado pelo grupo teatral da FACMA no Teatro Municipal de Campina Grande. Viajaram com este espet&aacute;culo por todo o Nordeste.<br><br>
                        - No <strong><em>IV Festival Campinense de M&uacute;sica Popular</em></strong>, Elba concorre com duas composi&ccedil;&otilde;es pr&oacute;prias: <strong><em>Canto em punho</em></strong> e <strong><em>Joana</em></strong> (esta em parceria com o amigo Adalmir Braga), classificadas em segundo e terceiro lugar, respectivamente.<br><br>
                        - Nesta &eacute;poca, Elba come&ccedil;a a trabalhar com produ&ccedil;&atilde;o de shows em Campina Grande em parceria com o amigo Cardosinho (primo de Marcelo Melo, vocalista do Quinteto Violado). A dupla consegue levar o Quinteto Violado para apresentar o show <strong><em>Berra Boi</em></strong> na AABB local. Por interm&eacute;dio deste amigo, Elba conhece melhor os integrantes do Quinteto e prontamente estabelece uma amizade: foi dizendo que era atriz, que tamb&eacute;m cantava e era muito ligada &agrave; cultura popular.</p>
                    </div>

                    <div class="ps-content">
                        <h2>1974</h2>
                        <span class="ps-price">£30</span>
                        <p>- No come&ccedil;o do ano o Quinteto Violado planejava um show chamado <strong><em>A Feira</em></strong>, que misturaria m&uacute;sica e teatro e para isso precisariam de uma atriz que tamb&eacute;m cantasse. Logo lembraram de Elba e a convidaram para participar. Foram busc&aacute;-la em Campina Grande, partindo para Recife a fim de montar o show.<br><br>
                        - Maio: Elba estr&eacute;ia no show <strong><em>A Feira</em></strong> do Quinteto Violado, atuando juntamente com o ator baiano Ray Miranda, no <em>Teatro Casa Grande</em>. Depois da temporada carioca, o Quinteto foi embora para S&atilde;o Paulo e Elba permaneceu no Rio, morando com um casal de amigos de Marcelo Melo. Ela estava com 22 anos.<br><br>
                        - O ator Carlos Vereza sempre assistia &agrave;s apresenta&ccedil;&otilde;es do show <em>A Feira</em>. Com a despedida do Quinteto, precisando se inserir no meio art&iacute;stico e sabendo da proximidade de Vereza com o famoso diretor Luiz Mendon&ccedil;a, Elba pediu a ele um bilhete de recomenda&ccedil;&atilde;o. Insegura de entreg&aacute;-lo, acabou sendo apresentada a Mendon&ccedil;a por outro amigo, o compositor Carlos Fernando. Em seguida o diretor a convida para atuar na pe&ccedil;a <strong><em>Viva o Cord&atilde;o Encarnado</em></strong> em Vit&oacute;ria/ES, substituindo a atriz S&ocirc;nia de Paula. O desempenho da substituta agradou tanto ao diretor do espet&aacute;culo e aos outros membros da companhia <strong><em>Chegan&ccedil;a</em></strong> que Elba foi convidada a integrar definitivamente o grupo.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1975</h2>
                        <span class="ps-price">£30</span>
                        <p>- Janeiro: <strong><em>Lampi&atilde;o no inferno</em></strong>, de Jairo Lima, estreia no Teatro Miguel Lemos/RJ, dirigida por Luiz Mendon&ccedil;a. Esta pe&ccedil;a marca a estr&eacute;ia de Elba no Rio, interpretando dois personagens: uma diabinha e uma mulher do povo.<br><br>
                        - Junho: em S&atilde;o Paulo, no Teatro It&aacute;lia, Elba participa do musical infantil <strong><em>Dorot&eacute;ia, a bruxinha rebelde</em></strong>, de Eliseu Miranda, com dire&ccedil;&atilde;o de Sebasti&atilde;o Apol&ocirc;nio.<br><br>
                        - Setembro: estreia no Teatro Aplicado/SP a nova montagem da com&eacute;dia musical <strong><em>Viva o Cord&atilde;o Encarnado</em></strong>, de Luiz Marinho, com dire&ccedil;&atilde;o de Luiz Mendon&ccedil;a. Elba interpreta a personagem <strong><em>Diana</em></strong> e por esta atua&ccedil;&atilde;o foi indicada ao pr&ecirc;mio de <em>Atriz revela&ccedil;&atilde;o</em> pela Associa&ccedil;&atilde;o de Cr&iacute;ticos de S&atilde;o Paulo.<br><br>
                        - Dezembro: <strong><em>Viva o Cord&atilde;o Encarnado</em></strong> &eacute; reapresentado no teatro Jo&atilde;o Caetano/RJ em temporada popular. A montagem contou com um novo elenco, mas Elba permaneceu.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1976</h2>
                        <span class="ps-price">£30</span>
                        <p>- Abril: estreia no Teatro Experimental Cacilda Becker/RJ, a com&eacute;dia musical <strong><em>Canc&atilde;o de Fogo</em></strong><em>,</em> de Jairo Lima, , com dire&ccedil;&atilde;o de Luiz Mendon&ccedil;a. Elba interpreta <strong><em>Maria Pitombeira</em></strong>.<br><br>
                        - Com patroc&iacute;nio do Servi&ccedil;o Nacional de Teatro, o grupo de Luiz Mendon&ccedil;a (Chegan&ccedil;a) viajou por dois meses pelo pa&iacute;s com a pe&ccedil;a <strong><em>Canc&atilde;o de Fogo</em></strong> e uma remontagem de <strong><em>Lampi&atilde;o no Inferno</em></strong>. Na passagem por Jo&atilde;o Pessoa, Elba voltou a Campina Grande pela primeira vez. Reviu a m&atilde;e e os amigos e ainda participou do <strong><em>Festival de Inverno de Campina Grande</em></strong>, apresentando um show de voz e viol&atilde;o no Teatro Municipal. Alguns meses depois, as pe&ccedil;as foram apresentadas no Teatro Severino Cabral, em Campina Grande, mesmo palco onde iniciou sua carreira &agrave; &eacute;poca da FACMA.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1977</h2>
                        <span class="ps-price">£30</span>
                        <p>- Mar&ccedil;o: &eacute; inaugurada no Rio a <strong><em>Discot&egrave;que Tropicana</em></strong>, sob a dire&ccedil;&atilde;o geral de Nelson Motta. Ambientada no Canec&atilde;o, era uma boate onde reinava o novo ritmo (discoteca) e, al&eacute;m dos DJs, contava com uma banda de ritmos latinos, a <strong><em>Tropicana&rsquo;s Band</em></strong>, que tinha o cantor <strong><em>Fabio</em></strong> como l&iacute;der e <strong><em>Elba Ramalho</em></strong>, <strong><em>T&acirc;nia Alves</em></strong>, <strong><em>Dyrce Morais</em></strong> e <strong><em>Diana Stull</em></strong> como coristas. A experi&ecirc;ncia do grupo durou dois meses.<br><br>
                        - Maio: estreia no teatro SESC da Tijuca a pe&ccedil;a infantil <strong><em>Dom Quixote de La Mancha</em></strong>, com texto de Alexandre Marques e dire&ccedil;&atilde;o de Luiz Mendon&ccedil;a. Elba era a narradora.<br><br>
                        - Julho: lan&ccedil;amento do filme <strong><em>Morte e Vida Severina</em></strong>, de Zelito Viana, na mostra competitiva do <strong><em>Festival de Cinema de Bras&iacute;lia</em></strong>. O longa, com Elba e T&acirc;nia Alves no elenco, s&oacute; entrou em cartaz nacionalmente em mar&ccedil;o de 1978.<br><br>
                        - Na mesma mostra, &eacute; exibido o filme <strong><em>Trem fantasma</em></strong>, de Alain Fresnot, filmado em 1975 na cidade de S&atilde;o Paulo. Elba e toda a turma do Chegan&ccedil;a, fizeram uma ponta na pel&iacute;cula interpretando um grupo de teatro. A produ&ccedil;&atilde;o n&atilde;o foi apresentada nos cinemas, sendo exibida somente em circuitos alternativos.<br><br>
                        - Agosto: participa da pe&ccedil;a <strong><em>A incr&iacute;vel hist&oacute;ria de Pedro Bacamarte</em></strong>, de Vital Paulino Filho e dire&ccedil;&atilde;o de Luiz Mendon&ccedil;a no teatro SESC da Tijuca.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1978</h2>
                        <span class="ps-price">£30</span>
                        <p>- Janeiro/Fevereiro: cansada do teatro e da falta de dinheiro, Elba parte para o Nordeste e apresenta o show voz &amp; viol&atilde;o <strong><em>Bai&atilde;o de 2</em></strong>com os amigos <strong><em>Geraldo Azevedo</em></strong> em Campina Grande e Recife e <strong><em>Tadeu Mathias</em></strong> em Caruaru e Jo&atilde;o Pessoa.<br><br>
                        - Abril: show de estreia de <strong><em>Z&eacute; Ramalho</em></strong> e banda, com Elba e C&aacute;tia de Fran&ccedil;a nos vocais e Geraldo Azevedo na violas, no Teatro Tereza Rachel/RJ. Seguiram com a temporada para S&atilde;o Paulo e algumas cidades do interior. Neste &iacute;nterim, Elba conhece Carlos Alberto Sion, produtor musical, que a apresenta aos executivos da gravadora CBS. Na sequ&ecirc;ncia &eacute; convidada para gravar um disco.<br><br>
                        - Maio: show <strong><em>Bai&atilde;o de dois</em></strong>, com Geraldo Azevedo, no SESC/Tijuca.<br><br>
                        - Julho: Elba assina contrato com a CBS.<br><br>
                        - Estreia no Teatro Gin&aacute;stico/RJ o musical <strong><em>&Oacute;pera do Malandro</em></strong>, de Chico Buarque, adapta&ccedil;&atilde;o da <em>&Oacute;pera do mendigo</em>, de John Gay, e da <em>&Oacute;pera dos tr&ecirc;s vint&eacute;ns</em>, de Brecht. Dire&ccedil;&atilde;o de Lu&iacute;s Ant&ocirc;nio Martinez Corr&ecirc;a. Elba interpreta Lúcia, filha do Inspetor Chaves, o Tigr&atilde;o, vivido pelo ator <strong><em>Tony Ferreira.</em></strong>.<br><br>
                        - Setembro: &eacute; indicada ao Trof&eacute;u Mambembe de Teatro como <em>Melhor atriz</em> pela atua&ccedil;&atilde;o na <em>&Oacute;pera do Malandro</em>.<br><br>
                        - No teatro Tablado/RJ, Elba participa da montagem <strong><em>Teatro do Ornitorrinco canta Brecht e Weill</em></strong>, um recital de can&ccedil;&otilde;es extra&iacute;das de <em>A &oacute;pera dos tr&ecirc;s vint&eacute;ns</em>, <em>Lady in the dark</em> e <em>One touch of Venus</em>. O espet&aacute;culo &eacute; coordenado por Cac&aacute; Rosset, sendo apresentado somente &agrave;s segundas-feiras, em sess&otilde;es duplas.<br><br>
                        - Novembro: mini temporada no Teatro Municipal de Niter&oacute;i da pe&ccedil;a infantil <strong><em>Os saltimbancos</em></strong>, adapta&ccedil;&atilde;o feita por Chico Buarque do texto de Sergio Bardotti, com dire&ccedil;&atilde;o de Antonio Pedro. A personagem de Elba era a <strong><em>Galinha</em></strong>. Posteriormente o espet&aacute;culo seguiu para o Teatro Clara Nunes.<br><br>
                        - &Eacute; lan&ccedil;ado o 14&ordm; LP de Chico Buarque, com a m&uacute;sica <strong><em>O meu amor</em></strong>, estreia de Elba em disco como cantora, ao lado da tamb&eacute;m atriz Marieta Severo. A can&ccedil;&atilde;o fazia parte do musical <em>&Oacute;pera do Malando</em>.<br><br>
                        - Dezembro: participa do especial de Chico Buarque na TV Bandeirantes. Neste programa &eacute; exibida a cena em que ela e Marieta Severo cantam na <em>&Oacute;pera do Malandro</em>.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1979</h2>
                        <span class="ps-price">£30</span>
                        <p>- Junho: Elba substitui T&acirc;nia Alves por um curto per&iacute;odo na pe&ccedil;a <strong><em>O fado e a sina de Mateus e Catirina</em></strong>, de Benjamin Santos, no Teatro Gl&aacute;ucio Gil/RJ, com dire&ccedil;&atilde;o de Cecil Thir&eacute;. Elba interpreta v&aacute;rias personagens.<br><br>
                        - Setembro: chega &agrave;s lojas o primeiro LP de Elba, <strong><em>Ave de Prata</em></strong>, lan&ccedil;ado pelo selo Epic, da gravadora CBS. Foi produzido por Carlos Alberto Sion.<br><br>
                        - No Teatro Alaska/RJ, Elba lan&ccedil;a seu primeiro LP e apresenta o show <strong><em>Ave de Prata</em></strong>, dirigido por Fernando Pinto. Participa&ccedil;&atilde;o especial e dire&ccedil;&atilde;o musical de Geraldo Azevedo.<br><br>
                        - Outubro: na TV Globo, Elba participa da com&eacute;dia <strong><em>O morto do Encantado sa&uacute;da o povo, morre e pede passagem</em></strong>, cria&ccedil;&atilde;o de Oduvaldo Vianna Filho (Vianinha), dirigida por Antonio Carlos Fontoura.<br><br>
                        - Novembro: entra em cartaz o filme <strong><em>Rep&uacute;blica dos Assassinos</em></strong>, que tem como tema musical <strong><em>N&atilde;o sonho mais</em></strong>, dueto de Elba e Chico Buarque. Ela ainda faz uma ponta na pel&iacute;cula como uma mendiga.<br><br>
                        - Dezembro: canta na &uacute;ltima fase eliminat&oacute;ria e na final do <strong><em>Festival 79 da MPB &ndash; &Eacute; preciso cantar</em></strong>, da TV Tupi, no Pal&aacute;cio de Conven&ccedil;&otilde;es do Anhembi. Defende a m&uacute;sica <strong><em>Am&eacute;rica</em></strong>, de Claudio Lucci, com arranjo do grupo Moto Perp&eacute;tuo. Mas quem vence &eacute; Dominguinhos e Manduka com <strong><em>Quem me levar&aacute; sou eu</em></strong> na voz de Fagner.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1980</h2>
                        <span class="ps-price">£30</span>
                        <p>- Janeiro: canta na primeira edi&ccedil;&atilde;o do <strong><em>Festival de Ver&atilde;o do Guaruj&aacute;</em></strong> e faz um tremendo sucesso. Ela se apresentaria por muitos anos neste projeto.<br><br>
                        - Abril: apresenta-se no <strong><em>Projeto Seis e Meia</em></strong> na sala Funarte/RJ com a Banda Roj&atilde;o e o Conjunto Forrobod&oacute;, dirigida por Luiz Mendon&ccedil;a.<br><br>
                        - Maio: participa do show <strong><em>1&ordm; de Maio</em></strong>no Riocentro.<br><br>
                        - Elba viaja para Angola junto com Chico Buarque, Martinho da Vila, D. Ivone Lara, Quinteto Violado, Jo&atilde;o Nogueira, Dorival Caymmi, Francis Hime, Clara Nunes e Edu Lobo a fim de participar, a convite do governo local, de uma temporada de shows naquele pa&iacute;s, durante 16 dias, em 3 cidades, no festival <strong><em>Kalunga, a voz do Brasil</em></strong>.<br><br>
                        - Julho: participa do <strong><em>Festival de Arte Negra da Martinica</em></strong>.<br><br>
                        - Com Geraldo Azevedo e Vital Farias, inicia turn&ecirc; no <strong><em>Projeto Pixinguinha</em></strong> pelo Teatro SESC de S&atilde;o Jo&atilde;o de Meriti, seguindo depois para o Teatro Dulcina/RJ e as cidades Cuiab&aacute;, Campo Grande, Manaus e Bel&eacute;m. Mais um grande sucesso.<br><br>
                        - Setembro: lan&ccedil;a pela CBS seu 2&ordm; LP, <strong><em>Capim do Vale</em></strong>, produzido por Mauro Motta.<br><br>
                        - Novembro: estreia em S&atilde;o Paulo, no Teatro Pixinguinha, o show <strong><em>Capim do Vale</em></strong>, com dire&ccedil;&atilde;o de Arthur Laranjeira.<br><br>
                        - Elba assina contrato com a gravadora <strong><em>Ariola</em></strong>.</p>
                    </div>

                    <div class="ps-content">
                        <h2>1981</h2>
                        <span class="ps-price">£30</span>
                        <p>- Janeiro: rodado em 1980, o filme <strong><em>Prova de fogo</em></strong>, de Marco Altberg, come&ccedil;a a ser exibido em alguns festivais e circuitos alternativos, entrando em cartaz nacional em 1982. Elba faz participa&ccedil;&atilde;o como a m&atilde;e de santo <strong>Lourdes</strong>.<br><br>
                        - Mar&ccedil;o: Elba &eacute; uma das atra&ccedil;&otilde;es do lan&ccedil;amento do <strong><em>MPB Shell 81</em></strong>, da TV Globo. Em junho, volta a cantar no mesmo festival com Z&eacute; Ramalho.<br><br>
                        - 30 de abril: show <strong><em>1&ordm; de Maio</em></strong> no Riocentro/RJ, que ficou famoso em virtude do atentado &agrave; bomba feito por militares. Quando a bomba explodiu no estacionamento, Elba estava no palco cantando <em>Banquete de signos</em> de Z&eacute; Ramalho.<br><br>
                        - Junho: lan&ccedil;amento de seu 3&ordm; LP pela CBS, <strong><em>Elba</em></strong>, produzido por Mauro Motta. Marca sua despedida da gravadora.<br><br>
                        - Shows pelo <strong><em>Projeto Seis e Meia</em></strong> no Teatro Jo&atilde;o Caetano/RJ, com dire&ccedil;&atilde;o de Albino Pinheiro, onde lan&ccedil;a o seu novo &aacute;lbum <strong><em>Elba</em></strong> e apresenta o cantor Tadeu Mathias.<br><br>
                        - Julho: canta pela primeira vez na <em>Noite Brasileira</em> do <strong><em>Montreux Jazz Festival</em></strong>. Faz tamb&eacute;m uma pequena participa&ccedil;&atilde;o no show de Moraes Moreira.<br><br>
                        - Agosto: lan&ccedil;amento do LP <strong><em>Brasil Night Montreux</em></strong>, ao lado de Moraes Moreira e Toquinho, pela Ariola.<br><br>
                        - Outubro: a TV Globo apresenta a segunda edi&ccedil;&atilde;o do especial <strong><em>A Arca de No&eacute;</em></strong>, obra infantil de Vinicius de Moraes. Elba cantou <em>O peru</em>.<br><br>
                        - Dezembro: vai ao ar pela TV Globo o especial <strong><em>Morte e Vida Severina</em></strong> de Jo&atilde;o Cabral de Melo Neto, com dire&ccedil;&atilde;o de Walter Avancini. O programa fez estrondoso sucesso e ganhou dois importantes pr&ecirc;mios da TV: o <strong><em>Emmy Awards</em></strong> e o <strong><em>Pr&ecirc;mio Ondas</em></strong>.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1982</h2>
                        <span class="ps-price">£30</span>
                        <p>- Maio: participa, em reapresenta&ccedil;&atilde;o &uacute;nica, no audit&oacute;rio do MASP, do musical <strong><em>Teatro do Ornitorrinco canta Brecht e Weill</em></strong>, ao lado de Cida Moreira, Luiz Roberto Galizia e Cac&aacute; Rosset (dire&ccedil;&atilde;o).<br><br>
                        - Maio: em Berlim, participa do festival <strong><em>Horizonte 82</em></strong> com Clara Nunes, Hermeto Pascoal e Sivuca. Na oportunidade, tamb&eacute;m se apresenta na Holanda e na It&aacute;lia.<br><br>
                        - Lan&ccedil;a o LP <strong><em>Alegria</em></strong> produzido por Mazzola, trabalho de estreia solo pela gravadora Ariola.<br><br>
                        - Julho: estrea no Teatro Casa Grande/RJ, com dire&ccedil;&atilde;o de Benjamin Santos, o show <strong><em>Alegria</em></strong>.<br><br>
                        - Agosto: vai ao ar pela TV Globo o especial da <em>Sexta Super</em> <strong><em>Alceu Valen&ccedil;a e Elba Ramalho &ndash; Respeit&aacute;vel P&uacute;blico</em></strong>, com um apanhado das carreiras dos dois artistas.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1983</h2>
                        <span class="ps-price">£30</span>
                        <p>- Junho: participa do show de inaugura&ccedil;&atilde;o da TV Manchete no Rio.<br><br>
                        - Lan&ccedil;a, pela Ariola, o LP <strong><em>Cora&ccedil;&atilde;o Brasileiro</em></strong>, produzido por Mazzola. Este trabalho garantiu a Elba o sucesso popular definitivo.<br><br>
                        - Julho: Elba canta num festival de m&uacute;sica brasileira em Israel nas cidades de Tel Aviv, Haifa e Jaffa. Na oportunidade apresentam-se tamb&eacute;m: Djavan, Caetano Veloso e Ney Matogrosso. Com o sucesso, Elba volta sozinha para uma nova turn&ecirc; pelo pa&iacute;s.<br><br>
                        - Outubro: estreia do show <strong><em>Cora&ccedil;&atilde;o Brasileiro</em></strong> no Canec&atilde;o/RJ com dire&ccedil;&atilde;o de Aloysio Legey. Elba cumpriu temporada vitoriosa, com recordes de p&uacute;blico.<br><br>
                        - Novembro: Elba &eacute; capa da edi&ccedil;&atilde;o 795 da <em>Revista Veja</em>. Reportagem de 7 p&aacute;ginas sobre sua vida, sucesso, popularidade e o estouro do disco/show <em>Cora&ccedil;&atilde;o Brasileiro</em>.<br><br>
                        - Dezembro: a TV Globo exibe o especial <strong><em>Cora&ccedil;&atilde;o Brasileiro</em></strong>, na <em>Sexta Super</em>, com dire&ccedil;&atilde;o de Aloysio Legey.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1984</h2>
                        <span class="ps-price">£30</span>
                        <p>- Fevereiro: a TV Cultura exibe o show <strong><em>Cora&ccedil;&atilde;o Brasileiro</em></strong> gravado no Palace/SP.<br><br>
                        - Abril: estreia o filme <strong><em>Para viver um grande amor</em></strong>, de Miguel Faria Jr., rodado em 1983, com Djavan e Patr&iacute;cia Pillar como protagonistas. Elba tamb&eacute;m atua e canta a m&uacute;sica <strong><em>A violeira</em></strong>, de Tom Jobim e Chico Buarque.<br><br>
                        - Maio: participa&ccedil;&atilde;o no especial de Luiz Gonzaga na TV Globo, fazendo dueto em <em>Sanfoninha choradeira</em>.<br><br>
                        - Lan&ccedil;amento do LP <strong><em>Do jeito que a gente gosta</em></strong> pela Barclay/Ariola. Tamb&eacute;m produzido por Mazzola.<br><br>
                        - Junho: canta pela primeira vez em Concei&ccedil;&atilde;o do Pianc&oacute;, sua terra natal.<br><br>
                        - Agosto: Elba faz shows no Jap&atilde;o e Nova York (Estados Unidos).<br><br>
                        - Setembro: estreia nacional do show <strong><em>Do jeito que a gente gosta</em></strong> no Canec&atilde;o/RJ. A turn&ecirc; seria uma das mais longas de sua carreira.<br><br>
                        - Novembro: vai pela primeira vez a Cuba e participa do <strong><em>Festival de Varadero</em></strong>. Com o sucesso no festival, a gravadora cubana EGREM edita um LP com partes do show.<br><br>
                        - Dezembro: participa do com&iacute;cio na Pra&ccedil;a da S&eacute; em S&atilde;o Paulo na campanha de Tancredo Neves &agrave; Presid&ecirc;ncia.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1985</h2>
                        <span class="ps-price">£30</span>
                        <p>- Janeiro: Elba faz dois shows no novo festival <strong><em>Rock in Rio</em></strong>.<br><br>
                        - Mar&ccedil;o: shows em Portugal.<br><br>
                        - Abril: Elba canta pela primeira vez no Olympia de Paris.<br><br>
                        - Vai ao ar um especial de Elba dirigido por Maurice Capovilla na TV Manchete.<br><br>
                        - Maio: lan&ccedil;amento do LP, <strong><em>Fogo na mistura</em></strong>, pela Barclay/Ariola, produzido por Mazzola.<br><br>
                        - Outubro: participa do show de Geraldo Azevedo <strong><em>A luz do solo</em></strong>, no Golden Room do Copacabana Palace.<br><br>
                        - Novembro: divide com Luiz Gonzaga, Dominguinhos, Belchior e Tom Z&eacute; o show <strong><em>Luar do Sert&atilde;o</em></strong>, parte integrante do projeto comemorativo dos 20 anos de carreira de Gilberto Gil, <strong><em>20 Anos Luz</em></strong>, realizado no Pal&aacute;cio de Conven&ccedil;&otilde;es do Anhembi/SP.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1986</h2>
                        <span class="ps-price">£30</span>
                        <p>- Abril: com o show <strong><em>Viva Elba</em></strong>, inaugura a casa <em>Scala 2</em> no Leblon/RJ. Cria&ccedil;&atilde;o e coreografia de Lennie Dale.<br><br>
                        - Maio: o filme <strong><em>&Oacute;pera do Malandro</em></strong>, de Ruy Guerra, &eacute; lan&ccedil;ado no Festival de Cannes (Fran&ccedil;a). Nele Elba revive seus tempos do musical de Chico, s&oacute; que desta vez no papel da dan&ccedil;arina de cabar&eacute; <strong><em>Margot</em></strong>. A pel&iacute;cula foi rodada em 1985.<br><br>
                        - A vida de Elba &eacute; tema do programa Globo Rep&oacute;rter Especial (TV Globo).<br><br>
                        - Julho: chega ao mercado <strong><em>Remexer</em></strong>, seu 8&ordm; LP, &uacute;ltimo da parceria com o produtor Mazzola.<br><br>
                        - Volta ao <strong><em>Montreux Jazz Festival</em></strong>, acompanhada pela Banda Roj&atilde;o.<br><br>
                        - Outubro: no s&eacute;timo programa <strong><em>Chico e Caetano</em></strong> (TV Globo), Elba, Jo&atilde;o Bosco, Baden Powell e Elizeth Cardoso s&atilde;o os convidados.<br><br>
                        - Novembro: shows com Dominguinhos no projeto <strong><em>Luz do Solo</em></strong>, no Golden Room do hotel Copacabana Palace/RJ. Em seguida, a dupla excursiona por algumas cidades do Nordeste.<br><br>
                        - Dezembro: finalmente entra em cartaz no Brasil o filme <strong><em>&Oacute;pera do Malandro</em></strong>, ap&oacute;s concorrer em novembro no <strong><em>3&ordm; FestRio</em></strong>. Elba atua com Edson Celulari, Claudia Ohana e Ney Latorraca.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1987</h2>
                        <span class="ps-price">£30</span>
                        <p>- Maio: no Gerald&atilde;o em Recife/PE, Elba participa do show em comemora&ccedil;&atilde;o aos 50 anos de carreira de <strong><em>Luiz Gonzaga</em></strong>, dividindo o palco com Gonzaguinha, Fagner, Alcione, Alceu Valen&ccedil;a, Dominguinhos, Borghetinho, Nando Cordel, Jorge de Altinho, Marin&ecirc;s e S&eacute;rgio Reis.<br><br>
                        - Elba faz um show especial em Recife para lan&ccedil;ar seu novo trabalho, <strong><em>Elba</em></strong>.<br><br>
                        - A Polygram distribui o LP <strong><em>Elba</em></strong>, produzido pela cantora e por Z&eacute; Am&eacute;rico Bastos.<br><br>
                        - 25 de junho: nasce em Campina Grande, durante a festa de S&atilde;o Jo&atilde;o, o primeiro filho de Elba com o ator Maur&iacute;cio Mattar, <strong>Lu&atilde;</strong>.<br><br>
                        - Vai ao ar pela TV Bandeirantes, dentro da faixa <em>Aquarela Brasileira</em>, um especial gravado em Recife durante a festa de lan&ccedil;amento do seu novo LP.<br><br>
                        - Outubro: estreia do show <strong><em>Elba</em></strong> no Canec&atilde;o/RJ, dirigido por Jorge Fernando, inaugurando duradoura parceria com o diretor.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1988</h2>
                        <span class="ps-price">£30</span>
                        <p>- Janeiro: shows em Portugal.<br><br>
                        - Fevereiro: Elba canta no <strong><em>Festival de Vi&ntilde;a del Mar</em></strong> (Chile). A plateia &eacute; fria e Elba elege esta como uma das piores experi&ecirc;ncias em shows de sua carreira.<br><br>
                        - Mar&ccedil;o: no Scala 2/RJ acontece um show coletivo com Elba, Maria Beth&acirc;nia, Geraldo Azevedo, Joyce, Nana Caymmi, Elizeth Cardoso e Gal Costa para ajudar as v&iacute;timas das enchentes ocorridas no Rio.<br><br>
                        - Maio: gravado no m&ecirc;s de abril, <strong><em>Fruto</em></strong>, seu 10&ordm; LP, chega ao mercado, produzido por Z&eacute; Am&eacute;rico Bastos.<br><br>
                        - Junho: estreia do show de lan&ccedil;amento do novo LP em Salvador/BA.<br><br>
                        - Setembro: Elba canta no primeiro <strong><em>Brazilian day</em></strong>, organizado pela prefeitura de Nova York.<br><br>
                        - 31 de dezembro: vai ao ar um especial de fim de ano da TV Globo com a cantora. Dire&ccedil;&atilde;o de Roberto Talma.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1989</h2>
                        <span class="ps-price">£30</span>
                        <p>- Mar&ccedil;o: shows pelos Estados Unidos (Miami, Boston, Nova York e Nova Jersey).<br><br>
                        - Lan&ccedil;amento de seu 11&ordm; LP, <strong><em>Popular Brasileira</em></strong>, pela Polygram. &Eacute; o primeiro disco da cantora a sair simultaneamente em CD. Foi produzido por Z&eacute; Am&eacute;rico Bastos.<br><br>
                        - Maio: a Rede Manchete exibe um especial com Elba gravado no m&ecirc;s de abril em San Andr&eacute;s (ilha colombiana no mar do Caribe) e na Amaz&ocirc;nia, dentro da faixa <strong><em>Canto pelo mundo</em></strong>.<br><br>
                        - Junho: estreia no Palace/SP, com dire&ccedil;&atilde;o de Jorge Fernando, o show <strong><em>Popular Brasileira</em></strong>, o maior sucesso de sua carreira at&eacute; ali.<br><br>
                        - 2 de agosto: na madrugada, morre Luiz Gonzaga, o Rei do Bai&atilde;o, grande influ&ecirc;ncia e incentivador da carreira de Elba.<br><br>
                        - Dezembro: show coletivo pr&oacute;-Lula (<em>Sem medo de ser feliz</em>), na Pra&ccedil;a da Apoteose/RJ. Depois de duras cr&iacute;ticas e repres&aacute;lias, Elba acabou cedendo ao apelo dos amigos e entrou na campanha do ent&atilde;o candidato em segundo turno.<br><br>
                        - 13 de dezembro: show coletivo em Exu/PE pela passagem do anivers&aacute;rio de Luiz Gonzaga, rec&eacute;m-falecido. Participaram Elba, Gonzaguinha, Fagner, Dominguinhos, Jo&atilde;ozinho do Exu e Joquinha Gonzaga.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1990</h2>
                        <p>- Fevereiro: <strong><em>Elba Ao Vivo</em></strong> chega ao mercado, com o registro do show <em>Popular Brasileira</em>. &Eacute; seu &uacute;ltimo trabalho consecutivo produzido por Z&eacute; Am&eacute;rico Bastos.<br><br>
                        - No carnaval do Rio de Janeiro, Elba &eacute; homenageada pela Escola de Samba <strong><em>Unidos do Cabral</em></strong> com o enredo <strong><em>A fant&aacute;stica Elba Ramalho</em></strong>.<br><br>
                        - Mar&ccedil;o: excursiona por Portugal.<br><br>
                        - Abril: recebe o pr&ecirc;mio de <strong><em>Melhor show </em></strong>de 1989 por <strong><em>Popular Brasileira</em></strong> da Associa&ccedil;&atilde;o Paulista dos Cr&iacute;ticos de Arte (APCA).<br><br>
                        - Lan&ccedil;amento do filme <strong><em>Lambada</em></strong>, de Giandomenico Curi. Elba faz uma participa&ccedil;&atilde;o cantando o sucesso <strong><em>Ouro puro</em></strong>.<br><br>
                        - Leva seu show <em>Popular Brasileira</em> ao Palladium de Nova York.<br><br>
                        - Julho: vai ao ar pela TV Cultura um especial com o show <em>Popular Brasileira</em>.<br><br>
                        - Agosto: apresenta-se no <strong><em>3&ordm; Pr&ecirc;mio Sharp</em></strong> (atual <em>Pr&ecirc;mio da M&uacute;sica Brasileira</em>) e canta <strong><em>Meu mundo caiu</em></strong>, de Maysa (homenageada da noite). Recebe os pr&ecirc;mios de <strong><em>Melhor cantora regional</em></strong> e <strong><em>Melhor m&uacute;sica regional</em></strong>, por <strong><em>Jogo de cintura</em></strong> (Nando Cordel). E Dominguinhos ganhou o pr&ecirc;mio de <strong><em>Melhor arranjador regional</em></strong> pelo disco <strong><em>Popular brasileira</em></strong>.<br><br>
                        - Outubro: temporada de shows no Blue Note de Nova York com dire&ccedil;&atilde;o de Nelson Motta. Recebeu cr&iacute;ticas positivas dos jornais <em>The New York Times</em> e <em>Daily News</em>. De l&aacute; o show seguiu para Los Angeles, S&atilde;o Francisco e Boston. Era o embri&atilde;o do show <strong><em>Felicidade Urgente</em></strong>.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1991</h2>
                        <span class="ps-price">£30</span>
                        <p>- Janeiro: canta no <strong><em>Rock in Rio 2</em></strong>, desta vez realizado no Est&aacute;dio do Maracan&atilde;.<br><br>
                        - Abril: estreia nacional do show <strong><em>Felicidade Urgente</em></strong>, dirigido por Nelson Motta, no Palace/SP.<br><br>
                        - Maio: dirigida pela amiga Elba, a cantora Margareth Menezes faz a estreia nacional de seu show <strong><em>Kindala</em></strong>,no Palace/SP.<br><br>
                        - Canta no <strong><em>1&ordm; Festival de M&uacute;sica Latino-Americana de Caracas</em></strong>, na Venezuela.<br><br>
                        - Junho: o disco <strong><em>Felicidade Urgente</em></strong> &eacute; lan&ccedil;ado pela Polygram. Foi produzido por Nelson Motta.<br><br>
                        - Sucesso de p&uacute;blico e cr&iacute;tica, Elba volta a Nova York para mais shows, desta vez no Ballroom.<br><br>
                        - Dezembro: a TV Manchete exibe especial com o show <strong><em>Felicidade urgente</em></strong>.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1992</h2>
                        <span class="ps-price">£30</span>
                        <p>- Maio: o homenageado do <strong><em>5&ordm; Pr&ecirc;mio Sharp</em></strong> (<em>Pr&ecirc;mio da M&uacute;sica Brasileira</em>) foi Luiz Gonzaga. A premia&ccedil;&atilde;o aconteceu no Hotel Nacional do Rio e Elba foi agraciada na categoria regional como <strong><em>Melhor cantora</em></strong>. Cantou duas m&uacute;sicas de Gonzaga: <strong><em>D&uacute;vida</em></strong> e <strong><em>Qui nem jil&oacute;</em></strong> (com Dominguinhos).<br><br>
                        - Sai pela Polygram <strong><em>Encanto</em></strong>, trabalho produzido por Elba e Marcos Farias.<br><br>
                        - Junho: nas festividades de S&atilde;o Jo&atilde;o, no Parque do Povo, em Campina Grande, Elba recebe o t&iacute;tulo de <strong><em>Cidad&atilde; Campinense</em></strong>.<br><br>
                        - Julho: shows em Zurique, na Su&iacute;&ccedil;a.<br><br>
                        - Estreia nacional do show <strong><em>Encanto</em></strong> no Canec&atilde;o/RJ, show com dire&ccedil;&atilde;o da pr&oacute;pria Elba.<br><br>
                        - Setembro: shows na <strong><em>Exposi&ccedil;&atilde;o Universal de Sevilha &ndash; Expo-92</em></strong> (Espanha). Elba foi a &uacute;nica artista brasileira a apresentar-se na feira.<br><br>
                        - Em seguida inicia extensa turn&ecirc; internacional com apresenta&ccedil;&otilde;es na Fran&ccedil;a, Portugal, Inglaterra, Alemanha, It&aacute;lia e Uruguai.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1993</h2>
                        <span class="ps-price">£30</span>
                        <p>- Fevereiro: Elba &eacute; a atra&ccedil;&atilde;o do programa <strong><em>Ensaio</em></strong> da TV Cultura, com Manass&eacute;s ao viol&atilde;o e Oswaldinho no acordeom.<br><br>
                        - Maio: <strong><em>S&atilde;o Jo&atilde;o na estrada</em></strong>, de Moraes Moreira, em grava&ccedil;&atilde;o de Elba, &eacute; premiada como <strong><em>Melhor m&uacute;sica regional </em></strong>de 1992 no <strong>6&ordm; <em>Pr&ecirc;mio Sharp</em></strong> (<em>Pr&ecirc;mio da M&uacute;sica Brasileira</em>).<br><br>
                        - Junho: sai pelo selo Globo/Polydor a colet&acirc;nea <strong><em>O grande forr&oacute; de Elba Ramalho</em></strong>, que trouxe duas m&uacute;sicas in&eacute;ditas (<strong><em>Eu quero meu amor</em></strong> e <strong><em>Chegadinho</em></strong>) e teve grande sucesso comercial.<br><br>
                        - Setembro: canta pela segunda vez no <strong><em>Brazilian Day</em></strong>, em Nova York.<br><br>
                        - A gravadora Polygram coloca nas lojas a <strong><em>S&eacute;rie Colecionador</em></strong>, com todos os discos de Elba gravados na companhia at&eacute; aquele per&iacute;odo. Cinco deles ainda in&eacute;ditos no formato CD: <strong><em>Alegria</em></strong>, <strong><em>Do jeito que a gente gosta</em></strong>, <strong><em>Fogo na mistura</em></strong>, <strong><em>Elba</em></strong> e <strong><em>Fruto</em></strong>.<br><br>
                        - 2 de outubro: &eacute; inaugurado em Campina Grande/PB o <strong><em>Teatro Elba Ramalho</em></strong>, sede definitiva da Funda&ccedil;&atilde;o Art&iacute;sto-Cultural Manuel Bandeira (FACMA).<br><br>
                        - Novembro: estreia nacional do show <strong><em>Devora-me</em></strong>, dirigido por Miguel Falabella, no Imperator/RJ. Em seguida chega ao mercado o CD <strong><em>Devora-me</em></strong>, produzido pelo porto-riquenho Glenn Monroig.<br><br>
                        - Dezembro: especial da TV Record com a estreia do show <strong><em>Devora-me</em></strong>.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1994</h2>
                        <p>- Fevereiro: Elba canta pela primeira vez no carnaval de Salvador comandando o trio &ldquo;Br&oacute;der&rdquo; e como convidada de Daniela Mercury no trio dos &ldquo;Internacionais&rdquo;.<br><br>
                        - Maio: recebe no Rio, do <strong><em>7&ordm; Pr&ecirc;mio Sharp</em></strong> (<em>Pr&ecirc;mio da M&uacute;sica Brasileira</em>), o trof&eacute;u de <strong><em>Melhor cantora regional</em></strong> de 1993. Elba e Dominguinhos cantaram <em>Lamento sertanejo</em> para o homenageado da noite, Gilberto Gil.<br><br>
                        - Estreia na TV Globo a novela <strong><em>Tropicaliente</em></strong>, com a m&uacute;sica <strong><em>Cora&ccedil;&atilde;o da gente</em></strong> como tema abertura. Para promover o folhetim, o <em>Fant&aacute;stico</em> exibiu o clipe da m&uacute;sica.<br><br>
                        - 4 de agosto: falece em Jo&atilde;o Pessoa/PB, aos 68 anos, <strong><em>Geni Ramalho</em></strong>, m&atilde;e de Elba.<br><br>
                        - Participa em Cabo Verde do <strong><em>Festival da Ba&iacute;a das Gatas</em></strong> e tamb&eacute;m faz shows nas ilhas do Sal e S&atilde;o Vicente, no mesmo pa&iacute;s.<br><br>
                        - Setembro: ap&oacute;s muitos anos, volta a se apresentar no <strong><em>Projeto Seis e Meia</em></strong>, no Teatro Jo&atilde;o Caetano/RJ.<br><br>
                        - Elba (e boa parte da classe art&iacute;stica) participa da campanha presidencial de Fernando Henrique Cardoso.<br><br>
                        - Dezembro: participa de um Auto de Natal produzido por Moacyr G&oacute;es e Cia, com dire&ccedil;&atilde;o musical de Wagner Tiso. O espet&aacute;culo baseou-se no poema <strong><em>Morte e Vida Severina</em></strong> e foi encenado no Largo do Botic&aacute;rio, Cosme Velho/RJ.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1995</h2>
                        <span class="ps-price">£30</span>
                        <p>- Janeiro: Elba lan&ccedil;a pela Polygram um maxi-single com a m&uacute;sica <strong><em>Eu quero &eacute; botar meu bloco na rua</em></strong>, de S&eacute;rgio Sampaio, com quatro vers&otilde;es. Era um &ldquo;esquenta&rdquo; de seu futuro CD.<br><br>
                        - Abril: shows pelos Estados Unidos.<br><br>
                        - Maio: chega ao mercado <strong><em>Paisagem</em></strong>, seu &uacute;ltimo trabalho pela Polygram.<br><br>
                        - Junho: no Teatro Castro Alves, em Salvador/BA, acontece a estreia nacional do show <strong><em>Paisagem</em></strong>, dirigido por Moacyr G&oacute;es.<br><br>
                        - 24 de junho: &eacute; inaugurado em Caruaru/PE o <strong><em>Centro de Exposi&ccedil;&otilde;es Elba Ramalho</em></strong>, criado pelo f&atilde; e amigo da cantora Adenildo Batista. L&aacute; est&atilde;o expostos v&aacute;rios objetos de Elba, dentre fotos, figurinos e pr&ecirc;mios.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1996</h2>
                        <span class="ps-price">£30</span>
                        <p>- Janeiro: estreia em Natal/RN o show <strong><em>O Grande Encontro</em></strong>, no Gin&aacute;sio Humberto Nesi (o Machadinho).<br><br>
                        - Fevereiro: Elba &eacute; o enredo da Escola de Samba<strong><em> Vizinha Faladeira</em></strong> (Grupo A do Rio de Janeiro), que naquela noite apresentou <strong><em>Elba Popular Brasileira</em></strong>. A escola ficou em quarto lugar na classifica&ccedil;&atilde;o final.<br><br>
                        - Maio: apresenta, juntamente com Marieta Severo, o <strong><em>9&ordm; Pr&ecirc;mio Sharp</em></strong> (<em>Pr&ecirc;mio da M&uacute;sica Brasileira</em>) com os melhores de 1995. Foi premiada como <strong><em>Melhor cantora regional</em></strong>. O homenageando da noite foi Milton Nascimento.<br><br>
                        - Elba lan&ccedil;a seu primeiro trabalho pela BMG, <strong><em>Le&atilde;o do Norte</em></strong>, com produ&ccedil;&atilde;o de Robertinho de Recife.<br><br>
                        - Agosto: estreia do show <strong><em>Le&atilde;o do Norte</em></strong>, no Palace/SP, com dire&ccedil;&atilde;o de Jorge Fernando.<br><br>
                        - Setembro: participa de show coletivo em homenagem a Carmen Miranda no Licoln Center (Nova York).<br><br>
                        - Outubro: sai pela BMG o CD com o registro do show <strong><em>O Grande Encontro</em></strong>, ao lado de Alceu Valen&ccedil;a, Geraldo Azevedo e Z&eacute; Ramalho, gravado no Canec&atilde;o/RJ em julho.<br><br>
                        - Novembro: a TV Bandeirantes exibe especial com o show <strong><em>Le&atilde;o do Norte</em></strong>, gravado no Canec&atilde;o/RJ.<br><br>
                        - Dezembro: Elba &eacute; a atra&ccedil;&atilde;o do programa <strong><em>Uma hist&oacute;ria de sucesso</em></strong>, da TV Manchete.<br><br>
                        - Vai ao ar o especial de fim de ano da TV Bandeirantes com o show <strong><em>O Grande Encontro</em></strong>.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1997</h2>
                        <p>- Mar&ccedil;o: Elba recebe da Associa&ccedil;&atilde;o Paulista de Cr&iacute;ticos de Arte (APCA) o pr&ecirc;mio de <strong><em>Melhor show </em></strong>de 1996 por <strong><em>Le&atilde;o do Norte</em></strong>.<br><br>
                        - A cineasta K&aacute;tia Mesel lan&ccedil;a no <em>Festival Nacional de Cinema do Recife</em> o curta <strong><em>Recife de dentro pra fora</em></strong>, um document&aacute;rio po&eacute;tico sobre o rio Capibaribe, inspirado no poema <strong><em>O c&atilde;o sem Plumas</em></strong>, de Jo&atilde;o Cabral de Mello Neto. Elba, Z&eacute; Ramalho, Geraldo Azevedo e Alceu Valen&ccedil;a cantam o poema musicado.<br><br>
                        - Abril: entra no ar o primeiro <em>site</em> oficial de Elba.<br><br>
                        - Maio: o <strong><em>10&ordm; Pr&ecirc;mio Sharp</em></strong> (<em>Pr&ecirc;mio da M&uacute;sica Brasileira</em>), em homenagem &agrave; Rita Lee, contempla Elba como <strong><em>Melhor cantora regional</em></strong>.<br><br>
                        - Sai o segundo trabalho de Elba pela BMG, <strong><em>Baioque</em></strong>, em mais uma parceria com Robertinho de Recife na produ&ccedil;&atilde;o.<br><br>
                        - Julho: a NASA enviou para o planeta Marte a nave-rob&ocirc; <strong><em>Pathfinder</em></strong> e usava a grava&ccedil;&atilde;o de <strong><em>Coisinha do pai</em></strong>, com Elba e Jair Rodrigues, para despertar o rob&ocirc;. Este acontecimento causou grande celeuma na imprensa.<br><br>
                        - Agosto: estreia no Canec&atilde;o/RJ o show <strong><em>Baioque</em></strong>, dirigido por Jorge Fernando.<br><br>
                        - Setembro: atua como convidada especial no humor&iacute;stico <strong><em>Sai de baixo</em></strong>, da TV Globo, no epis&oacute;dio <em>Adivinhe quem vem para Cidamar</em>.<br><br>
                        - Outubro: participa da novela <strong><em>Mandacaru</em></strong>, da TV Manchete, interpretando uma profeta fan&aacute;tica.<br><br>
                        - Novembro: lan&ccedil;amento do segundo volume do projeto <strong><em>O Grande Encontro</em></strong>, desta vez em est&uacute;dio, com Elba, Geraldo e Z&eacute; Ramalho. Produ&ccedil;&atilde;o de Robertinho de Recife.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1998</h2>
                        <span class="ps-price">£30</span>
                        <p>- Maio: lan&ccedil;amento de <strong><em>Flor da Para&iacute;ba</em></strong>, o &uacute;ltimo da &ldquo;trilogia nordestina&rdquo; produzida por Robertinho de Recife.<br><br>
                        - Junho: show com Gilberto Gil no Olympia de Paris por ocasi&atilde;o da Copa do Mundo na Fran&ccedil;a. O acordeonista franc&ecirc;s Richard Galliano participou como convidado.<br><br>
                        - Julho: show em Concei&ccedil;&atilde;o/PB, sua terra natal, e inaugura&ccedil;&atilde;o do <strong><em>Centro de Exposi&ccedil;&otilde;es Elba Ramalho</em></strong>.<br><br>
                        - Festa de relan&ccedil;amento <em>site</em> oficial de Elba no Espa&ccedil;o Unibanco de Cinema em Botafogo/RJ.<br><br>
                        - Agosto: show de lan&ccedil;amento do novo CD em S&atilde;o Paulo no Moinho Santo Ant&ocirc;nio.<br><br>
                        - Estreia do show <strong><em>Flor da Para&iacute;ba</em></strong>, no Canec&atilde;o/RJ.<br><br>
                        - Setembro: o canal Multishow exibe um especial com o show <strong><em>Flor da Para&iacute;ba</em></strong>, gravado no Canec&atilde;o/RJ. Elba recebe Lenine e Marin&ecirc;s como convidados. A cantora foi o destaque do m&ecirc;s no canal: al&eacute;m do show, foi exibido o <em>making of</em> da apresenta&ccedil;&atilde;o bem como uma entrevista para o Projeto IBM.</p>
                    </div>
                    <div class="ps-content">
                        <h2>1999</h2>
                        <span class="ps-price">£30</span>
                        <p>- Janeiro: Elba inicia, em Trancoso/BA, o projeto <strong><em>Elba convida</em></strong>, que nasceu dos encontros promovidos por ela durante as f&eacute;rias de ver&atilde;o, quando costuma convidar amigos para passar uma temporada em sua casa de praia. A primeira a participar foi C&aacute;ssia Eller. Inicialmente, o dinheiro arrecadado com as apresenta&ccedil;&otilde;es era destinado a auxiliar a popula&ccedil;&atilde;o local. Anos mais tarde passou a dividi-lo com a ONG Bate Cora&ccedil;&atilde;o.<br><br>
                        - Fevereiro: desfila pela primeira vez como Madrinha de Bateria, na Escola de Samba <strong><em>Vila Isabel</em></strong>, que naquele ano apresentou o enredo <strong><em>Jo&atilde;o Pessoa, onde o sol brilha mais cedo</em></strong>.<br><br>
                        - Mar&ccedil;o: mini temporada no Teatro Rival/RJ com participa&ccedil;&atilde;o da banda feminina de samba Batuk de Saia.<br><br>
                        - Abril: juntamente com Gilberto Gil e Rita Lee, faz show em Curitiba/PR em homenagem ao Dalai Lama, que visitava o Brasil pela segunda vez.<br><br>
                        - Maio: lan&ccedil;amento do CD <strong><em>Marin&ecirc;s e sua gente &ndash; 50 anos de forr&oacute;</em></strong>, produ&ccedil;&atilde;o de Elba para reverenciar e resgatar uma de suas maiores influ&ecirc;ncias musicais.<br><br>
                        - Causa pol&ecirc;mica na imprensa uma publica&ccedil;&atilde;o errada do Di&aacute;rio Oficial da Uni&atilde;o, cujo conte&uacute;do informava que Elba receberia da Sudam um valor absurdo por um show no anivers&aacute;rio do ent&atilde;o Presidente da Rep&uacute;blica Fernando Henrique Cardoso &ndash; o que foi rapidamente esclarecido.<br><br>
                        - Junho: ganha o <strong><em>12&ordm; Pr&ecirc;mio Sharp</em></strong> (Pr&ecirc;mio da M&uacute;sica Brasileira) como <strong><em>Melhor cantora regional</em></strong> de 1998. Neste ano n&atilde;o houve festa para entrega do Pr&ecirc;mio.<br><br>
                        - Julho: Elba recebe o t&iacute;tulo de <strong><em>Cidad&atilde; Pessoense</em></strong> da C&acirc;mara Municipal de Jo&atilde;o Pessoa.<br><br>
                        - Ap&oacute;s 13 anos, Elba volta a se apresentar no <strong><em>Montreux Jazz Festival</em></strong>, oportunidade em que faz uma turn&ecirc; pela Europa.<br><br>
                        - Outubro: comemorando 20 anos de carreira, Elba lan&ccedil;a <strong><em>Solar</em></strong>, trabalho produzido por seu parceiro musical Z&eacute; Am&eacute;rico Bastos. O CD &eacute; duplo, sendo um de est&uacute;dio e outro ao vivo.<br><br>
                        - Estreia no Canec&atilde;o/RJ o show <strong><em>Solar</em></strong>, com dire&ccedil;&atilde;o de Jorge Fernando.</p>
                    </div>
                    <div class="ps-content">
                        <h2>2000</h2>
                        <span class="ps-price">£30</span>
                        <p>- Abril: no anivers&aacute;rio de 500 anos do Brasil, a TV Globo transmite ao vivo de Bras&iacute;lia show comemorativo com Elba e v&aacute;rios artistas.<br><br>
                        - Julho: canta no encerramento da <em>Noite brasileira</em> do <strong><em>Montreux Jazz Festival</em></strong> como convidada da Orquestra de Frevos Pernambuco em Canto.<br><br>
                        - Setembro: Elba e Geraldo Azevedo cantam em Los Angeles e gravam a apresenta&ccedil;&atilde;o para lan&ccedil;ar em disco &ndash; mas o projeto acaba n&atilde;o sendo concretizado.<br><br>
                        - Novembro: chega ao mercado o CD <strong><em>O Grande Encontro &ndash; 3</em></strong>, com a participa&ccedil;&atilde;o de Lenine, Belchior e Moraes Moreira. Produ&ccedil;&atilde;o de Guto Gra&ccedil;a Mello.<br><br>
                        - Lan&ccedil;amento do livro <strong><em>Elba 20 anos &ndash; Ensaio fotogr&aacute;fico</em></strong>, organizado pelo poeta Ben&eacute; Fonteles. Elba faz um show especial para a ocasi&atilde;o, em formato ac&uacute;stico, chamado <strong><em>Intimidades e afinidades</em></strong>. Ben&eacute; participa fazendo um talk-show, entrevistando-a.</p>
                    </div>
                    <div class="ps-content">
                        <h2>2001</h2>
                        <span class="ps-price">£30</span>
                        <p>- Janeiro: Elba e Z&eacute; Ramalho fazem show hist&oacute;rico no <strong><em>Rock in Rio 3</em></strong>, homenageando Raul Seixas.<br><br>
                        - Fevereiro: por conta do grande sucesso, Elba e Z&eacute; Ramalho repetem o show do <em>Rock in Rio</em> no ATL Hall/RJ.<br><br>
                        - Mar&ccedil;o: lan&ccedil;amento do CD <strong><em>Cirandeira</em></strong>, com Elba e Marcos Farias dividindo a produ&ccedil;&atilde;o.<br><br>
                        - Junho: show de lan&ccedil;amento do CD <strong><em>Cirandeira</em></strong> na Feira de S&atilde;o Crist&oacute;v&atilde;o, com participa&ccedil;&atilde;o do Forr&oacute;&ccedil;acana e de Fuba de Tapero&aacute;.<br><br>
                        - Julho: estreia do show <strong><em>Cirandeira</em></strong>, no Canec&atilde;o/RJ.<br><br>
                        - 17 de agosto: no dia em que completou 50 anos, Elba se casou no civil com <strong><em>Gaetano Lops</em></strong>, com quem se relacionava desde 1996.<br><br>
                        - Outubro: lan&ccedil;amento do CD coletivo <strong><em>Cora&ccedil;&atilde;o de M&atilde;e</em></strong> (selo Ramax, distribu&iacute;do pela Som Livre). Foi produzido por Elba como uma homenagem &agrave; Virgem Maria e &agrave;s suas experi&ecirc;ncias de f&eacute; com ela. Participaram do trabalho v&aacute;rias estrelas da MPB. A venda foi toda revertida para a caridade.</p>
                    </div>
                    <div class="ps-content">
                        <h2>2002</h2>
                        <span class="ps-price">£30</span>
                        <p>- Mar&ccedil;o: em homenagem ao Rei do Bai&atilde;o, Luiz Gonzaga, Elba lan&ccedil;a o disco <strong><em>Elba canta Luiz</em></strong>, tendo dividido a produ&ccedil;&atilde;o com amigo Dominguinhos. Em dezembro daquele ano, Gonzag&atilde;o completaria 90 anos.<br><br>
                        - Junho: show de lan&ccedil;amento do CD <strong><em>Elba canta Luiz</em></strong> no S&atilde;o Jo&atilde;o de Caruaru/PE e em seguida no S&atilde;o Jo&atilde;o da Marina da Gl&oacute;ria, no Rio.<br><br>
                        - Julho: Elba e Gaetano adotam a primeira filha, <strong><em>Maria Clara</em></strong>, rec&eacute;m-nascida (em 30 de junho de 2002).<br><br>
                        - Participa da campanha pol&iacute;tica de Jos&eacute; Serra &agrave; Presid&ecirc;ncia da Rep&uacute;blica.<br><br>
                        - Julho: estreia nacional do show <strong><em>Elba canta Luiz</em></strong> no DirecTV Music Hall/SP, com dire&ccedil;&atilde;o de Gabriel Villela.<br><br>
                        - Agosto: no <strong>1&ordm; <em>Pr&ecirc;mio Caras</em></strong> (<em>Pr&ecirc;mio da M&uacute;sica Brasileira</em>), Elba vence como <strong><em>Melhor cantora regional</em></strong>.<br><br>
                        - Outubro: grava&ccedil;&atilde;o do DVD com o show <strong><em>Elba canta Luiz</em></strong> no ATL Hall/RJ.</p>
                    </div>
                    <div class="ps-content">
                        <h2>2003</h2>
                        <span class="ps-price">£30</span>
                        <p>- Mar&ccedil;o: lan&ccedil;amento do CD/DVD <strong><em>Elba Ao Vivo</em></strong>, com o show <strong><em>Elba canta Luiz</em></strong>.<br><br>
                        - Mar&ccedil;o: o projeto <strong><em>Elba convida</em></strong> &eacute; apresentado pela primeira vez fora de Trancoso/BA. Foi no Via Funchal/SP, recebendo Ivete Sangalo e Falamansa. Meses depois receberia Geraldo Azevedo e Z&eacute;lia Duncan em Campinas.<br><br>
                        - Julho: Elba vence como <strong><em>Melhor cantora regional</em></strong> o <strong>1&ordm; <em>Pr&ecirc;mio Tim</em></strong> (<em>Pr&ecirc;mio da M&uacute;sica Brasileira</em>).<br><br>
                        - Agosto: participa do especial de 50 anos da TV Record.<br><br>
                        - Setembro: funda no Rio de Janeiro uma ONG com objetivo de ajudar na ado&ccedil;&atilde;o de crian&ccedil;as, a <strong><em>Associa&ccedil;&atilde;o Beneficente Bate Cora&ccedil;&atilde;o</em></strong>.<br><br>
                        - Canta na reinaugura&ccedil;&atilde;o da Feira de S&atilde;o Crist&oacute;v&atilde;o/RJ, agora dentro de um pavilh&atilde;o chamado <em>Centro Luiz Gonzaga de Tradi&ccedil;&otilde;es Nordestinas</em>.<br><br>
                        - Dezembro: em Natal/RN, participa da 6&ordf; edi&ccedil;&atilde;o do <strong><em>Auto de Natal</em></strong>, apresentado na Pra&ccedil;a C&iacute;vica do Campus Central da UFRN. O espet&aacute;culo foi baseado em <strong><em>Morte e Vida Severina</em></strong>, de Jo&atilde;o Cabral de Melo Neto e dirigido por Moacyr G&oacute;es.</p>
                    </div>
                    <div class="ps-content">
                        <h2>2004</h2>
                        <span class="ps-price">£30</span>
                        <p>- Maio: mini temporada de Elba e Dominguinhos no Canec&atilde;o/RJ, embri&atilde;o do futuro disco/show da dupla.<br><br>
                        - Elba e Dominguinhos antecipam as festas juninas e cantam na abertura do <em>1&ordm; S&atilde;o Jo&atilde;o do Nordeste em S&atilde;o Paulo</em>, realizado no samb&oacute;dromo do Anhembi.<br><br>
                        - Julho: no <strong>2&ordm; <em>Pr&ecirc;mio Tim</em></strong> (<em>Pr&ecirc;mio da M&uacute;sica Brasileira</em>) Elba &eacute; agraciada como <strong><em>Melhor cantora regional</em> </strong>de 2003.<br><br>
                        - Agosto: Elba e Dominguinhos se apresentam no Tom Brasil/SP.</p>
                    </div>
                    <div class="ps-content">
                        <h2>2005</h2>
                        <p>- Mar&ccedil;o: lan&ccedil;amento de <strong><em>Elba e Dominguinhos</em></strong>, &aacute;lbum de despedida de Elba da gravadora BMG. Foi produzido por Z&eacute; Am&eacute;rico Bastos.<br><br>
                        - Abril: Elba canta em Macau, na China! Foi a primeira vez que um artista brasileiro se apresentou por l&aacute;.<br><br>
                        - Maio: o show <strong><em>Elba e Dominguinhos</em></strong> tem sua estreia nacional no Tom Brasil/SP, com dire&ccedil;&atilde;o de Moacyr G&oacute;es.<br><br>
                        - Junho: Elba &eacute; empossada na <em>Academia Feminina de Letras e Artes da Para&iacute;ba</em>, ocupando a cadeira n&uacute;mero 36, que tem como patrona a musicista Maria das Merc&ecirc;s de Ara&uacute;jo Gambarra.<br><br>
                        - Outubro: o CD <strong><em>Elba e Dominguinhos</em></strong> &eacute; indicado ao <strong><em>Grammy Latino</em></strong> na categoria <strong><em>Melhor &aacute;lbum regional</em></strong>, mas n&atilde;o leva (quem ganhou foi Ivete Sangalo com seu <em>MTV Ao Vivo</em>).<br><br>
                        - Dezembro: participa&ccedil;&atilde;o no especial <strong><em>Folias de Natal</em></strong> da Xuxa, na TV Globo, cantando <strong><em>Haja festa</em></strong>, um pastoril tradicional de Natal, relembrando a trilha sonora de sua inf&acirc;ncia.</p>
                        
                    </div>
                    <div class="ps-content">
                        <h2>2006</h2>
                        <span class="ps-price">£30</span>
                        <p>- Fevereiro: grande pol&ecirc;mica &agrave; vista! Durante um show em novembro de 2005, Elba posiciona-se a favor da revitaliza&ccedil;&atilde;o do <strong><em>rio S&atilde;o Francisco</em></strong>, para, s&oacute; depois, haver uma discuss&atilde;o sobre a transposi&ccedil;&atilde;o. Esta declara&ccedil;&atilde;o custou &agrave; cantora uma baita dor de cabe&ccedil;a e muita decep&ccedil;&atilde;o. A C&acirc;mara Municipal de Jo&atilde;o Pessoa emitiu nota de rep&uacute;dio &agrave; Elba, exigindo retrata&ccedil;&atilde;o. Chegaram a acus&aacute;-la de &ldquo;interesses pol&iacute;ticos&rdquo; e de ter &ldquo;recebido dinheiro&rdquo; para tal. Quando a imprensa noticiou que a artista puxaria no carnaval o tradicional bloco <strong><em>Muri&ccedil;ocas do Miramar</em></strong>, os insatisfeitos com a opini&atilde;o da cantora fizeram incita&ccedil;&atilde;o p&uacute;blica &agrave; agress&atilde;o f&iacute;sica contra ela. Temerosa, cancelou todos os shows que tinha programado para o carnaval na Para&iacute;ba.<br><br>
                        - Fevereiro: Elba puxa sozinha o trio <strong><em>Expresso 2222</em></strong>, de Gilberto Gil, no carnaval de Salvador/BA.<br><br>
                        - Mar&ccedil;o: apresenta no Teatro Municipal de Niter&oacute;i/RJ um show em formato ac&uacute;stico e intimista (sanfona, viol&atilde;o e percuss&atilde;o), iniciando uma mini-turn&ecirc; por v&aacute;rias cidades.<br><br>
                        - Maio: Elba recebe a <strong><em>Medalha Tiradentes</em></strong>, principal homenagem do Estado do Rio de Janeiro, por sua atua&ccedil;&atilde;o na &aacute;rea social com a <em>Associa&ccedil;&atilde;o Beneficente Bate Cora&ccedil;&atilde;o</em> e contribui&ccedil;&atilde;o com a <em>Associa&ccedil;&atilde;o dos Amigos da Inf&acirc;ncia com C&acirc;ncer (Aminca)</em>.<br><br>
                        - Junho: ap&oacute;s toda a pol&ecirc;mica no in&iacute;cio do ano, Elba volta a cantar na Para&iacute;ba, na festa de S&atilde;o Jo&atilde;o da cidade de Bananeiras. Ainda assim, esta foi a primeira vez em muitos anos que Elba n&atilde;o se apresentou em Campina Grande durante as festividades juninas. Depois do show, a cantora recebeu a <strong><em>Medalha Escritor Edilberto Coutinho</em></strong> das m&atilde;os da prefeita Marta Ramalho e do poeta e deputado federal Ronaldo Cunha Lima.<br><br>
                        - Julho: canta em Berlim, durante a Copa da Alemanha.<br><br>
                        - Elba e Dominguinhos recebem no Rio o <strong><em>4&ordm; Pr&ecirc;mio Tim</em></strong> (<em>Pr&ecirc;mio da M&uacute;sica Brasileira</em>) em duas categorias: <strong><em>Melhor Dupla Regional</em></strong> e <strong><em>Melhor Can&ccedil;&atilde;o</em></strong>, por <strong><em>Rio de sonho</em></strong>, de Dominguinhos e Wally Bianchi.<br><br>
                        - Setembro: participa do projeto <strong><em>Credicard Vozes</em></strong>, no Bourbon Street, famosa casa de jazz de S&atilde;o Paulo. No repert&oacute;rio do espet&aacute;culo, cl&aacute;ssicos do jazz e do blues norte americano, al&eacute;m de Cazuza, Cartola, Chico, Gonzaga e Piaf.</p>
                    </div>
                    <div class="ps-content">
                        <h2>2007</h2>
                        <span class="ps-price">£30</span>
                        <p>- Fevereiro: Elba e Gaetano adotam outra filha, <strong><em>Maria Esperan&ccedil;a</em></strong> (nascida em 10 de setembro de 2006).<br><br>
                        - Maio: grava&ccedil;&atilde;o do DVD <strong><em>Ra&iacute;zes e Antenas</em></strong> no Audit&oacute;rio do Ibirapuera/SP, com v&aacute;rios convidados.<br><br>
                        - Julho: o pai de Elba, Jo&atilde;o Nunes, completa 90 anos e a fam&iacute;lia faz uma grande festa. Elba grava um CD especial para a ocasi&atilde;o, que foi distribu&iacute;do apenas para os convidados.<br><br>
                        - Setembro: inicia a nova turn&ecirc; <strong><em>Ra&iacute;zes e Antenas</em></strong> com show no Teatro Paulo Pontes em Jo&atilde;o Pessoa/PB.<br><br>
                        - Em Jo&atilde;o Pessoa, a artista recebe a <strong><em>Medalha Epit&aacute;cio Pessoa</em></strong>, a mais alta honra do Estado da Para&iacute;ba.<br><br>
                        - Outubro: ap&oacute;s muita especula&ccedil;&atilde;o, finalmente chega &agrave;s lojas o CD <strong><em>Qual o assunto que mais lhe interessa?</em></strong>, produzido por Lula, Tost&atilde;o e Yuri Queiroga. &Eacute; seu primeiro independente, lan&ccedil;ado em parceria com o selo Brazilmusica.</p>
                    </div>
                    <div class="ps-content">
                        <h2>2008</h2>
                        <span class="ps-price">£30</span>
                        <p>- Janeiro: no mesmo dia em que batizaram a segunda filha, Maria Esperan&ccedil;a, Elba e Gaetano se casaram no religioso em Trancoso/BA, ap&oacute;s quase 12 anos de uni&atilde;o.<br><br>
                        - Maio: Elba concorre ao <strong><em>6&ordm; Pr&ecirc;mio Tim</em></strong> (<em>Pr&ecirc;mio da M&uacute;sica Brasileira</em>) em duas categorias, mas n&atilde;o leva. O homenageado da noite &eacute; Dominguinhos e ela canta <strong><em>De volta pro aconchego</em></strong> com ele. Ivete Sangalo, que ganhou como <em>Melhor cantora</em>, prestou homenagem &agrave; Elba.<br><br>
                        - Julho: apresenta&ccedil;&atilde;o no <strong><em>Montreux Jazz Festival</em></strong>. Participa ainda do show de Gilberto Gil no festival. De l&aacute;, seguiu para a Alemanha e Portugal.<br><br>
                        - Outubro: chega ao mercado o DVD <strong><em>Ra&iacute;zes e Antenas</em></strong>. &Eacute; o terceiro trabalho de Elba neste formato, e tamb&eacute;m feito de forma independente. Al&eacute;m do show gravado em maio do ano anterior, h&aacute; um document&aacute;rio sobre a vida da cantora, incluindo imagens em sua terra natal, Concei&ccedil;&atilde;o/PB.<br><br>
                        - Novembro: Elba ganha o <strong><em>Grammy Latino</em></strong> de melhor disco na categoria <strong><em>Contemporany Brazilian Roots</em></strong> pelo CD <strong><em>Qual o assunto que mais lhe interessa?</em></strong>.<br><br>
                        - Chega ao fim o casamento de Elba e Gaetano.<br><br>
                        - Dezembro: Elba adota sua terceira filha, <strong>Maria Paula</strong>, ent&atilde;o com 5 anos (nascida em 17 de fevereiro de 2003).</p>
                    </div>
                    <div class="ps-content">
                        <h2>2009</h2>
                        <span class="ps-price">£30</span>
                        <p>- Mar&ccedil;o: em virtude do cancelamento do show de encerramento do carnaval no Marco Zero (uma forte chuva estragou a estrutura do palco), Elba se apresentou em Recife/PE na festa de anivers&aacute;rio de 472 anos cidade. Naquela noite, um susto: Elba caiu do palco, mas n&atilde;o se machucou.<br><br>
                        - Abril: chega ao mercado <strong><em>Balaio de Amor</em></strong>, trabalho que comemora os 30 anos de carreira de Elba. Desta vez, o disco foi distribu&iacute;do pela gravadora Biscoito Fino. Foi produzido por Elba em parceria com Cezzinha Thomaz.<br><br>
                        - Maio: festa de lan&ccedil;amento do CD <strong><em>Balaio de Amor</em></strong> na Loja Passadisco em Recife/PE, s&iacute;mbolo de resist&ecirc;ncia das lojas de disco e point da m&uacute;sica nordestina.<br><br>
                        - Sem show espec&iacute;fico, Elba lan&ccedil;a <strong><em>Balaio de Amor</em></strong> na abertura do S&atilde;o Jo&atilde;o de Caruaru.<br><br>
                        - Junho: dentro das comemora&ccedil;&otilde;es dos 30 anos de carreia da cantora, a Universal Music rep&otilde;e em cat&aacute;logo reedi&ccedil;&otilde;es caprichadas dos discos <strong><em>Alegria</em></strong>, <strong><em>Cora&ccedil;&atilde;o Brasileiro</em></strong>, <strong><em>Do jeito que a gente gosta</em></strong> e <strong><em>Fogo na mistura</em></strong>.<br><br>
                        - Agosto: mais uma pol&ecirc;mica: Elba faz um show para o movimento contra o aborto em Bras&iacute;lia/DF e &eacute; duramente criticada por ONGs pr&oacute;-aborto.<br><br>
                        - Setembro: canta no <strong><em>Brazilian Day</em></strong> em Nova York.<br><br>
                        - Novembro: Elba ganha o <strong><em>Grammy Latino</em></strong> de melhor disco na categoria <strong><em>Tropical Brazilian Roots</em></strong> por <strong><em>Balaio de Amor</em></strong>.<br><br>
                        - Segundo semestre: grava&ccedil;&atilde;o de um novo disco produzido por Cezzinha Thomaz, que recebe o nome de <em>Balaio de Amor 2</em> e em seguida <em>Forr&oacute; brasileiro</em>, mas que acaba engavetado. Partes destas grava&ccedil;&otilde;es seriam aproveitadas mais a frente no CD <strong><em>Vambora l&aacute; dan&ccedil;ar</em></strong>.</p>
                    </div>
                    <div class="ps-content">
                        <h2>2010</h2>
                        <span class="ps-price">£30</span>
                        <p>- Fevereiro: ap&oacute;s muitos anos de espera, finalmente o disco <strong><em>Elba</em></strong>, de 1981, &eacute; relan&ccedil;ado em formato CD.<br><br>
                        - Mar&ccedil;o: show no Marco Zero em Recife/PE, no anivers&aacute;rio da cidade, para registro do DVD comemorativo dos 30 anos de carreira.<br><br>
                        - Grava&ccedil;&atilde;o do especial <strong><em>Roberto Carlos &ndash; Emo&ccedil;&otilde;es sertanejas</em></strong>, no Gin&aacute;sio do Ibirapuera/SP. Elba canta <strong><em>Esque&ccedil;a</em></strong>. O programa foi exibido em abril e posteriormente lan&ccedil;ado em CD/DVD.<br><br>
                        - Abril: susto com a sa&uacute;de. Elba descobriu e tratou rapidamente de um c&acirc;ncer de mama.<br><br>
                        - Julho: <strong><em>Grande Encontro da Solidariedade</em></strong>, com Elba, Alceu e Geraldo Azevedo no Teatro Guararapes em Olinda/PE, show beneficente para as v&iacute;timas das enchentes ocorridas em Pernambuco e Alagoas.<br><br>
                        - Agosto: &eacute; agraciada no <strong><em>21&ordm; Pr&ecirc;mio da M&uacute;sica Brasileira</em></strong> como <strong><em>Melhor cantora regional</em></strong>.<br><br>
                        - Elba emite nota oficial esclarecendo que a voz usada na campanha do candidato Jos&eacute; Serra &agrave; Presid&ecirc;ncia da Rep&uacute;blica n&atilde;o &eacute; a sua &ndash; o que j&aacute; vinha causando certa celeuma na imprensa.<br><br>
                        - Setembro: participa do especial de <strong><em>25 anos</em></strong> do programa <strong><em>Sem Censura</em></strong>, apresentado por Leda Nagle na TV Brasil. Em novembro voltou &ndash; em edi&ccedil;&atilde;o exclusiva &ndash; para lan&ccedil;ar o novo disco, tendo como convidados Br&aacute;ulio Tavares e Geraldo Azevedo.<br><br>
                        - Outubro: lan&ccedil;amento de <strong><em>Marco Zero Ao Vivo</em></strong>, seu 30&ordm; trabalho.<br><br>
                        - O disco <strong><em>Ave de Prata</em></strong> &eacute; tema de um dos epis&oacute;dios do programa <strong><em>O som do vinil</em></strong>, apresentado por Charles Gavin no Canal Brasil.<br><br>
                        - Faz shows de lan&ccedil;amento do novo disco no Teatro Rival/RJ.<br><br>
                        - Novembro: chega &agrave;s lojas o DVD <strong><em>Marco Zero Ao Vivo</em></strong>.</p>
                    </div>
                    <div class="ps-content">
                        <h2>2011</h2>
                        <span class="ps-price">£30</span>
                        <p>-  Janeiro: Elba faz um show dif&iacute;cil para o lan&ccedil;ar CD/DVD <strong><em>Marco Zero Ao vivo</em></strong> na casa Vivo Rio/RJ. A noite foi dedicada a seu pai, falecido dois dias antes. Durante o espet&aacute;culo houve tr&ecirc;s apag&otilde;es de energia, levando Elba a cantar &agrave; capela e emocionar o p&uacute;blico.<br><br>
                        - Fevereiro: no Canto da Ema/SP, participa do show em comemora&ccedil;&atilde;o aos 70 anos de Dominguinhos.<br><br>
                        - Mar&ccedil;o: Elba &eacute; convidada a integrar o time de cantoras &ndash; Daniela Mercury, Margareth Menezes, Paula Lima e Roberta S&aacute; &ndash; do show <strong><em>Mulheres de Chico</em></strong>, espet&aacute;culo fechado ao p&uacute;blico da Caixa Econ&ocirc;mica Federal, pela passagem dos 150 anos do banco, que iniciou no m&ecirc;s de janeiro em Bras&iacute;lia. Por&eacute;m, Elba s&oacute; estreou na turn&ecirc; em Fortaleza/CE e de l&aacute; seguiu por v&aacute;rias cidades.<br><br>
                        - Junho: show com Gilberto Gil no <strong><em>S&atilde;o Jo&atilde;o do Rio</em></strong>, na Quinta da Boa Vista, em que receberam os amigos Caetano Veloso, Dominguinhos, Geraldo Azevedo, Alcione, Exaltasamba e Gusttavo Lima. O registro deste espet&aacute;culo foi lan&ccedil;ado em CD/DVD em junho de 2012.<br><br>
                        - Julho: &eacute; mais uma vez agraciada como <strong><em>Melhor cantora regional</em></strong> no <strong><em>22&ordm; Pr&ecirc;mio da M&uacute;sica Brasileira</em></strong>.<br><br>
                        - Setembro: Elba atua como mestre de cerim&ocirc;nias do pr&ecirc;mio promovido pela <strong><em>Latin Recording Academy</em></strong>, institui&ccedil;&atilde;o do <strong><em>Grammy Latino</em></strong>, para homenagear o cantor Cauby Peixoto pelo conjunto da obra, em evento realizado em S&atilde;o Paulo.<br><br>
                        - Outubro: participa de um espet&aacute;culo em homenagem aos 80 anos do Cristo Redentor cantando <em>Valsa de uma cidade</em>, de Antonio Maria e Ismael Netto. O show foi lan&ccedil;ado posteriormente em CD/DVD.<br><br>
                        - O CD <strong><em>Marco Zero Ao Vivo</em></strong> &eacute; indicado ao <strong><em>Grammy Latino</em></strong> como <strong><em>Melhor &aacute;lbum regional</em></strong>, mas n&atilde;o leva (<em>Sinfonia &amp; Batuques</em>, de Nan&aacute; Vasconcelos, foi o vencedor).<br><br>
                        - Dezembro: na C&acirc;mara Municipal de Macei&oacute;/AL, Elba &eacute; agraciada com o t&iacute;tulo de <strong><em>Cidad&atilde; Honor&aacute;ria</em></strong>.</p>
                        
                    </div>
                    <div class="ps-content">
                        <h2>2012</h2>
                        <span class="ps-price">£30</span>
                        <p><span>- Mar&ccedil;o: em comemora&ccedil;&atilde;o ao Dia Internacional da Mulher e aos 80 anos do cantor e compositor S&eacute;rgio Ricardo, Elba participa da &oacute;pera-cordel <strong><em>Est&oacute;ria de Jo&atilde;o Joana</em></strong>, de Carlos Drummond de Andrade e S&eacute;rgio Ricardo, realizada em Bras&iacute;lia/DF com a Orquestra Sinf&ocirc;nica do Teatro Nacional. O elenco contou com Alceu Valen&ccedil;a e Geraldo Azevedo, al&eacute;m de S&eacute;rgio e seus dois filhos, Marina Lutfi e Jo&atilde;o Gurgel.</span><br><br>
                        <span>- Abril: participa do programa <strong><em>Som Brasil &ndash; Nordeste anos 70</em></strong>, ao lado de Geraldo Azevedo e uma nova gera&ccedil;&atilde;o de cantores: Karina Buhr, Nuria Mallena e Z&eacute; Cafofinho e Suas Correntes.</span><br><br>
                        <span>- Outubro: canta em Col&ocirc;nia (Alemanha) no <strong><em>Film erzaehlt Musik</em></strong>. Naquela oportunidade, apresentou mais alguns shows pelo pa&iacute;s.</span><br><br>
                        <span>- Novembro: recebe em Bras&iacute;lia a <strong><em>Medalha da Ordem do M&eacute;rito Cultural</em></strong> no grau <em>Comendador</em>, a mais alta comenda cultural do Brasil. A homenagem foi conferida pelo Minist&eacute;rio da Cultura e pela Presid&ecirc;ncia da Rep&uacute;blica tendo como tema o centen&aacute;rio de Luiz Gonzaga.</span><br><br>
                        <span>- Novembro: Elba &eacute; homenageada pelo programa <strong><em>Encontro com F&aacute;tima Bernardes</em></strong> (TV Globo), que teve como tema a carreira da artista.</span><br><br>
                        <span>- Dezembro: no centen&aacute;rio de Gonzag&atilde;o, Elba canta em homenagem ao Rei do Bai&atilde;o nas cidades de Recife (com a Orquestra Sinf&ocirc;nica da cidade, no Parque Dona Lindu) e Exu.</span></p>
                    </div>
                    <div class="ps-content">
                        <h2>2013</h2>
                        <span class="ps-price">£30</span>
                        <p><span>- Janeiro: lan&ccedil;amento do CD <strong><em>Vambora l&aacute; dan&ccedil;ar</em></strong>, pelo selo carioca Sala de Som.</span><br><br>
                        <span>- Fevereiro/mar&ccedil;o: shows de lan&ccedil;amento do novo trabalho na Choperia do SESC Pompeia/SP.</span><br><br>
                        <span>- Junho: &eacute; agraciada como <strong><em>Melhor cantora regional</em></strong> no <strong><em>24&ordm; Pr&ecirc;mio da M&uacute;sica Brasileira</em></strong>.</span><br><br>
                        <span>- Elba faz uma participa&ccedil;&atilde;o na novela <strong><em>Flor do Caribe</em></strong> (TV Globo). Al&eacute;m de atuar, canta as m&uacute;sicas <strong><em>Minha vida &eacute; te amar</em></strong> (que fez parte da trilha sonora) e <strong><em>Deitar e rolar</em></strong>.</span><br><br>
                        <span>- 23 de julho: sai de cena em S&atilde;o Paulo, aos 72 anos, Dominguinhos, amigo, parceiro e um dos compositores mais gravados por Elba. Neste dia ela estava em Aparecida/SP para participar da vig&iacute;lia pela chegada do Papa Francisco &agrave; cidade. Naquela noite cantou num show coletivo com v&aacute;rios artistas cat&oacute;licos e homenageou o amigo e mestre da sanfona.</span><br><br>
                        <span>- Setembro: show coletivo com Fernanda Abreu e Ivo Meirelles no <em>Palco Sunset</em> da quinta edi&ccedil;&atilde;o do <strong><em>Rock in Rio</em></strong>.</span><br><br>
                        <span>- O CD <strong><em>Vambora l&aacute; dan&ccedil;ar</em></strong> &eacute; indicado ao <strong><em>Grammy Latino</em></strong> na categoria <strong><em>Melhor &aacute;lbum de m&uacute;sica de ra&iacute;zes brasileiras</em></strong>. Mas quem levou foi o &aacute;lbum coletivo <em>Viva Gonzag&atilde;o, 100 anos</em>, produzido pelo mineiro T&eacute;o Azevedo.</span><br><br>
                        <span>- Novembro: recebe o t&iacute;tulo de <strong><em>Cidad&atilde; Paulistana</em></strong> da C&acirc;mara dos Vereadores de S&atilde;o Paulo.</span></p>
                    </div>
                    <div class="ps-content">
                        <h2>2014</h2>
                        <span class="ps-price">£30</span>
                        <p><span>- Abril: em Belo Horizonte, Elba e Geraldo Azevedo iniciam uma s&eacute;rie de shows juntos. A miniturn&ecirc; ao recebeu o nome de <strong><em>O Reencontro</em></strong>.</span><br><br>
                        <span>- Maio: inicia a grava&ccedil;&atilde;o de um novo trabalho em est&uacute;dio. Entre as novidades est&aacute; Lu&atilde; &ndash; seu filho &ndash; como produtor, atuando juntamente com Yuri Queiroga.</span><br><br>
                        <span>- Junho: ap&oacute;s de 16 anos, Elba volta a se apresentar em sua cidade natal, Concei&ccedil;&atilde;o/PB, com p&uacute;blico recorde para um show na cidade.</span><br><br>
                        <span>- Agosto: estreia nacional do show <strong><em>Cordas, Gonzaga e afins</em></strong>, com os grupos SaGrama e Quarteto Encore, no Teatro Castro Alves em Salvador. Dire&ccedil;&atilde;o de Andr&eacute; Brasileiro e S&eacute;rgio Campelo. Em setembro o show no Classic Hall (Olinda/PE) foi registrado para lan&ccedil;amento em DVD. A turn&ecirc; foi patrocinada pelo projeto <strong>Natura Musical</strong>.</span><br><br>
                        <span>- Dezembro: a TV Globo exibe em algumas capitais do Nordeste um especial com o show <strong><em>Cordas, Gonzaga e Afins</em></strong>.</span></p>
                    </div>
                    <div class="ps-content">
                        <h2>2015</h2>
                        <span class="ps-price">£30</span>
                        <p><span>- Mar&ccedil;o: lan&ccedil;amento do CD <strong><em>Do meu olhar pra fora</em></strong>, produzido Lu&atilde; (filho de Elba) e Yuri Queiroga, distribu&iacute;do pela Coqueiro Verde Records.</span><br><br>
                        <span>- Abril: shows de lan&ccedil;amento do novo trabalho no Sesc Vila Mariana/SP.</span><br><br>
                        <span>- Setembro: ap&oacute;s 35 anos, Elba retorna a Angola para se apresentar novamente pelo projeto <em>Kalunga, a voz do Brasil</em>. A comitiva foi capitaneada por Francis e Ol&iacute;via Hime e composta por Geraldo Azevedo, Mi&uacute;cha, Martinho da Vila, Mart&rsquo;n&aacute;lia, Yamandu Costa e Mariene de Castro.</span><br><br>
                        <span>- Outubro: Elba estrela a campanha do <strong><em>Outubro Rosa</em></strong> (preven&ccedil;&atilde;o do c&acirc;ncer de mama) da Gol Linhas A&eacute;reas.</span><br><br>
                        <span>- Novembro: com o objetivo de arrecadar fundos para a Par&oacute;quia S&atilde;o Conrado (Rio), Elba recebe Maria Beth&acirc;nia para um show no Teatro Oi Casa Grande.</span><br><br>
                        <span>- Dezembro: o CD/DVD com o show <strong><em>Cordas, Gonzaga e Afins</em></strong> come&ccedil;a a ser distribu&iacute;do pela gravadora Coqueiro Verde. A grava&ccedil;&atilde;o do espet&aacute;culo foi feita em parceria com a Rede Globo Nordeste e o Canal Brasil.</span></p>
                    </div>
                    <div class="ps-content">
                        <h2>2016</h2>
                        <span class="ps-price">£30</span>
                        <p><span>- Janeiro: grava para a folia 2016 <strong><em>Frevo, paix&atilde;o e zueira</em></strong>, com direito a videoclipe registrado no Pa&ccedil;o do Frevo em Recife. A can&ccedil;&atilde;o abriu todos os shows carnavalescos.</span><br/><br/>
                        <span>Abril: Elba foi escolhida para ser a homenageada do Carnaval 2017 da Escola de Samba Tom Maior, de S&atilde;o Paulo, com o enredo <em>Elba Ramalho canta em ora&ccedil;&atilde;o o folclore do Nordeste. Toque sanfoneiro forró, frevo e xaxado.</em></span><br/><br/>
                        <span>Junho: em Concei&ccedil;&atilde;o/PB, Elba recebe a <em>Comenda Maestro Jos&eacute; Siqueira</em>, homenagem prestada pela Câmara Municipal aos filhos ilustres da cidade.<br/>
                        - No 27º Prêmio da Música Brasileira Elba &eacute; agraciada com dois trof&eacute;us: <em>Melhor cantora regional e Melhor disco regional,</em> por <em>Cordas, Gonzaga e Afins.</em></span><br/><br/>
                        <span>Julho: Elba participa da turnê do Prêmio da Música Brasileira em homenagem a Gonzaguinha, apresentando-se em show coletivo nas cidades de Porto Alegre e Salvador.<br/>
                        - Canta no 50º Festival de Jazz de Montreux no show <em>Brazilian Dream</em>, em noite de homenagem a Claude Nobs, fundador do Festival.</span><br/><br/>

                        <span>- Setembro: estreia nacional da quarta edi&ccedil;&atilde;o do show <strong><em>O Grande Encontro</em></strong>, no Metropolitan/Rio de Janeiro, dirigido por Andr&eacute; Brasileiro.
                        </span>
                        <br/>
                        <br/>
                        <span>- Dezembro: lan&ccedil;amento do CD/DVD <strong><em>O Grande Encontro</em></strong> pela Sony/BMG. O show foi gravado em outubro, no Citibank Hall/S&atilde;o Paulo.</span>
                        <br/>
                        <br/>
                        </p>
                    </div>
                    <div class="ps-content">
                        <h2>2017</h2>
                        <span class="ps-price">£30</span>
                        <p>
                            <span>- Fevereiro: desfile na Escola de Samba paulistana Tom Maior, com o enredo
                                <strong><em>Elba Ramalho canta em ora&ccedil;&atilde;o o folclore do Nordeste. Toque sanfoneiro forr&oacute;, frevo e xaxado.</em>
                                </strong> A Escola ficou em 12º na classifica&ccedil;&atilde;o geral.</span>
                            <br/>
                            <br/>
                            <span>- Mar&ccedil;o: Elba, Alceu e Geraldo recebem o
                                <strong><em>DVD de Ouro</em></strong> pela venda de 25 mil c&oacute;pias pelo
                                <strong><em>Grande Encontro.</em></strong>
                            </span>
                            <br/>
                            <br/>
                            <span>- Maio: Elba &eacute; homenageada com uma exposi&ccedil;&atilde;o no Museu de Arte Popular da Para&iacute;ba (Museu dos Tr&ecirc;s Pandeiros) em Campina Grande, exibindo fotos, v&iacute;deos, pr&ecirc;mios, figurinos e objetos pessoais. Na abertura ela gravou um depoimento, tamb&eacute;m exibido durante a exposi&ccedil;&atilde;o.
                                <br/> - Todos os discos de Elba s&atilde;o lan&ccedil;ados em streaming, nas plataformas digitais.
                            </span>
                            <br/>
                            <br/>
                            <span>- Junho: Elba &eacute; envolvida numa grande polêmica por apoiar publicamente a campanha
                                <strong><em>#devolvameus&atilde;ojo&atilde;o,</em>
                                </strong> que chamava aten&ccedil;&atilde;o para o excesso de m&uacute;sica sertaneja nas programa&ccedil;&otilde;es de S&atilde;o Jo&atilde;o no Nordeste.</span>
                            <br/>
                            <br/>
                            <span>
                                 - Setembro: show no palco Sunset do <strong><em>Rock in Rio VII</em></strong>, coroando um ano de muito sucesso da turnê <strong><em>O Grande Encontro.</em></strong>
                            </span>
                            <br/>
                            <br/>
                            <span>- Dezembro: lan&ccedil;amento do disco <strong><em>Eu sou o caminho</em></strong> em edi&ccedil;&atilde;o digital. Produzido por Z&eacute; Am&eacute;rico Bastos, este foi seu segundo trabalho de cunho religioso (o primeiro foi <em>Cora&ccedil;&atilde;o de M&atilde;e</em>, em 2001). A edi&ccedil;&atilde;o em CD saiu em junho de 2018.</span>
                            <br/>
                            <br/>
                        </p>
                    </div>
                    <div class="ps-content">
                        <h2>2018</h2>
                        <span class="ps-price">£30</span>
                        <p>
                            <span>- Fevereiro: na maior maratona de carnaval dos &uacute;ltimos anos (dezoito shows), Elba lan&ccedil;a em S&atilde;o Paulo o trio el&eacute;trico <strong><em>Frevo Mulher</em></strong>, no Parque do Ibirapuera. E em Recife, bate seu recorde em tempo de desfile no Galo da Madrugada: 7 horas e meia.</span>
                            <br/>
                            <br/>
                            <span>- Abril: grava&ccedil;&atilde;o de uma homenagem do <strong><em>Boticário</em></strong> a Elba em Campina Grande, por seus 40 anos de carreira na m&uacute;sica, como parte da campanha <strong><em>Relicário da lindeza nordestina.</em></strong> Show no teatro da FACISA com participa&ccedil;&atilde;o de Geraldo Azevedo, Targino Gondim, Lucy Alves e Mariah Yohana (paraibana finalista do programa <strong><em>The Voice Kids</em></strong>).
                            </span>
                            <br/>
                            <br/>
                            <span>- Maio: Elba &eacute; a grande homenageada dos 10 anos do pr&ecirc;mio <strong><em>Trof&eacute;u Gonzag&atilde;o,</em></strong> em Campina Grande/PB.
                            </span>
                            <br/>
                            <br/>
                            
                        </p>
                    </div>

                   

        </div><!-- /ps-contentwrapper -->

            <div class="ps-slidewrapper">
        
            <div class="ps-slides">
                <div style="background-image:url({{ URL::asset('images/biografia/1.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/2.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/3.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/4.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/5.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/6.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/7.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/8.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/9.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/10.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/11.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/12.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/13.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/14.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/15.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/16.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/17.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/18.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/19.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/20.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/21.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/22.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/23.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/24.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/25.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/26.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/27.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/28.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/29.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/30.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/31.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/32.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/33.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/34.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/35.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/36.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/37.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/38.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/39.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/40.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/41.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/42.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/43.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/44.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/45.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/46.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/47.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/48.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/49.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/50.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/51.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/52.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/53.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/54.jpg') }});"></div>
                <div style="background-image:url({{ URL::asset('images/biografia/55.jpg') }});"></div>



                

                
         
            </div>
            
            <nav>
                <a href="#" class="ps-prev" ></a>
                <a href="#" class="ps-next" ></a>
            </nav>
            
        </div><!-- /ps-slidewrapper -->
        
    </section><!-- /ps-container -->
@stop


@section('script-js')
<script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/js/slider.js"></script>
<script type="text/javascript">
    $(function() {
        Slider.init();
    });
</script>

@stop