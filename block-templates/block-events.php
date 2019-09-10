<?php
/**
 * Block Name: Events
 *
 * This is the template that displays the testimonials loop block.
 */

  $args = array(
    'orderby' => 'title',
    'post_type' => 'events',
    'posts_per_page' => '-1',
  );

$the_query = new WP_Query( $args ); ?>

<style>
    .events-tab .nav-link.active,
    .events-tab .show>.nav-link {
        background-color: <?php the_field('primary_colour', 'option');
        ?>;
    }

</style>

<?php if ( $the_query->have_posts() ) : ?>


<section class="pt-5 pb-5" style="background-color:<?php the_field( 'block_event_background_colour' ); ?>">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-uppercase font-700 font-italic">
                    <?php echo get_field( 'event_section_header' ); ?>
                </h2>
                <p>
                    <?php echo get_field( 'event_section_description' ); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Simple Layout -->
<?php if( get_field('event_section_layout') == 'Simple' ): ?>

<section class="pt-5 pb-5" style="background-color:<?php the_field( 'block_event_background_colour' ); ?>">

    <div class="container">

        <div class="row text-center">
            <div class="col-md-12">

                <ul class="nav nav-pills mb-3 events-tab justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-monday-tab" data-toggle="pill" href="#pills-monday" role="tab" aria-controls="pills-monday" aria-selected="true">Monday</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-tuesday-tab" data-toggle="pill" href="#pills-tuesday" role="tab" aria-controls="pills-tuesday" aria-selected="false">Tuesday</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-wednesday-tab" data-toggle="pill" href="#pills-wednesday" role="tab" aria-controls="pills-wednesday" aria-selected="false">Wednesday</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-thursday-tab" data-toggle="pill" href="#pills-thursday" role="tab" aria-controls="pills-thursday" aria-selected="false">Thursday</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-friday-tab" data-toggle="pill" href="#pills-friday" role="tab" aria-controls="pills-friday" aria-selected="false">Friday</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-wednesday-tab" data-toggle="pill" href="#pills-saturday" role="tab" aria-controls="pills-saturday" aria-saturday="false">Saturday</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-sunday-tab" data-toggle="pill" href="#pills-sunday" role="tab" aria-controls="pills-sunday" aria-selected="false">Sunday</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-monday" role="tabpanel" aria-labelledby="pills-monday-tab">
                        <div class="row">
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <?php $date = strtotime(get_field('event_date', get_the_ID() ) ); ?>

                            <?php $weekday = date('l', $date); ?>

                            <?php if ( $weekday == "Monday" ) : ?>

                            <div class="col-md-3">

                                <div class="class-icon" style="color:<?php the_field( 'primary_colour', 'option' ); ?>">
                                    <?php echo get_field( 'event_icon', get_the_ID() ); ?>
                                </div>
                                <div class="class-time pt-1 pb-1" style="background-color:<?php the_field( 'primary_colour', 'option' ); ?>">
                                    <?php echo get_field( 'event_time_start', get_the_ID() ); ?>
                                    <?php echo get_field( 'event_time_end', get_the_ID() ); ?>
                                </div>
                                <p class="pt-2">
                                    <span class="font-500 text-uppercase">
                                        <?php echo the_title(); ?></span><br />
                                    <span class="font-400">
                                        <?php echo get_field( 'event_instructor', get_the_ID() ); ?></span><br />
                                    <span class="font-400">
                                        <?php the_field( 'event_date', get_the_ID() ); ?></span>
                                </p>
                            </div>

                            <?php else : ?>

                            <div class="col-md-12">
                                <p class="pt-2 font-500 text-uppercase">
                                    Not Events yet planned for this date
                                </p>
                            </div>

                            <?php endif; ?>

                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tuesday" role="tabpanel" aria-labelledby="pills-tuesday-tab">
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <?php $date = strtotime(get_field('event_date', get_the_ID() ) ); ?>

                        <?php $weekday = date('l', $date); ?>

                        <?php if ( $weekday == "Tuesday" ) : ?>

                        <div class="col-md-3">

                            <div class="class-icon" style="color:<?php the_field( 'primary_colour', 'option' ); ?>">
                                <?php echo get_field( 'event_icon' ); ?>
                            </div>
                            <div class="class-time pt-1 pb-1" style="background-color:<?php the_field( 'primary_colour', 'option' ); ?>">
                                <?php echo get_field( 'event_time_start', get_the_ID() ); ?>
                                <?php echo get_field( 'event_time_end', get_the_ID() ); ?>
                            </div>
                            <p class="pt-2">
                                <span class="font-500 text-uppercase">
                                    <?php echo the_title(); ?></span><br />
                                <span class="font-400">
                                    <?php echo get_field( 'event_instructor', get_the_ID() ); ?></span><br />
                                <span class="font-400">
                                    <?php the_field( 'event_date', get_the_ID() ); ?></span>
                            </p>
                        </div>

                        <?php else : ?>

                        <div class="col-md-12">
                            <p class="pt-2 font-500 text-uppercase">
                                Not Events yet planned for this date
                            </p>
                        </div>

                        <?php endif; ?>

                        <?php endwhile; ?>
                    </div>
                    <div class="tab-pane fade" id="pills-wednesday" role="tabpanel" aria-labelledby="pills-wednesday-tab">
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <?php $date = strtotime(get_field('event_date', get_the_ID() ) ); ?>

                        <?php $weekday = date('l', $date); ?>

                        <?php if ( $weekday == "Wednesday" ) : ?>

                        <div class="col-md-3">

                            <div class="class-icon" style="color:<?php the_field( 'primary_colour', 'option' ); ?>">
                                <?php echo get_field( 'event_icon', get_the_ID() ); ?>
                            </div>
                            <div class="class-time pt-1 pb-1" style="background-color:<?php the_field( 'primary_colour', 'option' ); ?>">
                                <?php echo get_field( 'event_time_start', get_the_ID() ); ?>
                                <?php echo get_field( 'event_time_end', get_the_ID() ); ?>
                            </div>
                            <p class="pt-2">
                                <span class="font-500 text-uppercase">
                                    <?php echo the_title(); ?></span><br />
                                <span class="font-400">
                                    <?php echo get_field( 'event_instructor', get_the_ID() ); ?></span><br />
                                <span class="font-400">
                                    <?php the_field( 'event_date', get_the_ID() ); ?></span>
                            </p>

                        </div>
                        <?php else : ?>

                        <div class="col-md-12">
                            <p class="pt-2 font-500 text-uppercase">
                                Not Events yet planned for this date
                            </p>
                        </div>

                        <?php endif; ?>

                        <?php endwhile; ?>
                    </div>
                    <div class="tab-pane fade" id="pills-thursday" role="tabpanel" aria-labelledby="pills-thursday-tab">
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <?php $date = strtotime(get_field('event_date', get_the_ID() ) ); ?>

                        <?php $weekday = date('l', $date); ?>

                        <?php if ( $weekday == "Thursday" ) : ?>

                        <div class="col-md-3">

                            <div class="class-icon" style="color:<?php the_field( 'primary_colour', 'option' ); ?>">
                                <?php echo get_field( 'event_icon', get_the_ID() ); ?>
                            </div>
                            <div class="class-time pt-1 pb-1" style="background-color:<?php the_field( 'primary_colour', 'option' ); ?>">
                                <?php echo get_field( 'event_time_start', get_the_ID() ); ?>
                                <?php echo get_field( 'event_time_end', get_the_ID() ); ?>
                            </div>
                            <p class="pt-2">
                                <span class="font-500 text-uppercase">
                                    <?php echo the_title(); ?></span><br />
                                <span class="font-400">
                                    <?php echo get_field( 'event_instructor', get_the_ID() ); ?></span><br />
                                <span class="font-400">
                                    <?php the_field( 'event_date', get_the_ID() ); ?></span>
                            </p>
                        </div>

                        <?php else : ?>

                        <div class="col-md-12">
                            <p class="pt-2 font-500 text-uppercase">
                                Not Events yet planned for this date
                            </p>
                        </div>

                        <?php endif; ?>

                        <?php endwhile; ?>
                    </div>
                    <div class="tab-pane fade" id="pills-friday" role="tabpanel" aria-labelledby="pills-friday-tab">
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <?php $date = strtotime(get_field('event_date', get_the_ID() ) ); ?>

                        <?php $weekday = date('l', $date); ?>

                        <?php if ( $weekday == "Friday" ) : ?>

                        <div class="col-md-3">

                            <div class="class-icon" style="color:<?php the_field( 'primary_colour', 'option' ); ?>">
                                <?php echo get_field( 'event_icon', get_the_ID() ); ?>
                            </div>
                            <div class="class-time pt-1 pb-1" style="background-color:<?php the_field( 'primary_colour', 'option' ); ?>">
                                <?php echo get_field( 'event_time_start', get_the_ID() ); ?>
                                <?php echo get_field( 'event_time_end', get_the_ID() ); ?>
                            </div>
                            <p class="pt-2">
                                <span class="font-500 text-uppercase">
                                    <?php echo the_title(); ?></span><br />
                                <span class="font-400">
                                    <?php echo get_field( 'event_instructor', get_the_ID() ); ?></span><br />
                                <span class="font-400">
                                    <?php the_field( 'event_date', get_the_ID() ); ?></span>
                            </p>
                        </div>

                        <?php else : ?>

                        <div class="col-md-12">
                            <p class="pt-2 font-500 text-uppercase">
                                Not Events yet planned for this date
                            </p>
                        </div>

                        <?php endif; ?>

                        <?php endwhile; ?>
                    </div>
                    <div class="tab-pane fade" id="pills-saturday" role="tabpanel" aria-labelledby="pills-saturday-tab">
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <?php $date = strtotime(get_field('event_date', get_the_ID() ) ); ?>

                        <?php $weekday = date('l', $date); ?>

                        <?php if ( $weekday == "Saturday" ) : ?>

                        <div class="col-md-3">

                            <div class="class-icon" style="color:<?php the_field( 'primary_colour', 'option' ); ?>">
                                <?php echo get_field( 'event_icon', get_the_ID() ); ?>
                            </div>
                            <div class="class-time pt-1 pb-1" style="background-color:<?php the_field( 'primary_colour', 'option' ); ?>">
                                <?php echo get_field( 'event_time_start', get_the_ID() ); ?>
                                <?php echo get_field( 'event_time_end', get_the_ID() ); ?>
                            </div>
                            <p class="pt-2">
                                <span class="font-500 text-uppercase">
                                    <?php echo the_title(); ?></span><br />
                                <span class="font-400">
                                    <?php echo get_field( 'event_instructor', get_the_ID() ); ?></span><br />
                                <span class="font-400">
                                    <?php the_field( 'event_date', get_the_ID() ); ?></span>
                            </p>
                        </div>

                        <?php else : ?>

                        <div class="col-md-12">
                            <p class="pt-2 font-500 text-uppercase">
                                Not Events yet planned for this date
                            </p>
                        </div>

                        <?php endif; ?>

                        <?php endwhile; ?>
                    </div>
                    <div class="tab-pane fade" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <?php $date = strtotime(get_field('event_date', get_the_ID() ) ); ?>

                        <?php $weekday = date('l', $date); ?>

                        <?php if ( $weekday == "Sunday" ) : ?>

                        <div class="col-md-3">

                            <div class="class-icon" style="color:<?php the_field( 'primary_colour', 'option' ); ?>">
                                <?php echo get_field( 'event_icon', get_the_ID() ); ?>
                            </div>
                            <div class="class-time pt-1 pb-1" style="background-color:<?php the_field( 'primary_colour', 'option' ); ?>">
                                <?php echo get_field( 'event_time_start', get_the_ID() ); ?>
                                <?php echo get_field( 'event_time_end', get_the_ID() ); ?>
                            </div>
                            <p class="pt-2">
                                <span class="font-500 text-uppercase">
                                    <?php echo the_title(); ?></span><br />
                                <span class="font-400">
                                    <?php echo get_field( 'event_instructor', get_the_ID() ); ?></span><br />
                                <span class="font-400">
                                    <?php the_field( 'event_date', get_the_ID() ); ?></span>
                            </p>
                        </div>

                        <?php else : ?>

                        <div class="col-md-12">
                            <p class="pt-2 font-500 text-uppercase">
                                Not Events yet planned for this date
                            </p>
                        </div>

                        <?php endif; ?>

                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<?php endif; ?>
