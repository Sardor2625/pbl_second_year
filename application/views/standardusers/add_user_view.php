       <!-- DataTales Example -->
          <div class="card shadow mb-4">
      
            <div class="card-header py-3">
         <h5 class="mb-2 text-gray-800"> Foydalanuvchi qo`shish </h5>

            </div>
            <div class="card-body">
 
        <?php if($this->session->flashdata('add_user')): ?>  
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('add_user') ."</div>" ?>
           <?php endif; ?>
          

  
         <?php 
 
         $this->load->view($addform);
 
          ?>
             
            </div>
          </div>
 

          <!-- DataTales Example -->
          <div  id="addusertable" class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800">Foydalanuvchilar </h5>  

            </div>
            <div class="card-body">
       <div class="container">
     
              <?php if($this->session->flashdata('edit_user')): ?>  
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('edit_user') ."</div>" ?>
           <?php endif; ?>


              <?php if($this->session->flashdata('delete_user')): ?>  
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('delete_user') ."</div>" ?>
           <?php endif; ?>

             </div>
              <div class="table">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                
                  <thead>
                    <tr>
                      <th class="text-center">Foydalanuvchi nomi</th>
                      <th class="text-center">Familiya</th>
                      <th class="text-center">Lavozim</th>
                      <th class="text-center">Qo`shilgan sana</th>
                      <th class="text-center">faoliyat</th>
                    </tr>
                  </thead>
                
                  <tbody>
              
                <?php foreach($get_user as $user): ?>
                 <tr>
                   
                 <?php echo "<td class='text-center'>". $user->su_user ."</td>" ?>
                 <?php echo "<td class='text-center'>". $user->su_fname ."</td>" ?>
                 <?php echo "<td class='text-center'>". $user->su_position ."</td>" ?>
                 <?php echo "<td class='text-center'>". $user->date_created ."</td>" ?>
                
                 <?php echo "<td class='text-center'><a class='btn btn-success' href='". base_url() ."addusercontrol/edit_user/". $user->su_id ."'>Tahrirlash
                  </a>" ?>
                  
                 <?php echo "<a class='btn btn-danger'  href='". base_url() ."addusercontrol/delete_user/". $user->su_id ."' onClick='return doconfirm()' >o`chirish
                  </a>" ?>
                   </td>
                   
                 </tr>
                <?php endforeach; ?>

                </tbody>

                </table>
              </div>
            </div>
          </div>




<script>
function doconfirm()
{
    job = confirm("Haqiqatan ham foydalanuvchini o`chirib tashlamoqchimisiz?");
    if (job != true)
    {
        return false;
    }
}
</script>
