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
<h3><?php echo elgg_echo('riverdashboard:questions') ?></h3>
<div class="membersWrapper">
<?php
    $num =1;

    $options =  array(
		'type' => 'object',
		'subtype' => 'question',
		'limit' => $num,
		'pagination' => FALSE
	);

echo elgg_list_entities($options);
?>
<div class="clearfloat"></div>
</div>
<br /><div align="right"><b><a href="<?php echo $vars['url']; ?>pg/answers/world/"><?php echo elgg_echo('riverdashboard:viewall') ?></a></b></div>
</div>