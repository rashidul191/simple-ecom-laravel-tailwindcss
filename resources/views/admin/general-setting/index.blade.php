<x-admin-app-layout title="General Setting">
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('General Setting') }}
    </h2>
  </x-slot>

  <!-- Start Page-content -->
  <div class="bg-white p-5">
    <form action="{{ route('admin.general-setting.store') }}" method="post" enctype="multipart/form-data">
      @csrf   
      <img width="80" id="preview" src="{{ business_setting('logo') }}" alt="">
      <div class="flex flex-wrap items-center w-full">
        <div class="w-full md:w-1/2 p-1">
          <x-input-label class="!text-md" for="logo" :value="__('Logo')" />
          <x-text-input oninput="preview.src = window.URL.createObjectURL(this.files[0])" id="logo" class="block mt-1 w-full" type="file" name="logo" :value="old('logo')" />
          <x-input-error :messages="$errors->get('website_title')" class="mt-2" />
        </div>

        <div class="w-full md:w-1/2 p-1">
          <x-input-label class="!text-md" for="website_title" :value="__('Website Title')" />
          <x-text-input id="title" class="block mt-1 w-full" type="text" name="website_title" :value="business_setting('website_title')" />
          <x-input-error :messages="$errors->get('website_title')" class="mt-2" />
        </div>

        <div class="w-full md:w-1/2 p-1">
          <x-input-label class="!text-md" for="email" :value="__('Email')" />
          <x-text-input id="email" class="block mt-1 w-full " type="text" name="email" :value="business_setting('email')" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="w-full md:w-1/2 p-1">
          <x-input-label class="!text-md" for="phone" :value="__('Phone')" />
          <x-text-input id="phone" class="block mt-1 w-full " type="text" name="phone" :value="business_setting('phone')" />
          <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="w-full md:w-1/2 p-1">
          <x-input-label class="!text-md" for="whatsapp_number" :value="__('Whatsapp Number')" />
          <x-text-input id="whatsapp_number" class="block mt-1 w-full " type="text" name="whatsapp_number" :value="business_setting('whatsapp_number')" />
          <x-input-error :messages="$errors->get('whatsapp_number')" class="mt-2" />
        </div>

        <div class="w-full md:w-1/2 p-1">
          <x-input-label class="!text-md" for="address" :value="__('Address')" />
          <x-text-input id="phone" class="block mt-1 w-full " type="text" name="address" :value="business_setting('address')" />
          <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <div class="w-full md:w-1/2 p-1">
          <x-input-label class="!text-md" for="fb_link" :value="__('FB Link')" />
          <x-text-input id="fb_link" class="block mt-1 w-full " type="text" name="fb_link" :value="business_setting('fb_link')" />
          <x-input-error :messages="$errors->get('fb_link')" class="mt-2" />
        </div>

        <div class="w-full md:w-1/2 p-1">
          <x-input-label class="!text-md" for="youtube_link" :value="__('Youtube Link')" />
          <x-text-input id="youtube_link" class="block mt-1 w-full " type="text" name="youtube_link" :value="business_setting('youtube_link')" />
          <x-input-error :messages="$errors->get('youtube_link')" class="mt-2" />
        </div>

        <div class="w-full md:w-1/2 p-1">
          <x-input-label class="!text-md" for="instagram_link" :value="__('Instagram Link')" />
          <x-text-input id="instagram_link" class="block mt-1 w-full " type="text" name="instagram_link" :value="business_setting('instagram_link')" />
          <x-input-error :messages="$errors->get('instagram_link')" class="mt-2" />
        </div>

        <div class="w-full md:w-1/2 p-1">
          <x-input-label class="!text-md" for="invoice_prefix" :value="__('Invoice Prefix')" />
          <x-text-input id="invoice_prefix" class="block mt-1 w-full " type="text" name="invoice_prefix" :value="business_setting('invoice_prefix')" maxlength="3" />
          <x-input-error :messages="$errors->get('invoice_prefix')" class="mt-2" />
        </div>

        <div class="w-full md:w-1/2 p-1">
          <x-input-label class="!text-md" for="copy_right_text" :value="__('Copy Right Text')" />
          <x-text-input id="copy_right_text" class="block mt-1 w-full " type="text" name="copy_right_text" :value="business_setting('copy_right_text')" />
          <x-input-error :messages="$errors->get('copy_right_text')" class="mt-2" />
        </div>
      </div>

      <div class="w-full mt-3 text-right">
        <x-primary-button>
          <i class="fas fa-save mr-2"></i> {{ __('Save') }}
        </x-primary-button>

      </div>
    </form>
  </div>
  <!-- End Page-content -->
</x-admin-app-layout>