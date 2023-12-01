<script>
    window.onload = function() {
  // Belirtilen değere sahip radyo butonunu bul
  var radioButton = document.querySelector('input[type="radio"][value="48300"]');
  var radioButtonn = document.querySelector('input[type="radio"][value="228"]');
  var radioButtonnn = document.querySelector('input[type="radio"][value="4214"]');
  var radioButtonnnn = document.querySelector('input[type="radio"][value="Fethiye"]');

  // Radyo butonunun varlığını kontrol et
  if (radioButton) {
    // Radyo butonuna tıklamayı simüle et
    radioButton.click();
    radioButtonn.click();
    radioButtonnn.click();
    radioButtonnnn.click();
  }
};
</script>

<form wire:submit.prevent="saveAddress('{{ $type }}')"
      class="bg-white border border-gray-100 rounded-xl">
    <div class="flex items-center justify-between h-16 px-6 border-b border-gray-100">
        <h3 class="text-lg font-medium">
            {{ ucfirst($type) }} Details
        </h3>

        @if ($type == 'shipping' && $step == $currentStep)
            <label class="flex items-center p-2 rounded-lg cursor-pointer hover:bg-gray-50">
                <input class="w-5 h-5 text-green-600 border-gray-100 rounded"
                       type="checkbox"
                       value="1"
                       wire:model.defer="shippingIsBilling" />

                <span class="ml-2 text-xs font-medium">
                    Same as billing
                </span>
            </label>
        @endif

        @if ($currentStep > $step)
            <button class="px-5 py-2 text-sm font-medium text-gray-600 rounded-lg hover:bg-gray-100 hover:text-gray-700"
                    type="button"
                    wire:click.prevent="$set('currentStep', {{ $step }})">
                Edit
            </button>
        @endif
    </div>

    @if ($currentStep >= $step)
        <div class="p-6">
            @if ($step == $currentStep)
                <div class="grid grid-cols-6 gap-4">
                    <x-input.group class="col-span-3"
                                   label="First name"
                                   :errors="$errors->get($type . '.first_name')"
                                   required>
                        <x-input.text wire:model.defer="{{ $type }}.first_name"
                                      required />
                    </x-input.group>

                    <x-input.group class="col-span-3"
                                   label="Last name"
                                   :errors="$errors->get($type . '.last_name')"
                                   required>
                        <x-input.text wire:model.defer="{{ $type }}.last_name"
                                      required />
                    </x-input.group>

                    <x-input.group class="col-span-6 hidden"
                                   label="Company name"
                                   :errors="$errors->get($type . '.company_name')">
                        <x-input.text wire:model.defer="{{ $type }}.company_name" />
                    </x-input.group>

                    <x-input.group class="col-span-6 sm:col-span-3"
                                   label="Contact phone"
                                   :errors="$errors->get($type . '.contact_phone')">
                        <x-input.text wire:model.defer="{{ $type }}.contact_phone" />
                    </x-input.group>

                    <x-input.group class="col-span-6 sm:col-span-3 hidden"
                                   label="Contact email"
                                   :errors="$errors->get($type . '.contact_email')"
                                  >
                        <x-input.text wire:model.defer="{{ $type }}.contact_email"
                                      type="email"
                                    />
                    </x-input.group>

                    <div class="col-span-6">
                        <hr class="h-px my-4 bg-gray-100 border-none">
                    </div>

                
                

                    <x-input.group class="col-span-3 sm:col-span-2 hidden"
                                   label="Address line 3"
                                   :errors="$errors->get($type . '.line_three')">
                    </x-input.group>


                    
                    <x-input.group class="col-span-3 sm:col-span-2  hidden "
                                   label="Postcode"
                                   :errors="$errors->get($type . '.postcode')"
                               >
                  
                            
                                     <input   type="radio"   wire:model.defer="{{ $type }}.postcode" value="48300" >
                                     <input   type="radio"  wire:model.defer="{{ $type }}.country_id" value="228" >
                                     <input   type="radio"  wire:model.defer="{{ $type }}.state" value="4214" >
                                     <input   type="radio"  wire:model.defer="{{ $type }}.city" value="Fethiye" >

                    </x-input.group>

       
                    @lang('general.test')
                


             
          

                </br>
<x-input.group class="col-span-6 sm:col-span-3 " 
label="Muğla/Fethiye Bölgesinde Hizmet Vermekteyiz."
required
>


