<html><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title> - SlideAnimate demo</title>

   <script src="{{ URL::asset('http://code.jquery.com/jquery-1.8.3.js') }}"></script>

<!--    <script src="{{ URL::asset('css/normalize.css') }}"></script>  -->

<style type="text/css">
    #slideout {
    background: #666;
    position: absolute;
    width: 300px;
    height: 80px;
    top: 50%;
    left:-280px;
}
    
.clickme {
   cursor: pointer;
    float: left;
    height: 20px;
    width: 20px;
    background: #ff0000; margin:50px 500px 0 0;
}

#slidecontent {
    float:left;
}

  </style>


<script type="text/javascript">

$(function () {
    $(".clickme").toggle(function () {
        $("#slideout").animate({left:'0px'}, {queue: true, duration: 500});
    }, function () {
        $("#slideout").animate({left:'-280px'}, {queue: false, duration: 500});
    });
});


</script>


</head>
<body>
  <div id="slideout" style="left:-280px;">
    <div id="slidecontent">
        Yar, there be dragonns herre!
    </div>
</div>
<div class="clickme">
        &nbsp;
    </div>
  





</body>
</html>