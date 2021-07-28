<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    private $requestStack;

    /**
     * LearningController constructor.
     */
    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }


    /**
     * @Route(
     *     "/change/{name}",
     *      name="change-name"
     * )
     */
    public function changeName(Request $request, string $name): Response
    {
        $session = $this->requestStack->getSession();
        $form = $this->createFormBuilder()
            ->add('name', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Submit changes'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $values = $form->getData();
            $name = $values['name'];

            $session->set('usrName', $name);

            return $this->redirectToRoute('show-my-name');
        }
        return $this->render('learning/changeName.html.twig', [
            'form' => $form->createView(),
            'name' => $name
        ]);

    }

    /**
     * @Route("/", name="show-my-name")
     */
    public function showMyName(Request $request)
    {
        $session = $this->requestStack->getSession();
        $name = $session->get('usrName') ? $session->get('usrName') : "unknown";
        $formChange = $this->createFormBuilder()
            ->add('save', SubmitType::class, ['label' => 'Change your name'])
            ->getForm();
        $formChange -> handleRequest($request);
        if ($formChange->isSubmitted() && $formChange->isValid()) {
            return $this->redirectToRoute('change-name',['name'=>$name]);
        }


        return $this->render('learning/showName.html.twig', [
            'name' => $name,
            'form' => $formChange->createView()
        ]);
    }
    /**
     * @Route("/about-{name}", name="about-me")
     */
    public function aboutMe(string $name){

        return $this->render('learning/aboutMe.html.twig', [
            'date'=> date("Y/m/d"),
            'name' => $name
        ]);
    }
}
