
&#60;!doctype html> 
&#60;html lang="it">

&#60;head>
&#60;meta charset="utf-8">
&#60;meta name="generator" content="AlterVista - Editor HTML"/>

&#60;title> FRAME_v0a.php &#60;/title>

&#60;link rel="icon" type="image/png" href="https://it.altervista.org/images/favicon/favicon-16x16.png" sizes="16x16">
&#60;link rel="preconnect" href="https://fonts.gstatic.com">
&#60;link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
&#60;link rel="preconnect" href="https://fonts.googleapis.com">
&#60;link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
&#60;link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
&#60;link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

&#60;script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous">&#60;/script>
&#60;script src="https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.5/platform.min.js">&#60;/script>


&#60;style>
html * {background-color:black;}
html * {color:orange;}
html * {font-family:"PT Mono",monospace;}
body{margin: 2.5rem 5rem 2.5rem 5rem; }
&#60;/style>

&#60;style>

                                            .toggsi{position:fixed;bottom:0rem;left:0rem    ;
border-top:     solid 2.5rem green       ; 
border-right:   solid 2.5rem green       ; 
border-bottom:  solid 2.5rem transparent ; 
border-left:    solid 2.5rem transparent ; } .toggno{position:fixed;bottom:0rem;left:0rem ;
border-top:     solid 2.5rem transparent ; 
border-right:   solid 2.5rem transparent ; 
border-bottom:  solid 2.5rem orange      ; 
border-left:    solid 2.5rem orange      ; }

.tog0menu{ display: none; }

&#60;/style>


&#60;style>
.cursore {
background: lime;
line-height: 17px;
margin-left: 3px;
-webkit-animation: blink 0.8s infinite;
width: 7px;
height: 15px;
}
@-webkit-keyframes blink {
0% {background: #222}
50% {background: lime}
100% {background: #222}
}
&#60;/style>




&#60;style>

img{  
  display: block;
  max-width:100%;
  max-height:100%;
  width: auto;
  height: auto;
}

&#60;/style>



&#60;!--
&#60;button onclick="copyToClipboard('#commento')">Copy TEXT &#60;/button>
-->

&#60;script>
/*
How to copy TEXT to Clipboard on Button-Click
A Pen By Shaik Maqsood

https://codepen.io/shaikmaqsood/pen/XmydxJ
*/

function copyToClipboard(element) {
var $temp = $("&#60;input>");
$("body").append($temp);
$temp.val($(element).text()).select();
document.execCommand("copy");
$temp.remove();
}
&#60;/script> 


&#60;script>
DESKTOP=-1;
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{ //  MOBILE  MOBILE  MOBILE  MOBILE  MOBILE  MOBILE

var DESKTOP = 0 ; 
//alert("TABLET");
} 
else
{ // DESKTOP  DESKTOP DESKTOP DESKTOP  DESKTOP DESKTOP

var DESKTOP = 1 ;
//alert("DESKTOP");
}
//alert(DESKTOP);
&#60;/script>

&#60;/head>
&#60;body> 
&#60;header>&#60;/header>
&#60;main> 

&#60;/main>

&#60;section>
&#60;blockquote class="tog0menu animate__animated animate__backInDown"  style="height: 10rem; border: solid 0.05rem orange; ">
... annotazioni ...
&#60;/blockquote>
&#60;article style="position:relative;">
&#60;div style="position:absolute;top:0rem;left:0rem;"              id ="toggle1menu" class ="tog1menu" onclick="menusimenu()">&#60;span class="toggsi">&#60;/span>&#60;/div>
&#60;div style="position:absolute;top:0rem;left:0rem;display:none;" id ="toggle2menu" class ="tog2menu" onclick="menunomenu()">&#60;span class="toggno">&#60;/span>&#60;/div>
&#60;/article>
&#60;/section>

&#60;script>
menusimenu =()=> {document.querySelector(".tog0menu").style.display="block";document.querySelector(".tog1menu").style.display="none"; document.querySelector(".tog2menu").style.display="block"; }
menunomenu =()=> {document.querySelector(".tog0menu").style.display="none" ;document.querySelector(".tog1menu").style.display="block"; document.querySelector(".tog2menu").style.display="none" ; }
&#60;/script>
&#60;footer>&#60;/footer>
&#60;/body>
&#60;/html>

