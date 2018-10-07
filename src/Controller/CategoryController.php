<?php
namespace Controller;
use Model\CategoryManager;
use Twig_Loader_Filesystem;
use Twig_Environment;

class CategoryController
{
    private $twig;
    
    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }
    
    public function showCategories()
    {
        $categoryManager = new categoryManager();
        $categories = $categoryManager->selectAllCategories();
        //require __DIR__ . '/../View/category.php';
        return $this->twig->render('category.html.twig', ['categories' => $categories]);
    }
    
    public function showCategory(int $id)
    {
        $categoryManager = new categoryManager();
        $category = $categoryManager->selectOneCategory($id);
        
        //require __DIR__ . '/../View/showCategory.php';
        return $this->twig->render('showCategory.html.twig', ['category' => $category]);
    }
}
?>