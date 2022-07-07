

<?php

  include 'menu.php';


   include 'functions.php';

   $obj =new edep;


   if(isset($_POST['submit'])){
      $pbsname=$_POST['pbsname'];
        $officename=$_POST['officename'];
         $officecode=$_POST['officecode'];         
          $officetype=$_POST['officetype'];
            $officaddress=$_POST['officaddress'];
            
              


           $obj -> addoffice($pbsname,$officename,$officecode,$officetype,$officaddress);

    }


?>







                 <section class="section">
                      <div class="row justify-content-center">
                        <div class="offset-md-3 col-md-6 justify-content-center">

                          <div class="card ">
                            <div class="card-body">
                              <h5 class="card-title">Create New Office</h5>

                              <!-- General Form Elements -->
                              <form action="#" method="POST">

                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">PBS Name</label>
                                      <?php

                                     
                                           $pbsinfodata = $obj-> pbsview();

                                      
                                        ?>


                                            <div class="col-sm-9">
                                                  <select name="pbsname" class="form-select" aria-label="Default select example">
                                                    <option>Select PBS</option>
                                                 
                                                <?php 
                                                    while($pbsinfodataall= $pbsinfodata -> fetch_assoc()) : 
                                                ?>
                                                  <option><?php echo $pbsinfodataall['pbsname'];  ?></option>
                                                  <?php 
                                                        endwhile;
                                                 ?>
                                              </select>
                                            </div>
                                        </div>



                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Office Name</label>
                                  <div class="col-sm-9">
                                    <input name="officename" type="text" class="form-control" required>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label  for="inputNumber"  class="col-sm-3 col-form-label">Office Code</label>
                                  <div class="col-sm-9">
                                    <input name="officecode" placeholder="For HQ=1 zonal=2, subzonal=3, other=4," type="number" class="form-control" required>
                                  </div>
                                </div>
                                



                                

                                 

                                 
                                 
                                    
                                 
                               

                                
                                <div class="row mb-3">
                                  <label class="col-sm-3 col-form-label">Office type</label>
                                  <div class="col-sm-9">
                                    <select  name="officetype" class="form-select" aria-label="Default select example">
                                      <option selected>Select Type</option>
                                      <option value="Head Quater">Head Quater</option>
                                      <option value="Zonal"> Zonal</option>
                                      <option value="Sub-Zonal">Sub-Zonal</option>
                                      <option value="other">other</option>
                                    </select>
                                  </div>                  
                                </div>          
                             
                                <div class="row mb-3">
                                  <label  for="inputPassword" class="col-sm-3 col-form-label">Office Address</label>
                                  <div class="col-sm-9">
                                    <input name="officaddress" class="form-control">
                                  </div>
                                </div>
                            
                                <div class="row mb-3">
                                  
                                  <div class="offset-sm-3 col-sm-3">
                                     <input type="submit" name="submit" value="Add Office" class="form-control btn btn-info">
                                   
                                  </div>
                                </div>

                              </form><!-- End General Form Elements -->

                               

                            </div>
                          </div>
                          

                        </div>
                      </div>
                    </section>



<?php

    include 'footer.php';
?>


     
