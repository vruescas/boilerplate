<?php

namespace Boilerplate\StravaMembers\Controller;

use Boilerplate\StravaMembers\Domain\Repository\MemberRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class StravaMembersController extends ActionController
{

  private ?MemberRepository $memberRepository = null;

  public function injectMemberRepository(MemberRepository $memberRepository)
  {
    $this->memberRepository = $memberRepository;
  }

  public function listAction()
  {
    $members = $this->memberRepository->findAll();
    $this->view->assign('members', $members);

    return $this->htmlResponse();
  }
}