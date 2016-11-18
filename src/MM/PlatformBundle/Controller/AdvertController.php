<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 15/11/2016
 * Time: 15:47
 */

namespace MM\PlatformBundle\Controller;

use MM\PlatformBundle\MMPlatformBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;




class AdvertController extends Controller
{
   public function indexAction($page)
   {




       $listAdverts = array(

           array(
               'title'    => 'Recherche développeur Symfony',
               'id'       => 1,
               'author'   => 'Mathieu',
               'content'  => 'Nous recherchons un développeur Symfony débutant sur Nice. OKOKOKOK',
               'date'     => new \DateTime()

           )
       );

       return $this->render('MMPlatformBundle:Advert:index.html.twig', array('listAdverts' => $listAdverts));

   }


   public function viewAction($id)
   {
//       return $this->render('MMPlatformBundle:Advert:view.html.twig', array('id' => $id));

       $advert = array(
           'title'    => 'Recherche développeur Symfony',
           'id'       => $id,
           'author'   => 'Mathieu',
           'content'  => 'Nous recherchons un développeur Symfony débutant sur NIce. OKOKOKOK',
           'date'     => new \DateTime()
                  );

       return $this->render('MMPlatformBundle:Advert:view.html.twig', array('advert' => $advert));
   }


   public function addAction(Request $request)
   {

       $antispam = $this->container->get('mm_platform.antispam');

       $text = '...';

       if($antispam->isSpam($text)){
           throw new \Exception('votre message a été détecté en tant que Spam!');
       }
//       if($request->isMethod('POST'))
//       {
//           $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée');
//
//           return $this->redirectToRoute('mm_platform_view', array('id' => 5));
//
//       }
//
//       return $this->render('MMPlatformBundle:Advert:add.html.twig');
   }


   public function editAction($id, Request $request)
   {

       $advert = array(
           'title'    => 'Recherche développeur Symfony',
           'id'       => $id,
           'author'   => 'Mathieu',
           'date'     => new \DateTime()
        );

       return $this->render('MMPlatformBundle:Advert:edit.html.twig', array('advert' => $advert));

//       if($request->isMethod('POST'))
//       {
//           $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée');
//
//           return $this->redirectToRoute('mm_platform_view', array('id' => $id));
//       }
//
//       return $this->render('MMPlatformBundle:Advert:edit.html.twig');
   }


   public function deleteAction($id)
   {
       return $this->render('MMPlatform:Advert:delete.html.twig');
   }

   public function menuAction()
   {
    $listAdverts = array(
        array('id' => 2, 'title' => 'Recherche développeur symfony'),
        array('id' => 5, 'title' => 'Mission webmaster'),
        array('id' => 9, 'title' => 'Stage Webdesign'));

    return $this->render('MMPlatformBundle:Advert:menu.html.twig', array('listAdverts' => $listAdverts));
   }


}


