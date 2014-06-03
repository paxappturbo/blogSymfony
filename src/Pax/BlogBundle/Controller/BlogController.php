<?php

namespace Pax\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pax\BlogBundle\Entity\Article;

use Pax\BlogBundle\Form\ArticleType;

class BlogController extends Controller
{
  public function indexAction($page)
  {
    //creation du spam
    //$text="psarrau@gmzil.com   teo@hto.fr et attention mile@fe.yahou";
    
    //On appelle notre service pax_blog.antispam 
    //$antispam = $this->container->get('pax_blog.antispam');
    
    // On test le $text pour voir si c'est un spam 
    //if($antispam->isSpam($text)){
    //  throw new \Exception("Votre message est un spam");
      
    //}



    // Les articles :
  $articles = array(
    array(
      'titre'   => 'Mon weekend a Phi Phi Island !',
      'id'      => 1,
      'auteur'  => 'winzou',
      'contenu' => 'Ce weekend était trop bien. Blabla…',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Repetition du National Day de Singapour',
      'id'      => 2,
      'auteur' => 'winzou',
      'contenu' => 'Bientôt prêt pour le jour J. Blabla…',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Chiffre d\'affaire en hausse',
      'id'      => 3, 
      'auteur' => 'M@teo21',
      'contenu' => '+500% sur 1 an, fabuleux. Blabla…',
      'date'    => new \Datetime())
  );
    
  // Puis modifiez la ligne du render comme ceci, pour prendre en compte nos articles :
  return $this->render('PaxBlogBundle:Blog:index.html.twig', array(
    'articles' => $articles
  ));
  }
  
  public function menuAction($nombre) // Ici, nouvel argument $nombre, on l'a transmis via le render() depuis la vue
  {
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
    // On pourra récupérer $nombre articles depuis la BDD,
    // avec $nombre un paramètre qu'on peut changer lorsqu'on appelle cette action
    $liste = array(
      array('id' => 2, 'titre' => 'Mon dernier weekend !'),
      array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
      array('id' => 9, 'titre' => 'Petit test')
    );
    
    return $this->render('PaxBlogBundle:Blog:menu.html.twig', array(
      'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
  }
  
  public function voirAction($id)
  {
    $article = array(
    'id'      => 1,
    'titre'   => 'Mon weekend a Phi Phi Island !',
    'auteur'  => 'winzou',
    'contenu' => 'Ce weekend était trop bien. Blabla…',
    'date'    => new \Datetime()
  );
    
    return $this->render('PaxBlogBundle:Blog:voir.html.twig', array(
      'article' => $article
    ));
  }
  
  public function ajouterAction()
  {

    // creation de l'entité
    $article = new Article();
   

    // le formbuilder va générer le formulaire
    $form = $this->createForm(new ArticleType, $article);

    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :
    $request = $this->get('request');

    if( $request->getMethod() == 'POST' )
    {
      // fait le lien entre la request et le form
      $form->bind($request);

      if($form->isValid()){
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();
        return $this->redirect($this->generateUrl('paxblog_voir', array('id' => $article->getId())));
      }





      // Puis on redirige vers la page de visualisation de cet article
      //return $this->redirect( $this->generateUrl('paxblog_voir', array('id' => $article->getId())) );
    }

    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('PaxBlogBundle:Blog:ajouter.html.twig', array(
      'form' => $form->createview(),
      ));
  }
  
  public function modifierAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id

    // Ici, on s'occupera de la création et de la gestion du formulaire

    return $this->render('PaxBlogBundle:Blog:modifier.html.twig');
  }

  public function supprimerAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id

    // Ici, on gérera la suppression de l'article en question

    return $this->render('PaxBlogBundle:Blog:supprimer.html.twig');
  }
}