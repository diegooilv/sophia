<?php
class UserPageController extends Controller
{
    private UserService $userService;
    private NavigationService $navigationService;


    public function __construct()
    {
        $this->userService = new UserService();
        $this->navigationService = new NavigationService();
    }
    public function index($username)
    {
        $user = $this->userService->getUserByUsername($username);
        $navItems = $this->navigationService->getHeaderItems('home');

        $this->view('user', compact('user', 'navItems'));
    }
}