<!-- /Simple Layout -->

<!-- Calendar Layout -->
<?php if( get_field('event_section_layout') == 'Calendar' ): ?>

<?php
function build_calendar($month,$year,$dateArray) { ?>
<?php
    $today_date = date("d");
    $today_date = ltrim($today_date, '0');
     // Create array containing THE  of days of week.
     $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
     // What is the first day of the month in question?
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
     // How many days does this month contain?
     $numberDays = date('t',$firstDayOfMonth);
     // Retrieve some information about the first day of the
     // month in question.
     $dateComponents = getdate($firstDayOfMonth);
     // What is the name of the month in question?
     $monthName = $dateComponents['month'];
     // What is the index value (0-6) of the first day of the
     // month in question.
     $dayOfWeek = $dateComponents['wday'];
     // Create the table tag opener and day headers
     $calendar = "<table class='calendar table table-responsive-stack'>";
     $calendar .= "<caption>$monthName $year</caption>";
     $calendar .= "<tr class='table-header-row'>";
     // Create the calendar headers
     foreach($daysOfWeek as $day) {
          $calendar .= "<th class='header'>$day</th>";
     }
     // Create the rest of the calendar
     // Initiate the day counter, starting with the 1st.
     $currentDay = 1;
     $calendar .= "</tr><tr>";
     // The variable $dayOfWeek is used to
     // ensure that the calendar
     // display consists of exactly 7 columns.
     if ($dayOfWeek > 0) {
          $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
     }
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
  while ($currentDay <= $numberDays) {
          // Seventh column (Saturday) reached. Start a new row.
          if ($dayOfWeek == 7) {
               $dayOfWeek = 0;
               $calendar .= "</tr><tr>";
          }
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          $date = "$year-$month-$currentDayRel";
      $calendar .= "<td class='day' rel='$date'>";
      $calendar .= "$currentDay"; ?>

<?php $args = array('posts_per_page' => -1, 'post_type' => 'events');
$custom_query = new WP_Query( $args );
if ( $custom_query->have_posts() ) {
while ( $custom_query->have_posts() ) { $custom_query->the_post(); ?>

<?php $datefield = strtotime(get_field('event_date', get_the_ID() ) );
$event_date = date('Y-m-d', $datefield);
$event_title = get_the_title();
$event_instructor = get_field( 'event_instructor', get_the_ID() );
$event_start = get_field( 'event_time_start', get_the_ID() );
$event_end = get_field( 'event_time_end', get_the_ID() );
?>

<?php if ($date == $event_date) {
          $calendar .= "<p>$event_title</p>";
      } ?>

<?php }
} else {
  // no posts found
}
wp_reset_postdata(); ?>

<?php
      $calendar .= "</td>";
          // Increment counters
          $currentDay++;
          $dayOfWeek++;
     }
     // Complete the row of the last week in month, if necessary
     if ($dayOfWeek != 7) {
          $remainingDays = 7 - $dayOfWeek;
          $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";
     }
     $calendar .= "</tr>";
     $calendar .= "</table>";
     return $calendar; ?>
<?php } ?>
<?php
     $dateComponents = getdate();
     $month = $dateComponents['mon'];
     $year = $dateComponents['year']; ?>

