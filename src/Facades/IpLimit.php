<?php
/**
 * Created by Eric-Nothing.
 * Date: 2020/9/18
 * Time: 17:12
 */

namespace ENothing\IpLimit\Facades;


use Illuminate\Support\Facades\Facade;

class IpLimit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'IpLimit';
    }
}