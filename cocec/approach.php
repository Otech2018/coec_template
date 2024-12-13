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
                        <h2>Approach</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Approach </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
 <!-- programs Start -->
 <div class="blog">
            <div class="container">
                
                <div class="row">
                   
                  
                <?php
                           
                            $program = new run_query( "select * from content where type ='APPROACH' and status = '1'" );
                            if( $program->num_rows >= 1){
                                while( $program_data =	$program->result() ){
                                extract($program_data); 

                ?>
                
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="ot_img/img/<?=$image;?>" width="400px" height="300px"  alt="<?=$title;?>">
                            </div>
                            <div class="blog-text">
                                <h3><a href="single.php?i=<?=$id;?>"><?=$title;?></a></h3>
                                <p>
                                <?=limit_text($description, 20);?>
                                </p>
                            </div>
                                <center>
                                <a href="single.php?i=<?=$id;?>" >View more</a>
                                </center>
                        </div>
                    </div>
                    
                    <?php }} ?>
                </div>
            </div>
        </div>
        <!-- programs End -->


        <!-- <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul> 
                    </div>
                </div> -->

    
<?php include('inc/footer.php'); ?>

       
</body>
</html>




