<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wizzas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link href="{{asset("public/new_src/profil/css/bootstrap.css")}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("public/new_src/profil/css/normalize.css")}}">
    <link rel="stylesheet" href="{{asset("public/new_src/profil/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/new_src/profil/css/font-awesome.css")}}">

    <link rel="stylesheet" href="{{asset("public/new_src/profil/plugins/datapicker/datepicker.css")}}">
    <link rel="stylesheet" href="{{asset("public/new_src/profil/plugins/iCheck/icheck.css")}}">
    <link rel="stylesheet" href="{{asset("public/new_src/profil/plugins/chosen/chosen.css")}}">
    <link rel="stylesheet" href="{{asset("public/new_src/profil/plugins/fileupload/component.css")}}">

    <link rel="stylesheet" href="{{asset("public/new_src/profil/css/main.css")}}">
    <script src="{{asset("public/new_src/profil/js/vendor/modernizr-2.8.3.min.js")}}"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="wrapper">
    <header class="headerMain">
        <nav class="navbar navbar-primary">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->

                <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>-->
                <div class="row">
                    <div class="navbar-header col-sm-7">
                        <div class="row">
                            <div class="col-xs-4 col-sm-5 pr0">
                                <a class="navbar-brand" href="/preprod"><span><img src="{{asset("public/new_src/profil/img/logo.png")}}" alt="" width="160" class="img-responsive"></span></a>
                            </div>
                            <div class="col-xs-8 col-sm-7 pr0 brand-desc">
                                <p class="navbar-desc"><span>1er réseau communautaire d’assurance</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="col-sm-5 pl0">
                        <div class="collapse navbar-collapse pl0 pr0" id="bs-example-navbar-collapse-1">

                            <div id="mydiv">
                                @if (Auth::check())

                                    <?php
                                    // dd($utilisateur);
                                    $avatar = 'public/new_src/images/avatar_defaut.png';
                                    $avatar_g = 'public/new_src/images/avatar_defaut_g.png';


                                    $nom = $utilisateur->name;
                                    $prenom = $utilisateur->prenom;
                                    $description = $utilisateur->description;
                                    $civilite = $utilisateur->civilite;
                                    $email = $utilisateur->email;
                                    $id_wizzas = $utilisateur->id_wizzas;
                                    $pseudo = $utilisateur->pseudo;
                                    $dateNaissance = $utilisateur->dateNaissance;
                                    $sexe = $utilisateur->sexe;
                                    $adresse = $utilisateur->adresse;
                                    $adresse2 = $utilisateur->adresse2;
                                    $ville = $utilisateur->ville;
                                    $codePostal = $utilisateur->codePostal;
                                    $pays = $utilisateur->pays;
                                    $profession = $utilisateur->profession;
                                    $competences = $utilisateur->competences;
                                    $interets = $utilisateur->interets;
                                    $situation_matrimoniale = $utilisateur->situation_matrimoniale;
                                    $telephone = $utilisateur->telephone;
                                    $nombre_enfant = $utilisateur->nombre_enfant;
                                    $mobile = $utilisateur->mobile;
                                    $sponsor = $utilisateur->sponsor;

                                    $id = Auth::user()->getId();
                                    $baseUrl =  "http://" . $_SERVER['SERVER_NAME'] .'/preprod/uploads/profil/';
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
                <li class="nav-addon-item has-custom-search visible-md visible-lg">
                    <a href="#" class="custom-search-btn wizzlink" data-wizz="searchHolder"><span class="flaticon-search"></span></a>

                </li>
                <li class="nav-addon-item has-custom-menu">
                    <a href="#" class="custom-menu-btn wizzlink" data-wizz="customMenu"><span class="fa fa-reorder"></span></a>
                </li>
            </ul>
        </div>
        <div class="custom-search-holder visible-md wizzObj visible-lg" id="searchHolder">
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default"></button>
            </form>
        </div>
        <div class="custom-menu-holder wizzObj" id="customMenu">
            <header>
                <a href="#"><img class="img-responsive" src="{{asset("public/new_src/profil/img/logo_menu.png")}}" alt=""></a>
                <a href="#" class="close_menu pull-right">
                    <span class="flaticon-cross"></span>
                </a>
            </header>
            <section class="profileBox row whitebox">
                <div class="col-xs-7 col-sm-9 profileBox-left">
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
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-5 col-sm-3 profileBox-right">
                    <div class="signOut">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span class="fa fa-power-off"></span>
                            <p>Se déconnecter</p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </section>
            <ul class="menuList">
                @if (Auth::check())
                @else
                    <li><a href="" >Se connecter</a></li>
                @endif
                <li><a href="#">Le concept</a></li>
                <li><a href="#">Les communautés</a></li>
                <li><a href="#">Le Mag</a>
                <!-- <ul class="subMenu">
                        @if (Auth::check())
                @else
                    <li><a href="" >Se connecter</a></li>
                @endif
                        <li><a href="#">Le concept</a></li>
                        <li><a href="#">Les communautés</a></li>
                    </ul>-->
                </li>
            </ul>
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

                                        <h2 class="redline">{{$prenom}} {{$nom}}</h2> <span class="profile-tag color2-bg">{{$role_user}}</span>
                                        <p>{{$description}}</p>
                                        <div class="profile-details-contact color2">
                                            <p><span>Tel.</span>{{$utilisateur->mobile}}</p>
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
                            <p>Gérer votre profil et vos adhésions aux communautés</p>
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
                            <li class="col-md-12 col-sm-4 col-xs-4 current"><a data-wizztab="tab-profile" class="wizztablink" href="javascript:void(0);" id="c_profil"><img src="{{asset("public/new_src/profil/img/profile.png")}}"><span>Profil</span></a></li>
                            <li class="col-md-12 col-sm-4 col-xs-4"><a data-wizztab="tab-dashboard" class="wizztablink" href="javascript:void(0);" id="c_dashboard"><img src="{{asset("public/new_src/profil/img/dashboard.png")}}"><span>Tableau de bord</span></a></li>
                            <li class="col-md-12 col-sm-4 col-xs-4"><a data-wizztab="tab-contact" class="wizztablink" href="javascript:void(0);" id="c_contact"><img src="{{asset("public/new_src/profil/img/contact.png")}}"><span>Nous contacter</span></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-10 wizztab-content">
                        <div class="wizztab-current">
                            <div class="wizztabPanel current-tab" id="tab-profile">
                                <div class="row wizztab-current-title">
                                    <div class="col-md-12"><h1>Votre profil Membre</h1><a href="#" class="modifier wizzlink-model" data-wizzmodel="full_profile" data-toggle="modal" data-target=".editprofile">Modifier votre profil</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <section>

                                            <div class="content-box" id="infoPerso">
                                                <header>
                                                    <h3>Informations personnelles</h3>
                                                    <a href="#" class="modifier pull-right wizzlink-model" data-wizzmodel="info_personnelles" data-toggle="modal" data-target=".editprofile">Modifier</a>
                                                </header>
                                                <div class="contentBox whitebox">
                                                    <div class="row">
                                                        <div class="col-sm-4">CIVILITé</div>
                                                        <div class="col-sm-8">{{$civilite}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Nom</div>
                                                        <div class="col-sm-8">{{$nom}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Prénom</div>
                                                        <div class="col-sm-8">{{$prenom}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">DAte de NaIssance</div>
                                                        <div class="col-sm-8">{{$dateNaissance}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Sexe</div>
                                                        <div class="col-sm-8">{{$sexe}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">IdentifiAnt</div>
                                                        <div class="col-sm-8">{{$id_wizzas}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Adresse Mail</div>
                                                        <div class="col-sm-8">{{$email}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Mot De passe</div>
                                                        <div class="col-sm-8">....... <a href="#" class="modifier wizzlink-model" data-wizzmodel="passwordchange" data-toggle="modal" data-target=".editprofile">&nbsp;&nbsp;&nbsp;Changer le mot de passe</a></div>
                                                    </div>

                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-sm-4">Adresse</div>
                                                        <div class="col-sm-8">{{$adresse}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Code Postal</div>
                                                        <div class="col-sm-8">{{$codePostal}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Ville</div>
                                                        <div class="col-sm-8">{{$ville}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Pays</div>
                                                        <div class="col-sm-8">{{$pays}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Téléphone Mobile</div>
                                                        <div class="col-sm-8">{{$mobile}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Téléphone Fixe</div>
                                                        <div class="col-sm-8">{{$telephone}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Profession</div>
                                                        <div class="col-sm-8">{{$profession}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Sponsor</div>
                                                        <div class="col-sm-8">{{$sponsor}}</div>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="content-box">
                                                <header>
                                                    <h3>Profil</h3>
                                                    <a href="#" class="modifier pull-right wizzlink-model" data-wizzmodel="profil-model" data-toggle="modal" data-target=".editprofile">Modifier</a>
                                                </header>
                                                <div class="contentBox whitebox" id="mydiv2">
                                                    <div class="row">
                                                        <div class="col-sm-4">Photo de profil</div>
                                                        <div class="col-sm-8">
                                                            <div class="profile-pic"><figure class="img-circle"><img src="{{asset($avatar)}}" alt=""></figure></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Statut</div>
                                                        <div class="col-sm-8 split_el">
                                                            {{$role_user}}-{{$profession}}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Pseudo</div>
                                                        <div class="col-sm-8">{{$pseudo}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Description</div>
                                                        <div class="col-sm-8">{{$description}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Compétences</div>
                                                        <div class="col-sm-8">{{$competences}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Interets</div>
                                                        <div class="col-sm-8">{{$interets}}</div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="content-box">
                                                <header>
                                                    <h3>Mes réseaux sociaux</h3>
                                                    <a href="#" class="modifier pull-right wizzlink-model" data-wizzmodel="sociaux" data-toggle="modal" data-target=".editprofile">Modifier</a>
                                                </header>
                                                <div class="contentBox whitebox" >
                                                    <div id="mydiv4">

                                                        @if((empty($rs_user['page_facebook']))&&(empty($rs_user['page_google']))&&(empty($rs_user['page_twitter']))&&(empty($rs_user['page_linkedin'])))
                                                            <a href="#" class="wizzlink-model" data-wizzmodel="sociaux" data-toggle="modal" data-target=".editprofile"  style="color:#999 !important;"> <h3>Ajouter des liens vers vos réseaux sociaux</h3></a>
                                                        @endif

                                                        <ul class="socialList">
                                                            @if(!empty($rs_user['page_facebook']))
                                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                            @endif
                                                            @if(!empty($rs_user['page_google']))
                                                                <li><a href="#"><span class="fa fa-google"></span></a></li>
                                                            @endif
                                                            @if(!empty($rs_user['page_twitter']))
                                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                            @endif
                                                            @if(!empty($rs_user['page_linkedin']))
                                                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                            @endif
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="content-box">
                                                <header>
                                                    <h3>Moyen de paiement</h3>
                                                    <a href="#" class="modifier pull-right wizzlink-model" data-wizzmodel="paiement" data-toggle="modal" data-target=".editprofile">Modifier</a>
                                                </header>
                                                <div class="contentBox whitebox"  id="mydiv3">
                                                    <div class="row">
                                                        <div class="col-sm-4">Type de paiement</div>
                                                        <div class="col-sm-8">{{$paiement_user['type']}}</div>

                                                    </div>

                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-sm-4">IBAN</div>
                                                        <div class="col-sm-8">{{$paiement_user['IBAN']}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">BIC</div>
                                                        <div class="col-sm-8">{{$paiement_user['BIC']}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Adresse du propriétaire du compte</div>
                                                        <div class="col-sm-8"><!--SG PARIS 15 <br> 15, rue Convention <br> 75015 Paris-->{{$paiement_user['adresse_propriaire']}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">Nom du propriétaire du compte</div>
                                                        <div class="col-sm-8">{{$paiement_user['nom_propriaire']}}</div>
                                                    </div>


                                                </div>
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
                                                <?php  if(count($communautes)>0)
                                                {
                                                ?>

                                                <div class="col-md-8">
                                                    <p class="mtb">Gérez vos adhésions aux communautés et vos souscriptions</p>
                                                    <!-- <div class="alert alert-warning" role="alert">Votre contrat <strong>Golfeurs</strong> arrive à expiration dans <strong>30 jours</strong></div>-->

                                                </div>
                                                <?php }else{?>
                                                <div class="col-md-8">
                                                    <p class="mtb">Vous n'avez pas encore rejoins de communauté ! <br>Ne perdez plus de temps !<br>Profitez dès aujourd'hui de toutes les possibilités de Wizzas !
                                                    </p>

                                                    <!-- <div class="alert alert-warning" role="alert">Votre contrat <strong>Golfeurs</strong> arrive à expiration dans <strong>30 jours</strong></div>-->

                                                </div>
                                            <?php } ?>
                                            <!--<div class="col-md-4"><a href="#" class="btn btn-primary">Renouveler</a></div>-->
                                            </div>
                                        </header>
                                        <div class="commuList">
                                            <div class="row mtb">
                                                @foreach($communautes as $communaute)


                                                    <?php
                                                    $limit_descrip = str_limit($communaute->description , $limit = 150, $end = '...');

                                                    ?>
                                                    <div class="col-xs-6">
                                                        <div class="commubox mb">
                                                            <a href="#">
                                                                <figure>
                                                                    <img src="https://wizzas.orevon.eu/adminpreprod/uploads/communaute_logo/{{$communaute->logo}}" alt="" class="img-responsive" style="height: 500px !important;">
                                                                </figure>
                                                            </a>
                                                            <div class="details">
                                                                <hgroup>
                                                                    <h4>{{$communaute->title}}</h4>
                                                                    <h5 class="showonhover color2">{{$communaute->membre}} membres</h5>
                                                                </hgroup>
                                                                <p class="showonhover hidden-xs">
                                                                    <strong>Prix negocié: 25%</strong>
                                                                    {!!html_entity_decode($limit_descrip)!!}
                                                                </p>
                                                                <div class="btn-div">
                                                                    <a href="#" class="btn btn-default">Téléchargder mon contrat</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /#tab-dashboard -->
                            <div class="wizztabPanel" id="tab-contact">
                                <div class="row bonjour">
                                    <div class="col-md-8">
                                        <h1>Bonjour!</h1>
                                        <p class="mtb">Laissez nous un message ou initiez une suggestion ou une nouvelle communauté</p>
                                        <form class="" id="formContact" role="form" method="POST" enctype="multipart/form-data">
                                            <p>
                                                <select class="form-control mb" name="subjectMail">
                                                    <option value="Aide">Aide</option>
                                                    <option value="Demande d’assurance">Demande d’assurance</option>
                                                    <option value="Besoin d’assurance">Besoin d’assurance</option>
                                                </select>
                                            </p>

                                            <p>
                                                <textarea class="form-control mb" name="messageMail"></textarea>
                                            </p>

                                            <a id="sendContactMail" class="btn btn-primary">Envoyer le Message</a>
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

    <footer class="footerMain">
        <div class="container">
            <div class="row mt">
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <a href="#" class="logo-footer"><img src="{{asset("public/new_src/profil/img/logo_footer.png")}}" alt="" width="160"></a>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <ul class="social horiz-li">
                                <li><a href="#" class="fb"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#" class="insta"><span class="fa fa-instagram"></span></a></li>
                                <li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
                            </ul>
                            <ul class="footer-list">
                                <li><a href="mailto:contact@wizzas.fr">Contactez-nous</a></li>
                                <!--<li><a href="#">Plan du site</a></li>-->
                                <li><a href="/preprod/cgv">CGV</a></li>
                                <li><a href="/preprod/protection">Vie Privée</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h4 class="footer-title">CONTACT</h4>
                            <address>
                                <p>WIZZAS SAS</p>
                                <p>4, rue du Pont</p>
                                <p>75008 Paris</p>
                                <br>
                                <p>+ 33 09 78 45 78 12</p>
                                <br>
                                <p><a href="mailto:contact@wizzas.fr">contact@wizzas.fr</a></p>
                                <p></p>
                            </address>
                        </div>
                        <div class="col-md-5">
                            <p style="display: inline-block;"><strong>&copy; WIZZAS 2017</strong></p>
                            <a href="/preprod/mention_legale" class="pull-right">Mentions légales</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm hidden-xs">
                    <p>
                        WIZZAS est la 1ère plateforme digitale d’achats groupés en assurance. Regroupés au sein de communautés, les membres y expriment leurs besoins en assurances et services associés.<br>
                        <br>
                        WIZZAS se charge ensuite de négocier avec les assureurs. Le but est de construire ensemble des assurances aux meilleures conditions de prix et de services.

                    </p>

                </div>
            </div>
        </div>
    </footer>

</div>








<!-- Modal -->
<div class="modal fade editprofile" tabindex="-1" role="dialog" aria-labelledby="editprofile">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close_modal"><span aria-hidden="true">&times;</span></button>


                <div class="container-fluid full_profile wizzObj-model" id="full_profile">

                    <div class="content-box wizzObj-model" id="info_personnelles">


                        <header>
                            <h3>Modifier vos informations personnelles</h3>
                            <small class="color2 mts">Remplissez tous les champs comportant un astérisque *</small>

                        </header>

                        <form  role="form" method="PATCH" id="form1" enctype="multipart/form-data">
                            <div class="contentBox whitebox">
                                <div class="row">
                                    <div class="col-sm-4">CIVILITé</div>
                                    <div class="col-sm-8">
                                        <select class="form-control  chosen-select" id="civilite" name="civilite">
                                            <option value="Mr" <?php if($civilite == "Mr") echo"selected"; ?>>Mr</option>
                                            <option value="Mme" <?php if($civilite == "Mme") echo"selected"; ?>>Mme</option>
                                            <option value="Mlle" <?php if($civilite == "Mlle") echo"selected"; ?>>Mlle</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Nom <span class="color2">*</span></div>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="name" value="{{$nom}}" id="name" type="text">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Prénom <span class="color2">*</span></div>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="prenom" value="{{$prenom}}" id="prenom" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">DAte de NaIssance</div>
                                    <div class="col-sm-8">
                                        <input id="datepicker" class="form-control datepicker lesswidth" name="dateNaissance" value="{{$dateNaissance}}" type="text">

                                        <span class="icon-calendar"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Sexe</div>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="sexe" name="sexe">
                                            <option value="M" <?php if($utilisateur->sexe == "M") echo"selected"; ?>>M</option>
                                            <option value="F" <?php if($utilisateur->sexe == "F") echo"selected"; ?>>F</option>
                                        </select>
                                        <!--<select class="form-control chosen-select">
                                            <option selected="">Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">IdentifiAnt</div>
                                    <div class="col-sm-8">
                                        <p>FR-1701-CD4309</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Adresse Mail <span class="color2">*</span></div>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="email" value="{{$email}}" id="email" type="email"><!-- datepicker -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">Addresse Ligne 1 <span class="color2">*</span></div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="adresse" id="adresse" value="{{$adresse}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Addresse Ligne 2</div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="adresse2" id="adresse2"  value="{{$adresse2}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Code Postal <span class="color2">*</span></div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="codePostal" id="codePostal" value="{{$codePostal}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Ville <span class="color2">*</span></div>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="ville" id="ville" type="text" value="{{$ville}}">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">PAys <span class="color2">*</span></div>
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
                                <div class="row">
                                    <div class="col-sm-4">Téléphone Mobile <span class="color2">*</span></div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="mobile" id="mobile" value="{{$mobile}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Téléphone Fixe</div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="telephone" id="telephone" type="text" value="{{$telephone}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Profession <span class="color2">*</span></div>
                                    <div class="col-sm-8">

                                        <select class="form-control chosen-select" id="profession" name="profession">
                                            <option value="salarié" <?php if($utilisateur->profession == "salarié") echo"selected"; ?>>Salarié</option>
                                            <option value="salarié cadre" <?php if($utilisateur->profession == "salarié cadre") echo"selected"; ?>>Salarié cadre</option>
                                            <option value="fonctionnaire" <?php if($utilisateur->profession == "fonctionnaire") echo"selected"; ?>>Fonctionnaire</option>
                                            <option value="enseignant" <?php if($utilisateur->profession == "enseignant") echo"selected"; ?>>Enseignant</option>
                                            <option value="agriculteur" <?php if($utilisateur->profession == "agriculteur") echo"selected"; ?>>Agriculteur</option>
                                            <option value="artisan" <?php if($utilisateur->profession == "artisan") echo"selected"; ?>>Artisan</option>
                                            <option value="commerçant" <?php if($utilisateur->profession == "commerçant") echo"selected"; ?>>Commerçant</option>
                                            <option value="vrp" <?php if($utilisateur->profession == "vrp") echo"selected"; ?>>VRP</option>
                                            <option value="profession libérale" <?php if($utilisateur->profession == "profession libérale") echo"selected"; ?>>Profession libérale</option>
                                            <option value="entrepreneur" <?php if($utilisateur->profession == "entrepreneur") echo"selected"; ?>>Entrepreneur</option>
                                            <option value="recherche d’emploi" <?php if($utilisateur->profession == "recherche d’emploi") echo"selected"; ?>>Recherche d’emploi</option>
                                            <option value="sans profession" <?php if($utilisateur->profession == "sans profession") echo"selected"; ?>>Sans profession</option>
                                            <option value="retraité" <?php if($utilisateur->profession == "retraité") echo"selected"; ?>>Retraité</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Situation Matrimoniale <span class="color2">*</span></div>
                                    <div class="col-sm-8">
                                        <select class="form-control chosen-select" id="situation_matrimoniale" name="situation_matrimoniale">
                                            <option value="célibataire" <?php if($utilisateur->situation_matrimoniale == "célibataire") echo"selected"; ?>>Célibataire</option>
                                            <option value="marié(e)" <?php if($utilisateur->situation_matrimoniale == "marié(e)") echo"selected"; ?>>Marié(e)</option>
                                            <option value="pacsé(e)" <?php if($utilisateur->situation_matrimoniale == "pacsé(e)") echo"selected"; ?>>Pacsé(e)</option>
                                            <option value="concubin(e)" <?php if($utilisateur->situation_matrimoniale == "concubin(e)") echo"selected"; ?>>Concubin(e)</option>
                                            <option value="divorcé(e)" <?php if($utilisateur->situation_matrimoniale == "divorcé(e)") echo"selected"; ?>>Divorcé(e)</option>
                                            <option value="veuf/ve" <?php if($utilisateur->situation_matrimoniale == "veuf/ve") echo"selected"; ?>>Veuf/ve</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Avez-vous des Enfants <span class="color2">*</span></div>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="nombre_enfant" id="nombre_enfant" type="number" value="{{$nombre_enfant}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Sponsor</div>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="sponsor" id="sponsor" type="text" value="{{$sponsor}}">
                                    </div>
                                </div>
                                <small class="hidden" style="color: #057D91;" id="succ_edit"> Votre profil a été modifié avec succès</small>
                                <div class="modal-btn-div mtb">

                                    <button type="button" class="btn btn-primary" id="btn">Sauvegarder</button>
                                    <button type="button" class="btn btn-default btn-colored btn-colored-default" data-dismiss="modal">Retour</button>
                                </div>
                            </div>
                        </form>


                    </div>
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
                                    <button type="button" class="btn btn-default btn-colored btn-colored-default" data-dismiss="modal">Retour</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!---------------------------------------------------------->
                    <hr>
                    <div class="content-box wizzObj-model" id="profil-model">
                        <header>
                            <h3>Modifier votre profil</h3>
                            <small class="hidden" style="color: #057D91;" id="succ_edit2"> Votre profil a été modifié avec succès</small>
                        </header>
                        <form  role="form" method="PATCH" id="form2" enctype="multipart/form-data">
                            <div class="contentBox whitebox">
                                <div class="row">
                                    <div class="col-sm-4">Statut</div>
                                    <div class="col-sm-8"> {{$role_user}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Photo de Profil</div>

                                    <div class="col-sm-8">

                                        <input type="file" name="photo1" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                                        <label for="file-1" class="form-control fileupload-label"><span>Parcourir</span></label>

                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img src="{{asset($avatar_g)}}" name="preview" id="preview_image" class="avatar" style="width: 30%;">
                                                <input id="photo" name="photo" value="" type="hidden">
                                                <input name="prefix" value="profil" type="hidden">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Pseudo</div>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="pseudo" id="pseudo" type="text" value="{{$pseudo}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Description</div>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="description" id="description">{{$description}}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Mes Compétences</div>
                                    <div class="col-sm-8">

                                        <select class="form-control chosen-multiselect" multiple style="" tabindex="4" id="competences_select">
                                            <option selected="" id="default_option1">Ajouter compétences</option>
                                            <option>Informatique</option>
                                            <option>Développement</option>
                                        </select>
                                        <input type="text" class="hidden" id="competences" name="competences"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Interets <span class="color2">*</span></div>
                                    <div class="col-sm-8">
                                        <select class="form-control chosen-multiselect" multiple style="" tabindex="4" id="interets_select">
                                            <option selected="" id="default_option2">Ajouter interets</option>
                                            <option>Communauté</option>
                                            <option>Voyage</option>
                                        </select>
                                        <input type="text" class="hidden" id="interets" name="interets"/>
                                    </div>
                                </div>
                                <div class="modal-btn-div mtb">
                                    <button type="button" class="btn btn-primary" id="btn1">Sauvegarder</button>
                                    <button type="button" class="btn btn-default btn-colored btn-colored-default" data-dismiss="modal">Retour</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="content-box wizzObj-model" id="sociaux">
                        <form  role="form" method="PATCH" id="form4" enctype="multipart/form-data">
                            <div class="contentBox whitebox">
                                <div class="row">
                                    <div class="col-sm-4">Mes réseaux sociaux</div>
                                    <small class="hidden" style="color: #057D91;" id="succ_edit4"> Votre réseaux sociaux ont été modifiés avec succès</small>
                                </div>

                                <div class="col-sm-12">
                                    <ul class="socialList social-sm">

                                        <li id="iconFB" class="<?php if(empty($rs_user['page_facebook'])) echo 'hidden';?>"><a href="#"><span class="fa fa-facebook"></span></a><a id="removeFB" class="removeThis"></a></li>


                                        <li id="iconGM"  class="<?php if(empty($rs_user['page_google'])) echo 'hidden';?>"><a href="#"><span class="fa fa-google"></span></a><a id="removeGM" class="removeThis"></a></li>

                                        <li id="iconTW"  class="<?php if(empty($rs_user['page_twitter'])) echo 'hidden';?>"><a href="#"><span class="fa fa-twitter"></span></a><a id="removeTW" class="removeThis"></a></li>


                                        <li id="iconLK"  class="<?php if(empty($rs_user['page_linkedin'])) echo 'hidden';?>"><a href="#"><span class="fa fa-linkedin"></span></a><a id="removeLK" class="removeThis"></a></li>

                                    </ul>


                                </div>
                                <div class="row">
                                    <a id="addRS" class="col-sm-4 add_social pull-right"><span></span>Ajouter</a>
                                    <div class="col-sm-8 hidden" id="RS_chose">
                                        <select class="form-control chosen-select" id="RS_select" name="RS_select">
                                            <option  value="">Sélèctionnez un réseau social</option>
                                            <option  value="FB">Facebook</option>
                                            <option value="GM">Google+</option>
                                            <option  value="LK">LinkedIn</option>
                                            <option  value="TW">Twitter</option>

                                        </select>


                                    </div>
                                    <div class="col-sm-8" style="margin-top: 10px;">
                                        <div class="row  hidden" id="link_fb">
                                            <div class="col-sm-4">Lien facebook</div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder=""  name="link_fb" id="fbL" value="<?php if(!empty($rs_user['page_facebook'])) echo $rs_user['page_facebook'];?>">
                                            </div>
                                        </div>
                                        <div class="row  hidden" id="link_gm">
                                            <div class="col-sm-4">Lien google+</div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder=""  name="link_gm" id="gmL"  value="<?php if(!empty($rs_user['page_google'])) echo $rs_user['page_google'];?>">
                                            </div>
                                        </div>
                                        <div class="row  hidden" id="link_lk">
                                            <div class="col-sm-4">Lien linkedin</div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder=""  name="link_lk" id="lkL"  value="<?php if(!empty($rs_user['page_linkedin'])) echo $rs_user['page_linkedin'];?>">
                                            </div>
                                        </div>
                                        <div class="row  hidden" id="link_tw">
                                            <div class="col-sm-4">Lien twitter</div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder=""  name="link_tw" id="twL"  value="<?php if(!empty($rs_user['page_twitter'])) echo $rs_user['page_twitter'];?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-btn-div mtb">
                                    <button type="button" class="btn btn-primary" id="btn3">Sauvegarder</button>
                                    <button type="button" class="btn btn-default btn-colored btn-colored-default" data-dismiss="modal">Retour</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="content-box wizzObj-model" id="paiement">
                        <header>
                            <h3>Ajouter un moyen de paiement</h3>
                            <small class="hidden" style="color: #057D91;" id="succ_edit3"> Votre moyen de paiement a été modifié avec succès</small>
                        </header>
                        <form  role="form" method="PATCH" id="form3" enctype="multipart/form-data">
                            <div class="contentBox whitebox">
                                <div class="row">
                                    <div class="col-sm-4">Type de Paiement <span class="color2">*</span></div>
                                    <div class="col-sm-8">
                                        <select class="form-control chosen-select" id="type" name="type">

                                            <option value="Compte Bancaire">Compte Bancaire</option>

                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="small mts text-normal"><strong>En cliquant sur le bouton “Ajouter”, un document sera télécharger.</strong> Veuillez suivre la procédure décrite dans le document pour valider le moyen de paiement. Votre compte bancaire sera validé dans les 24h à 48h à compter de la réception de votre autorisation de prélévement.  </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">IBAN <span class="color2">*</span></div>
                                    <div class="col-sm-8">

                                        <input type="text" class="form-control" placeholder="" value="{{$paiement_user['IBAN']}}" name="IBAN" id="IBAN">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">BIC <span class="color2">*</span></div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="" value="{{$paiement_user['BIC']}}" name="BIC" id="BIC">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Adresse du Propriétaire  du compte <span class="color2">*</span></div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="" value="{{$paiement_user['adresse_propriaire']}}" name="adresse_propriaire" id="adresse_propriaire">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Nom du Propriétaire  du compte <span class="color2">*</span></div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="" value="{{$paiement_user['nom_propriaire']}}" name="nom_propriaire" id="nom_propriaire">
                                    </div>
                                </div>
                                <div class="row pb0">
                                    <div class="col-sm-12">
                                        <p class="text-normal small mt">
                                            Sans l’accès à vos données personnelles, les équipes de Wizzas et les Assureurs seront dans l’incapacité de remplir vos contrats. Vos informations sont modifiables à tout instant. Pour tout information supplémentaire n’hésitez pas à nous écrire <a href="mailto:contact@wizzas.com">contact@wizzas.com</a>
                                        </p>
                                        <div class="i-check mts">
                                            <p class="small text-normal">
                                                <label> <input type="checkbox" class="i-checks" id="agree" name="agree">J’autorise Wizzas à envoyer mes informations personnelles aux partenaires assurances. </label>
                                            </p>
                                            <a id="agree-error" class="hidden" style="font-size: 12px;">Accepter les conditions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="modal-btn-div mtb">
                            <button type="button" class="btn btn-primary" id="btn2">Sauvegarder</button>
                            <button type="button" class="btn btn-default btn-colored btn-colored-default" data-dismiss="modal">Supprimer</button>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>






<script src="{{asset("public/new_src/profil/js/vendor/jquery-1.12.0.min.js")}}"></script>
<script src="{{asset("public/new_src/profil/js/bootstrap.min.js")}}"></script>

<script src="{{asset("public/new_src/profil/plugins/datapicker/bootstrap-datepicker.js")}}"></script>
<script src="{{asset("public/new_src/profil/plugins/iCheck/icheck.min.js")}}"></script>
<script src="{{asset("public/new_src/profil/plugins/chosen/chosen.jquery.js")}}"></script>
<script src="{{asset("public/new_src/profil/plugins/fileupload/custom-file-input.js")}}"></script>

<script src="{{asset("public/new_src/profil/js/plugins.js")}}"></script>
<script src="{{asset("public/new_src/profil/js/main.js")}}"></script>
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

    /***** edit password ****/
    $("#form_edit_pass").validate({
        errorElement: 'span',
        errorClass: 'help-inline',
        rules: {


            password: {required: true,minlength: 8},
            password_confirmation: {

                equalTo: "#password"
            }
        },
        messages: {
            password: 'Mot de passe obligatoire, il doit contenir au moins 8 caractères',
            password_confirmation:"Les mots de passe ne sont pas identiques!"

        }
    });

    $('#btn_pass').click(function() {

        var iduser = $('#iduser').val();


        var pathname = window.location.pathname;


        //shortUrl=pathname.substring(0,pathname.lastIndexOf("/"));
        shortUrl = pathname+'/'+iduser;

        console.log('id user='+shortUrl);





        if($("#form_edit_pass").valid()){

            var form = $('#form_edit_pass');
            $.ajax( {
                type: "PATCH",
                url: shortUrl,
                data: form.serialize(),
                success: function( response ) {
                    console.log('okkk'+response);

                    $("#error_edit_pass").addClass("hidden");
                    $("#succ_edit_pass").removeClass("hidden");
                    setTimeout(
                            function()
                            {
                                $("#succ_edit_pass").addClass("hidden");


                                $('#close_modal').trigger("click");
                            }, 3000);


                },
                error:function( response ) {
                    console.log('erreur'+response);
                    $("#error_edit_pass").removeClass("hidden");
                    $("#succ_edit_pass").addClass("hidden");

                }
            } );
            // $('#form1').submit();
        }



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







    $('#sendContactMail').click(function(){
        var iduser = $('#iduser').val();


        var pathname = window.location.pathname;

        shortUrl = pathname+'/'+iduser+'/mail';
        var form = $('#formContact');
        $.ajax( {
            type: "POST",
            url: shortUrl,
            data: form.serialize(),
            success: function( response ) {

                console.log('goood'+response);
            },
            error:function( response ) {
                console.log('erreur'+response);
                $("#email_exist").removeClass("hidden");
            }
        } );
    });
    $('#addRS').click(function(){
        $('#RS_chose').removeClass('hidden');
    });
    $('#removeFB').click(function(){
        $('#link_fb').addClass('hidden');
        $('#fbL').val('');
        $('#iconFB').addClass('hidden');

    });
    $('#removeGM').click(function(){
        $('#link_gm').addClass('hidden');
        $('#gmL').val('');
        $('#iconGM').addClass('hidden');
    });
    $('#removeTW').click(function(){
        $('#link_tw').addClass('hidden');
        $('#twL').val('');
        $('#iconTW').addClass('hidden');
    });
    $('#removeLK').click(function(){
        $('#link_lk').addClass('hidden');
        $('#lkL').val('');
        $('#iconLK').addClass('hidden');
    });


    $('#RS_select').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;

        if(valueSelected=='FB'){
            $('#link_fb').removeClass('hidden');
            $('#iconFB').removeClass('hidden');
        }else if(valueSelected=='GM'){
            $('#link_gm').removeClass('hidden');
            $('#iconGM').removeClass('hidden');
        }else if(valueSelected=='LK'){
            $('#link_lk').removeClass('hidden');
            $('#iconLK').removeClass('hidden');
        }else if(valueSelected=='TW'){
            $('#link_tw').removeClass('hidden');
            $('#iconTW').removeClass('hidden');
        }

    });


    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                console.log("set with success");
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
        var baseUrlLog = 'https://wizzas.orevon.eu/preprod/uploads/profil/';
        fd.append('prefix',$("[name='prefix']").val());
        fd.append( 'image', this.files[0] );
        $.ajax({
            url: "https://wizzas.orevon.eu/preprod/file/uploads",
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
                console.log($err);

            }
        });
    });



    $("#form1").validate({
        errorElement: 'span',
        errorClass: 'help-inline',
        rules: {
            name: "required",
            prenom: "required",
            email:{ required: true,
                email: true,
            },
            mobile: "required",
            pays: "required",
            codePostal: "required",
            ville: "required",
            profession: "required",
            situation_matrimoniale: "required",
            adresse: "required"


        },
        messages: {
            email: "format email aa\@aa.aa",
            name: "Nom obligatoire",
            prenom: "Prénom obligatoire",
            mobile: "Télèphone mobile obligatoire",
            pays: "Pays obligatoire",
            codePostal: "Code postal obligatoire",
            ville: "Ville obligatoire",
            profession: "Profession obligatoire",
            situation_matrimoniale: " Situation matrimoniale obligatoire",
            adresse: "Adresse obligatoire"

        }
    });
    $("#form3").validate({
        errorElement: 'span',
        errorClass: 'help-inline',
        rules: {
            type: "required",
            IBAN: "required",

            BIC: "required",
            adresse_propriaire: "required",
            nom_propriaire: "required"


        },
        messages: {
            type: "Type de paiement obligatoire",
            IBAN: "IBAN obligatoire",
            BIC: "BIC obligatoire",
            adresse_propriaire: "Adresse propriaire obligatoire",
            nom_propriaire: "Nom propriaire obligatoire"


        }
    });
    $("#form2").validate({
        errorElement: 'span',
        errorClass: 'help-inline',
        rules: {
            description: {

                maxlength: 250
            }


        },
        messages: {
            description: "description ne doit pas dépassée 250 caractéres"


        }
    });


    $('#btn').click(function() {
        var iduser = $('#iduser').val();
        console.log('id user='+iduser);

        var pathname = window.location.pathname;

        shortUrl = pathname+'/'+iduser;
        console.log('id user='+shortUrl);


        if($("#form1").valid()){

            var form = $('#form1');
            $.ajax( {
                type: "PATCH",
                url: shortUrl,
                data: form.serialize(),
                success: function( response ) {
                    console.log('okkk'+response);
                    $("#succ_edit").removeClass("hidden");
                    $("#infoPerso").load(location.href + " #infoPerso");
                    $("#profile-details").load(location.href + " #profile-details");
                    $("#mydiv").load(location.href + " #mydiv");
                    $("#mydiv1").load(location.href + " #mydiv1");
                    setTimeout(
                            function()
                            {

                                $("#succ_edit").addClass("hidden");
                                //$("#profile-details").html(response).fadeIn().delay(2000);

                                $('#close_modal').trigger("click");
                                //location.reload();
                            }, 3000);
                },
                error:function( response ) {
                    console.log('erreur'+response);
                    $("#email_exist").removeClass("hidden");
                }
            } );
            // $('#form1').submit();
        }

    });
    //competences_select_chosen
    $('#btn1').click(function() {
        var options = new Array();
        var optionss = new Array();
        $('#default_option1').removeAttr("selected");
        $('#default_option2').removeAttr("selected");

        $('#competences_select > option:selected').each(

                function(i) {
                    options[i] = $(this).val();
                });
        var competencesString = options.join(", ");
        $('#competences').val(competencesString);

        $('#interets_select > option:selected').each(

                function(i) {
                    optionss[i] = $(this).val();
                });
        var interetsString = optionss.join(", ");
        $('#interets').val(interetsString);

        var iduser = $('#iduser').val();


        var pathname = window.location.pathname;

        shortUrl = pathname+'/'+iduser;

        if($("#form2").valid()) {
            var form = $('#form2');
            $.ajax({
                type: "PATCH",
                url: shortUrl,
                data: form.serialize(),
                success: function (response) {

                    $("#succ_edit2").removeClass("hidden");

                    $("#profile-details").load(location.href + " #profile-details");

                    $("#mydiv1").load(location.href + " #mydiv1");
                    $("#mydiv2").load(location.href + " #mydiv2");
                    setTimeout(
                            function () {

                                $("#succ_edit2").addClass("hidden");
                                $('#close_modal').trigger("click");

                            }, 3000);
                },
                error: function (response) {
                    console.log('erreur' + response);
                    $("#email_exist").removeClass("hidden");
                }
            });

        }
    });

    $('#btn2').click(function() {

        var iduser = $('#iduser').val();


        var pathname = window.location.pathname;


        shortUrl = pathname+'/'+iduser;


        if($("#form3").valid()){
            if($('#agree').is(':checked')) {

                $('#agree-error').addClass('hidden');
                var form = $('#form3');
                $.ajax( {
                    type: "PATCH",
                    url: shortUrl,
                    data: form.serialize(),
                    success: function( response ) {

                        $("#succ_edit3").removeClass("hidden");

                        $("#mydiv3").load(location.href + " #mydiv3");
                        setTimeout(
                                function()
                                {

                                    $("#succ_edit3").addClass("hidden");
                                    $('#close_modal').trigger("click");

                                }, 3000);
                    },
                    error:function( response ) {
                        console.log('erreur'+response);

                    }
                } );
            }
            else{

                $('#agree-error').removeClass('hidden');
            }

        }



    });

    $('#btn3').click(function() {


        var iduser = $('#iduser').val();


        var pathname = window.location.pathname;

        shortUrl = pathname+'/'+iduser;


        var form = $('#form4');
        $.ajax( {
            type: "PATCH",
            url: shortUrl,
            data: form.serialize(),
            success: function( response ) {
                $("#succ_edit4").removeClass("hidden");

                $("#mydiv4").load(location.href + " #mydiv4");
                setTimeout(
                        function()
                        {

                            $("#succ_edit4").addClass("hidden");
                            $('#close_modal').trigger("click");

                        }, 3000);
            },
            error:function( response ) {
                console.log('erreur'+response);
                $("#email_exist").removeClass("hidden");
            }
        } );


    });
</script>
</body>
</html>
