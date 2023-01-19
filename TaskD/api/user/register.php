<?php
    namespace App\Http\Controllers;
    use App\Http\Controllers\Controller;
    use App\Models\User;
    // use Illuminate\Http\Route;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    include("../../link.php");

    // Route::group(['prefix' =>'home'], function(){
    //     Route::get('/index', [HomeController::class, 'index']);
    //     Route::post('/index', [HomeController::class, 'indexProcess']);
    //     Route::get('/about', [HomeController::class, 'about']);
    //     Route::get('/main', [HomeController::class, 'main']);
    // });
    class signup /*extends Controller*/{
        public function register(Request $request){
            $validator=Validator::make($request->all(),[
                "email"=>"required|email|unique:users",
                "nickname"=>"required|string",
                "password"=>"required|string|min:8|max:24",
                "profile_image"=>"required|file|mimes:png,jpg"
            ]);

            if($validator->fails()){
                return response()->json([
                    "success"=>false,
                    "message"=>$validator->errors()
                ],400);
            }

            $user=new User();
            $user->email=$request->input("email");
            $user->nickname=$request->input("nickname");
            $user->password=Hash::make($request->input("password"));

            // handle profile image upload
            $profile_image=$request->file("profile_image");
            $path=$profile_image->store("public/profile_images");
            $user->profile_image=$path;
            $user->save();
            return response()->json([
                "success"=>true,
                "message"=>"User registered successfully",
                "data"=>$user
            ],201);
        }
    }
?>