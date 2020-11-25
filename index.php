<?php get_header() ?>
        
        <div class="desc">
            <div class="date">
                <!-- <div class="days">21.</div> -->
                <div class="days"><?php the_field('day') ?>.</div>
                <div class="mounth"><?php the_field('mounth') ?>.</div>
                <div class="year"><?php the_field('year') ?></div>
            </div>
    
            <div class="event-text">
                <div class="large"><?php the_field('name_event') ?></div>
                <div class="medium"><?php the_field('desc_event') ?></div>
            </div>

            <div class="social">
                <div class="social_item"><a href="<?php the_field('link_vk') ?>"><img src=<?php the_field('logo_vk') ?> alt=""></a></div>
                <div class="social_item"><a href="<?php the_field('link_ing') ?>"><img src=<?php the_field('logo_inst') ?> alt=""></a></div>
                <div class="social_item"><a href="<?php the_field('link_twitch') ?>"><img src=<?php the_field('logo_twitch') ?> alt=""></a></div>
            </div>

        </div>        

    </div> 

    <div class="events-container container">
        <div class="title">
            EVENTS
        </div>

        <?php 
            $params = array(
                'limit' => -1 
                // 'page' => , 
                
            );
            
            $mypod = pods( 'event', $params );

            // Loop through the records returned
            while ( $mypod->fetch() ) {
                echo '
                <div class="event">
                    <img class="event-img" src=' . $mypod->display( 'img_event' ) . ' alt="">

                    <div class="event-desc">' .  $mypod->display( 'desc_event' ) .
                    '</div>
                </div>
                ';
            }
        ?>        
    </div>

    <div class="schedules-container container">
        
        <div class="title">
            SCHEDULES
        </div>

        <?php 
            $params = array(
                'limit' => -1 
                // 'page' => , 
                
            );
            
            $mypod = pods( 'schedule', $params );

            // Loop through the records returned
            while ( $mypod->fetch() ) {
                echo '
                <div class="schedule">
                    <div class="schedule-time">' . $mypod->display( 'time_schedule' ) . '</div>
                    <div class="schedule-name">' . $mypod->display( 'name_schedule' ) . '</div>
                </div>';
            }
        ?>
    </div>
<?php get_footer() ?>
    