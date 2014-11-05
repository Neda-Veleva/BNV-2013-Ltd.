@extends('layouts.master')

@section('head')
    @parent
    <title>BNV2013 - Контакти</title>
@stop

@section('content')
<h1>Контакти: </h1>
<div class="map">
    <div>
        <iframe width="400" height="350" frameborder="0" scrolling="no" src="http://www.bgmaps.com/link/map/DE73C271387B37DAF7BBB54DA5B2EF03"></iframe>
    </div>
    <p>
        Телефон за връзка: 02/482 5910 
        <br/>
        GSM: 0876 180 999 
        <br/>
        Адрес: гр. София, кв. Стрелбище        
    </p>    
</div>

<p>
    Моля Ви за допълнителни въпроси и коментари да използвате формата за обратна връзка.
    <br />
    Благодарим Ви предварително!
</p>
<h1>Форма за обратна връзка: </h1>
<div>
    {{ Form::open(['url' => '/feedback']) }} 
        <div>
            {{ Form::label('name', 'Име: ') }}
            <br/>
            {{ Form::text('name') }}
        </div>
        <br/>
        <div>
            {{ Form::label('phone', 'Телефонен номер: ') }}
            <br/>
            {{ Form::text('phone') }}
        </div>
        <br/>
        <div>
            {{ Form::label('email', 'Електронен адрес: ') }}
            <br/>
            {{ Form::email('email') }}
        </div>
        <br/>
        <div>
            {{ Form::label('subject', 'Относно: ') }}
            <br/>
            {{ Form::text('subject') }}
        </div>
        <br/>
        <div>
            {{ Form::label('message', 'Съобщение: ') }}
            <br/>
            {{ Form::textarea('name') }}
        </div>
        <br/>
        <div>
            {{ Form::submit('Изпрати')}}
        </div>
    {{ Form::close()}} 
</div>
@stop