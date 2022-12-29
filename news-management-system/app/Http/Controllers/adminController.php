<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class adminController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }



    public function dashboard(){
        return view('backend.dashboard');
    }
    public function viewcategory(){
        $data =DB::table('categories')->get();
        return view('backend.categories.ViewCategory',['data'=>$data]);
    }

    public function editCategory($id){
        $singledata =DB::table('categories')->where('cid',$id)->first();
        if($singledata ==NULL){
          return redirect('viewcategory');
        }
        $data =DB::table('categories')->get();
        return view('backend.categories.editCategory',['data'=>$data,'singledata'=>$singledata]);
    }

    public function multipleDelete(Request $request){
        $data = $request->except('_token','submit');
        if($data['bulk-action']==0){
          session::flash('message','please select the action you want to perform');
          return redirect()->back();
        }
        $tbl =decrypt($data['tbl']);
        $tblid =decrypt($data['tblid']);
        
        if(empty($data['select-data'])){
          session::flash('message','please select the data you want to delete');
          return redirect()->back();
        }
        $ids=$data['select-data'];
        
        foreach($ids as $id){ 
          DB::table($tbl)->where($tblid,$id)->delete();
        }
        session::flash('message','Data deleteted Successfully!');
        return redirect()->back();

    }
    public function websettings(){
      $data=DB::table('settings')->first();
        if($data){
            $data->social=explode(',',$data->social);
        }
        return view('backend.setting',['data'=>$data]);
      
    }

    public function addpost(){
      $categories=DB::table('categories')->get();
      return view('backend.post.add-post',['categories'=>$categories]);
    }

    public function allpost(){
      $posts=DB::table('posts')->orderby('pid','DESC')->paginate(20);
      foreach($posts as $post){
        $categories=explode(',',$post->category_id);
        foreach($categories as $cat){
          $postcat =DB::table('categories')->where('cid',$cat)->value('title');
          $postcategories[]=$postcat;
          $postcat =implode(', ',$postcategories);
          
        }
         
         $post->category_id=$postcat;
         $postcategories=[];
      }
      $published = DB::table('posts')->where('status','publish')->count();
      $allposts=DB::table('posts')->count();
      return view('backend.post.all-posts',['posts'=>$posts,'published'=>$published,'allposts'=>$allposts]);
    }

    public function editpost($id){
         
         $data =DB::table('posts')->where('pid',$id)->first();
         $postcat=explode(',',$data->category_id);
         $categories=DB::table('categories')->get();
         return view('backend.post.edit-post',['data'=>$data ,'categories'=>$categories,'postcat'=>$postcat]);
    }



    public function addpage(){
      return view('backend.pages.add-page');
    }

    public function allpages(){
      $posts=DB::table('pages')->get();
      $published = DB::table('pages')->where('status','publish')->count();
      $allposts=DB::table('posts')->count();
      return view('backend.pages.all-pages',['posts'=>$posts,'published'=>$published,'allposts'=>$allposts]);
    }

    public function editpage($id){
         
         $data =DB::table('pages')->where('pageid',$id)->first();
         $categories=DB::table('categories')->get();
         return view('backend.pages.edit-page',['data'=>$data ]);
    }

    public function messages(){
      $data=DB::table('messages')->orderby('mid','DESC')->paginate(20);
      return view('backend.pages.messages',['data'=>$data ]);
    }

    public function addAdv(){
      return view('backend.advertisment.add-adv');
    }

    public function allAdv(){
      $data =DB::table('advertisments')->orderby('aid','DESC')->get();
      return view('backend.advertisment.all-adv',['data'=>$data]);
    }

    public function editAdv($id){
      $data =DB::table('advertisments')->where('aid',$id)->first();
      return view('backend.advertisment.edit-adv',['data'=>$data]);
    }

    public function users(){
      $data =DB::table('users')->orderby('id','DESC')->get();
      return view('backend.users.all_users',['data'=>$data]);
    }

}  
