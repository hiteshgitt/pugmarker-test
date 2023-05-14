<?php
get_header();
?>

<?php while (have_posts()) : the_post(); 
$location= get_field('location');
$fromdate= get_field('from_date');
$todate= get_field('to_date');
$fromtime= get_field('from time');
$totime= get_field('to_time');
?>
<div class="card-group">
        <div class="event-image"><?php echo get_the_post_thumbnail(); ?></div>
        <div class="content-ie">
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <p><?php echo get_the_excerpt(); ?></p>
        <p class="locationp"><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-740-1.png"><?php
    $value = get_field( "location" );
    if ( $value ) {
        echo $value;
    } else {
    }
?></p>
         <div class="dandt"><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-740.png">
            <div class="date"><?php echo $fromdate;?>-<?php echo $todate;?></div>
            <div class="time"><?php echo $fromtime;?>-<?php echo $totime;?></div>

        </div>
        <p class="bookbtn"><a href="<?php the_permalink() ?>">Book Now</a></p></div>
    </div>
<?php endwhile;?>
<?php
get_footer();
?>