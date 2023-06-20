<!-- nav -->
<nav class="fixed bg-transparent backdrop-blur w-full z-30 transition-all duration-300 ease-linear">
   <div class="mx-auto container h-14 flex justify-between items-center">
      <div class="lg:pl-10 pl-4">
         <h4 class="text-2xl font-bold text-emerald-400 font-Lato">M.Ariq</h4>
      </div>
      <div class="relative w-max mr-3">
         <label class="btn btn-circle btn-sm border-none bg-emerald-400 hover:bg-teal-300 border-emerald-400 swap swap-rotate lg:hidden">
            <!-- this hidden checkbox controls the state -->
            <input type="checkbox" id="toogle" />
            <!-- hamburger icon -->
            <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
               <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
            </svg>
            <!-- close icon -->
            <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
               <polygon points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
            </svg>
         </label>
         <ul class="lg:flex lg:flex-row lg:items-center lg:text-lg lg:static lg:bg-transparent lg:h-10 lg:w-auto lg:shadow-none
                  lg:visible lg:opacity-100 absolute top-12 right-6 w-[200px] invisible opacity-0 p-2 rounded-box bg-white shadow-xl text-lg transition-all duration-300 ease-in-out font-Lato">
            <li><a href="/" class="p-3 text-dark transition-all hover:text-emerald-400 rounded-xl hover:bg-slate-300 flex lg:hover:bg-transparent">Home</a>
            </li>
            <li><a href="/about" class="p-3 text-dark transition-all hover:text-emerald-400 rounded-xl hover:bg-slate-300 flex lg:hover:bg-transparent">About</a>
            </li>
            <li><a href="/blog" class=" p-3 text-dark transition-all hover:text-emerald-400 rounded-xl hover:bg-slate-300 flex lg:hover:bg-transparent">Blog</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<!-- end nav -->