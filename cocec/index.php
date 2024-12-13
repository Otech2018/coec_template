<?php 
include('inc/connect.php');
// include('inc/short_word.php');

$page = 'home';




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

        <!-- Carousel Start -->
        <div class="carousel">
            <div class="">
                <div class="owl-carousel">



                    <div class="carousel-item">
                        <div class="carousel-img">
                            <!-- <img src="img/carousel-1.jpg" alt="Image"> -->
                            <img src="ot_img/s1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>No Child Left Behind!</h1>
                            <p>
                            COEC Nigeria is working to ensure that every child gets quality education irrespective of social class and location. Every Child should learn. Location is no barrier!
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-lg" href="#donate" style="background-color:#27a62a; color:white;">Donate Now</a>
                                <a class="btn btn-lg" href="volunteer.php" style="background-color:#242e77; color:white;">Volunteer</a>
                            </div>
                        </div>
                    </div>




                    <div class="carousel-item">
                        <div class="carousel-img">
                        <img src="ot_img/s2.jpg" alt="Image">
                            <!-- <img src="img/carousel-2.jpg" alt="Image"> -->
                        </div>
                        <div class="carousel-text">
                         <h1>Location is no Barrier!</h1>
                            <p>
                            Fixing today’s Student Experience, more than one school at a time!
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-lg" href="#donate" style="background-color:#27a62a; color:white;">Donate Now</a>
                                <a class="btn btn-lg" href="volunteer.php" style="background-color:#242e77; color:white;">Volunteer</a>
                            </div>
                        </div>
                    </div>



                    <div class="carousel-item">
                        <div class="carousel-img">
                        <img src="ot_img/s3.jpg" alt="Image">
                            <!-- <img src="img/carousel-3.jpg" alt="Image"> -->
                        </div>
                        <div class="carousel-text">
                            <h1>Every Child Should Learn.</h1>
                            <p>
                            Educate, Empower, Liberate!
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-lg" href="#donate" style="background-color:#27a62a; color:white;">Donate Now</a>
                                <a class="btn btn-lg" href="volunteer.php" style="background-color:#242e77; color:white;">Volunteer</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <!-- <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>         -->
                        <!-- 16:9 aspect ratio -->
                        <!-- <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>  -->
        <!-- Video Modal End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-6">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/IyUgyggimBY?Rel=0" title="Nothing About Us Without Us." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                        gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <h2>Executive Summary</h2>
                            <!-- <h2>Community Outreach for Educational Change</h2> -->
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                    Community Outreach for Educational Change is a non-profit organization that exists to influence the total school experience for
                                    children in rural and disadvantaged areas. It creates a platform for quality classroom experiences, renovation and redesign of
                                    classrooms, sets up school management systems and ensures that community schools are stocked with relevant learning
                                    resources in line with the 4th SDG.
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    To influence learning outcomes through educational interventions for quality education in rural and
                                    disadvantaged communities, one school at a time.
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    To reach all Nigerian children with quality education irrespective of their social class and location.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->









<div class="container">
<div class="section-header text-center">
    <h2>Where we Work</h2>
    <div style="font-size:18px; color:#2CAB32;"><b>We work in rural and disadvantaged communities of Northern Nigeria where many children do not have access to 
    quality education due to many barriers especially social class and location.</b></div>
</div>
  <div class="row">
    <div class="col-12">
      <div class="card-deck">


      <?php
                           
                           $project = new run_query( "select * from content where type='WORK' and  status = '1' and featured='1' limit 3" );
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

<br><br>
        <center>
            <a href="work.php" class="btn btn-lg btn-success">View All</a>
        </center>

