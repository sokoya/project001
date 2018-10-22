<?php $this->load->view('landing/resources/head_base'); ?>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/head_img') ?>
	<?php $this->load->view('landing/resources/head_category') ?>
	<?php $this->load->view('landing/resources/head_menu') ?>

		<div class="container">
            <?php if(!empty( $this->cart->contents())) : ?>
            	<header class="page-header">
                <h1 class="page-title">My Cart</h1>
            </header>
            <div class="row">
                <div class="col-md-10">
                	<?php $this->load->view('landing/msg_view'); ?>
                    <?= form_open('', 'id="cart-form"'); ?>
                    <table class="table table table-shopping-cart">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Title</th>
                                <th>Size/Colour</th>
                                <th>Price</th>
                                <th>Quality</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php $x = 0; 
                        		$total = 0;
                        		foreach ($this->cart->contents() as $product): ?>
                        		<?php
                        			$detail = $this->product->get_cart_details( base64_decode($product['id']) );
                        			$split = explode("|", $detail->image);
                        		?>
	                            <tr>
	                                <td class="table-shopping-cart-img">
                        			<?php echo form_hidden($x.'[rowid]', $product['rowid']); ?>
	                                    <a href="<?= base_url(urlify($product['name'], $product['id'])); ?>">
	                                        <img src="https://res.cloudinary.com/philo001/image/upload/h_160,w_160,q_auto,f_auto,fl_lossy,dpr_auto/v<?= $split[0] . '/' . $split[1]; ?>" alt="Carrito -marketplace <?= $product['name']; ?>" title="<?= $product['name']; ?>" />
	                                    </a>
	                                </td>
	                                <td class="table-shopping-cart-title"><a href="<?= base_url(urlify($product['name'],$product['id'])); ?>"><?= htmlentities($product['name']); ?></a><br />
	                                	<span class="text text-sm">Seller: <?= $detail->name; ?></span>
	                                </td>
	                                <td>
	                                	<?= $product['options']['size'] .'/'.  $product['options']['colour'];
	                                	?>
	                                </td>
	                                <td><?= ngn($product['price']); ?></td>
	                                <td>
	                                    <input class="form-control quantity" name="<?=$x;?>[qty]" data-set="<?= $product['qty']; ?>" data-id="<?= $x; ?>" style="width:10; padding:4px; font-size:12px;" type="number" value="<?= $product['qty']; ?>" min="1" max="10"/>
	                                    <a style="display: none;" id="<?= $x; ?>" href="javascript:void(0)" class="update-qty">Update Cart</a>
	                                </td>
	                                <td><?php echo ngn($product['subtotal']); $total += $product['subtotal']; ?></td>
	                                <td>
	                                    <a class="fa fa-close table-shopping-remove" href="<?= base_url('cart/remove/' . $product['rowid']); ?>"></a>
	                                </td>
	                            </tr>
                        	<?php $x++; endforeach; ?>
                        </tbody>
                    </table>
                    <button type="submit" style="display: none;"></button>
                    <?= form_close(); ?>
                    <div class="gap gap-small"></div>
                </div>
                <div class="col-md-2">
                    <ul class="shopping-cart-total-list">
                        <li><span>Sub-total :</span><span>(<?= $this->cart->total_items(); ?>) items</span>
                        </li>
                        <li><span>Total :</span><span><?= ngn($total); ?></span>
                        </li>
                    </ul><a class="btn btn-primary" href="<?= base_url('checkout'); ?>">Checkout</a>
                </div>
            </div>
            <ul class="list-inline">
                <li><a class="btn btn-default" href="<?= base_url();?>">Continue Shopping</a>
                </li>
            </ul>
            <?php else: ?>
            <div class="text-center"><i class="fa fa-cart-arrow-down empty-cart-icon"></i>
                <p class="lead">You haven't Fill Your Shopping Cart Yet</p><a class="btn btn-primary btn-lg" href="<?= base_url();?>">Start Shopping <i class="fa fa-long-arrow-right"></i></a>
            </div>
        <?php endif; ?>
        </div>
        <div class="gap"></div>

	<?php $this->load->view('landing/resources/footer'); ?>

</div>
<?php $this->load->view('landing/resources/script'); ?>
<script>
	$(document).on('ready', function(){
		$('.quantity').change(function(){
			_this = $(this);
			let set = _this.data('set');
			let id = _this.data('id');
			if( set != _this.val() ){
				$("#"+id).show();
			}else{
				$("#"+id).hide();
			}
		});

		$('.update-qty').click(function(){
			$('#cart-form').submit();
		});

	})
</script>
</body>
</html>
