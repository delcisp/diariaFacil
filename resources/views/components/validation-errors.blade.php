@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">{{ __('Opa! Algo deu errado. E-mail ou senha inválidos.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)

            @endforeach
        </ul>
    </div>
@endif
