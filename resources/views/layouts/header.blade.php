@extends('layouts.head')

@section('body')

<?php $avatar = 'final_style/images/avatar_defaut.png';?>

  		<header class="headerMain">
                <nav class="navbar navbar-primary">
                  <div class="container-fluid">
                      <a href="#test-6" id="votre_login" ></a>

                    <div class="row">
                        <div class="navbar-header col-sm-7">
                            <div class="row">
                                <div class="col-xs-4 col-sm-5 pr0">
                                    <a class="navbar-brand" href="#"><h5><i><b>Raccourcir App</b></i></h5></a>
                                </div>
                                <div class="col-xs-8 col-sm-7 pr0 brand-desc">
                                    <p class="navbar-desc"><span>1er application raccourcir url</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="col-sm-5 pl0 pr0">
                            <div class="collapse navbar-collapse pl0 pr0" id="bs-example-navbar-collapse-1">
                              <a href="#test-3" id="wclosebutton-test-2"></a>
                              <div id="mydiv">
                            @if (Auth::check())

                                <?php
                                $nom = $utilisateur->name;
                                $prenom = $utilisateur->prenom;
                                $id = Auth::user()->getId();
                                $baseUrl =  "http://" . $_SERVER['SERVER_NAME'] .'/uploads/profil/';
                                if (!empty($utilisateur->photo)){
                                    if (!empty($utilisateur->provider)){
                                        $isLink = substr_count($utilisateur->photo, 'http');
                                        if($isLink==1){
                                            $avatar = $utilisateur->photo;
                                        }
                                        else{
                                            $avatar = $baseUrl.$utilisateur->photo;
                                        }

                                    }else{
                                        $avatar = $baseUrl.$utilisateur->photo;
                                    }


                                }
                                else{
                                    $avatar = 'final_style/images/avatar_defaut.png';

                                }
                                ?>
                                <ul class="nav navbar-nav navbar-right hidden-xs no-margin right_links">

                                    <li><a href="profile" class="bonjour">Bonjour {{$prenom}}</a></li>

                                </ul>



                            @else
                                <ul class="nav navbar-nav navbar-right hidden-xs no-margin right_links">

                                    <li><a href="#test-2" id="wclosebutton-test" >Mon espace</a></li>
                                    <li><a href="#test" id="simple-test-link"> Nous rejoindre</a></li>
                                </ul>

                            @endif
                        </div>
                             <!-- <ul class="nav navbar-nav navbar-right hidden-xs no-margin">
                                <li><a href="#test-2" id="wclosebutton-test"> NOUS REJOINDRE</a></li>
                                <li><a href="#test" id="simple-test-link">MA TRIBU</a></li>
                              </ul>-->
                              
                            </div><!-- /.navbar-collapse -->
                        </div>
                    </div><!-- .row -->
                  </div><!-- /.container-fluid -->
                </nav>
                <div class="nav-addon">
                    <ul class="nav-addon-list">
                    
                        <li class="nav-addon-item has-custom-menu">
                            <a href="#" class="custom-menu-btn wizzlink" data-wizz="customMenu"><span class="fa fa-reorder"></span></a>
                        </li>
                    </ul>
              </div>

                 
                <div class="custom-menu-holder wizzObj" id="customMenu">
                    <div class="customMenu_inner">
                        <header class="text-center">
                            <a href="#" class="close_menu pull-right">
                                <span class="flaticon-cross"></span>
                            </a>
                            <a href="#"><h5><i><b>Raccourcir App</b></i></h5></a>

                        </header>
                         <div id="mydiv1">
            @if (Auth::check())
                        <section class="profileBox row whitebox">
                            <div class="col-xs-12 profileBox-left">
                                <div class="row">
                                    <div class="col-md-12 col-lg-4">
                                        <figure class="img-circle">
                                            <img src="{{asset($avatar)}}" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-12 col-lg-8">
                                        <h3 class="redline"> {{$utilisateur->prenom}} {{$utilisateur->name}}</h3>
                                        <ul>
                                            <li><a href="profile">Editer mon profil</a></li>
                                            <li><a href="profile#tab-dashboard">Mon tableau de bord</a></li>
                                            <li><a href="profile#tab-contact">Nous contacter</a></li>
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Se déconnecter</a></li>
                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                </ul>
                            </form>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                 
                        </section>
              @endif
                         
                    

            <ul class="menuList">
                @if (Auth::check())
                @else
                    <li><a href="#test-2" id="seconnecter" >Se connecter</a></li>
                @endif
             
                       
                     </ul>
             
                    </div>  
                </div>
                    </div>
            </header>



