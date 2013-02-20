<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Software Transformator</title>
        <link rel="stylesheet" type="css/text" href="css/style.css"/>
        <script src="js/jquery-1.3.js" type="text/javascript"></script>  
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>  
        <script src="js/animated-menu.js" type="text/javascript"></script>
        <link rel='stylesheet' type='text/css' href='cupertino/theme.css' />
        <link rel='stylesheet' type='text/css' href='js/fullcalendar/fullcalendar.css' />
        <link rel='stylesheet' type='text/css' href='js/fullcalendar/fullcalendar.print.css' media='print' />
        <script type='text/javascript' src='js/jquery/jquery-1.8.1.min.js'></script>
        <script type='text/javascript' src='js/jquery/jquery-ui-1.8.23.custom.min.js'></script>
        <script type='text/javascript' src='js/fullcalendar/fullcalendar.min.js'></script>
        <script type='text/javascript'>

            $(document).ready(function() {
	
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
		
                $('#calendar').fullCalendar({
                    theme: true,
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    editable: true,
                    events: [
                        {
                            title: 'Frets Eric Birthday',
                            start: new Date(y, 11, 27)
                        },
                        {
                            title: 'Achmad Fauzi Birthday',
                            start: new Date(y, 11, 31)
                        },
                        {
                            id: 999,
                            title: 'Amir Birthday',
                            start: new Date(y, 6, 14),
                            allDay: true
                        },
                        {
                            id: 999,
                            title: 'Anggita Birthday',
                            start: new Date(y, 11, 2),
                            allDay: true
                        },
                        {
                            title: 'Arista Birthday',
                            start: new Date(y, m, 11),
                            allDay: true
                        },
                        {
                            title: 'Hendry Birthday',
                            start: new Date(y, 12, 25),
                            allDay: true
                        },
                        {
                            title: 'Ibnu Birthday',
                            start: new Date(y, 8, 21),
                            allDay: true
                        },
                        {
                            title: 'Karezky Birthday',
                            start: new Date(y, m, 19),
                            allDay: true
                        },
                        {
                            title: 'Malika Birthday',
                            start: new Date(y, 7, 26),
                            allDay: true
                        },
                        {
                            title: 'Niko Birthday',
                            start: new Date(y, 6, 20),
                            allDay: true
                        },
                        {
                            title: 'Nurul Birthday',
                            start: new Date(y, 11, 31),
                            allDay: true
                        },
                        {
                            title: 'Qidut Birthday',
                            start: new Date(y, 9, 22),
                            allDay: true
                        },
                        {
                            title: 'Rival Birthday',
                            start: new Date(y, 6, 2),
                            allDay: true
                        },
                        {
                            title: 'Septi Birthday',
                            start: new Date(y, 8, 25),
                            allDay: true
                        },
                        {
                            title: 'Yudhis Birthday',
                            start: new Date(y, 7, 4),
                            allDay: true
                        }
                    ]
                });
		
            });

        </script>
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
                        <p><a href="#">Sharing</a></p>
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
            <div id='calendar'></div>
        </div>
    </body>
    <?php 
    include 'footer.php';
    ?>
</html>
