<?php


use App\Http\Controllers\Dash\Address\AdminCityController;
use App\Http\Controllers\Dash\Address\AdminProvinceController;
use App\Http\Controllers\Dash\Attributes\AttributesController;
use App\Http\Controllers\Dash\Attributes\AttributesValueController;
use App\Http\Controllers\Dash\Banner2\AdminBestSellerController;
use App\Http\Controllers\Dash\Banner2\AdminCustomBannerController;
use App\Http\Controllers\Dash\Banner2\AdminMostVisitedController;
use App\Http\Controllers\Dash\Banner2\AdminNewestController;
use App\Http\Controllers\Dash\Banner2\AdminSuggestionController;
use App\Http\Controllers\Dash\Comments\AdminCommentController;
use App\Http\Controllers\Dash\Delivery\AdminDeliveryController;
use App\Http\Controllers\Dash\Discount\AmazingSalesController;
use App\Http\Controllers\Dash\Discount\CommonDiscountController;
use App\Http\Controllers\Dash\Discount\CouponDiscountController;
use App\Http\Controllers\Dash\NotificationController;
use App\Http\Controllers\Dash\Notifications\AdminEmailNoticeFileController;
use App\Http\Controllers\Dash\Notifications\AdminEmailNoticesController;
use App\Http\Controllers\Dash\Notifications\AdminSMSNoticeController;
use App\Http\Controllers\Dash\Order\AdminOrderController;
use App\Http\Controllers\Dash\Setting\SettingController;
use App\Http\Controllers\Dash\Ticket\AdminAdminTicketController;
use App\Http\Controllers\Dash\Ticket\AdminCategoryTicketController;
use App\Http\Controllers\Dash\Ticket\AdminPriorityTicketController;
use App\Http\Controllers\Dash\Ticket\AdminTicketController;
use Illuminate\Support\Facades\Route;

///
use App\Http\Controllers\HomeController;
use App\Livewire\Admin\Perms\AdminPerms;
use App\Livewire\Admin\Perms\AdminRoles;

///
use App\Livewire\Admin\Tag\AdminTagList;
use App\Livewire\Admin\Users\AdminUsers;
use App\Livewire\Admin\Users\AdminAdmins;
use App\Livewire\Admin\Colors\AdminColors;

///
use App\Livewire\Admin\Stock\StockProduct;
use App\Http\Controllers\SiteMapController;
use App\Livewire\Admin\Product\ProductList;
use App\Livewire\Admin\Brand\AdminBrandList;
use App\Livewire\Admin\Brand\AdminEditBrand;

///
use App\Livewire\Admin\Order\AdminAllOrders;
use App\Livewire\Admin\Setting\AdminSetting;

//
use App\Http\Controllers\Dash\AdminController;
use App\Livewire\Admin\Brand\AdminCreateBrand;

///
use App\Livewire\Admin\Perms\ListUsersForPerms;
use App\Livewire\Admin\Perms\ListUsersForRoles;
use App\Livewire\Admin\Category\AdminCategoryEdit;
use App\Livewire\Admin\Category\AdminCategoryList;

///
use App\Livewire\Admin\Comment\AdminSingleComment;
use App\Livewire\Admin\Delivery\AdminDeliveryList;

//
use App\Livewire\Admin\Attribute\AdminAttributeList;
use App\Livewire\Admin\Category\AdminCategoryCreate;
use App\Livewire\Admin\Attribute\AdminAttributeValue;

//
// use App\Livewire\Admin\Attribute\AdminAttributeCreate;
use App\Http\Controllers\Auth_User\LoginUserController;
use App\Http\Controllers\Dash\AdminPermAssignController;

//
use App\Http\Controllers\Dash\AdminRoleAssignController;

//
use App\Http\Controllers\Dash\Payment\PaymentController as DashPaymentController;

//
use App\Http\Controllers\Front\AboutUs\AboutUsController;
use App\Http\Controllers\Front\Profile\ProfileController;
use App\Http\Controllers\Auth_User\RegisterUserController;
use App\Http\Controllers\Auth_User\ValidateUserController;

