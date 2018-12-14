<?php
/**
 * Created by PhpStorm.
 * User: vinhlq
 * Date: 14/12/2018
 * Time: 10:19
 */

namespace Laraveldaily\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{
    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('timezones::time', compact('current_time'));
    }

}
