<?php include('inc/nav.php');?>




        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ADD PROGRESS REPORT </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form method='POST' enctype="multipart/form-data">


                            <div class="form-group">
                                <label>Enter Title</label>
                                <input class="form-control" required name="title" type="text">
                            </div> <br>



                            <div class="form-group">
                                <label>Enter Year</label>
                                <input class="form-control" required placeholder="eg 2023" name="data1" type="text">
                            </div> <br>
            

                            <div class="form-group">
                                <label>Enter Date</label>
                                <input class="form-control" required placeholder="eg Sept 21" name="data2" type="text">
                            </div> <br>

                            <br>
                            <div class="form-group">
                                <label>Enter Details (Description)</label>
                                <textarea id="editor1" required name="description"></textarea>
                            </div>

                                <input type="hidden"  name="image" placeholder="eg 1st January 2023">
                                <input type="hidden" name="data3">
                           
                            <input type="hidden" name="type" value="PROG_REPORT">
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
