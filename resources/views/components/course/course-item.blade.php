
<div class="md:w-1/4  p-2 rounded-xl overflow-hidden  ">
    
    <!-- Top Section -->
    <div class="bg-[#003F7D] h-[200px] flex items-center justify-center rounded-t-xl">
      <img src="images/courses/angular.png" alt="Angular Logo" class=" h-[120px]" />
    </div>

    <!-- Content Section -->
     <div class="bg-[#003F7D] rounded-b-xl">
    <div class="px-5 py-2 text-center rouded rounded-t-lg bg-white mx-4">
      <h2 class="text-2xl font-semibold ">Angular JS</h2>
      <p class=" text-sm mt-2 font-md">
        A JavaScript-based open-source front-end web framework for developing single-page applications.
      </p>

    
    </div>
    </div>
    <div class="bg-white pt-1 mx-4 rounded-b-lg pb-2">
      <!-- Buttons -->
      <div class="mt-4 flex justify-center items-center space-x-3">
        <button class="flex items-center border border-[#F98149] px-4 py-1 rounded-md text-sm hover:bg-orange-50 transition">
          <img src="Images/Actions/LiveDemo.png" class="h-4 w-4 mr-1" alt="">
          <a href="">
          Live Demo
          </a>
        </button>
       
        
        @auth
        
       <button 
  class="flex items-center border border-[#F98149] px-4 py-1 rounded-md text-sm hover:bg-orange-50 transition enroll-btn"
  data-course-id=""
>
  <img src="{{ asset('Images/Actions/Enroll.png') }}" class="h-4 w-4 mr-1" alt="">
  Enroll Now
</button>
 
@endauth
@guest
<a href="{{ route('login') }}"
  class="flex items-center border border-[#F98149] px-4 py-1 rounded-md text-sm hover:bg-orange-50 transition enroll-btn"
  
>
  <img src="{{ asset('Images/Actions/Enroll.png') }}" class="h-4 w-4 mr-1" alt="">
  Enroll Now
</a>
@endguest
        <!-- Toast container -->
<div id="toast" class="fixed bottom-6 right-6 bg-green-600 text-white px-6 py-3 rounded shadow-lg opacity-0 pointer-events-none transition-opacity duration-300 z-50"></div>

      </div>

      <!-- Download Button -->
      <div class="mt-2 md:ms-5 md:px-10 ">
            
        <button class="flex items-center   bg-[#F98149] text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-orange-500 transition">
          <img src="Images/Actions/Download.png" class="h-4 w-4 mr-1" alt="">
          Download Curriculum
        </button>
        
      </div>


      </div>
  </div>

  <div id="enrollModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
  <div class="bg-white rounded-lg max-w-md w-full p-6 relative">
    <button id="closeModal" class="absolute top-2 right-3 text-gray-600 hover:text-gray-900 text-xl font-bold">&times;</button>
    <h2 class="text-xl font-semibold mb-4 text-blue-900">Confirm Enrollment</h2>
    <p>Are you sure you want to enroll in this course?</p>
    <div class="mt-6 flex justify-end gap-3">
      <button id="cancelBtn" class="px-4 py-2 border rounded hover:bg-gray-100">Cancel</button>
      <a id="confirmEnrollBtn" href="#" class="px-4 py-2 bg-[#F98149] text-white rounded hover:bg-[#FF8B36]">Enroll</a>
    </div>
  </div>
</div>
@auth
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('enrollModal');
    const closeModalBtn = document.getElementById('closeModal');
    const cancelBtn = document.getElementById('cancelBtn');
    const confirmEnrollBtn = document.getElementById('confirmEnrollBtn');

    // Open modal when any enroll button is clicked
    document.querySelectorAll('.enroll-btn').forEach(button => {
      button.addEventListener('click', () => {
        const courseId = button.getAttribute('data-course-id');
        // Set the enroll link dynamically
        confirmEnrollBtn.href = `/courseEnroll/${courseId}`;
        modal.classList.remove('hidden');
      });
    });

    // Close modal handlers
    closeModalBtn.addEventListener('click', () => modal.classList.add('hidden'));
    cancelBtn.addEventListener('click', () => modal.classList.add('hidden'));

    // Optional: close modal if click outside modal content
    modal.addEventListener('click', e => {
      if (e.target === modal) {
        modal.classList.add('hidden');
      }
    });
  });
</script>
<div id="toast" class="fixed bottom-6 right-6 bg-green-600 text-white px-6 py-3 rounded shadow-lg opacity-0 pointer-events-none transition-opacity duration-300 z-50"></div>

<script>
  function showToast(message, success = true) {
    const toast = document.getElementById('toast');
    toast.textContent = message;
    toast.style.backgroundColor = success ? '#16a34a' : '#dc2626';
    toast.classList.remove('opacity-0', 'pointer-events-none');
    toast.classList.add('opacity-100');

    setTimeout(() => {
      toast.classList.add('opacity-0', 'pointer-events-none');
      toast.classList.remove('opacity-100');
    }, 3000);
  }

  document.getElementById('enrollBtn').addEventListener('click', function(event) {
    event.preventDefault(); // Stop page reload / form submit
    showToast('Enrollment successful!');
    // You can add your AJAX enrollment code here if needed
  });
</script>
@endauth

