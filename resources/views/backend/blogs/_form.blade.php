@csrf
<div class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Name *</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $blog->name ?? '') }}" required>
    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-6">
    <label class="form-label">Slug (optional; auto if blank)</label>
    <input type="text" name="slug" class="form-control" value="{{ old('slug', $blog->slug ?? '') }}">
    @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-6">
  <label class="form-label">Category *</label>
  <select name="category_id" class="form-control" required>
    <option value="">— Select Category —</option>
    @foreach($categories as $id => $name)
      <option value="{{ $id }}" @selected(old('category_id', $blog->category_id ?? '') == $id)>{{ $name }}</option>
    @endforeach
  </select>
  @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
</div>


  <div class="col-md-6">
    <label class="form-label">Title *</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title ?? '') }}" required>
    @error('title') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-6">
    <label class="form-label">Writer Name</label>
    <input type="text" name="writer_name" class="form-control" value="{{ old('writer_name', $blog->writer_name ?? '') }}">
    @error('writer_name') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-12">
    <label class="form-label">Short Description</label>
    <input type="text" name="short_des" class="form-control" value="{{ old('short_des', $blog->short_des ?? '') }}">
    @error('short_des') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-12">
    <label class="form-label">Description (HTML allowed)</label>
    <textarea name="des" rows="6" class="form-control">{{ old('des', $blog->des ?? '') }}</textarea>
    @error('des') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-4">
    <label class="form-label">Image 1</label>
    <input type="file" name="image_1" class="form-control">
    @if(!empty($blog?->image_1)) <small class="text-muted">Current: {{ $blog->image_1 }}</small> @endif
    @error('image_1') <small class="text-danger">{{ $message }}</small> @enderror
  </div>
  <div class="col-md-4">
    <label class="form-label">Image 2</label>
    <input type="file" name="image_2" class="form-control">
    @if(!empty($blog?->image_2)) <small class="text-muted">Current: {{ $blog->image_2 }}</small> @endif
    @error('image_2') <small class="text-danger">{{ $message }}</small> @enderror
  </div>
  <div class="col-md-4">
    <label class="form-label">Image 3</label>
    <input type="file" name="image_3" class="form-control">
    @if(!empty($blog?->image_3)) <small class="text-muted">Current: {{ $blog->image_3 }}</small> @endif
    @error('image_3') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-6">
    <label class="form-label">Image Alt Text</label>
    <input type="text" name="image_alt_text" class="form-control" value="{{ old('image_alt_text', $blog->image_alt_text ?? '') }}">
    @error('image_alt_text') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-6">
    <label class="form-label">Keywords (comma separated)</label>
    <input type="text" name="keywords" class="form-control" value="{{ old('keywords', $blog->keywords ?? '') }}">
    @error('keywords') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-6">
    <label class="form-label">Meta Title</label>
    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $blog->meta_title ?? '') }}">
    @error('meta_title') <small class="text-danger">{{ $message }}</small> @enderror
  </div>
  <div class="col-md-6">
    <label class="form-label">Meta Description</label>
    <input type="text" name="meta_des" class="form-control" value="{{ old('meta_des', $blog->meta_des ?? '') }}">
    @error('meta_des') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-12">
    <label class="form-label">AI Help (notes, prompts, etc.)</label>
    <textarea name="ai_help" rows="3" class="form-control">{{ old('ai_help', $blog->ai_help ?? '') }}</textarea>
    @error('ai_help') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-12 d-flex gap-2">
    <button class="btn btn-primary">{{ $submitLabel ?? 'Save' }}</button>
    <a href="{{ route('blogs.index') }}" class="btn btn-light">Cancel</a>
  </div>
</div>