//
use App\Http\Controllers\Auth_Admin\AdminLoginController;
use App\Http\Controllers\Auth_Admin\AdminProfileController;
use App\Http\Controllers\Auth_Admin\AdminValidateController;

use App\Livewire\Admin\CategoryAttribute\AdminCategoryAttributeValue;
// use App\Livewire\Admin\Attribute\AdminAttributeValueCreate;

//
use App\Http\Controllers\Dash\StockProduct\StockController;
use App\Http\Controllers\Dash\Product\ProductEditController;
use App\Http\Controllers\Dash\Product\ProductMetaController;
use App\Http\Controllers\Front\ContactUs\ContactUsController;
use App\Http\Controllers\Dash\Product\ProductCreateController;
use App\Http\Controllers\Auth_User\VerifyEmailPromptController;
use App\Http\Controllers\Dash\Product\ProductWarrantyController;
use App\Livewire\Admin\CategoryAttribute\AdminCategoryAttribute;

//
use App\Http\Controllers\Dash\Product\ProductCreateTagController;
use App\Http\Controllers\Dash\Product\ProductCreateColorController;
use App\Http\Controllers\Dash\Product\ProductCreateImageController;

//

use App\Http\Controllers\Dash\Product\ProductEditSpecificationsController;
use App\Http\Controllers\Dash\Product\ProductCreateSpecificationsController;
use Livewire\Livewire;


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


Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'home')->name('home');
    Route::get('/page/not_found', 'notFound')->name('page.not.found');
});

Route::get('/about_us', [AboutUsController::class, 'aboutUs'])->name('about_us');
Route::get('/contact_us', [ContactUsController::class, 'contactUs'])->name('contact_us');
Route::post('/contact_us/store', [ContactUsController::class, 'store'])->name('contact_us.store');


Route::controller(SiteMapController::class)->group(function () {

    Route::get('/sitemap.xml', 'index')->name('sitemap.xml');
    Route::get('/sitemap.xml/products', 'products')->name('sitemap.xml.products');
    Route::get('/sitemap.xml/categories', 'categories')->name('sitemap.xml.categories');
    Route::get('/sitemap.xml/tags', 'tags')->name('sitemap.xml.tags');
    Route::get('/sitemap.xml/static', 'static')->name('sitemap.xml.static');
});


/**--------------------------auth routes---------------------**/
Route::prefix('auth')->name('auth.')->group(function () {

    Route::get('/register', [RegisterUserController::class, 'registerForm'])->name('register.form');
    Route::post('/register-user', [RegisterUserController::class, 'register'])->name('register.user');

    Route::get('/login', [LoginUserController::class, 'loginForm'])->name('login.form');
    Route::post('/login-user', [LoginUserController::class, 'login'])->middleware('throttle:auth-login-limiter')->name('login.user');

    Route::get('/validate-user', [ValidateUserController::class, 'validateForm'])->name('validate.user.form');
    Route::post('/validate-user', [ValidateUserController::class, 'validate_user'])->middleware('throttle:auth-validate-limiter')->name('validate.user');

    Route::get('/verify-email-prompt', [VerifyEmailPromptController::class, 'verifyForm'])->name('verify.email.prompt');
    Route::post('/verify-email-send', [VerifyEmailPromptController::class, 'verifySendEmail'])->name('verify.email.send');

    Route::get('/resend-token/{token}', [ValidateUserController::class, 'resendToken'])->middleware('throttle:auth-resend-token-limiter')->name('resend.token');
});

Route::get('/log-out', [LoginUserController::class, 'logOut'])->middleware('auth', 'web')->name('auth.log.out');


/*------------------------route user profile-----------------**/
Route::controller(ProfileController::class)->prefix('profile')->middleware(['auth', 'web'])->group(function () {


    Route::get('/index', 'Profile')->name('user.profile');

    Route::get('/account-information', 'accountInformation')->name('user.account.information');
    Route::post('/account-information', 'updateProfile')->name('user.update.account.information');


    Route::get('/mobile-update', 'updateMobileForm')->name('mobile.update.form');
    Route::post('/mobile-update', 'updateMobile')->name('mobile.update');


    Route::get('/email-update', 'updateEmailForm')->name('email.update.form');
    Route::post('/email-update', 'updateEmail')->name('email.update');
});


