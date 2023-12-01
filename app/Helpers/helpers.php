<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

if (!function_exists('homeRoute')) {

    /**
     * Return the route to the "home" page .
     *
     * @return string
     */
    function homeRoute(): string
    {
        //return 'page.home';
        return 'page.home';
    }
}

if (!function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}

if (!function_exists('app_url')) {
    function app_url()
    {
        return config('app.url');
    }
}

if (!function_exists('app_authors')) {
    function app_authors()
    {
        return config('app.authors');
    }
}

if (!function_exists('app_rand')) {
    function app_rand($length = 8, $opt = 'LN')
    {
        $numbers = '123456789';
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $nchars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        $str = $nchars;

        if ($opt == 'N') $str = $numbers;
        else if ($opt == 'L') $str = $chars;

        return substr(str_shuffle($str),0,$length);
    }
}

if (!function_exists('app_num')) {
    /**
     * Reference:
     * https://laracasts.com/discuss/channels/tips/generate-a-unique-random-string-for-the-database
     * https://stackoverflow.com/questions/62149709/gerate-random-token-to-user-in-laravel
     *
     * Generate a unique random string of characters
     * uses str_random() helper for generating the random string
     *
     * @param   $table - name of the table
     * @param   $col - name of the column that needs to be tested
     * @param   $length - length of the random string
     * @param   @opt - type of chars: L chars, N numbers or LN both
     *
     * @return string
    */
    function app_num($table, $col = 'num', $length = 16, $opt = 'LN')
    {
        $unique = false;

        // Store tested results in array to not test them again
        $tested = [];

        do {

            // Generate random string of characters
            //$random = str_random($chars);
            //$random = Str::random($length);
            //$random = app_password($length);
            $random = app_rand($length, $opt);

            // Check if it's already testing
            // If so, don't query the database again
            if( in_array($random, $tested) ){
                continue;
            }

            // Check if it is unique in the database
            $count = DB::table($table)->where($col, '=', $random)->count();

            // Store the random character in the tested array
            // To keep track which ones are already tested
            $tested[] = $random;

            // String appears to be unique
            if( $count == 0){
                // Set unique to true to break the loop
                $unique = true;
            }

            // If unique is still false at this point
            // it will just repeat all the steps until
            // it has generated a random string of characters

        }
        while(!$unique);

        return $random;
    }
}
