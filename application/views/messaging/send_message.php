<div class="container-fluid bg-3 text-left">
    <?php
    if(isset($sent)):
        switch ($sent) {
            case 1:
                echo "Message Sent.<br>";
                echo "<a href=\"" . base_url() . "index.php/messaging\" class=\"btn btn-primary\">Back to Inbox</a>";
                break;
            case -1:
                echo "User not found.<br>";
                echo "<a href=\"" . base_url() . "index.php/messaging\" class=\"btn btn-primary\">Back to Inbox</a>";
                break;
            case 0:
                echo "An unknown error occured. Please contact the administrator.";
                echo "<a href=\"" . base_url() . "index.php/messaging/send/Admin\" class=\"btn btn-primary\">Back to Inbox</a>";
                echo "<a href=\"" . base_url() . "index.php/messaging\" class=\"btn btn-primary\">Back to Inbox</a>";
                break;
        }
    else:
        if (!isset($recipient)) {
            $recipient = "";
        }
        if (!isset($subject)) {
            $subject = "";
        }
        echo form_open('messaging/send_message'); ?>
        <form>
        TO:
        <input type="text" name="recipient" value=<?php echo $recipient ?>><br>
        Subject:
        <input type="text" name="subject" value=<?php echo $subject ?>><br>
        Contents:
        <input type="text" name="contents"><br>
        <input type="submit" name="submit" value="submit"/>
        </form>
    <?php endif; ?>
</div>
