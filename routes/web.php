<?php

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



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' =>'auth'],function(){
Route::get('/home', 'HomeController@index')->name('home');

//about

Route::get('addabout','AboutController@addabout')->name('addabout');
Route::post('about','AboutController@storeabout')->name('storeabout');
Route::get('showabout','AboutController@showabout')->name('showabout');
Route::get('showeditabout','AboutController@showeditabout')->name('showeditabout');
Route::post('editabout/{id}','AboutController@editabout')->name('editabout');

//teams
Route::get('showeditteam/{id}','AboutController@showedit')->name('teams.showedit');
Route::get('addteamform','AboutController@teams')->name('teams');
Route::POST('storeteam','AboutController@addteam')->name('addteam');
Route::get('viewteam','AboutController@viewteam')->name('view.team');
Route::post('editteam/{id}','AboutController@editteam')->name('editteam');
Route::get('showteammember/{id}','AboutController@showteammem')->name('showteammember');
Route::post('delteam/{id}','AboutController@deleteteam')->name('deleteteam');


//Article

Route::get('article','ArticleController@article')->name('articles');
Route::POST('storearticle','ArticleController@storearticle')->name('article.store');
Route::get('showarticles/{id}','ArticleController@showarticles')->name('show.article');
Route::get('viewarticles','ArticleController@viewarticle')->name('view.article');
Route::post('articlestatus/{id}','ArticleController@articlestatus')->name('article.status');
Route::post('deletearticle/{id}','ArticleController@delarticle')->name('del.article');
Route::get('showedit/{id}','ArticleController@showedit')->name('showedit.article');
Route::post('articleedit/{id}','ArticleController@editstore')->name('edit.article');


//Testmonials
Route::get('Testmonials','TestmonialController@addtestmonial')->name('add.testmonial');
Route::post('testmonial','TestmonialController@storetestimonial')->name('store.testmonial');
Route::get('viewtestimonials','TestmonialController@viewtestimonial')->name('view.testmonial');
Route::get('view-edit-testimonials/{id}','TestmonialController@showedit')->name('showedit.testmonial');
Route::post('edit-testmonials/{id}','TestmonialController@edittestimonial')->name('edit.testmonial');
Route::post('delete-testimonials/{id}','TestmonialController@deletetesti')->name('del.testmonial');
Route::get('show_testimonial/{id}','TestmonialController@showtestmonial')->name('show.testmonial');

//Service
Route::get('add_service','ServiceController@addservice')->name('addservice');
Route::POST('store_service','ServiceController@storeservice')->name('storeservice');
Route::get('view_service','ServiceController@viewservice')->name('viewservice');
Route::get('show_service/{id}','ServiceController@showservice')->name('showservice');
Route::post('del_service/{id}','ServiceController@delservice')->name('delservice');
Route::get('show_editservice/{id}','ServiceController@showeditservice')->name('showeditservice');
Route::post('edit_service/{id}','ServiceController@editservice')->name('editservice');
Route::post('servicestatus/{id}','ServiceController@servicestatus')->name('service.status');




//carousel
Route::get('Carouselform','CarouselController@addcarousel')->name('addcarousel');
Route::post('storecarousel','CarouselController@storecarousel')->name('storecarousel');
Route::get('view_carousel','CarouselController@viewcarousel')->name('view.carousel');
Route::post('carouselstatus/{id}','CarouselController@carouselstatus')->name('carousel.status');
Route::post('delcarousel/{id}','CarouselController@delcarousel')->name('carouseldelete');
Route::get('showeditcarousel/{id}','CarouselController@showeditcarousel')->name('showeditcarousel');
Route::post('editcarousel/{id}','CarouselController@editcarousel')->name('carouseledit');

//Our Design image

Route::get('Designform','DesignController@getdesign')->name('adddesign');
Route::post('storedesign','DesignController@storedesign')->name('storedesign');
Route::post('designstatus/{id}','DesignController@designstatus')->name('design.status');
Route::get('view_design','DesignController@viewdesign')->name('viewdesign');
Route::post('edit_design/{id}','DesignController@editdesign')->name('editdesign');
Route::get('show_edit_design/{id}','DesignController@showeditdesign')->name('showeditdesign');
Route::post('deldesign/{id}','DesignController@deldesign')->name('deldesign');
Route::get('show_design/{id}','DesignController@showdesign')->name('showdesign');

//Ourdesign summary

Route::get('designtitleform','DesignController@gettitle')->name('designtitle');
Route::post('storedesigntitle','DesignController@storetitle')->name('storetitle');
Route::get('title_view','DesignController@showtitle')->name('titleview');
Route::post('edittitle/{id}','DesignController@edittitle')->name('edittitle');
Route::get('showtitleedit/{id}','DesignController@showtitleedit')->name('showtitleedit');

//Ourclient
Route::get('addclient','ClientController@addclient')->name('addclient');
Route::post('storeclient','ClientController@storeclient')->name('storeclient');
Route::get('view_client','ClientController@viewclient')->name('viewclient');
Route::post('clientstatus/{id}','ClientController@clientstatus')->name('client.status');
Route::post('delclient/{id}','ClientController@delclient')->name('delclient');
Route::get('showeditclient/{id}','ClientController@showeditclient')->name('showeditclient');
Route::Post('edit_client/{id}','ClientController@editstore')->name('editclient');
Route::get('show_client/{id}','ClientController@showclient')->name('clientshow');

//Mailbox
Route::get('contactform','ContactformController@contactform')->name('contactform');
Route::post('storecontact','ContactformController@contactstore')->name('store.contact');
Route::get('view_contact','ContactformController@viewcontact')->name('viewcontact');
Route::get('composemessage/{id}','ContactformController@composemail')->name('composemail');
Route::post('storereply','ContactformController@storereply')->name('storereply');
Route::get('viewmessagereply','ContactformController@viewreplies')->name('viewreplies');
Route::post('quickreply','ContactformController@storequickreply')->name('quickreply');

//Dashboard
Route::get('dashboard','DashboardController@home')->name('home');
Route::get('/logout','DashboardController@logout')->name('logout');


//SEO
 Route::get('create_seo','SeoController@createseo')->name('createseo');
// Route::post('store_seo','SeoController@storeseo')->name('storeseo');
Route::get('/viewseo','SeoController@viewseo')->name('viewseo');
Route::post('/seostore','SeoController@seostore')->name('seostore');
Route::post('/seoupdate/{seo}','SeoController@seoupdate')->name('seo.update');

});