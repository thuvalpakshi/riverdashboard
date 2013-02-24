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


        $today = date('m/d');
	$tomorrow = date('m/d',mktime(0, 0, 0, date("m"), date("d")+1, 0));
	$upcoming = date('m/d',mktime(0, 0, 0, date("m"), date("d")+14, 0));

	$month = date('m');
	$this_month = date('m/d',mktime(0, 0, 0, date("m"), 0, 0));
	$next_month = date('m/d',mktime(0, 0, 0, date("m")+1, 0, 0));

	//$tomorrow = date('m/d',mktime(0, 0, 0, date("m")  , date("d")+1, date("Y")));
	//$upcoming = date('m/d',mktime(0, 0, 0, date("m")  , date("d")+14, date("Y")));


        $members =  elgg_get_entities_from_metadata(array('metadata_names' => 'birthday', 'types' => 'user', 'limit' => 0));

	$dob_today = array();
	$dob_tomorrow = array();
	$dob_upcoming = array();
	$dob_this_month = array();
	$dob_next_month = array();

	foreach ($members as $mem){
		$dob = strtotime($mem->birthday);
		$birthdate = date('m/d', $dob);
		$month = date('m', $dob);

                  	if ($birthdate == $today){
			$dob_today[] = $mem;
			}else if ($birthdate == $tomorrow){
			$dob_tomorrow[] = $mem;
			}else if (($birthdate > $tomorrow) && ($birthdate <= $upcoming)){
			$dob_upcoming[] = $mem;
			}
		}

?>
<div class="sidebarBox">
<h3><?php echo elgg_echo('riverdashboard:today') ?></h3>
<div class="membersWrapper">

<?php
	foreach($dob_today as $mem){
                    echo "<div class=\"recentMember\" >";
			echo elgg_view("profile/icon", array("entity" => $mem, "size" => "tiny"));
                    echo "</div>";
	}
?>
<div class="clearfloat"></div>
</div>
<h3><?php echo elgg_echo('riverdashboard:tomorrow') ?></h3>
<div class="membersWrapper">

<?php
	foreach($dob_tomorrow as $mem){
		    echo "<div class=\"recentMember\" >";
			echo elgg_view("profile/icon", array("entity" => $mem, "size" => "tiny"));
                    echo "</div>";
	}
?>
<div class="clearfloat"></div>
</div>
<h3><?php echo elgg_echo('riverdashboard:upcoming') ?></h3>
<div class="membersWrapper">
<?php
	foreach($dob_upcoming as $mem){
                    echo "<div class=\"recentMember\" >";
			echo elgg_view("profile/icon", array("entity" => $mem, "size" => "tiny"));
			echo "</div>";
	}
?>
<div class="clearfloat"></div>
</div>
</div>