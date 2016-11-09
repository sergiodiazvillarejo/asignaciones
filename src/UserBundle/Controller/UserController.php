<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;
use UserBundle\Form\UserType;
use UserBundle\UserBundle;

class UserController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('UserBundle:User')->findAll();

//        $res = 'Lista de usuarios: <br>';
//
//        foreach ($users as $user)
//        {
//            $res .= 'Usuario: ' . $user->getUsername() . ' - Email: ' . $user->getEmail() . '<br>';
//        }
//
//        $res .= '<br>Total : ' . count($users);
//
//        return new Response($res);

        return $this->render('UserBundle:User:index.html.twig', array('users' => $users));
    }

    public function addAction()
    {
        $user = new User();
        $form = $this->createCreateForm($user);

        return $this->render('UserBundle:User:add.html.twig', array('form' => $form->createView()));
    }

    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(UserType::class, $entity, array(
            'action' => $this->generateUrl('user_create'),
            'method' => 'POST'
        ));

        return $form;
    }

    public function createAction(Request $request)
    {
        $user = new User();
        $form = $this->createCreateForm($user);
        $form->handleRequest($request);

        if($form->isValid())
        {
            $password = $form->get('password')->getData();

            $encoder = $this->container->get('security.password_encoder');
            $encoder = $encoder->encoderPassword($user, $password);

            $user->setPassword($encoder);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_index');
        }
        return $this->render('UserBundle:User:add.html.twig', array('form' => $form->createView()));
    }

    public function viewAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('UserBundle:User');

//        $user = $repository->find($id);
//        $user = $repository->findOneById($id);
        $user = $repository->findOneByUsername($id);

        return new Response('Usuario: ' . $user->getUsername() . ' con email: ' . $user->getEmail());
    }


}

