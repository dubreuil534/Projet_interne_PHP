<?php require_once "_defines.php";
require_once "view_part/_page_base.php";
$site_data[PAGE_ID] = "dashboard";
require_once "db/_talkmsg_data.php";
?>
<ul>
    <li class="tmsg_cont" style="background-color:"<?php echo $talk_msg_data[0] ?>>
    <div class="tmsg_head">
        <span class="tmsg_time"><?php echo $talk_msg_data[1] </span>
        <span class="tmsg_username"><?php echo $talk_msg_data[1]</span>
</div>
<class>

