<th wire:click="setorderField('{{$name}}')">
    {{$slot}}
    @if ($visible)
        @if ($direction=="ASC")
            <span class="bi bi-arrow-up-right-circle"></span>
        @else
            <span class="bi bi-arrow-down-circle-fill"></span>
        @endif
    @endif
</th>