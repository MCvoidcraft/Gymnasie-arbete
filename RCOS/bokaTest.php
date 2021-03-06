<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="http://purepng.com/public/uploads/large/purepng.com-popcornpopcorncorndent-cornflint-corn-1411528651430gpsc3.png" alt="">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Royal Cinema of Sweden</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<?php require "navBar.php";?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $servername = "localhost"; // Localhost
    $username = "root";
    $password = "";
    $dbname = "gymnasie-arbete";

    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM movies WHERE id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $result_id = $row['id'];
            $name = $row['movie_name'];
            $genre = $row['genre'];
            $description = $row['description'];
            $director = $row['director'];
            $pic = $row['pic'];
        }
    }

} else {
    echo '<h1>Ange film!</h1>';
}
?>


<div id="boka">
    <div class="container">
        <div class="row">
            <div class="col s4">
                <?php
                echo '<img id ="film" class="z-depth-3" src="' . $pic . '">';
                ?>
            </div>
            <div class="col s8" id="dropdown">
                <div class="flow-text">
                <?php 
                    echo "<h2>" . $name . "</h2>";
                    echo "<h5>" . $genre . "</h5>";   
                    echo "<hr>";   
                    echo "<p>" . $description . "</p>";   

                    echo "<p>Director: <b>" . $director . "</b></h2>";
                ?>
                </div>
            <form action="boka.php" method="POST">
            <br>
                <div class="input-field">
                        <select name="datum" id="datum">
                            <option value="" disabled selected>Choose an option!</option>
                        <?php 
                            $sql = "SELECT DISTINCT * FROM show_times WHERE movie_id='$id'";
                            $result = $conn->query($sql);    
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option value="' . $row['id'] . '">' . $row['dates']  . '</option>'; #OBS! $row['id'] i show_times är unik!
                                }
                            }
                        ?>
                        </select>
                        <label>Välj datum</label>
                        
                </div>
            <br>
                <div class="input-field">
                        <select name="tider" id="tider">
                            <option value="" disabled selected>Choose your option</option>
                        </select>
                    <label>Välj tid</label>
                </div>

                <input type="hidden" id="movie_id" name="movie_id" value="<?php echo $id; ?>"/>
                <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>
                
            </div>
        </div>
    </div>
</div>


<?php 
$conn->close();
?>
<?php require "footer.php";?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>
