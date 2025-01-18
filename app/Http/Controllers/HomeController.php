<?php
namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Menu;
use App\Models\News;
use App\Models\Komentar;
use App\Models\Lokasi;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        $menus = Menu::all();
        $news = News::all();
        $komentars = Komentar::all();
        $lokasi = Lokasi::all();

        return view('index', compact('slides', 'menus','news','komentars','lokasi'));
    }
}

?>
