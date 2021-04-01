<!-- <a class="btn btn-primary" href="?action=add">Add User</a>
		<br>
		<br> -->
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
            <a class="btn btn-primary" href="?action=add">Add User</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0" style='text-align:center'>
                    <thead class="text-light bg-gradient-primary">
                        <tr>
                        <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>password</th>
                            <th>Privileges</th>
                            <th>Contorls</th>

                        </tr>
                    </thead>
                    <tfoot class="text-light bg-gradient-secondary">
                        <tr>
                        <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>password</th>
                            <th>Privileges</th>
                            <th>Contorls</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                            require 'includes/connection.php';
                            $selq1="SELECT admin.name,admin.email,admin.password,admin.id,priv.name as value,priv.priv as userPriv FROM `admin`,`priv` where admin.privId=priv.id";
                            $query=$conn->query($selq1);
                            // var_dump($query);
                            $id = 0 ;
                           foreach($query as $user){
                              echo" 
                              <tr>
                              <td>".++$id."</td>
                              <td>".$user['name']."</td>
                              <td>".$user['email']."</td>
                              <td>".$user['password']."</td>
                              <td>".$user['value']."</td>
                              <td >
						<a class='btn bg-gradient-primary text-light btn-circle' href='?action=edit&id=".$user["id"]."'>Edit</a>";
                        if ($user['userPriv']<$_SESSION['priv']) {
						echo "<a class='btn btn-danger btn-circle ml-1' href='functions/deleteUser.php?id=".$user['id']."'><i class='fas fa-trash'></i></a>";
                        }
                        echo "</td>
                            
                              </tr>
                               ";
                                
                            }
                           

                          ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>