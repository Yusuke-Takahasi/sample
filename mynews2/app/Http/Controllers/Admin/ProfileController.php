<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

use App\ProfileHistory;

use Carbon\Carbon;

class ProfileController extends Controller
{
    
  public function add()
  {
      return view('admin.profile.create');
  }
  public function create(Request $request)
  {
       $validatedData = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'hobby' => 'required',
            'introduction' => 'required',
        ]);

        $profiles = new Profile();
        $profiles->name = $validatedData['name'];
        $profiles->gender = $validatedData['gender'];
        $profiles->hobby = $validatedData['hobby'];
        $profiles->introduction = $validatedData['introduction'];

        
        $profiles->save();
        return redirect('admin/profile/create');
  
  }
  public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $profiles = Profile::find($request->id);
      if (empty($profiles)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profiles_form' => $profiles]);
  }


  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Profile::$rules);
      // News Modelからデータを取得する
      $profiles = Profile::find($request->id);
      // 送信されてきたフォームデータを格納する
      $profiles_form = $request->all();
      unset($profiles_form['_token']);

      // 該当するデータを上書きして保存する
      $profiles->fill($profiles_form)->save();
      
      $history = new ProfileHistory;
        $history->profile_id = $profiles->id;
        $history->edited_at = Carbon::now();
        $history->save();

      return redirect('admin/profile/');
  }
  
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Profile::where('name', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Profile::all();
      }
      return view('admin.profile.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  
  public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $profile = Profile::find($request->id);
      // 削除する
      $profile->delete();
      return redirect('admin/profile/');
  }  

}