<?php

Validator::extend('unique_route_for_user', function($field, $value, $params)
{
    $page = Auth::user()->pages()->where($field, $value)->get()->first();
    return ( ! $page || $page->id == Input::get('page_id'));
});

Validator::extend('unique_for_users', function($field, $value, $params)
{
    $user = User::where($field, $value)->get()->first();
    return ( ! $user || $user->id == Auth::id());
});
