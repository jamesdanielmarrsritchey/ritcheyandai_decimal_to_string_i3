<?php
function decimalToString($decimalString, $delimiter = ',') {
    // Handle special delimiter cases
    if ($delimiter === '\n') {
        $delimiter = PHP_EOL;
    } elseif ($delimiter === '\t') {
        $delimiter = "\t";
    }

    // Split the decimal string by the delimiter
    $decimalValues = explode($delimiter, $decimalString);

    // Convert each decimal value back to a character
    $result = '';
    foreach ($decimalValues as $value) {
        $result .= chr((int)$value);
    }

    return $result;
}
?>