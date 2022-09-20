<?php
include 'condb.php';
$id = $_GET['id'];
$sql = "SELECT * FROM attraction a INNER JOIN attraction_type t ON a.AttrationTypeID = t.t_ID INNER JOIN province p ON a.ProvinceID = p.p_ID INNER JOIN region r ON p.RegionID = r.r_ID WHERE a.a_id = $id";
$result = $conn->query($sql);
$row = $result->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="main.css" rel="stylesheet">
    <title>หน้าหลัก</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 p-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title h1 text-center">Info Data</h1>
                        <div class=" text-center">
                            <img src="<?=$row['ImageURL']?>">
                        </div>
                        <div class="text-start d-flex">
                            <p class='fs-6 col-1 mt-3'>Name : </p><p class='fs-6 col-11 mt-3'><?=$row['a_Name']?></p>
                        </div>
                        <div class="text-start d-flex">
                            <p class='fs-6 col-1 mt-3'>Description : </p><p class='fs-6 col-11 mt-3'><?=$row['Description']?></p>
                        </div>
                        <div class="text-start d-flex">
                            <p class='fs-6 col-1 mt-3'>Type : </p><p class='fs-6 col-11 mt-3'><?=$row['t_Name']?></p>
                        </div>
                        <div class="text-start d-flex">
                            <p class='fs-6 col-1 mt-3'>Province : </p><p class='fs-6 col-11 mt-3'><?=$row['p_Name']?></p>
                        </div>
                        <div class="p-1 mb-3 text-center">
                            <a href="edit.php" class="btn btn-warning mb-2">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>