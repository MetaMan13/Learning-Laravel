@extends('home')

@section('payment')
    <div>
        <h3>Show all notifications for the user</h3>
        <ul>
            @forelse ($notifications as $notification)
                <li>
                    @if ($notification->type == 'App\Notifications\PaymentRecieved')
                        Successfully recieved payment of {{ $notification->data['amount'] }} dollars
                    @endif
                </li>
            @empty
                <li>You have no notifications :)</li>
            @endforelse
        </ul>
    </div>
@endsection