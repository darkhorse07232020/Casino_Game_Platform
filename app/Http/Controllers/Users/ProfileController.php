<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
   /**
    *
    * allow admin only
    *
    */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        return view('users.profile.profile',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => ['required','string', 'max:255'],
            'email' => ['required','string', 'email', 'max:255',Rule::unique('users')->ignore($id)],
            'avatar' => ['required','mimes:jpeg,bmp,png,PNG,JPG,jpg,JPEG','max:9000'],
            'mobile' => ['required','numeric','min:10',Rule::unique('users')->ignore($id)]
        ]);

        $name = null;
        $newImageName = null;

        //check if file attached
        if($file = $request->file('avatar')){
            $tmp = explode('.', $file->getClientOriginalName());//get client file name
            $name = $file->getClientOriginalName();
            $newImageName = round(microtime(true)).'.'.end($tmp);
            $file->move(storage_path('app\public\profile-pic'), $newImageName);
        }
        $user = User::find(Auth::user()->id);
        $newImage = null;
        $newImage = $newImageName == null? $user->avatar:$newImageName;
        $user->update(array_merge($request->all(),['avatar' => $newImage]));

        return redirect()->route('profile.index')->with('success','Profile Updated Successfully!');
    }

}
