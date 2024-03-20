<form action="{{ route('contacts.storeResponse', $contact) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="response">Response:</label>
        <textarea class="form-control" id="response" name="response" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
