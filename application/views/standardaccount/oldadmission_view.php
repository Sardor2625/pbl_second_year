

 
  <div class="align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-center">Eski qabul yozuvlari</h1>
          </div>

  <div class="row"> <!-- Begin of Row -->

      <div class="col-xl-8 col-md-8 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
             <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Bemor ismi</div>
             </div>
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        &nbsp&nbsp&nbsp&nbsp&nbsp
                        <?php echo $get_patient_data->oad_lname ?>&nbsp&nbsp
                        <?php echo $get_patient_data->oad_fname ?>&nbsp&nbsp
                        <?php echo $get_patient_data->oad_mname ?>
                         
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
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Qabul qilingan sana</div>
             </div>
                       <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <?php echo $get_patient_data->oad_date ?>
                        
                      </div>
                    </div>   
                  </div>
                </div>
              </div>
            </div>


    </div><!-- End of Row -->




<div class="row"><!-- Begin Row -->
 


              <!-- Findings Box -->
            <div  id="admission" class="col-sm-12 ">


              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-success">Qabul tafsilotlari</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
 
   

            
                <div class="row"><!-- Begin Row -->
           <div class="col-sm-4">
             
            <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">tomonidan qabul qilingan </div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_patient_data->oad_admittedby): ?>
              <?php echo $get_patient_data->oad_admittedby; ?>
             <?php else: ?>
              <p>N/A</p>
             <?php endif; ?>   
             </div>
              </div> 


           </div>          
            <div class="col-sm-4">
             

            <div  style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Palata</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_patient_data->oad_wardname): ?>
              <?php echo $get_patient_data->oad_wardname; ?>
             <?php else: ?>
              <p>N/A</p>
             <?php endif; ?>
               </div>
              </div> 


            </div>
           <div class="col-sm-4">
             

            <div type="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Bo'shatish sanasi</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_patient_data->oad_dischargedate): ?>
              <?php echo $get_patient_data->oad_dischargedate; ?>
              <?php else: ?>
               <p>N/A</p>
              <?php endif; ?> 
               </div>
              </div> 

           </div>

          </div><!-- End Row -->

          <div class="row"><!-- Begin Row -->
           <div class="col-sm-4">
             
            <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">To'liq diagnostika</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_patient_data->oad_completediagnosis): ?>
              <?php echo $get_patient_data->oad_completediagnosis; ?>
              <?php else: ?>
                <p>N/A</p>
             <?php endif; ?>                
               </div>
              </div> 


           </div>          
            <div class="col-sm-4">
             
            <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Dori/davolash</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
             <?php if($get_patient_data->oad_medication): ?>
              <?php echo $get_patient_data->oad_medication; ?>
              <?php else: ?>
               <p>N/A</p>
              <?php endif; ?> 
               </div>
              </div> 

            </div>
           <div class="col-sm-4">
             
          <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Bo'shatish sharti</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
            <?php if($get_patient_data->oad_conditiontodischarge): ?>
              <?php echo $get_patient_data->oad_conditiontodischarge; ?>
            <?php else: ?>
             <p>N/A</p>
             <?php endif; ?> 
               </div>
              </div> 

           </div>

           <div class="col-sm-4">
             
          <div style="margin-bottom:17px;">
        <div class="row no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Izohlar</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
            <?php if($get_patient_data->oad_remarks): ?>
              <?php echo $get_patient_data->oad_remarks; ?>
            <?php else: ?>
             <p>N/A</p>
             <?php endif; ?> 
               </div>
              </div> 

           </div>

          </div><!-- End Row -->
 
             <hr>
            <h5 class="text-secondary">Shikoyat</h5>
           
            <?php if($get_patient_data->oad_complaint): ?>
              <?php echo $get_patient_data->oad_complaint; ?>
            <?php else: ?>
             <h5 style="color: black;">N/A</h5>
             <?php endif; ?> 

        </div> 
      </div>
                
 </div>


       

  

</div><!-- End of Row -->
 
