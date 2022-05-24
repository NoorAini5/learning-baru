<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
    'menu' => [
        [
            'icon' => 'fa fa-th-large',
            'title' => 'Dashboard',
            'url' => '/admin/dashboard',
            'caret' => false
        ],
        // [
        //     'icon' => 'fa fa-users',
        //     'title' => 'Pengguna',
        //     'url' => '/admin/user',
        //     'caret' => false,
        // ],
        // [
        //     'icon' => 'fa fa-users',
        //     'title' => 'Admin',
        //     'url' => '/admin/admin',
        //     'caret' => false,
        // ],
        // [
        //     'icon' => 'fa fa-cogs',
        //     'title' => 'Master',
        //     'url' => 'javascript:;',
        //     'caret' => true,
        //     'sub_menu' => [
        //         [
        //             'url' => '/admin/setting',
        //             'title' => '<i class="fa fa-ellipsis-h"></i>&nbsp;App'
        //         ], [
        //             'url' => '/admin/master-data/agama',
        //             'title' => '<i class="fa fa-ellipsis-h"></i>&nbsp;Agama'
        //         ], [
        //             'url' => '/admin/master-data/pekerjaan',
        //             'title' => '<i class="fa fa-ellipsis-h"></i>&nbsp;Pekerjaan'
        //         ], [
        //             'url' => '/admin/master-data/status-kawin',
        //             'title' => '<i class="fa fa-ellipsis-h"></i>&nbsp;Status Kawin'
        //         ], [
        //             'url' => '/admin/master-data/pendidikan',
        //             'title' => '<i class="fa fa-ellipsis-h"></i>&nbsp;Pendidikan'
        //         ]
            // ]
            //     ],
                [
                    'icon' => 'fa fa-school',
                    'title' => 'Master',
                    'url' => 'javascript:;',
                    'caret' => true,
                    'sub_menu' => [
                        [
                            'url' => '/admin/master-data/guru',
                            'title' => '<i class="fa fa-ellipsis-h"></i>&nbsp;Guru'
                        ],[
                            'url' => '/admin/master-data/siswa',
                            'title' => '<i class="fa fa-ellipsis-h"></i>&nbsp;Siswa'
                        ], [
                            'url' => '/admin/master-data/kelas',
                            'title' => '<i class="fa fa-ellipsis-h"></i>&nbsp;Kelas'
                        ], [
                            'url' => '/admin/master-data/mapel',
                            'title' => '<i class="fa fa-ellipsis-h"></i>&nbsp;Mapel'
                        ]
                    ]
                        ],

                // [
                //     'icon' => 'fa fa-male',
                //     'title' => 'Guru',
                //     'url' => 'javascript:;',
                //     'url' => '/admin/master-data/guru',
                //      'title' => 'Guru'
                // ],

                    // [
                    //     'icon' => 'fa fa-child',
                    //     'title' => 'Siswa',
                    //     'url' => 'javascript:;',
                    //     'url' => '/admin/master-data/siswa',
                    //     'title' => 'Siswa'


                    // ],

                    // [
                    //     'icon' => 'fa fa-book',
                    //     'title' => 'Kelas',
                    //     'url' => 'javascript:;',
                    //     'caret' => true,
                    //     'sub_menu' => [
                    //         [
                    //             'url' => '/admin/master-data/mapel',
                    //             'title' => '<i class="fa fa-ellipsis-h"></i>&nbsp;Mapel'
                    //         ],
                    //     ]
                    // ],

                    [
                        'icon' => 'fa fa-book',
                        'title' => 'Mapel',
                        'url' => 'javascript:;',
                        'caret' => true,
                        'sub_menu' => [
                            [
                                'url' => '/admin/master-data/materi',
                                'title' => '<i class="fa fa-ellipsis-h"></i>&nbsp;Materi'
                            ],
                            [
                                'url' => '/admin/master-data/diskusi',
                                'title' => '<i class="fa fa-ellipsis-h"></i>&nbsp;Diskusi'
                            ],
                            [
                                'url' => '/admin/master-data/tugas',
                                'title' => '<i class="fa fa-ellipsis-h"></i>&nbsp;Tugas'
                            ],
                            [
                                'url' => '/admin/master-data/ujian',
                                'title' => '<i class="fa fa-ellipsis-h"></i>&nbsp;Ujian'
                        ],
                        ]
                    ]


    ],

    'menu_user' => [
        [
            'icon' => 'fa fa-th-large',
            'title' => 'Dashboard',
            'url' => '/',
            'caret' => false
        ], [
            'icon' => 'fa fa-cogs',
            'title' => 'Ganti Password',
            'url' => '#',
            'caret' => false
        ], [
            'icon' => 'fa fa-sign-out-alt',
            'title' => 'Logout',
            'url' => '#',
            'caret' => false
        ]
    ],


    'menu_demo' => [[
        'icon' => 'fa fa-th-large',
        'title' => 'Dashboard',
        'url' => 'javascript:;',
        'caret' => true,
        'sub_menu' => [[
            'url' => '/dashboard/v1',
            'title' => 'Dashboard v1'
        ], [
            'url' => '/dashboard/v2',
            'title' => 'Dashboard v2'
        ], [
            'url' => '/dashboard/v3',
            'title' => 'Dashboard v3'
        ]]
    ], [
        'icon' => 'fa fa-hdd',
        'title' => 'Email',
        'url' => 'javascript:;',
        'badge' => '10',
        'sub_menu' => [[
            'url' => '/email/inbox',
            'title' => 'Inbox'
        ], [
            'url' => '/email/compose',
            'title' => 'Compose'
        ], [
            'url' => '/email/detail',
            'title' => 'Detail'
        ]]
    ], [
        'icon' => 'fab fa-simplybuilt',
        'title' => 'Widgets',
        'label' => 'NEW',
        'url' => '/widget'
    ], [
        'icon' => 'fa fa-gem',
        'title' => 'UI Elements',
        'url' => 'javascript:;',
        'label' => 'NEW',
        'caret' => true,
        'sub_menu' => [[
            'url' => '/ui/general',
            'title' => 'General',
            'highlight' => true
        ], [
            'url' => '/ui/typography',
            'title' => 'Typography'
        ], [
            'url' => '/ui/tabs-accordions',
            'title' => 'Tabs & Accordions'
        ], [
            'url' => '/ui/unlimited-nav-tabs',
            'title' => 'Unlimited Nav Tabs'
        ], [
            'url' => '/ui/modal-notification',
            'title' => 'Modal & Notification',
            'highlight' => true
        ], [
            'url' => '/ui/widget-boxes',
            'title' => 'Widget Boxes'
        ], [
            'url' => '/ui/media-object',
            'title' => 'Media Object'
        ], [
            'url' => '/ui/buttons',
            'title' => 'Buttons',
            'highlight' => true
        ], [
            'url' => '/ui/icons',
            'title' => 'Icons'
        ], [
            'url' => '/ui/simple-line-icons',
            'title' => 'Simple Line Ioncs'
        ], [
            'url' => '/ui/ionicons',
            'title' => 'Ionicons'
        ], [
            'url' => '/ui/tree-view',
            'title' => 'Tree View'
        ], [
            'url' => '/ui/language-bar-icon',
            'title' => 'Language Bar & Icon'
        ], [
            'url' => '/ui/social-buttons',
            'title' => 'Social Buttons'
        ], [
            'url' => '/ui/intro-js',
            'title' => 'Intro JS'
        ]]
    ], [
        'img' => '/assets/img/logo/logo-bs4.png',
        'title' => 'Bootstrap 4',
        'url' => '/bootstrap-4',
        'label' => 'NEW'
    ], [
        'icon' => 'fa fa-list-ol',
        'title' => 'Form Stuff',
        'url' => 'javascript:;',
        'label' => 'NEW',
        'caret' => true,
        'sub_menu' => [[
            'url' => '/form/elements',
            'title' => 'Form Elements',
            'highlight' => true
        ], [
            'url' => '/form/plugins',
            'title' => 'Form Plugins',
            'highlight' => true
        ], [
            'url' => '/form/slider-switcher',
            'title' => 'Form Slider + Switcher'
        ], [
            'url' => '/form/validation',
            'title' => 'Form Validation'
        ], [
            'url' => '/form/wizards',
            'title' => 'Wizards'
        ], [
            'url' => '/form/wizards-validation',
            'title' => 'Wizards + Validation'
        ], [
            'url' => '/form/wysiwyg',
            'title' => 'WYSIWYG'
        ], [
            'url' => '/form/x-editable',
            'title' => 'X-Editable'
        ], [
            'url' => '/form/multiple-file-upload',
            'title' => 'Multiple File Upload'
        ], [
            'url' => '/form/summernote',
            'title' => 'Summernote'
        ], [
            'url' => '/form/dropzone',
            'title' => 'Dropzone'
        ]]
    ], [
        'icon' => 'fa fa-table',
        'title' => 'Tables',
        'url' => 'javascript:;',
        'caret' => true,
        'sub_menu' => [[
            'url' => '/table/basic',
            'title' => 'Basic'
        ], [
            'url' => 'javascript:;',
            'title' => 'Managed Tables',
            'sub_menu' => [[
                'url' => '/table/manage/default',
                'title' => 'Default'
            ], [
                'url' => '/table/manage/autofill',
                'title' => 'Autofill'
            ], [
                'url' => '/table/manage/buttons',
                'title' => 'Buttons'
            ], [
                'url' => '/table/manage/colreorder',
                'title' => 'ColReorder'
            ], [
                'url' => '/table/manage/fixed-column',
                'title' => 'Fixed Column'
            ], [
                'url' => '/table/manage/fixed-header',
                'title' => 'Fixed Header'
            ], [
                'url' => '/table/manage/keytable',
                'title' => 'KeyTable'
            ], [
                'url' => '/table/manage/responsive',
                'title' => 'Responsive'
            ], [
                'url' => '/table/manage/rowreorder',
                'title' => 'RowReorder'
            ], [
                'url' => '/table/manage/scroller',
                'title' => 'Scroller'
            ], [
                'url' => '/table/manage/select',
                'title' => 'Select'
            ], [
                'url' => '/table/manage/combine',
                'title' => 'Extension Combination'
            ]]
        ]]
    ], [
        'icon' => 'fa fa-star',
        'title' => 'Frontend',
        'url' => 'javascript:;',
        'caret' => true,
        'sub_menu' => [[
            'url' => 'javascript:;',
            'title' => 'One Page Parallax'
        ], [
            'url' => 'javascript:;',
            'title' => 'Blog'
        ], [
            'url' => 'javascript:;',
            'title' => 'Forum'
        ], [
            'url' => 'javascript:;',
            'title' => 'E-Commerce'
        ]]
    ], [
        'icon' => 'fa fa-envelope',
        'title' => 'Email Template',
        'url' => 'javascript:;',
        'caret' => true,
        'sub_menu' => [[
            'url' => '/email-template/system',
            'title' => 'System Template'
        ], [
            'url' => '/email-template/newsletter',
            'title' => 'Newsletter Template'
        ]]
    ], [
        'icon' => 'fa fa-chart-pie',
        'title' => 'Chart',
        'url' => 'javascript:;',
        'label' => 'NEW',
        'caret' => true,
        'sub_menu' => [[
            'url' => '/chart/flot',
            'title' => 'Flot Chart'
        ], [
            'url' => '/chart/morris',
            'title' => 'Morris Chart'
        ], [
            'url' => '/chart/js',
            'title' => 'Chart JS'
        ], [
            'url' => '/chart/d3',
            'title' => 'd3 Chart'
        ], [
            'url' => '/chart/apex',
            'title' => 'Apex Chart',
            'highlight' => true
        ]]
    ], [
        'icon' => 'fa fa-calendar',
        'title' => 'Calendar',
        'url' => '/calendar'
    ], [
        'icon' => 'fa fa-map',
        'title' => 'Map',
        'url' => 'javascript:;',
        'caret' => true,
        'sub_menu' => [[
            'url' => '/map/vector',
            'title' => 'Vector Map'
        ], [
            'url' => '/map/google',
            'title' => 'Google Map'
        ]]
    ], [
        'icon' => 'fa fa-image',
        'title' => 'Gallery',
        'url' => 'javascript:;',
        'caret' => true,
        'sub_menu' => [[
            'url' => '/gallery/v1',
            'title' => 'Gallery v1'
        ], [
            'url' => '/gallery/v2',
            'title' => 'Gallery v2'
        ]]
    ], [
        'icon' => 'fa fa-cogs',
        'title' => 'Page Options',
        'url' => 'javascript:;',
        'label' => 'NEW',
        'caret' => true,
        'sub_menu' => [[
            'url' => '/page-option/page-blank',
            'title' => 'Blank Page'
        ], [
            'url' => '/page-option/page-with-footer',
            'title' => 'Page with Footer'
        ], [
            'url' => '/page-option/page-without-sidebar',
            'title' => 'Page without Sidebar'
        ], [
            'url' => '/page-option/page-with-right-sidebar',
            'title' => 'Page with Right Sidebar'
        ], [
            'url' => '/page-option/page-with-minified-sidebar',
            'title' => 'Page with Minified Sidebar'
        ], [
            'url' => '/page-option/page-with-two-sidebar',
            'title' => 'Page with Two Sidebar'
        ], [
            'url' => '/page-option/page-full-height',
            'title' => 'Full Height Content'
        ], [
            'url' => '/page-option/page-with-wide-sidebar',
            'title' => 'Page with Wide Sidebar'
        ], [
            'url' => '/page-option/page-with-light-sidebar',
            'title' => 'Page with Light Sidebar'
        ], [
            'url' => '/page-option/page-with-mega-menu',
            'title' => 'Page with Mega Menu'
        ], [
            'url' => '/page-option/page-with-top-menu',
            'title' => 'Page with Top Menu'
        ], [
            'url' => '/page-option/page-with-boxed-layout',
            'title' => 'Page with Boxed Layout'
        ], [
            'url' => '/page-option/page-with-mixed-menu',
            'title' => 'Page with Mixed Menu'
        ], [
            'url' => '/page-option/boxed-layout-with-mixed-menu',
            'title' => 'Boxed Layout with Mixed Menu'
        ], [
            'url' => '/page-option/page-with-transparent-sidebar',
            'title' => 'Page with Transparent Sidebar'
        ], [
            'url' => '/page-option/page-with-search-sidebar',
            'title' => 'Page with Search Sidebar',
            'highlight' => true
        ]]
    ], [
        'icon' => 'fa fa-gift',
        'title' => 'Extra',
        'url' => 'javascript:;',
        'label' => 'NEW',
        'caret' => true,
        'sub_menu' => [[
            'url' => '/extra/timeline',
            'title' => 'Timeline'
        ], [
            'url' => '/extra/coming-soon',
            'title' => 'Coming Soon Page'
        ], [
            'url' => '/extra/search-result',
            'title' => 'Search Results'
        ], [
            'url' => '/extra/invoice',
            'title' => 'Invoice'
        ], [
            'url' => '/extra/error-page',
            'title' => '404 Error Page'
        ], [
            'url' => '/extra/profile',
            'title' => 'Profile Page'
        ], [
            'url' => '/extra/scrum-board',
            'title' => 'Scrum Board',
            'highlight' => true
        ], [
            'url' => '/extra/cookie-acceptance-banner',
            'title' => 'Cookie Acceptance Banner',
            'highlight' => true
        ]]
    ], [
        'icon' => 'fa fa-key',
        'title' => 'Login & Register',
        'url' => 'javascript:;',
        'caret' => true,
        'sub_menu' => [[
            'url' => '/login/v1',
            'title' => 'Login'
        ], [
            'url' => '/login/v2',
            'title' => 'Login v2'
        ], [
            'url' => '/login/v3',
            'title' => 'Login v3'
        ], [
            'url' => '/register/v3',
            'title' => 'Register v3'
        ]]
    ], [
        'icon' => 'fa fa-cube',
        'title' => 'Version',
        'url' => 'javascript:;',
        'label' => 'NEW',
        'caret' => true,
        'sub_menu' => [[
            'url' => 'javascript:;',
            'title' => 'HTML'
        ], [
            'url' => 'javascript:;',
            'title' => 'AJAX'
        ], [
            'url' => 'javascript:;',
            'title' => 'ANGULAR JS'
        ], [
            'url' => 'javascript:;',
            'title' => 'ANGULAR JS 5'
        ], [
            'url' => 'javascript:;',
            'title' => 'LARAVEL'
        ], [
            'url' => 'javascript:;',
            'title' => 'MATERIAL DESIGN'
        ], [
            'url' => 'javascript:;',
            'title' => 'APPLE DESIGN',
            'highlight' => true
        ], [
            'url' => 'javascript:;',
            'title' => 'TRANSPARENT DESIGN',
            'highlight' => true
        ], [
            'url' => 'javascript:;',
            'title' => 'FACEBOOK DESIGN',
            'highlight' => true
        ], [
            'url' => 'javascript:;',
            'title' => 'GOOGLE DESIGN',
            'highlight' => true
        ]]
    ], [
        'icon' => 'fa fa-medkit',
        'title' => 'Helper',
        'url' => 'javascript:;',
        'caret' => true,
        'sub_menu' => [[
            'url' => '/helper/css',
            'title' => 'Predefined CSS Classes'
        ]]
    ], [
        'icon' => 'fa fa-align-left',
        'title' => 'Menu Level',
        'url' => 'javascript:;',
        'caret' => true,
        'sub_menu' => [[
            'url' => 'javascript:;',
            'title' => 'Menu 1.1',
            'sub_menu' => [[
                'url' => 'javascript:;',
                'title' => 'Menu 2.1',
                'sub_menu' => [[
                    'url' => 'javascript:;',
                    'title' => 'Menu 3.1',
                ], [
                    'url' => 'javascript:;',
                    'title' => 'Menu 3.2'
                ]]
            ], [
                'url' => 'javascript:;',
                'title' => 'Menu 2.2'
            ], [
                'url' => 'javascript:;',
                'title' => 'Menu 2.3'
            ]]
        ], [
            'url' => 'javascript:;',
            'title' => 'Menu 1.2'
        ], [
            'url' => 'javascript:;',
            'title' => 'Menu 1.3'
        ]]
    ]]
];
