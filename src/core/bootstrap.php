<?php

// Config
require_once __DIR__ . '/../config/database.php';

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
require_once __DIR__ . '/../controller/PagesController.php';
require_once __DIR__ . '/../controller/ErrorController.php';

// Layouts
require_once __DIR__ . '/../views/layouts/header.php';
require_once __DIR__ . '/../views/layouts/footer.php';
require_once __DIR__ . '/../views/layouts/post.php';
require_once __DIR__ . '/../views/layouts/material.php';