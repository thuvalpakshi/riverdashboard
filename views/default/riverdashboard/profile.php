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

<div class="sidebarBox"><h3><?php echo elgg_echo('riverdashboard:riverdashboard') ?></h3>
<div class="membersWrapper"><br />
<div id="dashboard_navigation">
<ul>
<li style="border-top:1px solid #cccccc;"><a href="<?php echo $vars['url']; ?>pg/profile/<?php echo $_SESSION['user']->username; ?>/edit/"><img src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/settings.png" style="vertical-align: middle; "/> Edit Profile</a></li>
<li><a href="<?php echo $vars['url']; ?>pg/profile/<?php echo $_SESSION['user']->username; ?>/editicon/"><img src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/profile.png" style="vertical-align: middle; "/> Edit Profile Photo</a></li>
<li><a href="<?php echo $vars['url']; ?>pg/messageboard/<?php echo $_SESSION['user']->username; ?>"><img src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/questions.png" style="vertical-align: middle; "/> Message Board</a></li>

<?php
	$num_messages = count_unread_messages();
	if($num_messages){
		$num = $num_messages;
	} else {
		$num = 0;
	}
	if($num == 0){
?>

<li><a href="<?php echo $vars['url']; ?>pg/messages/<?php echo $_SESSION['user']->username; ?>"><img src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/mail.png" style="vertical-align: middle; "/> Message Inbox</a></li>
<?php } else { ?>
<li><span style="text-decoration: blink;"><a href="<?php echo $vars['url']; ?>pg/messages/<?php echo $_SESSION['user']->username; ?>"><img src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/mail.png" style="vertical-align: middle; "/><font color="red"> Message Inbox [<?php echo $num; ?>]</font></a></span></li>
<?php  }  ?>
<?php
	$user = get_loggedin_user();

        $requests = array(
			"type" => "user",
			"relationship" => "friendrequest",
			"relationship_guid" => $user->getGUID(),
			"inverse_relationship" => true,
			"count" => true
		);

	$count = elgg_get_entities_from_relationship($requests);

	if(!empty($count)){
?>
<li><span style="text-decoration: blink;"><a href="<?php echo $vars['url']; ?>pg/friend_request"><img alt=""  src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/friends.png" style="vertical-align: middle; "/><font color="red"> Friend Requests [<?php echo $count; ?>]</font></a></span></li>
<?php } else { ?>
<li><a href="<?php echo $vars['url']; ?>pg/friend_request"><img alt=""  src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/friends.png" style="vertical-align: middle; "/> Friend Requests</a></li>
<?php } ?>

<li><a href="<?php echo $vars['url']; ?>mod/invitefriends/"><img alt=""  src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/home.png" style="vertical-align: middle; "/> Invite Friends</a></li>

<li><a href="#" onclick="chat_open('<?php echo $vars['url']; ?>/pg/chat')" id="chat_open_chat_link" class="chat_open usersettings" title="Open chat"><img alt=""  src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/chat.png" style="vertical-align: middle; "/> Chat Room</a></li>

<li><a href="<?php echo $vars['url']; ?>mod/members/index.php?filter=newest"><img alt=""  src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/members.png" style="vertical-align: middle; "/> Members</a></li>

<li><a href="<?php echo $vars['url']; ?>pg/groups/22275/ask-expert/"><img alt=""  src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/askexpert.jpg" style="vertical-align: middle; "/> Ask Experts</a></li>

<li><a href="<?php echo $vars['url']; ?>pg/groups/world/"><img alt=""  src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/groups.png" style="vertical-align: middle; "/> Group Discussions</a></li>

<li><a href="<?php echo $vars['url']; ?>pg/groups/invitations/<?php echo $_SESSION['user']->username; ?>"><img alt=""  src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/help.png" style="vertical-align: middle; "/> Group Invitations</a></li>

<li><a href="<?php echo $vars['url']; ?>pg/bookmarks/<?php echo $_SESSION['user']->username; ?>/items"><img alt=""  src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/favorites.png" style="vertical-align: middle; "/> Bookmarks</a></li>

<li><a href="<?php echo $vars['url']; ?>pg/settings/user/<?php echo $_SESSION['user']->username; ?>"><img alt=""  src="<?php echo $vars['url']; ?>mod/riverdashboard/graphics/icons/task.png" style="vertical-align: middle; "/> Settings</a></li>
</ul>
</div>
<div class="clearfloat"></div>
</div>
</div>
