<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 20:57
 */

namespace Hph\Controller;
class ContactController extends ControllerDefault
{
    public function mail($post)
    {
        /*
        $transport = \Swift_MailTransport::newInstance();
        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance()
            ->setSubject('Your subject')
            ->setFrom(array('test@gmail.com' => 'John Doe'))
            ->setTo(array('quentin.riandiere@gmail.com'))
            ->setBody('Here is the message itself');
        $result = $mailer->send($message);
        return $result;
        */
    }
    public function render()
    {
        return $this->twig->render('contact.html.twig');
    }
}