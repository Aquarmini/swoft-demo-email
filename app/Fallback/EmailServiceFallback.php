<?php
/**
 * This file is part of Swoft.
 *
 * @link    https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Fallback;

use App\Lib\DemoInterface;
use App\Lib\EmailInterface;
use Swoft\Sg\Bean\Annotation\Fallback;
use Swoft\Core\ResultInterface;

/**
 * Fallback demo
 *
 * @Fallback("emailFallback")
 * @method ResultInterface deferVersion()
 */
class EmailServiceFallback implements EmailInterface
{
    public function version()
    {
        return '1.0.0.fallback';
    }
}