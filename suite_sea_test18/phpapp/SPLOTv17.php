<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title>
  
  
  
% 17 SPLOT_v15_23920_0830a
  
  </title>
  
  <style>
  html * {font-size:1.75rem; font-family:monospace;
  
  inline-size: auto;
    overflow-wrap: break-word;
    
    border:solid 0.00rem gray;



 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */



  
  }
  
  body{width:75%;border:solid 0.00rem gray; overflow:auto;}
  </style>
  
<!--  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js" integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
<script src="aes.js"></script>


<!--
 1   function STOP_SPLOT()
 2   function DisplayPlainTextRolling()
 3   function RengDot_Splot_v14__()
 4   function LeggiRengDot_Splot_v14__()
 5   function INPUT_DINAMICO_LotX()
 6   function READ_INPUT_DINAMICO_LotX()
 7   function LettureDinamica()
 8   function FUNZIONE()
 9   function STOP_SPLOT() disattivato



-->








</head>
<body>

<main>

<div STYLE="POSITION:FIXED; TOP:0REM; RIGHT:0REM; WIDTH:100%; BACKGROUND-COLOR:WHITE; COLOR:BLACK;">SPLOT_v15_23920_0830a <a href="index.html">INDEX</a> <a href="#">&#5123;</a><a href="#fine">&#5121;</a> 
<span STYLE="FLOAT:RIGHT;" >
<button id="GO_SPLOT" onclick="GO_SPLOT()">GO&nbsp;&nbsp;</button>
<button id="STOP_SPLOT" onclick="STOP_SPLOT()">STOP</button>
</span>
</div>
<script>

function STOP_SPLOT(){
clearInterval(AVVIATO_SI_FUNZIONE);
clearInterval(AVVIATO_SI_LETTURA_DINAMICA);	
clearInterval(AVVIATO_LeggiRengDot_Splot_v14__);	
clearInterval(AVVIATO_DisplayPlainTextRolling);	
clearInterval(AVVIATO_RengDot_Splot_v14__);

}

function GO_SPLOT(){
currentUrl_SPLOT = window.location.href;
// alert(currentUrl_SPLOT);
	
window.location.replace("SPLOTv15.php");	
	
}


</script>



<!-- si converte var php in var js --> 
<?php include("X__.php"); ?> 
<script> ControlloLotX__ = <?php echo json_encode($X__); ?>; </script> 

<script> 
// alert("ControlloLotX__= "+ControlloLotX__); </script>


<? include("Lot.php"); ?>
<script> LotX__ = <?php echo json_encode($Lot); ?>; </script> 


<!-- input value -->
<div id="ECCO_LotX"></div>
<div id="READ_INPUT_DINAMICO_LotX"></div>






<details id="DETAILS_ID_DISPLAY_ONLY_PLAIN_WORDS"><summary id="SUMMARY_ID_DISPLAY_ONLY_PLAIN_WORDS">display plainwords</summary>
<!--
<div id="ID_DISPLAY_ONLY_PLAIN_WORDS">waiting for ID_DISPLAY_ONLY_PLAIN_WORDS</div>


-->
<div id="ID_DISPLAY_ONLY_PLAIN_WORDS">waiting for ID_DISPLAY_ONLY_PLAIN_WORDS</div>

</details>





<!-- -->
<div id="ID_DISPLAY_ONLY_PLAIN_TEXT">ID_DISPLAY_ONLY_PLAIN_TEXT</div>



<script>
function DisplayPlainTextRolling(){
PLAIN_TEXT_ROLLING=document.getElementById("ID_DISPLAY_ONLY_PLAIN_WORDS").textContent;
document.getElementById("ID_DISPLAY_ONLY_PLAIN_TEXT").innerHTML=PLAIN_TEXT_ROLLING;
}; // setInterval(DisplayPlainTextRolling);

AVVIATO_DisplayPlainTextRolling=setInterval(DisplayPlainTextRolling);

</script>


<!-- rolling_dot_in_splot -->
<!-- <div id="HELLO_SPLOT"> 《 ������ HELLO_SPLOT ������ 》 </div> -->
<!-- <div id="HELLO_SPLOT"> 《 ������ HELLO_SPLOT ������ 》 </div> -->


<div id="HELLO_SPLOT"> 《 &#127804; HELLO_SPLOT &#127803; 》 </div>


<!-- ?php include("./phpapp/rolling_dot_in_splot.php"); ? --> 
<!-- rolling_dot_in_splot -->

<span STYLE="position:fixed; top:2.5rem; left:0rem; width:auto; background-color:transparent; text-align:right; border:solid 0.00rem lime; ">
<span ID="LEGGI_DINA_INPUT_SPLOT_v14__"></span> <!-- modello rolling dot  --> 
<span id="ATTIVA_STILI_SPLOT_v14__"></span> <!-- passaggio di style  --> 
</span>

 
<script> 
 
