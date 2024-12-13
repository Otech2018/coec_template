<?php include('inc/nav.php');


//deelte status
if( isset($_GET['del_s']) ){
    $get_id_d = $_GET['del_s'];
    $try = new run_query( "update content set status=0 where id ='$get_id_d' " );
    echo "<script>alert(' Deleted Successfully!!! ');
            window.location.replace('?'); 
            </script>";
}



//enable status
if( isset($_GET['e_s']) ){
    $get_id_d = $_GET['e_s'];
    $try = new run_query( "update content set status=1 where id ='$get_id_d' " );
    echo "<script>alert(' activated Successfully!!! ');
            window.location.replace('?'); 
            </script>";
}


//disabld status
if( isset($_GET['d_s']) ){
    $get_id_d = $_GET['d_s'];
    $try = new run_query( "update content set status=2 where id ='$get_id_d' " );
    echo "<script>alert(' disabled Successfully!!! ');
            window.location.replace('?'); 
            </script>";
}



//remove from featured
if( isset($_GET['r_f']) ){
    $get_id_d = $_GET['r_f'];
    $try = new run_query( "update content set featured= 0 where id ='$get_id_d' " );
    echo "<script>alert(' removed Successfully!!! ');
            window.location.replace('?'); 
            </script>";
}

//set as featured
if( isset($_GET['s_f']) ){
    $get_id_d = $_GET['s_f'];
    $try = new run_query( "update content set featured= 1 where id ='$get_id_d' " );
    echo "<script>alert(' set Successfully!!! ');
            window.location.replace('?'); 
            </script>";
}


//setting the view and config
if( isset($_GET['t']) && isset($_GET['q']) && isset($_GET['f'])  ){
     $title_get1 = $_GET['t'];
    $query_get1 = $_GET['q'] ;
    $featured_get1 = $_GET['f'] ;

    $_SESSION['t'] =  $title_get1;
    $_SESSION['q'] =  $query_get1;
    $_SESSION['f'] =  $featured_get1;
}


$title_get = $_SESSION['t'];
$query_get = $_SESSION['q'] ;
$featured_get = $_SESSION['f'] ;


//setting the edit route
$edit_link ="#!";
if($query_get == 'EVENT'){
    $edit_link ="edit_event.php";
}elseif($query_get == 'TEAM'){
    $edit_link ="edit_team.php";
}elseif($query_get == 'PROGRAM'){
    $edit_link ="edit_program.php";
}elseif($query_get == 'PROG_REPORT'){
    $edit_link ="edit_prog_report.php";
}elseif($query_get == 'PROJECT'){
    $edit_link ="edit_project.php";
}elseif($query_get == 'CAMPAIGNS'){
    $edit_link ="edit_campaigns.php";
}elseif($query_get == 'BLOG'){
    $edit_link ="edit_blog.php";
}elseif($query_get == 'STORY'){
    $edit_link ="edit_story.php";
}elseif($query_get == 'PARTNER'){
    $edit_link ="edit_partner.php";
}elseif($query_get == 'AN_REPORT'){
    $edit_link ="edit_an_report.php";
}elseif($query_get == 'FIN_REPORT'){
    $edit_link ="edit_fin_report.php";
}elseif($query_get == 'WORK'){
    $edit_link ="edit_testmony.php";
}elseif($query_get == 'TEAM1'){
    $edit_link ="edit_team1.php";
}elseif($query_get == 'APPROACH'){
    $edit_link ="edit_approach.php";
}elseif($query_get == 'FACEBOOK'){
    $edit_link ="edit_facebook.php";
}

?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"><?=$title_get;?> LIST</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                       
                    <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Status </th>
                                <th>Date Created </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                           
                            $content = new run_query( "select * from content where type ='$query_get' and status != '0' " );
                            if( $content->num_rows >= 1){
                                while( $content_data =	$content->result() ){
                                extract($content_data);
                                $status_info = "Active";
                                $status_btn = "<a href='#!'
                                onclick=\"if( confirm('Are you sure you want to disable the status of this item: $title?')){ window.location.replace('?d_s=$id'); }\"
                                ><i class='fa fa-ban text-danger' title='disable this item'></i></a>";
                                $featured_n = "";
                                
                                if($status == '2'){
                                $status_info = "Disabled";
                                $status_btn = "<a href='#!'
                                onclick=\"if( confirm('Are you sure you want to enable the status of this item: $title?')){ window.location.replace('?e_s=$id'); }\"
                                ><i class='fa fa-check-circle text-success' title='Enable this item'></i></a>";
                                }

                                if($featured_get == 't'){
                                    if($featured == '0'){
                                        $featured_n = "<a href='#!'
                                        onclick=\"if( confirm('Are you sure you want to set this item: $title as Featured?')){ window.location.replace('?s_f=$id'); }\"
                                        > <i class='fa fa-star' title='set as featured'></i></a>";
                                        }else{
                                            $featured_n = "<a href='#!'
                                            onclick=\"if( confirm('Are you sure you want to remove this item: $title from Featured?')){ window.location.replace('?r_f=$id'); }\"
                                            style='color:orange'><i class='fa fa-star' title='Remove From featured '></i></a>";
                                        }
                                }
                            echo"<tr>
                                <td>$title</td>
                                <td>$status_info </td>
                                <td>$reg_date</td>
                                <td>
                                $status_btn &nbsp;
                                <a href='#!'
                                onclick=\"if( confirm('Are you sure you want to delete this item: $title?')){ window.location.replace('?del_s=$id'); }\"
                                ><i class='fa fa-trash text-danger' title='delete this item'></i></a> &nbsp;
                                 $featured_n &nbsp;
                                 <a href='$edit_link?i=$id'><i class='fa fa-edit text-primary' title='Edit item'></i></a> &nbsp;
                                 <a href='$edit_link?i=$id'><i class='fa fa-eye text-primary' title='View Details'></i></a> &nbsp;
                                </td>
                            </tr>";
                                }
                            }         


                            
                        
                        ?>
                           
                          
                          
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>

                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
   <?php include('inc/footer.php');?>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>




<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>


<script>

$(document).ready(function () {
    $('#example').DataTable();
});


</script>
</body>
</html>
