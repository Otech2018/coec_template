<?php include('inc/nav.php');


  

if( isset($_POST['chnag_pass'])  ){
    $new_pass = addslashes(htmlentities($_POST['new_pass']));
    $new_pass1 = addslashes(htmlentities($_POST['new_pass1']));
    $old_pass = addslashes(htmlentities($_POST['old_pass']));
    
    
    if( $password === $old_pass){
    
    if( $new_pass === $new_pass1){
      $add_product = new run_query(" update admin set password='$new_pass'   where id='$id' " );
    
        echo "<script>alert('Password changed!!! ');
        window.location.replace(\"password.php\");
        </script>";
        
    }else{
    
    echo "<script>alert('New Password  not match !!! ');</script>";
    
    }
      
    }else{
    
    echo "<script>alert('Invalid Old Password Entered !!! ');</script>";
    
    }
    
    }
?>	





?>




        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">CHANGE PASSWORD </h1>

                    </div>
                </div>

               

                <!-- /. ROW  -->
                <div class="row">
                    
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                    <form method="POST">

                        <div class="mb-3">
                        <label class="form-label">Old Password <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="old_pass" required value=""
                            placeholder="" />
                        </div>

                        <br>
                        <div class="mb-3">
                        <label class="form-label">New Password <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="new_pass" required value=""
                            placeholder="" />
                        </div>

                        <br>
                        <div class="mb-3">
                        <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="new_pass1" required value=""
                            placeholder="" />
                        </div>

                        <br>

                        <button type="submit" class="btn btn-success" name="chnag_pass">Submit
                        </button>

                    </form>

                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
   <?php include('inc/footer.php');?>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
