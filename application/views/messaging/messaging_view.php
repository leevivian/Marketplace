<div class="container-fluid bg-3 text-left">
    <a href="<?php echo base_url() ?>/index.php/messaging/send" class="btn btn-primary" style="float: right;">Send Message</a>
    <h2 style="text-decoration: underline">Inbox</h2>
    <?php
    if(isset($message)) {
        echo "<table style=\"width:100%\"";
            echo "<tr><th>Author</th><th>Subject</th><th>Contents</th></tr>";
            foreach($message as $row) {
            echo "<tr><th>{$row['sender']}</th><th>{$row['subject']}</th><th>{$row['contents']}</th></tr>";
            }
            echo "</table>";
            echo "<a href=\"".base_url()."index.php/messaging\" class=\"btn btn-primary\">Back</a>";
    } else if(isset($messages)) {
            echo "<table style=\"width:100%\">";
            echo "<tr><th>Read</th><th>Author</th><th>subject</th><th>time sent</th></tr>";
            foreach($messages as $row) {
                $dt = new DateTime();
                $dt->setTimestamp($row['timestamp']);
                $dt->setTimezone(new DateTimeZone('America/Los_Angeles'));
                $time = $dt->format('h:ia M j');
                if($row['read'] == false) {
                    echo "<tr><th><a href='messaging/open/{$row['messageid']}'>O</a></th>";
                } else {
                    echo "<tr><th><a href='messaging/open/{$row['messageid']}'>X</a></th>";
                }
            echo "<th><a href='messaging/open/{$row['messageid']}'>{$row['sender']}</a></th>"
            . "<th><a href='messaging/open/{$row['messageid']}'>{$row['subject']}</a></th>"
            . "<th><a href='messaging/open/{$row['messageid']}'>$time</a></th></tr>";
        }
        echo "</table>";
    } else {
        echo "Error loading data.";
    }
    ?>
</div>
