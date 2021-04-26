
<!doctype html>
<html>
    <head>
<meta charset="UTF-8">
<title>mogue </title>
<style>

  

  

*{
    margin:0;
    padding:0;
    
}
body{
    height:600px;
}
    .container{
      height:100vh;
     width:100%;
     background:linear-gradient(45deg,#87adfe, #ff77cd);
     background-position: center;
       background-size: cover;
     padding-left: 5%;
     padding-right: 5%;
     box-sizing: border-box;
     position:relative;
     font-size:120%;
 }
    
    .header{
        width:30%;
        margin:50px auto 0px;
        color:white;
        background:#990099;
        text-align: center;
        border:1px solid #80c4de;
        border-bottom:10px;;
        border-radius:10px 10px 0px 0px;
        padding:20px;
        height:83%;
    }
    form{
        width:93%;
        margin:0px auto;
        padding:20px;
        border:1px solid #80c4de;
      
        border-radius: 0px 0px 10px 10px;
        color:black;
    }
    .input-group{
        margin:10px 0px 10px 0px;
    }
    .input-group label{
        display:block;
        text-align: left;
        margin:3px;
    }
    .input-group input{
        height:30px;
        width:93%;
        padding:5px 10px;
        font-size:16px;
        border-radius:5px;
        border:1px solid solid gray;
    }
    .btn{
        padding:10px;
        font-size:15px;
        color:blue;
        background: linear-gradient(45deg,#87adfe, #ff77cd);
        border:none;
        border-radius:5px;
    }
    .error{
        width:92%;
        margin:0px;
        padding:10px;
        border:1px solid #a94442;
        color:#a94442;
        border-radius:5px;
        text-align:left;
        background: #f2dede;
    }
    .container{
        width:98%;
        margin:2px;
    }
    .footer{
        background:#00ff33;
        height:20%;
        width:100%;
    }
	
	form{
	height:75%;
	}
	
	@media screen and (max-width: 959px){
	.container{
	width:100%;
	height:600px;
	}
	.header{
	width:80%;
	height:80%;
	}
	.btn{
	height:50px;
    width:100%;
	margin:3px;
	}
	.footer{
	height:20px;
	}
	form{
	
	height:80%;
	}
	}
    
</style>
 </head>
 <body>

 <div class="container">
     <h1 style="color:purple; background:#d1d3e7;"><center>Huruma funeral Home</center></h2>

       <p style="font-family:tahoma;">Fill in the pathologist.</p>



        <form action="server.php"  method="post">
			<div class="header">
            <h2>Register pathologist</h2>
            
                <div class="input-group">
                   <label for="full_name">full names</label>
                   <input type="text" name="pname" required/>
              </div>
        

            
           <div class="input-group">
                   <label for="full_name">National Id</label>
                   <input type="text" name="id_number" required/>
              </div>

              <div class="input-group">
                   <label for="full_name">Phone</label>
                   <input type="text" name="phone" required/>
              </div>

              <div class="input-group">
                   <label for="full_name">Rank</label>
                   <select name="rank" id="">
                   <option value="pathologist">pathologist</option>
                   </select>
              </div>
        
              <div class="input-group">
                   <label for="full_name">Password</label>
                   <input type="password" name="password" required/>
              </div>
        
           
           <div class="input-group">
               <button type="submit" name="pathologist_register" class="btn">Register</button>
           </div>
           
            </div>
		   </form>


        <div class="footer" style="background:#d1d3e7;">
            <p><center>&copy;copyright 2020</center></p>
        </div>

</div>
    

    </body>
</html>