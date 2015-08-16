(function($){
     
     
     
     
     
	$(window).on('scroll',function(){
          $top=$(window).scrollTop();
        if($top>=270 && $top<=663){
        	 $('.skill-color').css('width','170px');
        }
        else{
        	 $('.skill-color').css('width','0px');
        }

	});
	$(window).on('scroll',function(){
          $top=$(window).scrollTop();
        if($top>0 && $top<578){
            $('#sidebar-ul > li').removeClass('a-index');
        	$('#li1').addClass('a-index');
          }
        if($top>=578 && $top<1156){
        	$('#sidebar-ul > li').removeClass('a-index');
        	$('#li2').addClass('a-index');
        }
        if($top>=1156 && $top<3468){
        	$('#sidebar-ul > li').removeClass('a-index');
        	$('#li3').addClass('a-index');
        }
        if($top>=3468){
        	$('#sidebar-ul > li').removeClass('a-index');
        	$('#li4').addClass('a-index');
        }

	});

$('#li1').on('click',function(){
      
	 $('body').stop().animate({scrollTop:0},500);

});
$('#li2').on('click',function(){
	
	 $('body').stop().animate({scrollTop:578},500);
	 $('#sidebar-ul > li').removeClass('a-index');
	 // $('.skill-color').css('width','170px');
     
});
$('#li3').on('click',function(){
	
	 $('body').stop().animate({scrollTop:1156},500);

});
$('#li4').on('click',function(){
	
	 $('body').stop().animate({scrollTop:4850},500);

});

$(function(){
     	var $container = $('#masonry');  
     $container.imagesLoaded( function(){  
         $container.masonry({  
             itemSelector : '.box',  
             gutterWidth : 20,  
             isAnimated: true,  
         });  
     });  
     
     });
 
     


$(".readmore").on('click',function(){
    $('#masonry').hide();
    $('#blog-detail-main').show('slow');
    $(window).scrollTop(1156);
    
    $.ajax({

             type: "GET",

             url: "admin/welcome/blog?a="+this.getAttribute('atid'),

             dataType: "json",

             success: function(data){
      
             	
             	//$('#blog-detail').innerHTML(data);
             	var xx= data.title;
             	
             	var html="";
             	// html='<h3>'+xx+'</h3>' '<img src="'+ data.img_src+">;
             	html+='<img src="'+data.img_src+'"><h3>'+xx+'</h3><span>'+data.add_time+'</span><p>'+data.content+'</p>';
             	$('#blog-detail ').html(html);
               }
                        

         });

});

$("#back-blog").on('click',function(){
    $('#masonry').show('slow');
     $('#blog-detail-main').hide();
     $(window).scrollTop(1156);
});








})(jQuery);