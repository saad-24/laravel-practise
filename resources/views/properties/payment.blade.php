<form action="{{ route('properties.pay', $property) }}" method="post">
    @csrf
    <input type="number" name="amount" placeholder="Enter amount">
    <button type="submit">Pay</button>
</form>
