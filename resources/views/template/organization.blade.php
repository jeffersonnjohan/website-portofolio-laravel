@extends('template.template')


@section('content')
<div class="w-full text-justify p-10 flex text-brown1 font-poppins">
    
    {{-- Kiri --}}
    <div class="w-1/3 h-[650px] flex flex-col items-center text-center p-5">
        {{-- Organisasi --}}
        <div class="w-[300px] mb-5">
            {{-- Header Organisasi --}}
            <div class="w-full p-4 text-lg font-bold border-2 rounded-t-xl border-brown1 bg-brown4">
                <h2>Organisasi</h2>
            </div>
            {{-- Button Organisasi --}}
            <a href="/organization/bgc">
                <div class="w-full p-2 border-b-2 border-x-2 border-brown1 hover:bg-brown1 hover:text-brown4 last:rounded-b-xl {{ $active == "BGC" ? "menuActive":"" }}">
                    <p>Big Goal Community</p>
                </div>
            </a>
        </div>
        
        {{-- Sukarelawan --}}
        <div class="w-[300px] mb-5">
            {{-- Header Sukarelawan --}}
            <div class="w-full p-4 text-lg font-bold border-2 rounded-t-xl border-brown1 bg-brown4">
                <h2>Sukarelawan</h2>
            </div>
            {{-- Button Sukarelawan --}}
            <a href="/organization/signal">
                <div class="w-full p-2 border-b-2 border-x-2 border-brown1 hover:bg-brown1 hover:text-brown4 {{ $active == "SIGNAL" ? "menuActive":"" }}">
                    <p>Panitia Natal PPA/PPTI 2021</p><p> SIGNAL: Sie Public Relation</p>
                </div>
            </a>
            <a href="/organization/spark">
                <div class="w-full p-2 border-b-2 border-x-2 border-brown1 hover:bg-brown1 hover:text-brown4 {{ $active == "SPARK" ? "menuActive":"" }}">
                    <p>Panitia Natal PPTI/PPBP 2021</p><p> SPARK: Sie Public Relation</p>
                </div>
            </a>
            <a href="/organization/yap">
                <div class="w-full p-2 border-b-2 border-x-2 border-brown1 hover:bg-brown1 hover:text-brown4 rounded-b-xl {{ $active == "YAP" ? "menuActive":"" }}">
                    <p>Panitia Retreat PPTI/PPBP 2021 </p><p>You Are Precious: Sie Dana</p>
                </div>
            </a>

        </div>

        {{-- Pengalaman --}}
        <div class="w-[300px] mb-5">
            {{-- Header Pengalaman --}}
            <div class="w-full p-4 text-lg font-bold border-2 rounded-t-xl border-brown1 bg-brown4">
                <h2>Pengalaman</h2>
            </div>
            {{-- Button Pengalaman --}}
            <div class="w-full p-4 border-b-2 border-x-2 text-left border-brown1 last:rounded-b-xl ">
                <p>1. Ketua Ekskul Catur PPTI/PPBP</p>
                <p>2. Wakil Komti PPTI 12</p>
                <p>3. Sie Kurikulum PPTI 12</p>
                <p>4. Sie Acara PPTI 12</p>
            </div>
        </div>
    </div>
    {{-- Kanan --}}
    <div class="w-2/3 p-5 overflow border-2 border-brown1 rounded-md">
        @yield('contentOrganization')
    </div>
</div>
@endsection