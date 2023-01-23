@extends('../layouts.customer')
@section('navbar')
    @include('../partials.customer.navbar')
@endsection

@section('content')
<header class="py-5" style="
background: #56ab2f;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #a8e063, #56ab2f);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #a8e063, #56ab2f); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <img src="/assets/img/logo.jpg" width="150" height="150" class="d-inline-block align-top" alt="">
            
        </div>
    </div>
</header>

<section class="py-5" style="margin-top: -100px; height: 60vh; background-image: url('/assets/img/bg.jfif'); background-position: center; 
  background-repeat: no-repeat;
  background-size: cover;">
        <div class="col-xl-4 mx-auto">
           <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                      <div class="text-center">
                      </div>
                        <label class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <label class="form-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      <div class="text-center">
                        <button type="submit" class="btn btn-success w-100 my-4 mb-2">LOGIN</button>
                        
                      </div>
                      <p class="mt-4 text-sm text-center">
                        Not register?
                        <a href="/register" class="text-dark font-weight-bold">CREATE ACCOUNT</a> <br> <br>
                        <a href="/password/reset/">FORGOT PASSWORD?</a>
                      </p>
                      
                </form>
              </div>
          </div>  
        </div>
</section>
@endsection

@section('script')
<script>

</script>
@endsection