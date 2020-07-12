<?php


add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
    'top' => 'Главное',
) );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
) );

/*
 * Enable support for Post Formats.
 *
 * See: https://codex.wordpress.org/Post_Formats
 */
add_theme_support( 'post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'audio',
) );

add_action('wp_enqueue_scripts', 'my_scripts_method');
function my_scripts_method() {
    
    if(get_the_id() == 5){
        wp_register_style('home.min.css', '/wp-content/themes/integra/css/home.min.css', "",getdate()[1]);
        wp_enqueue_style('home.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 31){
        wp_register_style('main.min.css', '/wp-content/themes/integra/css/main.min.css', "",getdate()[1]);
        wp_enqueue_style('main.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 123){
        wp_register_style('linux.min.css', '/wp-content/themes/integra/css/linux.min.css', "",getdate()[1]);
        wp_enqueue_style('linux.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 247){
        wp_register_style('nutanix.min.css', '/wp-content/themes/integra/css/nutanix.min.css', "",getdate()[1]);
        wp_enqueue_style('nutanix.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 339){
        wp_register_style('microsoft.min.css', '/wp-content/themes/integra/css/microsoft.min.css', "",getdate()[1]);
        wp_enqueue_style('microsoft.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 399){
        wp_register_style('ic.min.css', '/wp-content/themes/integra/css/ic.min.css', "",getdate()[1]);
        wp_enqueue_style('ic.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 399){
        wp_register_style('ic.min.css', '/wp-content/themes/integra/css/ic.min.css', "",getdate()[1]);
        wp_enqueue_style('ic.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 462){
        wp_register_style('vpn.min.css', '/wp-content/themes/integra/css/vpn.min.css', "",getdate()[1]);
        wp_enqueue_style('vpn.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 540){
        wp_register_style('video.min.css', '/wp-content/themes/integra/css/video.min.css', "",getdate()[1]);
        wp_enqueue_style('video.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 615){
        wp_register_style('radio.min.css', '/wp-content/themes/integra/css/radio.min.css', "",getdate()[1]);
        wp_enqueue_style('radio.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 694){
        wp_register_style('server.min.css', '/wp-content/themes/integra/css/server.min.css', "",getdate()[1]);
        wp_enqueue_style('server.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 789){
        wp_register_style('docker.min.css', '/wp-content/themes/integra/css/docker.min.css', "",getdate()[1]);
        wp_enqueue_style('docker.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 871){
        wp_register_style('prevention.min.css', '/wp-content/themes/integra/css/prevention.min.css', "",getdate()[1]);
        wp_enqueue_style('prevention.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 925){
        wp_register_style('highload.min.css', '/wp-content/themes/integra/css/highload.min.css', "",getdate()[1]);
        wp_enqueue_style('highload.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 868){
        wp_register_style('control.min.css', '/wp-content/themes/integra/css/control.min.css', "",getdate()[1]);
        wp_enqueue_style('control.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 1074){
        wp_register_style('mikrotik.min.css', '/wp-content/themes/integra/css/mikrotik.min.css', "",getdate()[1]);
        wp_enqueue_style('mikrotik.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 1136){
        wp_register_style('sks.min.css', '/wp-content/themes/integra/css/sks.min.css', "",getdate()[1]);
        wp_enqueue_style('sks.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 1310){
        wp_register_style('optimization.min.css', '/wp-content/themes/integra/css/optimization.min.css', "",getdate()[1]);
        wp_enqueue_style('optimization.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
		}
		if(get_the_id() == 1417){
			wp_register_style('avtomatization.min.css', '/wp-content/themes/integra/css/avtomatization.min.css', "",getdate()[1]);
			wp_enqueue_style('avtomatization.min.css');
			/* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
			wp_enqueue_style('media-g.min.css');
			wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
			wp_enqueue_script('home.js'); */
	}
		if(get_the_id() == 1422){
			wp_register_style('officesecurity.min.css', '/wp-content/themes/integra/css/officesecurity.min.css', "",getdate()[1]);
			wp_enqueue_style('officesecurity.min.css');
			/* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
			wp_enqueue_style('media-g.min.css');
			wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
			wp_enqueue_script('home.js'); */
	}
		if(get_the_id() == 1607){
			wp_register_style('wifi.min.css', '/wp-content/themes/integra/css/wifi.min.css', "",getdate()[1]);
			wp_enqueue_style('wifi.min.css');
			/* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
			wp_enqueue_style('media-g.min.css');
			wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
			wp_enqueue_script('home.js'); */
	}
		if(get_the_id() == 1740){
			wp_register_style('montage-vols.min.css', '/wp-content/themes/integra/css/montage-vols.min.css', "",getdate()[1]);
			wp_enqueue_style('montage-vols.min.css');
			/* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
			wp_enqueue_style('media-g.min.css');
			wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
			wp_enqueue_script('home.js'); */
	}
		if(get_the_id() == 1827){
			wp_register_style('fire.min.css', '/wp-content/themes/integra/css/fire.min.css', "",getdate()[1]);
			wp_enqueue_style('fire.min.css');
			/* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
			wp_enqueue_style('media-g.min.css');
			wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
			wp_enqueue_script('home.js'); */
	}
		if(get_the_id() == 1831){
			wp_register_style('first-line.min.css', '/wp-content/themes/integra/css/first-line.min.css', "",getdate()[1]);
			wp_enqueue_style('first-line.min.css');
			/* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
			wp_enqueue_style('media-g.min.css');
			wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
			wp_enqueue_script('home.js'); */
	}
		if(get_the_id() == 1835){
			wp_register_style('id-director.min.css', '/wp-content/themes/integra/css/id-director.min.css', "",getdate()[1]);
			wp_enqueue_style('id-director.min.css');
			/* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
			wp_enqueue_style('media-g.min.css');
			wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
			wp_enqueue_script('home.js'); */
	}
		if(get_the_id() == 1839){
			wp_register_style('it-mark.min.css', '/wp-content/themes/integra/css/it-mark.min.css', "",getdate()[1]);
			wp_enqueue_style('it-mark.min.css');
			/* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
			wp_enqueue_style('media-g.min.css');
			wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
			wp_enqueue_script('home.js'); */
	}
		if(get_the_id() == 2290){
			wp_register_style('zimbra.min.css', '/wp-content/themes/integra/css/zimbra.min.css', "",getdate()[1]);
			wp_enqueue_style('zimbra.min.css');
			/* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
			wp_enqueue_style('media-g.min.css');
			wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
			wp_enqueue_script('home.js'); */
	}
		if(get_the_id() == 2302){
			wp_register_style('virtual.min.css', '/wp-content/themes/integra/css/virtual.min.css', "",getdate()[1]);
			wp_enqueue_style('virtual.min.css');
			/* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
			wp_enqueue_style('media-g.min.css');
			wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
			wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 2309){
        wp_register_style('dect.min.css', '/wp-content/themes/integra/css/dect.min.css', "",getdate()[1]);
        wp_enqueue_style('dect.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 2310){
        wp_register_style('po.min.css', '/wp-content/themes/integra/css/po.min.css', "",getdate()[1]);
        wp_enqueue_style('po.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 2317){
        wp_register_style('lanconfig.min.css', '/wp-content/themes/integra/css/lanconfig.min.css', "",getdate()[1]);
        wp_enqueue_style('lanconfig.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 2323){
        wp_register_style('cdn.min.css', '/wp-content/themes/integra/css/cdn.min.css', "",getdate()[1]);
        wp_enqueue_style('cdn.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
    if(get_the_id() == 2327){
        wp_register_style('rezerv.min.css', '/wp-content/themes/integra/css/rezerv.min.css', "",getdate()[1]);
        wp_enqueue_style('rezerv.min.css');
        /* wp_register_style('media-g.min.css', '/wp-content/themes/moratop/css/media-g.min.css', "",getdate()[1]);
        wp_enqueue_style('media-g.min.css');
        wp_register_script('home.js', '/wp-content/themes/moratop/js/home.js', "",getdate()[0]);
        wp_enqueue_script('home.js'); */
    }
}

function my_deregister_styles_and_scripts() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style( 'wp-block-library-theme' );
}
add_action( 'wp_print_styles', 'my_deregister_styles_and_scripts', 100 );
// отключение ненужных теме стилей и скриптов end

function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}