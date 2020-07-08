@extends('layout.app');

@section('content');

<div style="display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
height: 100vh;
z-index: 10000000;
">
  <button id="one" class="btn btn-lg btn-success my-4">Click
    Here to Open the Payment Successful Modal</button>
  <button id="two" class="btn btn-lg btn-danger my-4">Click Here
    to Open the Payment Failed Modal</button>
</div>

<!-- Payment Failed Modal -->
<div class="modal fade" id="paymentFailedModal" class="p-0" tabindex="-1" role="dialog"
  aria-labelledby="paymentFailedModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body d-flex flex-column align-items-center">
        <svg class="mx-auto modal__logo" width="200" height="200" viewBox="0 0 200 200" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M100 0C44.7 0 0 44.7 0 100C0 155.3 44.7 200 100 200C155.3 200 200 155.3 200 100C200 44.7 155.3 0 100 0ZM150 135.9L135.9 150L100 114.1L64.1 150L50 135.9L85.9 100L50 64.1L64.1 50L100 85.9L135.9 50L150 64.1L114.1 100L150 135.9Z"
            fill="#FF0303" fill-opacity="0.7" />
        </svg>

        <h2 class="mb-3">Payment Failed</h2>

        <p id="amountDonated" class="text-muted text-center">
          Unable to complete transaction, please check your details and try
          again
        </p>

        <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">
          Try Again
        </button>
      </div>
    </div>
  </div>
</div>
<!-- End of Payment Failed Modal -->

<!-- Payment Successful Modal -->
<div class="modal fade" id="paymentSuccessModal" class="p-0" tabindex="-1" role="dialog"
  aria-labelledby="paymentSuccessModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body d-flex flex-column align-items-center">
        <svg class='mx-auto modal__logo' width="200" height="200" viewBox="0 0 200 200" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M100 0C44.8 0 0 44.8 0 100C0 155.2 44.8 200 100 200C155.2 200 200 155.2 200 100C200 44.8 155.2 0 100 0ZM80 150L30 100L44.1 85.9L80 121.7L155.9 45.8L170 60L80 150Z"
            fill="#9ADF8F" />
        </svg>

        <h2 class="mb-3">Payment Successful</h2>

        <h3 class="mb-3 text-muted">Amount Donated</h3>
        <p id="amountDonated" class="text-muted">N100,000</p>
        <h3 class="mb-3 text-muted">Transaction ID:</h3>
        <p id="transactionID" class="text-muted">123456</p>

        <button type="button" class="btn btn-lg btn-outline-danger" data-dismiss="modal">Continue
          <svg class="modal-button__icon" width="8" height="12" viewBox="0 0 8 12" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.589844 10.59L5.16984 6L0.589844 1.41L1.99984 0L7.99984 6L1.99984 12L0.589844 10.59Z"
              fill="#FB3F5C" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- End of Payment Successful Modal -->


@push('scripts')
<script src="{{asset('js/custom-js/testmodals.js')}}"></script>
@endsection
