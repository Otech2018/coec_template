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
                        <h2>Impact Stories</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Impact Stories</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
         <!-- Blog Start -->
         <div class="blog">
            <div class="container">
               
                <div class="row">
                    
                <?php
                           
                            $blog = new run_query( "select * from content where type ='STORY' and status = '1' " );
                            if( $blog->num_rows >= 1){
                                while( $blog_data =	$blog->result() ){
                                extract($blog_data); 

                ?>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                            <img src="ot_img/img/<?=$image;?>" width="400px" height="300px"  alt="<?=$title;?>">
                            </div>
                            <div class="blog-text">
                                <h3><a href="single.php?i=<?=$id;?>"><?=$title;?></a></h3>
                                <p>
                                <?=limit_text($description,20);?>
                                </p>
                            </div>
                            <div class="blog-meta">
                                <?php
                                $date1 = new DateTime($date);
                                $result = $date1->format('D jS, F Y');
                                ?>
                                <p><i class="fa fa-calendar"></i><a href="#!"><?=$result;?></a></p>
                            </div>
                            <hr>
                            <center>
                             <a href="single.php?i=<?=$id;?>" class="btn btn-success btn-sm">View Details</a>
                            </center>
                        </div>
                    </div>
                <?php }} ?>

                   
                   
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <?php include('inc/footer.php'); ?>

       
</body>
</html>