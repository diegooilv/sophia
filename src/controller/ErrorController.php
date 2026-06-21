<?php
class ErrorController extends Controller
{

    private ErrorService $errorService;
    private NavigationService $navigationService;


    public function __construct()
    {
        $this->errorService = new ErrorService();
        $this->navigationService = new NavigationService();

    }
    public function notFound()
    {
        $navItems = $this->navigationService->getHeaderItems('error');

        $this->view('404', compact('navItems'));
    }
}