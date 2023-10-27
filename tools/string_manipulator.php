<?php

/**
 * Function to hash a given string with the MD5 hash algorithm
 *
 * @param $stringToHash
 * @return string
 */
function hashMD5($stringToHash): string
{
    return hash('md5', $stringToHash);
}
