<?php
include './conn.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>File download System</title>
    </head>
    <body>
        <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
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
                        <a href='index.php' class="navbar-brand"> File Sharing System</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li><a href="index.php">Home</a></li>
                            <li><a href="upload.php">Upload</span></a></li>
                            <li class="active"><a href="download.php">Download</a></li>

                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <div class="container">
            <div class="row vertical-offset-100">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Welcome to  File Sharing System</h3>
                        </div>

                        <div class="panel-body">
                             file sharing system is used for sharing files from one PC to another using internet.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row vertical-offset-100">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Click On File Name To Download</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>
                                            Date
                                        </th>
                                        <th>
                                            File Name
                                        </th>
                                        <th>
                                            Download
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "select * from files order by `date_time` desc limit 50";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $name_file = str_replace("uploads/", "", $row['file_name']);
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['date_time']; ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo $row['file_name']; ?>" download="fileshare-<?php echo substr($name_file,0,30); ?>"><?php echo substr($name_file,0,50); ?></a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo $row['file_name']; ?>" download="fileshare-<?php echo $name_file; ?>"><button class="btn btn-success"><span class="glyphicon glyphicon-download"></span>&nbsp; Download</button></a>
                                                </td>
                                            </tr>
                                        <br/>
                                        <small></small>

                                        <?php
                                    }
                                } else {
                                    echo 'no files till now';
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
    </body>
</html>
