<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Smartphone</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">

    <div class="container mx-auto px-4 py-12">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">Pilih Smartphone Impian Anda</h1>
            <p class="text-lg text-gray-500 mt-2">Booking unit favoritmu sekarang juga!</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($smartphones as $phone)
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="{{ $phone->image_url }}" alt="{{ $phone->name }}" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h2 class="text-sm font-semibold text-blue-600 uppercase">{{ $phone->brand }}</h2>
                        <h3 class="text-2xl font-bold text-gray-900 mt-1">{{ $phone->name }}</h3>
                        
                        <div class="my-3 flex items-center">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg class="w-5 h-5 {{ $i <= round($phone->rating) ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @endfor
                            <span class="text-gray-600 text-sm ml-2">({{ $phone->rating }})</span>
                        </div>

                        <div class="mt-4">
                            @if ($phone->is_booked)
                                <span class="inline-block bg-red-200 text-red-800 text-xs px-2 rounded-full uppercase font-semibold tracking-wide">
                                    Sudah Dibooking
                                </span>
                            @else
                                <span class="inline-block bg-green-200 text-green-800 text-xs px-2 rounded-full uppercase font-semibold tracking-wide">
                                    Tersedia
                                </span>
                            @endif
                        </div>

                        <a href="{{ route('smartphones.show', $phone->id) }}" class="mt-6 block w-full text-center bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700 transition-colors">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            @empty
                <div class="md:col-span-2 lg:col-span-3 text-center py-16">
                    <p class="text-gray-500 text-xl">Saat ini belum ada smartphone yang tersedia.</p>
                </div>
            @endforelse
        </div>
    </div>

</body>
</html>

