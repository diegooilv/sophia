<?php
class Philosophers extends Controller
{
    private NavigationService $navigationService;
    private PhilosophersService $philosophersService;

    public function __construct()
    {
        $this->navigationService = new NavigationService();
        $this->philosophersService = new PhilosophersService();
    }

    public function philosophers()
    {
        $navItems = $this->navigationService->getHeaderItems('home');
        $this->view('philosophers', compact('navItems'));
    }

    public function philosophersProfile($name)
    {
        $navItems = $this->navigationService->getHeaderItems('home');
        $philosopher = $this->philosophersService->getPhilosopher($name);
        $this->view('philosopher-profile', compact('navItems', 'philosopher'));
    }
}