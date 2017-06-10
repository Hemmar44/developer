@component('mail::message')
# Mail od:  {{$user->name}}

- telefon : {{$user->phone}}
- email: {{$user->email}}
- zainteresowany: {{$user->apartment}}

@component('mail::panel', ['url' => ''])
{{$user->body}}
@endcomponent

Pozdrawiam <br>
Admin, At-invest
@endcomponent
