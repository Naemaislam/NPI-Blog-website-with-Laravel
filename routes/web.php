<?php

// use App\Http\Controllers\AboutController;

use App\Http\Controllers\AboutController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthorRegisterController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\FrontCategoryBlogController;
use App\Http\Controllers\FrontendBlogController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FrontShopController;
use App\Http\Controllers\FrontTagBlogsController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SearchBlogsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SocialiteProviderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



// frontendcontroller
Route::get('/', [FrontendController::class,'index'])->name('front.home');
// Route::get('/', [FrontendController::class,'blog'])->name('front.blog');
Route::get('/root/category/blogs/{id}', [FrontCategoryBlogController::class,'index'])->name('root.category.blogs');
Route::get('/root/tag/blogs/{id}', [FrontTagBlogsController::class,'index'])->name('root.tag.blogs');
Route::get('/root/category/single/blogs/{id}', [FrontCategoryBlogController::class,'single_blog'])->name('root.single.category.blogs');
// Route::get('/root/tag/single/blogs/{id}', [FrontTagBlogsController::class,'single_blog'])->name('root.single.tag.blogs');


//FrontendBlogController
Route::get('/root/blogs', [FrontendBlogController::class,'index'])->name('root.blogs');


// SearchBlogsController
Route::get('/root/search/blogs', [SearchBlogsController::class,'index'])->name('root.search.blogs');


Auth::routes(['register'=>false]);


// HomeController
Route::get('/home', [App\Http\Controllers\HomeController::class, 'nn'])->middleware(['auth', 'verified'])->name('home');


// Approve status for author
Route::get('/home.author.accept/{id}', [App\Http\Controllers\HomeController::class, 'accept'])->name('home.accept.author');
Route::get('/home.author.reject/{id}', [App\Http\Controllers\HomeController::class, 'reject'])->name('home.reject.author');
Route::get('/home.author.block/{id}', [App\Http\Controllers\HomeController::class, 'block'])->name('home.block.author');


// profile controller
Route::get('/profile',[ProfileController::class,'index'])->name('profile');
Route::post('/profile/name/update/{id}',[ProfileController::class,'name_update'])->name('profile.name');
Route::post('/profile/image/update/{id}',[ProfileController::class,'image_update'])->name('profile.image');
Route::post('/profile/password/update/{id}',[ProfileController::class,'password_update'])->name('profile.password');


// banner controller
Route::get('/banner',[BannerController::class,'index'])->name('banner');
Route::get('/banner/create/view',[BannerController::class,'create_view'])->name('banner.create.view');
Route::post('/banner/create',[BannerController::class,'create'])->name('banner.create');
Route::get('/banner/edit/view/{id}',[BannerController::class,'edit_show'])->name('banner.edit.show');
Route::post('/banner/edit/{id}',[BannerController::class,'edit'])->name('banner.edit');
Route::get('/banner/feature/{id}',[BannerController::class,'feature'])->name('banner.feature.button');


// category controller
Route::get('/category',[CategoryController::class,'index'])->middleware('rolecheck')->name('category');
Route::post('/category/insert',[CategoryController::class,'insert'])->middleware('rolecheck')->name('category.insert');
Route::post('/category/delete/{id}',[CategoryController::class,'delete'])->middleware('rolecheck')->name('category.delete');
Route::get('/category/edit/view/{slug}',[CategoryController::class,'edit_view'])->middleware('rolecheck')->name('category.edit.view');
Route::post('/category/edit/{id}',[CategoryController::class,'edit'])->middleware('rolecheck')->name('category.edit');
Route::post('/category/status/{id}',[CategoryController::class,'status'])->middleware('rolecheck')->name('category.status');


// tag controller
Route::get('/tag',[TagController::class,'index'])->name('tag');
Route::post('/tag/delete/{id}',[TagController::class,'delete'])->name('tag.delete');
Route::post('/tag/insert',[TagController::class,'insert'])->name('tag.insert');
Route::post('/tag/restore/{id}',[TagController::class,'restore'])->name('tag.restore');

// blog controller
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/blog/create/view',[BlogController::class,'create_view'])->name('blog.create.view');
Route::post('/blog/create',[BlogController::class,'create'])->name('blog.create');
Route::get('/blog/edit/view/{id}',[BlogController::class,'edit_show'])->name('blog.edit.show');
Route::post('/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
Route::get('/blog/feature/{id}',[BlogController::class,'feature'])->name('blog.feature.button');

// role controller
Route::get('/role',[RoleController::class,'index'])->middleware('rolecheck')->name('role.view');
Route::post('/role/modarator/assign',[RoleController::class,'role_assign'])->middleware('rolecheck')->name('role.assign');
Route::post('/role/assign',[RoleController::class,'role_all_assign'])->middleware('rolecheck')->name('role.all.assign');


// author registration
Route::get('/root/author/registration', [AuthorRegisterController::class,'registration'])->name('root.author.registration');
Route::post('/root/author/register', [AuthorRegisterController::class,'register'])->name('root.author.register');
Route::post('/root/author/login', [AuthorRegisterController::class,'login'])->name('author.login');
Route::get('/root/not/found', [AuthorRegisterController::class,'not_found'])->name('root.not.found');

// contact controller
Route::get('/contacts',[ContactController::class,'contact'])->name('frontend.contact');
Route::post('/contacts',[ContactController::class,'contact_post'])->name('frontend.contact.post');


// comment
Route::post('/root/blog/comment',[CommentController::class,'insert'])->name('root.comment.post');


// email verification
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// socialite
Route::get('/auth/{provider}/redirect',[SocialiteProviderController::class,'redirect']);
Route::get('/auth/{provider}/callback',[SocialiteProviderController::class,'callback']);


// about controller
Route::get('root/about',[AboutController::class,'index'])->name('root.about');


// photo controller
Route::get('root/photo',[PhotoController::class,'index'])->name('root.photo');
Route::get('/root/category/photo/{id}', [PhotoController::class,'index'])->name('root.category.photo');
// Route::get('/root/tag/single/blogs/{id}', [FrontTagBlogsController::class,'single_blog'])->name('root.single.tag.blogs');


// details controller
Route::get('root/details',[DetailsController::class,'index'])->name('root.details');


// shop controller
Route::get('/shop',[ShopController::class,'index'])->name('shop');
Route::get('/shop/create/view',[ShopController::class,'create_view'])->name('shop.create.view');
Route::post('/shop/create',[ShopController::class,'create'])->name('shop.create');
Route::get('/shop/edit/view/{id}',[ShopController::class,'edit_show'])->name('shop.edit.show');
Route::post('/shop/edit/{id}',[ShopController::class,'edit'])->name('shop.edit');
Route::get('/shop/feature/{id}',[ShopController::class,'feature'])->name('shop.feature.button');

// front shop controller
Route::get('root/shop',[FrontShopController::class,'index'])->name('root.shop');
Route::get('/root/product/single', [FrontShopController::class,'single_product'])->name('root.single.product.');
