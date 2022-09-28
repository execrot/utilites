<?php

declare(strict_types=1);

namespace Light\Utilites\Filter;

/**
 * Class Uppercase
 * @package Light\Utilites\Filter
 */
class Uppercase extends FilterAbstract
{
  /**
   * @param string $value
   * @return string
   */
  public function filter(string $value): string
  {
    return strtoupper($value);
  }
}