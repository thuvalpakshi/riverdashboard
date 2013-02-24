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
<center>
<?php 
echo elgg_view("profile/icon",array('entity' => $owner, 'size' => 'large'));
?>
</center>
<div class="sidebarBox">
<h3><?php echo elgg_echo('riverdashboard:messageboard') ?></h3>
<div class="membersWrapper" align="justify">

<?php $name = '';
	if (isloggedin()) {
		$today = date('m/d');
		$dob = strtotime(get_loggedin_user()->birthday);
		$birthdate = date('m/d', $dob);
		$name = get_loggedin_user()->name;
		if ($birthdate == $today){
				echo "<span style=\"text-decoration: blink; color:red; \"><b>Welcome ".sprintf($name)."! Today is your Birthday. Many many happy returns of the day.</b></span>";
}else{
				echo "Welcome ".sprintf($name)."!";
}
	}
?>

<div class="clearfloat"></div>
</div>
</div>
