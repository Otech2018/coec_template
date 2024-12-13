<?php include('../inc/connect.php');?>
<?php 
 
if( !AdminLoggedin() ){

	echo "<script>	window.location.replace(\"login.php\"); </script>";
}

 $Admin_data_id = $_SESSION['Admin_id'];
	
	 $admin = new run_query( "select * from admin where id = '$Admin_data_id' " );
$Admin_data =	$admin->result();
	extract($Admin_data );
	
	



    
    if( isset($_POST['save'])  ){
        $title = addslashes(htmlentities($_POST['title']));
        $description = $_POST['description'];
        $data1 =addslashes(htmlentities($_POST['data1']));   //venue goal
        $data2 = addslashes(htmlentities($_POST['data2']));   //time raised
        $data3 = addslashes(htmlentities($_POST['data3']));   //venue
        $type = addslashes(htmlentities($_POST['type']));
      
        $location ='../ot_img/img/';
      
        $fa_tmp_name = $_FILES['image']['tmp_name'];
          $image = date('YmdHis').$_FILES['image']['name'];
        move_uploaded_file($fa_tmp_name, $location.$image);
      
       
          $add_product = new run_query("insert into content set
          title='$title', 
          description='$description', 
           data1='$data1',
           data2='$data2',
           data3='$data3',
           type='$type',
           image='$image'
             " );
            echo "<script>alert(' Submitted Successfully!!! ');
            window.location.replace('?'); 
            </script>";
        
        }




//update content
        if( isset($_POST['update'])  ){
            $title = addslashes(htmlentities($_POST['title']));
            $description = $_POST['description'];
            $data1 = addslashes(htmlentities($_POST['data1']));   //venue goal
            $data2 = addslashes(htmlentities($_POST['data2']));   //time raised
            $data3 = addslashes(htmlentities($_POST['data3']));   //venue
            $type = addslashes(htmlentities($_POST['type']));
            $id = addslashes(htmlentities($_POST['id']));
            $image_old = addslashes(htmlentities($_POST['image_old']));

            $location ='../ot_img/img/';

            if (!empty( $fa_tmp_name = $_FILES['image']['tmp_name'])){
                unlink("../ot_img/img/$image_old");
                  $image = date('YmdHis').$_FILES['image']['name'];
                move_uploaded_file($fa_tmp_name, $location.$image);
              }else{
                $image = $image_old;
              }

          
           
              $add_product = new run_query("update  content set
              title='$title', 
              description='$description', 
               data1='$data1',
               data2='$data2',
               data3='$data3',
               type='$type',
               image='$image' where
               id='$id'
                 " );
                echo "<script>alert(' Updated Successfully!!! ');
                window.location.replace('list.php'); 
                </script>";
            
            }



?>	



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COEC ADMIN</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <script src="ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="dropify/css/demo.css">
    <link rel="stylesheet" href="dropify/css/dropify.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">COEC</a>
            </div>

            <div class="header-right">

              <!-- <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a> -->
               <b>
               WELCOME ADMIN!
               </b> 

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <!-- <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Jhon Deo Alex
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>
 -->

                    <li>
                        <a  href="index.php"><i class="fa fa-gear "></i>Settings</a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-user "></i>Key Staff <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_teams.php"><i class="fa fa-plus"></i>Add Key Staff</a>
                            </li> 

                            <li>
                                <a href="list.php?t=KEY_STAFF&q=TEAM&f=tweds"><i class="fa fa-users"></i>All Key Staff</a>
                            </li>
                        </ul>
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-user "></i>Board Members <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_teams1.php"><i class="fa fa-plus"></i>Add Board member</a>
                            </li> 

                            <li>
                                <a href="list.php?t=BOARD_MEMBERS&q=TEAM1&f=trfs"><i class="fa fa-users"></i>All Board member</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-bullhorn "></i>Programs <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_prog.php"><i class="fa fa-plus"></i>Add Programs</a>
                            </li> 

                            <li>
                                <a href="list.php?t=PROGRAM&q=PROGRAM&f=t"><i class="fa fa-bullhorn"></i>All Programs</a>
                            </li>
                        </ul>
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-bullhorn "></i>Approach <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_approach.php"><i class="fa fa-plus"></i>Add Approach</a>
                            </li> 

                            <li>
                                <a href="list.php?t=APPROACH&q=APPROACH&f=t"><i class="fa fa-bullhorn"></i>All Approach</a>
                            </li>
                        </ul>
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-cube "></i>Progress Report <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_p_report.php"><i class="fa fa-plus"></i>Add Progress Report</a>
                            </li> 

                            <li>
                                <a href="list.php?t=PROGRESS_REPORT&q=PROG_REPORT&f=n"><i class="fa fa-cube"></i>All Progress Report</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-calendar "></i>Events <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_event.php"><i class="fa fa-plus"></i>Add Events</a>
                            </li> 

                            <li>
                                <a href="list.php?t=EVENTS&q=EVENT&f=t"><i class="fa fa-calendar"></i>All Events </a>
                            </li>
                        </ul>
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-building "></i>Projects <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_project.php"><i class="fa fa-plus"></i>Add Projects</a>
                            </li> 

                            <li>
                                <a href="list.php?t=PROJECTS&q=PROJECT&f=t"><i class="fa fa-building"></i>All Projects </a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-archive "></i>Campaigns <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_camp.php"><i class="fa fa-plus"></i>Add Campaign</a>
                            </li> 

                            <li>
                                <a href="list.php?t=CAMPAIGN&q=CAMPAIGNS&f=thtff"><i class="fa fa-archive"></i>All Campaigns </a>
                            </li>
                        </ul>
                    </li>
                   

                    <li>
                        <a href="#"><i class="fa fa-book "></i>Blog Posts <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_blog.php"><i class="fa fa-plus"></i>Add Blog Post</a>
                            </li> 

                            <li>
                                <a href="list.php?t=BLOG_POST&q=BLOG&f=tfde"><i class="fa fa-book"></i>All Blog Posts </a>
                            </li>
                        </ul>
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-comment "></i>Impart Stories <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_story.php"><i class="fa fa-plus"></i>Add Impart Story </a>
                            </li> 

                            <li>
                                <a href="list.php?t=IMPART_STORY&q=STORY&f=tgfr"><i class="fa fa-comment"></i>All Impart Stories  </a>
                            </li>
                        </ul>
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-cogs "></i>Partners  <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_partner.php"><i class="fa fa-plus"></i>Add Partner  </a>
                            </li> 

                            <li>
                                <a href="list.php?t=PARTNER&q=PARTNER&f=tgfr"><i class="fa fa-cogs"></i>All Partners   </a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-beer "></i>Annual Reports  <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_an_report.php"><i class="fa fa-plus"></i>Add Annual Report  </a>
                            </li> 

                            <li>
                                <a href="list.php?t=ANNUAL_REPORT&q=AN_REPORT&f=tgfr"><i class="fa fa-beer"></i>All Annual Reports   </a>
                            </li>
                        </ul>
                    </li>
                    


                    <li>
                        <a href="#"><i class="fa fa-bell "></i>Financial Reports  <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_fin_report.php"><i class="fa fa-plus"></i>Add Financial Report  </a>
                            </li> 

                            <li>
                                <a href="list.php?t=FINANCIAL_REPORT&q=FIN_REPORT&f=tgfr"><i class="fa fa-bell"></i>All Financial Reports   </a>
                            </li>
                        </ul>
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-facebook "></i>Facebook post <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_facebook.php"><i class="fa fa-plus"></i>Add Facebook post  </a>
                            </li> 

                            <li>
                                <a href="list.php?t=FACEBOOK_POST&q=FACEBOOK&f=t"><i class="fa fa-facebook"></i> Facebook post list   </a>
                            </li>
                        </ul>
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-bullhorn "></i>Where we work <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_testmony.php"><i class="fa fa-plus"></i>Add a Where we work  </a>
                            </li> 

                            <li>
                                <a href="list.php?t=WHERE_WE_WORK&q=WORK&f=t"><i class="fa fa-bullhorn"></i> Where we work list   </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a  href="password.php"><i class="fa fa-lock "></i>Password</a>
                    </li>

                    <li>
                        <a  href="logout.php"><i class="fa fa-sign-out "></i>Log Out</a>
                    </li>

                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->