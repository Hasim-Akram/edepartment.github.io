<?php 

	include 'menu.php';
	
	include 'functions.php';

	$obj =new edep;



?>






<!-- Revenue Card -->
            <div class="col-xxl-6 offset-md-3 col-md-9">
              <div class="card info-card revenue-card">

                

                <div class="card-body">
                  <h5 class="card-title">Departments <span>| This PBS</span></h5>

                  
                    <div class="ps-3">
                      <!--
                      <?php 

                        $count =$obj -> countdep();

                        while($countdata= $count -> fetch_assoc()) : 
                          print_r ([$countdata]); 
                         echo $countdata['id'];     

                        endwhile;  




                        ?>
                        -->


                       <h6> 7 Departments</h6>
                       <hr>
                       <table class="table table-bordered">

                          <tr>
                            <th>Departments Name</th>
                            <th>IP Range</th>
                            <th>Action</th>
                          </tr>

                       
                      <?php 

                        $totaldep = $obj -> deparmentview();

                        while($totaldepp=$totaldep -> fetch_array()):

    

    
                      ?>
                         <tr>
                            <td><h5><a href="emp_detail.php?id=<?php echo $totaldepp['depname']; ?>"><?php echo $totaldepp['depname']; ?></a></h5></td>
                            <td><h5><a href="emp_detail.php?id=<?php echo $totaldepp['depname']; ?>"><?php echo $totaldepp['iprange']; ?></a></h5></td>
                          

                          <td>
                                      <a class="btn btn-primary" href="updatedep.php?id=<?php echo $totaldepp['id'];?>">Edit</a>
                                       <a class="btn btn-danger" href="department_del.php?id=<?php echo $totaldepp['id'];?>">Delete</a>
                          </td>
                     </tr>
                      

                      <?php

                        endwhile;

                  
                      ?>
                       </table>
                     
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->




            <?php
            	include 'footer.php';
            ?>
