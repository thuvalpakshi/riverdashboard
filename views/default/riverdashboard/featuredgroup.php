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
<h3><?php echo elgg_echo('riverdashboard:featured') ?></h3>
<div class="membersWrapper">
<?php
//$featured_groups = elgg_get_entities_from_metadata(array('metadata_name' => 'featured_group', 'metadata_value' => 'yes', 'types' => 'group', 'limit' => ''));
?>
    <?php

		$count = 1;

	// backup context and set
	$old_context = get_context();
	set_context("search");

	$featured_groups = array(
		"type" => "group",
                "metadata_name" => "featured_group",
                "metadata_value" => "yes",
		"limit" => $count,
		"full_view" => false,
		"pagination" => false,
		"view_type_toggle" => false
	);


	echo elgg_list_entities_from_metadata($featured_groups);

	// reset context
	set_context($old_context);
?>



<div class="clearfloat"></div>
</div>
<br /><div align="right"><b><a href="<?php echo $vars['url']; ?>pg/groups/all/?filter=newest"><?php echo elgg_echo('riverdashboard:viewall') ?></a></b></div>
</div>