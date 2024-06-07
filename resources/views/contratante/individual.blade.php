@extends ('master')

@section ('content')

<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<main class="profile-page">
    <section class="relative block h-500-px">
      <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('../img/teste_bg.png');">
        <span id="blackOverlay" class="w-full h-full absolute "></span>
      </div>

    </section>
    <section class="relative py-16 bg-[#D6C9F2]">
      <div class="container mx-auto px-4">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
          <div class="px-6">
            <div class="flex flex-wrap justify-center">
              <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                <div class="relative">
                  @if ($diarista->foto_perfil)
                  <img src="{{ asset('storage/users/' . $diarista->foto_perfil) }}" alt="Profile Photo" class=" mt-2 rounded-xl w-8/12" />
              @else
                  <img src="../img/logo.png" alt="Default Avatar" class="rounded-xl w-8/12" />
              @endif
                </div>
              </div>
              <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                <div class="py-6 px-3 mt-32 sm:mt-0">
                    <button id="openModalBtn" class="bg-[#6D0FF2] active:bg-[#D6C9F2] uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                        Enviar proposta
                      </button>
              </div>
            </div>
            <div id="alert" class="hidden fixed top-4 right-4 bg-[#D6C9F2] border-t-4 border-[#6D0FF2] rounded-b text-teal-900 px-4 py-3 shadow-md z-50" role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg class="fill-current h-6 w-6 text-[#F2B807] mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold text-[#705ABF]">ATENÇÃO!</p>
                        <p class="text-sm text-[#705ABF]">É indicado primeiro entrar em contato com a diarista para combinarem a proposta.</p>
                    </div>
                </div>
            </div>

            <div id="myModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 ms-2">
                <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg w-full">
                  <div class="p-6">
                    <h3 class="text-lg leading-6 font-medium text-[#6D0FF2]">PROPOSTA DE SERVIÇO</h3>
                    <div class="mt-2">
                        <form action="{{ route('store.proposta', ['diarista_id' => $diarista->id]) }}" method="POST">
                        @csrf
                        @if ($errors->any())
                        <div class="bg-red-500 text-white p-3 rounded mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="mb-4">
                          <label class="block text-[#6D0FF2] text-sm font-bold mb-2" for="location">
                            Endereço do local para a limpeza
                          </label>
                          <input name="local_limpeza" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="location" type="text" placeholder="Digite a localização">
                        </div>
                        <div class="mb-4">
                            <label class="block text-[#6D0FF2] text-sm font-bold mb-2" for="cep">
                              CEP
                            </label>
                            <input name="cep_local" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cep" type="text" placeholder="">
                          </div>
                          <div class="mb-4">
                            <label class="block text-[#6D0FF2] text-sm font-bold mb-2" for="data_limpeza">
                              Data da limpeza
                            </label>
                            <input name="data_limpeza" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="data_limpeza" type="date" placeholder="">
                          </div>
                        <div class="mb-4">
                          <label class="block text-[#6D0FF2] text-sm font-bold mb-2" for="hours">
                            Quantidade de horas:
                          </label>
                          <input name="qtd_horas_acordadas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="hours" type="number" placeholder="Insira a quantidade de horas acordadas">
                        </div>
                        <div class="mb-4">
                            <label class="block text-[#6D0FF2] text-sm font-bold mb-2" for="valor">
                              Valor acordado
                            </label>
                            <input name="valor_acordado" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="valor" type="number" placeholder="R$">
                          </div>
                          <div class="mb-4">
                            <label class="block text-[#6D0FF2] text-sm font-bold mb-2" for="contato">
                              Telefone para contato
                            </label>
                            <input name="contato" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="contato" type="text">
                          </div>
                          <div class="mb-4">
                            <label class="block text-[#6D0FF2] text-sm font-bold mb-2" for="contato">
                              Outra opção de telefone
                            </label>
                            <input name="segundo_contato" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="segundo_contato" type="text">
                          </div>
                        <div class="flex items-center justify-between">
                          <button id="closeModalBtn" class="bg-[#6D0FF2] hover:bg-[#B99AD9] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Fechar
                          </button>
                          <button class="bg-[#6D0FF2] hover:bg-[#B99AD9] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Enviar
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-1">
              <div class="flex justify-center py-4 lg:pt-4 pt-8">
                <div class="mr-4 p-3 text-center">
                  <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600"></span><span class="text-sm text-blueGray-400"></span>
                </div>
                <div class="mr-4 p-3 text-center">
                  <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600"></span><span class="text-sm text-blueGray-400"></span>
                </div>
                <div class="lg:mr-4 p-3 text-center">
                  <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600"></span><span class="text-sm text-blueGray-400"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center mt-12">

            <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700">
                {{$diarista->user->name }} {{$diarista->user->lastname }}
            </h3>
            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
              <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
              {{$diarista->cidade}}, {{$diarista->estado}}
            </div>
            <div class="grid grid-cols-4 gap-3">
                <div class="text-start ms-1">
                    <i class="fa-solid fa-hand-holding-dollar me-2"></i> Valor/diária: {{$diarista->valor_diaria}}
                </div>
                <div class="text-start ms-1">
                    <i class="fa-solid fa-hand-holding-dollar me-2"></i> Valor/hora: {{$diarista->valor_hora}}
                </div>
                <div class="text-start ms-1">
                    <p>Disponível no fim de semana:</p>
                    <p>{{$diarista->disponivel_fds}}</p>
                </div>
                <div class="text-start ms-1">
                    <i class="fa-solid fa-phone me-2"></i>{{$diarista->telefone}}
                </div>
              </div>
          </div>
          <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
            <div class="flex flex-wrap justify-center">
              <div class="w-full lg:w-9/12 px-4">
                <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                    {{$diarista->descricao}}
                </p>
                <a href="/home" class="font-normal text-pink-500">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="relative pt-8 pb-6 mt-8">

</footer>
  </section>
</main>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const myModal = document.getElementById('myModal');

    if (openModalBtn && closeModalBtn && myModal) {
        openModalBtn.addEventListener('click', () => {
            myModal.classList.remove('hidden');
        });

        closeModalBtn.addEventListener('click', () => {
            myModal.classList.add('hidden');
        });

        // Código para o alerta (caso necessário)
        openModalBtn.addEventListener('click', function () {
            document.getElementById('myModal').classList.remove('hidden');
            const alert = document.getElementById('alert');
            if (alert) {
                alert.classList.remove('hidden');
                setTimeout(function () {
                    alert.classList.add('hidden');
                }, 10000);
            }
        });
    }
});


  </script>

@endsection
