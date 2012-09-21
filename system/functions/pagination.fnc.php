<?

function pagination($pg_no,$total_results,$per_page,$url,$url_type='link')
{
	$total_pgs = ceil($total_results / $per_page );
	$prev_pg = ""; $next_pg = "";
	
	if ( $total_pgs > 1 )
	{
		if($pg_no > 1)
		{
		 $prev_pg_no = $pg_no-1;
		 if($url_type == 'link')
		 	$prev_pg = "<a href='{$url}&pg_no=$prev_pg_no' ><b>Previous</b></a>";
		 else
		 	$prev_pg = "<a href='javascript:void(0)' onclick = \"{$url_type}('{$url}&pg_no=$prev_pg_no')\" ><b>Previous</b></a>";
		}
		else
			$prev_pg = " Previous ";
			
		if($pg_no < ceil($total_results/$per_page))
		{
		 $next_pg_no = $pg_no+1;
		 if($url_type == 'link')
		 	$next_pg = "<a href='{$url}&pg_no=$next_pg_no' ><b>Next</b></a>";
		 else
		 	$next_pg = "<a href='javascript:void(0)' onclick = \"{$url_type}('{$url}&pg_no=$next_pg_no')\" ><b>Next</b></a>";
		}
		else
			$next_pg = "  Next ";
		$page_anchors = " &nbsp; ";
		
	
		$i_start = ( $pg_no > 12 ) ? ( $pg_no - 10 ) : 1  ;
		
		$i_end = ( $total_pgs > ( $pg_no + 12 ) ) ? ( $pg_no + 10 ) : $total_pgs;
		
		
		if( $i_start != 1 )
		{
			if($url_type == 'link')
		 		$page_anchors .= "<a href='{$url}&pg_no=1' ><b>1</b></a>";
			else
		 		$page_anchors .= "<a href='javascript:void(0)' onclick = \"{$url_type}('{$url}&pg_no=1')\" ><b>1</b></a>";
			
		}
		
		
		for( $i = $i_start ; $i <= $i_end ; $i++)
		{
			if($i == $pg_no)
				$page_anchors .= "<b>$pg_no</b>&nbsp;";
			else
			{
			
				if($url_type == 'link')
		 			$page_anchors .= "<a href='{$url}&pg_no=$i' >$i</a>&nbsp;";
				else
		 			$page_anchors .= "<a href='javascript:void(0)' onclick = \"{$url_type}('{$url}&pg_no=$i')\" >$i</a>&nbsp;";
			
			}
		}
		
		
		if( $i_end != ceil($total_results/$per_page) )
		{

			if($url_type == 'link')
				$page_anchors .= "<a href='{$url}&pg_no=".ceil($total_results/$per_page)."' ><b>".ceil($total_results/$per_page)."</b></a>&nbsp;";
			else
				$page_anchors .= "<a href='javascript:void(0)' onclick = \"{$url_type}('{$url}&pg_no=".ceil($total_results/$per_page)."')\" ><b>".ceil($total_results/$per_page)."</b></a>&nbsp;";
				
		}
		
		return $prev_pg.$page_anchors.$next_pg;
	}
	else
	{
		return "";
	}
	
}

?>