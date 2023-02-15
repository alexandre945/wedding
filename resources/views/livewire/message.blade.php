<div>
    <div class="container bg-gray-400 max-w-full">
        <div class="grid grid-cols-1  lg:items-center">
            <div class="flex-grow text-center">
                <h3 class="text-center p-4 underline">DEIXE SUA MENSAGEM</h3>
                <form wire:submit.prevent="create" method="POST" autocomplete="off">
                    @csrf
                    <div class="lg:items-center p-3 ">
                            @if(session()->has('sucesso'))
                              <div class="text-purple-900 border-2 border-indigo-600 rounded bg-green-400  md:text-center">
                                <p class="text-white">{{session('sucesso')}}</p>
                              </div>
                            @endif
                             <div class="apace-y-4">
                                <label class="block">Nome</label>
                                {{-- {{$name}} --}}
                                <input type="text" class="rounded bg-green-300 p-2" wire:model="name" id="name">
                             </div>
                            <div class="text-red-500">
                                @error('name')
                                {{$message}}
                                @enderror
                            </div>
                    </div>
                    <div class="apace-y-4">
                        <label for="#" class="block">Parentesco</label>
                                    {{-- {{$kin}} --}}
                        <input type="text" class=" rounded bg-green-300 p-2" placeholder="exemplo: prima da noiva" wire:model="kin" id="kin">
                           <div class="text-red-500">
                                @error('kin')
                                {{$message}}
                                @enderror
                           </div>
                    </div>
                    <div class="apace-y-4">
                        <label for="#" class="block">Mensagem</label>
                        <textarea wire:model="message" class="rounded bg-green-300 p-2" id="" cols="20" rows="6"></textarea>
                        <div class="text-red-500">
                                @error('message')
                                {{$message}}
                                @enderror    
                        </div>
                    </div>
                    <div class="justify-center">
                        <button type="submit" class="text-white  cursor-pointer bg-blue-700 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">ENVIAR</button>
                    </div>
                </form>
                    @foreach ($key as $item)
                        <div class="justify-center">
                            <div class="flex items-center bg-green-300 shadow-xl mb-1 rounded-md border border-indigo-600 m-10 p-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                    </svg>
                                <p class="ml-10 md:ml-96">{{$item->name}}</p>
                                <p class="pl-4">{{$item->kin}}</p>
                            </div>
                            <div class="bg-indigo-400 mt-1 shadow-xl p-3 rounded-md border-2 border-indigo-600 m-10  text-justify">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 
                                        2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 
                                        00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-
                                        1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621
                                         1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"
                                          />
                                    </svg>
                                    <p class="text-left my-4 break-all">{{$item->message}}</p> 
                            </div>
                        </div>
                    @endforeach
            </div>
                {{$key->links()}}
        </div>
    </div>
</div>
