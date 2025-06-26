<?php
session_start();

// var_dump($_SESSION);


// if (isset($_SESSION["username"])) {
//     if ($_SESSION["admin"] != 1) {
//         header("Location: login.php?error=Unauthorized access");
//     }
// } else {
//     header("Location: login.php?error=Unauthorized access");
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>Admin Page</h1>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Created_at</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "MiniLoginSystem");

            $sql = "SELECT * FROM users";

            $response = mysqli_query($conn, $sql);

            if (mysqli_num_rows($response) > 0) {
                while ($row = mysqli_fetch_assoc($response)) {
                    echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[username]</td>
                            <td>$row[firstName]</td>
                            <td>$row[created_at]</td>
                        </tr>
                    ";
                }
            }

            ?>

        </tbody>
    </table>
</body>

</html>