<?php
class SignupController extends Controller
{
    private SignupService $signupService;
    private AuthService $authService;
    private CloudinaryService $cloudinaryService;
    public function __construct()
    {
        $this->signupService = new SignupService();
        $this->authService = new AuthService();
        $this->cloudinaryService = new CloudinaryService();
    }
    public function signupForm()
    {
        $name = $_POST['name'] ?? '';
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';

        $bio = $_POST['bio'] ?? '';
        if (empty($name) or empty($username) or empty($email) or empty($_POST['password'])) {
            return;
        }
        var_dump($_FILES);
        $allowed = ['image/jpeg', 'image/png', 'image/webp'];
        if (!in_array($_FILES['image']['type'], $allowed)) {
            return;
        }
        $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $image_url = $this->cloudinaryService->upload($_FILES['image']['tmp_name']);
        $result = $this->authService->signup(
            $name,
            $username,
            $email,
            $password_hash,
            $bio,
            $image_url
        );

        var_dump($result);
        die();
    }

    public function signup()
    {
        $navItems = $this->signupService->getHeaderItems();
        $this->view('signup', compact('navItems'));
    }
}