<?php
// Start the session
session_start();
?>



<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="css/main1.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
<!--Nav bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-light black-text">
  <a class="navbar-brand black-text" href="#">Asiphe Mazamisa Hotels</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link black-text" href="#">Hotels <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link black-text" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link black-text" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown black-text">
        <a class="nav-link dropdown-toggle black-text" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hotel Names
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item black-text" href="#">City Lodge</a>
          <a class="dropdown-item black-text" href="#">Town Lodge</a>
          <a class="dropdown-item black-text" href="#">Raddison</a>
          <a class="dropdown-item black-text" href="#">Holiday IN</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--big ground image-->
<div class="bg">
<h1>Book Hotel</h1>
<div class="price">
<p id="inn"></p>
<p id="rad"></p>
<p id="city"></p>
<p id="town"></p>
</div>
<div class="container">
  <h2>Horizontal form</h2>
  <!--Form-->
  <form class="form-horizontal" action="/index.php">
  <form class="form-group p-5 py-1"role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="form-group">
      <div class="col-sm-10">
      <label class="control-label col-sm-2"for="Firstname">Firstname</label>
       <input type="text" class="form-control" name="firstname" placeholder='First Name' required>
      </div>
    </div>

    <div class="form-group">
    <div class="col-sm-10">
      <label class="control-label col-sm-2"for="surname">Surname</label>
       <input type="text" class="form-control" name="surname" placeholder='Surname' required>
                
        
       <div class="form-group col-sm-10">
               <!-- the 4 different hotels  -->
               <label for="hotels">Select a hotel below :</label>
               <select class="form-control form-control-lg" name="hotelname" id="hotelName" required>
                   <option value=" ">  </option>
                   <option value="The Orleans - R700 per night">The Orleans - R700 per night</option>
                   <option value="Bellagio - R600 per night">Bellagio - R600 per night </option>
                   <option value="The Four Queens - R700 per night">The Four Queens - R700 per night</option>
                   <option value="The Cosmopolitan - R800 per night">The Cosmopolitan - R800 per night </option>
               </select>
           </div>
           <br>
           <!-- the date in and out booking of the hotel -->
           <div class="form-group col-lg-10">
               <label for="start">Start date :</label>
               <input type="date" class="form-control" name="indate" min="2018-01-01" max="2020-12-31" aria-label="Todo Date" aria-describedby="button-addon2">
               <label for="end">End date :</label>
               <input type="date" class="form-control" name="outdate" min="2018-01-01" max="2020-12-31" aria-label="Todo Date" aria-describedby="button-addon2">
            </div>
            <br>
          <!-- the submit button of the form -->
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
       </form>
       <br>  

<!--Images-->
<div class="container">
  
  <div class="row">
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="images/do.jpg" target="_blank">
          <img src="images/do.jpg" alt="hotel" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="thumbnail">
        <a href="images/hotesl.jpg" target="_blank">
          <img src="images/hotesl.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="images/im.jpg" target="_blank">
          <img src="images/im.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="images/imag.jpg" target="_blank">
          <img src="images/imag.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<!--FOOTER-->
<div class="footer">
  <p>Created by Asiphe Mazamisa</p>
</div>

<!--End of images-->
<?php
require_once "connect.php";
echo $conn->error;

$sql = "CREATE TABLE IF NOT EXISTS bookings (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   firstname VARCHAR(50),
   surname VARCHAR(50),
   hotelname VARCHAR(50),
   indate VARCHAR(30),
   outdate VARCHAR(30),
   booked INT(4))";


$conn ->query($sql);

if (isset($_GET['error']) && $_GET['error'] == 'timestamp') {

   ?>

<div class='panel panel-default'>
   <h1>
      You must select at least  1 day 
   </h1>
      </div>

      <?php
   }


//echo '<br>'. $_POST['firstname'] .'<br>'. $_POST['lastname'].'<br>'.$_POST['hotelname'].'<br>'.$_POST['indate'].'<br>'. $_POST['outdate'];




