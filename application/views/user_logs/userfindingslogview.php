
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800">Topilmalar jurnali
                  </h5>  

            </div>
            <div class="card-body">

      
            
               <hr>
              <div class="container">
            
             </div>

              <div class="table">
                <table class="table  " id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      
                      <th class="text-center">Foydalanuvchi nomi</th>
                      <th class="text-center">Familiya</th>
                      <th class="text-center">Bemor</th>
                   
                      <th class="text-center">Jurnal sana/vaqt</th>
                      <th class="text-center">Tafsilotlar</th>
                    </tr>
                  </thead>

                  <tbody>
                    
                      <?php foreach($get_log_findings as $userlog): ?>
                   <tr>

                <?php echo "<td class='text-center'>". $userlog->su_user ."</td>" ?>
                <?php echo "<td class='text-center'>". $userlog->su_fname ."</td>" ?>
                 <?php echo "<td class='text-center'>". $userlog->lo_fname." ".$userlog->lo_lname."</td>" ?>         

                <?php echo "<td class='text-center'>". $userlog->log_time ."</td>" ?>
                
                 <?php echo "<td class='text-center'><a  class='btn btn-info' href='". base_url() ."logscontrol/log_findingsdetails/". $userlog->lo_id ."'>View
                  </a> </td>" ?>


            
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






