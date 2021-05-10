<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;

class GuestController extends Controller
{
    /**
     * First function when the page is opened
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $view = [
            'title' => 'Home',
        ];

        return view('home', $view);
    }

    /**
     * This function made for page about us
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $view = [
            'title' => 'About Us',
        ];

        return view('about', $view);
    }

    /**
     * This function made for page about us
     *
     * @return \Illuminate\Http\Response
     */
    public function jobs()
    {
        $view = [
            'title' => 'Find Jobs',
            'vacancies' => Vacancy::orderBy('created_at', 'desc')->get()
        ];

        return view('jobs', $view);
    }

    /**
     * This function made for page about us
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $view = [
            'title' => 'Contact Us',
        ];

        return view('contact', $view);
    }
}
