<?php 
include('inc/connect.php');

$page = 'story';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ANNUAL REPORT | COEC - Community Outreach for Educational Change.html</title>
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
                        <h2>Annual Report </h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Annual report</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->







    <div class="m-2 container row">
        

    <?php
                           
                           $blog = new run_query( "select * from content where type ='AN_REPORT' and status = '1'" );
                           if( $blog->num_rows >= 1){
                               while( $blog_data =	$blog->result() ){
                               extract($blog_data); 

               ?>
        <div class="m-2 col-md-12 shadow p-3"> 
        <?=$title;?> &nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="ot_img/img/<?=$image;?>">Download <i class="fa fa-download"></i></a>
        </div>
<?php }} ?>

    </div>


    
<?php include('inc/footer.php'); ?>

       
</body>
</html>



