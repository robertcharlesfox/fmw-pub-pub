<?php

/*
|--------------------------------------------------------------------------
| FMW Form Macros.
|--------------------------------------------------------------------------
|
| Declare custom form input types here (e.g., checkboxSet and radioSet).
| See other examples at:
| http://laravel-recipes.com/recipes/173
| http://forumsarchive.laravel.io/viewtopic.php?id=11721
|
*/

Form::macro('checkboxSet', function($name = 'tags', $values = array('red', 'green', 'blue'), $default = '')
{
    $build = array();
    foreach ($values as $value) {
      $build[] = Form::label($value);
      $build[] = Form::checkbox($name . '[]', $value) . '<br />';
    }
    return join("\n", $build);
});

Form::macro('radioSet', function($name = 'tags', $values = array('red', 'green', 'blue'), $default = '')
{
    $build = array();
    foreach ($values as $value) {
      $is_default = ($value == $default) ? true : false;
      $build[] = '<div><label>' . Form::radio($name, $value, $is_default) . ' ' . $value . '</label></div>';
    }
    return join("\n", $build);
});
