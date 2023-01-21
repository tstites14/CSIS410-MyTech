<?php
    class Employee {
        protected string $name;
        protected string $jobTitle;
        protected string $department;
        protected string $degree;
        protected string $email;
        protected string $interests;
        protected string $photo;

        function __construct(string $name, string $jobTitle, string $department, string $degree, string $email, string $interests, string $photo) {
            $this->name = $name;
            $this->jobTitle = $jobTitle;
            $this->department = $department;
            $this->degree = $degree;
            $this->email = $email;
            $this->interests = $interests;
            $this->photo = $photo;
        }

        function get_name() {
            return $this->name;
        }

        function get_job() {
            return $this->jobTitle;
        }

        function get_department() {
            return $this->department;
        }

        function get_degree() {
            return $this->degree;
        }

        function get_email() {
            return $this->email;
        }

        function get_interests() {
            return $this->interests;
        }

        function get_photo() {
            return $this->photo;
        }
    }

    $ericPowers = new Employee("Dr. Eric Powers", 'CEO', 'Executive', 'Ph.D. Business Administration and Management', 'epowers@mytech.com', 'Golfing', 'EricPowers.jpg');
    $frederickNewman = new Employee('Frederick Newman', 'CIO', 'Executive', 'M.S. Information Technology', 'fnewman@mytech.com', 'Boating', 'FrederickNewman.jpg');
    $michellePatton = new Employee('Michelle Patton', 'CFO', 'Executive', 'M.S. Accounting', 'mpatton@mytech.com', 'Movies', 'MichellePatton.jpg');
    $hannahDelaney = new Employee('Hannah Delaney', 'Project Manager', 'Development', 'B.S. Computer Science', 'hdelaney@mytech.com', 'Woodworking', 'HannahDelaney.jpg');
    $jamesWilliams = new Employee('James Williams', 'Senior Developer', 'Development', 'B.S. Computer Science', 'jwilliams@mytech.com', 'Open-source software', 'JamesWilliams.jpg');
    $natalieHarvey = new Employee('Natalie Harvey', 'Developer', 'Development', 'B.S Information Technology', 'nharvey@mytech.com', 'Swimming', 'NatalieHarvey.jpg');
    $johnEmerson = new Employee('John Emerson', 'Junior Developer', 'Development', 'B.S. Information Technology', 'jemerson@mytech.com', 'Hiking', 'JohnEmerson.jpg');
?>