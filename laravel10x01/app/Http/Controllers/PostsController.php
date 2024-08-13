<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;


class PostsController extends Controller
{
    // hien thi danh sach
    public function index(){
        $posts = Posts::all();
        return view('posts.index',['posts' => $posts]);
    }

    // trở lại
    public function back(){
        return redirect('/posts');
    }
    // them moi - GET
    public function createGET(){
        return view('posts.create');
    }

    public function createPOST(Request $request){
        $posts = new Posts;
        $posts->title = $request->title;
        $posts->body = $request->body;
        // lấy file từ người dùng và ghi lên server
       // Tạo tên tệp hình ảnh
       $fileName = time() . '.' . $request->file('image')->extension();
        
       // Di chuyển hình ảnh đến thư mục công khai
       $request->file('image')->move(public_path('images'), $fileName);
       
       // Cập nhật đường dẫn hình ảnh
       $imageUrl = 'images/' . $fileName;
       $posts->image = $imageUrl;

       $posts->save();
        
        return redirect('/posts')->with('');
    }

    // sửa - GET
    public function editGET($id){
        $post = Posts::where('id', $id)->get()->first();
        return view('posts.edit', ['post' => $post]);
    }

    // sửa - POST
    public function editPOST(Request $request,$id){
        $post = Posts::where('id',$id)->get()->first();
        $post->title  = $request->title;
        $post->body  = $request->body;
        if(file_exists(public_path($post->image))) { unlink($post->image); }
       
        if ($request->hasFile('image')) {
            $fileName = time() . ".". $request->file('image')->extension();
            $request->file('image')->move(public_path('images'),$fileName);
            $imageUrl = 'images/' . $fileName;
            $post->image = $imageUrl;
        } 
        $post->save();
        return redirect('/posts');
    }

    public function delete($id){
        $post = Posts::where('id',$id)->get()->first();
        if(file_exists(public_path($post->image))) { unlink($post->image); }
        Posts::where('id',$id)->delete();
        return redirect('/posts');
    }

    public function detail($id){
        $post = Posts::where('id',$id)->get()->first();
        return view('posts.detail',['post' => $post]);
    }
}

