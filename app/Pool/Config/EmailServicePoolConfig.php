<?php
/**
 * This file is part of Swoft.
 *
 * @link    https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Pool\Config;

use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Value;
use Swoft\Pool\PoolProperties;

/**
 * the config of service user
 *
 * @Bean()
 */
class EmailServicePoolConfig extends ServicePoolConfig
{
    /**
     * the name of pool
     *
     * @Value(env="${EMAIL_POOL_NAME}")
     * @var string
     */
    protected $name = '';

    /**
     * the addresses of connection
     *
     * <pre>
     * [
     *  '127.0.0.1:88',
     *  '127.0.0.1:88'
     * ]
     * </pre>
     *
     * @Value(env="${EMAIL_POOL_URI}")
     * @var array
     */
    protected $uri = [];
}
