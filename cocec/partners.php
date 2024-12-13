<?php 
include('inc/connect.php');

$page = 'opportunities';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PARTNERS | COEC - Community Outreach for Educational Change.html</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <?php include('inc/top.php');?>
    </head>

    <body>
       
    <?php include('inc/header.php');?>


<!-- Page Header Start -->
<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Partners</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Partners</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        
<div class="container">
    <div class="row">

    <?php
                               
                               $blog = new run_query( "select * from content where type ='PARTNER' and status = '1'" );
                               if( $blog->num_rows >= 1){
                                   while( $blog_data =	$blog->result() ){
                                   extract($blog_data); 
    
                   ?> 
        <div class="shadow col-lg-3 " style="margin:20px; padding:10px;">
            <center>
            <br>
            <a href="<?=$data1;?>"><b><?=$title;?></b></a> <br><br>
            </center>

        </div>

        <?php }} ?>

    </div>
</div>

        <?php include('inc/footer.php'); ?>

       
</body>
</html>