<?php

// Vendor
require_once __DIR__ . '/../vendor/autoload.php';

// Config
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/mail.php';

// Core
require_once __DIR__ . '/../core/Database.php';
require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../core/Controller.php';

// Model
require_once __DIR__ . '/../model/CategoryModel.php';
require_once __DIR__ . '/../model/PostModel.php';
require_once __DIR__ . '/../model/PreferenceModel.php';
require_once __DIR__ . '/../model/ResetTokenModel.php';
require_once __DIR__ . '/../model/SessionTokenModel.php';
require_once __DIR__ . '/../model/UserModel.php';
require_once __DIR__ . '/../model/MaterialModel.php';

// ModelView
require_once __DIR__ . '/../viewmodels/PostViewModel.php';
require_once __DIR__ . '/../viewmodels/MaterialViewModel.php';


// Controller
require_once __DIR__ . '/../controller/HomeController.php';
require_once __DIR__ . '/../controller/ErrorController.php';
require_once __DIR__ . '/../controller/ReportController.php';
require_once __DIR__ . '/../controller/SignupController.php';

// Services
require_once __DIR__ . '/../service/ErrorService.php';
require_once __DIR__ . '/../service/HomeService.php';
require_once __DIR__ . '/../service/ReportService.php';
require_once __DIR__ . '/../service/MailService.php';
require_once __DIR__ . '/../service/AuthService.php';
require_once __DIR__ . '/../service/SignupService.php';
require_once __DIR__ . '/../service/CloudinaryService.php';

// Layouts
require_once __DIR__ . '/../views/layouts/header.php';
require_once __DIR__ . '/../views/layouts/footer.php';
require_once __DIR__ . '/../views/layouts/post.php';
require_once __DIR__ . '/../views/layouts/material.php';