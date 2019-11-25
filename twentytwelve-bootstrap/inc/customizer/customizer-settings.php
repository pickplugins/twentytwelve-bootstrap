<?php


if ( ! defined('ABSPATH')) exit;  // if direct access

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
function PickPlugins_register_theme_customizer( $wp_customize ) {




    $wp_customize->add_setting(
        'logo_src',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo_src',
            array(
                'label'      => __('Upload Logo', 'pickplugins-2019'),
                'section'    => 'title_tagline',
                'settings'   => 'logo_src',
                'priority'	 => 60
            )
        )
    );





    $wp_customize->add_setting(
        'header_bg_color',
        array(
            'default'     => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_bg_color',
            array(
                'label'      => __('Header Background Color', 'dart-blog'),
                'section'    => 'colors',
                'settings'   => 'header_bg_color',
                'priority'	 => 2
            )
        )
    );



    $wp_customize->add_setting(
        'header_text_color',
        array(
            'default'     => '#545454',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_text_color',
            array(
                'label'      => __('Header Text Color', 'dart-blog'),
                'section'    => 'colors',
                'settings'   => 'header_text_color',
                'priority'	 => 3
            )
        )
    );



    $wp_customize->add_setting(
        'header_link_color',
        array(
            'default'     => '#545454',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_link_color',
            array(
                'label'      => __('Header Link Color', 'dart-blog'),
                'section'    => 'colors',
                'settings'   => 'header_link_color',
                'priority'	 => 3
            )
        )
    );




    $wp_customize->add_setting(
        'footer_bg_color',
        array(
            'default'     => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_bg_color',
            array(
                'label'      => __('Footer Background Color', 'dart-blog'),
                'section'    => 'colors',
                'settings'   => 'footer_bg_color',
                'priority'	 => 2
            )
        )
    );




    $wp_customize->add_setting(
        'footer_text_color',
        array(
            'default'     => '#545454',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_text_color',
            array(
                'label'      => __('Footer Text Color', 'dart-blog'),
                'section'    => 'colors',
                'settings'   => 'footer_text_color',
                'priority'	 => 3
            )
        )
    );


    $wp_customize->add_setting(
        'footer_link_color',
        array(
            'default'     => '#545454',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_link_color',
            array(
                'label'      => __('Footer Link Color', 'dart-blog'),
                'section'    => 'colors',
                'settings'   => 'footer_link_color',
                'priority'	 => 4
            )
        )
    );
    



    // Add Sections



//	$wp_customize->add_section( 'PickPlugins_site_layout' , array(
//		'title'      => __('Site layout', 'pickplugins-2019'),
//		'priority'   => 1,
//	) );


//	$wp_customize->add_setting(
//		'PickPlugins_site_layout_type',
//		array(
//			'default'     => 'full_width',
//			'sanitize_callback' => 'sanitize_text_field'
//		)
//	);
//
//	$wp_customize->add_control(
//		new WP_Customize_Control(
//			$wp_customize,
//			'PickPlugins_site_layout_type',
//			array(
//				'label'      => __('Site wrapper width style', 'pickplugins-2019'),
//				'section'    => 'PickPlugins_site_layout',
//				'settings'   => 'PickPlugins_site_layout_type',
//				'type'		 => 'select',
//				'choices'        => array(
//					'full_width' => __('Full Width', 'pickplugins-2019'),
//					'box_width' => __('Box Width', 'pickplugins-2019'),
//				),
//				'priority'	 => 1
//			)
//		)
//	);


//	$wp_customize->add_setting(
//		'site_wrapper_width',
//		array(
//			'default'     => '1280px',
//			'sanitize_callback' => 'sanitize_text_field'
//		)
//	);
//
//	$wp_customize->add_control(
//		new WP_Customize_Control(
//			$wp_customize,
//			'site_wrapper_width',
//			array(
//				'label'      => __('Box width value(px or %)', 'pickplugins-2019'),
//				'section'    => 'PickPlugins_site_layout',
//				'settings'   => 'site_wrapper_width',
//				'type'		 => 'text',
//
//				'priority'	 => 1
//			)
//		)
//	);


//	$wp_customize->add_setting(
//		'site_wrapper_bg_color',
//		array(
//			'default'     => '#FFFFFF',
//			'sanitize_callback' => 'sanitize_hex_color'
//		)
//	);
//
//	$wp_customize->add_control(
//		new WP_Customize_Color_Control(
//			$wp_customize,
//			'site_wrapper_bg_color',
//			array(
//				'label'      => __('Wrapper Background Color', 'pickplugins-2019'),
//				'section'    => 'PickPlugins_site_layout',
//				'settings'   => 'site_wrapper_bg_color',
//				'priority'	 => 2
//			)
//		)
//	);


