
<?php


  

    include 'menu.php';

    include 'functions.php';

    $obj =new edep;


?>




   <section class="section dashboard">
      <div class="row0">

        <!-- Left side columns -->
        <div class="offset-lg-3 col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body table-responsive" style="height: 350px;">
                  <h5 class="card-title">Offices<span>|This PBS</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-shop"></i>
                    </div>
                    <div class="ps-3">
                    <?php 

                              $count = $obj -> countoff();

                              $countoff= $count -> fetch_assoc(); 
                                //rint_r ([$countdata]); 

                              //$obj -> countdep();


                              ?>
                     <h6><?php  echo $countoff['ttoff']; ?> OFFICES</h6>
                       <hr>
                      <?php 

                        $totaloffice = $obj -> officeview();

                        while($dddd=$totaloffice -> fetch_assoc()):

    

    
                      ?>
                     
                      <h5><a href="dep_detail.php"><?php echo $dddd['officename']; ?></a></h5>


                      <?php

                        endwhile;
                      ?>
                      <hr>
                      <button class="btn btn-outline-info"><a href="office.php">ADD</a></button>
                      <button class="btn btn-outline-warning"><a href="office_detail.php">EDIT</a></button>
                      <button class="btn btn-outline-danger"><a href="office_detail.php">DELETE</a></button>
                      
                    
                    </div>
                  </div>
                </div>


              </div>
            </div><!-- End Sales Card -->


        <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body table-responsive" style="height: 350px;">
                  <h5 class="card-title">Departments <span>| This PBS</span></h5>

                  <div class="d-flex align-items-center">
                   
                    <div class="ps-3">
                      <!--
                      <?php 

                        $count = $obj -> countdep();

                        $countdata= $count -> fetch_assoc(); 
                          //rint_r ([$countdata]); 

                         //$obj -> countdep();


?>
                        -->


                       <h6><?php  echo $countdata['tt']; ?> Departments </h6>
                       <hr>
                       <table  class="table table-striped table-bordered table-responsive" width="100%" style=" height: 350px;" >

                          <tr>
                            <th>Departments Name</th>
                            <th>IP Range</th>
                          </tr>

                       
                      <?php 

                        $totaldep = $obj -> deparmentview();

                        while($totaldepp=$totaldep -> fetch_array()):

    

    
                      ?>
                         <tr>
                            <td><h5><a href="emp_detail.php?id=<?php echo $totaldepp['depname']; ?>"><?php echo $totaldepp['depname']; ?></a></h5></td>
                            <td><h5><a href="emp_detail.php?id=<?php echo $totaldepp['depname']; ?>"><?php echo $totaldepp['iprange']; ?></a></h5></td>

                          </tr>
                     
                      

                      <?php

                        endwhile;

                  
                      ?>
                       </table>
                       <hr>
                      <button class="btn btn-outline-info"><a href="office.php">ADD</a></button>
                      <button class="btn btn-outline-warning"><a href="office_detail.php">EDIT</a></button>
                      <button class="btn btn-outline-danger"><a href="office_detail.php">DELETE</a></button>
                      
                     
                      

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->



             <!-- Customers Card -->
            <div class="col-xxl-6 col-md-6">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body table-responsive" style="height: 350px;">
                  <h5 class="card-title">Network Devices <span>| Office Wise</span></h5>

                  <div class="d-flex align-items-center">
                    
                    <div class="ps-3">
                      <h6>4 Devices</h6>
                      <hr>
                      <table class="table table-bordered">
                       <tr>
                         <th>Router</th>
                         <th>IP</th>
                         <th>Office</th>

                         
                       </tr>

                     

                      <?php 

                        $totaldev = $obj -> deviceview();

                        while($totaldevv = $totaldev -> fetch_array()):

    

    
                      ?>
                     
                       <tr>
                         <td><h5><a href="device_detail.php"><?php echo $totaldevv['name']; ?></a></h5></td>
                         <td><h5><a href="device_detail.php"><?php echo $totaldevv['ip']; ?></a></h5></td>
                         <td><h5><a href="device_detail.php"><?php echo $totaldevv['office']; ?></a></h5></td>
                         
                       </tr>

                     
                      

                      <?php

                        endwhile;

                      ?>
                      </table>


                  
                      <hr>
                      <button class="btn btn-outline-info"><a href="network.php">ADD</a></button>
                      <button class="btn btn-outline-warning"><a href="device_detail.php">EDIT</a></button>
                      <button class="btn btn-outline-danger"><a href="device_detail.php">DELETE</a></button>
                      

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->


            <div class="col-xxl-6 col-md-6">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body table-responsive" style="height: 350px;">
                  <h5 class="card-title">Employees <span>| Office Wise</span></h5>

                  <div class="d-flex align-items-center">
                    
                    <div class="ps-3">
                      <h6>Total Employees</h6>
                      <hr>
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            

           



             

          </div>
        </div>
      </div>
    </section>









<?php

    include 'footer.php';

  ?>












