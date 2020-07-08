@extends('layout.app')
@section('content')

    <div class="container">
		<main>
			<section class="welcomeSection">
				<h1 class="welcome">Welcome Back, <span class="secondaryColor">Chandan</span></h1>
				<p>All Investments</p>
			</section>
			<p>Overview</p>
			<section class="investmentSection">
				<div class="investmentSectionBlock">
					
					<div class="investment">
						<small>Total Invested Amount</small><br>
						<h2><span>N</span>382,450</h2>
					</div>
					<div class="investment">
						<small>Total Repaid Amount</small><br>
						<h2><span>N</span>249,765</h2>
					</div>
					<div class="investment">
						<small>Average Investment</small><br>
						<h2><span>N</span>52,000</h2>
					</div>
					<div class="investment">
						<small>Average Interest Rate</small><br>
						<h2>13.78%</h2>
					</div>
					<div class="investment">
						<small>Total Investments</small><br>
						<h2>43</h2>
					</div>
					<div class="investment">
						<small>Matured Investments</small><br>
						<h2>16</h2>
					</div><div class="investment">
						<small>Immediate Maturity</small><br>
						<h2>18</h2>
					</div>
					<div class="investment">
						<small>Average Remaining Term</small><br>
						<h2>6<span>months</span></h2>
					</div>	
				</div>
			</section>
			<section class="table">
			  <div class="row">
				<header>Investees Funded</header>
				<header><span class="secondaryColor">1</span> 2 3 4 <span style="padding-left:10px">Next</span></header>
			  </div>
				<div class="tableSection">
					<table>
						<thead>
							<td>INVESTMENT ID</td>
							<td>NAME</td>
							<td>INVESTMENT DATE</td>
							<td>AMOUNT INVESTED</td>
							<td>MATURITY DATE</td>
						</thead>
						<tbody>
							<tr>
								<td>64687275669746861</td>
								<td>MARY JOHN</td>
								<td>1 Febrauary 2020</td>
								<td>N 45,960</td>
								<td>30 September 2020</td> 
							</tr>
							<tr>
								<td>64687275669746861</td>
								<td>MARY JOHN</td>
								<td>1 Febrauary 2020</td>
								<td>N 45,960</td>
								<td>30 September 2020</td> 
							</tr>
							<tr>
								<td>64687275669746861</td>
								<td>MARY JOHN</td>
								<td>1 Febrauary 2020</td>
								<td>N 45,960</td>
								<td>30 September 2020</td> 
							</tr>
							<tr>
								<td>64687275669746861</td>
								<td>MARY JOHN</td>
								<td>1 Febrauary 2020</td>
								<td>N 45,960</td>
								<td>30 September 2020</td> 
							</tr>
							<tr>
								<td>64687275669746861</td>
								<td>MARY JOHN</td>
								<td>1 Febrauary 2020</td>
								<td>N 45,960</td>
								<td>30 September 2020</td> 
							</tr>
							<tr>
								<td>64687275669746861</td>
								<td>MARY JOHN</td>
								<td>1 Febrauary 2020</td>
								<td>N 45,960</td>
								<td>30 September 2020</td> 
							</tr>
							<tr>
								<td>64687275669746861</td>
								<td>MARY JOHN</td>
								<td>1 Febrauary 2020</td>
								<td>N 45,960</td>
								<td>30 September 2020</td> 
							</tr>
							<tr>
								<td>64687275669746861</td>
								<td>MARY JOHN</td>
								<td>1 Febrauary 2020</td>
								<td>N 45,960</td>
								<td>30 September 2020</td> 
							</tr>
							<tr>
								<td>64687275669746861</td>
								<td>MARY JOHN</td>
								<td>1 Febrauary 2020</td>
								<td>N 45,960</td>
								<td>30 September 2020</td> 
							</tr>
							<tr>
								<td>64687275669746861</td>
								<td>MARY JOHN</td>
								<td>1 Febrauary 2020</td>
								<td>N 45,960</td>
								<td>30 September 2020</td> 
							</tr>
						</tbody>
					</table>
				</div>
			</section>
		</main>
    </div>
@endsection