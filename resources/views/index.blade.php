@extends('templates.layout')
@section('title', 'Index')
@section('conteudo')


<div class="w-full max-w-lg p-4 bg-white rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 border border-black">
    <form class="space-y-6" action="#" method="post">
    @csrf
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Conversor</h5>
        <div>
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Digite um numero e descubra seu valor em romano</label>
            <input type="number" name="real" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required />
        </div>
        <div class="flex items-start">

            @if (session('itensConvertidos'))
                @php
                    $itensConvertidos = session('itensConvertidos');
                @endphp

               <label for="" class="text-red-500">Resp:</label> <p class="ml-1">{{ $itensConvertidos[0] }}</p>
            @endif

        </div>
        <div>
            <label for="" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Digite um algorismo em romano e descubra seu valor em real</label>
            <input type="text" name="romano" id="" placeholder="Digite em maiusculo: 'XIX'" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
        </div>
        <div class="flex items-start">

            @if (session('itensConvertidos'))
                @php
                    $itensConvertidos = session('itensConvertidos');
                @endphp
                <label for="" class="text-red-500">Resp:</label> <p class="ml-1">{{ $itensConvertidos[1] }}</p>
                
            @endif
        </div>
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Converter</button>
    </form>
</div>


@endsection