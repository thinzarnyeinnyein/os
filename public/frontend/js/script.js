$(document).ready(function(){
	getData();
	count();

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	// alert ("Hello");
	$('.row').on('click','.view_detail',function(){

		var id = $(this).data('id');
		var name = $(this).data('name');
		var photo = $(this).data('photo');
		var price = $(this).data('price');
		var discount = $(this).data('discount');
		var brand = $(this).data('brand');
		var subcategory= $(this).data('subcategory');
		var description= $(this).data('description');

		// alert(id+name+photo+price+discount+brand+subcategory+description)
		$(".pimg").attr('src',"backend/"+photo);
		$(".pname").text("Name:" +name);
		$(".pbrand").text("Brand:" +brand);
		$(".psubcategory").text("Subcategory:" +subcategory);
		$(".pprice").text("Price:" +price);
		$(".pdiscount").text("Discount:" +discount);
		$(".pdescription").text("Description:" +description);
		
		$(".cart").attr({'data-id':id,'data-name':name,'data-photo':photo,'data-price':price,'data-discount':discount});


	})
	// cart to cart
	$('.cart').on('click',function(){
		var item_qty=parseInt($('#qty').val());
		var cid = $(this).data('id');
		var cname = $(this).data('name');
		var cphoto = $(this).data('photo');
		var cprice = $(this).data('price');
		var cdiscount = $(this).data('discount');
		 var qty=1;
		if (item_qty) {
			qty+=item_qty;
		}
		// alert(id+name+photo+price+discount);

		var mobile_item={
					 id:cid,
					 name:cname,
					 photo:cphoto,
					 price:cprice,
					 discount:cdiscount,
					 qty:qty
		}


		var mobileString= localStorage.getItem("mobile_shop");

		var mobileArray;

				if(mobileString==null){

					mobileArray = Array();

				}else{
					mobileArray= JSON.parse(mobileString);
				}

				var status = false;

				$.each(mobileArray,function(i,v){

					if(cid==v.id){

						status= true;

						if (!item_qty) {
							v.qty++;
						}else{
							v.qty+=item_qty;
						}
						
					}
				})
				    if(status==false){
						mobileArray.push(mobile_item);
                   }

					var mobileData = JSON.stringify(mobileArray);
				    localStorage.setItem("mobile_shop",mobileData);
				    count();




	})

	function getData(){

				var mobileString =localStorage.getItem("mobile_shop");

				if(mobileString){
					var mobileArray =JSON.parse(mobileString);

					html='';
				    var no=1;
				    var total=0;

					$.each(mobileArray,function(i,v){

						var name = v.name;
						var photo=v.photo;
						var unit_price= v.price;
						var discount=v.discount;
						var qty = v.qty;

						if (discount) {
							var price_show=discount+'<del class="d-block">'+unit_price+'</del>';
							var price = discount;
						}else{
							var price_show = unit_price;
							var price = unit_price;
						}


						html+=`<tr>
						<td>${no++}</td>
						<td>${name}</td>
						<td><img src="${photo}" width="100"></td>
						<td>${price_show}</td>
						
						<td><button class="min" data-product_i=${i}>-</button> ${qty} <button class="max" data-product_i=${i}>+</button></td>
						<td>${price*qty}</td>

						</tr>`

						total += price*qty;


					})
					html +=`<tr>
					<td colspan="5">Total</td>
					<td>${total}</td>
					</tr>`

					$("tbody").html(html);
					$(".total").val(total);


				}else{

					html ='';
					$("tbody").html(html);


				}
				count();
			}

	$("tbody").on('click','.max',function(){
				var product_i = $(this).data('product_i');
				//alert(item_i);

				var mobileString=localStorage.getItem("mobile_shop");
				if(mobileString){

					var mobileArray= JSON.parse(mobileString);

					$.each(mobileArray,function(i,v){

						if(product_i==i){
							v.qty++;

						}
						var mobileData = JSON.stringify(mobileArray);
						localStorage.setItem("mobile_shop",mobileData);
						getData();


					})
				}

			})

	$("tbody").on('click','.min',function(){
				var product_i = $(this).data('product_i');
				//alert(item_i);

				var mobileString=localStorage.getItem("mobile_shop");
				if(mobileString){

					var mobileArray= JSON.parse(mobileString);

					$.each(mobileArray,function(i,v){

						if(product_i==i){
							v.qty--;
							if(v.qty==0){
								mobileArray.splice(product_i,1);
							}

						}
						var mobileData = JSON.stringify(mobileArray);
						localStorage.setItem("mobile_shop",mobileData);
						getData();


					})
				}

			})
	// For Buy Now
	$('.buy_now').on('click',function(){
		// alert("LOL");
		var notes=$('.notes').val();
		// var total= $('.total').val();
		// alert(notes);
		var mobileString = localStorage.getItem("mobile_shop");
		if(mobileString){
			// var mobileArray =JSON.parse(mobileString);
			$.post('/orders',{shop_data:mobileString,notes:notes},function(response){
				if(response){

					alert(response);
					localStorage.clear();
					getData();
					location.href="/";
				}
			})
		}
	})



	// $("#order").click(function(){
	// 			var ans = confirm("Are you sure order");
	// 			if(ans){
	// 				localStorage.clear();
	// 				getData();

	// 			}
	// 		})
 	

	function count(){

		var mobileString = localStorage.getItem("mobile_shop");
		if(mobileString){
			var mobileArray = JSON.parse(mobileString);
			if(mobileArray!=0){
				var count = mobileArray.length;
			
			$("#item_count").text(count);
		}else{
			$("#item_count").text('');

		}
	}
	else{
		$("#item_count").text('');


	}

}

})