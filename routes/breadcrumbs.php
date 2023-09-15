<?php


use Diglactic\Breadcrumbs\Breadcrumbs;


use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard SU
Breadcrumbs::for('su.index', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('su.index'));
});
Breadcrumbs::for('user.index', function (BreadcrumbTrail $trail) {
    $trail->parent('su.index');
    $trail->push('User', route('user.index'));
});
