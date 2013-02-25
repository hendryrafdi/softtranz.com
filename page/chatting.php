<script type="text/javascript"> 
    <!-- 
    function addsmiley(code) { 
        var pretext = document.forms['shoutbox_form'].shoutbox_message.value; 
        this.code = code; 
        document.forms['shoutbox_form'].shoutbox_message.value = pretext + code; 
    } 
    //--> 
</script>

<style type="text/css"> 
    /* Belows is the CSS file with some comments, edit it to your likings. */ 
    /* This is to "trap" all shoutbox message into one content box */

    div.shoutbox { 
        background: #F5F5F5; 
        padding: 5px;
        width: auto; 
        height: 300px; 
        border: 1px solid #000000; 
        overflow: auto; 
        color: #000000; 
        font: normal 10px verdana,tahoma,arial } 
    /* Smiley with no border and a cursor pointer */ 
    img{
        height: 25px;
        width: 25px;
    }
    img.smileys { 
        border: 0; 
        cursor: pointer; } 
    /* Just some styling... */ 
    #shoutbox-message { width: content-box; } 
    strong { 
        color: #000000; 
        font: bold 10px verdana,tahoma,arial } 
    /* Dont remove this style property or the messages wont display properly! */ 
    .list { 
        margin: 0; 
        padding: 0; 
        list-style-type: none; 
        color: #000000; 
        font: normal 10px verdana,tahoma,arial; } 
    /* This is just to make the form looks nice */ 
    .shoutinput { 
        padding: 0px; 
        border: 1px solid #000000; 
        background-color: #F5F5F5;
        color: #000000; 
        font: normal 10px verdana,tahoma,arial; } 
    .shouttextarea { 
        padding: 0px; 
        border: 1px solid #000000;
        background-color: #F5F5F5; 
        color: #000000; 
        font: normal 10px verdana,tahoma,arial; } 
    .bingkai {
        border-radius: 10px 10px 10px 10px;
        margin-top: 10px;
        margin-right: -8px;
    }
</style> 
<?php
include("page/config.php");
if ($_POST['shoutbox_submit']) {
    $name = $_POST['shoutbox_name'];
    $ip = $_POST['shoutbox_ip'];
    $message = $_POST['shoutbox_message'];
    $mlen = strlen($message);
    $date = date("F jS Y");
    if ($name == "") {
        echo "<strong>Peringatan: Silahkan Masukkan Nama Anda.</strong>";
    } else if ($message == "") {
        echo "<strong>Peringatan: Tidak ada pesan yang anda kirim.</strong>";
    } else if ($mlen > $max_length) {

        echo "<strong>Peringatan: pesan terlalu panjang.</strong>";
    } else {

        $db = mysql_connect($db_host, $db_user, $db_pass);
        mysql_select_db($db_name) or die("Cannot connect to database");
        mysql_query("INSERT INTO chatting(name,ip,message,date) VALUES('$name','$ip','$message','$date')");
        mysql_close($db);
    }
}

