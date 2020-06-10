console.log('custom js is activated');


$(".dropdown-list-wrapper").click(function(e) {


	

	if(!$(this).hasClass('open'))
	{
		$(this).addClass('open');		
	}

	e.preventDefault();

});



$(document).on("click", function(event){
        var $trigger = $(".dropdown-list-wrapper");

        if($trigger !== event.target && !$trigger.has(event.target).length){


            if($trigger.hasClass('open'))
            {

            	
            	
            	$trigger.addClass('closeMenu');	

            	setTimeout(function() {

				$trigger.removeClass('open').removeClass('closeMenu');

				

            	}, 700);

            	


            }




        }            
    });




$("#mobileNavTrigger").click(function(e) {

	



	$('.top-nav-wrapper').toggleClass('mobile-navigation-visible')

	e.preventDefault();




});


$(window).scroll(function(e) {


    var headerNavBar = $('#top-header');

    var pageYoffset = $(this)[0].pageYOffset;

    
    if( pageYoffset > 50 )
    {

        headerNavBar.addClass('pinTop');
        
    }

    else {

        headerNavBar.removeClass('pinTop');

        
    }

    

});



$('#review_indicators li').click(function(e) {


    var testoCanvas = $("#testomonials_canvas");

    console.log();


    var slideIndex = $(this).attr("data-reviewScroll")

    $('#review_indicators li.active').removeClass('active');

    $(this).addClass('active').siblings().remove('active');




    e.preventDefault();


    if(slideIndex == 1)
    {
        var slideValue = (0) * -1 + 'px';
    }

    else {

        var slideValue = (slideIndex * 150) * -1 + 'px';

    }

    /*
    testoCanvas.addClass('scrollup_'+slideIndex);
    */
    
    testoCanvas.css('transform', 'translateY(' + slideValue + ')');
    

});


$(".actionConrolls a.actionItem").click(function(e) {


e.preventDefault();

var direction = null;


var productCanvasWrapper  = $('#product-canvas-wrapper');

var productSlidePosition = parseInt(productCanvasWrapper.attr("data-slideIndex"));





var productItems = $(this).parents().find('.product_itemBox');

var itemLength = productItems.length;


if($(this).hasClass('previous'))
{
    direction = 'previous';
}
else {

    direction = 'next';

}

       
    if(direction == 'next' && (productSlidePosition < itemLength))
    {
        
        productCanvasWrapper.attr("data-slideIndex", productSlidePosition + 1);


        productSlideValue = (productSlidePosition * 400) * - 1 + 'px';


        console.log('slidevalid ' + productSlideValue);

        
        productCanvasWrapper.css('transform', 'translateX(' + productSlideValue + ')');
        

    }

    else if (direction == 'previous' && (productSlidePosition != 1 ))
    {

        productCanvasWrapper.attr("data-slideIndex", productSlidePosition - 1);


        

        var currentTranformValue = parseInt(productCanvasWrapper.css("transform").split(',')[4]);

        console.log();


        productSlideValue = (currentTranformValue + 400) + 'px';

        productCanvasWrapper.css('transform', 'translateX(' + productSlideValue + ')');


    }
    
       

       


})

/*$(document).ready(function() {
    $(".toggle").click(function() {
      var elem = $(".toggle").text();
      if (elem == "Read More") {
        //Stuff to do when btn is in the read more state
        $(".toggle").text("Read Less");
        $(".product_description_detail_text").slideDown();
      } else {
        //Stuff to do when btn is in the read less state
        $(".toggle").text("Read More");
        $(".product_description_detail_text").slideUp();
      }
    });
  });*/

// Add click event dynamically
/*$(document).on("click", ".toggle-text-button", function() {

    // Check if text is more or less
    if ($(this).text() == "Read More") {
  
      // Change link text
      $(this).text("Read Less");
      
      // Travel up DOM tree to parent, then find any children with CLASS .toggle-text and slide down
      $(this).parent().children(".toggle-text").slideDown();
      //console.log($(this).parent().children(".toggle-text-sub").text().length);
      $(this).parent().css('height',450);
      
    } else {
  
  
      // Change link text
      $(this).text("Read More");
      
      // Travel up DOM tree to parent, then find any children with CLASS .toggle-text and slide up 
      $(this).parent().children(".toggle-text").slideUp();
      $(this).parent().css('height',200);
      
    }
    
  });*/

//from https://www.freakyjolly.com/custom-jquery-function-read-more-and-read-less/#.XtoQPTczZuQ
// to control read more on products page 
$(document).ready(function() {
    AddReadMore();      
});

function AddReadMore() {
    //This limit you can set after how much characters you want to show Read More.
    var carLmt = 80;
    // Text to show when text is collapsed
    var readMoreTxt = " ... Read More";
    // Text to show when text is expanded
    var readLessTxt = " Read Less";


    //Traverse all selectors with this class and manupulate HTML part to show Read More
    $(".addReadMore").each(function() {
        if ($(this).find(".firstSec").length)
            return;

        var allstr = $(this).text();
        if (allstr.length > carLmt) {
            var firstSet = allstr.substring(0, carLmt);
            var secdHalf = allstr.substring(carLmt, allstr.length);
            var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
            $(this).html(strtoadd);
        }

    });
    //Read More and Read Less Click Event binding
    $(document).on("click", ".readMore,.readLess", function() {
        $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
        //$(this).parent().parent().css('height',450);
    });

    $(document).on("click", ".readMore", function() {
        //$(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
        $(this).parent().parent().css('min-height',350);
        $(this).parent().parent().css('height','auto');
    });

    $(document).on("click", ".readLess", function() {
        //$(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
        $(this).parent().parent().css('height',125);
    });
}




/*
trigger element
id="reviews"

Animate scroll element
#testomonials_canvas
*/



var testomonialCanvas = $("#testomonials_canvas");

var controller = new ScrollMagic.Controller();

var tl = new TimelineMax();

tl.to(testomonialCanvas, 10, { y : '-70%', opacity: 1});

var scene = new ScrollMagic.Scene({
    triggerElement: '#reviews',
    triggerHook: 0.5
  })
    .setTween(tl)
    /*
    .addIndicators({
      name : "Testomonials",  
      colorTrigger: "red",
      colorStart: "blue",
      colorEnd: "green",
      indent: 40
    })
    */
    .addTo(controller);


$('.colorBall').each(function(idx, ele) {


var targetEle =  $(ele);

var colorHEx = targetEle.attr('data-bgColor');

    targetEle.css({backgroundColor: colorHEx});

});