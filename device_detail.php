<?php


  

    include 'menu.php';

    include 'functions.php';

    $obj =new edep;


?>


        <section class="section dashboard">
           <div class="row">
                    





 <!-- Customers Card -->
            <div class="col-xxl-6  offset-lg-3 offset-md-4  col-md-8">

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

                <div class="card-body table-responsive" style="height: 500px;">
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
                         <th>Action</th>

                         
                       </tr>

                     

                      <?php 

                        $totaldev = $obj -> deviceview();

                        while($totaldevv = $totaldev -> fetch_array()):

    

    
                      ?>
                     
                       <tr>
                         <td><h5><a href="#"><?php echo $totaldevv['name']; ?></a></h5></td>
                         <td><h5><a href="#"><?php echo $totaldevv['ip']; ?></a></h5></td>
                         <td><h5><a href="#"><?php echo $totaldevv['office']; ?></a></h5></td>

                         <td><button class="btn btn-outline-warning"><a href="device_edit.php?id=<?php echo $dddd['id']; ?> "?>EDIT</a></button>
                        <button class="btn btn-outline-danger"><a href="device_delete.php?id=<?php echo $dddd['id']; ?> "?>DELETE</a></button></td>
                         
                       </tr>

                     
                      

                      <?php

                        endwhile;

                      ?>
                      </table>

                  
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->


            </div>
        </div>

    </section>








<?php

    include 'footer.php';

  ?>
