<?php
require 'config/db.php';
//create Query
$query = 'SELECT * FROM music_list';

//get results
$result = mysqli_query($conn,$query);

//fetch data
$music = mysqli_fetch_all($result,MYSQLI_ASSOC);
// var_dump($music);
//close connection
mysqli_close($conn);
?>
<?php
include 'inc/header.php';
?>
    

    <div class="container">
        <?php foreach($music as $key):?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $key['Artist']?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $key['Title'];?></h6>
                <small class="card-text">Rating: <?php echo $key['Rating'];?>/5</small>
                <br>
                <a href="<?php echo $key['Video_link'];?>" class="card-link">Play</a>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</body>
</html>