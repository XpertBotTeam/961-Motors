@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://i7.pngguru.com/preview/659/143/606/partnership-computer-icons-clip-art-deal-with-it.jpg" class="rounded-circle" style="height: 150px;">
        </div>
        <div class="col-9 p-5">
            <div class ="d-flex justify-content-between align-items-baseline"> 
                <font size="5"><div class="pl-3"><strong>Welcome, {{ $user->Username }} </strong></div></font>
                <a href="#" >Add New post</a>
            </div>
            <div class="pt-3"><strong>{{ $user->Profile->tiitle ?? 'Empty' }}</strong></div>
            <div class="pt-2"><strong>{{ $user->Profile->description ?? 'Empty' }}</strong></div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="https://tse3.mm.bing.net/th?id=OIP.BjHEx8-mD-5-_508oHFZUQHaFj&pid=Api&P=0" class="w-100">   
        </div>
        <div class="col-4">
            <img src="https://tse2.mm.bing.net/th?id=OIP.QlrIik_jJA5hvDKLkmCHBQHaFj&pid=Api&P=0" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://tse4.mm.bing.net/th?id=OIP.d97_bw1dJ54V1ZpvVo-NrgHaFj&pid=Api&P=0" class="w-100">
    </div>
@endsection
