<?php

declare(strict_types=1);

namespace Boilerplate\Boilerplate\Domain\Model\Ce;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Team extends AbstractEntity
{

  /**
   * @var string
   */
  protected $name = '';

  /**
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Boilerplate\Boilerplate\Domain\Model\Ce\Teammember>
   * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade
   */
  protected $members;

  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
   */
  public function getMembers()
  {
    return $this->members;
  }

  /**
   * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $members
   */
  public function setMembers($members)
  {
    $this->members = $members;
  }

}