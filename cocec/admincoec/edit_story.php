<?php include('inc/nav.php');


//get content for update
if( isset($_GET['i']) ){
    $get_id_d = $_GET['i'];
    $try = new run_query( "select * from content  where id ='$get_id_d' " );
     
    if( $try->num_rows == 1){
        $try_data =	$try->result();
         extract($try_data);  
         
    }else{
        echo "<script>
        window.location.replace('index.php'); 
        </script>";
    }
        
}else{
        echo "<script>
        window.location.replace('index.php'); 
            </script>";
}



?>




        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">EDIT  STORY </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form method='POST' enctype="multipart/form-data">


                            <div class="form-group">
                                <label>Enter title </label>
                                <input class="form-control" value="<?=$title?>" required name="title" type="text">
                            </div> <br>


                            <div class="form-group">
                                <label>Upload Image</label>
                                <input class="dropify"  data-default-file="../ot_img/img/<?=$image;?>" name="image" type="file" accept=".jpg, .png, .jpeg" data-max-file-size="1M" data-allowed-file-extensions="jpg png jpeg">
                            </div> <br>


            

                            <br>
                            <div class="form-group">
                                <label>Enter Details (Description)</label>
                                <textarea id="editor1" required name="description"><?=$description?></textarea>
                            </div>

                                <input type="hidden"  name="data1">
                           
                                <input type="hidden"  name="data2">
                            
                                <input type="hidden" name="data3">
                           
                            <input type="hidden" name="type" value="STORY">
                                
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="hidden" name="image_old" value="<?=$image?>">
                            <button class="btn btn-success" type="submit" name="update">UPDATE</button>
                        

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
