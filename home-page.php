<?php
/*
  Template Name: Home Page
 */
?>
<?php get_header(); ?>

<div class="content-layout">
    <div class="content-layout-row">
        <div class="layout-cell layout-item-1" style="width: 100%" >
            <div class="postcontent postcontent-0 clearfix">
                <div class="content-layout-wrapper layout-item-0">
                    <!-- DISPLAY LATEST GALA POST -->
                    <div class="content-layout layout-item-1">
                        <div class="content-layout-row">
                            <div class="layout-cell layout-item-2" style="width: 100%" >
                                    <?php
                                        $mwdcNewsPosts = new WP_Query();
                                        $mwdcNewsPosts->query('showposts=1&cat=9');
                                        while ($mwdcNewsPosts->have_posts()) : $mwdcNewsPosts->the_post();
                                            {
                                                get_template_part('content', 'home');

                                            }
                                        endwhile;
                                        ?>
                            </div>
                        </div>
                    </div>
                    <!-- DISPLAY LATEST NEWS POST -->
                    <div class="content-layout layout-item-1">
                        <div class="content-layout-row">
                            <div class="layout-cell layout-item-2" style="width: 100%" >
                                    <?php
                                    $mwdcNewsPosts = new WP_Query();
                                    $mwdcNewsPosts->query('showposts=1&cat=3');
                                    while ($mwdcNewsPosts->have_posts()) : $mwdcNewsPosts->the_post();
                                        {
                                            get_template_part('content', 'home');

                                        }
                                    endwhile;
                                    ?>
                            </div>
                        </div>
                    </div>
                    <!-- DISPLAY CURRENT MS. TITLEHOLDER -->
                    <div class="content-layout layout-item-1">
                        <div class="content-layout-row">
                            <div class="layout-cell layout-item-2" style="width: 100%" >
                                    <?php
                                    $mwdcPosts = new WP_Query();
                                    $mwdcPosts->query('showposts=1&cat=31');
                                    while ($mwdcPosts->have_posts()) : $mwdcPosts->the_post();
                                        {
                                            get_template_part('content', 'home');

                                        }
                                    endwhile;
                                    ?>
                            </div>
                        </div>
                    </div>
                    <!-- DISPLAY CURRENT JUNIOR TITLEHOLDER -->
                    <!--<div class="content-layout-wrapper layout-item-0">
                        <div class="content-layout layout-item-1">
                            <div class="content-layout-row">
                                <div class="layout-cell layout-item-3" style="width: 50%" >
                                    <?php
                                    $mwdcPosts = new WP_Query();
                                    $mwdcPosts->query('showposts=1&cat=33');
                                    while ($mwdcPosts->have_posts()) : $mwdcPosts->the_post();
                                        {
                                            get_template_part('content', 'blurb');
                                        }
                                    endwhile;
                                    ?>
                                </div>
                                <div class="layout-cell layout-item-3" style="width: 50%" >
                                    <?php
                                    $mwdcPosts = new WP_Query();
                                    $mwdcPosts->query('showposts=1&cat=32');
                                    while ($mwdcPosts->have_posts()) : $mwdcPosts->the_post();
                                        {
                                            get_template_part('content', 'blurb');
                                        }
                                    endwhile;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>                   
            </div>
        </div>
    </div>
</div>

<?php get_sidebar('bottom'); ?>
<?php get_footer(); ?>