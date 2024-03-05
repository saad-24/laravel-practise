@extends('layout.app')

@section('content')
@if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger" role="alert">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
<form class="mx-5 my-5" action="{{ route('save-card')}}" method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="card-number">Card Number</label>
        <input type="text" class="form-control" placeholder="4272*************" name="card_number">
      </div>
      <div class="form-group col-md-6">
        <label for="name">Name on Card</label>
        <input type="text" class="form-control" placeholder="Your Name" name="card_name">
      </div>
    </div>
    
    
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="expire-date">Expiry Date</label>
        <input type="text" class="form-control" placeholder="Month/Year" name="expiry_date">
      </div>

      <div class="form-group col-md-2">
        <label for="cvc">CVC</label>
        <input type="text" class="form-control" placeholder="CVC" name="cvc">
      </div>
    </div>
    
    <button type="submit" class="btn themeBtn">Save</button>
  </form>
@endsection