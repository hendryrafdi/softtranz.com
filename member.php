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
                        <p class="subtext">Get in touch</p>
                    </li>
                    <li class="black">
                        <p><a href="schedule.php">Schedule</a></p>
                        <p class="subtext">Send us your stuff!</p>
                    </li>
                    <li class="black">
                        <p><a href="sharing.php">Sharing</a></p>
                        <p class="subtext">Legal things</p>
                    </li>
                    <li class="black">
                        <p><a href="chatting.php">Chating</a></p>
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
						switch($_GET[id]){
							default:
							
								include 'page/config.php';
								$que = mysql_query("select *from member");
								while ($tampil = mysql_fetch_array($que)) {
							
								echo"
								<li style='height: 300px; list-style: none;'>
									<a class='product' href='member.php?id=member&detail=$tampil[id_member]'>
                                <img class='thumb' src='$tampil[foto]' alt='$tampil[nama_member]' />
                                <table border='0' style='margin-top: -10px;'>
                                    <tr>
                                        <td>
                                            <span>-</span>
                                        </td>
                                        <td class='font-nama'>
                                            <span>$tampil[nama_member]</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>-</span>
                                        </td>
                                        <td class='font-nama'>
                                            <span>$tampil[quote]</span>
                                        </td>
                                    </tr>
                                </table>
                            </a>
                        </li>
						";
                    }   	
				case'member':
					include 'page/config.php';
					if(isset($_GET['detail'])){
						$que = mysql_query("select *from member where id_member='$_GET[detail]'");
						$tampil = mysql_fetch_array($que);
						
						echo"
						
						<div class='detail'>
							<fieldset class='border'></fieldset>
								<div class='jarak'>
								<a class='product'>
									<img class='thumb_detail' src='$tampil[foto]'>
								</a>
								</div>
								<fieldset class='border'>
								<div class='table_detail'>
									
									<table border='0' class='table'>
										<tr style='height:50px'>
											<td colspan='3'>
												<center><font face='rockwell' size='5'>Detail Member</font></center>
											</td>
										</tr>
										<tr style='height: 30px'>
											<td>
												<font face='rockwell' size='3'>Full Name</font>
											</td>
											<td>
												<font face='rockwell' size='3'>:</font>
											</td>
											<td>
												<font face='rockwell' size='3'>$tampil[nama_member]</font>
											</td>
										</tr>
										<tr style='height: 30px'>
											<td>
												<font face='rockwell' size='3'>Birthday Place</font>
											</td>
											<td>
												<font face='rockwell' size='3'>:</font>
											</td>
											<td>
												<font face='rockwell' size='3'>$tampil[tempat_lahir]</font>
											</td>
										</tr>
										<tr style='height: 30px'>
											<td>
												<font face='rockwell' size='3'>Birthday Date</font>
											</td>
											<td>
												<font face='rockwell' size='3'>:</font>
											</td>
											<td>
												<font face='rockwell' size='3'>$tampil[tgl_lahir]</font>
											</td>
										</tr>
										<tr style='height: 30px'>
											<td>
												<font face='rockwell' size='3'>Nickname</font>
											</td>
											<td>
												<font face='rockwell' size='3'>:</font>
											</td>
											<td>
												<font face='rockwell' size='3'>$tampil[nickname]</font>
											</td>
										</tr>
										<tr style='height: 30px'>
											<td>
												<font face='rockwell' size='3'>Website</font>
											</td>
											<td>
												<font face='rockwell' size='3'>:</font>
											</td>
											<td>
												<font face='rockwell' size='3'>$tampil[web]</font>
											</td>
										</tr>
										<tr style='height: 30px'>
											<td>
												<font face='rockwell' size='3'>Quote</font>
											</td>
											<td>
												<font face='rockwell' size='3'>:</font>
											</td>
											<td>
												<font face='rockwell' size='3'>$tampil[quote]</font>
											</td>
										</tr>
									</table>
									<div class='garis'>
										&nbsp;
									</div>
									<div class='table_akun'>
										<table border='0' class='table'>
										<tr style='height:50px'>
											<td colspan='3'>
												<center><font face='rockwell' size='5'>Sosial Media</font></center>
											</td>
										</tr>
										<tr style='height: 30px'>
											<td>
												<font face='rockwell' size='3'>Facebook</font>
											</td>
											<td>
												<font face='rockwell' size='3'>:</font>
											</td>
											<td>
												<font face='rockwell' size='3'>Chadana Chaiyank Cemuaa</font>
											</td>
										</tr>
										<tr style='height: 30px'>
											<td>
												<font face='rockwell' size='3'>Twitter</font>
											</td>
											<td>
												<font face='rockwell' size='3'>:</font>
											</td>
											<td>
												<font face='rockwell' size='3'>@sadana_cute</font>
											</td>
										</tr>
										<tr style='height: 30px'>
											<td>
												<font face='rockwell' size='3'>Jangkrik</font>
											</td>
											<td>
												<font face='rockwell' size='3'>:</font>
											</td>
											<td>
												<font face='rockwell' size='3'>Chadana</font>
											</td>
										</tr>
										<tr style='height: 30px'>
											<td>
												<font face='rockwell' size='3'>Skype</font>
											</td>
											<td>
												<font face='rockwell' size='3'>:</font>
											</td>
											<td>
												<font face='rockwell' size='3'>Chadana.Cute</font>
											</td>
										</tr>
										<tr style='height: 30px'>
											<td>
												<font face='rockwell' size='3'>Kaskus</font>
											</td>
											<td>
												<font face='rockwell' size='3'>:</font>
											</td>
											<td>
												<font face='rockwell' size='3'> - </font>
											</td>
										</tr>
										<tr style='height: 30px'>
											<td>
												<font face='rockwell' size='3'>Email</font>
											</td>
											<td>
												<font face='rockwell' size='3'>:</font>
											</td>
											<td>
												<font face='rockwell' size='3'>SadanaCute@Manis.com</font>
											</td>
										</tr>
									</table>
									<div class='button1'>
										<a class='css3button' href='member.php'>Back</a>
									</div>
									</div>
									</fieldset>
								</div>
						</div>	
						
						";
					}
				}
				?>
				
                </ul>
            </div>
			<div>
                <img class="header-member-bawah" src="images/member/header/header.png">
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
