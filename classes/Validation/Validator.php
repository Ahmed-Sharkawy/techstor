<?php

namespace TechStore\Classes\Validation;

class Validator
{
  private $errors = [];

  public function validate(string $name, $value, array $rules)
  {
    foreach ($rules as $rule) {
      // if ($rule == "required") {
      //   $obg = new Required;
      // } elseif ($rule == "numeric") {
      //   $obg = new Numeric;
      // } elseif ($rule == "max") {
      //   $obg = new Max;
      // } elseif ($rule == "email") {
      //   $obg = new Email;
      // }

      $obg = new $rule;

      $error = $obg->check($name, $value);
      if ($error != false) {
        $this->errors[] = $error;
        break;
      }
    }
  }

  public function getErrors() : array
  {
    return $this->errors;
  }

  public function hasErrors() :bool
  {
    return ! empty($this->errors);
  }
}
