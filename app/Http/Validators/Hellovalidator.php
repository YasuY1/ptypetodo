<?php
namespace App\Http\Validators;

use illuminate\Validation\Validator;

class HelloValidator extends Validator{
  public function validateHello($attribute, $value, $parameters){
    return $value % 2 == 0;
  }
}