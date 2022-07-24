<x-guest-layout>
    @push('styles')
        <link rel="stylesheet" href="{{asset('css/pages/auth.css')}}">
    @endpush
    @php
        $sections = [
         /*     [
                "link" => route('login-staff'),
                "label"=> "Staff",
                "images" => [
                   "..\assets\img\hiring.svg"
                ]
        ],  */
        [
                "link" => route('login-student'),
                "label"=> "Apprenant",
                "images" => [
                   // "..\assets\img\hiring.svg",
                   "..\assets\img\code2.svg"
                    ],
                "description"=> "Laissez vos projets vous présentent",
                "video" => [
                   // "..\assets\img\hiring.svg",
                   "..\assets\img\youcode_drone_28_06_2021_tt.mp4"
                    ]
                
    ]
        ,[
                "link" => route('loginR'),
                "label"=> "Recruteur",
                "images" => [
                    //"..\assets\img\hiring1.svg",
                    "..\assets\img\hiring1.svg"
                    ],
                "description"=> "Trouvez le plus talentueux",
    
                "video" => [
                   // "..\assets\img\hiring.svg",
                  //  "..\assets\img\youcode_drone_28_06_2021_tt.mp4"
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
                    <a href="{{$section['link']}}" style="z-index: 99;"><span class="prefix">Login</span> {{$section['label']}}</a>
                    @foreach($section['images'] as $index => $image)
                    <img style="transition-delay: {{$index * 0.2}}s" src="{{$image}}" alt="" />
                      @endforeach
                      {{-- @foreach($section['video'] as $index => $image)
                      <video style="transition-delay: {{$index * 0.2}}s"style="width:480px" height="560px" muted autoplay loop>
                        <source src="{{$image}}" type="video/mp4" />
                    </video>
                    @endforeach --}}
                </div>
            @endforeach
        </div>

    </div>
</x-guest-layout>