@yield('content')


<div id="test">

    <div id="close-button"></div>
    <div class="image_area">
        <div class="image_box">
            <div class="image_icon"><img src="{{asset("final_style/images/iconlove.png")}}"></div>

            <h5 class="mar-im">creation d'un compte</h5>

        </div>
        <img src="{{asset("final_style/images/reg.jpg")}}">
    </div>
    <div class="content_area" id="form_inscription">
        <h4>Création de compte</h4>
        
        <h5 class="hidden" style="color: #057D91;" id="succ_insri"> Vous êtes enregistré avec succès</h5>
        <form class=" form-horizontal" role="form" method="POST" action="{{ route('register') }}" id="form1">

            <input name='email' placeholder='Email' type='text' id="email1" required>
            <input name='username' placeholder='Prénom' type='text'>
            <input name='name' placeholder='Nom' type='text'>
            <input id="password" type="password" placeholder='Mot de passe' name="password" required>
            <input id="password-confirm" type="password" placeholder='Confirmation mot de passe' name="password_confirmation" required>
            <br>
            <select class="custom-dropdown__select custom-dropdown__select--white" id="Country" name="pays"><option value="0"></option>
                <option selected="selected" value="FR">France</option>
                <option value="0"></option>
                <option value="BE">Belgique</option>
                <option value="CA">Canada</option>
                <option value="CH">Suisse</option>
                <option value="US">États-Unis</option>
                <option value="0"></option>
                <option value="AF">Afghanistan</option>
                <option value="ZA">Afrique du Sud</option>
                <option value="AX">Aland Islands</option>
                <option value="AL">Albanie</option>
                <option value="DZ">Algérie</option>
                <option value="DE">Allemagne</option>
                <option value="AD">Andorre</option>
                <option value="GB">Angleterre</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AQ">Antarctique</option>
                <option value="AG">Antigua-et-Barbuda</option>
                <option value="AN">Antilles néerlandaises</option>
                <option value="SA">Arabie saoudite</option>
                <option value="AR">Argentine</option>
                <option value="AM">Arménie</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australie</option>
                <option value="AT">Autriche</option>
                <option value="AZ">Azerbaïdjan</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahreïn</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbade</option>
                <option value="PW">Belau</option>
                <option value="BE">Belgique</option>
                <option value="BZ">Belize</option>
                <option value="BJ">Bénin</option>
                <option value="BM">Bermudes</option>
                <option value="BT">Bhutan</option>
                <option value="BY">Biélorussie</option>
                <option value="MM">Birmanie</option>
                <option value="BO">Bolivie</option>
                <option value="BA">Bosnie-Herzégovine</option>
                <option value="BW">Botswana</option>
                <option value="BR">Brésil</option>
                <option value="BN">Brunei</option>
                <option value="BG">Bulgarie</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="KH">Cambodge</option>
                <option value="CM">Cameroun</option>
                <option value="CA">Canada</option>
                <option value="CV">Cap-Vert</option>
                <option value="TD">Chad</option>
                <option value="CL">Chili</option>
                <option value="CY">Chypre</option>
                <option value="CO">Colombie</option>
                <option value="KM">Comores</option>
                <option value="CG">Congo</option>
                <option value="KP">Corée du Nord</option>
                <option value="KR">Corée du Sud</option>
                <option value="CR">Costa Rica</option>
                <option value="CI">Côte d'Ivoire</option>
                <option value="HR">Croatie</option>
                <option value="CU">Cuba</option>
                <option value="DK">Danemark</option>
                <option value="DJ">Djibouti</option>
                <option value="DM">Dominique</option>
                <option value="EG">Égypte</option>
                <option value="AE">Émirats arabes unis</option>
                <option value="EC">Équateur</option>
                <option value="ER">Érythrée</option>
                <option value="ES">Espagne</option>
                <option value="EE">Estonie</option>
                <option value="US">États-Unis</option>
                <option value="ET">Éthiopie</option>
                <option value="FK">Falkland Islands</option>
                <option value="FI">Finlande</option>
                <option selected="selected" value="FR">France</option>
                <option value="TF">French Southern Territories</option>
                <option value="GA">Gabon</option>
                <option value="GM">Gambie</option>
                <option value="GE">Géorgie</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GR">Grèce</option>
                <option value="GD">Grenade</option>
                <option value="GL">Groenland</option>
                <option value="GP">Guadeloupe</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="GN">Guinée</option>
                <option value="GQ">Guinée équatoriale</option>
                <option value="GW">Guinée-Bissao</option>
                <option value="GY">Guyana</option>
                <option value="GF">Guyane française</option>
                <option value="HT">Haiti</option>
                <option value="HN">Honduras</option>
                <option value="HK">Hong Kong</option>
                <option value="HU">Hongrie</option>
                <option value="BV">Ile Bouvet</option>
                <option value="CX">Ile Christmas</option>
                <option value="NF">Ile Norfolk</option>
                <option value="KY">Iles Cayman</option>
                <option value="CK">Iles Cook</option>
                <option value="CC">Iles des Cocos</option>
                <option value="FO">Iles Falkland</option>
                <option value="FJ">Iles Fidji</option>
                <option value="GS">Iles Géorgie du Sud et Sandwich du Sud</option>
                <option value="HM">Iles Heard et McDonald</option>
                <option value="MH">Iles Marshall</option>
                <option value="UM">Iles mineures éloignées des États-Unis</option>
                <option value="PN">Iles Pitcairn</option>
                <option value="SB">Iles Salomon</option>
                <option value="SJ">Iles Svalbard et Jan Mayen</option>
                <option value="TC">Iles Turks-et-Caicos</option>
                <option value="VI">Iles Vierges américaines</option>
                <option value="VG">Iles Vierges britanniques</option>
                <option value="IN">Inde</option>
                <option value="ID">Indonésie</option>
                <option value="IR">Iran</option>
                <option value="IQ">Iraq</option>
                <option value="IE">Irlande</option>
                <option value="IS">Islande</option>
                <option value="IL">Israël</option>
                <option value="IT">Italie</option>
                <option value="JM">Jamaïque</option>
                <option value="JP">Japon</option>
                <option value="JO">Jordanie</option>
                <option value="KZ">Kazakhstan</option>
                <option value="KE">Kenya</option>
                <option value="KG">Kirghizistan</option>
                <option value="KI">Kiribati</option>
                <option value="XK">Kosovo</option>
                <option value="KW">Koweït</option>
                <option value="LA">Laos</option>
                <option value="LB">Lebanon</option>
                <option value="LS">Lesotho</option>
                <option value="LV">Lettonie</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libye</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lituanie</option>
                <option value="LU">Luxembourg</option>
                <option value="MO">Macao</option>
                <option value="MK">Macedonia</option>
                <option value="MG">Madagascar</option>
                <option value="MY">Malaisie</option>
                <option value="MW">Malawi</option>
                <option value="MV">Maldives</option>
                <option value="ML">Mali</option>
                <option value="MT">Malte</option>
                <option value="MP">Mariannes du Nord</option>
                <option value="MA">Maroc</option>
                <option value="MQ">Martinique</option>
                <option value="MU">Maurice</option>
                <option value="MR">Mauritanie</option>
                <option value="YT">Mayotte</option>
                <option value="MX">Mexique</option>
                <option value="FM">Micronesia</option>
                <option value="MD">Moldavie</option>
                <option value="MC">Monaco</option>
                <option value="MN">Mongolie</option>
                <option value="ME">Montenegro</option>
                <option value="MS">Montserrat</option>
                <option value="MZ">Mozambique</option>
                <option value="NA">Namibie</option>
                <option value="NR">Nauru</option>
                <option value="NP">Nepal</option>
                <option value="NI">Nicaragua</option>
                <option value="NG">Nigeria</option>
                <option value="NE">Nigeria</option>
                <option value="NU">Nioué</option>
                <option value="NO">Norvège</option>
                <option value="NC">Nouvelle-Calédonie</option>
                <option value="NZ">Nouvelle-Zélande</option>
                <option value="OM">Oman</option>
                <option value="UG">Ouganda</option>
                <option value="UZ">Ouzbékistan</option>
                <option value="PK">Pakistan</option>
                <option value="PS">Palestinian Territory</option>
                <option value="PA">Panama</option>
                <option value="PG">Papouasie-Nouvelle-Guinée</option>
                <option value="PY">Paraguay</option>
                <option value="NL">Pays-Bas</option>
                <option value="PE">Pérou</option>
                <option value="PH">Philippines</option>
                <option value="PL">Pologne</option>
                <option value="PF">Polynésie française</option>
                <option value="PT">Portugal</option>
                <option value="QA">Qatar</option>
                <option value="CF">République centrafricaine</option>
                <option value="CD">République démocratique du Congo</option>
                <option value="CZ">République tchèque</option>
                <option value="RE">Réunion</option>
                <option value="RO">Roumanie</option>
                <option value="RU">Russie</option>
                <option value="RW">Rwanda</option>
                <option value="EH">Sahara occidental</option>
                <option value="BL">Saint Barthélemy</option>
                <option value="MF">Saint Martin</option>
                <option value="PM">Saint Pierre and Miquelon</option>
                <option value="KN">Saint-Christophe-et-Niévès</option>
                <option value="SM">Saint-Marin</option>
                <option value="VC">Saint-Vincent-et-les-Grenadines</option>
                <option value="SH">Sainte-Hélène</option>
                <option value="LC">Sainte-Lucie</option>
                <option value="SV">Salvador</option>
                <option value="WS">Samoa</option>
                <option value="AS">Samoa américaines</option>
                <option value="ST">Sao Tomé-et-Principe</option>
                <option value="SN">Sénégal</option>
                <option value="CS">Serbia and Montenegro</option>
                <option value="RS">Serbie</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leone</option>
                <option value="SG">Singapour</option>
                <option value="SK">Slovaquie</option>
                <option value="SI">Slovénie</option>
                <option value="SO">Somalie</option>
                <option value="SD">Soudan</option>
                <option value="LK">Sri Lanka</option>
                <option value="SE">Suède</option>
                <option value="CH">Suisse</option>
                <option value="SR">Suriname</option>
                <option value="SZ">Swaziland</option>
                <option value="SY">Syrie</option>
                <option value="TW">Taiwan</option>
                <option value="TJ">Tajikistan</option>
                <option value="TZ">Tanzanie</option>
                <option value="IO">Territoire britannique de l'Océan Indien</option>
                <option value="TH">Thaïlande</option>
                <option value="TL">Timor Oriental</option>
                <option value="TG">Togo</option>
                <option value="TK">Tokelau</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinité-et-Tobago</option>
                <option value="TN">Tunisie</option>
                <option value="TM">Turkmenistan</option>
                <option value="TR">Turquie</option>
                <option value="TV">Tuvalu</option>
                <option value="UA">Ukraine</option>
                <option value="UY">Uruguay</option>
                <option value="VU">Vanuatu</option>
                <option value="VA">Vatican</option>
                <option value="VE">Venezuela</option>
                <option value="VN">Viêt Nam</option>
                <option value="WF">Wallis-et-Futuna</option>
                <option value="YE">Yemen</option>
                <option value="ZM">Zambie</option>
                <option value="ZW">Zimbabwe</option>
            </select>
            <br>
            <div class='agree hidden' id="email_exist">
                *E-mail existe déjà!
            </div>
            <input class='animated ' type='button' value='Nous Rejoindre' href="#test-2" id="btn">
            <div class="right_poptext">Vous avez un compte déja? <br>
                <a href="#test-2" role="button" id="login_request">Connectez-vous</a></div>
        </form>
    </div>
