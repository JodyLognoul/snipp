<?php

function flash($message = null, $title = null)
{
    $flash = app('App\Http\Flash');

    if (0 == func_num_args()) {
    	return $flash;
    }

    return $flash->info($message, $title);
}
