<form>
    <div class="row g-2">
        <div class="mb-3 col-md-6">
            <label for="inputEmail4" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Name">
        </div>
        <div class="mb-3 col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="mb-3 col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
        <div class="mb-3 col-md-6">
            <label for="inputPassword4" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>

    <div class="row g-2">

        <div class="mb-3 col-md-6">
            <label for="inputState" class="form-label">Type</label>
            <select id="inputState" class="form-select">
                <option>Choose</option>
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
            </select>
        </div>
        <div class="mb-3 col-md-6">
            <label for="inputZip" class="form-label">Image</label>
            <input type="file" class="form-control" id="inputZip">
        </div>
    </div>
    <a href="{{ route('user.index') }}" class="btn btn-warning">Cancel</a>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
