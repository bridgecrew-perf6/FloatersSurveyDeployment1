<div id="container1" style="width: 40%;">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <div class="row">
    <div class="col-md-4">
      <label>Gender</label>
    <select class="form-control" name="" id="gender">
      <option selected disabled>please choose an option</option>
      <option <?php if(request()->get('gender')=='Male') echo "selected"?> value="Male">Male</option>
      <option <?php if((request()->get('gender')!==null) && request()->get('gender')=='Female') echo "selected"?> value="Female">Female</option>
      <option <?php if((request()->get('gender')!==null) && request()->get('gender')=='Divers') echo "selected"?> value="Divers">Divers</option>
    </select>
    </div>
    <div class="col-md-4">
      <label>Eye Diseases</label>
    <select class="form-control" name="Eye_Diseases" id="Eye_Diseases">
      <option selected disabled>please choose an option</option>
      <option <?php if(request()->get('Eye_Diseases')=='Longsighted_yes') echo "selected"?> value="Longsighted_yes">Longsighted</option>
      <option <?php if((request()->get('Eye_Diseases')!==null) && request()->get('Eye_Diseases')=='shortsighted_yes') echo "selected"?> value="shortsighted_yes">shortsighted_yes</option>
    </select>
    </div>

    <div class="col-md-4">
      <label>Floater Type</label>
    <select class="form-control" name="image" id="image">
      <option selected disabled>please choose an option</option>
      @foreach ($images as $item)

      <option <?php if((request()->get('image')!==null) && request()->get('image')==$item->floaterType) echo "selected"?> value="{{$item->floaterType}}">{{$item->floaterType}}</option>
      @endforeach
    </select>
    </div>
  
  </div>
  <script>
    $("#Eye_Diseases,#image,#gender").on('change',function(){
      debugger;
      var long=$("#Eye_Diseases").val();
    
      var gender=$("#gender").val();
      var image=$("#image").val();
      window.location.href="chartjs" + "?Eye_Diseases=" + long + "&gender=" + gender + "&image="+image;
    });
    
  </script>
  <br>
    <canvas id="canvas1"></canvas>
    </div>
    <script>
        var chart1 = {
        type: 'bar',
        data: {
        labels: [ ],
        datasets: [

        {
          label: '',
          hidden:false,
          backgroundColor: '#ffce56',
          borderWidth: 1,
          data: [<?php echo $Longsighted[0] ?>]
       },
        ]
        },
        options: {
          legend: {
            display: false
          },
          scales: {
            yAxes: [{ 
               ticks: {
                 beginAtZero:true,
                 suggestedMax: <?php echo json_encode($Data); ?>,
                      },
            scaleLabel: {
                display: true,
                labelString: 'Number of participants'
            }
            }]
          }
        }
        }
        var ctx = document.getElementById('canvas1').getContext('2d');
        new Chart(ctx, chart1);
    </script>