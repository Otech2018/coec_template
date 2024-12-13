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
    </head>

    <body>
       
    <?php include('inc/header.php');?>


    <!-- Page Header Start -->
    <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Board members</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Board members</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
     

        
        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="row">
                    
                
                <?php
                           
                            $team = new run_query( "select * from content where type ='TEAM1' and  status = '1'" );
                            if( $team->num_rows >= 1){
                                while( $team_data =	$team->result() ){
                                extract($team_data); 

                ?>
                
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="ot_img/img/<?=$image;?>" width="300px" height="400px" alt="<?=$title;?>">
                            </div>
                            <div class="team-text">
                            <a href=""><h2><?=$title;?></h2></a>
                                <p><?=$data1;?> </p>
                                    <a class="btn btn-sm btn-success" href="single.php?i=<?=$id;?>">View&nbsp;Details</a>
                                   
                            </div>
                        </div>
                    </div>
                <?php }} ?>
                    
                    
                    



                </div>
            </div>
        </div>
        <!-- Team End -->


        <?php include('inc/footer.php'); ?>

       
</body>
</html>