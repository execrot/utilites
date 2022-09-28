<?php

declare(strict_types=1);

namespace Light\Utilites\Validator;

/**
 * Class Number
 * @package Light\Utilites\Validator
 */
class Number extends ValidatorAbstract
{
  /**
   * @var int|null
   */
  public ?int $min = null;

  /**
   * @var int|null
   */
  public ?int $max = null;

  /**
   * @return int|null
   */
  public function getMin(): ?int
  {
    return $this->min;
  }

  /**
   * @param int $min
   */
  public function setMin(int $min): void
  {
    $this->min = $min;
  }

  /**
   * @return int
   */
  public function getMax(): int
  {
    return $this->max;
  }

  /**
   * @param int $max
   */
  public function setMax(int $max): void
  {
    $this->max = $max;
  }

  /**
   * @param int $value
   * @return bool
   */
  public function isValid($value): bool
  {
    if (empty($value) && $this->allowNull) {
      return true;
    }

    if ($this->min && $this->min > (int)$value) {
      return false;
    }

    if ($this->max && $this->max < (int)$value) {
      return false;
    }

    return true;
  }
}