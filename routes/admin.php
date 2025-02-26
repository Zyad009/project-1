<?php

// use App\Http\Controllers\Admin\CustomAuth\LoginController;
use Illuminate\Support\Facades\Route;


Route::prefix('/admin')->name("admin.")->group(function () {
  // Route::middleware("admin")->group(function () {
    //========================================= ADMIN HOME PAGE 
    Route::view("/home", "admin.pages.home")->name("index");
    //========================================= SETTING PAGE 
    Route::view("/settings", "admin.pages.settings.index" )->name("settings");
    //========================================= SKILLS PAGE 
    Route::view("/skills", "admin.pages.skills.index" )->name("skills");
    //========================================= SUBSCRIBERS PAGE 
    Route::view("/subscribers", "admin.pages.subscribers.index" )->name("subscribers");
    //========================================= COUNTERS PAGE 
    Route::view("/counters", "admin.pages.counters.index" )->name("counters");
    //========================================= SERVICES PAGE 
    Route::view("/services", "admin.pages.services.index" )->name("services");
    //========================================= SERVICES PAGE 
    Route::view("/messages", "admin.pages.messages.index" )->name("messages");
    //========================================= CATEGORIES PAGE 
    Route::view("/categories", "admin.pages.categories.index" )->name("categories");
    //========================================= PROJECTS PAGE 
    Route::view("/projects", "admin.pages.projects.index" )->name("projects");
  });
  Route::view("/login", "admin.pages.auth.login")->middleware("guest:admin")->name("login");
// });