//	$wp_customize->add_setting(
//		'container_width',
//		array(
//			'default'     => '1170px',
//			'sanitize_callback' => 'sanitize_text_field'
//		)
//	);
//
//	$wp_customize->add_control(
//		new WP_Customize_Control(
//			$wp_customize,
//			'container_width',
//			array(
//				'label'      => __('Site container width(px or %)', 'pickplugins-2019'),
//				'section'    => 'PickPlugins_site_layout',
//				'settings'   => 'container_width',
//				'type'		 => 'text',
//
//				'priority'	 => 3
//			)
//		)
//	);





	/*Header Options*/
//
//	$wp_customize->add_section( 'PickPlugins_header' , array(
//		'title'      => __('Header', 'pickplugins-2019'),
//		'priority'   => 2,
//	) );
//
//
//	$wp_customize->add_setting(
//		'header_theme',
//		array(
//			'default'     => 'header_1',
//			'sanitize_callback' => 'sanitize_text_field'
//		)
//	);
//
//	$wp_customize->add_control(
//		new WP_Customize_Control(
//			$wp_customize,
//			'header_theme',
//			array(
//				'label'      => __('Header templates', 'pickplugins-2019'),
//				'section'    => 'PickPlugins_header',
//				'settings'   => 'header_theme',
//				'type'		 => 'select',
//				'choices'        => array(
//					'header_1' => __('Theme 1', 'pickplugins-2019'),
//					'header_2' => __('Theme 2', 'pickplugins-2019'),
//					'header_3' => __('Theme 3', 'pickplugins-2019'),
//					'header_4' => __('Theme 4', 'pickplugins-2019'),
//					'header_5' => __('Theme 5', 'pickplugins-2019'),
//					'header_6' => __('Theme 6', 'pickplugins-2019'),
//					'header_7' => __('Theme 7', 'pickplugins-2019'),
//				),
//				'priority'	 => 1
//			)
//		)
//	);
//
//
//	$wp_customize->add_setting(
//		'header_bg_color',
//		array(
//			'default'     => '#FFFFFF',
//			'sanitize_callback' => 'sanitize_hex_color'
//		)
//	);
//
//	$wp_customize->add_control(
//		new WP_Customize_Color_Control(
//			$wp_customize,
//			'header_bg_color',
//			array(
//				'label'      => __('Header Background Color', 'pickplugins-2019'),
//				'section'    => 'PickPlugins_header',
//				'settings'   => 'header_bg_color',
//				'priority'	 => 2
//			)
//		)
//	);
//
//
//
//
//	$wp_customize->add_setting(
//		'header_text_color',
//		array(
//			'default'     => '#FFFFFF',
//			'sanitize_callback' => 'sanitize_hex_color'
//		)
//	);
//
//	$wp_customize->add_control(
//		new WP_Customize_Color_Control(
//			$wp_customize,
//			'header_text_color',
//			array(
//				'label'      => __('Header Text Color', 'pickplugins-2019'),
//				'section'    => 'PickPlugins_header',
//				'settings'   => 'header_text_color',
//				'priority'	 => 3
//			)
//		)
//	);
//
//
//	$wp_customize->add_setting(
//		'header_link_color',
//		array(
//			'default'     => '#FFFFFF',
//			'sanitize_callback' => 'sanitize_hex_color'
//		)
//	);
//
//	$wp_customize->add_control(
//		new WP_Customize_Color_Control(
//			$wp_customize,
//			'header_link_color',
//			array(
//				'label'      => __('Header Link Color', 'pickplugins-2019'),
//				'section'    => 'PickPlugins_header',
//				'settings'   => 'header_link_color',
//				'priority'	 => 3
//			)
//		)
//	);
//










	/* Footer Options*/