/* ------------------- admin Routes ------------------------**/

// Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|admin'])->group(function () {
// });

Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', [AdminLoginController::class, 'loginForm'])->name('admin.login.form');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login');

    Route::get('/validate', [AdminValidateController::class, 'validateEmailForm'])->name('admin.validate.email.form');
    Route::post('/validate', [AdminValidateController::class, 'validateEmail'])->name('admin.validate.email');
});

// Route::get('/page/not_found', [AdminController::class,'adminNotFound'])->name('admin.page.not.found');

Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/page/not_found', [AdminController::class,'adminNotFound'])->name('page.not.found');
    Route::get('/page/preparing', [AdminController::class,'adminPreparingPage'])->name('page.preparing');

    Route::get('/profile', [AdminProfileController::class, 'profile'])->name('profile');
    Route::post('/update/profile', [AdminProfileController::class, 'update'])->name('update.profile');

    Route::get('/edit/mobile', [AdminProfileController::class, 'editMobile'])->name('edit.mobile');
    Route::post('/update/mobile', [AdminProfileController::class, 'updateMobile'])->name('update.mobile');

    Route::get('/logout', [AdminLoginController::class, 'logOut'])->name('logout');
});

Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/users/index', AdminUsers::class)->name('users');
    Route::get('/admins/index', AdminAdmins::class)->name('admins');
});

Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/perms/index', AdminPerms::class)->name('perms');
    Route::get('/roles/index', AdminRoles::class)->name('roles');
});

Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/roles/list/users', ListUsersForRoles::class)->name('role.list.users');
    Route::get('/roles/assign/form', [AdminRoleAssignController::class, 'create'])->name('roles.assign.form');
    Route::post('/roles/assign', [AdminRoleAssignController::class, 'store'])->name('roles.assign');

});

Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/perms/list/users', ListUsersForPerms::class)->name('perm.list.users');
    Route::get('/perms/assign/form', [AdminPermAssignController::class, 'create'])->name('perms.assign.form');
    Route::post('/perms/assign', [AdminPermAssignController::class, 'store'])->name('perms.assign');

});

Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/category/index', AdminCategoryList::class)->name('category.index');
    Route::get('/category/create', AdminCategoryCreate::class)->name('category.create');
    Route::get('/category/edit/{id}', AdminCategoryEdit::class)->name('category.edit');

});

//  crud brands
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/brand/index', AdminBrandList::class)->name('brand.index');
    Route::get('/brand/create', AdminCreateBrand::class)->name('brand.create');
    Route::get('/brand/edit/{id}', AdminEditBrand::class)->name('brand.edit');

});

// crud tags
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/tag/index', AdminTagList::class)->name('tag.index');

});

//  crud colors
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/colors/index', AdminColors::class)->name('colors.index');

});

// crud category attribute & attribute value
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/category/attribute/index', AdminCategoryAttribute::class)->name('category.attribute.index');
    Route::get('/category/attribute/value/index/{attribute}', AdminCategoryAttributeValue::class)->name('category.attribute.value.index');

});

//  crud product attribute & attribute value
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {


    //// attributes
    Route::get('/attribute/index', AdminAttributeList::class)->name('attribute.index');
    //
    Route::get('/attribute/create/{id}', [AttributesController::class, 'create'])->name('attribute.create');
    Route::post('/attribute/store', [AttributesController::class, 'store'])->name('attribute.store');
    //
    Route::get('/attribute/edit/{attribute}', [AttributesController::class, 'edit'])->name('attribute.edit');
    Route::post('/attribute/update', [AttributesController::class, 'update'])->name('attribute.update');
    Route::get('/attribute/delete/{id}', [AttributesController::class, 'delete'])->name('attribute.delete');

    //// attribute values
    Route::get('/attribute/value/index', AdminAttributeValue::class)->name('attribute.value.index');
    //
    Route::get('/attribute/value/create/{id}', [AttributesValueController::class,'create'])->name('attribute.value.create');
    Route::post('/attribute/value/store', [AttributesValueController::class,'store'])->name('attribute.value.store');
    //
    Route::get('/attribute/value/edit/{value}', [AttributesValueController::class,'edit'])->name('attribute.value.edit');
    Route::post('/attribute/value/update', [AttributesValueController::class,'update'])->name('attribute.value.update');
    //
    Route::get('/attribute/value/delete/{id}', [AttributesValueController::class,'delete'])->name('attribute.value.delete');


});


