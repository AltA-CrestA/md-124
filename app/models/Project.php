<?php


namespace md124\models;


use md124\components\Db;
use PDO;

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
            $projects[$i]['image'] = $row['image'];
            $projects[$i]['core'] = $row['core'];
            $projects[$i]['facade'] = $row['facade'];
            $projects[$i]['furniture'] = $row['furniture'];
            $projects[$i]['tabletop'] = $row['tabletop'];
            $projects[$i]['handles'] = $row['handles'];
            $projects[$i]['washing'] = $row['washing'];
            $projects[$i]['backlight'] = $row['backlight'];
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
            $projects[$i]['image'] = $row['image'];
            $projects[$i]['core'] = $row['core'];
            $projects[$i]['facade'] = $row['facade'];
            $projects[$i]['furniture'] = $row['furniture'];
            $projects[$i]['tabletop'] = $row['tabletop'];
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
            $projects[$i]['image'] = $row['image'];
            $projects[$i]['core'] = $row['core'];
            $projects[$i]['facade'] = $row['facade'];
            $projects[$i]['furniture'] = $row['furniture'];
            $projects[$i]['system'] = $row['system'];
            $projects[$i]['door'] = $row['door'];
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

    public static function getKitchenProjectById($projectId)
    {

        $db = Db::getConnection();

        $sql = "SELECT * FROM kitchen WHERE id = '$projectId'";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        return $result->fetch();

    }

    public static function getBathroomProjectById($projectId)
    {

        $db = Db::getConnection();

        $sql = "SELECT * FROM bathroom WHERE id = '$projectId'";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        return $result->fetch();

    }

    public static function getClosetProjectById($projectId)
    {

        $db = Db::getConnection();

        $sql = "SELECT * FROM closet WHERE id = '$projectId'";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        return $result->fetch();

    }

    public static function getHallProjectById($projectId)
    {

        $db = Db::getConnection();

        $sql = "SELECT * FROM hall WHERE id = '$projectId'";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        return $result->fetch();

    }

    public static function getBedroomProjectById($projectId)
    {

        $db = Db::getConnection();

        $sql = "SELECT * FROM bedroom WHERE id = '$projectId'";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        return $result->fetch();

    }

    public static function getLoungeProjectById($projectId)
    {

        $db = Db::getConnection();

        $sql = "SELECT * FROM lounge WHERE id = '$projectId'";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        return $result->fetch();

    }

    public static function getChildrenProjectById($projectId)
    {

        $db = Db::getConnection();

        $sql = "SELECT * FROM children WHERE id = '$projectId'";
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        return $result->fetch();

    }

    public static function getCore($project)
    {
        if ($project['core'] == null) {
            return '—';
        }
        return $project['core'];
    }

    public static function getFacade($project)
    {
        if ($project['facade'] == null) {
            return '—';
        }
        return $project['facade'];
    }

    public static function getFurniture($project)
    {
        if ($project['furniture'] == null) {
            return '—';
        }
        return $project['furniture'];
    }

    public static function getTabletop($project)
    {
        if ($project['tabletop'] == null) {
            return '—';
        }
        return $project['tabletop'];
    }

    public static function getHandles($project)
    {
        if ($project['handles'] == null) {
            return '—';
        }
        return $project['handles'];
    }

    public static function getWashing($project)
    {
        if ($project['washing'] == null) {
            return '—';
        }
        return $project['washing'];
    }

    public static function getBacklight($project)
    {
        if ($project['backlight'] == null) {
            return '—';
        }
        return $project['backlight'];
    }

    public static function getProp($project)
    {
        if ($project['prop'] == null) {
            return '—';
        }
        return $project['prop'];
    }

}