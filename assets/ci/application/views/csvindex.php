<!DOCTYPE HTML>

<html>

    <head>

        <meta charset="utf-8">

        <title>MSF Admin Panel</title>

        <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />

        <link href="<?php echo base_url(); ?>assets/css/styles.css" type="text/css" rel="stylesheet" />



        <script src="<?php echo base_url(); ?>assets/js/jquery.js" type="text/javascript"></script>

        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

    </head>



    <body>



        <div class="navbar navbar-inverse navbar-fixed-top">

            <div class="navbar-inner">

                <div class="container">

                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </a>

                    <a class="brand" href="#">MSF Admin Panel</a>

                    <div class="nav-collapse collapse">

                        <ul class="nav">

                            <li class="active"><a href="<?php echo base_url(); ?>"><i class="icon-home"></i>Home</a></li>


                        </ul>

                    </div><!--/.nav-collapse -->

                </div>

            </div>

        </div>



        <div class="container" style="margin-top:50px">    

             <br>

             

             <?php if (isset($error)): ?>

                <div class="alert alert-error"><?php echo $error; ?></div>

            <?php endif; ?>

            <?php if ($this->session->flashdata('success') == TRUE): ?>

                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>

            <?php endif; ?>

             

            <h2>MSF Report Upload</h2>

                <form method="post" action="<?php echo base_url() ?>csv/importcsv" enctype="multipart/form-data">

                    <input type="file" name="userfile" ><br><br>

                    <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary">

                </form>

            

            <br><br>

      





            <hr>

            <footer>

                <p>&copy;Vikas</p>

            </footer>



        </div>







    </body>

</html>

