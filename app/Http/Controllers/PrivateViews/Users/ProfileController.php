<?php

namespace App\Http\Controllers\PrivateViews\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Image;
use Auth;
use File;


class ProfileController extends Controller
{
    public function profile()
    {

    	return view('privateviews.users.profile');
    }

    public function updateProfilePicture(Request $request){

    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = preg_replace('/\s+/', '', Auth::user()->name) . time() . '.' . $avatar->getClientOriginalExtension();

    		// Delete current image before uploading new image
            if (Auth::user()->avatar !== 'default.jpg') {
                 $file = public_path('/assets-admin/img/uploads/avatars/' . Auth::user()->avatar);
                if (File::exists($file)) {
                    unlink($file);
                }
            }

    		Image::make($avatar)->resize(300, 300)->save( public_path('/assets-admin/img/uploads/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	return view('privateviews.users.profile', array('user' => Auth::user()) );

    }

}
