<?php

add_action('twentytwelve_footer','twentytwelve_footer');

function twentytwelve_footer(){

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <div class="site-info">
                    <?php do_action( 'twentytwelve_credits' ); ?>
                    <?php
                    if ( function_exists( 'the_privacy_policy_link' ) ) {
                        the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
                    }
                    ?>
                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwelve' ) ); ?>" class="imprint" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>">
                        <?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?>
                    </a>
                </div><!-- .site-info -->

            </div>
        </div>
    </div>
    <?php
}

add_action('twentytwelve_header','twentytwelve_header');

function twentytwelve_header(){

    ?>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">

                <?php
                $display_header_text = display_header_text();

                $logo_src = get_theme_mod('logo_src');
                //var_dump($logo_src);

                if(!empty($logo_src)):
                    ?>
                    <div class="main-logo">
                        <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url($logo_src);
                            ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
                    </div><!-- /Logo -->
                <?php

                endif;

                ?>

                <?php

                if($display_header_text):
                    ?>

                    <hgroup>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    </hgroup>
                <?php
                endif;

                ?>

            </div>
            <div class="col-md-8">

                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
                    <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'nav-menu',
                        )
                    );
                    ?>
                </nav><!-- #site-navigation -->

                <?php if ( get_header_image() ) : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
                <?php endif; ?>

            </div>

        </div>
    </div>
    <?php
}





add_action('twentytwelve_single','twentytwelve_single');

function twentytwelve_single(){

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="primary" class="site-content">
                    <div id="content" role="main">

                        <?php
                        while ( have_posts() ) :
                            the_post();
                            ?>

                            <?php get_template_part( 'content', get_post_format() ); ?>

                            <nav class="nav-single">
                                <h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
                                <span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
                                <span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
                            </nav><!-- .nav-single -->

                            <?php comments_template( '', true ); ?>

                        <?php endwhile; // end of the loop. ?>

                    </div><!-- #content -->
                </div><!-- #primary -->

            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>


        </div>
    </div>
    <?php
}



add_action('twentytwelve_page','twentytwelve_page');

function twentytwelve_page(){

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="primary" class="site-content">
                    <div id="content" role="main">

                        <?php
                        while ( have_posts() ) :
                            the_post();
                            ?>
                            <?php get_template_part( 'content', 'page' ); ?>
                            <?php comments_template( '', true ); ?>
                        <?php endwhile; // end of the loop. ?>

                    </div><!-- #content -->
                </div><!-- #primary -->


            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <?php
}





add_action('twentytwelve_page_no_sidebar','twentytwelve_page_no_sidebar');

function twentytwelve_page_no_sidebar(){

    ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div id="primary" class="site-content">
                    <div id="content" role="main">

                        <?php
                        while ( have_posts() ) :
                            the_post();
                            ?>
                            <?php get_template_part( 'content', 'page' ); ?>
                            <?php comments_template( '', true ); ?>
                        <?php endwhile; // end of the loop. ?>

                    </div><!-- #content -->
                </div><!-- #primary -->


            </div>
        </div>
    </div>
    <?php
}


add_action('twentytwelve_page_404','twentytwelve_page_404');

function twentytwelve_page_404(){

    ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div id="primary" class="site-content">
                    <div id="content" role="main">

                        <article id="post-0" class="post error404 no-results not-found">
                            <header class="entry-header">
                                <h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentytwelve' ); ?></h1>
                            </header>

                            <div class="entry-content">
                                <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwelve' ); ?></p>
                                <?php get_search_form(); ?>
                            </div><!-- .entry-content -->
                        </article><!-- #post-0 -->

                    </div><!-- #content -->
                </div><!-- #primary -->


            </div>
        </div>
    </div>
    <?php
}



add_action('twentytwelve_archive','twentytwelve_archive');

