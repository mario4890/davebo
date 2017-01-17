<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Illuminate\Support\Facades\Mail;

class GeneralController extends Controller {

    public function index() {
        
        $path       = str_replace("\\", "/", $_SERVER['DOCUMENT_ROOT']);
        $fullPath   = $path . "/graph/footo";
        $y          = 0; 
        
        if ($handle = opendir($fullPath)) {
            while ((false !== ($file = readdir($handle)))) {
                if(!preg_match('/^[\.]*$/', $file)) {
                    $fileArray[] = $file;
                }
            }
            closedir($handle);
        }
        shuffle($fileArray);
//        dump($fileArray);
        
    if(isset($_GET['send'])) {
        
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $messsage = $_GET['wiad'];

            $body = "Nazwa: " . $name . "<BR />" . "E-mail: " . $mail . "<br />" . "Wiadomość: " . $messsage;

             Mail::send('emails.mail', ['name' => $body], function ($m) {
                $m->from('website@davebosax.com', 'Your Website');
                $m->to('booking@davebosax.com', 'strona')->subject('New message');
            });
            // Create the message
        }
        $videos = Video::get();
        return view('general', compact('videos', 'fileArray'));
        
    }

    public function ajaxIndex() {
        if (isset($_POST['id'])) {
            $videos = new Video;
            $array  = $videos->idSelect($_POST['id']);
            return response()->json($array);
        } else {
            $path       = str_replace("\\", "/", $_SERVER['DOCUMENT_ROOT']);
            $fullPath   = $path . "/graph/footo";
            $y          = 0; 
        
        if ($handle = opendir($fullPath)) {
            while ((false !== ($file = readdir($handle)))) {
                if(!preg_match('/^[\.]*$/', $file)) {
                    $fileArray[] = $file;
                }
            }
            closedir($handle);
        }
        shuffle($fileArray);
        $videos = Video::get();
        return view('general', compact('videos', 'fileArray'));
        }
    }

}
