var points = [];
var a = 0;
var debut = 0; 
var fin = 60;

function setup() {
  var canvas = createCanvas(64, 64);
  canvas.parent('canvas-wrapper');
  stroke(255);
  strokeWeight(2);
  
  for(var x=debut; x<=fin; x+=(width/7)){
    for(var y=debut; y<=fin; y+=(height/7)){    
      //ellipse(x, y, 5, 5);
      points[a] = {x, y};
      a++;
    }
  }
  var randomPoint = int(random(points.length));
  var randomX = points[randomPoint].x;
  var randomY = points[randomPoint].y;
  line(debut,debut, randomX, randomY);
  line(fin,debut, randomX, randomY);
  line(debut,fin, randomX, randomY);
  line(fin,fin, randomX, randomY);
  line(debut,60, randomX, randomY);
  line(fin,60, randomX, randomY);
}

function draw() {
  

}