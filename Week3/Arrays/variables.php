<?php
    class Employee {
        protected int $id;
        protected string $name;
        protected string $jobTitle;
        protected string $department;
        protected string $degree;
        protected string $email;
        protected string $interests;
        protected string $photo;

        function __construct(int $id, string $name, string $jobTitle, string $department, string $degree, string $email, string $interests, string $photo) {
            $this->id = $id;
            $this->name = $name;
            $this->jobTitle = $jobTitle;
            $this->department = $department;
            $this->degree = $degree;
            $this->email = $email;
            $this->interests = $interests;
            $this->photo = $photo;
        }

        function set_id(int $id) {
            $this->id = $id;
        }
        function get_id() {
            return $this->id;
        }

        function set_name(string $name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }

        function set_job(string $jobTitle) {
            $this->jobTitle = $jobTitle;
        }
        function get_job() {
            return $this->jobTitle;
        }

        function set_department(string $department) {
            $this->department = $department;
        }
        function get_department() {
            return $this->department;
        }

        function set_degree(string $degree) {
            $this->degree = $degree;
        }
        function get_degree() {
            return $this->degree;
        }

        function set_email(string $email) {
            $this->email = $email;
        }
        function get_email() {
            return $this->email;
        }

        function set_interests(string $interests) {
            $this->interests = $interests;
        }
        function get_interests() {
            return $this->interests;
        }

        function set_photo(string $photo) {
            $this->photo = $photo;
        }
        function get_photo() {
            return $this->photo;
        }
    }

    $ericPowers = new Employee(1, "Dr. Eric Powers", 'CEO', 'Executive', 'Ph.D. Business Administration and Management', 'epowers@mytech.com', 'Golfing', '../../Week1/Variables/img/EricPowers.jpg');
    $frederickNewman = new Employee(2, 'Frederick Newman', 'CIO', 'Executive', 'M.S. Information Technology', 'fnewman@mytech.com', 'Boating', '../../Week1/Variables/img/FrederickNewman.jpg');
    $michellePatton = new Employee(3, 'Michelle Patton', 'CFO', 'Executive', 'M.S. Accounting', 'mpatton@mytech.com', 'Movies', '../../Week1/Variables/img/MichellePatton.jpg');
    $hannahDelaney = new Employee(4, 'Hannah Delaney', 'Project Manager', 'Development', 'B.S. Computer Science', 'hdelaney@mytech.com', 'Woodworking', '../../Week1/Variables/img/HannahDelaney.jpg');
    $jamesWilliams = new Employee(5, 'James Williams', 'Senior Developer', 'Development', 'B.S. Computer Science', 'jwilliams@mytech.com', 'Open-source software', '../../Week1/Variables/img/JamesWilliams.jpg');
    $natalieHarvey = new Employee(6, 'Natalie Harvey', 'Developer', 'Development', 'B.S Information Technology', 'nharvey@mytech.com', 'Swimming', '../../Week1/Variables/img/NatalieHarvey.jpg');
    $johnEmerson = new Employee(7, 'John Emerson', 'Junior Developer', 'Development', 'B.S. Information Technology', 'jemerson@mytech.com', 'Hiking', '../../Week1/Variables/img/JohnEmerson.jpg');

    $employeeArray = array($ericPowers, $frederickNewman, $michellePatton, $hannahDelaney, $jamesWilliams, $natalieHarvey, $johnEmerson);
?>