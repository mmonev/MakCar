function adminavtomobili1(sender){
	var div = document.getElementById("avtomobilisodrzina");
	div.innerHTML = null;
	if(sender=="dodadiavtomobil"){
		odbranododadiavtomobil();
		}
	else if(sender=="izbrisiavtomobil"){
		odbranoizbrisiavtomobil();
		}
	else if(sender == "dodadioprema"){
		odbranododadioprema();}
	else if(sender == "izbrisioprema"){
		odbranoizbrisioprema();
		}
	else {odbranoprodadeniavtomobili();}
}


function odbranododadiavtomobil()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	xmlResponse = xmlhttp.responseXML;
	var xmlDocumentElement = xmlResponse.documentElement;
	var tipnavozilo=xmlDocumentElement.getElementsByTagName('tipnavozilo');
	var tipnamotor=xmlDocumentElement.getElementsByTagName('tipnamotor');
	var menuvac=xmlDocumentElement.getElementsByTagName('menuvac');
	var zafatninanamotor=xmlDocumentElement.getElementsByTagName('zafatninanamotor');
	var proizvoditel= xmlDocumentElement.getElementsByTagName('proizvoditel');
	
	var div = document.getElementById("avtomobilisodrzina");
	var tipnavozilo1 = document.createElement("select");
	var tipnamotor1 = document.createElement("select");
	var menuvac1 = document.createElement("select");
	var zafatninanamotor1 = document.createElement("select");
	var proizvoditel1 = document.createElement("select");
	tipnavozilo1.className = "styled-select";
	tipnamotor1.className = "styled-select";
	menuvac1.className = "styled-select";
	zafatninanamotor1.className = "styled-select";
	proizvoditel1.className = "styled-select";
	zafatninanamotor1.className = "styled-select";
	div.appendChild(tipnamotor1);
	div.appendChild(document.createElement("p"));
	div.appendChild(menuvac1);
	div.appendChild(document.createElement("p"));
	div.appendChild(zafatninanamotor1);
	div.appendChild(document.createElement("p"));
	div.appendChild(tipnavozilo1);
	div.appendChild(document.createElement("p"));
	div.appendChild(proizvoditel1);
	
		var	option = document.createElement("option");
			option.value= "tipnavozilo";
			option.innerHTML = "Тип на возило";
			tipnavozilo1.appendChild(option);
		for(var i=0;i<tipnavozilo.length;i++){
			option = document.createElement("option");
			option.value=tipnavozilo[i].childNodes[0].nodeValue;
			option.innerHTML =tipnavozilo[i].childNodes[0].nodeValue;
			tipnavozilo1.appendChild(option);
			}
			option = document.createElement("option");
			option.value= "tipnamotor";
			option.innerHTML = "Тип на мотор";
			tipnamotor1.appendChild(option);	
		for(var i=0;i<tipnamotor.length;i++){
			option = document.createElement("option");
			option.value=tipnamotor[i].childNodes[0].nodeValue;
			option.innerHTML =tipnamotor[i].childNodes[0].nodeValue;
			tipnamotor1.appendChild(option);
			}
			option = document.createElement("option");
			option.value= "menuvac";
			option.innerHTML ="Тип на менувач" ;
			menuvac1.appendChild(option);	
		for(var i=0;i<menuvac.length;i++){
			option = document.createElement("option");
			option.value=menuvac[i].childNodes[0].nodeValue;
			option.innerHTML =menuvac[i].childNodes[0].nodeValue;
			menuvac1.appendChild(option);
			}
			option = document.createElement("option");
			option.value="zafatninanamotor" ;
			option.innerHTML ="Зафатнина на мотор" ;
			zafatninanamotor1.appendChild(option);	
		for(var i=0;i<zafatninanamotor.length;i++){
			option = document.createElement("option");
			option.value=zafatninanamotor[i].childNodes[0].nodeValue;
			option.innerHTML =zafatninanamotor[i].childNodes[0].nodeValue;
			zafatninanamotor1.appendChild(option);
			}
			option = document.createElement("option");
			option.value="proizvoditel" ;
			option.innerHTML = "Производител";
			proizvoditel1.appendChild(option);	
		for(var i=0;i<proizvoditel.length;i++){
			option = document.createElement("option");
			option.value=proizvoditel[i].childNodes[0].nodeValue;
			option.innerHTML =proizvoditel[i].childNodes[0].nodeValue;
			proizvoditel1.appendChild(option);
			}
	var imekola = document.createElement("input");
	div.appendChild(document.createElement("p"));
	imekola.type = "text";
	imekola.placeholder = "Внесете име на автомобил";
	imekola.className = "fancyinput";
	imekola.style.width = "200px";
	div.appendChild(imekola);
	div.appendChild(document.createElement("p"));
	
	var konjskisili = document.createElement("input");
	div.appendChild(document.createElement("p"));
	konjskisili.type = "text";
	konjskisili.placeholder = "Внесете број на коњски сили";
	konjskisili.className = "fancyinput";
	konjskisili.style.width = "200px";
	div.appendChild(konjskisili);
	div.appendChild(document.createElement("p"));
	
	var cena = document.createElement("input");
	div.appendChild(document.createElement("p"));
	cena.type = "text";
	cena.placeholder = "Внесете цена";
	cena.className = "fancyinput";
	cena.style.width = "200px";
	div.appendChild(cena);
	div.appendChild(document.createElement("p"));
	
	var slika = document.createElement("input");
	div.appendChild(document.createElement("p"));
	slika.type = "text";
	slika.placeholder = "Внесете слика";
	slika.className = "fancyinput";
	slika.style.width = "200px";
	div.appendChild(slika);
	div.appendChild(document.createElement("p"));
	
	var opis = document.createElement("textarea");
	div.appendChild(document.createElement("p"));

	opis.type = "text";
	opis.rows = "3";
	opis.cols = "40";
	opis.placeholder = "Внесете опис";
	opis.className = "fancyinput";
	opis.style.width = "300px";
	opis.style.height = "150px";
	div.appendChild(opis);
	div.appendChild(document.createElement("p"));
	
	var kopce = document.createElement("input");
	kopce.type = "button";
	kopce.value = "Додади";
	kopce.className = "fancykopce";



