<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */

function arphabet_widgets_init() {

  register_sidebar( array(
    'name' => 'Social Widget',
    'id' => 'social_widget',
    'before_title' => '<h2 class="access">',
    'after_title' => '</h2>',
  ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// [bartag foo="foo-value"]
function col_func( $atts, $content = null ) {
  $atts = shortcode_atts( 
    array(
      'w' => 12
  ), $atts );

  return '<div class="w-'.$atts['w'].'">' . $content . '</div>';
}
add_shortcode( 'col', 'col_func' );

// [bartag foo="foo-value"]
function news_func( $atts, $content = null ) {

  return '<div class="highlight">' . $content . '</div>';
}
add_shortcode( 'news', 'news_func' );


function mission_func( $atts, $content = null ) {

  return '<div class="mission-statement"><h2>Velvet Trumpet&#39;s Mission Statement:</h2>' . $content . '</div>';
}
add_shortcode( 'mission', 'mission_func' );

// add new dashboard widgets
function wptutsplus_add_dashboard_widgets() {
    wp_add_dashboard_widget( 'wptutsplus_dashboard_welcome', 'Welcome', 'wptutsplus_add_welcome_widget' );
    wp_add_dashboard_widget( 'wptutsplus_dashboard_links', 'Useful Links', 'wptutsplus_add_links_widget' );
    wp_add_dashboard_widget( 'dashboard_shortcodes', 'Shortcodes', 'shortcode_widget' );
}
add_action( 'wp_dashboard_setup', 'wptutsplus_add_dashboard_widgets' );

function wptutsplus_add_welcome_widget() { ?>
 
    Wordpress lets you edit the pages and posts on your website.
 
    Your site consists of the following content, which you can access via the menu on the left:
 
    <ul>
        <li><strong>Pages</strong> - static pages which you can edit.</li>
        <li><strong>Posts</strong> - news or blog articles - you can edit these and add more.</li>
        <li><strong>Media</strong> - images and documents which you can upload via the Media menu on the left or within each post or page.</li>
    </ul>
 
    On each editing screen there are instructions to help you add and edit content.
 
<?php }

function wptutsplus_add_links_widget() { ?>

    Some links to resources which will help you manage your site:
 
    <ul>
        <li><a href="http://wordpress.org">The WordPress Codex</a></li>
        <li><a href="http://easywpguide.com">Easy WP Guide</a></li>
        <li><a href="http://www.wpbeginner.com">WP Beginner</a></li>
    </ul>
<?php }

function shortcode_widget() { ?>
 
    While editing content there are a number of <strong>Shortcodes</strong> to create content.

    For instance writing "[news]Wih some content here[/news]" will output;
    <br>
    <br>
    <div class="highlight">Wih some content here</div>
    <br>
    Here are al lthe shortcodes used throughout the website;
    <ul>
        <li>[news][/news]</li>
    </ul>
 
<?php }

function login_logo() { ?>
    <style type="text/css">
.login,
.login #loginform { background-color:#000; }
.login label { color:#fff; }
        .login #login h1 a {
            background-image: url( <?php echo bloginfo('template_directory').'/images/ID-logo.png'; ?> );
height: 100px;
background-size: 100%;
width: 100%;
        }
.login.wp-core-ui .button-primary {
background: #999;
border-color: #666;
-webkit-box-shadow: inset 0 1px 0 rgba(104,104,104,.5),0 1px 0 rgba(0,0,0,.15);
box-shadow: inset 0 1px 0 rgba(104,104,104,.5),0 1px 0 rgba(0,0,0,.15);
}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'login_logo' ); ?>