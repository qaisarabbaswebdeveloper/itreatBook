

@extends('layout.app')

@section('content')


<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area ">
	

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

</section>
		<!-- End My Account Area -->

        <br><br><br><br><br><br><br>
@endsection

