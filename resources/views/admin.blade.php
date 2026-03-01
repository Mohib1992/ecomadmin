@extends('appshell::layouts.private')

@section('title')
    {{ __('Admin Dashboard') }}
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <x-appshell::card-with-icon icon="user" type="info">
                    {{ format_price($totalRevenue) }}
                    <x-slot:subtitle>
                        {{ __('Total Sell') }}
                    </x-slot:subtitle>
                </x-appshell::card-with-icon>
            </div>
            <div class="col">
                <x-appshell::card-with-icon icon="order" type="info">
                    {{ $totalOrder }}
                    <x-slot:subtitle>
                        {{ __('Total Orders') }}
                    </x-slot:subtitle>
                </x-appshell::card-with-icon>
            </div>
            <div class="col">
                <x-appshell::card-with-icon icon="product" type="success">
                    {{ $totalProduct }}
                    <x-slot:subtitle>
                        {{ __('Total Product') }}
                    </x-slot:subtitle>
                </x-appshell::card-with-icon>
            </div>
            <div class="col">
                <x-appshell::card-with-icon icon="user">
                        {{ $totalCustomer }}
                    <x-slot:subtitle>
                        {{ __('Total Customer') }}
                    </x-slot:subtitle>
                </x-appshell::card-with-icon>
            </div>
        </div>
    </div>
@endsection