<section id="agenda">
<div class="wrap-agenda">
<div class="titulo-agenda">
  <h1>Agenda</h1>
</div><!-- /.titulo-agenda -->
<div class="container-agenda">

 @if($agenda->count())
 @foreach($agenda as $show)
     <div class="agenda-tbl">

             <div class="column-date table-item"><h2 class="e-date">{{ date('d/m', strtotime($show->startdate))}} </h2></div><!-- /.column -->
             <div class="column-evento table-item"><h2 class="e-evento">{{ $show->evento }}</h2></div><!-- /.column -->
             <div class="column-estado table-item"><h2 class="e-estado">{{ $show->estado }}</h2></div><!-- /.column -->
             <div class="column-local table-item"><h2 class="e-local">{{ $show->local }}</h2></div><!-- /.column -->
    </div>
@endforeach
 @else
    <div class="sem-agenda"><h2> Agenda em Breve!</h2></div><!-- /.column -->
 @endif
</div><!-- /.container -->
</div><!-- /.wrap-agenda -->
</section><!-- /#agenda -->