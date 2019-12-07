<?php include("includes/init.php"); ?>
<?php
if(!$session->is_signed_in()){
 redirect("login.php");
}
?>

<?php
if(empty($_GET['id'])){
   redirect("../users.php");
}

$users = User::find_by_id($_GET['id']);



if($users){
    $users->delete_photo();
    redirect("users.php");
    $session->message("The User has been deleted");
    
}else{
    redirect("users.php");
}



?>