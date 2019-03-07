<?php
/**
 * Created by PhpStorm.
 * User: wolverine
 * Date: 16/08/17
 * Time: 10:53
 */

namespace RSC\model;


use Illuminate\Database\Schema\Blueprint;
use MocaBonita\tools\eloquent\MbModel;

/**
 * Class Log
 * @package Avalgrad\model
 */
class Log extends MbModel
{

    /**
     * @var
     */
    public $message;

    /**
     * @var array
     */
    protected $fillable = ['message'];

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->attributes['message'];
    }

    /**
     * @param $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->attributes['message'] = $message;
        return $this;
    }

    /**
     * @param Blueprint $table
     */
    public function createSchema(Blueprint $table)
    {
        $table->increments($this->getKeyName());
        $table->text("message");
        $table->timestamps();
    }

    /**
     * @param \Exception $exception
     * @return static
     */
    public static function createFromException(\Exception $exception)
    {
        try{
            return Log::create([
                'message' => $exception->getMessage(),
            ]);

        } catch (\Exception $e){
            error_log($e->getMessage());
            return null;
        }
    }

}