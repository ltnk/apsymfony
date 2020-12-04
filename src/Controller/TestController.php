<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TestController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/test", name="test")
     */
    public function test(ProductRepository $productRepository)
    {
        $products = $productRepository->findAll();
        return $this->render('test.html.twig', ['products' => $products]);
    }


    /**
     * @Route("/category", name="category")
     */
    public function category(CategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->findAll();
        return $this->render('category.html.twig', ['categories' => $categories]);
    }
}
