@extends('layouts.default')


@section('content')

<section id="follow" class="section-container page-generic">
    <div class="page-generic-inner">
      <div class="post-body">
<h2>Social</h2>
<br>
<br>
<p><a href="https://twitter.com/elbaramalho" target="_blank">
<img class="alignnone size-full wp-image-6311" src="{{ URL::asset(Config::get('caminho.server_public').'img/elba/social_twt.png') }}" alt="social_twt" width="128" height="128"></a>
</p>
<p><a href="http://instagram.com/elbaramalho" target="_blank">
<img class="alignnone size-full wp-image-6311" src="{{ URL::asset(Config::get('caminho.server_public').'img/elba/social_instagram.png') }}" alt="social_instagram" width="128" height="128"></a>
</p>
<p><a href="https://www.facebook.com/ElbaRamalhoOficial" target="_blank">
<img class="alignnone size-full wp-image-6309" src="{{ URL::asset(Config::get('caminho.server_public').'img/elba/social_fb.png') }}" alt="social_fb" width="128" height="128"></a>
</p>
<p><a href="https://www.youtube.com/user/elbaramalho" target="_blank">
<img class="alignnone size-full wp-image-6309" src="{{ URL::asset(Config::get('caminho.server_public').'img/elba/social_youtube.png') }}" alt="social_youtube" width="128" height="128"></a>
</p>
<p><a href="https://www.flickr.com/photos/elbaramalho/" target="_blank">
<img class="alignnone size-full wp-image-6309" src="{{ URL::asset(Config::get('caminho.server_public').'img/elba/social_flicker.png') }}" alt="social_flicker" width="128" height="128"></a>
</p>
      </div>
  </div>
</section>



@stop

