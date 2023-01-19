<?php
    use app\Http\Controllers\Controller;
    use app\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    include("../../../link.php");

    class usercontroller extends Controller{
        public function register(Request $request){
            $validator = Validator::make($request->all(), [
                "email"=>"required|email|unique:users",
                "nickname"=>"required|string",
                "password"=>"required|string|min:8|max:24",
                "profile_image"=>"required|file|mimes:png,jpg"
            ]);

            if ($validator->fails()) {
                return response()->json([
                    "success"=>false,
                    "message"=>$validator->errors()
                ], 400);
            }

            $user = new User();
            $user->email = $request->input("email");
            $user->nickname = $request->input("nickname");
            $user->password = Hash::make($request->input("password"));

            // handle profile image upload
            $profile_image = $request->file("profile_image");
            $path = $profile_image->store("public/profile_images");
            $user->profile_image = $path;

            $user->save();

            return response()->json([
                "success"=>true,
                "message"=>"User registered successfully",
                "data"=>$user
            ], 201);
        }
    }
?>