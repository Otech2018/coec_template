<?php 
include('inc/connect.php');

$page = 'about';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HOME | COEC - Community Outreach for Educational Change.html</title>
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
                        <h2>Events</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Events</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        <!-- Event Start -->
        <div class="event">
            <div class="container">
               
                <div class="row">
                    
                <?php
                           
                           $event = new run_query( "select * from content where type ='EVENT' and status = '1' " );
                           if( $event->num_rows >= 1){
                               while( $event_data =$event->result() ){
                               extract($event_data); 

               ?>
               
               
               <div class="col-md-4">
                        <div class="event-item">
                            <img src="ot_img/img/<?=$image;?>" alt="<?=$title;?>">
                                    <center>
                                        <h3><?=$title;?></h3>
                                    <p><i class="fa fa-calendar-alt"></i><?=$data1;?></p>
                                    </center>
                        </div>
                    </div>

                   <?php }} ?>
                </div>
            </div>
        </div>
        <!-- Event End -->


        <?php include('inc/footer.php'); ?>

       
</body>
</html>