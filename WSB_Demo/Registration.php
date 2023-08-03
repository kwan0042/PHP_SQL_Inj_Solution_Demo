

<?php include("./common/header.php"); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $mypdo=parse_ini_file("db.ini");
    extract($mypdo);
    $pdo= new PDO($dsn, $user, $password);

    $username = $_POST['username'];
    $upassword = $_POST['password'];
    $telephone = $_POST['telephone'];
    
    $sql = "INSERT INTO users (username, password, telephone) VALUES ('$username', '$upassword', '$telephone')";
    
    $pdo->exec($sql);
    $msg='User Created';
}
?>

<div class="px-5 pt-4 pb-5">
    <h1>Sign Up</h1>

    <p>All fields are required</p>

    
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
        
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="telephone">Telephone:</label>
            <div class="col-sm-3">
                <input type="password" id="telephone" name="telephone" class="form-control" required><br>
            </div>
        </div>

        <div class="form-group row justify-content-center pt-4">
            <div class="col-sm-8">
                <button type="submit" value="submit" name="submit" class="btn btn-success float-right">Register</button>

            </div>
        </div>
    </form>
</div>

<div class="text-center"><span class="error" style="color:red"><?php echo $msg;?></span></div>
    


<?php include('./common/footer.php'); ?>