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
        <?php include('connection.php'); ?>

        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">

                    <div class="row">
                        <?php
                        if (isset($_POST['submit'])) {
                            $arr['info'] = ['name'=>"'{$_POST['q_statment']}',",
                                            'exam_id'=>"{$_POST['cat']},",
                                            'answer_one'=>"'{$_POST['choice2']}',",
                                            'answer_two'=>"'{$_POST['choice3']}',",
                                            'answer_three'=>"'{$_POST['choice4']}',",
                                            'answer_correct'=>"'{$_POST['correct_answer']}'",
                                                        ];
                                                        $vv="";
                                                        foreach ($arr['info'] as $key => $value) {
                                                            $vv.="$value";
                                                        }
                                                      
                             echo "Question Added Successfully";
                             $insert = "INSERT INTO questions(name,exam_id,answer_one,answer_two,answer_three,answer_correct,admin_id)
                                                    values ( $vv,1 )    ";
                                                    $conn->query($insert);
                                                    echo $insert. $conn->error;
                        }



                        $select  = "SELECT  * FROM  exam";
                        $res = $conn->query($select);
           
                        ?>
                        <div class="col-md-12">
                            <div class="card">
                                <form method="POST" enctype="multipart/form-data">

                                    <div class="card-header">
                                        <strong>Questions</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">Exam Category</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <select id="select" name="cat" class="form-control">
                                                    <?php while ($row = $res->fetch_assoc()) : ?>
                                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Question Statment</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="" name="q_statment" placeholder="What is your Question..." class="form-control">
                                                <small class="form-text text-muted">Ex..How old Are you?</small>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Correct Answer</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="" name="correct_answer" placeholder="Enter the choice" class="form-control">
                                                
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Choice #2</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="" name="choice2" placeholder="Enter the choice." class="form-control">
                                                
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Choice #3</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="" name="choice3" placeholder="Enter the choice" class="form-control">
                                                
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Choice #4</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" value="" name="choice4" placeholder="Enter the choice" class="form-control">
               
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Add Questoin
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <?php include('footer.php'); ?>

    </body>

    </html>