<?php

	/**
	 * Elgg thewire edit/add page
	 *
	 * @package ElggTheWire
	 *
	 */

		$wire_user = get_input('wire_username');
		if (!empty($wire_user)) { $msg = '@' . $wire_user . ' '; } else { $msg = ''; }

?>
<div class="post_to_wire">
<h3><?php echo elgg_echo("thewire:doing"); ?></h3>
<script>
function textCounter(field,cntfield,maxlimit) {
    // if too long...trim it!
    if (field.value.length > maxlimit) {
        field.value = field.value.substring(0, maxlimit);
    } else {
        // otherwise, update 'characters left' counter
        cntfield.value = maxlimit - field.value.length;
    }
}
</script>

	<form action="<?php echo $vars['url']; ?>action/riverdashboard/wireadd" method="post" name="noteForm">
			<?php
			    $display .= "<textarea name='note' value='' onKeyDown=\"textCounter(document.noteForm.note,document.noteForm.remLen1,140)\" onKeyUp=\"textCounter(document.noteForm.note,document.noteForm.remLen1,140)\" id=\"thewire_textarea\">{$msg}</textarea>";
                $display .= "<div class='thewire_characters_remaining'><input readonly type=\"text\" name=\"remLen1\" size=\"3\" maxlength=\"3\" value=\"140\" class=\"thewire_characters_remaining_field\">";
                echo $display;
                echo elgg_echo("thewire:charleft") . "</div>";
				echo elgg_view('input/securitytoken');
			?>
			<input type="hidden" name="method" value="site" />
			<input type="submit" value="<?php echo elgg_echo('save'); ?>" />
	</form>
</div>
<?php echo elgg_view('input/urlshortener'); ?>