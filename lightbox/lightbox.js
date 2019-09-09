"use strict";

jQuery.fn.lightbox = function(){
console.log(this); //this enthält die Parameter, die aus gallery.js geladen werden


var $overlay = $('<div id="overlay"></div>'); // div oder tag (img) in einem DOM Element speichern
	var $image = $("<img>");// DOM ELement auf Bild machen, geht auch mit: let overlay= $.parseHTML ("<img>");
    

	$overlay.append($image); //Image einfügen in das Overlay


	$("body").append($overlay);//Overlay über den ganzen Bodyeinfügen

  
 
    $("#photo-gallery a").click( function(event) { //Wenn ein Bild in der Fotogallerie geklickt wird -> Url des Bildes in Variable abspeichern
	event.preventDefault(); //nicht dem hinterlegten Link folgen
    var imageLocation = $(this).attr("href");
	let idimage = $(this).attr("id");
	if (idimage == "men"){
		$('#overlay img').css('marginTop', '40%');
	};
    
    $image.attr("src", imageLocation); //Auf Attribute des DOM Elementes zugreiffen und setzen

    //Overlay anzeigen
    $overlay.show();
  } );

	/*Verlassen der Vergösserung, Klick oder Escape*/
  $("#overlay").click(function() {
    $( "#overlay" ).hide();
    let idimage = $("#photo-gallery a").attr("id");
	    if (idimage = "men") {
		$('#overlay img').css('marginTop', '10%');
        }
   
    
  });

  $(document).keydown(function(event){ /* $(document) ist ein jQuery Objekt, ohne $ nur die Funktion der DOM zugänglich */
    if(event.key == "Escape"){
    $( "#overlay" ).hide();
    }
    let idimage = $("#photo-gallery a").attr("id");
    if (idimage = "men"){
        $('#overlay img').css('marginTop', '10%');
    }
   });

   return this; //Damit Method Chaining möglich ist, über gallery.js
};
