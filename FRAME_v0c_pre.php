&#60;!doctype html> 
&#60;html lang="it">



&#60;script>

//  20:22:12:03:::10:13 


document.write(``);

document.write(``
+ `&#60;head>`
+ `&#60;meta charset="utf-8">`
+ `&#60;meta name="generator" content="AlterVista - Editor HTML">`
+ `&#60;title> $ FRAME_v0c.php &#60;/title>`
+ ``
+ `&#60;link rel="icon" type="image/png" href="https://it.altervista.org/images/favicon/favicon-16x16.png" sizes="16x16">`
+ `&#60;link rel="preconnect" href="https://fonts.gstatic.com">`
+ `&#60;link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">`
+ `&#60;link rel="preconnect" href="https://fonts.googleapis.com">`
+ `&#60;link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>`
+ `&#60;link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">`
+ `&#60;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" >`

+ ``

);
&#60;/script>


&#60;script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous">&#60;/script>
&#60;script src="https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.5/platform.min.js">&#60;/script>


&#60;script>


// **********************
// configurazione globale
// 20:22:12:03:::10:13
// **********************

// detect device
DESKTOP=-1;

if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{ //  MOBILE  
var DESKTOP = 0 ; 
settaggio_font_size="html * {font-size: 2.5rem;}";
settaggio_id_APPUNTI=`&#60;style> #APPUNTI{font-size: 4.5rem; overflow: auto; } &#60;/style>`;

} 
else
{ // DESKTOP 
var DESKTOP = 1 ;
settaggio_font_size="html * {font-size: 1rem;}";
settaggio_id_APPUNTI=`&#60;style> #APPUNTI{ font-size: 1.50rem;  overflow: auto; }&#60;/style>`;

}


if(DESKTOP == -1){  settaggio_font_size=" html * {font-size: 0.75rem;} "; settaggio_id_APPUNTI=`&#60;style> #APPUNTI{font-size: 1.5rem; overflow: auto; } &#60;/style>`; }


// settaggi colori *
background_colore_base="background-color: rgba(250,226,253, 1.00);";
color_colore_base=     "color:            rgba(6,  30,   3, 1.00);";



// settaggi body
body_margine_top=    2.5;
body_margine_right=  5;
body_margine_bottom= 2.5;
body_margine_left=   5;




// settaggi toggle
correzione_x_toggosi_toggono=2.5;

// responsive
if(DESKTOP==1){ correzione_x_toggosi_toggono=3.75; }else{ }






dime_toggsi_toggno= (body_margine_right - correzione_x_toggosi_toggono);
color_tog0menu_ok="rgba(23,82,0, 0.50);";
color_tog0menu_ko="rgba(252,78,5,0.50);";


// FISSARE WIDTH LENGTH APPUNTI 
//  
// misura_larghezza
// viene determinata senza detect WH
// invece un detect device utile per
// selezionare adeguato valore
// ||
// ||
// ||
// ||
// \/

if (DESKTOP==0) {misura_larghezza=70;}else{}
if (DESKTOP==1) {misura_larghezza=40;}else{}
if (DESKTOP==-1){misura_larghezza=40;}else{}
// ||
// ||
// ||
// ||
// \/

misura_larghezza_tog0menu = ( -body_margine_left + misura_larghezza -body_margine_right );
semi_misura_larghezza_tog0menu = misura_larghezza_tog0menu * 0.50 ;




// settaggi riquadro article id="APPUNTI" interno a section class tog0menu
dime_percent_appunti_width= 100; // percento
dime_percent_appunti_height=100; // percento
bordo_appunti=" border: solid 0.05rem rgba(2,53,72,1.00); ";


