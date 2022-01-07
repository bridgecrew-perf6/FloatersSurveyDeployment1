var stage = new Konva.Stage({
    container: 'canv_1',
    width: 500,
    height: 400,
    //visibile: true,
});
var layer = new Konva.Layer();
var layer0 = new Konva.Layer();
var layer5 = new Konva.Layer();

stage.add(layer);
stage.container().style.backgroundColor = 'white';
//var layer = new Konva.Layer();

var ring = new Konva.Ring({
    x: stage.width() / 2,
    y: stage.height() / 2,
    innerRadius: 40,
    outerRadius: 70,
    fill: 'white',
    stroke: 'black',
    strokeWidth: 1,
});
var ring1 = new Konva.Ring({
    x: stage.width() / 2,
    y: stage.height() / 2,
    innerRadius: 70,
    outerRadius: 100,
    fill: 'white',
    stroke: 'black',
    strokeWidth: 1,
});
var ring2 = new Konva.Ring({
    x: stage.width() / 2,
    y: stage.height() / 2,
    innerRadius: 100,
    outerRadius: 130,
    fill: 'white',
    stroke: 'black',
    strokeWidth: 1,
});
var ring3 = new Konva.Ring({
    x: stage.width() / 2,
    y: stage.height() / 2,
    innerRadius: 130,
    outerRadius: 160,
    fill: 'white',
    stroke: 'black',
    strokeWidth: 1,
});
var ring4 = new Konva.Ring({
    x: stage.width() / 2,
    y: stage.height() / 2,
    innerRadius: 160,
    outerRadius: 190,
    fill: 'white',
    stroke: 'black',
    strokeWidth: 1,
});
var redLine = new Konva.Line({
    x: stage.width() / 2,
    y: stage.height() / 2,
    points: [0, 0, 0, 250, 0],
    stroke: 'red',
    strokeWidth: 2,
    lineCap: 'round',
    lineJoin: 'round',
});
var redLine2 = new Konva.Line({
    x: stage.width() / 2,
    y: stage.height() / 2,
    points: [0, 0, 0, -250, 0],
    stroke: 'red',
    strokeWidth: 2,
    lineCap: 'round',
    lineJoin: 'round',
});
var redLine1 = new Konva.Line({
    x: stage.width() / 2,
    y: stage.height() / 2,
    points: [0, 0, 250, 0, -250, 0],
    stroke: 'red',
    strokeWidth: 2,
    lineCap: 'round',
    lineJoin: 'round',
});
var redLine4 = new Konva.Line({
    x: stage.width() / 2,
    y: stage.height() / 2,
    points: [0, 0, 360, 360, -360, -360],
    stroke: 'red',
    strokeWidth: 2,
    lineCap: 'round',
    lineJoin: 'round',
});
var redLine5 = new Konva.Line({
    x: stage.width() / 2,
    y: stage.height() / 2,
    points: [0, 0, 360, -360, -360, 360],
    stroke: 'red',
    strokeWidth: 2,
    lineCap: 'round',
    lineJoin: 'round',
});
var textpath = new Konva.Text({
    x: 50,
    y: stage.height() / 2 - 4.5,
    text: '60   50   40   30   20  10      0      10   20   30   40  50   60 ',
    fontSize: 16,
    fontFamily: 'Arial',
    fill: 'black',
    align: 'center',
});
var textpath1 = new Konva.Text({
    x: 255,
    y: 0,
    text: '60   50   40   30   20  10              10    20   30  40   50  60 ',
    fontSize: 16,
    fontFamily: 'Arial',
    fill: 'black',
    align: 'center',
    rotation: '90'
});
// add the shape to the layer
layer.add(ring, ring1, ring2, ring3, ring4, redLine, redLine1, redLine2, redLine4, redLine5, textpath, textpath1);

// add the layer to the stage
stage.add(layer);
stage.draw();