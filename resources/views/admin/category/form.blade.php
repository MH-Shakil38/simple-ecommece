    <div class="form-group col-md-6" style="border-right:1px solid #ddd;">
    <input type="hidden" name="id" value="{{isset($category) ? $category->id : ''}}">
        <label for="">Name</label>
        <input name="name" type="text" class="form-control" placeholder="Enter category name" style="border:none"
            value="{{ isset($category) ? $category->name : old('name') }}">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <hr>
        <label for="">Description</label>
        <input name="description" type="text" class="form-control" placeholder="Enter category Description"
            style="border:none" value="{{ isset($category) ? $category->description : old('description') }}">
        @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <hr>
        <label for="">Image : </label>
        <input name="image" type="file" style="border:none">
        @if(isset($category))
            @if (isset($category->image))
                <img name="image" class="update_image" src="{{asset($category->image)}}" alt="{{$category->image}}" height="100px" width="100px">
            @endif
        @endif
        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <hr>
        <label for="">Status</label>
        <input name="status" type="checkbox"
            @if (isset($category)) {{ $category->status == 1 ? 'checked' : '' }} @endif>
        <label for="">Populer</label>
        <input name="pupuler" type="checkbox" class=""
            @if (isset($category)) {{ $category->status==1 ? 'checked' : '' }} @endif>
    </div>
    <div class="form-group col-md-6">
        <label for="">Meta Description</label>
        <input name="meta_description" type="text" class="form-control" placeholder="Enter category Meta Description"
            style="border:none" value="{{ isset($category) ? $category->meta_description : old('meta_description') }}">
        @error('meta_description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <hr>
        <label for="">Meta title</label>
        <input name="meta_title" type="text" class="form-control" placeholder="Enter category Meta title"
            style="border:none" value="{{ isset($category) ? $category->meta_title : old('meta_title') }}">
        @error('meta_title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <hr>
        <label for="">Meta Keyword</label>
        <input name="meta_keyword" type="text" class="form-control" placeholder="Enter category Meta keyword"
            style="border:none" value="{{ isset($category) ? $category->meta_keyword : old('meta_keyword') }}">
        @error('meta_keyword')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <hr>
    </div>
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
    <!-- <div class="card-body">
    <div class="form-group col-md-12">
        <label for="exampleInputname">Name</label>
        <input style="border:none;" type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter user Name"
            value="{{ isset($user) ? $user->name : old('name') }}">
        @error('name')
    <span class="text-danger">{{ $message }}</span>
@enderror
    </div>
    <hr>
    <div class="form-group">
        <label for="exampleInputname">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputName" placeholder="Enter user email"
            value="{{ isset($user) ? $user->email : old('email') }}">
        @error('email')
    <span class="text-danger">{{ $message }}</span>
@enderror
    </div>
    <div class="form-group">
        <label for="exampleInputname">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputName"
            placeholder="Enter user password" value="{{ isset($user) ? $user->password : old('password') }}">
        @error('password')
    <span class="text-danger">{{ $message }}</span>
@enderror
    </div>
    <div class="form-group">
        <label for="exampleInputname">Image</label>
        <input type="file" name="image" class="form-control" id="exampleInputName" placeholder="Enter user image"
            value="{{ isset($user) ? $user->image : old('image') }}">
        @error('image')
    <span class="text-danger">{{ $message }}</span>
@enderror
    </div>
    <div class="form-group">
        <label for="exampleInputDescription">Description</label>
        <textarea name="description" id="" cols="60" rows="4"
            class="form-control">{{ isset($user) ? $user->description : old('description') }}</textarea>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
</div> -->
