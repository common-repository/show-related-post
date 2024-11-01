<?php


//*****************  Main Title Call Back Function  ********************


function srp_main_title_enable() {

	$main_title_enable = get_option('srp_main_title_enable');

	?>

		<input type="radio" name="srp_main_title_enable" id="srp_main_title_enable" <?php if ( $main_title_enable == '1' ) echo 'checked' ; ?> value="1"><label>On</label>
		<input type="radio" name="srp_main_title_enable" id="srp_main_title_enable" <?php if ( $main_title_enable == '2' ) echo 'checked' ; ?> value="2"><label>Off</label>
	<?php
}

function srp_main_title_text() {
	?>
		<input type="text" name="srp_main_title_text" id="srp_main_title_text" value="<?php echo get_option('srp_main_title_text') ?>" style="width: 155px">
	<?php
}

function srp_main_title_color() {
	?>
		<input type="color" name="srp_main_title_color" id="srp_main_title_color" value="<?php echo get_option('srp_main_title_color') ?>" style="width: 155px">
	<?php
}

function srp_main_title_fs() {
	?>
		<input type="text" name="srp_main_title_fs" id="srp_main_title_fs" value="<?php echo get_option('srp_main_title_fs') ?>" style="width: 155px" placeholder="Exm: 20px">
	<?php
}

function srp_main_title_tx_ali() {
	?>
		<select name="srp_main_title_tx_ali" id="srp_main_title_tx_ali" style="width: 155px">

			<?php $align = get_option('srp_main_title_tx_ali'); ?>

			<option value="">Select</option>
			<option <?php if ( $align == 'left' ) echo 'selected' ; ?> value="left">Left</option>
			<option <?php if ( $align == 'right' ) echo 'selected' ; ?> value="right">Right</option>
			<option <?php if ( $align == 'center' ) echo 'selected' ; ?> value="center">Center</option>
		</select>
	<?php
}

function srp_main_title_ft_wt() {
	?>
		<select name="srp_main_title_ft_wt" id="srp_main_title_ft_wt" style="width: 155px">

			<?php $font_weight = get_option('srp_main_title_ft_wt'); ?>

			<option value="">Select</option>
			<option <?php if ( $font_weight == 'bold') echo 'selected' ; ?> value="bold">Bold</option>
			<option <?php if ( $font_weight == '300' ) echo 'selected' ; ?> value="300">300</option>
			<option <?php if ( $font_weight == '400' ) echo 'selected' ; ?> value="400">400</option>
			<option <?php if ( $font_weight == '500' ) echo 'selected' ; ?> value="500">500</option>
			<option <?php if ( $font_weight == '600' ) echo 'selected' ; ?> value="600">600</option>
			<option <?php if ( $font_weight == '700' ) echo 'selected' ; ?> value="700">700</option>
			<option <?php if ( $font_weight == '800' ) echo 'selected' ; ?> value="800">800</option>
			<option <?php if ( $font_weight == '900' ) echo 'selected' ; ?> value="900">900</option>
		</select>
	<?php
}

function srp_main_title_transform() {
	?>
		<select name="srp_main_title_transform" id="srp_main_title_transform" style="width: 155px">

			<?php $t_trns = get_option('srp_main_title_transform'); ?>

			<option value="">Select</option>
			<option <?php if ( $t_trns == 'capitalize' ) echo 'selected' ; ?> value="capitalize">Capitalize</option>
			<option <?php if ( $t_trns == 'lowercase' ) echo 'selected' ; ?> value="lowercase">Lowercase</option>
			<option <?php if ( $t_trns == 'uppercase' ) echo 'selected' ; ?> value="uppercase">Uppercase</option>
		</select>
	<?php
}

function srp_main_title_font_st() {
	?>
		<select name="srp_main_title_font_st" id="srp_main_title_font_st" style="width: 155px">

			<?php $ft_sty = get_option('srp_main_title_font_st'); ?>

			<option value="">Select</option>
			<option <?php if ( $ft_sty == 'normal' ) echo 'selected' ; ?> value="normal">Normal</option>
			<option <?php if ( $ft_sty == 'italic' ) echo 'selected' ; ?> value="italic">Italic</option>
		</select>
	<?php
}



//*****************  Post Call Back Function  ********************

function srp_post_number() {
	?>
		<input type="number" name="srp_post_number" id="srp_post_number" value="<?php echo get_option('srp_post_number') ?>" style="width: 155px" placeholder="Exm: 5"><label><b> (Number Only, "-1" = Unlimited)</b></label>
	<?php
}

function srp_post_order() {
	?>
		<select name="srp_post_order" id="srp_post_order" style="width: 155px">

			<?php $order = get_option('srp_post_order'); ?>

			<option value="">Select</option>
			<option <?php if ( $order == 'ASC' ) echo 'selected' ; ?> value="ASC">ASC</option>
			<option <?php if ( $order == 'DESC' ) echo 'selected' ; ?> value="DESC">DESC</option>
		</select>
	<?php
}

