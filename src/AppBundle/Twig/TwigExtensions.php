<?php
namespace AppBundle\Twig;

use AppBundle\Service\CurrentUserDataService;

/**
 * Created by PhpStorm.
 * User: zn
 * Date: 11/16/16
 * Time: 3:36 PM
 */
class TwigExtensions extends \Twig_Extension
{
    /**
     * @var CurrentUserDataService
     */
    protected $currentUserDataService;

    public function __construct(CurrentUserDataService $currentUserDataService)
    {
        $this->currentUserDataService = $currentUserDataService;
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('compare_ip', array($this, 'compareIp'))
        );
    }

    public function compareIp($articleIp)
    {
        dump($articleIp);
        dump($this->currentUserDataService->getIp());
        if ($articleIp === $this->currentUserDataService->getIp()) return 1;
        return 0;
    }

}
