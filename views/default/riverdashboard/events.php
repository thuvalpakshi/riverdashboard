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
<h3><?php echo elgg_echo('riverdashboard:events') ?></h3>
<div class="membersWrapper">
<marquee direction="up" scrollamount="1" scrolldelay="70" height="153" onmouseover="stop()" onmouseout="start()" style="overflow:hidden;">
<?php
if(is_plugin_enabled('event_calendar')){

        $object_type ='event_calendar';
	$widget_group = $vars["entity"]->widget_group;
	if (!isset($widget_group))
	    $widget_group = 0;

	$site_categories = $vars['config']->site->categories;
	$widget_categorie = $vars['entity']->widget_categorie;
	$widget_context_mode = $vars['entity']->widget_context_mode;
	if (!isset($widget_context_mode))
	    $widget_context_mode = 'search';
	set_context($widget_context_mode);

	if ( $site_categories ==NULL || $widget_categorie==NULL ){
	    //$widgtet_datas = list_entities('object',$object_type,$widget_group,10,false, false, false);
		$events = event_calendar_get_personal_events_for_user(0,$num_items);
	// If there are any events to view, view them
		if (is_array($events) && sizeof($events) > 0) {
		foreach($events as $event) {
		echo elgg_view("object/event_calendar",array('entity' => $event));
		}

    }
	}else{
	  	 $widgtet_datas = list_entities_from_metadata('universal_categories', $widget_categorie, 'object', $object_type, $widget_group, $num_items, false, false,false);
	}

}else {   echo 'Event Calender is not enabled';
        }
?>
</marquee>
<div class="clearfloat"></div>
</div>
<br /><div align="right"><b><a href="<?php echo $vars['url']; ?>pg/event_calendar/"><?php echo elgg_echo('riverdashboard:viewall') ?></a></b></div>
</div>
