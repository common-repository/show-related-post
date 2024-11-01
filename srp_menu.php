<?php

add_action( 'admin_menu', 'srp_menu_register' );

function srp_menu_register() {

	add_menu_page (
		'Show Related Post Options',  	  // Page Title
		'Show Related Post',              // Menu Title
		'manage_options',                 // Capability
		'show-related-post-options',      // Menu Slug
		'srp_all_fields_show',		  	  // Call back Function            
		'dashicons-media-document',       // Icon
		'7'                               // Positions
	);
}


// SRP Callback Function
function srp_all_fields() {


	//*****************  Main Title Section  ********************

	add_settings_section(
		'spr_section0',					// ID of section
		'Main Title Style',				// Title
		null,							// Call Back Function
		'srp-main-title-options'		// Page
	);

	add_settings_field(
		'srp_main_title_enable',		// ID
		'Enable',						// Title
		'srp_main_title_enable',		// Call Back Function
		'srp-main-title-options',		// page
		'spr_section0'					// Section
	);

	add_settings_field(
		'srp_main_title_text',			// ID
		'Main Title Text',				// Title
		'srp_main_title_text',			// Call Back Function
		'srp-main-title-options',		// page
		'spr_section0'					// Section
	);

	add_settings_field(
		'srp_main_title_color',			// ID
		'Title Color',					// Title
		'srp_main_title_color',			// Call Back Function
		'srp-main-title-options',		// page
		'spr_section0'					// Section
	);

	add_settings_field(
		'srp_main_title_fs',			// ID
		'Font Size',					// Title
		'srp_main_title_fs',			// Call Back Function
		'srp-main-title-options',		// page
		'spr_section0'					// Section
	);

	add_settings_field(
		'srp_main_title_tx_ali',		// ID
		'Text Align',					// Title
		'srp_main_title_tx_ali',		// Call Back Function
		'srp-main-title-options',		// page
		'spr_section0'					// Section
	);

	add_settings_field(
		'srp_main_title_ft_wt',			// ID
		'Font weight',					// Title
		'srp_main_title_ft_wt',			// Call Back Function
		'srp-main-title-options',		// page
		'spr_section0'					// Section
	);

	add_settings_field(
		'srp_main_title_transform',		// ID
		'Text Transform',				// Title
		'srp_main_title_transform',		// Call Back Function
		'srp-main-title-options',		// page
		'spr_section0'					// Section
	);

	add_settings_field(
		'srp_main_title_font_st',		// ID
		'Font Style',					// Title
		'srp_main_title_font_st',		// Call Back Function
		'srp-main-title-options',		// page
		'spr_section0'					// Section
	);


	register_setting('spr_section0','srp_main_title_enable');
	register_setting('spr_section0','srp_main_title_text');
	register_setting('spr_section0','srp_main_title_color');
	register_setting('spr_section0','srp_main_title_fs');
	register_setting('spr_section0','srp_main_title_tx_ali');
	register_setting('spr_section0','srp_main_title_ft_wt');
	register_setting('spr_section0','srp_main_title_transform');
	register_setting('spr_section0','srp_main_title_font_st');



		//*****************  Post Section  ********************
	
	add_settings_section(
		'spr_section5',					// ID of section
		'Post Control',					// Title
		null,							// Call Back Function
		'srp-post-options'				// Page
	);

	add_settings_field(
		'srp_post_number',				// ID
		'Post Display',					// Title
		'srp_post_number',				// Call Back Function
		'srp-post-options',				// page
		'spr_section5'					// Section
	);

	add_settings_field(
		'srp_post_orderby',				// ID
		'Orderby',						// Title
		'srp_post_orderby',				// Call Back Function
		'srp-post-options',				// page
		'spr_section5'					// Section
	);

	add_settings_field(
		'srp_post_order',				// ID
		'Order',						// Title
		'srp_post_order',				// Call Back Function
		'srp-post-options',				// page
		'spr_section5'					// Section
	);

	
	register_setting('spr_section5','srp_post_number');
	register_setting('spr_section5','srp_post_orderby');
	register_setting('spr_section5','srp_post_order');



	//*****************  Post Title Section  ********************

	add_settings_section(
		'spr_section1',					// ID of section
		'Post Title Style',				// Title
		null,							// Call Back Function
		'srp-post-title-options'		// Page
	);

	add_settings_field(
		'srp_post_title_enable',		// ID
		'Enable',						// Title
		'srp_post_title_enable',		// Call Back Function
		'srp-post-title-options',		// page
		'spr_section1'					// Section
	);

	add_settings_field(
		'srp_post_title_color',			// ID
		'Text Color',					// Title
		'srp_post_title_color',			// Call Back Function
		'srp-post-title-options',		// page
		'spr_section1'					// Section
	);

	add_settings_field(
		'srp_post_title_hover',			// ID
		'Text Hover Color',				// Title
		'srp_post_title_hover',			// Call Back Function
		'srp-post-title-options',		// page
		'spr_section1'					// Section
	);

	add_settings_field(
		'srp_post_title_fs',			// ID
		'Font Size',					// Title
		'srp_post_title_fs',			// Call Back Function
		'srp-post-title-options',		// page
		'spr_section1'					// Section
	);

	add_settings_field(
		'srp_post_title_transform',		// ID
		'Text Transform',				// Title
		'srp_post_title_transform',		// Call Back Function
		'srp-post-title-options',		// page
		'spr_section1'					// Section
	);

	add_settings_field(
		'srp_post_title_font_wt',		// ID
		'Font Weight',					// Title
		'srp_post_title_font_wt',		// Call Back Function
		'srp-post-title-options',		// page
		'spr_section1'					// Section
	);

	add_settings_field(
		'srp_post_title_font_st',		// ID
		'Font Style',					// Title
		'srp_post_title_font_st',		// Call Back Function
		'srp-post-title-options',		// page
		'spr_section1'					// Section
	);

	// add_settings_field(
	// 	'srp_post_title_deco',			// ID
	// 	'Text Decoration',				// Title
	// 	'srp_post_title_deco',			// Call Back Function
	// 	'srp-post-title-options',		// page
	// 	'spr_section1'					// Section
	// );


	register_setting('spr_section1','srp_post_title_enable');
	register_setting('spr_section1','srp_post_title_color');
	register_setting('spr_section1','srp_post_title_hover');
	register_setting('spr_section1','srp_post_title_fs');
	register_setting('spr_section1','srp_post_title_transform');
	register_setting('spr_section1','srp_post_title_font_wt');
	register_setting('spr_section1','srp_post_title_font_st');
	// register_setting('spr_section1','srp_post_title_deco');



	//*****************  Post Content Section  ********************
	
	add_settings_section(
		'spr_section2',					// ID of section
		'Post Content Style',			// Title
		null,							// Call Back Function
		'srp-post-content-options'		// Page
	);

	add_settings_field(
		'srp_post_content_enable',		// ID
		'Enable',					// Title
		'srp_post_content_enable',		// Call Back Function
		'srp-post-content-options',		// page
		'spr_section2'					// Section
	);

	add_settings_field(
		'srp_post_content_color',		// ID
		'Text Color',					// Title
		'srp_post_content_color',		// Call Back Function
		'srp-post-content-options',		// page
		'spr_section2'					// Section
	);

	add_settings_field(
		'srp_post_content_fs',			// ID
		'Font Size',					// Title
		'srp_post_content_fs',			// Call Back Function
		'srp-post-content-options',		// page
		'spr_section2'					// Section
	);

	add_settings_field(
		'srp_post_content_tx_ali',		// ID
		'Text Align',					// Title
		'srp_post_content_tx_ali',		// Call Back Function
		'srp-post-content-options',		// page
		'spr_section2'					// Section
	);

	add_settings_field(
		'srp_post_content_show',		// ID
		'How Many Word Show',			// Title
		'srp_post_content_show',		// Call Back Function
		'srp-post-content-options',		// page
		'spr_section2'					// Section
	);	


	register_setting('spr_section2','srp_post_content_enable');
	register_setting('spr_section2','srp_post_content_color');
	register_setting('spr_section2','srp_post_content_fs');
	register_setting('spr_section2','srp_post_content_tx_ali');
	register_setting('spr_section2','srp_post_content_show');



	//*****************  Author & Comment Section  ********************
	
	add_settings_section(
		'spr_section3',					// ID of section
		'Author Style',					// Title
		null,							// Call Back Function
		'srp-author-options'			// Page
	);

	add_settings_field(
		'srp_author_enable',			// ID
		'Enable',						// Title
		'srp_author_enable',			// Call Back Function
		'srp-author-options',			// page
		'spr_section3'					// Section
	);

	add_settings_field(
		'srp_author_color',				// ID
		'Author Color',					// Title
		'srp_author_color',				// Call Back Function
		'srp-author-options',			// page
		'spr_section3'					// Section
	);

	add_settings_field(
		'srp_author_fs',				// ID
		'Author Font Size',				// Title
		'srp_author_fs',				// Call Back Function
		'srp-author-options',			// page
		'spr_section3'					// Section
	);

	add_settings_field(
		'srp_author_image',				// ID
		'Author Image Size',			// Title
		'srp_author_image',				// Call Back Function
		'srp-author-options',			// page
		'spr_section3'					// Section
	);

	add_settings_field(
		'srp_comment_color',			// ID
		'Comment Color',				// Title
		'srp_comment_color',			// Call Back Function
		'srp-author-options',			// page
		'spr_section3'					// Section
	);

	add_settings_field(
		'srp_comment_fs',				// ID
		'Comment Font Size',			// Title
		'srp_comment_fs',				// Call Back Function
		'srp-author-options',			// page
		'spr_section3'					// Section
	);


	register_setting('spr_section3','srp_author_enable');
	register_setting('spr_section3','srp_author_color');
	register_setting('spr_section3','srp_author_fs');
	register_setting('spr_section3','srp_author_image');
	register_setting('spr_section3','srp_comment_color');
	register_setting('spr_section3','srp_comment_fs');



	//*****************  Image Section  ********************
	
	add_settings_section(
		'spr_section4',					// ID of section
		'Image Control',				// Title
		null,							// Call Back Function
		'srp-image-options'				// Page
	);

	add_settings_field(
		'srp_pc_image_enable',			// ID
		'Image Width',					// Title
		'srp_pc_image_enable',			// Call Back Function
		'srp-image-options',			// page
		'spr_section4'					// Section
	);

	add_settings_field(
		'srp_post_content_image_w',		// ID
		'Image Width',					// Title
		'srp_post_content_image_w',		// Call Back Function
		'srp-image-options',			// page
		'spr_section4'					// Section
	);

	add_settings_field(
		'srp_post_content_image_h',		// ID
		'Image Height',					// Title
		'srp_post_content_image_h',		// Call Back Function
		'srp-image-options',			// page
		'spr_section4'					// Section
	);

	
	register_setting('spr_section4','srp_pc_image_enable');
	register_setting('spr_section4','srp_post_content_image_h');
	register_setting('spr_section4','srp_post_content_image_w');

}

