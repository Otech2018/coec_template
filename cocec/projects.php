<?php 
include('inc/connect.php');

$page = 'work';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PROGRAMS  | COEC - Community Outreach for Educational Change.html</title>
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
                        <h2>Projects</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Projects </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


  <!-- Causes Start -->
            <div class="container">
                
                <div class="row">
                    
                <?php
                           
                            $project = new run_query( "select * from content where type ='PROJECT' and status = '1' " );
                            if( $project->num_rows >= 1){
                                while( $project_data =	$project->result() ){
                                extract($project_data); 

                              
                ?>
                    <div class="col-md-4" style="background-color:#F3F6FF !important; margin-bottom:20px;">
                        <div class="">
                            <img src="ot_img/img/<?=$image;?>" width="100%" height="200px" alt="<?=$title;?>">
                        </div>
                        
                        <div>
                            <h3><?=$title;?></h3>
                            <p><?=limit_text($description,20);?></p>
                        </div>
                        <div >
                            <a href="single.php?i=<?=$id?>" class="btn btn-custom">Learn More</a>
                            <a class="btn btn-custom" href="#donate" style="background-color:#27a62a; ; color:white;">Donate Now</a>
                        </div> 
                    </div> 

                    <?php
                      }

                    }
                    
                    ?>

            </div>
        </div>
        <!-- Causes End -->



<?php include('inc/footer.php'); ?>

       
</body>
</html>




