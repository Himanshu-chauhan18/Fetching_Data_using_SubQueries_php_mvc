<?php
class Welcome extends Controller
{
   
    function __construct()
    {
        parent::__construct();
    }

   public function index()
    {  
			$this->view->render('login/show_page');	
    }

   
public function  read()
{
	$login_model = $this->loadModel('Login');
	$arr=$login_model->read(); 
	// echo "<pre>";print_r($arr);echo "</pre>";

         ?>
		<thead>
      <th>FullName</th>
      <th>Division Name</th>
      <th>Designation Name</th>
      <th>Location Name</th>
	  <thead>
		  <?php
foreach($arr as $row){
	?>
 <tr>
			<td><?php echo $row->fullName; ?></td>
			<td><?php echo $row->DivName; ?></td>
			<td><?php echo $row->DesignName; ?></td>
			<td><?php echo $row->LocationName; ?></td>	
			</tr>
			<?php
	}
	
	?>
  <?php

}
}