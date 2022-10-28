<?php


namespace App\Repositories;


use App\Models\User;
use Illuminate\Support\Facades\DB;

abstract class Repository
{
    abstract public function model();

    protected static $model;
    protected static $all;
    protected static $findUser;

    public function __construct()
    {
        self::$model = app($this->model());
    }

    public static function all()
    {
//        return self::$model->with()->select('id', 'UrlPath')->orderby('UrlPath')->get();
        return self::$model->select(['id', 'UrlPath'])->orderby('id')->get();
    }

    /*
     *  Two method with same result : query & Time request
     */
    public static function paginate($limit = 10)
    {
        return self::$model->select(['id', 'UrlPath'])->orderby('id')->paginate($limit);
    }

    public static function where($value, $column = "id", $operator = '=')
    {
        return self::$model->where($value, $operator, $column)->get();
    }

}
