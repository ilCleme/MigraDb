<?php

namespace IlCleme\MigraDbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('IlClemeMigraDbBundle:Default:index.html.twig');
    }

    /**
     * @Route("/notizie")
     */
    public function showNotizieAction()
    {
        $news = $this->getDoctrine()
            ->getRepository('IlClemeMigraDbBundle:TblNotizie')
            ->findAll();

        foreach($news as $notizia){
            $linkPagina = $notizia->getIdTblPage();

            if(empty($linkPagina)){
                $linkPagina = $notizia->getLink();
                $notizia->setLink(null);
            }

            $url = parse_url($linkPagina);
            $contenuto = null;

            if(isset($url['query'])){
                $parameter = explode("&", $url['query']);
                $discriminator = explode('=', $parameter[count($parameter) -1]);
                switch($discriminator[0]){
                    case 'page':
                        $contenuto = $this->getPageContent($discriminator[1]);
                        break;
                    case 'idcomunicato':
                        $contenuto = $this->getComunicatoContent($discriminator[1]);
                        break;
                    case 'menu':
                        $contenuto = $this->getFirstPageOfMenuContent($discriminator[1]);
                        break;
                    default:
                        $contenuto = null;
                        break;
                }

            }

            if (null !== $contenuto){
                $notizia->setNotizia($contenuto);
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($notizia);
                $em->flush();
            }
        }

        return $this->render('IlClemeMigraDbBundle:Default:notizie.html.twig', array('notizie' => $news));
    }

    private function getPageContent($idPage)
    {
        $page = $this->getDoctrine()
            ->getRepository('IlClemeMigraDbBundle:TblPage')
            ->findOneBy(array('idTblPage' => $idPage));

        if(null !== $page){
            return $page->getAbs();
        }

        return null;
    }

    private function getComunicatoContent($idComunicato)
    {
        $comunicato = $this->getDoctrine()
            ->getRepository('IlClemeMigraDbBundle:TblComunicatistampa')
            ->findOneBy(array('idTblComunicatistampa' => $idComunicato));

        if(null !== $comunicato){
            return $comunicato->getComunicato();
        }

        return null;
    }

    private function getFirstPageOfMenuContent($idMenu)
    {
        $pages = $this->getDoctrine()
            ->getRepository('IlClemeMigraDbBundle:TblPage')
            ->findBy(array('idTblMenu' => $idMenu), array('posizione' => 'ASC'));

        if(null !== $pages){
            return $pages[0]->getAbs();
        }

        return null;
    }
}
