<?php

class HomeController extends Controller
{
    private HomeService $homeService;
    private NavigationService $navigationService;

    public function __construct()
    {
        $this->homeService = new HomeService();
        $this->navigationService = new NavigationService();
    }
    public function index()
    {
        $navItems = $this->navigationService->getHeaderItems('home');
        $posts = $this->homeService->getPosts();
        $materials = $this->homeService->getMaterials();

        $this->view('home', compact('navItems', 'posts', 'materials'));
    }
}