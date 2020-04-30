<style>
    .invoice-title h2, .invoice-title h3 {
        display: inline-block;
    }

    .table > tbody > tr > .no-line {
        border-top: none;
    }

    .table > thead > tr > .no-line {
        border-bottom: none;
    }

    .table > tbody > tr > .thick-line {
        border-top: 2px solid;
    }
    </style>
    <script>
		window.print();
	</script>
<?php $this->load->view('layouts/head'); ?>
<body>
  <div class="container">
    <div class="row">
        <div class="col-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2><h3 class="pull-right">Order # <?php echo $transaksi->kode_transaksi ?></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-6">
    				<address>
    				<strong>Dikirim ke :</strong><br>
    					<?php echo $this->session->nama ?><br>
    					<?php echo $this->session->no_telepon ?><br>
    					<?php echo $this->session->email ?><br>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					Visa ending **** 4242<br>
    					jsmith@email.com
    				</address>
    			</div>
    			<div class="col-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					<?php echo date('d F Y', strtotime($transaksi->tgl_transaksi )); ?><br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="row">
    	<div class="col-lg-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<?php foreach ($single as $s): ?>
                    <tr>
                      <td><?php echo $s->nama_wisata ?></td>
                      <td class="text-center">Rp <?php echo number_format($s->harga) ?></td>
                      <td class="text-center"><?php echo $s->jumlah_tiket ?></td>
                      <td class="text-right">Rp <?php echo number_format($s->sub_total) ?></td>
                    </tr>
                  <?php endforeach; ?>


    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Total</strong></td>
    								<td class="thick-line text-right">Rp <?php echo number_format($s->total) ?></td>
    							</tr>

    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>

  </body>

<!-- Mirrored from www.ansonika.com/citytours/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Apr 2020 23:25:39 GMT -->
</html>
