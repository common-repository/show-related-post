<?php

function srp_style(){


	//*****************  Main Title default Style  ********************


	if(get_option('srp_main_title_color') == ''){
		$srp_main_title_color = '#0ce90f';
	}else{
		$srp_main_title_color = get_option('srp_main_title_color');
	}

	
	if(get_option('srp_main_title_fs') == ''){
		$srp_main_title_fs = '37px';
	}else{
		$srp_main_title_fs = get_option('srp_main_title_fs');
	}


	if(get_option('srp_main_title_tx_ali') == ''){
		$srp_main_title_tx_ali = 'left';
	}else{
		$srp_main_title_tx_ali = get_option('srp_main_title_tx_ali');
	}


	if(get_option('srp_main_title_ft_wt') == ''){
		$srp_main_title_ft_wt = 'bold';
	}else{
		$srp_main_title_ft_wt = get_option('srp_main_title_ft_wt');
	}


	if(get_option('srp_main_title_transform') == ''){
		$srp_main_title_transform = 'capitalize';
	}else{
		$srp_main_title_transform = get_option('srp_main_title_transform');
	}


	if(get_option('srp_main_title_font_st') == ''){
		$srp_main_title_font_st = 'italic';
	}else{
		$srp_main_title_font_st = get_option('srp_main_title_font_st');
	}



	//*****************  Main Title default Style  ********************
	
	if(get_option('srp_post_title_color') == ''){
		$srp_post_title_color = '#1dbcd7';
	}else{
		$srp_post_title_color = get_option('srp_post_title_color');
	}


	if(get_option('srp_post_title_hover') == ''){
		$srp_post_title_hover = '#d71da7';
	}else{
		$srp_post_title_hover = get_option('srp_post_title_hover');
	}


	if(get_option('srp_post_title_fs') == ''){
		$srp_post_title_fs = '20px';
	}else{
		$srp_post_title_fs = get_option('srp_post_title_fs');
	}


	if(get_option('srp_post_title_transform') == ''){
		$srp_post_title_transform = 'capitalize';
	}else{
		$srp_post_title_transform = get_option('srp_post_title_transform');
	}


	if(get_option('srp_post_title_font_wt') == ''){
		$srp_post_title_font_wt = '600';
	}else{
		$srp_post_title_font_wt = get_option('srp_post_title_font_wt');
	}


	if(get_option('srp_post_title_font_st') == ''){
		$srp_post_title_font_st = 'italic';
	}else{
		$srp_post_title_font_st = get_option('srp_post_title_font_st');
	}


	// if(get_option('srp_post_title_deco') == ''){
	// 	$srp_post_title_deco = 'underline';
	// }else{
	// 	$srp_post_title_deco = get_option('srp_post_title_deco');
	// }


	if(get_option('srp_post_content_color') == ''){
		$srp_post_content_color = '#000';
	}else{
		$srp_post_content_color = get_option('srp_post_content_color');
	}


	if(get_option('srp_post_content_fs') == ''){
		$srp_post_content_fs = '15px';
	}else{
		$srp_post_content_fs = get_option('srp_post_content_fs');
	}


	if(get_option('srp_post_content_tx_ali') == ''){
		$srp_post_content_tx_ali = 'justify';
	}else{
		$srp_post_content_tx_ali = get_option('srp_post_content_tx_ali');
	}


	if(get_option('srp_post_content_image_w') == ''){
		$srp_post_content_image_w = '245px';
	}else{
		$srp_post_content_image_w = get_option('srp_post_content_image_w');
	}


	if(get_option('srp_post_content_image_h') == ''){
		$srp_post_content_image_h = '150px';
	}else{
		$srp_post_content_image_h = get_option('srp_post_content_image_h');
	}


	if(get_option('srp_author_color') == ''){
		$srp_author_color = '#000';
	}else{
		$srp_author_color = get_option('srp_author_color');
	}


	if(get_option('srp_author_fs') == ''){
		$srp_author_fs = '16px';
	}else{
		$srp_author_fs = get_option('srp_author_fs');
	}


	if(get_option('srp_author_image') == ''){
		$srp_author_image = '25px';
	}else{
		$srp_author_image = get_option('srp_author_image');
	}


	if(get_option('srp_comment_color') == ''){
		$srp_comment_color = '#000';
	}else{
		$srp_comment_color = get_option('srp_comment_color');
	}


	if(get_option('srp_comment_fs') == ''){
		$srp_comment_fs = '16px';
	}else{
		$srp_comment_fs = get_option('srp_comment_fs');
	}
	

?>

	<style>
		
		a:hover{
			text-decoration: none !important;
		}

		.srp_main_title{
	        font-weight: <?php echo $srp_main_title_ft_wt; ?> !important;
	        color: <?php echo $srp_main_title_color; ?> !important;
	        letter-spacing: 2px !important;
	        box-shadow: inset 0px -3px 0px <?php echo $srp_main_title_color; ?> !important;
	        font-style: <?php echo $srp_main_title_font_st; ?> !important;
	        font-size: <?php echo $srp_main_title_fs; ?> !important;
	        line-height: 54px !important;
	        text-align: <?php echo $srp_main_title_tx_ali; ?> !important;
	        text-transform: <?php echo $srp_main_title_transform; ?> !important;
	        margin: 0 !important;
	    	padding: 0px !important;
	    }

	    .srp_ul_class{
	    	overflow: hidden;
	    	margin: 0px !important;
	    	padding: 0 0 0 30px !important;
	    }

		.srp_post_li{
			color: #ffb112;
		}

		.srp_post_title{
			color: <?php echo $srp_post_title_color; ?> !important;
			font-weight: <?php echo $srp_post_title_font_wt; ?> !important;
			font-style: <?php echo $srp_post_title_font_st; ?> !important;
			box-shadow: inset 0 -1px 0 <?php echo $srp_post_title_color; ?> !important;
			letter-spacing: 1px;
			transition: .3s;
			font-size: <?php echo $srp_post_title_fs; ?> !important;
			text-transform: <?php echo $srp_post_title_transform; ?> !important;
			/*text-decoration: <?php echo $srp_post_title_deco; ?> !important;*/
		}

		.srp_post_title:hover{
			color: <?php echo $srp_post_title_hover; ?> !important;
			box-shadow: inset 0 -1px 0 <?php echo $srp_post_title_hover; ?> !important;
		}

		.srp_post_content{
			color: <?php echo $srp_post_title_color; ?> !important;
			font-style: italic;
			box-shadow: none !important;
		}

		.srp_post_content:hover{
			color: <?php echo $srp_post_title_hover; ?> !important;
			box-shadow: none !important;
		}

		.srp_post_image_size{
			width: <?php echo $srp_post_content_image_w; ?> !important;
			height: <?php echo $srp_post_content_image_h; ?> !important;
			padding-right:10px !important;
			float:left !important;
			margin-top: 4px;
		}

		.srp_blog_post_content{
			color: <?php echo $srp_post_content_color; ?> !important;
			font-size: <?php echo $srp_post_content_fs; ?> !important;
			margin: 0 0 10px !important;
			text-align: <?php echo $srp_post_content_tx_ali; ?> !important;
		}

		.srp_related_post_img {
		    border-radius: 50%;
			display: inline-block;
			height: <?php echo $srp_author_image; ?> !important;
			margin-right: 6px;
			width: <?php echo $srp_author_image; ?> !important;
			margin-bottom: -7px;
		}

		.srp_related_post_main .srp_author {
			color: <?php echo $srp_author_color; ?> !important;
			font-size: <?php echo $srp_author_fs; ?> !important;
		}

		.srp_related_post_main .srp_related_post_comment {
		    display: inline;
		    float: right;
		    color: <?php echo $srp_comment_color; ?> !important;
			font-size: <?php echo $srp_comment_fs; ?> !important;
		}

	</style>

<?php

}