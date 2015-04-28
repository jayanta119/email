
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>  var u = "";
 var text = "";
 
 </script>

<script src="http://www.swipe-kart.com/slide/web/slide/5001/joson.php"></script>

<script>$.fn.greenify = function(uu) {
this.css( "color", "green" );
alert(uu);
return this;
}</script>

<script>

$(document).ready(function(){
var x="",i=0;

     for (var i = 0; i < 800; i++)
      {
  
     var horoscope =u['spell'][i]['E-mail Address'];
 x+=horoscope+"</br>";
/*  
document.getElementById("myselect1").innerHTML=x+"<br>"; */
 $("#myselect1").greenify(horoscope).html(x);     
      }  


});





</script>
</head>
<body>

<button>Hide</button>
<p id="myselect1"></p>

</body>
</html>