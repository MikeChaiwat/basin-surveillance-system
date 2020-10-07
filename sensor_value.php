<?php
    include_once "connect.php";
    $sql = "SELECT * FROM basin_sensor ORDER BY senser_id DESC LIMIT 1";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    $humid = $row['humid_value'];
    $temp = $row['temp_value'];
    $rainfall = $row['rainfall_value'];
    $waterlevel = $row['waterlevel_value'];
    $turbidity = $row['turbidity_value'];
    $timesend = $row['sensor_timesend'];
?>

        <div class="row mb-3 ml-3">
         
            <div class="col-sm">
                <h2>Basin Surveillance System</h2>
            </div>
        </div>
        <div class="row ml-5">
            <div class="col-8 border border-dark rounded" >
                <h4 class="mt-2">เวลาที่ส่งค่า</h4>
                <div class=""><h2><?php echo $timesend; ?></h2></div>
            </div>
        </div>
        <div class="row ml-5 mt-5">
            <div class="col-4 border border-secondary rounded">
                <h4 class="mt-2">ค่าความชื้น</h4>
                <div class=""><?php include "humid-gauge.php"; ?></div>
            </div>
            <div class="col-4 ml-5 border border-secondary rounded">
                <h4 class="mt-2">ค่าอุณหภูมิ</h4>
                <div class=""><?php include "temp-gauge.php"; ?></div>
            </div>
        </div>
        <div class="row ml-5 mt-5">
            <div class="col-4 border border-secondary rounded">
                <h4 class="mt-2">ปริมาณน้ำฝนต่อชั่วโมง</h4>
                <div class=""><?php include "rainfall-gauge.php"; ?></div>
            </div>
            <div class="col-4 ml-5 border border-secondary rounded">
                <h4 class="mt-2">ระดับน้ำ</h4>
                <div class=""><?php include "waterlevel-gauge.php"; ?></div>
            </div>
        </div>
    
        <div class="row ml-5 mt-5 mb-5 justify-content-center">
            <div class="col-4 border border-secondary rounded">
                <h4 class="mt-2">ค่าความขุ่นของน้ำ</h4>
                <div class=""><?php include "turbidity-gauge.php"; ?></div>
            </div>
            <div class="col-4"></div>
        </div>
       
        
