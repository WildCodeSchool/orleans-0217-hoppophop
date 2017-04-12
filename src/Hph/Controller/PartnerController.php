<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 20:21
 */

namespace Hph\Controller;
use Hph\Model\PartnerManager;

class PartnerController
{
    public function getPartner()
    {
        $partner = new PartnerManager();
        return $partner->getPartner();
    }
    public function render($twig)
    {
        $partner = $this->getPartner();
        echo $twig->load('partner.html.twig')->render(['partners'=>$partner]);
    }
}