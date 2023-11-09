<?php

use App\Http\Livewire\CheckoutPage;
use App\Http\Livewire\CheckoutSuccessPage;
use App\Http\Livewire\CollectionPage;
use App\Http\Livewire\Home;
use App\Http\Livewire\ProductPage;
use App\Http\Livewire\SearchPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Home::class);
Route::post('/change-language', function (Request $request) {
    if ($request->has('language')) {
        $language = $request->get('language');
        if (in_array($language, ['tr', 'en', 'ru'])) {
            app()->setLocale($language);
            session()->put('locale', $language); // Oturumda dil ayarını saklayın.
        }
    }

    // Geri dönüş URL'ini oluştur.
    $backUrl = url()->previous();

    // URL'e dil parametresini ekleyin.
    $backUrlWithLang = $backUrl . (parse_url($backUrl, PHP_URL_QUERY) ? '&' : '?') . 'language=' . $language;

    // Oluşturulan URL'e yönlendir.
    return redirect($backUrlWithLang);
})->name('language.change');

Route::get('/collections/{slug}', CollectionPage::class)->name('collection.view');

Route::get('/products/{slug}', ProductPage::class)->name('product.view');

Route::get('search', SearchPage::class)->name('search.view');

Route::get('checkout', CheckoutPage::class)->name('checkout.view');

Route::get('checkout/success', CheckoutSuccessPage::class)->name('checkout-success.view');