function twentytwelve_archive(){

    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <section id="primary" class="site-content">
                    <div id="content" role="main">

                        <?php if ( have_posts() ) : ?>
                            <header class="archive-header">
                                <h1 class="archive-title">
                                    <?php
                                    if ( is_day() ) :
                                        printf( __( 'Daily Archives: %s', 'twentytwelve' ), '<span>' . get_the_date() . '</span>' );
                                    elseif ( is_month() ) :
                                        printf( __( 'Monthly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) ) . '</span>' );
                                    elseif ( is_year() ) :
                                        printf( __( 'Yearly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) ) . '</span>' );
                                    else :
                                        _e( 'Archives', 'twentytwelve' );
                                    endif;
                                    ?>
                                </h1>
                            </header><!-- .archive-header -->

                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                /* Include the post format-specific template for the content. If you want to
                                 * this in a child theme then include a file called content-___.php
                                 * (where ___ is the post format) and that will be used instead.
                                 */
                                get_template_part( 'content', get_post_format() );

                            endwhile;

                            twentytwelve_content_nav( 'nav-below' );
                            ?>

                        <?php else : ?>
                            <?php get_template_part( 'content', 'none' ); ?>
                        <?php endif; ?>

                    </div><!-- #content -->
                </section><!-- #primary -->

            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <?php
}






add_action('twentytwelve_archive_search','twentytwelve_archive_search');

function twentytwelve_archive_search(){

    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <section id="primary" class="site-content">
                    <div id="content" role="main">

                        <?php if ( have_posts() ) : ?>

                            <header class="page-header">
                                <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                            </header>

                            <?php twentytwelve_content_nav( 'nav-above' ); ?>

                            <?php /* Start the Loop */ ?>
                            <?php
                            while ( have_posts() ) :
                                the_post();
                                ?>
                                <?php get_template_part( 'content', get_post_format() ); ?>
                            <?php endwhile; ?>

                            <?php twentytwelve_content_nav( 'nav-below' ); ?>

                        <?php else : ?>

                            <article id="post-0" class="post no-results not-found">
                                <header class="entry-header">
                                    <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
                                </header>

                                <div class="entry-content">
                                    <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
                                    <?php get_search_form(); ?>
                                </div><!-- .entry-content -->
                            </article><!-- #post-0 -->

                        <?php endif; ?>

                    </div><!-- #content -->
                </section><!-- #primary -->

            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <?php
}



add_action('twentytwelve_archive_tag','twentytwelve_archive_tag');

function twentytwelve_archive_tag(){

    ?>


    <div class="container">
        <div class="row">
            <div class="col-8">
                <section id="primary" class="site-content">
                    <div id="content" role="main">

                        <?php if ( have_posts() ) : ?>
                            <header class="archive-header">
                                <h1 class="archive-title"><?php printf( __( 'Tag Archives: %s', 'twentytwelve' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>

                                <?php if ( tag_description() ) : // Show an optional tag description ?>
                                    <div class="archive-meta"><?php echo tag_description(); ?></div>
                                <?php endif; ?>
                            </header><!-- .archive-header -->

                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                /*
                                 * Include the post format-specific template for the content. If you want to
                                 * this in a child theme then include a file called content-___.php
                                 * (where ___ is the post format) and that will be used instead.
                                 */
                                get_template_part( 'content', get_post_format() );

                            endwhile;

                            twentytwelve_content_nav( 'nav-below' );
                            ?>

                        <?php else : ?>
                            <?php get_template_part( 'content', 'none' ); ?>
                        <?php endif; ?>

                    </div><!-- #content -->
                </section><!-- #primary -->

            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <?php
}





add_action('twentytwelve_archive_category','twentytwelve_archive_category');

function twentytwelve_archive_category(){

    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <section id="primary" class="site-content">
                    <div id="content" role="main">

                        <?php if ( have_posts() ) : ?>
                            <header class="archive-header">
                                <h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

                                <?php if ( category_description() ) : // Show an optional category description ?>
                                    <div class="archive-meta"><?php echo category_description(); ?></div>
                                <?php endif; ?>
                            </header><!-- .archive-header -->

                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                /* Include the post format-specific template for the content. If you want to
                                 * this in a child theme then include a file called content-___.php
                                 * (where ___ is the post format) and that will be used instead.
                                 */
                                get_template_part( 'content', get_post_format() );

                            endwhile;

                            twentytwelve_content_nav( 'nav-below' );
                            ?>

                        <?php else : ?>
                            <?php get_template_part( 'content', 'none' ); ?>
                        <?php endif; ?>

                    </div><!-- #content -->
                </section><!-- #primary -->

            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <?php
}






add_action('twentytwelve_archive_author','twentytwelve_archive_author');

function twentytwelve_archive_author(){

    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <section id="primary" class="site-content">
                    <div id="content" role="main">

                        <?php if ( have_posts() ) : ?>

                            <?php
                            /* Queue the first post, that way we know
                             * what author we're dealing with (if that is the case).
                             *
                             * We reset this later so we can run the loop
                             * properly with a call to rewind_posts().
                             */
                            the_post();
                            ?>

                            <header class="archive-header">
                                <h1 class="archive-title"><?php printf( __( 'Author Archives: %s', 'twentytwelve' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
                            </header><!-- .archive-header -->

                            <?php
                            /* Since we called the_post() above, we need to
                             * rewind the loop back to the beginning that way
                             * we can run the loop properly, in full.
                             */
                            rewind_posts();
                            ?>

                            <?php twentytwelve_content_nav( 'nav-above' ); ?>

                            <?php
                            // If a user has filled out their description, show a bio on their entries.
                            if ( get_the_author_meta( 'description' ) ) :
                                ?>
                                <div class="author-info">
                                    <div class="author-avatar">
                                        <?php
                                        /**
                                         * Filter the author bio avatar size.
                                         *
                                         * @since Twenty Twelve 1.0
                                         *
                                         * @param int $size The height and width of the avatar in pixels.
                                         */
                                        $author_bio_avatar_size = apply_filters( 'twentytwelve_author_bio_avatar_size', 68 );
                                        echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
                                        ?>
                                    </div><!-- .author-avatar -->
                                    <div class="author-description">
                                        <h2><?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?></h2>
                                        <p><?php the_author_meta( 'description' ); ?></p>
                                    </div><!-- .author-description	-->
                                </div><!-- .author-info -->
                            <?php endif; ?>

                            <?php /* Start the Loop */ ?>
                            <?php
                            while ( have_posts() ) :
                                the_post();
                                ?>
                                <?php get_template_part( 'content', get_post_format() ); ?>
                            <?php endwhile; ?>

                            <?php twentytwelve_content_nav( 'nav-below' ); ?>

                        <?php else : ?>
                            <?php get_template_part( 'content', 'none' ); ?>
                        <?php endif; ?>

                    </div><!-- #content -->
                </section><!-- #primary -->

            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <?php
}














