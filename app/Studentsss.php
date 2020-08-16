<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentsss extends Model
{
    
    //assign a table name:
    protected $table = 'studentsss';
    //default situation, the primaryKey is id, you can always change it here
    protected $primaryKey = 'id';
    //set the timestamp, if true enable it, and the timeformate could be 
    //set in the getdataformat function;

    public $timestamps = true;
    protected function getDataFormat(){
        return time();
    }
    protected function asDateTime($val){
        return $val;
    }
    //enable the multiple assaigned value for the field in the table:
        protected $fillable = ['id',"name","age","Gender","created_at","updated_at"];
        //specify the field that unable to multiple assaigned with vaule
        protected $guarded =[];

        
}