kopce.onclick = function() {
	dodadiavtomobil(tipnamotor1.value,tipnavozilo1.value,proizvoditel1.value
		,menuvac1.value,zafatninanamotor1.value,imekola.value,konjskisili.value,slika.value,opis.value,cena.value);
	odbranododadiavtomobil();
};

	div.appendChild(kopce);
		}
	
  }
 var div = document.getElementById("avtomobilisodrzina");
 div.innerHTML = null;

xmlhttp.open("GET","odbranopoleadmin.php?odbrano=dodadiavtomobil",true);
xmlhttp.send();
}
function dodadiavtomobil(tipnamotor,tipnavozilo,proizvoditel,menuvac,zafatninanamotor,imekola,konjskisili,slika,opis,cena){
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			xmlResponse = xmlhttp.responseXML;
			var xmlDocumentElement = xmlResponse.documentElement;
			var rezultat=xmlDocumentElement.getElementsByTagName('rezultat');
			alert(rezultat[0].childNodes[0].nodeValue);
			
		}

	}
	
	xmlhttp.open("GET","adminavtomobilibaza.php?povikuvac=dodadiavtomobil&konjskisili="+konjskisili
		+"&tipnamotor="+tipnamotor+"&tipnavozilo="+tipnavozilo+"&proizvoditel="+proizvoditel
		+"&menuvac="+menuvac+"&zafatninanamotor="+zafatninanamotor+"&imekola="+imekola+"&konjskisili="+konjskisili+"&cena="+cena+"&lokacijaslika="+slika+"&opis="+opis,true);
	xmlhttp.send();
}

function odbranoizbrisiavtomobil()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	xmlResponse = xmlhttp.responseXML;
	var xmlDocumentElement = xmlResponse.documentElement;
	var avtomobil=xmlDocumentElement.getElementsByTagName('avtomobil');
	
	var div = document.getElementById("avtomobilisodrzina");
	var avtomobil1 = document.createElement("select");
	avtomobil1.style.width = "400px";
	avtomobil1.className = "styled-select";
	div.appendChild(avtomobil1);
	div.appendChild(document.createElement("p"));
		for(var i=0;i<avtomobil.length;i++){
			var option = document.createElement("option");
			for(var j=0;j<avtomobil[i].childNodes.length;j++){
				
			option.innerHTML+=avtomobil[i].childNodes[j].childNodes[0].nodeValue;
			option.value+=avtomobil[i].childNodes[j].childNodes[0].nodeValue;
			if(j==4){
				option.innerHTML+="hp";
				option.value+="hp";
				}
			else if(j==7){
				option.innerHTML+="€";
				option.value+="€";
			}
			option.innerHTML+="  ";
			option.value+="  ";
			}
				avtomobil1.appendChild(option);
			}
	
	var kopce = document.createElement("input");
	kopce.type = "button";
	kopce.value = "Избриши";
	kopce.className = "fancykopce";



	kopce.onclick = function() {
		izbrisiavtomobil(avtomobil1.selectedIndex,avtomobil);
		
	};

	div.appendChild(kopce);
		}
	
  } 
 var div = document.getElementById("avtomobilisodrzina");
 div.innerHTML = null;

