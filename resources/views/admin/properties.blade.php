@extends('layout.main')

@section('content')
@include('layout.dashboard-left')

<section class="prop-tab-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-navbars">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="available-tab" data-toggle="tab"
                                data-target="#available" type="button" role="tab" aria-controls="available"
                                aria-selected="true">All Properties</button>
                        </li>
                        
                        @if(Auth::check() && Auth::user()->is_admin)
                        <li style="margin-left:65rem;">
                            <a href="{{ route('admin.property.store') }}" class="btn themeBtn">Add Property</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tab-navbars">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="available" role="tabpanel"
                            aria-labelledby="available-tab">

                            <div class="row">
                                @foreach ($properties as $property)
                                    
                                        <div class="col-md-4">
                                            <div class="howCard howCardNew">
                                                <div class="hwcHead">
                                                    <h2>Luxury Properties</h2>
                                                    {{-- @dd($property->images) --}}
                                                    @foreach ($property->images->take(1) as $image)
                                                        <figure>
                                                            <img src="{{ url('images/property_images/' . $image->image_path) }}" class="img-fluid w-100" alt="Property Image">
                                                        </figure>
                                                    @endforeach

                                                </div>
                                                <div class="hwcBody">
                                                    <a href="{{ route('property_detail', ['id' => $property->id]) }}"><h2>{{ $property->name }}</h2></a>
                                                    <div class="downCard">
                                                        <h5><i class="far fa-map-marker-alt"></i> Downtown</h5>
                                                        <h6>
                                                            <figure><img src="{{ asset('/images/prog.png') }}" class="img-fluid" alt=""></figure>
                                                            @php
                                                                $percentage = ($property->total_investment / $property->price) * 100;
                                                                $percentage = min($percentage, 100);
                                                            @endphp
                                                            {{ number_format($percentage, 0) }}% Sold
                                                        </h6>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <p>9%</p>
                                                            <span>gross yield</span>
                                                        </li>
                                                        <li>
                                                            <p>31%</p>
                                                            <span>capital appreciation</span>
                                                        </li>
                                                        <li>
                                                            <p>52%</p>
                                                            <span>total ROI</span>
                                                        </li>
                                                    </ul>
                                                    @if(Auth::check() && Auth::user()->is_admin)
                                                    <br>
                                                    <div class="alert alert-primary text-center font-weight-bold text-uppercase" role="alert">
                                                        {{ $property->status }}
                                                    </div>
                                                    {{-- <span></span> --}}
                                                    <br>
                                                    {{-- <br> --}}
                                                    <div class="row admin_btn">
                                                        
                                                            
                                                            <a href="{{ route('admin.property.edit', $property->id) }}" class="btn themeBtn">Edit</a>
                                                            <a href="{{ route('admin.property.destroy', $property->id) }}" class="btn btn-danger danger">Delete</a>
                                                        
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    
                                    
                                @endforeach
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
