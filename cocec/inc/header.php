 <!-- facebook  -->
 
 
 <!-- Top Bar Start -->
 <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p> <a href="tel:+2347081621338" style="color:white;">+2347081621338</a></p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p><a href="mailto:info@coecnigeria.org" style="color:white;">info@coecnigeria.org</a>  or 
                                <a href="mailto:coecnigeria@gmail.com" style="color:white;">coecnigeria@gmail.com</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href="https://twitter.com/coec_ng?t=1yrI1BfBe0657Zk00rhLrA&s=08"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/coecnigeria?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://youtube.com/@coecnigeria"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/company/coecng/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://instagram.com/coec_ng?igshid=NTc4MTIwNjQ2YQ=="><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg" style="background-color:white !important;">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand"><img src="/ot_img/logo.jpg" alt="logo"></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="fa fa-bars text-success"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link <?php if($page == 'home'){echo "active"; }?>"><b>Home</b></a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle <?php if($page == 'about'){echo "active"; }?>" data-toggle="dropdown"><b>About</b></a>
                            <div class="dropdown-menu">
                                <a href="about.php#who_we_are" class="dropdown-item">Who We are</a>
                                <a href="progress_report.php" class="dropdown-item">Progress Report</a>
                                <a href="team.php" class="dropdown-item">Key Staff</a>
                                <a href="team1.php" class="dropdown-item">Board</a>
                                <a href="partners.php" class="dropdown-item">Partners</a>
                                <a href="event.php" class="dropdown-item">Events</a>
                            </div>
                        </div>



                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle <?php if($page == 'work'){echo "active"; }?>" data-toggle="dropdown"><b>Our Work</b></a>
                            <div class="dropdown-menu">
                                <a href="approach.php" class="dropdown-item">Approach</a>
                                <a href="programs.php" class="dropdown-item">Programs</a>
                                <a href="projects.php" class="dropdown-item">Projects</a>
                                <a href="campaigns.php" class="dropdown-item">Campaigns</a>
                            </div>
                        </div>


                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle <?php if($page == 'story'){echo "active"; }?>" data-toggle="dropdown"><b>Our Stories</b></a>
                            <div class="dropdown-menu">
                                <a href="stories.php" class="dropdown-item">impact Stories</a>
                                <a href="/blog.php" class="dropdown-item">Blog Posts</a>
                                <a href="annual_report.php" class="dropdown-item">Annual Reports</a>
                                <a href="financial_report.php" class="dropdown-item">Financial Reports</a>
                            </div>
                        </div>

                         <a href="social.php" class="nav-item nav-link <?php if($page == 'social'){echo "active"; }?>"><b>Updates</b></a> 


                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle <?php if($page == 'opportunities'){echo "active"; }?>" data-toggle="dropdown"><b>Opportunities</b></a>
                            <div class="dropdown-menu">
                                <a href="partner1.php" class="dropdown-item">Become Our Partner</a>
                                <a href="volunteer.php" class="dropdown-item">Volunteer</a>
                                <a href="careers.php" class="dropdown-item">Careers</a>
                            </div>
                        </div>
    
    

                        <a href="donate.php" class="nav-item nav-link <?php if($page == 'donate'){echo "active"; }?>"><b>Donate</b></a>

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->