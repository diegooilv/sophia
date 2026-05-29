<?php

require __DIR__ . '/database.php';

// Core
require __DIR__ . '/../core/Database.php';
require __DIR__ . '/../core/Router.php';

// Model
require __DIR__ . '/../model/CategoryModel.php';
require __DIR__ . '/../model/MaterialModel.php';
require __DIR__ . '/../model/PostModel.php';
require __DIR__ . '/../model/PreferenceModel.php';
require __DIR__ . '/../model/ResetTokenModel.php';
require __DIR__ . '/../model/SessionTokenModel.php';
require __DIR__ . '/../model/UserModel.php';

// Controller
require __DIR__ . '/../controller/PagesController.php';