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
<h3><?php echo elgg_echo('riverdashboard:youmayknow') ?></h3>
<div class="membersWrapper">
<?php
if(is_plugin_enabled('people_from_the_neighborhood')){
$people = people_from_the_neighborhood_get_people(get_loggedin_userid(), 1, $groups);
echo elgg_view('people_from_the_neighborhood/people', array('people' => $people));
}else{
    echo "people from the neighborhood pluggin is not enabled";
}
?>
    <div class="clearfloat"></div>
</div>
<br /><div align="right"><b><a href="<?php echo $vars['url']; ?>pg/pftn"><?php echo elgg_echo('riverdashboard:viewall') ?></a></b></div>
</div>