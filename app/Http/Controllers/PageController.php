<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home(): View
    {
        return view('pages.home');
    }

    /**
     * Display the about us page.
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * Display the products and capabilities page.
     */
    public function products(): View
    {
        return view('pages.products');
    }

    /**
     * Display the services and sourcing process page.
     */
    public function services(): View
    {
        return view('pages.services');
    }

    /**
     * Display the quality assurance and compliance page.
     */
    public function qualityCompliance(): View
    {
        return view('pages.quality-compliance');
    }

    /**
     * Display the global buyers and business policy page.
     */
    public function buyers(): View
    {
        return view('pages.buyers');
    }

    /**
     * Display the contact and RFQ page.
     */
    public function contact(): View
    {
        return view('pages.contact');
    }

    /**
     * Display the interactive company profile presentation viewer.
     */
    public function companyProfile(): View
    {
        return view('pages.company-profile');
    }
}
