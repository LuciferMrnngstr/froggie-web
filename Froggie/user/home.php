<?php
    session_start();

    if(!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }

    include_once '../tools/variables.php';
    $pageTitle = 'Froggie | Home';
    $home = ' active';

    include_once '../includes/header.php';
    include_once '../includes/navbar.php';

    include_once '../classes/place.class.php';
    $place = new Place;

    if($place->fetch($_SESSION['userID'])){
        $data = $place->fetch($_SESSION['userID']);
    }
?>
<div class="content">
    <?php
        include_once '../includes/top-sect.php';
    ?>

    <div class="home-sect">
        <div class="progress-cont">
            <h1>Places I wanna go!</h1>

            <button class="menu-btn" onclick="openDialog()">
                <img src="../img/icons/green/more.svg">
            </button>

            <dialog>
                <a href="edit.php">Edit</a>
                <button class="btn" onclick="closeDialog()">Close</button>
            </dialog>

            <div class="column" data-percent="<?php if(isset($data['saudi'])){ echo $data['saudi']; } else{ echo 0; } ?>">
                <img src="../img/icons/flags/saudi-arabia.png">
                <div class="progress-bar">
                    <div class="progress"></div>
                    <span class="circle"></span>
                    <p class="percent"><?php if(!isset($data)){ echo '0%';} ?></p>
                </div>
            </div>

            <div class="column" data-percent="<?php if(isset($data['italy'])){ echo $data['italy']; } else{ echo 0;} ?>">
                <img src="../img/icons/flags/italy.png">
                <div class="progress-bar">
                    <div class="progress"></div>
                    <span class="circle"></span>
                    <p class="percent"><?php if(!isset($data)){ echo '0%';} ?></p>
                </div>
            </div>

            <div class="column" data-percent="<?php if(isset($data['norway'])){ echo $data['norway']; } else{ echo 0;} ?>">
                <img src="../img/icons/flags/norway.png">
                <div class="progress-bar">
                    <div class="progress"></div>
                    <span class="circle"></span>
                    <p class="percent"><?php if(!isset($data)){ echo '0%';} ?></p>
                </div>
            </div>

            <div class="column" data-percent="<?php if(isset($data['france'])){ echo $data['france']; } else{ echo 0; } ?>">
                <img src="../img/icons/flags/france.png">
                <div class="progress-bar">
                    <div class="progress"></div>
                    <span class="circle"></span>
                    <p class="percent"><?php if(!isset($data)){ echo '0%';} ?></p>
                </div>
            </div>

            <div class="column" data-percent="<?php if(isset($data['japan'])){ echo $data['japan']; } else{ echo 0; } ?>">
                <img src="../img/icons/flags/japan.png">
                <div class="progress-bar">
                    <div class="progress"></div>
                    <span class="circle"></span>
                    <p class="percent"><?php if(!isset($data)){ echo '0%';} ?></p>
                </div>
            </div>

            <div class="column" data-percent="<?php if(isset($data['canada'])){ echo $data['canada']; } else{ echo 0; } ?>">
                <img src="../img/icons/flags/canada.png">
                <div class="progress-bar">
                    <div class="progress"></div>
                    <span class="circle"></span>
                    <p class="percent"><?php if(!isset($data)){ echo '0%';} ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include_once '../includes/footer.php';
?>