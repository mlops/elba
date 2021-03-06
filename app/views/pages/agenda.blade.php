@extends('layouts.default')


@section('content')

<section id="tour" class="section-container">
<!--     <div id="tour-sub-nav">
        <ul>
            <li><a class="current-tour-view" href="/tour?scope=upcoming">On The Run Tour</a></li>
            <li>/</li>
            <li><a class="" href="/tour?scope=archive">Tour Archive</a></li>
        </ul>
    </div>
     -->
            <div class="tour-marquee">
            <img src="{{ URL::asset(Config::get('caminho.server_public').'img/elba/AgendaH.jpg')}}" alt="On The Run Tour"> 
        </div>
    
    <header class="tour-title">
        <h2>Agenda // Shows // Grava    es </h2>
    </header>
    <section class="tour-info">
        <p></p>
    </section>

    
    <div class="event-listing">
        <article id="event-item-4687" class="event-item">
            <div class="event-date table-item">06 Fev</div>
            <div class="event-location table-item">Elba com o cantor Almir Rouche.</div>
            <div class="event-venue table-item"> Clube Portugu  s (Recife)     Bloco "Siri na lata" </div>
                    <div class="event-tickets-empty table-item">
                    <span>&nbsp;</span>
                </div>
        </article>
        <article id="event-item-4688" class="event-item">
            <div class="event-date table-item">07 Fev </div>
            <div class="event-location table-item"> Elba no     Baile Municipal     da cidade do Recife.</div>
            <div class="event-venue table-item">Chevrolet Hall (Recife)</div>
                    <div class="event-tickets-empty table-item">
                    <span>&nbsp;</span>
                </div>
        </article>
        <article id="event-item-4689" class="event-item">
        <div class="event-date table-item">08 Fev</div>
        <div class="event-location table-item"> Elba no     Sarau Du Brown    com Carlinhos Brown e Ivete Sangalo.</div>
        <div class="event-venue table-item">Museu do Ritmo, em Salvador.</div>
                <div class="event-tickets-empty table-item"
                <span>&nbsp;</span>
            </div>
        </article>
        <article id="event-item-4690" class="event-item">
            <div class="event-date table-item">13 Fev</div>
            <div class="event-location table-item">   Cortejo das Na    es de Maracat     , com Nan   Vasconcellos.</div>
            <div class="event-venue table-item">Recife - Marco Zero</div>
                    <div class="event-tickets-empty table-item">
                    <span>&nbsp;</span>
                </div>
        </article>

        <article id="event-item-4690" class="event-item">
            <div class="event-date table-item">13 Fev</div>
            <div class="event-location table-item">Abertura Oficial Carnaval de Recife.</div>
            <div class="event-venue table-item">Recife - Marco Zero</div>
                    <div class="event-tickets-empty table-item">
                    <span>&nbsp;</span>
                </div>
        </article>

        <article id="event-item-4690" class="event-item">
            <div class="event-date table-item">14 Fev</div>
            <div class="event-location table-item">Elba participa com Spok do "Galo da Madrugada".</div>
            <div class="event-venue table-item">Recife-PE</div>
                    <div class="event-tickets-empty table-item">
                    <span>&nbsp;</span>
                </div>
        </article>
        <article id="event-item-4690" class="event-item">
            <div class="event-date table-item">14 Fev</div>
            <div class="event-location table-item">Show no P  lo V  rzea.</div>
            <div class="event-venue table-item">Recife-PE</div>
                    <div class="event-tickets-empty table-item">
                    <span>&nbsp;</span>
                </div>
        </article>

                <article id="event-item-4690" class="event-item">
            <div class="event-date table-item">15 Fev</div>
            <div class="event-location table-item">Municipio Ipojuca, as 18:00hs.</div>
            <div class="event-venue table-item">Recife-PE</div>
                    <div class="event-tickets-empty table-item">
                    <span>&nbsp;</span>
                </div>
        </article>




        <article id="event-item-4690" class="event-item">
            <div class="event-date table-item">15 Fev</div>
            <div class="event-location table-item"> P  lo Macaxeira as 23:30hs.</div>
            <div class="event-venue table-item">Recife-PE</div>
                    <div class="event-tickets-empty table-item">
                    <span>&nbsp;</span>
                </div>
        </article>


    <article id="event-item-4690" class="event-item">
            <div class="event-date table-item">16 Fev</div>
            <div class="event-location table-item"> Show na Praia de Ponta Negra.</div>
            <div class="event-venue table-item">Natal-RN</div>
                    <div class="event-tickets-empty table-item">
                    <span>&nbsp;</span>
                </div>
        </article>

             <article id="event-item-4690" class="event-item">
            <div class="event-date table-item">17 Fev</div>
            <div class="event-location table-item">Show as 16:00hs.</div>
            <div class="event-venue table-item">Pesqueira - PE</div>
                    <div class="event-tickets-empty table-item">
                    <span>&nbsp;</span>
                </div>
        </article>

     <article id="event-item-4690" class="event-item">
            <div class="event-date table-item">17 Fev</div>
            <div class="event-location table-item"> Encerramento do Carnaval, as 01:00hs. </div>
            <div class="event-venue table-item">Recife, no Marco Zero</div>
                    <div class="event-tickets-empty table-item">
                    <span>&nbsp;</span>
                </div>
        </article>

    </div>

</section>
</section>

@section('page-script')

<script>
var $ = jQuery.noConflict();
$(document).ready(function()  {
    //scroll agenda
    $("a[href^='#']").click(function(e){
        $("body, html").stop().animate({scrollTop:$(this.hash).offset().top - 80}, 1000);
        e.preventDefault();
    });

    });
</script>
@stop



@stop

