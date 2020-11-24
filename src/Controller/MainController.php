<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Images;
use App\Entity\Contacto;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(SessionInterface $session)
    {
        $texto = "";
        $name = $session->get('login');

        if ($session->get('login') ) {

            $texto = "Sesión de: " . $name;
        }

        return $this->render('index/index.html.twig', [
            'titulo' => 'Index',
            'active' => 'active',
            'active1' => '',
            'active2' => '',
            'active3' => '',
            'active4' => '',
            'texto' => $texto,
            'name' => $name,
        ]);
    }
    /**
     * @Route("/about", name="about")
     */
    public function about(SessionInterface $session)
    {
        $texto = "";
        $name = $session->get('login');

        if ($session->get('login') ) {

            $texto = "Sesión de: " . $name;
        }

        return $this->render('about/about.html.twig', [
            'titulo' => 'About',
            'active' => '',
            'active1' => 'active',
            'active2' => '',
            'active3' => '',
            'active4' => '',
            'texto' => $texto,
            'name' => $name,
        ]);
    }
    /**
     * @Route("/gallery/{currentPage<\d{1}>?1}", name="gallery")
     */
    public function gallery($dish='', $currentPage, SessionInterface $session)
    {
        $texto = "";
        $name = $session->get('login');

        if ($session->get('login') ) {

            $texto = "Sesión de: " . $name;
        }

        $images = $this-> getDoctrine()
                        ->getRepository(Images::Class)
                        ->findAll();
        
        return $this->render('gallery/gallery.html.twig', [
            'titulo' => 'Gallery',
            'active2' => 'active',
            'texto' => $texto,
            'data' => $images,
            'currentPage' => $currentPage,
            'name' => $name,
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(SessionInterface $session)
    {
        $texto = "";
        $name = $session->get('login');

        if ($session->get('login') ) {

            $texto = "Sesión de: " . $name;
        }

        return $this->render('contact/contact.html.twig', [
            'titulo' => 'Contact',
            'active' => '',
            'active1' => '',
            'active2' => '',
            'active3' => 'active',
            'active4' => '',
            'texto' => $texto,
            'name' => $name,
            
        ]);
    }

    /**
     * @Route("/add_contacto", name="anadir_contacto")
     */
    public function indexAction(Request $request, EntityManagerInterface $entityManager){

        $texto = "";
    
        // $name = $request->request->get('name');
        // $email = $request->request->get('email');
        // $inquiry = $request->request->get('inquiry');
        // $message = $request->request->get('message');

     
        $contacto = new Contacto();
        $contacto -> setNombre($name);
        $contacto -> setEmail($email);
        $contacto -> setProblem($inquiry);
        $contacto -> setMessage($message);

        $entityManager -> persist($contacto);
    

        $entityManager -> flush();

        return $this->render('contact/add_contacto.html.twig', [
            'section' => 'contact',
            'class' => 'clearfix',
            'titulo' => 'Datos',
            'nombre' => $name,
            'email' => $email,
            'inquiry' => $inquiry,
            'message' => $message,
            'texto' => $texto,
            // 'name' => $name,
            ]);
   }
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, SessionInterface $session)
    {

        $texto = "";
        $name = $session->get('login');

        if ($session->get('login') === '') {
            $texto = "Introduce tus datos de usuario para iniciar la sesión.";
        } else {
            $texto = "Sesión de: " . $name;
        }

        return $this->render('login/login.html.twig', [
            'titulo' => 'Login',
            'active' => '',
            'active1' => '',
            'active2' => '',
            'active3' => '',
            'active4' => 'active',
            'texto' => $texto,
            'user' => $name,
        ]);
    }
    /**
     * @Route("/login_succes", name="login_succes")
     */
    public function logueado(Request $request, SessionInterface $session)
    {

        $user = $request->request->get('user');
        $password = $request->request->get('password');

        $session->set('login', $user);
        return $this->redirectToRoute('main');

        return $this->render('layout.html.twig', [
            'section' => 'login',
            'class' => 'clearfix',
            'titulo' => 'Login.',
        ]);
    }

    public function getUsuario(SessionInterface $session)
    {
        $user=$session->get('login');

        if($user===null){
            $user="";
        }else{
            $user="Hola ".$user;
        }

        return $user;
    }

    // private $images=[
    //     [
    //         'id' => 1,
    //         'titulo' => "milk splashes",
    //         'imagenes' => 'gallery-item-01.jpg',
    //         'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    //     ],
    //     [
    //         'id' => 2,
    //         'titulo' => "milk splashes",
    //         'imagenes' => "gallery-item-02.jpg",
    //         'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    //     ],
    //     [
    //         'id' => 3,
    //         'titulo' => "milk splashes",
    //         'imagenes' => "gallery-item-03.jpg",
    //         'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    //     ],
    //     [
    //         'id' => 4,
    //         'titulo' => "milk splashes",
    //         'imagenes' => "gallery-item-04.jpg",
    //         'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    //     ],
    //     [
    //         'id' => 5,
    //         'titulo' => "milk splashes",
    //         'imagenes' => "gallery-item-05.jpg",
    //         'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    //     ],
    //     [
    //         'id' => 6,
    //         'titulo' => "milk splashes",
    //         'imagenes' => "gallery-item-06.jpg",
    //         'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    //     ],
    //     [
    //         'id' => 7,
    //         'titulo' => "milk splashes",
    //         'imagenes' => "gallery-item-07.jpg",
    //         'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    //     ],
    //     [
    //         'id' => 8,
    //         'titulo' => "milk splashes",
    //         'imagenes' => "gallery-item-08.jpg",
    //         'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    //     ],
    //     [
    //         'id' => 9,
    //         'titulo' => "milk splashes",
    //         'imagenes' => "gallery-item-09.jpg",
    //         'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    //     ],
    //     [
    //         'id' => 10,
    //         'titulo' => "milk splashes",
    //         'imagenes' => "gallery-item-10.jpg",
    //         'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    //     ],
    //     [
    //         'id' => 11,
    //         'titulo' => "milk splashes",
    //         'imagenes' => "gallery-item-11.jpg",
    //         'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    //     ],
    //     [
    //         'id' => 12,
    //         'titulo' => "milk splashes",
    //         'imagenes' => "gallery-item-12.jpg",
    //         'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    //     ],

    // ];
}
