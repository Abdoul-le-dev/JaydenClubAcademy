@extends('admin.components.app')

@section('page_content')
<div class="w-full ">
    @if (session('success'))
    <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md mb-5" role="alert">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
           
            <p class="text-sm Placeholder ">{{ session('success') }}</p>
            </div>
        </div>
    </div>
    @endif
    @if (session('error'))
    <div class="bg-red-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md mb-5" role="alert">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-gred-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
           
            <p class="text-sm Placeholder">{{ session('error') }}</p>
            </div>
        </div>
    </div>
    @endif
    <div class="flex items-center justify-between">
        <h1 class="font_title_first text-xl">Liste des articles</h1>
    </div>
   @forelse ($posts as $post )

   <div class="mt-6">
    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-between"><span class="font-light text-gray-600 Placeholder">{{ $post->created_at}}</span><a href="#"
                class="px-2 py-1 font-bold text-gray-100  rounded bg-[#4287F5]">{{ $post->entete}}</a>
        </div>
        <div class="mt-2"><a href="{{ route('admin-blog-update',['id'=> $post->id])}}" class="text-xl font-normal text-black hover:underline font_title_first">{{ $post->titre}}</a>
            <p class="mt-2 text-gray-600 Placeholder">{{ Str::limit($post->description, 220) }}</p>
        </div>
        <div class="flex items-center justify-between mt-4"><a href="{{route('admin-blog-article',['id'=> $post->id])}}"
                class="text-blue-500 hover:underline font_title_first">voir plus</a>
            <div><a href="#" class="flex items-center"><img
                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                        alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                    <h1 class="font-bold text-gray-700 hover:underline font_title_first"></h1>
                </a></div>
        </div>
    </div>
   </div>
   
       
   @empty
   <div>
    <h1 class="mt-6 Placeholder">Auccun article publier</h1>
   </div>
       
   @endforelse

     
   
   
    
    
</div>
@endsection