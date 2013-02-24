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
<h3><?php echo elgg_echo('riverdashboard:recentmembers') ?></h3>
<div class="membersWrapper">
    <?php
        $newest_members = elgg_get_entities_from_metadata(array('metadata_names' => 'icontime', 'types' => 'user', 'limit' => 18));
        foreach($newest_members as $mem) {
            echo "<div class=\"recentMember\">" . elgg_view("profile/icon", array('entity' => $mem, 'size' => 'tiny')) . "</div>";
        }
    ?>
    <div class="clearfloat"></div>
</div>
<br /><div align="right"><b><a href="<?php echo $vars['url']; ?>mod/members/"><?php echo elgg_echo('riverdashboard:viewall') ?></a></b></div>
</div>