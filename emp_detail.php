

<?php 
    include 'menu.php';






  
?>







                     <section class="section">
                          <div class="row">
                            <div class="offset-md-3 col-md-9">




                              <table class="table table-primary table-bordered table-hover">
                                <thead>
                                  <tr>
                                    
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Office</th>
                                    <th>Department</th>
                                    
                                    
                                    <th>IP Address</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>



                              <?php

                                include 'functions.php';

                                  $obj = new edep;
                                  
                                  $depname=$_GET['id'];
                                  

                                  $alldata = $obj -> viewmethod($depname);

                                  while($data = $alldata -> fetch_assoc()):  ?>

                                <tbody>
                                  <tr>
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['name'] ;?></td>
                                    <td><?php echo $data['designation']; ?></td>
                                    <td><?php echo $data['office']; ?></td>
                                    <td><?php echo $data['department']; ?></td>
                                    
                                    
                                    <td><?php echo $data['ip']?></td>
                                    <td>
                                      <a class="btn btn-primary" href="update.php?id=<?php echo $data['id'];?>">Edit</a>
                                       <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id'];?>">Delete</a>
                                    </td>
                                    
                                  </tr>


                                
                                </tbody>

                                <?php
                                    endwhile;
                                ?>
                              </table>




                            </div>
                                       
                          </div>
                    </section>
                    












<?php  


  include 'footer.php'; 

?>




