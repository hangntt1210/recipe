<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use Session;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Group;
use App\Models\Ingredient;
use App\Models\Like;
use App\Models\Review;

class PageController extends Controller
{
    //
    public function getIndex(){
    	//return view('page.home');
    	$tatcasp = Recipe::with('user', 'group')->where('status','<>',0)->paginate(6);

    	return view('page.home', compact('tatcasp'));
    }

    public function getLoai($type){
        $sp_theoloai = Recipe::with('group', 'user')->where('group_id',$type)->where('status','<>',0)->get();//lay sp theo loai: id_type=bien truyen vao $type
        return view('page.group_recipe',compact('sp_theoloai'));
    }

    public function getChitiet(Request $req){
        $sanpham = Recipe::with('user', 'group')->where('id',$req->id)->first();
        $reviews = Review::with('recipe')->where('recipe_id', $req->id)->get()-> sortByDesc('created_at');

        return view('page.detail', compact('sanpham', 'reviews'));
    }

    public function getLogin(){
        return view('page.dangnhap');
    }

    public function getSignup(){
        return view('page.dangki');
    }

    public function postSignup(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:user,email',//required bat buoc phai nhap, unique co trung email cua tai khoan khac ko               
                'name'=>'required',
                'password'=>'required|min:3|max:30',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Email không được để trống',
                'email.email'=>'Email không đúng định dạng',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Password không được để trống',
                're_password.required'=>'RePassword không được để trống',
                're_password.same'=>'RePassword không khớp với Password',
                'password.min'=>'Password phải có ít nhất 3 ký tự',
                'password.max' =>'Password chỉ được có tối đa 30 ký tự',
                'name.required'=>'Fullname không được để trống',
            ]
        );
        $user = new User();       
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);//sd hash de ma hoa password
        $user->save();

        return redirect()->back()->with('thanhcong','đã tạo tài khoản thành công');
        //return redirect()->back()->with(['flag'=>'success','message'=>'đã tạo tài khoản thành công']);
    }

    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required'
            ],
            [
                'email.required'=>'Email không được để trống',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Password không được để trống',
            ]
        );
        
        $credentials = array('email'=>$req->email, 'password'=>$req->password);
        if(Auth::attempt($credentials)){//xác thực người dùng thủ công: kiểm tra xem email có trong bảng users hay không, nếu có thì trường hash password trong bảng users sẽ được lấy ra để so sánh với hash password
            return redirect()->back()->with(['flag'=>'success','message'=>'đăng nhập thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Email hoặc Password không đúng']);
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function getProfile(){
        
        return view('page.profile');
    }
}
