<?php
// Schreibe eine Funktion, die ein deutsches Datum in das SQL-Formaztüberführt

/**
 * @param string $germanDate
 * @return string
 * $germanDate punktseparates Datum DD.MM.YYYY
 */
function german2SQLDateFormat(string $germanDate): string
{
    return implode('-', array_reverse(explode('.', $germanDate)));
}

echo german2SQLDateFormat('24.12.2023') . '<br>';


// Schreibe eine Funktion, die ein Datum vom SQLFormat in das deutsche Format überführt
// danach die Funktion testen

/**
 * @param string $SQLDate
 * @return string
 * $SQLDate format YYYY-MM-DD
 */
function SQL2GermanDateFormat(string $SQLDate): string
{
    return implode('.', array_reverse(explode('-', $SQLDate)));
}

echo SQL2GermanDateFormat('1994-04-10');