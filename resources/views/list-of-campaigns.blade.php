@extends('layout.app')

@push('styles')
<link rel="stylesheet" href="{{asset('css/custom-css/listofcampaigns.css')}}" />
@endpush

@section('content')
<section class="container">
    <div class="top">
      <ol class="breadcrumb" style="font-size: 23px; background:none;">
        <li class="breadcrumb-item"><a style="color: black; " href="index.html">Home</a></li>
        <li class="breadcrumb-item active "><a style="color: blue;" href="list-of-campaigns.html">Campaign</a></li>
      </ol>
    </div>

    <h2 class="topCampaigns">Top Campaigns</h2>
    <div class="row">
      <div class="box">
        <img class="img" src="../img/pic1.png" />
        <div class="boxContent">
          <h2 class="name">Amaka Onidoe</h2>
          <p class="reason">Laptop Purchase</p>
          <p class="description">I need a laptop to complete my final year school project...</p>

          <!--Progress Bar-->
          <div class="meter">
            <div class="span" style="width: 25%"></div>
          </div>



          <div class="d-flex justify-content-between amount">
            <h3>N10,000</h3>
            <h3>10%</h3>
          </div>
          <p class="raisedAmount">Raised of N100,000</p>
        </div>
        <button class="detailsButton">View Details <i class="fas fa-arrow-right"></i></button>
      </div>
      <div class="box">
        <img class="img" src="../img/pic2.png" />
        <div class="boxContent">
          <h2 class="name">Richard Popsabey</h2>
          <p class="reason">Laptop Purchase</p>
          <p class="description">I need a laptop to complete my final year school project...</p>



          <!--Progress Bar-->
          <div class="meter">
            <div class="span" style="width: 25%"></div>
          </div>



          <div class="d-flex justify-content-between amount">
            <h3>N90,000</h3>
            <h3>90%</h3>
          </div>
          <p class="raisedAmount">Raised of N100,000</p>
        </div>
        <button class="detailsButton">View Details <i class="fas fa-arrow-right"></i></button>
      </div>
      <div class="box hide">
        <img class="img" src="../img/pic3.png" />
        <div class="boxContent">
          <h2 class="name">Kunle Doe</h2>
          <p class="reason">Laptop Purchase</p>
          <p class="description">I need a laptop to complete my final year school project...</p>



          <!--Progress Bar-->
          <div class="meter">
            <div class="span" style="width: 0%"></div>
          </div>



          <div class="d-flex justify-content-between amount">
            <h3>N0</h3>
            <h3>10%</h3>
          </div>
          <p class="raisedAmount">Raised of N100,000</p>
        </div>
        <button class="detailsButton">View Details <i class="fas fa-arrow-right"></i></button>
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <button class="btn btn-white see-more" style="color:#FB3F5C">See more ></button>
    </div>
</section>


  <section class="container">
    <h2 class="topCampaigns">Featured Campaigns</h2>
    <div class="row">
      <div class="box">
        <img class="img" src="../img/pic4.png" />
        <div class="boxContent">
          <h2 class="name">Jane Doe</h2>
          <p class="reason">Laptop Purchase</p>
          <p class="description">I need a laptop to complete my final year school project...</p>



          <!--Progress Bar-->
          <div class="meter">
            <div class="span" style="width: 25%"></div>
          </div>



          <div class="d-flex justify-content-between amount">
            <h3>N10,000</h3>
            <h3>10%</h3>
          </div>
          <p class="raisedAmount">Raised of N100,000</p>
        </div>
        <button class="detailsButton">View Details <i class="fas fa-arrow-right"></i></button>
      </div>
      <div class="box">
        <img class="img" src="../img/pic5.png" />
        <div class="boxContent">
          <h2 class="name">Julia Orji</h2>
          <p class="reason">Laptop Purchase</p>
          <p class="description">I need a laptop to complete my final year school project...</p>



          <!--Progress Bar-->
          <div class="meter">
            <div class="span" style="width: 90%"></div>
          </div>



          <div class="d-flex justify-content-between amount">
            <h3>N90,000</h3>
            <h3>90%</h3>
          </div>
          <p class="raisedAmount">Raised of N100,000</p>
        </div>
        <button class="detailsButton">View Details <i class="fas fa-arrow-right"></i></button>
      </div>
      <div class="box">
        <img class="img" src="../img/pic6.png" />
        <div class="boxContent">
          <h2 class="name">Kunle Doe</h2>
          <p class="reason">Laptop Purchase</p>
          <p class="description">I need a laptop to complete my final year school project...</p>



          <!--Progress Bar-->
          <div class="meter">
            <div class="span" style="width: 0%"></div>
          </div>



          <div class="d-flex justify-content-between amount">
            <h3>N0</h3>
            <h3>10%</h3>
          </div>
          <p class="raisedAmount">Raised of N100,000</p>
        </div>
        <button class="detailsButton">View Details <i class="fas fa-arrow-right"></i></button>
      </div>
      <div class="box">
        <img class="img" src="../img/pic1.png" />
        <div class="boxContent">
          <h2 class="name">Fidel Komolafe</h2>
          <p class="reason">Laptop Purchase</p>
          <p class="description">I need a laptop to complete my final year school project...</p>



          <!--Progress Bar-->
          <div class="meter">
            <div class="span" style="width: 0%"></div>
          </div>



          <div class="d-flex justify-content-between amount">
            <h3>N0</h3>
            <h3>10%</h3>
          </div>
          <p class="raisedAmount">Raised of N100,000</p>
        </div>
        <button class="detailsButton">View Details <i class="fas fa-arrow-right"></i></button>
      </div>
      <div class="box hide">
        <img class="img" src="../img/pic2.png" />
        <div class="boxContent">
          <h2 class="name">Genesis Anosike</h2>
          <p class="reason">Laptop Purchase</p>
          <p class="description">I need a laptop to complete my final year school project...</p>



          <!--Progress Bar-->
          <div class="meter">
            <div class="span" style="width: 10%"></div>
          </div>



          <div class="d-flex justify-content-between amount">
            <h3>N10,000</h3>
            <h3>10%</h3>
          </div>
          <p class="raisedAmount">Raised of N100,000</p>
        </div>
        <button class="detailsButton">View Details <i class="fas fa-arrow-right"></i></button>
      </div>
      <div class="box hide">
        <img class="img" src="../img/pic3.png" />
        <div class="boxContent">
          <h2 class="name">Richard Popsabey</h2>
          <p class="reason">Laptop Purchase</p>
          <p class="description">I need a laptop to complete my final year school project...</p>



          <!--Progress Bar-->
          <div class="meter">
            <div class="span" style="width: 0%"></div>
          </div>



          <div class="d-flex justify-content-between amount">
            <h3>N4,000</h3>
            <h3>10%</h3>
          </div>
          <p class="raisedAmount">Raised of N100,000</p>
        </div>
        <button class="detailsButton">View Details <i class="fas fa-arrow-right"></i></button>
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <button class="btn btn-white see-more" style="color:#FB3F5C">See more ></button>
    </div>
  </section>
@endsection


