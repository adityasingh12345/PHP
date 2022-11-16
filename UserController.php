<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
 
class UserController extends Controller
{
    /* getting all recordds from user table*/
    public function index()
    {
        $users = DB::select('select * from users');
 
        foreach ($users as $user) {
            echo $user->name;
    }
    }

    /*Inserting data in database
    DB::insert('insert into users (id, name) values (?, ?)', [1, 'Marc']);
    */

    /*Updating data in database 
    $affected = DB::update(
        'update users set id = 100 where name = ?',
        ['AdityaSingh']
    );
    */
    /*Deleting from Database

    $deleted = DB::delete('delete from users');
    */

}