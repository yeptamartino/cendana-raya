<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

        Auth::routes();
        
        Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('user.home');
        Route::get('about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('user.about-us');
        Route::get('capability', [App\Http\Controllers\HomeController::class, 'capability'])->name('user.capability');
        Route::get('inventory', [App\Http\Controllers\HomeController::class, 'inventory'])->name('user.inventory');
        Route::get('track-order', [App\Http\Controllers\HomeController::class, 'trackOrder'])->name('user.track-order');
        Route::get('contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('user.contact-us');

Route::prefix('admin')->group(function () { 


        Route::get('about-us', [App\Http\Controllers\Admin\AboutUsController::class, 'aboutUs'])->name('admin.about-us');
        Route::get('capability', [App\Http\Controllers\Admin\CapabilityController::class, 'capability'])->name('admin.capability');
        Route::get('inventory', [App\Http\Controllers\Admin\InventoryController::class, 'inventory'])->name('admin.inventory');
        Route::get('track-order', [App\Http\Controllers\Admin\TrackOrderController::class, 'trackOrder'])->name('admin.track-order');
        Route::get('contact-us', [App\Http\Controllers\Admin\ContactUsController::class, 'contactUs'])->name('admin.contact-us');


        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard')->middleware('auth');
        // Route::get('/',[HomeController::class,'beranda'])->name('beranda');
        Route::get('/news',[HomeController::class,'artikel'])->name('news');
        Route::get('/news/detail',[HomeController::class,'detailArtikel'])->name('news.detail');
        
        Route::resource('admin', App\Http\Controllers\Admin\AdminController::class);
        Route::resource('banner', App\Http\Controllers\Admin\BannerController::class);
        Route::resource('category', App\Http\Controllers\Admin\ProductCategoryController::class);
        Route::resource('product', App\Http\Controllers\Admin\ProductController::class);
        Route::resource('about-us', App\Http\Controllers\Admin\ArticleController::class);
        Route::resource('pengumuman', App\Http\Controllers\Admin\AnnouncementController::class);
        Route::resource('video', App\Http\Controllers\Admin\VideoGalleryController::class);
        Route::resource('photo', App\Http\Controllers\Admin\PhotoGalleryController::class);
        Route::resource('calon-peserta', App\Http\Controllers\Admin\CandidateController::class);
        Route::resource('boking', App\Http\Controllers\Admin\BookingDayController::class);
        Route::resource('profile', App\Http\Controllers\Admin\ProfileController::class);
        Route::resource('registrasi-peserta', App\Http\Controllers\Admin\RegisterController::class);
     
        
        Route::put('banner/draft/{id}', [App\Http\Controllers\Admin\BannerController::class,'draft'])->name('banner.draft');
        Route::put('banner/publish/{id}', [App\Http\Controllers\Admin\BannerController::class,'publish'])->name('banner.publish');
        
        Route::put('blog/draft/{id}', [App\Http\Controllers\Admin\ArticleController::class,'draft'])->name('blog.draft');
        Route::put('blog/publish/{id}', [App\Http\Controllers\Admin\ArticleController::class,'publish'])->name('blog.publish'); 
        
        Route::put('pengumuman/draft/{id}', [App\Http\Controllers\Admin\AnnouncementController::class,'draft'])->name('pengumuman.draft');
        Route::put('pengumuman/publish/{id}', [App\Http\Controllers\Admin\AnnouncementController::class,'publish'])->name('pengumuman.publish');
        
        Route::get('pengaturan', [App\Http\Controllers\Admin\SettingController::class,'edit'])->name('pengaturan.edit');
        Route::put('pengaturan.update', [App\Http\Controllers\Admin\SettingController::class,'update'])->name('pengaturan.update');
        
        Route::get('profiles', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profile');

        Route::put('calon-peserta/banned/{id}', [App\Http\Controllers\Admin\CandidateController::class,'banned'])->name('calon.peserta.banned');
        Route::put('calon-peserta/approved/{id}', [App\Http\Controllers\Admin\CandidateController::class,'approved'])->name('calon.peserta.approved');
        Route::put('verify-multiple', [App\Http\Controllers\Admin\CandidateController::class,'verifyMultiple'])->name('calon.peserta.verifyMultiple');
 
        // Route::prefix('admin')->group(function(){
        // });

});