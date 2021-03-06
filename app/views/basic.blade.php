<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>SoundManager 2 Demo: Play MP3 links on a page, "page as playlist" style</title>

<style type="text/css">

/* 

 -------------------------------------------------------------

 In-page demo CSS - see external CSS for actual relevant stuff.

 --------------------------------------------------------------

 */

#soundmanager-debug {
 /* SM2 debug container (optional, makes debug more useable) */
 position:absolute;position:fixed;*position:absolute;bottom:10px;right:10px;width:50em;height:18em;overflow:auto;background:#fff;margin:1em;padding:1em;border:1px solid #999;font-family:"lucida console",verdana,tahoma,"sans serif";font-size:x-small;line-height:1.5em;opacity:0.9;filter:alpha(opacity=90);z-index:99;
}

body {
 font:75% normal verdana,arial,tahoma,"sans serif";
}
</style>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ URL::asset("//code.jquery.com/jquery-1.11.2.min.js") }}"><\/script>')</script>

<link rel=stylesheet href="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/css/page-player.css">
<!-- soundManager.useFlashBlock: related CSS -->
<link rel=stylesheet href="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/flashblock/flashblock.css">
<script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/script/soundmanager2.js"></script>
<script type="text/javascript" src="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/script/page-player.js"></script>


<script type="text/javascript">

soundManager.setup({
  // disable or enable debug output 
  debugMode: true, 
  // // use HTML5 audio for MP3/MP4, if available 
  preferFlash: false, 
  useFlashBlock: true, 


  url: '../js/sound/swf',
  html5PollingInterval: 50

});

// demo only..
function setTheme(sTheme) {
  var o = document.getElementsByTagName('ul')[0];
  o.className = 'playlist'+(sTheme?' '+sTheme:'');
  return false;



}
</script>
</head>

<body>

<div>

 <h1><a href="http://www.schillmania.com/projects/soundmanager2/" title="Play a page of mp3s with javascript via SoundManager 2">SoundManager 2</a> / page as a playlist, basic template</h1>

 <div id="sm2-container">
  <!-- SM2 flash movie goes here -->
 </div>

 <ul class="playlist">

  <li title="Olhando O cora    o"><a href="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/_mp3/01_olhando_o_coracao.mp3" type="audio/mp3">Olhando o Cora    o</a></li>
  <li><a href="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/_mp3/02_faze_o_que.mp3" type="audio/mp3">FAzer o Que</a></li>
  <li><a href="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/_mp3/03_so_pra_lembrar.mp3" type="audio/mp3">So Pra Lembrar</a></li>
  <li><a href="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/_mp3/04_e_o_que_me_interessa.mp3" type="audio/mp3">E o que Me Interessa</a></li>
  <li><a href="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/_mp3/05_nossa_senhora_da_paz.mp3"  type="audio/mp3">Nsra da Paz</a></li>


  <li><a href="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/_mp3/06_contrato_de_separacao.mp3" type="audio/mp3">Contrato de Separa    o</a></li>
  <li><a href="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/_mp3/07_nos_ares_de_lisboa.mp3" type="audio/mp3">Nos Ares de Lisboa</a></li>
  <li><a href="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/_mp3/08_arvore.mp3" type="audio/mp3">Arvore</a></li>
  <li><a href="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/_mp3/09_patchuli.mp3" type="audio/mp3">Patchuli</a></li>
  <li><a href="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/_mp3/10_la_noyee.mp3" type="audio/mp3">La Noyee</a></li>
  <li><a href="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/_mp3/11_risoflora.mp3" type="audio/mp3">Risoflora</a></li>
  <li><a href="{{ URL::to(Config::get('caminho.server_public').'') }}/sd/_mp3/12_ser_livre.mp3" type="audio/mp3">Ser Livre</a></li>
 </ul>

</body>

<script>
 $(document).ready(function(){
 //  $('.playlist > li').click(function() {
 //   var songId = $(this).attr("title");
 //  //var songId = $(this).attr('href');

 //  var songURL = "/public/sd/_mp3/" + songId;

 //   soundManager.createSound({
 //    id: songId,
 //    url: songURL,
 //    onfinish: function() {

 //      soundManager.play(songId);
     
 //      alert(this.songId+' finishedssss'); // will give the ID of the current sound
 //      // soundManager.play(...) next call, whatever


 //      }
 // })
 //  })
 });


 // var demo2Sound = soundManager.createSound({
 //  url: '../mpc/audio/CHINA_1.mp3',
 //  onfinish: function() {
 //    soundManager._writeDebug(this.id + ' finished playing');
 //  }
 // });
 // demo2Sound.play({
 //   volume: 50
 // });
</script>
</html>
