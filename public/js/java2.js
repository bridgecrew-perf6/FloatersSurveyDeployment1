var stage1 = new Konva.Stage({
    container: 'canv_2',
    width: 500,
    height: 400,
});
var layer1 = new Konva.Layer();
var layer2 = new Konva.Layer();

stage1.add(layer1);
stage1.container().style.backgroundColor = 'white';
var layer1 = new Konva.Layer();

var ring1 = new Konva.Ring({
    x: stage1.width() / 2,
    y: stage1.height() / 2,
    innerRadius: 40,
    outerRadius: 70,
    fill: 'white',
    stroke: 'black',
    strokeWidth: 1,
});
var ring11 = new Konva.Ring({
    x: stage1.width() / 2,
    y: stage1.height() / 2,
    innerRadius: 70,
    outerRadius: 100,
    fill: 'white',
    stroke: 'black',
    strokeWidth: 1,
});
var ring12 = new Konva.Ring({
    x: stage1.width() / 2,
    y: stage1.height() / 2,
    innerRadius: 100,
    outerRadius: 130,
    fill: 'white',
    stroke: 'black',
    strokeWidth: 1,
});
var ring13 = new Konva.Ring({
    x: stage1.width() / 2,
    y: stage1.height() / 2,
    innerRadius: 130,
    outerRadius: 160,
    fill: 'white',
    stroke: 'black',
    strokeWidth: 1,
});
var ring14 = new Konva.Ring({
    x: stage1.width() / 2,
    y: stage1.height() / 2,
    innerRadius: 160,
    outerRadius: 190,
    fill: 'white',
    stroke: 'black',
    strokeWidth: 1,
});
var redLine1 = new Konva.Line({
    x: stage1.width() / 2,
    y: stage1.height() / 2,
    points: [0, 0, 0, 250, 0],
    stroke: 'red',
    strokeWidth: 2,
    lineCap: 'round',
    lineJoin: 'round',
});
var redLine12 = new Konva.Line({
    x: stage1.width() / 2,
    y: stage1.height() / 2,
    points: [0, 0, 0, -250, 0],
    stroke: 'red',
    strokeWidth: 2,
    lineCap: 'round',
    lineJoin: 'round',
});
var redLine11 = new Konva.Line({
    x: stage1.width() / 2,
    y: stage1.height() / 2,
    points: [0, 0, 250, 0, -250, 0],
    stroke: 'red',
    strokeWidth: 2,
    lineCap: 'round',
    lineJoin: 'round',
});
var redLine14 = new Konva.Line({
    x: stage1.width() / 2,
    y: stage1.height() / 2,
    points: [0, 0, 360, 360, -360, -360],
    stroke: 'red',
    strokeWidth: 2,
    lineCap: 'round',
    lineJoin: 'round',
});
var redLine15 = new Konva.Line({
    x: stage1.width() / 2,
    y: stage1.height() / 2,
    points: [0, 0, 360, -360, -360, 360],
    stroke: 'red',
    strokeWidth: 2,
    lineCap: 'round',
    lineJoin: 'round',
});
var textpath1 = new Konva.Text({
    x: 50,
    y: stage1.height() / 2 - 4.5,
    text: '60   50   40   30   20  10      0      10   20   30   40  50   60 ',
    fontSize: 16,
    fontFamily: 'Arial',
    fill: 'black',
    align: 'center',
});
var textpath11 = new Konva.Text({
    x: 255,
    y: 0,
    text: '60   50   40   30   20  10              10    20   30  40   50  60 ',
    fontSize: 16,
    fontFamily: 'Arial',
    fill: 'black',
    align: 'center',
    rotation: '90'
});
// add the shape to the layer1
layer1.add(ring1, ring11, ring12, ring13, ring14, redLine1, redLine11, redLine12, redLine14, redLine15, textpath1, textpath11);

// add the layer1 to the stage1
stage1.add(layer1);