<br><br>



 

        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Our SDGs of Focus</h2>
                    <center>
                        <img src="ot_img/sdg.webp" alt="SDGs" width="300px">
                    </center>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="ot_img/s2.png" width="70px" alt="SDGs logo">
                            </div>
                            <div class="service-text">
                                <h3 style="color:#D5A100;">Zero Hunger</h3>
                                <p>End hunger, achieve food security and improved nutrition and promote sustainable agriculture</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="ot_img/s3.png" width="70px" alt="SDGs logo">
                            </div>
                            <div class="service-text">
                                <h3 style="color:#4C9F38;">Good Health and Well-Being  </h3>
                               <p>Ensure healthy lives and promote well-being for all at all ages</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="ot_img/s4.png" width="70px" alt="SDGs logo">
                            </div>
                            <div class="service-text">
                                <h3 style="color:#E53420;">Quality Education</h3>
                                <p>Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                 <img src="ot_img/s5.png" width="70px" alt="SDGs logo">
                            </div>
                            <div class="service-text">
                                <h3 style="color:#E7331A;">Gender Equality </h3>
                                <p>Achieve gender equality and empower all women and girls</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="ot_img/s6.png" width="70px" alt="SDGs logo">
                            </div>
                            <div class="service-text">
                                <h3 style="color:#26BDE2;">Clean Water and Sanitation </h3>
                               <p>Ensure availability and sustainable management of water and sanitation for all</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="ot_img/s8.png" width="70px" alt="SDGs logo">
                            </div>
                            <div class="service-text">
                                <h3 style="color:#8F1838;">Decent Work and Economic Growth</h3>
                                <p>Promote sustained, inclusive and sustainable economic growth, 
                                    full and productive employment and decent work for all</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="ot_img/s13.png" width="70px" alt="SDGs logo">
                            </div>
                            <div class="service-text">
                                <h3 style="color:#45742E;">Climate action </h3>
                                <p>Take urgent action to combat climate change and its impacts</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                  <img src="ot_img/s16.png" width="70px" alt="SDGs logo">
                            </div>
                            <div class="service-text">
                                <h3 style="color:#004C80;">Peace, justice and strong institutions</h3>
                               <p>Promote peaceful and inclusive societies for sustainable development, provide access 
                                to justice for all 
                                and build effective, accountable and inclusive institutions at all levels</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="ot_img/s17.png" width="70px" alt="SDGs logo">
                            </div>
                            <div class="service-text">
                                <h3 style="color:#013463;">Partnership for the Goals </h3>
                                <p>Strengthen the means of implementation and revitalize the Global Partnership 
                                    for Sustainable Development</p>
                            </div>
                        </div>
                    </div>



                   

                </div>
            </div>
        </div>
        <!-- Service End -->
        <center>
            <a href="partner1.php" class="btn btn-lg btn-success">Become Our Partner</a>
        </center>
        
        
        <?php include('inc/count.php'); ?>
        
        
        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Our Projects </h2>
                    <!-- <h2>Here is some of our Projects around the world</h2> -->
                </div>
                <div class="owl-carousel causes-carousel">
                    
                
                <?php
                           
                            $project = new run_query( "select * from content where type ='PROJECT' and status = '1' and featured='1' limit 6" );
                            if( $project->num_rows >= 1){
                                while( $project_data =	$project->result() ){
                                extract($project_data); 

                              
                ?>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="ot_img/img/<?=$image;?>" width="400px" height="300px" alt="<?=$title;?>">
                        </div>
                        
                        <div class="causes-text">
                            <h3><?=$title;?></h3>
                            <p><?=limit_text($description,20);?></p>
                        </div>
                        <div class="causes-btn">
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
        </div>
        <!-- Causes End -->
        <center>
            <a href="projects.php" class="btn btn-lg btn-success">View All Projects</a>
        </center>

        <br><br>
        <?php include('inc/donate.php'); ?>

        
        <!-- Event Start -->
        <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Our Events for the Year</h2>
                </div>
                <div class="row">
                   
                <?php
                           
                            $event = new run_query( "select * from content where type ='EVENT' and status = '1' and featured='1' limit 3" );
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
        <center>
            <a href="event.php" class="btn btn-lg btn-success">View All Events</a>
        </center>

        <br><br>
       
        
        


        <?php include('inc/volunteer.php'); ?>

        
         <!-- programs Start -->
         <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Our Programs</h2>
                </div>
                <div class="row">
                   
                  
                <?php
                           
                            $program = new run_query( "select * from content where type ='PROGRAM' and status = '1' and featured='1' limit 3" );
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
        
        <center>
            <a href="programs.php" class="btn btn-lg btn-success">View All Programs</a>
        </center> <br><br><br>

        <div class="section-header text-center">
                    <h2>Latest Updates of our Work on the Field</h2>
                </div>

                
            <center>
                <div style='width:100%; overflow:auto;'>

                <?php
                           
                           $facbook = new run_query( "select * from content where type ='FACEBOOK' and status = '1' and featured='1' limit 4" );
                           if( $facbook->num_rows >= 1){
                               while( $facbook_data =	$facbook->result() ){
                               extract($facbook_data); 

               ?>
               
                               <?=$description;?>
                             
                   <?php }} ?>

                   <br><br>
                   </div>
            <a href="social.php" class="btn btn-lg btn-success">View All</a>
        </center>


<?php include('inc/footer.php'); ?>

       
    </body>
</html>
