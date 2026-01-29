<div>
    <h2>{{$name}}</h2>
    <h4>{{$department}}</h4>
    <h4>{{$rollNo}}</h4>
</div>
{{--make sure to use $ when call function here--}}
<div>{{ $addNumbers(1,19, 47, 12, 99) }}</div>

{{--all of the attributes that are not part of component constructor class will automatically added to $attributes--}}
<p {{$attributes->merge(['class' => 'default-class'])}} >This is for all components</p>
<hr>