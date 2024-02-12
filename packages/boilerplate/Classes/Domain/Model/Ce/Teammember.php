<?php

declare(strict_types=1);

namespace Boilerplate\Boilerplate\Domain\Model\Ce;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Teammember extends AbstractEntity
{

  /**
   * @var string
   */
  protected $memberName = '';

  /**
   * @var string
   */
  protected $memberShortInfo = '';

  /**
   * @var string
   */
  protected $memberDescription = '';

  /**
   * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
   * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade
   */
  protected $memberImage;

  /**
   * @return string
   */
  public function getMemberName()
  {
    return $this->memberName;
  }

  /**
   * @param string $memberName
   */
  public function setMemberName($memberName)
  {
    $this->memberName = $memberName;
  }

  /**
   * @return string
   */
  public function getMemberShortInfo()
  {
    return $this->memberShortInfo;
  }

  /**
   * @param string $memberShortInfo
   */
  public function setMemberShortInfo($memberShortInfo)
  {
    $this->memberShortInfo = $memberShortInfo;
  }

  /**
   * @return string
   */
  public function getMemberDescription()
  {
    return $this->memberDescription;
  }

  /**
   * @param string $memberDescription
   */
  public function setMemberDescription($memberDescription)
  {
    $this->memberDescription = $memberDescription;
  }

  /**
   * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
   */
  public function getMemberImage()
  {
    return $this->memberImage;
  }

  /**
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $memberImage
   */
  public function setMemberImage($memberImage)
  {
    $this->memberImage = $memberImage;
  }

}