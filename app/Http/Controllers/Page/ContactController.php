<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('page.contact.contact');
    }

    public function downview()
    {
        return view('page.download.download');
    }

    public function remotedown()
    {
        $file = '../storage/app/downs/MI5(5.1).zip';
        $name = basename($file);
        return response()->download($file, $name);
    }

    public function fivedatabase()
    {
        $file = '../storage/app/downs/MI5_DatabaseEditor(5.2).zip';
        $name = basename($file);
        return response()->download($file, $name);
    }

    public function fiveapk()
    {
        $file = '../storage/app/downs/MI5Droid(5.1.2).apk';
        $name = basename($file);
        return response()->download($file, $name);
    }

    public function fivedata()
    {
        $file = '../storage/app/downs/Database.zip';
        $name = basename($file);
        return response()->download($file, $name);
    }

    public function fivevidcode()
    {
        $file = '../storage/app/downs/VidCoder(2.5).zip';
        $name = basename($file);
        return response()->download($file, $name);
    }

    public function directx()
    {
        $file = '../storage/app/downs/DirectXUpdate.zip';
        $name = basename($file);
        return response()->download($file, $name);
    }

    public function fiveram()
    {
        $file = '../storage/app/downs/Ramdisk.zip';
        $name = basename($file);
        return response()->download($file, $name);
    }

    public function databasepdf()
    {
        $file = '../storage/app/downs/MI5_DatabaseEditor.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }

    public function fiveinstallpdf()
    {
        $file = '../storage/app/downs/MI5_InstallationGuide.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }

    public function fivetabletguide()
    {
        $file = '../storage/app/downs/MI5_TabletInstallationguide.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}
