<?php

use App\Models\User;


use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image; // use Intervention
// use Intervention\Image\Facades\Image;

use Illuminate\Support\Str;


function upp($string) {
    return ucwords(Str::lower($string));
}


function getUser($id) {
    if(empty($id)) {
        $result = "-";
    }else{
        $result =  User::find($id);
    }
    return  $result;
}


// function getProvince($id) {
//     return Province::find($id);
// }

// function getRegency($id) {
//     return Regency::find($id);
// }

// function getDistrict($id) {
//     return District::find($id);
// }

// function getVillage($id) {
//     return Village::whereId($id)->first();
// }


function upload($destination,$fileUpload, $fileName) {

    $fileUpload->storeAs($destination, $fileName);

    $resize = Image::make($fileUpload);
    $resize->resize(500, 500, function ($constraint) {
        $constraint->aspectRatio();
        $constraint->upsize();
    })->save($fileUpload);
    return $fileUpload->storeAs($destination,$fileName);
}



// function upload($destination,$fileUpload, $fileName) {
//     return $fileUpload->storeAs($destination, $fileName);
// }


function isStatus($s) {

    if($s == "n") {
        $result = "Belum Terverifikasi";
        $color = "warning";
    }else if($s == "y") {
        $result = "Terverifikasi";
        $color = "success";
    }else if($s == "d") {
        $result = "Ditolak";
        $color = "danger";
    }else{
        $result = "-";
        $color = "secondary";
    }

    return [
        'text' => $result,
        'color' => $color
    ];

}


function isVerify($s) {

    if($s == "n") {
        $result = "Belum Terverifikasi";
        $color = "warning";
    }else if($s == "y") {
        $result = "Terverifikasi";
        $color = "success";
    }else if($s == "d") {
        $result = "Blocked";
        $color = "danger";
    }else{
        $result = "-";
        $color = "secondary";
    }

    return [
        'text' => $result,
        'color' => $color
    ];

}

function roles()
{
    return [
        'farmer' => "Petani",
        'companion' => "Pendamping",
        'verifier' => "Verifikator",
        'pmo' => "PMO",
        'partnert' => "Mitra",
        'builder' => "Pembina",
        'admin' => "Administrator",
        'guest' => "Guest",
    ];

}


function roleSelect($select) {

    $arr  = roles();
    $data = "";
    foreach ($arr as $key => $value) {
        $data .= $key;
        if($select == $key) {
            return $value;
        }
    }
}


function sex($string)
{
    return ($string == "L") ? "Laki - Laki" : "Perempuan";
}



function disableSelect()
{
    $sessionId = auth()->user()->profile_id;

    if (roleUser() == "prodi") {
        $disabled = "disabled";
    } else {
        $disabled = "";
    }

    return $disabled;
}



function LogSystem($act, $desc)
{
    $data = [
        'user_id' => auth()->user()->id,
        'username' => auth()->user()->email,
        'ip' => request()->ip(),
        'os' => request()->header('User-Agent'),
        'device_name' => gethostname(),
        'action' => $act,
        'description' => $desc
    ];

    // return Log::create($data);
}


function roleUser()
{
    if(isset(auth()->user()->role)){
        return auth()->user()->role;
    }else{
        redirect('login');
    }
}



function load($class)
{
    return '
        <div class="'. $class. '" style="display:block;">
            <div class=" position-absolute w-100 h-100 d-flex flex-column align-items-center  justify-content-center" style="z-index: 2; background: #135f4f94; border-radius: 10px; color:#fff; ">
                <div class="spinner-border" role="status" style="color:#f0bc74; margin-bottom:10px;">
                    <span class="sr-only" style="color:#f0bc74;"></span>
                </div>
                Loading...
            </div>
        </div>
    ';
}



function loadx($class,$msg)
{
    return '
        <div class="' . $class . '" style="display:block;">
            <div class=" position-absolute w-100 h-100 d-flex flex-column align-items-center  justify-content-center" style="z-index: 2; background: #44287ed9; border-radius: 25px; color:#fff; ">
                <div class="spinner-border" role="status" style="color:#ff9902;">
                    <span class="sr-only" style="color:#ff9902;">Memuat Data...</span>
                </div>
                <div class="text-center">
                 ' . $msg . '
                </div>

            </div>
        </div>
    ';
}

function enc($value)
{
    $text = $value . "";
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'sunmoriEST1900';
    $secret_iv = 'hellodunia';
    // hash
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    $output = openssl_encrypt($text, $encrypt_method, $key, 0, $iv);
    $output = base64_encode($output);
    return $output;
}

function dec($value)
{
    $text = $value . "";
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'sunmoriEST1900';
    $secret_iv = 'hellodunia';
    // hash
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    $output = openssl_decrypt(base64_decode($text), $encrypt_method, $key, 0, $iv);
    return $output;
}


   function sendMail($mailTo,$subject,$name,$title,$body)
    {
        $metaEmail = [
            'subject' => $subject,
            'name' => $name,
            'title' => $title,
            'body' => $body,
        ];

        // \Mail::to($mailTo)->send(new \App\Mail\MailSiakad($metaEmail));
        // dispatch(new \App\Jobs\SendEmailJob($mailTo, $metaEmail));
    }

