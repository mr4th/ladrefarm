
 <div class="col-md-12" style="margin-right:300px">
<div class="row">
<h1 class="page-header">
   All Orders

</h1>

<h4 class= "bg-success"><?php display_message(); ?></h4>
</div>

<div class="row" style="background-color:white">
<table class="table table-hover">
    <thead>

      <tr>
           <th>id</th>
           <th>Amount</th>
           <th>Product</th>
           <th>Transaction</th>
           <th>Status</th>
           <th>Name</th>
           <th>Email</th>
           <th>Phone</th>
           <th>Company</th>
           <th>Address</th>
           <th>Town</th>
           <th>State</th>
           <th>Country</th>
           <th>Postcode</th>
           <th>Order notes</th>
           <th>Date</th>
   
      </tr>
    </thead>
    <tbody>
        <?php display_orders(); ?>

    </tbody>
</table>
</div>