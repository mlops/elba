<section id="instagram">
<div class="wrap-instagram">
<div class="titulo-instagram">
  <h1>Instagram</h1>
</div><!-- /.titulo-instagram -->
<div class="container-instagram">
  <div class="gallery">
  @foreach ($instagram as $insta)
  <div class="gallery__item"><a href="{{ $insta->inslink }}" target="blank"><img src="{{ $insta->insfoto }}" alt="{{ $insta->altimg }}"/></a></div>
  @endforeach
  </div><!-- /.gallery -->
</div><!-- /.container -->
</div><!-- /.wrap-instagram -->
</section><!-- /#instagram -->
