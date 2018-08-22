$(function(){
	/* notification timer */
    // setInterval(function(){
         setTimeout(function(){ 
             $('.note1').animate({
         	  opacity: "show",
         	  bottom: '-=500px'
         	}, {
         	  duration: "10000",
         	  easing: "easeOutBounce"
         	});
         }, 2000);
         setTimeout(function(){ 
             $('.note1').fadeOut();
             $('.note2').animate(
 				{'bottom': "10px"},{duration:"20000"}
             );        
         }, 20000); 
         // End Note1
                
         setTimeout(function(){ 
         	$('.note2').animate({
           	  opacity: "show",
           	  bottom: '-=500px'
           	}, {
           	  duration: "10000",
           	  easing: "easeOutBounce"
           	}); 

         }, 15000);
         setTimeout(function(){ 
             $('.note2').fadeOut();  
             $('.note3').animate(
     				{'bottom': "10px"},{duration:"20000"}
                 );          
         }, 30000);
 		// End Note2
 		
         setTimeout(function(){ 
         	$('.note3').animate({
             	  opacity: "show",
             	  bottom: '-=560px'
             	}, {
             	  duration: "12000",
             	  easing: "easeOutBounce"
             	});
        	}, 20000);
         setTimeout(function(){ 
             $('.note3').fadeOut();
             $('.note4').animate(
     				{'bottom': "10px"},{duration:"20000"}
                 );
         }, 40000);
 		// End Note3
 		
         setTimeout(function(){ 
         	$('.note4').animate({
             	  opacity: "show",
             	  bottom: '-=645px'
             	}, {
             	  duration: "40000",
             	  easing: "easeOutBounce"
             	});
        	}, 35000);
         setTimeout(function(){ $('.note4').fadeOut(); }, 45000);
         // End Note4
     //}, 6000);
     $('.notification .close').click(function(){
    	 $(this).parent().parent().hide("slow");
     })    
     // end notification
	/* Main-menu */
	$('.nav').hover(function(){
	    	$('.nav li').each(function(){
				if($(this).hasClass('active')){
					$(this).addClass('tmp-active').removeClass('active');
					//exit(0);
				}
	    	});
    	},function(){
			$('.nav .tmp-active').addClass('active').removeClass('tmp-active');
    	});
    	$('.sub-menu').hover(function(){        	
			$(this).parent().addClass('active');
    	},function(){
    		$(this).parent().removeClass('active');
    	});
    	$('.nav li').hover(function(){
			$('.sub-menu', this).show();
    	},function(){
    		$('.sub-menu', this).hide();
    	});
	/* Initialize datepicker */	
	$("#date_of_arrival").datepicker({
			minDate: 0,			
			dateFormat: 'yy-mm-dd',
	        numberOfMonths: 1,
	        onSelect: function(selected) {
	          $("#date_of_departure").datepicker("option","minDate", selected)
	        }
	    });
	    $("#date_of_departure").datepicker({
			minDate: 1,
			dateFormat: 'yy-mm-dd',
	        numberOfMonths: 1,
	        onSelect: function(selected) {
	           $("#date_of_arrival").datepicker("option","maxDate", selected)
	        }
	    });
	/* Promo Code */
	$('#btn_prom_code').toggle(function(){							   
		$('#promo-fields').fadeIn();
	},function(){
		$('#promo-fields').fadeOut();
	});		
	/* check focus for text access code */
	$('#access-code').focus(function(){
		if($(this).val() == 'Access Code'){$(this).val("");}
	});
	$('#access-code').blur(function(){
		if($(this).val() == ''){$(this).val("Access Code");}
	});
	/* check focus for text promotion code */
	$('#promo-code').focus(function(){
		if($(this).val() == 'Promo Code'){$(this).val("");}
	});
	$('#promo-code').blur(function(){
		if($(this).val() == ''){$(this).val("Promo Code");}
	});
	/* check focus for text iata code */
	$('#iata-number').focus(function(){
		if($(this).val() == 'IATA Number'){$(this).val("");}
	});
	$('#iata-number').blur(function(){
		if($(this).val() == ''){$(this).val("IATA Number");}
	});
	/* Navigation-menu active */
	$('#nav-left ul.parent li a').each(function(){
		var page = $(this).attr('id');
		var href = page.split('__');
		if( href[1] == $.base64.decode($('#act').val()) ){
			$('#nav-left ul.parent li').removeClass('active');
			$(this).parent().addClass('active');
			return 0;
		}
	});
});
function checkAvailable(){
	if($('#date_of_arrival').val() == "" && $('#date_of_departure').val() == ""){
		$('#date_of_arrival').addClass('outline-required');
		$('#date_of_departure').addClass('outline-required');
		//$('#date_of_arrival').focus();
	}else if($('#date_of_arrival').val() != "" && $('#date_of_departure').val() == ""){
		$('#date_of_arrival').removeClass('outline-required');
		$('#date_of_departure').addClass('outline-required');
		//$('#date_of_departure').focus();		
	}else if($('#date_of_arrival').val() == "" && $('#date_of_departure').val() != ""){
		$('#date_of_arrival').addClass('outline-required');
		$('#date_of_departure').removeClass('outline-required');
		//$('#date_of_departure').focus();		
	}else{
		$('#date_of_arrival').removeClass('outline-required');
		$('#date_of_departure').removeClass('outline-required');
		var url;
		var arrivaldate = $('#date_of_arrival').val();
		var departuredate = $('#date_of_departure').val();
		var children = $('#number_of_kid').val();
		var adult = $('#number_of_aldult').val();
		var promoCode = $('#promo-code').val();
		var accessCode = $('#access-code').val();
		var iataNumber = $('#iata-number').val();
		var promotionCode = "";
		if(accessCode == "Access Code" && promoCode == "Promo Code" && iataNumber == "IATA Number"){
			promotionCode = "";	
		}else if(accessCode != "Access Code" && promoCode == "Promo Code" && iataNumber == "IATA Number"){
			promotionCode = "&rateAccessCode=" + accessCode;	
		}else if(accessCode == "Access Code" && promoCode != "Promo Code" && iataNumber == "IATA Number"){
			promotionCode = "&Promocode=" + promoCode;	
		}else if(accessCode == "Access Code" && promoCode == "Promo Code" && iataNumber != "IATA Number"){
			promotionCode = "&iataNumber=" + iataNumber;	
		}else if(accessCode != "Access Code" && promoCode != "Promo Code" && iataNumber != "IATA Number"){
			promotionCode = "&rateAccessCode=" + accessCode + "&Promocode=" + promoCode + "&iataNumber=" + iataNumber;	
		}else if(accessCode != "Access Code" && promoCode != "Promo Code" && iataNumber == "IATA Number"){
			promotionCode = "&rateAccessCode=" + accessCode + "&Promocode=" + promoCode;	
		}else if(accessCode != "Access Code" && promoCode == "Promo Code" && iataNumber != "IATA Number"){
			promotionCode = "&rateAccessCode=" + accessCode + "&iataNumber=" + iataNumber;	
		}else if(accessCode == "Access Code" && promoCode != "Promo Code" && iataNumber != "IATA Number"){
			promotionCode = "&Promocode=" + promoCode + "&iataNumber=" + iataNumber;	
		}
		url = 'https://www.yourreservation.net/tb3/index.cfm?bf=HAKOSBEA' + '&arrivaldate=' + arrivaldate + '&departuredate=' +
			departuredate + '&adults=' + adult + "&children=" + children + promotionCode ;			 		 
		window.open(url,'_blank'); 
		document.frmFrame.city.selectedIndex=0;	
	}
}
function newsletter_signup_form(e){
	e.stopPropagation();
	var obj = $('.newsletter');
	if($(obj).parent().hasClass('active') == false){
		$(obj).parent().addClass('active');
	}else{
		$(obj).parent().removeClass('active');
	}
	if($(obj).parent().hasClass('active')){
		var base = "";
		if(typeof($('#base').val()) != "undefined"){
			base = $.base64.decode($('#base').val()) ;
		}
		$.ajax({
			type:'post',
			url: base + "newsletter-signup/index",										
			beforeSend:function(){
				$(obj).append('<span class="ajax-loading3"></span>');
			},
			success:function(data){
				$('.ajax-loading4').remove();
				$('#wrapper').prepend(data);
				//$('.newsletter-signup').fadeIn('slow');
				$('.newsletter-signup').animate({'height':'85px','opacity':1},150);
			}
		});
	}else{
		$('.newsletter-signup-overlay').remove();
	}
	
}
function newsletter_signup(e){
	var data = "";
	if($('#name').val() == ""){
		$('#name').addClass('box-required');
		$('#name').focus();
		return false;
	}else if($('#email').val() == ""){
		$('#name').removeClass('box-required');
		$('#email').addClass('box-required');
		$('#email').focus();
		return false;
	}else if(isEmail($('#email'))){
		$('#email').removeClass('box-required');
		$('.data').each(function(){
			data += $(this).attr('name') + '=' + $(this).val() + "&";
		});
		var base = "";
		if(typeof($('#base').val()) != "undefined"){
			base = $.base64.decode($('#base').val()) + "/";
		}
		$.ajax({
			type:'post',
			dataType: "json",
			url: base + "newsletter-signup/signup",	
			data:data.slice(0,-1),
			beforeSend:function(){
				$('#submit').addClass('ajax-loading3');
			},
			success:function(data){
				if(data == 1){
					$('#submit').removeClass('ajax-loading3');
					//$('.newsletter-signup').html('Signup has been successful.');
					alert('Signup has been successful.');
					$('.newsletter-signup-overlay').remove();
				}else if(data == 0){
					//$('.newsletter-signup').html('Signup failed, please try again.');
					alert('Signup failed, please try again.');
					$('.newsletter-signup-overlay').remove();
				}else if(data == "-1"){
					alert('This email already existed.');
					$('#email').focus().select();
					$('#submit').removeClass('ajax-loading3');
				}
			}
		});
		return false;
	}else{
		$('#email').addClass('box-required');
		alert('Invalide email format');
		return false;
		$('#email').focus();
	}
}
function isEmail(obj){
	var emailReg = /^([a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4})?$/;
	var emailaddressVal = $(obj).val();
	if(!emailReg.test(emailaddressVal)) {						
		return 0;
	}else{
		return 1;
	}
}