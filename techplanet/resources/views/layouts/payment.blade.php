<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<!-- Custom styles for this template -->
<link href="form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
<main>
<div class="py-5 text-center">
  <img class="d-block mx-auto mb-4" src="https://www.teahub.io/photos/full/191-1910076_cartoon-money-clipart-clipground-jpg-transparent-background-money.jpg" alt="" width="72" height="57">
  <h2>Checkout Form</h2>
</div>

<div class="row g-5">
    <div class="row g-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <a href="/" class="btn btn-danger">Back To Main Page</a>
          <hr>
          <h4 class="mb-3">Billing address</h4>
    <form class="needs-validation" novalidate>
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="firstName" class="form-label">First name</label>
          <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
        </div>

        <div class="col-sm-6">
          <label for="lastName" class="form-label">Last name</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
        </div>

        <div class="col-12">
          <label for="phoneNumber" class="form-label">Phone Number <span class="text-muted">(Required)</span></label>
          <input type="number" class="form-control">
        </div>

        <div class="col-12">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
        </div>

        <div class="col-md-3">
          <label for="zip" class="form-label">Postcode</label>
          <input type="text" class="form-control" id="zip" placeholder="" required>
        </div>


        <div class="col-md-5">
          <label for="country" class="form-label">City</label>
          <input type="text" class="form-control" required>
        </div>

        <div class="col-md-4">
          <label for="state" class="form-label">State</label>
          <select class="form-select" id="state" required>
            <option>Choose...</option>
            <option value="1">Kelantan</option>
            <option value="2">Terengganu</option>
            <option value="3">Johor</option>
            <option value="4">Kedah</option>
            <option value="5">Melaka</option>
            <option value="6">Negeri Sembilan</option>
            <option value="7">Pahang</option>
            <option value="8">Penang</option>
            <option value="9">Perak</option>
            <option value="10">Perlis</option>
            <option value="11">Sabah</option>
            <option value="12">Sarawak</option>
            <option value="13">Selangor</option>
            <option value="14">Kuala Lumpur</option>
            <option value="15">Labuan</option>
            <option value="16">Putrajaya</option>
          </select>
        </div>

      </div>

      <hr class="my-4">

      <h4 class="mb-3">Payment</h4>

      <div class="my-3">
        <div class="form-check">
          <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
          <label class="form-check-label" for="credit">Credit card</label>
        </div>
        <div class="form-check">
          <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
          <label class="form-check-label" for="debit">Debit card</label>
        </div>
      </div>

      <div class="row gy-3">
        <div class="col-md-6">
          <label for="cc-name" class="form-label">Name on card</label>
          <input type="text" class="form-control" id="cc-name" placeholder="" required>
          <small class="text-muted">Full name as displayed on card</small>
        </div>

        <div class="col-md-6">
          <label for="cc-number" class="form-label">Credit card number</label>
          <input type="text" class="form-control" id="cc-number" placeholder="" required>
        </div>

        <div class="col-md-3">
          <label for="cc-expiration" class="form-label">Expiration</label>
          <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
        </div>

        <div class="col-md-3">
          <label for="cc-cvv" class="form-label">CVV</label>
          <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
        </div>
      </div>

      <hr class="my-4">

      <button class="w-100 btn btn-primary btn-lg" type="submit">Proceed</button>
    </form>
</div>
<div class="col-md-2"></div>
</div>
</main>
