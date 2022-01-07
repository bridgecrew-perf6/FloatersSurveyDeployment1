<div id="container" style="width: 45%;">
   
    <canvas id="canvas"></canvas>
    </div>
    <script>
        var AgeCart = {
        type: 'bar',
        data: {
        labels: ["0 to 25 years old", "26 to 45 years old", "46 to 65 years old", "66 to 75 years old", "76 to 100 years old"],
        datasets: [
        {
        label: '',
        backgroundColor: '#7096ff',
        borderWidth: 1,
        data: <?php echo json_encode($data_one); ?>,
        }
       

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
        var ctx = document.getElementById('canvas').getContext('2d');
        new Chart(ctx, AgeCart);
    </script>    