<?php 

class Employee {
      
    private $name;
    private $salary;
        
    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getSalary(){
        return $this->salary;
    }

    public function getName(){
        return $this->name;
    }

    
}




class Manager extends Employee {
    private $department;
    


    public function __construct($name, $salary, $department){

        parent::__construct($name, $salary);
        $this->department = $department;
        
    }

    public function getDepartment(){
        return $this->department;
    }

    public function display(){
        echo $this->getName() . " " . $this->getSalary() . " " . $this->getDepartment();
    }


    

  

}


class Developer extends Employee {
   protected $programmingLanguage;

   public function __construct($name, $salary, $programmingLanguage){

    parent::__construct($name, $salary);
    $this->programmingLanguage = $programmingLanguage;
    
}
  
    
public function getProgrammingLanguage(){
    return $this->programmingLanguage;
}

public function display(){
    echo $this->getName() . " " . $this->getSalary() . " " . $this->getProgrammingLanguage();
}




}



?>



