var radiovrednost = 0;
var staklavrednost = 0;
var sedistavrednost = 0;
var bojavrednost = 0;
var trkalavrednost = 0;
var svetlavrednost = 0;
function azurirajcena(sender){
var momentalnacena = document.getElementById("momentalnacena");
var cenaint = parseInt(momentalnacena.value.split(' ')[1]);
if(sender.type =="radio"){
	cenaint-=radiovrednost;
	radiovrednost = parseInt(sender.value.split(' ')[5]);
	cenaint+=radiovrednost;
	}
else if(sender.type =="checkbox"){
	var checkcena = parseInt(sender.value.split(' ')[1]);
	if(sender.checked)
		cenaint+= checkcena;
	else cenaint-= checkcena;
	}
else {
	var selectcena = 0;
			if(sender.id == "trkala"){
				cenaint-=trkalavrednost;
				trkalavrednost = 0;
				}
			else if(sender.id == "stakla"){
			cenaint-=staklavrednost;
			staklavrednost = 0;
			}
			else if(sender.id == "sedista"){
			cenaint-=sedistavrednost;
			sedistavrednost = 0;
			}
			else if(sender.id == "boja"){
			cenaint-=bojavrednost;
			bojavrednost = 0;
			}
			else {cenaint-=svetlavrednost;
				svetlavrednost = 0;
			}
	
	
	
	if(sender.value!="neodbrano"){
		if(sender.id == "trkala"){
			selectcena = trkalavrednost = parseInt(sender.value.split(' ')[2]);
			}
			
		else { 
			selectcena = parseInt(sender.value.split(' ')[1]);
			if(sender.id == "stakla")
			staklavrednost = selectcena;
			else if(sender.id == "sedista")
			sedistavrednost = selectcena;
			else if(sender.id == "boja")
			bojavrednost = selectcena;
			else svetlavrednost = selectcena;
			
		}
		
	}
		cenaint+=selectcena;
	}
momentalnacena.value = "Цена: "+ cenaint+" €";
	}




function kupisokarticka(){
var greska;


if(document.getElementById("brojnakarticka").value.length!=16){
	document.getElementById("brojnakartickainfo").innerHTML = "*";
	return;
	}
else {
	document.getElementById("brojnakartickainfo").innerHTML = "";
	}
if(document.getElementById("ime").value==""){
	
	document.getElementById("imeinfo").innerHTML = "*";
	return;
	}
else {
	document.getElementById("imeinfo").innerHTML = "";
	}
if(document.getElementById("prezime").value==""){
	document.getElementById("prezimeinfo").innerHTML="*";
	return;
}
else {
	document.getElementById("prezimeinfo").innerHTML = "";
	}
if(document.getElementById("cvv2cvc2").value.length!=3){
	
	document.getElementById("cvv2cvc2info").innerHTML="*";
	return;
	}
else {
	
	document.getElementById("cvv2cvc2info").innerHTML = "";
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
	if(rezultat[0].childNodes[0].nodeValue=="ok")
		kupisokartickaok();
	else alert("Внесените информации не се во ред или немате доволно средства на картичката");
	}
	
  }

var brojnakarticka = document.getElementById("brojnakarticka").value;
var ime = document.getElementById("ime").value;
var prezime = document.getElementById("prezime").value;
var mesecistekuvanje = document.getElementById("mesecistekuvanje").value;
var godinaistekuvanje = document.getElementById("godinaistekuvanje").value;
var tipnakarticka = document.getElementById("tipnakarticka").value;
var cvv2cvc2 = document.getElementById("cvv2cvc2").value;
var cena = document.getElementById("cena").value;
xmlhttp.open("GET","kartickaproverkabaza.php?povikuvac=proverka&brojnakarticka="+brojnakarticka+"&ime="+ime+"&prezime="+prezime+"&mesecistekuvanje="+mesecistekuvanje+"&godinaistekuvanje="+godinaistekuvanje+"&cvv2cvc2="+cvv2cvc2+"&cena="+cena+"&tipnakarticka="+tipnakarticka,true);
xmlhttp.send();
}	
	
function kupisokartickaok(){
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
	for(var i=0;i<rezultat.length;i++)
	if(rezultat[0].childNodes[0].nodeValue=="ok"){
		alert("Вашиот автомобил ќе биде испорачан на вашата адреса.");
		window.location.replace("http://localhost/makcar/odberiavtomobil.php?proizvoditel=site");
		}
	else alert("Грешка");
	}
  }
var aaa = document.getElementsByClassName("kupenavtomobil");
var string = "kartickaproverkabaza.php?povikuvac=kupuvanje";
for(var i=0;i<aaa.length;i++)
	string+= "&"+aaa[i].id+"="+aaa[i].value;


brojnakarticka = document.getElementById("brojnakarticka").value;
string+="&brojnakarticka="+brojnakarticka;

xmlhttp.open("GET",string,true);
xmlhttp.send();
  }
	
	

	
	
	
	