xmlhttp.open("GET","odbranopoleadmin.php?odbrano=izbrisiavtomobil",true);
xmlhttp.send();
}

function izbrisiavtomobil(index,avtomobil){
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			xmlResponse = xmlhttp.responseXML;
			var xmlDocumentElement = xmlResponse.documentElement;
			var rezultat=xmlDocumentElement.getElementsByTagName('rezultat');
			alert(rezultat[0].childNodes[0].nodeValue);
			odbranoizbrisiavtomobil();
			
		}

	}
	var proizvoditel = avtomobil[index].childNodes[0].childNodes[0].nodeValue;
	var imekola = avtomobil[index].childNodes[1].childNodes[0].nodeValue;
	var zafatninanamotor = avtomobil[index].childNodes[2].childNodes[0].nodeValue;
	var tipnamotor = avtomobil[index].childNodes[3].childNodes[0].nodeValue;
	var konjskisili = avtomobil[index].childNodes[4].childNodes[0].nodeValue;
	var tipnavozilo = avtomobil[index].childNodes[5].childNodes[0].nodeValue;
	var menuvac = avtomobil[index].childNodes[6].childNodes[0].nodeValue;
	var cena = avtomobil[index].childNodes[7].childNodes[0].nodeValue;
	
	xmlhttp.open("GET","adminavtomobilibaza.php?povikuvac=izbrisiavtomobil&konjskisili="+konjskisili
		+"&tipnamotor="+tipnamotor+"&menuvac="+menuvac+"&zafatninanamotor="+zafatninanamotor+"&imekola="+imekola+"&konjskisili="+konjskisili+"&cena="+cena,true);
	xmlhttp.send();
}














function odbranododadioprema(){
	document.getElementById("avtomobilisodrzina").innerHTML = null;
	
	var div = document.getElementById("avtomobilisodrzina");
	var listaoprema = document.createElement('select');
    var kopce = null;
	
	listaoprema.className = "styled-select";
	div.appendChild(listaoprema);
	var option = document.createElement('option');
	option.innerHTML = "Одбери";
	option.value = "Odberi";
	listaoprema.appendChild(option);
	option = document.createElement('option');
	option.innerHTML = "Боја";
	option.value = "Boja";
	listaoprema.appendChild(option);
	option = document.createElement('option');
	option.innerHTML = "Стакла";
	option.value = "Stakla";
	listaoprema.appendChild(option);
	option = document.createElement('option');
	option.innerHTML = "Сензори";
	option.value = "Senzori";
	listaoprema.appendChild(option);
	option = document.createElement('option');
	option.innerHTML = "Седишта";
	option.value = "Sedista";
	listaoprema.appendChild(option);
	option = document.createElement('option');
	option.innerHTML = "Тркала";
	option.value = "Trkala";
	listaoprema.appendChild(option);
	option = document.createElement('option');
	option.innerHTML = "Светла";
	option.value = "Svetla";
	listaoprema.appendChild(option);
	var vnes1 = document.createElement("input");
	var vnes2 = document.createElement("input");
	var cena = document.createElement("input");
	vnes1.id = "vnes1";
	vnes2.id = "vnes2";
	listaoprema.onchange = function(){ 

	try{
		div.removeChild(document.getElementById("dodadi"));
		div.removeChild(document.getElementById("p1"));
		div.removeChild(document.getElementById("vnes1"));
		vnes1.value = "";
		div.removeChild(document.getElementById("p2"));
		
		div.removeChild(document.getElementById("p4"));
		
		div.removeChild(document.getElementById("cena"));
		cena.value = "";
		div.removeChild(document.getElementById("vnes2"));
		vnes2.value = "";
		div.removeChild(document.getElementById("p3"));
		
		
		
		}
		catch(e){}
		if(listaoprema.value=="Odberi")
		return;
		
		vnes1.type = "text";
		vnes1.className = "fancyinput";
		vnes1.id = "vnes1";
		vnes1.style.width = "200px";
		var p1 = document.createElement("p");
		p1.id = "p1";
		var p2 = document.createElement("p");
		p2.id = "p2";
		var p3 = document.createElement("p");
		p3.id = "p3";
		var p4 = document.createElement("p");
		p4.id = "p4";
		div.appendChild(p1);
		div.appendChild(vnes1);
		
		cena.type = "text";
		cena.className = "fancyinput";
		cena.id = "cena";
		cena.style.width = "200px";
		cena.placeholder = "Внесете цена";
		
		
		if(listaoprema.value == "Trkala"){
			vnes1.placeholder = "Внесете пневматик";
			vnes2 = document.createElement("input");
			vnes2.id = "vnes2";
			vnes2.type = "text";
			vnes2.placeholder = "Внесете големина на алуфелна";
			vnes2.className = "fancyinput";
			vnes2.style.width = "200px";
			div.appendChild(p2);
			div.appendChild(vnes2);
			div.appendChild(p3);
			div.appendChild(cena);
			
			}
		else {
			
			div.appendChild(p2);
			div.appendChild(cena);
			if(listaoprema.value == "Boja"){
				vnes1.placeholder = "Внесете боја";
				}
			else if(listaoprema.value == "Svetla"){
				vnes1.placeholder = "Внесете вид на светла";
				vnes2 = null;
				}
			else if(listaoprema.value == "Sedista"){
				vnes1.placeholder = "Внесете тип на седишта";
				vnes2 = null;
				}
			else if(listaoprema.value == "Senzori"){
				vnes1.placeholder = "Внесете сензор";
				vnes2 = null;
				}
			else {vnes1.placeholder = "Внесете вид на стакло";
				vnes2 = null;}

		}
		
		
	kopce = document.createElement("input");
	kopce.type = "button";
	kopce.value = "Додади";
	kopce.className = "fancykopce";
	kopce.id = "dodadi";
	div.appendChild(p4);
	div.appendChild(kopce);


	kopce.onclick = function() {
		if(listaoprema.value == "Trkala")
			dodadioprema(listaoprema.value.toString().toLowerCase(),vnes1.value,vnes2.value,cena.value);
		else dodadioprema(listaoprema.value.toString().toLowerCase(),vnes1.value,"prazno",cena.value);
		try{vnes1.value = "";
		cena.value = ""
		vnes2.value ="";	
		}catch(e){}
	};
		}

		
}
function dodadioprema(tabela,vnes1,vnes2,cena){
	var xmlhttp;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	xmlResponse = xmlhttp.responseXML;
	var xmlDocumentElement = xmlResponse.documentElement;
	var rezultat=xmlDocumentElement.getElementsByTagName('rezultat');
	alert(rezultat[0].childNodes[0].nodeValue);
	}
	
  }