// sistemazione delle variabili
document.write(``
+`&#60;style>`
+`html * { `+background_colore_base+` }`
+`html * { `+color_colore_base+` }`
+ settaggio_font_size
+`html * {font-family:"PT Mono",monospace;}`
+`body{ margin: `+body_margine_top+`rem  `+body_margine_right+`rem  `+body_margine_bottom+`rem  `+body_margine_left+`rem ; }`
+`body{ overflow: auto; }`
+``
+`&#60;/style>`
+``
+`&#60;style>`
+``
+`                                                                .toggsi{position:fixed;bottom:0rem;left:0rem ; cursor: pointer; `
+`border-top:     solid `+dime_toggsi_toggno+`rem `+color_tog0menu_ok+`       ; `
+`border-right:   solid `+dime_toggsi_toggno+`rem `+color_tog0menu_ok+`       ; `
+`border-bottom:  solid `+dime_toggsi_toggno+`rem transparent ; `
+`border-left:    solid `+dime_toggsi_toggno+`rem transparent ; } .toggno{position:fixed;bottom:0rem;left:0rem ; cursor: pointer; `
+`border-top:     solid `+dime_toggsi_toggno+`rem transparent ; `
+`border-right:   solid `+dime_toggsi_toggno+`rem transparent ; `
+`border-bottom:  solid `+dime_toggsi_toggno+`rem `+color_tog0menu_ko+`      ; `
+`border-left:    solid `+dime_toggsi_toggno+`rem `+color_tog0menu_ko+`      ; }`
+``
// +`.tog0menu{ position: fixed; top: 0rem; left: `+body_margine_left+`rem;  width: `+misura_larghezza_tog0menu+`rem; display: none; }`
//   ||
//   ||
//   ||
//   ||
//   \/
// +`.tog0menu{ position: fixed; top: 0rem; left: `+`50.00`+`%; margin-left: `+( -semi_misura_larghezza_tog0menu )+`rem;  width: `+misura_larghezza_tog0menu+`rem; display: none; }`
+`.tog0menu{ position: fixed; top: 0rem; left: `+`50.00`+`%; margin-left: `+( -semi_misura_larghezza_tog0menu )+`rem;  width: `+misura_larghezza_tog0menu+`rem; `+` height: 50%; `+`rem; display: none; }`

+``
+``
+`article#APPUNTI{ width: `+dime_percent_appunti_width+`%; height: `+dime_percent_appunti_height+`%; `+bordo_appunti+` border-radius: 0.5rem; }`
+``
+``
+`&#60;/style>`
+``
+`&#60;section>`
+`&#60;article style="position:relative;">`
+`&#60;div style="position:absolute;top:0rem;left:0rem;"              id ="toggle1menu" class ="tog1menu" onclick="menusimenu()">&#60;span class="toggsi">&#60;/span>&#60;/div>`
+`&#60;div style="position:absolute;top:0rem;left:0rem;display:none;" id ="toggle2menu" class ="tog2menu" onclick="menunomenu()">&#60;span class="toggno">&#60;/span>&#60;/div>`
+`&#60;/article>`
+`&#60;/section>`
+``
+``
+``
+``

+``
+``);



document.write(``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``

+ ``
);



&#60;/script>


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


&#60;/head>
&#60;body> 



&#60;header>&#60;/header>



&#60;main> 
&#60;? include("loremipsum.php"); ?>

&#60;/main>

&#60;!-- -->

&#60;section class="tog0menu animate__animated animate__backInDown" >
&#60;script> document.write(``
+``
+ settaggio_id_APPUNTI
+`&#60;article id="APPUNTI" >`
+``
+`&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>&#60;br>`
+``
+``
+``
+``
+` ... appunti ... 20:22:12:03:::10:13  `
+`&#60;hr>`
+``
+``
+``
+``
+``
+``
+``
+``
+`&#60;/article>`
+``
+``

); 



&#60;/script>

&#60;/section>

&#60;script>
menusimenu =()=> {document.querySelector(".tog0menu").style.display="block";document.querySelector(".tog1menu").style.display="none"; document.querySelector(".tog2menu").style.display="block"; }
menunomenu =()=> {document.querySelector(".tog0menu").style.display="none" ;document.querySelector(".tog1menu").style.display="block"; document.querySelector(".tog2menu").style.display="none" ; }
&#60;/script>



&#60;footer>&#60;/footer>








&#60;script>
/*
  Questa parte di codice va lasciata qui
  in fondo al programma
*/



function displayWindowSize(){ 
// var w = document.documentElement.clientWidth;
// var h = document.documentElement.clientHeight;

var wFinestraWIDTH =  window.innerWidth;
var hFinestraHEIGHT = window.innerHeight;

			document.getElementById("WHREM").innerHTML = " " 
			+ wFinestraWIDTH 
			+ "x" 
			+ hFinestraHEIGHT 
			+" &#60;span style=`font-size:medium;`>"
			+(wFinestraWIDTH/16)+"rem "
			+" x "
			+(hFinestraHEIGHT/16)
			+"rem &#60;/span>";

LARGHEZZA_INNER = (wFinestraWIDTH/16) ;

document.getElementById("LARGHEZZA_INNER").innerHTML=''
+''
+''
+'' + LARGHEZZA_INNER
+''
+''
;

}
window.addEventListener("resize", displayWindowSize);displayWindowSize();
&#60;/script>




&#60;script>
// di riserva
document.write(``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ ``
+ `&#60;div> test 20:22:12:03:::10:13 &#60;/div> `

+ ``
);

&#60;/script>

&#60;/body>
&#60;/html>