function RengDot_Splot_v14__(){ 
  ValoreInizialeRange_Splot_v14__=25; 
  ValoreInizialeRange_Splot_v14__=25*0.5;
  ProprietaInput_Splot_v14__=`id="RANGER_Splot_v14__" type="range" value="`+ValoreInizialeRange_Splot_v14__+`" step="1" min="0" max="99"  class="centrato___" style=" margin-left:0%;  margin-right:0%;  width:50%; width:100%; border:solid 0.00rem yellow;"`; 
  document.getElementById("LEGGI_DINA_INPUT_SPLOT_v14__").innerHTML=`<input ${ProprietaInput_Splot_v14__}  >   `; 
}; 
// RengDot_Splot_v14__(); 
AVVIATO_RengDot_Splot_v14__=RengDot_Splot_v14__(); 

 
 
function LeggiRengDot_Splot_v14__(){ 
  LetturaRange_Splot_v14__=document.getElementById("RANGER_Splot_v14__").value; 
 
  FonteDinamica_Splot_v14__=(LetturaRange_Splot_v14__*0.075).toFixed(2); 

// trasferisce il valore del font tramite style a textarea 
  document.getElementById("ATTIVA_STILI_SPLOT_v14__").innerHTML=
  '<style></style>'
  +'<style>#ID_DISPLAY_ONLY_PLAIN_WORDS{font-size:'+FonteDinamica_Splot_v14__+'rem;}'+'</style>'
  +'<style>#ID_DISPLAY_ONLY_PLAIN_TEXT{font-size:'+FonteDinamica_Splot_v14__+'rem;}'+'</style>'

  +' <style></style>'
  +'<style>#HELLO_SPLOT{font-size:'+FonteDinamica_Splot_v14__+'rem;}'+'</style>'
  ; 
 
 
 
};  // setInterval(LeggiRengDot_Splot_v14__,1); 
 
// 
AVVIATO_LeggiRengDot_Splot_v14__=setInterval(LeggiRengDot_Splot_v14__,1); 

</script> 
 









<!-- -->
<details id="DETAILS_VISUALIZZA_TROVATO_ALFA__"><summary id="SUMMARY_VISUALIZZA_TROVATO_ALFA__">the file</summary>
<div id="VISUALIZZA_TROVATO_ALFA__"></div>
</details>
<script>
// htm_wippy.txt

// CercaALFA="htm_wippy.txt";

// 

CercaALFA="htm_wippy.txt"+"?"+Math.random();

// alert("CercaALFA= "+CercaALFA);

//
TrovaALFA=new XMLHttpRequest();

TrovaALFA.open("GET",CercaALFA,false);

TrovaALFA.onreadystatechange=function(){
	
	TROVATO_ALFA__= TrovaALFA.responseText;
	
	
	document.getElementById("VISUALIZZA_TROVATO_ALFA__").innerHTML=TROVATO_ALFA__;
	
	
}; TrovaALFA.send();


</script>











<!--
<div id="ECCO_LotX"></div>


<div id="READ_INPUT_DINAMICO_LotX"></div>

-->
<script>

function INPUT_DINAMICO_LotX(){

document.getElementById("ECCO_LotX").innerHTML=
`
<input id="INPUT_DINAMICO_LotX" type="password">

`; 
	

}; INPUT_DINAMICO_LotX();


function READ_INPUT_DINAMICO_LotX(){
// prende il valore da INPUT_DINAMICO_LotX
ValoreLotX=document.getElementById("INPUT_DINAMICO_LotX").value;

// si deposita il valore in READ_INPUT_DINAMICO_LotX
document.getElementById("READ_INPUT_DINAMICO_LotX").innerHTML=ValoreLotX;
	
}; setInterval(READ_INPUT_DINAMICO_LotX);

</script>




<details><summary></summary>
<div id="LETTO_ID_RESTORE_SPLIT_PLAIN_WORDS">Loading... LETTO_ID_RESTORE_SPLIT_PLAIN_WORDS</div>
</details>

<div id="ID_RESTORE_SPLIT_PLAIN_WORDS">Loading... ID_RESTORE_SPLIT_PLAIN_WORDS</div>



<script>

//function EFFETTUARE_LETTURA_LOTX(){
// questa deve essere una funzione
// dinamica

let EffettuataLetturaLotx;


