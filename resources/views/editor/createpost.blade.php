<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>


<h1 id="blog_header" class="text-center py-5">Create your blog post</h1>            

<form class=" mx-auto" action="/createpost"  method="POST" enctype="multipart/form-data" id="blog_posting">
    @csrf
    <div class="mb-5">
      <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blog Title</label>
      <input name="title" type="text" id="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Blog Title" required />
    </div>

    <div class="mb-5">
        <label for="pwd">Write your post here:</label>
        <textarea class="tinyMce" name="main_post"></textarea>
    </div>

    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">Thumbnail Image</label>
        <input name="thumb_photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="thumb_photo" type="file">
    </div>
    
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">Top Image</label>
        <input name="top_photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="top_photo" type="file">
    </div>

    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">Middle Image</label>
        <input name="middle_photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="middle_photo" type="file">
    </div>

    <div class="mb-5">
        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blog Category</label>
        <input name="category" type="text" id="category" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Blog category" required />
      </div>

      <div class="mb-5">
        <label for="featuredpost" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Featured your post</label>
  <select name="featured_post" id="featuredpost" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option selected disabled>featured your post</option>
    <option value="true">Yes</option>
    <option value="false">No</option>
  </select>
      </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Publish</button>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>




    
    {{-- <script type="module">
        $(document).ready(function(){
          $('#blog_posting').submit(function(e){
            e.preventDefault()
            const formdata = new FormData(this)
            $.ajax({
                type:'POST',
                url:'/createpost',
                data: formdata,
                dataType:'json',
                contentType:false,
                processData:false,
                success:function(response){
                    console.log(response)
                },
                error:function(xhr,status,error){

                    console.log(error)
                }
            })
          })
        })  
    </script> --}}

</x-app-layout>
