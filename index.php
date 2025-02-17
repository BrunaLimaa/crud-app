<?php 
include "header.php"; 
include "connect.php";
?>
                

<div class="box">
    <h2 class="table-title">STUDENTS</h2> 
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ADD Student</button>
</div>


            <table class="table table-hover table-bordered table-striped"> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>  
                </thead>      
            <tbody>
                   <?php

                    $query = "SELECT * FROM students";
                    $result = mysqli_query($connection, $query);
                    if (mysqli_num_rows($result) > 0)  {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['id']; ?> </td>
                                    <td><?php echo $row['name']; ?> </td>
                                    <td><?php echo $row['email']; ?> </td>
                                    <td><?php echo $row['password']; ?> </td>
                                </tr>

                            <?php
                        }

                    } else {
                        echo "No records found";
                    }         
                   ?>
                </tbody>
            </table>

            

            <!-- Modal -->  
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
              