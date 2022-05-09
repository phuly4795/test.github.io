<?php
    include 'conn.php';
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
  <form action="" method="post">
    <label for="">Email: </label><br>
        <input type="email" name="email"><br>
        <label for="">Username</label><br>
        <input type="text" name="user"><br>
        <label for="">Password</label><br>
        <input type="password" name="pass"><br><br>
        <input type="submit" value="Xác nhận" name="submit">
  </form>
    <?php
        $sql_xuat = mysqli_query($mysqli,"SELECT * FROM user  order by id");
        while($row_xuat = mysqli_fetch_array($sql_xuat)){
    ?>
            <h2><?=$row_xuat['id']?></h2>
            <h2><?=$row_xuat['email']?></h2>
            <h2><?=$row_xuat['username']?></h2>
            <h2><?=$row_xuat['pass']?></h2>
            <form action="gio.php" method="post">
                <fieldset>
                    <input type="hidden" name="id"  value="<?php echo $row_xuat['id']  ?>" />			
                    <input type="hidden" name="email"  value="<?php echo $row_xuat['email']  ?>" />						
                    <input type="hidden" name="username"  value="<?php echo $row_xuat['username']  ?>" />						
                    <input type="hidden" name="pass"  value="<?php echo $row_xuat['pass']  ?>" />						
                 			              
                    <input type="submit" name="chuyen" value="Chuyền" class="button"              />
                </fieldset>
            </form>
    <?php
        }
    ?>
</body>
</html>