<?php

/* Change login logo and link
----------------------------------------------------------------------------------------*/
add_filter('login_headerurl','ag_login_link');
function ag_login_link() {
	return home_url();
}

add_action( 'login_enqueue_scripts', 'smg_login_logo' );
function smg_login_logo() { ?>
    <style type="text/css">
	    #login {
		    width: 364px;
	    }

	    #login h1 {
		    background: transparent;
		    padding: 20px;
	    }

	    #login h1 a {
		    background: url(<?php echo get_site_url(); ?>/images/smokemyglass/login-logo.png) no-repeat center center;
		    background-size: 276px 138px;
		    height: 138px;
		    margin: 0 auto;
		    width: 276px;
		}

		.login form .input, .login input[type="text"] {
		    font-size: 22px;
		    font-weight: 100;
		    margin: 2px 6px 16px 0;
		    padding: 5px 10px;
		}

		input[type="checkbox"], input[type="color"], input[type="date"], input[type="datetime-local"], input[type="datetime"], input[type="email"], input[type="month"], input[type="number"], input[type="password"], input[type="radio"], input[type="search"], input[type="tel"], input[type="text"], input[type="time"], input[type="url"], input[type="week"], select, textarea {
			border: 1px solid #ddd;
		}

		input[type="checkbox"]:focus, input[type="color"]:focus, input[type="date"]:focus, input[type="datetime-local"]:focus, input[type="datetime"]:focus, input[type="email"]:focus, input[type="month"]:focus, input[type="number"]:focus, input[type="password"]:focus, input[type="radio"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="text"]:focus, input[type="time"]:focus, input[type="url"]:focus, input[type="week"]:focus, select:focus, textarea:focus {
			border: 1px solid #ddd;
			box-shadow: 0 0 2px rgba(0, 0, 0, .5);
		}

		.wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large {
		    background: #229bee;
		    border: 0;
		    border-radius: 0;
		    box-shadow: none;
		    font-weight: 700;
		    height: 30px;
		    line-height: 28px;
		    padding: 1px 12px 2px;
		    text-shadow: none;
		    text-transform: uppercase;
		}

		.login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
			color: #229bee;
		}

		.login .message {
			border-left-color: #333;
		}
    </style>
<?php }