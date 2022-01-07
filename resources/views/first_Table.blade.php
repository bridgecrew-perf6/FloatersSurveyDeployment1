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
        label: 'Number of patients according to Age',
        hidden:true,
        backgroundColor: '#26B99A',
        borderWidth: 1,
        data: <?php echo json_encode($Age); ?>,
        },
        {
          label: 'Longsighted patients according to their Age',
          hidden:true,
          backgroundColor: '#ff6384',
          borderWidth: 1,
          data: <?php echo json_encode($Longsighted); ?>
       },
       {
          label: 'Floater Type-Membrane according to Age',
          hidden:true,
          backgroundColor: '#6C00A',
          borderWidth: 1,
          data: <?php echo json_encode($Membrane); ?>
       },
       {
          label: 'Floater Type-Strands according to Age',
          backgroundColor: '#ffce56',
          borderWidth: 1,
          hidden:true,
          data: <?php echo json_encode($Strands); ?>
       },
       {
          label: 'Floater Type-Cells according to Age',
          backgroundColor: '#10a2eb',
          borderWidth: 1,
          hidden:true,
          data: <?php echo json_encode($cells); ?>
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