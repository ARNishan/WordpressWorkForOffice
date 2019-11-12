<?php

include 'Database.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div id="session">
        
    </div>


<table class="table">
    <thead>
    <tr>
        <th scope="col">Amount</th>
        <th scope="col">$0-99 (Tier 1)</th>
        <th scope="col">$100-169 (Tier 2)</th>
        <th scope="col">$170-499 (Tier 3)</th>
        <th scope="col">$500-999  (Tier 4)</th>
        <th scope="col">$1000+  (Tier 5)</th>
    </tr>
    </thead>
    <?php

    $query = "SELECT * FROM delivery_fee";
    $post = $db->select($query);
        $i = 0;
        while($result = $post->fetch_assoc()){
            $i++;
            ?>
            <tbody>

            <tr>
                <td><?php echo $result['Range_KM']?></td>
                <td><input id="<?php echo $result['id']?>"  onkeypress="tire1function(this.id, this.value, event)" type="text" name="DeliveryFeeTier1" value="<?php echo $result['DeliveryFeeTier1']?>"></td>
                <td><input id="<?php echo $result['id']?>" onkeypress="tire2function(this.id, this.value, event)" type="text" name="DeliveryFeeTier2[]" value="<?php echo $result['DeliveryFeeTier2']?>"></td>
                <td><input id="<?php echo $result['id']?>" onkeypress="tire3function(this.id, this.value, event)"type="text" name="DeliveryFeeTier3[]" value="<?php echo $result['DeliveryFeeTier3']?>"></td>
                <td><input id="<?php echo $result['id']?>" onkeypress="tire4function(this.id, this.value, event)"type="text" name="DeliveryFeeTier4[]" value="<?php echo $result['DeliveryFeeTier4']?>"></td>
                <td><input id="<?php echo $result['id']?>" onkeypress="tire5function(this.id, this.value, event)" type="text" name="DeliveryFeeTier5[]" value="<?php echo $result['DeliveryFeeTier5']?>"></td>
            </tr>
            </tbody>

        <?php }?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">

        function tire1function(id, val, event) {
            if (event.keyCode == 13 || event.which == 13){
                console.log("before"+ val);
                $.ajax({
                url: "edit.php",
                type: 'GET',
                data: {id:id, val:val,tire:1},
                success: function (data) {
                    //document.getElementById('session').innerHTML = data;
                    console.log(data);
                    setTimeout(function(){ alert(data); }, 1000);
                }
            });
            }
            
            
        }
        function tire2function(id, val, event) {
            if (event.keyCode == 13 || event.which == 13){
                console.log("before"+ val);
            $.ajax({
                url: "edit.php",
                type: 'GET',
                data: {id:id, val:val,tire:2},
                success: function (data) {
                    console.log(data);
                    setTimeout(function(){ alert(data); }, 1000);
                }
            });
            }
        }
        function tire3function(id, val, event) {
            if (event.keyCode == 13 || event.which == 13){
                console.log("before"+ val);
            $.ajax({
                url: "edit.php",
                type: 'GET',
                data: {id:id, val:val, tire:3},
                success: function (data) {
                    console.log(data);
                    setTimeout(function(){ alert(data); }, 1000);
                }
            });
            }
        }
        function tire4function(id, val, event) {
            if (event.keyCode == 13 || event.which == 13){
                console.log("before"+ val);
            $.ajax({
                url: "edit.php",
                type: 'GET',
                data: {id:id, val:val,tire:4},
                success: function (data) {
                    console.log(data);
                    setTimeout(function(){ alert(data); }, 1000);
                }
            });
            }
        }
        function tire5function(id, val, event) {
            if (event.keyCode == 13 || event.which == 13){
                console.log("before"+ val);
            $.ajax({
                url: "edit.php",
                type: 'GET',
                data: {id:id, val:val,tire:5},
                success: function (data) {
                    console.log(data);
                    setTimeout(function(){ alert(data); }, 1000);

                }
            });
          }
        }


    </script>

</body>
</html>