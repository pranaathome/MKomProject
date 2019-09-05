@extends('template')

@section('main')
    <div id="mahasiswa">
        <h2>Edit Form Online</h2>

        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) !!}
            @include('user.form_surat_online', ['submitButtonText' => 'Update'])
        {!! Form::close() !!}

    </div>
@stop
