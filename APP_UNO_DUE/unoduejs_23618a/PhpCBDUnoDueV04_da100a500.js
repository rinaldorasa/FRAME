



/*





TheRollingThunderProject released 



CBD_23618_0730A_PhpCBDUnoDueV04


! CBD_23618_0730A_PhpCBDUnoDueV04



*/





DESKTOP_CHECK = 1 ; DESKTOP_CHECK = 0 ; if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) { DESKTOP_CHECK = 0 ; } else { DESKTOP_CHECK = 1 ; } 
/* if(DESKTOP_CHECK === 0){alert("mobile");} if(DESKTOP_CHECK === 1){alert("desktop");}*/

/* mobile first */
FonteSizeStandard__=3.95*1.00;


if(DESKTOP_CHECK === 1){FonteSizeStandard__=3.95*0.75;}

// rilevazione width height
// i valori possono variare
// a seconda del tipo di
// dispositivo
// 
function LarghezzaRem__(){let Larghezza__=window.innerWidth/16;return Larghezza__;} function AltezzaRem__(){let Altezza__=window.innerHeight/16;return Altezza__;}

Larghezza__=LarghezzaRem__();Altezza__=AltezzaRem__();


HeightCapoPagina__=(FonteSizeStandard__*6.125);
if(DESKTOP_CHECK === 1){HeightCapoPagina__=(HeightCapoPagina__*0.75);}


FonteDinamica__=2.5;



FonteSizeXChiudiCapoPagina__=(FonteSizeStandard__*1);
FonteSizeXApriCapoPagina__= (FonteSizeXChiudiCapoPagina__*1);


FonteSizeXQuestionMarkPopUp__=FonteSizeXChiudiCapoPagina__;
LarghezzaXQuestionMarkPopUp__=(Larghezza__*1)-(FonteSizeXChiudiCapoPagina__*6);


AltezzaXQuestionMarkPopUp__=(Altezza__*1.00)-(HeightCapoPagina__*1.00);



 

document.getElementById("APP_UNO_DUE__").innerHTML=
`


<style>

html * {font-size:auto;font-family:monospace;}
body{}

q{border-bottom:dashed 0.15rem orange;}

ol { list-style: none; counter-reset: ColoreCounter__;}ol li { counter-increment: ColoreCounter__;}ol li::before { content: counter(ColoreCounter__) ". "; background-color:aqua;color: black;font-size:75%;border:solid 0.15rem aqua;border-radius: 100%;display:inline-block;}

</style>


<style>
.spinmincaveat0{font-size:initial;}
.spinmincaveat1{background-color:white;color:gray;font-size:initial;}
.spinmincaveat2{background-color:white;color:gray;font-size:initial;}

</style>



<style>
/* UTILITIES ini */
@keyframes spin{ 0%{transform:rotate(0deg);} 100% {transform:rotate(360deg);}}

.spinner{width:48px;height:48px; width:2rem;height:2rem; border:solid 4px red; border:solid 0.25rem red; border:solid 0.25rem red; border:solid 0.25rem red; border-top:solid 4px black; border-top:solid 0.25rem transparent; background-color:transparent; border-radius:50%; overflow:none; animation: spin 1.5s linear infinite;}
.spinmin{width: 1.00rem;height:1.00rem;background-color:transparent;
border:solid 0.175rem orange;border-top:solid 0.175rem transparent;border-radius:50%; display:inline-block;
animation: spin 1.5s linear infinite;
}

@-webkit-keyframes blink { 0% {background: #222} 50% {background: lime} 100% {background: #222}}

.cursore { background: lime; line-height: 17px; margin-left: 3px;
 -webkit-animation: blink 0.8s infinite; width: 7px; height: 15px;}

/* UTILITIES fin */ 

</style>



<section id="NAV_INTERNA__">
<article id="NAV_INTERNA_TOP__"><a href="#">&#47;&#92;</a><a href="#fine__">&#92;&#47;</a></article>
</section>

<button id="NASCONDI_NAVIGAZIONE_INTERNA__" onclick="NascondiNavigazioneInterna()">&#43;</button>
<button id="VEDI_NAVIGAZIONE_INTERNA__" onclick="VediNavigazioneInterna()">&#45;</button>


<section>
<button id="APRI_CapoPagina__" onclick="ApriHeader()" >&#88;</button>
</section>


<header id="CapoPagina__">
<div class="spinmin">&nbsp;</div><q class="spinmincaveat1">Loading elemento ...</q><q class="spinmincaveat2">CapoPagina__</q> 
</header>



<section id="SETTAGGI__"></section>
<div id="COLORE_RANDOM__"></div>


<SECTION id="MAIN__"><div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading elemento ... MAIN__</q></SECTION>



`;


