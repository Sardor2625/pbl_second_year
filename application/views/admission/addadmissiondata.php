
  <div class="align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-center">Bemor yozuvlari</h1>
          </div>

  <div class="row"> <!-- Begin of Row -->

      <div class="col-xl-8 col-md-8 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
             <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Bemorning ismi<</div>
             </div>
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        &nbsp&nbsp&nbsp&nbsp&nbsp
                        <?php echo $get_admission_view->pr_lname ?>&nbsp&nbsp
                        <?php echo $get_admission_view->pr_fname ?>&nbsp&nbsp
                        <?php echo $get_admission_view->pr_mname ?>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-xl-4 col-md-6 mb-4 ml-auto">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kasalxona ishi raqami.</div>
             </div>
                       <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <?php echo "P-0".$get_admission_view->pr_id ?>
                       
                      </div>
                    </div>   
                  </div>
                </div>
              </div>
            </div>


    </div><!-- End of Row -->


<div class="row"><!-- Begin Row -->
 
  <!-- First Column -->
            <div class="col-lg-4">

              <!-- Details -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success">Tafsilotlar <?php echo "<a style='margin-left: 225px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/patient_edit_option/". $get_admission_view->pr_id ."'>" ?> 
                    <i class="fa fa-edit"></i></a> </h6>        
                </div>
               <div class="card-body"> <!--Card Body begin tag  -->

           <?php if($this->session->flashdata('patientrecordoption_updated')): ?>  
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('patientrecordoption_updated') ."</div>" ?>
           <?php endif; ?>
               
               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Manzil</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_addrs; ?></div>
               </div>

               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Yosh</div>   
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_age; ?></div>
         </div>
    
              <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Tug'ilgan kuni</div> 
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_bdate; ?></div>
        </div>
               
               <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Tug'ilgan joyi</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_bplace; ?></div>
         </div>

         <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Fuqarolik holati</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_civilstat; ?></div>
         </div>

         <div style="margin-bottom:17px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Jinsi</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_gen; ?></div>
         </div>

         <div style="margin-bottom:18px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Tel/raqami.</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_number; ?></div>
         </div>

          <div style="margin-bottom:18px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Din</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_religion; ?></div>
         </div>

         <div style="margin-bottom:18px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Kasb-hunar</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_occup; ?></div>
         </div>

         <div style="margin-bottom:18px;">
        <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Qo'shilgan sana</div>
                </div>
        <div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $get_admission_view->pr_date; ?></div>
         </div>



                </div><!--Card body end tag -->
              </div>
      
       </div>



      <!-- Findings Box -->
            <div  id="findings" class="col-xl-8 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-success">Qabul <?php echo "<a style='margin-left: 530px; text-decoration:none;' class='text-secondary' href='". base_url() ."admissioncontrol/admissionview/". $get_admission_view->admission_id ."#admission'>" ?> <i class="fa 
                   fa-arrow-left"></i></a></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                   
                   <div class="row "><!-- ROW 1 -->
                   <div class="col-sm-2"></div>
                   <div class="col-sm-8">
                     <h5 class="text-center"><b>Doktor hisobiga qo'shing</b></h5>
                     <hr>
                   </div>
                   <div class="col-sm-2"></div>
                 </div>
                  
           
                 <?php $this->load->view($form); ?>
                  
                </div>
              </div>
            </div>

     
     

</div><!-- End of Row -->

 

 