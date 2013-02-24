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
<h3><?php echo elgg_echo('riverdashboard:membership') ?></h3>
<div class="membersWrapper">
<?php
    $old_context = get_context();
    set_context("search");
    $count =1;
    
    $objects = list_entities_from_relationship('member',page_owner(),false,'group','',0, $count,false,false,false);

    echo $objects;
    // reset context
    set_context($old_context);
?>
<div class="clearfloat"></div>
</div>
<br /><div align="right"><b><a href="<?php echo $vars['url']; ?>pg/groups/member/<?php echo $_SESSION['user']->username; ?>"><?php echo elgg_echo('riverdashboard:viewall') ?></a></b></div>
</div>