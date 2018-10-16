<?php
namespace Controller;
use Model\CategoryManager;
use Twig_Loader_Filesystem;
use Twig_Environment;

class CategoryController extends AbstractController
{
    private $twig;
    
    
    public function showCategories()
    {
        $categoryManager = new categoryManager($this->pdo);
        $categories = $categoryManager->selectAllCategories();
        //require __DIR__ . '/../View/category.php';
        return $this->twig->render('category.html.twig', ['categories' => $categories]);
    }
    
    public function showCategory(int $id)
    {
        $categoryManager = new categoryManager($this->pdo);
        $category = $categoryManager->selectOneCategory($id);
        
        //require __DIR__ . '/../View/showCategory.php';
        return $this->twig->render('showCategory.html.twig', ['category' => $category]);
    }
}
?>