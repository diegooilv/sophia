<?php
class LoginController extends Controller
{
    private LoginService $loginService;
    private AuthService $authService;
    private NavigationService $navigationService;

    public function __construct()
    {
        $this->loginService = new LoginService();
        $this->authService = new AuthService();
        $this->navigationService = new NavigationService();

    }
    public function login()
    {
        $navItems = $this->navigationService->getHeaderItems('login');
        $this->view('login', compact('navItems'));
    }

    public function loginForm()
    {
        CsrfService::check();
        if (empty($_POST['email']) || empty($_POST['password'])) {
            return;
        }

        $email = strtolower(trim($_POST['email']));
        $password = $_POST['password'];

        if ($this->authService->login($email, $password)) {
            header('Location: /profile');
            exit;
        } else {
            header('Location: /login');
            exit;
        }

    }
}