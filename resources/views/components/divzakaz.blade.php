
   
  <div class="divZakaz">

   
    <div class="kol" id="kol">

    <script>
        //localStorage.setItem('name', 'irina');
      //document.write(localStorage.getItem('name'));
      
      //document.write(localStorage.getItem('OrderCount'));
       $orderCount = localStorage.getItem('OrderCount'); 
    if ($orderCount === null) {
      document.write(0);
    } else {
      document.write($orderCount);
    }
</script>

    </div>

    <div class="textZakaz">
      
    <a href="/book/order"> Заказ </a>
    </div>
</div>