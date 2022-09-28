<?php

declare(strict_types=1);

namespace Light\Utilites\Filter;

/**
 * Class HtmlSpecialChars
 * @package Light\Utilites\Filter
 */
class HtmlSpecialChars extends FilterAbstract
{
  /**
   * @param string $value
   * @return string
   */
  public function filter(string $value): string
  {
    return htmlspecialchars($value);
  }
}