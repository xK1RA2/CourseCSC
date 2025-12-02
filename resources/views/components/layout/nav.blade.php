@props(['orange'=>false , 'blue'=>false])
<nav class="@if($orange == "true") bg-[#F98149] @elseif($blue) bg-[#003F7D] @else bg-white @endif  py-4 ">
    <div class="container mx-auto px-6 flex justify-between items-center">
  
        <div class="text-2xl font-bold  md:ms-10">
            <a href="{{ route('index') }}" > <img src="images/Logo/logo.png" 
            alt="Logo" style="height:130px; width: 150px;"> </a>
                
        </div>

        <div class="hidden md:flex space-x-8 ">
            <a href="" class="font-semibold  @if($orange == "true") text-white hover:text-gray-400 @else text-gray-400 hover:text-[#F98149] @endif">Home</a>
            <a href="" class="@if($orange == "true") text-white hover:text-gray-400 @else text-gray-400 hover:text-[#F98149] @endif font-semibold ">Course Selector</a>
            <a href="" class=" @if($orange == "true") text-white hover:text-gray-400 @else text-gray-400 hover:text-[#F98149] @endif font-semibold ">Courses</a>
            <a href="" class="@if($orange == "true") text-white hover:text-gray-400 @else text-gray-400 hover:text-[#F98149] @endif font-semibold ">Pricing</a>
            <a href="" class="@if($orange == "true") text-white hover:text-gray-400 @else text-gray-400 hover:text-[#F98149] @endif font-semibold ">FAQ</a>
            <a href="" class="@if($orange == "true") text-white hover:text-gray-400 @else text-gray-400 hover:text-[#F98149] @endif font-semibold ">Contact</a>
        </div>
        
      
        @guest
        <div class="hidden md:flex space-x-4">
       
            <a href="{{ route('login') }}" class="px-12 mx-4 py-2 @if($orange == "true") text-white border-2 border-white @elseif($blue) bg-[#003F7D] text-white border-2 border-white @else text-[#F98149] border-[2px] border-[#F98149] @endif font-semibold     rounded-md">Log in</a>
            <a href="{{ route('register') }}" class="px-4 py-2 @if($orange == "true")bg-white text-black @elseif($blue) bg-white text-black  @else bg-[#F98149]  text-white @endif font-semibold rounded-md">Create Account</a>
        </div>
        @endguest
      
          
         @auth
        
        <!-- User Account Dropdown -->
         <div class="flex gap-2">
            <div class="relative hidden md:flex ">
            
               <a class="w-8 h-8 rounded-full   flex items-center justify-center" href="{{ route('profile.edit') }}">
                  <i class="fa-solid fa-gear"></i>
                </a>
          
            
            <!-- Dropdown Menu (hidden by default) -->
            <div id="user-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                
                <div class="border-t border-gray-200"><form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                    class="block px-4 py-2 w-full text-sm text-gray-700 hover:bg-gray-100">
                    Sign out
                    </button>
                </form>
            </div>

                
            </div>
        </div>
        <div class="relative hidden md:flex ">
            
            <button id="user-menu-button" class="flex items-center focus:outline-none ">
                <div class="w-8 h-8 rounded-full  bg-gray-300 flex items-center justify-center">
                  <i class="fa-regular fa-user"></i>
                </div>
            </button>
            
            <!-- Dropdown Menu (hidden by default) -->
            <div id="user-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                
                <div class="border-t border-gray-200"><form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                    class="block px-4 py-2 w-full text-sm text-gray-700 hover:bg-gray-100">
                    Sign out
                    </button>
                </form>
            </div>

                
            </div>
        </div>
        </div>
        @endauth

      
        
    
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-800 hover:text-[#F98149] focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
    

    <div id="mobile-menu" class="hidden md:hidden bg-white px-6 py-4 border-t">
        <div class="flex flex-col space-y-4">
            <a href="" class="text-gray-400 font-semibold hover:text-[#F98149]">Home</a>
            <a href="" class="text-gray-400 font-semibold hover:text-[#F98149]">Course Selector</a>
            <a href="" class="text-gray-400 font-semibold hover:text-[#F98149]">Courses</a>
            <a href="" class="text-gray-400 font-semibold hover:text-[#F98149]">Pricing</a>
            <a href="" class="text-gray-400 font-semibold hover:text-[#F98149]">FAQ</a>
            <a href="" class="text-gray-400 font-semibold hover:text-[#F98149]">Contact</a>
          @auth
          <a href="" class="text-gray-400 font-semibold hover:text-[#F98149]">Settings</a>
         
            @endauth
            <div class="flex flex-col space-y-2 pt-4 border-t">
            <a href="" class="px-12  py-2 text-[#F98149] font-semibold  border-[2px] border-[#F98149]   rounded-md">Log in</a>
            <a href="   " class="px-4 py-2 bg-[#F98149] font-semibold text-white rounded-md">Create Account</a>

          
      </div>

        </div>
    </div>
</nav>

<script>
    // Toggle mobile menu
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });

    document.getElementById('user-menu-button').addEventListener('click', function() {
            const dropdown = document.getElementById('user-dropdown');
            dropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('user-dropdown');
            const button = document.getElementById('user-menu-button');
            
            if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
</script>

