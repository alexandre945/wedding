<div>
    <div class="container bg-gray-400">
        <div class="grid grid-cols-1  lg:items-center">
            <div class="flex-grow text-center">
                <h3 class="text-center p-4">DEIXE SUA MENSAGEM</h3>
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
                            <div class="error">
                                @error('name')
                                {{$message}}
                                @enderror
                            </div>
                    </div>
                    <div class="apace-y-4">
                        <label for="#" class="block">Parentesco</label>
                                    {{-- {{$kin}} --}}
                        <input type="text" class=" rounded bg-green-300 p-2" placeholder="exemplo: prima da noiva" wire:model="kin" id="kin">
                           <div class="error">
                                @error('kin')
                                {{$message}}
                                @enderror
                           </div>
                    </div>
                    <div class="apace-y-4">
                        <label for="#" class="block">Mensagem</label>
                        <textarea wire:model="message" class="rounded bg-green-300 p-2" id="" cols="20" rows="6"></textarea>
                        <div class="error">
                                @error('message')
                                {{$message}}
                                @enderror    
                        </div>
                    </div>
                    <div class="justify-center">
                        <button type="submit" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">ENVIAR</button>
                    </div>
                </form>
                    @foreach ($key as $item)
                        <div class="text-center">
                            <div class="flex-wrap bg-green-300 shadow-xl mb-1 rounded-md border border-indigo-600 m-10">
                            <div class=" relative ml-20">
                       
                            </div>
                                <p class="">{{$item->name}}
                                </p>
                                <p class="">{{$item->kin}}</p>
                            </div>
                            <div class="flex-grow  relative bg-indigo-400 mt-1 shadow-xl p-6 rounded-md border-2 border-indigo-600 m-10">
                                <p>{{$item->message}}</p>
                            </div>
                        </div>
                    @endforeach
            </div>
                {{$key->links()}}
        </div>
    </div>
</div>
