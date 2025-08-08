<?php
// Site Configuration
define('SITE_NAME', 'AppLaunchGuides.com');
define('SITE_TAGLINE', 'Graphics Requirements Made Simple');
define('SITE_URL', 'https://applaunchguides.com');
define('SITE_DESCRIPTION', 'Comprehensive guides for graphics requirements when launching digital products.');

// Guide Categories
$guide_categories = [
    'web-apps' => [
        'title' => 'Web Applications',
        'icon' => '🌐',
        'description' => 'Complete graphics checklist for launching web apps including favicons, social media assets, and branding elements.',
        'status' => 'complete'
    ],
    'websites' => [
        'title' => 'Websites & Landing Pages',
        'icon' => '💻',
        'description' => 'Essential graphics for website launches including hero images, testimonials, and conversion-focused visuals.',
        'status' => 'complete'
    ],
    'mobile-apps' => [
        'title' => 'Mobile Apps',
        'icon' => '📱',
        'description' => 'iOS and Android graphics requirements including app icons, store screenshots, and promotional materials.',
        'status' => 'complete'
    ],
    'desktop-apps' => [
        'title' => 'Desktop Applications',
        'icon' => '🖥️',
        'description' => 'Desktop app graphics for Windows, macOS, and Linux including installers, dock icons, and system tray assets.',
        'status' => 'in-progress'
    ],
    'browser-extensions' => [
        'title' => 'Browser Extensions',
        'icon' => '🧩',
        'description' => 'Extension graphics for Chrome, Firefox, Safari, and Edge including store assets and toolbar icons.',
        'status' => 'planned'
    ],
    'pwas' => [
        'title' => 'Progressive Web Apps',
        'icon' => '⚡',
        'description' => 'PWA-specific graphics requirements including splash screens, manifest icons, and installation prompts.',
        'status' => 'planned'
    ],
    'marketplaces' => [
        'title' => 'Marketplaces & E-commerce',
        'icon' => '🛒',
        'description' => 'Graphics for online stores including product images, category banners, and promotional materials.',
        'status' => 'planned'
    ],
    'video-games' => [
        'title' => 'Video Games',
        'icon' => '🎮',
        'description' => 'Game graphics for Steam, mobile stores, and web platforms including store pages, achievements, and marketing assets.',
        'status' => 'complete'
    ],
    'saas-platforms' => [
        'title' => 'SaaS Platforms',
        'icon' => '🏢',
        'description' => 'SaaS graphics including dashboard elements, onboarding visuals, and customer-facing marketing materials.',
        'status' => 'planned'
    ],
    'online-tools' => [
        'title' => 'Online Tools & Utilities',
        'icon' => '🔧',
        'description' => 'Graphics for web tools including interface elements, tutorials, and promotional screenshots.',
        'status' => 'planned'
    ]
];

// Platform-specific expansions (for future development)
$platform_expansions = [
    'unity' => 'Unity Game Engine',
    'defold' => 'Defold Game Engine',
    'godot' => 'Godot Engine',
    'react-native' => 'React Native',
    'flutter' => 'Flutter',
    'electron' => 'Electron Apps',
    'cordova' => 'Cordova/PhoneGap',
    'shopify' => 'Shopify Apps',
    'wordpress' => 'WordPress Plugins',
    'chrome-extension' => 'Chrome Extensions',
    'firefox-addon' => 'Firefox Add-ons'
];
?>