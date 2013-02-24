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

$name = '';
if (isloggedin()) {
	$name = get_loggedin_user()->name;
}

//grab the current site message
$site_message = elgg_get_entities(array('types' => 'object', 'subtypes' => 'sitemessage', 'limit' => 1));
if ($site_message) {
	$mes = $site_message[0];
	$message = $mes->description;
	$dateStamp = elgg_view_friendly_time($mes->time_created);
	$delete = elgg_view("output/confirmlink",array(
			'href' => $vars['url'] . "action/riverdashboard/delete?message_guid=" . $mes->guid,
			'text' => elgg_echo('delete'),
			'confirm' => elgg_echo('deleteconfirm'),
	));
}

?>

<div id="content_area_user_title">
	<h2><?php echo sprintf(elgg_echo('welcome:user'), $name); ?></h2>
<div id="site_messages">
        <?php

	//if there is a site message
	if ($site_message) {

		echo "<h3>" . elgg_echo("sitemessages:announcements") . "</h3>";
		echo "<p><small>" . elgg_echo("sitemessages:posted") . ": " . $dateStamp;
		//if admin display the delete link
		if (isadminloggedin()) {
			echo " " . $delete . " ";
		}
		echo "</small></p>";
		//display the message
		echo "<div style='border-top:1px solid black; padding:5px 2px 2px 2px; text-align:justify;'>" . $message . "</div>";

		//display the input form to add a new message
		if (isadminloggedin()) {
			//action
			$action = "riverdashboard/add";
			$link = elgg_echo("sitemessages:add");
			$input_area = elgg_view('input/plaintext', array('internalname' => 'sitemessage', 'value' => ''));
			$submit_input = elgg_view('input/submit', array('internalname' => 'submit', 'value' => elgg_echo('save')));
			$form_body = <<<EOT

			<p><a class="collapsibleboxlink">{$link}</a></p>
			<div class="collapsible_box">
					{$input_area}<br />{$submit_input}
			</div>

EOT;
			//display the form
			echo elgg_view('input/form', array('action' => "{$vars['url']}action/$action", 'body' => $form_body));
		}//end of admin if statement

		//if there is no message, add a form to create one
	} else {

		if (isadminloggedin()) {

			//action
			$action = "riverdashboard/add";
			$link = elgg_echo("sitemessages:add");
			$input_area = elgg_view('input/text', array('internalname' => 'sitemessage', 'value' => ''));
			$submit_input = elgg_view('input/submit', array('internalname' => 'submit', 'value' => elgg_echo('save')));
			$form_body = <<<EOT

			<p><a class="collapsibleboxlink">{$link}</a></p>
			<div class="collapsible_box">
					{$input_area}<br />{$submit_input}
			</div>
EOT;
			//display the form
			echo elgg_view('input/form', array('action' => "{$vars['url']}action/$action", 'body' => $form_body));

		}//end of admin check
	}//end of main if
?>

</div>

<?php
		//add form
		if (isloggedin()) {
			//$area2 .= elgg_view("thewire/forms/add");
			$area2 .= elgg_view("riverdashboard/forms/wireadd");
		}

	    echo elgg_view_layout("three_column_maincontent", '', $area2);
?>
</div>