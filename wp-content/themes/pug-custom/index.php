<?php
get_header();
?>
<div class="Event-section">
    <div class="content">
        <h2 class="main-heading">Upcoming Import-Export Courses & Tours</h2>
    </div>
<div class="card">
<?php 
    query_posts(array( 
        'post_type' => 'events',
        'posts_per_page' => 2,
        'order' => 'asc'
    ) );  
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
            <div class="date"><?php echo $fromdate;?> - <?php echo $todate;?></div>
            <div class="time"><?php echo $fromtime;?> - <?php echo $totime;?></div>

        </div>
        <p class="bookbtn"><a href="<?php the_permalink() ?>">Book Now</a></p></div>
    </div>
<?php endwhile;?>
    </div>
</div>
<div class="card2">
<?php 
    query_posts(array( 
        'post_type' => 'events',
        'show_post' => 10,
        'post__not_in' => array(30,33),
        'posts_per_page' => 3,
        'order' => 'asc'
    ) );  
?>

<?php while (have_posts()) : the_post(); 
$location= get_field('location');
$fromdate= get_field('from_date');
$todate= get_field('to_date');
$fromtime= get_field('from time');
$totime= get_field('to_time');
?>

<div class="card-group2">
        <div class="event-image"><?php echo get_the_post_thumbnail(); ?></div>
        <div class="content-ie">
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <p><?php echo get_the_excerpt(); ?></p>
        <p class="locationp"><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-740-1.png"><?php echo $location;?></p>
        <div class="dandt"><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-740.png">
            <div class="date"><?php echo $fromdate;?> - <?php echo $todate;?></div>
            <div class="time"><?php echo $fromtime;?> - <?php echo $totime;?></div>

        </div>
        <p class="bookbtn"><a href="<?php the_permalink() ?>">Book Now</a></p></div>
    </div>
   
<?php endwhile;?>

    </div>
     <div class="view-all"><p><a href="<?php the_permalink() ?>">View All</a></p></div>
    
</div>
<div class="services">
    <div class="serviceheading">
        <h2>What<br> Will You<br> Get From<br> Here?</h2>
    </div>
    <div class="servicepoints">
        <div><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-790.jpg"><p>Guaranteed Support For 1st Import/Export</p></div>
        <div><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-749.jpg"><p>Factual Insights through First-Hand Experiences</p></div>
        <div><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-749-1.jpg"><p>Export Estimation, Banking & Risk Management</p></div>
        <div><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-749-2.jpg"><p>Form a Lifelong Bond & Backing for any Queries</p></div>
    </div>
      <div class="servicepoints">
        <div><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-749-3.jpg"><p>Dominate the End-to-End Export Cycle</p></div>
        <div><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-749-4.jpg"><p>Smooth Documentation & Licensing Process</p></div>
        <div><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-749-5.jpg"><p>Worry-Free Custom Clearance Procedure</p></div>
        <div><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-749-6.jpg"><p>Connection to Indian & International Markets</p></div>
    </div>
</div>



<div class="plan">
<div class="plan-content"><h2>You Will  Also Get Access to a 100 Days Action Plan</h2>
<p>That Guarantees Export with the Success Rate of 100%</p>
</div>
<div class="plan-points">
    <div><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-578.jpg"><p>Enroll for Online/Offline Import Export training</p></div><p><i class="arrow right"></i></p>
    <div><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-579.jpg"><p>Complete the Training & Assignments</p></div><p><i class="arrow right"></i></p>
    <div><img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-579-1.jpg"><p>Execute your first successful export with the 100 Days Action Plan</p></div>
</div>
<div class="journey"><p>Start Your journey</p></div>
</div>





<?php
get_footer();
?>