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

        $categoryProjectsKitchen = array();
        $categoryProjectsKitchen = Project::getKitchenProjectsListByCategory();

        $categoryProjectsBathroom = array();
        $categoryProjectsBathroom = Project::getBathroomProjectsListByCategory();

        $categoryProjectsCloset = array();
        $categoryProjectsCloset = Project::getClosetProjectsListByCategory();

        $categoryProjectsHall = array();
        $categoryProjectsHall = Project::getHallProjectsListByCategory();

        $categoryProjectsBedroom = array();
        $categoryProjectsBedroom = Project::getBedroomProjectsListByCategory();

        $categoryProjectsLounge = array();
        $categoryProjectsLounge = Project::getLoungeProjectsListByCategory();

        $categoryProjectsChildren = array();
        $categoryProjectsChildren = Project::getChildrenProjectsListByCategory();

        require_once ROOT . '/app/views/catalog/category.php';

        return true;
    }

    public function actionAjax()
    {

        $errors = array();
        $success = array();
        $failure = array();
        if (trim($_POST['name-popup']) == '') {
            $errors[] = 'Укажите Имя <br/>';
        }
        if (trim($_POST['phone-popup']) == '') {
            $errors[] = 'Укажите номер телефона';
        }
        if (empty($errors)) {
            $result = "Имя пользователя: " .$_POST['name-popup'] . "<br/>";
            $result .= "Телефон пользователя: " .$_POST['phone-popup'] . "<br/>";
            $result .= "Сообщение пользователя: " .$_POST['message-popup'] . "<br/>";
            Project::sendMail($result);
            $success = 'Спасибо, наш специалист свяжется с вами в ближайшее время!';
        } else {
            foreach($errors as $error) {
                $failure[] .= "$error<br/>";
            }
        }

        echo json_encode(array(
            'success' => $success,
            'failure' => $failure
        ));

        return true;

    }

}