//
//    $wp_customize->add_section( 'PickPlugins_footer' , array(
//   		'title'      => __('Footer', 'pickplugins-2019'),
//   		'priority'   => 3,
//	) );
//
//
//
//	$wp_customize->add_setting(
//		'footer_theme',
//		array(
//			'default'     => 'footer_1',
//			'sanitize_callback' => 'sanitize_text_field'
//		)
//	);
//
//	$wp_customize->add_control(
//		new WP_Customize_Control(
//			$wp_customize,
//			'footer_theme',
//			array(
//				'label'      => __('Footer templates', 'pickplugins-2019'),
//				'section'    => 'PickPlugins_footer',
//				'settings'   => 'footer_theme',
//				'type'		 => 'select',
//				'choices'        => array(
//					'footer_1' => __('Theme 1', 'pickplugins-2019'),
//					'footer_2' => __('Theme 2', 'pickplugins-2019'),
//					'footer_3' => __('Theme 3', 'pickplugins-2019'),
//				),
//				'priority'	 => 1
//			)
//		)
//	);
//
//
//
//	$wp_customize->add_setting(
//		'footer_bg_color',
//		array(
//			'default'     => '#FFFFFF',
//			'sanitize_callback' => 'sanitize_hex_color'
//		)
//	);
//
//	$wp_customize->add_control(
//		new WP_Customize_Color_Control(
//			$wp_customize,
//			'footer_bg_color',
//			array(
//				'label'      => __('Footer Background Color', 'pickplugins-2019'),
//				'section'    => 'PickPlugins_footer',
//				'settings'   => 'footer_bg_color',
//				'priority'	 => 2
//			)
//		)
//	);
//
//
//
//
//	$wp_customize->add_setting(
//		'footer_text_color',
//		array(
//			'default'     => '#FFFFFF',
//			'sanitize_callback' => 'sanitize_hex_color'
//		)
//	);
//
//	$wp_customize->add_control(
//		new WP_Customize_Color_Control(
//			$wp_customize,
//			'header_text_color',
//			array(
//				'label'      => __('Footer Text Color', 'pickplugins-2019'),
//				'section'    => 'PickPlugins_footer',
//				'settings'   => 'footer_text_color',
//				'priority'	 => 3
//			)
//		)
//	);
//
//
//	$wp_customize->add_setting(
//		'footer_link_color',
//		array(
//			'default'     => '#FFFFFF',
//			'sanitize_callback' => 'sanitize_hex_color'
//		)
//	);
//
//	$wp_customize->add_control(
//		new WP_Customize_Color_Control(
//			$wp_customize,
//			'footer_link_color',
//			array(
//				'label'      => __('Footer Link Color', 'pickplugins-2019'),
//				'section'    => 'PickPlugins_footer',
//				'settings'   => 'footer_link_color',
//				'priority'	 => 4
//			)
//		)
//	);
//
//
//	$wp_customize->add_setting(
//			'PickPlugins_poweredby',
//			array(
//				'default'     => false,
//				'sanitize_callback' => 'sanitize_text_field'
//			)
//		);
//
//			$wp_customize->add_control(
//				new WP_Customize_Control(
//					$wp_customize,
//					'PickPlugins_poweredby',
//					array(
//						'label'      => __('Disable Poweredby', 'pickplugins-2019'),
//						'section'    => 'PickPlugins_footer',
//						'settings'   => 'PickPlugins_poweredby',
//						'type'		 => 'checkbox',
//						'priority'	 => 5
//					)
//				)
//			);
//
//
//		$wp_customize->add_setting(
//			'PickPlugins_dev_by',
//			array(
//				'default'     => false,
//				'sanitize_callback' => 'sanitize_text_field'
//			)
//		);
//
//			$wp_customize->add_control(
//				new WP_Customize_Control(
//					$wp_customize,
//					'PickPlugins_dev_by',
//					array(
//						'label'      => __('Disable Develop by', 'pickplugins-2019'),
//						'section'    => 'PickPlugins_footer',
//						'settings'   => 'PickPlugins_dev_by',
//						'type'		 => 'checkbox',
//						'priority'	 => 6
//					)
//				)
//			);
//
//
//		$wp_customize->add_setting(
//			'PickPlugins_copyright_text',
//			array(
//				'sanitize_callback' => 'wp_kses_post'
//			)
//		);
//
//			$wp_customize->add_control(
//				new WP_Customize_Control(
//					$wp_customize,
//					'PickPlugins_copyright_text',
//					array(
//						'label'      => __('Footer Copyright Text', 'pickplugins-2019'),
//						'section'    => 'PickPlugins_footer',
//						'settings'   => 'PickPlugins_copyright_text',
//						'type'		 => 'textarea',
//						'priority'	 => 7
//					)
//				)
//			);



	/* Article Options*/
//
//	$wp_customize->add_section( 'PickPlugins_article' , array(
//		'title'      => __('Article', 'pickplugins-2019'),
//		'priority'   => 4,
//	) );
//
//
//	$wp_customize->add_setting(
//		'article_theme',
//		array(
//			'default'     => 'article_1',
//			'sanitize_callback' => 'sanitize_text_field'
//		)
//	);
//
//	$wp_customize->add_control(
//		new WP_Customize_Control(
//			$wp_customize,
//			'article_theme',
//			array(
//				'label'      => __('Article templates', 'pickplugins-2019'),
//				'section'    => 'PickPlugins_article',
//				'settings'   => 'article_theme',
//				'type'		 => 'select',
//				'choices'        => array(
//					'article_1' => __('Theme 1', 'pickplugins-2019'),
//					'article_2' => __('Theme 2', 'pickplugins-2019'),
//					'article_3' => __('Theme 3', 'pickplugins-2019'),
//					'article_4' => __('Theme 4', 'pickplugins-2019'),
//
//				),
//				'priority'	 => 1
//			)
//		)
//	);



		// Header and logo





