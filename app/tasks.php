<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{

	public static function username()
	 {

 		 // DB::table('tasks')->orderBy('id')->chunk(3, function ($tasks) {
   	// 	 foreach ($tasks as $task) {
   	    return static::where('body')->get();
     }
// });
// }
}

