<?php

      

  

    include 'menu.php';
    include 'functions.php';



    $obj =new edep;


      
      if(isset($_POST['submit'])){


      $name=$_POST['name'];
         $designation=$_POST['designation'];
          $office=$_POST['officename'];
            $department=$_POST['department'];
              $email=$_POST['email'];
                $contact=$_POST['contact'];
                  $image=$_FILES['image']['name'];
                   $imaget=$_FILES['image']['tmp_name'];
                    $date=$_POST['date'];
                      $ip=$_POST['ip'];
                        $address=$_POST['address'];





                        $exp =explode('.', $image);

                        $ext =strtolower(end($exp));
                        $uimage= md5(time().$image).".".$ext;


                     $data = $obj -> empdata($name,$designation,$office,$department,$email,$contact,$uimage,$date, $ip,$address,$imaget);






      }
    


?> 






















                 <section class="section">
                      <div class="row ">
                        <div class="offset-md-3 col-md-6 justify-content-center">

                          <div class="card ">
                            <div class="card-body">


                                   
                              <h5 class="card-title">Create New Employee</h5>

                              <!-- General Form Elements -->
                              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Name</label>
                                  <div class="col-sm-9">
                                    <input name="name" type="text" class="form-control" required>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label  for="inputNumber" class="col-sm-3 col-form-label">Designation</label>
                                  <div class="col-sm-9">
                                    <input name="designation" type="text" class="form-control" required>
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
                                  <label  for="inputText" class="col-sm-3 col-form-label">Department Name</label>
                                      <?php

                                           $depdata = $obj-> showdep();

                                      
                                        ?>


                                            <div class="col-sm-9">
                                                  <select name="department"  class="form-select" aria-label="Default select example">
                                                    <option >Select Office</option>
                                                 
                                                <?php 
                                                    while($depdataall= $depdata -> fetch_assoc()) : 
                                                ?>
                                                  <option><?php echo $depdataall['depname'];  ?></option>
                                                  <?php 
                                                        endwhile;
                                                 ?>
                                              </select>
                                            </div>
                                        </div>

                                
                                <div class="row mb-3">
                                  <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                                  <div class="col-sm-9">
                                    <input name="email"  type="email" class="form-control">
                                  </div>
                                </div>
                               
                                <div class="row mb-3">
                                  <label  for="inputNumber" class="col-sm-3 col-form-label">Contact No:</label>
                                  <div class="col-sm-9">
                                    <input  name="contact" type="number" class="form-control">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label  for="inputNumber" class="col-sm-3 col-form-label">Image</label>
                                  <div class="col-sm-9">
                                    <input name="image" class="form-control" type="file" id="formFile">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label for="inputDate" class="col-sm-3 col-form-label">Joining Date</label>
                                  <div class="col-sm-9">
                                    <input name="date"  type="date" class="form-control">
                                  </div>
                                </div>


                                <div class="row mb-3">


                                  
                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Show IP Range</label>
                                       <?php 

                                              $totaldep = $obj -> deparmentview();

                                              

                          

                          
                                            ?>


                                            <div class="col-sm-9">
                                                  <select name="ip range"  class="form-select" aria-label="Default select example">
                                                    <option >Range</option>
                                                    
                                                 
                                                <?php 
                                                    while($totaldepp=$totaldep -> fetch_array()): 
                                                ?>
                                                  
                                                  <option><p>IP Range For </p><a href="#"><?php echo $totaldepp['depname']; ?></a>--> 

                                                  
                                                  <a href="#"><?php echo $totaldepp['iprange']; ?></a>
                                                  </option>

                                                  <?php 
                                                        endwhile;
                                                 ?>
                                              </select>
                                            </div>
                                        </div>





                         


                                <div class="row mb-3">
                                  <label  for="inputNumber" class="col-sm-3 col-form-label">Assinged IP</label>
                                  <div class="col-sm-9">
                                    <input name="ip"  type="text" class="form-control">
                                  </div>
                                </div>

                               
                                <div class="row mb-3">
                                  <label  for="inputPassword" class="col-sm-3 col-form-label">Address</label>
                                  <div class="col-sm-9">
                                    <textarea name="address" class="form-control" style="height: 100px"></textarea>
                                  </div>
                                </div>
                            
                                <div class="row mb-3">
                                  
                                  <div class="offset-sm-3 col-sm-3">
                                     <input type="submit" name="submit" class="form-control btn-outline-info">
                                   
                                  </div>
                                </div>

                              </form><!-- End General Form Elements -->

                               

                            </div>
                          </div>

                        </div>
                      </div>
                    </section>























<?php include 'footer.php'; ?>