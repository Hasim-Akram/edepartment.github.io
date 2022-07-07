
<?php 




    include 'menu.php';

    include 'functions.php';

    $obj =new edep;

    $id=$_GET['id'];
    //$upid = isset($_GET['id']) ? $_GET['id'] : '';

    ///$upid = ''; 
    //if( isset( $_GET['id'])) {
    //$upid = $_GET['id']; 
//}
    


    $uppdd = $obj -> updateinfo($id);

    if(isset($_POST['submit'])){


      $name=$_POST['name'];
         $designation=$_POST['designation'];
          $office=$_POST['office'];
            $department=$_POST['department'];
              $email=$_POST['email'];
                $contact=$_POST['contact'];
                 
                    $date=$_POST['date'];
                      $ip=$_POST['ip'];
                        $address=$_POST['address'];







      $obj -> updatedata($name,$designation,$office,$department,$email,$contact,$date,$ip,$address,$id);








      }





    while($updd = $uppdd -> fetch_assoc()) :

    



?>




                 <section class="section">
                      <div class="row">
                        <div class="offset-md-3 col-md-6 justify-content-center">

                          <div class="card ">
                            <div class="card-body">

                              

                                   
                              <h5 class="card-title">Create New Employee</h5>

                              <!-- General Form Elements -->
                              <form action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $updd['id'];?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Name</label>
                                  <div class="col-sm-9">
                                    <input name="name" value="<?php echo $updd['name']; ?>" type="text" class="form-control" required>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label  for="inputNumber" class="col-sm-3 col-form-label">Designation</label>
                                  <div class="col-sm-9">
                                    <input name="designation"  value="<?php echo $updd['designation']; ?>" type="text" class="form-control" required>
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <label class="col-sm-3 col-form-label">Office</label>
                                  <div class="col-sm-9">
                                    <select  name="office" class="form-select" aria-label="Default select example">
                                      <option selected>Select Posting Place</option>

                                               <?php 
                                                $officedata = $obj-> officeview();
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
                                  <label class="col-sm-3 col-form-label">Departments</label>
                                  <div class="col-sm-9">
                                    <select name="department" class="form-select" aria-label="Default select example">
                                      <option selected>Select Department</option>
                                                <?php 
                                                    $depdata = $obj-> showdep();
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
                                    <input name="email" value="<?php echo $updd['email']; ?>"  type="email" class="form-control">
                                  </div>
                                </div>
                               
                                <div class="row mb-3">
                                  <label  for="inputNumber" class="col-sm-3 col-form-label">Contact No:</label>
                                  <div class="col-sm-9">
                                    <input  name="contact" value="<?php echo $updd['contact']; ?>" type="number" class="form-control">
                                  </div>
                                </div>
                              
                                <div class="row mb-3">
                                  <label for="inputDate" class="col-sm-3 col-form-label">Joining Date</label>
                                  <div class="col-sm-9">
                                    <input name="date"  value="<?php echo $updd['date']; ?>" type="date" class="form-control">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label  for="inputNumber" class="col-sm-3 col-form-label">Assinged IP</label>
                                  <div class="col-sm-9">
                                    <input name="ip" value="<?php echo $updd['ip']; ?>"  type="text" class="form-control">
                                  </div>
                                </div>

                               
                                <div class="row mb-3">
                                  <label   class="col-sm-3 col-form-label">Address</label>
                                  <div class="col-sm-9">
                                    <input name="address" value="<?php echo $updd['address']; ?>" class="form-control"></input>
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














<?php endwhile; ?>








<?php include 'footer.php'; 


?>