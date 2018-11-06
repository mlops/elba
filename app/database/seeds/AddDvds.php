<?php

class AddDvds extends Seeder {

	public function run(){
        DB::table('dvds')->delete(); // deleting old records.

        Dvds::create( [
        'dvd' =>'O Grande Encontro 3 ',
        'slug' =>'o_grande_encontro_3',
        'ano' =>'2000',
        'dvd_capa' =>'GEcapa.jpg',
        'sbr_disco' => '<p>BMG Brasil 7.432.181.997-9<br />
        Lan&ccedil;amento: dezembro de 2000</p>',
        'letra' =>'
<p><strong>1. Caravana</strong><em class="compositor"> (Alceu Valen&ccedil;a / Geraldo Azevedo)</em></br>
Elba, Z&eacute; Ramalho e Geraldo Azevedo</p>

<p><strong>2. T&aacute;xi Lunar</strong><em class="compositor"> (Geraldo Azevedo / Z&eacute; Ramalho / Alceu Valen&ccedil;a)</em><br />
Elba, Z&eacute; Ramalho e Geraldo Azevedo</p>

<p><strong>3. Barcarola do S&atilde;o Francisco</strong><em class="compositor"> (Geraldo Azevedo / Carlos Fernando)</em><br />
Geraldo Azevedo</p>

<p><strong>4. Dona da Minha Cabe&ccedil;a</strong> <em class="compositor"> (Geraldo Azevedo / Fausto Nilo)</em><br />
Geraldo Azevedo</p>

<p><strong>5. Canta Brasil </strong><em class="compositor"> (Alcyr Pires Vermelho / David Nasser)</em><br />
Geraldo Azevedo &ndash; participa&ccedil;&atilde;o especial de Moraes Moreira</p>

<p><strong>6. A Peleja do Diabo com o Dono do C&eacute;u </strong> <em class="compositor"> (Z&eacute; Ramalho)</em><br />
Z&eacute; Ramalho</p>

<p><strong>7. Can&ccedil;&atilde;o Agalopada </strong> <em class="compositor"> (Z&eacute; Ramalho)</em><br />
Z&eacute; Ramalho</p>

<p><strong>8. Garoto de Aluguel</strong><em class="compositor"> (Z&eacute; Ramalho)</em><br />
Z&eacute; Ramalho &ndash; participa&ccedil;&atilde;o especial de Belchior</p>

<p><strong>9. Galope Rasante </strong> <em class="compositor"> (Z&eacute; Ramalho)</em><br />
Z&eacute; Ramalho e Geraldo Azevedo</p>

<p><strong>10. Voc&ecirc; se Lembra </strong><em class="compositor"> (Geraldo Azevedo / Fausto Nilo / Pippo Spera)</em><br />
M&uacute;sica incidental: Solo da Corda G (J. S. Bach) Elba Ramalho</p>

<p><strong>11. Petrolina-Juazeiro </strong><em class="compositor"> (Jorge de Altinho)</em><br />
Elba Ramalho e Geraldo Azevedo</p>

<p><strong>12. Frisson </strong><em class="compositor"> (Tunai / S&eacute;rgio Natureza)</em><br />
Elba Ramalho</p>

<p><strong>13. L&aacute; e C&aacute;</strong> <em class="compositor"> (Lenine / S&eacute;rgio Natureza)</em><br />
Elba Ramalho &ndash; participa&ccedil;&atilde;o especial de Lenine</p>

<p><strong>14. A Terceira L&acirc;mina</strong> <em class="compositor"> (Z&eacute; Ramalho)</em><br />
Z&eacute; Ramalho e Elba Ramalho</p>

<p><strong>15. Tum-tum-tum </strong><em class="compositor"> (Crist&oacute;v&atilde;o de Alencar / Ary Monteiro) </em><br/>
<strong>Mulata no coco</strong> <em class="compositor"> (Oscar Barbosa / Geraldo Nunes)</em><br />
Elba, Z&eacute; Ramalho e Geraldo Azevedo</p>

<p><strong>16. Eu Vou pra Lua</strong><em class="compositor"> (Luiz Boquinha/Ary Lobo)</em><br/>
<strong>O canto da Ema</strong><em class="compositor"> (Alventino Cavalcante / Agres Viana / Jo&atilde;o do Vale)</em><br />
Elba, Z&eacute; Ramalho e Geraldo Azevedo</p>

<p><strong>17. A Vida do Viajante</strong><em class="compositor"> (Luiz Gonzaga / Herv&eacute; Cordovil)</em><br />
Elba, Z&eacute; Ramalho, Geraldo Azevedo, Lenine, Moraes Moreira e Belchior</p>',
'fx_tecnica' =>'
<p>Show gravado no dia 5 de setembro de 2000 no Garden Hall/RJ<br />
Produ&ccedil;&atilde;o musical: Guto Gra&ccedil;a Mello<br />
Dire&ccedil;&atilde;o art&iacute;stica: Jorge Davidson<br />
Dire&ccedil;&atilde;o musical: Marcos Farias<br />
Produ&ccedil;&atilde;o executiva: Celso Lessa<br />
Coordena&ccedil;&atilde;o de produ&ccedil;&atilde;o: Sergio Bittencourt<br />
Coordena&ccedil;&atilde;o de produ&ccedil;&atilde;o DVD: Amir Harif<br />
Gerente de produto Ariola: Ros&acirc;ngela Almeida<br />
Produ&ccedil;&atilde;o de show: Alexandre Valentim<br />
Light designer: Peter Gasper<br />
Ilumina&ccedil;&atilde;o: Jos&eacute; Ant&ocirc;nio</p>

<p><strong>M&uacute;sicos</strong><br />
Acordeom: Marcos Farias<br />
Celo: Lui Coimbra<br />
Sopros: Cesar Michiles<br />
Percuss&atilde;o: Paulinho He-Man<br />
Zabumba: Z&eacute; Gomes</p>

<p>Operador de P. A.: M&aacute;rio Jorge<br />
Operador de monitor: S&eacute;rgio Perez<br />
Produ&ccedil;&atilde;o de palco: Bia Dantas e Francisco Canind&eacute;<br />
Contrarregras: JB, Josino e Dinho<br />
Grava&ccedil;&atilde;o ao vivo: FLG &Aacute;udio<br />
Gravado ao vivo por: Franklin Garrido</p>

<p><strong>Equipe Globosat/Multishow</strong><br />
C&acirc;meras: Jos&eacute; Roberto, Fernando Carioca, Josuel Alves, Fernando Belfort, Carlos Trinta, Carlos F&eacute;lix, Gustavo Ara&uacute;jo e Carlos Alexandre<br />
Operador de pee wee: Joel Fernandes<br />
Operador de polecam: Alexandre Cuba da Rocha<br />
Operador de v&iacute;deo: R&ocirc;mulo Marques e Gustavo Silva<br />
Operador de &aacute;udio: Norimar Guimar&atilde;es<br />
Eletrot&eacute;cnico: Rog&eacute;rio Menezes e Andr&eacute; Galdino<br />
Operador de VT: Renato Jos&eacute;<br />
T&eacute;cnicos de sistemas: Marcelo Trindade e Pedro Paulo<br />
T&eacute;cnicos de manuten&ccedil;&atilde;o: Armando Rodrigues e Alex Papa<br />
Supervisor de opera&ccedil;&otilde;es: Marcus Allen e Edison Teixeira<br />
Dire&ccedil;&atilde;o de imagens: Daniel Santos</p>

<p>Grava&ccedil;&atilde;o e mixagem de &aacute;udio: Francisco Luis Russo E Claudemir Ruffo<br />
Artes: Mauricio Milne<br />
Videografismo: Maria Eug&ecirc;nia<br />
Edi&ccedil;&atilde;o: Luiz Hopperdizel<br />
Assistente de produ&ccedil;&atilde;o: Val&eacute;ria Amaral<br />
Produ&ccedil;&atilde;o musical: Luiz Carlos &ldquo;Meu Bom&rdquo;<br />
Produ&ccedil;&atilde;o: Roberto Bianchi<br />
Coordenador de produ&ccedil;&atilde;o: Silvio C&eacute;sar</p>

<p>Produ&ccedil;&atilde;o executiva: Marcelo Toller<br />
Ger&ecirc;ncia de marketing: Paulo Barata<br />
Dire&ccedil;&atilde;o: Marcus Vin&iacute;cius Cezar<br />
Ger&ecirc;ncia de produ&ccedil;&atilde;o: Vicente Lobato<br />
Supervis&atilde;o geral: Wilson Cunha<br />
Realiza&ccedil;&atilde;o: Multishow</p>

<p><strong>DVD</strong><br />
P&oacute;s-produ&ccedil;&atilde;o de &aacute;udio para DVD: Leonardo Nakabayashi e Fabio Pinczowski<br />
P&oacute;s-produ&ccedil;&atilde;o de v&iacute;deo para DVD: Felipe Mangabeira<br />
Mixagem em Dolby Digital 5.1 para DVD: Alexandre Sobral<br />
Sound design para DVD: Ricardo Carvalheira e Alexandre Sobral<br />
Supervis&atilde;o de &aacute;udio para DVD: Ricardo Carvalheira / Cia. de &Aacute;udio/SP</p>

<p>Autora&ccedil;&atilde;o do DVD: Careware Multim&iacute;dia<br />
Produ&ccedil;&atilde;o executiva: Renato Oshima<br />
Coordena&ccedil;&atilde;o: Silvia Donati<br />
Programa&ccedil;&atilde;o: P&eacute;rcio dos Santos e Marcelo Marques<br />
Designer: Alexandre Barreto<br />
Supervis&atilde;o t&eacute;cnica de autora&ccedil;&atilde;o: Filipe Thom&eacute;</p>

<p>Coordena&ccedil;&atilde;o gr&aacute;fica: Luis Felipe Couto e Emil Ferreira<br />
Capa e projeto gr&aacute;fico: P&oacute;s Imagem Design<br />
Dire&ccedil;&atilde;o de arte: Ricardo Leite e Rafael Ayres<br />
Designer assistente: Eduardo Varela<br />
Adapta&ccedil;&atilde;o para DVD: L&amp;A Studio<br />
Fotos: Richard Romero<br />
Assistente de fotografia: Marcelo Bravo<br />
</p>'
        ] );

Dvds::create( [
'dvd' =>'Elba Ao Vivo',
'slug' =>'elba_ao_vivo',
'ano' =>'2003',
'dvd_capa' =>'AVcapa.jpg',
'sbr_disco' => '<p>BMG Brasil 7.432.197.124-9<br />
Lan&ccedil;amento: março de 2003</p>',
'letra' =>'<p><strong>1. Concerto Nordestino </strong><em class="compositor">(Luiz Antonio Porto)<br/>
</em><strong>Asa Branca</strong><em class="compositor"> (Luiz Gonzaga / Humberto Teixeira)</em>cita&ccedil;&atilde;o: Canta Luiz<em class="compositor">(Dominguinhos)</em></p>


<p><strong>2. A vida do Viajante</strong> <em class="compositor">(Luiz Gonzaga / Herv&eacute; Cordovil)</em></p>
<p><strong>3. A sorte &eacute; Cega</strong> <em class="compositor">(Luiz Guimar&atilde;es)</em></p>
<p><strong>4. O xote das Meninas</strong> <em class="compositor">(Luiz Gonzaga / Z&eacute; Dantas)</em></p>
<p><strong>5. Vem Morena</strong><em class="compositor"> (Luiz Gonzaga / Z&eacute; Dantas)</em></p>

<p><strong>6. Imbalan&ccedil;a</strong><em class="compositor"> (Luiz Gonzaga / Z&eacute; Dantas)</em></br>
cita&ccedil;&atilde;o: Quando eu Contar (Iai&aacute;) <em class="compositor">(Serginho Meriti / Beto Sem Bra&ccedil;o)</em></p>

<p><strong>7. Festa</strong><em class="compositor"> (Gonzaguinha)</em></br>
    cita&ccedil;&atilde;o: Mateus Enter <em class="compositor">(Chico Science)</em></br>
    cita&ccedil;&atilde;o: Trecho do poema Morte e Vida Severina<em class="compositor"> (Jo&atilde;o Cabral De Mello Neto)</em></br>
    cita&ccedil;&atilde;o: A Cidade<em class="compositor">(Chico Science)</em></br>
    cita&ccedil;&atilde;o: Trecho do poema Evoca&ccedil;&atilde;o do Recife<em class="compositor">(Manuel Bandeira)</em></p>
<p><strong>8. Pagode Russo</strong><em class="compositor"> (Luiz Gonzaga / Jo&atilde;o Silva)</em></br>
<strong>Onde Tu Ta Nen&eacute;m</strong> <em class="compositor">(Luiz Bandeira)</em></p>
<p><strong>9. Numa Sala de Reboco </strong><em class="compositor">(Jos&eacute; Marcolino / Luiz Gonzaga)</em> </br>
<strong>Estrada do Canind&eacute;</strong> <em class="compositor">(Luiz Gonzaga / Humberto, Teixeira)</em></p>

<p><strong>10. Juazeiro</strong><em class="compositor"> (Humberto Teixeira / Luiz Gonzaga)</em></br>
cita&ccedil;&atilde;o: trecho do folclore popular dos Boiadeiros (D. P.)</br>
cita&ccedil;&atilde;o: Admir&aacute;vel Gado Novo <em class="compositor"> (Z&eacute; Ramalho)</em></br>
<strong>Beija-Flor</strong> <em class="compositor"> (Xex&eacute;u / Z&eacute; Raimundo)</em></br>
cita&ccedil;&atilde;o: B&eacute;rad&ecirc;ro<em class="compositor">(Chico C&eacute;sar)</em></p>

<p><strong>11. Luar do Sert&atilde;o</strong><em class="compositor"> (Jo&atilde;o Pernambucano / Catulo Da Paix&atilde;o)</em></p>

<p><strong>12. Ch&atilde;o de Giz</strong><em class="compositor"> (Z&eacute; Ramalho)</em></p>

<p><strong>13. S&uacute;plica Cearense</strong><em class="compositor">  (Gordurinha / Netinho)</em></p>

<p><strong>14. O Xamego da Guiomar</strong><em class="compositor">  (Luiz Gonzaga / Z&eacute; Lima)</em></br>
cita&ccedil;&atilde;o: Quando eu contar (Iai&aacute;)<em class="compositor">  (Serginho Meriti / Beto Sem Bra&ccedil;o)</em><br />
Participa&ccedil;&atilde;o especial: Zeca Pagodinho</p>

<p><strong>15. Le&atilde;o do Norte</strong> <em class="compositor"> (Lenine / Paulo C&eacute;sar Pinheiro)</em></p>

<p><strong>16. Ciranda da Rosa Vermelha</strong> <em class="compositor"> (Alceu Valen&ccedil;a)</em></p>

<p><strong>17. Acau&atilde; </strong><em class="compositor"> (Z&eacute; Dantas)</em></p>

<p><strong>18. Assum Preto</strong><em class="compositor">  (Luiz Gonzaga / Humberto Teixeira)</em></p>

<p><strong>19. Sabi&aacute;</strong><em class="compositor">  (Luiz Gonzaga / Z&eacute; Dantas)</em></p>

<p><strong>20. &Oacute;ia eu Aqui de Novo</strong><em class="compositor">  (Antonio Barros)</em></p>

<p><strong>21. No Som da Sanfona</strong><em class="compositor">  (Kak&aacute; do Asfalto / Jackson do Pandeiro)</em><br/>
<strong>Forr&oacute; do xenhenh&eacute;m</strong> (Cec&eacute;u)</p>

<p><strong>22. De Volta pro Aconchego</strong><em class="compositor">  (Dominguinhos / Nando Cordel)</em><br />
Participa&ccedil;&atilde;o especial: Dominguinhos</p>

<p><strong>23. Banho de Cheiro</strong> <em class="compositor"> (Carlos Fernando)</em><br/>
<strong>Frevo mulher</strong><em class="compositor">  (Z&eacute; Ramalho)</em><br/>
<strong>Asa Branca </strong><em class="compositor"> (Luiz Gonzaga / Humberto Teixeira)</em></p>
</br>
<p>//<strong>B&ocirc;nus</strong><br />
<strong>24. D&uacute;vida</strong> <em class="compositor"> (Luiz Gonzaga / Domingos Ramos)</em></p>

<p><strong>25. Treze de Dezembro</strong> <em class="compositor"> (Luiz Gonzaga / Z&eacute; Dantas / Gilberto Gil)</em></p>

<p><strong>26. Nem se Despediu de Mim</strong> <em class="compositor"> (Luiz Gonzaga / Jo&atilde;o Silva)</em><br/>
<strong>S&atilde;o Jo&atilde;o do Carneirinho</strong> <em class="compositor"> (Luiz Gonzaga / Guio de Morais)</em><br/>
<strong>Quero ch&aacute;</strong><em class="compositor">  (Jos&eacute; Marcolino / Luiz Gonzaga)</em><br/>
<strong>Pedras que Cantam</strong><em class="compositor">  (Dominguinhos / Fausto Nilo)</em><br />
Participa&ccedil;&atilde;o especial: Dominguinhos</p>
</br>
<p><strong>//Clipes</strong><br />
<strong>27. Ch&atilde;o de Giz</strong><em class="compositor">  (Z&eacute; Ramalho)</em></p>

<p><strong>28. Ciranda da Rosa Vermelha</strong> <em class="compositor"> (Alceu Valen&ccedil;a)</em></p>',

'fx_tecnica' =>'<p><strong>SHOW</strong><br />
Gravado no ATL Hall (Rio de Janeiro), no dia 26 de outubro de 2002, pela unidade m&oacute;vel da Jotaeme V&iacute;deo<br />
Produzido por Elba Ramalho<br />
Dire&ccedil;&atilde;o musical: Luiz Ant&ocirc;nio<br />
Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o e coordena&ccedil;&atilde;o geral: Gaetano Lops<br />
Dire&ccedil;&atilde;o de palco e produ&ccedil;&atilde;o executiva: Alexandre Valentim<br />
Roteiro: Elba Ramalho e Gabriel Villela<br />
Projeto e opera&ccedil;&atilde;o de luz: Renato Ribeiro<br />
Opera&ccedil;&atilde;o de moving-light: Danny Pudny<br />
Opera&ccedil;&atilde;o de P. A.: Paulo &ldquo;P. A.&rdquo;<br />
Opera&ccedil;&atilde;o de monitor: Rodrigo Lopes<br />
Roadies: Josino e Fl&aacute;vio<br />
Assistentes de produ&ccedil;&atilde;o: Zeca Santana e Marcos Soares<br />
Make-up: Rick Costa<br />
Camarins: Soninha<br />
Assessoria (Elba): Vav&aacute; Ramalho<br />
Assessoria de imprensa: Ivone Kassu<br />
Fotos da capa e encarte: Priscila Franco<br />
Galeria de fotos: Beti Niemeyer, Carlos Guerreiro, L&iacute;vio Campos, Luis Garrido, M&aacute;rio Cravo Neto e Murilo Meirelles</p>

<p><strong>Equipe Gabriel Villela</strong><br />
Dire&ccedil;&atilde;o, cen&aacute;rios e figurinos: Gabriel Villela<br />
Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o art&iacute;stica: Beth Accioly<br />
Produ&ccedil;&atilde;o executiva (cen&aacute;rios e figurinos): Maria Eug&ecirc;nia Guimar&atilde;es<br />
Cenot&eacute;cnico: Joaquim Agostinho<br />
Equipe de adere&ccedil;os e artes: Odamei: Maria do Carmo Soares, Davi Taiu e Giovanna Santana<br />
Costureira: Cida de Paula<br />
Assistente: Irio Sandres<br />
Assistentes de dire&ccedil;&atilde;o: F&aacute;bio Elias e Millene Ramalho<br />
Estandartes grafitados: Speto</p>

<p><strong>M&uacute;sicos</strong><br />
Teclados: Luiz Ant&ocirc;nio<br />
Guitarra, viola e viol&atilde;o: Marcos Arcanjo<br />
Contrabaixo: Jacar&eacute;<br />
Saxofone, flauta e violoncelo: Ocelo Mendon&ccedil;a<br />
Bateria: Camilo Mariano<br />
Acordeom: Renato Cigano<br />
Percuss&otilde;es: Paulinho He-Man e Anjo Caldas<br />
Vocais: Jussara Louren&ccedil;o, Daniel Mata e Leonardo Diniz</p>

<p><strong>M&uacute;sicos convidados</strong><br />
Viol&atilde;o: Paulo Roberto Pereira Ara&uacute;jo (Paul&atilde;o)<br />
Cavaco: Paulo C&eacute;sar Soares<br />
Tant&atilde;: Luiz Felipe dos Santos<br />
Pandeiro: Helio Silva &ldquo;Macal&eacute;&rdquo;</p>

<p><strong>&Aacute;udio</strong><br />
Engenheiro de grava&ccedil;&atilde;o e mixagem 2.0 e 5.1: Renato Mu&ntilde;oz<br />
Assistentes: Andr&eacute; Coelho e Rodrigo Duarte<br />
Est&uacute;dio de mixagem: Discover Studio<br />
Coordena&ccedil;&atilde;o de mixagem: Marcos Arcanjo<br />
Masteriza&ccedil;&atilde;o 5.1: Classic Master, por Carlos Freitas</p>

<p><strong>V&iacute;deo</strong><br />
Dire&ccedil;&atilde;o: Gabriel Villela<br />
Produ&ccedil;&atilde;o executiva: Gaetano Lops<br />
Assistente de produ&ccedil;&atilde;o: Millene Ramalho<br />
Coordenadores: Willian Ricardo e Carlos Alberto P. de Carvalho<br />
Diretor de TV: Alexandre Duarte G. Fernandes<br />
T&eacute;cnico: Ant&ocirc;nio Carlos N. Sobrinho<br />
T&eacute;cnico de comunica&ccedil;&atilde;o: Wilson de Lima<br />
Operadores VT: Alexandre N&oacute;brega Sobrinho e Nitheroy T. Ribeiro Neto<br />
Operador v&iacute;deo: Carlos da Silva<br />
Operadores: Paulo Jos&eacute; Corr&ecirc;a, Rosivaldo Dias Oliveira e Arlindo A. C&acirc;ndido dos Santos<br />
C&acirc;meras men: Amauri Trolize, Wladmir Mirand, Ren&ecirc; Garila, Silvano de Souza e Pedro da Silva<br />
Assistentes: Ailton R. da Silva, Jos&eacute; Pereira da Silva, Luiz Carlos Pereira, L&aacute;zaro A. Silva Filho, Luciano Bonato, R&eacute;gis da Silva Ant&ocirc;nio e Fernando de J. Cardoso<br />
Edi&ccedil;&atilde;o: L&eacute;o Freitas e Eduardo Santos<br />
P&oacute;s-produ&ccedil;&atilde;o: Marcelo N Estell&eacute;s<br />
Motoristas: Marcos Ant&ocirc;nio Marisca e Orlando Martins Filho<br />
Seguran&ccedil;a: Raimundo Nonato Tavares<br />
Realiza&ccedil;&atilde;o: Ramax Produ&ccedil;&otilde;es e Jotaeme V&iacute;deo</p>

<p><strong>Clipes</strong></p>

<p>Ch&atilde;o de giz<br />
Dire&ccedil;&atilde;o: Andr&eacute; Buarque e Marco Oliveira<br />
Ciranda da rosa vermelha<br />
Dire&ccedil;&atilde;o: Luiz Stein</p>

<p><strong>DVD</strong><br />
Design de capa: F&aacute;bio Delduque<br />
Autoro&ccedil;&atilde;o DVD: Careware Multim&iacute;dia<br />
Produ&ccedil;&atilde;o executiva: Renato Oshima<br />
Atendimento: Cl&aacute;udio Grozinski Jr.<br />
Coordena&ccedil;&atilde;o: Daniela Macedo<br />
Design: Katia Kamimura<br />
Programa&ccedil;&atilde;o: Marcelo Camacho<br />
Supervis&atilde;o t&eacute;cnica de autora&ccedil;&atilde;o: P&eacute;rcio dos Santos<br />
Tradu&ccedil;&otilde;es e legendas: Subtitling Online</p>

<p>Realiza&ccedil;&atilde;o: BMG Brasil e Ramax Produ&ccedil;&otilde;es<br />
Dire&ccedil;&atilde;o art&iacute;stica: S&eacute;rgio Bittencourt<br />
Coordena&ccedil;&atilde;o: Paula Melo<br />
</p>'
] );



Dvds::create( [
'dvd' =>'Raízes e Antenas ',
'slug' =>'raizes_e_antenas',
'ano' =>'2008',
'dvd_capa' =>'RAcapacontracapa1.jpg',
'sbr_disco' => '<p>Atra&ccedil;&atilde;o Fonogr&aacute;fica &ndash; DRA 81064<br />
Lan&ccedil;amento:  outubro de 2008</p>',
'letra' =>'<p><strong>1. Abertura / Toda Dor Passa</strong> <em class="compositor">(Tadeu Mathias / Br&aacute;ulio Tavares)</em></p>

<p><strong>2. Gaiola da Saudade</strong> <em class="compositor">(Jam da Silva / Maciel Salu)</em></p>

<p><strong>3. Ave Anjos Angeli</strong> <em class="compositor">(Jorge Benjor)</em><br />
Participa&ccedil;&atilde;o especial: A Trombonada</p>

<p><strong>4. A Natureza das Coisas</strong> <em class="compositor">(Accioly Neto)</em></p>

<p><strong>5. Essa Alegria</strong> <em class="compositor">(Caboclinhos) (Lula Queiroga)</em> <br/>
<strong>Le&atilde;o do Norte</strong> <em class="compositor">(Lenine / Paulo C&eacute;sar Pinheiro)</em><br />
Participa&ccedil;&atilde;o especial: A Trombonada</p>

<p><strong>6. Rua da Passagem</strong> <em class="compositor">(Tr&acirc;nsito) (Lenine / Arnaldo Antunes)</em><br />
Participa&ccedil;&atilde;o especial: Maestro Spok e A Trombonada</p>

<p><strong>7. A Dan&ccedil;a das Borboletas</strong> <em class="compositor">(Alceu Valen&ccedil;a / Z&eacute; Ramalho)</em></p>

<p><strong>8. Noite Severina</strong><em class="compositor">(Lula Queiroga / Pedro Lu&iacute;s)</em></p>

<p><strong>9. Estrela Mi&uacute;da</strong> <em class="compositor">(Jo&atilde;o do Vale / Luiz Vieira)</em><br />
Participa&ccedil;&atilde;o especial: Lenine e A Trombonada</p>

<p><strong>10. Miragem do Porto</strong> <em class="compositor">(Lenine / Br&aacute;ulio Tavares)</em><br />
Participa&ccedil;&atilde;o especial: Lenine</p>

<p><strong>11. Concei&ccedil;&atilde;o dos Coqueiros</strong> <em class="compositor">(Alexandre Bicudo / Lula Queiroga / Lulu Oliveira)</em></p>

<p><strong>12. Palavra de Mulher</strong> <em class="compositor">(Chico Buarque)</em></p>

<p><strong>13. Um &iacute;ndio</strong> <em class="compositor">(Caetano Veloso)</em><br />
Participa&ccedil;&atilde;o especial: Yamandu Costa</p>

<p><strong>14. Dois pra Sempre</strong> <em class="compositor">(Lula Queiroga)</em></p>

<p><strong>15. Na Base da Chinela</strong> <em class="compositor">(Jackson do Pandeiro / Rosil Cavalcanti)</em><br />
Participa&ccedil;&atilde;o especial: Margareth Menezes</p>

<p><strong>16. Gostoso Demais</strong> <em class="compositor">(Dominguinhos / Nando Cordel)</em></p>

<p><strong>17. Tempos Quase Modernos</strong> <em class="compositor">(Qual o assunto que mais lhe interessa) (Roberto Mendes / Capinan)</em><br />
Participa&ccedil;&atilde;o especial: Gabriel o Pensador</p>

<p><strong>18. Banho de cheiro</strong> <em class="compositor">(Carlos Fernando)</em> <br/>
<strong>Frevo Mulher</strong> <em class="compositor">(Z&eacute; Ramalho)</em><br />
Participa&ccedil;&atilde;o especial: Spok Frevo Orquestra</p>
<br/>
<p><strong>B&ocirc;nus</strong><p/>
<p><strong>19. Amplid&atilde;o </strong><em class="compositor">(Chico C&eacute;sar)</em></p>

<p><strong>20. Folia de Pr&iacute;ncipe</strong> <em class="compositor">(Chico C&eacute;sar)</em><br/>
<strong>Boi Cavalo de Tr&oacute;ia</strong> <em class="compositor">(Pedro Osmar / Paulo R&oacute;)</em><br />
Participa&ccedil;&atilde;o especial: Coral Audit&oacute;rio Ibirapuera</p>',

'fx_tecnica' =>'<p><strong>SHOW</strong><br />
Gravado nos dias 19 e 20 de maio de 2007 no Audit&oacute;rio Ibirapuera (S&atilde;o Paulo/SP)<br />
Dire&ccedil;&atilde;o: Elba Ramalho e Lula Queiroga<br />
Dire&ccedil;&atilde;o musical: Marcos Arcanjo, Tost&atilde;o Queiroga e Yuri Queiroga<br />
Dire&ccedil;&atilde;o de cria&ccedil;&atilde;o: Ricardo Gertrudes<br />
Supervis&atilde;o geral: Gaetano Lops<br />
Supervis&atilde;o de produ&ccedil;&atilde;o: Alexandre Valentim<br />
Produ&ccedil;&atilde;o: Carol Cupo e Ana Costa<br />
Assistentes de produ&ccedil;&atilde;o: Camila Paschoal, Vav&aacute; Ramalho, Jorge Nova, Gabriela Cupo</p>

<p><strong>M&Uacute;SICOS</strong><br />
Viol&otilde;es e guitarra: Marcos Arcanjo<br />
Bateria: Tost&atilde;o Queiroga<br />
Acordeom: Toninho Ferragutti<br />
Violoncelo: Lui Coimbra<br />
Guitarras e programa&ccedil;&otilde;es: Yuri Queiroga<br />
Baixo: Fernando Gaby (Fof&atilde;o)<br />
Percuss&atilde;o: Anjo Caldas e Amarelo<br />
Vocais: Micheline Cardoso e Paula Tribuzi</p>

<p>T&eacute;cnico de monitor: Fl&aacute;vio Rego<br />
T&eacute;cnico de P. A.: Mario Andrade<br />
Roadies: Alex Cunha e Hernandes Lopes<br />
Diretor de palco: Josino Feitosa</p>

<p>Cen&aacute;rio: Suzane Queiroz e Thiago Soveral<br />
Cenot&eacute;cnico: Leonardo Bezerra<br />
Cen&oacute;grafo assistente: F&aacute;bio Fernandes<br />
Ilumina&ccedil;&atilde;o: LPL<br />
Cria&ccedil;&atilde;o de Luz: C&eacute;sio Lima<br />
Figurinos: Lino Villaventura, David Francisco e Elba Ramalho<br />
Maquiagem e cabelo: Ton Hyll</p>

<p><strong>CAPA</strong><br />
Projeto gr&aacute;fico: Ricardo Gertrudes<br />
Dire&ccedil;&atilde;o de arte: Claudia Imperial</p>

<p><strong>DVD</strong><br />
Dire&ccedil;&atilde;o: Fabiana Prado<br />
Produ&ccedil;&atilde;o e coordena&ccedil;&atilde;o: Camila Groch<br />
Dire&ccedil;&atilde;o de fotografia: Kika Cunha e Janice D&rsquo;Avila<br />
Assistente de dire&ccedil;&atilde;o: Tiago Soban e Gabi Brites<br />
Steady cam: Fabio Pestana e Marcelo Kron<br />
Edi&ccedil;&atilde;o: Fabiana Prado</p>

<p><strong>SHOW</strong><br />
Dire&ccedil;&atilde;o: Fabiana Prado e Ivy Abujamra<br />
Produ&ccedil;&atilde;o executiva: Gisa Locatelli<br />
Edi&ccedil;&atilde;o: Ad&eacute;cio de Lucca<br />
Assistente de edi&ccedil;&atilde;o: Paulo Beppler<br />
Dire&ccedil;&atilde;o de arte: Camila Fonseca<br />
V&iacute;deo designer: Dario Honsho<br />
Finaliza&ccedil;&atilde;o: Marcelo Garcia<br />
Capta&ccedil;&atilde;o de imagens: Teleimage<br />
Diretor de opera&ccedil;&otilde;es: Ari Previdi<br />
Produ&ccedil;&atilde;o de engenharia: Andr&eacute; Colombo &ldquo;Palmit&atilde;o&rdquo;<br />
Engenheiro: Luis Alberto Fernandes<br />
Diretor de TV: Daniel dos Santos<br />
C&acirc;mera men: Ari Costa Reis, Arci Costa Reis, Jorge Luis Maia Duarte, Diego Karman, Carlos Travaglia Filho, Julio Callito e Rene Guariglia<br />
Cammatte: Evandro Rog&eacute;rio de Nadai<br />
Maquinista: Jos&eacute; Dorival da Silva<br />
Op. v&iacute;deo: Marcondes Felix Souza e Marcelo de Almeida Gomes<br />
Op. VT: Sydnei Bonfim da Luz<br />
Comunica&ccedil;&atilde;o: Jos&eacute; Daniel Pereira Bueno<br />
Cabo-men: Cristiano Augusto Gon&ccedil;alves, Vinicius Guariglia, J&eacute;ferson Santiago da Paz, Eduardo Silv&eacute;rio da Silva Junior, Douglas Henrique Silva Campos e Geraldo Henrique Wenig<br />
Edi&ccedil;&atilde;o: Ad&eacute;cio de Lucca<br />
Assistente de edi&ccedil;&atilde;o: Pauto Beppler<br />
Tape to tape: Teleimage<br />
Colorista: Ely Silva e Sergio Pasqualino<br />
Proje&ccedil;&otilde;es show: Karina Vilela e Roberta Cunha</p>

<p><strong>&Aacute;UDIO</strong><br />
Gravado na Unidade M&oacute;vel Gabi Som<br />
T&eacute;cnicos de grava&ccedil;&atilde;o: Renato Mu&ntilde;oz e Rodrigo Lopes<br />
Est&uacute;dio de mixagem: D&rsquo;Brou<br />
T&eacute;cnico de mixagem: Renato Mu&ntilde;oz<br />
Masteriza&ccedil;&atilde;o: Magic Master<br />
T&eacute;cnico de masteriza&ccedil;&atilde;o: Ricardo Garcia<br />
</p>'
] );

Dvds::create( [
'dvd' =>'Marco Zero Ao Vivo',
'slug' =>'marco_zero_ao_vivo',
'ano' =>'2010',
'dvd_capa' =>'MZcapa1.jpg',
'sbr_disco' => '<p>Biscoito Fino &ndash; BF 105<br />
Lan&ccedil;amento: novembro de 2010</p>',

'letra' =>'<p><strong>1. Anuncia&ccedil;&atilde;o</strong> <em class="compositor">(Alceu Valen&ccedil;a)</em></p>

<p><strong>2. Le&atilde;o do Norte</strong> <em class="compositor">(Lenine / Paulo C&eacute;sar Pinheiro)</em></p>

<p><strong>3. Banquete de Signos </strong> <em class="compositor">(Z&eacute; Ramalho)</em></p>

<p><strong>4. Forr&oacute; do Pic Plic Pl&aacute; </strong> <em class="compositor">(Assis&atilde;o / Lindolfo Barbosa)</em></br>
<strong>Forr&oacute; Pesado</strong><em class="compositor">(Assis&atilde;o / Lindolfo Barbosa)</em><br/>
<strong>Forr&oacute; do Xenhenh&eacute;m</strong><em class="compositor">(Cec&eacute;u)</em><br />
 Participa&ccedil;&atilde;o especial: Cristina Amaral</p>

<p><strong>5. Na Base da Chinela</strong> <em class="compositor">(Jackson do Pandeiro / Rosil Cavalcanti)</em><br/>
<strong>Qui nem Jil&oacute;</strong><em class="compositor">(Luiz Gonzaga / Humberto Teixeira)</em><br/>
<strong>Eu S&oacute; Quero um Xod&oacute;</strong><em class="compositor">(Dominguinhos / Anast&aacute;cia)</em></p>

<p><strong>6. Espumas ao Vento</strong> <em class="compositor">(Accioly Neto)</em><br />
Participa&ccedil;&atilde;o especial: Fl&aacute;vio Jos&eacute;</p>

<p><strong>7. Gostoso Demais</strong> <em class="compositor">(Dominguinhos / Nando Cordel)</em></p>

<p><strong>8. &Eacute; S&oacute; Voc&ecirc; Querer</strong> <em class="compositor">(Nando Cordel)</em><br />
Participa&ccedil;&atilde;o especial: Cezzinha Thomaz</p>

<p><strong>9. Morena de Angola</strong> <em class="compositor">(Chico Buarque)</em></p>

<p><strong>10. Pav&atilde;o Mysteriozo </strong> <em class="compositor">(Ednardo)</em></p>

<p><strong>11. O Meu Amor</strong> <em class="compositor">(Chico Buarque)</em><br />
Participa&ccedil;&atilde;o especial: Alcione</p>

<p><strong>12. Forr&oacute; na Gafieira</strong> <em class="compositor">(Rosil Cavalcanti)</em><br />
Participa&ccedil;&atilde;o especial: Alcione</p>

<p><strong>13. De Volta pro Aconchego</strong> <em class="compositor">(Dominguinhos / Nando Cordel)</em></p>

<p><strong>14. Recife Nag&ocirc;</strong> <em class="compositor">(J. Michiles)</em><br />
Participa&ccedil;&atilde;o especial: Chico C&eacute;sar</p>

<p><strong>15. Queixa</strong> <em class="compositor">(Caetano Veloso)</em><br />
Participa&ccedil;&atilde;o especial: Lenine</p>

<p><strong>16. Cravo Vermelho</strong> <em class="compositor">(Carlos Fernando)</em> <br/>
<strong>Ciranda da Rosa Vermelha</strong> <em class="compositor">(Alceu Valen&ccedil;a)</em><br />
Participa&ccedil;&atilde;o especial: Maestro Spok</p>

<p><strong>17. Canta Cora&ccedil;&atilde;o</strong> <em class="compositor">(Geraldo Azevedo / Carlos Fernando)</em><br />
Participa&ccedil;&atilde;o especial: Geraldo Azevedo</p>

<p><strong>18. Chorando e Cantando</strong> <em class="compositor">(Geraldo Azevedo / Fausto Nilo)</em><br />
Participa&ccedil;&atilde;o especial: Geraldo Azevedo</p>

<p><strong>19. Veja (Margarida)</strong> <em class="compositor">(Vital Farias)</em></p>

<p><strong>20. Ch&atilde;o de Giz</strong> <em class="compositor">(Z&eacute; Ramalho)</em><br />
Participa&ccedil;&atilde;o especial: Z&eacute; Ramalho</p>

<p><strong>21. Admir&aacute;vel Gado Novo</strong> <em class="compositor">(Z&eacute; Ramalho)</em><br />
Participa&ccedil;&atilde;o especial: Z&eacute; Ramalho</p>

<p><strong>22. Chuva de Sombrinhas</strong> <em class="compositor">(Andr&eacute; Rio / Nena Queiroga)</em><br />
Participa&ccedil;&atilde;o especial: Andr&eacute; Rio</p>

<p><strong>23. Tropicana (Morena Tropicana)</strong> <em class="compositor">(Alceu Valen&ccedil;a / Vicente Barreto)</em></p>

<p><strong>24. Frevo Mulher</strong> <em class="compositor">(Z&eacute; Ramalho)</em></p>',

'fx_tecnica' =>'<p>Gravado dia 12 de marco de 2010, no anivers&aacute;rio da cidade do Recife.</p>
<p><strong>M&uacute;sicos</strong><br />
Acordeom: Cezzinha Thomaz<br />
Viol&atilde;o e guitarra: Marcos Arcanjo<br />
Bandolim, cavaquinho e guitarra: Sandro Haick<br />
Baixo: Ney Concei&ccedil;&atilde;o<br />
Bateria: S&eacute;rgio Machado<br />
Percuss&atilde;o: Anjo Caldas e Lucas dos Prazeres<br />
Zabumba: Durval Pereira<br />
Teclados: Ranieri<br />
Trombone: Nilson Amarante<br />
Sax e flauta: Gilberto Pontes<br />
Trompete: Enok Chagas<br />
Sax alto: Z&eacute; Canuto<br />
Vocais: Jussara Louren&ccedil;o, Claudia Beija e Ch&eacute; Leal</p>

<p>Produzido por Elba Ramalho e Cezzinha Thomaz<br />
Coordena&ccedil;&atilde;o geral: Alexandre Valentim<br />
Realiza&ccedil;&atilde;o: Acau&atilde; Produtora<br />
Arranjos e dire&ccedil;&atilde;o musical: Cezzinha Thomaz<br />
Engenheiro de grava&ccedil;&atilde;o: Gabriel Pinheiro<br />
Assistente de grava&ccedil;&atilde;o: Henrique Vilhena<br />
Est&uacute;dio de mixagem: Biscoito Fino<br />
Engenheiro de mixagem: Fernando Prado<br />
Assistente de mixagem: Gustavo Krebs<br />
Est&uacute;dio de masteriza&ccedil;&atilde;o: Visom Digital<br />
Mixado nos est&uacute;dios Carranca (Recife/PE) por J&uacute;nior Evangelista e Cezzinha Thomaz<br />
Figurino: Ary Rodrigues<br />
Maquiagem: Jerry Adriani<br />
Projeto gr&aacute;fico: Antonia Ratto Design<br />
Fotos: Beto Figueiroa e Marcelo Lyra</p>

<p>Uma realiza&ccedil;&atilde;o Biscoito Fino<br />
Dire&ccedil;&atilde;o geral: Kati Almeida Braga<br />
Dire&ccedil;&atilde;o art&iacute;stica: Ol&iacute;via Hime<br />
Ger&ecirc;ncia de produ&ccedil;&atilde;o: Martinho Filho<br />
Assistente de produ&ccedil;&atilde;o: Marcela Maia</p>

<p><strong>Canal Brasil</strong><br />
Edi&ccedil;&atilde;o: Wagner Vieira<br />
Opera&ccedil;&atilde;o de edi&ccedil;&atilde;o: Fl&aacute;vio Ferreira<br />
Luz: Marcelo da Silva Linhares<br />
Produ&ccedil;&atilde;o: Isabella Monteiro e Joana Guimar&atilde;es<br />
Coordena&ccedil;&atilde;o de produ&ccedil;&atilde;o: Tereza Alvarez<br />
Ger&ecirc;ncia de programa&ccedil;&atilde;o: Alexandre Cunha<br />
Ger&ecirc;ncia de marketing e projetos: Andr&eacute; Saddy<br />
Gerente financeiro: Luiz Bertolo<br />
Ger&ecirc;ncia de produ&ccedil;&atilde;o: Carlos Wanderley<br />
Dire&ccedil;&atilde;o geral: Paulo Mendon&ccedil;a</p>

<p>Canal Brasil/Globo Nordeste<br />
Diretor geral: Ar&iacute;sio Coutinho Filho<br />
Diretor de TV: Francisco Lima<br />
Coordenadora de produ&ccedil;&atilde;o: Izabel Carvalho<br />
Assistentes de produ&ccedil;&atilde;o: Marcos Santos<br />
Capta&ccedil;&atilde;o de &aacute;udio: F&aacute;brica Est&uacute;dio</p>

<p><strongs>Agradecimentos Especiais</strongs><br />
Governador de Pernambuco, Eduardo Campos; Prefeito da cidade do Recife, Jo&atilde;o da Costa; Presidente da Empetur, Gilberto Pimentel; Secret&aacute;rio de Cultura da cidade do Recife, Renato L; Presidente da Funda&ccedil;&atilde;o de Cultura da cidade do Recife, Luciana F&eacute;lix; Diretor da TV Globo Nordeste, Ar&iacute;sio Coutinho; TAM Linhas A&eacute;reas e a todos que contribu&iacute;ram para esta grande festa comemorando 30 anos de carreira de Elba Ramalho.</p>

<p>Realizar este trabalho em t&atilde;o pouco tempo foi uma ousadia de todos: cantora, m&uacute;sicos, produ&ccedil;&atilde;o... mas deu certo! O esfor&ccedil;o foi recompensado. O belo p&uacute;blico pernambucano compareceu com a energia explosiva de milh&otilde;es de volts e fez a festa. Agrade&ccedil;o a Deus, em primeiro lugar; a Biscoito Fino, por acreditar; a Alexandre, meu empres&aacute;rio, pelo suporte e execu&ccedil;&atilde;o; ao Andr&eacute; Brasileiro, pelo incentivo; &agrave; Fatinha, pela for&ccedil;a amiga; &agrave; Vav&aacute;, todos da minha equipe &ldquo;tour de force&rdquo; e aos artistas pela presen&ccedil;a e brilho na festa. Obrigada ao Cezzinha pela compet&ecirc;ncia nos arranjos e dire&ccedil;&atilde;o musical. Espero que voc&ecirc;s se divirtam, assim como n&oacute;s.</p>

<p>Elba Ramalho<br />
</p>'
] );


Dvds::create( [
'dvd' =>'São João Carioca',
'slug' =>'sao_joao_carioca',
'ano' =>'2012',
'dvd_capa' =>'SJCcapa1.jpg',
'sbr_disco' => '<p>Som Livre &ndash; 0683-9<br />
Lan&ccedil;amento: junho de 2012</p>',
'letra' =>'<p><strong>1. Olha pro C&eacute;u</strong> <em class="compositor">(Jos&eacute; Fernandes / Luiz Gonzaga)</em><br />
Elba Ramalho e Gilberto Gil</p>

<p><strong>2. Anuncia&ccedil;&atilde;o</strong> <em class="compositor">(Alceu Valen&ccedil;a)</em><br />
Elba Ramalho</p>

<p><strong>3. Na Base da Chinela</strong> <em class="compositor">(Rosil Cavalcanti / Jackson do Pandeiro)</em></br>
<strong>Qui nem Jil&oacute;</strong><em class="compositor">(Luiz Gonzaga / Humberto Teixeira)</em></br>
<strong>Bai&atilde;o</strong><em class="compositor">(Luiz Gonzaga / Humberto Teixeira)</em><br />
Elba Ramalho e Gilberto Gil</p>

<p><strong>4. Festa do Interior</strong> <em class="compositor">(Moraes Moreira / Abel Silva)</em><br/>
<strong>Pagode Russo</strong> <em class="compositor">(Luiz Gonzaga / Jo&atilde;o Silva)</em><br/>
<strong>Onde Tu T&aacute; Nen&eacute;m</strong><em class="compositor">(Luiz Bandeira)</em><br />
Elba Ramalho e Gilberto Gil</p>

<p><strong>5. Procurando Tu</strong> <em class="compositor">(Antonio Barros / J. Luna)</em><br />
Elba Ramalho e Gilberto Gil &ndash; Participa&ccedil;&atilde;o especial: Thiaguinho e P&eacute;ricles</p>

<p><strong>6. Esperando na Janela</strong> <em class="compositor">(Targino Gondim / Manuca Almeida / Raimundinho do Acordeom)</em><br />
Gilberto Gil</p>

<p><strong>7. Minha Princesa Cordel</strong> <em class="compositor">(Gilberto Gil)</em><br />
Elba Ramalho e Gilberto Gil</p>

<p><strong>8. A Vida do Viajante</strong> <em class="compositor">(Luiz Gonzaga / Herv&eacute; Cordovil)</em>
Homem com H<em class="compositor">(Antonio Barros)</em><br />
Elba Ramalho</p>

<p><strong>9. De Volta pro Aconchego</strong> <em class="compositor">(Dominguinhos / Nando Cordel)</em><br />
Elba Ramalho &ndash; Participa&ccedil;&atilde;o especial: Dominguinhos</p>

<p><strong>10. Gostoso Demais</strong> <em class="compositor">(Dominguinhos / Nando Cordel)</em><br />
Elba Ramalho &ndash; Participa&ccedil;&atilde;o especial: Dominguinhos</p>

<p><strong>11. Eu S&oacute; Quero um Xod&oacute;</strong> <em class="compositor">(Dominguinhos / Anast&aacute;cia)</em><br />
Elba Ramalho e Gilberto Gil &ndash; Participa&ccedil;&atilde;o especial: Dominguinhos</p>

<p><strong>12. Espumas ao Vento</strong> <em class="compositor">(Accioly Neto)</em><br />
Elba Ramalho &ndash; Participa&ccedil;&atilde;o especial: Gusttavo Lima</p>

<p><strong>13. Sabi&aacute;</strong> <em class="compositor">(Luiz Gonzaga / Z&eacute; Dantas)</em><br />
Elba Ramalho e Gilberto Gil &ndash; Participa&ccedil;&atilde;o especial: Geraldo Azevedo</p>

<p><strong>14. Mo&ccedil;a Bonita</strong> <em class="compositor">(Geraldo Azevedo / Capinan)</em><br />
Geraldo Azevedo</p>

<p><strong>15. Riacho do Navio</strong> <em class="compositor">(Luiz Gonzaga / Z&eacute; Dantas)</em><br />
Elba Ramalho e Gilberto Gil &ndash; Participa&ccedil;&atilde;o especial: Geraldo Azevedo</p>

<p><strong>16. Forr&oacute; do Xenhenh&eacute;m</strong> <em class="compositor">(Cec&eacute;u)</em><br />
Elba Ramalho e Gilberto Gil &ndash; Participa&ccedil;&atilde;o especial: Alcione</p>

<p><strong>17. Pisa na Ful&ocirc;</strong> <em class="compositor">(Jo&atilde;o Do Vale / Ernesto Pires / Silveira Jr.)</em><br />
Elba Ramalho e Gilberto Gil &ndash; Participa&ccedil;&atilde;o especial: Alcione</p>

<p><strong>18. Caju&iacute;na </strong> <em class="compositor">(Caetano Veloso)</em><br />
Elba Ramalho &ndash; Participa&ccedil;&atilde;o especial: Caetano Veloso</p>

<p><strong>19. Noites Brasileiras</strong> <em class="compositor">(Luiz Gonzaga / Z&eacute; Dantas)</em><br />
Elba Ramalho e Gilberto Gil &ndash; Participa&ccedil;&atilde;o especial: Caetano Veloso</p>

<p><strong>20. S&atilde;o Jo&atilde;o, Xang&ocirc; Menino</strong> <em class="compositor">(Gilberto Gil / Caetano Veloso)</em><br />
Gilberto Gil &ndash; Participa&ccedil;&atilde;o especial: Caetano Veloso</p>

<p><strong>21. &Eacute; S&oacute; Voc&ecirc; Querer</strong> <em class="compositor">(Nando Cordel)</em><br />
Elba Ramalho &ndash; Participa&ccedil;&atilde;o especial: Cezzinha Thomaz</p>

<p><strong>22. S&atilde;o Jo&atilde;o Carioca</strong> <em class="compositor">(Gilberto Gil / Nando Cordel)</em></br>
<strong>Frevo Mulher</strong><em class="compositor">(Z&eacute; Ramalho)</em><br />
Elba Ramalho e Gilberto Gil</p>',

'fx_tecnica' =>'<p>Dire&ccedil;&atilde;o de v&iacute;deo: Darcy Burger<br />
Dire&ccedil;&atilde;o geral: Flora Gil e Let&iacute;cia Monte<br />
Dire&ccedil;&atilde;o musical: Gilberto Gil e Elba Ramalho<br />
Elba Ramalho convida: Alcione, Caetano Veloso, Thiaguinho &amp; P&eacute;ricles, Gilberto Gil, Dominguinhos,<br/> Geraldo Azevedo e Gustavo Lima<br />
Teclados: Z&eacute; Am&eacute;rico Bastos<br />
Baixo: Ney Concei&ccedil;&atilde;o<br />
Viol&atilde;o e guitarra: Marcos Arcanjo<br />
Bateria: Serginho Machado<br />
Percuss&atilde;o: Anjo Caldas<br />
Acordeom: Cezzinha Thomaz<br />
Zabumba: Durval<br />
Trombone: Trompete: Nilsinho Amarante<br />
Trompete: Enok Chagas<br />
Sax: Gilberto Pontes<br />
Guitarra, guitarra baiana, bandolim, banjo, cavaquinho e viola de 12: S&eacute;rgio Chiavazzoli</p>

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
U. M. Gabisom: Marcos Possato Jr.<br />
T&eacute;cnico de grava&ccedil;&atilde;o: Leco Possolo<br />
Realiza&ccedil;&atilde;o: Geg&ecirc; Produ&ccedil;&otilde;es e Espiral Cria&ccedil;&atilde;o e Produ&ccedil;&atilde;o Cultural</p>

<p>Gravado ao vivo na Quinta da Boa Vista, Rio de Janeiro (RJ), em junho de 2011<br />
Dire&ccedil;&atilde;o de fotografia: Andr&eacute; Henrique Pamplona<br />
Assistente de dire&ccedil;&atilde;o: Joana Galetti<br />
Edi&ccedil;&atilde;o: Bruno Granja e Raphael Fontenelle<br />
Produtor executivo: Christoph Reisky<br />
Produ&ccedil;&atilde;o: Claudia Ebert e Crica Bressan<br />
T&eacute;cnicos de monitora&ccedil;&atilde;o e comunica&ccedil;&atilde;o: Igor Alarcon e C&acirc;ndido Neto<br />
Operadores de c&acirc;mera: Andr&eacute; Henrique Pamplona, Jos&eacute; Roberto Gonzaga, Gustavo de Mattos, Paulo Cardoso, Fabio dos Santos, Jos&eacute; Ferrado e M&aacute;rcio Zavareze<br />
Assistentes de c&acirc;mera: Jorge Luis de Souza Estolano, Odair Ant&ocirc;nio da Silva, Vagner Isidoro da Silva (Choquito) e Bruno Feij&atilde;o Santos<br />
Operador de cammate: Pedro Iaria<br />
Assistentes de cammate: Paulo Roberto de Moura Rego e Paulo Roberto da Silva<br />
Operadores de c&acirc;mera (extras): Welby Dias e Erick de Souza Oliveira<br />
Coordenador de finaliza&ccedil;&atilde;o: Tarc&iacute;sio Leite Pereira J&uacute;nior<br />
Logger: Daniel Isnard<br />
Finaliza&ccedil;&atilde;o: Igor Alarcon<br />
Mixado no Est&uacute;dio Som Livre por Leco Possollo<br />
Assistentes Est&uacute;dio Som Livre: Fernando Lauria e Felipe Dade<br />
Editado e finalizado na Carioca Filmes</p>

<p><strong>Geg&ecirc; Produ&ccedil;&otilde;es e Espiral</strong><br />
Coordenar&atilde;o de produ&ccedil;&atilde;o: Faf&aacute; Giordano e Beth Ara&uacute;jo<br />
Produ&ccedil;&atilde;o: Julia Sampaio, Alice Baeta, Christyane Gusm&atilde;o, Jo&atilde;o Ribeiro, M&ocirc;nica Badar&oacute;, Claudia Zettel e Luciana Flores<br />
Produ&ccedil;&atilde;o art&iacute;stica: Meny Lopes e B&aacute;rbara Ohana<br />
Planejamento e relacionamento institucional: Fernanda Jaguaribe<br />
Assessoria de imprensa: Gilda Mattoso e Marcus Vinicius<br />
Assessoria jur&iacute;dica: Ana Tranjan<br />
Liberar&atilde;o de direitos: Eveline Alves</p>

<p><strong>Globo Rio</strong><br />
Produ&ccedil;&atilde;o: Caroline Mathiesen, Gleice Ferreira, Mariana Rogel e Rafael Firmeza<br />
Coordena&ccedil;&atilde;o de projetos: Daniella Dourado<br />
Dire&ccedil;&atilde;o geral: Amauri Soares</p>

<p><strong>Canal Brasil</strong><br />
Coordenadora de produ&ccedil;&atilde;o: Tereza Alvarez<br />
Produ&ccedil;&atilde;o: Cl&aacute;udia Batista<br />
Ger&ecirc;ncia de programa&ccedil;&atilde;o: Alexandre Cunha<br />
Ger&ecirc;ncia de marketing e projetos: Andr&eacute; Saddy<br />
Gerente financeiro: Luiz Bertola<br />
Ger&ecirc;ncia de produ&ccedil;&atilde;o: Carlos Wanderley<br />
Dire&ccedil;&atilde;o geral: Paulo Mendon&ccedil;a</p>

<p>Realiza&ccedil;&atilde;o: Geg&ecirc; Produ&ccedil;&otilde;es, Espiral, Globo Rio e Canal Brasil<br />
Projeto gr&aacute;fico: Telma Ribeiro<br />
Fotos: Guido Moreto<br />
</p>'
] );




Dvds::create( [
'dvd' =>'Cordas, Gonzaga e Afins',
'slug' =>'cordas_gonzaga_e_afins',
'ano' =>'2015',
'dvd_capa' =>'dvd-capa2015.jpg',
'sbr_disco' => '<p>Coqueiro Verde Records – CV 20484<br />
Lan&ccedil;amento: Dezembro 2015</p>',
'letra' =>'<p><strong>1. Pau de Arara</strong> <em class="compositor"> (Luiz Gonzaga / Guio De Moraes)</em><br/>
<strong>Algodão</strong><em class="compositor">(Luiz Gonzaga / Zé Dantas)</em></p>

<p><strong>2. Não Sonho Mais </strong> <em class="compositor"> (Chico Buarque)</em></p>
<p><strong>3. Texto: Paixão Jagunça</strong> <em class="compositor"> (Newton Moreno) </em>/<strong>&nbsp;&nbsp;Qui nem Jiló</strong> <em class="compositor"> (Luiz Gonzaga / Humberto Teixeira)</em></p>

<p><strong>4. Texto: Aboio Mudo</strong> <em class="compositor"> (Newton Moreno) </em>/<strong>&nbsp;&nbsp;Súplica Cearense </strong> <em class="compositor"> (Gordurinha / Nelinho)</em></p>

<p><strong>5. Assum Branco </strong> <em class="compositor"> (José Miguel Wisnik) </em>/<strong>&nbsp;&nbsp;Assum Preto </strong> <em class="compositor"> (Luiz Gonzaga / Humberto Teixeira)</em></p>

<p><strong>6. O Ciúme </strong> <em class="compositor"> (Caetano Veloso)</em><br/>


<p><strong>7. Béradêro</strong> <em class="compositor"> (Chico César)  </em>/<strong>&nbsp;&nbsp;Ave Maria Sertaneja</strong> <em class="compositor"> (Julio Ricardo / O. De Oliveira)</em><br/>
Texto: <strong>Ave Maria</strong> <em class="compositor"> (Newton Moreno)</em>/<strong>&nbsp;&nbsp;Ave Maria</strong> <em class="compositor">(Bach / Gounod)</em>
</p>

<p><strong>8. Texto: Morte e Vida Severina</strong> <em class="compositor"> (João Cabral de Melo Neto)</em><br/>
<strong>Funeral de um Lavrador </strong> <em class="compositor"> (Chico Buarque / João Cabral de Melo Neto)</em>
</p>
<p><strong>9. A Natureza das Coisas </strong> <em class="compositor"> (Accioly Neto)</em></p>
<p><strong>10. Tomara</strong> <em class="compositor"> (Alceu Valença / Rubem Valença Filho)</em></p>

<p><strong>11. Tema Instrumental Mundo do Lua</strong><br/>
Pot-pourri:<strong> A volta da Asa Branca </strong> <em class="compositor"> (Luiz Gonzaga / Zé Dantas) </em><br/>
<strong>Assum Preto </strong> <em class="compositor"> (Luiz Gonzaga / Humberto Teixeira) </em>/<strong>&nbsp;&nbsp;Paraíba </strong> <em class="compositor"> (Luiz Gonzaga / Humberto Teixeira)</em><br/>
<strong>Baião </strong> <em class="compositor"> (Luiz Gonzaga / Humberto Teixeira) </em>/<strong>&nbsp;&nbsp;Asa Branca</strong> <em class="compositor"> (Luiz Gonzaga / Humberto Teixeira)</em>
</p>

<p><strong>12. A Violeira</strong> <em class="compositor"> (Tom Jobim / Chico Buarque)</em></p>
<p><strong>13. Adeus, Iracema </strong> <em class="compositor"> (Luiz Gonzaga / Zé Dantas)</em></p>
<p><strong>14. Ciranda Praieira  </strong> <em class="compositor"> (Lenine / Paulo César Pinheiro)</em></p>
<p><strong>15. Aquela Rosa </strong> <em class="compositor"> (Geraldo Azevedo / Carlos Fernando)</em></p>

<p><strong>16. Braia Dengosa</strong> <em class="compositor">(Luiz Gonzaga / Zé Dantas)</em><br/>
Participação especial: <strong>Naná Vasconcelos e Aninha e Lulu Araújo (alfaias)</strong></p>

<p><strong>17. Domingo no Parque </strong> <em class="compositor"> (Gilberto Gil)</em></p>


<p><strong>18. Gravitacional</strong> <em class="compositor"> (Marcelo Jeneci)</em><br/>
Participação especial: <strong>Marcelo Jeneci</strong></p>

<p><strong>19. Texto: Fantasmas que Migrou </strong> <em class="compositor"> (Newton Moreno)</em>/<strong>&nbsp;&nbsp;Chão de Giz </strong> <em class="compositor"> (Zé Ramalho)</em></p>


<p><strong>20. Sabiá</strong> <em class="compositor"> (Luiz Gonzaga / Zé Dantas)</em></p>

<p><strong>21. Sanfona Sentida </strong> <em class="compositor"> (Dominguinhos / Anastácia)</em></p>
<p><strong>22. Sete Meninas</strong> <em class="compositor"> (Dominguinhos / Toinho Alves)</em></p>
<p><strong>23. Pot-pourri de marchinhas de São João</strong><br/>
 <strong>São João na Roça </strong><em class="compositor"> (Luiz Gonzaga / Zé Dantas)</em>/<strong>&nbsp;&nbsp;Olha pro Céu</strong> <em class="compositor"> (Luiz Gonzaga / José Fernandes) </em>/<strong>&nbsp;&nbsp;Pagode Russo</strong> <em class="compositor"> russo (Luiz Gonzaga / João Silva)</em></p>


 <p><strong>24. Texto: O Dia em Que Lua Nasceu </strong> <em class="compositor"> (Newton Moreno) </em>/<strong>&nbsp;&nbsp;Asa Branca</strong> <em class="compositor"> (Luiz Gonzaga / Humberto Teixeira)</em></p>

 <p><strong>25. Canta Luiz</strong> <em class="compositor"> (Dominguinhos / Poeta Oliveira)</em>/<strong>&nbsp;&nbsp;A Vida do Viajante </strong> <em class="compositor"> (Luiz Gonzaga / Hervé Cordovil)</em></p>
',

'fx_tecnica' =>'<p><strong>BANDA</strong><br />
<strong>SaGRAMA</strong><br />
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
Tost&atilde;o Queiroga (bateria)</p>

<p><strong>SHOW</strong><br />
Gravado ao vivo no dia 25 de setembro de 2014 no Chevrolet Hall (Olinda/PE)<br />
Cria&ccedil;&atilde;o e dire&ccedil;&atilde;o geral do projeto: Margot Rodrigues<br />
Dire&ccedil;&atilde;o do espet&aacute;culo: Andr&eacute; Brasileiro<br />
Textos: Newton Moreno<br />
Dire&ccedil;&atilde;o musical: S&eacute;rgio Campelo<br />
Arranjos: S&eacute;rgio Campelo e Cl&aacute;udio Moura<br />
Dire&ccedil;&atilde;o de arte: Marcondes Lima<br />
Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Alexandre Valentim<br />
Roteiro musical: Elba Ramalho, Andr&eacute; Brasileiro, Margot Rodrigues e Alexandre Valentim<br />
Produ&ccedil;&atilde;o executiva: Alexandre Sampaio, Karla Martins e Camila Paschoal<br />
Assist&ecirc;ncia de produ&ccedil;&atilde;o: Tadeu Gondim<br />
Figurinos de Elba Ramalho: Carol Azevedo, Gustavo Silvestre, Marcondes Lima, Paulo Pinheiro e Carol Silveira (Refazenda)<br />
Figurinos dos m&uacute;sicos e execu&ccedil;&atilde;o: Carol Silveira (Vagamundo)<br />
Designer de luz e opera&ccedil;&atilde;o: Jathyles Miranda<br />
Videocenografia, anima&ccedil;&atilde;o gr&aacute;fica e mapeamento: Gabriel Furtado<br />
Maquiagem de Elba Ramalho: Jerry Adriani<br />
Produtora pessoal de Elba Ramalho: Ana de F&aacute;tima Costa<br />
Registro em foto: Alex Ribeiro e Jo&atilde;o Vicente<br />
V&iacute;deos: Moinho Conte&uacute;dos Criativos<br />
Assessoria de imprensa: Margot Rodrigues e Juliana Godoy<br />
M&iacute;dias sociais: Vin&iacute;cius Vieira<br />
Dire&ccedil;&atilde;o de arte e design gr&aacute;fico do DVD e DVD/CD: Bruno Parmera<br />
Identidade visual do projeto: Marta Lima Comunica&ccedil;&atilde;o<br />
Roadie e Contrarregra: Alex Cunha<br />
Roadie: Jo&atilde;o Alves<br />
T&eacute;cnico de som: Junior Evangelista<br />
Operador de monitor: Fl&aacute;vio Rego<br />
Operador de P.A.: M&aacute;rio Jorge Andrade<br />
Contrarregra e assistente: Josino Feitosa<br />
Realiza&ccedil;&atilde;o: Margot Produ&ccedil;&otilde;es e Baioque Produ&ccedil;&otilde;es Art&iacute;sticas</p>

<p><strong>Rela&ccedil;&atilde;o dos v&iacute;deos cedidos</strong><br />
Mandacaru Timelapse &ndash; Marcius Clapp (m&uacute;sicas: &ldquo;Algod&atilde;o&rdquo; e Texto &ldquo;Fantasmas&rdquo;) // Timelapse de nuvens no sert&atilde;o &ndash; Alex Ribeiro (m&uacute;sica: &ldquo;Algod&atilde;o&rdquo;) // Elba anos 70 &ndash; Rede Globo (m&uacute;sica: N&atilde;o sonho mais) // P&ocirc;r do sol e mandacaru &ndash; Rede Globo (m&uacute;sica: &ldquo;Tomara&rdquo;) // Barcos do S&atilde;o Francisco &ndash; Rede Globo (m&uacute;sica: &ldquo;O ci&uacute;me&rdquo;) // Via-cr&uacute;cis &ndash; Mathieu Duvignaud (m&uacute;sica: &ldquo;Funeral de um lavrador) // Da s&eacute;rie &ldquo;Correndo riscos&rdquo; &ndash; Toni Brada (m&uacute;sica: &ldquo;Ch&atilde;o de giz&rdquo;) // Carnaval do Recife 1941 (Dona Santa) &ndash; Meridional Filmes (m&uacute;sica: &ldquo;Braia dengosa&rdquo;)</p>

<p><strong>Rela&ccedil;&atilde;o de fotos cedidas</strong><br />
Ex-votos &ndash; Carlos Augusto Lira (m&uacute;sica: &ldquo;Ave Maria&rdquo;) // Luiz Gonzaga &ndash; Acervo Tinhor&atilde;o (Instituto Moreira Salles) (m&uacute;sica: &ldquo;Mundo do Lua&rdquo;) // Alex Ribeiro &ndash; Desenhos de Marcondes Lima (m&uacute;sica: Sabi&aacute;)</p>

<p><strong>Grava&ccedil;&otilde;es adicionais e finaliza&ccedil;&atilde;o de &aacute;udio feitos no Est&uacute;dio Carranca</strong><br />
Grava&ccedil;&otilde;es adicionais: Jorge Rom&atilde;o e Bruno Lins<br />
Edi&ccedil;&atilde;o: Marco Melo, Alberico Junior e Junior Evangelista<br />
Mixagem 2.0: Junior Evangelista, Tost&atilde;o Queiroga e S&eacute;rgio Campelo<br />
Mixagem 5.1: Junior Evangelista<br />
Masteriza&ccedil;&atilde;o 2.0 e 5.1: Carlinhos Borges<br />
Mixagem e p&oacute;s-produ&ccedil;&atilde;o de &aacute;udio: Tost&atilde;o Queiroga, Junior Evangelista e S&eacute;rgio Campelo</p>

<p><strong>Equipe Globo Nordeste</strong><br />
Dire&ccedil;&atilde;o geral: Ar&iacute;sio Coutinho Filho // Diretor de TV: Chico Lima // Coordenadora de produ&ccedil;&atilde;o: Izabel Carvalho // Assistente de produ&ccedil;&atilde;o: Marcos Santos // C&acirc;meras: Ed&eacute;cio Brito, Paul&atilde;o, Ivson Couto, Raimundo Nonato, Geraldo Vilar, Michale Donald, Alexandre Souza, Ricardo Max e Edison Silva // Opera&ccedil;&atilde;o de sistemas: Sandro Souza // Operador de VT: Jo&atilde;o Gon&ccedil;alves // Ilumina&ccedil;&atilde;o: Tayme Moura</p>

<p><strong>Equipe F&aacute;brica Est&uacute;dios</strong><br />
Supervis&atilde;o geral: Paulo Lopes // Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Geraldo Lopes // Administrativo: Luciana Vaz // Assistente administrativo: Priscila Figueiredo // Coordena&ccedil;&atilde;o de produ&ccedil;&atilde;o: Jeff Moura // Produ&ccedil;&atilde;o: Gabriela Santiago e Josuel Santos // Engenheiros de grava&ccedil;&atilde;o: Paulo Lopes e Christiano Lemgruber // Assistentes de grava&ccedil;&atilde;o: Gustavo Cunha e Cleidson Ferreira // Edi&ccedil;&atilde;o de v&iacute;deo: Fred Figueiredo e Rafael Reines // Dire&ccedil;&atilde;o de montagem: Paulo Lopes // Corre&ccedil;&atilde;o de cor: Rafael Reines // Motion: Fred Figueiredo</p>

<p><strong>Equipe Canal Brasil</strong><br />
Assistente de produ&ccedil;&atilde;o: Laura Zanetti // Produ&ccedil;&atilde;o: Amanda Loureiro e Mariana Leivas // Coordenadora de produ&ccedil;&atilde;o: Luciana Ara&uacute;jo // Coordenador de produtos e neg&oacute;cios: Marcelo Machado // Coordenadora de jornalismo: Erika Rodrigues // Gerente de programa&ccedil;&atilde;o e aquisi&ccedil;&atilde;o: Alexandre Cunha // Gerente de marketing e projetos: Andr&eacute; Saddy // Gerente administrativo e financeiro: Luiz Bertolo // Gerente de produ&ccedil;&atilde;o: Carlos Wanderley // Dire&ccedil;&atilde;o geral: Paulo Mendon&ccedil;a<br />
</p>'
] );



Dvds::create( [
'dvd' =>'O Grande Encontro 20 Anos ',
'slug' =>'o_grande_encontro_20_anos',
'ano' =>'2016',
'dvd_capa' =>'dvd-capa2016.jpg',

'sbr_disco' => '<p>Sony Music – 88985393422<br />
Lan&ccedil;amento: Dezembro 2016</p>',
'letra' =>'<p><strong>1. Anunciação </strong> <em class="compositor"> (Alceu Valença)</em><br/>
Alceu Valença, Elba Ramalho e Geraldo Azevedo</p>

<p><strong>2. Caravana</strong> <em class="compositor">(Geraldo Azevedo / Alceu Valença)</em><br/>
Alceu Valença, Elba Ramalho e Geraldo Azevedo</p>

<p><strong>3. Me dá um beijo</strong> <em class="compositor"> (Alceu Valença) </em><br/>
Alceu Valença, Elba Ramalho e Geraldo Azevedo</p>

<p><strong>4. Sabiá </strong> <em class="compositor">(Luiz Gonzaga / Zé Dantas)</em><br/>
Alceu Valença, Elba Ramalho e Geraldo Azevedo</p>

<p><strong>5. Papagaio do futuro</strong> <em class="compositor">(Alceu Valença)</em>/<strong>&nbsp;&nbsp;Coco das serras</strong> <em class="compositor">(domínio público)</em><br/>
Geraldo Azevedo e Alceu Valença</p>

<p><strong>6. Moça bonita</strong> <em class="compositor">(Geraldo Azevedo / Capinan)</em><br/>
Geraldo Azevedo e Alceu Valença</p>

<p><strong>7. Sétimo céu</strong> <em class="compositor">(Geraldo Azevedo / Fausto Nilo)</em><br/>
Geraldo Azevedo</p>

<p><strong>8. Dona da minha cabeça</strong> <em class="compositor">(Geraldo Azevedo / Fausto Nilo)</em><br/>
Geraldo Azevedo
</p>
<p><strong>9. Dia branco </strong> <em class="compositor">(Geraldo Azevedo / Renato Rocha)</em><br/>
Geraldo Azevedo</p>

<p><strong>10. Só depois de muito amor eu vou embora </strong> <em class="compositor">(Geraldo Azevedo / Abel Silva)</em><br/>
Geraldo Azevedo</p>

<p><strong>11. Bicho de sete cabeças II </strong><em class="compositor"> (Zé Ramalho / Geraldo Azevedo / Renato Rocha) </em><br/>
Geraldo Azevedo e Elba Ramalho
</p>

<p><strong>12. Chorando e cantando </strong> <em class="compositor">(Geraldo Azevedo / Fausto Nilo)</em><br/>
Geraldo Azevedo e Elba Ramalho</p>
<p><strong>13. Ai que saudade d’ocê </strong> <em class="compositor">(Vital Farias)</em><br/>
Elba Ramalho</p>
<p><strong>14. Chão de giz </strong> <em class="compositor">(Zé Ramalho)</em><br/>
Elba Ramalho</p>
<p><strong>15. Sangrando </strong> <em class="compositor">(Gonzaguinha)</em><br/>
Elba Ramalho</p>

<p><strong>16. Na base da chinela</strong> <em class="compositor">(Jackson do Pandeiro / Rosil Cavalcanti)</em>/<strong>&nbsp;&nbsp;Qui nem jiló </strong> <em class="compositor">(Luiz Gonzaga / Humberto Teixeira) </em>/<strong>&nbsp;&nbsp;Eu só quero um xodó</strong> <em class="compositor">(Dominguinhos / Anastácia)</em><br/>
Elba Ramalho
</p>

<p><strong>17. Ciranda da rosa vermelha  </strong> <em class="compositor">(folclore / adaptação: Alceu Valença)</em><br/>
Elba Ramalho e Alceu Valença</p>


<p><strong>18. Flor de tangerina </strong> <em class="compositor">(Alceu Valença)</em><br/>
Elba Ramalho e Alceu Valença</p>

<p><strong>19. La belle de jour </strong> <em class="compositor">(Alceu Valença</em>/<strong>&nbsp;&nbsp;Girassol</strong> <em class="compositor">(Alceu Valença)</em><br/>
Alceu Valença</p>


<p><strong>20. Coração bobo </strong> <em class="compositor">(Alceu Valença)</em><br/>
Alceu Valença</p>

<p><strong>21. Cabelo no pente</strong> <em class="compositor">(Alceu Valença / Vicente Barreto)</em><br/>
Alceu Valença</p>
<p><strong>22. Tropicana </strong> <em class="compositor">(Alceu Valença / Vicente Barreto)</em><br/>
Alceu Valença</p>
<p><strong>23. Táxi lunar </strong><em class="compositor">(Geraldo Azevedo / Zé Ramalho / Alceu Valença)</em><br/>
Alceu Valença, Elba Ramalho e Geraldo Azevedo</p>


 <p><strong>24. Ciranda da traição </strong> <em class="compositor"> (Alceu Valença) </em><br/>
Alceu Valença, Elba Ramalho e Geraldo Azevedo</p>

 <p><strong>25. Pelas ruas que andei </strong> <em class="compositor">(Alceu Valença / Vicente Barreto)</em><br/>
 Alceu Valença, Elba Ramalho e Geraldo Azevedo</p>

  <p><strong>26. Banho de cheiro  </strong> <em class="compositor">(Carlos Fernando)</em><br/>
 Alceu Valença, Elba Ramalho e Geraldo Azevedo</p>
  <p><strong>27. Frevo Mulher </strong> <em class="compositor">(Zé Ramalho)</em><br/>
 Alceu Valença, Elba Ramalho e Geraldo Azevedo</p>
 <br/>
 <p><strong>EXTRAS</strong><br/>
 <br/>
 <strong>Tesoura do desejo </strong><em class="compositor">(Alceu Valença)</em> <br/>
 Alceu Valença e Elba Ramalho</p>

  <p><strong>O princípio do prazer </strong><em class="compositor">(Geraldo Azevedo)</em> <br/>
 Elba Ramalho e Geraldo Azevedo</p>

',

'fx_tecnica' =>'<p><strong>BANDA</strong><br />
Paulo Rafael (guitarra)<br />
Marcos Arcanjo (guitarra e violão)<br />
Rafael Meninão (sanfona)<br />
Cesar Michiles (flautas e sax)<br />
Ney Conceição (baixo)<br />
Cássio Cunha (bateria)<br />
Anjo Caldas (percussão)<br />
</p>
<p><strong>SHOW</strong><br />
Gravado ao vivo nos dias 6 e 7 de outubro de 2016 no Citibank Hall (São Paulo/SP)<br />
Dire&ccedil;&atilde;o artística: André Brasileiro<br />
Roteiro musical: Alceu Valença, Elba Ramalho e Geraldo Azevedo<br />
Produ&ccedil;&atilde;o musical: Zé Américo Bastos<br />
Dire&ccedil;&atilde;o musical: Marcos Arcanjo e Paulo Rafael<br />
Dire&ccedil;&atilde;o de produção: Alexandre Valentim<br />
Dire&ccedil;&atilde;o de arte: Marcondes Lima<br />
Dire&ccedil;&atilde;o de produ&ccedil;&atilde;o: Alexandre Valentim<br />
Coordenação de produção: Emília Veras, Gabriela Azevedo e Yanê Montenegro<br />
Produção executiva: Ingrid Mac Cord e Talita Melcop<br />
Produção Geraldo Azevedo: Reinaldo Galvão<br />
Produção Elba Ramalho: Ana de Fátima Costa (Fatinha)<br/>
Realização: Acauã Produtora, Geração Produtora e Tropicana Produções<br />
Figurinos da banda: Carol Silveira<br />
Maquiagem e stylist Elba: Rodrigo Farias<br />
Cabelo Elba: Everson Rocha<br />
Assessoria de imprensa: Júlio Moura<br />
Redes sociais: Beto Feitosa<br />
Assessoria jurídica: Escritório Cultural – Fernanda Freitas<br />
</p>

<p><strong>Equipe t&eacute;cnica do show</strong><br />
T&eacute;cnico de P. A.: Sergio Peres<br />
T&eacute;cnico de monitor: Flavio Rego<br />
Engenheiro de grava&ccedil;&atilde;o e mixagem: Rodrigo Vidal<br />
Gravado na unidade m&oacute;vel de &aacute;udio Gabisom<br />
Light designer: Jarbas Goudard<br />
Desenho e programa&ccedil;&atilde;o de Grand MA: Cesar Ramires<br />
Assistentes de ilumina&ccedil;&atilde;o: Leonan Augusto de Oliveira (coordenador t&eacute;cnico), Felipe Latch Cardoso Maur&iacute;cio (rigger e opera&ccedil;&atilde;o de canh&atilde;o), Marcos Paulo Silva Afonso Teixeira (rack man e opera&ccedil;&atilde;o de canh&atilde;o), Pedro Henrique Martins de Castro (t&eacute;cnico e opera&ccedil;&atilde;o de canh&atilde;o)</p>
<p>&nbsp;</p>

<p><strong>Equipe de cenografia</strong><br />
Cenografia, dire&ccedil;&atilde;o de arte, coordena&ccedil;&atilde;o e produ&ccedil;&atilde;o de cenografia: Gringo Cardia<br />
Imagens para cenografia: obras do artista J. Cunha<br />
Cen&oacute;grafo assistente e produ&ccedil;&atilde;o de cenografia: Jackson Tinoco<br />
Designer gr&aacute;fica de cenografia: Julia Sampaio<br />
Assistente de design gr&aacute;fico: Matheus Meira<br />
Execu&ccedil;&atilde;o de cenografia: KF Cenografia<br />
Montagem: Eliezer Paiva de Melo<br />
Bordados sobre as telas da cenografia: Spectaculu &ndash; Escola de Arte e Tecnologia</p>
<p>&nbsp;</p>

<p><strong>V&iacute;deo</strong><br />
Dire&ccedil;&atilde;o de v&iacute;deo: Bruno Murtinho<br />
Diretor de fotografia: Marcos Salamonde<br />
Assistente de dire&ccedil;&atilde;o de v&iacute;deo: Pietro Grassia<br />
Produ&ccedil;&atilde;o de v&iacute;deo: PorqueEu Filmes<br />
Coordenador de produ&ccedil;&atilde;o de v&iacute;deo: Gabriel Braga<br />
Produtor de v&iacute;deo: Diogo Pinheiro Pinaffi<br />
Produtora executiva de v&iacute;deo: Bruna Ciccareto</p>

<p>&nbsp;</p>
<p><strong>Sony Music</strong><br />
Presidente: Paulo Junqueiro<br />
Dire&ccedil;&atilde;o art&iacute;stica (A &amp; R): Bruno Batista<br />
Supervis&atilde;o art&iacute;stica: S&eacute;rgio Bittencourt<br />
Coordena&ccedil;&atilde;o art&iacute;stica (A &amp; R): Andr&eacute; &ldquo;Peixel&rdquo; Mattos<br />
&nbsp;<br />
Fot&oacute;grafo capas e fotos encartes: Marcos Hermes<br />
Projeto gr&aacute;fico: Sandro Mesquita</p>'
] );

	}

}
