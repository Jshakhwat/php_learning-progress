<?php
// if($_GET['id']){

//     include 'connection.php';
//     $catch = $_GET['id'];
//     $sql = "SELECT*FROM form WHERE id = $catch";
//     $result = mysqli_query($conn,$sql);
    
//     $fetch = $result->fetch_assoc();
//     // echo $fetch['user_name'];
// }
include 'connection.php';
$catch = $_GET['id'];

if($catch){
    $sql = "SELECT*FROM form WHERE id = $catch";
    $query = mysqli_query($conn, $sql);
    $fetch = $query -> fetch_assoc();
    // echo '<pre>';
    // print_r ($fetch);
    // echo $fetch['user_name'];

}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Registration Form</title>

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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Optional: Style for better visibility of focused input fields */
        input:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
    </style>
</head>
<body>
  

    <form action="update.php" method="post">
        <input type="hidden" name="user_id" value = "<?php echo $fetch['id']?>">
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username" value="<?php echo $fetch['user_name']?>">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $fetch['email']?>">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php echo $fetch['pass']?>">

        <button>update</button>
    </form>

</body>
</html>




