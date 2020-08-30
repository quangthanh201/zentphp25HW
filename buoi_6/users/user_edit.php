<?php
//var_dump($_GET);
include 'connect.php';
$id = $_GET['id'];
// Viết câu lệnh để thêm dữ liệu
$query = "SELECT * from users WHERE id = ". $id;

// Thực thi câu lệnh
$result = $conn->query($query);
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Update User</h3>
    <hr>
    <form action="user_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $user['id']?>">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $user['name'];?>">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="" name="email" value="<?php echo $user['email'];?>">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" id="" placeholder="" name="password" value="<?php echo $user['password'];?>">
        </div>
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="text" class="form-control" id="" placeholder="" name="avatar" value="<?php echo $user['avatar'];?>">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
</body>
</html>
