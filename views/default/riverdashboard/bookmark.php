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
<h3><?php echo elgg_echo('riverdashboard:bookmark') ?></h3>
<div class="membersWrapper">

<?php

	// backup context and set
	$old_context = get_context();
	set_context("search");

	// get widget settings
	$count = 1;

	$bookmarks = array(
		"type" => "object",
		"subtype" => "bookmarks",
		"limit" => $count,
		"full_view" => false,
		"pagination" => false,
		"view_type_toggle" => false
	);
	
		echo elgg_list_entities($bookmarks);

	// reset context
	set_context($old_context);
?>
  
    <div class="clearfloat"></div>
</div>
<br /><div align="right"><b><a href="<?php echo $vars['url']; ?>mod/bookmarks/everyone.php"><?php echo elgg_echo('riverdashboard:viewall') ?></a></b></div>
</div>