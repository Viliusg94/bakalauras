<?php
/**
 * Created by PhpStorm.
 * User: robertas
 * Date: 16.11.3
 * Time: 20.02
 */

namespace AppBundle\Service;

use AppBundle\DBAL\Types\OriginType;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\RequestStack;
use AppBundle\Entity\Comment;

class ActivityService
{
    /**
     * @var EntityManager
     */
//    private $em;

    private $request;

//EntityManager $em,
    public function __construct(RequestStack $requestStack)
    {
//        $this->em = $em;
        $this->request = $requestStack->getCurrentRequest();
    }

    public function getIp() {
        return $this->request->getClientIp();
    }



}
