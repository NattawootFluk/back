<?php

include 'condb.php';

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

                <div class="card">
                        <div class="card-body">
                            <h4 class="card-title h1 text-center">Edit Page</h4>
                            <p class="card-text fs-3 text-start">Edit Attraction</p>

                                            <!-- Form Data  -->

                            <form action="update.php" method="post">

                                         <!-- Province -->
                            
                                         <div class="p-1 mb-3">
                                    <label for="province" class="form-label fs-5">Province :</label>
                                        <select class="form-select" name="province" id="province">
                                            <option selected>-- Please select --</option>

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
                                        <option selected>-- Please select --</option>

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
                                  <input type="text" class="form-control" name='attraction_name'>
                                </div>

                                          <!-- Attraction Description -->

                                <div class="p-1 mb-3">
                                  <label class="form-lable fs-5">Description :</label>
                                  <textarea class="form-control" name='description' rows="3"></textarea>
                                </div>

                                            <!-- ImageURL -->

                                <div class="p-1 mb-3">
                                  <label class="form-lable fs-5">Image URL :</label>
                                  <input type="text" class="form-control" name='imgurl'>
                                </div>
                                <div class="p-1 mb-3 text-center">
                                    <button type="submit" class="btn btn-warning mb-3" name='submit'>Update</button>
                                    <a href="del.php" class="btn btn-danger mb-3">Back</a>
                                    <a href="index.php" class="btn btn-secondary mb-3">Back</a>
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