<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Link;
use Auth;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function index(){

        if (Auth::check())
        {

            $id_user = Auth::user()->getId();
            $utilisateur = User::findOrFail($id_user);
       

        }
        $links = DB::table('links')->get();
        foreach($links as $link){
        
            $end = Carbon::parse($link->updated_at);
          
            $now = Carbon::now();
            $length = $end->diffInDays($now);
            if($length>=1){
                Link::destroy($link->id);
            }
            }
        $links = DB::table('links')->orderBy('updated_at', 'desc')->get();
         return view('welcome2', compact('utilisateur', 'links'));
    }

public function getUrl(Request $request){
   $code = $request->input('code');     
$id_user = null;
$ip = $request->ip();
$device=   $request->header('User-Agent');
        if (Auth::check())
        {

            $id_user = Auth::user()->getId();
            $utilisateur = User::findOrFail($id_user);
       

        }
        $links = DB::table('links')->where('code', '=', $code)->get();
        $mytime = Carbon::now();

$lien ='';
foreach($links as $link){
    $lien = $link->link;
}
Log::info('Accès à l\'application:', ['date' => $mytime,'utilisateur connecté'=> $id_user, 'lien'=>$lien, 'adresse IP'=>$ip, 'User Agent Navigateur'=>$device]);        
return ($lien);
    }
    
    
    
    public function shorten(Request $request)
    {
        $link = $request->input('url');
        $code = null;
        if (Auth::check())
        {

            $id_user = Auth::user()->getId();
            $limite = DB::table('links')->where('id_user', '=', $id_user)->get();
            if(count($limite)>=10)return ('limte'); else{
                $limteBase = DB::table('links')->get()->count();
                $lastPos =$limteBase-1;
              
                $lastOne = Link::all() -> last()-> pluck('id');
                $last=$lastOne[$lastPos];
                
                if($limteBase >=100){
                    $OldOne = $last-99;
                    
                    Link::destroy($OldOne);
                    //return ('limtebase delete old one===='.$OldOne);
                    
                }
            $existe = DB::table('links')->where('id_user', '=', $id_user)->where('link', '=', $link)->get();
            if(count($existe)) return ('existe'); 
            else{
        $string = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 2);
        $number = rand(100000,9999);
        $code =$id_user.$string.$number; 
       // $data['created_at'] =new \DateTime();
       $data = array(
                    'id_user' => $id_user,
                    'link' => $link,
                    'code' => $code,
                    'created_at' => new \DateTime(),
                    'updated_at' => new \DateTime());
       $id_link = DB::table('links')->insertGetId($data);
       
        return ($code);
                
            }
            }
         
        }
        return ('error');
       
    }
    public function delete($id)
    {
      
        if (Auth::check())
        {
        Link::destroy($id);
           
        return ('done');
       }
        return ('error');
       
    }
  
    public function validateEmail($id)
    {

        $isAvailable = true;

        $rules = array(
            'email'  => 'unique:users,email,'.$id,
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
        {
            $isAvailable = false;

            return Response::json(array(
                'valid' => $isAvailable,
            ));
        }
        else
        {
            $isAvailable = true;

            return Response::json(array(
                'valid' => $isAvailable,
            ));
        }
    }
}
