<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Controllers;

use Swoft\App;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;
use Swoft\View\Bean\Annotation\View;
use Swoft\Http\Message\Server\Response;
use Swoft\Http\Message\Server\Request;
use Swoft\Rpc\Client\Bean\Annotation\Reference;
use App\Lib\EmailInterface;

/**
 * Class IndexController
 * @Controller
 * @package App\Controllers
 */
class IndexController extends BaseController
{

    /**
     * @Reference(name="email", fallback="emailFallback")
     *
     * @var EmailInterface
     */
    private $emailService;

    /**
     * @RequestMapping(route="/", method={RequestMethod::GET,RequestMethod::POST})
     */
    public function index(Request $request): Response
    {
        $data = config('message');

        if ($request->getMethod() === 'POST') {
            return $this->response->success($data);
        }
        return view('index/index', $data);
    }

    /**
     * @RequestMapping(route="/version", method={RequestMethod::GET,RequestMethod::POST})
     */
    public function version()
    {
        $version = $this->emailService->version();
        return $this->response->success($version);
    }
}
