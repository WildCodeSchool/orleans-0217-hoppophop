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
<<<<<<< HEAD
        $partnerRequest = new PartnerManager();
        $partner = $partnerRequest->getPartner();
        return $this->twig->render('partner.html.twig', ['partners'=> $partner]);

=======
        $partner = new PartnerManager();
        return $partner->getPartner();
    }
    public function render()
    {
        $partner = $this->getPartner();
        return $this->twig->render('partner.html.twig', ['partners'=>$partner]);
>>>>>>> 847d55f7a36dea8f2dca1c7f4b0e9bb9f1da93d0
    }

}