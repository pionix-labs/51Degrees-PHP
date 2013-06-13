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
 * Calculates the edit distance between the two strings.
 *
 * &$target string
 *   The string we're trying to find the closest value to.
 * $test string
 *   The string that we're testing against.
 * $ls integer
 *   The lowest score we've found so far.
 * return integer
 *   The edit distance between the two strings.
 */
function E52($target, $test, $ls) {
  return fiftyone_degrees_edit_distance($target, $test, $ls);
}

/**
 * Returns the details of the devices that are closest to the useragent string provided.
 *
 * $useragent string
 *   The useragent we're trying to find.
 * return array
 *   An array of device details for the closest devices.
 */
function _H52($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'HUAWEI-HUAWEI-Y-220T/1.0 Linux/2.6.35.7 Android/2.3.5 Release/11.13.2012 Browser/AppleWebKit533.1 (KHTML, like Gecko) Mozilla/5.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,112542,111697,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'HUAWEI-HUAWEI-Y-220T/1.0 Linux/2.6.35.7 Android/2.3.5 Release/11.01.2012 Browser/AppleWebKit533.1 (KHTML, like Gecko) Mozilla/5.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,112542,111697,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'HUAWEI-HUAWEI-Y-220T/1.0 Linux/2.6.35.7 Android/2.3.5 Release/12.15.2012 Browser/AppleWebKit533.1 (KHTML, like Gecko) Mozilla/5.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,112542,111697,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'HUAWEI-HUAWEI-Y-220T/1.0 Linux/2.6.35.7 Android/2.3.5 Release/11.28.2012 Browser/AppleWebKit533.1 (KHTML, like Gecko) Mozilla/5.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,112542,111697,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'HUAWEI-HUAWEI-Y-220T/1.0 Linux/2.6.35.7 Android/2.3.5 Release/12.25.2012 Browser/AppleWebKit533.1 (KHTML, like Gecko) Mozilla/5.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,112542,111697,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'HUAWEI-HUAWEI-Y-220T/1.0 Linux/2.6.35.7 Android/2.3.5 Release/01.16.2013 Browser/AppleWebKit533.1 (KHTML, like Gecko) Mozilla/5.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,112542,111697,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'HuaweiM865/M865C153B826 CORE/6.506.4.1 OpenCORE/2.02 (Linux;Android 2.3.3)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(314168,112542,111697,913, $ua, '12847-5629-15760-18092');
  }
  $ua = 'HuaweiU8650/C00B828SP03 CORE/6.506.4.1 OpenCORE/2.02 (Linux;Android 2.3.3)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(317684,112542,111697,913, $ua, '12935-5629-15760-18092');
  }
  $ua = 'Huawei-M860/M860V100R001C153B251SP03 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(173885,907,72,913, $ua, '16331-5477-4861-18092');
  }
  $ua = 'Huawei-HUAWEI-M860/M860V100R001C177B261 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(173885,907,72,913, $ua, '16331-5477-4861-18092');
  }
  $ua = 'Huawei-HUAWEI-M860/M860V100R001C177B258SP01 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(173885,907,72,913, $ua, '16331-5477-4861-18092');
  }
  $ua = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.5) Mozilla/5.0 (HW-HUAWEI_C8300/C8300V100R001C00B102;U;Windows Mobile/6.5;320*480;CTC/2.0) IE/6.0';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(37484,6649,6655,913, $ua, '18088-5222-17183-18092');
  }
  $ua = 'HUAWEI-M635/001.00 WAP/OBIGO/Q05A';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(416968,22118,114492,913, $ua, '15255-17017-3534-18092');
  }
  $ua = 'Huawei-Vodafone 845/U8120V100R001IRLC02B220SP02 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(150073,907,72,913, $ua, '13384-5477-4861-18092');
  }
  $ua = 'Huawei-Vodafone 845/U8120V100R001HUNC02B221SP02 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(150073,907,72,913, $ua, '13384-5477-4861-18092');
  }
  $ua = 'HUAWEI-M735/001.00 Opera/9.70';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(371480,22118,52209,913, $ua, '17906-17017-4626-18092');
  }
  $ua = 'UCWEB/2.0(Java; U; MIDP-2.0; en-us; huawei) U2/1.0.0 UCBrowser/8.7.1.234 U2/1.0.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,22118,876851,913, $ua, '15364-17017-18529-18092');
  }
  $ua = 'HUAWEI-M636/001.00 WAP/OBIGO/Q05A';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(913608,108321,114492,913, $ua, '22798-5208-3534-18092');
  }
  $ua = 'Mozilla/5.0 (;;; en-us; Huawei-U8651S Build/U8651SV100R001USAC85B843) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(956527,101053,136111,913, $ua, '19798-17979-4201-18092');
  }
  $ua = 'HUAWEI-M570/001.00 WAP/OBIGO/Q05A';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(950657,22118,114492,913, $ua, '22801-17017-3534-18092');
  }
  $ua = 'Huawei-RBM2/U8230V100R001C157B826 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(148114,907,72,913, $ua, '12493-5477-4861-18092');
  }
  $ua = 'Huawei-Turkcell T10/U8110V100R001C121B256SP02 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(151346,907,72,913, $ua, '16383-5477-4861-18092');
  }
  $ua = 'Huawei-Turkcell T10/U8110V100R001C121B256SP04 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(151346,907,72,913, $ua, '16383-5477-4861-18092');
  }
  $ua = 'HUAWEI-M750/001.00 ACS-NetFront/3.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(392985,22118,47745,913, $ua, '14329-17017-4924-18092');
  }
  $ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; HUAWEI; HUAWEI Ascend W1 A4BA5B9A-2CD4-430D-B216-EA57BAF03A15)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(997676,704127,704134,913, $ua, '19761-18148-18263-18092');
  }
  $ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; HUAWEI; Ascend W1)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(997676,704127,704134,913, $ua, '19761-18148-18263-18092');
  }
  $ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; HUAWEI; W1-U00)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(997676,704127,704134,913, $ua, '19761-18148-18263-18092');
  }
  $ua = 'HUAWEI-M228/001.00 ACCESS-NetFront/3.2(Mobile) Mozilla/5.0';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(300339,22118,47745,913, $ua, '12378-17017-4924-18092');
  }
  $ua = 'HUAWEI-M228/001.00 ACS-NetFront/3.2 Novarra-Vision/8.0';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(300339,22118,47745,913, $ua, '12378-17017-4924-18092');
  }
  $ua = 'HUAWEI-M228/001.00 ACS-NetFront/3.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(300339,22118,47745,913, $ua, '12378-17017-4924-18092');
  }
  $ua = 'Huawei-Smile/U8300V100R001THAC208B258 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(181525,907,72,913, $ua, '13776-5477-4861-18092');
  }
  $ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; Huawei; H883G; HuaweiH883G)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,704127,704134,913, $ua, '15364-18148-18263-18092');
  }
  $ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; HUAWEI; 4Afrika)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,704127,704134,913, $ua, '15364-18148-18263-18092');
  }
  $ua = 'HUAWEI_Y220T_TD/1.0 Android/2.3.5 SC8810_CMCC/W12.06.21 Release/06.22.2012 Browser/AppleWebkit533.1';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(808350,112542,111697,913, $ua, '21223-5629-15760-18092');
  }
  $ua = 'Huawei-U2800/U2800ACBXB119 Browser/Obigo-Browser/Q05A';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(410231,22118,114492,913, $ua, '15159-17017-3534-18092');
  }
  $ua = 'Huawei-U2800/U2800ACBXB119 Browser/Obigo-Browser/Q05A Novarra-Vision/8.0';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(410231,22118,114492,913, $ua, '15159-17017-3534-18092');
  }
  $ua = 'Huawei/1.0/G6600/Browser/obigo-browser/q03c, Huawei/1.0/G6600/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(387290,22118,119194,913, $ua, '14470-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/G6600/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(387290,22118,119194,913, $ua, '14470-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG3610/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(277644,22118,119194,913, $ua, '15754-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG3610/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2, Huawei/1.0/0HuaweiG3610/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(277644,22118,119194,913, $ua, '15754-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG3610/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2 Novarra-Vision/8.0';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(277644,22118,119194,913, $ua, '15754-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/G7010/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(277140,22118,119194,913, $ua, '15658-17017-3807-18092');
  }
  $ua = 'Huawei/G7010/1.0/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(277140,22118,119194,913, $ua, '15658-17017-3807-18092');
  }
  $ua = 'Huawei/G7010/1.0/Browser/obigo-browser/q03c Novarra-Vision/8.0';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(277140,22118,119194,913, $ua, '15658-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/G7010/Browser/obigo-browser/q03c Novarra-Vision/8.0';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(277140,22118,119194,913, $ua, '15658-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG6620/SP01 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2, Huawei/1.0/0HuaweiG6620/SP01 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(248388,22118,119194,913, $ua, '14143-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG6620/SP01 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(248388,22118,119194,913, $ua, '14143-17017-3807-18092');
  }
  $ua = 'Huawei-G6620/1.0/0/SP01 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(248388,22118,119194,913, $ua, '14143-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/G6603/Browser/obigo-browser/q03c Novarra-Vision/8.0';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(228766,22118,119194,913, $ua, '15145-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/G6603/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(228766,22118,119194,913, $ua, '15145-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI_G6005/Obigo Browser/Q03C Browser/Q03C MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(391762,22118,119194,913, $ua, '12732-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG3511/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(277068,22118,119194,913, $ua, '15743-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG3511/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2 Novarra-Vision/8.0';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(277068,22118,119194,913, $ua, '15743-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/G6150/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(349235,22118,119194,913, $ua, '16365-17017-3807-18092');
  }
  $ua = 'MQQBrowser/3.0/Adr (Linux; U; 4.0.4; zh-cn; HUAWEI U8825D Build/U8825DV100R001C17B951;480*800)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(894301,142808,757821,913, $ua, '20094-18110-20781-18092');
  }
  $ua = 'MQQBrowser/3.0/Adr (Linux; U; 4.0.4; zh-cn; HUAWEI U8825D Build/U8825DV100R001C17B935;480*800)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(894301,142808,757821,913, $ua, '20094-18110-20781-18092');
  }
  $ua = 'HUAWEIU8520/1.0 Linux/2.6.35 Android/2.2.2 Release/5.26.2011 Browser/WebKit533.1';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(755690,101053,920,913, $ua, '16290-17979-3508-18092');
  }
  $ua = 'Huawei-V8401/V8401V100R001C219B256 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(169205,907,72,913, $ua, '18005-5477-4861-18092');
  }
  $ua = 'Huawei/1.0/G6605/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(393345,22118,119194,913, $ua, '17907-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG3510/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(351180,22118,119194,913, $ua, '13039-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG3510/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2 Novarra-Vision/8.0';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(351180,22118,119194,913, $ua, '13039-17017-3807-18092');
  }
  $ua = 'HUAWEI-M328/001.00 ACS-NetFront/3.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(283088,22118,47745,913, $ua, '13592-17017-4924-18092');
  }
  $ua = 'HUAWEI-C6100/001.00 ACS-Netfront/3.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(247596,22118,47745,913, $ua, '15401-17017-4924-18092');
  }
  $ua = 'Huawei/1.0/G5730/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(267411,22118,119194,913, $ua, '15617-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/U1000/B000 Browser/Obigo-Browser';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(327667,22118,16074,913, $ua, '16451-17017-17470-18092');
  }
  $ua = 'HUAWEI-M318/001.00 ACS-NetFront/3.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(369248,22118,47745,913, $ua, '13992-17017-4924-18092');
  }
  $ua = 'Huawei/1.0/T520/B000 Browser/obigo-browser/q04a';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(385850,22118,16074,913, $ua, '12612-17017-17470-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG6610/SW03 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(339294,22118,119194,913, $ua, '12640-17017-3807-18092');
  }
  $ua = 'Huawei-U526/1.0 BREW/3.1 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(253571,108321,16074,913, $ua, '15486-5208-17470-18092');
  }
  $ua = 'Mozilla/5.0 (HUAWEI/S6510V100R001C1X;U;REX/1.0;Opera Mini/4.2;BREW/3.1.5;Profile/MIDP-2.0 Configuration/CLDC-1.1;320*240;CTC/2.0) NetFront/3.5';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(313156,108321,48826,913, $ua, '12846-5208-4732-18092');
  }
  $ua = 'Huawei/1.0/T566/B000 Browser/obigo-browser/q04a';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(261597,22118,16074,913, $ua, '17909-17017-17470-18092');
  }
  $ua = 'Huawei/1.0/H11HW/B000 Browser/Obigo-Browser/Q04A';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(385634,22118,86513,913, $ua, '12606-17017-4203-18092');
  }
  $ua = 'HUAWEI G6610';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(339294,22118,16074,913, $ua, '12640-17017-17470-18092');
  }
  return $dl;
}