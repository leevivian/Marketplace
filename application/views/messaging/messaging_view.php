<?php session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) : ?>
<div class="container-fluid bg-2 text-left">
    <h2 style="text-decoration: underline">Inbox</h2>
    <h2 style="text-decoration: underline">Sent By: Subject: Time: </h2>
    <?php
    if(isset($messages)) {
        foreach($messages as $row) {
            if($row['read'] == false) {
                echo "<b>{$row['sender']} - {$row['title']} - {$row['timestamp']}</b>";
            } else {
                echo "<p>{$row['sender']} - {$row['title']} - {$row['timestamp']}</p>";
            }
        }
    } else {
        echo "Error loading data.";
    }
    ?>
</div>
<?php else : ?>
<!--
<div class="container-fluid bg-2 text-center">
    <p style="text-align:center;">You must be logged in to see this page.</p>
</div> 
-->
<div class="container-fluid bg-2 text-left">
    <h2 style="text-decoration: underline">Inbox</h2>
    <?php
    if(isset($messages)) {
        if(isset($expand)) {
            echo "<table style=\"width:100%\"";
            echo "<tr><th>Author</th><th>Subject</th><th>Contents</th></tr>";
            echo "<tr><th>{$expand['sender']}</th><th>{$expand['subject']}</th><th>{$expand['contents']}</th></tr>";
            echo "</table>";
            echo "<a href=\"".base_url()."index.php/messaging\" class=\"btn btn-primary\">Back</a>";
        } else {
            echo "<table style=\"width:100%\">";
            echo "<tr><th>Read</th><th>Author</th><th>subject</th><th>time sent</th></tr>";
            foreach($messages as $row) {
                $dt = new DateTime();
                $dt->setTimestamp($row['timestamp']);
                $dt->setTimezone(new DateTimeZone('PDT'));
                $time = $dt->format('h:ia M j');
                if($row['read'] == false) {
                    echo "<tr><th>O</th>";
                } else {
                    echo "<tr><th>X</th>";
                }
            echo "<th>{$row['sender']}</th><th>{$row['subject']}</th><th>$time</th></tr>";
        }
        echo "</table>";
        }
    } else {
        echo "Error loading data.";
    }
    ?>
</div>
<?php endif; ?>
