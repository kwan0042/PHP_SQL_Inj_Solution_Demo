<?php include("./common/header.php"); ?>
<!--'or'1'='1-->

<?php
    $mypdo=parse_ini_file("db.ini");
    extract($mypdo);
    $pdo= new PDO($dsn, $user, $password);
    
    
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $upassword = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$upassword'";

    $result = $pdo->query($sql);

    if ($result->rowCount() > 0) {
        $msg = 'Logged in successfully. <br>' ;
        $flag = true;

    } else {
        $msg = 'Invalid username or password.';
    }
    
}
?>

<div class="px-5 pt-4 pb-5">
    <h1>Log In</h1>

    <p>You need to <a class="text-decoration-none" href="Registration.php">Sign up</a> if you a new user.</p>

    
    <form  method = "POST" action="">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="username">Username:</label>
            <div class="col-sm-3">
                
                <input type="text" id="username" name="username" class="form-control" required><br>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="password">Password:</label>
            <div class="col-sm-3">
                <input type="password" id="password" name="password" class="form-control" required><br>
            </div>
        </div>

        <div class="form-group row justify-content-center pt-4">
            <div class="col-sm-8">
                <button type="submit" value="submit" name="submit" class="btn btn-success float-right">Submit</button>

            </div>
        </div>
    </form>
</div>

<div class="text-center"><span class="error" style="color:red"><?php echo $msg;?></span></div>
<div class="text-center"><span class="error" style="color:red"><?php echo $sql;?></span></div>
    
<?php
if ($flag ==true){
    $sql1 = "SELECT * FROM users"; 
    $result = $pdo->query($sql1);
  
    if ($result->rowCount() > 0) {
    echo '<table class="table table-striped">';
        echo '<thead>';
            echo '<tr>';
                echo '<th scope="col">id</th>';
                echo '<th scope="col">username</th>';
                echo '<th scope="col">password</th>';
                echo '<th scope="col">telephone</th>';
            echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
    
    while($row = $result->fetch()) {
        echo '<tr>';
            echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['telephone'] . "</td>";
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}
}
?>

<?php include('./common/footer.php'); ?>