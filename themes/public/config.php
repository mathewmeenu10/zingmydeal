<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
     */

    'inherit' => null, //default
    /*
    |--------------------------------------------------------------------------
    | List view for the theme
    |--------------------------------------------------------------------------
    |
    | Here you can specify which view is to be loaded for the list page
    | this can be 'list', 'grid', 'box', 'bootstrap-table' or 'data-table'
    |
    | You can specify additional views but you have to create it under 
    | 'patrial/list' folder of each package that uses this theme.
    |
     */

    'listView' => 'grid', //default


    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
     */

    'events'  => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before'             => function ($theme) {
            // You can remove this line anytime.
            //$theme->setTitle(__('app.name'));

            // Breadcrumb template.
            // $theme->breadcrumb()->setTemplate('
            //     <ul class="breadcrumb">
            //     @foreach ($crumbs as $i => $crumb)
            //         @if ($i != (count($crumbs) - 1))
            //         <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a><span class="divider">/</span></li>
            //         @else
            //         <li class="active">{{ $crumb["label"] }}</li>
            //         @endif
            //     @endforeach
            //     </ul>
            // ');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme'  => function ($theme) {
            //You may use this event to set up your assets.

            //You may use this event to set up your assets.
            
            $theme->asset()->usePath()->add('app', 'css/app.css');
            $theme->asset()->usePath()->add('plugins', 'css/plugins.css');
            $theme->asset()->usePath()->add('main', 'css/main.css');
            $theme->asset()->usePath()->add('new', 'css/new.css');
            $theme->asset()->usepath()->add('raty-fa', 'js/jquery.raty-fa.js');

            $theme->asset()->container('footer')->usepath()->add('app', 'js/app.js');
            // $theme->asset()->container('footer')->usePath()->add('gmap', 'js/gmap.js');
            $theme->asset()->container('footer')->usePath()->add('map-init', 'js/map-init.js');
            $theme->asset()->container('footer')->usePath()->add('plugins', 'js/plugins.js');
            $theme->asset()->container('footer')->usePath()->add('main', 'js/main.js');
            // $theme->asset()->container('footer')->usepath()->add('raty-fa', 'js/jquery.raty-fa.js');

        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function ($theme) {
            },

            'public'  => function ($theme) {
            },

            'home'    => function ($theme) {
            },

        ],

    ],

];