<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir dengan Flowbite</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
 @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased">


    <div class="container mx-auto p-8">
        <form action="{{ route('post.update' , $post->id)}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-6">
            <!-- Input Gambar -->
            @csrf
            @method('put')
            <div>
                <label for="image" class="block text-gray-700">Gambar</label>
                <input type="file" id="image" name="image" class="block w-full mt-1" >


            <!-- Input Judul -->
            <div>
                <label class="form-control w-full max-w-xs">
                <div class="label">
                  <span class="label-text">Judul?</span>
                </div>
                <input type="text" id="title" name="title" value="{{ $post->title }}" class="input input-bordered w-full max-w-xs" />
              </label>
            </div>


            <!-- Input Deskripsi -->
            <div>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                      <span class="label-text">Deskripsi</span>
                    </div>
                    <textarea type="text" id="description" name="description" value="{{ $post->description }}" class="input input-bordered w-full max-w-xs"></textarea>
                  </label>
            </div>


            <!-- Input Konten -->
            <div>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                      <span class="label-text">Konten</span>
                    </div>
                    <textarea type="text" id="content" name="content" value="{{ $post->content }}" class="input input-bordered w-full max-w-xs mb-2"></textarea>
                  </label>
            </div>


            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="inline-block rounded bg-indigo-600 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-indigo-500">Kirim</button>
            </div>
        </form>
    </div>


</body>
</html>
