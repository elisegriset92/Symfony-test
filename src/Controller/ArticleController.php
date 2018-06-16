<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticleController extends AbstractController
{
  /**
   * @Route("/")
   */
  public function homepage()
  {
return new Response('OMG MY FIRST PAGE');  }

/**
 * @Route("/news/{slug}")
 */
public function show($slug){
$comments = [
  "hehehehehe commentaire", "blaaaaa", "hello"
];



return $this->render('article/show.article.twig', [
  'title' => \ucwords(str_replace('-', ' ', $slug)),
  'comments'=> $comments,
  ]);
}
}