// script

document.getElementById("CapoPagina__").innerHTML=
`
<style>

#CapoPagina__{position:fixed;top:0rem;left:0rem;

background-color:#74C974;background-color:#D1A942;
background-color:#E4EE15;
background-color:#99AFE5;
color:black;

width:100%;
height:`+(HeightCapoPagina__ * 1)+`rem;

overflow:auto;

z-index:1000000000!important;

}



#CHIUDI_CapoPagina__{position:absolute;top:0rem;right:0rem;
background-color:red;color:white;font-size:`+(FonteSizeStandard__*1.00)+`rem;text-align:right;border-radius:0.5rem;
cursor:pointer;opacity:0.75;
}

#APRI_CapoPagina__{position:absolute;top:0rem;right:0rem;
background-color:green;color:white;font-size:`+(FonteSizeStandard__*1)+`rem;text-align:right;text-decoration:line-through;border-radius:0.5rem;
cursor:pointer;opacity:0.75;z-index:1000000000!important;
}
#CHIUDI_CapoPagina__{}
#APRI_CapoPagina__{}




#CONTENITORE_COPY_SI_NO__{position:absolute;top:33.33%;right:0.00rem; 
text-align:right;display:inline-block;
opacity:0.50;
}

#COPY_SI__{background-color:green;color:white!important;font-size:`+(FonteSizeStandard__*1.00)+`rem;border-radius:0.50rem;cursor:pointer;display:block;}
#COPY_NO__{background-color:red;color:white!important;font-size:`+(FonteSizeStandard__*1.00)+`rem;text-decoration:line-through;border-radius:0.50rem;cursor:pointer;display:none;}
#COPY_SI__{}
#COPY_NO__{}





#QUESTION_MARK_POPUP__{position:absolute;top:66.66%;right:0rem;
background-color:teal;color:white;
font-size:`+(FonteSizeStandard__*1)+`rem;text-align:right;
border-radius:0.5rem;cursor:pointer;opacity:0.75;
}
#ALT_QUESTION_MARK_POPUP__{position:absolute;top:66.66%;right:0rem;
background-color:purple;color:white;
font-size:`+(FonteSizeStandard__*1)+`rem;text-align:right;
border-radius:0.5rem;cursor:pointer;opacity:0.75;
}
#QUESTION_MARK_POPUP__{}
#ALT_QUESTION_MARK_POPUP__{}





</style>

<button id="CHIUDI_CapoPagina__" onclick="ChiudiHeader()" >X</button> 

<article id="CONTENITORE_COPY_SI_NO__">
<button id="COPY_SI__" onclick="COPY_SI()">&#35;</button><button id="COPY_NO__" onclick="COPY_NO()">&#35;</button>
</article>

<button id="ALT_QUESTION_MARK_POPUP__" onclick="ChiudiQuestionMarkPopup()" >?</button> 
<button id="QUESTION_MARK_POPUP__" onclick="QuestionMarkPopup()" >?</button> 

<div id="POPUP__" class="animate__animated animate__backInUp">
<div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading elemento ... POPUP__ </q>
</div>

<div id="Valore_di_FonteDinamica__">
<div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading elemento ... Valore_di_FonteDinamica__</q>
</div>

<div id="Form_per_inserimento_nome_file__">
<div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading elemento ... Form_per_inserimento_nome_file__</q>
</div>

<div id="Liv_01__">
<div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading elemento ... Liv_01__</q>
</div>


`; // CapoPagina__




