<?php

use md124\models\Category;
use md124\models\Project;

class CatalogController
{

    public function actionIndex()
    {

        $categoryList = Category::getCategoriesList();

        require_once ROOT . '/app/views/catalog/index.php';

        return true;

    }

    public function actionCategory($categoryUrl)
    {

        $categoriesId = Category::getCategoryById($categoryUrl);


        if ($categoriesId['url'] == 'kitchen') {
            $categoryProjectsKitchen = Project::getKitchenProjectsListByCategory();

            require_once ROOT . '/app/views/catalog/kitchen.php';

        }

        if ($categoriesId['url'] == 'bathroom') {
            $categoryProjectsBathroom = Project::getBathroomProjectsListByCategory();

            require_once ROOT . '/app/views/catalog/bathroom.php';

        }

        if ($categoriesId['url'] == 'wardrobe') {
            $categoryProjectsWardrobe = Project::getWardrobeProjectsListByCategory();

            require_once ROOT . '/app/views/catalog/wardrobe.php';

        }

        return true;
    }

}