<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title></title>
	<style type="text/css">
		body {
			/*font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;*/
			font-family: 'Roboto', 'RobotoDraft', 'Helvetica', 'Arial', sans-serif
		}
		h1 {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		}
		h2 {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		}
		.container {
			padding-left: 15px;
			padding-right: 15px;
			margin: auto;
			background-color: #f8f8f8;
			color: black;
			display: block;
		}
		.row {
			display: block;
			margin-left: 15px;
			margin-right: 15px;
			box-sizing: border-box;
		}
		.col-sm-4 {
			width: 40%;
			position: relative;
			float: left;
			min-height: 1px;
			padding-right: 15px;
			padding-left: 15px;
			box-sizing: border-box;
		}
		.col-xs-12 {
			width: 100%;
			position: relative;
			float: left;
			min-height: 1px;
			padding-right: 15px;
			padding-left: 15px;
			box-sizing: border-box;
		}
		.invoice {
			position: relative;
			background: #fff;
			border: 1px solid #f4f4f4;
			padding: 20px;
		}
		address {
			margin-bottom: 20px;
			font-style: normal;
			line-height: 1.42857143;
		}
		section {
			display: block;
		}
		.pull-right {
			float: right !important;
		}
		.page-header {
			margin: 10px 0 20px 0;
			font-size: 22px;
			padding-bottom: 20px;
			border-bottom: 1px solid #eee;
		}
		.page-header > small {
			color: #666;
			display: block;
			font-size: 65%;
			font-weight: 400;
			line-height: 1;
		}
		#customers {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
			background-color: white;
			text-align: center;
		}
		#customers td, #customers th {
			border: 1px solid #ddd;
			padding: 15px;
		}
		#customers tr:hover {background-color: #ddd;}
		#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: center;
			background-color: #72a6c2;
			color: black;
		}
		@media only screen and (max-device-width: 480px) 
		{
			table[class=hide], img[class=hide], td[class=hide] 
			{
				display: none !important;
			}
			.contents1 {
				width: 100%;
			}
			.col-sm-4 {
				width: 100%;
				position: relative;
				float: left;
				min-height: 1px;
				padding-right: 15px;
				padding-left: 15px;
				box-sizing: border-box;
			}

		}
	</style>
</head>
<body style="">
	<!-- <div style="text-align: center; background-color: #f8f8f8; padding-top: 20px; padding-bottom: 20px;">
		<img style="position: absolute;" src="http://ridein.com/admin/images/myLogo.png" alt="Thank you image">
	</div> -->
	<div style="background: #efeff0; text-align: center;">
		<img style="margin: auto; width: 60%;" src="{{ asset('img/thank-you-contacting-us.png') }}" alt="Thank you image">
	</div>
	<div class="container">
		<section class="invoice">
			<div class="row">
				<div style="font-size: 16px; padding: 30px 10px">We have received you request and we will get in touch with you soon. For more information visit <a href="https://services.sellzmart.com">Sellzmart Services</a></div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h2 class="page-header">
						<small class="pull-right">Date: 21/7/2020</small>
					</h2>
				</div>
				<!-- /.col -->
			</div>
			<!-- info row -->
			<div class="row invoice-info">
				<div class="col-sm-4 invoice-col">
					From
					<address>
						<strong>Sellzmart Services</strong><br>
						13/H/46, Braunfield Row<br>
						Kolkata-700027, West Bengal, India<br><br>
						Phone: (+91) 99038 68412<br>
						Email: care@sellzmart.com<br>
					</address>
				</div>
				<!-- /.col -->
				<div class="col-sm-4 invoice-col">
					To
					<address>
						<strong>{{ $request->name }}</strong><br>
						Email: {{ $request->email }}
					</address>
				</div>
				<!-- /.col -->
				
				<!-- /.col -->
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-12">
					<table id="customers" style="overflow-x: scroll;">
						<!-- <thead>
							<tr>
								<th>Qty</th>
								<th>Subtotal</th>
							</tr>
						</thead> -->
						<tbody>
							<tr>
								<td>Subject</td>
								<td>{{ $request->subject }}</td>
							</tr>
							<tr>
								<td>Message</td>
								<td>{{ $request->message }}</td>
							</tr>
						</tbody>
					</table>
					<div style="margin-top: 20px; font-size: 14px;"><b>Thank You!<br>Team Sellzmart Services Admin.</b></div><br><br>
					<div style="text-align: right;">This is an autogenerated email. Please do not reply to this.<br><br></div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>