<?php

include("connection.php");

function delete($id)
{
  $del = "DELETE FROM users WHERE id=$id";

  $GLOBALS['conn']->query($del);

}
function edit($id)
{
   $select = "SELECT id,firstname,lastname,email FROM users where id=$id ";
   $res= $GLOBALS['conn']->query($select);
   $GLOBALS['edit']=$res->fetch_assoc();
   $GLOBALS['edit_id']=$GLOBALS['edit']['id'];
   $GLOBALS['edit_name']=$GLOBALS['edit']['firstname'];
   $GLOBALS['edit_lname']=$GLOBALS['edit']['lastname'];
   $GLOBALS['edit_email']=$GLOBALS['edit']['email'];
   
}

if (isset($_GET['method'])) {
    if ($_GET['method'] == 'del') {
        delete($_GET['id']);
    } else
        edit($_GET['id']);
}

$sql = "SELECT id, firstname,lastname,email FROM users";
$insert;
$result = $conn->query($sql);

if (isset($_POST['submit'])) {

    if(isset($GLOBALS['edit']))
        $insert = "UPDATE users SET firstname='".$_POST['name']."', email ='".$_POST['email']."', lastname='".$_POST['lname']."' where id = ".$GLOBALS['edit_id'];
     else
        $insert = "INSERT INTO users(firstname,email,lastname) VALUES ('" . $_POST['name'] . "', '" . $_POST['email']."','" . $_POST['lname']."')";
    if ($conn->query($insert) === TRUE) {
        $msg = "new user Added Succesfully";
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Admin</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

                <div class="card">
                    <form method="post">
                        <div class="card-header">
                            <strong>USERS</strong> Add
                        </div>

                        <div class="card-body card-block">

                            <div class="form-group" method="post">
                                <div class="row">
                                    <div class="col-md-6"><label for="nf-name" class=" form-control-label">First Name</label>
                                <input type="text" id="nf-name" name="name" value="<?php  echo (isset( $GLOBALS['edit']))?  $GLOBALS['edit_name'] : '' ; ?>" placeholder="Enter first Name.." class="form-control">
                                <span class="help-block">Please enter your Name</span></div>
                                    <div class="col-md-6"> <label for="nf-name" class=" form-control-label">Last Name</label>
                                <input type="text" id="nf-name" name="lname" value="<?php  echo (isset( $GLOBALS['edit']))?  $GLOBALS['edit_lname'] : '' ; ?>" placeholder="Enter last Name.." class="form-control">
                                <span class="help-block">Please enter your Name</span></div>
                                </div>
                                
                               
                            </div>
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">Email</label>
                                <input type="email" id="nf-email" name="email"value="<?php  echo (isset( $GLOBALS['edit']))?  $GLOBALS['edit_email'] : '' ; ?>" placeholder="Enter Email.." class="form-control">
                                <span class="help-block">Please enter your email</span>
                            </div>
                            <!-- <div class="form-group">
                                <label for="nf-password" class=" form-control-label">Password</label>
                                <input type="password" id="nf-password" name="password" value="<?php // echo (isset( $GLOBALS['edit']))?  $GLOBALS['edit_password'] : '' ; ?>" placeholder="Enter Password.." class="form-control">
                                <span class="help-block">Please enter your password</span>
                            </div> -->

                        </div>
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <!-- <button  type="reset" name="edit_bt" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Edit
                            </button> -->
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-1"> </div>
            <div class="col-lg-10">
                <!-- USER DATA-->
                <div class="user-data m-b-30">
                    <h3 class="title-3 m-b-30">
                        <i class="zmdi zmdi-account-calendar"></i>User data
                    </h3>

                    <div class="table-responsive table-data">
                        <table class="table">
                            <thead class="card-header">
                                <tr>

                                    <td>ID</td>
                                    <td>E-mail</td>
                                    <td>Full-Name</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <?php

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) : ?>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6><?php echo $row['id']; ?></h6>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6><?php echo $row['email']; ?></h6>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6><?php echo $row['firstname']." - ".$row['lastname']; ?></h6>

                                                </div>
                                            </td>
                                           
                                             
                                                <td>
                                        <div class="table-data-feature">
                                           
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                               <a href='users.php?method=edit&&id=<?php echo  $row['id']  ?>'> <i class="zmdi zmdi-edit"></i></a>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <a href='users.php?method=del&&id=<?php echo  $row['id']  ?>'><i class="zmdi zmdi-delete"></i></a>
                                            </button>
                                           
                                        </div>
                                    </td>
                                            
                                </tr>
                        <?php
                                        endwhile;
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                        ?>





                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- END USER DATA-->
            </div>
        </div>
    </div>

</body>

</html>