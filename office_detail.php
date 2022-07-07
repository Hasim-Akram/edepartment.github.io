<?php


  

    include 'menu.php';

    include 'functions.php';

    $obj =new edep;


?>


        <section class="section dashboard">
           <div class="row">
                    
               <div class="offset-md-3 col-md-8 align-items-center">
                  
              
                <div class="card-body table-responsive">
                  

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-shop"></i>
                    </div>
                    <div>
                      <h2>4 OFFICES</h2>
                       <hr>
                      <table class="table table-bordered table-striped">
                        <tr>
                          <th>Office Name</th>
                          <th>Address</th>
                          <th>Action </th>
                        </tr>
                      <?php 

                        $totaloffice = $obj -> officeview();

                        while($dddd=$totaloffice -> fetch_assoc()):

    

    
                      ?>
                      <tr>
                        <td><h5><a href="dep_detail.php"><?php echo $dddd['officename']; ?></a></h5></td>
                        <td><h5><a href="dep_detail.php"><?php echo $dddd['officeaddress']; ?></a></h5></td>
                        <td><button class="btn btn-outline-warning"><a href="office_edit.php?id=<?php echo $dddd['id']; ?> "?>EDIT</a></button>
                        <button id="deletedata" class="btn btn-outline-danger"><a href="delete_office.php?id=<?php echo $dddd['id']; ?> "?>DELETE</a></button></td>
                      </tr>
                     
                      
                      
                    


                      <?php

                        endwhile;
                      ?>
                    </table>
                      <hr>
                
                    </div>
              </div>
            </div><!-- End Sales Card -->

          </div>
        </div>

    </section>

    <script>
      

    $(document).ready(function(){
      $("button#deletedata").click(function(){

        confirm("Are you sure to delete ?");
        
      });

    });
    </script>










<?php

    include 'footer.php';

  ?>
