<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission and insert data into the database
    $heading = $_POST["heading"];
    $bodytext = $_POST["bodytext"];
// Sample PHP code to fetch and display content from the database
// Replace this with your database connection logic

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$uid = $_POST["uid"];
$heading = $_POST["heading"];
$bodytext = $_POST["bodytext"];
//$sql = "SELECT * FROM `gallery`";
$sql = "INSERT INTO `gallery`.'gallery' (`uid`, `Heading`, `bodytext`) VALUES ('$uid', '$Heading', '$bodytext')";
$result = $conn->query($sql);

echo "<div class='content-container'>";

$count = 0;
while ($row = $result->fetch_assoc()) {
    if ($count % 3 == 0) {
        echo "<div class='row'>";
    }

    echo "<div><h2>" . $row["Heading"] . "</h2></div>";

    if ($count % 3 == 2) {
        echo "</div>";
    }

    $count++;
}

echo "</div>";

$conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="carousel" class="carousel">

<header>
<nav>
    <ul>
        <li><a href="#">carousel</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#" disabled>Disabled</a></li>
    </ul>
</nav>

<banner>
    <h1>One more for good measure.</h1>
    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
    <button>Browse gallery</button>
</banner>
</header>
<div class="profile-image">
    <img src="C1.jpeg" alt="Profile Image">
</div>

<div class="container">
    <div class="row">
        <div><h2>Heading</h2><br>
    <h4>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus,
         porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna</h4>
        </div>
        <div><h2>Heading</h2><br><h4>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus,
             tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</h4></div>
        <div><h2>Heading</h2><br>
        <h4>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. 
            Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</h4></div>
            
    </div>
    <div class="row">
        <div><h2>Heading</h2><br><h4>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
             Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h4></div>
        <div><h2>Heading</h2><br><h4>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus,
             tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</h4></div>
        <div><h2>Heading</h2><br><h4>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. 
            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h4></div>
    </div>
</div>

<div class="text-image-block">
    <div class="text">
        <h2>First featurette heading. It'll blow your mind.<br></h2>
        <h4>Donec ullamcorper nulla non metus
 auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna,
 vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</h4>
    </div>
    <div class="image">
        <img src="n1.jpeg" alt="Image">
    </div>
</div>
<div class="image-text-block">
    <div class="image">
        <img src="n2.jpeg" alt="Image">
    </div>
    <div class="text">
        <h2>Oh yeah, it's that good. See for yourself.</h2><br>
        <h4>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id 
ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</h4>
    </div>
</div>


<div class="text-image-block">
    <div class="text">
        <h2>And lastly, this one. Checkmate.</h2><br><h4>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus
 magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</h4>
    </div>
    <div class="image">
        <img src="n3.jpg" alt="Image">
    </div>
</div>
<footer>
    <p> Back to top </p>
</footer>

  
    
</div>

</body>
</html>
