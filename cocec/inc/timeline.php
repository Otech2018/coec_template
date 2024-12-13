<?php
                           
                           $prog_report = new run_query( "select * from content where type ='PROG_REPORT' and status = '1' order by id " );
                           if( $prog_report->num_rows >= 1){
                               while( $prog_report_data =$prog_report->result() ){
                               extract($prog_report_data); 



               ?>
        
        
        <div class="timeline-row">
            <div class="timeline-time" style="color:#fff;"><?=$data1?><small><?=$data2?></small></div>
            <div class="timeline-content">
              <i class="icon-attachment"></i>
              <p style="color:#27a62a;"><b><?=$title?></b></p>
              <div style="color:#242e77 !important;"> 
              <?=$description?>
                               </div>
             
            </div>
        </div>    


<?php }} ?>


