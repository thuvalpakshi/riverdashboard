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
<h3><?php echo elgg_echo('riverdashboard:newgroups') ?></h3>
<div class="membersWrapper">
<?php
    $count =1;

    $objects = elgg_list_entities(array(type => 'group', 'limit' => $count, 'full_view' => FALSE, 'view_type_toggle' => FALSE, 'pagination' => FALSE));

    echo $objects;
?>
<div class="clearfloat"></div>
</div>
<br /><div align="right"><b><a href="<?php echo $vars['url']; ?>pg/groups/all/?filter=alfa"><?php echo elgg_echo('riverdashboard:viewall') ?></a></b></div>
</div>