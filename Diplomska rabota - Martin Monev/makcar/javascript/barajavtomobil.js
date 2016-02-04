function barajavtomobil()
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
	xmlDocumentElement = xmlResponse.documentElement;
	var avtomobil=xmlDocumentElement.getElementsByTagName('avtomobil');
	var dalielogiran = xmlDocumentElement.getElementsByTagName('dalielogiran');
	var dalielogiran1 = dalielogiran[0].childNodes[0].nodeValue;
	if(avtomobil.length==0){
		var li = document.createElement('li');
		var p = document.createElement('p');
		li.id="nepostoitext";
			var text = document.createTextNode('БАРАНОТО НЕ ПОСТОИ');
			p.appendChild(text);
			var roditel = document.getElementById("odberiavtomobil");
			
			roditel.appendChild(li);		
			li.appendChild(p);
		
				}
	else {
		for(var i=0;i<avtomobil.length;i++){
			var proizvoditel1 = avtomobil[i].childNodes[0].childNodes[0].nodeValue;
			var imekola1=avtomobil[i].childNodes[1].childNodes[0].nodeValue;
			var tipnavozilo1=avtomobil[i].childNodes[2].childNodes[0].nodeValue;
			var lokacijaslika1=avtomobil[i].childNodes[3].childNodes[0].nodeValue;
			
			var li = document.createElement("li");
			var slika = document.createElement("img");
			var formaskriena = document.createElement("form");
			var imekolaskrieno = document.createElement("input");
			var imekola = document.createElement("h2");
			var karoserija = document.createElement("h3");
			var kopce = document.createElement("input");
			
			formaskriena.action = "kupiavtomobil.php";
			formaskriena.method = "GET";
			imekolaskrieno.name = "imekola";
			imekolaskrieno.type = "text";
			imekolaskrieno.hidden = "true";
			imekolaskrieno.value = imekola1;
			
				li.className="liavtomobil";
				slika.src = lokacijaslika1;
				slika.width = 270;
				slika.height = 180;
			
				imekola.innerHTML=proizvoditel1+" "+imekola1;
				karoserija.innerHTML="Каросерија:"+tipnavozilo1;
				if(dalielogiran1=="ne")
				kopce.type = "button";
				else kopce.type = "submit";
				kopce.value = "Купи"
				kopce.id=imekola1;				
				kopce.className = "fancykopce";
				kopce.style.width = "130px";
				kopce.style.height = "40px";
				kopce.innerHTML = "Купи";
				
			
				var roditel = document.getElementById("odberiavtomobil");
				
					
				li.appendChild(slika);
				
				li.appendChild(imekola);
				li.appendChild(karoserija);
				formaskriena.appendChild(imekolaskrieno);
				formaskriena.appendChild(kopce);
				li.appendChild(formaskriena);
				roditel.appendChild(li);	
				if(dalielogiran1=="ne")
					kopce.onclick = function(){
						prenasocuvanje(); };
				}	
			}
		}
  }

var barajtext = document.getElementById("barajtext");
var nepostoitext = document.getElementById("nepostoitext");
var proizvoditel = document.getElementById("odberiproizvoditel");

var tipnavozilo = document.getElementById("odberikaroserija");
if(nepostoitext!=null)
	nepostoitext.remove();
	
 var li = document.getElementsByClassName("liavtomobil");
for(var i = li.length-1; i >=0; i--){
   li[i].remove();
}

xmlhttp.open("GET","barajavtomobil.php?proizvoditel="+proizvoditel.value+"&tipnavozilo="+tipnavozilo.value+"&barajtext="+barajtext.value,true);
xmlhttp.send();
}





function prenasocuvanje(){
	
	alert("Ве молиме логирајте се ако сакате да го купите автомобилот");
	window.location= "http://localhost/makcar/logiranje.php";
	}