<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Images;
use Doctrine\ORM\EntityManagerInterface;

class AddController extends AbstractController
{
    /**
     * @Route("/add", name="add")
     */
    public function index(EntityManagerInterface $entityManager)
    {

        foreach ($this->images as $key => $value) {
            foreach ($value as $dish){
                $image = new Images();
                $image -> setTipo($key);
                $image -> setTitulo($dish['titulo']);
                $image -> setImagenes($dish['imagenes']);
                $image -> setDescripcion($dish['descripcion']);

                $entityManager -> persist($image);
            }
        }

        $entityManager -> flush();

        return $this->render('add/index.html.twig', [
            'id' => ''/*$plato->getId()*/,
            'titulo' => 'Galeria Añadido',
        ]);
    }

    private $images=[
    'Galeria1'=> [
    [
        'id' => 1,
        'titulo' => "Flores Sobre Blanco",
        'imagenes' => 'gallery-item-01.jpg',
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 2,
        'titulo' => "Zapatos Sobre Pelo",
        'imagenes' => "gallery-item-02.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 3,
        'titulo' => "Flamingo",
        'imagenes' => "gallery-item-03.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 4,
        'titulo' => "Hamaca",
        'imagenes' => "gallery-item-04.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 5,
        'titulo' => "Reflexion",
        'imagenes' => "gallery-item-05.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 6,
        'titulo' => "Moderno",
        'imagenes' => "gallery-item-06.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 7,
        'titulo' => "Metal Sobre Frio",
        'imagenes' => "gallery-item-07.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 8,
        'titulo' => "Su Icidio",
        'imagenes' => "gallery-item-08.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 9,
        'titulo' => "Old York",
        'imagenes' => "gallery-item-09.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 10,
        'titulo' => "Olas",
        'imagenes' => "gallery-item-10.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 11,
        'titulo' => "Ofi Time",
        'imagenes' => "gallery-item-11.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 12,
        'titulo' => "Salud Mental",
        'imagenes' => "gallery-item-12.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    ],
    
    'Galeria2' => [
    [
        'id' => 1,
        'titulo' => "Flores Sobre Blanco",
        'imagenes' => 'gallery-item-01.jpg',
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 2,
        'titulo' => "Zapatos Sobre Pelo",
        'imagenes' => "gallery-item-02.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 3,
        'titulo' => "Flamingo",
        'imagenes' => "gallery-item-03.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 4,
        'titulo' => "Hamaca",
        'imagenes' => "gallery-item-04.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 5,
        'titulo' => "Reflexion",
        'imagenes' => "gallery-item-05.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 6,
        'titulo' => "Moderno",
        'imagenes' => "gallery-item-06.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 7,
        'titulo' => "Metal Sobre Frio",
        'imagenes' => "gallery-item-07.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 8,
        'titulo' => "Su Icidio",
        'imagenes' => "gallery-item-08.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 9,
        'titulo' => "Old York",
        'imagenes' => "gallery-item-09.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 10,
        'titulo' => "Olas",
        'imagenes' => "gallery-item-10.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 11,
        'titulo' => "Ofi Time",
        'imagenes' => "gallery-item-11.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 12,
        'titulo' => "Salud Mental",
        'imagenes' => "gallery-item-12.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ]
    ],
    
    'Galeria3' => [
    [
        'id' => 1,
        'titulo' => "Flores Sobre Blanco",
        'imagenes' => 'gallery-item-01.jpg',
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 2,
        'titulo' => "Zapatos Sobre Pelo",
        'imagenes' => "gallery-item-02.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 3,
        'titulo' => "Flamingo",
        'imagenes' => "gallery-item-03.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 4,
        'titulo' => "Hamaca",
        'imagenes' => "gallery-item-04.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 5,
        'titulo' => "Reflexion",
        'imagenes' => "gallery-item-05.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 6,
        'titulo' => "Moderno",
        'imagenes' => "gallery-item-06.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 7,
        'titulo' => "Metal Sobre Frio",
        'imagenes' => "gallery-item-07.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 8,
        'titulo' => "Su Icidio",
        'imagenes' => "gallery-item-08.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 9,
        'titulo' => "Old York",
        'imagenes' => "gallery-item-09.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 10,
        'titulo' => "Olas",
        'imagenes' => "gallery-item-10.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 11,
        'titulo' => "Ofi Time",
        'imagenes' => "gallery-item-11.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    [
        'id' => 12,
        'titulo' => "Salud Mental",
        'imagenes' => "gallery-item-12.jpg",
        'descripcion' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus neque eu aliquam ultricies. Mauris justo tortor, vehicula sit amet aliquam eget, vulputate non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in nunc turpis. Suspendisse varius, ex non volutpat convallis, dolor sem egestas eros, sit amet varius ligula lacus in orci.\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut pretium in nulla non pellentesque. In mattis mi sit amet risus fermentum posuere. Nullam vitae leo dapibus, semper urna at, faucibus urna. Curabitur aliquam ante ligula, eu scelerisque eros commodo eget. Proin feugiat posuere erat, vitae posuere nibh.",
    ],
    ],
    ];
}