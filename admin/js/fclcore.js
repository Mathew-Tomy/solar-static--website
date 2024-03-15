$(function() {

	$(".tbl_repeat tbody").tableDnD({
		onDrop: function(table, row) {
			var orders = $.tableDnD.serialize();
			//alert(orders);
			
			$.post("catorder.php", { orders : orders },
			 function(data,status){
				  
				 //$("#contentRight").html(data);
       // alert("Order successfully changed.");
		
    });
	/* $.ajax({
            url: "order.php",
            type: "POST",
            data: "orders="+orders,
            success: function (response) {
                console.log(response);
                //$("#user").html(response);
            },
        });*/
		}
	});

});