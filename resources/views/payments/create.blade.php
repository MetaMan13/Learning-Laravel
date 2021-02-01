@extends('home')

@section('payment')
    <div>
        <form action="/payments" method="POST">
            @csrf
            <button type="submit">Pay now</button>
        </form>
    </div>
@endsection