<?php

namespace App\Http\Controllers;
use Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class UploadsController extends Controller
{
  
    public function store(Request $request)
    {

        $prefix = $request->input('prefix');




            $i=0;
            $imagesNames = "";
            while(Input::hasfile($i))
            {

                $file = Input::file($i);
                if ( ($prefix != 'profil') )
                {
                    return ('prefix not valid'.$prefix);
                }
                else
                {
                    $imagesNames .=  $this->upload($file,$prefix)."*w*";

                }
                $i++;
            }
            
            if($i!= 0)
            {
                return  (json_encode($imagesNames));
            }

            if(Input::hasFile('image'))
            {
                $file = Input::file('image');
                $validator = \Validator::make($request->all(), ['image' => 'max:10000|mimes:png,jpg,jpeg']);
                
                if ($validator->fails()) {
                    return response()->json($validator->errors(), 422);
                }
                else
                {

                    if ($prefix != 'profil'){
                        return ('prefix not valid'.$prefix);
                    }
                    else
                    {
                        
                        return json_encode($this->upload($file,$prefix));

                    }
                }
            }
            if(Input::hasFile('fichier'))
            {
                $file = Input::file('fichier');
                $validator = \Validator::make($request->all(), ['fichier' => 'max:20000|mimes:docx,pdf,txt']);
                if ($validator->fails()) {
                    return response()->json($validator->errors(), 422);
                }
                else
                {

                    if (($prefix != 'groupes') && ($prefix != 'profil') && ($prefix != 'assurences'))
                    {
                        return ('prefix not valid'.$prefix);
                    }
                    else
                    {
                        return json_encode($this->upload($file,$prefix));

                    }
                }
            }


    }

    public function upload($file,$prefix)
    {
        //$destinationPath = 'uploads/' . $prefix;
        $destinationPath = public_path() . '/uploads/';
        $mytime = Carbon::now();
        $mytime->toDateTimeString();
        $date = substr($mytime, 2, 2) . substr($mytime, 5, 2) . substr($mytime, 12, 8);
        $name = 'Raccourccir_' . $prefix . '_' . $date . '_' . $file->getClientOriginalName();
        $tmp_name = $file->import->getPathName();
        /*dd('prefix123'.$destinationPath);
        $file->move($destinationPath, $name);
        dd('prefix123'.$name);*/
        dd($tmp_name);
if (!file_exists("public/upload"))
{
    mkdir("public/upload", 0777, true);
    //dd('created folder');
}
if (file_exists("public/images_upload/" . $name))
{
    dd(" already exists. ");
}
else
{
    move_uploaded_file($tmp_name,
    "public/upload" . $name);
    dd("Stored in: ");
}
        return $name;
    }
}