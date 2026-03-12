<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\IUserRepository;

class UserController extends Controller
{

    public function __construct(protected IUserRepository $userRepository)
    {}
    public function index()
    {
        return view('welcome');
    }   
}   