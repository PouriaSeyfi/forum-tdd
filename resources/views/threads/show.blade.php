<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <article>
                        <b>{{$thread->title}}</b>
                        <div class="body">{{$thread->body}}</div>
                    </article>
                </div>

                <div class="p-10 bg-white border-b border-gray-200">
                    @foreach($thread->replies as $reply)
                        <article class="mt-4">
                            <div>
                                <span><a class="text-blue-600" href="#">{{$reply->owner->name}}</a></span> said
                                <span>{{$reply->created_at->diffForHumans()}}...</span>
                            </div>
                            <hr>
                            <b>{{$reply->title}}</b>
                            <div class="body">{{$reply->body}}</div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
