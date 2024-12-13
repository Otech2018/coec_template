<?php include('../inc/connect.php');?>
<?php 



$msg ='';
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['btn_login']) ){
$email = addslashes(htmlentities($_POST['email']));
$password = addslashes(htmlentities($_POST['password']));

// $query = "SELECT * from admin WHERE admin_email ='".$email."' AND admin_password ='".$password."'  AND admin_type ='Admin' ";
	$query = "SELECT * from admin WHERE email ='$email' AND password ='$password' ";


$query_run  =new run_query($query);
if( $query_run->num_rows >= 1){ 
	 		$data =	$query_run->result() ;
				extract($data );
				
              $_SESSION['Admin_id'] =$id;
			    echo "<script>alert('Login Successfully');</script>";
          
            echo "<script>window.location.replace(\"index.php\");</script>"; 
             }else{
           echo "<script>alert('Incorrect Email Or Password');</script>";
                     
        }
		

}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN LOGIN</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <h1> ADMIN LOGIN</h1>
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role="form" method="post">
                                    <hr />
                                    <h5>Enter Details to Login</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="email" class="form-control" required name="email" placeholder="Your Email " />
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                        <input type="password" class="form-control" required name="password" placeholder="Your Password" />
                                    </div>
                                   
                                     
                                     <button type="submit" name="btn_login" class="btn btn-primary ">Login Now</button>
                                </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