function srp_post_orderby() {
	?>
		<select name="srp_post_orderby" id="srp_post_orderby" style="width: 155px">

			<?php $orderby = get_option('srp_post_orderby'); ?>

			<option value="">Select</option>
			<option <?php if ( $orderby == 'id' ) echo 'selected' ; ?> value="id">ID</option>
			<option <?php if ( $orderby == 'title' ) echo 'selected' ; ?> value="title">Title</option>
			<option <?php if ( $orderby == 'slug' ) echo 'selected' ; ?> value="slug">Slug</option>
			<option <?php if ( $orderby == 'post_date' ) echo 'selected' ; ?> value="post_date">Post Date</option>
			<option <?php if ( $orderby == 'description' ) echo 'selected' ; ?> value="description">Description</option>
			<option <?php if ( $orderby == 'name' ) echo 'selected' ; ?> value="name">Name</option>
			<option <?php if ( $orderby == 'count' ) echo 'selected' ; ?> value="count">Count</option>
			<option <?php if ( $orderby == 'date' ) echo 'selected' ; ?> value="date">Date</option>
			<option <?php if ( $orderby == 'include' ) echo 'selected' ; ?> value="include">Include</option>
		</select>
	<?php
}




//*****************  Post Title Call Back Function  ********************

function srp_post_title_enable() {

	$main_title_enable = get_option('srp_post_title_enable');

	?>

		<input type="radio" name="srp_post_title_enable" id="srp_post_title_enable" <?php if ( $main_title_enable == '1' ) echo 'checked' ; ?> value="1"><label>On</label>
		<input type="radio" name="srp_post_title_enable" id="srp_post_title_enable" <?php if ( $main_title_enable == '2' ) echo 'checked' ; ?> value="2"><label>Off</label>
	<?php
}

function srp_post_title_color() {
	?>
		<input type="color" name="srp_post_title_color" id="srp_post_title_color" value="<?php echo get_option('srp_post_title_color') ?>" style="width: 155px">
	<?php
}

function srp_post_title_hover() {
	?>
		<input type="color" name="srp_post_title_hover" id="srp_post_title_hover" value="<?php echo get_option('srp_post_title_hover') ?>" style="width: 155px">
	<?php
}

function srp_post_title_fs() {
	?>
		<input type="text" name="srp_post_title_fs" id="srp_post_title_fs" value="<?php echo get_option('srp_post_title_fs') ?>" style="width: 155px" placeholder="Exm: 20px">
	<?php
}

function srp_post_title_transform() {
	?>
		<select name="srp_post_title_transform" id="srp_post_title_transform" style="width: 155px">

			<?php $t_trns = get_option('srp_post_title_transform'); ?>

			<option value="">Select</option>
			<option <?php if ( $t_trns == 'capitalize' ) echo 'selected' ; ?> value="capitalize">Capitalize</option>
			<option <?php if ( $t_trns == 'lowercase' ) echo 'selected' ; ?> value="lowercase">Lowercase</option>
			<option <?php if ( $t_trns == 'uppercase' ) echo 'selected' ; ?> value="uppercase">Uppercase</option>
		</select>
	<?php
}

function srp_post_title_font_wt() {
	?>
		<select name="srp_post_title_font_wt" id="srp_post_title_font_wt" style="width: 155px">

			<?php $font_weight = get_option('srp_post_title_font_wt'); ?>

			<option value="">Select</option>
			<option <?php if ( $font_weight == 'bold') echo 'selected' ; ?> value="bold">Bold</option>
			<option <?php if ( $font_weight == '300' ) echo 'selected' ; ?> value="300">300</option>
			<option <?php if ( $font_weight == '400' ) echo 'selected' ; ?> value="400">400</option>
			<option <?php if ( $font_weight == '500' ) echo 'selected' ; ?> value="500">500</option>
			<option <?php if ( $font_weight == '600' ) echo 'selected' ; ?> value="600">600</option>
			<option <?php if ( $font_weight == '700' ) echo 'selected' ; ?> value="700">700</option>
			<option <?php if ( $font_weight == '800' ) echo 'selected' ; ?> value="800">800</option>
			<option <?php if ( $font_weight == '900' ) echo 'selected' ; ?> value="900">900</option>
		</select>
	<?php
}

function srp_post_title_font_st() {
	?>
		<select name="srp_post_title_font_st" id="srp_post_title_font_st" style="width: 155px">

			<?php $ft_sty = get_option('srp_post_title_font_st'); ?>

			<option value="">Select</option>
			<option <?php if ( $ft_sty == 'normal' ) echo 'selected' ; ?> value="normal">Normal</option>
			<option <?php if ( $ft_sty == 'italic' ) echo 'selected' ; ?> value="italic">Italic</option>
		</select>
	<?php
}

