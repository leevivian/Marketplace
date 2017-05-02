<div class="container-fluid bg-3 text-left">
    <?php
    if (isset($sent)) {
        echo "Message Sent.";
        echo "<a href=\"".base_url()."index.php/messaging\" class=\"btn btn-primary\">Back to Inbox</a>";
        
    } else {
        echo form_open('messaging/send_message');
        echo "<form>";
        echo "TO:";
        echo "<input type=\"text\" name=\"recipient\" value=$recipient><br>";
        echo "Subject:";
        echo "<input type=\"text\" name=\"subject\" value=$subject><br>";
        echo "Contents:";
        echo "<input type=\"text\" name=\"contents\"><br>";
        echo "<input type=\"submit\" name=\"submit\" value=\"submit\"/>";
        echo "</form>";
    }
    ?>
</div>