<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
 public function index()
 {
  $user = User::get();
  return view('user.index', ['user' => $user]);
 }
 public function store(Request $request)
 {
   $user           = new User();
   $user->name    = $request->get('name');
   $user->email    = $request->get('email');
   $user->password = bcrypt($request->get('password'));
   $user->save();
   return redirect()->back()->with('success', 'You have been successfully registered');
 }
 public function show($id)
 {
  $user = \App\User::find($id);
  return view('user.edit')
   ->with('user', $user);
 }

 public function update(Request $request, $id)
 {
  $user        = User::find($id);
  $user->email = $request->get('email');
  $user->name = $request->get('name');
//   check password ------------------------
  if ($request->has('password')) {
   $user->password = bcrypt($request->get('password'));
  }
  $user->save();
  return redirect('user')->with('success', 'Detail has been updated');
 }

 public function destroy($id)
 {
    $user        = User::find($id);
    $user->delete();
    return redirect('user')->with('success', 'Deleted');
 }

}
