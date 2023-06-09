 <?php $attributes = array('id' => 'edit_admission_form', 'class' => 'form-horizontal user'); ?>
               <?php echo form_open('admissioncontrol/edit_admission/'.$this->uri->segment(3).'#admission', $attributes); ?>

   

     <div  style="margin-bottom:17px; margin-left:510px;">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Bemor ishi raqami.</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
               <?php if($get_data_admission->pr_admission_id): ?>
                <?php echo $get_data_admission->pr_admission_id; ?>
                <?php else: ?>
                  <p>N/A</p> 
              <?php endif; ?>
             </div>
        </div>

     <div  style="margin-bottom:17px; margin-left:510px;">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Qabul sanasi</div>
                </div>
             <div class="h5 mb-1 font-weight-bold text-gray-800">
               <?php if($get_data_admission->ad_date): ?>
                <?php echo $get_data_admission->ad_date; ?>
                <?php else: ?>
                  <p>N/A</p> 
              <?php endif; ?>
             </div>
        </div>

           

<div style="margin-left: 5px;" class="row">
        
          <div class="col-sm-6">
                 <div style="margin-bottom:17px;">
        <div class=" no-gutters">
              <div class="text-xs font-weight-bold text-secondarysecondary text-uppercase mb-1">tomonidan qabul qilingan</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
             <input class="form-control  <?= (form_error('e_admittedby') == "" ? '':'is-invalid') ?>" type="text" name="e_admittedby" value="<?php echo $get_data_admission->ad_admittedby; ?>" placeholder="kim tomonidan qabul qiligan"></div>
        <div class="text-danger text-center"><?php echo form_error('e_admittedby'); ?></div>
             </div>
              </div>

               <div class="ml-auto" style="margin-bottom:17px; margin-right: 50px;">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondarysecondary text-uppercase mb-1">Palata</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
                 <select  class="form-control" name="e_wardname" >
             <option value=<?php echo $get_data_admission->ad_wardname; ?><?php echo set_select('e_wardname', $get_data_admission->ad_wardname); ?>><?php echo $get_data_admission->ad_wardname; ?></option>
             <?php if(count($get_physician)): ?>
                        <?php foreach($get_ward as $ward): ?>
                        <option value=<?php echo $ward->w_name; ?><?php echo set_select('e_wardname', $ward->w_name); ?>><?php echo $ward->w_name; ?></option>
               <?php endforeach; ?>
             <?php endif; ?> 
            </select> 
             </div>
              </div>
            </div>
         
            
             <div style="margin-left: 15px;" class="row">
           
             <div  style="margin-bottom:17px; margin-right: 20px;">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Voyaga etmaganlar uchun: Ota-onalarning ismi</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Otasi</div>
                </div>
              <input class="form-control  <?= (form_error('e_father') == "" ? '':'is-invalid') ?>" type="text" name="e_father" value="<?php echo $get_data_admission->ad_father; ?>" placeholder="Otasini kiriting">
            </div>
              <div class="text-danger text-center"><?php echo form_error('e_father'); ?></div>

      
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Onasi</div>
                </div>
               <input class="form-control  <?= (form_error('e_mother') == "" ? '':'is-invalid') ?>" type="text" name="e_mother" value="<?php echo $get_data_admission->ad_mother; ?>" placeholder="Onasini kiriting">
             </div>
        <div class="text-danger text-center"><?php echo form_error('e_mother'); ?></div>
         </div>
            
             <div class="ml-auto" style="margin-bottom:17px; margin-right: 40px;">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Bo'shatish sanasi</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <input class="form-control  <?= (form_error('e_discharge') == "" ? '':'is-invalid') ?>" type="date" name="e_discharge" value="<?php echo $get_data_admission->ad_dischargedate; ?>"></div>
        <div class="text-danger text-center"><?php echo form_error('e_discharge'); ?></div>
             </div>
           

             </div>
           

         <div style="margin-left: 5px;" class="row">
            <div class="col-sm-6">
                 <div style="margin-bottom:17px;">
        <div class=" no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Hisobni to'lash</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
               <input class="form-control  <?= (form_error('e_chargeofaccount') == "" ? '':'is-invalid') ?>" type="text" name="e_chargeofaccount" value="<?php echo $get_data_admission->ad_chargetoaccount; ?>" placeholder="To'lov hisobini kiriting"></div>
        <div class="text-danger text-center"><?php echo form_error('e_chargeofaccount'); ?></div>
             </div>
              </div>
       

            <div class="ml-auto" style="margin-bottom:17px; margin-right: 40px;">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Bemorga munosabat</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
                 <input class="form-control  <?= (form_error('e_relationtopatient') == "" ? '':'is-invalid') ?>" type="text" name="e_relationtopatient" value="<?php echo $get_data_admission->ad_relationtopatient; ?>" placeholder="Bemorga munosabat"></div>
        <div class="text-danger text-center"><?php echo form_error('e_relationtopatient'); ?></div>
             </div>
              </div>
       
      
            <div style="margin-left: 5px;" class="row">

               <div class="col-sm-12">
                 <div style="margin-bottom:17px;">
        <div class=" no-gutters">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Manzili</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <input class="form-control  <?= (form_error('e_address') == "" ? '':'is-invalid') ?>" type="text" name="e_address" value="<?php echo $get_data_admission->ad_address; ?>" placeholder="Manzili"></div>
              <div class="text-danger text-center"><?php echo form_error('e_address'); ?></div>
             </div>
              </div>

          </div>  
         
           <div style="margin-left: 5px;" class="row">
              <div class="col-sm-6">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondarysecondary text-uppercase mb-1">Tel/Mobil raqami</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
               <input class="form-control  <?= (form_error('e_number') == "" ? '':'is-invalid') ?>" type="text" name="e_number" value="<?php echo $get_data_admission->ad_number; ?>" placeholder="Enter Tel No./Mobile Number"></div>
              <div class="text-danger text-center"><?php echo form_error('e_number'); ?></div>
             </div>
             
              <div class="ml-auto" style="margin-bottom:17px; margin-right: 40px;">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondarysecondary text-uppercase mb-1">Jami to`lov amalga oshirildi</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
              <input class="form-control  <?= (form_error('e_totalpayment') == "" ? '':'is-invalid') ?>" type="text" name="e_totalpayment" value="<?php echo $get_data_admission->ad_totalpayment; ?>" placeholder="Jami to`lov amalga oshirildi"></div>
              <div class="text-danger text-center"><?php echo form_error('e_totalpayment'); ?></div>
             </div>
              </div>

              </div>

       
            <div style="margin-left: 10px; margin-right: 10px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondarysecondary text-uppercase mb-1">Bosh shikoyat</div>
                </div>
             <div class="h6 mb-1 text-gray-800">
              <input class="form-control <?= (form_error('e_complain') == "" ? '':'is-invalid') ?>" type="text" name="e_complain" value="<?php echo $get_data_admission->ad_complaint; ?>" placeholder="Bosh shikoyatni kiriting">
          
              <div class="text-danger text-center"><?php echo form_error('e_complain'); ?></div>
              
             </div>
              </div>
            </div>
            
            <div style="margin-left: 10px; margin-right: 10px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">To'liq diagnostika</div>
                </div>
             <div class="h6 mb-1  text-gray-800">
               <input class="form-control <?= (form_error('e_completediagnosis') == "" ? '':'is-invalid') ?>" type="text" name="e_completediagnosis" value="<?php echo $get_data_admission->ad_completediagnosis; ?>" placeholder="Enter Diagnosis">
         <div class="text-danger text-center"><?php echo form_error('e_completediagnosis'); ?></div>
             </div>
              </div>
            </div>

             <div style="margin-left: 10px; margin-right: 10px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Dori/davolash</div>
                </div>
             <div class="h6 mb-1  text-gray-800">
               <input class="form-control <?= (form_error('e_medication') == "" ? '':'is-invalid') ?>" type="text" name="e_medication" value="<?php echo $get_data_admission->ad_medication; ?>" placeholder="Dori/davolanishni kiriting">
         <div class="text-danger text-center"><?php echo form_error('e_medication'); ?></div>
             </div>
              </div>
            </div>
         
          <div style="margin-left: 10px; margin-right: 10px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Bo'shatish holati</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
               <input class="form-control  <?= (form_error('e_conditiondischarge') == "" ? '':'is-invalid') ?>" type="text" name="e_conditiondischarge" value="<?php echo $get_data_admission->ad_conditiontodischarge; ?>" placeholder="Enter Condition to Discharge"></div>
              <div class="text-danger text-center"><?php echo form_error('e_conditiondischarge'); ?></div>
             </div>
              </div>
            

           <div style="margin-left: 10px;  margin-right: 10px;" class="row">
               <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Izohlar</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
             <input class="form-control  <?= (form_error('e_remarks') == "" ? '':'is-invalid') ?>" type="text" name="e_remarks" value="<?php echo $get_data_admission->ad_remarks; ?>" placeholder="Izohlar kiriting"></div>
              <div class="text-danger text-center"><?php echo form_error('e_remarks'); ?></div>
             </div>
              </div>
           
           
           <div style="margin-left: 10px; margin-bottom: 30px; margin-right: 10px;" class="row">
                 <div class="col-sm-12">
        <div class=" no-gutters ">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Davolovchi shifokor</div>
                </div>
             <div class="h4 mb-1 font-weight-bold text-gray-800">
                <select  class="form-control" name="e_physician" >
             <option value=<?php echo $get_data_admission->ad_physician; ?><?php echo set_select('e_physician', $get_data_admission->ad_physician); ?>><?php echo "Dr. ".$get_data_admission->ad_physician; ?></option>
             <?php if(count($get_physician)): ?>
                        <?php foreach($get_physician as $physician): ?>
                        <option value=<?php echo $physician->ph_name.' / '.$physician->ph_fieldofphysician; ?><?php echo set_select('e_physician', $physician->ph_name.' / '.$physician->ph_fieldofphysician); ?>><?php echo "Dr. ".$physician->ph_name.' / '.$physician->ph_fieldofphysician; ?></option>
               <?php endforeach; ?>
             <?php endif; ?> 
            </select> 
        <div class="text-danger text-center"><?php echo form_error('e_physician'); ?></div>
             </div>

                 <button style='margin-left: 230px; margin-top: 50px;' type='submit' class='btn btn-success ' name='submit'> 
                 <span class="icon text-white-100">
                  <i class="fas fa-arrow-right"></i>  
									Qabulni yangilash
                  </span>
                </button> 

           
        </div>





        <?php echo form_close(); ?>
