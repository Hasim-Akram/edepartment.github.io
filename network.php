 

<?php 
    include 'menu.php';
    include 'functions.php';



    $obj =new edep;

      if(isset($_POST['submit'])){
      $name=$_POST['name'];
        $ip=$_POST['ip'];
         $subnet=$_POST['subnet'];         
          $office=$_POST['officename'];
            
              


           $obj -> addnetwork($name,$ip,$subnet,$office,);








      }





?>

                   <section class="section">
                        <div class="row justify-content-center">
                          <div class="offset-md-2 col-md-6 justify-content-center">

                            <div class="card ">
                              <div class="card-body">
                                
                                <h5 class="card-title">Add Network Device</h5>

                                <!-- General Form Elements -->
                                <form method="POST">
                                  <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Device Name</label>
                                    <div class="col-sm-9">
                                      <input name="name" type="text" class="form-control" required>
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                    <label for="text" class="col-sm-3 col-form-label">Device IP</label>
                                    <div class="col-sm-9">
                                      <input name="ip" type="text" class="form-control" required>
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label for="text" class="col-sm-3 col-form-label">Subnet Mask</label>
                                    <div class="col-sm-9">
                                      <input name="subnet" type="text" class="form-control" required>
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Office Name</label>


                                      <?php

                                     
                                           $officedata = $obj -> officeview();

                                          

                                      
                                        ?>


                                            <div class="col-sm-9">
                                                  <select name="officename" class="form-select" aria-label="Default select example">
                                                    <option>Select Office</option>
                                                 
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
                                    
                                    <div class="offset-sm-3 col-sm-9">
                                      <button name="submit" type="submit" class="btn btn-primary" >Add Network Device</button>
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



