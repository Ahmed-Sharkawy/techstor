<?php

interface ValidationRule
{
  public function check($name, $value);
}
