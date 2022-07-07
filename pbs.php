 
<?php 
    include 'menu.php';
    include 'functions.php';



    $obj =new edep;

      if(isset($_POST['submit'])){
      $pbsname=$_POST['pbsname'];
        $pbsid=$_POST['pbsid'];
         $pbslocation=$_POST['location'];         
         
            
              


           $obj -> addpbs($pbsname,$pbsid,$pbslocation);








      }





?>

                   <section class="section">
                        <div class="row justify-content-center">
                          <div class="offset-md-2 col-md-6 justify-content-center">

                            <div class="card ">
                              <div class="card-body">
                                
                                <h5 class="card-title">Add PBS</h5>

                                <!-- General Form Elements -->
                                <form method="POST">
                                  <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">PBS Name</label>
                                    <div class="col-sm-9">
                                      <input name="pbsname" type="text" class="form-control" required>
                                    </div>
                                  </div>
                                  
                                  <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-3 col-form-label">PBS ID</label>
                                    <div class="col-sm-9">
                                      <input name="pbsid" type="number" class="form-control" required>
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">PBS Locations</label>
                                    <div class="col-sm-9">
                                      <select name="location" class="form-select" aria-label="Default select example">
                                        <option selected>Devisions</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Chittagong">Chittagong</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Barishal">Barishal</option>
                                        <option value="Sylet">Sylet</option>
                                        <option value="Maymonshing">Maymonshing</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        
                                      </select>
                                    </div>                  
                                  </div>

                              
                                  <div class="row mb-3">
                                    
                                    <div class="offset-sm-3 col-sm-9">
                                      <button name="submit" type="submit" class="btn btn-primary" >Add PBS</button>
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



