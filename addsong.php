<?php
require 'config/db.php';
include 'inc/header.php';
if(isset($_POST['submit'])){
    $title  =   $_POST['Title'];
    $hotel =   $_POST['hotel'];
    $video_link =   $_POST['Video_link'];
    $rating =   $_POST['Rating'];

    //create query 
    $query_insert   =   "INSERT INTO music_list(Title, hotel, Video_link, Rating) VALUES('$title','$hotel','$video_link','$rating')";

    if(mysqli_query($conn,$query_insert)){
        header('Location: ' . 'index.php');
    }else{
        echo 'Error';
    }
}
?>
<div class="container">
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="hotel" placeholder="hotel" required>
    <input type="text" name="Title" placeholder="Title" required>
    <input type="text" name="Video_link" placeholder="Video URL" required>
    <input type="number" name="Rating" placeholder="Rating" min="0" max="5" required>
    <button type="submit" name="submit">Book a Hotel</button>

</form>
</div>