add_action('admin_init','srp_all_fields');





//*****************  Section Call Back  ********************

function srp_all_fields_show() {
	?>
		
		<div class="container">

		    <h1 style="padding: 5px 0 10px 0;">Show Related Post Control Panel</h1>

		    <p><?php settings_errors(); ?></p>

		    <div id="skltbsResponsive" class="skltbs">
		        <ul role="tablist" class="skltbs-tab-group">
		            <li role="presentation" class="skltbs-tab-item">
		                <a role="tab" class="skltbs-tab" href="#skltbsResponsive1">Main Title</a>
		            </li>
		            <li role="presentation" class="skltbs-tab-item">
		                <a role="tab" class="skltbs-tab" href="#skltbsResponsive6">Post</a>
		            </li>
		            <li role="presentation" class="skltbs-tab-item">
		                <a role="tab" class="skltbs-tab" href="#skltbsResponsive2">Post Title</a>
		            </li>
		            <li role="presentation" class="skltbs-tab-item">
		                <a role="tab" class="skltbs-tab" href="#skltbsResponsive3">Post Content</a>
		            </li>
		            <li role="presentation" class="skltbs-tab-item">
		                <a role="tab" class="skltbs-tab" href="#skltbsResponsive4">Author & Comment</a>
		            </li>
		            <li role="presentation" class="skltbs-tab-item">
		                <a role="tab" class="skltbs-tab" href="#skltbsResponsive5">Image</a>
		            </li>
		        </ul>
		        <div class="skltbs-panel-group">
		            <div role="tabpanel" id="skltbsResponsive1" class="skltbs-panel">
		                <form action="options.php" method="post">
		                	<?php
		                		settings_fields('spr_section0');
		                		do_settings_sections('srp-main-title-options');
		                		submit_button();
		                	?>
		                </form>
		            </div>
		            <div role="tabpanel" id="skltbsResponsive6" class="skltbs-panel">
		                <form action="options.php" method="post">
		                	<?php
		                		settings_fields('spr_section5');
		                		do_settings_sections('srp-post-options');
		                		submit_button();
		                	?>
		                </form>
		            </div>
		            <div role="tabpanel" id="skltbsResponsive2" class="skltbs-panel">
		                <form action="options.php" method="post">
		                	<?php
		                		settings_fields('spr_section1');
		                		do_settings_sections('srp-post-title-options');
		                		submit_button();
		                	?>
		                </form>
		            </div>
		            <div role="tabpanel" id="skltbsResponsive3" class="skltbs-panel">
		                <form action="options.php" method="post">
		                	<?php
		                		settings_fields('spr_section2');
		                		do_settings_sections('srp-post-content-options');
		                		submit_button();
		                	?>
		                </form>
		            </div>
		            <div role="tabpanel" id="skltbsResponsive4" class="skltbs-panel">
		                <form action="options.php" method="post">
		                	<?php
		                		settings_fields('spr_section3');
		                		do_settings_sections('srp-author-options');
		                		submit_button();
		                	?>
		                </form>
		            </div>
		            <div role="tabpanel" id="skltbsResponsive5" class="skltbs-panel">
		                <form action="options.php" method="post">
		                	<?php
		                		settings_fields('spr_section4');
		                		do_settings_sections('srp-image-options');
		                		submit_button();
		                	?>
		                </form>
		            </div>

		        </div>
		    </div>
		</div>

		<head>
			<link rel="stylesheet" href="<?php echo plugins_url( 'assets/css/skeletabs.css', __FILE__ ); ?>">
			<style>
			    .container { 
			        margin: 50px auto;
			        max-width: 1000px;
			    }
			    .skltbs-tab {
			        font-size: 18px;
			        font-weight: 600;
			    }
			</style>
		</head>
		
		<script src="<?php echo plugins_url( 'assets/js/skeletabs.min.js', __FILE__ ); ?>"></script>

		<script>
			(function ($) {

			    $("#skltbsResponsive").skeletabs({
			        equalHeights: true,
			        animation: "fade-scale",
			        autoplay: false,
			        autoplayInterval: 4500,
			        responsive: {
			            breakpoint: 800,
			            headingTagName: "h4"
			        }
			    });

			})(jQuery);    
		</script>

	<?php
}

?>