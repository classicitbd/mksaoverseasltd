<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\ServicecategoryController;
use App\Http\Controllers\BusinesscategoryController;
use App\Http\Controllers\GallerycategoryController;
use App\Http\Controllers\ProductcategoryController;
use App\Http\Controllers\PartnercategoryController;
use App\Http\Controllers\PortfoliocategoryController;
use App\Http\Controllers\AboutcategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\AdditionalimageController;
use App\Http\Controllers\OtherunitController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectcategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AllprojectController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeammemberController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\FrequentsectionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustompageController;
use App\Http\Controllers\BoardofdirectorController;
use App\Http\Controllers\MissionvissionController;
use App\Http\Controllers\LogoprofileController;
use App\Http\Controllers\GallarypicController;
use App\Http\Controllers\OurteamController;
use App\Http\Controllers\ProjectlistController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\OurproductController;
use App\Http\Controllers\QualitytechController;
use App\Http\Controllers\OurmachineController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SingleproductController;
use App\Http\Controllers\AllserviceController;
use App\Http\Controllers\BusinessunitController;
use App\Http\Controllers\OurclientController;
use App\Http\Controllers\WhychooseusController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;








/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Frontend


Route::get('home', function(){
    return redirect('/');
});

Route::get('/', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');

Route::get('home', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');

////////////////////Contact/////////////////////////
Route::get('/contact',[ContactController::class,'index' ]);


////////////////////Custompage/////////////////////////
Route::get('/custompage',[CustompageController::class,'index' ]);


////////////////////Board-of-Director/////////////////////////
Route::get('/boardofdirectors',[BoardofdirectorController::class,'index' ]);

////////////////////Membership/////////////////////////
Route::get('/our-membership',[BoardofdirectorController::class,'membership' ]);

////////////////////Company/////////////////////////
Route::get('/our-company',[BoardofdirectorController::class,'company' ]);

////////////////////MIssion & Vission/////////////////////////
Route::get('/missionvission',[MissionvissionController::class,'index' ]);

////////////////////Events/////////////////////////
Route::get('/event',[FrontendController::class,'event' ]);

////////////////////Logo & Profile/////////////////////////
Route::get('/logoprofile',[LogoprofileController::class,'index' ]);


////////////////////Gallary-Pic/////////////////////////
Route::get('/gallary',[GallarypicController::class,'index' ]);


////////////////////Business-Unit/////////////////////////
Route::get('service_unit/{url}',[BusinessunitController::class,'service_unit' ]);


////////////////////Business-Unit/////////////////////////
Route::get('service_unit/{url}/{id}',[OtherunitController::class,'service_unit' ]);


////////////////////Our-Team/////////////////////////
Route::get('/our-team',[OurteamController::class,'index' ]);


////////////////////Project-List/////////////////////////
Route::get('/projectlist',[ProjectlistController::class,'index' ]);


////////////////////Clients/////////////////////////
Route::get('/clients',[ClientController::class,'index' ]);


////////////////////Sitemap/////////////////////////
Route::get('/sitemap',[SitemapController::class,'index' ]);


////////////////////Ecommerce/////////////////////////
Route::get('/ecommerce',[EcommerceController::class,'index' ]);


////////////////////Our-Product/////////////////////////
Route::get('/our-products',[OurproductController::class,'index' ]);


////////////////////Our-Machine/////////////////////////
Route::get('/our-machinaries',[OurmachineController::class,'index' ]);


////////////////////Quality-and-Technology/////////////////////////
Route::get('/quality&technology',[QualitytechController::class,'index' ]);


////////////////////Blog/////////////////////////
Route::get('/blog',[BlogController::class,'index' ]);


////////////////////Single-product/////////////////////////
Route::get('/singleproduct',[SingleproductController::class,'index' ]);


////////////////////All-Service/////////////////////////
Route::get('/allservice',[AllserviceController::class,'index' ]);


////////////////////Whychooseus/////////////////////////
Route::get('/whychooseus',[WhychooseusController::class,'index' ]);


////////////////////About/////////////////////////
Route::resource('about', AboutController::class);

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


////////////////////Message/////////////////////////
Route::resource('message', MessageController::class);
Route::get('show-message/{id}',[MessageController::class,'show' ]);
Route::delete('delete-message',[MessageController::class,'destroy' ]);
Route::post('message_store',[MessageController::class,'store' ])->name('message_store');
//Backend or Admin

Route::get('admin', function(){
    return redirect('login');
});

Auth::routes();

Route::group(['middleware' =>  'auth'], function() {
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


////////////////////Menu/////////////////////////////////
Route::resource('menu', MenuController::class);
Route::get('edit-menu/{id}',[MenuController::class,'edit' ]);
Route::put('menu-update',[MenuController::class,'update' ]);
Route::delete('delete-menu',[MenuController::class,'destroy' ]);


////////////////////Submenu/////////////////////////
Route::resource('submenu', SubmenuController::class);
Route::get('edit-submenu/{id}',[SubmenuController::class,'edit' ]);
Route::put('submenu-update',[SubmenuController::class,'update' ]);
Route::delete('delete-submenu',[SubmenuController::class,'destroy' ]);


////////////////////About-Us/////////////////////////////////
Route::resource('aboutus', App\Http\Controllers\AboutusController::class);


////////////////////Company/////////////////////////////////
Route::resource('company', App\Http\Controllers\CompanyController::class);


////////////////////Quality-Technology/////////////////////////////////
Route::resource('quality-technology', App\Http\Controllers\QualityController::class);

////////////////////All-Events/////////////////////////////////
Route::resource('events', App\Http\Controllers\EventController::class);


////////////////////About-categories/////////////////////////
Route::resource('aboutcategories', AboutcategoryController::class);
Route::get('edit-aboutcategories/{id}',[AboutcategoryController::class,'edit' ]);
Route::put('aboutcategories-update',[AboutcategoryController::class,'update' ]);
Route::delete('delete-aboutcategories',[AboutcategoryController::class,'destroy' ]);


////////////////////Director/////////////////////////
Route::resource('director', DirectorController::class);
Route::get('edit-director/{id}',[DirectorController::class,'edit' ]);
Route::put('director-update',[DirectorController::class,'update' ]);
Route::delete('delete-director',[DirectorController::class,'destroy' ]);


////////////////////Mission/////////////////////////
Route::resource('mission', MissionController::class);
Route::get('edit-mission/{id}',[MissionController::class,'edit' ]);
Route::put('mission-update',[MissionController::class,'update' ]);
Route::delete('delete-mission',[MissionController::class,'destroy' ]);


////////////////////Slider/////////////////////////
Route::get('slider-list',[SliderController::class, 'index'])->name('slider-list');
Route::get('/slider-create', [SliderController::class, 'create'])->name('slider-create');
Route::post('/slider-store', [SliderController::class, 'store'])->name('slider.store');
Route::get('slider.edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
Route::put('/slider.update/{id}', [SliderController::class, 'update'])->name('slider.update');
Route::get('/slider-delete/{id}', [SliderController::class, 'destroy'])->name('slider.delete');


////////////////////Profile/////////////////////////
Route::resource('profile', ProfileController::class);
Route::get('edit-profile/{id}',[ProfileController::class,'edit' ]);
Route::put('profile-update',[ProfileController::class,'update' ]);
Route::delete('delete-profile',[ProfileController::class,'destroy' ]);



////////////////////Team/////////////////////////
Route::resource('team', TeamController::class);
Route::get('edit-team/{id}',[TeamController::class,'edit' ]);
Route::put('team-update',[TeamController::class,'update' ]);
Route::delete('delete-team',[TeamController::class,'destroy' ]);


////////////////////Other Team-Member/////////////////////////
Route::resource('teammember', TeammemberController::class);
Route::get('edit-teammember/{id}',[TeammemberController::class,'edit' ]);
Route::put('teammember-update',[TeammemberController::class,'update' ]);
Route::delete('delete-teammember',[TeammemberController::class,'destroy' ]);




////////////////////Contact-Us/////////////////////////
Route::resource('contact-us', ContactusController::class);


// Setting All Route
Route::get('/settings', [SettingController::class, 'index'])->name('settings');
Route::post('/settings/update', [SettingController::class, 'update'])->name('update.settings');


////////////////////Business-categories/////////////////////////
Route::resource('businesscategories', BusinesscategoryController::class);
Route::get('edit-businesscategories/{id}',[BusinesscategoryController::class,'edit' ]);
Route::put('businesscategories-update',[BusinesscategoryController::class,'update' ]);
Route::delete('delete-businesscategories',[BusinesscategoryController::class,'destroy' ]);



////////////////////Business/////////////////////////
Route::resource('business', BusinessController::class);
Route::get('edit-business/{id}',[BusinessController::class,'edit' ]);
Route::put('business-update',[BusinessController::class,'update' ]);
Route::delete('delete-business',[BusinessController::class,'destroy' ]);



////////////////////Additional-Image/////////////////////////
Route::resource('additionalimage', AdditionalimageController::class);
Route::get('edit-additionalimage/{id}',[AdditionalimageController::class,'edit' ]);
Route::put('additionalimage-update',[AdditionalimageController::class,'update' ]);
Route::delete('delete-additionalimage',[AdditionalimageController::class,'destroy' ]);



////////////////////Service-categories/////////////////////////
Route::resource('servicecategories', ServicecategoryController::class);
Route::get('edit-servicecategories/{id}',[ServicecategoryController::class,'edit' ]);
Route::put('servicecategories-update',[ServicecategoryController::class,'update' ]);
Route::delete('delete-servicecategories',[ServicecategoryController::class,'destroy' ]);




////////////////////Service/////////////////////////
Route::resource('service', ServiceController::class);
Route::get('edit-service/{id}',[ServiceController::class,'edit' ]);
Route::put('service-update',[ServiceController::class,'update' ]);
Route::delete('delete-service',[ServiceController::class,'destroy' ]);




////////////////////Project-categories/////////////////////////
Route::resource('projectcategories', ProjectcategoryController::class);
Route::get('edit-projectcategories/{id}',[ProjectcategoryController::class,'edit' ]);
Route::put('projectcategories-update',[ProjectcategoryController::class,'update' ]);
Route::delete('delete-projectcategories',[ProjectcategoryController::class,'destroy' ]);



////////////////////Project/////////////////////////
Route::resource('project', ProjectController::class);
Route::get('edit-project/{id}',[ProjectController::class,'edit' ]);
Route::put('project-update',[ProjectController::class,'update' ]);
Route::delete('delete-project',[ProjectController::class,'destroy' ]);


////////////////////All-Project/////////////////////////
Route::resource('allproject', AllprojectController::class);
Route::get('edit-allproject/{id}',[AllprojectController::class,'edit' ]);
Route::put('allproject-update',[AllprojectController::class,'update' ]);
Route::delete('delete-allproject',[AllprojectController::class,'destroy' ]);


////////////////////Partner-categories/////////////////////////
Route::resource('partnercategories', PartnercategoryController::class);
Route::get('edit-partnercategories/{id}',[PartnercategoryController::class,'edit' ]);
Route::put('partnercategories-update',[PartnercategoryController::class,'update' ]);
Route::delete('delete-partnercategories',[PartnercategoryController::class,'destroy' ]);

////////////////////Partner/////////////////////////
Route::resource('partner', PartnerController::class);
Route::get('edit-partner/{id}',[PartnerController::class,'edit' ]);
Route::put('partner-update',[PartnerController::class,'update' ]);
Route::delete('delete-partner',[PartnerController::class,'destroy' ]);

////////////////////Our-Clients/////////////////////////
Route::resource('ourclient', OurclientController::class);
Route::get('edit-ourclient/{id}',[OurclientController::class,'edit' ]);
Route::put('ourclient-update',[OurclientController::class,'update' ]);
Route::delete('delete-ourclient',[OurclientController::class,'destroy' ]);


////////////////////Membership/////////////////////////
Route::resource('/all-membership', MembershipController::class);
Route::get('edit-membership/{id}',[MembershipController::class,'edit' ]);
Route::put('membership-update',[MembershipController::class,'update' ]);
Route::delete('delete-membership',[MembershipController::class,'destroy' ]);


////////////////////Frequently Asked Question/////////////////////////
Route::resource('frequentsection', FrequentsectionController::class);
Route::get('edit-frequentsection/{id}',[FrequentsectionController::class,'edit' ]);
Route::put('frequentsection-update',[FrequentsectionController::class,'update' ]);
Route::delete('delete-frequentsection',[FrequentsectionController::class,'destroy' ]);

////////////////////Skill/////////////////////////
Route::resource('skill', SkillController::class);
Route::get('edit-skill/{id}',[SkillController::class,'edit' ]);
Route::put('skill-update',[SkillController::class,'update' ]);
Route::delete('delete-skill',[SkillController::class,'destroy' ]);



////////////////////Count/////////////////////////
Route::resource('count', CountController::class);
Route::get('edit-count/{id}',[CountController::class,'edit' ]);
Route::put('count-update',[CountController::class,'update' ]);
Route::delete('delete-count',[CountController::class,'destroy' ]);


////////////////////Choose-section/////////////////////////////////
Route::resource('choosesection', App\Http\Controllers\ChoosesectionController::class);


////////////////////Newsletter/////////////////////////
Route::resource('newsletter', NewsletterController::class);
Route::delete('delete-newsletter',[NewsletterController::class,'destroy' ]);



////////////////////Product-categories/////////////////////////
Route::resource('productcategories', ProductcategoryController::class);
Route::get('edit-productcategories/{id}',[ProductcategoryController::class,'edit' ]);
Route::put('productcategories-update',[ProductcategoryController::class,'update' ]);
Route::delete('delete-productcategories',[ProductcategoryController::class,'destroy' ]);



////////////////////Product/////////////////////////
Route::resource('product', ProductController::class);
Route::get('edit-product/{id}',[ProductController::class,'edit' ]);
Route::put('product-update',[ProductController::class,'update' ]);
Route::delete('delete-product',[ProductController::class,'destroy' ]);


////////////////////Gallery-categories/////////////////////////
Route::resource('gallerycategories', GallerycategoryController::class);
Route::get('edit-gallerycategories/{id}',[GallerycategoryController::class,'edit' ]);
Route::put('gallerycategories-update',[GallerycategoryController::class,'update' ]);
Route::delete('delete-gallerycategories',[GallerycategoryController::class,'destroy' ]);


////////////////////Gallery/////////////////////////
Route::resource('galleries', GalleryController::class);
Route::get('video/galleries',[GalleryController::class,'Videoindex' ]);
Route::post('/video', [GalleryController::class, 'Videostore'])->name('video.store');
Route::get('edit-galleries/{id}',[GalleryController::class,'edit' ]);
Route::put('galleries-update',[GalleryController::class,'update' ]);
Route::delete('delete-galleries',[GalleryController::class,'destroy' ]);


////////////////////Portfolio-categories/////////////////////////
Route::resource('portfoliocategories', PortfoliocategoryController::class);
Route::get('edit-portfoliocategories/{id}',[PortfoliocategoryController::class,'edit' ]);
Route::put('portfoliocategories-update',[PortfoliocategoryController::class,'update' ]);
Route::delete('delete-portfoliocategories',[PortfoliocategoryController::class,'destroy' ]);


////////////////////Portfolio/////////////////////////
Route::resource('portfolio', PortfolioController::class);
Route::get('edit-portfolio/{id}',[PortfolioController::class,'edit' ]);
Route::put('portfolio-update',[PortfolioController::class,'update' ]);
Route::delete('delete-portfolio',[PortfolioController::class,'destroy' ]);

////////////////////User/////////////////////////
Route::resource('users', UserController::class);
Route::get('edit-users/{id}',[UserController::class,'edit' ]);
Route::put('users-update',[UserController::class,'update' ]);
Route::delete('delete-users',[UserController::class,'destroy' ]);
});
