<div>
    <div class="d-flex flex-row-reverse p-3 text-white">
       <div class="btn-group">
        <div class="btn-item">
            <button class="btn btn-outline-dark mdi mdi-database-plus " wire:click="create"> Ajouter</button>
        </div>
        <div class="btn-item">
            <button class="btn btn-outline-success mdi mdi-format-strikethrough-variant" wire:click="createContrat">New Contrat</button>
        </div>
       </div>
    </div>
    <livewire:home.contrat-table>
    @include('livewire.components.add-edit-client')
    @include('livewire.components.view-client')
    @include('livewire.components.add-contrat')
</div>
