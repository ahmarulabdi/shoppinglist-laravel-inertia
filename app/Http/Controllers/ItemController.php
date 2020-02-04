<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return Inertia::render('Item/Index', [
            'items' => $items->transform(function ($item) {
                return [
                    'name'=> $item->name,
                    'description' => $item->description
                ];
            })
        ]);

    }
}
