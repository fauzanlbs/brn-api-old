<input id="terms" name="terms" type="checkbox" class="w-5 h-5 text-blue-500 border-gray-300 rounded focus:ring-blue-300" style="transition: all 0.15s ease 0s;">
<label for="terms" class="ml-2 text-sm text-gray-700">
    {!! __('Saya setuju dengan :terms_of_service dan :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline hover:text-blue-500">'.__('Persyaratan Layanan').'</a>',
    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline hover:text-blue-500">'.__('Kebijakan Privasi').'</a>',
    ]) !!}
</label>
