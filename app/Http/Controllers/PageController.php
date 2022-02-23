<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        echo "Selamat Datang";
    }

    public function about() {
        echo "2041720109_Nisrina Hasyimiyyah";
    }

    public function articles($id) {
        echo "Halaman artikel dengan id ".$id;
    }
}
