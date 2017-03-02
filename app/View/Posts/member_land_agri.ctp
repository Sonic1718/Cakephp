

<div class="col-lg-12">
 <h1>Agricultural, Foreshore, Reclaimed Land or Miscellaneous Lease Application</h1>
 <h2>Search</h2>
 <input type="text" class='form-control' id='search'>
</div>

<div class="col-lg-12" id='wew'>

</div>


<script type="text/javascript">
  $(document).ready(function(){

  	$('#search').keyup(function(){
  		$.ajax({
  			
  			url:window.location.origin+'/member/posts/landagriculture/'+$('#search').val(),
			success:function(result){
				$('#wew').html(result);
  			}
  		});
  	});

  });
</script>