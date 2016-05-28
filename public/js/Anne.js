//slider
(function() {
	
	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}
	
	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( ".slider-wrapper" );
			this.slides = this.el.querySelectorAll( ".slide" );
			this.previous = this.el.querySelector( ".slider-previous" );
			this.next = this.el.querySelector( ".slider-next" );
			this.index = 0;
			this.total = this.slides.length;
			this.timer = null;
			
			this.action();
			this.stopStart();	
		},
		_slideTo: function( slide ) {
			var currentSlide = this.slides[slide];
			currentSlide.style.opacity = 1;
			
			for( var i = 0; i < this.slides.length; i++ ) {
				var slide = this.slides[i];
				if( slide !== currentSlide ) {
					slide.style.opacity = 0;
				}
			}
		},
		action: function() {
			var self = this;
			self.timer = setInterval(function() {
				self.index++;
				if( self.index == self.slides.length ) {
					self.index = 0;
				}
				self._slideTo( self.index );
				
			}, 3000);
		},
		stopStart: function() {
			var self = this;
			self.el.addEventListener( "mouseover", function() {
				clearInterval( self.timer );
				self.timer = null;
				
			}, false);
			self.el.addEventListener( "mouseout", function() {
				self.action();
				
			}, false);
		}		
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		
		var slider = new Slideshow( "#main-slider" );
	});
	
})();

//smooth scroll
jQuery(document).ready(function($) {
 
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
	});
});

//fade-in
$(document).ready(function() {
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){                
                $(this).animate({'opacity':'1'},1000);                    
            }            
        });     
    });    
});

//munculin menu
function pang(lala)
{
	if(lala=="1")
	{
	    $("#menu-cin").fadeIn("slow");

	    // $("#menu-cin").hide("slow");
	    $("#menu-cup").hide("slow");
	    $("#menu-don").hide("slow");
	    $("#menu-mac").hide("slow");
	    $("#menu-muf").hide("slow");
	}
	else if(lala=="2")
	{
	    $("#menu-cup").fadeIn("slow");

	    $("#menu-cin").hide("slow");
	    // $("#menu-cup").hide("slow");
	    $("#menu-don").hide("slow");
	    $("#menu-mac").hide("slow");
	    $("#menu-muf").hide("slow");
	}
	else if(lala=="3")
	{
	    $("#menu-don").fadeIn("slow");

	    $("#menu-cin").hide("slow");
	    $("#menu-cup").hide("slow");
	    // $("#menu-don").hide("slow");
	    $("#menu-mac").hide("slow");
	    $("#menu-muf").hide("slow");
	}
	else if(lala=="4")
	{
	    $("#menu-mac").fadeIn("slow");

	    $("#menu-cin").hide("slow");
	    $("#menu-cup").hide("slow");
	    $("#menu-don").hide("slow");
	    // $("#menu-mac").hide("slow");
	    $("#menu-muf").hide("slow");
	}
	else if(lala=="5")
	{
	    $("#menu-muf").fadeIn("slow");

	    $("#menu-cin").hide("slow");
	    $("#menu-cup").hide("slow");
	    $("#menu-don").hide("slow");
	    $("#menu-mac").hide("slow");
	    // $("#menu-muf").hide("slow");
	}
}

function adm(lala)
{
	if(lala=="1")
	{
	    $("#admcin").fadeIn("slow");

	    // $("#admcin").hide("slow");
	    $("#admcup").hide("slow");
	    $("#admdon").hide("slow");
	    $("#admmac").hide("slow");
	    $("#admmuf").hide("slow");
	}
	else if(lala=="2")
	{
	    $("#admcup").fadeIn("slow");

	    $("#admcin").hide("slow");
	    // $("#admcup").hide("slow");
	    $("#admdon").hide("slow");
	    $("#admmac").hide("slow");
	    $("#admmuf").hide("slow");
	}
	else if(lala=="3")
	{
	    $("#admdon").fadeIn("slow");

	    $("#admcin").hide("slow");
	    $("#admcup").hide("slow");
	    // $("#admdon").hide("slow");
	    $("#admmac").hide("slow");
	    $("#admmuf").hide("slow");
	}
	else if(lala=="4")
	{
	    $("#admmac").fadeIn("slow");

	    $("#admcin").hide("slow");
	    $("#admcup").hide("slow");
	    $("#admdon").hide("slow");
	    // $("#admmac").hide("slow");
	    $("#admmuf").hide("slow");
	}
	else if(lala=="5")
	{
	    $("#admmuf").fadeIn("slow");

	    $("#admcin").hide("slow");
	    $("#admcup").hide("slow");
	    $("#admdon").hide("slow");
	    $("#admmac").hide("slow");
	    // $("#admmuf").hide("slow");
	}
}

// IMAGE HOLDER

$(document).ready(function() {
    $("#UploadFileField").on('change', function() {
      //Get count of selected files
      var countFiles = $(this)[0].files.length;
      var imgPath = $(this)[0].value;
      var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
      var image_holder = $("#image-holder");
      image_holder.empty();
      if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
        if (typeof(FileReader) != "undefined") {
          //loop for each file selected for uploaded.
          for (var i = 0; i < countFiles; i++) 
          {
            var reader = new FileReader();
            reader.onload = function(e) {
              $("<img />", {
                "src": e.target.result,
                "class": "thumb-image"
              }).appendTo(image_holder);
            }
            image_holder.show();
            reader.readAsDataURL($(this)[0].files[i]);
          }
        } else {
          alert("This browser does not support FileReader.");
        }
      } else {
        alert("Pls select only images");
      }
    });
  });