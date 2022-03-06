@extends('layouts.app')

@include('partials.app.sections', [
    'title' =>'Home'    
])

@section('content')
    @include('partials.app.hero')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-2 is-8">
                    <div class="box">
                        <div class="content">This is home page content</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
