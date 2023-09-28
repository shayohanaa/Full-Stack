var c = document.getElementById("MyCanvas");
var ctx = c.getContext('2d');


// Rectangle
ctx.fillStyle="red";
ctx.fillRect(75,75, 100,100);

// Stroke
ctx.moveTo(0,0);
ctx.lineTo(250, 150);
ctx.stroke();

// Circle
ctx.beginPath();
ctx.arc(150,150,70,0,2*Math.PI);
ctx.fillStyle="green";
ctx.fill();
ctx.lineWidth="4";
ctx.strokeStyle="red";
ctx.stroke();

// Text
ctx.font='50px Arial';
ctx.strokeStyle="red";
ctx.strokeText('Hello World', 20, 150)


// Gradient
var x = ctx.createLinearGradient(0,0,50,0);
x.addColorStop(0, 'blue');
x.addColorStop(1, 'red');
ctx.fillStyle = x;
ctx.fillRect(10,10,150,150);