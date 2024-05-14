@extends ('master')
@section('content')

<div class="body w-full bg-[#D6C9F2] grid justify-items-center">
  <div class="grid place-items-center">
    <div class="ms-20 grid mt-7 mb-40 bg-[#fafafa] rounded border-2 border-[#705abf] w-5/6"  >

      <div class="grid  ">
        <img class="text-center " src="img/etiquetas.png"
        width="400px">
      </div>
      <div class="max-w-sm p-6 mt-3 ms-2 mb-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#6D0FF2] dark:text-white">Quero contratar! </h5>
        </a>
        <p class="mb-3 font-normal text-[#F2B807] dark:text-gray-400">Aqui você encontrará profissionais qualificados, dedicados e prontos para atender as suas necessidades.</p>
        <a href="/registercontratante" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#B99AD9] rounded-lg hover:bg-[#F2B807] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#F2B807] dark:hover:bg-[#F2B807] dark:focus:ring-[#F2B807]">
          Registrar-se
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>


    <div class="max-w-sm p-6 ms-2 mb-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#6D0FF2] dark:text-white">Sou diarista!</h5>
        </a>
        <p class="mb-3 font-normal text-[#F2B807] dark:text-gray-400">Aqui você encontrará oportunidades de forma rápida, segura e estará no controle dos seus serviços.</p>
        <a href="/registerdiarista" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#B99AD9] rounded-lg hover:bg-[#F2B807] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-[#F2B807] dark:hover:bg-[#F2B807] dark:focus:ring-[#F2B807]">
            Registrar-se
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
    </div>




  </div>
</div>


@endsection
