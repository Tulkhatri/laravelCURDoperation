<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers()
    {
        $users = User::get(); //query builder get data

        // return json_encode(['data' => $users]); // api

        // return $users;
        // return dd($users);
        // return dump($users);
        return view('allUsers', ['data' => $users]);
    }
    public function singleUser(string $id)
    {
        $users = DB::table('users')->where('id', $id)->get();
        return view('allUsers', ['data' => $users]);
    }
    public function userDetail(string $id)
    {
        $users = DB::table('users')->where('id', $id)->get();
        return view('userDetails', ['data' => $users]);
    }
    public function addUser(Request $req)
    {
        $user = DB::table('users')
            ->insertOrIgnore([
                'name' => $req->userName,
                'email' => $req->userEmail,
                'age' => $req->userAge,
                'city' => $req->userCity,
            ]);
        if ($user) {
            echo "<h3>New record is added</h3>";
            return redirect()->route('showUsers');
        } else {
            echo "<h3>Something is wrog</h3>";
        }
    }

    public function updatePage(string $id)
    {
        // $user = DB::table('users')->where('id', $id)->get();return array of object
        $user = DB::table('users')->find($id); //return jus object
        // return $user;
        return view('updateuser', ['data' => $user]);
    }


    public function updateUser(Request $req, $id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $req->userName,
                'email' => $req->userEmail,
                'age' => $req->userAge,
                'city' => $req->userCity,
            ]);
        if ($user) {
            echo "<h3>Data is updated</h3>";
            return redirect()->route('showUsers');
        } else {
            echo "<h3>Something is wrog</h3>";
        }
    }
    public function deleteUser(string $id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->delete();
        // ->truncate();//delete and reset id
        if ($user) {
            echo "<h3>Data is Deleted</h3>";
            return redirect()->route('showUsers');
        }
    }
}
