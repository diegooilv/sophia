<?php
class ReportController extends Controller
{
    private ReportService $reportService;

    public function __construct()
    {
        $this->reportService = new ReportService();
    }

    // $material, $author
    public function material($id)
    {
        $navItems = $this->reportService->getHeaderItems();
        $type = 'material';
        $material = $this->reportService->getMaterial($id);
        $author = $this->reportService->getAuthor($material->getAuthorId());

        $this->view('report', compact('type', 'material', 'author', 'navItems'));
    }


    // $post, $author
    public function post($id)
    {
        $navItems = $this->reportService->getHeaderItems();
        $type = 'post';
        $post = $this->reportService->getPost($id);
        $author = $this->reportService->getAuthor($id);
        $this->view('report', compact('type', 'post', 'author', 'navItems'));
    }
}