xmlhttp.open("GET","adminavtomobilibaza.php?povikuvac=dodadioprema&tabela="+tabela+"&vnes1="+vnes1+"&cena="+cena+"&vnes2="+vnes2,true);
xmlhttp.send();
}











function odbranoizbrisioprema()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	xmlResponse = xmlhttp.responseXML;
	var xmlDocumentElement = xmlResponse.documentElement;
	var oprema=xmlDocumentElement.getElementsByTagName('oprema');
	
	var div = document.getElementById("avtomobilisodrzina");
	var oprema1 = document.createElement("select");
	oprema1.style.width = "400px";
	oprema1.className = "styled-select";
	div.appendChild(oprema1);
	div.appendChild(document.createElement("p"));
		for(var i=0;i<oprema.length;i++){
			var option = document.createElement("option");
			for(var j=1;j<oprema[i].childNodes.length;j++){
				
			option.innerHTML+=oprema[i].childNodes[j].childNodes[0].nodeValue;
			option.value+=oprema[i].childNodes[j].childNodes[0].nodeValue;
			option.innerHTML+="  ";
			option.value+="  ";
			}
				oprema1.appendChild(option);
			}
	
	var kopce = document.createElement("input");
	kopce.type = "button";
	kopce.value = "Избриши";
	kopce.className = "fancykopce";



	kopce.onclick = function() {
		if(oprema[oprema1.selectedIndex].childNodes[0].childNodes[0].nodeValue == "Trkala")
			izbrisioprema(oprema1.selectedIndex,oprema,"trkala");
		else izbrisioprema(oprema1.selectedIndex,oprema,"drugo");
		
		
	};

	div.appendChild(kopce);
		}
	
  } 
 var div = document.getElementById("avtomobilisodrzina");
 div.innerHTML = null;

xmlhttp.open("GET","odbranopoleadmin.php?odbrano=izbrisioprema",true);
xmlhttp.send();
}

