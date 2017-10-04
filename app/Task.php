<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

   public function isComplete()
   {

   	return false;
   } //


   //  public static function inComplete()
   // {

   //    	return static::WHERE('completed', 0)->get();
   // } 

	//ues below in cmd with php artisan tinker
	//$task = App\Task::WhereLessId();
   //$task = App\Task::NotCompleted();

   

     public function scopeInComplete($query)
   {

      	return $query->WHERE('completed', 0);
   } 


     public function scopeNotCompleted($query)
   {

      	return $query->WHERE('completed', 1)->get();
   } 

     public function scopeWhereMoreId($query)
   {

      	return $query->WHERE('id', '>', '1')->get();
   } 


    public function scopeWhereLessId($query)
   {

      	return $query->WHERE('id', '<', '3')->get();
   } 

    public function scopeFindBody($query)
   {
   		
   		return $query->pluck('body')->first();   
   } 

    public function scopeAllBody($query)
   {

   		return $query->all(['body']);   
   } 


   
}
