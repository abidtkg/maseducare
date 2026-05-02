@extends('layouts.admin')
@section('title', 'Gallery')
@section('page-title', 'Gallery Management')

@section('content')
<div class="page-card mb-4">
    <div class="page-card-header">
        <strong>Gallery Items ({{ $items->count() }})</strong>
        <a href="{{ route('admin.gallery.create') }}" class="btn btn-mas btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Image</a>
    </div>
    <div class="page-card-body">
        {{-- Category filter tabs --}}
        <div class="d-flex flex-wrap gap-2 mb-4">
            <a href="{{ route('admin.gallery.index') }}" class="btn btn-sm {{ !$category ? 'btn-mas' : 'btn-mas-outline' }}">All</a>
            @foreach($categories as $key => $label)
            <a href="{{ route('admin.gallery.index', ['category'=>$key]) }}" class="btn btn-sm {{ $category===$key ? 'btn-mas' : 'btn-mas-outline' }}">{{ explode('/', $label)[1] ?? $label }}</a>
            @endforeach
        </div>

        <div class="row g-3">
            @forelse($items as $item)
            <div class="col-lg-2 col-md-3 col-4">
                <div style="background:white;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,.08);overflow:hidden">
                    <div style="position:relative">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" style="width:100%;height:120px;object-fit:cover">
                        @if($item->is_featured)
                        <span style="position:absolute;top:4px;right:4px;background:#C9A84C;color:white;font-size:.7rem;border-radius:4px;padding:2px 6px"><i class="bi bi-star-fill"></i></span>
                        @endif
                        @if(!$item->is_active)
                        <div style="position:absolute;inset:0;background:rgba(0,0,0,.5);display:flex;align-items:center;justify-content:center;color:white;font-size:.75rem">Hidden</div>
                        @endif
                    </div>
                    <div style="padding:8px">
                        <p style="font-size:.78rem;font-weight:600;margin:0;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">{{ $item->title }}</p>
                        <p style="font-size:.72rem;color:#888;margin:2px 0">{{ explode('/',($categories[$item->category]??$item->category))[1] ?? $item->category }}</p>
                        <div class="d-flex gap-1 mt-1">
                            <a href="{{ route('admin.gallery.edit', $item) }}" class="btn btn-sm btn-outline-primary" style="padding:2px 8px;font-size:.75rem"><i class="bi bi-pencil"></i></a>
                            <form action="{{ route('admin.gallery.destroy', $item) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" style="padding:2px 8px;font-size:.75rem"><i class="bi bi-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5 text-muted">
                <i class="bi bi-images" style="font-size:3rem"></i>
                <p class="mt-2">No images yet. <a href="{{ route('admin.gallery.create') }}">Add one</a></p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection