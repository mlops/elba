
<script type="text/javascript">
</script>
<style>

.erro-container {
  width: 100%;
  text-align: center;
  position: relative;
  left: 0;
  right: 0;
  z-index:auto;
}
.erro-msg-box {
    position: relative;
    background-color: red;
    text-align: center;
    width: 300px;
    padding:20px;
    border-radius: 5px;
    margin: -119px auto 100px auto;
    text-align: center;
    vertical-align: middle;
    text-transform: uppercase;
    font-family: "bebas_neue_regular"; 
}


</style>




<div class="erro-container">
   <img src="{{ URL::to(Config::get('caminho.server_public').'/images/erro-{{ $error }}.jpg') }}">
</div>
<div class="erro-msg-box">
Erro Numero:  {{ $error }}
</div>

{{-- <div class="x3">
<img src="../images/erro-404.jpg" alt="">
</div>
<div class='x4'>Erro Numero:  {{ $error }}</div> --}}

{{--   <div class="isa_error">
     <i class="fa fa-times-circle"></i>
     Replace this text with your own text.

  </div> --}}

{{--   <div class="isa_warning">
       <i class="fa fa-warning"></i>
       Replace this text with your own text.
  </div> --}}


  {{-- <div class="isa_success">
       <i class="fa fa-check"></i>
       Replace this text with your own text.
  </div> --}}
 {{--  <div class="isa_info">
      <i class="fa fa-info-circle"></i>
      Replace this text with your own text.
  </div> --}}
