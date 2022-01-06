<?php
include("connection.php");
if (isset($_POST['submit'])) {
    $exam_name = $_POST['name'];
    $exam_desc = $_POST['desc'];
    $exam_category = $_POST['cat'];
    $insert = "INSERT into exam(name,disc,cat_id) values ('$exam_name','$exam_desc','$exam_category')";
    if (isset($_FILES['myimage'])) {
        $fileName = $_FILES['myimage']['name'];
        $fileTmpName = $_FILES['myimage']['tmp_name'];
        $fileSize = $_FILES['myimage']['size'];
        $fileError = $_FILES['myimage']['error'];
        $fileType = $_FILES['myimage']['type'];
        echo "$fileName  $fileTmpName  $fileSize ";
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        echo "<br>" . $fileActualExt;
        $allowed = ['jpg', 'jpeg', 'png'];
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                //    if ($fileSize > 1000000) {
                $new_image_name = uniqid('IMG-', true) . '.' . $fileActualExt;
                $fileDes = 'Uploads/' . $new_image_name;
                echo "<br>" . $new_image_name;
                move_uploaded_file($fileTmpName, $fileDes);

                echo "<br>Success<br>";
                $insert = "INSERT into exam(name,disc,cat_id,image) values ('$exam_name','$exam_desc','$exam_category','$new_image_name')";
            }
            //    }else echo "An Error";
        } else echo "You cannot upload files of this type";
    }
    $conn->query($insert);
}

if (isset($_GET['method'])) {
    if ($_GET['method'] == 'edit') {
        $edit_id = $_GET['id'];
        $select_edit = "SELECT * FROM exam where id=$edit_id ";

        $res_edit = $conn->query($select_edit);
        $current_edit = $res_edit->fetch_assoc();

        $edit_name = $current_edit['name'];
        $edit_desc =  $current_edit['disc'];
        $edit_cat =  $current_edit['cat_id'];
    } elseif ($_GET['method'] == 'delete') {
        $edit_id = $_GET['id'];
        $del = "DELETE FROM exam WHERE id=$edit_id";

        $conn->query($del);
    }
}
if (isset($_POST['edit'])) {
    if (isset($_FILES['myimage'])) {
        $fileName = $_FILES['myimage']['name'];
        $fileTmpName = $_FILES['myimage']['tmp_name'];
        $fileSize = $_FILES['myimage']['size'];
        $fileError = $_FILES['myimage']['error'];
        $fileType = $_FILES['myimage']['type'];
        echo "$fileName  $fileTmpName  $fileSize ";
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        echo "<br>" . $fileActualExt;
        $allowed = ['jpg', 'jpeg', 'png'];
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                //    if ($fileSize > 1000000) {
                $new_image_name = uniqid('IMG-', true) . '.' . $fileActualExt;
                $fileDes = 'Uploads/' . $new_image_name;
                echo "<br>" . $new_image_name;
                move_uploaded_file($fileTmpName, $fileDes);

                echo "<br>Success<br>";
            }
            //    }else echo "An Error";
        } else echo "You cannot upload files of this type";
    }
    $exam_name = $_POST['name'];
    $exam_desc = $_POST['desc'];
    $exam_category = $_POST['cat'];

    $update = "UPDATE exam SET name='$exam_name',disc='$exam_desc',cat_id=$exam_category,image='$new_image_name' WHERE id=$edit_id";

    $conn->query($update);
    header("Location:Exam.php");
}

$select = "SELECT exam.id as examId,exam.image,exam.disc,exam.cat_id,exam.name as examname,category.id,category.name FROM exam,category where exam.cat_id = category.id";
$select_category = "SELECT id,name FROM category";

$res_category =  $conn->query($select_category);

if ($conn->query($select)) {
    // echo "<h1>Success</h1>";
} else die($conn->error);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body>
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="index3.php">
                        <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                    </a>
                </div>
                <div class="header__navbar">
                    <ul class="list-unstyled">
                        <li>
                            <a href="admin.php">
                                <i class="fas fa-shopping-basket"></i>
                                <span class="bot-line"></span>Admins</a>
                        </li>
                        <li>
                            <a href="users.php">
                                <i class="fas fa-trophy"></i>
                                <span class="bot-line"></span>Users</a>
                        </li>

                        <li class="has-sub">
                            <a href="exam.php">
                                <i class="fas fa-desktop"></i>
                                <span class="bot-line"></span>Exam</a>
                            <ul class="header3-sub-list list-unstyled">
                                <li>
                                    <a href="Question.php">Question</a>
                                </li>
                                <li>
                                    <a href="Categories.php">Categories</a>
                                </li>
                                <li>
                                    <a href="Results.php">Results</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="header__tool">

                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">john doe</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">john doe</a>
                                        </h5>
                                        <span class="email">johndoe@example.com</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="#">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form method="POST" enctype="multipart/form-data">

                                <div class="card-header">
                                    <strong>Add Exam</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Exam name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" value="<?php echo @$edit_name ?>" name="name" placeholder="Enter Exam name. ." class="form-control">
                                            <small class="form-text text-muted">Ex..Mathmatics</small>
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Exam description</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="desc" id="textarea-input" rows="9" placeholder="Short prief of exam content" class="form-control"><?php echo @$edit_desc ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Exam Category</label>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <select id="select" name="cat" class="form-control">
                                                <?php while ($row_category = $res_category->fetch_assoc()) : ?>
                                                    <option value="<?php echo $row_category['id']; ?>"><?php echo $row_category['name']; ?></option>
                                                <?php endwhile; ?>

                                            </select>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="file-input" class=" form-control-label">File input</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" name="myimage" class="form-control-file">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Add Exam
                                    </button>
                                    <button type="submit" style="display:<?php echo (isset($_GET['method']) && $_GET['method'] == 'edit') ?: "none"; ?>" name="edit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> EDIT
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Exam Table</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="rs-select2--light rs-select2--md">
                                    <select class="js-select2" name="property">
                                        <option selected="selected">All Properties</option>
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="rs-select2--light rs-select2--sm">
                                    <select class="js-select2" name="time">
                                        <option selected="selected">Today</option>
                                        <option value="">3 Days</option>
                                        <option value="">1 Week</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <button class="au-btn-filter">
                                    <i class="zmdi zmdi-filter-list"></i>filters</button>
                            </div>
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>add item</button>
                                <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                    <select class="js-select2" name="type">
                                        <option selected="selected">Export</option>
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>img</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>description</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $res = $conn->query($select);

                                    while ($row = $res->fetch_assoc()) : ?>
                                        <tr class="tr-shadow">
                                            <td><img src="Uploads/<?php echo $row['image'] ?>" height="30px" width="30px" alt="1"></td>
                                            <td><?php echo $row['examId'] ?></td>
                                            <td>
                                                <span class="block-email"><?php echo $row['examname'] ?></span>
                                            </td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td class="desc"><?php echo $row['disc'] ?></td>

                                            <td>
                                                <div class="table-data-feature">

                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <a href='exam.php?method=edit&&id=<?php echo $row['examId'] ?>'> <i class="zmdi zmdi-edit"></i></a>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <a href='exam.php?method=delete&&id=<?php echo $row['examId'] ?>'> <i class="zmdi zmdi-delete"></i></a>
                                                    </button>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>