<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   


    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
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




    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="https://unpkg.com/konva@7.1.6/konva.min.js"></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="flex">

        <div class="flex-row">    
                <style>
            #slider {
                position: absolute;
                top: 22px;
                left: 100px;
            }
            #slider1 {
                position: absolute;
                top: 22px;
                left: 100px;
            }
            #slider2 {
                position: absolute;
                top: 22px;
                left: 100px;
            }
            #slider3 {
                position: absolute;
                top: 22px;
                left: 100px;
            }
            #L1{
                width: 350px;
                background-color: rgba(169, 191, 235, 0.306);
                margin-left: 8;
                box-shadow: 2px 2px 2px rgb(123, 112, 112);            }
            #L2{
                width: 350px;
                background-color: rgba(169, 191, 235, 0.306);  
                margin-left: 380;
                box-shadow: 2px 2px 2px rgb(123, 112, 112);            }
            #L3{
                width: 350px;
                background-color: rgba(169, 191, 235, 0.306);
                margin-left: 8;            
                box-shadow: 2px 2px 2px rgb(123, 112, 112);            }
            #L4{
                width: 350px;
                background-color: rgba(169, 191, 235, 0.306); 
                margin-left: 380;           
                box-shadow: 2px 2px 2px rgb(123, 112, 112);            }
            #images{
                width: 100%;
                background-color: rgba(219, 225, 236, 0.306); 
                margin-left: ;           
                box-shadow: 1px 1px 1px rgb(123, 112, 112);            }
            #canv_1{
                border: 1px solid gray;
                margin-left: 8;           
                box-shadow: 5px 5px 5px rgb(123, 112, 112);            }
            #canv_2{
                border: 1px solid gray; 
                margin-left: 80;           

                box-shadow: 5px 5px 5px rgb(123, 112, 112);            }
            #cookie-popup { 
            text-align: center;
            height:100%;
            position: fixed;
            top: 50px;
            opacity: 50%;
            left: 0;
            right: 0;
            z-index: 9999;
            font-size:14px; 
            line-height:20px;
            padding: 20px;
            -webkit-box-shadow: 0px 0px 5px 0px rgba(149, 135, 135, 0.2);
            -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
            }
            
            #cookie-popup.hidden {
            display: none;
}




        form .likert {
        list-style:none;
        width:100%;
        margin:0;
        padding:0 0 0px;
        display:block;
        }
        form .likert:before {
        content: '';
        position:relative;
        top:11px;
        left:7%;
        display:block;
        background-color:#efefef;
        height:4px;
        width:78%;
        }
        form .likert li {
        display:inline-block;
        width:15%;
        text-align:center;
        vertical-align: top;
        }
        form .likert li input[type=radio] {
        display:block;
        position:relative;
        top:0;
        left:50%;
        margin-left:-6px;
        
        }

                    </style>
                </div>
            </div>


</head>
<body>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
