
<?php 
require_once("../database.php");

?>
<?php 
if(isset($_POST['login'])){
	$id_per=$_POST['Correo'];
	$cla=$_POST['Password'];
	$query=mysqli_query($conexion,"SELECT * FROM user WHERE correo='".$id_per."' and password='".$cla."'");
	$n=mysqli_num_rows($query);
	if($n==1){
		
		echo "<script language='JavaScript'>";
	
		echo "location='../index.php'";
		echo "</script>"; 
		}else if($n==0){
			echo "<script>alert('Datos Incorrectos')</script>";
 
			  
			}
	
	}
?>
