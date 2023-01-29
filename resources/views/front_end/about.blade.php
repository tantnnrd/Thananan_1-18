@extends('layouts.master_frontend')
@section('two')

 <!-- รูปเนื้อหา -->
 <section class="about__page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4">
					<div class="about__text">
						<h3 class="about__title">Product</h3>
						<div class="about__meta">
							<img src="{{ asset('frontend/img/1.png')}}">
							<div class="about__meta__info">
								<h5>ภัทรวิชญ์ เทคโนโลยี</h5>
								<p>PATTARAWIT</p>
							</div>
						</div>
						<p>จัดจำหน่ายวิทยุสื่อสารและอุปกรณ์สื่อสาร Pattarwit อณาจักรแห่งการสื่อสารว่องไวด้านบริการ ศูนย์บริการที่ได้มาตราฐาน</p>
						<p></p>
						<img src="{{ asset('frontend/img/logoๅ.png') }}">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="experience__text">
						<h3 class="about__title"></h3>
						<div class="experience__item">
							<h4>Photo</h4>
							<p>PHOTOS</p>
							<img src="{{ asset('frontend/img/4.png')}}">
					</div>
				</div>
		</div>
	</section>

<!-- สิ้นสุดรูปเนื้อหา -->
@endsection
