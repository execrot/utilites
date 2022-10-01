<?php

declare(strict_types=1);

namespace Light\Utilites\Validator;

class Enum extends ValidatorAbstract
{
  public array $expected = [];

  /**
   * @return array
   */
  public function getExpected(): array
  {
    return $this->expected;
  }

  /**
   * @param array $expected
   */
  public function setExpected(array $expected): void
  {
    $this->expected = $expected;
  }

  /**
   * @param mixed $value
   * @return bool
   */
  public function isValid(mixed $value): bool
  {
    return in_array($value, $this->expected);
  }
}
