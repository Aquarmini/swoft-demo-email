<?php

namespace App\Lib;

use Swoft\Core\ResultInterface;

/**
 * The interface of email service
 *
 * @method ResultInterface deferVersion()
 */
interface EmailInterface
{
    /**
     * @param array $ids
     *
     * @return array
     */
    public function version();
}