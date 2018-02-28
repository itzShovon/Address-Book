<?php
    include("RegistrationValidation.php");
?>


    <!DOCTYPE html>
    <html>

    <head>
        <title>Do Registeration</title>
        <link rel="icon" href="Data/Icon.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="Data/RegisterStyle.css">
        <script src="Data/Main.js"></script>
    </head>

    <body>
        <script src="Data/Main.js"></script>
        <form name="signup_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
            <div class="BodyX" id="BodyX">
                <div class="Body" id="Body">
                    <div class="BOption">
                        <a href="Default.php">Back</a>
                        <a href="Login.php">Login</a>
                        <a href="Register.php">Register</a>
                    </div>
                    <!--
                    <div class="Header">
                        <?php include 'Header.php';?>
                    </div>
    -->
                    <div class="Middle" id="Middle">
                        <div class="MTop" id="MTop">
                            <h3>User Registration Form</h3>
                        </div>
                        <div class="MBody" id="MBody">
                            <hr>
                            <form name="Register" target="Index.php" method="post">
                                <table>
                                    <tr>
                                        <th colspan="4">User Information</th>
                                    </tr>
                                    <tr>
                                        <td class="col1">1.</td>
                                        <td class="col2">First Name</td>
                                        <td class="col3"><input class="user_first_name" id="user_first_name" name="user_first_name" type="text" placeholder="First Name"></td>
                                        <td class="col4"></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Last Name</td>
                                        <td><input class="user_last_name" id="user_last_name" name="user_last_name" type="text" placeholder="Last Name"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>User Name</td>
                                        <td><input class="user_name" id="user_name" name="user_name" type="text" placeholder="User Name"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>User E-mail</td>
                                        <td><input class="user_email" id="user_email" name="user_email" type="email" placeholder="User E-mail"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>User ID</td>
                                        <td><input class="user_ID" id="user_ID" name="user_ID" type="text" placeholder="User ID"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>User Password</td>
                                        <td><input class="user_password" id="user_password" name="user_password" type="password" placeholder="User Password"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Conform Password</td>
                                        <td><input class="user_password_temp" id="user_password_temp" name="user_password_temp" type="password" placeholder="Conform Password"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>Gender</td>
                                        <td>
                                            <input list="user_gender" class="user_gender" placeholder="I am..." name="user_gender">
                                            <datalist id="user_gender">
                                                <option value="Male">
                                                <option value="Female">
                                                <option value="Other">
                                                <option value="Rather not say">
                                            </datalist>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>9.</td>
                                        <td>Region</td>
                                        <td>
                                            <input list="user_region" class="user_region" name="user_region" placeholder="Region">
                                            <datalist id="user_region">
                                                <option value="South West">
                                                <option value="North East">
                                                <option value="North Central">
                                                <option value="North West">
                                                <option value="South Central">
                                                <option value="South East">
                                                <option value="Eastern Hill">
                                                <option value="River & Estuary">
                                            </datalist>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>10.</td>
                                        <td>Blood Group</td>
                                        <td>
                                            <input list="user_blood_group" class="user_blood_group" name="user_blood_group" placeholder="Blood Group">
                                            <datalist id="user_blood_group">
                                                <option value="A+(ve)">
                                                <option value="B+(ve)">
                                                <option value="AB+(ve)">
                                                <option value="O+(ve)">
                                                <option value="A-(ve)">
                                                <option value="B-(ve)">
                                                <option value="AB-(ve)">
                                                <option value="O-(ve)">
                                            </datalist></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>11.</td>
                                        <td>Date of birth</td>
                                        <td>
                                            <select id="user_birthday_month" class="user_birthday_month" name="user_birthday_month">
                                                <option value="">Month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="Octobor">Octobor</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                            <input class="user_birthday_day" id="user_birthday_day" name="user_birthday_day" type="number" max="31" min="1" placeholder="Day">
                                            <input class="user_birthday_year" id="user_birthday_year" name="user_birthday_year" type="number" max="2018" min="1920" placeholder="Year">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>12.</td>
                                        <td>Phone Number</td>
                                        <td><input class="user_phone_no" id="user_phone_no" name="user_phone_no" type="number" placeholder="Phone Number"></td>
                                        <td></td>
                                    </tr>
                                    <!--
                                    <tr>
                                        <td>12.</td>
                                        <td>E-mail Address</td>
                                        <td><input class="user_email" id="user_email" name="user_email" type="email" placeholder="E-mail Address"></td>
                                        <td></td>
                                    </tr>
