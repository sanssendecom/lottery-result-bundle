<?php
/**
 * ConnectionConstants
 *
 * Powered by sanssende.com
 * This file part of Sanssende LotteryResultBundle
 * Author: denizakturk
 */

namespace Sanssendecom\LotteryResultBundle\Connection;

class ConnectionConstants
{
    const SAYISALLOTO       = 'http://www.millipiyango.gov.tr/sonuclar/cekilisler/sayisal/SAY_';
    const SANSTOPU          = 'http://www.millipiyango.gov.tr/sonuclar/cekilisler/sanstopu/';
    const ONNUMARA          = 'http://www.millipiyango.gov.tr/sonuclar/cekilisler/onnumara/';
    const SUPERLOTO         = 'http://www.millipiyango.gov.tr/sonuclar/cekilisler/superloto/';
    const PIYANGO           = 'http://mpi.gov.tr/sonuclar/cekilisler/piyango/';
    const TICKETRAFFLEDATES = 'http://mpi.gov.tr/sonuclar/listCekilisleriTarihleri.php?tur=piyango';

    private $currentUri;

    public function __construct($lotteryType)
    {
        $this->currentUri = $lotteryType;
    }

    private function getCurrentUri()
    {
        return $this->currentUri;
    }

    protected function getConnectionUrl(\DateTime $raffleDate)
    {
        return $this->getCurrentUri()->currentUri . $raffleDate->format('Ymd') . '.json';
    }

    public static function getConstant($constName)
    {
        return constant("self::$constName");
    }

}