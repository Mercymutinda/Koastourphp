<?php
require_once __DIR__ . '/wrapper.php';
$userMenu = [
    ['title' => 'Dashboard', 'icon' => 'home', 'url' => 'home/index'],
    ['title' => 'Banners', 'icon' => 'book', 'url' => '/dashboard/banners/index'],
    ['title' => 'About', 'icon' => 'list', 'url' => '/dashboard/about/index'],
    ['title' => 'testimonials', 'icon' => 'user', 'url' => '/dashboard/testimonials/index'],
    ['title' => 'Gallery', 'icon' => 'camera', 'url' => '/dashboard/gallery/index'],
    ['title' => 'Board', 'icon' => 'users', 'url' => '/dashboard/board/index'],
    // ['title' => 'Banners', 'icon' => 'book', 'url' => '/dashboard/banners/index'],
    ['title' => 'IAM & Admin', 'icon' => 'shield', 'submenus' => [
        ['title' => 'User Management', 'url' => 'profile/index'],
        ['title' => 'Manage Roles', 'url' => 'role/index'],
        ['title' => 'Manage Permissions', 'url' => 'permission/index'],
    ]],
    // ['title' => 'Settings', 'icon' => 'cog fa-spin', 'submenus' => [
    //     ['title' => 'General Settings', 'url' => 'settings/index', 'param' => ['id' => 'general']],
    //     ['title' => 'Email Settings', 'url' => 'settings/index', 'param' => ['id' => 'email']],
    // ]],

];
return array_merge($userMenu);
