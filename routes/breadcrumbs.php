<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Trang chủ', route('admin.dashboard'));
});

Breadcrumbs::for('admin.persional_profile', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Thông tin cá nhân', route('admin.persional_profile'));
});

Breadcrumbs::for('admin.activities', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Hoạt động', route('admin.activities'));
});

Breadcrumbs::for('admin.portfolio_info', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Portfolio', route('admin.portfolio_info'));
});

Breadcrumbs::for('admin.settings', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Cài đặt chung', route('admin.settings'));
});
