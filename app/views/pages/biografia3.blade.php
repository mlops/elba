@extends('layout.master2')
@section('title', '/////#Elba Ramalho Biografia ')@stop
@section('head-script')
    @parent
    {{ HTML::script('js/modernizr.custom.79639.js') }}
    <style>
    body {
      overflow: auto;
    }
    .ps-container,
    .ps-container div,
    .ps-contentwrapper,
    .ps-header {
      position: relative;
      width: 100%;
      top: auto;
      bottom: auto;
      overflow: visible;
    }

    .ps-contentwrapper div {
      padding-left: 240px;
      margin-bottom: 80px;
      height: 300px;
    }

    .ps-slides > div {
      width: 200px;
      height: 200px;
      positon: relative;
      margin-bottom: 172px;
      box-shadow: none;
    }

    .ps-slidewrapper > nav{
      display: none;
    }

    .ps-container .ps-slidewrapper {
      z-index: 10000;
      position: absolute;
      top: 270px;
      width: 200px;
      left: 0px;
    }
    </style>
@stop
@section('content')

<section id="ps-container" class="ps-container">

  <div class="ps-header">
    <h1>Biografia Elba Ramalho</h1>
  </div><!-- /ps-header -->

  <div class="ps-contentwrapper">

    <div class="ps-content">
      <h2>Bernhard</h2>
      <span class="ps-price">£100</span>
      <p>With restful springiness in the seat; prevents static sitting and provides enhanced seating comfort. Padded seat and back for enhanced seating comfort. Soft, hardwearing and easy care leather, which ages gracefully.</p>
      <a href="http://www.ikea.com/gb/en/catalog/products/80163804/#/60203882">Buy this item</a>
    </div>

    <div class="ps-content">
      <h2>Tobias</h2>
      <span class="ps-price">£65</span>
      <p>For increased stability, re-tighten the screws about two weeks after assembly. Seat and back with restful flexibility; prevents a static sitting posture and enhances comfort.</p>
      <a href="http://www.ikea.com/gb/en/catalog/products/90185320/#/20115038">Buy this item</a>
    </div>

    <div class="ps-content">
      <h2>Pöang</h2>
      <span class="ps-price">£140</span>
      <p>Frame made of layer-glued bent birch; a very strong and durable material. High back provides great support for your neck. Sheepskin has natural insulating properties, which make it feel warm and cosy to sit on. Extra cushions are available for variation and renewal.</p>
      <a href="http://www.ikea.com/gb/en/catalog/products/S79889694/#/S59901017">Buy this item</a>
    </div>

    <div class="ps-content">
      <h2>Mellby</h2>
      <span class="ps-price">£195</span>
      <p>Easy to keep clean; removable, machine washable cover. Seat cushion with a top layer of memory foam; moulds to the precise contours of your body and regains its shape when you get up.</p>
      <a href="http://www.ikea.com/gb/en/catalog/products/S99895000/#/S69894380">Buy this item</a>
    </div>

    <div class="ps-content">
      <h2>Torbjörn</h2>
      <span class="ps-price">£30</span>
      <p>Height adjustable for a comfortable sitting posture. The sloping seat gives a comfortable sitting position when leaning forwards.</p>
      <a href="http://www.ikea.com/gb/en/catalog/products/70224756/">Buy this item</a>
    </div>

  </div><!-- /ps-contentwrapper -->

  <div class="ps-slidewrapper">

    <div class="ps-slides">
      <div style="background-image:url(images/1.jpg);"></div>
      <div style="background-image:url(images/2.jpg);"></div>
      <div style="background-image:url(images/3.jpg);"></div>
      <div style="background-image:url(images/4.jpg);"></div>
      <div style="background-image:url(images/5.jpg);"></div>
    </div>

    <nav>
      <a href="#" class="ps-prev" ></a>
      <a href="#" class="ps-next" ></a>
    </nav>

  </div><!-- /ps-slidewrapper -->

</section><!-- /ps-container -->


@stop
@section('script-js')
@parent

@stop
