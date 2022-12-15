<?php

namespace App\Http\Controllers\Admin;

use App\Models\Apply;
use App\Models\Policy;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use Illuminate\Pagination\Paginator;


class AdminController extends Controller
{
    public function index()
    {
//        $data["title"] = "anasayfa";
//        $data["content"] = view("admin.urunler.main");
        $policyies = Policy::with('category')->paginate(5);

        return view("admin.index", compact('policyies'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.create', compact('categories'));
    }
    public function store(Request $request)
    {
//        $request->validate(['name'=>'required|min:2',
//            'price'=> 'required'
//        ]);
        $input = $request->all();
        $policies=new Policy();
//        if ($request->hasFile('image'))
//        {
//            $file=$request->file('image');
//            $ext = $file->getClientOriginalExtension();
//            $filename=time().'.'.$ext;
//            $file->move('storage/images/products/',$filename);
//            $products->image=$filename;
//        }
        $policies->category_id=$request->input('category_id');
        $policies->policy_name=$request->input('policy_name');


        $policies->premium=$request->input('premium');
        $policies->Kul_suresi=$request->input('Kul_suresi');
//        $policies->status=$request->input('status') == TRUE ? '1' : '0';

        $policies->save();



            return redirect('anasayfa')->with('status','Kayıt Başarılı');
    }

    public function edit($policy)
    {
        $categories = Category::all();
        $policy = Policy::find($policy);
        return view('admin.edit', compact('policy', 'categories'));
    }

    public function update(Request $request, $pl_id)
    {


        $input = $request->all();
        $policies = Policy::find($pl_id);
//        if ($request->hasFile('image')){
//            $path='storage/images/products/'.$products->image;
//            if (File::exists($path))
//            {
//                File::delete($path);
//            }
//            $file=$request->file('image');
//            $ext=$file->getClientOriginalExtension();
//            $filename=time().'.'.$ext;
//            $file->move('storage/images/products/',$filename);
//            $products->image=$filename;
//        }
        $policies->category_id=$request->input('category_id');
        $policies->policy_name=$request->input('policy_name');
        $policies->premium=$request->input('premium');
        $policies->Kul_suresi=$request->input('Kul_suresi');
//        $policies->status=$request->input('status') == TRUE ? '1' : '0';

        $policies->update();


        session()->flash('message',$input['policy_name'].' Güncelleme başarılı.');


        return redirect()->route('policy-index');
    }
    public function delete($policy)
    {
        Policy::find($policy)->delete();

        session()->flash('message','Ürün  Silme işlemi başarılı.');
        return redirect()->back();
    }

    public function category_index()
    {
        $data["title"] = "anasayfa";
//        $data["content"] = view("admin.urunler.main");
//        $categories = Category::all();

        $categories=DB::table('categories')->paginate(5);


        return view("admin.category.index", compact('categories',));
    }

    public function category_create()
    {
        $categories = Category::all();
        return view('admin.category.create', compact('categories'));
    }
    public function catedit($category)
    {
        $category = Category::find($category);
        return view('admin.category.edit', compact( 'category'));
    }


    public function category_store(Request $request)
    {

        $input = $request->all();
        $category=new Category();
//        if ($request->hasFile('image'))
//        {
//            $file=$request->file('image');
//            $ext=$file->getClientOriginalExtension();
//            $filename=time().'.'.$ext;
//            $file->move('storage/images/Categories/',$filename);
//            $category->image=$filename;
//        }
        $category->category_name=$request->input('category_name');
        $category->save();
//        session()-> flash('message',$input['name'].' kaydı başarılı.');
        return redirect('cat-anasayfa');
    }
    public function cat_update(Request $request, $pr_id){
        $input = $request->all();
        $category = Category::find($pr_id);
//        if ($request->hasFile('image')){
//            $path='storage/images/Categories/'.$category->image;
//            if (File::exists($path))
//            {
//                File::delete($path);
//            }
//            $file=$request->file('image');
//            $ext=$file->getClientOriginalExtension();
//            $filename=time().'.'.$ext;
//            $file->move('storage/images/Categories/',$filename);
//            $category->image=$filename;
//        }
        $category->category_name=$request->input('category_name');
        $category->update();
//        session()->flash('message',$input['name'].' Güncelleme başarılı.');
        return redirect('cat-anasayfa');
    }
    public function catdelete($category)
    {
        Category::find($category)->delete();

//        session()->flash('message','Ürün  Silme işlemi başarılı.');
        return redirect()->back();
    }
    public function  apply_history(){
        $pols=Apply::all();
        return view('Admin.apppolicy.policy',compact('pols'));
    }
    public function  finish_apply(){
        $pols=Apply::all();
        return view('Admin.apppolicy.finishpolice',compact('pols'));
    }


    public function update_pol(Request $request){
        $pol_id=$request->input('policy_id');
        $pols=Apply::find($pol_id);
        $pols->status =1;
        $pols->update();

        return response()->json(['status' => "Poliçe Başvurusu Onaylandı."]);


    }
    public function question_index(){

        $quests=Question::all();
        return view('Admin.questions.index',compact('quests'));
    }
    public function question_edit($quest)
    {
        $quests = Question::find($quest);
        return view('admin.questions.edit', compact( 'quests'));
    }
    public function question_update(Request $request, $q_id){
        $input = $request->all();
        $quests = Question::find($q_id);

        $quests->admin_comment=$request->input('val-admin_comment');


        $quests->update();
//        session()->flash('message',$input['name'].' Güncelleme başarılı.');
        return redirect('questions-index');
    }


}
