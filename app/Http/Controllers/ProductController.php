<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 1. Barcha mahsulotlarni ko'rsatish
    public function index()
    {
        return "Barcha mahsulotlar";
    }

    // 2. Yangi mahsulot qo'shish
    public function create()
    {
        return "Yangi mahsulot qo'shish";
    }

    // 3. Ma'lumotni ko'rsatish
    public function show($id)
    {
        return "Mahsulot ID: {$id}";
    }

    // 4. Ma'lumotni tahrirlash
    public function edit($id)
    {
        return "Mahsulotni tahrirlash, ID: {$id}";
    }

    // 5. Ma'lumotni o‘chirish
    public function destroy($id)
    {
        return "Mahsulot o'chirildi, ID: {$id}";
    }

    // 7. Custom qidiruv
    public function search()
    {
        return "Qidiruvlar";
    }
}
