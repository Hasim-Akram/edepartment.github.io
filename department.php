

<?php

  include 'menu.php';


   include 'functions.php';

  

   $obj =new edep;


   if(isset($_POST['submit'])){
      $pbsname=$_POST['pbsname'];
        $officename=$_POST['officename'];
         $depname=$_POST['depname'];         
          $depcode=$_POST['depcode'];
            $iprange=$_POST['iprange'];
            
              


           $obj -> adddepartment($pbsname,$officename,$depname,$depcode,$iprange);

    }


   


?>







                 <section class="section">
                      <div class="row justify-content-center">
                        <div class="offset-md-3 col-md-6 justify-content-center">

                          <div class="card ">
                            <div class="card-body">
                              <h5 class="card-title">Create New Department</h5>

                              <!-- General Form Elements -->
                              <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

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
                                      <?php



                                     
                                           $officedata = $obj-> officeview();

                                      
                                        ?>


                                            <div class="col-sm-9">
                                                  <select name="officename"  class="form-select" aria-label="Default select example">
                                                    <option >Select Office</option>
                                                 
                                                <?php 
                                                    while($officedataall= $officedata -> fetch_assoc()) : 
                                                ?>
                                                  <option><?php echo $officedataall['officename'];  ?></option>
                                                  <?php 
                                                        endwhile;
                                                 ?>
                                              </select>
                                            </div>
                                        </div>


                                
                                
                                <div class="row mb-3">
                                  <label  for="inputPassword" class="col-sm-3 col-form-label">Department Name</label>
                                  <div class="col-sm-9">
                                    <input  name="depname" class="form-control">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label  for="inputNumber"  class="col-sm-3 col-form-label">Department Code</label>
                                  <div class="col-sm-9">
                                    <input name="depcode" type="text" placeholder="Admin=1,HR=2,IT=3,O&m=4,e&c=5, ms=6,Fi=7,other=8" class="form-control" required>
                                  </div>
                                </div>



                                 <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Routers IP</label>
                                      <?php



                              

                                            $networkdata= $obj -> networkview(); 

                                      
                                        ?>


                                            <div class="col-sm-9">
                                                  <select name="pbsnamee" class="form-select" aria-label="Default select example">
                                                    <option>Office wise router IP</option>
                                                 
                                                <?php 

                                                   
                                                   

                                                    while($networkdataall= $networkdata -> fetch_assoc()) : 
                                                ?>
                                                  <option><?php 
                                                  echo $networkdataall['office'];
                                                  ?>
                                                  <p> -> </p>
                                                  <?php 

                                                   echo $networkdataall['ip']; ?>
                                                    
                                                  </option>
                                                   <?php 
                                                        endwhile;
                                                 ?>                                    
                                                                                           
                                              </select>
                                              
                                            </div>

                                        </div>


                                <div class="row mb-3">
                                  <label  for="inputNumber"  class="col-sm-3 col-form-label">Assinged IP Range</label>
                                  <div class="col-sm-9">
                                    <input name="iprange" type="text" class="form-control" required>
                                  </div>
                                </div>


                                

                                 

                                 
                                 
                                    
                                 
                               

                                
                                        
                             
                                
                                <div class="row mb-3">
                                  
                                  <div class="offset-sm-3 col-sm-3">
                                     <input type="submit" name="submit" value="Add Department" class="form-control btn btn-info">
                                   
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


     