if (isset($_POST['submit'])) {
   $_SESSION['firstname']= $_POST['firstname'];
   $_SESSION['surname']= $_POST['surname'];
   $_SESSION['hotelname']= $_POST['hotelname'];
   $_SESSION['indate']= $_POST['indate'];
   $_SESSION['outdate']= $_POST['outdate'];



//echo $_SESSION['firstname'] //."<br>".  $_SESSION['lastname'] ."<br>".  $_SESSION['hotelname'] ."<br>". $_SESSION['indate'] ."<br>". $_SESSION['outdate']."<br>";


//display booking info to user
//


//calculate duration of user's stay at hotel
$datetime1 = new DateTime($_SESSION['indate']);
$datetime2 = new DateTime($_SESSION['outdate']);
$interval = $datetime1->diff($datetime2);

$interval->format('%d');

//$checkInStamp = strtotime($_SESSION['indate']);
        //$checkOutStamp = strtotime($_SESSION['outdate']);
        // echo $checkInStamp . '<br>';
        // echo $checkOutStamp;
        //if ($checkInStamp - $checkOutStamp > 86400 || $checkInStamp == $checkOutStamp) {
           // header("Location: ?error=timestamp");
            //exit;
        //}

$daysbooked = $interval->format('%d');
$value;

switch(isset($_SESSION['hotelname'])){
   case 'Holiday Inn':
   $value = $daysbooked * 200;
  
   break;

   case 'Radison':
   $value = $daysbooked * 100;
   break;

   case 'City Lodge':
   $value = $daysbooked * 400;
   break;

   case 'Town Lodge':
   $value = $daysbooked * 150;
   break;

   default:
   return "ERROR!";
}

$firstname = $_POST['firstname'];
$surname = $_POST['surname'];

$result = mysqli_query($conn,"SELECT hotelname, indate, outdate, firstname, surname FROM bookings WHERE firstname='$firstname' && surname='$surname'"); 
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {    
 echo "<div class='duplicate'> You already have a booking. <br> Firstname: ". $row['firstname'] . "<br>
Lastname: " . $row['surname'].
"<br> Start Date: " . $row['indate'].
"<br> End Date: " . $row['outdate'].
"<br> Hotel Name: " . $row['hotelname'].
"<br>" . $interval->format('%r%a days') . "<br> Total: R " . $value ."</div>";
    } 
}


echo '<div class="return">'. "<br> Firstname:".  $_SESSION['firstname']."<br>".
"surname:".  $_SESSION['surname']."<br>".
"Start Date:". $_SESSION['indate']."<br>".
"End Date:". $_SESSION['outdate']."<br>".
"Hotel Name:". $_SESSION['hotelname']."<br>".
"<br>" . $interval->format('%r%a days') .
"<br>".
"Total R" . $value ;

echo "<form role='form' action=" . htmlspecialchars($_SERVER['PHP_SELF']) . " method='post'>
<button name='confirm' type='submit'> Confirm </button> </form>".'</div>';

//echo "<form role='form' action=" . htmlspecialchars($_SERVER['PHP_SELF']) . " method='post'><input type='submit' name='confirm'>.'Confirm'.</form>";

}

//write to database
if(isset($_POST['confirm'])){
//Preparing and binding a statement
//prepare is method, this way we only pass the query once and then the values
$stmt=$conn->prepare("INSERT INTO bookings(firstname,surname,hotelname,indate,outdate) VALUES (?,?,?,?,?)");
//also part of preparing & binding these values to the questions marks.
$stmt->bind_param('sssss', $firstname,$surname,$hotelname,$indate,$outdate);
$firstname=$_SESSION['firstname'];
$surname=$_SESSION['surname'];
$hotelname=$_SESSION['hotelname'];
$indate=$_SESSION['indate'];
$outdate=$_SESSION['outdate'];
$stmt->execute();
echo '<div id="confirmed">'."Booking confirmed".'</div>';

}






?>





</body>
</html>