// crud product routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/product/index', ProductList::class)->name('product.index');
    // new product
    Route::get('/product/create', [ProductCreateController::class, 'create'])->name('product.create.basic');
    Route::post('/product/store', [ProductCreateController::class, 'store'])->name('product.store.basic');
    // edit product
    Route::get('/product/edit/{product}', [ProductEditController::class, 'edit'])->name('product.edit.basic');
    Route::post('/product/update', [ProductEditController::class, 'update'])->name('product.update.basic');


    // crud attribute product feature
    Route::get('/product/create/property/{product}', [ProductMetaController::class, 'index'])->name('product.create.property');

    // crud  product specifications
    Route::get('/product/specifications/index/{product}',[ProductCreateSpecificationsController::class, 'index'])->name('product.specifications.index');
    Route::get('/product/create/specifications/{product}',[ProductCreateSpecificationsController::class, 'index'])->name('product.create.specifications');
    Route::get('/product/edit/specifications/{attribute_product_id}/{product_id}', [ProductEditSpecificationsController::class, 'index'])->name('product.edit.specifications');
    Route::post('/product/update/specifications/{attribute_product_id}/{product_id}', [ProductEditSpecificationsController::class, 'update'])->name('product.update.specifications');

    // crud image product feature
    Route::get('/product/create/images/{product}', [ProductCreateImageController::class, 'create'])->name('product.create.images');

    // crud color product feature
    Route::get('/product/create/colors/{product}', [ProductCreateColorController::class, 'create'])->name('product.create.colors');

    // crud tag product feature
    Route::get('/product/create/tags/{product}', [ProductCreateTagController::class, 'create'])->name('product.create.tags');

    // crud guarantee product feature
    Route::get('/product-guarantee/index/{product}', [ProductWarrantyController::class, 'create'])->name('product.guarantee.index');
});

// stock product routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/stock-product/index', StockProduct::class)->name('stock.product.index');
    ////
    Route::get('/add_to_stock/{product}', [StockController::class, 'addToStockForm'])->name('add_to_stock.form');
    Route::post('/add_to_stock', [StockController::class, 'addToStock'])->name('add_to_stock');
    ////
    Route::get('/modify_stock/{product}', [StockController::class, 'modifyStockForm'])->name('modify_stock.form');
    Route::post('/modify_stock', [StockController::class, 'modifyStock'])->name('modify_stock');
});

// payments routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/payments-all/index', [DashPaymentController::class, 'index'])->name('payments.all.index');
    ////
    Route::get('/payments-offline/index', [DashPaymentController::class, 'offline'])->name('payments.offline.index');
    Route::get('/payments-online/index', [DashPaymentController::class, 'online'])->name('payments.online.index');
    Route::get('/payments-cash/index', [DashPaymentController::class, 'cash'])->name('payments.cash.index');
    ////
    Route::get('/payment-canceled/{payment}', [DashPaymentController::class, 'canceled'])->name('payment.canceled');
    Route::get('/payment-returned/{payment}', [DashPaymentController::class, 'returned'])->name('payment.returned');
    ////
    Route::get('/payment-show/{payment}', [DashPaymentController::class, 'show'])->name('payment.show');
});

// common discount routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/common-discount/index', [CommonDiscountController::class, 'index'])->name('common.discount.index');
    ////
    Route::get('/common-discount/create', [CommonDiscountController::class, 'create'])->name('common.discount.create');
    Route::post('/common-discount/store', [CommonDiscountController::class, 'store'])->name('common.discount.store');
    ////
    Route::get('/common-discount/edit/{discount}', [CommonDiscountController::class, 'edit'])->name('common.discount.edit');
    Route::post('/common-discount/update', [CommonDiscountController::class, 'update'])->name('common.discount.update');
});

