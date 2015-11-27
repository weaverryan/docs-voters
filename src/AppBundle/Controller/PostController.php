<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    /**
     * @Route("/posts/{id}", name="post_show")
     */
    public function showAction($id)
    {
        $post = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Post')
            ->find($id);

        if (!$post) {
            throw $this->createNotFoundException();
        }

        $this->denyAccessUnlessGranted('view', $post);

        dump($post);die;
    }

    /**
     * @Route("/posts/{id}/edit", name="post_edit")
     */
    public function editAction($id)
    {
        $post = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Post')
            ->find($id);

        if (!$post) {
            throw $this->createNotFoundException();
        }

        $this->denyAccessUnlessGranted('edit', $post);

        dump($post);die;
    }
}
