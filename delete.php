<?php 
	require_once './connection.php';



    if(isset($_POST['Delete'])){
        
        // $check= $_POST['check'];
// $a=implode(",",$check);
// echo $a;

$checkarr= $_POST['check'];
foreach($checkarr as $id){
    mysqli_query($conn,"DELETE FROM products WHERE id=".$id);

}
header("Location: index.php");

    }
    mysqli_close($conn);
?>
