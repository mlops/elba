<div class="wrap-carousel">
  <div id="myCarousel" class="carousel slide carousel-fade">
            <!-- Carousel items -->
            <div class="carousel-inner">
                  <div class="active item">
                    <img src="{{ URL::to(Config::get('caminho.server_public').'/images/ciclo/Painel10-min.jpg') }}" alt="Show Cordas Gonzaga e Afins" >
                  </div>
                  <!-- /end item1 -->
                  <div class="item">
                    <img src="{{ URL::to(Config::get('caminho.server_public').'/images/ciclo/Painel00-min.jpg') }}" alt="Show Cordas Gonzaga e Afins">
                  </div>
                  <!-- /end item2 -->
                  <div class="item">
                     <img src="{{  URL::to(Config::get('caminho.server_public').'/images/ciclo/Painel90-min.jpg')}}" alt="Novo Disco Cordas Gonzaga e Afins">
                  </div>
                  <!-- /end item3 -->
                  <div class="item">
                     <img src="{{  URL::to(Config::get('caminho.server_public').'/images/ciclo/Painel80-min.jpg')}}" alt="Show Cordas Gonzaga e Afins">
                  </div>
                  <!-- /end item4 -->
                  <div class="item">
                     <img src="{{  URL::to(Config::get('caminho.server_public').'/images/ciclo/Painel70-min.jpg')}}" alt="Show Cordas Gonzaga e Afins">
                  </div>
                  <!-- /end item5 -->
          </div>
          <a class="carousel-control left " href="#myCarousel" data-slide="prev"></a>
          <a class="carousel-control right " href="#myCarousel" data-slide="next"></a>
  </div>
</div><!-- /.wrap -->