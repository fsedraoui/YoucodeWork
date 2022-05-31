<x-guest-layout>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/pages/auth.css') }}">
    @endpush
    @php
        $sections = [
            [
                "link" => route('login-staff'),
                "label"=> "Staff"
    ],
    [
                "link" => route('loginR'),
                "label"=> "Recruteur"
    ],
    [
                "link" => route('login-student'),
                "label"=> "Apprenant"
    ]
]
    @endphp
    <div class="auth">
        <div class="logo">
            <img src="{{@asset("/assets/logo-dark.svg")}}" alt="logo">
        </div>
        <div class="sections">
            @foreach($sections as $section)
                <div class="section" style="flex-basis: {{100 / count($sections)}}%">
                    <a href="{{$section['link']}}"><span class="prefix">Login</span> {{$section['label']}}</a>
                </div>
            @endforeach
        </div>

    </div>
</x-guest-layout>