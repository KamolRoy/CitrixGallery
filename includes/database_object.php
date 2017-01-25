<?php
/**
 * Created by PhpStorm.
 * User: comol
 * Date: 16/11/2016
 * Time: 12:40 PM
 */
require_once(LIB_PATH.DS.'database.php');

class DatabaseObject{

    protected static $table_name="";

    public static function find_all()
    {
        global $database;
        $result_set = static::find_by_sql("SELECT * FROM " . static::$table_name);
        return $result_set;
    }

    public static function find_by_id($id = 0)
    {
        global $database;
        $result_array = static::find_by_sql("SELECT * FROM " . static::$table_name . " WHERE id = {$id}");

        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function find_by_sql($sql = "")
    {
        global $database;
        $result_set = $database->query($sql);


        $object_array = array();
        while ($row = $database->fetch_array($result_set)) {

            $object_array[] = static::instantiate($row);
        }

        return $object_array;
    }

    private static function instantiate($record)
    {
        $class_name = get_called_class();
        $object = new $class_name;

        foreach ($record as $attribute => $value) {
            /*echo $attribute . "-->" . $value . "<br/>";*/
            if ($object->has_attribute($attribute)) {
                $object->$attribute = $value;
            }
        }
        return $object;
    }

    private function has_attribute($attribute)
    {
        // get_object_vars returns an associative array with all attributes including private one
        $object_vars = get_object_vars($this);
        // array_key_exists return if the given key exists in the array set.
        return array_key_exists($attribute, $object_vars);
    }
}