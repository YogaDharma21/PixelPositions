@php
    $url = request()->url();
    $path = parse_url($url, PHP_URL_PATH);    
    $segments = explode('/', $path);
    $tag = end($segments);    
    $tagName = urldecode($tag);
@endphp


<x-layout>
<x-page-heading>Search For {{ $tagName }}</x-page-heading>
    
    <x-forms.form action="/search" class="mt-6">
        <x-forms.input :label="false" name="q" placeholder="Search Again?..."/>
    </x-forms.form>
    <div class="mt-6 space-y-6">
        @if ($jobs->isEmpty())
            <p class="text-center">No jobs found</p>
        @endif
        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>