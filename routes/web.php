<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\TestimonialsController;
use App\Http\Controllers\Frontend\AboutController as FrontendAboutController;
use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\PortfolioController as FrontendPortfolioController;
use App\Http\Controllers\Frontend\ServicesController as FrontendServicesController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [AdminController::class, 'Dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::get('/register', [RegisteredUserController::class, 'store']);

    // Admin All Route 
    Route::controller(AdminController::class)->group(function () {
        //Change Profile Page
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');

        //Update Admin Password Page
        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
    });


    Route::prefix('admin')->group(function () {

        // Admin Seetings 
        Route::get('settings/edit', [SettingsController::class, 'SettingsEdit'])->name('settings.edit');
        Route::post('settings/store', [SettingsController::class, 'SettingsStore'])->name('settings.store');


        // Admin About 
        Route::get('/edit/about', [AboutController::class, 'EditAbout'])->name('edit.about');
        Route::post('/update/about', [AboutController::class, 'UpdateAbout'])->name('update.about');

        // Admin About 
        Route::get('/edit/promotion/text', [AboutController::class, 'EditPromotionText'])->name('edit.promotion.text');
        Route::post('/update/promotion/text', [AboutController::class, 'UpdatePromotionText'])->name('update.promotion.text');

        // Admin Services 
        Route::get('all/services', [ServicesController::class, 'AllService'])->name('all.service');
        Route::get('add/service', [ServicesController::class, 'AddService'])->name('add.service');
        Route::post('store/service', [ServicesController::class, 'StoreService'])->name('store.service');
        Route::get('edit/service/{id}', [ServicesController::class, 'EditService'])->name('edit.service');
        Route::post('update/service', [ServicesController::class, 'UpdateService'])->name('update.service');
        Route::get('delete/service/{id}', [ServicesController::class, 'DeleteService'])->name('delete.service');
        Route::get('service/inactive/{id}', [ServicesController::class, 'ServiceInactive'])->name('service.inactive');
        Route::get('service/active/{id}', [ServicesController::class, 'ServiceActive'])->name('service.active');

        
        // Admin Services 
        Route::get('all/portfolios', [PortfolioController::class, 'AllPortfolios'])->name('all.portfolios');
        Route::get('add/portfolio', [PortfolioController::class, 'AddPortfolio'])->name('add.portfolio');
        Route::post('store/portfolio', [PortfolioController::class, 'StorePortfolio'])->name('store.portfolio');
        Route::get('edit/portfolio/{id}', [PortfolioController::class, 'EditPortfolio'])->name('edit.portfolio');
        Route::post('update/portfolio', [PortfolioController::class, 'UpdatePortfolio'])->name('update.portfolio');
        Route::get('delete/portfolio/{id}', [PortfolioController::class, 'DeletePortfolio'])->name('delete.portfolio');
        Route::get('portfolio/inactive/{id}', [PortfolioController::class, 'PortfolioInactive'])->name('portfolio.inactive');
        Route::get('portfolio/active/{id}', [PortfolioController::class, 'PortfolioActive'])->name('portfolio.active');

        // Admin blog 
        Route::get('all/blogs', [BlogController::class, 'AllBlogs'])->name('all.blogs');
        Route::get('add/blog', [BlogController::class, 'AddBlog'])->name('add.blog');
        Route::post('store/blog', [BlogController::class, 'StoreBlog'])->name('store.blog');
        Route::get('edit/blog/{id}', [BlogController::class, 'EditBlog'])->name('edit.blog');
        Route::post('update/blog', [BlogController::class, 'UpdateBlog'])->name('update.blog');
        Route::get('delete/blog/{id}', [BlogController::class, 'DeleteBlog'])->name('delete.blog');
        Route::get('blog/inactive/{id}', [BlogController::class, 'BlogInactive'])->name('blog.inactive');
        Route::get('blog/active/{id}', [BlogController::class, 'BlogActive'])->name('blog.active');


        // Admin Testimonials 
        Route::get('all/testimonials', [TestimonialsController::class, 'AllTestimonials'])->name('all.testimonials');
        Route::get('add/testimonial', [TestimonialsController::class, 'AddTestimonial'])->name('add.testimonial');
        Route::post('store/testimonial', [TestimonialsController::class, 'StoreTestimonial'])->name('store.testimonial');
        Route::get('edit/testimonial/{id}', [TestimonialsController::class, 'EditTestimonial'])->name('edit.testimonial');
        Route::post('update/testimonial', [TestimonialsController::class, 'UpdateTestimonial'])->name('update.testimonial');
        Route::get('delete/testimonial/{id}', [TestimonialsController::class, 'DeleteTestimonial'])->name('delete.testimonial');
        Route::get('testimonial/inactive/{id}', [TestimonialsController::class, 'TestimonialInactive'])->name('testimonial.inactive');
        Route::get('testimonial/active/{id}', [TestimonialsController::class, 'TestimonialActive'])->name('testimonial.active');

        // Admin Slider 
        Route::get('all/slider', [SliderController::class, 'AllSlider'])->name('all.slider');
        Route::get('add/slider', [SliderController::class, 'AddSlider'])->name('add.slider');
        Route::post('store/slider', [SliderController::class, 'StoreSlider'])->name('store.slider');
        Route::get('edit/slider/{id}', [SliderController::class, 'EditSlider'])->name('edit.slider');
        Route::post('update/slider', [SliderController::class, 'UpdateSlider'])->name('update.slider');
        Route::get('delete/slider/{id}', [SliderController::class, 'DeleteSlider'])->name('delete.slider');
        Route::get('slider/inactive/{id}', [SliderController::class, 'SliderInactive'])->name('slider.inactive');
        Route::get('slider/active/{id}', [SliderController::class, 'SliderActive'])->name('slider.active');

         // Admin Social Media 
         Route::get('all/social/media', [SocialMediaController::class, 'AllSocialMedia'])->name('all.social.media');
         Route::get('add/social/media', [SocialMediaController::class, 'AddSocialMedia'])->name('add.social.media');
         Route::post('store/social/media', [SocialMediaController::class, 'StoreSocialMedia'])->name('store.social.media');
         Route::get('edit/social/media/{id}', [SocialMediaController::class, 'EditSocialMedia'])->name('edit.social.media');
         Route::post('update/social/media', [SocialMediaController::class, 'UpdateSocialMedia'])->name('update.social.media');
         Route::get('delete/social/media/{id}', [SocialMediaController::class, 'DeleteSocialMedia'])->name('delete.social.media');
         Route::get('social/media/inactive/{id}', [SocialMediaController::class, 'SocialMediaInactive'])->name('social.media.inactive');
         Route::get('social/media/active/{id}', [SocialMediaController::class, 'SocialMediaActive'])->name('social.media.active');


        // Admin Messages 
        Route::get('all/message', [MessagesController::class, 'AllMessage'])->name('all.message');
        Route::get('detail/message/{id}', [MessagesController::class, 'DetailMessage'])->name('detail.message');
        Route::get('delete/message/{id}', [MessagesController::class, 'DeleteMessage'])->name('delete.message');

        // Admin Brand Inquiry 
        Route::get('all/brand/inquiry', [MessagesController::class, 'AllBrandInquiry'])->name('all.brand.inquiry');
        Route::get('detail/brand/inquiry/{id}', [MessagesController::class, 'DetailBrandInquiry'])->name('detail.brand.inquiry');
        Route::get('delete/brand/inquiry/{id}', [MessagesController::class, 'DeleteBrandInquiry'])->name('delete.brand.inquiry');
    });
});


Route::get('/', [IndexController::class, 'Index'])->name('/');

Route::get('/hakkimizda', [FrontendAboutController::class, 'HomeAbout'])->name('home.about');


Route::get('/hizmetler', [FrontendServicesController::class, 'HomeServices'])->name('home.services');
Route::get('/hizmet/{slug}', [FrontendServicesController::class, 'ServiceDetail'])->name('service.details');


Route::get('/iletisim', [ContactController::class, 'HomeContact'])->name('home.contact');
Route::post('/store/message', [ContactController::class, 'StoreMesseage'])->name('store.message');

Route::get('/referanslar', [FrontendPortfolioController::class, 'HomePortfolios'])->name('home.portfolios');
Route::get('/referans/{slug}', [FrontendPortfolioController::class, 'PortfolioDetail'])->name('portfolio.details');

Route::get('/haberlerimiz', [FrontendBlogController::class, 'HomeBlogs'])->name('home.blog');
Route::get('/haber/{slug}', [FrontendBlogController::class, 'BlogDetail'])->name('blog.details');
