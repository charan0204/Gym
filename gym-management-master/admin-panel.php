<!DOCTYPE html>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "loginsystem";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($connect, $query);



?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background:url('images/23.jpg');background-size:cover;background-repeat: no-repeat;">
     
   
       
        <h1 style = "justify-content: center;
    display: flex;
    margin: 18px;
    padding: 45px; color:#fff;scroll : no-scroll;font-family: Garamond, Times New Roman, Serif;  letter-spacing: 3px;">Admin Panel </h1>
   <div class="container-fluid" >
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="" class="list-group-item active"
                   >Members</a>
                <a href="trainer_details.php" class="list-group-item">Member details</a>
                <a href="package.php" class="list-group-item">Package details</a>
                <a href="payment.php" class="list-group-item">Payments</a>
            </div>
            <hr>
            <div class="list-group">
              <a href="trainer.php" class="list-group-item active">Trainer</a>
              <a href="trainer.php" class="list-group-item active">Trainer details</a>             
              <a href="trainer.php" class="list-group-item active">Add new Trainer</a>
            </div>      
            
        </div>
            <div class="col-md-8">
            <div class="card">
                
     <div class="card-body" style="background-color:#007bff;color:#FFFFFF;">
                <h3>Register new members</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">
                <label  style = "font-family: arial;font-family: math;
    margin-left: 15px;
    font-size: 20px;
">first name:</label>
<input type="text" name="fname" class="form-control"><br>
                    <label style = "font-family: arial;font-family: math;
    margin-left: 15px;
    font-size: 20px;
">last name:</label>
<input type="text" name="lname" class="form-control"><br> 
 <label style = "font-family: arial;font-family: math;
    margin-left: 15px;
    font-size: 20px;
">email</label>
                    <input type="text" name="email" class="form-control"><br>
                    <label style = "font-family: arial;font-family: math;
    margin-left: 15px;
    font-size: 20px;
">Member ID</label>
<input type="text" name="contact" class="form-control"><br>        
 <label style = "font-family: arial;font-family: math;
    margin-left: 15px;
    font-size: 20px;
">Trainer </label> 
 <select class="form-control" name="docapp">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br>
                                        
  <input type="submit" class="btn btn-primary" name="pat_submit" value="Register">                  <a href="func.php" class="btn btn-light"></a>
                    
                    
                </form>
                </div>
      </div>
       </div>
      <div class="col-md-1"></div>
      </div>
    <header>
 <nav>
     <div class="main-wrapper">
	      
		       <div class="nav-login">
			       <?php
				        if (isset($_SESSION['u_id'])) {
						  echo '<form action="includes/index.php" method="POST">
					            <button type="submit" name="submit">logout</button>
					              </form>';	
                                 } else{
							
							echo '<form action="includes/index.php" method="POST">
                              
                               						
				                </form>
				              <a href="index.php" class="btn btn-light" style="background-color:#92d6bd;color:FFFFFF">Logout</a>';
                                  
						}
				   
				    ?>
					
				
		       </div>
	 </div>
 </nav>

</header>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html>
   