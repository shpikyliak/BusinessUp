<?php
class Catalog
{
    
    protected static $catalog = array();
    
    public static function push($object)
    {

        self::$catalog[$object->getName()] = $object;
    }

    public static function getAll()
    {
        return self::$catalog;
    }
   
    public static function get($id)
    {
        return isset(self::$catalog[$id]) ? self::$catalog[$id] : null;
    }

    
}