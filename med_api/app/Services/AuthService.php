<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Repositories\AuthRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class AuthService {

    protected AuthRepository $_authRepository;
    public function __construct(AuthRepository $authRepository)
{
   $this->_authRepository=$authRepository;
   
}

}