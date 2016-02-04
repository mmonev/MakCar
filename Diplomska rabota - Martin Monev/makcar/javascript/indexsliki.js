var nizasliki = Array("http://localhost/makcar/sliki/pocetna/audi.png","http://localhost/makcar/sliki/pocetna/skoda.png","http://localhost/makcar/sliki/pocetna/vw.png","http://localhost/makcar/sliki/pocetna/ford.jpg","http://localhost/makcar/sliki/pocetna/seat.png");
var i = 0;
var z = 1;


function promenanaslika(){
	i++;
		if(i==nizasliki.length)
		i=0;
	var img = document.getElementById("indexslika");
	img.src = nizasliki[i];
	fadein();
	
}
function fadeout(){
	var img = document.getElementById("indexslika");
	img.style.opacity = z;
	z-=0.1;
	if(z>0.1){
		setTimeout("fadeout()",50);
		
		
	}
	else {
		promenanaslika();
		}
	
}
function fadein(){
	var img = document.getElementById("indexslika");
	img.style.opacity = z;
	z+=0.1;
	if(z<1.1)
		setTimeout("fadein()",50);
	else {
		setTimeout("fadeout()",3000);
		}	
}
