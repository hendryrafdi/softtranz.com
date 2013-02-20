<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Member - Softranz</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div class="header">
            <div class="logo">
                <span class="tit">Software Transformator</span>
            </div>
            <div class="navbar">
                <hr>
                <ul>
                    <li class="black">
                        <p><a href="index.php">Home</a></p>
                    </li>
                    <li class="black">
                        <p><a href="member.php">Member</a></p>
                    </li>
                    <li class="black">
                        <p><a href="schedule.php">Schedule</a></p>
                    </li>
                    <li class="black">
                        <p><a href="sharing.php">Sharing</a></p>
                    </li>
                    <li class="black">
                        <p><a href="chatting.php">Chating</a></p>
                    </li>
                    <li class="black">
                        <p><a href="#">About</a></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <?php
            include 'page/chatting.php';
            ?>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>

</html>
