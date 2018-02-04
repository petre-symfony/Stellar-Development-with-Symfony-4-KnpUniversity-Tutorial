<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController {
  /**
   * @Route("/")
   */  
  public function homepage(){
    return new Response('OMG My first page already!');
  }
  
  /**
   * @Route("/news/why-asteroids-taste-like-bacon")
   */
  public function show() {
    return new Response('Future page to show one new article');
  }
}
