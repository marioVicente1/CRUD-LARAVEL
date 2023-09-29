@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Cliente
@endsection

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title" class="text-primary">
                            {{ __('Client:') }} {{$cliente->name}} 
                        </span>
                       
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>Orders</th>
                                    <th>Date </th>
                            </thead>
                            <tbody>
                                @foreach($ordenes as $orden)
                                <tr>
                                    <td> {{ $orden->precio }} </td>
                                    <td> {{ $orden->created_at }} </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endsection
            </div>
        </div>
    </div>
</div>