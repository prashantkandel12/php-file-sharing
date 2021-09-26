<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> File Upload System</title>
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
                        <a href='index.php' class="navbar-brand"> File Sharing System</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                            <li><a href="upload.php">Upload</span></a></li>
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
                             file sharing system is used for sharing files from one PC to another using internet.
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
                            <h3 class="panel-title">Choose What You Want To Do?</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-6"><a href="upload.php"><button class="btn btn-success form-control"><span class="glyphicon glyphicon-upload"></span>&nbsp; Upload Files</button></a></div>
                            <div class="col-md-6"><a href="download.php"><button class="btn btn-success form-control"><span class="glyphicon glyphicon-download"></span>&nbsp; Download Files</button></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