// amazing sale routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/amazing-sale/index', [AmazingSalesController::class, 'index'])->name('amazing.sale.index');
    ////
    Route::get('/amazing-sale/create', [AmazingSalesController::class, 'create'])->name('amazing.sale.create');
    Route::post('/amazing-sale/store', [AmazingSalesController::class, 'store'])->name('amazing.sale.store');
    ////
    Route::get('/amazing-sale/edit/{amazingSale}', [AmazingSalesController::class, 'edit'])->name('amazing.sale.edit');
    Route::post('/amazing-sale/update', [AmazingSalesController::class, 'update'])->name('amazing.sale.update');
});

// coupon routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/coupons/index', [CouponDiscountController::class, 'index'])->name('coupons.index');
    ////
    Route::get('/coupons/create', [CouponDiscountController::class, 'create'])->name('coupons.create');
    Route::post('/coupons/store', [CouponDiscountController::class, 'store'])->name('coupons.store');
    ////
    Route::get('/coupons/edit/{coupon}', [CouponDiscountController::class, 'edit'])->name('coupons.edit');
    Route::post('/coupons/update', [CouponDiscountController::class, 'update'])->name('coupons.update');
});


// order routes

Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/all-orders', AdminAllOrders::class)->name('orders.index');

    Route::get('/orders-new', [AdminOrderController::class, 'newOrders'])->name('orders.new');

    Route::get('/orders-sending', [AdminOrderController::class, 'sending'])->name('orders.sending');

    Route::get('/orders-unpaid', [AdminOrderController::class, 'unpaid'])->name('orders.unpaid');

    Route::get('/orders-paid', [AdminOrderController::class, 'paid'])->name('orders.paid');

    Route::get('/orders-canceled', [AdminOrderController::class, 'canceled'])->name('orders.canceled');

    Route::get('/orders-returned', [AdminOrderController::class, 'returned'])->name('orders.returned');

    Route::get('/show-order/{order}', [AdminOrderController::class, 'show'])->name('order.show');

    Route::get('/order-details/{order}', [AdminOrderController::class, 'details'])->name('order.details');
});

// shipment routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/delivery/index', AdminDeliveryList::class)->name('delivery.index');
    Route::get('/delivery/create', [AdminDeliveryController::class, 'create'])->name('delivery.create');
    Route::post('/delivery/store', [AdminDeliveryController::class, 'store'])->name('delivery.store');
    Route::get('/delivery/edit/{delivery}', [AdminDeliveryController::class, 'edit'])->name('delivery.edit');
    Route::post('/delivery/update', [AdminDeliveryController::class, 'update'])->name('delivery.update');
});

// province routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/province/index', [AdminProvinceController::class, 'index'])->name('province.index');
    Route::post('/province/store', [AdminProvinceController::class, 'store'])->name('province.store');
    ////
    Route::get('/province/edit/{province}', [AdminProvinceController::class, 'edit'])->name('province.edit');
    Route::post('/province/update', [AdminProvinceController::class, 'update'])->name('province.update');
    ////
    Route::get('/province/delete/{province}', [AdminProvinceController::class, 'delete'])->name('province.delete');
});

// cities routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/city/create', [AdminCityController::class, 'create'])->name('city.create');
    Route::post('/city/store', [AdminCityController::class, 'store'])->name('city.store');
    ////
    Route::get('/city/edit/{city}', [AdminCityController::class, 'edit'])->name('city.edit');
    Route::post('/city/update', [AdminCityController::class, 'update'])->name('city.update');
    /////
    Route::post('/city/delete/{city}', [AdminCityController::class, 'delete'])->name('city.delete');
});


