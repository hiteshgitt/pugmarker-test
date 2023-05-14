<?php
get_header();
?>
<?php
$args = array(
    'post_type' => 'pages',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$posts = new WP_Query( $args );
if ( $posts -> have_posts() ) {
    while ( $posts -> have_posts() ) {

        the_content();
        // Or your video player code here

    }
}
wp_reset_query();
?>
<?php
get_footer();
?>