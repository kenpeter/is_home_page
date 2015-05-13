


<script>

var url = "https://test1.com/fs/sdfd";
is_home_page(url);

// Define your functions
function is_home_page(url)
{
	var condi = false;

	var sanitized_url = url.replace(/.*?:\/\//g, '');
	var array = sanitized_url.split('/');
	
	if(array.length === 1)
	{
		condi = true;
	}
	else if(array.length === 2)
	{
		if(array[1] === '')
		{
			condi = true;
		}
	}
	
	return condi;
}


</script>
