<?php 

require 'includes/connection.php';
  $id = $_GET['id'];
  $select_user = "SELECT * FROM `admin` WHERE id = $id";
  $query = $conn -> query($select_user);
  $user = $query -> fetch_assoc();
//   var_dump($user);



?>
<form method="post" action="functions/editUser.php" class="my-2 p-3 border border-left-primary">
    <div class="form-group">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <label for="exampleInputEmail1">username</label>
        <input type="text" name="username" value="<?= $user['name'] ?>" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">password</label>
        <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Edit password">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" id="exampleInputEmail1">
    </div>



    <br>

    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>