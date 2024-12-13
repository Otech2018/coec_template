<?php 
include('inc/connect.php');

$page = 'opportunities';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>VOLUNTEER | COEC - Community Outreach for Educational Change.html</title>
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
                        <h2>Facebook Post</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Facebook Post</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Header End -->
        <div style='width:100%; overflow:auto;'>

<center>
        <?php
                           
                           $facbook = new run_query( "select * from content where type ='FACEBOOK' and status = '1' and featured='1' " );
                           if( $facbook->num_rows >= 1){
                               while( $facbook_data =	$facbook->result() ){
                               extract($facbook_data); 

               ?>
               
                               <?=$description;?>
                             
                   <?php }} ?>
                   </center></div>
        <?php include('inc/footer.php'); ?>

       
</body>
</html>