// ticket routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/category-tickets', [AdminCategoryTicketController::class, 'categoryTickets'])->name('category.tickets');
    Route::get('/category-ticket/create', [AdminCategoryTicketController::class, 'create'])->name('category.ticket.create');
    Route::post('/category-ticket/store', [AdminCategoryTicketController::class, 'store'])->name('category.ticket.store');
    Route::get('/category-ticket/edit/{ticketCategory}', [AdminCategoryTicketController::class, 'edit'])->name('category.ticket.edit');
    Route::post('/category-ticket/update', [AdminCategoryTicketController::class, 'update'])->name('category.ticket.update');
    ////
    Route::get('/priority-tickets', [AdminPriorityTicketController::class, 'priorityTickets'])->name('priority.tickets');
    Route::get('/priority-ticket/create', [AdminPriorityTicketController::class, 'create'])->name('priority.ticket.create');
    Route::post('/priority-ticket/store', [AdminPriorityTicketController::class, 'store'])->name('priority.ticket.store');
    Route::get('/priority-ticket/edit/{ticketPriority}', [AdminPriorityTicketController::class, 'edit'])->name('priority.ticket.edit');
    Route::post('/priority-ticket/update', [AdminPriorityTicketController::class, 'update'])->name('priority.ticket.update');
});

Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/all-tickets', [AdminTicketController::class, 'allTickets'])->name('all.tickets');
    Route::get('/new-tickets', [AdminTicketController::class, 'newTickets'])->name('new.tickets');
    Route::get('/open-tickets', [AdminTicketController::class, 'openTickets'])->name('open.tickets');
    Route::get('/close-tickets', [AdminTicketController::class, 'closeTickets'])->name('close.tickets');
    Route::get('/show-ticket/{ticket}', [AdminTicketController::class, 'showTicket'])->name('show.ticket');
    Route::post('/answer-ticket/{ticket}', [AdminTicketController::class, 'answer'])->name('answer.ticket');
    Route::get('/change-status/ticket/{ticket}', [AdminTicketController::class, 'changeStatus'])->name('change.status.ticket');
});


// notification routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/notification/read-all', [NotificationController::class, 'readNotifications'])->name('notification.read.all');

});

// Notifications email& sms
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'role:admin|super_admin'])->group(function () {


    //// email notices routes
    Route::get('/email-notices/index', [AdminEmailNoticesController::class, 'index'])->name('email.notices.index');
    // create
    Route::get('/email-notices/create', [AdminEmailNoticesController::class, 'create'])->name('email.notices.create');
    Route::post('/email-notices/store', [AdminEmailNoticesController::class, 'store'])->name('email.notices.store');
    // edit
    Route::get('/email-notices/edit/{publicMail}', [AdminEmailNoticesController::class, 'edit'])->name('email.notices.edit');
    Route::post('/email-notices/update', [AdminEmailNoticesController::class, 'update'])->name('email.notices.update');
    // send mail
    Route::get('/send-mail/{mail}', [AdminEmailNoticesController::class, 'sendMail'])->name('notices.send.mail');
    //// sms notices routes
    Route::get('/sms-notices/index', [AdminSMSNoticeController::class, 'index'])->name('sms.notices.index');
    // create
    Route::get('/sms-notices/create', [AdminSMSNoticeController::class, 'create'])->name('sms.notices.create');
    Route::post('/sms-notices/store', [AdminSMSNoticeController::class, 'store'])->name('sms.notices.store');
    // edit
    Route::get('/sms-notices/edit/{publicSms}', [AdminSMSNoticeController::class, 'edit'])->name('sms.notices.edit');
    Route::post('/sms-notices/update', [AdminSMSNoticeController::class, 'update'])->name('sms.notices.update');
    // send sms
    Route::get('/send-sms/{publicSms}', [AdminSMSNoticeController::class, 'sendSms'])->name('notices.send.sms');

});


// email notices  file routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/email-notice-file/index', [AdminEmailNoticeFileController::class, 'emailFileIndex'])->name('email.notice.file.index');
    Route::get('/email-notice-file/create', [AdminEmailNoticeFileController::class, 'create'])->name('email.notice.file.create');
    Route::post('/email-notice-file/store', [AdminEmailNoticeFileController::class, 'store'])->name('email.notice.file.store');

});

Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'verify_admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/admin-tickets/index', [AdminAdminTicketController::class, 'index'])->name('admin.tickets.index');
    Route::get('/set/admin-ticket/{admin}', [AdminAdminTicketController::class, 'setAdmin'])->name('set.admin.ticket');
});

