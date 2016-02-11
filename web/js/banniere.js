var canvas = document.getElementById('banniere');
				var ctx = canvas.getContext('2d');
				var numberOfLines = 4;
				var i = 0;
				var cycle = function() {
					ctx.clearRect(0, 0, canvas.width, canvas.height);
					for(var j=0; j<numberOfLines; ++j) {
						ctx.lineWidth = 1+2*(numberOfLines-j);
						ctx.strokeStyle = 'rgba(100,110,'+Math.floor(Math.abs(Math.cos(i/80)*256))+','+(j/5+0.1)+')';
						var offset = (i+j*10*Math.abs(Math.cos(i/100)))/20;
						var y = (Math.sin(offset)+1)*canvas.height/2;
						var cpy1 = (Math.cos(offset)+0.5)*canvas.height;
						var cpy2 = canvas.height - cpy1;
						ctx.beginPath();
						ctx.moveTo(0, y);
						ctx.bezierCurveTo(canvas.width/3, cpy1, 2*canvas.width/3, cpy2, canvas.width, y);
						ctx.stroke();
					}
					i++;
				};
				setInterval(cycle, 30);