<?php 
include('inc/connect.php');

$page = 'story';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HOME | COEC - Community Outreach for Educational Change.html</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <?php include('inc/top.php');?>


        <style>
 
 .card-img-overlay{
    transform: translateY(13rem);
    transition: transform .18s ease-in;
    background-color: rgba(0,0,0,1);
   .card-text{
     opacity:0;
     transform: translateY(-6rem);
     transition: opacity .05s ease-in, transform .25s ease-in;
   }
   .btn{
     opacity:0;
     transform: translateY(2rem);
   }
 }
 .card{
   overflow: hidden;
   background-color: #345;
   &:hover{
     .card-img{
       mix-blend-mode: overlay;
     }
     .card-img-overlay{
       transform: translateY(0);
       transition: transform .25s ease-out;
       background-color: rgba(0,0,0,.1);
     }
     .card-text{
       opacity: 1;
       transform: translateX(0);
       transition: opacity .5s ease-out, transform .2s ease-out;
     }
     .btn{
       opacity:1;
       transform: translateX(0);
       transition: opacity .7s ease-out, transform .35s ease-out;
     }
   }
 }
         </style>



    </head>

    <body>
       
    <?php include('inc/header.php');?>


    <!-- Page Header Start -->
    <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Where we work</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Where we work</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
     
<div class="container">

  <div class="row">
    <div class="col-12">
      <div class="card-deck">


      <?php
                           
                           $project = new run_query( "select * from content where type='WORK' and status = '1' " );
                           if( $project->num_rows >= 1){
                               while( $project_data =	$project->result() ){
                               extract($project_data); 

                             
               ?>

            <div class="col-md-4 card text-white" style="height:280px"><img class="card-img" src="ot_img/img/<?=$image;?>" width="100%" />
            <div class="card-img-overlay">
                <h2 class="card-title"><a href="single.php?i=<?=$id;?>"> <?=$title;?></a></h2>
                <p class="card-text"><?=limit_text($description,20);?></p>
                <center>
                    <a href="single.php?i=<?=$id;?>" class="btn btn-success btn-sm">View Details</a>
                </center>
            </div>
            </div>
                   <?php
                     }}?>
                    </div>
                </div>
            </div>
        </div>

        <?php include('inc/footer.php'); ?>

       
</body>
</html>