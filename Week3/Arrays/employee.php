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

            <div class='employeeInfo'>
                <img src='<?php echo $employee->get_photo(); ?>' alt="<?php echo $employee->get_name(); ?>">
                <h2>
                    <?php echo $employee->get_name() . "\n"; ?>
                </h2>
                <h3>
                    <?php echo $employee->get_job() . "\n"; ?>
                </h3>
                <h5>
                    <?php echo $employee->get_department() . "\n"; ?>
                    <?php echo $employee->get_degree() . "\n"; ?>
                    <?php echo $employee->get_email() . "\n"; ?>
                    <?php echo $employee->get_interests() . "\n"; ?>
                </h5>
            </div>
        </div>

        <?php
            include "../../footer.php";
            footer('', __FILE__);
        ?>
    </body>
</html>