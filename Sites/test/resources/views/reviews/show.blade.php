<x-layout>

<a href="/" class="inline-block text-black ml-5 mb-4 text-main"
                ><i class="fa-solid fa-caret-left"></i> Back
            </a>
            <div class="mx-4">
                <x-card class="p-10">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-1 mb-6"
                            src="{{asset('images/BOOKMARKED2black_Vector.png')}}"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">{{$review->title}}</h3>
                        <div class="text-xl font-bold mb-4">{{$review->author}}</div>
                        <x-review-tags :review_tags="$review->tags"/>
                        
                        <div class="mt-6 border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                {{$review->reviewer}}
                            </h3>

                            <div class="text-left text-4xl text-main mb-3">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>

                            <div class="text-lg space-y-6">
                                {{$review->content}}

                                <div class="text-right text-4xl text-main mt-4 mb-3">
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                                <a
                                    href="mailto:{{$review->email}}"
                                    class="block bg-main text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Communicate with the reviewer</a
                                >
                            </div>

                        </div>
                    </div>
                </x-card>
            </div>

</x-layout>