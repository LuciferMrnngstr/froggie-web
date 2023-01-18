<?php
    session_start();

    include_once '../tools/variables.php';
    $pageTitle = 'Froggie | Login';

    include_once '../includes/header.php';
    include_once '../classes/account.class.php';

    if(isset($_POST['username']) && isset($_POST['password'])){
        $account = new Account;

        $username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);

        if($account->check($username, $password)){
            $data = $account->check($username, $password);
            $account->username = $data['username'];
            $account->password = $data['password'];
        }

        if($username == $account->username && $password == $account->password){
            $_SESSION['logged-in'] = $data['username'];
            $_SESSION['userID'] = $data['user_id'];
            $_SESSION['firstName'] = $data['firstName'];
            $_SESSION['lastName'] = $data['lastName'];
            $_SESSION['darkMode'] = $data['darkMode'];

            header('location: ../user/home.php');
        }

        $error = 'Invalid username/password!';
    }

?>

<div class="login-sect">
    <form class="login-cont" method="post">
        <div class="logo">
            <div class="logo-icon"></div>
            <h1>Froggie</h1>
        </div>
        
        <div class="mid-form">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required placeholder="Enter username">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter password">
        </div>

        <?php
            if(isset($error)){
                echo '<div class="error"><p>Invalid username/password!</p></div>';
            }
        ?>

        <input type="submit" class="button" name="submit" value="Login">
        <a href="#">Forgot Password?</a>
    </form>
</div>

<?php
    include_once '../includes/footer.php';
?>