@extends('layouts.template')


<div>
    {{$card -> title}}

    <button class="btn btn-success text-white" wire:click="save" wire:target="save">Actualizar</button>
</div>

