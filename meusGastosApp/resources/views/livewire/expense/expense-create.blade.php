<div class="py-4">
    <x-slot name="header">
        Criar registro
    </x-slot>

    @if(session()->has('message'))
        <h3>{{session('message')}}</h3>
    @endif

    <form action="" wire:submit.prevent="createExpense">
        <p>
            <labe>Descrição do registro</labe>
            <input type="text" name="description" class="shadow border-t" wire:model="description" />

            @error('description')
                <h5>{{$message}}</h5>
            @enderror
        </p>

        <p>
            <labe>Valor do registro</labe>
            <input type="text" name="amount" class="shadow border-t" wire:model="amount" />

            @error('amount')
                <h5>{{$message}}</h5>
            @enderror
        </p>

        <p>
            <labe>Tipo do registro</labe>
            <select name="type" id="" class="shadow border-t" wire:model="type">
                <option value="">Selecione o tipo do registro: Entrada ou Saída</option>
                <option value="1">Entrada</option>
                <option value="2">Saída</option>
            </select>

            @error('type')
                <h5>{{$message}}</h5>
            @enderror
        </p>
        <button type="submit">Criar Registro</button>
    </form>
</div>