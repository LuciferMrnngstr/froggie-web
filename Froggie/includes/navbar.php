<div class="sidebar">
    <div class="logo">
        <img src="../img/fways.jpg">
        <p><?= $_SESSION['firstName']; ?><br><?= $_SESSION['lastName'] ?></p>
    </div>

    <nav>
        <div class="nav-title">
            Management
        </div>

        <ul>
            <li>
                <a href="home.php" class="nav-items<?= $home; ?>">
                    <?php 
                        if($home == ' active') {
                            echo '<img src="../img/icons/semi-black/home.svg">';
                        }
                        else{
                            echo '<img src="../img/icons/green/home.svg">';
                        }
                    ?>
                    <p>Home</p>
                </a>
            </li>

            <li>
                <a href="notifications.php" class="nav-items<?= $notifications; ?>">
                    <?php 
                        if($notifications == ' active') {
                            echo '<img src="../img/icons/semi-black/notification.svg">';
                        }
                        else{
                            echo '<img src="../img/icons/green/notification.svg">';
                        }
                    ?>
                    <p>Notifications</p>
                </a>
            </li>

            <li>
                <a href="edit.php" class="nav-items<?= $settings; ?>">
                    <?php
                        if($settings == ' active') {
                            echo '<img src="../img/icons/semi-black/setting.svg">';
                        }
                        else {
                            echo '<img src="../img/icons/green/setting.svg">';
                        }
                    ?>
                    <p>Settings</p>
                </a>
            </li>
        </ul>

        <hr>

        <div class="nav-title">
            Supports
        </div>

        <ul>
            <li>
                <a href="#" class="nav-items<?= $help; ?>">
                    <?php
                        if($help == ' active') {
                            echo '<img src="../img/icons/semi-black/message.svg">';
                        }
                        else {
                            echo '<img src="../img/icons/green/message.svg">';
                        }
                    ?>
                    <p>Help</p>
                </a>
            </li>

            <li>
                <a href="#" class="nav-items<?= $feedback; ?>">
                    <?php
                        if($feedback == ' active') {
                            echo '<img src="../img/icons/semi-black/send.svg">';
                        }
                        else {
                            echo '<img src="../img/icons/green/send.svg">';
                        }
                    ?>
                    <p>Feedback</p>
                </a>
            </li>
        </ul>

        <ul>
            <li>
                <a href="../login/logout.php" class="nav-items">
                    <img src="../img/icons/green/logout.svg">
                    <p>Logout</p>
                </a>
            </li>
        </ul>

    </nav>
</div>