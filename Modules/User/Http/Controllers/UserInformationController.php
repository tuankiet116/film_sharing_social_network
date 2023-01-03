<?php

namespace Modules\User\Http\Controllers;

use App\Services\User\UserService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserInformationController extends Controller
{
    use ApiResponse;

    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getProfile()
    {
        $data = $this->userService->getProfile();
        return $this->responseData($data, 200);
    }

    public function getUserProfile(int $userID)
    {
        $data = $this->userService->getUserProfile($userID);
        return $this->responseData($data, 200);
    }

    public function followUser($userId)
    {
    }

    public function getFollowers()
    {
    }

    public function getFollowed()
    {
    }

    public function updateInformation(Request $request)
    {
        $data = $request->all();
        $this->userService->updateProfile($data);
    }

    public function getListUserImageDefault()
    {
        return $this->userService->getListUserImageDefault();
    }

    public function getBackgroundDefault()
    {
        return $this->userService->getBackgroundDefault();
    }

    public function updateAvatar()
    {
    }

    public function updateBackground()
    {
    }

    public function updatePassword()
    {

    }
}
