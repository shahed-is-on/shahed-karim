@csrf
<div class="row g-3">

  <div class="col-md-6">
    <label class="form-label">Name *</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $info->name ?? '') }}" required>
    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-6">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $info->email ?? '') }}">
    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-6">
    <label class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" value="{{ old('phone', $info->phone ?? '') }}">
    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-6">
    <label class="form-label">Related Blog (optional)</label>
    <select name="blog_id" class="form-control">
      <option value="">— None —</option>
      @foreach(($blogs ?? []) as $id => $title)
        <option value="{{ $id }}" @selected(old('blog_id', $info->blog_id ?? '') == $id)>{{ $title }}</option>
      @endforeach
    </select>
    @error('blog_id') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-12">
    <label class="form-label">Text / Notes</label>
    <textarea name="text" rows="4" class="form-control">{{ old('text', $info->text ?? '') }}</textarea>
    @error('text') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-md-6">
    <label class="form-label">Profile Photo</label>
    <input type="file" name="profile_photo" class="form-control">
    @if(!empty($info?->profile_photo))
      <small class="text-muted">Current: {{ $info->profile_photo }}</small>
    @endif
    @error('profile_photo') <small class="text-danger">{{ $message }}</small> @enderror
  </div>

  <div class="col-12 d-flex gap-2">
    <button class="btn btn-primary">{{ $submitLabel ?? 'Save' }}</button>
    <a href="{{ route('infos.index') }}" class="btn btn-light">Cancel</a>
  </div>
</div>