document.getElementById("POPUP__").innerHTML=
`
<style>
#POPUP__{position:fixed;bottom:0%;left:0rem;

width:100%;height:`+(AltezzaXQuestionMarkPopUp__*1)+`rem;

background-color:rgb(195,215,245);
color:black;

font-size:`+(FonteDinamica__*1)+`rem;

border-top:solid 0.15rem rgb(85,25,225);border-radius:0.0rem;

display:none;

overflow:auto;

}


#CONTENITORE_CHIUDI_QUESTION_MARK_POPUP__{background-color:transparent;
text-align:center;border-bottom:solid 0.15rem purple;
}


#CHIUDI_QUESTION_MARK_POPUP__{display:block;cursor:pointer;}

#CHIUDI_QUESTION_MARK_POPUP__ span{background-color:transparent;color:purple;
font-size:`+(FonteSizeStandard__*1)+`rem;border-radius:0.00rem;word-break:break-all;}
#CHIUDI_QUESTION_MARK_POPUP__ span:hover{background-color:transparent;color:olive;border-radius:0.00rem;}


#CONTENITORE_DI_POPUP__{position:static;}
#CONTENUTO_DI_POPUP__{position:static;}

#CHIUDI_QUESTION_MARK_POPUP_TITOLO__{ font-size:`+( FonteSizeStandard__*0.75)+`rem!important; }

</style>


<section id="CONTENITORE_DI_POPUP__">
<article id="CONTENUTO_DI_POPUP__">
<aside id="CONTENITORE_CHIUDI_QUESTION_MARK_POPUP__">
<blockquote id="CHIUDI_QUESTION_MARK_POPUP__" onclick="ChiudiQuestionMarkPopup()">
<span id="CHIUDI_QUESTION_MARK_POPUP_TITOLO__">TheRollingThunderProject released CBD_23618_0730A_PhpCBDUnoDueV04</span>
</blockquote>
</aside>

<aside>
<ol>
<li><div id="Vedi_TimeStamp__"></div></li>
<li>
<div id="VISUALIZZA_COLORE_RANDOM__"></div>
</li>

<li id="DUEK23611A__"><q id="DUEK23611A_LINK__">Testo.txt</q><button  id="DUEK23611A_BUTTON__" onclick="CopiaDUEK23611A_LINK__()">INS</button></li>

<li id="DUEK23605A__"><q id="DUEK23605A_LINK__">../tes/23m05/index.txt</q><button  id="DUEK23605A_BUTTON__" onclick="CopiaDUEK23605A_LINK__()">INS</button></li>

</ol>
</aside>


<div id="VISUALIZZA_COMMENTO_01__">
<div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading elemento ... VISUALIZZA_COMMENTO_01__</q>
</div>


</article>
</section>

`;



document.getElementById("Form_per_inserimento_nome_file__").innerHTML=
`

<section id="INSERISCE_il_nome_del_file_da_cercare__">
 <input type="text" placeholder="Testo.txt" id="INPUT_NOME_FILE__" value="Testo.txt" >
 
 <div id="INPUT_INSERITO__">
 <div class="spinner" style="display:inline-block;">&nbsp;</div><q style="color:navy;">Loading elemento ... INPUT_INSERITO__</q><div id="Semaforo_Lampeggiante_Per_CapoPagina__"></div></div>

</section>


`;


document.getElementById("Semaforo_Lampeggiante_Per_CapoPagina__").innerHTML=
`
<style>
#CHIUDI_CapoPagina__{visibility:hidden;}
#CONTENITORE_COPY_SI_NO__{visibility:hidden;}


#QUESTION_MARK_POPUP__{visibility:hidden;}
#ALT_QUESTION_MARK_POPUP__{visibility:hidden;}


</style>
`;



function ChiudiHeader(){ 
document.querySelector("#CapoPagina__").style.display="none"; 
document.querySelector("#CHIUDI_CapoPagina__").style.display="none"; 
document.querySelector("#APRI_CapoPagina__").style.display="block"; 
};

function ApriHeader(){ 
document.querySelector("#CapoPagina__").style.display="block"; 
document.querySelector("#CHIUDI_CapoPagina__").style.display="block"; 
document.querySelector("#APRI_CapoPagina__").style.display="none"; 

};




function NascondiNavigazioneInterna(){document.querySelector("#NAV_INTERNA_TOP__").style.visibility="hidden";}
function VediNavigazioneInterna(){document.querySelector("#NAV_INTERNA_TOP__").style.visibility="visible";}


function QuestionMarkPopup(){document.querySelector("#QUESTION_MARK_POPUP__").style.display="none";document.querySelector("#POPUP__").style.display="block";};

function ChiudiQuestionMarkPopup(){document.querySelector("#QUESTION_MARK_POPUP__").style.display="block";document.querySelector("#POPUP__").style.display="none";};



function CopiaDUEK23611A_LINK__(){
CopiatoDUEK23611A_LINK__=document.getElementById("DUEK23611A_LINK__").textContent;
document.querySelector("#INPUT_NOME_FILE__").value=CopiatoDUEK23611A_LINK__;
}

function CopiaDUEK23605A_LINK__(){
CopiatoDUEK23605A_LINK__=document.getElementById("DUEK23605A_LINK__").textContent;
document.querySelector("#INPUT_NOME_FILE__").value=CopiatoDUEK23605A_LINK__;
}




