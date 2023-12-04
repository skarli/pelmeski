<style>
    #whatsapp-link {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 1000;
}

#whatsapp-link img {
  width: 50px;
  height: 50px;
}
</style>
<footer class="bg-gray-50">
    <a href="https://wa.me/905314337859" target="_blank" id="whatsapp-link">
        <svg height="50px" width="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
        viewBox="0 0 58 58" xml:space="preserve">
   <g>
       <path style="fill:#2CB742;" d="M0,58l4.988-14.963C2.457,38.78,1,33.812,1,28.5C1,12.76,13.76,0,29.5,0S58,12.76,58,28.5
           S45.24,57,29.5,57c-4.789,0-9.299-1.187-13.26-3.273L0,58z"/>
       <path style="fill:#FFFFFF;" d="M47.683,37.985c-1.316-2.487-6.169-5.331-6.169-5.331c-1.098-0.626-2.423-0.696-3.049,0.42
           c0,0-1.577,1.891-1.978,2.163c-1.832,1.241-3.529,1.193-5.242-0.52l-3.981-3.981l-3.981-3.981c-1.713-1.713-1.761-3.41-0.52-5.242
           c0.272-0.401,2.163-1.978,2.163-1.978c1.116-0.627,1.046-1.951,0.42-3.049c0,0-2.844-4.853-5.331-6.169
           c-1.058-0.56-2.357-0.364-3.203,0.482l-1.758,1.758c-5.577,5.577-2.831,11.873,2.746,17.45l5.097,5.097l5.097,5.097
           c5.577,5.577,11.873,8.323,17.45,2.746l1.758-1.758C48.048,40.341,48.243,39.042,47.683,37.985z"/>
   </g>
   </svg>
      </a>
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <x-brand.logo class="w-auto h-8 text-indigo-600" />



        <br>
        <b> @lang('general.info')</b>
        <form action="" method="POST">
            @csrf {{-- CSRF token eklemeyi unutmayın --}}
            <select name="language" onchange="this.form.submit()">
                <option value="tr" {{ app()->getLocale() == 'tr' ? 'selected' : '' }}>Türkçe</option>
                <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                <option value="ru" {{ app()->getLocale() == 'ru' ? 'selected' : '' }}>Русский</option>
            </select>
        </form>
        <br>
        <p class="pt-4 mt-4 text-sm text-gray-500 border-t border-gray-100">
            &copy; {{ now()->year }} Pelmeski Homemade Fethiye
        </p>

    </div>
    
</footer>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        var languageSelect = document.querySelector('select[name="language"]');

        languageSelect.addEventListener('change', function() {
            var chosenLanguage = this.value;
            var protocol = window.location.protocol;

            // Seçilen dile göre subdomaini belirle.
            var subdomain;
            switch (chosenLanguage) {
                case 'tr':
                    subdomain = 'tr.pelmeski.com.tr';
                    break;
                case 'en':
                    subdomain = 'en.pelmeski.com.tr';
                    break;
                case 'ru':
                    subdomain = 'ru.pelmeski.com.tr';
                    break;
                default:
                    subdomain = 'pelmeski.com.tr';
            }

            // Yeni URL'i oluştur.
            var newUrl = protocol + '//' + subdomain + window.location.pathname + window.location.search;

            // Yeni URL'e yönlendir.
            window.location.href = newUrl;
        });
    });
</script>

