var slideItem = 0;

window.onload = function() {
	setInterval(passarSlide, 2000);
	var slidetamanho = document.getElementById("slideshow").offsetWidth;
	var objs = document.getElementsByClassName("slide");
	for ( var i in objs ) {
		objs[i].style.width = slidetamanho;
	}
	
}

function passarSlide() {
	var slidewidth= document.getElementById("slideshow").offsetWidth;
	document.getElementsByClassName("imarcador")[slideItem].style.backgroundColor = "#CCC";
	if ( slideItem >= 3 ) {
		slideItem = 0;
	}
	else {
		slideItem++;
	}
	document.getElementsByClassName("slideshowarea")[0].style.marginLeft = "-" + (slidewidth * slideItem)+"px";
	document.getElementsByClassName("imarcador")[slideItem].style.backgroundColor = "#777";
	
}

function mudarSlide(posSlide) {
	
	document.getElementsByClassName("imarcador")[slideItem].style.backgroundColor = "#ccc";

	slideItem = posSlide;
	var slidewidth= document.getElementById("slideshow").offsetWidth;
	document.getElementsByClassName("slideshowarea")[0].style.marginLeft = "-" + (slidewidth * slideItem)+"px";
	document.getElementsByClassName("imarcador")[slideItem].style.backgroundColor = "#777";
	
}
