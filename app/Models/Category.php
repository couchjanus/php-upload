<?php
require_once CORE.'/Model.php';

class Category extends Model
{
    protected static $table = 'categories';
    protected static $pk = 'id';
    
    public static function getResource() {
        return self::$table;
    }
}