function srp_post_title_deco() {
	?>
		<select name="srp_post_title_deco" id="srp_post_title_deco" style="width: 155px">

			<?php $ft_sty = get_option('srp_post_title_deco'); ?>

			<option value="">Select</option>
			<option <?php if ( $ft_sty == 'none' ) echo 'selected' ; ?> value="none">None</option>
			<option <?php if ( $ft_sty == 'underline' ) echo 'selected' ; ?> value="underline">Underline</option>
		</select>
	<?php
}

//*****************  Post Content Call Back Function  ********************


function srp_post_content_enable() {

	$main_title_enable = get_option('srp_post_content_enable');

	?>

		<input type="radio" name="srp_post_content_enable" id="srp_post_content_enable" <?php if ( $main_title_enable == '1' ) echo 'checked' ; ?> value="1"><label>On</label>
		<input type="radio" name="srp_post_content_enable" id="srp_post_content_enable" <?php if ( $main_title_enable == '2' ) echo 'checked' ; ?> value="2"><label>Off</label>
	<?php
}

function srp_post_content_color() {
	?>
		<input type="color" name="srp_post_content_color" id="srp_post_content_color" value="<?php echo get_option('srp_post_content_color') ?>" style="width: 155px">
	<?php
}

function srp_post_content_fs() {
	?>
		<input type="text" name="srp_post_content_fs" id="srp_post_content_fs" value="<?php echo get_option('srp_post_content_fs') ?>" style="width: 155px" placeholder="Exm: 20px">
	<?php
}

function srp_post_content_tx_ali() {
	?>
		<select name="srp_post_content_tx_ali" id="srp_post_content_tx_ali" style="width: 155px">

			<?php $align = get_option('srp_post_content_tx_ali'); ?>

			<option value="">Select</option>
			<option <?php if ( $align == 'left' ) echo 'selected' ; ?> value="left">Left</option>
			<option <?php if ( $align == 'right' ) echo 'selected' ; ?> value="right">Right</option>
			<option <?php if ( $align == 'center' ) echo 'selected' ; ?> value="center">Center</option>
			<option <?php if ( $align == 'justify' ) echo 'selected' ; ?> value="justify">Justify</option>
		</select>
	<?php
}

function srp_post_content_show() {
	?>
		<input type="number" name="srp_post_content_show" id="srp_post_content_show" value="<?php echo get_option('srp_post_content_show') ?>" style="width: 155px" placeholder="Exm: 50">
	<?php
}



//*****************  Author Call Back Function  ********************

function srp_author_enable() {

	$main_title_enable = get_option('srp_author_enable');

	?>

		<input type="radio" name="srp_author_enable" id="srp_author_enable" <?php if ( $main_title_enable == '1' ) echo 'checked' ; ?> value="1"><label>On</label>
		<input type="radio" name="srp_author_enable" id="srp_author_enable" <?php if ( $main_title_enable == '2' ) echo 'checked' ; ?> value="2"><label>Off</label>
	<?php
}

function srp_author_color() {
	?>
		<input type="color" name="srp_author_color" id="srp_author_color" value="<?php echo get_option('srp_author_color') ?>" style="width: 155px">
	<?php
}

function srp_author_fs() {
	?>
		<input type="text" name="srp_author_fs" id="srp_author_fs" value="<?php echo get_option('srp_author_fs') ?>" style="width: 155px" placeholder="Exm: 20px">
	<?php
}

function srp_author_image() {
	?>
		<input type="text" name="srp_author_image" id="srp_author_image" value="<?php echo get_option('srp_author_image') ?>" style="width: 155px" placeholder="Exm: 20px">
	<?php
}

function srp_comment_color() {
	?>
		<input type="color" name="srp_comment_color" id="srp_comment_color" value="<?php echo get_option('srp_comment_color') ?>" style="width: 155px">
	<?php
}

function srp_comment_fs() {
	?>
		<input type="text" name="srp_comment_fs" id="srp_comment_fs" value="<?php echo get_option('srp_comment_fs') ?>" style="width: 155px" placeholder="Exm: 20px">
	<?php
}


//*****************  Image Call Back Function  ********************

function srp_pc_image_enable() {

	$main_title_enable = get_option('srp_pc_image_enable');

	?>

		<input type="radio" name="srp_pc_image_enable" id="srp_pc_image_enable" <?php if ( $main_title_enable == '1' ) echo 'checked' ; ?> value="1"><label>On</label>
		<input type="radio" name="srp_pc_image_enable" id="srp_pc_image_enable" <?php if ( $main_title_enable == '2' ) echo 'checked' ; ?> value="2"><label>Off</label>
	<?php
}

function srp_post_content_image_w() {
	?>
		<input type="text" name="srp_post_content_image_w" id="srp_post_content_image_w" value="<?php echo get_option('srp_post_content_image_w') ?>" style="width: 155px" placeholder="Exm: 150px">
	<?php
}

function srp_post_content_image_h() {
	?>
		<input type="text" name="srp_post_content_image_h" id="srp_post_content_image_h" value="<?php echo get_option('srp_post_content_image_h') ?>" style="width: 155px" placeholder="Exm: 70px">
	<?php
}

