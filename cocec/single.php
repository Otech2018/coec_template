<?php 
include('inc/connect.php');

$page = '____';



//get content for update
if( isset($_GET['i']) ){
    $get_id_d = $_GET['i'];
    $try = new run_query( "select * from content  where id ='$get_id_d' " );
     
    if( $try->num_rows == 1){
        $try_data =	$try->result();
         extract($try_data);  
         
    }else{
        echo "<script>
        window.location.replace('index.php'); 
        </script>";
    }
        
}else{
        echo "<script>
        window.location.replace('index.php'); 
            </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DETAILS | COEC - Community Outreach for Educational Change.html</title>
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
                        <h2><?=$title;?>   </h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href=""><?=$title;?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Single Post Start-->
        <div class="single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content">
                            <img src="ot_img/img/<?=$image;?>" />
                            <h2><?=$title;?></h2>


                            <?php 
                    
                            if($type=="EVENT"){  ?>

                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"> </i><?=$data1;?> &nbsp;&nbsp;|&nbsp;&nbsp;
                                </p>
                                </div>
                                <?php }
                            ?>
                            <p>
                            <?=$description;?>
                            </p>
                           
                        </div>
                        <div class="single-tags">
                            <a href="#!" onclick="history.back();"><i class="fa fa-arrow-circle-left"></i> Back</a>
                        </div>
                        
                        
                        
                    </div>

                    
                </div>
            </div>
        </div>
        <!-- Single Post End-->   

        <?php include('inc/footer.php'); ?>

    </body>
</html>
