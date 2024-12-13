<?php include('inc/nav.php');?>




        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ADD  PARTNER</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form method='POST' enctype="multipart/form-data">


                            <div class="form-group">
                                <label>Enter Name </label>
                                <input class="form-control" required name="title" type="text">
                            </div> <br>


                          


                            <div class="form-group">
                                <label>Enter Link (website URL) (Optional) </label>
                                <input class="form-control"  name="data1" type="url" placeholder="eg https:coecnigeria.org">
                            </div> <br>

                                <input type="hidden"  name="image" placeholder="eg 1st January 2023">
                                <input type="hidden"  name="description" placeholder="eg 1st January 2023">
                           
                                <input type="hidden"  name="data2" placeholder="eg 1:00am - 12:00pm">
                            
                                <input type="hidden" name="data3">
                           
                            <input type="hidden" name="type" value="PARTNER">
                            <button class="btn btn-success" type="submit" name="save">Save</button>
                        

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