function LettureDinamica(){
	

function FUNZIONE(){	
EffettuataLetturaLotx=document.getElementById("READ_INPUT_DINAMICO_LotX").textContent;

document.getElementById("LETTO_ID_RESTORE_SPLIT_PLAIN_WORDS").innerHTML=EffettuataLetturaLotx;
return EffettuataLetturaLotx;

}; AVVIATO_SI_FUNZIONE=setInterval(FUNZIONE);

EffettuataLetturaLotx=FUNZIONE();


if(EffettuataLetturaLotx===LotX__){

document.getElementById("ID_RESTORE_SPLIT_PLAIN_WORDS").innerHTML=
`
<details><summary></summary>
<div id="ID_RESTORE_SPLIT_WORDS">Loading... ID_RESTORE_SPLIT_WORDS</div>


<div id="ID_RESTORE_PLAIN_WORDS">Loading... ID_RESTORE_PLAIN_WORDS</div>

</details>

`;



ALFA = document.getElementById("VISUALIZZA_TROVATO_ALFA__").textContent;






SEPA='U2FsdGVkX1';

/*
    ALFA = '01234567890123456789';
    SEPA='0';
*/

    SPLITWORDS = ALFA.split(SEPA);
	
	LENGTH_SPLITWORDS__ = SPLITWORDS.length;
	
    RESTORE_SPLIT_WORDS=[""];

 //   for(n=1; n<LENGTH_SPLITWORDS__; n++){
 
  for(n=0; n<LENGTH_SPLITWORDS__; n++){
		
    RESTORE_SPLIT_WORDS[n]=SEPA+SPLITWORDS[n];
    
};

document.getElementById("ID_RESTORE_SPLIT_WORDS").innerHTML=
RESTORE_SPLIT_WORDS;

// alert(RESTORE_SPLIT_WORDS[1]);
// alert(RESTORE_SPLIT_WORDS.length);


PASSWORD__=ControlloLotX__; 

DEC_RESTORE_SPLIT_WORDS=[""];

PLAINTEXT=[""];

for(n=0; n<RESTORE_SPLIT_WORDS.length; n++){

//alert(RESTORE_SPLIT_WORDS[n]);

cifrato=RESTORE_SPLIT_WORDS[n];

// alert(cifrato);

decifrato = CryptoJS.AES.decrypt(cifrato.toString(), PASSWORD__);

// alert(decifrato)

plaintext = decifrato.toString(CryptoJS.enc.Utf8);

// alert(plaintext)


PLAINTEXT[n]=plaintext;

	
     };
	 
	 
RISULTATO=[""];	 
	 
    
     
for(n=1;n<(PLAINTEXT.length); n++){

RISULTATO[n]=PLAINTEXT[n].trim()+" ";

}	 
	 
     
     
     


// TextIs = RISULTATO[1]+RISULTATO[2]+RISULTATO[3]+RISULTATO[4]+RISULTATO[5];

 TextIs="";
 
 /*
for(conta=1;conta<6;conta++)
{  TextIs =  TextIs + RISULTATO[conta].toString();}

*/



for(conta=1;conta<RISULTATO.length;conta++)
{  TextIs =  TextIs + RISULTATO[conta].toString();}







//alert( TextIs );

//TextIs = "cosa succede";
	 
	 
	 
    
document.getElementById("ID_RESTORE_PLAIN_WORDS").innerHTML=

PLAINTEXT +"<br>"+
"0= "+PLAINTEXT[0]+"<br>"+
"1= "+PLAINTEXT[1]+"<br>"+
"2= "+PLAINTEXT[2]+"<br>"+
"3= "+PLAINTEXT[3]+"<br>"+
"4= "+PLAINTEXT[4]+"<br>"+
"5= "+PLAINTEXT[5]+"<br>"+
"6= "+PLAINTEXT[6]+"<br>"+

"<br>"+
"<hr>"+
"length array PLAINTEXT= "+PLAINTEXT.length+"<br>"+
"<br>"+"<br>"+

RISULTATO
+"<br>"
+"length array RISULTATO= "+RISULTATO.length+"<br>"

+"<br>"
+"RISULTATO[0]= "+RISULTATO[0]+"<br>"

+"RISULTATO[1]= "+RISULTATO[1]+"<br>"
+"RISULTATO[2]= "+RISULTATO[2]+"<br>"
+"RISULTATO[3]= "+RISULTATO[3]+"<br>"
+"RISULTATO[4]= "+RISULTATO[4]+"<br>"
+"RISULTATO[5]= "+RISULTATO[5]+"<br>"


+"RISULTATO[6]= "+RISULTATO[6]+"<br>"

+"<br>"+"<br>"
+"<div style='background-color:black; color:orange;'>"
+TextIs
+"</div>"
+"<br>"+"<br>"

;



document.getElementById("ID_DISPLAY_ONLY_PLAIN_WORDS").innerHTML=""
+"<div style='background-color:black; color:orange;'>"
+TextIs
+"</div>"
;



} 
else
{
	// alert("EffettuataLetturaLotx= "+EffettuataLetturaLotx+ " "+"LotX__= "+LotX__);
}
; // questo is if then



}; AVVIATO_SI_LETTURA_DINAMICA=setInterval(LettureDinamica,250); // inserito 250 per evitare flicker






</script>


