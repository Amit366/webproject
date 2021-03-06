function Bird(){
	this.y=height/2;
	this.x=64;
	this.gravity=0.6;
	this.velocity=0;
	this.lift=-10;
	this.icon = birdSprite;
	this.width = 64;
	this.height=64;



	this.show=function(){
		fill(255);
		ellipse(this.x,this.y,16,16);
	}
	this.up = function(){
		this.velocity += this.lift;
	}

	this.update=function(){
		this.velocity += this.gravity;
		this.y += this.velocity;
		
		if(this.y > height){
			this.y = height;
			this.velocity = 0;
		}
		if(this.y < 0){
			this.y = 0;
			this.velocity = 0;
	}
}