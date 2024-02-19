<x-front-end-layout>
    {{--HERO SECTION--}}
    <x-frontend.hero></x-frontend.hero>
    {{--PROMOTE--}}
    <x-frontend.promote></x-frontend.promote>
    {{--ABOUT--}}
    <x-frontend.about></x-frontend.about>
    {{--SKILLS--}}
    <x-frontend.skills :skills="$skills"></x-frontend.skills>
    {{--PORTFOLIO--}}
    <x-frontend.portfolio :skills="$skills" :projects="$projects"></x-frontend.portfolio>
    {{--SERVICES--}}
    {{--CONTACT--}}
</x-front-end-layout>

<!-- from cdn -->
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
