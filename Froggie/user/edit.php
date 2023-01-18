<?php
    session_start();

    if(!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }

    include_once '../tools/variables.php';
    $pageTitle = 'Edit Place Data';
    $settings = ' active';

    include_once '../includes/header.php';
    include_once '../includes/navbar.php';

    include_once '../classes/place.class.php';
    $place = new Place;

    if(isset($_POST['submit'])){
        $place->saudi = htmlentities($_POST['saudi']);
        $place->italy = htmlentities($_POST['italy']);
        $place->norway = htmlentities($_POST['norway']);
        $place->france = htmlentities($_POST['france']);
        $place->japan = htmlentities($_POST['japan']);
        $place->canada = htmlentities($_POST['canada']);

        if($place->edit($_SESSION['userID'])){
            header('location: home.php');
        }
    }
    else {
        if($place->fetch($_SESSION['userID'])){
            $data = $place->fetch($_SESSION['userID']);
        }
    }
?>

<div class="content">
    <?php
        include_once '../includes/top-sect.php';
    ?>

    <div class="home-sect">
        <form method="post" class="form">
            <div class="column">
                <label for="saudi">Saubi Arabia</label>
                <input type="number" id="saudi" name="saudi" placeholder="Enter for Saudi" min="0" max="100"
                    required <?php if(isset($data)){ echo 'value="' . $data['saudi'] . '"'; }?>>
            </div>

            <div class="column">
                <label for="italy">Italy</label>
                <input type="number" id="italy" name="italy" placeholder="Enter for Italy" min="0" max="100"
                    required <?php if(isset($data)){ echo 'value="' . $data['italy'] . '"'; }?>>
            </div>

            <div class="column">
                <label for="norway">Norway</label>
                <input type="number" id="norway" name="norway" placeholder="Enter for Norway" min="0" max="100"
                    required <?php if(isset($data)){ echo 'value="' . $data['norway'] . '"'; }?>>
            </div>

            <div class="column">
                <label for="france">France</label>
                <input type="number" id="france" name="france" placeholder="Enter for France" min="0" max="100"
                    required <?php if(isset($data)){ echo 'value="' . $data['france'] . '"'; }?>>
            </div>

            <div class="column">
                <label for="japan">Japan</label>
                <input type="number" id="japan" name="japan" placeholder="Enter for Japan" min="0" max="100"
                    required <?php if(isset($data)){ echo 'value="' . $data['japan'] . '"'; }?>>
            </div>

            <div class="column">
                <label for="canada">Canada</label>
                <input type="number" id="canada" name="canada" placeholder="Enter for Canada" min="0" max="100"
                    required <?php if(isset($data)){ echo 'value="' . $data['canada'] . '"'; }?>>
            </div>

            <div class="button-cont">
                <a href="home.php" class="button">Cancel</a>
                <input type="submit" class="button" name="submit" value="Submit">
            </div>
        </form>
    </div>
</div>

<?php
    include_once '../includes/footer.php';
?>