</div>


<div id="test-2">
    <div id="close-button-1"></div>
    <div class="image_area">
        <div class="image_box">
            <div class="image_icon"><img src="{{asset("final_style/images/iconlove.png")}}"></div>
            <h2>Votre<br>
                Espace</h2>
            <h5 class="margin_t">Se connecter par votre adresse e-mail</h5>

        </div>
        <img src="{{asset("final_style/images/reg1.jpg")}}">
    </div>
    <div class="content_area">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}" id="form2">
        <h4>
            <span>Connectez-vous,</span><br></h4>
        

            <input name='email' placeholder='Identifiant' type='text'>
            <input name='password' placeholder='Mot de passe' type='password'>
           <!-- <div class='forgot'>Mot de passe oublié ? <a id="renitialiser_request" role="button">Réinitialiser</a> </div>-->
            <div class='agree hidden' id="error_login">Votre identifiant ou mot de passe sont incorrects</div>
            <input class='animated ' type='button' value='VALIDER' id="btn2">


        </form>
        <form class="form-horizontal" role="form" method="POST" action="http://localhost/raccourcir_application/public/password/email" id="form_reset">
            <h4>
                <span>Rénitialiser votre mot de passe</span><br>
               </h4>
            <h6>Saisissez l'adresse e-mail associée à votre compte. Nous vous enverrons un lien par e-mail pour réinitialiser votre mot de passe.</h6>
            <input name='email' placeholder='Email' type='text' id="email_reset_request">
            <p class="hidden" style="color: #9621b3;" id="succ_reset">Un lien pour réinitialiser votre mot de passe a été envoyé par e-mail à <span id="emil-reset"></span></span> </p>
            <div class='agree hidden' id="error_reset">Email incorrect!</div><br>
            <input class='animated ' type='button' value='Envoyer le lien de réinitialisation' id="btn_reset">

        </form>
        <div class="right_poptext">Vous n’avez pas de compte ? <br>
            <a href="#test" role="button" id="inscr_request">Inscrivez-vous</a></div>
    </div>
