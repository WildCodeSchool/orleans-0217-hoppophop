<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 20:21
 */

namespace Hph\Controller;
use Hph\Model\PartnerManager;

class PartnerController extends ControllerDefault
{
    public function getPartner()
    {
        $partnerRequest = new PartnerManager();
        $partner = $partnerRequest->getPartner();
        return $this->twig->render('partner.html.twig', ['partners'=> $partner]);

    }

}