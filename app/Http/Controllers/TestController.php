<?php

namespace App\Http\Controllers;

use App\Exceptions\TestException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exceptions\CustomeException;

class TestController extends Controller
{
  public function __invoke()
  {
    // try{

      $this->makeSomethingRiskey();

    // }catch(TestException $e)
    // {
    //   return response()->json([
    //     'message' => $e->getMessage(),
    //   ], $e->getCode());
    // }

    return response()->json([
      'message' => 'hi'
    ]);
  }

  protected function makeSomethingRiskey()
  {
    //throw new TestException(message: 'Oops daisy');
    throw TestException::oopsDaisy();
    //throw CustomeException::internalException();
  }




}