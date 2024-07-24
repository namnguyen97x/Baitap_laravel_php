<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function translate(Request $request) {
        $dictionary = [
            'hello' => 'Xin chào',
            'world' => 'Thế giới',
            'goodbye' => 'Tạm biệt'
        ];
        $word = $request->input('word');
        $meaning = $dictionary[$word] ?? 'Từ không tìm thấy trong từ điển';
        return view('result', compact('word', 'meaning'));
    }
}