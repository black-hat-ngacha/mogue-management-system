<?php

// session_start();
// $user='';

// if($_SESSION['username']){

// $user=$_SESSION['username'];

// }
// else{
// header("location:login.php");
// }
?>

<html>
	<head>
	<title>Confirm order payment</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="webtools/boot/css/styles.css" rel="stylesheet" />
 <link href="webtools/boot/css/bootstrap.css" rel="stylesheet" />
 <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
 <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css" />
 <link href="style.css" rel="stylesheet"/>
 <link href="styling.css" rel="stylesheet"/>
 <script src="webtools/boot/js/bootstrap.js"></script>
 <script src="webtools/boot/js/scripts.js"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
 <style>
        #container{
         height:610px;
         background-image: url(hydras.jpg);
         background-repeat: no-repeat;
         background-position: center bottom;
         background-size: cover;

            }
            .header{
                height:10%;
                background-color: lightgreen;
            }
        </style>
</head>

</body class="sb-nav-fixed" style="background:maroon;">

	<div id="container" style="background:#fff; height:700px;">
		<h2 style="color: red; ">The Payment</h2>
		
		
		<br/><br/>
        <div class="card-header"><h3 class="text-center font-weight-light my-4">Confirm payment</h3></div>
        <div class="card-body">
       <form action="server.php" method="post">
        <?php// include('errors.php');?>
                                            
                                                
        <div class="form-group">
        <label class="small mb-1" for="inputFirstName">Confirm the amount</label>
         <input class="form-control py-4" id="inputFirstName" name="amount" type="text" placeholder="$100, ksh: 20000/=" />
         </div>

         <div class="form-group">
        <label class="small mb-1" for="inputFirstName">Mode of payment</label>
         <select name="mode" id="">
         <option value="mpesa">Mpesa</option>
         <option value="airtel">Airtel Money</option>
         <option value="telkom">Telkom money</option>
         <option value="bank">Bank</option>
         <option value="cash_on_deliverly">Cash on Deliverly</option>
         </select>
         </div>

         <div class="form-group">
        <label class="small mb-1" for="inputFirstName">Enter the code</label>
         <input class="form-control py-4" id="inputFirstName" name="transaction" type="text" placeholder="HJYT455FGTT7" />
         </div>
			
			<input type="submit" name="pay" class="btn btn-success" value="Continue to check out"/>
		</form>
        </div>
		<br/>
	


	</div>
	</body>
	
</html>