$db = mysql_connect($db_host, $db_user, $db_pass);
mysql_select_db($db_name) or die("Cannot connect to database");
$query = "SELECT * FROM chatting ORDER BY id DESC LIMIT $dmessage";
$result = mysql_query($query);
echo "<fieldset class='bingkai'><div class=\"shoutbox\">\n";
echo "<ul class='list'>\n";
while ($r = mysql_fetch_array($result)) {
//Strips unwanted HTML from nickname 
    $name = $r['name'];
    $name = strip_tags($name);
//Strips unwanted HTML from message 
    $message = $r['message'];
    $message = strip_tags($message);
// Transform text to smileys =) 
    $message = str_replace(":)", "<img src=\"images/smileys/yolks/have a nice day.png\" alt=\":)\"/>", $message);
    $message = str_replace("^_^", "<img src=\"images/smileys/yolks/;^^.png\" alt=\"^_^\"/>", $message);
    $message = str_replace(":D", "<img src=\"images/smileys/yolks/grin.png\" alt=\":D\"/>", $message);
    $message = str_replace(">:o", "<img src=\"images/smileys/yolks/pissed off.png\" alt=\">:o\"/>", $message);
    $message = str_replace("@_@", "<img src=\"images/smileys/yolks/dizzy.png\" alt=\"@_@\"/>", $message);
    $message = str_replace(":zZ", "<img src=\"images/smileys/yolks/² z Z.png\" alt=\"zZ\"/>", $message);
    $message = str_replace("-3-", "<img src=\"images/smileys/yolks/¯ε¯¯ .png\" alt=\"¯ε¯¯ \"/>", $message);
    $message = str_replace("T_T", "<img src=\"images/smileys/yolks/TT TT.png\" alt=\"T_T\"/>", $message);
    $message = str_replace("x_x", "<img src=\"images/smileys/yolks/x_x.png\" alt=\"x_x\"/>", $message);
    $message = str_replace("XD", "<img src=\"images/smileys/yolks/XD.png\" alt=\"XD\"/>", $message);
    $message = str_replace(":&", "<img src=\"images/smileys/yolks/sick.png\" alt=\":&\"/>", $message);
    $message = str_replace(":3", "<img src=\"images/smileys/yolks/meaw.png\" alt=\":3\"/>", $message);
    $message = str_replace(":semangat", "<img src=\"images/smileys/yolks/yuush.png\" alt=\"semangat\"/>", $message);
    $message = str_replace(":fire", "<img src=\"images/smileys/yolks/on fire.png\" alt=\"fire\"/>", $message);
    $message = str_replace(":maubgt", "<img src=\"images/smileys/yolks/want.png\" alt=\"maubgt\"/>", $message);
    $message = str_replace("<3<3", "<img src=\"images/smileys/yolks/in love.png\" alt=\"<3<3\"/>", $message);
    $message = str_replace(":music", "<img src=\"images/smileys/yolks/enjoying mah playlist.png\" alt=\":music\"/>", $message);
    $message = str_replace("._.", "<img src=\"images/smileys/yolks/lll._..png\" alt=\"._.\"/>", $message);
    $message = str_replace("O_O", "<img src=\"images/smileys/yolks/O_O.png\" alt=\"O_O\"/>", $message);
    $message = str_replace("-_-", "<img src=\"images/smileys/yolks/you're kidding, right.png\" alt=\"-_-\"/>", $message);
    $message = str_replace(":woy", "<img src=\"images/smileys/yolks/omg.png\" alt=\"woy\"/>", $message);
    $message = str_replace(":ngeces", "<img src=\"images/smileys/yolks/yaeh am not durnk.png\" alt=\"ngeces\"/>", $message);
    $message = str_replace(":kusut", "<img src=\"images/smileys/png/burn.png\" alt=\"kusut\"/>", $message);
    $message = str_replace(":cool", "<img src=\"images/smileys/png/cool.png\" alt=\"cool\"/>", $message);
    $message = str_replace(":cry", "<img src=\"images/smileys/png/cry.png\" alt=\"cry\"/>", $message);
    $message = str_replace(":p", "<img src=\"images/smileys/png/grimace.png\" alt=\":p\"/>", $message);
    $message = str_replace(":P", "<img src=\"images/smileys/png/grimace.png\" alt=\":P\"/>", $message);
    $message = str_replace(":muntah", "<img src=\"images/smileys/png/vomit.png\" alt=\"muntah\"/>", $message);
    $message = str_replace(":?", "<img src=\"images/smileys/png/question.png\" alt=\":?\"/>", $message);
    $message = str_replace(":thumb", "<img src=\"images/smileys/jempol1.gif\" alt=\"jempol\"/>", $message);
    $message = str_replace(":marah", "<img src=\"images/smileys/marah.gif\" alt=\"marah\"/>", $message);
    $message = str_replace(":matabelo", "<img src=\"images/smileys/matabelo1.gif\" alt=\"matabelo\"/>", $message);
    $message = str_replace(":ngakak", "<img src=\"images/smileys/ngakak.gif\" alt=\"ngakak\"/>", $message);
    $message = str_replace(":joget", "<img src=\"images/smileys/joget.gif\" alt=\"joget\"/>", $message);
    $message = str_replace(";(", "<img src=\"images/smileys/nangis.gif\" alt=\";(\"/>", $message);
    echo "<li title=\"Shouted on $r[date]\" style=\"cursor: pointer\"><strong>$name</strong>: $message</li>\n";
}
echo "</ul>\n";
echo "</div>\n";
mysql_close($db);
?>

