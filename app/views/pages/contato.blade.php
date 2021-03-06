@extends('layout.master')
@section('title', '/////#Elba Ramalho - Contato ')@stop
@section('head-script')
    @parent
    <style>
    .wrap #contatoWrap .container .contact li address  {
      line-height: 1.875em;
      font-weight: normal;
       }
       .wrap #contatoWrap .container .contact li address span a:hover {
        text-decoration: none;
       }
    </style>
<script type="text/javascript">

</script>
@stop
@section('content')


<div id="contatoWrap">
<div class="container hvr-border-fade">

        <ul class="contact">
        <li>
        <address itemscope="http://schema.org.Organization">
            <p itemprop="name" class="title">#Shows / Management</p>
            <p itemprop="name" class="txt">Acau   Produtora Ltda</p>
            <span itemprop="telephone"><a href="tel:212125230094">+5521 2523-0094</a> / <a href="tel:212125216499">+5521 2521-6499 </a></span>
        </address>

            </li>
        <li><br><br>

        <address itemscope="http://schema.org.Organization">
            <p itemprop="name" class="title">#Imprensa / Press</p>
            <p itemprop="name" class="txt">Mattoso Vinicius Produ    es Artisticas</p>

            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <span itemprop="streetAddress"> Rua: Visconde de Piraja, 414 sala 512 - Ipanema     RJ</span>
                <span itemprop="addressLocality">RJ, Brasil</span>
            </div>
            <span itemprop="telephone"><a href="tel:212125231553">+5521 2523.1553</a> / <a href="tel:212125230676">+5521 2523.0676</a></span>
        </address>
            </li>

        </ul>
    </div>
</div>

@stop

@section('script-js')

@stop
