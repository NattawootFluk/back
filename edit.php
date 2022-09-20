<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

include 'condb.php';

if(isset($_GET['id'])){
  $id = $_GET['id'];
}

        // Update Attraction

  if (isset($_POST['submit'])){

      $id = $_POST['id'];

      $province = $_POST['province'];
      $attraction_type = $_POST['attraction_type'];
      $attraction_name = $_POST['attraction_name'];
      $description = $_POST['description'];
      $imgurl = $_POST['imgurl'];

        // เวลาปัจจุบัน
      $timestamp = date('Y-m-d H:i:s');

      $sql = "UPDATE attraction SET  ProvinceID = '$province',
                                        AttrationTypeID = '$attraction_type',
                                        ImageURL = '$imgurl',
                                        a_Name = '$attraction_name',
                                        Description = '$description',
                                        Modified = '$timestamp' WHERE a_ID = '$id'";
      
      if($conn->query($sql)) {
        echo "<script>
              $(document).ready(function(){
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'แก้ไขข้อมูลสำเร็จ',
                  showConfirmButton: false,
                  timer: 1500
                });
              });
            </script>";
            header("refresh:2; url=index.php");
      }

  }

      // Delete Attraction 
          
      if(isset($_POST['delete'])){

        $id = $_POST['id'];
        
        $sql = "DELETE FROM attraction WHERE a_ID = '$id'";
        if($conn->query($sql)) {
          echo "<script>
                $(document).ready(function(){
                  Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'ลบข้อมูลสำเร็จ',
                    showConfirmButton: false,
                    timer: 1500
                  });
                });
              </script>";
              header("refresh:2; url=index.php");
        }
    }

        // SELECT Attraction DATA

        $sql = "SELECT * FROM attraction a INNER JOIN province p ON a.ProvinceID = p.p_ID
                                           INNER JOIN attraction_type t ON a.AttrationTypeID = t.t_ID WHERE a_id = $id";
        $result = $conn->query($sql);
        $rows = $result->fetch_assoc();


?>
<!doctype html>
<html lang="en">

<head>
  <title>แก้ไขข้อมูลสถานที่ท่องเที่ยว</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 p-4">

                <div class="card border-warning">
                        <div class="card-body">
                            <h4 class="card-title h1 text-center ">Edit Page</h4>
                            <p class="card-text fs-3 text-start">Edit Attraction</p>

                                         <!-- Form action  -->

                            <form action="edit.php" method="post">

                                         <!-- Province -->
                            
                                <div class="p-1 mb-3">
                                    <label for="province" class="form-label fs-5">Province :</label>
                                        <select class="form-select" name="province" id="province">
                                            <option value="<?=$rows['p_ID']?>"><?=$rows['p_Name']?></option>
                                            <option value=""></option>

                                          <!-- query -->
                                                
                                              <?php
                                                  $sql = "SELECT * FROM province";
                                                  $result = $conn->query($sql);
                                                      while($row = $result->fetch_assoc()){
                                              ?>
                                                      <option value="<?=$row['p_ID']?>"><?=$row['p_Name']?></option>
                                              <?php
                                                      }
                                              ?>
                                    
                                        </select>
                                </div>

                                          <!-- Attraction Type -->

                                <div class="p-1 mb-3">
                                    <label for="province" class="form-label fs-5">Type :</label>
                                    <select class="form-select" name="attraction_type" id="province">
                                    <option value="<?=$rows['t_ID']?>"><?=$rows['t_Name']?></option>
                                    <option value=""></option>

                                          <!-- query -->
                                                
                                              <?php
                                                  $sql = "SELECT * FROM attraction_type";
                                                  $result = $conn->query($sql);
                                                      while($row = $result->fetch_assoc()){
                                              ?>
                                                      <option value="<?=$row['t_ID']?>"><?=$row['t_Name']?></option>
                                              <?php
                                                      }
                                              ?>
                                    </select>
                                </div>

                                          <!-- Attraction Name -->

                                <div class="p-1 mb-3">
                                  <label class="form-lable fs-5">Name :</label>
                                  <input type="text" class="form-control" name='attraction_name' value="<?=$rows['a_Name']?>">
                                </div>

                                          <!-- Attraction Description -->

                                <div class="p-1 mb-3">
                                  <label class="form-lable fs-5">Description :</label>
                                  <textarea class="form-control" name='description' rows="3"><?=$rows['Description']?></textarea>
                                </div>

                                            <!-- ImageURL -->

                                <div class="p-1 mb-3">
                                  <label class="form-lable fs-5">Image URL :</label>
                                  <input type="text" class="form-control" name='imgurl' value="<?=$rows['ImageURL']?>">
                                </div>

                                             <!-- Button -->
                                <input type="hidden" value="<?=$rows['a_ID']?>" name="id">
                                <div class="p-1 mb-3 text-center">
                                    <button type="submit" name="submit" class="btn btn-warning mb-3 btn-lg">Update</button>
                                    <button type="submit" name="delete" class="btn btn-danger mb-3 btn-lg" onclick="return confirm('Are you sure to Delete this place?')">Delete</button>
                                    <a href="index.php" class="btn btn-secondary mb-3 btn-lg">Back</a>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>