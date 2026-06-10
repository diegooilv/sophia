<?php
class SignupController extends Controller
{
    private SignupService $signupService;
    private AuthService $authService;
    private CloudinaryService $cloudinaryService;
    private RecaptchaService $recaptchaService;
    public function __construct()
    {
        $this->signupService = new SignupService();
        $this->authService = new AuthService();
        $this->cloudinaryService = new CloudinaryService();
        $this->recaptchaService = new RecaptchaService();
    }
    public function signupForm()
    {
        $name = $_POST['name'] ?? '';
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $bio = $_POST['bio'] ?? '';
        $token = $_POST['g-recaptcha-response'] ?? '';

        if (empty($name) || empty($username) || empty($email) || empty($_POST['password'])) {
            return;
        }

        if (!$this->recaptchaService->verify($token)) {
            header('Location: /signup');
            exit;
        }

        $mime = mime_content_type($_FILES['image']['tmp_name']);
        $allowed = ['image/jpeg', 'image/png', 'image/webp'];

        if (!in_array($mime, $allowed)) {
            return;
        }

        $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $image_url = $this->cloudinaryService->upload($_FILES['image']['tmp_name']);

        $this->authService->signup(
            $name,
            $username,
            $email,
            $password_hash,
            $bio,
            $image_url
        );
    }

    public function signup()
    {
        $navItems = $this->signupService->getHeaderItems();
        $this->view('signup', compact('navItems'));
    }
}