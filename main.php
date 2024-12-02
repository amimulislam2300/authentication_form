<?php 
session_start();
if(isset($_POST['btnSubmit'])){
    $id = $_POST['trainID'];
    $name = $_POST['trainName'];

    if($id == "100" && $name == "Amir"){
        $_SESSION['name'] = $name;
        header("location: demo.php");
    } else {
        $msg = "Error: Invalid TrainID or TrainName";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-container label {
            font-weight: bold;
            color: #333;
        }
        .form-container input[type="number"], 
        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
        .form-container a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007BFF;
            text-decoration: none;
        }
        .form-container a:hover {
            text-decoration: underline;
        }
        .error-msg {
            color: red;
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Login to Train System</h2>

        <?php 
        if (isset($msg)) {
            echo "<p class='error-msg'>$msg</p>";
        }
        ?>

        <form action="#" method="post">
            <div>
                <label for="trainID">TrainID</label>
                <input type="number" name="trainID" id="trainID" required><br>
            </div>
            <div>
                <label for="trainName">TrainName</label>
                <input type="text" name="trainName" id="trainName" required><br>
            </div>
            <input type="submit" value="Submit" name="btnSubmit">
        </form>

        <a href="logout.php">Logout</a>
    </div>

</body>
</html>
