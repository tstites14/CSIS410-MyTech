<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>Arrays Menu</title>

        <link rel="stylesheet" type="text/css" href="../../footer.css">

        <?php include "variables.php"?>
    </head>
    <body>
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

                function updateEmployee(Employee $employee) {
                    $employee->set_name($_POST["name"]);
                    $employee->set_job($_POST["title"]);
                    $employee->set_department($_POST["department"]);
                    $employee->set_degree($_POST["degree"]);
                    $employee->set_email($_POST["email"]);
                    $employee->set_interests($_POST["interests"]);
                }
            ?>

            <div class='body'>
                <img src='<?php echo $employee->get_photo(); ?>' alt="Eric Powers">
                <h5>
                    <?php echo $employee->get_name(); ?>
                    <?php echo $employee->get_job(); ?>
                    <?php echo $employee->get_department(); ?>
                    <?php echo $employee->get_degree(); ?>
                    <?php echo $employee->get_email(); ?>
                    <?php echo $employee->get_interests(); ?>
                </h5>
            </div>
        </div>

        <?php
            include "../../footer.php";
            footer('', __FILE__);
        ?>
    </body>
</html>