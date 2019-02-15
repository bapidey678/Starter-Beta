<?php

/*
Template Name: Login
*/
add_action( 'genesis_loop', 'login_form' );

function login_form() {
	if( is_user_logged_in()) {
		echo "<p>You are already Logged In.</p>";
		echo '<p class="inline">' .  get_the_author_meta( 'display_name') . ' and ' . wp_loginout() . '</p>';
		return;
	}
	wp_login_form();
}

genesis();
