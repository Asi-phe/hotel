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
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.4/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.4/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/4.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.4/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
<!--Nav bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-light black-text">
  <a class="navbar-brand black-text" href="#">Asiphe Mazamisa </a>
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
<!--Body-->
<div class="container">
<div class="row">
<div class="col-md-6">
<div id='form'>
 <form class="text-center"role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
 <label class="form-control mb-4">First Name<input type="text" name="firstname"  required></label>
 <label  class="form-control mb-4">Surname<input type="text" name="surname" required></label>
 <label  class="form-control mb-4">Hotel Name
 <select class="browser-default custom-select form-control mb-4" name="hotelname" required>
     <option value="Holiday Inn">Holiday Inn</option>
     <option value="Radison">Radison</option>
     <option value="City Lodge">City Lodge</option>
     <option value="Town Lodge">Town Lodge</option>
 </select>
 </label>
 <label for="date-picker class="form-control mb-4">In Date<input id="date-picker-example"class="form-control datepicker" type="date" name="indate" placeholder='indate' required></label>
 <label for="date-picker class="form-control mb-4">Out Date<input id="date-picker-example"class="form-control datepicker" type="date" name="outdate" placeholder='outdate' required></label>
 <button class="btn btn black-sm text-center "name="submit">BOOK</i></button>
 </form>
 </div>
 </div>
 </div>
 </div>

<!--Images-->

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
      You must select at least  4 day 
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