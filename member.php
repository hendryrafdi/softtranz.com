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
                        <p><a href="#">Home</a></p>
                    </li>
                    <li class="black">
                        <p><a href="#">Member</a></p>
                        <p class="subtext">Get in touch</p>
                    </li>
                    <li class="black">
                        <p><a href="#">Schedule</a></p>
                        <p class="subtext">Send us your stuff!</p>
                    </li>
                    <li class="black">
                        <p><a href="#">Sharing</a></p>
                        <p class="subtext">Legal things</p>
                    </li>
                    <li class="black">
                        <p><a href="#">Chating</a></p>
                        <p class="subtext">Legal things</p>
                    </li>
                    <li class="black">
                        <p><a href="#">About</a></p>
                        <p class="subtext"><a href="#">RPL</a></p>
                        <p class="subtext"><a href="#">Programmer</a></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div >
                <font class="judul">All Member Of Software Transformator</font>
                <img class="header-member" src="images/member/header/header.png">
            </div>
            <div class="row">
                <ul>
                    <?php
                    include 'page/config.php';
                    $que = mysql_query("select *from member");
                    while ($tampil = mysql_fetch_array($que)) {
                        ?>
                        <li style="height: 300px; list-style: none;">
                            <a class="product" href="#">
                                <img class="thumb" src="<?php echo $tampil[foto] ?>" alt="Product Image 1" />
                                <table border="0" style="margin-top: -10px;">
                                    <tr>
                                        <td>
                                            <span>-</span>
                                        </td>
                                        <td class="font-nama">
                                            <span><?php echo $tampil[nama_member] ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>-</span>
                                        </td>
                                        <td class="font-nama">
                                            <span><?php echo $tampil[quote] ?></span>
                                        </td>
                                    </tr>
                                </table>
                            </a>
                        </li>
                        <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
    <footer>
        <div class="kaki">
            Copyright &copy; <a href="index.php">Software Transformator</a>. All right reserved.
        </div>
    </footer>
</html>
