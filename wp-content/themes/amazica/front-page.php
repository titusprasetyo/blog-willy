<?php 
if(is_home()){
	get_template_part('index');
}else{
	get_header();
		do_action('amazica_befor_print_home_page_sections');
		do_action('amazica_print_home_page_sections');
		do_action('amazica_after_print_home_page_sections');
	get_footer();
}