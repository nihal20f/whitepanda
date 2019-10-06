<html>

<head>
<title> Task </title>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
  
  .notification {
  background-color: ;
  color: white;
  text-decoration: none;
  padding: 1px 2px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: ;
}

.notification .badge {
  position: absolute;
  top:-1px;
  right: -5px;
  padding: 2px 3px;
  border-radius: 50%;
  background-color:red ;
  color: white;
}
.button {
  background-color: #03fc2c; /* Green */
  border: none;
  color: white;
  padding: 7px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 2px 2px;
  cursor: pointer;
  border-radius:50%;
}
.container {
	margin-top:20px;
  
}
.inlineDiv
{
    
	 padding: 10px;
  height: 300px;
 
	
	
}


@media(min-width:900px)
{
	.inlineDiv
	{
		display:flex;
		justify-content: space-between;
	}
}

  </style>
  
  <script type="text/javascript">
  

		

		
$(function(){
	  
    
	
			var colors = new Array("ff0000","00ff00","0000ff","ff00ff","beeeef");
				var n = 5;

				for(var i=1;i<=n;i++)
				     {
						// if(n%3==0)
						var div = document.createElement('div');
						div.className = "inlineDiv";
						div.style.backgroundColor = "#" + colors[i];
						div.style.flex= "1" ;
					//	div.style.width = ($('#holder').width() / n) + "px";
					 //   div.style.width = "33%";
						div.style.height = "100px";
						document.getElementById('holder').appendChild(div);
					//	div.setAttribute("class","i");
				       }
       
	 
  });
  		
   </script>
  
</head>

<body>

   
  <div > <img src="logo_comp1.png" height="25" width="100" style="margin-left:120px;"></img>
		<a href="#" class="notification" style="margin-top:20px;margin-left:700px">
		  <i class="fa fa-bell-o n1" style="font-size:30px;color:black"></i>
		  <span class="badge" style="font-size:12px;">399</span>
	  </a>
	  <button class="button"style="margin-left:30px;" >AB</button>
 </div>
  <hr></hr>
  
  
  
  
    
       <div id="holder"  class="inlineDiv container">rr</div>
	   </div>
   
  



		
</body>

</html>