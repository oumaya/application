<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Raccourccir app</title>

    <link rel="apple-touch-icon" href="{{asset("final_style/images/fav/iconwizzas.png")}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset("final_style/images/fav/apple-icon-57x57.png")}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset("final_style/images/fav/apple-icon-60x60.png")}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset("final_style/images/fav/apple-icon-72x72.png")}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset("final_style/images/fav/apple-icon-76x76.png")}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset("final_style/images/fav/apple-icon-114x114.png")}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset("final_style/images/fav/apple-icon-120x120.png")}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset("final_style/images/fav/apple-icon-144x144.png")}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset("final_style/images/fav/apple-icon-152x152.png")}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("final_style/images/fav/apple-icon-180x180.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("final_style/images/fav/favicon-16x16.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("final_style/images/fav/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="36x36" href="{{asset("final_style/images/fav/android-icon-36x36.png")}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset("final_style/images/fav/favicon-96x96.png")}}">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
    <link rel="manifest" href="{{asset("final_style/images/fav/manifest.json")}}">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="{{asset("final_style/images/fav/faviconi.ico")}}" type="image/x-icon"/>

    <!-- Bootstrap -->
    <link href="{{asset("final_style/css/normalize.css")}}" rel="stylesheet">
    <link href="{{asset("final_style/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("final_style/css/font-awesome.css")}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset("final_style/plugins/datapicker/datepicker.css")}}">
        <link rel="stylesheet" href="{{asset("final_style/plugins/iCheck/icheck.css")}}">
        <link rel="stylesheet" href="{{asset("final_style/plugins/chosen/chosen.css")}}">
        <link rel="stylesheet" href="{{asset("final_style/plugins/fileupload/component.css")}}">
    <link href="{{asset("final_style/css/mainprof.css")}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap:400,500,700" rel="stylesheet">


    <script src="{{asset("final_style/js/vendor/modernizr-2.8.3.min.js")}}"></script>