<!-- Controls -->
<?php
/* date settings */
$month = (int) ($_GET['month'] ? $_GET['month'] : date('m'));
$year = (int)  ($_GET['year'] ? $_GET['year'] : date('Y'));

/* select month control */
$select_month_control = '<select class="form-control" name="month" id="month">';
for($x = 1; $x <= 12; $x++) {
	$select_month_control.= '<option value="'.$x.'"'.($x != $month ? '' : ' selected="selected"').'>'.date('F',mktime(0,0,0,$x,1,$year)).'</option>';
}
$select_month_control.= '</select>';

/* select year control */
$year_range = 7;
$select_year_control = '<select class="form-control" name="year" id="year">';
for($x = ($year-floor($year_range/2)); $x <= ($year+floor($year_range/2)); $x++) {
	$select_year_control.= '<option value="'.$x.'"'.($x != $year ? '' : ' selected="selected"').'>'.$x.'</option>';
}
$select_year_control.= '</select>';
/* "next month" control */
$next_month_link = '<a href="?month='.($month != 12 ? $month + 1 : 1).'&year='.($month != 12 ? $year : $year + 1).'" class="control btn btn-secondary">></a>';
/* "previous month" control */
$previous_month_link = '<a href="?month='.($month != 1 ? $month - 1 : 12).'&year='.($month != 1 ? $year : $year - 1).'" class="control btn btn-secondary mr-2"><</a>';
/* bringing the controls together */
$controls = '<form class="form-inline" method="get">'.$select_month_control.$select_year_control.'<input class="btn btn-success" type="submit" name="submit" value="Search" />'.'<div class="float-right">'.$previous_month_link.''.$next_month_link.'</div></form>';
?>

<section>
    <div class="container">
        <div class="row pt-3 pb-3">
            <div class="col-md-12">
                <?php echo $controls; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive-lg">
                    <?php echo build_calendar($month,$year,$dateArray); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
<!-- /Calendar Layout -->

<?php endif; ?>
