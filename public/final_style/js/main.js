$(document).ready(function(){

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



	//Menu
	if ( $('.menuList').children().length > 0 ) {
		$('.menuList').find( "ul" ).hide().parent().addClass( "hasSubmenu" );
	}

	$('.hasSubmenu > a').on('click', function(){
		if($(this).next().is(':hidden'))
		{
			$(this).next().slideDown();
		}
		else{
			$(this).next().slideUp();
		}
		
	});

	//Menu close
	$('.close_menu').on('click', function(){
		$('.wizzObj').removeClass('wizz-active');
		$('.wizzlink').parent().removeClass('on');
		$('body').removeClass('wizzmenuon');
	});


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
    /*
    var config = {
        '.chosen-select'           : {},
        '.chosen-select-deselect'  : {allow_single_deselect:true},
        '.chosen-select-no-single' : {disable_search_threshold:10},
        '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
        '.chosen-select-width'     : {width:"95%"}
        }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
    */
    $(".chosen-select").chosen({disable_search_threshold: 10});
    $(".chosen-multiselect").chosen({max_selected_options: 5});



});//END document.ready();

//
(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);


