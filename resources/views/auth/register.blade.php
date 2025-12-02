<x-guest-layout>
    <x-nav />
    <div class="flex container align-middle justify-center my-20 mt-10 px-10 gap-5">
    <div class="w-1/3 ">
        <div class="bg-white rounded-2xl   px-8 py-4 border-gray-200 border max-w-md w-full">
      <form method="POST" action="{{ route('register') }}" class="">
        <h1 class="text-[#003F7D] font-bold text-center text-3xl mb-5 mt-2 pb-5"> <span class=""> Create </span> <span class="text-[#F98149]"> Account </span> </h1>
        @csrf

        <!-- Email -->
        <div >
            
            <x-text-input id="name" class=" w-full px-2 py-2 border-0 border-b-2  border-gray-200 text-gray-500 rounded-0" placeholder="Username" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>  
        <!-- Email -->
        <div class="mt-4">
            
            <x-text-input id="email" class=" w-full px-2 py-2 border-0 border-b-2  border-gray-200 text-gray-500 rounded-0" placeholder="Email Address" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>  
        <!-- Password -->
        <div class="mt-4">
           
            <x-text-input id="password" class="w-full px-2 py-2 border-0 border-b-2  border-gray-200 text-gray-500 rounded-0"
                            type="password"
                            name="password"
                            required autocomplete="new-password" 
                            placeholder="Password"
                            />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">


            <x-text-input id="password_confirmation" class="w-full px-2 py-2 border-0 border-b-2  border-gray-200 text-gray-500 rounded-0"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Confirm Password"
                            />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <!-- Remember me -->
        <div class="mt-4">
            <input type="checkbox" name="Remember Me" id="" class="rounded-sm border-5 border-gray-300 text-bold">
            <p  class="text-gray-500 inline text-sm">Remember me</p>
        </div>
        <!-- Buttons -->
        <div class=" grid justify-center items-center mt-5 ">
            <div>
               
              <x-primary-button class=" items-center justify-center  ">
                {{ __('Create Account') }}
            </x-primary-button>
            </div>  

            <div class="mt-2 ">
                 <p><span class="text-gray-400 text-sm font-[450]"> Already Created ? </span>  <a class="  text-sm text-gray-600
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

     
        <div class=" my-5 ps-5 ms-5">
                <svg  class=" ms-5"  height="9" viewBox="0 0 284 9" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M138.858 8.12084C138.16 8.12084 137.529 7.9642 136.965 7.65091C136.401 7.32867 135.958 6.88112 135.636 6.30825C135.314 5.72643 135.153 5.0551 135.153 4.29427C135.153 3.54238 135.318 2.87552 135.649 2.29371C135.981 1.71189 136.433 1.26433 137.006 0.951048C137.578 0.637761 138.218 0.481118 138.926 0.481118C139.633 0.481118 140.273 0.637761 140.846 0.951048C141.418 1.26433 141.87 1.71189 142.202 2.29371C142.533 2.87552 142.698 3.54238 142.698 4.29427C142.698 5.04615 142.528 5.71301 142.188 6.29482C141.848 6.87664 141.383 7.32867 140.792 7.65091C140.21 7.9642 139.566 8.12084 138.858 8.12084ZM138.858 6.79161C139.252 6.79161 139.619 6.69762 139.959 6.50965C140.308 6.32168 140.59 6.03972 140.805 5.66378C141.02 5.28783 141.128 4.83133 141.128 4.29427C141.128 3.7572 141.025 3.30517 140.819 2.93818C140.613 2.56224 140.34 2.28028 140 2.09231C139.66 1.90433 139.293 1.81035 138.899 1.81035C138.505 1.81035 138.138 1.90433 137.798 2.09231C137.467 2.28028 137.202 2.56224 137.006 2.93818C136.809 3.30517 136.71 3.7572 136.71 4.29427C136.71 5.09091 136.912 5.70853 137.314 6.14713C137.726 6.57678 138.241 6.79161 138.858 6.79161ZM145.742 1.67608C145.966 1.30014 146.261 1.00923 146.628 0.803356C147.004 0.588531 147.447 0.481118 147.958 0.481118V2.06545H147.568C146.968 2.06545 146.512 2.21762 146.199 2.52196C145.894 2.82629 145.742 3.3544 145.742 4.10629V8H144.212V0.601957H145.742V1.67608Z" fill="#B1B1B1"/>
        <path d="M0.790039 4.09259L122.282 3.26045" stroke="#B1B1B1" stroke-opacity="0.4" stroke-width="2"/>
        <path d="M162.286 2.98621L283.778 2.15407" stroke="#B1B1B1" stroke-opacity="0.4" stroke-width="2"/>
        </svg>
        </div>

   <!-- Socials Login -->
        <div class="w-full flex justify-center gap-2 mt-5">
                <button class="w-1/3 rounded-lg bg-gray-200 text-gray-600 py-2 ">
                     <img src="Img/SocailLogin/Google.png" class=" inline" style="height:30px;" alt="">
                      Sign in
                </button>

                <button  class="w-1/3 rounded-lg bg-[#3575DC] text-white">
               <img src="Img/SocailLogin/facebook.png" class=" inline" style="height:25px;" alt=""> Sign in
                </button>

                <button class="w-1/3 rounded-lg bg-[#404040] text-white  ">
                     <img src="Img/SocailLogin/apple.png" class=" inline" style="" alt="">
                      Sign in
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
    </div>
    <x-footer></x-footer>
</x-guest-layout>
