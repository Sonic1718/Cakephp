

<div class="col-lg-12">
 <h1>Application for Registration as Imported/Dealer of Imported Wood Materials</h1>
 <h2>Search</h2>
 <input type="text" class='form-control' id='search'>
</div>

<div class="col-lg-12" id='wew'>

</div>


<script type="text/javascript">
  $(document).ready(function(){

  	$('#search').keyup(function(){
  		$.ajax({
  			
  			url:window.location.origin+'/member/posts/forestlumbajax/'+$('#search').val(),
			success:function(result){
				$('#wew').html(result);
  			}
  		});
  	});

  });
</script>