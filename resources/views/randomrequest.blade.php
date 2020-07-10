@extends('layout.app')
@section('content')


    <div class="container">
		<main>
			<section class="welcomeSection">
				<h1>Featured Requests Random Order</h1>
			</section>
			<section class="table">
			  <div class="row">

				<div class="tableSection">
					<table>
						<thead>
							<td> ID</td>
							<td>Full Name</td>
							<td>Title</td>
							<td>Email</td>
                            <td>Description</td>
                            <td>Photo</td>
                            <td>Amount</td>

						</thead>
						<tbody>


                            @foreach ($hey as $item)
                            @php
                            switch($item->currency){
                            case 1:
                                    $curr = 'NGN';
                                break;

                            case 2:
                            $curr = "USD";
                                break;

                            case 3:
                            $curr = "EURO";
                            break;

                            default;
                        }
                        @endphp
							<tr>
								<td>{{ $item->id}}</td>
                                <td>{{$item->user->firstName}} {{$item->user->lastName}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->user->email}}</td>
                                <td>{{$item->description}}</td>
                                <td><img src="{{$item->photoURL}}" height="50" width="50" alt="hey"></td>
								<td>{{ $curr }} {{ $item->amount}}</td>
                            </tr>
                            @endforeach

						</tbody>
					</table>
				</div>
			</section>
		</main>
    </div>
@endsection

