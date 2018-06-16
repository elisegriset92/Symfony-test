<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticleController extends AbstractController
{
  /**
   * @Route("/", name="app_homepage")
   */
  public function homepage()
  {
// return new Response('OMG MY FIRST PAGE'); 
return $this->render('article/homepage.html.twig');
}

/**
 * @Route("/news/{slug}", name="article_show")
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