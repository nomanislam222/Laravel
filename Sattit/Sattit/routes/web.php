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


Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/logout', 'AdminController@logout');
Route::post('/home', 'AdminController@home');

Route::group(['middleware' => ['AdminMiddleware']], function(){



// .................Software Category..................
Route::get('/admin/home', 'AdminController@index');
Route::get('/software/category', 'CategoryController@index');
Route::post('/software/add-category', 'CategoryController@add_category');
Route::get('software/edit-category/{category_id}', 'CategoryController@edit_category');
Route::post('software/update-category/{category_id}', 'CategoryController@update_category');
Route::get('/software/all-category', 'CategoryController@all_category');
Route::get('/software/add-credit', 'AdminController@add_credit');
Route::post('/software/add-credit', 'AdminController@post_credit');
Route::get('software/edit-credit/{credit_id}', 'AdminController@edit_credit');
Route::post('software/update-credit/{credit_id}', 'AdminController@update_credit');
Route::get('/software/add-language', 'AdminController@add_language');
Route::post('/software/add-language', 'AdminController@post_language');
Route::get('software/edit-language/{lan_id}', 'AdminController@edit_language');
Route::post('software/update-language/{lan_id}', 'AdminController@update_language');
Route::get('/software/add-framework', 'AdminController@add_framework');
Route::post('/software/add-framework', 'AdminController@post_framework');
Route::get('software/edit-framework/{frame_id}', 'AdminController@edit_framework');
Route::post('software/update-framework/{frame_id}', 'AdminController@update_framework');
Route::post('/software/add-software', 'ProductController@post_soft');
Route::get('/software/add-software', 'ProductController@add_soft');
Route::get('/software/all-software', 'ProductController@all_soft');
Route::get('/software/edit-software/{soft_id}', 'ProductController@edit_soft');
Route::post('/software/update-software/{soft_id}', 'ProductController@update_soft');
Route::get('/software/view-software/{soft_id}', 'ProductController@view_soft');
Route::get('/delete-soft/{soft_id}', 'ProductController@delete_soft');





// .................Graphics Category..................
Route::get('/graphics/category', 'CategoryController@index_g');

Route::post('/graphics/add-category', 'CategoryController@add_gcategory');
Route::get('graphics/edit-category/{category_id}', 'CategoryController@edit_gcategory');
Route::post('graphics/update-category/{category_id}', 'CategoryController@update_gcategory');
Route::get('/graphics/all-category', 'CategoryController@all_gcategory');
Route::get('/graphics/add-design', 'ProductController@add_design');
Route::post('/graphics/add-design', 'ProductController@post_design');
Route::get('/graphics/all-design', 'ProductController@all_gdesign');
Route::get('graphics/edit-design/{image_id}', 'ProductController@edit_gdesign');
Route::post('graphics/update-design/{image_id}', 'ProductController@update_gdesign');
Route::get('/delete-design/{image_id}', 'ProductController@delete_gdesign');






// .................Template Category..................
Route::get('/template/category', 'CategoryController@index_t');
Route::post('/template/add-category', 'CategoryController@add_tcategory');
Route::get('template/edit-category/{category_id}', 'CategoryController@edit_tcategory');
Route::post('template/update-category/{category_id}', 'CategoryController@update_gcategory');
Route::get('/template/all-category', 'CategoryController@all_tcategory');
Route::get('/template/add-template', 'ProductController@add_template');
Route::post('/template/add-template', 'ProductController@post_template');
Route::get('/template/all-template', 'ProductController@all_tdesign');
Route::get('template/edit-template/{template_id}', 'ProductController@edit_tdesign');
Route::get('/delete-template/{template_id}', 'ProductController@delete_tdesign');
Route::post('template/update-template/{template_id}', 'ProductController@update_tdesign');






// ...................Admin................
Route::get('/admin/sector', 'AdminController@index_sector');
Route::post('/admin/add-sector', 'AdminController@add_sector');
Route::get('admin/edit-sector/{sector_id}', 'AdminController@edit_sector');
Route::post('admin/update-sector/{sector_id}', 'AdminController@update_sector');
Route::get('/admin/all-sector', 'AdminController@all_sector');
Route::get('/admin/profile', 'AdminController@index_profile');
Route::post('/admin/add-profile', 'AdminController@add_profile');
Route::get('/admin/edit-profile', 'AdminController@edit_profile');
Route::post('/admin/update-profile', 'AdminController@update_profile');
Route::get('/admin/footer', 'AdminController@index_footer');
Route::post('/admin/add-footer', 'AdminController@add_footer');
Route::get('/admin/edit-footer', 'AdminController@edit_footer');
Route::post('/admin/update-footer', 'AdminController@update_footer');
Route::get('/admin/add-seo', 'AdminController@add_seo');
Route::post('/admin/add-seo', 'AdminController@post_seo');
Route::get('/admin/all-seo', 'AdminController@all_seo');
Route::get('/admin/edit-seo/{seo_id}', 'AdminController@edit_seo');
Route::post('/admin/update-seo/{seo_id}', 'AdminController@update_seo');
Route::get('/admin/insert_seo/{seo_id}', 'AdminController@insert_seo');
Route::post('/admin/insert_seo/{seo_id}', 'AdminController@post_insert');
Route::get('/admin/edit-insert_seo/{seo_id}', 'AdminController@edit_insert');
Route::post('/admin/update-insert_seo/{seo_id}', 'AdminController@update_insert');

});





// ...............Frontend.................
Route::get('/', 'FrontendController@index');
Route::get('/service', 'FrontendController@service');
Route::get('/hosting', 'FrontendController@hosting');
Route::get('/contact', 'FrontendController@contact');
Route::get('/seo', 'FrontendController@seo');
Route::get('/policy', 'FrontendController@policy');
Route::get('/details/graphics-design', 'FrontendController@details_gd');
Route::get('/details/web-design', 'FrontendController@details_wd');
Route::get('/details/web-app', 'FrontendController@details_wa');
Route::get('/web-app', 'FrontendController@web_app');
Route::get('/design/{slug}', 'FrontendController@design');
Route::get('/template/{slug}', 'FrontendController@template');
Route::get('/view-software/{soft_id}', 'FrontendController@view_soft');
