<?php

return [

    // Mail Notification
    'mail_notification' => env('MAIL_NOTIFICATION') ?: false,

    // Default Avatar
    'default_avatar' => env('DEFAULT_AVATAR') ?: '/images/default.png',

    // Default Icon
    'default_icon' => env('DEFAULT_ICON') ?: '/images/favicon.ico',

    // Meta
    'meta' => [
        'keywords' => '梦遥奇缘,比特币,莱特币,狗狗币,比特股,瑞波币,比特小白,比特币小白,央行数字币,ICO,挖矿',
        'description' => '比特币小白，专注对数字币新闻与ICO消息传播，让更多的人了解到区块链、认识数字币。'
    ],


    // Social Share
    'social_share' => [
        'article_share'    => env('ARTICLE_SHARE') ?: true,
        'discussion_share' => env('DISCUSSION_SHARE') ?: true,
        'sites'            => env('SOCIAL_SHARE_SITES') ?: 'google,twitter,weibo',
        'mobile_sites'     => env('SOCIAL_SHARE_MOBILE_SITES') ?: 'google,twitter,weibo,qq,wechat',
    ],

    // Google Analytics
    'google' => [
        'id'   => env('GOOGLE_ANALYTICS_ID', 'Google-Analytics-ID'),
        'open' => env('GOOGLE_OPEN') ?: false
    ],

    // Article Page
    'article' => [
        'title'       => '比特币小白-专注对数字币新闻与ICO消息咨询',
        'description' => 'http://bitecoin.idiot6.com',
        'number'      => 15,
        'sort'        => 'desc',
        'sortColumn'  => 'published_at',
    ],


    // Discussion Page
    'discussion' => [
        'number' => 20,
        'sort'   => 'desc',
        'sortColumn' => 'created_at',
    ],

    // Footer
    'footer' => [
        'github' => [
            'open' => true,
            'url'  => 'https://github.com/chuhemiao',
        ],
        'twitter' => [
            'open' => true,
            'url'  => 'https://twitter.com/meng535101602'
        ],
        'meta' => '©比特币小白 2017.署名-非商业性使用-相同方式共享（BY-NC-SA 3.0 CN）京ICP备15026980号-6',
    ],

    'license' => '比特币小白.<br/>This article is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>.',


];
