<?php
session_start();

$db_username = 'mautorsadmin';
$db_password = 'mautorspassword';
$db_name     = 'mautorsdb';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');
$requete = "SELECT * FROM T_Event";
$resultat = $db->query($requete);
mysqli_fetch_all($resultat,MYSQLI_ASSOC);
?>

<!----------php---------->
<?php
include 'head.php';
include 'menu.php';
?>

<body>
<div data-bs-parallax-bg="true" style="height: 1000px;background-image: url(&quot;/media/79.jpg&quot;);background-position: center;background-size: auto;padding-top: 300px;padding-bottom: 200px;">
<div class="container">
            <h1 style="font-family: Cabin, sans-serif;padding-bottom: 10px;color: white;">Event</h1>
            <p class="text-center" style="font-size: 25px;font-family: Cabin, sans-serif;color: white;"><strong>Sign up for one of our roadtrips</strong></p>
        </div>
    </div>
</div>
<!-----------------------Calendar------------------->
<head>
<link rel="stylesheet" href="./calendar_bryan/fullcalendar/fullcalendar.min.css" />
<script src="./calendar_bryan/fullcalendar/lib/jquery.min.js"></script>
<script src="./calendar_bryan/fullcalendar/lib/moment.min.js"></script>
<script src="./calendar_bryan/fullcalendar/fullcalendar.min.js"></script>

<script>

$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: "./calendar_bryan/fetch-event.php",
        displayEventTime: false,
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            var title = prompt('Event Title:');

            if (title) {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                $.ajax({
                    url: './calendar_bryan/add-event.php',
                    data: 'title=' + title + '&start=' + start + '&end=' + end,
                    type: "POST",
                    success: function (data) {
                        displayMessage("Added Successfully");
                    }
                });
                calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                true
                        );
            }
            calendar.fullCalendar('unselect');
        },
        
        editable: true,
        eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: './calendar_bryan/edit-event.php',
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                        type: "POST",
                        success: function (response) {
                            displayMessage("Updated Successfully");
                        }
                    });
                },
        eventClick: function (event) {
            var deleteMsg = confirm("Do you really want to delete?");
            if (deleteMsg) {
                $.ajax({
                    type: "POST",
                    url: "./calendar_bryan/delete-event.php",
                    data: "&id=" + event.id,
                    success: function (response) {
                        if(parseInt(response) > 0) {
                            $('#calendar').fullCalendar('removeEvents', event.id);
                            displayMessage("Deleted Successfully");
                        }
                    }
                });
            }
        }

    });
});

function displayMessage(message) {
	    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
}
</script>

<style>
body_1 {
    margin-top: 50px;
    text-align: center;
    font-size: 12px;
    font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
}

#calendar {
    width: 700px;
    margin: 0 auto;
}

.response {
    height: 60px;
}

.success {
    background: #cdf3cd;
    padding: 10px 60px;
    border: #c3e6c3 1px solid;
    display: inline-block;
}
</style>
</head>
<body_1>
 
    <div class="response"></div>
    <div id='calendar'></div>
    </body_1>



<div style="background-color: rgb(238,244,247);">
    <div class="container" style="padding-top: 50px;padding-bottom: 80px;">

    <?php
    $email = $_SESSION['email'];
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
            or die('could not connect to database');
        $requete = "SELECT id_utilisateur FROM t_utilisateur WHERE email = '".$email."' ";
        $exec_requete = $db->query($requete);
        $ligne = $exec_requete->fetch_assoc();
        if($ligne['id_utilisateur'] == '1'){
        echo '<button onclick="location.href = \'add.php\';" class="btn btn-primary" type="button" style="margin-left: 1006px;margin-bottom: 28px;background-color: rgba(93,130,169,0.83);font-size: 25px;">ADD</button>';
        }
        else
        {
        }
    ?>
        
        <div class="row">
      <?php foreach ($resultat as $event): ?>

                <div class="col-md-12" style="padding-top: 20px;padding-bottom: 20px;">
                    <div style="background-color: #ffffff;">
                        <div style="padding-left: 10px; padding-top: 10px; padding-bottom: 20px;">
                        <id style="font-weight: bold; font-size:20px;"> <?= $event['nom'] ?> </id>
                        <?php
                        $email = $_SESSION['email'];
                        $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
                                or die('could not connect to database');
                            $requete = "SELECT id_utilisateur FROM t_utilisateur WHERE email = '".$email."' ";
                            $exec_requete = $db->query($requete);
                            $ligne = $exec_requete->fetch_assoc();
                            if($ligne['id_utilisateur'] == '1'){
                            echo '<form><a href="';
                            echo "edit_event.php?id_e={$event['id_event']}";
                            echo 'class="btn btn-primary"  style="margin-left: 1006px;background-color: rgba(93,130,169,0.83);font-size: 15px;">Edit</a></form>';
                            
                            }
                            else
                            {
                            }
                        ?>
                        <br>
                        <id style="font-style: italic;"> <?= $event['ride']   ?> 
                         <br> </id>    <id style="font-style: italic;"> Begin: <?= $event['date_debut'] ?> </id><id style="font-style: italic;"> &nbsp; End: <?= $event['date_fin'] ?> </id>
                        <br> <br>
                        <?= $event['comment'] ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
        
    <?php include 'footer.php';    ?>
<!---------------php-------------->


</body>

</html>
