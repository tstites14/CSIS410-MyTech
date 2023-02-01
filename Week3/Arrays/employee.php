<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>Arrays Menu</title>

        <link rel="stylesheet" type="text/css" href="../../footer.css">

        <?php include "variables.php"?>
    </head>
    <body>
        <div class='content'>
            <?php
                $employee = new Employee($_POST["id"], $_POST["name"], $_POST["title"], $_POST["department"], $_POST["degree"], $_POST["email"], $_POST["interests"], "");

                echo $employee->get_id();
                echo $employee->get_name();
                echo $employee->get_job();
                echo $employee->get_degree();
                echo $employee->get_department();
                echo $employee->get_interests();
                echo $employee->get_email();
            ?>
        </div>

        <?php
            include "../../footer.php";
            footer('', __FILE__);
        ?>
    </body>
</html>