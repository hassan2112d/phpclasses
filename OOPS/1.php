What is mean by OOPs?
// OOPS stand for Object oriented Programming

<?php 

class student{

   public $name;
   
   public $registration_no;

 
   function set_name($name,$registration_no){

       $this->name = $name;
       $this->registration_no = $registration_no;
       

   }
    function get_name(){

        echo "<br>".$this->name;
        echo "Register no :".$this->registration_no;
    }
   
}

//Hassan first student
$student = new student;

$student->set_name("Hassan",2395);

$student->get_name();

//JAMES 2nd student

$student1 = new student;
$student1->set_name("James",1983);
$student1->get_name();



//Employee : 
// deprt , id , name
?>