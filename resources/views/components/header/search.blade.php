<form {{ $attributes->merge(['class' => 'w-full relative']) }}
      action="{{ route('search.view') }}">
    <input name="term"
           type="search"
           placeholder="Search for products"
           class="w-full pl-10 text-sm border-2 border-gray-100 rounded-lg"
           value="{{ $this->term }}" />

    <button class="absolute p-2 text-gray-600 transition -translate-y-1/2 rounded-md left-1 top-1/2 hover:bg-gray-50">
        <span class="sr-only">Submit Search</span>

        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-4 h-4"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </button>
</form>
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

<form action="" method="POST">
    @csrf {{-- CSRF token eklemeyi unutmayın --}}
    <select name="language" onchange="this.form.submit()">
        <option value="tr" {{ app()->getLocale() == 'tr' ? 'selected' : '' }}>Türkçe</option>
        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
        <option value="ru" {{ app()->getLocale() == 'ru' ? 'selected' : '' }}>Русский</option>
    </select>
</form>