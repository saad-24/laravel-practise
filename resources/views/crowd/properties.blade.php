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
                                aria-selected="true">Available</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="funded-tab" data-toggle="tab" data-target="#funded"
                                type="button" role="tab" aria-controls="funded" aria-selected="false">Funded</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="exited-tab" data-toggle="tab" data-target="#exited"
                                type="button" role="tab" aria-controls="exited" aria-selected="false">Exited</button>
                        </li>
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
                                    @if ($property->status === 'available')
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
                                                    <span>{{ $property->status }}</span>
                                                    <br>
                                                    <br>
                                                    <div class="row admin_btn">
                                                        
                                                            
                                                            <a href="{{ route('admin.property.edit', $property->id) }}" class="btn themeBtn">Edit</a>
                                                            <a href="{{ route('admin.property.destroy', $property->id) }}" class="btn btn-danger danger">Delete</a>
                                                        
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="funded" role="tabpanel" aria-labelledby="funded-tab">
                            <div class="row">
                                @foreach ($properties as $property)
                                    @if ($property->status === 'funded')
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
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="exited" role="tabpanel" aria-labelledby="exited-tab">
                            <div class="row">
                                @foreach ($properties as $property)
                                    @if ($property->status === 'exited')
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
                                                </div>
                                            </div>
                                        </div>
                                    @endif
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
