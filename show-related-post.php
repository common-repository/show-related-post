<?php

/*
Plugin Name: Show Related Post
Author: Mehedi Hasan Kanon
Author URI: http://mhkanon.com
Description: This is a Show Related Post plugin. You can show your related post easiest way. Just active and go to sleep. It will automatically display all related post below the single post.
Text Domain: show_related_post
Domain Path: /languages
Version: 1.0.9
Stable tag: 1.0.9
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/



/*=======================================================
					Show Related Post
=========================================================*/


require_once plugin_dir_path( __FILE__ ) .'srp_menu.php';
require_once plugin_dir_path( __FILE__ ) .'srp_fields.php';
require_once plugin_dir_path( __FILE__ ) .'srp_style.php';


class srp_reg {

	public function __construct() {
		add_filter( 'the_content',  array( $this, 'srp_main') );
		add_action( 'wp_enqueue_scripts', array( $this, 'srp_script') );
	}


	public function srp_script() {
		wp_enqueue_style( 'srp_style', plugins_url( 'assets/css/srp_style.css', __FILE__ ) );
	}	


	public function srp_main($default) {

		if(is_single()) {

			$srp_category_post = get_the_terms(get_the_ID(),'category');

				$srp_category_post_in = array();

				foreach ($srp_category_post as $term) {
					$srp_category_post_in[] = $term->term_id;
				}

			$srp_post_number = get_option('srp_post_number');
			$srp_post_orderby = get_option('srp_post_orderby');
			$srp_post_order = get_option('srp_post_order');

			if($srp_post_number == ''){
				$srp_post_number = '5';
			}else{
				$srp_post_number = $srp_post_number;
			}

			if($srp_post_orderby == ''){
				$srp_post_orderby = 'date';
			}else{
				$srp_post_orderby = $srp_post_orderby;
			}

			if($srp_post_order == ''){
				$srp_post_order = 'DESC';
			}else{
				$srp_post_order = $srp_post_order;
			}

			$srp_related_post = new WP_Query(array(

				'post_type'      => 'post',
				'category__in'   => $srp_category_post_in,
				'post__not_in'   => array(get_the_ID()),
				'posts_per_page' => $srp_post_number,
				'orderby'        => $srp_post_orderby,
				'order'          => $srp_post_order
			
			));

			$srp_post = $srp_related_post->have_posts();


			// Show/Hide Reated Post
			$main_title_enable = get_option('srp_main_title_enable');		
			$srp_post_title_enable = get_option('srp_post_title_enable');
			$srp_post_content_enable = get_option('srp_post_content_enable');
			$srp_author_enable = get_option('srp_author_enable');
			$srp_pc_image_enable = get_option('srp_pc_image_enable');
			

			if($main_title_enable == ''){
				$main_title_enable = '1';
			}else{
				$main_title_enable = $main_title_enable;
			}

			if($srp_post_title_enable == ''){
				$srp_post_title_enable = '1';
			}else{
				$srp_post_title_enable = $srp_post_title_enable;
			}

			if($srp_post_content_enable == ''){
				$srp_post_content_enable = '1';
			}else{
				$srp_post_content_enable = $srp_post_content_enable;
			}

			if($srp_author_enable == ''){
				$srp_author_enable = '1';
			}else{
				$srp_author_enable = $srp_author_enable;
			}

			if($srp_pc_image_enable == ''){
				$srp_pc_image_enable = '1';
			}else{
				$srp_pc_image_enable = $srp_pc_image_enable;
			}

			if(get_option('srp_post_content_show') == ''){
				$srp_post_content_show = '120';
			}else{
				$srp_post_content_show = get_option('srp_post_content_show');
			}

			if(get_option('srp_main_title_text') == ''){
				$srp_main_title_text = 'Related Post';
			}else{
				$srp_main_title_text = get_option('srp_main_title_text');
			}

			// Show Category
			$categories = get_the_category();

			if ( ! empty( $categories ) ) {
			    $cat_show = esc_html( $categories[0]->name );
			}

			if($main_title_enable == '1'){

				if(!$srp_post == '') {
					$default .= "<h2 class ='srp_main_title'>$srp_main_title_text</h2>";
				}
			}			


			while($srp_related_post->have_posts()):$srp_related_post->the_post();


				// Veriable Declear
				$srp_post_link = get_the_permalink();

				$srp_trim_content = wp_trim_words( get_the_content(), $srp_post_content_show,'<a class="srp_post_content" href="'.get_permalink().'"> .....Read More</a>');

				$srp_blog_post_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');

				$srp_post_image = plugins_url( 'assets/img/img1.png', __FILE__ );


				// Show Content
				$default .= "<ul class='srp_ul_class'>";

				if($srp_post_title_enable == '1'){

					$default .= "<h4><li class='srp_post_li'><a class='srp_post_title' href='$srp_post_link'>".get_the_title()."</a></li></h4>";
				}

				if($srp_pc_image_enable == '1'){

					if ( has_post_thumbnail() ) {
					$default .= "<img class='srp_post_image_size' src='$srp_blog_post_image[0]' >";
					}else{
						$default .= "<img class='srp_post_image_size' src='$srp_post_image' alt='No Image'>";
					}
				}
				

				if($srp_post_content_enable == '1'){

					$default .= "<p class='srp_blog_post_content'>".$srp_trim_content."</p>";
				}

				if($srp_author_enable == '1'){

					$default .= "<div class='srp_related_post_main'><img class='srp_related_post_img' src=".get_avatar_url(get_the_author_meta('ID'))." alt='img'><span class='srp_author'>".get_the_author()."</span><span class='srp_related_post_comment'>Comments( ".get_comments_number('0', '1', '%')." )&nbsp </span></div>";
				}
				

				$default .= "</ul>";
				// End Content
				
			endwhile;
			

			// Style Include from srp_style.php
			srp_style();


			wp_reset_postdata();

			return $default;

		}else {

			return $default;
		}

	}

}


new srp_reg();