<?php

class AddSingle extends Seeder {

    public function run(){

        DB::table('singles')->delete(); // deleting old records.
        Single::create( [
        'ano_single' =>'1980',
        'single' =>'Banquete de Signos',
        'single_bg' =>'1980-single-banquete.jpg',
        'single_sm' => '1980-single-banquete-sm.jpg',
        'single_tx' => '<strong>Banquete de Signos</strong><br/>(Zé Ramalho)<br/>Epic/CBS 16.763 (1980)',
        ] );
        Single::create( [
        'ano_single' =>'1980',
        'single' =>'Banquete de Signos',
        'single_bg' =>'1980-single-banquete-veja-espiral.jpg',
        'single_sm' => '1980-single-banquete-veja-espiral-sm.jpg',
        'single_tx' => 'Banquete de signos (Zé Ramalho) <br/> Veja (Margarida) (Vital Farias) <br/>Espiral do tempo <br/>(Geraldo Azevedo / Carlos Fernando) <br/> Légua tirana <br/>(Luiz Gonzaga / Humberto Teixeira)<br/>Epic/CBS 22.104 (1980)',
        ] );
        Single::create( [
        'ano_single' =>'1981',
        'single' =>'Temporal',
        'single_bg' =>'1981-single-temporal.jpg',
        'single_sm' => '1981-single-temporal-sm.jpg',
        'single_tx' => '<strong>Temporal</strong><br/>(Bráulio Tavares / Fuba)<br/>Epic/CBS 17.372 (1981)',
        ] );
        Single::create( [
        'ano_single' =>'1982',
        'single' =>'Amor com Café',
        'single_bg' =>'1982-single-amorcomcafe.jpg',
        'single_sm' => '1982-single-amorcomcafe-sm.jpg',
        'single_tx' => '<strong>Amor com Café </strong><br/>(Cecéu)<br/><strong>No Som da Sanfona</strong>(Jackson do Pandeiro / Kaká do Asfalto)<br/>
        Ariola 101.427 (1982)',
        ] );

        Single::create( [
        'ano_single' =>'1983',
        'single' =>'Toque de Fole',
        'single_bg' =>'1983-single-toquedefole.jpg',
        'single_sm' => '1983-single-toquedefole-sm.jpg',
        'single_tx' => '<strong>Toque de Fole </strong><br/>(Bastinho Calixto / Ana Paula)<br/><strong>Apresentação da faixa</strong>(Elba)<br/>Ariola 1052 (1983)',
        ] );

        Single::create( [
        'ano_single' =>'1984',
        'single' =>'Coração Brasileiro',
        'single_bg' =>'1984-coracao.jpg',
        'single_sm' => '1984-coracao-sm.jpg',
        'single_tx' => '<strong>Canção da despedida</strong><br/>(Geraldo Azevedo/ Geraldo Vandré)<br/> <strong>Toque de fole</strong>(Bastinho Calixto/ Ana Paula)<br/><strong>Banho de Cheiro</strong><br/>(Carlos Fernando)<strong>Batida de Trem</strong><br/>(Vicente Barreto/ Carlos Pita)<br/>Barclay/Ariola 811.114-7 (1984)'

        ] );

        Single::create( [
        'ano_single' =>'1984',
        'single' =>'Do Jeito Que a Gente Gosta',
        'single_bg' =>'1984-single-dojeito.jpg',
        'single_sm' => '1984-single-dojeito-sm.jpg',
        'single_tx' => '<strong>Do jeito que a gente gosta</strong><br/> (Severo / Jaguar)<br/> <strong>Apresentação da faixa</strong> (Elba)<br/>Barclay/PolyGram 1071 (1984)'

        ] );
        Single::create( [
        'ano_single' =>'1985',
        'single' =>'Mexe... mexe, funga... funga',
        'single_bg' =>'1985-single-mexe.jpg',
        'single_sm' => '1985-single-mexe-sm.jpg',
        'single_tx' => '<strong>Mexe... mexe, funga... funga</strong><br/>(Severo / Jaguar)<br/>Barclay/PolyGram 1093 (1985)'
                ] );
        Single::create( [
        'ano_single' =>'1985',
        'single' =>'Pátria Amada',
        'single_bg' =>'1985-single-patria.jpg',
        'single_sm' => '1985-single-patria-sm.jpg',
        'single_tx' => '<strong>Pátria amada (Carlos Fernando)</strong><br/>Barclay/PolyGram MS 1106 (1985)'
                ] );
        Single::create( [
        'ano_single' =>'1986',
        'single' =>'Boca do Balão',
        'single_bg' =>'1986-single-boca.jpg',
        'single_sm' => '1986-single-boca-sm.jpg',
        'single_tx' => '<strong>Boca do balão</strong><br/>(Moraes Moreira / Zeca Barreto / Fred Góes)<br/><strong>Boca do balão(Remix)</strong><br/>(produção do remix: DJ Grego)<br/>Barclay/PolyGram 885.029-1 (1986)'
                ] );
        Single::create( [
        'ano_single' =>'1986',
        'single' =>'Remexer',
        'single_bg' =>'1986-single-remexer.jpg',
        'single_sm' => '1986-single-remexer-sm.jpg',
        'single_tx' => '<strong>Remexer</strong><br/>(Luiz Caldas / Carlinhos Brown)<br//>
Barclay/PolyGram 2801.158 (1986)
'
                ] );
        Single::create( [
        'ano_single' =>'1987',
        'single' =>'Vem ficar comigo',
        'single_bg' =>'1987-single-vem-folia.jpg',
        'single_sm' => '1987-single-vem-folia-sm.jpg',
        'single_tx' => '<strong>Vem ficar comigo</strong><br/>(Nando Cordel / Dominguinhos)<br/><strong>Folia brasileira</strong>(Nando Cordel)<br/>
PolyGram 2801.197 (1987)
'
                ] );
        Single::create( [
        'ano_single' =>'1988',
        'single' =>'Doida',
        'single_bg' =>'1988-single-doida.jpg',
        'single_sm' => '1988-single-doida-sm.jpg',
        'single_tx' => '<strong>Doida</strong><br/>(Nando Cordel)<br/>
PolyGram 2801.256 (1988)
'
                ] );
        Single::create( [
        'ano_single' =>'1988',
        'single' =>'Pisa no Meu Coração',
        'single_bg' =>'1988-single-pisa.jpg',
        'single_sm' => '1988-single-pisa-sm.jpg',
        'single_tx' => '<strong>Pisa no meu coração</strong><br/>(Nando Cordel / Fausto Nilo)<br/>
PolyGram 2801.288 (1988)'
                ] );
        Single::create( [
        'ano_single' =>'1989',
        'single' =>'Jogo de Cintura',
        'single_bg' =>'1989-single-jogo.jpg',
        'single_sm' => '1989-single-jogo-sm.jpg',
        'single_tx' => '<strong>Jogo de cintura</strong><br/> (Nando Cordel)<br/> Sem saída (Dominguinhos / Fausto Nilo)<br/>PolyGram 2801.335 (1989)
'
                        ] );
        Single::create( [
        'ano_single' =>'1990',
        'single' =>'Ouro Puro',
        'single_bg' =>'1990-single-ouro.jpg',
        'single_sm' => '1990-single-ouro-sm.jpg',
        'single_tx' => '<strong>Ouro puro (Ao vivo) (versão longa)</strong><br/>(Cecílio Nena / César Rossini)<br/><strong>Ouro puro (Ao vivo) (versão curta)</strong><br/>
PolyGram 2801.403 (1990)
'
                ] );
        Single::create( [
        'ano_single' =>'1991',
        'single' =>'Felicidade Urgente',
        'single_bg' =>'1991-single-felicidade.jpg',
        'single_sm' => '1991-single-felicidade-sm.jpg',
        'single_tx' => '<strong>Felicidade urgente</strong><br/>(Cláudio Zoli / Ronaldo Lobato Santos)<br/>com <strong>Cláudio Zoli</strong><br/>PolyGram 2801.493 (1991)
'
                ] );
        Single::create( [
        'ano_single' =>'1991',
        'single' =>'Fim de Jogo',
        'single_bg' =>'1991-single-fimdejogo.jpg',
        'single_sm' => '1991-single-fimdejogo-sm.jpg',
        'single_tx' => 'Fim de jogo<br/> (Jamil Joanes / Nelson Motta)<br/>
PolyGram 2801.503 (1991)
'
                ] );
        Single::create( [
        'ano_single' =>'1992',
        'single' =>'Cidadão',
        'single_bg' =>'1992-single-cidadao.jpg',
        'single_sm' => '1992-single-cidadao-sm.jpg',
        'single_tx' => '<strong>Cidadão (Remix – versão solo)</strong><br/>(Moraes Moreira / Capinan)<br/>produção do remix:<br/> José Celso Guida e Jairo Gualberto<br/>
PolyGram 2801.619 (1992)
'
                ] );
                Single::create( [
                'ano_single' =>'1992',
                'single' =>'Que Nem Vem Vem',
                'single_bg' =>'1992-single-que-nem.jpg',
                'single_sm' => '1992-single-que-nem-sm.jpg',
                'single_tx' => '<strong>Que nem vem vem</strong><br/>(Maciel Melo) / São João na estrada<br/>(Moraes Moreira)<br/>
PolyGram 2801.573 (1992)'
                        ] );

        Single::create( [
        'ano_single' =>'1993',
        'single' =>'Devora-me Outra Vez',
        'single_bg' =>'1993-single-devorame.jpg',
        'single_sm' => '1993-single-devorame-sm.jpg',
        'single_tx' => '<strong>Devora-me outra vez<br/>(Ven devorame outra vez)</strong><br/> (Palmer Hernandez / versão: Fausto Nilo)<br/>
PolyGram 2801.715 (1993)'
                ] );
        Single::create( [
        'ano_single' =>'1993',
        'single' =>'Devora-me Outra Vez (Remix)',
        'single_bg' =>'1993-single-devorameremix.jpg',
        'single_sm' => '1993-single-devorameremix-sm.jpg',
        'single_tx' => '<strong>Devora-me outra vez<br/>(Ven devorame outra vez) (Remix)</strong><br/> 
        (Palmer Hernandez / versão: Fausto Nilo) <br/> 
        <strong>Devora-me outra vez <br/>
        (Ven devorame outra vez)</strong><br/> 
        produção do remix: Moogie Canázio<br/>
PolyGram 2801.741 (1993)'

                ] );

        Single::create( [
        'ano_single' =>'1993',
        'single' =>'Eu Quero Meu amor',
        'single_bg' =>'1993-single-euquero.jpg',
        'single_sm' => '1993-single-euquero-sm.jpg',
        'single_tx' => '<strong>Eu quero meu amor</strong><br/>(Assisão)<br/>PolyGram 2801.651 (1993)'
                ] );

        Single::create( [
        'ano_single' =>'1994',
        'single' =>'Que Pena',
        'single_bg' =>'1994-single-quepena.jpg',
        'single_sm' => '1994-single-quepena-sm.jpg',
        'single_tx' => '<strong>Que pena (Ella ya no me quiere mas)</strong><br/> (Jorge Benjor)<br/><strong>Oscar D’León e Elba Ramalho <br/> Soy loco por ti, America</strong><br/> (Gilberto Gil / Capinan) <br/><strong>Oscar D’León</strong><br/>
RMM/Sony EPCD-81482 (1994)
'
                ] );
        Single::create( [
        'ano_single' =>'1994',
        'single' =>'Trampolim',
        'single_bg' =>'1994-single-trampolim.jpg',
        'single_sm' => '1994-single-trampolim-sm.jpg',
        'single_tx' => '<strong>Trampolim</strong><br/>(Ary Sperling / Cláudio Rabello)<br/>
PolyGram 2801.802 (1994)
'
                ] );


        Single::create( [
        'ano_single' =>'1995',
        'single' =>'Eu Quero é Botar Meu Bloco na Rua',
        'single_bg' =>'1995-single-bloconarua.jpg',
        'single_sm' => '1995-single-bloconarua-sm.jpg',
        'single_tx' => '(Sérgio Sampaio) versões: (1) Ska + Pop com Jheremmias Não Bate Corner <br/>(2) Frevo + Forró <br>(3) Salsa com Orquestra HB<br/>(4) Axé + Samba <br/>(5) Espanhol/Salsa: Me juego todo(versão: Maria Rosário Ovelar) com<br/>Orquestra HB PolyGram 2801.905(1995)'
                ] );
        Single::create( [
        'ano_single' =>'1995',
        'single' =>'Noturna',
        'single_bg' =>'1995-single-noturna.jpg',
        'single_sm' => '1995-single-noturna-sm.jpg',
        'single_tx' => '<strong>Noturna</strong><br/> (Ivan Lins / Vitor Martins)<br/>
PolyGram 2801.995(1995)'
                ] );
        Single::create( [
        'ano_single' =>'1995',
        'single' =>'Paisagem da Janela',
        'single_bg' =>'1995-single-paisagem.jpg',
        'single_sm' => '1995-single-paisagem-sm.jpg',
        'single_tx' => '<strong>Paisagem da janela</strong><br/> (Lô Borges / Fernando Brant)<br/> Tudo passa (Antônio Barros / Cecéu)<br/>
PolyGram 2801.926 (1995)
'
                ] );
        Single::create( [
        'ano_single' =>'1996',
        'single' =>'Chão de Giz',
        'single_bg' =>'1996-single-chao.jpg',
        'single_sm' => '1996-single-chao-sm.jpg',
        'single_tx' => '<strong>Onde tu tá, neném</strong><br/> (Luiz Bandeira) <br/> <strong>Chão de giz</strong><br/> (Zé Ramalho)<br/>
BMG-Ariola VP-0108 (1996)
'
                ] );
        Single::create( [
        'ano_single' =>'1997',
        'single' =>'Ciranda da Rosa Vermelha',
        'single_bg' =>'1997-single-ciranda.jpg',
        'single_sm' => '1997-single-ciranda-sm.jpg',
        'single_tx' => '<strong>Ciranda da rosa vermelha</strong><br/>(Alceu Valença / refrão do folclore)<br/><strong>A música do nosso amor</strong><br/> (Saul Barbosa / Jorge Portugal)<br/>
BMG-Brasil VP-0196 (1997)
'
                ] );
        Single::create( [
        'ano_single' =>'1998',
        'single' =>'Casa Comida e Paixão',
        'single_bg' =>'1998-single-casacomida.jpg',
        'single_sm' => '1998-single-casacomida-sm.jpg',
        'single_tx' => '<strong>Casa, comida e paixão</strong><br/> (Dominguinhos / Fausto Nilo)<br/>
BMG-Brasil VP-0325 (1998)
'
                ] );
        Single::create( [
        'ano_single' =>'1998',
        'single' =>'Me Pegue Pra Chamegar',
        'single_bg' =>'1998-single-mepegue.jpg',
        'single_sm' => '1998-single-mepegue-sm.jpg',
        'single_tx' => '<strong>Me pegue pra chamegar</strong><br/> (Tadeu Mathias)<br/>
BMG-Brasil VP-0310 (1998)
'
                ] );
        Single::create( [
        'ano_single' =>'1998',
        'single' =>'Paris',
        'single_bg' =>'1998-single-paris.jpg',
        'single_sm' => '1998-single-paris-sm.jpg',
        'single_tx' => '<strong>Paris</strong><br/>(Alcyr Pires Vermelho / Alberto Ribeiro)<br/>com <strong>Carmen Miranda</strong><br/>BMG-Brasil VP-0266 (1997)
'
                ] );
        Single::create( [
        'ano_single' =>'1999',
        'single' =>'Pra Ninar meu Coração',
        'single_bg' =>'1999-single-praninar.jpg',
        'single_sm' => '1999-single-praninar-sm.jpg',
        'single_tx' => '<strong>Pra ninar meu coração </strong><br/>(Maciel Melo / Luis Fidélis) <br/> <strong>Elba Ramalho / Coração incerto</strong> <br/>(B. Marques / C. Verçosa / L. Lacerda)<br/><strong>Chiclete com Banana</strong><br/>
BMG-Brasil VP-0411 (1999)
'
                ] );
        Single::create( [
        'ano_single' =>'2000',
        'single' =>'Trem das Ilusões',
        'single_bg' =>'2000-single-trem.jpg',
        'single_sm' => '2000-single-trem-sm.jpg',
        'single_tx' => '<strong>Trem das ilusões</strong><br/> (Alceu Valença / Herbert Azul) <br/> com <strong>Alceu Valença</strong><br/>
BMG-Brasil VP-0458 (1999)
'
                ] );
        Single::create( [
        'ano_single' =>'2000',
        'single' =>'Forró do Xenhenhém',
        'single_bg' =>'2000-single-xenhenhem.jpg',
        'single_sm' => '2000-single-xenhenhem-sm.jpg',
        'single_tx' => '<strong>Forró do xenhenhém (Ao vivo)</strong><br/> (Cecéu)<br/>
BMG-Brasil VP-0494 (2000)
'
                ] );
        Single::create( [
        'ano_single' =>'2001',
        'single' =>'Entre o Céu e o Mar',
        'single_bg' =>'2001-single-entreoceu.jpg',
        'single_sm' => '2001-single-entreoceu-sm.jpg',
        'single_tx' => '<strong>Entre o céu e o mar</strong><br/> (Roger Henri / Dudu Falcão)<br/>
BMG-Brasil VP-0555 (2001)
'
                ] );
        Single::create( [
        'ano_single' =>'2002',
        'single' =>'A Sorte é Cega',
        'single_bg' =>'2002-single-sorteecega.jpg',
        'single_sm' => '2002-single-sorteecega-sm.jpg',
        'single_tx' => '<strong>A sorte é cega</strong><br/> (Luiz Guimarães <strong><br/>Quer ir mais eu</strong><br/> (Luiz Gonzaga / Miguel Lima)<br/>
BMG-Brasil VP-0671 (2002)
'
                ] );
        Single::create( [
        'ano_single' =>'2012',
        'single' =>'Frevo Meio Envergonhado',
        'single_bg' =>'2012-frevomeio.jpg',
        'single_sm' => '2012-frevomeio-sm.jpg',
        'single_tx' => '<strong>Frevo meio envergonhado</strong><br/> (Monique Kessous)<br/>
Saladesom Records<br/> (single digital) (2012)
'
                ] );
        Single::create( [
        'ano_single' =>'2014',
        'single' =>'Olhando o Coração',
        'single_bg' =>'2014-domeuolhar.jpg',
        'single_sm' => '2014-domeuolhar-sm.jpg',
        'single_tx' => '<strong>Olhando o coração</strong><br/> (Dominguinhos / Climério Ferreira)<br/><strong>Fazê o quê</strong> (Pedro Luís) <br/> <strong>Árvore</strong> (Edson Gomes)<br/>Coqueiro Verde Records<br/>(single digital) (2014)'
                ] );

    Single::create( [
    'ano_single' =>'2015',
    'single' =>'O Ciúme',
    'single_bg' =>'2015-single-ociume.jpg',
    'single_sm' => '2015-single-ociume-sm.jpg',
    'single_tx' => '<strong>O Ciúme</strong><br/>(Caetano Veloso)<br/><strong>Gravitacional</strong>(Marcelo Jeneci)<br/>
    – com <strong>Marcelo Jeneci</strong><br/> <strong>Não Sonho Mais</strong>(Chico Buarque)<br/>Coqueiro Verde Records<br/>(single digital) (2015)',
    ] );

    Single::create( [
    'ano_single' =>'2016',
    'single' =>'Frevo, Paixão e Zueira',
    'single_bg' =>'2016-frevopaixaoezueira.jpg',
    'single_sm' => '2016-frevopaixaoezueira-sm.jpg',
    'single_tx' => 'Frevo, paixão e zueira <br/>(André Rio / Rannieri Oliveira)<br/> Coqueiro Verde Records<br/>single digital (2016)',
    ] );
    Single::create( [
    'ano_single' =>'2017',
    'single' =>'Não passarás',
    'single_bg' =>'2017-NaoPassaras.jpg',
    'single_sm' => '2017-NaoPassaras-sm.jpg',
    'single_tx' => 'Não passarás<br/>(Zé Américo / Salgado Maranhão)<br/>Baioque<br/>single digital (2017)',
    ] );


        }

}

