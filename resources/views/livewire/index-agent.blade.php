<div>
    <div class="d-flex flex-row-reverse p-3 text-white">
        <button class="btn btn-outline-dark mdi mdi-database-plus " wire:click="create"> Ajouter</button>
    </div>
    <livewire:home.agent-table>
    @include('livewire.components.add-edit-agent')
    @include('livewire.components.view-agent')
</div>