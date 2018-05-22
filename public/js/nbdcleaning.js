// index view more 
$(document).ready(function(){
    $('.indexaboutus .leftarticle article .viewmore').click(function(){
        if(
		$('.indexaboutus .leftarticle article .block').hasClass('on')){
            $('.indexaboutus .leftarticle article .block').removeClass('on');
            $('.indexaboutus .leftarticle article .viewmore').removeClass('on');
			}
        else{
			$('.indexaboutus .leftarticle article .block').addClass('on');
			$('.indexaboutus .leftarticle article .viewmore').addClass('on');
		}
    });  
});  


//loading

 $(document).ready(function(){ 
        $('.loading').fadeOut(200);
    });
	
	
//mobile menu
$(document).ready(function(){
	$('.btnmobopen').click(function(){
		$('.mobsidemenu').addClass('on');
	});
	$('.mobsidemenu .btnmobclose').click(function(){
		$('.mobsidemenu').removeClass('on');
	});
});

//service 页面手机版显示更多
$(document).ready(function(){
	$('.mobdownmore').click(function(){
		$('.mobdownmore').addClass('on');
		$('.moboprate').addClass('on');
		$('.serlistbox .block ul li').addClass('on');
	}); 
});