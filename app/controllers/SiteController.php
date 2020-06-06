<?php


use md124\models\Project;

class SiteController
{

    public function actionIndex()
    {

        require_once ROOT . '/app/views/site/index.php';

        return true;

    }

    public function actionContact()
    {

        require_once ROOT . '/app/views/site/contacts.php';

        return true;

    }

    public function actionAjax()
    {

        $errors = array();
        $success = array();
        $failure = array();
        if (trim($_POST['name-contact']) == '') {
            $errors[] = 'Укажите Имя <br/>';
        }
        if (trim($_POST['phone-contact']) == '') {
            $errors[] = 'Укажите номер телефона';
        }
        if (empty($errors)) {
            $result = "Имя пользователя: " .$_POST['name-contact'] . "<br/>";
            $result .= "Телефон пользователя: " .$_POST['phone-contact'] . "<br/>";
            $result .= "Сообщение пользователя: " .$_POST['message-contact'] . "<br/>";
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