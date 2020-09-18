<?php
/**
 * Created by Eric-Nothing.
 * Date: 2020/9/18
 * Time: 16:57
 */

namespace ENothing\IpLimit;


use Illuminate\Config\Repository;

class IpLimit
{
    protected $whiteList;

    public function __construct(Repository $config)
    {

        $this->whiteList = $config->get("whiteList");
        
    }

    public function checkIp($ip):bool
    {

        if (in_array($ip,$this->whiteList)){

            return true;
        }

        return false;

    }

}