@extends('layouts.header')

@section('content')
<div class="col-md-12 content-body">
                
<div class=" col-md-6 content_area_url">
        <form class="form-horizontal" role="form" method="POST" action="" id="form_shorten">
        <h4>
            <span>Entrez votre url,</span></h4><br>
        

            <input name='url' placeholder='url' type='text'>
            <input name='url_shorten' placeholder='resultat' type='text' id="url_shorten" readonly><br>
            @if (Auth::check())
            <br> <div class="help-inline hidden" id="error_message"></div>
            <div class="success-inline hidden" id="success_message">succés de raccourcir votre url</div>
            <br>
            <input class='animated ' type='button' value='VALIDER' id="btn_shorten">
            @else
           
            <input  type='button' value='VALIDER' href="#test-2" class="animated rejoindre_request">
            
                                    @endif


        </form>
      </div>

    <div class=" col-md-6 content_area_url">
        <h4>
            <span>Derniers liens raccourcir</span></h4><br>
            <ul>
                <?php 
               
                foreach($links as $link){ ?>
                <li><span>{{$link->updated_at}} lien: </span><a href="" onclick="return false;" target="_blank" class="links" id="{{$link->code}}">http://raccourcir.myapp/{{$link->code}}</a></li>
<br>               
			   <?php  } ?>
                                           
            </ul>
    </div>
            
            </div>

@endsection