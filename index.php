
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    
    <title>Basin Surveillance System</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif;">
    <!-- Navigation Bar -->
    <?php include_once "navbar.php" ?>
    <!-- Container -->
    <div class="container" style="margin: 20px 0px 0px 200px;">
         <?php include "sensor_value.php"; ?>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
</body>
</html>