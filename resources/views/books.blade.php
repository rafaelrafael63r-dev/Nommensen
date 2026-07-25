@extends('layouts.app')

@section('title', 'Koleksi Buku')
@section('meta_description', 'Daftar koleksi buku Perpustakaan Digital Cendekia.')

@section('content')

<section class="bg-gradient-to-br from-blue-950 to-blue-800 py-20 text-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="text-sm font-semibold uppercase tracking-widest text-blue-200">
            Perpustakaan Digital
        </p>

        <h1 class="mt-3 text-4xl font-extrabold sm:text-5xl">
            Koleksi Buku
        </h1>

        <p class="mt-5 max-w-3xl text-lg leading-8 text-blue-100">
            Temukan berbagai koleksi buku yang tersedia di Perpustakaan Digital Cendekia.
        </p>
    </div>
</section>

<section class="bg-slate-50 py-20">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">

            <div>
                <h2 class="text-2xl font-bold text-slate-900">
                    Daftar Buku
                </h2>

                <p class="mt-2 text-slate-600">
                    Koleksi buku yang telah ditambahkan melalui panel admin.
                </p>
            </div>

            <div class="rounded-full bg-white px-5 py-3 text-sm font-semibold text-slate-700 shadow-sm ring-1 ring-slate-200">
                Total Buku : {{ $books->count() }}
            </div>

        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

            @forelse($books as $book)

                @php
                    $badgeClass = match ($book->stock) {
                        0 => 'bg-red-100 text-red-700',
                        default => 'bg-emerald-100 text-emerald-700',
                    };
                @endphp

                <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                    @if($book->cover)
                        <img
                            src="{{ asset('storage/' . $book->cover) }}"
                            alt="{{ $book->title }}"
                            class="h-64 w-full object-cover">
                    @else
                        <div class="flex h-64 items-center justify-center bg-slate-200 text-slate-500">
                            Tidak Ada Cover
                        </div>
                    @endif

                    <div class="p-6">

                        <div class="flex items-start justify-between">

                            <div>
                                <h3 class="text-lg font-bold text-slate-900">
                                    {{ $book->title }}
                                </h3>

                                <p class="mt-1 text-sm text-slate-500">
                                    {{ $book->author }}
                                </p>
                            </div>

                            <span class="rounded-full px-3 py-1 text-xs font-bold {{ $badgeClass }}">
                                {{ $book->stock > 0 ? 'Tersedia' : 'Habis' }}
                            </span>

                        </div>

                        <div class="mt-5 space-y-3 text-sm">

                            <div>
                                <p class="font-semibold text-slate-900">
                                    Kategori
                                </p>

                                <p class="text-slate-600">
                                    {{ $book->category }}
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold text-slate-900">
                                    Tahun Terbit
                                </p>

                                <p class="text-slate-600">
                                    {{ $book->publication_year }}
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold text-slate-900">
                                    Stok
                                </p>

                                <p class="text-slate-600">
                                    {{ $book->stock }} Buku
                                </p>
                            </div>

                        </div>

                    </div>

                </article>

            @empty

                <div class="col-span-full rounded-3xl border border-dashed border-slate-300 bg-white p-12 text-center">

                    <h3 class="text-lg font-bold text-slate-900">
                        Belum Ada Buku
                    </h3>

                    <p class="mt-2 text-slate-500">
                        Silakan tambahkan data buku melalui panel admin Filament.
                    </p>

                </div>

            @endforelse

        </div>

        @if($books->hasPages())

            <div class="mt-10">
                {{ $books->links() }}
            </div>

        @endif

    </div>

</section>

@endsection