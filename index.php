<?php
include 'condb.php';
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
    <div class="container-lg p-3">
        <div class="h1 d-flex justify-content-center p-3">Data Dictionary</div>
        <div class="row justify-content-end">
            <a href="addpage.php" class="col-3 btn btn-lg btn-primary m-3 text-center">Add</a>
        </div>
        <div class="row p-3 d-flex justify-content-between data-hide1 align-items-center">
            <p class="h3 col-6">ภาคกลาง</p>
            <button onclick="showdata1()" class="btn col-4 btn-mg btn-info" id='show'>Show</button>
        </div>
        <div class="row p-3 data-show1">
            <?php
                $sql1 = "SELECT * FROM attraction a INNER JOIN attraction_type t ON a.AttrationTypeID = t.t_ID INNER JOIN province p ON a.ProvinceID = p.p_ID INNER JOIN region r ON p.RegionID = r.r_ID WHERE r.r_ID = 4";
                $result1 = $conn->query($sql1);
                if($result1->num_rows > 0){

                while ($row1 = $result1->fetch_array()) {
                
            ?>
                <a href="info.php?id=<?=$row1['a_ID']?>" class="col-lg-4 col-md-6 col-sm-12">
                <div class=" text-center p-2">
                        <img src="<?=$row1['ImageURL']?>">
                        <p class='h4 m-3'><?=$row1['a_Name']?></p>
                </div>
                </a>
            <?php
                        }
                    }else{
                        echo 'ไม่มีข้อมูล';
                };
            ?>
        </div>
        <div class="row p-3 d-flex justify-content-between data-hide2 align-items-center">
            <p class="h3 col-6">ภาคเหนือ</p>
            <button onclick="showdata2()" class="btn col-4 btn-mg btn-info" id='show2'>Show</button>
        </div>
        <div class="row p-3 data-show2">
            <?php
                $sql2 = "SELECT * FROM attraction a INNER JOIN attraction_type t ON a.AttrationTypeID = t.t_ID INNER JOIN province p ON a.ProvinceID = p.p_ID INNER JOIN region r ON p.RegionID = r.r_ID WHERE r.r_ID = 1";
                $result2 = $conn->query($sql2);
                if($result2->num_rows > 0){

                while ($row2 = $result2->fetch_array()) {
                
            ?>
                <a href="info.php?id=<?=$row2['a_ID']?>" class="col-lg-4 col-md-6 col-sm-12">
                <div class=" text-center p-2">
                        <img src="<?=$row2['ImageURL']?>">
                        <p class='h4 m-3'><?=$row2['a_Name']?></p>
                </div>
                </a>
            <?php
                }
            }else{
                echo 'ไม่มีข้อมูล';
            };
            ?>
        </div>
        <div class="row p-3 d-flex justify-content-between align-items-center">
            <p class="h3 col-6">ภาคตะวันออกเฉียงเหนือ</p>
            <button onclick="showdata3()" class="btn col-4 btn-mg btn-info" id='show3'>Show</button>
        </div>
        <div class="row p-3 data-show3 ">
            <?php
                $sql3 = "SELECT * FROM attraction a INNER JOIN attraction_type t ON a.AttrationTypeID = t.t_ID INNER JOIN province p ON a.ProvinceID = p.p_ID INNER JOIN region r ON p.RegionID = r.r_ID WHERE r.r_ID = 2";
                $result3 = $conn->query($sql3);
                if($result3->num_rows > 0){

                while ($row3 = $result3->fetch_array()) {
                
            ?>
                <a href="info.php?id=<?=$row3['a_ID']?>" class="col-lg-4 col-md-6 col-sm-12">
                <div class=" text-center p-2">
                        <img src="<?=$row3['ImageURL']?>">
                        <p class='h4 m-3'><?=$row3['a_Name']?></p>
                </div>
                </a>
            <?php
                }
            }else{
                echo 'ไม่มีข้อมูล';
            };
            ?>
        </div>
        <div class="row p-3 d-flex justify-content-between data-hide4 align-items-center">
            <p class="h3 col-6">ภาคตะวันตก</p>
            <button onclick="showdata4()" class="btn col-4 btn-mg btn-info" id='show4'>Show</button>
        </div>
        <div class="row p-3 data-show4">
            <?php
                $sql4 = "SELECT * FROM attraction a INNER JOIN attraction_type t ON a.AttrationTypeID = t.t_ID INNER JOIN province p ON a.ProvinceID = p.p_ID INNER JOIN region r ON p.RegionID = r.r_ID WHERE r.r_ID = 3";
                $result4 = $conn->query($sql4);
                if($result4->num_rows > 0){

                while ($row4 = $result4->fetch_array()) {
                
            ?>
                <a href="info.php?id=<?=$row4['a_ID']?>" class="col-lg-4 col-md-6 col-sm-12">
                <div class=" text-center p-2">
                        <img src="<?=$row4['ImageURL']?>">
                        <p class='h4 m-3'><?=$row4['a_Name']?></p>
                </div>
                </a>
            <?php
                }
            }else{
                echo 'ไม่มีข้อมูล';
            };
            ?>
        </div>
        <div class="row p-3 d-flex justify-content-between align-items-center">
            <p class="h3 col-6">ภาคตะวันออก</p>
            <button onclick="showdata5()" class="btn col-4 btn-mg btn-info" id='show5'>Show</button>
        </div>
        <div class="row p-3 data-show5">
            <?php
                $sql5 = "SELECT * FROM attraction a INNER JOIN attraction_type t ON a.AttrationTypeID = t.t_ID INNER JOIN province p ON a.ProvinceID = p.p_ID INNER JOIN region r ON p.RegionID = r.r_ID WHERE r.r_ID = 5";
                $result5 = $conn->query($sql5);
                if($result5->num_rows > 0){
                while ($row5 = $result5->fetch_array()) {
                
            ?>
                <a href="info.php?id=<?=$row5['a_ID']?>" class="col-lg-4 col-md-6 col-sm-12">
                <div class=" text-center p-2">
                        <img src="<?=$row5['ImageURL']?>">
                        <p class='h4 m-3'><?=$row5['a_Name']?></p>
                </div>
                </a>
            <?php
                }
            }else{
                echo '<p class="text-center">ไม่มีข้อมูล</p>';
            };
            ?>
        </div>
        <div class="row p-3 d-flex justify-content-between align-items-center">
            <p class="h3 col-6">ภาคใต้</p>
            <button onclick="showdata6()" class="btn col-4 btn-mg btn-info" id='show6'>Show</button>
        </div>
        <div class="row p-3 data-show6">
            <?php
                $sql6 = "SELECT * FROM attraction a INNER JOIN attraction_type t ON a.AttrationTypeID = t.t_ID INNER JOIN province p ON a.ProvinceID = p.p_ID INNER JOIN region r ON p.RegionID = r.r_ID WHERE r.r_ID = 6";
                $result6 = $conn->query($sql6);
                if($result6->num_rows > 0){
                while ($row6 = $result6->fetch_array()) {
                
            ?>
                <a href="info.php?id=<?=$row6['a_ID']?>" class="col-lg-4 col-md-6 col-sm-12">
                <div class=" text-center p-2">
                        <img src="<?=$row6['ImageURL']?>">
                        <p class='h4 m-3'><?=$row6['a_Name']?></p>
                </div>
                </a>
            <?php
                }
            }else{
                echo 'ไม่มีข้อมูล';
            };
            ?>
        </div>        
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>