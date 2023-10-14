<?php
require_once ('Connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF=8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>List of Users Table</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
        <h2 class="text-center">List of Users</h2>
        </div>
        <div class="card-body">
            <table class=" table table-bordered text-center">
            <tr>
                    <td>Last Name</td>
                    <td>First Name</td>
                    <td>Email Address</td>
            </tr>
            <tr>
            <?php
            $query = "SELECT * FROM users";
            $stmtinsert = $pdo->prepare($query);
            $stmtinsert->execute();

            $result = $stmtinsert->fetchAll();
            if ($result)
            {
            foreach($result as $row)
            {
            ?>
            <tr>
            <td><?= $row ['Last_Name'];?></td>
            <td><?= $row ['First_Name'];?></td>
            <td><?= $row ['Email_Address'];?></td>
            </tr>
            <?php
            }   
            }else{
            ?>
            <tr>
            <td colspan="3">No Record Found</td>
            </tr>
            <?php
            }
            ?>
            </tr>
            </table>
        </div>
    </div>
 </div>
<a href="UserRegistration.php" class="btn btn-default">Back</a>
</body>
</html>
