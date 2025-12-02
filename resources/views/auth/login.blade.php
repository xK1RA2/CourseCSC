<x-guest-layout>
    <x-nav />
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<div class="flex container align-middle justify-center my-20 mt-10 px-10 gap-5">
    <div class="w-1/3">
       <div class="bg-white rounded-2xl  shadow-lg shadow-gray-400 px-8 py-4 border-gray-200 border max-w-md w-full">
    <form method="POST" action="{{ route('login') }}" class="">
        <h1 class="text-[#003F7D] font-bold text-center text-3xl mb-5  pb-7"> Log in </h1>
        @csrf

       <div>
            <!-- Email -->
            <x-text-input id="email"
             class=" w-full px-2 py-2 border-0 border-b-2  border-gray-200 text-gray-500 rounded-0"
              type="email" name="email" :value="old('email')" 
              required autofocus autocomplete="username" 
               placeholder="Email Address"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
          

            <x-text-input id="password" class=" w-full px-2 py-2 border-0 border-b-2  border-gray-200 text-gray-500 rounded-0"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        
        <!-- Remember me -->
        <div class="mt-4">
            <input type="checkbox" name="Remember Me" id="" class="rounded-sm border-5 border-gray-300 text-bold">
            <p  class="text-gray-500 inline text-sm">Remember me</p>
        </div>
        <!-- Buttons -->
        <div class=" grid  justify-center items-center mt-5 ">
            <p class=" justify-center items-center ">
               
              <x-primary-button class=" w-full items-center text-lg justify-center bg-[#003F7D]  ">
                {{ __('Login') }}
            </x-primary-button>
            </p>  
            
            <div class="mt-2 ">
                 <p><span class="text-gray-400 text-sm font-[450]">Already Created ? </span>  <a class="  text-sm text-gray-600
             dark:text-gray-400 hover:text-gray-900
              dark:hover:text-gray-100 rounded-md
               focus:outline-none focus:ring-2
                focus:ring-offset-2 focus:ring-indigo-500
                 dark:focus:ring-offset-gray-800
                 no-underline" href="{{ route('login') }}">
                {{ __('Login Here') }}
            </a></p>
          
          
                </div>
        </div>
<div class="text-center justify-center ps-12 my-3 mt-10 ">
     <svg width="283" height="8" viewBox="0 0 283 8" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M138.075 7.63964C137.377 7.63964 136.746 7.48299 136.182 7.16971C135.618 6.84747 135.175 6.39992 134.853 5.82705C134.531 5.24523 134.369 4.5739 134.369 3.81306C134.369 3.06118 134.535 2.39432 134.866 1.8125C135.197 1.23069 135.649 0.783134 136.222 0.469847C136.795 0.15656 137.435 -8.30398e-05 138.142 -8.30398e-05C138.849 -8.30398e-05 139.489 0.15656 140.062 0.469847C140.635 0.783134 141.087 1.23069 141.418 1.8125C141.75 2.39432 141.915 3.06118 141.915 3.81306C141.915 4.56495 141.745 5.23181 141.405 5.81362C141.065 6.39544 140.599 6.84747 140.009 7.16971C139.427 7.48299 138.782 7.63964 138.075 7.63964ZM138.075 6.31041C138.469 6.31041 138.836 6.21642 139.176 6.02845C139.525 5.84048 139.807 5.55852 140.022 5.18257C140.237 4.80663 140.344 4.35013 140.344 3.81306C140.344 3.276 140.241 2.82397 140.036 2.45698C139.83 2.08104 139.557 1.79908 139.216 1.61111C138.876 1.42313 138.509 1.32915 138.116 1.32915C137.722 1.32915 137.355 1.42313 137.015 1.61111C136.683 1.79908 136.419 2.08104 136.222 2.45698C136.025 2.82397 135.927 3.276 135.927 3.81306C135.927 4.60971 136.128 5.22733 136.531 5.66593C136.943 6.09558 137.458 6.31041 138.075 6.31041ZM144.959 1.19488C145.183 0.818938 145.478 0.528029 145.845 0.322155C146.221 0.10733 146.664 -8.30398e-05 147.174 -8.30398e-05V1.58425H146.785C146.185 1.58425 145.729 1.73642 145.415 2.04076C145.111 2.34509 144.959 2.8732 144.959 3.62509V7.5188H143.428V0.120756H144.959V1.19488Z" fill="#B1B1B1"/>
<path d="M0.00683594 3.61133L121.499 2.77919" stroke="#B1B1B1" stroke-opacity="0.4" stroke-width="2"/>
<path d="M161.502 2.50513L282.995 1.67299" stroke="#B1B1B1" stroke-opacity="0.4" stroke-width="2"/>
</svg>
</div>
        

   <!-- Socials Login -->
        <div class="w-full  justify-center  mt-5 ">
                <button class="w-full rounded-lg bg-gray-200 text-gray-600 py-2 my-1">
                     <img src="images/SocailLogin/Google.png" class=" inline" style="height:30px;" alt="">
                      Login with Google
                </button>

                <button  class="w-full rounded-lg bg-[#3575DC] text-white py-2 my-1">
               <img src="images/SocailLogin/facebook.png" class=" inline" style="height:25px;" alt=""> Login with Facebook
                </button>

                <button class="w-full rounded-lg bg-[#404040] text-white py-2  my-1">
                     <img src="images/SocailLogin/apple.png" class=" inline" style="" alt="">
                      Login with Apple
                </button>
        </div>

        <div class=" my-5 px-5 text-center text-sm text-gray-400">
            <p class="justify-center items-center">
            By continuing, you agree to the <span class="text-[#F98149]"> Terms of Service </span> and <span class="text-[#F98149]">Privacy Policy</span>
            </p>
        </div>
    </form>
    </div>
    </div>
    <div class="w-1/2 mt-10 pt-5">
        <img src="images/auth/frame.png" alt="">
    </div>
</div>
   

    <x-footer></x-footer>
</x-guest-layout>
