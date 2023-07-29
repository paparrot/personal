@extends('emails.layout')

@section('content')
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            <p><span class="font-bold">Name:</span> {{ $name }}</p>
            <p><span class="font-bold">Email:</span> <a href="mailto:{{ $email }}">{{ $email }}</a></p>
            <p><span class="font-bold">Message:</span> {{ $content }}</p>
        </td>
    </tr>
</table>
@endsection
