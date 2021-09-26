<?php
include './conn.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>File Upload System</title>
    </head>
    <body>
        <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <div >
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <img class="navbar-brand" src="img/logo.png" alt="logo" title="Genius"/>
                        <a href='index.php' class="navbar-brand">File Sharing System</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="upload.php">Upload</span></a></li>
                            <li><a href="download.php">Download</a></li>

                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <div class="container">
            <div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Welcome to  File Sharing System</h3>
                        </div>

                        <div class="panel-body">
                             file sharing system is used for sharing files from one PC to another through internet.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Upload File</h3>
                        </div>
                        <div class="panel-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <label class="custom-file">
                                    <input type="file" name="image" id="file" required="required" class="custom-file-input">
                                    <span class="custom-file-control"></span>
                                </label>
                                <input type="submit" class="btn btn-success" value="upload"/>
                            </form>
                            <?php
                            $i = 0;
                            if (isset($_FILES['image'])) {
                                $errors = array();
                                $file_name = 'uploads/' . $_FILES['image']['name'];
                                $file_size = $_FILES['image']['size'];
                                $file_tmp = $_FILES['image']['tmp_name'];
                                $file_type = $_FILES['image']['type'];
                                $tmp = explode('.', $file_name);
                                $file_ext = end($tmp);
                                if ($file_size > 609715290909) {
                                    $errors[] = 'File size must be less than 50 MB';
                                }

                                if (empty($errors) == true) {
                                    move_uploaded_file($file_tmp, $file_name);
                                } else {
                                    print_r($errors);
                                }
                                $a = date("Y-m-d H:i:s");
                                $sql = "INSERT INTO `files`( `file_name`, `date_time`) VALUES ('$file_name','$a')";
                                if (mysqli_query($conn, $sql)) {
                                    echo "<script>alert('New file uploaded successfully');</script>";
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }
                            }
                            ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Recent Uploads</h3>
                        </div>
                        <div class="panel-body">
                            <?php
                            $sql = "select * from files order by `date_time` desc limit 5";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $name_file = str_replace("uploads/", "", $row['file_name']);
                                    
                                    ?>
                                    <div>
                                        <div class="col-md-2"><span style="font-size: 30px;" class="glyphicon glyphicon-download"></span></div>
                                        <div class="col-md-9">
                                            <a href="<?php echo $row['file_name']; ?>" download="fileshare-<?php echo $name_file; ?>"><?php echo $name_file; ?></a><br/>
                                            <small><?php echo $row['date_time']; ?></small>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo 'no files till now';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</html>
