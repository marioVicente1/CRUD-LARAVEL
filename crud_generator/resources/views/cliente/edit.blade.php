@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Cliente
@endsection

@section('content')
    <section>
        <div>
            <div >

                @includeif('partials.errors')

                <div >
                    <div >
                        <span >{{ __('Update') }} Cliente</span>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('clientes.update', $cliente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{-- @csrf --}}

                            @include('cliente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
