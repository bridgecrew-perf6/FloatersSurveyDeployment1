<!doctype html>
<html>
  <head>
  <title>Bar Chart</title>
  <script src="http://www.chartjs.org/dist/2.7.3/Chart.bundle.js"></script>
  <script src="http://www.chartjs.org/samples/latest/utils.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
  <style>
  #container {
    margin-left: 20px;
  }
  #container1 {
    margin-left: 20px;
  }
  #canvas {
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
  }
  #canvas {
    width: 100vw;
    height: 100vh;
  }
  #canvas1 {
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
  }
  #canvas1 {
    width: 100vw;
    height: 100vh;
  }
  </style>
  </head>
  <body>
    @include('second_Table')

    <br>
    <br>
    <br>
    <select class="form-control float-left " id="change" name="change" style="margin-left: 60px; width:400px" required>
      <option selected disabled>Please choose an option!</option>
      <option value="Age">Number of patients according to Age</option>
      <option value="Longsighted">Longsighted patients according to their Age</option>
      <option value="membrane" >Floater Type-Membrane according to Age</option>
      <option value="strands" >Floater Type-Strands according to Age</option>
      <option value="cells" >Floater Type-Cells according to Age</option>
  </select>
  <script>
     $("#change").change(function(){
    
         var value=$(this).val();
         $.ajax({
          type:"GET",
            url:"{{URL::to('/en/update_chart')}}",
            data:{
                value :value
            },
            success:function(result){
               $("#first_chart").html(result);
            }


         });
     });
   </script>
   <br>
   <br>
   <div id="first_chart">
    @include('first_Table')
   </div>

  </body>
  </html>