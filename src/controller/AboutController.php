<?php
class AboutController extends Controller
{
    private NavigationService $navigationService;
    public function __construct()
    {
        $this->navigationService = new NavigationService();

    }
    public function index()
    {
        $navItems = $this->navigationService->getHeaderItems('about');

        $this->view('about', compact('navItems'));
    }
}