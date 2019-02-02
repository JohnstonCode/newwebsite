<?php
namespace Jubby\Controller;

use Symfony\Component\Form\Forms;
use Jubby\Form\SignupFormType;
use Jubby\Entity\User;

class SignupController
{
    private $view;

    public function __construct(\Slim\Views\Twig $view)
    {
        $this->view = $view;
    }

    public function new($request, $response, $args)
    {
        $formFactory = Forms::createFormFactory();
        $user = new User();
        $form = $formFactory->create(SignupFormType::class, $user);


        return $this->view->render($response, 'signup.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function post($request, $response, $args)
    {
        $post = $request->getParsedBody();

        $user = new User;
        $user->username = $post['username'];
        $user->password = password_hash($post['password'], PASSWORD_DEFAULT);
        $user->email = $post['email'];
        $user->save();
        
        return $this->view->render($response, 'signup.html.twig', [
            'completed' => true,
        ]);
    }
}