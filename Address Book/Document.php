<?php
    include("DocumentConnection.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Contained Doc.</title>
        <link rel="icon" href="Data/Icon.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="Data/DocumentStyle.css">
    </head>

    <body>
        <div class="Header" id="Header">
            <div class="HeaderX">
                <a class="Menu" href="Default.php">Home</a>
                <a class="Menu" href="Login.php">Login</a>
                <a class="Menu" href="Register.php">Register</a>
                <a class="Menu" href="Search.php?id=<?php echo $row->user_ID; ?>">Search</a>
            </div>
        </div>
        <div class="Middle" id="Middle">
            <div class="MDocuments" id="MDocuments">
                <div class="MDTable">
                    <div class="MDTCol1">
                        <strong>User ID</strong><br>
                        <?php foreach($result2 as $row){ ?>
                        <?php if(empty($row->user_ID)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_ID ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol2">
                        <strong>User Name</strong><br>
                        <?php foreach($result3 as $row){ ?>
                        <?php if(empty($row->user_name)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_name ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol3">
                        <strong>User E-mail</strong><br>
                        <?php foreach($result2 as $row){ ?>
                        <?php if(empty($row->user_email)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_email ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol4">
                        <strong>User City</strong><br>
                        <?php foreach($result1 as $row){ ?>
                        <?php if(empty($row->user_city)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_city ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol5">
                        <strong>User Phone no.</strong><br>
                        <?php foreach($result2 as $row){ ?>
                        <?php if(empty($row->user_phone_no)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_phone_no ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol6">
                        <strong>Action</strong><br>
                        <?php foreach($result2 as $row){ ?>
                        <?php if(empty($row->user_ID)){ ?>
                        <br>
                        <?php } ?>
                        <a class="DeleteAction" href="Delete.php?id=<?php echo $row->user_ID; ?>">Delete</a>
                        <a class="DeleteAction" href="Update.php?id=<?php echo $row->user_ID; ?>">Update</a><br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="Footer">
            <div class="FLeft">
                <h3>Contact Me</h3>
                <a href="http://github.com/itzShovon"><img src="Data/github.svg"></a>
                <a href="mailto:zahidul.cse14@gmail.com?Subject=Hello%20again" target="_top"><img src="Data/Gmail_Icon.png"></a>
            </div>
            <div class="FRight">
                <p>Copyright by &copy; Shovon</p>
            </div>
        </div>
    </body>

    </html>
