<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;

class ProfileController extends Controller
{
    public function update()
    {
      // Validate that everything havs been submitted
      $validator = $this->validate(request(), [
        'img' => 'image|mimes:jpeg,jpg,png,gif|required|max:2048',
      ]);

      //update the image name
      $imgName = create_img_title(
          request('img')->getClientOriginalName(), 
          request('img')->getClientOriginalExtension()
      );
      
      //Save the image to the user image folder
      request()->img->move(public_path('images/user/'), $imgName['name']);
      
      //update profile
      $profile = Profile::where('user_id', Auth::user()->id)->first();
      $profile->img = '/images/user/' . $imgName['name'];
      $profile->update();

      return redirect('/home')->with('success','You have successfully upload image.')
        ->with('image',$imgName);;
    }
}
