<?php

use Carbon\Carbon;

if (!function_exists('searchSpecialCharacters')) {
    function searchSpecialCharacters($search)
    {
        $specialCharacters = '%_\\?*[]()+|';

        return addcslashes($search, $specialCharacters);
    }
}

if (!function_exists('formatDate')) {
    function formatDate($format, $date, $resultFormat = FORMAT_DATE_TIME)
    {
        if ($date instanceof Carbon) {
            return $date->format($resultFormat);
        }

        $result = $date ? Carbon::createFromFormat($format, $date)->format($resultFormat) : null;

        return $result;
    }
}
