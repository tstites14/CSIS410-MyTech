<?php
    class Employee {
        protected string $name;
        protected string $jobTitle;
        protected string $department;
        protected string $degree;
        protected string $photo;


        function __construct($name, $jobTitle, $department, $degree, $photo) {
            $this->$name = $name;
            $this->$jobTitle = $jobTitle;
            $this->$department = $department;
            $this->$degree = $degree;
            $this->$photo = $photo;
        }
    }

    $ericPowers = new Employee('Dr. Eric Powers', 'CEO', 'Executive', 'Ph.D. Business Administration and Management', 'EricPowers.jpg');
    $frederickNewman = new Employee('Frederick Newman', 'CIO', 'Executive', 'M.S. Information Technology', 'FrederickNewman.jpg');
    $michellePatton = new Employee('Michelle Patton', 'CFO', 'Executive', 'M.S. Accounting', 'MichellePatton.jpg');
    $hannahDelaney = new Employee('Hannah Delaney', 'Project Manager', 'Development', 'B.S. Computer Science', 'HannahDelaney.jpg');
    $jamesWilliams = new Employee('James Williams', 'Senior Developer', 'Development', 'B.S. Computer Science', 'JamesWilliams.jpg');
    $natalieHarvey = new Employee('Natalie Harvey', 'Developer', 'Development', 'B.S Information Technology', 'NatalieHarvey.jpg');
    $johnEmerson = new Employee('John Emerson', 'Junior Developer', 'Development', 'B.S. Information Technology', 'JohnEmerson.jpg');
?>