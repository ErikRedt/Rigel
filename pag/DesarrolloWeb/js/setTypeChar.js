/*
var isIE = document.all?true:false; 
var isNS = document.layers?true:false; 

function onlyDigits(e,decReq) { 
var key = (isIE) ? window.event.keyCode : e.which; 
var obj = (isIE) ? event.srcElement : e.target; 
var isNum = (key > 47 && key < 58) ? true:false; 
var dotOK = (key==46 && decReq=='decOK' && (obj.value.indexOf(".")<0 || obj.value.length==0)) ? true:false; 
if(key < 32) 
return true; 
return (isNum || dotOK); 
}
*/

/*
47-57=0123456789
65-91=ABC...Z
97-122=abd...z
del 33 al 127 a exepcion del alfabeto estan signos de puntuacion, operadores logicos y aritmeticos
`=180 acento agudo
.=46 punto
192-223=Mayusculas con acentos graves, agudos, chateau, etc.
224-255=minusculas con acentos graves, agudos, chateau, etc.
*/
function setTypeChar(e, c) {//FUNCION QUE VALIDA CAMPOS DE TEXTO SOBRE LOS CARACTERES QUE PERMITE RECIBIR, RECIBE 2 PARAMETROS LA TECLA OPRIMIDA Y EL CASO QUE CORRESPONDE
	var isIE = document.all?true:false; //VARIABLE QUE ALMACENA SI TODO ESTA EN INTERNET EXPLORER
	var isNS = document.layers?true:false; //VARIABLE QUE ALMACENA SI TODO ESTA EN NETSCAPE
	var key = (isIE) ? window.event.keyCode : e.which; //VARIABLE QUE OBTIENE LA TECLA OPRIMIDA EN CODIGO ASCII
	var obj = (isIE) ? event.srcElement : e.target; //VARIABLE QUE OBTIENE EL OBJETO CAPTURADO(TECLA)
	var isNum = (key > 47 && key < 58) ? true:false; //VARIABLE BOOLEAN QUE VALIDA SI ES NUMERICO NO DECIMAL
	var isAlpha = ((key < 47 && key > 57)||(key > 32 && key < 47)||(key > 57 && key < 128)||(key > 191 && key < 256)||(key==180)) ? true:false; //VARIABLE BOOLEAN QUE VALIDA SI ES ALFABETO SIN NUMEROS
	var isAlphaNum = ((key > 47 && key < 58)||(key > 32 && key < 47)||(key > 58 && key < 128)||(key > 191 && key < 256)||(key==180)) ? true:false; //VARIABLE BOOLEAN QUE VALIDA SI ES ALFABETO Y NUMEROS
	var isUppers = ((key > 32 && key < 97)||(key > 122 && key < 128)||(key > 191 && key < 224)||(key==180)) ? true:false; //VARIABLE BOOLEAN QUE VALIDA SI ES ALFABETO SOLO EN MAYUSCULAS
	var isLowers = ((key > 32 && key < 65)||(key > 96 && key < 128)||(key > 223 && key < 256)||(key==180)) ? true:false; //VARIABLE BOOLEAN QUE VALIDA SI ES ALFABETO SOLO EN MINUSCULAS
	var isAN = (key > 47 && key < 58) ? true:false;//VARIABLE BOOLEAN QUE VALIDA SI ES ALFABETO O NÚMERO
	var dotOK = (key==46 && c=='onlyRationals' && (obj.value.indexOf(".")<0 || obj.value.length==0)) ? true:false; //VARIABLE BOOLEAN QUE VALIDA SI ES NUMERICO DECIMAL
	if((key < 32))//ESTE IF ES PARA EL CODIGO ASCII DE COMANDOS
			return true;
	switch(c){//DEPENDIENDO DEL PARAMETRO ENVIADO SE DEVUELVE EL CASO QUE CORRESPONDE FALSE O TRUE PARA LA IMPRESION DEL CARACTER OPRIMIDO
		case "onlyNumbers":
			return (isNum || dotOK); 
			break;
		case "onlyRationals":
			return (isNum || dotOK); 
			break;
		case "onlyAlpha":
			return isAlpha;
			break;
		case "onlyAlphaNum":
			return isAlphaNum;
			break;
		case "onlyUppers":
			return isUppers;
			break;
		case "onlyLowers":
			return isLowers;
			break;
		case "onlyAN":
			return isAN;
			break;
	}
}