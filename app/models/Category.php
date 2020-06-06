<?php

namespace md124\models;

use md124\components\Db;
use PDO;

class Category
{

    /**
     * Returns an array of categories
     */
    public static function getCategoriesList()
    {

        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT * FROM category '
            . 'ORDER BY sort_order ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['img'] = $row['img'];
            $categoryList[$i]['url'] = $row['url'];
            $i++;
        }

        return $categoryList;
    }

    /**
     * Returns an array of categories
     */
    public static function getCategoryById($categoryId)
    {

            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM category "
                . "WHERE url = '$categoryId'");

            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();

    }

}