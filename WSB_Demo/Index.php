<?php include("./common/header.php");?>
<style>
        #btt {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
        }
        .btn-block {
            width: 10%;
            font-size: 1.5rem;
            padding: 1rem;
        }
    </style>

    <div class="px-5 pt-4 pb-5 text-center">
        <h1>Welcome to SQL Injection and its Prevention Demo App</h1>
        
    </div>
    <div id="btt">
        <div class="container d-flex flex-column align-items-center">
            <a href="Login_V.php" class="btn btn-primary mb-3">Vulnerable Login</a>
        </div>
        <div class="container d-flex flex-column align-items-center">
            <a href="Login_S.php" class="btn btn-secondary">Secure Login</a>
        </div>
    </div>
    
    
    
<?php include('./common/footer.php'); ?>

