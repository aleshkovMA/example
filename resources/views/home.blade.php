@extends('patern')

@section('title')Главная@endsection

@section('main_content')
<p>Тут буду отображаться публичные пасты, создаваться новые пасты, а так же отображаться пасты авторизированных пользователей </p>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" action="/check">
    @csrf
    <div class="content__title -no-border">Текст "Пасты"</div>
        <textarea name="paste" id="paste" placeholder="Введите текст" class="form-control"></textarea>
    <div class="content__title -no-border">
        Ограничение по времени
    </div>
        <select name="expirationTime" id="expirationTime" class="form-control" size="1">
            <option value="10">10 минут</option>
            <option value="60">1 час</option>
            <option value="180">3 часа</option>
            <option value="1440">1 день</option>
            <option value="10080">1 неделя</option>
            <option value="43200">1 месяц</option>
            <option value="unlimited">Без ограничения</option>
        </select>
    <div class="content__title -no-border">
        Ограничение доступа
    </div>    
        <select name="access" id="access" class="form-control" size="1">
            <option value="public">Публичный</option>
            <option value="unlisted">По ссылке</option>
            <option value="private">Приватный</option>
        </select><br>
        <input type="submit" class="btn btn-success" value="Подтвердить">
    </form>
@endsection