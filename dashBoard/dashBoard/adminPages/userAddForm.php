<form method="post" action="functions/addUser.php" class="my-2 p-3 border border-left-primary">
    <div class="form-group">

        <label for="exampleInputEmail1">username</label>
        <input type="text" name="username" value="" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">password</label>
        <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Edit password">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1">
        <div class="alert alert-danger" id="checkEmail" role="alert" style='display:none'>
            Please Enter Another Email!
        </div>
    </div>


    <br>

    <!-- <div class="form-group">
        <label for="exampleFormControlSelect1">Privliges</label>
        <select name="priv" class="form-control" id="exampleFormControlSelect1">
            <option value="0">Admin</option>
            <option value="1">User</option>

        </select>
    </div> -->

    <button type="submit" class="btn btn-primary">Submit</button>
</form>