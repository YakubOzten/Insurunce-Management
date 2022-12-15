<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Policy;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use Illuminate\Pagination\Paginator;


class CustomerController extends Controller
{
    public function index()
    {
//        $data["title"] = "anasayfa";
//        $data["content"] = view("admin.urunler.main");
        $policyies = Policy::with('category')->paginate(5);

        return view("customer.policy", compact('policyies'));
    }
    public function askquestion()
    {

//        $policyies = Policy::with('category')->paginate(5);

        return view("customer.askquestion");
    }
    public function  create_question(Request $request){
//store question
//        $request->validate(['tc'=>'required|max:11'
//
//        ]);
        $quests=new Question();
        $quests->user_id=Auth::id();
        $quests->sfollow_id=$request->input('follow_id');

        $quests->ad=$request->input('val-firstname');
        $quests->soyad=$request->input('val-lastname');
        $quests->tc=$request->input('val-tc');
        $quests->plaka=$request->input('val-plaka');
        $quests->belge_seri_no=$request->input('val-belge');
        $quests->dogum_tarihi=$request->input('val_dogum_tarihi');
        $quests->adres=$request->input('val-adres');
        $quests->daire_m2=$request->input('val-dairem2');
        $quests->bina_yili=$request->input('val-bina');


$quests->save();

        return redirect('history-question')->with('status',"Teklif Gönderimi Başarılı!");
    }

//    public function indexpolicy(){
//
//
//        $wishlist=Wishlist::where('user_id',Auth::id())->get();
//        return view('wishlist',compact('wishlist'));
//    }
    public function add(Request $request){


//        if (Auth::check())
//        {
            $pol_id=$request->input('policy_id');

            if ($pol=Policy::find($pol_id)){
                $app=new Apply();
                $app->policy_id=$pol_id;
                $app->user_id=Auth::id();
                $app->save();
                return response()->json(['status' => "Sigorta başvurusu başarılı"]);
            }else{
                return response()->json(['status' => "Başvuru Bulunumadı Bulunamadı"]);
            }

//        }else{
//            return response()->json(['status' => "Devam etmek için giriş yapın "]);
//        }


    }
//    public function deleteitem(Request $request){
//        if (Auth::check()) {
//            $prod_id = $request->input('prod_id');
//            if (Wishlist::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {
//                $wish = Wishlist::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
//                $wish->delete();
//                return response()->json(['status' => "Ürün başariyla Beğendiklerimden silindi"]);
//            }
//        } else {
//            return response()->json(['status' => "login on Continue"]);
//        }
//
//
//    }

    public function  app_history(){
        $pols=Apply::all();
        return view('Customer.polhistory',compact('pols'));
    }

    public function question_history(){
        $quests=Question::all();

        return view('Customer.questionhistory',compact('quests'));

    }


}
