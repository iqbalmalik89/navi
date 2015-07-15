@if($setting['view-method'] =='native')
<div class="sbox">
	<div class="sbox-title">  
		<h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small>{{ $pageNote }}</small>
			<a href="javascript:void(0)" class="collapse-close pull-right btn btn-xs btn-danger" onclick="ajaxViewClose('#{{ $pageModule }}')">
			<i class="fa fa fa-times"></i></a>
		</h4>
	 </div>

	<div class="sbox-content"> 
@endif	

		<table class="table table-striped table-bordered" >
			<tbody>	
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}	
						</td>
						<td>{{ $row->id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Nome', (isset($fields['nome']['language'])? $fields['nome']['language'] : array())) }}	
						</td>
						<td>{{ $row->nome }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Mac', (isset($fields['mac']['language'])? $fields['mac']['language'] : array())) }}	
						</td>
						<td>{{ $row->mac }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Description', (isset($fields['description']['language'])? $fields['description']['language'] : array())) }}	
						</td>
						<td>{{ $row->description }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Lat', (isset($fields['lat']['language'])? $fields['lat']['language'] : array())) }}	
						</td>
						<td>{{ $row->lat }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Long', (isset($fields['long']['language'])? $fields['long']['language'] : array())) }}	
						</td>
						<td>{{ $row->long }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Visible', (isset($fields['visible']['language'])? $fields['visible']['language'] : array())) }}	
						</td>
						<td>{{ $row->visible }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>
							{{ SiteHelpers::activeLang('Gid', (isset($fields['gid']['language'])? $fields['gid']['language'] : array())) }}	
						</td>
						<td>{{ $row->gid }} </td>
						
					</tr>
				
			</tbody>	
		</table>  
			
		 	

@if($setting['form-method'] =='native')
	</div>	
</div>	
@endif	

<script>
$(document).ready(function(){

});
</script>	