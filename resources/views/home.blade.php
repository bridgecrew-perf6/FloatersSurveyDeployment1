@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script
  src="https://browser.sentry-cdn.com/6.2.0/bundle.min.js"
  integrity="sha384-PWBASVWyeEeNsEw6zDTEwryGvuiH1xuxnlu/n+GOI777vnfbqyYLzqCf+najQLoi"
  crossorigin="anonymous"
></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<script src="https://unpkg.com/konva@7.1.6/konva.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-JavaScript-Templates/3.19.0/js/tmpl.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script
src="https://browser.sentry-cdn.com/6.2.0/bundle.min.js"
integrity="sha384-PWBASVWyeEeNsEw6zDTEwryGvuiH1xuxnlu/n+GOI777vnfbqyYLzqCf+najQLoi"
crossorigin="anonymous"
></script> 

@section('content')
<div class="col-md-8 offset-md-5">
  <div class="col-md-7 offset-md-5">
    <a href="/en/home">
    <img height="50" width="50" src="{{url('/images/en.png')}}">      
    </a>
    <a href="/de/home">   
    <img height="50" width="50" src="{{url('/images/de.png')}}">    
    </a>
  </div>    
</div>
</div>
<div class="container">
            <div class="card">
                <div class="card-header">
                  <h1>WebStudy Floater</h1>
                </div>
                <div class="card-body">
                    <form action="{{ url (app()->getlocale() ,'results') }}" method="POST">

                        @csrf
                        <div class="card-header" name='question1'><strong>1-</strong>{{ __('msg.How old are you?')}}</div>
                            <input name="Age" type="number" class="form-control" id="Age" aria-describedby="AgeHelp" placeholder="Enter Age">
                            <small id="AgeHelp" class="form-text text-muted">Knowing your age is essential in this study!</small>
                            @error('Age')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                          <br>
                          <br>
                          <div class="card-header" name='question1'><strong>2-</strong>{{ __('msg.Gender')}}</div>
                          <div class="form-check">
                             <input class="form-check-input" type="radio" name="Gender" id="Gender" value="Female" >
                             <label class="form-check-label" for="Gender">
                               {{ __('msg.Female')}}
                             </label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Gender" id="Gender" value="Male">
                            <label class="form-check-label" for="Gender">
                              {{ __('msg.Male')}}
                           </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="Gender" id="Gender" value="Divers">
                            <label class="form-check-label" for="Gender">
                              {{ __('msg.Divers')}}
                           </label>
                          </div>
                           <br>
                           <br>
                          @include('countries')
                          <br>
                          <br>
                         <div class="card-header" name='question1'><strong>4-</strong>{{ __('msg.Are you long sighted?')}}</div>
                         <div class="form-check">
                            <input class="form-check-input" type="radio" name="Longsighted" id="Longsighted" value="Longsighted_yes" >
                            <label class="form-check-label" for="Longsighted">
                              {{ __('msg.Yes')}}
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="Longsighted" id="Longsighted" value="Longsighted_no">
                            <label class="form-check-label" for="Longsighted">
                              {{ __('msg.No')}}
                           </label>
                          </div>
                          <div class="card-header" name='question2'><strong>5-</strong>{{ __('msg.Are you short sighted?')}}</div>
                          <div class="form-check">
                             <input class="form-check-input" type="radio" name="shortsighted" id="shortsighted" value="shortsighted_yes" >
                             <label class="form-check-label" for="shortsighted">
                               {{ __('msg.Yes')}}
                             </label>
                           </div>
                           <div class="form-check">
                             <input class="form-check-input" type="radio" name="shortsighted" id="shortsighted" value="shortsighted_no">
                             <label class="form-check-label" for="shortsighted">
                               {{ __('msg.No')}}
                            </label>
                           </div>
                          <br>
                          <div class="card-header" name='question1'><strong>6-</strong>{{ __('msg.When do you have problem seeing floaters?')}}
                           <strong>You can select more than one answer</strong>
                          </div>
                          <div class="form-check">
                             <input class="form-check-input" type="checkbox" name="problem1" id="Longsighted" value="reading" >
                             <label class="form-check-label" for="problems">
                               {{ __('msg.By reading')}}
                             </label>
                           </div>
                           <div class="form-check">
                             <input class="form-check-input" type="checkbox" name="problem2" id="Longsighted" value="Car">
                             <label class="form-check-label" for="problems">
                               {{ __('msg.Driving a car')}}
                            </label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="problem3" id="Longsighted" value="PC">
                            <label class="form-check-label" for="problems">
                              {{ __('msg.Working on a PC')}}
                           </label>
                          </div>
                          <br>
                          <div class="card-header" name='question1'><strong>7-</strong>{{ __('msg.Floaters suffering degree')}}</div>
                          <br>
                          <br>
                          <ul class='likert'>   
                            <li>
                              <input type="radio" name="Degree" value="0">
                              <label>0</label>
                            </li>
                            <li>
                              <input type="radio" name="Degree" value="1">
                              <label>1</label>
                            </li>
                            <li>
                              <input type="radio" name="Degree" value="2">
                              <label>2</label>
                            </li>
                            <li>
                              <input type="radio" name="Degree" value="3">
                              <label>3</label>
                            </li>
                            <li>
                              <input type="radio" name="Degree" value="4">
                              <label>4</label>
                            </li>
                            <li>
                              <input type="radio" name="Degree" value="5">
                              <label>5</label>
                            </li>
                          <br>
                          <br>
                          <div class="card-header" name='question1'><strong>7-</strong>{{ __('msg.What type of Floaters do you see?')}}</div>
                          <div  class="card" id="images">
                          <br>
                          <div class="form-group" id="drag-items">
                            <img type="radio" name="Strands" alt="1" value="image1" height="100" width="100"
                            src="{{url('/images/Untitled-21.svg')}}" draggable="true" />
                            <img  type="radio" name="Cells" alt="2" value="image2" height="100" width="100"
                            src="{{url('/images/Untitled-22.svg')}}" draggable="true" />
                            <img type="radio"  name="Membrane" alt="3" value="image3" height="100" width="100"
                            src="{{url('/images/Untitled-23.svg')}}" draggable="true" />
                            <img type="radio"  name="Ring_shaped" alt="4" value="image4" height="100" width="100"
                            src="{{url('/images/Untitled-25.svg')}}" draggable="true" />
                          </div>
                        </div>
                        <br>
                          <div ></div>

                          <div class="row">
                                  <div class="card" id="L1">
                                        <input id="slider" type="range" name="transparency" min="0.10" max="1" step="0.10" value="1"/>
                                        <p><strong>with this slider you can change the transparency</strong></p>
                                  </div>
                          </div>
                          <br>

                          <div class="row">

                              <div  class="card" id="L3">
                                <input id="slider1" type="range" name="Blurry" min="0" max="10" step="0.10" value="0"/>
                                <p><strong> With this slider you can change the Blurity</strong></p>
                              </div>
                            <br>

                        </div>

                          <br>
                          <div id="cont" class="row">
                            <div>
                            <div class="card" class="col-md-6" id="canv_1">
                              <script src={{asset('js/java1.js')}}></script>
                              @include('canv1')
                              <br>
                              <div class="col-md-8 offset-md-5"><strong>{{ __('msg.Left Eye')}}</strong></div>
                            </div>
                            </div>
                            <div>
                            <div class="card" class="col-md-6" id="canv_2">
                              <script src={{asset('js/java2.js')}}></script>
                              @include('canv2')
                              <br>
                              <div class="col-md-8 offset-md-5"><strong>{{ __('msg.Right Eye')}}</strong></div>
                            </div>
                            </div>
                            </div>
                          <div id="input_value">

                          </div>
                          <div id="input_value2">

                          </div>
                          <br>
                          <br>
                          <br><br><br>
                          <div class="label"><h5>{{ __('msg.Data Privacy Declaration')}}</h5></div>
                          <br>
                          <div class="label">
                            
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="accept" name="accept" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              {{ __('msg.I accept that my Data would be used for scientificcal purposes and would be puplished on this Website.')}}
                            </label>
                          </div>
                          <br>
                          <br>
                          <br>
                          <button type="submit" class="btn btn-primary">{{ __('msg.submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

  </script>
@endsection