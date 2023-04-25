<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Repositories\OperationRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class OperationService {
    protected  OperationRepository $_operationRepository;
    public function __construct( OperationRepository $operationRepository)
{
   $this->_operationRepository=$operationRepository;
   
}













}