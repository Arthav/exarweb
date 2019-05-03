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

//HOMEPAGE

Route::get('/','WelcomeController@index')->name('index');
Route::get('/properti', 'WelcomeController@properti')->name('Home.Properti');
Route::get('/propertishow/{id}', 'WelcomeController@propertishow')->name('Home.PropertiShow')->where('id', '[0-9]+');
Route::get('/artikel', 'WelcomeController@artikel')->name('Home.Artikel');
Route::get('/artikelshow/{id}', 'WelcomeController@artikelshow')->name('Home.ArtikelShow')->where('id', '[0-9]+');
Route::get('/kontak', 'WelcomeController@kontak')->name('Home.Kontak');
Route::get('/about', 'WelcomeController@about')->name('Home.About');

Auth::routes();

Route::get('/home', 'ListingController@index')->name('home');

//KPR CALCULATOR

Route::get('/calculator', 'CalculatorController@index')->name('Calculator');


//------------------------------------------------------------------------------------------------------------------------
//Listing
//------------------------------------------------------------------------------------------------------------------------

Route::get('/listing', 'ListingController@index')->name('Listing_Default');
Route::get('/listing/tambah', 'ListingController@tambah_listing')->name('Listing.Tambah');
Route::post('/listing/simpan', 'ListingController@simpan_listing')->name('Listing.Simpan');
Route::get('/listing/tambah/foto', 'ListingController@tambah_listing_foto')->name('Listing.Tambah.Foto');
Route::post('/listing/simpan/foto', 'ListingController@simpan_listing_foto')->name('Listing.Simpan.Foto');
Route::get('/listing/show/{id}', 'ListingController@show')->name('Listing.Show')->where('id', '[0-9]+');
Route::get('/listing/ubah', 'ListingController@show')->name('Listing.Ubah');
Route::post('/listing/closing', 'ListingController@closing')->name('Listing.Closing');
Route::get('/listing/primary', 'ListingController@primary')->name('Listing.Primary');
Route::get('/listing/sold', 'ListingController@sold')->name('Listing.Sold');
Route::get('/listing/mylist', 'ListingController@mylisting')->name('Listing.Mylist');
Route::put('/listing/hapus', 'ListingController@hapus')->name('Listing.Hapus');
//------------------------------------------------------------------------------------------------------------------------
//Human Resource Management
//------------------------------------------------------------------------------------------------------------------------

//agen
Route::get('/agen', 'AgenController@index')->name('Human.Agen');
Route::get('/agen/{id}', 'AgenController@show_agen')->name('Human.Agen.Show')->where('id', '[0-9]+');
Route::get('/agen/tambah', 'AgenController@tambah_agen')->name('Human.Agen.Tambah');
Route::put('/agen/{id}/ubah', 'AgenController@ubah_agen')->name('Human.Agen.Ubah')->where('id', '[0-9]+');
Route::post('/agen/simpan', 'AgenController@simpan_agen')->name('Human.Agen.Simpan');
Route::put('/agen/{id}/hapus', 'AgenController@hapus_agen')->name('Human.Agen.Hapus')->where('id', '[0-9]+');

//jabatan
Route::get('/jabatan', 'RoleController@index')->name('Human.Jabatan');
Route::get('/jabatan/{id}', 'RoleController@show_jabatan')->name('Human.Jabatan.Show')->where('id', '[0-9]+');
Route::get('/jabatan/tambah', 'RoleController@tambah_jabatan')->name('Human.Jabatan.Tambah');
Route::put('/jabatan/{id}/ubah', 'RoleController@ubah_jabatan')->name('Human.Jabatan.Ubah')->where('id', '[0-9]+');
Route::post('/jabatan/simpan', 'RoleController@simpan_jabatan')->name('Human.Jabatan.Simpan');
Route::put('/jabatan/{id}/hapus', 'RoleController@hapus_jabatan')->name('Human.Jabatan.Hapus')->where('id', '[0-9]+');

//policy
Route::get('/policy', 'PolicyController@index')->name('Human.Policy');
Route::get('/policy/{id}', 'PolicyController@show_policy')->name('Human.Policy.Show')->where('id', '[0-9]+');
Route::get('/policy/tambah', 'PolicyController@tambah_policy')->name('Human.Policy.Tambah');
Route::put('/policy/{id}/ubah', 'PolicyController@ubah_policy')->name('Human.Policy.Ubah')->where('id', '[0-9]+');
Route::post('/policy/simpan', 'PolicyController@simpan_policy')->name('Human.Policy.Simpan');
Route::put('/policy/{id}/hapus', 'PolicyController@hapus_policy')->name('Human.Policy.Hapus')->where('id', '[0-9]+');




