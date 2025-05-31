@extends('layouts.admin') {{-- Ganti sesuai layout kamu --}}

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-center mb-8">Our Ratings</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="py-3 px-4 border">No</th>
                    <th class="py-3 px-4 border">User</th>
                    <th class="py-3 px-4 border">Gadget Name</th>
                    <th class="py-3 px-4 border">Rating</th>
                    <th class="py-3 px-4 border">Comment</th>
                </tr>
            </thead>
            <tbody class="text-gray-800">
                @foreach($ratings as $index => $rating)
                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : '' }}">
                    <td class="py-3 px-4 border text-center">{{ $index + 1 }}</td>
                    <td class="py-3 px-4 border">{{ $rating->user->name ?? 'anonymous' }}</td>
                    <td class="py-3 px-4 border font-semibold">{{ $rating->gadget->name ?? '-' }}</td>
                    <td class="py-3 px-4 border font-bold text-center">{{ $rating->rating }}/10</td>
                    <td class="py-3 px-4 border">{{ \Illuminate\Support\Str::limit($rating->comment, 100) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
