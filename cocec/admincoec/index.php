<?php include('inc/nav.php');


if( isset($_POST['update2'])  ){
    $volunteers = $_POST['volunteers'];
    $countries = $_POST['countries'];
    $teacher = $_POST['teacher'];
    $child = $_POST['child'];
  
      $add_product = new run_query("update settings set
      countries='$countries', 
      teacher='$teacher', 
      child='$child', 
      volunteers='$volunteers'
       where id=1  " );
        echo "<script>alert(' Submitted Successfully!!! ');
        window.location.replace('?');
        </script>";
    
    }
?>	





?>




        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">CONTROL BOARD </h1>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="main-box mb-red">
                            <a href="#">
                                <i class="fa fa-globe fa-5x"></i>
                                <h5><?=$countries;?> <br> Rural Communities</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class="fa fa-users fa-5x"></i>
                                <h5><?=$volunteers;?> <br> Families</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="main-box mb-pink">
                            <a href="#">
                                <i class="fa fa-user fa-5x"></i>
                                <h5><?=$teacher;?> <br> Rural Teachers</h5>
                            </a>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class="fa fa-child fa-5x"></i>
                                <h5><?=$child;?> <br> School Children</h5>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->

                <!-- /. ROW  -->
                <div class="row">
                    
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form method='POST' enctype="multipart/form-data">


                            <div class="form-group">
                                <label>Update Rural Communities</label>
                                <input class="form-control" required name="countries" type="number" value="<?=$countries;?>">
                            </div> <br>

                            <div class="form-group">
                                <label>Update Families </label>
                                <input class="form-control" required name="volunteers" type="number" value="<?=$volunteers;?>">
                            </div> <br>


                            <div class="form-group">
                                <label>Update Rural Teacher </label>
                                <input class="form-control" required name="teacher" type="number" value="<?=$teacher;?>">
                            </div> <br>



                            <div class="form-group">
                                <label>Update School Children </label>
                                <input class="form-control" required name="child" type="number" value="<?=$child;?>">
                            </div> <br>
                         
                            <button class="btn btn-success" type="submit" name="update2">Save</button>
                        

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
