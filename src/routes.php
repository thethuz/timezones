<?php
/**
 * Created by PhpStorm.
 * User: vinhlq
 * Date: 14/12/2018
 * Time: 10:21
 */
//Route::get('timezones/{timezone}',  'laraveldaily\timezones\TimezonesController@index');

Route::get('timezones/{timezone?}',
    'laraveldaily\timezones\TimezonesController@index');