function izbrisioprema(index,oprema,stosebrise){
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			xmlResponse = xmlhttp.responseXML;
			var xmlDocumentElement = xmlResponse.documentElement;
			var rezultat=xmlDocumentElement.getElementsByTagName('rezultat');
			alert(rezultat[0].childNodes[0].nodeValue);
			odbranoizbrisioprema();
			
		}

	}
	var tipoprema = oprema[index].childNodes[0].childNodes[0].nodeValue;
	var imeoprema = oprema[index].childNodes[2].childNodes[0].nodeValue;
	var cena;
	
	var alufelnagolemina;
	if(stosebrise == "trkala"){
		alufelnagolemina = oprema[index].childNodes[3].childNodes[0].nodeValue;
		cena = oprema[index].childNodes[4].childNodes[0].nodeValue;
	}
	else {
		
		alufelnagolemina = "prazno";
		cena = oprema[index].childNodes[2].childNodes[0].nodeValue;
		}
	
	xmlhttp.open("GET","adminavtomobilibaza.php?povikuvac=izbrisioprema&tipoprema="+tipoprema
		+"&imeoprema="+imeoprema+"&cena="+cena+"&alufelnagolemina="+alufelnagolemina,true);
	xmlhttp.send();
}













function odbranoprodadeniavtomobili()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	xmlResponse = xmlhttp.responseXML;
	var xmlDocumentElement = xmlResponse.documentElement;
	var avtomobil=xmlDocumentElement.getElementsByTagName('avtomobil');
	
	var div = document.getElementById("avtomobilisodrzina");
	if(avtomobil.length==0){
	var a = document.createElement("h3");
	a.innerHTML="Моментално нема ниту еден продаден автомобил";
	a.style.color="white";
	div.appendChild(a);
	return;
	}
	var tabela = document.createElement("table");
	tabela.style.position = "relative";
	tabela.style.left = "200px";
	tabela.style.top = "-350px";
	tabela.style.width = "100%";
	tabela.style.color = "white";
	tabela.style.fontSize = "20px";
	div.appendChild(tabela);
	var tr = document.createElement("tr");
	var ime = document.createElement("td");
	ime.innerHTML = "Име";
	var prezime = document.createElement("td");
	prezime.innerHTML = "Презиме";
	var proizvoditel = document.createElement("td");
	proizvoditel.innerHTML = "Производител";
	var imekola = document.createElement("td");
	imekola.innerHTML = "Автомобил";
	var zafatninanamotor = document.createElement("td");
	zafatninanamotor.innerHTML = "Зафатнина";
	var tipnamotor = document.createElement("td");
	tipnamotor.innerHTML = "Тип на мотор";
	var konjskisili = document.createElement("td");
	konjskisili.innerHTML = "Коњски сили";
	var tipnavozilo = document.createElement("td");
	tipnavozilo.innerHTML = "Каросерија";
	var menuvac = document.createElement("td");
	menuvac.innerHTML = "Менувач";
	tr.appendChild(ime);
	tr.appendChild(prezime);
	tr.appendChild(proizvoditel);
	tr.appendChild(imekola);
	tr.appendChild(zafatninanamotor);
	tr.appendChild(tipnamotor);
	tr.appendChild(konjskisili);
	tr.appendChild(tipnavozilo);
	tr.appendChild(menuvac);
	tr.style.color = "red";
	tabela.appendChild(tr);
	
		for(var i=0;i<avtomobil.length;i++){
			var tr = document.createElement("tr");
			tabela.appendChild(tr);
			for(var j=0;j<avtomobil[i].childNodes.length;j++){
			var td = document.createElement("td");
			td.innerHTML=avtomobil[i].childNodes[j].childNodes[0].nodeValue;
			tr.appendChild(td);
			}
				
			}
	
	
		}
	
  } 
 var div = document.getElementById("avtomobilisodrzina");
 div.innerHTML = null;

xmlhttp.open("GET","odbranopoleadmin.php?odbrano=prodadenikoli",true);
xmlhttp.send();
}




function promenilozinka()
{
var email = document.getElementById("emailpromena");
var lozinka = document.getElementById("lozinkapromena");
var lozinka1 = document.getElementById("lozinkapromena1");
if(lozinka.value.length<1 || lozinka1.value.length <1 || email.value.length<1){
	alert("Имате непотполнети полиња");
	return;
	}
if(lozinka.value!=lozinka1.value){
alert("Лозинките не се совпаѓаат");
return;
}
	
	
var xmlhttp;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		xmlResponse = xmlhttp.responseXML;
		var xmlDocumentElement = xmlResponse.documentElement;
		var rezultat=xmlDocumentElement.getElementsByTagName('rezultat');
			alert(rezultat[0].childNodes[0].nodeValue);
		
		email.value="";
		lozinka.value="";
		lozinka1.value="";
	}
	
  } 
var string = "adminavtomobilibaza.php?odbrano=promenanalozinka&email="+email.value+"&password="+lozinka.value;

xmlhttp.open("GET",string,true);
xmlhttp.send();

}











