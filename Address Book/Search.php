<?php include 'SearchConnection.php' ?>

<!DOCTYPE html>
<html>

<head>
    <title>Home Page...</title>
    <link rel="icon" href="Data/Icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="Data/SearchStyle.css">
</head>

<body>
    <div class="BodyX">
        <div class="Body">
            <div class="Header">
                <div class="HeaderX">
                    <a class="Menu" href="Default.php">Home</a>
                    <a class="Menu" href="Login.php">Login</a>
                    <a class="Menu" href="Register.php">Register</a>
                </div>
            </div>
            <div class="Middle">
                <div class="MSearchBar">
                    <form name="search_form" method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" enctype="multipart/form-data">
                        <input class="user_ID" id="user_ID" name="user_ID" type="text" placeholder="Search by User ID">
                        <button type="submit" name="user_submit">Search</button>
                    </form>
                </div>

                <div class="MSResult">
                    <div class="Info">
                        <h4>ID</h4>
                        <?php foreach($result1 as $row){ ?>
                        <p>
                            <?php echo $row->user_ID; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>Name</h4>
                        <?php foreach($result2 as $row){ ?>
                        <p>
                            <?php echo $row->user_name; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>B_Day</h4>
                        <?php foreach($result3 as $row){ ?>
                        <p>
                            <?php echo $row->user_birthday_day; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>B_Month</h4>
                        <?php foreach($result4 as $row){ ?>
                        <p>
                            <?php echo $row->user_birthday_month; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>B_Year</h4>
                        <?php foreach($result5 as $row){ ?>
                        <p>
                            <?php echo $row->user_birthday_year; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>Blood Group</h4>
                        <?php foreach($result6 as $row){ ?>
                        <p>
                            <?php echo $row->user_blood_group; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>Phone No.</h4>
                        <?php foreach($result7 as $row){ ?>
                        <p>
                            <?php echo $row->user_phone_no; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>E-mail</h4>
                        <?php foreach($result8 as $row){ ?>
                        <p>
                            <?php echo $row->user_email; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>City</h4>
                        <?php foreach($result9 as $row){ ?>
                        <p>
                            <?php echo $row->user_city; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>District</h4>
                        <?php foreach($result10 as $row){ ?>
                        <p>
                            <?php echo $row->user_district; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>Region</h4>
                        <?php foreach($result11 as $row){ ?>
                        <p>
                            <?php echo $row->user_region; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>Post Code</h4>
                        <?php foreach($result12 as $row){ ?>
                        <p>
                            <?php echo $row->user_post_code; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="Info">
                        <h4>Country</h4>
                        <?php foreach($result13 as $row){ ?>
                        <p>
                            <?php echo $row->user_country; ?>
                        </p>
                        <?php } ?>
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
        </div>
    </div>
</body>

</html>
