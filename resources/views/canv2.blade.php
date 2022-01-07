<script>

  //==canvas 1 

  var j=0;
  var itemURL1 = '';
  var itemname1 = '';
  document
  .getElementById('drag-items')
  .addEventListener('dragstart', function(e) {
    itemURL1 = e.target.src;
    itemname1 = e.target.name;
  });
   var con1 = stage1.container();
    con1.addEventListener('dragover', function(e) {
    e.preventDefault(); // !important
});
  con1.addEventListener('drop', function(e) {
  e.preventDefault();
  stage1.setPointersPositions(e);
  j++;
 //==create input 
 var content1='<input type="hidden" required name="width_2[]" id="width_2_'+ j +'">'+
              '<input type="hidden" name="height_2[]" id="height_2_'+ j +'">'+
              '<input type="hidden" name="scaleX_2[]" id="scaleX_2_'+ j +'">'+
              '<input type="hidden" name="scaleY_2[]" id="scaleY_2_'+ j +'">'+
              '<input type="hidden" name="x_axis_2[]" id="x_axis_2_'+ j +'">'+
              '<input type="hidden" name="y_axis_2[]" id="y_axis_2_'+ j +'">'+
              '<input type="hidden" name="rotation_2[]" id="rotation_2_'+ j +'">'+
              '<input type="hidden" name="image_title_2[]" id="image_title_2_'+ j +'">'+
              '<input type="hidden" required name="transparency_2[]" id="transparency_2_'+ j +'">'+
              '<input type="hidden" required name="Blurry_2[]" id="Blurry_2_'+ j +'">';

    $("#input_value2").append(content1);
 //==end create input
 
  console.log(itemname1);
  //debugger;

  Konva.Image.fromURL(itemURL1, function(Image1) {
    layer2.add(Image1);
    Image1.position(stage1.getPointerPosition());
    Image1.draggable(true);
    Image1.name('shape');
    //debugger;
    console.log(Image1.name());
    layer2.draw();

    $("#image_title_2_"+ j ).val(itemname1);
    $("#y_axis_2_"+ j ).val(Image1.y());
        $("#x_axis_2_"+ j ).val(Image1.x());
        $("#width_2_"+ j ).val(Image1.width());
        $("#height_2_"+ j ).val(Image1.height());
        $("#scaleX_2_"+ j ).val(Image1.scaleX());
        $("#scaleY_2_"+ j ).val(Image1.scaleY());
        $("#rotation_2_"+ j ).val(Image1.rotation());
        $("#rotation_2_"+ j ).val(Image1.rotation());
        $("#y_axis_2_"+ j ).val(Image1.y());
        $("#x_axis_2_"+ j ).val(Image1.x());

   // Image1.on('click', function () {trans1(j)});



    var tr1 = new Konva.Transformer();

    layer2.add(tr1);
    stage1.add(layer2);



    Image1.on('click dragstart', function (e) {
      transform1(j);

    });
    Image1.on('click tap', function (e) {
      trans1(j);
      $("#slider").val(Image1.opacity());
      mask1(j);
      $("#slider1").val(Image1.blurRadius());
    });

      function transform1(j){
          var text1 = new Konva.Text({});
          Image1.on('transformstart', function(e) {
          });
          Image1.on('dragmove', function(e) {
            updateText1();
            h1();
          });
          Image1.on('transform1', function(e) {
            updateText1();
            
          });
          Image1.on('transformend', function(e) {
          });
          function updateText1() {
            var lines1 = [
              'x: ' + Image1.x(),
              'y: ' + Image1.y(),
              'rotation: ' + Image1.rotation(),
              'width: ' + Image1.width(),
              'height: ' + Image1.height(),
              'scaleX: ' + Image1.scaleX(),
              'scaleY: ' + Image1.scaleY(),
                                              ];
          
            text1.text1(lines1.join('\n'));
            layer2.batchDraw();
              layer2.draw();
                          //debugger;

              console.log(j);
            console.log(lines1);
              $("#width_"+ j ).val(Image1.width());
              $("#height_"+ j ).val(Image1.height());
              $("#scaleX_"+ j ).val(Image1.scaleX());
              $("#scaleY_"+ j ).val(Image1.scaleY());
              $("#transparency_"+ j ).val(Image1.opacity());
              $("#Blurry_"+ j ).val(Image1.blurRadius());
              $("#rotation_"+ j ).val(Image1.rotation());
              $("#y_axis_"+ j ).val(Image1.y());
              $("#x_axis_"+ j ).val(Image1.x());



            };
          };

          function trans1(j){
      //debugger;
            var slider = document.getElementById('slider');
            slider.oninput = function() {
            Image1.opacity(slider.value);
            layer2.draw();
            var Trans2 = itemname1+ ' Transparency'+ slider.value;
            $("#transparency_2_"+ j ).val(slider.value);
            console.log(Trans2);
            };
          };
          function mask1(j){
      //debugger;
            Image1.cache();
            Image1.filters([Konva.Filters.Blur]);
            layer2.add(Image1);
            stage1.add(layer2);
          var slider1 = document.getElementById('slider1');
          slider1.oninput = function() {
          Image1.blurRadius(slider1.value);
          layer2.draw();
          var mask1 = itemname1+ ' mask1'+ slider1.value;
          $("#Blurry_2_"+ j ).val(slider1.value);
          console.log(mask1);
          };
        };
          layer2.on('click tap  ', function(e){
              tr1.nodes([e.target]);
          });

    });
  });
</script>