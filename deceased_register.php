
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<script src="js/jquery1.js"></script>
<script src="js/bootstrap.js"></script>

<style>
body{
font-family:"comic sans MS",san-serif;
background-image: url(hydras.jpg);
margin:0;
color:red;
font-weight:18px;
}
h2{
background-color:purple;
text-align:center;
padding:10px;
color:white;
}
td{
padding:7px;
}
input{
height:25px;
border-radius:10px;
border:none;
}

input:focus{
outline:none;
border:1px solid forestgreen;
}
textarea{
border-radius:10px;
}
textarea:focus{
outline:none;
border:1px solid forestgreen;
}
.button{
background-color:purple;
color:black;
font-size:20px;
padding:0px 25px;
border:one;
margin-bottom:30px;
}
.button:hover{
cursor:pointer;
box-shadow:red;
}
h1{
    color:red;
    background-color: forestgreen;
}

@media screen and (max-width: 959px){
	.container{
	width:100%;
	height:100%;
	font-size:16px;
	}
    h1{
        font-size:25px;
    }
	
	}
</style>
</head>
<body>
<div class="container">
<div class="col-md-12 col-md-6 col-xs-12">



<h1 align="center">Deceased registration form</h1>
<a href="server.php" class="mainer">back</a>
<div id="personal-info">

<form action="server.php" method="post">
<table width="100%">


<div id="education">
<h2>Deseased details</h2>
<table width="100%">
<tr>
<td><label>full name<label></td>
<td><input type="text" size="25" name="bname"></td>

<td><label>gender<label></td>
<td><input type="text" size="25" name="gender"></td>

<td><label>tag number<label></td>
<td><input type="text" size="25" name="tag_number"></td>
</tr>
<tr>
<td><label>serial number<label></td>
<td><input type="text" size="25" name="serial_number"></td>


</tr>



</div>
</table>



<div id="work-experience3">
<h2>Relatives information</h2>
<form action="">
<table width="100%">

<tr>
<tr>
<td><label>full names<label></td>
<td><input type="text" size="25" name="relative_name"></td>

<td><label>Home address<label></td>
<td><input type="text" size="25" name="address"></td>

<td><label>Home Town<label></td>
<td><input type="text" size="25" name="town"></td>
</tr>
<tr>
<td><label>occupation<label></td>
<td><input type="text" size="25" name="occupation"></td>

<td><label>phone<label></td>
<td><input type="text" size="25" name="phone"></td>

</tr>
<tr>
<td>feedback given</td>
<td>
<textarea name="feedback" id="" cols="30" rows="10"></textarea>
</td>
</tr>




<td><center><input type="submit" value="register"  name="deceased_register" class="button"></center></td>
</tr>
</table>
</form>

</div>
</div>
</div>
</body>
</html>