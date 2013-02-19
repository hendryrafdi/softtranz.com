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
                            title: 'All Day Event',
                            start: new Date(y, m, 1)
                        },
                        {
                            title: 'Long Event',
                            start: new Date(y, m, d-5),
                            end: new Date(y, m, d-2)
                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: new Date(y, m, d-3, 16, 0),
                            allDay: false
                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: new Date(y, m, d+4, 16, 0),
                            allDay: false
                        },
                        {
                            title: 'Meeting',
                            start: new Date(y, m, d, 10, 30),
                            allDay: false
                        },
                        {
                            title: 'Lunch',
                            start: new Date(y, m, d, 12, 0),
                            end: new Date(y, m, d, 14, 0),
                            allDay: false
                        },
                        {
                            title: 'Birthday Party',
                            start: new Date(y, m, d+1, 19, 0),
                            end: new Date(y, m, d+1, 22, 30),
                            allDay: false
                        },
                        {
                            title: 'Click for Google',
                            start: new Date(y, m, 28),
                            end: new Date(y, m, 29),
                            url: 'http://google.com/'
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
                        <p class="subtext"><img src="images/home.png"/></p>
                    </li>
                    <li class="black">
                        <p><a href="member.php">Member</a></p>
                        <p class="subtext"><img src="images/member.png"/></p>
                    </li>
                    <li class="black">
                        <p><a href="schedule.php">Schedule</a></p>
                        <p class="subtext"><img src="images/schedule.png"/></p>
                    </li>
                    <li class="black">
                        <p><a href="#">Sharing</a></p>
                        <p class="subtext"><img src="images/sharing.png"/></p>
                    </li>
                    <li class="black">
                        <p><a href="#">Chating</a></p>
                        <p class="subtext"><img src="images/chatting.png"/></p>
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
            <div id='calendar'></div>
        </div>
    </body>
    <footer>
        <div class="kaki">
            Copyright &copy; <a href="index.php">Software Transformator</a>. All right reserved.
        </div>
    </footer>
</html>
