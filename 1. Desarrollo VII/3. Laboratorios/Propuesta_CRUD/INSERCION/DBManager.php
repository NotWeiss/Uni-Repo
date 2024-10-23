<?php 
class DBManager{
  var $conect;
     function DBManager(){
	 }
	 
	 function conectar() {
	     if(!($con=@mysqli_connect("localhost","root","")))
		 {
		     echo"Error al conectar a la base de datos";	
			 exit();
	      }
		  if (!@mysqli_select_db($con, "empleados")) {
		   echo "error al seleccionar la base de datos";  
		   exit();
		  }
	       $this->conect=$con;
		   return true;	
	 }
}

?>
