<?php

use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;

Route::controller(ContactFormController::class)
     ->prefix('contact-forms')
     ->group(function () {
         Route::post('/', 'create');
         Route::get('roles', 'getRoles');
     });
