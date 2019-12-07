<?php include("includes/init.php"); ?>
<?php
if(!$session->is_signed_in()){
 redirect("login.php");
}
?>

<?php
if(empty($_GET['id'])){
   redirect("../comments.php");
}

$comments = Comment::find_by_id($_GET['id']);



if($comments){
    $comments->delete();
    $session->message("The comment has been deleted");
    redirect("comment_photo.php?id={$comments->photo_id}");
}else{
    redirect("comment_photo.php?id={$comments->photo_id}");
}



?>