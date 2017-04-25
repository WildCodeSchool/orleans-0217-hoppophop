<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 20:57
 */

namespace Hph\Controller;
use Swift_SmtpTransport;
use Swift_Mailer;
use Swift_Message;
class ContactController extends ControllerDefault
{
    public function mail($post)
    {
        $transport = Swift_SmtpTransport::newInstance('smtp.googlemail.com', 465, 'ssl')
            ->setUsername('contact.hoppophop@gmail.com')
            ->setPassword('wcsorleanshoppophop');
        $mailer = Swift_Mailer::newInstance($transport);
        $message = Swift_Message::newInstance($post['subject'])
            ->setSubject($post['subject'])
            ->setFrom(array($post['email'] => $post['name']))
            ->setReplyTo($post['email'])
            ->setTo(array('quentin.riandiere@gmail.com'))//A remplacer par l'adresse mail du client
            ->setBody($post['text']);
        $result = $mailer->send($message);
        return $this->render($result);
    }
    public function render($msg = '3')
    {
        return $this->twig->render('contact.html.twig', ['msg'=>$msg, 'partners'=>$partner]);
    }
}