//	$wp_customize->add_section( 'PickPlugins_social' , array(
//		'title'      => __('Social', 'pickplugins-2019'),
//		'priority'   => 5,
//	) );


/*
 *
 * 	$wp_customize->add_setting(
		'PickPlugins_social_links',
		array(
			'default'     => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Social_links(
			$wp_customize,
			'PickPlugins_social_links',
			array(
				'label'      => __('Social Profile Links', 'pickplugins-2019'),
				'section'    => 'PickPlugins_social',
				'settings'   => 'PickPlugins_social_links',
				'type'		 => 'multi_input',

				'priority'	 => 1
			)
		)
	);
 * */


















			// Color general
//
//			$wp_customize->add_setting(
//				'PickPlugins_theme_color',
//				array(
//					'default'     => '#00ACDF',
//					'sanitize_callback' => 'sanitize_hex_color'
//				)
//			);
//
//			$wp_customize->add_control(
//				new WP_Customize_Color_Control(
//					$wp_customize,
//					'PickPlugins_theme_color',
//					array(
//						'label'      => __('Theme Color', 'pickplugins-2019'),
//						'section'    => 'colors',
//						'settings'   => 'PickPlugins_theme_color',
//						'priority'	 => 1
//					)
//				)
//			);




//
//
//			$wp_customize->add_setting(
//				'PickPlugins_anchor_color',
//				array(
//					'default'     => '#23b2dd',
//					'sanitize_callback' => 'sanitize_hex_color'
//				)
//			);
//
//			$wp_customize->add_control(
//				new WP_Customize_Color_Control(
//					$wp_customize,
//					'PickPlugins_anchor_color',
//					array(
//						'label'      => __('Anchor Color', 'pickplugins-2019'),
//						'section'    => 'colors',
//						'settings'   => 'PickPlugins_anchor_color',
//						'priority'	 => 2
//					)
//				)
//			);
//
//
//
//
//
//			$wp_customize->add_setting(
//				'PickPlugins_anchor_hover_color',
//				array(
//					'default'     => '#00ACDF',
//					'sanitize_callback' => 'sanitize_hex_color'
//				)
//			);
//
//			$wp_customize->add_control(
//				new WP_Customize_Color_Control(
//					$wp_customize,
//					'PickPlugins_anchor_hover_color',
//					array(
//						'label'      => __('Anchor Hover Color', 'pickplugins-2019'),
//						'section'    => 'colors',
//						'settings'   => 'PickPlugins_anchor_hover_color',
//						'priority'	 => 3
//					)
//				)
//			);

