<x-app-layout>  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-4 text-sm font-bold">Your Posts:</h1>
                        <div>

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Post Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Featured your post
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Last Updated
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
           @if (!empty($editor_post))

           @foreach ($editor_post as $post )


           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$post['title']}}
            </th>
            <td class="px-6 py-4">
                {{$post['featured_post']}}
            </td>
            <td class="px-6 py-4">
                {{$post['category']}}
            </td>
            <td class="px-6 py-4">
                {{$post['updated_at']}}
            </td>
            <td class="px-6 py-4">
                <i class="fa-regular fa-pen-to-square"></i>

                <i class="fa-solid fa-trash"></i>
            </td>

    
        </tr>
               
           @endforeach
               
           @endif
          
        </tbody>
    </table>
</div>

                        </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>