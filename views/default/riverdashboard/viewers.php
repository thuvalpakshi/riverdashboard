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
<h3><?php echo elgg_echo('riverdashboard:visitors') ?></h3>
<div class="membersWrapper">
<?php
if(is_plugin_enabled('izap-profile-visitors')){
$MaxVistors = 18;
$VisitorArray = izapVisitorList();
$VisitorArray = array_slice($VisitorArray, 0, $MaxVistors);
$TotalVisitor = count($VisitorArray);
$online = find_active_users();
foreach ($online as $key => $entity) {
    $onlineUsers[] = $entity->guid;
}
if($TotalVisitor)
{
	foreach($VisitorArray as $VisitorGuid)
	{
		$VisitorEntity = get_entity($VisitorGuid);
		$icon = elgg_view("profile/icon", array('entity' => $VisitorEntity,'size' => 'tiny'));

        if(in_array($VisitorGuid, $onlineUsers))
            $Visitors .= '<div class="recentMember">' . $icon . '</div>';
        else
            $Visitors .= '<div class="recentMember">' . $icon . '</div>';
	}
}
else
{
	$Visitors .= '<div align="center"><h3>' . elgg_echo('izapProfileVisitor:NoVisits') . '</h3></div>';
}


	$current_count = get_loggedin_user()->getAnnotations("profilecount");

	if(!$current_count){
		$current_count = 0;
	} else {
		$current_count = $current_count[0]->value;
	}
}else{
    echo 'izaps profile visitor pluggin not enabled';
}
?>
<div class="izapMargin"><?php echo $Visitors;?>
    <div style="clear:both"></div>
</div>

<div class="clearfloat"></div>
</div>
<br /><b>Total Visitors : <?php echo $current_count ?></b>
</div>