<?php

/*
  consider decomposing the characters to "capture" more "obscure" characters such as ṩ
    - http://www.php.net/manual/en/normalizer.normalize.php#92592
*/

/**
 * Normalize a string to only contain alphanumeric characters and dashes.
 *
 * Replace accents by their entities. 
 * Replace everything else by - (dash).
 * @note mb_internal_charset() must be set to whatever encoding $string had originally
 * @param string $string String to normalize
 * @param boolean $trim Trim string to not start/end with a dash and not contain dash sequences
 * @param array|string $allow List of Characters that are to be ignored while urlifying array( unicode => true ) or string like "$é@"
 * @param array $replace List of Characters that are to be replaced while urlifying array( unicode => "character" )
 * @return string normalized string
 * @author Christian Kruse <cjk+os@wwwtech.de>
 * @author Rodney Rehm <rodney.rehm@medialize.de>
 */
function urlify($string, $trim = true, $allow = null, $replace = null) {
  if (!is_string($string)) {
    throw new Exception('$string must be a string');
  }

  $_replace = array(
    0xE4 => "\0\0\0\x61\0\0\0\x65", // ä
    0xC4 => "\0\0\0\x41\0\0\0\x65", // Ä
    0xF6 => "\0\0\0\x6F\0\0\0\x65", // ö
    0xD6 => "\0\0\0\x4F\0\0\0\x65", // Ö
    0xFC => "\0\0\0\x75\0\0\0\x65", // ü
    0xDC => "\0\0\0\x55\0\0\0\x65", // Ü
    0xDF => "\0\0\0\x73\0\0\0\x73", // ß
    0xE6 => "\0\0\0\x61\0\0\0\x65", // æ
    0xC6 => "\0\0\0\x41\0\0\0\x65", // Æ
  );

  if ($replace && is_array($replace)) {
    foreach ($replace as $k => $v) {
      $_replace[$k] = mb_convert_encoding($v, "UTF-32BE");
    }
  }

  if ($allow && is_string($allow)) {
    $t = mb_convert_encoding($allow, "UTF-32BE");
    $t = unpack("N*", $t);
    $allow = array();
    foreach ($t as $k) {
      $allow[$k] = true;
    }
  } elseif ($allow && !is_array($allow)) {
    $allow = null;
  }

  $res = '';
  $string = mb_convert_encoding($string, "UTF-32BE");
  $unicodes = unpack("N*", $string);
  $i = -1;

  foreach ($unicodes as $code) {
    $i++;

    if (($code >= 97 && $code <= 122) || ($code >= 65 && $code <= 90) || ($code >= 48 && $code <= 57) || $code == 95 || $code == 45) {
      // skip normalization for alphanumeric characters [a-zA-Z0-9_-]
      $res .= mb_substr($string, $i, 1, "UTF-32BE");
    } elseif ($allow && isset($allow[$code])) {
      // skip normalization for allowed characters
      $res .= mb_substr($string, $i, 1, "UTF-32BE");
    } elseif (isset($_replace[$code])) {
      // replace as defined
      $res .= $_replace[$code];
    } elseif (($code >= 0xC0 && $code <= 0xC6) || ($code >= 0xE0 && $code <= 0xE6) || ($code >= 0x100 && $code <= 0x105)) {
      $res .= "\0\0\0\x61"; // a
    } elseif ($code == 0xC7 || $code == 0xE7 || ($code >= 0x106 && $code <= 0x10D)) {
      $res .= "\0\0\0\x63"; // c
    } elseif ($code == 0xD0 || ($code >= 0x10E && $code <= 0x111)) {
      $res .= "\0\0\0\x64"; // d
    } elseif (($code >= 0xC8 && $code <= 0xCB) || ($code >= 0xE8 && $code <= 0xEB) || ($code >= 0x112 && $code <= 0x11B)) {
      $res .= "\0\0\0\x65"; // e
    } elseif (($code >= 0xCC && $code <= 0xCF) || ($code >= 0xEC && $code <= 0xEF)) {
      $res .= "\0\0\0\x69"; // i
    } elseif ($code == 0xD1 || $code == 0xF1) {
      $res .= "\0\0\0\x6E"; // n
    } elseif (($code >= 0xD2 && $code <= 0xD8) || ($code >= 0xF2 && $code <= 0xF8)) {
      $res .= "\0\0\0\x6F"; // o
    } elseif (($code >= 0xD9 && $code <= 0xDB) || ($code >= 0xF9 && $code <= 0xFB)) {
      $res .= "\0\0\0\x75"; // u
    } elseif ($code == 0xDD || $code == 0xFD || $code == 0xFF) {
      $res .= "\0\0\0\x79"; // y
    } else {
      $res .= "\0\0\0\x2D"; // -
    }
  }

  if ($trim) {
    $res = preg_replace('#(\0\0\0\x2D){2,}#', "\0\0\0\x2D", $res);
    $res = preg_replace('#(^\0\0\0\x2D)|(\0\0\0\x2D$)#', "", $res);
  }

  return mb_convert_encoding($res, mb_internal_encoding(), "UTF-32BE");
}
