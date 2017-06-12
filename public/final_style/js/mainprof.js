$(document).ready(function(){

	//Search
	
	$('#btn-search').on('click', function(e) {
		e.preventDefault();
		$('#search').animate({width: 'toggle'},500);
	});
	


	//Display Search
	$('.wizzlink').click(function(event){
		event.stopPropagation();
		$(this).parent().addClass('on');
		var wizz = $(this).data('wizz');
		$('#' + wizz).addClass('wizz-active');
	});

	$('.wizzObj').click(function(event){
		event.stopPropagation();
	});	

	$('body').click( function(){
			$('.wizzObj').removeClass('wizz-active');
			$('.wizzlink').parent().removeClass('on')
	});

	$('.custom-menu-btn').click(function(event){
		$('body').addClass('wizzmenuon');
	});


	//edit
	$('.content-box .modifier').click(function(event){
		if($(this).closest('.content-box').hasClass('content-editable')){
			$(this).removeClass('removeModify').text('Modifier');
			$(this).closest('.content-box').removeClass('content-editable');
		}
		else
		{		
			$(this).addClass('removeModify').text('Fermer');
			$(this).closest('.content-box').addClass('content-editable');
		}
	});

	$('.content-box .cancel-btn').click(function(event){
				$('.content-box .modifier').removeClass('removeModify').text('Modifier');
				$(this).closest('.content-box').removeClass('content-editable');

	});
	//edit main
	$('.modifier-main').click(function(event){
		$('.content-box .modifier').removeClass('removeModify').text('Modifier');
		$('.content-box .modifier').removeClass('content-editable');
		if($(this).hasClass('content-main-editable-added')){

			$(this).removeClass('content-main-editable-added').text('Modifier votre profil');
			$(this).closest('.wizztabPanel').removeClass('content-main-editable');
			$('.content-box .modifier').removeClass('removeModify').text('Modifier');
			$('.content-box').removeClass('content-editable');
		}
		else
		{		
			$(this).addClass('content-main-editable-added').text('Fermer');
			$(this).closest('.wizztabPanel').addClass('content-main-editable');
		}
	});
	$('.content-main-input .cancel-btn').click(function(event){
		$('.content-box .modifier').removeClass('removeModify').text('Modifier');
		$('.content-box').removeClass('content-editable');
		$('.modifier-main').removeClass('content-main-editable-added').text('Modifier votre profil');
		$('.wizztabPanel').removeClass('content-main-editable');

	});


	//Modal content
	$('.wizzlink-model').click(function(event){
		$('.wizzObj-model').removeClass('wizz-allmodel-active');
		$('.wizzObj-model').removeClass('wizz-model-active');
		var wizz = $(this).data('wizzmodel');
		if(wizz =='full_profile'){
			$('#' + wizz).addClass('wizz-allmodel-active');
		}
		else
		{			
			$('#' + wizz).addClass('wizz-model-active');
		}
	});


	//Menu
	if ( $('.menuList').children().length > 0 ) {
		$('.menuList').find( "ul" ).hide().parent().addClass( "hasSubmenu" );
	}

	$('.hasSubmenu > a').on('click', function(){
		//$('.hasSubmenu > a').removeClass('active').next().slideUp();
		if($(this).next().is(':hidden'))
		{
			$(this).addClass('active').next().slideDown();
		}
		else{
			$(this).removeClass('active').next().slideUp();
		}
		
	});

	//Menu close
	$('.close_menu').on('click', function(){
		$('.wizzObj').removeClass('wizz-active');
		$('.wizzlink').parent().removeClass('on');
		//$('body').removeClass('wizzmenuon');
		setTimeout(test,500);
	});
	function test(){
	    $('body').removeClass('wizzmenuon');
	  }


	var nav = $('.headerMain');
	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 136) {
			nav.addClass("floatingMenu");
		} else {
			nav.removeClass("floatingMenu");
		}
	});


	//custom tab
	$('.wizztablink').click(function(event){
		$('.wizztabPanel').removeClass('current-tab');
		$('.wizztablink').parent().removeClass('current');
		$(this).parent().addClass('current');
		var wizz = $(this).data('wizztab');
		$('#' + wizz).addClass('current-tab');
	});
	


	//custom checkbox 
	$('.i-checks').iCheck({
	    checkboxClass: 'icheckbox_square-green',
	    radioClass: 'iradio_square-green'
	});


	// Datepicker
	$('.datepicker').datepicker({
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
    });


    //Chosen
    $(".chosen-select").chosen({disable_search_threshold: 10});
    $(".chosen-multiselect").chosen({max_selected_options: 5});

    //Password meter
    jQuery(function($) { $('#pass').pwstrength(); });

    //
    $("#pass2").on('blur', function(){
	  	var inv_nrs;
    	inv_nrs = document.getElementsByName('pass1')[0].value;
    	inv_nrs2 = document.getElementsByName('pass2')[0].value;
    	if(inv_nrs == inv_nrs2){
    		if(inv_nrs2 == '') {
    			$(".progress-outer .progress-bar").removeClass('progress-bar-success').css({ width: "0%"}).children().hide();
    			
    		}
    		else{
    			$(".progress-outer .progress-bar").addClass('progress-bar-success').css({ width: "100%"}).children().show();
    		}

    	}
    	else
    	{
    		$(".progress-outer .progress-bar").removeClass('progress-bar-success').css({ width: "0%"}).children().hide();
    	}
	});



});//END document.ready();

//
(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);