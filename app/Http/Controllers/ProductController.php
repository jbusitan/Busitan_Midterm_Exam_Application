<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'price' => 899,
                'description' => 'A guide to building good habits.'
            ],
            [
                'title' => 'The Alchemist',
                'author' => 'Paulo Coelho',
                'price' => 750,
                'description' => 'A novel about following your dreams.'
            ],
            [
                'title' => 'Rich Dad Poor Dad',
                'author' => 'Robert Kiyosaki',
                'price' => 650,
                'description' => 'Lessons about financial education.'
            ]
        ];

        return view('products', compact('products'));
    }
}