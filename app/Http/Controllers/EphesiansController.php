<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EphesiansController extends Controller
{
    const BOOKS_NAME = 'Ephesians';
    const BIBLE_VERSION = 'King James Version';

    public function readAll()
    {
        return view('ephesians.all', [
            'book_name' => static::BOOKS_NAME,
            'bible_version' => static::BIBLE_VERSION,
        ]);
    }

    public function readByChapter($chapter_number)
    {
        return view('ephesians.chapter', [
            'book_name' => static::BOOKS_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'chapter_number' => $chapter_number,
        ]);
    }
}
