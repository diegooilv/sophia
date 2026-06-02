<?php
class ErrorController extends Controller
{

    private ErrorService $errorService;

    public function __construct()
    {
        $this->errorService = new ErrorService();
    }
    public function notFound()
    {
        $navItems = $this->errorService->getHeaderItems();

        $this->view('404', compact('navItems'));
    }
}