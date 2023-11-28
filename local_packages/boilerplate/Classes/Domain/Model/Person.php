<?php

declare(strict_types=1);

namespace Boilerplate\Boilerplate\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;


/**
 * Person
 */
class Person extends AbstractEntity
{

  protected string $name = '';

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName(string $name): void
  {
    $this->name = $name;
  }


}
