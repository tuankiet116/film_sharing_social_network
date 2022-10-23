<?php

namespace Modules\User\Http\Controllers;

use App\Services\User\UserAuthenticationService;
use App\Traits\ApiResponse;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FacebookController extends Controller
{
    use ApiResponse;
    private $userAuthenticationService;

    public function __construct(UserAuthenticationService $userAuthenticationService)
    {
        $this->userAuthenticationService = $userAuthenticationService;
    }

    public function fbLogin(Request $request)
    {
        try {
            $this->userAuthenticationService->facebookLogin($request);
            return $this->responseData([
                'message' => 'login_success',
                'code' => 200
            ], 200);
        } catch (Exception $e) {
            return $this->responseData([
                'message' => $e->getMessage(),
                'code' => 403
            ], 403);
        }
    }
}
