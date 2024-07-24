<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class DictionaryController extends Controller
{
    public function translate(Request $request) {
        $word = $request->input('word');
        
        // Sử dụng Google Translate API để dịch từ
        $tr = new GoogleTranslate('vi'); // 'vi' là mã ngôn ngữ cho tiếng Việt
        $meaning = $tr->translate($word);

        return view('result', compact('word', 'meaning'));
    }
}