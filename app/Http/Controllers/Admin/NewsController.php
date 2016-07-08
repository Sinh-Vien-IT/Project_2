<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\News;
use Auth;
use App\Http\Requests\AddNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Input;
use File;

class NewsController extends Controller {

	public function __construct(){
		$this->beforeFilter(function(){
            if (!Auth::user())
            	return redirect('auth/login');
            if (Auth::user()->role != 'admin'){
                return redirect()->back();
            }
        });
	}
	public function getList(){
		$data = News::orderBy('created_at','DESC')->paginate(5);		
		$data->setPath('../../admin/news/list');
		return view('admin/news/list',compact('data'));
	}

	public function getAdd(){
		return view('admin.news.add');
	}

	public function postAdd(AddNewsRequest $request){
		$data = new News();
		$data->title = $request->title;
		$data->content = $request->content_news;
		$file_name = changeTitle($request->file('image')->getClientOriginalName());
		$data->image = $file_name;
		$data->type = $request->type;
		$data->key_word = changeTitle($request->title);
		$data->save();
		$request->file('image')->move('resources/upload/news/'.$data->id.'/', $file_name);
		return redirect()->route('admin.news.getAdd')->with(['flash_level'=>'success','flash_message'=>'Thêm tin tức thành công']);
	}

	public function getUpdate($id){
		$data = News::find($id);
		if(!$data)
			return redirect()->back();
		return view('admin.news.update',compact('data'));
	}

	public function postUpdate($id,UpdateNewsRequest $request){
		$data = News::find($id);
		
		if(Input::hasFile('image')) {
			$file_name = changeTitle($request->file('image')->getClientOriginalName());
			File::delete('resources/upload/news/'.$data->id.'/'.$data->image);
			$data->image = $file_name;
		}
		$data->title=$request->title;
		$data->content = $request->content_news;
		$data->type = $request->type;
		$data->key_word = changeTitle($request->title);
		$data->save();
		if(Input::hasFile('image')) {
			$request->file('image')->move('resources/upload/news/'.$data->id.'/',$file_name);
		}
		return redirect()->route('admin.news.getList')->with(['flash_level'=>'success','flash_message'=>'Cập nhật tin tức thành công!']);
	}
	public function getDelete($id){
		$data = News::find($id);
		if(!$data)
			return redirect()->back();
		if(!empty($data->image)){
				if(file_exists('resources/upload/news/'.$data->id.'/'.$data->image)){
					File::delete('resources/upload/news/'.$data->id.'/'.$data->image);
					rmdir('resources/upload/news/'.$data->id);
				}
			}
		$data->delete();
		return redirect()->route('admin.news.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa tin tức thành công!']);
	}

	public function postDelete(Request $request){
		$checks = $request->check;
		$count=0;
		if(count($checks)==0)
			return redirect()->route('admin.news.getList')->with(['flash_level'=>'danger','flash_message'=>'Không xóa tin tức nào!']);
		foreach($checks as $item){
			$data = News::find($item);
			//Xóa ảnh
			if(!empty($data->image)){
				if(file_exists('resources/upload/news/'.$data->id.'/'.$data->image)){
					File::delete('resources/upload/news/'.$data->id.'/'.$data->image);
					rmdir('resources/upload/news/'.$data->id);
				}
			}
			$data->delete();
			$count++;
		}
		return redirect()->route('admin.news.getList')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công '.$count.' tin tức!']);
	}

	public function getContent($id){
		$data=News::find($id);
		if(!$data)
			return redirect()->back();
		return view('admin/news/content',compact('data'));
	}

}
