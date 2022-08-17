@push('styles')
    <link rel="stylesheet" href="{{ asset('css/markdown-css/github-markdown-light.css') }}">
@endpush

<x-guest-layout>
    <div class="py-14">
        <header class="w-full h-14 bg-gray-700 text-white flex justify-center fixed top-0 z-[9]">
            <div class="container mx-auto px-5 sm:px-10 md:px-10 lg:px-10 xl:px-10 2xl:px-60 flex justify-between items-center">
                <div class="flex justify-start items-center max-w-[70%]">
                    <a href="{{ route('/') }}" class="text-white text-xl truncate">{{ \App\Utils::config(\App\Enums\ConfigKey::AppName) }}</a>
                </div>
                <div class="flex justify-end items-center space-x-4">
                    @includeWhen($_is_notice, 'layouts.notice')
                    @includeWhen($_group->strategies->isNotEmpty(), 'layouts.strategies')

                    @if(Auth::check())
                        @include('layouts.user-nav')
                    @else
                        <a href="{{ route('login') }}" class="text-gray-300 hover:bg-gray-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">登录</a>
                        @if(\App\Utils::config(\App\Enums\ConfigKey::IsEnableRegistration))
                        <a href="{{ route('register') }}" class="text-gray-300 hover:bg-gray-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">注册</a>
                        @endif
                    @endif
                </div>
            </div>
        </header>
        <div class="mt-10 container mx-auto px-5 sm:px-10 md:px-10 lg:px-10 xl:px-10 2xl:px-60">
            <x-upload/>
        </div>
        <footer class="absolute bottom-0 left-0 right-0 w-full bg-gray-200">
            <p class="container mx-auto py-2 px-5 sm:px-10 md:px-10 lg:px-10 xl:px-10 2xl:px-60 text-gray-500 text-sm">
                Copyright © 2018 - present Lsky Pro. All rights reserved. &nbsp;<a href="https://beian.miit.gov.cn/" target="_blank" rel="noreferrer">{{ \App\Utils::config(\App\Enums\ConfigKey::IcpNo) }}</a>&nbsp;请勿上传违反中国大陆和香港法律的图片，违者后果自负。
            </p>
        </footer>
    </div>

    @include('common.notice')

</x-guest-layout>
