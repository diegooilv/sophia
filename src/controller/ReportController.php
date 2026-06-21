<?php
class ReportController extends Controller
{
    private ReportService $reportService;
    private NavigationService $navigationService;

    public function __construct()
    {
        $this->reportService = new ReportService();
        $this->navigationService = new NavigationService();
    }

    // $material, $author
    public function material($id)
    {
        $navItems = $this->navigationService->getHeaderItems('report');
        $type = 'material';
        $material = $this->reportService->getMaterial($id);
        $author = $this->reportService->getAuthor($material->getAuthorId());

        $this->view('report', compact('type', 'material', 'author', 'navItems'));
    }


    // $post, $author
    public function post($id)
    {
        $navItems = $this->navigationService->getHeaderItems('report');
        $type = 'post';
        $post = $this->reportService->getPost($id);
        $author = $this->reportService->getAuthor($id);
        $this->view('report', compact('type', 'post', 'author', 'navItems'));
    }
}