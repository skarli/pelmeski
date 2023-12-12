<section class="bg-white">
    @php
    $telegramBotToken = "5993758253:AAErD-IkKm4aYJqAqbQgclIbeLa1qzpj0a8";
    $chatId = "-1002138371036";
    $message = urlencode("Sipariş Geldi");

    $url = "https://api.telegram.org/bot{$telegramBotToken}/sendMessage?chat_id={$chatId}&text={$message}";

    try {
        $response = file_get_contents($url);
        // İsteğin başarılı olup olmadığını kontrol et
        // $response içeriğini loglayabilirsiniz.
    } catch (Exception $e) {
        // Hata yönetimi
        // Hata durumunda yapılacak işlemler
    }
@endphp
    <div class="max-w-screen-xl px-4 py-32 mx-auto sm:px-6 lg:px-8 lg:py-48">
        <div class="max-w-xl mx-auto text-center">
           
           <!-- <span class="text-xs font-medium text-center bg-orange-100 text-orange-700 px-3 py-1.5 rounded-lg">
                This was a test order
            </span>
        -->
            <h1 class="mt-8 text-3xl font-extrabold sm:text-5xl">
                <span class="block"
                      role="img">
                    🥳
                </span>

                <span class="block mt-1 text-blue-500">
               
                    @lang('general.order')
                </span>
            </h1>

            <p class="mt-4 font-medium sm:text-lg">
              @lang('general.ordernumber')

                <strong>
                    {{ $order->reference }}
                </strong>
            </p>

            <a class="inline-block px-8 py-3 mt-8 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:ring-1 hover:ring-blue-600"
               href="{{ url('/') }}">
              Anasayfa Dön
            </a>
        </div>
    </div>
</section>
