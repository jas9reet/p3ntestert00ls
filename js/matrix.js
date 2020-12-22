

var canvas = document.getElementById("matrixRain");
var ctx = canvas.getContext("2d");

//making the canvas full screen
canvas.height = window.innerHeight;
canvas.width = window.innerWidth;

//chinese characters - taken from the unicode charset
var chinese = "畃 甲 甼 甽 甾 甿 畄 畅 畆 田 由 町 画 畍 畎 畏 畀 畁 申 男 甸 甹 畂 畇 畈 甴 电 甶 畐 畑 畉 畊 畋 界";
//converting the string into an array of single characters
chinese = chinese.split("");

var font_size = 15;
var columns = canvas.width/font_size; //number of columns for the rain
//an array of drops - one per column
var drops = [];
//x below is the x coordinate
//1 = y co-ordinate of the drop(same for every drop initially)
for(var x = 0; x < columns; x++)
	drops[x] = 1; 

//drawing the characters
function draw()
{
	//Black BG for the canvas
	//translucent BG to show trail
	ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
	ctx.fillRect(0, 0, canvas.width, canvas.height);
	
	ctx.fillStyle = "green"; //green text
	ctx.font = font_size + "px arial";
	//looping over drops
	for(var i = 0; i < drops.length; i++)
	{
		//a random chinese character to print
		var text = chinese[Math.floor(Math.random()*chinese.length)];
		//x = i*font_size, y = value of drops[i]*font_size
		ctx.fillText(text, i*font_size, drops[i]*font_size);
		
		//sending the drop back to the top randomly after it has crossed the screen
		//adding a randomness to the reset to make the drops scattered on the Y axis
		if(drops[i]*font_size > canvas.height && Math.random() > 0.975)
			drops[i] = 0;
		
		//incrementing Y coordinate
		drops[i]++;
	}
}

setInterval(draw, 30);

$('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: 160,
  gutter: 20
});
