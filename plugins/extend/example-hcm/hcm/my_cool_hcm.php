<?php

use Sunlight\Hcm;

/** HCM allows the use of arguments */
return function ($arg1 = null, $arg2 = null, $arg3 = null) {
    // normalize arguments
    Hcm::normalizeArgument($arg1, 'string', true);
    Hcm::normalizeArgument($arg2, 'int', true);
    Hcm::normalizeArgument($arg3, 'bool', true);

    $output = '';
    $output .= 'My cool HCM is the best HCM ever!<br>';

    // a very primitive example of the use of arguments
    if ($arg1 !== null) {
        $output .= 'The first argument is: ' . $arg1 . '<br>';
    }

    if ($arg2 !== null) {
        $output .= 'The second argument is: ' . $arg2 . '<br>';
    }

    if ($arg3 !== null) {
        $output .= 'The third argument is: ' . ($arg3 ? 'true' : 'false') . '<br>';
    }

    return $output;
};
