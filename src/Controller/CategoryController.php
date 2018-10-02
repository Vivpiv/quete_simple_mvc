<?php
namespace Controller;
use Model\CategoryManager;

class CategoryController
{
    public function showCategories()
    {
        $categoryManager = new categoryManager();
        $categories = $categoryManager->selectAllCategories();
        require __DIR__ . '/../View/category.php';
    }
    
    public function showCategory(int $id)
    {
        $categoryManager = new categoryManager();
        $category = $categoryManager->selectOneCategory($id);
        
        require __DIR__ . '/../View/showCategory.php';
    }
}
?>