


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800"?> eski qabul yozuvlari
                  </h5>  

            </div>
            <div class="card-body">

      
            
               <hr>
              <div class="container">
            
             </div>

              <div class="table">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      
                       <th>Familiya</th>
                      <th>Ism</th>
                      <th>Otasinig ismi</th>
                      <th class="text-center">Palata</th>
                      <th>Jinsi</th>
                      <th>Yosh</th>
                      <th>Qabul qilingan sana</th>
                      <th>Faoligi</th>
                      
                    </tr>
                  </thead>

                  <tbody>
                    
                      <?php foreach($get_doctor_patient as $patient): ?>
                   <tr>

                <?php echo "<td class='text-center'>". $patient->oad_lname ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->oad_fname ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->oad_mname ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->oad_wardname ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->oad_gender ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->oad_age ."</td>" ?>
                <?php echo "<td class='text-center'>". $patient->oad_date ."</td>" ?>
                
                
                 <?php echo "<td class='text-center'><a style='margin-left:5px;' class='btn btn-info' href='". base_url() ."standardusercontrol/oldadmission_data/". $patient->oad_id ."'>View
                  </a></td>" ?>

            
                    </tr>           
                 <?php endforeach; ?>
               
                   
                  </tbody>

                </table>
              </div>
            </div>
          </div>


 

 <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



