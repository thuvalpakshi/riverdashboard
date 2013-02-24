<?php
/**
 * Elgg 2 column left sidebar with boxes
 *
 * @package Elgg
 * @subpackage Core
 */
?>

<!-- left sidebar -->
<div id="three_column_left_sidebar_boxes">

	<?php if (isset($vars['area1'])) echo $vars['area1']; ?>

</div><!-- /three__column_left_sidebar -->

<div id="three_column_maincontent">

<?php if (isset($vars['area2'])) echo $vars['area2']; ?>

</div><!-- /three__column_left_sidebar_maincontent -->

<!-- right sidebar -->
<div id="three_column_right_sidebar_boxes">

	<?php if (isset($vars['area3'])) echo $vars['area3']; ?>

</div><!-- /three__column_right_sidebar -->

<!-- main content -->
