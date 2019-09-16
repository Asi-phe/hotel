<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "connect.php";

    $sql = "CREATE TABLE bookings (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(50),
        surname VARCHAR(50),
        hotelname VARCHAR(50),
        indate VARCHAR(30),
        outdate VARCHAR(30),
        booked INT(4)
    )";

    $conn->query($sql);
    echo $conn->error;
    ?>

<div class="container">
        <div class="row">
            <div class="col" >
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group">
                        <label for="firstName">FIRST NAME</label>
                        <input type="text" class="form-control" placeholder="First name" name="firstname" required>
                </div>
                <br>
                <div class="form-group">
                        <label for="surname">SURNAME</label>
                        <input type="text" class="form-control" placeholder="Last name" name="surname" required>
                </div>
                <br>
                <label for="hotels">PLEASE CHOOSE A HOTEL</label>
                <select class="form-control form-control-lg" name="hotelname" id="hotelName" required>
                        <option value="RADISSO BLU HOTEL, Waterfront">RADISSO BLU HOTEL, Waterfront</option>
                        <option value="the cape royal">THE CAPE ROYAL </option>
                        <option value="table bay">table bay</option>
                        <option value="Vineyard Hotel">Vineyard Hotel </option>
                        <option value="Mojo hotel">mojo hotel </option>
                </select>
                <br>
                <br>
                <input type="date" class="form-control" name="indate" min="2018-01-01" max="2020-12-31" aria-label="Todo Date" aria-describedby="button-addon2">
                <input type="date" class="form-control" name="outdate" min="2018-01-01" max="2020-12-31" aria-label="Todo Date" aria-describedby="button-addon2">

                <!-- <div class="form-group">
                        <label for="numberOfDays">NUMBER OF DAYS</label>
                        <input type="number" class="form-control" placeholder="Number Of Days" min=1 name="numberOfDays" id="nums" required>
                </div> -->
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
                <br>
                
           
            </div>
           
        </div>
    </div>
<?php
if (isset($_POST['submit'])){
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['hotelname'] = $_POST['hotelname'];
    $_SESSION['indate'] = $_POST['indate'];
    $_SESSION['outdate'] = $_POST['outdate'];

    $datetime1 = new DateTime ($_SESSION['indate']);
    $datetime2 = new DateTime ($_SESSION['outdate']);
    $interval = $datetime1->diff($datetime2);
    $daysBooked = $interval->format('%R%a days');
    $value;

    switch($_POST['hotelname']){
        case "RADISSO BLU HOTEL, Waterfront" :
        $value = $daysBooked * 350;
        break;

        case "table bay" :
        $value = $daysBooked * 450;
        break;

        case "the cape royal" :
        $value = $daysBooked * 550;
        break;

        case "Vineyard Hotel" :
        $value = $daysBooked * 650;
        break;

        case "Mojo hotel" :
        $value = $daysBooked * 750;
        break;

        default :
        echo "No Booking";
    }

    echo "<br> First Name: " . $_SESSION['firstname'] . "<br>" .
    "Surname: " . $_SESSION['surname'] . "<br>" .
    "Hotel Name: " . $_SESSION['hotelname'] . "<br>" .
    "Start Date: ". $_SESSION['indate'] . "<br>" .
    "End Date: ". $_SESSION['outdate'] . "<br>" .
    $interval->format('%R%a days') . "<br>" .
    "Total: " .$value;
    
}

?>
</body>
</html>