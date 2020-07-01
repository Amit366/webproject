var bird;
var pipes = [];
function setup(){
	createCanvas(400,600);
	bird=new Bird();
	pipes.push(new Pipe());
}
function draw(){
	background(0);

	for(var i=pipes.length;i>0;i--){
		pipes[i].show;
		pipes[i].update;

		if(puipes[i].hits(bird)){
			console.log("HIT");
		}

		if(pipes[i].offscreen()){
			pipes.splice(i,1);
		}
	}


	bir4d.update();
	bird.show();

	if(framCount % 100 ==0){
		pipes.push(new Pipe());
	}

	
}
function keyPressed(){
	if(key=' '){
		bird.up();
	}
}