// comments routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/product_comments/index', [AdminCommentController::class, 'productIndexComments'])->name('product_comments.index');
    Route::get('/comments/index/product/{product}', [AdminCommentController::class, 'productComments'])->name('comments.index.product');
    Route::get('/comment/show/{comment}', AdminSingleComment::class)->name('comment.show');

});


// setting routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'role:admin|super_admin'])->group(function () {

    Route::get('/setting/index', AdminSetting::class)->name('setting.index');
    Route::get('/setting/edit/{setting}', [SettingController::class, 'edit'])->name('setting.edit');
    Route::post('/setting/update', [SettingController::class, 'update'])->name('setting.update');
});

//// banners routes


// custom  banner
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'role:admin|super_admin'])->group(function () {


    // Route::get('/custom-banners/index',AdminCustomBanner::class)->name('custom.banners.index');

    ////
    Route::get('/custom-banner/create', [AdminCustomBannerController::class, 'create'])->name('custom.banner.create');
    Route::post('/custom-banner/store', [AdminCustomBannerController::class, 'store'])->name('custom.banner.store');
    //
    // Route::get('/newest-product/edit/{banner}', [AdminNewestController::class, 'edit'])->name('newest.product.edit');
    // Route::post('/newest-product/update', [AdminNewestController::class, 'update'])->name('newest.product.update');
});


// newest products banner
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'role:admin|super_admin'])->group(function () {

    //  Route::get('/newest-product/index',AdminNewestBanner ::class)->name('newest.product.index');

    ////
    Route::get('/newest-product/create', [AdminNewestController::class, 'create'])->name('newest.product.create');
    Route::post('/newest-product/store', [AdminNewestController::class, 'store'])->name('newest.product.store');
    ////
    Route::get('/newest-product/edit/{banner}', [AdminNewestController::class, 'edit'])->name('newest.product.edit');
    Route::post('/newest-product/update', [AdminNewestController::class, 'update'])->name('newest.product.update');
});


// suggestion products banner
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'role:admin|super_admin'])->group(function () {

    // Route::get('/suggestion-products/index',AdminSuggestionBanner ::class)->name('suggestion.products.index');

    ////
    Route::get('/suggestion-products/create', [AdminSuggestionController::class, 'create'])->name('suggestion.products.create');
    Route::get('/suggestion-products/add/{product}', [AdminSuggestionController::class, 'store'])->name('suggestion.products.store');
    ////
    Route::get('/suggestion-products/edit/{banner}', [AdminSuggestionController::class, 'edit'])->name('suggestion.products.edit');
    Route::post('/suggestion-products/update', [AdminSuggestionController::class, 'update'])->name('suggestion.products.update');
});


// most visited slider
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'role:admin|super_admin'])->group(function () {

    // Route::get('/most-visited/index',AdminMostVisitedSlider ::class)->name('most.visited.index');

    ////
    Route::get('/most-visited/create', [AdminMostVisitedController::class, 'create'])->name('most.visited.create');
    Route::post('/most-visited/store', [AdminMostVisitedController::class, 'store'])->name('most.visited.store');
    ////
    Route::get('/most-visited/edit/{banner}', [AdminMostVisitedController::class, 'edit'])->name('most.visited.edit');
    Route::post('/most-visited/update', [AdminMostVisitedController::class, 'update'])->name('most.visited.update');
});

// best seller slider
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'role:admin|super_admin'])->group(function () {

    // Route::get('/best-seller/index',AdminBestSellerSlider::class)->name('best.seller.index');

    ////
    Route::get('/best-seller/create', [AdminBestSellerController::class, 'create'])->name('best.seller.create');
    Route::post('/best-seller/store', [AdminBestSellerController::class, 'store'])->name('best.seller.store');
    ////
    Route::get('/best-seller/edit/{banner}', [AdminBestSellerController::class, 'edit'])->name('best.seller.edit');
    Route::post('/best-seller/update', [AdminBestSellerController::class, 'update'])->name('best.seller.update');
});