</div>

<div id="test-3">
    <div id="close-button-2"></div>
    <div class="image_area">
        <div class="image_box">
            <div class="image_icon"><img src="{{asset("final_style/images/iconlove.png")}}"></div>
            <h2>Votre<br>Espace</h2>
            <!--<h5 class="margin_t">Lorem ipsun sqelis delim qerti sarte liun factelusim deliu. Lorem ipsun sqelis qer delim qertil fact </h5>-->
        </div>
        <img src="{{asset("final_style/images/reg1.jpg")}}">
    </div>
    <div class="content_area">
        <div class="profile"><img class="image_profil" src="{{$avatar}}"></div>
        <div class="profile_name">
            <h5>Bienvenue <br><span id="prenomR"></span> <span id="nomR"></span> </h5>
            <a href="profile"><p class="prof-tag">Gérer mon profil</p></a>

        </div>


      
    </div>
</div>



<div id="test-6">
    <div id="close-button-4"></div>
    <div class="image_area">
        <div class="image_box">
            <div class="image_icon"><img src="{{asset("final_style/images/iconlove.png")}}"></div>
            <h2>Votre<br>
                Espace</h2>
            <h5 class="margin_t">Lorem ipsun sqelis delim qerti sarte liun factelusim deliu. Lorem ipsun sqelis qer delim qertil fact </h5>

        </div>
        <img src="{{asset("final_style/images/reg1.jpg")}}">
    </div>
    <div class="content_area">
        <h4>
            <span>Vous avez déjà créer un compte par cette adesse e-mail!</span><br>
        </h4>


</div>
</div>


</body>


</html>
@stop





