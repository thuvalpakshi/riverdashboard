<?php

/**
 * Elgg riverdashboard CSS
 * 
 * @package ElggRiverDash
 */

?>
.sidebarBox #thewire_sidebarInputBox {
	width:178px;
}
.sidebarBox .last_wirepost {
	margin:20px 0 20px 0;
}
.sidebarBox .last_wirepost .thewire-singlepage {
	margin:0;
}
.sidebarBox .last_wirepost .thewire-singlepage .thewire_options {
	display:none;
}
.sidebarBox .last_wirepost .thewire-singlepage .note_date {
	line-height: 1em;
	padding:3px 0 0 0;
	width:142px;
}
.sidebarBox .last_wirepost .thewire-singlepage .note_body {
	color:#666666;
	line-height: 1.2em;
}
.sidebarBox .last_wirepost .thewire-singlepage .thewire-post {
	background-position: 130px bottom;
}
.sidebarBox .thewire_characters_remaining {
	float:right;
}
.sidebarBox input.thewire_characters_remaining_field {
	background: #dedede;
}
.sidebarBox input.thewire_characters_remaining_field:focus {
	background: #dedede;
	border:none;
}
.sidebarBox input#thewire_submit_button {
	margin:2px 0 0 0;
	padding:2px 2px 1px 2px;
	height:auto;
}
.sidebarBox .membersWrapper {
	background: white;
	-webkit-border-radius: 8px; 
	-moz-border-radius: 8px;
	padding:7px;	
}
.sidebarBox .membersWrapper .recentMember {
	margin:2px;
	float:left;
}
.sidebarBox .membersWrapper .recentMember .usericon img {
	width:25px;
	/* height:25px; */
}
/* br necessary for ie6 & 7 */
.sidebarBox .membersWrapper br {
	height:0;
	line-height:0;
}
.welcomemessage {
	background:white;
}
.riverdashboard_filtermenu {
	margin:10px 0 10px 0;
}

.river_pagination .forward,
.river_pagination .back {
	display:block;
	float:left;
	border:1px solid #cccccc;
	color:#4690d6;
	text-align: center;
	font-size: 12px;
	font-weight: normal;
	margin:0 6px 0 0;
	padding:0 4px 1px 4px;
	cursor: pointer;
	-webkit-border-radius: 4px; 
	-moz-border-radius: 4px;
}
.river_pagination .forward:hover,
.river_pagination .back:hover {
	background:#4690d6;
	color:white;
	text-decoration: none;
	border:1px solid #4690d6;
}
.river_pagination .back {
	margin:0 20px 0 0;
}
/* IE6 */
* html .river_pagination { margin-top:17px; }
/* IE7 */
*:first-child+html .river_pagination { margin-top:17px; }

/* activity widget */
.collapsable_box_content .river_item p {
	color:#333333;
}

.collapsable_box_content .content_area_user_title h2 {
	font-size:1.25em;
	line-height:1.2em;
	margin:0;
	padding:0 0 2px 0;
	color:#4690d6;
}
.river_content img {
	margin:2px 0 2px 20px;
}

.river_content_display {
	border-left:1px solid #ddd;
	padding:10px 10px 0 10px;
	font-size:100%;
	margin:4px 0 2px 30px;
}

.river_content_display p {
	padding:0;
	margin:0;
}

.following_icon {
	width:20px;
	height:40px;
	margin:0 2px 0 2px;
	background: url(<?php echo $vars['url']; ?>mod/riverdashboard/graphics/follow_icon.png) no-repeat left top;
}
.river_content_display div.usericon a.icon img {
	width:40px;
	height:40px;
}


/* Added By Me */

#dashboard_navigation {
	margin-top:20px;
    width:100%;
    font-size:12px;
}
#dashboard_navigation ul {
	margin:0 0 15px 0;
    padding:0;
}
#dashboard_navigation ul li {
	list-style:none;
	float:none;
	padding:5px;
    font-weight:bold;
    border-bottom:1px solid #cccccc;
    text-decoration:none;
}
#dashboard_navigation ul li:hover {
	background:#E5F6FF;
}

#dashboard_navigation ul li a {
    font-weight:bold;
    text-decoration:none;
}

#site_messages {
	background:#ccffcc;
	color:#000000;
	padding:10px;
	margin:10px;
	width:440px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
        border-radius: 8px;
	border:2px solid #00CC00;
}

/* wire form */
textarea#thewire_textarea {
	width: 435px;
	height: 40px;
	padding: 6px;
	font-family: Arial, 'Trebuchet MS','Lucida Grande', sans-serif;
	font-size: 100%;
	color:#666666;
}
/* IE 6 fix */
* html textarea#thewire_textarea {
	width: 435px;
}

/* canvas layout: 3 column right sidebar */
#three_column_right_sidebar {
	width:210px;
	margin:0 20px 0 0;
	min-height:360px;
	float:right;
	background: #dedede;
	padding:0px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-bottom:1px solid #cccccc;
	border-right:1px solid #cccccc;
}

#three_column_right_sidebar_boxes {
	width:210px;
	margin:0px 0 20px 0px;
	min-height:360px;
	float:right;
	padding:0;
}
#three_column_right_sidebar_boxes .sidebarBox {
	margin:0px 0 22px 0;
	background: #dedede;
	padding:4px 10px 10px 10px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-bottom:1px solid #cccccc;
	border-right:1px solid #cccccc;
}

#three_column_right_sidebar_boxes .sidebarBox h3 {
	padding:0 0 5px 0;
	font-size:1.25em;
	line-height:1.2em;
	color:#0054A7;
}

/* canvas layout: 3 column left sidebar */
#three_column_left_sidebar {
	width:210px;
	margin:0 20px 0 0;
	min-height:360px;
	float:left;
	background: #dedede;
	padding:0px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-bottom:1px solid #cccccc;
	border-right:1px solid #cccccc;
}

#three_column_maincontent {
	width:489px;
	margin:0px 20px;
	min-height: 360px;
	float:left;
	background: #dedede;
	padding:0 0 5px 0;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
}



#three_column_maincontent_boxes {
	margin:0 0px 20px 20px;
	padding:0 0 5px 0;
	width:489px;
	background: #dedede;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	float:left;
}
#three_column_left_sidebar_boxes {
	width:210px;
	margin:0px 0 20px 0px;
	min-height:360px;
	float:left;
	padding:0;
}
#three_column_left_sidebar_boxes .sidebarBox {
	margin:0px 0 22px 0;
	background: #dedede;
	padding:4px 10px 10px 10px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-bottom:1px solid #cccccc;
	border-right:1px solid #cccccc;
}
#three_column_left_sidebar_boxes .sidebarBox h3 {
	padding:0 0 5px 0;
	font-size:1.25em;
	line-height:1.2em;
	color:#0054A7;
}

.wire-post {
	background: #bbdaf7;
	-webkit-border-radius: 0px 0px 8px 8px;
	-moz-border-radius: 0px 0px 8px 8px;
        border:1px solid #cccccc;
        margin:-18px 0 0 30px;
        padding:5px 5px;
}

.sidebarBox br {
	height:0px;
	line-height:7px;
}