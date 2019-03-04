<?php
/**
 * Created by PhpStorm.
 * User: LANDAN
 * Date: 2018/9/28
 * Time: 13:13
 */

namespace App\Middleware;

use Closure;

use App\Helpers\Response;

class NonExistentURIMiddleware
{
    /**
     * The authentication guard factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct( ) {

    }

    /**
     * 后置中间件，统一处理 未定义的 API path 请求
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($oRequest, Closure $cNext) {

        $cNext($oRequest);

        $iStatus = config('RESPONSES.' . 'IT_REQUESTS_NONEXISTENT_URI' . '.STATUS');
        $aJson = [
            'result' => config('RESPONSES.' . 'IT_REQUESTS_NONEXISTENT_URI' . '.RESULT'),
            'code' => config('RESPONSES.' . 'IT_REQUESTS_NONEXISTENT_URI' . '.CODE'),
            'message' => config('RESPONSES.' . 'IT_REQUESTS_NONEXISTENT_URI' . '.MESSAGE'),
            'jwt' => '',
            'total_count' => 0,
            'data' => (object)[],
        ];

        return response()->json($aJson, $iStatus, ['Content-Type' => 'application/json;charset=utf8'], JSON_UNESCAPED_UNICODE );
    }
}
