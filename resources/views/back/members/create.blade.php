@extends('back._layouts.master')

@section('pageTitle', fragment('back.members.new'))

@section('breadcrumbs', Html::backToIndex('Back\MembersController@index'))

@section('content')
    <section>
        <div class="grid">
            <h1>{{ fragment("back.members.new") }}</h1>

            {!! Form::open([
                'url' => action('Back\MembersController@store'),
                'class' =>'-stacked'
            ]) !!}
                @include("back.members._partials.form")
            {!! Form::close() !!}
        </div>
    </section>
@endsection