<!-- -->
<div>SPLOT_v15_23920_0830a   <button id="STOP_SPLOT_END" onclick="STOP_SPLOT()">STOP</button></div>
<script>

function STOP_SPLOT(){
clearInterval(AVVIATO_SI_FUNZIONE);
clearInterval(AVVIATO_SI_LETTURA_DINAMICA);	
clearInterval(AVVIATO_LeggiRengDot_Splot_v14__);	
clearInterval(AVVIATO_DisplayPlainTextRolling);	
clearInterval(AVVIATO_RengDot_Splot_v14__);

}


</script>





<div id="fine" style="text-align:center;"><a href="index.html">INDEX</a></div>


<style>


#GO_SPLOT{  background-color:green; color:white; border-radius:0.50rem;}
#STOP_SPLOT{background-color:red;   color:white; border-radius:0.50rem;}
#GO_SPLOT:hover{cursor:pointer; background-color:white; color:green; border:solid 0.15rem green; }
#STOP_SPLOT:hover{cursor:pointer; background-color:white; color:red; border:solid 0.15rem red; }


#INPUT_DINAMICO_LotX{ border:solid 0.50rem teal; border-radius:0.50rem; }

#READ_INPUT_DINAMICO_LotX{ display:none; border:solid 0.50rem red;  }
#LETTO_ID_RESTORE_SPLIT_PLAIN_WORDS{ display:none; border:dashed 0.25rem orange;  }
#DETAILS_VISUALIZZA_TROVATO_ALFA__{background-color:white; color:olive;}
#DETAILS_VISUALIZZA_TROVATO_ALFA__:hover{cursor:pointer;}
#SUMMARY_VISUALIZZA_TROVATO_ALFA__{color:teal;}
#SUMMARY_VISUALIZZA_TROVATO_ALFA__:hover{cursor:pointer;}



#DETAILS_ID_DISPLAY_ONLY_PLAIN_WORDS{}
#DETAILS_ID_DISPLAY_ONLY_PLAIN_WORDS:hover{cursor:pointer;}
#SUMMARY_ID_DISPLAY_ONLY_PLAIN_WORDS{background-color:white;color:green;}
#SUMMARY_ID_DISPLAY_ONLY_PLAIN_WORDS:hover{cursor:pointer;}


#ID_DISPLAY_ONLY_PLAIN_WORDS{}
#LEGGI_DINA_INPUT_SPLOT_v14__{  background-color:transparent; border-width:0rem; }
#LEGGI_DINA_INPUT_SPLOT_v14__{}
#ATTIVA_STILI_SPLOT_v14__{ background-color:transparent; border-width:0rem;}   



</style>



</main>




























