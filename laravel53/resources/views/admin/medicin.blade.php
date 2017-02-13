<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Autocomplete textbox using jQuery, PHP and MySQL by CodexWorld</title>
  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> -->
  <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
   <!--  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> -->
  <link rel="stylesheet" type="text/css" href="{{URL::to('jquery-ui/jquery-ui.css')}}">
  <script src="{{URL::to('js/jquery-2.1.4.min.js')}}"></script>
  <script src="{{URL::to('jquery-ui/jquery-ui.js')}}"></script>
  <script>

  // $(function() {
  //   $( "#product_name" ).autocomplete({
  //     source: "search/autocomplete",
  //     minlength:1,
  //     autoFocus:true,
  //     select:function(e,ui){
  //       alert(e);
  //     }
  //   });
  // });


  // $(document).ready(function(){
  //     $(document).on('keyup','#product_name',function(){
  //         var name=$(this).val();
  //         $.ajax({
  //             url:"{{URL::to('/all-medicin')}}",
  //             type:"GET",
  //             data:{name:name},
  //             async:false,
  //             success:function(data){
  //               alert(data);
  //               //data=JSON.parse(data);
  //             }
  //           });
  //     });
  // });
  
   $(document).ready(function() {
    src = "{{URL::to('search/autocomplete')}}";
     $("#product_name").autocomplete({
        autoFocus: true,
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term
                },
                success: function(data) {
                  //alert(data);
                    response(data); 
                }
            });
        },
        min_length: 3,
       
    }).keyup(function(e){
      if ($('#product_name').val()!=null && $('#product_name').val()!=""){
            if (e.keyCode === 13){
                //alert('enter was pressed');
                //event.preventDefault();

                 $.ajax({
                    url: "{{URL::to('search/get-info')}}",
                    dataType: "json",
                    data: {
                        term: $('#product_name').val()
                    },
                    success: function(result) {
                      if(result!=null && result!=""){
                      var tr="";
                        $.each(result,function(key,item){
                            tr+='<tr>'
                            tr+='<td>'+item.id+'</td>'
                            tr+='<td>'+item.product+'</td>'
                            tr+='<td>'+item.qty+'</td>'
                            tr+='<td>'+item.price+'</td>'
                             tr+='</tr>';
                        });
                        $("#tbl").html(tr);
                      }else{
                        $("#tbl").html("");
                      }
                    }
                });
            }
          }else{
            $("#tbl").html("");
          }
             });
});
</script>
</head>
<body>
 
<div class="ui-widget">

  <label for="skills">Product Name: </label>
  <input id="product_name" name="product">
  <br><br><br>
  <table border="1px">
    <thead>
      <tr>
        <th>Id</th>
        <th>Product</th>
        <th>Qty</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody id="tbl">
    </tbody>
  </table>

  
</div>
</body>
</html>