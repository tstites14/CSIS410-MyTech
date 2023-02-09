<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>Arrays Menu</title>

        <link rel="stylesheet" type="text/css" href="css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">

        <?php include "variables.php"?>
    </head>
    <body>
        <!--Prevents any HTML from showing unless "auth" is set-->
        <?php 
            session_start();
            if (isset($_SESSION["auth"])) { 
        ?>

        <div class='content'>
            <div class='header'>
                <h1>Week 3: Arrays</h1>
                <h2>Liberty University Online CSIS 410: Web Enterprise Technologies</h2>
            </div>
            <div class='formData'>
                <form action="menu.php" method="post">
                    <select class='employees' name='empID' required>
                        <?php
                            echo '<option value=\'\'</option>';
                            foreach ($employeeArray as $employee) {
                                echo '<option value=\'' . $employee->get_id() . '\'>' . $employee->get_name() . '</option>';
                            }
                        ?>
                    </select>
                    <input class='button' type="submit">
                </form>

                <?php 
                    if (isset($_POST["empID"])) {
                        $employee;
                        $empID = $_POST["empID"];   

                        foreach ($employeeArray as $emp) {
                            if ($emp->get_id() == $empID) {
                                $employee = $emp;
                                break;
                            }
                        }
                    }
                ?>

                <form action="employee.php" method="post">
                    <br>
                    <br>
                    ID: <input class='textbox' type="text" name="id" value="<?php 
                        if (isset($_POST["empID"])) {
                            echo $employee->get_id();
                        }
                    ?>" readonly>
                    <br>
                    Name: <input class='textbox' type="text" name="name" value="<?php 
                        if (isset($_POST["empID"])) {
                            echo $employee->get_name();
                        }
                    ?>" required>
                    <br>
                    Job Title: <input class='textbox' type="text" name="title" value="<?php 
                        if (isset($_POST["empID"])) {
                            echo $employee->get_job();
                        }
                    ?>" required>
                    <br>
                    Degree: <input class='textbox' type="text" name="degree" value="<?php 
                        if (isset($_POST["empID"])) {
                            echo $employee->get_degree();
                        }
                    ?>" required>
                    <br>
                    Department: <input class='textbox' type="text" name="department" value="<?php 
                        if (isset($_POST["empID"])) {
                            echo $employee->get_department();
                        }
                    ?>" required>
                    <br>
                    Interests: <input class='textbox' type="text" name="interests" value="<?php 
                        if (isset($_POST["empID"])) {
                            echo $employee->get_interests();
                        }
                    ?>" required>
                    <br>
                    Email: <input class='textbox' type="text" name="email" value="<?php 
                        if (isset($_POST["empID"])) {
                            echo $employee->get_email();
                        }
                    ?>" required>
                    <br>
                    <br>
                    <input class='button' type="submit">
                </form>
                <a href="../../index.php">Back</a>
            </div>
        </div>

        <?php
            include "../../footer.php";
            footer('https://validator.w3.org/nu/?doc=https%3A%2F%2Ftstites.com%2FWeek4%2FSessions%2Fmenu.php', __FILE__);
        ?>

        <!--If "auth" is not set, show alert box and redirect back to login page-->
        <?php
            } else {
                echo "<script>";
                echo "alert('You are not authorized to view this content.');";
                echo 'window.location.href="login.php";';
                echo "</script>";
            }
        ?>
    </body>
</html>