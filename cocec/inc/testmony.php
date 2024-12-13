 <!-- Testimonial Start -->
 <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Latest Updates of our Work on the Field</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    
                <?php
                           
                            $test = new run_query( "select * from content where type ='TESTMONY' and status = '1' and featured='1' limit 13" );
                            if( $test->num_rows >= 1){
                                while( $test_data =	$test->result() ){
                                extract($test_data); 

                ?>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="ot_img/img/<?=$image;?>"  width="100px" height="100px" alt="<?=$title;?>">
                            <div class="testimonial-name">
                                <h3><?=$title;?></h3>
                                <p><?=$data1;?></p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                            <?=limit_text($description,25);?>
                            </p>
                        </div>
                    </div>
                <?php }} ?>
                    
                  


                </div>
            </div>
        </div>
        <!-- Testimonial End -->