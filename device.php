 

<?php 
    include 'menu.php';
?>

                   <section class="section">
                        <div class="row justify-content-center">
                          <div class="offset-md-2 col-md-6 justify-content-center">

                            <div class="card ">
                              <div class="card-body">
                                
                                <h5 class="card-title">Add New Device</h5>

                                <!-- General Form Elements -->
                                <form>
                                  <div class="row mb-3">
                                    <label for="inputText" class="col-sm-3 col-form-label">Device Name</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" required>
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-3 col-form-label">Device id</label>
                                    <div class="col-sm-9">
                                      <input type="number" class="form-control" required>
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Office</label>
                                    <div class="col-sm-9">
                                      <select class="form-select" aria-label="Default select example">
                                        <option selected>Select Posting Place</option>
                                        <option value="1">Head Quater</option>
                                        <option value="2">Madhabdi Zonal</option>
                                        <option value="3">Gorashal Zonal</option>
                                        <option value="3">Taltoli  Sub-Zonal</option>
                                      </select>
                                    </div>                  
                                  </div>

                                   <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Departments</label>
                                    <div class="col-sm-9">
                                      <select class="form-select" aria-label="Default select example">
                                        <option selected>Select Department</option>
                                        <option value="1">IT</option>
                                        <option value="2">Admin</option>
                                        <option value="2">Finance</option>
                                        <option value="2">O&M</option>
                                        <option value="3">E&C</option>
                                        <option value="3">MS</option>
                                      </select>
                                    </div>                  
                                  </div>
                                 
                                 
                               
                                 
                                  <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-3 col-form-label">Buying Date</label>
                                    <div class="col-sm-9">
                                      <input type="date" class="form-control">
                                    </div>
                                  </div>
                                 

                                 
                                  <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Buy Form </label>
                                    <div class="col-sm-9">
                                      <textarea class="form-control" style="height: 100px"></textarea>
                                    </div>
                                  </div>
                              
                                  <div class="row mb-3">
                                    
                                    <div class="offset-sm-3 col-sm-9">
                                      <button type="submit" class="btn btn-primary" >Add Device</button>
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