<div> 

    <form id="shoutbox_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
        <strong>Name:</strong><br/> 
        <input name="shoutbox_name" type="text" class="shoutinput" size="30" maxlength="20"> 
        <br/> 
        <strong>Your Message:</strong><br/> 
        <img class="smileys" src="images/smileys/yolks/have a nice day.png" alt=":)" onclick="addsmiley(':)')"/> 
        <img class="smileys" src="images/smileys/yolks/;^^.png" alt=":^_^" onclick="addsmiley('^_^')"/> 
        <img class="smileys" src="images/smileys/yolks/grin.png" alt=":D" onclick="addsmiley(':D')"/> 
        <img class="smileys" src="images/smileys/yolks/pissed off.png" alt=">:o" onclick="addsmiley('>:o')"/> 
        <img class="smileys" src="images/smileys/yolks/dizzy.png" alt="@_@" onclick="addsmiley('@_@')"/> 
        <img class="smileys" src="images/smileys/yolks/² z Z.png" alt=":zZ" onclick="addsmiley(':zZ')"/> 
        <img class="smileys" src="images/smileys/yolks/¯ε¯¯ .png" alt="-3-" onclick="addsmiley('-3-')"/> 
        <img class="smileys" src="images/smileys/yolks/TT TT.png" alt="T_T" onclick="addsmiley('T_T')"/> 
        <img class="smileys" src="images/smileys/yolks/x_x.png" alt="x_x" onclick="addsmiley('x_x')"/> 
        <img class="smileys" src="images/smileys/yolks/XD.png" alt="XD" onclick="addsmiley('XD')"/> 
        <img class="smileys" src="images/smileys/yolks/sick.png" alt=":&" onclick="addsmiley(':&')"/> 
        <img class="smileys" src="images/smileys/yolks/meaw.png" alt=":3" onclick="addsmiley(':3')"/>
        <img class="smileys" src="images/smileys/yolks/on fire.png" alt=":fire" onclick="addsmiley(':fire')"/> 
        <img class="smileys" src="images/smileys/yolks/want.png" alt=":maubgt" onclick="addsmiley(':maubgt')"/>
        <img class="smileys" src="images/smileys/yolks/in love.png" alt="<3<3" onclick="addsmiley('<3<3')"/>
        <img class="smileys" src="images/smileys/yolks/enjoying mah playlist.png" alt=":music" onclick="addsmiley(':music')"/>
        <img class="smileys" src="images/smileys/yolks/lll._..png" alt="._." onclick="addsmiley('._.')"/> 
        <img class="smileys" src="images/smileys/yolks/O_O.png" alt="O_O" onclick="addsmiley('O_O')"/>
        <img class="smileys" src="images/smileys/yolks/you're kidding, right.png" alt="-_-" onclick="addsmiley('-_-')"/>
        <img class="smileys" src="images/smileys/yolks/omg.png" alt=":woy" onclick="addsmiley(':woy')"/>
        <img class="smileys" src="images/smileys/yolks/yaeh am not durnk.png" alt=":ngeces" onclick="addsmiley(':ngeces')"/><br>
        <img class="smileys" src="images/smileys/png/burn.png" alt=":kusut" onclick="addsmiley(':kusut')"/>
        <img class="smileys" src="images/smileys/png/cool.png" alt=":cool" onclick="addsmiley(':cool')"/>
        <img class="smileys" src="images/smileys/png/cry.png" alt=":cry" onclick="addsmiley(':cry')"/>
        <img class="smileys" src="images/smileys/png/grimace.png" alt=":p" onclick="addsmiley(':p')"/> 
        <img class="smileys" src="images/smileys/png/grimace.png" alt=":P" onclick="addsmiley(':P')"/> 
        <img class="smileys" src="images/smileys/png/vomit.png" alt=":muntah" onclick="addsmiley(':muntah')"/>
        <img class="smileys" src="images/smileys/png/question.png" alt=":?" onclick="addsmiley(':?')"/>
        <img class="smileys" src="images/smileys/jempol1.gif" alt=":thumb" onclick="addsmiley(':thumb')"/>
        <img class="smileys" src="images/smileys/marah.gif" alt=":marah" onclick="addsmiley(':marah')"/>
        <img class="smileys" src="images/smileys/matabelo1.gif" alt=":matabelo" onclick="addsmiley(':matabelo')"/>
        <img class="smileys" src="images/smileys/ngakak.gif" alt=":ngakak" onclick="addsmiley(':ngakak')"/>
        <img class="smileys" src="images/smileys/joget.gif" alt=":joget" onclick="addsmiley(':joget')"/>
        <img class="smileys" src="images/smileys/nangis.gif" alt=":'(" onclick="addsmiley(';(')"/>
        <textarea name="shoutbox_message" cols="259" rows="3" class="shouttextarea" id="shoutbox_message"></textarea> 
        <br/> 
        <input name="shoutbox_submit" type="submit" class="shoutinput" value="kirim"> 
        <input type="hidden" name="shoutbox_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"> 
    </form> 
</div>
</fieldset>