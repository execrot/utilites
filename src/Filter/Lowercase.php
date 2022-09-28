<?php

declare(strict_types=1);

namespace Light\Utilites\Filter;

/**
 * Class Lowercase
 * @package Light\Utilites\Filter
 */
class Lowercase extends FilterAbstract
{
  /**
   * @param string $value
   * @return string
   */
  public function filter(string $value): string
  {
    return strtolower($value);
  }
}