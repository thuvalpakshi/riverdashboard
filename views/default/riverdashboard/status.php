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
<h3><?php print(Date("d, F Y")); ?></h3>
<div class="membersWrapper">
    <?php
echo "<div align='justify'>";
$users = get_number_users();
$total = get_number_users(true);
$start = "September 17, 2011";
$text = "have passed since the debut of our Anushakti Nagar Social Networking Site and has ";
$now = strtotime ("now");
$then = strtotime ("$start");
$difference = $now - $then ;
$num = $difference/86400;
$days = intval($num);
$num2 = ($num - $days)*24;
$hours = intval($num2);
$num3 = ($num2 - $hours)*60;
$mins = intval($num3);
$num4 = ($num3 - $mins)*60;
$secs = intval($num4);
echo "<b>1 Year, ".$days." days, ".$hours." hours, ".$mins." minutes and ".$secs." seconds</b> ".$text."<b>".$users."</b> active users and total members of this site till now is <b>".$total."</b>." ;
echo "</div>";
    ?>
<div class="clearfloat"></div>
</div>
<br /><div align="right"><b><a href="<?php echo $vars['url']; ?>mod/invitefriends/"><?php echo elgg_echo('riverdashboard:invite') ?></a></b></div>
</div>