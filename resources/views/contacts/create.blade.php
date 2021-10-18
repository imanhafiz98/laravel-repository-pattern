<html>

<div class="col">
    <form method="POST" action="{{ route('contacts.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="form-group">
                <input class="form-control" name="name" id="inputUsername" type="text"/>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <input class="form-control" name="number" id="inputUsername" type="text"/>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label class="small mb-1">Notes</label>
                <textarea class="form-control" name="notes" id="exampleFormControlTextarea1" rows="10"
                    required></textarea>
            </div>
        </div>
        
        <div class="row">
            <hr class="my-4" />
            <div class="d-flex justify-content-between">

                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </div>
    </form>
</div>

</html>
