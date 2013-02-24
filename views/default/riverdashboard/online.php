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
<h3><?php echo elgg_echo('riverdashboard:online') ?></h3>
<div class="membersWrapper">
<?php
	$count = 8;
	$onlineusers = array(
		"type" => "user",
		"limit" => $count,
		"relationship" => "member_of_site",
		"relationship_guid" => $vars["config"]->site_guid,
		"inverse_relationship" => true,
		"wheres" => array("ue.last_action >= " . (time() - 600)),
		"joins" => array("JOIN " . $vars["config"]->dbprefix . "users_entity ue ON e.guid = ue.guid"),
		"order_by" => "ue.last_action desc",
		"full_view" => false,
		"pagination" => false
	);

	$usersonline = elgg_get_entities_from_relationship($onlineusers);

		foreach($usersonline as $user){
                    echo "<div class=\"recentMember\" >";
			echo elgg_view("profile/icon", array("entity" => $user, "size" => "small"));
                    echo "</div>";
		}

?>
    <div class="clearfloat"></div>
</div>
<br /><div align="right"><b><a href="<?php echo $vars['url']; ?>mod/members/index.php?filter=active"><?php echo elgg_echo('riverdashboard:viewall') ?></a></b></div>
</div>