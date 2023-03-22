<?php

namespace Boilerplate\StravaMembers\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Member extends AbstractEntity
{
  protected $stravaId = '';

  /**
   * @return string
   */
  public function getStravaId(): string
  {
    return $this->stravaId;
  }

  /**
   * @param string $stravaId
   */
  public function setStravaId(string $stravaId): void
  {
    $this->stravaId = $stravaId;
  }


}