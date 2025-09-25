<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail - {{ $smartphone->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto px-4 py-12">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden max-w-4xl mx-auto">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-64 w-full object-cover md:h-full md:w-80" src="{{ $smartphone->image_url }}" alt="{{ $smartphone->name }}">
                </div>
                <div class="p-8 flex flex-col justify-between">
                    <div>
                        <div class="uppercase tracking-wide text-sm text-blue-600 font-semibold">{{ $smartphone->brand }}</div>
                        <h1 class="block mt-1 text-4xl leading-tight font-bold text-black">{{ $smartphone->name }}</h1>
                        
                        <div class="my-4 flex items-center">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg class="w-6 h-6 {{ $i <= round($smartphone->rating) ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @endfor
                            <span class="text-gray-700 text-lg ml-3 font-semibold">({{ $smartphone->rating }} / 5.0)</span>
                        </div>

                        <p class="mt-4 text-gray-600 text-lg">{{ $smartphone->description }}</p>
                    </div>

                    <div class="mt-8">
                        @if ($smartphone->is_booked)
                            <button class="w-full bg-gray-300 text-gray-600 font-bold py-3 px-4 rounded-lg cursor-not-allowed" disabled>
                                Sudah Dibooking
                            </button>
                        @else
                            <form action="{{ route('smartphones.book', $smartphone->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition-colors">
                                    Booking Sekarang
                                </button>
                            </form>
                        @endif
                        <a href="{{ route('smartphones.index') }}" class="mt-4 block text-center text-gray-600 hover:text-blue-600">Kembali ke Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

