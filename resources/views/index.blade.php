@extends('layouts.app')
@section('content')

<?php 
  if( isset($_COOKIE['setCookieHinweis']) ) { 
    $showPopup = true;
  } else {
    $showPopup = true;
  }
  if((\Session()->get('cookieApproved'))=='true'){
    $showPopup=false;
  }
?>
<?php if($showPopup) { ?>
  <div id="cookie-popup" class="alert alert-danger">
    <div class="hinweis">
      <p><strong>{{ __('msg.We use just PHP Session cookie (Technically required)(Cannot be unaccepted)')}}</p></strong>
      <p class="small">{{ __('msg.This cookie is necessary to authenticate users in various databases and to use forms.')}}</p>
    </div> 
    <span class="more">
      <a href="datenschutz.php"><strong>{{ __('msg.Details')}}<strong></a>
    </span>
    <button class="btn  btn-primary" id="cookie-btn" onClick="cookieOk();"><strong>{{ __('msg.OK, I accept')}}<strong></button>
  </div>
<?php  }; ?>

<script>
  function cookieOk () {
    var now = new Date(); // Variable für aktuelles Datum
    var lifetime = now.getTime(); // Variable für Millisekunden seit 1970 bis aktuelles Datum
    var deleteCookie = lifetime + 2592000000; // Macht den Cookie 30 Tage gültig.

    now.setTime(deleteCookie);
    var enddate = now.toUTCString();

    document.cookie = "setCookieHinweis = set; path=/; secure; expires=" + enddate;
    document.getElementById("cookie-popup").classList.add("hidden");
   // debugger;
  //  $("#cookie-popup").show();
    ajax_cookie();
} 
</script>
<script> 
function ajax_cookie(){
  //set cookie approval to session
  jQuery.ajax({
                  url: "{{URL::to('/cookie-approval')}}",
                  method: 'get',
                  data: {
                   '_token':  "<?php echo csrf_token() ?>"
                  },
                  success: function(result){
                     console.log(result);
                  }
                });
}
</script>



<!-- Grey with black text -->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div  class="col-md-3 offset-md-6">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="https://www.lzh.de/">LZH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.forschung-fom.de/">F.O.M</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">{{__('msg.Privacy Policy')}}</a>
        <li class="nav-item">
            <a class="nav-link" href="#">{{__('msg.Data Usage')}}</a>
            <li class="nav-item">
          </li>
    </ul>
    </div>
  </nav>
  
  <br>
  <div class="row">
    <a href="https://www.lzh.de/">
      <img src="{{('/images/logoLZH.png')}}" alt="1">
    </a>
    <a href="https://www.forschung-fom.de/">
      <img src="{{('/images/FOM.png')}}" alt="1">
    </a>
 </div>
<br>
<br>
<br>
<div class="container" class="d-flex justify-content-center">
  <div class="d-flex justify-content-center">
    <div class="col-md-8 offset-md-4">
        <h1>WebStudy Floaters</h1>
        <br>
        <br>
        <br>
        <h4>{{ __('msg.Languages We Support so far!')}}</h4>
        <a href="/en">
        <img height="150" width="150" src="{{url('/images/en.png')}}">      
        </a>
        <a href="/de">   
        <img height="150" width="150" src="{{url('/images/de.png')}}">    
        </a>
   </div>    
 </div>
    <br>
    <br>
</div>
</div>

<div class="container" class="d-flex justify-content-center">
        <div class="card">
                <div class='card-header'>
                    <h2 class="row justify-content-center">
                    {{__ ('msg.Are You Sure You Want to Participate in This Study?')}}
                    </h2>
                </div>
                    <a href="{{ url (app()->getlocale() ,'home') }}" class="btn btn-dark">
                      <h3>
                      {{ __('msg.Participate')}}
                      </h3>
                    </a>
        </div>

      </div>

@endsection