//
//  $wp_customize->add_section( 'theme_seller_frontpage' , array(
//    'title'      => __('Front Page', 'dart-theme-seller'),
//    'priority'   => 3,
//  ) );
//
//
//  $wp_customize->add_setting(
//    'frontpage_hero_bg_img',
//    array(
//      'sanitize_callback' => 'esc_url_raw'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Image_Control(
//      $wp_customize,
//      'frontpage_hero_bg_img',
//      array(
//        'label'      => __('Upload Hero background Image', 'dart-theme-seller'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_hero_bg_img',
//        'priority'	 => 60
//      )
//    )
//  );
//
//  $wp_customize->add_setting(
//    'frontpage_hero_title',
//    array(
//      'default'     => "We Create The Best WordPress Themes &amp; HTML Template",
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'frontpage_hero_title',
//      array(
//        'label'      => __('Hero title', 'dart-theme-seller'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_hero_title',
//        'type'		 => 'text',
//        'priority'	 => 6
//      )
//    )
//  );
//
//  $wp_customize->add_setting(
//    'frontpage_hero_subtitle',
//    array(
//      'default'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'frontpage_hero_subtitle',
//      array(
//        'label'      => __('Hero subtitle', 'dart-theme-seller'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_hero_subtitle',
//        'type'		 => 'text',
//        'priority'	 => 6
//      )
//    )
//  );
//
//  $wp_customize->add_setting(
//    'frontpage_hero_btn1_txt',
//    array(
//      'default'     => 'Wordpress Themes',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'frontpage_hero_btn1_txt',
//      array(
//        'label'      => __('Hero button1 text', 'dart-theme-seller'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_hero_btn1_txt',
//        'type'		 => 'text',
//        'priority'	 => 6
//      )
//    )
//  );
//
//  $wp_customize->add_setting(
//    'frontpage_hero_btn2_txt',
//    array(
//      'default'     => 'HTML Templates',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'frontpage_hero_btn2_txt',
//      array(
//        'label'      => __('Hero button2 text', 'dart-theme-seller'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_hero_btn2_txt',
//        'type'		 => 'text',
//        'priority'	 => 6
//      )
//    )
//  );
//
//  // whyUs intro
//  $wp_customize->add_setting(
//    'frontpage_whyUs_title',
//    array(
//      'default'     => "why choose us",
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'frontpage_whyUs_title',
//      array(
//        'label'      => __('whyUs section title', 'dart-classified'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_whyUs_title',
//        'type'		 => 'text',
//        'priority'	 => 100
//      )
//    )
//  );
//
//  $wp_customize->add_setting(
//    'frontpage_whyUs_subtitle',
//    array(
//      'default'     => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim.",
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'frontpage_whyUs_subtitle',
//      array(
//        'label'      => __('whyUs section subtitle', 'dart-classified'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_whyUs_subtitle',
//        'type'		 => 'text',
//        'priority'	 => 100
//      )
//    )
//  );
//
//
//
//  // latest release theme intro
//  $wp_customize->add_setting(
//    'frontpage_latestRelease_title',
//    array(
//      'default'     => "Latest Released Theme",
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'frontpage_latestRelease_title',
//      array(
//        'label'      => __('Latest release section title', 'dart-classified'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_latestRelease_title',
//        'type'		 => 'text',
//        'priority'	 => 100
//      )
//    )
//  );
//
//  $wp_customize->add_setting(
//    'frontpage_latestRelease_subtitle',
//    array(
//      'default'     => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt hola uala ut aliqua. Ut enim adcitation ullamco.",
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'frontpage_latestRelease_subtitle',
//      array(
//        'label'      => __('Latest release section subtitle', 'dart-classified'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_latestRelease_subtitle',
//        'type'		 => 'text',
//        'priority'	 => 100
//      )
//    )
//  );
//
//  // support intro
//  $wp_customize->add_setting(
//    'frontpage_support_img',
//    array(
//      'sanitize_callback' => 'esc_url_raw'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Image_Control(
//      $wp_customize,
//      'frontpage_support_img',
//      array(
//        'label'      => __('Upload Support image', 'dart-theme-seller'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_support_img',
//        'priority'	 => 100
//      )
//    )
//  );
//
//
//  $wp_customize->add_setting(
//    'frontpage_support_title',
//    array(
//      'default'     => "Specially We Have A Dedicated Support Team",
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'frontpage_support_title',
//      array(
//        'label'      => __('Support section title', 'dart-classified'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_support_title',
//        'type'		 => 'text',
//        'priority'	 => 100
//      )
//    )
//  );
//
//  $wp_customize->add_setting(
//    'frontpage_support_content',
//    array(
//      'default'     => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'frontpage_support_content',
//      array(
//        'label'      => __('Support section content', 'dart-classified'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_support_content',
//        'type'		 => 'text',
//        'priority'	 => 100
//      )
//    )
//  );
//
//  $wp_customize->add_setting(
//    'frontpage_support_btn_txt',
//    array(
//      'default'     => "Get Support Now",
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'frontpage_support_btn_txt',
//      array(
//        'label'      => __('Support section button text', 'dart-classified'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_support_btn_txt',
//        'type'		 => 'text',
//        'priority'	 => 100
//      )
//    )
//  );
//
//
//
//
//
//
//  // Testimonial theme intro
//  $wp_customize->add_setting(
//    'frontpage_testimonial_title',
//    array(
//      'default'     => "Customers Feedback",
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'frontpage_testimonial_title',
//      array(
//        'label'      => __('Testimonial section title', 'dart-classified'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_testimonial_title',
//        'type'		 => 'text',
//        'priority'	 => 100
//      )
//    )
//  );
//
//  $wp_customize->add_setting(
//    'frontpage_testimonial_subtitle',
//    array(
//      'default'     => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt hola uala ut aliqua. Ut enim adcitation ullamco.",
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'frontpage_testimonial_subtitle',
//      array(
//        'label'      => __('Testimonial section subtitle', 'dart-classified'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_testimonial_subtitle',
//        'type'		 => 'text',
//        'priority'	 => 100
//      )
//    )
//  );
//
//  //moneyback section intro
//
//  $wp_customize->add_setting(
//    'frontpage_moneyBack_img',
//    array(
//      'sanitize_callback' => 'esc_url_raw'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Image_Control(
//      $wp_customize,
//      'frontpage_moneyBack_img',
//      array(
//        'label'      => __('Upload Moneyback garantee image', 'dart-theme-seller'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_moneyBack_img',
//        'priority'	 => 100
//      )
//    )
//  );
//
//
//  // $wp_customize->add_setting(
//  // 	'frontpage_moneyBack_garantee_content',
//  // 	array(
//  // 		'default'     => "We are offering a full or partial refund within 7 business days starting from the moment when the member makes the payment. Please <a href='#'>read</a> our or contact us if you need further information.",
//  // 		'sanitize_callback' => 'sanitize_text_field'
//  // 	)
//  // );
//
//  // $wp_customize->add_control(
//  // 	new WP_Customize_Control(
//  // 		$wp_customize,
//  // 		'frontpage_moneyBack_garantee_content',
//  // 		array(
//  // 			'label'      => __('Moneyback garantee content', 'dart-classified'),
//  // 			'section'    => 'theme_seller_frontpage',
//  // 			'settings'   => 'frontpage_moneyBack_garantee_content',
//  // 			'type'		 => 'text',
//  // 			'priority'	 => 100
//  // 		)
//  // 	)
//  // );
//
//
//  $wp_customize->add_setting(
//    'frontpage_moneyBack_garantee_content',
//    array(
//      'sanitize_callback' => 'wp_kses_post',
//      'default'						=> 'We are offering a full or partial refund within 7 business days starting from the moment when the member makes the payment. Please read our refund policy or contact us if you need further information.'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'frontpage_moneyBack_garantee_content',
//      array(
//        'label'      => __('Moneyback garantee content', 'dart-framework'),
//        'section'    => 'theme_seller_frontpage',
//        'settings'   => 'frontpage_moneyBack_garantee_content',
//        'type'		 => 'textarea',
//        'priority'	 => 100
//      )
//    )
//  );
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//  /* Footer Options*/
//  $wp_customize->add_section( 'dartthemes_fw_footer' , array(
//    'title'      => __('Footer', 'dart-framework'),
//    'priority'   => 3,
//  ) );
//
//
//
//  $wp_customize->add_setting(
//    'footer_theme',
//    array(
//      'default'     => 'footer_1',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'footer_theme',
//      array(
//        'label'      => __('Footer templates', 'dart-framework'),
//        'section'    => 'dartthemes_fw_footer',
//        'settings'   => 'footer_theme',
//        'type'		 => 'select',
//        'choices'        => array(
//          'footer_1' => __('Theme 1', 'dart-framework'),
//          'footer_2' => __('Theme 2', 'dart-framework'),
//          'footer_3' => __('Theme 3', 'dart-framework'),
//        ),
//        'priority'	 => 1
//      )
//    )
//  );
//
//
//
//  $wp_customize->add_setting(
//    'footer_bg_color',
//    array(
//      'default'     => '#FFFFFF',
//      'sanitize_callback' => 'sanitize_hex_color'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Color_Control(
//      $wp_customize,
//      'footer_bg_color',
//      array(
//        'label'      => __('Footer Background Color', 'dart-framework'),
//        'section'    => 'dartthemes_fw_footer',
//        'settings'   => 'footer_bg_color',
//        'priority'	 => 2
//      )
//    )
//  );
//
//
//
//
//  $wp_customize->add_setting(
//    'footer_text_color',
//    array(
//      'default'     => '#FFFFFF',
//      'sanitize_callback' => 'sanitize_hex_color'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Color_Control(
//      $wp_customize,
//      'header_text_color',
//      array(
//        'label'      => __('Footer Text Color', 'dart-framework'),
//        'section'    => 'dartthemes_fw_footer',
//        'settings'   => 'footer_text_color',
//        'priority'	 => 3
//      )
//    )
//  );
//
//
//  $wp_customize->add_setting(
//    'footer_link_color',
//    array(
//      'default'     => '#FFFFFF',
//      'sanitize_callback' => 'sanitize_hex_color'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Color_Control(
//      $wp_customize,
//      'footer_link_color',
//      array(
//        'label'      => __('Footer Link Color', 'dart-framework'),
//        'section'    => 'dartthemes_fw_footer',
//        'settings'   => 'footer_link_color',
//        'priority'	 => 4
//      )
//    )
//  );
//
//
//  $wp_customize->add_setting(
//    'dartthemes_fw_poweredby',
//    array(
//      'default'     => false,
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'dartthemes_fw_poweredby',
//      array(
//        'label'      => __('Disable Poweredby', 'dart-framework'),
//        'section'    => 'dartthemes_fw_footer',
//        'settings'   => 'dartthemes_fw_poweredby',
//        'type'		 => 'checkbox',
//        'priority'	 => 5
//      )
//    )
//  );
//
//
//  $wp_customize->add_setting(
//    'dartthemes_fw_dev_by',
//    array(
//      'default'     => false,
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'dartthemes_fw_dev_by',
//      array(
//        'label'      => __('Disable Develop by', 'dart-framework'),
//        'section'    => 'dartthemes_fw_footer',
//        'settings'   => 'dartthemes_fw_dev_by',
//        'type'		 => 'checkbox',
//        'priority'	 => 6
//      )
//    )
//  );
//
//
//  $wp_customize->add_setting(
//    'dartthemes_fw_copyright_text',
//    array(
//      'sanitize_callback' => 'wp_kses_post'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'dartthemes_fw_copyright_text',
//      array(
//        'label'      => __('Footer Copyright Text', 'dart-framework'),
//        'section'    => 'dartthemes_fw_footer',
//        'settings'   => 'dartthemes_fw_copyright_text',
//        'type'		 => 'textarea',
//        'priority'	 => 7
//      )
//    )
//  );
//
//
//
//  /* Article Options*/
//  $wp_customize->add_section( 'dartthemes_fw_article' , array(
//    'title'      => __('Article', 'dart-framework'),
//    'priority'   => 4,
//  ) );
//
//
//  $wp_customize->add_setting(
//    'article_theme',
//    array(
//      'default'     => 'article_1',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'article_theme',
//      array(
//        'label'      => __('Article templates', 'dart-framework'),
//        'section'    => 'dartthemes_fw_article',
//        'settings'   => 'article_theme',
//        'type'		 => 'select',
//        'choices'        => array(
//          'article_1' => __('Theme 1', 'dart-framework'),
//          'article_2' => __('Theme 2', 'dart-framework'),
//          'article_3' => __('Theme 3', 'dart-framework'),
//          'article_4' => __('Theme 4', 'dart-framework'),
//
//        ),
//        'priority'	 => 1
//      )
//    )
//  );
//
//
//
//
//  /* Pages*/
//  $wp_customize->add_section( 'dartthemes_fw_pages' , array(
//    'title'      => __('Pages', 'dart-framework'),
//    'priority'   => 4,
//  ) );
//
//
//  $wp_customize->add_setting(
//    'plugins_archive_page_id',
//    array(
//      'default'     => '',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'plugins_archive_page_id',
//      array(
//        'label'      => __('Plugin archive page	', 'dart-classified'),
//        'section'    => 'dartthemes_fw_pages',
//        'settings'   => 'plugins_archive_page_id',
//        'type'		 => 'dropdown-pages',
//        'priority'	 => 100,
//
//      )
//    )
//  );
//
//
//  $wp_customize->add_setting(
//    'forum_page_id',
//    array(
//      'default'     => '',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'forum_page_id',
//      array(
//        'label'      => __('Forum Page', 'dart-classified'),
//        'section'    => 'dartthemes_fw_pages',
//        'settings'   => 'forum_page_id',
//        'type'		 => 'dropdown-pages',
//        'priority'	 => 100,
//
//      )
//    )
//  );
//
//
//  $wp_customize->add_setting(
//    'docs_page_id',
//    array(
//      'default'     => '',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'docs_page_id',
//      array(
//        'label'      => __('Documentation Page', 'dart-classified'),
//        'section'    => 'dartthemes_fw_pages',
//        'settings'   => 'docs_page_id',
//        'type'		 => 'dropdown-pages',
//        'priority'	 => 100,
//
//      )
//    )
//  );
//
//
//
//  $wp_customize->add_setting(
//    'support_page_id',
//    array(
//      'default'     => '',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'support_page_id',
//      array(
//        'label'      => __('Support Page', 'dart-classified'),
//        'section'    => 'dartthemes_fw_pages',
//        'settings'   => 'support_page_id',
//        'type'		 => 'dropdown-pages',
//        'priority'	 => 100,
//
//      )
//    )
//  );
//
//  $wp_customize->add_setting(
//    'contact_page_id',
//    array(
//      'default'     => '',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'contact_page_id',
//      array(
//        'label'      => __('Contact Page', 'dart-classified'),
//        'section'    => 'dartthemes_fw_pages',
//        'settings'   => 'contact_page_id',
//        'type'		 => 'dropdown-pages',
//        'priority'	 => 100,
//
//      )
//    )
//  );
//
//
//
//
//
//  $wp_customize->add_setting(
//    'pricing_page_id',
//    array(
//      'default'     => '',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'pricing_page_id',
//      array(
//        'label'      => __('Pricing Page', 'dart-classified'),
//        'section'    => 'dartthemes_fw_pages',
//        'settings'   => 'pricing_page_id',
//        'type'		 => 'dropdown-pages',
//        'priority'	 => 100,
//
//      )
//    )
//  );
//
//
//  $wp_customize->add_setting(
//    'affiliate_page_id',
//    array(
//      'default'     => '',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'affiliate_page_id',
//      array(
//        'label'      => __('Affiliates page', 'dart-classified'),
//        'section'    => 'dartthemes_fw_pages',
//        'settings'   => 'affiliate_page_id',
//        'type'		 => 'dropdown-pages',
//        'priority'	 => 100,
//
//      )
//    )
//  );
//
//
//
//  $wp_customize->add_setting(
//    'affiliate_account_page_id',
//    array(
//      'default'     => '',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'affiliate_account_page_id',
//      array(
//        'label'      => __('Affiliates account page', 'dart-classified'),
//        'section'    => 'dartthemes_fw_pages',
//        'settings'   => 'affiliate_account_page_id',
//        'type'		 => 'dropdown-pages',
//        'priority'	 => 100,
//
//      )
//    )
//  );
//
//
//  $wp_customize->add_setting(
//    'search_page_id',
//    array(
//      'default'     => '',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'search_page_id',
//      array(
//        'label'      => __('Search page', 'dart-classified'),
//        'section'    => 'dartthemes_fw_pages',
//        'settings'   => 'search_page_id',
//        'type'		 => 'dropdown-pages',
//        'priority'	 => 100,
//
//      )
//    )
//  );
//
//
//
//  $wp_customize->add_setting(
//    'blog_page_id',
//    array(
//      'default'     => '',
//      'sanitize_callback' => 'sanitize_text_field'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Control(
//      $wp_customize,
//      'blog_page_id',
//      array(
//        'label'      => __('Blog page', 'dart-classified'),
//        'section'    => 'dartthemes_fw_pages',
//        'settings'   => 'blog_page_id',
//        'type'		 => 'dropdown-pages',
//        'priority'	 => 100,
//
//      )
//    )
//  );
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//  // Header and logo
//  $wp_customize->add_setting(
//    'dartthemes_fw_logo',
//    array(
//      'sanitize_callback' => 'esc_url_raw'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Image_Control(
//      $wp_customize,
//      'dartthemes_fw_logo',
//      array(
//        'label'      => __('Upload Logo', 'dart-framework'),
//        'section'    => 'title_tagline',
//        'settings'   => 'dartthemes_fw_logo',
//        'priority'	 => 60
//      )
//    )
//  );
//
//
//
//
//  $wp_customize->add_section( 'dartthemes_fw_social' , array(
//    'title'      => __('Social', 'dart-framework'),
//    'priority'   => 5,
//  ) );
//
//
//  /*
//   *
//   * 	$wp_customize->add_setting(
//      'dartthemes_fw_social_links',
//      array(
//        'default'     => '',
//        'sanitize_callback' => 'sanitize_text_field'
//      )
//    );
//
//    $wp_customize->add_control(
//      new WP_Customize_Social_links(
//        $wp_customize,
//        'dartthemes_fw_social_links',
//        array(
//          'label'      => __('Social Profile Links', 'dart-framework'),
//          'section'    => 'dartthemes_fw_social',
//          'settings'   => 'dartthemes_fw_social_links',
//          'type'		 => 'multi_input',
//
//          'priority'	 => 1
//        )
//      )
//    );
//   * */
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//  // Color general
//  $wp_customize->add_setting(
//    'dartthemes_fw_theme_color',
//    array(
//      'default'     => '#00ACDF',
//      'sanitize_callback' => 'sanitize_hex_color'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Color_Control(
//      $wp_customize,
//      'dartthemes_fw_theme_color',
//      array(
//        'label'      => __('Theme Color', 'dart-framework'),
//        'section'    => 'colors',
//        'settings'   => 'dartthemes_fw_theme_color',
//        'priority'	 => 1
//      )
//    )
//  );
//
//
//
//
//
//
//  $wp_customize->add_setting(
//    'dartthemes_fw_anchor_color',
//    array(
//      'default'     => '#23b2dd',
//      'sanitize_callback' => 'sanitize_hex_color'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Color_Control(
//      $wp_customize,
//      'dartthemes_fw_anchor_color',
//      array(
//        'label'      => __('Anchor Color', 'dart-framework'),
//        'section'    => 'colors',
//        'settings'   => 'dartthemes_fw_anchor_color',
//        'priority'	 => 2
//      )
//    )
//  );
//
//
//
//
//
//  $wp_customize->add_setting(
//    'dartthemes_fw_anchor_hover_color',
//    array(
//      'default'     => '#00ACDF',
//      'sanitize_callback' => 'sanitize_hex_color'
//    )
//  );
//
//  $wp_customize->add_control(
//    new WP_Customize_Color_Control(
//      $wp_customize,
//      'dartthemes_fw_anchor_hover_color',
//      array(
//        'label'      => __('Anchor Hover Color', 'dart-framework'),
//        'section'    => 'colors',
//        'settings'   => 'dartthemes_fw_anchor_hover_color',
//        'priority'	 => 3
//      )
//    )
//  );






}
add_action( 'customize_register', 'PickPlugins_register_theme_customizer' );
