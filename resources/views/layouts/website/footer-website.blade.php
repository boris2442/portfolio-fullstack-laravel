 <!--==================== FOOTER ====================-->
 <footer class="footer text-white">
     <div class="footer_bg">
         <div class="footer_container container grid">
             <div>
                 <h1 class="footer_title">John Doe</h1>
                 {{-- <h1 class="footer_title">{{ $about->name }}</h1> --}}
                 <span class="footer_subtitle">FullStack Web developer</span>
                 <p class="footer_subtitle">
                     High level experience in web design,
                     front-end and backend development,
                     producing quality work
                 </p>
             </div>
             <ul class="footer_links">
                 <li>
                     <a href="#services" class="footer_link">Services</a>
                 </li>
                 <li>
                     <a href="#portfolio" class="footer_link">Portfolio</a>
                 </li>
                 <li>
                     <a href="#contact" class="footer_link">Cantact Me</a>
                 </li>

                 @if (Auth::check() && auth()->user()->role === 'admin')
                 <li>   <a href="{{ route('admin-dashboard') }}" class="text-white">Admin Dashboard</a></li>
                  
                 @else
                 <li>   <a href="{{ route('login') }}" class="text-white">Se connecter</a></li>
                  
                 @endif




             </ul>
             <div class="footer_socails">
                 <a href="https://www.linkedin.com/in/boris-aubin-simo-26b9a0369" target="_blank" class="footer_social">
                     <i class="uil uil-linkedin"></i>
                 </a>
                 <a href="https://www.github.com/boris2442" target="_blank" class="footer_social">
                     <i class="uil uil-github-alt"></i>
                 </a>
                 <a href="https://www.twitter.com" class="footer_social">
                     {{-- <i class="uil uil-twitter-alt"></i> --}}
                     <i class="uil uil-codepen"></i>

                 </a>
             </div>
         </div>
         <p class="footer_copy text-white">&#169; Share Tutorials. All right reserved</p>
    
     </div>
 </footer>
