/* all click
*/
    $(function() {
        $('#simple-test-link').frankieModal({closeButton:'#close-button'});
        $('#wclosebutton-test').frankieModal({closeButton:'#close-button-1'});
        $('#seconnecter').frankieModal({closeButton:'#close-button-1'});
        $('#se_connecter').frankieModal({closeButton:'#close-button-1'});
        $('#btn42').frankieModal({closeButton:'#close-button-1'});
        $('#wclosebutton-test-2').frankieModal({closeButton:'#close-button-2'});
        $('#inscr_request').frankieModal({closeButton:'#close-button'});
        $('#login_request').frankieModal({closeButton:'#close-button-1'});
        $(".rejoindre_request").frankieModal({closeButton:'#close-button-1'});
        $(".rejoindre_request1").frankieModal({closeButton:'#close-button-4'});
        
        $(".rejoindre_request2").frankieModal({closeButton:'#close-button-4'});
        $("#votre_login").frankieModal({closeButton:'#close-button-4'});
    });

$(function(){	
    var cubuk_seviye = $(document).scrollTop();
    var header_yuksekligi = $('.yapiskan').outerHeight();

    $(window).scroll(function() {
        var kaydirma_cubugu = $(document).scrollTop();

        if (kaydirma_cubugu > header_yuksekligi){$('.yapiskan').addClass('gizle');} 
        else {$('.yapiskan').removeClass('gizle');}

        if (kaydirma_cubugu > cubuk_seviye){$('.yapiskan').removeClass('sabit');} 
        else {$('.yapiskan').addClass('sabit');}				

        cubuk_seviye = $(document).scrollTop();	
     });
});

 
    $(".close_menu").click(function() {

        $(".body").css({"overflow": "scroll"});
    });

    $(".custom-menu-btn").click(function() {

        $(".body").css({"overflow": "hidden"});
    });





        $("#form_reset").hide();
        $("#renitialiser_request").click(function() {

            $("#form2").hide();
            $("#form_reset").show();
        });

        $("#form_reset").validate({
            errorElement: 'span',
            errorClass: 'help-inline',
            rules: {

                email:{ required: true,
                    email: true
                }
            },
            messages: {
                email: "Format d'e-mail incorrect"

            }
        });

        $('#btn_reset').click(function() {

            if($("#form_reset").valid()){
                var email = $('#email_reset_request').val();
                var form = $('#form_reset');
                $.ajax( {
                    type: "POST",
                    url: form.attr( 'action' ),
                    data: form.serialize(),
                    success: function( response ) {
                        var res = response.toString();


                        if (res == '"passwords.sent"') {
                         


                            $('#emil-reset').text(email);
                            $('#error_reset').addClass('hidden');
                            $('#succ_reset').removeClass('hidden');
                            setTimeout(
                                    function()
                                    {
                                        location.href = '/';
                                        //location.reload();
                                    }, 5000);





                        }
                        else {

                            $('#error_reset').removeClass('hidden');
                            $('#succ_reset').addClass('hidden');
                        }

                    },
                    error:function( response ) {

                    }
                } );

            }

        });

        var base_url = document.location.origin;



        $("#form2").validate({
            errorElement: 'span',
            errorClass: 'help-inline',
            rules: {

                email:{ required: true,
                    email: true
                },


                password: {required: true}
            },
            messages: {
                email: "Format d'e-mail incorrect",

                password: 'Mot de passe obligatoire'

            }
        });
        $('#btn').click(function() {
            var email = $("#email1").val();


            $("#form1").validate({
                errorElement: 'span',
                errorClass: 'help-inline',
                rules: {
                    name: "required",
                    username: "required",
                    email:{ required: true,
                        email: true,

                    },
                    pays: "required",

                    password: {required: true,minlength: 8},
                    password_confirmation: {

                        equalTo: "#password"
                    }
                },
                messages: {
                    email: "Format d'e-mail incorrect",
                    name: "Ce champ est obligatoire",
                    username: "Ce champ est obligatoire",
                    pays: "Ce champ est obligatoire",
                    password: 'Mot de passe obligatoire, il doit contenir au moins 8 caractères',
                    password_confirmation:"Les mots de passe ne sont pas identiques!"

                }
            });





            if($("#form1").valid()){
                var form = $('#form1');
                $.ajax( {
                    type: "POST",
                    url: form.attr( 'action' ),
                    data: form.serialize(),
                    dataType: 'json',
                    success: function( response ) {

                        $("#nomR").text(response['name']);
                        $("#prenomR").text(response['prenom']);

                        $("#test").hide();
                        $('#wclosebutton-test-2').trigger("click");

                        $("#mydiv").load(location.href + " #mydiv");
                        $("#mydiv1").load(location.href + " #mydiv1");
                          setTimeout(
                                    function()
                                    {
                                      location.reload();
                                    }, 5000);
                      


                    },
                    error:function( response ) {

                        $("#email_exist").removeClass("hidden");
                    }
                } );

            }

        });

        $('#btn2').click(function() {

            if($("#form2").valid()){
                var form = $('#form2');
                $.ajax( {
                    type: "POST",
                    url: form.attr( 'action' ),
                    data: form.serialize(),
                    success: function( response ) {

                        location.reload();

                    },
                    error:function( response ) {
                        
                       
                        $("#error_login").removeClass("hidden");
                    }
                } );

            }

        });

        $('#wclosebutton-test').click(function() {

            $("#form2").show();
            $("#form_reset").hide();



        });
        $('#inscr_request').click(function() {

            $("#test-2").hide();
            $("#form2").show();
            $("#form_reset").hide();



        });
        $('#login_request').click(function() {

            $("#test").hide();


        });

        

        $("#form_shorten").validate({
            errorElement: 'span',
            errorClass: 'help-inline',
            rules: {

                url:{ required: true, url: true},

            },
            messages: {
                url: "invalide url!"

            }
        });
  $('#btn_shorten').click(function() {
 
     if( $("#form_shorten").valid()){
         
               var form = $('#form_shorten');
                $.ajax( {
                    type: "POST",
                    url: base_url+'/raccourcir_application/public/shorten',
                    data: form.serialize(),
                    success: function( response ) {
                       
                        if(response.toString()=='existe'){
                            
                            $("#error_message").text("url existe déjà");
                            $("#error_message").removeClass("hidden");
                        }else if(response.toString()=='limte'){
                            $("#error_message").text("vous avez atteint le nombre limite 10");
                            $("#error_message").removeClass("hidden");
                        }
                        else if(response.toString()=='error'){
                            $("#error_message").text("vérifiez votre url");
                            $("#error_message").removeClass("hidden");
                        }else{
                            $("#error_message").text("");
                            $("#error_message").addClass("hidden");
                            $("#url_shorten").val("http://raccourcir.myapp/"+response);
                            $("#success_message").removeClass("hidden");
                             setTimeout(
                                    function()
                                    {
                                      location.reload();
                                    }, 10000);
                            
                        }
                       

                    },
                    error:function( response ) {
                       $("#error_message").text("vérifiez votre url");
                            $("#error_message").removeClass("hidden"); 
                    }
                } );

     }

        });

  
  $(".links").click(function() {

       
       var code = $(this).attr('id');
       
       var base_url = document.location.origin;
       var url = base_url+'/raccourcir_application/public/getUrl';
     
        var formData = {
                'code': code //for get email 
            };
         $.ajax({
                    type: "GET",
                    url: url,
                    data: formData,
                    success: function( response ) {
                        var res = response.toString();
                      
                        location.href=res;
                        //window.open(res, '_blank');


                    },
                    error:function( response ) {
                      
                    }
                });

       
    });


