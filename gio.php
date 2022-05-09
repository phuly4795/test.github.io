<?php
    include 'conn.php';
?>
<?php
    if(isset($_POST['chuyen'])){
        $id = $_POST['id'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $sql_gio = "INSERT INTO gio (iduser,email,username,pass) values ('$id' ,'$email','$username','$pass') ";
        $insert_row = mysqli_query($mysqli, $sql_gio);

        if(isset($_GET['xoa'])){
            $id = $_GET['xoa']; 
            $sql_xoa = mysqli_query($mysqli,"DELETE FROM gio where id ='$id'");
        }
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sql_xuat = mysqli_query($mysqli,"SELECT * FROM gio  order by id");
        
        while($row_lay = mysqli_fetch_array($sql_xuat)){
            
    ?>
    <h2>Dữ liệu  </h2>
    <h2>ID: <?=$row_lay['iduser']?></h2>
    <h2>Email <?=$row_lay['email']?></h2>
    <h2>Username <?=$row_lay['username']?></h2>
    <h2>Password <?=$row_lay['pass']?></h2>
        <a href="?xoa=<?php echo $row_lay['id'] ?>">Xóa</a> 
    <?php
        }
    ?>
    <a href="./index.php">về</a>
</body>
</html>