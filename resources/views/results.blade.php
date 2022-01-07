@extends('layouts.app')
@section('content')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="col-md-3 offset-md-6">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="https://www.lzh.de/">LZH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.forschung-fom.de/">F.O.M</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dtaenschutz</a>
        <li class="nav-item">
            <a class="nav-link" href="#">Datenverwendung</a>
    </ul>
    </div>
  </nav>
  
  <br>
  <div class="row">
<div><img src="{{('/images/logoLZH.png')}}" alt="1"></div>
<div><img src="{{('/images/FOM.png')}}" alt="1"></div>
</div>
<br>
<br>
<br>
<div class="container" class="row justify-content-center">

    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1 class="row justify-content-center"><strong>Thanks for your time!!!</strong></h1>
          <br>
          <br>

            <div class="card">
                <div class="card-header">
                  <h2 class="row justify-content-center">{{ __('msg.click here if you want to download the Data')}}</h2>
                </div>
                    <a href="{{ url (app()->getlocale() ,'answers') }}" class="btn btn-dark"><h3>{{ __('msg.Download as Excel file')}}</h3></a>
                    <br>  
                    <a href="{{ url (app()->getlocale() ,'answers1') }}" class="btn btn-dark"><h3>{{ __('msg.Download as CSV file')}}</h3></a>

            </div>
            <div class="card">
                    <div class="card-header"><h2 class="row justify-content-center">{{ __('msg.click here if you want to see the Data visual Analyse')}}</h2></div>
                        <a href="{{ url (app()->getlocale() ,'chartjs') }}" class="btn btn-dark"><h3>{{ __('msg.Data Visualization')}}</h3></a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection