<?php


class LoginModel
{
   
    public function __construct(Database $db)
    {
        $this->db = $db;
    }
  

    public function read()
    { 

       $sql= 'select Id,concat(FirstName,LastName) as fullName,OrgId,(select Name from Division where Id=employeemaster.Division) as DivName,(select Name from Designation where Id=employeemaster.Designation) as DesignName ,(select Name from Location where Id=employeemaster.Location) as LocationName from employeemaster';
       $query = $this->db->query($sql);
       $query->execute();
     
       $arr=$query->fetchAll();
       return $arr;       

      
   
	}

    

}