function COPY_NO(){EsegueIntervalPrendeNomeFileDaInput_00__ = setInterval(PrendeNomeFileDaInput_00, 3000);
document.querySelector("#COPY_SI__").style.display="block";document.querySelector("#COPY_NO__").style.display="none";
}

function COPY_SI(){clearInterval(EsegueIntervalPrendeNomeFileDaInput_00__);EsegueIntervalPrendeNomeFileDaInput_00__=null;
document.querySelector("#COPY_SI__").style.display="none";document.querySelector("#COPY_NO__").style.display="block";
}





// aggiunta input range ini

function RangeDot_Dinamico_Input(){ValoreInizialeRange__=25; if(DESKTOP_CHECK==1){ValoreInizialeRange__=12.5;}

 document.getElementById("Liv_01__").innerHTML=
 `
 <input id="RANGER__" type="range" value="`+ValoreInizialeRange__+`" step="1" min="1" max="99">
 `;
 
}; 
RangeDot_Dinamico_Input() ;


// Legge i valori del range
// 
// 
function LeggiRangeDot_Dinamico_Input(){
 let LetturaRange__ = document.getElementById("RANGER__").value;
 FonteDinamica__ = (LetturaRange__ * 0.075) ;

document.getElementById("Valore_di_FonteDinamica__").innerHTML=`<q style="visibility:hidden;">`+( FonteDinamica__.toFixed(2) )+`rem`+`</q>`;

document.getElementById("SETTAGGI__").innerHTML=
`
<style>

#INPUT_NOME_FILE__{width:75%;font-size:2.5rem;}
#INSERISCE_il_nome_del_file_da_cercare__{font-size:1.25rem;}
#RANGER__{width:75%;}


#Vedi_TimeStamp__{font-size:`+(FonteDinamica__*0.75)+`rem;border:solid 0.50rem red;}

#DUEK23611A_LINK__{font-size:`+(FonteDinamica__*0.75)+`rem;}
#DUEK23605A_LINK__{font-size:`+(FonteDinamica__*0.75)+`rem;}




#COMMENTI__{font-size:`+(FonteDinamica__*0.75)+`rem;}
#COMMENTI__{font-size:`+(FonteDinamica__*0.75)+`rem;}





#VISUALIZZA_TESTO_00__{font-size:`+(FonteDinamica__ * 1)+`rem;border:solid 0.00rem yellow;overflow:auto!important;

</style>
`;

};
setInterval(LeggiRangeDot_Dinamico_Input,1)


