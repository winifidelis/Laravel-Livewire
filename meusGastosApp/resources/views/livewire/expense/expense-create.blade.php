<div>
    <h3>Criar Registro</h3>
    <hr>

    <form action="" wire:submit.prevent="createExpense">
        <p>
            <labe>Descrição do registro</labe>
            <input type="text" name="description" class="shadow border-t" wire:model="description" />
        </p>

        <p>
            <labe>Valor do registro</labe>
            <input type="text" name="amount" class="shadow border-t" wire:model="amount" />
        </p>

        <p>
            <labe>Tipo do registro</labe>
            <select name="type" id="" class="shadow border-t" wire:model="type">
                <option value="">Selecione o tipo do registro: Entrada ou Saída</option>
                <option value="1">Entrada</option>
                <option value="2">Saída</option>
            </select>
        </p>
        <button type="submit">Criar Registro</button>
    </form>
</div>