</head>

 <body>
 

        <div class="wrapper">
            <header class="headerMain">
                <nav class="navbar navbar-primary">
                  <div class="container-fluid">
                    

                    <div class="row">
                        <div class="navbar-header col-sm-7">
                            <div class="row">
                                <div class="col-xs-4 col-sm-5 pr0">
                                    <a class="navbar-brand titre_profil" href="home"><span><i><b>Raccourcir App</b></i></span></a>
                                </div>
                                <div class="col-xs-8 col-sm-7 pr0 brand-desc">
                                    <p class="navbar-desc"><span>1er réseau raccourcir url</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="col-sm-5 pl0 pr0">
                            <div class="collapse navbar-collapse pl0 pr0" id="bs-example-navbar-collapse-1">
                              
                              
                             <!-- <ul class="nav navbar-nav navbar-right hidden-xs no-margin">
                                <li><a href="#">NOUS REJOINDRE</a></li>
                                <li><a href="#">MA TRIBU</a></li>
                              </ul>-->
                             <div id="mydiv">
                                @if (Auth::check())

                                    <?php
                                    // dd($utilisateur);
                                    $avatar = 'final_style/images/avatar_defaut.png';
                                    $avatar_g = 'final_style/images/avatar_defaut_g.png';


                                    $nom = $utilisateur->name;
                                    $prenom = $utilisateur->prenom;
                               
                                    $pays = $utilisateur->pays;
                                  

                                    $id = Auth::user()->getId();
                                    $baseUrl =  "http://" . $_SERVER['SERVER_NAME'] .'/raccourcir_application/public/uploads/profil/';
                                    if (!empty($utilisateur->photo)){
                                        if (strpos($utilisateur->photo, 'http') !== false) {
                                            $avatar = $utilisateur->photo;
                                            $avatar_g = $utilisateur->photo;
                                        }else{
                                            $avatar = $baseUrl.$utilisateur->photo;
                                            $avatar_g = $baseUrl.$utilisateur->photo;
                                        }


                                    }

                                    ?>


                                    <ul class="nav navbar-nav navbar-right hidden-xs no-margin">
                                        <li><a href="#">Bonjour {{$prenom}}</a></li>

                                    </ul>


                                @endif
                            </div>
                            <input class="hidden" id="iduser" value="{{$id}}">
                              
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
                           <a class="titre_profil" href="#"><span><i><b>Raccourcir App</b></i></span></a>
                        </header>
                        <section class="profileBox row whitebox">
                            <div class="col-xs-12 profileBox-left">
                                 <div class="row" id="mydiv1">
                        <div class="col-md-12 col-lg-4">
                            <figure class="img-circle">
                                <img src="{{asset($avatar)}}" alt="">
                            </figure>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="redline">{{$prenom}} {{$nom}}</h3>
                            <ul>
                                <li><a href="#" id="button_profil">Editer mon profil</a></li>
                                <li><a href="#" id="button_tab">Mon tableau de bord</a></li>
                                <li><a href="#" id="button_contact">Nous contacter</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Se déconnecter</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                                </li>
                            </ul>
                        </div>
                    </div>

                            </div>

                        </section>

                 
                    </div>  
                </div>
            </header>
            
          <div class="contentMain">
        <section class="profile-main member color1-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-offset-0">
                        <div id="profile-details">
                            <div class="row profilerow">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="profile-pic"><figure class="img-circle"><img src="{{asset($avatar)}}" alt=""></figure></div>
                                </div>
                                <div class="col-sm-8 col-sm-12">
                                    <div class="profile-details">

                                        <h2 class="redline">{{$prenom}} {{$nom}}</h2> <span class="profile-tag color2-bg"></span>
                                        
                                        <div class="profile-details-contact color2">
                                            
                                            <p><span>Email:</span> <a href="#">{{$utilisateur->email}}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
  
                    </div>
                </div>
                <div class="row pmb">
                    <div class="col-md-10 col-sm-offset-8 col-md-offset-2 col-sm-offset-4 hidden-xs">
                        <div class="profile-main-bottom">
                            <p>Gérer votre profil et vos urls</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-tabbed">
            <div class="wizztab container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-2 wizztab-nav">
                        <ul class="row wizztab-navlist">
                            <li class="col-md-12 col-sm-4 col-xs-4 current"><a data-wizztab="tab-profile" class="wizztablink" href="javascript:void(0);"  id="c_profil"><img src="{{asset("final_style/img/profile.png")}}"><span>Profil</span></a></li>
                            <li class="col-md-12 col-sm-4 col-xs-4"><a data-wizztab="tab-dashboard" class="wizztablink" href="javascript:void(0);" id="c_dashboard"><img src="{{asset("final_style/img/dashboard.png")}}"><span>Tableau de bord</span></a></li>
                            <li class="col-md-12 col-sm-4 col-xs-4"><a data-wizztab="tab-contact" class="wizztablink" href="javascript:void(0);" id="c_contact"><img src="{{asset("final_style/img/contact.png")}}"><span>Nous contacter</span></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-10 wizztab-content">
                        <div class="wizztab-current">
                            <div class="wizztabPanel current-tab" id="tab-profile">
                                <div class="row wizztab-current-title">
                                    <div class="col-md-12"><h1>Votre profil Membre</h1></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <section>
                                            <a href="#" id="open_edit_pass" class="wizzlink-model" data-wizzmodel="passwordchange" data-toggle="modal" data-target=".editprofile"></a>
                                            <div class="content-box" >
                                                    <header>
                                                        <h3>Informations personnelles</h3>
                                                        <a href="javascript:void(0);" class="modifier pull-right wizzlink-model">Modifier</a>
                                                    </header>
                                                <form  role="form" method="PATCH" id="form1" enctype="multipart/form-data">
                                                    <div class="contentBox whitebox"  id="infoPerso">
                                                        
                                                        <div class="row">
                                                            <div class="col-sm-4">Nom <span class="color2 content-input">*</span></div>
                                                            <div class="col-sm-8 content-output">{{$nom}}</div>
                                                            <div class="col-sm-8 content-input"><input type="text" class="form-control" placeholder=""  name="name" value="{{$nom}}" id="name" ></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4">Prénom <span class="color2 content-input">*</span></div>
                                                            <div class="col-sm-8 content-output">{{$prenom}}</div>
                                                            <div class="col-sm-8 content-input"><input type="text" class="form-control" placeholder=""  name="prenom" value="{{$prenom}}" id="prenom" ></div>
                                                        </div>
                                                     
                                                          <div class="row">
                                                            <div class="col-sm-4">Pays <span class="color2 content-input">*</span></div>
                                                            <div class="col-sm-8 content-output">{{$pays}}</div>
                                                            <div class="col-sm-8 content-input">
                                                                <div class="col-sm-8">
                                                                    <select class="form-control chosen-select" id="Country" name="pays"><option value="0"></option>
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

                                                                </div>

                                                            </div>
                                                        </div>
                                                    
                                                        
                                                        <div class="row">
                                                            <div class="col-sm-4">Mot De passe</div>
                                                            <div class="col-sm-8">....... <a href="" onclick="return false;" class="go_open">&nbsp;&nbsp;&nbsp;Changer le mot de passe</a></div>
                                                        </div>


                                                        <hr>


                                                      
                                                      
                                                      
                                                     
                                                        <small class="hidden" style="color: #057D91;" id="succ_edit"> Votre profil a été modifié avec succès</small>
                                                        <div class="modal-btn-div mtb  content-input">
                                                            
                                                            <button type="button" class="btn btn-primary" id="btn">Sauvegarder</button>
                                                           
                                                        </div>
                                                    </div>
                                            </form>

                                                </div>



                                        </section>
                                    </div>
                                </div>
                            </div><!-- /#tab-profile -->
                            <div class="wizztabPanel" id="tab-dashboard">
                                <div class="row wizztabPanel-title">
                                    <div class="col-md-12">
                                        <h1>Bienvenue sur votre tableau de bord</h1>

                                    </div>
                                </div>
                                <div class="row communityListing">
                                    <div class="col-md-12">
                                        <header>
                                            <div class="row">
                                              
                                                <div class="col-md-8">
                                                    <p class="mtb">Gérez vos urls</p>
                                                    

                                                </div>
                                            </div>
                                        </header>
                                        <div class="commuList">
                                            <span class="hidden" style="color: #057D91;" id="succ_delete_link"> Votre lien a été supprimé avec succès</span>
                                            <div class="row mtb">
                                     <?php $color = array('', 'info'); ?>         	
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Date</th>
					<th>Lien</th>
                                        <th>Lien original</th>
                                        <th>Action</th>
				</tr>
			</thead>
			<tbody>
                            <?php foreach($links as $link){
                                $k = array_rand($color);
                                
                                $v = $color[$k];
                            ?>
				<tr class="{{$v}}">
					<td>{{$link->updated_at}}</td>
                                        <td><a class="original_link" href="{{$link->link}}" target="_blank">http://raccourcir.myapp/{{$link->code}}</a></td>
					<td><a class="original_link" href="{{$link->link}}" target="_blank">{{$link->link}}</a></td>
                                        <td>
                                            <button class="delete_link danger" id="{{$link->id}}" onclick="return confirm('voulez-vous vraiment supprimer?');">Supprimer</button>
                               
                                
                                        </td>
				</tr>
                            <?php } ?>
				
			</tbody>
		</table>	
		
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- /#tab-dashboard -->
                            <div class="wizztabPanel" id="tab-contact">
                                <div class="row bonjour">
                                    <div class="col-md-8">
                                        <h1>Bonjour!</h1>
                                        <p class="mtb">Laissez nous un message ou initiez une suggestion</p>
                                        <form class="" id="formContact" role="form" method="POST" enctype="multipart/form-data">
                                            <p>
                                                <select class="form-control mb" name="subjectMail">
                                                    <option value="">Séléctionnez votre sujet</option>
                                                    <option value="Aide">Aide</option>
                                                   
                                                </select>
                                            </p>

                                            <p>
                                                <textarea class="form-control mb" name="messageMail" id="messageMail"></textarea>
                                            </p>

                                            <a id="sendContactMail" class="btn btn-primary">Envoyer le Message</a>
                                            <small class="hidden" style="color: #057D91;" id="succ_contact"> Votre message a été bien envoyé!</small>

                                        </form>

                                    </div>
                                </div>
                            </div><!-- /#tab-contact -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
   
            
            
            
        </div>
        <!-- Modal -->
        <div class="modal fade editprofile" tabindex="-1" role="dialog" aria-labelledby="editprofile">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>


                        <div class="container-fluid full_profile wizzObj-model" id="full_profile">
                            <!--------------- edit password --------------------->
                            <div class="content-box wizzObj-model" id="passwordchange">
                                <header>
                                    <h3>Modifier votre mot de passe</h3>
                                    <small class="hidden" style="color: #057D91;" id="succ_edit_pass"> Votre mot de passe a été modifié avec succès</small>
                                </header>
                                <form  role="form" method="PATCH" id="form_edit_pass" enctype="multipart/form-data">
                                    <div class="contentBox whitebox">

                                        <div class="row">
                                            <div class="col-sm-4">Ancien mot de passe</div>
                                            <div class="col-sm-8">
                                                <input class="form-control" name="old_pass" id="old_pass" type="password">
                                                <small class="hidden" style="color: #ec5e87;" id="error_edit_pass"> Vérifiez votre mot de passe actuel!</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Nouveau mot de passe</div>
                                            <div class="col-sm-8">
                                                <input class="form-control" name="password" id="password" type="password">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">Confirmation nouveau mot de passe</div>
                                            <div class="col-sm-8">
                                                <input class="form-control" name="password_confirmation" id="password_confirmation" type="password">
                                            </div>
                                        </div>
                                        <div class="modal-btn-div mtb">
                                            <button type="button" class="btn btn-primary" id="btn_pass">Sauvegarder</button>
                                            <button type="button" class="btn btn-default btn-colored btn-colored-default" data-dismiss="modal" id="retour_edit_pass">Retour</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!---------------------------------------------------------->

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!------------------------ end modal --->

     <script src="{{asset("final_style/js/vendor/jquery-1.12.0.min.js")}}"></script>
        <script src="{{asset("final_style/js/bootstrap.min.js")}}"></script>

        <script src="{{asset("final_style/plugins/datapicker/bootstrap-datepicker.js")}}"></script>
        <script src="{{asset("final_style/plugins/iCheck/icheck.min.js")}}"></script>
        <script src="{{asset("final_style/plugins/chosen/chosen.jquery.js")}}"></script>
        <script src="{{asset("final_style/plugins/fileupload/custom-file-input.js")}}"></script>
        <script src="{{asset("final_style/plugins/pwstrength/jquery.pwstrength.js")}}"></script>
        
  

<script src="{{asset("final_style/js/pluginsprof.js")}}"></script>
<script src="{{asset("final_style/js/mainprof.js")}}"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>

    
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');

  
</script>
<script src="{{asset("final_style/js/profile.js")}}"></script>
</body>
</html>