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
     * Returns an array of BathroomProjects
     */
    public static function getWardrobeProjectsListByCategory()
    {

        $db = Db::getConnection();
        $projects = array();
        $result = $db->query("SELECT * FROM wardrobe "
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

}