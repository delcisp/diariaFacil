@extends('master')

@section('content')


<x-validation-errors class="mb-4" />

<div class="body bg-[#D6C9F2] flex justify-center items-center min-h-screen">

    <form action="{{route('store.profilediarista')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid place-items-center">
    <div class=" grid mt-6 bg-[#fafafa] rounded border-2 border-[#705abf] w-5/6 "  >
      <div class="mx-2 border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

            <div class="col-span-full">
                <p class="mx-2 text-center text-[#6D0FF2] text-3xl ">Olá! Aqui você irá falar mais sobre você e construir o seu perfil! Após preencher seus dados seu perfil será enviado para análise.</p>
            </div>
            <div class="col-span-full">
              <label for="foto_perfil" class="block text-sm font-medium leading-6 text-[#6D0FF2]">Foto de perfil</label>
              <div class="@error('foto_perfil') border border-danger rounded-3 @enderror">
                  <input class="form-control" type="file" placeholder="Foto" id="foto_perfil" name="foto_perfil">
              </div>
              @error('foto_perfil')
                  <span class="text-red-600">{{ $message }}</span>
              @enderror
          </div>

        </div>
      </div>

      <div class="mx-2 border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-[#6D0FF2]">INFORMAÇÕES PESSOAIS</h2>
        <p class="mt-1 text-sm leading-6 text-[#B99AD9]">Use o seu endereço atual.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

          <div class="sm:col-span-2">
            <label for="idade" class="block text-sm font-medium leading-6 text-[#6D0FF2]"  value="{{ __('Idade')}}" >Idade</label>
            <div class="mt-2">
              <input type="number" name="idade" id="idade" autocomplete="idade" :value="old('idade')" required autofocus class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="postal-code" class="block text-sm font-medium leading-6 text-[#6D0FF2]" value="{{ __('Sexo')}}">Sexo</label>
            <div class="mt-2">
              <select class="block appearance-none text-[#6d0ff2]  w-full bg-white border border-[#6d0ff2] hover:border[#6d0ff2] px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="sexo" :value="old('sexo')" required autofocus>
                <option value="Selecione">Selecione</option>
                <option value="Feminino">Feminino</option>
                <option value="Masculino">Masculino</option>
                <option value="Outros">Outros</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>
            </div>
        </div>

          <div class="sm:col-span-2">
            <label for="cpf" class="block text-sm font-medium leading-6 text-[#6D0FF2]" value="{{ __('Cpf')}}">CPF</label>
            <div class="mt-2">
              <input type="text" name="cpf" id="cpf" autocomplete="cpf" :value="old('cpf')" required autofocus class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="telefone" class="block text-sm font-medium leading-6 text-[#6D0FF2]" value="{{ __('Telefone')}}">Telefone</label>
            <div class="mt-2">
              <input type="text" name="telefone" id="telefone" autocomplete="telefone" :value="old('telefone')" required autofocus  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="segundo_telefone" class="block text-sm font-medium leading-6 text-[#6D0FF2]" value="{{ __('segundo_telefone')}}">Outro telefone</label>
            <div class="mt-2">
              <input type="text" name="segundo_telefone" id="segundo_telefone" autocomplete="segundo_telefone" :value="old('segundo_telefone')" required autofocus  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="col-span-3">
            <label for="rua" class="block text-sm font-medium leading-6 text-[#6D0FF2]" value="{{ __('Rua')}}">Endereço</label>
            <div class="mt-2">
              <input type="text" name="rua" id="rua" autocomplete="rua" :value="old('rua')" required autofocus  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="sm:col-span-2 sm:col-start-1">
            <label for="cidade" class="block text-sm font-medium leading-6 text-[#6D0FF2]" value="{{ __('Cidade')}}">Cidade</label>
            <div class="mt-2">
              <input type="text" name="cidade" id="cidade" autocomplete="cidade" :value="old('cidade')" required autofocus  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="estado" class="block text-sm font-medium leading-6 text-[#6D0FF2]" value="{{ __('Estado')}}">Estado</label>
            <div class="mt-2">
              <input type="text" name="estado" id="estado" autocomplete="estado" :value="old('estado')" required autofocus class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="cep" class="block text-sm font-medium leading-6 text-[#6D0FF2]" value="{{ __('Cep')}}">CEP</label>
            <div class="mt-2">
              <input type="text" name="cep" id="cep" autocomplete="cep" :value="old('cep')" required autofocus class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="valor_hora" class="block text-sm font-medium leading-6 text-[#6D0FF2]" value="{{ __('valor_hora')}}">Valor hora (estimado)</label>
            <div class="mt-2">
              <input type="number" name="valor_hora" id="valor_hora" autocomplete="valor_hora" :value="old('valor_hora')" required autofocus  placeholder="   R$"  class="block w-full rounded-md border-0 py-1.5  text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="valor_diaria" class="block text-sm font-medium leading-6 text-[#6D0FF2]" value="{{ __('valor_diaria')}}">Valor diária (estimado)</label>
            <div class="mt-2">
              <input type="number" name="valor_diaria" id="valor_diaria" autocomplete="valor_diaria" :value="old('valor_diaria')" required autofocus placeholder="   R$"  class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="postal-code" class="block text-sm font-medium leading-6 text-[#6D0FF2]" value="{{ __('disponivel_fds')}}">Está disponível aos fins de semana?</label>
            <div class="mt-2">
              <select class="block appearance-none w-full bg-white border border-[#6d0ff2] text-[#6D0FF2] hover:border[#6d0ff2] px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="disponivel_fds" :value="old('disponivel_fds')" required autofocus>
                <option value="Selecione">Selecione</option>
                <option value="Sim, sábado e domingo.">Sim, sábado e domingo.</option>
                <option value="Não">Não</option>
                <option value="Apenas no sábado">Apenas no sábado</option>
                <option value="Apenas no domingo">Apenas no domingo</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>
            </div>
        </div>


          <div class="sm:col-span-4">
            <label for="linkedin" class="block text-sm font-medium leading-6 text-[#6D0FF2]"  value="{{ __('Linkedin')}}">Perfil do Linkedin (opcional)</label>
            <div class="mt-2">
              <input id="linkedin" name="linkedin" type="text" autocomplete="linkedin" :value="old('linkedin')" required autofocus class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="col-span-full">
            <label for="descricao" class="block text-sm font-medium leading-6 text-[#6D0FF2]" value="{{ __ ('descricao')}}" >Faça uma descrição sobre si</label>
            <div class="mt-2">
              <textarea id="descricao" name="descricao" rows="3" :value="old('descricao')" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
            <p class="mt-3 text-sm leading-6 text-[#B99AD9]">Fale sobre suas habilidades técnicas (ex: limpeza, organização, cuidado com roupas), socioemocionais (ex: responsabilidade, pontualidade, cordialidade), e sua experiência profissional (ex: anos de trabalho, tipos de ambientes em que já trabalhou).</p>
          </div>
          <div class="col-span-full" style="resize: none;">
            <label for="experiencias" class="block text-sm font-medium leading-6 text-[#6D0FF2]"  value="{{ __('Experiencias')}}" >Fale sobre suas experiências anteriores</label>
            <div class="mt-2">
              <textarea id="experiencias" name="experiencias" rows="3" :value="old('experiencias')" required autofocus   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
            <p class="mt-3 text-sm leading-6 text-[#B99AD9]">Fale sobre experiências com os serviços que já prestou, casas em que trabalhou.</p>
          </div>
          <div class="col-span-full">
            <label for="especialidades" class="block text-sm font-medium leading-6 text-[#6D0FF2]" value="{{ __('Especialidades')}}" >Quais são as suas especialidades?</label>
            <div class="mt-2">
              <textarea id="especialidades" name="especialidades" rows="3" :value="old('especialidades')" required autofocus class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
            <p class="mt-3 text-sm leading-6 text-[#B99AD9]">Fale sobre suas especialidades (passar roupa, cozinhar, cuidar de animais, etc.)</p>
          </div>
          <div class="col-span-full">
            <label for="pqcontratar" class="block text-sm font-medium leading-6 text-[#6D0FF2]" value="{{ __('Pqcontratar')}}">Por que devem contratar seus serviços?</label>
            <div class="mt-2">
              <textarea id="pqcontratar" name="pqcontratar" rows="3" :value="old('pqcontratar')" required autofocus class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
            <p class="mt-3 text-sm leading-6 text-[#B99AD9]">Essa é a hora de vender o seu peixe!</p>
          </div>

        </div>

      </div>

      <div class="col-span-full mx-2">
        <input type="checkbox" class="checkbox ms-2" />
        <label class="text-[#6D0FF2]" for="checkbox">Aceito os termos e condições de serviço. </label>
      </div>
      <div class="mt-6 flex items-center justify-end mx-3 mb-2 gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __('Registrar') }}</button>
      </div>
      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
      <div class="mt-4">
          <x-label for="terms">
              <div class="flex items-center">
                  <x-checkbox name="terms" id="terms" required />

                  <div class="ms-2">
                      {!! __('I agree to the :terms_of_service and :privacy_policy', [
                              'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                              'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                      ]) !!}
                  </div>
              </div>
          </x-label>
      </div>
  @endif
    </div>
</div>
  </form>
</div>

@endsection


