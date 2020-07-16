@extends('layout.app')
   
@push('styles')
<link rel="stylesheet" href= "{{asset('css/custom-css/update-profilepage.css')}}"/>
@endpush

	@section('content')
		<main class="__up_container">
			<section id="userinfo">
				<div style="position: relative;">
					<img src="https://res.cloudinary.com/jiroghene/image/upload/v1592575780/profilephotos/profilepix_placholder_z0gkgp.png"
						alt=""
					/> 
					<div id="pencilicon">
						<i class="fa fa-pencil" style="font-size: 25px;"></i>
					</div>
				</div>
				<div id="name">
					<h3>{{ $data['message']['firstName']." ".$data['message']['lastName'] }}</h3>
					<p>Frontend Developer</p>
				</div>
			</section>
			<p>5 successful payments</p>
			<section>
				<div id="editprofile">
					<section class="cols">
						<label>Basic Information</label>
						<div class="_pfg">
							<p>Date of Birth</p>
							<input type="date" name="" value="" class="_pfc" />
						</div>
						<div class="_pfg">
							<p>Gender</p>
							<select name="" class="_pfc">
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</div>

						<div class="_pfg">
							<p>Bio</p>
							<textarea
								class="_pfc"
								rows="8"
								placeholder="Tell us about yourself"
							></textarea>
						</div>
					</section>
					<section class="cols">
						<label>Contact Information</label>
						<div class="_pfg">
							<p>Email Address</p>
						<input type="email" name="" value="{{ $data['message']['email'] }}" class="_pfc" />
						</div>
						<div class="_pfg">
							<p>Phone Number</p>
						<input type="phone" name="" value="{{ $data['message']['phone'] }}" class="_pfc" />
						</div>
						<div class="_pfg">
							<p>Resident Address</p>
						<input type="text" name="" value="{{ $data['message']['address'] }}" class="_pfc" />
						</div>
						<div class="_pfg">
							<p>Website</p>
							<input type="url" name="" class="_pfc" />
						</div>
					</section>
				</div>
			</div>
			<div id="name">
			<h3>{{$user->lastName}}</h3>
				<p>Frontend Developer</p>
			</div>
		</section>
		<p>5 successful payments</p>
		<section>
			<form action="{{ route('update-profile', $user->id) }}" method="post" enctype="multipart/form-data">
				@csrf
			<div id="editprofile">
				<section class="cols">
					<label>Basic Information</label>
					<div class="_pfg">
						<p>Date of Birth</p>
						<input type="date" name="" class="_pfc" />
					</div>
					<div class="_pfg">
						<p>Gender</p>
						<select name="" class="_pfc">
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</div>

					<div class="_pfg">
						<p>Bio</p>
						<textarea
							class="_pfc"
							rows="8"
							placeholder="Tell us about yourself"
						></textarea>
					</div>
				</section>
				<section class="cols">
					<label>Contact Information</label>
					<div class="_pfg">
						<p>Email Address</p>
						<input type="email" name="email" value="{{ old('email', $user->email) }}" class="_pfc" />
					</div>
					<div class="_pfg">
						<p>Phone Number</p>
						<input type="phone" name="phone" value="{{ old('phone', $user->phone) }}" class="_pfc" />
					</div>
					<div class="_pfg">
						<p>Resident Address</p>
						<input type="text" name="address" value="{{ old('address', $user->address) }}" class="_pfc" />
					</div>
					{{-- <div class="_pfg">
						<p>Website</p>
						<input type="url" name="" class="_pfc" />
					</div> --}}
				</section>
			</div>
				<button type="submit" id="updateprofile">
					Update Profile
				</button>
			</section>
		</main>
@endsection