<script>
/*
CryptoJS v3.1.2
code.google.com/p/crypto-js
(c) 2009-2013 by Jeff Mott. All rights reserved.
code.google.com/p/crypto-js/wiki/License
*/
var CryptoJS=CryptoJS||function(u,p){var d={},l=d.lib={},s=function(){},t=l.Base={extend:function(a){s.prototype=this;var c=new s;a&&c.mixIn(a);c.hasOwnProperty("init")||(c.init=function(){c.$super.init.apply(this,arguments)});c.init.prototype=c;c.$super=this;return c},create:function(){var a=this.extend();a.init.apply(a,arguments);return a},init:function(){},mixIn:function(a){for(var c in a)a.hasOwnProperty(c)&&(this[c]=a[c]);a.hasOwnProperty("toString")&&(this.toString=a.toString)},clone:function(){return this.init.prototype.extend(this)}},
r=l.WordArray=t.extend({init:function(a,c){a=this.words=a||[];this.sigBytes=c!=p?c:4*a.length},toString:function(a){return(a||v).stringify(this)},concat:function(a){var c=this.words,e=a.words,j=this.sigBytes;a=a.sigBytes;this.clamp();if(j%4)for(var k=0;k<a;k++)c[j+k>>>2]|=(e[k>>>2]>>>24-8*(k%4)&255)<<24-8*((j+k)%4);else if(65535<e.length)for(k=0;k<a;k+=4)c[j+k>>>2]=e[k>>>2];else c.push.apply(c,e);this.sigBytes+=a;return this},clamp:function(){var a=this.words,c=this.sigBytes;a[c>>>2]&=4294967295<<
32-8*(c%4);a.length=u.ceil(c/4)},clone:function(){var a=t.clone.call(this);a.words=this.words.slice(0);return a},random:function(a){for(var c=[],e=0;e<a;e+=4)c.push(4294967296*u.random()|0);return new r.init(c,a)}}),w=d.enc={},v=w.Hex={stringify:function(a){var c=a.words;a=a.sigBytes;for(var e=[],j=0;j<a;j++){var k=c[j>>>2]>>>24-8*(j%4)&255;e.push((k>>>4).toString(16));e.push((k&15).toString(16))}return e.join("")},parse:function(a){for(var c=a.length,e=[],j=0;j<c;j+=2)e[j>>>3]|=parseInt(a.substr(j,
2),16)<<24-4*(j%8);return new r.init(e,c/2)}},b=w.Latin1={stringify:function(a){var c=a.words;a=a.sigBytes;for(var e=[],j=0;j<a;j++)e.push(String.fromCharCode(c[j>>>2]>>>24-8*(j%4)&255));return e.join("")},parse:function(a){for(var c=a.length,e=[],j=0;j<c;j++)e[j>>>2]|=(a.charCodeAt(j)&255)<<24-8*(j%4);return new r.init(e,c)}},x=w.Utf8={stringify:function(a){try{return decodeURIComponent(escape(b.stringify(a)))}catch(c){throw Error("Malformed UTF-8 data");}},parse:function(a){return b.parse(unescape(encodeURIComponent(a)))}},
q=l.BufferedBlockAlgorithm=t.extend({reset:function(){this._data=new r.init;this._nDataBytes=0},_append:function(a){"string"==typeof a&&(a=x.parse(a));this._data.concat(a);this._nDataBytes+=a.sigBytes},_process:function(a){var c=this._data,e=c.words,j=c.sigBytes,k=this.blockSize,b=j/(4*k),b=a?u.ceil(b):u.max((b|0)-this._minBufferSize,0);a=b*k;j=u.min(4*a,j);if(a){for(var q=0;q<a;q+=k)this._doProcessBlock(e,q);q=e.splice(0,a);c.sigBytes-=j}return new r.init(q,j)},clone:function(){var a=t.clone.call(this);
a._data=this._data.clone();return a},_minBufferSize:0});l.Hasher=q.extend({cfg:t.extend(),init:function(a){this.cfg=this.cfg.extend(a);this.reset()},reset:function(){q.reset.call(this);this._doReset()},update:function(a){this._append(a);this._process();return this},finalize:function(a){a&&this._append(a);return this._doFinalize()},blockSize:16,_createHelper:function(a){return function(b,e){return(new a.init(e)).finalize(b)}},_createHmacHelper:function(a){return function(b,e){return(new n.HMAC.init(a,
e)).finalize(b)}}});var n=d.algo={};return d}(Math);
(function(){var u=CryptoJS,p=u.lib.WordArray;u.enc.Base64={stringify:function(d){var l=d.words,p=d.sigBytes,t=this._map;d.clamp();d=[];for(var r=0;r<p;r+=3)for(var w=(l[r>>>2]>>>24-8*(r%4)&255)<<16|(l[r+1>>>2]>>>24-8*((r+1)%4)&255)<<8|l[r+2>>>2]>>>24-8*((r+2)%4)&255,v=0;4>v&&r+0.75*v<p;v++)d.push(t.charAt(w>>>6*(3-v)&63));if(l=t.charAt(64))for(;d.length%4;)d.push(l);return d.join("")},parse:function(d){var l=d.length,s=this._map,t=s.charAt(64);t&&(t=d.indexOf(t),-1!=t&&(l=t));for(var t=[],r=0,w=0;w<
l;w++)if(w%4){var v=s.indexOf(d.charAt(w-1))<<2*(w%4),b=s.indexOf(d.charAt(w))>>>6-2*(w%4);t[r>>>2]|=(v|b)<<24-8*(r%4);r++}return p.create(t,r)},_map:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="}})();
(function(u){function p(b,n,a,c,e,j,k){b=b+(n&a|~n&c)+e+k;return(b<<j|b>>>32-j)+n}function d(b,n,a,c,e,j,k){b=b+(n&c|a&~c)+e+k;return(b<<j|b>>>32-j)+n}function l(b,n,a,c,e,j,k){b=b+(n^a^c)+e+k;return(b<<j|b>>>32-j)+n}function s(b,n,a,c,e,j,k){b=b+(a^(n|~c))+e+k;return(b<<j|b>>>32-j)+n}for(var t=CryptoJS,r=t.lib,w=r.WordArray,v=r.Hasher,r=t.algo,b=[],x=0;64>x;x++)b[x]=4294967296*u.abs(u.sin(x+1))|0;r=r.MD5=v.extend({_doReset:function(){this._hash=new w.init([1732584193,4023233417,2562383102,271733878])},
_doProcessBlock:function(q,n){for(var a=0;16>a;a++){var c=n+a,e=q[c];q[c]=(e<<8|e>>>24)&16711935|(e<<24|e>>>8)&4278255360}var a=this._hash.words,c=q[n+0],e=q[n+1],j=q[n+2],k=q[n+3],z=q[n+4],r=q[n+5],t=q[n+6],w=q[n+7],v=q[n+8],A=q[n+9],B=q[n+10],C=q[n+11],u=q[n+12],D=q[n+13],E=q[n+14],x=q[n+15],f=a[0],m=a[1],g=a[2],h=a[3],f=p(f,m,g,h,c,7,b[0]),h=p(h,f,m,g,e,12,b[1]),g=p(g,h,f,m,j,17,b[2]),m=p(m,g,h,f,k,22,b[3]),f=p(f,m,g,h,z,7,b[4]),h=p(h,f,m,g,r,12,b[5]),g=p(g,h,f,m,t,17,b[6]),m=p(m,g,h,f,w,22,b[7]),
f=p(f,m,g,h,v,7,b[8]),h=p(h,f,m,g,A,12,b[9]),g=p(g,h,f,m,B,17,b[10]),m=p(m,g,h,f,C,22,b[11]),f=p(f,m,g,h,u,7,b[12]),h=p(h,f,m,g,D,12,b[13]),g=p(g,h,f,m,E,17,b[14]),m=p(m,g,h,f,x,22,b[15]),f=d(f,m,g,h,e,5,b[16]),h=d(h,f,m,g,t,9,b[17]),g=d(g,h,f,m,C,14,b[18]),m=d(m,g,h,f,c,20,b[19]),f=d(f,m,g,h,r,5,b[20]),h=d(h,f,m,g,B,9,b[21]),g=d(g,h,f,m,x,14,b[22]),m=d(m,g,h,f,z,20,b[23]),f=d(f,m,g,h,A,5,b[24]),h=d(h,f,m,g,E,9,b[25]),g=d(g,h,f,m,k,14,b[26]),m=d(m,g,h,f,v,20,b[27]),f=d(f,m,g,h,D,5,b[28]),h=d(h,f,
m,g,j,9,b[29]),g=d(g,h,f,m,w,14,b[30]),m=d(m,g,h,f,u,20,b[31]),f=l(f,m,g,h,r,4,b[32]),h=l(h,f,m,g,v,11,b[33]),g=l(g,h,f,m,C,16,b[34]),m=l(m,g,h,f,E,23,b[35]),f=l(f,m,g,h,e,4,b[36]),h=l(h,f,m,g,z,11,b[37]),g=l(g,h,f,m,w,16,b[38]),m=l(m,g,h,f,B,23,b[39]),f=l(f,m,g,h,D,4,b[40]),h=l(h,f,m,g,c,11,b[41]),g=l(g,h,f,m,k,16,b[42]),m=l(m,g,h,f,t,23,b[43]),f=l(f,m,g,h,A,4,b[44]),h=l(h,f,m,g,u,11,b[45]),g=l(g,h,f,m,x,16,b[46]),m=l(m,g,h,f,j,23,b[47]),f=s(f,m,g,h,c,6,b[48]),h=s(h,f,m,g,w,10,b[49]),g=s(g,h,f,m,
E,15,b[50]),m=s(m,g,h,f,r,21,b[51]),f=s(f,m,g,h,u,6,b[52]),h=s(h,f,m,g,k,10,b[53]),g=s(g,h,f,m,B,15,b[54]),m=s(m,g,h,f,e,21,b[55]),f=s(f,m,g,h,v,6,b[56]),h=s(h,f,m,g,x,10,b[57]),g=s(g,h,f,m,t,15,b[58]),m=s(m,g,h,f,D,21,b[59]),f=s(f,m,g,h,z,6,b[60]),h=s(h,f,m,g,C,10,b[61]),g=s(g,h,f,m,j,15,b[62]),m=s(m,g,h,f,A,21,b[63]);a[0]=a[0]+f|0;a[1]=a[1]+m|0;a[2]=a[2]+g|0;a[3]=a[3]+h|0},_doFinalize:function(){var b=this._data,n=b.words,a=8*this._nDataBytes,c=8*b.sigBytes;n[c>>>5]|=128<<24-c%32;var e=u.floor(a/
4294967296);n[(c+64>>>9<<4)+15]=(e<<8|e>>>24)&16711935|(e<<24|e>>>8)&4278255360;n[(c+64>>>9<<4)+14]=(a<<8|a>>>24)&16711935|(a<<24|a>>>8)&4278255360;b.sigBytes=4*(n.length+1);this._process();b=this._hash;n=b.words;for(a=0;4>a;a++)c=n[a],n[a]=(c<<8|c>>>24)&16711935|(c<<24|c>>>8)&4278255360;return b},clone:function(){var b=v.clone.call(this);b._hash=this._hash.clone();return b}});t.MD5=v._createHelper(r);t.HmacMD5=v._createHmacHelper(r)})(Math);
(function(){var u=CryptoJS,p=u.lib,d=p.Base,l=p.WordArray,p=u.algo,s=p.EvpKDF=d.extend({cfg:d.extend({keySize:4,hasher:p.MD5,iterations:1}),init:function(d){this.cfg=this.cfg.extend(d)},compute:function(d,r){for(var p=this.cfg,s=p.hasher.create(),b=l.create(),u=b.words,q=p.keySize,p=p.iterations;u.length<q;){n&&s.update(n);var n=s.update(d).finalize(r);s.reset();for(var a=1;a<p;a++)n=s.finalize(n),s.reset();b.concat(n)}b.sigBytes=4*q;return b}});u.EvpKDF=function(d,l,p){return s.create(p).compute(d,
l)}})();
CryptoJS.lib.Cipher||function(u){var p=CryptoJS,d=p.lib,l=d.Base,s=d.WordArray,t=d.BufferedBlockAlgorithm,r=p.enc.Base64,w=p.algo.EvpKDF,v=d.Cipher=t.extend({cfg:l.extend(),createEncryptor:function(e,a){return this.create(this._ENC_XFORM_MODE,e,a)},createDecryptor:function(e,a){return this.create(this._DEC_XFORM_MODE,e,a)},init:function(e,a,b){this.cfg=this.cfg.extend(b);this._xformMode=e;this._key=a;this.reset()},reset:function(){t.reset.call(this);this._doReset()},process:function(e){this._append(e);return this._process()},
finalize:function(e){e&&this._append(e);return this._doFinalize()},keySize:4,ivSize:4,_ENC_XFORM_MODE:1,_DEC_XFORM_MODE:2,_createHelper:function(e){return{encrypt:function(b,k,d){return("string"==typeof k?c:a).encrypt(e,b,k,d)},decrypt:function(b,k,d){return("string"==typeof k?c:a).decrypt(e,b,k,d)}}}});d.StreamCipher=v.extend({_doFinalize:function(){return this._process(!0)},blockSize:1});var b=p.mode={},x=function(e,a,b){var c=this._iv;c?this._iv=u:c=this._prevBlock;for(var d=0;d<b;d++)e[a+d]^=
c[d]},q=(d.BlockCipherMode=l.extend({createEncryptor:function(e,a){return this.Encryptor.create(e,a)},createDecryptor:function(e,a){return this.Decryptor.create(e,a)},init:function(e,a){this._cipher=e;this._iv=a}})).extend();q.Encryptor=q.extend({processBlock:function(e,a){var b=this._cipher,c=b.blockSize;x.call(this,e,a,c);b.encryptBlock(e,a);this._prevBlock=e.slice(a,a+c)}});q.Decryptor=q.extend({processBlock:function(e,a){var b=this._cipher,c=b.blockSize,d=e.slice(a,a+c);b.decryptBlock(e,a);x.call(this,
e,a,c);this._prevBlock=d}});b=b.CBC=q;q=(p.pad={}).Pkcs7={pad:function(a,b){for(var c=4*b,c=c-a.sigBytes%c,d=c<<24|c<<16|c<<8|c,l=[],n=0;n<c;n+=4)l.push(d);c=s.create(l,c);a.concat(c)},unpad:function(a){a.sigBytes-=a.words[a.sigBytes-1>>>2]&255}};d.BlockCipher=v.extend({cfg:v.cfg.extend({mode:b,padding:q}),reset:function(){v.reset.call(this);var a=this.cfg,b=a.iv,a=a.mode;if(this._xformMode==this._ENC_XFORM_MODE)var c=a.createEncryptor;else c=a.createDecryptor,this._minBufferSize=1;this._mode=c.call(a,
this,b&&b.words)},_doProcessBlock:function(a,b){this._mode.processBlock(a,b)},_doFinalize:function(){var a=this.cfg.padding;if(this._xformMode==this._ENC_XFORM_MODE){a.pad(this._data,this.blockSize);var b=this._process(!0)}else b=this._process(!0),a.unpad(b);return b},blockSize:4});var n=d.CipherParams=l.extend({init:function(a){this.mixIn(a)},toString:function(a){return(a||this.formatter).stringify(this)}}),b=(p.format={}).OpenSSL={stringify:function(a){var b=a.ciphertext;a=a.salt;return(a?s.create([1398893684,
1701076831]).concat(a).concat(b):b).toString(r)},parse:function(a){a=r.parse(a);var b=a.words;if(1398893684==b[0]&&1701076831==b[1]){var c=s.create(b.slice(2,4));b.splice(0,4);a.sigBytes-=16}return n.create({ciphertext:a,salt:c})}},a=d.SerializableCipher=l.extend({cfg:l.extend({format:b}),encrypt:function(a,b,c,d){d=this.cfg.extend(d);var l=a.createEncryptor(c,d);b=l.finalize(b);l=l.cfg;return n.create({ciphertext:b,key:c,iv:l.iv,algorithm:a,mode:l.mode,padding:l.padding,blockSize:a.blockSize,formatter:d.format})},
decrypt:function(a,b,c,d){d=this.cfg.extend(d);b=this._parse(b,d.format);return a.createDecryptor(c,d).finalize(b.ciphertext)},_parse:function(a,b){return"string"==typeof a?b.parse(a,this):a}}),p=(p.kdf={}).OpenSSL={execute:function(a,b,c,d){d||(d=s.random(8));a=w.create({keySize:b+c}).compute(a,d);c=s.create(a.words.slice(b),4*c);a.sigBytes=4*b;return n.create({key:a,iv:c,salt:d})}},c=d.PasswordBasedCipher=a.extend({cfg:a.cfg.extend({kdf:p}),encrypt:function(b,c,d,l){l=this.cfg.extend(l);d=l.kdf.execute(d,
b.keySize,b.ivSize);l.iv=d.iv;b=a.encrypt.call(this,b,c,d.key,l);b.mixIn(d);return b},decrypt:function(b,c,d,l){l=this.cfg.extend(l);c=this._parse(c,l.format);d=l.kdf.execute(d,b.keySize,b.ivSize,c.salt);l.iv=d.iv;return a.decrypt.call(this,b,c,d.key,l)}})}();
(function(){for(var u=CryptoJS,p=u.lib.BlockCipher,d=u.algo,l=[],s=[],t=[],r=[],w=[],v=[],b=[],x=[],q=[],n=[],a=[],c=0;256>c;c++)a[c]=128>c?c<<1:c<<1^283;for(var e=0,j=0,c=0;256>c;c++){var k=j^j<<1^j<<2^j<<3^j<<4,k=k>>>8^k&255^99;l[e]=k;s[k]=e;var z=a[e],F=a[z],G=a[F],y=257*a[k]^16843008*k;t[e]=y<<24|y>>>8;r[e]=y<<16|y>>>16;w[e]=y<<8|y>>>24;v[e]=y;y=16843009*G^65537*F^257*z^16843008*e;b[k]=y<<24|y>>>8;x[k]=y<<16|y>>>16;q[k]=y<<8|y>>>24;n[k]=y;e?(e=z^a[a[a[G^z]]],j^=a[a[j]]):e=j=1}var H=[0,1,2,4,8,
16,32,64,128,27,54],d=d.AES=p.extend({_doReset:function(){for(var a=this._key,c=a.words,d=a.sigBytes/4,a=4*((this._nRounds=d+6)+1),e=this._keySchedule=[],j=0;j<a;j++)if(j<d)e[j]=c[j];else{var k=e[j-1];j%d?6<d&&4==j%d&&(k=l[k>>>24]<<24|l[k>>>16&255]<<16|l[k>>>8&255]<<8|l[k&255]):(k=k<<8|k>>>24,k=l[k>>>24]<<24|l[k>>>16&255]<<16|l[k>>>8&255]<<8|l[k&255],k^=H[j/d|0]<<24);e[j]=e[j-d]^k}c=this._invKeySchedule=[];for(d=0;d<a;d++)j=a-d,k=d%4?e[j]:e[j-4],c[d]=4>d||4>=j?k:b[l[k>>>24]]^x[l[k>>>16&255]]^q[l[k>>>
8&255]]^n[l[k&255]]},encryptBlock:function(a,b){this._doCryptBlock(a,b,this._keySchedule,t,r,w,v,l)},decryptBlock:function(a,c){var d=a[c+1];a[c+1]=a[c+3];a[c+3]=d;this._doCryptBlock(a,c,this._invKeySchedule,b,x,q,n,s);d=a[c+1];a[c+1]=a[c+3];a[c+3]=d},_doCryptBlock:function(a,b,c,d,e,j,l,f){for(var m=this._nRounds,g=a[b]^c[0],h=a[b+1]^c[1],k=a[b+2]^c[2],n=a[b+3]^c[3],p=4,r=1;r<m;r++)var q=d[g>>>24]^e[h>>>16&255]^j[k>>>8&255]^l[n&255]^c[p++],s=d[h>>>24]^e[k>>>16&255]^j[n>>>8&255]^l[g&255]^c[p++],t=
d[k>>>24]^e[n>>>16&255]^j[g>>>8&255]^l[h&255]^c[p++],n=d[n>>>24]^e[g>>>16&255]^j[h>>>8&255]^l[k&255]^c[p++],g=q,h=s,k=t;q=(f[g>>>24]<<24|f[h>>>16&255]<<16|f[k>>>8&255]<<8|f[n&255])^c[p++];s=(f[h>>>24]<<24|f[k>>>16&255]<<16|f[n>>>8&255]<<8|f[g&255])^c[p++];t=(f[k>>>24]<<24|f[n>>>16&255]<<16|f[g>>>8&255]<<8|f[h&255])^c[p++];n=(f[n>>>24]<<24|f[g>>>16&255]<<16|f[h>>>8&255]<<8|f[k&255])^c[p++];a[b]=q;a[b+1]=s;a[b+2]=t;a[b+3]=n},keySize:8});u.AES=p._createHelper(d)})();



</script>


</body>
</html>
