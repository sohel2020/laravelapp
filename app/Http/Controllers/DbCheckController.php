<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class DbCheckController extends Controller
{
    
      public function index()
    {
        $data = array('status' => 'failed');
        try {
            $db_name = DB::connection()->getDatabaseName();
            if ($db_name) {
                $tables = DB::select('SHOW TABLES');
                $table_list = [];
                foreach ($tables as $table) {
                    $table_name = 'Tables_in_' . $db_name;
                    $table_list = $table->{$table_name};
                }
                print_r("Database is connected successfully");
            }
        } catch (\Exception $ex) {
            print_r("Opps, Database connection failed");
            
        }

        die();
    }
}
