    $(document).ready(function() {

        var hash = window.location.hash;
      
        if (hash.indexOf("#tab-dashboard") >= 0){


            $('#c_dashboard').trigger("click");



        }
        if (hash.indexOf("#tab-profile") >= 0){


            $('#c_profil').trigger("click");



        }
        if (hash.indexOf("#tab-contact") >= 0){

            $('#c_contact').trigger("click");



        }


    });

   

    $(".go_open").click(function() {

        $('#open_edit_pass').trigger("click");
    });

    $(".close_menu").click(function() {

        $(".body").css({"overflow": "scroll"});
    });

    $(".custom-menu-btn").click(function() {

        $(".body").css({"overflow": "hidden"});
    });




  /***** edit password ****/
    $("#form_edit_pass").validate({
        errorElement: 'span',
        errorClass: 'help-inline',
        rules: {
            old_pass: {required: true},
            password: {required: true,minlength: 8},
            password_confirmation: {

                equalTo: "#password"
            }
        },
        messages: {
            old_pass: 'Ancien mot de passe vide!',
            password: 'Mot de passe obligatoire, il doit contenir au moins 8 caractères',
            password_confirmation:"Les mots de passe ne sont pas identiques!"

        }
    });



    $('#btn_pass').click(function() {

        var iduser = $('#iduser').val();


        var pathname = window.location.pathname;


        //shortUrl=pathname.substring(0,pathname.lastIndexOf("/"));
        shortUrl = pathname+'/'+iduser;






        if($("#form_edit_pass").valid()){

            var form = $('#form_edit_pass');
            $.ajax( {
                type: "PATCH",
                url: shortUrl,
                data: form.serialize(),
                success: function( response ) {
                 

                    $("#error_edit_pass").addClass("hidden");
                    $("#succ_edit_pass").removeClass("hidden");
                    setTimeout(
                            function()
                            {
                                $("#succ_edit_pass").addClass("hidden");
                                location.reload();


                            }, 3000);


                },
                error:function( response ) {
                  
                    $("#error_edit_pass").removeClass("hidden");
                    $("#succ_edit_pass").addClass("hidden");

                }
            } );

        }



    });
    /***** suppp link ******/
     $('.delete_link').click(function() {

var base_url = document.location.origin;
var idSupp = $(this).attr('id');
 
var Url = base_url+'/raccourcir_application/public/delete/'+idSupp;

            $.ajax( {
                type: "GET",
                url: Url,
                
                success: function( response ) {
                    

                  $("#succ_delete_link").removeClass("hidden");
                    setTimeout(
                            function()
                            {
                                $("#succ_delete_link").addClass("hidden");
                                location.reload();


                            }, 3000);


                },
                error:function( response ) {
                  
                 
                }
            });

        



    });
    /***** click nav bar ******/
    $("#button_tab").click(function() {

        $('.close_menu').trigger("click");
        $('#c_dashboard').trigger("click");
        $('html, body').animate({
            scrollTop: $("#tab-dashboard").offset().top
        }, 2000);


    });
    $("#button_profil").click(function() {

        $('.close_menu').trigger("click");
        $('#c_profil').trigger("click");
        $('html, body').animate({
            scrollTop: $("#tab-profile").offset().top
        }, 2000);


    });
    $("#button_contact").click(function() {

        $('.close_menu').trigger("click");
        $('#c_contact').trigger("click");
        $('html, body').animate({
            scrollTop: $("#tab-contact").offset().top
        }, 2000);


    });

    /**********************/

    $("#formContact").validate({
        errorElement: 'span',
        errorClass: 'help-inline',
        rules: {
            subjectMail: "required",
            messageMail: "required"


        },
        messages: {
            subjectMail: "Séléctionnez un sujet!",
            messageMail: "Message vide !",


        }
    });





    $('#sendContactMail').click(function(){

       if($("#formContact").valid()) {


           var iduser = $('#iduser').val();


           var pathname = window.location.pathname;

           shortUrl = pathname + '/' + iduser + '/mail';
           var form = $('#formContact');
           $.ajax({
               type: "POST",
               url: shortUrl,
               data: form.serialize(),
               success: function (response) {

             
                   $("#succ_contact").removeClass("hidden");
                   setTimeout(
                           function () {
                               $("#messageMail").val('');
                               $("#subjectMail").val('');
                               $("#succ_contact").addClass("hidden");

                           }, 3000);
               },
               error: function (response) {
               
                   $("#email_exist").removeClass("hidden");
               }
           });

       }




    });








    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
             
                $(input).parent().find('img[name="preview"]').attr('src', e.target.result);

            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function previewImages(files){
        var fileList = files;
        $('.preview-area').html('');
        var anyWindow = window.URL || window.webkitURL;

        for(var i = 0; i < fileList.length; i++){
            //get a blob to play with
            var objectUrl = anyWindow.createObjectURL(fileList[i]);
            // for the next line to work, you need something class="preview-area" in your html
            $('.preview-area').append('<img src="' + objectUrl + '" />');
            // get rid of the blob
            window.URL.revokeObjectURL(fileList[i]);
        }


    }

    $('#file-1').change(function (e) {

        // $('#spinner1').show();
        file = this;
        readURL(file);
        var fd = new FormData();
        var baseUrlLog = 'http://localhost/raccourcir_application/public/upload';
        fd.append('prefix',$("[name='prefix']").val());
        fd.append( 'image', this.files[0] );
        $.ajax({
            url: "http://localhost/raccourcir_application/public/file/uploads",
            data: fd,
            type: "POST",
            processData: false,
            contentType: false,

            success: function($result) {

                var rst = jQuery.parseJSON($result);

                $("#photo").val(rst);

                filename = ""+file.name;
                if(filename.indexOf('ref') != -1 || filename.indexOf('init') != -1)
                {
                    rst = baseUrlLog+rst;

                    $("#preview_image").attr("src",rst);

                }
                $(file).parent().find('input[name^="img_"]').val(rst);

            },
            complete: function(){
                // $('#spinner1').hide();
            },
            error:function ($err) {
             

            }
        });
    });



    $("#form1").validate({
        errorElement: 'span',
        errorClass: 'help-inline',
        rules: {
            name: "required",
            prenom: "required",
         
            pays: "required"


        },
        messages: {
            
            name: "Nom obligatoire",
            prenom: "Prénom obligatoire",
           
            pays: "Pays obligatoire"

        }
    });



    $('#btn').click(function() {
        var iduser = $('#iduser').val();
        

        var pathname = window.location.pathname;

        shortUrl = pathname+'/'+iduser;
      


        if($("#form1").valid()){

            var form = $('#form1');
            $.ajax( {
                type: "PATCH",
                url: shortUrl,
                data: form.serialize(),
                success: function( response ) {
                  
                    $("#succ_edit").removeClass("hidden");

                    setTimeout(
                            function()
                            {

                                $("#succ_edit").addClass("hidden");
                                location.reload();
                              

                            }, 3000);
                },
                error:function( response ) {
                
                    $("#email_exist").removeClass("hidden");
                }
            } );
           
        }

    });
  