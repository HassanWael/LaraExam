<? php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-9 mx-auto ">
                        <div class="card">
                            <div class="card-header">
                                <b>Please Enter Exam Information</b>
                            </div>
                            <form method='get' action='question.php'>
                                <div class="col-md-8">

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Exam name</label>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                                            <small class="form-text text-muted">Try to Make Exam name short and clear</small>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Exam Desc</label>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <input type="text" id="text-input" name="text-input" placeholder="Enter Exam Description" class="form-control">

                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Choice #1</label>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <input type="text" id="text-input" name="text-input" placeholder="Wrong Answer" class="form-control">
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer">

                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add Questoin</button>

                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include('footer.php'); ?>
</body>

</html>