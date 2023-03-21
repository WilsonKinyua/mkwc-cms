<?php

// public routes
Route::get('/', 'PublicController@index')->name('index.home');
Route::get('about-us', 'PublicController@aboutUs')->name('about.us');
Route::get('breeding-rewilding', 'PublicController@breedingRewilding')->name('breeding.rewilding');
Route::get('animal-orphanage', 'PublicController@animalOrphanage')->name('animal.orphanage');
Route::get('conservation-education', 'PublicController@conservationEducation')->name('conservation.education');
Route::get('gallery', 'PublicController@gallery')->name('gallery');
Route::get('gallery/{slug}', 'PublicController@galleryCategory')->name('gallery.category');
Route::get('newsroom', 'PublicController@newsroom')->name('newsroom');
Route::get('newsroom/press-release', 'PublicController@PressRelease')->name('press-release');
Route::get('newsroom/{slug}/press-release', 'PublicController@PressReleaseDetails')->name('press-release.details');
Route::get('newsroom/quotes', 'PublicController@Quotes')->name('quotes');
Route::get('newsletter', 'PublicController@newsletter')->name('newsletter');
Route::post('newsletter', 'PublicController@newsletterSignUp')->name('newsletter.sign-up');
Route::get('donate', 'PublicController@donate')->name('donate');
Route::get('donors', 'PublicController@donors')->name('donors');
Route::get('contact', 'PublicController@contact')->name('contact');
Route::post('contact', 'PublicController@contactCreate')->name('contact.create');
Route::get('our-trustees', 'PublicController@ourTrustees')->name('our-trustees');

// private routes
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::post('users/media', 'UsersController@storeMedia')->name('users.storeMedia');
    Route::post('users/ckmedia', 'UsersController@storeCKEditorImages')->name('users.storeCKEditorImages');
    Route::resource('users', 'UsersController');

    // In The New
    Route::delete('in-the-news/destroy', 'InTheNewController@massDestroy')->name('in-the-news.massDestroy');
    Route::post('in-the-news/media', 'InTheNewController@storeMedia')->name('in-the-news.storeMedia');
    Route::post('in-the-news/ckmedia', 'InTheNewController@storeCKEditorImages')->name('in-the-news.storeCKEditorImages');
    Route::resource('in-the-news', 'InTheNewController');

    // Quote
    Route::delete('quotes/destroy', 'QuoteController@massDestroy')->name('quotes.massDestroy');
    Route::post('quotes/media', 'QuoteController@storeMedia')->name('quotes.storeMedia');
    Route::post('quotes/ckmedia', 'QuoteController@storeCKEditorImages')->name('quotes.storeCKEditorImages');
    Route::resource('quotes', 'QuoteController');

    // In The Media
    Route::delete('in-the-media/destroy', 'InTheMediaController@massDestroy')->name('in-the-media.massDestroy');
    Route::post('in-the-media/media', 'InTheMediaController@storeMedia')->name('in-the-media.storeMedia');
    Route::post('in-the-media/ckmedia', 'InTheMediaController@storeCKEditorImages')->name('in-the-media.storeCKEditorImages');
    Route::post('in-the-media/parse-csv-import', 'InTheMediaController@parseCsvImport')->name('in-the-media.parseCsvImport');
    Route::post('in-the-media/process-csv-import', 'InTheMediaController@processCsvImport')->name('in-the-media.processCsvImport');
    Route::resource('in-the-media', 'InTheMediaController');

    // Media Resources
    Route::delete('media-resources/destroy', 'MediaResourcesController@massDestroy')->name('media-resources.massDestroy');
    Route::post('media-resources/media', 'MediaResourcesController@storeMedia')->name('media-resources.storeMedia');
    Route::post('media-resources/ckmedia', 'MediaResourcesController@storeCKEditorImages')->name('media-resources.storeCKEditorImages');
    Route::resource('media-resources', 'MediaResourcesController');

    // Newsletter Email
    Route::delete('newsletter-emails/destroy', 'NewsletterEmailController@massDestroy')->name('newsletter-emails.massDestroy');
    Route::resource('newsletter-emails', 'NewsletterEmailController', ['except' => ['create', 'store', 'edit', 'update', 'show']]);

    // Gallery Category
    Route::delete('gallery-categories/destroy', 'GalleryCategoryController@massDestroy')->name('gallery-categories.massDestroy');
    Route::post('gallery-categories/media', 'GalleryCategoryController@storeMedia')->name('gallery-categories.storeMedia');
    Route::post('gallery-categories/ckmedia', 'GalleryCategoryController@storeCKEditorImages')->name('gallery-categories.storeCKEditorImages');
    Route::resource('gallery-categories', 'GalleryCategoryController');

    // Gallery
    Route::delete('galleries/destroy', 'GalleryController@massDestroy')->name('galleries.massDestroy');
    Route::post('galleries/media', 'GalleryController@storeMedia')->name('galleries.storeMedia');
    Route::post('galleries/ckmedia', 'GalleryController@storeCKEditorImages')->name('galleries.storeCKEditorImages');
    Route::resource('galleries', 'GalleryController');

    // Newsletter
    Route::delete('newsletters/destroy', 'NewsletterController@massDestroy')->name('newsletters.massDestroy');
    Route::post('newsletters/media', 'NewsletterController@storeMedia')->name('newsletters.storeMedia');
    Route::post('newsletters/ckmedia', 'NewsletterController@storeCKEditorImages')->name('newsletters.storeCKEditorImages');
    Route::resource('newsletters', 'NewsletterController');

    // Contact Us
    Route::delete('contactuses/destroy', 'ContactUsController@massDestroy')->name('contactuses.massDestroy');
    Route::post('contactuses/media', 'ContactUsController@storeMedia')->name('contactuses.storeMedia');
    Route::post('contactuses/ckmedia', 'ContactUsController@storeCKEditorImages')->name('contactuses.storeCKEditorImages');
    Route::resource('contactuses', 'ContactUsController', ['except' => ['create', 'store', 'edit', 'update', 'show']]);

    // Partner Category
    Route::delete('partner-categories/destroy', 'PartnerCategoryController@massDestroy')->name('partner-categories.massDestroy');
    Route::resource('partner-categories', 'PartnerCategoryController');

    // Mkwc Partner
    Route::delete('mkwc-partners/destroy', 'MkwcPartnerController@massDestroy')->name('mkwc-partners.massDestroy');
    Route::post('mkwc-partners/media', 'MkwcPartnerController@storeMedia')->name('mkwc-partners.storeMedia');
    Route::post('mkwc-partners/ckmedia', 'MkwcPartnerController@storeCKEditorImages')->name('mkwc-partners.storeCKEditorImages');
    Route::resource('mkwc-partners', 'MkwcPartnerController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