<select class="border border-gray-200 rounded-lg sm:text-sm"
required
wire:model.defer="{{ $type }}.line_two">
<option value>Mahalle Seçiniz</option>
<option value="Akarca Mah">Akarca Mah</option>
<option value="Babataşı Mah">Babataşı Mah</option>
<option value="Bozyer Mah">Bozyer Mah</option>
<option value="Cami Mah">Cami Mah</option>
<option value="Cumhuriyet Mah">Cumhuriyet Mah</option>
<option value="Çamköy Mah">Çamköy Mah</option>
<option value="Çatalarık Mah">Çatalarık Mah</option>
<option value="Çenger Mah">Çenger Mah</option>
<option value="Çiftlik Mah">Çiftlik Mah</option>
<option value="Eldirek Mah">Eldirek Mah</option>
<option value="Esenköy Mah">Esenköy Mah</option>
<option value="Faralya Mah">Faralya Mah</option>
<option value="Foça Mah">Foça Mah</option>
<option value="Göcek Mah">Göcek Mah</option>
<option value="Gökben Mah">Gökben Mah</option>
<option value="Gökçeovacık Mah">Gökçeovacık Mah</option>
<option value="İncirköy Mah">İncirköy Mah</option>
<option value="İnlice Mah">İnlice Mah</option>
<option value="Karaağaç Mah">Karaağaç Mah</option>
<option value="Karacaören Mah">Karacaören Mah</option>
<option value="Karaçulha Mah">Karaçulha Mah</option>
<option value="Karagedik Mah">Karagedik Mah</option>
<option value="Karagözler Mah">Karagözler Mah</option>
<option value="Karakeçililer Mah">Karakeçililer Mah</option>
<option value="Kargı Mah">Kargı Mah</option>
<option value="Kayaköy Mah">Kayaköy Mah</option>
<option value="Kesikkapı Mah">Kesikkapı Mah</option>
<option value="Kızılbel Mah">Kızılbel Mah</option>
<option value="Koruköy Mah">Koruköy Mah</option>
<option value="Menteşeoğlu Mah">Menteşeoğlu Mah</option>
<option value="Nif Mah">Nif Mah</option>
<option value="Ölüdeniz Mah">Ölüdeniz Mah</option>
<option value="Patlangıç Mah">Patlangıç Mah</option>
<option value="Pazaryeri Mah">Pazaryeri Mah</option>
<option value="Söğütlü Mah">Söğütlü Mah</option>
<option value="Taşyaka Mah">Taşyaka Mah</option>
<option value="Tuzla Mah">Tuzla Mah</option>
<option value="Yakacık Mah">Yakacık Mah</option>
<option value="Yanıklar Mah">Yanıklar Mah</option>
<option value="Yeni Mah">Yeni Mah</option>
<option value="Yeşilüzümlü Mah">Yeşilüzümlü Mah</option>


</select>
</x-input.group>

</br>

<x-input.group  
label="Address line 1"
class="col-span-6 sm:col-span-3 " 
:errors="$errors->get($type . '.line_one')"
required>
<x-input.text wire:model.defer="{{ $type }}.line_one"
   required />
</x-input.group>


                </div>
            @elseif($currentStep > $step)
                <dl class="grid grid-cols-1 gap-8 text-sm sm:grid-cols-2">
                    <div>
                        <div class="space-y-4">
                            <div>
                                <dt class="font-medium">
                                    Name
                                </dt>

                                <dd class="mt-0.5">
                                    {{ $this->{$type}->first_name }} {{ $this->{$type}->last_name }}
                                </dd>
                            </div>

                            @if ($this->{$type}->company_name)
                                <div>
                                    <dt class="font-medium">
                                        Company
                                    </dt>

                                    <dd class="mt-0.5">
                                        {{ $this->{$type}->company_name }}
                                    </dd>
                                </div>
                            @endif

                            @if ($this->{$type}->contact_phone)
                                <div>
                                    <dt class="font-medium">
                                        Phone Number
                                    </dt>

                                    <dd class="mt-0.5">
                                        {{ $this->{$type}->contact_phone }}
                                    </dd>
                                </div>
                            @endif

                            <div>
                                <dt class="font-medium hidden">
                                    Email
                                </dt>

                                <dd class="mt-0.5 ">
                                    {{ $this->{$type}->contact_email }}
                                </dd>
                            </div>
                        </div>
                    </div>

                    <div>
                        <dt class="font-medium">
                            Address
                        </dt>

                        <dd class="mt-0.5">
                            {{ $this->{$type}->line_one }}<br>
                            @if ($this->{$type}->line_two)
                                {{ $this->{$type}->line_two }}<br>
                            @endif
                            @if ($this->{$type}->line_three)
                                {{ $this->{$type}->line_three }}<br>
                            @endif
                            @if ($this->{$type}->city)
                            {{ $this->{$type}->city }}<br>

                            @endif
                            @if ($this->{$type}->state)
                          Muğla<br>

                            @endif
                            {{ $this->{$type}->postcode }}<br>
                            {{ $this->{$type}->country->native}}
                        </dd>
                    </div>
                </dl>
            @endif

            @if ($step == $currentStep)
                <div class="mt-6 text-right">
                    
                    <button class="px-5 py-3 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-500"
                            type="submit"
                            wire:key="submit_btn"
                            wire:loading.attr="disabled"
                            wire:target="saveAddress">
                        <span wire:loading.remove
                              wire:target="saveAddress">
                            Save Address
                        </span>

                        <span wire:loading
                              wire:target="saveAddress">
                            <span class="inline-flex items-center">
                                Saving

                                <x-icon.loading />
                            </span>
                        </span>
                    </button>
                </div>
            @endif
        </div>

    @endif
</form>
