$(document).ready(function(){
    
    /*-- start smooth scroll --*/
    
    
    $("#services").click(function(){
        $("html,body").animate({
            scrollTop:$(".services").offset().top
        },1000)
    })
    
    $("#why").click(function(){
        $("html,body").animate({
            scrollTop:$(".why-we").offset().top
        },1000)
    })
    
    $("#projects").click(function(){
        $("html,body").animate({
            scrollTop:$(".our-projects").offset().top
        },1000)
    })
    
     $("#contact").click(function(){
        $("html,body").animate({
            scrollTop:$(".contact").offset().top
        },1000,function(){$(".menu-phone").animate({left:"-335px"})})
        
         
         
    })
    
    $("#up").click(function(){
        $("html,body").animate({
            scrollTop:$(".navbar").offset().top
        },1000)
    })
    
    
    
    /*-- End smooth scroll --*/
    /*-- start menu close --*/
    
    
    $(".fa-times").click(function(){
        $(".menu-phone").animate({left:"-335px"},700)
    })
    
    $(".fa-bars").click(function(){
        $(".menu-phone").animate({left:"0"},700)
    })
    
    
    
    /*-- End menu close --*/
    /*-- start animate --*/
    
    
     $(window).scroll(function(){
        var x=$(window).scrollTop();
        console.log(x) 
         
        var y=$(window).width();
         
        
         if(y > 900){
         
            if(x >= 440){
                $(".services .col-lg-4 .item").addClass('animated rollIn delay-2s')
            }

            if(x >= 500){ 
                $(".services .up").fadeIn().addClass('animated fadeInDown delay-2s')
            }

            if(x < 500){ 
                $(".services .up").fadeOut()
            } 

            if(x >= 1135){ 
                $(".why-we .col-lg-7 ").addClass('animated fadeInLeft delay-500s')    
                $(".why-we .col-lg-5 ul li:eq(0)").addClass('animated fadeInDown ')  
                $(".why-we .col-lg-5 ul li:eq(1)").addClass('animated fadeInDown delay-100s')
                $(".why-we .col-lg-5 ul li:eq(2)").addClass('animated fadeInDown delay-300s')  
                $(".why-we .col-lg-5 ul li:eq(3)").addClass('animated fadeInDown delay-500s')
                $(".why-we .col-lg-5 ul li:eq(4)").addClass('animated fadeInDown delay-700s')
            }

            if(x >= 1455){ 
                $(".our-projects .col-lg-12").addClass('animated fadeInDown delay-2s')  
                $(".our-projects .col-lg-4 ").addClass('animated fadeInUp delay-2s')
 }

            if(x >= 2082){ 
                $(".team .col-lg-6 img").addClass('animated fadeInLeft delay-2s')  
                $(".team .col-lg-6 p").addClass('animated fadeInRight delay-2s')
 }
         }
         
         
         if(y < 900){
             
             if(x >= 600){
                $(".services .col-lg-4 .item").addClass('animated rollIn delay-2s')
            }
             
              if(x >= 700){ 
                $(".services .up").fadeIn().addClass('animated fadeInDown delay-2s')
            }

            if(x < 700){ 
                $(".services .up").fadeOut()
            } 
             
            if(x >= 1588){ 
                $(".why-we .col-lg-7 ").addClass('animated fadeInLeft delay-500s')    
                $(".why-we .col-lg-5 ul li:eq(0)").addClass('animated fadeInDown ')  
                $(".why-we .col-lg-5 ul li:eq(1)").addClass('animated fadeInDown delay-100s')
                $(".why-we .col-lg-5 ul li:eq(2)").addClass('animated fadeInDown delay-300s')  
                $(".why-we .col-lg-5 ul li:eq(3)").addClass('animated fadeInDown delay-500s')
                $(".why-we .col-lg-5 ul li:eq(4)").addClass('animated fadeInDown delay-700s')
            }
             
            if(x >= 2300){ 
                $(".our-projects .col-lg-12").addClass('animated fadeInDown delay-2s')  
                $(".our-projects .col-lg-4 ").addClass('animated fadeInUp delay-2s')
            }
             
            if(x >=3300){ 
                $(".team .col-lg-6 img").addClass('animated fadeInLeft delay-2s')  
                $(".team .col-lg-6 p").addClass('animated fadeInRight delay-2s')
            }

         }
        
     })
    
    
    /*-- End animate --*/
    /*-- header carsoul --*/
    
    
    $('.carousel').carousel()
    $('.carousel').carousel({
      interval: 2000
    })
    
})