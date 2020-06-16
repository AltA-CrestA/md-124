<?php


namespace md124\models;


use md124\components\Db;

class Project
{

    /**
     * Returns an array of KitchenProjects
     */
    public static function getKitchenProjectsListByCategory()
    {

        $db = Db::getConnection();
        $projects = array();
        $result = $db->query("SELECT * FROM kitchen "
            . "WHERE status = '1' "
            . "ORDER BY id ASC ");

        $i = 0;
        while ($row = $result->fetch()) {
            $projects[$i]['id'] = $row['id'];
            $projects[$i]['name'] = $row['name'];
            $projects[$i]['image'] = $row['image'];
            $projects[$i]['core'] = $row['core'];
            $projects[$i]['facade'] = $row['facade'];
            $projects[$i]['furniture'] = $row['furniture'];
            $projects[$i]['tabletop'] = $row['tabletop'];
            $projects[$i]['handles'] = $row['handles'];
            $projects[$i]['washing'] = $row['washing'];
            $projects[$i]['backlight'] = $row['backlight'];
            $projects[$i]['text'] = $row['text'];
            $i++;
        }

        return $projects;
    }

    /**
     * Returns an array of BathroomProjects
     */
    public static function getBathroomProjectsListByCategory()
    {

        $db = Db::getConnection();
        $projects = array();
        $result = $db->query("SELECT * FROM bathroom "
            . "WHERE status = '1' "
            . "ORDER BY id ASC ");

        $i = 0;
        while ($row = $result->fetch()) {
            $projects[$i]['id'] = $row['id'];
            $projects[$i]['name'] = $row['name'];
            $projects[$i]['image'] = $row['image'];
            $projects[$i]['core'] = $row['core'];
            $projects[$i]['facade'] = $row['facade'];
            $projects[$i]['furniture'] = $row['furniture'];
            $projects[$i]['tabletop'] = $row['tabletop'];
            $projects[$i]['text'] = $row['text'];
            $i++;
        }

        return $projects;
    }

    /**
     * Returns an array of ClosetProjects
     */
    public static function getClosetProjectsListByCategory()
    {

        $db = Db::getConnection();
        $projects = array();
        $result = $db->query("SELECT * FROM closet "
            . "WHERE status = '1' "
            . "ORDER BY id ASC ");

        $i = 0;
        while ($row = $result->fetch()) {
            $projects[$i]['id'] = $row['id'];
            $projects[$i]['name'] = $row['name'];
            $projects[$i]['image'] = $row['image'];
            $projects[$i]['core'] = $row['core'];
            $projects[$i]['facade'] = $row['facade'];
            $projects[$i]['furniture'] = $row['furniture'];
            $projects[$i]['system'] = $row['system'];
            $projects[$i]['door'] = $row['door'];
            $projects[$i]['text'] = $row['text'];
            $i++;
        }

        return $projects;
    }

    /**
     * Returns an array of HallProjects
     */
    public static function getHallProjectsListByCategory()
    {

        $db = Db::getConnection();
        $projects = array();
        $result = $db->query("SELECT * FROM hall "
            . "WHERE status = '1' "
            . "ORDER BY id ASC ");

        $i = 0;
        while ($row = $result->fetch()) {
            $projects[$i]['id'] = $row['id'];
            $projects[$i]['name'] = $row['name'];
            $projects[$i]['image'] = $row['image'];
            $i++;
        }

        return $projects;
    }

    /**
     * Returns an array of BedroomProjects
     */
    public static function getBedroomProjectsListByCategory()
    {

        $db = Db::getConnection();
        $projects = array();
        $result = $db->query("SELECT * FROM bedroom "
            . "WHERE status = '1' "
            . "ORDER BY id ASC ");

        $i = 0;
        while ($row = $result->fetch()) {
            $projects[$i]['id'] = $row['id'];
            $projects[$i]['name'] = $row['name'];
            $projects[$i]['image'] = $row['image'];
            $i++;
        }

        return $projects;
    }

    /**
     * Returns an array of LoungeProjects
     */
    public static function getLoungeProjectsListByCategory()
    {

        $db = Db::getConnection();
        $projects = array();
        $result = $db->query("SELECT * FROM lounge "
            . "WHERE status = '1' "
            . "ORDER BY id ASC ");

        $i = 0;
        while ($row = $result->fetch()) {
            $projects[$i]['id'] = $row['id'];
            $projects[$i]['name'] = $row['name'];
            $projects[$i]['image'] = $row['image'];
            $i++;
        }

        return $projects;
    }

    /**
     * Returns an array of LoungeProjects
     */
    public static function getChildrenProjectsListByCategory()
    {

        $db = Db::getConnection();
        $projects = array();
        $result = $db->query("SELECT * FROM children "
            . "WHERE status = '1' "
            . "ORDER BY id ASC ");

        $i = 0;
        while ($row = $result->fetch()) {
            $projects[$i]['id'] = $row['id'];
            $projects[$i]['name'] = $row['name'];
            $projects[$i]['image'] = $row['image'];
            $i++;
        }

        return $projects;
    }

    public static function sendMail($result)
    {

        $mail_to = "develop@webskill24.ru";
        $subject = "Заполнена контактная форма на сайте";

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: Письмо с сайта <sale@irmedical.ru>\r\n";

        mail($mail_to, $subject, $result, $headers);

    }

}