<div>
    {{-- tiap kali berhenti taip dia akan hantar ajax request --}}
    <input type="text" wire:model="name">

    <input type="checkbox" wire:model="loud">

    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Hai</option>
        <option>Hey</option>
    </select>

    {{-- guna lazy kalau nak hantar ajax bila tekan butang or tekan tempat lain --}}
    {{-- <input type="text" wire:model.lazy="name"> --}}
    {{ implode(', ', $greeting) }} {{ $name }} @if ($loud) ! @endif
</div>
