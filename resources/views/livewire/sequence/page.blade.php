<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if($updateMode)
            <form>
                <input type="hidden" wire:model="sequence_id">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Sequence:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Sequence" wire:model="sequence">
                    @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2">Category:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Enter Category" wire:model="category">
                    @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Account Vot:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Enter Account Vot" wire:model="account_vot">
                    @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
                <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
            </form>
    @else
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput5">Sequence:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput5" placeholder="Enter Sequence" wire:model="sequence">
                    @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput6">Category:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput6" placeholder="Enter Category" wire:model="category">
                    @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput7">Account Vot:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput7" placeholder="Enter Account Vot" wire:model="account_vot">
                    @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <button wire:click.prevent="store()" class="btn btn-success">Save</button>
            </form>

    @endif

    <table class="table table-bordered mt-5">
        <thead>
        <tr>
            <th>No.</th>
            <th>Sequence</th>
            <th>Category</th>
            <th>Account Vot</th>
            <th width="150px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sequences as $sequence)
            <tr>
                <td>{{ $sequence->id }}</td>
                <td>{{ $sequence->sequence }}</td>
                <td>{{ $sequence->category }}</td>
                <td>{{ $sequence->account_vot }}</td>
                <td>
                    <button wire:click="edit({{ $sequence->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $sequence->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
