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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;



class AdvertController extends Controller
{
    public function indexAction($age)
    {

//        $content = $this
//            ->get('templating')
//            ->render('MMPlatformBundle:Advert:index.html.twig', array('nom' => 'mathieu'));
//
//        return new Response($content);

//        $url = $this->get('router')->generate('mm_platform_view', array('id' => 5));
//
//        return new Response("L'URL de l'annonce d'id 5 est : ".$url);
    }

    public function viewAction($id)

    {
//        $session = $request->getSession();
//
//        $userId = $session->get('user_id');
//
//        $session->set('user_id', 91);
//
//        return new Response("<body>page de test</body>");

//        $tag = $request->query->get('tag');

//        return new Response("Affichage de l'annonce d'id : " .$id." avec le tag : ".$tag);


//        methode renderResponse
//        return $this->get('templating')->renderResponse('MMPlatformBundle:Advert:view.html.twig', array('id' => $id, 'tag' => $tag));

//        méthode render

        return $this->render('MMPlatformBundle:Advert:view.html.twig', array('id' => $id));
//

        //methode de redirection 1
//        $url = $this->get('router')->generate('mm_platform_home');
//        return new RedirectResponse($url);


//        methode redirection 2

        //return $this->redirectToRoute('mm_platform_home');

        //Changer content type de la reponse//

//        $response = new Response(json_encode(array('id' => $id)));
//
//        $response->headers->set('Content-Type', 'application/json');
//
//        return $response;


        //Changer content-type reponse en Json simplifié SEULEMENT.

//        return new JsonResponse(array('id' => $id));






    }



    public function viewSlugAction($slug, $year, $_format)
    {
        return new Response("affichage annonce correpondant au slug '".$slug."'créé en".$year."et au format".$_format.".");
    }

    public function addAction(Request $request)
    {
        $session = $request->getSession();

        $session->getFlashBag()->add('info', 'Annonce bien enregistrée');

        $session->getFlashBag()->Add('info', 'Oui elle a été enregistrée !');

        return $this->redirectToRoute('mm_platform_view', array('id' => 5));
    }

}


