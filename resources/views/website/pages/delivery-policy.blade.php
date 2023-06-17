@extends('website.layouts.master')
@section('content')
    <section>
        <div class="cart-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-md-0 mb-4">
                        <h5 class="font-weight-bold">Delivery Policy</h5>
                        <div class="p-2">
                            {!! delivery_policy()->details ?? '--' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
