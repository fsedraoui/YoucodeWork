<x-guest-layout>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/pages/auth.css') }}">
    @endpush
    @php
        $sections = [
            [
                "link" => "/login",
                "label"=> "Staff",
                "images" => [
                    "https://shopse.netlify.app/static/db85643eecba2fdf55afe7f69d70a2be/210c1/ML_040_Q_5_5_d48d5d0832.webp",
                    "https://shopse.netlify.app/static/3f1460f7707aea3448ca7d68164261f5/210c1/ME_010_S_7_1_548c5b5bbe.webp"
                ]
  ],
    [
                "link" => "/recruiter",
                "label"=> "Recruteur",
                "images" => [
                    "https://shopse.netlify.app/static/db85643eecba2fdf55afe7f69d70a2be/210c1/ML_040_Q_5_5_d48d5d0832.webp",
                    "https://shopse.netlify.app/static/3f1460f7707aea3448ca7d68164261f5/210c1/ME_010_S_7_1_548c5b5bbe.webp"
                ]
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
                    @foreach($section['images'] as $index => $image)
                        <img style="transition-delay: {{$index * 0.2}}s" src="{{$image}}" alt=""/>
                    @endforeach
                </div>
            @endforeach
        </div>

    </div>
</x-guest-layout>
