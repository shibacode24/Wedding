@extends('website.layout')
@section('content')
    <div class="clearfix"></div>

    <div id="titlebar" class="gradient margin-bottom-0"
        style="background-image: url({{ asset('public/images/page-title.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Vendor Registration</h2>
                </div>
            </div>
        </div>
    </div>

 <section class="fullwidth_block padding-bottom-70 padding-top-20" data-background-color="#f9f9f9"> 
	  <div class="container">
	<!--	<div class="row">
		  <div class="col-md-8 col-md-offset-2">
			<h2 class="headline_part centered margin-top-80">How It Works? <span class="margin-top-10">Discover & connect with great local businesses</span> </h2>
		  </div>
		</div>-->
		<div class="row container_icon">
			
		  <div class="col-md-12">
        <section id="contact">
          <h4><i class="sl sl-icon-phone"></i> Fill the form now</h4>          
          <form id="contactform">
            <div class="row">
              <div class="col-md-12">  
				  <input name="name" type="text" placeholder="Your Name" required />                
              </div>
              <div class="col-md-6">                
                  <input name="email" type="email" placeholder="Email Id" required />                
              </div>
              <div class="col-md-6">
                  <input name="number" type="text" placeholder="Phone Number" required />              
              </div>
			  <div class="col-md-12">
				  <textarea name="comments" cols="40" rows="2" id="comments" placeholder="Your Message" required></textarea>
			  </div>
            </div>            
            <input type="submit" class="submit button" id="submit" value="Submit" />
          </form>
        </section>
      </div>
			
		</div>
	  </div>
  </section>

@stop
