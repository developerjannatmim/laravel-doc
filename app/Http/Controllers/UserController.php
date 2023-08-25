<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filter;
use App\Services\Logger;

// class UserController extends Controller
// { 
    class Firewall
    {
        /**
         * The filter instances.
         *
         * @var array
         */
        protected $filters;
     
        /**
         * Create a new class instance.
         */
        public function __construct(
            protected \Illuminate\Log\Logger $logger,
            \PHPUnit\Util\Filter ...$filters,
        ) {
            $this->filters = $filters;
        }
    }
// }
