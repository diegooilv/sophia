<?php

class HomeController extends Controller
{
    private HomeService $homeService;

    public function __construct()
    {
        $this->homeService = new HomeService();
    }
    public function index()
    {
        $navItems = $this->homeService->getHeaderItems();
        $posts = $this->homeService->getPosts();
        $materials = $this->homeService->getMaterials();

        $this->view('home', compact('navItems', 'posts', 'materials'));
    }
}