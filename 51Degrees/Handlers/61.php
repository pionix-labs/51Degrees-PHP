<?php
/**
 * @file
 * Auto Generated Code - DO NOT EDIT
 *
 * See http://51degrees.mobi/Support/Documentation/PHP#AutoGeneratedSourceCode for more details.*
 */

/**
 * See LICENSE.TXT for terms of use and copyright.
 */

/**
 * Calculates the matching score between the two strings for this handler.
 *
 * &$target string
 *   The string we're trying to find the closest value to.
 * $test string
 *   The string that we're testing against.
 * $ls integer
 *   The lowest score we've found so far.
 * return integer
 *   The score between the two strings.
 */
function E61($target, $test, $ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 1000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[2], $test[2], $ls, 1000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  return $score;
}

/**
 * Returns the details of the devices that are closest to the
 * useragent string provided.
 *
 * $useragent string
 *   The useragent we're trying to find.
 * return array
 *   An array of device details for the closest devices.
 */
function _H61($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#Maemo Browser \\d\\.\\d#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#Opera Mobi/\\d+#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#Mobile#', $useragent));
  $ns = E61($segments, array(0 => array(0 => 'Maemo Browser 1.7'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,477933,502895,913, 'Mozilla/5.0 (X11; U; Linux armv7l; en-GB; rv:1.9.2.3pre) Gecko/X Firefox/3.5 Maemo Browser 1.7.4.8 RX-51 N900', '15364-22740-22741-18092');
    $ls = $ns;
  }
  $ns = E61($segments, array(0 => NULL, 1 => array(0 => 'Opera Mobi/14'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(37484,477933,641751,913, 'Opera/9.80 (Linux armv7l; Maemo; Opera Mobi/14; U; en-GB) Presto/2.9.201 Version/11.50', '18088-22740-18070-18092');
    $ls = $ns;
  }
  $ns = E61($segments, array(0 => array(0 => 'Maemo Browser 1.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,477933,565283,913, 'Mozilla/5.0 (X11; U; Linux armv7l; en-GB; rv:1.9.2a1pre) Gecko/X Firefox/3.5 Maemo Browser 1.5.6 RX-51 N900', '15364-22740-22743-18092');
    $ls = $ns;
  }
  $ns = E61($segments, array(0 => NULL, 1 => array(0 => 'Opera Mobi/16'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(37484,477933,920736,913, 'Opera/9.80 (Linux armv7l; Maemo; Opera Mobi/16) Presto/2.11.355 Version/12.10', '18088-22740-18692-18092');
    $ls = $ns;
  }
  $ns = E61($segments, array(0 => NULL, 1 => array(0 => 'Opera Mobi/15'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(37484,477933,920736,913, 'Opera/9.80 (Linux armv7l; Maemo; Opera Mobi/15) Presto/2.11.355 Version/12.10', '18088-22740-18692-18092');
    $ls = $ns;
  }
  $ns = E61($segments, array(0 => array(0 => 'Maemo Browser 1.4'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,477933,477940,913, 'Mozilla/5.0 (X11; U; Linux armv7l; en-GB; rv:1.9.2a1pre) Gecko/X Firefox/3.5 Maemo Browser 1.4.1.21 RX-51 N900', '15364-22740-22744-18092');
    $ls = $ns;
  }
  $ns = E61($segments, array(0 => NULL, 1 => array(0 => 'Opera Mobi/4'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(37484,477933,161812,913, 'Opera/9.80 (Linux armv7l; Maemo; Opera Mobi/4; U; en-GB) Presto/2.5.28 Version/10.1', '18088-22740-18373-18092');
    $ls = $ns;
  }
  $ns = E61($segments, array(0 => NULL, 1 => array(0 => 'Opera Mobi/9'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(37484,477933,404612,913, 'Opera/9.80 (Linux armv7l; Maemo; Opera Mobi/9; U; en-GB) Presto/2.7.81 Version/11.00', '18088-22740-17269-18092');
    $ls = $ns;
  }
  return $dl;
}