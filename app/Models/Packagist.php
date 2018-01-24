<?php

namespace App\Models;

use Curl\Curl;
use Peak\Common\Collection;

class Packagist extends Collection
{
    /**
     * Load package from packagist.org
     *
     * @param $package
     * @return Packagist
     * @throws \Exception
     */
    public static function loadPackage($package)
    {
        $curl = new Curl();
        $curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
        $curl->setOpt(CURLOPT_RETURNTRANSFER, true);
        $curl->get('https://packagist.org/packages/'.$package.'.json');

        if ($curl->error) {
            throw new \Exception('Error: ' . $curl->errorCode . ': '.$curl->errorMessage);
        }

        return new self(json_decode(json_encode($curl->response), true));
    }

}