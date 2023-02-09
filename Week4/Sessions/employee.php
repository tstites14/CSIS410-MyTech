<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>Arrays Menu</title>

        <link rel="stylesheet" type="text/css" href="css/employee.css">
        <link rel="stylesheet" type="text/css" href="../../footer.css">

        <?php include "variables.php"?>
    </head>
    <body>
        <!--Prevents any HTML from showing unless "auth" is set-->
        <?php 
            function updateEmployee(Employee $employee) {
                $employee->set_name($_POST["name"]);
                $employee->set_job($_POST["title"]);
                $employee->set_department($_POST["department"]);
                $employee->set_degree($_POST["degree"]);
                $employee->set_email($_POST["email"]);
                $employee->set_interests($_POST["interests"]);
            }

            session_start();
            if (isset($_SESSION["auth"])) { 
        ?>

        <div class='header'>
            <h1>MyTech Co. Ltd.</h1>
            <h2>Employee Directory</h2>
        </div>
        <div class='content'>
            <?php
                $employee;

                foreach ($employeeArray as $emp) {
                    if ($_POST["id"] == $emp->get_id()) {
                        $employee = $emp;
                        break;
                    }
                }

                updateEmployee($employee);
            ?>

            <div class='employeeInfo'>
                <img src='<?php echo $employee->get_photo(); ?>' alt="<?php echo $employee->get_name(); ?>">
                <h2>
                    <?php echo $employee->get_name(); ?>
                </h2>
                <h3>
                    <?php echo $employee->get_job(); ?>
                </h3>
                <h5><?php echo nl2br($employee->get_department() . " department\n"); ?></h5>
                <h5><?php echo nl2br($employee->get_degree() . "\n"); ?></h5>
                <h5><?php echo nl2br("Interests: " . $employee->get_interests() . "\n"); ?></h5>
                <h5><?php echo nl2br($employee->get_email() . "\n"); ?></h5>

                <br>
                <a href="menu.php">Search another employee</a>
                <a href="../../index.php">Back to main menu</a>
            </div>
        </div>

        <?php
            include "../../footer.php";
            footer('', __FILE__);
        ?>

        <!--If "auth" is not set, show alert box and redirect back to login page-->
        <?php
            } else {
                echo "<script type='text/javascript'>";
                echo "alert('You are not authorized to view this content.');";
                echo 'window.location.href="login.php";';
                echo "</script>";
            }
        ?>
    </body>
</html>