-->
                                </table>

                                <br>

                                <table>
                                    <tr>
                                        <th colspan="4">Address Information</th>
                                    </tr>
                                    <tr>
                                        <td class="col1">1.</td>
                                        <td class="col2">City</td>
                                        <td class="col3"><input type="text" id="user_city" class="user_city" name="user_city" placeholder="Village"></td>
                                        <td class="col4"></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Country Name</td>
                                        <td>
                                            <input list="user_country" class="user_country" name="user_country" placeholder="Country Name">
                                            <datalist id="user_country">
                                                <option value="Argentina">
                                                <option value="Australia">
                                                <option value="Austria">
                                                <option value="Bangladesh">
                                                <option value="Canada">
                                                <option value="China">
                                                <option value="Denmark">
                                                <option value="Egypt">
                                                <option value="France">
                                                <option value="Germany">
                                                <option value="Hong Kong">
                                                <option value="India">
                                                <option value="Japan">
                                                <option value="Korea">
                                            </datalist>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Division Name</td>
                                        <td>
                                            <input list="user_division" class="user_division" name="user_division" placeholder="Division Name">
                                            <datalist id="user_division">
                                                <option value="Barisal">
                                                <option value="Chittagong">
                                                <option value="Dhaka">
                                                <option value="Khulna">
                                                <option value="Mymensingh">
                                                <option value="Rajshahi">
                                                <option value="Rangpur">
                                                <option value="Sylet">
                                            </datalist>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>District Name</td>
                                        <td>
                                            <input list="user_district" name="user_district" class="user_district" placeholder="District Name">
                                            <datalist id="user_district">
                                                <option value="Barguna District">
                                                <option value="Jhalokati District">
                                                <option value="Chandpur District">
                                            </datalist>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <!--
                                    <tr>
                                        <td>5.</td>
                                        <td>City Name</td>
                                        <td>
                                            <input list="City" placeholder="City Name">
                                            <datalist>
                                                <option value="Bogra">
                                                <option value="Natore">
                                                <option value="Joypurhat">
                                            </datalist>
                                        </td>
                                        <td></td>
                                    </tr>
-->
                                    <!--
                                    <tr>
                                        <td class="col1">6.</td>
                                        <td class="col2">Police Station</td>
                                        <td class="col3"><input type="text" placeholder="Police Station"></td>
                                        <td class="col4"></td>
                                    </tr>
-->
                                    <!--
                                    <tr>
                                        <td class="col1">7.</td>
                                        <td class="col2">Post Office</td>
                                        <td class="col3"><input type="text" placeholder="Post Office"></td>
                                        <td class="col4"></td>
                                    </tr>
-->
                                    <tr>
                                        <td class="col1">5.</td>
                                        <td class="col2">Post Code</td>
                                        <td class="col3"><input class="user_post_code" id="user_post_code" name="user_post_code" type="number" placeholder="Post Code"></td>
                                        <td class="col4"></td>
                                    </tr>
                                </table>
                                <hr>
                                <div class="Button">
                                    <button type="submit" name="user_submit" onclick="return RegisterValidation();">Submit</button>
                                    <button type="reset">Reset</button>
                                    <button type="button">Forgot</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--
                    <div class="Footer">
                        <?php include 'Footer.php';?>
                    </div>
    -->
                </div>
            </div>
        </form>
    </body>

    </html>
