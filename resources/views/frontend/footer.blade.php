<div class="footer bg-dark">
	<div class="container pt-4">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<legend>Liên kết nhanh</legend>
				<p style="margin: 0 0 0;"><i class="fas fa-sort-up" style="transform: rotate(90deg);"></i><a href="{{url('/')}}" style="text-decoration: none;color: grey"> Trang chủ</a></p>
				<p style="margin: 0 0 0;"><i class="fas fa-sort-up" style="transform: rotate(90deg);"></i><a href="{{url('/product')}}" style="text-decoration: none;color: grey"> Sản phẩm</a></p>
				<p style="margin: 0 0 0;"><i class="fas fa-sort-up" style="transform: rotate(90deg);"></i><a href="{{url('/contact')}}" style="text-decoration: none;color: grey"> Liên hệ</a></p>
				<p style="margin: 0 0 0;"><i class="fas fa-sort-up" style="transform: rotate(90deg);"></i><a href="{{url('/cart')}}" style="text-decoration: none;color: grey"> Giỏ hàng</a></p>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<legend>Danh mục sản phẩm</legend>
				<?php $categories = DB::table('category')->get(); ?>
				@foreach($categories as $item)
					<p style="margin: 0 0 0;"><i class="fas fa-sort-up" style="transform: rotate(90deg);"></i><a href="{{url('/product?category='.$item->id)}}" style="text-decoration: none;color: grey"> {{$item->name}}</a></p>
				@endforeach
			</div>
			<div class="col-md-5">
				<legend>Về chúng tôi</legend>
				<div class="row" style="overflow: auto;">
					<div class="col-md-3 col-sm-6"><img width="90" src="{{asset('/images/logoWEB/logo.png')}}">
					</div>
					<div class="col-md-9 col-sm-6">
						<p style="margin: 0 0 0;">Dương Nguyễn Tiến Dũng-21103100083-02/12/2002</p>
						<p style="margin: 0 0 0;">Lê Đắc Long-21103100062-08/06/2003</p>
						<p style="margin: 0 0 0;">Nguyễn Xuân Phượng-21103100946-02/11/2003</p>
						<p style="margin: 0 0 0;">Phạm Khả Quý-21103100265-25/11/2003</p>

					</div>
				</div>
			
			</div>
		</div>
	</div>
	<div class="" style="background: black;"><div class="text-center">Designed by Nguyen Xuan Phuong </div></div>
</div>