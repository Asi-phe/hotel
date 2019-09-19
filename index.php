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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark white-text">
  <a class="navbar-brand white-text" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link white-text" href="#">Hotels <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link white-text" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link white-text" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown white-text">
        <a class="nav-link dropdown-toggle white-text" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hotel Names
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item white-text" href="#">City Lodge</a>
          <a class="dropdown-item white-text" href="#">Town Lodge</a>
          <a class="dropdown-item white-text" href="#">Raddison</a>
          <a class="dropdown-item white-text" href="#">Holiday IN</a>
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
                
        
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="hotelname">Hotel Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="hotelname" placeholder="Hotel Name" name="Hotel Name">
      </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="indate">Indate</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="indate" placeholder="indate" name="indate">
      </div>

      <div class="form-group dropdown">
      <label class="control-label col-sm-2" for="outdate">Outdate</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="outdate" placeholder="outdate" name="outdate">
      </div>

      <div class="form-group dropdown">
      <label class="control-label col-sm-2" for="outdate">Outdate</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="outdate" placeholder="outdate" name="outdate">
      </div>

<label>In Date<input type="date" name="indate" placeholder='indate' required></label><br>
<label>Out Date<input type="date" name="outdate" placeholder='outdate' required></label><br>
<button class="submit" name="submit" type="submit">Submit</button>



    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

<div class="container1">
<div id='form'>
<form class="form-group p-5 py-1"role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

<label>First Name<input type="text" name="firstname" placeholder='First Name' required></label><br>
<label>Surname<input type="text" name="surname"placeholder='surname' required></label><br>
<label>Hotel Name
<select name="hotelname" required>
  <option value="Holiday Inn">Holiday Inn</option>
  <option value="Radison">Radison</option>
  <option value="City Lodge">City Lodge</option>
  <option value="Town Lodge">Town Lodge</option>
</select>
</label><br>

<label>In Date<input type="date" name="indate" placeholder='indate' required></label><br>
<label>Out Date<input type="date" name="outdate" placeholder='outdate' required></label><br>
<button class="submit" name="submit" type="submit">Submit</button>


</form>
</div>
</div>
</div>

<!--Images-->
<div class="card-group">
  <div class="card">
    <img src="https://images.pexels.com/photos/1240687/pexels-photo-1240687.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

  <div class="card">
    <img src="https://images.pexels.com/photos/26139/pexels-photo-26139.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

  <div class="card">
    <img src="https://images.pexels.com/photos/279727/pexels-photo-279727.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

<div class="card">
    <img src="https://images.pexels.com/photos/2889618/pexels-photo-2889618.jpeg?cs=srgb&dl=bedroom-contemporary-curtains-2889618.jpg&fm=jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
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