// aggiunta input range fin
// ////////////////////////
// ////////////////////////
// ////////////////////////
// ////////////////////////
// ////////////////////////
// ////////////////////////
// ////////////////////////
// AGGIUNTA LEGGE FILE INI
//
// Inserimento dei dati (Testo.txt) tramite input
//
//
function PrendeNomeFileDaInput_00(){
NomeDelFileDaInput__=document.getElementById("INPUT_NOME_FILE__").value;

// Cambia colore ogni setInterval
//
//
var LettereColoreRandom__ = '0123456789ABCDEF';
var CreaColoreRandom__ = '#';
var IColoreRandom__;
for (IColoreRandom__ = 0; IColoreRandom__ < 6; IColoreRandom__++ ) {
CreaColoreRandom__ = CreaColoreRandom__+LettereColoreRandom__[Math.round(Math.random() * 15)];
};
document.getElementById("COLORE_RANDOM__").innerHTML=
`
<style>

/* cambio colore quando setInterval */

#FILE_RICHIESTO__{margin-right: `+(FonteSizeStandard__*0.25)+`rem;  background-color:`+CreaColoreRandom__+`!important;border-radius:0.25rem;}


#COPY_SI__{background-color:`+CreaColoreRandom__+`!important;}
#COPY_NO__{background-color:`+CreaColoreRandom__+`!important;}
#DUEK23605A_BUTTON__{font-size:`+(FonteSizeStandard__*1)+`rem;}
#DUEK23611A_BUTTON__{font-size:`+(FonteSizeStandard__*1)+`rem;}



#NAV_INTERNA__{width:75%;border:solid 0.15rem `+CreaColoreRandom__+`!important;}
#NAV_INTERNA__ * {
font-size:`+(FonteSizeStandard__*1)+`rem;
}

#NAV_INTERNA_TOP__{position:fixed;top:0rem;top:`+(FonteSizeStandard__*1.00)+`rem;left:0rem;}
#NAV_INTERNA_TOP__{position:fixed;top:0rem;background-color:rgb(254,211,192);color:rgb(85,25,225);top:`+(FonteSizeStandard__*1.00)+`rem;left:0rem;border-radius:0.50rem;cursor:pointer;z-index:1000000000!important;}
#NAV_INTERNA_TOP__:hover{border:dashed 0.05rem rgb(85,25,225);}


#NASCONDI_NAVIGAZIONE_INTERNA__{position:absolute;top:`+(FonteSizeStandard__*0.25)+`rem;left:75%;background-color:red;color:`+CreaColoreRandom__+`!important;font-size:`+(FonteSizeStandard__*0.00)+`rem;border:solid 1.500rem red;border-radius:0.250rem; display:inline-block;visibility:visible;opacity:0.50;cursor:pointer;}
#NASCONDI_NAVIGAZIONE_INTERNA__:hover{opacity:1.00;}

#VEDI_NAVIGAZIONE_INTERNA__{position:absolute;top:`+(FonteSizeStandard__*1.50)+`rem;left:75%;background-color:green;color:`+CreaColoreRandom__+`!important;font-size:`+(FonteSizeStandard__*0.00)+`rem;border:solid 1.500rem green;border-radius:0.250rem;  display:inline-block;visibility:visible;opacity:0.50;cursor:pointer;}
#VEDI_NAVIGAZIONE_INTERNA__:hover{opacity:1.00;}




#VISUALIZZA_TESTO_00__{
margin-top:`+(HeightCapoPagina__*1.00)+`rem;
margin-bottom:`+(HeightCapoPagina__*1.5)+`rem;
}




</style>


`

;



document.getElementById("VISUALIZZA_COLORE_RANDOM__").innerHTML=`${CreaColoreRandom__}`;



if(NomeDelFileDaInput__!==""){
//
// esiste un nome
//
//
document.getElementById("INPUT_INSERITO__").innerHTML=
`<span id="FILE_RICHIESTO__">&nbsp;&nbsp;</span><span>File richiesto:</span> `+`<b>`+NomeDelFileDaInput__+`</b>`;

// Viene recuperato il file richiesto
//
//
LaSceltaInterattivaDinamica__ = NomeDelFileDaInput__;
let DirectoryDove__; DirectoryDove__="";
let File_00__; File_00__=LaSceltaInterattivaDinamica__;
// Viene aggiornato il file richiesto
//
//
File_00__ = DirectoryDove__+File_00__ + "?"+(new Date().getTime()) + (Math.random()) ;
// Il file richiesto viene passato
//
//
let Richiedo_00__ = new XMLHttpRequest(); 
Richiedo_00__.open("GET",File_00__,false);
Richiedo_00__.onreadystatechange = function(){
let Trovato_00__ = Richiedo_00__.responseText;
TestoTrovatoDaLeggere__ = Trovato_00__;
document.getElementById("VISUALIZZA_TESTO_00__").innerHTML=`${TestoTrovatoDaLeggere__}`; 
document.getElementById("Vedi_TimeStamp__").innerHTML=`${File_00__}`; 
} ; Richiedo_00__.send();


}
else
{
document.getElementById("INPUT_INSERITO__").innerHTML=``;

};






};
EsegueIntervalPrendeNomeFileDaInput_00__ = setInterval(PrendeNomeFileDaInput_00, 3000);




// AGGIUNTA LEGGE FILE FIN



document.getElementById("MAIN__").innerHTML=
`

<div id="VISUALIZZA_TESTO_00__">
<div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading elemento ... VISUALIZZA_TESTO_00__</q>
</div>

`;




let DirectoryDove_File_01__="./txt/";
DirectoryDove_File_01__="";
  let File_01__="Commento.txt";
  // intercetta un altro nome di file diverso da default
File_01__=document.getElementById("INPUT_NOME_FILE__").value;



 File_01__ = DirectoryDove_File_01__+File_01__ + "?"+(new Date().getTime()) + (Math.random()) ; 
  let Richiedo_01__ = new XMLHttpRequest();
    
  Richiedo_01__.open("GET",File_01__,false);
  Richiedo_01__.onreadystatechange = function(){let Trovato_01__ = Richiedo_01__.responseText;
          
      Commento_01__ =    Trovato_01__;
      // 
         document.getElementById("VISUALIZZA_COMMENTO_01__").innerHTML=
`

<div style="font-size:`+(FonteDinamica__*0.75)+`rem;BORDER:dashed 0.25REM MAGENTA;">

${Commento_01__}

</div>

`;

      // alert(Commento_01__);
          
  } ; Richiedo_01__.send();







