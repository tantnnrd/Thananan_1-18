@extends('layouts.master_frontend')
@section('two')
<!-- Blog Page -->
<div class="blog__single__page">
		<div class="blog__slider">
			<div class="blog__slider__item">
				<img src="{{ asset('frontend/img/blog-single/x1.jpg') }}" alt="">
			</div>
			<div class="blog__slider__item">
				<img src="{{ asset('frontend/img/blog-single/2.png') }}" alt="">
			</div>
			<div class="blog__slider__item">
				<img src="{{ asset('frontend/img/blog-single/3.png') }}" alt="">
			</div>
		</div>
		<article class="blog__article">
			<div class="blog__container">
				<div class="blog__header">
					<div class="blog__cata">Photography</div>
					<h2 class="blog__single__title">ภัทรวิชญ์ เทคโนโลยี</h2>
					<div class="blog__metas">
						<div class="blog__meta">By Colorlib </div>
						<div class="blog__meta">December 27, 2019</div>
						<div class="blog__meta">No Comments</div>
					</div>
				</div>
				<p>ให้บริการเกี่ยวกับวิทยุสื่อสาร ที่ใช้ภายในองค์กร ด้วยประสบการณ์ด้านวิทยุสื่อสารมามากกว่าสิบปี บริษัทฯได้พัฒนาคุณภาพด้านสินค้าและบริการอย่างต่อเนื่อง ปัจจุบัน เรามีพื้นที่ให้บริการและสถานที่จอดรถสำหรับลูกค้า กว้างขวางมากยิ่งขึ้น ลูกค้าสามารถนั่งรอรับสินค้า หรือ รอรับเครื่องซ่อมได้อย่างสะดวกสบายบริษัทฯมีความเข้าใจปัญหาด้านวิทยุสื่อสารเป็นอย่างดี ยินดีให้คำปรึกษาเกี่ยวกับการใช้งานด้านต่างๆ บริการของเรามีดังนี้ </p>
			<blockquote>
				<p>Distribute radio communication and communication equipment Pattarwit, a machine of agile communication in service. Standard service centre</p>
				<h4>ภัทรวิชญ์ เทคโนโลยี</h4>
				<h5>PATTARAWIT</h5>
			</blockquote>
			<div class="blog__banner pt-4 pb-5">
				<img src="{{ asset('frontend/img/blog-single/4.png') }}" alt="">
			</div>
			<div class="blog__container">
				<h4>วิทยุสื่อสาร</h4>
				<p>อุปกรณ์สื่อสารประเภทควบคุมที่อยู่ภายใต้การดูแลของ กสทช ทำงานโดยการแปลงกระแสไฟฟ้าให้เป็นคลื่นแม่เหล็กไฟฟ้า แล้วส่งสัญญาณคลื่นวิทยุผ่านทางสายอากาศไปยังเครื่องรับอื่นๆ โดยมีแหล่งพลังงานจากแบตเตอรี่ ซึ่งประกอบด้วยตัวเครื่อง แบตเตอรี่ สายอากาศ สายคล้องมือ คลิปหลัง อะแดปเตอร์ และแท่นชาร์จ สามารถใช้เป็นอุปกรณ์สื่อสารได้ทั้งในงานที่ต้องการจำกัดพื้นที่ในการสื่อสารและงานที่ต้องการสื่อสารในวงกว้างหรือไม่จำกัดพื้นที่ได้ วิทยุสื่อสารไม่มีค่าใช่จ่ายรายเดือนและไม่จำกัดเวลาในกรสื่อสาร ส่วนใหญ่มี 3 แบบให้เลือกใช้งาน คือ วิทยุสื่อสารแบบมือถือ วิทยุสื่อสารแบบเคลื่อนที่ติดตั้งในรถยนต์ และ วิทยุสื่อสารแบบประจำที่ติดตั้งในอาคาร สำหรับการใช้งานจะต้องมีใบอนุญาตจาก กสทช จึงจะสามารถใช้งานได้ และสามารถพบการใช้งานได้ในหน่วยงานราชการ รัฐวิสาหกิจ อาสาสมัครของมูลนิธิต่างๆ หรือหน่วยงานเอกชน </p>

			</div>
			<div class="blog__container post__footer">
				<div class="row">
					<div class="col-md-6">
						<div class="post__tags">
							<a href="#">Camera</a>
							<a href="#">Photography</a>
							<a href="#">Tips</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="post__share">
							<span>Share:</span>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-youtube-play"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="blog__container comment__area">
				<h2>Leave a Comment</h2>
				<form class="comment__form">
					<div class="row">
						<div class="col-lg-6">
							<input type="text" placeholder="Name">
						</div>
						<div class="col-lg-6">
							<input type="text" placeholder="Email">
						</div>
						<div class="col-lg-12">
							<textarea placeholder="Message"></textarea>
							<button class="site-btn">Send Message</button>
						</div>
					</div>
				</form>
			</div>
			<div class="container recent__post">
				<div class="text-center">
					<h2>You may also like</h2>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="blog__item set-bg" data-setbg="{{ asset('frontend/img/blog/4.jpg') }}">
							<div class="blog__content">
								<div class="blog__date">DEC 18, 2019</div>
								<h4><a href="./blog-single.html">Assorted Textures FREE Stock Photos</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blog__item set-bg" data-setbg="{{ asset('frontend/img/blog/2.jpg') }}">
							<div class="blog__content">
								<div class="blog__date">DEC 18, 2019</div>
								<h4><a href="./blog-single.html">Assorted Textures FREE Stock Photos</a></h4>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blog__item set-bg" data-setbg="{{ asset('frontend/img/blog/3.jpg') }}">
							<div class="blog__content">
								<div class="blog__date">DEC 18, 2019</div>
								<h4><a href="./blog-single.html">Assorted Textures FREE Stock Photos</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
	<!-- Blog Page end -->
    @endsection
