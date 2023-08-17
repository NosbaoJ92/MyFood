@extends('principal')
@section('titulo', 'Habibs')
@section('conteudo')
<div class="flex flex-col w-full mt-36">
    <img src="/src/img/habibscard.png" alt="" class="rounded">
    <div class="sup flex w-full items-center justify-between mt-5  max-[1300px]:justify-around">
        <div class="card_nome flex items-center gap-3">
            <img src="/src/img/habibs.webp" alt="" class="rounded-full w-20">
            <h1 class="text-4xl font-medium max-[768px]:text-xl max-[850px]:text-2xl ">Habib's - São Vicente</h1>
            <div class="flex gap-1 items-center justify-center">
                <svg class="star w-3" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#d6ae57" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265 C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642 c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854 c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72 c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"></path> </g></svg>
                <p class="text-yellow-500 font-bold">4.6</p>
            </div>
        </div>
        <div class="vermais flex items-center gap-8">
            <a href="#" class="text-rose-600 font-bold text-medium hover:text-red-500">Ver mais</a>
            <p class="text-stone-500">|</p>
            <div class="flex gap-2 items-center">
                <svg fill="#c7c7c7" height="15px" width="15px" version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 256" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M252,128c0,68.4-55.6,124-124,124S4,196.4,4,128S59.6,4,128,4S252,59.6,252,128z M174.3,155.6c0-26-27.8-33.4-39.8-36.8 c-22.7-6.3-24.6-14.5-24.3-18.7c0.8-10.2,12-12.7,22.4-10.5c8.2,1.8,16.6,6.6,21.3,10.3l14.9-17.4c-7.3-5-16.7-11.5-30.4-14.1V51.5 h-21.7v16.3c-21,1.6-35,14.8-35,32.9c0,17.7,12.8,26,25.6,32.2c10.7,5.1,40.5,10.4,38.8,23.9c-0.9,7.3-8.7,12.7-21.6,11.1 c-11.2-1.4-23.2-10.8-23.2-10.8l-16.4,16.3c9.9,8,20.4,13,31.8,15.3v15.9h21.7v-15.1C159.1,187.2,174.3,173.1,174.3,155.6z"></path> </g></svg>
            <p class="text-stone-500 text-xs">Pedido mínimo R$ 10,00</p>
            </div>
        </div>
    </div>
    <div class="buscar flex justify-center w-full items-center gap-8 pt-5">
        <input type="text relative" placeholder="Endereço de entrega e número" class="w-full h-16 border rounded-md pl-9 max-[1502px]:w-11/12">
    </div>
    

    <div class="destaques flex flex-col">
        <h1 class="text-2xl font-medium mb-4 mt-6 max-[1301px]:self-center">Destaques</h1>
        <div class="opcoes flex w-full justify-evenly mb-5 gap-3 max-[1300px]:flex-wrap">
            <a href="#" class="cardspastelao border-stone-300 hover:border-stone-400 border rounded-xl flex h-44 border-solid shadow-md">
                <div class="flex w-full justify-evenly p-4">
                    <div class="detalhes flex flex-col justify-between w-8/12 h-full">
                        <div class="tituloDescricao">
                            <h2 class="font-semibold ">Compre 3 minikibes com cremely e leve 6</h2>
                            <p class="text-stone-500 text-xs">A versão mini do tradicional kibe do Habib’s recheado com queijo cremely. Pague 3 Leve 6, incrível né!</p>
                        </div>
                        <div class="preco">
                        <p class="text-emerald-500">R$ 14,70</p>
                        <p class="text-gray-400 line-through">R$ 29,40</p>
                        </div>
                    </div>
                    <div class="img w-4/12 h-auto flex relative">
                        <img src="/src/img/opc1-hbb.png" alt="" class="absolute self-center right-0 rounded-xl">
                    </div>
                </div>
            </a>           




            <a href="#" class="cardspastelao border-stone-300 hover:border-stone-400 border rounded-xl flex h-44 border-solid shadow-md">
                <div class="flex w-full justify-evenly p-4">
                    <div class="detalhes flex flex-col justify-between w-8/12 h-full">
                        <div class="tituloDescricao">
                            <h2 class="font-semibold ">Compre 1 Super Batata Cheddar e Bacon e Leve 2</h2>
                            <p class="text-stone-500 text-xs">Batata frita acompanhada de queijo cheddar e cubos de bacon. Que tal aproveitar essa promoção Pague 1 Leve 2, incrível né!</p>
                        </div>
                        <div class="preco">
                        <p class="text-emerald-500">R$ 19,90</p>
                        <p class="text-gray-400 line-through">R$ 38,80</p>
                        </div>
                    </div>
                    <div class="img w-4/12 h-auto flex relative">
                        <img src="/src/img/opc2-hbb.png" alt="" class="absolute self-center right-0 rounded-xl">
                    </div>
                </div>
            </a>           
        </div>


        <div class="opcoes flex w-full justify-evenly flex-wrap mb-5 gap-3 ">
            <a href="#" class="cardspastelao border-stone-300 hover:border-stone-400 border rounded-xl flex h-44 border-solid shadow-md">
                <div class="flex w-full justify-evenly p-4">
                    <div class="detalhes flex flex-col justify-between w-8/12 h-full">
                        <div class="tituloDescricao">
                            <h2 class="font-semibold ">Compre 5 Minichurros de Doce de Leite e Leve 10</h2>
                            <p class="text-stone-500 text-xs">Que tal um delicioso Minichurros pra sobremesa? O recheio é doce de leite argentino, apaixonante. Pague 5 Leve 10, incrível né!</p>
                        </div>
                        <div class="preco">
                            <p class="text-emerald-500">R$ 9,95</p>
                            <p class="text-gray-400 line-through">R$ 19,90</p>
                        </div>
                    </div>
                    <div class="img w-4/12 h-auto flex relative">
                        <img src="/src/img/opc3-hbb.png" alt="" class=" absolute self-center right-0 rounded-xl">
                    </div>
                </div>
            </a>           
            <a href="#" class="invisible  cardspastelao border-stone-300 hover:border-stone-400 border rounded-xl flex h-44 border-solid shadow-md  max-[1300px]:h-0">
            </a>           
        </div>
    </div>




    <div class="pastelao w-12/12 flex flex-col">
        <h1 class="text-2xl font-medium mb-4 mt-6 max-[1301px]:self-center">Tudo a partir de R$4,99</h1>

        <div class="opcoes flex w-full flex-wrap mb-5 gap-3 max-[1301px]:justify-center">
            <a href="#" class="cardspastelao border-stone-300 hover:border-stone-400 border rounded-xl flex h-44 border-solid shadow-md">
                <div class="flex w-full justify-evenly p-4">
                    <div class="detalhes flex flex-col justify-between w-8/12 h-full">
                        <div class="tituloDescricao">
                            <h2 class="font-semibold ">4 Bib'sfihas Clássicas</h2>
                            <p class="text-stone-500 text-xs">Elas são tão saborosas que não dá para comer só uma! Vem pedir 4 Bib'sfihas Clássicas: Carne, Frango ou Calabresa com Mussarel...</p>
                        </div>
                        <div class="preco">
                            <p class="text-gray-600">R$ 13,92</p>
                        </div>
                    </div>
                    <div class="img w-4/12 h-auto flex relative">
                        <img src="/src/img/lnc1-hbb.png" alt="" class=" absolute self-center right-0 rounded-xl">
                    </div>
                </div>
            </a>           
        </div>
    </div>
@stop