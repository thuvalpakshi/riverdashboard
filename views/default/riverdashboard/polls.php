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
<h3><?php echo elgg_echo('riverdashboard:polls') ?></h3>
<div class="membersWrapper">
         <?php
    		$polls = get_entities('object','poll',0,'time_created desc',1,$offset,false,0);
		$count = get_entities('object','poll',0,'time_created desc',1,0,true);
		set_context('search');
		$mypolls .= elgg_view_entity_list($polls,$count,$offset,1,false,false,false);
		echo $mypolls;

?>
    <div class="clearfloat"></div>
</div>
<br /><div align="right"><b><a href="<?php echo $vars['url']; ?>pg/polls/all"><?php echo elgg_echo('riverdashboard:viewall') ?></a></b></div>
</div>