
	
	$(document).ready(function ( ) {

    
     var flag = false;
     var scroll;

     $(window).scroll(function ( ) {

          scroll = $(window).scrollTop();

          if(scroll > 90){
               if(!flag){

                $('header').css({"height":"83px","background-color":"#bd1c21"});
                flag = true;
                
                $('#logotipo').css({"height":"85px","width":"190px"});
                flag = true;

                $('.menu').css({"height":"auto","padding-top": "2px","top": "82px"});
                flag = true;


                 $('header label').css({
				  "margin-top":"27px",
                  "margin-right":"10px", 
                  "font-size": "27px"
                 			
              });
				flag=true;
               }
          }else{
          	  if(flag){

               $("header").css({"height":"90px","background":"none"});
               flag = false;
               $('#logotipo').css({"height":"89px","width":"220px"});
               flag = false;
               $('.menu').css({"height":"auto","padding-top": "5px","top": "89px"});
               flag = false;

                $('header label').css({
				        "margin-top":"32px",
                        "margin-right":"10px",
                        "font-size": "29px"
                 			
                   });
				  flag=false;

          	  }
          }




     });

    
/*77777777777777777777777  scscc*/
   $('.flecha').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 2000);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.flecha').fadeIn();
		} else {
			$('.flecha').fadeOut();
		}
	});

$("#sr").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".deslizarservicios").offset().top
    }, 2000);
});
$("#sr2").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".deslizarservicios").offset().top
    }, 2000);
});        
$("#pp").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".deslizarplanes").offset().top
    }, 2000);
});

$("#c").click(function () {
   
    $('html,body').animate({
        scrollTop: $(".deslizarcontacto").offset().top
    }, 2000);
});
    
        
        $('.icon').click(function(){
               $('.icon').toggleClass('active');
           });
        
        
        
        
});

     
