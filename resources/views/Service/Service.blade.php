@include('Layouts.Top')
<div class="page-wrapper">
@include('Layouts.Header')
<section class="page-title" style="background-image: url(images/background/7.webp)">
      <div class="auto-container">
        <h2>Service's</h2>
        <ul class="bread-crumb clearfix">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Service's</li>
        </ul>
      </div>
    </section>
@include('Service.OurService')
@include('Service.Testinomial')    
</div>
@include('MainPage.Footer')
@include('Layouts.Down')