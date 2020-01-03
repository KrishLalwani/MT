<?php    
?>

<html>
<head>
    <title>Machine Tracking Staging</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="style5.css">

    <style>
        .input-group-addon {
        min-width:150px;
        text-align:left;
    }
    </style>
</head>
<body>

    <div class="wrapper" id="add-nav">
    <?php include 'navbar_index.php';?>
    <h1>Machine Tracking Staging</h1>
    </div>
    <?php
        if ( isset($_SESSION['error']) )
        {
            echo('<p style="color: red;">'.$_SESSION['error']."</p>\n");
            unset($_SESSION['error']);
        }
        if ( isset($_SESSION['success']))
        {
            echo('<p style="color: green;">'.$_SESSION['success']."</p>\n");
            unset($_SESSION['success']);
        }
    ?>
    <div class="row">

        <p class ="col-xs-12"style="font-size:22px">Log In</p><br>

            <form method="POST" action="index.php" class="col-xs-5">

                <p>Role : &nbsp&nbsp&nbsp
                <input type="radio" name="role" value="0"> Admin &nbsp&nbsp&nbsp
                <input type="radio" name="role" value="1" checked> Faculty &nbsp&nbsp&nbsp        
                <input type="radio" name="role" value="2"> Technician       
                </p>

                <div class="input-group">
                <span class="input-group-addon">ID</span>
                <input type="text" name="id" id="id" class="form-control" required placeholder="Enter your id">
                <br>
            </div>
            <br>
                <div class="input-group">
                <span class="input-group-addon">Password</span>
                <input type="password" name="pass" id="pass" class="form-control" required="" placeholder="Enter Password">
                <br>
            </div>
            <br>
            <input type="submit" value="Log In" class="btn btn-info">
            </form>
        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    </script>
</body>
</html>
