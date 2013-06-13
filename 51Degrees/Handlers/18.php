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
function E18($target, $test, $ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 100000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[2], $test[2], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[3], $test[3], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[4], $test[4], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[5], $test[5], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[6], $test[6], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[7], $test[7], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[8], $test[8], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[9], $test[9], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[10], $test[10], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[11], $test[11], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[12], $test[12], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[13], $test[13], $ls, 1, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[14], $test[14], $ls, 1, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[15], $test[15], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[16], $test[16], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[17], $test[17], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[18], $test[18], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[19], $test[19], $ls, 10000, $score);
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
function _H18($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=;)([^;\\)]+)(?=Build/)#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#', $useragent),
    3 => fiftyone_degrees_preg_match_all('#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#', $useragent),
    4 => fiftyone_degrees_preg_match_all('#(?<=UC Browser)\\d+\\.\\d+#', $useragent),
    5 => fiftyone_degrees_preg_match_all('#(?<=UP\\.Browser)[\\d\\.]+#', $useragent),
    6 => fiftyone_degrees_preg_match_all('#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#', $useragent),
    7 => fiftyone_degrees_preg_match_all('#(?<=Opera Mini/)\\d+\\.\\d+#', $useragent),
    8 => fiftyone_degrees_preg_match_all('#(?<=Opera Mobi/)\\d+\\.\\d+#', $useragent),
    9 => fiftyone_degrees_preg_match_all('#(?<=Version/)\\d+\\.\\d+#', $useragent),
    10 => fiftyone_degrees_preg_match_all('#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#', $useragent),
    11 => fiftyone_degrees_preg_match_all('#(?<=CrMo/)\\d+#', $useragent),
    12 => fiftyone_degrees_preg_match_all('#(?<=Chrome/)\\d+#', $useragent),
    13 => fiftyone_degrees_preg_match_all('#(?<=AppleWebKit/)[\\d\\.\\+]+#', $useragent),
    14 => fiftyone_degrees_preg_match_all('#(?<=Mobile Safari/)[\\d\\.]+#', $useragent),
    15 => fiftyone_degrees_preg_match_all('#(?<=Flipboard/)\\d+\\.\\d+#', $useragent),
    16 => fiftyone_degrees_preg_match_all('#UCBrowser/\\d+\\.\\d#', $useragent),
    17 => fiftyone_degrees_preg_match_all('#MQQBrowser/\\d+\\.\\d#', $useragent),
    18 => fiftyone_degrees_preg_match_all('#\\[operamini\\]#', $useragent),
    19 => fiftyone_degrees_preg_match_all('#^iBrowser/\\d(\\.|)\\d#', $useragent));
  $ns = E18($segments, array(0 => array(0 => ' GT-I9100 '), 1 => array(0 => ' GT-I9100 Build/GINGERBREAD'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(248964,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; en-gb; GT-I9100 Build/GINGERBREAD) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '15575-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' GT-I9100X '), 1 => array(0 => ' GT-I9100X Build/GINGERBREAD'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(248964,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; en-gb; GT-I9100X Build/GINGERBREAD) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '15575-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' GT-S5830 '), 1 => array(0 => ' GT-S5830 Build/GRWK74'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(211440,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; cs-cz; GT-S5830 Build/GRWK74; kevinlekiller@xda forums) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '14186-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' R800i '), 1 => NULL, 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => NULL, 10 => NULL, 11 => NULL, 12 => NULL, 13 => NULL, 14 => NULL, 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(205160,112542,111697,913, 'Dalvik/1.4.0 (Linux; U; Android 2.4; R800i Build/3.0.A.1.79)', '15541-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' LT15i '), 1 => NULL, 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => NULL, 10 => NULL, 11 => NULL, 12 => NULL, 13 => NULL, 14 => NULL, 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(204282,112542,111697,913, 'Dalvik/1.4.0 (Linux; U; Android 2.4; LT15i Build/3.0.A.1.119)', '14993-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' MT15i '), 1 => array(0 => ' MT15i Build/3.0.A.1.79'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(203132,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; sv-se; MT15i Build/3.0.A.1.79) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '15517-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' MT15i '), 1 => NULL, 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => NULL, 10 => NULL, 11 => NULL, 12 => NULL, 13 => NULL, 14 => NULL, 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(203132,112542,111697,913, 'Dalvik/1.4.0 (Linux; U; Android 2.4; MT15i Build/3.0.A.1.79)', '15517-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' SE_X10i '), 1 => array(0 => ' SE_X10i Build/Acmabuon'), 2 => array(0 => ' 2.4.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(82090,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4.1; en-us; SE_X10i Build/Acmabuon) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '11950-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' SE_X10i '), 1 => NULL, 2 => array(0 => ' 2.4.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => NULL, 10 => NULL, 11 => NULL, 12 => NULL, 13 => NULL, 14 => NULL, 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(82090,112542,111697,913, 'Dalvik/1.2.0 (Linux; U; Android 2.4.1; SE_X10i Build/Acmabuon)', '11950-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Nexus One '), 1 => array(0 => ' Nexus One Build/GRH84'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(157973,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; en-us; Nexus One Build/GRH84) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '16036-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Nexus One '), 1 => array(0 => ' Nexus One Build/GRI05'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(157973,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; en-gb; Nexus One Build/GRI05) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '16036-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Nexus One '), 1 => array(0 => ' Nexus One Build/GRI11B'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(157973,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; en-us; Nexus One Build/GRI11B) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '16036-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Nexus One '), 1 => array(0 => ' Nexus One Build/GRI06B'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(157973,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; en-us; Nexus One Build/GRI06B) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '16036-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Nexus One '), 1 => array(0 => ' Nexus One Build/GINGERBREAD'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(157973,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; en-us; Nexus One Build/GINGERBREAD) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '16036-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Nexus One '), 1 => NULL, 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => NULL, 10 => NULL, 11 => NULL, 12 => NULL, 13 => NULL, 14 => NULL, 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(157973,112542,111697,913, 'Dalvik/1.4.0 (Linux; U; Android 2.4; Nexus One Build/GRI11B)', '16036-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' ADR6300 '), 1 => array(0 => ' ADR6300 Build/GRI05'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(131639,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; en-us; ADR6300 Build/GRI05) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '12216-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Nexus S '), 1 => array(0 => ' Nexus S Build/GRI11B'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(304858,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; en-gb; Nexus S Build/GRI11B) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '14574-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Nexus S '), 1 => array(0 => ' Nexus S Build/GRI16B'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(304858,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; en-us; Nexus S Build/GRI16B) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '14574-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Nexus S '), 1 => array(0 => ' Nexus S Build/GRH83'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(304858,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; ko-kr; Nexus S Build/GRH83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '14574-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Nexus S '), 1 => array(0 => ' Nexus S Build/GRI06B'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(304858,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; en-us; Nexus S Build/GRI06B) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '14574-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Nexus S '), 1 => array(0 => ' Nexus S Build/GRH84'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(304858,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; en-gb; Nexus S Build/GRH84) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '14574-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Nexus S '), 1 => array(0 => ' Nexus S Build/GINGERBREAD'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(304858,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; en-us; Nexus S Build/GINGERBREAD) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '14574-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Nexus S '), 1 => NULL, 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => NULL, 10 => NULL, 11 => NULL, 12 => NULL, 13 => NULL, 14 => NULL, 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(304858,112542,111697,913, 'Dalvik/1.4.0 (Linux; U; Android 2.4; Nexus S Build/GRI05)', '14574-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Full Android on Crespo '), 1 => array(0 => ' Full Android on Crespo Build/GINGERBREAD'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(304858,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4; en-us; Full Android on Crespo Build/GINGERBREAD) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '14574-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' Dell Venue '), 1 => array(0 => ' Dell Venue Build/MIUI'), 2 => array(0 => ' 2.4.27'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(501522,112542,111697,913, 'Mozilla/5.0 (Linux; U; Android 2.4.27; en-us; Dell Venue Build/MIUI) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '16954-5629-15760-18092');
    $ls = $ns;
  }
  $ns = E18($segments, array(0 => array(0 => ' T-Mobile G1 '), 1 => array(0 => ' T-Mobile G1 Build/DMD64'), 2 => array(0 => ' 2.4'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '3.1'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '528.5+'), 14 => array(0 => '525.20.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(360501,112542,111697,913, 'User-Agent: Mozilla/5.0 (Linux; U; Android 2.4; en-us; T-Mobile G1 Build/DMD64) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1', '13189-5629-15760-18092');
    $ls = $ns;
  }
  return $dl;
}