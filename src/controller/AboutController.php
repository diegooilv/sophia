<?php
class AboutController extends Controller
{
    public function index()
    {
        $navItems = [
            'Início' => '/',
        ];

        $this->view('about', compact('navItems'));
    }
}