//------------------------------------------------------------------------------------------------------------------------
//Report
//------------------------------------------------------------------------------------------------------------------------


Route::get('download', 'ReportController@download_overview')->name('Report.Overview.Download');
Route::get('/report/penjualan/agen', 'ReportController@penjualan_agen')->name('Report.Penjualan.Agen');
Route::get('/report/penjualan/agen/show/{id}', 'ReportController@penjualan_agen_show')->name('Report.Penjualan.Agen.Show')->where('id', '[0-9]+');
Route::get('/report/penjualan/saya', 'ReportController@penjualan_saya')->name('Report.Penjualan.Saya');
Route::get('/report/komisi/agen', 'ReportController@komisi_agen')->name('Report.Komisi.Agen');
Route::get('/report/komisi/saya', 'ReportController@komisi_saya')->name('Report.Komisi.Saya');



//------------------------------------------------------------------------------------------------------------------------
//Calendar
//------------------------------------------------------------------------------------------------------------------------


Route::get('/calendar', 'CalendarController@index')->name('Calendar');
Route::get('/calendar/tambah', 'CalendarController@tambah_calendar')->name('Calendar.Tambah');
Route::put('/calendar/{id}/ubah', 'CalendarController@ubah_calendar')->name('Calendar.Ubah')->where('id', '[0-9]+');
Route::post('/calendar/simpan', 'CalendarController@simpan_calendar')->name('Calendar.Simpan');
Route::put('/calendar/hapus/{id}', 'CalendarController@hapus_calendar')->name('Calendar.Hapus')->where('id', '[0-9]+');
Route::get('/calendar/show/{id}', 'CalendarController@show')->name('Calendar.Show')->where('id', '[0-9]+');

//------------------------------------------------------------------------------------------------------------------------
//Leads
//------------------------------------------------------------------------------------------------------------------------


Route::get('/leads', 'LeadsController@index')->name('Leads');
Route::get('/leads/{id}', 'LeadsController@show_leads')->name('Leads.Show')->where('id', '[0-9]+');
Route::get('/leads/tambah', 'LeadsController@tambah_leads')->name('Leads.Tambah');
Route::put('/leads/{id}/ubah', 'LeadsController@ubah_leads')->name('Leads.Ubah')->where('id', '[0-9]+');
Route::post('/leads/simpan', 'LeadsController@simpan_leads')->name('Leads.Simpan');
Route::put('/leads/{id}/hapus', 'LeadsController@hapus_leads')->name('Leads.Hapus')->where('id', '[0-9]+');



//------------------------------------------------------------------------------------------------------------------------
//Developer
//------------------------------------------------------------------------------------------------------------------------


Route::get('/Dev', 'DevController@index')->name('Dev');
Route::get('/Dev/{id}', 'DevController@show_dev')->name('Dev.Show')->where('id', '[0-9]+');
Route::get('/Dev/tambah', 'DevController@tambah_dev')->name('Dev.Tambah');
Route::put('/Dev/{id}/ubah', 'DevController@ubah_dev')->name('Dev.Ubah')->where('id', '[0-9]+');
Route::post('/Dev/simpan', 'DevController@simpan_dev')->name('Dev.Simpan');
Route::put('/Dev/{id}/hapus', 'DevController@hapus_dev')->name('Dev.Hapus')->where('id', '[0-9]+');


//------------------------------------------------------------------------------------------------------------------------
//News
//------------------------------------------------------------------------------------------------------------------------

Route::get('/news', 'NewsController@index')->name('News');
Route::get('/news/tambah', 'NewsController@tambah_news')->name('News.Tambah');
Route::put('/news/{id}/ubah', 'NewsController@ubah_news')->name('News.Ubah')->where('id', '[0-9]+');
Route::post('/news/simpan', 'NewsController@simpan_news')->name('News.Simpan');
Route::put('/news/hapus/{id}', 'NewsController@hapus_news')->name('News.Hapus')->where('id', '[0-9]+');
Route::get('/news/show/{id}', 'NewsController@show')->name('News.Show')->where('id', '[0-9]+');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
