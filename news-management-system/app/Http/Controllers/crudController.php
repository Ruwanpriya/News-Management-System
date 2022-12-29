<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class crudController extends Controller
{
    public function insertData(Request $request){
      
        
        $data = $request->except('_token','submit');
            $tbl=decrypt($data['tbl']);
            unset ($data['tbl']);

            $data['created_at'] = date('Y-m-d H:i:s');

            If ($request->has('social')){
                $data['social']=implode(',',$data['social']);
            }

           

           If($request->hasFile('image')){
                    $data['image']=$this->uploadimage($tbl,$data['image']); 
                }
            If ($request->has('category_id')){
                $this->validate($request,['title'=>'required',
                    'description'=>'required',]);
    
             $data['category_id']=implode(',',$data['category_id']);
            }

            DB::table($tbl)->insert($data);
            if($tbl =='messages'){
                session::flash('message','Thank you for messaging us,We will contact you shortly.');
            }else{
                session::flash('message','Data inserted successfully!!!');
            }
            return redirect()->back();
    }

    private function uploadimage($location,$imagename){
       
        $name=$imagename->GetClientOriginalName();
        
        $imagename->move(public_path().'/'.$location,date('ymdgis').$name);
            return date('ymdgis').$name;
    }

    public function updateData(Request $request){
        $data = $request->except('_token','submit');
            $tbl=decrypt($data['tbl']); 
            unset ($data['tbl']);
            $data['updated_at'] = date('Y-m-d H:i:s');

            If ($request->has('social')){
                $data['social']=implode(',',$data['social']);
            }

           If($request->hasFile('image')){
                    $data['image']=$this->uploadimage($tbl,$data['image']); 
                }

            If ($request->has('category_id')){
                $this->validate($request,['title'=>'required',
                    'description'=>'required',]);
               $data['category_id']=implode(',',$data['category_id']);
            }

            DB::table($tbl)->where(key($data),reset($data))->update($data);
            session::flash('message','Data updated successfully!!!');
            return redirect()->back();
    }


} 
 