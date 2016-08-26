<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class DbCheckController extends Controller
{
    
     public function index()
    {

    	//die('response from db controller method');

		if(DB::connection())
		{

            $tables = DB::select('SHOW TABLES');
            foreach($tables as $table)
            {
                echo $table->Tables_in_db_name;
            }

            //die(json_encode(array('data'=>$tbl)));
		}else{

			echo "Database Connection Error";
		}

  }
}
