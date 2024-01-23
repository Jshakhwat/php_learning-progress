<?php
include "connection.php";
$sql = "SELECT * FROM form";
$result = $conn->query($sql);

$arr = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .button-column button {
            margin: 2px;
        }
    </style>
</head>
<body>

    <h2>User Table</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arr as $data) { ?>
                <tr>
                    <td><?php echo $data['id'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['user_name'] ?></td>
                    <td><?php echo $data['pass'] ?></td>
                    <td class="button-column">
                       <a href="http://localhost/php/crud_operation/edit.php?id=<?=$data['id']?>"><button>Edit</button></a> 
                        <a href="delete.php"><button>Delete</button></a>
                        <button>Create</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
