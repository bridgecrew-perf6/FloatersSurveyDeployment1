<script>

  //==canvas 1 

  var i=0;
  var itemURL = '';
  var itemname = '';
  event
  document
  .getElementById('drag-items')
  .addEventListener('dragstart', function(e) {
    itemURL = e.target.src;
    itemname = e.target.name;
  });
   var con = stage.container();
    con.addEventListener('dragover', function(e) {
    e.preventDefault(); // !important
});
  con.addEventListener('drop', function(e) {
  e.preventDefault();
  stage.setPointersPositions(e);
  i++;
 //==create input 
 var content='<input type="hidden" required name="width[]" id="width_'+ i +'">'+
              '<input type="hidden" name="height[]" id="height_'+ i +'">'+
              '<input type="hidden" name="scaleX[]" id="scaleX_'+ i +'">'+
              '<input type="hidden" name="scaleY[]" id="scaleY_'+ i +'">'+
              '<input type="hidden" name="x_axis[]" id="x_axis_'+ i +'">'+
              '<input type="hidden" name="y_axis[]" id="y_axis_'+ i +'">'+
              '<input type="hidden" name="rotation[]" id="rotation_'+ i +'">'+
              '<input type="hidden" name="image_title[]" id="image_title_'+ i +'">'+
              '<input type="hidden" required name="transparency[]" id="transparency_'+ i +'">'+
              '<input type="hidden" required name="Blurry[]" id="Blurry_'+ i +'">';


    $("#input_value").append(content);
 //==end create input
 
  console.log(itemname);
  //debugger;

  Konva.Image.fromURL(itemURL, function(Image) {
    layer0.on('click tap  ', function(e){
          tr.nodes([e.target]);
          });
    layer0.add(Image);
    Image.position(stage.getPointerPosition());
    Image.draggable(true);
    Image.name('shape');
    //debugger;
    console.log(Image.name());
    layer0.draw();
    
    $("#image_title_"+ i ).val(itemname);
        $("#width_"+ i ).val(Image.width());
        $("#height_"+ i ).val(Image.height());
        $("#scaleX_"+ i ).val(Image.scaleX());
        $("#scaleY_"+ i ).val(Image.scaleY());
        $("#transparency_"+ i ).val(Image.opacity());
        $("#Blurry_"+ i ).val(Image.blurRadius());
        $("#y_axis_"+ i ).val(Image.y());
        $("#x_axis_"+ i ).val(Image.x());

        var tr = new Konva.Transformer();

        layer0.add(tr);
        stage.add(layer0);
        
      Image.on('click dragstart', function (e) {
        transform(i);

      });
      Image.on('click tap', function (e) {
        trans(i);
        $("#slider").val(Image.opacity());
        mask(i);
        $("#slider1").val(Image.blurRadius());
      });

      function transform(i){
          var text = new Konva.Text({});
          Image.on('transformstart', function(e) {
          });
          Image.on('dragmove', function(e) {
            updateText();
            h();
          });
          Image.on('transform', function(e) {
            updateText();
            
          });
          Image.on('transformend', function(e) {
          });
          function updateText() {
            var lines = [
              'x: ' + Image.x(),
              'y: ' + Image.y(),
              'rotation: ' + Image.rotation(),
              'width: ' + Image.width(),
              'height: ' + Image.height(),
              'scaleX: ' + Image.scaleX(),
              'scaleY: ' + Image.scaleY(),
                                              ];
          
            text.text(lines.join('\n'));
            layer0.batchDraw();
                          //debugger;

              console.log(i);
            console.log(lines);
              $("#width_"+ i ).val(Image.width());
              $("#height_"+ i ).val(Image.height());
              $("#scaleX_"+ i ).val(Image.scaleX());
              $("#scaleY_"+ i ).val(Image.scaleY());
              $("#transparency_"+ i ).val(Image.opacity());
              $("#Blurry_"+ i ).val(Image.blurRadius());
              $("#rotation_"+ i ).val(Image.rotation());
              $("#y_axis_"+ i ).val(Image.y());
              $("#x_axis_"+ i ).val(Image.x());



            };
          };

          function trans(i){
            //debugger;
            var slider = document.getElementById('slider');
            slider.oninput = function() {
            Image.opacity(slider.value);
            layer0.batchDraw();
            var Trans = itemname+ ' Transparency'+ slider.value;
            $("#transparency_"+ i ).val(slider.value);
            console.log(Trans);
            };
          };
          function mask(i){
            //debugger;
              Image.cache();
              Image.filters([Konva.Filters.Blur]);
              layer0.add(Image);
              stage.add(layer0);
              stage.draw();
            var slider1 = document.getElementById('slider1');
            slider1.oninput = function() {
            Image.blurRadius(slider1.value);
            layer0.batchDraw();
            var mask = itemname+ ' mask'+ slider1.value;
            $("#Blurry_"+ i ).val(slider1.value);
            console.log(mask);
            };
          };
          stage.draw();
          stage.on('click tap', function(e){
          destroy(tr.nodes());
          });

    });
  });
</script>