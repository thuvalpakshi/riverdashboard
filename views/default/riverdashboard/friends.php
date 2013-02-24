<?php
	/**
	 * 3 Column River Dashboard
	 *
	 * @package ElggRiverDash
	 * Full Creadit goes to ELGG Core Team for creating a beautiful social networking script
	 *
	 * @author ColdTrick IT Solutions
	 * @copyright Coldtrick IT Solutions 2009
	 * @link http://www.coldtrick.com/
	 * @version 1.0
	 */

?>

<div class="sidebarBox">
<h3><?php echo elgg_echo('friends') ?></h3>
<div class="membersWrapper">
        <?php
        $user = get_loggedin_user();
        $num = 18;
        $friends =  $user->getFriends("", $num);
        if (is_array($friends) && sizeof($friends) > 0) {
        foreach($friends as $friend) {
        echo "<div class=\"recentMember\" >";
        echo elgg_view("profile/icon", array('entity' => get_user($friend->guid), 'size' => "tiny"));
        //echo $entity->name;
        echo "</div>";
        }
        }
        ?>
    <div class="clearfloat"></div>
</div>
<br /><div align="right"><b><a href="<?php echo $vars['url']; ?>pg/friends/<?php echo $_SESSION['user']->username; ?>"><?php echo elgg_echo('riverdashboard:viewall') ?></a></b></div>
</div>